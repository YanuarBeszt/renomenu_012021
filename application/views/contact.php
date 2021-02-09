<!DOCTYPE html>
<html class="no-js" lang="zxx" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><script type="text/javascript">
    const BASE_URL = "<?= base_url() ?>";
</script>
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
        <div class="search-area">
            <div class="contact-title">
                <h5 style="text-align: center; color:white;">KONTAK KAMI</h5>
                <p style="text-align: center; color:white;">Kami siap menjawab setiap pertanyaan dan konsultasi yang Anda ajukan terkait Renomenu</p>
            </div>
            <img style="filter: brightness(50%);" class="search-background" src="<?= base_url() ?>assets/landing-page/image/office.jpg" alt="">
        </div>

        <div class="contact-area">
            <div class="container">
                <section class="contact-content">
                    <div class="container-fluid">
                        <?php if ($this->session->flashdata()) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= $this->session->flashdata('flashContact'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="inputEmail">Email Address<span class="red-stars">*</span></label>
                                            <input class="form-control" type="email" name="contactEmail" id="contactEmail" placeholder="youremail@example.com">
                                            <small class="form-text text-danger"><?= form_error('contactEmail') ?></small>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="inputName">Name<span class="red-stars">*</span></label>
                                            <input class="form-control" type="text" name="contactName" id="contactName" placeholder="Your Name">
                                            <small class="form-text text-danger"><?= form_error('contactName') ?></small>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="inputCompany">Company Name<span class="red-stars">*</span></label>
                                            <input class="form-control" type="text" name="contactCompany" id="contactCompany" placeholder="Your Company Name">
                                            <small class="form-text text-danger"><?= form_error('contactCompany') ?></small>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="inputPhone">Phone Number<span class="red-stars">*</span></label>
                                            <input class="form-control" type="tel" name="contactPhone" id="contactPhone" placeholder="08xxx">
                                            <small class="form-text text-danger"><?= form_error('contactPhone') ?></small>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="inputSubject">Subject<span class="red-stars">*</span></label>
                                            <input class="form-control" type="text" name="contactSubject" id="contactSubject" placeholder="Subject">
                                            <small class="form-text text-danger"><?= form_error('contactSubject') ?></small>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="inputMessage">Message<span class="red-stars">*</span></label>
                                            <textarea id="inputMessage" class="form-control" name="contactMessage" rows="8" style="resize: none;"></textarea>
                                            <small class="form-text text-danger"><?= form_error('contactMessage') ?></small>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit " class="btn btn-primary contactSubmit">Send</button>
                                    </div>

                                </form>
                            </div>
                            <div class="col-md-6">

                                <div class="card" style="border: none; margin-left:20px;">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1498964420753!2d106.73707311477186!3d-6.11051156162921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f576ed9e5d79%3A0xfa24f66ccc8f8e89!2sRenotech%20-%20PT%20Ace%20Global%20Consulting%20%26%20Integration%20(New%20Office)!5e0!3m2!1sid!2sid!4v1607272600425!5m2!1sid!2sid" height="350" frameborder="0" style="border:0; width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    <h4 class="card-title mt-5 mb-4 text-left">Head Office - Indomaret Building</h4>
                                    <ul class="card-text text-left">
                                        <li>
                                            <a href="https://g.page/renotechid?share">
                                                <h5><i class="fa fa-location-arrow"></i> PT ACE GLOBAL CONSULTING AND INTEGRATION (AGCI)</h5>
                                                <p>
                                                    Menara Indomaret, Jl Boulevard Pantai Indah Kapuk – Lantai 15
                                                    Kel. Kamal Utara, Kec. Penjaringan
                                                    Jakarta Utara, DKI Jakarta 14470 (New Office)
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://g.page/renotechid?share">
                                                <p><i class="fa fa-location-arrow"></i> Gedung Indomaret, Jl. Terusan Angkasa Blok B2 Kav.1 – 7th floor,
                                                    Gunung Sahari Selatan – Kemayoran,
                                                    Jakarta Pusat 10610 (Previous Office)</p>
                                            </a>
                                        </li>
                                        <li>
                                            <p>
                                                <i class="fa fa-globe" style="font-size: 1.2em;"></i> <a href="http://renotechmenu.com/"> &nbsp; www.renomeet.com</a>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <i class="fa fa-envelope" style="font-size: 1.2em;"></i> <a href="mailto:sales@renocloud.net">&nbsp; sales@renotech.co.id</a>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <i class="fa fa-phone" style="font-size: 1.2em;"></i> <a href="tel://02129070488">&nbsp; (021) 2907 - 0488</a>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <i class="fab fa-whatsapp" style="font-size: 1.2em;"></i> <a href="https://api.whatsapp.com/send?phone=6282189008890">&nbsp; (+62) 821 8900 8890 (WhatsApp)</a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Footer Section -->

        <section class="footer-section section-padding-top" style="background-color: #1A1A1A; padding-top: 80px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 ">
                        <p class="" style="color: white;">Tentang Kami</p>
                        <p class="p1" style="color: white; position:relative;">
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
                            <a href="<?= base_url() ?>Blog" style="padding-bottom: 10px;"><i class="fas fa-chevron-right fa-lg"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">Blog</span></a><br>
                            <a href="<?= base_url() ?>Bantuan/kategori" style="padding-bottom: 10px;"><i class="fas fa-chevron-right fa-lg"></i></i><span style="color: white; padding-left: 10px; font-size: medium;">Pusat
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