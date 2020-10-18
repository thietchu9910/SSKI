<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(5);
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
        $user = User::find($request->id);
        Storage::disk('public')->delete($user->image_url);
        if (!$user) {
            return redirect()->route('user.index')->with('msg', 'Người dùng không tồn tại.');
        } else {
            $user->delete();
            return redirect()->route('user.index')->with('msg', 'Xóa người dùng thành công');
        }
    }

    public function create(Request $request)
    {
        return view('user.create');
    }

    public function store(UserRequest $request)
    {
        $user = new User();
        $data = $request->all();

        if ($request->hasFile('image_url')){
            $originalFileName = $request->image_url->getClientOriginalName();
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            $data['image_url'] = $request->file('image_url')->storeAs('user_image', $fileName,'public');
        }
        $data['password'] = Hash::make($request->password);

        $user->fill($data);
        $user->save();

        return redirect()->route('user.index')->with('msg', 'Thêm mới user thành công');
    }

    public function edit(Request $request)
    {
        $user = User::find($request->id);
        if (!$user) {
            return redirect()->route('user.index')->with('msg', 'Người dùng không tồn tại');
        } else {
            $birthday = Carbon::parse($user->nirthday)->toDateString();
            return view('user.edit', compact('user', 'birthday'));
        }
    }

    public function update(UpdateUserRequest $request)
    {
        $user = User::where('id', $request->id)->first();

        $data = $request->except('_token');

        if ($request->hasFile('image_url')){
            Storage::disk('public')->delete($user->image_url);
            $originalFileName = $request->image_url->getClientOriginalName();
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            $data['image_url'] = $request->file('image_url')->storeAs('user_image', $fileName,'public');
        }

        $user = User::where('id', $request->id)->update($data);
        return redirect()->route('user.index')->with('msg', 'Cập nhật thông tin thành công');
    }
}
