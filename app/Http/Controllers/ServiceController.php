<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Pages;

class ServiceController extends Controller
{
    public function index()
    {
         $service = Pages::where('post_id', '1')
             ->where('post_type', 'post')
             ->where('post_status', 'enable')
             ->orderBy('sort_order', 'ASC')
             ->limit(6)
             ->get();

        return view('service',['service'=>$service]);
    }
    
    public function sericedetails($slug){
        $service = Pages::where('post_title_seo_url', $slug)
             ->where('post_type', 'post')
             ->where('post_status', 'enable')
             ->first();

        $service_rendom = Pages::where('post_id', 1)
              ->where('post_type', 'post')
              ->where('post_status', 'enable')
              ->inRandomOrder()
              ->limit(6)
              ->get();

         return view('service-details',['service'=> $service,'service_rendom'=>$service_rendom]);

    }
}
