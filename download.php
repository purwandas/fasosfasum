<?php
	// fopen("",'r');
	$myFile = "fileacuan/20000000000007.pdf";
	header("Conten-type:application/pdf");
	header("Content-Disposition:inline;filename'".$myFile."'");
	header("Content-Transfer-Encoding:binary");
	header("Accept-Ranges:bytes");
	@readfile($myFile);
?>