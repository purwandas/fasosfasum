<link href="css/pagination.css" rel="stylesheet" type="text/css" />
<link href="css/B_blue.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function submit() {
  document.getElementById("formperuntukan").submit();
}

</script>
<article class="col-sm-12 col-md-12 col-lg-12">

	<!-- Widget ID (each widget will need unique ID)-->
	<div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
	<header>
		<span class="widget-icon"> <i class="fa fa-file-text-o"></i></span>
		<h2>Lihat Data Peruntukan</h2>
	</header>

		<!-- widget div-->
		<div class="smart-form">
			
			<div class="widget-body no-padding">
				<fieldset>
					<div class="row">
						<section class="col col-sm-12 col-md-12 col-lg-12">
							<form method="get" action="index.php?hal=lihatperuntukan" id="formperuntukan">
							<input type="hidden" name="hal" value="lihatperuntukan">

						      <div id="content" class="box">
						        
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
						            $offset=($_GET['page']-1)*$reclimit;
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
						          // echo $queryperuntukan;
						          $queryperuntukan.=$limit;
						          $no=$offset+1;
						          echo "<div align='right'>".pagination($qpaging,$reclimit,$cp,"$pth")."</div> <br><br>";

						          ?>
						        <div style="overflow:auto">

						          <table class="table table-striped table-hover">
						            
						            <tr>
						              <td><b>No.</b></td>
						              <td><b>Deskripsi</b></td>
						              <td><b>Jenis</b></td>
						              <td><b>Luas</b></td>
						              <td><b>Sertifikasi</b></td>
						              <td><b>Pemilik</b></td>
						              <td><b>Jenis Sertifikat</b></td>
						              <td><b>Masa Berlaku</b></td>
						              <td><b>Keterangan</b></td>
						              <td><b>Status Laporan Keuangan</b></td>
						              <td><b>Status Recon</b></td>
						              <td><b>Status Sertifikat</b></td>
						              <td><b>No. Sertifikat</b></td>
						              <td><b>Tgl. Sertifikat</b></td>
						              <td><b>Luas Sertifikat</b></td>
						              <td><b>Status Plang</b></td>
						              <td><b>Status Penggunaan</b></td>
						              <td><b>No. SK</b></td>
						              <td><b>Tgl. SK</b></td>
						              <td><b>SKPD</b></td>
						              <td><b>Sensus Fasos Fasum</b></td>
						              <td><b>Jenis Fasos Fasum</b></td>
						              <td><b>No. Dok. Acuan</b></td>
						              <td><b>No. Bast</b></td>
						              <td><b>ID Aset</b></td>
						            </tr>
						            <tr>
						              <td><i class="fa fa-search"></i></td>
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
						        <?php
									echo "<br><div align='left'> <b>*) $totalData Data ditemukan</b> </div>";
				                	echo "<div align='right'>".pagination($qpaging,$reclimit,$cp,"$pth")."</div>";
				                ?>
						      </div>
						    </form>
						</section>
						
					</div>
				</fieldset>
			</div>
		</div>
		<!-- end widget div -->

	</div>
	<!-- end widget -->

</article>
<!-- WIDGET END -->