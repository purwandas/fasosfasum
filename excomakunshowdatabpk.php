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
      <h1><img src="view/image/home.png" alt="" />Result Penilaian</h1>
	<P align=right><span>
	<a target="_blank" href="print.php" ></li>
	<img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
	<a target="_blank" href="print.php">
	Print this page
	</a></span>

    </div>

<div class="content">

  <div class="overview">
  <div class="dashboard-heading">Data BAST</div>
  <div class="dashboard-content">
	<?php 
	include "excomkoneksi.php";
	$id = $_GET['id'];
	$query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dataaset a on b.nobast=a.nobastaset where nobast='$id'") or die(mysql_error());
	$data = mysql_fetch_array($query);
	?>
 
  		<table>

		<tr>
		<td>No.BAST </td><td>: </td><td><?php echo $data['nobast']; ?></td><td>

		</tr>
		<tr><td>Tgl. BAST </td><td>: </td><td><?php echo $data['tglbast']; ?></td>
		</tr>
                <tr>
		<td>Pengembang </td><td>: </td><td><?php echo $data['pengembangbast']; ?></td>
		</tr>
		<tr>
		<td>Perihal</td><td>:</td><td><?php echo $data['perihalbast']; ?></td> 
		</tr>
		<tr>
		<td>Kategori </td><td>:</td><td><?php echo $data['keterangan']; ?></td> 
		</tr>
		<tr>
		</tr>
		<tr>
		<td>Jenis Acuan </td><td>: </td><td><?php echo $data['idkategori']; ?></td>
		</tr>
		<td>No.Dok Acuan </td><td>: </td><td><?php echo $data['nodokacuan']; ?></td>
		</tr>
		<tr><td>Tgl.Dok Acuan </td><td>: </td><td><?php echo $data['tgldokacuan']; ?></td>
		</tr>
                <tr>
		<td>Pemegang</td><td>: </td><td><?php echo $data['pemegangdokacuan']; ?></td>
		</tr>
		<tr>
		<td>Perihal</td><td>:</td><td><?php echo $data['haldokacuan']; ?></td> 
		</tr>
		<tr>
		<td>Keterangan </td><td>:</td><td><?php echo $data['ketdokacuan']; ?></td> 
		</tr>
		</table>



   	</div>
	</div>


  <div class="statistic">
  <div class="dashboard-heading">Penjelasan</div>
  <div class="dashboard-content">
	<?php
	include "excomkoneksi.php";
	$id = $_GET['id'];

	$query6 = mysql_query("select * from penjelasan where nobast='$id'") or die(mysql_error());

	$data6 = mysql_fetch_array($query6);
	?>

		<td><b>Detail Penjelasan</td><td>:</b></td><td></br>

		<table>
		<tr>
		
		<textarea name=detail rows=11 cols=80  /><?=$data6['detailpenjelasan'] ?> </textarea></td> 
		</tr></br>
		</table>
	

</div>
</div>


<div class="content">
    <div class="latest">
        <div class="dashboard-heading">Detail Akun Peruntukan</div>
        <div class="dashboard-content">

        <form name="akunting" action="" method=post>
	
	<head>
	<script>
	function jumlah()
	{
	<?php


	?>

	}
	</script>
	</head>

	<body>
	  <div style="width:1140px; overflow:auto;">
          <table>
	<?php 
	include "excomkoneksi.php";
	$id = $_GET['id'];
	$query3 = mysql_query("select * from dataaset where nobastaset='$id'") or die(mysql_error());
	while ($data3 = mysql_fetch_array($query3)){
	?>

	    <input type="hidden"  name="idaset" value="<?php echo $data3['idaset']; ?>">
            <tr>
              <td>ID Lokasi</td><td>:</td><td><?php echo $data3['idaset']; ?></td>
            </tr>
            <tr>
              <td>Alamat lokasi</td><td>:</td><td><?php echo $data3['alamataset']; ?></td>
            </tr>
	    <tr>
	      <td>Wilayah</td><td>:</td><td><?php echo $data3['wilayah']; ?></td>
	    </tr>
	    <tr>
	      <td>Kecamatan</td><td>:</td><td><?php echo $data3['kecamatan']; ?></td>
	    </tr>
	    <tr>
	      <td>Kelurahan</td><td>:</td><td><?php echo $data3['kelurahan']; ?></td>
	    </tr>


	<tr>
	  
	  <table class="list" id=datatable1 width="1400" border="1" >
	   
            <thead>
    		<tr>
		<td class="center">No.</td>
		<td class="center">ID</td>
		<td class="center">Peruntukan</td>
                
                <td class="center">Kategori KIB</td>
        	<td class="center">Volume</td>
		<td class="center">Satuan</td>
		<td class="center">Nilai Pengali (Rp)</td>
		<td class="center">Penilaian PerGub 132 (Rp)</td>
		<td class="center">Nilai BAST (Rp)</td>
		<td class="center">Nilai Kombinasi (Rp)</td>
		<td class="center">Keterangan</td>
		
 <td class="center">Action</td>             	</tr>
            </thead>


	
            <tbody>



<script language="JavaScript">

function konfirmasi(){
	var pilihan = confirm("Are you sure want to delete this item  ?");
	if(pilihan){
		return true
	}else{
		return false
	}
	}
</script>


	<?php 
	include "excomkoneksi.php";
	
		
	$query2 = mysql_query("select * from akun a inner join peruntukan b on a.idperuntukan=b.idperuntukan where a.idaset='".$data3['idaset']."'") or die(mysql_error());

	$no = 1;
	while ($data2 = mysql_fetch_array($query2)){
	
	?>

    	<tr>
        	<td class="center"><?php echo $no; ?></td>
		
        	<td class="left"><?php echo $data2['idperuntukan']; ?></td>
		
        	<td class="left"><?php echo $data2['deskripsi']; ?></td>
        	<td class="center"><?php echo $data2['kategoriaset']; ?></td>
		<td class="center"><?php print number_format ($data2['volume']); ?></td>
		<td class="center"><?php echo $data2['satuan']; ?></td>
		<td class="center"><?php print number_format  ($data2['nilainjop'],2); ?></td>
		<td class="center"><?php print number_format  ($data2['jumnjop'],2); ?></td>
        	<td class="center"><?php print number_format  ($data2['nilaibast'],2); ?></td>
   		<td class="center"><?php print number_format  ($data2['nilaimix'],2); ?></td>
		<td class="right"><?php echo $data2['ketakun']; ?></td>		
		<td class="center"><a href="excomakunedit.php?id=<?php echo $data2['nobast']; ?>">Edit</a>.|.<a href="excomakunhapus.php?id=<?php echo $data2['idperuntukan']; ?>" onClick="return konfirmasi()">Hapus</a></td>
	</tr>


	<?php
 	$no++;
	}

	$query1 = mysql_query("select distinct nobast,totnjop, totbast, totapp, totmix, bastdokumen  from akun where idaset='".$data3['idaset']."'") or die(mysql_error());
	while ($data1 = mysql_fetch_array($query1)){



	?>
	<thead>
    	<tr>
        	<td class="center"><?php ?></td>
        	<td class="left"><?php  ?></td>
		
        	<td class="center"><?php  ?></td>
        	<td class="right"><?php  ?></td>
		<td class="center"><?php  ?></td>
		<td class="left"><?php ?></td>
		<td class="left"><?php  ?></td>
		<td class="center"><?php print number_format ($data1['totnjop'],2); ?></td>
        	<td class="center"><?php print number_format ($data1['totbast'],2); ?></td>
		<td class="center"><?php print number_format ($data1['totmix'],2); ?></td>
		<td class="right"><?php ?></td>		
		<td class="right"><?php ?></td>	
	</tr>

	</thead>

	
	
		
	

             </tbody>


          </table>
		

	<?php
 	
	
	}
	?>
<script type="text/javascript">
$(function(){
$(".volume").keyup(function(){
var jmlnjop = $(this).parent().next().next().next().find('.jmlnjop');
var nilainjop = $(this).parent().next().next().find('.nilainjop');
$(jmlnjop).val($(this).val() * $(nilainjop).val());
});
$(".nilainjop").keyup(function(){
var jmlnjop = $(this).parent().next().find('.jmlnjop');
var volume = $(this).parent().prev().prev().find('.volume');
$(jmlnjop).val($(this).val()*$(volume).val());
});
});
</script>





<script type="text/javascript">
$(function(){
$(".volume").keyup(function(){
var jmlapp = $(this).parent().next().next().next().next().next().next().find('.jmlapp');
var nilaiapp = $(this).parent().next().next().next().next().next().find('.nilaiapp');
$(jmlapp).val($(this).val() * $(nilaiapp).val());
});
$(".nilaiapp").keyup(function(){
var jmlapp = $(this).parent().next().find('.jmlapp');
var volume = $(this).parent().prev().prev().prev().prev().prev().find('.volume');
$(jmlapp).val($(this).val()*$(volume).val());
});
});
</script>



<script type="text/javascript">
$(function(){
$('input[name^="nilainjop"]').keyup(function(){

var total = 0;
$('input[name^="nilainjop"]').each(function(){
var volume = $(this).parent().prev().prev().find('input[name^="volume"]');

total += parseFloat($(this).val()*$(volume).val());
});
$("#total").val(total);
});
});
</script>


<script type="text/javascript">
$(function(){
$('input[name^="nilaibast"]').keyup(function(){

var total = 0;
$('input[name^="nilaibast"]').each(function(){

total += parseFloat($(this).val());
});
$("#total1").val(total);
});
});
</script>

<script type="text/javascript">
$(function(){
$('input[name^="nilaiapp"]').keyup(function(){

var total = 0;
$('input[name^="nilaiapp"]').each(function(){
var volume = $(this).parent().prev().prev().prev().prev().prev().find('input[name^="volume"]');

total += parseFloat($(this).val()*$(volume).val());
});
$("#total2").val(total);
});
});
</script>






	  
	</tr>

	<?php
 	
	}
	?>
          </table>


	  </div>
	</body>


	</form>



<?php

function jin_date_sql($date){
	$exp = explode('/',$date);
	if(count($exp) == 3) {
		$date = $exp[2].'-'.$exp[1].'-'.$exp[0];
	}
	return $date;
}

include "excomkoneksi.php";

if (isset($_POST['submit'])){

$nobast=$_POST['nobast'];

  			$check = mysql_query("SELECT nobast FROM akun WHERE nobast = '$nobast'") or die(mysql_error());
    			$check2 = mysql_num_rows($check);

    			//if the name exists it gives an error
    			if ($check2 != 0)
    			{
			?>
 			<script type="text/javascript">
 			alert("Dokumen Akun No:  <?php echo $nobast; ?> has already registered.....");
  			history.back();
 			</script>
			<?php

			}else





$tanggal =$data['tglbast'];
$tglsql=jin_date_sql($tanggal);

foreach($_POST['idperuntukan'] as $key => $value){
    if($value){


//simpan data ke database
$query = mysql_query("INSERT INTO akun VALUES('".$value."','".$_POST['nobast']."','".$tglsql."','".$_POST['idaset']."','".$_POST['kategori'][$key]."','".$_POST['volume'][$key]."','".$_POST['satuan'][$key]."','".$_POST['nilainjop'][$key]."','".$_POST['nilaibast'][$key]."','0','".$_POST['jmlnjop'][$key]."','0','".$_POST['ketakun'][$key]."','".$_POST['total']."','".$_POST['total1']."','".$_POST['total2']."')") or die(mysql_error());


}
echo 'Input data akun berhasil .....';
}
}
?>



 </div>
    </div>
    </div>




<div class="content">
    <div class="latest">
        <div class="dashboard-heading">History Akun Peruntukan</div>
        <div class="dashboard-content">

        <form name="akunting" action="" method=post>
	
	<head>
	<script>
	function jumlah()
	{
	<?php


	?>

	}
	</script>
	</head>

	<body>
	  <div style="width:1140px; overflow:auto;">
          <table>
	<?php 
	include "excomkoneksi.php";
	$id = $_GET['id'];
	$query3 = mysql_query("select * from dataaset where nobastaset='$id'") or die(mysql_error());
	while ($data3 = mysql_fetch_array($query3)){
	?>

	    <input type="hidden"  name="idaset" value="<?php echo $data3['idaset']; ?>">
            <tr>
              <td>ID Lokasi</td><td>:</td><td><?php echo $data3['idaset']; ?></td>
            </tr>
            <tr>
              <td>Alamat lokasi</td><td>:</td><td><?php echo $data3['alamataset']; ?></td>
            </tr>
	    <tr>
	      <td>Wilayah</td><td>:</td><td><?php echo $data3['wilayah']; ?></td>
	    </tr>
	    <tr>
	      <td>Kecamatan</td><td>:</td><td><?php echo $data3['kecamatan']; ?></td>
	    </tr>
	    <tr>
	      <td>Kelurahan</td><td>:</td><td><?php echo $data3['kelurahan']; ?></td>
	    </tr>


	<tr>
	  
	  <table class="list" id=datatable1 width="1400" border="1" >
	   
            <thead>
    		<tr>
		<td class="center">No.</td>
		<td class="center">ID</td>
		<td class="center">Peruntukan</td>
                
                <td class="center">Kategori KIB</td>
        	<td class="center">Volume</td>
		<td class="center">Satuan</td>
		<td class="center">Nilai Pengali (Rp)</td>
		<td class="center">Penilaian PerGub 132 (Rp)</td>
		<td class="center">Nilai BAST (Rp)</td>
		<td class="center">Nilai Kombinasi (Rp)</td>
		<td class="center">Keterangan</td>
		
              	</tr>
            </thead>


	
            <tbody>






	<?php 
	include "excomkoneksi.php";
	
		
	$query2 = mysql_query("select * from akunhistory a inner join peruntukanhistory b on a.idperuntukan=b.idperuntukan where a.idaset='".$data3['idaset']."'") or die(mysql_error());

	$no = 1;
	while ($data2 = mysql_fetch_array($query2)){
	
	?>

    	<tr>
        	<td class="center"><?php echo $no; ?></td>
		
        	<td class="left"><?php echo $data2['idperuntukan']; ?></td>
		
        	<td class="left"><?php echo $data2['deskripsi']; ?></td>
        	<td class="center"><?php echo $data2['kategoriaset']; ?></td>
		<td class="center"><?php print number_format ($data2['volume']); ?></td>
		<td class="center"><?php echo $data2['satuan']; ?></td>
		<td class="center"><?php print number_format  ($data2['nilainjop'],2); ?></td>
		<td class="center"><?php print number_format  ($data2['jumnjop'],2); ?></td>
        	<td class="center"><?php print number_format  ($data2['nilaibast'],2); ?></td>
   		<td class="center"><?php print number_format  ($data2['nilaimix'],2); ?></td>
		<td class="right"><?php echo $data2['ketakun']; ?></td>		
		
	</tr>


	<?php
 	$no++;
	}

	$query1 = mysql_query("select distinct nobast,totnjop, totbast, totapp, totmix, bastdokumen  from akunhistory where idaset='".$data3['idaset']."'") or die(mysql_error());
	while ($data1 = mysql_fetch_array($query1)){



	?>
	<thead>
    	<tr>
        	<td class="center"><?php ?></td>
        	<td class="left"><?php  ?></td>
		
        	<td class="center"><?php  ?></td>
        	<td class="right"><?php  ?></td>
		<td class="center"><?php  ?></td>
		<td class="left"><?php ?></td>
		<td class="left"><?php  ?></td>
		<td class="center"><?php print number_format ($data1['totnjop'],2); ?></td>
        	<td class="center"><?php print number_format ($data1['totbast'],2); ?></td>
		<td class="center"><?php print number_format ($data1['totmix'],2); ?></td>
		<td class="right"><?php ?></td>		
		
	</tr>

	</thead>

	
	
		
	

             </tbody>


          </table>
		
	<?php
 	
	
	}
	?>
<script type="text/javascript">
$(function(){
$(".volume").keyup(function(){
var jmlnjop = $(this).parent().next().next().next().find('.jmlnjop');
var nilainjop = $(this).parent().next().next().find('.nilainjop');
$(jmlnjop).val($(this).val() * $(nilainjop).val());
});
$(".nilainjop").keyup(function(){
var jmlnjop = $(this).parent().next().find('.jmlnjop');
var volume = $(this).parent().prev().prev().find('.volume');
$(jmlnjop).val($(this).val()*$(volume).val());
});
});
</script>





<script type="text/javascript">
$(function(){
$(".volume").keyup(function(){
var jmlapp = $(this).parent().next().next().next().next().next().next().find('.jmlapp');
var nilaiapp = $(this).parent().next().next().next().next().next().find('.nilaiapp');
$(jmlapp).val($(this).val() * $(nilaiapp).val());
});
$(".nilaiapp").keyup(function(){
var jmlapp = $(this).parent().next().find('.jmlapp');
var volume = $(this).parent().prev().prev().prev().prev().prev().find('.volume');
$(jmlapp).val($(this).val()*$(volume).val());
});
});
</script>



<script type="text/javascript">
$(function(){
$('input[name^="nilainjop"]').keyup(function(){

var total = 0;
$('input[name^="nilainjop"]').each(function(){
var volume = $(this).parent().prev().prev().find('input[name^="volume"]');

total += parseFloat($(this).val()*$(volume).val());
});
$("#total").val(total);
});
});
</script>


<script type="text/javascript">
$(function(){
$('input[name^="nilaibast"]').keyup(function(){

var total = 0;
$('input[name^="nilaibast"]').each(function(){

total += parseFloat($(this).val());
});
$("#total1").val(total);
});
});
</script>

<script type="text/javascript">
$(function(){
$('input[name^="nilaiapp"]').keyup(function(){

var total = 0;
$('input[name^="nilaiapp"]').each(function(){
var volume = $(this).parent().prev().prev().prev().prev().prev().find('input[name^="volume"]');

total += parseFloat($(this).val()*$(volume).val());
});
$("#total2").val(total);
});
});
</script>






	  
	</tr>

	<?php
 	
	}
	?>
          </table>


	  </div>
	</body>


	</form>



<?php



include "excomkoneksi.php";

if (isset($_POST['submit'])){

$nobast=$_POST['nobast'];

  			$check = mysql_query("SELECT nobast FROM akun WHERE nobast = '$nobast'") or die(mysql_error());
    			$check2 = mysql_num_rows($check);

    			//if the name exists it gives an error
    			if ($check2 != 0)
    			{
			?>
 			<script type="text/javascript">
 			alert("Dokumen Akun No:  <?php echo $nobast; ?> has already registered.....");
  			history.back();
 			</script>
			<?php

			}else





$tanggal =$data['tglbast'];
$tglsql=jin_date_sql($tanggal);

foreach($_POST['idperuntukan'] as $key => $value){
    if($value){


//simpan data ke database
$query = mysql_query("INSERT INTO akun VALUES('".$value."','".$_POST['nobast']."','".$tglsql."','".$_POST['idaset']."','".$_POST['kategori'][$key]."','".$_POST['volume'][$key]."','".$_POST['satuan'][$key]."','".$_POST['nilainjop'][$key]."','".$_POST['nilaibast'][$key]."','0','".$_POST['jmlnjop'][$key]."','0','".$_POST['ketakun'][$key]."','".$_POST['total']."','".$_POST['total1']."','".$_POST['total2']."')") or die(mysql_error());


}
echo 'Input data akun berhasil .....';
}
}
?>



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