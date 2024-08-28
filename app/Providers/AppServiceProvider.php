<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Admin\{Pages,ProductCategories};

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
        // Bind $blogs_rendom data to footer view
        view()->composer('app.footer', function ($view) {
            $blogs_rendom = Pages::where('post_id', 6)
                ->where('post_type', 'post')
                ->where('post_status', 'enable')
                ->inRandomOrder()
                ->limit(2)
                ->get();

            $view->with('blogs_rendom', $blogs_rendom);
        });

          View::composer(['app.header', 'service.*', 'blog.*', '.*'], function ($view) {
        // Fetch the product categories, limiting to 7 items
        $productCategories = ProductCategories::limit(7)->get();

        // Pass the data to the view
        $view->with('ProductCategories', $productCategories);
    });
    }
}
