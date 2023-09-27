<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('main');
Route::get('products', [\App\Http\Controllers\ProductController::class, 'products'])->name('products');
Route::get('product/{slug}', [App\Http\Controllers\ProductController::class, 'more'])->name('product.more');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('category/{slug}', [App\Http\Controllers\CategoryController::class, 'more'])->name('category.more');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::delete('/deleteimage/{id}', [ProductController::class, 'deleteimage']);
Route::post('/upload', [UploadController::class, 'upload'])->name('upload.image');

Route::group(['prefix' => 'inside', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('mainAdmin');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});
