<?php

namespace App\Http\Controllers;

use App\ProgrammingLanguage;
use App\Quote;
use GrahamCampbell\GitHub\Facades\GitHub;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $active_languages = ProgrammingLanguage::whereActive(true)->get();

        $languages = [];
        foreach ($active_languages as $language) {
            $languages[$language->github_keyword] = $language->title;
        }

        $args = [
            'languages' => $languages,
            'randomquote' => Quote::inRandomOrder()->whereStatus('PUBLISHED')->first(),
        ];
        if ($request->isMethod('post')) {
            $data = $request->validate([
                'g-recaptcha-response' => 'required|captcha',
                'language' => 'required',
            ]);

            $query = 'label:"good first issue"  language:'.$data['language'];

            $github_issues = GitHub::connection()->search()->issues($query);
            $issues = [];

            foreach ($github_issues['items'] as $issue) {

                $parts = explode('/', $issue['repository_url']);
                $repo = end($parts);

                $newissue = [
                    'title' => $issue['title'],
                    'state' => $issue['state'],
                    'url' => $issue['html_url'],
                    'repository_url' => $issue['repository_url'],
                    'repository_name' => $repo,
                    'user' => [
                        'name' => $issue['user']['login'],
                        'profile' => $issue['user']['html_url'],
                        'avatar' => $issue['user']['avatar_url'],
                    ],
                    'tags' => [],
                    'content' => Markdown::convertToHtml(str_limit($issue['body'], 100)),
                ];

                if (count($issue['labels']) > 0) {
                    foreach ($issue['labels'] as $label) {
                        $newissue['tags'][] = [
                            'name' => $label['name'],
                            'color' => $label['color'],
                        ];
                    }
                }

                $issues[] = $newissue;
            }

            if (count($issues) == 0) {
                return redirect()->route('home')->withErrors(['No jobs found i\'im so sorry']);
            }
            $projects = collect($issues)->chunk(2);

            $args['projects'] = $projects;
        }

        return view('home.index', $args);
    }
}
