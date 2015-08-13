<div class="title">
	RETUR OBAT PASIEN
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>farmasi/homereturobat">Retur Obat</a>
	</li>
</div>

<div class="backregis">
	<div id="my-tab-content" class="tab-content">
		<form method="POST" id="search_submit">
	   		<div class="search">
				<label class="control-label col-md-3" style="margin-top:5px;">
					<i class="fa fa-search">&nbsp;&nbsp;</i>Cari Transaksi Pembelian <span class="required" style="color : red">* </span>
				</label>
				<div class="col-md-4">		
					<input type="text" id="kuncisubmit" class="form-control" placeholder="Masukkan Nomor Nota/Nomor RM/Nama Pasien" autofocus>
				</div>
				<button type="submit" class="btn btn-danger">Cari</button>&nbsp;&nbsp;&nbsp;
			</div>	
		</form>
		<br><hr class="garis"><br>
		
		<div class="portlet box red">
			
			<div class="portlet-body" style="margin: 0px 10px 0px 10px">
				<div class="teble-responsive">
					<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabelreturpasienutama">
						<thead>
							<tr class="info">
								<th width="20">No.</th>
								<th>Unit</th>
								<th>Nomor Nota</th>
								<th>Nomor RM</th>
								<th>Nama Pasien</th>
								<th>Jenis Kelamin</th>
								<th>Umur</th>
								<th width="80">Action</th>
							</tr>
						</thead>
						<tbody id="t_body">
							<?php  
								if (isset($get_obat_retur) && !empty($get_obat_retur)) {
									$i = 0;
									foreach ($get_obat_retur as $value) {
										$datetime1 = new DateTime();
										$datetime2 = new DateTime($value['tanggal_lahir']);
										$interval = $datetime1->diff($datetime2);
										$umur = ''						;
										if($interval->y > 0)
											$umur .= $interval->y ." tahun ";

										echo '<tr>
												<td>'.(++$i).'</td>
												<td>'.$value['dept_asal'].'</td>
												<td>'.$value['no_nota'].'</td>
												<td>'.$value['rm_id'].'</td>
												<td>'.$value['nama'].'</td>
												<td>'.$value['jenis_kelamin'].'</td>										
												<td>'.$umur.'</td>
												<td style="text-align:center">
													<a href="tambahretur/tambah/'.$value['no_nota'].'"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Retur"></i></a>
												</td>										
											</tr>';
									}
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>     
		<br>
	    <div class="modal fade" id="pilihkamar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Pilih Kamar Rawat Inap</h3>
        			</div>	
        			<div class="modal-body">
        				
						<div class="form-group">
						<br>
							<label class="control-label col-md-3">No. Rekam Medis</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="noRm" placeholder="No Rekam Medis" readonly>
							</div>
						</div>

						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Nama Pasien</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="nama" placeholder="Nama Pasien" readonly>
							</div>
						</div>
													
						<div class="form-group"><br><br>
							<label class="control-label col-md-3">Cara Bayar</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="carabayar" name="carabayar" placeholder="Cara xbayar" readonly>
								</div>
						</div>
						
						<div class="form-group" id="noAsuransi"><br><br>
							<label class="control-label col-md-3">Nomor Asuransi </label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="nomorAsuransi" placeholder="Nomor Asuransi" readonly>
							</div>
						</div>

						<div class="form-group"><br><br>
							<label class="control-label col-md-3">Departemen Tujuan</label>
							<div class="col-md-6">
								<select class="form-control select" id="kamar">
									<option value="" selected>--Pilih Departement--</option>
									<option value="Kamar Bersalin">Kamar Bersalin</option>
									<option value="UGD"  >UGD</option>
									<option value="ICU" >ICU</option>
									<option value="Kamar Anak" >Kamar Anak</option>
									<option value="Umum" >Umum</option>
								</select>												
							</div>
						</div>
						
						<div class="form-group"><br><br>
							<label class="control-label col-md-3">Pilih Kamar & Kelas Kamar</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="kamar" placeholder="Search Kamar" data-toggle="modal" data-target="#pilkamar">											
							</div>
						</div>				

      				</div>
      				<br><br>
      				<div class="modal-footer">
      					<button type="button" data-dismiss="modal" class="btn btn-warning">Cancel</button>
 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
			      	</div>

        		</div>
        	</div>        	
	        <br><br>
	    </div>

	    <div class="modal fade" id="pilkamar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-300px">
        	<div class="modal-dialog">
        		<div class="modal-content" style="width:900px">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Pilih Kamar</h3>
        			</div>	
        			<div class="modal-body">

        				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchPengirim">
								<thead>
									<tr class="success">
										<td>Kamar</td>
										<td>Kelas</td>
										<td>Jumlah Bed</td>
										<td>Terpakai</td>
										<td width="10%" style="text-align:center;">Pilih</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Melati</td>
										<td>Kelas III</td>
										<td>2</td>
										<td>0</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td>Bed 1</td>
										<td style="text-align:center;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td>Bed 2</td>
										<td style="text-align:center;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td>Mawar</td>
										<td>Kelas III</td>
										<td>2</td>
										<td>0</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td>Bed 1</td>
										<td style="text-align:center;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td>Bed 2</td>
										<td style="text-align:center;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></td>
									</tr>

								</tbody>
							</table>												
						</div>
	        			
      				</div>
      				<br>
      				<div class="modal-footer">
 			       		<button type="button" data-dismiss="modal" class="btn btn-warning">Cancel</button>	
 			       	</div>

        		</div>
        	</div>        	
	    </div>	  
	</div>
</div>

