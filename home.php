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
  <script type="text/javascript" src="view/javascript/jquery/tab.js"></script>
  <script type="text/javascript" src="view/javascript/jquery/menu/jquery.menu.js"></script>

  <script type="text/javascript" src="view/javascript/jquery/ui/external/jquery.bgiframe-2.1.2.js"></script>
  <!-- <script src="js/jquery.price_format.1.6.js" type="text/javascript"></script> -->

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
        include"menu.php";
      ?>
</div>
<div id="content">
  <div class="breadcrumb">
    <a href="home.php">Home</a>

  </div>
  <div class="box">
    <div class="heading">
      <h1><img src="view/image/home.png" alt="" /> Dashboard</h1>
    </div>
    


    <?php
    if(!isset($_REQUEST['submit2'])){
  //-----------------------------------------------------------------------
      ?>
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
              <td><a href="bastsippt.php"><?php echo $totalrowbastsippt; ?></a></td>
            </tr>

            <tr>
              <td>Total BAST NON SIPPT:</td>
              <td><a href="bastnonsippt.php"><?php echo $totalrowbastnonsippt; ?></a></td>
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


              <script type="text/javascript" src="sources/jscharts.js"></script>

              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">

              <!-- <script src="sources/bootstrap.min.js"></script></script> -->



            </head>


            <?php 

        //koneksi database
            include "koneksi.php";

        //query panggil data dtr

            $query = mysql_query("select * from lokasidokumen ");
            $record = mysql_fetch_array($query);

            $irisanpulomas= mysql_query("select * from lokasidokumen where dtr ='1' and pulomas='1'");
            $jmlirpm = mysql_num_rows($irisanpulomas);

            $irisan129= mysql_query("select * from lokasidokumen where dtr ='1' and rekon129='1' ");
            $jmlir129 = mysql_num_rows($irisan129);

            $irisan54= mysql_query("select * from lokasidokumen where dtr ='1' and rekon54='1' ");
            $jmlir54 = mysql_num_rows($irisan54);

            $irisan101= mysql_query("select * from lokasidokumen where dtr ='1' and rekon101='1'");
            $jmlir101 = mysql_num_rows($irisan101);

            $irisan163= mysql_query("select * from lokasidokumen where dtr ='1' and rekon163='1'");
            $jmlir163 = mysql_num_rows($irisan163);

            $irisan58= mysql_query("select * from lokasidokumen where dtr ='1' and lokasi58='1' ");
            $jmlir58 = mysql_num_rows($irisan58);

            $tanpairisan= mysql_query("select * from lokasidokumen where dtr ='1' && pulomas='0' && rekon129='0' && rekon54='0' && rekon101='0' && rekon163='0' && lokasi58='0'");
            $jmldtr = mysql_num_rows($tanpairisan);


            ?>

            <body>

              <div id="graph">Loading...</div>

              <script type="text/javascript">

               var myChart = new JSChart('graph', 'pie');
               myChart.setDataArray([['irisan pulomas',<?php echo $jmlirpm; ?>],['irisan 129', <?php echo $jmlir129; ?> ],['irisan 54', <?php echo $jmlir54; ?> ],['irisan 101',<?php echo $jmlir101; ?> ],['irisan 163', <?php echo $jmlir163; ?> ],['irisan lok.58', <?php echo $jmlir58; ?> ],['Tanpa Irisan', <?php echo $jmldtr; ?> ]]);
               myChart.colorize(['#8B008B','#FFFF00','#0000FA','#F8CC00','#F89900','#00FF00','#FF0000']);
               myChart.setSize(500, 208);
               myChart.setTitle('Pie Chart Lokasi DTR');
               myChart.setTitleFontFamily('Arial');
               myChart.setTitleFontSize(11);
               myChart.setTitleColor('#0F0F0F');
               myChart.setPieRadius(90);
               myChart.setPieValuesColor('#800000');
               myChart.setPieValuesFontSize(10);
               myChart.setPiePosition(150, 100);
               myChart.setShowXValues(true);
               myChart.setLegend('#8B008B', 'irisan pulomas');
               myChart.setLegend('#FFFF00', 'irisan 129');
               myChart.setLegend('#0000FA', 'irisan 54');
               myChart.setLegend('#F8CC00', 'irisan 101');
               myChart.setLegend('#F89900', 'irisan 163');
               myChart.setLegend('#00FF00', 'irisan lok.58');
               myChart.setLegend('#FF0000', 'Tanpa Irisan');
               myChart.setLegendShow(true);
               myChart.setLegendFontFamily('Arial');
               myChart.setLegendFontSize(9);
               myChart.setLegendPosition(350, 60);
               myChart.setPieAngle(40);
               myChart.set3D(true);
               myChart.draw();

             </script>



           </body>
           </html>

         </div>
       </div>
     </div>

     <div class="content">
      <div class="latest">
        <div class="dashboard-heading">Grafik BAST Wilayah</div>
        <div class="dashboard-content">



          <html>
          <head>

            <script type="text/javascript" src="JS/jquery.fusioncharts.js"></script>

          </head>
          <body>
           <center>
             <table id="myHTMLTable" border="0" align="center">

              <?php include "koneksi.php";
              $query = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara'");
              while ( $data = mysql_fetch_array($query)) {

                $hasil1= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."'");
                $totalrowbast = mysql_num_rows($hasil1);

                $hasil2= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%nur%'");
                $totalrowgubernur = mysql_num_rows($hasil2);


                $hasil3= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%wali%'");
                $totalrowwalikota = mysql_num_rows($hasil3);

                $hasil4= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%lengkap%' ");
                $totalrowbiro = mysql_num_rows($hasil4);

              };
              include "koneksi.php";
              $query2 = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan'");
              while ( $data2 = mysql_fetch_array($query2)) {

                $hasil12= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data2['wilayah']."'");
                $totalrowbast2 = mysql_num_rows($hasil12);

                $hasil22= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data2['wilayah']."' && keterangan like '%nur%'");
                $totalrowgubernur2 = mysql_num_rows($hasil22);


                $hasil32= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data2['wilayah']."' && keterangan like '%wali%'");
                $totalrowwalikota2 = mysql_num_rows($hasil32);

                $hasil42= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data2['wilayah']."' && keterangan like '%lengkap%' ");
                $totalrowbiro2 = mysql_num_rows($hasil42);

              }

              include "koneksi.php";
              $query3 = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat'");
              while ( $data3 = mysql_fetch_array($query3)) {

                $hasil13= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data3['wilayah']."'");
                $totalrowbast3 = mysql_num_rows($hasil13);

                $hasil23= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data3['wilayah']."' && keterangan like '%nur%'");
                $totalrowgubernur3 = mysql_num_rows($hasil23);


                $hasil33= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data3['wilayah']."' && keterangan like '%wali%'");
                $totalrowwalikota3 = mysql_num_rows($hasil33);

                $hasil43= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data3['wilayah']."' && keterangan like '%lengkap%' ");
                $totalrowbiro3 = mysql_num_rows($hasil43);

              };

              include "koneksi.php";
              $query4 = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat'");
              while ( $data4 = mysql_fetch_array($query4)) {

                $hasil14= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data4['wilayah']."'");
                $totalrowbast4 = mysql_num_rows($hasil14);

                $hasil24= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data4['wilayah']."' && keterangan like '%nur%'");
                $totalrowgubernur4 = mysql_num_rows($hasil24);


                $hasil34= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data4['wilayah']."' && keterangan like '%wali%'");
                $totalrowwalikota4 = mysql_num_rows($hasil34);

                $hasil44= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data4['wilayah']."' && keterangan like '%lengkap%' ");
                $totalrowbiro4 = mysql_num_rows($hasil44);

              };

              include "koneksi.php";
              $query5 = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur'");
              while ( $data5 = mysql_fetch_array($query5)) {

                $hasil15= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data5['wilayah']."'");
                $totalrowbast5 = mysql_num_rows($hasil15);

                $hasil25= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data5['wilayah']."' && keterangan like '%nur%'");
                $totalrowgubernur5 = mysql_num_rows($hasil25);


                $hasil35= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data5['wilayah']."' && keterangan like '%wali%'");
                $totalrowwalikota5 = mysql_num_rows($hasil35);

                $hasil45= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data5['wilayah']."' && keterangan like '%lengkap%' ");
                $totalrowbiro5 = mysql_num_rows($hasil45);

              };
              include "koneksi.php";
              $query6 = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah like '%seribu%'");
              while ( $data6 = mysql_fetch_array($query6)) {

                $hasil16= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data6['wilayah']."'");
                $totalrowbast6 = mysql_num_rows($hasil16);

                $hasil26= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data6['wilayah']."' && keterangan like '%nur%'");
                $totalrowgubernur6 = mysql_num_rows($hasil26);


                $hasil36= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data6['wilayah']."' && keterangan like '%wali%'");
                $totalrowwalikota6 = mysql_num_rows($hasil36);

                $hasil46= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data6['wilayah']."' && keterangan like '%lengkap%' ");
                $totalrowbiro6 = mysql_num_rows($hasil46);

              };
              ?>
              <tr style="display:none"> <th>Status</th> <th>Jakarta Utara</th><th>Jakarta Selatan</th><th>Jakarta Pusat</th><th>Jakarta Barat</th><th>Jakarta Timur</th><th>Kep.Seribu</th></tr>
              <tr style="display:none"> <td>Total BAST</td> <td><?php echo $totalrowbast; ?></td><td><?php echo $totalrowbast2; ?></td><td><?php echo $totalrowbast3; ?></td><td><?php echo $totalrowbast4; ?></td></td><td><?php echo $totalrowbast5; ?></td></td><td><?php echo $totalrowbast6; ?></td></tr> 
              <tr style="display:none"><td>BAST Gubernur</td> <td><?php echo $totalrowgubernur; ?></td><td><?php echo $totalrowgubernur2; ?></td><td><?php echo $totalrowgubernur3; ?></td><td><?php echo $totalrowgubernur4; ?></td><td><?php echo $totalrowgubernur5; ?></td><td><?php echo $totalrowgubernur6; ?></td></tr>
              <tr style="display:none"><td>BAST Walikota</td> <td><?php echo $totalrowwalikota; ?></td><td><?php echo $totalrowwalikota2; ?></td><td><?php echo $totalrowwalikota3; ?></td><td><?php echo $totalrowwalikota4; ?></td><td><?php echo $totalrowwalikota5; ?></td><td><?php echo $totalrowwalikota6; ?></td></tr>
              <tr style="display:none"> <td>BAST Biro</td> <td><?php echo $totalrowbiro; ?></td><td><?php echo $totalrowbiro2; ?></td><td><?php echo $totalrowbiro3; ?></td><td><?php echo $totalrowbiro4; ?></td><td><?php echo $totalrowbiro5; ?></td><td><?php echo $totalrowbiro6; ?></td></tr>

            </table>
            <script type="text/javascript">
             $('#myHTMLTable').convertToFusionCharts({
              swfPath: "Charts/",
              type: "MSColumn3D",
              data: "#myHTMLTable",
              dataFormat: "HTMLTable",
              width: "1100"
            });

           </script>
         </center>


       </div>
     </div>
   </div>
   <?php
 }
 ?>
</div>

</div>
</div>
<!--[if IE]>
<script type="text/javascript" src="view/javascript/jquery/flot/excanvas.js"></script>
<![endif]--> 

</div>
<div id="footer"><a href="http://www.dineshjay.co.id">dinesh consultant</a> &copy; 2009-2012 All Rights Reserved.<br />Version 1.0</div>
</body></html>