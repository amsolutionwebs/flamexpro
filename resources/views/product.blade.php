@extends('app.main')
@section('title')
Product of The Flamexpro
@endsection
@section('main')

    <section>
        <div class="gap black-layer opc5 overlap144">
            <div class="fixed-bg2" style="background-image: url(assets/images/pg-tp-bg.jpg);"></div>
            <div class="container">
                <div class="pg-tp-wrp">
                    <h1 itemprop="headline">Our Products</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>


        <!-- Department Section -->
    <section class="hm2-department-section" style="background-image: url(assets/images/background/1.png)">
        <div class="auto-container">
            <!-- hm2 Sec Title -->
            <div class="hm2-sec-title centered">
                <div class="icon"><img src="assets/images/icons/title-icon.png" alt="" /></div>
                <h2>Our Products</h2>
                <div class="text">This can encompass various goods and services available for sale or use, including tangible products like electronics</div>
            </div>
            <div class="row clearfix">
                
                @foreach($products as $products)
                <!-- Department Block -->
                <div class="hm2-department-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-outer">
                            <div class="image">
                                <a href="{{ url('/product-category/'. $products->category_seo_url) }}">
                                    @if (isset($products->category_image))
                                    <img src="{{ url('admin/upload/post-images/'.$products->category_image) }}" alt="" style="height: 250px;" />
                                        @else
                                 <img id="output_banner" src ="{{ asset('admin/dist/img/No-Image-Basic.png') }}" height="100"/>
@endif
</a>
                            </div>
                            <a href="#" class="arrow flaticon-angle-arrow-pointing-to-right"></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ url('/product-category/'. $products->category_seo_url) }}">{{ Str::limit($products->category_title, 50) }}
</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- End Department Section -->
    
    <!-- Safety Section -->
    <section class="hm2-safety-section">
        <div class="auto-container">
            <!-- hm2 Sec Title -->
            <div class="title-box centered">
                <h3>Welcome to FLAMEXPRO Your Trusted Partner in Fire & Safety Solutions! </h3>
                
                <div class="title">At FLAMEXPRO, we are dedicated to ensuring the safety of lives and properties through the manufacturing, supply, and service of top-notch fire and safety equipment. As a leading industry player, we take pride in delivering innovative and reliable solutions that meet the highest standards of quality and compliance.</div>
                
                <a href="/about" class="theme-btn hm2-btn-style-one"><span class="txt">Know More</span></a>
            </div>
        </div>
        <div class="lower-section">
            <div class="clearfix">
            
                <!-- Safety Block -->
                <div class="hm2-safety-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="assets/photos/fire-extinguisher-refilling-services.jpg" alt="" />
                        
                            <div class="overlay-box">
                                <div class="icon flaticon-alarm"></div>
                                <h3><a href="#">Fire Extinguishers Refilling Services</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Safety Block -->
                <div class="hm2-safety-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="assets/photos/fire-hydrant-system.jpg" alt="" />
                            
                            <div class="overlay-box">
                                <div class="icon flaticon-fire-extinguisher"></div>
                                <h3><a href="#">Fire Hydrant System Repairing and maintenance
</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Safety Block -->
                <div class="hm2-safety-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="assets/photos/fire-truck-repair-service.jpg" alt="" />
                        
                            <div class="overlay-box">
                                <div class="icon flaticon-flame"></div>
                                <h3><a href="#">Fire Tender Repairing Services</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Safety Block -->
                <div class="hm2-safety-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="assets/photos/fire-pump-service-2.jpg" alt="" />
                            
                            <div class="overlay-box">
                                <div class="icon flaticon-fire-truck"></div>
                                <h3><a href="#">Fire Pump Repairing & Servicing</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Safety Block -->
                <div class="hm2-safety-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="assets/photos/fire-tender-hire.jpg" alt="" />
                                                        <div class="overlay-box">
                                <div class="icon flaticon-firefighters"></div>
                                <h3><a href="#">Fire Tender on Hire</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Safety Section -->
    
  
    
    <section class="hm2-newsletter-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    
                    <!-- Title Column -->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="icon"><img src="assets/images/icons/message-icon.png" alt=""></div>
                            <h4>Weekly dose of inspiration delivered straight to your  inbox. </h4>
                        </div>
                    </div>
                    
                    <!-- Newsletter Column -->
                    <div class="newsletter-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            
                            <!--Subscribe Form-->
                            <div class="hm2-subscribe-form">
                                <form method="post" action="">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Enter Your Email Address...." required="">
                                        <button type="submit" class="theme-btn submit-btn">Subscribe Now</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

@endsection