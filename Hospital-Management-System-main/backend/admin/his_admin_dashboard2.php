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
                        <!--Start OutPatients-->
                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <meta charset="UTF-8">
                            <title>Hospitals Gallery</title>
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <!-- Bootstrap CSS -->
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
                                rel="stylesheet">
                            <!-- Cursor Icon -->
                            <style>
                            body {
                                margin: 0;
                                padding: 0;
                                background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
                                background-size: 400% 400%;
                                animation: gradientBG 15s ease infinite;
                                cursor: url('https://cur.cursors-4u.net/cursors/cur-13/cur1102.cur'), auto;
                            }

                            @keyframes gradientBG {
                                0% {
                                    background-position: 0% 50%;
                                }

                                50% {
                                    background-position: 100% 50%;
                                }

                                100% {
                                    background-position: 0% 50%;
                                }
                            }

                            .hospital-card {
                                height: 100%;
                                min-height: 400px;
                                border: none;
                                border-radius: 25px;
                                overflow: hidden;
                                position: relative;
                                text-align: center;
                                color: white;
                                transition: transform 0.4s ease, box-shadow 0.4s ease;
                                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
                                opacity: 0;
                                transform: translateY(40px);
                                animation: fadeInUp 1s forwards;
                            }

                            .hospital-card:nth-child(1) {
                                animation-delay: 0.3s;
                            }

                            .hospital-card:nth-child(2) {
                                animation-delay: 0.6s;
                            }

                            .hospital-card:nth-child(3) {
                                animation-delay: 0.9s;
                            }

                            @keyframes fadeInUp {
                                to {
                                    opacity: 1;
                                    transform: translateY(0);
                                }
                            }

                            .hospital-card:hover {
                                transform: scale(1.05);
                                box-shadow: 0 0 30px rgba(255, 255, 255, 0.3);
                            }

                            .hospital-card::before {
                                content: '';
                                position: absolute;
                                top: -50%;
                                left: -50%;
                                width: 200%;
                                height: 200%;
                                background: linear-gradient(120deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
                                transform: rotate(25deg);
                                opacity: 0;
                                transition: opacity 0.6s;
                                pointer-events: none;
                            }

                            .hospital-card:hover::before {
                                opacity: 1;
                                animation: shine 1s ease-out;
                            }

                            @keyframes shine {
                                0% {
                                    transform: rotate(25deg) translateX(-100%);
                                }

                                100% {
                                    transform: rotate(25deg) translateX(100%);
                                }
                            }

                            .hospital-card img {
                                width: 150px;
                                height: 150px;
                                object-fit: cover;
                                border-radius: 30px;
                                border: 3px solid #fff;
                                box-shadow: 0 0 25px rgba(255, 255, 255, 0.3);
                                margin-bottom: 20px;
                                transition: transform 0.5s ease;
                            }

                            .hospital-card:hover img {
                                transform: scale(1.08) rotate(2deg);
                            }

                            .hospital-card h3 {
                                text-shadow: 0 0 8px #ffffff;
                                font-weight: bold;
                                font-size: 1.6rem;
                            }
                            </style>
                        </head>

                        <body>

                            <!-- Sounds -->
                            <audio id="hover-sound" src="https://cdn.pixabay.com/audio/2022/03/15/audio_9b64b45c4a.mp3"
                                preload="auto"></audio>
                            <audio id="click-sound" src="https://cdn.pixabay.com/audio/2022/03/15/audio_9f912e531e.mp3"
                                preload="auto"></audio>

                            <div class="container py-5">
                                <div class="row g-4 justify-content-center">
                                    <!-- Hospital 1 -->
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                        <div class="hospital-card"
                                            style="background: linear-gradient(135deg, #f7971e, #ffd200);">
                                            <img src="https://images.unsplash.com/photo-1586773860414-0f321a89f9cd"
                                                alt="PrimeCare Hospital">
                                            <h3>PrimeCare Hospital</h3>
                                        </div>
                                    </div>

                                    <!-- Hospital 2 -->
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                        <div class="hospital-card"
                                            style="background: linear-gradient(135deg, #00c6ff, #0072ff);">
                                            <img src="assets/images/welcarelogo.png" alt="Welcare Hospital">
                                            <h3>Welcare Hospital</h3>
                                        </div>
                                    </div>

                                    <!-- Hospital 3 -->
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                                        <div class="hospital-card"
                                            style="background: linear-gradient(135deg, #f54ea2, #ff7676);">
                                            <img src="https://images.unsplash.com/photo-1600959730503-a01263f7eab5"
                                                alt="NovaMed Center">
                                            <h3>NovaMed Center</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- JS: Hover & Click Sounds -->
                            <script>
                            const hoverSound = document.getElementById('hover-sound');
                            const clickSound = document.getElementById('click-sound');

                            document.querySelectorAll('.hospital-card').forEach(card => {
                                card.addEventListener('mouseenter', () => {
                                    hoverSound.currentTime = 0;
                                    hoverSound.play();
                                });

                                card.addEventListener('click', () => {
                                    clickSound.currentTime = 0;
                                    clickSound.play();
                                });
                            });
                            </script>
                        </body>

                        </html>


                        <!-- end col-->
                        <!--End Out Patients-->


                        <!--Start InPatients-->
                        <div class="col-md-6 col-xl-4">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="mdi mdi-hotel   font-22 avatar-title text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <?php
                                                    //code for summing up number of in / admitted  patients 
                                                    $result ="SELECT count(*) FROM his_patients WHERE pat_type = 'InPatient' ";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($inpatient);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                            <h3 class="text-dark mt-1"><span
                                                    data-plugin="counterup"><?php echo $inpatient;?></span></h3>
                                            <p class="text-muted mb-1 text-truncate">In Patients</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                        <!--End InPatients-->

                        <!--Start Employees-->
                        <div class="col-md-6 col-xl-4">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="mdi mdi-doctor font-22 avatar-title text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <?php
                                                    //code for summing up number of employees in the certain Hospital 
                                                    $result ="SELECT count(*) FROM his_docs ";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($doc);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                            <h3 class="text-dark mt-1"><span
                                                    data-plugin="counterup"><?php echo $doc;?></span></h3>
                                            <p class="text-muted mb-1 text-truncate">Hospital Employees</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                        <!--End Employees-->

                    </div>

                    <div class="row">

                        <!--Start Vendors-->
                        <div class="col-md-6 col-xl-4">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="fas fa-user-tag font-22 avatar-title text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <?php
                                                    /*code for summing up number of vendors whom supply eqipments, 
                                                     *pharms or any other equipments
                                                     */ 
                                                    $result ="SELECT count(*) FROM his_vendor ";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($vendor);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                            <h3 class="text-dark mt-1"><span
                                                    data-plugin="counterup"><?php echo $vendor;?></span></h3>
                                            <p class="text-muted mb-1 text-truncate">Vendors</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                        <!--End Vendors-->

                        <!--Start Corporation Assets-->
                        <div class="col-md-6 col-xl-4">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="mdi mdi-flask font-22 avatar-title text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <?php
                                                    /* 
                                                     * code for summing up number of assets,
                                                     */ 
                                                    $result ="SELECT count(*) FROM his_equipments ";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($assets);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                            <h3 class="text-dark mt-1"><span
                                                    data-plugin="counterup"><?php echo $assets;?></span></h3>
                                            <p class="text-muted mb-1 text-truncate">Corporation Assets</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                        <!--End Corporation Assets-->

                        <!--Start Pharmaceuticals-->
                        <div class="col-md-6 col-xl-4">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="mdi mdi-pill font-22 avatar-title text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <?php
                                                    /* 
                                                     * code for summing up number of pharmaceuticals,
                                                     */ 
                                                    $result ="SELECT count(*) FROM his_pharmaceuticals ";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($phar);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                            <h3 class="text-dark mt-1"><span
                                                    data-plugin="counterup"><?php echo $phar;?></span></h3>
                                            <p class="text-muted mb-1 text-truncate">Pharmaceuticals</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                        <!--End Pharmaceuticals-->

                    </div>



                    <!--Recently Employed Employees-->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card-box">
                                <h4 class="header-title mb-3">Hospital Employees</h4>

                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover table-centered m-0">

                                        <thead class="thead-light">
                                            <tr>
                                                <th colspan="2">Picture</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Department</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                                $ret="SELECT * FROM his_docs ORDER BY RAND() LIMIT 10 "; 
                                                //sql code to get to ten docs  randomly
                                                $stmt= $mysqli->prepare($ret) ;
                                                $stmt->execute() ;//ok
                                                $res=$stmt->get_result();
                                                $cnt=1;
                                                while($row=$res->fetch_object())
                                                {
                                            ?>
                                        <tbody>
                                            <tr>
                                                <td style="width: 36px;">
                                                    <img src="../doc/assets/images/users/<?php echo $row->doc_dpic;?>"
                                                        alt="img" title="contact-img"
                                                        class="rounded-circle avatar-sm" />
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                    <?php echo $row->doc_fname;?> <?php echo $row->doc_lname;?>
                                                </td>
                                                <td>
                                                    <?php echo $row->doc_email;?>
                                                </td>
                                                <td>
                                                    <?php echo $row->doc_dept;?>
                                                </td>
                                                <td>
                                                    <a href="his_admin_view_single_employee.php?doc_id=<?php echo $row->doc_id;?>&&doc_number=<?php echo $row->doc_number;?>"
                                                        class="btn btn-xs btn-primary"><i class="mdi mdi-eye"></i>
                                                        View</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php }?>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

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