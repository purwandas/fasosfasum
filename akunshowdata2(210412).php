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
	<script src="jquery.formatCurrency-1.3.0.min" type="text/javascript"></script>
	<script type="text/javascript" src="view/javascript/jquery/superfish/js/superfish.js"></script>
	<script type="text/javascript"></script>

	<script type="text/javascript" src="jquery.price_format.1.6.js"></script>



</head>
<body>
	<div id="container">
		<div id="header">
			<div class="div1">
				<div class="div2"><img src="view/image/logo.png" title="Administration" onclick="location = 'http://localhost/fasosfasum/'" /></div>
				<div class="div3"><img src="view/image/lock.png" alt="" style="position: relative; top: 3px;" />&nbsp;You are logged in as <span>demo</span></div>
			</div>

			<?php
			include("menu.php");
			?>
		</div>


		<div id="content">
			<div class="breadcrumb">
				<a href="index.php">Home</a>

			</div>
			<div class="box">
				<div class="heading">
					<h1><img src="view/image/home.png" alt="" />Result Penilaian</h1>
					<P align=right><span>
						<a target="_blank" href="print.php" ></li>
							<img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
							<a target="_blank" href="print.php">
								Print this page
							</a></span>

						</div>

						<div class="content">

							<div class="overview">
								<div class="dashboard-heading">Data BAST</div>
								<div class="dashboard-content">
									<?php 
									include "koneksi.php";
									$id = $_GET['id'];
									$query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dataaset a on b.nobast=a.nobastaset where nobast='$id'") or die(mysql_error());
									$data = mysql_fetch_array($query);
									?>
									
									<table>

										<tr>
											<td>No.BAST </td><td>: </td><td><?php echo $data['nobast']; ?></td><td>

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
										</tr>
										<tr>
											<td>Jenis Acuan </td><td>: </td><td><?php echo $data['idkategori']; ?></td>
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
								</table>



							</div>
						</div>



						<div class="content">
							<div class="latest">
								<div class="dashboard-heading">Detail Akun Peruntukan</div>
								<div class="dashboard-content">

									<form name="akunting" action="" method=post>
										
										<head>
											<script>
												function jumlah()
												{
													<?php


													?>

												}
											</script>
										</head>

										<body>
											<div style="width:1140px; overflow:auto;">
												<table>
													<?php 
													include "koneksi.php";
													$id = $_GET['id'];
													$query3 = mysql_query("select * from dataaset where nobastaset='$id'") or die(mysql_error());
													while ($data3 = mysql_fetch_array($query3)){
														?>

														<input type="hidden"  name="idaset" value="<?php echo $data3['idaset']; ?>">
														<tr>
															<td>ID Lokasi</td><td>:</td><td><?php echo $data3['idaset']; ?></td>
														</tr>
														<tr>
															<td>Alamat lokasi</td><td>:</td><td><?php echo $data3['alamataset']; ?></td>
														</tr>
														<tr>
															<td>Wilayah</td><td>:</td><td><?php echo $data3['wilayah']; ?></td>
														</tr>
														<tr>
															<td>Kecamatan</td><td>:</td><td><?php echo $data3['kecamatan']; ?></td>
														</tr>
														<tr>
															<td>Kelurahan</td><td>:</td><td><?php echo $data3['kelurahan']; ?></td>
														</tr>


														<tr>
															
															<table class="list" id=datatable1 width="1400" border="1" >
																
																<thead>
																	<tr>
																		<td class="center">No.</td>
																		<td class="center">ID</td>
																		<td class="center">Peruntukan</td>
																		
																		<td class="center">Kategori KIB</td>
																		<td class="center">Volume</td>
																		<td class="center">Satuan</td>
																		<td class="center">Nilai Pengali (Rp)</td>
																		<td class="center">Penilaian PerGub 132 (Rp)</td>
																		<td class="center">Nilai BAST (Rp)</td>
																		<td class="center">Nilai Kombinasi (Rp)</td>
																		<td class="center">Keterangan</td>
																		<td class="center">Action</td>
																	</tr>
																</thead>


																
																<tbody>



																	<script language="JavaScript">

																		function konfirmasi(){
																			var pilihan = confirm("We can't delete by item, Are you sure want to delete All Data ?");
																			if(pilihan){
																				return true
																			}else{
																				return false
																			}
																		}
																	</script>


																	<?php 
																	include "koneksi.php";
																	
																	
																	$query2 = mysql_query("select * from akun a inner join peruntukan b on a.idperuntukan=b.idperuntukan where a.idaset='".$data3['idaset']."'") or die(mysql_error());

																	$no = 1;
																	while ($data2 = mysql_fetch_array($query2)){
																		
																		?>

																		<tr>
																			<td class="center"><?php echo $no; ?></td>
																			
																			<td class="left"><?php echo $data2['idperuntukan']; ?></td>
																			
																			<td class="left"><?php echo $data2['deskripsi']; ?></td>
																			<td class="center"><?php echo $data2['kategoriaset']; ?></td>
																			<td class="center"><?php print number_format ($data2['volume']); ?></td>
																			<td class="center"><?php echo $data2['satuan']; ?></td>
																			<td class="center"><?php print number_format  ($data2['nilainjop'],2); ?></td>
																			<td class="center"><?php print number_format  ($data2['jumnjop'],2); ?></td>
																			<td class="center"><?php print number_format  ($data2['nilaibast'],2); ?></td>
																			<td class="center"><?php print number_format  ($data2['nilaimix'],2); ?></td>
																			<td class="right"><?php echo $data2['ketakun']; ?></td>		
																			<td class="center"><a href="akunedit.php?id=<?php echo $data2['nobast']; ?>">Edit</a>.|.<a href="akunhapus2.php?id=<?php echo $data2['nobast']; ?>" onClick="return konfirmasi()">Hapus</a></td>
																		</tr>


																		<?php
																		$no++;
																	}

																	$query1 = mysql_query("select distinct nobast,totnjop, totbast, totapp, totmix, bastdokumen  from akun where idaset='".$data3['idaset']."'") or die(mysql_error());
																	while ($data1 = mysql_fetch_array($query1)){



																		?>
																		<thead>
																			<tr>
																				<td class="center"><?php ?></td>
																				<td class="left"><?php  ?></td>
																				
																				<td class="center"><?php  ?></td>
																				<td class="right"><?php  ?></td>
																				<td class="center"><?php  ?></td>
																				<td class="left"><?php ?></td>
																				<td class="left"><?php  ?></td>
																				<td class="center"><?php print number_format ($data1['totnjop'],2); ?></td>
																				<td class="center"><?php print number_format ($data1['totbast'],2); ?></td>
																				<td class="center"><?php print number_format ($data1['totmix'],2); ?></td>
																				<td class="right"><?php ?></td>		
																				<td class="center"><?php ?></td>
																			</tr>

																		</thead>

																		
																		
																		
																		

																	</tbody>


																</table>
																

																<?php
																
																
															}
															?>
															<script type="text/javascript">
																$(function(){
																	$(".volume").keyup(function(){
																		var jmlnjop = $(this).parent().next().next().next().find('.jmlnjop');
																		var nilainjop = $(this).parent().next().next().find('.nilainjop');
																		$(jmlnjop).val($(this).val() * $(nilainjop).val());
																	});
																	$(".nilainjop").keyup(function(){
																		var jmlnjop = $(this).parent().next().find('.jmlnjop');
																		var volume = $(this).parent().prev().prev().find('.volume');
																		$(jmlnjop).val($(this).val()*$(volume).val());
																	});
																});
															</script>





															<script type="text/javascript">
																$(function(){
																	$(".volume").keyup(function(){
																		var jmlapp = $(this).parent().next().next().next().next().next().next().find('.jmlapp');
																		var nilaiapp = $(this).parent().next().next().next().next().next().find('.nilaiapp');
																		$(jmlapp).val($(this).val() * $(nilaiapp).val());
																	});
																	$(".nilaiapp").keyup(function(){
																		var jmlapp = $(this).parent().next().find('.jmlapp');
																		var volume = $(this).parent().prev().prev().prev().prev().prev().find('.volume');
																		$(jmlapp).val($(this).val()*$(volume).val());
																	});
																});
															</script>



															<script type="text/javascript">
																$(function(){
																	$('input[name^="nilainjop"]').keyup(function(){

																		var total = 0;
																		$('input[name^="nilainjop"]').each(function(){
																			var volume = $(this).parent().prev().prev().find('input[name^="volume"]');

																			total += parseFloat($(this).val()*$(volume).val());
																		});
																		$("#total").val(total);
																	});
																});
															</script>


															<script type="text/javascript">
																$(function(){
																	$('input[name^="nilaibast"]').keyup(function(){

																		var total = 0;
																		$('input[name^="nilaibast"]').each(function(){

																			total += parseFloat($(this).val());
																		});
																		$("#total1").val(total);
																	});
																});
															</script>

															<script type="text/javascript">
																$(function(){
																	$('input[name^="nilaiapp"]').keyup(function(){

																		var total = 0;
																		$('input[name^="nilaiapp"]').each(function(){
																			var volume = $(this).parent().prev().prev().prev().prev().prev().find('input[name^="volume"]');

																			total += parseFloat($(this).val()*$(volume).val());
																		});
																		$("#total2").val(total);
																	});
																});
															</script>






															
														</tr>

														<?php
														
													}
													?>
												</table>


											</div>
										</body>


									</form>



									<?php

									function jin_date_sql($date){
										$exp = explode('/',$date);
										if(count($exp) == 3) {
											$date = $exp[2].'-'.$exp[1].'-'.$exp[0];
										}
										return $date;
									}

									include "koneksi.php";

									if (isset($_POST['submit'])){

										$nobast=$_POST['nobast'];

										$check = mysql_query("SELECT nobast FROM akun WHERE nobast = '$nobast'") or die(mysql_error());
										$check2 = mysql_num_rows($check);

    			//if the name exists it gives an error
										if ($check2 != 0)
										{
											?>
											<script type="text/javascript">
												alert("Dokumen Akun No:  <?php echo $nobast; ?> has already registered.....");
												history.back();
											</script>
											<?php

										}else





										$tanggal =$data['tglbast'];
										$tglsql=jin_date_sql($tanggal);

										foreach($_POST['idperuntukan'] as $key => $value){
											if($value){


//simpan data ke database
												$query = mysql_query("INSERT INTO akun VALUES('".$value."','".$_POST['nobast']."','".$tglsql."','".$_POST['idaset']."','".$_POST['kategori'][$key]."','".$_POST['volume'][$key]."','".$_POST['satuan'][$key]."','".$_POST['nilainjop'][$key]."','".$_POST['nilaibast'][$key]."','0','".$_POST['jmlnjop'][$key]."','0','".$_POST['ketakun'][$key]."','".$_POST['total']."','".$_POST['total1']."','".$_POST['total2']."')") or die(mysql_error());


											}
											echo 'Input data akun berhasil .....';
										}
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