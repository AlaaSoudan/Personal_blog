<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $categories = Category::all();
        return view('category.index', ['categories' => $categories]);
    }
    public function create()
    {
        return view('category.addcategory');
    }

  public function store(Request $request)
    {
         $category = new Category();
         $category->cate_name = $request->cate_name;
         $category->slug = $request->slug;
         $category->image = $request->image;
         $category->save();
         return redirect()->route('categories.show', $category);
    }
    public function show(Category $category)
    {
        return view('category.show');
    }
    public function edit(Category $category)
    {
        return view('category.editcategory',  ['category' => $category]);
    }


    public function update(Category $category, Request $request)
    {


         $category->update($request->all());
       $category = Category::findOrFail($category->id);
       $category->cate_name = $request->cate_name;
       $category->slug = $request->slug;
       $category->image = $request->image;
       $category->save();
      // return view('category.show');
      return redirect('/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/categories');
}

}
