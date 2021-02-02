<!DOCTYPE html>
<html class="no-js" lang="zxx" style="scroll-behavior: smooth;">

<head>
    <?php $this->load->view('component/head') ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WC4HXQZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <?php $this->load->view('component/header') ?>
    </header>

    <div class="contact-area">
        <section class="contact-heading">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-md-12 text-center mb-5">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </section>
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

                        <div class="card">
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
                                        <i class="fa fa-globe" style="font-size: 1.2em;"></i> <a href="http://renomeet.com/"> &nbsp; www.renomeet.com</a></p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-envelope" style="font-size: 1.2em;"></i> <a href="mailto:sales@renocloud.net">&nbsp; sales@renotech.co.id</a></p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-phone" style="font-size: 1.2em;"></i> <a href="tel://02129070488">&nbsp; (021) 2907 - 0488</a></p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-whatsapp" style="font-size: 1.2em;"></i> <a href="https://api.whatsapp.com/send?phone=6282189008890">&nbsp; (+62) 821 8900 8890 (WhatsApp)</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- footer start -->
    <?php $this->load->view('component/js') ?>
    <footer class="footer">
        <!-- Footer -->
        <?php $this->load->view('component/footer') ?>
    </footer>
    <!--/ footer end  -->
</body>

</html>