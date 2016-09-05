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
          <h1><img src="view/image/home.png" alt="" />Resumme Laporan Penilaian LKPD Kombinasi</h1>
          <P align=right><span>
           <a target="_blank" href="print.php" ></li>
             <img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
             <a target="_blank" href="print.php">
               Print this page
             </a></span>

           </div>

           <div class="content">

            <div class="overview">
              <div class="dashboard-heading">Resume Penilaian Kombinasi (129)</div>
              <div class="dashboard-content">
                <?php
                include "koneksi.php";


                $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='1') or (bpk357 ='0' && pulomas='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='1')) ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='1') or (bpk357 ='0' && pulomas='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='1')) ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='1') or (bpk357 ='0' && pulomas='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='1')) ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);

                $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='1') or (bpk357 ='0' && pulomas='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='1')) ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='1') or (bpk357 ='0' && pulomas='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='1')) ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi where  (bpk357 ='1'  && rekon129='1') or (bpk357 ='0' && pulomas='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='1')");


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi where  (bpk357 ='1'  && rekon129='1') or (bpk357 ='0' && pulomas='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='1')");


                $totalrowlkpd129 = mysql_num_rows($hasil);




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
                    <td></br></br>Jumlah BAST:</td>
                    <td> <?php echo $totalrowlkpd129;  ?></td>
                  </tr>

                </table>



              </div>
            </div>




            <div class="overview">
              <div class="dashboard-heading">Resume Penilaian Kombinasi (54)</div>
              <div class="dashboard-content">
                <?php
                include "koneksi.php";


                $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);

                $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi where  (bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')");

                $totalrowlkpd54 = mysql_num_rows($hasil);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A:</td>
                    <td> <a target="_blank" href="pdflaporanakun54Amix.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B:</td>
                    <td> <a target="_blank" href="pdflaporanakun54Bmix.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C:</td>
                    <td> <a target="_blank" href="pdflaporanakun54Cmix.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D:</td>
                    <td> <a target="_blank" href="pdflaporanakun54Dmix.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E:</td>
                    <td> <a target="_blank" href="pdflaporanakun54Emix.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                  </tr>


                  <tr>
                    <td>Total Nilai :</td>
                    <td> <a target="_blank" href="excel54.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                  </tr>




                  <tr>
                    <td></br></br>Jumlah BAST:</td>
                    <td><?php echo $totalrowlkpd54;  ?></td>
                  </tr>

                </table>



              </div>
            </div>




            <div class="overview">
              <div class="dashboard-heading">Resume Penilaian Kombinasi (163)</div>
              <div class="dashboard-content">
                <?php
                include "koneksi.php";


                $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='1')) ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='1')) ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='1')) ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);

                $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='1')) ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='1')) ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi where  (bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='1')");

                $totalrowlkpd163 = mysql_num_rows($hasil);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A:</td>
                    <td> <a target="_blank" href="pdflaporanakun163Amix.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B:</td>
                    <td> <a target="_blank" href="pdflaporanakun163Bmix.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C:</td>
                    <td> <a target="_blank" href="pdflaporanakun163Cmix.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D:</td>
                    <td> <a target="_blank" href="pdflaporanakun163Dmix.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E:</td>
                    <td> <a target="_blank" href="pdflaporanakun163Emix.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                  </tr>


                  <tr>
                    <td>Total Nilai :</td>
                    <td> <a target="_blank" href="excel163.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                  </tr>




                  <tr>
                    <td></br></br>Jumlah BAST:</td>
                    <td><?php echo $totalrowlkpd163;  ?></td>
                  </tr>

                </table>



              </div>
            </div>




            <div class="overview">
              <div class="dashboard-heading">Resume Penilaian Kombinasi (101)</div>
              <div class="dashboard-content">
                <?php
                include "koneksi.php";


                $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);

                $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')) ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi where  (bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1') or (mutasi='0' && bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')  or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1')");

                $totalrowlkpd101 = mysql_num_rows($hasil);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A:</td>
                    <td> <a target="_blank" href="pdflaporanakun101Amix.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B:</td>
                    <td> <a target="_blank" href="pdflaporanakun101Bmix.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C:</td>
                    <td> <a target="_blank" href="pdflaporanakun101Cmix.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D:</td>
                    <td> <a target="_blank" href="pdflaporanakun101Dmix.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E:</td>
                    <td> <a target="_blank" href="pdflaporanakun101Emix.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                  </tr>


                  <tr>
                    <td>Total Nilai :</td>
                    <td> <a target="_blank" href="excel101.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                  </tr>




                  <tr>
                    <td></br></br>Jumlah BAST:</td>
                    <td> <?php echo $totalrowlkpd101;  ?></td>
                  </tr>

                </table>



              </div>
            </div>





            <div class="overview">
              <div class="dashboard-heading">Resume Penilaian Kombinasi (2009)</div>
              <div class="dashboard-content">
                <?php
                include "koneksi.php";


                $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);

                $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')) ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi where  (bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2009') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2009')");

                $totalrowlkpd101 = mysql_num_rows($hasil);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A:</td>
                    <td> <a target="_blank" href="pdflaporanakun2009Amix.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B:</td>
                    <td> <a target="_blank" href="pdflaporanakun2009Bmix.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C:</td>
                    <td> <a target="_blank" href="pdflaporanakun2009Cmix.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D:</td>
                    <td> <a target="_blank" href="pdflaporanakun2009Dmix.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E:</td>
                    <td> <a target="_blank" href="pdflaporanakun2009Emix.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                  </tr>


                  <tr>
                    <td>Total Nilai :</td>
                    <td> <a target="_blank" href="excel2009.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                  </tr>




                  <tr>
                    <td></br></br>Jumlah BAST:</td>
                    <td><?php echo $totalrowlkpd101;  ?></td>
                  </tr>

                </table>



              </div>
            </div>




            <div class="overview">
              <div class="dashboard-heading">Resume Penilaian Kombinasi (2010)</div>
              <div class="dashboard-content">
                <?php
                include "koneksi.php";


                $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2010') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2010') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010')) ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2010') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2010') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010')) ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2010') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2010') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010')) ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);


                $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2010') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2010') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010')) ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2010') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2010') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010')) ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi where (bpk357 ='1'   && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && balaikota='0' &&  perihalbast='mutasi2010') or (bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2010') or (bpk357 ='0'  && pulomas='1'  && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010')or (bpk357 ='0' && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010') or (mutasi='0' && bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010') or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0'  &&  perihalbast='mutasi2010')");

                $totalrowlkpd101 = mysql_num_rows($hasil);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A:</td>
                    <td> <a target="_blank" href="pdflaporanakun2010Amix.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B:</td>
                    <td> <a target="_blank" href="pdflaporanakun2010Bmix.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C:</td>
                    <td> <a target="_blank" href="pdflaporanakun2010Cmix.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D:</td>
                    <td> <a target="_blank" href="pdflaporanakun2010Dmix.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E:</td>
                    <td> <a target="_blank" href="pdflaporanakun2010Emix.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                  </tr>


                  <tr>
                    <td>Total Nilai :</td>
                    <td> <a target="_blank" href="excel2010.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                  </tr>




                  <tr>
                    <td></br></br>Jumlah BAST:</td>
                    <td><?php echo $totalrowlkpd101;  ?></td>
                  </tr>

                </table>

              </div>
            </div>





            <div class="overview">
              <div class="dashboard-heading">TOTAL Penilaian Kombinasi</div>
              <div class="dashboard-content">

                <?php
                include "koneksi.php";


                $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && !((bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' &&  rekon101='0' && mutasi='0')  or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or(bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && mutasi='0')) &&  !((bpk357='0' && pulomas='0' && mutasi='1'  &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='1' && mutasi='1' && perihalbast!='mutasi2009' && perihalbast!='mutasi2010')or (bpk357 ='0'  && mutasi ='1' && pulomas='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='0' && pulomas='0' && tp3w='1' && mutasi='1' )or(bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && mutasi='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2009' )or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && mutasi='1')) ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && !((bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' &&  rekon101='0' && mutasi='0')  or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or(bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && mutasi='0')) &&  !((bpk357='0' && pulomas='0' && mutasi='1'  &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='1' && mutasi='1' && perihalbast!='mutasi2009' && perihalbast!='mutasi2010')or (bpk357 ='0'  && mutasi ='1' && pulomas='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='0' && pulomas='0' && tp3w='1' && mutasi='1' )or(bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && mutasi='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2009' )or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && mutasi='1')) ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);


                $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && !((bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' &&  rekon101='0' && mutasi='0')  or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or(bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && mutasi='0')) &&  !((bpk357='0' && pulomas='0' && mutasi='1'  &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='1' && mutasi='1' && perihalbast!='mutasi2009' && perihalbast!='mutasi2010')or (bpk357 ='0'  && mutasi ='1' && pulomas='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='0' && pulomas='0' && tp3w='1' && mutasi='1' )or(bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && mutasi='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2009' )or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && mutasi='1')) ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);


                $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && !((bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' &&  rekon101='0' && mutasi='0')  or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or(bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && mutasi='0')) &&  !((bpk357='0' && pulomas='0' && mutasi='1'  &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='1' && mutasi='1' && perihalbast!='mutasi2009' && perihalbast!='mutasi2010')or (bpk357 ='0'  && mutasi ='1' && pulomas='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='0' && pulomas='0' && tp3w='1' && mutasi='1' )or(bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && mutasi='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2009' )or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && mutasi='1')) ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && !((bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' &&  rekon101='0' && mutasi='0')  or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or(bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && mutasi='0')) &&  !((bpk357='0' && pulomas='0' && mutasi='1'  &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='1' && mutasi='1' && perihalbast!='mutasi2009' && perihalbast!='mutasi2010')or (bpk357 ='0'  && mutasi ='1' && pulomas='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='0' && pulomas='0' && tp3w='1' && mutasi='1' )or(bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && mutasi='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2009' )or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && mutasi='1')) ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi where  !((bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' &&  rekon101='0' && mutasi='0')  or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or(bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && mutasi='0')) &&  !((bpk357='0' && pulomas='0' && mutasi='1'  &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='1' && mutasi='1' && perihalbast!='mutasi2009' && perihalbast!='mutasi2010')or (bpk357 ='0'  && mutasi ='1' && pulomas='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='0' && pulomas='0' && tp3w='1' && mutasi='1' )or(bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && mutasi='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2009' )or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && mutasi='1'))");

                $totalrowlkpdtotal = mysql_num_rows($hasil);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A:</td>
                    <td> <?php echo number_format($tA['total_nilaibast'],2);  ?></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B:</td>
                    <td> <?php echo number_format($tB['total_nilaibast'],2);  ?></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C:</td>
                    <td><?php echo number_format($tC['total_nilaibast'],2);  ?></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D:</td>
                    <td> <?php echo number_format($tD['total_nilaibast'],2);  ?></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E:</td>
                    <td> <?php echo number_format($tE['total_nilaibast'],2);  ?></td>
                  </tr>


                  <tr>
                    <td>Total Nilai :</td>
                    <td><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></td>
                  </tr>




                  <tr>
                    <td></br></br>Jumlah BAST:</td>
                    <td> <?php echo $totalrowlkpdtotal;  ?></td>
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