<?php
//simpan table master
	include "koneksi.php";
	if(isset($_REQUEST['simpan'])){
		$q_up="update ref_master set tabel='$_POST[tabel]', nama='$_POST[nama]' , ref_table='$_POST[ref_table]' , ref_field='$_POST[ref_field]' , ket='$_POST[ket]' , kategori='$_POST[kategori]' , urutan='$_POST[urutan]' where id='$_POST[id]' ";
		$update=mysql_query($q_up);
		if($update){
			header("location:homeadmin.php?h=t_ref&&sm=s");
		}else{
			header("location:homeadmin.php?h=t_ref&&sm=f");
		}
	}else if(isset($_REQUEST['hapus'])){
		$q_d="delete from ref_master where id='$_POST[id]' ";
		$delete=mysql_query($q_d);
		if($delete){
			header("location:homeadmin.php?h=t_ref&&dm=s");
		}else{
			header("location:homeadmin.php?h=t_ref&&dm=f");
		}
	}else if(isset($_REQUEST['tambah'])){
		$q_a="INSERT INTO `ref_master` (`id`, `tabel`, `nama`, `name`, `ref_table`, `ref_field`, `ket`, `kategori`, `urutan`) VALUES (NULL, '$_POST[tabel]', '$_POST[nama]', '$_POST[name]', '$_POST[ref_table]', '$_POST[ref_field]', '$_POST[ket]', '$_POST[kategori]', '$_POST[urutan]')";
		$add=mysql_query($q_a);
		if($add){
			if($_POST['tabel']=='ref_tahun'){
				$qa="CREATE TABLE $_POST[tabel] ( `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `name` varchar(50) NULL, `display` varchar(50) NULL, `ref_table` varchar(50) NULL, `ref_field` varchar(50) NULL, `clause` varchar(50) NULL ) ENGINE = InnoDB;";
			}else{
				$qa="CREATE TABLE $_POST[tabel] ( `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, `kode` INT(11) NULL , `keyword` varchar(50) NULL , `display` varchar(50) NULL, `name` varchar(30) ) ENGINE = InnoDB;";
				
			}
			$add=mysql_query($qa);
			header("location:homeadmin.php?h=t_ref&&am=s");
		}else{
			header("location:homeadmin.php?h=t_ref&&am=f");
		}
	}else{
		header("location:homeadmin.php");
	}
?>