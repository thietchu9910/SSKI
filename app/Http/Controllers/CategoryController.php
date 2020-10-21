<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        //
        $category = Category::orderBy('id','desc')->with('hasProducts','hasParentCate')->get();
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

    public function create()
    {
        $cates = Category::all();
        return view('category.create', compact('cates'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:categories,name'
        ],[
            'name.required' => 'Tên danh mục không được để trống',
            'name.unique' => 'Tên danh mục đã tồn tại'
        ]);
        $category = new Category();
        $data = $request->all();
        $category->fill($data);
        $category->save();
        return redirect()->route('category.index',compact('category'))->with('msg', 'Thêm danh mục thành công');
    }

    public function edit(Request $request)
    {
        $cates = Category::all();
        $category = Category::find($request->id);
        return view('category.edit',compact('category', 'cates'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:categories,name,'.$request->id,
         ], [
             'name.required' => 'Tên danh mục không được để trống',
             'name.unique' => 'Tên danh mục đã tồn tại'
         ]);

        $category = Category::find($request->id);

        $data = $request->all();
        $category->name = $data['name'];

        if (isset($request->validation_switcher) && $request->validation_switcher == "on"){
            $category->parent_id = $data['parent_id'];
        } elseif (!isset($request->validation_switcher)) {
            $category->parent_id = null;
        }

        $category->save();

        return redirect()->route('category.index')->with('msg', 'Sửa danh mục thành công');
    }
}
