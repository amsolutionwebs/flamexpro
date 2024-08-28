@extends('admin.layout.master')
@section('title')
Add New Banner
@endsection
@section('master-section')
<style>
  .student_details td {
    padding: 5px !important;
  }
  table {
    border: none !important;
  }
  .text-right {
    font-weight: bold;
    text-align: right;
    background-color: lightblue;
  }

.avatar-wrapper{
  position: relative;
  height: 200px;
  width: 200px;
  margin: 50px auto;
  border-radius: 50%;
  overflow: hidden;
  box-shadow: 1px 1px 15px -5px black;
  transition: all .3s ease;
  }

</style>


  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">


          <div class="container-fluid">


            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-md-12">
                <div class="card single_courses mt-2 px-1" style="border-top:3px solid tomato;">
                  <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h4 class="m-0"><i class="fas fa-user text-success"></i> UPDATE PROFILES HERE !</h4></div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              
              <li class="breadcrumb-item active">Update Profile</li>
            </ol>
          </div><!-- /.col -->
        </div>
      </div>
    
      <!-- /.container-fluid -->
    </div>
                  <div class="card-body">
                 <form class="update_profile" method="post" enctype="multipart/form-data" action="profile_action.php">
        <div class="row border mb-3 p-4" style="background-color: #fff !important;">
        
          <div class="col-md-12 d-flex justify-content-center">

        



            
          </div>

          <div class="col-md-12">
            
      <div class="form-group">
        <label>Choose Profile Pic </label>
        <input type="file" name="profile_image" class="form-control" onchange="loadFile(event)" /> </div>
    
      </div>


     
      <div class="col-md-6 ">
      <div class="form-group">
        <div class="custom-file">
          <label>Employee Id</label>
            <input type="text" name="employee_id" placeholder="Employee Id" class="form-control" value="" readonly />
                      
        </div>
       </div>
     </div>

       <div class="col-md-6 ">
      <div class="form-group">
        <div class="custom-file">
          <label>First Name</label>
            <input type="text" name="first_name" placeholder="First Name" class="form-control" value="" required />
                      
        </div>
       </div>
     </div>

     <div class="col-md-6 ">
       <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="last_name" placeholder="Last Name" value="" class="form-control" /> </div>
        
      </div>

   <div class="col-md-6 ">
      <div class="form-group">
        <div class="custom-file">
          <label>Email Id</label>
            <input type="email" name="email_id" placeholder="example@mail.com" value="" class="form-control" required />
                      
        </div>
    </div>
    </div>
    
    <div class="col-md-6 ">
       
       <div class="form-group">
        <label>Mobile Number</label>
        <input type="text" name="phone" placeholder="Phone Number"  value="" class="form-control" maxlength="10" minlength="10" required oninput="validateNumberInput(this)"/> </div>
        
      </div>

      <div class="col-md-6 ">
       
       <div class="form-group">
        <label>Alternate Mobile Number</label>
        <input type="text" name="alternate_phone" placeholder="Alternate Phone Number" value="" maxlength="10" minlength="10" class="form-control"  oninput="validateNumberInput(this)"/> </div>
        
      </div>

      <div class="col-md-6 ">
       
       <div class="form-group">
        <label>Whatsapp Number</label>
        <input type="text" name="whatsapp_number" placeholder="Whatsapp Number" value="" class="form-control" maxlength="10" minlength="10" oninput="validateNumberInput(this)"/> </div>
        
      </div>

       <div class="col-md-6 ">
      <div class="form-group">
        <div class="custom-file">
          <label>Age</label>
            <input type="number" name="age" placeholder="Age" value="" class="form-control" maxlength="2" minlength="2" required oninput="validateNumberInput(this)"/>
                      
        </div>
       </div>
      </div>

      <div class="col-md-12 ">
      <div class="form-group">
        <div class="custom-file">
          <label>Address</label><textarea class="form-control" name="address" cols="2"></textarea>
                      
        </div>
       </div>
      </div>

      <div class="col-md-12 ">
      <div class="form-group">
        <input type="hidden" name="user_id" value="" >
        <input type="submit" name="update_profile" class="btn form-control" style="background-color: yellowgreen;color:white;" > </div>
      </div>   
             
         
        <!-- /.row (main row) -->
      
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

