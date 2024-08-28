<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
     public function index()
    {
        return view('about');
    }

    public function ourExpertise()
    {
        return view('our-expertise');
    }

    public function whyChooseUs()
    {
        return view('why-choose');
    }

    public function getInToch()
    {
        return view('get-in-touch');
    }
}
