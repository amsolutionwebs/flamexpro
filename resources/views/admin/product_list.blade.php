@extends('admin.layout.master')
@section('title')
All Products
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
                      <a href="{{ route('products.create') }}"><i class="fas fa-plus" style="font-size: 30px; color:#fff;"></i></a>
                    </div>
                  </div>
                  <div class="col-10">
                  
                    <h5>All Product</h5>
                    <span>{{ $quantity }}</span>
                  </div>

                  <div class="col-1 px-2 d-flex">
                  <a href="/admin/inventory" class="mr-2 d-flex justify-content-center align-items-center" style="background-color: tomato;border-radius: 50%; width: 40px; height: 40px; text-align: center;"> <i class="fa fa-arrow-left" style="font-size: 25px; color:#fff;"></i> </a>
                   </div>
                 
                </div>
               
                 
               </div>
               
                <table id="example1" class="table table-bordered">
                  
                  <thead>
                    <tr>
                   <th>S.N</th>
                  <th>Category</th>
                
                  <th>Product Name</th> 
                  <th>Status</th>
                  <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     
                     @foreach( $products as $products)
                      <tr>
                    <td>{{ $loop->index+1 }}</td>
                     
                      <td>{{ $products->category->category_title }}</td>
                       <td>{{ $products->product_title   }}</td>
                    
                       
                       <td>{{ $products->status }}</td>
                   
                      <td>

     



                          <a href="{{ route('products.edit', $products->id) }}" title='Update'><button class='btn btn-xs btn-warning mr-2 p-1'><i class='fas fa-edit' ></i> </button></a>
                              
          <form method="POST" action="{{ route('products.destroy', $products->id) }}" class="d-inline">
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