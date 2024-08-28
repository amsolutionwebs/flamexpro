@extends('admin.layout.master')
@section('title')
Add New Subscriber
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
                  <div class="card-body">
                    <div class="row">
                      <div class="col-1">
                        <div class="d-flex justify-content-center align-items-center" style="background-color: tomato;border-radius: 50%; width: 50px; height: 50px; text-align: center;"> <i class="fa fa-envelope" style="font-size: 30px; color:#fff;"></i> </div>
                      </div>
                      <div class="col-11">
                        <h5> Update Subcriber Details</h5> </div>
                    </div>
                    <!--  -->
                  </div>
                  <div class="card-body border">
                    <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('subscriber.update', $subcriber->id) }}">
                    @csrf 
                    @method('put')
                    <div class="row">
                        <!-- registration page -->
                        <div class="col-md-12">
                          <div class="row">
                          

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Subcriber Email:</label>
                                <input type="email" class="form-control input-sm" name="email"  value="{{ old('name',$subcriber->subscribers_email)}}" required> </div>
                            </div>

                           
                           <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Status:</label>
                                <select class="form-control" name="status">
                                  <option value="enable" {{ ($subcriber->status == 'enable') ? 'selected' : '' }}>Enable</option>
                                  <option value="disable" {{ ($subcriber->status == 'disable') ? 'selected' : '' }}>Disable</option>
                                </select> </div>
                            </div>
                            
                          

                            

                          </div>
                        </div>

                        
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


</body>
</html>
<?php ob_end_flush(); ?>

@endsection