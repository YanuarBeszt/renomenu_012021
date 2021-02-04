<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title></title>
	<!-- Plugins CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/plugins/bootstrap-4.3.1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/plugins/meanmenu/meanmenu.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/plugins/slick-1.8.1/slick.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/plugins/fancybox-master/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/plugins/aos-animation/aos.css" />
	<!-- fonts -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/fonts/ep-icon-fonts/css/style.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/fonts/fontawesome-5/css/all.min.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/fonts/typography-font/typo-fonts.css" />
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/css/settings.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/css/style.css" />
</head>

<body>
	<div class="site-wrapper">
		<!-- Header Starts -->
		<header class="site-header position-relative d-none d-lg-block">
			<div class="container">
				<div class="row justify-content-between align-items-center position-relative">
					<div class="col-sm-3 col-6 col-lg-2 col-xl-2 order-lg-1">
						<!-- Brand Logo -->
						<div class="brand-logo">
							<a href="">
								<img class="logo" src="<?= base_url() ?>assets/landing-page/image/renomenu-logo-21.png" alt="logo-renomenu">
							</a>
						</div>
					</div>
					<!-- Menu Block -->
					<div class=" col-6 col-sm-1 col-lg-6 col-xl-8   position-static order-lg-2">
						<div class="main-navigation ">
							<ul class="main-menu">
								<li class="menu-item"><a href="">Beranda</a></li>
								<li class="menu-item"><a href="">Pusat Bantuan</a></li>
								<li class="menu-item"><a href="">Blog</a></li>
								<li class="menu-item"><a href="">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Mobile menu Header Starts -->
		<header class="mobile-header d-lg-none ">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-4 col-7">
						<a href="">
							<img class="logo" style="width: 100px; width: auto;" src="<?= base_url() ?>assets/landing-page/image/renomenu-logo-21.png" alt="logo-renomenu">
						</a>
					</div>
					<div class="col-md-8 col-5 text-right">
						<div class="header-top-widget">
							<ul class="header-links">
								<li class="single-link">
									<a href="#" class="link-icon hamburger-icon off-canvas-btn"><i class="icon icon-menu-34"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!--Off Canvas Navigation Start-->
		<aside class="off-canvas-wrapper">
			<div class="btn-close-off-canvas">
				<i class="icon icon-simple-remove"></i>
			</div>
			<div class="off-canvas-inner">
				<!-- mobile menu start -->
				<div class="mobile-navigation">
					<!-- mobile menu navigation start -->
					<nav class="off-canvas-nav">
						<ul class="mobile-menu">
							<li class="menu-item"><a href="">Beranda</a></li>
							<li class="menu-item"><a href="">Pusat Bantuan</a></li>
							<li class="menu-item"><a href="">Blog</a></li>
							<li class="menu-item"><a href="">Contact</a></li>
						</ul>
					</nav>
					<!-- mobile menu navigation end -->
				</div>
				<!-- mobile menu end -->
			</div>
		</aside>
		<!--Off Canvas Navigation End-->

		<!-- Banner Section -->

		<section style="padding-top: 60px;" class="hero-area position-relative pb-lg--0">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-lg-9 col-xl-8  pb-lg--90 pb-xl--0 order-2 order-md-1">
						<div class="hero-content">
							<h3 class="title mb--30">
								Aplikasi Menu Elektronik, <br>
								Order dengan pembayaran tanpa terpaku <br>
								pada aplikasi tertentu dalam satu perangkat
							</h3>
						</div>

						<div class="hero-btns mt--40">
							<a href="">
								<img class="googleplayblack" src="<?= base_url() ?>assets/landing-page/image/google-play.png" alt="download android app">
							</a>
						</div>
					</div>
					<div class="banner-image">
						<img class="image1" src="<?= base_url() ?>assets/landing-page/image/banner2.png" alt="banner-image1" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="300" data-aos-once="true">

						<img class="image2" src="<?= base_url() ?>assets/landing-page/image/coffee@3x.png" alt="banner-image1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true">

						<img class="image3" src="<?= base_url() ?>assets/landing-page/image/fries@3x.png" alt="banner-image1" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">

						<img class="image4" src="<?= base_url() ?>assets/landing-page/image/boxfastfood@3x.png" alt="banner-image1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true">

						<img class="image5" src="<?= base_url() ?>assets/landing-page/image/soda@3x.png" alt="banner-image1" data-aos="fade-right" data-aos-duration="1300" data-aos-delay="200" data-aos-once="true">

						<img class="image6" src="<?= base_url() ?>assets/landing-page/image/sandwich@3x.png" alt="banner-image1" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="350" data-aos-once="true">

						<img class="image7" src="<?= base_url() ?>assets/landing-page/image/rendang.png" alt="banner-image1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true">

						<img class="image8" src="<?= base_url() ?>assets/landing-page/image/martabakmanis.png" alt="banner-image1" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300" data-aos-once="true">

						<img class="image9" src="<?= base_url() ?>assets/landing-page/image/head-08.png" alt="banner-image1" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="200" data-aos-once="true">

						<img class="image10" src="<?= base_url() ?>assets/landing-page/image/head-07.png" alt="banner-image1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true">

						<img class="image11" src="<?= base_url() ?>assets/landing-page/image/head-04.png" alt="banner-image1" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="300" data-aos-once="true">

						<img class="image12" src="<?= base_url() ?>assets/landing-page/image/head-03.png" alt="banner-image1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">
					</div>
				</div>
			</div>
		</section>

		<!-- Feature Secction -->
		<section class="feature-section section-padding-top">
			<div class="container">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="<?= base_url() ?>assets/landing-page/image/banner-event.png" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?= base_url() ?>assets/landing-page/image/banner-event.png" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?= base_url() ?>assets/landing-page/image/banner-event.png" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<div class="feature">
					<div class="element-feature">
						<img class="menu-image" src="<?= base_url() ?>assets/landing-page/image/delivery button.png" alt="delivery button">
					</div>
					<div class="element-feature">
						<img class="menu-image" src="<?= base_url() ?>assets/landing-page/image/dine in button.png" alt="dine in button">
					</div>
					<div class="element-feature">
						<img class="menu-image" src="<?= base_url() ?>assets/landing-page/image/takeAway button.png" alt="takeAway button">
					</div>
					<div class="element-feature">
						<img class="menu-image" src="<?= base_url() ?>assets/landing-page/image/qr button.png" alt="qr button">
					</div>
				</div>
			</div>
		</section>

		<!-- Content Section 01 -->
		<section class="content-section section-padding-top">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-lg-8 col-xl-7">
						<div id="carouselIndicators" class="help-image carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselIndicators" data-slide-to="1"></li>
								<li data-target="#carouselIndicators" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="<?= base_url() ?>assets/landing-page/image/banner-help.png" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="<?= base_url() ?>assets/landing-page/image/banner-help.png" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="<?= base_url() ?>assets/landing-page/image/banner-help.png" alt="Third slide">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-4 col-xl-5">
						<a href="">
							<div class="blog">
								<img class="blog_image" src="<?= base_url() ?>assets/landing-page/image/restauran.jpeg" alt="restauran">
								<div class="blog_text">
									<h6>10 restauran mewah di jakarta</h6>
									<div class="athor-blog">
										<span>admin</span>
									</div>
									<div class="date-blog">
										<span>20 Januari 2021</span>
									</div>
								</div>
							</div>
						</a>
						<a href="">
							<div class="blog">
								<img class="blog_image" src="<?= base_url() ?>assets/landing-page/image/restauran.jpeg" alt="restauran">
								<div class="blog_text">
									<h6>10 restauran mewah di jakarta</h6>
									<div class="athor-blog">
										<span>admin</span>
									</div>
									<div class="date-blog">
										<span>20 Januari 2021</span>
									</div>
								</div>
							</div>
						</a>
						<a href="">
							<div class="blog">
								<img class="blog_image" src="<?= base_url() ?>assets/landing-page/image/restauran.jpeg" alt="restauran">
								<div class="blog_text">
									<h6>10 restauran mewah di jakarta</h6>
									<div class="athor-blog">
										<span>admin</span>
									</div>
									<div class="date-blog">
										<span>20 Januari 2021</span>
									</div>
								</div>
							</div>
						</a>
						<a href="">
							<div class="blog">
								<img class="blog_image" src="<?= base_url() ?>assets/landing-page/image/restauran.jpeg" alt="restauran">
								<div class="blog_text">
									<h6>10 restauran mewah di jakarta</h6>
									<div class="athor-blog">
										<span>admin</span>
									</div>
									<div class="date-blog">
										<span>20 Januari 2021</span>
									</div>
								</div>
							</div>
						</a>
						<a href="">
							<div class="blog" style="display : flex; align-items : center; justify-content: center;">
								<p>More</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer Section -->

		<section class="footer-section section-padding-top" style="background-color: #1A1A1A; padding-top: 80px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 ">
						<span class="p1" style="color: white; font-size:16pt; font-weight:600; padding-bottom:20px;">Tentang Kami</span>
						<p class="p1" style="color: white;">
							Aplikasi Menu Elektronik, Order dengan
							pembayaran tanpa terpaku pada aplikasi
							tertentu dalam satu perangkat.
						</p>
						<a href="">
							<img style="width: 170px; height: auto;" src="<?= base_url() ?>assets/landing-page/image/googleplay-white.png" alt="download android app">
						</a>
						<br>
						<br>
						<a href=""><i class="fab fa-facebook fa-3x" style="color: white;"></i></a>
						<a href="" style="padding-left: 15px;"><i class=" fab fa-instagram fa-3x" style="color: white;"></i></a>
						<a href="" style="padding-left: 15px;"><i class="fab fa-youtube fa-3x" style="color: white;"></i></a>
					</div>
					<div class="col-lg-3">
						<img style="width: 140px !important; width: auto; padding-bottom: 20px;" src="<?= base_url() ?>assets/landing-page/image/renomenu-logo-21.png" alt="logo-renomenu">
						<div class="footer-address" style="color: white;">
							<a href="" style="padding-bottom: 10px;"><i class="fas fa-chevron-right fa-lg"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">Beranda</span></a> <br>
							<a href="" style="padding-bottom: 10px;"><i class="fas fa-chevron-right fa-lg"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">Fitur</span></a><br>
							<a href="" style="padding-bottom: 10px;"><i class="fas fa-chevron-right fa-lg"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">Blog</span></a><br>
							<a href="" style="padding-bottom: 10px;"><i class="fas fa-chevron-right fa-lg"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">Pusat
									Bantuan</span></a><br>
							<a href="" style="padding-bottom: 10px;"><i class="fas fa-chevron-right fa-lg"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">Kontak Kami</span></a>
						</div>
					</div>
					<div class="col-lg-5">
						<span class="p1" style="color: white; font-size:16pt; font-weight:600; padding-bottom:20px;">Kontak Kami</span>
						<div class="footer-address">
							<a href="" style="padding-bottom: 10px;"><i class="fas fa-globe fa-lg" style="color: white;"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">renotechmenu.com</span></a> <br>
							<a href="" style="padding-bottom: 10px;"><i class="fas fa-phone-alt fa-lg" style="color: white;"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">(021)
									2158-4028</span></a><br>
							<a href="" style="padding-bottom: 10px;"><i class="fab fa-whatsapp fa-lg" style="color: white;"></i></i><span style="color: white; padding-left: 12px; font-size: medium;">(+62)
									821-8900-8890 (Click to open Whatsapp)</span></a><br>
							<a href="" style="padding-bottom: 10px;"><i class="fas fa-paper-plane fa-lg" style="color: white;"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">sales@renotech.co.id</span></a>
						</div>
					</div>
				</div>
				<br>
				<br>
				<hr style="border: 0; border-top: 1px solid #fff;">
				<div class="cta-wrapper">
					<p>
						Copyright ©2021 All rights reserved | PT Ace Global Consulting & Integration | Member of Indomaret Group.
					</p>
					<div class="cta-btns mb--30">
						<a href="#"><span style="color: #FF684D;">Terms and Condition</span></a>
						<a href="#"><span style="color: #FF684D;">Privacy Policy</span></a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- Vendor JS-->
	<script src="<?= base_url() ?>assets/landing-page/plugins/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/landing-page/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="<?= base_url() ?>assets/landing-page/plugins/bootstrap-4.3.1/js/bootstrap.bundle.js"></script>

	<!-- Plugins JS -->
	<script src="<?= base_url() ?>assets/landing-page/plugins/meanmenu/jquery.meanmenu.js"></script>
	<script src="<?= base_url() ?>assets/landing-page/plugins/slick-1.8.1/slick.min.js"></script>
	<script src="<?= base_url() ?>assets/landing-page/plugins/fancybox-master/jquery.fancybox.min.js"></script>
	<script src="<?= base_url() ?>assets/landing-page/plugins/aos-animation/aos.js"></script>

	<!-- Custom JS -->
	<script src="<?= base_url() ?>assets/landing-page/js/active.js"></script>
</body>

</html>