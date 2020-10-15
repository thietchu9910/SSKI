<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $cate = Category::all()->count();
        $prod = Product::all()->count();
        $cmt = Comment::all()->count();

        return view('dashboard.index', compact('cate', 'prod', 'cmt'));
    }
}
