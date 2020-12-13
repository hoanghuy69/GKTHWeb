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
    $roles = mysqli_query($con,"SELECT AdminUserName,Roles FROM tbladmin WHERE (AdminUserName='$admin')");
    while($rol=mysqli_fetch_array($roles)){
        if($rol['Roles']!="Super Admin"){
            echo "Please go back!!!";
            exit();
        }
    }
    if(isset($_POST['role']))
    {
        
        $adid=intval($_GET['adid']);    
        $adminname=$_POST['adminname'];
        $adminemail=$_POST['adminemail'];
        $adminrole=$_POST['role'];

        
        // echo "<pre>";
        // print_r($adminname);
        // print_r($adminemail);
        // print_r($adminrole);
        // exit();

        $query=mysqli_query($con,"UPDATE tbladmin SET AdminUserName = '$adminname', AdminEmailId = '$adminemail', Roles = '$adminrole' WHERE tbladmin.id = $adid");
        
        if($query)
        {
            $msg="Congratulation! Admin edited.";
        }
        else
        {
            $error="Something went wrong . Please try again.";    
        } 
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>

            <title>Newsportal | Edit Admin</title>

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
                                        <h4 class="page-title">Edit Admin</h4>
                                        <ol class="breadcrumb p-0 m-0">
                                            <li>
                                                <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                <a href="#">Manage Admin </a>
                                            </li>
                                            <li class="active">
                                                Edit Admin
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
                                        <h4 class="m-t-0 header-title"><b>Edit Admin </b></h4>
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
                                                    <strong>Oh snap!</strong> <?php echo htmlentities($error);?>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <?php 
                                        //fetching Category details
                                        $adid=intval($_GET['adid']);
                                        $query=mysqli_query($con,"Select id ,tbladmin.AdminUserName as adusr,tbladmin.AdminEmailId as adml,tbladmin.CreationDate as adcredate,tbladmin.UpdationDate as adupdate,tbladmin.Roles as adrole from tbladmin where tbladmin.Is_Active=1 and  id='$adid'");
                                        $cnt=1;
                                        while($row=mysqli_fetch_array($query))
                                        {
                                        ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form class="form-horizontal" name="editadmin" method="post">
                                                    
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Admin Name</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" value="<?php echo htmlentities($row['adusr']);?>" name="adminname" required>
                                                          
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Admin Email</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"  value="<?php echo htmlentities($row['adml']);?>"  name="adminemail"required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Roles</label>
                                                        <div class="col-md-10">
                                                            <select class="form-control" name="role" required>
                                                                <option value="<?php echo htmlentities($row['adrole']);?>"><?php echo htmlentities($row['adrole']);?></option>
                                                                <?php
                                                                // Feching active categories
                                                                $ret=mysqli_query($con,"select distinct Roles from  tbladmin");
                                                                while($result=mysqli_fetch_array($ret))
                                                                {    
                                                                ?>
                                                                <option value="<?php echo htmlentities($result['Roles']);?>"><?php echo htmlentities($result['Roles']);?></option>
                                                                <?php } ?>
                                                            </select> 
                                                        </div>
                                                    </div>

                                                    <?php } ?>                                                

                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">&nbsp;</label>
                                                        <div class="col-md-10">
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
<?php } ?>