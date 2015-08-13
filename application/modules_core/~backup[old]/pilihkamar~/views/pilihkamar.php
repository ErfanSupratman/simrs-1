<div class="title">
	PILIH KAMAR RAWAT INAP
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>pilihkamar/pilih">Pilih Kamar</a>
	</li>
</div>

<div class="backregis">
	<div id="my-tab-content" class="tab-content">
		
		<form method="POST" id="search_submit">
	   		<div class="search">
				<label class="control-label col-md-3">
					<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
				</label>
				<div class="col-md-4">		
					<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
				</div>
				<button type="submit" class="btn btn-danger">Cari</button>&nbsp;&nbsp;&nbsp;
			</div>	
		</form>
		<br><hr class="garis"><br>
		<label class=" col-md-1" style="margin-right:-60px; padding-top:7px;">Filter :</label>
		<div class="col-md-3" style="margin-right:-20px; margin-top:2px">
			<div class="input-daterange input-group" id="datepicker">
			    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
			    <span class="input-group-addon">to</span>
			    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" />
			</div>
		</div>
		<br><br>
		<div class="portlet box red">
			
			<div class="portlet-body" style="margin: 0px 10px 0px 10px">
				<div class="teble-responsive">
					<table class="table table-striped table-bordered table-hover table-responsive">
						<thead>
							<tr class="info">
								<th>No Rekam Medis</th>
								<th>Nama Lengkap</th>
								<th>Jenis Kelamin</th>
								<th>Tanggal Lahir</th>
								<th>Alamat Tinggal</th>
								<th>Identitas</th>
								<th>Daftarkan</th>
							</tr>
						</thead>
						<tbody id="t_body">
							<tr>
								<td>12301</td>
								<td>Arya</td>
								<td>Laki</td>
								<td>30 Mei 1994</td>										
								<td>Bali</td>
								<td>KTP</td>
								<td style="text-align:center">
									<a href="#pilihkamar" data-toggle="modal" data-original-title="Tambah Pemeriksaan">
									<i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Pemeriksaan"></i></a>
								</td>										
							</tr>
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
						<br><br>
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
								<select class="form-control select" name="carabayar" id="carabayar">
									<option value="" selected>--Pilih Cara Bayar--</option>
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
						
						<div class="form-group" id="asuransi"><br><br>
							<label class="control-label col-md-3">Nama Asuransi</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="namaAsuransi" name="namaAsuransi" placeholder="Nama Asuransi">
							</div>
						</div>
								
						<div class="form-group" id="kontrak"><br><br>
							<label class="control-label col-md-3">Nama Perusahaan</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="namaPerusahaan" name="namaPerusahaan" placeholder="Nama Perusahaan">
							</div>
						</div>

						<div class="form-group" id="kelas"><br><br>
							<label class="control-label col-md-3">Kelas Pelayanan </label>
							<div class="col-md-5">
								<select class="form-control select" name="kelasBpjs" id="kelasBpjs">
									<option value="III" selected>III</option>
									<option value="II">II</option>
									<option value="I"  >I</option>
									<option value="Utama" >Utama</option>
									<option value="VIP">VIP</option>
								</select>												
							</div>
						</div>
						
						<div class="form-group" id="noAsuransi"><br><br>
							<label class="control-label col-md-3">Nomor Asuransi</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="nomorAsuransi" placeholder="Nomor Asuransi">
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
								<select class="form-control select" id="kamar">
									<option value="" selected>--Pilih Kamar--</option>
									<option value="Kamar Bersalin">Kamar Bersalin</option>
									<option value="UGD"  >UGD</option>
									<option value="ICU" >ICU</option>
									<option value="Kamar Anak" >Kamar Anak</option>
									<option value="Umum" >Umum</option>
								</select>												
							</div>
							<div class="col-md-4">
								<select class="form-control select" id="kelas">
									<option value="" selected>--Kelas kamar--</option>
									<option value="">Regular</option>
									<option value="Kamar Bersalin">VIP</option>
									<option value="UGD"  >VVIP</option>
								</select>												
							</div>
						</div>				

      				</div>
      				<br><br>
      				<div class="modal-footer">
 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
			      	</div>

        		</div>
        	</div>        	
	        <br><br>
	    </div>
	</div>
</div>