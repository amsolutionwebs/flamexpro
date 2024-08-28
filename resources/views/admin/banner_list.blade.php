@extends('admin.layout.master')
@section('title')
All Banner
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
                      <a href="{{ route('banner.create') }}"><i class="fas fa-plus" style="font-size: 30px; color:#fff;"></i></a>
                    </div>
                  </div>
                  <div class="col-11">
                  
                    <h5>All Banners</h5>
                    <span>{{ $quantity }}</span>
                  </div>
                 
                </div>
               
                 
               </div>
               
                <table id="example2" class="table table-bordered">
                  
                  <thead>
                    <tr>
                    <th>S.N</th>
                    <th>Images</th>
                    <th>Banners Title</th>
                    <th>Sort Order</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     
                     @foreach( $banners as $banners)
                      <tr>
                       <td>{{ $loop->index+1 }}</td>
                       <td>
                   @if(isset($banners->banner_image))
    <img src="/admin/upload/banner-images/{{ $banners->banner_image }}" title="banner_title" width="50px" height="50">
@else
    <img src="/admin/dist/img/No-Image-Basic.png" title="No Image" width="50px" height="50">
@endif

                      </td>
                      <td>{{ $banners->banner_title }}</td>
                       <td>{{ $banners->sort_order }}</td>
                        <td>{{ $banners->banner_status }}</td>
                      
                   
                      <td>
                          <a href="{{ route('banner.edit',$banners->id) }}" title='Update'><button class='btn btn-xs btn-warning mr-2 p-1'><i class='fas fa-edit' ></i> </button></a>
                              
          <form method="POST" action="{{ route('banner.destroy',$banners->id) }}" class="d-inline">
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