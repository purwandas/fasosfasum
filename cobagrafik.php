
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
    <a href="index.php">Home</a>

  </div>
  <div class="box">
    <div class="heading">
      <h1><img src="view/image/home.png" alt="" /> Data SHM</h1>
    </div>

    <div class="content">
      


      <div class="statistic">

        <div class="dashboard-heading">Pencarian</div>
        <div class="dashboard-content">

         <body>
          <center>
            <h3>Jumlah Data Berdasarkan Lokasi Dokumen</h3>

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



            <div style="margin-top: 30px;margin-left:10px">
              <table align="center">
                <tr>
                  <td><img width="15px" src="view/image/red.jpg"/></td>
                  <td>Pulomas</td>
                  
                  <td><img width="15px" src="view/image/green.jpg"/></td>
                  <td>rekon163</td>
                  
                  <td><img width="15px" src="view/image/blue.jpg"/></td>
                  <td>rekon54</td>

                  <td><img width="15px" src="view/image/orange.png"/></td>
                  <td>rekon129</td>

                  <td><img width="15px" src="view/image/pink.png"/></td>
                  <td>rekon101</td>

                  <td><img width="15px" src="view/image/yelow.png"/></td>
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
  </div>

</div>
</div>
<!--[if IE]>
<script type="text/javascript" src="view/javascript/jquery/flot/excanvas.js"></script>
<![endif]--> 

</div>
<div id="footer"><a href="http://www.dineshjay.co.id">dinesh consultant</a> &copy; 2009-2012 All Rights Reserved.<br />Version 1.0</div>
</body></html>