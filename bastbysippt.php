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
          <h1><img src="view/image/home.png" alt="" />Detail Dokumen</h1>
        </div>
        <div class="content">

         <?php 
         include "koneksi.php";
         $id = $_GET['id'];
         $query = mysql_query("select * from detaildokacuan dd inner join dokumenacuan da on dd.idkategori=da.idkategori where nodokacuan='$id'") or die(mysql_error());
         $data = mysql_fetch_array($query);
         ?>

         <div class="overview">
          <div class="dashboard-heading">Detail Acuan</div>
          <div class="dashboard-content">
            <table>
              <tr>
                <td>Kode Dokumen Acuan </td><td>: </td><td><?php echo $data['idkategori']; ?></td><td>
              </tr>
              <tr>
                <td>Jenis Dokumen </td><td>:</td><td><?php echo $data['jenisdokumen']; ?></td>
              </tr>
              <tr>
                <td>No.Dok Acuan </td><td>: </td><td><?php echo $data['nodokacuan']; ?></td>
              </tr>
              <tr>
                <td>Tgl.Dok Acuan </td><td>: </td><td><?php echo $data['tgldokacuan']; ?></td>
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
          <div class="dashboard-heading">Detail BAST</div>
          <div class="dashboard-content">

           <tr>
            <table class="list" cellpadding="5" cellspacing="5">
              
              <thead>
                <tr>
                  <td class="center">No.</td>  
                  <td class="center">No.BAST</td>        	
                  <td class="center">Tgl.BAST</td>
                  <td class="center">Pengembang</td>
                  <td class="center">Perihal</td>
                  <td class="center">Kategori</td>
                  <td class="center">Kode Arsip</td>
                  <td class="center">No.Dok Acuan</td>
                  <td class="center">Action</td>
                  
                  
                </tr>
              </thead>


              
              
              <?php 
              include "koneksi.php";
              $id = $_GET['id'];
              $query2 = mysql_query("select * from bast where nodokacuan='".$data['nodokacuan']."'") or die(mysql_error());
              
              $no = 1;
              while ($data2 = mysql_fetch_array($query2)){
               ?>
               
               <tbody>
                 <tr>
                   <td class="center"><?php echo $no; ?></td>
                   <td class="left"><?php echo $data2['nobast']; ?></td>
                   <td class="center"><?php echo $data2['tglbast']; ?></td>
                   <td class="right"><?php echo $data2['pengembangbast']; ?></td>
                   <td class="center"><?php echo $data2['perihalbast']; ?></td>
                   <td class="left"><?php echo $data2['keterangan']; ?></td>
                   <td class="left"><?php echo $data2['kodearsip']; ?></td>
                   <td class="left"><?php echo $data2['nodokacuan']; ?></td>
                   <td class="center"><a href="viewdetailbast.php?id=<?php echo $data2['nobast']; ?>">view</a></td>
                   
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