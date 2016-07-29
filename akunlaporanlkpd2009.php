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
<script src="jquery.formatCurrency-1.3.0.min" type="text/javascript"></script>
<script type="text/javascript" src="view/javascript/jquery/superfish/js/superfish.js"></script>
<script type="text/javascript"></script>

<script type="text/javascript" src="jquery.price_format.1.6.js"></script>



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
      <li id="dashboard"><a href="#" class="top">Penilaian</a></li>
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
      <h1><img src="view/image/home.png" alt="" />Laporan Penilaian LKPD-2009</h1>
	<P align=right><span>
	<a target="_blank" href="print.php" ></li>
	<img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
	<a target="_blank" href="print.php">
	Print this page
	</a></span>

    </div>

<div class="content">

  <div class="overview">
  <div class="dashboard-heading">Resume Penilaian PerGub 132</div>
  <div class="dashboard-content">
<?php
include "koneksi.php";


$sqlA = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sqlA) or die (mysql_error());
   	 $tA = mysql_fetch_array($result);

$sqlB = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sqlB) or die (mysql_error());
   	 $tB = mysql_fetch_array($result);

$sqlC = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sqlC) or die (mysql_error());
   	 $tC = mysql_fetch_array($result);

$sqlD = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sqlD) or die (mysql_error());
   	 $tD = mysql_fetch_array($result);

$sqlE = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sqlE) or die (mysql_error());
   	 $tE = mysql_fetch_array($result);


	$hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi where  (bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')");

	$totalrowlkpd163 = mysql_num_rows($hasil);


?>

          <table>
            <tr>
              <td>Jumlah Nilai KIB A:</td>
              <td> <a target="_blank" href="pdflaporanakun2009A.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
            </tr>

            <tr>
              <td>Jumlah Nilai KIB B:</td>
              <td> <a target="_blank" href="pdflaporanakun2009B.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
            </tr>
            <tr>
              <td>Jumlah Nilai KIB C:</td>
               <td> <a target="_blank" href="pdflaporanakun2009C.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
            </tr>
            <tr>
              <td>Jumlah Nilai KIB D:</td>
               <td> <a target="_blank" href="pdflaporanakun2009D.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
            </tr>
            <tr>
              <td>Jumlah Nilai KIB E:</td>
               <td> <a target="_blank" href="pdflaporanakun2009E.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
            </tr>


            <tr>
              <td>Total Nilai :</td>
               <td> <a target="_blank" href="pdflaporanakun2009ABCDE.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
            </tr>




            <tr>
              <td></br></br>Jumlah BAST:</td>
               <td> <a target="_blank" href="pdflaporanakuntambahE.php"><?php echo $totalrowlkpd163;  ?></a></td>
            </tr>

          </table>



    </div>
    </div>


  <div class="statistic">
  <div class="dashboard-heading">Resume Nilai BAST</div>
  <div class="dashboard-content">
<?php
include "koneksi.php";


$sqlA = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sqlA) or die (mysql_error());
   	 $tA = mysql_fetch_array($result);

$sqlB = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sqlB) or die (mysql_error());
   	 $tB = mysql_fetch_array($result);

$sqlC = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sqlC) or die (mysql_error());
   	 $tC = mysql_fetch_array($result);

$sqlD = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sqlD) or die (mysql_error());
   	 $tD = mysql_fetch_array($result);

$sqlE = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sqlE) or die (mysql_error());
   	 $tE = mysql_fetch_array($result);


?>

          <table>
            <tr>
              <td>Jumlah Nilai KIB A           :</td>
              <td> <a target="_blank" href="pdflaporanakun2009ABAST.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
            </tr>

            <tr>
              <td>Jumlah Nilai KIB B           :</td>
              <td> <a target="_blank" href="pdflaporanakun2009BBAST.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
            </tr>
            <tr>
              <td>Jumlah Nilai KIB C           :</td>
               <td> <a target="_blank" href="pdflaporanakun2009CBAST.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
            </tr>
            <tr>
              <td>Jumlah Nilai KIB D           :</td>
               <td> <a target="_blank" href="pdflaporanakun2009DBAST.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
            </tr>
            <tr>
              <td>Jumlah Nilai KIB E           :</td>
               <td> <a target="_blank" href="pdflaporanakun2009EBAST.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
            </tr>


            <tr>
              <td>Total Nilai                  :</td>
               <td> <a target="_blank" href="pdflaporanakun2009ABCDEBAST.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
            </tr>


          </table>



    </div>
    </div>


  <div class="latest">
  <div class="dashboard-heading">Detail KIB A</div>
  <div class="dashboard-content">

	  <table class="list" id=datatable1 width="1400" border="1" >
	   
            <thead>
    		<tr>
		<td class="center">No.</td>
		<td class="center">No.BAST</td>
		<td class="center">Peruntukan</td>                
                <td class="center">Kategori KIB</td>
        	<td class="center">Volume</td>
		<td class="center">Satuan</td>
		<td class="center">Nilai Pengali</td>
		<td class="center">Penilaian PerGub132</td>
		<td class="center">Nilai BAST</td>
		<td class="center">Keterangan</td>
		<td class="center">Action</td>
              	</tr>
            </thead>


	
            <tbody>


	<?php 
	include "koneksi.php";
	
		
	$query2 = mysql_query("select * from akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join peruntukan p on a.idperuntukan=p.idperuntukan where  kategoriaset='KIB A' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009'))") ;

	$no = 1;
	while ($data2 = mysql_fetch_array($query2)){
	
	?>

    	<tr>
        	<td class="center"><?php echo $no; ?></td>		
        	<td class="left"><?php echo $data2['nobast']; ?></td>
		<td class="left"><?php echo $data2['deskripsi']; ?></td>
        	<td class="center"><?php echo $data2['kategoriaset']; ?></td>
		<td class="center"><?php print number_format ($data2['volume']); ?></td>
		<td class="center"><?php echo $data2['satuan']; ?></td>
		<td class="center"><?php print number_format  ($data2['nilainjop'],2); ?></td>
		<td class="center"><?php print number_format  ($data2['jumnjop'],2); ?></td>
        	<td class="center"><?php print number_format  ($data2['nilaibast'],2); ?></td>
		<td class="right"><?php echo $data2['ketakun']; ?></td>		
		<td class="center"><a href="akunedit2.php?id=<?php echo $data2['nobast']; ?>">Edit</a></td>
	</tr>

	 
	<?php 
	 $no++;

	}
		$sql = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sql) or die (mysql_error());
   	 $t = mysql_fetch_array($result);

		$sql2 = "SELECT SUM(nilaibast) AS total_nilaibast2 FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result2 = mysql_query($sql2) or die (mysql_error());
   	 $t2 = mysql_fetch_array($result2);

	?>

	<thead>
    	<tr>
        	<td class="center"><?php ?></td>
        	<td class="left"><?php  ?></td>
		<td class="center"><?php  ?></td>
        	<td class="right"><?php  ?></td>
		<td class="center"><?php  ?></td>
		<td class="center"><?php ?></td>
		<td class="center"><?php ?></td>
		<td class="center"><?php echo number_format($t['total_nilaibast'],2);  ?></td>
		<td class="center"><?php echo number_format($t2['total_nilaibast2'],2);  ?></td>
		<td class="right"><?php ?></td>		
		<td class="center"><?php ?></td>
		
	</tr>

	</thead>
</tbody>

</table>


 </div>
    </div>


  <div class="latest">
  <div class="dashboard-heading">Detail KIB B</div>
  <div class="dashboard-content">

	  <table class="list" id=datatable1 width="1400" border="1" >
	   
            <thead>
    		<tr>
		<td class="center">No.</td>
		<td class="center">No.BAST</td>
		<td class="center">Peruntukan</td>                
                <td class="center">Kategori KIB</td>
        	<td class="center">Volume</td>
		<td class="center">Satuan</td>
		<td class="center">Nilai Pengali</td>
		<td class="center">Penilaian PerGub132</td>
		<td class="center">Nilai BAST</td>
		<td class="center">Keterangan</td>
		<td class="center">Action</td>
              	</tr>
            </thead>


	
            <tbody>


	<?php 
	include "koneksi.php";
	
		
	$query2 = mysql_query("select * from akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join peruntukan p on a.idperuntukan=p.idperuntukan where  kategoriaset='KIB B' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009'))") ;
	$no = 1;
	while ($data2 = mysql_fetch_array($query2)){
	
	?>

    	<tr>
        	<td class="center"><?php echo $no; ?></td>		
        	<td class="left"><?php echo $data2['nobast']; ?></td>
		<td class="left"><?php echo $data2['deskripsi']; ?></td>
        	<td class="center"><?php echo $data2['kategoriaset']; ?></td>
		<td class="center"><?php print number_format ($data2['volume']); ?></td>
		<td class="center"><?php echo $data2['satuan']; ?></td>
		<td class="center"><?php print number_format  ($data2['nilainjop'],2); ?></td>
		<td class="center"><?php print number_format  ($data2['jumnjop'],2); ?></td>
        	<td class="center"><?php print number_format  ($data2['nilaibast'],2); ?></td>
		<td class="right"><?php echo $data2['ketakun']; ?></td>		
		<td class="center"><a href="akunedit2.php?id=<?php echo $data2['nobast']; ?>">Edit</a></td>
	</tr>

	 
	<?php 
	 $no++;

	}
		$sql = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sql) or die (mysql_error());
   	 $t = mysql_fetch_array($result);

		$sql2 = "SELECT SUM(nilaibast) AS total_nilaibast2 FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result2 = mysql_query($sql2) or die (mysql_error());
   	 $t2 = mysql_fetch_array($result2);
	?>

	<thead>
    	<tr>
        	<td class="center"><?php ?></td>
        	<td class="left"><?php  ?></td>
		<td class="center"><?php  ?></td>
        	<td class="right"><?php  ?></td>
		<td class="center"><?php  ?></td>
		<td class="center"><?php ?></td>
		<td class="center"><?php ?></td>
		<td class="center"><?php echo number_format($t['total_nilaibast'],2);  ?></td>
		<td class="center"><?php echo number_format($t2['total_nilaibast2'],2);  ?></td>
		<td class="right"><?php ?></td>		
		<td class="center"><?php ?></td>
	</tr>

	</thead>
</tbody>

</table>


 </div>
    </div>

  <div class="latest">
  <div class="dashboard-heading">Detail KIB C</div>
  <div class="dashboard-content">

	  <table class="list" id=datatable1 width="1400" border="1" >
	   
            <thead>
    		<tr>
		<td class="center">No.</td>
		<td class="center">No.BAST</td>
		<td class="center">Peruntukan</td>                
                <td class="center">Kategori KIB</td>
        	<td class="center">Volume</td>
		<td class="center">Satuan</td>
		<td class="center">Nilai Pengali</td>
		<td class="center">Penilaian PerGub132</td>
		<td class="center">Nilai BAST</td>
		<td class="center">Keterangan</td>
		<td class="center">Action</td>
              	</tr>
            </thead>


	
            <tbody>


	<?php 
	include "koneksi.php";
	
		
	$query2 = mysql_query("select * from akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join peruntukan p on a.idperuntukan=p.idperuntukan where  kategoriaset='KIB C' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009'))") ;

	$no = 1;
	while ($data2 = mysql_fetch_array($query2)){
	
	?>

    	<tr>
        	<td class="center"><?php echo $no; ?></td>		
        	<td class="left"><?php echo $data2['nobast']; ?></td>
		<td class="left"><?php echo $data2['deskripsi']; ?></td>
        	<td class="center"><?php echo $data2['kategoriaset']; ?></td>
		<td class="center"><?php print number_format ($data2['volume']); ?></td>
		<td class="center"><?php echo $data2['satuan']; ?></td>
		<td class="center"><?php print number_format  ($data2['nilainjop'],2); ?></td>
		<td class="center"><?php print number_format  ($data2['jumnjop'],2); ?></td>
        	<td class="center"><?php print number_format  ($data2['nilaibast'],2); ?></td>
		<td class="right"><?php echo $data2['ketakun']; ?></td>		
		<td class="center"><a href="akunedit2.php?id=<?php echo $data2['nobast']; ?>">Edit</a></td>
	</tr>

	 
	<?php 
	 $no++;


	
	}

		$sql = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sql) or die (mysql_error());
   	 $t = mysql_fetch_array($result);

		$sql2 = "SELECT SUM(nilaibast) AS total_nilaibast2 FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result2 = mysql_query($sql2) or die (mysql_error());
   	 $t2 = mysql_fetch_array($result2);

	?>

	<thead>
    	<tr>
        	<td class="center"><?php ?></td>
        	<td class="left"><?php  ?></td>
		<td class="center"><?php  ?></td>
        	<td class="right"><?php  ?></td>
		<td class="center"><?php  ?></td>
		<td class="center"><?php ?></td>
		<td class="center"><?php ?></td>
		<td class="center"><?php echo number_format($t['total_nilaibast'],2);  ?></td>
		<td class="center"><?php echo number_format($t2['total_nilaibast2'],2);  ?></td>
		<td class="right"><?php ?></td>		
		<td class="center"><?php ?></td>
	</tr>

	</thead>
</tbody>

</table>

 </div>
    </div>

  <div class="latest">
  <div class="dashboard-heading">Detail KIB D</div>
  <div class="dashboard-content">


	  <table class="list" id=datatable1 width="1400" border="1" >
	   
            <thead>
    		<tr>
		<td class="center">No.</td>
		<td class="center">No.BAST</td>
		<td class="center">Peruntukan</td>                
                <td class="center">Kategori KIB</td>
        	<td class="center">Volume</td>
		<td class="center">Satuan</td>
		<td class="center">Nilai Pengali</td>
		<td class="center">Penilaian PerGub132</td>
		<td class="center">Nilai BAST</td>
		<td class="center">Keterangan</td>
		<td class="center">Action</td>
              	</tr>
            </thead>


	
            <tbody>


	<?php 
	include "koneksi.php";
	
		
	$query2 = mysql_query("select * from akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join peruntukan p on a.idperuntukan=p.idperuntukan where  kategoriaset='KIB D' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009'))") ;

	$no = 1;
	while ($data2 = mysql_fetch_array($query2)){
	
	?>

    	<tr>
        	<td class="center"><?php echo $no; ?></td>		
        	<td class="left"><?php echo $data2['nobast']; ?></td>
		<td class="left"><?php echo $data2['deskripsi']; ?></td>
        	<td class="center"><?php echo $data2['kategoriaset']; ?></td>
		<td class="center"><?php print number_format ($data2['volume']); ?></td>
		<td class="center"><?php echo $data2['satuan']; ?></td>
		<td class="center"><?php print number_format  ($data2['nilainjop'],2); ?></td>
		<td class="center"><?php print number_format  ($data2['jumnjop'],2); ?></td>
        	<td class="center"><?php print number_format  ($data2['nilaibast'],2); ?></td>
		<td class="right"><?php echo $data2['ketakun']; ?></td>		
		<td class="center"><a href="akunedit2.php?id=<?php echo $data2['nobast']; ?>">Edit</a></td>
	</tr>

	 
	<?php 
	 $no++;

	}
	
	$sql = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sql) or die (mysql_error());
   	 $t = mysql_fetch_array($result);

		$sql2 = "SELECT SUM(nilaibast) AS total_nilaibast2 FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result2 = mysql_query($sql2) or die (mysql_error());
   	 $t2 = mysql_fetch_array($result2);
	
	?>

	<thead>
    	<tr>
        	<td class="center"><?php ?></td>
        	<td class="left"><?php  ?></td>
		<td class="center"><?php  ?></td>
        	<td class="right"><?php  ?></td>
		<td class="center"><?php  ?></td>
		<td class="center"><?php ?></td>
		<td class="center"><?php ?></td>
		<td class="center"><?php echo number_format($t['total_nilaibast'],2);  ?></td>
		<td class="center"><?php echo number_format($t2['total_nilaibast2'],2);  ?></td>
		<td class="right"><?php ?></td>		
		<td class="center"><?php ?></td>
		
	</tr>

	</thead>
</tbody>

</table>

 </div>
    </div>

  <div class="latest">
  <div class="dashboard-heading">Detail KIB E</div>
  <div class="dashboard-content">


	  <table class="list" id=datatable1 width="1400" border="1" >
	   
            <thead>
    		<tr>
		<td class="center">No.</td>
		<td class="center">No.BAST</td>
		<td class="center">Peruntukan</td>                
                <td class="center">Kategori KIB</td>
        	<td class="center">Volume</td>
		<td class="center">Satuan</td>
		<td class="center">Nilai Pengali</td>
		<td class="center">Penilaian PerGub132</td>
		<td class="center">Nilai BAST</td>
		<td class="center">Keterangan</td>
		<td class="center">Action</td>
              	</tr>
            </thead>


	
            <tbody>


	<?php 
	include "koneksi.php";
	
		
	$query2 = mysql_query("select * from akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join peruntukan p on a.idperuntukan=p.idperuntukan where  kategoriaset='KIB E' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009'))") ;

	$no = 1;
	while ($data2 = mysql_fetch_array($query2)){
	
	?>

    	<tr>
        	<td class="center"><?php echo $no; ?></td>		
        	<td class="left"><?php echo $data2['nobast']; ?></td>
		<td class="left"><?php echo $data2['deskripsi']; ?></td>
        	<td class="center"><?php echo $data2['kategoriaset']; ?></td>
		<td class="center"><?php print number_format ($data2['volume']); ?></td>
		<td class="center"><?php echo $data2['satuan']; ?></td>
		<td class="center"><?php print number_format  ($data2['nilainjop'],2); ?></td>
		<td class="center"><?php print number_format  ($data2['jumnjop'],2); ?></td>
        	<td class="center"><?php print number_format  ($data2['nilaibast'],2); ?></td>
		<td class="right"><?php echo $data2['ketakun']; ?></td>		
		<td class="center"><a href="akunedit2.php?id=<?php echo $data2['nobast']; ?>">Edit</a></td>
	</tr>

	 
	<?php 
	 $no++;

	}

	$sql = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result = mysql_query($sql) or die (mysql_error());
   	 $t = mysql_fetch_array($result);

		$sql2 = "SELECT SUM(nilaibast) AS total_nilaibast2 FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
    	$result2 = mysql_query($sql2) or die (mysql_error());
   	 $t2 = mysql_fetch_array($result2);
	
	?>

	<thead>
    	<tr>
        	<td class="center"><?php ?></td>
        	<td class="left"><?php  ?></td>
		<td class="center"><?php  ?></td>
        	<td class="right"><?php  ?></td>
		<td class="center"><?php  ?></td>
		<td class="center"><?php ?></td>
		<td class="center"><?php ?></td>
		<td class="center"><?php echo number_format($t['total_nilaibast'],2);  ?></td>
		<td class="center"><?php echo number_format($t2['total_nilaibast2'],2);  ?></td>
		<td class="right"><?php ?></td>		
		<td class="center"><?php ?></td>
		
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