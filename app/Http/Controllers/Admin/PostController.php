<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Pages;
use File;

class PostController extends Controller
{
    public function index()
    {
        $pages = Pages::where('post_type', 'post')->orderBy('sort_order', 'ASC')->get();

        $totalQuantity = Pages::where('post_type', 'post')->count('id');
        return view('admin.post_list',['pages'=> $pages, 'quantity'=> $totalQuantity]);

    }


     public function add_posts()
    {
        $pages = Pages::where('post_type', 'pages')->orderBy('sort_order', 'ASC')->get();
        return view('admin.add_posts', ['pages'=> $pages]);
    }

     // for add Post
    public function store(Request $request)
    {
        $pages = new Pages;
     
        
        if (isset($request->post_image)) {
                // upload image
            $originalFilename = $request->post_image->getClientOriginalName();
    $imageName = time() . '.' . $originalFilename;
        $request->post_image->move(public_path('admin/upload/post-images'), $imageName);
            $pages->post_image = $imageName;
        }
 
        $pages->post_title = $request->post_title;

        // seo title
        $page_title_seo_url = preg_replace('/([^a-zA-Z0-9\-]+)/', '-', strtolower($request->post_title));
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
        $pages->post_content = $request->post_content;
        $pages->post_type = 'post';
        $pages->seo_title = $request->seo_title;
        $pages->meta_keywords = $request->meta_keywords;
        $pages->meta_description = $request->meta_description;
        $pages->post_status = $request->status;
        $pages->sort_order = $request->sort_order;
        $pages->post_id = $request->page_id;

        $pages->save();
        return redirect('/admin/post_list')->withSuccess('Post Added Successfull !!');
        
    }


         // for view for upate
   public function edit($id)
{
    $pages = Pages::find($id); // Use find() instead of where()->first() to directly fetch by ID
    $pagesonly = Pages::where('post_type', 'pages')->get(); // Use get() instead of all() to retrieve a collection

    return view('admin.update_post', ['pages' => $pages, 'pagesonly' => $pagesonly]);
}

      // for delete
    public function destory($id)
    {
        $pages = Pages::where('id',$id)->first();
        $imagePath = public_path('admin/upload/post-images') . '/' . $pages->post_image;
          if (File::exists($imagePath)) {
            // Delete the file
            File::delete($imagePath);
        }
        $pages->delete();
        return redirect('/admin/post_list')->withSuccess('Post delete Successfully !!!');
    }


    // update query

     public function update(Request $request, $id)
    {
      
        $pages = Pages::where('id',$id)->first();
        if (isset($request->post_image)) {
            // upload image
         $originalFilename = $request->post_image->getClientOriginalName();
    $imageName = time() . '.' . $originalFilename;
    $request->post_image->move(public_path('admin/upload/post-images'), $imageName);
        $pages->post_image = $imageName;
    }

    $pages->post_title = $request->post_title;

    // seo title
    $page_title_seo_url = preg_replace('/([^a-zA-Z0-9\-]+)/', '-', strtolower($request->post_title));
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
        $pages->post_content = $request->post_content;
        $pages->post_type = 'post';
        $pages->seo_title = $request->seo_title;
        $pages->meta_keywords = $request->meta_keywords;
        $pages->meta_description = $request->meta_description;
        $pages->post_status = $request->status;
        $pages->sort_order = $request->sort_order;
        $pages->post_id = $request->page_id;
        $pages->save();
    return redirect('/admin/post_list')->withSuccess('Post details successfully updated !!');

    }
}
