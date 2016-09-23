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
          <h1><img src="view/image/home.png" alt="" /> Entry Data BAST</h1>
        </div>

        <div class="content">
          <div class="overview">
            <div class="dashboard-heading">Input Deskripsi BAST</div>
            <div class="dashboard-content">

              <form name="inputbast" action="" method="post"  enctype="multipart/form-data">
               <table>
                <tr>
                  <td>No.BAST </td><td>: </td><td><input type="text" name="nobast" maxlength="50" required="required" /></td>
                </tr>
                <tr><td>Tgl. BAST </td><td>: </td><td><input type="text" id="tgldokacuan" name="tglbast" maxlength="10" required="required"/></td>
                </tr>

                <link type="text/css" rel="stylesheet" href="jquery-ui-1.7.3.custom.css" />
                <script type="text/javascript" src="jquery-1.7.1.min.js"></script>
                <script type="text/javascript" src="jquery.ui.datepicker.js"></script>
                <script type="text/javascript" src="jquery.ui.core.js"></script>
                <script type="text/javascript" src="tanggaldokacuan.js"></script>
                <tr>
                  <td>Pengembang </td><td>: </td><td><input type="text" name="pengembangbast" maxlength="100" required="required" /></td>
                </tr>
                <tr>
                  <td>Perihal</td><td>:</td><td><textarea name=perihalbast rows=1 cols=30 required="required" /> </textarea></td> 
                </tr>
                <tr>
                  <td>Kategori </td><td>:</td><td><textarea name=keterangan rows=1 cols=30 required="required" /> </textarea></td> 
                </tr>
                <tr><td>Dokumen Acuan</td><td>:</td><td><select name='nodokacuan'>
                 <?php
                 include "koneksi.php";
                 // query untuk menampilkan wilayah
                 $query = "SELECT * FROM detaildokacuan";
                 $hasil = mysql_query($query);
                 while ($data = mysql_fetch_array($hasil))
                 {
                  echo "<option >".$data['nodokacuan']."</option>".$data['nodokacuan']."</option>";
                }
                ?>
              </select></td>
            </tr>       

            <tr>
              <td>Kode Arsip </td><td>: </td><td><input type="text" name="kodearsip" maxlength="40" required="required" /></td>
            </tr>
            <tr>
              <td>File Acuan</td><td>: </td><td><input type="file" name="fileacuan"></td>
            </tr>
          </table>
          <right><input type="submit" name="submit" value="Simpan Data BAST"/></right>
        </form>

        <?php
        include "koneksi.php";
        if (isset($_POST['submit'])){
          include("config_dir.php");
          if(mysql_num_rows(mysql_query("select * from upload"))==0){
            $namabaru=$namadefault;
          }else{
            $nama=mysql_fetch_array(mysql_query("select * from upload order by id desc"));
            $ext=end(explode('.', $nama['nama_file']));      
            $namanya=basename($nama['nama_file'],".".$ext);
            // echo $namanya;
            $namabaru=incrementName($namanya);
          }
          $target_file = $target_dir . "$namabaru.".$ext;
          $ext=end(explode('.', $_FILES['fileacuan']['name']));
          $nobast = $_POST['nobast'];
          $tglbast= $_POST['tglbast'];
          $pengembangbast= $_POST['pengembangbast'];
          $perihalbast= $_POST['perihalbast'];
          $keterangan= $_POST['keterangan'];
          $nodokacuan= $_POST['nodokacuan'];
          $kodearsip=$_POST['kodearsip'];




          $check = mysql_query("SELECT nobast FROM bast WHERE nobast = '$nobast'") or die(mysql_error());
          $check2 = mysql_num_rows($check);

    					//if the name exists it gives an error
          if ($check2 != 0)
          {
            ?>
            <script type="text/javascript">
             alert("BAST No:  <?php echo $nobast; ?> has already registered.");
             history.back();
           </script>
           <?php

         }else

         if (move_uploaded_file($_FILES["fileacuan"]["tmp_name"], $target_file)) {
          $namafile=$_FILES['fileacuan']['name'];
          $upload=mysql_query("INSERT INTO `upload` (`id`, `nama_asli`, `nama_file`, `path`, `nodokacuan`, `nobast`) VALUES ('', '$namafile', '$namabaru.$ext', '$target_dir', '', '$nobast');");
          $query = mysql_query("insert into bast values('$nobast', '$tglbast', '$perihalbast', '$pengembangbast', '$keterangan', '$nodokacuan', '$kodearsip')") or die(mysql_error());
          echo "The file <a href='$target_dir$namabaru.$ext'>". basename( $_FILES["fileacuan"]["name"]). "</a> has been uploaded.";
        } else {
          echo "$target_file";
          echo "Sorry, there was an error uploading your file.";
        }

					//simpan data ke database

        if ($query) {
         echo 'input data bast  berhasil........... No BAST :  ' ;
         echo  $nobast;


       }
     }
     ?>

   </div>
 </div>


 <div class="statistic">
  <div class="dashboard-heading">Input Lokasi Dokumen</div>
  <div class="dashboard-content">

    <?php
    include "koneksi.php";
    

    ?>
    
    <form method="post" action="">

     <tr>
       No.BAST :  <input type="text" name="nobastlokasi" value="<?php if(isset($nobast)){echo $nobast;} ?>"/>
     </tr></p>
     <table >

       <tr><td><input type="checkbox" name="rekon163" value="1"/>Data Rekon 163<br/><br/></td>
         <td><input type="checkbox" name="rekon54" value="1" /> Data Rekon 54<br/><br/></td></tr>
         <tr><td><input type="checkbox" name="rekon101" value="1" /> Data Rekon 101<br/><br/></td>
           <td><input type="checkbox" name="rekon129" value="1" /> Data Rekon 129<br/><br/></td></tr>
           <tr><td><input type="checkbox" name="pulomas" value="1" /> Data Pulo Mas<br/><br/></td>
             <td><input type="checkbox" name="balaikota" value="1" /> Data Balai Kota Lt.7 <br/><br/></td></tr>
             <tr><td><input type="checkbox" name="tp3w" value="1" /> Data TP3W <br/><br/></td>
               <td><input type="checkbox" name="lokasi58" value="1" /> Data 58<br/><br/></td></tr>
               <tr><td><input type="checkbox" name="dtr" value="1" /> Data DTR <br/>	</td>
                 <td><input type="checkbox" name="bpk357" value="1" /> Data LK2010 <br/><br/></td></tr>
                 <td><input type="checkbox" name="mutasi" value="1" /> Data Mutasi<br/><br/></td></tr>
                 <tr><td align="right"><input type="submit" value="Simpan Perubahan" name="submit22"></td></tr>
                 
               </tr>
             </table>
             
           </form> 


           <?php

           if(isset($_REQUEST['submit22'])) {

             $nobastlokasi = $_POST['nobastlokasi'];
             $query = mysql_query("insert into lokasidokumen values('$nobastlokasi', '0', '0', '0', '0','0', '0', '0', '0','0','0','0','0')") or die(mysql_error());
             
             if (isset($_POST['pulomas'])) 
             {
               $query = mysql_query("update lokasidokumen set  pulomas='1'   where nobastlokasi='$nobastlokasi'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  pulomas='0'   where nobastlokasi='$nobastlokasi'") or die(mysql_error());



             if (isset($_POST['rekon163']))
             {
               $query = mysql_query("update lokasidokumen set  rekon163='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  rekon163='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());


             if (isset($_POST['rekon54']))
             {
               $query = mysql_query("update lokasidokumen set  rekon54='1'  where nobastlokasi='$nobastlokasi'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  rekon54='0'  where nobastlokasi='$nobastlokasi'") or die(mysql_error());


             if (isset($_POST['rekon101']))
             {
               $query = mysql_query("update lokasidokumen set  rekon101='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  rekon101='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());


             if (isset($_POST['rekon129']))
             {
               $query = mysql_query("update lokasidokumen set  rekon129='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  rekon129='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());

             if (isset($_POST['balaikota']))
             {
               $query = mysql_query("update lokasidokumen set  balaikota='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  balaikota='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());


             if (isset($_POST['tp3w']))
             {
               $query = mysql_query("update lokasidokumen set  tp3w='1'where nobastlokasi='$nobastlokasi'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  tp3w='0'where nobastlokasi='$nobastlokasi'") or die(mysql_error());

             if (isset($_POST['lokasi58']))
             {
               $query = mysql_query("update lokasidokumen set  lokasi58='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  lokasi58='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());


             if (isset($_POST['dtr']))
             {
               $query = mysql_query("update lokasidokumen set  dtr='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  dtr='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());

             if (isset($_POST['bpk357']))
             {
               $query = mysql_query("update lokasidokumen set  bpk357='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  bpk357='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());

             if (isset($_POST['mutasi']))
             {
               $query = mysql_query("update lokasidokumen set  mutasi='1' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
             }else $query = mysql_query("update lokasidokumen set  mutasi='0' where nobastlokasi='$nobastlokasi'") or die(mysql_error());
             echo 'simpan perbahan data asal dokumen berhasil...........';

           }
           ?>




         </div>
       </div>

       <br>

       <div class="latest">
        <div class="dashboard-heading">Input Lokasi Aset</div>
        <div class="dashboard-content">

         <form name="inputlokasiaset" action="" method="post">
           No.BAST :  <input type="text" name="nobast" value="<?php if(isset($nobastlokasi)){echo $nobastlokasi;} ?>"/>	
           <head>
             <script>
               var idrow = 2;

               function tambah(){
                 var x=document.getElementById('datatable').insertRow(idrow);
                 var td1=x.insertCell(0);
                 var td2=x.insertCell(1);
                 var td3=x.insertCell(2);
                 var td4=x.insertCell(3);
                 var td5=x.insertCell(4);
                 var td6=x.insertCell(5);

                 


                 
                 td1.innerHTML="<input type='text' required name='alamataset[]'>";
                 td2.innerHTML="<select name='kecamatan[]'>          	<?php
                 include "koneksi.php";
                 // query untuk menampilkan kecamatan
                 $query = "SELECT * FROM kecamatan";
                 $hasil = mysql_query($query);
                 while ($data = mysql_fetch_array($hasil))
                 {
                  echo "<option >".$data['namakecamatan']."</option>".$data['namakecamatan']."</option>";
                }
                ?></select>";

                td3.innerHTML="<select name='kelurahan[]'>          	<?php
                include "koneksi.php";
                 // query untuk menampilkankelurahan
                $query = "SELECT * FROM kelurahan";
                $hasil = mysql_query($query);
                while ($data = mysql_fetch_array($hasil))
                {
                  echo "<option >".$data['namakelurahan']."</option>".$data['namakelurahan']."</option>";
                }
                ?></select>";

                td4.innerHTML="<select name='wilayah[]'>            <?php
                include "koneksi.php";
                 // query untuk menampilkanwilayah
                $query = "SELECT * FROM wilayah";
                $hasil = mysql_query($query);
                while ($data = mysql_fetch_array($hasil))
                {
                  echo "<option >".$data['wilayah']."</option>".$data['wilayah']."</option>";
                }
                ?></select>";

                td5.innerHTML="<input type='text' required name='latitude[]'>";

                td6.innerHTML="<input type='text' required name='longitude[]'>";


                idrow++;
              }


              function hapus(){
               if(idrow>2){
                 var x=document.getElementById('datatable').deleteRow(idrow-1);
                 idrow--;
               }
             }

           </script></head>


           
           <body>

             <br><p>
             <div style=" width:20; height:110px;overflow:auto;">

               <table class="list" id=datatable >
                 <thead>
                   <tr>

                     <td class="center">ALAMAT ASET</font></td>
                     <td class="center">KECAMATAN</font></td>
                     <td class="center">KELURAHAN</font></td>
                     <td class="center">WILAYAH</font></td>
                     <td class="center">LATITUDE</font></td>
                     <td class="center">LONGITUDE</font></td>


                   </tr>
                 </thead>

                 <tbody>
                   <tr>

                     <td><input type='text' required name='alamataset[]'></td>
                     <td><select name='kecamatan[]'>

                       <?php
                       include "koneksi.php";
                 // query untuk menampilkan wilayah
                       $query = "SELECT * FROM kecamatan";
                       $hasil = mysql_query($query);
                       while ($data = mysql_fetch_array($hasil))
                       {
                        echo "<option >".$data['namakecamatan']."</option>".$data['namakecamatan']."</option>";
                      }
                      ?>
                    </select></td>

                    <td><select name='kelurahan[]'>

                     <?php
                     include "koneksi.php";
                 // query untuk menampilkan kelurahan
                     $query = "SELECT * FROM kelurahan";
                     $hasil = mysql_query($query);
                     while ($data = mysql_fetch_array($hasil))
                     {
                      echo "<option >".$data['namakelurahan']."</option>".$data['namakelurahan']."</option>";
                    }
                    ?>
                  </select></td>

                  <td><select name='wilayah[]'>

                   <?php
                   include "koneksi.php";
                 // query untuk menampilkan wilayah
                   $query = "SELECT * FROM wilayah";
                   $hasil = mysql_query($query);
                   while ($data = mysql_fetch_array($hasil))
                   {
                    echo "<option >".$data['wilayah']."</option>".$data['wilayah']."</option>";
                  }
                  ?>
                </select></td>    
                <td><input type='text' required name='latitude[]'></td>
                <td><input type='text' required name='longitude[]'></td>

              </tr>
            </tbody>
          </table>
        </div>
        <br>
        <input type=button name=tambah1 value=Tambah onclick=tambah()><input type=button name=delete1 value=Delete onclick=hapus()>
        <right><input type="submit" name="submit2" value="Simpan Lokasi Aset"/></right>	
        
      </body>

    </div>

  </form>
  <?php  
  include "koneksi.php";
  
  if (isset($_POST['submit2'])){
   $nobastaset=$_POST['nobast'];
   if(!$_POST){  
    die('Tidak ada data yang disimpan!');  
  }  
  
		//menyimpan data ke tabel dataaset
  foreach($_POST['alamataset'] as $key => $alamataset){  
    if($alamataset){
      $sql = "insert into dataaset(alamataset,wilayah,kecamatan,kelurahan,nobastaset,latitude,longitude)   
     values ('{$alamataset}','{$_POST['wilayah'][$key]}','{$_POST['kecamatan'][$key]}','{$_POST['kelurahan'][$key]}','{$_POST['nobast']}','{$_POST['latitude'][$key]}','{$_POST['longitude'][$key]}')";  
     mysql_query($sql);  
   } 
 }
 echo 'Data telah disimpan';  
 

 
}
?>

</div>




<div class="latest">
  <div class="dashboard-heading">Data BAST vs Data Aset</div>
  <div class="dashboard-content">

    <form method="post" action="" name="short" id="form1" >
      <b>Masukan No BAST bila belum tertera :</b><br><br>   
      No.BAST :  <input type="text" name="nobastaset" value="<?php if(isset($nobastaset)){echo $nobastaset;} ?>"/><input type="submit" name="submit10" value="Pilih yang sesuai saja"/><br/>
    </form><br>
    <div style="height:480px; overflow:auto;">

     <table class="list" width="530" border="1" cellpadding="5" cellspacing="1">
       <thead>
         <tr>
           <td class="center">No.</td>        	
           <td class="center">No.BAST</td>
           <td class="center">Tgl.BAST</td>
           <td class="center">Pengembang</td>
           <td class="center">Lokasi Aset</td>
           <td class="center">Kelurahan</td>
           <td class="center">Kecamatan</td>
           <td class="center">Action</td> 
         </tr>
       </thead>
       <?php

       if(isset($_REQUEST['submit10'])) {

         include "koneksi.php";
         $term = $_POST['nobastaset']; 
         // echo $term."<--";

         $query = mysql_query("select * from bast b inner join dataaset d on b.nobast=d.nobastaset where d.nobastaset='$term'");
       }else

       
       $query = mysql_query("select * from bast b inner join dataaset d on b.nobast=d.nobastaset");

       $no = 1;
       while ($data = mysql_fetch_array($query)) {
         ?>
         <tbody>
           <tr>
             <td class="center"><?php echo $no; ?></td>
             <td class="left"><?php echo $data['nobast']; ?></td>
             <td class="center"><?php echo $data['tglbast']; ?></td>
             <td class="left"><?php echo $data['pengembangbast']; ?></td>
             <td class="left"><?php echo $data['alamataset']; ?></td>
             <td class="left"><?php echo $data['kelurahan']; ?></td>
             <td class="left"><?php echo $data['kecamatan']; ?></td>
             <td class="center"><a href="entryperuntukan.php?id=<?php echo $data['idaset']; ?>">Input Data Peruntukan</a></td>

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