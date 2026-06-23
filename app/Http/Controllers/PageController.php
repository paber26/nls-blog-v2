<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Product;
use App\Models\Program;
use App\Models\Tryout;
use App\Models\Article;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::take(3)->get();
        $courses = Course::take(6)->get();
        $tryouts = Tryout::take(4)->get();
        $programs = Program::take(3)->get();
        $articles = Article::latest()->take(3)->get();

        return view('pages.home', compact('products', 'courses', 'tryouts', 'programs', 'articles'));
    }

    public function courses(Request $request)
    {
        $category = $request->query('category');
        $coursesQuery = Course::query();
        
        if ($category && $category !== 'Semua') {
            $coursesQuery->where('category', $category);
        }
        
        $courses = $coursesQuery->get();
        $featuredCourse = $courses->first();
        
        return view('pages.courses.index', compact('courses', 'category', 'featuredCourse'));
    }

    public function courseDetail($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        return view('pages.courses.show', compact('course'));
    }

    public function products()
    {
        $products = Product::all();
        return view('pages.products.index', compact('products'));
    }

    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('pages.products.show', compact('product'));
    }

    public function programs()
    {
        $programs = Program::all();
        return view('pages.programs.index', compact('programs'));
    }

    public function programDetail($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        return view('pages.programs.show', compact('program'));
    }

    public function tryouts()
    {
        $tryouts = Tryout::all();
        return view('pages.tryouts.index', compact('tryouts'));
    }

    public function articles()
    {
        $articles = Article::latest()->paginate(9);
        return view('pages.articles.index', compact('articles'));
    }

    public function articleDetail($id)
    {
        $article = Article::where('slug', $id)->firstOrFail(); // using slug from id
        return view('pages.articles.show', compact('article'));
    }

    public function achievements()
    {
        return view('pages.achievements.index');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }
}
