<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Testimonials;
use File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $testimonials = Testimonials::get();
        $totalQuantity = Testimonials::count('id');
        return view('admin.testimonial_list',['testimonials'=> $testimonials, 'quantity'=> $totalQuantity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_testimonials');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'testimonials_name' => 'required|string|max:255',
            'testimonials_position' => 'required|string|max:255',
            'testimonials_content' => 'required|string',
            'testimonials_image' => 'image|mimes:jpeg,png,jpg|max:2048', // Adjust validation rules for image as needed
            'sort_order' => 'required|integer',
            'status' => 'required|in:enable,disable',
        ]);

        // Handle file upload if an image is included
        if ($request->hasFile('testimonials_image')) {
            $image = $request->file('testimonials_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin/upload/post-images'), $imageName);
            $validatedData['testimonials_image'] = $imageName;
        }

        // Create the testimonial
        Testimonials::create($validatedData);

        // Redirect back or to a different page after storing the testimonial
        return redirect('admin/testimonials')->with('success', 'Testimonial created successfully!');
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
        $testimonials = Testimonials::where('id',$id)->first();
        return view('admin.add_testimonials', ['testimonials'=> $testimonials]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'testimonials_name' => 'required|string|max:255',
            'testimonials_position' => 'required|string|max:255',
            'testimonials_content' => 'required|string',
            'testimonials_image' => 'image|mimes:jpeg,png,jpg|max:2048', // Adjust validation rules for image as needed
            'sort_order' => 'required|integer',
            'status' => 'required|in:enable,disable',
        ]);

        // Handle file upload if an image is included
        if ($request->hasFile('testimonials_image')) {
            $image = $request->file('testimonials_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/testimonials'), $imageName);
            $validatedData['testimonials_image'] = $imageName;
        }

        // Find the testimonial by ID
        $testimonial = Testimonials::findOrFail($id);

        // Update the testimonial
        $testimonial->update($validatedData);

         return redirect('admin/testimonials')->withSuccess('Testimonial Details successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pages = Testimonials::where('id',$id)->first();
        $imagePath = public_path('admin/upload/post-images') . '/' . $pages->testimonials_image;
          if (File::exists($imagePath)) {
            // Delete the file
            File::delete($imagePath);
        }
        $pages->delete();
        return redirect()->back()->withSuccess('Testimonial Details successfully Remove!');
    }
}
