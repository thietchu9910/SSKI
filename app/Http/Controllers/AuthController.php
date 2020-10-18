<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private $mesErr = [
        'email.required' => 'Email không được để trống',
        'email.email' => 'Email không đúng định dạng',
        'password.required' => 'Password không được để trống',
    ];

    public function index(){

        if (Auth::check()){
            return redirect()->route('dashboard.index')->with('msg', 'Chào mừng bạn.');
        }
        return view('auth.signin');
    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ], $this->mesErr);

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)){
            return redirect()->route('dashboard.index')->with('msg', 'Chào mừng bạn.');
        } else {
            $msg = 'Đăng nhập không thành công';
            return view('auth.signin', compact('msg'));
        }
    }

    public function register(){
        return view('auth.signup');
    }

    public function signUp(SignupRequest $request){
        //luu user moi
        $data = $request->all();
        $user = new User();
        $data['password'] = Hash::make($request->password);
        $data['is_active'] = 1;
        $data['image_url'] = 'user_image/default-user-image.png';
        $data['role'] = 0;
        $user->fill($data);
        $user->save();

        if ($user->save()){
            return redirect()->route('login.index')->with('msg', 'Đăng ký thành công');
        } else {
            $msg = 'Đã xảy ra lỗi, vui lòng đăng ký lại';
            return view('auth.signup', compact('msg'));
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.index');
    }
}
