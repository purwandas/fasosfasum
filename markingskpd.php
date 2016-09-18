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
      <h1><img src="view/image/home.png" alt="" /> Marking SKPD </h1>
      <P align=right><span>
       <a target="_blank" href="print.php" ></li>
         <img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
         <a target="_blank" href="print.php">
           Print this page
         </a></span>

       </div>

       <div class="content">

        <div class="latest">
          <div class="dashboard-heading">Data Peruntukan</div>
          <div class="dashboard-content">

            <form method="post" action="" name="form1" id="form1" >
              <b>Masukan Kata Pencarian berikut :</b><br><br>   
              <b>Kata Pencarian  </b> <input type="text" name="term" />
              <input type="submit" name="submit2" value="Cari"/><br/>
              <br>
            </form><br>
            <table class="list" cellpadding="5" cellspacing="5">

              <thead>
                
                <tr>
                  <td class="center">NO.</td>        	
                  <td class="center">NO BAST</td>
                  <td class="center">TGL.BAST</td>
                  <td class="center">ALAMAT</td>
                  <td class="center">KELURAHAN</td>
                  <td class="center">KECAMATAN</td>
                  <td class="center">WILAYAH</td>
                  <td class="center">PERUNTUKAN</td>
                  <td class="center">VOLUME</td>
                  <td class="center">SATUAN</td>
                  <td class="center">NILAI</td>
                  <td class="center">Action</td>

                  
                </tr>
              </thead>



              
              <?php
              include "koneksi.php";
              if(isset($_REQUEST['submit2'])) {

               
               $term = $_POST['term']; 
               
               $query = "SELECT * FROM akun a inner join bast b on a.nobast=b.nobast inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dataaset s on a.idaset=s.idaset inner join peruntukan p on a.idperuntukan=p.idperuntukan inner join lokasidokumen l on a.nobast=l.nobastlokasi where pengembangbast like '%$term%' or kelurahan like '%$term%' or alamataset like '%$term%' or volume like '%$term%' or deskripsi like '%$term%' or kategoriaset like '%$term%' or a.nobast like '%$term%'";

             }else


             $query = "SELECT * FROM akun a inner join dataaset s on a.idaset=s.idaset inner join peruntukan p on a.idperuntukan=p.idperuntukan ";

             // echo $query;
             $query=mysql_query($query) or die(mysql_error());


             $no = 1;
             while ($data = mysql_fetch_array($query)) {
               ?>
               <tbody>
                 <tr>
                   <td class="center"><?php echo $no; ?></td>
                   <td class="left"><?php echo $data['nobast']; ?></td>
                   <td class="left"><?php echo $data['tglbast']; ?></td>
                   <td class="left"><?php echo $data['alamataset']; ?></td>
                   <td class="left"><?php echo $data['kelurahan']; ?></td>
                   <td class="left"><?php echo $data['kecamatan']; ?></td>
                   <td class="left"><?php echo $data['wilayah']; ?></td>
                   <td class="left"><?php echo $data['deskripsi']; ?></td>
                   <td class="center"><?php echo $data['volume']; ?></td>
                   <td class="center"><?php echo $data['satuan']; ?></td>
                   <td class="left"><?php  print number_format  ($data['nilaimix'],2); ?></td>

                   <td class="center"><a href="entryskpd.php?id=<?php echo $data['idperuntukan']; ?>">Marking SKPD</a></td>
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