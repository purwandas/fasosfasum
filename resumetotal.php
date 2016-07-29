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
      <li id="dashboard"><a href="#" class="top">HGB</a></li>
      <li id="catalog"><a class="top">Master Data</a>
        <ul>
          <li><a href="dokacuan.php">Dokumen Acuan BAST</a></li>
          <li><a href="#">Data Pengembang</a></li>
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
          <li><a href="laporanperkecamatan.php">BAST Per-Kecamatan</a></li> 
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
      <h1><img src="view/image/home.png" alt="" />Resume LK2010</h1>
    </div>

    <div class="content">
  
  <div class="overview">
  <div class="dashboard-heading">Detail Resume</div>
  <div class="dashboard-content">




          </div>
      	  </div>


  <div class="statistic">
  <div class="dashboard-heading">Pie Chart</div>
  <div class="dashboard-content">




          </div>
      	  </div>



  <div class="latest">
  <div class="dashboard-heading">Data</div>
  <div class="dashboard-content">

	  <table class="list" id=datatable1 width="1400" border="1" >
	   
            <thead>
    		<tr>
		<td class="center">Sumber/Detail</td>
		<td class="center">LK2010</td>
		<td class="center">Mutasi</td>
                <td class="center">Pulo Mas</td>
        	<td class="center">BP3W</td>
		<td class="center">DTR</td>
		<td class="center">Rekon AK</td>
		<td class="center">Total</td>
		<td class="center">Selisih</td>

              	</tr>
            </thead>


	
            <tbody>


	<?php 
	include "koneksi.php";
	
	$hasilbastlk2010= mysql_query("select bpk357 from lokasidokumen where bpk357 ='1'");
	$totalbastlk2010 = mysql_num_rows($hasilbastlk2010);	

	$hasilbastlk2010sippt= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan d on b.nodokacuan=d.nodokacuan  where bpk357 ='1' && idkategori='1'");
	$totalbastlk2010sippt = mysql_num_rows($hasilbastlk2010sippt);

	$hasilbastlk2010nonsippt= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan d on b.nodokacuan=d.nodokacuan  where bpk357 ='1' && idkategori!='1'");
	$totalbastlk2010nonsippt = mysql_num_rows($hasilbastlk2010nonsippt);


$hasilbastlk2010129= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='1' && rekon129='1'");
	$totalbastlk2010129 = mysql_num_rows($hasilbastlk2010129);


$hasilbastlk201054= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='1' && rekon54='1'");
	$totalbastlk201054 = mysql_num_rows($hasilbastlk201054);

$hasilbastlk2010163= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='1' && rekon163='1'");
	$totalbastlk2010163 = mysql_num_rows($hasilbastlk2010163);

$hasilbastlk2010101= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='1' && rekon101='1'");
	$totalbastlk2010101 = mysql_num_rows($hasilbastlk2010101);
	
$hasilbastlk2010mutasi= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='1' && mutasi='1'  ");
	$totalbastlk2010mutasi = mysql_num_rows($hasilbastlk2010mutasi);

$hasilbastlk2010tambah= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='1' && mutasi='0' && pulomas='0' && rekon101='0' && tp3w='0' && rekon129='0' && rekon54='0' && rekon163='0' ");
	$totalbastlk2010tambah = mysql_num_rows($hasilbastlk2010tambah);
	
	?>

    	<tr>
        	
        	<td class="left">Kelompok 129</td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk2010163 ?></td><td><?php echo $totalbastlk2010101 ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php   ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php echo $totalbastlk2010tambah ?></td>		
  	</tr>

	<tr>
	<td class="left">Kelompok 54</td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk2010163 ?></td><td><?php echo $totalbastlk2010101 ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php   ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php echo $totalbastlk2010tambah ?></td>
	</tr>

	<tr>
	<td class="left">Kelompok 101</td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk2010163 ?></td><td><?php echo $totalbastlk2010101 ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php   ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php echo $totalbastlk2010tambah ?></td>
	</tr>


	<tr>
	<td class="left">Kelompok Mutasi2011</td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk2010163 ?></td><td><?php echo $totalbastlk2010101 ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php   ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php echo $totalbastlk2010tambah ?></td>
	</tr>

	<tr>
	<td class="left">BAST Penambahan</td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk2010163 ?></td><td><?php echo $totalbastlk2010101 ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php   ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php echo $totalbastlk2010tambah ?></td>
	</tr>



	<thead>
    	<tr>
 		<td class="left"><?php ?></td>
		<td class="center"><?php  echo $totalbastlk2010 ?></td>
        	<td class="right"><?php  ?></td>
		<td class="center"><?php  ?></td>
		<td class="left"><?php ?></td>
		<td class="left"><?php  ?></td>
		<td class="center"><?php  ?></td>
        	<td class="center"><?php  ?></td>
        	<td class="left"><?php ?></td>
		
		

	</tr>

	</thead>

             </tbody>


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