	
<div class="title">
	DAFTAR KUNJUNGAN PASIEN
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>pasien/kunjungan">Kunjungan Pasien</a>
	</li>
</div>

<div>
	<br>
	<!-- search -->
	<form method="POST" id="search_submit">
   		<div class="search">
			<label class="control-label col-md-3">
				<i class="fa fa-search">&nbsp;&nbsp;&nbsp;</i>Nama Pasien / Rekam Medik <span class="required" style="color : red">* </span>
			</label>
			<div class="col-md-4">		
				<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
			</div>
			<button type="submit" class="btn btn-danger">Cari</button>
		</div>	
	</form>
	<!-- end search -->
	<br>
	<hr class="garis">	
	<br>

	<!-- filter -->
		<label class=" col-md-1" style="margin-right:-60px; padding-top:7px;">Filter :</label>
		<div class="col-md-3" style="margin-right:-20px; margin-top:2px">
			<div class="input-daterange input-group" id="datepicker">
			    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
			    <span class="input-group-addon">to</span>
			    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
			</div>
		</div>
		
		<div class="col-md-2">
			<select name="filter" class="form-control select" id="filter" style="margin-left:15px;">
				<option value="Dokter">Dokter</option>
				<option value="Cara Pembayaran">Cara Pembayaran</option>
				<option value="Pasien Baru">Pasien Baru</option>
				<option value="Pasien Lama">Pasien Lama</option>
			</select>
		</div>
		<div class="col-md-2">	
			<input type="text" class="form-control" id="textFilter" name="filter" placeholder="nama dokter" style="margin-left:-10px;"/>
		</div>	
		<button type="submit" class="btn btn-danger" style="margin-left:-20px;">Filter</button>
	<!-- end filter -->
	<br><br>
	
	<!-- table tab -->
	<div class="navigation" style="margin-left: 10px" >
		<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
		    <li class="active"><a href="#rj" data-toggle="tab">Rawat Jalan</a></li>
		    <li><a href="#ri" data-toggle="tab">Rawat Inap</a></li>
		</ul>

		<div id="my-tab-content" class="tab-content">
			<!-- tab daftar kunjungan pasien rawat jalan -->
		    <div class="tab-pane active" id="rj">
		      	<div class="portlet box red">
					<div class="portlet-title">
						<label class="control-label col-md-3">Daftar Kunjungan Pasien Rawat Jalan</label>
					</div>
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					
						<table class="table table-striped table-bordered table-hover table-responsive">
							<thead>
								<tr class="info">
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
							<tbody id="tbody_rj">
								<tr>
									<td colspan='9'><center>Cari Data Kunjungan</center></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Print PDF" style="width:100px; margin-left:80%;margin-bottom:10px">Print PDF</button> &nbsp;&nbsp;&nbsp;
				<button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Export Excel" style="width:110px;margin-bottom:10px">Export Excel</button>		       				
			</div>

			<!-- tab rawat inap  -->
		
			<div class="tab-pane" id="ri">
				<div class="portlet box red">
					<div class="portlet-title">
						<label class="control-label col-md-3">Daftar Kunjungan Pasien Rawat Inap</label>
					</div>
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
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>RI021</td>
									<td>Krisna</td>
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
					<button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Print PDF" style="width:100px; margin-left:80%;margin-bottom:10px">Print PDF</button> &nbsp;&nbsp;&nbsp;
					<button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Export Excel" style="width:110px;margin-bottom:10px">Export Excel</button>		       								
				</div>
			</div>
			<!-- end tab rawat inap -->
		</div>
		<!-- end tab -->
	</div>


</div>

<!-- modal view rawat inap -->
<div class="modal fade" id="viewrj" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       	<div class="modal-content">
        	<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        		<h3 class="modal-title" id="myModalLabel">View Data Pasien Rawat Jalan</h3>
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
						
				<div class="form-group"><br><br>
					<label class="control-label col-md-3">Poliklinik</label>
					<div class="col-md-5">
						<select class="form-control select" name="poli" id="poli" disabled>
							<option value="">Pilih Poliklinik</option>
							<option value="Semua Poli">Semua Poli</option>
							<option value="Unit Bersalin" selected>Unit Bersalin</option>
							<option value="Radiologi" >Radiologi</option>
							<option value="Labolatorium" >Labolatorium</option>
							<option value="Fisioterapi" >Fisioterapi</option>
							<option value="lain-lain" >Lainnya</option>
						</select>												
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

<!-- modal edit rawat jalan -->
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
						
				<div class="form-group"><br><br>
					<label class="control-label col-md-3">Poliklinik</label>
					<div class="col-md-5">
						<select class="form-control select" name="poli" id="poli">
							<option value="">Pilih Poliklinik</option>
							<option value="Semua Poli">Semua Poli</option>
							<option value="Unit Bersalin" selected>Unit Bersalin</option>
							<option value="Radiologi" >Radiologi</option>
							<option value="Labolatorium" >Labolatorium</option>
							<option value="Fisioterapi" >Fisioterapi</option>
							<option value="lain-lain" >Lainnya</option>
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
	 	   		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
		   	</div>
		</div>
    </div>
</div>


<!-- View data rawat inap -->
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

<script type="text/javascript">
		$("#search_submit").submit(function(event){
				var search = $("input:first").val();
				
				if(search!=""){
					$.ajax({
						type:'POST',
						url :'<?php echo base_url()?>pasien/kunjungan/search_kunjungan/'+search,
						success:function(data){
							// $("#t_body").html(hasil);

							console.log(data);
							
							if(data.length>0){
								
								$('#tbody').empty();
								for(var i = 0; i<data.length;i++){
									var rm_id = data[i]['rm_id'],
										name = data[i]['nama'],									
										jk = data[i]['jenis_kelamin'],
										tgl_lahir = data[i]['tanggal_lahir'],
										alamat = data[i]['alamat_skr'],
										id = data[i]['jenis_id'];

									var remove = tgl_lahir.split("-");
									var bulan;
									switch(remove[1]){
										case "01": bulan="Januari";break;
										case "02": bulan="Februari";break;
										case "03": bulan="Maret";break;
										case "04": bulan="April";break;
										case "05": bulan="Mei";break;
										case "06": bulan="Juni";break;
										case "07": bulan="Juli";break;
										case "08": bulan="Agustus";break;
										case "09": bulan="September";break;
										case "10": bulan="Oktober";break;
										case "11": bulan="November";break;
										case "12": bulan="Desember";break;
									}
									var tgl = remove[2]+" "+bulan+" "+remove[0];

									$('#t_body').append(
										'<tr>'+
								 			'<td>'+rm_id+'</td>'+
								 			'<td>'+name+'</td>'+
								 			'<td>'+jk+'</td>'+
								 			'<td>'+tgl+'</td>'+
								 			'<td>'+alamat+'</td>'+
								 			'<td>'+id+'</td>'+

								 			'<td style="text-align:center">'+
								 				'<a href="#daftarkan" data-toggle="modal" data-original-title="Tambah Pemeriksaan" onclick="visit('+rm_id+',&quot;'+name+'&quot;)" >'+
								 				'<i class="fa fa-plus"></i></a>'+
											'</td>'+
								 		'</tr>'
										);
								}
							}else{
								$('#t_body').empty();

								$('#t_body').append(
										'<tr>'+
								 			'<td colspan="7"><center>Data Pasien Tidak Ditemukan</center></td>'+
								 		'</tr>'
									);
							}

						},
						error:function (data){
							$('#t_body').empty();

							$('#t_body').append(
								'<tr>'+
						 			'<td colspan="7"><center>Data Pasien Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
						}

					});
				}

				event.preventDefault();
			});

</script>