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
      <h1><img src="view/image/home.png" alt="" />Kategori Aset</h1>
    </div>

    <div class="content">
      <div class="overview">
        <div class="dashboard-heading">Tabel Kategori</div>
        <div class="dashboard-content">

         <table class="list" width="500" border="1" cellpadding="5" cellspacing="1">
           <p></p>
           
           <thead>
             <tr>
              <td class="center">No.</td>        	
              <td class="center">ID KATEGORI</td>
              <td class="center">DESKRIPSI KATEGORI</td>
              <td class="center">OPSI</td>
            </tr>
          </thead>
          
          <?php
          include "koneksi.php";
          $query = mysql_query("select * from kategoriaset");

          $no = 1;
          while ($data = mysql_fetch_array($query)) {
           ?>
           <tbody>
             <tr>
               <td class="center"><?php echo $no; ?></td>
               <td class="center"><?php echo $data['kategoriaset']; ?></td>
               <td class="center"><?php echo $data['deskripsikategori']; ?></td>
               <td class="center"><a href="#">Hapus</a></td></a></td>
             </tr>
           </tbody>
           <?php
           $no++;
         }
         ?>
       </table>

     </div>
   </div>


   
   <div class="statistic">
    <div class="dashboard-heading">Entry Kategori</div>
    <div class="dashboard-content">

     <form name="inputdokumenacuan" action="" method="post">

      <table>
        <tr>
        	<td>Id Kategori</td>           
          <td><input type="text" name="kategoriaset" maxlength="20" required="required"  /></td>
        </tr>

        <tr>
         <td>Deskripsi Kategori </td>
         <td><input type="text" name="deskripsikategori" maxlength="40" required="required" /></td>
       </tr>
       
       <tr>
        <td><input type="submit" name="submit" value="Simpan"/> </td>
      </tr>
      <tr>
        <td><a href="kategoriaset.php">refresh here</a></td>
      </tr>
    </table>
  </form> 
  <?php
  include "koneksi.php";
  if (isset($_POST['submit'])){

    $kategoriaset= $_POST['kategoriaset'];

    $deskripsikategori= $_POST['deskripsikategori'];

//simpan data ke database
    $query = mysql_query("insert into kategoriaset values('$kategoriaset', '$deskripsikategori')") or die(mysql_error());

    if ($query) {
     echo 'input kategori aset berhasil...........';

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