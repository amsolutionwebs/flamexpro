@extends('admin.layout.master')
@section('title')
Add New Category
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
                  <h5 class="d-flex justify-content-center align-items-center text-center">Sub Variation</h5> </div>
                  
                  <div class="col-1 px-2 d-flex">
                  <a href="/admin/sub_variation" class="mr-2 d-flex justify-content-center align-items-center" style="background-color: tomato;border-radius: 50%; width: 40px; height: 40px; text-align: center;"> <i class="fa fa-arrow-left" style="font-size: 25px; color:#fff;"></i> </a>
                   </div>
              
              </div>
              <!--  -->
      

          <form role="form" method="post" enctype="multipart/form-data" action="{{ route('sub_variation.update', $sub_variations->id) }}">
          	@csrf
            @method('put')
          
          <div class="row px-2 py-3">
            
            <!-- registration page -->
            <div class="col-md-12">
              <h4 style="color:#d9534f;"><b>Update Sub Variation Details:-</b></h4>
              <hr> </div>
          
             <div class="col-lg-12 col-sm-12 col-12 mb-4">
                     
                     
                 
                      
                      
                      <table class="mytabledesing" width="100%">
                        <thead>
                          <tr>
                          	<th>Variation Name</th>
                            <th>Sub Variation Name</th>
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
                      <option value="{{ $variations->id }}" {{ $variations->id == $sub_variations->variation_id ? 'selected' : ''  }} style="text-transform: uppercase;">{{ $variations->variation_name }}</option>
                      @endforeach
                            </select>
                               </td>

                              <td>
                              <input type="text" name="sub_variation_name[]" class="form-control" placeholder="Enter Sub Variation Name" value="{{ old('name',$sub_variations->sub_variation_name)}}" required> </td>
                            
                            <td>
                              <input type="number" name="sort_order[]" class="form-control" placeholder="Sort Order" value="{{ old('name',$sub_variations->sort_order)}}" required> </td>

                            
                            <td>
                              <select class="form-control" name="status[]">
                                  
                                  <option value="enable" {{ $sub_variations->status == 'enable' ? 'selected' : ''  }}>Enable</option>
                                  <option value="disable" {{ $sub_variations->status == 'disable' ? 'selected' : ''  }}>Disable</option>
                                </select>
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