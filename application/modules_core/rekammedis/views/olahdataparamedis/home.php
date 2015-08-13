
<div class="title">
	REKAM MEDIS OLAH DATA PARAMEDIS
	<!-- <div class="pull-right" style="font-size:20px;margin-top:10px;border-radius: 5px;background:white">

		INPATIENT : 
		<label id="inpatient" name="inpatient" style="color:green">524</label> --
		OUTPATIENT :
		<label id="outpatient" name="outpatient" style="color:blue">1000</label> --
		EMERGENCY :
		<label id="emergency" name="emergency" style="color:red">524</label>
	</div> -->
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>olahdataparamedis/home">Rekam Medis Olah Data Paramedis</a>
			
		</li>
	
</div>
<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	   	<li class="active"><a href="#list" data-toggle="tab">Data Dokter</a></li>
	    <li><a href="#perawat" data-toggle="tab">Data Perawat dan Bidan</a></li>
	    <li><a href="#medis" data-toggle="tab">Tenaga Medis</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">
	<div class="modal fade" id="detailPA" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-700px">
							<div class="modal-dialog">
								<div class="modal-content" style="width:1300px">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Detail</h3>
				        			</div>
				        			<div class="modal-body">
				        			
				        			<form class="form-horizontal" role="form">
						            	<div class="informasi" id="info1">
											<div class="form-group">
												<label class="control-label col-md-3" >Jenis Identitas Pasien <span class="required">* </span></label>
												<div class="col-md-4">
													<select class="form-control select detPA" name="jenis_id" id="newJenisID" required disabled>
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
													<input type="text" class="form-control detPA" id="newNomorID" name="nomor_id" placeholder="Nomor identitas" required disabled />
												</div>
											</div>	

											<div class="form-group">
												<label class="control-label col-md-3">No RM Lama</label>
												<div class="col-md-6">
													<input type="text" class="form-control detPA" id="new_rm_id" name="rm_lama" placeholder="No Rekam Medik Lama (bila tidak diisi, sistem otomatis membuatkan" disabled />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-3">Nama Lengkap <span class="required">* </span></label>
												<div class="col-md-6">
													<input type="text" class="form-control detPA" id="newNamaLengkap" name="nama_lengkap" placeholder="Nama lengkap pasien" required disabled />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-3">Alias <span class="required">* </span></label>
												<div class="col-md-4">
													<select class="form-control select detPA" name="alias" id="newAlias" required disabled>
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
														<div class="radio-list ">
															<label>
																<input type="radio" style="margin-bottom:15px" name="jk" id="newJenisKelamin" class="detPA" value="L" data-title="Pria" required checked disabled /><span style="margin-left:10px">Pria</span> 
															</label>
															<label style="margin-left: 10px">
																<input type="radio" style="margin-bottom:15px" name="jk" id="newJenisKelamin2" class="detPA" value="P" data-title="Wanita" required disabled /><span style="margin-left:10px">Wanita </span>
															</label>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-3">Golongan Darah <span class="required">* </span></label>
												<div class="col-md-4">
													<select class="form-control select detPA" name="gol_darah" id="newGol" required disabled>
														<option value="TIDAK DIKETAHUI" selected>TIDAK DIKETAHUI</option>
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
													<select class="form-control select detPA" name="agama" id="newAgama" disabled>
														<option value="TIDAK DIKETAHUI" selected>TIDAK DIKETAHUI</option>
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
													<input type="text" class="form-control detPA" id="newTempatLahir" name="tempat_lahir" placeholder="Tempat Lahir" disabled />
												</div>
												<div class="col-md-2">		
													<div class="input-icon">
														<i class="fa fa-calendar"></i>
														<input class="form-control detPA input-medium" id="datepicker-reg" maxlength="12"
															type="text" style="cursor:pointer;" value="" data-date-format="dd/mm/yyyy" name="tgl_lahir" data-provide="datepicker" disabled placeholder="<?php echo date("d/m/Y");?>" readonly required/>
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
													<select class="form-control select detPA" id="newStatusKawin" name="status_kawin" required disabled>
														<option value="BELUM KAWIN" selected>BELUM KAWIN</option>
														<option value="KAWIN">KAWIN</option>
														<option value="JANDA / DUDA">JANDA / DUDA</option>
													</select>
												</div>
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3">Pendidikan Terakhir <span class="required">* </span></label>
												<div class="col-md-4">
													<select class="form-control select detPA" id="newJenjangPendidikan" name="pendidikan" disabled required>
														<option value="TIDAK DIKETAHUI" selected>TIDAK DIKETAHUI</option>
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
													<input type="text" class="form-control detPA" id="newPekerjaan" name="pekerjaan" disabled placeholder="Pekerjaan Pasien" required/>
												</div>
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3">Nomor Telepon <span class="required">* </span></label>
												<div class="col-md-4">
													<input type="text" class="form-control detPA" id="nomorPasien" name="nomor_pasien" disabled placeholder="Nomor Yang bisa dihubungi"/>
												</div>						
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3">Alamat Sekarang <span class="required">* </span></label>
												<div class="col-md-6">
													<input type="text" class="form-control detPA" id="newAlamat" name="alamat" disabled placeholder="alamat lengkap pasien"/>
												</div>						
											</div>

											<div class="form-group">
												<label class="control-label col-md-3">Wilayah <span class="required"> * </span></label>
												<div class="col-md-2">
													<select class="form-control select detPA" 
														id="skrProvinsi" name="provinsi_skr" required disabled>
															<option value="">Pilih Provinsi</option>
															<?php foreach( $provinsi as $prov ) { ?>
															<option value="<?php echo $prov['prov_id']; ?>" >
																<?php echo $prov['nama_prov']; ?>
															</option>
														<?php } ?>
													</select>
												</div>
												<div class="col-md-2">
													<select class="form-control select detPA" 
														id="skrKabupaten" name="kabupaten_skr" required disabled>
															<option value="">Pilih Kabupaten</option>
															
													</select>
												</div>												
												<div class="col-md-2">
													<select class="form-control select detPA" id="skrKecamatan" disabled name="kecamatan_skr" required>
											            <option value="" selected>Pilih Kecamatan</option>
													</select>
												</div>
												<div class="col-md-2">
													<select class="form-control select detPA" name="kelurahan_skr" disabled id="skrKelurahan" required>
											            <option value="" selected>Pilih Kelurahan</option>
											        </select>
												</div>						 
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3">Alamat KTP</label>
												<div class="col-md-6">
													<input type="text" class="form-control detPA" id="newAlamatKTP" disabled name="alamat_ktp" placeholder="alamat lengkap pasien (Sesuai KTP)"/>
												</div>						
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3">Wilayah KTP<span class="required">
												</span>
												</label>
												<div class="col-md-2">
													<select class="form-control select detPA" 
														id="newProvinsi" name="provinsi" disabled>
															<option value="">Pilih Provinsi</option>
															<?php foreach( $provinsi as $prov ) { ?>
															<option value="<?php echo $prov['prov_id']; ?>" >
																<?php echo $prov['nama_prov']; ?>
															</option>
														<?php } ?>
													</select>
												</div>

												<div class="col-md-2">
													<select class="form-control select detPA" 
														id="newKabupaten" name="kabupaten" disabled>
															<option value="">Pilih Kabupaten</option>
															
													</select>
												</div>	

												<div class="col-md-2">
													<select class="form-control select detPA" 
														id="newKecamatan" name="kecamatan" disabled>
											            <option value="" selected>Pilih Kecamatan</option>
											           
													</select>
												</div>

												<div class="col-md-2">
													<select class="form-control select detPA" name="kelurahan" id="newKelurahan" required disabled>
											            <option value="" selected disabled>Pilih Kelurahan</option>
											        </select>
												</div>
											</div>	

											<div class="form-group">
												<label class="control-label col-md-3" >Alergi
												</label>
												<div class="col-md-7">			
													<textarea class="form-control detPA" rows="5" id="newALergi" name="alergi" disabled></textarea>
													<br>
											 	</div>																			
											</div>									
										</div>	
										<div class="informasi" id="info2">
											<div class="form-group">
												<label class="control-label col-md-3">Nama Wali</label>
												<div class="col-md-4">
													<input type="text" class="form-control detPA" id="newWali" name="namawali" placeholder="Nama Wali" disabled />
												</div>
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3" >Hubungan Wali dengan Pasien</label>
												<div class="col-md-4">
													<select class="form-control select detPA" name="newHubungan" id="newHubungan" disabled>
														<option value="">Hubungan Wali</option>
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
													<input type="text" class="form-control detPA" id="newAlamatWali" name="alamatwali" disabled placeholder="Alamat Wali"/>
												</div>
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3">Nomor Telepon Wali</label>
												<div class="col-md-4">
													<input type="text" class="form-control detPA" id="no_telp_wali" name="nomorteleponwali" disabled placeholder="Nomor Telepon Wali"/>
												</div>
											</div>	
											
											<div class="form-group">
												<label class="control-label col-md-3">Pekerjaan Wali</label>
												<div class="col-md-4">
													<input type="text" class="form-control detPA" id="newJobWali" name="pekerjaanwali" disabled placeholder="Pekerjaan Wali"/>
												</div>
											</div>
									        <br>
									    </div>  	
					            	 		
			     					</form>
										
				        			</div>
				        			<div class="modal-footer">
				 			       		<button type="button" class="btn btn-success edPA" >Edit</button>
				 			       		<button type="button" class="btn btn-success smpPA" >Simpan</button>
				 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				 			       		
							      	</div>
								</div>
							</div>
						</div>
		<div class="tab-pane active" id="list">
			<div class="informasi" style="margin-right:60px">
		       	<form method="POST" id="search_submit">
			       	<div class="search">
						<label class="control-label col-md-5">
							<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Dokter / Nomor Induk Pegawai <span class="required" style="color : red">* </span>
						</label>
						<div class="col-md-4" style="margin-left:-100px;">		
							<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor Induk Dokter" autofocus>
				        </div>
				        <button type="submit" class="btn btn-danger">Cari</button>
					</div>	
				</form>
			</div>
			<br>
			<hr class="garis"><br>
			<div class="tabelinformasi">
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
							<thead>
								<tr class="info">
									<th style="text-align:center;width:20px;">No</th>
									<th>Nama Lengkap</th>
									<th>NIP</th>
									<th>Kategori</th>
									<th>Spesialisasi</th>
									<th>Unit</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>122</td>
									<td>Arbet</td>
									<td>P</td>
									<td>1212121</td>
									<td>Selasa</td>
									<td>12</td>
																		
								</tr>
							</tbody>
						</table>
					</div>			
				</div>
			</div>  
			
	    </div>

        <div class="tab-pane" id="perawat">
	     	<div class="informasi" style="margin-right:60px">
		       	<form method="POST" id="search_submit">
			       	<div class="search">
						<label class="control-label col-md-5">
							<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Perawat / Nomor Induk Pegawai <span class="required" style="color : red">* </span>
						</label>
						<div class="col-md-4" style="margin-left:-100px;width:380px;" >		
							<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor Induk Perawat" autofocus>
				        </div>
				        <button type="submit" class="btn btn-danger">Cari</button>
					</div>	
				</form>
			</div>
			<br>
			<hr class="garis"><br>
			<div class="tabelinformasi">
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
							<thead>
								<tr class="info">
									<th style="text-align:center;width:20px;">No</th>
									<th>Nama Lengkap</th>
									<th>NIP</th>
									<th>Kategori</th>
									<th>Spesialisasi</th>
									<th>Unit</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>122</td>
									<td>Arbet</td>
									<td>P</td>
									<td>1212121</td>
									<td>Selasa</td>
									<td>12</td>
																		
								</tr>
							</tbody>
						</table>
					</div>			
				</div>
			</div>  
        </div>

        <div class="tab-pane" id="medis">   
        	<div class="informasi" style="margin-right:60px">
		       	<form method="POST" id="search_submit">
			       	<div class="search">
						<label class="control-label col-md-5">
							<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Tenaga Medis / Nomor Induk Pegawai <span class="required" style="color : red">* </span>
						</label>
						<div class="col-md-4" style="margin-left:-50px;width:450px;">		
							<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor Induk Tenaga Medis" autofocus>
				        </div>
				        <button type="submit" class="btn btn-danger">Cari</button>
					</div>	
				</form>
			</div>
			<br>
			<hr class="garis"><br>
			<div class="tabelinformasi">
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
							<thead>
								<tr class="info">
									<th style="text-align:center;width:20px;">No</th>
									<th>Nama Lengkap</th>
									<th>NIP</th>
									<th>Kategori</th>
									<th>Spesialisasi</th>
									<th>Unit</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>122</td>
									<td>Arbet</td>
									<td>P</td>
									<td>1212121</td>
									<td>Selasa</td>
									<td>12</td>
																		
								</tr>
							</tbody>
						</table>
					</div>			
				</div>
			</div>  
        </div>

       
    </div>

</div>

			