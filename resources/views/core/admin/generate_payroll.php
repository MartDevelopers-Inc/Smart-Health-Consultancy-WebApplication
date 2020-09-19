<?php
session_start();
include('configs/config.php');
include('configs/checklogin.php');
include('configs/codeGen.php');
check_login();

//Add Medical Expert
if (isset($_POST['generate_payroll'])) {

    $doc_id = $_GET['doc_id'];
    $doc_number = $_POST['doc_number'];
    $doc_name = $_POST['doc_name'];
    $doc_email = $_POST['doc_email'];
    $payroll_id = $_POST['payroll_id'];
    $payroll_code = $_POST['payroll_code'];
    $payroll_month = $_POST['payroll_month'];
    $payroll_salary = $_POST['payroll_salary'];

    $query = "INSERT INTO payrolls (doc_id, doc_number, doc_name, doc_email, payroll_id, payroll_code, payroll_month, payroll_salary) VALUES (?,?,?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('ssssssss', $doc_id, $doc_number, $doc_name, $doc_email, $payroll_id, $payroll_code, $payroll_month, $payroll_salary);
    $stmt->execute();
    if ($stmt) {
        //inject alert that post is shared  
        $success = "Payroll Added" && header("refresh:1; url=manage_payrolls.php");
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
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="">Payrolls</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Generate Payroll</span></li>
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
                                        <label for="inputEmail4">Payroll Id</label>
                                        <input type="text" name="payroll_id" value="<?php echo $payroll_id; ?>" class="form-control">
                                        <input type="text" name="payroll_code" value="<?php echo $a; ?>-<?php echo $b; ?>" class="form-control">
                                    </div>
                                </div>
                                <?php
                                $doc_id = $_GET['doc_id'];
                                $ret = "SELECT * FROM `medical_experts` WHERE doc_id ='$doc_id' ";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute(); //ok
                                $res = $stmt->get_result();
                                while ($row = $res->fetch_object()) {
                                ?>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Full Name</label>
                                            <input required type="text" value="<?php echo $row->doc_name; ?>" readonly name="doc_name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Number</label>
                                            <input required type="text" value="<?php echo $row->doc_number; ?>" readonly name="doc_number" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email Address</label>
                                            <input required type="text" value="<?php echo $row->doc_email; ?>" readonly name="doc_email" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Payroll Code</label>
                                            <input type="text" name="payroll_code" value="<?php echo $a; ?>-<?php echo $b; ?>" class="form-control">
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Month</label>
                                        <select class='form-control basic' name="payroll_month" id="">
                                            <option selected>Select Month</option>
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March</option>
                                            <option>April</option>
                                            <option>May</option>
                                            <option>June</option>
                                            <option>July</option>
                                            <option>August</option>
                                            <option>September</option>
                                            <option>Octomber</option>
                                            <option>November</option>
                                            <option>December</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Salary</label>
                                        <input required type="text" name="payroll_salary" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" name="generate_payroll" class="btn btn-primary mt-3">Generate Payroll</button>
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