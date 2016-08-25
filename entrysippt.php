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


      <div id="menu">
        <ul class="left" style="display: none;">
          <li id="dashboard"><a href="#" class="top">Entry SIPPT</a></li>
          <li id="catalog"><a class="top">Master Data</a>
            <ul>
              <li><a href="dokacuan.php">Dokumen Acuan BAST</a></li>
              <li><a href="#">Data Pengembang</a></li>
              <li><a href="kategoriaset.php">Master Kategori Aset</a></li>
              <li><a href="#">Master Satuan Ukur (int.)</a></li>
              <li><a class="parent">Atribut Alamat</a>
                <ul>
                  <li><a href="#">Data Wilayah</a></li>
                  <li><a href="kecamatan.php">Data Kecamatan</a></li>
                  <li><a href="kelurahan.php">Data Kelurahan</a></li>
                </ul>
              </li>

            </ul>
          </li>
        </li>



        <li id="reports"><a class="top">Dokumen Acuan</a>
          <ul>
            <li><a class="parent">SIPPT</a>
              <ul>
                <li><a href="entrysippt.php">Entry SIPPT</a></li>
                <li><a href="#">Entry Kewajiban SIPPT</a></li>
                <li><a href="sipptvsbast.php">Data SIPPT vs BAST</a></li>

              </ul>
            </li>
            <li><a class="parent">Non SIPPT</a>
              <ul>
                <li><a href="entrynonsippt.php">Entry Non SIPPT</a></li>
                <li><a href="#">Entry Kewajiban Non-SIPPT</a></li>
                <li><a href="sipptwilayah.php">SIPPT PerWilayah</a></li>
                <li><a href="#">Data Non SIPPT</a></li>
              </ul>
            </li>
            <li><a href="#">Semua Dokumen Acuan</a>
            </li>          
          </ul>
        </li>




        <li id="bast"><a class="top">BAST</a>
          <ul>
            <li><a href="entrybast.php">Entry BAST</a></li> 
            <li><a href="#">Entry Nilai Kewajiban</a></li> 
            <li><a href="bastgubernur.php">BAST Gubernur</a></li> 
            <li><a href="bastnongubernur.php">BAST Non-Gubernur</a></li>
            <li><a href="pdfbastnonnumber.php">BAST Non-Number</a></li> 
            <li><a href="bastwilayah.php">BAST Per-Wilayah</a></li>
            <li><a href="#">Semua BAST</a></li> 
            <li><a href="pmnonirisanrekon.php">BAST Non Irisan Rekon</a></li>

          </ul>
        </li>


        <li id="reports"><a class="top">Laporan</a>
          <ul>
            <li><a class="parent">Rekapitulasi BAST</a>
              <ul>
                <li><a target="_blank" href="rekapjaksel.php">Rekap Jakarta Selatan</a></li>
                <li><a target="_blank" href="rekapjakut.php">Rekap Jakarta Utara</a></li>
                <li><a target="_blank" href="rekapjakbar.php">Rekap Jakarta Barat</a></li>
                <li><a target="_blank" href="rekapjaktim.php">Rekap Jakarta Timur</a></li>
                <li><a target="_blank" href="rekapjakpus.php">Rekap Jakarta Pusat</a></li>
                <li><a target="_blank" href="rekapseribu.php">Rekap Kepulauan Seribu</a></li>

              </ul>

              <li><a class="parent">Data Detail BAST</a>
                <ul>
                  <li><a target="_blank" href="detailjaksel.php">Detail Jakarta Selatan</a></li>
                  <li><a target="_blank" href="detailjakut.php">Detail Jakarta Utara</a></li>
                  <li><a target="_blank" href="detailjakbar.php">Detail Jakarta Barat</a></li>
                  <li><a target="_blank" href="detailjaktim.php">Detail Jakarta Timur</a></li>
                  <li><a target="_blank" href="detailjakpus.php">Detail Jakarta Pusat</a></li>
                  <li><a target="_blank" href="detailseribu.php">Detail Kepulauan Seribu</a></li>

                </ul>
              </li>

              <li><a class="parent">Progress Rekonsiliasi</a>
                <ul>
                  <li><a target="_blank" href="rekonsiliasi/pdfsemuabast.php">Data Seluruh BAST</a></li>
                  <li><a target="_blank" href="pdf163.php">Data Rekon Kel.163</a></li>
                  <li><a target="_blank" href="pdf54.php">Data Rekon Kel.54</a></li>
                  <li><a target="_blank" href="pdf129.php">Data Rekon Kel.129</a></li>
                  <li><a target="_blank" href="pdf101.php">Data Rekon Kel.101</a></li>
                  <li><a target="_blank" href="pdf58.php">Data Lokasi 58</a></li>
                  <li><a target="_blank" href="pdfdtr.php">Semua DTR</a></li>
                  <li><a target="_blank" href="pdfdtraja.php">DTR Tanpa Irisan</a></li>
                  <li><a target="_blank" href="bastirisanrekon.php">Data irisan Rekon</a></li>
                  <li><a target="_blank" href="pdfbpk.php">Semua LK2010</a></li>
                  <li><a target="_blank" href="pdfbpkaja.php">LK2010 Tanpa Iris</a></li>

                </ul>
              </li>

              <li><a href="laporanperkecamatan.php">Laporan Perkecamatan</a>
              </li>

              <li><a class="parent">Laporan SIPPT</a>
                <ul>
                  <li><a target="_blank" href="pdfsippt.php">Data SIPPT</a></li>
                  <li><a target="_blank" href="pdfnonsippt.php">Data Non SIPPT</a></li>
                  <li><a target="_blank" href="pdfhitung.php">Aril Mop</a></li>
                  <li><a href="#">Data Kewajiban</a></li>
                </ul>
              </li>
              <li><a href="#">SIPPT vs BAST</a>
              </li>        

            </li>
            <li><a href="laporanirisan.php">Data Irisan</a>
            </li>   
          </ul>
        </li>




        <li id="accounting"><a class="top">Accounting</a>
          <ul>
            <li><a href="entrynilaibast.php">Entry Nilai BAST</a></li>
            <li><a href="akunlaporanmutasi.php">Lap. Nilai Mut. 2011</a></li>
            <li><a href="akunlaporantambah.php">Lap. Nilai Penambah</a></li>
            <li><a href="akunlaporantambahmix.php">Lap. Nilai Penambah Komb</a></li>
            <li><a href="excomlaporanakun.php">Lap. Nilai Excom</a></li>
            <li><a href="excomlaporanakunmix.php">Lap. Nilai Excom Komb</a></li>
            <li><a href="akunlaporansippt.php">Lap. Nilai SIPPT</a></li>
            <li><a href="akunlaporannonsippt.php">Lap. Nilai Non-SIPPT</a></li>
            <li><a href="akunlaporanperkib.php">Lap.Semua BAST Per-KIB</a></li>
            <li><a class="parent">Khusus BPKP</a>
             <ul>
              <li><a href="entrynilaibastbpk.php">Entry Penilaian</a></li>
              <li><a href="akunlaporanbpk90.php">Lap.Nilai Fisik Nol</a></li>
              <li><a href="akunlaporanbpkrangkap.php">Lap.Nilai Double</a></li>
              <li><a href="akunlaporanbpksippt.php">Lap.Nilai SIPPT</a></li>
              <li><a href="akunlaporanbpknonsippt.php">Lap.Nilai Non SIPPT</a></li>
              <li><a href="akunlaporanbpksisa27.php">Lap.Nilai Sisa 27</a></li>
              <li><a href="akunlaporanbpkpresume.php">Resume Total</a></li>

            </ul>
          </li>

          <li><a class="parent">LKPD2010</a>
           <ul>
            <li><a href="akunlaporanlkpd129.php">Lap.LKPD 129</a></li>
            <li><a href="akunlaporanlkpd54.php">Lap.LKPD 54</a></li>
            <li><a href="akunlaporanlkpd163.php">Lap.LKPD 163</a></li>
            <li><a href="akunlaporanlkpd101.php">Lap.LKPD 101</a></li>
            <li><a href="akunlaporanlkpd2009.php">Lap.LKPD 2009</a></li>
            <li><a href="akunlaporanlkpd2010.php">Lap.LKPD 2010</a></li>
            <li><a href="akunlaporanlkpdresume.php">Resume Total</a></li>
            <li><a href="akunlaporanlkpdresumemix.php">Resume Kombinasi</a></li>

          </ul>
        </li>

      </li>

    </ul>
  </li>

  <li id="reports"><a class="top">Rekonsiliasi</a>
    <ul>
      <li><a href="resumelk2010.php">Resume LK2010</a></li>
      <li><a href="resumemutasi.php">Resume Mutasi</a></li>
      <li><a href="resumepm.php">Resume PuloMas</a></li>
      <li><a href="resumebp3w.php">Resume BP3W</a></li>
      <li><a href="resumedtr.php">Resume DTR</a></li>
      <li><a href="resumebk.php">Resume Balaikota</a></li>
      <li><a href="resumesipptperiodik.php">Resume Periodik</a></li>
      <li><a target="_blank" href="pdfrekon129.php">Seluruh Rekon 129</a></li>
      <li><a target="_blank" href="pdfrekon54.php">Seluruh Rekon 54</a></li>
      <li><a target="_blank" href="pdfrekon163.php">Seluruh Rekon 163</a></li>
      <li><a target="_blank" href="pdfrekon101.php">Seluruh Rekon 101</a></li>
      <li><a target="_blank" href="pdfrekon2009.php">Seluruh Rekon 2009</a></li>
      <li><a target="_blank" href="pdfrekon2010.php">Seluruh Rekon 2010</a></li>
      <li><a target="_blank" href="pdfrekon2011.php">Seluruh Mutasi 2011</a></li>
      <li><a target="_blank" href="pdfrekontambah.php">Seluruh Data Penambah</a></li>
      <li><a target="_blank" href="pdfrekonlkpd.php">Seluruh LKPD</a></li>
    </ul>
  </li>


  <li id="reports"><a class="top">GIS</a>
    <ul>
      <li><a href="indexGis.php">Input Marking Area</a></li>
      <li><a href="indexnografik.php">Pencarian Lokasi</a></li>
      <li><a href="resumeperiodik1.php">Halaman Percobaan</a></li>
    </ul>
  </li>

  <li id="reports"><a class="top">Extra Comtable</a>
    <ul>
     <li><a href="excomdashboard.php">Dashboard</a></li>
     <li><a href="excomentrysippt.php">Entry SIPPT</a></li>
     <li><a href="excomentrybast.php">Entry BAST</a></li>
     <li><a href="excomentryakun.php">Entry Akun</a></li>
     <li><a href="excomlaporanakun.php">Laporan Akun</a></li>
     <li><a href="excomlaporanakunmix.php">Laporan Akun Kombinasi</a></li>
   </ul>
 </li>

</ul>
<ul class="right">
  <li id="store"><a onClick="window.open('http://demo.dineshjay.com/');" class="top">Store Front</a>
    <ul>
    </ul>
  </li>
  <li id="store"><a class="top" href="logout.php">Logout</a></li>
</ul>




<script type="text/javascript"><!--
  $(document).ready(function() {
   $('#menu > ul').superfish({
    hoverClass	 : 'sfHover',
    pathClass	 : 'overideThisToUse',
    delay		 : 0,
    animation	 : {height: 'show'},
    speed		 : 'normal',
    autoArrows   : false,
    dropShadows  : false, 
    disableHI	 : false, /* set to true to disable hoverIntent detection */
    onInit		 : function(){},
    onBeforeShow : function(){},
    onShow		 : function(){},
    onHide		 : function(){}
  });

   $('#menu > ul').css('display', 'block');
 });

  function getURLVar(urlVarName) {
   var urlHalves = String(document.location).toLowerCase().split('?');
   var urlVarValue = '';

   if (urlHalves[1]) {
    var urlVars = urlHalves[1].split('&');

    for (var i = 0; i <= (urlVars.length); i++) {
     if (urlVars[i]) {
      var urlVarPair = urlVars[i].split('=');

      if (urlVarPair[0] && urlVarPair[0] == urlVarName.toLowerCase()) {
       urlVarValue = urlVarPair[1];
     }
   }
 }
}

return urlVarValue;
} 

$(document).ready(function() {
	route = getURLVar('route');
	
	if (!route) {
		$('#dashboard').addClass('selected');
	} else {
		part = route.split('/');
		
		url = part[0];
		
		if (part[1]) {
			url += '/' + part[1];
		}
		
		$('a[href*=\'' + url + '\']').parents('li[id]').addClass('selected');
	}
});



//--></script>



</div>
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
                    No.Dokumen Acuan :  <input type="text" name="nodokacuan2" <?php if(isset($_POST['nodokacuan'])){ echo "value='".$_POST['nodokacuan']."'"; }?>/>  
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
                            echo "<option >".$data['display']."</option>".$data['display']."</option>";
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
                                  echo "<option >".$data['display']."</option>".$data['display']."</option>";
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


//simpan data ke database
            $query = mysql_query("insert into detaildokacuan values('$nodokacuan', '$tgldokacuan', '$haldokacuan', '$pemegangdokacuan', '$ketdokacuan', '$idkategori')") or die(mysql_error());

            if ($query) {
             echo 'input jenis dokumen berhasil...........';

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
             $sql = "insert into peruntukan(idperuntukan,deskripsi,jenisfasos,luas,statussertifikat,statusplang,statuspenggunaan,sensusfasos,nodokacuan)   
             values ('','{$deskripsi}','{$_POST['jenisfasos'][$key]}','{$_POST['luas'][$key]}','Belum SHP Pemprov. DKI Jakarta','Belum Terpasang','Idle','Belum dilakukan Sensus','$nodokacuan2');";  
             mysql_query($sql); 
             echo $sql; 
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