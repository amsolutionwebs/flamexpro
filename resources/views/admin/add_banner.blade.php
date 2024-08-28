@extends('admin.layout.master')
@section('title')
Add New Banner
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
                        <h5> Add New Banner</h5> </div>
                    </div>
                    <!--  -->
                  </div>
                  <div class="card-body border">
                  <form role="form" method="post" enctype="multipart/form-data" action="{{ route('banner.store') }}">
                    @csrf
                      <div class="row">
                        <!-- registration page -->
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Banner Title:</label>
                                <input type="text" class="form-control input-sm" name="banner_title" id="title" value=""> </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Banner Url :</label>
                                <input type="url" class="form-control input-sm" name="banner_url" id="title" value=""> </div>
                            </div>


                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Page Type :</label>
                                <select class="form-control" name="page_type">
                                  <option value="home_top" >Home Top</option>
                                 
                                </select> </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Banner Type :</label>
                                <select class="form-control" name="banner_type">
                                  <option value="top_banner">Top Banner</option>
                                  <option value="offer_banner" >Offer Banner</option>
                                  <option value="footer_banner" >Footer Banner</option>
                                </select> </div>
                            </div>
                            
                            <div class="col-md-12">
                              <label  for="keywords">  Banner Content :</label>
                              <textarea class="form-control input-sm" name="banner_content" id="summernote" rows="3"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
              <label for="photo">Banner Image :</label>
              <input  style="padding: 4px 5px 34px; height: 31px;"  type="file" class="form-control input-sm" name="banner_image" accept="image/*" onchange="loadFile(event)">
              <span class="help-block" style="color:red;font-size: 10px;">Browse only .jpg /.JPEG /.png /.PNG image.(Dimension:1920 X 820 px)</span> 
        <img id="output_banner" src ="/admin/dist/img/No-Image-Basic.png" height="100"/>
        </div> 
                            </div>
                            
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Sort Order:</label>
                                <input type="number" class="form-control input-sm" name="sort_order" id="sort_order" value=""> </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Status:</label>
                                <select class="form-control" name="status">
                                  <option value="enable">Enable</option>
                                  <option value="disable" >Disable</option>
                                </select> </div>
                            </div>
                          </div>
                        </div>
                        <!-- enquiry type -->
                      </div>
                        <!--  -->
                        <div class="col-md-12 mt-5">
      <div class="form-group ">
                      
               
                      <input type="submit" name="submitf" id="submit" value="Publish" class="btn form-control" style="background-color: yellowgreen;color:white;" onClick="return confirm('Are You Sure want to submit ?')">
                    <span id='message'></span>
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