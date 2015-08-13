<div class="title">
	POLIKLINIK UMUM
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>rawatjalan/homerawatjalan">Poliklinik Umum</a>
		<i class="fa fa-angle-right"></i>
		<a class="nama" href="<?php echo base_url() ?>rawatjalan/daftarpasien">
			<?php echo $pasien['alias']; ?>. 
			<?php echo $pasien['nama']; ?> / 
			<?php  
				$datetime1 = new DateTime();
				$datetime2 = new DateTime($pasien['tanggal_lahir']);
				$interval = $datetime1->diff($datetime2);
												
				if($interval->y > 0)
					echo $interval->y ." tahun ";
			?> / 
			<?php echo $pasien['jenis_kelamin']; ?>
		</a>&nbsp;&nbsp;
	</li>
</div>

<input type="hidden" id="rj_id" value ="<?php echo $visit_rj['rj_id']; ?>">
<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
    	<li class="active"><a href="#identitas" data-toggle="tab">Identitas Pasien</a></li>
  		<li ><a href="#rm" data-toggle="tab">Overview Klinik</a></li>
    	<li><a href="#resep" data-toggle="tab">Pemberian Resep</a></li>
    	<li><a href="#penunjang" data-toggle="tab">Pemeriksaan Penunjang</a></li>
    	<li><a href="#orderkamar" data-toggle="tab">Order Kamar Operasi</a></li>
    	<li><a href="#konsul" data-toggle="tab">Order Konsultasi Gizi</a></li>
    	<li><a href="#riwayat" data-toggle="tab">Riwayat Kunjungan</a></li>
    	<li><a href="#resume" data-toggle="tab">Resume Pulang</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">

		<div class="tab-pane active" id="identitas">
    		<div class="dropdown">
        		<div id="titleInformasi">Identitas Pasien</div>
 			</div>
          	
            <div class="informasi" id="info1">
	            <form class="form-horizontal" role="form">
	            	
	           		<div class="form-group">
						<label class="control-label col-md-3" >Jenis Identitas Pasien</label>
						<div class="col-md-1">
							<input  id="jnsIdentitas" name="jenis_identitas" value="<?php echo $pasien['jenis_id']; ?>"style="border:0px;background-color:transparent;font-weight:bold" disabled />
						</div>					
						
					</div>	
					<div class="form-group">
						<label class="control-label col-md-3" >Nomor Identitas Pasien</label>
						<div class="col-md-3">
							<input  id="NomorID" name="nomor_identitas" value="<?php echo $pasien['no_id']; ?>" style="border:0px;background-color:transparent;font-weight:bold" disabled />
						</div>
					</div>	
					<hr class="garis" style="border: solid 2px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>

					<div class="form-group">
						<label class="control-label col-md-3">No RM</label>
						<div class="col-md-4">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="rm_id" name="rm_id" value="<?php echo $pasien['rm_id']; ?>" disabled />
						</div>
					</div>
					<hr class="garis" style="border: solid 2px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>

					<div class="form-group">
						<label class="control-label col-md-3">Nama Lengkap </label>
						<div class="col-md-4">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="NamaLengkap" name="NamaLengkap" value="<?php echo $pasien['nama']; ?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Alias </label>
						<div class="col-md-1">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="alias" name="alias" value="<?php echo $pasien['alias']; ?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Jenis Kelamin</label>
						<div class="col-md-1">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="jk" name="jk" value="<?php echo $pasien['jenis_kelamin']; ?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Golongan Darah </label>
						<div class="col-md-1">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="goldarah" name="goldarah" value="<?php echo $pasien['gol_darah']; ?>" disabled />												
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Agama </label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="agama" name="agama" value="<?php echo $pasien['agama']; ?>" disabled />
						</div>
					</div>
					<hr class="garis" style="border: solid 2px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>

					<div class="form-group">
						<label class="control-label col-md-3">Tempat Lahir </label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="newTempatLahir" name="tempat_lahir" value="<?php echo $pasien['tempat_lahir']; ?>" disabled/>
						</div>
																		
					</div>			
					<div class="form-group">
						<label class="control-label col-md-3">Tanggal Lahir </label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" class="input-medium date-picker" maxlength="12" type="text" value="<?php
								$tgl = strtotime($pasien['tanggal_lahir']);
								$hasil = date('d F Y', $tgl); 
								echo $hasil; ?>" 
								data-date-format="dd/mm/yyyy" id="TanggalLahir" placeholder="Tanggal Lahir" disabled />
						</div>												
					</div>			

					<div class="form-group">
						<label class="control-label col-md-3">Umur</label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="umur" name="umur" 
							value="<?php  
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
					<hr class="garis" style="border: solid 2px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>

					<div class="form-group">
						<label class="control-label col-md-3">Status Kawin</label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="status kawin" name="statuskawin" value="<?php echo $pasien['status_perkawinan']; ?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Pendidikan Terakhir</label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="pendidikan" name="pendidikan" value="<?php echo $pasien['pendidikan']; ?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Pekerjaan </label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="Pekerjaan" name="pekerjaan" value="<?php echo $pasien['pekerjaan']; ?>" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Nomor Telepon</label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="nomorPasien" name="nomor_pasien" value="<?php echo $pasien['no_telp']; ?>" disabled />
						</div>						
					</div>
					<hr class="garis" style="border: solid 2px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>

					<div class="form-group">
						<label class="control-label col-md-3">Alamat </label>
						<div class="col-md-5">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="Alamat" name="alamat" value="<?php echo $pasien['alamat_skr']; ?>" disabled />
						</div>						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Alamat KTP</label>
						<div class="col-md-5">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="AlamatKTP" name="alamatKTP" value="<?php echo $pasien['alamat_ktp']; ?>" disabled />
						</div>						
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3">Wilayah </label>									
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="provinsi" name="provinsi" value="<?php echo $pasien['provinsi_skr']; ?>" disabled />
						</div>											
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Kabupaten </label>									
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="kabupaten" name="kabupaten" value="<?php echo $pasien['kabupaten_skr']; ?>" disabled />
						</div>												
						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Kecamatan </label>									
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="kecamatan" name="kecamatan" value="<?php echo $pasien['kecamatan_skr']; ?>" disabled />
						</div>
						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Kelurahan </label>									
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="kelurahan" name="kelurahan" value="<?php echo $pasien['kelurahan_skr']; ?>" disabled />
						</div>
					</div>
					<hr class="garis" style="border: solid 2px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>
						
					<div class="form-group">
						<label class="control-label col-md-3">Cara Pembayaran</label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="cara_bayar" name="cara_bayar" value="<?php echo $pasien['pembayaran']; ?>" disabled />
						</div>						
					</div>
				</form>
			</div>
			<br><br>
		</div>

		<div class="tab-pane" id="rm"> 
		
			<div class="dropdown"  id="btnBawahTambahCare">
		        <div id="titleInformasi">Konsultasi Dokter
		        </div>
		        <div class="btnBawah floatright" style="margin-top:-25px;">
		           	<i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i>
		        </div>
		    </div>
	        <div class="informasi" id="tbhCare">
	 			<form class="form-horizontal" role="form" method="POST" id="submitOver">
			       	<br>
	 				<div class="form-group">
						<label class="control-label col-md-3">Waktu</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="inputdate" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y H:i");?>">
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3">Anamnesa</label>
						<div class="col-md-4">
							<textarea class="form-control isian" id="anamnesaOver" name="anamnesa" placeholder="Anamnesa"></textarea>
						</div>
					</div>

					<fieldset class="fsStyle">
						<legend>
			                Tanda Vital
						</legend>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Tekanan Darah</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="tekanandarahOver" name="takanandarah" placeholder="Tekanan Darah" >
							</div>
							<label class="control-label col-md-2">mmHg</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Temperatur</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="tempOver" name="temperatur" placeholder="Temperatur" >
							</div>
							<label class="control-label col-md-2">&deg;C</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Nadi</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="nadiOver" name="nadi" placeholder="Nadi" >
							</div>
							<label class="control-label col-md-2">x/menit</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Pernapasan</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="pernapasanOver" name="pernapasan" placeholder="Pernapasan" >
							</div>
							<label class="control-label col-md-2">x/menit</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Berat Badan</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="beratOver" name="berat" placeholder="Berat Badan" >
							</div>
							<label class="control-label col-md-2">Kg</label>
						</div>
			  		</fieldset>

			  		<fieldset class="fsStyle">
						<legend>
			                Diagnosa & Terapi
						</legend>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Dokter Pemeriksa</label>
							<div class="col-md-3">
								<input type="hidden" id="id_dokterOver">
								<input type="text" style="cursor:pointer;" class="form-control" id="nama_dOver" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Diagnosa Utama</label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian d1" id="k_utama_over" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian d1" id="dnama1" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Diagnosa Sekunder</label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian d2" id="k_sek_over" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian d2" id="dnama2" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian d3" id="k_sek_over2" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian d3" id="dnama3" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian d4" id="k_sek_over3" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian d4" id="dnama4" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian d5" id="k_sek_over4" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian d5" id="dnama5" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Detail Diagnosa</label>
							<div class="col-md-4">
								<textarea class="form-control" id="detail_over" name="detailDiagnosa" placeholder="Detail Diagnosa" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Terapi</label>
							<div class="col-md-4">
								<textarea class="form-control" id="terapi_over" name="terapi" placeholder="Terapi" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Alergi</label>
							<div class="col-md-3">
								<input type="text" class="form-control isian" id="alergi_over" name="alergi" placeholder="Alergi">
							</div>
						</div>
			  		</fieldset>

					<div class="form-group">
						<label class="control-label col-md-3"> </label>
						<div class="col-md-5">
							<button type="reset" id="bcancel" class="btn btn-danger">Reset</button>
							<!-- <input type="hidden" id="v_id" value="">&nbsp;&nbsp; -->
					    	<button type="submit" id="simpanOver" class="btn btn-success">Simpan</button>
					    </div>
		        	</div>
				</form>
			</div>
			<br>
			<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:20px;margin-left:20px;">
					
				<div class="portlet-body" style="margin: 20px 40px 0px 30px">
					<table id="tableOverview" class="table table-striped table-bordered table-hover table-responsive">
						<thead>
							<tr class="info" style="text_align: center;">
								<th width="20">No.</th>
								<th>Unit</th>
								<th>Anamnesa</th>
								<th>Dokter Pemeriksa</th>
								<th width="20">Action</th>
							</tr>
						</thead>
						<tbody id="tbody_overview">
							<?php
								echo "<input type='hidden' id='jml_over' value='".count($overview_history)."' ";
								$i = 0;
								if(!empty($overview_history)){
									foreach ($overview_history as $over) {
										$i++;
										echo'<tr>';
											echo'<td>'.$i.'</td>';
											echo'<td>Poli Umum</td>';
											echo'<td>'.$over['anamnesa'].'</td>';
											echo'<td>'.$over['nama_petugas'].'</td>';
											echo'<td style="text-align:center;"><a href="#riwayat_over" data-toggle="modal" onClick="detailOver(&quot;'.$over['id'].'&quot;)"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>';
										echo'</tr>';
									}
								}else{
									echo "<tr><td colspan='5' style='text-align:center;'>Data Kosong</td></tr>";
								}
							?>
							
						</tbody>
					</table>												
				</div>

			<br>
		 	
		 	<div class="dropdown" id="btnBawahCare">
		 	  	<div id="titleInformasi" >Uraian Tindakan Klinik</div>
		        <div id="btnBawahCare" class="btnBawah floatright"  style="margin-top:-25px;"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
		    </div>
	        <br>
	        <div class="modal fade" id="tambahTindakan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal" role="form" method="POST" id="submitTindakan">
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
										<div class="col-md-5">	
											<input type="hidden" id="v_id" value="<?php echo $visit_id; ?>"/>
											<input type="text" style="cursor:pointer;" class="form-control"  readonly data-provide="datetimepicker" data-date-format="dd/mm/yyyy hh:ii:ss" value="<?php echo date("d/m/Y H:i:s");?>"/>
										</div>
				        			</div>							
				        			<div class="form-group">
										<label class="control-label col-md-4">Tindakan</label>
										<div class="col-md-6">
											<select class="form-control select" name="namaTindakan" id="namaTindakan" >
												<option value="">Pilih Tindakan</option>
												<?php  
													foreach ($tindakan as $key) {
														echo "<option value=".$key['tindakan_id'].">".$key['nama_tindakan']."</option>";		
													}
												?>
												
											</select>												
										</div>
									</div>
				        			<div class="form-group">
										<label class="control-label col-md-4">Tarif</label>
										<div class="col-md-5">	
											<input type="text" class="form-control" id="tarif" name="tarif" placeholder="Tarif" readonly > 
										</div>
				        			</div>
				        			
				        			<div class="form-group">
										<label class="control-label col-md-4">On Faktur</label>
										<div class="col-md-5">	
											<input type="text" class="form-control" id="onfaktur" name="onfaktur" placeholder="On Faktur" >
										</div>
				        			</div>

				        			<div class="form-group">
										<label class="control-label col-md-4">Jumlah</label>
										<div class="col-md-5">	
											<input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" >
										</div>
				        			</div>

									<div class="form-group">
										<label class="control-label col-md-4">Paramedis</label>
										<div class="col-md-5">	
											<input type="hidden" id="paramedis_id">
											<input type="text" class="form-control" id="paramedis" autocomplete="off" spellcheck="false"  name="paramedis" placeholder="Paramedis" >
										</div>
				        			</div>
				        			
			        			</div>
		       				</div>
			        		<br><br>
			        		<div class="modal-footer">
			        			<input type="hidden" id="visit_id" value="<?php echo $this->session->userdata('visit_id'); ?>">
			 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
			 			     	<button type="submit" class="btn btn-success" id="saveTindakan">Simpan</button>
						    </div>
						</div>
					</div>
				</form>
			</div>

			<div class="tabelinformasi" id="tabelcare">
				<form class="form-horizontal" role="form" method="POST" style="margin-left:20px;margin-right:20px;">
					<div class="form-group">
						<div class="col-md-6"><a data-toggle="modal" href="#tambahTindakan" style="color:white">
							<button type="submit" class="btn btn-success" id="tndknOvervieww" style="margin-left:15px;"> Tambah</button></a>
						</div>        
					</div>
				    <div class="form-group">
				        <div class="portlet-body" style="margin: 0px 40px 0px 30px">
				            <table class="table table-striped table-bordered table-hover" id="tableCare">
								<thead>
									<tr class="info">
										<th style="width:10px;">No.</th>
										<th>Waktu</th>
										<th>Tindakan</th>
										<th>Jasa Sarana</th>
										<th>Jasa Pelayanan</th>
										<th>BAKHP</th>
										<th>On faktur</th>
										<th>Paramedis</th>
										<th>Jumlah</th>
										<th style="width:20px;">Action</th>
									</tr>
								</thead>
								<tbody id="tbody_tindakan">
									<?php  
										if (!empty($visit_care)) {
											echo '<input type="hidden" id="jmlh_table" value="'.count($visit_care).'" >';
											$i = 0;
											foreach($visit_care as $value){
												$i++;
												echo "<tr>";
													echo "<td>".$i."</td>";										
													echo "<td>".$value['waktu_tindakan']."</td>";									
													echo "<td>".$value['nama_tindakan']."</td>";												
													echo "<td>".$value['js']."</td>";										
													echo "<td>".$value['jp']."</td>";
													echo "<td>".$value['bakhp']."</td>";										
													echo "<td>".$value['on_faktur']."</td>";
													echo "<td>".$value['nama_petugas']."</td>";										
													echo "<td>".$value['jumlah']."</td>";
													echo "<td style='text-align:center'><a style='cursor:pointer;' class='hapusTindakan'><input type='hidden' class='getid' value='".$value['care_id']."''><i class='glyphicon glyphicon-trash'></i></a></td>";
												echo "</tr>";
											}
										}else{
											echo '<input type="hidden" id="jmlh_table" value="0">';
											echo "<tr><td colspan='11' style='text-align:center'>Data Kosong</td></tr>";
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</form>
			</div>

	        <div class="modal fade" id="riwayat_over" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal" role="form" method="POST" id="riwkondok">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Konsultasi Dokter</h3>
				   			</div>
							<div class="modal-body" style="padding-left:80px;">

				   				<div class="form-group">
									<label class="control-label col-md-4">Waktu Tindakan</label>
									<div class="col-md-5">	
										<input type="text" id="detail_waktu" class="form-control" readonly placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
									</div>
			        			</div>	
			        			<div class="form-group">
									<label class="control-label col-md-4">Anamnesa</label>
									<div class="col-md-7">
										<textarea class="form-control" id="detail_anamnesa" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
									</div>
								</div>

								<fieldset class="fsStyle">
									<legend>
						                Tanda Vital
									</legend>
									<div class="form-group">
										<label class="control-label col-md-4" >Tekanan Darah</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="detail_tekanan" name="takanandarah" placeholder="Tekanan Darah" readonly>
										</div>
										<label class="control-label col-md-2">mmHg</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Temperatur</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="detail_temperatur" name="temperatur" placeholder="Temperatur" readonly>
										</div>
										<label class="control-label col-md-2">&deg;C</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Nadi</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="detail_nadi" name="nadi" placeholder="Nadi" readonly>
										</div>
										<label class="control-label col-md-2">x/menit</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Pernapasan</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="detail_pernapasan" name="pernapasan" placeholder="Pernapasan" readonly>
										</div>
										<label class="control-label col-md-2">x/menit</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Berat Badan</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="detail_berat" name="berat" placeholder="Berat Badan" readonly>
										</div>
										<label class="control-label col-md-2">Kg</label>
									</div>
						  		</fieldset>

						  		<fieldset class="fsStyle">
									<legend>
						                Diagnosa & Terapi
									</legend>
									<div class="form-group">
										<label class="control-label col-md-4" >Dokter Pemeriksa</label>
										<div class="col-md-7">
											<input type="text" class="form-control" id="detail_dokter" placeholder="Search Dokter" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Diagnosa</label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="detail_kutama" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" id="detail_dutama" placeholder="Keterangan" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Detail Diagnosa</label>
										<div class="col-md-7">
											<textarea class="form-control" id="detail_detail" name="detailDiagnosa" placeholder="Detail Diagnosa" readonly></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Terapi</label>
										<div class="col-md-7">
											<textarea class="form-control" id="detail_terapi" name="terapi" placeholder="Terapi" readonly></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Alergi</label>
										<div class="col-md-7">
											<input type="text" class="form-control" id="detail_alergi" name="alergi" placeholder="Alergi" readonly>
										</div>
									</div>
						  		</fieldset>
				        	</div>
			        		
			        		<div class="modal-footer">
			        			<input type="hidden" id="visit_id" value="<?php echo $this->session->userdata('visit_id'); ?>">
			 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
						    </div>
						</div>
					</div>
				</form>
			</div>
	        <br>
		</div>

        <div class="tab-pane" id="resep">
	 		<div class="dropdown" id="btnBawahTambahResep">
    		    <div id="titleInformasi">Tambah Resep</div>
        		<div id="btnBawahTambahResep" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
        	</div>
            <br>
        	<div class="informasi" id="tambahResep">
        		<form class="form-horizontal" role="form" method="POST" id="submitresep">
					<div class="form-group">
						<label class="control-label col-md-3">Dokter</label>
						<div class="col-md-3">
							<input type="hidden" id="resepdokter">
							<input type="text" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter" id="namadokter">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3">Tanggal</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="tgl_resep" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Deskripsi Resep</label>
						<div class="col-md-5">
							<textarea class="form-control" name="deskripsiResep" placeholder="Deskripsi Resep" id="deskripsiResep"></textarea>							
						</div>
					</div>

					<!-- <div class="form-group">
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
					</div> -->
					
					<div class="form-group">
						<label class="control-label col-md-3"> </label>
						<div class="col-md-5">
							<button type="reset" data-dismiss="modal" class="btn btn-danger">Reset</button>	&nbsp;
					    	<button type="submit" class="btn btn-success">Simpan</button>
					    </div>
			        </div>
			        <br>
				</form>	
			</div>

	 		<div class="dropdown" id="btnBawahTabelResep">
		        <div id="titleInformasi">Tabel Resep</div>
		        <div id="btnBawahTabelResep" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
            <br>

        	<div class="tabelinformasi" id="tblResep">
	        	<div class="portlet-body" style="margin: 0px 40px 0px 10px">
					<table class="table table-striped table-bordered table-hover" id="tabelresepbersalin">
						<thead>
						<tr class="info">
							<th>Dokter</th>
							<th>Tanggal</th>
							<th>Deskripsi Resep</th>
							<th>Status Bayar</th>
							<th>Status Ambil</th>
							<th>Delete</th>
						</tr>
						</thead>
						<tbody id="tbody_resep">
						<?php  
							if (!empty($visit_resep)) {
								foreach ($visit_resep as $value) {
									echo '<tr>';
									echo '<td>'.$value['nama_petugas'].'</td>';										
									echo '<td>'.$value['tanggal'].'</td>';										
									echo '<td>'.$value['resep'].'</td>';										
									echo '<td>-</td>';										
									echo '<td>-</td>';										
									echo '<td style="text-align:center">';
									echo '<a style="cursor:pointer;" class="hapusresep"><input type="hidden" class="getid" value="'.$value['resep_id'].'"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>';
									echo '</td>';
									//echo '<td class="resep_id" style="display:none" >'.$value['resep_id'].'</td>';											
									echo '</tr>';
								}
							}else{
								echo '<tr>';
								echo '<td colspan="6"><center>Data Kosong</center><input type="hidden" id="checktable" value="null"/></td>';
								echo '</tr>';
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
        </div>

        <div class="tab-pane" id="penunjang">
	        <div class="dropdown" id="btnBawahPenunjang">
		        <div id="titleInformasi">Pemeriksaan Penunjang</div>
		        <div class="btnBawah" id="btnBawahPenunjang"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
		    </div>
		    <br>

            <div class="informasi" id="infoPenunjang">
	            <form class="form-horizontal">
	          		<div class="form-group">
						<label class="control-label col-md-3">Tanggal</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
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
												<tbody id="tbody_pengirim">
													<tr>
														<td colspan="2" style="text-align:center;">Cari Data Pengirim</td>
														<!-- <td style="text-align:center"><a href="#"><i class="glyphicon glyphicon-check"></i></a></td> -->
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
	      					<button type="button" data-dismiss="modal" class="btn btn-warning">Cancel</button>	
	 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Tambah</button>
				      	</div>
	        		</div>        	
	        	</div>
	        </div>

	        <div class="dropdown" id="btnBawahTabelRiwayat">
		        <div id="titleInformasi">Tabel Riwayat Pemeriksaan</div>
		        <div id="btnBawahTabelRiwayat" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
            <br>

        	<div class="tabelinformasi" id="tblRiwayat">
	        	<div class="portlet-body" style="margin: 0px 40px 0px 30px">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info">
								<th> Tanggak Tindakan</th>
								<th> Departemen Penunjang</th>
								<th> Rujukan</th>
								<th> Keterangan Order</th>
								<th style="width:20px;"> Details</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>12/12/2012</td>										
								<td>Labolatorium</td>										
								<td>APS</td>										
								<td>Obat</td>											
								<td style="text-align:center">
									<a href="#viewRiwayat" data-toggle="modal" data-placement="top"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="View Details"></i></a>
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
										<label class="control-label1 col-md-3 nama goright">Order ID:</label>
										<div class="col-md-9 nama">	0001 </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-3 goright">Tanggal Tindakan:</label>
										<div class="col-md-8">
											12 Desember 2012
										</div>
									</div>
								</div>
								
								
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-4 goright">Departemen Penunjang:</label>
										<div class="col-md-8"> Labolatorium	</div>
									</div>
								</div>
								
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-3 goright">Keterangan Order:</label>
										<div class="col-md-8">terserah</div>
									</div>
								</div>								
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-4 goright">Status Hasil:</label>
										<div class="col-md-8">SELESAI</div>
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
        	<div class="dropdown" id="btnBawahOrder">
	            <div id="titleInformasi">Order Kamar Operasi</div>
	            <div class="btnBawah" id="btnBawahOrder"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>

	        <div class="informasi" id="infoKamar">
	            <form class="form-horizontal" method="POST" id="submit_order_operasi">
	          		<div class="form-group">
						<label class="control-label col-md-3">Waktu Pelaksanaan</label>
						<div class="col-md-3" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="wktpelaksanaan" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii:ss" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i:s");?>">
							</div>
						</div>
					</div>	

					<div class="form-group">
						<label class="control-label col-md-3">Dokter</label>
						<div class="col-md-3">
							<input type="hidden" id="iddokter_o">
							<input type="text" class="form-control" id="namadokter_o" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter">
						</div>
					</div>

					<!-- <div class="form-group">
						<label class="control-label col-md-3" >Tujuan Order</label>
						<div class="col-md-3">			
							<select class="form-control select" name="order" id="order">
								<option value="Kamar Operasi" selected>Kamar Operasi</option>
								<option value="Laboratorium">Laboratorium</option>
								<option value="Radiologi"  >Radiologi</option>
								<option value="Fisioterapi" >Fisioterapi</option>
							</select>		
						</div>							
					</div> -->

					<div class="form-group">
						<label class="control-label col-md-3" >Jenis Operasi</label>
						<div class="col-md-4">			
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
							<textarea class="form-control" rows="5" id="alasanoperasi" placeholder="Alasan"></textarea>
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

			<div class="dropdown" id="btnTableKamarOperasi">
	            <div id="titleInformasi">Table Daftar Kamar Operasi</div>
	            <div class="btnBawah" id="btnTableKamarOperasi"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
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
								<th> </th>
							</tr>
						</thead>
						<tbody id="tbody_order">
						<?php
							$i = 1;
							echo "<input type='hidden' id='jml_data' value='".count($order_operasi)."'>";
							if(!empty($order_operasi)){
								foreach ($order_operasi as $value) {
									echo"
										<tr>
											<td>".$i."</td>
											<td>".$value['waktu_mulai']."5</td>
											<td>".$value['nama_petugas']."</td>										
											<td>Kamar Operasi</td>
											<td>".$value['alasan']."</td>
											<td style='text-align:center'>
												<i class='glyphicon glyphicon-trash hapusorder' onclick='hapus_order(&quot;".$value['order_operasi_id']."&quot;)' data-toggle='tooltip' data-placement='top' style='cursor:pointer;' title='Hapus'><input type='hidden' class='getid' value='".$value['order_operasi_id']."'></i>
											</td>										
										</tr>
									";
									//'<i class="glyphicon glyphicon-trash" onclick="hapus_order(&quot;'+data['order_operasi_id']+'&quot;)" data-toggle="tooltip" data-placement="top" title="Hapus" style="cursor:pointer;"></i>'
									$i++;
								}
							}else{
								echo '<tr>';
								echo '<td colspan="6"><center>Data Kosong</center><input type="hidden" id="checktable" value="null"/></td>';
								echo '</tr>';
							}
						?>
						</tbody>
					</table>
				</div>	<br><br>
			</div>	<!-- End Dropdown -->
        </div>

        <div class="tab-pane" id="konsul">
        	<div class="dropdown" id="btnBawahOrderKonsul">
	            <div id="titleInformasi">Order Konsultasi Gizi</div>
	            <div class="btnBawah" id="btnBawahOrderKonsul"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>
	       
	        <div class="informasi" id="infoKonsul">
		      	<form class="form-horizontal" role="form" id="submit_gizi">
		          		<div class="form-group">
							<label class="control-label col-md-3">Tanggal Konsultasi</label>
							<div class="col-md-2" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" id="tanggal_gizi" style="cursor:pointer;" id="tgl_gizi" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
								</div>
							</div>
						</div>	

						<div class="form-group">
							<label class="control-label col-md-3" >Konsultan Gizi</label>
							<div class="col-md-3">
								<input type="hidden"s id="k_gizi_id">
								<input type="text" class="form-control" id="k_gizi_nama" placeholder="Search Konsultan" data-toggle="modal" data-target="#searchDokter">
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

						<!-- <div class="form-group">
							<label class="control-label col-md-3">Data Lab Pasien</label>
							<div class="col-md-4">
								<input type="text" class="form-control" name="dataLabPasien" placeholder="Data Lab Pasien">
							</div>
						</div> -->

						<div class="form-group">
							<label class="control-label col-md-3">Kajian Diet</label>
							<div class="col-md-5">			
								<textarea class="form-control" rows="2" id="kajianDiet"  placeholder="Kajian Diet"></textarea>
								
						 	</div>		
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Detail Menu Sehari-hari</label>
							<div class="col-md-5">			
								<textarea class="form-control" rows="2" id="DetailMenu"  placeholder="Detail Menu"></textarea>
								
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

			<div class="dropdown" id="btnTabelKonsultasi">
	            <div id="titleInformasi">Table Daftar Konsultasi Gizi</div>
	           	<div class="btnBawah" id="btnTabelKonsultasi"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
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
										<th>Kajian Diet</th>
										<th>Detail Menu Sehari-hari</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody id="tbody_gizi">
								
								<?php
									echo"<input type='hidden' id='jml_gizi' value='".count($gizi)."'>";

									if(!empty($gizi)){
										foreach ($gizi as $data) {
											echo'
												<tr>
													<td>'.$data['tanggal'].'</td>
													<td>'.$data['konsultan'].'</td>
													<td>'.$data['kajian_gizi'].'</td>										
													<td>'.$data['anamnesa_diet'].'</td>
													<td>'.$data['kajian_diet'].'</td>
													<td>'.$data['detail_menu'].'</td>
													<td style="text-align:center">
														<a style="cursor:pointer;" class="hapusgizi"><input type="hidden" class="getid" value="'.$data['gizi_id'].'"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
														<a href="#print"><i class="glyphicon glyphicon-print"  data-toggle="tooltip" data-placement="top" title="Print"></i></a>
													</td>										
												</tr>
											';
											$i++;
										}
									}else{
										echo '<tr>';
										echo '<td colspan="8"><center>Data Kosong</center><input type="hidden" id="checktable" value="null"/></td>';
										echo '</tr>';
									}
								?>

								</tbody>
							</table>
				</div>	<br><br>
			</div>	
        </div>   

        <div class="tab-pane" id="riwayat">
         	<div class="dropdown" id="rwp1">
            	<div id="titleInformasi">Riwayat Klinik</div>
            	<div class="btnBawah" id="btnBawahRiwayat"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <div class="portlet-body" id="tblrwp1" style="margin: 20px 40px 0px 40px">
            	
				<table class="table table-striped table-bordered table-hover table-responsive tableDT">
					<thead>
						<tr class="info" style="text_align: center;">
							<th width="20">No.</th>
							<th>Tanggal</th>
							<th>Unit</th>
							<th>Anamnesa</th>
							<th>Dokter Pemeriksa</th>
							<th style="width:20px;">Action</th>
						</tr>
					</thead>
					<tbody id="tbody_r_klinik">	
						<?php
							$i = 0;
							foreach ($riwayat_klinik as $data) {
								$i++;
								$tgl = strtotime($data['waktu']);
								$hasil = date('d F Y H:i:s', $tgl);

								echo '
									<tr>
										<td>'.$i.'</td>
										<td style="text-align:center">'.$hasil.'</td>
										<td>'.$data['nama_dept'].'</td>
										<td>'.$data['anamnesa'].'</td>
										<td>'.$data['nama_petugas'].'</td>
										<td style="text-align:center;"><a href="#riwkklin" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
									</tr>
								';
							}
						?>					
						<!-- <tr>
							<td>1</td>
							<td style="text-align:center">12 Januari 2012 </td>
							<td style="text-align:center">12:12</td>
							<td>Poli Umum</td>
							<td>Panjang Banget Isinya</td>
							<td>Widnyana Santika</td>
							<td style="text-align:center;"><a href="#riwkklin" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
						</tr> -->
					</tbody>
				</table>												
			</div>

			<div class="modal fade" id="riwkklin" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal" role="form" method="POST" id="riwkondok">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Klinik</h3>
				   			</div>
							<div class="modal-body" style="padding-left:80px;">

				   				<div class="form-group">
									<label class="control-label col-md-4">Waktu Tindakan</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" readonly placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
									</div>
			        			</div>	
			        			<div class="form-group">
									<label class="control-label col-md-4">Anamnesa</label>
									<div class="col-md-7">
										<textarea class="form-control" id="anamnesa" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
									</div>
								</div>

								<fieldset class="fsStyle">
									<legend>
						                Tanda Vital
									</legend>
									<div class="form-group">
										<label class="control-label col-md-4" >Tekanan Darah</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="tekanandarah" name="takanandarah" placeholder="Tekanan Darah" readonly>
										</div>
										<label class="control-label col-md-2">mmHg</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Temperatur</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="temperatur" name="temperatur" placeholder="Temperatur" readonly>
										</div>
										<label class="control-label col-md-2">&deg;C</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Nadi</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="nadi" name="nadi" placeholder="Nadi" readonly>
										</div>
										<label class="control-label col-md-2">x/menit</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Pernapasan</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="pernapasan" name="pernapasan" placeholder="Pernapasan" readonly>
										</div>
										<label class="control-label col-md-2">x/menit</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Berat Badan</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="berat" name="berat" placeholder="Berat Badan" readonly>
										</div>
										<label class="control-label col-md-2">Kg</label>
									</div>
						  		</fieldset>

						  		<fieldset class="fsStyle">
									<legend>
						                Diagnosa & Terapi
									</legend>
									<div class="form-group">
										<label class="control-label col-md-4" >Dokter Pemeriksa</label>
										<div class="col-md-7">
											<input type="text" class="form-control" id="dokter" placeholder="Search Dokter" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Diagnosa Utama</label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_utama" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Diagnosa" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Diagnosa Sekunder</label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_sek1" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Diagnosa" readonly>
										</div>
										<label class="control-label">1</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" ></label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_sek2" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Diagnosa" readonly>
										</div>
										<label class="control-label">2</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" ></label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_sek3" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Diagnosa" readonly>
										</div>
										<label  class="control-label">3</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" ></label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_sek4" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Diagnosa" readonly>
										</div>
										<label class="control-label">4</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Detail Diagnosa</label>
										<div class="col-md-7">
											<textarea class="form-control" id="detailDiagnosa" name="detailDiagnosa" placeholder="Detail Diagnosa" readonly></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Terapi</label>
										<div class="col-md-7">
											<textarea class="form-control" id="terapi" name="terapi" placeholder="Terapi" readonly></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Alergi</label>
										<div class="col-md-7">
											<input type="text" class="form-control" id="alergi" name="alergi" placeholder="Alergi" readonly>
										</div>
									</div>
						  		</fieldset>
				        	</div>
			        		
			        		<div class="modal-footer">
			        			
			 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
						    </div>
						</div>
					</div>
				</form>
			</div>
            <br>	

            <div class="dropdown" id="rwp2">
            	<div id="titleInformasi">Riwayat IGD</div>
            	<div class="btnBawah" id="btnBawahRiwayat"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <div class="portlet-body" id="tblrwp2" style="margin: 20px 40px 0px 40px">
            	
				<table class="table table-striped table-bordered table-hover table-responsive tableDT">
					<thead>
						<tr class="info" style="text_align: center;">
							<th width="20">No.</th>
							<th>Tanggal</th>
							<th>Waktu</th>
							<th>Anamnesa</th>
							<th>Dokter Jaga</th>
							<th>Perawat Jaga</th>
							<th style="width:20px;">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td style="text-align:center">12 Desember 2012 </td>
							<td style="text-align:center">12:12</td>
							<td>Bebas</td>
							<td>Bebas</td>
							<td>Bebas</td>
							<td style="text-align:center;"><a href="#riwigd" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
						</tr>
					</tbody>
				</table>												
			</div>
			<div class="modal fade" id="riwigd" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal" role="form" method="POST" id="riwkondok">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Penanganan IGD</h3>
				   			</div>
							<div class="modal-body" style="padding-left:80px;">

				   				<div class="form-group">
									<label class="control-label col-md-4">Waktu Tindakan</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" readonly placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
									</div>
			        			</div>	
			        			<div class="form-group">
									<label class="control-label col-md-4">Anamnesa</label>
									<div class="col-md-7">
										<textarea class="form-control" id="anamnesa" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
									</div>
								</div>

								<fieldset class="fsStyle">
									<legend>
						                Tanda Vital
									</legend>
									<div class="form-group">
										<label class="control-label col-md-4" >Tekanan Darah</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="tekanandarah" name="takanandarah" placeholder="Tekanan Darah" readonly>
										</div>
										<label class="control-label col-md-2">mmHg</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Temperatur</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="temperatur" name="temperatur" placeholder="Temperatur" readonly>
										</div>
										<label class="control-label col-md-2">&deg;C</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Nadi</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="nadi" name="nadi" placeholder="Nadi" readonly>
										</div>
										<label class="control-label col-md-2">x/menit</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Pernapasan</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="pernapasan" name="pernapasan" placeholder="Pernapasan" readonly>
										</div>
										<label class="control-label col-md-2">x/menit</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Berat Badan</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="berat" name="berat" placeholder="Berat Badan" readonly>
										</div>
										<label class="control-label col-md-2">Kg</label>
									</div>
						  		</fieldset>

						  		<fieldset class="fsStyle">
									<legend>
						                Pemeriksaan Fisik
									</legend>
									<div class="form-group">
										<label class="control-label col-md-4" >Kepala & Leher</label>
										<div class="col-md-7">
											<input type="text" class="form-control" id="kepalaleher" name="kepalaleher" placeholder="Kepala & Leher" readonly>
										</div>
										
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Thorax & ABD</label>
										<div class="col-md-7">
											<input type="text" class="form-control" id="thorax" name="thorax" placeholder="Thorax & ABD" readonly>
										</div>
										
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Extremitas</label>
										<div class="col-md-7">
											<input type="text" class="form-control" id="Extremitas" name="Extremitas" placeholder="Extremitas" readonly>
										</div>
										
									</div>
									
						  		</fieldset>

						  		<fieldset class="fsStyle">
									<legend>
						                Diagnosa & Terapi
									</legend>
									<div class="form-group">
										<label class="control-label col-md-4" >Dokter Jaga</label>
										<div class="col-md-7">
											<input type="text" class="form-control" id="dokter" placeholder="Search Dokter" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Perawat Jaga</label>
										<div class="col-md-7">
											<input type="text" class="form-control" id="dokter" placeholder="Search Dokter" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Diagnosa Utama</label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_utama" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Keterangan" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Diagnosa Sekunder</label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_sek1" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Keterangan" readonly>
										</div>
										<label class="control-label">1</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" ></label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_sek2" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Keterangan" readonly>
										</div>
										<label class="control-label">2</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" ></label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_sek3" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Keterangan" readonly>
										</div>
										<label class="control-label">3</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" ></label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_sek4" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Keterangan" readonly>
										</div>
										<label class="control-label">4</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Detail Diagnosa</label>
										<div class="col-md-7">
											<textarea class="form-control" id="detailDiagnosa" name="detailDiagnosa" placeholder="Detail Diagnosa" readonly></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Terapi</label>
										<div class="col-md-7">
											<textarea class="form-control" id="terapi" name="terapi" placeholder="Terapi" readonly></textarea>
										</div>
									</div>
									
						  		</fieldset>
				        	</div>
			        		
			        		<div class="modal-footer">
			        			<input type="hidden" id="visit_id" value="<?php echo $this->session->userdata('visit_id'); ?>">
			 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
						    </div>
						</div>
					</div>
				</form>
			</div>
			<br>

			<div class="dropdown" id="rwp3">
            	<div id="titleInformasi">Riwayat Perawatan</div>
            	<div class="btnBawah" id="btnBawahRiwayat"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <div class="portlet-body" id="tblrwp3" style="margin: 20px 40px 0px 40px">
            	
            	<table class="table table-striped table-bordered table-hover table-responsive tableDT">
					<thead>
						<tr class="info" style="text_align: center;">
							<th style="width:10px;">No.</th>
							<th>Tanggal</th>
							<th>Waktu</th>
							<th>Dokter Visit</th>
							<th>Diagnosa Utama</th>
							<th>Diagnosa Sekunder</th>
							<th>Perkembangan Penyakit</th>
							<th style="width:20px;">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td style="text-align:center">12 Desember 2012</td>
							<td>12:12</td>
							<td>Jems</td>
							<td>Bebas</td>
							<td>Bebas</td>
							<td>Bebas</td>
							<td style="text-align:center;"><a href="#riwperawatan" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
						</tr>
					</tbody>
				</table>												
			</div>
			<div class="modal fade" id="riwperawatan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal" role="form" method="POST" id="riwkondok">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Perawatan</h3>
				   			</div>
							<div class="modal-body" style="padding-left:80px;">

				   				<div class="form-group">
									<label class="control-label col-md-4">Waktu Tindakan</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" readonly placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
									</div>
			        			</div>	

			        			<div class="form-group">
									<label class="control-label col-md-4">Dokter Visit</label>
									<div class="col-md-5">
										<input type="text" class="form-control" id="dokterv" name="dokterv" placeholder="Dokter" readonly></textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4">Petugas</label>
									<div class="col-md-7">
										<input type="text" class="form-control" id="petugas" name="petugas" placeholder="Petugas" readonly></textarea>
									</div>
								</div>

			        			<div class="form-group">
									<label class="control-label col-md-4">Anamnesa</label>
									<div class="col-md-7">
										<textarea class="form-control" id="anamnesa" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4" >Diagnosa Utama</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="kode_utama" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="Keterangan" readonly>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4" >Diagnosa Sekunder</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="kode_sek1" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="Keterangan" readonly>
									</div>
									<label class="label-cntrol">1</label>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4" ></label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="kode_se2" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="Keterangan" readonly>
									</div>
									<label class="label-cntrol">2</label>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4" ></label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="kode_sek3" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="Keterangan" readonly>
									</div>
									<label class="label-cntrol">3</label>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4" ></label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="kode_sek4" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="Keterangan" readonly>
									</div>
									<label class="label-cntrol">4</label>
								</div>


								<div class="form-group">
									<label class="control-label col-md-4">Perbangan Penyakit</label>
									<div class="col-md-7">
										<textarea class="form-control" id="perkembangan" name="perkembangan" placeholder="Perkembangan Penyakit" readonly></textarea>
									</div>
								</div>

								<fieldset class="fsStyle">
									<legend>
						                Tanda Vital
									</legend>
									<div class="form-group">
										<label class="control-label col-md-4" >Tekanan Darah</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="tekanandarah" name="takanandarah" placeholder="Tekanan Darah" readonly>
										</div>
										<label class="control-label col-md-2">mmHg</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Temperatur</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="temperatur" name="temperatur" placeholder="Temperatur" readonly>
										</div>
										<label class="control-label col-md-2">&deg;C</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Nadi</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="nadi" name="nadi" placeholder="Nadi" readonly>
										</div>
										<label class="control-label col-md-2">x/menit</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Pernapasan</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="pernapasan" name="pernapasan" placeholder="Pernapasan" readonly>
										</div>
										<label class="control-label col-md-2">x/menit</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Berat Badan</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="berat" name="berat" placeholder="Berat Badan" readonly>
										</div>
										<label class="control-label col-md-2">Kg</label>
									</div>
						  		</fieldset>

				        	</div>
			        		
			        		<div class="modal-footer">
			        			<input type="hidden" id="visit_id" value="<?php echo $this->session->userdata('visit_id'); ?>">
			 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
						    </div>
						</div>
					</div>
				</form>
			</div>
			<br>
        </div>
        <div class="tab-pane" id="resume">
        	<div class="dropdown">
	            <div id="titleInformasi">Resume Pulang Pasien <span style="color:red; margin-left:30px;font-style:italic;">WAJIB DIISI!</span> </div>
	            <!-- <div class="btnBawah" id="btnBawahResumePulang"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div>  -->
            </div>

            <div class="informasi" id="infoResumePulang">
            	<form class="form-horizontal" role="form" id="submit_resume">
            		<div class="form-group">
						<label class="control-label col-md-3">Waktu Keluar <span class="required">* </span></label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="waktuPulang" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i:s");?>">
							</div>
						</div>
					</div>	
	
					<div class="form-group">
						<label class="control-label col-md-3" >Alasan Keluar<span class="required">* </span>
						</label>
						<div class="col-md-3">			
							<select class="form-control select" name="alasanKeluarPasien" id="alasanKeluarPasien">
								<option value="" selected>Pilih</option>									
								<option value="Pasien Dipulangkan">Pasien Dipulangkan</option>									
								<option value="Pasien Dipindahkan">Pasien Pindah Poli Lain</option>
								<option value="Atas Permintaan Sendiri">Atas Permintaan Sendiri</option>
								<option value="Rujuk Rumah Sakit Lain"  >Rujuk ke Rumah Sakit Lain</option>
								<option value="Pasien Meninggal" >Pasien Meninggal</option>
								<option value="Rujuk Rawat Inap" >Rujuk Rawat Inap</option>
								<option value="Rujuk IGD" >Rujuk IGD</option>
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
					 	</div>
					</div>

					<div class="form-group" id="dokter_resume">
						<label class="control-label col-md-3">Dokter</label>
						<div class="col-md-3">
							<input type="hidden" id="iddokter_res">
							<input type="text" class="form-control" id="namadokter_res" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter">
						</div>
					</div>

					<div class="form-group" id="poli_res">
							<label class="control-label col-md-3">Poliklinik</label>
							<div class="col-md-5">
								<select class="form-control select" name="poli" id="poli_resume">
									<option value="" selected>Pilih Poliklinik</option>
									<?php foreach( $poliklinik as $poli ) { ?>
										<option value="<?php echo $poli['dept_id']; ?>" >
											<?php echo $poli['nama_dept']; ?>
										</option>
									<?php } ?>
								</select>												
							</div>
						</div>

					
					<div class="form-group" id="isiRujuk">
						<label class="control-label col-md-3" >Isian Rumah Sakit Rujukan<span class="required">* </span>
						</label>
						<div class="col-md-4">			
							<input type="text" class="form-control" id="isianRSRujuk" name="isianRSRujuk" placeholder="Rumah Sakit Rujukan">
					 	</div>
					</div>				

					<div class="form-group" id="semuaPoli">
						<label class="control-label col-md-3" >Semua Poli<span class="required">* </span>
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
						<label class="control-label col-md-3" >Rekomendasi Dokter<span class="required">* </span>
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
						<label class="control-label col-md-3" >Rekomendasi Unit<span class="required">* </span>
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
						<label class="control-label col-md-3" >Detail Pasien Meninggal<span class="required">* </span>
						</label>
						<div class="col-md-4">			
							<select class="form-control select" name="detPasDie" id="detPasDie">
								<option value="sebelum dirawat" selected>Meninggal sebelum dirawat</option>
								<option value="sesudah dirawat > 48">Meninggal sesudah dirawat > 48 jam</option>
								<option value="sesudah dirawat < 48">Meninggal sesudah dirawat < 48 jam</option>
							</select>
					 	</div>							
					</div>

					<div class="form-group" id="pasienMeninggal">
						<label class="control-label col-md-3">Waktu Pasien Meninggal</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="waktuMeninggal" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y H:i");?>">
							</div>
						</div>
					</div>
					
					<div class="form-group" id="ketMati">
						<label class="control-label col-md-3"> Keterangan Kematian
						</label>
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
										<input type="radio"  name="jkasus" id="klama" value="1"/><span style="margin-left:15px">Kasus Lama </span> 
									</label>
									<label style="margin-left:40px;">
										<input type="radio"  name="jkasus" id="kbaru" value="0"/><span style="margin-left:15px">Kasus Baru </span>
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group" style="margin-top:10px">
						<div class="form-inline">
							<label class="control-label col-md-3">Jenis Kunjungan <span class="required">* </span></label>
							<div class="col-md-7">
								<div class="radio-list">
									<label>
										<input type="radio"  name="jnsKunjungan" id="knjunganLama" value="1" data-title="Lama"/><span style="margin-left:10px">Kunjungan Lama</span> 
									</label>
									<label style="margin-left: 18px">
										<input type="radio"  name="jnsKunjungan" id="knjunganBaru" value="0" data-title="Baru"/><span style="margin-left:10px">Kunjungan Baru </span>
									</label>
								</div>
							</div>
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-md-3" >
						</label>
						<div class="col-md-5">
							<a href="#cancelResume"><button type="button" class="btn btn-danger">
								Cancel </button></a>
							&nbsp;&nbsp;
					 		<a href="#resetResume"><button type="reset" class="btn btn-warning">
								Reset </button></a>		
							&nbsp;&nbsp;
							<a href="#simpanResume"><button type="submit" class="btn btn-success">
							Simpan </button></a>		
						
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
							<form method="POST" id="search_diagnosa">	
							<div class="col-md-5">
								<input type="text" class="form-control" name="katakunci" id="katakunci_diag" placeholder="Kata kunci"/>
							</div>
							<div class="col-md-2">
								<button type="submit" class="btn btn-info">Cari</button>
							</div>	
							</form>
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
								<tbody id="tbody_diagnosa">
									<tr><td colspan="3" style="text-align:center;">Cari Data Diagnosa</td></tr>
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

		
		<div class="modal fade" id="searchPerawat" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Pilih Perawat</h3>
        			</div>
        			<div class="modal-body">
						<div class="form-group">	
							<div class="col-md-5">
								<input type="text" class="form-control" name="katakunci" id="inputPerawat" placeholder="Nama perawat"/>
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
										<td>Nama Perawat</td>
										<td width="10%">Pilih</td>
									</tr>
								</thead>
								<tbody id="tbody_petugas">
									<?php
										if(!empty($dokter)){
											foreach ($dokter as $d) {
												echo "<tr>";
													echo "<td>".$d['nama_petugas']."</td>";
													echo "<td style='text-align:center'><i class='glyphicon glyphicon-check' style='cursor:pointer;' onclick='getDokter(&quot;".$d['petugas_id']."&quot; , &quot;".$d['nama_petugas']."&quot;)'></i></td>";
												echo"</tr>";
											}
										}else{
											echo "<tr>";
												echo "<td colspan='2'>Data Kosong</td>";
											echo"</tr>";
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
								<input type="text" class="form-control" name="katakunci" id="inputDokter" placeholder="Nama dokter"/>
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
								<tbody id="tbody_dokter">
									<?php
										// if(!empty($dokter)){
										// 	foreach ($dokter as $d) {
										// 		echo "<tr>";
										// 			echo "<td>".$d['nama_petugas']."</td>";
										// 			echo "<td style='text-align:center'><i class='glyphicon glyphicon-check' style='cursor:pointer;' onclick='getDokter(&quot;".$d['petugas_id']."&quot; , &quot;".$d['nama_petugas']."&quot;)'></i></td>";
										// 		echo"</tr>";
										// 	}
										// }else{
										// 	echo "<tr>";
										// 		echo "<td colspan='2'>Data Kosong</td>";
										// 	echo"</tr>";
										// }
									?>
										<tr>
											<td colspan='2' style="text-align:center;">Cari Data Dokter</td>
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

<script type="text/javascript">
	$(document).ready(function(){
		//$('#v_id').val(localStorage.getItem('visit_id'));
		$('#paramedis').focus(function(){
			var $input = $('#paramedis');
			
			$.ajax({
				type:'POST',
				url:'<?php echo base_url();?>rawatjalan/daftarpasien/get_dokter',
				success:function(data){
					var autodata = [];
					var iddata = [];

					for(var i = 0; i<data.length; i++){
						autodata.push(data[i]['nama_petugas']);
						iddata.push(data[i]['petugas_id']);
					}
					console.log(autodata);

					$input.typeahead({source:autodata, 
			            autoSelect: true}); 

					$input.change(function() {
					    var current = $input.typeahead("getActive");
					    var index = autodata.indexOf(current);

					    $('#paramedis_id').val(iddata[index]);
					    
					    if (current) {
					        // Some item from your model is active!
					        if (current.name == $input.val()) {
					            // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
					        } else {
					            // This means it is only a partial match, you can either add a new item 
					            // or take the active if you don't want new items
					        }
					    } else {
					        // Nothing is active so it is a new value (or maybe empty value)
					    }
					});
				}
			});
		});
		//----------------- overview tab -----------------//
		$('#submitresep').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};

			item[number]['dokter'] = $('#resepdokter').val();
			item[number]['visit_id'] = <?php echo $visit_id; ?>;
			item[number]['resep'] = $('#deskripsiResep').val();

			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>rawatjalan/daftarpasien/save_visit_resep",
				success: function (data) {
					console.log(data);

					if($('#checktable').val()=='null'){
						$('#tbody_resep').empty() ;
						$('#checktable').val('done')
					}

					$('#resepdokter').val('');
					$('#resep').val('');
						jQuery('#tabelresepbersalin tbody:first').append(
							"<tr>"+
							"<td>"+data['nama_petugas']+"</td>"+
							"<td>"+data['tanggal']+"</td>"+
							"<td>"+data['resep']+"</td>"+
							"<td>-</td>"+
							"<td>-</td>"+
							'<td style="text-align:center"><a style="cursor:pointer;" class="hapusresep"><input type="hidden" class="getid" value="'+data['resep_id']+'"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a></td>'+
							'<td class="resep_id" style="display:none" >'+data['resep_id']+'</td>'+
							"</tr>"
						);

					$('#namadokter').val('');
					$('#deskripsiResep').val('');

				},
				error: function (data) {
					alert('gagal');
					
				}
			});
		});
		
		$('#namaTindakan').change(function() {
			var tindakan_id = $('#namaTindakan').find('option:selected').val();

			if(tindakan_id!=0){
				$.ajax({
					type: "POST",
					data : tindakan_id,
					url: "<?php echo base_url()?>rawatjalan/daftarpasien/get_tindakan/" + tindakan_id,
					success: function (data) {
						var total = parseInt(data['js'])+parseInt(data['jp'])+parseInt(data['bakhp']);

						$('#tarif').val(total);

						//console.log(data);
					},
					error: function (data) {
						alert('gagal');
						
					}
				});
			}else{
				$('#js').val('');
				$('#jp').val('');
				$('#bakhp').val('');
			}
		});

		$('#jumlah').focus(function(){
			var onfaktur = $('#onfaktur').val();
			var tarif = $('#tarif').val();
			var jumlah = parseInt(onfaktur)+parseInt(tarif);
			$(this).val(jumlah);
		});

		$('#submitTindakan').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};

			item[number]['tindakan_id'] = $('#namaTindakan').find('option:selected').val();
			item[number]['visit_id'] = $('#v_id').val();//localStorage.getItem('visit_id');//$('#visit_id').val();			
			item[number]['on_faktur'] = $('#onfaktur').val();
			item[number]['paramedis'] = $('#paramedis_id').val();
			item[number]['tarif'] = $('#tarif').val();
			item[number]['jumlah'] = $('#jumlah').val();

			//item[number]['kat_id'] = $('#kategori').find('option:selected').val();

			// console.log(item);
			// return false;
			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>rawatjalan/daftarpasien/save_tindakan",
				success: function (data) {
					console.log(data);

					//$('#namaTindakan').find('option:selected').val();
					//$('#visit_id').val('');
					$('#tarif').val('');
					$('#onfaktur').val('');
					$('#paramedis').val('');
					$('#tarif').val('');
					$('#harga').val('');

					//$('#kategori').find('option:selected').val();
					var no = $('#jmlh_table').val();
					if(no==0){
						$('#tbody_tindakan').empty();
					}
					no++;

					$('#tbody_tindakan').append(
						"<tr>"+
						"<td>"+no+"</td>"+
						"<td>"+data['waktu_tindakan']+"</td>"+
						"<td>"+data['nama_tindakan']+"</td>"+
						"<td>"+data['js']+"</td>"+
						"<td>"+data['jp']+"</td>"+
						"<td>"+data['bakhp']+"</td>"+
						"<td>"+data['on_faktur']+"</td>"+
						"<td>"+data['nama_petugas']+"</td>"+
						"<td>"+data['jumlah']+"</td>"+
						"<td style='text-align:center'><a class='hapusTindakan' style='cursor:pointer;'><input type='hidden' class='getid' value='"+data['care_id']+"''><i class='glyphicon glyphicon-trash'></i></a></td>"+
						"</tr>"
					);

				},
				error: function (data) {
					console.log(data);
					alert('gagal');
					
				}
			});
			$('#tambahTindakan').modal('hide');
		});

		$(document).on('click','.hapusTindakan',function(){
			var id = $(this).children('.getid').val();
			var tr = $(this).parent().parent();
			var v_id = $('#v_id').val();

			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>rawatjalan/daftarpasien/hapus_tindakan/"+id+"/"+v_id,
				success:function(data){
					console.log(data);

					$('#tbody_tindakan').empty();

					if(data.length>0){
						$('#tbody_tindakan').append(
							'<input type="hidden" id="jmlh_table" value="'+data.length+'" >'
						);
						for(var i = 0; i<data.length; i++){
							$('#tbody_tindakan').append(
								"<tr>"+
								"<td>"+(i+1)+"</td>"+
								"<td>"+data[i]['waktu_tindakan']+"</td>"+
								"<td>"+data[i]['nama_tindakan']+"</td>"+
								"<td>"+data[i]['js']+"</td>"+
								"<td>"+data[i]['jp']+"</td>"+
								"<td>"+data[i]['bakhp']+"</td>"+
								"<td>"+data[i]['on_faktur']+"</td>"+
								"<td>"+data[i]['nama_petugas']+"</td>"+
								"<td>"+data[i]['jumlah']+"</td>"+
								"<td style='text-align:center'><a class='hapusTindakan' style='cursor:pointer;'><input type='hidden' class='getid' value='"+data[i]['care_id']+"''><i class='glyphicon glyphicon-trash'></i></a></td>"+
								"</tr>"
							);
						}
					}else{
						$('#tbody_tindakan').append(
							'<input type="hidden" id="jmlh_table" value="0">'+
							'<tr><td colspan="11" style="text-align:center">Data Kosong</td></tr>'
						);
					}
				},
				error:function(data){
					console.log(data);
				}	
			});
		});
	
		$("#submitOver").submit(function(e){
			e.preventDefault();
			// alert('ok');
			// return false;
			var item = {};
		    var number = 1;
		    item[number] = {};
			item[number]['waktu'] = $('#inputdate').val();
			item[number]['visit_id'] = $('#v_id').val();
			item[number]['tekanan_darah'] = $("#tekanandarahOver").val();
			item[number]['anamnesa'] = $('#anamnesaOver').val();
			item[number]['temperatur'] = $('#tempOver').val();
			item[number]['nadi'] = $('#nadiOver').val();
			item[number]['pernapasan'] = $('#pernapasanOver').val();
			item[number]['berat_badan'] = $('#beratOver').val();
			item[number]['dokter'] = $('#id_dokterOver').val();
			item[number]['diagnosa1'] = $('#k_utama_over').val();
			item[number]['diagnosa2'] = $('#k_sek_over').val();
			item[number]['diagnosa3'] = $('#k_sek_over2').val();
			item[number]['diagnosa4'] = $('#k_sek_over3').val();
			item[number]['diagnosa5'] = $('#k_sek_over4').val();
			item[number]['detail_diagnosa'] = $('#detail_over').val();
			item[number]['terapi'] = $('#terapi_over').val();
			item[number]['alergi'] = $('#alergi_over').val();

			console.log(item);
			save_overview(item);

			return false;
		});
		
		var diagnosa = 0;
		$('.d1').click(function(){
			diagnosa = 1;
		});

		$('.d2').click(function(){
			diagnosa = 2;
		});

		$('.d3').click(function(){
			diagnosa = 3;
		});

		$('.d4').click(function(){
			diagnosa = 4;
		});

		$('.d5').click(function(){
			diagnosa = 5;		
		});

		$('#search_diagnosa').submit(function(e){
			e.preventDefault();
			var key = $('#katakunci_diag').val();

			$.ajax({
				type:'POST',
				url:'<?php echo base_url() ?>rawatjalan/daftarpasien/search_diagnosa/'+key,
				success:function(data){
					$('#tbody_diagnosa').empty();

					if(data.length>0){
						for(var i = 0; i<data.length;i++){
							$('#tbody_diagnosa').append(
								'<tr>'+
									'<td>'+data[i]['diagnosis_id']+'</td>'+
									'<td>'+data[i]['diagnosis_nama']+'</td>'+
									'<td style="text-align:center; cursor:pointer;"><a onclick="get_diagnosa(&quot;'+data[i]['diagnosis_id']+'&quot;, &quot;'+data[i]['diagnosis_nama']+'&quot;, &quot;'+diagnosa+'&quot;)"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>'+
								'</tr>'
							);
						}
					}else{
						$('#tbody_diagnosa').append(
							'<tr><td colspan="3" style="text-align:center;">Data Diagnosa Tidak Ditemukan</td></tr>'
						);
					}
				}, error:function(data){
					console.log(data);
					alert('gagal');
				}
			});
		});
		//----------------- end overview tab -----------------//

		//----------------- Dokter Search pemberian resep ------------------//
		var d_click = 0;

		$('#nama_dOver').click(function(){
			d_click = 1;
		});

		$('#namadokter').click(function(){
			d_click = 2;
		});

		$('#k_gizi_nama').click(function(){
			d_click = 3;
		});

		$('#namadokter_res').click(function(){
			d_click = 4;
		});
		

		$('#inputDokter').keyup(function(event){
			var d_item = $('#inputDokter').val();
			event.preventDefault();

			$.ajax({
				type:'POST',
				url:"<?php echo base_url()?>rawatjalan/daftarpasien/search_dokter/"+d_item,
				success:function(data){
					console.log(data);
					$('#tbody_dokter').empty();
 					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							var nama = data[i]['nama_petugas'],
								id = data[i]['petugas_id'];

							$("#tbody_dokter").append(
								'<tr>'+
									'<td>'+nama+'</td>'+
									'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getDokter(&quot;'+id+'&quot; , &quot;'+nama+'&quot;, &quot;'+d_click+'&quot;)"></i></td>'+
								'</tr>'
							);
						}
					}else{
						$('#tbody_dokter').empty();
						$('#tbody_dokter').append(
							'<tr>'+
					 			'<td colspan="2"><center>Data Paket Tidak Ditemukan</center></td>'+
					 		'</tr>'
						);
					}
				},
				error:function(data){

				}
			});
		});

		$(document).on('click','.hapusresep',function(){
			var id = $(this).children('.getid').val();
			var tr = $(this).parent().parent();
			var v_id = $('#v_id').val();

			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>rawatjalan/daftarpasien/hapus_resep/"+id+"/"+v_id,
				success:function(data){
					console.log(data);

					$('#tbody_resep').empty();

					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							$('#tbody_resep').append(
								'<tr>'+
									'<td>'+data[i]['nama_petugas']+'</td>'+								
									'<td>'+data[i]['tanggal']+'</td>'+									
									'<td>'+data[i]['resep']+'</td>'+									
									'<td>-</td>'+					
									'<td>-</td>'+										
									'<td style="text-align:center">'+
									'<a style="cursor:pointer;" class="hapusresep"><input type="hidden" class="getid" value="'+data[i]['resep_id']+'"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>'+
									'</td>'+
								'</tr>'
							);
						}
					}else{
						$('#tbody_resep').append(
							'<tr><td colspan="6" style="text-align:center">Data Kosong</td></tr>'
						);
					}
				},
				error:function(data){
					console.log(data);
				}	
			});
		});

		//---------------- end pemberian resep ---------------//

		//---------------- order kamar operasi ---------------//
		var item_order = {};
		item_order[1] = {};
		$('#submit_order_operasi').submit(function(e){
			e.preventDefault();

			item_order[1]['visit_id'] = <?php echo $visit_id; ?>;
			item_order[1]['dept_id'] = "POLI UMUM";
			item_order[1]['dept_tujuan'] = "KAMAR OPERASI"; 
			item_order[1]['pengirim'] = $('#iddokter_o').val();
			item_order[1]['alasan'] = $('#alasanoperasi').val();
			item_order[1]['jenis_operasi'] = $('#jnsOperasi').val();
			item_order[1]['lingkup_operasi'] = $('#lkpOprasi').val();
			item_order[1]['waktu_mulai'] = $('#wktpelaksanaan').val();

			$.ajax({
				type: "POST",
				data: item_order,
				url: "<?php echo base_url()?>rawatjalan/daftarpasien/save_order_operasi",
				success: function(data){
					console.log(data);
					alert('Data Berhasil Ditambahkan');
					var i = $('#jml_data').val();

					if(i==0)
						$("#tbody_order").empty();	

					i++;

					$("#tbody_order").append(
						'<tr>'+
							'<td>'+i+'</td>'+
							'<td>'+data['waktu_mulai']+'</td>'+
							'<td>'+data['nama_petugas']+'</td>'+
							'<td>Kamar Operasi</td>'+
							'<td>'+data['alasan']+'</td>'+
							'<td style="text-align:center">'+
								'<i class="glyphicon glyphicon-trash hapusorder" onclick="hapus_order(&quot;'+data['order_operasi_id']+'&quot;)" data-toggle="tooltip" data-placement="top" title="Hapus" style="cursor:pointer;"><input type="hidden" class="getid" value="'+data['order_operasi_id']+'"></i>'+
							'</td>'+
						'</tr>'
					);
					$('#jml_data').val(i);

					$('#alasanoprasi').val('');
					$('#jnsOperasi').val('');
					$("#order-dokter").val('');
					$("#namadokter").val('');
				},
				error: function(data){
					console.log(data);
					alert('gagal');
				}

			});
		});

		$(document).on('click','.hapusorder',function(){
			var id = $(this).children('.getid').val();
			var tr = $(this).parent().parent();
			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>rawatjalan/daftarpasien/hapus_order/"+id,
				success:function(data){
					
					var i = $('#jml_data').val();

					if(i-1==0){
						$('#tbody_order').empty();
						$('#tbody_order').append(
							'<tr>'+
							'<td colspan="6"><center>Data Kosong</center><input type="hidden" id="checktable" value="null"/></td>'+
							'</tr>'
						);
					}else{
						tr.fadeOut(500);
					}

					i--;
					$('#jml_data').val(i);
				},
				error:function(data){
					console.log(data);
				}	
			});
		});

		//-------------- end order kamar operasi -------------//

		$("#namadokter").click(function(){
			$('#inputDokter').val("");
			$('#tbody_dokter').empty();
			$('#tbody_dokter').append(
				'<tr>'+
					'<td colspan="2" style="text-align:center;">Cari Data Dokter</td>'+
				'</tr>'
			);
		});

		$("#namadokter_o").click(function(){
			$('#inputDokter').val("");
			$('#tbody_dokter').empty();
			$('#tbody_dokter').append(
				'<tr>'+
					'<td colspan="2" style="text-align:center;">Cari Data Dokter</td>'+
				'</tr>'
			);
		});

		//-------------- Order Konsultasi Gizi -----------------//
		var g_item = {};
		g_item[1] = {};
		$('#submit_gizi').submit(function(e){
			e.preventDefault();
			g_item[1]['tanggal'] = $('#tanggal_gizi').val();
			g_item[1]['visit_id'] = $('#v_id').val();
			g_item[1]['konsultan'] = $('#k_gizi_id').val();
			g_item[1]['kajian_gizi'] = $('#kajianGizi').val();
			g_item[1]['anamnesa_diet'] = $('#anamnesaDiet').val();
			//g_item[1]['data_lab'] = $('').val();
			g_item[1]['kajian_diet'] = $('#kajianDiet').val();
			g_item[1]['detail_menu'] =  $('#DetailMenu').val();

			$.ajax({
				type:'POST',
				data:g_item,
				url:'<?php echo base_url(); ?>rawatjalan/daftarpasien/save_gizi',
				success:function(data){
					console.log(data);
					var jml = parseInt($('#jml_gizi').val());
					alert("data Berhasil Ditambahkan ");	
					
					if(jml == 0){
						$('#tbody_gizi').empty();						
					}

					$('#tbody_gizi').append(
						'<tr>'+
							'<td>'+data['tanggal']+'</td>'+
							'<td>'+data['konsultan']+'</td>'+
							'<td>'+data['kajian_gizi']+'</td>'+										
							'<td>'+data['anamnesa_diet']+'</td>'+
							'<td>'+data['kajian_diet']+'</td>'+
							'<td>'+data['detail_menu']+'</td>'+
							'<td style="text-align:center">'+
								'<a style="cursor:pointer;" class="hapusgizi"><input type="hidden" class="getid" value="'+data['gizi_id']+'"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>'+
								'<a href="#print"><i class="glyphicon glyphicon-print"  data-toggle="tooltip" data-placement="top" title="Print"></i></a>'+
							'</td>'+
						'</tr>'
					);

					$('#jml_gizi').val(jml++);

					$('#tanggal_gizi').val("");
					$('#k_gizi_id').val("");
					$('#k_gizi_nama').val("");
					$('#kajianGizi').val("");
					$('#anamnesaDiet').val("");
					$('#kajianDiet').val("");
					$('#DetailMenu').val("");
				},error:function(data){
					console.log(data);
				}
			});

		});
		
		$(document).on('click','.hapusgizi',function(){
			var id = $(this).children('.getid').val();
			var tr = $(this).parent().parent();
			var v_id = $('#v_id').val();

			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>rawatjalan/daftarpasien/hapus_gizi/"+id+"/"+v_id,
				success:function(data){
					console.log(data);

					$('#tbody_gizi').empty();

					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							$('#tbody_gizi').append(
								'<tr>'+
									'<td>'+data[i]['tanggal']+'</td>'+
									'<td>'+data[i]['konsultan']+'</td>'+
									'<td>'+data[i]['kajian_gizi']+'</td>'+										
									'<td>'+data[i]['anamnesa_diet']+'</td>'+
									'<td>'+data[i]['kajian_diet']+'</td>'+
									'<td>'+data[i]['detail_menu']+'</td>'+
									'<td style="text-align:center">'+
										'<a style="cursor:pointer;" class="hapusgizi"><input type="hidden" class="getid" value="'+data[i]['gizi_id']+'"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>'+
										'<a href="#print"><i class="glyphicon glyphicon-print"  data-toggle="tooltip" data-placement="top" title="Print"></i></a>'+
									'</td>'+
								'</tr>'
							);
						}
					}else{
						$('#tbody_gizi').append(
							'<tr><td colspan="7" style="text-align:center">Data Kosong</td></tr>'
						);
					}
				},
				error:function(data){
					console.log(data);
				}	
			});
		});
		//--------------------- Resume Pulang -------------------//
		//submit resume pulang
		$('#dokter_resume').hide();
		$('#poli_res').hide();

		$('#submit_resume').submit(function(e){

			e.preventDefault();
			//get data
			var res_item = {};
			res_item[1] = {};
			var alasan = $('#alasanKeluarPasien').val();

			res_item[1]['rj_id'] = $('#rj_id').val();
			res_item[1]['visit_id'] = $('#v_id').val();
			res_item[1]['waktu_keluar'] = $('#waktuPulang').val();
			res_item[1]['alasan_keluar'] = alasan;
			if(alasan == 'Pasien Dipindahkan'){
				res_item[1]['detail_alasan_keluar'] = $('#alasanPindah').val();
				res_item[1]['unit_rujukan'] = $('#poli_resume').val();
				res_item[1]['dokter_rujuk'] = $('#iddokter_res').val();
			}else if(alasan == 'Pasien Dipulangkan'){
				res_item[1]['detail_alasan_keluar'] = $('#alasanPulang').val();
			}else if(alasan == 'Atas Permintaan Sendiri'){
				res_item[1]['detail_alasan_keluar'] = $('#alasanPulang').val();
			}else if(alasan == 'Rujuk Rumah Sakit Lain'){
				isianRSRujuk
			}else{
				res_item[1]['detail_alasan_keluar'] = "NULL";
			}

			res_item[1]['is_kasus_baru'] = $("input[name=jkasus]:checked").val();
			res_item[1]['is_kunjungan_baru'] = $("input[name=jnsKunjungan]:checked").val();

			console.log(res_item);
			
			//ajax save
			$.ajax({
				type:'POST',
				data:res_item,
				url:'<?php echo base_url(); ?>rawatjalan/daftarpasien/save_resume',
				success:function(data){
					alert('Data Berhasil Ditambahkan');
					console.log(data);
					e.preventDefault();
				},error:function(data){
					alert('error');
					console.log(data);
				}
			});

		});

		$('#alasanKeluarPasien').change(function(){
			var data = $(this).val();

			if(data == "Pasien Dipindahkan"){
				$('#dokter_resume').show();
				$('#poli_res').show();
			}else{
				$('#dokter_resume').hide();
				$('#poli_res').hide();
			}
		});

		//---------- riwayat kunjungan ------------//


	});

		function save_overview (item) {
			/*alert(item[1]['jenis']);
			return false;*/
			var petugas = $('#nama_dOver').val();

			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>rawatjalan/daftarpasien/save_overview",
				success: function (data) {				
					$('#inputdate').val("");
					$('#rj_id').val("");
					$('#anamnesaOver').val("");
					$('#tempOver').val("");
					$('#nadiOver').val("");
					$('#pernapasanOver').val("");
					$('#beratOver').val("");
					$('#id_dokterOver').val("");
					$('#nama_dOver').val("");
					$('#k_utama_over').val("");
					$('#k_sek_over').val("");
					$('#k_sek_over2').val("");
					$('#k_sek_over3').val("");
					$('#k_sek_over4').val("");
					$('#terapi_over').val("");
					$('#alergi_over').val("");
					$('#detail_over').val("");
					$("#tekanandarahOver").val("");

					console.log(data);
				 // 	jQuery('#tableOverview tbody:first').append(
					// 	"<tr>"+
					// 	"<td>"+data['tanggal']+"</td>"+
					// 	"<td>Jenis Pelayanan</td>"+
					// 	"<td>"+data['anamnesa']+"</td>"+
					// 	"<td>"+data['temperatur']+"</td>"+
					// 	"<td>"+data['tensi']+"</td>"+
					// 	"<td>"+data['diagnosa_utama']+"</td>"+
					// 	"<td>"+data['diagnosa_sekunder']+"</td>"+
					// 	"<td>"+data['detail_diagnosa']+"</td>"+
					// 	"<td>"+data['terapi']+"</td>"+
					// 	"<td>"+data['id_pemeriksa']+"</td>"+
					// 	"<td>"+data['keterangan']+"</td>"+
					// 	"</tr>"
					// );	
					var jml = $('#jml_over').val();
					var no = parseInt(jml)+1;

					if(jml == 0){
						$('#tbody_overview').empty();
					}

					$('#tbody_overview').append(
						'<tr>'+
							'<td>'+no+'</td>'+
							'<td>Poli Umum</td>'+
							'<td>'+data['anamnesa']+'</td>'+
							'<td>'+petugas+'</td>'+
							'<td style="text-align:center;"><a href="#riwayat_over" data-toggle="modal" onClick="detailOver(&quot;'+data['id']+'&quot;)"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>'+
						'</tr>'
					);
					
					$('#jml_over').val(no);
					alert("Data Berhasil Ditambahkan");
				},
				error: function (data) {
					console.log(data);
					alert(data);
				}
			});

			return false;
		}

	function getDokter(id, nama, dokter){
		if(dokter == 1){
			$('#id_dokterOver').val(id);
			$('#nama_dOver').val(nama);
		}
		else if(dokter == 2){
			$("#resepdokter").val(id);
			$("#namadokter").val(nama);
		}
		else if(dokter == 3){
			$("#k_gizi_id").val(id);
			$("#k_gizi_nama").val(nama);	
		}else if(dokter == 4){
			$('#iddokter_res').val(id);
			$('#namadokter_res').val(nama);
		}
		else{
			$("#namadokter_o").val(nama);
			$("#iddokter_o").val(id);
		}

		$("#searchDokter").modal('hide');
		$("#inputDokter").val("");
		$('#tbody_dokter').empty();
		$('#tbody_dokter').append('<tr><td colspan="3" style="text-align:center;">Cari Data Dokter</td></tr>');
	}

	function get_diagnosa(id, nama, diagnosa){
		if(diagnosa==1){
			$('#k_utama_over').val(id);
			$('#dnama1').val(nama);
		}else if(diagnosa==2){
			$('#k_sek_over').val(id);
			$('#dnama2').val(nama);
		}else if(diagnosa==3){
			$('#k_sek_over2').val(id);
			$('#dnama3').val(nama);
		}else if(diagnosa==4){
			$('#k_sek_over3').val(id);
			$('#dnama4').val(nama);
		}else if(diagnosa==5){
			$('#k_sek_over4').val(id);
			$('#dnama5').val(nama);
		}

		$('#tbody_diagnosa').empty();
		$('#tbody_diagnosa').append('<tr><td colspan="3" style="text-align:center;">Cari Data Diagnosa</td></tr>');
		$('#katakunci_diag').val("");
		$('#searchDiagnosa').modal('hide');
	}

	function detailOver(id){
		$.ajax({
			type:'POST',
			url:'<?php echo base_url(); ?>rawatjalan/daftarpasien/get_detail_over/'+id,
			success:function(data){
				console.log(data);
				$('#detail_waktu').val(data['waktu']);
				$('#detail_anamnesa').val(data['anamnesa']);
				$('#detail_tekanan').val(data['tekanan_darah']);
				$('#detail_temperatur').val(data['temperatur']);
				$('#detail_nadi').val(data['nadi']);
				$('#detail_pernapasan').val(data['pernapasan']);
				$('#detail_berat').val(data['berat_badan']);
				$('#detail_dokter').val(data['nama_petugas']);
				$('#detail_kutama').val(data['diagnosa1']);
				$('#detail_dutama').val(data['diagnosis_nama']);
				$('#detail_detail').val(data['detail_diagnosa']);
				$('#detail_terapi').val(data['terapi']);
				$('#detail_alergi').val(data['alergi']);
			}
		});
	}
</script>