<?php
//simpan table master
	include "koneksi.php";
	if(isset($_REQUEST['simpan'])){
		$q_up="update ref_master set tabel='$_POST[tabel]', nama='$_POST[nama]' , ref_table='$_POST[ref_table]' , ref_field='$_POST[ref_field]' , ket='$_POST[ket]' , kategori='$_POST[kategori]' , urutan='$_POST[urutan]' where id='$_POST[id]' ";
		$update=mysql_query($q_up);
		if($update){
			header("location:homeadmin.php?h=t_ref");
		}
	}else if(isset($_REQUEST['hapus'])){
		$q_d="delete from ref_master where id='$_POST[id]' ";
		$delete=mysql_query($q_d);
		if($delete){
			header("location:homeadmin.php?h=t_ref");
		}
	}else{
		header("location:homeadmin.php");
	}
?>