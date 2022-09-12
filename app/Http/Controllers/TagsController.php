<?php

namespace App\Http\Controllers;

use App\Models\Tag;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagsController extends Controller
{


/*         public function __construct()
    {
        $this->middleware('auth');
    } */
    public function index(Tag $tag)
    {
        $tags = Tag::all();

        return view('tags.index', ['tags' => $tags]);
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {   $data=$request->all();
        $name=$data['name'];

        $data['slug']=Str::slug($name);

        $tag = Tag::create($data);


        return redirect()->route('tags.index');
    }
    public function edit(Tag $tag)
    {
        return view('tags.edit', ['tag' => $tag]);
    }



    public function update(Tag $tag, Request $request)
    {
        $data=$request->all();
        $name=$data['name'];

        $data['slug']=Str::slug($name);



        $tag->update($data);

        return redirect('/tags');
    }


    public function destroy(Tag $tag)
    {

        $tag->delete();

        return redirect('/tags');
    }

}

