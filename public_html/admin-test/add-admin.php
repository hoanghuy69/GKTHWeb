<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>
    <!DOCTYPE html>
    <html lang="en">
        <head>

            <title>Báo Đây | Create admin</title>

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

            <style>
                .col-md-8 .btn-hide{
                    right: 3% !important;
                    top: 0 !important;
                    padding: 0 !important;
                    width: 4rem !important;
                    height: 4rem !important;
                }
            </style>

        </head>


        <body class="fixed-left">

            <!-- Begin page -->
            <div id="wrapper">

                <!-- Top Bar Start -->
                <?php include('includes/topheader.php');?>
                <!-- Top Bar End -->


                <!-- ========== Left Sidebar Start ========== -->
                        <?php include('includes/leftsidebar.php');?>
                <!-- Left Sidebar End -->

                <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Create Admin</h4>
                                        <ol class="breadcrumb p-0 m-0">
                                            <li>
                                                <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                <a href="#">Manage Admin</a>
                                            </li>
                                            <li class="active">
                                                Create Admin
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
                                        <h4 class="m-t-0 header-title"><b>Create Admin</b></h4>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-6">  
                                            <!---Success Message--->  
                                                <?php if($msg){ ?>
                                                <div class="alert alert-success" role="alert">
                                                <strong>Well done!</strong> <?php echo htmlentities($msg);?>
                                                </div>
                                                <?php } ?>

                                                <!---Error Message--->
                                                <?php if($error){ ?>
                                                <div class="alert alert-danger" role="alert">
                                                <strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <div class="row" style="display:flex !important;">
                                            <div class="col-md-8">
                                                <form class="form-horizontal" name="createadmin" method="post" onSubmit="return valid();">
                                                    
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Tên đăng nhập</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" value="" name="username" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Email</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" value="" name="email" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Mật khẩu</label>
                                                        <div class="col-md-8">
                                                            <input type="password" name="password" id="user_pass" class="form-control password-input" value="" size="20">
                                                            <button onclick="showHidePass('user_pass','btn-hide-pass','eye-pass');" type="button" id="btn-hide-pass" class="btn-hide" data-toggle="0" aria-label="Hiện mật khẩu">
                                                                <i id="eye-pass" class="fas fa-eye"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Xác nhận lại mật khẩu</label>
                                                        <div class="col-md-8">
                                                            <input type="password" name="confirmpassword" id="user_cfrm_pass" class="form-control password-input" value="" size="20">
                                                            <button onclick="showHidePass('user_cfrm_pass','btn-hide-cfrm-pass','eye-cfrm-pass');" type="button" id="btn-hide-cfrm-pass" class="btn-hide" data-toggle="0" aria-label="Hiện mật khẩu">
                                                                <i id="eye-cfrm-pass" class="fas fa-eye"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Roles</label>
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="role" required style="width: 35% !important;">
                                                                <option value="">Chọn Role </option>
                                                                <option value="Super Admin">Super Admin</option>
                                                                <option value="Super Admin">Admin Writer</option>
                                                                    <?php
                                                                    // Feching active categories
                                                                    $ret=mysqli_query($con,"select DISTINCT Roles from  tbladmin where Is_Active=1");
                                                                    while($result=mysqli_fetch_array($ret))
                                                                    {    
                                                                    ?>
                                                                    <option value="<?php echo htmlentities($result['Roles']);?>"><?php echo htmlentities($result['Roles']);?>
                                                                    </option>
                                                                    <?php } ?>
                                                            </select> 
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">&nbsp;</label>
                                                        <div class="col-md-8">
                                                    
                                                            <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submitadmin">
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

                <?php include('includes/footer.php');?>

                </div>




            </div>
            <!-- END wrapper -->



            <script>
                var resizefunc = [];
            </script>
            <script>
                function valid()
                {
                    if(document.createadmin.password.value=="")
                    {
                        alert("Current Password Filed is Empty !!");
                        document.createadmin.password.focus();
                        return false;
                    }
                    else if(document.createadmin.confirmpassword.value=="")
                    {
                        alert("Confirm Password Filed is Empty !!");
                        document.createadmin.confirmpassword.focus();
                        return false;
                    }
                    else if(document.createadmin.password.value!= document.createadmin.confirmpassword.value)
                    {
                        alert("Password and Confirm Password Field do not match  !!");
                        document.createadmin.confirmpassword.focus();
                        return false;
                    }
                    return true;
                }
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
            <script src="assets/js/showHidePass.js"></script>

            <!-- App js -->
            <script src="assets/js/jquery.core.js"></script>
            <script src="assets/js/jquery.app.js"></script>

        </body>
    </html>
