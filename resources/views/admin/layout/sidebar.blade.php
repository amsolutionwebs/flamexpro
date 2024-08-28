
<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="{{url('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-bold text-dark">ADMIN PANEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="image">


            <img src="/admin/upload/profile_images/5.jpg" style="width:40px;height: 40px; border-radius:50%; border:2px solid #fff;" />
     
        
        </div>


        <div class="info">
          <a href="{{url('/admin/dashboard')}}" class="d-block" style="text-transform: capitalize;">
            Aman Kumar
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          

          <li class="nav-item menu-open" style="background-color: #dee2e6;">
            <a href="{{url('/admin/dashboard')}}" class="nav-link {{ in_array(request()->path(), ['admin/dashboard']) ? 'active' : '' }}" >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a>
          </li>
        
  
          <li class="nav-header">SETTINGS SECTION</li>


         
  <li class="nav-item">
    <a href="{{ url('/admin/product_category') }}" class="nav-link {{ Str::startsWith(request()->path(), ['admin/product_category', 'admin/add_product_category', 'admin/update_pages']) ? 'active' : '' }}">
        <i class="nav-icon fa fa-paper-plane"></i>
        <p>
            Product Category
        </p>
    </a>
</li>

  <li class="nav-item">
    <a href="{{ url('/admin/products') }}" class="nav-link {{ Str::startsWith(request()->path(), ['admin/products', 'admin/products', 'admin/update_pages']) ? 'active' : '' }}">
        <i class="nav-icon fa fa-paper-plane"></i>
        <p>
            Products
        </p>
    </a>
</li>
          
        

          <li class="nav-item">
    <a href="{{ url('/admin/pages') }}" class="nav-link {{ Str::startsWith(request()->path(), ['admin/pages', 'admin/add_pages', 'admin/update_pages']) ? 'active' : '' }}">
        <i class="nav-icon fa fa-paper-plane"></i>
        <p>
            Pages
        </p>
    </a>
</li>



           <li class="nav-item">
            <a href="{{url('/admin/post_list')}}" class="nav-link {{ Str::startsWith(request()->path(), ['admin/post_list', 'admin/add_posts']) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Post
              
              </p>
            </a>
            
          </li>



          <li class="nav-item">
            <a href="{{url('/admin/banner')}}" class="nav-link {{ Str::startsWith(request()->path(), ['admin/banner', 'admin/add_banner', 'update_banners']) ? 'active' : '' }}">
              <i class="nav-icon fa fa-picture-o"></i>
              <p>
                Banner
               
              </p>
            </a>
            
          </li>


          

            <!--  -->
     <li class="nav-item">
            <a href="{{url('/admin/testimonials')}}" class="nav-link {{ Str::startsWith(request()->path(), ['admin/testimonials', 'admin/add_tesitmonials']) ? 'active' : '' }}">
              <i class="nav-icon fa fa-address-card"></i>
              <p>
                Testimonials
              
              </p>
            </a>
           
  </li>
<!--  -->

  <!--  -->
  <li class="nav-item">
            <a href="{{url('/admin/contact_list')}}" class="nav-link {{ Str::startsWith(request()->path(), ['admin/contact_list', 'admin/add_contact']) ? 'active' : '' }}">
              <i class="nav-icon fas fa-solid fa-bell"></i>
              <p>
               Contact List
              </p>
            </a>            
</li>

<li class="nav-item">
            <a href="{{url('/admin/getquate_list')}}" class="nav-link {{ Str::startsWith(request()->path(), ['admin/getquate_list', 'admin/add_quate']) ? 'active' : '' }}">
              <i class="nav-icon fa fa-podcast"></i>
              <p>
               Get Quate
              </p>
            </a>            
</li>

          <li class="nav-item">
            <a href="{{url('/admin/subscriber')}}" class="nav-link {{ Str::startsWith(request()->path(), ['admin/subscriber', 'admin/add_subscriber', 'admin/subscriber/edit']) ? 'active' : '' }}">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
               Subscriber
              </p>
            </a>            
          </li>


          <li class="nav-item">
            <a href="logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
            
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>