@extends('admin.layout.master')
@section('title')
All Quate
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
                    <div class="d-flex justify-content-center align-items-center" style="background-color: tomato;border-radius: 50%; width: 50px; height: 50px; text-align: center;">
                      <i class="fas fa-users" style="font-size: 30px; color:#fff;"></i>
                    </div>
                  </div>
                  <div class="col-11">
                  
                    <h5>All Quate</h5>
                    <span>{{ $quantity }}</span>
                  </div>
                 
                </div>
               
                 
               </div>
               
                <table id="example2" class="table table-bordered">
                  
                  <thead>
                    <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                     <th>Message</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     
                     @foreach( $getquates as $getquates)
                      <tr>
                    
                      <td>{{ $getquates->name }}</td>
                    
                        <td>{{ $getquates->email }}</td>
                       <td>{{ $getquates->phone }}</td>
                        <td>{{ $getquates->message }}</td>
                         <td>{{ $getquates->status }}</td>
                   
                      <td>
                          <a href='update_banners/{{$getquates->id}}/edit' title='Update'><button class='btn btn-xs btn-warning mr-2 p-1'><i class='fas fa-edit' ></i> </button></a>
                              
          <form method="POST" action="banners/{{ $getquates->id }}/destory" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-xs btn-danger p-1" title='Delete' onClick="return confirm('Are You Sure want to delete ?')"><i class='fas fa-trash'></i></button>
          </form>
                              
                          
                          </td>
                          </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
          </div>
          <div class="col-md-1"></div>
      </div>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   
  </div>
  <!-- /.content-wrapper -->

@endsection