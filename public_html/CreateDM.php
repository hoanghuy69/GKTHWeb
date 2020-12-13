<?php
	define('DB_SERVER','localhost');
	define('DB_USER','id15233559_db_baoday');
	define('DB_PASS' ,'Bao!@#day2020');
	define('DB_NAME','id15233559_baodaydb');
	$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	if(mysqli_connect_errno())
	{
		echo "false";
	}

	// echo "<pre>";
	// print_r($_POST);

	$tendanhmuc=$_POST['ten'];
	$motadanhmuc=$_POST['mota'];
	$trangthai=$_POST['trangthai'];
	$admin = $_POST['admin'];

	$sql=mysqli_query($con,"INSERT INTO tbl_danhmuc(tenCate,moTaCate,trangThai,idAdmin) VALUES('$tendanhmuc','$motadanhmuc','$trangthai',$admin)");
	if($sql)
	{
		echo "thanh cong";
	}
	else
	{
		echo "that bai";
	}

// ===================Xoa===================
 // 	$idxoa=$_POST['id'];
 // 	$sql=mysqli_query($con,"DELETE FROM tblcategory WHERE id=$idxoa");
 // 	if($sql)
	// {
	// 	echo "thanh cong";
	// }
	// else
	// {
	// 	echo "that bai";
	// }

	
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form method="post" >
		<label for="ten">Tên danh mục </label>
      	<input type="text" name="ten"><br>
      	<label for="mota">Mô tả </label>
      	<textarea type="text" name="mota"></textarea><br>
      	<select name="trangthai">
      		<option value="1">1</option>
      		<option value="2">2</option>
      	</select><br>
		<select name="admin">
		<?php
                // Feching active categories
                $ret=mysqli_query($con,"select idAdmin, AdminUserName from tbl_admin where trangThai=1");
                while($result=mysqli_fetch_array($ret))
                {    
                ?>
                <option value="<?php echo htmlentities($result['idAdmin']);?>"><?php echo htmlentities($result['AdminUserName']);?>
                </option>
            <?php } ?>
		</select>
      	<button type="submit">Thêm</button>
	</form>
 	<!-- =====================Xoa================== -->
	<!-- <form method="post">
		<label>ID Muốn Xóa</label>
		<input type="text" name="id"><br>
		<button type="submit">Xóa</button>
	</form> -->


	<!-- =========================Sua==================== -->


<?php
	// $iddm = $_GET['iddanhmuc'];
	// $sql2=mysqli_query($con,"SELECT id,categoryname,description,is_active FROM tblcategory WHERE id=$iddm");
	// while($dong=mysqli_fetch_array($sql2))
	// {
		?>
			<!-- <form method="post" >
				<label for="tensua">Nhập tên danh mục cần sửa</label>
		      	<input type="text" name="tensua" value="<?php echo $dong['categoryname'] ?>"><br>
		      	<label for="motasua">Mô tả </label>
		      	<textarea name="motasua"><?php echo $dong['description'] ?></textarea><br>
		      	<select name="trangthaisua">
		      		<option value="1">1</option>
		      		<option value="2">2</option>
		      	</select><br>
		      	<button type="submit">Sửa</button>
			</form> -->
		<?php
	// }
		?>

	

</body>
</html>