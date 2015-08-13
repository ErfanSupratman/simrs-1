
<div class="title">
	ADMISI RAWAT INAP
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>pasien/rawatinap/">Admisi Rawat Inap</a>
	</li>
</div>

<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
    	<li class="active"><a href="#lama" data-toggle="tab">Pasien Bersalin & NICU</a></li>
    	<li><a href="#rujukan" data-toggle="tab">Pasien Rujukan</a></li>
    	<li><a href="#kunjungan" data-toggle="tab">Daftar Kunjungan</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">
		<div class="tab-pane active" id="lama">
			<form method="POST" id="search_submit">
	       		<div class="search">
					<label class="control-label col-md-3">
						<i class="fa fa-search">&nbsp;&nbsp;&nbsp;</i>Nama Pasien / Rekam Medik <span class="required" style="color : red">* </span>
					</label>
					<div class="col-md-4">		
						<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
					</div>
					<button type="submit" class="btn btn-danger">Cari</button>&nbsp;&nbsp;&nbsp;
					<a href="<?php echo base_url() ?>pasien/pendaftaran/registrasi" class="btn btn-warning"> Daftar Pasien Baru</a>
				</div>	
			</form>
			<br><hr class="garis"><br>
			<label class=" col-md-1" style="margin-right:-60px; padding-top:7px;">Filter :</label>
			<div class="col-md-3" style="margin-right:-20px; margin-top:2px">
				<div class="input-daterange input-group" id="datepicker">
				    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
				    <span class="input-group-addon">to</span>
				    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
				</div>
			</div>
			<br><br>
			<div class="portlet box red">
				
				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					<div class="teble-responsive">
						<table class="table table-striped table-bordered table-hover table-responsive">
							<thead>
								<tr class="info">
									<th>No.</th>
									<th>No Rekam Medis</th>
									<th>Nama Lengkap</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Alamat Tinggal</th>
									<th>Identitas</th>
									<th>Daftarkan</th>
								</tr>
							</thead>
							<tbody id="t_body">
								<tr>
									<td colspan='8'><center>Cari Data Pasien</center></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>     
		</div>

		<div class="tab-pane" id="rujukan"> <!-- rujukan is here -->
       		<form method="POST" id="search_submit">
	       		<div class="search">
					<label class="control-label col-md-3">
						<i class="fa fa-search">&nbsp;&nbsp;&nbsp;</i>Nama Pasien / Rekam Medik <span class="required" style="color : red">* </span>
					</label>
					<div class="col-md-4">		
						<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
					</div>
					<button type="submit" class="btn btn-danger">Cari</button>&nbsp;&nbsp;&nbsp;
				</div>	
			</form>
			<br><hr class="garis"><br>

			<!-- filter -->
			<label class=" col-md-1" style="margin-right:-60px; padding-top:7px;">Filter :</label>
			<div class="col-md-3" style="margin-right:-20px; margin-top:2px">
				<div class="input-daterange input-group" id="datepicker">
				    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
				    <span class="input-group-addon">to</span>
				    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
				</div>
			</div>
				
			<!-- end filter -->
			<br><br>

			<div class="portlet box red">
				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive">
							<thead>
								<tr class="info">
									<th>No.</th>
									<th>No Rekam Medis</th>
									<th>Nama Pasien</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Rujukan dari Unit</th>
									<th>Daftarkan</th>
								</tr>
							</thead>
							<tbody id="tbody_rujuk">
								<?php
									$i = 0;
									foreach ($pasien_rujuk as $key) {
										if(!empty($pasien_rujuk)){
											$i++;
											$tgl = strtotime($key['tanggal_lahir']);
											$hasil = date('d F Y', $tgl); 
											echo '
												<tr>
													<td>'.$i.'</td>
													<td>'.$key['rm_id'].'</td>
													<td>'.$key['nama'].'</td>
													<td>'.$key['jenis_kelamin'].'</td>										
													<td>'.$hasil.'</td>
													<td>'.$key['nama_dept'].'</td>
													<td style="text-align:center">
														<a href="#daftarkanrujukan" data-toggle="modal" data-original-title="Tambah Pemeriksaan" onClick="rujuk(&quot;'.$key['nama'].'&quot;,&quot;'.$key['rm_id'].'&quot;,&quot;'.$key['visit_id'].'&quot;)">
														<i class="fa fa-plus"data-toggle="tooltip" data-placement="top" title="Tambah Pemeriksaan"></i></a>
													</td>										
												</tr>
											';
										}
									}
								?>
							</tbody>
						</table>
				</div>
			</div>
        </div>

        <div class="tab-pane" id="kunjungan">
        	<form method="POST" id="search_submit">
	       		<div class="search">
					<label class="control-label col-md-3">
						<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
					</label>
					<div class="col-md-4">		
						<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
					</div>
					<button type="submit" class="btn btn-danger">Cari</button>
				</div>	
			</form>
			<br><hr class="garis"><br>
			<label class=" col-md-1" style="margin-right:-60px; padding-top:7px;">Filter :</label>
			<div class="col-md-3" style="margin-right:-20px; margin-top:2px">
				<div class="input-daterange input-group" id="datepicker">
				    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="start" data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
				    <span class="input-group-addon">to</span>
				    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" />
				</div>
			</div>
			<div class="col-md-2">
				<select name="filter" class="form-control select" id="filter" style="margin-left:15px;">
					<option value="Dokter">Dokter</option>
					<option value="Unit">Unit/Departement</option>
				</select>
			</div>
			<div class="col-md-2">	
				<input type="text" class="form-control" id="textFilter" name="filter" placeholder="nama dokter" style="margin-left:-10px;"/>
			</div>	
			<button type="submit" class="btn btn-warning" style="margin-left:-20px;">Filter</button>

			
			<br><br>

			<div class="portlet box red">
				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive">
							<thead>
								<tr class="info" >
									<th>Nomor Rekam Medis</th>
									<th>Nama</th>
									<th>Kamar Inap</th>
									<th>Department/Unit</th>
									<th>Dokter Periksa</th>
									<th>Tanggal Lahir</th>
									<th>Alamat</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Daftar</th>
									<th>Detail</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>RI021</td>
									<td>Krisna</td>
									<td>21B</td>										
									<td>Kandungan</td>
									<td>Putu</td>
									<td>01 Mei 1992</td>
									<td>Di rumahnya</td>
									<td>Laki-laki</td>
									<td>12-04-2015</td>
									<td style="text-align:center">
										<a href="#viewri" class="viewico" data-toggle="modal" data-original-title="Edit Data Pasien"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="View"></i></a>
									</td>										
								</tr>
								<tr>
									<td>RI022</td>
									<td>Jems</td>
									<td>21B</td>										
									<td>Kandungan</td>
									<td>Putu</td>
									<td>01-10-1992</td>
									<td>Di rumahnya</td>
									<td>Laki-laki</td>
									<td>12-04-2015</td>
									<td style="text-align:center">
										<a href="#viewri" class="viewico" data-toggle="modal" data-original-title="Edit Data Pasien"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="View"></i></a>
									</td>										
								</tr>
								<tr>
									<td>RI023</td>
									<td>Abadi</td>
									<td>21B</td>										
									<td>Kandungan</td>
									<td>Putu</td>
									<td>01-10-1992</td>
									<td>Di rumahnya</td>
									<td>Laki-laki</td>
									<td>12-04-2015</td>
									<td style="text-align:center">
										<a href="#viewri" class="viewico" data-toggle="modal" data-original-title="Data Pasien"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="View"></i></a>
									</td>										
								</tr>
							</tbody>
						</table>	
						
					</div>
			</div>
        </div>

        <div class="modal fade" id="viewri" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		       	<div class="modal-content">
		        	<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        		<h3 class="modal-title" id="myModalLabel">View Data Pasien Rawat Inap</h3>
		        	</div>	

		        	<div class="modal-body">
		        		<div class="form-group">
							<label class="control-label col-md-3" >Tanggal Daftar </label>
							<div class="col-md-3">	
								<input type="text" class="form-control" name="date" id="inputdate" value="<?php echo date("d/m/Y");?>" readonly />
							</div>				
						</div>	
							
						<div class="form-group">
							<br><br>
							<label class="control-label col-md-3">No. Rekam Medis</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="noRm" value="RJ1002" readonly/>
							</div>
						</div>

						<div class="form-group">
							<br><br>
							<label class="control-label col-md-3">Nama Pasien</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="nama" value="Khrisna" readonly>
							</div>
						</div>

						<div class="form-group">
							<br><br>
							<label class="control-label col-md-3">Kamar Pasien</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="kamar" value="B21" readonly>
							</div>
						</div>
								
						<div class="form-group">
							<br><br>
							<label class="control-label col-md-3">Department/Unit</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="department" value="Kandungan" readonly>
							</div>
						</div>
									
						<div class="form-group"><br><br>
							<label class="control-label col-md-3">Dokter Pemeriksa</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="namaDokter" value="dr. Jems" readonly>												
							</div>
						</div>
									
						<div class="form-group"><br><br>
							<label class="control-label col-md-3">Tgl. Lahir</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="tglLahir" name="tglLahir" value="20-10-1992" readonly>
							</div>
						</div>
									
						<div class="form-group"><br><br>
							<label class="control-label col-md-3">Alamat</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="alamat" name="alamat" value="Rumahnya" readonly>
							</div>
						</div>

						<div class="form-group"><br><br>
							<label class="control-label col-md-3">Jenis Kelamin</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="jk" name="jk" value="Laki-laki" readonly>											
							</div>
						</div>
		    		</div>
		    	
			    	<br><br>
			    	<div class="modal-footer">
			 	   		<button type="button" class="btn btn-warning" data-dismiss="modal">Kembali</button>
				   	</div>
				</div>
		    </div>
		</div>
        
        <div class="modal fade" id="daftarkan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        	<div class="modal-dialog">
	        		<div class="modal-content">
	        			<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Tindakan Rawat Inap</h3>
	        			</div>	
	        			<div class="modal-body">
	        			<form id="submitDaftarkan" method="POST" class="form-horizontal" role="form">
	        				<div class="form-group">
								<label class="control-label col-md-3" >Tanggal Periksa </label>
								<div class="col-md-3">	
									<input date-date-format="dd/mm/yyyy H:i:s" value="<?php echo date("d/m/Y H:i:s");?>" type="text" class="form-control" name="date" id="inputdate" placeholder="Date Now" disabled/>
								</div>				
							</div>	
							
							<div class="form-group">
								<label class="control-label col-md-3">No. Rekam Medis</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="modal_no_rm" name="noRm" placeholder="No Rekam Medis" disabled>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Nama Pasien</label>
								<div class="col-md-7">
									<input type="text" id="modal_nama" class="form-control" name="nama" placeholder="Nama Pasien" disabled>
								</div>
							</div>
														
							<div class="form-group">
								<label class="control-label col-md-3">Cara Bayar</label>
								<div class="col-md-5">
									<select class="form-control select" name="carabayar" id="carabayar">
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
							
							<div class="form-group" id="asuransi">
								<label class="control-label col-md-3">Nama Asuransi</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="namaAsuransi" name="namaAsuransi" placeholder="Nama Asuransi">
								</div>
							</div>
									
							<div class="form-group" id="kontrak">
								<label class="control-label col-md-3">Nama Perusahaan</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="namaPerusahaan" name="namaPerusahaan" placeholder="Nama Perusahaan">
								</div>
							</div>

							<div class="form-group" id="kelas">
								<label class="control-label col-md-3">Kelas Pelayanan </label>
								<div class="col-md-5">
									<select class="form-control select" name="kelasBpjs" id="kelas_pelayanan">
										<option value="" selected>--Pilih Kelas--</option>
										<option value="III">III</option>
										<option value="II">II</option>
										<option value="I"  >I</option>
										<option value="Utama" >Utama</option>
										<option value="VIP">VIP</option>
									</select>												
								</div>
							</div>
							
							<div class="form-group" id="noAsuransi">
								<label class="control-label col-md-3">Nomor Asuransi</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="nomorAsuransi" name="nomorAsuransi" placeholder="Nomor Asuransi">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">Cara Masuk</label>
								<div class="col-md-5">
									<select class="form-control select" name="caramasuk" id="caramasuk">
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
							
							<div class="form-group">
								<label class="control-label col-md-3">Detail Cara Masuk</label>
								<div class="col-md-7">
									<textarea class="form-control" name="detailMasuk" id="detailmasuk" placeholder="Detail cara masuk .."></textarea> 
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Departemen Tujuan</label>
								<div class="col-md-6">
									<select class="form-control select" id="deptTujuan">
										<option value="" selected>--Pilih Departement--</option>
										<?php foreach( $departemen as $dep ) { ?>
											<option value="<?php echo $dep['dept_id']; ?>" >
												<?php echo $dep['nama_dept']; ?>
											</option>
											<?php } ?>
									</select>												
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">Pilih Kamar & Kelas Kamar</label>
								<div class="col-md-4">
									<input type="hidden" id="kamar_id" name="kamar_id">
									<input type="hidden" id="bed_id" name="bed_id">
									<input type="text" class="form-control" id="kamar" placeholder="Search Kamar" data-toggle="modal" data-target="#pilkamar">
								</div>
							</div>				

							<div class="form-group">
							<label class="control-label col-md-3">Adminitrasi</label>
							<div class="col-md-5">
								<select class="form-control select" name="caramasuk" id="adminitrasi">
									<option value="" selected>Pilih Adminitrasi</option>
									<option value="1">Pasien Lama</option><!-- tarif 3000 -->
									<option value="0">Pasien Baru</option><!-- tarif 5000 -->
									<option value="NULL" >Pasien Lanjutan</option>
								</select>												
							</div>
						</div>
	      				</div>
	      				<div class="modal-footer">
	 			       		<button type="submit" class="btn btn-success">Simpan</button>
				      	</div>
				    </form>
	        		</div>
	        	</div>

	        <div class="modal fade" id="pilkamar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-300px">
        	<div class="modal-dialog">
        		<div class="modal-content" style="width:900px">
        			<div class="modal-header">
        				<button type="button" class="close" id="close-kamar" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Pilih Kamar</h3>
        			</div>	
        			<div class="modal-body">

        				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchPengirim">
								<thead>
									<tr class="success">
										<td>Kamar</td>
										<td>Kelas</td>
										<td>Jumlah Bed</td>
										<td>Terpakai</td>
										<td width="10%" style="text-align:center;">Pilih</td>
									</tr>
								</thead>
								<tbody id="tbody_kamar">
									
								</tbody>
							</table>												
						</div>
	        			
      				</div>
      				<br>
      				<div class="modal-footer">
 			       		<button type="button" id="modal-kamar" class="btn btn-warning">Cancel</button>	
 			       	</div>

        		</div>
        	</div>        	
	    </div>    	
	    </div>

	    <div class="modal fade" id="daftarkanrujukan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Daftarkan Rawat Inap</h3>
        			</div>	
        			<div class="modal-body">

	        			<form class="form-horizontal" role="form" id="submit_rujukan">
	        				<div class="form-group">
								<label class="control-label col-md-3" >Tanggal Periksa </label>
								<div class="col-md-4" >
									<div class="input-icon">
										<i class="fa fa-calendar"></i>
										<input type="text" style="cursor:pointer;" id="modalrujuk_tgl" class="form-control calder" readonly data-date-format="dd/mm/yyyy H:i:s" data-provide="datepicker" value="<?php echo date("d/m/Y H:i:s");?>">
									</div>
								</div>				
							</div>	
							
							<div class="form-group">
								<label class="control-label col-md-3">No. Rekam Medis</label>
								<div class="col-md-7">
									<input type="hidden" id="modalrujuk_visit">
									<input type="text" class="form-control" id="modalrujuk_rm" name="noRm" placeholder="No Rekam Medis" disabled>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Nama Pasien</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="modalrujuk_nama" name="nama" placeholder="Nama Pasien" disabled>
								</div>
							</div>
														
							<div class="form-group">
								<label class="control-label col-md-3">Cara Bayar</label>
								<div class="col-md-5">
									<select class="form-control select" name="carabayar" id="carabayarruj">
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
							
							<div class="form-group" id="asuransiruj">
								<label class="control-label col-md-3">Nama Asuransi</label>
								<div class="col-md-7">
									<input type="text " class="form-control modalrujuk_nasur" name="namaAsuransi" placeholder="Nama Asuransi">
								</div>
							</div>
									
							<div class="form-group" id="kontrakruj">
								<label class="control-label col-md-3">Nama Perusahaan</label>
								<div class="col-md-7">
									<input type="text" class="form-control modalrujuk_nperus" name="namaPerusahaan" placeholder="Nama Perusahaan">
								</div>
							</div>

							<div class="form-group" id="kelasruj">
								<label class="control-label col-md-3">Kelas Pelayanan </label>
								<div class="col-md-5">
									<select class="form-control select" name="kelasBpjs" id="kelasBpjs">
										<option value="" selected>Pilih Kelas Pelayanan</option>
										<option value="III">III</option>
										<option value="II">II</option>
										<option value="I"  >I</option>
										<option value="Utama" >Utama</option>
										<option value="VIP">VIP</option>
									</select>												
								</div>
							</div>
							
							<div class="form-group" id="noasuransiruj">
								<label class="control-label col-md-3">Nomor Asuransi</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="modalrujuk_noasur" name="nomorAsuransi" placeholder="Nomor Asuransi">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">Cara Masuk</label>
								<div class="col-md-5">
									<select class="form-control select" name="caramasuk" id="modalrujuk_cara">
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
							
							<div class="form-group">
								<label class="control-label col-md-3">Detail Cara Masuk</label>
								<div class="col-md-7">
									<textarea class="form-control" name="detailMasuk" placeholder="Detail cara masuk .." id="modalrujuk_detail"></textarea> 
								</div>
							</div>
      				</div>
      				<br>
      				<div class="modal-footer">
 			       		<button type="button" data-dismiss="modal" class="btn btn-warning">Cancel</button>	
 			       		<button type="submit" class="btn btn-success" >Simpan</button>
			      	</div>
			      	</form>	
        		</div>
        	</div>        	
	    </div>
    </div>

</div>
