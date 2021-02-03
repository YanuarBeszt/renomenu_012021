<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/css/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/css/settings.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/css/blog.css" />
</head>

<body>
    <!--This is a Pinterest-Influenced Blog List template feature thumbnail images and excerpts, as well as a 'Read More' link-->
    <!--Images from unsplash.com-->
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

        <div class="container">
            <div class="title animated fadeInDown" id="title">
                Your Blog Title
            </div>
            <ul class="blog-post columns-3">
                <li>
                    <img src="https://ununsplash.imgix.net/photo-1414788020357-3690cfdab669?q=75&fm=jpg&s=da7d3842604f06bf5c6ded7f4fe7aeed" />
                    <h3>‘Order Sekaligus’ - Order Food from Multiple Restaurants in One Location</h3>
                    <div class="info">
                        <div class="athor-blog">
                            <span>Delivery</span>
                        </div>
                        <div class="date-blog">
                            <span>20 Januari 2021</span>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="https://unsplash.imgix.net/photo-1415889678233-eb900aeee9e1?q=75&fm=jpg&s=a41f4d6b1848cd673323fa4ee17da470" />
                    <h3>Blog Post Two</h3>
                    <div class="info">
                        <div class="athor-blog">
                            <span>Delivery</span>
                        </div>
                        <div class="date-blog">
                            <span>20 Januari 2021</span>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="https://unsplash.imgix.net/photo-1414542563971-94513793d046?q=75&fm=jpg&s=8fbfdbbec683a6b4634e558f7db67ee7" />
                    <h3>Blog Post Three</h3>
                    <div class="info">
                        <div class="athor-blog">
                            <span>Delivery</span>
                        </div>
                        <div class="date-blog">
                            <span>20 Januari 2021</span>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="https://ununsplash.imgix.net/photo-1416339134316-0e91dc9ded92?q=75&fm=jpg&s=883a422e10fc4149893984019f63c818" />
                    <h3>Blog Post Four</h3>
                    <div class="info">
                        <div class="athor-blog">
                            <span>Delivery</span>
                        </div>
                        <div class="date-blog">
                            <span>20 Januari 2021</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Footer Section -->

        <section class="footer-section section-padding-top" style="background-color: #1A1A1A; padding-top: 80px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 ">
                        <span class="contact-title p1" style="color: white;">Tentang Kami</span>
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
                        <span class="contact-title p1" style="color: white;">Kontak Kami</span>
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