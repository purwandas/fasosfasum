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
					<form action='t-master.php' method='post'>
					<center>
					<h3>Data Tabel Master</h3><br>
					<table>
						<tr>
						<td width=10%>
							Tabel:
						</td>
						<td  width=30%>					
					 		<input type=text name=tabel class='$d_master[name]input form-control' value=$d_master[tabel]>
					 		<input type=hidden name=id value=$d_master[id]>
					 	</td>
						<td  width=10%>
						</td>
						<td>
							Nama: 
						</td>
						<td>
							<input type=text name=nama class='$d_master[name]input form-control' value=$d_master[nama]>
						</td>
						</tr>
						<tr>
						<td>
							Ref. Tabel: 
						</td>
						<td>
							<input type=text name=ref_table class='$d_master[name]input form-control' value=$d_master[ref_table]>
						</td>
						<td>
						</td>
						<td>
							Ref. Field: 
						</td>
						<td>
							<input type=text name=ref_field class='$d_master[name]input form-control' value=$d_master[ref_field]>
						</td>
						</tr>
						<tr>
						<td>
							Ket: 
						</td>
						<td>
							<input type=text name=ket class='$d_master[name]input form-control' value=$d_master[ket]>
						</td>
						<td> 
						</td>
						<td>
							Kategori: 
						</td>
						<td>
							<input type=text name=kategori class='$d_master[name]input form-control' value=$d_master[kategori]>
						</td>
						</tr>
						<tr>
						<td>
							Urutan: 
						</td>
						<td>
							<input type=text name=urutan class='$d_master[name]input form-control' value=$d_master[urutan]>
						</td>
						<td> 
						</td>
						<td colspan=2>
							<button type=submit name=simpan class='btn btn-primary'>Simpan Perubahan</button>
							<button type='submit' name=hapus class='btn btn-danger'>Hapus Tabel ini</button>
						</td>
						</tr>
					</table>
					</center>
					</form>
					<h3>Data Tabel $d_master[tabel]</h3><br>
					<table class='table table-striped table-hover table-bordered '>
					";
					$q_ref=mysql_query("select* from $d_master[tabel]");
					$idx=0;
					while($d_ref=mysql_fetch_array($q_ref)){
						if($d_master['kategori']!='tahun'){
							if($idx==0){
								echo"
									<tr>
										<td>
												<div class='col-md-3 text-center'>
													Keyword
												</div>
												<div class='col-md-3 text-center'>
													Display
												</div>
												<div class='col-md-2 text-center'>
													Name
												</div>
												<div class='col-md-4 text-center'>
													Action
												</div>	
										</td>
									</tr>
									</tr>
								";
								echo"
									<tr>
										<td>
											<form action='t-ref.php' class='form-inline' method='post'>
												<div class='col-md-3'>
													<input type=hidden name=tabel value=$d_master[tabel]>
													<input type=hidden name=id value=$d_ref[id]>
													<input type=text class='form-control' name='keyword' value=$d_ref[keyword]>
												</div>
												<div class='col-md-3'>
													<input class='form-control' type=text name='display' value=$d_ref[display]>
												</div>
												<div class='col-md-2'>
													<input class='form-control' type=text name='name' value=$d_ref[name]>
												</div>
												<div class='col-md-4'>
													<button type=submit name=simpan class='btn btn-primary'>Simpan Perubahan</button>
													<button type='submit' name=hapus class='btn btn-danger'>Hapus Data</button>
												</div>	
											</form>
										</td>
									</tr>
								";
								$idx++;
							}else{
								echo"
									<tr>
										<td>
											<form action='t-ref.php' class='form-inline' method='post'>
												<div class='col-md-3'>
													<input type=hidden name=tabel value=$d_master[tabel]>
													<input type=hidden name=id value=$d_ref[id]>
													<input type=text class='form-control' name='keyword' value=$d_ref[keyword]>
												</div>
												<div class='col-md-3'>
													<input class='form-control' type=text name='display' value=$d_ref[display]>
												</div>
												<div class='col-md-2'>
													<input class='form-control' type=text name='name' value=$d_ref[name]>
												</div>
												<div class='col-md-4'>
													<button type=submit name=simpan class='btn btn-primary'>Simpan Perubahan</button>
													<button type='submit' name=hapus class='btn btn-danger'>Hapus Data</button>
												</div>	
											</form>
										</td>
									</tr>
									
								";
							}
						}else{
							if($idx==0){
								echo"
									<tr>
										<td>
												<div class='col-md-1 text-center'>
													Name
												</div>
												<div class='col-md-1 text-center'>
													Display
												</div>
												<div class='col-md-2 text-center'>
													Ref_table
												</div>
												<div class='col-md-2 text-center'>
													ref_field
												</div>
												<div class='col-md-2 text-center'>
													Clause
												</div>
												<div class='col-md-4 text-center'>
													Action
												</div>	
										</td>
									</tr>
								";
								echo"
									<tr>
										<td>
											<form action='t-ref.php' class='form-inline' method='post'>
												<div class='col-md-1'>
													<input type=hidden name=tabel value=$d_master[tabel]>
													<input type=hidden name=id value=$d_ref[id]>
													<input type=text class='form-control' name='name' value=$d_ref[name]>
												</div>
												<div class='col-md-1'>
													<input class='form-control' type=text name='display' value=$d_ref[display]>
												</div>
												<div class='col-md-2'>
													<input class='form-control' type=text name='ref_table' value=$d_ref[ref_table]>
												</div>
												<div class='col-md-2'>
													<input class='form-control' type=text name='ref_field' value=$d_ref[ref_field]>
												</div>
												<div class='col-md-2'>
													<input class='form-control' type=text name='clause' value=$d_ref[clause]>
												</div>
												<div class='col-md-4'>
													<button type=submit name=simpan class='btn btn-primary'>Simpan Perubahan</button>
													<button type='submit' name=hapus class='btn btn-danger'>Hapus Data</button>
												</div>	
											</form>
										</td>
									</tr>
								";
								$idx++;
							}else{
								echo"
									<tr>
										<td>
											<form action='t-ref.php' class='form-inline' method='post'>
												<div class='col-md-1'>
													<input type=hidden name=tabel value=$d_master[tabel]>
													<input type=hidden name=id value=$d_ref[id]>
													<input type=text class='form-control' name='name' value=$d_ref[name]>
												</div>
												<div class='col-md-1'>
													<input class='form-control' type=text name='display' value=$d_ref[display]>
												</div>
												<div class='col-md-2'>
													<input class='form-control' type=text name='ref_table' value=$d_ref[ref_table]>
												</div>
												<div class='col-md-2'>
													<input class='form-control' type=text name='ref_field' value=$d_ref[ref_field]>
												</div>
												<div class='col-md-2'>
													<input class='form-control' type=text name='clause' value=$d_ref[clause]>
												</div>
												<div class='col-md-4'>
													<button type=submit name=simpan class='btn btn-primary'>Simpan Perubahan</button>
													<button type='submit' name=hapus class='btn btn-danger'>Hapus Data</button>
												</div>	
											</form>
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