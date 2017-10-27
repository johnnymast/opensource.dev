<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    public function test()
    {
        $items = [
            [
                'title' => 'title1',
                'user' => 'user1',
                'content' => 'This is the placeholder for content 1. Phasellus nec iaculis mauris. <a data-v-17dd50a0="">@bulmaio</a><a data-v-17dd50a0="" href="#">#css</a> <a data-v-17dd50a0="" href="#">#responsive</a>',
            ],
            [
                'title' => 'title2',
                'user' => 'user2',
                'content' => 'This is the placeholder for content 2. Phasellus nec iaculis mauris. <a data-v-17dd50a0="">@bulmaio</a><a data-v-17dd50a0="" href="#">#css</a> <a data-v-17dd50a0="" href="#">#responsive</a>',
            ],
            [
                'title' => 'title3',
                'user' => 'user3',
                'content' => 'This is the placeholder for content 3. Phasellus nec iaculis mauris. <a data-v-17dd50a0="">@bulmaio</a><a data-v-17dd50a0="" href="#">#css</a> <a data-v-17dd50a0="" href="#">#responsive</a>',
            ],
            [
                'title' => 'title4',
                'user' => 'user4',
                'content' => 'This is the placeholder for content 4. Phasellus nec iaculis mauris. <a data-v-17dd50a0="">@bulmaio</a><a data-v-17dd50a0="" href="#">#css</a> <a data-v-17dd50a0="" href="#">#responsive</a>',
            ],
            [
                'title' => 'title5',
                'user' => 'user5',
                'content' => 'This is the placeholder for content 5. Phasellus nec iaculis mauris. <a data-v-17dd50a0="">@bulmaio</a><a data-v-17dd50a0="" href="#">#css</a> <a data-v-17dd50a0="" href="#">#responsive</a>',
            ],
            [
                'title' => 'title6',
                'user' => 'user6',
                'content' => 'This is the placeholder for content 6. Phasellus nec iaculis mauris. <a data-v-17dd50a0="">@bulmaio</a><a data-v-17dd50a0="" href="#">#css</a> <a data-v-17dd50a0="" href="#">#responsive</a>',
            ],
            [
                'title' => 'title7',
                'user' => 'user7',
                'content' => 'This is the placeholder for content 7. Phasellus nec iaculis mauris. <a data-v-17dd50a0="">@bulmaio</a><a data-v-17dd50a0="" href="#">#css</a> <a data-v-17dd50a0="" href="#">#responsive</a>',
            ],
            [
                'title' => 'title8',
                'user' => 'user8',
                'content' => 'This is the placeholder for content 8. Phasellus nec iaculis mauris. <a data-v-17dd50a0="">@bulmaio</a><a data-v-17dd50a0="" href="#">#css</a> <a data-v-17dd50a0="" href="#">#responsive</a>',
            ],
            [
                'title' => 'title9',
                'user' => 'user9',
                'content' => 'This is the placeholder for content 9. Phasellus nec iaculis mauris. <a data-v-17dd50a0="">@bulmaio</a><a data-v-17dd50a0="" href="#">#css</a> <a data-v-17dd50a0="" href="#">#responsive</a>',
            ],
            [
                'title' => 'title10',
                'user' => 'user10',
                'content' => 'This is the placeholder for content 10. Phasellus nec iaculis mauris. <a data-v-17dd50a0="">@bulmaio</a><a data-v-17dd50a0="" href="#">#css</a> <a data-v-17dd50a0="" href="#">#responsive</a>',
            ],
        ];
        $items = collect($items);
        return $items->chunk(2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
