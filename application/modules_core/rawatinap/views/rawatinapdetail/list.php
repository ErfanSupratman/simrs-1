<div class="title">
	RAWAT INAP
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>rawatinap/homerawatinap">Poliklinik Rawat Inap</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>rawatinap/rawatinapdetail">Nama Pasien</a>
		</li>
	
</div>

<div class="navigation" style="margin-left: 10px" >
 <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
    <li class="active"><a href="#identitas" data-toggle="tab">Identitas Pasien</a></li>
    <li><a href="#rm" data-toggle="tab">Rekam Medis</a></li>
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
            <div id="btnBawah" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="info1">
            		<div class="form-group">
												<label class="control-label col-md-3" >Jenis Identitas Pasien
												</label>
												<div class="col-md-2">
												
													<input type="text" class="form-control" 
														id="jnsIdentitas" name="jenis_identitas" placeholder="Jenis identitas" disabled />
												</div>					
												<div class="col-md-4">
													<input type="text" class="form-control" 
														id="NomorID" name="nomor_identitas" placeholder="Nomor identitas" disabled />
												</div>
					</div>	
					<br>
					<br>
					<div class="form-group">
												<label class="control-label col-md-3">No RM
												</label>
												<div class="col-md-6">
													<input type="text" class="form-control" 
														id="rm_id" name="rm_id" 
														placeholder="No Rekam Medik " disabled />
												</div>
					</div>
											<br>
											<br>
					<div class="form-group">
												<label class="control-label col-md-3">Nama Lengkap 
												</label>
												<div class="col-md-6">
													<input type="text" class="form-control" 
														id="NamaLengkap" name="NamaLengkap" placeholder="Nama lengkap pasien" disabled />
												</div>
					</div>
											<br>
											<br>
					<div class="form-group">
												<label class="control-label col-md-3">Alias 
												</label>
												<div class="col-md-2">
												
												<input type="text" class="form-control" 
														id="alias" name="alias" placeholder="Alias" disabled />
												</div>
					</div>
											<br>
											<br>
					<div class="form-group">
												<label class="control-label col-md-3">Jenis Kelamin
												</label>
												<div class="col-md-4">
													<input type="text" class="form-control" 
														id="jk" name="jk" placeholder="Jenis Kelamin" disabled />
												</div>
					</div>
					<br>
					<br>
					<br>
					<div class="form-group">
												<label class="control-label col-md-3">Golongan Darah 
												</label>
												<div class="col-md-4">
													<input type="text" class="form-control" 
														id="goldarah" name="goldarah" placeholder="Golongan Darah" disabled />												
												</div>
											</div>
											<br>
											<br>
											<div class="form-group">
												<label class="control-label col-md-3">Agama 
												</label>
												<div class="col-md-4">
												<input type="text" class="form-control" 
														id="agama" name="agama" placeholder="Agama" disabled />
												</div>
											</div>
											<br>
											<br>
											<div class="form-group">
												<label class="control-label col-md-3">Tempat, tanggal lahir 
												</label>
												<div class="col-md-2">
													<input type="text" class="form-control" 
														id="newTempatLahir" name="tempat_lahir" placeholder="tempat lahir" disabled/>
												</div>
												<div class="col-md-2">
												
													<input class="form-control input-medium date-picker" maxlength="12"
														type="text" value="" data-date-format="dd/mm/yyyy" id="TanggalLahir" placeholder="Tanggal Lahir" disabled />
													
												</div>												
											</div>				
											<br>
											<br>
											<br>
											<div class="form-group">
												<label class="control-label col-md-3">Umur</label>
												<div class="col-md-2">
													<input type="text" class="form-control" 
														id="umur" name="umur" placeholder="umur" disabled />
												</div>
											</div>
											<br>
											<br>
											<div class="form-group">
												<label class="control-label col-md-3">Status Kawin
												</label>
												<div class="col-md-4"><input type="text" class="form-control" 
														id="status kawin" name="statuskawin" placeholder="Statu Kawin" disabled />
												</div>
											</div>
											<br>
											<br>

											<div class="form-group">
												<label class="control-label col-md-3">Pendidikan Terakhir
												</label>
												<div class="col-md-4"><input type="text" class="form-control" 
														id="pendidikan" name="pendidikan" placeholder="Pendidikan Terakhir" disabled />
												</div>
											</div>
											<br>
											<br>
											<div class="form-group">
												<label class="control-label col-md-3">Pekerjaan 
												</label>
												<div class="col-md-4">
													<input type="text" class="form-control" 
														id="Pekerjaan" name="pekerjaan" placeholder="Pekerjaan Pasien"/ disabled>
												</div>
											</div>
											<br>
											<br>
											<div class="form-group">
												<label class="control-label col-md-3">Nomor Telepon</label>
												<div class="col-md-4">
													<input type="text" class="form-control" 
														id="nomorPasien" name="nomor_pasien" placeholder="Nomor Yang bisa dihubungi" disabled />
												</div>						
											</div>
											<br>
											<br>
											<div class="form-group">
												<label class="control-label col-md-3">Alamat 
												</label>
												<div class="col-md-6">
													<input type="text" class="form-control" 
														id="Alamat" name="alamat" placeholder="alamat lengkap pasien" disabled />
												</div>						
											</div>
											
											<br>
											<br>
											<div class="form-group">
												<label class="control-label col-md-3">Alamat KTP
												</label>
												<div class="col-md-6">
													<input type="text" class="form-control" 
														id="AlamatKTP" name="alamatKTP" placeholder="alamat lengkap pasien (Sesuai KTP)" disabled />
												</div>						
											</div>
											
											<br>
											<br>
											<div class="form-group">
												<label class="control-label col-md-3">Wilayah 
												</label>									
												<div class="col-md-2"><input type="text" class="form-control" 
														id="kabupaten" name="kabupaten" placeholder="Kabupaten" disabled />
												</div>												
												<div class="col-md-2"><input type="text" class="form-control" 
														id="kecamatan" name="kecamatan" placeholder="Kecamatan" disabled />
												</div>
												<div class="col-md-2">
													<input type="text" class="form-control" 
														id="kelurahan" name="kelurahan" placeholder="Kelurahan tempat tinggal" disabled />
												</div>
												<br>
												<br>
												<div class="form-group">
												<label class="control-label col-md-3">Nomor Telepon/HP
												</label>
												<div class="col-md-4">
													<input type="text" class="form-control" 
														id="nmrTelepon" name="nmrTelepon" placeholder="Nomor Telepon" disabled />
												</div>
											</div>
											<br>
											<br>
											<div class="form-group">
												<label class="control-label col-md-3">Cara Pembayaran
												</label>
												<div class="col-md-6">
													<input type="text" class="form-control" 
														id="cara_bayar" name="cara_bayar" placeholder="Cara Pembayaran" disabled />
												</div>						
											</div>
											
											<br>	
											<br>
			</div>	
			</div>
		</div>	
		
		<div class="tab-pane" id="rm"> 

		 	<a href="#tambahCatatan" data-toggle="modal" data-original-title="Tambah Catatan Rekam Medis" style="float:right; margin: 10px;">
		 		<button type="submit" class="btn btn-danger">Tambah </button>
		 	</a>

		<div class="modal fade" id="tambahCatatan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">	
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Tambah Catatan Rekam Medis</h3>
        			</div>	
        			<div class="modal-body">
        				<div class="form-group">
							<label class="control-label col-md-3" >Tanggal Periksa </label>
							<div class="col-md-3">	
								<input type="text" class="form-control" name="date" id="inputdate" placeholder="Date Now" disabled/>
							</div>				
						</div>	
						
						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Jenis Pelayanan</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="jenisPelayanan" placeholder="Jenis Pelayanan">
							</div>
						</div>

						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Anamnesa</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="anamnesa" placeholder="Anamnesa">
							</div>
						</div>

						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Temperatur</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="temperatur" placeholder="Temperatur">
							</div>
						</div>

						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Tensi</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="tensi" placeholder="Tensi">
							</div>
						</div>
						

						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Diagnosa Utama</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="diagUtama" placeholder="Diagnosa Utama">
							</div>
						</div>


						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Diagnosa Sekunder</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="diagSekunder" placeholder="Diagnosa Sekunder">
							</div>
						</div>

						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Detail Diagnosa</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="detDiag" placeholder="Detail Diagnosa">
							</div>
						</div>

						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Terapi</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="terapi" placeholder="Terapi">
							</div>
						</div>
						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Dokter Pemeriksa</label>
							<div class="col-md-7">
								<select class="form-control select" name="dokter" id="dokter">
									<option value="" selected>Kalvin</option>
									<option value="Breki">Breki</option>
									<option value="Arya"  >Arya</option>
									<option value="Jems" >Jems</option>
								</select>	
							</div>
						</div>

						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Perawat Pemeriksa</label>
							<div class="col-md-7">
								
								<select class="form-control select" name="perawat" id="perawat">
									<option value="" selected>Kalvin</option>
									<option value="Breki">Breki</option>
									<option value="Arya"  >Arya</option>
									<option value="Jems" >Jems</option>
								</select>	
							</div>
						</div>

						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Uraian Tindakan</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="tindakan" placeholder="Uraian Tindakan">
							</div>
						</div>

						<div class="form-group"><br><br>
							<label class="control-label col-md-3">Kategori Tindakan</label>
							<div class="col-md-5">
								<select class="form-control select" name="kategori" id="kategori">
									<option value="" selected>Administrasi</option>
									<option value="Instalasi Rawat Darurat">Instalasi Rawat Darurat</option>
									<option value="Instalasi Rawat Jalan"  >Instalasi Rawat Jalan</option>
									<option value="Instalasi Rawat Inap" >Instalasi Rawat Inap</option>
								</select>												
							</div>
						</div>
						
						<div class="form-group"><br><br>
							<label class="control-label col-md-3">Tarif</label>
							<div class="col-md-5">
								<select class="form-control select" name="tarif" id="tarif">
									<option value="" selected>Pilih Tarif</option>
									<option value="Tarif Periksa">Tarif Periksa - 50000</option>
								</select>												
							</div>
						</div>
						

      				</div>
      				<br><br>
      				<div class="modal-footer">
 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Tambah</button>
			      	</div>

        		</div>
        	</div>        	
        </div>   	
        <div class="portlet-body" style="margin: 0px 10px 0px 10px">
            <div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
				<thead>
				<tr class="info">
					<th>
						 Tanggal
					</th>
					<th>
						 Jenis Pelayanan
					</th>
					<th>
						 Anamnesa
					</th>
					<th>
						 Temperatur
					</th>
					<th>
						 Tensi
					</th>
					<th>
						Diagnosa Utama
					</th>

					<th>
						Diagnosa Sekunder
					</th>

					<th>
						Detail Diagnosa
					</th>

					<th>
						Terapi
					</th>

					<th>
						Dokter Pemeriksa
					</th>
					<th>
						Perawat Pemeriksa
					</th>
					<th>
						Uraian Tindakan
					</th>
					<th>
						Kategori Tindakan
					</th>

					<th>
						Tarif
					</th>

				</tr>
				</thead>
				<tbody>
				<tr>

				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>Balidsdsafafsggasgasgasgdgaga</td>										
				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>Balidsdsafafsggasgasgasgdgaga</td>										
				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>Balidsdsafafsggasgasgasgdgaga</td>
			
																
				</tr>
				</tbody>
				</table>
			</div>
			</div>
		</div>
		

        <div class="tab-pane" id="resep">

        <a href="#tambahResep" data-toggle="modal" data-original-title="Tambah Resep" style="float:right; margin: 10px;">
        	<button type="submit" id="tombolTambah" class="btn btn-danger">Tambah </button>
        </a>

		<div class="modal fade" id="tambahResep" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Tambah Resep</h3>
        			</div>	
        			<div class="modal-body">
        				<div class="form-group">
							<label class="control-label col-md-3" >Dokter </label>
							<div class="col-md-7">			
								<select class="form-control select" name="dokter" id="dokter">
									<option value="" selected>Kalvin</option>
									<option value="Breki">Breki</option>
									<option value="Arya"  >Arya</option>
									<option value="Jems" >Jems</option>
								</select>	
						
							</div>				
						</div>	
						
						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Tanggal</label>
							<div class="col-md-7">
								<input type="text" class="form-control" data-provide = "datepicker" name="tglResep" id="detpick" placeholder="Tanggal Resep">
							</div>
						</div>

						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Deskripsi Resep</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="deskResep" placeholder="Deskripsi Resep">
							</div>
						</div>

						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Status Bayar</label>
							<div class="col-md-7">
								<select class="form-control select" name="statBayar" id="statBayar">
									<option value="Sudah Bayar" selected>Sudah Bayar</option>
									<option value="Belum Bayar">Belum Bayar</option>
									
								</select>	
							</div>
						</div>

						<div class="form-group">
						<br><br>
							<label class="control-label col-md-3">Status Ambil</label>
							<div class="col-md-7">
							<select class="form-control select" name="statAmbil" id="statAmbil">
									<option value="Sudah Ambil" selected>Sudah Ambil</option>
									<option value="Belum Ambil">Belum Ambil</option>
									
							</select>
							</div>
						</div>	

      				</div>
      				<br><br>
      				<div class="modal-footer">
 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Tambah</button>
			      	</div>

        		</div>
        	</div>        	
        </div>   	
           <div class="portlet-body" style="margin: 0px 10px 0px 10px">
            <div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
				<thead>
				<tr class="info">
					<th>
						 ID
					</th>
					<th>
						 Dokter
					</th>
					<th>
						 Tanggal
					</th>
					<th>
						 Deskripsi Resep
					</th>
					<th>
						 Status Bayar
					</th>
					<th>
						Status Ambil
					</th>

					<th>
						
					</th>


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

				<td>
					<a href="#"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
				</td>
			
																
				</tr>
				</tbody>
				</table>
			</div>
			</div>
        </div>

        <div class="tab-pane" id="penunjang">
        
        </div>
        
        <div class="tab-pane" id="orderkamar">
        	<div class="dropdown">
            <div id="titleInformasi">Order Kamar Operasi</div>
            <div id="btnBawahOrder" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoKamar">
          		<div class="form-group">
					<label class="control-label col-md-3" >Tanggal Pelaksanaan
					</label>
					<div class="col-md-2">
						<input type="text" class="form-control" data-provide = "datepicker" name="tglOrder" id="detpick" placeholder="Tanggal Order">
					</div>					
				</div>	
				<br>
				<br>
				<div class="form-group">
					<label class="control-label col-md-3" >Dokter Peminta
					</label>
					<div class="col-md-7">			
								<select class="form-control select" name="dokter" id="dokter">
									<option value="" selected>Kalvin</option>
									<option value="Breki">Breki</option>
									<option value="Arya"  >Arya</option>
									<option value="Jems" >Jems</option>
								</select>		
					</div>							
				</div>	
				<br>
				<br>

				<div class="form-group">
					<label class="control-label col-md-3" >Tujuan Order
					</label>
					<div class="col-md-7">			
								<select class="form-control select" name="order" id="order">
									<option value="Kamar Operasi" selected>Kamar Operasi</option>
									<option value="Laboratorium">Laboratorium</option>
									<option value="Radiologi"  >Radiologi</option>
									<option value="Fisioterapi" >Fisioterapi</option>
								</select>		
					</div>							
				</div>
				<br>
				<br>

				<div class="form-group">
					<label class="control-label col-md-3" >Keterangan
					</label>
					<div class="col-md-7">			
					<textarea class="form-control" rows="5" id="keterangan"></textarea>
					<br>
				 	</div>
												
				</div>
				<br>
				<br>

				<div class="form-group">
					<label class="control-label col-md-3" >
					</label>
					<div class="col-md-7">			
					
					<a href="#tambahKamar"><button type="submit" class="btn btn-danger">
							Tambah </button></a>		
				 	</div>							
				</div>	
				<br><br><br><br><br><br>
			 </div>	

			 <div class="dropdown">
	            <div id="titleInformasi">Table Daftar Kamar Operasi</div>
	            	<div class="btnBawah" id="btnTableKamarOperasi"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	          	</div>
	           	<br>

	            <div class="informasi" id="tabelKamar" >
	              	<div class="portlet-body" style="margin: 0px 40px 0px 10px">
							<table class="table table-striped table-bordered table-hover table-responsive" >
								<thead>
									<tr class="info">
										<th>No. </th>
										<th>Tanggal Tindakan</th>
										<th>Departement Penunjang</th>
										<th>Rujukan</th>
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


        <div class="tab-pane" id="konsul">
        	<div class="dropdown">
            <div id="titleInformasi">Order Konsultasi Gizi</div>
            <div id="btnBawahOrderKonsul" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi" id="infoKonsul">
          		<div class="form-group">
					<label class="control-label col-md-3" >Tanggal Pelaksanaan
					</label>
					<div class="col-md-2">
						<input type="text" class="form-control" data-provide = "datepicker" name="tglOrder" id="detpick" placeholder="Tanggal Order">
					</div>					
				</div>	
				<br>
				<br>
				<div class="form-group">
					<label class="control-label col-md-3" >Dokter Peminta
					</label>
					<div class="col-md-7">			
								<select class="form-control select" name="dokter" id="dokter">
									<option value="" selected>Kalvin</option>
									<option value="Breki">Breki</option>
									<option value="Arya"  >Arya</option>
									<option value="Jems" >Jems</option>
								</select>		
					</div>							
				</div>	
				<br>
				<br>

				<div class="form-group">
					<label class="control-label col-md-3" >Tujuan Order
					</label>
					<div class="col-md-7">			
								<select class="form-control select" name="order" id="order">
									<option value="Kamar Operasi" selected>Kamar Operasi</option>
									<option value="Laboratorium">Laboratorium</option>
									<option value="Radiologi"  >Radiologi</option>
									<option value="Fisioterapi" >Fisioterapi</option>
								</select>		
					</div>							
				</div>
				<br>
				<br>

				<div class="form-group">
					<label class="control-label col-md-3" >Keterangan
					</label>
					<div class="col-md-7">			
					<textarea class="form-control" rows="5" id="keterangan"></textarea>
					<br>
				 	</div>
												
				</div>
				<br>
				<br>

				<div class="form-group">
					<label class="control-label col-md-3" >
					</label>
					<div class="col-md-7">			
					
					<a href="#tambahKonsul"><button type="submit" class="btn btn-danger">
							Tambah </button></a>		
					

				 	</div>							
				</div>	
				<br><br><br><br><br><br>
			 </div>	

			 <div class="dropdown">
	            <div id="titleInformasi">Table Daftar Konsultasi Gizi</div>
	            	<div class="btnBawah" id="btnTabelKonsultasi"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	          	</div>
	           	<br>

	            <div class="informasi" id="tabelKonsultasi" >
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

        </div>

        <div class="tab-pane" id="riwayat">
         	<div class="dropdown">
            <div id="titleInformasi">Riwayat Pasien</div>
            <div id="btnBawahRiwayat"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoRiwayat">
            <div class="portlet-body" style="margin: 0px 10px 0px 10px">
				<table class="table table-striped table-bordered table-hover">
				<thead>
				<tr class="info">
					<th>
						 ID
					</th>
					<th>
						 Tanggal
					</th>
					<th>
						 Tujuan
					</th>
					<th>
						 Dokter
					</th>
					<th>
						 Diagnosis
					</th>
					<th>
						
					</th>
				</tr>
				</thead>
				<tbody>
				<tr>

				<td>1</td>										

				<td>Kalvin</td>										
				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>Balidsdsafafsggasgasgasgdgaga</td>										

				<td>
					<a href="#cekRiwayat" data-toggle="modal" data-placement="top" data-original-title="Detail RM"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>
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
								pada tanggal <b id="tanggal-visit-rm">Tanggal Sekarang</b> </h4>
							</div>
							<div class="modal-body">
								<!--BEGIN TABS-->
								<div class="tabbable tabbable-custom tabbable-full-width">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_overview" data-toggle="tab">
											Overview </a>
										</li>
										<li>
											<a href="#tab_therapy" data-toggle="tab">
											Therapy </a>
										</li>
										<li>
											<a href="#tab_resep" data-toggle="tab">
											Resep </a>
										</li>
										<li>
											<a href="#tab_penunjang" data-toggle="tab">
											Pemeriksaan Penunjang </a>
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
																<th>
																	 ID
																</th>
																<th>
																	 Tanggal
																</th>
																<th>
																	 Deskripsi Resep
																</th>
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
																<th>
																	 ID
																</th>
																<th>
																	 Tanggal
																</th>
																<th>
																	 Departemen
																</th>
																<th>
																	 Keterangan Order
																</th>
																<th width="10%">
																</th>
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
          		<div class="form-group">
					<label class="control-label col-md-3" >Tanggal Masuk RS
					</label>
					<div class="col-md-2">
						<input type="text" class="form-control" data-provide = "datepicker" name="tglMasukRS" id="detpick" placeholder="Tanggal Masuk RS">
					</div>					
				</div>	
				<br>
				<br>
				<div class="form-group">
					<label class="control-label col-md-3" >Nama Ruang
					</label>
					<div class="col-md-3">			
								<select class="form-control select" name="nmruang" id="namaruang">
									<option value="Ruang 1" selected>Ruang 1</option>
									<option value="Ruang 2">Ruang 2</option>
									<option value="Ruang 3"  >Ruang 3</option>
									<option value="Ruang 4" >Ruang 4</option>
								</select>		
					</div>							
				</div>	
				<br>
				<br>

				<div class="form-group">
					<label class="control-label col-md-3" >Nomor Bed
					</label>
					<div class="col-md-3">			
								<select class="form-control select" name="nmrbed" id="nomorbed">
									<option value="A-01" selected>A-01</option>
									<option value="A-02">A-02</option>
									<option value="A-03"  >A-03</option>
									<option value="A-04" >A-04</option>
								</select>		
					</div>							
				</div>
				<br>
				<br>

				<div class="form-group">
					<label class="control-label col-md-3" >Jenis Makanan
					</label>
					<div class="col-md-3">			
								<select class="form-control select" name="jnsmakanan" id="jnsmakanan">
									<option value="Gorengan" selected>Gorengan</option>
									<option value="Kuah">Kuah</option>
									<option value="Pedas"  >Pedas</option>
									<option value="Basi" >Basi</option>
								</select>		
					</div>							
				</div>
				<br>
				<br>
				<div class="form-group">
					<label class="control-label col-md-3" >Tipe Makanan
					</label>
					<div class="col-md-3">			
								<select class="form-control select" name="tipemakanan" id="tipemakanan">
									<option value="Tipe A" selected>Nasgor</option>
									<option value="Tipe B">Nasi Telor</option>
									<option value="Tipe C"  >Mie dog dog</option>
									<option value="Tipe D" >Bubur</option>
								</select>		
					</div>							
				</div>
				<br>
				<br>
				<div class="form-group">
					<label class="control-label col-md-3" >Keterangan
					</label>
					<div class="col-md-7">			
					<textarea class="form-control" rows="3" id="keterangan"></textarea>
					<br>
				 	</div>
												
				</div>
				<br><br>
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
				</div>
				<br><br>
				<br>

				<div class="form-group">
					<label class="control-label col-md-3" > 
					</label>
					<div class="col-md-7">			
					<br>
					<a href="#tambahMakan" style="color:white"><button type="submit" id="tombolMakan" class="btn btn-danger">
							Tambah </button></a>		
				 	</div>							
				</div>	
				<br><br><br><br>
			 </div>	

			 <div class="dropdown">
	            <div id="titleInformasi">Table Daftar Makanan Pasien</div>
	            	<div class="btnBawah" id="btnDaftarmakan"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	          	</div>
	           	<br>

	            <div class="informasi" id="tabelDaftarMakan" >
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

            	<div class="form-group">
					<label class="control-label col-md-3" >Tanggal Pindah Kamar
					</label>
					<div class="col-md-2">
						<input type="text" class="form-control" data-provide = "datepicker" name="tglPindahKamar" id="detpick" placeholder="Tanggal Pindah Kamar">
					</div>					
				</div>	
				<br>
				<br>
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
				<br>
				<br>
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
				<br>	
				<div class="form-group">
					<label class="control-label col-md-3" >
					</label>
					<div class="col-md-7">			
						<br>
						<a href="#tambahPasien" style="color:white">
						<button type="submit" id="tombolPasien" class="btn btn-danger">	Tambah </button></a>		
				 	</div>							
				</div>	
				<br><br><br>
            </div>

            <div class="dropdown">
	            <div id="titleInformasi">Daftar Pindah Pasien</div>
	            	<div class="btnBawah" id="btnPindah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	          	</div>
	           	<br>

	            <div class="informasi" id="tabelPindahPasien" >
	              	<div class="portlet-body" style="margin: 0px 40px 0px 10px">
							<table class="table table-striped table-bordered table-hover" >
								<thead>
									<tr class="info">
										<th>Tanggal Pindah </th>
										<th>Pilihan Unit</th>
										<th>Kelas Kamar</th>
										<th>Kamar Sebelumnya</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>11/12/2015</td>
										<td>Kamar Mayat</td>
										<td>Reguler</td>										
										<td>Kamar Operasi</td>										
									</tr>
									<tr>
										<td>11/12/2015</td>
										<td>Kamar Mayat</td>
										<td>Reguler</td>										
										<td>Kamar Operasi</td>										
									</tr>
									<tr>
										<td>11/12/2015</td>
										<td>Kamar Mayat</td>
										<td>Reguler</td>										
										<td>Kamar Operasi</td>										
									</tr>
								</tbody>
							</table>
					</div>	<br><br>
			</div>	<!-- end of dropdown -->
		</div>


        <div class="tab-pane" id="resume">
        	<div class="dropdown">
            <div id="titleInformasi">Resume Pulang Pasien</div>
            <div id="btnBawahResumePulang"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoResumePulang">

            <div class="form-group">
					<label class="control-label col-md-3" >Tanggal Keluar RS
					</label>
					<div class="col-md-2">
						<input type="text" class="form-control" data-provide = "datepicker" name="tglResume" id="detpick" placeholder="Tanggal Order">
					</div>					
				</div>	
				<br>
				<br>
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

				<br>
				<br>
					<label class="control-label col-md-3" >Alasan Pulang
					</label>
					<div class="col-md-7">			
					<textarea class="form-control" rows="3" id="alasanPulang"></textarea>
					<br>
				 	</div>
												
				</div>
				<div class="form-group" id="alasanPindah">

				<br>
				<br>
					<label class="control-label col-md-3" >Alasan Pindah
					</label>
					<div class="col-md-7">			
					<textarea class="form-control" rows="3" id="alasanPindah"></textarea>
					<br>
				 	</div>
												
				</div>
				
				<div class="form-group" id="isiRujuk">

				<br>
				<br>
					<label class="control-label col-md-3" >Isian Rumah Sakit Rujukan
					</label>
					<div class="col-md-7">			
					<input type="text" class="form-control" name="isianRSRujuk" placeholder="Rumah Sakit Rujukan">
					
					<br>
				 	</div>
												
				</div>				
				<div class="form-group" id="semuaPoli">

				<br>
				<br>
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

				<br>
				<br>
					<label class="control-label col-md-3" >Rekomendasi Dokter
					</label>
					<div class="col-md-7">			
								<select class="form-control select" name="rekDokter" id="rekDokter">
									<option value="Arya" selected>Arya</option>
									<option value="Breki">Breki</option>
									<option value="Jems">Jems</option>
								</select>		
					<br>
				 	</div>
												
				</div>
				<div class="form-group" id="formRekUnit">

				<br>
				<br>
					<label class="control-label col-md-3" >Rekomendasi Unit
					</label>
					<div class="col-md-7">			
								<select class="form-control select" name="rekUnit" id="rekUnit">
									<option value="Unit A" selected>Unit A</option>
									<option value="Unit B">Unit B</option>
									<option value="Unit C">Unit C</option>
								</select>		
					<br>
				 	</div>
												
				</div>

				<div class="form-group" id="detPasienMeninggal">

				<br>
				<br>
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

				<div class="form-group" id="pasienMeninggal">

				<br>
				<br>
					<label class="control-label col-md-3" >Pasien Meninggal
					</label>
					<div class="col-md-7">			
							<input type="text" class="form-control" data-provide = "datepicker" name="tglMeninggal" id="detpick" placeholder="Tanggal Meninggal">
					
				 	</div>
												
				</div>
				<br>
				<br>
				<div class="form-group">
					<label class="control-label col-md-3" >
					</label>
					<div class="col-md-4">			
					
					<a href="#simpanResume"><button type="submit" class="btn btn-success">
							Simpan </button></a>		
					
					<a href="#resetResume" ><button type="submit" class="btn btn-warning">
							Reset </button></a>		

					<a href="#cancelResume"><button type="submit" class="btn btn-danger">
							Cancel </button></a>		
				
				 	</div>								
				</div>	
				<br><br><br><br>
            </div>
        </div>
</div>

</div>

											