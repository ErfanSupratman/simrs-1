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
		<a href="<?php echo base_url() ?>bersalin/bersalindetail">Nama Pasien</a>
		<span class="nama">( Marwah 1B/Bed 1&nbsp;-&nbsp;Kelas III&nbsp;-&nbsp;BPJS Kelas 2 )</span>
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
 			</div>
            <div class="informasi" id="info1">
	            <form class="form-horizontal" role="form">
	            	
	           		<div class="form-group">
						<label class="control-label col-md-3" >Jenis Identitas Pasien</label>
						<div class="col-md-1">
							<input  id="jnsIdentitas" name="jenis_identitas" value="KTP" style="border:0px;background-color:transparent;font-weight:bold" disabled />
						</div>					
					</div>	
					
					<div class="form-group">
						<label class="control-label col-md-3" >Nomor Identitas Pasien</label>
						<div class="col-md-3">
							<input  id="NomorID" name="nomor_identitas" value="12312312312" style="border:0px;background-color:transparent;font-weight:bold" disabled />
						</div>
					</div>	
					<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>

					<div class="form-group">
						<label class="control-label col-md-3">No RM</label>
						<div class="col-md-4">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="rm_id" name="rm_id" value="123123" disabled />
						</div>
					</div>
					<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>

					<div class="form-group">
						<label class="control-label col-md-3">Nama Lengkap </label>
						<div class="col-md-4">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="NamaLengkap" name="NamaLengkap" value="Jems Naban" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Alias </label>
						<div class="col-md-1">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="alias" name="alias" value="Tuan" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Jenis Kelamin</label>
						<div class="col-md-1">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="jk" name="jk" value="Laki-Laki" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Golongan Darah </label>
						<div class="col-md-1">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="goldarah" name="goldarah" value="AB" disabled />												
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Agama </label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="agama" name="agama" value="Kristen" disabled />
						</div>
					</div>
					<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>

					<div class="form-group">
						<label class="control-label col-md-3">Tempat Lahir </label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="newTempatLahir" name="tempat_lahir" value="NTT" disabled/>
						</div>
																		
					</div>			
					<div class="form-group">
						<label class="control-label col-md-3">Tanggal Lahir </label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" class="input-medium date-picker" maxlength="12" type="text" value="12 Desember 2012" 
								data-date-format="dd/mm/yyyy" id="TanggalLahir" placeholder="Tanggal Lahir" disabled />
						</div>												
					</div>			

					<div class="form-group">
						<label class="control-label col-md-3">Umur</label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="umur" name="umur" 
							value="21" disabled />
						</div>
					</div>
					<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>

					<div class="form-group">
						<label class="control-label col-md-3">Status Kawin</label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="status kawin" name="statuskawin" value="Kawin" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Pendidikan Terakhir</label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="pendidikan" name="pendidikan" value="SMA" disabled />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Pekerjaan </label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="Pekerjaan" name="pekerjaan" value="Buruh" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Nomor Telepon</label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="nomorPasien" name="nomor_pasien" value="09123123" disabled />
						</div>						
					</div>
					<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>

					<div class="form-group">
						<label class="control-label col-md-3">Alamat </label>
						<div class="col-md-5">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="Alamat" name="alamat" value="Rumahnya" disabled />
						</div>						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Alamat KTP</label>
						<div class="col-md-5">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="AlamatKTP" name="alamatKTP" value="Sumba" disabled />
						</div>						
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3">Wilayah </label>									
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="provinsi" name="provinsi" value="NTT" disabled />
						</div>											
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Kabupaten </label>									
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="kabupaten" name="kabupaten" value="Kupang" disabled />
						</div>												
						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Kecamatan </label>									
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="kecamatan" name="kecamatan" value="Apalah" disabled />
						</div>
						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Kelurahan </label>									
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="kelurahan" name="kelurahan" value="Terserah" disabled />
						</div>
					</div>
					<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
					<br>
						
					<div class="form-group">
						<label class="control-label col-md-3">Cara Pembayaran</label>
						<div class="col-md-2">
							<input style="border:0px;background-color:transparent;font-weight:bold" id="cara_bayar" name="cara_bayar" value="Ngutang" disabled />
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
		 			<form class="form-horizontal" role="form" method="POST" id="submitOver">
				       	<br>
		 				<div class="form-group">
							<label class="control-label col-md-3">Waktu</label>
							<div class="col-md-2" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y H:i");?>">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Anamnesa</label>
							<div class="col-md-4">
								<textarea class="form-control isian" id="anamnesa" name="anamnesa" placeholder="Anamnesa"></textarea>
							</div>
						</div>

						<fieldset class="fsStyle">
							<legend>
				                Tanda Vital
							</legend>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Tekanan Darah</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="tekanandarah" name="takanandarah" placeholder="Tekanan Darah" >
								</div>
								<label class="control-label col-md-2">mmHg</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Temperatur</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="temperatur" name="temperatur" placeholder="Temperatur" >
								</div>
								<label class="control-label col-md-2">&deg;C</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Nadi</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="nadi" name="nadi" placeholder="Nadi" >
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Pernapasan</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="pernapasan" name="pernapasan" placeholder="Pernapasan" >
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Berat Badan</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="berat" name="berat" placeholder="Berat Badan" >
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
									<input type="text" class="form-control" style="cursor:pointer;" readonly id="dokter" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Diagnosa Utama</label>
								<div class="col-md-1">
									<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_utama" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
								</div>
								<div class="col-md-2">
									<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Diagnosa Sekunder</label>
								<div class="col-md-1">
									<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_sek1" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
								</div>
								<div class="col-md-2">
									<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
								</div>
								<label class="control-label">1</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;"></label>
								<div class="col-md-1">
									<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_sek2" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
								</div>
								<div class="col-md-2">
									<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
								</div>
								<label class="control-label">2</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;"></label>
								<div class="col-md-1">
									<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_sek3" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
								</div>
								<div class="col-md-2">
									<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
								</div>
								<label class="control-label">3</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;"></label>
								<div class="col-md-1">
									<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_sek4" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
								</div>
								<div class="col-md-2">
									<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
								</div>
								<label class="control-label">4</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Detail Diagnosa</label>
								<div class="col-md-4">
									<textarea class="form-control" id="detailDiagnosa" name="detailDiagnosa" placeholder="Detail Diagnosa" ></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Terapi</label>
								<div class="col-md-4">
									<textarea class="form-control" id="terapi" name="terapi" placeholder="Terapi" ></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Alergi</label>
								<div class="col-md-3">
									<input type="text" class="form-control isian" id="alergi" name="alergi" placeholder="Alergi">
								</div>
							</div>
				  		</fieldset>

						<div class="form-group">
							<label class="control-label col-md-3"> </label>
							<div class="col-md-5">
								<button type="reset" id="bcancel" class="btn btn-danger">Reset</button>
								<input type="hidden" id="v_id" value="">&nbsp;&nbsp;
						    	<button type="submit" id="simpanOver" class="btn btn-success">Simpan</button>
						    </div>
			        	</div>
					</form>
				</div>
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
						<tbody>
							<tr>
								<td>1</td>
								<td>Poli Umum</td>
								<td>Ini isinya panjang</td>
								<td>Jems Naban</td>
								<td style="text-align:center;"><a href="#riwayatkonsultasidokter" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
							</tr>
						</tbody>
					</table>												
				</div>
			</div>
			<div class="modal fade" id="riwayatkonsultasidokter" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal" role="form" method="POST" id="riwayatkonsultasidokter">
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
										<label class="control-label col-md-4" >Diagnosa</label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_utama" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Keterangan" readonly>
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
										<th>Total</th>
										<th width="80">Delete</th>
									</tr>
								</thead>
								<tbody>
									<tr><td colspan='10' style='text-align:center'>Data Kosong</td>
									<td style="text-align:center">
									<a href="#hapusResep">
									<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
								</td>
									</tr>
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
			<div class="informasi" id="tbhCare">
	 			<form class="form-horizontal" role="form" method="POST" id="submitOver">
			       	<br>
	 				<div class="form-group">
						<label class="control-label col-md-3">Waktu</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y H:i");?>">
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3">Anamnesa</label>
						<div class="col-md-4">
							<textarea class="form-control isian" id="anamnesa" name="anamnesa" placeholder="Anamnesa"></textarea>
						</div>
					</div>

					<fieldset class="fsStyle">
						<legend>
			                Tanda Vital
						</legend>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Tekanan Darah</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="tekanandarah" name="takanandarah" placeholder="Tekanan Darah" >
							</div>
							<label class="control-label col-md-2">mmHg</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Temperatur</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="temperatur" name="temperatur" placeholder="Temperatur" >
							</div>
							<label class="control-label col-md-2">&deg;C</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Nadi</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="nadi" name="nadi" placeholder="Nadi" >
							</div>
							<label class="control-label col-md-2">x/menit</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Pernapasan</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="pernapasan" name="pernapasan" placeholder="Pernapasan" >
							</div>
							<label class="control-label col-md-2">x/menit</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Berat Badan</label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="berat" name="berat" placeholder="Berat Badan" >
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
								<textarea class="form-control" id="kepala" name="kepala" placeholder="Hasil Pemeriksaan" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Thorax & ABD</label>
							<div class="col-md-5">
								<textarea class="form-control" id="thorax" name="thorax" placeholder="Hasil Pemeriksaan" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Extremitas</label>
							<div class="col-md-5">
								<textarea class="form-control" id="ex" name="ex" placeholder="Hasil Pemeriksaan" ></textarea>
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
								<input type="text" class="form-control" style="cursor:pointer;" readonly id="dokter" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Perawat Jaga</label>
							<div class="col-md-3">
								<input type="text" class="form-control" style="cursor:pointer;" readonly id="perawat" placeholder="Search Perawat" data-toggle="modal" data-target="#searchPerawat">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Diagnosa Utama</label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_utama" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Diagnosa Sekunder</label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_sek1" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label">1</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_sek2" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label">2</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_sek3" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label">3</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_sek4" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label">4</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Detail Diagnosa</label>
							<div class="col-md-4">
								<textarea class="form-control" id="detailDiagnosa" name="detailDiagnosa" placeholder="Detail Diagnosa" ></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3" style="width:310px;">Terapi</label>
							<div class="col-md-4">
								<textarea class="form-control" id="terapi" name="terapi" placeholder="Terapi" ></textarea>
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
							<input type="hidden" id="v_id" value="">&nbsp;&nbsp;
					    	<button type="submit" id="simpanOver" class="btn btn-success">Simpan</button>
					    </div>
		        	</div>
				</form>
			</div>
			<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:20px;margin-left:20px;">
			<div class="portlet-body" style="margin: 20px 40px 0px 30px">
				<table id="tableOverview" class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
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
						<tr>
							<td>1</td>
							<td width="230" style="text-align:center">12 Desember 2012 - 12:12</td>
							<td>Sakit</td>
							<td>Putu</td>
							<td>Jems Naban</td>
							<td style="text-align:center;"><a href="#riwayatpenangananigd" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
						</tr>
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
											<input type="text" style="cursor:pointer;" class="form-control"  readonly data-provide="datetimepicker" data-date-format="dd/mm/yyyy hh:ii:ss" placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
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
						<div class="col-md-6"><a data-toggle="modal" href="#tambahTindakanigd" style="color:white">
							<button type="submit" class="btn btn-success" style="margin-left:15px;"> Tambah</button></a>
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
										<th>Total</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<tr><td colspan='10' style='text-align:center'>Data Kosong</td>
									<td style="text-align:center">
										<a href="#hapusResep">
										<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
									</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</form>
			</div>
			<br>
	     
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
										<label class="control-label">1</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4"></label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_sek2" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder=" Diagnosa" readonly>
										</div>
										<label class="control-label">2</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4"></label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_sek3" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder=" Diagnosa" readonly>
										</div>
										<label class="control-label">3</label>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4"></label>
										<div class="col-md-3">
											<input type="text" class="form-control" id="kode_sek4" placeholder="Kode" readonly>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder=" Diagnosa" readonly>
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
		</div> 

		<div class="tab-pane" id="ibu">
			<div class="dropdown" id="ovih">
        		<div id="titleInformasi"> Tambah Overview Ibu Hamil</div>
            	<div class="btnBawah" id="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
          	<br>
            <div class="informasi" id="inovih">
	            <form class="form-horizontal" role="form">
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
											<input type="text" class="form-control" id="pertamahaid" name="pertamahaid" placeholder="tahun" >
											<span class="input-group-addon" id="basic-addon" style="width:60px">tahun</span>
										</div>	
									</div>
									<div class="form-group">
										<label class="control-label col-md-5">Lama HAID</label>
										<div class="input-group col-md-3">
											<input type="text" class="form-control" id="lamahaid" name="lamahaid" placeholder="hari" >
											<span class="input-group-addon" id="basic-addon1" style="width:60px">hari</span>
										</div>	
										
									</div>
									<div class="form-group">
										<label class="control-label col-md-5">Siklus HAID</label>
										<div class="input-group col-md-3">
											<input type="text" class="form-control" id="siklus" name="siklus" placeholder="hari" >
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
											<input type="text" class="form-control" id="perkawinan" name="perkawinan" placeholder="jumlah" >
											<span class="input-group-addon" id="basic-addon1" style="width:60px">kali</span>
										</div>	
									</div>
									<div class="form-group">
										<label class="control-label col-md-5">Umur Pernikahan</label>
										<div class="input-group col-md-3">
											<input type="text" class="form-control" id="umurpernikahan" name="umurpernikahan" placeholder="tahun" >
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

											<input type="text" class="form-control" id="metode" name="metode" placeholder="Metode KB" >
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
												<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-5">Lingkar Lengan Atas</label>
										<div class="input-group col-md-3">
											<input type="text" class="form-control" name="lingkarLengan" placeholder="Ex: 12">
											<span class="input-group-addon" id="basic-addon1">Cm</span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-5">Tinggi Badan</label>
										<div class="input-group col-md-3">
											<input type="text" class="form-control" name="tinggi" placeholder="Ex: 12">
											<span class="input-group-addon" id="basic-addon1">Cm</span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-5"> Hamil Ke - </label>
										<div class="input-group col-md-3">
											<input type="text" class="form-control" name="hamilke" >
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-5"> Jumlah Persalinan</label>
										<div class="input-group col-md-3">
											<input type="text" class="form-control" name="jumlah">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-5">Riwayat Alergi</label>
										<div class="input-group col-md-5">
											<input type="text" class="form-control" name="alergi" placeholder="Alergi">
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
											<input type="text" class="form-control" name="gugur">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-5"> Jumlah Anak Hidup</label>
										<div class="input-group col-md-3">
											<input type="text" class="form-control" name="hidup">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-5"> Jumlah Lahir Mati</label>
										<div class="input-group col-md-3">
											<input type="text" class="form-control" name="mati">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-5"> Jumlah Anak lahir prematur</label>
										<div class="input-group col-md-3">
											<input type="text" class="form-control" name="kurang">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-5"> Jarak dengan anak terakhir</label>
										<div class="input-group col-md-4">
											<input type="text" class="form-control" name="jarak">
											<span class="input-group-addon">
												<select class="select" name="jarak" >
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
											<input type="text" class="form-control" name="imuneter">
											<span class="input-group-addon">
												<select class="select" name="jarak" >
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
										<input type="text" class="form-control" style="cursor:pointer;" placeholder="Penolong" data-toggle="modal" data-target="#penolong" readonly>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-2" style="width:235px;">Riwayat Obstetrik</label>
									<div class="input-group col-md-5">
										<textarea class="form-control" name="riwobstetrik" placeholder="Detail Riwayat"></textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-2" style="width:235px;">Penyakit & Operasi</label>
									<div class="input-group col-md-5">
										<textarea class="form-control" name="penyakitoperasi" placeholder="Detail Penyakit & Operasi"></textarea>
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
						<a href="#resetResume"><button type="submit" class="btn btn-warning">Reset </button></a>
						&nbsp;&nbsp;
					 	
					 	<button type="submit" id="simpanOver" class="btn btn-success">Simpan</button>
							
					</center> <br>

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

					<div class="modal fade" id="searchdokter" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Dokter </h3>
			        			</div>
			        			<div class="modal-body">
				        			<div class="form-group">
										<div class="form-group">	
											<div class="col-md-5" style="margin-left:35px;">
												<input type="text" class="form-control" name="katakunci" id="key" placeholder="Nama Dokter"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>
											<br><br>	
										</div>		
										<div style="margin-left:10px; margin-right:10px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 30px 0px 20px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabledokter">
												<thead>
													<tr class="info">
														<th>Nama Dokter</th>
														<th width="10%">Pilih</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Jems </td>
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
			        			</div>
			        			<div class="modal-footer">
			 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
						      	</div>
							</div>
						</div>
					</div>	
				</form>
			</div>

		    <div class="dropdown" id="rovih">
        		<div id="titleInformasi">Riwayat Overview Ibu Hamil</div>
            	<div class="btnBawah" ><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="tabelinformasi" id="inrovih">
            	<div class="portlet-body" id="inrovih" style="margin: 0px 20px 0px 20px">
            	
					<table class="table table-striped table-bordered table-hover table-responsive tableDT">
						<thead>
							<tr class="info" style="text_align: center;">
								<th width="20">No.</th>
								<th>Hari Perkiraan Lahir</th>
								<th>Hamil Ke</th>
								<th width="120">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td style="text-align:center">12 Desember 2012</td>
								<td style="text-align:right">12</td>
								<td style="text-align:center;">
									<a href="#detibuhamil" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>
									<a href="#tambahpemeriksaanfisikibu" data-toggle="modal"><i class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Tambah Pemeriksaan Fisik Ibu"></i></a>
									<a href="#riwpfi" data-toggle="modal"><i class="glyphicon glyphicon-th-list" data-toggle="tooltip" data-placement="top" title="Riwayat Pemeriksaan Fisik Ibu"></i></a>
								</td>
							</tr>
						</tbody>
					</table>												
				</div>

				<div class="modal fade" id="tambahpemeriksaanfisikibu" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog" style="width:1100px">
						<div class="modal-content">
							<form class="form-horizontal" role="form"> 
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
														<input type="text" class="form-control" id="keadaan" name="keadaan" placeholder="Keadaan Umum"/>
													</div>
												</div>
							            		<div class="form-group">			
									            	<label class="control-label col-md-4">Pemeriksaan Luar 
													</label>
													<div class="col-md-6">
														<textarea class="form-control" id="pemeriksaanluar" name="pemeriksaanluar"></textarea>
													</div>
												</div>
												<div class="form-group">			
									            	<label class="control-label col-md-4">Pemeriksaan Dalam 
													</label>
													<div class="col-md-6">
														<textarea class="form-control" id="periksadalam" name="periksadalam"></textarea>
													</div>
												</div>
												<div class="form-group">			
									            	<label class="control-label col-md-4">Dokter Pemeriksa 
													</label>
													<div class="col-md-6">
														<input type="text" class="typeahead form-control" autocomplete="off" spellcheck="false" id="dokterperiksa" name="dokter" placeholder="Pilih Dokter"/>
													</div>
												</div>
												<div class="form-group">			
									            	<label class="control-label col-md-4">Diagnosa Kerja 
													</label>
													<div class="col-md-2">
														<input type="text" style="cursor:pointer" readonly data-toggle="modal" data-target="#searchDiagnosa" class="form-control" id="kode_utama" placeholder="Kode">
													</div>
													<div class="col-md-4">
														<input type="text" style="cursor:pointer" readonly data-toggle="modal" data-target="#searchDiagnosa" class="form-control" placeholder="Nama Diagnosa">
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
															<input type="text" class="form-control" id="tensi" name="tensi" placeholder="Tensi">
															<span class="input-group-addon" id="basic-addon1" style="width:80px">MmHg</span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-5" style="margin-left:20px">Nadi</label>
														<div class="input-group col-md-5">
															<input type="text" class="form-control" id="nadi" name="nadi" placeholder="Nadi">
															<span class="input-group-addon" id="basic-addon1" style="width:80px">x/mnt</span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-5" style="margin-left:20px">Pernafasan</label>
														<div class="input-group col-md-5">
															<input type="text" class="form-control" id="pernafasan" name="pernafasan" placeholder="Pernafasan">
															<span class="input-group-addon" id="basic-addon1" style="width:80px">x/mnt</span>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-5" style="margin-left:20px">Suhu</label>
														<div class="input-group col-md-5">
															<input type="text" class="form-control" id="suhu" name="suhu" placeholder="Suhu">
															<span class="input-group-addon" id="basic-addon1" style="width:80px">&deg;C</span>
														</div>
													</div>

												</fieldset>
											</td>
										</tr>
									</table>
								</div>
			        			
			        			<div class="modal-footer">
			 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
			 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
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
															<input type="text" class="form-control" readonly id="pertamahaid" name="pertamahaid" placeholder="tahun" >
															<span class="input-group-addon" id="basic-addon" style="width:60px">tahun</span>
														</div>	
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">Lama HAID</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" readonly id="lamahaid" name="lamahaid" placeholder="hari" >
															<span class="input-group-addon" id="basic-addon1" style="width:60px">hari</span>
														</div>	
														
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">Siklus HAID</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" id="siklus" readonly name="siklus" placeholder="hari" >
															<span class="input-group-addon" id="basic-addon1" style="width:60px">hari</span>
														</div>	
														
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">HPHT</label>
														<div class=" input-group col-md-3">
															<input type="text" class="form-control" id="hpht" readonly name="hpht" placeholder="hpht" >
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
															<input type="text" class="form-control" readonly id="perkawinan" name="perkawinan" placeholder="jumlah" >
															<span class="input-group-addon" id="basic-addon1" style="width:60px">kali</span>
														</div>	
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">Umur Pernikahan</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" readonly id="umurpernikahan" name="umurpernikahan" placeholder="tahun" >
															<span class="input-group-addon" id="basic-addon1" style="width:60px">tahun</span>
														</div>	
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">Ikut KB</label>
														<div class="input-group col-md-3">
															<select class="form-control select" disabled name="kb" id="kb">
																<option value="ya" selected>Ya</option>
																<option value="tidak">Tidak</option>							
															</select>
														</div>	
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">Metode</label>
														<div class="input-group col-md-3">
															<input type="text" readonly class="form-control" id="metode" name="metode" placeholder="Metode KB" >
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
																<input type="text" style="cursor:pointer;" readonly class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-5">Lingkar Lengan Atas</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" readonly name="lingkarLengan" placeholder="Ex: 12">
															<span class="input-group-addon" id="basic-addon1">Cm</span>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5">Tinggi Badan</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" readonly name="tinggi" placeholder="Ex: 12">
															<span class="input-group-addon" id="basic-addon1">Cm</span>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5"> Hamil Ke - </label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" readonly name="hamilke" >
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5"> Jumlah Persalinan</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" readonly name="jumlah">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5">Riwayat Alergi</label>
														<div class="input-group col-md-5">
															<input type="text" class="form-control" readonly name="alergi" placeholder="Alergi">
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
															<input type="text" class="form-control" readonly name="gugur">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5"> Jumlah Anak Hidup</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" readonly name="hidup">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5"> Jumlah Lahir Mati</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" readonly name="mati">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5"> Jumlah Anak lahir prematur</label>
														<div class="input-group col-md-3">
															<input type="text" class="form-control" readonly name="kurang">
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-5"> Jarak dengan anak terakhir</label>
														<div class="input-group col-md-4">
															<input type="text" readonly class="form-control" name="jarak">
															<span class="input-group-addon">
																<select class="select" disabled name="jarak" >
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
															<input type="text" readonly class="form-control" name="imuneter">
															<span class="input-group-addon">
																<select class="select" disabled name="jarak" >
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
														<input type="text" class="form-control" placeholder="Penolong" readonly>
													</div>
												</div>
												
												<div class="form-group">
													<label class="control-label col-md-2" style="width:235px;">Riwayat Obstetrik</label>
													<div class="input-group col-md-5">
														<textarea class="form-control" name="riwobstetrik" placeholder="Detail Riwayat" readonly></textarea>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-2" style="width:235px;">Penyakit & Operasi</label>
													<div class="input-group col-md-5">
														<textarea class="form-control" name="penyakitoperasi" readonly placeholder="Detail Penyakit & Operasi"></textarea>
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
					<form class="form-horizontal" role="form" method="POST">
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
												<tr>
													<td>1</td>
													<td>12 Mei 2012</td>
													<td>dr. Putu</td>
													<td>MFSA - MASAMSAS</td>
													<td style="text-align:center"><a href="#pemfisikibu" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="detail"></i></a>
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
															<input type="text" readonly class="form-control" id="keadaan" name="keadaan" placeholder="Keadaan Umum"/>
														</div>
													</div>
								            		<div class="form-group">			
										            	<label class="control-label col-md-4">Pemeriksaan Luar 
														</label>
														<div class="col-md-6">
															<textarea class="form-control" readonly id="pemeriksaanluar" name="pemeriksaanluar"></textarea>
														</div>
													</div>
													<div class="form-group">			
										            	<label class="control-label col-md-4">Pemeriksaan Dalam 
														</label>
														<div class="col-md-6">
															<textarea class="form-control" readonly id="periksadalam" name="periksadalam"></textarea>
														</div>
													</div>
													<div class="form-group">			
										            	<label class="control-label col-md-4">Dokter Pemeriksa 
														</label>
														<div class="col-md-6">
															<input type="text" readonly class="form-control" readonly id="dokterperiksa" name="dokter" placeholder="Pilih Dokter"/>
														</div>
													</div>
													<div class="form-group">			
										            	<label class="control-label col-md-4">Diagnosa Kerja 
														</label>
														<div class="col-md-2">
															<input type="text" class="form-control" id="kode_utama" placeholder="Kode" readonly>
														</div>
														<div class="col-md-4">
															<input type="text"class="form-control" placeholder="Nama Diagnosa" readonly>
														</div>
													</div>
													<div class="form-group">			
										            	<label class="control-label col-md-4">Rencana Terapi 
														</label>
														<div class="col-md-6">
															<input type="text" class="form-control" readonly id="rencanaterapi" name="rencanterapi" placeholder="Rencana Terapi"/>
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
																<input type="text" class="form-control" readonly id="tensi" name="tensi" placeholder="Tensi">
																<span class="input-group-addon" id="basic-addon1" style="width:80px">MmHg</span>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-5" style="margin-left:20px">Nadi</label>
															<div class="input-group col-md-5">
																<input type="text" class="form-control" readonly id="nadi" name="nadi" placeholder="Nadi">
																<span class="input-group-addon" id="basic-addon1" style="width:80px">x/mnt</span>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-5" style="margin-left:20px">Pernafasan</label>
															<div class="input-group col-md-5">
																<input type="text" class="form-control" readonly id="pernafasan" name="pernafasan" placeholder="Pernafasan">
																<span class="input-group-addon" id="basic-addon1" style="width:80px">x/mnt</span>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-5" style="margin-left:20px">Suhu</label>
															<div class="input-group col-md-5">
																<input type="text" class="form-control" readonly id="suhu" name="suhu" placeholder="Suhu">
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
				<div class="informasi" >
		 			<form class="form-horizontal" role="form" method="POST" id="submitOver">
				       	<br>
		 				<div class="form-group">
							<label class="control-label col-md-3">Waktu Tindakan</label>
							<div class="col-md-2" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" data-date-autoclose="true" class="form-control" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
								</div>
							</div>
	        			</div>	

	        			<div class="form-group">
							<label class="control-label col-md-3">Dokter Visit</label>
							<div class="col-md-3">
								<input type="text" class="form-control" style="cursor:pointer;" readonly id="dokteroverperawatan" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter">
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
								<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_utamaoverperawatan" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3" >Diagnosa Sekunder</label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_sek1overperawatan" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label col-md-2">1</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_sek2overperawatan" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label col-md-2">2</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_sek3overperawatan" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<label class="control-label col-md-2">3</label>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3"></label>
							<div class="col-md-1">
								<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_sek4overperawatan" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
							</div>
							<div class="col-md-2">
								<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly>
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
									<input type="text" class="form-control" id="tekanandarahoverperawatan" name="takanandarahoverperawatan" placeholder="Tekanan Darah" readonly>
								</div>
								<label class="control-label col-md-2">mmHg</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Temperatur</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="temperaturoverperawatan" name="temperaturoverperawatan" placeholder="Temperatur" readonly>
								</div>
								<label class="control-label col-md-2">&deg;C</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Nadi</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="nadioverperawatan" name="nadioverperawatan" placeholder="Nadi" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Pernapasan</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="pernapasanoverperawatan" name="pernapasanoverperawatan" placeholder="Pernapasan" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3" style="width:310px;">Berat Badan</label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="beratoverperawatan" name="beratoverperawatan" placeholder="Berat Badan" readonly>
								</div>
								<label class="control-label col-md-2">Kg</label>
							</div>
						</fieldset>

						<div class="form-group">
							<label class="control-label col-md-3"> </label>
							<div class="col-md-5">
								<button type="reset" id="bcancel" class="btn btn-danger">Reset</button>
								<input type="hidden" id="v_id" value="">&nbsp;&nbsp;
						    	<button type="submit" id="simpanOver" class="btn btn-success">Simpan</button>
						    </div>
			        	</div>

			   		</form>
			   	</div>

		   		<div class="tabelinformasi">
		   			<br>
	        		<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:20px;margin-left:20px;">
					
		        	<div class="portlet-body" style="margin: 10px 25px 0px 20px">
						<table id="tableOverview" class="table table-striped table-bordered table-hover table-responsive">
							<thead>
								<tr class="info" style="text_align: center;">
									<th width="20">No.</th>
									<th>Waktu</th>
									<th>Dokter Visit</th>
									<th>Diagnosa Utama</th>
									<th>Diagnosa Sekunder</th>
									<th>Unit</th>
									<th style="width:20px;">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>12 Desember 2012 12:12</td>
									<td>Jems</td>
									<td>Jems</td>
									<td>Bebas</td>
									<td>Bebas</td>
									<td style="text-align:center;"><a href="#riwperawatan" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
								</tr>
							</tbody>
						</table>												
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
												<div class="col-md-5">
													<input type="text" class="form-control" id="petugas" name="petugas" placeholder="Petugas" readonly></textarea>
												</div>
											</div>

						        			<div class="form-group">
												<label class="control-label col-md-4">Anamnesa</label>
												<div class="col-md-6">
													<textarea class="form-control" id="anamnesa" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4" >Diagnosa Utama</label>
												<div class="col-md-2">
													<input type="text" class="form-control" id="kode_utama" placeholder="Kode" readonly>
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control" placeholder="Keterangan" readonly>
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4" >Diagnosa Sekunder</label>
												<div class="col-md-2">
													<input type="text" class="form-control" id="kode_sek1" placeholder="Kode" readonly>
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control" placeholder="Keterangan" readonly>
												</div>
												<label class="control-label col-md-1" >1</label>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4" ></label>
												<div class="col-md-2">
													<input type="text" class="form-control" id="kode_se2" placeholder="Kode" readonly>
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control" placeholder="Keterangan" readonly>
												</div>
												<label class="control-label col-md-1" >2</label>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4" ></label>
												<div class="col-md-2">
													<input type="text" class="form-control" id="kode_sek3" placeholder="Kode" readonly>
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control" placeholder="Keterangan" readonly>
												</div>
												<label class="control-label col-md-1" >3</label>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4" ></label>
												<div class="col-md-2">
													<input type="text" class="form-control" id="kode_sek4" placeholder="Kode" readonly>
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control" placeholder="Keterangan" readonly>
												</div>
												<label class="control-label col-md-1" >4</label>
											</div>


											<div class="form-group">
												<label class="control-label col-md-4">Perkembangan Penyakit</label>
												<div class="col-md-6">
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
				<div class="informasi">
					<form class="form-horizontal" role="form" method="POST" id="submitOver">
				       	<br>
		 				<div class="form-group">
							<label class="control-label col-md-3">Waktu Tindakan</label>
							<div class="col-md-2" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y H:i");?>">
								</div>
							</div>
	        			</div>
	        			<div class="form-group">
							<label class="control-label col-md-3">Perawat 1 </label>
							<div class="col-md-3">
								<input type="text" class="form-control" style="cursor:pointer;" readonly id="perawat1" placeholder="Search Perawat" data-toggle="modal" data-target="#searchPerawat1">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Perawat 2 </label>
							<div class="col-md-3">
								<input type="text" class="form-control" style="cursor:pointer;" readonly id="perawat2" placeholder="Search Perawat" data-toggle="modal" data-target="#searchPerawat2">
							</div>
						</div>

	        			<div class="form-group">
							<label class="control-label col-md-3">Perjalanan Penyakit</label>
							<div class="col-md-4">
								<textarea class="form-control" id="perjalanan" name="perjalanan" placeholder="Keterangan"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Pemberian Obat</label>
							<div class="col-md-4">
								<textarea class="form-control" id="pemberianobat" name="pemberianobat" placeholder="Keterangan"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Diet</label>
							<div class="col-md-4">
								<textarea class="form-control" id="diet" name="diet" placeholder="Keterangan"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3"> </label>
							<div class="col-md-5">
								<button type="reset" id="bcancel" class="btn btn-danger">Reset</button>
								<input type="hidden" id="v_id" value="">&nbsp;&nbsp;
						    	<button type="submit" id="simpanOver" class="btn btn-success">Simpan</button>
						    </div>
						</div>
	        		</form>	
	        		<br>
	        	</div>
	        	<hr class="garis" style="border: solid 1px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:20px;margin-left:20px;">
				
	        	<div class="tabelinformasi">
	        		<div class="portlet box red">
						<div class="portlet-body" style="margin: 10px 20px 0px 20px">
							<table class="table table-striped table-bordered table-hover table-responsive">
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
									<tr>	
										<td colspan="7"><center> Data Kosong </center></td>
									</tr>
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
											<input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" >
										</div>
				        			</div>

									<div class="form-group">
										<label class="control-label col-md-4">Paramedis</label>
										<div class="col-md-5">	
											<input type="text" class="typeahead form-control" autocomplete="off" spellcheck="false">											
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
			<div class="tabelinformasi" id="tabelhis">
				<form class="form-horizontal" role="form" method="POST" style="margin-left:20px;margin-right:20px;">
					<div class="form-group">
						<div class="col-md-6"><a data-toggle="modal" href="#tambahTindakanok" style="color:white">
							<button type="submit" class="btn btn-success" id="tndknOvervieww" style="margin-left:15px;"> Tambah</button></a>
						</div>        
					</div>
				    <div class="form-group">
				        <div class="portlet-body" style="margin: 0px 20px 0px 15px">
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
										<th>Total</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<tr><td colspan='11' style='text-align:center'>Data Kosong</td></tr>
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
								<input type="text" style="cursor:pointer;" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Deskripsi Resep</label>
						<div class="col-md-5">
							<textarea class="form-control" name="deskripsiResep" placeholder="Deskripsi Resep" id="deskripsiResep"></textarea>							
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
					<table class="table table-striped table-bordered table-hover tableDT" id="tabelresepbersalin">
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
							<tr>
								<td width="20">No.</td>
								<td>Dokter</td>
								<td style="text-align:center">12 Mei 1201</td>
								<td>Deskripsi Resep</td>
								<td>Status Bayar</td>
								<td>Status Ambil</td>
								<td style="text-align:center">
									<a href="#hapusResep">
									<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
								</td>
							</tr>
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

	        <div class="informasi" id="infoKamar">
	            <form class="form-horizontal">
	          		<div class="form-group">
						<label class="control-label col-md-3">Waktu Pelaksanaan</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y H:i");?>">
							</div>
						</div>
					</div>	
					
					<div class="form-group">
						<label class="control-label col-md-3">Dokter</label>
						<div class="col-md-3">
							<input type="text" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3" >Jenis Operasi</label>
						<div class="col-md-3">			
							<input type="text" class="form-control" placeholder="Jenis Operasi" id="jnsOperasi" data-toggle="modal" data-target="#jenisoperasi">
				 		</div>
					</div>
							
					<div class="form-group">
						<label class="control-label col-md-3" >Alasan</label>
						<div class="col-md-5">			
							<textarea class="form-control" rows="5" id="alasanoprasi" placeholder="Alasan"></textarea>
				 		</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" ></label>
						<div class="col-md-7">			
							<a href="#tambahKamar" style="color:white">
							<button type="submit" class="btn btn-success">Tambah</button></a>		
					 	</div>			
					 					
					</div>	

					<div class="modal fade" id="jenisoperasi" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Pilih Jenis Operasi</h3>
			        			</div>
			        			<div class="modal-body">
									<div class="form-group">	
										<div class="col-md-5" style="margin-left:15px">
											<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Jenis Operasi"/>
										</div>
										<div class="col-md-2">
											<button type="button" class="btn btn-info">Cari</button>
										</div>	
									</div>	
									<div style="margin-left:5px; margin-right:5px;"><hr></div>
									<div class="portlet-body" style="margin: 0px 10px 0px 10px">
										<table class="table table-striped table-bordered table-hover" id="tabeljenisoperasi">
											<thead>
												<tr class="info">
													<th>Jenis Operasi</th>
													<th width="10%">Pilih</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Cecar</td>
													<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
												</tr>
												<tr>
													<td>Katarak</td>
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
				<br>
			</div>	<!-- End Dropdown -->

			<div class="dropdown" id="btnTableKamarOperasi">
	            <div id="titleInformasi">Riwayat Operasi</div>
	            <div class="btnBawah" id="btnTableKamarOperasi"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
	           	<br>

	        <div class="tabelinformasi" id="tabelKamar">
	           	<div class="portlet-body" style="margin: 0px 40px 0px 30px">
					<table class="table table-striped table-bordered table-hover table-responsive tableDT" >
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
							<tr>
								<td>11</td>
								<td style="text-align:center">12 Desember 2012 12:12</td>
								<td>Labolatorium</td>										
								<td>Belum</td>
								<td>Bebas </td>
								<td style="text-align:center">
									<a href="#hapusResep">
									<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
								</td>										
							</tr>
							
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
		      	<form class="form-horizontal" role="form">
		          		<div class="form-group">
							<label class="control-label col-md-3">Tanggal Konsultasi</label>
							<div class="col-md-2" >
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
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
				        				<h3 class="modal-title" id="myModalLabel">Pilih Konsultan</h3>
				        			</div>
				        			<div class="modal-body">
					        			<div class="form-group">
											<div class="form-group">	
												<div class="col-md-5" style="margin-left:35px;">
													<input type="text" class="form-control" name="katakunci" id="inputKonsultan" placeholder="Nama Konsultan"/>
												</div>
												<div class="col-md-2">
													<button type="button" class="btn btn-info">Cari</button>
												</div>	
											</div>		
											<div style="margin-left:10px; margin-right:10px;"><hr></div>
											<div class="portlet-body" style="margin: 0px 20px 0px 20px">
												<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelkonsultan">
													<thead>
														<tr class="info">
															<th>Nama Konsultan</th>
															<th width="10%">Pilih</th>
														</tr>
													</thead>
													<tbody id="t_body_konsultan">
														<tr >
															<td>Jems</td>
															<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
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
	            <div id="titleInformasi">Riwayat Konsultasi Gizi</div>
	           	<div class="btnBawah" id="btnTabelKonsultasi"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>

	        <div class="tabelinformasi" id="tabelKonsultasi" >
	           	<div class="portlet-body" style="margin: 0px 40px 0px 35px">
					<table class="table table-striped table-bordered table-hover tableDT" >
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
							<tr>
								<td>1</td>
								<td style="text-align:center;">11/12/2015</td>
								<td>Dokter Gizi</td>
								<td>Banyak Sekali</td>										
								<td>Telur</td>
								<td>Diet terus</td>
								<td>Gorengan</td>
								<td style="text-align:center">
									<a href="#hapus"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
									<a href="#print"><i class="glyphicon glyphicon-print"  data-toggle="tooltip" data-placement="top" title="Print"></i></a>
								</td>										
							</tr>
							
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
							<th>Waktu</th>
							<th>Unit</th>
							<th>Anamnesa</th>
							<th>Dokter Pemeriksa</th>
							<th style="width:20px;">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td style="text-align:center">12 Januari 2012 </td>
							<td style="text-align:center">12:12</td>
							<td>Poli Umum</td>
							<td>Ini isinya panjang</td>
							<td>Jems Naban</td>
							<td style="text-align:center;"><a href="#riwkklin" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
						</tr>
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
							<td style="text-align:center;"><a href="#riwperawat" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
						</tr>
					</tbody>
				</table>												
			</div>
			<div class="modal fade" id="riwperawat" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal" role="form" method="POST" id="riwkondok">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Perawatan</h3>
				   			</div>
							<div class="modal-body" style="padding-left:50px;">

				   				<div class="form-group">
									<label class="control-label col-md-4">Waktu Tindakan</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" readonly placeholder="<?php echo date("d/m/Y H:i");?>"/>
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
									<div class="col-md-6">
										<input type="text" class="form-control" id="petugas" name="petugas" placeholder="Petugas" readonly></textarea>
									</div>
								</div>

			        			<div class="form-group">
									<label class="control-label col-md-4">Anamnesa</label>
									<div class="col-md-6">
										<textarea class="form-control" id="anamnesa" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4" >Diagnosa Utama</label>
									<div class="col-md-2">
										<input type="text" class="form-control" id="kode_utama" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="Keterangan" readonly>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4" >Diagnosa Sekunder</label>
									<div class="col-md-2">
										<input type="text" class="form-control" id="kode_sek1" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="Keterangan" readonly>
									</div>
									<label class="label-cntrol">1</label>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4" ></label>
									<div class="col-md-2">
										<input type="text" class="form-control" id="kode_se2" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="Keterangan" readonly>
									</div>
									<label class="label-cntrol">2</label>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4" ></label>
									<div class="col-md-2">
										<input type="text" class="form-control" id="kode_sek3" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="Keterangan" readonly>
									</div>
									<label class="label-cntrol">3</label>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4" ></label>
									<div class="col-md-2">
										<input type="text" class="form-control" id="kode_sek4" placeholder="Kode" readonly>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" placeholder="Keterangan" readonly>
									</div>
									<label class="label-cntrol">4</label>
								</div>


								<div class="form-group">
									<label class="control-label col-md-4">Perbangan Penyakit</label>
									<div class="col-md-6">
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

        <div class="tab-pane" id="makan">
        	<div class="dropdown">
	            <div id="titleInformasi">Permintaan Makan</div>
		        <div class="btnBawah" id="btnBawahOrderMakan"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
		   	</div>
		    <br>

            <div class="informasi" id="infoMakan">
            	<form class="form-horizontal" role="form">
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
						<label class="control-label col-md-3" >Tipe Diet Penyakit</label>
						<div class="col-md-2">
							<select class="form-control select" name="tipediet" >
								<option value="" selected>Pilih</option>
								<option value="">blm tau </option>
								<option value="">isinya apa ?</option>							
							</select>			
						</div>							
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Paket Makanan</label>
						<div class="col-md-2">			
							<select class="form-control select" name="paketmakan">
								<option value="" selected>Pilih</option>
								<option value="">ini isinya </option>
								<option value="">difilter berdasarkan tipe diet penyakit dan kelas kamar</option>							
							</select>	
						</div>							
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Keterangan</label>
						<div class="col-md-4">			
							<textarea class="form-control" id="keterangan"></textarea>
					 	</div>
													
					</div>

				<!-- 	<div class="modal fade" id="searchPaketMakanan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Pilih Paket Makanan</h3>
			        			</div>
			        			<div class="modal-body">
				        			<div class="form-group">
										<div class="form-group">	
											<div class="col-md-5" style="margin-left:15px;">
												<input type="text" class="form-control" name="katakuncipaket" id="katakuncipaket" placeholder="Nama paket"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>	
										</div>		
										<div style="margin-left:10px; margin-right:10px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 10px 0px 10px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa">
												<thead>
													<tr class="info">
														<th>Nama Paket</th>
														<th width="10%">Pilih</th>
													</tr>
												</thead>
												<tbody>
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
					</div> -->

					<div class="form-group">
						<label class="control-label col-md-3" > 
						</label>
						<div class="col-md-7">			
						<br>
						<button type="reset" class="btn btn-warning">Reset </button></a>		
					 	<button type="submit" id="tombolMakan" class="btn btn-success">Tambah </button></a>		
					 	</div>							
					</div>	
				</form>
			</div>	

			<div class="dropdown">
	            <div id="titleInformasi">Riwayat Permintaan Makan </div>
	          	<div class="btnBawah" id="btnDaftarmakan"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>

            <div class="tabelinformasi" id="tabelDaftarMakan" >
              	<div class="portlet-body" style="margin: 0px 20px 0px 20px">
					<table class="table table-striped table-bordered table-hover tableDT" >
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
							<tr>
								<td>1</td>
								<td style="text-align:center">11 Desember 2015</td>
								<td>Apa aja</td>
								<td>Telur lah</td>
								<td>3x sehari</td>
								<td>Belum Dikirim</td>
								<td style="text-align:center">
									<a href="#editpaketmakan" data-toggle="modal"><i class="glyphicon glyphicon-edit"  data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
									<a href="#"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
									
								</td>										
							</tr>
																	
							</tr>
						</tbody>
					</table>
				</div>	<br>
				<div class="modal fade" id="editpaketmakan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content" >
							<div class="modal-header">
		        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        				<h3 class="modal-title" id="myModalLabel">Edit Permintaan Makan</h3>
		        			</div>
		        			<div class="modal-body">
		        			<form class="form-horizontal informasi" role="form">
								<div class="form-group">
									<label class="control-label col-md-4">Tanggal</label>
									<div class="col-md-5" >
										<div class="input-icon">
											<i class="fa fa-calendar"></i>
											<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4" >Tipe Diet Penyakit</label>
									<div class="col-md-5">
										<select class="form-control select" name="tipediet" >
											<option value="" selected>Pilih</option>
											<option value="">blm tau </option>
											<option value="">isinya apa ?</option>							
										</select>			
									</div>							
								</div>

								<div class="form-group">
									<label class="control-label col-md-4" >Paket Makanan</label>
									<div class="col-md-5">			
										<select class="form-control select" name="paketmakan">
											<option value="" selected>Pilih</option>
											<option value="">ini isinya </option>
											<option value="">difilter berdasarkan tipe diet penyakit dan kelas kamar</option>							
										</select>	
									</div>							
								</div>

								<div class="form-group">
									<label class="control-label col-md-4" >Keterangan</label>
									<div class="col-md-5">			
										<textarea class="form-control" id="keterangan"></textarea>
								 	</div>
																
								</div>
			        				
							</form>
								
		        			</div>
		        			<div class="modal-footer">
		        				<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
		 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
					      	</div>
						</div>
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
            <div class="informasi" id="infoBersalin">
            	<form class="form-horizontal" role="form">
	            	<div class="form-group">
						<label class="control-label col-md-3" >Jenis Kegiatan
						</label>
						<div class="col-md-2">			
							<select class="form-control select" name="pilJnsKegiatan" id="pilJnsKegiatan">
								<option value="" selected>Pilih</option>
								<option value="Persalinan">Persalinan</option>
								<option value="Non Persalinan">Non Persalinan</option>
							</select>
						</div>					
					</div>	

					<div class="form-group">
						<label class="control-label col-md-3" >Kegiatan
						</label>
						<div class="col-md-2">			
							<select class="form-control select" name="pilKegiatan" id="pilKegiatan">
								<option value="" selected>Pilih</option>
								<option value="Kegiatan A">Kegiatan A</option>
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
							<select class="form-control select" name="rujukan" id="rujukan">
								<option value="" selected>Pilih</option>
								<option value="hidup" selected>Hidup</option>
								<option value="mati" selected>Mati</option>
								
							</select>
						</div>							
					</div>


					<div class="form-group">
						<label class="control-label col-md-3">Tanggal Pelaksanaan</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
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
								<option value="Laboratorium" selected>Laboratorium</option>
								<option value="EKG">EKG</option>
								<option value="USG">USG</option>
							</select>
						</div>							
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3" >Dokter Penolong
						</label>
						<div class="col-md-3">
							<input type="text" style="cursor:pointer;" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokterpeminta" readonly>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3" >Asisten Penolong
						</label>
						<div class="col-md-3">
							<input type="text" style="cursor:pointer;" class="form-control" placeholder="Search Asisten" data-toggle="modal" data-target="#searchAsisten" readonly>
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
											<div class="col-md-5" style="margin-left:15px;">
												<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama dokter"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>	
										</div>		
										<div style="margin-left:10px; margin-right:10px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 20px 0px 10px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa">
												<thead>
													<tr class="info">
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

					<div class="modal fade" id="searchAsisten" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Pilih Asisten</h3>
			        			</div>
			        			<div class="modal-body">
				        			<div class="form-group">
										<div class="form-group">	
											<div class="col-md-5" style="margin-left:15px;">
												<input type="text" class="form-control" name="katakunci" id="key" placeholder="Nama Asisten"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>	
										</div>		
										<div style="margin-left:10px; margin-right:10px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 20px 0px 10px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelAsisten">
												<thead>
													<tr class="info">
														<td>Nama Asisten</td>
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
						<div class="col-md-4">
							<textarea class="form-control" id="ketKegiatan"></textarea>
						</div>							
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3" >
						</label>
						<div class="col-md-7">			
						<br>
						<button type="reset" class="btn btn-danger">Reset </button>&nbsp;	
						<a href="#tambahBersalin">
							<button type="submit" class="btn btn-success">Tambah </button></a>		
					 	</div>							
					</div>	
				</form>
				<br>
            </div>        

            <div class="dropdown" id="btnBawahMintaBarang">
            	<div id="titleInformasi">Riwayat Kegiatan Bersalin</div>
            	<div class="btnBawah" ><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div> 
            <div class="tabelinformasi" id="infoMintaBarang">
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 25px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive">
							<thead>
								<tr class="info" >
									<th style="width:20px"> No.</th>
									<th > Jenis Kegiatan </th>
									<th > Kegiatan </th>
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
								<tr>	
									<td>1</td>
									<td>Bersalin</td>
									<td>Melahirkan</td>
									<td>RS lain</td>
									<td>Sudah</td>
									<td>Jems</td>
									<td>Khrisna</td>
									<td>sesudah</td>
									<td>12 Desember 2012</td>
									<td style="text-align:center" ><a href="#"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a></td>			
								</tr>
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

            <div class="informasi" id="infoResumePulang">
            	<form class="form-horizontal" role="form">
            		<div class="form-group">
						<label class="control-label col-md-3">Waktu Keluar <span class="required">* </span></label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y H:i");?>">
							</div>
						</div>
					</div>	
					
					<div class="form-group">
						<label class="control-label col-md-3">Diagnosa Masuk <span class="required">* </span></label>
						<div class="col-md-1">
							<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_utama" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
						</div>
						<div class="col-md-2">
							<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Dokter Pengirim</label>
						<div class="col-md-3">
							<input type="text" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter" id="dokkirim">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Dokter Penanggung Jawab</label>
						<div class="col-md-3">
							<input type="text" class="form-control" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter" id="dokrawat">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Anamnesa & Pemeriksaan Fisik</label>
						<div class="col-md-4">
							<textarea class="form-control isian" id="anamnesa" name="anamnesa" placeholder="Anamnesa"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Diagnosa Akhir <span class="required">* </span></label>
						<div class="col-md-1">
							<input type="text" style="cursor:pointer;" class="form-control isian" id="kode_utama" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly>
						</div>
						<div class="col-md-2">
							<input type="text" style="cursor:pointer;" class="form-control isian" placeholder="Nama Diagnosa" data-toggle="modal" data-target="#searchDiagnosa" readonly>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Diagnosa Sekunder</label>
						<div class="col-md-1">
							<input type="text" class="form-control" id="kode_sek1" placeholder="Kode" readonly>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control" placeholder=" Diagnosa" readonly>
						</div>
						<label class="control-label">1</label>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3"></label>
						<div class="col-md-1">
							<input type="text" class="form-control" id="kode_sek2" placeholder="Kode" readonly>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control" placeholder=" Diagnosa" readonly>
						</div>
						<label class="control-label">2</label>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3"></label>
						<div class="col-md-1">
							<input type="text" class="form-control" id="kode_sek3" placeholder="Kode" readonly>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control" placeholder=" Diagnosa" readonly>
						</div>
						<label class="control-label">3</label>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3"></label>
						<div class="col-md-1">
							<input type="text" class="form-control" id="kode_sek4" placeholder="Kode" readonly>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control" placeholder=" Diagnosa" readonly>
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
								<option value="Pasien Dipindahkan">Pasien Pindah Poli Lain</option>
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
						<label class="control-label col-md-3" >Isian Rumah Sakit Rujukan<span class="required">* </span>
						</label>
						<div class="col-md-4">			
							<input type="text" class="form-control" name="isianRSRujuk" placeholder="Rumah Sakit Rujukan">
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
								<input type="text" style="cursor:pointer;" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y H:i");?>">
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
						<label class="control-label col-md-3">Golongan Sebeb Penyakit Luar</label>
						<div class="col-md-4">
							<input type="text" style="cursor:pointer;" class="form-control isian" id="golo" placeholder="Golongan Sebab Penyakit" data-toggle="modal" data-target="#searchGolongan" readonly>
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
									<div class="form-group">	
										<div class="col-md-5">
											<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Kata kunci"/>
										</div>
										<div class="col-md-2">
											<button type="button" class="btn btn-info">Cari</button>
										</div>	
									</div>	
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
											<tbody>
												<tr>
													<td>V 01 - V 8</td>
													<td>Kecelakaan angkutan darat</td>
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

					<div class="form-group">
						<div class="form-inline">
							<label class="control-label col-md-3">Jenis Kasus <span class="required">* </span></label>
							<div class="col-md-4">
								<div class="radio-list">
									<label>
										<input type="radio"  name="jk" id="klama" value="Kasus Lama"/><span style="margin-left:15px">Kasus Lama </span> 
									</label>
									<label style="margin-left:40px;">
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
							<a href="#cancelResume"><button type="submit" class="btn btn-danger">
								Cancel </button></a>
							&nbsp;&nbsp;
					 		<a href="#resetResume"><button type="submit" class="btn btn-warning">
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
									<tr class="info">
										<th width="30%;">Kode Diagnosa</th>
										<th>Keterangan</th>
										<th width="10%">Pilih</th>
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
									<tr class="info">
										<th>Nama Dokter</th>
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

	</div>		
</div>			