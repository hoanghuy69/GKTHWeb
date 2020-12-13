<?php
define('DB_SERVER','localhost');
define('DB_USER','id15019457_baoday112');
define('DB_PASS' ,'Matkhaula123?');
define('DB_NAME','id15019457_baoday');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>