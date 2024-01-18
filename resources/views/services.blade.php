<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" /> 
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/swiper.css') }}" type="text/css" />

	<!-- Construction Demo Specific Stylesheet -->
	{{-- <link rel="stylesheet" href="{{ asset('css/construction.css') }}" type="text/css" /> --}}
	<!-- / -->

	<link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/fonts.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{ asset('css') }}/colors.php?color=F18052" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Forklift Surabaya - PT. Aneka Mesin Prima</title>
	<style>
		/* #wrapper, #header-wrap{
			background-color:#2A2B2E;
		}
		#header-wrap{
			border: 0px solid bla
		} */


		.headers {
  position: fixed;
  top: 0.2;
  margin-top:-2px;
  z-index: 50;
  width: 100%;
  background-color: #f1f1f1;
}

/* The progress container (grey background) */
.progress-container {
  width: 100%;
  height: 1px;
  background: #ccc;
}

/* The progress bar (scroll indicator) */
.progress-bar {
  height: 4px;
  background: #ff8c42;
  width: 0%;
}
#beliforklift:hover{
	border : 0px solid black !important;
	background-color: #ff803b !important;
}
.menu-item .current a:hover{
	color:#ff5A00 !important;
}
#title_slider{
	font-size:45px;
	/* background-color: #ff8c42 !important; */
color: #ff5A00;
/* -webkit-text-fill-color: #ff5A00; Will override color (regardless of order) */
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: white;
/* border:1px solid #ff5A00; */
}




ul img {
	width: 100%;
	display: block;
	aspect-ratio: 1 / 1;
	object-fit: cover;
	transition: transform 1000ms;
}

ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: grid;
	gap: 0.5rem;
	grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
	max-width: 100%;
	width: 70rem;
}

figure {
	margin: 0;
	position: relative;
	overflow: hidden;
}

figure::after {
	content: '';
	position: absolute;
	top: 50%;
	left: 50%;
	width: 200%;
	height: 200%;
	background: rgba(0, 0, 0, 0.5);
	transform-origin: center;
	opacity: 0;
	transform: scale(2);
	transition: opacity 300ms;
}

figcaption {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	place-items: center;
	text-align: center;
	padding: 1rem;
	color: white;
	font-size: 1.2rem;
	z-index: 1;
	opacity: 0;
	transition: opacity 600ms, transform 600ms;
}

a:is(:hover, :focus) figure::after {
	opacity: 1;
}

a:is(:hover, :focus) figcaption {
	opacity: 1;
	transition: opacity 600ms;
}

@media (prefers-reduced-motion: no-preference) {
	figcaption {
		transform: translate3d(0, 2rem, 0);
	}
	
	figure::after {
		border-radius: 50%;
		opacity: 1;
		transform: scale(0);
		transition: transform 900ms;
	}
	
	a:is(:hover, :focus) figure::after {
		transform: scale(2.5);
	}

	a:is(:hover, :focus) figcaption {
		opacity: 1;
		transform: translate3d(0, 0, 0);
		transition: opacity 600ms 400ms, transform 600ms 400ms;
	}

	a:is(:hover, :focus) img {
		transform: scale(1.2);
	}
}
	</style>
	    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">
		
		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="header-size-sm" data-sticky-shrink="false">
			<div class="container">
				<div class="header-row">

					<!-- Logo
					============================================= -->
					{{-- <div id="logo" class="ml-auto ml-lg-0 mr-lg-auto">
						<a href="index.html" class="standard-logo"><img src="{{ asset('css/images/logo.png') }}" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo"><img src="{{ asset('css/images/logo@2x.png') }}" alt="Canvas Logo"></a>
					</div><!-- #logo end --> --}}

					{{-- <div class="header-misc d-none d-lg-flex">

						<ul class="header-extras">
							<li>
								<i class="i-plain icon-call m-0"></i>
								<div class="he-text">
									Call Us
									<span>(1) 22 54215821</span>
								</div>
							</li>
							<li>
								<i class="i-plain icon-line2-envelope m-0"></i>
								<div class="he-text">
									Email Us
									<span>info@canvas.com</span>
								</div>
							</li>
							<li>
								<i class="i-plain icon-line-clock m-0"></i>
								<div class="he-text">
									We'are Open
									<span>Mon - Sat, 10AM to 6PM</span>
								</div>
							</li>
						</ul>

					</div> --}}

				</div>
			</div>

			<div id="header-wrap" >
				
				<span style = "float:left;position: relative;left:50px;"><img src = "{{ asset('css/images/logo_amp.png') }}" style = "width:100px; height:100px;"/> <span style = "font-weight:600;color:#4A4A4A;font-size:20px;">PT. Aneka Mesin Prima</span></span>
				<span style = "float:right;position: relative;right:50px;"><a href = "https://wa.me/6281258020841?text=Halo,%20PT.Aneka%20Mesin%20Prima,%20Saya%20ingin%20bertanya%20tentang%20forkliftnya%20"><button id = "beliforklift" class = "btn btn-success" style = "box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;border-radius:25px;border:0px;background-color: #ff5A00 ; font-family: Open Sans,system-ui; font-weight:600; letter-spacing:1px ;color:white;margin-top:30px;font-size:15px;"> <i class="bi bi-cart" style = "color:black !important;"></i>Sewa / Beli Forklift Sekarang</button></a></span>

				<div class="container">
					<div class="header-row justify-content-between flex-row-reverse flex-lg-row justify-content-lg-center">

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>
						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">
						
							<ul class="menu-container" style = "padding-top:15px;">
							
								<li class="menu-item current"><a class="menu-link" href="{{url('/')}}"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" ><div>Our Services</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="{{url('/service')}}"><div>Forklift</div></a></li>
										<li class="menu-item"><a class="menu-link" ><div>Coming Soon</div></a></li>
									</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="demo-construction-about-us.html"><div>About Us</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-construction-projects.html"><div>Contact Us</div></a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>

				
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
		<div class="headers">
			  <div class="progress-bar" id="myBar"></div>
			
		  </div>
		

		<!-- Content
		============================================= -->
		<br>
		<h3 style = "font-size:40px;text-align:center;">Produk Kami</h3>
		
		<ul style = "margin:auto;">
			<li>
				<span style = "position: absolute;z-index:100;background-color:#ff5A00;border-radius:40px;color:white;padding:5px;margin-top:10px;margin-left:10px;font-weight:600;">1,5 Ton</span>
				<a href="">
					<figure>
						
						<img src='https://images.unsplash.com/photo-1631451095765-2c91616fc9e6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA0OTI3Nw&ixlib=rb-1.2.1&q=80&w=400' alt='Volcano and lava field against a stormy sky'>
						<figcaption>Mountains and volcanos</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<span style = "position: absolute;z-index:100;background-color:#ff5A00;border-radius:40px;color:white;padding:5px;margin-top:10px;margin-left:10px;font-weight:600;">2 Ton</span>
				<a href="">
					<figure>
						<img src='https://images.unsplash.com/photo-1633621533308-8760aefb5521?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjAyMQ&ixlib=rb-1.2.1&q=80&w=400' alt='Guy on a bike ok a wooden bridge with a forest backdrop'>
						<figcaption>Adventure getaways</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<span style = "position: absolute;z-index:100;background-color:#ff5A00;border-radius:40px;color:white;padding:5px;margin-top:10px;margin-left:10px;font-weight:600;">2,5 Ton</span>
				<a href="">
					<figure>
						<img src='https://images.unsplash.com/photo-1633635146842-12d386e64058?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400' alt='Person standing alone in a misty forest'>
						<figcaption>Forest escapes</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<span style = "position: absolute;z-index:100;background-color:#ff5A00;border-radius:40px;color:white;padding:5px;margin-top:10px;margin-left:10px;font-weight:600;">3 Ton</span>

				<a href="">
					<figure>
						<img src='https://images.unsplash.com/photo-1568444438385-ece31a33ce78?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400' alt='Person hiking on a trail through mountains while taking a photo with phone'>
						<figcaption>Hiking trails</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<span style = "position: absolute;z-index:100;background-color:#ff5A00;border-radius:40px;color:white;padding:5px;margin-top:10px;margin-left:10px;font-weight:600;">3,5 Ton</span>

				<a href="">
					<figure>
						<img src='https://images.unsplash.com/photo-1633515257379-5fda985bd57a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400' alt='Street scene with person walking and others on motorbikes, all wearing masks'>
						<figcaption>Street scenes</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<span style = "position: absolute;z-index:100;background-color:#ff5A00;border-radius:40px;color:white;padding:5px;margin-top:10px;margin-left:10px;font-weight:600;">7 Ton</span>

				<a href="">
					<figure>
						<img src='https://images.unsplash.com/photo-1633209931146-260ce0d16e22?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400' alt='Fashionable-looking girl with blond hair and pink sunglasses'>
						<figcaption>Trending</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<span style = "position: absolute;z-index:100;background-color:#ff5A00;border-radius:40px;color:white;padding:5px;margin-top:10px;margin-left:10px;font-weight:600;">4 Ton</span>
				<span style = "position: absolute;z-index:100;background-color:#2d302e;border-radius:40px;color:white;padding:5px;margin-top:50px;margin-left:10px;font-weight:600;">Coming Soon</span>


				<a href="">
					<figure>
						<img src='https://images.unsplash.com/photo-1633209931146-260ce0d16e22?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400' alt='Fashionable-looking girl with blond hair and pink sunglasses'>
						<figcaption>Trending</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<span style = "position: absolute;z-index:100;background-color:#ff5A00;border-radius:40px;color:white;padding:5px;margin-top:10px;margin-left:10px;font-weight:600;">4,5 Ton</span>
				<span style = "position: absolute;z-index:100;background-color:#2d302e;border-radius:40px;color:white;padding:5px;margin-top:50px;margin-left:10px;font-weight:600;">Coming Soon</span>


				<a href="">
					<figure>
						<img src='https://images.unsplash.com/photo-1633209931146-260ce0d16e22?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400' alt='Fashionable-looking girl with blond hair and pink sunglasses'>
						<figcaption>Trending</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<span style = "position: absolute;z-index:100;background-color:#ff5A00;border-radius:40px;color:white;padding:5px;margin-top:10px;margin-left:10px;font-weight:600;">5 Ton</span>
				<span style = "position: absolute;z-index:100;background-color:#2d302e;border-radius:40px;color:white;padding:5px;margin-top:50px;margin-left:10px;font-weight:600;">Coming Soon</span>


				<a href="">
					<figure>
						<img src='https://images.unsplash.com/photo-1633209931146-260ce0d16e22?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400' alt='Fashionable-looking girl with blond hair and pink sunglasses'>
						<figcaption>Trending</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<span style = "position: absolute;z-index:100;background-color:#ff5A00;border-radius:40px;color:white;padding:5px;margin-top:10px;margin-left:10px;font-weight:600;">6 Ton</span>
				<span style = "position: absolute;z-index:100;background-color:#2d302e;border-radius:40px;color:white;padding:5px;margin-top:50px;margin-left:10px;font-weight:600;">Coming Soon</span>


				<a href="">
					<figure>
						<img src='https://images.unsplash.com/photo-1633209931146-260ce0d16e22?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400' alt='Fashionable-looking girl with blond hair and pink sunglasses'>
						<figcaption>Trending</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<span style = "position: absolute;z-index:100;background-color:#ff5A00;border-radius:40px;color:white;padding:5px;margin-top:10px;margin-left:10px;font-weight:600;">10 Ton</span>
				<span style = "position: absolute;z-index:100;background-color:#2d302e;border-radius:40px;color:white;padding:5px;margin-top:50px;margin-left:10px;font-weight:600;">Coming Soon</span>
				<a href="">
					<figure>
						<img src='https://images.unsplash.com/photo-1633209931146-260ce0d16e22?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNDA1MjA5OA&ixlib=rb-1.2.1&q=80&w=400' alt='Fashionable-looking girl with blond hair and pink sunglasses'>
						<figcaption>Trending</figcaption>
					</figure>
				</a>
			</li>
		</ul>
		<br><br>

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row">
						<div class="col-lg-9">
							<div class="widget clearfix">

								<img src="{{ asset('css/images/footer-widget-logo.png') }}" alt="Image" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

								<div class="line" style="margin: 30px 0;"></div>

								<div class="row col-mb-30">
									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="#">About</a></li>
											<li><a href="#">FAQs</a></li>
											<li><a href="#">Support</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Shop</a></li>
											<li><a href="#">Portfolio</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Forums</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Corporate</a></li>
											<li><a href="#">Agency</a></li>
											<li><a href="#">eCommerce</a></li>
											<li><a href="#">Personal</a></li>
											<li><a href="#">One Page</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Restaurant</a></li>
											<li><a href="#">Wedding</a></li>
											<li><a href="#">App Showcase</a></li>
											<li><a href="#">Magazine</a></li>
											<li><a href="#">Landing Page</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

						<div class="col-lg-3 mt-5 mt-lg-0">
							<div class="widget clearfix">

								<div class="row col-mb-30">
									<div class="col-12">
										<div class="footer-big-contacts">
											<span>Call Us:</span>
											(1) 22 55412474
										</div>
									</div>

									<div class="col-12">
										<div class="footer-big-contacts">
											<span>Send an Email:</span>
											info@canvas.com
										</div>
									</div>
								</div>

							</div>

							<div class="widget subscribe-widget clearfix">

								<div class="row col-mb-30">
									<div class="col-12 col-sm-6 clearfix">
										<a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
									</div>
									<div class="col-12 col-sm-6 clearfix">
										<a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
											<i class="icon-rss"></i>
											<i class="icon-rss"></i>
										</a>
										<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row justify-content-between col-mb-30">
						<div class="col-12 col-md-auto text-center text-md-left">
							Copyrights &copy; 2023 PT. Aneka Mesin Prima<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-12 col-md-auto text-center text-md-right">
							<div class="copyrights-menu copyright-links clearfix">
								<a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
							</div>
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/plugins.min.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/functions.js') }}"></script>
	
</body>
</html>
<script>

	window.onscroll = function() {myFunction()};

  var scrolled = 10;
  document.getElementById("myBar").style.width = scrolled + "%";

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = ((winScroll / height) * 100) + 10;
  document.getElementById("myBar").style.width = scrolled + "%";
} 
</script>