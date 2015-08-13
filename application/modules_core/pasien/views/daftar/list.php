
<div class="title">
	ADMISI RAWAT JALAN
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>pasien/daftarpasien">Admisi Rawat Jalan</a>
	</li>
</div>

<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
    	<li class="active"><a href="#lama" data-toggle="tab">Pasien Rawat Jalan</a></li>
    	<li><a href="#rujukan" data-toggle="tab">Pasien Rujukan</a></li>
    	<li><a href="#kunjungan" data-toggle="tab">Daftar Kunjungan</a></li>    	
	</ul>

		<div id="my-tab-content" class="tab-content">
			<div class="tab-pane active" id="lama">
	    		<form method="POST" id="search_submit">
		       		<div class="search">
						<label class="control-label col-md-3">
							<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Pasien / Rekam Medik <span class="required" style="color : red">* </span>
						</label>
						<div class="col-md-4">		
							<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
						</div>
						<button type="submit" class="btn btn-danger">Cari</button>&nbsp;&nbsp;&nbsp;
						<a href="<?php echo base_url() ?>pasien/pendaftaran/registrasi/rawatjalan" class="btn btn-warning"> Daftar Pasien Baru</a>
					</div>	
				</form>
				<br><br>
				<hr class="garis"><br>
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

		    <div class="tab-pane" id="rujukan">
	       		<form method="POST" id="search_rujuk">
		       		<div class="search">
						<label class="control-label col-md-3">
							<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
						</label>
							<div class="col-md-4">		
								<input type="text" class="form-control" id="text_rujuk" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
							</div>
							<button type="submit" class="btn btn-danger">Cari</button>&nbsp;&nbsp;&nbsp;
					</div>	
				</form>
				<br><hr class="garis"><br>

				<!-- filter -->
					<label class=" col-md-1" style="margin-right:-60px; padding-top:7px;"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by</label>
					<div class="col-md-3" style="margin-left:30px;">
						<div class="input-daterange input-group" id="datepicker">
						    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
						    <span class="input-group-addon">to</span>
						    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" />
						</div>
					</div>
						
				<!-- end filter -->
				<br><br>

				<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover table-responsive">
								<thead>
									<tr class="info">
										<th style="width:20px;">No.</th>
										<th>Nomor Rekam Medis</th>
										<th>Nama Pasien</th>
										<th>Poli Asal</th>
										<th>Poli Tujuan</th>
										<th>Dokter Pengirim</th>
										<th>Tanggal Lahir</th>
										<th>Alamat</th>
										<th>Jenis Kelamin</th>
										<th>Tanggal Daftar</th>
										<th>Action</th>
								</tr>
								</thead>
								<tbody id="tbody_rujuk_rj">
									<!-- <tr>
										<td>1</td>
										<td>RI0112</td>
										<td>Jems</td>
										<td>Poli Gigi</td>
										<td>Putu</td>
										<td>Poli Kandungan</td>
										<td>12 Desember 2012</td>
										<td>Rumahnya</td>
										<td>Laki-Laki</td>										
										<td>12 Desember 1992</td>
										<td style="text-align:center">
											<a href="#view" data-toggle="modal" data-original-title="View">
											<i class="glyphicon glyphicon-edit"data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
											<a href="#" data-toggle="modal" data-original-title="Delete">
											<i class="glyphicon glyphicon-trash"data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
										</td>										
									</tr> -->
									<?php
										$i = 0;
										if(!empty($pasien_rujuk)){
											foreach ($pasien_rujuk as $val) {
												$data = $val;
												$i++;
												$tgl = strtotime($val['tanggal_lahir']);
												$hasil = date('d F Y', $tgl);

												echo"<tr>";
													echo"<td>".$i."</td>";
													echo"<td>".$val['rm_id']."</td>";
													echo"<td>".$val['nama']."</td>";
													echo"<td>".$val['nama_asal']."</td>";
													echo"<td>".$val['nama_rujuk']."</td>";
													echo"<td>".$val['nama_petugas']."</td>";
													echo"<td>".$hasil."</td>";
													echo"<td>".$val['alamat_skr']."</td>";
													echo"<td>".$val['jenis_kelamin']."</td>";									
													echo"<td>".$val['tanggal_visit']."</td>";
													echo'<td style="text-align:center">';
														echo'<a href="#view" data-toggle="modal" data-original-title="View" onClick="visitRujuk(&quot;'.$val['rj_id'].'&quot;)">';
														echo'<i class="glyphicon glyphicon-edit"data-toggle="tooltip" data-placement="top" title="Edit"></i></a>';
														echo'<a href="#" data-toggle="modal" data-original-title="Delete" onClick="batalRujuk(&quot;'.$val['visit_id'].'&quot;)">';
														echo'<i class="glyphicon glyphicon-trash"data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>';
													echo"</td>";
												echo"</tr>";
											}
										}else{
											echo "<tr><td colspan='11' style='text-align:center'>Tidak Terdapat Pasien Rujukan</td></tr>";
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
				<label class=" col-md-1" style="margin-right:-60px; padding-top:7px;"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by</label>
				<div class="col-md-3" style="margin-left:30px;">
					<div class="input-daterange input-group" id="datepicker">
					    <input type="text" style="cursor:pointer;" class="form-control" name="start" data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
					    <span class="input-group-addon">to</span>
					    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" />
					</div>
				</div>

				<div class="col-md-2">
					<select name="filter" class="form-control select" id="filter">
						<option value="Dokter">Dokter</option>
						<option value="Poliklinik">Poliklinik</option>
					</select>
				</div>
				<div class="col-md-2">	
					<input type="text" class="form-control" id="textFilter" name="filter" placeholder="nama dokter" style="margin-left:-10px;"/>
				</div>	
				<button type="submit" class="btn btn-warning">Filter</button>

				<br>

				<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive">
							<thead>
								<tr class="info">
									<th style="width:20px;">No.</th>
									<th>Nomor Rekam Medis</th>
									<th>Nama</th>
									<th>Poliklinik Tujuan</th>
									<th>Dokter Pemeriksa</th>
									<th>Tgl. Lahir</th>
									<th>Alamat</th>
									<th>Jenis Kelamin</th>
									<th>Tgl. Daftar</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody id="tbody_rj_kunjungan">
								<!-- <tr>
									<td>1</td>
									<td>Nomor Rekam Medis</td>
									<td>Nama</td>
									<td>Poliklinik Tujuan</td>
									<td>Dokter Pemeriksa</td>
									<td>Tgl. Lahir</td>
									<td>Alamat</td>
									<td>Jenis Kelamin</td>
									<td>Tgl. Daftar</td>
									<td style="text-align:center">
										<a href="#editrj" class="viewico" data-toggle="modal" data-original-title="Edit Data Pasien"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
									</td> -->
									<?php
										$i = 0;
										if(!empty($pasien_kunjungan)){
											foreach ($pasien_kunjungan as $val) {
												$i++;
												echo"<tr>";
													echo"<td>".$i."</td>";
													echo"<td>".$val['rm_id']."</td>";
													echo"<td>".$val['nama']."</td>";
													echo"<td>".$val['dasal']."</td>";
													echo"<td>".$val['nama_petugas']."</td>";
													echo"<td>".$val['tanggal_lahir']."</td>";
													echo"<td>".$val['alamat_skr']."</td>";
													echo"<td>".$val['jenis_kelamin']."</td>";									
													echo"<td>".$val['tanggal_visit']."</td>";
													echo'<td style="text-align:center">';
														echo'<a href="#editrj" class="viewico" data-toggle="modal" data-original-title="Edit Data Pasien"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>';
													echo"</td>";
												echo"</tr>";
											}
										}else{
											echo "<tr><td colspan='11' style='text-align:center'>Tidak Terdapat Pasien Kunjungan</td></tr>";
										}
									?>
								</tr>
							</tbody>
						</table>	
					</div>
				</div>
	        </div>
    	</div>
</div>
		<!-- modal edit rawat jalan -->
	<div class="modal fade" id="view" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	       	<div class="modal-content">
	        	<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        		<h3 class="modal-title" id="myModalLabel">View Data Pasien coew</h3>
	        	</div>	

	        	<div class="modal-body">
		        	<form class="form-horizontal" role="form" id="submit_tindakrujuk">
		        		<div class="form-group">
							<label class="control-label col-md-3" >Tanggal Daftar </label>
							<div class="col-md-3">	
								<input type="text" class="form-control" name="date" id="date_rujuk" value="<?php echo date("d/m/Y");?>" readonly />
							</div>				
						</div>	
							
						<div class="form-group">
							<label class="control-label col-md-3">No. Rekam Medis</label>
							<div class="col-md-7">
								<input type="hidden" id="visit_rujuk"/>
								<input type="text" class="form-control" id="rm_rujuk"  name="noRm" value="RJ100222" readonly/>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Nama Pasien</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="nama_rujuk" name="nama" value="Khrisna" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Dokter Pengirim</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="dokter_rujuk" name="namaDokter" value="dr. Jems" readonly>												
							</div>
						</div>
								
						<div class="form-group">
							<label class="control-label col-md-3">Poli Asal</label>
							<div class="col-md-7">
								<input type="hidden" id="idasal_rujuk">
								<input type="text" class="form-control" id="asal_rujuk"  name="alas" value="Poli Gigi" readonly>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Poli Tujuan</label>
							<div class="col-md-5">
								<select class="form-control select" name="poli" id="poli_rujuk">
									<option value="" selected>Pilih Poliklinik</option>
									<?php foreach( $poliklinik as $poli ) { ?>
										<option value="<?php echo $poli['dept_id']; ?>" >
											<?php echo $poli['nama_dept']; ?>
										</option>
									<?php } ?>	
								</select>												
							</div>
						</div>
									
						<div class="form-group">
							<label class="control-label col-md-3">Cara Bayar</label>
							<div class="col-md-5">
								<select class="form-control select" name="carabayar" id="carabayar_rujuk">
									<option value="" selected>Pilih Cara Bayar</option>
									<option value="Umum">Umum</option>
									<option value="BPJS" id="op-bpjs">BPJS</option>
									<option value="Jamkesmas" >Jamkesmas</option>
									<option value="Asuransi" id="op-asuransi">Asuransi</option>
									<option value="Kontrak" id="op-kontrak">Kontrak</option>
									<option value="Gratis" >Gratis</option>
									<option value="Lain">Lain-lain</option>
								</select>												
							</div>
						</div>
						
						<div class="form-group" id="asuransi_rujuk">
							<label class="control-label col-md-3">Nama Asuransi</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="namaAsuransi_rujuk" name="namaAsuransi" placeholder="Nama Asuransi">
							</div>
						</div>
								
						<div class="form-group" id="kontrak_rujuk">
							<label class="control-label col-md-3">Nama Perusahaan</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="perusahaan_rujuk" name="namaPerusahaan" placeholder="Nama Perusahaan">
							</div>
						</div>

						<div class="form-group" id="kelasP_rujuk">
							<label class="control-label col-md-3">Kelas Pelayanan </label>
							<div class="col-md-5">
								<select class="form-control select" name="kelas_pelayanan" id="kelas_rujuk">
									<option value="" selected>Pilih Kelas BPJS</option>
									<option value="III">III</option>
									<option value="II">II</option>
									<option value="I"  >I</option>
									<option value="Utama" >Utama</option>
									<option value="VIP">VIP</option>
								</select>												
							</div>
						</div>
						
						<div class="form-group" id="noAsuransi_rujuk">
							<label class="control-label col-md-3">Nomor Asuransi</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="nomorAsuransi" id="nomorAsuransi_rujuk" placeholder="Nomor Asuransi">
							</div>
						</div>

	    		</div>
	    	
		    	<br>
		    	<div class="modal-footer">
		    		<button type="button" data-dismiss="modal" class="btn btn-warning">Cancel</button>	
		 	   		<button type="submit" class="btn btn-success">Simpan</button>
			   	</div>

			   	</form>
			</div>
	    </div>
	</div>

	<div class="modal fade" id="editrj" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	       	<div class="modal-content">
	        	<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        		<h3 class="modal-title" id="myModalLabel">Edit Data Pasien Rawat Jalan</h3>
	        	</div>	

	        	<div class="modal-body">
	        		<div class="form-group">
						<label class="control-label col-md-3" >Tanggal Daftar </label>
						<div class="col-md-3">	
							<input type="text" class="form-control" name="date"  value="<?php echo date("d/m/Y");?>" readonly />
						</div>				
					</div>	
						
					<div class="form-group">
						<br><br>
						<label class="control-label col-md-3">No. Rekam Medis</label>
						<div class="col-md-7">
							<input type="text" class="form-control"  name="rm_rujuk" value="RJ1002" readonly/>
						</div>
					</div>

					<div class="form-group">
						<br><br>
						<label class="control-label col-md-3">Nama Pasien</label>
						<div class="col-md-7">
							<input type="text" class="form-control"  name="nama" value="Khrisna" readonly>
						</div>
					</div>
							
					<div class="form-group"><br><br>
						<label class="control-label col-md-3">Poliklinik</label>
						<div class="col-md-5">
							<select class="form-control select" name="poli" id="poli_kunjung">
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
						<label class="control-label col-md-3">Dokter Pemeriksa</label>
						<div class="col-md-7">
							<input type="text" class="form-control" name="namaDokter" value="dr. Jems">												
						</div>
					</div>
								
					<div class="form-group"><br><br>
						<label class="control-label col-md-3">Tgl. Lahir</label>
						<div class="col-md-7">
							<input type="text" class="form-control" name="tglLahir" value="20-10-1992" readonly>
						</div>
					</div>
								
					<div class="form-group"><br><br>
						<label class="control-label col-md-3">Alamat</label>
						<div class="col-md-7">
							<input type="text" class="form-control" name="alamat" value="Rumahnya" readonly>
						</div>
					</div>

					<div class="form-group"><br><br>
						<label class="control-label col-md-3">Jenis Kelamin</label>
						<div class="col-md-7">
							<input type="text" class="form-control" id="jk_rujuk" name="jk" value="Laki-laki" readonly>											
						</div>
					</div>
	    		</div>
	    	
		    	<br><br>
		    	<div class="modal-footer">
		    		<button type="button" data-dismiss="modal" class="btn btn-warning">Cancel</button>	
		 	   		<button type="submit" class="btn btn-success">Simpan</button>
			   	</div>
			</div>
	    </div>
	</div>

	<div class="modal fade" id="tambahPemeriksaan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
									<option value="" selected>Pilih Kelas BPJS</option>
									<option value="III">III</option>
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
						<div class="form-group"><br>
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
						<!-- <div class="form-group" style="margin-top:10px">
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

<script type="text/javascript" src="daftarpasien/j_list.js"></script>