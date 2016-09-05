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
						<h1><img src="view/image/home.png" alt="" /> Irisan</h1>
						<P align=right><span>
							<a target="_blank" href="print.php" ></li>
								<img alt=" " src="view/image/printer.gif" border=0></a>&nbsp;
								<a target="_blank" href="print.php">
									Print this page
								</a></span>

							</div>

							<div class="content">
								<div class="latest">
									<div class="dashboard-heading">Pilihan</div>
									<div class="dashboard-content">

										<?php
										include "koneksi.php";
										

										?>
										
										<form method="post" action="">

											<table>
												<tr><td><input type="checkbox" name="pulomas" value="1" /> Data Pulo Mas<br/></td></tr>	
												<tr><td><input type="checkbox" name="rekon163" value="1"/>Data Rekon 163<br/></td></tr>
												<tr><td><input type="checkbox" name="rekon54" value="1" /> Data Rekon 54<br/></td></tr>
												<tr><td><input type="checkbox" name="rekon101" value="1" /> Data Rekon 101<br/></td></tr>
												<tr><td><input type="checkbox" name="rekon129" value="1" /> Data Rekon 129<br/></td></tr>
												<tr><td><input type="checkbox" name="balaikota" value="1" /> Data Balai Kota Lt.7 <br/></td></tr>
												<tr><td><input type="checkbox" name="tp3w" value="1" /> Data TP3W <br/></td></tr>
												<tr><td><input type="checkbox" name="lokasi58" value="1" /> Data 58<br/></td></tr>
												<tr><td><input type="checkbox" name="dtr" value="1" /> Data DTR <br/>	</td></tr>
												<tr><td><input type="checkbox" name="bpk357" value="1" /> Data BPK357 <br/></td></tr>
												
												<tr><td align="right"><input type="submit" value="Tampilkan" name="submit22"></td></tr>
												
											</tr>
										</table>
										
									</form> 

									

									<table class="list" cellpadding="5" cellspacing="5">

										<thead>
											<tr>
												<td class="center">No.</td>        	
												<td class="center">No.BAST</td>
												<td class="center">pulomas</td>
												<td class="center">rekon163</td>
												<td class="center">rekon54</td>
												<td class="center">rekon129</td>
												<td class="center">rekon101</td>
												<td class="center">balaikota</td>
												<td class="center">dtr</td>
												<td class="center">tp3w</td>
												<td class="center">lokasi58</td>
												<td class="center">bpk357</td>
												<td class="center">Action</td>
											</tr>
										</thead>
										
										<?php
										if(isset($_REQUEST['submit22'])) {

											include "koneksi.php";
											

											if (isset($_POST['pulomas'])) 
											{
												$query = mysql_query("select * from lokasidokumen where pulomas='1' ") or die(mysql_error());
											}

											if ( (isset($_POST['pulomas'])) && (isset($_POST['rekon163']))  )
											{
												$query = mysql_query("select * from lokasidokumen where pulomas='1' && rekon163='1' ") or die(mysql_error());

											}

											if (  (isset($_POST['pulomas'])) && (isset($_POST['rekon163'])) && (isset($_POST['rekon54']))  )
											{
												$query = mysql_query("select * from lokasidokumen where pulomas='1' && rekon163='1' && rekon54='1' ") or die(mysql_error());
											}

											if (  (isset($_POST['pulomas'])) && (isset($_POST['rekon163'])) && (isset($_POST['rekon54'])) && (isset($_POST['rekon129']))  )
											{
												$query = mysql_query("select * from lokasidokumen where pulomas='1' && rekon163='1' && rekon54='1' && rekon129='1' ") or die(mysql_error());
											}

											if (  (isset($_POST['pulomas'])) && (isset($_POST['rekon163'])) && (isset($_POST['rekon54'])) && (isset($_POST['rekon129'])) && (isset($_POST['rekon101']))   )
											{
												$query = mysql_query("select * from lokasidokumen where pulomas='1' && rekon163='1' && rekon54='1' && rekon129='1' && rekon101='1'") or die(mysql_error());
											}

											if (  (isset($_POST['pulomas'])) && (isset($_POST['rekon163'])) && (isset($_POST['rekon54'])) && (isset($_POST['rekon129'])) && (isset($_POST['rekon101'])) && (isset($_POST['balaikota']))  )
											{
												$query = mysql_query("select * from lokasidokumen where pulomas='1' && rekon163='1' && rekon54='1' && rekon129='1' && rekon101='1' && balaikota='1' ") or die(mysql_error());
											}

											if (  (isset($_POST['pulomas'])) && (isset($_POST['rekon163'])) && (isset($_POST['rekon54'])) && (isset($_POST['rekon129'])) && (isset($_POST['rekon101'])) && (isset($_POST['balaikota'])) && (isset($_POST['dtr']))  )
											{
												$query = mysql_query("select * from lokasidokumen where pulomas='1' && rekon163='1' && rekon54='1' && rekon129='1' && rekon101='1' && balaikota='1' && dtr='1' ") or die(mysql_error());
											}

											if (  (isset($_POST['pulomas'])) && (isset($_POST['rekon163'])) && (isset($_POST['rekon54'])) && (isset($_POST['rekon129'])) && (isset($_POST['rekon101'])) && (isset($_POST['balaikota'])) && (isset($_POST['dtr'])) && (isset($_POST['tp3w'])) )
											{
												$query = mysql_query("select * from lokasidokumen where pulomas='1' && rekon163='1' && rekon54='1' && rekon129='1' && rekon101='1' && balaikota='1' && dtr='1' && tp3w='1'") or die(mysql_error());
											}

											if (  (isset($_POST['pulomas'])) && (isset($_POST['rekon163'])) && (isset($_POST['rekon54'])) && (isset($_POST['rekon129'])) && (isset($_POST['rekon101'])) && (isset($_POST['balaikota'])) && (isset($_POST['dtr'])) && (isset($_POST['tp3w'])) && (isset($_POST['lokasi58']))  )
											{
												$query = mysql_query("select * from lokasidokumen where pulomas='1' && rekon163='1' && rekon54='1' && rekon129='1' && rekon101='1' && balaikota='1' && dtr='1' && tp3w='1' && lokasi58='1'") or die(mysql_error());
											}


											if (  (isset($_POST['pulomas'])) && (isset($_POST['rekon163'])) && (isset($_POST['rekon54'])) && (isset($_POST['rekon129'])) && (isset($_POST['rekon101'])) && (isset($_POST['balaikota'])) && (isset($_POST['dtr'])) && (isset($_POST['tp3w'])) && (isset($_POST['lokasi58'])) && (isset($_POST['bpk357'])) )
											{
												$query = mysql_query("select * from lokasidokumen where pulomas='1' && rekon163='1' && rekon54='1' && rekon129='1' && rekon101='1' && balaikota='1' && dtr='1' && tp3w='1' && lokasi58='1' && bpk357='1'") or die(mysql_error());
											}

											
											if (  (isset($_POST['pulomas'])) && (isset($_POST['rekon54']))  )
											{
												$query = mysql_query("select * from lokasidokumen where pulomas='1' && rekon54='1'") or die(mysql_error());
											}

											if (  (isset($_POST['pulomas'])) && (isset($_POST['rekon54'])) && (isset($_POST['rekon129']))  )
											{
												$query = mysql_query("select * from lokasidokumen where pulomas='1' && rekon54='1' && rekon129='1'") or die(mysql_error());
											}












										}
										else
											$query = mysql_query("select * from lokasidokumen") or die(mysql_error());
										$no = 1;
										while ($data = mysql_fetch_array($query)) {
											?>
											<tbody>
												<tr>
													<td class="center"><?php echo $no; ?></td>
													<td class="left"><?php echo $data['nobastlokasi']; ?></td>
													<td class="center"><?php echo $data['pulomas']; ?></td>
													<td class="left"><?php echo $data['rekon163']; ?></td>
													<td class="left"><?php echo $data['rekon54']; ?></td>
													<td class="left"><?php echo $data['rekon129']; ?></td>
													<td class="center"><?php echo $data['rekon101']; ?></td>
													<td class="left"><?php echo $data['balaikota']; ?></td>
													<td class="left"><?php echo $data['dtr']; ?></td>
													<td class="left"><?php echo $data['tp3w']; ?></td>        	
													<td class="center"><?php echo $data['lokasi58']; ?></td>
													<td class="left"><?php echo $data['bpk357']; ?></td>
													<td class="center"><a href="viewdetailbast.php?id=<?php echo $data['nobast']; ?>">view</a></td>
												</tr>
												<tr>
													<td class="center"><></td>
													<td class="left"><?php echo $data['nobastlokasi']; ?></td>
													<td class="center"><?php echo $data['pulomas']; ?></td>
													<td class="left"><?php echo $data['rekon163']; ?></td>
													<td class="left"><?php echo $data['rekon54']; ?></td>
													<td class="left"><?php echo $data['rekon129']; ?></td>
													<td class="center"><?php echo $data['rekon101']; ?></td>
													<td class="left"><?php echo $data['balaikota']; ?></td>
													<td class="left"><?php echo $data['dtr']; ?></td>
													<td class="left"><?php echo $data['tp3w']; ?></td>        	
													<td class="center"><?php echo $data['lokasi58']; ?></td>
													<td class="left"><?php echo $data['bpk357']; ?></td>
													<td class="center"><a href="viewdetailbast.php?id=<?php echo $data['nobast']; ?>">view</a></td>
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