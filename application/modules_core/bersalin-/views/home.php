
<div class="title">
	PASIEN BERSALIN
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>bersalin/homebersalin">Pasien Bersalin</a>
		</li>
	
</div>
<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	   	<li class="active"><a href="#list" data-toggle="tab">List Pasien Bersalin</a></li>
	    <li><a href="#kamar" data-toggle="tab">Data Kamar</a></li>
	    <li><a href="#farmasi" data-toggle="tab">Farmasi</a></li>
	    <li><a href="#logistik" data-toggle="tab">Logistik</a></li>
	    <li><a href="#laporan" data-toggle="tab">Laporan</a></li>
	    <li><a href="#master" data-toggle="tab">Master</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">

		<div class="tab-pane active" id="list">
			<form method="post" id="search_bersalin">
		       	<div class="search">
					<label class="control-label col-md-3">Nama Pasien / Rekam Medis<span class="required" style="color : red">* </span>
					</label>
					<div class="col-md-4">		
						<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
			        </div>
			        <button type="submit" class="btn btn-danger">Cari</button>
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
								<th> Nomor Rekam Medis </th>
								<th> Nama Lengkap </th>
								<th> Jenis Kelamin </th>
								<th> Tanggal Lahir </th>
								<th> Alamat Tinggal </th>
								<th> Identitas </th>
								<th> Periksa</th>
							</tr>
						</thead>
						<tbody id="t_body">
							<tr>
								<td colspan="7"><center>Cari Data Pasien Poli Bersalin</center></td>						
							</tr>
						</tbody>
					</table>
				</div>
			</div>  
	    </div>

        <div class="tab-pane" id="kamar">        
        </div>

        <div class="tab-pane" id="farmasi">
        	<div class="dropdown" id="btnBawahInventori" >
	            <div id="titleInformasi">Inventori</div>
	            <div id="btnBawahInventori" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div id="infoInventori">
	            	<div class="form-group">
		            	<form class="form-horizontal informasi" role="form" method="post" id="submitfilterfarmasiunit">
			            	<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
							</label>
							<div class="col-md-2" style="width:200px">
								<select class="form-control select" name="filterInv" id="filterInv">
									<option value="jenis" selected>Jenis Obat</option>
									<option value="merek">Merek</option>
									<option value="nama">Nama Obat</option>							
								</select>	
							</div>
							<div class="col-md-2" style="margin-left:-15px; width:200px;" >
								<input type="text" class="form-control" id="filterby" name="valfilter" placeholder="Value"/>
							</div>
							<div class="col-md-1" >
								<button type="submit" class="btn btn-danger">FILTER</button> 
							</div>
						</form>
						<div class="col-md-1" >
							<button class="btn btn-danger" id="expired">EXPIRED</button> 
						</div>
						<div class="col-md-1" >
							<button class="btn btn-warning" id="expired3">EX 3 BULAN</button>
						</div>
						<div class="col-md-1" style="margin-left: 20px;">
							<button class="btn btn-warning" id="expired6">EX 6 BULAN</button>
						</div>
					</div>
					<br>
				
				<div class="form-group" >
					<div class="portlet-body" style="margin: 50px 50px 0px 40px">
						<table class="table table-striped table-bordered table-hover table-responsive" id="tabelinventoriunit">
							<thead>
								<tr class="info">
									<th width="20">No.</th>
									<th> Nama Obat </th>
									<th> No Batch </th>
									<th> Harga Jual </th>
									<th> Merek </th>
									<th> Stok</th>
									<th> Satuan </th>
									<th width="150"> Tanggal Kadaluarsa </th>
									<th width="80"> Action </th>
								</tr>
							</thead>
							<tbody id="tbodyinventoriunit">
								<?php  
									if (isset($obatunit)) {
										$i = 1;
										foreach ($obatunit as $value) {
											$tgl = DateTime::createFromFormat('Y-m-d', $value['tgl_kadaluarsa']);
											echo '<tr>'.
												'<td>'.($i++).'</td>'.
												'<td>'.$value['nama'].'</td>'.
												'<td>'.$value['no_batch'].'</td>'.
												'<td>'.$value['harga_jual'].'</td>'.
												'<td>'.$value['nama_merk'].'</td>'.
												'<td>'.$value['total_stok'].'</td>'.
												'<td>'.$value['satuan'].'</td>'.								
												'<td>'.$tgl->format('d F Y').'</td>'.
												'<td><a href="#" class="inoutobat" data-toggle="modal" data-target="#inout"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'.
												'<a href="#edInvenBer" data-toggle="modal" class="printobat"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>'.
												'<input type="hidden" class="barangmerk_id" value="'.$value['merk_id'].'">'.
												'<input type="hidden" class="barangjenis_obat_id" value="'.$value['jenis_obat_id'].'">'.
												'<input type="hidden" class="barangsatuan_id" value="'.$value['satuan_id'].'">'.
												'<input type="hidden" class="barangobat_dept_id" value="'.$value['obat_dept_id'].'">'.
											'</td></tr>';
										}
									}
								?>
							</tbody>
						</table>
					</div>
					<br>
					<div class="pull-right" >
						<button class="btn btn-info " style="margin-right:50px;">PRINT</button> 
					</div>
				</div>
				<br><br>
	        </div>
			<div class="modal fade" id="inout" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<form class="form-horizontal informasi" role="form" method="post" id="submitinoutunit">
					<div class="modal-dialog">
						<div class="modal-content" >
							<div class="modal-header">
		        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        				<h3 class="modal-title" id="myModalLabel">IN OUT</h3>
		        			</div>
		        			<div class="modal-body">
			        			<div class="form-group">
		        					<label class="control-label col-md-3" >Tanggal 
									</label>
									<div class="col-md-4" >
						         		<div class="input-icon">
											<i class="fa fa-calendar"></i>
											<input type="text" style="cursor:pointer;" id="tglInOut" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3" >In / Out 
									</label>
									<div class="col-md-4">
						         		<select class="form-control select" name="iober" id="iober">
											<option value="IN" selected>IN</option>
											<option value="OUT">OUT</option>					
										</select>
									</div>	
								</div>
								<div class="form-group">
		        					<label class="control-label col-md-3" >Jumlah </label>
									<div class="col-md-4" >
					         			<input type="text" class="form-control" id="jmlInOutBer" name="jmlInOutBer" placeholder="Jumlah">
									</div>
								</div>
								<div class="form-group">
		        					<label class="control-label col-md-3" >Sisa Stok </label>
									<div class="col-md-4" >
					         			<input type="text" class="form-control" id="sisaInOutBer" name="sisaInOutBer" placeholder="Sisa Stok" readonly="">
									</div>
								</div>
								<div class="form-group">
		        					<label class="control-label col-md-3" >Keterangan </label>
									<div class="col-md-6" >
										<textarea class="form-control" id="keteranganIO" placeholder="Keterangan"></textarea>
									</div>
								</div>
		        			</div>
		        			<div class="modal-footer">
		        				<input type="hidden" id="inout_obat_dept_id">
		        				<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
		 			       		<button type="submit" class="btn btn-success">Simpan</button>
					      	</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal fade" id="edInvenBer" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content" >
							<div class="modal-header">
		        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        				<h3 class="modal-title" id="myModalLabel">Riwayat</h3>
		        			</div>
		        			<div class="modal-body">
		        			<form class="form-horizontal" role="form">
				            	<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven">
									<thead>
										<tr class="info" >
											<th  style="text-align:center"> Waktu </th>
											<th  style="text-align:left"> IN / OUT </th>
											<th  style="text-align:left"> Jumlah </th>
											<th  style="text-align:left"> Stok Akhir </th>
										</tr>
									</thead>
									<tbody id="tbodydetailobatinventori">
										<tr>
											<td colspan="4" style="text-align:center">Tidak ada Detail</td>
										</tr>
									</tbody>
								</table>
							</form>
		        			</div>
		        			<div class="modal-footer">
		 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
					      	</div>
						</div>
					</div>
			</div>

			<div class="dropdown" id="btnBawahMintaObat">
	            <div id="titleInformasi">Permintaan Farmasi</div>
	            <div id="btnBawahMintaObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <div id="infoMintaObat">
            	<form class="form-horizontal" role="form" method="post" id="permintaanfarmasibersalin">
	            	<div class="informasi">
	            		<br>
	        			<div class="form-group">
	        				<div class="col-md-2">
	        					<label class="control-label">Nomor Permintaan</label>
	        				</div>
	        				<div class="col-md-3">
	        					<input type="text" class="form-control" name="noPermFarmBers" id="noPermFarmBers" placeholder="Nomor Permintaan"/>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-2">
	        					<label class="control-label">Tanggal Permintaan</label>
	        				</div>
	        				<div class="col-md-2">
	        					<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" id="tglpermintaanfarmasi" class="form-control" data-date-format="dd/mm/yyyy H:i" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i");?>">
								</div>
							</div>
	        			</div>
	        			<div class="form-group">
	        				<div class="col-md-2">
	        					<label class="control-label">Keterangan</label>
	        				</div>
	        				<div class="col-md-3">	
								<textarea class="form-control" id="ketObatFarBers" name="ketObatFarBers"></textarea>	
							</div>
	        			</div>
	        		</div>
					<a href="#modalMintaFarBers" data-toggle="modal"><i class="fa fa-plus" style="margin-left:40px;font-size:11pt;">&nbsp;Tambah Obat</i></a>
					<div class="clearfix"></div>

					<div class="portlet box red">
						<div class="portlet-body" style="margin: 10px 40px 0px 40px">
							<table class="table table-striped table-bordered table-hover table-responsive" id="tabApo">
								<thead>
									<tr class="info" >
										<!-- <th width="20"> No. </th> -->
										<th> Nama Obat </th>
										<th> Satuan </th>
										<th> Merek </th>
										<th> Stok Unit </th>
										<th> Jumlah Diminta </th>
										<th width="80"> Action </th>			
									</tr>
								</thead>
								<tbody  id="addinputMintaFar" class="addKosong">
								</tbody>
							</table>
						</div>
						<div class="form-group" style="margin-top:30px;">
							<div class="col-md-2 pull-right"> 				 
								<button class="btn btn-warning" type="button" id="batalpermintaanfarmasi">RESET</button>
								<button class="btn btn-success" type="submit">SIMPAN</button>
							</div>
						</div>
					</div>	
				</form>
			</div>	    
			<br>
			<div class="modal fade" id="modalMintaFarBers" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
	        			</div>
	        			<div class="modal-body">

		        			<div class="form-group">
		        				<form method="post" class="form-horizontal" role="form" id="formobatfarmasibersalin">
									<div class="form-group">	
										<div class="col-md-5" style="margin-left:20px;">
											<input type="text" class="form-control" name="katakunci" id="katakuncifarmasibersalin" placeholder="Nama Obat"/>
										</div>
										<div class="col-md-2">
											<button type="submit" class="btn btn-info">Cari</button>
										</div>
										<br><br>	
									</div>		
								</form>
								<div style="margin-right:10px;margin-left:10px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 20px 0px 15px">
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="font-size:99%">
										<thead>
											<tr class="info">
												<th>Nama Obat</th>
												<th>Satuan</th>
												<th>Merek</th>
												<th>Stok Gudang</th>
												<th>Tgl Kadaluarsa</th>
												<th width="10%">Pilih</th>
											</tr>
										</thead>
										<tbody id="tbodyobatpermintaanfarmasi">
											<tr>
												<td colspan="6" style="text-align:center">Cari data Obat</td>
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
			
	           	
	       	<div class="dropdown" id="btnBawahRetDepartemen">
	            <div id="titleInformasi">Retur Farmasi</div>
	            <div id="btnBawahRetFarmasi" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
           	<div id="infoRetDepartemen">
            	<form class="form-horizontal" role="form" method="post" id="formsubmitreturbersalin">
            		<div class="informasi">
            			<br>
            			<div class="form-group">
            				<div class="col-md-2">
            					<label class="control-label">Nomor Retur</label>
            				</div>
            				<div class="col-md-3">
            					<input type="text" class="form-control" name="noRetFarBers" id="noRetFarBers" placeholder="Nomor Retur"/>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-2">
            					<label class="control-label">Tanggal Retur</label>
            				</div>
            				<div class="col-md-2">
            					<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" class="form-control" id="waktureturbersalin" data-date-format="dd/mm/yyyy H:i" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y H:i");?>">
								</div>
							</div>
            			</div>
            			<div class="form-group">
							<div class="col-md-2">
            					<label class="control-label">Keterangan</label>
            				</div>
            				<div class="col-md-3">
								<textarea class="form-control" id="ketObatRetFarBers" name="ketObatRetFarBers"></textarea>	
							</div>
            			</div>
            		</div>

            		<a href="#modalRetFarBers" data-toggle="modal"><i class="fa fa-plus" style="margin-left : 40px;font-size:11pt;">&nbsp;Tambah Obat</i></a>
					<div class="clearfix"></div>
					
					<div class="portlet box red">
						<div class="portlet-body" style="margin: 10px 40px 0px 40px">
						
							<table class="table table-striped table-bordered table-hover table-responsive" id="tabRetur">
								<thead>
									<tr class="info" >
										<th > Nama Obat </th>
										<th > Tanggal Kadaluarsa</th>
										<th > Satuan </th>
										<th > Merek </th>
										<th > Stok Unit </th>
										<th > Jumlah Retur </th>
										<th width="80"> Action </th>			
									</tr>
								</thead>
								<tbody  id="addinputRetFar" class="addKosong">
								</tbody>
							</table>
						</div>
						<div class="form-group" style="margin-top:30px;">
							<div class="col-md-2 pull-right"> 				 
								<button class="btn btn-warning" type="button" id="batalreturfarmasi">RESET</button>
								<button class="btn btn-success" type="submit">SIMPAN</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal fade" id="modalRetFarBers" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
	        			</div>
	        			<div class="modal-body">
		        			<div class="form-group">
		        				<form method="post" role="form" class="form-horizontal" id="formsearchobatretur">
									<div class="form-group">	
										<div class="col-md-5" style="margin-left:20px;">
											<input type="text" class="form-control" name="katakunci" id="katakuncireturbersalin" placeholder="Nama petugas"/>
										</div>
										<div class="col-md-2">
											<button type="submit" class="btn btn-info">Cari</button>
										</div>
										<br><br>	
									</div>
								</form>
								<div style="margin-left:10px; margin-right:10px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 20px 0px 15px">
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa">
										<thead>
											<tr class="info">
												<td>Nama Obat</td>
												<td>Satuan</td>
												<td>Merek</td>
												<td>Stok Unit</td>
												<td>Tgl Kadaluarsa</td>
												<td width="10%">Pilih</td>
											</tr>
										</thead>
										<tbody id="tbodyreturbersalin">
											<tr>
												<td style="text-align:center" colspan="6">Cari data Obat</td>
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
			<br>
	    </div>


        <div class="tab-pane" id="logistik">
        	<div class="modal fade" id="modalbarang" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Barang</h3>
	        			</div>
	        			<div class="modal-body">

		        			<div class="form-group">
		        				<form method="post" class="form-horizontal" role="form" id="formmintabarang">
									<div class="form-group">	
										<div class="col-md-5" style="margin-left:20px;">
											<input type="text" class="form-control" name="katakunci" id="katakuncimintabarang" placeholder="Nama barang"/>
										</div>
										<div class="col-md-2">
											<button type="submit" class="btn btn-info">Cari</button>
										</div>
										<br><br>	
									</div>		
								</form>
								<div style="margin-right:10px;margin-left:10px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 20px 0px 15px">
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="font-size:99%">
										<thead>
											<tr class="info">
												<th>Nama Barang</th>
												<th>Satuan</th>
												<th>Merek</th>
												<th>Tahun Pengadaan</th>
												<th>Stok Gudang</th>
												<th width="10%">Pilih</th>
											</tr>
										</thead>
										<tbody id="tbodybarangpermintaan">
											<tr>
												<td colspan="6" style="text-align:center">Cari data Barang</td>
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
	        <div id="infoPermintaanBarang">
	           	<form class="form-horizontal" role="form" method="post" id="permintaanbarangunit">
	            	<div class="informasi">
	            		<br>
	        			<div class="form-group">
	        				<div class="col-md-2">
	        					<label class="control-label">Nomor Permintaan</label>
	        				</div>
	        				<div class="col-md-3">
	        					<input type="text" class="form-control" name="noPermFarmBers" id="nomorpermintaanbarang" placeholder="Nomor Permintaan"/>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-2">
	        					<label class="control-label">Tanggal Permintaan</label>
	        				</div>
	        				<div class="col-md-2">
	        					<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" id="tglpermintaanbarang" class="form-control" data-date-format="dd/mm/yyyy H:i" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i");?>">
								</div>
							</div>
	        			</div>
	        			<div class="form-group">
	        				<div class="col-md-2">
	        					<label class="control-label">Keterangan</label>
	        				</div>
	        				<div class="col-md-3">	
								<textarea class="form-control" id="keteranganpermintaanbarang" name="ketObatFarBers"></textarea>	
							</div>
	        			</div>
	        		</div>
					<a href="#modalbarang" data-toggle="modal"><i class="fa fa-plus" style="margin-left:40px;font-size:11pt;">&nbsp;Tambah Barang</i></a>
					<div class="clearfix"></div>

					<div class="portlet box red">
						<div class="portlet-body" style="margin: 10px 40px 0px 40px">
							<table class="table table-striped table-bordered table-hover table-responsive" id="tabApo">
								<thead>
									<tr class="info" >
										<th> Nama Barang </th>
										<th> Satuan </th>
										<th> Merek </th>
										<th> Tahun Pengadaan </th>
										<th> Stok Unit </th>
										<th> Stok Gudang </th>
										<th> Jumlah Diminta </th>
										<th width="80"> Action </th>			
									</tr>
								</thead>
								<tbody  id="addinputmintabarang">
									<?php echo '<tr><td colspan="8" style="text-align:center" class="dataKosong">DATA KOSONG</td></tr>'; ?>
								</tbody>
							</table>
						</div>
						<div class="form-group" style="margin-top:30px;">
							<div class="col-md-2 pull-right"> 				 
								<button class="btn btn-warning" type="button" id="batalpermintaanfarmasi">RESET</button>
								<button class="btn btn-success" type="submit">SIMPAN</button>
							</div>
						</div>
					</div>	
				</form>
	        </div>
	    </div>

        <div class="tab-pane" id="laporan">        
        </div>

        <div class="tab-pane" id="master">        
        </div>

        <div class="modal fade" id="petugas" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        		<h3 class="modal-title" id="myModalLabel">Pilih Petugas</h3>
		        	</div>
		        	<div class="modal-body">
			        	<div class="form-group">
							<div class="form-group">	
								<div class="col-md-5">
									<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-info">Cari</button><br>
								</div>	
							</div>		
							<br>	
							<div style="margin-left:5px; margin-right:5px;"><br><hr></div>
							<div class="portlet-body" style="margin: 0px 10px 0px 10px">
								<table class="table table-striped table-bordered table-hover" id="tabelSearchPetugas">
									<thead>
										<tr class="warning">
											<td>Nama Petugas</td>
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
    </div>

</div>

			