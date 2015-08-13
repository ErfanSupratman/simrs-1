<div class="title">
	INSTALASI GAWAT DARURAT
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>igd/homeigd">Poliklinik IGD</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>igd/igddetail">Nama Pasien / umur / jk</a>
	</li>
</div>

<input type="hidden" id="v_id" value="<?php echo $visit_id; ?>">
<input type="hidden" id="igd_id" value="<?php echo $igd_id; ?>">
<input type="hidden" id="dept_id" value="<?php echo $dept_id; ?>">

<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#identitas" data-toggle="tab">Identitas Pasien</a></li>
	    <li ><a href="#ok" data-toggle="tab">Overview Klinik</a></li>
	    <li><a href="#rm" data-toggle="tab">Overview IGD</a></li>
	    <li><a href="#resep" data-toggle="tab">Pemberian Resep</a></li>
	    <li><a href="#penunjang" data-toggle="tab">Pemeriksaan Penunjang</a></li>
	    <li><a href="#orderkamar" data-toggle="tab">Order Kamar Operasi</a></li>
	    <li><a href="#konsul" data-toggle="tab">Order Konsultasi Gizi</a></li>
	    <li><a href="#riwayat" data-toggle="tab">Riwayat Penyakit</a></li>
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
			<div class="dropdown" id="btnBawahTambahCare">
		        <div id="titleInformasi">Penanganan IGD  
		        </div>
		        <div class="btnBawah floatright" style="margin-top:-25px;">
		           	<i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i>
		        </div>
		   	</div>
			<div class="informasi" id="tbhCare">
	 			<form class="form-horizontal" role="form" method="POST" id="submitOverIGD">
			       	<br>
	 				<div class="form-group">
						<label class="control-label col-md-3">Waktu</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="date_igd" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i:s");?>">
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3">Anamnesa</label>
						<div class="col-md-4">
							<textarea class="form-control isian" id="anamnesa_igd" name="anamnesa" placeholder="Anamnesa"></textarea>
						</div>
					</div>

					<fieldset class="fsStyle">
						<legend>
			                Tanda Vital
						</legend>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Tekanan Darah</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="tekanandarah_igd" name="takanandarah" placeholder="Tekanan Darah" >
							</div>
							<label class="control-label col-md-2">mmHg</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Temperatur</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="temperatur_igd" name="temperatur" placeholder="Temperatur" >
							</div>
							<label class="control-label col-md-2">&deg;C</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Nadi</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="nadi_igd" name="nadi" placeholder="Nadi" >
							</div>
							<label class="control-label col-md-2">x/menit</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Pernapasan</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="pernapasan_igd" name="pernapasan" placeholder="Pernapasan" >
							</div>
							<label class="control-label col-md-2">x/menit</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Berat Badan</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="berat_igd" name="berat" placeholder="Berat Badan" >
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
								<textarea class="form-control" id="kepala_igd" name="kepala" placeholder="Hasil Pemeriksaan" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Thorax & ABD</label>
							<div class="col-md-5">
								<textarea class="form-control" id="thorax_igd" name="thorax" placeholder="Hasil Pemeriksaan" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Extremitas</label>
							<div class="col-md-5">
								<textarea class="form-control" id="ex_igd" name="ex" placeholder="Hasil Pemeriksaan" ></textarea>
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
								<input type="hidden" id="dokter_igd">
								<input type="text" class="form-control" style="cursor:pointer;" readonly id="ndokter_igd" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Perawat Jaga</label>
							<div class="col-md-3">
								<input type="hidden" id="perawat_igd">
								<input type="text" class="form-control" style="cursor:pointer;" readonly id="nperawat_igd" placeholder="Search Perawat" data-toggle="modal" data-target="#searchPerawat">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Diagnosa Utama</label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian di1" id="kode_utama_igd" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian di1" id="nama_utama_igd" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Diagnosa Sekunder</label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian di2" id="kode_sek1_igd" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian di2" id="nama_sek1_igd" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label">1</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian di3" id="kode_sek2_igd" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian di3" id="nama_sek2_igd" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label">2</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian di4" id="kode_sek3_igd" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian di4" id="nama_sek3_igd" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label">3</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian di5" id="kode_sek4_igd" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian di5" id="nama_sek4_igd" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label">4</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Detail Diagnosa</label>
							<div class="col-md-4">
								<textarea class="form-control" id="detailDiagnosa_igd" name="detailDiagnosa" placeholder="Detail Diagnosa" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Terapi</label>
							<div class="col-md-4">
								<textarea class="form-control" id="terapi_igd" name="terapi" placeholder="Terapi" ></textarea>
							</div>
						</div>
						<!-- <div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Alergi</label>
							<div class="col-md-3">
								<input type="text" class="form-control isian" id="alergi" name="alergi" placeholder="Alergi">
							</div>
						</div> -->
			  		</fieldset>

					<div class="form-group">
						<label class="control-label col-md-3"> </label>
						<div class="col-md-5">
							<button type="reset" id="bcancel" class="btn btn-danger">Reset</button>
					    	<button type="submit" id="simpanOver" class="btn btn-success">Simpan</button>
					    </div>
		        	</div>
				</form>
			</div>
			<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:20px;margin-left:20px;">
			<div class="portlet-body" style="margin: 20px 40px 0px 30px">
				<?php
					echo "<input type='hidden' id='jml_overigd' value='".count($igd_overview_history)."' >";
				?>
				<table id="tableOverviewIGD" class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
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
					<tbody>
						<?php
							$i = 0;
							if(!empty($igd_overview_history)){
								foreach ($igd_overview_history as $over) {
									$i++;
									echo'<tr>';
										echo'<td>'.$i.'</td>';
										echo'<td>IGD</td>';
										echo'<td>'.$over['anamnesa'].'</td>';
										echo'<td>'.$over['nama_dokter'].'</td>';
										echo'<td>'.$over['nama_perawat'].'</td>';
										echo'<td style="text-align:center;"><a href="#riwayat_igd" data-toggle="modal" onClick="detailOverIGD(&quot;'.$over['id'].'&quot;)"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>';
									echo'</tr>';
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
	        <div class="modal fade" id="tambahTindakan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal" role="form" method="POST" id="submitTindakanIGD">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Tambah Tindakan IGD</h3>
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
											<input type="text" class="form-control" id="tindak_tarif" name="tarif" placeholder="Tarif" readonly > 
										</div>
				        			</div>
				        			
				        			<div class="form-group">
										<label class="control-label col-md-4">On Faktur</label>
										<div class="col-md-5">	
											<input type="text" class="form-control" id="tindak_onfaktur" name="onfaktur" placeholder="On Faktur" >
										</div>
				        			</div>

				        			<div class="form-group">
										<label class="control-label col-md-4">Jumlah</label>
										<div class="col-md-5">	
											<input type="text" class="form-control" readonly id="tindak_jumlah" name="jumlah" placeholder="Jumlah" >
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
						<br>
						<div class="col-md-6"><a data-toggle="modal" href="#tambahTindakan" style="color:white">
							<button type="submit" class="btn btn-success" id="tndknOvervieww" style="margin-left:15px;"> Tambah</button></a>
						</div>        
					</div>
				    <div class="form-group">
				        <div class="portlet-body" style="margin: 0px 40px 0px 30px">
				        	<?php
					        	echo '<input type="hidden" id="jml_tindak_igd" value="'.count($visit_care_igd).'" >';
					        ?>
				            <table class="table table-striped table-bordered tableDTUtama table-hover" id="tableCareIGD">
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
										<th>Delete</th>
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
	     
	        <div class="modal fade" id="riwayat_igd" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal" role="form" method="POST" id="riwkondok1">
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
										<input type="text" id="imod_date" class="form-control" readonly placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
									</div>
			        			</div>	
			        			<div class="form-group">
									<label class="control-label col-md-4">Anamnesa</label>
									<div class="col-md-7">
										<textarea class="form-control" id="imod_anamnesa" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
									</div>
								</div>

								<fieldset class="fsStyle">
									<legend>
						                Tanda Vital
									</legend>
									<div class="form-group">
										<label class="control-label col-md-4" >Tekanan Darah</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="imod_tekanandarah" name="takanandarah" placeholder="Tekanan Darah" readonly>
										</div>
										<label class="control-label col-md-2">mmHg</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Temperatur</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="imod_temperatur" name="temperatur" placeholder="Temperatur" readonly>
										</div>
										<label class="control-label col-md-2">&deg;C</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Nadi</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="imod_nadi" name="nadi" placeholder="Nadi" readonly>
										</div>
										<label class="control-label col-md-2">x/menit</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Pernapasan</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="imod_pernapasan" name="pernapasan" placeholder="Pernapasan" readonly>
										</div>
										<label class="control-label col-md-2">x/menit</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Berat Badan</label>
										<div class="col-md-5">
											<input type="text" class="form-control" id="imod_berat" name="berat" placeholder="Berat Badan" readonly>
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
										<div class="col-md-7">
											<textarea class="form-control" id="imod_kepala" name="kepala" readonly placeholder="Hasil Pemeriksaan" ></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Thorax & ABD</label>
										<div class="col-md-7">
											<textarea class="form-control" id="imod_thorax" name="thorax" readonly placeholder="Hasil Pemeriksaan" ></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Extremitas</label>
										<div class="col-md-7">
											<textarea class="form-control" id="imod_ex" name="ex" readonly placeholder="Hasil Pemeriksaan" ></textarea>
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
											<input type="text" class="form-control" id="imod_dokter" placeholder="Search Dokter" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Diagnosa Utama</label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="imod_kode_utama" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" id="imod_nama_utama" placeholder=" Diagnosa" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Diagnosa Sekunder</label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="imod_kode_sek1" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" id="imod_nama_sek1" placeholder=" Diagnosa" readonly>
										</div>
										<label class="control-label">1</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4"></label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="imod_kode_sek2" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" id="imod_nama_sek2" placeholder=" Diagnosa" readonly>
										</div>
										<label class="control-label">2</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4"></label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="imod_kode_sek3" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" id="imod_nama_sek3" placeholder=" Diagnosa" readonly>
										</div>
										<label class="control-label">3</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4"></label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="imod_kode_sek4" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" id="imod_nama_sek4" placeholder=" Diagnosa" readonly>
										</div>
										<label class="control-label">4</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Detail Diagnosa</label>
										<div class="col-md-7">
											<textarea class="form-control" id="imod_detailDiagnosa" name="detailDiagnosa" placeholder="Detail Diagnosa" readonly></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4" >Terapi</label>
										<div class="col-md-7">
											<textarea class="form-control" id="imod_terapi" name="terapi" placeholder="Terapi" readonly></textarea>
										</div>
									</div>
									<!-- <div class="form-group">
										<label class="control-label col-md-4" >Alergi</label>
										<div class="col-md-7">
											<input type="text" class="form-control" id="alergi" name="alergi" placeholder="Alergi" readonly>
										</div>
									</div> -->
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
		</div> 

		<div class="tab-pane" id="ok"> 
			<div class="dropdown"  id="btnBawahTambahCare">
		        <div id="titleInformasi">Konsultasi Dokter
		        </div>
		        <div class="btnBawah floatright" style="margin-top:-25px;">
		           	<i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i>
		        </div>
		    </div>
	        <div class="tabelinformasi" id="tbhCare">
	        	<div class="informasi">
		 		<form class="form-horizontal" role="form" method="POST" id="submitOver">
			       	<br>
	 				<div class="form-group">
						<label class="control-label col-md-3">Waktu</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="inputdate" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i:s");?>">
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
				<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:20px;margin-left:20px;">
					
				<div class="portlet-body" style="margin: 20px 40px 0px 30px">
					<?php
					echo "<input type='hidden' id='jml_over' value='".count($overview_history)."' >";
					?>
					<table id="tableOverviewKlinik" class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
						<thead>
							<tr class="info" style="text_align: center;">
								<th width="20">No.</th>
								<th>Unit</th>
								<th>Anamnesa</th>
								<th>Dokter Pemeriksa</th>
								<th width="20">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i = 0;
								if(!empty($overview_history)){
									foreach ($overview_history as $over) {
										$i++;
										echo'<tr>';
											echo'<td>'.$i.'</td>';
											echo'<td>IGD</td>';
											echo'<td>'.$over['anamnesa'].'</td>';
											echo'<td>'.$over['nama_petugas'].'</td>';
											echo'<td style="text-align:center;"><a href="#riwayat_over" data-toggle="modal" onClick="detailOver(&quot;'.$over['id'].'&quot;)"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>';
										echo'</tr>';
									}
								}
							?>
						</tbody>
					</table>												
				</div>
			</div>
		 	
		 	<div class="dropdown" id="btnBawahCare">
		 	  	<div id="titleInformasi" >Uraian Tindakan Klinik</div>
		        <div id="btnBawahCare" class="btnBawah floatright"  style="margin-top:-25px;"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
		    </div>
	        <br>
	        <div class="modal fade" id="tambahTindakan2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal" role="form" method="POST" id="submitTindakanKlinik">
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
											<input type="text" style="cursor:pointer;" class="form-control" id="dateTindakanKlinik" readonly data-provide="datetimepicker" data-date-format="dd/mm/yyyy hh:ii:s" value="<?php echo date("d/m/Y H:i:s");?>"/>
										</div>
				        			</div>							
				        			<div class="form-group">
										<label class="control-label col-md-4">Tindakan</label>
										<div class="col-md-5">
											<input type="hidden" id="idtindakan_klinik">
											<input type="text" class="form-control" id="namatindakan_klinik" autocomplete="off" spellcheck="false"  name="paramedis" placeholder="Tindakan" >
											<!-- <input type="text" class="typeahead form-control" id="namaTindakan" autocomplete="off" spellcheck="false"> -->
										</div>
									</div>
				        			<div class="form-group">
										<label class="control-label col-md-4">Tarif</label>
										<div class="col-md-5">	
											<input type="hidden" id="js_klinik">
											<input type="hidden" id="jp_klinik">
											<input type="hidden" id="bakhp_klinik">
											<input type="text" class="form-control" id="tarif_klinik" name="tarif" placeholder="Tarif" readonly > 
										</div>
				        			</div>
				        			
				        			<div class="form-group">
										<label class="control-label col-md-4">On Faktur</label>
										<div class="col-md-5">	
											<input type="text" class="form-control" id="onfaktur_klinik" name="onfaktur" placeholder="On Faktur" >
										</div>
				        			</div>

				        			<div class="form-group">
										<label class="control-label col-md-4">Jumlah</label>
										<div class="col-md-5">	
											<input type="text" class="form-control" id="jumlah_klinik" name="jumlah" placeholder="Jumlah" readonly>
										</div>
				        			</div>

									<div class="form-group">
										<label class="control-label col-md-4">Paramedis</label>
										<div class="col-md-5">	
											<input type="hidden" id="idpara_klinik">
											<input type="text" class="form-control" id="paramedis_klinik" autocomplete="off" spellcheck="false"  name="paramedis" placeholder="Paramedis" >
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
						<div class="col-md-6"><a data-toggle="modal" href="#tambahTindakan2" style="color:white">
							<button type="submit" class="btn btn-success" id="tndknOvervieww" style="margin-left:15px;"> Tambah</button></a>
						</div>        
					</div>
				    <div class="form-group">
				        <div class="portlet-body" style="margin: 0px 40px 0px 30px">
					        <?php
					        	echo '<input type="hidden" id="jmlh_table" value="'.count($visit_care).'" >';
					        ?>
				            <table class="table table-striped table-bordered table-hover tableDTUtama" id="tableCareKlinik">
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
										<th width="80">Delete</th>
									</tr>
								</thead>
								<tbody id="tbody_tindakan">
									<?php  
										if (!empty($visit_care)) {
											$i = 0;
											foreach($visit_care as $value){
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
													echo "<td style='text-align:center'><a style='cursor:pointer;' class='hapusTindakanKlinik'><input type='hidden' class='getid' value='".$value['care_id']."''><i class='glyphicon glyphicon-trash'></i></a></td>";
												echo "</tr>";
											}
										}
									?>
								</tbody>
							</table>
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
        	<div class="informasi" id="tambahResep">
        		<form class="form-horizontal" role="form" method="POST" id="submitresep">
					<div class="form-group">
						<label class="control-label col-md-3">Dokter</label>
						<div class="col-md-3">
							<input type="hidden" id="resep_id_dokter">
							<input type="text" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter" id="resep_namadokter">
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
		        <div id="titleInformasi">Riwayat Tabel Resep</div>
		        <div id="btnBawahTabelResep" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
            <br>

        	<div class="tabelinformasi" id="tblResep">
	        	<div class="portlet-body" style="margin: 0px 40px 0px 35px">
	        		<input type="hidden" id="jml_resep" value="<?php echo count($visit_resep); ?>">
					<table class="table table-striped table-bordered table-hover tableDTUtama" id="tableResep">
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
									echo '<td>-</td>';										
									echo '<td>-</td>';										
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
											<div class="col-md-4" style="margin-left:35px;">
												<input type="text" class="form-control" name="katakuncipengirim" id="katakuncipengirim" placeholder="Nama Pengirim"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>	
										</div>		
										<div style="margin-left:20px; margin-right:20px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 10px 0px 40px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchPengirim" style="width:90%;">
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
						<label class="control-label col-md-3" >Keterangan</label>
						<div class="col-md-5">			
							<textarea class="form-control" id="keteranganPenunjang" placeholder="Keterangan"></textarea>
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

	        <div class="informasi" id="infoKamar">
	            <form class="form-horizontal" method="POST" id="submit_order_operasi">
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
	            <div id="titleInformasi">Riwayat Operasi</div>
	            <div class="btnBawah" id="btnTableKamarOperasi"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
	           	<br>

	        <div class="tabelinformasi" id="tabelKamar">
	        	<input type="hidden" id="jml_data" value="<?php echo count($order_operasi); ?>">
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
	       
	        <div class="informasi" id="infoKonsul">
		      	<form class="form-horizontal" role="form" id="submit_gizi">
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
								<input type="text" class="form-control" id="konsul_dokter" placeholder="Search Konsultan" data-toggle="modal" data-target="#searchDokter">
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
	            <div id="titleInformasi">Riwayat Konsultasi Gizi</div>
	           	<div class="btnBawah" id="btnTabelKonsultasi"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>

	        <div class="tabelinformasi" id="tabelKonsultasi" >
	           	<div class="portlet-body" style="margin: 0px 40px 0px 35px">
	           		<input type="hidden" id="jml_gizi" value="<?php echo count($gizi); ?>">
					<table class="table table-striped table-bordered table-hover tableDTUtama" id="tableKonsultasi">
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
										<td style="text-align:center;"><a href="#riwayat_over" data-toggle="modal" onClick="detailOver(&quot;'.$data['id'].'&quot;)"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
									</tr>
								';
							}
						?>
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
            	<form class="form-horizontal" role="form" id="submitresume">
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
						<label class="control-label col-md-3" >Alasan Keluar <span class="required">* </span>
						</label>
						<div class="col-md-4">			
							<select class="form-control select" name="alasanKeluarPasien" id="res_alasankeluar">
								<option value="" selected>Pilih</option>									
								<option value="Pasien Dipulangkan">Pasien Dipulangkan</option>									
								<option value="Atas Permintaan Sendiri">Atas Permintaan Sendiri</option>
								<option value="Rujuk Rumah Sakit Lain"  >Rujuk ke Rumah Sakit Lain</option>
								<option value="Pasien Meninggal" >Pasien Meninggal</option>
								<option value="Rujuk Rawat Inap" >Rujuk Rawat Inap</option>
							</select>		
						</div>							
					</div>	
					
					<div class="form-group" id="alasanPlg">
						<label class="control-label col-md-3" >Alasan Pulang
						</label>
						<div class="col-md-4">			
							<textarea class="form-control" rows="3" id="res_alasanpulang"></textarea>
					 	</div>
					</div>
					
					<div class="form-group" id="isiRujuk">
						<label class="control-label col-md-3" >Isian Rumah Sakit Rujukan<span class="required">* </span>
						</label>
						<div class="col-md-4">			
							<input type="text" class="form-control" name="isianRSRujuk" id="res_rsrujuk" placeholder="Rumah Sakit Rujukan">
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
						<label class="control-label col-md-3"> Keterangan Meninggal
						</label>
						<div class="col-md-4">			
						<textarea class="form-control" rows="3" id="res_ketmeninggal"></textarea>
					 	</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Jenis Pelayanan<span class="required">* </span>
						</label>
						<div class="col-md-4">			
							<select class="form-control select" id="res_jenis">
								<option value="" selected>Pilih Jenis Pelayanan</option>
								<option value="">Bedah</option>
								<option value="">Non Bedah</option>
								<option value="">Kecelakaan Lalulintas</option>
								<option value="">Kebidanan</option>
								<option value="">Psikiatrik</option>
								<option value="">Anak</option>
							</select>		
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Golongan Sebab Penyakit Luar</label>
						<div class="col-md-4">
							<input type="hidden" id="res_idsebab">
							<input type="text" style="cursor:pointer;" class="form-control isian" id="res_sebab" placeholder="Golongan Sebab Penyakit" data-toggle="modal" data-target="#searchGolongan" readonly>
						</div>
					</div>

					<div class="form-group">
						<div class="form-inline">
							<label class="control-label col-md-3">Kasus Trauma <span class="required">* </span></label>
							<div class="col-md-8">
								<label class="checkbox-inline">
								  	<input type="checkbox" id="res_lantas" value="lakalantas"> Lakalantas
								</label>
								<label class="checkbox-inline">
								  	<input type="checkbox" id="res_lkerja" value="laka kerja"> Laka Kerja
								</label>
								<label class="checkbox-inline">
								  	<input type="checkbox" id="res_lakart" value="laka rumah tangga"> Laka Rumah Tangga
								</label>
								<label class="checkbox-inline">
								  	<input type="checkbox" id="res_aniaya" value="Penganiayaan"> Penganiayaan
								</label>
								<label class="checkbox-inline">
								  	<input type="checkbox" id="res_intoksin" value="Intoksinasi"> Intoksinasi
								</label>
								<label class="checkbox-inline">
								  	<input type="checkbox" id="res_gigitan" value="Gigitan"> Gigitan
								</label>
								
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-inline">
							<label class="control-label col-md-3">Kasus Non-Trauma <span class="required">* </span></label>
							<div class="col-md-8">
								<label class="checkbox-inline">
								  	<input type="checkbox" id="res_non1" value="Penyakit Dalam"> Penyakit Dalam
								</label>
								<label class="checkbox-inline">
								  	<input type="checkbox" id="res_non2" value="Bedah"> Bedah
								</label>
								<label class="checkbox-inline">
								  	<input type="checkbox" id="res_non3" value="Anak"> Anak
								</label>
								<label class="checkbox-inline">
								  	<input type="checkbox" id="res_non4" value="Obgsyn"> Obgsyn
								</label>
								<label class="checkbox-inline">
								  	<input type="checkbox" id="res_non5" value="Dan lain-lain"> Dan lain-lain
								</label>
								
								
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-inline">
							<label class="control-label col-md-3">Jenis Kunjungan <span class="required">* </span></label>
							<div class="col-md-4">
								<div class="radio-list">
									<label>
										<input type="radio"  name="res_kunjungan" id="kunlama" value="0"/><span style="margin-left:15px">Kunjungan Lama </span> 
									</label>
									<label style="margin-left:40px;">
										<input type="radio"  name="res_kunjungan" id="kunbaru" value="1"/><span style="margin-left:15px">Kunjungan Baru </span>
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-inline">
							<label class="control-label col-md-3">Jenis Kasus <span class="required">* </span></label>
							<div class="col-md-4">
								<div class="radio-list">
									<label>
										<input type="radio"  name="res_jk" id="klama" value="0"/><span style="margin-left:15px">Kasus Lama </span> 
									</label>
									<label style="margin-left:40px;">
										<input type="radio"  name="res_jk" id="kbaru" value="1"/><span style="margin-left:15px">Kasus Baru </span>
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >
						</label>
						<div class="col-md-5">
							<button type="button" class="btn btn-danger">
								Cancel </button>
							&nbsp;&nbsp;
					 		<button type="reset" class="btn btn-warning">
								Reset </button>
							&nbsp;&nbsp;
							<button type="submit" class="btn btn-success">
							Simpan </button>
						
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
								<table class="table table-striped table-bordered table-hover" id="tabelSearchDiagnosa">
									<thead>
										<tr class="info">
											<th>Nama Perawat</th>
											<th width="10%">Pilih</th>
										</tr>
									</thead>
									<tbody id="tbody_perawat">
										<tr>
											<td colspan='2' style="text-align:center;">Cari Data Perawat</td>
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
			        			<input type="hidden" id="visit_id" value="<?php echo $this->session->userdata('visit_id'); ?>">
			 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
						    </div>
						</div>
					</div>
				</form>
			</div>
	        <br>
		</div>

</div>

<script type="text/javascript">
	$(document).ready(function(){

		//---------------------- overview klinik -------------------//

		$("#submitOver").submit(function(e){
			e.preventDefault();
			// alert('ok');
			// return false;
			var item = {};
		    var number = 1;
		    item[number] = {};
			item[number]['waktu'] = $('#inputdate').val();
			item[number]['visit_id'] = $('#v_id').val();
			item[number]['rj_id'] = $('#igd_id').val();
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

		$('.di1').click(function(){
			diagnosa = 11;
		});

		$('.di2').click(function(){
			diagnosa = 12;
		});

		$('.di3').click(function(){
			diagnosa = 13;
		});

		$('.di4').click(function(){
			diagnosa = 14;
		});

		$('.di5').click(function(){
			diagnosa = 15;		
		});

		$('#search_diagnosa').submit(function(e){
			e.preventDefault();
			var key = {};
			key['search'] = $('#katakunci_diag').val();

			$.ajax({
				type:'POST',
				data:key,
				url:'<?php echo base_url() ?>igd/igddetail/search_diagnosa',
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
					alert(data);
				}
			});
		});


		$('#paramedis_klinik').focus(function(){
			var $input = $('#paramedis_klinik');
			
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

					    $('#idpara_klinik').val(iddata[index]);
					    
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

		$('#namatindakan_klinik').focus(function(){
			var $input = $('#namatindakan_klinik');
			
			$.ajax({
				type:'POST',
				url:'<?php echo base_url();?>igd/igddetail/get_master_tindakan',
				success:function(data){
					var autodata = [];
					var iddata = [];

					for(var i = 0; i<data.length; i++){
						autodata.push(data[i]['nama_tindakan']);
						iddata.push(data[i]['tindakan_id']);
					}
					console.log(autodata);

					$input.typeahead({source:autodata, 
			            autoSelect: true}); 

					$input.change(function() {
					    var current = $input.typeahead("getActive");
					    var index = autodata.indexOf(current);

					    $('#idtindakan_klinik').val(iddata[index]);
					    
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
		

		$('#namatindakan_klinik').change(function() {
			var tindakan_id = $('#idtindakan_klinik').val();

			if(tindakan_id!=''){
				$.ajax({
					type: "POST",
					data : tindakan_id,
					url: "<?php echo base_url()?>rawatjalan/daftarpasien/get_tindakan/" + tindakan_id,
					success: function (data) {
						var total = parseInt(data['js'])+parseInt(data['jp'])+parseInt(data['bakhp']);

						$('#js_klinik').val(data['js']);
						$('#jp_klinik').val(data['jp']);
						$('#bakhp_klinik').val(data['bakhp']);
						$('#tarif_klinik').val(total);

						//console.log(data);
					},
					error: function (data) {
						alert('gagal');
						
					}
				});
			}else{
				$('#js_klinik').val('');
				$('#jp_klinik').val('');
				$('#bakhp_klinik').val('');
			}
		});

		$('#jumlah_klinik').focus(function(){
			var onfaktur = $('#onfaktur_klinik').val();
			var tarif = $('#tarif_klinik').val();
			var jumlah = parseInt(onfaktur)+parseInt(tarif);
			$(this).val(jumlah);
		});

		$('#submitTindakanKlinik').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};

		    item[number]['waktu_tindakan'] = $('#dateTindakanKlinik').val();
			item[number]['tindakan_id'] = $('#idtindakan_klinik').val();
			item[number]['visit_id'] = $('#v_id').val();
			item[number]['sub_visit'] = $('#igd_id').val();
			item[number]['js'] = $('#js_klinik').val();
			item[number]['jp'] = $('#jp_klinik').val();
			item[number]['bakhp'] = $('#bakhp_klinik').val();
			item[number]['on_faktur'] = $('#onfaktur_klinik').val();
			item[number]['paramedis'] = $('#idpara_klinik').val();
			item[number]['tarif'] = $('#tarif_klinik').val();
			item[number]['jumlah'] = $('#jumlah_klinik').val();

			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>igd/igddetail/save_tindakan",
				success: function (data) {
					console.log(data);
					var t = $('#tableCareKlinik').DataTable();

					$('#tarif_klinik').val('');
					$('#onfaktur_klinik').val('');
					$('#paramedis_klinik').val('');
					$('#tarif_klinik').val('');
					$('#harga_klinik').val('');
					$('#namatindakan_klinik').val('');
					$('#jumlah_klinik').val('');

					alert('Data Berhasil Ditambahkan');
				
					var no = $('#jmlh_table').val();

					var i = parseInt(no)+1;
					t.row.add([
						i,
						data['waktu_tindakan'],
						data['nama_tindakan'],
						data['j_sarana'],
						data['j_pelayanan'],
						data['bakhp_this'],
						data['on_faktur'],
						data['nama_petugas'],
						data['jumlah'],
						"<a class='hapusTindakanklinik' style='cursor:pointer;'><input type='hidden' class='getid' value='"+data['care_id']+"''><i class='glyphicon glyphicon-trash'></i></a>",
						i
					]).draw();
					$('#jmlh_table').val(i);
				},
				error: function (data) {
					console.log(data);
					alert('gagal');
					
				}
			});
			$('#tambahTindakan2').modal('hide');
		});
		
		//--------------------- end overview klinik --------------------//

		//--------------------- all search dokter here --------------------//
		var d_click = 0;

		$('#nama_dOver').click(function(){
			d_click = 1;
		});

		$('#namadokter').click(function(){
			d_click = 2;
		});

		$('#konsul_dokter').click(function(){
			d_click = 3;
		});

		$('#resep_namadokter').click(function(){
			d_click = 4;
		});
		
		$('#ndokter_igd').click(function(){
			d_click = 5;
		});

		$('#namadokter_o').click(function(){
			d_click = 99;
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
					 			'<td colspan="2"><center>Data Dokter Tidak Ditemukan</center></td>'+
					 		'</tr>'
						);
					}
				},
				error:function(data){

				}
			});
		});

		var p_click = 1;
		$('#katakunciperawat').keyup(function(event){
			var d_item = {};
			d_item['search'] = $(this).val();
			event.preventDefault();

			$.ajax({
				type:'POST',
				data:d_item,
				url:"<?php echo base_url()?>igd/igddetail/search_perawat",
				success:function(data){
					console.log(data);

					$('#tbody_perawat').empty();
 					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							var nama = data[i]['nama_petugas'],
								id = data[i]['petugas_id'];

							$("#tbody_perawat").append(
								'<tr>'+
									'<td>'+nama+'</td>'+
									'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getPerawat(&quot;'+id+'&quot; , &quot;'+nama+'&quot;, &quot;'+p_click+'&quot;)"></i></td>'+
								'</tr>'
							);
						}
					}else{
						$('#tbody_perawat').empty();
						$('#tbody_perawat').append(
							'<tr>'+
					 			'<td colspan="2"><center>Data Perawat Tidak Ditemukan</center></td>'+
					 		'</tr>'
						);
					}
				},
				error:function(data){

				}
			});
		});
		//--------------------- end search dokter here --------------------//

		//--------------------- overview IGD here -------------------------//
		$('#submitOverIGD').submit(function(e){
			e.preventDefault();
			var item = {};
			item[1] = {};

			item[1]['waktu'] = $('#date_igd').val();
			item[1]['anamnesa'] = $('#anamnesa_igd').val();
			item[1]['tekanan_darah'] = $('#tekanandarah_igd').val();
			item[1]['temperatur'] = $('#temperatur_igd').val();
			item[1]['nadi'] = $('#nadi_igd').val();
			item[1]['pernapasan'] = $('#pernapasan_igd').val();
			item[1]['berat_badan'] = $('#berat_igd').val();
			item[1]['kepala_leher'] = $('#kepala_igd').val();
			item[1]['thorax_abd'] = $('#thorax_igd').val();
			item[1]['extrimitas'] = $('#ex_igd').val();
			item[1]['dokter'] = $('#dokter_igd').val();
			item[1]['perawat'] = $('#perawat_igd').val();
			item[1]['diagnosa1'] = $('#kode_utama_igd').val();
			item[1]['diagnosa2'] = $('#kode_sek1_igd').val();
			item[1]['diagnosa3'] = $('#kode_sek2_igd').val();
			item[1]['diagnosa4'] = $('#kode_sek3_igd').val();
			item[1]['diagnosa5'] = $('#kode_sek4_igd').val();
			item[1]['detail_diagnosa'] = $('#detailDiagnosa_igd').val();
			item[1]['terapi'] = $('#terapi_igd').val();
			item[1]['visit_id'] = $('#v_id').val();
			item[1]['sub_visit'] = $('#igd_id').val();

			var dokter = $('#ndokter_igd').val();
			var perawat = $('#nperawat_igd').val();

			$.ajax({
				type:'POST',
				data:item,
				url:'<?php echo base_url()?>igd/igddetail/save_over_igd',
				success: function(data){
					$(':input','#submitOverIGD')
					  .not(':button, :submit, :reset, :hidden')
					  .val('');
					$('#date_igd').val("<?php echo date('d/m/Y H:i:s') ?>");

					console.log(data);

					var jml = $('#jml_overigd').val();
					var no = parseInt(jml)+1;
					var t = $('#tableOverviewIGD').DataTable();

					t.row.add([
						no,
						data['unit'],
						data['anamnesa'],
						dokter,
						perawat,
						'<a href="#riwayat_igd" data-toggle="modal" onClick="detailOverIGD(&quot;'+data['id']+'&quot;)"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>',
						jml
					]).draw();

					$('#jml_overigd').val(no);
					alert("Data Berhasil Ditambahkan");
				}, error:function(data){
					console.log(data);
					alert('error');
				}
			});

		});

		$('#tindak_paramedis').focus(function(){
			var $input = $('#tindak_paramedis');
			
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

					    $('#tindak_id_paramedis').val(iddata[index]);
					    
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

		$('#tindak_nama_tindakan').focus(function(){
			var $input = $('#tindak_nama_tindakan');
			
			$.ajax({
				type:'POST',
				url:'<?php echo base_url();?>igd/igddetail/get_master_tindakan',
				success:function(data){
					var autodata = [];
					var iddata = [];

					for(var i = 0; i<data.length; i++){
						autodata.push(data[i]['nama_tindakan']);
						iddata.push(data[i]['tindakan_id']);
					}
					console.log(autodata);

					$input.typeahead({source:autodata, 
			            autoSelect: true}); 

					$input.change(function() {
					    var current = $input.typeahead("getActive");
					    var index = autodata.indexOf(current);

					    $('#tindak_id_tindakan').val(iddata[index]);
					    
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
		

		$('#tindak_nama_tindakan').change(function() {
			var tindakan_id = $('#tindak_id_tindakan').val();

			if(tindakan_id!=''){
				$.ajax({
					type: "POST",
					data : tindakan_id,
					url: "<?php echo base_url()?>rawatjalan/daftarpasien/get_tindakan/" + tindakan_id,
					success: function (data) {
						var total = parseInt(data['js'])+parseInt(data['jp'])+parseInt(data['bakhp']);

						$('#tindak_js').val(data['js']);
						$('#tindak_jp').val(data['jp']);
						$('#tindak_bakhp').val(data['bakhp']);
						$('#tindak_tarif').val(total);

						//console.log(data);
					},
					error: function (data) {
						alert('gagal');
						
					}
				});
			}else{
				$('#tindak_js').val('');
				$('#tindak_jp').val('');
				$('#tindak_bakhp').val('');
			}
		});

		$('#tindak_jumlah').focus(function(){
			var onfaktur = $('#tindak_onfaktur').val();
			var tarif = $('#tindak_tarif').val();
			var jumlah = parseInt(onfaktur)+parseInt(tarif);
			$(this).val(jumlah);
		});

		$('#submitTindakanIGD').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};

		    item[number]['waktu_tindakan'] = $('#tindak_date').val();
			item[number]['tindakan_id'] = $('#tindak_id_tindakan').val();
			item[number]['visit_id'] = $('#v_id').val();
			item[number]['sub_visit'] = $('#igd_id').val();
			item[number]['js'] = $('#tindak_js').val();
			item[number]['jp'] = $('#tindak_jp').val();
			item[number]['bakhp'] = $('#tindak_bakhp').val();
			item[number]['on_faktur'] = $('#tindak_onfaktur').val();
			item[number]['paramedis'] = $('#tindak_id_paramedis').val();
			item[number]['tarif'] = $('#tindak_tarif').val();
			item[number]['jumlah'] = $('#tindak_jumlah').val();
			item[number]['dept_id'] = $('#dept_id').val();

			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>igd/igddetail/save_tindakan",
				success: function (data) {
					console.log(data);
					var t = $('#tableCareIGD').DataTable();

					$(':input','#submitTindakanIGD')
					  .not(':button, :submit, :reset ')
					  .val('');
					$('#tindak_date').val("<?php echo date('d/m/Y H:i:s') ?>");

					alert('Data Berhasil Ditambahkan');
				
					var no = $('#jml_tindak_igd').val();

					var i = parseInt(no)+1;
					t.row.add([
						i,
						data['waktu_tindakan'],
						data['nama_tindakan'],
						data['j_sarana'],
						data['j_pelayanan'],
						data['bakhp_this'],
						data['on_faktur'],
						data['nama_petugas'],
						data['jumlah'],
						"<a class='hapusTindakan' style='cursor:pointer;'><input type='hidden' class='getid' value='"+data['care_id']+"''><i class='glyphicon glyphicon-trash'></i></a>",
						i
					]).draw();
					$('#jml_tindak_igd').val(i);
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
			var v_id = $('#igd_id').val();
			var dep = $('#dept_id').val();

			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>igd/igddetail/hapus_tindakan/"+id+"/"+v_id+"/"+dep,
				success:function(data){
					console.log(data);

					var t = $('#tableCareIGD').DataTable();
					$('#jml_tindak_igd').val(data.length);

					t.clear().draw();

					for(var i = 0; i<data.length; i++){
						t.row.add([
							i+1,
							data[i]['waktu_tindakan'],
							data[i]['nama_tindakan'],
							data[i]['j_sarana'],
							data[i]['j_pelayanan'],
							data[i]['bakhp_this'],
							data[i]['on_faktur'],
							data[i]['nama_petugas'],
							data[i]['jumlah'],
							"<a class='hapusTindakan' style='cursor:pointer;'><input type='hidden' class='getid' value='"+data[i]['care_id']+"''><i class='glyphicon glyphicon-trash'></i></a>",
							i
						]).draw();
					}

				},
				error:function(data){
					console.log(data);
				}	
			});
		});
		//--------------------- end overview IGD here ---------------------//

		//---------------------- pemberian resep here ---------------------//
		$('#submitresep').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};

		    item[number]['tanggal'] = $('#resep_date').val();
			item[number]['dokter'] = $('#resep_id_dokter').val();
			item[number]['visit_id'] = $('#v_id').val();
			item[number]['resep'] = $('#resep_deskripsi').val();
			item[number]['sub_visit'] = $('#igd_id').val();

			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>rawatjalan/daftarpasien/save_visit_resep",
				success: function (data) {
					console.log(data);
					var jml = $('#jml_resep').val();
					var no = parseInt(jml)+1;
					var t = $('#tableResep').DataTable();
					var date = changeDate(data['tanggal']);

					t.row.add([
						no,
						data['nama_petugas'],
						date,
						data['resep'],
						"-",
						"-",
						'<a style="cursor:pointer;" class="hapusresep"><input type="hidden" class="getid" value="'+data['resep_id']+'"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>',
						no
					]).draw();

					$('#jml_resep').val(no);
					$('#resep_namadokter').val('');
					$('#resep_id_dokter').val('');
					$('#resep_deskripsi').val('');
					$('#resep_date').val("<?php echo date('d/m/Y'); ?>");

					alert('Data Berhasil Ditambahkan');
				},
				error: function (data) {
					alert('gagal');
					
				}
			});
		});

		$(document).on('click','.hapusresep',function(){
			var id = $(this).children('.getid').val();
			var tr = $(this).parent().parent();
			var igd_id = $('#igd_id').val();

			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>igd/igddetail/hapus_resep/"+id+"/"+igd_id,
				success:function(data){
					console.log(data);
					var t = $('#tableResep').DataTable();
					var no;
					$('#jml_resep').val(data.length);

					t.clear().draw();

					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							no = i+1;

							t.row.add([
								no,
								data[i]['nama_petugas'],
								changeDate(data[i]['tanggal']),
								data[i]['resep'],
								"-",
								"-",
								'<a style="cursor:pointer;" class="hapusresep"><input type="hidden" class="getid" value="'+data[i]['resep_id']+'"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>',
								no
							]).draw();
						}
					}
				},
				error:function(data){
					console.log(data);
				}	
			});
		});
		//---------------------- end pemerian resep here -------------------//

		//---------------------- order kamar operasi here ------------------//
		var item_order = {};
		item_order[1] = {};
		$('#submit_order_operasi').submit(function(e){
			e.preventDefault();

			item_order[1]['visit_id'] = $('#v_id').val();
			item_order[1]['sub_visit'] = $('#igd_id').val();
			item_order[1]['dept_id'] = $('#dept_id').val();
			item_order[1]['dept_tujuan'] = "KAMAR OPERASI"; 
			item_order[1]['pengirim'] = $('#iddokter_o').val();
			item_order[1]['alasan'] = $('#operasi_detail').val();
			item_order[1]['jenis_operasi'] = $('#operasi_jenis').val();
			item_order[1]['waktu_mulai'] = $('#operasi_date').val();

			$.ajax({
				type: "POST",
				data: item_order,
				url: "<?php echo base_url()?>igd/igddetail/save_order_operasi",
				success: function(data){
					console.log(data);
					var i = $('#jml_data').val();
					var no = parseInt(i)+1;
					var t = $('#tableOpeasi').DataTable();

					t.row.add([
						no,
						data['waktu_mulai'],
						data['nama_petugas'],
						'Kamar Operasi',
						data['alasan'],
						'<i class="glyphicon glyphicon-trash hapusorder" data-toggle="tooltip" data-placement="top" title="Hapus" style="cursor:pointer;"><input type="hidden" class="getid" value="'+data['order_operasi_id']+'"></i>',
						no

					]).draw();

					$('#jml_data').val(no);

					$(':input','#submit_order_operasi')
					  .not(':button, :submit, :reset, :hidden')
					  .val('');
					$('#operasi_date').val("<?php echo date('d/m/Y H:i:s') ?>");

					alert('Data Berhasil Ditambahkan');

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
			var igd_id = $('#igd_id').val();
			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>igd/igddetail/hapus_order/"+id+"/"+igd_id,
				success:function(data){
					console.log(data);					
					var no = 0;
					var t = $('#tableOpeasi').DataTable();

					t.clear().draw();
					for(var i = 0; i< data.length; i++){
						no++;
						t.row.add([
							no,
							data[i]['waktu_mulai'],
							data[i]['nama_petugas'],
							'Kamar Operasi',
							data[i]['alasan'],
							'<i class="glyphicon glyphicon-trash hapusorder" data-toggle="tooltip" data-placement="top" title="Hapus" style="cursor:pointer;"><input type="hidden" class="getid" value="'+data[i]['order_operasi_id']+'"></i>',
							no

						]).draw();
					}

					$('#jml_data').val(data.length);
				},
				error:function(data){
					console.log(data);
				}	
			});
		});
		//-------------------- end order kamar operasi here ----------------//

		//--------------------- order konsultasi gizi here -----------------//
		var g_item = {};
		g_item[1] = {};
		$('#submit_gizi').submit(function(e){
			e.preventDefault();
			g_item[1]['tanggal'] = $('#konsul_date').val();
			g_item[1]['visit_id'] = $('#v_id').val();
			g_item[1]['sub_visit'] = $('#igd_id').val();
			g_item[1]['konsultan'] = $('#konsul_idDokter').val();
			g_item[1]['kajian_gizi'] = $('#konsul_kajiangizi').val();
			g_item[1]['anamnesa_diet'] = $('#konsul_anemdiet').val();
			g_item[1]['kajian_diet'] = $('#konsul_kajiandiet').val();
			g_item[1]['detail_menu'] =  $('#konsul_detail').val();
			var konsultan = $('#konsul_dokter').val();

			$.ajax({
				type:'POST',
				data:g_item,
				url:'<?php echo base_url(); ?>igd/igddetail/save_gizi',
				success:function(data){
					console.log(data);
					var jml = parseInt($('#jml_gizi').val());
					var t = $('#tableKonsultasi').DataTable();
					var no = jml+1;

					alert("data Berhasil Ditambahkan ");

					var action = '<a style="cursor:pointer;" class="hapusgizi"><input type="hidden" class="getid" value="'+data['gizi_id']+'"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>';
						action += '<a href="#print"><i class="glyphicon glyphicon-print"  data-toggle="tooltip" data-placement="top" title="Print"></i></a>';
					
					t.row.add([
						no,
						changeDate(data['tanggal']),
						konsultan,
						data['kajian_gizi'],
						data['anamnesa_diet'],
						data['kajian_diet'],
						data['detail_menu'],
						action,
						no
					]).draw();

					$('#jml_gizi').val(no);

					$(':input','#submit_gizi')
					  .not(':button, :submit, :reset, :hidden')
					  .val('');
					$('#konsul_date').val("<?php echo date('d/m/Y H:i') ?>");

				},error:function(data){
					console.log(data);
				}
			});

		});

		$(document).on('click','.hapusgizi',function(){
			var id = $(this).children('.getid').val();
			var tr = $(this).parent().parent();
			var igd_id = $('#igd_id').val();

			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>igd/igddetail/hapus_gizi/"+id+"/"+igd_id,
				success:function(data){
					console.log(data);
					var t = $('#tableKonsultasi').DataTable();
					t.clear().draw();

					for(var i = 0; i<data.length; i++){
						var no = i+1;
						var action = '<a style="cursor:pointer;" class="hapusgizi"><input type="hidden" class="getid" value="'+data[i]['gizi_id']+'"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>';
							action += '<a href="#print"><i class="glyphicon glyphicon-print"  data-toggle="tooltip" data-placement="top" title="Print"></i></a>';
						
						t.row.add([
							no,
							changeDate(data[i]['tanggal']),
							data[i]['nama_petugas'],
							data[i]['kajian_gizi'],
							data[i]['anamnesa_diet'],
							data[i]['kajian_diet'],
							data[i]['detail_menu'],
							action,
							no
						]).draw();

					}

					$('#jml_gizi').val(data.length);
				},
				error:function(data){
					console.log(data);
				}	
			});
		});

		//-------------------- end order konsultasi gizi -------------------//

		//---------------------- resume pulang here ------------------//
		$('#submit_sebab').submit(function(e){
			e.preventDefault();
			var data = {};
			data['search'] = $('#sebab_katakunci').val();

			$.ajax({
				type:'POST',
				data:data,
				url:"<?php echo base_url()?>igd/igddetail/search_sebab",
				success:function(data){
					console.log(data);
					$('#tbody_sebab').empty();
 					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							var nama = data[i]['sebab_penyakit'],
								kode = data[i]['kode_sebab'],
								id = data[i]['sebab_id'];

							$("#tbody_sebab").append(
								'<tr>'+
									'<td>'+kode+'</td>'+
									'<td>'+nama+'</td>'+
									'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getSebab(&quot;'+id+'&quot; , &quot;'+nama+'&quot;)"></i></td>'+
								'</tr>'
							);
						}
					}else{
						$('#tbody_sebab').empty();
						$('#tbody_sebab').append(
							'<tr>'+
					 			'<td colspan="3"><center>Data Sebab Tidak Ditemukan</center></td>'+
					 		'</tr>'
						);
					}
				}
			});
		});

		$('#submitresume').submit(function(e){
			e.preventDefault();
			var item = {};
			item[1] = {};

			item[1]['igd_id'] = $('#igd_id').val();
			item[1]['visit_id'] = $('#v_id').val();
			item[1]['waktu_keluar'] = $('#res_date').val();
			item[1]['alasan_keluar'] = $('#res_alasankeluar').val();
			item[1]['detail_alasan_pulang'] = $('#res_alasanpulang').val();
			item[1]['rs_id'] = $('#res_rsrujuk').val();
			item[1]['waktu_kematian'] = $('#res_datemeninggal').val();
			item[1]['detail_kematian'] = $('#res_dmeninggal').val();
			item[1]['keterangan_kematian'] = $('#res_ketmeninggal').val();
			item[1]['sebab'] = $('#res_idsebab').val();
			item[1]['is_lakalantas'] = ($('#res_lantas').is(":checked"))?1:0;
			item[1]['is_lakakerja'] = ($('#res_lkerja').is(":checked"))?1:0;
			item[1]['is_lakart'] = ($('#res_lakart').is(":checked"))?1:0;
			item[1]['is_penganiayaan'] = ($('#res_aniaya').is(":checked"))?1:0;
			item[1]['is_intoksinasi'] = ($('#res_intoksin').is(":checked"))?1:0;
			item[1]['is_gigitan'] = ($('#res_gigitan').is(":checked"))?1:0;
			item[1]['is_penyakit_dalam'] = ($('#res_non1').is(":checked"))?1:0;
			item[1]['is_bedah'] = ($('#res_non2').is(":checked"))?1:0;
			item[1]['is_anak'] = ($('#res_non3').is(":checked"))?1:0;
			item[1]['is_obgsyn'] = ($('#res_non4').is(":checked"))?1:0;
			item[1]['is_dll'] = ($('#res_non5').is(":checked"))?1:0;

			item[1]['is_kunjungan_baru'] = $('input[name="res_kunjungan"]:checked', '#submitresume').val();
			item[1]['is_kasus_baru'] = $('input[name="res_jk"]:checked', '#submitresume').val();

			$.ajax({
				type:"POST",
				data:item,
				url:'<?php echo base_url();?>igd/igddetail/save_resume',
				success:function(data){
					alert('Data Berhasil Ditambahkan');
					console.log(data);
					// window.location('<?php echo base_url(); ?>igd/homeigd');
				}
			})
		});
		//-------------------- end resume pulang here ----------------//
	});

	function save_overview (item) {
		var petugas = $('#nama_dOver').val();

		$.ajax({
			type: "POST",
			data : item,
			url: "<?php echo base_url()?>igd/igddetail/save_overview",
			success: function (data) {				
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
				$('#dnama1').val("");
				$('#dnama2').val("");
				$('#dnama3').val("");
				$('#dnama4').val("");
				$('#dnama5').val("");
				$('#terapi_over').val("");
				$('#alergi_over').val("");
				$('#detail_over').val("");
				$("#tekanandarahOver").val("");

				console.log(data);

				var jml = $('#jml_over').val();
				var no = parseInt(jml)+1;
				var t = $('#tableOverviewKlinik').DataTable();

				t.row.add([
					no,
					data['unit'],
					data['anamnesa'],
					petugas,
					'<a href="#riwayat_over" data-toggle="modal" onClick="detailOver(&quot;'+data['id']+'&quot;)"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>',
					jml
				]).draw();

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

		if(diagnosa==11){
			$('#kode_utama_igd').val(id);
			$('#nama_utama_igd').val(nama);
		}else if(diagnosa==12){
			$('#kode_sek1_igd').val(id);
			$('#nama_sek1_igd').val(nama);
		}else if(diagnosa==13){
			$('#kode_sek2_igd').val(id);
			$('#nama_sek2_igd').val(nama);
		}else if(diagnosa==14){
			$('#kode_sek3_igd').val(id);
			$('#nama_sek3_igd').val(nama);
		}else if(diagnosa==15){
			$('#kode_sek4_igd').val(id);
			$('#nama_sek4_igd').val(nama);
		}

		$('#tbody_diagnosa').empty();
		$('#tbody_diagnosa').append('<tr><td colspan="3" style="text-align:center;">Cari Data Diagnosa</td></tr>');
		$('#katakunci_diag').val("");
		$('#searchDiagnosa').modal('hide');
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
			$("#konsul_idDokter").val(id);
			$("#konsul_dokter").val(nama);	
		}else if(dokter == 4){
			$('#resep_id_dokter').val(id);
			$('#resep_namadokter').val(nama);
		}else if(dokter == 5){
			$('#dokter_igd').val(id);
			$('#ndokter_igd').val(nama);
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

	function getPerawat(id, nama, perawat){
		if(perawat == 1){
			$('#perawat_igd').val(id);
			$('#nperawat_igd').val(nama);
		}

		$("#searchPerawat").modal('hide');
		$("#katakunciperawat").val("");
		$('#tbody_perawat').empty();
		$('#tbody_perawat').append('<tr><td colspan="3" style="text-align:center;">Cari Data Perawat</td></tr>');
	}

	function detailOver(id){
		var dsek1,
			dsek2,
			dsek3,
			dsek4;
		$.ajax({
			type:'POST',
			url:'<?php echo base_url(); ?>igd/igddetail/get_detail_over/'+id,
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
				$('#detail_ksek1').val(data['diagnosa2']);
				$('#detail_ksek2').val(data['diagnosa3']);
				$('#detail_ksek3').val(data['diagnosa4']);
				$('#detail_ksek4').val(data['diagnosa5']);
				$('#detail_dutama').val(data['diagnosis_nama']);
				$('#detail_detail').val(data['detail_diagnosa']);
				$('#detail_terapi').val(data['terapi']);
				$('#detail_alergi').val(data['alergi']);
				$('#detail_dsek1').val("");
				$('#detail_dsek2').val("");
				$('#detail_dsek3').val("");
				$('#detail_dsek4').val("");

				dsek1 = data['diagnosa2'];
				dsek2 = data['diagnosa3'];
				dsek3 = data['diagnosa4'];
				dsek4 = data['diagnosa5'];

				if(dsek1 != null)
					get_diag_name(dsek1, 1);
				if(dsek2 != null)
					get_diag_name(dsek2, 2);
				if(dsek3 != null)
					get_diag_name(dsek3, 3);
				if(dsek4 != null)
					get_diag_name(dsek4, 4);
					
			}
		});
	}

	function detailOverIGD(id){
		var dsek1,
			dsek2,
			dsek3,
			dsek4;
		$.ajax({
			type:'POST',
			url:'<?php echo base_url(); ?>igd/igddetail/get_detail_over_igd/'+id,
			success:function(data){
				console.log(data);
				$('#imod_date').val(data['waktu']);
				$('#imod_anamnesa').val(data['anamnesa']);
				$('#imod_tekanandarah').val(data['tekanan_darah']);
				$('#imod_temperatur').val(data['temperatur']);
				$('#imod_nadi').val(data['nadi']);
				$('#imod_pernapasan').val(data['pernapasan']);
				$('#imod_berat').val(data['berat_badan']);
				$('#imod_kepala').val(data['kepala_leher']);
				$('#imod_thorax').val(data['thorax_abd']);
				$('#imod_ex').val(data['extrimitas']);
				$('#imod_dokter').val(data['nama_petugas']);
				$('#imod_kode_utama').val(data['diagnosa1']);
				$('#imod_kode_sek1').val(data['diagnosa2']);
				$('#imod_kode_sek2').val(data['diagnosa3']);
				$('#imod_kode_sek3').val(data['diagnosa4']);
				$('#imod_kode_sek4').val(data['diagnosa5']);
				$('#imod_nama_utama').val(data['diagnosis_nama']);
				$('#imod_detailDiagnosa').val(data['detail_diagnosa']);
				$('#imod_terapi').val(data['terapi']);
				$('#imod_nama_sek1').val("");
				$('#imod_nama_sek2').val("");
				$('#imod_nama_sek3').val("");
				$('#imod_nama_sek4').val("");

				dsek1 = data['diagnosa2'];
				dsek2 = data['diagnosa3'];
				dsek3 = data['diagnosa4'];
				dsek4 = data['diagnosa5'];

				if(dsek1 != null)
					get_diag_name(dsek1, 11);
				if(dsek2 != null)
					get_diag_name(dsek2, 12);
				if(dsek3 != null)
					get_diag_name(dsek3, 13);
				if(dsek4 != null)
					get_diag_name(dsek4, 14);
					
			}
		});
	}

	function get_diag_name(kode, i){
		$.ajax({
			type:'POST',
			url:'<?php echo base_url();?>igd/igddetail/get_diag_name/'+kode,
			success:function(data){
				console.log(data);
					if(i==1)
						$('#detail_dsek1').val(data['diagnosis_nama']);
					if(i==2)
						$('#detail_dsek2').val(data['diagnosis_nama']);
					if(i==3)
						$('#detail_dsek3').val(data['diagnosis_nama']);
					if(i==4)
						$('#detail_dsek4').val(data['diagnosis_nama']);

					if(i==11)
						$('#imod_nama_sek1').val(data['diagnosis_nama']);
					if(i==12)
						$('#imod_nama_sek2').val(data['diagnosis_nama']);
					if(i==13)
						$('#imod_nama_sek3').val(data['diagnosis_nama']);
					if(i==14)
						$('#imod_nama_sek4').val(data['diagnosis_nama']);
			}
		});
	}

	function getSebab(id, nama){
		$('#res_sebab').val(nama);
		$('#res_idsebab').val(id);

		$("#searchGolongan").modal('hide');
		$("#sebab_katakunci").val("");
		$('#tbody_sebab').empty();
		$('#tbody_sebab').append('<tr><td colspan="3" style="text-align:center;">Cari Data Perawat</td></tr>');
	}

	function changeDate(tgl_lahir){
		var remove = tgl_lahir.split("-");
		var bulan;
		switch(remove[1]){
			case "01": bulan="January";break;
			case "02": bulan="February";break;
			case "03": bulan="March";break;
			case "04": bulan="April";break;
			case "05": bulan="May";break;
			case "06": bulan="June";break;
			case "07": bulan="July";break;
			case "08": bulan="August";break;
			case "09": bulan="September";break;
			case "10": bulan="October";break;
			case "11": bulan="November";break;
			case "12": bulan="December";break;
		}
		var tgl = remove[2]+" "+bulan+" "+remove[0];

		return tgl;
	}
</script>
