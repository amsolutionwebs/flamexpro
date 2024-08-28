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
            <h1 class="m-0 font-weight-bold text-dark">Inventory Details</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Inventory Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 col-12">
							<div class="small-box bg-secondary">
								<div class="inner">
									<h3>5</h3>
									<p>Categories</p>
								</div>
								<div class="icon"> <i><img src="dist/img/attendence.png" width="40%"></i> </div> <a href="/admin/category" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="small-box bg-success">
								<div class="inner">
									<h3>6</h3>
									<p>Sub Categories</p>
								</div>
								<div class="icon"> <i><img src="dist/img/attendence.png" width="40%"></i> </div> <a href="/admin/sub_category" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="small-box bg-warning">
								<div class="inner">
									<h3>3</h3>
									<p>Brand</p>
								</div>
								<div class="icon"> <i><img src="dist/img/attendence.png" width="40%"></i> </div> <a href="/admin/brands" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="small-box bg-warning">
								<div class="inner">
									<h3> 0</h3>
									<p>Model Number</p>
								</div>
								<div class="icon"> <i><img src="dist/img/attendence.png" width="40%"></i> </div> <a href="/admin/modelnumber" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="small-box bg-warning">
								<div class="inner">
									<h3>0</h3>
									<p>Variation</p>
								</div>
								<div class="icon"> <i><img src="dist/img/attendence.png" width="40%"></i> </div> <a href="/admin/variation" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="small-box bg-danger">
								<div class="inner">
									<h3>0</h3>
									<p>Sub Variation Type</p>
								</div>
								<div class="icon"> <i><img src="dist/img/attendance_list.png" width="40%"></i> </div> <a href="/admin/sub_variation" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="small-box" style="background-color:rgb(161, 98, 7);">
								<div class="inner">
									<h3>0</h3>
									<p>Variation Type </p>
								</div>
								<div class="icon"> <i><img src="dist/img/attendance_list.png" width="40%"></i> </div> <a href="/admin/variation_type" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="small-box bg-info">
								<div class="inner">
									<h3>0</h3>
									<p>Products</p>
								</div>
								<div class="icon"> <i><img src="dist/img/staff_attendance.png" width="30%"></i> </div> <a href="/admin/products" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="small-box bg-danger">
								<div class="inner">
									<h3>0</h3>
									<p>Products Variation</p>
								</div>
								<div class="icon"> <i><img src="dist/img/staff_salary.png" width="55%"></i> </div> <a href="/admin/products" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
						</div>
					</div>
				</div>
			</section>
    <!-- /.content -->
  
  </div>

@endsection