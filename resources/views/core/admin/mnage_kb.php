<?php
session_start();
require_once('configs/config.php');
require_once('configs/checklogin.php');

//Delete
if (isset($_GET['delete'])) {
    $kb_id = $_GET['delete'];
    $adn = "DELETE FROM knowledge_base WHERE kb_id =?";
    $stmt = $mysqli->prepare($adn);
    $stmt->bind_param('s', $kb_id);
    $stmt->execute();
    $stmt->close();
    if ($stmt) {
        $success = "Deleted" && header("refresh:1; url=mnage_kb.php");
    } else {
        //inject alert that task failed
        $info = "Please Try Again Or Try Later";
    }
}

require_once('partials/_head.php');
?>

<body data-spy="scroll" data-target="#navSection" data-offset="140">

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
                                <li class="breadcrumb-item"><a href="create_kb.php">Knowledge Base</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Manage Knowlegde Base</span></li>
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
                        <div id="iconsAccordion" class="accordion-icons">
                            <?php
                            $ret = "SELECT * FROM `knowledge_base` ";
                            $stmt = $mysqli->prepare($ret);
                            $stmt->execute(); //ok
                            $res = $stmt->get_result();
                            while ($row = $res->fetch_object()) {
                            ?>
                                <div class="card">
                                    <div class="card-header" id="headingOne3">
                                        <section class="mb-0 mt-0">
                                            <div role="menu" class="collapsed" data-toggle="collapse" data-target="#<?php echo $row->kb_id;?>" aria-expanded="true" aria-controls="iconAccordionOne">
                                                <div class="accordion-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                                                        <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                                    </svg>
                                                </div>
                                                <?php echo $row->kb_title;?>
                                                <div class="icons">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                    <div id="<?php echo $row->kb_id;?>" class="collapse" aria-labelledby="headingOne3" data-parent="#iconsAccordion">
                                        <div class="card-body">
                                            <p class="">
                                                <?php echo $kb_desc;?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
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
    <?php require_once('partials/_scripts.php'); ?>

    </html>