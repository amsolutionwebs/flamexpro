<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Pages;

class TrainingController extends Controller
{
    public function index()
    {
        return view('training');
    }

    public function trainingdetails($slug)
    {
        $training = Pages::where('post_title_seo_url', $slug)
             ->where('post_type', 'post')
             ->where('post_status', 'enable')
             ->first();

        $training_rendom = Pages::where('post_id', 1)
              ->where('post_type', 'post')
              ->where('post_status', 'enable')
              ->inRandomOrder()
              ->limit(6)
              ->get();

         return view('training_details',['training'=> $training,'training_rendom'=>$training_rendom]);

    }
}
