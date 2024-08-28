<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Getquates;

class GetquateController extends Controller
{
     public function index()
    {
        $getquates = Getquates::get();
        $totalQuantity = Getquates::count('id');
        return view('admin.getquate_list',['getquates'=> $getquates, 'quantity'=>$totalQuantity]);
    }
}
