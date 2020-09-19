<?php

session_start();
include('configs/config.php');
include('configs/checklogin.php');
include('configs/codeGen.php');
check_login();

//Update Medical Expert
if (isset($_POST['update_doc'])) {

    $update = $_GET['update'];
    $doc_number = $_POST['doc_number'];
    $doc_name = $_POST['doc_name'];
    $doc_email = $_POST['doc_email'];
    $doc_phone = $_POST['doc_phone'];
    $doc_bio = $_POST['doc_bio'];
    $doc_status = $_POST['doc_status'];
    $doc_photo = $_FILES['doc_photo']['name'];
    move_uploaded_file($_FILES["doc_photo"]["tmp_name"], "../assets/img/paramedics/" . $_FILES["doc_photo"]["name"]);

    $query = "UPDATE medical_experts SET doc_number =?, doc_name =?, doc_email =?, doc_phone =?, doc_bio =?, doc_status =?, doc_photo =? WHERE doc_id =? ";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('ssssssss', $doc_number, $doc_name, $doc_email, $doc_phone, $doc_bio, $doc_status, $doc_photo, $update);
    $stmt->execute();
    if ($stmt) {
        //inject alert that post is shared  
        $success = "Updated" && header("refresh:1; url=user_profile.php");
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
                                <li class="breadcrumb-item active" aria-current="page"><span>My Profile</span></li>
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
        $update = $_GET['update'];
        $ret = "SELECT * FROM `medical_experts` WHERE doc_id ='$update' ";
        $stmt = $mysqli->prepare($ret);
        $stmt->execute(); //ok
        $res = $stmt->get_result();
        while ($row = $res->fetch_object()) {
        ?>
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
                                            <label for="inputEmail4">Id</label>
                                            <input type="text" name="doc_id" value="<?php echo $doc_id; ?>" class="form-control">
                                            <input type="text" name="doc_number" value="<?php echo $a; ?>-<?php echo $b; ?>" class="form-control">
                                            <input type="text" name="doc_status" value="Verified" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Full Name</label>
                                            <input required type="text" value="<?php echo $row->doc_name; ?>" name="doc_name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Mobile Phone Number</label>
                                            <input required type="text" value="<?php echo $row->doc_phone; ?>" name="doc_phone" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email Address</label>
                                            <input required type="text" value="<?php echo $row->doc_email; ?>" name="doc_email" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Profile Picture</label>
                                            <input required type="file" name="doc_photo" class="form-control btn btn-success">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-12">
                                            <label for="inputAddress">Biography | Area Of Specialization</label>
                                            <textarea id="medical-expert-bio" required name="doc_bio" rows="10" class="form-control"><?php echo $row->doc_bio; ?></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" name="update_doc" class="btn btn-primary mt-3">Update My Account</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            require_once('partials/_footer.php');
        }
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