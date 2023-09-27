<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         return view('admin.category.index', [
             'categories'=> Category::paginate(10)
         ]);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
      public function create()
      {
        return view('admin.category.create');
      }

      public function store(Request $request)
      {
       $category = Category::create($request->all());
         if ($request->file('img')) {
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);
            $category->img = $url;
          }
          $category->save();
         return redirect('/inside/category')->with('success', 'Категорія успішно створена!');
      }

     /**
      * Display the specified resource.
      *
      * @param  \App\Models\Category $category
      * @return \Illuminate\Http\Response
      */
     public function show(Category $category)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\Category $category
      * @return \Illuminate\Http\Response
      */
     public function edit(Category $category)
     {
         return view('admin.category.edit',[
            'category' => $category
         ]);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\Category  $category
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, Category $category)
     {
         $category->update($request->all());
         if ($request->file('img')) {
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);
            $category->img = $url;
          }
          $category->save();

         return redirect('/inside/category')->with('success', 'Категорія успішно оновлена!');
     }
     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\Category  $category
      * @return \Illuminate\Http\Response
      */
     public function destroy(Category $category)
     {
         $category->delete();

         return redirect('/inside/category')->with('success', 'Категорія успішно видалена!');
     }
}
