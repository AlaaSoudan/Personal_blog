<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

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
    {    $article = Article::paginate(6);
        $categories = Category::all();
        $tags = Tag::all();
        return view('home'  , ['article' => $article ,'categories'=>$categories , 'tags'=>$tags]);
    }
    public function show()
    {
        $article = Article::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('show'  , ['article' => $article ,'categories'=>$categories , 'tags'=>$tags]);
    }


}
