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
      <h1><img src="view/image/home.png" alt="" />Kecamatan</h1>
    </div>

    <div class="content">
      <div class="Latest">
        <div class="dashboard-heading">Data Kecamatan</div>
        <div class="dashboard-content">
         
          <form name="tampildatakelurahan"  method="post"  action="">
            <tr><td>Pilih Kecamatan</td><td>:</td>
              <td>
                <select name="namakecamatan">
                  <option value=0 selected>- kecamatan -</option>
                  <?php
                  include "koneksi.php";
                 // query untuk menampilkan kecamatan
                  $query = "SELECT * FROM kecamatan";
                  $hasil = mysql_query($query);
                  while ($shortir = mysql_fetch_array($hasil))
                  {
                    echo "<option value='".$shortir['namakecamatan']."'>".$shortir['namakecamatan']."</option>";
                  }
                  ?>
                </select>
              </td>
              <td align="right" colspan="6"><input type="submit" name="submit3" value="Tampilkan"/> </td>
            </tr>




            <p><a href="inputkelurahan.php" class="menu_link"> + Tambah Data Kelurahan</a></p>


            <table class="list">
             <thead>
               <tr>
                <td class=center>No.</td>        	
                <td class=center>ID</td>
                <td class=center>KELURAHAN</td>
                <td class=center>KECAMATAN</td> 
                <td class=center>WILAYAH</td>
                <td class=center>OPSI</td>
              </tr>
            </thead>

          </form>



          <?php
          if (isset($_REQUEST['submit3'])) {

            include "koneksi.php";

            $namakecamatan = $_POST['namakecamatan'];

            if ($namakecamatan == '0') {
              echo "Data Kelurahan untuk Seluruh Kecamatan";
              $query = mysql_query("select * from kelurahan");

              $no = 1;
              while ($data = mysql_fetch_array($query)) {
               ?>
               <tbody>
                 <tr>
                   <td class=center><?php echo $no; ?></td>
                   <td class=center><?php echo $data['id']; ?></td>
                   <td class=center><?php echo $data['namakelurahan']; ?></td>
                   <td class=center><?php echo $data['namakecamatan']; ?></td>
                   <td class=center><?php echo $data['wilayah']; ?></td>
                   

                   <td class=center><a href="editkelurahan.php?id=<?php echo $data['id']; ?>">Edit</a>||<a href="#">Hapus</a></td></a></td>
                 </tr>
                 <?php
                 $no++;
               }
               ?>
               
             </tr>
           </tbody>


           <?php
         } else
         echo "Data Kelurahan Kecamatan : ".$namakecamatan;

         $query = mysql_query("SELECT * FROM kelurahan WHERE namakecamatan = '$namakecamatan'");
         $no = 1;
         while ($data = mysql_fetch_array($query)) {
           ?>
           <tbody>
             <tr>
               <td class="center"><?php echo $no; ?></td>
               <td class="center"><?php echo $data['id']; ?></td>
               <td class="center"><?php echo $data['namakelurahan']; ?></td>
               <td class="center"><?php echo $data['namakecamatan']; ?></td>
               <td class="center"><?php echo $data['wilayah']; ?></td>
               

               <td align='center'><a href="editkelurahan.php?id=<?php echo $data['id']; ?>">Edit</a>||<a href="#">Hapus</a></td></a></td>
             </tr>
             <?php
             $no++;
           }
         }
         ?>

       </tr>
     </tbody>
   </table>


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