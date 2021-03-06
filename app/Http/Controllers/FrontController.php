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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index(Request $request)
    {


        $args = [
            'randomquote' => Quote::inRandomOrder()->whereStatus('PUBLISHED')->first(),
            'languages' => ProgrammingLanguage::whereActive(true)->get()->mapWithKeys(function ($language) {
                return [$language->github_keyword => $language->title];
            }),
        ];


        if ($request->isMethod('post')) {
            $data = $request->validate([
                'g-recaptcha-response' => 'required|captcha',
                'language' => 'required',
            ]);

              return redirect()->route('home', [
                'language' => $data['language']
            ]);

        } else if ($request->isMethod('get') && $request->has('language')) {

            $issues = [];
            $query = 'label:"good first issue"  language:' .  $request->language;
            $github_issues = GitHub::connection()->search()->issues($query);

            foreach ($github_issues['items'] as $index => $issue) {

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
                    'content' => Markdown::convertToHtml($issue['body']),
                ];

                if (count($issue['labels']) > 0) {
                    foreach ($issue['labels'] as $label) {
                        $newissue['tags'][] = [
                            'name' => $label['name'],
                            'color' => '#' . $label['color'],
                            'url' => $issue['html_url'],
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
