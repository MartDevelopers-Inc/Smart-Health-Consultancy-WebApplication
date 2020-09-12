<?php
session_start();
require_once('configs/config.php');
require_once('configs/checklogin.php');

//Delete
if (isset($_GET['delete'])) {
    $doc_id = $_GET['delete'];
    $adn = "DELETE FROM medical_experts WHERE doc_id =?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $doc_id);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        //inject alert that post is shared  
        $success = "Deleted" && header("refresh:1; url=manage_docs.php");
    } else {
        //inject alert that task failed
        $info = "Please Try Again Or Try Later";
    }
}

//Verify
if (isset($_GET['verify'])) {
    $id = $_GET['id'];
    $adn = "UPDATE  medical_experts SET doc_status = 'Verified' WHERE doc_id =?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        //inject alert that post is shared  
        $success = "Verified" && header("refresh:1; url=manage_docs.php");
    } else {
        //inject alert that task failed
        $info = "Please Try Again Or Try Later";
    }
}
//Unverify
if (isset($_GET['unverify'])) {
    $id = $_GET['id'];
    $adn = "UPDATE  medical_experts SET doc_status = 'Pending' WHERE doc_id =?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        //inject alert that post is shared  
        $success = "Un Verified" && header("refresh:1; url=manage_docs.php");
    } else {
        //inject alert that task failed
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
                                <li class="breadcrumb-item active" aria-current="page"><span>Manage Medical Experts</span></li>
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

                            <a class="btn btn-outline-success" href="add_medical_expert.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                                Add New Medical Expert
                            </a>

                            <a class="btn btn-outline-primary" href="add_medical_expert.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                                Import .XLS Document
                            </a>
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Account Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $ret = "SELECT * FROM `medical_experts` ";
                                        $stmt = $mysqli->prepare($ret);
                                        $stmt->execute(); //ok
                                        $res = $stmt->get_result();
                                        while ($row = $res->fetch_object()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row->doc_number; ?></td>
                                                <td><?php echo $row->doc_name; ?></td>
                                                <td><?php echo $row->doc_email; ?></td>
                                                <td><?php echo $row->doc_phone; ?></td>
                                                <td>
                                                    <?php
                                                    if ($row->doc_status == 'Pending') {
                                                        echo "<span class='badge outline-badge-danger'>$row->doc_status</span>";
                                                    } else {
                                                        echo "<span class='badge outline-badge-success'>$row->doc_status</span>";
                                                    }
                                                    ?> 
                                                </td>

                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-dark btn-sm">Manage Doctor</button>
                                                        <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                            <a class="dropdown-item" href="view_doc.php?view=<?php echo $row->doc_id;?>">View Account</a>
                                                            <a class="dropdown-item" href="update_doc.php?update=<?php echo $row->doc_id;?>">Update Account</a>
                                                            <?php 
                                                                if($row->doc_status == 'Pending'){
                                                                    echo "<a class='dropdown-item badge ouline-badge-success' href='manage_docs.php?verify=$row->doc_id&id=$row->doc_id'>Verify Account</a>";
                                                                }
                                                                else {
                                                                    echo "<a class='dropdown-item badge outline-badge-danger' href='manage_docs.php?unverify=$row->doc_id&id=$row->doc_id'>Un Verify Account</a>";
                                                                }
                                                            ?>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="manage_docs.php?delete=<?php echo $row->doc_id;?>">Delete Account</a>
                                                        </div>
                                                    </div>
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