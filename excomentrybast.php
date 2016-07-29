<?php
	require_once('auth.php');
?>

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
    <div class="div2"><img src="view/image/logo.png" title="Administration" onclick="location = 'http://localhost/fasosfasum/'" /></div>
        <div class="div3"><img src="view/image/lock.png" alt="" style="position: relative; top: 3px;" />&nbsp;Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?>, you are logged in as <span>user</span></div>
      </div>


    <div id="menu">
    <ul class="left" style="display: none;">
      <li id="dashboard"><a href="#" class="top">Entry BAST</a></li>
      <li id="catalog"><a class="top">Master Data</a>
        <ul>
          <li><a href="dokacuan.php">Dokumen Acuan BAST</a></li>
          <li><a href="#">Data Pengembang</a></li>
	  <li><a href="kategoriaset.php">Master Kategori Aset</a></li>
	  <li><a href="#">Master Satuan Ukur (int.)</a></li>
          <li><a class="parent">Atribut Alamat</a>
            <ul>
              <li><a href="#">Data Wilayah</a></li>
              <li><a href="kecamatan.php">Data Kecamatan</a></li>
	      <li><a href="kelurahan.php">Data Kelurahan</a></li>
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
              <li><a href="#">Entry Kewajiban SIPPT</a></li>
              <li><a href="sipptvsbast.php">Data SIPPT vs BAST</a></li>

            </ul>
          </li>
          <li><a class="parent">Non SIPPT</a>
            <ul>
              <li><a href="entrynonsippt.php">Entry Non SIPPT</a></li>
              <li><a href="#">Entry Kewajiban Non-SIPPT</a></li>
		<li><a href="sipptwilayah.php">SIPPT PerWilayah</a></li>
              <li><a href="#">Data Non SIPPT</a></li>
            </ul>
          </li>
          <li><a href="#">Semua Dokumen Acuan</a>
          </li>          
        </ul>
      </li>
 



      <li id="bast"><a class="top">BAST</a>
        <ul>
          <li><a href="entrybast.php">Entry BAST</a></li> 
	  <li><a href="#">Entry Nilai Kewajiban</a></li> 
          <li><a href="bastgubernur.php">BAST Gubernur</a></li> 
	  <li><a href="bastnongubernur.php">BAST Non-Gubernur</a></li>
	  <li><a href="pdfbastnonnumber.php">BAST Non-Number</a></li> 
	  <li><a href="bastwilayah.php">BAST Per-Wilayah</a></li>
          <li><a href="#">Semua BAST</a></li> 
	  <li><a href="pmnonirisanrekon.php">BAST Non Irisan Rekon</a></li>
                   
        </ul>
      </li>


      <li id="reports"><a class="top">Laporan</a>
        <ul>
          <li><a class="parent">Rekapitulasi BAST</a>
            <ul>
              <li><a target="_blank" href="rekapjaksel.php">Rekap Jakarta Selatan</a></li>
              <li><a target="_blank" href="rekapjakut.php">Rekap Jakarta Utara</a></li>
              <li><a target="_blank" href="rekapjakbar.php">Rekap Jakarta Barat</a></li>
              <li><a target="_blank" href="rekapjaktim.php">Rekap Jakarta Timur</a></li>
              <li><a target="_blank" href="rekapjakpus.php">Rekap Jakarta Pusat</a></li>
              <li><a target="_blank" href="rekapseribu.php">Rekap Kepulauan Seribu</a></li>

            </ul>

          <li><a class="parent">Data Detail BAST</a>
            <ul>
              <li><a target="_blank" href="detailjaksel.php">Detail Jakarta Selatan</a></li>
              <li><a target="_blank" href="detailjakut.php">Detail Jakarta Utara</a></li>
              <li><a target="_blank" href="detailjakbar.php">Detail Jakarta Barat</a></li>
              <li><a target="_blank" href="detailjaktim.php">Detail Jakarta Timur</a></li>
              <li><a target="_blank" href="detailjakpus.php">Detail Jakarta Pusat</a></li>
              <li><a target="_blank" href="detailseribu.php">Detail Kepulauan Seribu</a></li>

            </ul>
          </li>

          <li><a class="parent">Progress Rekonsiliasi</a>
            <ul>
              <li><a target="_blank" href="rekonsiliasi/pdfsemuabast.php">Data Seluruh BAST</a></li>
              <li><a target="_blank" href="pdf163.php">Data Rekon Kel.163</a></li>
              <li><a target="_blank" href="pdf54.php">Data Rekon Kel.54</a></li>
              <li><a target="_blank" href="pdf129.php">Data Rekon Kel.129</a></li>
              <li><a target="_blank" href="pdf101.php">Data Rekon Kel.101</a></li>
	      <li><a target="_blank" href="pdf58.php">Data Lokasi 58</a></li>
	      <li><a target="_blank" href="pdfdtr.php">Semua DTR</a></li>
	      <li><a target="_blank" href="pdfdtraja.php">DTR Tanpa Irisan</a></li>
	      <li><a target="_blank" href="bastirisanrekon.php">Data irisan Rekon</a></li>
	      <li><a target="_blank" href="pdfbpk.php">Semua LK2010</a></li>
	      <li><a target="_blank" href="pdfbpkaja.php">LK2010 Tanpa Iris</a></li>
 
            </ul>
          </li>

          <li><a href="laporanperkecamatan.php">Laporan Perkecamatan</a>
          </li>

          <li><a class="parent">Laporan SIPPT</a>
            <ul>
              <li><a target="_blank" href="pdfsippt.php">Data SIPPT</a></li>
              <li><a target="_blank" href="pdfnonsippt.php">Data Non SIPPT</a></li>
		<li><a target="_blank" href="pdfhitung.php">Aril Mop</a></li>
              <li><a href="#">Data Kewajiban</a></li>
            </ul>
          </li>
          <li><a href="#">SIPPT vs BAST</a>
          </li>        

          </li>
          <li><a href="laporanirisan.php">Data Irisan</a>
          </li>   
        </ul>
      </li>




      <li id="accounting"><a class="top">Accounting</a>
        <ul>
          <li><a href="entrynilaibast.php">Entry Nilai BAST</a></li>
	  <li><a href="akunlaporanmutasi.php">Lap. Nilai Mut. 2011</a></li>
	  <li><a href="akunlaporantambah.php">Lap. Nilai Penambah</a></li>
	  <li><a href="akunlaporantambahmix.php">Lap. Nilai Penambah Komb</a></li>
	  <li><a href="excomlaporanakun.php">Lap. Nilai Excom</a></li>
	  <li><a href="excomlaporanakunmix.php">Lap. Nilai Excom Komb</a></li>
	  <li><a href="akunlaporansippt.php">Lap. Nilai SIPPT</a></li>
	  <li><a href="akunlaporannonsippt.php">Lap. Nilai Non-SIPPT</a></li>
          <li><a href="akunlaporanperkib.php">Lap.Semua BAST Per-KIB</a></li>
	  <li><a class="parent">Khusus BPKP</a>
	    <ul>
              <li><a href="entrynilaibastbpk.php">Entry Penilaian</a></li>
              <li><a href="akunlaporanbpk90.php">Lap.Nilai Fisik Nol</a></li>
              <li><a href="akunlaporanbpkrangkap.php">Lap.Nilai Double</a></li>
              <li><a href="akunlaporanbpksippt.php">Lap.Nilai SIPPT</a></li>
              <li><a href="akunlaporanbpknonsippt.php">Lap.Nilai Non SIPPT</a></li>
              <li><a href="akunlaporanbpksisa27.php">Lap.Nilai Sisa 27</a></li>
 		<li><a href="akunlaporanbpkpresume.php">Resume Total</a></li>
		
            </ul>
	 </li>

	  <li><a class="parent">LKPD2010</a>
	    <ul>
              <li><a href="akunlaporanlkpd129.php">Lap.LKPD 129</a></li>
              <li><a href="akunlaporanlkpd54.php">Lap.LKPD 54</a></li>
              <li><a href="akunlaporanlkpd163.php">Lap.LKPD 163</a></li>
              <li><a href="akunlaporanlkpd101.php">Lap.LKPD 101</a></li>
              <li><a href="akunlaporanlkpd2009.php">Lap.LKPD 2009</a></li>
              <li><a href="akunlaporanlkpd2010.php">Lap.LKPD 2010</a></li>
	      <li><a href="akunlaporanlkpdresume.php">Resume Total</a></li>
	      <li><a href="akunlaporanlkpdresumemix.php">Resume Kombinasi</a></li>

            </ul>
	 </li>

	 </li>

        </ul>
      </li>

      <li id="reports"><a class="top">Rekonsiliasi</a>
        <ul>
          <li><a href="resumelk2010.php">Resume LK2010</a></li>
    	  <li><a href="resumemutasi.php">Resume Mutasi</a></li>
	  <li><a href="resumepm.php">Resume PuloMas</a></li>
          <li><a href="resumebp3w.php">Resume BP3W</a></li>
    	  <li><a href="resumedtr.php">Resume DTR</a></li>
	  <li><a href="resumebk.php">Resume Balaikota</a></li>
	  <li><a href="resumesipptperiodik.php">Resume Periodik</a></li>
	  <li><a target="_blank" href="pdfrekon129.php">Seluruh Rekon 129</a></li>
	  <li><a target="_blank" href="pdfrekon54.php">Seluruh Rekon 54</a></li>
	  <li><a target="_blank" href="pdfrekon163.php">Seluruh Rekon 163</a></li>
	  <li><a target="_blank" href="pdfrekon101.php">Seluruh Rekon 101</a></li>
	  <li><a target="_blank" href="pdfrekon2009.php">Seluruh Rekon 2009</a></li>
	  <li><a target="_blank" href="pdfrekon2010.php">Seluruh Rekon 2010</a></li>
          <li><a target="_blank" href="pdfrekon2011.php">Seluruh Mutasi 2011</a></li>
	 <li><a target="_blank" href="pdfrekontambah.php">Seluruh Data Penambah</a></li>
	<li><a target="_blank" href="pdfrekonlkpd.php">Seluruh LKPD</a></li>
        </ul>
      </li>


      <li id="reports"><a class="top">GIS</a>
        <ul>
          <li><a href="indexGis.php">Input Marking Area</a></li>
    	  <li><a href="indexnografik.php">Pencarian Lokasi</a></li>
	  <li><a href="resumeperiodik1.php">Halaman Percobaan</a></li>
        </ul>
      </li>

      <li id="reports"><a class="top">Extra Comtable</a>
        <ul>
	  <li><a href="excomdashboard.php">Dashboard</a></li>
      	  <li><a href="excomentrysippt.php">Entry SIPPT</a></li>
	  <li><a href="excomentrybast.php">Entry BAST</a></li>
	  <li><a href="excomentryakun.php">Entry Akun</a></li>
	  <li><a href="excomlaporanakun.php">Laporan Akun</a></li>
	  <li><a href="excomlaporanakunmix.php">Laporan Akun Kombinasi</a></li>
        </ul>
      </li>

    </ul>
    <ul class="right">
      <li id="store"><a onClick="window.open('http://demo.dineshjay.com/');" class="top">Store Front</a>
        <ul>
                  </ul>
      </li>
      <li id="store"><a class="top" href="logout.php">Logout</a></li>
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
        <a href="home.php">Home</a>

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
		<td>Pengembang </td><td>: </td><td><input type="text" name="pengembangbast" maxlength="100" required="required" /></td>
		</tr>
		<tr>
		<td>Perihal</td><td>:</td><td><textarea name=perihalbast rows=1 cols=30 required="required" /> </textarea></td> 
		</tr>
		<tr>
		<td>Kategori </td><td>:</td><td><textarea name=keterangan rows=1 cols=30 required="required" /> </textarea></td> 
		</tr>
		<tr><td>Dokumen Acuan</td><td>:</td><td><select name='nodokacuan'>
          	<?php
                 include "excomkoneksi.php";
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
					include "excomkoneksi.php";
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
					$query = mysql_query("insert into bast values('$nobast', '$tglbast', '$perihalbast', '$pengembangbast', '$keterangan', '$nodokacuan', '$kodearsip')") or die(mysql_error());

					if ($query) {
					echo 'input data bast  berhasil........... No BAST :  ' ;
					echo  $nobast;
        

}
}
?>

        </div>
      </div>


      <div class="statistic">
        <div class="dashboard-heading">Input Lokasi Dokumen</div>
        <div class="dashboard-content">

		<?php
		include "excomkoneksi.php";
	

	?>
	
 	<form method="post" action="">
	 
	<tr>
	No.BAST :  <input type="text" name="nobastlokasi" value="<?php echo $nobast; ?>"/>
	</tr></p>
	<table >
		
	<tr><td><input type="checkbox" name="rekon163" value="1"/>Data Rekon 163<br/><br/></td>
	<td><input type="checkbox" name="rekon54" value="1" /> Data Rekon 54<br/><br/></td></tr>
	<tr><td><input type="checkbox" name="rekon101" value="1" /> Data Rekon 101<br/><br/></td>
	<td><input type="checkbox" name="rekon129" value="1" /> Data Rekon 129<br/><br/></td></tr>
	<tr><td><input type="checkbox" name="pulomas" value="1" /> Data Pulo Mas<br/><br/></td>
	<td><input type="checkbox" name="balaikota" value="1" /> Data Balai Kota Lt.7 <br/><br/></td></tr>
	<tr><td><input type="checkbox" name="tp3w" value="1" /> Data TP3W <br/><br/></td>
	<td><input type="checkbox" name="lokasi58" value="1" /> Data 58<br/><br/></td></tr>
	<tr><td><input type="checkbox" name="dtr" value="1" /> Data DTR <br/>	</td>
	<td><input type="checkbox" name="bpk357" value="1" /> Data LK2010 <br/><br/></td></tr>
	<td><input type="checkbox" name="mutasi" value="1" /> Data Mutasi<br/><br/></td></tr>
	<tr><td align="right"><input type="submit" value="Simpan Perubahan" name="submit22"></td></tr>
	
	</tr>
	</table>
	
	</form> 


	<?php

	if(isset($_REQUEST['submit22'])) {

	$nobastlokasi = $_POST['nobastlokasi'];
	$query = mysql_query("insert into lokasidokumen values('$nobastlokasi', '0', '0', '0', '0','0', '0', '0', '0','0','0','0','0')") or die(mysql_error());
	
	if (isset($_POST['pulomas'])) 
	{
	$query = mysql_query("update lokasidokumen set  pulomas='1'   where nobastlokasi='$nobastlokasi'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  pulomas='0'   where nobastlokasi='$nobastlokasi'") or die(mysql_error());



	if (isset($_POST['rekon163']))
	{
	$query = mysql_query("update lokasidokumen set  rekon163='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  rekon163='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());


	if (isset($_POST['rekon54']))
	{
	$query = mysql_query("update lokasidokumen set  rekon54='1'  where nobastlokasi='$nobastlokasi'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  rekon54='0'  where nobastlokasi='$nobastlokasi'") or die(mysql_error());


	if (isset($_POST['rekon101']))
	{
	$query = mysql_query("update lokasidokumen set  rekon101='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  rekon101='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());


	if (isset($_POST['rekon129']))
		{
	$query = mysql_query("update lokasidokumen set  rekon129='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  rekon129='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());

	if (isset($_POST['balaikota']))
	{
	$query = mysql_query("update lokasidokumen set  balaikota='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  balaikota='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());


	if (isset($_POST['tp3w']))
	{
	$query = mysql_query("update lokasidokumen set  tp3w='1'where nobastlokasi='$nobastlokasi'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  tp3w='0'where nobastlokasi='$nobastlokasi'") or die(mysql_error());

	if (isset($_POST['lokasi58']))
	{
	$query = mysql_query("update lokasidokumen set  lokasi58='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  lokasi58='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());


	if (isset($_POST['dtr']))
	{
	$query = mysql_query("update lokasidokumen set  dtr='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  dtr='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());

	if (isset($_POST['bpk357']))
	{
	$query = mysql_query("update lokasidokumen set  bpk357='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  bpk357='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());

	if (isset($_POST['mutasi']))
	{
	$query = mysql_query("update lokasidokumen set  mutasi='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  mutasi='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
	echo 'simpan perbahan data asal dokumen berhasil...........';

	}
	?>




        </div>
      </div>

<br>

      <div class="latest">
        <div class="dashboard-heading">Input Lokasi Aset</div>
        <div class="dashboard-content">

	<form name="inputlokasiaset" action="" method="post">
	No.BAST :  <input type="text" name="nobast" value="<?php echo $nobastlokasi; ?>"/>	
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
                 include "excomkoneksi.php";
                 // query untuk menampilkan kecamatan
                 $query = "SELECT * FROM kecamatan";
                 $hasil = mysql_query($query);
                 while ($data = mysql_fetch_array($hasil))
                 {
                    echo "<option >".$data['namakecamatan']."</option>".$data['namakecamatan']."</option>";
                 }
          	?></select>";

    	td3.innerHTML="<select name='kelurahan[]'>          	<?php
                 include "excomkoneksi.php";
                 // query untuk menampilkankelurahan
                 $query = "SELECT * FROM kelurahan";
                 $hasil = mysql_query($query);
                 while ($data = mysql_fetch_array($hasil))
                 {
                    echo "<option >".$data['namakelurahan']."</option>".$data['namakelurahan']."</option>";
                 }
          	?></select>";

   	 td4.innerHTML="<select name='wilayah[]'>          	<?php
                 include "excomkoneksi.php";
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
                 include "excomkoneksi.php";
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
                 include "excomkoneksi.php";
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
                 include "excomkoneksi.php";
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
	include "excomkoneksi.php";
	
	if (isset($_POST['submit2'])){
	$nobastaset=$_POST['nobast'];
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

      	 <form method="post" action="" name="short" id="form1" >
	 <b>Masukan No BAST bila belum tertera :</b><br><br>   
	 No.BAST :  <input type="text" name="nobastaset" value="<?php echo $nobastaset; ?>"/><input type="submit" name="submit10" value="Pilih yang sesuai saja"/><br/>
	 </form><br>
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

	if(isset($_REQUEST['submit10'])) {

	include "excomkoneksi.php";
	$term = $_POST['nobastaset']; 

	$query = mysql_query("select * from bast b inner join dataaset d on b.nobast=d.nobastaset where nobastaset='$term'");
	}else

        
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
		<td class="center"><a href="excomentryperuntukan.php?id=<?php echo $data['idaset']; ?>">Input Data Peruntukan</a></td>

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