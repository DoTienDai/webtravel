<?php

namespace App\Providers;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;

use  Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function getCategoriesProduct(){
        $categories = Category::orderBy('id','DESC')->get();
        $listCategory =[];
        Category::recursive($categories,$parents =0,$level = 1,$listCategory);
        return $listCategory;
    }
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*',function($view){
            $categories = $this -> getCategoriesProduct();
            $view->with('categories', $categories);
        });
    }
}
