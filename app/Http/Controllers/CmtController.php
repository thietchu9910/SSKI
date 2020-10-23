<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CmtController extends Controller
{
    public function index()
    {
//        $cmts = Comment::orderBy('created_at', 'desc')->paginate(5);
        $cmts = Comment::orderBy('created_at', 'desc')->with('hasUser', 'hasProduct')->get();
        return view('comment.index', compact('cmts'));
    }

    public function delete(Request $request)
    {
        if (Gate::allows('sp-admin')) {
            $delCmt = Comment::find($request->id);
            if (!$delCmt) {
                return redirect()->route('cmt.index')->with('msg', 'Bình luận không tồn tại');
            } else {
                $delCmt->delete();
                return redirect()->route('cmt.index')->with('msg', 'Xóa bình luận thành công');
            }
        } else {
            return redirect()->route('cmt.index')->with('msg', 'Bạn không có quyên thực hiện hành động này');
        }
    }

    public function create()
    {
        $users = User::where('role', '<', 2)->get();
        $products = Product::where('is_active', 1)->get();
        return view('comment.create', compact('users', 'products'));
    }

    public function store(Request $request)
    {
        $cmt = new Comment();

        $data = $request->validate([
            'content' => 'required',
        ], [
            'content.required' => 'Nội dung bình luận không được để trống'
        ]);

        $data = $request->all();
        if (!isset($request->user_id)){
            $data['user_id'] = Auth::user()->id;
        }
        $cmt->fill($data);
        $cmt->save();

        return redirect()->route('cmt.index')->with('msg', 'Thêm mới bình luận thành công');
    }

    public function edit(Request $request)
    {
        $cmt = Comment::find($request->id);
        if (Gate::allows('edit-cmt', $cmt)) {
            $users = User::where('role', '<', 2)->get();
            $products = Product::where('is_active', 1)->get();
            if (!$cmt) {
                return redirect()->route('cmt.index')->with('msg', 'Bình luận không còn tồn tại');
            } else {
                return view('comment.edit', compact('cmt', 'users', 'products'));
            }
        } else {
            return redirect()->route('cmt.index')->with('msg', 'Bạn không có quyền thực hiện hành động này');
        }
    }

    public function update(Request $request)
    {
        $cmt = Comment::find($request->id);
        if (Gate::allows('edit-cmt', $cmt)) {
            $data = $request->validate([
                'content' => 'required',
            ], [
                'content.required' => 'Nội dung bình luận không đươc để trống',
            ]);

            $data = $request->all();

            $cmt = Comment::find($request->id);
            if (!isset($request->user_id)){
                $cmt->user_id = Auth::user()->id;
            } else {
                $cmt->user_id = $data['user_id'];
            }
            $cmt->product_id = $data['product_id'];
            $cmt->content = $data['content'];
            $cmt->save();

            return redirect()->route('cmt.index')->with('msg', 'Cập nhật bình luận thành công');
        } else {
            return redirect()->route('cmt.index')->with('msg', 'Bạn không có quyên thực hiện hành động này');
        }
    }
}
