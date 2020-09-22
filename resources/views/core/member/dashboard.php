<?php
session_start();
require_once('configs/config.php');
require_once('configs/checklogin.php');
require_once('partials/_analytics.php');
check_login();
error_reporting(E_ALL ^ E_NOTICE);  //Silence these bitches
require_once('partials/_head.php');
?>
<!-- Dont  Wonder why this style sheet is out here-->
<link href="assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Dashboard</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
            <!-- <ul class="navbar-nav flex-row ml-auto ">
                <li class="nav-item more-dropdown">
                    <div class="dropdown  custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Reports</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-value="Medical Experts" href="hr_reports.php">Medical Experts</a>
                            <a class="dropdown-item" data-value="Members" href="member_reports.php">Members</a>
                            <a class="dropdown-item" data-value="Packages" href="package_reports.php">Packages</a>
                            <a class="dropdown-item" data-value="Payments" href="payment_reports.php">Payments</a>
                        </div>
                    </div>
                </li>
            </ul> -->
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

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                    <!-- Medical Experts -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-card-four">
                            <div class="widget-content">
                                <div class="w-content">
                                    <div class="w-info">
                                        <h6 class="value">Ksh <?php echo $payments; ?></h6>
                                        <p class="text-success">Total Payments</p>
                                    </div>
                                    <div class="">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                                <line x1="1" y1="10" x2="23" y2="10"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-card-four">
                            <div class="widget-content">
                                <div class="w-content">
                                    <div class="w-info">
                                        <h6 class="value"><?php echo $consultations; ?></h6>
                                        <p class="text-success">My Consultations</p>
                                    </div>
                                    <div class="">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                <line x1="18" y1="8" x2="23" y2="13"></line>
                                                <line x1="23" y1="8" x2="18" y2="13"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-card-four">
                            <div class="widget-content">
                                <div class="w-content">
                                    <div class="w-info">
                                        <h6 class="value"><?php echo $prescriptions; ?></h6>
                                        <p class="text-success">Prescribed Consultations</p>
                                    </div>
                                    <div class="">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                                <polyline points="13 2 13 9 20 9"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-three">
                            <div class="widget widget-table-two">

                                <div class="widget-heading">
                                    <h5 class="">Available Doctors</h5>
                                </div>

                                <div class="widget-content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="th-content">Number</div>
                                                    </th>
                                                    <th>
                                                        <div class="th-content">Name</div>
                                                    </th>
                                                    <th>
                                                        <div class="th-content">Email</div>
                                                    </th>
                                                    <th>
                                                        <div class="th-content th-heading">Phone </div>
                                                    </th>
                                                    <th>
                                                        <div class="th-content">Acc Status</div>
                                                    </th>
                                                    <th>
                                                        <div class="th-content">Action</div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $ret = "SELECT * FROM `medical_experts` ORDER BY  RAND() LIMIT 5 ";
                                                $stmt = $mysqli->prepare($ret);
                                                $stmt->execute(); //ok
                                                $res = $stmt->get_result();
                                                while ($row = $res->fetch_object()) {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <a href="view_doc.php?view=<?php echo $row->doc_id; ?>">
                                                                <div class="td-content product-brand"><?php echo $row->doc_number; ?></div>
                                                            </a>

                                                        </td>
                                                        <td>
                                                            <div class="td-content product-brand"><?php echo $row->doc_name; ?></div>
                                                        </td>
                                                        <td>
                                                            <div class="td-content"><?php echo $row->doc_email; ?></div>
                                                        </td>
                                                        <td>
                                                            <div class="td-content pricing"><span class=""><?php echo $row->doc_phone; ?></span></div>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if ($row->doc_status == 'Pending') {
                                                                echo "<div class='td-content'><span class='badge outline-badge-danger'>$row->doc_status</span></div>";
                                                            } else {
                                                                echo "<div class='td-content'><span class='badge outline-badge-success'>$row->doc_status</span></div>";
                                                            }

                                                            ?>
                                                        </td>
                                                        <td>
                                                            <div class='td-content'>
                                                                <a href="add_client_consultation.php?doc_id=<?php echo $row->doc_id;?>&doc_name=<?php echo $row->doc_name;?>" class='badge outline-badge-primary'>Consult Doc</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-activity-three">

                            <div class="widget-heading">
                                <h5 class="text-success">My Payment Logs</h5>
                            </div>

                            <div class="widget-content">

                                <div class="mt-container mx-auto">
                                    <div class="timeline-line">
                                        <?php
                                        $session = $_SESSION['member_id'];
                                        $ret = "SELECT * FROM `membership_payments` WHERE status ='Confirmed' AND member_id ='$session' ORDER BY `membership_payments`.`created_at` DESC  ";
                                        $stmt = $mysqli->prepare($ret);
                                        $stmt->execute(); //ok
                                        $res = $stmt->get_result();
                                        while ($row = $res->fetch_object()) {
                                        ?>
                                            <div class="item-timeline timeline-new">
                                                <div class="t-dot">
                                                    <div class="t-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="t-content">
                                                    <div class="t-uppercontent">
                                                        <h5>VERIFIED</h5>
                                                    </div>
                                                    <p><span><?php echo $row->pay_code; ?> CONFIRMED</span>
                                                        <?php echo $row->member_name; ?> Paid Ksh <?php echo $row->pay_amt; ?> On
                                                        <?php echo date('d M Y', strtotime($row->created_at)); ?> At
                                                        <?php echo date('g:i', strtotime($row->created_at)); ?> Using <?php echo $row->pay_method; ?>
                                                    </p>
                                                    <!-- <div class="tags">
                                                        <div class="badge badge-primary"></div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        <?php
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <?php require_once('partials/_footer.php'); ?>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->
    <?php require_once('partials/_scripts.php'); ?>

</body>

</html>