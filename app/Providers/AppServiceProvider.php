<?php

namespace App\Providers;

use App\Blog;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        view()->composer(['layouts.footer'], function ($view) {
            $data = Blog::limit(2)->get();
            $view->with('blogs', $data);
        });
    }
}
