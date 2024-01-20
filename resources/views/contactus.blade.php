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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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

#harus_preview_image ul img {
	width: 100%;
	display: block;
	aspect-ratio: 1 / 1;
	object-fit: cover;
	transition: transform 1000ms;
}

#harus_preview_image ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: grid;
	gap: 0.5rem;
	grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
	max-width: 100%;
	width: 70rem;
}

#harus_preview_image figure {
	margin: 0;
	position: relative;
	overflow: hidden;
}

#harus_preview_image figure::after {
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

#harus_preview_image figcaption {
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

#harus_preview_image ul a:is(:hover, :focus) figure::after {
	opacity: 1;
}

#harus_preview_image ul a:is(:hover, :focus) figcaption {
	opacity: 1;
	transition: opacity 600ms;
}

@media (prefers-reduced-motion: no-preference) {
	#harus_preview_image figcaption {
		transform: translate3d(0, 2rem, 0);
	}
	
	#harus_preview_image figure::after {
		border-radius: 50%;
		opacity: 1;
		transform: scale(0);
		transition: transform 900ms;
	}
	
	#harus_preview_image ul a:is(:hover, :focus) figure::after {
		transform: scale(2.5);
	}

	#harus_preview_image ul a:is(:hover, :focus) figcaption {
		opacity: 1;
		transform: translate3d(0, 0, 0);
		transition: opacity 600ms 400ms, transform 600ms 400ms;
	}

	#harus_preview_image ul a:is(:hover, :focus) img {
		transform: scale(1.2);
	}
}
li::before{
	content:"" !important;
}

/* for desktops */
@media only screen 
  and (min-width: 1367px) { 
	
}

/* for laptops */
@media only screen 
  and (min-width: 991px) 
  and (max-width: 1366px) { 
	#logo_responsive span{
		font-size:15px !important;
	}
} 

/* for large tablets */
@media only screen 
  and (min-width: 769px) 
  and (max-width: 990px) { 
	.headers{
		display: none !important;
	}
	#logo_responsive{
		left:10px !important;
	}
	#logo_responsive span{
		font-size:15px !important;
	}
	#primary-menu-trigger{
		position:relative; right:20px;top:20px;
		
	}
	#headermenu{
		width: 100% !important;
	}
	#button_responsive{
		display:none !important;
	}
	.menu-container{
		padding-top:0px !important;
	}
	#button_beliforklift_responsive{
		display:block !important;
		padding:0px !important;
	}
	#slider{
		min-height: 35vh !important;
	}
	#button_hubungi_kami_responsive{
		text-align: center;
	}
	#section_hubungi_kami{
		text-align: justify;		
	}
	#section_hubungi_kami h3{
		margin-bottom: 20px;		
	}
	#penyangga_tanya_admin{
		display: block !important;
		clear:both;
		margin-top:30px;
	
	}
	
} 

/* for smaller tablets */
@media only screen 
  and (min-width: 481px) 
  and (max-width: 768px) { 
	.headers{
		display: none !important;
	}
	#logo_responsive{
		left:10px !important;
	}
	#logo_responsive span{
		font-size:15px !important;
	}
	#primary-menu-trigger{
		position:relative; right:20px;top:20px;
		
	}
	#headermenu{
		width: 100% !important;
		height:100%;
	}
	#button_responsive{
		display:none !important;
	}
	.menu-container{
		padding-top:0px !important;
	}
	#button_beliforklift_responsive{
		display:block !important;
		padding:0px !important;
	}
	#slider{
		min-height: 35vh !important;
	}
	#button_hubungi_kami_responsive{
		text-align: center;
	}
	#section_hubungi_kami{
		text-align: justify;		
	}
	#section_hubungi_kami h3{
		margin-bottom: 20px;		
	}
	#penyangga_tanya_admin{
		display: block !important;
		clear:both;
		margin-top:30px;
	
	}
	
} 

/* for cellphones */
@media only screen 
  and (max-width: 480px) { 
    .headers{
		display: none !important;
	}
	#logo_responsive{
		left:10px !important;
	}
	#logo_responsive span{
		font-size:15px !important;
	}
	#primary-menu-trigger{
		position:relative; right:20px;top:20px;
		
	}
	#headermenu{
		width: 100% !important;
	}
	#button_responsive{
		display:none !important;
	}
	.menu-container{
		padding-top:0px !important;
	}
	#button_beliforklift_responsive{
		display:block !important;
		padding:0px !important;
	}
	#slider{
		min-height: 35vh !important;
	}
	#button_hubungi_kami_responsive{
		text-align: center;
	}
	#section_hubungi_kami{
		text-align: justify;		
	}
	#section_hubungi_kami h3{
		margin-bottom: 20px;		
	}
	#penyangga_tanya_admin{
		display: block !important;
		clear:both;
		margin-top:30px;
	
	}
} 


	</style>
	   <link rel="icon" type="image/x-icon" href="{{ asset('css/images/logo_amp.png') }}">
		<title>Jual Forklift Termurah - PT Aneka Mesin Prima</title>
		<meta name="description" content="Forklift termurah hanya di PT. Aneka Mesin Prima" />
		<meta name=”robots” content="index, follow">
		<meta name="keywords" content="Forklift berkualitas,Forklift Surabaya,PT. Aneka Mesin Prima,aneka mesin prima,Forklift 3 Ton, Forklift 1.5 Ton, Forklift 2 Ton, Forkflift 2.5 Ton, Forklift 7 Ton, Forklift 10 Ton">
		<meta data-rh="true" property="og:title" content="Beli & Sewa Forklift Murah | PT. Aneka Mesin Prima">
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
		<header id="header" class="header-size-sm" data-sticky-shrink="false" style = "height:100px;">
			<div class="container">
				<div class="header-row">
				</div>
			</div>

			<div id="header-wrap" >
				
				<span style = "float:left;position: relative;left:50px;" id = "logo_responsive"><a href = "{{url('/')}}"><img src = "{{ asset('css/images/logo_amp.png') }}" style = "width:100px; height:100px;"/> </a><span style = "font-weight:600;color:#4A4A4A;font-size:20px;"><a href = "{{url('/')}}" style = "color:#4A4A4A !important;">PT. Aneka Mesin Prima</a></span></span>
				<span style = "float:right;position: relative;right:50px;" id = "button_responsive"><a href = "https://wa.me/6281258020841?text=Halo,%20PT.Aneka%20Mesin%20Prima,%20Saya%20ingin%20bertanya%20tentang%20forkliftnya%20"><button id = "beliforklift" class = "btn btn-success" style = "box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;border-radius:25px;border:0px;background-color: #ff5A00 ; font-family: Open Sans,system-ui; font-weight:600; letter-spacing:1px ;color:white;margin-top:30px;font-size:15px;"><i class="bi bi-cart" style = "color:white !important;"></i> &nbsp;Sewa / Beli Forklift Sekarang</button></a></span>
				<div id="primary-menu-trigger" style = "float:right;">
					<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
				</div>
				<div class="container">
					<div class="header-row justify-content-between flex-row-reverse flex-lg-row justify-content-lg-center" id = "headermenu" style = "z-index:150;background-color:white;">

					

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">
						
							<ul class="menu-container" style = "padding-top:15px;">
							
								<li class="menu-item "><a class="menu-link" href="{{url('/')}}"><div>Home</div></a></li>
								<li class="menu-item "><a class="menu-link" href="{{url('/service')}}" ><div>Our Services</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="{{url('/service')}}"><div>Forklift</div></a></li>
										<li class="menu-item"><a class="menu-link" ><div>Coming Soon</div></a></li>
									</ul>
								</li>
								<li class="menu-item current"><a class="menu-link" href="{{url('/hubungikami')}}"><div>Contact Us</div></a>
								</li>
								<li class="menu-item"><a class="menu-link" href="" style = "display:none;padding:10px !important;" id = "button_beliforklift_responsive"><div style = "padding:0px !important;"><button id = "beliforklift_responsive" class = "btn btn-success" style = "box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;border-radius:25px;border:0px;background-color: #ff5A00 ; font-family: Open Sans,system-ui; font-weight:600; letter-spacing:1px ;color:white;font-size:15px;"> <i class="bi bi-cart" style = "color:white !important;"></i> &nbsp;Sewa / Beli Forklift Sekarang</button></div></a>
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

		<div class="container clearfix mt-2" style = "width:100%;" id = "harus_preview_image">
		<h3 style = "font-size:40px;text-align:center;">Hubungi Kami</h3>
		<p>Butuh bantuan untuk mencari forklift berkualitas mulai dari kapasitas 1,5 ton sampai 11 ton? yuk langsung saja datangi offline store kami yang berletak di Kota Surabaya pada <b>jln Kedinding Lor no 88 - 90</b> Atau bisa menekan kotak google maps yang ada dibawah halaman. Selain itu, kamu juga bisa hubungi nomor whatsapp admin yang tertera. Terima Kasih.</p>

		<br>
		<h3 style = "font-size:40px;text-align:center;">Jam Operasional Kami</h3>
		<div class = "row mt-3" style = "text-align: center;">
			<div class = "col-md-12"><i class="bi bi-check2" style = "color:green;font-size:20px;"></i>&nbsp;<b>Senin</b> : Buka (8 pagi - 5 Malam)
			</div>
		</div>
		<div class = "row mt-3" style = "text-align: center;">
			<div class = "col-md-12"><i class="bi bi-check2" style = "color:green;font-size:20px;"></i>&nbsp;<b>Selasa</b> : Buka (8 pagi - 5 Malam)
			</div>
		</div>
		<div class = "row mt-3" style = "text-align: center;">
			<div class = "col-md-12"><i class="bi bi-check2" style = "color:green;font-size:20px;"></i>&nbsp;<b>Rabu</b> : Buka (8 pagi - 5 Malam)
			</div>
		</div>
		<div class = "row mt-3" style = "text-align: center;">
			<div class = "col-md-12"><i class="bi bi-check2" style = "color:green;font-size:20px;"></i>&nbsp;<b>Kamis</b> : Buka (8 pagi - 5 Malam)
			</div>
		</div>
		<div class = "row mt-3" style = "text-align: center;">
			<div class = "col-md-12"><i class="bi bi-check2" style = "color:green;font-size:20px;"></i>&nbsp;<b>Jumat</b> : Buka (8 pagi - 5 Malam)
			</div>
		</div>
		<div class = "row mt-3" style = "text-align: center;">
			<div class = "col-md-12"><i class="bi bi-x-lg" style = "color:red;font-size:20px;"></i>&nbsp;<b>Sabtu & Minggu</b> : Tutup 
			</div>
		</div>
		<div class = "row mt-3" style = "text-align: center;">
			<div class = "col-md-12" style = "color:green;"></i>&nbsp;<b>*Admin Whatsapp Online Setiap Hari jam 10 pagi - jam 7 Malam </b>
			</div>
		</div>
		<br><br>
		<div style = "text-align:center;padding:20px;background-color:#ff5A00;color:white;border-radius:10px;width:100%;">Penasaran dengan jenis forklift dan kapasitasnya?. yuk hubungi Admin kami.<a  href= "https://wa.me/6281258020841?text=Halo,%20PT.Aneka%20Mesin%20Prima,%20Saya%20ingin%20bertanya%20tentang%20forkliftnya%20untuk%20ukuran%20lainnya%20selain%20di%20Website" style = ""> <div id = "penyangga_tanya_admin" style = "display:none;"></div> <span style = "border:1px solid white; background-color:transparent;color:white;font-weight:bold;border-radius:20px;padding:10px;margin-left:10px;">Tanya Admin &nbsp;<img src = "{{asset('css/images/logo_wa.png')}}" style = "width:28px;height:27px;" ></span> </a></div>

		<br><br>
		<h3 style = "font-size:40px;text-align:center;">Offline Store Kami</h3>
		<div style = "position: relative;height:90% !important;;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15832.622048998037!2d112.77050281237106!3d-7.223096435547495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f853b7af2615%3A0xd57269bd0950701!2sJl.%20Kedinding%20Lor%20No.88-90%2C%20Tanah%20Kali%20Kedinding%2C%20Kec.%20Kenjeran%2C%20Surabaya%2C%20Jawa%20Timur%2060129!5e0!3m2!1sen!2sid!4v1705717160732!5m2!1sen!2sid"  style="border:0;width:100%;height:350px !important;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div style = "clear:both;"></div>
		<br><br>


		</div>
	
		<br><br>
	
	
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

								{{-- <img src="{{ asset('css/images/footer-widget-logo.png') }}" alt="Image" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p> --}}

								{{-- <div class="line" style="margin: 30px 0;"></div> --}}

								<div class="row col-mb-30">
									<div class="col-lg-3 col-6 widget_links">
										<h3>Marketing Office</h3>
										<ul>
											<li><i class="bi bi-telephone-inbound-fill"></i><a href="https://wa.me/6281258020841?text=Halo,%20PT.Aneka%20Mesin%20Prima,%20Saya%20ingin%20bertanya%20tentang%20forkliftnya%20">+62 812-580-208-41</a></li>
											<li><i class="bi bi-pin-fill"></i><a href="https://www.google.com/maps/place/Jl.+Kedinding+Lor+No.88-90,+Tanah+Kali+Kedinding,+Kec.+Kenjeran,+Surabaya,+Jawa+Timur+60129/@-7.2213183,112.7700947,18z/data=!3m1!4b1!4m6!3m5!1s0x2dd7f853b7af2615:0xd57269bd0950701!8m2!3d-7.2216509!4d112.7712856!16s%2Fg%2F11cpf7n8lp?entry=ttu">Jln. Kedinding Lor no 88-90, Surabaya, Jawa Timur</a></li>
									
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
											<h3>Temukan Kami Di:</h3>
											<img src = "{{asset('css/images/logo_ig.png')}}" style = "width:50px;height:50px;" /><span style = "font-weight:bold;margin-left:10px;">&nbsp;Instagram</span>
										</div>
									</div>

									{{-- <div class="col-12">
										<div class="footer-big-contacts">
											<span>Send an Email:</span>
											info@canvas.com
										</div>
									</div> --}}
								</div>

							</div>

							<div class="widget subscribe-widget clearfix">

								<div class="row col-mb-30">
									{{-- <div class="col-12 col-sm-6 clearfix">
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
									</div> --}}
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
							{{-- <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div> --}}
						</div>

						<div class="col-12 col-md-auto text-center text-md-right">
							<div class="copyrights-menu copyright-links clearfix">
								<a href="{{url('/')}}">Home</a>/<a href="{{url('/service')}}">Services</a>/<a href="#">Contact Us</a>
							</div>
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"> <i class="bi bi-arrow-up-short" style = "font-size:20px;"></i></div>

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