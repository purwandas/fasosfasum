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
          <h1><img src="view/image/home.png" alt="" />Resume Priode Gubernur</h1>
        </div>

        <div class="content">
          
          <div class="overview">
            <div class="dashboard-heading">Gubernur Ali Sadikin (1971 - 1977)</div>
            <div class="dashboard-content">

             <?php 
             include "koneksi.php";
             
             $sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalsipptali = mysql_num_rows($sipptali);

             $sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalsipptalipusat = mysql_num_rows($sipptalipusat);

             $sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalsipptaliutara = mysql_num_rows($sipptaliutara);

             $sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalsipptalibarat = mysql_num_rows($sipptalibarat);


             $sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

             $sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalsipptalitimur = mysql_num_rows($sipptalitimur);

             $sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




             $nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalnonsipptali = mysql_num_rows($nonsipptali);

             $nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

             $nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

             $nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


             $nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

             $nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

             $nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%1971%' or tgldokacuan like '%1972%' or tgldokacuan like '%1973%' or tgldokacuan like '%1974%' or tgldokacuan like '%1975%' or tgldokacuan like '%1976%' or tgldokacuan like '%1977%')") or die(mysql_error());
             $totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
             ?>


             <table>
               
              <tr>
               <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
               <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
               <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
               <tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
               <tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
               <tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
               <tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
             </tr>

             <tr>
               <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
               <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
               <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
               <tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
               <tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
               <tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
               <tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
             </tr>
           </table>

         </div>
       </div>





       <div class="overview">
        <div class="dashboard-heading">Gubernur Tjokropranolo</div>
        <div class="dashboard-content">

         <?php 
         include "koneksi.php";
         
         $sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
         $totalsipptali = mysql_num_rows($sipptali);

         $sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
         $totalsipptalipusat = mysql_num_rows($sipptalipusat);

         $sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
         $totalsipptaliutara = mysql_num_rows($sipptaliutara);

         $sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%') ") or die(mysql_error());
         $totalsipptalibarat = mysql_num_rows($sipptalibarat);


         $sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
         $totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

         $sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
         $totalsipptalitimur = mysql_num_rows($sipptalitimur);

         $sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
         $totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




         $nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
         $totalnonsipptali = mysql_num_rows($nonsipptali);

         $nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
         $totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

         $nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
         $totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

         $nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
         $totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


         $nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
         $totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

         $nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
         $totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

         $nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%1978%' or tgldokacuan like '%1979%' or tgldokacuan like '%1980%' or tgldokacuan like '%1981%' or tgldokacuan like '%1982%')") or die(mysql_error());
         $totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
         ?>


         <table>
           
          <tr>
           <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
           <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
           <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
           <tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
           <tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
           <tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
           <tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
         </tr>

         <tr>
           <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
           <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
           <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
           <tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
           <tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
           <tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
           <tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
         </tr>
       </table>


     </div>
   </div>

   <div class="overview">
    <div class="dashboard-heading">Gubernur Soeprapto</div>
    <div class="dashboard-content">


     <?php 
     include "koneksi.php";
     
     $sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
     $totalsipptali = mysql_num_rows($sipptali);

     $sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
     $totalsipptalipusat = mysql_num_rows($sipptalipusat);

     $sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
     $totalsipptaliutara = mysql_num_rows($sipptaliutara);

     $sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%') ") or die(mysql_error());
     $totalsipptalibarat = mysql_num_rows($sipptalibarat);


     $sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
     $totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

     $sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
     $totalsipptalitimur = mysql_num_rows($sipptalitimur);

     $sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
     $totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




     $nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
     $totalnonsipptali = mysql_num_rows($nonsipptali);

     $nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
     $totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

     $nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
     $totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

     $nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
     $totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


     $nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
     $totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

     $nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
     $totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

     $nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%1983%' or tgldokacuan like '%1984%' or tgldokacuan like '%1985%' or tgldokacuan like '%1986%' or tgldokacuan like '%1987%')") or die(mysql_error());
     $totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
     ?>


     <table>
       
      <tr>
       <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
       <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
       <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
       <tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
       <tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
       <tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
       <tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
     </tr>

     <tr>
       <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
       <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
       <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
       <tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
       <tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
       <tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
       <tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
     </tr>
   </table>

 </div>
</div>

<div class="overview">
  <div class="dashboard-heading">Gubernur Wiyogo Atmodarminto</div>
  <div class="dashboard-content">

   <?php 
   include "koneksi.php";
   
   $sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
   $totalsipptali = mysql_num_rows($sipptali);

   $sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
   $totalsipptalipusat = mysql_num_rows($sipptalipusat);

   $sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
   $totalsipptaliutara = mysql_num_rows($sipptaliutara);

   $sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%') ") or die(mysql_error());
   $totalsipptalibarat = mysql_num_rows($sipptalibarat);


   $sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
   $totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

   $sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
   $totalsipptalitimur = mysql_num_rows($sipptalitimur);

   $sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
   $totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




   $nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
   $totalnonsipptali = mysql_num_rows($nonsipptali);

   $nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
   $totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

   $nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
   $totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

   $nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
   $totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


   $nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
   $totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

   $nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
   $totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

   $nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%1988%' or tgldokacuan like '%1989%' or tgldokacuan like '%1990%' or tgldokacuan like '%1991%' or tgldokacuan like '%1992%')") or die(mysql_error());
   $totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
   ?>


   <table>
     
    <tr>
     <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
     <tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
   </tr>

   <tr>
     <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
   </tr>
 </table>

</div>
</div>
</div>
</div>

<div class="overview">
  <div class="dashboard-heading">Gubernur Soerjadi Soedirdja</div>
  <div class="dashboard-content">


   <?php 
   include "koneksi.php";
   
   $sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
   $totalsipptali = mysql_num_rows($sipptali);

   $sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
   $totalsipptalipusat = mysql_num_rows($sipptalipusat);

   $sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
   $totalsipptaliutara = mysql_num_rows($sipptaliutara);

   $sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%') ") or die(mysql_error());
   $totalsipptalibarat = mysql_num_rows($sipptalibarat);


   $sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
   $totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

   $sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
   $totalsipptalitimur = mysql_num_rows($sipptalitimur);

   $sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
   $totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




   $nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
   $totalnonsipptali = mysql_num_rows($nonsipptali);

   $nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
   $totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

   $nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
   $totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

   $nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
   $totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


   $nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
   $totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

   $nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
   $totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

   $nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%1993%' or tgldokacuan like '%1994%' or tgldokacuan like '%1995%' or tgldokacuan like '%1996%' or tgldokacuan like '%1997%')") or die(mysql_error());
   $totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
   ?>


   <table>
     
    <tr>
     <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
     <tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
   </tr>

   <tr>
     <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
   </tr>
 </table>

</div>
</div>


<div class="overview">
  <div class="dashboard-heading">Gubernur Sutiyoso</div>
  <div class="dashboard-content">


   <?php 
   include "koneksi.php";
   
   $sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalsipptali = mysql_num_rows($sipptali);

   $sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalsipptalipusat = mysql_num_rows($sipptalipusat);

   $sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalsipptaliutara = mysql_num_rows($sipptaliutara);

   $sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalsipptalibarat = mysql_num_rows($sipptalibarat);


   $sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

   $sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalsipptalitimur = mysql_num_rows($sipptalitimur);

   $sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




   $nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalnonsipptali = mysql_num_rows($nonsipptali);

   $nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

   $nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

   $nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


   $nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

   $nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

   $nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%1998%' or tgldokacuan like '%1999%' or tgldokacuan like '%2000%' or tgldokacuan like '%2001%' or tgldokacuan like '%2002%' or tgldokacuan like '%2003%' or tgldokacuan like '%2004%' or tgldokacuan like '%2005%' or tgldokacuan like '%2006%' or tgldokacuan like '%2007%')") or die(mysql_error());
   $totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
   ?>


   <table>
     
    <tr>
     <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
     <tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
     <tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
   </tr>

   <tr>
     <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
     <tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
   </tr>
 </table>


</div>
</div>



<div class="overview">
  <div class="dashboard-heading">Gubernur Fauzi Bowo</div>
  <div class="dashboard-content">


    <?php 
    include "koneksi.php";
    
    $sipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
    $totalsipptali = mysql_num_rows($sipptali);

    $sipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
    $totalsipptalipusat = mysql_num_rows($sipptalipusat);

    $sipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
    $totalsipptaliutara = mysql_num_rows($sipptaliutara);

    $sipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%') ") or die(mysql_error());
    $totalsipptalibarat = mysql_num_rows($sipptalibarat);


    $sipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
    $totalsipptaliselatan = mysql_num_rows($sipptaliselatan);

    $sipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
    $totalsipptalitimur = mysql_num_rows($sipptalitimur);

    $sipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
    $totalsipptaliseribu = mysql_num_rows($sipptaliseribu);




    $nonsipptali= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
    $totalnonsipptali = mysql_num_rows($nonsipptali);

    $nonsipptalipusat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat' && idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
    $totalnonsipptalipusat = mysql_num_rows($nonsipptalipusat);

    $nonsipptaliutara= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara' && idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
    $totalnonsipptaliutara = mysql_num_rows($nonsipptaliutara);

    $nonsipptalibarat= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat' && idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
    $totalnonsipptalibarat = mysql_num_rows($nonsipptalibarat);


    $nonsipptaliselatan= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan' && idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
    $totalnonsipptaliselatan = mysql_num_rows($nonsipptaliselatan);

    $nonsipptalitimur= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur' && idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
    $totalnonsipptalitimur = mysql_num_rows($nonsipptalitimur);

    $nonsipptaliseribu= mysql_query("select * from detaildokacuan d inner join bast b on d.nodokacuan=b.nodokacuan inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Kepulauan Seribu' && idkategori!='1' && (tgldokacuan like '%2008%' or tgldokacuan like '%2009%' or tgldokacuan like '%2010%' or tgldokacuan like '%2011%' or tgldokacuan like '%2012%')") or die(mysql_error());
    $totalnonsipptaliseribu = mysql_num_rows($nonsipptaliseribu);
    ?>


    <table>
     
      <tr>
       <tr><td><strong>Total SIPPT : </strong></td><td><?php echo $totalsipptali ?></td></tr>
       <tr><td>Total Jumlah SIPPT Jakarta Pusat : </td><td><?php echo $totalsipptalipusat ?></td></tr>
       <tr><td>Total Jumlah SIPPT Jakarta Utara : </td><td><?php echo $totalsipptaliutara ?></td></tr>
       <tr><td>Total Jumlah SIPPT Jakarta Barat : </td><td><?php echo $totalsipptalibarat ?></td></tr>
       <tr><td>Total Jumlah SIPPT Jakarta Selatan : </td><td><?php echo $totalsipptaliselatan ?></td></tr>
       <tr><td>Total Jumlah SIPPT Jakarta Timur : </td><td><?php echo $totalsipptalitimur ?></td></tr>
       <tr><td>Total Jumlah SIPPT Kepulauan Seribu : </td><td><?php echo $totalsipptaliseribu ?></td></tr>
     </tr>

     <tr>
       <tr><td><strong><br>Total Non-SIPPT : </strong></td><td><br><?php echo $totalnonsipptali ?></td></tr>
       <tr><td>Total Jumlah Non-SIPPT  Jakarta Pusat : </td><td><?php echo $totalnonsipptalipusat ?></td></tr>
       <tr><td>Total Jumlah Non-SIPPT Jakarta Utara : </td><td><?php echo $totalnonsipptaliutara ?></td></tr>
       <tr><td>Total Jumlah Non-SIPPT  Jakarta Barat : </td><td><?php echo $totalnonsipptalibarat ?></td></tr>
       <tr><td>Total Jumlah Non-SIPPT  Jakarta Selatan : </td><td><?php echo $totalnonsipptaliselatan ?></td></tr>
       <tr><td>Total Jumlah Non-SIPPT  Jakarta Timur : </td><td><?php echo $totalnonsipptalitimur ?></td></tr>
       <tr><td>Total Jumlah Non-SIPPT  Kepulauan Seribu : </td><td><?php echo $totalnonsipptaliseribu ?></td></tr>
     </tr>
   </table>
 </div>
</div>

<div class="latest">
  <div class="dashboard-heading">Data</div>
  <div class="dashboard-content">




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