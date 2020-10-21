<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
//        $users = User::orderBy('created_at', 'desc')->paginate(5);
        $users = User::orderBy('created_at', 'desc')->get();
        return view('user.index', compact('users'));
    }

    public function detail(Request $request)
    {
        $user = User::findOrFail($request->id);
        $birthday = Carbon::parse($user->birthday);
        return view('user.detail', compact('user', 'birthday'));
    }

    public function delete(Request $request)
    {
        if (Gate::allows('sp-admin')) {
            $user = User::find($request->id);

            Storage::disk('public')->delete($user->image_url);
            if (!$user) {
                return redirect()->route('user.index')->with('msg', 'Người dùng không tồn tại');
            } else {
                $cmts = Comment::where('user_id', $user->id)->delete();
                $user->delete();
                return redirect()->route('user.index')->with('msg', 'Xóa người dùng thành công');
            }
        } else {
            return redirect()->route('user.index')->with('msg', 'Bạn không có quyền thực hiện hành động này');
        }
    }

    public function create(Request $request)
    {
        if (Gate::allows('create-edit')) {
            return view('user.create');
        } else {
            return redirect()->route('user.index')->with('msg', 'Bạn không có quyền thực hiện hành động này');
        }
    }

    public function store(UserRequest $request)
    {
        if (Gate::allows('create-edit')) {
            $user = new User();
            $data = $request->all();

            if ($request->hasFile('image_url')) {
                $originalFileName = $request->image_url->getClientOriginalName();
                $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
                $data['image_url'] = $request->file('image_url')->storeAs('user_image', $fileName, 'public');
            }
            $data['password'] = Hash::make($request->password);

            $user->fill($data);
            $user->save();

            return redirect()->route('user.index')->with('msg', 'Thêm mới user thành công');
        } else {
            return redirect()->route('user.index')->with('msg', 'Bạn không có quyền thực hiện hành động này');
        }
    }

    public function edit(Request $request)
    {
        if (Gate::allows('create-edit')) {
            $user = User::find($request->id);
            if (!$user) {
                return redirect()->route('user.index')->with('msg', 'Người dùng không tồn tại');
            } else {
                $birthday = Carbon::parse($user->nirthday)->toDateString();
                return view('user.edit', compact('user', 'birthday'));
            }
        } else {
            return redirect()->route('user.index')->with('msg', 'Bạn không có quyền thực hiện hành động này');
        }
    }

    public function update(UpdateUserRequest $request)
    {
        if (Gate::allows('create-edit')) {
            $user = User::where('id', $request->id)->first();

            $data = $request->except('_token');

            if ($request->hasFile('image_url')) {
                Storage::disk('public')->delete($user->image_url);
                $originalFileName = $request->image_url->getClientOriginalName();
                $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
                $data['image_url'] = $request->file('image_url')->storeAs('user_image', $fileName, 'public');
            }

            $user = User::where('id', $request->id)->update($data);
            return redirect()->route('user.index')->with('msg', 'Cập nhật thông tin thành công');
        } else {
            return redirect()->route('user.index')->with('msg', 'Bạn không có quyền thực hiện hành động này');
        }
    }
}
