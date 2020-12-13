<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
{ 
    header('location:index.php');
}
else{
    $admin = $_SESSION['login'];
    ?>

            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <!-- <a href="dashboard.php" class="logo"><span>NEWS<span>PORTAL</span></span><i class="mdi mdi-layers"></i></a> -->
                    <!-- Image logo -->
                    <a href="dashboard.php" class="logo">
                        <span>
                            <img src="assets/images/Logo.png" alt="" height="60">
                        </span>
                        <i>
                            <img src="assets/images/favicon.ico" alt="" height="28">
                        </i>
                    </a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button onClick="clickBtnMobile();" class="button-menu-mobile open-left waves-effect" data-toggle="0">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                <script>
                                    function clickBtnMobile(){
                                        if($(this).data().toggle == 0)
                                        {
                                            $(this).data().toggle = 1;
                                            $(".fas.fa-arrow-left").removeClass("fa-arrow-right");
                                        }
                                        else 
                                        {
                                            $(this).data().toggle = 0;
                                            $(".fas.fa-arrow-left").addClass("fa-arrow-right");
                                        }
                                    };
                                </script>
                            </li>
                     
                    
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                          

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi,<?php echo $admin ?> </h5>
                                    </li>
                              
                                    <li><a href="change-password.php"><i class="ti-settings m-r-5"></i> Change Password</a></li>
                           
                                    <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
<?php } ?>