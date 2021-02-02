<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?= $title; ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="https://renomeet1.renocloud.net/images/favicon.ico" />
<meta name="google-site-verification" content="7loIW9ny7IMtEkSrFsbk1YTGXNepe-2g3HMwtdRiWwA" />
<!-- <link rel="manifest" href="site.webmanifest"> -->
<!-- Place favicon.ico in the root directory -->

<!-- CSS here -->
<link rel="stylesheet" href="<?= base_url("/assets") ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url("/assets") ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?= base_url("/assets") ?>/css/magnific-popup.css">
<link rel="stylesheet" href="<?= base_url("/assets") ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url("/assets") ?>/css/themify-icons.css">
<link rel="stylesheet" href="<?= base_url("/assets") ?>/css/nice-select.css">
<link rel="stylesheet" href="<?= base_url("/assets") ?>/css/flaticon.css">
<link rel="stylesheet" href="<?= base_url("/assets") ?>/css/gijgo.css">
<link rel="stylesheet" href="<?= base_url("/assets") ?>/css/animate.min.css">
<link rel="stylesheet" href="<?= base_url("/assets") ?>/css/slick.css">
<link rel="stylesheet" href="<?= base_url("/assets") ?>/css/slicknav.css">
<link rel="stylesheet" href="<?= base_url("/assets"); ?>/css/style.css">
<link rel="stylesheet" href="<?= base_url("/assets") ?>/introjs/introjs.min.css">
<link rel="stylesheet" href="<?= base_url("/assets") ?>/introjs/introjs-modern.css">
<script type="text/javascript">
    const BASE_URL = "<?= base_url() ?>";
</script>
<?php if ($landingpage == true) : ?>
    <b:if cond='data:blog.homepageUrl == data:blog.url'>
        <meta expr:content='data:blog.title' name='keywords' />
    </b:if>
    <b:if cond='data:blog.pageType == &quot;item&quot;'>
        <meta expr:content='data:blog.pageName' name='keywords' />
    </b:if>

    <meta content='https://www.renomeet.com/index.html' property='og:url' />
    <meta content='Renomeet - Secure Online Meeting' property='og:title' />
    <meta content='Best Secured Video Conference, Web Video Conferencing, Solusi konferensi video web khusus untuk Sekolah, bimbel, webinar, meeting online dll' property='og:description' />



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168691319-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-168691319-1');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WC4HXQZ');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Pop Up -->
    <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=15a1fe743c9d5' async='true'></script>
    <!-- End Pop Up -->
<?php endif; ?>