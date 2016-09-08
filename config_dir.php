<?php
$target_dir = "fileacuan/";
$namadefault="F0000000001";

function incrementName($awal){
	$lng=strlen($awal)-1;
	// echo $awal."<-awal";
	$a=substr($awal, 0,1);
	$hasil=substr($awal,1,$lng);
	// echo $hasil."<-hasil 1, - ";
	$lng=strlen($hasil);
	$hasil++;
	// echo $hasil."<-hasil";
	while(strlen($hasil)<$lng){
		// echo"<br>length hasi: ".strlen($hasil)." , length: ".$lng;
		$hasil="0".$hasil;
	}
	return $a.$hasil;
}
?>