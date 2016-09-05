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
          <h1><img src="view/image/home.png" alt="" />Laporan Penilaian LKPD-54</h1>
          <P align=right><span>
           <a target="_blank" href="print.php" ></li>
             <img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
             <a target="_blank" href="print.php">
               Print this page
             </a></span>

           </div>

           <div class="content">

            <div class="overview">
              <div class="dashboard-heading">Resume Penilaian PerGub 132</div>
              <div class="dashboard-content">
                <?php
                include "koneksi.php";


                $sqlA = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);

                $sqlD = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                $hasil= mysql_query("select * from bast b inner join (select distinct nobast from akun)d on b.nobast=d.nobast inner join lokasidokumen l on b.nobast=l.nobastlokasi where  (bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')");

                $totalrowlkpd54 = mysql_num_rows($hasil);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A:</td>
                    <td> <a target="_blank" href="pdflaporanakun54A.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B:</td>
                    <td> <a target="_blank" href="pdflaporanakun54B.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C:</td>
                    <td> <a target="_blank" href="pdflaporanakun54C.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D:</td>
                    <td> <a target="_blank" href="pdflaporanakun54D.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E:</td>
                    <td> <a target="_blank" href="pdflaporanakun54E.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                  </tr>


                  <tr>
                    <td>Total Nilai :</td>
                    <td> <a target="_blank" href="pdflaporanakun54ABCDE.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                  </tr>




                  <tr>
                    <td></br></br>Jumlah BAST:</td>
                    <td> <a target="_blank" href="pdflaporanakuntambahE.php"><?php echo $totalrowlkpd54;  ?></a></td>
                  </tr>

                </table>



              </div>
            </div>


            <div class="statistic">
              <div class="dashboard-heading">Resume Nilai BAST</div>
              <div class="dashboard-content">
                <?php
                include "koneksi.php";


                $sqlA = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlA) or die (mysql_error());
                $tA = mysql_fetch_array($result);

                $sqlB = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlB) or die (mysql_error());
                $tB = mysql_fetch_array($result);

                $sqlC = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlC) or die (mysql_error());
                $tC = mysql_fetch_array($result);

                $sqlD = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlD) or die (mysql_error());
                $tD = mysql_fetch_array($result);

                $sqlE = "SELECT SUM(nilaibast) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                $result = mysql_query($sqlE) or die (mysql_error());
                $tE = mysql_fetch_array($result);


                ?>

                <table>
                  <tr>
                    <td>Jumlah Nilai KIB A           :</td>
                    <td> <a target="_blank" href="pdflaporanakun54ABAST.php"><?php echo number_format($tA['total_nilaibast'],2);  ?></a></td>
                  </tr>

                  <tr>
                    <td>Jumlah Nilai KIB B           :</td>
                    <td> <a target="_blank" href="pdflaporanakun54BBAST.php"><?php echo number_format($tB['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB C           :</td>
                    <td> <a target="_blank" href="pdflaporanakun54CBAST.php"><?php echo number_format($tC['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB D           :</td>
                    <td> <a target="_blank" href="pdflaporanakun54DBAST.php"><?php echo number_format($tD['total_nilaibast'],2);  ?></a></td>
                  </tr>
                  <tr>
                    <td>Jumlah Nilai KIB E           :</td>
                    <td> <a target="_blank" href="pdflaporanakun54EBAST.php"><?php echo number_format($tE['total_nilaibast'],2);  ?></a></td>
                  </tr>


                  <tr>
                    <td>Total Nilai                  :</td>
                    <td> <a target="_blank" href="pdflaporanakun54ABCDEBAST.php"><?php echo (number_format(($tA['total_nilaibast'])+($tB['total_nilaibast'])+($tC['total_nilaibast'])+($tD['total_nilaibast'])+($tE['total_nilaibast']),2));  ?></a></td>
                  </tr>


                </table>



              </div>
            </div>


            <div class="latest">
              <div class="dashboard-heading">Detail KIB A</div>
              <div class="dashboard-content">

               <table class="list" id=datatable1 width="1400" border="1" >
                
                <thead>
                  <tr>
                    <td class="center">No.</td>
                    <td class="center">No.BAST</td>
                    <td class="center">Peruntukan</td>                
                    <td class="center">Kategori KIB</td>
                    <td class="center">Volume</td>
                    <td class="center">Satuan</td>
                    <td class="center">Nilai Pengali</td>
                    <td class="center">Penilaian PerGub132</td>
                    <td class="center">Nilai BAST</td>
                    <td class="center">Keterangan</td>
                    <td class="center">Action</td>
                  </tr>
                </thead>


                
                <tbody>


                 <?php 
                 include "koneksi.php";
                 
                 
                 $query2 = mysql_query("select * from akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join peruntukan p on a.idperuntukan=p.idperuntukan where  kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1'))") ;

                 $no = 1;
                 while ($data2 = mysql_fetch_array($query2)){
                   
                   ?>

                   <tr>
                     <td class="center"><?php echo $no; ?></td>		
                     <td class="left"><?php echo $data2['nobast']; ?></td>
                     <td class="left"><?php echo $data2['deskripsi']; ?></td>
                     <td class="center"><?php echo $data2['kategoriaset']; ?></td>
                     <td class="center"><?php print number_format ($data2['volume']); ?></td>
                     <td class="center"><?php echo $data2['satuan']; ?></td>
                     <td class="center"><?php print number_format  ($data2['nilainjop'],2); ?></td>
                     <td class="center"><?php print number_format  ($data2['jumnjop'],2); ?></td>
                     <td class="center"><?php print number_format  ($data2['nilaibast'],2); ?></td>
                     <td class="right"><?php echo $data2['ketakun']; ?></td>		
                     <td class="center"><a href="akunedit2.php?id=<?php echo $data2['nobast']; ?>">Edit</a></td>
                   </tr>

                   
                   <?php 
                   $no++;

                 }
                 $sql = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                 $result = mysql_query($sql) or die (mysql_error());
                 $t = mysql_fetch_array($result);

                 $sql2 = "SELECT SUM(nilaibast) AS total_nilaibast2 FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB A' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
                 $result2 = mysql_query($sql2) or die (mysql_error());
                 $t2 = mysql_fetch_array($result2);

                 ?>

                 <thead>
                   <tr>
                     <td class="center"><?php ?></td>
                     <td class="left"><?php  ?></td>
                     <td class="center"><?php  ?></td>
                     <td class="right"><?php  ?></td>
                     <td class="center"><?php  ?></td>
                     <td class="center"><?php ?></td>
                     <td class="center"><?php ?></td>
                     <td class="center"><?php echo number_format($t['total_nilaibast'],2);  ?></td>
                     <td class="center"><?php echo number_format($t2['total_nilaibast2'],2);  ?></td>
                     <td class="right"><?php ?></td>		
                     <td class="center"><?php ?></td>
                     
                   </tr>

                 </thead>
               </tbody>

             </table>


           </div>
         </div>


         <div class="latest">
          <div class="dashboard-heading">Detail KIB B</div>
          <div class="dashboard-content">

           <table class="list" id=datatable1 width="1400" border="1" >
            
            <thead>
              <tr>
                <td class="center">No.</td>
                <td class="center">No.BAST</td>
                <td class="center">Peruntukan</td>                
                <td class="center">Kategori KIB</td>
                <td class="center">Volume</td>
                <td class="center">Satuan</td>
                <td class="center">Nilai Pengali</td>
                <td class="center">Penilaian PerGub132</td>
                <td class="center">Nilai BAST</td>
                <td class="center">Keterangan</td>
                <td class="center">Action</td>
              </tr>
            </thead>


            
            <tbody>


             <?php 
             include "koneksi.php";
             
             
             $query2 = mysql_query("select * from akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join peruntukan p on a.idperuntukan=p.idperuntukan where  kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1'))") ;
             $no = 1;
             while ($data2 = mysql_fetch_array($query2)){
               
               ?>

               <tr>
                 <td class="center"><?php echo $no; ?></td>		
                 <td class="left"><?php echo $data2['nobast']; ?></td>
                 <td class="left"><?php echo $data2['deskripsi']; ?></td>
                 <td class="center"><?php echo $data2['kategoriaset']; ?></td>
                 <td class="center"><?php print number_format ($data2['volume']); ?></td>
                 <td class="center"><?php echo $data2['satuan']; ?></td>
                 <td class="center"><?php print number_format  ($data2['nilainjop'],2); ?></td>
                 <td class="center"><?php print number_format  ($data2['jumnjop'],2); ?></td>
                 <td class="center"><?php print number_format  ($data2['nilaibast'],2); ?></td>
                 <td class="right"><?php echo $data2['ketakun']; ?></td>		
                 <td class="center"><a href="akunedit2.php?id=<?php echo $data2['nobast']; ?>">Edit</a></td>
               </tr>

               
               <?php 
               $no++;

             }
             $sql = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
             $result = mysql_query($sql) or die (mysql_error());
             $t = mysql_fetch_array($result);

             $sql2 = "SELECT SUM(nilaibast) AS total_nilaibast2 FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB B' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
             $result2 = mysql_query($sql2) or die (mysql_error());
             $t2 = mysql_fetch_array($result2);
             ?>

             <thead>
               <tr>
                 <td class="center"><?php ?></td>
                 <td class="left"><?php  ?></td>
                 <td class="center"><?php  ?></td>
                 <td class="right"><?php  ?></td>
                 <td class="center"><?php  ?></td>
                 <td class="center"><?php ?></td>
                 <td class="center"><?php ?></td>
                 <td class="center"><?php echo number_format($t['total_nilaibast'],2);  ?></td>
                 <td class="center"><?php echo number_format($t2['total_nilaibast2'],2);  ?></td>
                 <td class="right"><?php ?></td>		
                 <td class="center"><?php ?></td>
               </tr>

             </thead>
           </tbody>

         </table>


       </div>
     </div>

     <div class="latest">
      <div class="dashboard-heading">Detail KIB C</div>
      <div class="dashboard-content">

       <table class="list" id=datatable1 width="1400" border="1" >
        
        <thead>
          <tr>
            <td class="center">No.</td>
            <td class="center">No.BAST</td>
            <td class="center">Peruntukan</td>                
            <td class="center">Kategori KIB</td>
            <td class="center">Volume</td>
            <td class="center">Satuan</td>
            <td class="center">Nilai Pengali</td>
            <td class="center">Penilaian PerGub132</td>
            <td class="center">Nilai BAST</td>
            <td class="center">Keterangan</td>
            <td class="center">Action</td>
          </tr>
        </thead>


        
        <tbody>


         <?php 
         include "koneksi.php";
         
         
         $query2 = mysql_query("select * from akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join peruntukan p on a.idperuntukan=p.idperuntukan where  kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1'))") ;

         $no = 1;
         while ($data2 = mysql_fetch_array($query2)){
           
           ?>

           <tr>
             <td class="center"><?php echo $no; ?></td>		
             <td class="left"><?php echo $data2['nobast']; ?></td>
             <td class="left"><?php echo $data2['deskripsi']; ?></td>
             <td class="center"><?php echo $data2['kategoriaset']; ?></td>
             <td class="center"><?php print number_format ($data2['volume']); ?></td>
             <td class="center"><?php echo $data2['satuan']; ?></td>
             <td class="center"><?php print number_format  ($data2['nilainjop'],2); ?></td>
             <td class="center"><?php print number_format  ($data2['jumnjop'],2); ?></td>
             <td class="center"><?php print number_format  ($data2['nilaibast'],2); ?></td>
             <td class="right"><?php echo $data2['ketakun']; ?></td>		
             <td class="center"><a href="akunedit2.php?id=<?php echo $data2['nobast']; ?>">Edit</a></td>
           </tr>

           
           <?php 
           $no++;


           
         }

         $sql = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
         $result = mysql_query($sql) or die (mysql_error());
         $t = mysql_fetch_array($result);

         $sql2 = "SELECT SUM(nilaibast) AS total_nilaibast2 FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB C' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
         $result2 = mysql_query($sql2) or die (mysql_error());
         $t2 = mysql_fetch_array($result2);

         ?>

         <thead>
           <tr>
             <td class="center"><?php ?></td>
             <td class="left"><?php  ?></td>
             <td class="center"><?php  ?></td>
             <td class="right"><?php  ?></td>
             <td class="center"><?php  ?></td>
             <td class="center"><?php ?></td>
             <td class="center"><?php ?></td>
             <td class="center"><?php echo number_format($t['total_nilaibast'],2);  ?></td>
             <td class="center"><?php echo number_format($t2['total_nilaibast2'],2);  ?></td>
             <td class="right"><?php ?></td>		
             <td class="center"><?php ?></td>
           </tr>

         </thead>
       </tbody>

     </table>

   </div>
 </div>

 <div class="latest">
  <div class="dashboard-heading">Detail KIB D</div>
  <div class="dashboard-content">


   <table class="list" id=datatable1 width="1400" border="1" >
    
    <thead>
      <tr>
        <td class="center">No.</td>
        <td class="center">No.BAST</td>
        <td class="center">Peruntukan</td>                
        <td class="center">Kategori KIB</td>
        <td class="center">Volume</td>
        <td class="center">Satuan</td>
        <td class="center">Nilai Pengali</td>
        <td class="center">Penilaian PerGub132</td>
        <td class="center">Nilai BAST</td>
        <td class="center">Keterangan</td>
        <td class="center">Action</td>
      </tr>
    </thead>


    
    <tbody>


     <?php 
     include "koneksi.php";
     
     
     $query2 = mysql_query("select * from akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join peruntukan p on a.idperuntukan=p.idperuntukan where  kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1'))") ;

     $no = 1;
     while ($data2 = mysql_fetch_array($query2)){
       
       ?>

       <tr>
         <td class="center"><?php echo $no; ?></td>		
         <td class="left"><?php echo $data2['nobast']; ?></td>
         <td class="left"><?php echo $data2['deskripsi']; ?></td>
         <td class="center"><?php echo $data2['kategoriaset']; ?></td>
         <td class="center"><?php print number_format ($data2['volume']); ?></td>
         <td class="center"><?php echo $data2['satuan']; ?></td>
         <td class="center"><?php print number_format  ($data2['nilainjop'],2); ?></td>
         <td class="center"><?php print number_format  ($data2['jumnjop'],2); ?></td>
         <td class="center"><?php print number_format  ($data2['nilaibast'],2); ?></td>
         <td class="right"><?php echo $data2['ketakun']; ?></td>		
         <td class="center"><a href="akunedit2.php?id=<?php echo $data2['nobast']; ?>">Edit</a></td>
       </tr>

       
       <?php 
       $no++;

     }
     
     $sql = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
     $result = mysql_query($sql) or die (mysql_error());
     $t = mysql_fetch_array($result);

     $sql2 = "SELECT SUM(nilaibast) AS total_nilaibast2 FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB D' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
     $result2 = mysql_query($sql2) or die (mysql_error());
     $t2 = mysql_fetch_array($result2);
     
     ?>

     <thead>
       <tr>
         <td class="center"><?php ?></td>
         <td class="left"><?php  ?></td>
         <td class="center"><?php  ?></td>
         <td class="right"><?php  ?></td>
         <td class="center"><?php  ?></td>
         <td class="center"><?php ?></td>
         <td class="center"><?php ?></td>
         <td class="center"><?php echo number_format($t['total_nilaibast'],2);  ?></td>
         <td class="center"><?php echo number_format($t2['total_nilaibast2'],2);  ?></td>
         <td class="right"><?php ?></td>		
         <td class="center"><?php ?></td>
         
       </tr>

     </thead>
   </tbody>

 </table>

</div>
</div>

<div class="latest">
  <div class="dashboard-heading">Detail KIB E</div>
  <div class="dashboard-content">


   <table class="list" id=datatable1 width="1400" border="1" >
    
    <thead>
      <tr>
        <td class="center">No.</td>
        <td class="center">No.BAST</td>
        <td class="center">Peruntukan</td>                
        <td class="center">Kategori KIB</td>
        <td class="center">Volume</td>
        <td class="center">Satuan</td>
        <td class="center">Nilai Pengali</td>
        <td class="center">Penilaian PerGub132</td>
        <td class="center">Nilai BAST</td>
        <td class="center">Keterangan</td>
        <td class="center">Action</td>
      </tr>
    </thead>


    
    <tbody>


     <?php 
     include "koneksi.php";
     
     
     $query2 = mysql_query("select * from akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join peruntukan p on a.idperuntukan=p.idperuntukan where  kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1'))") ;

     $no = 1;
     while ($data2 = mysql_fetch_array($query2)){
       
       ?>

       <tr>
         <td class="center"><?php echo $no; ?></td>		
         <td class="left"><?php echo $data2['nobast']; ?></td>
         <td class="left"><?php echo $data2['deskripsi']; ?></td>
         <td class="center"><?php echo $data2['kategoriaset']; ?></td>
         <td class="center"><?php print number_format ($data2['volume']); ?></td>
         <td class="center"><?php echo $data2['satuan']; ?></td>
         <td class="center"><?php print number_format  ($data2['nilainjop'],2); ?></td>
         <td class="center"><?php print number_format  ($data2['jumnjop'],2); ?></td>
         <td class="center"><?php print number_format  ($data2['nilaibast'],2); ?></td>
         <td class="right"><?php echo $data2['ketakun']; ?></td>		
         <td class="center"><a href="akunedit2.php?id=<?php echo $data2['nobast']; ?>">Edit</a></td>
       </tr>

       
       <?php 
       $no++;

     }

     $sql = "SELECT SUM(jumnjop) AS total_nilaibast FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
     $result = mysql_query($sql) or die (mysql_error());
     $t = mysql_fetch_array($result);

     $sql2 = "SELECT SUM(nilaibast) AS total_nilaibast2 FROM akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast where  kategoriaset='KIB E' && ((bpk357 ='1'  && rekon129='0' && rekon54='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='1')) ";
     $result2 = mysql_query($sql2) or die (mysql_error());
     $t2 = mysql_fetch_array($result2);
     
     ?>

     <thead>
       <tr>
         <td class="center"><?php ?></td>
         <td class="left"><?php  ?></td>
         <td class="center"><?php  ?></td>
         <td class="right"><?php  ?></td>
         <td class="center"><?php  ?></td>
         <td class="center"><?php ?></td>
         <td class="center"><?php ?></td>
         <td class="center"><?php echo number_format($t['total_nilaibast'],2);  ?></td>
         <td class="center"><?php echo number_format($t2['total_nilaibast2'],2);  ?></td>
         <td class="right"><?php ?></td>		
         <td class="center"><?php ?></td>
         
       </tr>

     </thead>
   </tbody>

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