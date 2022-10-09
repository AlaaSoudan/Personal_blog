<?php

namespace App\Http\Controllers;

use App\Http\Requests\articlesForm;
use App\Http\Requests\DeleteArticles;
use App\Http\Requests\EditArticles;
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

    public function create()
    {

        $categories = Category::all();
        $tags = Tag::all();

        return view('articles.add', ['categories'=>$categories,'tags'=>$tags]);
    }
    public function show (Article $article) {


        return view('articles.show', ['article' => $article]);
    }


    public function store (articlesForm $request) {

        $data=$request->all();
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/images'),$image_name);

            $image_path = "/images/" . $image_name;
            $data['image']=$image_path;
        }
  /*       $request->validate([
            'title' => 'required|max:10',
            'content' =>'nullable',
        ]); */

        $article=Article::create($data);

        $article->tags()->sync($request->tags);

        return redirect()->route('articles.show', $article)->with('status','good job ffg;');
    }

    public function edit( $id)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $articles = Article::findOrFail($id);
        return view('articles.edit', ['article' => $articles] ,  ['categories' => $categories, 'tags' => $tags]);
    }

    public function update(EditArticles $request ,article $article)
    {
        $article->title = $request->title;
        $article->category_id = $request->category_id;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/images'),$image_name);

            $image_path = "/images/" . $image_name;

            $article->image = $image_path;
        }

        $article->content = $request->content;

        $article->update($request->all());

        // $article = Post::findOrFail($id);
        // $article->title = $request->title;
        $article->tags()->sync($request->tags);

        return redirect('/articles');
    }

    public function destroy(Article $article , DeleteArticles $request)
    {
        $article->delete($request);
        $article->tags()->sync([]);
        return redirect('/articles');
}
}
