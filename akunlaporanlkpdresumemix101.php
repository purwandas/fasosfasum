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
  <script src="jquery.formatCurrency-1.3.0.min" type="text/javascript"></script>
  <script type="text/javascript" src="view/javascript/jquery/superfish/js/superfish.js"></script>
  <script type="text/javascript"></script>

  <script type="text/javascript" src="jquery.price_format.1.6.js"></script>



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
          <h1><img src="view/image/home.png" alt="" />Resumme  Penilaian LKPD Kombinasi (101)</h1>
          <P align=right><span>
           <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
           <a target="_blank" href="excelresumelkpd.php">
             Resume LKPD
           </a></span>

         </div>

         <div class="content">

          <div class="overview">
            <div class="dashboard-heading">Resume Penilaian Kombinasi Per-KIB (101) Jakarta Pusat</div>
            <div class="dashboard-content">
              <?php
              include "koneksi.php";


              $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Pusat' && kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlA) or die (mysql_error());
              $tA = mysql_fetch_array($result);

              $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Pusat' && kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlB) or die (mysql_error());
              $tB = mysql_fetch_array($result);

              $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Pusat' && kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlC) or die (mysql_error());
              $tC = mysql_fetch_array($result);

              $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Pusat' && kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlD) or die (mysql_error());
              $tD = mysql_fetch_array($result);

              $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Pusat' && kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlE) or die (mysql_error());
              $tE = mysql_fetch_array($result);


              $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where wilayah ='Jakarta Pusat' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");



              $totalrowlkpd129 = mysql_num_rows($hasil);



              $KIBA= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Pusat' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB A' ");

              $totalrowlKIBA = mysql_num_rows($KIBA);

              $KIBB= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Pusat' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB B' ");

              $totalrowlKIBB = mysql_num_rows($KIBB);

              $KIBC= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Pusat' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB C' ");

              $totalrowlKIBC = mysql_num_rows($KIBC);

              $KIBD= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Pusat' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB D' ");

              $totalrowlKIBD = mysql_num_rows($KIBD);

              $KIBE= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Pusat' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB E' ");

              $totalrowlKIBE = mysql_num_rows($KIBE);

              ?>

              <table>
                <tr>
                  <td>Jumlah Nilai KIB A:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Amix.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                </tr>

                <tr>
                  <td>Jumlah Nilai KIB B:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Bmix.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB C:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Cmix.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB D:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Dmix.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB E:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Emix.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                </tr>


                <tr>
                  <td>Total Nilai :</td>
                  <td> <a target="_blank" href="excel129.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                </tr>




                <tr>
                  <td><br>Jumlah BAST:</td>
                  <td><br> <?php echo $totalrowlkpd129;  ?></td>
                </tr>
                <tr>
                  <td><br>Jumlah KIB A:</td>
                  <td><br> <?php echo $totalrowlKIBA;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB B:</td>
                  <td><?php echo $totalrowlKIBB;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB C:</td>
                  <td> <?php echo $totalrowlKIBC;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB D:</td>
                  <td> <?php echo $totalrowlKIBD;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB E:</td>
                  <td><?php echo $totalrowlKIBE;  ?></td>
                </tr>

              </table>



            </div>
          </div>



          <div class="overview">
            <div class="dashboard-heading">Resume Penilaian Kombinasi Per-KIB (101) Jakarta Utara</div>
            <div class="dashboard-content">
              <?php
              include "koneksi.php";


              $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Utara' && kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlA) or die (mysql_error());
              $tA = mysql_fetch_array($result);

              $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Utara' && kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlB) or die (mysql_error());
              $tB = mysql_fetch_array($result);

              $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Utara' && kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlC) or die (mysql_error());
              $tC = mysql_fetch_array($result);

              $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Utara' && kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlD) or die (mysql_error());
              $tD = mysql_fetch_array($result);

              $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&    wilayah ='Jakarta Utara' && kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlE) or die (mysql_error());
              $tE = mysql_fetch_array($result);


              $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where wilayah ='Jakarta Utara' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");



              $totalrowlkpd129 = mysql_num_rows($hasil);



              $KIBA= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Utara' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB A' ");

              $totalrowlKIBA = mysql_num_rows($KIBA);

              $KIBB= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where  (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Utara' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB B' ");

              $totalrowlKIBB = mysql_num_rows($KIBB);

              $KIBC= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where  (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Utara' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB C' ");

              $totalrowlKIBC = mysql_num_rows($KIBC);

              $KIBD= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where  (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Utara' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB D' ");

              $totalrowlKIBD = mysql_num_rows($KIBD);

              $KIBE= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where  (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Utara' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB E' ");

              $totalrowlKIBE = mysql_num_rows($KIBE);

              ?>

              <table>
                <tr>
                  <td>Jumlah Nilai KIB A:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Amix.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                </tr>

                <tr>
                  <td>Jumlah Nilai KIB B:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Bmix.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB C:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Cmix.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB D:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Dmix.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB E:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Emix.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                </tr>


                <tr>
                  <td>Total Nilai :</td>
                  <td> <a target="_blank" href="excel129.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                </tr>




                <tr>
                  <td><br>Jumlah BAST:</td>
                  <td><br> <?php echo $totalrowlkpd129;  ?></td>
                </tr>
                <tr>
                  <td><br>Jumlah KIB A:</td>
                  <td><br> <?php echo $totalrowlKIBA;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB B:</td>
                  <td><?php echo $totalrowlKIBB;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB C:</td>
                  <td> <?php echo $totalrowlKIBC;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB D:</td>
                  <td> <?php echo $totalrowlKIBD;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB E:</td>
                  <td><?php echo $totalrowlKIBE;  ?></td>
                </tr>

              </table>



            </div>
          </div>




          <div class="overview">
            <div class="dashboard-heading">Resume Penilaian Kombinasi Per-KIB (101) Jakarta Barat</div>
            <div class="dashboard-content">
              <?php
              include "koneksi.php";


              $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where   (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Barat' && kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlA) or die (mysql_error());
              $tA = mysql_fetch_array($result);

              $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Barat' && kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlB) or die (mysql_error());
              $tB = mysql_fetch_array($result);

              $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Barat' && kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlC) or die (mysql_error());
              $tC = mysql_fetch_array($result);

              $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Barat' && kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlD) or die (mysql_error());
              $tD = mysql_fetch_array($result);

              $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Barat' && kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlE) or die (mysql_error());
              $tE = mysql_fetch_array($result);


              $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where wilayah ='Jakarta Barat' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");



              $totalrowlkpd129 = mysql_num_rows($hasil);



              $KIBA= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Barat' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB A' ");

              $totalrowlKIBA = mysql_num_rows($KIBA);

              $KIBB= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Barat' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB B' ");

              $totalrowlKIBB = mysql_num_rows($KIBB);

              $KIBC= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Barat' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB C' ");

              $totalrowlKIBC = mysql_num_rows($KIBC);

              $KIBD= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Barat' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB D' ");

              $totalrowlKIBD = mysql_num_rows($KIBD);

              $KIBE= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Barat' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB E' ");

              $totalrowlKIBE = mysql_num_rows($KIBE);

              ?>

              <table>
                <tr>
                  <td>Jumlah Nilai KIB A:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Amix.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                </tr>

                <tr>
                  <td>Jumlah Nilai KIB B:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Bmix.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB C:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Cmix.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB D:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Dmix.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB E:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Emix.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                </tr>


                <tr>
                  <td>Total Nilai :</td>
                  <td> <a target="_blank" href="excel129.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                </tr>




                <tr>
                  <td><br>Jumlah BAST:</td>
                  <td><br> <?php echo $totalrowlkpd129;  ?></td>
                </tr>
                <tr>
                  <td><br>Jumlah KIB A:</td>
                  <td><br> <?php echo $totalrowlKIBA;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB B:</td>
                  <td><?php echo $totalrowlKIBB;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB C:</td>
                  <td> <?php echo $totalrowlKIBC;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB D:</td>
                  <td> <?php echo $totalrowlKIBD;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB E:</td>
                  <td><?php echo $totalrowlKIBE;  ?></td>
                </tr>

              </table>



            </div>
          </div>

          <div class="overview">
            <div class="dashboard-heading">Resume Penilaian Kombinasi Per-KIB (101) Jakarta Selatan</div>
            <div class="dashboard-content">
              <?php
              include "koneksi.php";


              $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Selatan' && kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlA) or die (mysql_error());
              $tA = mysql_fetch_array($result);

              $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Selatan' && kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlB) or die (mysql_error());
              $tB = mysql_fetch_array($result);

              $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Selatan' && kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlC) or die (mysql_error());
              $tC = mysql_fetch_array($result);

              $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&   wilayah ='Jakarta Selatan' && kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlD) or die (mysql_error());
              $tD = mysql_fetch_array($result);

              $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&   wilayah ='Jakarta Selatan' && kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlE) or die (mysql_error());
              $tE = mysql_fetch_array($result);


              $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where wilayah ='Jakarta Selatan' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");



              $totalrowlkpd129 = mysql_num_rows($hasil);



              $KIBA= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Jakarta Selatan' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB A' ");

              $totalrowlKIBA = mysql_num_rows($KIBA);

              $KIBB= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Selatan' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB B' ");

              $totalrowlKIBB = mysql_num_rows($KIBB);

              $KIBC= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Selatan' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB C' ");

              $totalrowlKIBC = mysql_num_rows($KIBC);

              $KIBD= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Selatan' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB D' ");

              $totalrowlKIBD = mysql_num_rows($KIBD);

              $KIBE= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Selatan' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB E' ");

              $totalrowlKIBE = mysql_num_rows($KIBE);

              ?>

              <table>
                <tr>
                  <td>Jumlah Nilai KIB A:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Amix.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                </tr>

                <tr>
                  <td>Jumlah Nilai KIB B:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Bmix.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB C:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Cmix.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB D:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Dmix.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB E:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Emix.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                </tr>


                <tr>
                  <td>Total Nilai :</td>
                  <td> <a target="_blank" href="excel129.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                </tr>




                <tr>
                  <td><br>Jumlah BAST:</td>
                  <td><br> <?php echo $totalrowlkpd129;  ?></td>
                </tr>
                <tr>
                  <td><br>Jumlah KIB A:</td>
                  <td><br> <?php echo $totalrowlKIBA;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB B:</td>
                  <td><?php echo $totalrowlKIBB;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB C:</td>
                  <td> <?php echo $totalrowlKIBC;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB D:</td>
                  <td> <?php echo $totalrowlKIBD;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB E:</td>
                  <td><?php echo $totalrowlKIBE;  ?></td>
                </tr>

              </table>



            </div>
          </div>



          <div class="overview">
            <div class="dashboard-heading">Resume Penilaian Kombinasi Per-KIB (101) Jakarta Timur</div>
            <div class="dashboard-content">
              <?php
              include "koneksi.php";


              $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Timur' && kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlA) or die (mysql_error());
              $tA = mysql_fetch_array($result);

              $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Timur' && kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlB) or die (mysql_error());
              $tB = mysql_fetch_array($result);

              $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Timur' && kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlC) or die (mysql_error());
              $tC = mysql_fetch_array($result);

              $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Timur' && kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlD) or die (mysql_error());
              $tD = mysql_fetch_array($result);

              $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Timur' && kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlE) or die (mysql_error());
              $tE = mysql_fetch_array($result);


              $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where wilayah ='Jakarta Timur' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");



              $totalrowlkpd129 = mysql_num_rows($hasil);



              $KIBA= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Timur' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB A' ");

              $totalrowlKIBA = mysql_num_rows($KIBA);

              $KIBB= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Timur' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB B' ");

              $totalrowlKIBB = mysql_num_rows($KIBB);

              $KIBC= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Timur' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB C' ");

              $totalrowlKIBC = mysql_num_rows($KIBC);

              $KIBD= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Timur' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB D' ");

              $totalrowlKIBD = mysql_num_rows($KIBD);

              $KIBE= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Jakarta Timur' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB E' ");

              $totalrowlKIBE = mysql_num_rows($KIBE);

              ?>

              <table>
                <tr>
                  <td>Jumlah Nilai KIB A:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Amix.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                </tr>

                <tr>
                  <td>Jumlah Nilai KIB B:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Bmix.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB C:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Cmix.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB D:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Dmix.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB E:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Emix.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                </tr>


                <tr>
                  <td>Total Nilai :</td>
                  <td> <a target="_blank" href="excel129.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                </tr>




                <tr>
                  <td><br>Jumlah BAST:</td>
                  <td><br> <?php echo $totalrowlkpd129;  ?></td>
                </tr>
                <tr>
                  <td><br>Jumlah KIB A:</td>
                  <td><br> <?php echo $totalrowlKIBA;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB B:</td>
                  <td><?php echo $totalrowlKIBB;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB C:</td>
                  <td> <?php echo $totalrowlKIBC;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB D:</td>
                  <td> <?php echo $totalrowlKIBD;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB E:</td>
                  <td><?php echo $totalrowlKIBE;  ?></td>
                </tr>

              </table>



            </div>
          </div>

          <div class="overview">
            <div class="dashboard-heading">Resume Penilaian Kombinasi Per-KIB (101) Kepulauan Seribu</div>
            <div class="dashboard-content">
              <?php
              include "koneksi.php";


              $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Kepulauan Seribu' && kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlA) or die (mysql_error());
              $tA = mysql_fetch_array($result);

              $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Kepulauan Seribu' && kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlB) or die (mysql_error());
              $tB = mysql_fetch_array($result);

              $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Kepulauan Seribu' && kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlC) or die (mysql_error());
              $tC = mysql_fetch_array($result);

              $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where  (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Kepulauan Seribu' && kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlD) or die (mysql_error());
              $tD = mysql_fetch_array($result);

              $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast  where (a.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && a.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) &&  wilayah ='Kepulauan Seribu' && kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlE) or die (mysql_error());
              $tE = mysql_fetch_array($result);


              $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where wilayah ='Kepulauan Seribu' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");



              $totalrowlkpd129 = mysql_num_rows($hasil);



              $KIBA= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Kepulauan Seribu' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB A' ");

              $totalrowlKIBA = mysql_num_rows($KIBA);

              $KIBB= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Kepulauan Seribu' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB B' ");

              $totalrowlKIBB = mysql_num_rows($KIBB);

              $KIBC= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Kepulauan Seribu' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB C' ");

              $totalrowlKIBC = mysql_num_rows($KIBC);

              $KIBD= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Kepulauan Seribu' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB D' ");

              $totalrowlKIBD = mysql_num_rows($KIBD);

              $KIBE= mysql_query("select * from bast b inner join akun d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi  inner join (select distinct nobastaset, wilayah from dataaset)m on m.nobastaset=b.nobast where (d.idperuntukan NOT IN (SELECT idperuntukan FROM skpd) && d.idperuntukan NOT IN (SELECT idperuntukan FROM bot)) && wilayah ='Kepulauan Seribu' &&    ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) && d.kategoriaset='KIB E' ");

              $totalrowlKIBE = mysql_num_rows($KIBE);

              ?>

              <table>
                <tr>
                  <td>Jumlah Nilai KIB A:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Amix.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                </tr>

                <tr>
                  <td>Jumlah Nilai KIB B:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Bmix.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB C:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Cmix.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB D:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Dmix.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai KIB E:</td>
                  <td> <a target="_blank" href="pdflaporanakun129Emix.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                </tr>


                <tr>
                  <td>Total Nilai :</td>
                  <td> <a target="_blank" href="excel129.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                </tr>




                <tr>
                  <td><br>Jumlah BAST:</td>
                  <td><br> <?php echo $totalrowlkpd129;  ?></td>
                </tr>
                <tr>
                  <td><br>Jumlah KIB A:</td>
                  <td><br> <?php echo $totalrowlKIBA;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB B:</td>
                  <td><?php echo $totalrowlKIBB;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB C:</td>
                  <td> <?php echo $totalrowlKIBC;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB D:</td>
                  <td> <?php echo $totalrowlKIBD;  ?></td>
                </tr>
                <tr>
                  <td>Jumlah KIB E:</td>
                  <td><?php echo $totalrowlKIBE;  ?></td>
                </tr>

              </table>



            </div>
          </div>


          <div class="overview">
            <div class="dashboard-heading">Resume Jumlah BAST Kombinasi (101)</div>
            <div class="dashboard-content">

              <?php
              include "koneksi.php";
              $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi where  (bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')");


              $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi where  (bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')");


              $totalrowlkpd129 = mysql_num_rows($hasil);
              

              $hasilsippt= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='1' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalsippt = mysql_num_rows($hasilsippt);


              $hasilnonsippt= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori !='1' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalnonsippt = mysql_num_rows($hasilnonsippt);


              $hasilsipptgub= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='1' && b.keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalsipptgub = mysql_num_rows($hasilsipptgub);


              $hasilsipptwali= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='1' && b.keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalsipptwali = mysql_num_rows($hasilsipptwali);


              $hasilsipptbiro= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='1' && b.keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalsipptbiro = mysql_num_rows($hasilsipptbiro);


              $hasilsipptwilda= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='1' && b.keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalsipptwilda= mysql_num_rows($hasilsipptwilda);



              $hasilpks= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori ='2' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalpks = mysql_num_rows($hasilpks);


              $hasilpksgub= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='2' && b.keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalpksgub = mysql_num_rows($hasilpksgub);


              $hasilpkswali= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='2' && b.keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalpkswali = mysql_num_rows($hasilpkswali);



              $hasilpksbiro= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='2' && b.keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalpksbiro = mysql_num_rows($hasilpksbiro);


              $hasilpkswilda= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='2' && b.keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalpkswilda = mysql_num_rows($hasilpkswilda);





              $hasilSumbangan= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori ='3' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalSumbangan = mysql_num_rows($hasilSumbangan);


              $hasilSumbangangub= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='3' && b.keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalSumbangangub = mysql_num_rows($hasilSumbangangub);


              $hasilSumbanganwali= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='3' && b.keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalSumbanganwali = mysql_num_rows($hasilSumbanganwali);



              $hasilSumbanganbiro= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='3' && b.keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalSumbanganbiro = mysql_num_rows($hasilSumbanganbiro);


              $hasilSumbanganwilda= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='3' && b.keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalSumbanganwilda = mysql_num_rows($hasilSumbanganwilda);




              $hasilTukar= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori ='4' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalTukar = mysql_num_rows($hasilTukar);


              $hasilTukargub= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='4' && b.keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalTukargub = mysql_num_rows($hasilTukargub);


              $hasilTukarwali= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='4' && b.keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalTukarwali = mysql_num_rows($hasilTukarwali);



              $hasilTukarbiro= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='4' && b.keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalTukarbiro = mysql_num_rows($hasilTukarbiro);


              $hasilTukarwilda= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='4' && b.keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalTukarwilda = mysql_num_rows($hasilTukarwilda);



              $hasilPP= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori ='5' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalPP = mysql_num_rows($hasilPP);


              $hasilPPgub= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='5' && b.keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalPPgub = mysql_num_rows($hasilPPgub);


              $hasilPPwali= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='5' && b.keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalPPwali = mysql_num_rows($hasilPPwali);



              $hasilPPbiro= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='5' && b.keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalPPbiro = mysql_num_rows($hasilPPbiro);


              $hasilPPwilda= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='5' && b.keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalPPwilda = mysql_num_rows($hasilPPwilda);



              $hasilKepGub= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori ='6' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalKepGub = mysql_num_rows($hasilKepGub);


              $hasilKepGubgub= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='6' && b.keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalKepGubgub = mysql_num_rows($hasilKepGubgub);


              $hasilKepGubwali= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='6' && b.keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalKepGubwali = mysql_num_rows($hasilKepGubwali);



              $hasilKepGubbiro= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='6' && b.keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalKepGubbiro = mysql_num_rows($hasilKepGubbiro);


              $hasilKepGubwilda= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='6' && b.keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalKepGubwilda = mysql_num_rows($hasilKepGubwilda);

              $hasilInGub= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori ='7' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");



              $totalInGub = mysql_num_rows($hasilInGub);


              $hasilInGubgub= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='7' && b.keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalInGubgub = mysql_num_rows($hasilInGubgub);


              $hasilInGubwali= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='7' && b.keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalInGubwali = mysql_num_rows($hasilInGubwali);



              $hasilInGubbiro= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='7' && b.keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalInGubbiro = mysql_num_rows($hasilInGubbiro);


              $hasilInGubwilda= mysql_query("select * from bast b inner join detaildokacuan n on b.nodokacuan=n.nodokacuan inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi 

                where idkategori='7' && b.keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'))");


              $totalInGubwilda = mysql_num_rows($hasilInGubwilda);

              ?>

              <table>

                <tr>
                  <td></br>Jumlah BAST:</td>
                  <td></br> <?php echo $totalrowlkpd129;  ?></td>
                </tr>


                <tr>
                  <td>Jumlah BAST SIPPT :</td>
                  <td> <?php echo $totalsippt;  ?></td>
                </tr>


                <tr>
                  <td>Jumlah BAST SIPPT-Gubernur :</td>
                  <td> <?php echo $totalsipptgub;  ?></td>
                </tr>


                <tr>
                  <td>Jumlah BAST SIPPT-Walikota :</td>
                  <td> <?php echo $totalsipptwali;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST SIPPT-Biro Perlengkapan:</td>
                  <td> <?php echo $totalsipptbiro;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST SIPPT-Sekwilda :</td>
                  <td> <?php echo $totalsipptwilda;  ?></td>
                </tr>




                <tr>
                  <td></br></br>Jumlah BAST NON SIPPT :</td>
                  <td> </br><?php echo $totalnonsippt;  ?></td>
                </tr>

                <tr>
                  <td></br>Jumlah BAST PKS :</td>
                  <td></br> <?php echo $totalpks;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST PKS-Gubernur :</td>
                  <td> <?php echo $totalpksgub;  ?></td>
                </tr>


                <tr>
                  <td>Jumlah BAST PKS-Walikota :</td>
                  <td> <?php echo $totalpkswali;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST PKS-Biro Kelengkapan:</td>
                  <td> <?php echo $totalpksbiro;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST PKS-Sekwilda :</td>
                  <td> <?php echo $totalpkswilda;  ?></td>
                </tr>




                <tr>
                  <td></br>Jumlah BAST Sumbangan/Hibah :</td>
                  <td></br> <?php echo $totalSumbangan;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST Sumbangan-Gubernur :</td>
                  <td> <?php echo $totalSumbangangub;  ?></td>
                </tr>


                <tr>
                  <td>Jumlah BAST Sumbangan-Walikota :</td>
                  <td> <?php echo $totalSumbanganwali;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST Sumbangan-Biro Kelengkapan:</td>
                  <td> <?php echo $totalSumbanganbiro;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST Sumbangan-Sekwilda :</td>
                  <td> <?php echo $totalSumbanganwilda;  ?></td>
                </tr>



                <tr>
                  <td></br>Jumlah BAST Tukar/menukar:</td>
                  <td></br> <?php echo $totalTukar;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST Tukar-Gubernur :</td>
                  <td> <?php echo $totalTukargub;  ?></td>
                </tr>


                <tr>
                  <td>Jumlah BAST Tukar-Walikota :</td>
                  <td> <?php echo $totalTukarwali;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST Tukar-Biro Kelengkapan:</td>
                  <td> <?php echo $totalTukarbiro;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST Tukar-Sekwilda :</td>
                  <td> <?php echo $totalTukarwilda;  ?></td>
                </tr>


                <tr>
                  <td></br>Jumlah BAST Persetujuan Prinsip:</td>
                  <td></br> <?php echo $totalPP;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST PP-Gubernur :</td>
                  <td> <?php echo $totalPPgub;  ?></td>
                </tr>


                <tr>
                  <td>Jumlah BAST PP-Walikota :</td>
                  <td> <?php echo $totalPPwali;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST PP-Biro Kelengkapan:</td>
                  <td> <?php echo $totalPPbiro;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST PP-Sekwilda :</td>
                  <td> <?php echo $totalPPwilda;  ?></td>
                </tr>


                <tr>
                  <td></br>Jumlah BAST Kepgub:</td>
                  <td></br> <?php echo $totalKepGub;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST KepGub-Gubernur :</td>
                  <td> <?php echo $totalKepGubgub;  ?></td>
                </tr>


                <tr>
                  <td>Jumlah BAST KepGub-Walikota :</td>
                  <td> <?php echo $totalKepGubwali;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST KepGub-Biro Kelengkapan:</td>
                  <td> <?php echo $totalKepGubbiro;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST KepGub-Sekwilda :</td>
                  <td> <?php echo $totalKepGubwilda;  ?></td>
                </tr>



                <tr>
                  <td></br>Jumlah BAST InGub:</td>
                  <td></br> <?php echo $totalInGub;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST InGub-Gubernur :</td>
                  <td> <?php echo $totalInGubgub;  ?></td>
                </tr>


                <tr>
                  <td>Jumlah BAST InGub-Walikota :</td>
                  <td> <?php echo $totalInGubwali;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST InGub-Biro Kelengkapan:</td>
                  <td> <?php echo $totalInGubbiro;  ?></td>
                </tr>

                <tr>
                  <td>Jumlah BAST InGub-Sekwilda :</td>
                  <td> <?php echo $totalInGubwilda;  ?></td>
                </tr>
              </table>



            </div>
          </div>




          <div class="overview">
            <div class="dashboard-heading">Resume Penilaian Kombinasi (101)</div>
            <div class="dashboard-content">

              <?php
              include "koneksi.php";




              $sqlSIPPT = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='1' &&  ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlSIPPT) or die (mysql_error());
              $tSIPPT = mysql_fetch_array($result);



              $sqlSIPPTGUB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='1' &&  keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlSIPPTGUB) or die (mysql_error());
              $tSIPPTGUB = mysql_fetch_array($result);

              $sqlSIPPTWALI = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='1' &&  keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlSIPPTWALI) or die (mysql_error());
              $tSIPPTWALI = mysql_fetch_array($result);


              $sqlSIPPTBIRO = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='1' &&  keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlSIPPTBIRO) or die (mysql_error());
              $tSIPPTBIRO = mysql_fetch_array($result);


              $sqlSIPPTWILDA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='1' &&  keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlSIPPTWILDA) or die (mysql_error());
              $tSIPPTWILDA = mysql_fetch_array($result);



              $sqlNONSIPPT = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori !='1' &&  ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlNONSIPPT) or die (mysql_error());
              $tNONSIPPT = mysql_fetch_array($result);



              $sqlPKS = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='2' &&  ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlPKS) or die (mysql_error());
              $tPKS = mysql_fetch_array($result);



              $sqlPKSGUB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='2'  &&  keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlPKSGUB) or die (mysql_error());
              $tPKSGUB = mysql_fetch_array($result);

              $sqlPKSWALI = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='2' &&  keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlPKSWALI) or die (mysql_error());
              $tPKSWALI = mysql_fetch_array($result);


              $sqlPKSBIRO = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='2' &&  keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlPKSBIRO) or die (mysql_error());
              $tPKSBIRO = mysql_fetch_array($result);


              $sqlPKSWILDA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='2' &&  keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlPKSWILDA) or die (mysql_error());
              $tPKSWILDA = mysql_fetch_array($result);



              $sqlSUMBANGAN = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='3' &&  ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlSUMBANGAN) or die (mysql_error());
              $tSUMBANGAN = mysql_fetch_array($result);



              $sqlSUMBANGANGUB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='3'  &&  keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlSUMBANGANGUB) or die (mysql_error());
              $tSUMBANGANGUB = mysql_fetch_array($result);

              $sqlSUMBANGANWALI = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='3' &&  keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlSUMBANGANWALI) or die (mysql_error());
              $tSUMBANGANWALI = mysql_fetch_array($result);


              $sqlSUMBANGANBIRO = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='3' &&  keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlSUMBANGANBIRO) or die (mysql_error());
              $tSUMBANGANBIRO = mysql_fetch_array($result);


              $sqlSUMBANGANWILDA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='3' &&  keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlSUMBANGANWILDA) or die (mysql_error());
              $tSUMBANGANWILDA = mysql_fetch_array($result);



              $sqlTUKAR = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='4' &&  ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlTUKAR) or die (mysql_error());
              $tTUKAR = mysql_fetch_array($result);



              $sqlTUKARGUB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='4'  &&  keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlTUKARGUB) or die (mysql_error());
              $tTUKARGUB = mysql_fetch_array($result);

              $sqlTUKARWALI = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='4' &&  keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlTUKARWALI) or die (mysql_error());
              $tTUKARWALI = mysql_fetch_array($result);


              $sqlTUKARBIRO = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='4' &&  keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlTUKARBIRO) or die (mysql_error());
              $tTUKARBIRO = mysql_fetch_array($result);


              $sqlTUKARWILDA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='4' &&  keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlTUKARWILDA) or die (mysql_error());
              $tTUKARWILDA = mysql_fetch_array($result);



              $sqlPP = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='5' &&  ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlPP) or die (mysql_error());
              $tPP = mysql_fetch_array($result);



              $sqlPPGUB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='5'  &&  keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlPPGUB) or die (mysql_error());
              $tPPGUB = mysql_fetch_array($result);

              $sqlPPWALI = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='5' &&  keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlPPWALI) or die (mysql_error());
              $tPPWALI = mysql_fetch_array($result);


              $sqlPPBIRO = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='5' &&  keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlPPBIRO) or die (mysql_error());
              $tPPBIRO = mysql_fetch_array($result);


              $sqlPPWILDA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='5' &&  keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlPPWILDA) or die (mysql_error());
              $tPPWILDA = mysql_fetch_array($result);




              $sqlKepGub = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='6' &&  ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlKepGub) or die (mysql_error());
              $tKepGub = mysql_fetch_array($result);



              $sqlKepGubGUB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='6'  &&  keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlKepGubGUB) or die (mysql_error());
              $tKepGubGUB = mysql_fetch_array($result);

              $sqlKepGubWALI = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='6' &&  keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlKepGubWALI) or die (mysql_error());
              $tKepGubWALI = mysql_fetch_array($result);


              $sqlKepGubBIRO = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='6' &&  keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlKepGubBIRO) or die (mysql_error());
              $tKepGubBIRO = mysql_fetch_array($result);


              $sqlKepGubWILDA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='6' &&  keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlKepGubWILDA) or die (mysql_error());
              $tKepGubWILDA = mysql_fetch_array($result);


              $sqlInGub = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='7' &&  ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlInGub) or die (mysql_error());
              $tInGub = mysql_fetch_array($result);



              $sqlInGubGUB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='7'  &&  keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlInGubGUB) or die (mysql_error());
              $tInGubGUB = mysql_fetch_array($result);

              $sqlInGubWALI = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='7' &&  keterangan like '%wali%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlInGubWALI) or die (mysql_error());
              $tInGubWALI = mysql_fetch_array($result);


              $sqlInGubBIRO = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='7' &&  keterangan like '%biro%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlInGubBIRO) or die (mysql_error());
              $tInGubBIRO = mysql_fetch_array($result);


              $sqlInGubWILDA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan n on b.nodokacuan=n.nodokacuan where  idkategori='7' &&  keterangan like '%wilda%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
              $result = mysql_query($sqlInGubWILDA) or die (mysql_error());
              $tInGubWILDA = mysql_fetch_array($result);
              ?>

              <table>



                <tr>
                  <td></br></br>Jumlah Nilai BAST SIPPT:</td>
                  <td></br></br><?php echo number_format($tSIPPT['total_nilaibast'],2);  ?></a></td>
                </tr>


                <tr>
                  <td>Jumlah Nilai BAST SIPPT-GUBERNUR:</td>
                  <td><?php echo number_format($tSIPPTGUB['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST SIPPT-WALIKOTA:</td>
                  <td><?php echo number_format($tSIPPTWALI['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST SIPPT-BIRO PERLENGKAPAN:</td>
                  <td><?php echo number_format($tSIPPTBIRO['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST SIPPT-SEKWILDA:</td>
                  <td><?php echo number_format($tSIPPTWILDA['total_nilaibast'],2);  ?></a></td>
                </tr>
                



                <tr>
                  <td></br></br>Jumlah Nilai BAST NON SIPPT:</td>
                  <td></br></br><?php echo number_format($tNONSIPPT['total_nilaibast'],2);  ?></a></td>
                </tr>


                <tr>
                  <td></br>Jumlah Nilai BAST PKS:</td>
                  <td></br><?php echo number_format($tPKS['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST PKS-GUBERNUR:</td>
                  <td><?php echo number_format($tPKSGUB['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST PKS-WALIKOTA:</td>
                  <td><?php echo number_format($tPKSWALI['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST PKS-BIRO PERLENGKAPAN:</td>
                  <td><?php echo number_format($tPKSBIRO['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST PKS-SEKWILDA:</td>
                  <td><?php echo number_format($tPKSWILDA['total_nilaibast'],2);  ?></a></td>
                </tr>




                <tr>
                  <td></br>Jumlah Nilai BAST SUMBANGAN:</td>
                  <td></br><?php echo number_format($tSUMBANGAN['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST SUMBANGAN-GUBERNUR:</td>
                  <td><?php echo number_format($tSUMBANGANGUB['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST SUMBANGAN-WALIKOTA:</td>
                  <td><?php echo number_format($tSUMBANGANWALI['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST SUMBANGAN-BIRO PERLENGKAPAN:</td>
                  <td><?php echo number_format($tSUMBANGANBIRO['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST SUMBANGAN-SEKWILDA:</td>
                  <td><?php echo number_format($tSUMBANGANWILDA['total_nilaibast'],2);  ?></a></td>
                </tr>


                <tr>
                  <td></br>Jumlah Nilai BAST TUKAR:</td>
                  <td></br><?php echo number_format($tTUKAR['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST TUKAR-GUBERNUR:</td>
                  <td><?php echo number_format($tTUKARGUB['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST TUKAR-WALIKOTA:</td>
                  <td><?php echo number_format($tTUKARWALI['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST TUKAR-BIRO PERLENGKAPAN:</td>
                  <td><?php echo number_format($tTUKARBIRO['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST TUKAR-SEKWILDA:</td>
                  <td><?php echo number_format($tTUKARWILDA['total_nilaibast'],2);  ?></a></td>
                </tr>

                <tr>
                  <td></br>Jumlah Nilai BAST PP:</td>
                  <td></br><?php echo number_format($tPP['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST PP-GUBERNUR:</td>
                  <td><?php echo number_format($tPPGUB['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST PP-WALIKOTA:</td>
                  <td><?php echo number_format($tPPWALI['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST PP-BIRO PERLENGKAPAN:</td>
                  <td><?php echo number_format($tPPBIRO['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST PP-SEKWILDA:</td>
                  <td><?php echo number_format($tPPWILDA['total_nilaibast'],2);  ?></a></td>
                </tr>

                <tr>
                  <td></br>Jumlah Nilai BAST KepGub:</td>
                  <td></br><?php echo number_format($tKepGub['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST KepGub-GUBERNUR:</td>
                  <td><?php echo number_format($tKepGubGUB['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST KepGub-WALIKOTA:</td>
                  <td><?php echo number_format($tKepGubWALI['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST KepGub-BIRO PERLENGKAPAN:</td>
                  <td><?php echo number_format($tKepGubBIRO['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST KepGub-SEKWILDA:</td>
                  <td><?php echo number_format($tKepGubWILDA['total_nilaibast'],2);  ?></a></td>
                </tr>


                <tr>
                  <td></br>Jumlah Nilai BAST InGub:</td>
                  <td></br><?php echo number_format($tInGub['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST InGub-GUBERNUR:</td>
                  <td><?php echo number_format($tInGubGUB['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST InGub-WALIKOTA:</td>
                  <td><?php echo number_format($tInGubWALI['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST InGub-BIRO PERLENGKAPAN:</td>
                  <td><?php echo number_format($tInGubBIRO['total_nilaibast'],2);  ?></a></td>
                </tr>
                <tr>
                  <td>Jumlah Nilai BAST InGub-SEKWILDA:</td>
                  <td><?php echo number_format($tInGubWILDA['total_nilaibast'],2);  ?></a></td>
                </tr>
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