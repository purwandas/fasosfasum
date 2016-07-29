<?
// START CONFIGURATION SETTINGS //

/*---------------------------------------------------------------------------------
	konfigurasi database 
---------------------------------------------------------------------------------*/

$mysql_user="root";
$mysql_password="";
$mysql_database="pendaftar";
$mysql_host="localhost";
$koneksi_db = mysql_connect($mysql_host, $mysql_user, $mysql_password);
mysql_select_db($mysql_database, $koneksi_db); 




?>