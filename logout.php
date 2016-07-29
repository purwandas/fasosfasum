<?php
	//Start session
	session_start();

			mysql_connect("localhost","root","");
			mysql_select_db("phplogin");
			$waktu = gmdate("Y-m-d H:i:s", time()+60*60*7);
			$user = $_SESSION['SESS_FIRST_NAME'];
			$query = mysql_query("insert into loging values('','$user','logout','$waktu')") or die(mysql_error());


			

	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
<script src="js/jquery.price_format.1.6.js" type="text/javascript"></script>

<script type="text/javascript" src="view/javascript/jquery/superfish/js/superfish.js"></script>
<script type="text/javascript">

   

$('a').click(function()
{
        if ($(this).attr('href') != null && $(this).attr('href').indexOf('uninstall', 1) != -1) {
            if (!confirm('Delete/Uninstall cannot be undone! Are you sure you want to do this?')) {
                return false;
            }
        }
    });
});
</script>



</head>
<body>


<div id="container">

<div id="header">
  
<div class="div1">
    

<div class="div2"><img src="view/image/logo.png" title="Administration" onclick="location = 'http://www.dineshjay.com/admin/index.php?route=common/login'" /></div>
      </div>
  </div>
<div id="content">
 


<h2><img src="view/image/logout.gif"> Logout </h2>
<p align="center">&nbsp;</p>
<h2 align="center" >You have been logged out.</h2>
<h3><p align="center">Click here to <a href="login-form.php">Login</a></p></h3>
</body>
</html>




</div>

 
</div>

</div>


<script type="text/javascript"><!--
$('#form input').keydown(function(e) {
	if (e.keyCode == 13) {
		$('#form').submit();
	}
});
//--></script> 
</div>


<div id="footer"><a href="http://www.dineshjay.co.id">dinesh consultant</a> &copy; 2009-2012 All Rights Reserved.<br />Version 1.0</div>
</body></html>