
<html>

    <body>
    <center>
        <h1>Grafik Jumlah Data Berdasarkan Lokasi Dokumen</h1>

        <?php
        
               //koneksi database
		include "koneksi.php";

            //query panggil data_grafik
            $query = mysql_query("select * from lokasidokumen ");
            $record = mysql_fetch_array($query);

		$hasilpulomas= mysql_query("select * from lokasidokumen where pulomas ='1' ");
		$totalpulomas = mysql_num_rows($hasilpulomas);

		$hasilrekon163= mysql_query("select * from lokasidokumen where rekon163 ='1' ");
		$totalrekon163 = mysql_num_rows($hasilrekon163);

		$hasilrekon54= mysql_query("select * from lokasidokumen where rekon54 ='1' ");
		$totalrekon54 = mysql_num_rows($hasilrekon54);

		$hasilrekon129= mysql_query("select * from lokasidokumen where rekon129 ='1' ");
		$totalrekon129 = mysql_num_rows($hasilrekon129);

		$hasilrekon101= mysql_query("select * from lokasidokumen where rekon101 ='1' ");
		$totalrekon101 = mysql_num_rows($hasilrekon101);


            //variabel data grafik
            $jumlahpulomas = $totalpulomas;
            $jumlahrekon163 = $totalrekon163;
            $jumlahrekon54 = $totalrekon54;
	    $jumlahrekon129 = $totalrekon129;
		$jumlahrekon101 = $totalrekon101;
	    

            //cari nilai terbesar
            if ($jumlahpulomas >= $jumlahrekon163 and $jumlahpulomas >= $jumlahrekon54 and  $jumlahpulomas >= $jumlahrekon129)   {
                $max = $jumlahpulomas;

            } else if ($jumlahrekon163 >= $jumlahpulomas and $jumlahrekon163 >= $jumlahrekon54 and $jumlahrekon163 >= $jumlahrekon129 and $jumlahrekon163 >= $jumlahrekon101) {
                $max = $jumlahrekon163;

            } else if ($jumlahrekon54 >= $jumlahpulomas and $jumlahrekon54 >= $jumlahrekon163 and $jumlahrekon54 >= $jumlahrekon129 and $jumlahrekon54 >= $jumlahrekon101) {
                $max = $jumlahrekon54;

            } else if ($jumlahrekon129 >= $jumlahpulomas and $jumlahrekon129 >= $jumlahrekon163 and $jumlahrekon129 >= $jumlahrekon54 and $jumlahrekon129 >= $jumlahrekon101) {
                $max = $jumlahrekon129;

            } else if ($jumlahrekon101 >= $jumlahpulomas and $jumlahrekon101 >= $jumlahrekon163 and $jumlahrekon101 >= $jumlahrekon54 and $jumlahrekon101 >= $jumlahrekon129) {
                $max = $jumlahrekon101;}


            //hitung panjang grafik
            $Tmaksimal = 100 / $max;
            $awal = 300;
            $a = $jumlahpulomas * $Tmaksimal;
            $ay = 100 - $a;
            $ax = ($ay * $awal) /100;

            $b = $jumlahrekon163 * $Tmaksimal;
            $by = 100 - $b;
            $bx = ($by * $awal) / 100;

            $c = $jumlahrekon54 * $Tmaksimal;
            $cy = 100 - $c;
            $cx = ($cy * $awal) / 100;


            $d = $jumlahrekon129 * $Tmaksimal;
            $dy = 100 - $d;
            $dx = ($dy * $awal) / 100;

            $e = $jumlahrekon101 * $Tmaksimal;
            $ey = 100 - $e;
            $ex = ($ey * $awal) / 100;

            ?>

            <div style="height: 300px;border-left: 4px solid;border-bottom: 4px solid;margin: 70px;padding-top: 50px">


                <div style="border: 1px solid;margin-top:<?php echo "$ax"; ?>px; height: <?php echo "$a"; ?>%;width: 100px;margin-left: 50px;text-align: center;float: left">
                    <?php //echo "$jumlahpulomas"." (".$a."%)" ?>
                    <img width="100%" height="100%" src="view/image/red.jpg"/>
                    <?php echo "$jumlahpulomas" ?>
                </div>


                <div style="border: 1px solid;margin-top:<?php echo "$bx"; ?>px; height: <?php echo "$b"; ?>%;width: 100px;margin-left: 50px;text-align: center;float: left">
                    <img width="100%" height="100%" src="view/image/green.jpg"/>
                    <?php echo "$jumlahrekon163" ?>
                </div>


                <div style="border: 1px solid;margin-top:<?php echo "$cx"; ?>px; height: <?php echo "$c"; ?>%;width: 100px;margin-left: 50px;text-align: center;float: left">
                    <img width="100%" height="100%" src="view/image/blue.jpg"/>
                    <?php echo "$jumlahrekon54" ?>
                </div>


                <div style="border: 1px solid;margin-top:<?php echo "$dx"; ?>px; height: <?php echo "$d"; ?>%;width: 100px;margin-left: 50px;text-align: center;float: left">
                    <img width="100%" height="100%" src="view/image/orange.png"/>
                    <?php echo "$jumlahrekon129" ?>
                </div>

                <div style="border: 1px solid;margin-top:<?php echo "$ex"; ?>px; height: <?php echo "$e"; ?>%;width: 100px;margin-left: 50px;text-align: center;float: left">
                    <img width="100%" height="100%" src="view/image/pink.png"/>
                    <?php echo "$jumlahrekon101" ?>
                </div>

                <div style="clear: both"></div>

            </div>



            <div style="margin-top: -40px;margin-left:-760px">
                <table align="center">
                    <tr>
                        <td><img width="15px" src="view/image/red.jpg"/></td>
                        <td>Pulomas</td>
                   
                        <td><img width="15px" src="view/image/green.jpg"/></td>
                        <td>rekon163</td>
                    
                        <td><img width="15px" src="view/image/blue.jpg"/></td>
                        <td>rekon54</td>

                        <td><img width="15px" src="view/image/orange.png"/></td>
                        <td>rekon129</td>

                        <td><img width="15px" src="view/image/pink.png"/></td>
                        <td>rekon101</td>

                    </tr>
                </table>
            </div>
            <?php
    
        ?>
    </center>
</body>
</html>