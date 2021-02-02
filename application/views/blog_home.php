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
        <section class="blog-heading">
            <div class="container-fluid px-0">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
                        $i = 0;
                        foreach ($recent_blog as $rb) {
                            if ($i == 0) {
                                $class = 'active';
                            } else {
                                $class = '';
                            }
                        ?>
                            <li data-target="#carouselExampleControls" data-slide-to="<?= $i ?>" class="<?= $class ?>"></li>
                        <?php $i++;
                        } ?>
                    </ol>
                    <div class="carousel-inner bg-info" role="listbox">
                        <?php
                        $i = 0;
                        foreach ($recent_blog as $rb) {
                            if ($i == 0) {
                                $class = 'carousel-item recent-post active';
                            } else {
                                $class = 'carousel-item recent-post';
                            }
                        ?>
                            <div class="<?= $class; ?>">
                                <div class="d-flex align-items-center justify-content-center min-vh-100">
                                    <a href="<?= base_url(); ?>blog/action_detail/<?= $rb['id'] ?>">
                                        <img src="<?= base_url("/assets") ?>/img/upload/blog/header_image/<?= $rb['header_image'] ?>" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block w-100">
                                            <h3 class="card-title"><?= $rb['title'] ?></h3>
                                            <div class="card-text" style="color: white;"><?= word_limiter($rb['content'], 10) ?></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php $i++;
                        } ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <section class="blog-content">
                <!-- <div class="container-fluid"> -->
                <!-- <div class="row no-gutters text-center"> -->
                <!-- <div class="col-md-12">
                    <h1 class="text-center">News & Blog</h1>
                </div> -->
                <!-- </div> -->
                <!-- <div class="row no-gutters d-flex justify-content-center">
                    <div class="col-md-12 col-sm-12">
                        <nav class="navbar navbar-expand-sm navbar-light bg-light blog-navbar">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sort By
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Nama (A-Z)</a>
                                            <a class="dropdown-item" href="#">Nama (Z-A)</a>
                                            <a class="dropdown-item" href="#">Terakhir Dibuat</a>
                                        </div>
                                    </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0" method="POST">
                                    <input class="form-control mr-sm-2" type="search" name="searchKeyword" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
                    </div>
                </div> -->
                <!-- <div class="row no-gutters"> -->
                <?php if (empty($blog)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data blog tidak ditemukan
                    </div>
                <?php endif; ?>
                <div class="card-columns">
                    <?php foreach ($blog as $b) : ?>
                        <div class="card blog-post">
                            <a href="<?= base_url(); ?>blog/action_detail/<?= $b['id'] ?>">
                                <img src="<?= base_url("/assets") ?>/img/upload/blog/header_image/<?= $b['header_image'] ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body text-justify">
                                <h3 class="card-title">
                                    <a href="<?= base_url(); ?>blog/action_detail/<?= $b['id'] ?>"><?= $b['title'] ?></a>
                                </h3>
                                <h5 class="card-subtitle mb-2 text-muted">by <?= $b['created_by'] ?> | <small class="text-muted"><?= date('F d, Y', strtotime($b['created_date'])) ?></small></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Keyword:

                                    <span><?= $b['keyword'] ?></span>

                                </h6>
                                <a href="<?= base_url(); ?>blog/action_detail/<?= $b['id'] ?>" class="card-text">
                                    <?= word_limiter($b['content'], 20) ?>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- </div> -->
                <div class="row no-gutters d-flex justify-content-center">
                    <?= $this->pagination->create_links(); ?>
                </div>
                <!-- </div> -->
            </section>
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