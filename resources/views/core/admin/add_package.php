<?php

session_start();
include('configs/config.php');
include('configs/checklogin.php');
include('configs/codeGen.php');
check_login();

if (isset($_POST['add_package'])) {

    $package_id = $_POST['package_id'];
    $package_name = $_POST['package_name'];
    $package_price = $_POST['package_price'];
    $package_desc = $_POST['package_desc'];

    $query = "INSERT INTO packages (package_id, package_name, package_price, package_desc ) VALUES (?,?,?,?)";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('ssss', $package_id, $package_name, $package_price, $package_desc);
    $stmt->execute();
    if ($stmt) {
        $success = "Success" && header("refresh:1; url=add_package.php");
    } else {
        //inject alert that task failed
        $info = "Please Try Again Or Try Later";
    }
}


require_once('partials/_head.php');
?>

<body>

    <!--  BEGIN NAVBAR  -->
    <?php
    require_once('partials/_nav.php');
    ?>
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
                                <li class="breadcrumb-item active" aria-current="page"><span>Add</span></li>
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
        <?php require_once('partials/_sidebar.php'); ?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-row mb-4">
                                    <div style="display:none" class="form-group col-md-6">
                                        <label for="inputEmail4">Packages</label>
                                        <input type="text" name="package_id" value="<?php echo $package_id; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Membership Package</label>
                                        <select class='form-control basic' name="package_name" id="">
                                            <option selected>Select Membership Package</option>
                                            <option>Gold Package</option>
                                            <option>Silver Package</option>
                                            <option>Bronze Package</option>
                                            <option>Free Trial</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Membership Package Price Per Month</label>
                                        <input type="text" class="form-control" name="package_price"  >
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-12">
                                        <label for="inputAddress">Membership Package Description</label>
                                        <textarea required name="package_desc" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <button type="submit" name="add_package" class="btn btn-primary mt-3">Create Membership Package</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            require_once('partials/_footer.php');
            ?>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <?php
    require_once('partials/_scripts.php');
    ?>
</body>

</html>