<?php
session_start();
require_once('configs/config.php');
require_once('configs/checklogin.php');
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
                                <li class="breadcrumb-item"><a href="manage_feedbacks.php">Feedbacks</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>View Feedbacks</span></li>
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
        $view = $_GET['view'];
        $ret = "SELECT * FROM `feedbacks`  WHERE f_id = '$view' ";
        $stmt = $mysqli->prepare($ret);
        $stmt->execute(); //ok
        $res = $stmt->get_result();
        while ($row = $res->fetch_object()) {
            $user = $row->member_id;
            //Nest Fetch
            $ret = "SELECT * FROM `members`  WHERE member_id = '$user' ";
            $stmt = $mysqli->prepare($ret);
            $stmt->execute(); //ok
            $res = $stmt->get_result();
            while ($user = $res->fetch_object()) {

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
                                            <h3 class="">Feedback</h3>
                                        </div>
                                        <div class="text-center user-info">
                                            <?php
                                            if ($user->member_pic == '') {
                                                echo "<img src='assets/img/admin/admin.png' class='img-thumbnail img-fluid' alt='avatar'>";
                                            } else {
                                                echo "<img src='assets/img/clients/$user->member_pic' class='img-thumbnail img-fluid' alt='avatar'>";
                                            } ?>
                                            <p class=""><?php echo $user->member_name; ?></p>
                                        </div>
                                        <div class="user-info-list">

                                            <div class="">
                                                <ul class="contacts-block list-unstyled">
                                                    <li class="contacts-block__item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                                        </svg><?php echo date('d M Y g:i', strtotime($row->created_at)); ?>
                                                    </li>
                                                    <li class="contacts-block__item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                            <circle cx="12" cy="10" r="3"></circle>
                                                        </svg><?php echo $user->member_adr; ?>
                                                    </li>
                                                    <li class="contacts-block__item">
                                                        <a href="mailto:<?php echo $user->member_email; ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                                <polyline points="22,6 12,13 2,6"></polyline>
                                                            </svg><?php echo $user->member_email; ?></a>
                                                    </li>
                                                    <li class="contacts-block__item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                                        </svg>
                                                        <?php echo $user->member_phone; ?>
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
                                        <h3 class="">Client Feedback Code : <span class="badge outline-badge-success"><?php echo $row->f_id; ?></span></h3>
                                        <p>
                                            <?php echo $row->f_content; ?>
                                        </p>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <?php require_once('partials/_footer.php'); ?>
                </div>
                <!--  END CONTENT AREA  -->
    </div>
<?php
                require_once('partials/_scripts.php');
            }
        }
?>
</body>

</html>