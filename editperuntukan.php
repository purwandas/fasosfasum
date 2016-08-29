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
  <div class="breadcrumb">
    <a href="home.php">Home</a>

  </div>
  <div class="box">
    <div class="heading">
      <h1><img src="view/image/home.png" alt="" /> Edit Data Peruntukan</h1>
    </div>

    <div class="content">
      <div class="latest">
        <div class="dashboard-heading">Edit Data Peruntukan</div>
        <div class="dashboard-content">

         <?php 
         include "koneksi.php";
         $id = $_GET['idperuntukan'];

         $query = mysql_query("select * from peruntukan where idperuntukan='$id'") or die(mysql_error());

         $data = mysql_fetch_array($query);
         ?>

         <form name="editdokumenacuan" action="" method="post">
           <input type="hidden" name="id" value="<?php echo $id; ?>" />
           <table>

            <tr>
             <td >Id Peruntukan </td>           
             <td height="21"><input type="text" name="idperuntukan" maxlength="15" required="required" value="<?php echo $data['idperuntukan']; ?>" disabled /></td>
           </tr>
           <tr>
            <td >Deskripsi Peruntukan </td>           
            <td height="21"><input type="text" name="deskripsi" maxlength="80" required="required" value="<?php echo $data['deskripsi']; ?>"/></td>
          </tr>
          <tr>
           <td>Jenis Peruntukan</td>
           <td><select name="jenis">
             <option value="<?php echo $data['jenis']; ?>"><?php echo $data['jenis']; ?></option><option>Tanah</option><option>Non-Tanah</option></select></td> 
           </tr>

           <tr>
            <td>Volume </td>


            <td height="21"><input name="luas" type="text" id="luas" size="10" maxlenght="18" onkeypress="return isNumberKey(event)" required="required" value="<?php echo $data['luas']; ?>"/>
            </td>         
          </tr>
          <tr>
           <td>No.KRK</td>
           <td><input type="text" name="nokrk" maxlength="50" required="required" value="<?php echo $data['nokrk']; ?>"/></td>
         </tr>
         <tr>
           <td>No.IMB</td>
           <td><input type="text" name="noimb" maxlength="50" required="required" value="<?php echo $data['noimb']; ?>"/></td>
         </tr>
         <td>No.Blok Plan</td>
         <td><input type="text" name="noblokplan" maxlength="50" required="required" value="<?php echo $data['noblokplan']; ?>"/></td>
       </tr>
       <tr>
         <td>Sertifikasi</td>
         <td><select name="sertifikasi">
           <option value="<?php echo $data['sertifikasi']; ?>"><?php echo $data['sertifikasi']; ?></option><option>Sertifikat</option><option>Non-Sertifikat</option></select></td>
         </tr>
         <tr>
           <td>Pemilik</td>
           <td><input type="text" name="pemilik" maxlength="20" required="required" value="<?php echo $data['pemilik']; ?>"/></td>
         </tr>

         <tr>
           <td>Jenis Sertifikat</td>
           <td><select name="jenissertifikat">
             <option value="<?php echo $data['jenissertifikat']; ?>"><?php echo $data['jenissertifikat']; ?></option><option>DKI</option><option>SHM</option><option>HGB</option><option>Non-Sertifikat</option></select></td>
           </tr>
           <tr>
             <td>No.Sertifikat</td>
             <td><input type="text" name="nosertifikat" maxlength="20" required="required" value="<?php echo $data['nosertifikat']; ?>"/></td>
           </tr>
           <tr>
             <td>Masa Berlaku</td>
             <td><input type="text" name="masaberlaku" maxlength="10" required="required" value="<?php echo $data['masaberlaku']; ?>"/></td>
           </tr>
           <tr>
             <td>Luas Sertifikat</td>
             <td><input type="text" name="luassertifikat" maxlength="10" required="required" value="<?php echo $data['luassertifikat']; ?>"/></td>
           </tr>
           <tr>
             <td>Keterangan</td>
             <td><input type="text" name="keterangan" maxlength="40" required="required" value="<?php echo $data['keterangan']; ?>"/></td>
           </tr>

           <tr>
             <td>Status Sertifikat</td>
             <td>
               <select name="statussertifikat">
                <option value="<?php echo $data['statussertifikat']; ?>">-<?php echo $data['statussertifikat']; ?></option>
                <?php
                $query=mysql_query("select display from ref_statussertifikat");
                while ($dss=mysql_fetch_array($query)) {
                 echo"
                 <option value='$dss[display]'>
                   $dss[display]
                 </option>
                 ";
               }
               ?>
             </select>
           </td>
         </tr>
         <tr>
           <td>Status Plang</td>
           <td>
               <select name="statusplang">
                <option value="<?php echo $data['statusplang']; ?>">-<?php echo $data['statusplang']; ?></option>
                <?php
                $query=mysql_query("select display from ref_statusplangaset");
                while ($dss=mysql_fetch_array($query)) {
                 echo"
                 <option value='$dss[display]'>
                   $dss[display]
                 </option>
                 ";
               }
               ?>
             </select>
           </td>
         </tr>
         <tr>
           <td>Status Penggunaan</td>
           <td>
               <select name="statuspenggunaan">
                <option value="<?php echo $data['statuspenggunaan']; ?>">-<?php echo $data['statuspenggunaan']; ?></option>
                <?php
                $query=mysql_query("select display from ref_statuspenggunaanfasosfasum");
                while ($dss=mysql_fetch_array($query)) {
                 echo"
                 <option value='$dss[display]'>
                   $dss[display]
                 </option>
                 ";
               }
               ?>
             </select>
           </td>
         </tr>
         <tr>
           <td>Sensus Fasos</td>
           <td>
               <select name="sensusfasos">
                <option value="<?php echo $data['sensusfasos']; ?>">-<?php echo $data['sensusfasos']; ?></option>
                <?php
                $query=mysql_query("select display from ref_sensusfasosfasum");
                while ($dss=mysql_fetch_array($query)) {
                 echo"
                 <option value='$dss[display]'>
                   $dss[display]
                 </option>
                 ";
               }
               ?>
             </select>
           </td>
         </tr>
         <!-- <tr>
           <td>No. Dok. Acuan</td>
           <td><input type="text" name="nodokacuan" maxlength="40" required="required" value="<?php echo $data['nodokacuan']; ?>"/></td>
         </tr> -->

         <tr>		
          <td align="right" colspan="2"><input type="submit" name="submit" value="Simpan Perubahan"> </td>
        </tr>

      </table>
    </form>
    <p><a href="viewdetailbast.php?id=<?php echo $data['nobast']; ?>">Kembali ke detail dokumen BAST (klik disini)</a></p>


  </div>
</div>



<SCRIPT language=Javascript>
  <!--
  function isNumberKey(evt)
  {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

      return false;
    return true;
  }
//-->
</SCRIPT>


<?php
include "koneksi.php";
if (isset($_POST['submit'])){


  $deskripsi= $_POST['deskripsi'];
  $jenis= $_POST['jenis'];
  $luas= $_POST['luas'];
  $nokrk= $_POST['nokrk'];

  $noimb= $_POST['noimb'];
  $noblokplan= $_POST['noblokplan'];
  $sertifikasi= $_POST['sertifikasi'];
  $pemilik= $_POST['pemilik'];
  $jenissertifikat= $_POST['jenissertifikat'];
  $nosertifikat= $_POST['nosertifikat'];
  $masaberlaku= $_POST['masaberlaku'];
  $luassertifikat= $_POST['luassertifikat'];
  $keterangan= $_POST['keterangan'];
  $statussertifikat=$_POST['statussertifikat'];
  $statuspenggunaan=$_POST['statuspenggunaan'];
  $statusplang=$_POST['statusplang'];
  $sensusfasos=$_POST['sensusfasos'];



//update data ke database
  $query = mysql_query("update peruntukan set  deskripsi='$deskripsi',jenis='$jenis',luas='$luas',nokrk='$nokrk',deskripsi='$deskripsi',jenis='$jenis',luas='$luas',nokrk='$nokrk',noimb='$noimb',noblokplan='$noblokplan',sertifikasi='$sertifikasi',pemilik='$pemilik',jenissertifikat='$jenissertifikat',nosertifikat='$nosertifikat',masaberlaku='$masaberlaku',luassertifikat='$luassertifikat',keterangan='$keterangan',statussertifikat='$statussertifikat', statuspenggunaan='$statuspenggunaan', statusplang='$statusplang', sensusfasos='$sensusfasos' where idperuntukan='$id'") or die(mysql_error());



  mysql_connect("localhost","root","");
  mysql_select_db("phplogin");
  $waktu = gmdate("Y-m-d H:i:s", time()+60*60*7);
  $user = $_SESSION['SESS_FIRST_NAME'];
  $query9 = mysql_query("insert into loging values('','$user','edit Peruntukan no : $id, ','$waktu')") or die(mysql_error());



  if ($query) {

   echo 'simpan perbahan data peruntukan berhasil...........';

 }
}
?>

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