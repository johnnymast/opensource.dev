<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;

class PagesController extends Controller
{
    /**
     * @param \TCG\Voyager\Models\Page $page
     */
    public function view(Page $page)
    {
        if (! $page->exists) {
            abort(404);
        }

        return view('pages.view', compact('page'));
    }
}
