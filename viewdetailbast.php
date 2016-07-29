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
      <li id="dashboard"><a href="#" class="top">Detail</a></li>
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
      <h1><img src="view/image/home.png" alt="" />Detail Dokumen</h1>
<?php include "koneksi.php"; 
$id = $_GET['id'];

	$query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dataaset a on b.nobast=a.nobastaset where nobast='$id'") or die(mysql_error());
	$data = mysql_fetch_array($query);
?>

<P align=right><span>

<a><img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
<a target="_blank" href="pdfdetail.php?id=<?php echo $data['nobast']; ?>">
Print this page
</a></span>

    </div>
    <div class="content">

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dataaset a on b.nobast=a.nobastaset where nobast='$id'") or die(mysql_error());
	$data = mysql_fetch_array($query);
	?>

        <div class="statistic">
        <div class="dashboard-heading">Detail BAST</div>
        <div class="dashboard-content">
 
  		<table>
		
		<tr>
		<td>No.BAST </td><td>: </td><td><?php echo $data['nobast']; ?></td><td><a href="editbast.php?id=<?php echo $data['nobast']; ?>">[ Edit ]</a></td>

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
		<td>Kode Arsip </td><td>: </td><td><?php echo $data['kodearsip']; ?></td>
		</tr>
		</table>

        </div>
        </div>
	

      <div class="statistic">
        <div class="dashboard-heading">Detail Acuan</div>
        <div class="dashboard-content">
  		<table>
		<tr>
		<td>Jenis Acuan </td><td>: </td><td><?php echo $data['idkategori']; ?></td><td><a href="editsippt.php?nodokacuan=<?php echo $data['nodokacuan']; ?>">[ Edit ]</a></td>
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
		</table><br>
        </div>
        </div>


    <div class="latest">
        <div class="dashboard-heading">Detail Peruntukan</div>
        <div class="dashboard-content">

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query3 = mysql_query("select * from dataaset where nobastaset='$id'") or die(mysql_error());
	while ($data3 = mysql_fetch_array($query3)){
	?>


          <table>
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
          <table class="list" cellpadding="5" cellspacing="5">
	   
            <thead>
    		<tr>
                <td class="center">No.</td>        	
                <td class="center">Peruntukan</td>
                <td class="center">Jenis</td>
        	<td class="center">Volume</td>
		<td class="center">No.KRK</td>
		<td class="center">No.IMB</td>
		<td class="center">No.BlokPlan</td>
		<td class="center">Sertifikasi</td>
                <td class="center">Pemilik</td>
        	<td class="center">Jns Sertifikat</td>
		<td class="center">No.Sertifikat</td>
		<td class="center">MasaBerlaku</td>
		<td class="center">Luas(Stfkt)</td>
		<td class="center">Keterangan</td>
		<td class="center">Action</td>
		
                
              	</tr>
            </thead>


	
            <tbody>


<script language="JavaScript">

function konfirmasi(){
	var pilihan = confirm("Are you sure want to delete");
	if(pilihan){
		return true
	}else{
		return false
	}
	}
</script>

	<?php 

	include "koneksi.php";
	$id = $_GET['id'];
	$query2 = mysql_query("select * from peruntukan where idaset='".$data3['idaset']."'") or die(mysql_error());
	
	$no = 1;
	while ($data2 = mysql_fetch_array($query2)){
	?>
	<input type="hidden" name="id" value="<?php echo $nobast; ?>"
    	<tr>
        	<td class="center"><?php echo $no; ?></td>
        	<td class="left"><?php echo $data2['deskripsi']; ?></td>
        	<td class="center"><?php echo $data2['jenis']; ?></td>
        	<td class="right"><?php echo $data2['luas']; ?></td>
		<td class="center"><?php echo $data2['nokrk']; ?></td>
		<td class="left"><?php echo $data2['noimb']; ?></td>
		<td class="left"><?php echo $data2['noblokplan']; ?></td>
		<td class="left"><?php echo $data2['sertifikasi']; ?></td>
        	<td class="left"><?php echo $data2['pemilik']; ?></td>
        	<td class="center"><?php echo $data2['jenissertifikat']; ?></td>
        	<td class="left"><?php echo $data2['nosertifikat']; ?></td>
		<td class="center"><?php echo $data2['masaberlaku']; ?></td>
		<td class="right"><?php echo $data2['luassertifikat']; ?></td>
		<td class="left"><?php echo $data2['keterangan']; ?></td>



		<td class="center"><a href="editperuntukan.php?idperuntukan=<?php echo $data2['idperuntukan']; ?>">Edit</a>.|.<a href="hapusperuntukan.php?idperuntukan=<?php echo $data2['idperuntukan']; ?>" onClick="return konfirmasi()">Hapus</a></td>


		



	</tr>
	<?php
 	$no++;
	}
	?>
              </tbody>
          </table>


	</tr>

	<?php
 	
	}
	?>


          </table>

	<a  href="akunshowdata2.php?id=<?php echo $data['nobast']; ?>" ></li>
	<img alt=" " src="view/image/viewdetail.gif" border=0></a>
	<a  href="akunshowdata2.php?id=<?php echo $data['nobast']; ?>">Show Data Akun ....</a></span>


    </div>
    </div>


    <div class="latest">
        <div class="dashboard-heading">Status Asal Dokumen</div>
        <div class="dashboard-content">

	<?php
		include "koneksi.php";
	$id = $_GET['id'];

	?>
	
 	<form method="post" action="">
	 <table class="list" >
	
	<td>
	Check one or more box bellow to save Document source information ...
	</td>
	
	</table>
	<td>No.BAST </td><td>: </td><td><?php echo $data['nobast']; ?></td>
	<?php
	$query4 = mysql_query("select * from lokasidokumen where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
	while ($data4 = mysql_fetch_array($query4)){
	?>

	



	<table class="list" >
	
	<tr>
	<td><input type="checkbox" name="rekon163" value="1" <?php if($data4['rekon163'] == 1){echo 'checked="checked"';}?>/> Data Rekon 163<br/>
	<input type="checkbox" name="bpk357" value="1" <?php if($data4['bpk357'] == 1){echo 'checked="checked"';}?>/> Data LK2010<br/>
	<input type="checkbox" name="rekon54" value="1" <?php if($data4['rekon54'] == 1){echo 'checked="checked"';}?>/> Data Rekon 54<br/></td>
	<td><input type="checkbox" name="rekon101" value="1" <?php if($data4['rekon101'] == 1){echo 'checked="checked"';}?>/> Data Rekon 101<br/>
	<input type="checkbox" name="rekon129" value="1" <?php if($data4['rekon129'] == 1){echo 'checked="checked"';}?>/> Data Rekon 129<br/>
	<input type="checkbox" name="mutasi" value="1" <?php if($data4['mutasi'] == 1){echo 'checked="checked"';}?>/> Data Mutasi<br/></td>
	<td><input type="checkbox" name="pulomas" value="1" <?php if($data4['pulomas'] == 1){echo 'checked="checked"';}?>/> Data Pulo Mas<br/>
	<input type="checkbox" name="balaikota" value="1" <?php if($data4['balaikota'] == 1){echo 'checked="checked"';}?>/> Data Balai Kota Lt.7 <br/>
	<input type="checkbox" name="kel90" value="1" <?php if($data4['kel90'] == 1){echo 'checked="checked"';}?>/> None </td>
	<td><input type="checkbox" name="tp3w" value="1" <?php if($data4['tp3w'] == 1){echo 'checked="checked"';}?>/> Data TP3W <br/>
	<input type="checkbox" name="lokasi58" value="1" <?php if($data4['lokasi58'] == 1){echo 'checked="checked"';}?>/> Data 58 <br/>	
	<input type="checkbox" name="dtr" value="1" <?php if($data4['dtr'] == 1){echo 'checked="checked"';}?>/> Data DTR <br/><br>	</td>
	</tr>
	
	
	<tr>
	<td colspan="4" align="right"><input type="submit" value="Simpan Perubahan" name="submit22"></td>
	</tr>
	
	</table>
	<?php }?>
	</form> 


	<?php

	if(isset($_REQUEST['submit22'])) {
	
	if (isset($_POST['pulomas'])) 
	{
	$query = mysql_query("update lokasidokumen set  pulomas='1'   where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  pulomas='0'   where nobastlokasi='".$data['nobast']."'") or die(mysql_error());

	if (isset($_POST['bpk357'])) 
	{
	$query = mysql_query("update lokasidokumen set  bpk357='1'   where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  bpk357='0'   where nobastlokasi='".$data['nobast']."'") or die(mysql_error());



	if (isset($_POST['rekon163']))
	{
	$query = mysql_query("update lokasidokumen set  rekon163='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  rekon163='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());


	if (isset($_POST['rekon54']))
	{
	$query = mysql_query("update lokasidokumen set  rekon54='1'  where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  rekon54='0'  where nobastlokasi='".$data['nobast']."'") or die(mysql_error());


	if (isset($_POST['rekon101']))
	{
	$query = mysql_query("update lokasidokumen set  rekon101='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  rekon101='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());


	if (isset($_POST['rekon129']))
		{
	$query = mysql_query("update lokasidokumen set  rekon129='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  rekon129='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());

	if (isset($_POST['balaikota']))
	{
	$query = mysql_query("update lokasidokumen set  balaikota='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  balaikota='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());


	if (isset($_POST['kel90']))
	{
	$query = mysql_query("update lokasidokumen set  kel90='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  kel90='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());


	if (isset($_POST['tp3w']))
	{
	$query = mysql_query("update lokasidokumen set  tp3w='1'where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  tp3w='0'where nobastlokasi='".$data['nobast']."'") or die(mysql_error());

	if (isset($_POST['lokasi58']))
	{
	$query = mysql_query("update lokasidokumen set  lokasi58='1'where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  lokasi58='0'where nobastlokasi='".$data['nobast']."'") or die(mysql_error());


	if (isset($_POST['dtr']))
	{
	$query = mysql_query("update lokasidokumen set  dtr='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  dtr='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());

	if (isset($_POST['mutasi']))
	{
	$query = mysql_query("update lokasidokumen set  mutasi='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
	}else $query = mysql_query("update lokasidokumen set  mutasi='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());

	echo 'simpan perubahan data asal dokumen berhasil...........';

	}
	?>

	<br><a href="viewdetailbast.php?id=<?php echo $data['nobast']; ?>">Refresh klik disini</a></br>
	<br><a href="index.php">Back to Dashboard klik disini</a></br>
	



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