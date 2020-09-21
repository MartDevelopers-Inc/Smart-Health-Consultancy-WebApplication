<?php 
    require_once('partials/_head.php');
?>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
       
       
       <!-- Start Header Style -->
        <?php 
            require_once('partials/_header.php');
        ?>
        <!-- End Header Style -->

        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bradcaump__title text-center">
                            <h2 class="bradcaump-title">Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- End Bradcaump area -->  
        
        
         <!-- Start Contact Area -->
        <section class="htc__contact__area bg__white pt--30 pb--15">
            <div class="container">
                <div class="row contact__addres__wrapper">
                    <!-- Start Single Addrss -->
                    <div class="col-lg-4 col-xl-4 col-md-6 col-12">
                        <div class="address">
                            <div class="address__icon">
                                <i class="zmdi zmdi-pin"></i>
                            </div>
                            <div class="address__details">
                                <p>127.0.0.1 LocalHost</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Addrss -->
                    <!-- Start Single Addrss -->
                    <div class="col-lg-4 col-xl-4 col-md-6 col-12 xmt--40">
                        <div class="address">
                            <div class="address__icon">
                                <i class="zmdi zmdi-phone"></i>
                            </div>
                            <div class="address__details">
                                <p><a href="#">(001) 24568 365 987</a></p>
                                <p><a href="#">(001) 65897 569 784</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Addrss -->
                    <!-- Start Single Addrss -->
                    <div class="col-lg-4 col-xl-4 col-md-6 col-12 smt--40 xmt--40">
                        <div class="address">
                            <div class="address__icon">
                                <i class="zmdi zmdi-globe"></i>
                            </div>
                            <div class="address__details">
                                <p><a href="#">infor@smarthealthconsul.com</a></p>
                                <p><a href="#">www.smarthealth.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Addrss -->
                    
                </div>
            </div>
            <!-- Start Google Map -->
            <div class="htc__google__map">
                <div class="map-contacts">
                    <div id="googleMap"></div>
                </div>
            </div>
            <!-- End Google Map -->
            <!-- Start Conatact Form -->
            <div class="psy__contact__form">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                            <div class="htc__contact__form__wrap">
                            <div class="contact-form-wrap">
                                <h2 class="ct__title text--theme">Send us a message</h2>
                                <form id="contact-form" action="mail.php" method="post">
                                    <div class="single-contact-form name">
                                        <div class="contact-box name_email">
                                            <div class="contact-box">
                                                <input type="text" placeholder="Your Name *" name="name">
                                            </div>
                                            <div class="contact-box">
                                                <input type="text" placeholder="Phone *" name="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-contact-form">
                                        <div class="contact-box subject">
                                            <input type="email" placeholder="Email*" name="email">
                                        </div>
                                    </div>
                                    <div class="single-contact-form">
                                        <div class="contact-box message">
                                            <textarea name="message" placeholder="Message*"></textarea>
                                        </div>
                                    </div>
                                    <div class="contact-btn">
                                        <button type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>                            
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
           
            <!-- End Conatact Form -->
        </section>
        
        
       <?php 
        require_once('partials/_subscribe.php');
        require_once('partials/_footer.php');
       ?>
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

  
    <!-- jquery latest version -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8"></script>
    <script src="js/map.js"></script>
    <script src="js/main.js"></script>
    
    
 </body>

</html>