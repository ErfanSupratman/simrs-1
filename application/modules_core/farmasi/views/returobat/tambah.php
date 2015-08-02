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
	
        
        <form class="form-horizontal" role="form">
        	
       	 	<div class="informasi">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4 nama">Nomor Retur:</label>
							<div class="col-md-3 nama">	0001 </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Nomor Nota Penjualan:</label>
							<div class="col-md-5">
								20202
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">ID Resep:</label>
							<div class="col-md-5">21212</div>
						</div>
					</div>
				</div>
				<div class="row">							
					
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Tanggal Retur:</label>
							<div class="col-md-5">12 Mei 2012</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Dokter :</label>
							<div class="col-md-5">dr. James</div>
						</div>
					</div>
				</div>
				<div class="row">							
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Nama Pasien :</label>
							<div class="col-md-5">Abadi</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Jenis Kelamin :</label>
							<div class="col-md-5">Laki-laki</div>
						</div>
					</div>
				</div>
				<div class="row">							
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Alamat :</label>
							<div class="col-md-5">Jl. Raya Indah</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Umur :</label>
							<div class="col-md-5">30</div>
						</div>
					</div>
				</div>
				<div class="row">							
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Apoteker :</label>
							<div class="col-md-5">Putu</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label1 col-md-4">Kasir Retur :</label>
							<div class="col-md-5">Krishna</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tabelinformasi">
				<a href="#modalretur" data-toggle="modal" style="margin-left:20px;"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Retur">&nbsp;Tambah Retur</i></a>
				<div class="clearfix"></div>

				<div class="portlet-body" style="margin: 10px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive" id="tblretur">
						<thead>
							<tr class="info" >
								<th width="20"> No. </th>
								<th> Nama Obat </th>
								<th width="150"> Jumlah Retur </th>
								<th> Satuan </th>
								<th> Harga </th>
								<th> Total Retur</th>
								<th width="20"></th>
							</tr>
						</thead>
						<tbody id="addretur">
								<!-- <tr>
																
								</tr> -->
						</tbody>
					</table>

					<div class="form-group">
						<div class="col-md-2 pull-right" style="width:240px;">
							<label class="control-label pull-right" style="font-size:1.8em;margin-top:-10px;">1.000.000</label>
						</div>
						<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
							Total(Rp.) : 
						</div>
					</div>

					<div class="form-group">
						<div class="pull-right" style="margin-bottom:10px;margin-right:18px;">
							<button class="btn btn-warning">Reset</button>
							<button class="btn btn-success">Simpan</button>
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
										<tr>
											<td>Parame</td>
											<td>20</td>
											<td>Pil</td>
											<td style="text-align:center"><a href="#" class ="addnewRetur"><i class="glyphicon glyphicon-check"></i></a></td>
										</tr>
										<tr>
											<td>Panadol</td>
											<td>100</td>
											<td>Kapsul</td>
											<td style="text-align:center"><a href="#" class ="addnewRetur"><i class="glyphicon glyphicon-check"></i></a></td>
										</tr>

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