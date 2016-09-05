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
          <h1><img src="view/image/home.png" alt="" /> Data BAST Perwilayah</h1>
          <P align=right><span>
           <a target="_blank" href="print.php" ></li>
             <img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
             <a target="_blank" href="print.php">
               Print this page
             </a></span>

           </div>

           <div class="content">
            <div class="overview">
              <div class="dashboard-heading">Resume Data</div>

              <div class="dashboard-content">
               <?php
               include "koneksi.php";

               

               if(isset($_REQUEST['submit2'])) {
                 $term = $_POST['term']; 
                 $XX = "<br><br><h2> <center> No Record Found, Search Again Please </center> </h2>";  


                 $query = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah like '%$term%' or pengembangbast like '%$term%'");

                 while ( $data = mysql_fetch_array($query)) {

                   $hasil1= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."'");
                   $totalrowbast = mysql_num_rows($hasil1);
                   
                   $hasil7= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%nur%'");
                   $totalrowgubernur = mysql_num_rows($hasil7);


                   $hasil8= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%wali%'");
                   $totalrowwalikota = mysql_num_rows($hasil8);

                   $hasil9= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%lengkap%' ");
                   $totalrowbiro = mysql_num_rows($hasil9);

                   $hasil10= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%sekwilda%' ");
                   $totalrowsekwilda = mysql_num_rows($hasil10);

                   $hasil11= mysql_query("select * from lokasidokumen b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobastlokasi   where wilayah ='".$data['wilayah']."' && rekon163 like '%1%' ");
                   $totalstatus1 = mysql_num_rows($hasil11);

                   $hasil12= mysql_query("select * from lokasidokumen b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobastlokasi   where wilayah ='".$data['wilayah']."' && rekon54 like '%1%' ");
                   $totalstatus2 = mysql_num_rows($hasil12);

                   $hasil13= mysql_query("select * from lokasidokumen b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobastlokasi  where wilayah ='".$data['wilayah']."' && rekon129 like '%1%' ");
                   $totalstatus3 = mysql_num_rows($hasil13);

                   $hasil14= mysql_query("select * from lokasidokumen b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobastlokasi  where wilayah ='".$data['wilayah']."' && rekon101 like '%1%' ");
                   $totalstatus4 = mysql_num_rows($hasil14);}



                 }else

                 $query = mysql_query("select * from lokasidokumen b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobastlokasi order by nobastlokasi");
                 
                 while ($data = mysql_fetch_array($query)) {

                   $hasil1= mysql_query("select * from bast");
                   $totalrowbast = mysql_num_rows($hasil1);

                   
                   $hasil7= mysql_query("select * from bast where keterangan like '%nur%' ");
                   $totalrowgubernur = mysql_num_rows($hasil7);

                   $hasil8= mysql_query("select * from bast where keterangan like '%wali%' ");
                   $totalrowwalikota = mysql_num_rows($hasil8);

                   $hasil9= mysql_query("select * from bast where keterangan like '%lengkap%' ");
                   $totalrowbiro = mysql_num_rows($hasil9);

                   $hasil10= mysql_query("select * from bast where keterangan like '%sekwilda%' ");
                   $totalrowsekwilda = mysql_num_rows($hasil10);


                   $hasil11= mysql_query("select * from lokasidokumen where rekon163 ='1' ");
                   $totalstatus1 = mysql_num_rows($hasil11);

                   $hasil12= mysql_query("select * from lokasidokumen where rekon54 ='1' ");
                   $totalstatus2 = mysql_num_rows($hasil12);

                   $hasil13= mysql_query("select * from lokasidokumen where rekon129 like '%1%' ");
                   $totalstatus3 = mysql_num_rows($hasil13);

                   $hasil14= mysql_query("select * from lokasidokumen where rekon101 like '%1%' ");
                   $totalstatus4 = mysql_num_rows($hasil14);

                 }



                 ?>
                 <table>
                  <tr>
                    <td>Total BAST:</td>
                    <td><?php echo $totalrowbast; ?></td>
                  </tr>
                  <tr>
                    <td>Total BAST Gubernur:</td>
                    <td><?php echo $totalrowgubernur; ?></td>
                  </tr>

                  <tr>
                    <td>Total BAST Walikota:</td>
                    <td><?php echo $totalrowwalikota; ?></td>
                  </tr>
                  <tr>

                    <tr>
                      <td>Total BAST Biro Perlengkapan:</td>
                      <td><?php echo $totalrowbiro; ?></td>
                    </tr>

                    <tr>
                      <td>Total BAST Sekwilda:</td>
                      <td><?php echo $totalrowsekwilda; ?></td>
                    </tr>

                    <tr>
                      <td>Total BAST Rekon 163:</td>
                      <td><?php echo $totalstatus1; ?></td>
                    </tr>

                    <tr>
                      <td>Total BAST Rekon 54:</td>
                      <td><?php echo $totalstatus2; ?></td>
                    </tr>
                    <tr>
                      <td>Total BAST Rekon 129:</td>
                      <td><?php echo $totalstatus3; ?></td>
                    </tr>

                    <tr>
                      <td>Total BAST Rekon 101:</td>
                      <td><?php echo $totalstatus4; ?></td>
                    </tr>

                  </table>
                </div>
              </div>






              <div class="latest">
                <div class="dashboard-heading">Data SIPPT PerWilayah</div>
                <div class="dashboard-content">

                  <form method="post" action="" name="form1" id="form1" >
                    <b>Masukan Wilayah</b><br><br>   
                    <b>Kata Pencarian  </b> <input type="text" name="term" />    <input type="submit" name="submit2" value="Cari"/><br/>
                  </form><br>

                  <table class="list" cellpadding="5" cellspacing="5">

                    <thead>
                      <tr>
                        <td class="center">No.</td>        	
                        <td class="center">No.DokumenAcuan</td>
                        <td class="center">Tgl.BAST</td>
                        <td class="center">Pengembang</td>
                        <td class="center">Wilayah</td>
                        <td class="center">Kategori</td>
                        <td class="center">Action</td>
                      </tr>
                    </thead>



                    
                    <?php
                    if(isset($_REQUEST['submit2'])) {

                     include "koneksi.php";
                     $term = $_POST['term']; 
                     
                     $query = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah like '%$term%' or pengembangbast like '%$term%'");

                   }else

                   $query = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast order by nobast");
                   $no = 1;
                   while ($data = mysql_fetch_array($query)) {
                     ?>
                     <tbody>
                       <tr>
                         <td class="center"><?php echo $no; ?></td>
                         <td class="left"><?php echo $data['nobast']; ?></td>
                         <td class="center"><?php echo $data['tglbast']; ?></td>
                         <td class="left"><?php echo $data['pengembangbast']; ?></td>
                         <td class="left"><?php echo $data['wilayah']; ?></td>
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