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
          <h1><img src="view/image/home.png" alt="" /> Irisan</h1>
          <P align=right><span>
           <a target="_blank" href="print.php" ></li>
             <img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
             <a target="_blank" href="print.php">
               Print this page
             </a></span>

           </div>

           <div class="content">
            <div class="latest">
              <div class="dashboard-heading">Pilihan</div>
              <div class="dashboard-content">

                <?php
                include "koneksi.php";
                

                ?>
                
                <form method="post" action="">

                 <table>
                   <tr><td><input type="checkbox" name="pulomas" value="1" /> Data Pulo Mas<br/></td></tr>	
                   <tr><td><input type="checkbox" name="rekon163" value="1"/>Data Rekon 163<br/></td></tr>
                   <tr><td><input type="checkbox" name="rekon54" value="1" /> Data Rekon 54<br/></td></tr>
                   <tr><td><input type="checkbox" name="rekon101" value="1" /> Data Rekon 101<br/></td></tr>
                   <tr><td><input type="checkbox" name="rekon129" value="1" /> Data Rekon 129<br/></td></tr>
                   <tr><td><input type="checkbox" name="balaikota" value="1" /> Data Balai Kota Lt.7 <br/></td></tr>
                   <tr><td><input type="checkbox" name="tp3w" value="1" /> Data TP3W <br/></td></tr>
                   <tr><td><input type="checkbox" name="lokasi58" value="1" /> Data 58<br/></td></tr>
                   <tr><td><input type="checkbox" name="dtr" value="1" /> Data DTR <br/>	</td></tr>
                   <tr><td><input type="checkbox" name="bpk357" value="1" /> Data BPK357 <br/></td></tr>
                   
                   <tr><td align="right"><input type="submit" value="Tampilkan" name="submit22"></td></tr>
                   
                 </tr>
               </table>
               
             </form> 

             

             <table class="list" cellpadding="5" cellspacing="5">

              <thead>
                <tr>
                  <td class="center">No.</td>        	
                  <td class="center">No.Dok.Acuan</td>
                  <td class="center">Tgl.Dok Acuan</td>
                  <td class="center">Kategori</td>
                  <td class="center">Pemegang Dok Acuan</td>
                  <td class="center">Keterangan</td>
                  <td class="center">ID Kategori</td>
                  <td class="center">Wilayah</td>

                  <td class="center">Action</td>
                </tr>
              </thead>
              
              <?php


              
              
              $query = mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && mutasi='0'"); 

              $no = 1;
              while ($data = mysql_fetch_array($query)) {
               ?>
               <tbody>
                 <tr>
                   <td class="center"><?php echo $no; ?></td>
                   <td class="left"><?php echo $data['nodokacuan']; ?></td>
                   <td class="left"><?php echo $data['nobast']; ?></td>
                   <td class="left"><?php echo $data['keterangan']; ?></td>
                   <td class="center"><?php echo $data['pemegangdokacuan']; ?></td>
                   <td class="left"><?php echo $data['ketdokacuan']; ?></td>
                   <td class="left"><?php echo $data['idkategori']; ?></td>
                   <td class="left"><?php echo $data['wilayah']; ?></td>
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