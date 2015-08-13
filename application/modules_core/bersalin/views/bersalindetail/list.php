<div class="title">
	PASIEN BERSALIN
</div>
<div class="bar" id="rowfix" style="position:fixed; z-index:10; width:98.5%">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>bersalin/homebersalin">Pasien Bersalin</a>
		<i class="fa fa-angle-right"></i>
		<a href="#"><?php echo $pasien['alias']; ?>. <?php echo $pasien['nama'] ?></a>
		<span class="nama">
			( <?php echo $pasien['nama_kamar'] ?> / <?php echo $pasien['nama_bed'] ?>
			&nbsp;-&nbsp;<?php echo $pasien['kelas_kamar'] ?>&nbsp;-&nbsp;<?php echo $pasien['cara_bayar'] ." ". $pasien['kelas_pelayanan'] ?> )
		</span>
		<i class="fa fa-angle-right"></i>
		<a href="#"><input type="text" value="Identitas Pasien" id="dasbod" style="width:200px;background:transparent;border: 0px;"></a>
	</li>
</div>
<input type="hidden" class="visit_id" value="<?php echo($pasien['visit_id']) ?>">
<input type="hidden" class="ri_id" value="<?php echo($pasien['ri_id']) ?>">
<input type="hidden" class="bed_id" value="<?php echo($pasien['bed_id']) ?>">
<input type="hidden" class="kamar_id" value="<?php echo($pasien['kamar_id']) ?>">
<div class="navigation" style="margin-left: 10px; margin-top:55px;" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#identitas" class="cl" data-toggle="tab">Identitas Pasien</a></li>
		<li><a href="#rmklinik" class="cl" data-toggle="tab">Overview Klinik</a></li>
		<li><a href="#rmigd" class="cl" data-toggle="tab">Overview IGD</a></li>
	    <li><a href="#ibu"  class="cl"  data-toggle="tab">Overview Ibu Hamil</a></li>
		<li><a href="#rm" class="cl" data-toggle="tab">Overview Perawatan</a></li>
	    <li><a href="#resep" class="cl" data-toggle="tab">Pemberian Resep</a></li>
	    <li><a href="#penunjang" class="cl" data-toggle="tab">Pemeriksaan Penunjang</a></li>
	    <li><a href="#orderkamar" class="cl" data-toggle="tab">Order Kamar Operasi</a></li>
	    <li><a href="#konsul" class="cl" data-toggle="tab">Order Konsultasi Gizi</a></li>
	    <li><a href="#makan" class="cl" data-toggle="tab">Daftar Permintaan Makan</a></li>
	    <li><a href="#catatan" class="cl" data-toggle="tab">Catatan Persalinan</a></li>
	    <li><a href="#riwayat" class="cl" data-toggle="tab">Riwayat Penyakit</a></li>
	    <li><a href="#resume" class="cl" data-toggle="tab">Resume Pulang</a></li>	    
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
							<input  id="jnsIdentitas" name="jenis_identitas" value="<?php echo $pasien['jenis_id']; ?>" style="border:0px;background-color:transparent;font-weight:bold" disabled />
						</div>					
					</div>	
					
					<div class="form-group">
						<label class="control-label col-md-3" >Nomor Identitas Pasien</label>
						<div class="col-md-3">
							<input  id="NomorID" name="nomor_identitas" value="<?php echo $pasien['no_id']; ?>" style="border:0px;background-color:transparent;font-weight:bold" disabled />
						</div>
					</div>	
					<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>

					<div class="form-group">
						<label class="control-label col-md-3">No RM</label>
						<div class="col-md-4">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="rm_id" name="rm_id" value="<?php echo $pasien['rm_id']; ?>" disabled />
						</div>
					</div>
					<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
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
							<input style="border:0px;background-color:transparent;font-weight:bold" id="alias" name="alias" value="<?php echo $pasien['alias'] ?>" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Jenis Kelamin</label>
						<div class="col-md-1">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="jk" name="jk" value="<?php echo $pasien['jenis_kelamin'] ?>" disabled />
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
					<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
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
						<?php 
							$tgl = strtotime($pasien['tanggal_lahir']);
							$hasil = date('d F Y', $tgl); 
						?>
							<input style="border:0px;background-color:transparent;font-weight:bold" class="input-medium date-picker" maxlength="12" type="text" data-date-format="dd/mm/yyyy" id="TanggalLahir" value="<?php echo $hasil; ?>" disabled />
						</div>												
					</div>			
					
					<div class="form-group">
						<label class="control-label col-md-3">Umur</label>
						<div class="col-md-2">
						<?php  
							$datetime1 = new DateTime();
							$datetime2 = new DateTime($pasien['tanggal_lahir']);
							$interval = $datetime1->diff($datetime2);
							$umur = ''						;
							if($interval->y > 0)
								$umur .= $interval->y ." tahun ";
							if($interval->m > 0)
								$umur .= $interval->m." bulan ";
							if($interval->d > 0)
								$umur .= $interval->d ." hari";
						?>
							<input style="border:0px;background-color:transparent;font-weight:bold" id="umur" name="umur" 
							value="<?php echo($umur) ?>" disabled />
						</div>
					</div>
					<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
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
							<input style="border:0px;background-color:transparent;font-weight:bold" id="Pekerjaan" name="pekerjaan" value="<?php echo $pasien['pendidikan']; ?>" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Nomor Telepon</label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="nomorPasien" name="nomor_pasien" value="<?php echo $pasien['no_telp']; ?>" disabled />
						</div>						
					</div>
					<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
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
							<input style="border:0px;background-color:transparent;font-weight:bold" id="AlamatKTP" name="alamatKTP" value="<?php echo $pasien['alamat_ktp'] ?>" disabled />
						</div>						
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3">Wilayah </label>									
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="provinsi" name="provinsi" value="<?php echo $pasien['nama_prov']; ?>" disabled />
						</div>											
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Kabupaten </label>									
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="kabupaten" name="kabupaten" value="<?php echo $pasien['nama_kab']; ?>" disabled />
						</div>												
						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Kecamatan </label>									
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="kecamatan" name="kecamatan" value="<?php echo $pasien['nama_kec']; ?>" disabled />
						</div>
						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Kelurahan </label>									
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="kelurahan" name="kelurahan" value="<?php echo $pasien['nama_kel']; ?>" disabled />
						</div>
					</div>
					<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>
						
					<div class="form-group">
						<label class="control-label col-md-3">Cara Pembayaran</label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="cara_bayar" name="cara_bayar" value="<?php echo $pasien['cara_bayar'] ?>" disabled />
						</div>						
					</div>
				</form>
			</div>
			<br><br>
		</div>

		<div class="tab-pane" id="rmklinik"> 
		
			<div class="dropdown"  id="btnBawahTambahCare">
		        <div id="titleInformasi">Konsultasi Dokter
		        </div>
		        <div class="btnBawah floatright" style="margin-top:-25px;">
		           	<i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i>
		        </div>
		    </div>
	        <div class="tabelinformasi" id="tbhCare">
	        	<div class="informasi">
		 			<!-- <form class="form-horizontal" role="form" method="POST" id="submitOverKlinis">
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
									<input type="text" class="form-control numberrequired" id="tempOver" name="temperatur" placeholder="Temperatur" >
								</div>
								<label class="control-label col-md-2">&deg;C</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Nadi</label>
								<div class="col-md-2">
									<input type="text" class="form-control numberrequired" id="nadiOver" name="nadi" placeholder="Nadi" >
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Pernapasan</label>
								<div class="col-md-2">
									<input type="text" class="form-control numberrequired" id="pernapasanOver" name="pernapasan" placeholder="Pernapasan" >
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Berat Badan</label>
								<div class="col-md-2">
									<input type="text" class="form-control numberrequired" id="beratOver" name="berat" placeholder="Berat Badan" >
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
								<input type="hidden" id="r_id" value="<?php echo $pasien['ri_id']; ?>">
								<input type="hidden" id="v_id" value="<?php echo $pasien['visit_id']; ?>">&nbsp;&nbsp;
						    	<button type="submit" id="simpanOver" class="btn btn-success">Simpan</button>
						    </div>
			        	</div>
					</form> -->
				</div>
				<!-- <hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:20px;margin-left:20px;"> -->
					
				<div class="portlet-body" style="margin: 20px 40px 0px 30px">
				<?php echo "<input type='hidden' id='jml_over' value='".count($overview_history)."'>"; ?>
					<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabelhistoryoverklinis">
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
								if (isset($overview_history)) {
									$i = 0;
									if(!empty($overview_history)){
										foreach ($overview_history as $over) {
											echo'<tr>';
												echo'<td>'.(++$i).'</td>';
												echo'<td>'.$over['nama_dept'].'</td>';
												echo'<td>'.$over['anamnesa'].'</td>';
												echo'<td>'.$over['nama_petugas'].'</td>';
												echo'<td style="text-align:center;">
													<a href="#riwayatoverviewklinis" class="viewdetailoverviewklinis" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>
													<input type="hidden" class="overviewid_detail" value="'.$over['id'].'">
													</td>';
											echo'</tr>';
										}
									}
								}
							?>
							
						</tbody>
					</table>												
				</div>
			</div>
			<div class="modal fade" id="riwayatoverviewklinis" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal" role="form" method="POST" id="riwayatkonsultasidokter">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Overview Klinis</h3>
				   			</div>
							<div class="modal-body" style="padding-left:80px;">

				   				<div class="form-group">
									<label class="control-label col-md-4">Waktu Tindakan</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" readonly id="waktutindakanklinis" />
									</div>
			        			</div>	
			        			<div class="form-group">
									<label class="control-label col-md-4">Anamnesa</label>
									<div class="col-md-7">
										<textarea class="form-control" id="anamnesaklinis" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
									</div>
								</div>

								<fieldset class="fsStyle">
									<legend>
						                Tanda Vital
									</legend>
									<div class="form-group">
										<label class="control-label col-md-4" >Tekanan Darah</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="tekanandarahklinis" name="takanandarah" placeholder="Tekanan Darah" readonly>
										</div>
										<label class="control-label col-md-2">mmHg</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Temperatur</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="temperaturklinis" name="temperatur" placeholder="Temperatur" readonly>
										</div>
										<label class="control-label col-md-2">&deg;C</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Nadi</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="nadiklinis" name="nadi" placeholder="Nadi" readonly>
										</div>
										<label class="control-label col-md-2">x/menit</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Pernapasan</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="pernapasanklinis" name="pernapasan" placeholder="Pernapasan" readonly>
										</div>
										<label class="control-label col-md-2">x/menit</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Berat Badan</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="beratklinis" name="beratklinis" placeholder="Berat Badan" readonly>
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
											<input type="text" class="form-control" id="dokterklinis" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Diagnosa Utama</label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_utamaklinis"  readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" id="diagutamaklinis" placeholder="Keterangan" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Diagnosa Sekunder</label>
										<div class="col-md-3">
											<input type="text" style="cursor:pointer;" class="form-control isian d2" id="sekunderklinis1" placeholder="Kode"  readonly>
										</div>
										<div class="col-md-4">
											<input type="text" style="cursor:pointer;" class="form-control isian d2" id="sekunderklinis1_1" placeholder="Keterangan"  readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" ></label>
										<div class="col-md-3">
											<input type="text" style="cursor:pointer;" class="form-control isian d3" id="sekunderklinis2" placeholder="Kode"  readonly>
										</div>
										<div class="col-md-4">
											<input type="text" style="cursor:pointer;" class="form-control isian d3" id="sekunderklinis2_2" placeholder="Keterangan" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" ></label>
										<div class="col-md-3">
											<input type="text" style="cursor:pointer;" class="form-control isian d4" id="sekunderklinis3" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" style="cursor:pointer;" class="form-control isian d4" id="sekunderklinis3_3" placeholder="Keterangan"  readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" ></label>
										<div class="col-md-3">
											<input type="text" style="cursor:pointer;" class="form-control isian d5" id="sekunderklinis4" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" style="cursor:pointer;" class="form-control isian d5" id="sekunderklinis4_4" placeholder="Keterangan" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Detail Diagnosa</label>
										<div class="col-md-7">
											<textarea class="form-control" id="detailDiagnosaklinis" name="detailDiagnosa" placeholder="Detail Diagnosa" readonly></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Terapi</label>
										<div class="col-md-7">
											<textarea class="form-control" id="terapiklinis" name="terapi" placeholder="Terapi" readonly></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Alergi</label>
										<div class="col-md-7">
											<input type="text" class="form-control" id="alergiklinis" name="alergi" placeholder="Alergi" readonly>
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
											<input type="text" style="cursor:pointer;" class="form-control"  readonly data-provide="datetimepicker" data-date-format="dd/mm/yyyy hh:ii" placeholder="<?php echo date("d/m/Y H:i");?>"/>
										</div>
				        			</div>							
				        			<div class="form-group">
										<label class="control-label col-md-4">Tindakan</label>
										<div class="col-md-5">
											<input type="text" class="typeahead form-control" autocomplete="off" spellcheck="false">												
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
											<input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" readonly>
										</div>
				        			</div>

									<div class="form-group">
										<label class="control-label col-md-4">Paramedis</label>
										<div class="col-md-5">	
											<input type="text" class="typeahead form-control" autocomplete="off" spellcheck="false" id="paramedis" name="paramedis" placeholder="Paramedis">
											
										</div>
				        			</div>
				        			
			        			</div>
		       				</div>
			        		<br><br>
			        		<div class="modal-footer">
			        		 	<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
			 			     	<button type="submit" class="btn btn-success" id="saveTindakan">Simpan</button>
						    </div>
						</div>
					</div>
				</form>
			</div>
			<div class="tabelinformasi" id="tabelcare">
				<form class="form-horizontal" role="form" method="POST" style="margin-left:20px;margin-right:20px;">
					<!-- <div class="form-group">
						<div class="col-md-6"><a data-toggle="modal" href="#tambahTindakan" style="color:white">
							<button type="submit" class="btn btn-success" id="tndknOvervieww" style="margin-left:15px;"> Tambah</button></a>
						</div>        
					</div> -->
				    <div class="form-group">
				        <div class="portlet-body" style="margin: 0px 40px 0px 30px">
				            <table class="table table-striped table-bordered table-hover tableDT" id="tableCare">
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
										<th width="80">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php  
										if (!empty($visit_care_klinik)) {
											$i = 0;
											foreach($visit_care_klinik as $value){
												$i++;
												echo "<tr>";
													echo "<td>".$i."</td>";										
													echo "<td>".$value['waktu_tindakan']."</td>";									
													echo "<td>".$value['nama_tindakan']."</td>";												
													echo "<td>".$value['j_sarana']."</td>";										
													echo "<td>".$value['j_pelayanan']."</td>";
													echo "<td>".$value['bakhp_this']."</td>";										
													echo "<td>".$value['on_faktur']."</td>";
													echo "<td>".$value['nama_petugas']."</td>";										
													echo "<td>".$value['jumlah']."</td>";
													echo "<td style='text-align:center'>-</td>";
												echo "</tr>";
											}
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</form>
			</div>

	        <br>
		</div>

		<div class="tab-pane" id="rmigd"> 
			<div class="dropdown" id="btnBawahTambahCare">
		        <div id="titleInformasi">Penanganan IGD  
		        </div>
		        <div class="btnBawah floatright" style="margin-top:-25px;">
		           	<i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i>
		        </div>
		   	</div>
			<!-- <div class="informasi" id="tbhCare">
	 			<form class="form-horizontal" role="form" method="POST" id="submitOverIGD">
			       	<br>
	 				<div class="form-group">
						<label class="control-label col-md-3">Waktu</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="waktuoverigd" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i");?>">
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3">Anamnesa</label>
						<div class="col-md-4">
							<textarea class="form-control isian" id="anamnesaoverigd" name="anamnesa" placeholder="Anamnesa"></textarea>
						</div>
					</div>

					<fieldset class="fsStyle">
						<legend>
			                Tanda Vital
						</legend>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Tekanan Darah</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="tekanandarahoverigd" name="takanandarah" placeholder="Tekanan Darah" >
							</div>
							<label class="control-label col-md-2">mmHg</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Temperatur</label>
							<div class="col-md-2">
								<input type="text" class="form-control numberrequired" id="temperaturoverigd" name="temperatur" placeholder="Temperatur" >
							</div>
							<label class="control-label col-md-2">&deg;C</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Nadi</label>
							<div class="col-md-2">
								<input type="text" class="form-control numberrequired" id="nadioverigd" name="nadi" placeholder="Nadi" >
							</div>
							<label class="control-label col-md-2">x/menit</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Pernapasan</label>
							<div class="col-md-2">
								<input type="text" class="form-control numberrequired" id="pernapasanoverigd" name="pernapasan" placeholder="Pernapasan" >
							</div>
							<label class="control-label col-md-2">x/menit</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Berat Badan</label>
							<div class="col-md-2">
								<input type="text" class="form-control numberrequired" id="beratoverigd" name="berat" placeholder="Berat Badan" >
							</div>
							<label class="control-label col-md-2">Kg</label>
						</div>
			  		</fieldset>

			  		<fieldset class="fsStyle">
						<legend>
			                Pemeriksaan Fisik
						</legend>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Kepala & Leher</label>
							<div class="col-md-5">
								<textarea class="form-control" id="kepalaoverigd" name="kepala" placeholder="Hasil Pemeriksaan" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Thorax & ABD</label>
							<div class="col-md-5">
								<textarea class="form-control" id="thoraxoverigd" name="thorax" placeholder="Hasil Pemeriksaan" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Extremitas</label>
							<div class="col-md-5">
								<textarea class="form-control" id="exoverigd" name="ex" placeholder="Hasil Pemeriksaan" ></textarea>
							</div>
						</div>

					</fieldset>

			  		<fieldset class="fsStyle">
						<legend>
			                Diagnosa & Terapi
						</legend>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Dokter Jaga</label>
							<div class="col-md-3">
								<input type="text" class="form-control" style="cursor:pointer;" readonly id="dokteroverigd" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter">
								<input type="hidden" id="id_dokter_jaga">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Perawat Jaga</label>
							<div class="col-md-3">
								<input type="text" class="form-control" style="cursor:pointer;" readonly id="perawatoverigd" placeholder="Search Perawat" data-toggle="modal" data-target="#searchPerawat">
								<input type="hidden" id="id_perawat_jaga">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Diagnosa Utama</label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian d1igd" id="kode_utamaoverigd" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian d1igd" id="diagutamaoverigd" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Diagnosa Sekunder</label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian d2igd" id="kode_sek1overigd" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian d2igd" id="sek1overigd" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label">1</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian d3igd" id="kode_sek2overigd" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian d3igd" id="sek2overigd" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label">2</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian d4igd" id="kode_sek3overigd" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian d4igd" id="sek3overigd" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label">3</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian d5igd" id="kode_sek4overigd" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian d5igd" id="sek4overigd" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label">4</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Detail Diagnosa</label>
							<div class="col-md-4">
								<textarea class="form-control" id="detailDiagnosaoverigd" name="detailDiagnosa" placeholder="Detail Diagnosa" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Terapi</label>
							<div class="col-md-4">
								<textarea class="form-control" id="terapioverigd" name="terapi" placeholder="Terapi" ></textarea>
							</div>
						</div>
			  		</fieldset>

					<div class="form-group">
						<label class="control-label col-md-3"> </label>
						<div class="col-md-5">
							<button type="reset" id="bcancel" class="btn btn-danger">Reset</button>
							<input type="hidden" id="r_id_igd" value="<?php echo $pasien['ri_id']; ?>">
							<input type="hidden" id="v_id_igd" value="<?php echo $pasien['visit_id']; ?>">&nbsp;&nbsp;
					    	<button type="submit" id="simpanOver" class="btn btn-success">Simpan</button>
					    </div>
		        	</div>
				</form>
			</div> 
			<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:20px;margin-left:20px;">-->
			<div class="portlet-body" style="margin: 20px 40px 0px 30px">
				<?php echo "<input type='hidden' id='jml_overigd' value='".count($overviewigd_history)."'>"; ?>
				<table id="tableoverviewigd" class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabeloverigd">
					<thead>
						<tr class="info" style="text_align: center;">
							<th width="20">No.</th>
							<th>Waktu</th>
							<th>Anamnesa</th>
							<th>Dokter Jaga</th>
							<th>Perawat Jaga</th>
							<th style="width:20px;">Action</th>
						</tr>
					</thead>
					<tbody id="tbody_overviewigd">
						<?php
							if (isset($overviewigd_history)) {
								$i = 0;
								if(!empty($overviewigd_history)){
									foreach ($overviewigd_history as $over) {
										echo'<tr>';
											echo'<td>'.(++$i).'</td>';
											echo'<td>'.$over['waktu'].'</td>';
											echo'<td>'.$over['anamnesa'].'</td>';
											echo'<td>'.$over['dokter_jaga'].'</td>';
											echo'<td>'.$over['perawat_jaga'].'</td>';
											echo'<td style="text-align:center;">
												<a href="#riwayatpenangananigd" class="viewdetailoverviewigd" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>
												<input type="hidden" class="overviewigdid_detail" value="'.$over['id'].'">
												</td>';
										echo'</tr>';
									}
								}
							}
						?>
						
					</tbody>
				</table>												
			</div>

		 	<div class="dropdown" id="btnBawahCare">
		 	  	<div id="titleInformasi" >Uraian Tindakan IGD</div>
		        <div id="btnBawahCare" class="btnBawah floatright"  style="margin-top:-25px;"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
		    </div>
	        <div class="modal fade" id="tambahTindakanigd" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
											<input type="text" style="cursor:pointer;" class="form-control"  readonly data-provide="datetimepicker" data-date-format="dd/mm/yyyy hh:ii:ss" value="<?php echo date("d/m/Y H:i:s");?>"/>
										</div>
				        			</div>							
				        			<div class="form-group">
										<label class="control-label col-md-4">Tindakan</label>
										<div class="col-md-5">
											<input type="text" class="typeahead form-control" autocomplete="off" spellcheck="false">											
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
											<input type="text" class="typeahead form-control" autocomplete="off" spellcheck="false" id="paramedis" name="paramedis" placeholder="Paramedis" >
											<input type="hidden" id="iddoktertindakanigd">
										</div>
				        			</div>
				        			
			        			</div>
		       				</div>
			        		<br><br>
			        		<div class="modal-footer">
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
						<!-- <br>
						<div class="col-md-6"><a data-toggle="modal" href="#tambahTindakanigd" style="color:white">
							<button type="submit" class="btn btn-success" style="margin-left:15px;"> Tambah</button></a>
						</div> -->        
					</div>
				    <div class="form-group">
				        <div class="portlet-body" style="margin: 0px 40px 0px 30px">
				            <table class="table table-striped table-bordered table-hover tableDT" id="tableCareIGD">
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
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php  
										if (!empty($visit_care_igd)) {
											$i = 0;
											foreach($visit_care_igd as $value){
												$i++;
												echo "<tr>";
													echo "<td>".$i."</td>";										
													echo "<td>".$value['waktu_tindakan']."</td>";									
													echo "<td>".$value['nama_tindakan']."</td>";												
													echo "<td>".$value['j_sarana']."</td>";										
													echo "<td>".$value['j_pelayanan']."</td>";
													echo "<td>".$value['bakhp_this']."</td>";										
													echo "<td>".$value['on_faktur']."</td>";
													echo "<td>".$value['nama_petugas']."</td>";										
													echo "<td>".$value['jumlah']."</td>";
													echo "<td style='text-align:center'><center>-</center></td>";
												echo "</tr>";
											}
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</form>
			</div>
			<br>
	     
	       
	        <br>
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
								<input type="text" class="form-control" name="katakunci" id="katakunciperawat" placeholder="Nama Perawat"/>
							</div>
							<div class="col-md-2">
								<button type="button" class="btn btn-info">Cari</button>
							</div>	
						</div>	
						<br>	
						<div style="margin-left:5px; margin-right:5px;"><hr></div>
						<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover" id="tabelperawat">
								<thead>
									<tr class="info">
										<th>Nama Perawat</th>
										<th width="10%">Pilih</th>
									</tr>
								</thead>
								<tbody id="tbody_perawat">
									<tr>										
										<td style="text-align:center; cursor:pointer;" colspan="2">Cari perawat</td>
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

		<div class="tab-pane" id="ibu">
			<div class="dropdown" id="ovih">
        		<div id="titleInformasi"> Tambah Overview Ibu Hamil</div>
            	<div class="btnBawah" id="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
          	<br>
            <div id="inovih">
	            <form class="form-horizontal" role="form" method="post" id="submitoverviewibuhamil">
	            	<div class="informasi">
			            <table width="95%" >
			            	<tr>
			            		<td width="50%">
			            			<fieldset class="fsStyle">
										<legend>
							                Haid
										</legend>
										<div class="form-group">
											<label class="control-label col-md-5">Umur Pertama HAID</label>
											<div class=" input-group col-md-3">
												<input type="number" class="form-control numberrequired" id="pertamahaid" name="pertamahaid" placeholder="tahun" >
												<span class="input-group-addon" id="basic-addon" style="width:60px">tahun</span>
											</div>	
										</div>
										<div class="form-group">
											<label class="control-label col-md-5">Lama HAID</label>
											<div class="input-group col-md-3">
												<input type="number" class="form-control numberrequired" id="lamahaid" name="lamahaid" placeholder="hari" >
												<span class="input-group-addon" id="basic-addon1" style="width:60px">hari</span>
											</div>	
											
										</div>
										<div class="form-group">
											<label class="control-label col-md-5">Siklus HAID</label>
											<div class="input-group col-md-3">
												<input type="number" class="form-control numberrequired" id="siklushaid" name="siklus" placeholder="hari" >
												<span class="input-group-addon" id="basic-addon1" style="width:60px">hari</span>
											</div>	
											
										</div>
										<div class="form-group">
											<label class="control-label col-md-5">HPHT</label>
											<div class=" input-group col-md-3">
												<input type="text" class="form-control" id="hpht" name="hpht" placeholder="hpht" >
											</div>	
										</div>
									</fieldset>
			            		</td>
			            		<td width="50%">
			            			<fieldset class="fsStyle">
										<legend>
							                GPA
										</legend>
										<div class="form-group">
											<label class="control-label col-md-5">Perkawinan</label>
											<div class="input-group col-md-3">
												<input type="number" class="form-control numberrequired" id="perkawinan" name="perkawinan" placeholder="jumlah" >
												<span class="input-group-addon" id="basic-addon1" style="width:60px">kali</span>
											</div>	
										</div>
										<div class="form-group">
											<label class="control-label col-md-5">Umur Pernikahan</label>
											<div class="input-group col-md-3">
												<input type="number" class="form-control numberrequired" id="umurpernikahan" name="umurpernikahan" placeholder="tahun" >
												<span class="input-group-addon" id="basic-addon1" style="width:60px">tahun</span>
											</div>	
										</div>
										<div class="form-group">
											<label class="control-label col-md-5">Ikut KB</label>
											<div class="input-group col-md-3">
												<select class="form-control select" name="kb" id="kb">
													<option value="ya" selected>Ya</option>
													<option value="tidak">Tidak</option>							
												</select>
											</div>	
										</div>
										<div class="form-group">
											<label class="control-label col-md-5">Metode</label>
											<div class="input-group col-md-3">
												<select class="form-control select" name="metoda" id="metoda" >
													<option value="" selected>Pilih</option>
													<option value="Selesai" >IUD</option>
													<option value="Belum Selesai">Pil </option>
													<option value="Belum Selesai">Kondom </option>
													<option value="Belum Selesai">Obat Vaginal </option>
													<option value="Belum Selesai">MO Pria </option>
													<option value="Belum Selesai">MO Wanita </option>
													<option value="Belum Selesai">Suntikan </option>
													<option value="Belum Selesai">Implant </option>
												</select>

											</div>	
										</div>
									</fieldset>
			            		</td>
			            	</tr>
			            	<tr>
			            		<td >
			            			<fieldset class="fsStyle">
										<legend>
							                Info Ibu Hamil
										</legend>

										<div class="form-group">
											<label class="control-label col-md-5">Hari Perkiraan Kelahiran</label>
											<div class="input-group col-md-3" >
												<div class="input-icon">
													<i class="fa fa-calendar"></i>
													<input type="text" style="cursor:pointer;" id="perkiraanlahir" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-5">Lingkar Lengan Atas</label>
											<div class="input-group col-md-3">
												<input type="number" class="form-control numberrequired" id="lingkarLengan" name="lingkarLengan" placeholder="Ex: 12">
												<span class="input-group-addon" id="basic-addon1">Cm</span>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-5">Tinggi Badan</label>
											<div class="input-group col-md-3">
												<input type="number" class="form-control numberrequired" id="tinggibadan" name="tinggi" placeholder="Ex: 12">
												<span class="input-group-addon" id="basic-addon1">Cm</span>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-5"> Hamil Ke - </label>
											<div class="input-group col-md-3">
												<input type="number" class="form-control numberrequired" id="hamilke" name="hamilke" >
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-5"> Jumlah Persalinan</label>
											<div class="input-group col-md-3">
												<input type="number" class="form-control numberrequired" id="jml_persalinan" name="jumlah">
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-5">Riwayat Alergi</label>
											<div class="input-group col-md-5">
												<input type="text" class="form-control" name="alergi" id="riw_alergi" placeholder="Alergi">
											</div>
										</div>
									</fieldset>
			            		</td>

			            		<td>
			            			<fieldset class="fsStyle">
										<legend>
							                Catatan Kelahiran
										</legend>
										<div class="form-group">
											<label class="control-label col-md-5"> Jumlah Keguguran</label>
											<div class="input-group col-md-3">
												<input type="number" class="form-control numberrequired" id="jml_gugur" name="gugur">
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-5"> Jumlah Anak Hidup</label>
											<div class="input-group col-md-3">
												<input type="number" class="form-control numberrequired" id="jml_hidup" name="hidup">
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-5"> Jumlah Lahir Mati</label>
											<div class="input-group col-md-3">
												<input type="number" class="form-control numberrequired" id="jml_mati" name="mati">
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-5"> Jumlah Anak lahir prematur</label>
											<div class="input-group col-md-3">
												<input type="number" class="form-control numberrequired" id="jml_prematur" name="kurang">
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-5"> Jarak dengan anak terakhir</label>
											<div class="input-group col-md-4">
												<input type="number" class="form-control numberrequired" id="jarak_akhir" name="jarak">
												<span class="input-group-addon">
													<select class="select" name="jarak" id="ketjarak" >
														<option value="hari" selected>Hari</option>
														<option value="minggu">Minggu</option>
														<option value="bulan">Bulan</option>
														<option value="tahun">Tahun</option>
													</select>
												</span>	
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-md-5"> Imunisasi TT Terakhir</label>
											<div class="input-group col-md-4">
												<input type="number" class="form-control  numberrequired" id="imun_akhir" name="imuneter">
												<span class="input-group-addon">
													<select class="select" name="jarak" id="ket_imun">
														<option value="hari" selected>Hari</option>
														<option value="minggu">Minggu</option>
														<option value="bulan">Bulan</option>
														<option value="tahun">Tahun</option>
													</select>
												</span>	
											</div>
										</div>
									</fieldset>
			            		</td>
			            	</tr>
			            	<tr>
			            		<td colspan="2">
			            			
			            			<div class="form-group">
										<label class="control-label col-md-2" style="width:235px;">Penolong Persalinan Terakhir</label>
										<div class="input-group col-md-3">
											<input type="text" class="form-control" id="penolong_akhir" placeholder="Penolong" >
											<!-- data-toggle="modal" data-target="#penolong" readonly -->
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-2" style="width:235px;">Riwayat Obstetrik</label>
										<div class="input-group col-md-5">
											<textarea class="form-control" name="riwobstetrik" id="riwobstetrik" placeholder="Detail Riwayat"></textarea>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2" style="width:235px;">Penyakit & Operasi</label>
										<div class="input-group col-md-5">
											<textarea class="form-control" name="penyakitoperasi" id="penyakitoperasi" placeholder="Detail Penyakit & Operasi"></textarea>
										</div>
									</div>
									
			            		</td>
			            	</tr>
			            	<!-- <tr>
			            		<td colspan="2">
			            			<hr class="biru">
			            		</td>
			            	</tr> -->
			            </table>
		            </div>
		            <br>
					<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
					<div style="margin-left:1100px">
						<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
						<input type="hidden" id="v_idhamil" value="<?php echo($pasien['visit_id']) ?>">
					 	<input type="hidden" id="ri_idhamil" value="<?php echo($pasien['ri_id']) ?>">
							<button type="reset" class="btn btn-warning">RESET</button> &nbsp;
							<button id="simpanOver" class="btn btn-success">SIMPAN</button> 
						</span>
					</div>
					<br>
					<!-- <center>
						<a href="#resetResume"><button type="submit" class="btn btn-warning">Reset </button></a>
						&nbsp;&nbsp;
					 	
					 	<button type="submit" id="simpanOver" class="btn btn-success">Simpan</button>
							
					</center> <br> -->

						
				</form>
			</div>
			<div class="modal fade" id="penolong" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Penolong </h3>
	        			</div>
	        			<div class="modal-body">
		        			<div class="form-group">
								<div class="form-group">	
									<div class="col-md-5" style="margin-left:15px;">
										<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama Obat"/>
									</div>
									<div class="col-md-2">
										<button type="button" class="btn btn-info">Cari</button>
									</div>
									<br><br>	
								</div>		
								<div style="margin-left:10px; margin-right:10px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 30px 0px 20px">
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelpenolong">
										<thead>
											<tr class="info">
												<th>Nama Penolong</th>
												<th width="10%">Pilih</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Khrisna</td>
												<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
											</tr>
											<tr>
												<td>Abadi</td>
												<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
											</tr>

										</tbody>
									</table>												
								</div>
								<div style="margin-left:10px; margin-right:10px;"><hr></div>
								<div class="form-group">	
									<div class="col-md-4" style="margin-left:15px;">
										<input type="text" class="form-control" name="new" id="new" placeholder="Tambah Baru"/>
									</div>
									<div class="col-md-2">
										<button type="button" class="btn btn-success" style="width:150px;">Tambah Baru</button>
									</div>
									<br>	
								</div>	
							</div>
	        			</div>
	        			<div class="modal-footer">
	 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				      	</div>
					</div>
				</div>
			</div>
		    <div class="dropdown" id="rovih">
        		<div id="titleInformasi">Riwayat Overview Ibu Hamil</div>
            	<div class="btnBawah" ><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="tabelinformasi" id="inrovih">
            	<div class="portlet-body" id="inrovih" style="margin: 0px 20px 0px 20px">
            	<?php echo "<input type='hidden' id='jml_overhamil' value='".count($overviewhamil_history)."'>"; ?>
					<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="tabeloverhamil">
						<thead>
							<tr class="info" style="text_align: center;">
								<th width="20">No.</th>
								<th>Hari Perkiraan Lahir</th>
								<th>Hamil Ke</th>
								<th width="120">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							if (isset($overviewhamil_history)) {
								$i = 0;
								if(!empty($overviewhamil_history)){
									foreach ($overviewhamil_history as $over) {
										$tgl = DateTime::createFromFormat('Y-m-d',$over['perkiraan_lahir']);
										echo'<tr>';
											echo'<td>'.(++$i).'</td>';
											echo'<td>'.$tgl->format('d F Y').'</td>';
											echo'<td>'.$over['hamil_ke'].'</td>';
											echo'<td style="text-align:center;">
												<a href="#detibuhamil" class="viewdetailoverviewhamil" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>
												<input type="hidden" class="overviewighamil_detail" value="'.$over['id'].'">
												<a href="#tambahpemeriksaanfisikibu" class="tambahperiksafisikibu" data-toggle="modal"><i class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Tambah Pemeriksaan Fisik Ibu"></i></a>
												<a href="#riwpfi" class="riwpfisikibu" data-toggle="modal"><i class="glyphicon glyphicon-th-list" data-toggle="tooltip" data-placement="top" title="Riwayat Pemeriksaan Fisik Ibu"></i></a>
												</td>';
										echo'</tr>';
									}
								}
							}
						?>
						</tbody>
					</table>												
				</div>

				<div class="modal fade" id="tambahpemeriksaanfisikibu" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog" style="width:1100px">
						<div class="modal-content">
							<form class="form-horizontal" role="form" id="formperiksafisikibu"> 
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Tambah Pemeriksaan Fisik Ibu</h3>
			        			</div>
			        			<div class="modal-body" style="margin-left:50px;">
		        		        	<table width="100%">
					            		<tr>
					            			<td width="50%">
												<div class="form-group">			
									            	<label class="control-label col-md-4">Keadaan Umum 
													</label>
													<div class="col-md-6">
														<input type="text" class="form-control" id="keadaan_umum" name="keadaan" placeholder="Keadaan Umum"/>
													</div>
												</div>
							            		<div class="form-group">			
									            	<label class="control-label col-md-4">Pemeriksaan Luar 
													</label>
													<div class="col-md-6">
														<textarea class="form-control" id="pemeriksaan_luar" name="pemeriksaanluar"></textarea>
													</div>
												</div>
												<div class="form-group">			
									            	<label class="control-label col-md-4">Pemeriksaan Dalam 
													</label>
													<div class="col-md-6">
														<textarea class="form-control" id="pemeriksaan_dalam" name="periksadalam"></textarea>
													</div>
												</div>
												<div class="form-group">			
									            	<label class="control-label col-md-4">Dokter Pemeriksa 
													</label>
													<div class="col-md-6">
														<input type="text" class="typeahead form-control" readonly="" style="cursor:pointer" data-toggle="modal" data-target="#searchDokter" id="dokterperiksafisik" name="dokter" placeholder="Pilih Dokter"/>
														<input type="hidden" id="iddokterfisikibu">
													</div>
												</div>
												<div class="form-group">			
									            	<label class="control-label col-md-4">Diagnosa Kerja 
													</label>
													<div class="col-md-2">
														<input type="text" style="cursor:pointer" readonly data-toggle="modal" data-target="#searchDiagnosa" class="form-control fisik1" id="kode_utamafisikibu" placeholder="Kode">
													</div>
													<div class="col-md-4">
														<input type="text" style="cursor:pointer" readonly data-toggle="modal" data-target="#searchDiagnosa" class="form-control fisik1" id="namadiagfisikibu" placeholder="Nama Diagnosa">
													</div>
												</div>
												<div class="form-group">			
									            	<label class="control-label col-md-4">Rencana Terapi 
													</label>
													<div class="col-md-6">
														<input type="text" class="form-control" id="rencanaterapi" name="rencanterapi" placeholder="Rencana Terapi"/>
													</div>
												</div>
											</td>
											<td width="50%">
												<fieldset class="fsStyle">
													<legend>
										                Vital Sign
													</legend>
													<div class="form-group">
														<label class="control-label col-md-5" style="margin-left:20px">Tensi</label>
														<div class="input-group col-md-5">
															<input type="text" class="form-control" id="tensifisikibu" name="tensi" placeholder="Tensi">
															<span class="input-group-addon" id="basic-addon1" style="width:80px">MmHg</span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-5" style="margin-left:20px">Nadi</label>
														<div class="input-group col-md-5">
															<input type="text" class="form-control" id="nadifisikibu" name="nadi" placeholder="Nadi">
															<span class="input-group-addon" id="basic-addon1" style="width:80px">x/mnt</span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-5" style="margin-left:20px">Pernafasan</label>
														<div class="input-group col-md-5">
															<input type="text" class="form-control" id="pernafasanfisikibu" name="pernafasan" placeholder="Pernafasan">
															<span class="input-group-addon" id="basic-addon1" style="width:80px">x/mnt</span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-5" style="margin-left:20px">Suhu</label>
														<div class="input-group col-md-5">
															<input type="text" class="form-control" id="suhufisikibu" name="suhu" placeholder="Suhu">
															<span class="input-group-addon" id="basic-addon1" style="width:80px">&deg;C</span>
														</div>
													</div>

												</fieldset>
											</td>
										</tr>
									</table>
								</div>
			        			
			        			<div class="modal-footer">
			        				<input type="hidden" id="id_periksaibuhamil">
			 			       		<button type="reset" class="btn btn-warning" data-dismiss="modal">Close</button>
			 			       		<button type="submit" class="btn btn-success">Simpan</button>
						      	</div>
						    </form>
						</div>
					</div>
				</div>	

				<div class="modal fade" id="detibuhamil" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-700px">
					<form class="form-horizontal" role="form" method="POST">
						<div class="modal-dialog">
							<div class="modal-content" style="width:1300px">
								<div class="modal-header">
					   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					   				<h3 class="modal-title" id="myModalLabel">Detail Overview Ibut Hamil</h3>
					   			</div>
								<div class="modal-body" style="margin-left:40px">
									<table width="100%" >
						            	<tr>
						            		<td width="50%">
						            			<fieldset class="fsStyle">
													<legend>
										                Haid
													</legend>
													<div class="form-group">
														<label class="control-label col-md-5">Umur Pertama HAID</label>
														<div class=" input-group col-md-3">
															<input type="text" class="form-control" readonly id="pertamahaidrev" name="pertamahaid" placeholder="-" >
															<span class="input-group-addon" id="basic-addon" style="width:60px">tahun</span>
														</div>	
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">Lama HAID</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" readonly id="lamahaidrev" name="lamahaid" placeholder="-" >
															<span class="input-group-addon" id="basic-addon1" style="width:60px">hari</span>
														</div>	
														
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">Siklus HAID</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" id="siklusrev" readonly name="siklus" placeholder="-" >
															<span class="input-group-addon" id="basic-addon1" style="width:60px">hari</span>
														</div>	
														
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">HPHT</label>
														<div class=" input-group col-md-3">
															<input type="text" class="form-control" id="hphtrev" readonly name="hpht" placeholder="-" >
														</div>	
													</div>
												</fieldset>
						            		</td>
						            		<td width="50%">
						            			<fieldset class="fsStyle">
													<legend>
										                GPA
													</legend>
													<div class="form-group">
														<label class="control-label col-md-5">Perkawinan</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" readonly id="perkawinanrev" name="perkawinan" placeholder="-" >
															<span class="input-group-addon" id="basic-addon1" style="width:60px">kali</span>
														</div>	
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">Umur Pernikahan</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" readonly id="umurpernikahanrev" name="umurpernikahan" placeholder="-" >
															<span class="input-group-addon" id="basic-addon1" style="width:60px">tahun</span>
														</div>	
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">Ikut KB</label>
														<div class="input-group col-md-3">
															<input type="text" readonly class="form-control" id="kbrev" name="metode" placeholder="-" >
														</div>	
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">Metode</label>
														<div class="input-group col-md-3">
															<input type="text" readonly class="form-control" id="metoderev" name="metode" placeholder="-" >
														</div>	
													</div>
												</fieldset>
						            		</td>
						            	</tr>
						            	<tr>
						            		<td >
						            			<fieldset class="fsStyle">
													<legend>
										                Info Ibu Hamil
													</legend>

													<div class="form-group">
														<label class="control-label col-md-5">Hari Perkiraan Kelahiran</label>
														<div class="input-group col-md-3" >
															<div class="input-icon">
																<i class="fa fa-calendar"></i>
																<input type="text" style="cursor:pointer;" id="perkiraanlahirrev" readonly class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">Lingkar Lengan Atas</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" readonly id="lingkarLenganrev" name="lingkarLengan" placeholder="-">
															<span class="input-group-addon" id="basic-addon1">Cm</span>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5">Tinggi Badan</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" id="tinggirev" readonly name="tinggi" placeholder="-">
															<span class="input-group-addon" id="basic-addon1">Cm</span>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5"> Hamil Ke - </label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" id="hamilkerev" readonly name="hamilke" >
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5"> Jumlah Persalinan</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" id="jmlpersalinanrev" readonly name="jumlah">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5">Riwayat Alergi</label>
														<div class="input-group col-md-5">
															<input type="text" class="form-control" readonly id="alergirev" name="alergi" placeholder="-">
														</div>
													</div>
												</fieldset>
						            		</td>

						            		<td>
						            			<fieldset class="fsStyle">
													<legend>
										                Catatan Kelahiran
													</legend>
													<div class="form-group">
														<label class="control-label col-md-5"> Jumlah Keguguran</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" id="gugurrev" readonly name="gugur">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5"> Jumlah Anak Hidup</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" id="hiduprev" readonly name="hidup">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5"> Jumlah Lahir Mati</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" id="matirev" readonly name="mati">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5"> Jumlah Anak lahir prematur</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" id="prematurrev" readonly name="kurang">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5"> Jarak dengan anak terakhir</label>
														<div class="input-group col-md-3">
															<input type="text" readonly class="form-control" id='jarakrev' name="jarak">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5"> Imunisasi TT Terakhir</label>
														<div class="input-group col-md-3">
															<input type="text" readonly class="form-control" id="jarakimunrev" name="imuneter">
														</div>
													</div>
												</fieldset>
						            		</td>
						            	</tr>
						            	<tr>
						            		<td colspan="2">
						            			
						            			<div class="form-group">
													<label class="control-label col-md-2" style="width:235px;">Penolong Persalinan Terakhir</label>
													<div class="input-group col-md-3">
														<input type="text" class="form-control" id="penolongrev" placeholder="-" readonly>
													</div>
												</div>
												
												<div class="form-group">
													<label class="control-label col-md-2" style="width:235px;">Riwayat Obstetrik</label>
													<div class="input-group col-md-5">
														<textarea class="form-control" id="obstetrikrev" name="riwobstetrik" placeholder="-" readonly></textarea>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-2" style="width:235px;">Penyakit & Operasi</label>
													<div class="input-group col-md-5">
														<textarea class="form-control" id="penyakitrev" name="penyakitoperasi" readonly placeholder="-"></textarea>
													</div>
												</div>
												
						            		</td>
						            	</tr>
						            </table>
					        	</div>
				        		<div class="modal-footer">
				        			<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
							    </div>
							</div>
						</div>
					</form>
				</div>

				<div class="modal fade" id="riwpfi" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-400px">
					<form class="form-horizontal" role="form" method="post">
						<div class="modal-dialog">
							<div class="modal-content" style="width:1000px">
								<div class="modal-header">
					   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					   				<h3 class="modal-title" id="myModalLabel">Riwayat Pemeriksaan Fisik Ibu </h3>
					   			</div>
								<div class="modal-body" style="margin-left:20px">
									<table class="table table-striped table-bordered table-hover" id="riwayatpemeriksaanfisikibu">
										<thead>
											<tr class="info" >
												<th width="20"> No. </th>
												<th> Tanggal Pemeriksaan </th>
												<th> Dokter Pemeriksa </th>
												<th> Diagnosa </th>
												<th width="80"> Action </th>
											</tr>
										</thead>
										<tbody>
											<tr><td colspan="5" style="text-align">Tidak ada detail</td></tr>
										</tbody>
									</table>
					        	</div>
				        		<div class="modal-footer">
				        			<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
							    </div>
							</div>
						</div>
					</form>
				</div>

				<div class="modal fade" id="pemfisikibu" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<form class="form-horizontal" role="form" method="POST">
						<div class="modal-dialog" style="width:1100px;">
							<div class="modal-content">
								<div class="modal-header">
					   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					   				<h3 class="modal-title" id="myModalLabel">Detail Pemeriksaan Fisik Ibu </h3>
					   			</div>
								<div class="modal-body" style="margin-left:40px">
									<form class="form-horizontal" role="form"> 
						            	<table width="95%">
						            		<tr>
						            			<td width="50%">
													<div class="form-group">			
										            	<label class="control-label col-md-4">Keadaan Umum 
														</label>
														<div class="col-md-6">
															<input type="text" readonly class="form-control" id="keadaandet" name="keadaan"/>
														</div>
													</div>
								            		<div class="form-group">			
										            	<label class="control-label col-md-4">Pemeriksaan Luar 
														</label>
														<div class="col-md-6">
															<textarea class="form-control" readonly id="pemeriksaanluardet" name="pemeriksaanluardet"></textarea>
														</div>
													</div>
													<div class="form-group">			
										            	<label class="control-label col-md-4">Pemeriksaan Dalam 
														</label>
														<div class="col-md-6">
															<textarea class="form-control" readonly id="periksadalamdet" name="periksadalamdet"></textarea>
														</div>
													</div>
													<div class="form-group">			
										            	<label class="control-label col-md-4">Dokter Pemeriksa 
														</label>
														<div class="col-md-6">
															<input type="text" readonly class="form-control" readonly id="dokterperiksadet" name="dokter"/>
														</div>
													</div>
													<div class="form-group">			
										            	<label class="control-label col-md-4">Diagnosa Kerja 
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" id="kode_utamadet"  readonly>
														</div>
														<div class="col-md-4">
															<input type="text"class="form-control" id="namadiagdet" readonly>
														</div>
													</div>
													<div class="form-group">			
										            	<label class="control-label col-md-4">Rencana Terapi 
														</label>
														<div class="col-md-6">
															<input type="text" class="form-control" readonly id="rencanaterapidet" name="rencanterapi" />
														</div>
													</div>
												</td>
												<td width="50%">
													<fieldset class="fsStyle">
														<legend>
											                Vital Sign
														</legend>
														<div class="form-group">
															<label class="control-label col-md-5" style="margin-left:20px">Tensi</label>
															<div class="input-group col-md-5">
																<input type="text" class="form-control" readonly id="tensidet" name="tensi" >
																<span class="input-group-addon" id="basic-addon1" style="width:80px">MmHg</span>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-5" style="margin-left:20px">Nadi</label>
															<div class="input-group col-md-5">
																<input type="text" class="form-control" readonly id="nadidet" name="nadi" >
																<span class="input-group-addon" id="basic-addon1" style="width:80px">x/mnt</span>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-5" style="margin-left:20px">Pernafasan</label>
															<div class="input-group col-md-5">
																<input type="text" class="form-control" readonly id="pernafasandet" name="pernafasan" >
																<span class="input-group-addon" id="basic-addon1" style="width:80px">x/mnt</span>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-5" style="margin-left:20px">Suhu</label>
															<div class="input-group col-md-5">
																<input type="text" class="form-control" readonly id="suhudet" name="suhu" >
																<span class="input-group-addon" id="basic-addon1" style="width:80px">&deg;C</span>
															</div>
														</div>

													</fieldset>
												</td>
											</tr>
										</table>
									</form>
					        	</div>
				        		<div class="modal-footer">
				        			<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
							    </div>
							</div>
						</div>
					</form>
				</div>
            </div>
		</div>
		
		<div class="tab-pane" id="rm"> 
			<div class="dropdown" id="btnBawahTambahCare">
		        <div id="titleInformasi">Kunjungan dan Penanganan Dokter  
		        </div>
		        <div class="btnBawah floatright" style="margin-top:-25px;">
		           	<i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i>
		        </div>
		   	</div>
		   	<div id="tbhCare">
		 		<form class="form-horizontal" role="form" method="POST" id="submitoverviewperawatan">
		 			<div class="informasi" >
				       	<br>
		 				<div class="form-group">
							<label class="control-label col-md-3">Waktu Tindakan</label>
							<div class="col-md-2" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" id="waktukunjungandokter" data-date-autoclose="true" class="form-control" readonly data-date-format="dd/mm/yyyy H:i" data-provide="datepicker" value="<?php echo date("d/m/Y H:i");?>">
								</div>
							</div>
	        			</div>	

	        			<div class="form-group">
							<label class="control-label col-md-3">Dokter Visit</label>
							<div class="col-md-3">
								<input type="text" class="form-control" style="cursor:pointer;" readonly id="dokteroverperawatan" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter" required>
								<input type="hidden" id="id_dokteroverperawatan">
							</div>
						</div>

	        			<div class="form-group">
							<label class="control-label col-md-3">Anamnesa</label>
							<div class="col-md-4">
								<textarea class="form-control isian" id="anamnesaoverperawatan" name="anamnesaoverperawatan" placeholder="Anamnesa"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Diagnosa Utama</label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian ov" id="kode_utamaoverperawatan" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian ov" id="diagutamaoverperawatan" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Diagnosa Sekunder</label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian ov1" id="kode_sek1overperawatan" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian ov1" id="diagsek1overperawatan" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label col-md-2">1</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian ov2" id="kode_sek2overperawatan" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian ov2" id="diagsek2overperawatan" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label col-md-2">2</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian ov3" id="kode_sek3overperawatan" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian ov3" id="diagsek3overperawatan" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label col-md-2">3</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian ov4" id="kode_sek4overperawatan" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian ov4" id="diagsek4overperawatan" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label col-md-2">4</label>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Perkembangan Penyakit</label>
							<div class="col-md-5">
								<textarea class="form-control" id="perkembanganoverperawatan" name="perkembanganoverperawatan" placeholder="Perkembangan Penyakit"></textarea>
							</div>
						</div>

						<fieldset class="fsStyle">
							<legend>
				                Tanda Vital
							</legend>
							<div class="form-group">
								<label class="control-label col-md-3"  style="width:310px;">Tekanan Darah</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="tekanandarahoverperawatan" name="takanandarahoverperawatan" placeholder="Tekanan Darah">
								</div>
								<label class="control-label col-md-2">mmHg</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Temperatur</label>
								<div class="col-md-2">
									<input type="number" class="form-control numberrequired" id="temperaturoverperawatan" name="temperaturoverperawatan" placeholder="Temperatur" >
								</div>
								<label class="control-label col-md-2">&deg;C</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Nadi</label>
								<div class="col-md-2">
									<input type="number" class="form-control numberrequired" id="nadioverperawatan" name="nadioverperawatan" placeholder="Nadi" >
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Pernapasan</label>
								<div class="col-md-2">
									<input type="number" class="form-control numberrequired" id="pernapasanoverperawatan" name="pernapasanoverperawatan" placeholder="Pernapasan">
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Berat Badan</label>
								<div class="col-md-2">
									<input type="number" class="form-control numberrequired" id="beratoverperawatan" name="beratoverperawatan" placeholder="Berat Badan">
								</div>
								<label class="control-label col-md-2">Kg</label>
							</div>
						</fieldset>
					</div>
					<br>
					<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
					<div style="margin-left:1100px">
						<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
							<input type="hidden" id="v_id_perawatan" value="<?php echo($pasien['visit_id']) ?>">
							<input type="hidden" id="ri_id_perawatan" value="<?php echo($pasien['ri_id']) ?>">
							<button type="reset" class="btn btn-warning">RESET</button> &nbsp;
							<button type="submit" class="btn btn-success">SIMPAN</button> 
						</span>
					</div>
					<br>
						<!-- <div class="form-group">
							<label class="control-label col-md-3"> </label>
							<div class="col-md-5">
								<button type="reset" id="bcancel" class="btn btn-danger">Reset</button>
								<input type="hidden" id="v_id_perawatan" value="<?php echo($pasien['visit_id']) ?>">
								<input type="hidden" id="ri_id_perawatan" value="<?php echo($pasien['ri_id']) ?>">&nbsp;&nbsp;
						    	<button type="submit" id="simpanOver2" class="btn btn-success">Simpan</button>
						    </div>
			        	</div> -->
			        
			   	</form>
			   	

		   		<div class="tabelinformasi">
		   			<br>
	        		<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:20px;margin-left:20px;">
					
		        	<div class="portlet-body" style="margin: 10px 25px 0px 20px">
		        	<?php echo "<input type='hidden' id='jml_overkunjungan' value='".count($overview_kunjungandokter)."'>"; ?>
						<table id="tableoverviewperawatan" class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
							<thead>
								<tr class="info" style="text_align: center;">
									<th width="20">No.</th>
									<th>Waktu</th>
									<th>Dokter Visit</th>
									<th>Diagnosa Utama</th>
									<th>Unit</th>
									<th style="width:20px;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php  
									if (isset($overview_kunjungandokter)) {
										if (!empty($overview_kunjungandokter)) {
											$i = 0;
											foreach ($overview_kunjungandokter as $over) {
												$tgl = DateTime::createFromFormat('Y-m-d H:i:s', $over['waktu_visit']);
												echo '<tr>
														<td>'.(++$i).'</td>
														<td>'.$tgl->format('d F Y H:i:s').'</td>
														<td>'.$over['dokter'].'</td>
														<td>'.$over['diagnosa_utama'].'</td>
														<td>'.$over['nama_dept'].'</td>
														<td style="text-align:center;">
															<a href="#riwperawatan" class="viewdetailriwperawatan" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>
															<input type="hidden" class="id_detailriwperawatan" value="'.$over['kunjungan_dok_id'].'"> 
														</td>
													</tr>'	;
											}
										}
									}
								?>
							</tbody>
						</table>												
					</div>
		        
			        <div class="modal fade" id="riwkondok" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
												<label class="control-label col-md-4">Kepala & Leher</label>
												<div class="col-md-2">
													<input type="text" class="form-control" id="kepalaleher" name="kepalaleher" placeholder="Hasil Pemeriksaan" >
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Thorax & ABD</label>
												<div class="col-md-2">
													<input type="text" class="form-control" id="thorax" name="thorax" placeholder="Hasil Pemeriksaan" >
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Extremitas</label>
												<div class="col-md-2">
													<input type="text" class="form-control" id="extremitas" name="extremitas" placeholder="Hasil Pemeriksaan" >
												</div>
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
												<label class="control-label col-md-4">Diagnosa Utama</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="kode_utama" placeholder="Kode" readonly>
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control" placeholder=" Diagnosa" readonly>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Diagnosa Sekunder</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="kode_sek1" placeholder="Kode" readonly>
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control" placeholder=" Diagnosa" readonly>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4"></label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="kode_sek2" placeholder="Kode" readonly>
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control" placeholder=" Diagnosa" readonly>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4"></label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="kode_sek3" placeholder="Kode" readonly>
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control" placeholder=" Diagnosa" readonly>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4"></label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="kode_sek4" placeholder="Kode" readonly>
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control" placeholder=" Diagnosa" readonly>
												</div>
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
				</div>
			</div>
			<br> 

		 	<div class="dropdown" id="btnBawahCare">
		 	  	<div id="titleInformasi" >Asuhan Keperawatan</div>
		        <div id="btnBawahCare" class="btnBawah floatright"  style="margin-top:-25px;"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
		    </div>
	        <div class="modal fade" id="searchPerawat1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Perawat</h3>
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
								<table class="table table-striped table-bordered table-hover" id="tabelperawat">
									<thead>
										<tr class="info">
											<th>Nama Perawat</th>
											<th width="10%">Pilih</th>
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
			<div class="modal fade" id="searchPerawat2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Perawat</h3>
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
								<table class="table table-striped table-bordered table-hover" id="tabelPerawat2">
									<thead>
										<tr class="info">
											<th>Nama Perawat</th>
											<th width="10%">Pilih</th>
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
			<div id="tabelcare">
				<form class="form-horizontal" role="form" method="POST" id="submitasuhankeperawatan">
					<div class="informasi">
				       	<br>
		 				<div class="form-group">
							<label class="control-label col-md-3">Waktu Tindakan</label>
							<div class="col-md-2" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" id="waktuasuhan" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i");?>">
								</div>
							</div>
	        			</div>
	        			<div class="form-group">
							<label class="control-label col-md-3">Perawat 1 </label>
							<div class="col-md-3">
								<input type="text" class="form-control" style="cursor:pointer;" readonly id="perawatasuhan1" placeholder="Search Perawat" data-toggle="modal" data-target="#searchPerawat">
								<input type="hidden" id="idperawatasuh1">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Perawat 2 </label>
							<div class="col-md-3">
								<input type="text" class="form-control" style="cursor:pointer;" readonly id="perawatasuhan2" placeholder="Search Perawat" data-toggle="modal" data-target="#searchPerawat">
								<input type="hidden" id="idperawatasuh2">
							</div>
						</div>

	        			<div class="form-group">
							<label class="control-label col-md-3">Perjalanan Penyakit</label>
							<div class="col-md-4">
								<textarea class="form-control" id="perjalananpenyakitasuhan" name="perjalanan" placeholder="Keterangan"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Pemberian Obat</label>
							<div class="col-md-4">
								<textarea class="form-control" id="pemberianobatasuhan" name="pemberianobat" placeholder="Keterangan"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Diet</label>
							<div class="col-md-4">
								<textarea class="form-control" id="dietasuhan" name="diet" placeholder="Keterangan"></textarea>
							</div>
						</div>
					</div>
					<br>
					<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
					<div style="margin-left:1100px">
						<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
							<button type="reset" class="btn btn-warning">RESET</button> &nbsp;
							<button type="submit" class="btn btn-success">SIMPAN</button> 
							<input type="hidden" id="v_id_asuhan" value="<?php echo($pasien['visit_id']) ?>">
							<input type="hidden" id="ri_id_asuhan" value="<?php echo($pasien['ri_id']) ?>">
						</span>
					</div>
					<br>
						<!-- <div class="form-group">
							<label class="control-label col-md-3"> </label>
							<div class="col-md-5">
								<button type="reset" id="bcancel" class="btn btn-danger">Reset</button>
								<input type="hidden" id="v_id_asuhan" value="<?php echo($pasien['visit_id']) ?>">
								<input type="hidden" id="ri_id_asuhan" value="<?php echo($pasien['ri_id']) ?>">&nbsp;&nbsp;
						    	<button type="submit" id="simpanOv" class="btn btn-success">Simpan</button>
						    </div>
						</div> -->
	        	</form>	
	        		<br>
	        	
	        	<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:20px;margin-left:20px;">
				
	        	<div class="tabelinformasi">
	        		<div class="portlet box red">
	        		<?php echo "<input type='hidden' id='jml_overasuhan' value='".count($overview_asuhan)."'>"; ?>
						<div class="portlet-body" style="margin: 10px 20px 0px 20px">
							<table id="tabelasuhan" class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
								<thead>
									<tr class="info" >
										<th style="width:30px"> No.</th>
										<th > Waktu </th>
										<th > Perawat 1 </th>
										<th > Perawat 2 </th>
										<th > Unit </th>
										<th width="80"> Action</th>
									</tr>
								</thead>
								<tbody>
									<?php  
										if (isset($overview_asuhan)) {
											if (!empty($overview_asuhan)) {
												$i = 0;
												foreach ($overview_asuhan as $value) {
													$tgl = DateTime::createFromFormat('Y-m-d H:i:s', $value['waktu_tindakan']);
													echo '<tr>
															<td>'.(++$i).'</td>
															<td>'.$tgl->format('d F Y H:i:s').'</td>
															<td>'.$value['perawat1'].'</td>
															<td>'.$value['perawat2'].'</td>
															<td>'.$value['nama_dept'].'</td>
															<td>tambah</td>
														</tr>';
												}
											}
										}
									?>
								</tbody>
							</table>
						</div>
						
					</div>
	        	</div>
	        </div>
			<br>

			<div class="dropdown" id="btnBawahHis">
		 	  	<div id="titleInformasi" >Uraian Tindakan </div>
		        <div id="btnBawahCare" class="btnBawah floatright"  style="margin-top:-25px;"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
		    </div>
	        <div class="modal fade" id="tambahTindakanok" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal" role="form" method="POST" id="submitTindakanPerawatan">
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
											<input type="text" style="cursor:pointer;" id="tindak_date" class="form-control"  readonly data-provide="datetimepicker" data-date-format="dd/mm/yyyy hh:ii:ss" value="<?php echo date("d/m/Y H:i:s");?>"/>
										</div>
				        			</div>							
				        			<div class="form-group">
										<label class="control-label col-md-4">Tindakan</label>
										<div class="col-md-5">
											<input type="hidden" id="tindak_id_tindakan">
											<input type="text" class="form-control" id="tindak_nama_tindakan" autocomplete="off" spellcheck="false"  name="paramedis" placeholder="Tindakan" >
										</div>
									</div>
				        			<div class="form-group">
										<label class="control-label col-md-4">Tarif</label>
										<div class="col-md-5">	
											<input type="hidden" id="tindak_js">
											<input type="hidden" id="tindak_jp">
											<input type="hidden" id="tindak_bakhp">
											<input type="text" class="form-control" id="tindak_tarif" name="tarif" placeholder="0" readonly > 
										</div>
				        			</div>
				        			
				        			<div class="form-group">
										<label class="control-label col-md-4">On Faktur</label>
										<div class="col-md-5">	
											<input type="number" class="form-control" id="tindak_onfaktur" name="onfaktur" placeholder="0" >
										</div>
				        			</div>

				        			<div class="form-group">
										<label class="control-label col-md-4">Jumlah</label>
										<div class="col-md-5">	
											<input type="text" class="form-control" readonly id="tindak_jumlah" name="jumlah" placeholder="0" >
										</div>
				        			</div>

									<div class="form-group">
										<label class="control-label col-md-4">Paramedis</label>
										<div class="col-md-5">	
											<input type="hidden" id="tindak_id_paramedis">
											<input type="text" class="form-control" id="tindak_paramedis" autocomplete="off" spellcheck="false"  name="paramedis" placeholder="Paramedis" >
										</div>
				        			</div>
				        			
			        			</div>
		       				</div>
			        		<br><br>
			        		<div class="modal-footer">
				        		<input type="hidden" class="v_id_tindakan" value="<?php echo($pasien['visit_id']) ?>">
								<input type="hidden" class="ri_id_tindakan" value="<?php echo($pasien['ri_id']) ?>">
			        			<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
			 			     	<button type="submit" class="btn btn-success" id="saveTindakan">Simpan</button>
						    </div>
						</div>
					</div>
				</form>
			</div>
			<div class="tabelinformasi" id="tabelhis">
				<form class="form-horizontal" role="form" method="POST" style="margin-left:20px;margin-right:20px;">
					<div class="form-group">
						<div class="col-md-6"><a data-toggle="modal" href="#tambahTindakanok" style="color:white">
							<button type="submit" class="btn btn-success" id="tndknOvervieww" style="margin-left:15px;"> Tambah</button></a>
						</div>        
					</div>
				    <div class="form-group">
				    	<?php
				        	echo '<input type="hidden" id="jml_tindak_rawat" value="'.count($visit_care_unit).'" >';
				        ?>
				        <div class="portlet-body" style="margin: 0px 20px 0px 15px">
				            <table class="table table-striped table-bordered table-hover tableDT" id="tableCareRawat">
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
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php  
										if (!empty($visit_care_unit)) {
											$i = 0;
											foreach($visit_care_unit as $value){
												$i++;
												echo "<tr>";
													echo "<td>".$i."</td>";										
													echo "<td>".$value['waktu_tindakan']."</td>";									
													echo "<td>".$value['nama_tindakan']."</td>";												
													echo "<td>".$value['j_sarana']."</td>";										
													echo "<td>".$value['j_pelayanan']."</td>";
													echo "<td>".$value['bakhp_this']."</td>";										
													echo "<td>".$value['on_faktur']."</td>";
													echo "<td>".$value['nama_petugas']."</td>";										
													echo "<td>".$value['jumlah']."</td>";
													echo "<td style='text-align:center'><a style='cursor:pointer;' class='hapusTindakan'><input type='hidden' class='getid' value='".$value['care_id']."''><i class='glyphicon glyphicon-trash'></i></a></td>";
												echo "</tr>";
											}
										}
									?>
								</tbody>
							</table>
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
        	<div id="tambahResep">
	        	<form class="form-horizontal" role="form" method="POST" id="submitresep">
	        		<div class="informasi" >
						<div class="form-group">
							<label class="control-label col-md-3">Dokter</label>
							<div class="col-md-3">
								<input type="hidden" id="resep_id_dokter">
								<input type="text" class="form-control" readonly="" style="cursor:pointer" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter" id="resep_namadokter">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Tanggal</label>
							<div class="col-md-2" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" id="resep_date" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Deskripsi Resep</label>
							<div class="col-md-5">
								<textarea class="form-control" name="deskripsiResep" placeholder="Deskripsi Resep" id="resep_deskripsi"></textarea>							
							</div>
						</div>
					</div>
					<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
					<div style="margin-left:1100px">
						<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
							<button type="reset" class="btn btn-warning">RESET</button> &nbsp;
							<button type="submit" class="btn btn-success">SIMPAN</button> 
							<input type="hidden" id="r_id_resep" value="<?php echo $pasien['ri_id']; ?>">
							<input type="hidden" id="v_id_resep" value="<?php echo $pasien['visit_id']; ?>">
						</span>
					</div>
					<br>
				</form>	
			</div>

	 		<div class="dropdown" id="btnBawahTabelResep">
		        <div id="titleInformasi">Riwayat Tabel Resep</div>
		        <div id="btnBawahTabelResep" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
            <br>

        	<div class="tabelinformasi" id="tblResep">
	        	<div class="portlet-body" style="margin: 0px 40px 0px 35px">
	        		<input type="hidden" id="jml_resep" value="<?php echo count($visit_resep); ?>">
					<table class="table table-striped table-bordered table-hover tableDT" id="tableResep">
						<thead>
							<tr class="info">
								<th width="20">No.</th>
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
								$i = 0;
								foreach ($visit_resep as $value) {
									$i++;
									$tgl = strtotime($value['tanggal']);
									$hasil = date('d F Y', $tgl); 
									echo '<tr>';
									echo '<td>'.$i.'</td>';
									echo '<td>'.$value['nama_petugas'].'</td>';										
									echo '<td>'.$hasil.'</td>';										
									echo '<td>'.$value['resep'].'</td>';										
									echo '<td>'.$value['status_bayar'].'</td>';										
									echo '<td>'.$value['status_ambil'].'</td>';										
									echo '<td style="text-align:center">';
										echo '<a style="cursor:pointer;" class="hapusresep"><input type="hidden" class="getid" value="'.$value['resep_id'].'"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>';
									echo '</td>';
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
											<div class="col-md-5" style="margin-left:35px;">
												<input type="text" class="form-control" name="katakuncipengirim" id="katakuncipengirim" placeholder="Nama Pengirim"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>	
										</div>		
										<div style="margin-left:10px; margin-right:10px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 10px 0px 20px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchPengirim">
												<thead>
													<tr class="info">
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
						<label class="control-label col-md-3" >Jenis Pemeriksaan</label>
						<div class="col-md-5">			
							<textarea class="form-control" id="keteranganPenunjang" placeholder="Jenis Pemeriksaan"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3" ></label>
						<div class="col-md-7">			
							<button class="btn btn-success">Kirim</button>
					 	</div>							
					</div>
				</form>		
				<br>
	        </div>

	        <div class="dropdown" id="btnBawahTabelRiwayat">
		        <div id="titleInformasi">Riwayat Pemeriksaan</div>
		        <div id="btnBawahTabelRiwayat" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
            <br>

        	<div class="tabelinformasi" id="tblRiwayat">
	        	<div class="portlet-body" style="margin: 0px 40px 0px 30px">
					<table class="table table-striped table-bordered table-hover tableDT">
						<thead>
							<tr class="info">
								<th width="20">No.</th>
								<th> Tanggal Tindakan</th>
								<th> Departemen Penunjang</th>
								<th> Rujukan</th>
								<th> Keterangan Order</th>
								<th style="width:20px;"> Details</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td style="text-align:center">12 Desember 2012</td>										
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
        	<div class="dropdown" id="btnBawahOrder">
	            <div id="titleInformasi">Order Kamar Operasi</div>
	            <div class="btnBawah" id="btnBawahOrder"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>

	        <div id="infoKamar">
		        <form class="form-horizontal" method="POST" id="submit_order_operasi">
		        	<div class="informasi">
		          		<div class="form-group">
							<label class="control-label col-md-3">Waktu Pelaksanaan</label>
							<div class="col-md-3" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" id="operasi_date" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii:ss" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i:s");?>">
								</div>
							</div>
						</div>	

						<div class="form-group">
							<label class="control-label col-md-3">Dokter</label>
							<div class="col-md-3">
								<input type="hidden" id="iddokter_o">
								<input type="text" class="form-control" style="cursor:pointer" readonly="" id="namadokter_o" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Jenis Operasi</label>
							<div class="col-md-3">			
								<select class="form-control select" name="operasi_jenis" id="operasi_jenis">
									<option value="" selected>Pilih Jenis Operasi</option>
									<option value="Kecil">Kecil</option>
									<option value="Sedang">Sedang</option>
									<option value="Besar">Besar</option>
									<option value="Khusus">Khusus</option>
								</select>
					 		</div>
						</div>
								
						<div class="form-group">
							<label class="control-label col-md-3" >Detail Operasi</label>
							<div class="col-md-5">			
								<textarea class="form-control" rows="5" id="operasi_detail" placeholder="Detail Operasi"></textarea>
					 		</div>
						</div>
					</div>
					<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
					<div style="margin-left:1100px">
						<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
							<button type="reset" class="btn btn-warning">RESET</button> &nbsp;
							<button type="submit" class="btn btn-success">SIMPAN</button> 
							<input type="hidden" id="r_id_operasi" value="<?php echo $pasien['ri_id']; ?>">
							<input type="hidden" id="v_id_operasi" value="<?php echo $pasien['visit_id']; ?>">	
						</span>
					</div>
					<br>	
							
				</form>
				<br>
			</div>	<!-- End Dropdown -->

			<div class="dropdown" id="btnTableKamarOperasi">
	            <div id="titleInformasi">Riwayat Operasi</div>
	            <div class="btnBawah" id="btnTableKamarOperasi"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
	           	<br>

	        <div class="tabelinformasi" id="tabelKamar">
	        	<input type="hidden" id="jml_data_order" value="<?php echo count($order_operasi); ?>">
	           	<div class="portlet-body" style="margin: 0px 40px 0px 30px">
					<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="tableOpeasi" >
						<thead>
							<tr class="info">
								<th width="20">No. </th>
								<th width="200">Waktu Tindakan</th>
								<th>Dokter</th>
								<th>Status</th>
								<th>Keterangan Order</th>
								<th width="20">Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							if(!empty($order_operasi)){
								foreach ($order_operasi as $value) {
									echo"
										<tr>
											<td>".$i."</td>
											<td>".$value['waktu_mulai']."</td>
											<td>".$value['nama_petugas']."</td>										
											<td>Kamar Operasi</td>
											<td>".$value['alasan']."</td>
											<td style='text-align:center'>
												<i class='glyphicon glyphicon-trash hapusorder' data-toggle='tooltip' data-placement='top' style='cursor:pointer;' title='Hapus'><input type='hidden' class='getid' value='".$value['order_operasi_id']."'></i>
											</td>										
										</tr>
									";
									$i++;
								}
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
	       
	        <div id="infoKonsul">
		      	<form class="form-horizontal" role="form" id="submit_gizi">
		      		<div class="informasi">
		          		<div class="form-group">
							<label class="control-label col-md-3">Tanggal Konsultasi</label>
							<div class="col-md-2" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" id="konsul_date" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
								</div>
							</div>
						</div>	

						<div class="form-group">
							<label class="control-label col-md-3" >Konsultan Gizi</label>
							<div class="col-md-3">
								<input type="hidden" id="konsul_idDokter">
								<input type="text" class="form-control" id="konsul_dokter" placeholder="Search Konsultan" data-toggle="modal" data-target="#searchDokter" style="cursor:pointer" readonly="">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Kajian Gizi</label>
							<div class="col-md-5">			
								<textarea class="form-control" rows="2" id="konsul_kajiangizi" placeholder="Kajian Gizi"></textarea>
								
						 	</div>				
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Anamnesa Diet</label>
							<div class="col-md-5">			
								<textarea class="form-control" rows="2" id="konsul_anemdiet" placeholder="Anamnesa Diet"></textarea>
								
						 	</div>		
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Kajian Diet</label>
							<div class="col-md-5">			
								<textarea class="form-control" rows="2" id="konsul_kajiandiet"  placeholder="Kajian Diet"></textarea>
								
						 	</div>		
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Detail Menu Sehari-hari</label>
							<div class="col-md-5">			
								<textarea class="form-control" rows="2" id="konsul_detail"  placeholder="Detail Menu"></textarea>
								
						 	</div>		
						</div>
					</div>
					<br>
					<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
					<div style="margin-left:1100px">
						<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
							<button type="reset" class="btn btn-warning">RESET</button> &nbsp;
							<button type="submit" class="btn btn-success">SIMPAN</button> 
							<input type="hidden" id="r_id_gizi" value="<?php echo $pasien['ri_id']; ?>">
							<input type="hidden" id="v_id_gizi" value="<?php echo $pasien['visit_id']; ?>">	
						</span>
					</div>
					<br>
				</form>
			</div>	

			<div class="dropdown" id="btnTabelKonsultasi">
	            <div id="titleInformasi">Riwayat Konsultasi Gizi</div>
	           	<div class="btnBawah" id="btnTabelKonsultasi"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>

	        <div class="tabelinformasi" id="tabelKonsultasi" >
	           	<div class="portlet-body" style="margin: 0px 40px 0px 35px">
	           		<input type="hidden" id="jml_gizi" value="<?php echo count($gizi); ?>">
					<table class="table table-striped table-bordered table-hover tableDT" id="tableKonsultasi">
						<thead>
							<tr class="info">
								<th width="20">No.</th>
								<th>Tanggal Konsultasi </th>
								<th>Konsultan</th>
								<th>Kajian Gizi</th>
								<th>Anamnesa Diet</th>
								<th>Kajian Diet</th>
								<th>Detail Menu Sehari-hari</th>
								<th width="100">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if(!empty($gizi)){
								$no = 0;
								foreach ($gizi as $data) {
									$tgl = strtotime($data['tanggal']);
									$hasil = date('d F Y', $tgl);

									$no++;
									echo'
										<tr>
											<td>'.$no.'</td>
											<td>'.$hasil.'</td>
											<td>'.$data['nama_petugas'].'</td>
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
							}
							?>
						</tbody>
					</table>
				</div>	<br>
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
					<tbody>
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
										<td style="text-align:center;"><a href="#riwayat_over" data-toggle="modal" onClick="detailOver(&quot;'.$data['id'].'&quot;)"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
									</tr>
								';
							}
						?>
					</tbody>
				</table>												
			</div>
			
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
							<th>Anamnesa</th>
							<th>Dokter Jaga</th>
							<th>Perawat Jaga</th>
							<th style="width:20px;">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$i = 0;
							foreach ($riwayat_igd as $data) {
								$i++;
								$tgl = strtotime($data['waktu']);
								$hasil = date('d F Y H:i:s', $tgl);

								echo '
									<tr>
										<td>'.$i.'</td>
										<td style="text-align:center">'.$hasil.'</td>										
										<td>'.$data['anamnesa'].'</td>
										<td>'.$data['rdokter'].'</td>
										<td>'.$data['rperawat'].'</td>
										<td style="text-align:center;"><a href="#riwayatpenangananigd" data-toggle="modal" onClick="detailOverIgd(&quot;'.$data['id'].'&quot;)"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
									</tr>
								';
							}
						?>
					</tbody>
				</table>												
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
							<th>Dokter Visit</th>
							<th>Diagnosa Utama</th>
							<th>Perkembangan Penyakit</th>
							<th style="width:20px;">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							if (isset($riwayat_perawatan)) {
								if (!empty($riwayat_perawatan)) {
									$i = 0;
									foreach ($riwayat_perawatan as $over) {
										$tgl = DateTime::createFromFormat('Y-m-d H:i:s', $over['waktu_visit']);
										echo '<tr>
												<td>'.(++$i).'</td>
												<td>'.$tgl->format('d F Y H:i:s').'</td>
												<td>'.$over['rdokter'].'</td>
												<td>'.$over['diagnosa_utama'].'</td>
												<td>'.$over['perkembangan_penyakit'].'</td>
												<td style="text-align:center;">
													<a href="#riwperawatan" class="viewdetailriwperawatan" onClick="detailOverPerawatan(&quot;'.$over['kunjungan_dok_id'].'&quot;)" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>
												</td>
											</tr>'	;
									}
								}
							}
						?>
					</tbody>
				</table>												
			</div>
			<br>
        </div>

        <div class="tab-pane" id="makan">
        	<div class="dropdown">
	            <div id="titleInformasi">Permintaan Makan</div>
		        <div class="btnBawah" id="btnBawahOrderMakan"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
		   	</div>
		    <br>

            <div id="infoMakan">
            	<form class="form-horizontal" role="form" method="post" id="sumbitpermintaanmakan">
	            	<div class="informasi">
		          		<div class="form-group">
							<label class="control-label col-md-3">Tanggal</label>
							<div class="col-md-2" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy H:i:s" data-provide="datetimepicker" id="tanggalmakan" value="<?php echo date("d/m/Y H:i:s");?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Tipe Diet Penyakit</label>
							<div class="col-md-2">
								<select class="form-control select" name="tipediet" id="tipediet" >
									<option value="" selected>Pilih</option>
									<?php  
										if (isset($tipediet)) {
											foreach ($tipediet as $value) {
												echo '<option value="'.$value['id'].'">'.$value['tipe_diet'].'</option>';
											}
										}
									?>															
								</select>			
							</div>							
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Paket Makanan</label>
							<div class="col-md-2">			
								<select class="form-control select" name="paketmakan" id="paketmakan">
									<option value="" selected>Pilih</option>
								</select>	
							</div>							
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Keterangan</label>
							<div class="col-md-4">			
								<textarea class="form-control" id="keteranganmakan"></textarea>
						 	</div>
						</div>
					</div>
					<br>
					<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
					<div style="margin-left:1100px">
						<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
							<button type="reset" class="btn btn-warning">RESET</button> &nbsp;
							<button type="submit" class="btn btn-success">SIMPAN</button> 
							<input type="hidden" class="visit_id_makan" value="<?php echo($pasien['visit_id']) ?>">
							<input type="hidden" class="ri_id_makan" value="<?php echo($pasien['ri_id']) ?>">
							<input type="hidden" class="bed_id_makan" value="<?php echo($pasien['bed_id']) ?>">
							<input type="hidden" class="kamar_id_makan" value="<?php echo($pasien['kamar_id']) ?>">
						</span>
					</div>
					<br>
				</form>
			</div>	

			<div class="dropdown">
	            <div id="titleInformasi">Riwayat Permintaan Makan </div>
	          	<div class="btnBawah" id="btnDaftarmakan"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>

            <div class="tabelinformasi" id="tabelDaftarMakan" >
            	<input type="hidden" id="jml_makan" value="<?php echo count($permintaan_makan); ?>">
              	<div class="portlet-body" style="margin: 0px 20px 0px 20px">
					<table class="table table-striped table-bordered table-hover tableDT" id="tabelriwayatmakan" >
						<thead>
							<tr class="info">
								<th width="20">No</th>
								<th>Tanggal</th>
								<th>Tipe Diet Penyakit</th>
								<th>Paket Makanan</th>
								<th>Keterangan</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php  
								if (isset($permintaan_makan)) {
									$i = 0;
									foreach ($permintaan_makan as $value) {
										$tgl = DateTime::createFromFormat('Y-m-d H:i:s', $value['waktu_permintaan']);
										echo '<tr>
												<td>'.(++$i).'</td>
												<td style="text-align:center">'.$tgl->format('d F Y H:i:s').'</td>
												<td>'.$value['nama_diet'].'</td>
												<td>'.$value['nama_paket'].'</td>
												<td>'.$value['keterangan'].'</td>
												<td>'.$value['status'].'</td>
												<td style="text-align:center">
													<a href="#editpaketmakan" data-toggle="modal" class="editmakan"><i class="glyphicon glyphicon-edit"  data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
													<a href="#" class="hapusmakan"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
													<input type="hidden" class="makan_id" value="'.$value['makan_id'].'">
												</td>										
											</tr>';
									}
								}
							?>
							
						</tbody>
					</table>
				</div>	<br>
				<div class="modal fade" id="editpaketmakan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<form class="form-horizontal informasi" role="form" method="post" id="submit_edit_makan">
							<div class="modal-content" >
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Edit Permintaan Makan</h3>
			        			</div>
			        			<div class="modal-body">
			        			
									<div class="form-group">
										<label class="control-label col-md-4">Tanggal</label>
										<div class="col-md-5" >
											<div class="input-icon">
												<i class="fa fa-calendar"></i>
												<input type="text" style="cursor:pointer;" class="form-control isian calder" id="editwaktumakan" readonly data-date-format="dd/mm/yyyy H:i:s" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i:s");?>">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-4" >Tipe Diet Penyakit</label>
										<div class="col-md-5">
											<select class="form-control select" name="edittipediet" id="edittipediet">
												<option value="" selected>Pilih</option>
												<?php  
													if (isset($tipediet)) {
														foreach ($tipediet as $value) {
															echo '<option value="'.$value['id'].'">'.$value['tipe_diet'].'</option>';
														}
													}
												?>							
											</select>			
										</div>							
									</div>

									<div class="form-group">
										<label class="control-label col-md-4" >Paket Makanan</label>
										<div class="col-md-5">			
											<select class="form-control select" name="paketmakanedit" id="paketmakanedit">
												<option value="" selected>Pilih</option>
											</select>	
										</div>							
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Keterangan</label>
										<div class="col-md-5">			
											<textarea class="form-control" id="editketeranganmakan"></textarea>
									 	</div>
									</div>
			        			</div>
			        			<div class="modal-footer">
			        				<input type="hidden" id="edit_makan_id">
			        				<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
			 			       		<button type="submit" class="btn btn-success">Simpan</button>
						      	</div>
							</div>
						</form>
					</div>
				</div>
			</div>	
        </div>

        <div class="tab-pane" id="catatan">
        	<div class="dropdown" id="btnBawahBersalin">
            	<div id="titleInformasi">Tambah Kegiatan Bersalin</div>
            	<div class="btnBawah" ><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div id="infoBersalin">
            	<form class="form-horizontal" role="form" method="post" id="submitkegiatanbersalin">
	            	<div class="informasi">
		            	<div class="form-group">
							<label class="control-label col-md-3" >Jenis Kegiatan
							</label>
							<div class="col-md-2">			
								<select class="form-control select" name="pilJnsKegiatan" id="pilJnsKegiatan">
									<option value="" selected>Pilih</option>
									<option value="Persalinan Normal">Persalinan Normal</option>
									<option value="Sectio Caesaria">Sectio Caesaria</option>
									<option value="komplikasi">Pers. dg Komplikasi</option>
									<option value="Abortus">Abortus</option>
									<option value="Imunisasi TT-1">Imunisasi TT-1</option>
									<option value="Imunisasi TT-2">Imunisasi TT-2</option>
								</select>
							</div>					
						</div>	

						<div class="form-group" id="komp">
							<label class="control-label col-md-3" >Komplikasi
							</label>
							<div class="col-md-2">			
								<select class="form-control select" name="pilKegiatan" id="pilkomplikasi">
									<option value="" selected>Pilih</option>
									<option value="Perd seblm Persalinan">Perd seblm Persalinan</option>
									<option value="Perd sesdh Persalin">Perd sesdh Persalinan</option>
									<option value="Pre Eclampsi">Pre Eclampsi</option>
									<option value="Eclampsi">Eclampsi</option>
									<option value="Infeksi">Infeksi</option>
									<option value="Lain - lain">Lain - lain</option>
								</select>
							</div>							
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Rujukan
							</label>
							<div class="col-md-2">			
								<select class="form-control select" name="rujukan" id="rujukanbresalin">
									<option value="" selected>Pilih</option>
									<option value="Rumah Sakit">Rumah Sakit </option>
									<option value="Bidan">Bidan</option>
									<option value="Puskesmas">Puskesmas</option>
									<option value="Faskes Lainnya">Faskes Lainnya </option>
									<option value="Non Medis">Non Medis</option>
								</select>
							</div>							
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3" >Status
							</label>
							<div class="col-md-2">			
								<select class="form-control select" name="rujukan" id="statusbersalin">
									<option value="" selected>Pilih</option>
									<option value="hidup">Hidup</option>
									<option value="mati">Mati</option>
									
								</select>
							</div>							
						</div>


						<div class="form-group">
							<label class="control-label col-md-3">Tanggal Pelaksanaan</label>
							<div class="col-md-2" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" id="tgl_pelaksanaanbersalin" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy H:i:s" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i:s");?>">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Dirujuk
							</label>
							<div class="col-md-2">			
								<select class="form-control select" name="statusRujukan" id="statusRujukan">
									<option value="Tidak" selected>Tidak</option>
									<option value="Ya">Ya</option>
								</select>
							</div>							
						</div>

						<div class="form-group" id="tujuanRujuk">
							<label class="control-label col-md-3" >Tujuan Rujukan
							</label>
							<div class="col-md-2">			
								<select class="form-control select" name="tujuanRujuk" id="tujuanRujuk">
									<option value="" selected>Pilih</option>
									<?php  
										foreach ($dept_rujukan as $value) {
											echo '<option value="'.$value['dept_id'].'">'.$value['nama_dept'].'</option>';
										}
									?>
								</select>
							</div>							
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3" >Dokter Penolong
							</label>
							<div class="col-md-3">
								<input type="text" style="cursor:pointer;"  id="dokterpenolongbersalin" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter" readonly>
								<input type="hidden" id="id_dokterpenolongbersalin">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Asisten Penolong
							</label>
							<div class="col-md-3">
								<input type="text" style="cursor:pointer;" id="penolongbersalin" class="form-control" placeholder="Search Asisten" data-toggle="modal" data-target="#searchAsisten" readonly>
								<input type="hidden" id="id_penolongbersalin">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Keterangan Kegiatan
							</label>
							<div class="col-md-4">
								<textarea class="form-control" id="ketKegiatan"></textarea>
							</div>							
						</div>
					</div>
					<br>
					<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
					<div style="margin-left:1100px">
						<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
							<button type="reset" class="btn btn-warning">RESET</button> &nbsp;
							<input type="hidden" id="v_id_bersalin" value="<?php echo($pasien['visit_id']) ?>">
							<input type="hidden" id="ri_id_bersalin" value="<?php echo($pasien['ri_id']) ?>">
							<button type="submit" class="btn btn-success">Tambah </button></a> 
						</span>
					</div>
					<br>
				</form>
				<br>
            </div> 

            <div class="dropdown" id="btnBawahMintaBarang">
            	<div id="titleInformasi">Riwayat Kegiatan Bersalin</div>
            	<div class="btnBawah" ><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div> 
            <div class="tabelinformasi" id="infoMintaBarang">
				<div class="portlet box red">
				<?php echo "<input type='hidden' id='jml_kegbersalin' value='".count($riwayat_kegiatanbers)."'>"; ?>
					<div class="portlet-body" style="margin: 25px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabelhistorybersalin">
							<thead>
								<tr class="info" >
									<th style="width:20px"> No.</th>
									<th > Jenis Kegiatan </th>
									<th > Rujukan </th>
									<th > Status </th>
									<th > Dirujuk </th>
									<th > Dokter Penolong</th>
									<th > Asisten</th>
									<th > Tanggal Pelaksanaan </th>
									<th width="30"> Action</th>
								</tr>
							</thead>
							<tbody>
								<?php  
									if (isset($riwayat_kegiatanbers)) {
										$i = 0;
										foreach ($riwayat_kegiatanbers as $value) {
											$tgl = DateTime::createFromFormat('Y-m-d H:i:s', $value['waktu']);
											echo '<tr>	
													<td>'.(++$i).'</td>
													<td>'.$value['jenis_kegiatan'].'</td>
													<td>'.$value['rujukan_dari'].'</td>
													<td>'.$value['status'].'</td>
													<td>'.$value['dirujuk_ke'].'</td>
													<td>'.$value['dokter'].'</td>
													<td>'.$value['asisten'].'</td>
													<td>'.$tgl->format('d F Y H:i:s').'</td>
													<td style="text-align:center" >
														<a href="#" class="hapuskegiatanbersalin"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
														<input type="hidden" class="bersalin_id" value="'.$value['bersalin_id'].'">
													</td>			
												</tr>';
										}
									}
								?>
							</tbody>
						</table>
					</div>
					
				</div>            	
            </div>  
            <br>
		</div>

        <div class="tab-pane" id="resume">
        	<div class="dropdown">
	            <div id="titleInformasi">Resume Medis <span style="color:red; margin-left:30px;font-style:italic;">WAJIB DIISI!</span> </div>
	            <!-- <div class="btnBawah" id="btnBawahResumePulang"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div>  -->
            </div>

            <div id="infoResumePulang">
            	<form class="form-horizontal" role="form" method="post" id="submitresume">
            		<div class="informasi" >
	            		<div class="form-group">
							<label class="control-label col-md-3">Waktu Keluar <span class="required">* </span></label>
							<div class="col-md-2" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" id="res_date" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i");?>">
								</div>
							</div>
						</div>	
						
						<div class="form-group">
							<label class="control-label col-md-3">Diagnosa Masuk <span class="required">* </span></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian resume6" id="kode_utama_masuk" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian resume6" id="res_utama_masuk" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Dokter Pengirim</label>
							<div class="col-md-3">
								<input type="text" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter" id="namadokter_resume1" readonly="" style="cursor:pointer">
								<input type="hidden" id="iddokter_resume1">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Dokter Penanggung Jawab</label>
							<div class="col-md-3">
								<input type="text" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter" id="namadokter_resume2" readonly="" style="cursor:pointer">
								<input type="hidden" id="iddokter_resume2">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Anamnesa & Pemeriksaan Fisik</label>
							<div class="col-md-4">
								<textarea class="form-control isian" id="res_anamnesa" name="anamnesa" placeholder="Anamnesa"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Diagnosa Akhir <span class="required">* </span></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian resume1" id="res_kode_utama" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian resume1" id="res_diag_utama" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Diagnosa Sekunder</label>
							<div class="col-md-1">
								<input type="text" class="form-control resume2" style="cursor:pointer;" data-toggle="modal" data-target="#searchDiagnosa" id="res_kode_sek1" placeholder="Kode" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control resume2" style="cursor:pointer;" data-toggle="modal" data-target="#searchDiagnosa" id="res_sek1" placeholder=" Diagnosa" readonly>
							</div>
							<label class="control-label">1</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"></label>
							<div class="col-md-1">
								<input type="text" class="form-control resume3" style="cursor:pointer;" data-toggle="modal" data-target="#searchDiagnosa" id="res_kode_sek2" placeholder="Kode" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control resume3" style="cursor:pointer;" data-toggle="modal" data-target="#searchDiagnosa" id="res_sek2" placeholder=" Diagnosa" readonly>
							</div>
							<label class="control-label">2</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"></label>
							<div class="col-md-1">
								<input type="text" class="form-control resume4" style="cursor:pointer;" data-toggle="modal" data-target="#searchDiagnosa" id="res_kode_sek3" placeholder="Kode" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control resume4" style="cursor:pointer;" data-toggle="modal" data-target="#searchDiagnosa" id="res_sek3" placeholder=" Diagnosa" readonly>
							</div>
							<label class="control-label">3</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"></label>
							<div class="col-md-1">
								<input type="text" class="form-control resume5" style="cursor:pointer;" data-toggle="modal" data-target="#searchDiagnosa" id="res_kode_sek4" placeholder="Kode" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control resume5" style="cursor:pointer;" data-toggle="modal" data-target="#searchDiagnosa" id="res_sek4" placeholder=" Diagnosa" readonly>
							</div>
							<label class="control-label">4</label>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Detail Diagnosa</label>
							<div class="col-md-4">
								<textarea class="form-control" id="detailDiagnosa" name="detailDiagnosa" placeholder="Detail Diagnosa"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Alasan Keluar<span class="required">* </span>
							</label>
							<div class="col-md-4">			
								<select class="form-control select" name="alasanKeluarPasien" id="alasanKeluarPasien">
									<option value="" selected>Pilih</option>									
									<option value="Pasien Dipulangkan">Pasien Dipulangkan</option>									
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
						
						<div class="form-group" id="isiRujuk">
							<label class="control-label col-md-3" >Isian Rumah Sakit Rujukan<span class="required">* </span>
							</label>
							<div class="col-md-4">			
								<input type="text" class="form-control" id="rumasakitlain" name="isianRSRujuk" placeholder="Rumah Sakit Rujukan">
						 	</div>
						</div>				
						<div class="form-group" id="detPasienMeninggal">
							<label class="control-label col-md-3" >Detail Pasien Meninggal<span class="required">* </span>
							</label>
							<div class="col-md-4">			
								<select class="form-control select" name="detPasDie" id="res_dmeninggal">
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
									<input type="text" style="cursor:pointer;" id="res_datemeninggal" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii:ss" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i:s");?>">
								</div>
							</div>
						</div>
						
						<div class="form-group" id="ketMati">
							<label class="control-label col-md-3"> Keterangan Kematian
							</label>
							<div class="col-md-4">			
							<textarea class="form-control" rows="3" id="res_ketmeninggal"></textarea>
						 	</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Golongan Sebeb Penyakit Luar</label>
							<div class="col-md-4">
								<input type="text" style="cursor:pointer;" class="form-control isian" id="res_sebab" placeholder="Golongan Sebab Penyakit" data-toggle="modal" data-target="#searchGolongan" readonly>
								<input type="hidden" id="res_idsebab">

							</div>
						</div>
						<div class="form-group">
							<div class="form-inline">
								<label class="control-label col-md-3">Jenis Kasus <span class="required">* </span></label>
								<div class="col-md-4">
									<div class="radio-list">
										<label>
											<input type="radio"  name="res_jk" id="klama" checked="checked" value="0"/><span style="margin-left:15px">Kasus Lama </span> 
										</label>
										<label style="margin-left:40px;">
											<input type="radio"  name="res_jk" id="kbaru" value="1"/><span style="margin-left:15px">Kasus Baru </span>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
					<div style="margin-left:1000px">
						<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
							<button class="btn btn-danger">BATAL</button> &nbsp;
							<button type="reset" class="btn btn-warning">RESET</button> &nbsp;
							<button type="submit" class="btn btn-success">SIMPAN</button>
							<input type="hidden" id="v_id_resume" value="<?php echo($pasien['visit_id']) ?>">
							<input type="hidden" id="ri_id_resume" value="<?php echo($pasien['ri_id']) ?>"> 
						</span>
					</div>
					<br>	
				</form>	
				<br><br>
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
        				<form class="form-horizontal" role="form" method="post" id="search_diagnosa">
							<div class="form-group">	
								<div class="col-md-5">
									<input type="text" class="form-control" name="katakunci" id="katakunci_diag" placeholder="Kata kunci"/>
								</div>
								<div class="col-md-2">
									<button type="submit" class="btn btn-info">Cari</button>
								</div>	
							</div>	
						</form>
						<br>	
						<div style="margin-left:5px; margin-right:5px;"><hr></div>
						<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover" id="tabelSearchDiagnosa">
								<thead>
									<tr class="info">
										<th width="30%;">Kode Diagnosa</th>
										<th>Keterangan</th>
										<th width="10%">Pilih</th>
									</tr>
								</thead>
								<tbody id="tbody_diagnosa">
									<tr>
										<td style="text-align:center;" colspan="3">Cari Diagnosa</td>
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
									<tr class="info">
										<th>Nama Dokter</th>
										<th width="10%">Pilih</th>
									</tr>
								</thead>
								<tbody id="tbody_dokter">
									<tr>
										<td style="text-align:center;" colspan="2">Cari dokter</td>
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

		<div class="modal fade" id="searchAsisten" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Asisten </h3>
        			</div>
        			<div class="modal-body">
	        			<div class="form-group">
	        				<form class="form-horizontal" role="form" method="post" id="formcariasisten">
								<div class="form-group">	
									<div class="col-md-5" style="margin-left:35px;">
										<input type="text" class="form-control" name="katakunci" id="keyasisten" placeholder="Nama Dokter"/>
									</div>
									<div class="col-md-2">
										<button type="submit" class="btn btn-info">Cari</button>
									</div>
									<br><br>	
								</div>	
							</form>	
							<div style="margin-left:10px; margin-right:10px;"><hr></div>
							<div class="portlet-body" style="margin: 0px 30px 0px 20px">
								<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabledokter">
									<thead>
										<tr class="info">
											<th>Nama Asisten</th>
											<th width="10%">Pilih</th>
										</tr>
									</thead>
									<tbody id="tbodyasisten">
										<tr>
											<td style="text-align:center;" colspan="2">Cari data asisten</td>
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
									<label class="control-label col-md-4" >Diagnosa Utama</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="detail_kutama" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="detail_dutama" placeholder="Keterangan" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4" >Diagnosa Sekunder</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="detail_ksek1" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="detail_dsek1" placeholder="Keterangan" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4" > </label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="detail_ksek2" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="detail_dsek2" placeholder="Keterangan" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4" > </label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="detail_ksek3" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="detail_dsek3" placeholder="Keterangan" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4" > </label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="detail_ksek4" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="detail_dsek4" placeholder="Keterangan" readonly>
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
		        			<input type="hidden" id="visit_id_riwayat" value="<?php echo $this->session->userdata('visit_id'); ?>">
		 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
					    </div>
					</div>
				</div>
			</form>
		</div>
		<div class="modal fade" id="riwperawatan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<form class="form-horizontal" role="form" method="POST" id="riwperawatan">
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
									<input type="text" class="form-control" readonly id="waktutindakanrawat" />
								</div>
		        			</div>	

		        			<div class="form-group">
								<label class="control-label col-md-4">Dokter Visit</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="dokterrawat" name="dokterv" readonly></textarea>
								</div>
							</div>

		        			<div class="form-group">
								<label class="control-label col-md-4">Anamnesa</label>
								<div class="col-md-6">
									<textarea class="form-control" id="anamnesarawat" name="anamnesa" readonly></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-4" >Diagnosa Utama</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="kode_utamarawat" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="diagnosautamarawat"  readonly>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-4" >Diagnosa Sekunder</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="kode_sek1rawat"  readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="sek1rawat"  readonly>
								</div>
								<label class="control-label col-md-1" >1</label>
							</div>

							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="kode_se2rawat" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="sek2rawat"  readonly>
								</div>
								<label class="control-label col-md-1" >2</label>
							</div>

							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="kode_sek3rawat" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="sek3rawat" readonly>
								</div>
								<label class="control-label col-md-1" >3</label>
							</div>

							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="kode_sek4rawat"  readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="sek4rawat" readonly>
								</div>
								<label class="control-label col-md-1" >4</label>
							</div>


							<div class="form-group">
								<label class="control-label col-md-4">Perkembangan Penyakit</label>
								<div class="col-md-6">
									<textarea class="form-control" id="perkembanganrawat" name="perkembangan"  readonly></textarea>
								</div>
							</div>

							<fieldset class="fsStyle">
								<legend>
					                Tanda Vital
								</legend>
								<div class="form-group">
									<label class="control-label col-md-4" >Tekanan Darah</label>
									<div class="col-md-5">
										<input type="text" class="form-control" id="tekanandarahrawat" name="takanandarah"  readonly>
									</div>
									<label class="control-label col-md-2">mmHg</label>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4">Temperatur</label>
									<div class="col-md-5">
										<input type="text" class="form-control" id="temperaturrawat" name="temperatur"  readonly>
									</div>
									<label class="control-label col-md-2">&deg;C</label>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4">Nadi</label>
									<div class="col-md-5">
										<input type="text" class="form-control" id="nadirawat" name="nadi"  readonly>
									</div>
									<label class="control-label col-md-2">x/menit</label>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4">Pernapasan</label>
									<div class="col-md-5">
										<input type="text" class="form-control" id="pernapasanrawat" name="pernapasan" readonly>
									</div>
									<label class="control-label col-md-2">x/menit</label>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4" >Berat Badan</label>
									<div class="col-md-5">
										<input type="text" class="form-control" id="beratrawat" name="berat"  readonly>
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
		<div class="modal fade" id="searchGolongan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Pilih Golongan Sebab Penyakit Luar</h3>
        			</div>
        			<div class="modal-body">
        				<form method="POST" id="submit_sebab">
							<div class="form-group">	
								<div class="col-md-5">
									<input type="text" class="form-control" name="katakunci" id="sebab_katakunci" placeholder="Kata kunci"/>
								</div>
								<div class="col-md-2">
									<button type="submit" class="btn btn-info">Cari</button>
								</div>	
							</div>
						</form>
						<br>	
						<div style="margin-left:5px; margin-right:5px;"><hr></div>
						<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover" id="tabelSearchDiagnosa">
								<thead>
									<tr class="info">
										<td width="30%;">No Daftar Terperinci</td>
										<td>Golongan Sebab Penyakit Luar</td>
										<td width="10%">Pilih</td>
									</tr>
								</thead>
								<tbody id="tbody_sebab">
									<tr>
										<td colspan="3" style="text-align:center;">Cari Data Golongan Sebab</td>
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
		<div class="modal fade" id="riwayatpenangananigd" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<form class="form-horizontal" role="form" method="POST" id="riwayatpenangananigd">
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
									<input type="text" id="waktutindakanigd" class="form-control" readonly placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
								</div>
		        			</div>	
		        			<div class="form-group">
								<label class="control-label col-md-4">Anamnesa</label>
								<div class="col-md-7">
									<textarea class="form-control" id="anamnesaigd" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
								</div>
							</div>

							<fieldset class="fsStyle">
								<legend>
					                Tanda Vital
								</legend>
								<div class="form-group">
									<label class="control-label col-md-4" >Tekanan Darah</label>
									<div class="col-md-5">
										<input type="text" class="form-control" id="tekanandarahigd" name="takanandarah" placeholder="Tekanan Darah" readonly>
									</div>
									<label class="control-label col-md-2">mmHg</label>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4">Temperatur</label>
									<div class="col-md-5">
										<input type="text" class="form-control" id="temperaturigd" name="temperatur" placeholder="Temperatur" readonly>
									</div>
									<label class="control-label col-md-2">&deg;C</label>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4">Nadi</label>
									<div class="col-md-5">
										<input type="text" class="form-control" id="nadiigd" name="nadiigd" placeholder="Nadi" readonly>
									</div>
									<label class="control-label col-md-2">x/menit</label>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4">Pernapasan</label>
									<div class="col-md-5">
										<input type="text" class="form-control" id="pernapasanigd" name="pernapasan" placeholder="Pernapasan" readonly>
									</div>
									<label class="control-label col-md-2">x/menit</label>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4" >Berat Badan</label>
									<div class="col-md-5">
										<input type="text" class="form-control" id="beratigd" name="berat" placeholder="Berat Badan" readonly>
									</div>
									<label class="control-label col-md-2">Kg</label>
								</div>
					  		</fieldset>

					  		<fieldset class="fsStyle">
								<legend>
					                Pemeriksaan Fisik
								</legend>
								<div class="form-group">
									<label class="control-label col-md-4">Kepala & Leher</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="kepalaleherigd" name="kepalaleher" placeholder="Hasil Pemeriksaan" >
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4">Thorax & ABD</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="thoraxigd" name="thorax" placeholder="Hasil Pemeriksaan" >
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4">Extremitas</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="extremitasigd" name="extremitas" placeholder="Hasil Pemeriksaan" >
									</div>
								</div>
							</fieldset>

					  		<fieldset class="fsStyle">
								<legend>
					                Diagnosa & Terapi
								</legend>
								<div class="form-group">
									<label class="control-label col-md-4" >Dokter Pemeriksa</label>
									<div class="col-md-7">
										<input type="text" class="form-control" id="dokterigd" placeholder="Search Dokter" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4">Diagnosa Utama</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="kode_utamaigd" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="diagutamaigd" placeholder=" Diagnosa" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4">Diagnosa Sekunder</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="kode_sek1igd" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="igd1igd" placeholder=" Diagnosa" readonly>
									</div>
									<label class="control-label">1</label>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4"></label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="kode_sek2igd" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="igd2igd" placeholder=" Diagnosa" readonly>
									</div>
									<label class="control-label">2</label>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4"></label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="kode_sek3igd" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="igd3igd" placeholder=" Diagnosa" readonly>
									</div>
									<label class="control-label">3</label>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4"></label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="kode_sek4igd" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" id="igd4igd" placeholder=" Diagnosa" readonly>
									</div>
									<label class="control-label">4</label>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4" >Detail Diagnosa</label>
									<div class="col-md-7">
										<textarea class="form-control" id="detailDiagnosaigd" name="detailDiagnosa" placeholder="Detail Diagnosa" readonly></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4" >Terapi</label>
									<div class="col-md-7">
										<textarea class="form-control" id="terapiigd" name="terapi" placeholder="Terapi" readonly></textarea>
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
		<!-- <div class="modal fade" id="riwperawatan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
		</div> -->
		<!-- <div class="modal fade" id="riwigd" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
		</div> -->
	</div>		
</div>

<script type="text/javascript">
	$(document).ready( function(){

		$("#btkonsudokter").click(function(){
			$("#ibtkonsudokter").slideToggle();
		});

		$("#ibturaianklinik").hide();
		$("#bturaianklinik").click(function(){
			$("#ibturaianklinik").slideToggle();
		});

		$("#bwreturfarmasi").click(function(){
			$("#ibwreturfarmasi").slideToggle();
		});

		$("#bwinlogistik").click(function(){
			$("#ibwinlogistik").slideToggle();
		});

		$("#bwpermintaanlogistik").click(function(){
			$("#ibwpermintaanlogistik").slideToggle();
		});

	});

</script>
											
<script type="text/javascript">
	
	$(document).ready(function(){


		$("#dasbod").val('Identitas Pasien');
		$('.cl').on('click',function (e) {
			e.preventDefault();
			var a = $(this).text();
			$('#dasbod').val(a);
		})



	});
</script>	 			