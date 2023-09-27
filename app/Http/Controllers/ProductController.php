<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::AllPaginate(12);
        $categories = Category::all();
        return view('app.main', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function products()
    {
        $products = Product::AllPaginate(12);
        $categories = Category::all();
        return view('app.product.index', [
            'products' => $products,
            'categories' => $categories
        ]);
    }


    public function more($slug)
    {
        $products = Product::findBySlug($slug);
        return view('app.product.more', [
            'products' => $products
        ]);
    }

}
