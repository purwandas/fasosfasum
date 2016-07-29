<?php
if (isset($_REQUEST['submit2'])) {

include "koneksi.php";

$term = $_POST['term'];
 
$XX = "<br><br><h2> <center> No Record Found, Search Again Please </center> </h2>"; 

 
$sql = mysql_query("select * from file_index where person like '%$term%' or  keywords like '%$term%'")
   or die('Error in query : $sql. ' .mysql_error());

	$query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan c on d.idkategori=c.idkategori inner join dataaset a on b.nobast=a.nobastaset" where nobast like '%$term%' or pengembangbast like '%$term%' or nodokacuan like '%$term%' or tglbast '%$term%' or pemegangdokacuan ");

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
		<td class="left"><?php echo $data['nodokacuan']; ?></td>
		<td class="left"><?php echo $data['pemegangdokacuan']; ?></td>
		<td class="left"><?php echo $data['keterangan']; ?></td>
		
		<td class="center"><a href="viewdetailbast.php?id=<?php echo $data['nobast']; ?>">view</a></td>
		
	</tr>

              </tbody>
	<?php
 	$no++;
	}

else	

$query = mysql_query("select * from bast b inner join detaildokacuan d on b.nodokacuan=d.nodokacuan inner join dokumenacuan c on d.idkategori=c.idkategori inner join dataaset a on b.nobast=a.nobastaset");

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
		<td class="left"><?php echo $data['nodokacuan']; ?></td>
		<td class="left"><?php echo $data['pemegangdokacuan']; ?></td>
		<td class="left"><?php echo $data['keterangan']; ?></td>
		
		<td class="center"><a href="viewdetailbast.php?id=<?php echo $data['nobast']; ?>">view</a></td>
		
	</tr>

              </tbody>
	<?php
 	$no++;
	}
	?>
	


