<?php
require_once '../includes/authen.php';

$sql_car = "SELECT * FROM view_car WHERE delivery_date BETWEEN date(NOW()) AND (NOW() + INTERVAL 7 DAY) AND status = 'จอง'";
$result_car = $conn->query($sql_car);

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
    <title>กำหนดส่งมอบ</title>
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

     <!-- BEGIN: Custom Search Builder -->
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/searchbuilder/1.3.0/css/searchBuilder.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">
    <!-- END: Custom Search Builder -->

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

    <?php require_once '../includes/menu.php';?>

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
                            <h2 class="content-header-title float-left mb-0">กำหนดส่งมอบ (ภายใน 7 วัน)</h2>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12">
                    <div class="form-group breadcrumb-right">
                        <div class="text-right mr-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- <table class="datatables-basic table"> -->
                                <table id="example" class="table table-striped table-bordered nowrap"
                                    style="width:100%;">
                                    <thead class="thead-default">
                                        <tr>
                                            <!-- <th class="text-center" style="width: 110px;">ลำดับ</th> -->
                                            <th class="text-center">เลขตัวถัง</th>
                                            <th class="text-center">สี</th>
                                            <th class="text-center">Location</th>
                                            <th class="text-center">สาขาที่ทำการจอง/ขาย</th>
                                            <th class="text-center">ชื่อลูกค้า</th>
                                            <th class="text-center">อายุรถ (ปี)</th>
                                            <th class="text-center">กำหนดส่งมอบ</th>
                                            <th class="text-center">สถานะ TMC</th>
                                            <th class="text-center">สถานะ</th>
                                            <th class="text-center">จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $num = 0;
                                    while ($row_car = $result_car->fetch_assoc()) {
                                    $num++;
                                    ?>
                                        <tr>
                                            <!-- <td class="text-center" style="width: 110px;"><?php echo $num; ?></td> -->
                                            <td class="text-center"><?php echo $row_car['mc_no']; ?></td>
                                            <td class="text-center"><?php echo $row_car['color']; ?></td>
                                            <td><?php echo $row_car['location']; ?></td>
                                            <td><?php echo $row_car['branch']; ?></td>
                                            <td><?php echo $row_car['buy_by']; ?></td>
                                            <td class="text-center"><?php echo $row_car['age']; ?></td>
                                            <td class="text-center"><?php echo $row_car['delivery_date']; ?></td>
                                            <td class="text-center"><?php echo $row_car['tmc']; ?></td>
                                            <td class="text-center">
                                            <?php if ($row_car['status'] == 'ขายแล้ว') {?>
                                                <div class="badge badge-pill badge-light-secondary"> <?php echo $row_car['status']; ?></div>
                                            <?php } elseif ($row_car['status'] == 'ว่าง') {?>
                                                <div class="badge badge-pill badge-light-success"> <?php echo $row_car['status']; ?></div>
                                            <?php } else {?>
                                                <div class="badge badge-pill badge-light-danger"> <?php echo $row_car['status']; ?></div>
                                            <?php }?>
                                            </td>
                                            <td class="text-center">
                                                <a href="view.php?car_id=<?php echo $row_car['id']; ?>" class="btn btn-info btn-icon box-shadow" style="width: 79.25px;"><i
                                                        data-feather='eye'></i> แสดง</a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php require_once '../includes/footer.php';?>

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

    <!-- BEGIN: Custom Search Builder JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/searchbuilder/1.3.0/js/dataTables.searchBuilder.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
    <!-- END: Custom Search Builder JS-->

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
        if (size.toFixed(25) > 25) {
            alert('ขนาดไฟล์ต้องไม่เกิน 25MB')
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

    // ลบ
    function deleteItem(id, classs) {
        Swal.fire({
            title: 'ต้องการลบข้อมูล ' + classs + ' หรือไม่?',
            type: "warning",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: 'ลบ',
            cancelButtonText: 'ยกเลิก',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = `sql/delete.php?car_id=${id}`;
            }
        })
    }

    // dataTable
    $.extend(true, $.fn.dataTable.defaults, {
        "language": {
            "sProcessing": "กำลังดำเนินการ...",
            "sLengthMenu": "แสดง  _MENU_ แถว",
            "sZeroRecords": "ไม่พบข้อมูล",
            "sInfo": "แสดง  _START_  ถึง _END_  จาก _TOTAL_  แถว",
            "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
            "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
            "sInfoPostFix": "",
            "sLength": "แถว",
            "sSearch": "ค้นหา:",
            "sSearchPlaceholder": "ค้นหา",
            "sUrl": "",
            "oPaginate": {
                "sFirst": "เริ่มต้น",
                "sPrevious": "ก่อนหน้า",
                "sNext": "ถัดไป",
                "sLast": "สุดท้าย"
            }
        }
    });

    $(document).ready(function() {
        $.extend(true, $.fn.dataTable.defaults, { // datatables language
            language: {
                searchBuilder: {
                    add: 'ค้นหา',
                    button: 'Filtres',
                    clearAll: 'รีเซ็ต',
                    condition: 'เงื่อนไข',
                    conditions: {
                        date: {
                            before: 'ก่อน',
                            after: 'หลัง',
                            equals: 'เท่ากับ',
                            not: 'ไม่เท่ากับ',
                            between: 'ระหว่าง',
                            notBetween: 'ไม่อยู่ระหว่าง',
                            empty: 'ว่าง',
                            notEmpty: 'ไม่ว่าง'
                        },
                        moment: {
                            before: 'ก่อน',
                            after: 'หลัง',
                            equals: 'เท่ากับ',
                            not: 'ไม่เท่ากับ',
                            between: 'ระหว่าง',
                            notBetween: 'ไม่อยู่ระหว่าง',
                            empty: 'ว่าง',
                            notEmpty: 'ไม่ว่าง'
                        },
                        number: {
                            equals: 'เท่ากับ',
                            not: 'ไม่เท่ากับ',
                            gt: 'มากกว่า',
                            gte: 'มากกว่าหรือเท่ากับ',
                            lt: 'น้อยกว่า',
                            lte: 'น้อยกว่าหรือเท่ากับ',
                            between: 'ระหว่าง',
                            notBetween: 'ไม่อยู่ระหว่าง',
                            empty: 'ว่าง',
                            notEmpty: 'ไม่ว่าง'
                        },
                        string: {
                            contains: 'ประกอบด้วย',
                            notContains: 'ไม่ประกอบด้วย',
                            empty: 'ว่าง',
                            notEmpty: 'ไม่ว่าง',
                            equals: 'เท่ากับ',
                            not: 'ไม่เท่ากับ',
                            endsWith: 'ลงท้ายด้วย',
                            startsWith: 'เริ่มต้นด้วย',
                            notEndsWith: 'ไม่ลงท้ายด้วย',
                            notStartsWith: 'ไม่เริ่มต้นด้วย'
                        },
                    },
                    data: 'ฟิลด์',
                    logicAnd: 'และ',
                    logicOr: 'หรือ',
                    title: {
                        0: 'ค้นหา',
                        _: 'ค้นหา (%d)'
                    },
                    deleteTitle: 'ลบ',
                    leftTitle: 'หลัก',
                    rightTitle: 'ย่อย',
                    value: 'ข้อมูล',
                },

                select: {
                    rows: {
                        _: " %d แถวที่เลือก",
                        0: "",
                        1: "เลือก 1 แถว"
                    }
                },
                aria: {
                    sortDescending: " - คลิก Enter เพื่อเรียงลำดับจากมากไปหาน้อย",
                    sortAscending: " - คลิก Enter เพื่อเรียงลำดับจากน้อยไปมาก"
                }
            }
        });
        var table = $('#example').DataTable({
            dom: "'Qlfrtip'",
            order: [
                [0, 'asc'],
                [1, 'asc'],
                [2, 'desc']
            ],
            searchBuilder: {
                columns: [0, 1, 2, 3, 4, 5]
            }
        });

    });
    </script>
</body>
<!-- END: Body-->

</html>