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
<script type="text/javascript" src="view/javascript/jquery/tab.js"></script>
<script type="text/javascript" src="view/javascript/jquery/menu/jquery.menu.js"></script>

<script type="text/javascript" src="view/javascript/jquery/ui/external/jquery.bgiframe-2.1.2.js"></script>
<script src="js/jquery.price_format.1.6.js" type="text/javascript"></script>

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

    <div id="menu">
    <ul class="left" style="display: none;">
      <li id="dashboard"><a href="#" class="top">Dashboard</a></li>
      <li id="catalog"><a class="top">Master Data</a>
        <ul>
          <li><a href="dokacuan.php">Dokumen Acuan BAST</a></li>
          <li><a href="#">Data Pengembang</a></li>
	  <li><a href="kategoriaset.php">Master Kategori Aset</a></li>
	  <li><a href="#">Master Satuan Ukur (int.)</a></li>
          <li><a class="parent">Atribut Alamat</a>
            <ul>
              <li><a href="#">Data Wilayah</a></li>
              <li><a href="kecamatan.php">Data Kecamatan</a></li>
	      <li><a href="kelurahan.php">Data Kelurahan</a></li>
            </ul>
          </li>

        </ul>
      </li>
      </li>


      <li id="reports"><a class="top">Dokumen Acuan</a>
        <ul>
          <li><a class="parent">SIPPT</a>
            <ul>
              <li><a href="entrysippt.php">Entry SIPPT</a></li>
              <li><a href="#">Entry Kewajiban SIPPT</a></li>
              <li><a href="sipptvsbast.php">Data SIPPT vs BAST</a></li>

            </ul>
          </li>
          <li><a class="parent">Non SIPPT</a>
            <ul>
              <li><a href="entrynonsippt.php">Entry Non SIPPT</a></li>
              <li><a href="#">Entry Kewajiban Non-SIPPT</a></li>
		<li><a href="sipptwilayah.php">SIPPT PerWilayah</a></li>
              <li><a href="#">Data Non SIPPT</a></li>
            </ul>
          </li>
          <li><a href="#">Semua Dokumen Acuan</a>
          </li>          
        </ul>
      </li>
 



      <li id="bast"><a class="top">BAST</a>
        <ul>
          <li><a href="entrybast.php">Entry BAST</a></li> 
	  <li><a href="#">Entry Nilai Kewajiban</a></li> 
          <li><a href="bastgubernur.php">BAST Gubernur</a></li> 
	  <li><a href="bastnongubernur.php">BAST Non-Gubernur</a></li>
	  <li><a href="pdfbastnonnumber.php">BAST Non-Number</a></li> 
	  <li><a href="bastwilayah.php">BAST Per-Wilayah</a></li>
          <li><a href="laporanperkecamatan.php">BAST Per-Kecamatan</a></li> 
	  <li><a href="pmnonirisanrekon.php">BAST Non Irisan Rekon</a></li>
                   
        </ul>
      </li>


      <li id="reports"><a class="top">Laporan</a>
        <ul>
          <li><a class="parent">Rekapitulasi BAST</a>
            <ul>
              <li><a target="_blank" href="rekapjaksel.php">Rekap Jakarta Selatan</a></li>
              <li><a target="_blank" href="rekapjakut.php">Rekap Jakarta Utara</a></li>
              <li><a target="_blank" href="rekapjakbar.php">Rekap Jakarta Barat</a></li>
              <li><a target="_blank" href="rekapjaktim.php">Rekap Jakarta Timur</a></li>
              <li><a target="_blank" href="rekapjakpus.php">Rekap Jakarta Pusat</a></li>
              <li><a target="_blank" href="rekapseribu.php">Rekap Kepulauan Seribu</a></li>

            </ul>

          <li><a class="parent">Data Detail BAST</a>
            <ul>
              <li><a target="_blank" href="detailjaksel.php">Detail Jakarta Selatan</a></li>
              <li><a target="_blank" href="detailjakut.php">Detail Jakarta Utara</a></li>
              <li><a target="_blank" href="detailjakbar.php">Detail Jakarta Barat</a></li>
              <li><a target="_blank" href="detailjaktim.php">Detail Jakarta Timur</a></li>
              <li><a target="_blank" href="detailjakpus.php">Detail Jakarta Pusat</a></li>
              <li><a target="_blank" href="detailseribu.php">Detail Kepulauan Seribu</a></li>

            </ul>
          </li>

          <li><a class="parent">Progress Rekonsiliasi</a>
            <ul>
              <li><a target="_blank" href="pdfsemuabast.php">Data Seluruh BAST</a></li>
              <li><a target="_blank" href="pdf163.php">Data Rekon Kel.163</a></li>
              <li><a target="_blank" href="pdf54.php">Data Rekon Kel.54</a></li>
              <li><a target="_blank" href="pdf129.php">Data Rekon Kel.129</a></li>
              <li><a target="_blank" href="pdf101.php">Data Rekon Kel.101</a></li>
	      <li><a target="_blank" href="pdf58.php">Data Lokasi 58</a></li>
	      <li><a target="_blank" href="pdfdtr.php">Semua DTR</a></li>
	      <li><a target="_blank" href="pdfdtraja.php">DTR Tanpa Irisan</a></li>
	      <li><a target="_blank" href="bastirisanrekon.php">Data irisan Rekon</a></li>
	      <li><a target="_blank" href="pdfbpk.php">Semua LK2010</a></li>
	      <li><a target="_blank" href="pdfbpkaja.php">LK2010 Tanpa Iris</a></li>
 
            </ul>
          </li>

          <li><a href="laporanperkecamatan.php">Laporan Perkecamatan</a>
          </li>

          <li><a class="parent">Laporan SIPPT</a>
            <ul>
              <li><a target="_blank" href="pdfsippt.php">Data SIPPT</a></li>
              <li><a target="_blank" href="pdfnonsippt.php">Data Non SIPPT</a></li>
		<li><a target="_blank" href="pdfhitung.php">Aril Mop</a></li>
              <li><a href="#">Data Kewajiban</a></li>
            </ul>
          </li>
          <li><a href="#">SIPPT vs BAST</a>
          </li>        

          </li>
          <li><a href="laporanirisan.php">Data Irisan</a>
          </li>   
        </ul>
      </li>




      <li id="accounting"><a class="top">Accounting</a>
        <ul>
          <li><a href="entrynilaibast.php">Entry Nilai BAST</a></li>
	  <li><a href="akunlaporansippt.php">Lap. Nilai SIPPT</a></li>
	  <li><a href="akunlaporannonsippt.php">Lap. Nilai Non-SIPPT</a></li>
          
	  <li><a class="parent">Khusus BPKP</a>
	    <ul>
              <li><a href="entrynilaibastbpk.php">Entry Penilaian</a></li>
              <li><a href="akunlaporanbpk90.php">Lap.Nilai Fisik Nol</a></li>
              <li><a href="akunlaporanbpkrangkap.php">Lap.Nilai Double</a></li>
              <li><a href="akunlaporanbpksippt.php">Lap.Nilai SIPPT</a></li>
              <li><a href="akunlaporanbpknonsippt.php">Lap.Nilai Non SIPPT</a></li>
              <li><a href="akunlaporanbpksisa27.php">Lap.Nilai Sisa 27</a></li>
 		<li><a href="akunlaporanbpkpresume.php">Resume Total</a></li>
		
            </ul>




	 </li>

        </ul>
      </li>


      <li id="accounting"><a class="top">Final Accounting</a>
        <ul>

	  <li><a class="parent">Nilai Kombinasi</a>
	<ul>
	<li><a class="parent">Resume LKPD </a>
		<ul>
              <li><a href="akunlaporanlkpdresumemix129.php">Res.LKPD 129</a></li>
              <li><a href="akunlaporanlkpdresumemix54.php">Res.LKPD 54</a></li>
              <li><a href="akunlaporanlkpdresumemix163.php">Res.LKPD 163</a></li>
              <li><a href="akunlaporanlkpdresumemix101.php">Res.LKPD 101</a></li>
              <li><a href="akunlaporanlkpdresumemix2009.php">Res.LKPD 2009</a></li>
              <li><a href="akunlaporanlkpdresumemix2010.php">Res.LKPD 2010</a></li>
		<li><a href="akunlaporanlkpdresumemix2011.php">Res.Mutasi 2011</a></li>
		<li><a href="akunlaporanlkpdresumemixtambah.php">Res.140 Penambah</a></li>
	        <li><a href="akunlaporanlkpdresumemixexcom.php">Res.Excom</a></li>
	      <li><a href="akunlaporanlkpdresumemix.php">Resume Total</a></li>
		</ul>

	</li>
	<li><a href="akunlaporanmutasi.php">Resume Mutasi 2011</a></li>
	<li><a href="akunlaporantambahmix.php">Resume BAST Penambah</a></li>
	<li><a href="excomlaporanakunmix.php">Resume BAST Excom </a></li>
	</ul>
	 </li>


 	<li><a class="parent">Nilai Perolehan & Pergub</a>
	<ul>
	  <li><a class="parent">LKPD2010</a>
	    <ul>
              <li><a href="akunlaporanlkpd129.php">Lap.LKPD 129</a></li>
              <li><a href="akunlaporanlkpd54.php">Lap.LKPD 54</a></li>
              <li><a href="akunlaporanlkpd163.php">Lap.LKPD 163</a></li>
              <li><a href="akunlaporanlkpd101.php">Lap.LKPD 101</a></li>
              <li><a href="akunlaporanlkpd2009.php">Lap.LKPD 2009</a></li>
              <li><a href="akunlaporanlkpd2010.php">Lap.LKPD 2010</a></li>
	      <li><a href="akunlaporanlkpdresume.php">Resume Total</a></li>
	     </ul>
	 </li>

	<li><a href="akunlaporanmutasi.php">Lap. Nilai Mut. 2011</a></li>
	<li><a href="akunlaporantambah.php">Lap. Nilai Penambah</a></li>
	<li><a href="excomlaporanakun.php">Lap. Nilai Excom</a></li>
	</ul>
	 </li>

	<li><a href="akunlaporanperkib.php">Lap.Semua BAST Per-KIB</a></li>

	  <li><a class="parent">Journal Koreksi</a>
	<ul>
	<li><a href="journalresume.php">Resume Journal</a></li>
	<li><a class="parent">Kelompok 129 </a>
	     <ul>	
              <li><a href="excel129journalpusat.php">Jak-Pusat</a></li>
	      <li><a href="excel129journalutara.php">Jak-Utara</a></li>
              <li><a href="excel129journalbarat.php">Jak-Barat</a></li>
              <li><a href="excel129journalselatan.php">Jak-Selatan</a></li>
              <li><a href="excel129journaltimur.php">Jak-Timur</a></li>
              <li><a href="excel129journalseribu.php">Kep-Seribu</a></li>
	      <li><a href="excel129journal.php">Seluruh Kel 129</a></li>
	     </ul>

	</li>
	<li><a class="parent">Kelompok 54</a>
	     <ul>	
              <li><a href="excel54journalpusat.php">Jak-Pusat</a></li>
              <li><a href="excel54journalutara.php">Jak-Utara</a></li>
              <li><a href="excel54journalbarat.php">Jak-Barat</a></li>
              <li><a href="excel54journalselatan.php">Jak-Selatan</a></li>
              <li><a href="excel54journaltimur.php">Jak-Timur</a></li>
              <li><a href="excel54journalseribu.php">Kep-Seribu</a></li>
	      <li><a href="excel54journal.php">Seluruh Kel 54</a></li>
	     </ul>
	</li>
	<li><a class="parent">Kelompok 163</a>

	     <ul>	
              <li><a href="excel163journalpusat.php">Jak-Pusat</a></li>
              <li><a href="excel163journalutara.php">Jak-Utara</a></li>
              <li><a href="excel163journalbarat.php">Jak-Barat</a></li>
              <li><a href="excel163journalselatan.php">Jak-Selatan</a></li>
              <li><a href="excel163journaltimur.php">Jak-Timur</a></li>
              <li><a href="excel163journalseribu.php">Kep-Seribu</a></li>
	      <li><a href="excel163journal.php">Seluruh Kel 163</a></li>
	     </ul>
	</li>
	<li><a class="parent">Kelompok 101</a>
	     <ul>	
              <li><a href="excel101journalpusat.php">Jak-Pusat</a></li>
              <li><a href="excel101journalutara.php">Jak-Utara</a></li>
              <li><a href="excel101journalbarat.php">Jak-Barat</a></li>
              <li><a href="excel101journalselatan.php">Jak-Selatan</a></li>
              <li><a href="excel101journaltimur.php">Jak-Timur</a></li>
              <li><a href="excel101journalseribu.php">Kep-Seribu</a></li>
	      <li><a href="excel101journal.php">Seluruh Kel 101</a></li>
	     </ul>
	</li>
	<li><a class="parent">Kelompok 2009 </a>
	     <ul>	
              <li><a href="excel2009journalpusat.php">Jak-Pusat</a></li>
              <li><a href="excel2009journalutara.php">Jak-Utara</a></li>
              <li><a href="excel2009journalbarat.php">Jak-Barat</a></li>
              <li><a href="excel2009journalselatan.php">Jak-Selatan</a></li>
              <li><a href="excel2009journaltimur.php">Jak-Timur</a></li>
              <li><a href="excel2009journalseribu.php">Kep-Seribu</a></li>
	      <li><a href="excel2009journal.php">Seluruh Kel 2009</a></li>
	     </ul>
	</li>

	<li><a class="parent">Kelompok 2010</a>
	     <ul>	
              <li><a href="excel2010journalpusat.php">Jak-Pusat</a></li>
              <li><a href="excel2010journalutara.php">Jak-Utara</a></li>
              <li><a href="excel2010journalbarat.php">Jak-Barat</a></li>
              <li><a href="excel2010journalselatan.php">Jak-Selatan</a></li>
              <li><a href="excel2010journaltimur.php">Jak-Timur</a></li>
              <li><a href="excel2010journalseribu.php">Kep-Seribu</a></li>
	      <li><a href="excel2010journal.php">Seluruh Kel 2010</a></li>
	     </ul>
	</li>

	<li><a class="parent">Kelompok mutasi</a>
	     <ul>	
              <li><a href="excelmutasijournalpusat.php">Jak-Pusat</a></li>
              <li><a href="excelmutasijournalutara.php">Jak-Utara</a></li>
              <li><a href="excelmutasijournalbarat.php">Jak-Barat</a></li>
              <li><a href="excelmutasijournalselatan.php">Jak-Selatan</a></li>
              <li><a href="excelmutasijournaltimur.php">Jak-Timur</a></li>
              <li><a href="excelmutasijournalseribu.php">Kep-Seribu</a></li>
	      <li><a href="excelmutasijournal.php">Seluruh Kel mutasi</a></li>
	     </ul>
	</li>
	<li><a class="parent">Kelompok 140 Penambah</a>
	     <ul>	
              <li><a href="exceltambahjournalpusat.php">Jak-Pusat</a></li>
              <li><a href="exceltambahjournalutara.php">Jak-Utara</a></li>
              <li><a href="exceltambahjournalbarat.php">Jak-Barat</a></li>
              <li><a href="exceltambahjournalselatan.php">Jak-Selatan</a></li>
              <li><a href="exceltambahjournaltimur.php">Jak-Timur</a></li>
              <li><a href="exceltambahjournalseribu.php">Kep-Seribu</a></li>
	      <li><a href="exceltambahjournal.php">Seluruh Kel 140 Penambah</a></li>
	     </ul>
	</li>
	<li><a href="excelexcomjournal.php">Kelompok Excom</a></li>

	<li><a href="excelkompilasi2.php">All Journal Koreksi</a>
	     <ul>	
              <li><a href="excelkompilasi2SE.php">Salah Entry</a></li>
              <li><a href="excelkompilasi2BE.php">Belum Entry</a></li>
              <li><a href="excelkompilasi2OG.php">Perolehan ke Pergub</a></li>
              <li><a href="excelkompilasi2GO.php">Pergub ke Perolehan</a></li>
              <li><a href="excelkompilasi2LL.php">Lain-lain</a></li>
	     </ul>


	</li>

	<li><a class="parent">Journal Penghapusan</a>
	     <ul>	
              <li><a href="excelkompilasi3129.php">Kelompok 129</a></li>
              <li><a href="excelkompilasi354.php">Kelompok 54</a></li>
              <li><a href="excelkompilasi3163.php">kelompok 163</a></li>
              <li><a href="excelkompilasi3101.php">Kelompok 101</a></li>
              <li><a href="excelkompilasi32009.php">Kelompok 2009</a></li>
              <li><a href="excelkompilasi32010.php">Kelompok 2010</a></li>
	      <li><a href="excelkompilasi3mutasi.php">Kelompok Mutasi</a></li>
	      <li><a href="excelkompilasi3tambah.php">Kelompok Penambah</a></li>
	      <li><a href="excelkompilasi3excom.php">Kelompok Excom</a></li>
	      <li><a href="excelkompilasi3.php">Seluruh Data</a></li>

	     </ul>

	</li>
	
	</ul>
	 </li>
        </ul>
      </li>


      <li id="reports"><a class="top">Rekonsiliasi</a>
        <ul>
          <li><a href="resumelk2010.php">Resume LK2010</a></li>
    	  <li><a href="resumemutasi.php">Resume Mutasi</a></li>
	  <li><a href="resumepm.php">Resume PuloMas</a></li>
          <li><a href="resumebp3w.php">Resume BP3W</a></li>
    	  <li><a href="resumedtr.php">Resume DTR</a></li>
	  <li><a href="resumebk.php">Resume Balaikota</a></li>
	  <li><a href="resumesipptperiodik.php">Resume Periodik</a></li>
	  <li><a target="_blank" href="pdfrekon129.php">Seluruh Rekon 129</a>
	  <ul>
              <li><a target="_blank" href="excel129gub.php">Kel.129 Gubernur</a></li>
              <li><a target="_blank" href="excel129wali.php">Kel.129 Walikota </a></li>
              <li><a target="_blank" href="excel129biro.php">Kel.129 Biro Lengkap</a></li>
	      <li><a target="_blank" href="excel129wilda.php">Kel.129 Sekwilda</a></li>	
            </ul>
	  </li>
	  <li><a target="_blank" href="pdfrekon54.php">Seluruh Rekon 54</a>

	  <ul>
              <li><a target="_blank" href="excel54gub.php">Kel.54 Gubernur</a></li>
              <li><a target="_blank" href="excel54wali.php">Kel.54 Walikota </a></li>
              <li><a target="_blank" href="excel54biro.php">Kel.54 Biro Lengkap</a></li>
	      <li><a target="_blank" href="excel54wilda.php">Kel.54 Sekwilda</a></li>	
            </ul>
	  </li>
	  <li><a target="_blank" href="pdfrekon163.php">Seluruh Rekon 163</a>

	  <ul>
              <li><a target="_blank" href="excel163gub.php">Kel.163 Gubernur</a></li>
              <li><a target="_blank" href="excel163wali.php">Kel.163 Walikota </a></li>
              <li><a target="_blank" href="excel163biro.php">Kel.163 Biro Lengkap</a></li>
	      <li><a target="_blank" href="excel163wilda.php">Kel.163 Sekwilda</a></li>	
            </ul>
	  </li>
	  <li><a target="_blank" href="pdfrekon101.php">Seluruh Rekon 101</a>
	  <ul>
              <li><a target="_blank" href="excel101gub.php">Kel.101 Gubernur</a></li>
              <li><a target="_blank" href="excel101wali.php">Kel.101 Walikota </a></li>
              <li><a target="_blank" href="excel101biro.php">Kel.101 Biro Lengkap</a></li>
	      <li><a target="_blank" href="excel101wilda.php">Kel.101 Sekwilda</a></li>	
            </ul>
	  </li>


	  <li><a target="_blank" href="pdfrekon2009.php">Seluruh Rekon 2009</a>
	  <ul>
              <li><a target="_blank" href="excel2009gub.php">Kel.101 Gubernur</a></li>
              <li><a target="_blank" href="excel2009wali.php">Kel.101 Walikota </a></li>
              <li><a target="_blank" href="excel2009biro.php">Kel.101 Biro Lengkap</a></li>
	      <li><a target="_blank" href="excel2009wilda.php">Kel.101 Sekwilda</a></li>	
            </ul>
	</li>
	  <li><a target="_blank" href="pdfrekon2010.php">Seluruh Rekon 2010</a>
	  <ul>
              <li><a target="_blank" href="excel2010gub.php">Kel.101 Gubernur</a></li>
              <li><a target="_blank" href="excel2010wali.php">Kel.101 Walikota </a></li>
              <li><a target="_blank" href="excel2010biro.php">Kel.101 Biro Lengkap</a></li>
	      <li><a target="_blank" href="excel2010wilda.php">Kel.101 Sekwilda</a></li>	
            </ul>

	</li>
          <li><a target="_blank" href="pdfrekon2011.php">Seluruh Mutasi 2011</a>
	  
	  <ul>
              <li><a target="_blank" href="excel2011gub.php">Kel.101 Gubernur</a></li>
              <li><a target="_blank" href="excel2011wali.php">Kel.101 Walikota </a></li>
              <li><a target="_blank" href="excel2011biro.php">Kel.101 Biro Lengkap</a></li>
	      <li><a target="_blank" href="excel2011wilda.php">Kel.101 Sekwilda</a></li>	
            </ul>
	  </li>
	 <li><a target="_blank" href="pdfrekontambah.php">Seluruh Data Penambah</a>
	<ul>
              <li><a target="_blank" href="exceltambahgub.php">Penambah Gubernur</a></li>
              <li><a target="_blank" href="exceltambahwali.php">Penambah Walikota </a></li>
              <li><a target="_blank" href="exceltambahbiro.php">Penambah Biro Lengkap</a></li>
	      <li><a target="_blank" href="exceltambahwilda.php">Penambah Sekwilda</a></li>	
            </ul>

	</li>




	<li><a target="_blank" href="pdfrekonlkpd.php">Seluruh LKPD</a></li>
        </ul>
      </li>


      <li id="reports"><a class="top">SKPD</a>
        <ul>
          <li><a href="markingskpd.php">Marking Data SKPD</a></li>
    	  <li><a href="ffskpd.php">FasosFasum vs SKPD</a></li>

        </ul>
      </li>

     <li id="reports"><a class="top">BOT/BTO</a>
        <ul>
          <li><a href="markingbot.php">Marking Data BOT/BTO</a></li>
    	  <li><a href="ffbot.php">BOT/BTO vs SKPD</a></li>

        </ul>
      </li>
      <li id="reports"><a class="top">GIS</a>
        <ul>
          <li><a href="indexGis.php">Input Marking Area</a></li>
    	  <li><a href="indexnografik.php">Pencarian Lokasi</a></li>
	  <li><a href="excelfisiknol.php">Indexing</a></li>
	  <li><a href="resumeperiodik1.php">Halaman Percobaan</a></li>
	  <li><a href="excelkoreksi.php">Koreksi Kombinasi</a></li>
        </ul>
      </li>

      <li id="reports"><a class="top">Extra Comtable</a>
        <ul>
	  <li><a href="excomdashboard.php">Dashboard</a></li>
      	  <li><a href="excomentrysippt.php">Entry SIPPT</a></li>
	  <li><a href="excomentrybast.php">Entry BAST</a></li>
	  <li><a href="excomentryakun.php">Entry Akun</a></li>
	  <li><a href="excomlaporanakun.php">Laporan Akun</a></li>
	  <li><a href="excomlaporanakunmix.php">Laporan Akun Kombinasi</a></li>
        </ul>
      </li>

    </ul>
    <ul class="right">
      <li id="store"><a onClick="window.open('http://demo.dineshjay.com/');" class="top">Store Front</a>
        <ul>
                  </ul>

      </li>
      <li id="store"><a class="top" href="logout.php">Logout</a></li>
    </ul>




    <script type="text/javascript"><!--
$(document).ready(function() {
	$('#menu > ul').superfish({
		hoverClass	 : 'sfHover',
		pathClass	 : 'overideThisToUse',
		delay		 : 0,
		animation	 : {height: 'show'},
		speed		 : 'normal',
		autoArrows   : false,
		dropShadows  : false, 
		disableHI	 : false, /* set to true to disable hoverIntent detection */
		onInit		 : function(){},
		onBeforeShow : function(){},
		onShow		 : function(){},
		onHide		 : function(){}
	});
	
	$('#menu > ul').css('display', 'block');
});
 
function getURLVar(urlVarName) {
	var urlHalves = String(document.location).toLowerCase().split('?');
	var urlVarValue = '';
	
	if (urlHalves[1]) {
		var urlVars = urlHalves[1].split('&');

		for (var i = 0; i <= (urlVars.length); i++) {
			if (urlVars[i]) {
				var urlVarPair = urlVars[i].split('=');
				
				if (urlVarPair[0] && urlVarPair[0] == urlVarName.toLowerCase()) {
					urlVarValue = urlVarPair[1];
				}
			}
		}
	}
	
	return urlVarValue;
} 

$(document).ready(function() {
	route = getURLVar('route');
	
	if (!route) {
		$('#dashboard').addClass('selected');
	} else {
		part = route.split('/');
		
		url = part[0];
		
		if (part[1]) {
			url += '/' + part[1];
		}
		
		$('a[href*=\'' + url + '\']').parents('li[id]').addClass('selected');
	}
});



//--></script>


 
  </div>
  </div>
<div id="content">
  <div class="breadcrumb">
        <a href="home.php">Home</a>

      </div>
              <div class="box">
    <div class="heading">
      <h1><img src="view/image/home.png" alt="" /> Dashboard</h1>
    </div>

    <div class="content">
      <div class="overview">
        <div class="dashboard-heading">Resume Data</div>

        <div class="dashboard-content">
   <?php
	include "koneksi.php";
	$hasil1= mysql_query("select * from bast");
	$totalrowbast = mysql_num_rows($hasil1);

	$hasilnonsippt= mysql_query("select idkategori from bast b inner join detaildokacuan d on b.nodokacuan = d.nodokacuan where idkategori !='1'");
	$totalrowbastnonsippt = mysql_num_rows($hasilnonsippt);	

	$hasilsippt= mysql_query("select idkategori from bast b inner join detaildokacuan d on b.nodokacuan = d.nodokacuan where idkategori ='1'");
	$totalrowbastsippt = mysql_num_rows($hasilsippt);	


	$hasil2= mysql_query("select * from peruntukan where jenissertifikat='HGB'");
	$totalrowHGB = mysql_num_rows($hasil2);

	
	$hasil3= mysql_query("select * from peruntukan where jenissertifikat='SHM'");
	$totalrowSHM = mysql_num_rows($hasil3);

	$hasil4= mysql_query("select * from peruntukan where jenissertifikat like '%DKI%'");
	$totalrowDKI = mysql_num_rows($hasil4);

	$hasil5= mysql_query("select * from peruntukan where sertifikasi='Non-Sertifikat'");
	$totalrowNonSertifikat = mysql_num_rows($hasil5);

	$hasil6= mysql_query("select * from peruntukan where sertifikasi='Sertifikat'");
	$totalrowSertifikat = mysql_num_rows($hasil6);


	$hasil7= mysql_query("select * from bast where keterangan like '%nur%' or keterangan like '%Gub%'");
	$totalrowgubernur = mysql_num_rows($hasil7);

	$hasil8= mysql_query("select * from bast where keterangan like '%Wali%' or keterangan like '%kota%'");
	$totalrowwalikota = mysql_num_rows($hasil8);

	$hasil9= mysql_query("select * from bast where keterangan like '%lengkap%' or keterangan like '%Biro%'");
	$totalrowbiro = mysql_num_rows($hasil9);

	$hasil10= mysql_query("select * from bast where keterangan like '%Sek%' or keterangan like '%wilda%'");
	$totalrowsekwilda = mysql_num_rows($hasil10);

	$r=mysql_query("select sum(luas) as tot from peruntukan where jenis='Tanah'");
	$b=mysql_fetch_array($r);
	
	$m=mysql_query("select sum(luas) as totnon from peruntukan where jenis='Non-Tanah'");
	$n=mysql_fetch_array($m);

	?>
          <table>
            <tr>
              <td>Total BAST:</td>
              <td><?php echo $totalrowbast; ?></td>
            </tr>

            <tr>
              <td>Total BAST  SIPPT:</td>
              <td><a href="bastsippt.php"><?php echo $totalrowbastsippt; ?></a></td>
            </tr>

            <tr>
              <td>Total BAST NON SIPPT:</td>
              <td><a href="bastnonsippt.php"><?php echo $totalrowbastnonsippt; ?></a></td>
            </tr>
            <tr>
              <td>Total BAST Gubernur:</td>
              <td><a href="bastgubernur.php"><?php echo $totalrowgubernur; ?></a></td>
            </tr>

            <tr>
              <td>Total BAST Walikota:</td>
              <td><a href="bastwalikota.php"><?php echo $totalrowwalikota; ?></a></td>
            </tr>
            <tr>

            <tr>
              <td>Total BAST Biro Perlengkapan:</td>
              <td><a href="bastbiro.php"><?php echo $totalrowbiro; ?></a></td>
            </tr>

            <tr>
              <td>Total BAST Sekwilda:</td>
              <td><a href="bastsekwilda.php"><?php echo $totalrowsekwilda; ?></a></td>
            </tr>

            <tr>

              <td>Total Luas Tanah:</td>

              	<td><?php print number_format($b['tot'],2); ?> m2</td>
            </tr>

            <tr>

              <td>Total HGB:</td>
              <td><a href="hgb.php"><?php echo $totalrowHGB; ?></a></td>
            </tr>
            <tr>
              <td>Total SHM:</td>
              <td><a href="shm.php"><?php echo $totalrowSHM; ?></a></td>
            </tr>

            <tr>
              <td>Total SHP:</td>
              <td><a href="shp.php"><?php echo $totalrowDKI; ?></a></td>
            </tr>
            <tr>

          </table>
        </div>
      </div>






      <div class="statistic">
        <div class="range">
        </div>

        <div class="dashboard-heading">Pie Chart Irisan Dokumen</div>
        <div class="dashboard-content">


<html>
<head>
<title>JSChart</title>

<script type="text/javascript" src="sources/jscharts.js"></script>
<!-- ----------------------------------------------------------------- -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="sources/bootstrap.min.css">
  <script src="sources/bootstrap.min.js"></script></script>
<style>
.advance-search{
  display: visible;
}
.advance-search-button{
    line-height: 12px;
    font-size: 8pt;
    font-family: tahoma;
    margin-top: 1px;
    margin-right: 2px;
    position: absolute;
    top: 0;
    right: 0;
}

    

</style>
<script>
$(document).ready(function(){
    var clck=0;
    $(".advance-search-button").click(function(){
     if(clck%2==0){
        $('.advance-search')fadeIn();
      }else{
        $('.advance-search')fadeOut();  
      }      
    });
});
</script>
<script>
$( "#advance-search-button" ).click(function() {
  $( "#advance-search" ).fadeToggle( "slow", "linear" );
});
$( "button:last" ).click(function() {
  $( "p:last" ).fadeToggle( "fast", function() {
    $( "#log" ).append( "<div>finished</div>" );
  });
});
</script>
<!-- ----------------------------------------------------------------- -->
</head>


<?php 
        
        //koneksi database
	include "koneksi.php";

        //query panggil data dtr

            $query = mysql_query("select * from lokasidokumen ");
            $record = mysql_fetch_array($query);
		
	$irisanpulomas= mysql_query("select * from lokasidokumen where dtr ='1' and pulomas='1'");
	$jmlirpm = mysql_num_rows($irisanpulomas);

	$irisan129= mysql_query("select * from lokasidokumen where dtr ='1' and rekon129='1' ");
	$jmlir129 = mysql_num_rows($irisan129);

	$irisan54= mysql_query("select * from lokasidokumen where dtr ='1' and rekon54='1' ");
	$jmlir54 = mysql_num_rows($irisan54);

	$irisan101= mysql_query("select * from lokasidokumen where dtr ='1' and rekon101='1'");
	$jmlir101 = mysql_num_rows($irisan101);

	$irisan163= mysql_query("select * from lokasidokumen where dtr ='1' and rekon163='1'");
	$jmlir163 = mysql_num_rows($irisan163);

	$irisan58= mysql_query("select * from lokasidokumen where dtr ='1' and lokasi58='1' ");
	$jmlir58 = mysql_num_rows($irisan58);

	$tanpairisan= mysql_query("select * from lokasidokumen where dtr ='1' && pulomas='0' && rekon129='0' && rekon54='0' && rekon101='0' && rekon163='0' && lokasi58='0'");
	$jmldtr = mysql_num_rows($tanpairisan);
	

?>

<body>

<div id="graph">Loading...</div>

<script type="text/javascript">
	
	var myChart = new JSChart('graph', 'pie');
	myChart.setDataArray([['irisan pulomas',<?php echo $jmlirpm; ?>],['irisan 129', <?php echo $jmlir129; ?> ],['irisan 54', <?php echo $jmlir54; ?> ],['irisan 101',<?php echo $jmlir101; ?> ],['irisan 163', <?php echo $jmlir163; ?> ],['irisan lok.58', <?php echo $jmlir58; ?> ],['Tanpa Irisan', <?php echo $jmldtr; ?> ]]);
	myChart.colorize(['#8B008B','#FFFF00','#0000FA','#F8CC00','#F89900','#00FF00','#FF0000']);
	myChart.setSize(500, 208);
	myChart.setTitle('Pie Chart Lokasi DTR');
	myChart.setTitleFontFamily('Arial');
	myChart.setTitleFontSize(11);
	myChart.setTitleColor('#0F0F0F');
	myChart.setPieRadius(90);
	myChart.setPieValuesColor('#800000');
	myChart.setPieValuesFontSize(10);
	myChart.setPiePosition(150, 100);
	myChart.setShowXValues(true);
	myChart.setLegend('#8B008B', 'irisan pulomas');
	myChart.setLegend('#FFFF00', 'irisan 129');
	myChart.setLegend('#0000FA', 'irisan 54');
	myChart.setLegend('#F8CC00', 'irisan 101');
	myChart.setLegend('#F89900', 'irisan 163');
	myChart.setLegend('#00FF00', 'irisan lok.58');
	myChart.setLegend('#FF0000', 'Tanpa Irisan');
	myChart.setLegendShow(true);
	myChart.setLegendFontFamily('Arial');
	myChart.setLegendFontSize(9);
	myChart.setLegendPosition(350, 60);
	myChart.setPieAngle(40);
	myChart.set3D(true);
	myChart.draw();
	
</script>



</body>
</html>

        </div>
      </div>
</div>

<div class="content">
  <div class="latest">
  <div class="dashboard-heading">Grafik BAST Wilayah</div>
  <div class="dashboard-content">



<html>
<head>

<script type="text/javascript" src="JS/jquery.fusioncharts.js"></script>

</head>
<body>
	<center>
	<table id="myHTMLTable" border="0" align="center">

<?php include "koneksi.php";
	$query = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Utara'");
while ( $data = mysql_fetch_array($query)) {

$hasil1= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."'");
	$totalrowbast = mysql_num_rows($hasil1);

$hasil2= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%nur%'");
	$totalrowgubernur = mysql_num_rows($hasil2);


	$hasil3= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%wali%'");
	$totalrowwalikota = mysql_num_rows($hasil3);

	$hasil4= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data['wilayah']."' && keterangan like '%lengkap%' ");
	$totalrowbiro = mysql_num_rows($hasil4);

};
include "koneksi.php";
	$query2 = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Selatan'");
while ( $data2 = mysql_fetch_array($query2)) {

$hasil12= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data2['wilayah']."'");
	$totalrowbast2 = mysql_num_rows($hasil12);

$hasil22= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data2['wilayah']."' && keterangan like '%nur%'");
	$totalrowgubernur2 = mysql_num_rows($hasil22);


	$hasil32= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data2['wilayah']."' && keterangan like '%wali%'");
	$totalrowwalikota2 = mysql_num_rows($hasil32);

	$hasil42= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data2['wilayah']."' && keterangan like '%lengkap%' ");
	$totalrowbiro2 = mysql_num_rows($hasil42);

}

include "koneksi.php";
	$query3 = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Pusat'");
while ( $data3 = mysql_fetch_array($query3)) {

$hasil13= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data3['wilayah']."'");
	$totalrowbast3 = mysql_num_rows($hasil13);

$hasil23= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data3['wilayah']."' && keterangan like '%nur%'");
	$totalrowgubernur3 = mysql_num_rows($hasil23);


	$hasil33= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data3['wilayah']."' && keterangan like '%wali%'");
	$totalrowwalikota3 = mysql_num_rows($hasil33);

	$hasil43= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data3['wilayah']."' && keterangan like '%lengkap%' ");
	$totalrowbiro3 = mysql_num_rows($hasil43);

};

include "koneksi.php";
	$query4 = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Barat'");
while ( $data4 = mysql_fetch_array($query4)) {

$hasil14= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data4['wilayah']."'");
	$totalrowbast4 = mysql_num_rows($hasil14);

$hasil24= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data4['wilayah']."' && keterangan like '%nur%'");
	$totalrowgubernur4 = mysql_num_rows($hasil24);


	$hasil34= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data4['wilayah']."' && keterangan like '%wali%'");
	$totalrowwalikota4 = mysql_num_rows($hasil34);

	$hasil44= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data4['wilayah']."' && keterangan like '%lengkap%' ");
	$totalrowbiro4 = mysql_num_rows($hasil44);

};

include "koneksi.php";
	$query5 = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah='Jakarta Timur'");
while ( $data5 = mysql_fetch_array($query5)) {

$hasil15= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data5['wilayah']."'");
	$totalrowbast5 = mysql_num_rows($hasil15);

$hasil25= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data5['wilayah']."' && keterangan like '%nur%'");
	$totalrowgubernur5 = mysql_num_rows($hasil25);


	$hasil35= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data5['wilayah']."' && keterangan like '%wali%'");
	$totalrowwalikota5 = mysql_num_rows($hasil35);

	$hasil45= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data5['wilayah']."' && keterangan like '%lengkap%' ");
	$totalrowbiro5 = mysql_num_rows($hasil45);

};
include "koneksi.php";
	$query6 = mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast where wilayah like '%seribu%'");
while ( $data6 = mysql_fetch_array($query6)) {

$hasil16= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data6['wilayah']."'");
	$totalrowbast6 = mysql_num_rows($hasil16);

$hasil26= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data6['wilayah']."' && keterangan like '%nur%'");
	$totalrowgubernur6 = mysql_num_rows($hasil26);


	$hasil36= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data6['wilayah']."' && keterangan like '%wali%'");
	$totalrowwalikota6 = mysql_num_rows($hasil36);

	$hasil46= mysql_query("select * from bast b inner join (select distinct nobastaset, wilayah from dataaset)a on a.nobastaset=b.nobast  where wilayah ='".$data6['wilayah']."' && keterangan like '%lengkap%' ");
	$totalrowbiro6 = mysql_num_rows($hasil46);

};
?>
	<tr style="display:none"> <th>Status</th> <th>Jakarta Utara</th><th>Jakarta Selatan</th><th>Jakarta Pusat</th><th>Jakarta Barat</th><th>Jakarta Timur</th><th>Kep.Seribu</th></tr>
	<tr style="display:none"> <td>Total BAST</td> <td><?php echo $totalrowbast; ?></td><td><?php echo $totalrowbast2; ?></td><td><?php echo $totalrowbast3; ?></td><td><?php echo $totalrowbast4; ?></td></td><td><?php echo $totalrowbast5; ?></td></td><td><?php echo $totalrowbast6; ?></td></tr> 
	 <tr style="display:none"><td>BAST Gubernur</td> <td><?php echo $totalrowgubernur; ?></td><td><?php echo $totalrowgubernur2; ?></td><td><?php echo $totalrowgubernur3; ?></td><td><?php echo $totalrowgubernur4; ?></td><td><?php echo $totalrowgubernur5; ?></td><td><?php echo $totalrowgubernur6; ?></td></tr>
	 <tr style="display:none"><td>BAST Walikota</td> <td><?php echo $totalrowwalikota; ?></td><td><?php echo $totalrowwalikota2; ?></td><td><?php echo $totalrowwalikota3; ?></td><td><?php echo $totalrowwalikota4; ?></td><td><?php echo $totalrowwalikota5; ?></td><td><?php echo $totalrowwalikota6; ?></td></tr>
        <tr style="display:none"> <td>BAST Biro</td> <td><?php echo $totalrowbiro; ?></td><td><?php echo $totalrowbiro2; ?></td><td><?php echo $totalrowbiro3; ?></td><td><?php echo $totalrowbiro4; ?></td><td><?php echo $totalrowbiro5; ?></td><td><?php echo $totalrowbiro6; ?></td></tr>

	</table>
	<script type="text/javascript">
	$('#myHTMLTable').convertToFusionCharts({
		swfPath: "Charts/",
		type: "MSColumn3D",
		data: "#myHTMLTable",
		dataFormat: "HTMLTable",
		width: "1100"
	});
	</script>
	</center>
</body>
</html>


	</div>
        </div>
      </div>


    <div class="content">
  <div class="latest">
  <div class="dashboard-heading">Data BAST</div>
  <div class="dashboard-content">
<form method="post" action="" name="form1" id="form1">
<div class="col-md-12"  >
<div class="col-md-6" >
  <div class="advance-search-button text-center btn btn-info">
    Advance Search
  </div>
   <b>Kata Pencarian  </b><br> <input type="text" name="term" />    <input type="submit" name="submit2" value="Cari"/><br/><br>
   <font size="1">)* Masukan Nomor Bast atau Nama Pengembang atau Jenis Dok. Acuan</font>
   
</div>
<!--<div id="filter" class="col-md-6 text-center alert alert-info">Kriteria Pencarian</div> -->
<div class="col-md-12 advance-search">
  <h4>Kriteria Pencarian</h4>

  <div id="schBox" class="col-md-12" style="border-radius:10px;padding-top:10px;">
    <?php
    if(isset($_REQUEST['submit2'])){
      $dcount=0;
      $term = $_POST['term']; 
      if($term==""){
        $selectQuery="select * from bast inner join detaildokacuan on bast.nodokacuan=detaildokacuan.nodokacuan inner join dokumenacuan on detaildokacuan.idkategori=dokumenacuan.idkategori INNER JOIN dataaset on bast.nobast=dataaset.nobastaset ";
      }else{
        $selectQuery="select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan c on d.idkategori=c.idkategori INNER JOIN dataaset da on b.nobast=da.nobastaset where nobast like '%$term%' or pengembangbast like '%$term%'  or jenisdokumen like '%$term%' or tglbast like  '%$term%' ";
      }
      
    }
      $s_filter_master=mysql_query("select * from ref_master");
      while($d_filter_master=mysql_fetch_array($s_filter_master)){
        $s_filter=mysql_query("select * from $d_filter_master[tabel]");
        if($d_filter_master['kategori']!='tahun'){ 
          echo"
            <div class='checkbox bs-callout bs-callout-danger' > 
                <i>$d_filter_master[nama]</i><br>
          ";
        }
        while ($d_filter=mysql_fetch_array($s_filter)) {
          $dname=$d_filter_master['name'].$d_filter['name'];
          if(isset($_REQUEST['submit2'])) {
            if(isset($_POST["$dname"])){
              if($dcount>0){
                $dor=" or";
              }else{
                $dor=" where ";
              }
              $dcount++;
              $ckd="checked";
              $ref_tf=$d_filter_master['ref_table'].".".$d_filter_master['ref_field'];
              $selectQuery.=" $dor $ref_tf like '%$d_filter[keyword]%' ";
            }else{
              $ckd="";
            }
          }else{
            $ckd="";
          }
          if($d_filter_master['kategori']!='tahun'){
            
            echo"
              <label> 
                <input type='checkbox' class='checkbox-info' $ckd name='$dname'> $d_filter[display] <br>
              </label>
            ";

          }else{
            echo"
              <div class='checkbox col-md-4' style='margin-top:0px;background-color:#ECECEC;border-radius:10px'> 
                <i>Tahun Terbit $d_filter[display]</i><br>
                <select name=$d_filter_master[kategori]$d_filter[name]>
                  ";
                    for($i=1990;$i<=date('Y');$i++){
                      echo"
                        <option value=$i>
                        $i
                        </option>
                      ";
                    }
                    echo"
                </select>
                 sampai dengan
                 <select name=$d_filter_master[kategori]$d_filter[name]2>
                    ";
                    for($i=date('Y');$i>=1990;$i--){
                      echo"
                        <option value=$i>
                        $i
                        </option>
                      ";
                    }
                    echo"
                </select>
              </div>
            ";
          }
          
        }
        if($d_filter_master['kategori']!='tahun'){ 
          echo"
            </div>
          ";
        }
      }
    ?>
    
    
  </div>
</div>
</div>
</form>


  

   <br>

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
//---------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------
	include "koneksi.php";
	
	$XX = "<br><br><h2> <center> No Record Found, Search Again Please </center> </h2>"; 
  echo"<font style='color:red'>$selectQuery-select</font>";
	$query = mysql_query($selectQuery);
}else{
$query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan c on d.idkategori=c.idkategori order by nobast");
}
	$no = 1;
  $chck=1;
	while ($data = mysql_fetch_array($query)) {
    if(isset($_REQUEST['submit2'])) {
      $chck=0;
      $qthn=mysql_query("select* from ref_tahun");
      while($dthn=mysql_fetch_array($qthn)){
        if($dthn['name']!='pkk'){
          $dtahun=substr($data["$dthn[ref_field]"],-4);
          $tahun1=$_POST["tahun"."$dthn[name]"];
          if($dtahun>=$tahun1){//&&(substr($data["$dthn[ref_field]"],-4)<=$_POST["tahun"."$dthn[name]2"])){
            $chck=1;
          }else{
            $chck=0;
          }
          //echo $dtahun."-".$tahun1."+$dthn[name]<hr>";
        }
      }
      if($chck==0){
        $smulti=mysql_query("select* from ref_master where ket='multi'");
        while($dmulti=mysql_fetch_array($smulti)){
          $qmulti="select* from $dmulti[tabel]";
          $sdmulti=mysql_query($qmulti);
        }
      }
    }
    // echo "<hr>$chck<hr>";
    if($chck==1){
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