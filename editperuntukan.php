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
    $( function() {
      $( "#tglsertifikat" ).datepicker();
      $( "#tglsk" ).datepicker();
    } );
  </script>
</head>
<body>
  <div id="container">
    <div id="header">
      <div class="div1">
        <div class="div2"><img src="view/image/logo.png" title="Administration" onclick="location = 'http://localhost/fasosfasum/'" /></div>
        <div class="div3"><img src="view/image/lock.png" alt="" style="position: relative; top: 3px;" />&nbsp;Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?>, you are logged in as <span>user</span></div>
      </div>


      <?php
      include("menu.php");
      ?>
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
                   <td>Masa Berlaku</td>
                   <td><input type="text" name="masaberlaku" maxlength="10" required="required" value="<?php echo $data['masaberlaku']; ?>"/></td>
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
                 <td>No.Sertifikat</td>
                 <td><input type="text" name="nosertifikat" maxlength="20" required="required" value="<?php echo $data['nosertifikat']; ?>"/></td>
               </tr>
               <tr>
                 <td>Tgl.Sertifikat</td>
                 <td><input type="text" name="tglsertifikat" maxlength="20" required="required" value="<?php echo $data['tglsertifikat']; ?>"/></td>
               </tr>
               <tr>
                 <td>Luas Sertifikat</td>
                 <td><input type="text" name="luassertifikat" maxlength="10" required="required" value="<?php echo $data['luassertifikat']; ?>"/></td>
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
           <td>No.SK</td>
             <td><input type="text" name="nosk" maxlength="20" required="required" value="<?php echo $data['nosk']; ?>"/></td>
           </tr>
           <tr>
             <td>Tgl.SK</td>
             <td><input type="text" name="tglsk" maxlength="20" required="required" value="<?php echo $data['tglsk']; ?>"/></td>
           </tr>
           <tr>
             <td>SKPD</td>
             <td><input type="text" name="skpd" maxlength="10" required="required" value="<?php echo $data['skpd']; ?>"/></td>
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