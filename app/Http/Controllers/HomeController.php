<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $article = Article::paginate(6);
        $categories = Category::all();
        $tags = Tag::all();
        return view('home', ['article' => $article, 'categories' => $categories, 'tags' => $tags]);
    }
    public function show($locale)
    {
        $article = Article::all();

        $categories = Category::all();
        $tags = Tag::all();

        return view('show', ['article' => $article, 'categories' => $categories, 'tags' => $tags,  ]);
    }

    public function search(Request $request)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $search = $request->input('search');

        $article = Article::query()->where('title', 'LIKE', "%{$search}%")->orWhere('content', 'LIKE', "%{$search}%")->get();
        return view('show', ['article' => $article, 'categories' => $categories, 'tags' => $tags]);
    }
    public function filter(Request $request)
    {
        $categories = $request->get('category_id');

        $article = Article::query()->where('category_id', 'LIKE', "%{$categories}%")->get();


        return view('filter', ['article' => $article]);
    }
}
