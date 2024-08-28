<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Testimonials;

class TestimonialsController extends Controller
{
     public function index()
    {
        $testimonials = Testimonials::get();
        $totalQuantity = Testimonials::count('id');
        return view('admin.testimonial_list',['testimonials'=> $testimonials, 'quantity'=> $totalQuantity]);
    }
}
