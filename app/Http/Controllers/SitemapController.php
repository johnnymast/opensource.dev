<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;

class SitemapController extends Controller
{
    public function index()
    {
        $page = Page::whereStatus('ACTIVE')->orderBy('updated_at', 'desc')->first();

        return response()->view('sitemap.index', compact('page'))->header('Content-Type', 'text/xml');
    }

    public function pages()
    {
        $pages = Page::whereStatus('ACTIVE')->orderBy('updated_at', 'desc')->get();

        return response()->view('sitemap.pages', compact('pages'))->header('Content-Type', 'text/xml');
    }
}
