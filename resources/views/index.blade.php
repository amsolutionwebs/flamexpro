@extends('app.main')
@section('title')
The Flamexpro 
@endsection
@section('main')

    <!-- Banner Section -->
    <section class="hm2-banner-section" style="background-image: url(assets/images/main-slider/content-image-1.png)">
        <div class="auto-container">
            <div class="clearfix">
                <!-- Content Column -->
                <div class="content-column">
                    <div class="inner-column">
                        <h1>Commissioning and Operation Safety Training</h1>
                        <div class="text">
Fire Tender Repairing Services
</div>
                        <a href="#" class="request">Request A Free Quote</a>
                        
                    </div>
                </div>
                <!-- Image Column -->
                <div class="image-column" style="background-image: url(assets/images/product/fire_suppression_system.jpg);background-size: contain;">
                    <div class="phone-box">
                        <div class="box-inner">
                            <span class="icon fa fa-phone"></span>
                            Contact With Us
                            <strong>+918431623434</strong>
                        </div>
                    </div>
                    <div class="image">
                        <img src="assets/images/main-slider/image-1.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->
    
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
                                <a href="{{ url('/product/'. $products->post_title_seo_url) }}">
                                    @if (isset($products->post_image))
                                    <img src="{{ url('admin/upload/post-images/'.$products->post_image) }}" alt="" style="height: 250px;" />
                                        @else
                                 <img id="output_banner" src ="{{ asset('admin/dist/img/No-Image-Basic.png') }}" height="100"/>
@endif
</a>
                            </div>
                            <a href="#" class="arrow flaticon-angle-arrow-pointing-to-right"></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ url('/product/'. $products->post_title_seo_url) }}">{{ Str::limit($products->post_title, 50) }}
</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Department Block -->
             
                
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
                
                <a href="about.php" class="theme-btn hm2-btn-style-one"><span class="txt">Know More</span></a>
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
    
    <!-- Property Section -->
    <section class="hm2-property-section" style="background-image: url(assets/images/background/2.jpg)">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Title Box -->
                        <div class="title-box">
                            
                            <h2>Why Choose Us</h2>
                            <div class="text">Quality Assurance: At <b>[Flamexpro]</b>, quality is non-negotiable. Our products undergo rigorous testing to ensure they not only meet but exceed industry standards. Rest assured, your safety is our top priority.
                                <br><br>
Innovation and Technology: We stay at the forefront of technological advancements to provide you with state-of-the-art fire and safety solutions. Our commitment to innovation ensures that you are equipped with the latest tools to safeguard your premises.<br><br>
Reliable Service: Beyond manufacturing and supplying, we offer comprehensive service and maintenance packages. Our team of skilled technicians is dedicated to ensuring that your equipment remains in optimal condition, ready to respond when needed.<br><br>
Customer-Centric Approach: We believe in building lasting relationships with our clients. Our customer-centric approach means that your satisfaction is at the core of everything we do. From product selection to after-sales support, we are with you every step of the way</div>
                            <a href="about.php" class="theme-btn hm2-btn-style-one"><span class="txt">About Us</span></a>
                        </div>
                    </div>
                </div>
                <!-- Counter Column -->
            
            </div>
            
        </div>
    </section>
    <!-- End Property Section -->
    
    <!-- Operation Section -->

    <!-- End Operation Section -->
    
    <!-- Help Section -->
    <section class="hm2-help-section" style="background-image: url(assets/images/background/3.jpg)">
        <div class="auto-container">
            <div class="side-image">
                <img src="assets/images/resource/helper.png" alt="" />
            </div>
            <div class="row clearfix">
                
                <!-- Help Column -->
                <div class="help-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title">Fire Department</div>
                        <h2>Help Desk</h2>
                        <div class="phone">+918431623434<span>8 a.m. – 4:30 p.m. Eastern time</span></div>

                        <div class="phone">Address<span>218/190, 1st Sector, HSR Layout, Bengaluru, Karnataka 560102</span></div>


                        <a href="#" class="email">info@flamexpro.com</a>
                        <a href="#" class="question">Ask a question online</a>
                    </div>
                </div>
                
                <!-- Content Column -->
            
                
            </div>
        </div>
    </section>
    <!-- End Help Section -->
    
    
    
    <!-- hm2 Project Section -->
   
    <!-- End hm2 Project Section -->
    
    <!-- Testimonial Section -->
    <section class="hm2-testimonial-section" style="background-image:url(assets/images/background/5.jpg)">
        <div class="left-color-layer"></div>
        <div class="right-color-layer"></div>
        <div class="bottom-white-color-layer"></div>
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Title Column -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Title Box -->
                        <div class="title-box">
                            <div class="title">4.2 rating out of 159 reviews</div>
                            <h2>Professional Fire Safety Solutions</h2>
                            <div class="text">Rapid Response Team: In the unfortunate event of a fire emergency, our rapid response team is always on standby. </div>
                            <a href="#" class="theme-btn review-btn">Read More Review</a>
                        </div>
                    </div>
                </div>
                
                <!-- Carousel Column -->
                <div class="carousel-column col-lg-6 col-md-12">
                    <div class="inner-column">
                        <div class="hm2-testimonial-carousel owl-carousel owl-theme">
                        
                            <!-- Slide -->
                            <div class="slide">
                                
                                <!-- Testimonial Block -->
                                <div class="em2-testimonial-block">
                                    <div class="inner-box">
                                        <div class="text">
                                            <div class="quote-icon-left flaticon-left-quotes-sign"></div>
                                            Don't compromise on safety. Choose FLAMEXPRO for professional fire safety solutions that provide total peace of mind. Contact us today to discuss your requirements, and let us be your trusted partner in safeguarding what matters most.
                                            <div class="quote-icon-right flaticon-right-quotes-symbol"></div>
                                        </div>
                                        <div class="info-box">
                                            <div class="box-inner">
                                                <div class="author-image">
                                                    <img src="assets/images/resource/author-1.jpg" alt="" />
                                                </div>
                                                <h4>Kevin Martin</h4>
                                                <div class="designation">Our Citizen - USA</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Testimonial Block -->
                                <div class="em2-testimonial-block style-two">
                                    <div class="inner-box">
                                        <div class="text">
                                            <div class="quote-icon-left flaticon-left-quotes-sign"></div>
                                        
At FLAMEXPRO, we prioritize the safety and reliability of your systems from the very beginning. Our approach is grounded in a meticulous inspection process that ensures every aspect is thoroughly evaluated before moving on to the installation phase. This commitment sets the foundation for a seamless and secure implementation of your solutions.

                                            <div class="quote-icon-right flaticon-right-quotes-symbol"></div>
                                            </div>
                                        <div class="info-box">
                                            <div class="box-inner">
                                                <div class="author-image">
                                                    <img src="assets/images/resource/author-2.jpg" alt="" />
                                                </div>
                                                <h4>Pat Aussem, L.P.C</h4>
                                                <div class="designation">Our Citizen - USA</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- End Slide -->
                            
                            <!-- Slide -->
                            <div class="slide">
                                
                                <!-- Testimonial Block -->
                                <div class="em2-testimonial-block">
                                    <div class="inner-box">
                                        <div class="text">
                                            <div class="quote-icon-left flaticon-left-quotes-sign"></div>
                                        FLAMEXPRO for a holistic approach that puts inspection at the forefront, ensuring the success and longevity of your installations. Contact us today to discuss your project and experience the difference our commitment to excellence makes.
                                            <div class="quote-icon-right flaticon-right-quotes-symbol"></div>
                                        </div>
                                        <div class="info-box">
                                            <div class="box-inner">
                                                <div class="author-image">
                                                    <img src="assets/images/resource/author-1.jpg" alt="" />
                                                </div>
                                                <h4>Kevin Martin</h4>
                                                <div class="designation">Our Citizen - USA</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Testimonial Block -->
                                <div class="em2-testimonial-block style-two">
                                    <div class="inner-box">
                                        <div class="text">
                                            <div class="quote-icon-left flaticon-left-quotes-sign"></div>
                                            Protecting yourself and your surroundings from potential disasters begins with the ability to extinguish small fires before they escalate. At FLAMEXPRO, we emphasize the importance of quick and effective fire response to ensure the safety of lives and properties.
                                            <div class="quote-icon-right flaticon-right-quotes-symbol"></div>
                                            </div>
                                        <div class="info-box">
                                            <div class="box-inner">
                                                <div class="author-image">
                                                    <img src="assets/images/resource/author-2.jpg" alt="" />
                                                </div>
                                                <h4>Pat Aussem, L.P.C</h4>
                                                <div class="designation">Our Citizen - USA</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- End Slide -->
                            
                            <!-- Slide -->
                            <div class="slide">
                                
                                <!-- Testimonial Block -->
                                <div class="em2-testimonial-block">
                                    <div class="inner-box">
                                        <div class="text">
                                            <div class="quote-icon-left flaticon-left-quotes-sign"></div>
                                            I’ve heard from countless young they got into recovery was becau with a parent who fought for them out how to help themselves
                                            <div class="quote-icon-right flaticon-right-quotes-symbol"></div>
                                        </div>
                                        <div class="info-box">
                                            <div class="box-inner">
                                                <div class="author-image">
                                                    <img src="assets/images/resource/author-1.jpg" alt="" />
                                                </div>
                                                <h4>Kevin Martin</h4>
                                                <div class="designation">Our Citizen - USA</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Testimonial Block -->
                                <div class="em2-testimonial-block style-two">
                                    <div class="inner-box">
                                        <div class="text">
                                            <div class="quote-icon-left flaticon-left-quotes-sign"></div>
                                            I’ve heard from countless young they got into recovery was becau with a parent who fought for them out how to help themselves
                                            <div class="quote-icon-right flaticon-right-quotes-symbol"></div>
                                            </div>
                                        <div class="info-box">
                                            <div class="box-inner">
                                                <div class="author-image">
                                                    <img src="assets/images/resource/author-2.jpg" alt="" />
                                                </div>
                                                <h4>Pat Aussem, L.P.C</h4>
                                                <div class="designation">Our Citizen - USA</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- End Slide -->
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->
    
    <!-- hm2 News Section -->
    <section class="hm2-news-section">
        <div class="auto-container">
            <!-- hm2 Sec Title -->
            <div class="hm2-sec-title centered">
                <div class="icon"><img src="assets/images/icons/title-icon.png" alt="" /></div>
                <h2>Our Articles</h2>
                <div class="text">Natural disasters and non-fire emergencies</div>
            </div>
            <div class="row clearfix">
                
                 @foreach($blogs_rendom as $blogs_rendom)
                <!-- hm2 News Block -->
                <div class="hm2-news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="post-date">
                            <span>{{ $blogs_rendom->created_at->format('F') }}
</span>{{ $blogs_rendom->created_at->format('j') }}

                        </div>
                        <h4><a href="{{ url('/blog/'. $blogs_rendom->post_title_seo_url) }}">{{ Str::limit($blogs_rendom->post_title, 50) }}</a></h4>
                        
                        <ul class="post-meta">
                          
                        </ul>
                    </div>
                </div>
                @endforeach
                <!-- hm2 News Block -->
              
                
            </div>
            
            <div class="lower-text">Our stories from around the world. <a href="/blog">Explore more</a> news & updates.</div>
            
        </div>
    </section>
    <!-- End hm2 News Section -->
    
    <!-- hm2 Newsletter Section -->
    <section class="hm2-newsletter-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    
                    <!-- Title Column -->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="icon"><img src="assets/images/icons/message-icon.png" alt="" /></div>
                            <h4>Weekly dose of inspiration delivered straight to your  inbox. </h4>
                        </div>
                    </div>
                    
                    <!-- Newsletter Column -->
                    <div class="newsletter-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            
                            <!--Subscribe Form-->
                            <div class="hm2-subscribe-form">
                                <form method="post" action="https://nauthemes.net/html/blaz/contact.html">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Enter Your Email Address...." required>
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
    <!-- End hm2 Newsletter Section -->
    
@endsection