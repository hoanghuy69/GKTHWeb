<?php
// define('DB_SERVER','localhost');
// define('DB_USER','id14366606_root');
// define('DB_PASS' ,'Matkhaula123?');
// // define('DB_NAME','id14366606_newsdb');
// define('DB_SERVER','localhost');
// define('DB_USER','root');
// define('DB_PASS' ,'');
// define('DB_NAME','BaoDayDB');
$con = mysqli_connect('localhost','id15019457_baoday112','Matkhaula123?','id15019457_baoday');
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>