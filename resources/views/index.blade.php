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
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	<!-- Document Title
	============================================= -->

	<style>

		.headers {
  position: fixed;
  top: 0.2;
  margin-top:-2px;
  z-index: 50;
  width: 100%;
  background-color: #f1f1f1;
  /* display: none; */
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


/* Icon set - http://ionicons.com/ */
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,800);
figure.snip1139 {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 220px;
  max-width: 310px;
  width: 100%;
  color: #333;
  text-align: left;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  border-radius: 8px;
}
figure.snip1139 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}
figure.snip1139 img {
  max-width: 100%;
  vertical-align: middle;
}
figure.snip1139 blockquote {
  position: relative;
  background-color: #ffffff;
  padding: 25px 50px 25px 50px;
  font-size: 0.8em;
  font-weight: 500;
  text-align: left;
  margin: 0;
  line-height: 1.6em;
  font-style: italic;
}
figure.snip1139 blockquote:before,
figure.snip1139 blockquote:after {
  font-family: 'FontAwesome';
  content: "\201C";
  position: absolute;
  font-size: 50px;
  opacity: 0.3;
  font-style: normal;
}
figure.snip1139 blockquote:before {
  top: 25px;
  left: 20px;
}
figure.snip1139 blockquote:after {
  content: "\201D";
  right: 20px;
  bottom: 0;
}
figure.snip1139 .arrow {
  top: 100%;
  width: 0;
  height: 0;
  border-left: 0 solid transparent;
  border-right: 25px solid transparent;
  border-top: 25px solid #ffffff;
  margin: 0;
  position: absolute;
}
figure.snip1139 .author {
  position: absolute;
  bottom: 0;
  width: 100%;
  padding: 5px 25px;
  color: #000000;
  background-color: #ffffff;
  margin: 0;
  text-transform: uppercase;
}
figure.snip1139 .author h5 {
  opacity: 0.8;
  margin: 0;
  font-weight: 800;
}
figure.snip1139 .author h5 span {
  font-weight: 400;
  text-transform: none;
  padding-left: 5px;
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
	#slider{
		height:95vh;
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
		min-height: 55vh !important;
	}
	#slider{
		height:85vh;
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
	#slider{
		height:85vh;
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
	
} 
#bouncingimageslider{
	animation: backInLeft; /* referring directly to the animation's @keyframe declaration */
  animation-duration: 1s; /* don't forget to set a duration! */
}

@media (prefers-reduced-motion: no-preference) {
  #section_hubungi_kami {
    transition: opacity 1.5s ease, transform 1.5s ease;
  }
}

	</style>
	    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
	
	<link rel="icon" type="image/x-icon" href="{{ asset('css/images/logo_amp.png') }}">
	<title>Jual Forklift Termurah - PT Aneka Mesin Prima</title>
	<meta name="description" content="Forklift termurah hanya di PT. Aneka Mesin Prima" />
	<meta name=”robots” content="index, follow">
	<meta name="keywords" content="Forklift berkualitas,Sewa Forklift,Sewa Forklift Murah,Sewa Forklift Surabaya,beli forklift murah, beli forklift,sewa forklift,Beli Forklift Murah,Forklift Surabaya,PT. Aneka Mesin Prima,aneka mesin prima,Forklift 3 Ton, Forklift 1.5 Ton, Forklift 2 Ton, Forkflift 2.5 Ton, Forklift 7 Ton, Forklift 10 Ton">
	<meta data-rh="true" property="og:title" content="Beli & Sewa Forklift Murah | PT. Aneka Mesin Prima">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-14NQSWYWEE">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-14NQSWYWEE');
</script>

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
				</div>
			</div>

			<div id="header-wrap" >
			
				<span style = "float:left;position: relative;left:50px;" id = "logo_responsive"><a href = "{{url('/')}}"><img src = "{{ asset('css/images/logo_amp.png') }}" style = "width:100px; height:100px;"/> </a><span style = "font-weight:600;color:#4A4A4A;font-size:20px;"><a href = "{{url('/')}}" style = "color:#4A4A4A !important;">PT. Aneka Mesin Prima</a></span></span>
				<span style = "float:right;position: relative;right:50px;" id = "button_responsive"><a href = "https://wa.me/6281258020841?text=Halo,%20PT.Aneka%20Mesin%20Prima,%20Saya%20ingin%20bertanya%20tentang%20forkliftnya%20"><button id = "beliforklift" class = "btn btn-success" style = "box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;border-radius:25px;border:0px;background-color: #ff5A00 ; font-family: Open Sans,system-ui; font-weight:600; letter-spacing:1px ;color:white;margin-top:30px;font-size:15px;"> <i class="bi bi-cart" style = "color:white !important;"></i> &nbsp;Sewa / Beli Forklift Sekarang</button></a></span>
				<div id="primary-menu-trigger" style = "float:right;">
					<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
				</div>
				<div class="container">
					<div class="header-row justify-content-between flex-row-reverse flex-lg-row justify-content-lg-center" id = "headermenu">

						{{-- <div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

						</div> --}}

						
						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">
						
							<ul class="menu-container" style = "padding-top:15px;">
							
								<li class="menu-item current"><a class="menu-link" href="{{url('/')}}"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{url('/service')}}"><div>Our Services</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="{{url('/service')}}"><div>Forklift</div></a></li>
										<li class="menu-item"><a class="menu-link" href=""><div>Coming Soon</div></a></li>
									</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="{{url('/hubungikami')}}"><div>Contact Us</div></a>
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
		<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-75" data-loop="true">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="container">
							<div class="slider-caption">
								<div>
									{{-- <h2 id = "title_slider">PT Aneka Mesin Prima</h2>
									<p class="d-none d-sm-block">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own Canvas.</p> --}}
								</div>
							</div>
						</div>
						<div class="swiper-slide-bg" id = "bouncingimageslider"  style="background-image: url('{{ asset('css/images/gambar_cover.jpg') }}'); background-position: center;background-size:100% 100%;"></div>
					</div>
					{{-- <div class="swiper-slide">
						<div class="container">
							<div class="slider-caption slider-caption-right">
								<div>
									<h2>Beautifully Flexible</h2>
									<p class="d-none d-sm-block">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
								</div>
							</div>
						</div>
						<div class="video-wrap">
						
							<div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="container">
							<div class="slider-caption">
								<div>
									<h2>Premium Constructions</h2>
									<p class="d-none d-sm-block">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide-bg" style="background-image: url('{{ asset('css/images/slider/1.jpg') }}'); background-position: center bottom;"></div>
					</div> --}}
				</div>
				{{-- <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div class="slider-arrow-right"><i class="icon-angle-right"></i></div> --}}
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap" style = "padding-bottom:0px !important;">

				<div class="promo promo-light promo-full promo-uppercase p-5 bottommargin-lg header-stick">
					<div class="container clearfix">
						<div class="row align-items-center" id = "section_hubungi_kami">
							<div class="col-12 col-lg">
								<h3 style="letter-spacing: 2px;">Sewa atau Beli Forklift Berkualitas Di Tempat Kami</h3>
								<span>Kami menjanjikan forklift berkualitas dan siap kirim ke seluruh <b>wilayah Indonesia</b></span>
							</div>
							<div class="col-12 col-lg-auto mt-4 mt-lg-0" id = "button_hubungi_kami_responsive">
								<a href="https://wa.me/6281258020841?text=Halo,%20PT.Aneka%20Mesin%20Prima,%20Saya%20ingin%20bertanya%20tentang%20forkliftnya%20"  class="button button-large button-circle button-black m-0" style = "background-color:#ff5A00;">Hubungi Kami</a>
							</div>
						</div>
					</div>
				</div>
				<div class="container clearfix" style = "margin-bottom:40px;">
					<h3 style = "text-align:center;font-size:40px;" >Tentang PT. Aneka Mesin Prima</h3>
					<div class="row justify-content-center col-mb-50">
				
						
						<div class="col-sm-12 col-lg-12">
							<p style = "text-align:justify;">
								<b style = "color:#4A4A4A;">PT. Aneka Mesin Prima</b> mulai beroperasi pada tahun 2023, perusahaan kami terletak di Jalan Kedinding Lor no 88-90, Surabaya, Jawa Timur. PT. Aneka Mesin Prima merupakan perusahaan yang bergerak di bidang sewa dan jual- beli Forklift. Forklift yang disediakan oleh PT. Aneka Mesin Prima terbilang cukup beragam, ada Forklift Diesel dan Forklift Elektrik dengan kapasitas Ton yang berbeda-beda. Selain itu, PT. Aneka Mesin Prima juga menyediakan jasa perbaikan Forklift milik konsumen yang ingin Forkliftnya diperbaiki.
							</p>
							
						</div>
						

					
					</div>
				</div>
				<div class="container clearfix">
					<h3 style = "text-align:center;font-size:40px;margin-bottom:40px;color:#4A4A4A;">Keunggulan Produk Kami</h3>
					<div class="row justify-content-center col-mb-50">
				
						<div class="col-sm-6 col-lg-4">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img class="rounded" src="{{ asset('css/images/keunggulan/keunggulan_1.jpg') }}" style = "width:100%;height:250px;" alt="Why choose Us?">
								</div>
								<div class="fbox-content px-0">
									<h3 style = "font-size:20px;">Totalitas<span class="subtitle"></span></h3>
									<p  style = "text-align:justify;">Sebelum menyewakan atau menjual Forklift, <b style = "color:#4A4A4A;">Totalitas</b> dari pelayanan PT Aneka Mesin Prima yaitu merekondisi atau memperbaiki dan melakukan pengecatan Forklift terlebih dahulu sehingga kondisinya seperti baru.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-4">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img class="rounded" src="{{ asset('css/images/services/1.jpg') }}" style = "width:100%;height:250px;" alt="Effective Planning">
								</div>
								<div class="fbox-content px-0">
									<h3 style = "font-size:20px;">Bergaransi <span class="subtitle"></span></h3>
									<p  style = "text-align:justify;">Forklift kami sudah dicek terlebih dahulu perihal kualitas, Selain itu kami memberikan <b style = "color:#4A4A4A;">garansi</b> untuk pembelian Forklift dari kami selama 6 Bulan.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-4">
							<div class="feature-box media-box">
								<div class="fbox-media">
									<img class="rounded" src="{{ asset('css/images/keunggulan/keunggulan_2.jpg') }}" style = "object-fit: cover;object-position:cover;width:100%;height:250px;" alt="Why choose Us?">
								</div>
								<div class="fbox-content px-0">
									<h3 style = "font-size:20px;">Berkualitas <span class="subtitle"></span></h3>
									<p  style = "text-align:justify;">Forklift kami terjamin <b style = "color:#4A4A4A;">kualitasnya</b> karena sudah diperbaiki dan dihandle oleh para mekanik yang berpengalaman di bidangnya.</p>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="section parallax dark" style="background-image: url('{{ asset('css/images/slider/1.jpg') }}'); padding: 120px 0; "   data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
			
					<div class="fslider testimonial testimonial-full"   data-arrows="false" style="z-index: 2;" style = "text-align:center;">
						<h3 style = "text-align:center;font-size:40px;margin-bottom:40px;color:#ffffff;">Testimoni Klien Kami</h3>
						<div class="flexslider" style = "  display: flex;
						justify-content: center;
						align-items: center;
						flex-flow: wrap;">
							{{-- <div class="slider-wrap">
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="{{ asset('css/images/testimonials/3.jpg') }}" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Similique fugit repellendus expedita excepturi iure provident quia eaque. Repellendus, vero numquam?</p>
										<div class="testi-meta">
											Steve Jobs
											<span>Apple Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="{{ asset('css/images/testimonials/2.jpg') }}" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
										<div class="testi-meta">
											Collis Ta'eed
											<span>Envato Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="{{ asset('css/images/testimonials/1.jpg') }}" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
										<div class="testi-meta">
											John Doe
											<span>XYZ Inc.</span>
										</div>
									</div>
								</div>
							</div> --}}
							<figure class="snip1139" >
								<blockquote style = "text-align:justify;"><b style = "font-size:17px;">PT. Hailiang Nova Material </b> <br><br> Wah keren sih untuk pelayanan ini <b>PT. Aneka Mesin Prima</b>, Kami menyewa forklift bobot 7 ton, Kondisi Mesin nya juga TOP deh, kedepannya aku mau sewa ditempat ini lagi.
								  <div class="arrow"></div>
								</blockquote>
								{{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample3.jpg" alt="sample3"/> --}}
								<div class="author">
								</div>
							  </figure>
							  
							  <figure class="snip1139 hover">
								<blockquote style = "text-align:justify;"><b style = "font-size:17px;text-align:left !important;">PT. Griya Maxindo </b> <br><br>Beli Forklift ditempat <b>PT. Aneka Mesin Prima</b>  tidak mengecewakan dan kualitasnya <b>Terbaik</b>, totalitas dari pelayanan tempat ini keren banget. Jangan lupa untuk beli forklift di tempat ini, Kualitas gak perlu diragukan.
									<div class="arrow"></div>
								</blockquote>
								{{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample47.jpg" alt="sample47"/> --}}
								<div class="author">
							
								</div>
							  </figure>
							  <figure class="snip1139 hover">
								<blockquote style = "text-align:justify;"><b style = "font-size:17px;text-align:left !important;">Irwan Caterpillar </b> <br><br>Tidak Kecewa saya beli forklift CAT 3 ton untuk pemakaian pribadi di PT. Aneka Mesin Prima, forklift yang saya terima persis <b>seperti baru</b> dan <b>kualitas warna catnya tidak main main</b>. Sukses terus, Thankyou.
									<div class="arrow"></div>
								</blockquote>
								{{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample3.jpg" alt="sample47"/> --}}
								<div class="author">
							
								</div>
							  </figure>


							  <figure class="snip1139" >
								<blockquote style = "text-align:justify;"><b style = "font-size:17px;">PT. Sumber Jaya Glassindo </b> <br><br> Unit <b>Forklift 3,5 ton</b>, yang saya beli di PT. Aneka Mesin Prima serasa seperti baru, pemakaiannya oke.
								  <div class="arrow"></div>
								</blockquote>
								{{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample3.jpg" alt="sample3"/> --}}
								<div class="author">
								</div>
							  </figure>
							  <figure class="snip1139 hover">
								<blockquote style = "text-align:justify;"><b style = "font-size:17px;text-align:left !important;">Pak Gunawan </b> <br><br>Saya beli <b>Forklift Toyota 2,5 ton</b>  di PT. Aneka Mesin Prima dengan harga yang lumayan murah dan bersaing.. warna cat forkliftnya seperti baru.
									<div class="arrow"></div>
								</blockquote>
								{{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample47.jpg" alt="sample47"/> --}}
								<div class="author">
							
								</div>
							  </figure>
							  <figure class="snip1139 hover">
								<blockquote style = "text-align:justify;"><b style = "font-size:17px;text-align:left !important;">Pak Anggi </b> <br><br>Saya langsung beli 2 unit forklift boom tinggi di PT. Aneka Mesini Prima, semoga unit ini bisa membawa berkah untuk usaha saya.
									<div class="arrow"></div>
								</blockquote>
								{{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample3.jpg" alt="sample47"/> --}}
								<div class="author">
							
								</div>
							  </figure>
							  <figure class="snip1139 hover">
								<blockquote style = "text-align:justify;"><b style = "font-size:17px;text-align:left !important;">Pak Firman </b> <br><br>Saya beli forklift 1.5 ton side shifting di PT Aneka Mesin Prima untuk kebutuhan usaha keramik saya.. hasilnya mantap.
									<div class="arrow"></div>
								</blockquote>
								{{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample3.jpg" alt="sample47"/> --}}
								<div class="author">
							
								</div>
							  </figure>
						
						</div>
					</div>

					<div class="video-wrap" style="z-index: 1;">
						<div class="video-overlay" style="background: rgba(241,128,82,0.9);"></div>
					</div>

				</div>

				{{-- <div class="container" >

					<div class="row align-items-stretch col-mb-50" >
						<div class="col-lg-4 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('css/images/icons/building.png') }}" alt="Concrete Developments"></a>
								</div>
								<div class="fbox-content">
									<h3>Concrete Developments</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('css/images/icons/bank.png') }}" alt="Finance Assistance"></a>
								</div>
								<div class="fbox-content">
									<h3>Finance Assistance</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('css/images/icons/drawer.png') }}" alt="Interiorly Designed"></a>
								</div>
								<div class="fbox-content">
									<h3>Interiorly Designed</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('css/images/icons/paper-money.png') }}" alt="Cost Effective Solutions"></a>
								</div>
								<div class="fbox-content">
									<h3>Cost Effective Solutions</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('css/images/icons/traffic-cone.png') }}" alt="Smart Builders"></a>
								</div>
								<div class="fbox-content">
									<h3>Smart Builders</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><img src="{{ asset('css/images/icons/paint-brush.png') }}" alt="Quality Infrastructure"></a>
								</div>
								<div class="fbox-content">
									<h3>Quality Infrastructure</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
								</div>
							</div>
						</div>
					</div>

				</div> --}}

				<div class="section mb-0" style = "padding-bottom:20px !important;">
					<h3 style = "text-align:center;font-size:40px;color:#4A4A4A;">Beberapa Jenis Forklift Kami</h3>
				
				</div>
				<div class="container clearfix">
						<div id="oc-posts" style = "display:block !important;" class="owl-carousel posts-carousel carousel-widget posts-md" data-margin="20" data-nav="true" data-pagi="true" data-items-xs="1" data-items-xl="2">

							<div class="oc-item">
								<div class="entry">
									<div class="entry-image">
										<a data-lightbox="image"><img src="{{ asset('css/images/produk/jenis/1.jpg') }}" alt="Standard Post with Image"></a>
									</div>
									{{-- <div class="entry-title title-sm nott">
										<h3><a href="#">Upcoming Projects in Australia</a></h3>
									</div>
									<div class="entry-meta">
										<ul>
											<li>10th Feb 2021</li>
											<li><a href="#comments">13 Comments</a></li>
										</ul>
									</div>
									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
									</div> --}}
								</div>
							</div>
							
							<div class="oc-item">
								<div class="entry">
									<div class="entry-image">
										<a data-lightbox="image"><img src="{{ asset('css/images/produk/jenis/2.jpg') }}" alt="Standard Post with Image"></a>
									</div>
									{{-- <div class="entry-title title-sm nott">
										<h3><a href="#">Upcoming Projects in Australia</a></h3>
									</div>
									<div class="entry-meta">
										<ul>
											<li>10th Feb 2021</li>
											<li><a href="#comments">13 Comments</a></li>
										</ul>
									</div>
									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
									</div> --}}
								</div>
							</div>
							
							<div class="oc-item">
								<div class="entry">
									<div class="entry-image">
										<a data-lightbox="image"><img src="{{ asset('css/images/produk/jenis/3.jpg') }}" alt="Standard Post with Image"></a>
									</div>
									{{-- <div class="entry-title title-sm nott">
										<h3><a href="#">Upcoming Projects in Australia</a></h3>
									</div>
									<div class="entry-meta">
										<ul>
											<li>10th Feb 2021</li>
											<li><a href="#comments">13 Comments</a></li>
										</ul>
									</div>
									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
									</div> --}}
								</div>
							</div>
							<div class="oc-item">
								<div class="entry">
									<div class="entry-image">
										<a data-lightbox="image"><img src="{{ asset('css/images/produk/jenis/4.jpg') }}" alt="Standard Post with Image"></a>
									</div>
									{{-- <div class="entry-title title-sm nott">
										<h3><a href="#">Upcoming Projects in Australia</a></h3>
									</div>
									<div class="entry-meta">
										<ul>
											<li>10th Feb 2021</li>
											<li><a href="#comments">13 Comments</a></li>
										</ul>
									</div>
									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
									</div> --}}
								</div>
							</div>
						</div>
						
				  </div>
				<div class = "container clearfix mt-4" style = "text-align:center !important;width:100% !important;" >
					<p style = "text-align:center;width:100%;font-size:19px;">Forklift yang kami miliki terdiri dari Forklift Diesel dan Elektrik, Forklift-forklift tersebut memiliki berbagai macam kapasitas mulai dari 1,5 Ton sampai dengan 7 Ton.</p>
				</div>
				<div id="portfolio" class="portfolio row grid-container no-gutters">

					
					{{-- <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
						<div class="grid-inner">
							<div class="portfolio-image">
								<img src="{{ asset('css/images/produk/1.jpg') }}" alt="The Atmosphere">
								<div class="bg-overlay">
									<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
										<a href="{{url('/service')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-animate-out="zoomOut" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>Forklift 1,5 Ton</h3>
								
							</div>
						</div>
					</article>

					<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-illustrations">
						<div class="grid-inner">
							<div class="portfolio-image">
								<img src="{{ asset('css/images/produk/2.jpg') }}" alt="Wavelength Structure">
								<div class="bg-overlay">
									<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
										<a href="{{url('/service')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-animate-out="zoomOut" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>Forklift 2 Ton</h3>
							</div>
						</div>
					</article>

					<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-uielements">
						<div class="grid-inner">
							<div class="portfolio-image">
								<img src="{{ asset('css/images/produk/3.jpg') }}" alt="Greenhouse Garden">
								<div class="bg-overlay">
									<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
										<a href="{{url('/service')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-animate-out="zoomOut" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>Forklift 2,5 Ton</h3>
							</div>
						</div>
					</article>

					<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-icons pf-illustrations">
						<div class="grid-inner">
							<div class="portfolio-image">
								<img src="{{ asset('css/images/produk/4.jpg') }}" alt="Industrial Hub">
								<div class="bg-overlay">
									<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
										<a href="{{url('/service')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-animate-out="zoomOut" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>Forklift 7 Ton</h3>
							</div>
						</div>
					</article> --}}

					{{-- <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-media">
						<div class="grid-inner">
							<div class="portfolio-image">
								<img src="{{ asset('css/images/produk/1_hadapdepan.jpg') }}" alt="Corporate Headquarters">
								<div class="bg-overlay">
									<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
										<a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-animate-out="zoomOut" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>Corporate Headquarters</h3>
								<span>California, USA</span>
							</div>
						</div>
					</article>

					<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-illustrations">
						<div class="grid-inner">
							<div class="portfolio-image">
								<img src="{{ asset('css/images/produk/2_hadapdepan.jpg') }}" alt="Space Station">
								<div class="bg-overlay">
									<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
										<a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-animate-out="zoomOut" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>Space Station</h3>
								<span>Moscow, Russia</span>
							</div>
						</div>
					</article>

					<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-icons">
						<div class="grid-inner">
							<div class="portfolio-image">
								<img src="{{ asset('css/images/produk/3_hadapdepan.jpg') }}" alt="Bent Architecture">
								<div class="bg-overlay">
									<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
										<a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-animate-out="zoomOut" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>Bent Architecture</h3>
								<span>Melbourne, Australia</span>
							</div>
						</div>
					</article>

					<article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics">
						<div class="grid-inner">
							<div class="portfolio-image">
								<img src="{{ asset('css/images/produk/4_hadapdepan.jpg') }}" alt="Lakeview Center">
								<div class="bg-overlay">
									<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
										<a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-animate-out="zoomOut" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3>Lakeview Center</h3>
								<span>Auckland, New Zealand</span>
							</div>
						</div>
					</article> --}}

				</div>

				<a href="{{url('/service')}}" class="button button-3d border-bottom-0 button-full center text-right  font-weight-light font-primary mt-4" style="font-size: 26px;">
					<div class="container clearfix">
						{{-- Mau Lihat Forklift Yang Lain ? <strong>Klik Disini</strong> <i class="icon-angle-right" style="top:3px;"></i> --}}
						<strong>Klik Disini</strong> Untuk Lihat Gambar Dan Video Forklift Kami  <i class="icon-angle-right" style="top:3px;"></i>
						
					</div>
				</a>

				{{-- <div class="container topmargin-lg cleafix">

					<div class="row col-mb-50">
						<div class="col-md-8">

							<div class="tabs tabs-justify mb-0 clearfix" id="construction-tabs">

								<ul class="tab-nav clearfix">
									<li><a href="#construction-tab-1">Why Us?</a></li>
									<li><a href="#construction-tab-2">Work Ethic</a></li>
									<li><a href="#construction-tab-3">Team</a></li>
									<li><a href="#construction-tab-4">Locations</a></li>
								</ul>

								<div class="tab-container">

									<div class="tab-content clearfix" id="construction-tab-1">
										<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
										<div class="row col-mb-30">
											<div class="col-sm-6 col-lg-3 text-center">
												<div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span data-from="100" data-to="964" data-refresh-interval="50" data-speed="2000"></span></div>
												<h5>Floors Built</h5>
											</div>

											<div class="col-sm-6 col-lg-3 text-center">
												<div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span data-from="100" data-to="8514" data-refresh-interval="50" data-speed="2500"></span></div>
												<h5>Employees</h5>
											</div>

											<div class="col-sm-6 col-lg-3 text-center">
												<div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span data-from="100" data-to="458" data-refresh-interval="50" data-speed="3500"></span></div>
												<h5>Happy Clients</h5>
											</div>

											<div class="col-sm-6 col-lg-3 text-center">
												<div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span data-from="14" data-to="159" data-refresh-interval="15" data-speed="2700"></span></div>
												<h5>Cities Served</h5>
											</div>
										</div>
									</div>
									<div class="tab-content clearfix" id="construction-tab-2">
										<img src="{{ asset('css/images/projects/3.jpg') }}" width="260" alt="Image" class="img-thumbnail alignleft">
										<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
									</div>
									<div class="tab-content clearfix" id="construction-tab-3">
										<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
										<div class="row col-mb-30">
											<div class="col-sm-6 col-md-4">
												<ul class="iconlist mb-0">
													<li><i class="icon-ok"></i> 100% Assurance</li>
													<li><i class="icon-ok"></i> Hard Working</li>
													<li><i class="icon-ok"></i> Trustworthy</li>
												</ul>
											</div>
											<div class="col-sm-6 col-md-4">
												<ul class="iconlist mb-0">
													<li><i class="icon-ok"></i> Intelligent</li>
													<li><i class="icon-ok"></i> Always Curious</li>
													<li><i class="icon-ok"></i> Perfectionists</li>
												</ul>
											</div>
											<div class="col-sm-6 col-md-4">
												<ul class="iconlist mb-0">
													<li><i class="icon-ok"></i> Friendly &amp; Helpful</li>
													<li><i class="icon-ok"></i> Accomodating Nature</li>
													<li><i class="icon-ok"></i> Available 24x7</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="tab-content clearfix" id="construction-tab-4">

										<div class="row col-mb-30">
											<div class="col-md-7">
												<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
												<div class="row col-mb-30">
													<div class="col-md-6">
														<address>
															<strong>Headquarters:</strong><br>
															795 Folsom Ave, Suite 600<br>
															San Francisco, CA 94107<br>
														</address>
													</div>
													<div class="col-md-6">
														<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
														<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
														<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
													</div>
												</div>
											</div>
											<div class="col-md-5">
											</div>
										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="col-md-4">

							<div class="widget quick-contact-widget form-widget clearfix">
								<h4>Quick Quotation Form</h4>
								<div class="form-result"></div>
								<form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form mb-0">
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>
									<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
									<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
									<textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
									<input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
									<input type="hidden" name="prefix" value="quick-contact-form-">
									<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d m-0" value="submit">Send Email</button>
								</form>

							</div>

						</div>
					</div>

					<div class="line"></div>

					<div class="row col-mb-50">
						<div class="col-md-5">
							<h4>Clients Overview</h4>

							<p>We prize our Clients more than everything else. We strive to provide Quality Services to all our Clients on a Priority Basis. You are invited to join our Clients List and enjoy our Services. <a href="#">See more...</a></p>

							<ul class="clients-grid grid-2 grid-sm-3 mb-0">
								<li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{ asset('css/images/clients/1.jpg') }}" alt="Clients"></a></li>
								<li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{ asset('css/images/clients/2.jpg') }}" alt="Clients"></a></li>
								<li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{ asset('css/images/clients/3.jpg') }}" alt="Clients"></a></li>
								<li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{ asset('css/images/clients/4.jpg') }}" alt="Clients"></a></li>
								<li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{ asset('css/images/clients/5.jpg') }}" alt="Clients"></a></li>
								<li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{ asset('css/images/clients/6.jpg') }}" alt="Clients"></a></li>
							</ul>
						</div>

						<div class="col-md-7">
							<h4>Recent News</h4>

							<div id="oc-posts" class="owl-carousel posts-carousel carousel-widget posts-md" data-margin="20" data-nav="true" data-pagi="true" data-items-xs="1" data-items-xl="2">

								<div class="oc-item">
									<div class="entry">
										<div class="entry-image">
											<a href="{{ asset('css/images/blog/5.jpg') }}" data-lightbox="image"><img src="{{ asset('css/images/blog/5.jpg') }}" alt="Standard Post with Image"></a>
										</div>
										<div class="entry-title title-sm nott">
											<h3><a href="#">Upcoming Projects in Australia</a></h3>
										</div>
										<div class="entry-meta">
											<ul>
												<li>10th Feb 2021</li>
												<li><a href="#comments">13 Comments</a></li>
											</ul>
										</div>
										<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
										</div>
									</div>
								</div>

								<div class="oc-item">
									<div class="entry">
										<div class="entry-image">
											<div class="fslider" data-arrows="false" data-lightbox="gallery">
												<div class="flexslider">
													<div class="slider-wrap">
														<div class="slide"><a href="{{ asset('css/images/blog/2.jpg') }}" data-lightbox="gallery-item"><img src="{{ asset('css/images/blog/2.jpg') }}" alt="Standard Post with Gallery"></a></div>
														<div class="slide"><a href="{{ asset('css/images/blog/1.jpg') }}" data-lightbox="gallery-item"><img src="{{ asset('css/images/blog/1.jpg') }}" alt="Standard Post with Gallery"></a></div>
														<div class="slide"><a href="{{ asset('css/images/blog/3.jpg') }}" data-lightbox="gallery-item"><img src="{{ asset('css/images/blog/3.jpg') }}" alt="Standard Post with Gallery"></a></div>
													</div>
												</div>
											</div>
										</div>
										<div class="entry-title title-sm nott">
											<h3><a href="#">Real Estate just got a little more Expensive</a></h3>
										</div>
										<div class="entry-meta">
											<ul>
												<li>24th Feb 2021</li>
												<li><a href="#comments">21 Comments</a></li>
											</ul>
										</div>
										<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem!</p>
										</div>
									</div>
								</div>

								<div class="oc-item">
									<div class="entry">
										<div class="entry-image">
											<a href="{{ asset('css/images/blog/4.jpg') }}" data-lightbox="image"><img src="{{ asset('css/images/blog/4.jpg') }}" alt="Standard Post with Image"></a>
										</div>
										<div class="entry-title title-sm nott">
											<h3><a href="#">Global Excellence Construction Award</a></h3>
										</div>
										<div class="entry-meta">
											<ul>
												<li>5th May 2021</li>
												<li><a href="#comments">6 Comments</a></li>
											</ul>
										</div>
										<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>

				</div> --}}

				{{-- <div class="line topmargin-sm"></div> --}}

				{{-- <div class="section bg-transparent mt-0 p-0 footer-stick">
					<div class="container clearfix">

						<div class="row">
							<div class="col-lg-7">
								<img src="{{ asset('css/images/services/bottom-trust.jpg') }}" alt="Bottom Trust">
							</div>
							<div class="col-lg-5 topmargin-sm">
								<div class="heading-block border-bottom-0">
									<h2>You're in Good Hands.</h2>
									<span class="ls1">Five Points that define Our Reliability.</span>
								</div>

								<ul class="iconlist iconlist-large iconlist-color">
									<li><i class="icon-ok"></i> Market Leader since 1915</li>
									<li><i class="icon-ok"></i> Positive Results within Deadlines</li>
									<li><i class="icon-ok"></i> 100% Reliability &amp; Guarantee</li>
									<li><i class="icon-ok"></i> Dedicated Professional Team of 500+</li>
									<li><i class="icon-ok"></i> Unmatched After Project Completion Support</li>
								</ul>
							</div>
						</div>

					</div>
				</div> --}}
			</div>
		</section><!-- #content end -->

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

	window.onscroll = function() {myFunction(
		
	)};

  var scrolled = 10;
  document.getElementById("myBar").style.width = scrolled + "%";

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = ((winScroll / height) * 100) + 10;
  document.getElementById("myBar").style.width = scrolled + "%";
} 


// var observer = new IntersectionObserver(function() {
// 	// callback code
// 	alert("test");
// }, { root: document.querySelector('#section_hubungi_kami') });

// // observing a target element
// observer.observe(document.querySelector("#section_hubungi_kami"));

// // Remove the transition class
// const square = document.querySelector('#section_hubungi_kami');
// square.classList.remove('#section_hubungi_kami');

// // Create the observer, same as before:
// const observer = new IntersectionObserver(entries => {
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       square.classList.add('#section_hubungi_kami');
//       return;
//     }

//     square.classList.remove('#section_hubungi_kami');
//   });
// });

// observer.observe(document.querySelector('#section_hubungi_kami'));

</script>