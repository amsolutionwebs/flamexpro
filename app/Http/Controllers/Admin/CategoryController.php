<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Categories;
use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Categories::get();
        $totalQuantity = Categories::count('id');
        return view('admin.categories_list',['category'=> $category, 'quantity'=> $totalQuantity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.add_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
     {
        // Validate the form data
        $request->validate([
            'category_name.*' => 'required|string|max:255',
            'sort_order.*' => 'required|numeric',
            'status.*' => 'required|in:enable,disable',
            'category_image.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20048',
        ]);

        // Loop through each item in the form array and store it in the database
        foreach ($request->category_name as $key => $value) {

            $existingCategory = Categories::where('category_name', $value)->exists();
        
        if ($existingCategory) {
            return redirect()->back()->withErrors(['category_name.' . $key => 'The category name "' . $value . '" already exists. Please choose a different name.']);
        }

        
            $category = new Categories();

            // Handle file upload
    if (isset($request->category_image[$key])) {
    $imageName = time() . '.' . $request->category_image[$key]->extension();
    $request->category_image[$key]->move(public_path('admin/upload/categories-images'), $imageName);
            $category->category_image = $imageName;
    }


            $category->category_name = $request->category_name[$key];
            $category->sort_order = $request->sort_order[$key];
            $category->status = $request->status[$key];
            $category->save();
        }

        // Redirect back with success message or do something else
         return redirect('/admin/category')->withSuccess('Categories added successfully !');
        
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
        $category = Categories::where('id',$id)->first();

        return view('admin.update_category',['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
     {
        // Validate the form data
        $request->validate([
            'category_name.*' => 'required|string|max:255',
            'sort_order.*' => 'required|numeric',
            'status.*' => 'required|in:enable,disable',
            'category_image.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20048',
        ]);

        // Loop through each item in the form array and store it in the database
        foreach ($request->category_name as $key => $value) {
            $category = Categories::where('id',$id)->first();

            // Handle file upload
    if (isset($request->category_image[$key])) {

         $imagePath = public_path('admin/upload/categories-images') . '/' . $category->category_image;
          if (File::exists($imagePath)) {
            // Delete the file
            File::delete($imagePath);
        }
        
    $imageName = time() . '.' . $request->category_image[$key]->extension();
    $request->category_image[$key]->move(public_path('admin/upload/categories-images'), $imageName);
            $category->category_image = $imageName;
    }


            $category->category_name = $request->category_name[$key];
            $category->sort_order = $request->sort_order[$key];
            $category->status = $request->status[$key];
            $category->save();
        }

        // Redirect back with success message or do something else
         return redirect('/admin/category')->withSuccess('Categories details successfully updated !');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
   {
        $category = Categories::where('id',$id)->first();
        $imagePath = public_path('admin/upload/categories-images') . '/' . $category->category_image;
          if (File::exists($imagePath)) {
            // Delete the file
            File::delete($imagePath);
        }
        $category->delete();
        return redirect()->back()->withSuccess('Category Successfully deleted !!');
    }
}
