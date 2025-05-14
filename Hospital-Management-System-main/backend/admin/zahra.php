<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['ad_id'];
?>
<!DOCTYPE html>
<html lang="en">

<!--Head Code-->
<?php include("assets/inc/head.php");?>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php include('assets/inc/nav.php');?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include('assets/inc/sidebar2.php');?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">

                                <h4 class="page-title">Hospital Management System Dashboard</h4>
                                <h4 class="page-title">Zahra EL-Madaan Hospital</h4>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">

                        <!-- end col-->
                        <!--End Out Patients-->
                        <style>
                        .custom-card {
                            width: 100%;
                            aspect-ratio: 1 / 1;
                            transition: transform 0.3s ease, box-shadow 0.3s ease;
                            border-radius: 16px;
                            padding: 0.8rem;
                            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
                            font-size: 1rem;
                        }

                        .custom-card:hover {
                            transform: translateY(-4px);
                            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
                        }

                        .custom-avatar {
                            width: 50px;
                            height: 50px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            border-radius: 50%;
                            margin: auto;
                            font-size: 22px;
                        }

                        .fade-in {
                            animation: fadeInUp 0.5s ease forwards;
                            opacity: 0;
                        }

                        @keyframes fadeInUp {
                            0% {
                                transform: translateY(15px);
                                opacity: 0;
                            }

                            100% {
                                transform: translateY(0);
                                opacity: 1;
                            }
                        }

                        /* تغيير لون الكتابة */
                        .custom-card h6,
                        .custom-card small {
                            color: black;
                        }

                        /* تكبير حجم العداد */
                        .custom-card h6 {
                            font-size: 2rem;
                            /* زيادة حجم العداد */
                            font-weight: bold;
                        }

                        .custom-card small {
                            font-size: 1rem;
                            /* تكبير حجم النص أسفل العداد */
                        }
                        </style>

                        <div class="row justify-content-center">
                            <?php
        $types = [
            ["icon" => "fa-user-injured", "label" => "Out Patients", "gradient" => "linear-gradient(135deg, #74ebd5, #ACB6E5)"],
            ["icon" => "fa-user-md", "label" => "In Patients", "gradient" => "linear-gradient(135deg, #fbc2eb, #a6c1ee)"],
            ["icon" => "fa-ambulance", "label" => "Emergency", "gradient" => "linear-gradient(135deg, #ffecd2, #fcb69f)"],
            ["icon" => "fa-stethoscope", "label" => "Doctors", "gradient" => "linear-gradient(135deg, #c2e9fb, #a1c4fd)"],
            ["icon" => "fa-user-nurse", "label" => "Nurses", "gradient" => "linear-gradient(135deg, #fddb92, #d1fdff)"],
            ["icon" => "fa-hospital", "label" => "Departments", "gradient" => "linear-gradient(135deg, #f6d365, #fda085)"]
        ];

        foreach ($types as $index => $item):
            $count = rand(50, 999);
    ?>
                            <div class="col-6 col-md-4 col-lg-4 mb-3 fade-in"
                                style="animation-delay: <?php echo $index * 0.1; ?>s;">
                                <div class="custom-card text-center text-white"
                                    style="background: <?php echo $item['gradient']; ?>;">
                                    <div class="custom-avatar bg-white text-dark mb-2">
                                        <i class="fas <?php echo $item['icon']; ?>"></i>
                                    </div>
                                    <h6 class="mb-0"><span data-plugin="counterup"><?php echo $count; ?></span></h6>
                                    <small class="d-block"><?php echo $item['label']; ?></small>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- end col-->
                        <!--End InPatients-->

                        <!--Start Employees-->


                        <!-- Footer Start -->
                        <?php include('assets/inc/footer.php');?>
                        <!-- end Footer -->

                    </div>

                    <!-- ============================================================== -->
                    <!-- End Page content -->
                    <!-- ============================================================== -->


                </div>
                <!-- END wrapper -->

                <!-- Right Sidebar -->
                <div class="right-bar">
                    <div class="rightbar-title">
                        <a href="javascript:void(0);" class="right-bar-toggle float-right">
                            <i class="dripicons-cross noti-icon"></i>
                        </a>
                        <h5 class="m-0 text-white">Settings</h5>
                    </div>
                    <div class="slimscroll-menu">
                        <!-- User box -->
                        <div class="user-box">
                            <div class="user-img">
                                <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                                    class="rounded-circle img-fluid">
                                <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                            </div>

                            <h5><a href="javascript: void(0);">Geneva Kennedy</a> </h5>
                            <p class="text-muted mb-0"><small>Admin Head</small></p>
                        </div>

                        <!-- Settings -->
                        <hr class="mt-0" />
                        <h5 class="pl-3">Basic Settings</h5>
                        <hr class="mb-0" />

                        <div class="p-3">
                            <div class="checkbox checkbox-primary mb-2">
                                <input id="Rcheckbox1" type="checkbox" checked>
                                <label for="Rcheckbox1">
                                    Notifications
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary mb-2">
                                <input id="Rcheckbox2" type="checkbox" checked>
                                <label for="Rcheckbox2">
                                    API Access
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary mb-2">
                                <input id="Rcheckbox3" type="checkbox">
                                <label for="Rcheckbox3">
                                    Auto Updates
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary mb-2">
                                <input id="Rcheckbox4" type="checkbox" checked>
                                <label for="Rcheckbox4">
                                    Online Status
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary mb-0">
                                <input id="Rcheckbox5" type="checkbox" checked>
                                <label for="Rcheckbox5">
                                    Auto Payout
                                </label>
                            </div>
                        </div>

                        <!-- Timeline -->
                        <hr class="mt-0" />
                        <h5 class="px-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                        <hr class="mb-0" />
                        <div class="p-3">
                            <div class="inbox-widget">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author"><a href="javascript: void(0);"
                                            class="text-dark">Tomaslau</a></p>
                                    <p class="inbox-item-text">I've finished it! See you so...</p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author"><a href="javascript: void(0);"
                                            class="text-dark">Stillnotdavid</a>
                                    </p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author"><a href="javascript: void(0);"
                                            class="text-dark">Kurafire</a></p>
                                    <p class="inbox-item-text">Nice to meet you</p>
                                </div>

                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author"><a href="javascript: void(0);"
                                            class="text-dark">Shahedk</a></p>
                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                </div>
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author"><a href="javascript: void(0);"
                                            class="text-dark">Adhamdannaway</a>
                                    </p>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                </div>
                            </div> <!-- end inbox-widget -->
                        </div> <!-- end .p-3-->

                    </div> <!-- end slimscroll-menu-->
                </div>
                <!-- /Right-bar -->

                <!-- Right bar overlay-->
                <div class="rightbar-overlay"></div>

                <!-- Vendor js -->
                <script src="assets/js/vendor.min.js"></script>

                <!-- Plugins js-->
                <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
                <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
                <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
                <script src="assets/libs/flot-charts/jquery.flot.js"></script>
                <script src="assets/libs/flot-charts/jquery.flot.time.js"></script>
                <script src="assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
                <script src="assets/libs/flot-charts/jquery.flot.selection.js"></script>
                <script src="assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

                <!-- Dashboar 1 init js-->
                <script src="assets/js/pages/dashboard-1.init.js"></script>

                <!-- App js-->
                <script src="assets/js/app.min.js"></script>

</body>

</html>