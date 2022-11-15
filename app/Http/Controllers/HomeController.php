<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $article = Article::orderBy('created_at', 'desc')->limit(6)->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view('home', ['article' => $article, 'categories' => $categories, 'tags' => $tags]);
    }
    public function show()
    {
        $article = Article::all();
        $article = Article::select('id','title_'.LaravelLocalization::getCurrentLocale(). '  as title','content_'.LaravelLocalization::getCurrentLocale().'  as content' ,    'category_id','image','created_at','updated_at' )->get();

        $categories = Category::all();
        $tags = Tag::all();

        return view('show', ['article' => $article, 'categories' => $categories, 'tags' => $tags ]);
    }

    public function search(Request $request)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $search = $request->input('search');

        $article = Article::query()->where('title_en', 'LIKE', "%{$search}%")->orWhere('content_en', 'LIKE', "%{$search}%")->get();
        return view('/search', ['article' => $article, 'categories' => $categories, 'tags' => $tags]);
    }
    public function filter(Request $request)
    {
        $categories = $request->get('category_id');
        $article = Article::query()->where('category_id', 'LIKE', "%{$categories}%")->get();


        return view('/filter', ['article' => $article]);
       /*  return redirect('/show/{$categories}',['article' => $article ,'
        '=>$categories]); */
    }
}
