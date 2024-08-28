<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Subscribers;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribers = Subscribers::get();
        $totalQuantity = Subscribers::count('id');

        return view('admin.subscriber_list', [
            'subscribers' => $subscribers,
            'quantity' => $totalQuantity
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.add_subscriber');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'email' => 'required'
        ]);



        $subscriber = new Subscribers;
        $subscriber->subscribers_email = $request->email;       
        $subscriber->status = $request->status;
        $subscriber->save();
        return redirect('/admin/subscriber')->withSuccess('Subscribers Added Successfull !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subscriber = Subscribers::where('id',$id)->first();
        return view('admin.update_subscriber', ['subcriber' => $subscriber]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $subscriber = Subscribers::where('id',$id)->first();
       $subscriber->subscribers_email = $request->email;       
        $subscriber->status = $request->status;
        $subscriber->save();
        return redirect('/admin/subscriber')->withSuccess('Subscribers Details updated Successfull !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subscriber = Subscribers::where('id',$id)->first();
        $subscriber->delete();
        return redirect()->back()->withSuccess('Subscribers delete Successfully !!!');
    }
}
