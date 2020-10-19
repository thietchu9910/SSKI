<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CmtController extends Controller
{
    public function index(){
//        $cmts = Comment::orderBy('created_at', 'desc')->paginate(5);
        $cmts = Comment::orderBy('created_at', 'desc')->get();
        return view('comment.index', compact('cmts'));
    }

    public function delete(Request $request){
        $delCmt = Comment::find($request->id);
        if (!$delCmt) {
            return redirect()->route('cmt.index')->with('msg', 'Bình luận không tồn tại');
        } else {
            $delCmt->delete();
            return redirect()->route('cmt.index')->with('msg', 'Xóa bình luận thành công');
        }
    }

    public function create(){
        $users = User::all();
        $products = Product::all();
        return view('comment.create', compact('users', 'products'));
    }

    public function store(Request $request){
        $cmt = new Comment();

        $data = $request->validate([
            'content' => 'required',
        ], [
            'content.required' => 'Nội dung bình luận không được để trống'
        ]);

        $data = $request->all();
        $cmt->fill($data);
        $cmt->save();

        return redirect()->route('cmt.index')->with('msg', 'Thêm mới bình luận thành công');
    }

    public function edit(Request $request){
        $cmt = Comment::find($request->id);
        $users = User::all();
        $products = Product::all();
        if (!$cmt) {
            return redirect()->route('cmt.index')->with('msg', 'Bình luận không còn tồn tại');
        } else {
            return view('comment.edit', compact('cmt', 'users', 'products'));
        }
    }

    public function update(Request $request){
        $data = $request->validate([
            'content' => 'required',
        ], [
            'content.required' => 'Nội dung bình luận không đươc để trống',
        ]);

        $data = $request->all();

        $cmt = Comment::find($request->id);
        $cmt->content = $data['content'];
        $cmt->save();

        return redirect()->route('cmt.index')->with('msg', 'Cập nhật bình luận thành công');
    }
}
