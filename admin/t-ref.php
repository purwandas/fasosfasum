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
			header("location:homeadmin.php?h=t_ref&&s=s");
		}else{
			header("location:homeadmin.php?h=t_ref&&s=f");
		}
	}else if(isset($_REQUEST['hapus'])){
		$q_d="delete from $_POST[tabel] where id='$_POST[id]' ";
		$delete=mysql_query($q_d);
		if($delete){
			header("location:homeadmin.php?h=t_ref&&d=s");
		}else{
			header("location:homeadmin.php?h=t_ref&&d=f");
		}
	}else if(isset($_REQUEST['tambah'])){
		if($_POST['tabel']!='ref_tahun'){
			$qa="INSERT INTO $_POST[tabel] (`id`, `kode`, `keyword`, `display`, `name`) VALUES (NULL, NULL, '$_POST[keyword]', '$_POST[display]', '$_POST[name]')";
		}else{
			$qa="INSERT INTO `ref_tahun` (`id`, `name`, `display`, `ref_table`, `ref_field`, `clause`) VALUES (NULL, '$_POST[name]', '$_POST[display]', '$_POST[ref_table]', '$_POST[ref_field]', '$_POST[clause]')";
		}
		$add=mysql_query($qa);
		if($add){
			header("location:homeadmin.php?h=t_ref&&a=s");
		}else{
			header("location:homeadmin.php?h=t_ref&&a=f");
		}
	}else{
		header("location:homeadmin.php");
	}
?>