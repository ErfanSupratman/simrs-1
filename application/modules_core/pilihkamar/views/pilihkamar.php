<div class="title">
	PILIH KAMAR RAWAT INAP
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>pilihkamar/pilih">Pilih Kamar</a>
	</li>
</div>

<div class="backregis">
	<div id="my-tab-content" class="tab-content">
		
		<form method="POST" id="search_submit">
	   		<div class="search">
				<label class="control-label col-md-3">
					<i class="fa fa-search">&nbsp;&nbsp;&nbsp;</i>Nama Pasien / Rekam Medik <span class="required" style="color : red">* </span>
				</label>
				<div class="col-md-4">		
					<input type="text" id="searchPasien" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
				</div>
				<button type="submit" class="btn btn-danger">Cari</button>&nbsp;&nbsp;&nbsp;
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
								<td>No.</td>
								<th>No Rekam Medis</th>
								<th>Nama Lengkap</th>
								<th>Jenis Kelamin</th>
								<th>Tanggal Lahir</th>
								<th>Alamat Tinggal</th>
								<th>Identitas</th>
								<th>Daftarkan</th>
							</tr>
						</thead>
						<tbody id="t_body_pilih">
							<?php
								if(isset($datapasien)){
									if(!empty($datapasien)){
									$i = 0;
									foreach($datapasien as $data){
										$tgl = strtotime($data['tanggal_lahir']);
										$hasil = date('d F Y', $tgl); 
										echo"
											<tr>
											<td>".++$i."</td>
											<td>".$data['rm_id']."</td>
											<td>".$data['nama']."</td>
											<td>".$data['jenis_kelamin']."</td>
											<td>".$hasil."</td>
											<td>".$data['alamat_skr']."</td>
											<td>".$data['jenis_id']."</td>
											<td style='text-align:center'>
												<a href='#pilihkamar' data-toggle='modal' data-original-title='Tambah Pemeriksaan' onclick='visit(".$data['rm_id'].",&quot;".$data['nama']."&quot;,".$data['visit_id'].",&quot;".$data['cara_bayar']."&quot;)'>
												<i class='fa fa-plus' data-toggle='tooltip' data-placement='top' title='Tambah Pemeriksaan'></i></a>
											</td>		
											</tr>
										";
									}
									}else{
										echo"<tr><td colspan='7' style='text-align:center;'>Data Belum Tersedia</td></tr>";
									}
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>     

	    <div class="modal fade" id="pilihkamar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        	<div class="modal-dialog">
	        	<form method="POST" id="submit_pilih_kamar">
	        		<div class="modal-content">
	        			<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Kamar Rawat Inap</h3>
	        			</div>	
	        			<div class="modal-body">
	        				
							<div class="form-group">
							<br><br>
								<label class="control-label col-md-3">No. Rekam Medis</label>
								<div class="col-md-7">
									<input type="hidden" id="m_visit_id" name="m_visit">
									<input type="text" class="form-control" id="modal_no_rm" name="noRm" placeholder="No Rekam Medis" readonly>
								</div>
							</div>

							<div class="form-group">
							<br><br>
								<label class="control-label col-md-3">Nama Pasien</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="modal_nama" name="nama" placeholder="Nama Pasien" readonly>
								</div>
							</div>
														
							<div class="form-group"><br><br>
								<label class="control-label col-md-3">Cara Bayar</label>
								<div class="col-md-5">
									<select class="form-control select" name="carabayar" id="carabayar" readonly>
										<option value="">--Pilih Cara Bayar--</option>
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
									<input type="text" class="form-control" id="namaAsuransi" name="namaAsuransi" placeholder="Nama Asuransi" readonly>
								</div>
							</div>
									
							<div class="form-group" id="kontrak"><br><br>
								<label class="control-label col-md-3">Nama Perusahaan</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="namaPerusahaan" name="namaPerusahaan" placeholder="Nama Perusahaan" readonly>
								</div>
							</div>

							<div class="form-group" id="kelas"><br><br>
								<label class="control-label col-md-3">Kelas Pelayanan </label>
								<div class="col-md-5">
									<select class="form-control select" name="kelasBpjs" id="kelasBpjs" readonly>
										<option value="">--Pilih Kelas--</option>
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
									<input type="text" class="form-control" id="noAsuran" name="nomorAsuransi" placeholder="Nomor Asuransi" readonly>
								</div>
							</div>

							<div class="form-group"><br><br>
								<label class="control-label col-md-3">Departemen Tujuan</label>
								<div class="col-md-6">
									<select class="form-control select" id="deptTujuan">
										<option value="">--Pilih Departement--</option>
										<?php
											foreach ($departemen as $dept) {
												echo "<option value='".$dept['dept_id']."'>";
												echo $dept['nama_dept'];
												echo "</option>";
											}
										?>
									</select>												
								</div>
							</div>
							
							<div class="form-group"><br><br>
								<label class="control-label col-md-3">Pilih Kamar & Kelas Kamar</label>
								<div class="col-md-4">
									<input type="hidden" id="kamar_id" name="kamar_id">
									<input type="hidden" id="bed_id" name="bed_id">
									<input type="text" class="form-control" id="kamar" placeholder="Search Kamar" data-toggle="modal" data-target="#pilkamar">
								</div>
							</div>	

	      				</div>
	      				<br><br>
	      				<div class="modal-footer">
	 			       		<button type="submit" class="btn btn-success">Simpan</button>
				      	</div>

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
	</div>
</div>

<script type="text/javascript">
	$(window).ready(function(){
		$('#modal-kamar').click(function(){
			$('#pilkamar').modal('hide');
		});

		$('#close-kamar').click(function(){
			$('#pilkamar').modal('hide');
		});

		$('#search_submit').submit(function(e){
			var query = $('#searchPasien').val();

			e.preventDefault();

			$.ajax({
				type:'POST',
				url:'<?php echo base_url()?>pilihkamar/pilih/search_pasien/'+query,
				success:function(data){
					console.log(query);
					console.log(data);
					$('#t_body_pilih').empty();
					if(data.length>0){
						for(var i = 0; i<data.length;i++){
							$('#t_body_pilih').append(
								'<tr>'+
								'<td>'+data[i]['rm_id']+'</td>'+
								'<td>'+data[i]['nama']+'</td>'+
								'<td>'+data[i]['jenis_kelamin']+'</td>'+
								'<td>'+data[i]['tanggal_lahir']+'</td>'+
								'<td>'+data[i]['alamat_skr']+'</td>'+
								'<td>'+data[i]['jenis_id']+'</td>'+
								'<td style="text-align:center">'+
									'<a href="#pilihkamar" data-toggle="modal" data-original-title="Tambah Pemeriksaan" onclick="visit('+data[i]['rm_id']+',&quot;'+data[i]['nama']+'&quot;,'+data[i]['visit_id']+',&quot;'+data[i]['cara_bayar']+'&quot;)">'+
									'<i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Pemeriksaan"></i></a>'+
								'</td>'+		
								'</tr>'
							);
						}
					}else{
						$('#t_body_pilih').empty();
						$('#t_body_pilih').append(
							'<tr>'+
							'<td colspan="7" style="text-align:center;">Data tidak ditemukan</td>'+
							'</tr>'
						);
					}
				},
				error:function(data){
					alert('no');
					console.log(data);
				}
			})
		});

		$('#kelas_k').change(function(e){
			e.preventDefault();

			var query = $(this).val();
			$.ajax({
				type:'POST',
				url:'<?php echo base_url()?>pilihkamar/pilih/check_bed/'+query,
				success:function(data){
					if(data.length>0){
						$('#bed_tersedia').show();
					}else{
						$('#bed_nonsedia').show();
					}
				}
			});
		});

		var item = {};
		var number = 1;
		item[number] = {};
		$("#submit_pilih_kamar").submit(function(e){
			item[number]['dept_id'] = $('#deptTujuan').val();
			item[number]['visit_id'] = $('#m_visit_id').val();
			item[number]['kamar_id'] = $('#kamar_id').val();
			item[number]['bed_id'] = $('#bed_id').val();
			
			e.preventDefault();
			
			$.ajax({
				type:"POST",
				data:item,
				url:"<?php echo base_url()?>pilihkamar/pilih/submit_pilih_kamar",
				success:function(data){
					alert('Data berhasilkan ditambahkan');

				}
			});
		});

		$('#kamar').click(function(){
			var dept = $('#deptTujuan').val();
			var dataKamar = '';

			$('#tbody_kamar').empty();
			$.ajax({
				type:"POST",
				url:"<?php echo base_url() ?>pasien/rawatinap/get_kamar/"+dept,
				success:function(data){
					var kamarSkr = '',
						kamarBaru = '';				
					console.log(data);

					for(var i = 0; i<data.length;i++){
						var nama_kamar = data[i]['nama_kamar'];
						var kamar_id = data[i]['kamar_id'];
						var kelas_kamar = data[i]['kelas_kamar'];
						var jumlah = data[i]['jumlah'];
						var terpakai = data[i]['terpakai'];
						var nama_bed = data[i]['nama_bed'];
						var bed_id = data[i]['bed_id'];
						var is_dipakai = data[i]['is_dipakai'];

						kamarSkr = kamar_id;

						if(kamarSkr!=kamarBaru){
							if(i!=0){
								dataKamar+='<tr><td colspan="5"></td></tr>';
							}

							dataKamar+='<tr>'+
									'<td>'+nama_kamar+'</td>'+
									'<td>'+kelas_kamar+'</td>'+
									'<td>'+jumlah+'</td>'+
									'<td>'+terpakai+'</td>'+
									'<td></td>'+
								'</tr>';

							dataKamar+='<tr>'+
									'<td><input type="hidden" value="'+bed_id+'"></td>'+
									'<td></td>'+
									'<td></td>'+
									'<td>'+nama_bed+'</td>';
							if(is_dipakai==0){
								dataKamar+='<td style="text-align:center;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"  style="cursor:pointer;" onClick="pilih_bed('+kamar_id+','+bed_id+',&quot;'+nama_bed+'&quot;)"></i></td>'+
								'</tr>';
							}else{
								dataKamar+='<td></td></tr>';
							}
						}else{
							dataKamar+='<tr>'+
								'<td><input type="hidden" value="'+bed_id+'"></td>'+
								'<td></td>'+
								'<td></td>'+
								'<td>'+nama_bed+'</td>';
							
							if(is_dipakai==0){
								dataKamar+='<td style="text-align:center;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"  style="cursor:pointer;" onClick="pilih_bed('+kamar_id+','+bed_id+',&quot;'+nama_bed+'&quot;)"></i></td>'+
								'</tr>';
							}else{
								dataKamar+='<td></td></tr>';
							}
						}
						kamarBaru = kamarSkr;
					}
					$('#tbody_kamar').append(dataKamar);

				}
			});
		});
	});

	function visit(rm_id,nama,visit_id,carabayar){
		$('#modal_no_rm').val(rm_id);
		$('#m_visit_id').val(visit_id);
		$('#modal_nama').val(nama);
		$('#carabayar').val(carabayar);
		// $('modal_dept_first').val(dept);
		// $('#deptuju').val(dept);

		$('#bed_tersedia').hide();
		$('#bed_nonsedia').hide();

		if(carabayar=="BPJS"){
			$("#asuransi").hide();
			$("#kontrak").hide();
			$("#kelas").show();
			$("#noAsuransi").show();
			$('#namaPerusahaan').hide();
			$.ajax({
				type:'POST',
				url:'<?php echo base_url()?>pilihkamar/pilih/search_pasien/'+rm_id,
				success:function(data){
					console.log(data);
					$('#kelasBpjs').val(data[0]['kelas_pelayanan']);
					$('#noAsuran').val(data[0]['no_asuransi']);
				}
			});
		}else if(carabayar=="Jamkesmas"){
			$("#asuransi").hide();
			$("#kontrak").hide();
			$("#kelas").hide();
			$("#noAsuransi").show();
			$('#namaPerusahaan').hide();
			$.ajax({
				type:'POST',
				url:'<?php echo base_url()?>pilihkamar/pilih/search_pasien/'+rm_id,
				success:function(data){
					console.log(data);
					$('#noAsuran').val(data[0]['no_asuransi']);
				}
			});
		}else if(carabayar=="Asuransi"){
			$("#asuransi").show();
			$("#kontrak").hide();
			$("#kelas").hide();
			$("#noAsuransi").show();
			$('#namaPerusahaan').hide();
			$.ajax({
				type:'POST',
				url:'<?php echo base_url()?>pilihkamar/pilih/search_pasien/'+rm_id,
				success:function(data){
					console.log(data);
					$('#namaAsuransi').val(data[0]['nama_asuransi']);
					$('#noAsuran').val(data[0]['no_asuransi']);
				}
			});
		}else if(carabayar=="Kontrak"){
			$("#asuransi").hide();
			$("#kontrak").show();
			$("#kelas").hide();
			$("#noAsuransi").hide();
			$('#namaPerusahaan').show();
			$.ajax({
				type:'POST',
				url:'<?php echo base_url()?>pilihkamar/pilih/search_pasien/'+rm_id,
				success:function(data){
					console.log(data);
					$('#namaPerusahaan').val(data[0]['nama_perusahaan']);
				}
			});
		}else{
			$("#asuransi").hide();
			$("#kontrak").hide();
			$("#kelas").hide();
			$("#noAsuransi").hide();
			$('#namaPerusahaan').hide();
		}

		// $.ajax({
		// 	type:'POST',
		// 	url:'<?php echo base_url()?>pilihkamar/pilih/get_kamar/'+dept,
		// 	success:function(data){
		// 		console.log(data);
		// 		$('#kamar').empty();
		// 		$('#kamar').append('<option value="" selected>--Pilih Kamar--</option>');
		// 		for(var i = 0; i<data.length; i++){
		// 			$('#kamar').append(
		// 				'<option value="'+data[i]['nama_kamar']+'">'+data[i]['nama_kamar']+'</option>'
		// 			);
		// 		}
		// 	}
		// });

		$('#kelas_k').empty();
		$('#kelas_k').append('<option value="" selected>--Pilih Kelas--</option>');
	}

	function pilih_bed(kamar_id, bed_id, nama_bed){
		$('#kamar_id').val(kamar_id);
		$('#bed_id').val(bed_id);
		$('#kamar').val(nama_bed);
		$('#pilkamar').modal('hide');
	}
</script>