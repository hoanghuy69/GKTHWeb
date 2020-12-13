

    <!DOCTYPE html>
    <html lang="en">
        <head>

            <title>Newsportal | Add Category</title>

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
                    <!-- <a href="dashboard.php" class="logo"><span>NEWS<span>PORTAL</span></span><i class="mdi mdi-layers"></i></a> -->
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
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
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
            <li><a href="#add-category.php">Add Category</a></li>
            <li><a href="#manage-categories.php">Manage Category</a></li>
          </ul>
        </li>

        <li class="has_sub">
          <a href="#javascript:void(0);" class="waves-effect"><i class="fas fa-inbox"></i> <span>Sub
              Category </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="#add-subcategory.php">Add Sub Category</a></li>
            <li><a href="#manage-subcategories.php">Manage Sub Category</a></li>
          </ul>
        </li>
        <li class="has_sub">
          <a href="#javascript:void(0);" class="waves-effect"><i class="fas fa-edit"></i> <span> Posts
            </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="#add-post.php">Add Posts</a></li>
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

                <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        <div class="container">


                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Add Category</h4>
                                        <ol class="breadcrumb p-0 m-0">
                                            <li>
                                                <a href="##">Admin</a>
                                            </li>
                                            <li>
                                                <a href="#">Category </a>
                                            </li>
                                            <li class="active">
                                                Add Category
                                            </li>
                                        </ol>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box">
                                        <h4 class="m-t-0 header-title"><b>Add Category </b></h4>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-6">  
                                                <!---Success Message--->  
                                                
                                                <!---Error Message--->
                                                                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <form class="form-horizontal" name="category" method="post">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Category</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" value="" name="category" required>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Category Description</label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" rows="5" name="description" required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">&nbsp;</label>
                                                        <div class="col-md-10">
                                                            <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                                Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                        </div> <!-- container -->

                    </div> <!-- content -->

                    
               <script src="https://kit.fontawesome.com/95a19bc703.js" crossorigin="anonymous"></script>
               <footer class="footer text-right">
                   
                   2020 © NewsPaper Project develop by Chi Thien 
                </footer>

                </div>
            </div>

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

            <!-- App js -->
            <script src="assets/js/jquery.core.js"></script>
            <script src="assets/js/jquery.app.js"></script>

        </body>
    </html>
