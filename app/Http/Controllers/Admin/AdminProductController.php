<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Admin\{ProductCategories,Products};
use File;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $Products = Products::with('category')->get();
         
        $totalQuantity = Products::count('id');
        return view('admin.product_list',['products'=> $Products, 'quantity'=> $totalQuantity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Categories = ProductCategories::get();

        return view('admin.add_products',[
            'categories'=> $Categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'product_cat_id' => 'required',
            'product_title' => 'required|max:255',
            'product_content' => 'required',
            'seo_title' => 'required|max:255',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'sort_order' => 'numeric',
            'status' => 'required|in:enable,disable',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Adjust file size and accepted formats as needed
        ]);

        // Process the validated data and store the product
        $product = new Products;

        $slug = Str::slug($request->product_title);

        $product->product_cat_id = $request->product_cat_id;
        $product->product_title = $request->product_title;
        $product->product_title_seo_url = $slug;
        $product->product_content = $request->product_content;
        $product->seo_title = $request->seo_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = $request->meta_keywords;
        $product->sort_order = $request->sort_order;
        $product->status = $request->status;

        // Upload and store product image if provided
        if ($request->hasFile('product_image')) {
        // Get original filename
        $originalFilename = $request->product_image->getClientOriginalName();
        // Generate unique filename
        $imageName = time() . '_' . $originalFilename;
        // Move uploaded image to the destination directory
        $request->product_image->move(public_path('admin/upload/post-images'), $imageName);
        // Set the category_image attribute of the model to the new filename
        $product->product_image = $imageName;
    }


        $product->save();

        // Redirect to a specific route after storing the product
      return redirect()->back()->with('success', 'Product added successfully');
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
         $Categories = ProductCategories::get();
        $products = Products::where('id',$id)->first();

        return view('admin.add_products',[
            'categories'=> $Categories,
            'products'=> $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validate the incoming request data
        $validatedData = $request->validate([
            'product_cat_id' => 'required',
            'product_title' => 'required|max:255',
            'product_content' => 'required',
            'seo_title' => 'required|max:255',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'sort_order' => 'numeric',
            'status' => 'required|in:enable,disable',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Adjust file size and accepted formats as needed
        ]);

        // Process the validated data and store the product
        $product = Products::where('id',$id)->first();

        $slug = Str::slug($request->product_title);

        $product->product_cat_id = $request->product_cat_id;
        $product->product_title = $request->product_title;
        $product->product_title_seo_url = $slug;
        $product->product_content = $request->product_content;
        $product->seo_title = $request->seo_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = $request->meta_keywords;
        $product->sort_order = $request->sort_order;
        $product->status = $request->status;

        // Upload and store product image if provided
        if ($request->hasFile('product_image')) {

        if ($product->product_image) {
                $imagePath = public_path('admin/upload/post-images') . '/' . $product->product_image;
                File::delete($imagePath);
            }
        // Get original filename
        $originalFilename = $request->product_image->getClientOriginalName();
        // Generate unique filename
        $imageName = time() . '_' . $originalFilename;
        // Move uploaded image to the destination directory
        $request->product_image->move(public_path('admin/upload/post-images'), $imageName);
        // Set the category_image attribute of the model to the new filename
        $product->product_image = $imageName;
    }


        $product->save();

        // Redirect to a specific route after storing the product
      return redirect()->back()->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products::where('id',$id)->first();
        $imagePath = public_path('admin/upload/post-images') . '/' . $product->category_image;
          if (File::exists($imagePath)) {
            // Delete the file
            File::delete($imagePath);
        }
        $product->delete();
        return redirect()->back()->withSuccess('Product Successfully deleted !!');
    }
}
