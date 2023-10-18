<?php

namespace App\Http\Controllers;

use App\Models\Page;


class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('app.page.index', compact('pages'));
    }


    public function about()
    {
        $pages = Page::firstOrFail();
        return view('app.page.page', compact('pages'));
    }

    public function page($slug)
    {
        $pages = Page::findBySlug($slug);
        return view('app.page.page', compact('pages'));
    }
}
