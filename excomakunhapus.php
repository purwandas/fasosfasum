
<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: access-denied.php");
		exit();
	}


include "excomkoneksi.php";
$id = $_GET['id'];


 
$query = mysql_query("delete from akun where idperuntukan='$id'") or die(mysql_error());

$query2 = mysql_query("delete from peruntukan where idperuntukan='$id'") or die(mysql_error());

$query3 = mysql_query("select nobast from peruntukanhistory where idperuntukan='$id'") or die(mysql_error());
$data = mysql_fetch_array($query3);
$nobast = $data['nobast'];



if ($query) {

			mysql_connect("localhost","root","");
			mysql_select_db("phplogin");
			$waktu = gmdate("Y-m-d H:i:s", time()+60*60*7);
			$user = $_SESSION['SESS_FIRST_NAME'];
			$query = mysql_query("insert into loging values('','$user','hapus excom akun idperuntukan : $id','$waktu')") or die(mysql_error());


    header("location:excomakunshowdatabpk.php?id=$nobast"  );
}
?>