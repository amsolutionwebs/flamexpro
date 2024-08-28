<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\{Pages,ProductCategories};
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index()
    {
        $products = Pages::where('post_id', '3')
             ->where('post_type', 'post')
             ->where('post_status', 'enable')
             ->orderBy('sort_order', 'ASC')
             ->limit(6)
             ->get();

           $blogs_rendom = Pages::where('post_id', 6)
              ->where('post_type', 'post')
              ->where('post_status', 'enable')
              ->inRandomOrder()
              ->limit(3)
              ->get();

              $product_category = ProductCategories::limit(7)->get();

        return view('index',['products'=>$products,'blogs_rendom'=>$blogs_rendom,'ProductCategories'=>$product_category]);
    }

}
