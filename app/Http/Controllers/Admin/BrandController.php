<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Categories;
use App\Models\Admin\Subcategoreis;
use App\Models\Admin\Brands;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = Brands::get();
        $totalQuantity = Brands::count('id');
        return view('admin.brand_list', ['brand'=> $brand, 'quantity'=> $totalQuantity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         
         $categoreis = Categories::where('status','enable')->get();
         $subcategoreis = Subcategoreis::where('status','enable')->get();
        return view('admin.add_brand', ['category'=> $categoreis, 'sub_category'=> $subcategoreis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'category_id.*' => 'required|exists:Categories,id',
            'sub_category_id.*' => 'required|exists:Subcategoreis,id',
            'brand_name.*' => 'required|string|max:255',
            'sort_order.*' => 'required|numeric',
            'status.*' => 'required|in:enable,disable',
        ]);

        // Process the form data and store in the database
       

          // Loop through each item in the form array and store it in the database
        foreach ($request->category_id as $key => $value) {
            $brands = new Brands();
            $brands->category_id = $request->category_id[$key];
            $brands->sub_category_id = $request->sub_category_id[$key];
            $brands->brand_name = $request->brand_name[$key];
            $brands->sort_order = $request->sort_order[$key];
            $brands->status = $request->status[$key];
            $brands->save();
        }

        // Redirect back with success message
        return redirect('/admin/brands')->withSuccess('Brands added successfully !');
      
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
        $brands = Brands::where('id',$id)->first();
        $categoreis = Categories::where('status','enable')->get();
         $subcategoreis = Subcategoreis::where('status','enable')->get();
        return view('admin.update_brand', ['category'=> $categoreis, 'sub_category'=> $subcategoreis, 'brand' => $brands ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validate the form data
        $request->validate([
            'category_id.*' => 'required|exists:Categories,id',
            'sub_category_id.*' => 'required|exists:Subcategoreis,id',
            'brand_name.*' => 'required|string|max:255',
            'sort_order.*' => 'required|numeric',
            'status.*' => 'required|in:enable,disable',
        ]);

        // Process the form data and store in the database
       

          // Loop through each item in the form array and store it in the database
        foreach ($request->category_id as $key => $value) {
            $brands = Brands::where('id',$id)->first();
            $brands->category_id = $request->category_id[$key];
            $brands->sub_category_id = $request->sub_category_id[$key];
            $brands->brand_name = $request->brand_name[$key];
            $brands->sort_order = $request->sort_order[$key];
            $brands->status = $request->status[$key];
            $brands->save();
        }

        // Redirect back with success message
        return redirect('/admin/brands')->withSuccess('Brands details successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brands = Brands::where('id',$id)->first();
        $brands->delete();
         return redirect('/admin/brands')->withSuccess('Brands added successfully !');
    }
}
