<?php
include "koneksi.php";

$query = "select nobast, tglbast, pengembangbast,keterangan from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join lokasidokumen l on b.nobast=l.nobastlokasi where idkategori!='1' && bpk357='1' order by nobast asc";

$db_query = mysql_query($query) or die("Query gagal");

//Variabel untuk iterasi

$i = 0;

//Mengambil nilai dari query database

while($data=mysql_fetch_row($db_query))

 {

$cell[$i][0] = $data[0];
$cell[$i][1] = $data[1];
$cell[$i][2] = $data[2];
$cell[$i][3] = $data[3];



 $i++;

}

 require("fpdf17/fpdf.php");



class PDF extends FPDF

{

//Fungsi Untuk Membuat Header

function Header()

{
$this->Image('view/image/kopdki.png');

//Pilih font Arial bold 15

$this->SetFont('Arial','B',15);

 //Geser ke kanan

$this->Cell(80);

//Judul dalam bingkai

$this->Cell(30,10,'Title',1,0,'C');

//Ganti baris

$this->Ln(1);

}



//Fungsi Untuk Membuat Footer

 function Footer()

{

 //Position at 1.5 cm from bottom

$this->SetY(-15);

//Arial italic 8

$this->SetFont('Arial','I',8);

//Page number

$this->Cell(0,100,'Halaman ke : '.$this->PageNo(),0,0,'C');

 }

}


$pdf = new PDF('L','cm','Legal');

 $pdf->Open();

$pdf->AddPage();

$pdf->SetFont("Arial","B",11);

$pdf->Cell(30,1,'DATA LK2010-SIPPT','LRTB',0,'C');

$pdf->Ln();

 $pdf->Cell(1,1,'No','LRTB',0,'C');

 $pdf->Cell(8,1,'NoBAST','LRTB',0,'C');

$pdf->Cell(3,1,'TGL.BAST','LRTB',0,'C');

$pdf->Cell(10,1,'PENGEMBANG','LRTB',0,'C');
$pdf->Cell(8,1,'KATEGORI','LRTB',0,'C');



 $pdf->Ln();



$pdf->SetFont('Arial','',10);

for($j=0;$j<$i;$j++)

{

//menampilkan data dari hasil query database

$pdf->Cell(1,1,$j+1,'LBTR',0,'C');

$pdf->Cell(8,1,$cell[$j][0],'LBTR',0,'L');

 $pdf->Cell(3,1,$cell[$j][1],'LBTR',0,'C');

 $pdf->Cell(10,1,$cell[$j][2],'LBTR',0,'L');

 $pdf->Cell(8,1,$cell[$j][3],'LBTR',0,'L');





$pdf->Ln();

}

//menampilkan output berupa halaman PDF

$pdf->Output();

?>