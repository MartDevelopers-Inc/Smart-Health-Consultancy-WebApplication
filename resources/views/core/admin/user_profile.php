<?php
require_once('partials/_head.php');
session_start();
require_once('configs/config.php');
require_once('configs/checklogin.php');

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
                                <li class="breadcrumb-item active" aria-current="page"><span>Profile</span></li>
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
        $admin_id = $_SESSION['admin_id'];
        $ret = "SELECT * FROM  admin WHERE admin_id = '$admin_id' ";
        $stmt = $mysqli->prepare($ret);
        $stmt->execute();
        $res = $stmt->get_result();
        while ($row = $res->fetch_object()) {
        ?>
            <!--  END SIDEBAR  -->

            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">

                    <div class="row layout-spacing">

                        <!-- Content -->
                        <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                            <div class="user-profile layout-spacing">
                                <div class="widget-content widget-content-area">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="">Profile</h3>
                                        <!--<a href="" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                    -->
                                    </div>
                                    <div class="text-center user-info">
                                        <img src="assets/img/admin.png" alt="avatar">
                                        <p class=""><?php echo $row->admin_name; ?></p>
                                    </div>
                                    <div class="user-info-list">

                                        <div class="">
                                            <ul class="contacts-block list-unstyled">
                                                <li class="contacts-block__item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee">
                                                        <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                                        <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                                        <line x1="6" y1="1" x2="6" y2="4"></line>
                                                        <line x1="10" y1="1" x2="10" y2="4"></line>
                                                        <line x1="14" y1="1" x2="14" y2="4"></line>
                                                    </svg> System Admin
                                                </li>

                                                <li class="contacts-block__item">
                                                    <a href="mailto:<?php echo $row->admin_email;?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                            <polyline points="22,6 12,13 2,6"></polyline>
                                                        </svg><?php echo $row->admin_email; ?></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                            <div class="bio layout-spacing ">
                                <div class="widget-content widget-content-area">
                                    <h3 class="">Update Profile</h3>
                                    <form method="POST">
                                        <div class="form-group mb-4">
                                            <input type="text" required name="admin_name" class="form-control" id="lFullName" placeholder="Full Name *">
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="email" required name="admin_email" class="form-control" id="lEmail" placeholder="Email address *">
                                        </div>
                                        <small id="emailHelp" class="form-text text-muted">*Required Fields</small>
                                        <button type="submit" name="update_profile" class="btn btn-primary mt-4">Update Profile</button>
                                    </form>
                                    <br>
                                </div>
                            </div>

                            <div class="bio layout-spacing ">
                                <div class="widget-content widget-content-area">
                                    <h3 class="">Change Password</h3>
                                    <form method="POST">
                                        <div class="form-group mb-4">
                                            <input type="password" required name="old_password" class="form-control" placeholder="Old Password">
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="password" required name="new_password" class="form-control" placeholder="New Password">
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="password" required name="conf_password" class="form-control" placeholder="Confirm New Password">
                                        </div>
                                        <small id="emailHelp" class="form-text text-muted">*Required Fields</small>
                                        <button type="submit" name="change_password" class="btn btn-primary mt-4">Change Password</button>
                                    </form>
                                    <br>
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
<?php require_once('partials/_scripts.php');
        } ?>

</body>

</html>