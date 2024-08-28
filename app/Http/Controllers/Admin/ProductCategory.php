<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Admin\ProductCategories;
use File;

class ProductCategory extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productcategories = ProductCategories::get();
        $totalQuantity = ProductCategories::count('id');
        return view('admin.product_category_list',['productcategories'=> $productcategories, 'quantity'=> $totalQuantity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_product_category');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    // Validate request data if necessary...

    $product_category = new ProductCategories;

    // Check if category_image exists in the request and handle image upload
    if ($request->hasFile('category_image')) {
        // Get original filename
        $originalFilename = $request->category_image->getClientOriginalName();
        // Generate unique filename
        $imageName = time() . '_' . $originalFilename;
        // Move uploaded image to the destination directory
        $request->category_image->move(public_path('admin/upload/post-images'), $imageName);
        // Set the category_image attribute of the model to the new filename
        $product_category->category_image = $imageName;
    }
    
    // Generate slug from the category title
    $slug = Str::slug($request->category_title);

    // Assign values to the model attributes
    $product_category->category_title = $request->category_title;
    $product_category->category_seo_url = $slug;
    $product_category->category_content = $request->category_content;
    $product_category->post_type = 'product_category';
    $product_category->category_status = $request->category_status;
    $product_category->sort_order = $request->sort_order;

    // Save the model instance
    $product_category->save();

    // Redirect back with success message
    return redirect()->back()->withSuccess('Product Category Added Successfully !!');
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
        $product_category = ProductCategories::where('id',$id)->first();
        return view('admin.add_product_category', ['product_category'=> $product_category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product_category = ProductCategories::where('id',$id)->first();

    // Check if category_image exists in the request and handle image upload
    if ($request->hasFile('category_image')) {
        // Get original filename

        if ($product_category->product_image) {
                $imagePath = public_path('admin/upload/post-images') . '/' . $product_category->category_image;
                File::delete($imagePath);
            }

            
        $originalFilename = $request->category_image->getClientOriginalName();
        // Generate unique filename
        $imageName = time() . '_' . $originalFilename;
        // Move uploaded image to the destination directory
        $request->category_image->move(public_path('admin/upload/post-images'), $imageName);
        // Set the category_image attribute of the model to the new filename
        $product_category->category_image = $imageName;
    }
    
    // Generate slug from the category title
    $slug = Str::slug($request->category_title);

    // Assign values to the model attributes
    $product_category->category_title = $request->category_title;
    $product_category->category_seo_url = $slug;
    $product_category->category_content = $request->category_content;
    $product_category->post_type = 'product_category';
    $product_category->category_status = $request->category_status;
    $product_category->sort_order = $request->sort_order;

    // Save the model instance
    $product_category->save();

    // Redirect back with success message
    return redirect()->back()->withSuccess('Product Category Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product_category = ProductCategories::where('id',$id)->first();
        $imagePath = public_path('admin/upload/post-images') . '/' . $product_category->category_image;
          if (File::exists($imagePath)) {
            // Delete the file
            File::delete($imagePath);
        }
        $product_category->delete();
        return redirect()->back()->withSuccess('Product Category Successfully deleted !!');
    }
}
