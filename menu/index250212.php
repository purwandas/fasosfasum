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
                <li><a href="entrysippt.php">Entry Non SIPPT</a></li>
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
            <li><a href="#">BAST Non-Gubernur</a></li>
            <li><a href="pdfbastnonnumber.php">BAST Non-Number</a></li> 
            <li><a href="bastwilayah.php">BAST Per-Wilayah</a></li>
            <li><a href="#">Semua BAST</a></li> 
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

              <li><a class="parent">Data Rekonsiliasi</a>
                <ul>
                  <li><a target="_blank" href="pdf163.php">Data Rekon Kel.163</a></li>
                  <li><a target="_blank" href="pdf54.php">Data Rekon Kel.54</a></li>
                  <li><a target="_blank" href="pdf129.php">Data Rekon Kel.129</a></li>
                  <li><a target="_blank" href="pdf101.php">Data Rekon Kel.101</a></li>
                  <li><a target="_blank" href="pdf58.php">Data Lokasi 58</a></li>
                  <li><a target="_blank" href="pdfdtr.php">Data Kelompok DTR</a></li>
                  <li><a target="_blank" href="bastirisanrekon.php">Data irisan Rekon</a></li>
                  
                  
                </ul>
              </li>


              <li><a class="parent">Laporan SIPPT</a>
                <ul>
                  <li><a href="#">Data SIPPT</a></li>
                  <li><a href="#">Data Non SIPPT</a></li>
                  <li><a href="#">Data Kewajiban</a></li>
                </ul>
              </li>
              <li><a href="#">SIPPT vs BAST</a>
              </li>          
            </ul>
          </li>




          <li id="accounting"><a class="top">Accounting</a>
            <ul>
              <li><a href="entrynilaibast.php">Entry Nilai BAST</a></li>
              <li><a href="grafikbastwilayah.php">Halaman Percobaan1</a></li>
              <li><a href="grafik2.php">Halaman Percobaan2</a></li>
            </ul>
          </li>



          <li id="reports"><a class="top">GIS</a>
            <ul>
              <li><a href="indexGis.php">Input Marking Area</a></li>
              <li><a href="entryperuntukanpercobaan.php">Pencarian Lokasi</a></li>
              <li><a href="piechart8.php">Halaman Percobaan</a></li>
            </ul>
          </li>



        </ul>
        <ul class="right">
          <li id="store"><a onClick="window.open('http://demo.opencart.com/');" class="top">Store Front</a>
            <ul>
            </ul>

          </li>
          <li id="store"><a class="top" href="http://demo.opencart.com/admin/index.php?route=common/logout&amp;token=f3971cf311161ee5d81f2c2c13145c39">Logout</a></li>
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