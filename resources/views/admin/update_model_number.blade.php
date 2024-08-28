@extends('admin.layout.master')
@section('title')
Add New Model Number
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
                  <h5 class="d-flex justify-content-center align-items-center text-center">Model Number</h5> </div>
                  
                  <div class="col-1 px-2 d-flex">
                  <a href="/admin/brands" class="mr-2 d-flex justify-content-center align-items-center" style="background-color: tomato;border-radius: 50%; width: 40px; height: 40px; text-align: center;"> <i class="fa fa-arrow-left" style="font-size: 25px; color:#fff;"></i> </a>
                   </div>
              
              </div>
              <!--  -->
      

          <form role="form" method="post" enctype="multipart/form-data" action="{{ route('modelnumber.update', $modelnumber->id) }}">
            @csrf
          @method('put')
          
          <div class="row px-2 py-3">
            
            <!-- registration page -->
            <div class="col-md-12">
              <h4 style="color:#d9534f;"><b>Model Number Details:-</b></h4>
              <hr> </div>
          
             <div class="col-lg-12 col-sm-12 col-12 mb-4">
                     
                     
                      <div class="table-top mb-1">
                        <div class="wordset">
                          <button type="button" class="btn btn-success mb-1 float-right btn-added my-table-create" id="add_invoice_item" onclick="AddMore()">+ Add New Item</button>
                        </div>
                      </div>
                      
                      
                      <table class="mytabledesing" width="100%">
                        <thead>
                          <tr>
                          	
                            <th>Brand Name</th>
                             <th>Model Number</th>
                         	<th>Sort Order</th>
                            <th>Status</th>
                          
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Tbodyvariation">
                          <tr id="TRbodyvariation">
                           
                            
                            <td>
                            <select class="form-control" name="brand_id[]" required>
                            	<option value="">Select brand</option>
                            	 @foreach ($brand as $brand)
                      <option value="{{ $brand->id }}"  {{ $brand->id == $modelnumber->brand_id ? 'selected' : ''  }} style="text-transform: uppercase;">{{ $brand->brand_name }}</option>
                      @endforeach
                            </select>
                               </td>

                             

                                <td>
                              <input type="text" name="model_number[]" class="form-control" placeholder="Enter Model Number" value="{{ old('name',$modelnumber->model_number)}}" required> </td>
                            
                            <td>
                              <input type="number" name="sort_order[]" class="form-control" placeholder="Sort Order" value="{{ old('name',$modelnumber->sort_order)}}" required> </td>

                            
                            <td>
                              <select class="form-control" name="status[]">
                                  
                                  <option value="enable" {{ ($modelnumber->status == 'enable') ? 'selected' : '' }}>Enable</option>
                                  <option value="disable" {{ ($modelnumber->status == 'disable') ? 'selected' : '' }}>Disable</option>
                                </select>
                            </td>

                         
                            
                           
                            <td class="text-center justify-conent-center">
                              <button type="button" class="btn btn-filter setclose" style="background: #ea5455;" onclick="TableDelete(this)"> <i class="fas fa-times text-light"></i> </button>
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

</script>
</body>
</html>
<?php ob_end_flush(); ?>

@endsection