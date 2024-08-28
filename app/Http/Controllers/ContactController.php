<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\{Subscribers,Contactus};

class ContactController extends Controller
{
   public function index()
    {
        return view('contact');
    }

     public function storeSubsciber(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255|unique:Subscribers,subscribers_email',
        ]);

        // Create a new Subscriber instance and store the email address
        $subscriber = new Subscribers();
        $subscriber->subscribers_email  = $validatedData['email'];
        $subscriber->status  = 'enable';
        $subscriber->save();

        // Optionally, you can return a response to the user
        return redirect()->back()->with('success', 'You have subscribed successfully!');
    }


     public function contactstore(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:20',
            'interest' => 'nullable|string|max:255',
            'whatsapp_number' => 'nullable|string|max:20',
            'about' => 'nullable|string|max:1000',
            'address' => 'nullable|string|max:1000',
        ]);

        // Create a new ContactFormEntry instance and store the form data
        $entry = new Contactus();
        $entry->name = $validatedData['name'];
        $entry->email = $validatedData['email'];
        $entry->phone = $validatedData['phone'];
        $entry->intrest_in = $validatedData['interest'];
        $entry->whatsapp_number = $validatedData['whatsapp_number'];
        $entry->about_project = $validatedData['about'];
        $entry->location = $validatedData['address'];
        $entry->status = 'enable';
        $entry->save();

        // Optionally, you can return a response to the user
        return redirect()->back()->with('success', 'Form submitted successfully!');



    }
}
