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

      <?php
        include("menu.php");
      ?>
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

         $hasilnonsippt= mysql_query("select idkategori from bast b inner join detaildokacuan d on b.nodokacuan = d.nodokacuan where idkategori !='1'");
         $totalrowbastnonsippt = mysql_num_rows($hasilnonsippt);	

         $hasilsippt= mysql_query("select idkategori from bast b inner join detaildokacuan d on b.nodokacuan = d.nodokacuan where idkategori ='1'");
         $totalrowbastsippt = mysql_num_rows($hasilsippt);	


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


         $hasil7= mysql_query("select * from bast where keterangan like '%nur%' or keterangan like '%Gub%'");
         $totalrowgubernur = mysql_num_rows($hasil7);

         $hasil8= mysql_query("select * from bast where keterangan like '%Wali%' or keterangan like '%kota%'");
         $totalrowwalikota = mysql_num_rows($hasil8);

         $hasil9= mysql_query("select * from bast where keterangan like '%lengkap%' or keterangan like '%Biro%'");
         $totalrowbiro = mysql_num_rows($hasil9);

         $hasil10= mysql_query("select * from bast where keterangan like '%Sek%' or keterangan like '%wilda%'");
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
            <td>Total BAST  SIPPT:</td>
            <td><?php echo $totalrowbastsippt; ?></td>
          </tr>

          <tr>
            <td>Total BAST NON SIPPT:</td>
            <td><?php echo $totalrowbastnonsippt; ?></td>
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

            </table>
          </div>
        </div>






        <div class="statistic">
          <div class="range">
          </div>

          <div class="dashboard-heading">Pie Chart Irisan Dokumen</div>
          <div class="dashboard-content">

          </div>
        </div>
      </div>

      <div class="content">
        <div class="latest">
          <div class="dashboard-heading">Grafik BAST Wilayah</div>
          <div class="dashboard-content">



          </div>
        </div>
      </div>


      <div class="content">
        <div class="latest">
          <div class="dashboard-heading">Data BAST</div>
          <div class="dashboard-content">

            <form method="post" action="" name="form1" id="form1" >
              <b>Masukan Nomor Bast atau Nama Pengembang atau Jenis Dok. Acuan</b><br><br>   
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
               $query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan c on d.idkategori=c.idkategori where nobast like '%$term%' or pengembangbast like '%$term%'  or jenisdokumen like '%$term%' or tglbast like  '%$term%' ");
             }else

             $query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan c on d.idkategori=c.idkategori order by nobast");
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
                   <td class="center"><a href="viewdetailbast.php?id=<?php echo $data['nobast']; ?>"><img alt=" " src="view/image/viewdetail.gif" border=0></a></td>

                   

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