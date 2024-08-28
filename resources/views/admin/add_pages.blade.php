@extends('admin.layout.master')
@section('title')
Add New Pages
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
                        <h5> Add New Pages</h5> </div>
                    </div>
                    <!--  -->
                  </div>
                  <div class="card-body border">
                    <form role="form" method="post" enctype="multipart/form-data" action="{{ route('pages.store') }}">
                    @csrf 
                    <div class="row">
                        <!-- registration page -->
                        <div class="col-md-8">
                          <div class="row">
                          

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Page Title:</label>
                                <input type="text" class="form-control input-sm" name="page_title" id="title" placeholder="Page Title" value="" required> </div>
                            </div>

                            <div class="col-md-12 mb-2">
                              <label  for="keywords"> Page Content:</label>
                              <textarea class="form-control input-sm" name="page_content" id="summernote" rows="3" required></textarea>
                            </div>
                            
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Seo Title :</label>
                                <input type="text" name="seo_title" class="form-control" placeholder="Seo Title" value="" required> </div>
                            </div>
                            
                            <div class="col-md-12">
                              <label  for="keywords"> Meta Description :</label>
                              <textarea class="form-control input-sm" name="meta_description" id="meta_description" rows="3" required></textarea>
                            </div>

                          

                            

                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Meta Keywords:</label>
                                <input type="text" class="form-control input-sm" name="meta_keywords" placeholder="Meta Keywords" value="" required> </div>
                            </div>

                            <div class="col-md-12">
                            <div class="form-group">
              <label for="photo">Pages Image :</label>
              <input  style="padding: 4px 5px 34px; height: 31px;"  type="file" class="form-control input-sm" name="post_image" accept="image/*" onchange="loadFile(event)">
              <span class="help-block" style="color:red;font-size:10px;">Browse only .jpg /.JPEG /.png /.PNG image.(Dimension:1920 X 820 px)</span> 
        <img id="output_banner" src ="/admin/dist/img/No-Image-Basic.png" height="100"/>
        </div>
                            </div>
                            
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Sort Order:</label>
                                <input type="number" class="form-control input-sm" name="sort_order" id="sort_order" placeholder="Sort Order" value="" required> </div>
                            </div>

                           


                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Status:</label>
                                <select class="form-control" name="status">
                                  <option value="enable" >Enable</option>
                                  <option value="disable">Disable</option>
                                </select> </div>
                            </div>
                          </div>
                        </div>
                        <!-- enquiry type -->
                      </div>
                        <!--  -->
                        <div class="col-md-12 mt-5">
      <div class="form-group ">
         <input type="submit" name="submitf" id="submit" value="Submit" class="btn form-control" style="background-color: yellowgreen;color:white;" onClick="return confirm('Are You Sure want to submit ?')">
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
        var regex = new RegExp("(.*?)\.(jpg|jpeg|png|PNG)$");
        if (!(regex.test(val))) {
          $(this).val('');
          alert('Please select correct file format ( jpg|jpeg|png|PNG )');
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