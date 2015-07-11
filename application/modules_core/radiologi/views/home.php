
<div class="title">
	POLIKLINIK RADIOLOGI
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>radiologi/homeradio">Poliklinik Radiologi</a>
	</li>
	
</div>

<div class="navigation" style="margin-left: 10px" >
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#list" data-toggle="tab">List Pasien Radiologi</a></li>
	    <li><a href="#daftar" data-toggle="tab">Daftar Pemeriksaan Lab</a></li>
	    <li><a href="#hasil" data-toggle="tab">Hasil Pemeriksaan Lab</a></li>
	    <li><a href="#farmasi" data-toggle="tab">Farmasi</a></li>
	    <li><a href="#logistik" data-toggle="tab">Logistik</a></li>
	    <li><a href="#laporan" data-toggle="tab">Laporan</a></li>
	    <li><a href="#master" data-toggle="tab">Master</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="list">
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
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info">
								<th>
									 No Rm
								</th>

								<th>
									 Nama
								</th>
								<th>
									 Jenis Kelamin
								</th><!-- 
								<th>
									 Pengirim
								</th>
								<th>
									 Unit Pengirim
								</th>
								<th>
									 Diagnosa
								</th> -->
								<th>
									Keterangan
								</th>
								<th>
									Tanggal
								</th><!-- 
								<th>
									Status
								</th>
								<th>
									Jenis Pemeriksaan
								</th>
								<th>
									Hasil Pemeriksaan
								</th>
								<th>
									Pemeriksa
								</th> -->
								<th>Periksa</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>TEST</td>

								<td>TEST</td>
								<td>TEST</td>										

								<td>TEST</td>

								<td>TEST</td>

								<td style="text-align:center">
									<a href="#tambahPeri" data-toggle="modal" ><i class="fa fa-plus"></i></a>
								</td>										
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="modal fade" id="tambahPeri" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Tambah Jenis Pemeriksaan</h3>
        			</div>	
        			<div class="modal-body">
	        			<div class="navigation" style="margin-left: 10px" >
							<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
							    <li class="active"><a href="#radiologi" data-toggle="tab">Radiologi</a></li>
							    <li><a href="#ctscan" data-toggle="tab">CT Scan</a></li>
							</ul>
							<div id="my-tab-content" class="tab-content" >
						        <div class="tab-pane active" id="radiologi" style="height: 200px">
						        </div>
						        <div class="tab-pane active" id="ctscan" style="height: 200px">
						        </div>

						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div class="tab-pane" id="daftar">

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
			<hr class="garis">
			<br>        
	        <div class="portlet-title">
				<label class="control-label col-md-3" style="margin-top: 5px">Filter By : 
				</label>
				<div class="col-md-2" style="margin-left: -250px">
					<select class="form-control select" name="filter" id="filter">
						<option value="All">Semua Poli</option>
						<option value="Rawat Jalan">Rawat Jalan</option>
						<option value="Rawat Inap">Rawat Inap</option>					
					</select>
				</div>
			</div>
			<div class="portlet-body" style="margin: 60px 10px 0px 10px">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info">
								<th>
									 No Rm
								</th>

								<th>
									 Nama
								</th>
								<th>
									 Jenis Kelamin
								</th>
								<th>
									 Pengirim
								</th>
								<th>
									 Unit Pengirim
								</th>
								<th>
									 Diagnosa
								</th>
								<th>
									Keterangan
								</th>
								<th>
									Tanggal
								</th>
								<th>
									Status
								</th>
								<th>
									Jenis Pemeriksaan
								</th>
								<th>
									Hasil Pemeriksaan
								</th>
								<th>
									Pemeriksa
								</th>
								<th>Tambah Hasil Periksa</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>TEST</td>

								<td>TEST</td>
								<td>TEST</td>										

								<td>TEST</td>

								<td>TEST</td>

								<td>TEST</td>
								<td>TEST</td>										

								<td>TEST</td>

								<td>TEST</td>
								<td>TEST</td>
								<td>TEST</td>
								<td>TEST</td>
								
								<td style="text-align:center">
									<a href="#tambahHasil" data-toggle="modal" ><i class="fa fa-plus"></i></a>
								</td>										
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

        <div class="tab-pane" id="hasil">    
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
			<hr class="garis">
			<br>        
	        <div class="portlet-title">
				<label class="control-label col-md-3" style="margin-top: 5px">Filter By : 
				</label>
				<div class="col-md-2" style="margin-left: -250px">
					<select class="form-control select" name="filter" id="filter">
						<option value="All">Semua Poli</option>
						<option value="Rawat Jalan">Rawat Jalan</option>
						<option value="Rawat Inap">Rawat Inap</option>					
					</select>
				</div>
			</div>
			<div class="portlet-body" style="margin: 60px 10px 0px 10px">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info">
								<th>
									 No Rm
								</th>

								<th>
									 Nama
								</th>
								<th>
									 Jenis Kelamin
								</th>
								<th>
									 Pengirim
								</th>
								<th>
									 Unit Pengirim
								</th>
								<th>
									 Diagnosa
								</th>
								<th>
									Keterangan
								</th>
								<th>
									Tanggal
								</th>
								<th>
									Status
								</th>
								<th>
									Jenis Pemeriksaan
								</th>
								<th>
									Hasil Pemeriksaan
								</th>
								<th>
									Pemeriksa
								</th>
								<th>Lihat Hasil Periksa</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>TEST</td>

								<td>TEST</td>
								<td>TEST</td>										

								<td>TEST</td>

								<td>TEST</td>

								<td>TEST</td>
								<td>TEST</td>										

								<td>TEST</td>

								<td>TEST</td>
								<td>TEST</td>
								<td>TEST</td>
								<td>TEST</td>
								
								<td style="text-align:center">
									<a href="#lihatHasil" data-toggle="modal" ><i class="fa fa-search"></i></a>
								</td>										
							</tr>
						</tbody>
					</table>
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
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
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
						<textarea class="form-control" id="ketRequest" name="ketRequest"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Tanggal Respond</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
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
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
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
						<textarea class="form-control" id="ketRequest" name="ketRequest"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Tanggal Respond</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
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
        </div>
        
        <div class="tab-pane" id="master">        
        </div>
    </div>

</div>

			