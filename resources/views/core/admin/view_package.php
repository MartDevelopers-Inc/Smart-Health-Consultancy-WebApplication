<?php
session_start();
require_once('configs/config.php');
require_once('configs/checklogin.php');
require_once('partials/_head.php');
?>

<body>

    <!--  BEGIN NAVBAR  -->
    <?php require_once('partials/_nav.php'); ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="packages.php">Packages</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>View</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?php
        require_once('partials/_sidebar.php');
        $view  = $_GET['view'];
        $ret = "SELECT * FROM `packages` WHERE package_id = '$view' ";
        $stmt = $mysqli->prepare($ret);
        $stmt->execute(); //ok
        $res = $stmt->get_result();
        while ($row = $res->fetch_object()) {
        ?>
            <!--  END SIDEBAR  -->

            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">
                    <div class="row layout-spacing">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                            <div class="bio layout-spacing ">
                                <div class="widget-content widget-content-area">
                                    <h3 class=""><?php echo $row->package_name; ?></h3>
                                    <p>
                                        <?php echo $row->package_desc; ?>
                                    </p>

                                    <div class="bio-skill-box">

                                        <div class="row">

                                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                                <div class="d-flex b-skills">
                                                    <div>
                                                    </div>
                                                    <div class="">
                                                        <h5><?php echo $row->package_name;?> Price Per Month</h5>
                                                        <p>
                                                           Ksh <?php echo $row->package_price;?>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                                <div class="d-flex b-skills">
                                                    <div>
                                                    </div>
                                                    <div class="">
                                                        <h5><?php echo $row->package_name;?> Id </h5>
                                                        <p>
                                                            <?php echo $row->package_id;?>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            <?php require_once('partials/_footer.php');
        } ?>
            </div>
            <!--  END CONTENT AREA  -->
    </div>
    <?php require_once('partials/_scripts.php'); ?>
</body>

</html>