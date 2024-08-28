@extends('app.main')
@section('title')
Product of The Flamexpro
@endsection
@section('main')

    <section>
        <div class="gap black-layer opc5 overlap144">
            <div class="fixed-bg2" style="background-image: url('{{ asset('assets/images/pg-tp-bg.jpg') }}');"></div>
            <div class="container">
                <div class="pg-tp-wrp">
                    <h1 itemprop="headline">Fire Alarm Sysytem</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                        <li class="breadcrumb-item active">{{$fireAlarmSystem->post_title}}</li>
                    </ol>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>


        <!-- Department Section -->
    <section class="hm2-department-section" style="background-image: url('{{ asset('assets/images/background/1.png') }}');">
        <div class="auto-container">
            <!-- hm2 Sec Title -->
            <div class="hm2-sec-title centered">
                <div class="icon"><img src="{{ asset('/assets/images/icons/title-icon.png') }}" alt="" />
</div>
                <h2>Fire Alarm System</h2>
                <div class="text">A fire alarm system is a critical component of fire protection in buildings and structures. Its primary function is to detect the presence of a fire, smoke, or other signs of a potential fire and to alert occupants and emergency response personnel promptly. Here's an overview of a typical fire alarm system:
</div>
            </div>
            <div class="row clearfix">
                
               @foreach($details as $detail)
    <!-- Department Block -->
    <div class="hm2-department-block col-lg-4 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image-outer">
                <div class="image">
                    <a href="{{ url('/product/'. $detail->post_title_seo_url) }}">
                        @if (isset($detail->post_image))
                            <img src="{{ url('admin/upload/post-images/'.$detail->post_image) }}" alt="" style="height: 250px;" />
                        @else
                            <img id="output_banner" src ="{{ asset('admin/dist/img/No-Image-Basic.png') }}" height="100"/>
                        @endif
                    </a>
                </div>
                <a href="#" class="arrow flaticon-angle-arrow-pointing-to-right"></a>
            </div>
            <div class="lower-content">
                <h3><a href="{{ url('/product/'. $detail->post_title_seo_url) }}">{{ Str::limit($detail->post_title, 50) }}</a></h3>
            </div>
        </div>
    </div>
@endforeach


                
            </div>
        </div>
    </section>
    <!-- End Department Section -->
    
    <!-- Safety Section -->
  
    <!-- End Safety Section -->
    
    
    
    <section class="hm2-newsletter-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    
                    <!-- Title Column -->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="icon"><img src="{{ asset('assets/images/icons/message-icon.png')}}" alt=""></div>
                            <h4>Weekly dose of inspiration delivered straight to your  inbox. </h4>
                        </div>
                    </div>
                    
                    <!-- Newsletter Column -->
                    <div class="newsletter-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            
                            <!--Subscribe Form-->
                            <div class="hm2-subscribe-form">
                                <form method="post" action="/contact/subscriber">
    @csrf
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