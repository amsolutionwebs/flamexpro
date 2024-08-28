@extends('admin.layout.master')
@section('title')
Update Post
@endsection
@section('master-section')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-md-12">
                <div class="card single_courses mt-2 px-1" style="border-top:3px solid tomato;">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-1">
                        <div class="d-flex justify-content-center align-items-center" style="background-color: tomato;border-radius: 50%; width: 50px; height: 50px; text-align: center;"> <i class="fa fa-plus" style="font-size: 30px; color:#fff;"></i> </div>
                      </div>
                      <div class="col-11">
                        <h5>Update Post</h5> </div>
                    </div>
                    <!--  -->
                  </div>
                  <div class="card-body border">
                    <form role="form" method="post" enctype="multipart/form-data" action="/admin/update_post/update/{{ $pages->id }}">
                    @csrf 
                    @method('put')
                    <div class="row">
                        <!-- registration page -->
                        <div class="col-md-8">
                          <div class="row">
                         
                        <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Asign To Pages:</label>
                                <select class="form-control select2" name="page_id" >
    @foreach ($pagesonly as $page1)
    <option value="{{ $page1->id }}" {{ $page1->id == $pages->post_id ? 'selected' : ''  }} style="text-transform: uppercase;">{{ $page1->post_title }}</option>
@endforeach

                                </select>
                                 </div>
                            </div>
                         
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Post Title:</label>
                                <input type="text" class="form-control input-sm" name="post_title" id="title" value="{{ old('name',$pages->post_title)}}" required> </div>
                            </div>

                            <div class="col-md-12 mb-2">
                              <label  for="keywords"> Post Content:</label>
                              <textarea class="form-control input-sm" name="post_content"  id="summernote" rows="3" required>{{ old('name',$pages->post_content)}}</textarea>
                            </div>
                            
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Seo Title :</label>
                                <input type="text" name="seo_title" class="form-control" value="{{ old('name',$pages->seo_title)}}" required> </div>
                            </div>
                            
                            <div class="col-md-12">
                              <label  for="keywords"> Meta Description :</label>
                              <textarea class="form-control input-sm" name="meta_description" id="meta_description" rows="3" required>{{ old('name',$pages->meta_description)}}</textarea>
                            </div>

                            

                            

                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Meta Keywords:</label>
                                <input type="text" class="form-control input-sm" name="meta_keywords" value="{{ old('name',$pages->meta_keywords)}}" required> </div>
                            </div>

                            <div class="col-md-12">
                            <div class="form-group">
              <label for="photo">Pages Image :</label>
              <input  style="padding: 4px 5px 34px; height: 31px;"  type="file" class="form-control input-sm" name="post_image" accept="image/*" onchange="loadFile(event)">
              <span class="help-block" style="color:red;font-size:10px;">Browse only .jpg /.JPEG /.png /.PNG image.(Dimension:1920 X 820 px)</span> 

              @if (isset($pages->post_image))
    <img id="output_banner" src="{{ asset('admin/upload/post-images/' .$pages->post_image)}}" alt="Your Image" height="100">
   
@else
  <img id="output_banner" src ="{{ asset('admin/dist/img/No-Image-Basic.png') }}" height="100"/>
@endif

        
        </div>
                            </div>
                            
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Sort Order:</label>
                                <input type="number" class="form-control input-sm" name="sort_order" id="sort_order" value="{{ old('name',$pages->sort_order)}}" required> </div>
                            </div>

                           


                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Status:</label>
                                <select class="form-control select2" name="status">
                                  <option value="enable" {{ ($pages->post_status == 'enable') ? 'selected' : '' }}>Enable</option>
                                  <option value="disable" {{ ($pages->post_status == 'disable') ? 'selected' : '' }}>Disable</option>
                                </select> </div>
                            </div>
                          </div>
                        </div>
                        <!-- enquiry type -->
                      </div>
                        <!--  -->
                        <div class="col-md-12 mt-5">
      <div class="form-group ">
         <input type="submit" name="submitf" id="submit" value="Update" class="btn form-control" style="background-color: yellowgreen;color:white;" onClick="return confirm('Are You Sure want to update ?')">
     </div>
      </div>
                        
                      </form>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
            </div>
             </section>
          </div>
          <!-- /.container-fluid -->
       
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
  <!-- /.content-wrapper -->
 <!-- don remove -->
@endsection

@section('script-section')
<script>
    $(document).ready(function () {
      $('input[type=file]').change(function () {
        var val = $(this).val().toLowerCase();
        var regex = new RegExp("(.*?)\.(jpg|jpeg|png|PNG|webp)$");
        if (!(regex.test(val))) {
          $(this).val('');
          alert('Please select correct file format ( jpg|jpeg|png|PNG|webp )');
        }
      });
    });
  </script>
  <script>
var loadFile = function(event) {
var output = document.getElementById('output_banner');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
</body>
</html>
<?php ob_end_flush(); ?>

@endsection