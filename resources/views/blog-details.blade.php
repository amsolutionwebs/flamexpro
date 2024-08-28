@extends('app.main')
@section('title')
The Flamexpro - Blog 
@endsection
@section('main')


	<section class="mb-30">
		<div class="gap black-layer opc5 overlap144">
			<div class="fixed-bg2" style="background-image: url('{{ asset('assets/images/pg-tp-bg.jpg') }}');"

></div>
			<div class="container">
				<div class="pg-tp-wrp">
					<h1 itemprop="headline">Blog</h1>
					<ol class="breadcrumb">
						
						<li class="breadcrumb-item active">{{ $blog->post_title }}</li>
					</ol>
				</div><!-- Page Top Wrap -->
			</div>
		</div>
	</section>
	
	 <!-- start blog  -->
        <!-- Post Style 3 Page Area Start Here -->
            <section style="margin-top:350px;">
                <div class="container mt-150">
                    <div class="row  mt-150">
                        <div class="col-lg-8 col-md-12">
                            <div class="position-relative mb-50-r">
                                <a class="img-opacity-hover" href="#">
                                    @if (isset($blog->post_image))
                                    <img src="{{ asset('admin/upload/post-images/' .$blog->post_image)}}" alt="news" class="img-fluid width-100 mb-30">
                                    @else

                                    <img id="output_banner" src ="{{ asset('admin/dist/img/No-Image-Basic.png') }}" height="100"/>
                                    @endif
                                </a>
                                <div class="topic-box-top-lg">
                                    <div class="topic-box-sm color-cod-gray mb-20">Blog</div>
                                </div>
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>by</span>
                                            <a href="single-news-1.html">Flamexpro</a>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>{{ $blog->created_at->format('F j, Y') }}</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark size-c26">
                                    <a href="/blgo/{{ $blog->post_title_seo_url }}">{{ $blog->post_title }}</a>
                                </h3>

                                <p style="font-size:20px;">{!! $blog->post_content !!}</p>
                                
                            </div>

                           
                        </div>
                        <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                          
                         
                            <div class="sidebar-box">
                                <div class="topic-border color-cod-gray mb-30">
                                    <div class="topic-box-lg color-cod-gray">Newsletter</div>
                                </div>
                                <div class="newsletter-area bg-primary">
                                   
                                    <img src="{{url('assets/images/icons/newsletter.webp')}}" alt="newsletter" class="img-fluid m-auto mb-15">
                                    <p>Subscribe our newsletter to stay updated</p>
                                     <form method="post" action="/contact/subscriber">
                                    <div class="input-group stylish-input-group">
                                        <input type="email" placeholder="Enter your mail" name="email" class="form-control">
                                        <span class="input-group-addon">
                                            <button type="submit">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                                </div>
                            </div>



                            <div class="sidebar-box">
                                <div class="topic-border color-cod-gray mb-30">
                                    <div class="topic-box-lg color-cod-gray">Most Reviews</div>
                                </div>

                                @foreach($blogs_rendom as $blogs_rendom)
                                <div class="position-relative mb30-list bg-body">
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">Flamexpro</div>
                                    </div>
                                    <div class="media">
                                        <a class="img-opacity-hover" href="{{ url('/blog/' . $blogs_rendom->post_title_seo_url) }}">
                                            @if (isset($blogs_rendom->post_image))
                                            <img src="{{ url('admin/upload/post-images/'.$blogs_rendom->post_image) }}" alt="news" class="img-fluid" style="width: 124px;height: 108px;object-fit: cover;">
                                            @else
                                 <img id="output_banner" src ="{{ asset('admin/dist/img/No-Image-Basic.png') }}" height="100"/>
@endif
                                        </a>
                                        <div class="media-body hm2-news-block">
                                            <div class="post-date-dark">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>{{ $blog->created_at->format('F j, Y') }}</li>
                                                </ul>
                                            </div>
                                            <h4 style="color:#000;font-size: 16px;"><a href="{{ url('/blog/'. $blogs_rendom->post_title_seo_url) }}" style="color:#000">{{ Str::limit($blogs_rendom->post_title, 50) }}

</a></h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                          

                         
                        </div>
                    </div>
                </div>
            </section>
            <!-- Post Style 3 Page Area End Here -->
          <!-- Event-Togrther-Section -->
	
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