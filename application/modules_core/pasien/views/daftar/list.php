
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
    	<li><a href="#kunjungan" data-toggle="tab">Daftar Kunjungan</a></li>
    	
	</ul>

	<div id="my-tab-content" class="tab-content">
		<div class="tab-pane active" id="lama">
    		<form method="POST" id="search_submit">
	       		<div class="search">
					<label class="control-label col-md-3">
						<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
					</label>
					<div class="col-md-4">		
						<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
					</div>
					<button type="submit" class="btn btn-danger">Cari</button>&nbsp;&nbsp;&nbsp;
					<a href="<?php echo base_url() ?>daftar/daftarpasien" class="btn btn-warning"> Daftar Pasien Baru</a>
				</div>	
			</form>
			<br>
			<hr class="garis"><br>
			<label class=" col-md-1" style="margin-right:-60px; padding-top:7px;">Filter :</label>
			<div class="col-md-3" style="margin-right:-20px; margin-top:2px">
				<div class="input-daterange input-group" id="datepicker">
				    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
				    <span class="input-group-addon">to</span>
				    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" />
				</div>
			</div>
			<br><br>
			
			<div class="portlet box red">
				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive">
						<thead>
							<tr class="info">
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
								<td colspan='7'><center>Cari Data Pasien</center></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>   
			<br>
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
					<option value="Poliklinik">Poliklinik</option>
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
								<td>Nomor Rekam Medis</td>
								<td>Nama</td>
								<td>Poliklinik Tujuan</td>
								<td>Dokter Pemeriksa</td>
								<td>Tgl. Lahir</td>
								<td>Alamat</td>
								<td>Jenis Kelamin</td>
								<td>Tgl. Daftar</td>
								<td style="text-align:center">
									<a href="#viewrj" class="viewico" data-toggle="modal" data-original-title="Edit Data Pasien"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="View"></i></a>&nbsp;&nbsp;&nbsp;
									<a href="#editrj" class="viewico" data-toggle="modal" data-original-title="Edit Data Pasien"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
								</td>
							</tr>
						</tbody>
					</table>	
				</div>
			</div>
        </div>
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
								<option value="III" selected>III</option>
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
					<div class="form-group" style="margin-top:10px">
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
					</div>

  				</div>
  				<br><br>
  				<div class="modal-footer">
			       		<button type="submit" class="btn btn-success">Simpan</button>
		      	</div>

    		</div>
    	</div>        	
    </form>
</div>

<script type="text/javascript">
		$(document).ready(function(){


			$("#datepicker-reg").change(function(){
				var today = new Date();
				var text = document.getElementById("datepicker-reg").value;
				var from = text.split("/");
				var born = new Date(from[2], from[1] - 1, from[0]);
				$("#newUmur").val(getAge(born));
			});

			function getAge(date) {
			  var now = new Date();
			  var today = new Date(now.getYear(),now.getMonth(),now.getDate());

			  var yearNow = now.getYear();
			  var monthNow = now.getMonth();
			  var dateNow = now.getDate();

			  var dob = date;

			  var yearDob = dob.getYear();
			  var monthDob = dob.getMonth();
			  var dateDob = dob.getDate();
			  var age = {};
			  var ageString = "";
			  var yearString = "";
			  var monthString = "";
			  var dayString = "";


			  yearAge = yearNow - yearDob;

			  if (monthNow >= monthDob)
			    var monthAge = monthNow - monthDob;
			  else {
			    yearAge--;
			    var monthAge = 12 + monthNow -monthDob;
			  }

			  if (dateNow >= dateDob)
			    var dateAge = dateNow - dateDob;
			  else {
			    monthAge--;
			    var dateAge = 31 + dateNow - dateDob;

			    if (monthAge < 0) {
			      monthAge = 11;
			      yearAge--;
			    }
			  }

			  age = {
			      years: yearAge,
			      months: monthAge,
			      days: dateAge
			      };

				  if ( (age.years > 0) && (age.months > 0) && (age.days > 0) )
				    ageString = age.years +" Tahun  " + age.months + " Bulan  " + age.days + " Hari. ";
				  else if ( (age.years == 0) && (age.months == 0) && (age.days > 0) )
				    ageString =  age.days + " Hari.";
				  else if ( (age.years > 0) && (age.months == 0) && (age.days == 0) )
				    ageString = age.years + " Tahun.";
				  else if ( (age.years > 0) && (age.months > 0) && (age.days == 0) )
				    ageString = age.years+" Tahun " + age.months +" Bulan.";
				  else if ( (age.years == 0) && (age.months > 0) && (age.days > 0) )
				    ageString = age.months + " Bulan " + age.days + " Hari.";
				  else if ( (age.years > 0) && (age.months == 0) && (age.days > 0) )
				    ageString = age.years + " Tahun " + age.days + "Hari.";
				  else if ( (age.years == 0) && (age.months > 0) && (age.days == 0) )
				    ageString = age.months + " Bulan.";
				  else ageString = "Belum lahir";

				  return ageString;
			}



			$("#nomorPasien").keydown(function (e) {
		        // Allow: backspace, delete, tab, escape, enter and .
		        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		             // Allow: Ctrl+A
		            (e.keyCode == 65 && e.ctrlKey === true) || 
		             // Allow: home, end, left, right
		            (e.keyCode >= 35 && e.keyCode <= 39)) {
		                 // let it happen, don't do anything
		                 return;
		        }
		        // Ensure that it is a number and stop the keypress
		        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		            e.preventDefault();
		        }
		    });

			$("#no_telp_wali").keydown(function (e) {
	        // Allow: backspace, delete, tab, escape, enter and .
		        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		             // Allow: Ctrl+A
		            (e.keyCode == 65 && e.ctrlKey === true) || 
		             // Allow: home, end, left, right
		            (e.keyCode >= 35 && e.keyCode <= 39)) {
		                 // let it happen, don't do anything
		                 return;
		        }
		        // Ensure that it is a number and stop the keypress
		        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		            e.preventDefault();
		        }
		    });

			$("#newKabupaten").attr('disabled',true);
			$("#newKecamatan").attr('disabled',true);	
			$("#newKelurahan").attr('disabled',true);

			$("#newProvinsi").change(function(){
				var provinsi = this.value;
				if(provinsi == "")
					$("#newKabupaten").attr('disabled',true);
				else{
					$("#newKabupaten").attr('disabled',false);
					$.ajax({
						type:'POST',
						dataType : "html",
						url :'<?php echo base_url()?>pasien/daftarpasien/selectProvinsi/'+provinsi,
						success:function(hasil){
							$("#newKabupaten").html(hasil);
						} 
					});
				}	
			});

			$("#newKabupaten").change(function(){
				var kabupaten = this.value;
				
				if(kabupaten == "")
					$("#newKecamatan").attr('disabled',true);
				else{
					$("#newKecamatan").attr('disabled',false);
					$.ajax({
						type:'POST',
						dataType : "html",
						url :'<?php echo base_url()?>pasien/daftarpasien/selectKabupaten/'+kabupaten,
						success:function(hasil){
							$("#newKecamatan").html(hasil);
						} 
					});
				}	
			});

			$("#newKecamatan").change(function(){
				var kecamatan = this.value;
				
				if(kecamatan == "")
					$("#newKelurahan").attr('disabled',true);
				else{
					$("#newKelurahan").attr('disabled',false);
					$.ajax({
						type:'POST',
						dataType : "html",
						url :'<?php echo base_url()?>pasien/daftarpasien/selectKecamatan/'+kecamatan,
						success:function(hasil){
							$("#newKelurahan").html(hasil);
						} 
					});
				}	
			});


			$("#skrKabupaten").attr('disabled',true);
			$("#skrKecamatan").attr('disabled',true);	
			$("#skrKelurahan").attr('disabled',true);

			$("#skrProvinsi").change(function(){
				var provinsi = this.value;
				if(provinsi == "")
					$("#skrKabupaten").attr('disabled',true);
				else{
					$("#skrKabupaten").attr('disabled',false);
					$.ajax({
						type:'POST',
						dataType : "html",
						url :'<?php echo base_url()?>pasien/daftarpasien/selectProvinsi/'+provinsi,
						success:function(hasil){
							$("#skrKabupaten").html(hasil);
						} 
					});
				}	
			});

			$("#skrKabupaten").change(function(){
				var kabupaten = this.value;
				
				if(kabupaten == "")
					$("#skrKecamatan").attr('disabled',true);
				else{
					$("#skrKecamatan").attr('disabled',false);
					$.ajax({
						type:'POST',
						dataType : "html",
						url :'<?php echo base_url()?>pasien/daftarpasien/selectKabupaten/'+kabupaten,
						success:function(hasil){
							$("#skrKecamatan").html(hasil);
						} 
					});
				}	
			});

			$("#skrKecamatan").change(function(){
				var kecamatan = this.value;
				
				if(kecamatan == "")
					$("#skrKelurahan").attr('disabled',true);
				else{
					$("#skrKelurahan").attr('disabled',false);
					$.ajax({
						type:'POST',
						dataType : "html",
						url :'<?php echo base_url()?>pasien/daftarpasien/selectKecamatan/'+kecamatan,
						success:function(hasil){
							$("#skrKelurahan").html(hasil);
						} 
					});
				}	
			});

			//search

			$("#search_submit").submit(function(event){
				var search = $("input:first").val();
				
				if(search!=""){
					$.ajax({
						type:'POST',
						url :'<?php echo base_url()?>pasien/daftarpasien/search_pasien/'+search,
						success:function(data){
							// $("#t_body").html(hasil);

							console.log(data);
							
							if(data.length>0){
								$('#t_body').empty();
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
								 				'<a href="#tambahPemeriksaan" data-toggle="modal" data-original-title="Tambah Pemeriksaan" onclick="visit('+rm_id+',&quot;'+name+'&quot;)" >'+
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

			var item = {};
			$('#submit_form').submit(function(e){

				item['rm_lama']=$('#new_rm_id').val();
				item['nama']=$('#newNamaLengkap').val();
				item['alias']=$('#newAlias').val();
				item['tempat_lahir']=$('#newTempatLahir').val();
				item['tanggal_lahir']=$('#datepicker-reg').val();

				if($('#newJenisKelamin').val()=="")
					item['jenis_kelamin']=$('#newJenisKelamin').val();
				else
					item['jenis_kelamin']=$('#newJenisKelamin2').val();

				item['gol_darah']=$('#newGol').val();
				item['pekerjaan']=$('#newPekerjaan').val();
				item['jenis_id']=$('#newJenisID').val();
				item['no_id']=$('#newNomorID').val();
				item['pendidikan']=$('#newJenjangPendidikan').val();
				item['agama'] = $('#newAgama').val();
				item['status_kawin'] = $('#newStatusKawin').val();
				item['alamat_skr'] = $('#newAlamat').val();
				item['prov_id_skr'] = $('#skrProvinsi').val();
				item['kab_id_skr']=$('#skrKabupaten').val();
				item['kec_id_skr']=$('#skrKecamatan').val();
				item['kel_id_skr']=$('#skrKelurahan').val();
				item['alamat_ktp']=$('#newAlamatKTP').val();
				item['prov_id']=$('#newProvinsi').val();
				item['kab_id']=$('#newKabupaten').val();
				item['kec_id']=$('#newKecamatan').val();
				item['kel_id']=$('#newKelurahan').val();
				item['no_telp']=$('#nomorPasien').val();
				item['nama_wali']=$('#newWali').val();
				item['hubungan_wali']=$('#newHubungan').val();
				item['alamat_wali']=$('#newAlamatWali').val();
				item['no_telp_wali']=$('#no_telp_wali').val();
				item['pekerjaan_wali']=$('#newJobWali').val();
				item['alergi']=$('#newALergi').val();

				$.ajax({
					type:"POST",
					url:"<?php echo base_url()?>pasien/daftarpasien/add_pasien",
					data: item,
					success:function(data){
						//$('#submitquery').attr("data-target","#tambahPemeriksaan"); 

						$('#tambahPemeriksaan').modal('show');
						$('#modal_no_rm').val(data['rm_id']);
						$('#modal_nama').val(data['nama']);

						$('#new_rm_id').val("");
						$('#newNamaLengkap').val("");
						$('#newJobWali').val("");
						$('#newGol').val("TIDAK DIKETAHUI");
						$('#newPekerjaan').val("");
						$('#newJenisID').val("");
						$('#newNomorID').val("");
						$('#newJenjangPendidikan').val("");
						$('#newAgama').val("");
						$('#newStatusKawin').val("");
						$('#newAlamat').val("");
						$('#skrProvinsi').val("");
						$('#skrKabupaten').val("");
						$('#skrKecamatan').val("");
						$('#skrKelurahan').val("");
						$('#newAlamatKTP').val("");
						$('#newProvinsi').val("");
						$('#newKabupaten').val("");
						$('#newKecamatan').val("");
						$('#newKelurahan').val("");
						$('#nomorPasien').val("");
						$('#newWali').val("");
						$('#newHubungan').val("");
						$('#newAlamatWali').val("");
						$('#no_telp_wali').val("");
						$('#newALergi').val("");
						$('#newAlias').val("Jenis Alias");
						$('#newTempatLahir').val("");
						$('#datepicker-reg').val("");
						$('#newJenisKelamin').attr('checked',false);
						$('#newJenisKelamin2').attr('checked',false);
					},
					error:function (data){
						
					}

				});

				e.preventDefault();
			});


			
			var itemModal = {};
			$('#submitPemeriksaan').submit(function(e){
				itemModal['tanggal_visit']= $('#inputdate').val();
				itemModal['rm_id'] = $('#modal_no_rm').val();
				itemModal['dept_id'] = $('#poli').val();
				itemModal['kelas_pelayanan'] = $('#kelas_pelayanan').val();
				itemModal['cara_bayar'] = $('#carabayar').val();
				itemModal['nama_asuransi'] = $('#namaAsuransi').val();
				itemModal['no_asuransi'] = $('#nomorAsuransi').val();
				itemModal['nama_perusahaan'] = $('#namaPerusahaan').val();
				itemModal['cara_masuk'] = $('#caramasuk').val();
				itemModal['detail_masuk'] = $('#detailmasuk').val();
				if($('#pasienLama').val()!="")
					itemModal['is_pasien_lama'] = $('#pasienLama').val();
				else
					itemModal['is_pasien_lama'] = $('#pasienBaru').val();

				if($('#jenisKasusLama').val()!="")
					itemModal['is_kasus_baru'] = $('#jenisKasusLama').val();
				else
					itemModal['is_kasus_baru'] = $('#jenisKasusBaru').val();

				if($('#knjunganLama').val()!="")
					itemModal['is_kunjungan_baru'] = $('#knjunganLama').val();
				else
					itemModal['is_kunjungan_baru'] = $('#knjunganBaru').val();
				itemModal['tipe_kunjungan'] = "RAWAT JALAN";
				itemModal['petugas_registrasi'] = "User Login";

				e.preventDefault();
				console.log(itemModal);

				$.ajax({
					type:"POST",
					url:"<?php echo base_url()?>pasien/daftarpasien/add_visit_rj",
					data: itemModal,
					success:function(data){
						alert('Data berhasil ditambahkan');	
						window.location = 'http://localhost/SIMRS_ARYA/pasien/daftarpasien';
						// $('#tambahPemeriksaan').modal('hide');
						// $('#poli').val("");
						// $('#kelas_pelayanan').val("");
						// $('#carabayar').val("");
						// $('#carabayar').val("");
						// $('#namaAsuansi').val("");
						// $('#nomorAsuransi').val("");
						// $('#namaPerusahaan').val("");
						// $('#caramasuk').val("");
						// $("#detailmasuk").val("");

						// $("#pasienLama").attr('checked', false);
						// $('#pasienBaru').attr('checked', false);
						// $('#jenisKasusLama').attr('checked', false);
						// $('#jenisKasusBaru').attr('checked', false);
						// $('#knjunganLama').attr('checked', false);
						// $('#knjunganBaru').attr('checked', false);
					},
					error:function(data){
						console.log(data);
					}					
				});
			});
		});

		function visit(rm_id,nama){
			$('#modal_no_rm').val(rm_id);
			$('#modal_nama').val(nama);
		}
</script><!-- data-target="#tambahPemeriksaan" -->