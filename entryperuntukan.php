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

      <?php 
      include "koneksi.php";
      $id = $_GET['id'];

      $query = mysql_query("select * from dataaset where idaset='$id'") or die(mysql_error());

      $data = mysql_fetch_array($query);
      ?>

      <div class="breadcrumb">
        <a href="home.php">Home</a>

      </div>
      <div class="box">
        <div class="heading">
          <h1><img src="view/image/home.png" alt="" />Tambah Data Peruntukan (akun)</h1>
        </div>

        <div class="content">
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
                  $query=mysql_query("select idperuntukan,deskripsi,jenisfasos,luas from peruntukan where nodokacuan='$d1[nodokacuan]'");
                  $idx=0;

                  while ($d2=mysql_fetch_array($query)) {
                    $ckd="";
                    if(isset($_GET["wjb$d2[idperuntukan]"])){
                      $ckd="checked";
                      $peruntukan[$idx]=$_GET["wjb$d2[idperuntukan]"];
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
               <head>
                 <!-- <script>
                   var idrow1 = 2;

                   function tambah1(){
                     var x=document.getElementById('datatable1').insertRow(idrow1);
                     var td1=x.insertCell(0);
                     var td2=x.insertCell(1);
                     var td3=x.insertCell(2);
                     var td4=x.insertCell(3);
                     var td5=x.insertCell(4);
                     var td6=x.insertCell(5);
                     var td7=x.insertCell(6);
                     var td8=x.insertCell(7);
                     var td9=x.insertCell(8);
                     var td10=x.insertCell(9);
                     var td11=x.insertCell(10);
                     var td12=x.insertCell(11);
                     var td13=x.insertCell(12);
                     var td14=x.insertCell(13);
                     var td15=x.insertCell(14);
                     var td16=x.insertCell(15);
                     var td17=x.insertCell(16);
                     var td18=x.insertCell(17);



                     td1.innerHTML="<input type='text' name='deskripsi[]'>";
                     td2.innerHTML="<select name='jenis[]'><option>Tanah</option><option>Non-Tanah</option></select>"; 
                     td3.innerHTML="<input type='text' name='luas[]'>";
                     td4.innerHTML="<input type='text' name='nokrk[]'>";
                     td5.innerHTML="<input type='text' name='noimb[]'>";
                     td6.innerHTML="<input type='text' name='noblokplan[]'>";
                     td7.innerHTML="<select name='sertifikasi[]'><option>Non-Sertifikat</option><option>Sertifikat</option></select>"; 
                     td8.innerHTML="<input type='text' name='pemilik[]'>";
                     td9.innerHTML="<select name='jenissertifikat[]'><option>Non-Sertifikat</option><option>SHM</option><option>HGB</option><option>DKI</option></select>";
                     td10.innerHTML="<input type='text' name='nosertifikat[]'>";
                     td11.innerHTML="<input type='text' name='masaberlaku[]'>";
                     td12.innerHTML="<input type='text' name='luassertifikat[]'>";    
                     td13.innerHTML="<input type='text' name='keterangan[]'>";

                     td14.innerHTML="<select name='statussertifikat[]'> <?php
                     $query=mysql_query("select display from ref_statussertifikat order by id desc");
                     while ($dss=mysql_fetch_array($query)) {
                       echo "<option value='".$dss['display']."'>".$dss['display']."</option>";
                     }
                     ?> </select>";
                     td15.innerHTML="<select name='statusplang[]'> <?php
                     $query=mysql_query("select display from ref_statusplangaset order by id desc");
                     while ($dss=mysql_fetch_array($query)) {
                       echo "<option value='".$dss['display']."'>".$dss['display']."</option>";
                     }
                     ?> </select>";
                     td16.innerHTML="<select name='statuspenggunaan[]'> <?php
                     $query=mysql_query("select display from ref_statuspenggunaanfasosfasum order by id desc");
                     while ($dss=mysql_fetch_array($query)) {
                       echo "<option value='".$dss['display']."'>".$dss['display']."</option>";
                     }
                     ?> </select>"; 
                     td17.innerHTML="<select name='sensusfasos[]'> <?php
                     $query=mysql_query("select display from ref_sensusfasosfasum order by id desc");
                     while ($dss=mysql_fetch_array($query)) {
                       echo "<option value='".$dss['display']."'>".$dss['display']."</option>";
                     }
                     ?> </select>";
                     td18.innerHTML="<select name='jenisfasos[]'> <?php
                     $query=mysql_query("select display from ref_jenisfasosfasum order by id desc");
                     while ($dss=mysql_fetch_array($query)) {
                       echo "<option value='".$dss['display']."'>".$dss['display']."</option>";
                     }
                     ?> </select>";  



                     idrow1++;
                   }


                   function hapus1(){
                     if(idrow1>2){
                       var x=document.getElementById('datatable1').deleteRow(idrow1-1);
                       idrow1--;
                     }
                   }
                 </script> --></head>
                 <body>



                  <br>
                  <div style="width:1132px; height:350px;overflow:auto;">  
                   <table class="list" id=datatable1 width="800" border="1" >
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
                      $query=mysql_query("select idperuntukan,deskripsi,jenisfasos,luas from peruntukan where idperuntukan='$value'");
                      $d3=mysql_fetch_array($query);
                     ?>
                       <tr>

                         <td><input type='hidden' name='idperuntukan[]'<?php echo"value='$value'";?> >
                            <input type='text' name='deskripsi[]'<?php echo"value='$d3[deskripsi]'";?> >
                         </td>
                         <td><select name='jenis[]'><option>Tanah</option><option>Non-Tanah</option></select></td> 
                         <td><input type='text' name='luas[]' <?php echo"value='$d3[luas]'";?> ></td>
                         <td><input type='text' name='nokrk[]'></td>
                         <td><input type='text' name='noimb[]'></td>
                         <td><input type='text' name='noblokplan[]'></td>
                         <td><select name='sertifikasi[]'><option>Non-Sertifikat</option><option>Sertifikat</option></select></td>
                         <td><input type='text' name='pemilik[]'></td>
                         <td><select name='jenissertifikat[]'><option>Non-Sertifikat</option><option>SHM</option><option>HGB</option><option>DKI</option></select></td>
                         <td><input type='text' name='nosertifikat[]'></td>
                         <td><input type='text' name='masaberlaku[]'></td>
                         <td><input type='text' name='luassertifikat[]'></td>   
                         <td><input type='text' name='keterangan[]'></td>
                         <td>
                          <select name='statussertifikat[]'>
                            <?php
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
        // "INSERT INTO peruntukan VALUES('','".$value."','".$_POST['jenis'][$key]."','".$_POST['luas'][$key]."','".$_POST['nokrk'][$key]."','".$_POST['noimb'][$key]."','".$_POST['noblokplan'][$key]."','".$_POST['sertifikasi'][$key]."','".$_POST['pemilik'][$key]."','".$_POST['jenissertifikat'][$key]."','".$_POST['nosertifikat'][$key]."','".$_POST['masaberlaku'][$key]."','".$_POST['luassertifikat'][$key]."','".$_POST['keterangan'][$key]."','".$_POST['nobast']."','".$_POST['noaset']."')"
//simpan data ke database
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
<!--[if IE]>
<script type="text/javascript" src="view/javascript/jquery/flot/excanvas.js"></script>
<![endif]--> 

</div>
<div id="footer"><a href="http://www.dineshjay.co.id">dinesh consultant</a> &copy; 2009-2012 All Rights Reserved.<br />Version 1.0</div>
</body></html>