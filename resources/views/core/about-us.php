<?php
require_once('admin/configs/config.php');

require_once('partials/_head.php');
?>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">


        <!-- Start Header Style -->
        <?php require_once('partials/_header.php'); ?>
        <!-- End Header Style -->

        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bradcaump__title text-center">
                            <h2 class="bradcaump-title">About us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        <!-- Start Support Area -->
        <section class="htc__support__area ptb--100 bg__white  about-page">
            <div class="container">
                <div class="row">
                    <div class="htc__support__wrap clearfix">
                        <div class="about__right_image">
                            <img src="images/about/h_about-2.png" alt="">
                        </div>
                        <div class="col-lg-7 col-sm-12 col-12">
                            <div class="htc__support__content">
                                <div class="htc__support__inner">
                                    <h4 class="text--theme">About...</h4>
                                    <h2 class="text--theme">Good Health is the root of <br> all happiness</h2>
                                    <div class="htc__support__details">
                                        <p>
                                            Smart Health Consultancy is a Non Governmental Medical Care Organization that gives citizens
                                            chance to have a five star medical consultation at a given fee. At Smart Health Consultancy, we
                                            put clients` health care first.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Support Area -->
        <!-- Start Try Solve Area -->
        <section class="htc__try__solve__area about__us ptb--100">
            <div class="container">
                <div class="row">
                    <div class="services__list owl-carousel">
                        <div class="col-lg-4 ">
                            <!-- Start Single Items -->
                            <div class="ht__sin__solve">
                                <div class="ser_icon">
                                    <img src="images/service/icon/ser-cion.png" alt="services Icon">
                                </div>
                                <div class="ser__content">
                                    <h4><a href="service.php">Professional Doctors</a></h4>
                                    <p>Smart Health Consultancy is a home of higl trained professional medical experts that are there for you.</p>
                                </div>
                            </div>
                            <!-- End Single Items -->
                        </div>
                        <div class="col-lg-4 ">
                            <!-- Start Single Items -->
                            <div class="ht__sin__solve">
                                <div class="ser_icon">
                                    <img src="images/service/icon/ser-cion-3.png" alt="services Icon">
                                </div>
                                <div class="ser__content">
                                    <h4><a href="service.php">Medical Consulting</a></h4>
                                    <p>
                                        Every enrolled member is given a change to consult our professional medical experts.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Items -->
                        </div>
                        <div class="col-lg-4 ">
                            <!-- Start Single Items -->
                            <div class="ht__sin__solve">
                                <div class="ser_icon">
                                    <img src="images/service/icon/ser-cion-2.png" alt="services Icon">
                                </div>
                                <div class="ser__content">
                                    <h4><a href="service.php">Surgery Appointments</a></h4>
                                    <p>
                                        In case any of our enrolled members has a surgery complications, our medical professions are available to help
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Items -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Try Solve Area -->

        <!-- Start Blog Area -->
        <section class="htc__blog__area succes_stories pt--100 pb--60 ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title text-center pb--40">
                            <h2 class="title__line text--theme">Success Stories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $ret = "SELECT * FROM `feedbacks` WHERE type ='' ";
                    $stmt = $mysqli->prepare($ret);
                    $stmt->execute(); //ok
                    $res = $stmt->get_result();
                    while ($row = $res->fetch_object()) {
                    ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single_latest_post mb--40">
                                <div class="htc__blog__content">
                                    <div class="blog__post_title">
                                        <p><?php echo $row->f_content; ?></p>
                                    </div>
                                    <div class="blog_post__meta">
                                        <div class="post_author_img">
                                            <a href="#"><img src="images/blog/latest_post/author_img_3.png" alt=""></a>
                                        </div>
                                        <div class="post_content">
                                            <div class="author_tile">
                                                <h4><a href="#"><?php echo $row->member_name; ?></a></h4>
                                                <div class="publish_info">
                                                    <ul>
                                                        <li><?php echo date('d M Y', strtotime($row->created_at)); ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->


        <!-- Start Subscribe Area -->
        <?php require_once('partials/_subscribe.php'); ?>
        <!-- End Subscribe Area -->
        <!-- Start Footer Area -->
        <?php require_once('partials/_footer.php'); ?>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->


    <!-- jquery latest version -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>


</html>