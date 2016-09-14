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
  <?php
  include "koneksi.php";
  if (isset($_POST['submit'])){

    include("config_dir.php");
    $nama=mysql_fetch_array(mysql_query("select * from upload order by id desc"));
    $ext=end(explode('.', $nama['nama_file']));      
    $namanya=basename($nama['nama_file'],".".$ext);
    // echo $namanya;
    $namabaru=incrementName($namanya);
    $ext=end(explode('.', $_FILES['fileacuan']['name']));
    $target_file = $target_dir . "$namabaru.".$ext;
    $id=$_POST['id'];
    $tglbast= $_POST['tglbast'];
    $perihalbast= $_POST['perihalbast'];
    $pengembangbast= $_POST['pengembangbast'];
    $keterangan= $_POST['keterangan'];
    $kodearsip= $_POST['kodearsip'];
    $nodokacuan= $_POST['nodokacuan'];

    if (move_uploaded_file($_FILES["fileacuan"]["tmp_name"], $target_file)) {
      $namafile=$_FILES['fileacuan']['name'];
      if($id!=''){
        $dupload=mysql_query("delete from upload where nobast='$id'");
      }
      $upload=mysql_query("INSERT INTO `upload` (`id`, `nama_asli`, `nama_file`, `path`, `nodokacuan`, `nobast`) VALUES ('', '$namafile', '$namabaru.$ext', '$target_dir', '', '$id');");
      $query = mysql_query("update bast set  tglbast='$tglbast', perihalbast='$perihalbast',pengembangbast='$pengembangbast',keterangan='$keterangan',kodearsip='$kodearsip',nodokacuan='$nodokacuan' where nobast='$id'") or die(mysql_error());
      echo "The file <a href='$target_dir$namabaru.$ext'>". basename( $_FILES["fileacuan"]["name"]). "</a> has been uploaded.";
    } else {
      echo "$target_file";
      echo "Sorry, there was an error uploading your file.";
    }
//update data ke database

    if ($query) {

     echo 'simpan perbahan data bast berhasil...........';

   }
 }
 ?>
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
        <h1><img src="view/image/home.png" alt="" /> Edit BAST</h1>
      </div>

      <div class="content">
        <div class="overview">
          <div class="dashboard-heading">Edit Data BAST</div>
          <div class="dashboard-content">

           <?php 
           include "koneksi.php";
           $id = $_GET['id'];

           $query = mysql_query("select * from bast where nobast='$id'") or die(mysql_error());

           $data = mysql_fetch_array($query);
           ?>

           <form name="editbast" action="" method="post" enctype="multipart/form-data">
             <input type="hidden" name="id" value="<?php echo $id; ?>" />
             <table>

              <tr>
                <td >No.BAST</td>           
                <td height="21"><input type="text" name="nobast" maxlength="20" required="required" value="<?php echo $data['nobast']; ?>" disabled /></td>
              </tr>

              <tr>
                <td>Tgl. BAST </td>
                <td height="21"><input type="text" id="tglbast" name="tglbast" maxlength="10" required="required" value="<?php echo $data['tglbast']; ?>"/>
                </td>         
              </tr>
              <tr>
                <td>Nama Pengembang </td>
                <td><input type="text" name="pengembangbast" maxlength="40" required="required" value="<?php echo $data['pengembangbast']; ?>"/></td>
              </tr>
              <tr>
                <td>Perihal</td>
                <td><textarea name=perihalbast rows=1 cols=30 required="required"/><?=$data['perihalbast'] ?> </textarea></td> 
              </tr> 


              <tr>
                <td>Kategori</td>
                <td><textarea name=keterangan rows=1 cols=30 required="required"/><?=$data['keterangan'] ?> </textarea></td> 
              </tr>  
              <tr>
                <td>No.Dokumen Acuan </td>
                <td><input type="text" name="nodokacuan" maxlength="40" required="required" value="<?php echo $data['nodokacuan']; ?>"/></td>
              </tr>

              <tr>
                <td>Kode Arisp </td>
                <td><input type="text" name="kodearsip" maxlength="40" required="required" value="<?php echo $data['kodearsip']; ?>"/></td>
              </tr>
              <tr>
                <td>File Acuan </td>
                <td>
                 <?php 
                 $qr="select nama_asli,nama_file,path from upload where nobast='$data[nobast]'";
                 $qp=mysql_query($qr);
                 while ($dq=mysql_fetch_array($qp)) {
                  echo"
                  <a href='download.php?type=b&id=$data[nobast]'>$dq[nama_asli]</a>
                  ";
                }
                ?>
                <br>
                <input type="file" name="fileacuan">
              </td>
            </tr>
            <tr>
              <td align="right" colspan="2"><input type="submit" name="submit" value="Simpan Perubahan"> </td>
            </tr>

          </table>
        </form>

      </div>
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