<!-- <div class="header-area ">
    <div id="sticky-header" class="main-header-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="logo">
                        <a href="<?= base_url() ?>">
                            <img src="<?= base_url("/assets") ?>/img/logo.png" width="200" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ">
                    <div align="right" class="main-menu d-none d-lg-block">
                        <nav>
                            <?php $uri = $this->uri->uri_string();
                            $pieces = explode("/", $uri);
                            if ($pieces == null) {
                                $uri1 = null;
                            } elseif ($pieces != null) {
                                $uri1 = $pieces[0];
                                if ($uri1 == "Topics") {
                                    $uri2 = $pieces[1];
                                }
                            }
                            ?>
                            <ul id="navigation">
                                <li><a href="https://agci.renomeet.com/inv/">JOIN A MEETING</a></li>
                                <li><a href="https://agci.renomeet.com/">LOGIN</a></li>
                                <li><a href="https://agci.renomeet.com/register" data-toggle="tooltip" title="DAFTAR GRATIS" class="btn genric-btn success radius">&nbsp;&nbsp;&nbsp; <strong>FREE TRIAL!</strong> &nbsp;&nbsp;&nbsp; </a></li>
                                <?php if ($uri1 == null) : ?>
                                    <li><a href="<?= base_url("Landing_Page/switchLang/indonesia/") ?>"><img src="<?= base_url("/assets") ?>/img/id.png" width="25" title="Indonesia"></a></li>
                                    <li><a href="<?= base_url("Landing_Page/switchLang/english/") ?>"><img src="<?= base_url("/assets") ?>/img/en.png" width="25" title="English (US)"></a></li>
                                <?php elseif ($uri1 == "Topics") : ?>
                                    <li><a href="<?= base_url("Topics/switchLang/indonesia/") . $uri1 . "_" . $uri2; ?>"><img src="<?= base_url("/assets") ?>/img/id.png" width="25" title="Indonesia"></a></li>
                                    <li><a href="<?= base_url("Topics/switchLang/english/") . $uri1 . "_" . $uri2; ?>"><img src="<?= base_url("/assets") ?>/img/en.png" width="25" title="English (US)"></a></li>
                                <?php else : ?>
                                    <li><a href="<?= base_url("Help/switchLang/indonesia/") . $uri; ?>"><img src="<?= base_url("/assets") ?>/img/id.png" width="25" title="Indonesia"></a></li>
                                    <li><a href="<?= base_url("Help/switchLang/english/") . $uri; ?>"><img src="<?= base_url("/assets") ?>/img/en.png" width="25" title="English (US)"></a></li>
                                <?php endif; ?>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
            </div>
        </div>

    </div>
</div> -->

<div class="header-area">
    <?php $uri = $this->uri->uri_string();
    $pieces = explode("/", $uri);
    if ($pieces == null) {
        $uri1 = null;
    } elseif ($pieces != null) {
        $uri1 = $pieces[0];
        if ($uri1 == "Topics") {
            $uri2 = $pieces[1];
        }
    }
    ?>

    <div class="header-nav">
        <div class="row justify-content-end">
            <ul class="d-flex">
                <li>
                    <a href="">Support</a>
                </li>
                <?php if ($uri1 == null) : ?>
                    <li>
                        <a href="<?= base_url("Landing_Page/switchLang/indonesia/") ?>">
                            <img src="<?= base_url("/assets") ?>/img/id.png" width="25" title="Indonesia">
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url("Landing_Page/switchLang/english/") ?>">
                            <img src="<?= base_url("/assets") ?>/img/en.png" width="25" title="English (US)">
                        </a>
                    </li>
                <?php elseif ($uri1 == "Topics") : ?>
                    <li>
                        <a href="<?= base_url("Topics/switchLang/indonesia/") . $uri1 . "_" . $uri2; ?>">
                            <img src="<?= base_url("/assets") ?>/img/id.png" width="25" title="Indonesia">
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url("Topics/switchLang/english/") . $uri1 . "_" . $uri2; ?>">
                            <img src="<?= base_url("/assets") ?>/img/en.png" width="25" title="English (US)">
                        </a>
                    </li>
                <?php else : ?>
                    <li>
                        <a href="<?= base_url("Help/switchLang/indonesia/") . $uri; ?>">
                            <img src="<?= base_url("/assets") ?>/img/id.png" width="25" title="Indonesia">
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url("Help/switchLang/english/") . $uri; ?>">
                            <img src="<?= base_url("/assets") ?>/img/en.png" width="25" title="English (US)">
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-bottom sticky-top">
        <a class="navbar-brand logo" href="<?= base_url() ?>">
            <img src="<?= base_url("/assets") ?>/img/logo.png" width="200" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggle">
            <ul class="navbar-nav mr-auto left-menu">
                <li class="nav-item left-nav">
                    <div class="dropdown product-dropdown">
                        <a class="dropdown-toggle nav-link" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>

                        <div class="dropdown-menu dropdown-menu-sm-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url(); ?>Online_Meeting">
                                <h6>Renomeet Online Meeting</h6>
                                <p>Unlimited & Secure Video Conference</p>
                            </a>
                            <a class="dropdown-item" href="<?= base_url(); ?>Webinar">
                                <h6>Renomeet Webinar</h6>
                                <p>Interactive & Secure Video Conference</p>
                            </a>
                            <a class="dropdown-item" href="#">
                                <h6>Renomeet Private Installation</h6>
                                <p>Unlimited & Secure Video Conference</p>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item left-nav">
                    <a class="nav-link" href="<?= base_url(); ?>Pricing">Pricing</a>
                </li>
                <li class="nav-item left-nav">
                    <a class="nav-link" href="<?= base_url(); ?>blog/blog_home">Blog</a>
                </li>
                <li class="nav-item left-nav">
                    <a class="nav-link" href="<?= base_url(); ?>Contact">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto right-menu">
                <li class="nav-item">
                    <a class="nav-link" href="https://agci.renomeet.com/inv/">JOIN A MEETING</a>
                </li>
                <li class="nav-item login">
                    <a class="nav-link" href="https://agci.renomeet.com/">LOGIN</a>
                </li>
                <li class="nav-item trial-btn">
                    <a class="nav-link" href="https://agci.renomeet.com/register" data-toggle="tooltip" title="DAFTAR GRATIS"><strong>FREE TRIAL!</strong></a>
                </li>
            </ul>
        </div>
    </nav>

</div>