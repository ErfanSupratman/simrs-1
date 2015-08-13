<div class="title">
	PASIEN BERSALIN
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>bersalin/homebersalin">Pasien Bersalin</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>bersalin/bersalindetail"><?php echo $pasien['nama']; ?></a>
	<!--<span class="nama">( Marwah 1B/Bed 1&nbsp;-&nbsp;Kelas III&nbsp;-&nbsp;BPJS Kelas 2 )</span>  -->
	</li>
</div>

<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#identitas" data-toggle="tab">Identitas Pasien</a></li>
		<li><a href="#rmklinik" data-toggle="tab">Overview Klinik</a></li>
		<li><a href="#rmigd" data-toggle="tab">Overview IGD</a></li>
	    <li><a href="#ibu"  data-toggle="tab">Overview Ibu Hamil</a></li>
		<li><a href="#rm" data-toggle="tab">Overview Perawatan</a></li>
	    <li><a href="#resep" data-toggle="tab">Pemberian Resep</a></li>
	    <li><a href="#penunjang" data-toggle="tab">Pemeriksaan Penunjang</a></li>
	    <li><a href="#orderkamar" data-toggle="tab">Order Kamar Operasi</a></li>
	    <li><a href="#konsul" data-toggle="tab">Order Konsultasi Gizi</a></li>
	    <li><a href="#makan" data-toggle="tab">Daftar Permintaan Makan</a></li>
	    <li><a href="#catatan" data-toggle="tab">Catatan Persalinan</a></li>
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
							<input class="form-control" id="jnsIdentitas" name="jenis_identitas" style="border:0px;background-color:transparent;font-weight:bold" value="<?php echo $pasien['jenis_id']; ?>" disabled />
						</div>					
					</div>	
					<div class="form-group">
						<label class="control-label col-md-3" >Nomor Identitas Pasien</label>
						<div class="col-md-4">
							<input class="form-control" id="NomorID" name="nomor_identitas" style="border:0px;background-color:transparent;font-weight:bold" value="<?php echo $pasien['no_id']; ?>" disabled />
						</div>
					</div>
					<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>
						
					<div class="form-group">
						<label class="control-label col-md-3">No RM</label>
						<div class="col-md-6">
							<input style="border:0px;background-color:transparent;font-weight:bold" class="form-control" id="rm_id" name="rm_id" value="<?php echo $pasien['rm_id']; ?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Nama Lengkap </label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="NamaLengkap" name="NamaLengkap" placeholder="<?php echo $pasien['nama']; ?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Alias </label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="alias" name="alias" placeholder="<?php echo $pasien['alias'] ?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Jenis Kelamin</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="jk" name="jk" placeholder="<?php echo $pasien['jenis_kelamin'] ?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Golongan Darah </label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="goldarah" name="goldarah" placeholder="<?php echo $pasien['gol_darah']; ?>" disabled />												
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Agama </label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="agama" name="agama" placeholder="<?php echo $pasien['agama']; ?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Tempat, tanggal lahir </label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="newTempatLahir" name="tempat_lahir" placeholder="<?php echo $pasien['tempat_lahir']; ?>" disabled/>
						</div>
						<div class="col-md-2">
							<input class="form-control input-medium"  type="text" 
								placeholder="<?php 
									$tgl = strtotime($pasien['tanggal_lahir']);
									$hasil = date('d F Y', $tgl); 
									echo $hasil;
								?>" disabled />
						</div>												
					</div>			
					<div class="form-group">
						<label class="control-label col-md-3">Umur</label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="umur" name="umur" 
							placeholder="<?php  
								$datetime1 = new DateTime();
								$datetime2 = new DateTime($pasien['tanggal_lahir']);
								$interval = $datetime1->diff($datetime2);
																
								if($interval->y > 0)
									echo $interval->y ." tahun ";
								if($interval->m > 0)
									echo $interval->m." bulan ";
								if($interval->d > 0)
									echo $interval->d ." hari";
							?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Status Kawin</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="status kawin" name="statuskawin" placeholder="<?php echo $pasien['status_perkawinan']; ?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Pendidikan Terakhir</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="<?php echo $pasien['pendidikan']; ?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Pekerjaan </label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="Pekerjaan" name="pekerjaan" placeholder="<?php echo $pasien['pendidikan']; ?>"/ disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Nomor Telepon</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="nomorPasien" name="nomor_pasien" placeholder="<?php echo $pasien['no_telp']; ?>" disabled />
						</div>						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Alamat </label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="Alamat" name="alamat" placeholder="<?php echo $pasien['alamat_skr']; ?>" disabled />
						</div>						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Alamat KTP</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="AlamatKTP" name="alamatKTP" placeholder="<?php echo $pasien['alamat_ktp'] ?>" disabled />
						</div>						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Wilayah </label>									
						<div class="col-md-2">
							<input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="<?php echo $pasien['provinsi_skr']; ?>" disabled />
						</div>												
						<div class="col-md-2">
							<input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="<?php echo $pasien['kabupaten_skr']; ?>" disabled />
						</div>												
						<div class="col-md-2">
							<input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="<?php echo $pasien['kecamatan_skr']; ?>" disabled />
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="<?php echo $pasien['kelurahan_skr']; ?>" disabled />
						</div>
					</div>
						
					<div class="form-group">
						<label class="control-label col-md-3">Cara Pembayaran</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="cara_bayar" name="cara_bayar" placeholder="<?php ?>" disabled />
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
								<table id="tableOverview" class="table table-striped table-bordered table-hover">
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
											<td>Keterangan</td>
										</tr>
									</thead>
									<tbody>
										<?php  
											if (!empty($overview_history)) {
												foreach ($overview_history as $history) {
													echo "<tr>".
														"<td>".$history['tanggal']."</td>".
														"<td>Jenis Pelayanan</td>".
														"<td>".$history['anamnesa']."</td>".
														"<td>".$history['temperatur']."</td>".
														"<td>".$history['tensi']."</td>".
														"<td>".$history['diagnosa_utama']."</td>".
														"<td>".$history['diagnosa_sekunder']."</td>".
														"<td>".$history['detail_diagnosa']."</td>".
														"<td>".$history['terapi']."</td>".
														"<td>".$history['id_pemeriksa']."</td>".
														"<td>".$history['keterangan']."</td>".
														"</tr>";			
												}
											}
										?>
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
	 			<form class="form-horizontal" role="form" method="post" action="#">
 					<div class="form-group">
						<label class="control-label col-md-3" >Tanggal Periksa </label>
						<div class="col-md-2">
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" class="form-control isian calder" name="date" id="inputdate" data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" required disabled>
							</div>	
						</div>				
					</div>	
				
					<div class="form-group">
						<label class="control-label col-md-3">Jenis Pelayanan</label>
						<div class="col-md-4">
							<input type="text" class="form-control isian" id="jenisPelayanan" name="jenisPelayanan" placeholder="Jenis Pelayanan" disabled>
						</div>
					</div>
						<div class="form-group">
						<label class="control-label col-md-3">Anamnesa</label>
						<div class="col-md-4">
							<input type="text" class="form-control isian" id="anamnesa" name="anamnesa" placeholder="Anamnesa" disabled>
						</div>
					</div>
						<div class="form-group">
						<label class="control-label col-md-3">Temperatur / Tensi</label>
						<div class="col-md-2">
							<input type="text" class="form-control isian" id="temperatur" name="temperatur" placeholder="Temperatur" disabled>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control isian" id="tensi" name="tensi" placeholder="Tensi" disabled>
						</div>
					</div>				
					<div class="form-group">
						<label class="control-label col-md-3">Diagnosa Utama</label>
						<div class="col-md-1">
							<input type="text" class="form-control isian" id="kode_utama" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Diagnosa Sekunder</label>
						<div class="col-md-1">
							<input type="text" class="form-control isian" id="kode_sekunder" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Keterangan</label>
						<div class="col-md-5">
							<textarea class="form-control isian" id="keterangan" name="keterangan" placeholder="keterangan" disabled></textarea>
						</div>
					</div>
						<div class="form-group">
						<label class="control-label col-md-3">Detail Diagnosa</label>
						<div class="col-md-5">
							<textarea class="form-control isian" id="detailDiagnosa" name="detailDiagnosa" placeholder="Detail Diagnosa" disabled></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Terapi</label>
						<div class="col-md-5">
							<input type="text" class="form-control isian" id="terapi" name="terapi" placeholder="Terapi" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Alergi</label>
						<div class="col-md-5">
							<input type="text" class="form-control isian" id="alergi" name="alergi" placeholder="Alergi" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Dokter Pemeriksa</label>
						<div class="col-md-3">
							<input type="text" class="form-control isian" id="dokter" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokterOverview" disabled>
							<input type="hidden" id="iddokter">
						</div>
					</div>
						<div class="form-group">
						<label class="control-label col-md-3">Perawat Pemeriksa</label>
						<div class="col-md-3">
							<select class="form-control select isian" name="perawat" id="perawat" disabled>
								<?php  
									//ini harusnya perawat lho, bukan dokter
									if (isset($petugas)) {
										if (!empty($petugas)) {
											foreach ($petugas as $value) {
												echo '<option value="'.$value['petugas_id'].'">'.$value['nama_petugas'].'</option>';
											}
										}
									}
								?>
							</select>	
						</div>
					</div>
						<div class="form-group">
						<label class="control-label col-md-3"> </label>
						<div class="col-md-5">
							<input type="hidden" id="v_id" value="<?php echo $this->session->userdata('visit_id'); ?>">
					    	<button type="submit" id="simpanOver" class="btn btn-success">Simpan</button>
					    </div>
		        	</div>
		        	<br>
				</form>

				<div class="modal fade" id="searchDokterOverview" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
									<table class="table table-striped table-bordered table-hover" id="tabelSearchDokterOverview">
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
		        			<div class="modal-footer">
		 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
					      	</div>
						</div>
					</div>
				</div>
			</div>  

		 	<div class="dropdown">
		 	  	<div id="titleInformasi">Uraian Tindakan <span type="submit" class="floatright" id="tndknOverview"><a data-toggle="modal" href="#tambahTindakan" id="tambahOver2" style="color:white"> Tambah</a></span></div>
		        <div id="btnBawahCare" class="btnBawah floatright"  style="margin-top:-25px;"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
		    </div>
	        <br>

	        <div class="modal fade" id="tambahTindakan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        	<form class="form-horizontal" role="form" method="post" id="submitTindakan">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Tambah Tindakan</h3>
				   			</div>
							<div class="modal-body">
								<div class="informasi">
					   				<div class="form-group">
										<label class="control-label col-md-4">Waktu Tindakan</label>
										<div class="col-md-4">	
											<div class="input-icon">
												<i class="fa fa-calendar"></i>
												<input type="text" style="cursor:pointer;" class="form-control isian calder" id="inputwaktutindakan" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" required>
											</div>
										</div>
				        			</div>

				        			<div class="form-group">
										<label class="control-label col-md-4">Nama Tindakan</label>
										<div class="col-md-6">
											<select class="form-control select" name="namaTindakan" id="namaTindakan" >
												<?php  
													foreach ($tindakan as $key) {
														echo "<option value=".$key['tindakan_id'].">".$key['nama_tindakan']."</option>";		
													}
												?>
												
											</select>												
										</div>
									</div>

				        			<div class="form-group">
										<label class="control-label col-md-4">JS</label>
										<div class="col-md-5">	
											<input type="text" class="form-control" id="js" name="js" placeholder="Jasa Saranan" >
										</div>
				        			</div>

				        			<div class="form-group">
										<label class="control-label col-md-4">JP</label>
										<div class="col-md-5">	
											<input type="text" class="form-control" id="jp" name="jp" placeholder="Jasa PElayanan" >
										</div>
				        			</div>

				        			<div class="form-group">
										<label class="control-label col-md-4">BAKHP</label>
										<div class="col-md-5">	
											<input type="text" class="form-control" id="bakhp" name="bakhp" placeholder="Bakhp" >
										</div>
				        			</div>

				        			<div class="form-group">
										<label class="control-label col-md-4">On Faktur</label>
										<div class="col-md-5">	
											<input type="text" class="form-control" id="onfaktur" name="onfaktur" placeholder="On Faktur" >
										</div>
				        			</div>

									<div class="form-group">
										<label class="control-label col-md-4">Paramedis</label>
										<div class="col-md-5">	
											<input type="text" class="form-control" id="paramedis" name="paramedis" placeholder="Paramedis" >
										</div>
				        			</div>

				        			<div class="form-group">
										<label class="control-label col-md-4">Kategori Tindakan</label>
										<div class="col-md-6">
											<select class="form-control select" name="kategori" id="kategori" >
												<?php  
													foreach ($kategori as $kat) {
														echo '<option value="'.$kat["kat_id"].'">'.$kat["keterangan"].'</option>';		
													}
												?>
											</select>												
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-4">Uraian Tindakan</label>
										<div class="col-md-7">
											<textarea class="form-control" name="tindakan" id="uraiantindakan" placeholder="Uraian Tindakan"></textarea>
										</div>
									</div>
			        			</div>
			       			</div>
			        		<br><br>
			        		<div class="modal-footer">
			        			<input type="hidden" id="visit_id" value="<?php echo $this->session->userdata('visit_id'); ?>">
			 			     	<button type="submit" class="btn btn-success" id="saveTindakan">Simpan</button>
						    </div>
						</div>
					</div>
				</form>
			</div>
	
			<div class="tabelinformasi" id="tabelcare">
			        <div class="portlet-body" style="margin: 0px 40px 0px 10px">
			            <table class="table table-striped table-bordered table-hover" id="tableCare">
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
								<?php  
									if (!empty($visit_care)) {
										foreach($visit_care as $value){
											echo "<tr>";
												echo "<td>".$value['waktu_tindakan']."</td>";										
												echo "<td>".$value['js']."</td>";										
												echo "<td>".$value['jp']."</td>";
												echo "<td>".$value['bakhp']."</td>";										
												echo "<td>".$value['on_faktur']."</td>";
												echo "<td>".$value['nama_petugas']."</td>";										
												echo "<td>".$value['nama_tindakan']."</td>";
												echo "<td>".$value['keterangan']."</td>";
											echo "</tr>";
										}
									}
								?>
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
        		<form class="form-horizontal" role="form" id="submitresepbersalin" method="post">
					<div class="form-group">
						<label class="control-label col-md-3">Dokter</label>
						<div class="col-md-3">
							<input type="text" id="namadokterresep" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#resepDokter">
							<input type="hidden" id="iddokterresep">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3">Tanggal</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="tglResep" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Deskripsi Resep</label>
						<div class="col-md-5">
							<textarea class="form-control" id="deskripsiResep" name="deskripsiResep" placeholder="Deskripsi Resep"></textarea>
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
				<div class="modal fade" id="resepDokter" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
									<br>		
									<div style="margin-left:20px; margin-right:20px;"><hr></div>
									<div class="portlet-body" style="margin: 0px 10px 0px 10px">
										<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelDokterResep" style="width:90%;">
											<thead>
												<tr class="warning">
													<td>Nama Dokter</td>
													<td width="10%">Pilih</td>
												</tr>
											</thead>
											<tbody>
												<?php  
													if (!empty($petugas)) {
														foreach ($petugas as $value) {
															echo "<tr>";
																echo "<td class='idpetugasresep' style='display:none'>".$value['petugas_id']."</td>";
																echo "<td class='namapetugasresep'>".$value['nama_petugas']."</td>";
																echo "<td style='text-align:center'><a href='' class='inputpetugasresep'><i class='glyphicon glyphicon-check'></i></a></td>";
															echo "</tr>";
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
			</div>

	 		<div class="dropdown">
		        <div id="titleInformasi">Tabel Resep</div>
		        <div id="btnBawahTabelResep" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
            <br>

        	<div class="tabelinformasi" id="tblResep">
	        	<div class="portlet-body" style="margin: 0px 40px 0px 10px">
					<table class="table table-striped table-bordered table-hover" id="tabelresepbersalin">
						<thead>
							<tr class="info">
								<th> Dokter</th>
								<th>Tanggal</th>
								<th>Deskripsi Resep</th>
								<th>Status Bayar</th>
								<th>Status Ambil</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php  
								if (!empty($visit_resep)) {
									foreach ($visit_resep as $value) {
										echo '<tr>';
										echo '<td>'.$value['nama_petugas'].'</td>';										
										echo '<td>'.$value['tanggal'].'</td>';										
										echo '<td>'.$value['resep'].'</td>';										
										echo '<td>status ambil</td>';										
										echo '<td>status bayar</td>';										
										echo '<td style="text-align:center">';
										echo '<a href="#" class="hapus-resep"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>';
										echo '</td>';
										echo '<td class="resep_id" style="display:none" >'.$value['resep_id'].'</td>';											
										echo '</tr>';
									}
								}
							?>
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
								<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>	
					<div class="form-group">
						<label class="control-label col-md-3" >Tujuan Penunjang</label>
						<div class="col-md-2">			
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
														<td style="text-align:center"><a href="#"><i class="glyphicon glyphicon-check"></i></a></td>
													</tr>
													<tr>
														<td>Putu</td>
														<td style="text-align:center"><a href="#"><i class="glyphicon glyphicon-check"></i></a></td>
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
							<textarea class="form-control" rows="5" id="keteranganPenunjang" placeholder="Keterangan"></textarea>
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
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>12/12/2012</td>										
								<td>Labolatorium</td>										
								<td>APS</td>										
								<td>Obat</td>											
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
										<label class="control-label1 col-md-3">Order ID:</label>
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
										<label class="control-label1 col-md-3">Tanggal Tindakan:</label>
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
										<label class="control-label1 col-md-4">Departemen Penunjang:</label>
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
										<label class="control-label1 col-md-3">Keterangan Order:</label>
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
										<label class="control-label1 col-md-4">Status Hasil:</label>
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

        <div class="tab-pane" id="orderkamar">
        	<!-- dropdown order kamar operasi -->
        	<div class="dropdown">
	            <div id="titleInformasi">Order Kamar Operasi</div>
	            <div class="btnBawah" id="btnBawahOrder"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>

	        <div class="informasi" id="infoKamar">
	            <form class="form-horizontal" id="orderoperasi" method="post">
	          		<div class="form-group">
						<label class="control-label col-md-3">Waktu Pelaksanaan</label>
						<div class="col-md-3" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="tanggal_mulai" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y H:i");?>">
							</div>
						</div>
					</div>	
										
					<div class="form-group">
						<label class="control-label col-md-3">Dokter</label>
						<div class="col-md-3">
							<input type="text" id="dokteroperasi" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokterOperasi" >
							<input type="hidden" id="id_dokteroperasi">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Tujuan Order</label>
						<div class="col-md-3">			
							<input type="text" class="form-control" value="Kamar Operasi" disabled="disabled">		
						</div>							
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3" >Jenis Operasi</label>
						<div class="col-md-3">			
							<input type="text" class="form-control" placeholder="Jenis Operasi" id="jnsOperasi">
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
							<textarea class="form-control" rows="5" id="alasanoperasi" placeholder="alasan operasi"></textarea>
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

				<div class="modal fade" id="searchDokterOperasi" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
									<br>		
									<div style="margin-left:20px; margin-right:20px;"><hr></div>
									<div class="portlet-body" style="margin: 0px 10px 0px 10px">
										<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelDokterOperasi" style="width:90%;">
											<thead>
												<tr class="warning">
													<td>Nama Dokter</td>
													<td width="10%">Pilih</td>
												</tr>
											</thead>
											<tbody>
												<?php  
													if (!empty($petugas)) {
														foreach ($petugas as $value) {
															echo "<tr>";
																echo "<td class='idpetugasoperasi' style='display:none'>".$value['petugas_id']."</td>";
																echo "<td class='namapetugasoperasi'>".$value['nama_petugas']."</td>";
																echo "<td style='text-align:center'><a href='' class='inputpetugasoperasi'><i class='glyphicon glyphicon-check'></i></a></td>";
															echo "</tr>";
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
			</div>	<!-- End Dropdown -->

			<div class="dropdown">
	            <div id="titleInformasi">Table Daftar Kamar Operasi</div>
	            <div class="btnBawah" id="btnTableKamarOperasi"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>

	        <div class="tabelinformasi" id="tabelKamar">
	           	<div class="portlet-body" style="margin: 0px 40px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive" id="tabelorderoperasi">
						<thead>
							<tr class="info">
								<th>Tanggal Tindakan</th>
								<th>Dokter</th>
								<th>Tujuan Order</th>
								<th>Keterangan Order</th>
								<th> </th>
							</tr>
						</thead>
						<tbody id="t_body_order">
							<?php  
								if (!empty($order_operasi)) {
									 foreach($order_operasi as $hasil) {
										echo '<tr>';
										
										echo '<td>'.$hasil['waktu_mulai'].'</td>';
										echo '<td>'.$hasil['nama_petugas'].'</td>';										
										echo '<td>'.$hasil['nama_dept'].'</td>';
										echo '<td>'.$hasil['alasan'].'</td>';
										echo '<td style="text-align:center">';
										echo '<a href="#" class="hapus-order">';
										echo '<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>';
										echo '</td>';
										echo '<td class="order_operasi_id" style="display:none;">'.$hasil['order_operasi_id'].'</td>';										
										echo '</tr>';	
									}
									
								}else{
									echo '<tr>';
									echo '<td colspan="6" style="text-align:center;">Tidak ada order</td>';
									echo '</tr>';
								}
								
							?>
						</tbody>
					</table>
				</div>	<br><br>
			</div>	<!-- End Dropdown -->
        </div> 

        <div class="tab-pane" id="konsul">
        	<div class="dropdown">
	            <div id="titleInformasi">Order Konsultasi Gizi</div>
	            <div class="btnBawah" id="btnBawahOrderKonsul"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>
	       
	        <div class="informasi" id="infoKonsul">
		      	<form class="form-horizontal" role="form" method="post" id="konsultasigizi">
	          		<div class="form-group">
						<label class="control-label col-md-3">Tanggal Konsultasi</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="tanggalordergizi" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>	

					<div class="form-group">
						<label class="control-label col-md-3" >Konsultan Gizi</label>
						<div class="col-md-3">
							<input type="text" id="konsultan" class="form-control" placeholder="Search Konsultan" data-toggle="modal" data-target="#searchKonsultan">
							<input type="hidden" id="id_petugas" value="">
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
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelKonsultan" style="width:90%;">
												<thead>
													<tr class="warning">
														<td>Nama Dokter</td>
														<td width="10%">Pilih</td>
													</tr>
												</thead>
												<tbody>
													<?php  
														if (!empty($petugas)) {
															foreach ($petugas as $value) {
																echo "<tr>";
																	echo "<td class='idpetugas' style='display:none'>".$value['petugas_id']."</td>";
																	echo "<td class='namapetugas'>".$value['nama_petugas']."</td>";
																	echo "<td style='text-align:center'><a href='' class='inputpetugas'><i class='glyphicon glyphicon-check'></i></a></td>";
																echo "</tr>";
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

					<div class="form-group">
						<label class="control-label col-md-3" >Kajian Gizi</label>
						<div class="col-md-5">			
							<textarea class="form-control" rows="2" id="kajianGizi" placeholder="Kajian Gizi"></textarea>
					 	</div>				
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Anamnesa Diet</label>
						<div class="col-md-5">			
							<textarea class="form-control" rows="2" id="anamnesaDiet" placeholder="Anamnesa Diet"></textarea>
							
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
						<div class="col-md-5">			
							<textarea class="form-control" rows="2" id="kajianDiet"  placeholder="Kajian Diet"></textarea>
					 	</div>		
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Detail Menu Sehari-hari</label>
						<div class="col-md-5">			
							<textarea class="form-control" rows="2" id="detailMenu"  placeholder="Detail Menu"></textarea>
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
					<table class="table table-striped table-bordered table-hover" id="tabelgizibersalin">
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
							<?php  
								if (!empty($gizi)) {
									foreach ($gizi as $value) {
										echo "<tr>";
										echo "<td>".$value['tanggal']."</td>";
										echo "<td>".$value['nama_petugas']."</td>";
										echo "<td>".$value['kajian_gizi']."</td>";										
										echo "<td>".$value['anamnesa_diet']."</td>";
										echo "<td>".$value['data_lab']."</td>";
										echo "<td>".$value['kajian_diet']."</td>";
										echo "<td>".$value['detail_menu']."</td>";
										echo "<td style='text-align:center'>";
										echo '<a href="#" class="hapus-gizi"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>';
										echo '<a href="#" class="print-gizi"><i class="glyphicon glyphicon-print"  data-toggle="tooltip" data-placement="top" title="Print"></i></a>';
										echo "</td>";
										echo "<td class='gizi_id' style='display:none;'>".$value['gizi_id']."</td>";										
										echo "</tr>";
									}
								}
							?>
						</tbody>
					</table>
				</div>	<br><br>
			</div>	
        </div>  

        <div class="tab-pane" id="riwayat">
         	<div class="dropdown">
            	<div id="titleInformasi">Riwayat Pasien</div>
        		<div id="btnBawahRiwayat"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
        	</div>
        	<br>	

            <div class="tabelinformasi" id="infoRiwayat">
		       	<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive" id="tabel_riwayat">
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
							<?php  
								if (isset($riwayat)) {
									if (!empty($riwayat)) {
										foreach($riwayat as $value){
											echo '<tr>'.
													'<td class="visit_riwayat">'.$value['visit_id'].'</td>'.										
													'<td>'.$value['tanggal_visit'].'</td>'.										
													'<td>'.$value['nama_dept'].'</td>'.
													'<td>'.$value['petugas_registrasi'].'</td>'.
													'<td></td>'.
													'<td style="text-align:center">'.
														'<a href="#cekRiwayat" class="rm_detail" data-toggle="modal" data-placement="top" data-original-title="Detail RM">'.
														'<i class="glyphicon glyphicon-search"  data-toggle="tooltip" data-placement="top" title="Lihat Detail"></i></a>'.
													'</td>'.																		
												'</tr>';
										}
									}
								}
							?>
						</tbody>
					</table>
				</div>
            </div>	

            <div class="modal fade" id="cekRiwayat" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        	<div class="modal-dialog">
	        		<div class="modal-content">
	        			<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							<h4 class="modal-title">Catan Rekam Medis <b><?php echo($pasien['nama']) ?></b></h4>
						</div>
						<div class="modal-body">
						<!--BEGIN TABS-->
							<div class="tabbable tabbable-custom tabbable-full-width">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab_overview" data-toggle="tab">Overview </a></li>
									<li><a href="#tab_therapy" data-toggle="tab">Therapy </a></li>
									<li><a href="#tab_resep" data-toggle="tab">Resep </a></li>
									<li><a href="#tab_penunjang" data-toggle="tab">Pemeriksaan Penunjang </a></li>
								</ul>
								<div class="tab-content">
									<!--BEGIN Overview-->
									<div class="tab-pane active" id="tab_overview">
										<div class="row">
											<div class="col-md-12">
												<div class="col-md-12">
													<h3>Infomasi Kunjungan</h3>
												</div>
												<div class="col-md-6">
													<span>Tanggal Visit: &nbsp;</span><span class="riwayat-tanggal"></span> 
												</div>
												<div class="col-md-6">
													<span>Departemen: &nbsp;</span><span class="riwayat-departemen"></span>
												</div>
												<div class="col-md-6">
													<span>Dokter: &nbsp;</span><span class="riwayat-dokter"></span>
												</div>
												<div class="col-md-6"></div>
												<div class="col-md-6">
													<span>Anamnesa: &nbsp;</span><span class="riwayat-anamnesa"></span>
												</div>
												<div class="col-md-6">
													<span>Diagnosa: &nbsp;</span><span class="riwayat-diagnosa"></span>
												</div>
											</div>
										</div>
									</div>
									<!--END Overview-->
										
									<!--BEGIN Therapy-->
									<div class="tab-pane" id="tab_therapy">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-striped table-bordered table-hover" id="rm-history-therapy">
													<thead>
														<tr>
															<th>Tanggal</th>
															<th>Dokter</th>
															<th>Terapi</th>
														</tr>
													</thead>
													<tbody id="t_body_history_therapy">
													</tbody>
												</table>										
											</div>
										</div>
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
													<tbody id="t_body_history_resep">

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
														</tr>
													</thead>
													<tbody id="t_body_history_penunjang">
													</tbody>
												</table>										
											</div>
										</div>
									</div>	<!--END Penunjang-->
								</div>
							</div><!-- 	end TABS	 -->
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
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
						<label class="control-label col-md-3">Waktu Permintaan Makan</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="tanggalpermintaanmakan" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Nama Ruang</label>
						<div class="col-md-2">			
							<input class="form-control" type="text" id="namaruangbersalin" disabled="">		
						</div>							
					</div>	

					<div class="form-group">
						<label class="control-label col-md-3" >Nomor Bed</label>
						<div class="col-md-2">			
							<input class="form-control" type="text" id="nomorbedbersalin" disabled="">		
						</div>							
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Paket Makanan</label>
						<div class="col-md-3">			
							<input type="hidden" id="id_paket">			
							<input type="text" id="searchmakanbersalin" class="form-control" placeholder="Search Paket Makanan" data-toggle="modal" data-target="#searchPaketMakanan">
						</div>							
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Keterangan</label>
						<div class="col-md-5">			
							<textarea class="form-control" rows="3" id="keteranganmakan"></textarea>
					 	</div>
													
					</div>

					<div class="modal fade" id="searchPaketMakanan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Pilih Paket Makanan</h3>
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
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchMakan" style="width:90%;">
												<thead>
													<tr class="warning">
														<td>Nama Paket</td>
														<td width="10%">Pilih</td>
													</tr>
												</thead>
												<tbody id="t_body_paket">
													<tr>
														<td>Paket Kremes</td>
														<td style="text-align:center"><a href="#"><i class="glyphicon glyphicon-check"></i></a></td>
													</tr>
													<tr>
														<td>Paket Vegan</td>
														<td style="text-align:center"><a href="#"><i class="glyphicon glyphicon-check"></i></a></td>
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
						<label class="control-label col-md-3" ></label>
						<div class="col-md-6">			
							<br>
							<button type="submit" id="tombolMakan" class="btn btn-success">Tambah</button>		
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
					<table class="table table-striped table-bordered table-hover" id="tabeldaftarmakan" >
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
						<tbody id="tbody_tbl_permintaan">
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
			</div>	
        </div>

        <div class="tab-pane" id="pindah">
			<div class="dropdown">
	            <div id="titleInformasi">Pindah Pasien</div>
	            <div class="btnBawah" id="btnBawahPindah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi" id="infoPindah">
            	<form class="form-horizontal" role="form" id="formpindahkamar">
	            	<div class="form-group">
						<label class="control-label col-md-3">Tanggal Pindah Kamar</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Pilihan Unit
						</label>
						<div class="col-md-2">			
							<select class="form-control select" name="pilUnit" id="pilUnit">
								<?php  
									if (isset($alldepartment)) {
										if (!empty($alldepartment)) {
											foreach ($alldepartment as $value) {
												echo '<option value="'.$value['dept_id'].'">'.$value['nama_dept'].'</option>';
											}
										}
									}
								?>
							</select>
						</div>							
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Kelas Kamar
						</label>
						<div class="col-md-2">			
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
	            <div class="btnBawah" id="btnBawahInventori"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>

            <div class="tabelinformasi" id="infoInventori">
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

        <div class="tab-pane" id="catatan">
        	<div class="dropdown">
            	<div id="titleInformasi">Tambah Kegiatan Bersalin</div>
            	<div class="btnBawah" id="btnBawahBersalin"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi" id="infoBersalin">
            	<form class="form-horizontal" role="form" method="post" id="submitVisitBersalin">
	            	<div class="form-group">
						<label class="control-label col-md-3" >Jenis Kegiatan</label>
						<div class="col-md-2">			
							<select class="form-control select" name="pilJnsKegiatan" id="pilJnsKegiatan">
								<option value="Non Persalinan" selected>Non Persalinan</option>
								<option value="Persalinan">Persalinan</option>
							</select>
						</div>					
					</div>	

					<div class="form-group">
						<label class="control-label col-md-3" >Kegiatan</label>
						<div class="col-md-2">			
							<select class="form-control select" name="pilKegiatan" id="pilKegiatan">
								<option value="Kegiatan A" selected>Kegiatan A</option>
								<option value="Kegiatan B">Kegiatan B</option>
								<option value="Kegiatan C">Kegiatan C</option>
							</select>
						</div>							
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3">Tanggal Pelaksanaan</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="tanggalpelaksanaanbersalin" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Dirujuk</label>
						<div class="col-md-2">			
							<select class="form-control select" name="statusRujukan" id="statusRujukan">
								<option value="Tidak" selected>Tidak</option>
								<option value="Ya">Ya</option>
							</select>
						</div>							
					</div>

					<div class="form-group" id="asalRujukan">
						<label class="control-label col-md-3" >Asal Rujukan</label>
						<div class="col-md-2">			
							<select class="form-control select" name="rujukan" id="rujukan">
								<option value="Non Rujukan" selected>Non Rujukan</option>
								<option value="Rumah Sakit">Rumah Sakit</option>
								<option value="Bidan">Bidan</option>
								<option value="Puskesmas">Puskesmas</option>
								<option value="Faskes Lainnya">Faskes Lainnya</option>
								<option value="Non Medis">Non Medis</option>
							</select>
						</div>							
					</div>


					<div class="form-group" id="tujuanRujuk">
						<label class="control-label col-md-3" >Tujuan Rujukan</label>
						<div class="col-md-2">			
							<select class="form-control select" name="tujuanRujukann" id="tujuanRujukan">
								<?php  
									if (!empty($dept_rujukan)) {
										foreach ($dept_rujukan as $key) {
											echo '<option value="'.$key['dept_id'].'">'.$key['nama_dept'].'</option>';
										}
									}
								?>
							</select>
						</div>							
					</div>
					
					
					<div class="form-group">
						<label class="control-label col-md-3" >Dokter Peminta
						</label>
						<div class="col-md-3">
							<input type="text" id="namadokterbersalin" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokterpeminta">
							<input type="hidden" id="iddokterbersalin">
						</div>
					</div>

					<div class="modal fade" id="searchDokterpeminta" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelDokterBersalin" style="width:90%;">
												<thead>
													<tr class="warning">
														<td>Nama Dokter</td>
														<td width="10%">Pilih</td>
													</tr>
												</thead>
												<tbody id="t_body_dokterbersalin">
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
						<label class="control-label col-md-3" >Keterangan Kegiatan</label>
						<div class="col-md-7">
							<textarea class="form-control" rows="3" id="ketKegiatan"></textarea>
						</div>							
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3" > </label>
						<div class="col-md-6">			
						<br>
						<button type="submit" class="btn btn-success">Tambah </button>		
					 	</div>							
					</div>	
				</form>
				<br>
            </div>            
		</div>

		<div class="tab-pane" id="ibu">
			<div class="dropdown">
        		<div id="titleInformasi">Tambah Catatan Kesehatan Ibu Hamil</div>
            	<div class="btnBawah" id="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
          	<br>

            <div class="informasi" id="info1">
	            <form class="form-horizontal" role="form">

		            <table width="95%">
		            	<tr>
		            		<td width="50%">
		            			<div class="form-group">
									<label class="control-label col-md-5">Hari Pertama Haid</label>
									<div class="col-md-4" >
										<div class="input-icon">
											<i class="fa fa-calendar"></i>
											<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5">Hari Terlaksana Persalinan</label>
									<div class="col-md-4" >
										<div class="input-icon">
											<i class="fa fa-calendar"></i>
											<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5">Lingkar Lengan Atas</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="lingkarLengan" placeholder="Ex: 12">
									</div>
									<label class="control-label">Cm</label>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5">Tinggi Badan</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="tinggi" placeholder="Ex: 12">
									</div>
									<label class="control-label">Cm</label>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5">Penggunaan Kontrasepsi</label>
									<div class="col-md-4">
										<input type="text" class="form-control" name="kontrasepsi" placeholder="Kontrasepsi">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5">Riwayat Alergi</label>
									<div class="col-md-4">
										<input type="text" class="form-control" name="alergi" placeholder="Alergi">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5">Penolong Persalinan Terakhir</label>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="Penolong" data-toggle="modal" data-target="#penolong">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5">Status imunisasi TT</label>
									<div class="col-md-3">
										<input type="text" class="form-control" name="imune" placeholder="Status">
									</div>
								</div>
		            		</td>

		            		<td width="50%">
		            			<div class="form-group">
									<label class="control-label col-md-5"> Hamil Ke - </label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="hamilke" >
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5"> Jumlah Persalinan</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="jumlah">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5"> Jumlah Keguguran</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="gugur">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5"> Jumlah Anak Hidup</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="hidup">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5"> Jumlah Lahir Mati</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="mati">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5"> Jumlah Anak lahir prematur</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="kurang">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5"> Jarak kelahiran ini dengan anak terakhir</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="jarak">
									</div>
									<div class="col-md-3">
										<select class="form-control select" name="jarak" >
											<option value="" selected>Hari</option>
											<option value="Breki">Minggu</option>
											<option value="Arya">Bulan</option>
											<option value="Jems">Tahun</option>
										</select>	
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-5"> Imunisasi TT Terakhir</label>
									<div class="col-md-2">
										<input type="text" class="form-control" name="imuneter">
									</div>
									<div class="col-md-3">
										<select class="form-control select" name="imuneter" >
											<option value="" selected>Hari</option>
											<option value="Breki">Minggu</option>
											<option value="Arya">Bulan</option>
											<option value="Jems">Tahun</option>
										</select>	
									</div>
								</div>
		            		</td>
		            	</tr>
		            	<tr>
		            		<td colspan="2">
		            			<hr class="biru">
		            		</td>
		            	</tr>
		            </table>				
					<center>
						<button type="submit" id="simpanOver" class="btn btn-success">Simpan</button>
						&nbsp;&nbsp;
					 	<a href="#resetResume"><button type="submit" class="btn btn-warning">Reset </button></a>	
					</center> <br>

					<div class="modal fade" id="penolong" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Penolong </h3>
			        			</div>
			        			<div class="modal-body">
									<div class="form-group" style="margin-left: 5px;">	
										<div class="col-md-5">
											<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama dokter"/>
										</div>
										<div class="col-md-2">
											<button type="button" class="btn btn-info">Cari</button>
										</div>
										<div class="col-md-2">
											<button type="button" class="btn btn-success">Tambah Penolong</button>
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
													<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
												</tr>
												<tr>
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
				</form>
			</div>
		</div>
		
        <div class="tab-pane" id="daftar">
	        <div class="dropdown">
	            <div id="titleInformasi">Daftar Kelahiran Baru</div>
	            <div class="btnBawah" id="btnBawahLahir"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
            <br>
            <div class="informasi" id="infoKelahiran">
            	<form class="form-horizontal" role="form" id="submitKelahiran" method="post">
	            	<div class="form-group">
						<label class="control-label col-md-3">Tanggal Kelahiran</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="tglKelahiran" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy HH:ii" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i");?>" required>
							</div>
						</div>
					</div>

					<div class="form-group" >
						<label class="control-label col-md-3" >Status Kelahiran</label>
						<div class="col-md-2">	
							<select class="form-control select" name="statusLahir" id="statusLahir">
								<option value="Hidup" selected>Hidup</option>
								<option value="Mati">Mati</option>
							</select>
						</div>					
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Diagnosa</label>
						<div class="col-md-1">
							<input type="text" class="form-control" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosaLahir">
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosaLahir">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Nama</label>
						<div class="col-md-4">			
							<input type="text" class="form-control" id="nama" name ="nama" placeholder="Nama">
						</div>							
					</div>

					<div class="form-group">
						<div class="form-inline">
							<label class="control-label col-md-3">Jenis Kelamin</label>
							<div class="col-md-4">
								<div class="radio-list">
									<label>
										<input type="radio" style="margin-left: 0px" name="jk" id="newJenisKelamin" value="Pria" data-title="Pria" checked="checked" /><span style="margin-left:5px">Pria</span> 
									</label >
									<label style="margin-left: 10px">
										<input type="radio" style="margin-left: 10px" name="jk" id="newJenisKelamin2" value="Wanita" data-title="Wanita"/><span style="margin-left:5px">Wanita</span> 
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Berat Badan / panjang Badan</label>
						<div class="col-md-1">		
							<input type="text" class="form-control numberrequired" name="beratBadan" id="beratBadan" placeholder="Gr."> 
						</div>		
						<div class="col-md-1">		
							<input type="text" class="form-control numberrequired" name="pjgBadan" id="pjgBadan" placeholder="cm">
						</div>						
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Penolong</label>
						<div class="col-md-3">			
							<select class="form-control select" name="penolong" id="penolong">
								<option value="Arya" selected>Arya</option>
								<option value="Jems">Jems</option>
							</select>
						</div>							
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Asisten</label>
						<div class="col-md-3">			
							<select class="form-control select" name="asisten" id="asisten">
								<option value="Arya" selected>Arya</option>
								<option value="Jems">Jems</option>
							</select>
						</div>							
					</div>

					<div class="form-group">
						<div class="form-inline">
							<label class="control-label col-md-3" >Status Fisik</label>
							<div class="col-md-6">		
								<label class="checkbox-inline"><input type="checkbox" name="statusfisik" value="Anus">Anus Hilang</label>
								<label class="checkbox-inline"><input type="checkbox" name="statusfisik" value="Cacat">Cacat Fisik</label>
							</div>							
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" ></label>
						<div class="col-md-6">		
							<button type="submit" id="tombolBayiTambah" class="btn btn-success">Tambah </button>		
					 	</div>							
					</div>	
					<br><br><br><br>
				</form>
            </div>
            <div class="modal fade" id="searchDiagnosaLahir" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
		</div>

        <div class="tab-pane" id="resume">
        	<div class="dropdown">
	            <div id="titleInformasi">Resume Pulang Pasien</div>
	            <div id="btnBawahResumePulang"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>

            <div class="informasi" id="infoResumePulang">
            	<form class="form-horizontal" role="form" id="formresume">
            		<input type="hidden" id="inap_id" value="<?php echo $pasien_on_bed['inap_id']?>" data-required="1" class="form-control"/>
					<input type="hidden" id="biaya_per_hari" value="<?php echo $pasien_on_bed['tarif_kamar']?>" data-required="1" class="form-control"/>
					<input type="hidden" id="old_kamar_id" value="<?php echo $pasien_on_bed['kamar_id']?>" data-required="1" class="form-control"/>
					<input type="hidden" id="old_bed_id" value="<?php echo $pasien_on_bed['bed_id']?>" data-required="1" class="form-control"/>
            		<div class="form-group">
						<label class="control-label col-md-3">Tanggal Masuk RS</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" id="tglMasukRS" class="form-control isian calder" disabled data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo $visit_ri_info['waktu_masuk'];?>">
							</div>
						</div>
					</div>
            		<div class="form-group">
						<label class="control-label col-md-3">Tanggal Keluar RS</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="tglKeluarRS" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>	
	
					<div class="form-group">
						<label class="control-label col-md-3" >Alasan Keluar
						</label>
						<div class="col-md-4">			
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
						<div class="col-md-4">			
							<textarea class="form-control" rows="3" id="alasanPulang"></textarea>
					 	</div>
					</div>

					<div class="form-group" id="alasanPindah">
						<label class="control-label col-md-3" >Alasan Pindah
						</label>
						<div class="col-md-4">			
						<textarea class="form-control" rows="3" id="alasanPindah"></textarea>
						<br>
					 	</div>
					</div>
					
					<div class="form-group" id="isiRujuk">
						<label class="control-label col-md-3" >Isian Rumah Sakit Rujukan
						</label>
						<div class="col-md-4">			
						<input type="text" class="form-control" id="isianRSRujuk" name="isianRSRujuk" placeholder="Rumah Sakit Rujukan">
					 	</div>
					</div>				

					<div class="form-group" id="semuaPoli">
						<label class="control-label col-md-3" >Semua Poli
						</label>
						<div class="col-md-4">			
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
						<div class="col-md-4">			
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
						<div class="col-md-4">			
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
						<div class="col-md-4">			
							<select class="form-control select" name="detPasDie" id="detPasDie">
								<option value="sebelum dirawat" selected>Meninggal sebelum dirawat</option>
								<option value="sesudah dirawat > 48">Meninggal sesudah dirawat > 48 jam</option>
								<option value="sesudah dirawat < 48">Meninggal sesudah dirawat &#8924; 48 jam</option>
							</select>
					 	</div>							
					</div>

					<div class="form-group" id="pasienMeninggal">
						<label class="control-label col-md-3">Waktu Kematian</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="waktumeninggal" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy HH:ii" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y H:i");?>">
							</div>
						</div>
					</div>

					<div class="form-group" id="ketMati">
						<label class="control-label col-md-3"> Keterangan Kematian</label>
						<div class="col-md-4">			
							<textarea class="form-control" rows="3" id="ketMati"></textarea>
					 	</div>
					</div>

					<div class="form-group">
						<div class="form-inline">
							<label class="control-label col-md-3">Jenis Kasus <span class="required">* </span></label>
							<div class="col-md-4">
								<div class="radio-list">
									<label>
										<input type="radio"  name="jeniskasus" id="klama" value="Kasus Lama" checked="checked" /><span style="margin-left:15px">Kasus Lama </span> 
									</label>
									<label style="margin-left: 10px">
										<input type="radio"  name="jeniskasus" id="kbaru" value="Kasus Baru"/><span style="margin-left:15px">Kasus Baru </span>
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >
						</label>
						<div class="col-md-6">
							<a href="#simpanResume"><button type="submit" class="btn btn-success">Simpan </button></a>		
							&nbsp;&nbsp;
					 		<a href="#resetResume"><button type="button" class="btn btn-warning">Reset </button></a>		
							&nbsp;&nbsp;
							<a href="#cancelResume"><button type="button" class="btn btn-danger">Cancel </button></a>		
					 	</div>								
					</div>
				</form>	
				<br>
            </div>
            <br>
        </div>
	      
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
										<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
									</tr>
									<tr>
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

		
	</div>		
</div>			