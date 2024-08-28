<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Banners;
use File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banners::get();
        $totalQuantity = Banners::count('id');
        return view('admin.banner_list',['banners'=> $banners, 'quantity'=> $totalQuantity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_banner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banners = new Banners;
     
        
        if (isset($request->banner_image)) {
                // upload image
        $imageName = time() . '.' . $request->banner_image->extension();
        $request->banner_image->move(public_path('admin/upload/banner-images'), $imageName);
            $banners->banner_image = $imageName;
        }
 
        $banners->banner_title = $request->banner_title;
        $banners->banner_url = $request->banner_url;
        $banners->page_type = $request->page_type;
        $banners->banner_type = $request->banner_type;
        $banners->banner_content = $request->banner_content; 
        $banners->sort_order = $request->sort_order;
        $banners->banner_status = $request->status;
        $banners->save();
        return redirect('/admin/banner')->withSuccess('Banners Added Successfull !!');
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
        $banners = Banners::where('id',$id)->first();

        return view('admin.update_banner',['banners' => $banners]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $banners = Banners::where('id',$id)->first();
     
        
        if (isset($request->banner_image)) {
                // upload image
        $imageName = time() . '.' . $request->banner_image->extension();
        $request->banner_image->move(public_path('admin/upload/banner-images'), $imageName);
            $banners->banner_image = $imageName;
        }
 
        $banners->banner_title = $request->banner_title;
        $banners->banner_url = $request->banner_url;
        $banners->page_type = $request->page_type;
        $banners->banner_type = $request->banner_type;
        $banners->banner_content = $request->banner_content; 
        $banners->sort_order = $request->sort_order;
        $banners->banner_status = $request->status;
        $banners->save();
        return redirect('/admin/banner')->withSuccess('Banners Update Successfull !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banners = Banners::where('id',$id)->first();
        $imagePath = public_path('admin/upload/banner-images') . '/' . $banners->banner_image;
          if (File::exists($imagePath)) {
            // Delete the file
            File::delete($imagePath);
        }
        $banners->delete();
        return redirect()->back()->withSuccess('Banners delete Successfully !!!');
    }
}
