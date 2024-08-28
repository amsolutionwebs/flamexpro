@extends('admin.layout.master')
@section('title')
Update Products Details
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
                  <div class="mr-2 d-flex justify-content-center align-items-center" style="background-color: tomato;border-radius: 50%; width: 40px; height: 40px; text-align: center;"> <i class="fa fa-users" style="font-size: 25px; color:#fff;"></i> </div>
                  <h5 class="d-flex justify-content-center align-items-center text-center">Update Products Details</h5> </div>
                  
                  <div class="col-1 px-2 d-flex">
                  <a href="/admin/products" class="mr-2 d-flex justify-content-center align-items-center" style="background-color: tomato;border-radius: 50%; width: 40px; height: 40px; text-align: center;"> <i class="fa fa-arrow-left" style="font-size: 25px; color:#fff;"></i> </a>
                   </div>
              
              </div>
              <!--  -->
      

          <form role="form" method="post" enctype="multipart/form-data" action="{{ route('products.update', $products->id) }}" autocomplete="off" class="needs-validation" novalidate>
            @csrf
              @method('put')
            
                      <div class="row px-2 py-3">
                        <!-- registration page -->
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="categories_id"> Select Categories :</label>
                                <select class="form-control select2" name="categories_id" onchange="getSubCat(this.value)" id="categories_id" required>
                                  <option value="">Select Categories</option>
                                  
           @foreach ($categories as $categories)
                      <option value="{{ $categories->id }}" {{ $categories->id == $products->categories_id ? 'selected' : ''  }} style="text-transform: uppercase;">{{ $categories->category_name }}</option>
                      @endforeach
                                </select>
                                 </div>
                            </div>

                             
                             <div class="col-md-3">
                              <div class="form-group">
                                <label for="sub_categories_id">Select Sub Categories :</label>
                                <select class="form-control select2" name="sub_categories_id" id="sub_categories_id" required>
                                  <option value="">Select Sub Categories</option>
                                  
            @foreach ($subcategoreis as $subcategoreis)
                      <option value="{{ $subcategoreis->id }}" {{ $subcategoreis->id == $products->sub_categories_id ? 'selected' : ''  }} style="text-transform: uppercase;">{{ $subcategoreis->sub_category_name }}</option>
                      @endforeach
                                </select>
                                 </div>
                            </div>
        
        <div class="col-md-3">
                              <div class="form-group">
                                <label for="brand_id"> Select Brand :</label>
                                <select class="form-control select2" name="brand_id" id="brand_id" onchange="getModelNumber(this.value)" required>
                                  <option value="">Select Brand</option>
                                  
            @foreach ($brands as $brands)
                      <option value="{{ $brands->id }}" {{ $brands->id == $products->brand_id ? 'selected' : ''  }} style="text-transform: uppercase;">{{ $brands->brand_name }}</option>
                      @endforeach
                                </select>
                                 </div>
                            </div>

                             
                             <div class="col-md-3">
                              <div class="form-group">
                                <label for="model_id">Select Model Number :</label>
                                <select class="form-control select2" name="model_number_id" id="model_number_id" required>
                                  <option value="">Select Model Number</option>
                                  
            @foreach ($modelnumbers as $modelnumbers)
                      <option value="{{ $modelnumbers->id }}" {{ $modelnumbers->id == $products->model_number_id ? 'selected' : ''  }} style="text-transform: uppercase;">{{ $modelnumbers->model_number }}</option>
                      @endforeach
                                </select>
                                 </div>
                            </div>
                            
                            
                              
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="products_title">Products Title:</label>
                                <input type="text" class="form-control input-sm" name="products_title" placeholder="Enter Products Title" value="{{ old('name',$products->products_title)}}" required> </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="sku_number">SKU Number. :</label>
                                <input type="text" name="sku_number" placeholder="Enter SKU Number" class="form-control" value="{{ old('name',$products->sku_number)}}"> </div>
                            </div>

                           
                            
                            <div class="col-md-12 mb-2">
                              <label  for="product_content"> Products Description:</label>
                              <textarea class="form-control input-sm" id="summernote" name="product_content" rows="3" required>{{ old('name',$products->sort_order)}}</textarea>
                              
                            </div>
                            
                            
                            

                           <div class="col-md-6">
                              <div class="form-group">
                                <label for="title">Sort Order:</label>
                                <input type="number" class="form-control input-sm" name="sort_order" placeholder="Enter Sort Order" value="{{ old('name',$products->sort_order)}}"> </div>
                            </div>

                           
                           

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="title">Status:</label>
                                <select class="form-control" name="status">
                                  <option value="enable" {{ ($products->status == 'enable') ? 'selected' : '' }}>Enable</option>
                                  <option value="disable" {{ ($products->status == 'disable') ? 'selected' : '' }}>Disable</option>
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
<script type="text/javascript">
  function AddMore() {
  var tbd = $("#TRbodyvariation").clone().appendTo("#Tbodyvariation");
  $(tbd).find("input").val('');
  
}

function TableDelete(btndelete) {
  $(btndelete).parent().parent().remove();

}

</script>
</body>
</html>
<?php ob_end_flush(); ?>

@endsection