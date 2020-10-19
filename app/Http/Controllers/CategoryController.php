<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::orderBY('id','desc')->with('hasProducts','hasParentCate')->get();
        return view('category.index',compact('category'));
    }
    public function delete(Request $request)
    {
        $category = Category::find($request->id);
        if($category){
            $category->delete();
            return redirect()->route('category.index')->with('msg', 'Xóa danh mục thành công');
        }
    }
    public function edit(Request $request)
    {
     $category = Category::find($request->id);
    return view('category.edit',compact('category'));

    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $data = $request->all();
        $category->fill($data);
        $category->save();
        return redirect()->route('category.index',compact('category'));
    }

    public function update(Request $request)
    {
        $category = Category::where('id',$request->id)->first();
        $data = $request->except('_token');
        $category = Category::where('id', $request->id)->update($data);
        return redirect()->route('category.index',compact('category'));
    }
}
