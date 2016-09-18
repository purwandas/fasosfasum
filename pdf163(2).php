    <?php
 	include "koneksi.php";     

     
    #ambil data di tabel dan masukkan ke array
     

    $query = "select nobast,tglbast,pengembangbast,keterangan,nodokacuan from bast b inner join lokasidokumen l on b.nobast=l.nobastlokasi    where rekon163='1'";
    
    $sql = mysql_query ($query);
    $data = array();
    while ($row = mysql_fetch_assoc($sql)) {
    array_push($data, $row);
    
    }

    #setting judul laporan dan header tabel
    $judul = "DATA REKONSILIASI KELOMPOK 163";
    $header = array(

    
    array("label"=>"No.BAST", "length"=>90, "align"=>"L"),
    array("label"=>"Tgl.BAST","length"=>80, "align"=>"L"),
    array("label"=>"Pengembang", "length"=>60, "align"=>"L"),
    array("label"=>"Kategori", "length"=>50, "align"=>"L"),
    array("label"=>"No.SIPPT", "length"=>50, "align"=>"L"),
    );
    #sertakan library PDF dan bentuk objek
    require_once ("fpdf17/fpdf.php");

    $pdf = new FPDF('L','mm','Legal');
    $pdf->AddPage();
     
     
    #tampilkan judul laporan
    $pdf->SetFont('Arial','B','16');
    $pdf->Cell(0,20, $judul, '0',1, 'C');
     
    #buat header tabel
    $pdf->SetFont('Arial','','10');
    $pdf->SetFillColor(30,110,110);
    $pdf->SetTextColor(255);
    $pdf->SetDrawColor(128,0,0);
    foreach ($header as $kolom) {
    $pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0',$kolom['align'], true);
    }
    $pdf->Ln();
     
    #tampilkan data tabelnya
    $pdf->SetFillColor(224,235,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('');
    $fill=false;
    foreach ($data as $baris) {
    $i=0;
    foreach($baris as $cell){
    $pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
    $i++;
    }
    $fill = !$fill;
    $pdf->Ln();
    }
    #output file PDF
    $pdf->output();