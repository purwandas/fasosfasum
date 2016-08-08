<div class="container">
<?php
	include("koneksi.php");

	$q_master=mysql_query("select * from ref_master order by urutan asc");
	while($d_master=mysql_fetch_array($q_master)){
		echo"
			<script type='text/javascript'>
			  $(function(){
			    $('.$d_master[name]').click(function(){
			        $('.$d_master[name]2').toggle('slow');
			    });

			  });
			</script>
			 <style>
				.$d_master[name]2{
				  display: none;
				}
				.$d_master[name]input{
				  disabled:disabled;
				}
			</style>
			<div class='form-group'>
				<p class='$d_master[name] btn-info btn text-center col-md-12 row'>$d_master[nama]</p>
				<div class='$d_master[name]2 form-inline'>
				";
				if($d_master['kategori']!='tahun'){
					echo"
					<center>
					<table>
						<tr>
						<td width=10%>
							Tabel:
						</td>
						<td  width=30%>					
					 		<input type=text name=$d_master[name]tabel class='$d_master[name]input form-control' value=$d_master[tabel]>
					 	</td>
						<td  width=10%>
						</td>
						<td>
							Nama: 
						</td>
						<td>
							<input type=text name=$d_master[name]nama class='$d_master[name]input form-control' value=$d_master[nama]>
						</td>
						</tr>
						<tr>
						<td>
							Ref. Tabel: 
						</td>
						<td>
							<input type=text name=$d_master[name]ref_table class='$d_master[name]input form-control' value=$d_master[ref_table]>
						</td>
						<td>
						</td>
						<td>
							Ref. Field: 
						</td>
						<td>
							<input type=text name=$d_master[name]ref_field class='$d_master[name]input form-control' value=$d_master[ref_field]>
						</td>
						</tr>
						<tr>
						<td>
							Ket: 
						</td>
						<td>
							<input type=text name=$d_master[name]ket class='$d_master[name]input form-control' value=$d_master[ket]>
						</td>
						<td> 
						</td>
						<td>
							Kategori: 
						</td>
						<td>
							<input type=text name=$d_master[name]kategori class='$d_master[name]input form-control' value=$d_master[kategori]>
						</td>
						</tr>
						<tr>
						<td>
							Urutan: 
						</td>
						<td>
							<input type=text name=$d_master[name]urutan class='$d_master[name]input form-control' value=$d_master[urutan]>
						</td>
						<td> 
						</td>
						<td colspan=2>
							<a target='blank' href='homeadmin.php?h=error'><button class='btn btn-default'>Simpan</button></a>
							<a target='blank' href='homeadmin.php?h=error'><button class='btn btn-default'>Hapus Tabel ini</button></a>
						</td>
						</tr>
					</table>
					</center>
					";
				}else{

				}
				echo"
					<table class='table table-striped table-hover table-bordered '>
					";
					$q_ref=mysql_query("select* from $d_master[tabel]");
					$idx=0;
					while($d_ref=mysql_fetch_array($q_ref)){
						if($d_master['kategori']!='tahun'){
							if($idx==0){
								echo"
									<tr>
										<td>Kode</td>
										<td>Keyword</td>
										<td>Display</td>
										<td>Name</td>
										<td>act.</td>
									</tr>
								";
								echo"
									<tr>
										<td>$d_ref[kode]</td>
										<td>$d_ref[keyword]</td>
										<td>$d_ref[display]</td>
										<td>$d_ref[name]</td>
										<td>
											<a target='blank' href='homeadmin.php?h=error'>ubah</a> | <a target='blank' href='homeadmin.php?h=error'>hapus</a>
										</td>
									</tr>
								";
								$idx++;
							}else{
								echo"
									<tr>
										<td>$d_ref[kode]</td>
										<td>$d_ref[keyword]</td>
										<td>$d_ref[display]</td>
										<td>$d_ref[name]</td>
										<td>
											<a target='blank' href='homeadmin.php?h=error'>ubah</a> | <a target='blank' href='homeadmin.php?h=error'>hapus</a>
										</td>
									</tr>
								";
							}
						}else{
							if($idx==0){
								echo"
									<tr>
										<td>Name</td>
										<td>Display</td>
										<td>Ref_table</td>
										<td>Ref_field</td>
										<td>Clause</td>
										<td>act.</td>
									</tr>
								";
								echo"
									<tr>
										<td>$d_ref[name]</td>
										<td>$d_ref[display]</td>
										<td>$d_ref[ref_table]</td>
										<td>$d_ref[ref_field]</td>
										<td>$d_ref[clause]</td>
										<td>
											<a target='blank' href='homeadmin.php?h=error'>ubah</a> | <a target='blank' href='homeadmin.php?h=error'>hapus</a>
										</td>
									</tr>
								";
								$idx++;
							}else{
								echo"
									<tr>
										<td>$d_ref[name]</td>
										<td>$d_ref[display]</td>
										<td>$d_ref[ref_table]</td>
										<td>$d_ref[ref_field]</td>
										<td>$d_ref[clause]</td>
										<td>
											<a target='blank' href='homeadmin.php?h=error'>ubah</a> | <a target='blank' href='homeadmin.php?h=error'>hapus</a>
										</td>
									</tr>
								";
							}
						} 
					}
					echo"
					</table>
				</div>
			</div>
		";
	}
?>
</div>
