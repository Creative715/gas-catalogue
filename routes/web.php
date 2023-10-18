<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('main');
Route::get('pro-nas', [\App\Http\Controllers\PageController::class, 'index'])->name('pro-nas');
Route::get('page/{slug}', [\App\Http\Controllers\PageController::class, 'page'])->name('page.more');
Route::get('nasha-dialnist', [PageController::class, 'about'])->name('nasha-dialnist');
Route::get('products', [\App\Http\Controllers\ProductController::class, 'products'])->name('products');
Route::get('product/{slug}', [App\Http\Controllers\ProductController::class, 'more'])->name('product.more');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('category/{slug}', [App\Http\Controllers\CategoryController::class, 'more'])->name('category.more');
Route::match(['post','get'], '/phone', [ContactController::class, 'phone'])->name('phone');
Route::match(['post','get'], '/send', [ContactController::class, 'send'])->name('send');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::delete('/deleteimage/{id}', [ProductController::class, 'deleteimage']);
Route::post('/upload', [UploadController::class, 'upload'])->name('upload.image');

Route::group(['prefix' => 'inside', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('mainAdmin');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('page', PageController::class);
});
