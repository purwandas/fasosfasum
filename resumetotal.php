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
          <h1><img src="view/image/home.png" alt="" />Resume LK2010</h1>
        </div>

        <div class="content">
          
          <div class="overview">
            <div class="dashboard-heading">Detail Resume</div>
            <div class="dashboard-content">




            </div>
          </div>


          <div class="statistic">
            <div class="dashboard-heading">Pie Chart</div>
            <div class="dashboard-content">




            </div>
          </div>



          <div class="latest">
            <div class="dashboard-heading">Data</div>
            <div class="dashboard-content">

             <table class="list" id=datatable1 width="1400" border="1" >
              
              <thead>
                <tr>
                  <td class="center">Sumber/Detail</td>
                  <td class="center">LK2010</td>
                  <td class="center">Mutasi</td>
                  <td class="center">Pulo Mas</td>
                  <td class="center">BP3W</td>
                  <td class="center">DTR</td>
                  <td class="center">Rekon AK</td>
                  <td class="center">Total</td>
                  <td class="center">Selisih</td>

                </tr>
              </thead>


              
              <tbody>


               <?php 
               include "koneksi.php";
               
               $hasilbastlk2010= mysql_query("select bpk357 from lokasidokumen where bpk357 ='1'");
               $totalbastlk2010 = mysql_num_rows($hasilbastlk2010);	

               $hasilbastlk2010sippt= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan d on b.nodokacuan=d.nodokacuan  where bpk357 ='1' && idkategori='1'");
               $totalbastlk2010sippt = mysql_num_rows($hasilbastlk2010sippt);

               $hasilbastlk2010nonsippt= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan d on b.nodokacuan=d.nodokacuan  where bpk357 ='1' && idkategori!='1'");
               $totalbastlk2010nonsippt = mysql_num_rows($hasilbastlk2010nonsippt);


               $hasilbastlk2010129= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='1' && rekon129='1'");
               $totalbastlk2010129 = mysql_num_rows($hasilbastlk2010129);


               $hasilbastlk201054= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='1' && rekon54='1'");
               $totalbastlk201054 = mysql_num_rows($hasilbastlk201054);

               $hasilbastlk2010163= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='1' && rekon163='1'");
               $totalbastlk2010163 = mysql_num_rows($hasilbastlk2010163);

               $hasilbastlk2010101= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='1' && rekon101='1'");
               $totalbastlk2010101 = mysql_num_rows($hasilbastlk2010101);
               
               $hasilbastlk2010mutasi= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='1' && mutasi='1'  ");
               $totalbastlk2010mutasi = mysql_num_rows($hasilbastlk2010mutasi);

               $hasilbastlk2010tambah= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='1' && mutasi='0' && pulomas='0' && rekon101='0' && tp3w='0' && rekon129='0' && rekon54='0' && rekon163='0' ");
               $totalbastlk2010tambah = mysql_num_rows($hasilbastlk2010tambah);
               
               ?>

               <tr>
                 
                 <td class="left">Kelompok 129</td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk2010163 ?></td><td><?php echo $totalbastlk2010101 ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php   ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php echo $totalbastlk2010tambah ?></td>		
               </tr>

               <tr>
                 <td class="left">Kelompok 54</td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk2010163 ?></td><td><?php echo $totalbastlk2010101 ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php   ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php echo $totalbastlk2010tambah ?></td>
               </tr>

               <tr>
                 <td class="left">Kelompok 101</td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk2010163 ?></td><td><?php echo $totalbastlk2010101 ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php   ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php echo $totalbastlk2010tambah ?></td>
               </tr>


               <tr>
                 <td class="left">Kelompok Mutasi2011</td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk2010163 ?></td><td><?php echo $totalbastlk2010101 ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php   ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php echo $totalbastlk2010tambah ?></td>
               </tr>

               <tr>
                 <td class="left">BAST Penambahan</td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk201054; ?></td><td><?php echo $totalbastlk2010163 ?></td><td><?php echo $totalbastlk2010101 ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php   ?></td><td><?php echo $totalbastlk2010mutasi ?></td><td><?php echo $totalbastlk2010tambah ?></td>
               </tr>



               <thead>
                 <tr>
                   <td class="left"><?php ?></td>
                   <td class="center"><?php  echo $totalbastlk2010 ?></td>
                   <td class="right"><?php  ?></td>
                   <td class="center"><?php  ?></td>
                   <td class="left"><?php ?></td>
                   <td class="left"><?php  ?></td>
                   <td class="center"><?php  ?></td>
                   <td class="center"><?php  ?></td>
                   <td class="left"><?php ?></td>
                   
                   

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