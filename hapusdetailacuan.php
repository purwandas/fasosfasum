<?php
include('koneksi.php');
 
$nodokacuan = $_GET['nodokacuan'];
 
$query = mysql_query("delete from detaildokacuan where nodokacuan='$nodokacuan'") or die(mysql_error());
 

?>

