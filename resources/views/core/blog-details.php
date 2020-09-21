<?php
require_once('admin/configs/config.php');
require_once('partials/_head.php');
$view = $_GET['view'];
$ret = "SELECT * FROM `knowledge_base` WHERE kb_id ='$view' ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($row = $res->fetch_object()) {
?>

    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

        <!-- Body main wrapper start -->
        <div class="wrapper">

            <!-- Start Header Style -->
            <?php
            require_once('partials/_header.php'); ?>
            <!-- End Header Style -->


            <!-- Start Bradcaump area -->
            <div class="ht__bradcaump__area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__title text-center">
                                <div class="breadcurumb_menu">
                                    <ul>
                                        <li><a href="index.html">Knowledge Base</a></li>
                                        <li>>></li>
                                        <li><?php echo $row->kb_title; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bradcaump area -->

            <!--Our blob page-->
            <div class="our_blog_area no-sidebar ptb--100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                            <div class="post_details_inner">
                                <div class="single_post_thumbnail">
                                    <img src="images/blog/latest_post/s_post.jpg" alt="single post thumbail">
                                </div>
                                <div class="single_post_content">
                                    <div class="single_post_top_contnt">
                                        <div class="single_post_title">
                                            <h2><?php echo $row->kb_title; ?></h2>
                                        </div>
                                        <div class="single_post_meta">
                                            <div class="single_post_left_meta">
                                                <ul>
                                                    <li><?php echo date('d M Y - g:i', strtotime($row->created_at)); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post_excerpt">
                                        <p>
                                            <?php echo $row->kb_desc; ?>
                                        </p>

                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--Our blob page end-->

            <!-- Start Subscribe Area -->
            <?php
            require_once('partials/_subscribe.php'); ?>
            <!-- End Subscribe Area -->
        <?php
        require_once('partials/_footer.php');
    }
        ?>
        <!-- End Footer Area -->
        </div>
        <script src="js/vendor/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>


    </html>