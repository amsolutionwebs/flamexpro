<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Contactus;

class ContactController extends Controller
{
      public function index()
    {
        $contact = Contactus::get();
        $totalQuantity = Contactus::count('id');

        return view('admin.contact_list', [
            'contact' => $contact,
            'quantity' => $totalQuantity
        ]);


    }
}
