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
          <h1><img src="view/image/home.png" alt="" />Resumme Laporan Penilaian Semua BAST</h1>
          <P align=right><span>
           <a target="_blank" href="print.php" ></li>
             <img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
             <a target="_blank" href="print.php">
               Print this page
             </a></span>

           </div>

           <div class="content">

            <div class="overview">
              <div class="dashboard-heading">Resume Penilaian Pergub 132 </div>
              <div class="dashboard-content">
                <?php
                include "koneksi.php";


                $sqlA = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B'  ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C'  ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);

                $sqlD = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D'  ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E'  ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast");

                $totalrowsemuabast = mysql_num_rows($hasil);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemua132A.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemua132B.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemua132C.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemua132D.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemua132E.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                  </tr>


                  <tr>
                    <td>Total Nilai :</td>
                    <td> <a target="_blank" href="pdflaporanakunsemua132ABCDE.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                  </tr>




                  <tr>
                    <td></br></br>Jumlah BAST:</td>
                    <td> </br></br><?php echo $totalrowsemuabast;  ?></a></td>
                  </tr>

                </table>



              </div>
            </div>



            <div class="statistic">
              <div class="dashboard-heading">Resume Penilaian Pergub 132 (EXCOM)</div>
              <div class="dashboard-content">
                <?php
                include "excomkoneksi.php";


                $sqlA = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B'  ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C'  ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);

                $sqlD = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D'  ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E'  ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast");

                $totalrowsemuabast = mysql_num_rows($hasil);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcom132A.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcom132B.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcom132C.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcom132D.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcom132E.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                  </tr>


                  <tr>
                    <td>Total Nilai :</td>
                    <td> <a target="_blank" href="pdflaporanakunexcom132ABCDE.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                  </tr>




                  <tr>
                    <td></br></br>Jumlah BAST:</td>
                    <td></br></br> <?php echo $totalrowsemuabast;  ?></a></td>
                  </tr>

                </table>



              </div>
            </div>


            <div class="overview">
              <div class="dashboard-heading">Resume Penilaian BAST </div>
              <div class="dashboard-content">
                <?php
                include "koneksi.php";


                $sqlA = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B'  ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C'  ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);

                $sqlD = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D'  ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E'  ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast");

                $totalrowsemuabast = mysql_num_rows($hasil);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemuabastA.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemuabastB.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemuabastC.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemuabastD.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemuabastE.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                  </tr>


                  <tr>
                    <td>Total Nilai :</td>
                    <td> <a target="_blank" href="pdflaporanakunsemuabastABCDE.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                  </tr>




                  <tr>
                    <td></br></br>Jumlah BAST:</td>
                    <td> </br></br><?php echo $totalrowsemuabast;  ?></a></td>
                  </tr>

                </table>



              </div>
            </div>



            <div class="statistic">
              <div class="dashboard-heading">Resume Penilaian BAST (EXCOM)</div>
              <div class="dashboard-content">
                <?php
                include "excomkoneksi.php";


                $sqlA = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B'  ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C'  ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);

                $sqlD = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D'  ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E'  ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast");

                $totalrowsemuabast = mysql_num_rows($hasil);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcombastA.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcombastB.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcombastC.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcombastD.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcombastE.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                  </tr>


                  <tr>
                    <td>Total Nilai :</td>
                    <td> <a target="_blank" href="pdflaporanakunexcombastABCDE.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                  </tr>




                  <tr>
                    <td></br></br>Jumlah BAST:</td>
                    <td></br></br> <?php echo $totalrowsemuabast;  ?></a></td>
                  </tr>

                </table>



              </div>
            </div>



            <div class="overview">
              <div class="dashboard-heading">Resume Penilaian Kombinasi Semua BAST </div>
              <div class="dashboard-content">
                <?php
                include "koneksi.php";


                $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B'  ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C'  ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);

                $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D'  ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E'  ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast");

                $totalrowsemuabast = mysql_num_rows($hasil);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemuamixA.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemuamixB.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemuamixC.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemuamixD.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E:</td>
                    <td> <a target="_blank" href="pdflaporanakunsemuamixE.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                  </tr>


                  <tr>
                    <td>Total Nilai :</td>
                    <td> <a target="_blank" href="pdflaporanakunsemuamixABCDE.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                  </tr>




                  <tr>
                    <td></br></br>Jumlah BAST:</td>
                    <td> </br></br><?php echo $totalrowsemuabast;  ?></a></td>
                  </tr>

                </table>



              </div>
            </div>



            <div class="statistic">
              <div class="dashboard-heading">Resume Penilaian Kombinasi BAST (EXCOM)</div>
              <div class="dashboard-content">
                <?php
                include "excomkoneksi.php";


                $sqlA = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B'  ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C'  ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);

                $sqlD = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D'  ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(nilaimix) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E'  ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast");

                $totalrowsemuabast = mysql_num_rows($hasil);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcommixA.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcommixB.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcommixC.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcommixD.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E:</td>
                    <td> <a target="_blank" href="pdflaporanakunexcommixE.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                  </tr>


                  <tr>
                    <td>Total Nilai :</td>
                    <td> <a target="_blank" href="pdflaporanakunexcommixABCDE.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                  </tr>




                  <tr>
                    <td></br></br>Jumlah BAST:</td>
                    <td></br></br> <?php echo $totalrowsemuabast;  ?></a></td>
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