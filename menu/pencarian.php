<div id="menu">
        <ul class="left" style="display: none;">
          <li id="dashboard"><a href="#" class="top">Dashboard</a></li>
          <li id="catalog"><a class="top">Master Data</a>
            <ul>
              <li><a href="dokacuan.php">Dokumen Acuan BAST</a></li>
              <li><a href="#">Data Pengembang</a></li>
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
                <li><a href="sipptvsbast">Data SIPPT vs BAST</a></li>

              </ul>
            </li>
            <li><a class="parent">Non SIPPT</a>
              <ul>
                <li><a href="#">Entry Non SIPPT</a></li>
                <li><a href="#">Entry Kewajiban Non-SIPPT</a></li>
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
            <li><a href="bastwilayah.php">BAST Per-Wilayah</a></li>
            <li><a href="#">Semua BAST</a></li> 
            
          </ul>
        </li>


        <li id="reports"><a class="top">Laporan</a>
          <ul>
            <li><a class="parent">Laporan BAST</a>
              <ul>
                <li><a href="#">Data BAST</a></li>
                <li><a href="#">Data Lokasi Aset</a></li>
                <li><a href="#">Data Kewajiban</a></li>

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

        <li id="reports"><a class="top">GIS</a>
          <ul>
            <li><a href="indexGis.php">Input Marking Area</a></li>
            <li><a href="entryperuntukanpercobaan.php">Pencarian Lokasi</a></li>
            <li><a href="viewdetailbast2.html">Halaman Percobaan</a></li>
          </ul>
        </li>



      </ul>
      <ul class="right">
        <li id="store"><a onClick="window.open('http://demo.opencart.com/');" class="top">Store Front</a>
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