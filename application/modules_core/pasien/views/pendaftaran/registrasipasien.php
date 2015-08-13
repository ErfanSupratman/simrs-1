<div class="title">
	REGISTRASI PASIEN
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>daftar/daftarpasien">Registrasi Pasien</a>
	</li>
</div>

<div class="backregis">
	<input type="hidden" value="<?php echo $type;?>" id="typeregis">
	<div id="my-tab-content" class="tab-content">
		<div class="dropdown">
			<div id="titleInformasi">Informasi Umum Pasien</div>
			<div class="btnBawah" id="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div>
		</div>

		<form class="form-horizontal" id="submit_form" method="POST"> 
			<div class="informasi" id="info1">
				<div class="form-group">
					<label class="control-label col-md-3" >Jenis Identitas Pasien <span class="required">* </span></label>
					<div class="col-md-2">
						<select class="form-control select" name="jenis_id" id="newJenisID" required>
							<option value="">kartu identitas pasien</option>
							<option value="KK">KK</option>
							<option value="KTP">KTP</option>
							<option value="SIM">SIM</option>
							<option value="KARTU PELAJAR">Kartu Pelajar</option>
							<option value="PASPOR">Paspor</option>
							<option value="LAIN-LAIN">Lainnya</option>
						</select>
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control" id="newNomorID" name="nomor_id" placeholder="Nomor identitas" required/>
					</div>
				</div>	

				<div class="form-group">
					<label class="control-label col-md-3">No RM Lama</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="new_rm_id" name="rm_lama" placeholder="No Rekam Medik Lama (bila tidak diisi, sistem otomatis membuatkan"/>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-3">Nama Lengkap <span class="required">* </span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="newNamaLengkap" name="nama_lengkap" placeholder="Nama lengkap pasien" required/>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-3">Alias <span class="required">* </span></label>
					<div class="col-md-4">
						<select class="form-control select" name="alias" id="newAlias" required>
							<option value="Jenis Alias" selected>Jenis Alias</option>
							<option value="Tuan">Tuan</option>
							<option value="Nyonya"  >Nyonya</option>
							<option value="Nona" >Nona</option>
							<option value="Bapak" >Bapak</option>
							<option value="Anak"  >Anak</option>
							<option value="LAIN-LAIN" >Lainnya</option>
						</select>												
					</div>
				</div>

				<div class="form-group">
					<div class="form-inline">
						<label class="control-label col-md-3">Jenis Kelamin <span class="required">* </span></label>
						<div class="col-md-4">
							<div class="radio-list">
								<label>
									<input type="radio"  name="jk" id="newJenisKelamin" value="L" data-title="Pria" required/><span style="margin-left:10px">Pria</span> 
								</label>
								<label style="margin-left: 10px">
									<input type="radio"  name="jk" id="newJenisKelamin2" value="P" data-title="Wanita" required/><span style="margin-left:10px">Wanita </span>
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-3">Golongan Darah <span class="required">* </span></label>
					<div class="col-md-4">
						<select class="form-control select" name="gol_darah" id="newGol" required>
							<option value="" selected>--Pilih Golongan Darah--</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
							<option value="O">O</option>
						</select>												
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-3">Agama <span class="required">* </span></label>
					<div class="col-md-4">
						<select class="form-control select" name="agama" id="newAgama">
							<option value="" selected>--Pilih Agama--</option>
							<option value="ISLAM">Islam</option>
							<option value="KATHOLIK">Katholik</option>
							<option value="KRISTEN">Kristen</option>
							<option value="HINDU">Hindu</option>
							<option value="BUDHA">Budha</option>
							<option value="KONG HU CHU">Kong Hu Chu</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-3">Tempat, tanggal lahir <span class="required">* </span></label>
					<div class="col-md-2">
						<input type="text" class="form-control" id="newTempatLahir" name="tempat_lahir" placeholder="Tempat Lahir"/>
					</div>
					<div class="col-md-2">		
						<div class="input-icon">
							<i class="fa fa-calendar"></i>
							<input class="form-control input-medium" id="datepicker-reg" maxlength="12"
								type="text" style="cursor:pointer;" value="" data-date-format="dd/mm/yyyy" name="tgl_lahir" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" readonly required/>
						</div>
					</div>										
				</div>		

				<div class="form-group">
					<label class="control-label col-md-3">Umur<span class="required">* </span></label>
					<div class="col-md-2">
						<input type="text" class="form-control" id="newUmur" name="umur" placeholder="Umur" disabled />
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-3">Status Kawin<span class="required">* </span></label>
					<div class="col-md-4">
						<select class="form-control select" id="newStatusKawin" name="status_kawin" required>
							<option value="BELUM KAWIN" selected>BELUM KAWIN</option>
							<option value="KAWIN">KAWIN</option>
							<option value="JANDA / DUDA">JANDA / DUDA</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3">Pendidikan Terakhir <span class="required">* </span></label>
					<div class="col-md-4">
						<select class="form-control select" id="newJenjangPendidikan" name="pendidikan" required>
							<option value="" selected>--Pilih Pendidikan--</option>
							<option value="TIDAK ADA">TIDAK ADA</option>
							<option value="SD">SD</option>
							<option value="SMP">SMP</option>
							<option value="SMA">SMA</option>
							<option value="SMK">SMK</option>
							<option value="MADRASAH">Madrasah</option>
							<option value="S1">S1</option>
							<option value="S2">S2</option>
							<option value="S3">S3</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3">Pekerjaan <span class="required">* </span></label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="newPekerjaan" name="pekerjaan" placeholder="Pekerjaan Pasien" required/>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3">Nomor Telepon <span class="required">* </span></label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="nomorPasien" name="nomor_pasien" placeholder="Nomor Yang bisa dihubungi"/>
					</div>						
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3">Alamat Sekarang <span class="required">* </span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="newAlamat" name="alamat" placeholder="alamat lengkap pasien"/>
					</div>						
				</div>

				<div class="form-group">
					<label class="control-label col-md-3">Wilayah <span class="required"> * </span></label>
					<div class="col-md-2">
						<select class="form-control select" 
							id="skrProvinsi" name="provinsi_skr" required>
								<option value="">Pilih Provinsi</option>
								<?php foreach( $provinsi as $prov ) { ?>
								<option value="<?php echo $prov['prov_id']; ?>" >
									<?php echo $prov['nama_prov']; ?>
								</option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-2">
						<select class="form-control select" id="skrKabupaten" name="kabupaten_skr" required>
								<option value="">Pilih Kabupaten</option>
								
						</select>
					</div>												
					<div class="col-md-2">
						<select class="form-control select" id="skrKecamatan" name="kecamatan_skr" required>
				            <option value="" selected>Pilih Kecamatan</option>
						</select>
					</div>
					<div class="col-md-2">
						<select class="form-control select" name="kelurahan_skr" id="skrKelurahan" required>
				            <option value="" selected>Pilih Kelurahan</option>
				        </select>
					</div>						 
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3">Alamat KTP</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="newAlamatKTP" name="alamat_ktp" placeholder="alamat lengkap pasien (Sesuai KTP)"/>
					</div>						
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3">Wilayah KTP<span class="required">
					</span>
					</label>
					<div class="col-md-2">
						<select class="form-control select" id="newProvinsi" name="provinsi">
								<option value="">Pilih Provinsi</option>
								<?php foreach( $provinsi as $prov ) { ?>
								<option value="<?php echo $prov['prov_id']; ?>" >
									<?php echo $prov['nama_prov']; ?>
								</option>
							<?php } ?>
						</select>
					</div>

					<div class="col-md-2">
						<select class="form-control select" id="newKabupaten" name="kabupaten">
							<option value="">Pilih Kabupaten</option>
						</select>
					</div>	

					<div class="col-md-2">
						<select class="form-control select" id="newKecamatan" name="kecamatan">
				            <option value="" selected>Pilih Kecamatan</option>
						</select>
					</div>

					<div class="col-md-2">
						<select class="form-control select" name="kelurahan" id="newKelurahan" required>
				            <option value="" selected>Pilih Kelurahan</option>
				        </select>
					</div>
				</div>	

				<div class="form-group">
					<label class="control-label col-md-3" >Alergi
					</label>
					<div class="col-md-7">			
						<textarea class="form-control" rows="5" id="newALergi" name="alergi"></textarea>
						<br>
				 	</div>																			
				</div>									
			</div>

		    <div class="dropdown">
		        <div id="titleInformasi">Informasi Wali Pasien</div>
		        <div class="btnBawah" id="btnBawah2"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div>
		    </div>
		    <br/>
		    <div class="informasi" id="info2">
				<div class="form-group">
					<label class="control-label col-md-3">Nama Wali</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="newWali" name="namawali" placeholder="Nama Wali"/>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3" >Hubungan Wali dengan Pasien</label>
					<div class="col-md-4">
						<select class="form-control select" name="newHubungan" id="newHubungan">
							<option value="">--Hubungan Wali--</option>
							<option value="Ayah">Ayah</option>
							<option value="Ibu">Ibu</option>
							<option value="Anak">Anak</option>
							<option value="Suami">Suami</option>
							<option value="Istri">Istri</option>
							<option value="LAIN-LAIN">Lainnya</option>
						</select>
					</div>
				</div>	
				
				<div class="form-group">
					<label class="control-label col-md-3">Alamat Wali</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="newAlamatWali" name="alamatwali" placeholder="Alamat Wali"/>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3">Nomor Telepon Wali</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="no_telp_wali" name="nomorteleponwali" placeholder="Nomor Telepon Wali"/>
					</div>
				</div>	
				
				<div class="form-group">
					<label class="control-label col-md-3">Pekerjaan Wali</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="newJobWali" name="pekerjaanwali" placeholder="Pekerjaan Wali"/>
					</div>
				</div>
		        <br>
		    </div> 
		 	<hr>

		    <div class="centered">
			    <button type="submit" class="btn btn-success" data-toggle="modal" id="submitquery">Tambah Pasien</button>
			    <button type="reset" class="btn btn-danger">Reset Pasien</button>
			</div>
		    <br>
		    <br>		         
		</form>

		<div class="modal fade" id="daftarkanrawatjalan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		   	<form method="POST" id="submitPemeriksaan">
		    	<div class="modal-dialog">
		    		<div class="modal-content">
		    			<div class="modal-header">
		    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		    				<h3 class="modal-title" id="myModalLabel">Pilih Pemeriksaan</h3>
		    			</div>	
		    			<div class="modal-body">
		    				<div class="form-group">
								<label class="control-label col-md-3" >Tanggal Periksa </label>
								<div class="col-md-3">	
									<input date-date-format="dd/mm/yyyy" value="<?php echo date("d/m/Y");?>" type="text" class="form-control" name="date" id="inputdate" disabled/>
								</div>					
							</div>	
							
							<div class="form-group">
							<br><br>
								<label class="control-label col-md-3">No. Rekam Medis</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="noRm" placeholder="No Rekam Medis" id="modal_no_rm" disabled>
								</div>
							</div>

							<div class="form-group">
							<br><br>
								<label class="control-label col-md-3">Nama Pasien</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="nama" placeholder="Nama Pasien" id="modal_nama" disabled>
								</div>
							</div>
							
							<div class="form-group"><br><br>
								<label class="control-label col-md-3">Poliklinik</label>
								<div class="col-md-5">
									<select class="form-control select" name="poli" id="poli">
										<option value="" selected>Pilih Poliklinik</option>
										<?php foreach( $poliklinik as $poli ) { ?>
											<option value="<?php echo $poli['dept_id']; ?>" >
												<?php echo $poli['nama_dept']; ?>
											</option>
										<?php } ?>
									</select>												
								</div>
							</div>
							
							<div class="form-group"><br><br>
								<label class="control-label col-md-3">Cara Bayar</label>
								<div class="col-md-5">
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
									<select class="form-control select" name="kelas_pelayanan" id="kelas_pelayanan">
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
									<input type="text" class="form-control" name="nomorAsuransi" id="nomorAsuransi" placeholder="Nomor Asuransi">
								</div>
							</div>
							
							<div class="form-group"><br><br>
								<label class="control-label col-md-3">Cara Masuk</label>
								<div class="col-md-5">
									<select class="form-control select" name="caramasuk" id="caramasuk">
										<option value="" selected>Pilih Cara Masuk</option>
										<option value="Datang sendiri">Datang sendiri</option>
										<option value="Puskesmas"  >Puskesmas</option>
										<option value="Rujuk RS lain" >Rujuk RS lain</option>
										<option value="Instansi" >Instansi</option>
										<option value="Kasus Polisi" >Kasus Polisi</option>
										<option value="Rujukan Dokter" >Rujukan Dokter</option>
										<option value="Lain-laun">Lain-lain</option>
									</select>												
								</div>
							</div>
							
							<div class="form-group"><br><br>
								<label class="control-label col-md-3">Detail Cara Masuk</label>
								<div class="col-md-7">
									<textarea class="form-control" name="detailMasuk" id="detailmasuk" placeholder="Detail cara masuk .."></textarea> 
								</div>
							</div>
							<br><br>
							<div class="form-group" style="margin-top:10px">
								<div class="form-inline">
									<label class="control-label col-md-3">Status Pasien </label>
									<div class="col-md-7">
										<div class="radio-list">
											<label>
												<input type="radio"  name="sp" id="pasienLama" value="1" data-title="Lama"/><span style="margin-left:10px">Pasien Lama</span> 
											</label>
											<label style="margin-left: 10px">
												<input type="radio"  name="sp" id="pasienBaru" value="0" data-title="Baru"/><span style="margin-left:10px">Pasien Baru </span>
											</label>
										</div>
									</div>
								</div>
							</div><br><br>
							<div class="form-group" style="margin-top:10px">
										<div class="form-inline">
											<label class="control-label col-md-3">Jenis Kasus </label>
											<div class="col-md-7">
												<div class="radio-list">
													<label>
														<input type="radio"  name="jnsKasus" id="jenisKasusBaru" value="1" data-title="Baru"/><span style="margin-left:10px">Kasus Baru</span> 
													</label>
													<label style="margin-left: 10px">
														<input type="radio"  name="jnsKasus" id="jenisKasusLama" value="0" data-title="Lama"/><span style="margin-left:10px">Kasus Lama </span>
													</label>
												</div>
											</div>
										</div>
									</div>
									<br><br>
							<div class="form-group" style="margin-top:10px">
								<div class="form-inline">
									<label class="control-label col-md-3">Jenis Kunjungan </label>
									<div class="col-md-7">
										<div class="radio-list">
											<label>
												<input type="radio"  name="jnsKunjungan" id="knjunganLama" value="0" data-title="Lama"/><span style="margin-left:10px">Kunjungan Lama</span> 
											</label>
											<label style="margin-left: 10px">
												<input type="radio"  name="jnsKunjungan" id="knjunganBaru" value="1" data-title="Baru"/><span style="margin-left:10px">Kunjungan Baru </span>
											</label>
										</div>
									</div>
								</div>
							</div>
		  				</div>
		  				<br><br>
		  				<div class="modal-footer">
					       		<button type="submit" class="btn btn-success">Simpan</button>
				      	</div>

		    		</div>
		    	</div>        	
		    </form>
		</div>

		<div class="modal fade" id="daftarkanrawatinap" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<form method="POST" id="submitDaftarkan">
		    	<div class="modal-dialog">
		    		<div class="modal-content">
		    			<div class="modal-header">
		    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		    				<h3 class="modal-title" id="myModalLabel">Pilih Kamar Rawat Inap</h3>
		    			</div>	
		    			<div class="modal-body">
		    				<div class="form-group">
								<label class="control-label col-md-3" >Tanggal Periksa </label>
								<div class="col-md-3">	
									<input date-date-format="dd/mm/yyyy" value="<?php echo date("d/m/Y");?>" type="text" class="form-control" name="date" id="ri_inputdate" placeholder="Date Now" disabled/>
								</div>				
							</div>	
							
							<div class="form-group">
							<br><br>
								<label class="control-label col-md-3">No. Rekam Medis</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="modal_rm" placeholder="No Rekam Medis" id="ri_modal_no_rm" disabled>
								</div>
							</div>

							<div class="form-group">
							<br><br>
								<label class="control-label col-md-3">Nama Pasien</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="modal_nama" placeholder="Nama Pasien" id="ri_modal_nama" disabled>
								</div>
							</div>
														
							<div class="form-group"><br><br>
								<label class="control-label col-md-3">Cara Bayar</label>
								<div class="col-md-5">
									<select class="form-control select" name="carabayar" id="carabayar2">
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
							
							<div class="form-group" id="ri_asuransi"><br><br>
								<label class="control-label col-md-3">Nama Asuransi</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="ri_namaAsuransi" name="namaAsuransi" placeholder="Nama Asuransi">
								</div>
							</div>
									
							<div class="form-group" id="ri_kontrak"><br><br>
								<label class="control-label col-md-3">Nama Perusahaan</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="ri_namaPerusahaan" name="namaPerusahaan" placeholder="Nama Perusahaan">
								</div>
							</div>

							<div class="form-group" id="ri_kelas"><br><br>
								<label class="control-label col-md-3">Kelas Pelayanan </label>
								<div class="col-md-5">
									<select class="form-control select" name="kelasBpjs" id="ri_kelas_pelayanan">
										<option value="III" selected>III</option>
										<option value="II">II</option>
										<option value="I"  >I</option>
										<option value="Utama" >Utama</option>
										<option value="VIP">VIP</option>
									</select>												
								</div>
							</div>
							
							<div class="form-group" id="ri_noAsuransi"><br><br>
								<label class="control-label col-md-3">Nomor Asuransi</label>
								<div class="col-md-7">
									<input type="text" class="form-control" name="nomorAsuransi" id="ri_nomorAsuransi" placeholder="Nomor Asuransi">
								</div>
							</div>
							
							<div class="form-group"><br><br>
								<label class="control-label col-md-3">Cara Masuk</label>
								<div class="col-md-5">
									<select class="form-control select" name="caramasuk" id="ri_caramasuk">
										<option value="" selected>--Pilih Cara Masuk--</option>
										<option value="Datang sendiri">Datang sendiri</option>
										<option value="Puskesmas"  >Puskesmas</option>
										<option value="Rujuk RS lain" >Rujuk RS lain</option>
										<option value="Instansi" >Instansi</option>
										<option value="Kasus Polisi" >Kasus Polisi</option>
										<option value="Rujukan Dokter" >Rujukan Dokter</option>
										<option value="Lain-laun">Lain-lain</option>
									</select>												
								</div>
							</div>
							
							<div class="form-group"><br><br>
								<label class="control-label col-md-3">Detail Cara Masuk</label>
								<div class="col-md-7">
									<textarea class="form-control" name="detailMasuk" id="ri_detailmasuk" placeholder="Detail cara masuk .."></textarea> 
								</div>
							</div>
							<br>
							<!-- <div class="form-group"><br><br>
								<label class="control-label col-md-3">Pilih Kamar & Kelas Kamar</label>
								<div class="col-md-4">
									<select class="form-control select" id="kamar">
										<option value="" selected>--Pilih Kamar--</option>
										<?php foreach( $kamar as $k ) { ?>
										<option value="<?php echo $k['nama_kamar']; ?>" >
											<?php echo $k['nama_kamar']; ?>
										</option>
									<?php } ?>
									</select>												
								</div>
								<div class="col-md-4">
									<select class="form-control select" id="kelas_kamar">
										<option value="" selected>--Pilih Kelas--</option>
									</select>											
								</div>
							</div> -->

		  				</div>
		  				<br><br>
		  				<div class="modal-footer">
					       		<button type="submit" class="btn btn-success">Simpan</button>
				      	</div>

		    		</div>
		    	</div>        	
	    	</form>
    	</div>

	</div>	
</div>