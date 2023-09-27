<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index(){
        $products_count = Product::all()->count();
        $cat_count = Category::all()->count();



        return view('admin.home.index', [
            'products_count' => $products_count,
            'cat_count' => $cat_count
        ]);
    }
}
