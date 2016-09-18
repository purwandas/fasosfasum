<?php
include "koneksi.php";


$query = "select nobastlokasi, alamataset, deskripsi, volume, satuan, nilaibast from akun a  inner join lokasidokumen l on a.nobast=l.nobastlokasi inner join bast b on l.nobastlokasi=b.nobast inner join peruntukan p on a.idperuntukan=p.idperuntukan  inner join dataaset t on a.idaset=t.idaset where  kategoriaset='KIB D' && ((bpk357='0' && pulomas='0' && mutasi='1'  &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='1' && mutasi='1' && perihalbast!='mutasi2009' && perihalbast!='mutasi2010')or (bpk357 ='0'  && mutasi ='1' && pulomas='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010') or (bpk357 ='0' && pulomas='0' && tp3w='1' && mutasi='1' )or(bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='1' && mutasi='1' &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2009' ) or (bpk357 ='0' && pulomas='0' && tp3w='0' && dtr='0' && balaikota='1' && mutasi='1'))";


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
$cell[$i][5] = $data[5];


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

$pdf->Cell(33,1,'LAPORAN PENILAIAN MUTASI 2011 - KIB D','LRTB',0,'C');

$pdf->Ln();

 $pdf->Cell(1,1,'No','LRTB',0,'C');

 $pdf->Cell(7,1,'NoBAST','LRTB',0,'C');
$pdf->Cell(11,1,'ALAMAT','LRTB',0,'C');
$pdf->Cell(7,1,'PERUNTUKAN','LRTB',0,'C');

$pdf->Cell(2,1,'VOLUME','LRTB',0,'C');
$pdf->Cell(2,1,'SATUAN','LRTB',0,'C');
$pdf->Cell(3,1,'NILAI (Rp)','LRTB',0,'C');


 $pdf->Ln();



$pdf->SetFont('Arial','',10);

for($j=0;$j<$i;$j++)

{

//menampilkan data dari hasil query database

$pdf->Cell(1,1,$j+1,'LBTR',0,'C');

$pdf->Cell(7,1,$cell[$j][0],'LBTR',0,'L');

 $pdf->Cell(11,1,$cell[$j][1],'LBTR',0,'L');

 $pdf->Cell(7,1,$cell[$j][2],'LBTR',0,'L');

 $pdf->Cell(2,1,$cell[$j][3],'LBTR',0,'C');

$pdf->Cell(2,1,$cell[$j][4],'LBTR',0,'C');

$pdf->Cell(3,1,$cell[$j][5],'LBTR',0,'R');




$pdf->Ln();

}

$pdf->Cell(33,1,'TOTAL : Rp. 7,301,283,643.07','LRTB',0,'R');
//menampilkan output berupa halaman PDF

$pdf->Output();

?>