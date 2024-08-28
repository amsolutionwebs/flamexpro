<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Flamexpro - @yield('title')</title>
<!-- Stylesheets -->
<link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{url('assets/headers/header-02.css')}}" rel="stylesheet">
<link href="{{url('assets/footers/footer-02.css')}}" rel="stylesheet">
<link href="{{url('assets/css/style.css')}}" rel="stylesheet">
<link href="{{url('assets/css/responsive.css')}}" rel="stylesheet">
<link href="{{url('assets/css/blog.css')}}" rel="stylesheet">



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<style type="text/css">
	body{
		font-family:  "Libre Franklin", sans-serif !important;
	}

	.form-section .icons-form {
    position: absolute;
    left: 35px;
    top: 22px;
    color: var(--e-global-color-accent);
}

@media screen and (max-width: 1199px) {
    .form-section .icons-form {
        left: 33px;
        top: 18px;
    }
}

@import url('https://fonts.googleapis.com/css?family=Yantramanav:100,300');



.company-info h3,
.company-info ul {
  text-align: center;
  margin: 0 0 1rem 0;
}

/* ------- */
/* CONTACT */
/* ------- */

.contact {
  background: #dcdfea;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
}

/* ---- */
/* FORM */
/* ---- */

.contact form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}

.contact form label {
  display: block;
}

.contact form p {
  margin: 0;
}

.contact form .full {
  grid-column: 1 / 3;
}

.contact form button,
.contact form input,
.contact form textarea {
  width: 100%;
  padding: 1em;
  border: solid 1px #627EDC;
  border-radius: 4px;
}

.contact form textarea {
  resize: none;
}

.contact form button {
  background: #627EDC;
  border: 0;
  color: #e4e4e4;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: bold;
}

.contact form button:hover,
.contact form button:focus {
  background: #3952a3;
  color: #ffffff;
  outline: 0;
  transition: background-color 2s ease-out;
}

/* ------------- */
/* MEDIA QUERIES */
/* ------------- */

@media only screen and (min-width: 700px) {
  .wrapper {
    display: grid;
    grid-template-columns: 1fr 2fr;
  }

  .wrapper > * {
    padding: 2em;
  }

  .company-info {
    border-radius: 4px 0 0 4px;
  }

  .contact {
    border-radius: 0 4px 4px 0;
  }

  .company-info h3,
  .company-info ul,
  .brand {
    text-align: left;
  }
}
</style>
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="hm2-preloader"></div>
 	
 	<!-- Hm2 Header Style Two -->
    <header class="hm2-header-style-two">
    	
		<!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
					<!-- Top Left -->
					<div class="top-left clearfix">
						<!-- Info List -->
						<ul class="info-list">
							<li><a href="/contact">Helpline</a></li>
							<li><a href="/blog">News</a></li>
												</ul>
						
						<!-- Mail Box -->
						<div class="mailbox">
							<a href="#"><span class="icon flaticon-email"></span>Info@flamexpro.com</a>
						</div>
						<!-- End Mail Box -->
						
					</div>
					
					<!-- Top Right -->
                    <div class="top-right pull-right clearfix d-flex justify-content-center text-center">
						<!-- Social Box -->
						<ul class="social-box">
							<span class="follow">Follow Me:</span>
							<li><a href="#" class="fa fa-facebook-f"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-youtube"></a></li>
						</ul>
						
					
						
                    </div>
					
                </div>
            </div>
        </div>
		
		<!-- Header Upper -->
        <div class="header-upper">
        	<div class="container-fluid clearfix px-4">
            	
				<div class="pull-left logo-box">
					<div class="logo" ><a href="{{ route('home') }}"><img src="{{url('assets/images/logo.png')}}" alt="" title="" width="80"></a></div>
				</div>
				
				<div class="nav-outer clearfix">
					
					<!-- Main Menu -->
					<nav class="main-menu navbar-expand-md">
						<div class="navbar-header">
							<!-- Toggle Button -->    	
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
							<ul class="navigation clearfix">
								<li class="{{ Request::is('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a>
								</li>

								<li class="dropdown {{ Request::is('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About</a>
									<ul>
											<li class="dropdown {{ Request::is('service') ? 'current' : '' }}"><a href="{{ route('service') }}">Our Working Process</a>
									<ul>
										<li><a href="/service/fire-safety-training">Fire Extinguisher Refilling work Process</a></li>
										<li><a href="/service/safety-audit-services">Fire Hydrant work process</a></li>
											<li><a href="/service/safety-audit-services">Fire sprinkler installation work process</a></li>
												<li><a href="/service/safety-audit-services">Fire suppression system work process</a></li>

										<li class="{{ Request::is('service') ? 'current' : '' }}"><a href="{{ route('service') }}">Other Services</a></li>
										
									</ul>
								</li>
										<li><a href="{{ route('about') }}">About Us</a></li>
										<li><a href="{{ route('our-expertise') }}">Our Expertise</a></li>
										<li><a href="{{ route('why-choose-us') }}">Why Choose Us</a></li>
									<li><a href="{{ route('get-in-touch') }}">Get in Touch</a></li>

										
										
										
									</ul>

								</li>
								<li class="dropdown {{ Request::is('service') ? 'current' : '' }}"><a href="javascript:void(0)">Services</a>
									<ul>
										
										<li><a href="/service/fire-safety-training">Fire Extinguishers Refilling Services</a></li>
										<li><a href="/service/safety-audit-services">Fire Hydrant System Repairing and maintenance</a></li>
										<li class="{{ Request::is('service') ? 'current' : '' }}"><a href="{{ route('service') }}">Fire Tender Repairing Services</a></li>
										<li class="{{ Request::is('service') ? 'current' : '' }}"><a href="{{ route('service') }}">Fire Pump Repairing & Servicing</a></li>
										<li class="{{ Request::is('service') ? 'current' : '' }}"><a href="{{ route('service') }}">Fire Tender on Hire</a></li>
										<li class="{{ Request::is('service') ? 'current' : '' }}"><a href="{{ route('service') }}">HSE Legal compliance </a></li>

											<li class="{{ Request::is('service') ? 'current' : '' }}"><a href="{{ route('service') }}">All Services</a></li>
									
										
									</ul>
								</li>

									<li class=" dropdown {{ Request::is('training') ? 'current' : '' }}"><a href="javascript:void(0)">Training</a>

												<ul>
										<li><a href="/training/fire-safety-training">EHS Training</a></li>
										<li><a href="/training/safety-audit-services">Fire Safety Training</a></li>
										<li class="{{ Request::is('service') ? 'current' : '' }}"><a href="/training/safety-audit-services">Safety Audit services</a></li>
										<li class="{{ Request::is('service') ? 'current' : '' }}"><a href="/training/safety-audit-services">HAZOP Training</a></li>
										<li class="{{ Request::is('service') ? 'current' : '' }}"><a href="/training/safety-audit-services">Commissioning and Operation Safety Training</a></li>
										<li class="{{ Request::is('service') ? 'current' : '' }}"><a href="/training/safety-audit-services">Fire Prevention Training</a></li>
										<li class="{{ Request::is('service') ? 'current' : '' }}"><a href="/training/safety-audit-services">Fire Service Management Training</a></li>

										<li class="{{ Request::is('service') ? 'current' : '' }}"><a href="/training/safety-audit-services">Fire Audit and compliance Training</a></li>

										<li class="{{ Request::is('service') ? 'current' : '' }}"><a href="/training/safety-audit-services">Practical Fire Fighting and Demo training</a></li>

										<li class="{{ Request::is('training') ? 'current' : '' }}"><a href="{{ route('training') }}">All Training</a>


										</li>
										
									</ul>

										</li>

								


								<li class="dropdown {{ Request::is('product') ? 'current' : '' }}"><a href="{{ route('product') }}">Products</a>
									<ul>
										
										@foreach($ProductCategories as $ProductCategories)
										<li><a href="{{ url('/product-category/' . $ProductCategories->category_seo_url) }}">{{$ProductCategories->category_title}}</a></li>
										@endforeach
										
										
											<li><a href="{{ route('product') }}">All Products</a></li>
									</ul>
								</li>

								<li class="dropdown {{ Request::is('product') ? 'current' : '' }}"><a href="{{ route('product') }}">Fire Alarm system</a>
									<ul>
										
									
										<li><a href="/fire-alarm-system/conventional-fire-alarm-systems">Conventional Fire Alarm Systems</a></li>
										<li><a href="/fire-alarm-system/addressable-fire-alarm-systems">Addressable Fire Alarm Systems</a></li>
										<li><a href="/fire-alarm-system/analog-addressable-systems">Analog Addressable Systems</a></li>

									</ul>
								</li>

							
								<li class="{{ Request::is('blog','blog-details') ? 'current' : '' }}"><a href="{{ route('blog') }}">Blog</a></li>
								<li class="{{ Request::is('gallery') ? 'current' : '' }}"><a href="{{ route('gallery') }}">Gallery</a></li>
								<li class="{{ Request::is('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
								
							</ul>
						</div>
					</nav>
					
					<!--Mobile Navigation Toggler-->
					<div class="mobile-nav-toggler" ><span class="icon flaticon-menu"></span></div>
					
				</div>
				
            </div>
        </div>
        <!-- End Header Upper -->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="container-fluid clearfix px-4">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{ route('home') }}" title=""><img src="{{url('assets/images/logo-small.png')}}" alt="" title="" width="80"></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
				
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
					<!-- Main Menu End-->
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="hm2-mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{url('assets/images/logo-small.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->