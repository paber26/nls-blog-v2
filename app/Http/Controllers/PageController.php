<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $products = \App\Models\Product::take(3)->get();
        $courses = \App\Models\Course::take(6)->get();
        $tryouts = \App\Models\Tryout::take(4)->get();
        $programs = \App\Models\Program::take(3)->get();
        $articles = \App\Models\Article::latest()->take(3)->get();

        return view('pages.home', compact('products', 'courses', 'tryouts', 'programs', 'articles'));
    }
}
