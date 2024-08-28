@extends('admin.layout.master')
@section('title')
Add New Products
@endsection
@section('master-section')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  	 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
            <div class="card mt-2 px-1 single_courses" style="border-top:3px solid tomato;">
              <!-- /.card-header -->
              <div class="row py-2 px-1 border-bottom" style="background: #e0f7e870;">
                <div class="col-11 px-2 d-flex">
                  <div class="mr-2 d-flex justify-content-center align-items-center" style="background-color: tomato;border-radius: 50%; width: 40px; height: 40px; text-align: center;"> <i class="fa fa-shopping-cart" style="font-size: 25px; color:#fff;"></i> </div>
                  <h5 class="d-flex justify-content-center align-items-center text-center">New Products Details</h5> </div>
                  
                  <div class="col-1 px-2 d-flex">
                  <a href="/admin/products" class="mr-2 d-flex justify-content-center align-items-center" style="background-color: tomato;border-radius: 50%; width: 40px; height: 40px; text-align: center;"> <i class="fa fa-arrow-left" style="font-size: 25px; color:#fff;"></i> </a>
                   </div>
              
              </div>
              <!--  -->
      
              <form role="form" method="post" enctype="multipart/form-data" action="{{ isset($products) ? route('products.update', $products->id) : route('products.store') }}">
    @csrf
    @if(isset($products))
        @method('PUT')
    @endif 

    <div class="row px-2 py-3">
        <!-- registration page -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="product_cat_id">Select Categories:</label>
                        <select class="form-control select2" name="product_cat_id" required>
                            <option value="">Select Categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" style="text-transform: uppercase;" {{ isset($products) && $category->id == $products->product_cat_id ? 'selected' : '' }}>{{ $category->category_title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="product_title">Products Title:</label>
                        <input type="text" class="form-control" name="product_title" placeholder="Enter Products Title" value="{{ isset($products) ? $products->product_title : '' }}" required>
                    </div>
                </div>

                <div class="col-md-12 mb-2">
                    <label for="product_content">Products Description:</label>
                    <textarea class="form-control" id="summernote" name="product_content" rows="4" required>{{ isset($products) ? $products->product_content : '' }}</textarea>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="seo_title">Seo Title:</label>
                        <input type="text" name="seo_title" class="form-control" placeholder="Seo Title" value="{{ isset($products) ? $products->seo_title : '' }}" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="meta_description">Meta Description:</label>
                    <textarea class="form-control" name="meta_description" id="meta_description" rows="3" required>{{ isset($products) ? $products->meta_description : '' }}</textarea>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_keywords">Meta Keywords:</label>
                        <input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords" value="{{ isset($products) ? $products->meta_keywords : '' }}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="sort_order">Sort Order:</label>
                        <input type="number" class="form-control" name="sort_order" value="{{ isset($products) ? $products->sort_order : '' }}" placeholder="Enter Sort Order">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status">
                            <option value="enable" {{ isset($products) && $products->status == 'enable' ? 'selected' : '' }}>Enable</option>
                            <option value="disable" {{ isset($products) && $products->status == 'disable' ? 'selected' : '' }}>Disable</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="photo">Products Image:</label>
                        <input type="file" class="form-control" name="product_image" accept="image/*" onchange="loadFile(event)">
                        <span class="help-block" style="color:red;font-size:10px;position: absolute;">Browse only .jpg /.JPEG /.png /.PNG image. (Dimension: 1920 X 820 px)</span>
                        @if(isset($products->product_image))
                            <img id="output_banner" class="mt-4" src="/admin/upload/post-images/{{ $products->product_image }}" height="100"/>
                        @else
                            <img id="output_banner" class="mt-4" src="/admin/dist/img/No-Image-Basic.png" height="100"/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-5">
        <div class="form-group">
            <input type="submit" name="submitf" id="submit" value="Publish" class="btn form-control" style="background-color: yellowgreen;color:white;" onClick="return confirm('Are You Sure want to submit ?')">
        </div>
    </div>
</form>

            
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

var loadFile = function(event) {
var output = document.getElementById('output_banner');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
</body>
</html>
<?php ob_end_flush(); ?>

@endsection