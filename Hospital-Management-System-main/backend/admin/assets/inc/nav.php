<?php
    $aid=$_SESSION['ad_id'];
    $ret="select * from his_admin where ad_id=?";
    $stmt= $mysqli->prepare($ret) ;
    $stmt->bind_param('i',$aid);
    $stmt->execute() ;//ok
    $res=$stmt->get_result();
    //$cnt=1;
    while($row=$res->fetch_object())
    {
?>
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">




        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#"
                role="button" aria-haspopup="false" aria-expanded="false">
                <img src="assets/images/users/<?php echo $row->ad_dpic;?>" alt="dpic" class="rounded-circle">
                <span class="pro-user-name ml-1">
                    <?php echo $row->ad_fname;?> <?php echo $row->ad_lname;?> <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <!-- <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div> -->

                <!-- item-->
                <!-- <a href="his_admin_account.php" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a> -->


                <!-- <div class="dropdown-divider"></div> -->

                <!-- item-->
                <a href="his_admin_logout_partial.php" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>



    </ul>


    <!-- LOGO -->
    <div class="logo-box">
        <a href="his_admin_dashboard2.php" class="logo text-center">
            <span class="logo-lg">
                <img src="assets/images/favicon.png" alt="" height="40">
                <!-- <span class="logo-lg-text-light">UBold</span> -->
            </span>





            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Hospitals</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
                <style>
                .logo-sm img {
                    content: url(assets/images/favicon.png.png);
                }
                </style>
            </head>



            </html>










            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark">U</span> -->
                <img src="assets/images/favicon.png" alt="" height="24">
            </span>
        </a>
    </div>


</div>
<?php }?>