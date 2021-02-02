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

    <div class="blog-area">
        <section class="blog-content-detail">
            <div class="container-fluid">
                <div class="row no-gutters d-flex justify-content-center">
                    <div class="col-md-12 col-sm-12">
                        <?php foreach ($blog as $b) :  ?>
                            <div class="card" style="margin: 0; padding: 0;">
                                <img class="card-img-top img-blog-detail" src="<?= base_url("/assets") ?>/img/upload/blog/header_image/<?= $b['header_image'] ?>" alt="Card image cap">
                                <div class="card-body text-justify">
                                    <h3 class="card-title"><?= $b['title'] ?></h3>
                                    <h5 class="card-subtitle mb-2 text-muted">by <?= $b['created_by'] ?> | <small><?= date('F d, Y', strtotime($b['created_date'])) ?></small></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Keyword:
                                        <span><?= $b['keyword'] ?></span>
                                    </h6>
                                    <div class="card-text"><?= $b['content'] ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- <div class="card" style="margin: 0; padding: 0;">
                            <img class="card-img-top img-blog-detail" src="<?= base_url("/assets") ?>/img/upload/blog/header_image/<?= $blog['header_image'] ?>" alt="Card image cap">
                            <div class="card-body text-justify">
                                <h3 class="card-title"><?= $blog['title'] ?></h3>
                                <h5 class="card-subtitle mb-2 text-muted">by <?= $created_by['name'] ?> | <small><?= date('F d, Y', strtotime($blog['created_date'])) ?></small></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Keyword:
                                    <span><?= $blog['keyword'] ?> | </span>
                                </h6>
                                <div class="card-text"><?= $blog['content'] ?></div>
                            </div>
                        </div> -->
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