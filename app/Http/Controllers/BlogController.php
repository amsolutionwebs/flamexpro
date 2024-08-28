<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Pages;
use Illuminate\Support\Str;


class BlogController extends Controller
{
   public static function index()
    {
        $blog = Pages::where('post_id', '6')
             ->where('post_type', 'post')
             ->where('post_status', 'enable')
             ->orderBy('sort_order', 'ASC')
             ->get();

        return view('blog',['blog'=> $blog]);
    }


    public static  function blogdetails($slug)
    {

        $blog = Pages::where('post_title_seo_url', $slug)
             ->where('post_type', 'post')
             ->where('post_status', 'enable')
             ->first();

        $blogs_rendom = Pages::where('post_id', 6)
              ->where('post_type', 'post')
              ->where('post_status', 'enable')
              ->inRandomOrder()
              ->limit(6)
              ->get();

         return view('blog-details',['blog'=> $blog,'blogs_rendom'=>$blogs_rendom]);
    }

     
}
