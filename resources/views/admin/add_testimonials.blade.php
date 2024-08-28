@extends('admin.layout.master')
@section('title')
Add New Testimonials
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
                        <h5>@if(isset($testimonials))
					    Update
					    @else
					     Add New

					  @endif Testimonials</h5> </div>
                    </div>
                    <!--  -->
                  </div>
                  <div class="card-body border">
                  <form role="form" method="post" enctype="multipart/form-data" action="{{ isset($testimonials) ? route('testimonials.update', $testimonials->id) : route('testimonials.store') }}">
                   @csrf
					  @if(isset($testimonials))
					    @method('PUT')
					  @endif
                      <div class="row">
                        <!-- registration page -->
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Testimonial Name:</label>
                                <input type="text" class="form-control input-sm" name="testimonials_name" value="{{ isset($testimonials) ? $testimonials->testimonials_name : '' }}" placeholder="Testimonial Name"> </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Position :</label>
                                <input type="text" class="form-control input-sm" name="testimonials_position" value="{{ isset($testimonials) ? $testimonials->testimonials_position : '' }}" placeholder="Position"> </div>
                            </div>


                          
                            
                            <div class="col-md-12">
                              <label  for="keywords">  Testimonials Content :</label>
                              <textarea class="form-control input-sm" name="testimonials_content" id="summernote" rows="3">{{ isset($testimonials) ? $testimonials->testimonials_content : '' }}</textarea>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
              <label for="photo">Testimonials Image :</label>
              <input  style="padding: 4px 5px 34px; height: 31px;"  type="file" class="form-control input-sm" name="testimonials_image" accept="image/*" onchange="loadFile(event)">
              <span class="help-block" style="color:red;font-size: 10px;">Browse only .jpg /.JPEG /.png /.PNG image.(Dimension:1920 X 820 px)</span> 
@if(isset($testimonials->testimonials_image))
    <img id="output_banner" src="/admin/upload/post-images/{{ $testimonials->testimonials_image }}" height="100"/>
@else
    <img id="output_banner" src="/admin/dist/img/No-Image-Basic.png" height="100"/>
@endif

        


        </div> 
                            </div>
                            
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Sort Order:</label>
                                <input type="number" class="form-control input-sm" name="sort_order" id="sort_order" value="{{ isset($testimonials) ? $testimonials->sort_order : '' }}" placeholder="Sort Order"> </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" name="status" id="status" required>
              <option value="enable" {{ isset($testimonials) && $testimonials->status == 'enable' ? 'selected' : '' }}>Enable</option>
              <option value="disable" {{ isset($testimonials) && $testimonials->status == 'disable' ? 'selected' : '' }}>Disable</option>
            </select> 
          </div>
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