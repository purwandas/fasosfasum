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
      <h1><img src="view/image/home.png" alt="" /> Edit Dokumen Acuan</h1>
    </div>

    <div class="content">
      <div class="overview">
        <div class="dashboard-heading">Detail</div>
        <div class="dashboard-content">

         <?php 
         include "koneksi.php";
         $id = $_GET['nodokacuan'];

         $query = mysql_query("select * from detaildokacuan where nodokacuan='$id'") or die(mysql_error());

         $data = mysql_fetch_array($query);
         ?>

         <form name="editdokumenacuan" action="" method="post">
           <input type="hidden" name="id" value="<?php echo $id; ?>" />
           <table>

            <tr>
             <td >Kode Jenis Dokumen Acuan </td>           
             <td height="21"><input type="text" name="idkategori" maxlength="20" required="required" value="<?php echo $data['idkategori']; ?>" ></td>
           </tr>

           <tr>
             <td >No.Dokumen </td>           
             <td height="21"><input type="text" name="nodokacuan" maxlength="20" required="required" value="<?php echo $data['nodokacuan']; ?>" disabled /></td>
           </tr>

           <tr>
            <td>Tgl. Dokumen </td>
            <td height="21"><input type="text" id="tgldokacuan" name="tgldokacuan" maxlength="10" required="required" value="<?php echo $data['tgldokacuan']; ?>"/>
            </td>         
          </tr>
          <td>Pemegang Dokumen </td>
          <td><input type="text" name="pemegangdokacuan" maxlength="40" required="required" value="<?php echo $data['pemegangdokacuan']; ?>"/></td>
        </tr>

        <tr>
          <td>Perihal</td>
          <td><textarea name=haldokacuan rows=1 cols=30 required="required"/><?=$data['haldokacuan'] ?> </textarea></td> 
        </tr> 


        <tr>
          <td>Keterangan</td>
          <td><textarea name=ketdokacuan rows=1 cols=30 required="required"/><?=$data['ketdokacuan'] ?> </textarea></td> 
        </tr>  
        <tr>



          <td align="right" colspan="2"><input type="submit" name="submit" value="Simpan Perubahan"> </td>
        </tr>

      </table>
    </form>

  </div>
</div>
<div class="overview">
  <div class="dashboard-heading">Data Kewajiban</div>
  <div class="dashboard-content">
    <form name="inputlokasiaset" action="" method="post">
      No.Dokumen Acuan :  <input type="text" name="nodokacuan2" value="<?php echo $id; ?>"/>  
      



      <body>

        <br><p>
        <div style=" width:20; height:110px;overflow:auto;">

          <table class="list" id=datatable >
            <thead>
              <tr>
                <td class="center">Deskripsi</td>
                <td class="center">Jenis Fasos Fasum</td>
                <td class="center">Luas</td>
              </tr>
            </thead>

            <tbody>
              <?php
              $row=1;
              $query0=mysql_query("select deskripsi, jenisfasos, luas from peruntukan where nodokacuan='$id'");
              while ($d0=mysql_fetch_array($query0)) {
                $row++;
                echo"
                <tr>
                  <td><input type='text' name='deskripsi[]' value='$d0[deskripsi]'></td>
                  <td><select name='jenisfasos[]'>
                    <option value='$d0[jenisfasos]'>$d0[jenisfasos]</option>
                    ";
                    $query = "SELECT * FROM ref_jenisfasosfasum";
                    $hasil = mysql_query($query);
                    while ($data = mysql_fetch_array($hasil))
                    {
                      echo "<option >".$data['display']."</option>".$data['display']."</option>";
                    }
                    echo"
                  </select></td>

                  <td><input type='number' name='luas[]' value='$d0[luas]'></td>         
                </tr>
                ";
              }
              ?>
            </tbody>
          </table>
        </div>
        <br>
        <input type=button name=tambah1 value=Tambah onclick=tambah()><input type=button name=delete1 value=Delete onclick=hapus()>
        <right><input type="submit" name="submit2" value="Simpan Data Kewajiban"/></right> 
        <script>
          var idrow = <?php echo $row; ?>;

          function tambah(){
            var x=document.getElementById('datatable').insertRow(idrow);
            var td1=x.insertCell(0);
            var td2=x.insertCell(1);
            var td3=x.insertCell(2);



            td1.innerHTML="<input type='text' name='deskripsi[]'>";
            td2.innerHTML="<select name='jenisfasos[]'>           <?php
            include "koneksi.php";
            $query = "SELECT * FROM ref_jenisfasosfasum";
            $hasil = mysql_query($query);
            while ($data = mysql_fetch_array($hasil))
            {
              echo "<option >".$data['display']."</option>".$data['display']."</option>";
            }
            ?></select>";

            td3.innerHTML="<input type='number' name='luas[]'>";

            idrow++;
          }


          function hapus(){
           if(idrow><?php echo $row; ?>){
             var x=document.getElementById('datatable').deleteRow(idrow-1);
             idrow--;
           }
         }

       </script>

     </body>

   </div>

 </form>
</div>
</div>


<?php
include "koneksi.php";
if (isset($_POST['submit'])){


  $tgldokacuan= $_POST['tgldokacuan'];
  $haldokacuan= $_POST['haldokacuan'];
  $pemegangdokacuan= $_POST['pemegangdokacuan'];
  $ketdokacuan= $_POST['ketdokacuan'];




//update data ke database
  $query = mysql_query("update detaildokacuan set  tgldokacuan='$tgldokacuan', haldokacuan='$haldokacuan',pemegangdokacuan='$pemegangdokacuan',ketdokacuan='$ketdokacuan' where nodokacuan='$id'") or die(mysql_error());

  if ($query) {

   echo 'simpan perbahan dokumen acuan berhasil...........';

 }
}
if (isset($_POST['submit2'])){
 $nodokacuan2=$_POST['nodokacuan2'];
 if(!$_POST){  
  die('Tidak ada data yang disimpan!');  
}  

    //menyimpan data ke tabel dataaset
foreach($_POST['deskripsi'] as $key => $deskripsi){  
  if($deskripsi){
    $sql = "update peruntukan set deskripsi='{$deskripsi}',jenisfasos='{$_POST['jenisfasos'][$key]}',luas='{$_POST['luas'][$key]}' where nodokacuan='$nodokacuan2';";  
    mysql_query($sql); 
   // echo $sql; 
  } 
}
echo 'Data telah disimpan';  
}
?>

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