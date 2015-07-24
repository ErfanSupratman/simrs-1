
<div class="title">
	IPS - RS
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>ipsrs/homeipsrs">IPSRS</a>
	</li>
</div>

<div class="navigation" style="margin-left: 10px" >
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#kegiatan" data-toggle="tab">Kegiatan</a></li>
	    <li><a href="#logistik" data-toggle="tab">Logistik</a></li>
	   	<li><a href="#laporan" data-toggle="tab">Laporan</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">
		<div class="tab-pane active" id="kegiatan">
			<div class="dropdown" id="rwp1" style="margin-left:10px;width:98.5%">
				<div id="titleInformasi">Catatan Kegiatan</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
			</div>
			<div class="tabelinformasi" id="tblrwp1">
				<form class="form-horizontal informasi" role="form" style="margin-top:25px;">

					<div class="form-group" >
						<label class="control-label col-md-3">Tanggal</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-3">Unit </label>
	            		<div class="col-md-2">
							<input type="text" class="form-control" id="unit" name="unit" placeholder="Unit" />
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-3">Petugas </label>
	            		<div class="col-md-2">
							<input type="text" class="form-control" id="pet" name="pet" placeholder="Petugas" />
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-3">Uraian </label>
	            		<div class="col-md-4">
							<textarea class="form-control" placeholder="Uraian"></textarea>
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-3">Status </label>
	            		<div class="col-md-2">
							<select class="form-control select" name="Status" id="satus" >
								<option value="" selected>Pilih</option>
								<option value="Selesai" >Selesai</option>
								<option value="Belum Selesai">Belum Selesai </option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-3"></div>
						<div class="col-md-3" style="margin-bottom:10px;margin-right:18px;">
							<button class="btn btn-danger">Batal</button>							
							<button class="btn btn-success">Simpan</button>
						</div>
					</div>
				</form>
			</div>
			<br>

			<div class="dropdown" id="rwp2">
	            <div id="titleInformasi">Penggunaan Logistik</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	        </div>
	        <div class="tabelinformasi" id="tblrwp2">
	        	<a href="#modaltmbpenglog" data-toggle="modal" style="margin-left:20px;"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tamah Penggunaan Logistik">&nbsp;Tambah</i></a>
				<div class="clearfix"></div>

	        	<div class="portlet-body" style="margin: 0px 20px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive" >
						<thead>
							<tr class="info">
								<th style="text-align:center; width:20px;">No. </th>
								<th>Nama Barang</th>
								<th>Stok Unit</th>
								<th>Qty Pemakaian</th>
								<th>Satuan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="5" style="text-align:center">No Data (akses ke table logistik id.ipsrs)</td>										
							</tr>
						</tbody>
					</table>
				</div>	

				<div class="modal fade" id="modaltmbpenglog" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
		        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        				<h3 class="modal-title" id="myModalLabel">Tambah Penggunaan Logistik</h3>
		        			</div>
		        			<div class="modal-body">
		        			Blm tau isi apa 
		        			</div>
		        			<div class="modal-footer">
		 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
		 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
					      	</div>
						</div>
					</div>
				</div>
	        </div>
	        <br>

	        <div class="dropdown" id="btnBawahRetDistributor" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Riwayat Kegiatan</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div> 
            <div class="tabelinformasi" id="infoRetDistributor">
            	<div class="pull-right" style="margin-right:40px;">
					<ul class="pagination">
						<li class="disabled"><a href="#"><i class="fa fa-angle-left" style="height:5px;"></i></a></li>
						<li class="paginate-button active"><a href="#">1</a></li>
						<li class="paginate-button"><a href="#">2</a></li>
						<li class="paginate-button"><a href="#">3</a></li>
						<li class="paginate-button"><a href="#">4</a></li>
						<li class="paginate-button"><a href="#">5</a></li>
						<li><a href="#"><i class="fa fa-angle-right" style="height:5px;"></i></a></li>
					</ul>
				</div>

            	<div class="form-group informasi">
					<label class="control-label col-md-2" style="margin-left:70px;"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter By : 
					</label>
					<div class="col-md-2">
						<input type="text" class="form-control" id="unit" name="unit" placeholder="Unit Peminta"/>
					</div>
					
					<div class="col-md-2">
						<select class="form-control select" name="Status" id="satus" >
							<option value="" selected>Pilih Status</option>
							<option value="Selesai">Selesai </option>
							<option value="Belum Selesai">Belum Selesai </option>
						</select>
					</div>
					<div class="col-md-2" style="margin-left:0px">
						<button type="submit" class="btn btn-warning">Filter</button>
					</div>
				</div>
				
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 25px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive">
							<thead>
								<tr class="info" >
									<th style="width:30px"> No.</th>
									<th  style="text-align:left"> Tanggal </th>
									<th  style="text-align:left"> Unit </th>
									<th  style="text-align:left"> Petugas </th>
									<th  style="text-align:left"> Status </th>
									<th  style="text-align:left;width:30px;"> Action </th>
								</tr>
							</thead>
							<tbody>
								<tr>	
									<td>1</td>
									<td>12 Desember 2012</td>
									<td>Bebas</td>
									<td>Bebas</td>
									<td>Bebas</td>
									<td style="text-align:center">
										<a href="#" data-toggle="modal" data-target="#detriwayat"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="View Detail">
										</i></a>	
									</td>						
								</tr>
							</tbody>
						</table>
					</div>					
				</div>

				<div class="modal fade" id="detriwayat" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
		        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Kegiatan</h3>
		        			</div>
		        			<div class="modal-body">
			        			<form class="form-horizontal" role="form" style="margin-left:30px;">
									<div class="form-group">
			        					<label class="control-label col-md-3" >Tanggal 
										</label>
										<div class="col-md-4" >
						         			<div class="input-icon">
												<i class="fa fa-calendar"></i>
												<input type="text" style="cursor:pointer;" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
											</div>
										</div>
									</div>
									<div class="form-group">
			        					<label class="control-label col-md-3" >Unit
										</label>
										<div class="col-md-4" >
						         			<input type="text" class="form-control" placeholder="Unit">
										</div>
									</div>

									<div class="form-group">
			        					<label class="control-label col-md-3" >Petugas
										</label>
										<div class="col-md-4" >
						         			<input type="text" class="form-control" placeholder="Petugas">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3" >Status
										</label>
										<div class="col-md-4" >
						         			<select class="form-control" name="Status" id="satus" >
												<option value="Selesai" selected>Selesai </option>
												<option value="Belum Selesai">Belum Selesai </option>
											</select>
										</div>
									</div>
								</form>
							</div>

		        			<div class="modal-footer">
		 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
		 			       		<button type="button" class="btn btn-success" id="btnedit">Edit</button>
		 			       		<button type="button" class="btn btn-success" id="btnsimpan">Simpan</button>
					      	</div>
						</div>
					</div>
				</div>
            </div>
            <br>
		</div>

		<div class="tab-pane" id="logistik">
		</div>

		<div class="tab-pane" id="laproan">
		</div>

	</div>
</div>