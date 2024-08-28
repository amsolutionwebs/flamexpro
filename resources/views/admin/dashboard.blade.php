@extends('admin.layout.master')
@section('title')
Dashboard
@endsection
@section('master-section')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 font-weight-bold text-dark">Dashboard</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

           
          <!--  -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>20</h3>

                <p>TOTAL PAGES</p>
              </div>
              <div class="icon">
                <i><img src="{{url('admin/dist/img/attendence.png')}}" width="40%"></i>
              </div>
              <a href="admin_list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         
       
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>20</h3>

                <p>TOTAL BANNERS</p>
              </div>
              <div class="icon">
                <i><img src="{{url('admin/dist/img/insurance.png')}}" width="30%"></i>
              </div>
              <a href="store_list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>20</h3>

                <p>TOTAL CONTACT</p>
              </div>
              <div class="icon">
                <i><img src="{{url('admin/dist/img/attendence.png')}}" width="35%"></i>
              </div>
              <a href="user_type_list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


           <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>20</h3>

                <p>TOTAL SUBSCRIBER</p>
              </div>
              <div class="icon">
                <i><img src="{{url('admin/dist/img/enquiry_list.png')}}" width="60%"></i>
              </div>
              <a href="employee_list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        
          <!-- ./col -->
      
        <!-- second -->        
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  </div>

@endsection