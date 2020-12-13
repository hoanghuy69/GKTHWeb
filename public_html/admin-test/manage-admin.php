<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
{ 
    header('location:index.php');
}
else
{
    $admin = $_SESSION['login'];
    $roles = mysqli_query($con,"SELECT AdminUserName,Roles FROM tbladmin WHERE (AdminUserName='$admin')");
    while($rol=mysqli_fetch_array($roles)){
        if($rol['Roles']!="Super Admin"){
            echo "Please go back!!!";
            exit();
        }
    }
    if($_GET['action']=='del' && $_GET['adid'])
    {
        $id=intval($_GET['adid']);
        $query=mysqli_query($con,"update  tbladmin set Is_Active='0' where id='$id'");
        $msg="Admin deleted ";
    }
    // Code for restore
    if($_GET['readid'])
    {
        $id=intval($_GET['readid']);
        $query=mysqli_query($con,"update  tbladmin set Is_Active='1' where id='$id'");
        $msg="Admin restored successfully";
    }

    // Code for Forever deletionparmdel
    if($_GET['action']=='perdel' && $_GET['adid'])
    {
        $id=intval($_GET['adid']);
        $query=mysqli_query($con,"delete from  tbladmin  where id='$id'");
        $delmsg="Admin deleted forever";
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title> Báo Đây | Manage Admin</title>
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

                <!-- ========== Left Sidebar Start ========== -->
                <?php include('includes/leftsidebar.php');?>
                <!-- Left Sidebar End -->
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
                                        <h4 class="page-title">Manage Admin</h4>
                                        <ol class="breadcrumb p-0 m-0">
                                            <li>
                                                <a href="#">Admin</a>
                                            </li>
                                            <li>
                                                <a href="#">Admin </a>
                                            </li>
                                            <li class="active">
                                            Manage Admin
                                            </li>
                                        </ol>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row">
                                <div class="col-sm-6">  
                                
                                <?php if($msg){ ?>
                                <div class="alert alert-success" role="alert">
                                    <strong>Well done!</strong> <?php echo htmlentities($msg);?>
                                </div>
                                <?php } ?>

                                <?php if($delmsg){ ?>
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> <?php echo htmlentities($delmsg);?>
                                </div>
                                <?php } ?>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="demo-box m-t-20">
                                        <div class="m-b-30">
                                            <a href="add-admin.php">
                                                <button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="fas fa-plus-circle"></i></button>
                                            </a>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Admin</th>
                                                        <th>Email</th>
                                                        <th>Creation Date</th>
                                                        <th>Last Updation Date</th>
                                                        <th>Roles</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $query=mysqli_query($con,"Select id as adminid,tbladmin.AdminUserName as adusr,tbladmin.AdminEmailId as adml,tbladmin.CreationDate as adcredate,tbladmin.UpdationDate as adupdate,tbladmin.Roles as adrole from tbladmin where tbladmin.Is_Active=1");
                                                    $cnt=1;
                                                    $rowcount=mysqli_num_rows($query);
                                                    if($rowcount==0)
                                                    {
                                                        ?>
                                                        <tr>
                                                            <td colspan="7" align="center"><h3 style="color:red">No record found</h3></td>
                                                        <tr>
                                                        <?php 
                                                    } 
                                                    else 
                                                    {
                                                        while($row=mysqli_fetch_array($query))
                                                        {
                                                        ?>

                                                        <tr>
                                                            <th scope="row"><?php echo htmlentities($cnt);?></th>
                                                            <td><?php echo htmlentities($row['adusr']);?></td>
                                                            <td><?php echo htmlentities($row['adml']);?></td>
                                                            <td><?php echo htmlentities($row['adcredate']);?></td>
                                                            <td><?php echo htmlentities($row['adupdate']);?></td>
                                                            <td><?php echo htmlentities($row['adrole']);?></td>
                                                            <td><a href="edit-admin.php?adid=<?php echo htmlentities($row['adminid']);?>"><button class="btn btn-primary">EDIT</button></a> 
                                                                &nbsp;<a href="manage-admin.php?adid=<?php echo htmlentities($row['adminid']);?>&&action=del" onclick="return confirm('Do you really want to delete ?')"> <button class="btn btn-danger">DELETE</button></a> 
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $cnt++;
                                                        }} ?>
                                                </tbody>
                                                    
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--- end row -->
       
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="demo-box m-t-20">
                                        <div class="m-b-30">
                                            <h4><i class="fa fa-trash-o" ></i> Deleted Admin</h4>
                                        </div>

                                        <div class="table-responsive">
                                        <table class="table m-0 table-colored-bordered table-bordered-danger">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Admin</th>
                                                        <th>Email</th>
                                                        <th>Creation Date</th>
                                                        <th>Last Updation Date</th>
                                                        <th>Roles</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $query=mysqli_query($con,"Select id as adminid,tbladmin.AdminUserName as adusr,tbladmin.AdminEmailId as adml,tbladmin.CreationDate as adcredate,tbladmin.UpdationDate as adupdate,tbladmin.Roles as adrole from tbladmin where tbladmin.Is_Active=0");
                                                    $cnt=1;
                                                    $rowcount=mysqli_num_rows($query);
                                                    if($rowcount==0)
                                                    {
                                                        ?>
                                                        <tr>
                                                            <td colspan="7" align="center"><h3 style="color:red">No record found</h3></td>
                                                        <tr>
                                                        <?php 
                                                    } 
                                                    else 
                                                    {
                                                        while($row=mysqli_fetch_array($query))
                                                        {
                                                        ?>

                                                        <tr>
                                                            <th scope="row"><?php echo htmlentities($cnt);?></th>
                                                            <td><?php echo htmlentities($row['adusr']);?></td>
                                                            <td><?php echo htmlentities($row['adml']);?></td>
                                                            <td><?php echo htmlentities($row['adcredate']);?></td>
                                                            <td><?php echo htmlentities($row['adupdate']);?></td>
                                                            <td><?php echo htmlentities($row['adrole']);?></td>
                                                            <td><a href="manage-admin.php?readid=<?php echo htmlentities($row['adminid']);?>"><button class="btn btn-primary" title="Restore Admin">RESTORE</button></a>
                                                            &nbsp;<a href="manage-admin.php?adid=<?php echo htmlentities($row['adminid']);?>&&action=perdel" onclick="return confirm('Do you really want to delete ?')"> <button class="btn btn-danger">DELETE</button></a> 
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $cnt++;
                                                        }} ?>
                                                </tbody>
                                                    
                                            </table>
                                        
                                        </div>   
                                    </div>
                                </div>
                            </div>       
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