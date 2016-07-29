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
      <li id="dashboard"><a href="#" class="top">Rekon Periodik</a></li>
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
      <h1><img src="view/image/home.png" alt="" />Resume Priode Gubernur</h1>
    </div>

    <div class="content">
  
  <div class="overview">
  <div class="dashboard-heading">Gubernur Ali Sadikin (1971 - 1977)</div>
  <div class="dashboard-content">

	<?php 
	include "koneksi.php";
	
	$sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalsipptali = mysql_num_rows($sipptali);

$sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalsipptalipusat = mysql_num_rows($sipptalipusat);

$sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalsipptaliutara = mysql_num_rows($sipptaliutara);

$sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalsipptalibarat = mysql_num_rows($sipptalibarat);


$sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

$sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalsipptalitimur = mysql_num_rows($sipptalitimur);

$sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




	$nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalnonsipptali = mysql_num_rows($nonsipptali);

$nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

$nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

$nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


$nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

$nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

$nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
	$totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
	?>


          <table>
 		
            <tr>
	        <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
            </tr>

            <tr>
	        <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
            </tr>
          </table>

          </div>
      	  </div>





  <div class="overview">
  <div class="dashboard-heading">Gubernur Tjokropranolo</div>
  <div class="dashboard-content">

	<?php 
	include "koneksi.php";
	
	$sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
	$totalsipptali = mysql_num_rows($sipptali);

$sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
	$totalsipptalipusat = mysql_num_rows($sipptalipusat);

$sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
	$totalsipptaliutara = mysql_num_rows($sipptaliutara);

$sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%') ") or die(mysql_error());
	$totalsipptalibarat = mysql_num_rows($sipptalibarat);


$sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
	$totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

$sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
	$totalsipptalitimur = mysql_num_rows($sipptalitimur);

$sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
	$totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




	$nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
	$totalnonsipptali = mysql_num_rows($nonsipptali);

$nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
	$totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

$nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
	$totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

$nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
	$totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


$nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
	$totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

$nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
	$totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

$nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
	$totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
	?>


          <table>
 		
            <tr>
	        <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
            </tr>

            <tr>
	        <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
            </tr>
          </table>


          </div>
      	  </div>

  <div class="overview">
  <div class="dashboard-heading">Gubernur Soeprapto</div>
  <div class="dashboard-content">


	<?php 
	include "koneksi.php";
	
	$sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
	$totalsipptali = mysql_num_rows($sipptali);

$sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
	$totalsipptalipusat = mysql_num_rows($sipptalipusat);

$sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
	$totalsipptaliutara = mysql_num_rows($sipptaliutara);

$sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%') ") or die(mysql_error());
	$totalsipptalibarat = mysql_num_rows($sipptalibarat);


$sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
	$totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

$sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
	$totalsipptalitimur = mysql_num_rows($sipptalitimur);

$sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
	$totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




	$nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
	$totalnonsipptali = mysql_num_rows($nonsipptali);

$nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
	$totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

$nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
	$totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

$nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
	$totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


$nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
	$totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

$nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
	$totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

$nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
	$totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
	?>


          <table>
 		
            <tr>
	        <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
            </tr>

            <tr>
	        <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
            </tr>
          </table>

          </div>
      	  </div>

  <div class="overview">
  <div class="dashboard-heading">Gubernur Wiyogo Atmodarminto</div>
  <div class="dashboard-content">

	<?php 
	include "koneksi.php";
	
	$sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
	$totalsipptali = mysql_num_rows($sipptali);

$sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
	$totalsipptalipusat = mysql_num_rows($sipptalipusat);

$sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
	$totalsipptaliutara = mysql_num_rows($sipptaliutara);

$sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%') ") or die(mysql_error());
	$totalsipptalibarat = mysql_num_rows($sipptalibarat);


$sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
	$totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

$sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
	$totalsipptalitimur = mysql_num_rows($sipptalitimur);

$sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
	$totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




	$nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
	$totalnonsipptali = mysql_num_rows($nonsipptali);

$nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
	$totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

$nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
	$totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

$nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
	$totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


$nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
	$totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

$nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
	$totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

$nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
	$totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
	?>


          <table>
 		
            <tr>
	        <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
            </tr>

            <tr>
	        <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
            </tr>
          </table>

          </div>
      	  </div>
          </div>
      	  </div>

  <div class="overview">
  <div class="dashboard-heading">Gubernur Soerjadi Soedirdja</div>
  <div class="dashboard-content">


	<?php 
	include "koneksi.php";
	
	$sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
	$totalsipptali = mysql_num_rows($sipptali);

$sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
	$totalsipptalipusat = mysql_num_rows($sipptalipusat);

$sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
	$totalsipptaliutara = mysql_num_rows($sipptaliutara);

$sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%') ") or die(mysql_error());
	$totalsipptalibarat = mysql_num_rows($sipptalibarat);


$sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
	$totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

$sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
	$totalsipptalitimur = mysql_num_rows($sipptalitimur);

$sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
	$totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




	$nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
	$totalnonsipptali = mysql_num_rows($nonsipptali);

$nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
	$totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

$nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
	$totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

$nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
	$totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


$nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
	$totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

$nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
	$totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

$nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
	$totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
	?>


          <table>
 		
            <tr>
	        <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
            </tr>

            <tr>
	        <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
            </tr>
          </table>

          </div>
      	  </div>


  <div class="overview">
  <div class="dashboard-heading">Gubernur Sutiyoso</div>
  <div class="dashboard-content">


	<?php 
	include "koneksi.php";
	
	$sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalsipptali = mysql_num_rows($sipptali);

$sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalsipptalipusat = mysql_num_rows($sipptalipusat);

$sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalsipptaliutara = mysql_num_rows($sipptaliutara);

$sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalsipptalibarat = mysql_num_rows($sipptalibarat);


$sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

$sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalsipptalitimur = mysql_num_rows($sipptalitimur);

$sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




	$nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalnonsipptali = mysql_num_rows($nonsipptali);

$nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

$nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

$nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


$nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

$nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

$nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
	$totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
	?>


          <table>
 		
            <tr>
	        <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
            </tr>

            <tr>
	        <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
            </tr>
          </table>


          </div>
      	  </div>



  <div class="overview">
  <div class="dashboard-heading">Gubernur Fauzi Bowo</div>
  <div class="dashboard-content">


 	<?php 
	include "koneksi.php";
	
	$sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
	$totalsipptali = mysql_num_rows($sipptali);

$sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
	$totalsipptalipusat = mysql_num_rows($sipptalipusat);

$sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
	$totalsipptaliutara = mysql_num_rows($sipptaliutara);

$sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%') ") or die(mysql_error());
	$totalsipptalibarat = mysql_num_rows($sipptalibarat);


$sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
	$totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

$sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
	$totalsipptalitimur = mysql_num_rows($sipptalitimur);

$sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
	$totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




	$nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
	$totalnonsipptali = mysql_num_rows($nonsipptali);

$nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
	$totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

$nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
	$totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

$nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
	$totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


$nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
	$totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

$nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
	$totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

$nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
	$totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
	?>


          <table>
 		
            <tr>
	        <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
            </tr>

            <tr>
	        <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
	        <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
		<tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
            </tr>
          </table>
          </div>
      	  </div>

  <div class="latest">
  <div class="dashboard-heading">Data</div>
  <div class="dashboard-content">




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