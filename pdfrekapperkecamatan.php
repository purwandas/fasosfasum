<link rel="stylesheet" type="text/css" href="view/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="view/javascript/jquery/ui/themes/ui-lightness/ui.all.css" />

<link rel="stylesheet" type="text/css" href="view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.9.custom.css" />

<body>
<page_footer>
<table style="width: 100%; border: solid 0.5px black;">
            
<tr>
                
<td style="text-align: left;    width: 50%">Arsip Fasos Fasum/PemanfaatanAset/BPKD/DKI</td>
                
<td style="text-align: right;    width: 50%">page [[page_cu]]/[[page_nb]]</td>
            
</tr>
        
</table>
    
</page_footer>

<p><IMG SRC="view/image/kopdki.png" hspace=10 vspace=10 align=left border=2></p><br><br><br><br><br>
<div align="center" ><span style="font-size: 18px; font-weight: bold">REKAPITULASI DATA PER KECAMATAN</span></div><br><br>


<?php

	mysql_connect("localhost","root","");
	mysql_select_db("bpkd2012");
	$nomor=1; 
	$query3 = mysql_query("select * from dataaset order by kecamatan asc") or die(mysql_error());
	while ($data3 = mysql_fetch_array($query3)){
	
?>

<table>
<tr>
<td><?php echo $nomor; ?>.</td><td>Kecamatan</td><td>:</td><td><?php echo $data3['kecamatan']; ?></td>
</tr>
<tr>
<td></td><td>Kelurahan</td><td>:</td><td><?php echo $data3['kelurahan']; ?></td>
</tr>
<tr>
<td></td><td>Alamat</td><td>:</td><td><?php echo $data3['alamataset']; ?></td>
</tr>

<tr>

          <table class="list" align="center" cellpadding="5" cellspacing="5">

            <thead>
    		<tr bgcolor="yellow">
                 <td class="center">No.</td>        	
                <td class="center">Peruntukan</td>
                <td class="center">Jenis</td>
        	<td class="center">Luas.BAST(m2)</td>
		</tr>
            </thead>


<tbody>
	
<?php
mysql_connect("localhost","root","");
mysql_select_db("bpkd2012");


$query = mysql_query("select * from peruntukan where idaset='".$data3['idaset']."'") or die(mysql_error());
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
?>
	  

    	<tr>
        	<td class="center"><?php echo $no; ?></td>
         	<td class="left"><?php echo $data['deskripsi']; ?></td>
        	<td class="center"><?php echo $data['jenis']; ?></td>
        	<td class="right"><?php echo $data['luas']; ?></td>
		
	</tr>
	    
	<?php
 	$no++;
	}

	?>
	</tbody> 
          </table>


	</tr>

	<?php
 	$nomor++;
	}
	?>


          </table>

</body>
