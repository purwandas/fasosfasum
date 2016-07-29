<?php
include('koneksi.php');
 
$idperuntukan = $_GET['idperuntukan'];

 
$query = mysql_query("delete from peruntukan where idperuntukan='$idperuntukan'") or die(mysql_error());
$query2 = mysql_query("select * from peruntukan where idperuntukan='$idperuntukan'") or die(mysql_error());
$data = mysql_fetch_array($query2);

if ($query) {
    header('location:home.php?message=delete');}
?>

