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
      <h1><img src="view/image/home.png" alt="" /> Dokumen Acuan </h1>

      <P align=right><span>
        <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
        <a target="_blank" href="excelsipptvsbast.php">
          BAST - SIPPT

          <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
          <a target="_blank" href="excelsipptvsbastexcom.php">
            BAST - SIPPT (Excom)

            <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
            <a target="_blank" href="excelsipptvsbasthistory.php">
              BAST-SIPPT-History

              <a><img alt=" " src="view/image/excel.jpg" border=0></a>&nbsp;
              <a target="_blank" href="excelsipptvsbasthistoryexcom.php">
                BAST-SIPPT-History(Excom)
              </a></span></P>
            </div>



            <div class="content">


              <link type="text/css" rel="stylesheet" href="jquery-ui-1.7.3.custom.css" />
              <script type="text/javascript" src="jquery-1.7.1.min.js"></script>
              <script type="text/javascript" src="jquery.ui.datepicker.js"></script>
              <script type="text/javascript" src="jquery.ui.core.js"></script>
              <script type="text/javascript" src="tanggaldokacuan.js"></script>


              <div class="overview">
                <div class="dashboard-heading">Input Data Acuan</div>
                <div class="dashboard-content">


                  <form name="inputdetaildokumenacuan" action="" method="post" enctype="multipart/form-data">

                   <table>

                    <tr><td>Pilih Jenis Dokumen Acuan</td>
                      <td>  
                        <select name="jenisdokacuan">
                          <option value=0 selected>- Pilih Jenis -</option>
                          <?php
                          include "koneksi.php";
                 // query untuk menampilkan kecamatan
                          $query = "SELECT * FROM dokumenacuan";
                          $hasil = mysql_query($query);
                          while ($data = mysql_fetch_array($hasil))
                          {
                            echo "<option value='".$data['idkategori']."'>".$data['jenisdokumen']."</option>";
                          }
                          ?>
                        </select>
                      </td>
                    </tr>

                    <tr>
                      <td >No.Dokumen </td>           
                      <td height="21"><input type="text" name="nodokacuan" maxlength="80" required="required"/ /></td>
                    </tr>

                    <tr>
                      <td>Tgl. Dokumen </td>
                      <td height="21"><input type="text" id="tgldokacuan" name="tgldokacuan" maxlength="10" required="required"/>
                      </td>         
                    </tr>
                    <tr>

                      <tr>
                        <td>Pemegang Dokumen </td>
                        <td><input type="text" name="pemegangdokacuan" maxlength="40" required="required" /></td>
                      </tr>

                      <tr>
                        <td>Perihal</td>
                        <td><textarea name=haldokacuan rows=1 cols=30 required="required" /> </textarea></td> 
                      </tr> 

                      <tr>
                        <td>Keterangan</td>
                        <td><textarea name=ketdokacuan rows=1 cols=30 required="required" /> </textarea></td> 
                      </tr>  
                      <tr>
                        <td>File Acuan</td>
                        <td align="right"><input type="file" name="fileacuan"></td> 
                      </tr>
                      <tr>
                        <td align="right" colspan="2"><input type="submit" name="submit" value="Simpan"/> </td>
                      </tr>

                    </table>
                  </form>

                </div>
              </div>

              <div class="overview">
                <div class="dashboard-heading">Input Data Kewajiban</div>
                <div class="dashboard-content">
                  <form name="inputlokasiaset" action="" method="post">
                    No.Dokumen Acuan :  
                    <input type="text" name="nodokacuan2" 
                    <?php 
                      if(isset($_POST['nodokacuan'])){ 
                        echo "value='".$_POST['nodokacuan']."'"; 
                      }
                    ?>
                    />  
                    <head>
                      <script>
                        var idrow = 2;

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
                            echo "<option value='".$data['display']."'>".$data['display']."</option>";
                          }
                          ?></select>";

                          td3.innerHTML="<input type='number' name='luas[]'>";

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
                              <td class="center">Deskripsi</td>
                              <td class="center">Jenis Fasos Fasum</td>
                              <td class="center">Luas</td>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>

                              <td><input type='text' name='deskripsi[]'></td>
                              <td><select name='jenisfasos[]'>

                                <?php
                                include "koneksi.php";
                 // query untuk menampilkan wilayah
                                $query = "SELECT * FROM ref_jenisfasosfasum";
                                $hasil = mysql_query($query);
                                while ($data = mysql_fetch_array($hasil))
                                {
                                  echo "<option value='".$data['display']."'>".$data['display']."</option>";
                                }
                                ?>
                              </select></td>

                              <td><input type='number' name='luas[]'></td>         
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <br>
                      <input type=button name=tambah1 value=Tambah onclick=tambah()><input type=button name=delete1 value=Delete onclick=hapus()>
                      <right><input type="submit" name="submit2" value="Simpan Data Kewajiban"/></right> 

                    </body>

                  </div>

                </form>
              </div>
            </div>



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
                echo $namanya;
                $namabaru=incrementName($namanya);
              }
              $target_file = $target_dir . "$namabaru.".$ext;
              $ext=end(explode('.', $_FILES['fileacuan']['name']));
              $nodokacuan = $_POST['nodokacuan'];
              $tgldokacuan= $_POST['tgldokacuan'];
              $haldokacuan= $_POST['haldokacuan'];
              $pemegangdokacuan= $_POST['pemegangdokacuan'];
              $ketdokacuan= $_POST['ketdokacuan'];
              $idkategori= $_POST['jenisdokacuan'];

              
              $check = mysql_query("SELECT nodokacuan FROM detaildokacuan WHERE nodokacuan = '$nodokacuan'") or die(mysql_error());
              $check2 = mysql_num_rows($check);

    			//if the name exists it gives an error
              if ($check2 != 0)
              {
               ?>
               <script type="text/javascript">
                alert("Dokumen Acuan No:  <?php echo $nodokacuan; ?> has already registered. use has already available item ");
                history.back();
              </script>
              <?php

            }else

            if (move_uploaded_file($_FILES["fileacuan"]["tmp_name"], $target_file)) {
              $namafile=$_FILES['fileacuan']['name'];
              $upload=mysql_query("INSERT INTO `upload` (`id`, `nama_asli`, `nama_file`, `path`, `nodokacuan`, `nobast`) VALUES ('', '$namafile', '$namabaru.$ext', '$target_dir', '$nodokacuan', '');");
                $query = mysql_query("insert into detaildokacuan values('$nodokacuan', '$tgldokacuan', '$haldokacuan', '$pemegangdokacuan', '$ketdokacuan', '$idkategori')") or die(mysql_error());
                echo "The file <a href='$target_dir$namabaru.$ext'>". basename( $_FILES["fileacuan"]["name"]). "</a> has been uploaded.";
            } else {
              echo "$target_file";
              echo "Sorry, there was an error uploading your file.";
            }
//simpan data ke database
            

            if ($query) {
             echo 'input jenis dokumen berhasil...........';

           }
         }

         if (isset($_POST['submit2'])){
           $nodokacuan2=$_POST['nodokacuan2'];
           if(!$_POST){  
            die('Tidak ada data yang disimpan!');  
          }  

    //menyimpan data ke tabel peruntukan
          foreach($_POST['deskripsi'] as $key => $deskripsi){  
            if($deskripsi){
             $sql = "insert into peruntukan(idperuntukan,deskripsi,jenisfasos,luas,statussertifikat,statusplang,statuspenggunaan,sensusfasos,nodokacuan)   
             values ('','{$deskripsi}','{$_POST['jenisfasos'][$key]}','{$_POST['luas'][$key]}','Belum SHP Pemprov. DKI Jakarta','Belum Terpasang','Idle','Belum dilakukan Sensus','$nodokacuan2');";  
             mysql_query($sql); 
             // echo $sql; 
           } 
         }
         echo 'Data telah disimpan';  
       }
       ?>






       <div class="latest">
        <div class="dashboard-heading">Data Dokumen Acuan</div>
        <div class="dashboard-content">

          <form method="post" action="" name="form1" id="form1" >
            <b>Masukan No.Dokumen atau Nama Pengembang :</b><br><br>   
            <b>Kata Pencarian  </b> <input type="text" name="term" />    <input type="submit" name="submit10" value="Cari"/><br/>
          </form><br>

          <table class="list" cellpadding="5" cellspacing="5">
            <thead>
              <tr>
                <td class="center">No</td>
                <td class="center">No.Dokumen</td>
                <td class="center">Tgl.Dokumen</td>
                <td class="center">Pemegang Dokumen</td>
                <td class="center">Perihal</td>
                <td class="center">Keterangan</td>
                <td class="center">Jenis Dok.Acuan</td>
                <td class="center">Action</td>
              </tr>
            </thead>


            <tbody>
              <?php
              if(isset($_REQUEST['submit10'])) {

               include "koneksi.php";
               $term = $_POST['term']; 

               $query = mysql_query("select * from detaildokacuan a inner join dokumenacuan b on a.idkategori=b.idkategori where pemegangdokacuan like '%$term%' or nodokacuan like '%$term%'");
             }else

             $query = mysql_query("select * from detaildokacuan a inner join dokumenacuan b on a.idkategori=b.idkategori where jenisdokumen='SIPPT'");
             $no = 1;
             while ($data = mysql_fetch_array($query)) {
               ?>

               <tr>

                <td class="center"><?php echo $no; ?></td>   
                <td class="left"><a href="bastbysippt.php?id=<?php echo $data['nodokacuan']; ?>"><?php echo $data['nodokacuan']; ?></a></td>    	
                <td class="center"><?php echo $data['tgldokacuan']; ?></td>
                <td class="left"><?php echo $data['pemegangdokacuan']; ?></td>
                <td class="center"><?php echo $data['haldokacuan']; ?></td>
                <td class="center"><?php echo $data['ketdokacuan']; ?></td>
                <td class="center"><?php echo $data['jenisdokumen']; ?></td>
                <td class="center"><a href="editsippt.php?nodokacuan=<?php echo $data['nodokacuan']; ?>">Edit</a></td>
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
</div>
<!--[if IE]>
<script type="text/javascript" src="view/javascript/jquery/flot/excanvas.js"></script>
<![endif]--> 

</div>
<div id="footer"><a href="http://www.dineshjay.co.id">dinesh consultant</a> &copy; 2009-2012 All Rights Reserved.<br />Version 1.0</div>
</body></html>