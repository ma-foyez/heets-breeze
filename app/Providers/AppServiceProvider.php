<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Content;
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
        $content =  Content::find(1)->first();
        view()->share('content', $content);

        $blogs = Blog::orderBy('id', 'DESC')->get();
        view()->share('blogs', $blogs);


        $categories = Category::where('status', '1')->orderBy('order', 'ASC')->get();
        view()->share('categories', $categories);
    }
}
