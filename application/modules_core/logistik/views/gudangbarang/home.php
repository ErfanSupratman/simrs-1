
<div class="title">
	GUDANG BARANG
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>logistik/homegudangbarang">GUDANG BARANG</a>
	
		</li>
	
</div>
<div class="navigation" style="margin-left: 10px" >
 <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
    <li class="active"><a href="#mo" data-toggle="tab">Master Barang</a></li>
    <li><a href="#inventori" data-toggle="tab">Inventori</a></li>
    <li><a href="#adaan" data-toggle="tab">Perencaan Pengadaan</a></li>
    <li><a href="#penerimaan" data-toggle="tab">Penerimaan Barang</a></li>
    <li><a href="#permintaan" data-toggle="tab">Persetujuan Permintaan</a></li>
    <li><a href="#returbarang" data-toggle="tab">Retur Barang</a></li>
    <li><a href="#laporan" data-toggle="tab">Laporan</a></li>
</ul>


<div id="my-tab-content" class="tab-content">
    <div class="tab-pane active" id="mo">
      	<div class="search">
			<label class="control-label col-md-3">Nama Barang / Nomor Barang <span class="required" style="color : red">
				* </span>
			</label>
			<div class="col-md-4">		
				<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor Barang" autofocus>
	        </div>
        	<button type="submit" class="btn btn-danger">Cari</button>
		</div>
		<br>

		<hr class="garis">
		<br>
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
						<tr class="info" >
							<th  style="text-align:left"> Nomor Barang </th>
							<th  style="text-align:left"> Nama Barang </th>
							<th  style="text-align:left"> Merk </th>
							<th  style="text-align:left"> Jenis Obat </th>
							<th  style="text-align:left"> Satuan </th>
							<th  style="text-align:left"> Generik </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>S012234</td>
							<td>Shabu-shabu</td>
							<td>Orang Tua</td>
							<td>Dopping</td>
							<td>kilogram</td>									
							<td>Tidak</td>							
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</div>
        
    <div class="tab-pane" id="inventori">    
		<div class="search">
			<label class="control-label col-md-3">Nama Barang / Nomor Barang <span class="required" style="color : red">
				* </span>
			</label>
			<div class="col-md-4">		
				<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor Barang" autofocus>
	        </div>
	        <button type="submit" class="btn btn-danger">Cari</button>
		</div>
		<br>
		<hr class="garis">
		<br>        
        <div class="portlet-title">
			<label class="control-label col-md-2" style="margin-top: 5px">Filter By : </label>
			<div class="col-md-3" style="margin-left: -100px">
				<select class="form-control select" name="filter" id="filter">
					<option value="All">Semua Gudang</option>
					<option value="Gudang A">Gudang A</option>
					<option value="Gudang B">Gudang B</option>					
				</select>
			</div>
		</div>
		<br><br>
		<div class="portlet box red">
			<div class="portlet-body" style="margin: 0px 10px 0px 10px">
			
				<table class="table table-striped table-bordered table-hover table-responsive">
					<thead>
						<tr class="info" >
							<th  style="text-align:left"> Nomor Barang </th>
							<th  style="text-align:left"> Tanggal Kadaluarsa </th>
							<th  style="text-align:left"> Batch </th>
							<th  style="text-align:left"> Stok </th>
							<th  style="text-align:left"> Stok Minimal </th>
							<th  style="text-align:left"> Tahun Pengadaan </th>
							<th  style="text-align:left"> Harga Beli </th>
							<th  style="text-align:left"> Harga Jual </th>
							<th  style="text-align:left"> Keterangan </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>S012234</td>
							<td>24 April 2014</td>
							<td>1</td>
							<td>200</td>
							<td>150</td>
							<td>2011</td>									
							<td>10000</td>									
							<td>20000</td>
							<td>Diatas 18 tahun penggunaan</td>							
						</tr>
					</tbody>
				</table>
			</div>
		</div>	
				    
        </div>
        <div class="tab-pane" id="adaan">        
        </div>
        <div class="tab-pane" id="penerimaan">        
        </div>
        <div class="tab-pane" id="permintaan">    

    		<div class="search">
				<label class="control-label col-md-3">Nama Obat / Nomor Obat <span class="required" style="color : red">
							* </span>
				</label>
				<div class="col-md-4">		
						<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor Obat" autofocus>
		        </div>
		        <button type="submit" class="btn btn-danger">Cari</button>
			</div>
			<br>
			<hr class="garis">
			<br>        
	        <div class="portlet-title">
				<label class="control-label col-md-2" style="margin-top: 5px">Filter By : </label>
				<div class="col-md-3" style="margin-left: -100px">
					<select class="form-control select" name="filter" id="filter">
						<option value="All">Semua Unit</option>
						<option value="Bersalin">Bersalin</option>
						<option value="Nicu">NICU</option>					
					</select>
				</div>
			</div>
			<br>
			<br>
				<div class="portlet box red">
						
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					
						<table class="table table-striped table-bordered table-hover table-responsive">
							<thead>
								<tr class="info" >
									<th  style="text-align:left"> Nomor Obat </th>
									<th  style="text-align:left"> Unit Pengirim </th>
									<th  style="text-align:left"> Petugas </th>
									<th  style="text-align:left"> Jumlah Request </th>
									<th  style="text-align:left"> Jumlah Approved </th>
									<th  style="text-align:left"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>S012234</td>
									<td>Bersalin</td>
									<td>Arya</td>
									<td>30</td>
									<td><input type="text" class="form-control" placeholder="Jumlah yang diapproved" id="inputApp" name="inputApp"></td>									
									<td style="text-align:center">
										<a href="#tambahApp" style="color:white">
										<button type="submit" class="btn btn-success">Tambah</button></a>	
									</td>						
								</tr>
							</tbody>
						</table>
					</div>
				</div>	    

        </div>
        <div class="tab-pane" id="returbarang"> 
               
        </div>
        <div class="tab-pane" id="laporan">        
        </div>
    
</div>

</div>

				<!-- BEGIN FORM--><!-- 
				<form action="#" class="form-horizontal" id="searchPasien">
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">#Rekam Medik / Nama Pasien <span class="required">
							* </span>
							</label>
							<div class="col-md-4">
								<input type="text" id="searchPasienValue" name="pasien_id" class="form-control" placeholder="Masukkan Nomor RM atau Nama Lengkap Pasien"/>
							</div>
								<button type="submit" id="tombolCari" class="btn green submit">Submit</button>
								<button type="button" class="btn red">Clear Pencarian</button>
						</div>
					</div>
					 -->
											