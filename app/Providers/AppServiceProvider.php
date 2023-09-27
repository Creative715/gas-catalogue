<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $this->activeLinks();
        $this->menuLoad();
    }
    public function menuLoad()
    {
        View::composer(['app.includes.nav', 'app.includes.footer'], function ($view){
            $view->with('categories', Category::all() );
        });
    }
    public function  activeLinks() {
        View::composer('app.includes.header', function($view) {
            $view->with('mainLink', request()->is('/') ? 'active' : '');
            $view->with('pageLink', (request()->is('pro-nas') or  request()->is('page/*')) ? 'active' : '');
            $view->with('productLink', (request()->is('products') or  request()->is('product/*')) ? 'active' : '');
            $view->with('categoryLink', (request()->is('category') or  request()->is('category/*')) ? 'active' : '');
        });
    }
}
