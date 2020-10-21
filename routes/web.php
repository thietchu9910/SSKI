<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CmtController;
use App\Http\Controllers\CategoryController;

Route::get('/', [AuthController::class, 'index'])->name('login.index');


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
        Route::get('index', [UserController::class, 'index'])->name('user.index');
        Route::get('detail/{id}', [UserController::class, 'detail'])->name('user.detail');
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('user.delete');
        //thêm mới
        Route::get('create', [UserController::class, 'create'])->name('user.create');
        Route::post('store', [UserController::class, 'store'])->name('user.store');
        //sửa
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('update', [UserController::class, 'update'])->name('user.update');
    });

    //Quan ly category
    Route::group(['prefix' => 'category'], function (){
        Route::get('index', [CategoryController::class, 'index'])->name('category.index');
        Route::get('delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

        Route::get('create',[CategoryController::class,'create'])->name('category.create');
        Route::post('store',[CategoryController::class,'store'])->name('category.store');

        Route::get('edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        Route::post('update',[CategoryController::class,'update'])->name('category.update');
    });

    //Quan ly bproduct
    Route::group(['prefix' => 'product'], function (){

    });

    //Quan ly cmt
    Route::group(['prefix' => 'comment'], function (){
        Route::get('index', [CmtController::class, 'index'])->name('cmt.index');
        Route::get('delete/{id}', [CmtController::class, 'delete'])->name('cmt.delete');
        //thêm mới
        Route::get('create', [CmtController::class, 'create'])->name('cmt.create');
        Route::post('store', [CmtController::class, 'store'])->name('cmt.store');
        //sửa
        Route::get('/edit/{id}', [CmtController::class,'edit'])->name('cmt.edit');
        Route::post('/update', [CmtController::class,'update'])->name('cmt.update');
    });
});
