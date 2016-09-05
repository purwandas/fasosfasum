<!-- //-------------------------------------sch -->
    <script type="text/javascript">
      $(function(){
        // $('.advance-search-button').click(function(){
        //   $('.advance-search').toggle('slow');
        // });
        // alert("test");
        // $("input:checkbox[name='wilayah[]']").change(function(){
        //   $("#kec").empty();
        //   $("#kel").empty();
        //   $("#kec").append("<option value='' > Kecamatan </option>");
        //   $("input:checkbox[name='wilayah[]']").each(function(){
        //     if($(this).is(":checked")){
        //       var wilayah=$(this).val(); 
        //       $.get('wilayah.php',{'nama':wilayah}, function(data){

        //         $.each(data,function(k,v){
        //           $("#kec").append("<option value='" + v + "' > "+v+"</option>");
        //         });
        //       }, "json");
        //     }
        //   });      
        // });


        $("#wilayahwil").change(function(){
          $("#wilayahkec").empty();
          var wilayah=$(this).val();          
          $.get('wilayah.php',{'nama':wilayah}, function(data){
            $("#wilayahkec").append("<option value='' > Kecamatan </option>");
            $.each(data,function(k,v){
              $("#wilayahkec").append("<option value='" + v + "' > "+v+"</option>");
            });
          }, "json");
        });
        $("#wilayahkec").change(function(){
          $("#wilayahkel").empty();
          var wilayah=$(this).val();          
          $.get('wilayah2.php',{'kec':wilayah}, function(data){
            $("#wilayahkel").append("<option value='' > Kelurahan </option>");
            $.each(data,function(k,v){
              $("#wilayahkel").append("<option value='" + v + "' > "+v+"</option>");
            });
          }, "json");
        });
      });
    </script>
    <!-- <link rel="stylesheet" href="sources/bootstrap.min.css"> -->
    <style>
      .advance-search{
        display: none;
      }
      .advance-search-button{
        line-height: 12px;
        font-size: 8pt;
        font-family: tahoma;
        margin-top: 1px;
        margin-right: 2px;
        top: 0;
        right: 0;
      }
    </style>
    <div class="content">
      <div class="latest">
        
          <div class="dashboard-heading" id="main0">Pencarian Data</div>

          <form method="post" action="" name="form1" id="form1">
            <div class="dashboard-content" id="mainn">

              <!-- <div class="advance-search-button text-center btn btn-info"> -->

              <!-- </div> -->
              <b>Kata Pencarian  </b><br>
              <select name='kategori'>
                <?php
                if(isset($_POST['kategori'])){
                  if($_POST['kategori']=='dokacuan'){
                    $query='select * from detaildokacuan inner join dokumenacuan on detaildokacuan.idkategori=dokumenacuan.idkategori ';
                  }else{
                    $query="select bast.nobast, bast.keterangan, bast.tglbast, bast.pengembangbast, detaildokacuan.nodokacuan, detaildokacuan.pemegangdokacuan,dokumenacuan.jenisdokumen, detaildokacuan.tgldokacuan from bast inner join detaildokacuan on bast.nodokacuan=detaildokacuan.nodokacuan inner join dokumenacuan on detaildokacuan.idkategori=dokumenacuan.idkategori INNER JOIN dataaset on bast.nobast=dataaset.nobastaset ";
                  }
                  echo"
                  <option value='$_POST[kategori]'>
                   -".strtoupper("$_POST[kategori]")."
                 </option>
                 ";
               }else{
                $query="select bast.nobast, bast.keterangan, bast.tglbast, bast.pengembangbast, detaildokacuan.nodokacuan, detaildokacuan.pemegangdokacuan, dokumenacuan.jenisdokumen, detaildokacuan.tgldokacuan from bast inner join detaildokacuan on bast.nodokacuan=detaildokacuan.nodokacuan inner join dokumenacuan on detaildokacuan.idkategori=dokumenacuan.idkategori INNER JOIN dataaset on bast.nobast=dataaset.nobastaset ";
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
           <input type="text" name="term" <?php if(isset($_POST['term'])){echo "value='".$_POST['term']."'";} ?> />    <input type="submit" name="submit2" value="Cari"/> 
           <!-- <a class="advance-search-button">Advance Search</a><br/> -->
           <br>

           <font size="1">
            )* -<u>ASET</u>- Input Nomor Bast atau Nama Pengembang atau Jenis Dok. Acuan <br />
)* -<u>BAST</u>- Input Nomor Bast atau Nama Pengembang atau Jenis Dok. Acuan <br />
)* -<u>Akun</u>- Input Nomor Bast atau Nama Pengembang atau Jenis Dok. Acuan <br />
)* -<u>Dokumen Acuan</u>- Input Nomor Dok. Acuan atau Nama Pemegang Dok. atau Jenis Dok. Acuan <br />
</font>




























<?php
echo"
<br />
<select name='order'>
  ";
  if(isset($_POST['order'])&&$_POST['order']!=''){
    $order=$_POST['order'];
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
    <option value='$_POST[order]'>
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
  if(!isset($_POST['kategori'])||$_POST['kategori']!='dokacuan'){
    echo"
    <option value='nobast'>
      No. BAST
    </option>
    <option value='tglbast'>
      Tgl. BAST
    </option>
    ";
  }
  echo"
  <option value='nodokacuan'>
    No. Dok. Acuan
  </option>
  <option value='tgldokacuan'>
    Tgl. Dok. Acuan
  </option>
</select><br>
";
?>
<br />
<div style='float:left; margin left:-50px;border-left: 6px solid #22A7F0;border-radius: 25px;background-color: #C5EFF7;padding:5px;'>
  <span style="font-size:20px;cursor:pointer;color:#22313F  ;" onclick="openNav()">
    filtering
  </span>
</div>
</div>

<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("mainn").style.marginLeft = "250px";
    document.getElementById("main0").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.getElementById("mainn").style.marginLeft= "0";
    document.getElementById("main0").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
  }
</script>

<div style="float:left">
<?php
        // if(isset($_REQUEST['submit2'])){
          if($_POST['kategori']){

            echo"
            <div  id='mySidenav' class='sidenav'>
             <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
             <h2>Filter</h2>
             ";
             









             include"koneksi.php";
             $qr="select tabel, nama, `name`, ref_table, ref_field, ket, kategori from ref_master where kategori like '%$_POST[kategori]%'";
            // echo $qr;
             $qfilter_m=mysql_query($qr);
             $dan=0;
            // $query='';
             if(isset($_POST['term'])&&$_POST['term']!=''){
              $term=$_POST['term'];
              $dan=1;
              if($_POST['kategori']=='dokacuan'){
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
              if($dfilter_m['ket']=='bertingkat'){//beda tampiloan beda query
                $qfilter=mysql_query("select display, name, tabel, field from $dfilter_m[tabel]");
              }else if($dfilter_m['ket']=='tahun'){//beda tampilan beda query
                $qfilter=mysql_query("select name, display, ref_table, ref_field, clause from $dfilter_m[tabel] where kategori like '%$_POST[kategori]%'");
              }else{
                $qfilter=mysql_query("select keyword, display, name from $dfilter_m[tabel]");
              }
              $dan2=0;
              while ($dfilter=mysql_fetch_array($qfilter)) {
                if($dfilter_m['ket']=='bertingkat'){//beda tampiloan beda query

                  echo"
                  <select name='$dfilter_m[name]$dfilter[name]' id='$dfilter_m[name]$dfilter[name]' style='width:90%'>
                    ";
                    if(isset($_POST["$dfilter_m[name]$dfilter[name]"])&&$_POST["$dfilter_m[name]$dfilter[name]"]!="$dfilter_m[name]$dfilter[name]"){
                      $wp=$_POST["$dfilter_m[name]$dfilter[name]"];
                      if($dan2==0){
                        $dan=1;
                        $dan2=1;
                        $query.=" $ope ($dfilter_m[ref_table].$dfilter[field] like '%$wp%')";
                      }else{
                        $query=substr($query,0,-1)." or $dfilter_m[ref_table].$dfilter[field] like '%$wp%')";
                      }
                      echo"
                      <option value='$wp'>
                        $wp
                      </option>
                      ";
                    }else{
                      echo"
                      <option value='$dfilter_m[name]$dfilter[name]'>
                        $dfilter[display]
                      </option>
                      ";
                    }
                    $qref=mysql_query("select distinct $dfilter[field] from $dfilter[tabel]");
                    while ($dref=mysql_fetch_array($qref)) {
                      $fieldnya=$dfilter['field'];
                      echo"
                      <option value='$dref[$fieldnya]'>
                        $dref[$fieldnya]
                      </option>
                      ";
                    }
                    echo"
                  </select>
                  ";
                }else if($dfilter_m['ket']=='multi'){//sama tampilan beda query
                  if(isset($_POST["$dfilter_m[name]$dfilter[name]"])){
                    if($dfilter_m['kategori']=='dokacuan'){
                      $wp=$_POST["$dfilter_m[name]$dfilter[name]"];
                      if($dan2==0){
                        $dan=1;
                        $dan2=1;

                        $query.="$ope (detaildokacuan.nodokacuan in (SELECT DISTINCT $dfilter_m[ref_table].nodokacuan FROM $dfilter_m[ref_table] WHERE nobast='' and ($dfilter_m[ref_table].$dfilter_m[ref_field] like '%$wp%')))";
                      }else{
                        $query=substr($query,0,-3)." or $dfilter_m[ref_table].$dfilter_m[ref_field] like '%$wp%')))";
                      }
                    }else{
                      $wp=$_POST["$dfilter_m[name]$dfilter[name]"];
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
                    <input type='checkbox' $ck name='$dfilter_m[name]$dfilter[name]' value='$dfilter[display]'> $dfilter[display]<br>
                  </label>
                  "; 
                }else if($dfilter_m['ket']=='tahun'){//beda tampilan beda query
                  if(isset($_POST["$dfilter_m[name]$dfilter[name]"])&&$_POST["$dfilter_m[name]$dfilter[name]"]!=''&&(isset($_POST["$dfilter_m[name]$dfilter[name]2"])&&$_POST["$dfilter_m[name]$dfilter[name]2"]!='')){
                    if($dan2==0){
                      $dan=1;
                      $dan2=1;
                      $ye1=$_POST["$dfilter_m[name]$dfilter[name]"];
                      $ye2=$_POST["$dfilter_m[name]$dfilter[name]2"];
                      $query.=" $ope (year(STR_TO_DATE($dfilter[ref_table].$dfilter[ref_field], '%d/%m/%Y')) between '$ye1' and '$ye2')";
                    }else{
                      $query=substr($query,0,-1)." or year(STR_TO_DATE($dfilter[ref_table].$dfilter[ref_field], '%d/%m/%Y')) between '$ye1' and '$ye2')";
                    }
                    $ck="checked";
                  }else{
                    $ck='';
                  }
                  echo "$dfilter[display]<br/><select name=$dfilter_m[name]$dfilter[name]>";
                  if(isset($_POST["$dfilter_m[name]$dfilter[name]"])&&$_POST["$dfilter_m[name]$dfilter[name]"]!=''){
                    $ye=$_POST["$dfilter_m[name]$dfilter[name]"];
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
                  echo"</select> sampai dengan <select name=$dfilter_m[name]$dfilter[name]2>";
                  if(isset($_POST["$dfilter_m[name]$dfilter[name]2"])&&$_POST["$dfilter_m[name]$dfilter[name]2"]!=''){
                    $ye=$_POST["$dfilter_m[name]$dfilter[name]2"];
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
                  if(isset($_POST["$dfilter_m[name]$dfilter[name]"])){
                    $wp=$_POST["$dfilter_m[name]$dfilter[name]"];
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
                    <input type='checkbox' $ck name='$dfilter_m[name]$dfilter[name]' value='$dfilter[display]'> $dfilter[display]<br>
                  </label>
                  "; 
                }
              }
            }
            echo"
            <h4><input type=submit name=submit2 value=Cari style='width:100%;'></h4>
            
          </div>
          ";
          ?>

  <div id='main' class='main'>

    <?php

    $query.=$order;
    echo $query."<--";
    ?>

    <table class="list table-striped table-hover table-condensed" cellpadding="5" cellspacing="5" style="overflow: scroll;">

      <?php
      if(isset($_POST['kategori'])&&$_POST['kategori']=='dokacuan'){
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
            <td style='background-color: #89C4F4;' class='center'>Action</td>
          </tr>
        </thead>
        ";
      }
      $no=1;
      $qs=mysql_query($query);
      while ($data=mysql_fetch_array($qs)) {

        if(isset($_POST['kategori'])&&$_POST['kategori']=='dokacuan'){
          echo "
          <tbody>
            <tr>
              <td style='background-color: #C5EFF7' class='center'>$no</td>
              <td  style='background-color: #C5EFF7' class='left'><a href='bastbysippt.php?id=$data[nodokacuan]'>$data[nodokacuan]</a></td>
              <td  style='background-color: #C5EFF7' class='center'>$data[tgldokacuan]</td>
              <td  style='background-color: #C5EFF7' class='left'>$data[haldokacuan]</td>
              <td  style='background-color: #C5EFF7' class='center'>$data[pemegangdokacuan]</td>


              <td  style='background-color: #C5EFF7' class='left'>$data[ketdokacuan]</td>
              <td  style='background-color: #C5EFF7' class='center'>$data[jenisdokumen]</td>

            </tr>
          </tbody>
          ";
          $number=0;
          $query2=mysql_query("select * from peruntukan where nobast='' and nodokacuan='$data[nodokacuan]'");
          while ($data2=mysql_fetch_array($query2)) {
            $number++;
            echo "
            <tbody>
              <tr>
                <td class='right'>$number</td>
                <td  style='background-color: #E4F1FE' class='left' colspan='2'>Jenis: $data2[jenisfasos]</td>
                <td  style='background-color: #E4F1FE' class='left' colspan='2'>Jenis: $data2[deskripsi]</td>
                <td  style='background-color: #E4F1FE' class='left' colspan='2'>Jenis: $data2[luas]</td>
              </tr>
            </tbody>
            ";
          }
        }else{
          echo "
          <tbody>
            <tr>
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
          </tbody>
          ";
          $query2=mysql_query("select dataaset.idaset,dataaset.wilayah,dataaset.kecamatan,dataaset.kelurahan,detaildokacuan.tgldokacuan from bast inner join dataaset on bast.nobast=dataaset.nobastaset  inner join detaildokacuan on bast.nodokacuan=detaildokacuan.nodokacuan where bast.nobast='$data[nobast]'");
          while ($data2=mysql_fetch_array($query2)) {      
            echo "
            <tbody>
              <tr>
                <td></td>
                <td  style='background-color: #E4F1FE' class='left' colspan='4'>Wilayah: $data2[wilayah], $data2[kecamatan], $data2[kelurahan]</td>
                <td  style='background-color: #E4F1FE' class='left' colspan='4'>Tgl. Dokacuan: $data2[tgldokacuan]</td>
              </tr>
            </tbody>
            ";
            $query3=mysql_query("select peruntukan.jenisfasos,peruntukan.statussertifikat,peruntukan.statuspenggunaan,peruntukan.statusplang,peruntukan.sensusfasos from dataaset inner join peruntukan on dataaset.idaset=peruntukan.idaset where dataaset.idaset='$data2[idaset]'");
            $nomor=0;
            while ($data3=mysql_fetch_array($query3)) {
              $nomor++;
              echo "
              <tbody>
                <tr>
                  <td class='right'>$nomor</td>
                  <td  style='background-color: #ECECEC' class='left'>$data3[statussertifikat]</td>
                  <td  style='background-color: #ECECEC' class='left'>$data3[jenisfasos]</td>
                  <td  style='background-color: #ECECEC' class='center' colspan='2'>Status Penggunaan: $data3[statuspenggunaan]</td>
                  <td  style='background-color: #ECECEC' class='left' colspan='2'>Plang: $data3[statusplang]</td>
                  <td  style='background-color: #ECECEC' class='center' colspan='2'>$data3[sensusfasos]</td>
                </tr>
              </tbody>
              ";
            }
          }
        }
        $no++;
      }
      echo"
    </table>
  </div>
  ";
}
// }
?>
</div>
<!--<div id="filter" class="col-md-6 text-center alert alert-info">Kriteria Pencarian</div> -->


</form>


<!-- <div> <p style="color:white">.</p><hr>
          <table class="list table-striped table-hover table-condensed" cellpadding="5" cellspacing="5" style="overflow: scroll;">

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
// if(isset($_REQUEST['submit2'])) {
// //---------------------------------------------------------------------------------------------------------------
// //---------------------------------------------------------------------------------------------------------------
//   include "koneksi.php";
  
//   $XX = "<br><br><h2> <center> No Record Found, Search Again Please </center> </h2>"; 
//   // $selectQuery="select * from bast inner join detaildokacuan on bast.nodokacuan=detaildokacuan.nodokacuan inner join dokumenacuan on detaildokacuan.idkategori=dokumenacuan.idkategori INNER JOIN dataaset on bast.nobast=dataaset.nobastaset where (bast.keterangan like '%gubernur%' or bast.keterangan like '%walikota%' or dataaset.wilayah like '%pusat%') and (year(STR_TO_DATE(detaildokacuan.tgldokacuan, '%d/%m/%Y')) between '2003' and '2004') and (bast.nobast in (select DISTINCT akun.nobast from akun where kategoriaset like '%A%'))";
//   echo"<font style='color:red'>$selectQuery-select</font>";
//   $query = mysql_query($selectQuery);
// }else{
// $query = mysql_query("select bast.nobast,bast.tglbast,bast.pengembangbast,dokumenacuan.jenisdokumen,detaildokacuan.nodokacuan,detaildokacuan.pemegangdokacuan,bast.keterangan from bast inner join detaildokacuan on bast.nodokacuan=detaildokacuan.nodokacuan inner join dokumenacuan on detaildokacuan.idkategori=dokumenacuan.idkategori order by nobast");
// }
//   $no = 1;
//   $chck=1;
  
//   // echo $selectQuery." <-query";
//   while ($data = mysql_fetch_array($query)) {
    
//     if($chck==1){
//   ?>
//             <tbody>
//       <tr>
//           <td class="center"><?php echo $no; ?></td>
//           <td class="left"><?php echo $data['nobast']; ?></td>
//           <td class="center"><?php echo $data['tglbast']; ?></td>
//           <td class="left"><?php echo $data['pengembangbast']; ?></td>
//     <td class="center"><?php echo $data['jenisdokumen']; ?></td>
//     <td class="left"><a href="bastbysippt.php?id=<?php echo $data['nodokacuan']; ?>"><?php echo $data['nodokacuan']; ?></a></td>
//     <td class="left"><?php echo $data['pemegangdokacuan']; ?></td>
//     <td class="left"><?php echo $data['keterangan']; ?></td>
//     <td class="center"><a target="_blank" href="viewdetailbast.php?id=<?php echo $data['nobast']; ?>"><img alt=" " src="view/image/viewdetail.gif" border=0></a></td>

    

//   </tr>
//               </tbody>
//   <?php
//     $no++;
//     }
//   }
//   $no-=1;
//   if(isset($_REQUEST['submit2']))echo "<script type='text/javascript'>alert('Ditemukan $no data yang sesuai, $filter');</script>";
  ?>


          </table>
</div>
-->
</div>
</div>
