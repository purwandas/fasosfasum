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
          <h1><img src="view/image/home.png" alt="" />Detail Dokumen</h1>
          <?php include "koneksi.php"; 
          include 'config_dir.php';
          $id = $_GET['id'];

          $query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dataaset a on b.nobast=a.nobastaset where nobast='$id'") or die(mysql_error());
          $data = mysql_fetch_array($query);
          ?>

          <P align=right><span>

            <a><img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
            <a target="_blank" href="pdfdetail.php?id=<?php echo $data['nobast']; ?>">
              Print this page
            </a></span>

          </div>
          <div class="content">

           <?php 
           include "koneksi.php";
           $id = $_GET['id'];
           $query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dataaset a on b.nobast=a.nobastaset where nobast='$id'") or die(mysql_error());
           $data = mysql_fetch_array($query);
           ?>

           <div class="statistic">
            <div class="dashboard-heading">Detail BAST</div>
            <div class="dashboard-content">
             
              <table>
                
                <tr>
                  <td>No.BAST </td><td>: </td><td><?php echo $data['nobast']; ?></td><td><a href="editbast.php?id=<?php echo $data['nobast']; ?>">[ Edit ]</a></td>

                </tr>
                <tr><td>Tgl. BAST </td><td>: </td><td><?php echo $data['tglbast']; ?></td>
                </tr>
                <tr>
                  <td>Pengembang </td><td>: </td><td><?php echo $data['pengembangbast']; ?></td>
                </tr>
                <tr>
                  <td>Perihal</td><td>:</td><td><?php echo $data['perihalbast']; ?></td> 
                </tr>
                <tr>
                  <td>Kategori </td><td>:</td><td><?php echo $data['keterangan']; ?></td> 
                </tr>
                <tr>
                  <td>Kode Arsip </td><td>: </td><td><?php echo $data['kodearsip']; ?></td>
                </tr>
                <tr>
                  <?php 
                  $qr="select nama_asli,nama_file,path from upload where nobast='$data[nobast]'";
                  $qp=mysql_query($qr);
                  while ($dq=mysql_fetch_array($qp)) {
                    echo"
                    <td>File Acuan </td><td>:</td>
                    <td>
                    <a href='download.php?type=b&id=$data[nobast]'>$dq[nama_asli]</a>
                    </td> 
                    ";
                  }
                 ?>
              </tr>
              </table>

            </div>
          </div>
          

          <div class="statistic">
            <div class="dashboard-heading">Detail Acuan</div>
            <div class="dashboard-content">
              <table>
                <tr>
                  <td>Jenis Acuan </td><td>: </td><td><?php echo $data['idkategori']; ?></td><td><a href="editsippt.php?nodokacuan=<?php echo $data['nodokacuan']; ?>">[ Edit ]</a></td>
                </tr>
                <td>No.Dok Acuan </td><td>: </td><td><?php echo $data['nodokacuan']; ?></td>
              </tr>
              <tr><td>Tgl.Dok Acuan </td><td>: </td><td><?php echo $data['tgldokacuan']; ?></td>
              </tr>
              <tr>
                <td>Pemegang</td><td>: </td><td><?php echo $data['pemegangdokacuan']; ?></td>
              </tr>
              <tr>
                <td>Perihal</td><td>:</td><td><?php echo $data['haldokacuan']; ?></td> 
              </tr>
              <tr>
                <td>Keterangan </td><td>:</td><td><?php echo $data['ketdokacuan']; ?></td> 
              </tr>
              <tr>
                  <?php 
                  $qr="select nama_asli,nama_file,path from upload where nodokacuan='$data[nodokacuan]'";
                  $qp=mysql_query($qr);
                  while ($dq=mysql_fetch_array($qp)) {
                    echo"
                    <td>File Acuan </td><td>:</td>
                    <td>
                    <a href='download.php?type=a&id=$data[nodokacuan]'>$dq[nama_asli]</a>
                    </td> 
                    ";
                  }
                 ?>
              </tr>
            </table><br>
          </div>
        </div>


        <div class="latest">
          <div class="dashboard-heading">Detail Peruntukan</div>
          <div class="dashboard-content" >

           <?php 
           include "koneksi.php";
           $id = $_GET['id'];
           $query3 = mysql_query("select * from dataaset where nobastaset='$id'") or die(mysql_error());
           while ($data3 = mysql_fetch_array($query3)){
             ?>


             <table>
              <tr>
                <td>Alamat lokasi</td><td>:</td><td><?php echo $data3['alamataset']; ?></td><td><a href='editaset.php<?php echo "?id=$data3[idaset]"; ?>' target='_blank'>[Edit]</a></td>
              </tr>
              <tr>
               <td >Wilayah</td><td>:</td><td colspan='2'><?php echo $data3['wilayah']; ?></td>
             </tr>
             <tr>
               <td >Kecamatan</td><td>:</td><td colspan='2'><?php echo $data3['kecamatan']; ?></td>
             </tr>
             <tr>
               <td >Kelurahan</td><td>:</td><td colspan='2'><?php echo $data3['kelurahan']; ?></td>
             </tr>
    </table>

<div style="overflow:auto">
              <table class="list" cellpadding="5" cellspacing="5">
                
                <thead>
                  <tr>
                    <td class="center">No.</td>        	
                    <td class="center">Peruntukan</td>
                    <td class="center">Jenis</td>
                    <td class="center">Volume</td>
                    <td class="center">Sertifikasi</td>
                    <td class="center">Pemilik</td>
                    <td class="center">Jns Sertifikat</td>
                    <td class="center">MasaBerlaku</td>
                    <td class="center">Keterangan</td>
                    <td class="center">Jenis Fasos Fasum</td>
                  <td class="center">Status Sertifikat</td>
                    <td class="center">No. Sertifikat</td>
                    <td class="center">Tgl.Sertifikat</td>
                    <td class="center">Luas Sertifikat</td>
                  <td class="left">Status Plang</td>
                  <td class="center">Status Penggunaan</td>
                  <td class="center">No.SK</td>
                    <td class="center">Tgl.SK</td>
                    <td class="center">SKPD</td>
                  <td class="right">Sensus Fasos Fasum</td>
                  <td class="center">No. Acuan</td>
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
                $query2 = mysql_query("select * from peruntukan where idaset='".$data3['idaset']."'") or die(mysql_error());
                
                $no = 1;
                while ($data2 = mysql_fetch_array($query2)){
                 ?>
                 <input type="hidden" name="id" value="<?php echo $nobast; ?>"
                 <tr>
                   <td class="center"><?php echo $no; ?></td>
                   <td class="left"><?php echo $data2['deskripsi']; ?></td>
                   <td class="center"><?php echo $data2['jenis']; ?></td>
                   <td class="right"><?php echo $data2['luas']; ?></td>
                   <td class="left"><?php echo $data2['sertifikasi']; ?></td>
                   <td class="left"><?php echo $data2['pemilik']; ?></td>
                   <td class="center"><?php echo $data2['jenissertifikat']; ?></td>
                   <td class="center"><?php echo $data2['masaberlaku']; ?></td>
                   <td class="left"><?php echo $data2['keterangan']; ?></td>
                   <td class="center"><?php echo $data2['jenisfasos']; ?></td>
                  <td class="center"><?php echo $data2['statussertifikat']; ?></td>
                   <td class="left"><?php echo $data2['nosertifikat']; ?></td>
                   <td class="right"><?php echo $data2['tglsertifikat']; ?></td>
                   <td class="right"><?php echo $data2['luassertifikat']; ?></td>
                  <td class="left"><?php echo $data2['statusplang']; ?></td>
                  <td class="center"><?php echo $data2['statuspenggunaan']; ?></td>
                  <td class="left"><?php echo $data2['nosk']; ?></td>
                   <td class="right"><?php echo $data2['tglsk']; ?></td>
                   <td class="right"><?php echo $data2['skpd']; ?></td>
                  <td class="right"><?php echo $data2['sensusfasos']; ?></td>
                  <td class="center"><a href=bastbysippt.php?id=<?php echo $data2['nodokacuan'].">$data2[nodokacuan]"; ?></a></td>
                   <td class="center"><a href="editperuntukan.php?idperuntukan=<?php echo $data2['idperuntukan']; ?>">Edit</a>.|.<a href="hapusperuntukan.php?idperuntukan=<?php echo $data2['idperuntukan']."&id=$_GET[id]"; ?>" onClick="return konfirmasi()">Hapus</a></td>
                 </tr>
                 
                <?php
                $no++;
              }
              ?>
            </tbody>
          </table>
        </div>

        <?php
        
      }
      ?>



    <a  href="akunshowdata2.php?id=<?php echo $data['nobast']; ?>" ></li>
     <img alt=" " src="view/image/viewdetail.gif" border=0></a>
     <a  href="akunshowdata2.php?id=<?php echo $data['nobast']; ?>">Show Data Akun ....</a></span>


   </div>
 </div>


 <div class="latest">
  <div class="dashboard-heading">Status Asal Dokumen</div>
  <div class="dashboard-content">

   <?php
   include "koneksi.php";
   $id = $_GET['id'];

   ?>
   
   <form method="post" action="">
    <table class="list" >
     
     <td>
       Check one or more box bellow to save Document source information ...
     </td>
     
   </table>
   <td>No.BAST </td><td>: </td><td><?php echo $data['nobast']; ?></td>
   <?php
   $query4 = mysql_query("select * from lokasidokumen where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
   while ($data4 = mysql_fetch_array($query4)){
     ?>

     



     <table class="list" >
       
       <tr>
         <td><input type="checkbox" name="rekon163" value="1" <?php if($data4['rekon163'] == 1){echo 'checked="checked"';}?>/> Data Rekon 163<br/>
           <input type="checkbox" name="bpk357" value="1" <?php if($data4['bpk357'] == 1){echo 'checked="checked"';}?>/> Data LK2010<br/>
           <input type="checkbox" name="rekon54" value="1" <?php if($data4['rekon54'] == 1){echo 'checked="checked"';}?>/> Data Rekon 54<br/></td>
           <td><input type="checkbox" name="rekon101" value="1" <?php if($data4['rekon101'] == 1){echo 'checked="checked"';}?>/> Data Rekon 101<br/>
             <input type="checkbox" name="rekon129" value="1" <?php if($data4['rekon129'] == 1){echo 'checked="checked"';}?>/> Data Rekon 129<br/>
             <input type="checkbox" name="mutasi" value="1" <?php if($data4['mutasi'] == 1){echo 'checked="checked"';}?>/> Data Mutasi<br/></td>
             <td><input type="checkbox" name="pulomas" value="1" <?php if($data4['pulomas'] == 1){echo 'checked="checked"';}?>/> Data Pulo Mas<br/>
               <input type="checkbox" name="balaikota" value="1" <?php if($data4['balaikota'] == 1){echo 'checked="checked"';}?>/> Data Balai Kota Lt.7 <br/>
               <input type="checkbox" name="kel90" value="1" <?php if($data4['kel90'] == 1){echo 'checked="checked"';}?>/> None </td>
               <td><input type="checkbox" name="tp3w" value="1" <?php if($data4['tp3w'] == 1){echo 'checked="checked"';}?>/> Data TP3W <br/>
                 <input type="checkbox" name="lokasi58" value="1" <?php if($data4['lokasi58'] == 1){echo 'checked="checked"';}?>/> Data 58 <br/>	
                 <input type="checkbox" name="dtr" value="1" <?php if($data4['dtr'] == 1){echo 'checked="checked"';}?>/> Data DTR <br/><br>	</td>
               </tr>
               
               
               <tr>
                 <td colspan="4" align="right"><input type="submit" value="Simpan Perubahan" name="submit22"></td>
               </tr>
               
             </table>
             <?php }?>
           </form> 


           <?php

           if(isset($_REQUEST['submit22'])) {
             
             if (isset($_POST['pulomas'])) 
             {
               $query = mysql_query("update lokasidokumen set  pulomas='1'   where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  pulomas='0'   where nobastlokasi='".$data['nobast']."'") or die(mysql_error());

             if (isset($_POST['bpk357'])) 
             {
               $query = mysql_query("update lokasidokumen set  bpk357='1'   where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  bpk357='0'   where nobastlokasi='".$data['nobast']."'") or die(mysql_error());



             if (isset($_POST['rekon163']))
             {
               $query = mysql_query("update lokasidokumen set  rekon163='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  rekon163='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());


             if (isset($_POST['rekon54']))
             {
               $query = mysql_query("update lokasidokumen set  rekon54='1'  where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  rekon54='0'  where nobastlokasi='".$data['nobast']."'") or die(mysql_error());


             if (isset($_POST['rekon101']))
             {
               $query = mysql_query("update lokasidokumen set  rekon101='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  rekon101='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());


             if (isset($_POST['rekon129']))
             {
               $query = mysql_query("update lokasidokumen set  rekon129='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  rekon129='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());

             if (isset($_POST['balaikota']))
             {
               $query = mysql_query("update lokasidokumen set  balaikota='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  balaikota='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());


             if (isset($_POST['kel90']))
             {
               $query = mysql_query("update lokasidokumen set  kel90='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  kel90='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());


             if (isset($_POST['tp3w']))
             {
               $query = mysql_query("update lokasidokumen set  tp3w='1'where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  tp3w='0'where nobastlokasi='".$data['nobast']."'") or die(mysql_error());

             if (isset($_POST['lokasi58']))
             {
               $query = mysql_query("update lokasidokumen set  lokasi58='1'where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  lokasi58='0'where nobastlokasi='".$data['nobast']."'") or die(mysql_error());


             if (isset($_POST['dtr']))
             {
               $query = mysql_query("update lokasidokumen set  dtr='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  dtr='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());

             if (isset($_POST['mutasi']))
             {
               $query = mysql_query("update lokasidokumen set  mutasi='1' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  mutasi='0' where nobastlokasi='".$data['nobast']."'") or die(mysql_error());

             echo 'simpan perubahan data asal dokumen berhasil...........';

           }
           ?>

           <br><a href="viewdetailbast.php?id=<?php echo $data['nobast']; ?>">Refresh klik disini</a></br>
           <br><a href="index.php">Back to Dashboard klik disini</a></br>
           



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