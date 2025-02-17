<?php 
  session_start();
  require_once('includes/connect.php');

  if (isset($_POST['submit'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM `user` WHERE `email` = '".$email."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!empty($row) && password_verify($password, $row['password'] )){
      $_SESSION['id'] = $row['id'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['lname'] = $row['lname'];
      $_SESSION['role'] = $row['role'];

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal.fire({
            title: "ยินดีต้อนรับ <br>'. $_SESSION['fname'] .' '. $_SESSION['lname'] .' ",
            type: "success",
            icon: "success"
        });';
        echo '}, 500 );</script>';

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { 
            window.location.href = "enroll/index.php";';
        echo '}, 2000 );</script>';

    } else {        
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal.fire({
            title: "ผิดพลาด!",
            text: "กรุณาลองใหม่!",
            type: "warning",
            icon: "error"
        });';
        echo '}, 500 );</script>';

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { 
            window.location.href = "login.php";';
        echo '}, 2000 );</script>';
    }
  }
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>ระบบสมัครเรียน</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors-rtl.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/page-auth.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

    <!-- BEGIN: fonts-->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

    body {
        font-family: 'Prompt', sans-serif;
        font-size: 16px;
    }

    .new-title-css {
        font-family: 'Prompt', sans-serif;
        font-size: 26px;
        font-weight: revert;
    }
    </style>
    <!-- END: fonts-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="">

    <div class="auth-wrapper auth-v1 px-2">
        <div class="auth-inner py-2">
            <!-- Login v1 -->
            <div class="card mb-0">
                <div class="card-body">
                    <a href="javascript:void(0);" class="brand-logo">
                        <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                            <defs>
                                <linearGradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                    y2="89.4879456%">
                                    <stop stop-color="#000000" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%"
                                    y2="100%">
                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                    <g id="Group" transform="translate(400.000000, 178.000000)">
                                        <path class="text-primary" id="Path"
                                            d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                            style="fill: currentColor"></path>
                                        <path id="Path1"
                                            d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                            fill="url(#linearGradient-1)" opacity="0.2"></path>
                                        <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                            points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                        </polygon>
                                        <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                            points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                        </polygon>
                                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                            points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h2 class="brand-text text-primary ml-1">ระบบสมัครเรียน</h2>
                    </a>

                    <form class="mt-2" action="" method="POST">
                        <div class="form-group">
                            <label for="email" class="form-label">อีเมล</label>
                            <input type="email" class="form-control" name="email" placeholder="อีเมล" tabindex="1"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">รหัสผ่าน</label>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" name="password"
                                    tabindex="2" placeholder="············" required>
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg></span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" name="submit"
                            class="btn btn-primary btn-block waves-effect waves-float waves-light"
                            tabindex="3">เข้าสู่ระบบ</button>
                            <br>
                        <a href="enroll.php">สมัครเรียน</a>
                        <!-- ยังไม่มีบัญชีผู้ใช้งาน? <a href="register.php">สมัครสมาชิก</a> -->
                    </form>



                </div>
            </div>
            <!-- /Login v1 -->
        </div>
    </div>


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.min.js"></script>
    <script src="../app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/page-auth-login.js"></script>
    <!-- END: Page JS-->

    <script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
    </script>
</body>
<!-- END: Body-->

</html>