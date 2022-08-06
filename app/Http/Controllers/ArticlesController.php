<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $article = Article::all();
        $tag= Tag::all();

        return view('articles.index', ['article' => $article, 'tag'=>$tag]);
    }


    public function show (Article $article) {


        return view('articles.show', ['article' => $article]);
    }


    public function store (Request $request) {

        $article = new Article();
        $article->title = $request->title;
        $article->category_id = $request->category_id;
        $article->image = $request->image;
        $article->content = $request->content;

        $article->save();

        $article->tags()->sync($request->tags);

        // $article = ::create($request->all());

        return redirect()->route('articles.show', $article);
    }

    public function edit($id)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $articles = Article::findOrFail($id);
        return view('articles.edit', ['article' => $articles] ,  ['categories' => $categories, 'tags' => $tags]);
    }

    public function update(article $article, Request $request)
    {
        $article->title = $request->title;
        $article->category_id = $request->category_id;
        $article->image = $request->image;
        $article->content = $request->content;

        $article->update($request->all());

        // $article = Post::findOrFail($id);
        // $article->title = $request->title;
        $article->tags()->sync($request->tags);

        return redirect('/articles');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('/articles');
}
}
