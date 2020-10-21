<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductEditRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(5);
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Category $categories)
    { 
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $data = $request->all();
        if ($request->hasFile('image_url')) {
            $originalFileName = $request->image_url->getClientOriginalName();
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            $data['image_url'] = $request->file('image_url')->storeAs('prod_image', $fileName, 'public');
        }
        $product->fill($data);
        $product->save();

        return redirect()->route('product.index')->with('msg', 'Thêm sản phẩm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $categories = Category::all();
        $comments = Comment::where('product_id', $product->id)->get();

        return view('product.detail', compact('product', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $categories = Category::all();
        $product = Product::find($request->id);
        if (!$product) {
            return redirect()->reoute('product.index')->with('msg', 'San phẩm không tồn tại');
        } else {
            return view('product.edit', compact('product', 'categories'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductEditRequest $request)
    {
        
       $product = Product::where('id', $request->id)->first();
       $data = $request->except('_token');

        if(file_exists($request->file('image_url'))){
            $product->image_url = $request->file('image_url')->store('prod_image','public');
        }
        if ($request->hasFile('image_url')){
            Storage::disk('public')->delete($product->image_url);
            $originalFileName = $request->image_url->getClientOriginalName();
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            $data['image_url'] = $request->file('image_url')->storeAs('prod_image', $fileName,'public');
        }
        $product = Product::where('id', $request->id)->update($data);
        return redirect()->route('product.index')
        ->with('msg', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $product = Product::find($request->id);
        $comments = Comment::where('product_id', $product->id)->delete();
        Storage::disk('public')->delete($product->image_url);
        if (!$product) {
            return redirect()->route('product.index')->with('Không tồn tại sản phẩm');
        } else {
            $product->delete();
            return redirect()->route('product.index')->with('msg', 'Xóa sản phẩm thành công');
        }
    }
    
}
