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
        <?php include('assets/inc/sidebar.php');?>
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

                                <h4 class="page-title">MPC Clinical Management System Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <meta charset="UTF-8" />
                            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                            <title>Hospitals</title>
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
                                rel="stylesheet">
                            <style>
                            body {
                                background: linear-gradient(to right, #FFFFFFFF, #FFFFFFFF);
                                color: white;
                                font-family: 'Segoe UI', sans-serif;
                                overflow-x: hidden;
                            }

                            .hospital-card {
                                border-radius: 20px;
                                padding: 40px 20px;
                                text-align: center;
                                transition: transform 0.4s ease, box-shadow 0.4s ease;
                                height: 100%;
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                            }

                            .hospital-card:hover {
                                transform: translateY(-10px);
                                box-shadow: 0 10px 25px rgba(255, 255, 255, 0.2);
                            }

                            .hospital-title {
                                font-size: 1.6rem;
                                color: white;
                                margin-bottom: 20px;
                                text-shadow: 0 0 10px #fff;
                            }

                            .hospital-img {
                                max-width: 60%;
                                margin: 0 auto;
                                display: block;
                                border-radius: 15px;
                                box-shadow: 0 0 12px rgba(255, 255, 255, 0.4);
                            }

                            a.text-decoration-none:hover {
                                text-decoration: none !important;
                            }

                            @media (max-width: 576px) {
                                .hospital-card {
                                    padding: 30px 10px;
                                }

                                .hospital-title {
                                    font-size: 1.2rem;
                                }

                                .hospital-img {
                                    max-width: 70%;
                                }
                            }
                            </style>
                        </head>

                        <body>

                            <div class="container py-5">
                                <div class="row justify-content-center g-4">

                                    <!-- PrimeCare -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <a href="primecare.html" class="text-decoration-none">
                                            <div class="hospital-card"
                                                style="background: linear-gradient(135deg, #214B21FF, #54D8ACFF);">
                                                <h3 class="hospital-title">Zahra EL-Madaan Hospital</h3>
                                                <img src="assets/images/zahra.png" alt="PrimeCare" class="hospital-img">
                                            </div>
                                        </a>
                                    </div>

                                    <!-- Welcare -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <a href="welcare.html" class="text-decoration-none">
                                            <div class="hospital-card"
                                                style="background: linear-gradient(135deg, #A58836FF, #ECDEADFF);">
                                                <h3 class="hospital-title">Welcare Hospital</h3>
                                                <img src="assets/images/welcarelogo.png" alt="Welcare"
                                                    class="hospital-img">
                                            </div>
                                        </a>
                                    </div>

                                    <!-- NovaMed -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <a href="novamed.html" class="text-decoration-none">
                                            <div class="hospital-card"
                                                style="background: linear-gradient(135deg, #1339A3FF, #99B3FAFF);">
                                                <h3 class="hospital-title">Katameya Hospital</h3>
                                                <img src="assets/images/katameya.png" alt="NovaMed"
                                                    class="hospital-img">
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </body>

                        </html>




                        <!-- end col-->
                        <!--End Out Patients-->


                        <!--Start InPatients-->


                    </div>





                </div> <!-- container -->

            </div> <!-- content -->

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
                        <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                        <p class="inbox-item-text">I've finished it! See you so...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a>
                        </p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                        <p class="inbox-item-text">Nice to meet you</p>
                    </div>

                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                        <p class="inbox-item-text">Hey! there I'm available...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a>
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