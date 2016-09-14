<?php
// session_start();
require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
<head>
  <title>Fasos Fasum BPKD DKI Jakarta</title>
  
  <link href="sources/B_blue.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="sources/font-awesome-4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="view/stylesheet/stylesheet.css" />
  <link rel="stylesheet" type="text/css" href="view/javascript/jquery/ui/themes/ui-lightness/ui.all.css" />
  <script type="text/javascript" src="view/javascript/jquery/jquery-1.3.2.min.js"></script>
  <script type="text/javascript" src="view/javascript/jquery/ui/jquery-ui-1.8.9.custom.min.js"></script>
  <link rel="stylesheet" type="text/css" href="view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.9.custom.css" />
  <script type="text/javascript" src="view/javascript/jquery/ui/ui.core.js"></script>
  <script type="text/javascript" src="view/javascript/jquery/superfish/js/superfish.js"></script>
  <script type="text/javascript" src="view/javascript/jquery/tab.js"></script>
  <script type="text/javascript" src="view/javascript/jquery/menu/jquery.menu.js"></script>

  <script type="text/javascript" src="view/javascript/jquery/ui/external/jquery.bgiframe-2.1.2.js"></script>
  <!-- <script src="js/jquery.price_format.1.6.js" type="text/javascript"></script> -->

  <script type="text/javascript" src="view/javascript/jquery/superfish/js/superfish.js"></script>
  <script type="text/javascript">

  </script>
  <script type="text/javascript">
    function submit() {
      document.getElementById("formpencarian").submit();
    }

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
      include"menu.php";
      ?>
    </div>
    <style type="text/css">
      .middle{
        border: 2px solid #CCCCCC;
        padding: 20px 20px 20px 20px;
      }
      .sort{
        border: 2px solid #CCCCCC;
        padding: 5px 5px 5px 5px;
      }
      #left{
        width: 20%;
        float: left;
      }
      #right{
        width: 80%;
        float: right;
      }
      #filter{
        float: left;
        background-color: #C5EFF7;
        width: 88%;
      }
      #data{
        float: right;
        width: 100%;
      }
      #btnleft{
        background-color: cyan;
        float: right;
        width: 9%;
        cursor: pointer;
        cursor: hand;
      }
      #btnright{
        background-color: cyan;
        margin-left: -2%;
        float: left;
        display: none;
        width: 0;
        cursor: pointer;
        cursor: hand;
        height: auto;
      }
      #btnright p{
        transform: rotate(90deg);
        font-size: x-large;
      }
      .rowdata{
        cursor: pointer;
        cursor: hand;
      }
      .rowdetail{
        display: none;
      }
    </style>
    <script>
      $(document).ready(function(){
        $(".rowdata").click(function(){
          $(this).closest('tr').next().toggle();
        });
        $("#tahunsippt,#tahunsippt2").change(function(){
          if($('#tahunsippt').val()!='' && $('#tahunsippt2').val()!=''){
            document.getElementById("formpencarian").submit();   
          }
        });
        $("#tahunbast,#tahunbast2").change(function(){
          if($('#tahunbast').val()!='' && $('#tahunbast2').val()!=''){
            document.getElementById("formpencarian").submit();   
          }
        });
      });
      function closeFil() {
        document.getElementById("left").style.display = "none";
        document.getElementById("btnleft").style.display = "none";
        document.getElementById("btnright").style.display = "block";
        document.getElementById("right").style.width = "100%";
        document.getElementById("data").style.width = "100%";
        document.getElementById("btnright").style.width = "2%";
      }
      function openFil() {
        document.getElementById("left").style.display = "block";
        document.getElementById("btnleft").style.display = "block";
        document.getElementById("btnright").style.display = "none";
        document.getElementById("right").style.width= "80%";
        document.getElementById("data").style.width = "100%";
        document.getElementById("btnright").style.width = "0";
      }
    </script>
    <form method="get" action="" id="formpencarian">
      <div id="content" class="box">
        <div class="heading">
          <h1><img src="view/image/home.png" alt="" /> Pencarian</h1>
        </div>
        <div class="middle">
          <b>Kata Pencarian </b><br>
          <select name='kategori' onchange="submit()">
            <?php
            $query2c="";
            if(isset($_GET['kategori'])){
              if($_GET['kategori']=='dokacuan'){
                $query='select * from detaildokacuan inner join dokumenacuan on detaildokacuan.idkategori=dokumenacuan.idkategori ';
              }else{
                $query="select bast.nobast, bast.keterangan, bast.tglbast, bast.pengembangbast, detaildokacuan.nodokacuan, detaildokacuan.pemegangdokacuan,dokumenacuan.jenisdokumen, detaildokacuan.tgldokacuan from bast inner join detaildokacuan on bast.nodokacuan=detaildokacuan.nodokacuan inner join dokumenacuan on detaildokacuan.idkategori=dokumenacuan.idkategori ";// INNER JOIN dataaset on bast.nobast=dataaset.nobastaset ";
              }
              echo"
              <option value='$_GET[kategori]'>
               -".strtoupper("$_GET[kategori]")."
             </option>
             ";
           }else{
            $query="select bast.nobast, bast.keterangan, bast.tglbast, bast.pengembangbast, detaildokacuan.nodokacuan, detaildokacuan.pemegangdokacuan, dokumenacuan.jenisdokumen, detaildokacuan.tgldokacuan from bast inner join detaildokacuan on bast.nodokacuan=detaildokacuan.nodokacuan inner join dokumenacuan on detaildokacuan.idkategori=dokumenacuan.idkategori ";//INNER JOIN dataaset on bast.nobast=dataaset.nobastaset ";
          }
          ?>
          <option value='aset'>
           ASET
         </option>
         <option value='bast'>
           BAST
         </option>
         <option value='akun'>
           Akun
         </option>
         <option value='dokacuan'>
           Dokumen Acuan
         </option>
       </select>
       <input type="text" name="term" <?php if(isset($_GET['term'])){echo "value='".$_GET['term']."'";} ?> />    <input type="submit" name="submit2" value="Cari"/> 
       <!-- <a class="advance-search-button">Advance Search</a><br/> -->
       <br>

       <font size="1">
        )* -<u>ASET</u>- Input Nomor Bast atau Nama Pengembang atau Jenis Dok. Acuan <br />
        )* -<u>BAST</u>- Input Nomor Bast atau Nama Pengembang atau Jenis Dok. Acuan <br />
        )* -<u>Akun</u>- Input Nomor Bast atau Nama Pengembang atau Jenis Dok. Acuan <br />
        )* -<u>Dokumen Acuan</u>- Input Nomor Dok. Acuan atau Nama Pemegang Dok. atau Jenis Dok. Acuan <br />
      </font>
    </div>

    <div id="left">
      <div id="filter">
        <?php
        include"koneksi.php";
        $submit=" onclick='submit()' ";
        $submitch=" onchange='submit()' ";
        if(isset($_GET['kategori'])){
          $kategori=$_GET['kategori'];
        }else{
          $kategori='aset';
        }
        $qr="select tabel, nama, `name`, ref_table, ref_field, ket, kategori from ref_master where kategori like '%$kategori%'";
            // echo $qr;
        $qfilter_m=mysql_query($qr);
        $dan=0;
            // $query='';
        if(isset($_GET['term'])&&$_GET['term']!=''){
          $term=$_GET['term'];
          $dan=1;
          if($_GET['kategori']=='dokacuan'){
            $query.=" where detaildokacuan.nodokacuan like '%$term%'  or detaildokacuan.pemegangdokacuan like '%$term%' or dokumenacuan.jenisdokumen  like '%$term%'";
          }else{
            $query.=" where  bast.nobast like '%$term%' or bast.pengembangbast like '%$term%' or dokumenacuan.jenisdokumen  like '%$term%'";
          }
        }
        while ($dfilter_m=mysql_fetch_array($qfilter_m)) {
          if($dan==0){
            $ope=" where ";
          }else{
            $ope=" and ";
          }
          echo"<hr /><b>$dfilter_m[nama]</b><br />";
              if($dfilter_m['ket']=='dataaset'){//beda tampiloan beda query
                $qfilter=mysql_query("select display, name from $dfilter_m[tabel]");
              }else if($dfilter_m['ket']=='tahun'){//beda tampilan beda query
                $qfilter=mysql_query("select name, display, ref_table, ref_field, clause from $dfilter_m[tabel] where kategori like '%$_GET[kategori]%'");
              }else{
                $qfilter=mysql_query("select keyword, display, name from $dfilter_m[tabel]");
              }
              $dan2=0;
              while ($dfilter=mysql_fetch_array($qfilter)) {
                if($dfilter_m['ket']=='dataaset'){//beda tampiloan beda query
                  if(isset($_GET["$dfilter_m[name]$dfilter[name]"])&&$_GET["$dfilter_m[name]$dfilter[name]"]!="$dfilter_m[name]$dfilter[name]"){
                    $wp=$_GET["$dfilter_m[name]$dfilter[name]"];
                    if($dan2==0){
                      $dan=1;
                      $dan2=1;
                      $query.=" $ope ((nobast in (select nobastaset from $dfilter_m[ket] where $dfilter_m[name] like '%$wp%')))";
                    }else{
                      $query=substr($query,0,-3).") or (nobast in (select nobastaset from $dfilter_m[ket] where $dfilter_m[name] like '%$wp%')))";
                    }
                    $ck="checked";
                    $dply="block";

                  }else{
                    $ck='';
                    $dply="none";
                  }
                  echo"
                  <style>
                      #$dfilter_m[ref_table]$dfilter[name], #$dfilter_m[ref_field]$dfilter[name]{
                    display:$dply;
                  }
                </style>
                ";

                echo"
                <label>
                  <input type='checkbox' $ck $submit name='$dfilter_m[name]$dfilter[name]'  id='$dfilter_m[name]$dfilter[name]' value='$dfilter[display]'> $dfilter[display]<br>
                </label>
                "; 

                $tingkat2=mysql_query("select * from $dfilter_m[ref_table] where $dfilter_m[name] like '%$dfilter[display]%'");
                echo"
                <select $submitch name='$dfilter_m[ref_table]$dfilter[name]' id='$dfilter_m[ref_table]$dfilter[name]' style='width:90%'>
                  ";
                  if(isset($_GET["$dfilter_m[ref_table]$dfilter[name]"])&&$_GET["$dfilter_m[ref_table]$dfilter[name]"]!="$dfilter_m[ref_table]$dfilter[name]"&&$_GET["$dfilter_m[ref_table]$dfilter[name]"]!=""){
                    $wp=$_GET["$dfilter_m[ref_table]$dfilter[name]"];
                    $query=substr($query,0,-3)." and $dfilter_m[ket].$dfilter_m[ref_table] like '%$wp%')))";
                    $ctingkat3="where nama$dfilter_m[ref_table] like '%$wp%'";
                    echo"
                    <option value='$wp'>
                      $wp
                    </option>
                    ";
                  }else{
                    $ctingkat3="";
                    echo"
                    <option value=''>
                      -Pilih ".ucwords($dfilter_m['ref_table'])."
                    </option>
                    ";
                  }
                  while($dting2=mysql_fetch_array($tingkat2)){
                    $fieldnya="nama".$dfilter_m['ref_table'];
                    echo"
                    <option value='$dting2[$fieldnya]'>
                      $dting2[$fieldnya]
                    </option>
                    ";
                  }
                  echo"
                </select>
                ";

                $tingkat3=mysql_query("select * from $dfilter_m[ref_field] $ctingkat3");
                echo" 
                <select $submitch name='$dfilter_m[ref_field]$dfilter[name]' id='$dfilter_m[ref_field]$dfilter[name]' style='width:90%'>
                  ";
                  if(isset($_GET["$dfilter_m[ref_field]$dfilter[name]"])&&$_GET["$dfilter_m[ref_field]$dfilter[name]"]!="$dfilter_m[ref_field]$dfilter[name]"&&$_GET["$dfilter_m[ref_field]$dfilter[name]"]!=""){
                    $wp=$_GET["$dfilter_m[ref_field]$dfilter[name]"];
                    $query=substr($query,0,-3)." and $dfilter_m[ket].$dfilter_m[ref_field] like '%$wp%')))";
                    echo"
                    <option value='$wp'>
                      $wp
                    </option>
                    ";
                  }else{
                    echo"
                    <option value=''>
                      -Pilih ".ucwords($dfilter_m['ref_field'])."
                    </option>
                    ";
                  }
                  while($dting3=mysql_fetch_array($tingkat3)){
                    $fieldnya="nama".$dfilter_m['ref_field'];
                    echo"
                    <option value='$dting3[$fieldnya]'>
                      $dting3[$fieldnya]
                    </option>
                    ";
                  }
                  echo"
                </select>
                ";

                }else if($dfilter_m['ket']=='multi'){//sama tampilan beda query
                  if(isset($_GET["$dfilter_m[name]$dfilter[name]"])){
                    if($dfilter_m['kategori']=='dokacuan'){
                      $wp=$_GET["$dfilter_m[name]$dfilter[name]"];
                      if($dan2==0){
                        $dan=1;
                        $dan2=1;

                        $query.="$ope (detaildokacuan.nodokacuan in (SELECT DISTINCT $dfilter_m[ref_table].nodokacuan FROM $dfilter_m[ref_table] WHERE nobast='' and ($dfilter_m[ref_table].$dfilter_m[ref_field] like '%$wp%')))";
                      }else{
                        $query=substr($query,0,-3)." or $dfilter_m[ref_table].$dfilter_m[ref_field] like '%$wp%')))";
                      }
                    }else{
                      $wp=$_GET["$dfilter_m[name]$dfilter[name]"];
                      if($dan2==0){
                        $dan=1;
                        $dan2=1;
                        $query.="$ope (bast.nobast in (select DISTINCT $dfilter_m[ref_table].nobast from $dfilter_m[ref_table] where $dfilter_m[ref_table].$dfilter_m[ref_field] like '%$wp%'))";
                      }else{
                        $query=substr($query,0,-2)." or $dfilter_m[ref_table].$dfilter_m[ref_field] like '%$wp%'))";
                      }
                    }
                    $ck="checked";
                  }else{
                    $ck='';
                  }
                  echo"
                  <label>
                    <input type='checkbox' $ck $submit name='$dfilter_m[name]$dfilter[name]' value='$dfilter[display]'> $dfilter[display]<br>
                  </label>
                  "; 
                }else if($dfilter_m['ket']=='tahun'){//beda tampilan beda query
                  if(isset($_GET["$dfilter_m[name]$dfilter[name]"])&&$_GET["$dfilter_m[name]$dfilter[name]"]!=''&&(isset($_GET["$dfilter_m[name]$dfilter[name]2"])&&$_GET["$dfilter_m[name]$dfilter[name]2"]!='')){
                    if($dan2==0){
                      $dan=1;
                      $dan2=1;
                      $ye1=$_GET["$dfilter_m[name]$dfilter[name]"];
                      $ye2=$_GET["$dfilter_m[name]$dfilter[name]2"];
                      $query.=" $ope (year(STR_TO_DATE($dfilter[ref_table].$dfilter[ref_field], '%d/%m/%Y')) between '$ye1' and '$ye2')";
                    }else{
                      $query=substr($query,0,-1)." or year(STR_TO_DATE($dfilter[ref_table].$dfilter[ref_field], '%d/%m/%Y')) between '$ye1' and '$ye2')";
                    }
                    $ck="checked";
                  }else{
                    $ck='';
                  }
                  echo "$dfilter[display]<br/><select name=$dfilter_m[name]$dfilter[name] id=$dfilter_m[name]$dfilter[name]>";
                  if(isset($_GET["$dfilter_m[name]$dfilter[name]"])&&$_GET["$dfilter_m[name]$dfilter[name]"]!=''){
                    $ye=$_GET["$dfilter_m[name]$dfilter[name]"];
                    echo"
                    <option value='$ye'>$ye</option>
                    ";
                  }else{
                    echo"
                    <option value=''>-pilih-</option>
                    ";
                  }
                  for($i=1990;$i<=date("Y");$i++){
                    echo"
                    <option value='$i'>$i</option>
                    ";
                  }
                  echo"</select> sampai dengan <select name=$dfilter_m[name]$dfilter[name]2 id=$dfilter_m[name]$dfilter[name]2>";
                  if(isset($_GET["$dfilter_m[name]$dfilter[name]2"])&&$_GET["$dfilter_m[name]$dfilter[name]2"]!=''){
                    $ye=$_GET["$dfilter_m[name]$dfilter[name]2"];
                    echo"
                    <option value='$ye'>$ye</option>
                    ";
                  }else{
                    echo"
                    <option value=''>-pilih-</option>
                    ";
                  }
                  for($i=date("Y");$i>=1990;$i--){
                    echo"
                    <option value='$i'>$i</option>
                    ";
                  }
                  echo"
                </select><br>
                ";
                }else{//ini normalnya
                  if(isset($_GET["$dfilter_m[name]$dfilter[name]"])){
                    $wp=$_GET["$dfilter_m[name]$dfilter[name]"];
                    if($dan2==0){
                      $dan=1;
                      $dan2=1;
                      $query.=" $ope ($dfilter_m[ref_table].$dfilter_m[ref_field] like '%$wp%')";
                    }else{
                      $query=substr($query,0,-1)." or $dfilter_m[ref_table].$dfilter_m[ref_field] like '%$wp%')";
                    }
                    $ck="checked";
                  }else{
                    $ck='';
                  }
                  echo"
                  <label>
                    <input type='checkbox' $ck $submit name='$dfilter_m[name]$dfilter[name]' value='$dfilter[display]'> $dfilter[display]<br>
                  </label>
                  "; 
                }
              }
            }
            echo"
            <h4><input type=submit name=submit2 value=Cari style='width:100%;'></h4>
            ";
            ?>
          </div>
          <div id="btnleft">
            <i class="fa fa-eye-slash fa-lg" onclick="closeFil()" aria-hidden="true"></i>
          </div>
        </div>
        <div id="right">
          <div id="btnright" onclick="openFil()">
            <i class="fa fa-eye fa-lg" aria-hidden="true"></i>
            <p>
              Filter_Data
            </p>
          </div>
          <div id="data">
            <div class="sort">
              <?php
              echo"
              Sort: 
              <select name='order' onchange='submit()'>
                ";
                if(isset($_GET['order'])&&$_GET['order']!=''){
                  $order=$_GET['order'];
                  $disp='';
                  if($order=='nobast'){
                    $order=' bast.nobast ';
                    $disp='No. BAST';
                  }else if($order=='tglbast'){
                    $order=" year(STR_TO_DATE(bast.tglbast,'%d/%m/%Y')) ";
                    $disp='Tgl. BAST';
                  }else if($order=='nodokacuan'){
                    $order=' detaildokacuan.nodokacuan ';
                    $disp='No. Dok. Acuan';
                  }else{
                    $order=" year(STR_TO_DATE(detaildokacuan.tgldokacuan,'%d/%m/%Y')) ";
                    $disp='Tgl. Dok. Acuan';
                  }
                  $order=" order by ".$order." asc";

                  echo"
                  <option value='$_GET[order]'>
                    -$disp
                  </option>
                  ";
                }else{
                  $order='';
                  echo"
                  <option value=''>
                    -Sort By-
                  </option>
                  ";
                }
                if(!isset($_GET['kategori'])||$_GET['kategori']!='dokacuan'){
                  echo"
                  <option value='nobast'>
                    No. BAST
                  </option>
                  <option value='tglbast'>
                    Tgl. BAST
                  </option>
                  ";
                }
                $reclimit=20;
                if(isset($_GET['page'])){
                  $offset=$_GET['page']*$reclimit;
                }else{
                  $offset=0;
                }
                $limit=" LIMIT $offset, $reclimit";
                $query.=$order;
                $_SESSION['query']=$query;
                $qpaging=$query;
                $page=ceil(mysql_num_rows(mysql_query($query))/$reclimit);
                $query.=$limit;
                $no=$offset+1;
                echo"
                <option value='nodokacuan'>
                  No. Dok. Acuan
                </option>
                <option value='tgldokacuan'>
                  Tgl. Dok. Acuan
                </option>
              </select><br>
              <hr>
              <a href=testexcell.php target=_blank><img alt=' ' src='view/image/excel.jpg' border='0'>excell nihh</a>
              <center>
                <table>
                  ";
                  if(isset($_GET['kategori'])&&$_GET['kategori']=='dokacuan'){
                    echo"
                    <thead>
                      <tr>
                        <td style='background-color: #89C4F4;' class='center'>No.</td>         
                        <td style='background-color: #89C4F4;' class='center'>No.Dok Acuan</td>
                        <td style='background-color: #89C4F4;' class='center'>Tgl. Dok Acuan</td>
                        <td style='background-color: #89C4F4;' class='center'>Perihal</td>
                        <td style='background-color: #89C4F4;' class='center'>Pemegang</td>

                        <td style='background-color: #89C4F4;' class='center'>Keterangan</td>
                        <td style='background-color: #89C4F4;' class='center'>Jenis Dok Acuan</td>
                      </tr>
                    </thead>
                    ";
                  }else{
                    echo"
                    <thead>
                      <tr>
                        <td style='background-color: #89C4F4;' class='center'>No.</td>         
                        <td style='background-color: #89C4F4;' class='center'>No.BAST</td>
                        <td style='background-color: #89C4F4;' class='center'>Tgl.BAST</td>
                        <td style='background-color: #89C4F4;' class='center'>Pengembang</td>
                        <td style='background-color: #89C4F4;' class='center'>Dok Acuan</td>

                        <td style='background-color: #89C4F4;' class='center'>No.Dok Acuan</td>
                        <td style='background-color: #89C4F4;' class='center'>Pemegang SIPPT</td>
                        <td style='background-color: #89C4F4;' class='center'>Kategori BAST</td>
                        <td style='background-color: #89C4F4;' class='center'>Act.</td>
                      </tr>
                    </thead>
                    ";
                  }
                  echo $query."<--";
                  $qs=mysql_query($query);
                  $sudah="<i class='fa fa-check-circle' aria-hidden='true' style='color:green'></i>";
                  $belum="<i class='fa fa-times-circle' aria-hidden='true' style='color:red'></i>";
                  while ($data=mysql_fetch_array($qs)) {

                    if(isset($_GET['kategori'])&&$_GET['kategori']=='dokacuan'){
                      echo "
                      <tr class='rowdata'>
                        <td style='background-color: #C5EFF7' class='center'>$no</td>
                        <td  style='background-color: #C5EFF7' class='left'><a href='bastbysippt.php?id=$data[nodokacuan]'>$data[nodokacuan]</a></td>
                        <td  style='background-color: #C5EFF7' class='center'>$data[tgldokacuan]</td>
                        <td  style='background-color: #C5EFF7' class='left'>$data[haldokacuan]</td>
                        <td  style='background-color: #C5EFF7' class='center'>$data[pemegangdokacuan]</td>


                        <td  style='background-color: #C5EFF7' class='left'>$data[ketdokacuan]</td>
                        <td  style='background-color: #C5EFF7' class='center'>$data[jenisdokumen]</td>

                      </tr>
                      ";
                      $number=0;
                      $query2=mysql_query("select * from peruntukan where nodokacuan='$data[nodokacuan]'");//nobast='' and 
                      $mxrow=mysql_num_rows($query2);
                      if($mxrow>0){
                        echo"
                          <tr class='rowdetail'><td colspan=7><center>
                          List Kewajiban
                          <table>
                          <tr>
                            <td style='background-color: #6BB9F0'>
                            No.
                            </td>
                            <td style='background-color: #6BB9F0'>
                            Jenis Fasos Fasum
                            </td>
                            <td style='background-color: #6BB9F0'>
                            Deskripsi
                            </td>
                            <td style='background-color: #6BB9F0'>
                            Luas (m<sup>2</sup>)
                            </td>
                            <td style='background-color: #6BB9F0'>
                            Status Kewajiban
                            </td>
                          </tr>
                        ";
                      }
                      while ($data2=mysql_fetch_array($query2)) {
                        $number++;
                        if($data2['nobast']==''){
                          $sttskewajiban=$belum;
                        }else{
                          $sttskewajiban=$sudah;
                        }
                        echo "
                        <tr>
                          <td style='background-color: #E4F1FE'>$number</td>
                          <td  style='background-color: #E4F1FE'>$data2[jenisfasos]</td>
                          <td  style='background-color: #E4F1FE'>$data2[deskripsi]</td>
                          <td  style='background-color: #E4F1FE'>$data2[luas]</td>
                          <td  style='background-color: #E4F1FE' align='center'>$sttskewajiban</td>
                        </tr>
                        ";
                      }
                      if($mxrow>0){
                        echo"</table></center></td></tr>";
                      }
                    }else{
                      echo "
                      <tr class='rowdata'>
                        <td style='background-color: #C5EFF7' class='center'>$no</td>
                        <td  style='background-color: #C5EFF7' class='left'>$data[nobast]</td>
                        <td  style='background-color: #C5EFF7' class='center'>$data[tglbast]</td>
                        <td  style='background-color: #C5EFF7' class='left'>$data[pengembangbast]</td>
                        <td  style='background-color: #C5EFF7' class='center'>$data[jenisdokumen]</td>

                        <td  style='background-color: #C5EFF7' class='left'><a href='bastbysippt.php?id=$data[nodokacuan]'>$data[nodokacuan]</a></td>
                        <td  style='background-color: #C5EFF7' class='left'>$data[pemegangdokacuan]</td>
                        <td  style='background-color: #C5EFF7' class='left'>$data[keterangan]</td>
                        <td  style='background-color: #C5EFF7' class='center'><a href='viewdetailbast.php?id=$data[nobast]'><img alt=' ' src='view/image/viewdetail.gif' border=0></a></td>
                      </tr>
                      ";
                      $query2=mysql_query("select dataaset.idaset,dataaset.wilayah,dataaset.kecamatan,dataaset.kelurahan,detaildokacuan.tgldokacuan from bast inner join dataaset on bast.nobast=dataaset.nobastaset  inner join detaildokacuan on bast.nodokacuan=detaildokacuan.nodokacuan where bast.nobast='$data[nobast]'");
                      while ($data2=mysql_fetch_array($query2)) {      
                        echo "
                        <tr class='rowdetail'>
                          <td colspan=9>
                            <center>
                              <table border=1 style='border-collapse: collapse;'>
                                <tr>
                                  <td colspan=7>
                                    <b>Wilayah</b>: $data2[wilayah], $data2[kecamatan], $data2[kelurahan]<br> <b>Tgl. Dokacuan</b>: $data2[tgldokacuan]
                                  </td>
                                </tr>
                                <tr>
                                  <td style='background-color: #ECECEC'>No.</td>
                                  <td  style='background-color: #ECECEC'>Status Sertifikat (SHP Pemprov)</td>
                                  <td  style='background-color: #ECECEC'>Jenis Fasos Fasum</td>
                                  <td  style='background-color: #ECECEC'>Status Penggunaan</td>
                                  <td  style='background-color: #ECECEC'>Status Plang</td>
                                  <td  style='background-color: #ECECEC'>Sensus Fasos Fasum</td>
                                  <td  style='background-color: #ECECEC;' align='center'>KIB</td>
                                </tr>
                                ";
                                $query3=mysql_query("select peruntukan.jenisfasos,peruntukan.statussertifikat,peruntukan.statuspenggunaan,peruntukan.statusplang,peruntukan.sensusfasos, akun.kategoriaset from dataaset inner join peruntukan on dataaset.idaset=peruntukan.idaset inner join akun on peruntukan.idperuntukan=akun.idperuntukan where dataaset.idaset='$data2[idaset]'");
                                $nomor=0;
                                while ($data3=mysql_fetch_array($query3)) {
                                  if($data3['statussertifikat']=='SHP Pemprov. DKI Jakarta'){
                                    $statussertifikat=$sudah;
                                  }else{
                                    $statussertifikat=$belum;
                                  }
                                  if($data3['statusplang']=='Sudah'){
                                    $statusplang=$sudah;
                                  }else{
                                    $statusplang=$belum;
                                  }
                                  if($data3['sensusfasos']=='Telah dilakukan Sensus'){
                                    $sensusfasos=$sudah;
                                  }else{
                                    $sensusfasos=$belum;
                                  }
                                  $nomor++;
                                  echo "
                                  <tr>
                                    <td align='center'>$nomor</td>
                                    <td align='center'>$statussertifikat</td>
                                    <td align='center'>$data3[jenisfasos]</td>
                                    <td align='center'>$data3[statuspenggunaan]</td>
                                    <td align='center'>$statusplang</td>
                                    <td align='center'>$sensusfasos</td>
                                    <td align='center'>$data3[kategoriaset]</td>
                                  </tr>
                                  ";
                                }
                                echo"
                              </table>
                            </center>
                          </td>
                        </tr>
                        ";
                      }
                    }
                    $no++;
                  }
                  echo"
                </table>
                ";
                if(empty($_GET)){
                  $qr='?';
                }else{
                  $qr='&';
                }
                include ("pagination.php");
                if(isset($_GET['page'])){
                  $plng=strlen($_GET['page']);
                  $pth=substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",0,strlen("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")-(5+$plng));
                  $cp=$_GET['page'];
                }else{
                  $pth="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]$qr";
                  $cp=1;
                }
                echo pagination($qpaging,$reclimit,$cp,"$pth");
              // for($i=0;$i<$page;$i++){
              //   $j=$i+1;
              //   echo "<a href='http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]$qr"."offset=".$i*$reclimit."'>$j</a> ";
              // }
                echo"
              </center>
              ";
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <div id="footer"></div>
</body>
</html>