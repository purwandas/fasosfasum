<?php
	require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
<head>
<title>Fasos Fasum BPKD DKI Jakarta</title>

<link rel="stylesheet" type="text/css" href="../view/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="../view/javascript/jquery/ui/themes/ui-lightness/ui.all.css" />
<script type="text/javascript" src="../view/javascript/jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../view/javascript/jquery/ui/jquery-ui-1.8.9.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="../view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.9.custom.css" />
<script type="text/javascript" src="../view/javascript/jquery/ui/ui.core.js"></script>
<script type="text/javascript" src="../view/javascript/jquery/superfish/js/superfish.js"></script>
<script type="text/javascript" src="../view/javascript/jquerytab.js"></script>
<script type="text/javascript" src="../view/javascript/jquery/ui/external/jquery.bgiframe-2.1.2.js"></script>
<script src="../js/jquery.price_format.1.6.js" type="text/javascript"></script>

<script type="text/javascript" src="../view/javascript/jquery/superfish/js/superfish.js"></script>
<script type="text/javascript">

</script>
</head>
<body>
<div id="container">
<div id="header">
  <div class="div1">
    <div class="div2"><img src="../view/image/logo.png" title="Administration" onclick="location = 'http://localhost/fasosfasum/'" /></div>
        <div class="div3"><img src="../view/image/lock.png" alt="" style="position: relative; top: 3px;" />&nbsp;Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?>, you are logged in as <span>admin</span></div>
      </div>

    <div id="menu">
    <ul class="left" style="display: none;">
      <li id="dashboard"><a href="#" class="top">Dashboard</a></li>
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


      <li id="reports"><a class="top">Manajemen User</a>
        <ul>
          <li><a href="#">Add/Delete User</a></li>
          <li><a href="#">User Monitoring</a></li>
                   
        </ul>
      </li>

      <li id="reports"><a class="top">Manajemen Dokumen</a>
        <ul>
          <li><a href="#">BAST</a></li>
          <li><a href="#">SIPPT</a></li>
          <li><a href="admin/akun.php">Accounting</a></li>
                   
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
        <a href="homeadmin.php">Home</a>

      </div>
              <div class="box">
    <div class="heading">
      <h1><img src="../view/image/home.png" alt="" /> Dashboard</h1>
    </div>



<div class="content">
  <div class="latest">
  <div class="dashboard-heading">User Loging</div>
  <div class="dashboard-content">



	<table class="list" width="500" border="1" cellpadding="5" cellspacing="1">
	<p></p>
	
	<thead>
    	<tr>
                <td class="center">No.</td>        	
                <td class="center">USER</td>
                <td class="center">AKTIVITAS</td>
		<td class="center">WAKTU</td>
          </tr>
   	</thead>
  
    <?php
        include "koneksi.php";
	$query = mysql_query("SELECT * FROM loging");
	$no = 1;

	while ($data = mysql_fetch_array($query)) {
	?>


	<tbody>
    	<tr>
        	<td class="center"><?php echo $no; ?></td>
        	<td class="left"><?php echo $data['user']; ?></td>
        	<td class="left"><?php echo $data['aktivitas']; ?></td>
		<td class="center"><?php echo $data['waktu']; ?></td>	
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


    <div class="content">
  <div class="latest">
  <div class="dashboard-heading">Data BAST</div>
  <div class="dashboard-content">


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