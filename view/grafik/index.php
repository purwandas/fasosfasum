<?php
include('config.php');	

//form
echo "<form method=post>
<select name=tahun> 
<option value=%>Seluruh</option>
<option value=2009>2009</option>
<option value=2010>2010</option>
</select>
<input type=submit name=submit value=Tampilkan> 
</form>";



echo "
<h3>GRAFIK PENDAFTAR PER PROGRAM STUDI TAHUN $_POST[tahun]</h3>
<table width=800 border=0 cellpading=0 cellspacing=0 align=center>
<tr height=400 valign=bottom bgcolor=greey>";


//ambil prodi 
$sql_prodi1=mysql_query("select * from prodi ");
while ($data_prodi1=mysql_fetch_array($sql_prodi1)){
$no++;
//pada saat mengambil data prdi hitung pendaftar per prodi untuk tahun yang terpilih sekaligus membuat kolom secara dinamis

$sql_jml_pendaftar=mysql_fetch_array(mysql_query("SELECT pendaftar.kd_prodi,prodi.jenjang,prodi.nm_prodi,count(pendaftar.no_daftar) as jml FROM pendaftar
left join prodi on prodi.kd_prodi=pendaftar.kd_prodi
where pendaftar.no_daftar like '$_POST[tahun]%' and pendaftar.kd_prodi='$data_prodi1[kd_prodi]'
group by pendaftar.kd_prodi ")) or die (mysql_error());
//hasilnya ditampilkan grafik dengan memnyisiplan gambar danmerubah tinggi gambar sesuai dengan jml pendaftar
echo "<th width=50 align=center>$sql_jml_pendaftar[jml]<br><img src=bar$no.png height=$sql_jml_pendaftar[jml] width=50></th>";
}
echo "</tr>";


//ambil prodi yang kedua untuk menampilkan nama-nama prodi di sumbu X
$sql_prodi=mysql_query("select * from prodi ");
echo "</tr>
<tr valign=top bgcolor=#dedede>";
while ($data_prodi=mysql_fetch_array($sql_prodi)){
echo "<th width=50>$data_prodi[nm_prodi]</th>";
}
echo "</tr>
</table>
";
?>