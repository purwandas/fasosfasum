<?php

// nama file

$namaFile = "report.xls";

// Function penanda awal file (Begin Of File) Excel

function xlsBOF() {
echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
return;
}

// Function penanda akhir file (End Of File) Excel

function xlsEOF() {
echo pack("ss", 0x0A, 0x00);
return;
}

// Function untuk menulis data (angka) ke cell excel

function xlsWriteNumber($Row, $Col, $Value) {
echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
echo pack("d", $Value);
return;
}

// Function untuk menulis data (text) ke cell excel

function xlsWriteLabel($Row, $Col, $Value ) {
$L = strlen($Value);
echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
echo $Value;
return;
}

// header file excel

header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");

// header untuk nama file
header("Content-Disposition: attachment;
        filename=".$namaFile."");

header("Content-Transfer-Encoding: binary ");

// memanggil function penanda awal file excel
xlsBOF();

// ------ membuat kolom pada excel --- //

// mengisi pada cell A1 (baris ke-0, kolom ke-0)
xlsWriteLabel(0,0,"REKAPITULASI BAST GUBERNUR KELOMPOK 163"); 

// mengisi pada cell A1 (baris ke-0, kolom ke-0)
xlsWriteLabel(2,0,"NO");               

// mengisi pada cell A2 (baris ke-0, kolom ke-1)
xlsWriteLabel(2,1,"NO BAST");       

// mengisi pada cell A3 (baris ke-0, kolom ke-2)
xlsWriteLabel(2,2,"TGL BAST");       

// mengisi pada cell A3 (baris ke-0, kolom ke-3)
xlsWriteLabel(2,3,"PENGEMBANG");

// mengisi pada cell A4 (baris ke-0, kolom ke-4)
xlsWriteLabel(2,4,"NO DOK.ACUAN");

// mengisi pada cell A4 (baris ke-0, kolom ke-5)
xlsWriteLabel(2,5,"TGL DOK.ACUAN");

// mengisi pada cell A4 (baris ke-0, kolom ke-6)
xlsWriteLabel(2,6,"JENIS DOK.ACUAN");

// mengisi pada cell A4 (baris ke-0, kolom ke-6)
xlsWriteLabel(2,7,"WILAYAH");

// mengisi pada cell A4 (baris ke-0, kolom ke-7)
xlsWriteLabel(2,8,"PENILAIAN BAST");

// -------- menampilkan data --------- //

// koneksi ke mysql

mysql_connect("localhost", "root", "");
mysql_select_db("bpkd2012");

// query menampilkan semua data

$query = "SELECT * FROM bast b inner join (select distinct nobast, totmix from akun)a on a.nobast=b.nobast inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan m on m.idkategori=d.idkategori  
inner join (select distinct nobastaset, wilayah from dataaset)s on s.nobastaset=b.nobast  inner join lokasidokumen l on b.nobast=l.nobastlokasi 
where b.keterangan like '%gub%' && ((bpk357 ='1'  && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='1') or (bpk357 ='0'  && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='1')) 


order by wilayah";


$hasil = mysql_query($query);

// nilai awal untuk baris cell
$noBarisCell = 3;

// nilai awal untuk nomor urut data
$noData = 1;

while ($data = mysql_fetch_array($hasil))
{
   
   xlsWriteNumber($noBarisCell,0,$noData);

   
   xlsWriteLabel($noBarisCell,1,$data['nobast']);

  
   xlsWriteLabel($noBarisCell,2,$data['tglbast']);

   xlsWriteLabel($noBarisCell,3,$data['pengembangbast']);

   
   xlsWriteLabel($noBarisCell,4,$data['nodokacuan']);

   
   xlsWriteLabel($noBarisCell,5,$data['tgldokacuan']);

    xlsWriteLabel($noBarisCell,6,$data['jenisdokumen']);

  xlsWriteLabel($noBarisCell,7,$data['wilayah']);

  
   xlsWriteNumber($noBarisCell,8,$data['totmix']);

   
   $noBarisCell++;
   $noData++;
}

// memanggil function penanda akhir file excel
xlsEOF();
exit();

?>
