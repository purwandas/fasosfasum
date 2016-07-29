<?php
include "excomkoneksi.php";
$id = $_GET['id'];
?>



 					<?php
					
					
   					 $check = mysql_query("SELECT nobast FROM akun WHERE nobast = '$id'") or die(mysql_error());
    					$check2 = mysql_num_rows($check);

    					//if the name exists it gives an error
    					if ($check2 != 0)
    					{
						?>
					 <script type="text/javascript">
 					   alert("BAST No:  <?php echo $id ; ?> has already registered.");
  					  history.back();
					
 						</script>
						<?php
					
						}
					else 



					header("location:excomakuntingentrynilaibastbpk.php?id=$id");


?>


	
