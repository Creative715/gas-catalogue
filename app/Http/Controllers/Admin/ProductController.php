<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $products = Product::latest()->paginate(20);
    return view('admin.product.index', [
      'products' => $products
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $categories = Category::all();
    return view('admin.product.create', [
      'categories' => $categories
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $product = Product::create($request->all());

    // Images
    if ($request->file('img')) {
      $path = Storage::putFile('public', $request->file('img'));
      $url = Storage::url($path);
      $product->img = $url;
    }
    $product->save();
    if ($request->hasFile("images")) {
      $files = $request->file("images");
      foreach ($files as $file) {
        $imageName = time() . '_' . $file->getClientOriginalName();
        $request['product_id'] = $product->id;
        $request['image'] = $imageName;
        $file->move(\public_path("/img/gallery"), $imageName);
        Image::create($request->all());
      }
    }

    return redirect('inside/product')->withSuccess('Товар успішно додано!');
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param \App\Models\Product $Product
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */

  public function edit(Product $product)
  {
    $categories = Category::all();

    return view('admin.product.edit', [
      'categories' => $categories,
      'product' => $product
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param \App\Models\Product $Product
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Product $product)
  {

    $product->update($request->all());

    // Images
    if ($request->file('img')) {
      $path = Storage::putFile('public', $request->file('img'));
      $url = Storage::url($path);
      $product->img = $url;
    }
    $product->save();
    if ($request->hasFile("images")) {
      $files = $request->file("images");
      foreach ($files as $file) {
        $imageName = time() . '_' . $file->getClientOriginalName();
        $request['product_id'] = $product->id;
        $request['image'] = $imageName;
        $file->move(\public_path("/img/gallery"), $imageName);
        Image::create($request->all());
      }
    }
    return redirect('inside/product')->withSuccess('Товар успішно оновлено!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param \App\Models\Product $Product
   * @return \Illuminate\Http\Response
   */
  public function destroy(Product $product)
  {
    $product->delete();

    return redirect('inside/product')->withSuccess('Товар успішно видалено!');
  }
  public function deleteimage($id)
  {
      $images = Image::findOrFail($id);
      if (File::exists("img/gallery/" . $images->image)) {
          File::delete("img/gallery/" . $images->image);
      }

      Image::find($id)->delete();
      return back();
  }
}
