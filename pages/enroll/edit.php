<?php 
  require_once('../includes/authen.php');
  $sql = "SELECT * FROM `enroll` WHERE `id` = '".$_GET['enroll_id']."'";
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
                                    <li class="breadcrumb-item"><a href="edit.php?enroll_id=<?php echo $_GET['enroll_id']; ?>">แก้ไข</a>
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
                    <form action="sql/update.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">

                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>คำนำหน้า : </label>
                                            <select class="select2 form-control form-control-md" name="prefix_id"
                                                required>
                                                <option value="">-- เลือก คำนำหน้า --</option>
                                                <?php 
                                                $sql_prefix = "SELECT * FROM `prefix` ORDER BY `th` ASC";
                                                $result_prefix = $conn->query($sql_prefix);
                                                if ($result_prefix->num_rows) {
                                                while($row_prefix = $result_prefix->fetch_assoc()) { 
                                                    if($row['prefix_id'] == $row_prefix['id'])
                                                    {
                                                    $sel = "selected";
                                                    }
                                                    else
                                                    {
                                                    $sel = "";
                                                    } 
                                            ?>
                                                <option value="<?php echo $row_prefix['id']; ?>" <?php echo $sel;?>>
                                                    <?php echo $row_prefix['th'] .' / '. $row_prefix['en']; ?>
                                                </option>
                                                <?php 
                                                    }
                                                } 
                                            ?>
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="fname_th">ชื่อ (ภาษาไทย) :</label>
                                                <input type="text" class="form-control" name="fname_th" maxlength="100"
                                                    placeholder="ชื่อ (ภาษาไทย)" value="<?php echo $row['fname_th']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="lname_th">นามสกุล (ภาษาไทย) :</label>
                                                <input type="text" class="form-control" name="lname_th" maxlength="100"
                                                    placeholder="นามสกุล (ภาษาไทย)" value="<?php echo $row['lname_th']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="date_of_birth">วัน/เดือน/ปี เกิด :</label>
                                                <input type="date" class="form-control" name="date_of_birth"
                                                    placeholder="วัน/เดือน/ปี เกิด" value="<?php echo $row['date_of_birth']; ?>" required>
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="row ml-2 mr-2">
                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="id_card">เลขบัตรประชาชน :</label>
                                                <input type="number" class="form-control" name="id_card" maxlength="13"
                                                    placeholder="เลขบัตรประชาชน" value="<?php echo $row['id_card']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="fname_en">ชื่อ (ภาษาอังกฤษ) :</label>
                                                <input type="text" class="form-control" name="fname_en" maxlength="100"
                                                    placeholder="ชื่อ (ภาษาอังกฤษ)" value="<?php echo $row['fname_en']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="lname_en">นามสกุล (ภาษาอังกฤษ) :</label>
                                                <input type="text" class="form-control" name="lname_en" maxlength="100"
                                                    placeholder="นามสกุล (ภาษาอังกฤษ)" value="<?php echo $row['lname_en']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="blood_type">กรุ๊ปเลือด :</label>
                                                <input type="text" class="form-control" name="blood_type" maxlength="50"
                                                    placeholder="กรุ๊ปเลือด" value="<?php echo $row['blood_type']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row ml-2 mr-2">
                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="ethnicity">เชื้อชาติ :</label>
                                                <input type="text" class="form-control" name="ethnicity" maxlength="50"
                                                    placeholder="เชื้อชาติ" value="<?php echo $row['ethnicity']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="nationality">สัญชาติ :</label>
                                                <input type="text" class="form-control" name="nationality" maxlength="50"
                                                    placeholder="สัญชาติ" value="<?php echo $row['nationality']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="religion">ศาสนา :</label>
                                                <input type="text" class="form-control" name="religion" maxlength="50"
                                                    placeholder="ศาสนา" value="<?php echo $row['religion']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="congenital_disease">โรคประจำตัว :</label>
                                                <input type="text" class="form-control" name="congenital_disease" maxlength="100"
                                                    placeholder="โรคประจำตัว" value="<?php echo $row['congenital_disease']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row ml-2 mr-2">
                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="weight">น้ำหนัก :</label>
                                                <input type="number" class="form-control" name="weight" maxlength="50"
                                                    placeholder="น้ำหนัก" value="<?php echo $row['weight']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="height">ส่วนสูง :</label>
                                                <input type="number" class="form-control" name="height" maxlength="50"
                                                    placeholder="ส่วนสูง" value="<?php echo $row['height']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="phone">เบอร์โทรศัพท์ :</label>
                                                <input type="number" class="form-control" name="phone" maxlength="50"
                                                    placeholder="เบอร์โทรศัพท์" value="<?php echo $row['phone']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="email">อีเมล :</label>
                                                <input type="email" class="form-control" name="email" maxlength="100"
                                                    placeholder="อีเมล" value="<?php echo $row['email']; ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row ml-2 mr-2">
                                        <div class="col-xl-12 col-md-12 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="address">ที่อยู่ :</label>
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="ที่อยู่" value="<?php echo $row['address']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="row ml-2 mr-2">
                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>ปีการศึกษา : </label>
                                            <select class="select2 form-control form-control-md" name="ayear_id"
                                                required>
                                                <option value="">-- เลือก ปีการศึกษา --</option>
                                                <?php 
                                                $sql_ayear = "SELECT * FROM `academic_year` ORDER BY `name` ASC";
                                                $result_ayear = $conn->query($sql_ayear);
                                                if ($result_ayear->num_rows) {
                                                while($row_ayear = $result_ayear->fetch_assoc()) { 
                                                    if($row['ayear_id'] == $row_ayear['id'])
                                                    {
                                                    $sel = "selected";
                                                    }
                                                    else
                                                    {
                                                    $sel = "";
                                                    } 
                                            ?>
                                                <option value="<?php echo $row_ayear['id']; ?>" <?php echo $sel;?>>
                                                    <?php echo $row_ayear['name']; ?>
                                                </option>
                                                <?php 
                                                    }
                                                } 
                                            ?>
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>ระดับชั้น : </label>
                                            <select class="select2 form-control form-control-md" name="level_id" id="level"
                                                    required>
                                                    <option value="">-- เลือก ระดับชั้น --</option>
                                                        <?php 
                                                            $sql_level = "SELECT * FROM `level` ORDER BY `code` ASC";
                                                            $result_level = $conn->query($sql_level);
                                                            if ($result_level->num_rows){
                                                                while($result = $result_level->fetch_assoc()) { 
                                                                    if($row['level_id'] == $result['id'])
                                                                    {
                                                                    $sel = "selected";
                                                                    }
                                                                    else
                                                                    {
                                                                    $sel = "";
                                                                    } 
                                                        ?>
                                                            <option value="<?=$result['id']?>" <?php echo $sel;?>><?=$result['code'].' : '.$result['name']?></option>
                                                        <?php 
                                                                }
                                                            } 
                                                        ?>   
                                                </select>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>สาขา :</label>
                                            <select class="select2 form-control form-control-md" id="major" name="major_id" required>
                                                <option value="">-- เลือก สาขา --</option>
                                                <?php 
                                                $sql_major = "SELECT * FROM `major` WHERE `level_id` = '".$row['level_id']."' ";
                                                $result_major = $conn->query($sql_major);
                                                if ($result_major->num_rows){
                                                while($row_major = $result_major->fetch_assoc()) { 
                                                                                        
                                                    if($row['major_id'] == $row_major['id'])
                                                    {
                                                    $sel = "selected";
                                                    }
                                                    else
                                                    {
                                                    $sel = "";
                                                    } 
                                                ?>
                                                <option value="<?php echo $row['major_id']; ?>" <?php echo $sel;?>>
                                                    <?php echo $row_major['code'].' : '.$row_major['name']; ?>
                                                </option>
                                                <?php 
                                                        }
                                                    } 
                                                ?>  
                                            </select>
                                        </div>
                                      
                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="remark">หมายเหตุ :</label>
                                                <textarea class="form-control" style="padding: 0.438rem 1rem !important;" name="remark" rows="1" placeholder="หมายเหตุ"><?php echo $row['remark']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                      
                                    <div class="row ml-2 mr-2">
                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="weight">รูปถ่าย :</label>
                                                <a href="../images/enroll/profile/<?php echo $row['image_profile']; ?>" target="_blank"><?php echo $row['image_profile']; ?></a>
                                                <div class="media flex-column flex-md-row text-center">
                                                <div class="media-body">
                                                    <div class="d-inline-block">
                                                        <div class="form-group mb-0">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="image_profile"
                                                                    id="image_profile">
                                                                <label class="custom-file-label"
                                                                    for="image_profile">อัปโหลดรูปถ่าย</label>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <small class="text-muted ">ไฟล์ขนาดไม่เกิน 100 mb.</small>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="weight">สำเนาบัตรประชาชน :</label>
                                                <a href="../images/enroll/id_card/<?php echo $row['image_id_card']; ?>" target="_blank"><?php echo $row['image_id_card']; ?></a>
                                                <div class="media flex-column flex-md-row text-center">
                                                <div class="media-body">
                                                    <div class="d-inline-block">
                                                        <div class="form-group mb-0">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="image_id_card"
                                                                    id="image_id_card">
                                                                <label class="custom-file-label"
                                                                    for="image_id_card">อัปโหลดสำเนาบัตรประชาชน</label>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <small class="text-muted ">ไฟล์ขนาดไม่เกิน 100 mb.</small>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="weight">สำเนาทะเบียนบ้าน :</label>
                                                <a href="../images/enroll/house/<?php echo $row['image_house_registration']; ?>" target="_blank"><?php echo $row['image_house_registration']; ?></a>
                                                <div class="media flex-column flex-md-row text-center">
                                                <div class="media-body">
                                                    <div class="d-inline-block">
                                                        <div class="form-group mb-0">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="image_house_registration"
                                                                    id="image_house_registration">
                                                                <label class="custom-file-label"
                                                                    for="image_house_registration">อัปโหลดสำเนาทะเบียนบ้าน</label>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <small class="text-muted ">ไฟล์ขนาดไม่เกิน 100 mb.</small>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="weight">สำเนาทรานสคริป :</label>
                                                <a href="../images/enroll/transcript/<?php echo $row['image_transcript']; ?>" target="_blank"><?php echo $row['image_transcript']; ?></a>
                                                <div class="media flex-column flex-md-row text-center">
                                                <div class="media-body">
                                                    <div class="d-inline-block">
                                                        <div class="form-group mb-0">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="image_transcript"
                                                                    id="image_transcript">
                                                                <label class="custom-file-label"
                                                                    for="image_transcript">อัปโหลดสำเนาทรานสคริป</label>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <small class="text-muted ">ไฟล์ขนาดไม่เกิน 100 mb.</small>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                            <div class="col-md-12 text-center">

                            <input type="hidden" name="enroll_id" value="<?php echo $_GET['enroll_id']; ?>">
                            <input type="hidden" name="image_transcript" value="<?php echo $row['image_transcript']; ?>">
                            <input type="hidden" name="image_house_registration" value="<?php echo $row['image_house_registration']; ?>">
                            <input type="hidden" name="image_id_card" value="<?php echo $row['image_id_card']; ?>">
                            <input type="hidden" name="image_profile" value="<?php echo $row['image_profile']; ?>">

                                <button class="btn btn-primary waves-effect waves-float waves-light" type="submit"
                                    name="submit">บันทึก</button>
                                <a href="index.php" class="btn btn-secondary waves-effect waves-float waves-light">
                                    ยกเลิก</a>
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

    $(function(){
        var levelObject = $('#level');
        var majorObject = $('#major');

        // on change level
        levelObject.on('change', function(){
            var LevelId = $(this).val();

            majorObject.html('<option value="">-- เลือก สาขา --</option>');

            $.get('../get_major.php?level_id=' + LevelId, function(data){
                var result = JSON.parse(data);
                $.each(result, function(index, item){
                    majorObject.append(
                        $('<option></option>').val(item.id).html(item.code + ' : ' + item.name)
                    );
                });
            });
        });
    });

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