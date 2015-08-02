<div class="title">
	PASIEN NICU
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>nicu/homenicu">NICU </a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>nicu/nicudetail"><?php echo $pasien['nama']; ?></a>
		</li>
	
</div>

<div class="navigation" style="margin-left: 10px" >
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#identitas" data-toggle="tab">Identitas Pasien</a></li>
	    <li><a href="#rm" data-toggle="tab">Care History</a></li>
	    <li><a href="#resep" data-toggle="tab">Pemberian Resep</a></li>
	    <li><a href="#penunjang" data-toggle="tab">Pemeriksaan Penunjang</a></li>
	    <li><a href="#orderkamar" data-toggle="tab">Order Kamar Operasi</a></li>
	    <li><a href="#konsul" data-toggle="tab">Order Konsultasi Gizi</a></li>
	    <li><a href="#makan" data-toggle="tab">Daftar Permintaan Makan</a></li>
	    <li><a href="#pindah" data-toggle="tab">Pindah Pasien</a></li>
	    <li><a href="#catatan" data-toggle="tab">Catatan Persalinan</a></li>
	    <li><a href="#daftar" data-toggle="tab">Daftar Kelahiran Baru</a></li>
	    <li><a href="#riwayat" data-toggle="tab">Riwayat Penyakit</a></li>
	    <li><a href="#resume" data-toggle="tab">Resume Pulang</a></li>
	</ul>	

<div id="my-tab-content" class="tab-content">
    <!-- tab identitas pasien -->
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
							<input type="text" class="form-control" id="jnsIdentitas" name="jenis_identitas" placeholder="<?php echo $pasien['jenis_id']; ?>" disabled />
						</div>					
						<div class="col-md-4">
							<input type="text" class="form-control" id="NomorID" name="nomor_identitas" placeholder="<?php echo $pasien['no_id']; ?>" disabled />
						</div>
					</div>	
					<div class="form-group">
						<label class="control-label col-md-3">No RM</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="rm_id" name="rm_id" placeholder="<?php echo $pasien['rm_id']; ?>" disabled />
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
	
	<!-- end tab identitas pasien -->

	<!-- rekam medik -->
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

	<!-- akhir rekam medik -->

        <!-- tab resep -->
    <div class="tab-pane" id="resep">
 		<div class="dropdown">
		    <div id="titleInformasi">Tambah Resep</div>
    		<div id="btnBawahTambahResep" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
    	</div>
        <br>
    	<div class="informasi" id="tambahResep">
    		<form class="form-horizontal" role="form" id="submitresep" method="post">
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
				<table class="table table-striped table-bordered table-hover" id="tabelresep">
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
 	<!-- ENd tab resep -->


        <div class="tab-pane" id="penunjang"></div>

    <!-- start tab order kamar operasi -->
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
    <!-- End tab tambah kamar operasi -->

    <!-- start tab konsul -->
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
				<table class="table table-striped table-bordered table-hover" id="tabelgizi">
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
						<input class="form-control" type="text" id="namaruang" disabled="">		
					</div>							
				</div>	

				<div class="form-group">
					<label class="control-label col-md-3" >Nomor Bed</label>
					<div class="col-md-2">			
						<input class="form-control" type="text" id="nomorbed" disabled="">		
					</div>							
				</div>

				<div class="form-group">
					<label class="control-label col-md-3" >Paket Makanan</label>
					<div class="col-md-3">			
						<input type="hidden" id="id_paket">			
						<input type="text" id="searchmakan" class="form-control" placeholder="Search Paket Makanan" data-toggle="modal" data-target="#searchPaketMakanan">
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


    <div class="tab-pane" id="catatan">
    	<div class="dropdown">
        	<div id="titleInformasi">Tambah Kegiatan Bersalin</div>
        	<div class="btnBawah" id="btnBawahBersalin"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
        </div>
        <br>
        <div class="informasi" id="infoBersalin">
        	<form class="form-horizontal" role="form">
            	<div class="form-group">
					<label class="control-label col-md-3" >Jenis Kegiatan
					</label>
					<div class="col-md-2">			
						<select class="form-control select" name="pilJnsKegiatan" id="pilJnsKegiatan">
							<option value="Non Persalinan" selected>Non Persalinan</option>
							<option value="Persalinan">Persalinan</option>
						</select>
					</div>					
				</div>	

				<div class="form-group">
					<label class="control-label col-md-3" >Kegiatan
					</label>
					<div class="col-md-2">			
						<select class="form-control select" name="pilKegiatan" id="pilKegiatan">
							<option value="Kegiatan A" selected>Kegiatan A</option>
							<option value="Kegiatan B">Kegiatan B</option>
							<option value="Kegiatan C">Kegiatan C</option>
						</select>
					</div>							
				</div>

				<div class="form-group">
					<label class="control-label col-md-3" >Rujukan
					</label>
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

				<div class="form-group">
					<label class="control-label col-md-3" >Status
					</label>
					<div class="col-md-2">			
						<select class="form-control select" name="status" id="status">
							<option value="Hidup" selected>Hidup</option>
							<option value="Mati">Mati</option>
						</select>
					</div>							
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3" >Dirujuk
					</label>
					<div class="col-md-2">			
						<select class="form-control select" name="statusRujuk" id="statusRujuk">
							<option value="Tidak" selected>Tidak</option>
							<option value="Ya">Ya</option>
						</select>
					</div>							
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3" >Tanggal Pelaksanaan
					</label>
					<div class="col-md-2">
						<input type="text" class="form-control" data-provide = "datepicker" value="<?php echo date("d/m/Y");?>" name="tglPelaksanaan" placeholder="Tanggal Pelaksanaan">
					</div>					
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3" >Dokter Peminta
					</label>
					<div class="col-md-3">
						<input type="text" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokterpeminta">
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
					<label class="control-label col-md-3" >Keterangan Kegiatan
					</label>
					<div class="col-md-7">
						<textarea class="form-control" rows="3" id="ketKegiatan"></textarea>
					</div>							
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3" >
					</label>
					<div class="col-md-7">			
					<br>
					<a href="#tambahBersalin"><button type="submit" class="btn btn-success">
							Tambah </button></a>		
				 	</div>							
				</div>	
			</form>
			<br>
        </div>            
	</div>
	
    <div class="tab-pane" id="daftar">
    	<div class="dropdown">
        <div id="titleInformasi">Daftar Kelahiran Baru</div>
        <div class="btnBawah" id="btnBawahLahir"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
        </div>
        <br>
        <div class="informasi" id="infoKelahiran">
        	<form class="form-horizontal" role="form">
            	<div class="form-group">
					<label class="control-label col-md-3" >Tanggal Kelahiran
					</label>
					<div class="col-md-2">
						<input type="text" class="form-control" data-provide = "datepicker" name="tglKelahiran" value="<?php echo date("d/m/Y");?>" placeholder="Tanggal Kelahiran">
					</div>					
				</div>

            	<div class="form-group">
					<label class="control-label col-md-3" >Jam Kelahiran
					</label>
					<div class="col-md-2">
						<input type="text" class="form-control" data-provide = "datepicker" name="tglKelahiran" placeholder="Tanggal Kelahiran">
					</div>					
				</div>

				<div class="form-group" >
					<label class="control-label col-md-3" >Status Kelahiran
					</label>
					<div class="col-md-2">	
						<select class="form-control select" name="statusLahir" id="statusLahir">
							<option value="Hidup" selected>Hidup</option>
							<option value="Mati">Mati</option>
						</select>
					</div>					
				</div>
						
				<div class="form-group" id="formMati">
					<label class="control-label col-md-3">No Surat Kematian
					</label>
					<div class="col-md-3">			
						<input type="text" class="form-control" disabled>
					</div>							
				</div>

				<div class="form-group" id="formLahir">
					<label class="control-label col-md-3" id="srtLahir">No Surat Kelahiran
					</label>
					<div class="col-md-3">			
						<input type="text" class="form-control" disabled>
					</div>							
				</div>

				<div class="form-group">
					<label class="control-label col-md-3" >ICD
					</label>
					<div class="col-md-3">			
						<input type="text" class="form-control" id="ICD" name ="ICD" placeholder="ICD">
					</div>							
				</div>

				<div class="form-group">
					<label class="control-label col-md-3" >Kode ICD
					</label>
					<div class="col-md-3">			
						<input type="text" class="form-control" id="kodeICD" name ="kodeICD" placeholder="kodeICD">
					</div>							
				</div>

				<div class="form-group">
					<label class="control-label col-md-3" >Diagnosa
					</label>
					<div class="col-md-1">
						<input type="text" class="form-control" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa1">
					</div>
					<div class="col-md-2">
						<input type="text" class="form-control" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa1">
					</div>
				</div>

				<div class="modal fade" id="searchDiagnosa1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
			       				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			       				<h3 class="modal-title" id="myModalLabel">Pilih Diagnosa</h3>
			       			</div>
			       			<div class="modal-body">
				       			<div class="form-group">
									<div class="form-group">	
										<div class="col-md-3" style="margin-left:35px;">
											<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Kata kunci"/>
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
													<td width="30%;">Kode Diagnosa</td>
													<td>Keterangan</td>
													<td width="10%">Pilih</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>99999</td>
													<td>Diagnosa Lain-lain</td>
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
					<label class="control-label col-md-3" >Nama
					</label>
					<div class="col-md-5">			
						<input type="text" class="form-control" id="nama" name ="nama" placeholder="Nama">
					</div>							
				</div>

				<div class="form-group">
					<label class="control-label col-md-3" >Paritas
					</label>
					<div class="col-md-3">			
						<input type="text" class="form-control" name="paritas" id="paritas">
					</div>							
				</div>

				<div class="form-group">
					<div class="form-inline">
						<label class="control-label col-md-3">Jenis Kelamin</label>
						<div class="col-md-4">
							<div class="radio-list">
								<label>
									<input type="radio" style="margin-left: 0px" name="jk" id="newJenisKelamin" value="Pria" data-title="Pria"/><span style="margin-left:5px">Pria</span> 
								</label >
								<label style="margin-left: 10px">
									<input type="radio" style="margin-left: 10px" name="jk" id="newJenisKelamin2" value="Wanita" data-title="Wanita"/><span style="margin-left:5px">Wanita</span> 
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-3" >Berat Badan / panjang Badan
					</label>
					<div class="col-md-1">		
						<input type="text" class="form-control" name="beratBadan" id="beratBadan" placeholder="Gr."> 
					</div>		
					<div class="col-md-1">		
						<input type="text" class="form-control" name="pjgBadan" id="pjgBadan" placeholder="cm">
					</div>						
				</div>

				<div class="form-group">
					<label class="control-label col-md-3" >Penolong
					</label>
					<div class="col-md-5">			
						<select class="form-control select" name="penolong" id="penolong">
							<option value="Arya" selected>Arya</option>
							<option value="Jems">Jems</option>
						</select>
					</div>							
				</div>

				<div class="form-group">
					<label class="control-label col-md-3" >Asisten
					</label>
					<div class="col-md-5">			
						<select class="form-control select" name="asisten" id="asisten">
							<option value="Arya" selected>Arya</option>
							<option value="Jems">Jems</option>
						</select>
					</div>							
				</div>


				<div class="form-group">
					<div class="form-inline">
						<label class="control-label col-md-3" >Status
						</label>
						<div class="col-md-7">		
							<form role="form">
								<label class="checkbox-inline"><input type="checkbox" value="Anus">Anus</label>
								<label class="checkbox-inline"><input type="checkbox" value="Cacat">Cacat</label>
							</form>
						</div>							
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-3" ></label>
					<div class="col-md-7">		
						<a href="#tambahBayi"><button type="submit" id="tombolBayiTambah" class="btn btn-success">	Tambah </button></a>		
				 	</div>							
				</div>	
			<br><br><br><br>
			</form>
        </div>
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
					<label class="control-label col-md-3" >Tanggal Pindah Kamar
					</label>
					<div class="col-md-2">
						<input type="text" class="form-control" data-provide = "datepicker" name="tglPindahKamar" value="<?php echo date("d/m/Y");?>" placeholder="Tanggal Pindah Kamar">
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
            	<div class="btnBawah" id="btnStatusPindah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
          	</div>
           	<br>

            <div class="tabelinformasi" id="tabelPindah">
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
					<label class="control-label col-md-3" >Tanggal Keluar RS
					</label>
					<div class="col-md-2">
						<input type="text" class="form-control" data-provide = "datepicker" name="tglResume" value="<?php echo date("d/m/Y");?>" placeholder="Tanggal Keluar RS">
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

				<div class="form-group" id="pasienMeninggal">
					<label class="control-label col-md-3" >Pasien Meninggal
					</label>
					<div class="col-md-7">			
						<input type="text" class="form-control" data-provide = "datepicker" name="tglMeninggal" id="detpick" placeholder="Tanggal Meninggal">
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
    </div>
</div>

</div>

											