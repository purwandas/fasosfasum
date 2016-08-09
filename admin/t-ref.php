<?php
//simpan table ref
	include "koneksi.php";
	if(isset($_REQUEST['simpan'])){
		if($_POST['tabel']!='ref_tahun'){
			$q_up="update $_POST[tabel] set keyword='$_POST[keyword]', display='$_POST[display]' , name='$_POST[name]' where id='$_POST[id]' ";
		}else{
			$q_up="update $_POST[tabel] set name='$_POST[name]', display='$_POST[display]' , ref_table='$_POST[ref_table]', ref_field='$_POST[ref_field]', clause='$_POST[clause]' where id='$_POST[id]' ";
		}
		$update=mysql_query($q_up);
		if($update){
			header("location:homeadmin.php?h=t_ref");
		}
	}else if(isset($_REQUEST['hapus'])){
		$q_d="delete from $_POST[tabel] where id='$_POST[id]' ";
		$delete=mysql_query($q_d);
		if($delete){
			header("location:homeadmin.php?h=t_ref");
		}
	}else{
		header("location:homeadmin.php");
	}
?>