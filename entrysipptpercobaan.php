
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
      <li id="dashboard"><a href="#" class="top">Dashboard</a></li>
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
          <li><a class="parent">Laporan BAST</a>
            <ul>
              <li><a href="#">Data BAST</a></li>
              <li><a href="#">Data Lokasi Aset</a></li>
              <li><a href="#">Data Kewajiban</a></li>

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
        <a href="index.php">Home</a>

      </div>
              <div class="box">
    <div class="heading">
      <h1><img src="view/image/home.png" alt="" /> Dokumen Acuan SIPPT</h1>
    </div>

    <div class="content">
      <div class="overview">
        <div class="dashboard-heading">Input Data SIPPT</div>
        <div class="dashboard-content">
 
        <form name="inputdetaildokumenacuan" action="" method="post">

         <table>
 
		<tr><td>Pilih Jenis Dokumen Acuan</td>
		<td>	
          	<select name="jenisdokacuan">
          	<option value=0 selected>- Pilih Jenis -</option>
          	<?php
                 include "koneksi.php";
                 // query untuk menampilkan kecamatan
                 $query = "SELECT * FROM dokumenacuan";
                 $hasil = mysql_query($query);
                 while ($data = mysql_fetch_array($hasil))
                 {
                    echo "<option value='".$data['idkategori']."'>".$data['jenisdokumen']."</option>";
                 }
          	?>
          	</select>
      		</td>
		</tr>
                
                <tr>
        	<td >No.Dokumen </td>           
                <td height="21"><input type="text" name="nodokacuan" maxlength="20" required="required"/ /></td>
                </tr>

                <tr>
   	        <td>Tgl. Dokumen </td>
                <td height="21"><input type="text" id="tgldokacuan" name="tgldokacuan" maxlength="10" required="required"/>
                </td>         
                </tr>
                <tr>
 		<link type="text/css" rel="stylesheet" href="jquery-ui-1.7.3.custom.css" />
		<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="jquery.ui.datepicker.js"></script>
		<script type="text/javascript" src="jquery.ui.core.js"></script>
		<script type="text/javascript" src="tanggaldokacuan.js"></script>
                <tr>
              	<td>Pemegang Dokumen </td>
                <td><input type="text" name="pemegangdokacuan" maxlength="40" required="required" /></td>
                </tr>

                <tr>
                <td>Perihal</td>
                <td><textarea name=haldokacuan rows=1 cols=30 required="required" /> </textarea></td> 
                </tr> 


                <tr>
                <td>Keterangan</td>
                <td><textarea name=ketdokacuan rows=1 cols=30 required="required" /> </textarea></td> 
                </tr>  
                <tr>
                <td align="right" colspan="2"><input type="submit" name="submit" value="Simpan"/> </td>
                </tr>

          </table>
          </form>

        </div>
      </div>

<?php
include "koneksi.php";
if (isset($_POST['submit'])){

$nodokacuan = $_POST['nodokacuan'];
$tgldokacuan= $_POST['tgldokacuan'];
$haldokacuan= $_POST['haldokacuan'];
$pemegangdokacuan= $_POST['pemegangdokacuan'];
$ketdokacuan= $_POST['ketdokacuan'];
$idkategori= $_POST['jenisdokacuan'];

  			$check = mysql_query("SELECT nodokacuan FROM detaildokacuan WHERE nodokacuan = '$nodokacuan'") or die(mysql_error());
    			$check2 = mysql_num_rows($check);

    			//if the name exists it gives an error
    			if ($check2 != 0)
    			{
			?>
 			<script type="text/javascript">
 			alert("Dokumen Acuan No:  <?php echo $nodokacuan; ?> has already registered. use has already available item ");
  			history.back();
 			</script>
			<?php

			}else


//simpan data ke database
$query = mysql_query("insert into detaildokacuan values('$nodokacuan', '$tgldokacuan', '$haldokacuan', '$pemegangdokacuan', '$ketdokacuan', '$idkategori')") or die(mysql_error());

if ($query) {
	echo 'input jenis dokumen berhasil...........';

}
}
?>






 <div class="latest">
        <div class="dashboard-heading">Data SIPPT</div>
        <div class="dashboard-content">

      	 <form method="post" action="" name="form1" id="form1" >
	 <b>Masukan No.Dokumen atau Nama Pengembang :</b><br><br>   
	 <b>Kata Pencarian  </b> <input type="text" name="term" />    <input type="submit" name="submit10" value="Cari"/><br/>
	 </form><br>

          <table class="list" cellpadding="5" cellspacing="5">
            <thead>
              <tr>
                <td class="center">No</td>
                <td class="center">No.Dokumen</td>
                <td class="center">Tgl.Dokumen</td>
                <td class="center">Pemegang Dokumen</td>
                <td class="center">Perihal</td>
		<td class="center">Keterangan</td>
                <td class="center">Action</td>
              </tr>
            </thead>


            <tbody>
<?php
if(isset($_REQUEST['submit10'])) {

	include "koneksi.php";
	$term = $_POST['term']; 
	 
	$query = mysql_query("select distinct * from detaildokacuan dd inner join bast b on dd.nodokacuan=b.nodokacuan inner join dataaset a on b.nobast=a.nobastaset where wilayah like '%$term%' or nodokacuan like '%$term%'");
}else

$query = mysql_query("select * from detaildokacuan");
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>

    	<tr>

                <td class="center"><?php echo $no; ?></td>     
                <td class="left"><?php echo $data['nodokacuan']; ?></td>        	
                <td class="center"><?php echo $data['tgldokacuan']; ?></td>
                <td class="left"><?php echo $data['pemegangdokacuan']; ?></td>
                <td class="center"><?php echo $data['haldokacuan']; ?></td>
                <td class="center"><?php echo $data['ketdokacuan']; ?></td>
 
		<td class="center"><a href="editsippt.php?nodokacuan=<?php echo $data['nodokacuan']; ?>">Edit</a></td>
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
</div>
<!--[if IE]>
<script type="text/javascript" src="view/javascript/jquery/flot/excanvas.js"></script>
<![endif]--> 

</div>
<div id="footer"><a href="http://www.dineshjay.co.id">dinesh consultant</a> &copy; 2009-2012 All Rights Reserved.<br />Version 1.0</div>
</body></html>