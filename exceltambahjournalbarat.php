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
header("Cache-Control: must-revalidate, post-check=0,
        pre-check=0");
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
xlsWriteLabel(0,0,"NO");               

// mengisi pada cell A2 (baris ke-0, kolom ke-1)
xlsWriteLabel(0,1,"NO BAST");       

// mengisi pada cell A3 (baris ke-0, kolom ke-2)
xlsWriteLabel(0,2,"TGL BAST");       

// mengisi pada cell A3 (baris ke-0, kolom ke-3)
xlsWriteLabel(0,3,"PENGEMBANG");

// mengisi pada cell A4 (baris ke-0, kolom ke-4)
xlsWriteLabel(0,4,"NO SIPPT");

// mengisi pada cell A4 (baris ke-0, kolom ke-4)
xlsWriteLabel(0,5,"TGL SIPPT");

// mengisi pada cell A3 (baris ke-0, kolom ke-3)
xlsWriteLabel(0,6,"ALAMAT");

// mengisi pada cell A4 (baris ke-0, kolom ke-4)
xlsWriteLabel(0,7,"KELURAHAN");

// mengisi pada cell A4 (baris ke-0, kolom ke-4)
xlsWriteLabel(0,8,"KECAMATAN");

// mengisi pada cell A4 (baris ke-0, kolom ke-5)
xlsWriteLabel(0,9,"WILAYAH");

// mengisi pada cell A4 (baris ke-0, kolom ke-5)
xlsWriteLabel(0,10,"PERUNTUKAN");

// mengisi pada cell A4 (baris ke-0, kolom ke-5)
xlsWriteLabel(0,11,"KIB");

// mengisi pada cell A4 (baris ke-0, kolom ke-5)
xlsWriteLabel(0,12,"VOLUME");

// mengisi pada cell A4 (baris ke-0, kolom ke-5)
xlsWriteLabel(0,13,"SATUAN");

// mengisi pada cell A5 (baris ke-0, kolom ke-6)
xlsWriteLabel(0,14,"NILAI RUPIAH"); 

// mengisi pada cell A5 (baris ke-0, kolom ke-6)
xlsWriteLabel(0,15,"KETERANGAN");  




// mengisi pada cell A4 (baris ke-0, kolom ke-5)
xlsWriteLabel(0,16,"KIB");

// mengisi pada cell A4 (baris ke-0, kolom ke-5)
xlsWriteLabel(0,17,"VOLUME");

// mengisi pada cell A4 (baris ke-0, kolom ke-5)
xlsWriteLabel(0,18,"SATUAN");

// mengisi pada cell A5 (baris ke-0, kolom ke-6)
xlsWriteLabel(0,19,"NILAI RUPIAH"); 

// mengisi pada cell A5 (baris ke-0, kolom ke-6)
xlsWriteLabel(0,20,"KETERANGAN");  

 
// mengisi pada cell A5 (baris ke-0, kolom ke-6)
xlsWriteLabel(0,21,"SELISIH");  

// mengisi pada cell A5 (baris ke-0, kolom ke-6)
xlsWriteLabel(0,22,"KOREKSI");  

// -------- menampilkan data --------- //

// koneksi ke mysql

mysql_connect("localhost", "root", "");
mysql_select_db("bpkd2012");

// query menampilkan semua data

$query = "SELECT * FROM akun a left join akunjournal aj on a.idperuntukan = aj.idperuntukan  inner join bast b on a.nobast=b.nobast inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dataaset s on a.idaset=s.idaset inner join peruntukan p on a.idperuntukan=p.idperuntukan inner join lokasidokumen l on a.nobast=l.nobastlokasi   where ((bpk357 ='0' && pulomas='1' && rekon129='0' && rekon54='0' && rekon163='0' &&  rekon101='0' && mutasi='0')  or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or (bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='1' && rekon129='0' && rekon54='0' && rekon163='0' && balaikota='0') or(bpk357 ='0' && pulomas='0'  &&  rekon101='0' && tp3w='0' && dtr='0' && balaikota='1' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='0' && mutasi='0')) && wilayah='Jakarta barat' && bastdokumen != 'Tidak Ada Perubahan' order by a.tglbast" ;



$hasil = mysql_query($query);

// nilai awal untuk baris cell
$noBarisCell = 1;

// nilai awal untuk nomor urut data
$noData = 1;

while ($data = mysql_fetch_array($hasil))
{
   // menampilkan no. urut data
   xlsWriteNumber($noBarisCell,0,$noData);

   // menampilkan data nim
   xlsWriteLabel($noBarisCell,1,$data['nobastlokasi']);

   // menampilkan data nim
   xlsWriteLabel($noBarisCell,2,$data['tglbast']);

   // menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,3,$data['pengembangbast']);

   // menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,4,$data['nodokacuan']);

   // menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,5,$data['tgldokacuan']);

   // menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,6,$data['alamataset']);

   // menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,7,$data['kelurahan']);

   // menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,8,$data['kecamatan']);

   // menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,9,$data['wilayah']);

   // menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,10,$data['deskripsi']);

    // menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,11,$data['kategoriaset']);

  // menampilkan data nama mahasiswa
   xlsWriteNumber($noBarisCell,12,$data['volume']);

  // menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,13,$data['satuan']);

   // menampilkan data nilai
   xlsWriteNumber($noBarisCell,14,$data['nilaimix']);

   // menampilkan data nilai
   xlsWriteLabel($noBarisCell,15,$data['ketakun']);




    // menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,16,$data['hkategoriaset']);

  // menampilkan data nama mahasiswa
   xlsWriteNumber($noBarisCell,17,$data['hvolume']);

  // menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,18,$data['hsatuan']);

   // menampilkan data nilai
   xlsWriteNumber($noBarisCell,19,$data['hnilaimix']);

   // menampilkan data nilai
   xlsWriteLabel($noBarisCell,20,$data['hketakun']);

  // menampilkan data nilai
   xlsWriteNumber($noBarisCell,21,($data['nilaimix'])-($data['hnilaimix']) );

  // menampilkan data nilai
   xlsWriteLabel($noBarisCell,22,$data['bastdokumen']);

   // increment untuk no. baris cell dan no. urut data
   $noBarisCell++;
   $noData++;
}

// memanggil function penanda akhir file excel
xlsEOF();
exit();

?>
