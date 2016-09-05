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
          <h1><img src="view/image/home.png" alt="" /> Marking BOT </h1>
        </div>

        <div class="content">
          <div class="latest">
            <div class="dashboard-heading">Data Peruntukan</div>
            <div class="dashboard-content">
             
             <?php 
             include "koneksi.php";
             $id = $_GET['id'];

             $query = mysql_query("select * from akun a inner join bast b on a.nobast=b.nobast inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dataaset s on a.idaset=s.idaset inner join peruntukan p on a.idperuntukan=p.idperuntukan inner join lokasidokumen l on a.nobast=l.nobastlokasi  where a.idperuntukan='$id'") or die(mysql_error());

             $data = mysql_fetch_array($query);
             ?>

             <form name="editdokumenacuan" action="" method="post">
               <input type="hidden" name="id" value="<?php echo $id; ?>" />
               <table>
                 
                <tr>
                 <td >Id Peruntukan </td>           
                 <td height="21"><input type="text" name="idperuntukan" maxlength="15" required="required" value="<?php echo $data['idperuntukan']; ?>"/></td>
               </tr>
               <tr>
                <td >Deskripsi Peruntukan </td>           
                <td height="21"><input type="text" name="deskripsi" maxlength="80" required="required" value="<?php echo $data['deskripsi']; ?>"/></td>
              </tr>
              <tr>
                <td>Volume</td>
                <td><input type="text" name="volume" maxlength="50" required="required" value="<?php echo $data['volume']; ?>"/></td>
              </tr>
              <tr>
               <td>Nilai</td>
               <td><input type="text" name="nilaimix" maxlength="50" required="required" value="<?php echo $data['nilaimix']; ?>"/></td>
             </tr>
             <td>Id Aset</td>
             <td><input type="text" name="idaset" maxlength="50" required="required" value="<?php echo $data['idaset']; ?>"/></td>
           </tr>
           <td>No. BAST</td>
           <td><input type="text" name="nobast" maxlength="100" required="required" value="<?php echo $data['nobast']; ?>"/></td>
         </tr>
         <tr>
           <td>BOT/BTO Pengguna</td>
           <td><input type="text" name="bot" maxlength="90" required="required" /></td>
         </tr>

         <tr>
           <td>Alamat Aset BOT/BTO </td>
           <td><input type="text" name="alamatbot" maxlength="200" required="required" /></td>
         </tr>

         <tr>
           <td>Luas Aset BOT/BTO </td>
           <td><input type="text" name="luasbot" maxlength="200" required="required" /></td>
         </tr>

         <tr>
           <td>Nilai Aset BOT/BTO</td>
           <td><input type="text" name="nilaibot" maxlength="200" required="required" /></td>
         </tr>

         <tr>
           <td>Keterangan</td>
           <td><input type="text" name="ketbot" maxlength="90" required="required" /></td>
         </tr>
         <tr>		
          <td align="right" colspan="2"><input type="submit" name="submit" value="Simpan BOT/BTO"> </td>
        </tr>

      </table>
    </form>
    <p><a href="markingbot.php">Kembali ke data peruntukan (klik disini)</a></p>
    <p><a href="ffbot.php">Fasos Fasum vs BOT/BTO (klik disini)</a></p>


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

  $idperuntukan= $_POST['idperuntukan'];
  $nobast= $_POST['nobast'];
  $idaset= $_POST['idaset'];
  $bot= $_POST['bot'];
  $alamatbot= $_POST['alamatbot'];
  $luasbot= $_POST['luasbot'];
  $keterangan= $_POST['ketbot'];
  $nilai= $_POST['nilaimix']; 			
  $nilaibot= $_POST['nilaibot'];


  $check = mysql_query("SELECT idperuntukan FROM bot WHERE idperuntukan = '$idperuntukan'") or die(mysql_error());
  $check2 = mysql_num_rows($check);

    					//if the name exists it gives an error
  if ($check2 != 0)
  {
    ?>
    <script type="text/javascript">
     alert("ID PERUNTUKAN No:  <?php echo $idperuntukan; ?> has already registered on BOT/BTO data.");
     history.back();
   </script>
   <?php

 }else

//update data ke database
 $query = mysql_query("insert into bot values ('$idperuntukan','$nobast','$idaset','$bot','$alamatbot','$luasbot','$keterangan','$nilai','$nilaibot','1')") or die(mysql_error());




 if ($query) {
   
   echo 'simpan BOT/BTO  berhasil...........';


   mysql_connect("localhost","root","");
   mysql_select_db("phplogin");
   $waktu = gmdate("Y-m-d H:i:s", time()+60*60*7);
   $user = $_SESSION['SESS_FIRST_NAME'];
   $query9 = mysql_query("insert into loging values('','$user','entry bot no : $id, ','$waktu')") or die(mysql_error());


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