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

        <?php
        require_once('partials/_header.php');
        ?>

        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bradcaump__title text-center">
                            <h2 class="bradcaump-title">Smart Health Consultancy Knowledge Base</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        <!--Our blob page-->
        <div class="our_blog_area ptb--100">
            <div class="container">
                <div class="row blog-masonry">
                    <?php
                    $ret = "SELECT * FROM `knowledge_base` ";
                    $stmt = $mysqli->prepare($ret);
                    $stmt->execute(); //ok
                    $res = $stmt->get_result();
                    while ($row = $res->fetch_object()) {


                    ?>
                        <div class="grid-item col-lg-4 col-md-6 col-12">
                            <div class="single_latest_post mb--30">
                                <div class="ht__blog__thumb">
                                    <a href="blog-details.php?view=<?php echo $row->kb_id; ?>">
                                    </a>
                                </div>

                                <div class="htc__blog__content">
                                    <div class="blog__post_title">
                                        <h2><a href="blog-details.php?view=<?php echo $row->kb_id; ?>"><?php echo $row->kb_title; ?></a></h2>
                                    </div>
                                    <div class="blog_post__meta">
                                        <div class="post_content">
                                            <div class="author_tile">
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
                    <?php
                    } ?>
                </div>
            </div>
        </div>
        <!--Our blob page end-->

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