<?php 
  include('admin/includes/autoload.php');
  //session_start();
  include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Báo Đây! Báo người Việt</title>
    <link rel="icon" href="http://news.baoday.tk/images/favicon.ico" sizes="32x32">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main-style.css" rel="stylesheet">

    <style>
    .namecate{
    color: #8e8e8e;
    font-weight: 200;
    transition: all .2s ease-in-out;
    }
    </style>

  </head>

  <body>

    <!-- Navigation -->
   <?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">
     
      <div class="row" style="margin-top: 4%">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
        
          <!-- Blog Post -->
          <?php 
          $query=mysqli_query($con,"SELECT tbl_baiviet.idBaiviet AS pid,tbl_baiviet.tieude AS posttitle,tbl_baiviet.hinhanh, tbl_danhmuc.tenCate AS category, tbl_danhmuc.idCate AS cid,tbl_danhmuccon.tenSubCate AS subcategory,tbl_baiviet.noidung AS postdetails,tbl_baiviet.ngaytao AS postingdate,tbl_baiviet.url AS url from tbl_baiviet left join tbl_danhmuc on tbl_danhmuc.idCate=tbl_baiviet.idCate left join  tbl_danhmuccon on  tbl_danhmuccon.idSubCate=tbl_baiviet.idSubCate where tbl_baiviet.trangthai=1 order by tbl_baiviet.idbaiviet desc");
          $arr;
          while($sql=mysqli_fetch_assoc($query)){
            $arr[]=$sql;
          }
          // $dem = count($arr);
          // echo "Co ".$dem." Bai Viet ";

          //while ($row=mysqli_fetch_array($query)) 
          foreach($arr as $row){
          ?>
            <div class="card mb-4">
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
                <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['hinhanh']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                <div class="card-body">
                  <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
                  <p class="namecate">
                    <b>Category : </b> 
                    <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> 
                  </p>
                </div>
              </a>
              
              <hr>
            </div>
          <?php }?>
          <!-- Pagination -->
        </div>
       

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>

</html>
