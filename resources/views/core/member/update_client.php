<?php

session_start();
include('configs/config.php');
include('configs/checklogin.php');
include('configs/codeGen.php');
check_login();

if (isset($_POST['update_client'])) {
    $update = $_SESSION['member_id'];
    $member_name = $_POST['member_name'];
    $member_phone = $_POST['member_phone'];
    $member_email = $_POST['member_email'];
    $member_adr = $_POST['member_adr'];
    $member_package = $_POST['member_package'];
    $member_pic = $_FILES['member_pic']['name'];
    move_uploaded_file($_FILES["member_pic"]["tmp_name"], "../admin/assets/img/clients/" . $_FILES["member_pic"]["name"]);

    $query = "UPDATE  members SET member_name =?, member_phone =?, member_email =?, member_adr =?, member_package =?, member_pic =? WHERE member_id =?";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('sssssss', $member_name, $member_phone, $member_email, $member_adr, $member_package, $member_pic, $update);
    $stmt->execute();
    if ($stmt) {
        $success = "Client Account Updated" && header("refresh:1; url=manage_clients.php");
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
                                <li class="breadcrumb-item"><a href="dashboard.php">Profile</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Update Profile</span></li>
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
        $update = $_SESSION['member_id'];
        $ret = "SELECT * FROM `members`  WHERE member_id = '$update' ";
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
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Full Name</label>
                                            <input required type="text" name="member_name" value="<?php echo $row->member_name; ?>" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Mobile Phone Number</label>
                                            <input required type="text" value="<?php echo $row->member_phone; ?>" name="member_phone" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Membership Package</label>
                                            <select class='form-control basic' name="member_package" id="">
                                                <option selected><?php echo $row->member_package; ?></option>
                                                <?php
                                                $ret = "SELECT * FROM `packages` ";
                                                $stmt = $mysqli->prepare($ret);
                                                $stmt->execute(); //ok
                                                $res = $stmt->get_result();
                                                while ($package = $res->fetch_object()) {
                                                ?>
                                                    <option><?php echo $package->package_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email Address</label>
                                            <input required type="text" value="<?php echo $row->member_email; ?>" name="member_email" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Profile Picture</label>
                                            <input required type="file" name="member_pic" class="form-control btn btn-success">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-12">
                                            <label for="inputAddress">Address</label>
                                            <textarea required name="member_adr" rows="5" class="form-control"><?php echo $row->member_adr; ?></textarea>
                                        </div>
                                    </div>

                                    <button type="submit" name="update_client" class="btn btn-primary mt-3">Register Client</button>
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
    }
    ?>
</body>

</html>