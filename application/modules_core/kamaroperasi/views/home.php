
<div class="title">
	KAMAR OPERASI
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>kamaroperasi/homeoperasi">Kamar Operasi</a>
	
		</li>
	
</div>
<div class="navigation" style="margin-left: 10px" >
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#list" data-toggle="tab">List Pasien</a></li>
	    <li><a href="#rencanaOperasi" data-toggle="tab">List Rencana Operasi</a></li>
	    <li><a href="#farmasi" data-toggle="tab">Farmasi </a></li>
	    <li><a href="#logistik" data-toggle="tab">Logistik</a></li>
	    <li><a href="#laporan" data-toggle="tab">Laporan</a></li>
	    <li><a href="#master" data-toggle="tab">Master</a></li>
	</ul> 

	<div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="list">
            <div class="search">
				<label class="control-label col-md-3">Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
				</label>
				<div class="col-md-4">		
					<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
		        </div>
		        <button type="submit" class="btn btn-danger">Cari</button>
			</div>	
			<br>
			<hr class="garis">
			<br><br>
			<label class=" col-md-1" style="margin-right:-60px; padding-top:7px;">Filter :</label>
			<div class="col-md-3" style="margin-right:-20px; margin-top:2px">
				<div class="input-daterange input-group" id="datepicker">
				    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
				    <span class="input-group-addon">to</span>
				    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" />				
				</div>
			</div>
			<br>
			<div class="portlet box red">
				<br>
				<div class="portlet-body" style="margin: 10px 10px 0px 10px">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr class="info" >
									<th>No. RM</th>
									<th>Tgl. Daftar</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Poli Tujuan</th>
									<th>Tgl. Lahir</th>
									<th>Jadwalkan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>123912</td>
									<td>12/12/2012</td>
									<td>Khrisna</td>
									<td>Laki-laki</td>										
									<td>Poli Umum</td>
									<td>12/12/2012</td>
									<td style="text-align:center">
										<a href="#tambahPeri" data-toggle="modal" ><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Jadwalkan Operasi"></i></a>	
									</td>										
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		
			<div class="modal fade" id="tambahPeri" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        	<div class="modal-dialog">
	        		<div class="modal-content">
	        			<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Daftar Operasi Pasien</h3>
	        			</div>	
	        			<div class="modal-body" style="margin-left:40px;">
	        				<form class="form-horizontal" role="form">
		        				<div class="form-group">
									<label class="control-label col-md-3">Tanggal</label>
									<div class="col-md-5" >
										<div class="input-icon">
											<i class="fa fa-calendar"></i>
											<input type="text" style="cursor:pointer;" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Nama Pasien</label>
									<div class="col-md-7">
										<input type="text" class="form-control" name="nama" value="Khrisna" readonly>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3" >Waktu Operasi </label>
									<div class="col-md-3">	
										<input type="text" class="form-control" name="timestart" data-date-format="hh:ii" data-provide="timepicker" placeholder="<?php echo date("H:i");?>"/> 
									</div>		
									<label class="control-label col-md-1"> s/d</label>				
									<div class="col-md-3">
										<input type="text" class="form-control" name="timeend" data-date-format="hh:ii" data-provide="timepicker" placeholder="<?php echo date("H:i");?>"/>
									</div>
								</div>	
									
								<div class="form-group">
									<label class="control-label col-md-3">Diagnosa</label>
									<div class="col-md-2">
										<input type="text" class="form-control isian" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" >
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control isian" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Dokter Pelaksana</label>
									<div class="col-md-4">
										<input type="text" class="form-control isian" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter">
									</div>
								</div>

								
								<div class="form-group">
									<label class="control-label col-md-3">Dokter Anastesi</label>
									<div class="col-md-4">
										<input type="text" class="form-control isian" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Jenis Anestesi</label>
									<div class="col-md-7">
										<input type="text" class="form-control" name="jenisAnestesi" placeholder="Jenis Anestesi">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Asisten</label>
									<div class="col-md-7">
										<textarea class="form-control" name="namaPasien" placeholder="Daftar Nama Pasien"></textarea>	
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Tempat Operasi</label>
									<div class="col-md-7">
										<input type="text" class="form-control" name="tempatOperasi" placeholder="Tempat Operasi">
									</div>
								</div>

							</form>
	        			</div>
	      				<div class="modal-footer">
	 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Tambah</button>
				      	</div>
	        		</div>
	        	</div>        	
	        </div>
	    </div>
    
    	<div class="tab-pane" id="rencanaOperasi">
  			<div class="search">
				<label class="control-label col-md-3">Nama Pasien / Rekam Medis <span class="required" style="color : red">
					* </span>
				</label>
				<div class="col-md-4">		
					<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
		        </div>
		        <button type="submit" class="btn btn-danger">Cari</button>
			</div>	
			<br>
			<hr class="garis"><br>
			<label class="control-label col-md-1" style="margin-right:-60px; padding-top:7px;">Filter :</label>
			<div class="col-md-3" style="margin-right:-20px; margin-top:2px">
				<div class="input-daterange input-group" id="datepicker">
				    <input type="text" class="input-sm form-control" name="start" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>"/>
				    <span class="input-group-addon">to</span>
				    <input type="text" class="input-sm form-control" name="end" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>"/>
				</div>
				<!-- <input class="form-control" data-provide="datepicker" placeholder="Start Date"> -->
			</div>
			<br>
			<div class="portlet-body" style="margin: 30px 10px 0px 10px">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
						<tr class="info">
							<th>No</th>
							<th>Nama</th>
							<th>Tgl. rencana operasi</th>
							<th>No. RM</th>
							<th>Diagnosa</th>
							<th>Dokter Pengirim</th>
							<th>Status Operasi</th>
							<th>Details</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td>Nama Pasien</td>
							<td>12/12/2012</td>										
							<td>123012</td>
							<td>Katarak</td>
							<td>Dr. Jems</td>										
							<td>Belum selesai</td>
							<td style="text-align:center">
								<a href="#detailStatusOperasi" data-toggle="modal" ><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Details Status Operasi"></i></a>
							</td>										
						</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="modal fade" id="detailStatusOperasi" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	        	<div class="modal-dialog">
	        		<div class="modal-content">
	        			<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Daftar Operasi Pasien</h3>
	        			</div>	
	        			<div class="modal-body" style="margin-left:40px;">
		        			<form class="form-horizontal" role="form">	
		        				<div class="form-group">
									<label class="control-label col-md-3">No. RM</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="noRM" placeholder="13123" disabled>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Nama</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="nama" placeholder="Nama Pasien" disabled>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3" >Waktu Operasi </label>
									<div class="col-md-3">	
										<input type="text" class="form-control isian" name="timestart" placeholder=" mulai" disabled/> 
									</div>			
									<label class="control-label col-md-1"> s/d</label>				
									<div class="col-md-3">
										<input type="text" class="form-control isian" name="timeend" placeholder=" selesai" disabled/>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Dokter Operator</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="dp" placeholder="Dr. Jems" data-toggle="modal" data-target="#searchDokter" disabled>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Dokter Pelaksana</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="dp" placeholder="Dr. Jems" data-toggle="modal" data-target="#searchDokter" disabled>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Dokter Anastesi</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="da" placeholder="Dr. Putu" data-toggle="modal" data-target="#searchDokter" disabled>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Dokter Anak</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="da" placeholder="Dr. Putu" data-toggle="modal" data-target="#searchDokter" disabled>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Asisten</label>
									<div class="col-md-7">
										<textarea class="form-control isian" name="namaPasien" placeholder="List Nama Asisten" disabled></textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Istrumen</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="ins" placeholder="Instrumen" disabled>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Sirkuler</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="sir" placeholder="Sirkuler" disabled>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3"> Anastesi</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="an" placeholder="Anestesi" disabled>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Jenis Anastesi</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="da" placeholder="Jenis Anastesi" disabled>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Keadaan Akhir</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="ka" placeholder="Hidup" disabled>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Status Operasi</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="so" placeholder="blm selesai" disabled>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Tempat Operasi</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="so" placeholder="blm selesai" disabled>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3">Onfaktur</label>
									<div class="col-md-7">
										<input type="text" class="form-control isian" name="on" placeholder="onfaktur" disabled>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-3">Keterangan</label>
									<div class="col-md-7">
										<textarea class="form-control isian" name="ket" placeholder="Keterangan" disabled></textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3"> </label>
									<div class="col-md-5">
										<button type="button" class="btn btn-success" id="simpanbtn" data-dismiss="modal">Simpan</button>
										<button type="button" class="btn btn-danger" id="batalbtn">Batal</button>
									</div>
								</div>
							</form>
	        			</div>
	      				<div class="modal-footer">
	 			       		<button type="button" class="btn btn-warning" id="editbtn">Edit</button>	 			       		
	 			       		<button type="button" class="btn btn-danger" id="clsbtn" data-dismiss="modal">Keluar</button>
				      	</div>
	        		</div>
	        	</div>        	
	        </div>
		</div>

        <div class="tab-pane" id="farmasi">
	       	<div class="dropdown">
	       		<div id="titleInformasi">Inventori</div>
	       		<div class="btnBawah" id="btnBawahInventori"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
          	<br>
            <div class="tabelinformasi" id="infoInventori">
				<div class="portlet-body" style="margin: 0px 50px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive">
						<thead>
							<tr class="info">
								<th> ID Obat </th>
								<th> Tanggal Kadaluarsa </th>
								<th> No Batch </th>
								<th> Stok </th>
								<th> Stok Minimal </th>
								<th> Harga Jual </th>
								<th> Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>S121334</td>
								<td>24 April 2014</td>
								<td>3</td>
								<td>100</td>									
								<td>120</td>
								<td>14000</td>
								<td style="text-align:center">200000</td>										
							</tr>
							<tr>
								<td>S121334</td>
								<td>24 April 2014</td>
								<td>3</td>
								<td>100</td>									
								<td>120</td>
								<td>14000</td>
								<td style="text-align:center">200000</td>											
							</tr>
						</tbody>
					</table>
				</div>
				<br>
	        </div>
			
			<div class="dropdown">
	        	<div id="titleInformasi">Permintaan Obat</div>
	            <div class="btnBawah" id="btnBawahPermintaan"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>
	        <div class="informasi" id="infoPermintaan">
				<form class="form-horizontal" role="form">
	           		<div class="form-group">
						<label class="control-label col-md-3">Tanggal Request</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Petugas</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="ptgas" name="ptgas" placeholder="Petugas"  data-toggle="modal" data-target="#petugas"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Keterangan Request</label>
						<div class="col-md-4">
						<textarea class="form-control" id="ketRequest" name="ketRequest" placeholder="Keterangan"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Tanggal Respon</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Petugas Respond</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="ptgas" name="ptgasRespond" placeholder="Petugas Respond" data-toggle="modal" data-target="#petugas"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3" ></label>
						<div class="col-md-7">			
							<a href="#tambahPermintaan" style="color:white">
							<button type="submit" class="btn btn-success">Tambah</button></a>		
					 	</div>							
					</div>				
				</form>
	        </div>
	           	
	        <!-- Retur Belum -->
	        <div class="dropdown">
	        	<div id="titleInformasi">Retur Obat</div>
	        	<div class="btnBawah" id="btnBawahRetur"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>
	        <div class="tabelinformasi" id="infoRetur">
	          	<div class="portlet-body" style="margin: 0px 50px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive">
						<thead>
							<tr class="info">
								<th> ID Obat </th>
								<th> Tanggal Kadaluarsa </th>
								<th> No Batch </th>
								<th> Stok Kadaluarsa</th>
								<th> Stok Diretur </th>
								<th> Stok Sisa </th>
								<th> Harga Jual </th>
								<th> Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>S121334</td>
								<td>24 April 2014</td>
								<td>3</td>
								<td>100</td>									
								<td><a href="#" class="editableform editable-click" data-type="text" data-pk="1" data-original-title="Jumlah Diretur" id="retur">1</a></td>									
								<td>1</td>
								<td>14000</td>
								<td style="text-align:center"><button type="submit" class="btn btn-success">Retur</button></td>										
							</tr>
						</tbody>
					</table>
				</div>
	        </div>    
	        <br>   	
	    </div>
	    
	    <div class="tab-pane" id="logistik">
	        <div class="dropdown">
	        	<div id="titleInformasi">Inventori</div>
	        	<div class="btnBawah" id="btnBawahInventoriBarang"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>
	        <div class="tabelinformasi" id="infoInventoriBarang">
				<div class="portlet-body" style="margin: 0px 50px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive">
						<thead>
							<tr class="info">
								<th> ID Obat </th>
								<th> Tanggal Kadaluarsa </th>
								<th> No Batch </th>
								<th> Stok </th>
								<th> Stok Minimal </th>
								<th> Harga Jual </th>
								<th> Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>S121334</td>
								<td>24 April 2014</td>
								<td>3</td>
								<td>100</td>									
								<td>120</td>
								<td>14000</td>
								<td style="text-align:center">200000</td>										
							</tr>
							<tr>
								<td>S121334</td>
								<td>24 April 2014</td>
								<td>3</td>
								<td>100</td>									
								<td>120</td>
								<td>14000</td>
								<td style="text-align:center">200000</td>											
							</tr>
						</tbody>
					</table>
					<br>
				</div>
		    </div>

			<div class="dropdown">
	        	<div id="titleInformasi">Permintaan Barang</div>
	        	<div class="btnBawah" id="btnBawahPermintaanBarang"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>
	        <div class="informasi" id="infoPermintaanBarang">
				<form class="form-horizontal" role="form">
	           		<div class="form-group">
						<label class="control-label col-md-3">Tanggal Request</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Petugas</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="ptgas" name="ptgas" placeholder="Petugas"  data-toggle="modal" data-target="#petugas"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Keterangan Request</label>
						<div class="col-md-4">
						<textarea class="form-control" id="ketRequest" name="ketRequest" placeholder="Keterangan"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Tanggal Respon</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Petugas Respond</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="ptgas" name="ptgasRespond" placeholder="Petugas Respond" data-toggle="modal" data-target="#petugas"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3" ></label>
						<div class="col-md-7">			
							<a href="#tambahPermintaan" style="color:white">
							<button type="submit" class="btn btn-success">Tambah</button></a>		
					 	</div>							
					</div>	
	           	</form>
	        </div>
	    </div>

        <div class="tab-pane" id="laporan">        
			<!-- search -->
			<div class="search">
				<label class="control-label col-md-4">
					<i class="fa fa-search">&nbsp;&nbsp;&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
				</label>
				<div class="col-md-4">		
					<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
				</div>
			<button type="submit" class="btn btn-danger">Cari</button>
			</div>
			<!-- end search -->
			
			<br>
			<hr class="garis">	
			<br>

			<!-- filter -->
				<label class="control-label col-md-1" style="margin-right:-60px; padding-top:7px;">Filter :</label>
				<div class="col-md-3" style="margin-right:-20px; margin-top:2px">
					<div class="input-daterange input-group" id="datepicker">
					    <input type="text" class="input-sm form-control" name="start" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" placeholder="Start Date" />
					    <span class="input-group-addon">to</span>
					    <input type="text" class="input-sm form-control" name="end" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" placeholder="End Date"/>
					</div>
					<!-- <input class="form-control" data-provide="datepicker" placeholder="Start Date"> -->
				</div>
				
				<div class="col-md-2">
					<select name="filter" class="form-control select" id="filter">
						<option value="Dokter Operasi">Dokter Operasi</option>
						<option value="Dokter Anak">Dokter Anak</option>
						<option value="DOkter Anastesi">Dokter Anastesi</option>
						<option value="Tindakan">Tindakan</option>
					</select>
				</div>

				<div class="col-md-2">	
					<input type="text" class="form-control" id="textFilter" name="filter" placeholder="Dokter Operasi"/>
				</div>	
			<!-- end filter -->
			<br><br><br>
			<div class="portlet-title">
				<label class="control-label col-md-3">Daftar Laporan Pasien Operasi</label>
			</div>
			<div class="portlet-body" style="margin: 0px 10px 0px 10px">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-responsive">
						<thead>
							<tr class="info">
								<th>No</th>
								<th>Tanggal</th>
								<th>Nama</th>
								<th>JK</th>
								<th>Umur</th>
								<th>Dr. Operator</th>
								<th>Dr. Anastesi</th>
								<th>Dr. Anak</th>
								<th>Dr. Pelaksana</th>
								<th>Diagnosa</th>
								<th>Jam Mulai</th>
								<th>Jam Selesai</th>
								<th>Asisten</th>
								<th>Instrumen</th>
								<th>Sirkuler</th>
								<th>Anestesi</th>
								<th>Tindakan</th>
								<th>Tarif</th>
								<th>Pembayaran</th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>12/12/2012</td>
								<td>Jems</td>
								<td>L</td>										
								<td>32</td>
								<td>Dr. Putu</td>
								<td>Dr. Putu</td>
								<td>Dr. Putu</td>
								<td>Dr. Putu</td>
								<td>Diagnosa</td>
								<td>Jam Mulai</td>
								<td>Jam Selesai</td>
								<td>Asisten</td>
								<td>Instrumen</td>
								<td>Sirkuler</td>
								<td>Anestesi</td>
								<td>Tindakan</td>
								<td>100.000.000</td>
								<td>Umum</td>									
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
        </div>
        
        <div class="tab-pane" id="master">        
        </div>
    </div>

    <!-- search dokter modal -->
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
													<tr class="warning">
														<td>Nama Dokter</td>
														<td width="10%">Pilih</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Jems</td>
														<td style="text-align:center"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></td>
													</tr>
													<tr>
														<td>Putu</td>
														<td style="text-align:center"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></td>
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
						<!-- end modal -->

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
														<td style="text-align:center"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></td>
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
						<!-- end modal tambah diagnosa-->

						

</div>
