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
          <h1><img src="view/image/home.png" alt="" />Laporan Per Kecamatan</h1>
        </div>

        <div class="content">
          


          <div class="latest">
            <div class="dashboard-heading">Detail</div>
            <div class="dashboard-content">


              <?php

              mysql_connect("localhost","root","");
              mysql_select_db("bpkd2012");
              $nomor=1; 
              $query3 = mysql_query("select * from dataaset order by kecamatan asc") or die(mysql_error());
              while ($data3 = mysql_fetch_array($query3)){
               
                ?>

                <table>
                  <tr>
                    <td><?php echo $nomor; ?>.</td><td>Kecamatan</td><td>:</td><td><?php echo $data3['kecamatan']; ?></td>
                  </tr>
                  <tr>
                    <td></td><td>Kelurahan</td><td>:</td><td><?php echo $data3['kelurahan']; ?></td>
                  </tr>
                  <tr>
                    <td></td><td>Alamat</td><td>:</td><td><?php echo $data3['alamataset']; ?></td>
                  </tr>

                  <tr>

                    <table class="list" align="center" cellpadding="1" cellspacing="1">

                      <thead>
                        <tr bgcolor="yellow">
                         <td class="center">No.</td>        	
                         <td class="center">No BAST.</td>        	
                         <td class="center">Pengembang</td>
                         <td class="center">Peruntukan</td>
                         <td class="center">Jenis</td>
                         <td class="center">Luas.BAST(m2)</td>
                       </tr>
                     </thead>


                     <tbody>
                       
                      <?php
                      mysql_connect("localhost","root","");
                      mysql_select_db("bpkd2012");


                      $query = mysql_query("select * from peruntukan p inner join bast b on p.nobast=b.nobast where idaset='".$data3['idaset']."'") or die(mysql_error());
                      $no = 1;
                      while ($data = mysql_fetch_array($query)) {
                        ?>
                        

                        <tr>
                         <td class="center"><?php echo $no; ?></td>
                         <td class="left"><?php echo $data['nobast']; ?></td>
                         <td class="left"><?php echo $data['pengembangbast']; ?></td>
                         <td class="left"><?php echo $data['deskripsi']; ?></td>
                         <td class="center"><?php echo $data['jenis']; ?></td>
                         <td class="right"><?php echo $data['luas']; ?></td>
                         
                       </tr>
                       
                       <?php
                       $no++;
                     }

                     ?>
                   </tbody> 
                 </table>


               </tr>

               <?php
               $nomor++;
             }
             ?>


           </table>

         </body>



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