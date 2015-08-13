<div class="title">
	ICU - TAMBAH INVOICE
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>icu/homeicu">Pasien Bersalin</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>icu/tambahtagihan">Tambah Invoice</a>
	</li>
</div>

<div class="backregis">
	<div id="my-tab-content" class="tab-content">
		<div class="dropdown">
            <div id="titleInformasi">Form Tambah Invoice</div>
       	</div>
       	<br>
       	
     	<form class="form-horizontal" role="form">
    		<div class="informasi">
       			<table width="100%">
       				<tr>
       					<td width="50%">
       						<div class="form-group">
								<label class="control-label col-md-5"> Nomor Invoice</label>
								<div class="input-group col-md-3">
									<input type="text" class="form-control" name="noinvoice" placeholder="Nomor Invoice">
								</div>
							</div>	

							<div class="form-group">
								<label class="control-label col-md-5">Visit ID</label>
								<div class="input-group col-md-3">
									<input type="text" class="form-control" style="cursor:pointer;background-color:white" readonly id="visitid" placeholder="Search Visit ID" data-toggle="modal" data-target="#searchvisit">
								</div>
							</div>

							<div class="modal fade" id="searchvisit" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
						    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
						    				<h3 class="modal-title" id="myModalLabel">Cari Visit ID</h3>
						    			</div>
						    			<div class="modal-body">
											<div class="form-group">	
												<div class="col-md-5">
													<input type="text" class="form-control" name="keyword" id="keyword" placeholder="Masukan Visit ID / Nama Pasien">
												</div>
												<div class="col-md-2">
													<button type="button" class="btn btn-info">Cari</button>
												</div>	
											</div>	
											<div style="margin-left:5px; margin-right:5px;"><hr></div>
											<div class="portlet-body" style="margin: 0px 5px 0px 5px">
												<table class="table table-striped table-bordered table-hover" id="tabelsearchvisitid">
													<thead>
														<tr class="info">
															<th>Visit ID</th>
															<th>Nama Pasien</th>
															<th width="10%">Pilih</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>123123</td>
															<td>Jems</td>
															<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
														</tr>
														<tr>
															<td>132112</td>
															<td>Putu</td>
															<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
														</tr>
													</tbody>
												</table>												
											</div>
						    			</div>
						    			<div class="modal-footer">
									       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								      	</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-5">Tanggal</label>
								<div class="input-group col-md-3" >
									<div class="input-icon">
										<i class="fa fa-calendar"></i>
										<input type="text" style="cursor:pointer; background-color:white" class="form-control" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-5"> Nomor Rekam Medis</label>
								<div class="input-group col-md-3">
									<input type="text" class="form-control" readonly name="norm" readonly placeholder="Nomor RM">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-5"> Nama Pasien</label>
								<div class="input-group col-md-4">
									<input type="text" class="form-control" readonly name="nmpasien" placeholder="Nama Pasien">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-5">Alamat </label>
								<div class="input-group col-md-5">
									<input type="text" class="form-control" readonly name="alamat" placeholder="Alamat">
								</div>
							</div>
       					</td>

       					<td width="50%" valign="top">
		       				<div style="">		
	       						<div class="form-group">
									<label class="control-label col-md-5">Jenis Kunjungan </label>
									<div class="input-group col-md-3">
										<input type="text" class="form-control" readonly name="jeniskunjungan" placeholder="Jenis Kunjungan">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5"> Kelas Perawatan</label>
									<div class="input-group col-md-3">
										<input type="text" class="form-control" readonly name="kelas" placeholder="Kelas Perawatan">
									</div>
								</div>
	       						
	       						<div class="form-group">
									<label class="control-label col-md-5">Tanggal Kunjungan</label>
									<div class="input-group col-md-3" >
										<div class="input-icon">
											<i class="fa fa-calendar"></i>
											<input type="text" style="cursor:pointer;background-color:white" class="form-control" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
										</div>
									</div>
								</div>
	       						
	       						<div class="form-group">
									<label class="control-label col-md-5">Cara Bayar</label>
									<div class="input-group col-md-3">
										<select class="form-control select" name="carabayar" id="carabayar">
											<option value="" selected>Pilih Cara Bayar</option>
											<option value="Umum">Umum</option>
											<option value="BPJS" id="op-bpjs">BPJS</option>
											<option value="Jamkesmas" >Jamkesmas</option>
											<option value="Asuransi" id="op-asuransi">Asuransi</option>
											<option value="Kontrak" id="op-kontrak">Kontrak</option>
											<option value="Gratis" >Gratis</option>
											<option value="Lain-laun">Lain-lain</option>
										</select>												
									</div>
								</div>
								
								<div class="form-group" id="asuransi">
									<label class="control-label col-md-5">Nama Asuransi</label>
									<div class="input-group col-md-4">
										<input type="text" class="form-control" id="namaAsuransi" name="namaAsuransi" placeholder="Nama Asuransi">
									</div>
								</div>
										
								<div class="form-group" id="kontrak">
									<label class="control-label col-md-5">Nama Perusahaan</label>
									<div class="input-group col-md-4">
										<input type="text" class="form-control" id="namaPerusahaan" name="namaPerusahaan" placeholder="Nama Perusahaan">
									</div>
								</div>

								<div class="form-group" id="kelas">
									<label class="control-label col-md-5">Kelas BPJS </label>
									<div class="input-group col-md-2">
										<select class="form-control select" name="kelas_pelayanan" id="kelas_pelayanan">
											<option value="III" selected>III</option>
											<option value="II">II</option>
											<option value="I"  >I</option>
											<option value="Utama" >Utama</option>
											<option value="VIP">VIP</option>
										</select>												
									</div>
								</div>
								
								<div class="form-group" id="noasuransi">
									<label class="control-label col-md-5">Nomor Asuransi</label>
									<div class="input-group col-md-4">
										<input type="text" class="form-control" name="nomorAsuransi" id="nomorAsuransi" placeholder="Nomor Asuransi">
									</div>
								</div>
							</div>
       					</td>
       				</tr>
       			</table>
       		</div>
   			<br>
			<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
			<div style="margin-left:1030px">
				<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
					<button type="reset" class="btn btn-warning">Reset</button> &nbsp;
					<a href="<?php echo base_url() ?>icu/tagihannonbpjs" class="btn btn-success" id="ivnonbpjs">Tambah Tagihan</a>
  			 		<a href="<?php echo base_url() ?>icu/tagihanbpjs" class="btn btn-success" id="ivbpjs">Tambah Tagihan</a>
				</span>
			</div>
			<br>

       	</form>
       	<br><br><br>
       	
	</div>
</div>