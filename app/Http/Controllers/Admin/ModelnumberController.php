<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Brands;
use App\Models\Admin\Modelnumbers;

class ModelnumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modelnumbers = Modelnumbers::with('brand')->get();
        $totalQuantity = Modelnumbers::count('id');
        return view('admin.modelnumber_list',['modelnumbers'=>$modelnumbers, 'quantity'=> $totalQuantity]);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $brand = Brands::where('status','enable')->get();
        return view('admin.add_modelnumber', ['brand'=> $brand]);
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'brand_id' => 'required|array',
            'brand_id.*' => 'exists:brands,id', // Assuming 'brands' is the name of your brands table
            'model_number' => 'required|array',
            'model_number.*' => 'string|max:255',
            'sort_order' => 'required|array',
            'sort_order.*' => 'integer',
            'status' => 'required|array',
            'status.*' => 'in:enable,disable',
        ]);

        // Loop through the submitted data and create a new ModelNumber instance for each set of data
        foreach ($validatedData['brand_id'] as $key => $brandId) {
            $modelNumber = new Modelnumbers();
            $modelNumber->brand_id = $brandId;
            $modelNumber->model_number = $validatedData['model_number'][$key];
            $modelNumber->sort_order = $validatedData['sort_order'][$key];
            $modelNumber->status = $validatedData['status'][$key];
            $modelNumber->save();
        }

        // Redirect back with success message
        return redirect('/admin/modelnumber')->withSuccess('Model Number added successfully !');
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
        $brands = Brands::where('status','enable')->get();
        $modelNumber = Modelnumbers::where('id',$id)->first();

        return view('admin.update_model_number',['modelnumber' => $modelNumber, 'brand' => $brands]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       // Validate the incoming request data
        $validatedData = $request->validate([
            'brand_id' => 'required|array',
            'brand_id.*' => 'exists:brands,id', // Assuming 'brands' is the name of your brands table
            'model_number' => 'required|array',
            'model_number.*' => 'string|max:255',
            'sort_order' => 'required|array',
            'sort_order.*' => 'integer',
            'status' => 'required|array',
            'status.*' => 'in:enable,disable',
        ]);

        // Loop through the submitted data and create a new ModelNumber instance for each set of data
        foreach ($validatedData['brand_id'] as $key => $brandId) {
            $modelNumber = Modelnumbers::where('id',$id)->first();
            $modelNumber->brand_id = $brandId[$key];
            $modelNumber->model_number = $validatedData['model_number'][$key];
            $modelNumber->sort_order = $validatedData['sort_order'][$key];
            $modelNumber->status = $validatedData['status'][$key];
            $modelNumber->save();
        }

        // Redirect back with success message
        return redirect('/admin/modelnumber')->withSuccess('Model Number successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $modelnumbers = Modelnumbers::where('id',$id)->first();
        $modelnumbers->delete();
         return redirect('/admin/modelnumber')->withSuccess('Model numbers successfully remove !');
    }
}
