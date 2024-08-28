<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Pages;
use File;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Pages::where('post_type', 'pages')->orderBy('sort_order', 'ASC')->get();
        $totalQuantity = Pages::where('post_type', 'pages')->count('id');
        return view('admin.page_list',['pages'=> $pages, 'quantity'=> $totalQuantity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_pages');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
       {
        $pages = new Pages;
     
        
        if (isset($request->post_image)) {
                // upload image
        $imageName = time() . '.' . $request->post_image->extension();
        $request->post_image->move(public_path('admin/upload/post-images'), $imageName);
            $pages->post_image = $imageName;
        }
 
        $pages->post_title = $request->page_title;

        // seo title
        $page_title_seo_url = preg_replace('/([^a-zA-Z0-9\-]+)/', '-', strtolower($request->page_title));
                // Replace multiple dashes with one dash
            $page_title_seo_url = preg_replace('/-+/', '-', $page_title_seo_url);
                if(substr($page_title_seo_url, -1)==='-'){ // Remove - from end
            $page_title_seo_url = substr($page_title_seo_url, 0, -1);
            }
            if(substr($page_title_seo_url, 0, 1)==='-'){ // Remove - from start
            $page_title_seo_url = substr($page_title_seo_url, 1);
            }
        // end title
        $pages->post_title_seo_url = $page_title_seo_url;
        $pages->post_content = $request->page_content;
        $pages->post_type = 'pages';
        $pages->seo_title = $request->seo_title;
        $pages->meta_keywords = $request->meta_keywords;
        $pages->meta_description = $request->meta_description;
        $pages->post_status = $request->status;
        $pages->sort_order = $request->sort_order;
        $pages->save();
        return redirect('/admin/pages')->withSuccess('Page Added Successfull !!');
        
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
        $pages = Pages::where('id',$id)->first();

        return view('admin.update_pages',['pages' => $pages]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
     {
      
        $pages = Pages::where('id',$id)->first();
        if (isset($request->post_image)) {
            // upload image
    $imageName = time() . '.' . $request->post_image->extension();
    $request->post_image->move(public_path('admin/upload/post-images'), $imageName);
        $pages->post_image = $imageName;
    }

    $pages->post_title = $request->page_title;

    // seo title
    $page_title_seo_url = preg_replace('/([^a-zA-Z0-9\-]+)/', '-', strtolower($request->page_title));
            // Replace multiple dashes with one dash
        $page_title_seo_url = preg_replace('/-+/', '-', $page_title_seo_url);
            if(substr($page_title_seo_url, -1)==='-'){ // Remove - from end
        $page_title_seo_url = substr($page_title_seo_url, 0, -1);
        }
        if(substr($page_title_seo_url, 0, 1)==='-'){ // Remove - from start
        $page_title_seo_url = substr($page_title_seo_url, 1);
        }
    // end title
    $pages->post_title_seo_url = $page_title_seo_url;
    $pages->post_content = $request->page_content;
    $pages->post_type = 'pages';
    $pages->seo_title = $request->seo_title;
    $pages->meta_keywords = $request->meta_keywords;
    $pages->meta_description = $request->meta_description;
    $pages->post_status = $request->status;
    $pages->sort_order = $request->sort_order;
    $pages->save();
    return redirect('/admin/pages')->withSuccess('Page details Successfully update !!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pages = Pages::where('id',$id)->first();
        $imagePath = public_path('admin/upload/post-images') . '/' . $pages->post_image;
          if (File::exists($imagePath)) {
            // Delete the file
            File::delete($imagePath);
        }
        $pages->delete();
        return redirect('/admin/pages')->withSuccess('Pages Successfully deleted !!');
    }
}
