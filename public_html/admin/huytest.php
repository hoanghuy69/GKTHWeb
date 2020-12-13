<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
            <meta name="author" content="Coderthemes">
            <!-- App title -->
            <title>News Portal | Dashboard</title>
            <link rel="stylesheet" href="../plugins/morris/morris.css">

            <!-- App css -->
            <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
            <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
            <script src="assets/js/modernizr.min.js"></script>
        </head>


        <body class="fixed-left">

            <!-- Begin page -->
            <div id="wrapper">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="#index.php" class="logo"><span>BĐ<span>Admin</span></span><i class="mdi mdi-layers"></i></a>
                        <!-- Image logo -->
                        <!--<a href="#index.html" class="logo">-->
                            <!--<span>-->
                                <!--<img src="assets/images/logo.png" alt="" height="30">-->
                            <!--</span>-->
                            <!--<i>-->
                                <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                            <!--</i>-->
                        <!--</a>-->
                    </div>

                    <!-- Button mobile view to collapse sidebar menu -->
                
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <!-- <a href="#dashboard.php" class="logo"><span>NEWS<span>PORTAL</span></span><i class="mdi mdi-layers"></i></a> -->
                    <!-- Image logo -->
                    <a href="#dashboard.php" class="logo">
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
                                <a href="#" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi,thien </h5>
                                    </li>
                              
                                    <li><a href="#change-password.php"><i class="ti-settings m-r-5"></i> Change Password</a></li>
                           
                                    <li><a href="#logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
                </div>
                <!-- Top Bar End -->


                <!-- ========== Left Sidebar Start ========== -->
                <div class="left side-menu">
  <div class="sidebar-inner slimscrollleft">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <ul>
        <li class="menu-title">Navigation</li>

        <li class="has_sub">
          <a href="#dashboard.php" class="waves-effect"><i class="fas fa-cubes"></i> <span> Dashboard </span>
          </a>
        </li>
        <li class="has_sub">
          <a href="#javascript:void(0);" class="waves-effect"><i class="fas fa-box"></i> <span>
              Category </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="huytest2.php">Add Category</a></li>
            <li><a href="#manage-categories.php">Manage Category</a></li>
          </ul>
        </li>

        <li class="has_sub">
          <a href="#javascript:void(0);" class="waves-effect"><i class="fas fa-inbox"></i> <span>Sub
              Category </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="add-subcategory.php">Add Sub Category</a></li>
            <li><a href="#manage-subcategories.php">Manage Sub Category</a></li>
          </ul>
        </li>
        <li class="has_sub">
          <a href="#javascript:void(0);" class="waves-effect"><i class="fas fa-edit"></i> <span> Posts
            </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="add-post.php">Add Posts</a></li>
            <li><a href="#manage-posts.php">Manage Posts</a></li>
            <li><a href="#trash-posts.php">Trash Posts</a></li>
          </ul>
        </li>

        <!-- <li class="has_sub">
          <a href="#javascript:void(0);" class="waves-effect"><i class="fas fa-pager"></i> <span> Pages
            </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="#aboutus.php">About us</a></li>
            <li><a href="#contactus.php">Contact us</a></li>
          </ul>
        </li> -->
        <li class="has_sub">
          <a href="#javascript:void(0);" class="waves-effect"><i class="fas fa-comments"></i> <span>
              Comments </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="#unapprove-comment.php">Waiting for Approval </a></li>
            <li><a href="#manage-comments.php">Approved Comments</a></li>
          </ul>
        </li>
                <li class="has_sub">
          <a href="#javascript:void(0);" class="waves-effect"><i class="fas fa-user-friends"></i> <span> Admin
            </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="#add-admin.php">Create Admin</a></li>
            <li><a href="#manage-admin.php">Manage Admin</a></li>
          </ul>
        </li>
              </ul>
    </div>
    <!-- Sidebar -->
    <div class="clearfix"></div>

    <div class="help-box">
      <h5 class="text-muted m-t-0">For Help ?</h5>
      <p class=""><span class="text-custom">Email:</span> <br /> chithientest@gmail.com</p>
    </div>

  </div>
  <!-- Sidebar -left -->

</div>                <!-- Left Sidebar End -->



                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Dashboard</h4>
                                        <ol class="breadcrumb p-0 m-0">
                                            <li>
                                                <a href="##">Báo đây</a>
                                            </li>
                                            <li>
                                                <a href="##">Admin</a>
                                            </li>
                                            <li class="active">
                                                Dashboard
                                            </li>
                                        </ol>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <a href="#manage-categories.php">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="card-box widget-box-one">
                                            <i class="fas fa-box widget-one-icon"></i>
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Danh mục</p>
                                                
                                                <h2>12 <small></small></h2>
                                            </div>
                                        </div>
                                    </div>
                                </a><!-- end col -->
                                <a href="#manage-subcategories.php">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="card-box widget-box-one">
                                            <i class="fas fa-inbox widget-one-icon"></i>
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Danh mục con</p>
                                                                                                <h2>7 <small></small></h2>
                                    
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </a>

                                <a href="#manage-posts.php">                       
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="card-box widget-box-one">
                                            <i class="fas fa-edit widget-one-icon"></i>
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Bài viết đang hoạt động</p>
                                                                                                <h2>6 <small></small></h2>
                                
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </a>
                            </div>
                            <!-- end row -->
    
                            <div class="row">
                        
                                <a href="#trash-posts.php"> 
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="card-box widget-box-one">
                                            <i class="fas fa-recycle widget-one-icon"></i>
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Thùng rác</p>
                                                                                                <h2>0 <small></small></h2>
                                    
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                                                    <a href="#manage-admin.php"> 
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="card-box widget-box-one">
                                                <i class="fas fa-user-friends widget-one-icon"></i>
                                                <div class="wigdet-one-content">
                                                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Quản lý Admin</p>
                                                                                                        <h2>5 <small></small></h2>
                                        
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                                            </div>

                        </div> <!-- container -->

                    </div> <!-- content -->
                    
               <script src="https://kit.fontawesome.com/95a19bc703.js" crossorigin="anonymous"></script>
               <footer class="footer text-right">
                   
                   2020 © NewsPaper Project develop by Chi Thien 
                </footer>

                </div>

                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->


                <!-- Right Sidebar -->
                <div class="side-bar right-bar">
                    <a href="#javascript:void(0);" class="right-bar-toggle">
                        <i class="mdi mdi-close-circle-outline"></i>
                    </a>
                    <h4 class="">Settings</h4>
                    <div class="setting-list nicescroll">
                        <div class="row m-t-20">
                            <div class="col-xs-8">
                                <h5 class="m-0">Notifications</h5>
                                <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                            </div>
                            <div class="col-xs-4 text-right">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-xs-8">
                                <h5 class="m-0">API Access</h5>
                                <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                            </div>
                            <div class="col-xs-4 text-right">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-xs-8">
                                <h5 class="m-0">Auto Updates</h5>
                                <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                            </div>
                            <div class="col-xs-4 text-right">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-xs-8">
                                <h5 class="m-0">Online Status</h5>
                                <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                            </div>
                            <div class="col-xs-4 text-right">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Right-bar -->

            </div>
            <!-- END wrapper -->

            <script>
                var resizefunc = [];
            </script>

            <!-- jQuery  -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/detect.js"></script>
            <script src="assets/js/fastclick.js"></script>
            <script src="assets/js/jquery.blockUI.js"></script>
            <script src="assets/js/waves.js"></script>
            <script src="assets/js/jquery.slimscroll.js"></script>
            <script src="assets/js/jquery.scrollTo.min.js"></script>
            <script src="../plugins/switchery/switchery.min.js"></script>

            <!-- Counter js  -->
            <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
            <script src="../plugins/counterup/jquery.counterup.min.js"></script>

            <!--Morris Chart-->
            <script src="../plugins/morris/morris.min.js"></script>
            <script src="../plugins/raphael/raphael-min.js"></script>

            <!-- Dashboard init -->
            <script src="assets/pages/jquery.dashboard.js"></script>

            <!-- App js -->
            <script src="assets/js/jquery.core.js"></script>
            <script src="assets/js/jquery.app.js"></script>

        </body>
    </html>
