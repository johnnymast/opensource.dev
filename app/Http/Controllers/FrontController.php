<?php

namespace App\Http\Controllers;

use App\ProgrammingLanguage;
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
            $languages[$language->id] = $language->title;
        }

        $args = [
            'languages' => $languages,
        ];
        if ($request->isMethod('post')) {
            $data = $request->validate([
                //         'g-recaptcha-response' => 'required|captcha',
                'language' => 'required',
            ]);
            $args['projects'] = $this->test();
        }

        return view('home.index', $args);
    }

    public function test()
    {
        $items = [
            [
                'title' => 'title1',
                'user' => 'user1',
                'content' => 'This is some sample <b>html</b>',
                'tags' => [
                    [
                        'title' => 'help wanted',
                        'type' => 'helpwanted',
                    ],
                    [
                        'title' => 'good first issue',
                        'type' => 'goodfirstissue',
                    ],

                ],
            ],
            [
                'title' => 'title2',
                'user' => 'user2',
                'content' => 'This is some sample <b>html</b>',
                'tags' => [
                    [
                        'title' => 'help wanted',
                        'type' => 'helpwanted',
                    ],
                    [
                        'title' => 'good first issue',
                        'type' => 'goodfirstissue',
                    ],

                ],
            ],
            [
                'title' => 'title3',
                'user' => 'user3',
                'content' => 'This is some sample <b>html</b>',
                'tags' => [
                    [
                        'title' => 'help wanted',
                        'type' => 'helpwanted',
                    ],
                    [
                        'title' => 'good first issue',
                        'type' => 'goodfirstissue',
                    ],

                ],
            ],
            [
                'title' => 'title4',
                'user' => 'user4',
                'content' => 'This is some sample <b>html</b>',
                'tags' => [
                    [
                        'title' => 'help wanted',
                        'type' => 'helpwanted',
                    ],
                    [
                        'title' => 'good first issue',
                        'type' => 'goodfirstissue',
                    ],

                ],
                'tags' => [
                    [
                        'title' => 'help wanted',
                        'type' => 'helpwanted',
                    ],
                    [
                        'title' => 'good first issue',
                        'type' => 'goodfirstissue',
                    ],

                ],
            ],
            [
                'title' => 'title5',
                'user' => 'user5',
                'content' => 'This is some sample <b>html</b>',
                'tags' => [
                    [
                        'title' => 'help wanted',
                        'type' => 'helpwanted',
                    ],
                    [
                        'title' => 'good first issue',
                        'type' => 'goodfirstissue',
                    ],

                ],
            ],
            [
                'title' => 'title6',
                'user' => 'user6',
                'content' => 'This is some sample <b>html</b>',
                'tags' => [
                    [
                        'title' => 'help wanted',
                        'type' => 'helpwanted',
                    ],
                    [
                        'title' => 'good first issue',
                        'type' => 'goodfirstissue',
                    ],

                ],
            ],
            [
                'title' => 'title7',
                'user' => 'user7',
                'content' => 'This is some sample <b>html</b>',
                'tags' => [
                    [
                        'title' => 'help wanted',
                        'type' => 'helpwanted',
                    ],
                    [
                        'title' => 'good first issue',
                        'type' => 'goodfirstissue',
                    ],

                ],
            ],
            [
                'title' => 'title8',
                'user' => 'user8',
                'content' => 'This is some sample <b>html</b>',
                'tags' => [
                    [
                        'title' => 'help wanted',
                        'type' => 'helpwanted',
                    ],
                    [
                        'title' => 'good first issue',
                        'type' => 'goodfirstissue',
                    ],

                ],
            ],
            [
                'title' => 'title9',
                'user' => 'user9',
                'content' => 'This is some sample <b>html</b>',
                'tags' => [
                    [
                        'title' => 'help wanted',
                        'type' => 'helpwanted',
                    ],
                    [
                        'title' => 'good first issue',
                        'type' => 'goodfirstissue',
                    ],

                ],
            ],
            [
                'title' => 'title10',
                'user' => 'user10',
                'content' => 'This is some sample <b>html</b>',
                'tags' => [
                    [
                        'title' => 'help wanted',
                        'type' => 'helpwanted',
                    ],
                    [
                        'title' => 'good first issue',
                        'type' => 'goodfirstissue',
                    ],

                ],
            ],
        ];
        $items = collect($items);

        return $items->chunk(2);
    }
}
