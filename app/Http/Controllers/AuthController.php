<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $mesErr = [
        'email.required' => 'Email không được để trống',
        'email.email' => 'Email không đúng định dạng',
        'password.required' => 'Password không được để trống',
    ];

    public function index(){
        return view('auth.signin');
    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ], $this->mesErr);

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)){
            return redirect()->route('dashboard.index')->with('msg', 'Đăng nhập thành công');
        } else {
            $msg = 'Đăng nhập không thành công';
            return view('auth.signin', compact('msg'));
        }
    }

    public function register(){
        return view('auth.signup');
    }

    public function signUp(Request $request){

    }

    public function logout(){
        Auth::logout();
    }
}
