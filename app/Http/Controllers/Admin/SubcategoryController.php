<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Subcategoreis;
use App\Models\Admin\Categories;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategoreis = Subcategoreis::with('category')->get();
        $totalQuantity = Subcategoreis::count('id');
        return view('admin.sub_category_list',['sub_category'=> $subcategoreis, 'quantity'=> $totalQuantity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoreis = Categories::where('status','enable')->get();
        return view('admin.add_sub_category', ['category'=> $categoreis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validate the form data
        $request->validate([
            'sub_category_name.*' => 'required|string|max:255',
            'sort_order.*' => 'required|numeric',
            'status.*' => 'required|in:enable,disable',
           
        ]);

        // Loop through each item in the form array and store it in the database
        foreach ($request->category_id as $key => $value) {

              $existingSubCategory = Subcategoreis::where('sub_category_name', $request->sub_category_name[$key])->exists();
        
        if ($existingSubCategory) {
            return redirect()->back()->withErrors(['sub_category_name.' . $request->sub_category_name[$key] => 'The Sub category name "' . $request->sub_category_name[$key] . '" already exists. Please choose a different name.']);
        }


            $sub_category = new Subcategoreis();
            $sub_category->category_id = $request->category_id[$key];
            $sub_category->sub_category_name = $request->sub_category_name[$key];
            $sub_category->sort_order = $request->sort_order[$key];
            $sub_category->status = $request->status[$key];
            $sub_category->save();
        }

        // Redirect back with success message or do something else
         return redirect('/admin/sub_category')->withSuccess('Sub Categories added successfully !');
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
        $category = Categories::where('status','enable')->get();
        $sub_category = Subcategoreis::where('id',$id)->first();

        return view('admin.update_sub_category',['category' => $category, 'sub_category' => $sub_category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the form data
         $request->validate([
            'sub_category_name.*' => 'required|string|max:255',
            'sort_order.*' => 'required|numeric',
            'status.*' => 'required|in:enable,disable',
           
        ]);

         // Loop through each item in the form array and store it in the database
        foreach ($request->category_id as $key => $value) {
            $sub_category = Subcategoreis::where('id',$id)->first();
            $sub_category->category_id = $request->category_id[$key];
            $sub_category->sub_category_name = $request->sub_category_name[$key];
            $sub_category->sort_order = $request->sort_order[$key];
            $sub_category->status = $request->status[$key];
            $sub_category->save();
        }

        // Redirect back with success message or do something else
         return redirect('/admin/sub_category')->withSuccess('Sub Categories added successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subcategory = Subcategoreis::where('id',$id)->first();
        $subcategory->delete();
        return redirect()->back()->withSuccess('Sub Categories Successfully deleted !!');
    }
}
