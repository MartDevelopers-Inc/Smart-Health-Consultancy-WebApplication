<?php
session_start();
include('configs/config.php');
include('configs/codeGen.php');
//handle login
if (isset($_POST['login'])) {
    $admin_email = $_POST['admin_email'];
    $admin_password = sha1(md5($_POST['admin_password'])); //double encrypt to increase security
    $stmt = $mysqli->prepare("SELECT admin_email, admin_password, admin_id  FROM admin  WHERE (admin_email =? AND admin_password =?)");
    $stmt->bind_param('ss', $admin_email, $admin_password); //bind fetched parameters
    $stmt->execute(); //execute bind 
    $stmt->bind_result($admin_email, $admin_password, $admin_id); //bind result
    $rs = $stmt->fetch();
    $_SESSION['admin_id'] = $admin_id;
    if ($rs) {
        //if its sucessfull
        header("location:dashboard.php");
    } else {
        $err = "Access Denied Please Check Your Credentials";
    }
}
require_once('partials/_head.php');
?>

<body class="form">


    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <h1 class="">Smart Health Consultancy - Doctors` Module</h1>
                        <p class="">Fill All Fields </p>
                        <form method="POST" class="text-left">
                            <div class="form">
                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Full Name</label>

                                    <input id="username" required name="doc_name" type="text" class="form-control">
                                    <input required name="doc_id" value="<?php echo $doc_id; ?>" type="hidden" class="form-control">
                                    <input required name="doc_number" type="hidden" value="<?php echo $a; ?>-<?php echo $b; ?>" class="form-control">

                                </div>

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Email Address</label>

                                    <input id="username" required name="admin_email" type="email" class="form-control">
                                </div>

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Phone Number</label>

                                    <input id="username" required name="doc_phone" type="text" class="form-control">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">Password</label>
                                    </div>

                                    <input id="password" required name="admin_password" type="password" class="form-control">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" name="sign-up" class="btn btn-primary mixin" value="">Sign Up</button>
                                    </div>
                                </div>

                                <!-- <div class="division">
                                    <span>OR</span>
                                </div>

                                <div class="social">
                                    <a href="doc/" class="btn social-fb">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                        </svg>
                                        <span class="brand-name">Login In As Doctor</span>
                                    </a>
                                </div>-->
                                <p class="signup-link">Registered ? <a href="index.php">Log In</a></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('partials/_scripts.php'); ?>
</body>

</html>