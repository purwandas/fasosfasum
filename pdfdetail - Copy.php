<?php
include "koneksi.php";
$id = $_GET['id'];

//Queri untuk Menampilkan data

	$query = "select deskripsi, jenis, luas, nokrk,noimb,noblokplan,sertifikasi,pemilik,jenissertifikat,nosertifikat,masaberlaku,luassertifikat from peruntukan where nobast='$id'";
$db_query = mysql_query($query) or die("Query gagal");

$query2 = "select nobast, tglbast, pengembangbast, keterangan, nodokacuan from bast where nobast='$id'";
$db_query2 = mysql_query($query2) or die("Query gagal");

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
    $cell[$i][6] = $data[6];
    $cell[$i][7] = $data[7];
    $cell[$i][8] = $data[8];
    $cell[$i][9] = $data[9];
    $cell[$i][10] = $data[10];
    $cell[$i][11] = $data[11];
 $i++;

}

$k=0;
while($data2=mysql_fetch_row($db_query2))

 {

	$cell[$k][0] = $data2[0];
	$cell[$k][1] = $data2[1];
	$cell[$k][2] = $data2[2];
	$cell[$k][3] = $data2[3];
	$cell[$k][4] = $data2[4];
    
    

 $k++;

}


 require("../fpdf17/fpdf.php");



class PDF extends FPDF

{

//Fungsi Untuk Membuat Header

function Header()

{

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



$pdf->Cell(32,1,'DATA BAST','LRTB',0,'C');
$pdf->Ln();

for($l=0;$l<$k;$l++)
{
$pdf->SetFont("Arial","B",10);
$pdf->Cell(4,1,'NO.BAST','LTB',0,'L');$pdf->Cell(6,1,$cell[$l][0],'LRTB',0,'L');
$pdf->Ln();
$pdf->Cell(4,1,'TGL.BAST','LTB',0,'L');$pdf->Cell(6,1,$cell[$l][1],'LRTB',0,'L');
$pdf->Ln();
$pdf->Cell(4,1,'PENGEMBANG','LTB',0,'L');$pdf->Cell(6,1,$cell[$l][2],'LRTB',0,'L');
$pdf->Ln();
$pdf->Cell(4,1,'KATEGORI','LTB',0,'L');$pdf->Cell(6,1,$cell[$l][3],'LRTB',0,'L');
$pdf->Ln();
$pdf->Cell(4,1,'NO.DOK.ACUAN','LTB',0,'L');$pdf->Cell(6,1,$cell[$l][4],'LRTB',0,'L');
$pdf->Ln();

}




$pdf->Cell(32,1,'DATA PERUNTUKAN','LRTB',0,'C');
$pdf->Ln();

        $pdf->SetFont('Arial','B',10);

    	$pdf->Cell(1,1,'No','LBTR',0,'C');
    	$pdf->Cell(6,1,'Peruntukan','LBTR',0,'C');
   	$pdf->Cell(2,1,'Jenis','LBTR',0,'C');
    	$pdf->Cell(2,1,'Luas','LBTR',0,'C');
    	$pdf->Cell(2,1,'No.KRK','LBTR',0,'C');
	$pdf->Cell(2,1,'No.IMB','LBTR',0,'C');
	$pdf->Cell(2.5,1,'No.BlokPlan','LBTR',0,'C');
	$pdf->Cell(2.5,1,'Sertfikasi','LBTR',0,'C');
	$pdf->Cell(2.5,1,'Pemilik','LBTR',0,'C');
	$pdf->Cell(2.5,1,'Jns.Stfkt','LBTR',0,'C');
	$pdf->Cell(2.5,1,'No.Stfkt','LBTR',0,'C');
	$pdf->Cell(2.5,1,'MasaBerlaku','LBTR',0,'C');
	$pdf->Cell(2,1,'LuasStfkt','LBTR',0,'C');

 $pdf->Ln();



for($j=0;$j<$i;$j++)

{

//menampilkan data dari hasil query database

    $pdf->Cell(1,1,$j+1,'LBTR',0,'C');
    $pdf->Cell(6,1,$cell[$j][0],'LBTR',0,'L');
    $pdf->Cell(2,1,$cell[$j][1],'LBTR',0,'L');
    $pdf->Cell(2,1,$cell[$j][2],'LBTR',0,'C');
    $pdf->Cell(2,1,$cell[$j][3],'LBTR',0,'C');
    $pdf->Cell(2,1,$cell[$j][4],'LBTR',0,'L');
    $pdf->Cell(2.5,1,$cell[$j][5],'LBTR',0,'C');
    $pdf->Cell(2.5,1,$cell[$j][6],'LBTR',0,'C');
    $pdf->Cell(2.5,1,$cell[$j][7],'LBTR',0,'C');
    $pdf->Cell(2.5,1,$cell[$j][8],'LBTR',0,'L');
    $pdf->Cell(2.5,1,$cell[$j][9],'LBTR',0,'C');
    $pdf->Cell(2.5,1,$cell[$j][10],'LBTR',0,'C');
    $pdf->Cell(2,1,$cell[$j][11],'LBTR',0,'C');

$pdf->Ln();

}

//menampilkan output berupa halaman PDF

$pdf->Output();

?>