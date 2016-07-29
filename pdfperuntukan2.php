<?php

//// get the file with database connexion info, used for mysql request , you can just get value from url so delete the next line
//require_once("logsql.php");

//// get fpdf, thank to Olivier Plathey
require("../fpdf17/fpdf.php");
////


class PDF extends FPDF
{

      //En-tete

      function Header()

      {

          //Logo the logo.jpg must be in the same folder "fpdf16" like this file "print.php"

          $this->Image('logo.jpg',170,8,33);

          //Police Arial gras 15

          $this->SetFont('Arial','B',20);

          //Décalage a droite

          $this->Cell(10);

          //Titre
          $this->Ln(4);
          $this->Cell(130,12,'blablablablablablabla',0,0,'C');
          $this->Ln(5);
                    $this->SetFont('Arial','B',12);
          $this->Cell(130,20,'    blablablablablablablablablablablablablabla',0,0,'C');
          //Saut de ligne

          $this->Ln(40);

      }

       

      //Pied de page

      function Footer()

      {
 
          //Positionnement a 1,5 cm du bas
 
          $this->SetY(-15);

          //Police Arial italique 8
  
          $this->SetFont('Arial','I',8);
 
          //Numéro de page
 
          $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
  
      }

      }
 
 
      // Get your value from url, change this with your own value. ex $myvalue= $_GET['jos_fabrik_data_myformid___myformfield']['value'];
 
$formation= $_GET['jos_fabrik_data_6___formation']['value'];
$datelieu= $_GET['jos_fabrik_data_6___datesetlieu']['value'];
$nom= $_GET['jos_fabrik_data_6___copy_of_first_name']['value'];
$societe= $_GET['jos_fabrik_data_6___copy_of_first_societe']['value'];
$adresse= $_GET['jos_fabrik_data_6___copy_of_adresse']['value'];
$codepostal= $_GET['jos_fabrik_data_6___copy_of_codepostal']['value'];
$ville= $_GET['jos_fabrik_data_6___copy_of_ville']['value'];
$telephone= $_GET['jos_fabrik_data_6___copy_of_telephone']['value'];
$mobile= $_GET['jos_fabrik_data_6___copy_of_telmobile']['value'];
$email= $_GET['jos_fabrik_data_6___copy_of_email']['value'];
$fax= $_GET['jos_fabrik_data_6___copy_of_fax']['value'];
  

$formation = mysql_real_escape_string($formation); 
$formation = addslashes($formation); 
$datelieu =stripcslashes($datelieu);
$datelieu =stripcslashes($datelieu);
$nom =stripcslashes($nom);
$nom =stripcslashes($nom);
$societe =stripcslashes($societe);
$societe =stripcslashes($societe);
$adresse =stripcslashes($adresse);
$adresse =stripcslashes($adresse);
$codepostal =stripcslashes($codepostal);
$codepostal =stripcslashes($codepostal);
$ville =stripcslashes($ville);
$ville =stripcslashes($ville);
$telephone =stripcslashes($telephone);
$telephone =stripcslashes($telephone);
$mobile =stripcslashes($mobile);
$mobile =stripcslashes($mobile);
$email =stripcslashes($email);
$email =stripcslashes($email);
$fax =stripcslashes($fax);
$fax =stripcslashes($fax);

//here i use SQL request to get some info from my database. you can make your pdf without this////////

$sql = "SELECT * FROM matable WHERE formationid=$formation" ;
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql_table.'<br>'.mysql_error());
while($data = mysql_fetch_array($req))
{ 
    $prix = $data['prix'];
}
$sql = "SELECT * FROM jos_content WHERE id=$formation" ;
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql_table.'<br>'.mysql_error());
while($data = mysql_fetch_array($req))
{ 
    $nomformation = $data['title'];
}

/// end of mysql get info
 
      $pdf=new PDF();
 
      $pdf->Open();
 
      $pdf->AliasNbPages();
  
      $pdf->AddPage();
 
      $pdf->SetFont('Arial','',12);


      $pdf->Cell(50,7,'Formation : ',0,0);
      $pdf->SetFont('Arial','',8);
      $pdf->Cell(130,7,$nomformation,1,1);
      $pdf->SetFont('Arial','',12);
      $pdf->Ln(4);
      
      $pdf->Cell(50,7,'Dates : ',0,0);
            $pdf->SetFont('Arial','',8);
      $pdf->Cell(130,7,$datelieu,1,1);
      $pdf->SetFont('Arial','',12);
      $pdf->Ln(4);
      
      $pdf->Cell(50,7,'Nom-Prenom : ',0,0);
            $pdf->SetFont('Arial','',8);
      $pdf->Cell(130,7,$nom,1,1);
      $pdf->SetFont('Arial','',12);
      $pdf->Ln(4);
      
      $pdf->Cell(50,7,'Société : ',0,0);
            $pdf->SetFont('Arial','',8);
      $pdf->Cell(130,7,$societe,1,1);
      $pdf->SetFont('Arial','',12);
      $pdf->Ln(4);

      $pdf->Cell(50,7,'Adresse : ',0,0);
            $pdf->SetFont('Arial','',8);
      $pdf->Cell(130,7,$adresse,1,1);
      $pdf->SetFont('Arial','',12);
      $pdf->Ln(4);
                   
      $pdf->Cell(50,7,'Code Postal : ',0,0);
            $pdf->SetFont('Arial','',8);
      $pdf->Cell(130,7,$codepostal,1,1);
      $pdf->SetFont('Arial','',12);
      $pdf->Ln(4);

      $pdf->Cell(50,7,'Ville : ',0,0);
            $pdf->SetFont('Arial','',8);
      $pdf->Cell(130,7,$ville,1,1);
      $pdf->SetFont('Arial','',12);
      $pdf->Ln(4);
      
      $pdf->Cell(50,7,'Téléphone : ',0,0);
            $pdf->SetFont('Arial','',8);
      $pdf->Cell(130,7,$telephone,1,1);
      $pdf->SetFont('Arial','',12);
      $pdf->Ln(4);

      $pdf->Cell(50,7,'Tél.Mobile : ',0,0);
            $pdf->SetFont('Arial','',8);
      $pdf->Cell(130,7,$mobile,1,1);
      $pdf->SetFont('Arial','',12);
      $pdf->Ln(4);

      $pdf->Cell(50,7,'Adresse email : ',0,0);
            $pdf->SetFont('Arial','',8);
      $pdf->Cell(130,7,$email,1,1);
      $pdf->SetFont('Arial','',12);
      $pdf->Ln(4);
      
      $pdf->Cell(50,7,'Fax : ',0,0);
            $pdf->SetFont('Arial','',8);
      $pdf->Cell(130,7,$fax,1,1);
      $pdf->SetFont('Arial','',12);
      $pdf->Ln(10);
   
         $pdf->Cell(50,7,'Ci-joint la somme de : ',0,0);
            $pdf->SetFont('Arial','',8);
      $pdf->Cell(130,7,$prix,1,1);
            $pdf->SetFont('Arial','',12);
      $pdf->Cell(100,7,'par cheque bancaire blablablablablablablablablabla.',0,0);
      
      $pdf->Ln();
      $pdf->Ln();
      
         $pdf->Cell(180,7,'Fait à ............... le..............',0,0,'C');
      
      $pdf->Ln();
      $pdf->Ln();
      
      $pdf->Cell(180,7,'Signature',0,0,'C');
      
      $pdf->Ln();
      $pdf->Ln();
      $pdf->Ln();
      
      $pdf->SetFont('Arial','B',10);
      
      $pdf->Cell(50,7,'blablablablablablablablablablablablablabla.',0,0);
      $pdf->Ln();
      $pdf->Cell(50,7,'blablablablablablablablablablablablablabla.',0,0);
      $pdf->Ln();
      
      $pdf->SetFont('Arial','B',8);
      
      $pdf->Cell(50,7,'blablablablablablablablablablablablablablablablablabla,',0,0);
      $pdf->Ln();
      $pdf->Cell(50,7,'blablablablablablablablablablablablablablablablablabla.',0,0);
      $pdf->Ln();
      
      $pdf->Output();
