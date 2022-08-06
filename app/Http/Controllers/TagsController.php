<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

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
    {
        $request->validate([
            'name'             => 'required|min:4|max:255',
            'slug'             => 'required|min:4|max:255',
        ]);

        $tag = Tag::create($request->all());

        return redirect()->route('tags.index')->with('success', 'The Tag was created successfully');
    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tags.edit', ['tag' => $tag]);
    }



    public function update(Tag $tag, Request $request)
    {
        $tag->name = $request->name;
        $tag->slug = $request->slug;


        $tag->update($request->all());

        return redirect('/tags');
    }


    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect('/tags');
    }

}
