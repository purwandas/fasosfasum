
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
<head>
<title>Fasos Fasum BPKD DKI Jakarta</title>

<link rel="stylesheet" type="text/css" href="view/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="view/javascript/jquery/ui/themes/ui-lightness/ui.all.css" />
<script type="text/javascript" src="view/javascript/jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="view/javascript/jquery/ui/jquery-ui-1.8.9.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.9.custom.css" />
<script type="text/javascript" src="view/javascript/jquery/ui/ui.core.js"></script>
<script type="text/javascript" src="view/javascript/jquery/superfish/js/superfish.js"></script>
<script type="text/javascript" src="view/javascript/jquerytab.js"></script>
<script type="text/javascript" src="view/javascript/jquery/ui/external/jquery.bgiframe-2.1.2.js"></script>

<script type="text/javascript" src="view/javascript/jquery/superfish/js/superfish.js"></script>
<script type="text/javascript">

</script>
</head>
<body>
<div id="container">
<div id="header">
  <div class="div1">
    <div class="div2"><img src="view/image/logo.png" title="Administrator" onclick="location = 'http://localhost/fasosfasum/'" /></div>
        <div class="div3"><img src="view/image/lock.png" alt="" style="position: relative; top: 3px;" />&nbsp;You are logged in as <span>Administrator</span></div>
      </div>

    <div id="menu">
    <ul class="left" style="display: none;">
      <li id="dashboard"><a href="#" class="top">Entry BAST</a></li>
      <li id="catalog"><a class="top">Master Data</a>
        <ul>
          <li><a href="dokacuan.php">Dokumen Acuan BAST</a></li>
          <li><a href="#">Data Pengembang</a></li>

          <li><a class="parent">Atribut Alamat</a>
            <ul>
              <li><a href="#">Data Wilayah</a></li>
              <li><a href="#">Data Kecamatan</a></li>
	      <li><a href="#">Data Kelurahan</a></li>
            </ul>
          </li>

        </ul>
      </li>
      </li>



      <li id="reports"><a class="top">Dokumen Acuan</a>
        <ul>
          <li><a class="parent">SIPPT</a>
            <ul>
              <li><a href="entrysippt.php">Entry SIPPT</a></li>
              <li><a href="#">Edit SIPPT</a></li>
              <li><a href="#">Data SIPPT</a></li>

            </ul>
          </li>
          <li><a class="parent">Non SIPPT</a>
            <ul>
              <li><a href="#">Entry Non SIPPT</a></li>
              <li><a href="#">Edit Non SIPPT</a></li>
              <li><a href="#">Data Non SIPPT</a></li>
            </ul>
          </li>
          <li><a href="#">Semua Dokumen Acuan</a>
          </li>          
        </ul>
      </li>
 

      <li id="bast"><a class="top">BAST</a>
        <ul>
          <li><a href="#">Entry BAST</a></li> 
          <li><a href="#">BAST Gubernur</a></li> 
	  <li><a href="#">BAST Walikota</a></li> 
          <li><a href="#">Semua BAST</a></li> 
                   
        </ul>
      </li>


      <li id="reports"><a class="top">Laporan</a>
        <ul>
          <li><a class="parent">Laporan BAST</a>
            <ul>
              <li><a href="#">Data BAST</a></li>
              <li><a href="#">Data Lokasi Aset</a></li>
              <li><a href="#">Data Kewajiban</a></li>

            </ul>
          </li>
          <li><a class="parent">Laporan SIPPT</a>
            <ul>
              <li><a href="#">Data SIPPT</a></li>
              <li><a href="#">Data Non SIPPT</a></li>
              <li><a href="#">Data Kewajiban</a></li>
            </ul>
          </li>
          <li><a href="#">SIPPT vs BAST</a>
          </li>          
        </ul>
      </li>



    </ul>
    <ul class="right">
      <li id="store"><a onClick="window.open('http://demo.opencart.com/');" class="top">Store Front</a>
        <ul>
                  </ul>

      </li>
      <li id="store"><a class="top" href="http://demo.opencart.com/admin/index.php?route=common/logout&amp;token=f3971cf311161ee5d81f2c2c13145c39">Logout</a></li>
    </ul>




    <script type="text/javascript"><!--
$(document).ready(function() {
	$('#menu > ul').superfish({
		hoverClass	 : 'sfHover',
		pathClass	 : 'overideThisToUse',
		delay		 : 0,
		animation	 : {height: 'show'},
		speed		 : 'normal',
		autoArrows   : false,
		dropShadows  : false, 
		disableHI	 : false, /* set to true to disable hoverIntent detection */
		onInit		 : function(){},
		onBeforeShow : function(){},
		onShow		 : function(){},
		onHide		 : function(){}
	});
	
	$('#menu > ul').css('display', 'block');
});
 
function getURLVar(urlVarName) {
	var urlHalves = String(document.location).toLowerCase().split('?');
	var urlVarValue = '';
	
	if (urlHalves[1]) {
		var urlVars = urlHalves[1].split('&');

		for (var i = 0; i <= (urlVars.length); i++) {
			if (urlVars[i]) {
				var urlVarPair = urlVars[i].split('=');
				
				if (urlVarPair[0] && urlVarPair[0] == urlVarName.toLowerCase()) {
					urlVarValue = urlVarPair[1];
				}
			}
		}
	}
	
	return urlVarValue;
} 

$(document).ready(function() {
	route = getURLVar('route');
	
	if (!route) {
		$('#dashboard').addClass('selected');
	} else {
		part = route.split('/');
		
		url = part[0];
		
		if (part[1]) {
			url += '/' + part[1];
		}
		
		$('a[href*=\'' + url + '\']').parents('li[id]').addClass('selected');
	}
});



//--></script>


 
  </div>
  </div>
<div id="content">
  <div class="breadcrumb">
        <a href="index.php">Home</a>

      </div>
              <div class="box">
    <div class="heading">
      <h1><img src="view/image/home.png" alt="" /> Entry Data BAST</h1>
    </div>

    <div class="content">
      <div class="overview">
        <div class="dashboard-heading">Input Deskripsi BAST</div>
        <div class="dashboard-content">

<form name="inputbast" action="" method="post">
 		<table>
		<tr>
		<td>No.BAST </td><td>: </td><td><input type="text" name="nobast" maxlength="50" required="required" /></td>
		</tr>
		<tr><td>Tgl. BAST </td><td>: </td><td><input type="text" id="tgldokacuan" name="tglbast" maxlength="10" required="required"/></td>
		</tr>
                    
                <link type="text/css" rel="stylesheet" href="jquery-ui-1.7.3.custom.css" />
		<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="jquery.ui.datepicker.js"></script>
		<script type="text/javascript" src="jquery.ui.core.js"></script>
		<script type="text/javascript" src="tanggaldokacuan.js"></script>
		<tr>
		<td>Pengembang </td><td>: </td><td><input type="text" name="pengembangbast" maxlength="40" required="required" /></td>
		</tr>
		<tr>
		<td>Perihal</td><td>:</td><td><textarea name=perihalbast rows=1 cols=30 required="required" /> </textarea></td> 
		</tr>
		<tr>
		<td>Kategori </td><td>:</td><td><textarea name=keterangan rows=1 cols=30 required="required" /> </textarea></td> 
		</tr>
		<tr><td>Dokumen Acuan</td><td>:</td><td><select name='nodokacuan'>
          	<?php
                 include "koneksi.php";
                 // query untuk menampilkan wilayah
                 $query = "SELECT * FROM detaildokacuan";
                 $hasil = mysql_query($query);
                 while ($data = mysql_fetch_array($hasil))
                 {
                    echo "<option >".$data['nodokacuan']."</option>".$data['nodokacuan']."</option>";
                 }
          	?>
		</select></td>
		</tr>       

		<tr>
		<td>Kode Arsip </td><td>: </td><td><input type="text" name="kodearsip" maxlength="40" required="required" /></td>
		</tr>
		</table>
		<right><input type="submit" name="submit" value="Simpan Data BAST"/></right>
		</form>

 					<?php
					include "koneksi.php";
					if (isset($_POST['submit'])){

					$nobast = $_POST['nobast'];
					$tglbast= $_POST['tglbast'];
					$pengembangbast= $_POST['pengembangbast'];
					$perihalbast= $_POST['perihalbast'];
					$keterangan= $_POST['keterangan'];
					$nodokacuan= $_POST['nodokacuan'];
					$kodearsip=$_POST['kodearsip'];



  
   					 $check = mysql_query("SELECT nobast FROM bast WHERE nobast = '$nobast'") or die(mysql_error());
    					$check2 = mysql_num_rows($check);

    					//if the name exists it gives an error
    					if ($check2 != 0)
    					{
						?>
 					 <script type="text/javascript">
 					   alert("BAST No:  <?php echo $nobast; ?> has already registered.");
  					  history.back();
 						 </script>
						<?php

						}else



					//simpan data ke database
					$query = mysql_query("insert into bast values('','$nobast', '$tglbast', '$perihalbast', '$pengembangbast', '$keterangan', '$nodokacuan', '$kodearsip')") or die(mysql_error());

					if ($query) {
					echo 'input data bast  berhasil........... No BAST :  ' ;
					echo  $nobast;
        

}
}
?>

        </div>
      </div>


      <div class="statistic">
        <div class="dashboard-heading">Data SIPPT</div>
        <div class="dashboard-content">
 	  <div style="width:545px; height:228px; overflow:auto;">
          <table class="list" cellpadding="5" cellspacing="5">
            <thead>
              <tr>
                <td class="center">No</td>
                <td class="center">No.Dokumen</td>
                <td class="center">Tgl.SIPPT</td>
                <td class="center">Pemegang Dokumen</td>
 		<td class="center">Ket..</td>
		<td class="center">Action</td>
              </tr>
            </thead>


            <tbody>
    <?php
        include "koneksi.php";
	$query = mysql_query("select * from detaildokacuan");

	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>
    		<tr>

                <td class="center"><?php echo $no; ?></td>     
                <td class="left"><?php echo $data['nodokacuan']; ?></td>        	
                <td class="center"><?php echo $data['tgldokacuan']; ?></td>
                <td class="left"><?php echo $data['pemegangdokacuan']; ?></td>
                <td class="center"><?php echo $data['ketdokacuan']; ?></td>
		<td class="center"><a href="editsippt.php?nodokacuan=<?php echo $data['nodokacuan']; ?>">Edit</a></td>
 		</tr>
   	 <?php
		$no++;
	}
	?>
              </tbody>
          </table>
		
	  </div>
	
        </div>
      </div>

<br>

      <div class="latest">
        <div class="dashboard-heading">Input Lokasi Aset</div>
        <div class="dashboard-content">

	<form name="inputlokasiaset" action="" method="post">
	No.BAST :  <input type="text" name="nobast" value="<?php echo $nobast; ?>"/>	
	<head>
	<script>
	var idrow = 2;

	function tambah(){
  	  var x=document.getElementById('datatable').insertRow(idrow);
  	  var td1=x.insertCell(0);
  	  var td2=x.insertCell(1);
  	  var td3=x.insertCell(2);
   	  var td4=x.insertCell(3);
   	


   	
   	 td1.innerHTML="<input type='text' name='alamataset[]'>";
   	 td2.innerHTML="<select name='kecamatan[]'>          	<?php
                 include "koneksi.php";
                 // query untuk menampilkan kecamatan
                 $query = "SELECT * FROM kecamatan";
                 $hasil = mysql_query($query);
                 while ($data = mysql_fetch_array($hasil))
                 {
                    echo "<option >".$data['namakecamatan']."</option>".$data['namakecamatan']."</option>";
                 }
          	?></select>";

    	td3.innerHTML="<select name='kelurahan[]'>          	<?php
                 include "koneksi.php";
                 // query untuk menampilkankelurahan
                 $query = "SELECT * FROM kelurahan";
                 $hasil = mysql_query($query);
                 while ($data = mysql_fetch_array($hasil))
                 {
                    echo "<option >".$data['namakelurahan']."</option>".$data['namakelurahan']."</option>";
                 }
          	?></select>";

   	 td4.innerHTML="<select name='wilayah[]'>          	<?php
                 include "koneksi.php";
                 // query untuk menampilkanwilayah
                 $query = "SELECT * FROM wilayah";
                 $hasil = mysql_query($query);
                 while ($data = mysql_fetch_array($hasil))
                 {
                    echo "<option >".$data['wilayah']."</option>".$data['wilayah']."</option>";
                 }
          	?></select>";   

   	 idrow++;
	}


	function hapus(){
   	 if(idrow>2){
   	     var x=document.getElementById('datatable').deleteRow(idrow-1);
  	      idrow--;
  	  }
	}

	</script></head>


	
	<body>

	<br><p>
	<div style=" width:20; height:110px;overflow:auto;">
	
	<table class="list" id=datatable >
	<thead>
	<tr>
	
	<td class="center">ALAMAT ASET</font></td>
	<td class="center">KECAMATAN</font></td>
	<td class="center">KELURAHAN</font></td>
	<td class="center">WILAYAH</font></td>

	</tr>
	</thead>

	<tbody>
	<tr>
	
	<td><input type='text' name='alamataset[]'></td>
	<td><select name='kecamatan[]'>
         	
          	<?php
                 include "koneksi.php";
                 // query untuk menampilkan wilayah
                 $query = "SELECT * FROM kecamatan";
                 $hasil = mysql_query($query);
                 while ($data = mysql_fetch_array($hasil))
                 {
                    echo "<option >".$data['namakecamatan']."</option>".$data['namakecamatan']."</option>";
                 }
          	?>
          	</select></td>

	<td><select name='kelurahan[]'>
         	
          	<?php
                 include "koneksi.php";
                 // query untuk menampilkan kelurahan
                 $query = "SELECT * FROM kelurahan";
                 $hasil = mysql_query($query);
                 while ($data = mysql_fetch_array($hasil))
                 {
                    echo "<option >".$data['namakelurahan']."</option>".$data['namakelurahan']."</option>";
                 }
          	?>
          	</select></td>

 	<td><select name='wilayah[]'>
         	
          	<?php
                 include "koneksi.php";
                 // query untuk menampilkan wilayah
                 $query = "SELECT * FROM wilayah";
                 $hasil = mysql_query($query);
                 while ($data = mysql_fetch_array($hasil))
                 {
                    echo "<option >".$data['wilayah']."</option>".$data['wilayah']."</option>";
                 }
          	?>
          	</select></td>         	
		</tr>
		</tbody>
	</table>
	</div>
	<br>
	<input type=button name=tambah1 value=Tambah onclick=tambah()><input type=button name=delete1 value=Delete onclick=hapus()>
	<right><input type="submit" name="submit2" value="Simpan Lokasi Aset"/></right>	
	
	</body>

      	  </div>

	</form>
    <?php  
	include "koneksi.php";

	if (isset($_POST['submit2'])){
	
	if(!$_POST){  
        		die('Tidak ada data yang disimpan!');  
    		   }  
    		  
		//menyimpan data ke tabel dataaset
		foreach($_POST['alamataset'] as $key => $alamataset){  
		if($alamataset){
 		$sql = "insert into dataaset(alamataset,wilayah,kecamatan,kelurahan,nobastaset)   
  		values ('{$alamataset}','{$_POST['wilayah'][$key]}','{$_POST['kecamatan'][$key]}','{$_POST['kelurahan'][$key]}','{$_POST['nobast']}')";  
   		mysql_query($sql);  
		} 
		}
		echo 'Data telah disimpan';  
		

  
		}
		?>

	  </div>




      <div class="latest">
        <div class="dashboard-heading">Data BAST vs Data Aset</div>
        <div class="dashboard-content">

	<div style="height:480px; overflow:auto;">
	<table class="list" width="530" border="1" cellpadding="5" cellspacing="1">
	<thead>
    	<tr>
	        <td class="center">No.</td>        	
                <td class="center">No.BAST</td>
                <td class="center">Tgl.BAST</td>
        	<td class="center">Pengembang</td>
		<td class="center">Lokasi Aset</td>
		<td class="center">Kelurahan</td>
		<td class="center">Kecamatan</td>
		<td class="center">Action</td> 
	  </tr>
          </thead>
  	  <?php
        include "koneksi.php";
	$query = mysql_query("select * from bast b inner join dataaset d on b.nobast=d.nobastaset");

	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>
	<tbody>
    	<tr>
        	<td class="center"><?php echo $no; ?></td>
        	<td class="left"><?php echo $data['nobast']; ?></td>
        	<td class="center"><?php echo $data['tglbast']; ?></td>
        	<td class="left"><?php echo $data['pengembangbast']; ?></td>
		<td class="left"><?php echo $data['alamataset']; ?></td>
		<td class="left"><?php echo $data['kelurahan']; ?></td>
		<td class="left"><?php echo $data['kecamatan']; ?></td>
		<td class="center"><a href="entryperuntukan.php?id=<?php echo $data['idaset']; ?>">Input Data Peruntukan</a></td>

	</tr>
	</tbody>
	<?php
 	$no++;
	}
	?>
 	</table>
	</div>


        </div>
      </div>



  </div>

</div>
<!--[if IE]>
<script type="text/javascript" src="view/javascript/jquery/flot/excanvas.js"></script>
<![endif]--> 

</div>
<div id="footer"><a href="http://www.dineshjay.co.id">dinesh consultant</a> &copy; 2009-2012 All Rights Reserved.<br />Version 1.0</div>
</body></html>