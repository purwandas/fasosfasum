<?php
// session_start();
require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
<head>
  <title>Fasos Fasum BPKD DKI Jakarta</title>
  
  <link href="sources/B_blue.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="sources/font-awesome-4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="view/stylesheet/stylesheet.css" />
  <link rel="stylesheet" type="text/css" href="view/javascript/jquery/ui/themes/ui-lightness/ui.all.css" />
  <script type="text/javascript" src="view/javascript/jquery/jquery-1.3.2.min.js"></script>
  <script type="text/javascript" src="view/javascript/jquery/ui/jquery-ui-1.8.9.custom.min.js"></script>
  <link rel="stylesheet" type="text/css" href="view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.9.custom.css" />
  <script type="text/javascript" src="view/javascript/jquery/ui/ui.core.js"></script>
  <script type="text/javascript" src="view/javascript/jquery/superfish/js/superfish.js"></script>
  <script type="text/javascript" src="view/javascript/jquery/tab.js"></script>
  <script type="text/javascript" src="view/javascript/jquery/menu/jquery.menu.js"></script>

  <script type="text/javascript" src="view/javascript/jquery/ui/external/jquery.bgiframe-2.1.2.js"></script>
  <!-- <script src="js/jquery.price_format.1.6.js" type="text/javascript"></script> -->

  <script type="text/javascript" src="view/javascript/jquery/superfish/js/superfish.js"></script>
  <script type="text/javascript">

  </script>
  <script type="text/javascript">
    function submit() {
      document.getElementById("formperuntukan").submit();
    }

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
      include"menu.php";
      ?>
    </div>
    <form method="get" action="" id="formperuntukan">
      <div id="content" class="box">
        <div class="heading">
          <h1><img src="view/image/home.png" alt="" /> Data Peruntukan</h1>
        </div>
        <div style="overflow:auto">
          <?php
          include("koneksi.php");
          $queryperuntukan="select * from peruntukan";
          if(isset($_GET['deskripsi'])){
            $cek='0';
            if($_GET['deskripsi']!=''){$deskripsi="deskripsi like '%$_GET[deskripsi]%'";$cek='1';}else{$deskripsi='';}
            if($_GET['jenis']!=''){$jenis="jenis like '%$_GET[jenis]%'";if($cek!='0'){$jenis=' and '.$jenis;}}else{$jenis='';}
            if($_GET['luas']!=''){$luas="luas like '%$_GET[luas]%'";if($cek!='0'){$luas=' and '.$luas;}}else{$luas='';}
            if($_GET['sertifikasi']!=''){$sertifikasi="sertifikasi like '%$_GET[sertifikasi]%'";if($cek!='0'){$sertifikasi=' and '.$sertifikasi;}}else{$sertifikasi='';}
            if($_GET['pemilik']!=''){$pemilik="pemilik like '%$_GET[pemilik]%'";if($cek!='0'){$pemilik=' and '.$pemilik;}}else{$pemilik='';}
            if($_GET['jenissertifikat']!=''){$jenissertifikat="jenissertifikat like '%$_GET[jenissertifikat]%'";if($cek!='0'){$jenissertifikat=' and '.$jenissertifikat;}}else{$jenissertifikat='';}
            if($_GET['masaberlaku']!=''){$masaberlaku="masaberlaku like '%$_GET[masaberlaku]%'";if($cek!='0'){$masaberlaku=' and '.$masaberlaku;}}else{$masaberlaku='';}
            if($_GET['keterangan']!=''){$keterangan="keterangan like '%$_GET[keterangan]%'";if($cek!='0'){$keterangan=' and '.$keterangan;}}else{$keterangan='';}
            if($_GET['statuslaporankeuangan']!=''){$statuslaporankeuangan="statuslaporankeuangan like '%$_GET[statuslaporankeuangan]%'";if($cek!='0'){$statuslaporankeuangan=' and '.$statuslaporankeuangan;}}else{$statuslaporankeuangan='';}
            if($_GET['statusrecon']!=''){$statusrecon="statusrecon like '%$_GET[statusrecon]%'";if($cek!='0'){$statusrecon=' and '.$statusrecon;}}else{$statusrecon='';}
            if($_GET['statussertifikat']!=''){$statussertifikat="statussertifikat like '%$_GET[statussertifikat]%'";if($cek!='0'){$statussertifikat=' and '.$statussertifikat;}}else{$statussertifikat='';}
            if($_GET['nosertifikat']!=''){$nosertifikat="nosertifikat like '%$_GET[nosertifikat]%'";if($cek!='0'){$nosertifikat=' and '.$nosertifikat;}}else{$nosertifikat='';}
            if($_GET['tglsertifikat']!=''){$tglsertifikat="tglsertifikat like '%$_GET[tglsertifikat]%'";if($cek!='0'){$tglsertifikat=' and '.$tglsertifikat;}}else{$tglsertifikat='';}
            if($_GET['luassertifikat']!=''){$luassertifikat="luassertifikat like '%$_GET[luassertifikat]%'";if($cek!='0'){$luassertifikat=' and '.$luassertifikat;}}else{$luassertifikat='';}
            if($_GET['statusplang']!=''){$statusplang="statusplang like '%$_GET[statusplang]%'";if($cek!='0'){$statusplang=' and '.$statusplang;}}else{$statusplang='';}
            if($_GET['statuspenggunaan']!=''){$statuspenggunaan="statuspenggunaan like '%$_GET[statuspenggunaan]%'";$cek='1';if($cek!='0'){$statuspenggunaan=' and '.$statuspenggunaan;}}else{$statuspenggunaan='';}
            if($_GET['nosk']!=''){$nosk="nosk like '%$_GET[nosk]%'";$cek='1';if($cek!='0'){$nosk=' and '.$nosk;}}else{$nosk='';}
            if($_GET['tglsk']!=''){$tglsk="tglsk like '%$_GET[tglsk]%'";$cek='1';if($cek!='0'){$tglsk=' and '.$tglsk;}}else{$tglsk='';}
            if($_GET['skpd']!=''){$skpd="skpd like '%$_GET[skpd]%'";$cek='1';if($cek!='0'){$skpd=' and '.$skpd;}}else{$skpd='';}
            if($_GET['sensusfasos']!=''){$sensusfasos="sensusfasos like '%$_GET[sensusfasos]%'";$cek='1';if($cek!='0'){$sensusfasos=' and '.$sensusfasos;}}else{$sensusfasos='';}
            if($_GET['jenisfasos']!=''){$jenisfasos="jenisfasos like '%$_GET[jenisfasos]%'";$cek='1';if($cek!='0'){$jenisfasos=' and '.$jenisfasos;}}else{$jenisfasos='';}
            if($_GET['nodokacuan']!=''){$nodokacuan="nodokacuan like '%$_GET[nodokacuan]%'";$cek='1';if($cek!='0'){$nodokacuan=' and '.$nodokacuan;}}else{$nodokacuan='';}
            if($_GET['nobast']!=''){$nobast="nobast like '%$_GET[nobast]%'";$cek='1';if($cek!='0'){$nobast=' and '.$nobast;}}else{$nobast='';}
            if($_GET['idaset']!=''){$idaset="idaset like '%$_GET[idaset]%'";$cek='1';if($cek!='0'){$idaset=' and '.$idaset;}}else{$idaset='';}
              $queryperuntukan.=" where $deskripsi $jenis $luas $sertifikasi $pemilik $jenissertifikat $masaberlaku $keterangan $statuslaporankeuangan $statusrecon $statussertifikat $nosertifikat $tglsertifikat $luassertifikat $statusplang $statuspenggunaan $nosk $tglsk $skpd $sensusfasos $jenisfasos $nodokacuan $nobast $idaset";
          }

          $reclimit=20;
          if(isset($_GET['page'])){
            $offset=$_GET['page']*$reclimit;
          }else{
            $offset=0;
          }
          if(empty($_GET)){
            $qr='?';
          }else{
            $qr='&';
          }
          include ("pagination.php");
          if(isset($_GET['page'])){
            $plng=strlen($_GET['page']);
            $pth=substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",0,strlen("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")-(5+$plng));
            $cp=$_GET['page'];
          }else{
            $pth="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]$qr";
            $cp=1;
          }
          $limit=" LIMIT $offset, $reclimit";
          $totalData=mysql_num_rows(mysql_query($queryperuntukan));
          $page=ceil(mysql_num_rows(mysql_query($queryperuntukan))/$reclimit);
          $qpaging=$queryperuntukan;
          echo $queryperuntukan;
          $queryperuntukan.=$limit;
          $no=$offset+1;
          echo "<div align='right'>".pagination($qpaging,$reclimit,$cp,"$pth")."</div>";

          ?>
          <table>
            <tr>
              <td></td>
              <td><input type="text" value="<?php if(isset($_GET['deskripsi'])){echo $_GET['deskripsi'];} ?>" name="deskripsi" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['jenis'])){echo $_GET['jenis'];} ?>" name="jenis" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['luas'])){echo $_GET['luas'];} ?>" name="luas" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['sertifikasi'])){echo $_GET['sertifikasi'];} ?>" name="sertifikasi" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['pemilik'])){echo $_GET['pemilik'];} ?>" name="pemilik" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['jenissertifikat'])){echo $_GET['jenissertifikat'];} ?>" name="jenissertifikat" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['masaberlaku'])){echo $_GET['masaberlaku'];} ?>" name="masaberlaku" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['keterangan'])){echo $_GET['keterangan'];} ?>" name="keterangan" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['statuslaporankeuangan'])){echo $_GET['statuslaporankeuangan'];} ?>" name="statuslaporankeuangan" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['statusrecon'])){echo $_GET['statusrecon'];} ?>" name="statusrecon" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['statussertifikat'])){echo $_GET['statussertifikat'];} ?>" name="statussertifikat" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['nosertifikat'])){echo $_GET['nosertifikat'];} ?>" name="nosertifikat" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['tglsertifikat'])){echo $_GET['tglsertifikat'];} ?>" name="tglsertifikat" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['luassertifikat'])){echo $_GET['luassertifikat'];} ?>" name="luassertifikat" onchange="submit()"</td>
              <td><input type="text" value="<?php if(isset($_GET['statusplang'])){echo $_GET['statusplang'];} ?>" name="statusplang" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['statuspenggunaan'])){echo $_GET['statuspenggunaan'];} ?>" name="statuspenggunaan" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['nosk'])){echo $_GET['nosk'];} ?>" name="nosk" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['tglsk'])){echo $_GET['tglsk'];} ?>" name="tglsk" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['skpd'])){echo $_GET['skpd'];} ?>" name="skpd" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['sensusfasos'])){echo $_GET['sensusfasos'];} ?>" name="sensusfasos" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['jenisfasos'])){echo $_GET['jenisfasos'];} ?>" name="jenisfasos" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['nodokacuan'])){echo $_GET['nodokacuan'];} ?>" name="nodokacuan" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['nobast'])){echo $_GET['nobast'];} ?>" name="nobast" onchange="submit()"></td>
              <td><input type="text" value="<?php if(isset($_GET['idaset'])){echo $_GET['idaset'];} ?>" name="idaset" onchange="submit()"></td>
            </tr>
            <tr>
              <td>No.</td>
              <td>Deskripsi</td>
              <td>Jenis</td>
              <td>Luas</td>
              <td>Sertifikasi</td>
              <td>Pemilik</td>
              <td>Jenis Sertifikat</td>
              <td>Masa Berlaku</td>
              <td>Keterangan</td>
              <td>Status Laporan Keuangan</td>
              <td>Status Recon</td>
              <td>Status Sertifikat</td>
              <td>No. Sertifikat</td>
              <td>Tgl. Sertifikat</td>
              <td>Luas Sertifikat</td>
              <td>Status Plang</td>
              <td>Status Penggunaan</td>
              <td>No. SK</td>
              <td>Tgl. SK</td>
              <td>SKPD</td>
              <td>Sensus Fasos Fasum</td>
              <td>Jenis Fasos Fasum</td>
              <td>No. Dok. Acuan</td>
              <td>No. Bast</td>
              <td>ID Aset</td>
            </tr>
            <?php
            $queryperuntukan=mysql_query($queryperuntukan);
            while ($dataperuntukan=mysql_fetch_array($queryperuntukan)) {
              echo "
              <tr>
                <td>$no</td>
                <td>$dataperuntukan[deskripsi]</td>
                <td>$dataperuntukan[jenis]</td>
                <td>$dataperuntukan[luas]</td>
                <td>$dataperuntukan[sertifikasi]</td>
                <td>$dataperuntukan[pemilik]</td>
                <td>$dataperuntukan[jenissertifikat]</td>
                <td>$dataperuntukan[masaberlaku]</td>
                <td>$dataperuntukan[keterangan]</td>
                <td>$dataperuntukan[statuslaporankeuangan]</td>
                <td>$dataperuntukan[statusrecon]</td>
                <td>$dataperuntukan[statussertifikat]</td>
                <td>$dataperuntukan[nosertifikat]</td>
                <td>$dataperuntukan[tglsertifikat]</td>
                <td>$dataperuntukan[luassertifikat]</td>
                <td>$dataperuntukan[statusplang]</td>
                <td>$dataperuntukan[statuspenggunaan]</td>
                <td>$dataperuntukan[nosk]</td>
                <td>$dataperuntukan[tglsk]</td>
                <td>$dataperuntukan[skpd]</td>
                <td>$dataperuntukan[sensusfasos]</td>
                <td>$dataperuntukan[jenisfasos]</td>
                <td>$dataperuntukan[nodokacuan]</td>
                <td>$dataperuntukan[nobast]</td>
                <td>$dataperuntukan[idaset]</td>
              </tr>
              ";
              $no++;
            }
            ?>
          </table>
        </div>
        
      </div>
    </form>
    <div id="footer"></div>
  </body>
  </html>