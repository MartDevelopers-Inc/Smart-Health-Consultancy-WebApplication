<?php

session_start();
include('configs/config.php');
include('configs/checklogin.php');
include('configs/codeGen.php');
check_login();

if (isset($_POST['update'])) {

    $update = $_GET['update'];
    $prescription = $_POST['prescription'];

    $query = "UPDATE prescriptions SET  prescription=? WHERE pre_id =?";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('ss', $prescription, $update);
    $stmt->execute();

    if ($stmt) {
        $success = "Success" && header("refresh:1; url=manage_prescriptions.php");
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
                                <li class="breadcrumb-item"><a href="manage_prescriptions.php">Prescriptions</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Update</span></li>
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
                                        <label for="inputEmail4"></label>
                                        <input type="text" name="pre_id" value="<?php echo $pre_id; ?>" class="form-control">
                                        <input type="text" name="pre_code" value="<?php echo $a; ?>-<?php echo $b; ?>" class="form-control">
                                    </div>
                                </div>
                                <?php
                                $update = $_GET['update'];
                                $ret = "SELECT * FROM `prescriptions` WHERE pre_id ='$update' ";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($row = $res->fetch_object()) {
                                    $consulid = $row->consul_id;
                                    //Nested Fetch
                                    $ret = "SELECT * FROM `consultations` WHERE consul_id ='$consulid' ";
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute(); //ok
                                    $res = $stmt->get_result();
                                    while ($cons = $res->fetch_object()) {
                                ?>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-12">
                                                <div class="card component-card_1">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Consultation Details</h5>
                                                        <p class="card-text">
                                                            <?php echo $cons->consul_details; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-12">
                                                <label for="inputAddress">Prescription Details</label>
                                                <textarea required name="prescription" rows="10" class="form-control"><?php echo $row->prescription; ?></textarea>
                                            </div>
                                        </div>
                                <?php
                                    }
                                } ?>
                                <button type="submit" name="update" class="btn btn-primary mt-3">Submit</button>
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