<?php

namespace App\Http\Controllers;

use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('app.category.index', compact('categories'));
    }

    public function more($slug)
    {
        $categories = Category::where('slug', $slug)->firstOrFail();
        $products = $categories->products()->with('category')->latest()->paginate(12);
        return view('app.category.more', compact('products', 'categories'));
    }
}
