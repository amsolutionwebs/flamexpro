<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\{Admins};

class ProfileController extends Controller
{
    public function updatePassword(Request $request, $uid)
    {
        // Validate the incoming request data
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:4',
            'confirm_password' => 'required|same:new_password',
        ]);

        // Retrieve the user based on the UID
        $user = Admins::find($uid);

        // Verify the current password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'The current password is incorrect.');
        }

        // Update the user's password
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Password updated successfully.');
    }


      public function update_profile(Request $request, $uid)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'address' => 'nullable|string',
            'profile_photo' => 'nullable|image|max:2048', // Assuming profile photo is uploaded
        ]);

        // Find the user by ID (assuming $user_details contains user's ID)
        $user = User::where('id', $uid)->first();

        // Update user details
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->address = $request->input('address');

        $imagePath = public_path('admin/upload/profile_images') . '/' . $user->profile_photo;
          if (File::exists($imagePath)) {
            // Delete the file
            File::delete($imagePath);
        }


        if (isset($request->profile_photo)) {
                // upload image
        $imageName = time() . '.' . $request->profile_photo->extension();
        $request->profile_photo->move(public_path('admin/upload/profile_images'), $imageName);
        $user->profile_photo = $imageName;
        }

        // Save the updated user details
        $user->save();

        // Redirect back with success message or any other response
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
