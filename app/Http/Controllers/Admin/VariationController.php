<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Variations;

class VariationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $variations = Variations::get();
        $totalQuantity = Variations::count('id');
        return view('admin.variation_list',['variation'=> $variations, 'quantity'=> $totalQuantity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_variation');
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'variation_name.*' => 'required|string',
            'sort_order.*' => 'required|integer',
            'status.*' => 'required|in:enable,disable',
        ]);

        // Loop through the form data and store each variation
        foreach ($validatedData['variation_name'] as $key => $variationName) {
            $variation = new Variations();
            $variation->variation_name = $variationName;
            $variation->sort_order = $validatedData['sort_order'][$key];
            $variation->status = $validatedData['status'][$key];
            $variation->save();
        }

        // Redirect back or wherever you want after storing
        return redirect()->back()->with('success', 'Variations added successfully.');
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
       $variations = Variations::where('id',$id)->first();
        return view('admin.update_variation', ['variations'=> $variations ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'variation_name.*' => 'required|string',
            'sort_order.*' => 'required|integer',
            'status.*' => 'required|in:enable,disable',
        ]);

        // Loop through the form data and store each variation
        foreach ($validatedData['variation_name'] as $key => $variationName) {
            $variation =  $variations = Variations::where('id',$id)->first();
            $variation->variation_name = $variationName;
            $variation->sort_order = $validatedData['sort_order'][$key];
            $variation->status = $validatedData['status'][$key];
            $variation->save();
        }

        // Redirect back or wherever you want after storing
        return redirect()->back()->with('success', 'Variations added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $variations = Variations::where('id',$id)->first();
        $variations->delete();
         return redirect()->back()->with('success', 'Variaton details successfully remove!');
    }
}
