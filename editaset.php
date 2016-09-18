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
    $(function(){
      $("#wilayah").change(function(){
        $("#kecamatan").empty();
        $("#kelurahan").empty();
        $("#kecamatan").append("<option value='' > Kecamatan </option>");
        $("#kelurahan").append("<option value='' > Kelurahan </option>");
        var wilayah=$(this).val(); 
        $.get('wilayah.php',{'nama':wilayah}, function(data){
          $.each(data,function(k,v){
            $("#kecamatan").append("<option value='" + v + "' > "+v+"</option>");
          });
        }, "json");
      });
      $("#kecamatan").change(function(){
        $("#kelurahan").empty();
        $("#kelurahan").append("<option value='' > Kelurahan </option>");
        var kecamatan=$(this).val(); 
        $.get('wilayah2.php',{'kec':kecamatan}, function(data){
          $.each(data,function(k,v){
            $("#kelurahan").append("<option value='" + v + "' > "+v+"</option>");
          });
        }, "json");
      });
    });
  </script>
</head>
<body>
  <?php
  include "koneksi.php";
  if (isset($_POST['submitaset'])){

    $id=$_POST['id'];
    $alamat= $_POST['alamat'];
    $wilayah= $_POST['wilayah'];
    $kecamatan= $_POST['kecamatan'];
    $kelurahan= $_POST['kelurahan'];
    $latitude= $_POST['latitude'];
    $longitude= $_POST['longitude'];

    $query = mysql_query("update dataaset set  alamataset='$alamat', wilayah='$wilayah',kecamatan='$kecamatan',kelurahan='$kelurahan',latitude='$latitude',longitude='$longitude' where idaset='$id'") or die(mysql_error());
//update data ke database

    if ($query) {

     echo 'simpan perbahan data aset berhasil...........';

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
        <h1><img src="view/image/home.png" alt="" /> Edit ASET</h1>
      </div>

      <div class="content">
        <div class="overview">
          <div class="dashboard-heading">Edit Data Aset</div>
          <div class="dashboard-content">

           <?php 
           include "koneksi.php";
           $id = $_GET['id'];

           $query = mysql_query("select * from dataaset where idaset='$id'") or die(mysql_error());

           $data = mysql_fetch_array($query);
           ?>

           <form name="editbast" action="" method="post" enctype="multipart/form-data">
             <input type="hidden" name="id" value="<?php echo $id; ?>" />
             <table>

              <tr>
                <td >ID Aset</td>           
                <td height="21"><input type="text" name="id" maxlength="20" required="required" value="<?php echo $data['idaset']; ?>" disabled /></td>
              </tr>

              <tr>
                <td>Alamat Aset </td>
                <td height="21"><input type="text" id="alamat" name="alamat" required="required" value="<?php echo $data['alamataset']; ?>"/>
                </td>         
              </tr>
              <tr>
                <td>Wilayah </td>
                <td>
                  <select name='wilayah' id='wilayah'>           
                    <?php
                    echo "<option >".$data['wilayah']."</option>".$data['wilayah']."</option>";
                    $queryWilayah = "SELECT * FROM wilayah";
                    $hasilWilayah = mysql_query($queryWilayah);
                    while ($dataWilayah = mysql_fetch_array($hasilWilayah))
                    {
                      echo "<option >".$dataWilayah['wilayah']."</option>".$dataWilayah['wilayah']."</option>";
                    }
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Kecamatan</td>
                <td>
                  <select name='kecamatan' id='kecamatan'>           
                    <?php
                    echo "<option >".$data['kecamatan']."</option>".$data['kecamatan']."</option>";
                    $queryKecamatan = "SELECT * FROM kecamatan";
                    $hasilKecamatan = mysql_query($queryKecamatan);
                    while ($dataKecamatan = mysql_fetch_array($hasilKecamatan))
                    {
                      echo "<option >".$dataKecamatan['namakecamatan']."</option>".$dataKecamatan['namakecamatan']."</option>";
                    }
                    ?>
                  </select>
                </td> 
              </tr> 


              <tr>
                <td>Kelurahan</td>
                <td>
                  <select name='kelurahan' id='kelurahan'>           
                    <?php
                    echo "<option >".$data['kelurahan']."</option>".$data['kelurahan']."</option>";
                    $queryKelurahan = "SELECT * FROM kelurahan";
                    $hasilKelurahan = mysql_query($queryKelurahan);
                    while ($dataKelurahan = mysql_fetch_array($hasilKelurahan))
                    {
                      echo "<option >".$dataKelurahan['namakelurahan']."</option>".$dataKelurahan['namakelurahan']."</option>";
                    }
                    ?>
                  </select>
                </td> 
              </tr>  
              <tr>
                <td>Latitude </td>
                <td><input type="text" name="latitude" maxlength="40" required="required" value="<?php echo $data['latitude']; ?>"/></td>
              </tr>

              <tr>
                <td>Longitude</td>
                <td><input type="text" name="longitude" maxlength="40" required="required" value="<?php echo $data['longitude']; ?>"/></td>
              </tr>
              
              <tr>
                <td align="right" colspan="2"><input type="submit" name="submitaset" value="Simpan Perubahan"> </td>
              </tr>

            </table>
          </form>

        </div>
      </div>



    </div>
    <div class="latest">
      <div class="dashboard-heading">Data Peruntukan & BHT/Kewajiban</div>
      <div class="dashboard-content">


       <div style="margin-right:100px;float:right">
        <script type="text/javascript">
          function submit() {
            document.getElementById("kwjb").submit();
          }
        </script>
        <form method="get" name='kwjb'>
          <input type="hidden" name="id" value="<?php echo $id; ?>" />
          <table>
           <tr>
             <td style="background-color:#E4F1FE">
               Pilih
             </td>
             <td  style="background-color:#E4F1FE">
               Deskripsi
             </td>
             <td  style="background-color:#E4F1FE">
               Jenis Fasos Fasum
             </td>
             <td  style="background-color:#E4F1FE">
               Luas
             </td>
           </tr>
           <?php
           $query=mysql_query("select nodokacuan from bast where nobast='$data[nobastaset]'");
           $d1=mysql_fetch_array($query);
           $nodokacuan=$d1['nodokacuan'];
           $query=mysql_query("select idaset,idperuntukan,deskripsi,jenisfasos,luas,nobast from peruntukan where nodokacuan='$d1[nodokacuan]' and (nobast='' or idaset='$_GET[id]')");
           $idx=0;

           while ($d2=mysql_fetch_array($query)) {
            $ckd="";
            if(isset($_GET["wjb$d2[idperuntukan]"])){
              $ckd="checked";
              $peruntukan[$idx]=$_GET["wjb$d2[idperuntukan]"];
              $idx++;
            }else if($data['idaset']==$d2['idaset'] && !isset($_GET['cek'])){
              $ckd="checked";
              $peruntukan[$idx]=$d2['idperuntukan'];
              $idx++;
            }
            echo"
            <tr>
             <td>
               <input type='checkbox' $ckd name='wjb$d2[idperuntukan]' onclick='submit()' value='$d2[idperuntukan]'>
             </td>
             <td>
               $d2[deskripsi]
             </td>
             <td>
               $d2[jenisfasos]
             </td>
             <td>
               $d2[luas]
             </td>
           </tr>
           ";
         }

         ?>
       </table>
       <div  align=right><a href="editsippt.php?nodokacuan=<?php echo $nodokacuan; ?>" target="_blank">*Lihat data kewajiban?</a></div>
               <input type='hidden' name=cek value=1>

     </form>
   </div>
   <form name="peruntukan" action="" method=post>
    <input type="hidden" name="nodokacuan" value='<?php echo "$d1[nodokacuan]";?>' />
    <input type="hidden" name="id" value="<?php echo $idaset; ?>" />
    <div style="float:left">
      <table>
       <tr><td><b>No.BAST </b></td><td>:</td><td><input type="text" name="nobast" value="<?php echo $data['nobastaset']; ?>" /></td>
         <td><a href="viewdetailbast.php?id=<?php echo $data['nobastaset']; ?>">Lihat data klik disini</a></td>
       </tr>
       <tr><td><b>No.Aset</b></td><td>: </td><td><input type="text" name="noaset" value="<?php echo $data['idaset']; ?>" /></td>
       </tr>
     </table>
   </div>

   <body>



    <br>
    <div style="width:100%; height:auto;overflow:auto;">  
     <table class="list" id=datatable1  border="1" >
       <thead>
         <tr>
           <td class="center">Peruntukan</td>
           <td class="center">Jenis</td>
           <td class="center">Luas Kwjbn (M2)</td>
           <td class="center">No.KRK</td>
           <td class="center">No.IMB</td>
           <td class="center">No.BlokPlan</td>
           <td class="center">Sertifikasi</td>
           <td class="center">Pemilik</td>
           <td class="center">Jenis Sertifikasi</td>
           <td class="center">No.Sertifikat</td>
           <td class="center">Masa Berlaku</td>
           <td class="center">Luas Stfkt (M2)</td>
           <td class="center">Keterangan</td>
           <td class="center">Status Sertifikat</td>
           <td class="center">Status Plang</td>
           <td class="center">Status Penggunaan</td>
           <td class="center">Sensus Fasos</td>
           <td class="center">Jenis Fasos</td>
         </tr>
       </thead>

       <tbody>
         <?php
         if(isset($peruntukan))
           foreach ($peruntukan as $key => $value) 
           {
            $query=mysql_query("select * from peruntukan where idperuntukan='$value'");
            $d3=mysql_fetch_array($query);
            ?>
            <tr>

             <td><input type='hidden' name='idperuntukan[]'<?php echo"value='$value'";?> >
              <input type='text' name='deskripsi[]'<?php echo"value='$d3[deskripsi]'";?> >
            </td>
            <td><select name='jenis[]'><?php echo"<option value='$d3[jenis]'>$d3[jenis]</option>"; ?><option value='Tanah'>Tanah</option><option value='Non-Tanah'>Non-Tanah</option></select></td> 
            <td><input type='text' name='luas[]' <?php echo"value='$d3[luas]'";?> ></td>
            <td><input type='text' name='nokrk[]' <?php echo"value='$d3[nokrk]'";?> ></td>
            <td><input type='text' name='noimb[]' <?php echo"value='$d3[noimb]'";?> ></td>
            <td><input type='text' name='noblokplan[]' <?php echo"value='$d3[noblokplan]'";?> ></td>
            <td><select name='sertifikasi[]'><?php echo"<option value='$d3[sertifikasi]'>$d3[sertifikasi]</option>"; ?><option>Non-Sertifikat</option><option>Sertifikat</option></select></td>
            <td><input type='text' name='pemilik[]' <?php echo"value='$d3[pemilik]'";?> ></td>
            <td><select name='jenissertifikat[]'><?php echo"<option value='$d3[jenissertifikat]'>$d3[jenissertifikat]</option>"; ?><option>Non-Sertifikat</option><option>SHM</option><option>HGB</option><option>DKI</option></select></td>
            <td><input type='text' name='nosertifikat[]' <?php echo"value='$d3[nosertifikat]'";?> ></td>
            <td><input type='text' name='masaberlaku[]' <?php echo"value='$d3[masaberlaku]'";?> ></td>
            <td><input type='text' name='luassertifikat[]' <?php echo"value='$d3[luassertifikat]'";?> ></td>   
            <td><input type='text' name='keterangan[]' <?php echo"value='$d3[keterangan]'";?> ></td>
            <td>
              <select name='statussertifikat[]'>
                <?php
                echo"
                <option value='$d3[statussertifikat]'>$d3[statussertifikat]</option>
                ";
                $query=mysql_query("select display from ref_statussertifikat order by id desc");
                while ($dss=mysql_fetch_array($query)) {
                 echo"
                 <option value='$dss[display]'>
                   $dss[display]
                 </option>
                 ";
               }
               ?>
             </select>
           </td>
           <td>
            <select name='statusplang[]'>
              <?php
              echo"
              <option value='$d3[statusplang]'>$d3[statusplang]</option>
              ";
              $query=mysql_query("select display from ref_statusplangaset order by id desc");
              while ($dss=mysql_fetch_array($query)) {
               echo"
               <option value='$dss[display]'>
                 $dss[display]
               </option>
               ";
             }
             ?>
           </select>
         </td>
         <td>
          <select name='statuspenggunaan[]'>
            <?php
            echo"
            <option value='$d3[statuspenggunaan]'>$d3[statuspenggunaan]</option>
            ";
            $query=mysql_query("select display from ref_statuspenggunaanfasosfasum order by id desc");
            while ($dss=mysql_fetch_array($query)) {
             echo"
             <option value='$dss[display]'>
               $dss[display]
             </option>
             ";
           }
           ?>
         </select>
       </td>
       <td>
        <select name='sensusfasos[]'>
          <?php
          echo"
          <option value='$d3[sensusfasos]'>$d3[sensusfasos]</option>
          ";
          $query=mysql_query("select display from ref_sensusfasosfasum order by id desc");
          while ($dss=mysql_fetch_array($query)) {
           echo"
           <option value='$dss[display]'>
             $dss[display]
           </option>
           ";
         }
         ?>
       </select>
     </td>
     <td>
      <select name='jenisfasos[]'>
        <?php
        echo"
        <option value='$d3[jenisfasos]'>$d3[jenisfasos]</option>
        ";
        $query=mysql_query("select display from ref_jenisfasosfasum order by id desc");
        while ($dss=mysql_fetch_array($query)) {
         echo"
         <option value='$dss[display]'>
           $dss[display]
         </option>
         ";
       }
       ?>
     </select>
   </td>
   <?php
 }
 ?>
</tr>
</tbody>
</table>

</div>

<!-- <input type=button value=Tambah name= tambah2 onclick=tambah1()><input type=button name=delete2 value=Delete onclick=hapus1()> -->
<right><input type=submit name="submit" value="Simpan"/></right>

</form>
</body>

<?php
include "koneksi.php";
if (isset($_POST['submit'])){
  foreach($_POST['deskripsi'] as $key => $value){
    if($value){

      $query="UPDATE `peruntukan` SET deskripsi='$value', jenis='".$_POST['jenis'][$key]."', luas='".$_POST['luas'][$key]."', nokrk = '".$_POST['nokrk'][$key]."', noimb='".$_POST['noimb'][$key]."', noblokplan='".$_POST['noblokplan'][$key]."', sertifikasi='".$_POST['sertifikasi'][$key]."', pemilik='".$_POST['pemilik'][$key]."', jenissertifikat='".$_POST['jenissertifikat'][$key]."', nosertifikat='".$_POST['nosertifikat'][$key]."', masaberlaku='".$_POST['masaberlaku'][$key]."', luassertifikat='".$_POST['luassertifikat'][$key]."', keterangan='".$_POST['keterangan'][$key]."', nobast='".$_POST['nobast']."', idaset='".$_POST['noaset']."', statussertifikat='".$_POST['statussertifikat'][$key]."', statusplang='".$_POST['statusplang'][$key]."', statuspenggunaan='".$_POST['statuspenggunaan'][$key]."', sensusfasos='".$_POST['sensusfasos'][$key]."', jenisfasos='".$_POST['jenisfasos'][$key]."' WHERE `idperuntukan` ='".$_POST['idperuntukan'][$key]."'";

      // echo $query;
      $query = mysql_query($query) or die(mysql_error());


    }
    echo 'Input data peruntukan berhasil .....';
  }

  mysql_connect("localhost","root","");
  mysql_select_db("phplogin");
  $waktu = gmdate("Y-m-d H:i:s", time()+60*60*7);
  $user = $_SESSION['SESS_FIRST_NAME'];
  $query = mysql_query("insert into loging values('','$user','entry peruntukan akun nobast : ".$data['nobastaset']."','$waktu')") or die(mysql_error());
}
?>



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