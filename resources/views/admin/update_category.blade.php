@extends('admin.layout.master')
@section('title')
Update Category
@endsection
@section('master-section')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  	 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
            <div class="card mt-2 px-1" style="border-top:3px solid tomato;">
              <!-- /.card-header -->
              <div class="row py-2 px-1 border-bottom" style="background: #e0f7e870;">
                <div class="col-11 px-2 d-flex">
                  <div class="mr-2 d-flex justify-content-center align-items-center" style="background-color: tomato;border-radius: 50%; width: 40px; height: 40px; text-align: center;"> <i class="fa fa-users" style="font-size: 25px; color:#fff;"></i> </div>
                  <h5 class="d-flex justify-content-center align-items-center text-center"> Category</h5> </div>
                  
                  <div class="col-1 px-2 d-flex">
                  <a href="/admin/category" class="mr-2 d-flex justify-content-center align-items-center" style="background-color: tomato;border-radius: 50%; width: 40px; height: 40px; text-align: center;"> <i class="fa fa-arrow-left" style="font-size: 25px; color:#fff;"></i> </a>
                   </div>
              
              </div>
              <!--  -->
      

          <form role="form" method="post" enctype="multipart/form-data" action="{{ route('category.update',$category->id) }}">
          	@csrf
          	@method('put')
          
          <div class="row px-2 py-3">
            
            <!-- registration page -->
            <div class="col-md-12">
              <h4 style="color:#d9534f;"><b>Category Details:-</b></h4>
              <hr> </div>
          
             <div class="col-lg-12 col-sm-12 col-12 mb-4">
                     
                     
                      
                      
                      
                      <table class="mytabledesing" width="100%">
                        <thead>
                          <tr>
                            <th>Category Name</th>
                         	<th>Sort Order</th>
                            <th>Status</th>
                            <th>Category Image</th>
                            <th>Image</th>
                          </tr>
                        </thead>
                        <tbody id="Tbodyvariation">
                          <tr id="TRbodyvariation">
                           
                            
                            <td>
                              <input type="text" name="category_name[]" class="form-control" placeholder="Enter Category Name" value="{{ old('name',$category->category_name)}}" required> </td>
                            
                            <td>
                              <input type="text" name="sort_order[]" class="form-control" placeholder="Sort Order" value="{{ old('name',$category->sort_order)}}" required> </td>

                            
                            <td>
                              <select class="form-control" name="status[]">
                                  <option value="enable" {{ ($category->status == 'enable') ? 'selected' : '' }}>Enable</option>
                                  <option value="disable" {{ ($category->status == 'disable') ? 'selected' : '' }}>Disable</option>
                                </select>
                            </td>

                            <td width="200">
                              <input type="file" onchange="loadFile(event)" name="category_image[]" class="form-control"> </td>
                            
                           
                            <td class="text-center justify-conent-center">
                   @if(isset($category->category_image))
    <img id="output_category" src="/admin/upload/categories-images/{{ $category->category_image }}" title="banner_title" width="50" height="50">
@else
    <img id="output_category" src="/admin/dist/img/No-Image-Basic.png" title="No Image" width="50" height="50">
@endif

                      </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                      
            <!--  -->
            <div class="col-md-12">
             
      
              <input type="submit" value="Submit" class="btn btn-primary float-right"> </div>
            <!--  -->
            
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


var loadFile = function(event) {
var output = document.getElementById('output_category');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
</body>
</html>
<?php ob_end_flush(); ?>

@endsection