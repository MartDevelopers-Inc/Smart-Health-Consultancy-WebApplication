<?php

use function Composer\Autoload\includeFile;

session_start();
include('configs/config.php');
include('configs/checklogin.php');
include('configs/codeGen.php');
check_login();

//Add Medical Expert
if (isset($_POST['add_doc'])) {
    $doc_id = $_POST['doc_id'];
    $doc_number = $_POST['doc_number'];
    $doc_name =$_POST['doc_name'];
    $doc_email = $_POST['doc_email'];
    $doc_phone = $_POST['doc_phone'];
    $doc_bio = $_POST['doc_bio'];
    $doc_status = $_POST['doc_status'];
    $doc_photo = $_FILES['doc_photo']['name'];
    move_uploaded_file($_FILES["doc_photo"]["tmp_name"], "assets/img/paramedics/" . $_FILES["doc_photo"]["name"]);

    $query = "INSERT INTO medical_experts (ad_id, ad_content, ad_img) VALUES (?,?,?)";
    $stmt = $conn->prepare($query);
    $rc = $stmt->bind_param('sss', $ad_id, $ad_content, $ad_img);
    $stmt->execute();
    if ($stmt) {
        //inject alert that post is shared  
        $success = "Advert Posted" && header("refresh:1; url=super_admin_create_advert.php");
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
                                <li class="breadcrumb-item"><a href="super_admin_dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="super_admin_dashboard.php">Adverts</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Create Adverts</span></li>
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
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Advert Image</label>
                                        <input type="file" name="ad_img" class="form-control btn btn-success">
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-12">
                                        <label for="inputAddress">Advert Content</label>
                                        <textarea name="ad_content" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>

                                <button type="submit" name="add" class="btn btn-primary mt-3">Add Advert</button>
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