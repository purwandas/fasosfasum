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



              <form name="peruntukan" action="" method=post>
                <input type="hidden" name="id" value="<?php echo $idaset; ?>" />
                <table>
                 <tr><td><p><b>No.BAST </td><td>:</td></b><td><input type="text" name="nobast" value="<?php echo $data['nobastaset']; ?>" /></td>
                   <td><a href="viewdetailbast.php?id=<?php echo $data['nobastaset']; ?>">Lihat data klik disini</a></td>
                 </tr>
                 <tr><td><b>No.Aset</td><td>: </td></b><td><input type="text" name="noaset" value="<?php echo $data['idaset']; ?>" /></td>

                 </tr>
               </table>
               <head>
                 <script>
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


                     idrow1++;
                   }


                   function hapus1(){
                     if(idrow1>2){
                       var x=document.getElementById('datatable1').deleteRow(idrow1-1);
                       idrow1--;
                     }
                   }
                 </script></head>
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
                       </tr>
                     </thead>

                     <tbody>
                       <tr>

                         <td><input type='text' name='deskripsi[]'></td>
                         <td><select name='jenis[]'><option>Tanah</option><option>Non-Tanah</option></select></td> 
                         <td><input type='text' name='luas[]'></td>
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
                       </tr>
                     </tbody>
                   </table>

                 </div>

                 <input type=button value=Tambah name= tambah2 onclick=tambah1()><input type=button name=delete2 value=Delete onclick=hapus1()>
                 <right><input type=submit name="submit" value="Simpan"/></right>

               </form>
             </body>

             <?php
             include "koneksi.php";
             if (isset($_POST['submit'])){
              foreach($_POST['deskripsi'] as $key => $value){
                if($value){


//simpan data ke database
                  $query = mysql_query("INSERT INTO peruntukan VALUES('','".$value."','".$_POST['jenis'][$key]."','".$_POST['luas'][$key]."','".$_POST['nokrk'][$key]."','".$_POST['noimb'][$key]."','".$_POST['noblokplan'][$key]."','".$_POST['sertifikasi'][$key]."','".$_POST['pemilik'][$key]."','".$_POST['jenissertifikat'][$key]."','".$_POST['nosertifikat'][$key]."','".$_POST['masaberlaku'][$key]."','".$_POST['luassertifikat'][$key]."','".$_POST['keterangan'][$key]."','".$_POST['nobast']."','".$_POST['noaset']."')") or die(mysql_error());


                }
                echo 'Input data peruntukan berhasil .....';
              }

              mysql_connect("localhost","root","");
              mysql_select_db("phplogin");
              $waktu = gmdate("Y-m-d H:i:s", time()+60*60*7);
              $user = $_SESSION['SESS_FIRST_NAME'];
              $query = mysql_query("insert into loging values('','$user','tambah peruntukan akun nobast : ".$data['nobastaset']."','$waktu')") or die(mysql_error());
            }
            ?>


          </div>

        </div>
      </div>


      <div class="content">
        <div class="latest">
          <div class="dashboard-heading">Detail Peruntukan & BHT/Kewajiban</div>
          <div class="dashboard-content">

           <table class="list" cellpadding="5" cellspacing="5">

            <thead>
              <tr>
                <td class="center">No.</td>   
                <td class="center">ID </td>     	
                <td class="center">Peruntukan</td>
                <td class="center">Jenis</td>
                <td class="center">Volume</td>	
                <td class="center">Action</td>

              </tr>
            </thead>
            <tbody>


              <script language="JavaScript">

                function konfirmasi(){
                 var pilihan = confirm("Are you sure want to delete");
                 if(pilihan){
                  return true
                }else{
                  return false
                }
              }
            </script>

            <?php 

            include "koneksi.php";
            $id = $_GET['id'];
            $query2 = mysql_query("select * from peruntukan where idaset='$id'") or die(mysql_error());

            $no = 1;
            while ($data2 = mysql_fetch_array($query2)){
             ?>
             <input type="hidden" name="id" value="<?php echo $nobast; ?>"
             <tr>
               <td class="center"><?php echo $no; ?></td>
               <td class="left"><?php echo $data2['idperuntukan']; ?></td>
               <td class="left"><?php echo $data2['deskripsi']; ?></td>
               <td class="center"><?php echo $data2['jenis']; ?></td>
               <td class="right"><?php echo $data2['luas']; ?></td>

               <td class="center"><a href="editperuntukan.php?idperuntukan=<?php echo $data2['idperuntukan']; ?>">Edit</a>.|.<a href="hapusperuntukan.php?idperuntukan=<?php echo $data2['idperuntukan']; ?>" onClick="return konfirmasi()">Hapus</a>.|.<a href="akuntambahnilai.php?id=<?php echo $data2['idperuntukan']; ?> ">+ Akun</a>

               </td>






             </tr>
             <?php
             $no++;
           }
           ?>
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