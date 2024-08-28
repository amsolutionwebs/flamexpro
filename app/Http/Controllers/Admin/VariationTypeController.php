<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Variations;
use App\Models\Admin\Subvariations;
use App\Models\Admin\Variation_types;

class VariationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $variation_type = Variation_types::get();
        $totalQuantity = Variation_types::count('id');
        return view('admin.variation_type_list',['variation_type'=> $variation_type, 'quantity'=> $totalQuantity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $variations = Variations::where('status','enable')->get();
       $sub_variations = Subvariations::where('status','enable')->get();
         return view('admin.add_variation_type',['variations'=> $variations, 'sub_variations' => $sub_variations]);
    }

    /**
     * Store a newly created resource in storage.
     */
 public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'variation_id.*' => 'required|integer',
        'sub_variation_id.*' => 'required|integer',
        'variation_type.*' => 'required|string',
        'sort_order.*' => 'required|integer',
        'status.*' => 'required|in:enable,disable',
    ]);

    // Iterate through the submitted variation types
    foreach ($request->variation_id as $key => $value) {
        // Check if the variation type already exists
        $existingType = Variation_types::where([
            'variation_id' => $request->variation_id[$key],
            'sub_variation_id' => $request->sub_variation_id[$key],
            'variation_type' => $request->variation_type[$key],
        ])->first();

        // If the variation type does not exist, create a new record
        if (!$existingType) {
            $variation_types = new Variation_types();
            $variation_types->variation_id = $request->variation_id[$key];
            $variation_types->sub_variation_id = $request->sub_variation_id[$key];
            $variation_types->variation_type = $request->variation_type[$key];
            $variation_types->sort_order = $request->sort_order[$key];
            $variation_types->status = $request->status[$key];
            $variation_types->save();
        }else{
            // Redirect or respond with a success message
    return redirect()->back()->with('Something', 'Variation types already Exits');
        }
    }

    // Redirect or respond with a success message
    return redirect()->back()->with('success', 'Variation types added successfully');
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
        $variation_types = Variation_types::where('id',$id)->first();
         $variations = Variations::where('status','enable')->get();
       $sub_variations = Subvariations::where('status','enable')->get();
         return view('admin.update_variation_type',['variations'=> $variations, 'sub_variations' => $sub_variations, 'variation_type'=>$variation_types]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       // Validate the form data
    $request->validate([
        'variation_id.*' => 'required|integer',
        'sub_variation_id.*' => 'required|integer',
        'variation_type.*' => 'required|string',
        'sort_order.*' => 'required|integer',
        'status.*' => 'required|in:enable,disable',
    ]);

    // Iterate through the submitted variation types
    foreach ($request->variation_id as $key => $value) {
        // Check if the variation type already exists
        $existingType = Variation_types::where([
            'variation_id' => $request->variation_id[$key],
            'sub_variation_id' => $request->sub_variation_id[$key],
            'variation_type' => $request->variation_type[$key],
        ])->first();

        // If the variation type does not exist, create a new record
        if (!$existingType) {
            $variation_types = Variation_types::where('id',$id)->first();;
            $variation_types->variation_id = $request->variation_id[$key];
            $variation_types->sub_variation_id = $request->sub_variation_id[$key];
            $variation_types->variation_type = $request->variation_type[$key];
            $variation_types->sort_order = $request->sort_order[$key];
            $variation_types->status = $request->status[$key];
            $variation_types->save();
        }else{
            // Redirect or respond with a success message
    return redirect('/admin/variation_type')->with('Something', 'Variation types already Exits');
        }
    }

    // Redirect or respond with a success message
    return redirect('/admin/variation_type')->with('success', 'Variation types details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $Variation_types = Variation_types::where('id',$id)->first();
        $Variation_types->delete();
         return redirect()->back()->with('success', 'Variaton Type details successfully remove!');
    }
}
