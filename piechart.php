<html>
<head>
<title>JSChart</title>

<script type="text/javascript" src="sources/jscharts.js"></script>

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

	$tanpairisan= mysql_query("select * from lokasidokumen where dtr ='1' and pulomas='0' ");
	$jmldtr = mysql_num_rows($tanpairisan);
	

?>

<body>

<div id="graph">Loading...</div>

<script type="text/javascript">
	
	var myChart = new JSChart('graph', 'pie');
	myChart.setDataArray([['irisan pulomas',<?php echo $jmlirpm; ?>],['irisan 129', <?php echo $jmlir129; ?> ],['irisan 54', <?php echo $jmlir54; ?> ],['irisan 101',<?php echo $jmlir101; ?> ],['irisan 163', <?php echo $jmlir163; ?> ],['irisan lok.58', <?php echo $jmlir58; ?> ],['Tanpa Irisan', <?php echo $jmldtr; ?> ]]);
	myChart.colorize(['#99CDFB','#FFFF00','#0000FA','#F8CC00','#F89900','#00FF00','#FF0000']);
	myChart.setSize(350, 300);
	myChart.setTitle('Pie Chart Lokasi DTR');
	myChart.setTitleFontFamily('Arial');
	myChart.setTitleFontSize(11);
	myChart.setTitleColor('#0F0F0F');
	myChart.setPieRadius(100);
	myChart.setPieValuesColor('#800000');
	myChart.setPieValuesFontSize(10);
	myChart.setPiePosition(180, 125);
	myChart.setShowXValues(true);
	myChart.setLegend('#99CDFB', 'irisan pulomas');
	myChart.setLegend('#FFFF00', 'irisan 129');
	myChart.setLegend('#0000FA', 'irisan 54');
	myChart.setLegend('#F8CC00', 'irisan 101');
	myChart.setLegend('#F89900', 'irisan 163');
	myChart.setLegend('#00FF00', 'irisan lok.58');
	myChart.setLegend('#FF0000', 'Tanpa Irisan');
	myChart.setLegendShow(false);
	myChart.setLegendFontFamily('Arial');
	myChart.setLegendFontSize(11);
	myChart.setLegendPosition(350, 120);
	myChart.setPieAngle(50);
	myChart.set3D(true);
	myChart.draw();
	
</script>



</body>
</html>