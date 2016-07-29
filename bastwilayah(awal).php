
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
        <div class="div3"><img src="view/image/lock.png" alt="" style="position: relative; top: 3px;" />&nbsp;You are logged in as <span>demo</span></div>
      </div>

    <div id="menu">
    <ul class="left" style="display: none;">
      <li id="dashboard"><a href="#" class="top">BAST Wilayah</a></li>
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
              <li><a href="sipptvsbast">Data SIPPT vs BAST</a></li>

            </ul>
          </li>
          <li><a class="parent">Non SIPPT</a>
            <ul>
              <li><a href="#">Entry Non SIPPT</a></li>
              <li><a href="#">Entry Kewajiban Non-SIPPT</a></li>
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
	  <li><a href="#">BAST Non-Gubernur</a></li> 
	  <li><a href="bastwilayah.php">BAST Per-Wilayah</a></li>
          <li><a href="#">Semua BAST</a></li> 
                   
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
      <li id="reports"><a class="top">GIS</a>
        <ul>
          <li><a href="indexGis.php">Input Marking Area</a></li>
    	  <li><a href="entryperuntukanpercobaan.php">Pencarian Lokasi</a></li>
	  <li><a href="viewdetailbast2.html">Halaman Percobaan</a></li>
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
      <h1><img src="view/image/home.png" alt="" /> Data BAST Perwilayah</h1>
	<P align=right><span>
	<a target="_blank" href="print.php" ></li>
	<img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
	<a target="_blank" href="print.php">
	Print this page
	</a></span>

    </div>

    <div class="content">
      <div class="overview">
        <div class="dashboard-heading">Resume Data</div>

        <div class="dashboard-content">
   <?php
	include "koneksi.php";

	 

	if(isset($_REQUEST['submit2'])) {
	$term = $_POST['term']; 

	$query = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah like '%$term%' or pengembangbast like '%$term%'");

while ( $data = mysql_fetch_array($query)) {

	$hasil1= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."'");
	$totalrowbast = mysql_num_rows($hasil1);
	
	$hasil7= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%nur%'");
	$totalrowgubernur = mysql_num_rows($hasil7);


	$hasil8= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%wali%'");
	$totalrowwalikota = mysql_num_rows($hasil8);

	$hasil9= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%lengkap%' ");
	$totalrowbiro = mysql_num_rows($hasil9);

	$hasil10= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%sekwilda%' ");
	$totalrowsekwilda = mysql_num_rows($hasil10);

	$hasil11= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && kodearsip like '%1%' ");
	$totalstatus = mysql_num_rows($hasil11);}

}else

$query = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast order by nobast");
	
	while ($data = mysql_fetch_array($query)) {

	$hasil1= mysql_query("select * from bast");
	$totalrowbast = mysql_num_rows($hasil1);

	
	$hasil7= mysql_query("select * from bast where keterangan like '%nur%' ");
	$totalrowgubernur = mysql_num_rows($hasil7);

	$hasil8= mysql_query("select * from bast where keterangan like '%wali%' ");
	$totalrowwalikota = mysql_num_rows($hasil8);

	$hasil9= mysql_query("select * from bast where keterangan like '%lengkap%' ");
	$totalrowbiro = mysql_num_rows($hasil9);

	$hasil10= mysql_query("select * from bast where keterangan like '%sekwilda%' ");
	$totalrowsekwilda = mysql_num_rows($hasil10);

	$hasil11= mysql_query("select * from bast where kodearsip like '%1%' ");
	$totalstatus1 = mysql_num_rows($hasil11);

	$hasil12= mysql_query("select * from bast where kodearsip like '%2%' ");
	$totalstatus2 = mysql_num_rows($hasil12);

	$hasil13= mysql_query("select * from bast where kodearsip like '%3%' ");
	$totalstatus3 = mysql_num_rows($hasil13);

	$hasil14= mysql_query("select * from bast where kodearsip like '%4%' ");
	$totalstatus4 = mysql_num_rows($hasil14);

	}




	?>
          <table>
            <tr>
              <td>Total BAST:</td>
              <td><?php echo $totalrowbast; ?></td>
            </tr>
            <tr>
              <td>Total BAST Gubernur:</td>
              <td><?php echo $totalrowgubernur; ?></td>
            </tr>

            <tr>
              <td>Total BAST Walikota:</td>
              <td><?php echo $totalrowwalikota; ?></td>
            </tr>
            <tr>

            <tr>
              <td>Total BAST Biro Perlengkapan:</td>
              <td><?php echo $totalrowbiro; ?></td>
            </tr>

            <tr>
              <td>Total BAST Sekwilda:</td>
              <td><?php echo $totalrowsekwilda; ?></td>
            </tr>

            <tr>
              <td>Total BAST Rekon 163:</td>
              <td><?php echo $totalstatus1; ?></td>
            </tr>

            <tr>
              <td>Total BAST Rekon 54:</td>
              <td><?php echo $totalstatus2; ?></td>
            </tr>
            <tr>
              <td>Total BAST Rekon 129:</td>
              <td><?php echo $totalstatus3; ?></td>
            </tr>

            <tr>
              <td>Total BAST Rekon 101:</td>
              <td><?php echo $totalstatus4; ?></td>
            </tr>

          </table>
        </div>
      </div>






  <div class="latest">
  <div class="dashboard-heading">Data BAST</div>
  <div class="dashboard-content">

      	 <form method="post" action="" name="form1" id="form1" >
	 <b>Masukan Wilayah atau Nama Pengembang</b><br><br>   
	 <b>Kata Pencarian  </b> <input type="text" name="term" />    <input type="submit" name="submit2" value="Cari"/><br/>
	 </form><br>

          <table class="list" cellpadding="5" cellspacing="5">

            <thead>
    		<tr>
                <td class="center">No.</td>        	
                <td class="center">No.BAST</td>
                <td class="center">Tgl.BAST</td>
        	<td class="center">Pengembang</td>
		<td class="center">Wilayah</td>
		<td class="center">Kategori</td>
		<td class="center">Status</td>
		<td class="center">Action</td>
              	</tr>
            </thead>



	
<?php
if(isset($_REQUEST['submit2'])) {

	include "koneksi.php";
	$term = $_POST['term']; 
	 
	$query = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah like '%$term%' or pengembangbast like '%$term%'");

}else

$query = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast order by nobast");
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>
            <tbody>
    	<tr>
        	<td class="center"><?php echo $no; ?></td>
        	<td class="left"><?php echo $data['nobast']; ?></td>
        	<td class="center"><?php echo $data['tglbast']; ?></td>
        	<td class="left"><?php echo $data['pengembangbast']; ?></td>
		<td class="left"><?php echo $data['wilayah']; ?></td>
		<td class="left"><?php echo $data['keterangan']; ?></td>
		<td class="left"><?php echo $data['kodearsip']; ?></td>
		<td class="center"><a href="viewdetailbast.php?id=<?php echo $data['nobast']; ?>">view</a></td>
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