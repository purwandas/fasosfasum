
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
<script src="js/jquery.price_format.1.6.js" type="text/javascript"></script>

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
      <li id="dashboard"><a href="#" class="top">Dashboard</a></li>
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
              <li><a href="entrysippt.php">Entry Non SIPPT</a></li>
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
	  <li><a href="#">BAST Non-Gubernur</a></li>
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

          <li><a class="parent">Data Rekonsiliasi</a>
            <ul>
              <li><a target="_blank" href="pdf163.php">Data Rekon Kel.163</a></li>
              <li><a target="_blank" href="pdf54.php">Data Rekon Kel.54</a></li>
              <li><a target="_blank" href="pdf129.php">Data Rekon Kel.129</a></li>
              <li><a target="_blank" href="pdf101.php">Data Rekon Kel.101</a></li>
	      <li><a target="_blank" href="pdf58.php">Data Lokasi 58</a></li>
	      <li><a target="_blank" href="pdfdtr.php">Data Kelompok DTR</a></li>
	      <li><a target="_blank" href="bastirisanrekon.php">Data irisan Rekon</a></li>
		
 
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




      <li id="accounting"><a class="top">Accounting</a>
        <ul>
          <li><a href="entrynilaibast.php">Entry Nilai BAST</a></li>
    	  <li><a href="grafikbastwilayah.php">Halaman Percobaan1</a></li>
	  <li><a href="grafik2.php">Halaman Percobaan2</a></li>
        </ul>
      </li>



      <li id="reports"><a class="top">GIS</a>
        <ul>
          <li><a href="indexGis.php">Input Marking Area</a></li>
    	  <li><a href="entryperuntukanpercobaan.php">Pencarian Lokasi</a></li>
	  <li><a href="piechart8.php">Halaman Percobaan</a></li>
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
      <h1><img src="view/image/home.png" alt="" /> Dashboard</h1>
    </div>

    <div class="content">
      <div class="overview">
        <div class="dashboard-heading">Resume Data</div>

        <div class="dashboard-content">
   <?php
	include "koneksi.php";
	$hasil1= mysql_query("select * from bast");
	$totalrowbast = mysql_num_rows($hasil1);

	
	$hasil2= mysql_query("select * from peruntukan where jenissertifikat='HGB'");
	$totalrowHGB = mysql_num_rows($hasil2);

	
	$hasil3= mysql_query("select * from peruntukan where jenissertifikat='SHM'");
	$totalrowSHM = mysql_num_rows($hasil3);

	$hasil4= mysql_query("select * from peruntukan where jenissertifikat like '%DKI%'");
	$totalrowDKI = mysql_num_rows($hasil4);

	$hasil5= mysql_query("select * from peruntukan where sertifikasi='Non-Sertifikat'");
	$totalrowNonSertifikat = mysql_num_rows($hasil5);

	$hasil6= mysql_query("select * from peruntukan where sertifikasi='Sertifikat'");
	$totalrowSertifikat = mysql_num_rows($hasil6);


	$hasil7= mysql_query("select * from bast where keterangan like '%nur%' ");
	$totalrowgubernur = mysql_num_rows($hasil7);

	$hasil8= mysql_query("select * from bast where keterangan like '%wali%' ");
	$totalrowwalikota = mysql_num_rows($hasil8);

	$hasil9= mysql_query("select * from bast where keterangan like '%lengkap%' ");
	$totalrowbiro = mysql_num_rows($hasil9);

	$hasil10= mysql_query("select * from bast where keterangan like '%sekwilda%' ");
	$totalrowsekwilda = mysql_num_rows($hasil10);

	$r=mysql_query("select sum(luas) as tot from peruntukan where jenis='Tanah'");
	$b=mysql_fetch_array($r);
	
	$m=mysql_query("select sum(luas) as totnon from peruntukan where jenis='Non-Tanah'");
	$n=mysql_fetch_array($m);

	?>
          <table>
            <tr>
              <td>Total BAST:</td>
              <td><?php echo $totalrowbast; ?></td>
            </tr>
            <tr>
              <td>Total BAST Gubernur:</td>
              <td><a href="bastgubernur.php"><?php echo $totalrowgubernur; ?></a></td>
            </tr>

            <tr>
              <td>Total BAST Walikota:</td>
              <td><a href="bastwalikota.php"><?php echo $totalrowwalikota; ?></a></td>
            </tr>
            <tr>

            <tr>
              <td>Total BAST Biro Perlengkapan:</td>
              <td><a href="bastbiro.php"><?php echo $totalrowbiro; ?></a></td>
            </tr>

            <tr>
              <td>Total BAST Sekwilda:</td>
              <td><a href="bastsekwilda.php"><?php echo $totalrowsekwilda; ?></a></td>
            </tr>

            <tr>

              <td>Total Luas Tanah:</td>

              	<td><?php print number_format($b['tot'],2); ?> m2</td>
            </tr>

            <tr>

              <td>Total HGB:</td>
              <td><a href="hgb.php"><?php echo $totalrowHGB; ?></a></td>
            </tr>
            <tr>
              <td>Total SHM:</td>
              <td><a href="shm.php"><?php echo $totalrowSHM; ?></a></td>
            </tr>

            <tr>
              <td>Total SHP:</td>
              <td><a href="shp.php"><?php echo $totalrowDKI; ?></a></td>
            </tr>
            <tr>
              <td>Total Sertifikat:</td>
              <td><?php echo $totalrowSertifikat; ?></td>

            </tr>
            <tr>
              <td>Total Non Sertifikat:</td>
              <td><?php echo $totalrowNonSertifikat; ?></td>
            </tr>
          </table>
        </div>
      </div>






      <div class="statistic">

        <div class="dashboard-heading">Statistik</div>
        <div class="dashboard-content">
 <body>
<center>
        <h4>Jumlah Data Berdasarkan Lokasi Dokumen</h4>

        <?php
        
               //koneksi database
		include "koneksi.php";

            //query panggil data_grafik
            $query = mysql_query("select * from lokasidokumen ");
            $record = mysql_fetch_array($query);

		$hasilpulomas= mysql_query("select * from lokasidokumen where pulomas ='1' ");
		$totalpulomas = mysql_num_rows($hasilpulomas);

		$hasilrekon163= mysql_query("select * from lokasidokumen where rekon163 ='1' ");
		$totalrekon163 = mysql_num_rows($hasilrekon163);

		$hasilrekon54= mysql_query("select * from lokasidokumen where rekon54 ='1' ");
		$totalrekon54 = mysql_num_rows($hasilrekon54);

		$hasilrekon129= mysql_query("select * from lokasidokumen where rekon129 ='1' ");
		$totalrekon129 = mysql_num_rows($hasilrekon129);

		$hasilrekon101= mysql_query("select * from lokasidokumen where rekon101 ='1' ");
		$totalrekon101 = mysql_num_rows($hasilrekon101);

		$hasildtr= mysql_query("select * from lokasidokumen where dtr ='1' ");
		$totaldtr = mysql_num_rows($hasildtr);


            //variabel data grafik
            $jumlahpulomas = $totalpulomas;
            $jumlahrekon163 = $totalrekon163;
            $jumlahrekon54 = $totalrekon54;
	    $jumlahrekon129 = $totalrekon129;
	    $jumlahrekon101 = $totalrekon101;
	    $jumlahdtr = $totaldtr;
	    

            //cari nilai terbesar
            if ($jumlahpulomas >= $jumlahrekon163 and $jumlahpulomas >= $jumlahrekon54 and  $jumlahpulomas >= $jumlahrekon129)   {
                $max = $jumlahpulomas;

            } else if ($jumlahrekon163 >= $jumlahpulomas and $jumlahrekon163 >= $jumlahrekon54 and $jumlahrekon163 >= $jumlahrekon129 and $jumlahrekon163 >= $jumlahrekon101 and $jumlahrekon163 >=$jumlahdtr) {
                $max = $jumlahrekon163;

            } else if ($jumlahrekon54 >= $jumlahpulomas and $jumlahrekon54 >= $jumlahrekon163 and $jumlahrekon54 >= $jumlahrekon129 and $jumlahrekon54 >= $jumlahrekon101 and $jumlahrekon54 >=$jumlahdtr) {
                $max = $jumlahrekon54;

            } else if ($jumlahrekon129 >= $jumlahpulomas and $jumlahrekon129 >= $jumlahrekon163 and $jumlahrekon129 >= $jumlahrekon54 and $jumlahrekon129 >= $jumlahrekon101 and $jumlahrekon129 >=$jumlahdtr) {
                $max = $jumlahrekon129;

            } else if ($jumlahrekon101 >= $jumlahpulomas and $jumlahrekon101 >= $jumlahrekon163 and $jumlahrekon101 >= $jumlahrekon54 and $jumlahrekon101 >= $jumlahrekon129 and $jumlahrekon101 >=$jumlahdtr) {
                $max = $jumlahrekon101;

            } else if ($jumlahdtr >= $jumlahpulomas and $jumlahdtr >= $jumlahrekon163 and $jumlahdtr >= $jumlahrekon54 and $jumlahdtr >=$jumlahrekon129 and $jumlahdtr >=$jumlahrekon101) {
                $max = $jumlahdtr;

}


            //hitung panjang grafik
            $Tmaksimal = 100 / $max;
            $awal = 100;
            $a = $jumlahpulomas * $Tmaksimal;
            $ay = 100 - $a;
            $ax = ($ay * $awal) /100;

            $b = $jumlahrekon163 * $Tmaksimal;
            $by = 100 - $b;
            $bx = ($by * $awal) / 100;

            $c = $jumlahrekon54 * $Tmaksimal;
            $cy = 100 - $c;
            $cx = ($cy * $awal) / 100;


            $d = $jumlahrekon129 * $Tmaksimal;
            $dy = 100 - $d;
            $dx = ($dy * $awal) / 100;

            $e = $jumlahrekon101 * $Tmaksimal;
            $ey = 100 - $e;
            $ex = ($ey * $awal) / 100;

            $f = $jumlahdtr * $Tmaksimal;
            $fy = 100 - $f;
            $fx = ($fy * $awal) / 100;

            ?>

            <div style="height:100px;border-left: 2px solid;border-bottom: 2px solid;margin: 30px;padding-top: 1px">


                <div style="border: 1px solid;margin-top:<?php echo "$ax"; ?>px; height: <?php echo "$a"; ?>%;width:25px;margin-left: 10px;text-align: center;float: left">
                    <?php //echo "$jumlahpulomas"." (".$a."%)" ?>
                    <img width="100%" height="100%" src="view/image/red.jpg"/>
                    <?php echo "$jumlahpulomas" ?>
                </div>


                <div style="border: 1px solid;margin-top:<?php echo "$bx"; ?>px; height: <?php echo "$b"; ?>%;width:25px;margin-left: 10px;text-align: center;float: left">
                    <img width="100%" height="100%" src="view/image/green.jpg"/>
                    <?php echo "$jumlahrekon163" ?>
                </div>


                <div style="border: 1px solid;margin-top:<?php echo "$cx"; ?>px; height: <?php echo "$c"; ?>%;width:25px;margin-left: 10px;text-align: center;float: left">
                    <img width="100%" height="100%" src="view/image/blue.jpg"/>
                    <?php echo "$jumlahrekon54" ?>
                </div>


                <div style="border: 1px solid;margin-top:<?php echo "$dx"; ?>px; height: <?php echo "$d"; ?>%;width:25px;margin-left: 10px;text-align: center;float: left">
                    <img width="100%" height="100%" src="view/image/orange.png"/>
                    <?php echo "$jumlahrekon129" ?>
                </div>

                <div style="border: 1px solid;margin-top:<?php echo "$ex"; ?>px; height: <?php echo "$e"; ?>%;width:25px;margin-left: 10px;text-align: center;float: left">
                    <img width="100%" height="100%" src="view/image/pink.png"/>
                    <?php echo "$jumlahrekon101" ?>
                </div>

                <div style="border: 1px solid;margin-top:<?php echo "$fx"; ?>px; height: <?php echo "$f"; ?>%;width:25px;margin-left: 10px;text-align: center;float: left">
                    <img width="100%" height="100%" src="view/image/yelow.png"/>
                    <?php echo "$jumlahdtr" ?>
                </div>


                <div style="clear: both"></div>

            </div>



            <div style="margin-top: 20px;margin-left:10px">
                <table align="center">
                    <tr>
                        <td><img width="10px" src="view/image/red.jpg"/></td>
                        <td>Pulomas</td>
                   
                        <td><img width="10px" src="view/image/green.jpg"/></td>
                        <td>rekon163</td>
                    
                        <td><img width="10px" src="view/image/blue.jpg"/></td>
                        <td>rekon54</td>

                        <td><img width="10px" src="view/image/orange.png"/></td>
                        <td>rekon129</td>

                        <td><img width="10px" src="view/image/pink.png"/></td>
                        <td>rekon101</td>

                        <td><img width="10px" src="view/image/yelow.png"/></td>
                        <td>DTR</td>

                    </tr>
                </table>
            </div>
            <?php
    
        ?>
 </center>
</body>



        </div>
      </div>



  <div class="latest">
  <div class="dashboard-heading">Pie Chart Irisan Dokumen</div>
  <div class="dashboard-content">


	</div>
        </div>
      </div>


    <div class="content">
  <div class="latest">
  <div class="dashboard-heading">Data BAST</div>
  <div class="dashboard-content">

      	 <form method="post" action="" name="form1" id="form1" >
	 <b>Masukan Nomor Bast atau Nama Pengembang</b><br><br>   
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
	$query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan c on d.idkategori=c.idkategori where nobast like '%$term%' or pengembangbast like '%$term%'");
}else

$query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan c on d.idkategori=c.idkategori");
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