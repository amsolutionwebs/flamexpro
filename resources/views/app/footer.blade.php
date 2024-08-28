<!-- Main Footer -->
    <footer class="hm2-main-footer" style="background-image: url('{{ asset('assets/images/background/6.jpg') }}')"
>
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
					
					<!-- Footer Column -->
					<div class="footer-column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget logo-widget">
							<div class="logo">
								<a href="{{ route('home') }}"><img src="{{ asset('assets/images/footer-logo.png')}}" alt="" width="100" /></a>
							</div>
							<ul class="hm2-list-style-one">
								<li><span class="icon fa fa-phone"></span><a href="tel:+816-932-1000">+918431623434</a></li>
								<li><span class="icon fa fa-map-marker"></span>218/190, 1st Sector, HSR Layout, Bengaluru, <br> Karnataka 560102</li>
								<li><span class="icon flaticon-email"></span><a href="mailto:info@youremailid.com">info@flamexpro.com</a></li>
							</ul>
						</div>
					</div>
					
					<!-- Footer Column -->
					<div class="footer-column col-lg-5 col-md-6 col-sm-12">
						<div class="footer-widget links-widget">
							<h5>Quick Links:</h5>
							<div class="row clearfix">
								<!-- Column -->
								<div class="column col-lg-6 col-md-6 col-sm-12">
									<ul class="list-link">
										<li><a href="{{ route('about') }}">About Us</a></li>
										<li><a href="{{ route('service') }}">Fire Extinguisher </a></li>
										<li><a href="{{ route('service') }}">Fire Suppression System</a></li>
										
									
									</ul>
								</div>
								<!-- Column -->
								<div class="column col-lg-6 col-md-6 col-sm-12">
									<ul class="list-link">
										<li><a href="/contact">Contact Us</a></li>
										<li><a href="{{ route('product') }}">Fire Alarm system</a></li>
										<li><a href="{{ route('product') }}">Fire Pump Repairing & Servicing</a></li>
										<li><a href="{{ route('product') }}">Fire Tender on Hire</a></li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Footer Column -->
					<div class="footer-column col-lg-4 col-md-6 col-sm-12">
						<div class="footer-widget news-widget">
							<h5>Recent Post</h5>
							<div class="widget-content">
								@foreach($blogs_rendom as $blogs_rendom)
								<article class="post">
									<figure class="post-thumb"><a href="{{ url('/blog/'. $blogs_rendom->post_title_seo_url) }}">
										@if (isset($blogs_rendom->post_image))
										<img src="{{ url('admin/upload/post-images/'.$blogs_rendom->post_image) }}" alt="">
										 @else
                                 <img id="output_banner" src ="{{ asset('admin/dist/img/No-Image-Basic.png') }}" height="100"/>
@endif
									</a></figure>
									<div class="text"><a href="{{ url('/blog/'. $blogs_rendom->post_title_seo_url) }}">{{ Str::limit($blogs_rendom->post_title, 50) }}</a></div>
									<div class="post-info">{{ $blogs_rendom->created_at->format('F j, Y') }}</div>
								</article>
								 @endforeach
							
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="clearfix">
					<div class="pull-left">
						<div class="copyright">&copy; Copyright <script>
                    document.write(new Date().getFullYear());
                </script>-<script>
                    document.write(new Date().getFullYear()+1);
                </script> <a href="#">Flamexpro.</a> All rights reserved.</div>
					</div>
					<div class="pull-right">
						<div class="social-links">
							<a href="#" class="img-circle facebook"><span class="fa fa-facebook-f"></span></a>
							<a href="#" class="img-circle twitter"><span class="fa fa-instagram"></span></a>
							<a href="#" class="img-circle youtube"><span class="fa fa-youtube"></span></a>
							<a href="#" class="img-circle linkedin"><span class="fa fa-twitter"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	
	
</div>
<!--End pagewrapper-->

<!-- Scroll To Top -->
<div class="hm2-scroll-to-top hm2-scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{url('assets/js/jquery.js')}}"></script>
<script src="{{url('assets/js/popper.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{url('assets/js/appear.js')}}"></script>
<script src="{{url('assets/js/parallax.min.js')}}"></script>
<script src="{{url('assets/js/tilt.jquery.min.js')}}"></script>
<script src="{{url('assets/js/jquery.paroller.min.js')}}"></script>
<script src="{{url('assets/js/owl.js')}}"></script>
<script src="{{url('assets/js/wow.js')}}"></script>
<script src="{{url('assets/js/nav-tool.js')}}"></script>
<script src="{{url('assets/js/jquery-ui.js')}}"></script>
<script src="{{url('assets/js/script.js')}}"></script>

</body>
</html>