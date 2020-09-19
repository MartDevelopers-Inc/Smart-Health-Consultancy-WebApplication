<?php

session_start();
include('configs/config.php');
include('configs/checklogin.php');
include('configs/codeGen.php');
check_login();

if (isset($_POST['add'])) {

    $consul_id = $_POST['consul_id'];
    $consul_code = $_POST['consul_code'];
    $member_id = $_GET['member_id'];
    $member_name = $_GET['member_name'];
    $member_phone = $_GET['member_phone'];
    $doc_id = $_POST['doc_id'];
    $doc_name = $_POST['doc_name'];
    $consul_details = $_POST['consul_details'];
    $consul_status = $_POST['consul_status'];

    $query = "INSERT INTO consultations (consul_id, consul_code, member_id, member_name, member_phone, doc_id, doc_name, consul_details, consul_status) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('sssssssss', $consul_id, $consul_code, $member_id, $member_name, $member_phone, $doc_id, $doc_name, $consul_details, $consul_status);
    $stmt->execute();
    if ($stmt) {
        $success = "Success" && header("refresh:1; url=add_consultation.php");
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
                                <li class="breadcrumb-item"><a href="manage_consultations.php">Consultations</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Add Consultation</span></li>
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
                                        <input type="text" name="consul_id" value="<?php echo $consul_id; ?>" class="form-control">
                                        <input type="text" name="consul_code" value="<?php echo $a; ?>-<?php echo $b; ?>" class="form-control">
                                        <input type="text" name="consul_status" value="Pending" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Medical Expert</label>
                                        <select id ="docNumber" onChange="getDoctorDetails(this.value)" class='form-control basic' name="package_name" id="">
                                            <option selected>Select Medical Expert Number</option>
                                            <?php
                                            $ret = "SELECT * FROM `medical_experts` WHERE doc_status != 'Pending' ";
                                            $stmt = $mysqli->prepare($ret);
                                            $stmt->execute(); //ok
                                            $res = $stmt->get_result();
                                            while ($row = $res->fetch_object()) {
                                            ?>
                                                <option><?php echo $row->doc_number;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Medical Expert Name</label>
                                        <input type="text" readonly id="docName" class="form-control" name="doc_name">
                                    </div>
                                    <div style="display:none" class="form-group col-md-6">
                                        <input type="text" id="docId" class="form-control" name="doc_id">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-12">
                                        <label for="inputAddress">Consultation Details</label>
                                        <textarea id="consultation" required name="consul_details" rows="10" class="form-control"></textarea>
                                    </div>
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