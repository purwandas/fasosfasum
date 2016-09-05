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
      <h1><img src="view/image/home.png" alt="" /> BAST Walikota</h1>
    </div>


    <div class="content">

      <P align=right><span>

        <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
        <a target="_blank" href="excelbastwali.php">
          Bast Walikota

          <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
          <a target="_blank" href="excelbastwali129.php">
            Kel.129

            <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
            <a target="_blank" href="excelbastwali54.php">
              Kel.54

              <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
              <a target="_blank" href="excelbastwali163.php">
                Kel.163

                <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
                <a target="_blank" href="excelbastwali101.php">
                  Kel.101

                  <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
                  <a target="_blank" href="excelbastwali2009.php">
                    Kel.2009

                    <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
                    <a target="_blank" href="excelbastwali2010.php">
                      Kel.2010

                      <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
                      <a target="_blank" href="excelbastwalimutasi.php">
                        Kel.Mutasi 2011

                        <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
                        <a target="_blank" href="excelbastwalitambah.php">
                          Kel.140 Penambah





                        </a></span></P>

                        
                        


                        <div class="latest">
                          <div class="dashboard-heading">Data BAST Walikota</div>
                          <div class="dashboard-content">

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


                              include "koneksi.php";

                              $query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan c on d.idkategori=c.idkategori where keterangan like '%wali%'");

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
                                   <td class="left"><?php echo $data['nodokacuan']; ?></td>
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