<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renomenu | Don't Worry To Be Hungry!</title><script type="text/javascript">
    const BASE_URL = "<?= base_url() ?>";
</script>
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing-page/plugins/bootstrap-4.3.1/css/bootstrap.min.css" />
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
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery-ui/jquery-ui.js"></script>
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
                                <li class="menu-item"><a href="<?= base_url() ?>">Beranda</a></li>
                                <li class="menu-item"><a href="<?= base_url() ?>Bantuan/kategori">Pusat Bantuan</a></li>
                                <li class="menu-item"><a href="<?= base_url() ?>list/Blog/">Blog</a></li>
                                <li class="menu-item"><a href="<?= base_url() ?>Contact">Contact</a></li>
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
                            <li class="menu-item"><a href="<?= base_url() ?>">Beranda</a></li>
                            <li class="menu-item"><a href="<?= base_url() ?>Bantuan/kategori">Pusat Bantuan</a></li>
                            <li class="menu-item"><a href="<?= base_url() ?>list/Blog/">Blog</a></li>
                            <li class="menu-item"><a href="<?= base_url() ?>Contact">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
            </div>
        </aside>
        <!--Off Canvas Navigation End-->

        <!--Off Canvas Navigation End-->
        <div class="search-area">
            <form id="search-form">
                <div class="search">
                    <input type="text" name="search" id="search" class="round" style="padding-right: 40px; padding-left:20px;" placeholder="Search" />
                    <button type="submit" class="corner" /><i class="fa fa-search"></i></button>
                </div>
            </form>
            <img class="search-background" src="<?= base_url() ?>assets/landing-page/image/Rijsttafel.jpg" alt="">
        </div>

        <div class="container">
            <div class="bread-crumb">
                <span><a href="<?= base_url() ?>"><i class="fa fa-home"></i></a><i class="fas fa-chevron-right"></i></span><span><a href="<?= base_url() ?>list/Blog/">Blog</a><i class="fas fa-chevron-right"></i></span><span id=""><a href="<?= base_url() ?>Blog/artikel/<?= $blog[0]["id"]; ?>"><?= $blog[0]["title"]; ?></a></span>
            </div>
        </div>

        <div class="container">
            <div class="inner-blog">
                <div class="blog-title animated fadeInDown" style="padding-top: 10px !important;">
                    <?= $blog[0]["title"]; ?>
                </div>
                <div class="category">
                    <div class="cat-item">
                        <span><?= $blog[0]["name"]; ?></span>
                    </div>
                    <i class="fa fa-circle" style="font-size: 6px;"></i>
                    <span style="font-size: 11pt; padding-left:10px;"><?= date("d-m-Y", strtotime($blog[0]["date"])); ?></span>
                </div>
                <img style="width: 100%; height:400px; object-fit:cover; padding-bottom:40px;" src="<?= base_url() ?>assets/images/upload/blog/header_image/<?= $blog[0]["header_image"]; ?>" alt="<?= $blog[0]["header_image"]; ?>">
                <?= $blog[0]["content"]; ?>
                <br>
                <div class="button-share">
                    <p>Bagikan artikel</p>
                    <a href="">
                        <img class="btn-share" src="<?= base_url();?>assets/landing-page/image/wa.png" alt="wa-share">
                    </a>
                    <a href="">
                        <img class="btn-share" src="<?= base_url();?>assets/landing-page/image/twitter.png" alt="twitter-share">
                    </a>
                    <a href="">
                        <img class="btn-share" src="<?= base_url();?>assets/landing-page/image/facebook.png" alt="facebook-share">
                    </a>
                    <a href="">
                        <img class="btn-share" src="<?= base_url();?>assets/landing-page/image/share.png" alt="button-share">
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="title animated fadeInDown" style="padding-top: 50px !important; padding-bottom:20px;">
                Artikel Terbaru Kami
            </div>
            <div class="row">
                <?php foreach ($blognew as $key) : ?>
                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <a href="">
                            <div class="new-blog">
                                <img class="blog_image" src="<?= base_url() ?>assets/images/upload/blog/header_image/<?= $key->header_image; ?>" alt="<?= $key->header_image; ?>">
                                <div class="blog_text">
                                    <h6><?= $key->title; ?></h6>
                                    <div class="athor-blog">
                                        <span>admin</span>
                                    </div>
                                    <div class="date-blog">
                                        <span><?= date("d-m-Y", strtotime($key->created_date)); ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Footer Section -->

        <section class="footer-section section-padding-top" style="background-color: #1A1A1A; padding-top: 80px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 ">
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
                    <div class="col-md-3 col-lg-3">
                        <img style="width: 140px !important; width: auto; padding-bottom: 20px;" class="logo-footer" src="<?= base_url() ?>assets/landing-page/image/renomenu-logo-21.png" alt="logo-renomenu">
                        <div class="footer-address" style="color: white;">
                            <a href="<?= base_url() ?>" style="padding-bottom: 10px;"><i class="fas fa-chevron-right fa-lg"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">Beranda</span></a> <br>
                            <a href="<?= base_url() ?>#fitur" style="padding-bottom: 10px;"><i class="fas fa-chevron-right fa-lg"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">Fitur</span></a><br>
                            <a href="<?= base_url() ?>Blog/" style="padding-bottom: 10px;"><i class="fas fa-chevron-right fa-lg"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">Blog</span></a><br>
                            <a href="<?= base_url() ?>" style="padding-bottom: 10px;"><i class="fas fa-chevron-right fa-lg"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">Pusat
                                    Bantuan</span></a><br>
                            <a href="<?= base_url() ?>Contact" style="padding-bottom: 10px;"><i class="fas fa-chevron-right fa-lg"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">Kontak Kami</span></a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5">
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
    <script type="text/javascript" src="<?= base_url() . 'assets/landing-page/js/custom.js?' . 'random=' . uniqid() ?> "></script>

    <!-- Vendor JS-->
    <script src="<?= base_url() ?>assets/landing-page/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/landing-page/plugins/jquery/jquery-migrate.min.js"></script>
    <script src="<?= base_url() ?>assets/landing-page/plugins/bootstrap-4.3.1/js/bootstrap.bundle.js"></script>
    <!-- Plugins JS -->
    <script src="<?= base_url() ?>assets/landing-page/plugins/slick-1.8.1/slick.min.js"></script>
    <script src="<?= base_url() ?>assets/landing-page/plugins/fancybox-master/jquery.fancybox.min.js"></script>
    <script src="<?= base_url() ?>assets/landing-page/plugins/aos-animation/aos.js"></script>
    <!-- Custom JS -->
    <script src="<?= base_url() ?>assets/landing-page/js/active.js"></script>
</body>

</html>