@extends('app.main')
@section('title')
Flamexpro - Our Blog
@endsection
@section('main')


	<section>
		<div class="gap black-layer opc5 overlap144">
			<div class="fixed-bg2" style="background-image: url(assets/images/pg-tp-bg.jpg);"></div>
			<div class="container">
				<div class="pg-tp-wrp">
					<h1 itemprop="headline">Blog</h1>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
						<li class="breadcrumb-item active">Blog</li>
					</ol>
				</div><!-- Page Top Wrap -->
			</div>
		</div>
	</section>
	
	<!-- Operation Section -->
    <section class="hm2-operation-section">
		<div class="auto-container">
			<!-- hm2 Sec Title -->
			<div class="hm2-sec-title centered">
				<div class="icon"><img src="assets/images/icons/title-icon.png" alt="" /></div>
				<h2>Our blog pages with passion and purpose Fire Operations</h2>
				<div class="text">For in the world of blogging, every keystroke is a stroke of creativity,</div>
			</div>
            <div class="row clearfix">
				
				<!-- Operate Block -->

				@foreach ($blog as $blog)
				<div class="hm2-operate-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="/blog/{{ $blog->post_title_seo_url }}">
								 @if (isset($blog->post_image))
								 <img src="{{ asset('admin/upload/post-images/' .$blog->post_image)}}" alt="" />
								@else
								 <img id="output_banner" src ="{{ asset('admin/dist/img/No-Image-Basic.png') }}" height="100"/>
@endif

							</a>
						</div>
						<div class="lower-content">
							<div class="post-date">{{ $blog->created_at }}</div>
							<h4><a href="/blog/{{ $blog->post_title_seo_url }}">{{ $blog->post_title }}</a></h4>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
			
			
			<div class="lower-text">Emergency causes from around the world. <a href="#">Explore More</a> opreations.</div>
			
		</div>
	</section>
	<!-- End Operation Section -->
	
	
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
                                <form method="post" action="https://nauthemes.net/html/blaz/contact.html">
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