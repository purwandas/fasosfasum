    <?php
   
 	include "koneksi.php";     
	
	$id = $_GET['id'];
 



    //perintah untuk query dari database
	$query = "select deskripsi, jenis, luas, nokrk,noimb,noblokplan,sertifikasi,pemilik,jenissertifikat,nosertifikat,masaberlaku,luassertifikat from peruntukan where nobast='$id'";
   $sql = mysql_query ($query);
    //Variabel untuk iterasi
    $i = 0;

require_once("../fpdf17/fpdf.php");

//memulai pengaturan output PDF
class PDF extends FPDF
{
//untuk pengaturan header halaman
function Header()
{
$this->Image('view/image/kopdki.png');
//Pengaturan Font Header
$this->SetFont('Arial','B',14); //jenis font : Times New Romans, Bold, ukuran 14

//untuk warna background Header
$this->SetFillColor(255,255,255);

//untuk warna text
$this->SetTextColor(0,0,0);

//Menampilkan tulisan di halaman
$this->Cell(32,1,'Data Peruntukan','TBLR',0,'C',1); //TBLR (untuk garis)=> B = Bottom,
// L = Left, R = Right
//untuk garis, C = center


}
}
    //Mengambil nilai dari query database
    while($data=mysql_fetch_row($sql))
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

	

    //pengaturan ukuran kertas P = Portrait
    $pdf = new PDF('L','cm','Legal');
    $pdf->Open();
    $pdf->AddPage();

    //Ln() = untuk pindah baris
    $pdf->Ln();
    $pdf->SetFont('Arial','B',10);

    	$pdf->Cell(1,1,'No','LRTB',0,'C');
    	$pdf->Cell(6,1,'Peruntukan','LRTB',0,'C');
   	$pdf->Cell(2,1,'Jenis','LRTB',0,'C');
    	$pdf->Cell(2,1,'Luas','LRTB',0,'C');
    	$pdf->Cell(2,1,'No.KRK','LRTB',0,'C');
	$pdf->Cell(2,1,'No.IMB','LRTB',0,'C');
	$pdf->Cell(2.5,1,'No.BlokPlan','LRTB',0,'C');
	$pdf->Cell(2.5,1,'Sertfikasi','LRTB',0,'C');
	$pdf->Cell(2.5,1,'Pemilik','LRTB',0,'C');
	$pdf->Cell(2.5,1,'Jns.Stfkt','LRTB',0,'C');
	$pdf->Cell(2.5,1,'No.Stfkt','LRTB',0,'C');
	$pdf->Cell(2.5,1,'MasaBerlaku','LRTB',0,'C');
	$pdf->Cell(2,1,'LuasStfkt','LRTB',0,'C');
	


    $pdf->Ln();

    $pdf->SetFont('Arial','',9);
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