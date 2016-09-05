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
          <h1><img src="view/image/home.png" alt="" />SIPPT vs BAST</h1>
        </div>

        <div class="content">
          


          <div class="latest">
            <div class="dashboard-heading">Data SIPPT vs BAST</div>
            <div class="dashboard-content">





             <?php
             include "koneksi.php";

             ?>

             <table cellpadding="5" cellspacing="0" border="1">

              <tr>
               <td>NO.</td>
               <td>NO.SIPPT</td>
               <td>TGL.SIPPT</td>
               <td>PEMEGANG SIPPT</td>
               <td>KETERANGAN</td>
               <td>LAIN-LAIN</td>
             </tr>



             <?php 
             $no = 1;
             $result = mysql_query("select * from detaildokacuan");
             while($dokacuan = mysql_fetch_array($result)){
               ?>
               <tr>

                <td><?php echo $no;?></td>
                <td><?php echo $dokacuan['nodokacuan'];?></td>
                <td><?php echo $dokacuan['tgldokacuan'];?></td>
                <td><?php echo $dokacuan['pemegangdokacuan'];?></td>	
                <td><?php echo $dokacuan['ketdokacuan'];?></td>
                <td><?php echo $dokacuan['haldokacuan'];?></td>

              </tr>
              <tr>
               

                <td colspan="6">
                  <strong>Data BAST: </strong>
                  <table   width="800">
                   
                    <tr bgcolor="grey">
                      
                      <td align='center' style="border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000; border-left:1px solid #000">NO.</td>
                      <td align='center' style="border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000">NO.BAST</td>
                      <td align='center' style="border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000">TGL.BAST</td>
                      <td align='center' style="border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000" >PENGEMBANG</td>
                      <td align='center' style="border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000">PERIHAL</td>
                      <td align='center' style="border-bottom:1px solid #000;border-top:1px solid #000; border-right:1px solid #000">KETERANGAN</td>
                    </tr>
                    
                    

                    <?php
                    $nmr=1;
                    $rows = mysql_query("select * from bast where nodokacuan='".$dokacuan['nodokacuan']."'");
                    while($bast = mysql_fetch_array($rows)){
                      ?>
                      <tr>
                        <td align='center'style="border-bottom:1px solid #000; border-right:1px solid #000; border-left:1px solid #000"><?php echo $nmr;?></td>
                        <td style="border-bottom:1px solid #000; border-right:1px solid #000"><?php echo $bast['nobast'];?></td>
                        <td style="border-bottom:1px solid #000; border-right:1px solid #000"><?php echo $bast['tglbast'];?></td>
                        <td style="border-bottom:1px solid #000; border-right:1px solid #000"><?php echo $bast['pengembangbast'];?></td>
                        <td style="border-bottom:1px solid #000; border-right:1px solid #000"><?php echo $bast['perihalbast'];?></td>
                        <td style="border-bottom:1px solid #000; border-right:1px solid #000"><?php echo $bast['keterangan'];?></td>
                      </tr>
                      <?php $nmr++;}?>
                    </table><br>

                  </td>
                </tr>


                <?php $no++;}?>
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