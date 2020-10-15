<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('auth.signin');
});

// Xu ly dang nhap, dang ky
Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/signup', [AuthController::class, 'register'])->name('signup.index');
Route::post('/signup', [AuthController::class, 'signUp'])->name('signup.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function (){
    Route::get('/index', [DashboardController::class, 'index'])->name('dashboard.index');
    //Anh em viết route trong này

    //Quan ly user
    Route::group(['prefix' => 'user'], function (){
//        Route::get()
    });

    //Quan ly category
    Route::group(['prefix' => 'category'], function (){

    });

    //Quan ly bproduct
    Route::group(['prefix' => 'product'], function (){

    });

    //Quan ly cmt
    Route::group(['prefix' => 'comment'], function (){

    });
});

