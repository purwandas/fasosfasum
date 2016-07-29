<html>
<head>
<title>DRZ Google Maps</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="jquery-1.4.3.min.js"></script>
<script type="text/javascript">

var peta;
var pertama = 0;
var tanda1;
var tanda2;
var warnashape;
var judulx = new Array();
var desx = new Array();
var i;
var petak;
var url;
var rectangle;
function peta_awal(){
    var jakarta = new google.maps.LatLng(-6.175, 106.8286);
    var petaoption = {
        zoom: 12,
        center: jakarta,
        mapTypeId: google.maps.MapTypeId.ROADMAP




        };
    peta = new google.maps.Map(document.getElementById("petaku"),petaoption);
    google.maps.event.addListener(peta,'click',function(event){
        kasihtanda(event.latLng);
    });
    ambildatabase('awal');
}

$(document).ready(function(){
    $("#tombol_simpan").click(function(){
        var wrna = $("#warnaku").val();
        var x1 = $("#x1").val();
        var y1 = $("#y1").val();
        var x2 = $("#x2").val();
        var y2 = $("#y2").val();
        var judul = $("#judul").val();
        var des = $("#deskripsi").val();
        $("#loading").show();
        $.ajax({
            url: "simpanlokasi.php",
            data: "x1="+x1+"&y1="+y1+"&x2="+x2+"&y2="+y2+"&judul="+judul+"&des="+des+"&wrn="+wrna,
            cache: false,
            success: function(msg){
                alert(msg);
                $("#loading").hide();
                $("#x1").val("");
                $("#y1").val("");
                $("#x2").val("");
                $("#y2").val("");
                $("#judul").val("");
                $("#deskripsi").val("");
                ambildatabase('akhir');
                rectangle.setMap(null);
            }
        });
    });
    $("#tutup").click(function(){
        $("#jendelainfo").fadeOut();
    });
});
function kasihtanda(lokasi){
    var gambar_tanda = 'tanda.png';
    if(pertama == 0){
        tanda1 = new google.maps.Marker({
            position: lokasi,
            map: peta,
            icon: gambar_tanda
        });
        $("#x1").val(lokasi.lat());
        $("#y1").val(lokasi.lng());
        pertama = 1;
    }else{
        tanda2 = new google.maps.Marker({
            position: lokasi,
            map: peta,
            icon: gambar_tanda
        });
        $("#x2").val(lokasi.lat());
        $("#y2").val(lokasi.lng());
        buat_persegi();
        pertama = 0;
    }

}

function buat_persegi(){
    warnashape = $("#warnaku").val();
    warnashape = "#"+warnashape;
    rectangle = new google.maps.Rectangle({
        map: peta,
        fillColor: warnashape,
        fillOpacity: 0.3,
        strokeColor: warnashape,
        strokeWeight: 1
    });
    var latLngBounds = new google.maps.LatLngBounds(
        tanda1.getPosition(),
        tanda2.getPosition()
    );
    rectangle.setBounds(latLngBounds);
    tanda1.setMap(null);
    tanda2.setMap(null);
}

function ambildatabase(akhir){
    if(akhir=="akhir"){
        url = "ambildata.php?akhir=1";
    }else{
        url = "ambildata.php?akhir=0";
    }
    $.ajax({
        url: url,
        dataType: 'json',
        cache: false,
        success: function(msg){
            for(i=0;i<msg.wilayah.petak.length;i++){
                judulx[i] = msg.wilayah.petak[i].judul;
                desx[i] = msg.wilayah.petak[i].deskripsi;
                petak = new google.maps.Rectangle({
                    map: peta,
                    fillColor: msg.wilayah.petak[i].warna,
                    fillOpacity: 0.3,
                    strokeColor: msg.wilayah.petak[i].warna,
                    strokeWeight: 1
                });
                var bingkai = new google.maps.LatLngBounds(
                    new google.maps.LatLng(msg.wilayah.petak[i].x1, msg.wilayah.petak[i].y1),
                    new google.maps.LatLng(msg.wilayah.petak[i].x2, msg.wilayah.petak[i].y2)
                );
                petak.setBounds(bingkai);
                setinfo(petak,i);
            }
        }
    });
}

function setwarna(wrn){
    $("#warnaku").val(wrn);
}

function setinfo(petak, nomor){
    google.maps.event.addListener(petak, 'click', function() {
        $("#jendelainfo").fadeIn();
        $("#teksjudul").html(judulx[nomor]);
        $("#teksdes").html(desx[nomor]);
    });
}
</script>
<style>
#jendelainfo{position:absolute;z-index:1000;top:100;
left:400;background-color:yellow;display:none;}
</style>
</head>
<body onload="peta_awal()">
<center>
<h1>GIS FASOS/FASUM BPKD DKI JAKARTA</h1>
<table id="jendelainfo" border="1" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#FFCC00" width="300" height="136">
  <tr>
    <td width="248" bgcolor="#000000" height="19"><font color=white><span id="teksjudul"></span></font></td>
    <td width="30" bgcolor="#000000" height="19">
    <p align="center"><font color="#FFFFFF"><a style="cursor:pointer" id="tutup"><b>X</b></a></font></td>
  </tr>
  <tr>
    <td width="290" bgcolor="#FFCC00" height="100" valign="top" colspan="2">
    <p align="center"><span id="teksdes"></span></td>
  </tr>
</table>
<table border=0 width=1000>
<tr><td>
<div id="petaku" style="width:700px; height:500px"></div>
</td>
<td valign=top>
Pilih warna shape
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse;cursor:pointer" bordercolor="#111111" width="200">
  <tr>
    <td bgcolor="#008000" onclick="setwarna('008000')">&nbsp;</td>
    <td bgcolor="#FF0000" onclick="setwarna('FF0000')">&nbsp;</td>
    <td bgcolor="#0000FF" onclick="setwarna('0000FF')">&nbsp;</td>
    <td bgcolor="#FFFF00" onclick="setwarna('FFFF00')">&nbsp;</td>
    <td bgcolor="#C0C0C0" onclick="setwarna('C0C0C0')">&nbsp;</td>
    <td bgcolor="#FF9900" onclick="setwarna('FF9900')">&nbsp;</td>
    <td bgcolor="#808000" onclick="setwarna('808000')">&nbsp;</td>
    <td bgcolor="#FF00FF" onclick="setwarna('FF00FF')">&nbsp;</td>
  </tr>
</table>
<input type=text id="warnaku" size="10" value="#FF0000">
<br>
X1 : <input type=text id=x1><br>
Y1 : <input type=text id=y1><br>
X2 : <input type=text id=x2><br>
Y2 : <input type=text id=y2><p>
Judul:<br>
<input type=text id="judul" size=30><p>
Deskripsi:<br>
<textarea cols=20 rows=8 id="deskripsi"></textarea><p>
<button id="tombol_simpan">Simpan</button>
<img src="ajax-loader.gif" style="display:none" id="loading">

<li><a href="index.php">Home</a></li>

</ul>

</td>
</tr>
</table>
</body>
</html>
