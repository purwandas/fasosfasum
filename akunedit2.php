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
				<div class="div3"><img src="view/image/lock.png" alt="" style="position: relative; top: 3px;" />&nbsp;Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?>, you are logged in as <span>user</span></div>
			</div>

		</div>

			<?php
				include("menu.php");
			?>
		<div id="content">
			<div class="breadcrumb">
				<a href="home.php">Home</a>

			</div>
			<div class="box">
				<div class="heading">
					<h1><img src="view/image/home.png" alt="" />Entry Nilai</h1>
					<P align=right><span>
						<a target="_blank" href="print.php" ></li>
							<img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
							<a target="_blank" href="print.php">
								Print this page
							</a></span>

						</div>

						<div class="content">

							<div class="latest">
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
					</div>


					<div class="content">
						<div class="latest">
							<div class="dashboard-heading">Detail Peruntukan</div>
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
										<div style= "width:1100px; overflow:auto;">
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

														<table class="list" id=datatable1 width="1100" border="1" >

															<thead>
																<tr>
																	<td class="center">No.</td>
																	<td class="center">ID</td>
																	<td class="center">Peruntukan</td>
																	<td class="center">Kategori KIB</td>
																	<td class="center">Volume</td>
																	<td class="center">Satuan</td>
																	<td class="center">Nilai Pengali (Rp)</td>
																	<td class="center">VolxNilaiPengali (Rp)</td>
																	<td class="center">NilaiBAST Upto2007(Rp)</td>

																	<td class="center">Nilai Appraisal (Rp)</td>
																	<td class="center">VolxAppraisal (Rp)</td>
																	<td class="center">Keterangan</td>
																</tr>
															</thead>



															<tbody>


																<?php 
																include "koneksi.php";

																$query2 = mysql_query("select * from akun a inner join peruntukan b on a.idperuntukan=b.idperuntukan where a.idaset='".$data3['idaset']."'") or die(mysql_error());

																$no = 1;
																while ($data2 = mysql_fetch_array($query2)){
																	?>
																	<input type="hidden" name="nobast" value="<?php echo $id; ?>">
																	<input type="hidden" name="tglbast" value="<?php echo $data['tglbast']; ?>">

																	<tr>
																		<td class="center"><?php echo $no; ?></td>
																		<td><input type="hidden"  'text' name='idperuntukan[]' value="<?php echo $data2['idperuntukan']; ?>" ></td>
																		<td><input type='text' name='deskripsi[]' value="<?php echo $data2['deskripsi']; ?>"></td>

																		<td><select  name='kategori[]'><option value="<?php echo $data2['kategoriaset']; ?>"><?php echo $data2['kategoriaset']; ?></option><option>KIB A</option><option>KIB B</option><option>KIB C</option><option>KIB D</option><option>KIB E</option></select>

																			<td><input type='text' id="volume" name='volume[]' value="<?php echo $data2['volume']; ?>" class='volume'></td>

																			<td><select name='satuan[]'><option value="<?php echo $data2['satuan']; ?>"><?php echo $data2['satuan']; ?></option><option>m</option><option>m1</option><option>m2</option><option>m3</option><option>unit</option><option>paket</option> <option>titik</option> <option>buah</option><option>set</option></select>

																				<td><input type='text' id="nilainjop" name='nilainjop[]' value="<?php echo $data2['nilainjop']; ?>" class='nilainjop'></td>
																				<td><input type='text' id="jmlnjop" name='jmlnjop[]' value="<?php echo $data2['jumnjop']; ?>" class='jmlnjop'></td>
																				<td><input type='text' name='nilaibast[]' value="<?php echo $data2['nilaibast']; ?>" class='nilaibast'></td>

																				<td><input type='text' name='nilaiapp[]' value="<?php echo $data2['nilaiapp']; ?>" class='nilaiapp'></td>
																				<td><input type='text' name='jmlapp[]' value="<?php echo $data2['jumapp']; ?>" class='jmlapp'></td>
																				<td><input type='text' name='ketakun[]' value="<?php echo $data2['ketakun']; ?>"></td>
																			</tr>

																			<?php
																			$no++;
																		}
																		?>
																	</tbody>

																</table>




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

																<?php 
																include "koneksi.php";

																$query4 = mysql_query("select distinct nobast,totnjop, totbast, totapp, bastdokumen  from akun where idaset='".$data3['idaset']."'") or die(mysql_error());


																while ($data4 = mysql_fetch_array($query4)){
																	?>


																	<td></td><td><b>Total Nilai NJOP : </b></td><td><input type='text' value= "<?php echo $data4['totnjop']; ?>" name='total' id='total'/></td>
																	<br><br>
																	<td></td><td><b>Total Nilai BAST : </b></td><td><input type='text' value="<?php echo $data4['totbast']; ?>" name='total1' id='total1'/></td>
																	<br><br>
																	<td></td><td><b>Total Nilai Appraisal : </b></td><td><input type='text' value="<?php echo $data4['totapp']; ?>" name='total2' id='total2'/></td>
																	<br><br>
																	<td></td><td><b>Nilai BAST pada Dokumen : </b></td><td><input type='text' value="<?php echo $data4['bastdokumen']; ?>" name='bastdokumen' id='total2'/></td>
																	<br><br>
																	<?php
																}
																?>

																<right><input type=submit name="submit" value="Edit"/></right><td></td>
																<a href="akunshowdata.php?id=<?php echo $data['nobast']; ?>">Show result here...</a>
																<br><br>

																<table>
																	<tr>
																		<tr><td>Keterangan :</td></tr>
																		<tr><td>KIB A : Tanah</td></tr>
																		<tr><td>KIB B : Peralatan dan Mesin</td></tr>
																		<tr><td>KIB C : Gedung dan Bangunan</td></tr>
																		<tr><td>KIB D : Jalan, Jaringan dan Instalasi</td></tr>
																		<tr><td>KIB E : Aset Tetap Lainnya</td></tr>
																	</tr>
																</table>
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




											$tanggal =$data['tglbast'];
											$tglsql=jin_date_sql($tanggal);

											foreach($_POST['idperuntukan'] as $key => $value){
												if($value){


//update data ke database
													$query = mysql_query("update akun set idperuntukan='".$value."',nobast='".$_POST['nobast']."',tglbast='".$tglsql."',idaset='".$_POST['idaset']."',kategoriaset='".$_POST['kategori'][$key]."',volume='".$_POST['volume'][$key]."',satuan='".$_POST['satuan'][$key]."',nilainjop='".$_POST['nilainjop'][$key]."',nilaibast='".$_POST['nilaibast'][$key]."',nilaiapp='".$_POST['nilaiapp'][$key]."',jumnjop='".$_POST['jmlnjop'][$key]."',jumapp='".$_POST['jmlapp'][$key]."',ketakun='".$_POST['ketakun'][$key]."',totnjop='".$_POST['total']."',totbast='".$_POST['total1']."',totapp='".$_POST['total2']."',bastdokumen='".$_POST['bastdokumen']."' where idperuntukan='".$value."'") or die(mysql_error()) ;



												}
												echo 'Input data akun berhasil .....';
											}
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