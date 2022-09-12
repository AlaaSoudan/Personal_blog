<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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
        $data=$request->all();

        $name=$data['cate_name'];

        $data['slug']=Str::slug($name);

        $category=Category::create($data);

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
        $data=$request->all();

        $name=$data['cate_name'];

        $data['slug']=Str::slug($name);

         $category->update($data);

      // return view('category.show');
      return redirect('/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/categories');
}

}
