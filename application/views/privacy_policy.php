<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php $this->load->view('component/head') ?>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->

    <!-- header-start -->
    <header>
        <?php $this->load->view('component/header') ?>
    </header>
    <!-- header-end -->


    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3><?= $title; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

    <!-- prising_area  -->
    <div class="prising_area minus_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-md-left wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">

                        <!-- wp:heading -->
                        <p>Thanks for using Renomeet products and services. We respect your privacy and are committed to protecting it through our compliance with this Policy.</p><br>
                        <h2>Privacy Policies</h2>
                        <p>At Renomeet, accessible from <a href="https://www.renomeet.com"> renomeet.com</a>, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Renomeet and how we use it. Renomeet offers a video conferencing. The Services and its related services, products, sub-applications within the Services, standalone applications associated with the Services, software program and content are collectively referred to herein as the ("Services").</p>
                        <p>The Services is provided or controlled by <a href="https://www.renocloud.net">Renocloud </a>(part of <a href="https://www.renotech.co.id/">Renotech</a> brand) (located at Terusan Angkasa St. Blok B2 Kav.1 – 7th floor, Gunung Sahari Selatan – Kemayoran, Jakarta Pusat 10610).</p><br>

                        <h4>What personal information does Renomeet process ?</h3>
                            <p>To provide the Renomeet services, we processes network and usage information including IP addresses for the meeting participants, the user specified URL used to host the meeting, and information about the phone numbers that connect to the meeting (if audio connection is made via a telephone call). In some cases, meeting related content, which may contain personal information, is temporarily stored to enable user functionality in a Renomeet video meeting. Examples include:</p>
                            <p>
                                <ul style="padding-left: 3%;" class="ordered-list">
                                    <li> If you use the chat function, chat content is stored during the meeting.<br /></li>
                                    <li> If you record a meeting, the recording of the meeting is temporarily stored until it is uploaded to your file hosting service (e.g. DropBox).<br /></li>
                                    <li> If you livestream your meeting, video content is temporarily stored to buffer the livestream.<br /></li>
                                    <li> In addition, users of Renomeet have the option of providing name, email address, and link to a picture that will be displayed to participants in the meeting.
                            </p>
                            </li>
                            </ul>
                            <p>Renomeet is not in the business of selling personal information to third parties. Renomeet uses this information to deliver the Renomeet service, to identify and troubleshoot problems with the Renomeet service, and to improve the Renomeet service. In addition, Renomeet may use this information to investigate fraud or abuse.</p><br>

                            <h4>How to contact us</h3>
                                <p>If you wish to talk with us about how we process your Personal Data, please contact us at <a href="mailto:support@renocloud.net">support@renocloud.net</a> and we will endeavor to deal with your request as soon as possible.</p>
                                <br>

                                <h4>Consent</h3>
                                    <p>This Policy may be updated by us from time to time to reflect changes to applicable laws, regulations, standards, industry codes or other instruments of a similar nature, or to reflect changes, updates or new features to the Services. We will use commercially reasonable efforts to generally notify all users of any material changes to this Policy, such as through a notice on our Services, however, you should look at this Policy regularly to check for such changes. Your continued access to or use of the Services after the date of the updated Policy constitutes your acknowledgment and agreement that you have read, understood and accepted the terms of the updated Policy. If you do not agree to the updated Policy, you must stop accessing or using the Platform and/or the Services.</p>
                                    <!-- /wp:heading -->
                                    <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ prising_area  -->



    <!-- footer start -->
    <footer class="footer">
        <!-- Footer -->
        <?php $this->load->view('component/footer') ?>

    </footer>
    <!--/ footer end  -->
    <?php $this->load->view('component/js') ?>

</body>

</html>