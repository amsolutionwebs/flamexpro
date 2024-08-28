<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Admin\Admins;

class AuthController extends Controller
{
      public function login(Request $request)
    {
        // dd($request->all());

       $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

       $record=Admins::where('email_id',$request->input('email'))->where('password',$request->input('password'))->get();
        
         if($record->isNotEmpty()){
             $request->Session()->put('uid',$record[0]);
             return redirect('admin/dashboard')->with('success','Login Successfull');
         }else{
            return redirect('admin-login')->with('failed','Wrong Credential!');
         }
    }

    function logout()
   {
    Session::forget('uid');
    Session::flash('uid');
        return redirect('admin-login')->with('success','Logout Successfull!');
   }


      public function editProfile()
{
    $uid = Session::get('uid');
    $admin = Admins::find($uid);
    return view('admin.update_profile', ['admin' => $admin]);

    // try {
    //     $uid = Session::get('uid');
    //     $admin = Admins::findOrFail($uid);
    //     return view('admin.update_profile', ['admin' => $admin]);
    // } catch (ModelNotFoundException $e) {
    //     // Handle not found exception, such as redirecting with an error message
    //     return redirect()->back()->with('error', 'Admin not found.');
    // }
}

}
