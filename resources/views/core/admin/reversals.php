<?php
session_start();
require_once('configs/config.php');
require_once('configs/checklogin.php');

if (isset($_GET['reverse'])) {
    $reverse = $_GET['reverse'];
    $status = $_GET['status'];
    $adn = "UPDATE  membership_payments SET status =? WHERE pay_id =?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('ss', $status, $verify);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        $success = "Success" && header("refresh:1; url=payment_verification.php");
    } else {
        $info = "Please Try Again Or Try Later";
    }
}
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
                                <li class="breadcrumb-item"><a href="membership_fee.php">Billings</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Membership Fee</span></li>
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
        <div class="sidebar-wrapper sidebar-theme">

            <?php require_once('partials/_sidebar.php'); ?>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">

                            <a class="btn btn-outline-success" href="add_membership_fee.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>

                                Add New Membership Fee Payment Record
                            </a>

                            <!--<a class="btn btn-outline-primary" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                                Import .XLS Document
                            </a>-->
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Method</th>
                                            <th>Package</th>
                                            <th>Amount</th>
                                            <th>Name</th>
                                            <th>Paid On</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $ret = "SELECT * FROM `membership_payments`  WHERE status !='Confirmed' ";
                                        $stmt = $mysqli->prepare($ret);
                                        $stmt->execute(); //ok
                                        $res = $stmt->get_result();
                                        while ($row = $res->fetch_object()) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <span class="badge outline-badge-success">
                                                        <?php echo $row->pay_code; ?>
                                                    </span>
                                                </td>
                                                <td><?php echo $row->pay_method; ?></td>
                                                <td><?php echo $row->member_package; ?></td>
                                                <td>Ksh <?php echo $row->pay_amt; ?></td>
                                                <td><?php echo $row->member_name; ?></td>
                                                <td><?php echo date('d M Y g:i', strtotime($row->created_at)); ?></td>
                                                <td>
                                                    <?php
                                                    if ($row->status == 'Pending') {
                                                        echo "<span class='badge outline-badge-danger'>$row->status</span>";
                                                    } elseif ($row->status == 'Reversed') {
                                                        echo "<span class='badge outline-badge-warning'>$row->status</span>";
                                                    } else {
                                                        echo "<span class='badge outline-badge-success'>$row->status</span>";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a class="badge outline-badge-danger text-danger" href="reversals.php?reverse=<?php echo $row->pay_id; ?>&status=Reversed">Reverse Payment</a>
                                                </td>
                                            </tr>
                                        <?php
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php require_once('partials/_footer.php'); ?>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
    <?php require_once('partials/_scripts.php'); ?>
</body>

</html>