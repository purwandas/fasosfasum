<?php
include "excomkoneksi.php";


$query = "select nobastlokasi, deskripsi, volume, satuan, nilaimix from akun a inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join peruntukan p on a.idperuntukan=p.idperuntukan where  kategoriaset='KIB B' && kel90='1'";


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
$cell[$i][4] = $data[4];


 $i++;

}

 require("../fpdf17/fpdf.php");



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

$pdf->Cell(31,1,'LAPORAN PENILAIAN KOMBINASI EXCOM - KIB B','LRTB',0,'C');

$pdf->Ln();

 $pdf->Cell(1,1,'No','LRTB',0,'C');

 $pdf->Cell(8,1,'NoBAST','LRTB',0,'C');

$pdf->Cell(11,1,'PERUNTUKAN','LRTB',0,'C');

$pdf->Cell(4,1,'VOLUME','LRTB',0,'C');
$pdf->Cell(2,1,'SATUAN','LRTB',0,'C');
$pdf->Cell(5,1,'NILAI (Rp)','LRTB',0,'C');


 $pdf->Ln();



$pdf->SetFont('Arial','',10);

for($j=0;$j<$i;$j++)

{

//menampilkan data dari hasil query database

$pdf->Cell(1,1,$j+1,'LBTR',0,'C');

$pdf->Cell(8,1,$cell[$j][0],'LBTR',0,'L');

 $pdf->Cell(11,1,$cell[$j][1],'LBTR',0,'L');

 $pdf->Cell(4,1,$cell[$j][2],'LBTR',0,'C');

 $pdf->Cell(2,1,$cell[$j][3],'LBTR',0,'C');

$pdf->Cell(5,1,$cell[$j][4],'LBTR',0,'R');




$pdf->Ln();


}


$pdf->Cell(31,1,'TOTAL : Rp. 4,047,842,970.00','LRTB',0,'R');
//menampilkan output berupa halaman PDF

$pdf->Output();

?>