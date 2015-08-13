<div class="title">
	RETUR OBAT PASIEN
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>farmasi/homereturobat">Retur Obat</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>farmasi/tambahretur">Tambah Retur - Nama Pasien</a>
		
	</li>
</div>

<div class="backregis">
	<div id="my-tab-content" class="tab-content">
		
		<div class="dropdown">
    		<div id="titleInformasi">Identitas Pasien</div>
		</div>
		<br>        
        <form class="form-horizontal" role="form" id="submitreturpasien" method="post">
       	 	<div class="informasi">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Nomor Nota Penjualan:</label>
							<div class="col-md-5">
								<span id="nomor_nota"><?php echo $infonota['no_nota']; ?></span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">ID Resep:</label>
							<div class="col-md-5"><?php echo $infonota['resep_id']; ?></div>
						</div>
					</div>
				</div>
				<div class="row">							
					
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Tanggal Transaksi:</label>
							<div class="col-md-5"><?php echo (DateTime::createFromFormat('Y-m-d H:i:s',$infonota['waktu_penjualan'])->format('d F Y H:i:s')); ?></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Dokter :</label>
							<div class="col-md-5"><?php echo $infonota['dokter'] ?></div>
						</div>
					</div>
				</div>
				<div class="row">							
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Nama Pasien :</label>
							<div class="col-md-5"><?php echo $infonota['nama']; ?></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Jenis Kelamin :</label>
							<div class="col-md-5"><?php echo $infonota['jenis_kelamin'] ?></div>
						</div>
					</div>
				</div>
				<div class="row">							
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Alamat :</label>
							<div class="col-md-5"><?php echo $infonota['alamat_skr'] ?></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Umur :</label>
							<?php  
								$datetime1 = new DateTime();
								$datetime2 = new DateTime($infonota['tanggal_lahir']);
								$interval = $datetime1->diff($datetime2);
								$umur = ''						;
								if($interval->y > 0)
									$umur .= $interval->y ." tahun ";
							?>
							<div class="col-md-5"><?php echo $umur ?></div>
						</div>
					</div>
				</div>
				<div class="row">							
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Apoteker :</label>
							<div class="col-md-5"><?php echo $infonota['apoteker'] ?></div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Kasir:</label>
							<div class="col-md-5"><?php echo $infonota['kasir'] ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabelinformasi">
				<a href="#modalretur" id='carireturpasien' data-toggle="modal" style="margin-left:20px;"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Retur">&nbsp;Tambah Retur</i></a>
				<div class="clearfix"></div>

				<div class="portlet-body" style="margin: 10px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive" id="tblretur">
						<thead>
							<tr class="info" >
								<th> Nama Obat </th>
								<th width="150"> Jumlah Obat </th>
								<th width="150"> Jumlah Retur </th>
								<th> Satuan </th>
								<th> Harga </th>
								<th> Total Retur</th>
								<th width="20"></th>
							</tr>
						</thead>
						<tbody id="addretur">
							
						</tbody>
					</table>

					<div class="form-group">
						<div class="col-md-2 pull-right" style="width:240px;">
							<label class="control-label pull-right" style="font-size:1.8em;margin-top:-10px;" id="totalreturpasien">0</label>
						</div>
						<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
							Total(Rp.) : 
						</div>
					</div>

					<div class="form-group">
						<div class="pull-right" style="margin-bottom:10px;margin-right:18px;">
							<button class="btn btn-warning" type="button">Reset</button>
							<button class="btn btn-success" type="submit">Simpan</button>
						</div>
					</div>

				</div>
			</div>
		</form>
		
		<div class="modal fade" id="modalretur" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Pilih Obat </h3>
        			</div>
        			<div class="modal-body">

	        			<div class="form-group">
							<div class="portlet-body" style="margin: 0px 15px 0px 10px">
								<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelRetur" >
									<thead>
										<tr class="info">
											<th>Nama Obat</th>
											<th>Jumlah</th>
											<th>Satuan</th>
											<th width="10%">Pilih</th>
										</tr>
									</thead>
									<tbody>
										<?php  
											if (isset($daftarobat)) {
												foreach ($daftarobat as $value) {
													echo '<tr>
														<td>'.$value['nama_obat'].'</td>
														<td>'.$value['jumlah'].'</td>
														<td>'.$value['satuan'].'</td>
														<td style="display:none">'.$value['obat_dept_id'].'</td>
														<td style="display:none">'.($value['harga_jual'] + $value['onfaktur'] + $value['emblase']).'</td>
														<td style="display:none">'.$value['apd_id'].'</td>
														<td style="text-align:center"><a href="#" class ="addnewReturobat"><i class="glyphicon glyphicon-check"></i></a></td>
													</tr>';
												}
											}
										?>
									</tbody>
								</table>												
							</div>
						</div>
        			</div>
        			<div class="modal-footer">
 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
			      	</div>
				</div>
			</div>
		</div>
		
		<br>

	</div>
</div>

<script type="text/javascript">
	$(document).ready( function(){
			$('.addnewRetur').on('click',function(e){
				e.preventDefault();
				tambahTabelRetur('#addretur','.addnewRetur');
			});
	});

</script>