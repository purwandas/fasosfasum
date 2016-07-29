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
<script src="js/jquery.price_format.1.6.js" type="text/javascript"></script>

<script type="text/javascript" src="view/javascript/jquery/superfish/js/superfish.js"></script>
<script type="text/javascript">

//-----------------------------------------
// Confirm Actions (delete, uninstall)
//-----------------------------------------

$(document).ready(function(){
    
// Confirm Delete
    
$('#form').submit(function(){
        
if ($(this).attr('action').indexOf('delete',1) != -1) 
{
            
if (!confirm('Delete/Uninstall cannot be undone! Are you sure you want to do this?')) 
{
                return false;
            

}
        

}
    

});
    	
    

// Confirm Uninstall
    

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
    <div class="div2"><img src="view/image/logo.png" title="Administration" onclick="location = 'http://demo.opencart.com/admin/index.php?route=common/login'" /></div>
      </div>
  </div>
<div id="content">
  


<div class="box" style="width: 400px; min-height: 300px; margin-top: 40px; margin-left: auto; margin-right: auto;">
    

<div class="heading">
      

<h1><img src="view/image/lockscreen.png" alt="" /> Please enter your login details.</h1>
    </div>
    

<div class="content" style="min-height: 150px;  overflow: hidden;">
                  

<form action="http://demo.opencart.com/admin/index.php?route=common/login" method="post" enctype="multipart/form-data" id="form">
        

<table style="width: 100%;">
          
<tr>
            
<td style="text-align: center;" rowspan="4">
<img src="view/image/login.png" alt="Please enter your login details." />
</td>
          
</tr>
          

<tr>
            
<td>Username:<br />
              <input type="text" name="username" value="" style="margin-top: 4px;" />
              <br />
              <br />
              Password:<br />
              <input type="password" name="password" value="" style="margin-top: 4px;" />
              <br />
              

<a href="http://demo.opencart.com/admin/index.php?route=common/forgotten">Register</a>

</td>
          
</tr>
          

<tr>
            
<td>&nbsp;</td>
          
</tr>
          

<tr>
            

<td style="text-align: right;"><a onclick="$('#form').submit();" class="button">Login</a>
</td>
          
</tr>
        
</table>
             

 </form>
    
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






















