<?php

session_start();
include('configs/config.php');
include('configs/checklogin.php');
include('configs/codeGen.php');
check_login();

if (isset($_POST['add'])) {

    $pay_id = $_POST['pay_id'];
    $pay_code = $_POST['pay_code'];
    $pay_method = $_POST['pay_method'];
    $pay_amt = $_POST['pay_amt'];
    $status = $_POST['status'];
    $member_id = $_GET['member_id'];
    $member_package = $_GET['member_package'];
    $member_name = $_GET['member_name'];

    $query = "INSERT INTO membership_payments (pay_id, pay_code, pay_method, pay_amt, status, member_id, member_package, member_name) VALUES (?,?,?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('ssssssss', $pay_id, $pay_code, $pay_method, $pay_amt, $status, $member_id, $member_package, $member_name);
    $stmt->execute();
    if ($stmt) {
        $success = "Success" && header("refresh:1; url=membership_fee.php");
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
                                <li class="breadcrumb-item"><a href="membership_fee.php">Billings</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Pay Membership Fee</span></li>
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
                                        <input type="text" name="pay_id" value="<?php echo $pay_id; ?>" class="form-control">
                                        <input type="text" name="status" value="Pending" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Payment Method</label>
                                        <select class='form-control basic' name="pay_method">
                                            <option selected>Select Payment Method</option>
                                            <?php
                                            $ret = "SELECT * FROM `payment_methods` ";
                                            $stmt = $mysqli->prepare($ret);
                                            $stmt->execute(); //ok
                                            $res = $stmt->get_result();
                                            while ($row = $res->fetch_object()) {
                                            ?>
                                                <option><?php echo $row->method_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Payment Code</label>
                                        <input type="text" name="pay_code" value="<?php echo $paycode; ?>" class="form-control">
                                    </div>
                                    <?php
                                    $member_package = $_GET['member_package'];
                                    $ret = "SELECT * FROM `packages` WHERE package_name ='$member_package' ";
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute(); //ok
                                    $res = $stmt->get_result();
                                    while ($row = $res->fetch_object()) {

                                    ?>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Package</label>
                                            <input type="text" readonly value="<?php echo $row->package_name; ?>" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Payment Amount</label>
                                            <input type="text" readonly value="<?php echo $row->package_price; ?>" class="form-control" name="pay_amt">
                                        </div>
                                    <?php } ?>
                                </div>

                                <button type="submit" name="add" class="btn btn-primary mt-3">Submit</button>
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