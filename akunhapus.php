<?php
include "koneksi.php";
$id = $_GET['id'];


 
$query = mysql_query("delete from akun where nobast='$id'") or die(mysql_error());


if ($query) {
    header("location:akunshowdata.php?id=$id");
}
?>

