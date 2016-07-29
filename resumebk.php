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
      <li id="dashboard"><a href="#" class="top">Rekon BK</a></li>
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
      <h1><img src="view/image/home.png" alt="" />Resume Balai Kota Lt.7</h1>
    </div>

    <div class="content">
  
  <div class="overview">
  <div class="dashboard-heading">Detail Resume</div>
  <div class="dashboard-content">

	<?php 
	include "koneksi.php";

	$hasilbastlk2010= mysql_query("select bpk357 from lokasidokumen where mutasi ='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota = '1'");
	$totalbastlk2010 = mysql_num_rows($hasilbastlk2010);	

	$hasilbastlk2010sippt= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan d on b.nodokacuan=d.nodokacuan  where bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota = '1' && idkategori='1' ");
	$totalbastlk2010sippt = mysql_num_rows($hasilbastlk2010sippt);

	$hasilbastlk2010nonsippt= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan d on b.nodokacuan=d.nodokacuan  where bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && idkategori!='1'");
	$totalbastlk2010nonsippt = mysql_num_rows($hasilbastlk2010nonsippt);


$hasilbastlk2010129= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='1'");
	$totalbastlk2010129 = mysql_num_rows($hasilbastlk2010129);


$hasilbastlk201054= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1'");
	$totalbastlk201054 = mysql_num_rows($hasilbastlk201054);

$hasilbastlk2010163= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='1'");
	$totalbastlk2010163 = mysql_num_rows($hasilbastlk2010163);

$hasilbastlk2010101= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'");
	$totalbastlk2010101 = mysql_num_rows($hasilbastlk2010101);
	
$hasilbastlk2010mutasi= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && mutasi='1'  ");
	$totalbastlk2010mutasi = mysql_num_rows($hasilbastlk2010mutasi);


$hasilbastlk20102009= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009'");
	$totalbastlk20102009 = mysql_num_rows($hasilbastlk20102009);

$hasilbastlk20102010= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0'   && perihalbast='mutasi2010'");
	$totalbastlk20102010 = mysql_num_rows($hasilbastlk20102010);

$hasilbastlk2010tambah= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && mutasi='0' ");
	$totalbastlk2010tambah = mysql_num_rows($hasilbastlk2010tambah);

	?>

          <table>
            <tr>
              <td>Total BAST BK:</td>
              <td><a target="_blank" href="pdfbk.php"><?php echo $totalbastlk2010 ?></a></td>
            </tr>

            <tr>
              <td>Jumlah BAST BK-SIPPT :</td>
              <td><?php echo $totalbastlk2010sippt ?></td>
            </tr>

            <tr>
              <td>Jumlah BAST BK-NONSIPPT :</td>
              <td><a target="_blank" href="pdfpmnonsippt.php"><?php echo $totalbastlk2010nonsippt ?></a></td>
            </tr>
         
            <tr>
              <td>Jumlah BK-129 :</td>
              <td><?php echo $totalbastlk2010129 ?></td>
            </tr>

             <tr>
              <td>Jumlah BK-54 :</td>
              <td><?php echo $totalbastlk201054 ?></td>
            </tr>

             <tr>
              <td>Jumlah BK-163 :</td>
              <td><a target="_blank" href="pdfbk163.php"><?php echo $totalbastlk2010163 ?></a></td>
            </tr>
            <tr>
              <td>Jumlah BK-101 :</td>
              <td><?php echo $totalbastlk2010101 ?></td>
            </tr>
            <tr>
              <td>Jumlah Tahun 2009 :</td>
              <td><?php echo $totalbastlk20102009 ?></td>
            </tr>

            <tr>
              <td>Jumlah Tahun 2010 :</td>
              <td><?php echo $totalbastlk20102010 ?></td>
            </tr>

            <tr>
              <td>Jumlah Mutasi Tahun 2011 :</td>
              <td><?php echo $totalbastlk2010mutasi ?></td>
            </tr>

            <tr>
              <td>Jumlah Penambahan :</td>
              <td><a target="_blank" href="pdfbktambah.php"><?php echo $totalbastlk2010tambah ?></td>
            </tr>

          </table>


          </div>
      	  </div>


  <div class="statistic">
  <div class="dashboard-heading">Pie Chart</div>
  <div class="dashboard-content">

<html>
<head>


<script type="text/javascript" src="sources/jscharts.js"></script>

</head>
<body>

<div id="graph">Loading graph...</div>

<script type="text/javascript">
	
	var myChart = new JSChart('graph', 'pie');
	myChart.setDataArray([['Kel.129', <?php echo $totalbastlk2010129 ?>], ['Kel.54', <?php echo $totalbastlk201054 ?>], ['Kel.163', <?php echo $totalbastlk2010163 ?>], ['Kel.101', <?php echo $totalbastlk2010101 ?>], ['Thn 2009', <?php echo $totalbastlk20102009 ?>], ['Thn 2010', <?php echo $totalbastlk20102010 ?>], ['Mutasi', <?php echo $totalbastlk2010mutasi ?>],['Tambahan', <?php echo $totalbastlk2010tambah ?>]]);


	myChart.colorize(['#FFCC00', '#FFFF00', '#CCFF00', '#99FF00', '#33FF00', '#00FF66', '#00FF99', '#00FFCC']);
	myChart.setSize(500, 208);
	myChart.setTitle('');
	myChart.setTitleFontFamily('Arial');
	myChart.setTitleFontSize(11);
	myChart.setTitleColor('#0F0F0F');
	myChart.setPieRadius(90);
	myChart.setPieValuesColor('#800000');
	myChart.setPieValuesFontSize(10);
	myChart.setPiePosition(150, 100);
	myChart.setShowXValues(false);
	myChart.setLegend('#FFCC00', 'Kel.129 = <?php echo $totalbastlk2010129; ?>');
	myChart.setLegend('#FFFF00', 'Kel.54 = <?php echo $totalbastlk201054; ?>');
	myChart.setLegend('#CCFF00', 'Kel.163 = <?php echo $totalbastlk2010163; ?>');
	myChart.setLegend('#99FF00', 'Kel.101 = <?php echo $totalbastlk2010101; ?>');
	myChart.setLegend('#33FF00', 'Thn 2009 = <?php echo $totalbastlk20102009; ?>');
	myChart.setLegend('#00FF66', 'Thn 2010 = <?php echo $totalbastlk20102010; ?>');
	myChart.setLegend('#CCCCFF', 'Mutasi = <?php echo $totalbastlk2010mutasi; ?>');
	myChart.setLegend('#00FF99', 'Tambahan = <?php echo $totalbastlk2010tambah; ?>');
	myChart.setLegendShow(true);
	myChart.setLegendFontFamily('Arial');
	myChart.setLegendFontSize(11);
	myChart.setLegendPosition(350, 20);
	myChart.setPieAngle(40);
	myChart.set3D(true);
	myChart.draw();
	
	
</script>

</body>
</html>


          </div>
      	  </div>



  <div class="latest">
  <div class="dashboard-heading">Data</div>
  <div class="dashboard-content">

      	 <form method="post" action="" name="form1" id="form1" >
	 <b>Masukan Nomor Bast atau Nama Pengembang atau Jenis Dok. Acuan</b><br><br>   
	 <b>Kata Pencarian  </b> <input type="text" name="term" />    <input type="submit" name="submit2" value="Cari"/><br/>
	 </form><br>

          <table class="list" cellpadding="5" cellspacing="5">

            <thead>
    		<tr>
                <td class="center">No.</td>        	
                <td class="center">No.BAST</td>
                <td class="center">Tgl.BAST</td>
        	<td class="center">Pengembang</td>
		<td class="center">Dok Acuan</td>
		<td class="center">No.Dok Acuan</td>
		<td class="center">Pemegang SIPPT</td>
		<td class="center">Kategori BAST</td>
		<td class="center">Action</td>
              	</tr>
            </thead>



	
<?php
if(isset($_REQUEST['submit2'])) {

	include "koneksi.php";
	$term = $_POST['term']; 
	$XX = "<br><br><h2> <center> No Record Found, Search Again Please </center> </h2>";  
	$query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan c on d.idkategori=c.idkategori inner join lokasidokumen l on b.nobast=l.nobastlokasi mutasi ='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota = '1' && (nobast like '%$term%' or pengembangbast like '%$term%'  or jenisdokumen like '%$term%')");
}else


$query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan c on d.idkategori=c.idkategori inner join lokasidokumen l on b.nobast=l.nobastlokasi where mutasi ='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota = '1' ");
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>
            <tbody>
    	<tr>
        	<td class="center"><?php echo $no; ?></td>
        	<td class="left"><?php echo $data['nobast']; ?></td>
        	<td class="center"><?php echo $data['tglbast']; ?></td>
        	<td class="left"><?php echo $data['pengembangbast']; ?></td>
		<td class="center"><?php echo $data['jenisdokumen']; ?></td>
		<td class="left"><a href="bastbysippt.php?id=<?php echo $data['nodokacuan']; ?>"><?php echo $data['nodokacuan']; ?></a></td>
		<td class="left"><?php echo $data['pemegangdokacuan']; ?></td>
		<td class="left"><?php echo $data['keterangan']; ?></td>
		<td class="center"><a href="viewdetailbast.php?id=<?php echo $data['nobast']; ?>"><img alt=" " src="view/image/viewdetail.gif" border=0></a></td>

		

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