<div class="title">
	PASIEN ICU
</div>

<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>icu/homeicu">Pasien ICU</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>icu/icudetail">Nama Pasien</a>
	</li>
</div>

<div class="navigation" style="margin-left: 10px" >
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
    	<li class="active"><a href="#identitas" data-toggle="tab">Identitas Pasien</a></li>
		<li><a href="#rm" data-toggle="tab">Overview</a></li>
	    <li><a href="#resep" data-toggle="tab">Pemberian Resep</a></li>
	    <li><a href="#penunjang" data-toggle="tab">Pemeriksaan Penunjang</a></li>
	    <li><a href="#orderkamar" data-toggle="tab">Order Kamar Operasi</a></li>
	    <li><a href="#konsul" data-toggle="tab">Order Konsultasi Gizi</a></li>
	    <li><a href="#makan" data-toggle="tab">Daftar Permintaan Makan</a></li>
	    <li><a href="#pindah" data-toggle="tab">Pindah Pasien</a></li>
	    <li><a href="#riwayat" data-toggle="tab">Riwayat Penyakit</a></li>
	    <li><a href="#resume" data-toggle="tab">Resume Pulang</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">
   		<div class="tab-pane active" id="identitas">
	    		<div class="dropdown">
	        		<div id="titleInformasi">Identitas Pasien</div>
	            	<div class="btnBawah" id="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	            </div>
	          	<br>
	            <div class="informasi" id="info1">
		            <form class="form-horizontal" role="form">
		           		<div class="form-group">
							<label class="control-label col-md-3" >Jenis Identitas Pasien</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="jnsIdentitas" name="jenis_identitas" placeholder="Jenis identitas" disabled />
							</div>					
							<div class="col-md-3">
								<input type="text" class="form-control" id="NomorID" name="nomor_identitas" placeholder="Nomor identitas" disabled />
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-md-3">No RM</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="rm_id" name="rm_id" placeholder="No Rekam Medik " disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Nama Lengkap </label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="NamaLengkap" name="NamaLengkap" placeholder="Nama lengkap pasien" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Alias </label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="alias" name="alias" placeholder="Alias" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Jenis Kelamin</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="jk" name="jk" placeholder="Jenis Kelamin" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Golongan Darah </label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="goldarah" name="goldarah" placeholder="Golongan Darah" disabled />												
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Agama </label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="agama" name="agama" placeholder="Agama" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Tempat, tanggal lahir </label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="newTempatLahir" name="tempat_lahir" placeholder="tempat lahir" disabled/>
							</div>
							<div class="col-md-2">
								<input class="form-control input-medium date-picker" maxlength="12" type="text" value="" data-date-format="dd/mm/yyyy" id="TanggalLahir" placeholder="Tanggal Lahir" disabled />
							</div>												
						</div>			
						<div class="form-group">
							<label class="control-label col-md-3">Umur</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="umur" name="umur" placeholder="umur" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Status Kawin</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="status kawin" name="statuskawin" placeholder="Statu Kawin" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Pendidikan Terakhir</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Pendidikan Terakhir" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Pekerjaan </label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="Pekerjaan" name="pekerjaan" placeholder="Pekerjaan Pasien"/ disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Nomor Telepon</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="nomorPasien" name="nomor_pasien" placeholder="Nomor Yang bisa dihubungi" disabled />
							</div>						
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Alamat </label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="Alamat" name="alamat" placeholder="alamat lengkap pasien" disabled />
							</div>						
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Alamat KTP</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="AlamatKTP" name="alamatKTP" placeholder="alamat lengkap pasien (Sesuai KTP)" disabled />
							</div>						
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Wilayah </label>									
							<div class="col-md-2">
								<input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" disabled />
							</div>												
							<div class="col-md-2">
								<input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Kabupaten" disabled />
							</div>												
							<div class="col-md-2">
								<input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" disabled />
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan tempat tinggal" disabled />
							</div>
						</div>						
						<div class="form-group">
							<label class="control-label col-md-3">Cara Pembayaran</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="cara_bayar" name="cara_bayar" placeholder="Cara Pembayaran" disabled />
							</div>						
						</div>
					</form>
				</div>
				<br><br>
		</div>

		<div class="tab-pane" id="rm"> 
			<div class="dropdown">
		        <div id="titleInformasi">Overview  
		          	<span type="submit" class="floatright" id="tmbhOverview"><a href="#" id="tambahOver"  style="color:white"> Tambah</a></span> 
		          	<span type="submit" class="floatright" id="hstoryOverview"><a data-toggle="modal" id="tambahOver1" class="link"  href="#tabelHistory" style="color:white"> History</a></span> 
		        </div>
		            
		        <div id="btnBawahTambahCare" class="btnBawah floatright" style="margin-top:-25px;">
		           	<i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i>
		        </div> 
	       	</div>
	        <br>

	        <div class="modal fade" id="tabelHistory" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog" style="width:1300px;">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
								<h3 class="modal-title" id="myModalLabel">Details Overview</h3>
							</div>
					        <div class="modal-body">
						    	<div class="portlet-body" style="margin: 0px 10px 0px 10px">
									<table class="table table-striped table-bordered table-hover">
										<thead>
											<tr class="warning" style="text_align: center;">
												<td>Tanggal Periksa</td>
												<td>Jenis Pelayanan</td>
												<td>Anamesa</td>
												<td>Temperatur</td>
												<td>Tensi</td>
												<td>Diagnosa Utama</td>
												<td>Diagnosa Sekunder</td>
												<td>Detail Dignosa</td>
												<td>Terapi</td>
												<td>Dokter Pemeriksa</td>
												<td>Perawat Periksa</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Tanggal Periksa</td>
												<td>Jenis Pelayanan</td>
												<td>Anamesa</td>
												<td>Temperatur</td>
												<td>Tensi</td>
												<td>Diagnosa Utama</td>
												<td>Diagnosa Sekunder</td>
												<td>Detail Dignosa</td>
												<td>Terapi</td>
												<td>Dokter Pemeriksa</td>
												<td>Perawat Periksa</td>
											</tr>
											<tr>
												<td>Tanggal Periksa</td>
												<td>Jenis Pelayanan</td>
												<td>Anamesa</td>
												<td>Temperatur</td>
												<td>Tensi</td>
												<td>Diagnosa Utama</td>
												<td>Diagnosa Sekunder</td>
												<td>Detail Dignosa</td>
												<td>Terapi</td>
												<td>Dokter Pemeriksa</td>
												<td>Perawat Periksa</td>
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

	 		<div class="informasi" id="tbhCare">
	 			<form class="form-horizontal" role="form">
	 					<div class="form-group">
							<label class="control-label col-md-3">Tanggal Periksa</label>
							<div class="col-md-2" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" class="form-control isian calder" disabled data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
								</div>
							</div>
						</div>	

						<div class="form-group">
							<label class="control-label col-md-3">Jenis Pelayanan</label>
							<div class="col-md-4">
								<input type="text" class="form-control isian" name="jenisPelayanan" placeholder="Jenis Pelayanan" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Anamnesa</label>
							<div class="col-md-4">
								<input type="text" class="form-control isian" name="anamnesa" placeholder="Anamnesa" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Temperatur / Tensi</label>
							<div class="col-md-2">
								<input type="text" class="form-control isian" name="temperatur" placeholder="Temperatur" disabled>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control isian" name="tensi" placeholder="Tensi" disabled>
							</div>
						</div>				
						<div class="form-group">
							<label class="control-label col-md-3">Diagnosa Utama</label>
							<div class="col-md-1">
								<input type="text" class="form-control isian" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" disabled>
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control isian" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Diagnosa Sekunder</label>
							<div class="col-md-1">
								<input type="text" class="form-control isian" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" disabled>
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control isian" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Detail Diagnosa</label>
							<div class="col-md-5">
								<textarea class="form-control isian" name="detailDiagnosa" placeholder="Detail Diagnosa" disabled></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Terapi</label>
							<div class="col-md-5">
								<input type="text" class="form-control isian" name="terapi" placeholder="Terapi" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Dokter Pemeriksa</label>
							<div class="col-md-3">
								<input type="text" class="form-control isian" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Perawat Pemeriksa</label>
							<div class="col-md-3">
								<select class="form-control select isian" name="perawat" id="perawat" disabled>
									<option value="" selected>Kalvin</option>
									<option value="Breki">Breki</option>
									<option value="Arya"  >Arya</option>
									<option value="Jems" >Jems</option>
								</select>	
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"> </label>
							<div class="col-md-5">
						    	<button type="submit" id="simpanOver" class="btn btn-success">Simpan</button>
						    </div>
			        	</div>
			        	<br>
				</form>
			</div>  

		 	<div class="dropdown">
		 	  	<div id="titleInformasi">Uraian Tindakan <span type="submit" class="floatright" id="tndknOverview"><a data-toggle="modal" href="#tambahTindakan" id="tambahOver2" style="color:white"> Tambah</a></span></div>
		        <div id="btnBawahCare" class="btnBawah floatright"  style="margin-top:-25px;"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
		    </div>
	        <br>

	        <div class="modal fade" id="tambahTindakan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Tambah Tindakan</h3>
				   			</div>
							<div class="modal-body">
								<div class="informasi">
									<form class="form-horizontal" role="form">
						   				<div class="form-group">
											<label class="control-label col-md-4">Waktu Tidakan</label>
											<div class="col-md-5">	
												<div class="input-icon">
													<i class="fa fa-calendar"></i>
													<input type="text" style="cursor:pointer;" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii:ss" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y H:i:s");?>">
												</div>
											</div>
					        			</div>

					        			<div class="form-group">
											<label class="control-label col-md-4">JS</label>
											<div class="col-md-5">	
												<input type="text" class="form-control" name="js" placeholder="Jasa Saranan" >
											</div>
					        			</div>

					        			<div class="form-group">
											<label class="control-label col-md-4">JP</label>
											<div class="col-md-5">	
												<input type="text" class="form-control" name="jp" placeholder="Jasa PElayanan" >
											</div>
					        			</div>

					        			<div class="form-group">
											<label class="control-label col-md-4">BAKHP</label>
											<div class="col-md-5">	
												<input type="text" class="form-control" name="bakhp" placeholder="Bakhp" >
											</div>
					        			</div>

					        			<div class="form-group">
											<label class="control-label col-md-4">On Faktur</label>
											<div class="col-md-5">	
												<input type="text" class="form-control" name="onfaktur" placeholder="On Faktur" >
											</div>
					        			</div>

										<div class="form-group">
											<label class="control-label col-md-4">Paramedis</label>
											<div class="col-md-5">	
												<input type="text" class="form-control" name="paramedis" placeholder="Paramedis" >
											</div>
					        			</div>

					        			<div class="form-group">
											<label class="control-label col-md-4">Kategori Tindakan</label>
											<div class="col-md-6">
												<select class="form-control select" name="kategori" id="kategori" >
													<option value="" selected>Administrasi</option>
													<option value="Instalasi Rawat Darurat">Instalasi Rawat Darurat</option>
													<option value="Instalasi Rawat Jalan"  >Instalasi Rawat Jalan</option>
													<option value="Instalasi Rawat Inap" >Instalasi Rawat Inap</option>
												</select>												
											</div>
										</div>

					        			<div class="form-group">
											<label class="control-label col-md-4">Uraian Tindakan</label>
											<div class="col-md-7">
												<textarea class="form-control" name="tindakan" placeholder="Uraian Tindakan"></textarea>
											</div>
										</div>
				        			</form>
			        			</div>
			       			</div>
			        		<br>
			        		<div class="modal-footer">
			 			     	<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
						    </div>
					</div>
				</div>
			</div>
	
			<div class="tabelinformasi" id="tabelcare">
			        <div class="portlet-body" style="margin: 0px 40px 0px 10px">
			            <table class="table table-striped table-bordered table-hover">
							<thead>
								<tr class="info">
									<th>Waktu Tindakan</th>
									<th>Jasa Sarana</th>
									<th>Jasa Pelayanan</th>
									<th>BAKHP</th>
									<th>On faktur</th>
									<th>Paramedis</th>
									<th>Jasa Pelayanan</th>
									<th>Kategori Tindakan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>11/02/2015 15:00</td>										
									<td>10.000</td>										
									<td>10.000</td>
									<td>10.000</td>										
									<td>10.000</td>
									<td>Dokter/Pemeriksa</td>										
									<td>Pasang infus</td>
									<td>Pasang2</td>
								</tr>
								<tr>
									<td>11/02/2015 15:00</td>										
									<td>10.000</td>										
									<td>10.000</td>
									<td>10.000</td>										
									<td>10.000</td>
									<td>Dokter/Pemeriksa</td>										
									<td>Pasang infus</td>
									<td>Pasang2</td>
								</tr>
							</tbody>
						</table>
					</div>
			</div>
			<br>
		</div> 

        <div class="tab-pane" id="resep">
	 		<div class="dropdown">
    		    <div id="titleInformasi">Tambah Resep</div>
        		<div id="btnBawahTambahResep" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
        	</div>
            <br>
        	<div class="informasi" id="tambahResep">
        		<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="control-label col-md-3">Dokter</label>
						<div class="col-md-3">
							<input type="text" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Tanggal</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Deskripsi Resep</label>
						<div class="col-md-5">
							<textarea class="form-control" name="deskripsiResep" placeholder="Deskripsi Resep"></textarea>							
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Status Bayar</label>
						<div class="col-md-3">
							<input type="text" class="form-control" name="statusBayar" placeholder="Belum Lunas" readonly>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Status Ambil</label>
						<div class="col-md-3">
							<input type="text" class="form-control" name="statusBayar" placeholder="Belum Ambil" readonly>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3"> </label>
						<div class="col-md-5">
					    	<button type="submit" class="btn btn-success">Simpan</button>
					    </div>
			        </div>
			        <br>
				</form>	
			</div>

	 		<div class="dropdown">
		        <div id="titleInformasi">Tabel Resep</div>
		        <div id="btnBawahTabelResep" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
            <br>

        	<div class="tabelinformasi" id="tblResep">
	        	<div class="portlet-body" style="margin: 0px 40px 0px 10px">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info">
								<th> ID</th>
								<th> Dokter</th>
								<th>Tanggal</th>
								<th>Deskripsi Resep</th>
								<th>Status Bayar</th>
								<th>Status Ambil</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>										
								<td>Kalvin</td>										
								<td>Balidsdsafafsggasgasgasgdgaga</td>										
								<td>Balidsdsafafsggasgasgasgdgaga</td>										
								<td>Balidsdsafafsggasgasgasgdgaga</td>										
								<td>Balidsdsafafsggasgasgasgdgaga</td>										
								<td style="text-align:center">
									<a href="#"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
								</td>												
							</tr>
						</tbody>
					</table>
				</div>
			</div>
        </div>

        <div class="tab-pane" id="penunjang">
	        <div class="dropdown">
		        <div id="titleInformasi">Pemeriksaan Penunjang</div>
		        <div class="btnBawah" id="btnBawahPenunjang"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
		    </div>
		    <br>

            <div class="informasi" id="infoPenunjang">
	            <form class="form-horizontal">
	          		<div class="form-group">
						<label class="control-label col-md-3">Tanggal</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" id="tglResep" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>	
					<div class="form-group">
						<label class="control-label col-md-3" >Tujuan Penunjang</label>
						<div class="col-md-3">			
							<select class="form-control select" name="depTujuan" id="depTujuan">
								<option value="EKG" selected>EKG</option>
								<option value="USG" >USG</option>
								<option value="CT Scan" >CT Scan</option>
								<option value="MRI" >MRI</option>
								<option value="Endoscopy" >Endoscopy</option>									
								<option value="Laboratorium">Laboratorium</option>
								<option value="Radiologi"  >Radiologi</option>
								<option value="Fisioterapi" >Fisioterapi</option>
							</select>		
						</div>							
					</div>
					<div class="form-group">
						<label class="control-label col-md-3" >Pengirim</label>
						<div class="col-md-3">
							<input type="text" class="form-control" placeholder="Search Pengirim" data-toggle="modal" data-target="#searchPengirim">
						</div>
					</div>
					<div class="modal fade" id="searchPengirim" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Pilih Pengirim</h3>
			        			</div>
			        			<div class="modal-body">
				        			<div class="form-group">
										<div class="form-group">	
											<div class="col-md-4" style="margin-left:35px;">
												<input type="text" class="form-control" name="katakuncipengirim" id="katakuncipengirim" placeholder="Nama Pengirim"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>	
										</div>		
										<div style="margin-left:20px; margin-right:20px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 10px 0px 10px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchPengirim" style="width:90%;">
												<thead>
													<tr class="warning">
														<td>Nama Pengirim</td>
														<td width="10%">Pilih</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Jems</td>
														<td style="text-align:center"><i class="glyphicon glyphicon-check"></i></td>
													</tr>
													<tr>
														<td>Putu</td>
														<td style="text-align:center"><i class="glyphicon glyphicon-check"></i></td>
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
					<div class="form-group">
						<label class="control-label col-md-3" >Keterangan</label>
						<div class="col-md-5">			
							<textarea class="form-control" rows="5" id="keteranganPenunjang"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3" ></label>
						<div class="col-md-7">			
							<a href="#tambahPeri" data-toggle="modal">
								<button class="btn btn-success">Tambah</button>
							</a>		
					 	</div>							
					</div>
				</form>		
				<br>
	        </div>

	        <div class="modal fade" id="tambahPeri" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-600px">
	        	<div class="modal-dialog">
	        		<div class="modal-content" style="width:1200px">
	        			<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Tambah Jenis Pemeriksaan</h3>
	        			</div>	
	        			<div class="modal-body">
	        				<div class="navigation" style="margin-left: 10px" >
							 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
								    <li class="active"><a href="#hematologi" data-toggle="tab">Hematologi</a></li>
								    <li><a href="#hemlain" data-toggle="tab">Hematologi Lainnya</a></li>
								    <li><a href="#hemostasis" data-toggle="tab">Hemostasis</a></li>
								    <li><a href="#kimia" data-toggle="tab">Kimia Darah</a></li>
								    <li><a href="#imun" data-toggle="tab">Immunoserologi</a></li>
								    <li><a href="#tumor" data-toggle="tab">Penanda Tumor</a></li>
								    <li><a href="#hormon" data-toggle="tab">Hormon</a></li>
								    <li><a href="#urine" data-toggle="tab">Urine</a></li>
								    <li><a href="#urinlain" data-toggle="tab">Tes Urine Lainnya</a></li>
								    <li><a href="#narkoba" data-toggle="tab">Narkoba</a></li>
								    <li><a href="#feses" data-toggle="tab">Analisa Feses</a></li>
								    <li><a href="#tubuhlain" data-toggle="tab">Analisa Cairan Tubuh Lainnya</a></li>
								    <li><a href="#mikro" data-toggle="tab">Mikrobiologi</a></li>
								    <li><a href="#pato" data-toggle="tab">Pemeriksaan Patologi Anatomi</a></li>
								</ul>
							
								<div id="my-tab-content" class="tab-content" >
							        <div class="tab-pane active" id="hematologi">
							        	<table class="table table-striped table-bordered table-hover">
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Hemoglobin">Hemoglobin</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Leukosit">Leukosit</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="LED">LED</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Hitung Jenis Leukosit">Hitung Jenis Leukosit</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="DLO">DLO</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Trombosit">Trombosit</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Eritrosit">Eritrosit</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Retikulosit">Retikulosit</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Hematokrit">Hematokrit</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Masa Pendarahan">Masa Pendarahan</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Masa Pembekuan">Masa Pembekuan</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Retraksi Bekuan">Retraksi Bekuan</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="MCV">MCV</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="MCH">MCH</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Golongan Darah">Golongan Darah</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Gambaran Darah Tepi">Gambaran Darah Tepi</label>
												</td>
											</tr>
										</table>
								        <br><br>
								    </div>
								    
								    <div class="tab-pane" id="urine">
								        <table class="table table-striped table-bordered table-hover">
											<tr >
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Makroskopis">Makroskopis</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Protein">Protein</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Reduksi">Reduksi</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Sedimen">Urobilin</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Urobilinogen">Urobilinogen</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Bilirubin">Bilirubin</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Keton">Keton</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="HCG">HCG</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Protein Esbach">Protein Esbach</label>
												</td>							
											</tr>
										</table>
								        <br><br>
								    </div>
								    
								    <div class="tab-pane" id="hemlain">
								        <table class="table table-striped table-bordered table-hover">
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Asam Folat">Asam Folat</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Eletroforesa Hb">Elektroforesa Hb</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Ferritin">Ferritin</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="G-6PD">G-6PD</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Hapusan Darah Malaria">Hapusan Darah Malaria</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="HbF">HbF</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Morfologi Darah Tepi">Morfologi Darah Tepi</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Pewarnaan Sumsum Tulang">Pewarnaan Sumsum Tulang</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Serum Iron">Serum Iron(Fe)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Tes Coombs">Tes Coombs Direct/Indirect</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="TIBC">TIBC</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Transferrin">Transferrin</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Vitamin B12">Vitamin B12</label>
												</td>
											</tr>	
										</table>
									</div>
								    
								    <div class="tab-pane" id="hemostasis">
								        <table class="table table-striped table-bordered table-hover">
								        	<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="APTT">Activate Partial Protrombin Time (APTT)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="ADP">Agregasi Trombosit</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="D-Dimer">D-Dimer</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Faktor IX">Faktor IX</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Faktor VIII">Faktor VIII</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Fibrinogen">Fibrinogen</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="INR">INR</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="CT">Masa Pembekuan/CT</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="BT">Masa Pendarahan/BT</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Paket Hemostasis">Paket Hemostasis (PT,APTT,INR)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="PT">Protombin Time(PT)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="TT">Thrombin Time(TT)</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="aPTT">aPTT</label>
												</td>
											</tr>
										</table>
									</div>

								    <div class="tab-pane" id="kimia">
								        <table class="table table-striped table-bordered table-hover">
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Glukosa Darah 2 jam PP">Glukosa Darah 2 jam PP</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Glukosa Darah Puasa">Glukosa Darah Puasa</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Glukosa Darah Sewaktu">Glukosa Darah Sewaktu</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="HbA1C">HbA1C</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Tes Toleransi Glukosa">Tes Toleransi Glukosa</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Albumin">Albumin</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Alkaline Fosfatase">Alkaline Fosfatase</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Bilirubin Direct">Bilirubin Direct</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Bilirubin Indirect">Bilirubin Indirect</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Bilirubin Total">Bilirubin Total</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Gamma GT">Gamma GT</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Globulin">Globulin</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kolinesterase">Kolinesterase</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Protein Total">Protein Total</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="SGOT/AST">SGOT/AST</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="SGPT/ALT">SGPT/ALT</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Asam Urat">Asam Urat</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="BUN">BUN</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Creatinin">Creatinin</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Creatinin Clearance">Creatinin Clearance</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Ureum">Ureum</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kolesterol HDL">Kolesterol HDL</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kolesterol LDL">Kolesterol LDL</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kolesterol Total">Kolesterol Total</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Trigliserida">Trigliserida</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="CK">CK</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="CKMB">CKMB</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="h-FABP">h-FABP</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="LDH">LDH</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Troponin-I">Troponin-I</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Troponin-T">Troponin-T</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Hs-CRP">Hs-CRP</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kalium Darah">Kalium Darah</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kalsium Darah">Kalsium Darah</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Klorida Darah">Klorida Darah</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Magnesium Darah">Magnesium Darah</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Natrium Darah">Natrium Darah</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Paket Elektrolit">Paket Elektrolit(Na, K, CL)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Analisa Gas Darah">Analisa Gas Darah</label>
												</td>
											</tr>
										</table>
									</div>

								    <div class="tab-pane" id="imun">
								        <table class="table table-striped table-bordered table-hover">
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="ANA">ANA</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Anti ds-DNA">Anti ds-DNA</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Anti HAV Rapid">Anti HAV Rapid</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Anti HBc Rapid">Anti HBc Rapid</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Anti HBe Rapid">Anti HBe Rapid</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Anti HBs Rapid">Anti HBs Rapid</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Anti HCV Rapid">Anti HCV Rapid</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Anti HIV">Anti HIV</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="CD 4">CD 4</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Anti M.Tbc Rapid">Anti M.Tbc Rapid</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="ASTO/ASO(Kuantitatif)">ASTO/ASO(Kuantitatif)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="ASTO/ASO(Kualitatif)">ASTO/ASO(Kualitatif)</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="CRP(kualitatif)">CRP(kualitatif)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="CRP(kuantitatif)">CRP(kuantitatif)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Dengue Blot Rapid (IGM dan IGG)">Dengue Blot Rapid (IGM dan IGG)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Dengue NS1 Antigen">Dengue NS1 Antigen</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="HBeAg Rapid">HBeAg Rapid</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="HBsAg Rapid">HBsAg Rapid</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="HBsAg Kuantitatif">HBsAg Kuantitatif</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Anti HBs Kuantitatif">Anti HBs Kuantitatif</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Malaria Antigen Rapid">Malaria Antigen Rapid</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Paket Torch">Paket Torch</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Rheumatoid Factor">Rheumatoid Factor</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="TPHA">TPHA</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="VDRL">VDRL</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Widal">Widal</label>
												</td>
												
											</tr>
										</table>
									</div>

						        	<div class="tab-pane" id="tumor">
								        <table class="table table-striped table-bordered table-hover">
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="AFP">AFP</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Ca 15-3">Ca 15-3</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Ca 19-9">Ca 19-9</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Ca-125">Ca-125</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="CEA">CEA</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="PSA Total">PSA Total</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Free PSA">Free PSA</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="NSE">NSE</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Ca-72 4">Ca-72 4</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="CYFRA 21.1">CYFRA 21.1</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="SCC">SCC</label>
												</td>
											</tr>
										</table>
									</div>

							        <div class="tab-pane" id="hormon">
								        <table class="table table-striped table-bordered table-hover">
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="AFP">AFP</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Ca 15-3">Ca 15-3</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Beta HCG Kuantitatif">Beta HCG Kuantitatif</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Estradiol">Estradiol</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Free T-3">Free T-3</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Free T4">Free T4</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="FSH">FSH</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="LH">LH</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Progesteron">Progesteron</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Prolaktin">Prolaktin</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="T3">T3</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="T4">T4</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Testosteron">Testosteron</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="TSH-s">TSH-s</label>
												</td>
											</tr>
										</table>
									</div>

							        <div class="tab-pane" id="urinlain">
								        <table class="table table-striped table-bordered table-hover">
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Asam Urat Urin">Asam Urat Urin</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Creatinin Urin">Creatinin Urin</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Glukosa Urin">Glukosa Urin</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Mikroalbumin Urin">Mikroalbumin Urin</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Protein Bence-Jones">Protein Bence-Jones</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Protein Esbach">Protein Esbach</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Protein Kuantitatif">Protein Kuantitatif</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Protein Urin">Protein Urin</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="HCG">Tes Kehamilan (HCG)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Ureum Urin">Ureum Urin</label>
												</td>
											</tr>
										</table>
									</div>

							        <div class="tab-pane" id="narkoba">
								        <table class="table table-striped table-bordered table-hover">
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Amfetamin">Amfetamin</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Benzodiazepin">Benzodiazepin</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Morfin">Morfin</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="THC">THC</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Paket Tes Narkoba">Paket Tes Narkoba</label>
												</td>
											</tr>
										</table>
									</div>

							        <div class="tab-pane" id="feses">
								        <table class="table table-striped table-bordered table-hover">
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Feses Lengkap">Feses Lengkap (Feses Rutin + Darah Samar)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Feses Rutin">Feses Rutin</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Tes Darah Samar">Tes Darah Samar (FOB)</label>
												</td>
											</tr>
										</table>
									</div>

							        <div class="tab-pane" id="tubuhlain">
								        <table class="table table-striped table-bordered table-hover">
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="CSF">Analisa Cairan Otak (CSF)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Analisis Cairan Pleura">Analisis Cairan Pleura</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Analisis Sperma">Analisis Sperma</label>
												</td>
											</tr>
										</table>
									</div>

							        <div class="tab-pane" id="mikro">
								        <table class="table table-striped table-bordered table-hover">
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Pewarnaan BTA">Pewarnaan BTA</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kultur BTA">Kultur BTA</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kultur Cairan Tubuh">Kultur Cairan Tubuh</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kultur Darah">Kultur Darah</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kultur Feses">Kultur Feses</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kultur Gall">Kultur Gall</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kultur Mikroorganisme">Kultur Mikroorganisme</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kultur Pus">Kultur Pus</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kultur Sekret">Kultur Sekret</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kultur Sputum">Kultur Sputum</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kultur SS(Salmonella/Shigela)">Kultur SS(Salmonella/Shigela)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Kultur Urin">Kultur Urin</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Pewarnaan GO">Pewarnaan GO</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Pewarnaan Gram">Pewarnaan Gram</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Pewarnaan Jamur">Pewarnaan Jamur</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Pewarnaan Negatif">Pewarnaan Negatif</label>
												</td>
											</tr>
										</table>
									</div>

							        <div class="tab-pane" id="pato">
								        <table class="table table-striped table-bordered table-hover">
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Biopsi Jaringan Kecil">Biopsi Jaringan Kecil</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Biopsi Jaringan Sedang">Biopsi Jaringan Sedang</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Biopsi Jaringan Besar">Biopsi Jaringan Besar</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Biopsi Khusus(Hati, Ginjal, Sumsum Tulang)">Biopsi Khusus(Hati, Ginjal, Sumsum Tulang)</label>
												</td>
											</tr>
											<tr>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="VC Jaringan Beku(Potong Beku)">VC Jaringan Beku(Potong Beku)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="FNAB Deep(Toraks,Abdomen,tulang)">FNAB Deep(Toraks,Abdomen,tulang)</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="FNAB Dengan Tindakan">FNAB Dengan Tindakan</label>
												</td>
												<td>
													<label class="checkbox-inline"><input type="checkbox" value="Pap Smear">Pap Smear</label>
												</td>
											</tr>
										</table>
									</div>
						    	</div>
	        				</div>
	        			</div>	
	      				<div class="modal-footer">
	 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Tambah</button>
				      	</div>
	        		</div>        	
	        	</div>
	        </div>

	        <div class="dropdown">
		        <div id="titleInformasi">Tabel Riwayat Pemeriksaan</div>
		        <div id="btnBawahTabelRiwayat" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
            <br>

        	<div class="tabelinformasi" id="tblRiwayat">
	        	<div class="portlet-body" style="margin: 0px 40px 0px 10px">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info">
								<th> Tgl. Tindakan</th>
								<th> Departemen Penunjang</th>
								<th> Rujukan</th>
								<th> Keterangan Order</th>
								<th> Status Hasil</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>12/12/2012</td>										
								<td>Labolatorium</td>										
								<td>APS</td>										
								<td>Obat</td>										
								<td>Selesai</td>										
								<td style="text-align:center">
									<a href="#viewRiwayat" data-toggle="modal" data-placement="top"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="View Details"></i></a>
								</td>												
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="modal fade" id="viewRiwayat" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
				<div class="modal-dialog" style="width:1300px;">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        	<h3 class="modal-title" id="myModalLabel">Hasil Pemeriksaan</h3>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-3">Order ID:</label>
										<div class="col-md-9">
											<p class="form-control-static">
												 <span class="detail-order-id"> 0001</span>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-3">Tanggal Tindakan:</label>
										<div class="col-md-9">
											<p class="form-control-static">
												 <span class="detail-order-id">12/12/2012</span>
											</p>
										</div>
									</div>
								</div>
								
								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-4">Departemen Penunjang:</label>
										<div class="col-md-8">
											<p class="form-control-static">
												 <span id="detail-departemen">Labolatorium</span>
											</p>
										</div>
									</div>
								</div>
								<!--/span-->
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-3">Keterangan Order:</label>
										<div class="col-md-9">
											<p class="form-control-static">
												 <span id="detail-departemen"></span> 
											</p>
										</div>
									</div>
								</div>
								
								<!--/span-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-4">Status Hasil:</label>
										<div class="col-md-8">
											<p class="form-control-static">
												 <span id="detail-status">SELESAI</span>
											</p>
										</div>
									</div>
								</div>
								<!--/span-->
							</div>
							<hr/>
							<table class="table table-striped table-bordered table-hover" id="tabelHasilPenunjang">
								<thead>
									<tr class="info">
										<th>
											 Pemeriksaan
										</th>
										<th>
											 Jenis
										</th>
										<th>
											 Hasil Pemeriksaan
										</th>							
										<th>
											 Waktu Publikasi
										</th>							
										<th>
											 Keterangan/Rujukan
										</th>							
										<th>
											 Pemohon Periksa
										</th>							
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											 Pemeriksaan
										</td>
										<td>
											 Jenis
										</td>
										<td>
											 Hasil Pemeriksaan
										</td>							
										<td>
											 Waktu Publikasi
										</td>							
										<td>
											 Keterangan/Rujukan
										</td>							
										<td>
											 Pemohon Periksa
										</td>							
									</tr>
								</tbody>
							</table>
						</div>
						<div class="modal-footer">
				 			<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				      	</div>
					</div>
				</div>
			</div>
        </div>

        <!-- start tab order kamar operasi -->
        <div class="tab-pane" id="orderkamar">
        	<!-- dropdown order kamar operasi -->
        	<div class="dropdown">
	            <div id="titleInformasi">Order Kamar Operasi</div>
	            	<div class="btnBawah" id="btnBawahOrder"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	          	</div>
	           	<br>

	            <div class="informasi" id="infoKamar">
	            <form class="form-horizontal">
	          		<div class="form-group">
						<label class="control-label col-md-3">Tanggal Pelaksanaan</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>	
					
					<div class="form-group">
							<label class="control-label col-md-3">Dokter</label>
							<div class="col-md-3">
								<input type="text" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#resepDokter1">
							</div>
						</div>

						<div class="modal fade" id="resepDokter1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Pilih Dokter</h3>
				        			</div>
				        			<div class="modal-body">
					        			<div class="form-group">
											<div class="form-group">	
												<div class="col-md-3" style="margin-left:35px;">
													<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama dokter"/>
												</div>
												<div class="col-md-2">
													<button type="button" class="btn btn-info">Cari</button>
												</div>	
											</div>		
											<div style="margin-left:20px; margin-right:20px;"><hr></div>
											<div class="portlet-body" style="margin: 0px 10px 0px 10px">
												<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
													<thead>
														<tr class="warning">
															<td>Nama Dokter</td>
															<td width="10%">Pilih</td>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Jems</td>
															<td style="text-align:center"><i class="glyphicon glyphicon-check"></i></td>
														</tr>
														<tr>
															<td>Putu</td>
															<td style="text-align:center"><i class="glyphicon glyphicon-check"></i></td>
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
						

					<div class="form-group">
						<label class="control-label col-md-3" >Tujuan Order</label>
						<div class="col-md-3">			
							<select class="form-control select" name="order" id="order">
								<option value="Kamar Operasi" selected>Kamar Operasi</option>
								<option value="Laboratorium">Laboratorium</option>
								<option value="Radiologi"  >Radiologi</option>
								<option value="Fisioterapi" >Fisioterapi</option>
							</select>		
						</div>							
					</div>
					

					<div class="form-group">
						<label class="control-label col-md-3" >Jenis Operasi</label>
						<div class="col-md-4">			
							<input type="text" class="form-control" placeholder="Jenis Operasi" id="jnsOperasi">
				 		</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3" >Waktu Mulai</label>
						<div class="col-md-2">
							<input type="text" class="form-control" data-provide="datepicker" name="wktMulai" placeholder="<?php echo date("d/m/Y");?>" placeholder="Waktu Mulai">
						</div>					
					</div>	

					<div class="form-group">
						<label class="control-label col-md-3" >Lingkup Operasi</label>
						<div class="col-md-2">			
							<select class="form-control select" name="lkpOprasi" id="lkpOprasi">
								<option value="Elektif" selected>Elektif</option>
								<option value="Emergency">Emergency</option>
							</select>		
						</div>							
					</div>
					
					
					<div class="form-group">
						<label class="control-label col-md-3" >Alasan</label>
						<div class="col-md-5">			
							<textarea class="form-control" rows="5" id="alasanoprasi"></textarea>
				 		</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" ></label>
						<div class="col-md-7">			
							<a href="#tambahKamar" style="color:white">
							<button type="submit" class="btn btn-success">Tambah</button></a>		
					 	</div>			
					 					
					</div>	
				</form>
				<br>
			</div>	<!-- End Dropdown -->

			<div class="dropdown">
	            <div id="titleInformasi">Table Daftar Kamar Operasi</div>
	            	<div class="btnBawah" id="btnTableKamarOperasi"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	          	</div>
	           	<br>

	            <div class="tabelinformasi" id="tabelKamar">
	              	<div class="portlet-body" style="margin: 0px 40px 0px 10px">
							<table class="table table-striped table-bordered table-hover table-responsive" >
								<thead>
									<tr class="info">
										<th>No. </th>
										<th>Tanggal Tindakan</th>
										<th>Dokter</th>
										<th>Tujuan Order</th>
										<th>Keterangan Order</th>
										<th>Status Hasil</th>
										<th> </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>11</td>
										<td>4/18/2015</td>
										<td>Labolatorium</td>										
										<td>APS</td>
										<td>Bebas </td>
										<td>BELUM</td>
										<td style="text-align:center">
											<a href="#hapusResep">
											<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
										</td>										
									</tr>
									<tr>
										<td>11</td>
										<td>4/18/2015</td>
										<td>Labolatorium</td>										
										<td>APS</td>
										<td>Bebas </td>
										<td>BELUM</td>
										<td style="text-align:center">
											<a href="#hapusResep">
											<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
										</td>										
									</tr>
									<tr>
										<td>11</td>
										<td>4/18/2015</td>
										<td>Labolatorium</td>										
										<td>APS</td>
										<td>Bebas </td>
										<td>BELUM</td>
										<td style="text-align:center">
											<a href="#hapusResep">
											<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"	></i></a>
										</td>										
									</tr>
								</tbody>
							</table>
			
					</div>	<br><br>
			</div>	<!-- End Dropdown -->
        </div> <!-- End tab tambah kamar operasi -->

        <!-- start tab konsul -->
        <div class="tab-pane" id="konsul">
        	<div class="dropdown">
	            <div id="titleInformasi">Order Konsultasi Gizi</div>
	            	<div class="btnBawah" id="btnBawahOrderKonsul"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	            </div>
	            <br>
	       
	            <div class="informasi" id="infoKonsul">
		          	<form class="form-horizontal" role="form">
		          		<div class="form-group">
						<label class="control-label col-md-3">Tanggal Konsultasi</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>	

						<div class="form-group">
							<label class="control-label col-md-3" >Konsultan Gizi</label>
							<div class="col-md-3">
								<input type="text" class="form-control" placeholder="Search Konsultan" data-toggle="modal" data-target="#searchKonsultan">
							</div>
						</div>

						<div class="modal fade" id="searchKonsultan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Pilih Dokter</h3>
				        			</div>
				        			<div class="modal-body">
					        			<div class="form-group">
											<div class="form-group">	
												<div class="col-md-3" style="margin-left:35px;">
													<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama dokter"/>
												</div>
												<div class="col-md-2">
													<button type="button" class="btn btn-info">Cari</button>
												</div>	
											</div>		
											<div style="margin-left:20px; margin-right:20px;"><hr></div>
											<div class="portlet-body" style="margin: 0px 10px 0px 10px">
												<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
													<thead>
														<tr class="warning">
															<td>Nama Dokter</td>
															<td width="10%">Pilih</td>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Jems</td>
															<td style="text-align:center"><i class="glyphicon glyphicon-check"></i></td>
														</tr>
														<tr>
															<td>Putu</td>
															<td style="text-align:center"><i class="glyphicon glyphicon-check"></i></td>
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

						<div class="form-group">
							<label class="control-label col-md-3" >Kajian Gizi</label>
							<div class="col-md-7">			
								<textarea class="form-control" rows="2" id="kajianGizi"></textarea>
								
						 	</div>				
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Anamnesa Diet</label>
							<div class="col-md-7">			
								<textarea class="form-control" rows="2" id="anamnesaDiet"></textarea>
								
						 	</div>		
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Data Lab Pasien</label>
							<div class="col-md-4">
								<input type="text" class="form-control" name="dataLabPasien" placeholder="Data Lab Pasien">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Kajian Diet</label>
							<div class="col-md-7">			
								<textarea class="form-control" rows="2" id="kajianDiet"></textarea>
								
						 	</div>		
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Detail Menu Sehari-hari</label>
							<div class="col-md-7">			
								<textarea class="form-control" rows="2" id="DetailMenu"></textarea>
								
						 	</div>		
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" ></label>
							<div class="col-md-7">			
								<a href="#tambahGizi" style="color:white">
								<button type="submit" class="btn btn-success">Tambah</button></a>		
						 	</div>							
						</div>		
						<br>
					</form>
				</div>	

				<div class="dropdown">
	            <div id="titleInformasi">Table Daftar Konsultasi Gizi</div>
	            	<div class="btnBawah" id="btnTabelKonsultasi"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	          	</div>
	           	<br>

	            <div class="tabelinformasi" id="tabelKonsultasi" >
	              	<div class="portlet-body" style="margin: 0px 40px 0px 10px">
							<table class="table table-striped table-bordered table-hover" >
								<thead>
									<tr class="info">
										<th>Tanggal Konsultasi </th>
										<th>Konsultan</th>
										<th>Kajian Gizi</th>
										<th>Anamnesa Diet</th>
										<th>Data Lab Pasien</th>
										<th>Kajian Diet</th>
										<th>Detail Menu Sehari-hari</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>11/12/2015</td>
										<td>Dokter Gizi</td>
										<td>Banyak Sekali</td>										
										<td>Telur</td>
										<td>SIapa saja</td>
										<td>Diet terus</td>
										<td>Gorengan</td>
										<td style="text-align:center">
											<a href="#hapus"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
											<a href="#print"><i class="glyphicon glyphicon-print"  data-toggle="tooltip" data-placement="top" title="Print"></i></a>
										</td>										
									</tr>
									<tr>
										<td>11/12/2015</td>
										<td>Dokter Gizi</td>
										<td>Banyak Sekali</td>										
										<td>Telur</td>
										<td>SIapa saja</td>
										<td>Diet terus</td>
										<td>Gorengan</td>
										<td style="text-align:center">
											<a href="#hapus"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
											<a href="#print"><i class="glyphicon glyphicon-print"  data-toggle="tooltip" data-placement="top" title="Print"></i></a>
										</td>										
									</tr>
									<tr>
										<td>11/12/2015</td>
										<td>Dokter Gizi</td>
										<td>Banyak Sekali</td>										
										<td>Telur</td>
										<td>SIapa saja</td>
										<td>Diet terus</td>
										<td>Gorengan</td>
										<td style="text-align:center">
											<a href="#hapus"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
											<a href="#print"><i class="glyphicon glyphicon-print"  data-toggle="tooltip" data-placement="top" title="Print"></i></a>
										</td>										
									</tr>
								</tbody>
							</table>
					</div>	<br><br>
			</div>	<!-- end of dropdown -->
        </div>   <!-- end tab konsultasi -->
         <!-- tab penyakit -->

        <div class="tab-pane" id="riwayat">
         	<div class="dropdown">
            	<div id="titleInformasi">Riwayat Pasien</div>
            		<div id="btnBawahRiwayat"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            	</div>
            	<br>

	            <div class="tabelinformasi" id="infoRiwayat">
   			        <div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover table-responsive">
							<thead>
							<tr class="info">
								<th> ID </th>
								<th> Tanggal </th>
								<th> Tujuan </th>
								<th> Dokter </th>
								<th> Diagnosis </th>
								<th> Details</th>
							</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>										
									<td>Kalvin</td>										
									<td>Balidsdsafafsggasgasgasgdgaga</td>										
									<td>Balidsdsafafsggasgasgasgdgaga</td>										
									<td>Balidsdsafafsggasgasgasgdgaga</td>										
									<td style="text-align:center">
										<a href="#cekRiwayat" data-toggle="modal" data-placement="top" data-original-title="Detail RM">
										<i class="glyphicon glyphicon-search"  data-toggle="tooltip" data-placement="top" title="Lihat Detail"></i></a>
									</td>																		
								</tr>
							</tbody>
						</table>
				</div>
            </div>	

            <div class="modal fade" id="cekRiwayat" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        	<div class="modal-dialog">
	        		<div class="modal-content">
	        			<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							<h4 class="modal-title">Catan Rekam Medis <b>Nama Pasien</b>
								pada tanggal <b id="tanggal-visit-rm"> dateNow </b> </h4>
						</div>
						<div class="modal-body">
						<!--BEGIN TABS-->
							<div class="tabbable tabbable-custom tabbable-full-width">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#tab_overview" data-toggle="tab">Overview </a>
									</li>
									<li>
										<a href="#tab_therapy" data-toggle="tab">Therapy </a>
									</li>
									<li>
										<a href="#tab_resep" data-toggle="tab">Resep </a>
									</li>
									<li>
										<a href="#tab_penunjang" data-toggle="tab">Pemeriksaan Penunjang </a>
									</li>
								</ul>


								<div class="tab-content">
									<!--BEGIN Overview-->
									<div class="tab-pane active" id="tab_overview">
									</div>
									<!--END Overview-->
										
									<!--BEGIN Therapy-->
									<div class="tab-pane" id="tab_therapy">
									</div>	
									<!--END Therapy-->										

									<!--BEGIN Penunjang-->
									<div class="tab-pane" id="tab_resep">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-striped table-bordered table-hover" id="rm-history-resep">
													<thead>
														<tr>
															<th>ID</th>
															<th>Tanggal</th>
															<th>Deskripsi Resep</th>
														</tr>
													</thead>
													<tbody>
													</tbody>
												</table>										
											</div>
										</div>
									</div>	
									<!--END Penunjang-->

									<!--BEGIN Penunjang-->
									<div class="tab-pane" id="tab_penunjang">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-striped table-bordered table-hover" id="rm-history-penunjang">
													<thead>
														<tr>
															<th>ID</th>
															<th>Tanggal</th>
															<th>Departemen</th>
															<th> Keterangan Order</th>
															<th width="10%"></th>
														</tr>
													</thead>
													<tbody>
													</tbody>
												</table>										
											</div>
										</div>
									</div>	
									<!--END Penunjang-->

								</div>
							</div>
								<!-- 	end TABS	 -->
						</div>
					</div>
						<!-- /.modal-content -->
				</div>
					<!-- /.modal-dialog -->
			</div>
        </div>

        <div class="tab-pane" id="makan">
        	<div class="dropdown">
	            <div id="titleInformasi">Permintaan Makan</div>
		            <div class="btnBawah" id="btnBawahOrderMakan"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
		        </div>
		        <br>

            <div class="informasi" id="infoMakan">
            	<form class="form-horizontal" role="form">
	          		<div class="form-group">
						<label class="control-label col-md-3" >Waktu Permintaan Makan</label>
						<div class="col-md-2">
							<input type="text" class="form-control" data-provide = "datepicker" name="tglMasukRS" placeholder="<?php echo date("d/m/Y");?>" placeholder="Waktu Permintaan Makan">
						</div>					
					</div>	

					<div class="form-group">
						<label class="control-label col-md-3" >Nama Ruang</label>
						<div class="col-md-3">			
							<select class="form-control select" name="nmruang" id="namaruang">
								<option value="Ruang 1" selected>Ruang 1</option>
								<option value="Ruang 2">Ruang 2</option>
								<option value="Ruang 3"  >Ruang 3</option>
								<option value="Ruang 4" >Ruang 4</option>
							</select>		
						</div>							
					</div>	

					<div class="form-group">
						<label class="control-label col-md-3" >Nomor Bed</label>
						<div class="col-md-3">			
							<select class="form-control select" name="nmrbed" id="nomorbed">
								<option value="A-01" selected>A-01</option>
								<option value="A-02">A-02</option>
								<option value="A-03"  >A-03</option>
								<option value="A-04" >A-04</option>
							</select>		
						</div>							
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Paket Makanan</label>
						<div class="col-md-3">			
							<input type="text" class="form-control" placeholder="Search Paket Makanan" data-toggle="modal" data-target="#searchPaketMakanan">
						</div>							
					</div><!-- 
					<div class="form-group">
						<label class="control-label col-md-3" >Tipe Makanan</label>
						<div class="col-md-3">			
							<select class="form-control select" name="tipemakanan" id="tipemakanan">
								<option value="Tipe A" selected>Nasgor</option>
								<option value="Tipe B">Nasi Telor</option>
								<option value="Tipe C"  >Mie dog dog</option>
								<option value="Tipe D" >Bubur</option>
							</select>		
						</div>							
					</div> -->
					<div class="form-group">
						<label class="control-label col-md-3" >Keterangan</label>
						<div class="col-md-7">			
							<textarea class="form-control" rows="3" id="keterangan"></textarea>
					 	</div>
													
					</div>

					<div class="modal fade" id="searchPaketMakanan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Pilih Paket</h3>
			        			</div>
			        			<div class="modal-body">
				        			<div class="form-group">
										<div class="form-group">	
											<div class="col-md-3" style="margin-left:35px;">
												<input type="text" class="form-control" name="katakuncipaket" id="katakuncipaket" placeholder="Nama paket"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>	
										</div>		
										<div style="margin-left:20px; margin-right:20px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 10px 0px 10px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
												<thead>
													<tr class="warning">
														<td>Nama Paket</td>
														<td width="10%">Pilih</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Paket Kremes</td>
														<td style="text-align:center"><i class="glyphicon glyphicon-check"></i></td>
													</tr>
													<tr>
														<td>Paket Vegan</td>
														<td style="text-align:center"><i class="glyphicon glyphicon-check"></i></td>
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

					<!-- 
					<div class="form-group">
						<label class="control-label col-md-3" >Kelas
						</label>
						<div class="col-md-3">			
									<select class="form-control select" name="klas" id="klas">
										<option value="VIP" selected>VIP</option>
										<option value="I">I</option>
										<option value="II"  >II</option>
										<option value="III" >III</option>
									</select>		
						</div>							
					</div> -->
					<div class="form-group">
						<label class="control-label col-md-3" > 
						</label>
						<div class="col-md-7">			
						<br>
						<a href="#tambahMakan"><button type="submit" id="tombolMakan" class="btn btn-success">
								Tambah </button></a>		
					 	</div>							
					</div>	<br>
				</form>
			</div>	

			 <div class="dropdown">
	            <div id="titleInformasi">Table Daftar Makanan Pasien</div>
	            	<div class="btnBawah" id="btnDaftarmakan"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	          	</div>
	           	<br>

	            <div class="tabelinformasi" id="tabelDaftarMakan" >
	              	<div class="portlet-body" style="margin: 0px 40px 0px 10px">
							<table class="table table-striped table-bordered table-hover" >
								<thead>
									<tr class="info">
										<th>Tanggal Masuk </th>
										<th>Nama Ruangan</th>
										<th>No bed</th>
										<th>Jenis Makanan</th>
										<th>Tipe</th>
										<th>Keterangan</th>
										<th>Kelas</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>11/12/2015</td>
										<td>Tasdik</td>
										<td>2b</td>										
										<td>Telur</td>
										<td>Goreng</td>
										<td>3x sehari</td>
										<td>VIP</td>
										<td style="text-align:center">
											<a href="#hapus"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
										</td>										
									</tr>
									<tr>
										<td>11/12/2015</td>
										<td>Tasdik</td>
										<td>2b</td>										
										<td>Telur</td>
										<td>Goreng</td>
										<td>3x sehari</td>
										<td>VIP</td>
										<td style="text-align:center">
											<a href="#hapus"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
										</td>										
									</tr>
									<tr>
										<td>11/12/2015</td>
										<td>Tasdik</td>
										<td>2b</td>										
										<td>Telur</td>
										<td>Goreng</td>
										<td>3x sehari</td>
										<td>VIP</td>
										<td style="text-align:center">
											<a href="#hapus"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
										</td>										
									</tr>
								</tbody>
							</table>
					</div>	<br><br>
			</div>	<!-- end of dropdown -->
        </div>


		<div class="tab-pane" id="pindah">
			<div class="dropdown">
	            <div id="titleInformasi">Pindah Pasien</div>
	            <div class="btnBawah" id="btnBawahPindah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi" id="infoPindah">
            	<form class="form-horizontal" role="form">
	            	<div class="form-group">
						<label class="control-label col-md-3">Tanggal Pindah Kamar</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>	

					<div class="form-group">
						<label class="control-label col-md-3" >Pilihan Unit
						</label>
						<div class="col-md-7">			
							<select class="form-control select" name="pilUnit" id="pilUnit">
								<option value="Unit A" selected>Unit A</option>
								<option value="Unit B">Unit B</option>
								<option value="Unit C">Unit C</option>
							</select>
						</div>							
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Kelas Kamar
						</label>
						<div class="col-md-7">			
							<select class="form-control select" name="klsKamar" id="klsKamar">
								<option value="VIP" selected>VIP</option>
								<option value="I">I</option>
								<option value="II">II</option>
							</select>
						</div>							
					</div>	

					<div class="form-group">
						<label class="control-label col-md-3" >
						</label>
						<div class="col-md-7">			
						<a href="#tambahPasien"><button type="submit" id="tombolPasien" class="btn btn-success">
								Tambah </button></a>		
					 	</div>							
					</div>
				</form>	
				<br>
            </div>

            <div class="dropdown">
	            <div id="titleInformasi">Status Pindah Pasien</div>
	            	<div class="btnBawah" id="btnTableKamarOperasi"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	          	</div>
	           	<br>

	            <div class="tabelinformasi" id="tabelKamar">
	              	<div class="portlet-body" style="margin: 0px 40px 0px 10px">
							<table class="table table-striped table-bordered table-hover table-responsive" >
								<thead>
									<tr class="info">
										<th>No. </th>
										<th>Tanggal Tindakan</th>
										<th>Dokter</th>
										<th>Tujuan Order</th>
										<th>Keterangan Order</th>
										<th>Status Hasil</th>
										<th> </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>11</td>
										<td>4/18/2015</td>
										<td>Labolatorium</td>										
										<td>APS</td>
										<td>Bebas </td>
										<td>BELUM</td>
										<td style="text-align:center">
											<a href="#hapusResep">
											<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
										</td>										
									</tr>
									<tr>
										<td>11</td>
										<td>4/18/2015</td>
										<td>Labolatorium</td>										
										<td>APS</td>
										<td>Bebas </td>
										<td>BELUM</td>
										<td style="text-align:center">
											<a href="#hapusResep">
											<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
										</td>										
									</tr>
									<tr>
										<td>11</td>
										<td>4/18/2015</td>
										<td>Labolatorium</td>										
										<td>APS</td>
										<td>Bebas </td>
										<td>BELUM</td>
										<td style="text-align:center">
											<a href="#hapusResep">
											<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"	></i></a>
										</td>										
									</tr>
								</tbody>
							</table>
			
					</div>	<br><br>
			</div>	
		</div>

        <div class="tab-pane" id="resume">
        	<div class="dropdown">
            <div id="titleInformasi">Resume Pulang Pasien</div>
            <div id="btnBawahResumePulang"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>

            <div class="informasi" id="infoResumePulang">
            	<form class="form-horizontal" role="form">
            		<div class="form-group">
						<label class="control-label col-md-3">Tanggal Keluar RS</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Alasan Keluar
						</label>
						<div class="col-md-7">			
							<select class="form-control select" name="alasanKeluarPasien" id="alasanKeluarPasien">
								<option value="Pasien Dipulangkan" selected>Pasien Dipulangkan</option>									
								<option value="Pasien Dipindahkan">Pasien Dipindahkan</option>
								<option value="Atas Permintaan Sendiri">Atas Permintaan Sendiri</option>
								<option value="Rujuk Rumah Sakit Lain"  >Rujuk ke Rumah Sakit Lain</option>
								<option value="Pasien Meninggal" >Pasien Meninggal</option>
							</select>		
						</div>							
					</div>	
					
					<div class="form-group" id="alasanPlg">
						<label class="control-label col-md-3" >Alasan Pulang
						</label>
						<div class="col-md-7">			
							<textarea class="form-control" rows="3" id="alasanPulang"></textarea>
					 	</div>
					</div>

					<div class="form-group" id="alasanPindah">
						<label class="control-label col-md-3" >Alasan Pindah
						</label>
						<div class="col-md-7">			
						<textarea class="form-control" rows="3" id="alasanPindah"></textarea>
						<br>
					 	</div>
					</div>
					
					<div class="form-group" id="isiRujuk">
						<label class="control-label col-md-3" >Isian Rumah Sakit Rujukan
						</label>
						<div class="col-md-7">			
						<input type="text" class="form-control" name="isianRSRujuk" placeholder="Rumah Sakit Rujukan">
					 	</div>
					</div>				

					<div class="form-group" id="semuaPoli">
						<label class="control-label col-md-3" >Semua Poli
						</label>
						<div class="col-md-7">			
							<select class="form-control select" name="allPoli" id="allPoli">
								<option value="Poliklinik Umum" selected>Umum</option>
								<option value="Poliklinik Gigi">Gigi</option>
								<option value="Poliklinik Bedah"  >Bedah</option>
							</select>		
						</div>							
					</div>

					<div class="form-group" id="formRekDokter">
						<label class="control-label col-md-3" >Rekomendasi Dokter
						</label>
						<div class="col-md-7">			
							<select class="form-control select" name="rekDokter" id="rekDokter">
								<option value="Arya" selected>Arya</option>
								<option value="Breki">Breki</option>
								<option value="Jems">Jems</option>
							</select>		
						</div>							
					</div>
					
					<div class="form-group" id="formRekUnit">
						<label class="control-label col-md-3" >Rekomendasi Unit
						</label>
						<div class="col-md-7">			
							<select class="form-control select" name="rekUnit" id="rekUnit">
								<option value="Unit A" selected>Unit A</option>
								<option value="Unit B">Unit B</option>
								<option value="Unit C">Unit C</option>
							</select>		
					 	</div>
					</div>

					<div class="form-group" id="detPasienMeninggal">
						<label class="control-label col-md-3" >Detail Pasien Meninggal
						</label>
						<div class="col-md-7">			
							<select class="form-control select" name="detPasDie" id="detPasDie">
								<option value="sebelum dirawat" selected>Meninggal sebelum dirawat</option>
								<option value="sesudah dirawat > 48">Meninggal sesudah dirawat > 48 jam</option>
								<option value="sesudah dirawat < 48">Meninggal sesudah dirawat < 48 jam</option>
							</select>
					 	</div>							
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Pasien Meninggal</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>
					
					<div class="form-group" id="wktMati">
						<label class="control-label col-md-3" >Waktu Kematian
						</label>
						<div class="col-md-2">
							<input type="text" class="form-control" data-provide = "datepicker" name="wktMati" placeholder="<?php echo date("d/m/Y");?>" placeholder="Waktu Kematian">
						</div>					
					</div>

					<div class="form-group" id="ketMati">
						<label class="control-label col-md-3"> Keterangan Kematian
						</label>
						<div class="col-md-7">			
						<textarea class="form-control" rows="3" id="ketMati"></textarea>
						<br>
					 	</div>
					</div>

					<div class="form-group">
						<div class="form-inline">
							<label class="control-label col-md-3">Jenis Kasus <span class="required">* </span></label>
							<div class="col-md-4">
								<div class="radio-list">
									<label>
										<input type="radio"  name="jk" id="klama" value="Kasus Lama"/><span style="margin-left:15px">Kasus Lama </span> 
									</label>
									<label style="margin-left: 10px">
										<input type="radio"  name="jk" id="kbaru" value="Kasus Baru"/><span style="margin-left:15px">Kasus Baru </span>
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >
						</label>
						<div class="col-md-5">
							<a href="#simpanResume"><button type="submit" class="btn btn-success">
								Simpan </button></a>		
							&nbsp;&nbsp;
					 		<a href="#resetResume"><button type="submit" class="btn btn-warning">
								Reset </button></a>		
							&nbsp;&nbsp;
							<a href="#cancelResume"><button type="submit" class="btn btn-danger">
								Cancel </button></a>		
						
					 	</div>								
					</div>
				</form>	
				<br>
            </div>
            <br>
        </div>

					<!-- Modal tambah diagnosa -->
						<div class="modal fade" id="searchDiagnosa" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Pilih Diagnosa</h3>
				        			</div>
				        			<div class="modal-body">
										<div class="form-group">	
											<div class="col-md-5">
												<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Kata kunci"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>	
										</div>	
										<br>	
										<div style="margin-left:5px; margin-right:5px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 10px 0px 10px">
											<table class="table table-striped table-bordered table-hover" id="tabelSearchDiagnosa">
												<thead>
													<tr class="warning">
														<td width="30%;">Kode Diagnosa</td>
														<td>Keterangan</td>
														<td width="10%">Pilih</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>99999</td>
														<td>Diagnosa Lain-lain</td>
														<td style="text-align:center; cursor:pointer;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></td>
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
						<!-- end modal tambah diagnosa-->

						<!-- search dokter modal -->
						<div class="modal fade" id="searchDokter" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Pilih Dokter</h3>
				        			</div>
				        			<div class="modal-body">
										<div class="form-group">	
											<div class="col-md-5">
												<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama dokter"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>	
										</div>	
										<br>	
										<div style="margin-left:5px; margin-right:5px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 10px 0px 10px">
											<table class="table table-striped table-bordered table-hover" id="tabelSearchDiagnosa">
												<thead>
													<tr class="warning">
														<td>Nama Dokter</td>
														<td width="10%">Pilih</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Jems</td>
														<td style="text-align:center; cursor:pointer;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></td>
													</tr>
													<tr>
														<td>Putu</td>
														<td style="text-align:center; cursor:pointer;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></td>
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
						<!-- end modal -->

											
	</div>

</div>
											