<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\{Pages,UserProductEnquiry,ProductCategories,Products};
use Illuminate\Support\Str;


class ProductController extends Controller
{
    public function index()
    {
         
         $products = ProductCategories::where('category_status', 'enable')->get();


        return view('product',['products'=>$products]);
        
    }

    public function productdetails($slug){
        
        $blog = Pages::where('post_title_seo_url', $slug)
             ->where('post_type', 'post')
             ->where('post_status', 'enable')
             ->first();

        $blogs_rendom = Pages::where('post_id', 3)
              ->where('post_type', 'post')
              ->where('post_status', 'enable')
              ->inRandomOrder()
              ->limit(6)
              ->get();

         return view('product-details',['blog'=> $blog,'blogs_rendom'=>$blogs_rendom]);

    }

     public function  productcategory($slug){
        
        $products_category = ProductCategories::where('category_seo_url', $slug)
             ->where('post_type', 'product_category')
             ->where('category_status', 'enable')
             ->first();

        $products = products::where('product_cat_id', $products_category->id)->get();

         return view('product-category',[
            'products_category'=> $products_category,
            'products'=>$products
        ]);

    }


   




     public function userProductContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|string|email|max:255',
            'requirement' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:1000'
        ]);
    
        
        $save = new UserProductEnquiry;
        $save->name = trim($request->name);
        $save->phone = trim($request->phone);
        $save->email = trim($request->email);
        $save->requirement = trim($request->requirement);
        $save->address = trim($request->address);
        $save->status = 'enable';
        $save->save();

        // Mail::to('eraman067@gmail.com')->send(new ContactMail($save));

        return redirect()->back()->with('success', "Thank you for connecting with us");
        
    }


    // productcategorydetails

    public function productcategorydetails($id)
    {
        $product = Products::findOrFail($id);
        $other_products = Products::where('product_cat_id', $product->product_cat_id)->get();

        // dd($product->id);

         return view('product_details_two',['products'=> $product,'other_products'=>$other_products]);
    }
}
