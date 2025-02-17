<?php 
  require_once('../includes/authen.php');
  $sql = "SELECT * FROM `view_enroll` WHERE `id` = '".$_GET['enroll_id']."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html class="loading bordered-layout" lang="en" data-layout="bordered-layout" data-textdirection="ltr">
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
    <title>สมัครเรียน</title>
    <link rel="apple-touch-icon" href="../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/pages/app-user.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
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

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <?php require_once('../includes/menu.php'); ?>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">สมัครเรียน</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="view.php?enroll_id=<?php echo $row['enroll_id']; ?>">แสดง</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section id="basic-input">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">

                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>คำนำหน้า :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['th'].' / '.$row['en']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>ชื่อ (ภาษาไทย) :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['fname_th']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>นามสกุล (ภาษาไทย) :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['lname_th']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>ชื่อ (ภาษาอังกฤษ) :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['fname_en']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>นามสกุล (ภาษาอังกฤษ) :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['lname_en']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>เลขบัตรประชาชน :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['id_card']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>วัน/เดือน/ปี เกิด :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['date_of_birth']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>กรุ๊ปเลือด :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['blood_type']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>เชื้อชาติ :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['ethnicity']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>สัญชาติ :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['nationality']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>ศาสนา :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['religion']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>โรคประจำตัว :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['congenital_disease']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>น้ำหนัก :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['weight']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>ส่วนสูง :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['height']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>เบอร์โทรศัพท์ :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['phone']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>อีเมล :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['email']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>ที่อยู่ :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['address']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>ปีการศึกษา :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['ayear_name']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>ระดับชั้น :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['level_name']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>สาขา :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['major_name']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>หมายเหตุ :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['remark']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>รูปถ่าย :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                            <h4> <a href="../images/enroll/profile/<?php echo $row['image_profile']; ?>" target="_blank"><?php echo $row['image_profile']; ?></a></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>สำเนาบัตรประชาชน :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4> <a href="../images/enroll/id_card/<?php echo $row['image_id_card']; ?>" target="_blank"><?php echo $row['image_id_card']; ?></a></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>สำเนาทะเบียนบ้าน :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4> <a href="../images/enroll/house/<?php echo $row['image_house_registration']; ?>" target="_blank"><?php echo $row['image_house_registration']; ?></a></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>สำเนาทรานสคริป :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4> <a href="../images/enroll/transcript/<?php echo $row['image_transcript']; ?>" target="_blank"><?php echo $row['image_transcript']; ?></a></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>วันที่สร้าง :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['create_date']; ?></h4>
                                        </div>

                                        <div class="col-xl-2 col-md-2 col-12 mb-2">
                                                <h4>วันที่อัปเดตล่าสุด :</h4>
                                        </div>
                                        <div class="col-xl-10 col-md-10 col-12 mb-2">
                                                <h4><?php echo $row['update_date']; ?></h4>
                                        </div>

                                    </div>
                                      
                                </div>
                            </div>
                        </div>
                            <div class="col-md-12 text-center">
                            <input type="hidden" name="opd_id" value="<?php echo $_GET['id']; ?>">
                                <a href="index.php" class="btn btn-secondary waves-effect waves-float waves-light">
                                    ย้อนกลับ</a>
                            </div>
                    </form>
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php require_once('../includes/footer.php'); ?>

    <!-- BEGIN: Vendor JS-->
    <script src="../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
    <script src="../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../app-assets/js/core/app-menu.js"></script>
    <script src="../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../app-assets/js/scripts/pages/app-user-list.js"></script>
    <script src="../../app-assets/js/scripts/tables/table-datatables-basic.js"></script>
    <script src="../../app-assets/js/scripts/forms/form-select2.js"></script>
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

    // รูป
    $('.custom-file-input').on('change', function() {
        var size = this.files[0].size / 1024 / 1024
        if (size.toFixed(100) > 100) {
            alert('ขนาดไฟล์ต้องไม่เกิน 100 MB')
        } else {
            var fileName = $(this).val().split('\\').pop()
            $(this).siblings('.custom-file-label').html(fileName)
            if (this.files[0]) {
                var reader = new FileReader()
                $('.figure').addClass('d-block')
                reader.onload = function(e) {
                    $('#imgUpload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0])
            }
        }
    })
    </script>
</body>
<!-- END: Body-->

</html>