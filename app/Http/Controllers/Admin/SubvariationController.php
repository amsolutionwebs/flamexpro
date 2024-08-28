<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Variations;
use App\Models\Admin\Subvariations;

class SubvariationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_variations = Subvariations::with('variation')->get();
        $totalQuantity = Subvariations::count('id');
        return view('admin.sub_variation_list',['sub_variations'=> $sub_variations, 'quantity'=> $totalQuantity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $variations = Variations::where('status','enable')->get();
         return view('admin.add_sub_variation',['variations'=> $variations]);
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'variation_id.*' => 'required|exists:variations,id',
            'sub_variation_name.*' => 'required|string',
            'sort_order.*' => 'required|integer',
            'status.*' => 'required|in:enable,disable',
        ]);

        // Loop through the form data and store each sub variation
        foreach ($validatedData['sub_variation_name'] as $key => $subVariationName) {
            $subVariation = new Subvariations();
            $subVariation->variation_id = $validatedData['variation_id'][$key];
            $subVariation->sub_variation_name = $subVariationName;
            $subVariation->sort_order = $validatedData['sort_order'][$key];
            $subVariation->status = $validatedData['status'][$key];
            $subVariation->save();
        }

        // Redirect back or wherever you want after storing
        return redirect()->back()->with('success', 'Sub Variations added successfully.');
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
        $variations = Variations::where('status','enable')->get();
        $sub_variations = Subvariations::where('id',$id)->first();

        return view('admin.update_sub_variations',['variations' => $variations, 'sub_variations' => $sub_variations]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'variation_id.*' => 'required|exists:variations,id',
            'sub_variation_name.*' => 'required|string',
            'sort_order.*' => 'required|integer',
            'status.*' => 'required|in:enable,disable',
        ]);

        // Loop through the form data and store each sub variation
        foreach ($validatedData['sub_variation_name'] as $key => $subVariationName) {
            $subVariation = Subvariations::where('id',$id)->first();
            $subVariation->variation_id = $validatedData['variation_id'][$key];
            $subVariation->sub_variation_name = $subVariationName;
            $subVariation->sort_order = $validatedData['sort_order'][$key];
            $subVariation->status = $validatedData['status'][$key];
            $subVariation->save();
        }

        // Redirect back or wherever you want after storing
       return redirect('/admin/sub_variation')->withSuccess('Sub Variaton details successfully updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $sub_variations = Subvariations::where('id',$id)->first();
        $sub_variations->delete();
         return redirect()->back()->with('success', 'Sub Variaton details successfully remove!');
    }
}
