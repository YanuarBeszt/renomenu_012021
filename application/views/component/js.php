<!-- JS here -->
<script src="<?= base_url("/assets") ?>/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/popper.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/owl.carousel.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/ajax-form.js"></script>
<script src="<?= base_url("/assets") ?>/js/waypoints.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/jquery.counterup.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/scrollIt.js"></script>
<script src="<?= base_url("/assets") ?>/js/jquery.scrollUp.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/wow.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/nice-select.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/jquery.slicknav.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/plugins.js"></script>
<script src="<?= base_url("/assets") ?>/js/gijgo.min.js"></script>

<!--contact js-->
<script src="<?= base_url("/assets") ?>/js/contact.js"></script>
<script src="<?= base_url("/assets") ?>/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/jquery.form.js"></script>
<script src="<?= base_url("/assets") ?>/js/jquery.validate.min.js"></script>
<script src="<?= base_url("/assets") ?>/js/mail-script.js"></script>
<script src="<?= base_url("/assets") ?>/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/intro.js@3.0.0-beta.1/intro.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.collapse.in').prev('.panel-heading').addClass('active');
        $('#accordion, #bs-collapse')
            .on('show.bs.collapse', function(a) {
                $(a.target).prev('.panel-heading').addClass('active');
            })
            .on('hide.bs.collapse', function(a) {
                $(a.target).prev('.panel-heading').removeClass('active');
            });
    });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5eda18ae4a7c62581799fae6/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<script type="text/javascript">
    //  fixed menu on scroll for desktop
    $(window).bind('scroll', function() {
        if ($(window).scrollTop() > 50) {
            $('.navbar-bottom').addClass('sticky');
        } else {
            $('.navbar-bottom').removeClass('sticky');
        }
    });
</script>