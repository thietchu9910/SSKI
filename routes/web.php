<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.signin');
});

Route::view('/test', 'auth.signin');



Route::middleware('auth')->group(function (){
    //Anh em viết route trong này
    
});
