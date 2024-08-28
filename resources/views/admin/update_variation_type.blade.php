@extends('admin.layout.master')
@section('title')
Update Variation Type
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
                  <h5 class="d-flex justify-content-center align-items-center text-center">Variation Type</h5> </div>
                  
                  <div class="col-1 px-2 d-flex">
                  <a href="/admin/variation_type" class="mr-2 d-flex justify-content-center align-items-center" style="background-color: tomato;border-radius: 50%; width: 40px; height: 40px; text-align: center;"> <i class="fa fa-arrow-left" style="font-size: 25px; color:#fff;"></i> </a>
                   </div>
              
              </div>
              <!--  -->
      

          <form role="form" method="post" enctype="multipart/form-data" action="{{ route('variation_type.update', $variation_type->id) }}">
          	@csrf
                 @method('put')
          <div class="row px-2 py-3">
            
            <!-- registration page -->
            <div class="col-md-12">
              <h4 style="color:#d9534f;"><b>Variation Type Details:-</b></h4>
              <hr> </div>
          
             <div class="col-lg-12 col-sm-12 col-12 mb-4">
                     
                     
                      
                      
                      
                      <table class="mytabledesing" width="100%">
                        <thead>
                          <tr>
                          	<th>Variation Name</th>
                            <th>Sub Variation Name</th>
                             <th>Variation Type</th>
                         	<th>Sort Order</th>
                            <th>Status</th>
                         
                          </tr>
                        </thead>
                        <tbody id="Tbodyvariation">
                          <tr id="TRbodyvariation">
                           
                            
                            <td>
                            <select class="form-control" name="variation_id[]" required>
                            	<option value="">Select Variation</option>
                            	 @foreach ($variations as $variations)
                      <option value="{{ $variations->id }}" {{ $variations->id == $variation_type->variation_id ? 'selected' : ''  }} style="text-transform: uppercase;">{{ $variations->variation_name }}</option>
                      @endforeach
                            </select>
                               </td>

                                <td>
                            <select class="form-control" name="sub_variation_id[]" required>
                            	<option value="">Select Sub Variation</option>
                            	 @foreach ($sub_variations as $sub_variations)
                      <option value="{{ $sub_variations->id }}" {{ $sub_variations->id == $variation_type->sub_variation_id ? 'selected' : ''  }} style="text-transform: uppercase;">{{ $sub_variations->sub_variation_name }}</option>
                      @endforeach
                            </select>
                               </td>

                              <td>
                              <input type="text" name="variation_type[]" class="form-control" placeholder="Enter Variation Type" value="{{ old('name',$variation_type->variation_type)}}" required> </td>
                            
                            <td>
                              <input type="number" name="sort_order[]" class="form-control" placeholder="Sort Order" value="{{ old('name',$variation_type->sort_order)}}" required> </td>

                            
                            <td>
                              <select class="form-control" name="status[]">
                                  <option value="enable" {{ ($variation_type->status == 'enable') ? 'selected' : '' }}>Enable</option>
                                  <option value="disable" {{ ($variation_type->status == 'disable') ? 'selected' : '' }}>Disable</option>
                                </select>
                            </td>

                         
                            
                          
                          </tr>
                        </tbody>
                      </table>
                    </div>
                      
            <!--  -->
            <div class="col-md-12">
             
      
              <input type="submit" value="Update" class="btn btn-primary float-right"> </div>
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