<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\{Categories,Subcategoreis,Products,Brands,Modelnumbers};


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $Products = Products::get();
         
        $totalQuantity = Products::count('id');
        return view('admin.product_list',['products'=> $Products, 'quantity'=> $totalQuantity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $Categories = Categories::get();
        $Subcategoreis = Subcategoreis::get();
        $Brands = Brands::get();
        $Modelnumbers = Modelnumbers::get();

        return view('admin.add_products',[
            'categories'=> $Categories,
            'subcategoreis'=> $Subcategoreis,
            'brands'=> $Brands,
            'modelnumbers'=> $Modelnumbers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
   {
         // Validate the form data
    $validatedData = $request->validate([
        'categories_id' => 'required|integer',
        'sub_categories_id' => 'required|integer',
        'brand_id' => 'required|integer',
        'model_number_id' => 'required|integer',
        'products_title' => 'required|string',
        'sku_number' => 'nullable|string',
        'product_content' => 'required|string',
        'sort_order' => 'nullable|integer',
        'status' => 'required|in:enable,disable',
    ]);

    // Check if the product title already exists
    $existingProduct = Products::where('products_title', $validatedData['products_title'])->first();

    if ($existingProduct) {
        return redirect()->back()->withInput()->withErrors(['products_title' => 'The product title already exists. Please choose a different title.']);
    }


    $product_title = $validatedData['products_title'];

        // seo title
        $page_title_seo_url = preg_replace('/([^a-zA-Z0-9\-]+)/', '-', strtolower($product_title));
                // Replace multiple dashes with one dash
            $page_title_seo_url = preg_replace('/-+/', '-', $page_title_seo_url);
                if(substr($page_title_seo_url, -1)==='-'){ // Remove - from end
            $page_title_seo_url = substr($page_title_seo_url, 0, -1);
            }
            if(substr($page_title_seo_url, 0, 1)==='-'){ // Remove - from start
            $page_title_seo_url = substr($page_title_seo_url, 1);
            }
        // end title
        


    // Create a new Product instance and save it to the database
    $product = new Products();
    $product->categories_id = $validatedData['categories_id'];
    $product->sub_categories_id = $validatedData['sub_categories_id'];
    $product->brand_id = $validatedData['brand_id'];
    $product->model_number_id = $validatedData['model_number_id'];
    $product->products_title = $validatedData['products_title'];
    $product->seo_url = $page_title_seo_url;
    $product->sku_number = $validatedData['sku_number'];
    $product->product_content = $validatedData['product_content'];
    $product->sort_order = $validatedData['sort_order'];
    $product->status = $validatedData['status'];
    $product->save();

    // Redirect or respond with a success message
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
         $Categories = Categories::get();
        $Subcategoreis = Subcategoreis::get();
        $Brands = Brands::get();
        $Modelnumbers = Modelnumbers::get();
        $products = Products::where('id',$id)->first();

        return view('admin.update_products',[
            'categories'=> $Categories,
            'subcategoreis'=> $Subcategoreis,
            'brands'=> $Brands,
            'modelnumbers'=> $Modelnumbers,
            'products'=> $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
             // Validate the form data
    $validatedData = $request->validate([
        'categories_id' => 'required|integer',
        'sub_categories_id' => 'required|integer',
        'brand_id' => 'required|integer',
        'model_number_id' => 'required|integer',
        'products_title' => 'required|string',
        'sku_number' => 'nullable|string',
        'product_content' => 'required|string',
        'sort_order' => 'nullable|integer',
        'status' => 'required|in:enable,disable',
    ]);

  
    $product_title = $validatedData['products_title'];

        // seo title
        $page_title_seo_url = preg_replace('/([^a-zA-Z0-9\-]+)/', '-', strtolower($product_title));
                // Replace multiple dashes with one dash
            $page_title_seo_url = preg_replace('/-+/', '-', $page_title_seo_url);
                if(substr($page_title_seo_url, -1)==='-'){ // Remove - from end
            $page_title_seo_url = substr($page_title_seo_url, 0, -1);
            }
            if(substr($page_title_seo_url, 0, 1)==='-'){ // Remove - from start
            $page_title_seo_url = substr($page_title_seo_url, 1);
            }
        // end title
        


    // Create a new Product instance and save it to the database
    $product = Products::where('id',$id)->first();
    $product->categories_id = $validatedData['categories_id'];
    $product->sub_categories_id = $validatedData['sub_categories_id'];
    $product->brand_id = $validatedData['brand_id'];
    $product->model_number_id = $validatedData['model_number_id'];
    $product->products_title = $validatedData['products_title'];
    $product->seo_url = $page_title_seo_url;
    $product->sku_number = $validatedData['sku_number'];
    $product->product_content = $validatedData['product_content'];
    $product->sort_order = $validatedData['sort_order'];
    $product->status = $validatedData['status'];
    $product->save();

    // Redirect or respond with a success message
    return redirect()->back()->with('success', 'Product details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Products = Products::where('id',$id)->first();
        $Products->delete();
        return redirect()->back()->withSuccess('Product Successfully removed !!');
    }
}
