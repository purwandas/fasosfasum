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
      <li id="dashboard"><a href="#" class="top">Peruntukan</a></li>
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

<?php 
include "koneksi.php";
$id = $_GET['id'];

$query = mysql_query("select * from dataaset where idaset='$id'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

  <div class="breadcrumb">
        <a href="home.php">Home</a>

      </div>
              <div class="box">
    <div class="heading">
      <h1><img src="view/image/home.png" alt="" />Tambah Data Peruntukan (akun)</h1>
    </div>

   <div class="content">
    <div class="latest">
        <div class="dashboard-heading">Data Peruntukan & BHT/Kewajiban</div>
        <div class="dashboard-content">



<form name="peruntukan" action="" method=post>
<input type="hidden" name="id" value="<?php echo $idaset; ?>" />
	<table>
	<tr><td><p><b>No.BAST </td><td>:</td></b><td><input type="text" name="nobast" value="<?php echo $data['nobastaset']; ?>" /></td>
	<td><a href="viewdetailbast.php?id=<?php echo $data['nobastaset']; ?>">Lihat data klik disini</a></td>
	</tr>
	<tr><td><b>No.Aset</td><td>: </td></b><td><input type="text" name="noaset" value="<?php echo $data['idaset']; ?>" /></td>

	</tr>
	</table>
	<head>
	<script>
	var idrow1 = 2;

	function tambah1(){
   	 var x=document.getElementById('datatable1').insertRow(idrow1);
  	 var td1=x.insertCell(0);
    	 var td2=x.insertCell(1);
    	 var td3=x.insertCell(2);
    	 var td4=x.insertCell(3);
    	 var td5=x.insertCell(4);
    	 var td6=x.insertCell(5);
    	 var td7=x.insertCell(6);
    	 var td8=x.insertCell(7);
    	 var td9=x.insertCell(8);
    	 var td10=x.insertCell(9);
    	 var td11=x.insertCell(10);
    	 var td12=x.insertCell(11);
    	 var td13=x.insertCell(12);
 
   

  
    	td1.innerHTML="<input type='text' name='deskripsi[]'>";
   	td2.innerHTML="<select name='jenis[]'><option>Tanah</option><option>Non-Tanah</option></select>"; 
    	td3.innerHTML="<input type='text' name='luas[]'>";
    	td4.innerHTML="<input type='text' name='nokrk[]'>";
    	td5.innerHTML="<input type='text' name='noimb[]'>";
    	td6.innerHTML="<input type='text' name='noblokplan[]'>";
    	td7.innerHTML="<select name='sertifikasi[]'><option>Non-Sertifikat</option><option>Sertifikat</option></select>"; 
    	td8.innerHTML="<input type='text' name='pemilik[]'>";
    	td9.innerHTML="<select name='jenissertifikat[]'><option>Non-Sertifikat</option><option>SHM</option><option>HGB</option><option>DKI</option></select>";
    	td10.innerHTML="<input type='text' name='nosertifikat[]'>";
    	td11.innerHTML="<input type='text' name='masaberlaku[]'>";
    	td12.innerHTML="<input type='text' name='luassertifikat[]'>";    
    	td13.innerHTML="<input type='text' name='keterangan[]'>";     
  

    	idrow1++;
	}


	function hapus1(){
  	  if(idrow1>2){
   	     var x=document.getElementById('datatable1').deleteRow(idrow1-1);
   	     idrow1--;
   	 }
	}
	</script></head>
	<body>
	

	
<br>
	<div style="width:1132px; height:350px;overflow:auto;">  
	<table class="list" id=datatable1 width="800" border="1" >
	<thead>
	<tr>
	<td class="center">Peruntukan</td>
	<td class="center">Jenis</td>
	<td class="center">Luas Kwjbn (M2)</td>
	<td class="center">No.KRK</td>
	<td class="center">No.IMB</td>
	<td class="center">No.BlokPlan</td>
	<td class="center">Sertifikasi</td>
	<td class="center">Pemilik</td>
	<td class="center">Jenis Sertifikasi</td>
	<td class="center">No.Sertifikat</td>
	<td class="center">Masa Berlaku</td>
	<td class="center">Luas Stfkt (M2)</td>
	<td class="center">Keterangan</td>
	</tr>
	</thead>

	<tbody>
	<tr>
	
	<td><input type='text' name='deskripsi[]'></td>
	<td><select name='jenis[]'><option>Tanah</option><option>Non-Tanah</option></select></td> 
	<td><input type='text' name='luas[]'></td>
	<td><input type='text' name='nokrk[]'></td>
	<td><input type='text' name='noimb[]'></td>
	<td><input type='text' name='noblokplan[]'></td>
	<td><select name='sertifikasi[]'><option>Non-Sertifikat</option><option>Sertifikat</option></select></td>
	<td><input type='text' name='pemilik[]'></td>
	<td><select name='jenissertifikat[]'><option>Non-Sertifikat</option><option>SHM</option><option>HGB</option><option>DKI</option></select></td>
	<td><input type='text' name='nosertifikat[]'></td>
	<td><input type='text' name='masaberlaku[]'></td>
	<td><input type='text' name='luassertifikat[]'></td>   
	<td><input type='text' name='keterangan[]'></td>
  	</tr>
	</tbody>
	</table>
	
	</div>
	
	<input type=button value=Tambah name= tambah2 onclick=tambah1()><input type=button name=delete2 value=Delete onclick=hapus1()>
	<right><input type=submit name="submit" value="Simpan"/></right>

	</form>
	</body>

<?php
include "koneksi.php";
if (isset($_POST['submit'])){
foreach($_POST['deskripsi'] as $key => $value){
    if($value){


//simpan data ke database
$query = mysql_query("INSERT INTO peruntukan VALUES('','".$value."','".$_POST['jenis'][$key]."','".$_POST['luas'][$key]."','".$_POST['nokrk'][$key]."','".$_POST['noimb'][$key]."','".$_POST['noblokplan'][$key]."','".$_POST['sertifikasi'][$key]."','".$_POST['pemilik'][$key]."','".$_POST['jenissertifikat'][$key]."','".$_POST['nosertifikat'][$key]."','".$_POST['masaberlaku'][$key]."','".$_POST['luassertifikat'][$key]."','".$_POST['keterangan'][$key]."','".$_POST['nobast']."','".$_POST['noaset']."')") or die(mysql_error());


}
echo 'Input data peruntukan berhasil .....';
}

			mysql_connect("localhost","root","");
			mysql_select_db("phplogin");
			$waktu = gmdate("Y-m-d H:i:s", time()+60*60*7);
			$user = $_SESSION['SESS_FIRST_NAME'];
			$query = mysql_query("insert into loging values('','$user','tambah peruntukan akun nobast : ".$data['nobastaset']."','$waktu')") or die(mysql_error());
}
?>


</div>

        </div>
	</div>


   <div class="content">
    <div class="latest">
        <div class="dashboard-heading">Detail Peruntukan & BHT/Kewajiban</div>
        <div class="dashboard-content">

	<table class="list" cellpadding="5" cellspacing="5">
	   
            <thead>
    		<tr>
                <td class="center">No.</td>   
		<td class="center">ID </td>     	
                <td class="center">Peruntukan</td>
                <td class="center">Jenis</td>
        	<td class="center">Volume</td>	
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
	$query2 = mysql_query("select * from peruntukan where idaset='$id'") or die(mysql_error());
	
	$no = 1;
	while ($data2 = mysql_fetch_array($query2)){
	?>
	<input type="hidden" name="id" value="<?php echo $nobast; ?>"
    	<tr>
        	<td class="center"><?php echo $no; ?></td>
		<td class="left"><?php echo $data2['idperuntukan']; ?></td>
        	<td class="left"><?php echo $data2['deskripsi']; ?></td>
        	<td class="center"><?php echo $data2['jenis']; ?></td>
        	<td class="right"><?php echo $data2['luas']; ?></td>
	
		<td class="center"><a href="editperuntukan.php?idperuntukan=<?php echo $data2['idperuntukan']; ?>">Edit</a>.|.<a href="hapusperuntukan.php?idperuntukan=<?php echo $data2['idperuntukan']; ?>" onClick="return konfirmasi()">Hapus</a>.|.<a href="akuntambahnilai.php?id=<?php echo $data2['idperuntukan']; ?> ">+ Akun</a>

		</td>


		



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
</div>
<!--[if IE]>
<script type="text/javascript" src="view/javascript/jquery/flot/excanvas.js"></script>
<![endif]--> 

</div>
<div id="footer"><a href="http://www.dineshjay.co.id">dinesh consultant</a> &copy; 2009-2012 All Rights Reserved.<br />Version 1.0</div>
</body></html>