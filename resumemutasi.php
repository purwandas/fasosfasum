<?php
require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
<head>
  <title>Fasos Fasum BPKD DKI Jakarta</title>

  <link rel="stylesheet" type="text/css" href="view/stylesheet/stylesheet.css" />
  <link rel="stylesheet" type="text/css" href="view/javascript/jquery/ui/themes/ui-lightness/ui.all.css" />
  <script type="text/javascript" src="view/javascript/jquery/jquery-1.3.2.min.js"></script>
  <script type="text/javascript" src="view/javascript/jquery/ui/jquery-ui-1.8.9.custom.min.js"></script>
  <link rel="stylesheet" type="text/css" href="view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.9.custom.css" />
  <script type="text/javascript" src="view/javascript/jquery/ui/ui.core.js"></script>
  <script type="text/javascript" src="view/javascript/jquery/superfish/js/superfish.js"></script>
  <script type="text/javascript" src="view/javascript/jquerytab.js"></script>
  <script type="text/javascript" src="view/javascript/jquery/ui/external/jquery.bgiframe-2.1.2.js"></script>

  <script type="text/javascript" src="view/javascript/jquery/superfish/js/superfish.js"></script>
  <script type="text/javascript">

  </script>
</head>
<body>
  <div id="container">
    <div id="header">
      <div class="div1">
        <div class="div2"><img src="view/image/logo.png" title="Administration" onclick="location = 'http://localhost/fasosfasum/'" /></div>
        <div class="div3"><img src="view/image/lock.png" alt="" style="position: relative; top: 3px;" />&nbsp;Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?>, you are logged in as <span>user</span></div>
      </div>


      <?php
      include("menu.php");
      ?>
    </div>
    <div id="content">
      <div class="breadcrumb">
        <a href="home.php">Home</a>

      </div>
      <div class="box">
        <div class="heading">
          <h1><img src="view/image/home.png" alt="" />Resume Mutasi</h1>
        </div>

        <div class="content">
          
          <div class="overview">
            <div class="dashboard-heading">Detail Resume</div>
            <div class="dashboard-content">

             <?php 
             include "koneksi.php";

             $hasilbastlk2010= mysql_query("select * from lokasidokumen where bpk357='0' && mutasi='1' && pulomas='0'");
             $totalbastlk2010 = mysql_num_rows($hasilbastlk2010);	

             $hasilbastlk2010sippt= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan d on b.nodokacuan=d.nodokacuan  where bpk357='0' && mutasi='1'  && idkategori='1' && pulomas='0'");
             $totalbastlk2010sippt = mysql_num_rows($hasilbastlk2010sippt);

             $hasilbastlk2010nonsippt= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast inner join detaildokacuan d on b.nodokacuan=d.nodokacuan  where bpk357='0' && mutasi='1'  && idkategori!='1' && pulomas='0'");
             $totalbastlk2010nonsippt = mysql_num_rows($hasilbastlk2010nonsippt);


             $hasilbastlk2010129= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357='0' && mutasi='1' && perihalbast like !'%mutasi%' && rekon129='1'");
             $totalbastlk2010129 = mysql_num_rows($hasilbastlk2010129);


             $hasilbastlk201054= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357='0' && mutasi='1' && perihalbast like !'%mutasi%' && rekon129='0' && rekon54='1'");
             $totalbastlk201054 = mysql_num_rows($hasilbastlk201054);

             $hasilbastlk2010163= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357='0' && mutasi='1' && perihalbast like !'%mutasi%' && rekon129='0' && rekon54='0' && rekon163='1'");
             $totalbastlk2010163 = mysql_num_rows($hasilbastlk2010163);

             $hasilbastlk2010101= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357='0' && mutasi='1' && perihalbast like !'%mutasi%' && rekon129='0' && rekon54='0' && rekon163='0' && rekon101='1'");
             $totalbastlk2010101 = mysql_num_rows($hasilbastlk2010101);
             
             $hasilbastlk2010mutasi= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357='0' && pulomas='0' && mutasi='1'  &&  perihalbast!='mutasi2009' &&  perihalbast!='mutasi2010'");
             $totalbastlk2010mutasi = mysql_num_rows($hasilbastlk2010mutasi);


             $hasilbastlk20102009= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357='0' && mutasi='1' && pulomas='0' && perihalbast='mutasi2009'");
             $totalbastlk20102009 = mysql_num_rows($hasilbastlk20102009);

             $hasilbastlk20102010= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357='0' && mutasi='1'  && pulomas='0' && perihalbast='mutasi2010'");
             $totalbastlk20102010 = mysql_num_rows($hasilbastlk20102010);

             $hasilbastlk2010tambah= mysql_query("select * from lokasidokumen l inner join bast b on l.nobastlokasi=b.nobast where bpk357 ='0' && mutasi='1'  && pulomas='0' &&  rekon101='0' && tp3w='0' && rekon129='0' && rekon54='0' && dtr='0' && rekon163='0' && balaikota='0' ");
             $totalbastlk2010tambah = mysql_num_rows($hasilbastlk2010tambah);



             ?>

             <table>
              <tr>
                <td>Total BAST Mutasi :</td>
                <td><a target="_blank" href="pdfmutasi.php"><?php echo $totalbastlk2010 ?></a></td>
              </tr>

              <tr>
                <td>Jumlah BAST Mutasi-SIPPT :</td>
                <td><a target="_blank" href="pdfmutasisippt.php"><?php echo $totalbastlk2010sippt ?></a></td>
              </tr>

              <tr>
                <td>Jumlah BAST Mutasi-NONSIPPT :</td>
                <td><a target="_blank" href="pdfmutasinonsippt.php"><?php echo $totalbastlk2010nonsippt ?></a></td>
              </tr>
              
              <tr>
                <td>Jumlah Mutasi-129 :</td>
                <td><?php echo $totalbastlk2010129 ?></td>
              </tr>

              <tr>
                <td>Jumlah Mutasi-54 :</td>
                <td><?php echo $totalbastlk201054 ?></td>
              </tr>

              <tr>
                <td>Jumlah Mutasi -163 :</td>
                <td><?php echo $totalbastlk2010163 ?></td>
              </tr>
              <tr>
                <td>Jumlah Mutasi-101 :</td>
                <td><?php echo $totalbastlk2010101 ?></td>
              </tr>
              <tr>
                <td>Jumlah Tahun 2009 :</td>
                <td><a target="_blank" href="pdfmutasi2009.php"><?php echo $totalbastlk20102009 ?></a></td>
              </tr>

              <tr>
                <td>Jumlah Tahun 2010 :</td>
                <td><a target="_blank" href="pdfmutasi2010.php"><?php echo $totalbastlk20102010 ?></a></td>
              </tr>

              <tr>
                <td>Jumlah Mutasi Tahun 2011 :</td>
                <td><a target="_blank" href="pdfmutasi2011.php"><?php echo $totalbastlk2010mutasi ?></a></td>
              </tr>

              <tr>
                <td>Jumlah Penambahan :</td>
                <td>0</td>
              </tr>

            </table>


          </div>
        </div>


        <div class="statistic">
          <div class="dashboard-heading">Pie Chart</div>
          <div class="dashboard-content">

            <html>
            <head>


              <script type="text/javascript" src="sources/jscharts.js"></script>

            </head>
            <body>

              <div id="graph">Loading graph...</div>

              <script type="text/javascript">
               
               var myChart = new JSChart('graph', 'pie');
               myChart.setDataArray([['Kel.129', <?php echo $totalbastlk2010129 ?>], ['Kel.54', <?php echo $totalbastlk201054 ?>], ['Kel.163', <?php echo $totalbastlk2010163 ?>], ['Kel.101', <?php echo $totalbastlk2010101 ?>], ['Thn 2009', <?php echo $totalbastlk20102009 ?>], ['Thn 2010', <?php echo $totalbastlk20102010 ?>], ['Mutasi', <?php echo $totalbastlk2010mutasi ?>],['Tambahan', 0]]);


               myChart.colorize(['#FFCC00', '#FFFF00', '#CCFF00', '#99FF00', '#33FF00', '#00FF66', '#00FF99', '#00FFCC']);
               myChart.setSize(500, 208);
               myChart.setTitle('');
               myChart.setTitleFontFamily('Arial');
               myChart.setTitleFontSize(11);
               myChart.setTitleColor('#0F0F0F');
               myChart.setPieRadius(90);
               myChart.setPieValuesColor('#800000');
               myChart.setPieValuesFontSize(10);
               myChart.setPiePosition(150, 100);
               myChart.setShowXValues(false);
               myChart.setLegend('#FFCC00', 'Kel.129 = <?php echo $totalbastlk2010129; ?>');
               myChart.setLegend('#FFFF00', 'Kel.54 = <?php echo $totalbastlk201054; ?>');
               myChart.setLegend('#CCFF00', 'Kel.163 = <?php echo $totalbastlk2010163; ?>');
               myChart.setLegend('#99FF00', 'Kel.101 = <?php echo $totalbastlk2010101; ?>');
               myChart.setLegend('#33FF00', 'Thn 2009 = <?php echo $totalbastlk20102009; ?>');
               myChart.setLegend('#00FF66', 'Thn 2010 = <?php echo $totalbastlk20102010; ?>');
               myChart.setLegend('#CCCCFF', 'Mutasi = <?php echo $totalbastlk2010mutasi; ?>');
               myChart.setLegend('#00FF99', 'Tambahan = 0');
               myChart.setLegendShow(true);
               myChart.setLegendFontFamily('Arial');
               myChart.setLegendFontSize(11);
               myChart.setLegendPosition(350, 20);
               myChart.setPieAngle(40);
               myChart.set3D(true);
               myChart.draw();
               
               
             </script>

           </body>
           </html>


         </div>
       </div>



       <div class="latest">
        <div class="dashboard-heading">Data</div>
        <div class="dashboard-content">

          <form method="post" action="" name="form1" id="form1" >
            <b>Masukan Nomor Bast atau Nama Pengembang atau Jenis Dok. Acuan</b><br><br>   
            <b>Kata Pencarian  </b> <input type="text" name="term" />    <input type="submit" name="submit2" value="Cari"/><br/>
          </form><br>

          <table class="list" cellpadding="5" cellspacing="5">

            <thead>
              <tr>
                <td class="center">No.</td>        	
                <td class="center">No.BAST</td>
                <td class="center">Tgl.BAST</td>
                <td class="center">Pengembang</td>
                <td class="center">Dok Acuan</td>
                <td class="center">No.Dok Acuan</td>
                <td class="center">Pemegang SIPPT</td>
                <td class="center">Kategori BAST</td>
                <td class="center">Action</td>
              </tr>
            </thead>



            
            <?php
            if(isset($_REQUEST['submit2'])) {

             include "koneksi.php";
             $term = $_POST['term']; 
             $XX = "<br><br><h2> <center> No Record Found, Search Again Please </center> </h2>";  
             $query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan c on d.idkategori=c.idkategori inner join lokasidokumen l on b.nobast=l.nobastlokasi where bpk357='0' && mutasi='1' && pulomas='0' && (nobast like '%$term%' or pengembangbast like '%$term%'  or jenisdokumen like '%$term%')");
           }else

           $query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan c on d.idkategori=c.idkategori inner join lokasidokumen l on b.nobast=l.nobastlokasi where bpk357='0' && mutasi='1' && pulomas='0' order by nobast asc");
           $no = 1;
           while ($data = mysql_fetch_array($query)) {
             ?>
             <tbody>
               <tr>
                 <td class="center"><?php echo $no; ?></td>
                 <td class="left"><?php echo $data['nobast']; ?></td>
                 <td class="center"><?php echo $data['tglbast']; ?></td>
                 <td class="left"><?php echo $data['pengembangbast']; ?></td>
                 <td class="center"><?php echo $data['jenisdokumen']; ?></td>
                 <td class="left"><a href="bastbysippt.php?id=<?php echo $data['nodokacuan']; ?>"><?php echo $data['nodokacuan']; ?></a></td>
                 <td class="left"><?php echo $data['pemegangdokacuan']; ?></td>
                 <td class="left"><?php echo $data['keterangan']; ?></td>
                 <td class="center"><a href="viewdetailbast.php?id=<?php echo $data['nobast']; ?>"><img alt=" " src="view/image/viewdetail.gif" border=0></a></td>

                 

               </tr>
             </tbody>
             <?php
             $no++;
           }

           ?>


         </table>




       </div>
     </div>
   </div>

 </div>
</div>
<!--[if IE]>
<script type="text/javascript" src="view/javascript/jquery/flot/excanvas.js"></script>
<![endif]--> 

</div>
<div id="footer"><a href="http://www.dineshjay.co.id">dinesh consultant</a> &copy; 2009-2012 All Rights Reserved.<br />Version 1.0</div>
</body></html>