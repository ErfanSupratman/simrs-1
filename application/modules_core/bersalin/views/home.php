
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
	    <li><a href="#tagihan" data-toggle="tab">Tagihan</a></li>
	    <li><a href="#dipulangkan" data-toggle="tab">Pasien Dipulangkan</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">

		<div class="tab-pane active" id="list">
	       	<form method="POST" id="search_submit">
		       	<div class="search">
					<label class="control-label col-md-3">
						<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
					</label>
					<div class="col-md-4">		
						<input type="text" id="search_bersalin" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
			        </div>
			        <button type="submit" class="btn btn-danger">Cari</button>
				</div>	
			</form>
			<br>
			<hr class="garis"><br>

			<div class="portlet box red">
				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
						<thead>
							<tr class="info">
								<th style="text-align:center;width:20px;">No.</th>
								<th> Nomor Rekam Medis </th>
								<th> Nama Lengkap </th>
								<th> Jenis Kelamin </th>
								<th> Tanggal Lahir </th>
								<th> Alamat Tinggal </th>
								<th> Unit Pengirim </th>
								<th style="width:30px"> Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i = 0;
								foreach ($pasien_bersalin as $data) {
									$i++;
									$tgl = strtotime($data['tanggal_lahir']);
									$hasil = date('d F Y', $tgl); 

									echo ' 
										<tr>
											<td>'.$i.'</td>
											<td>'.$data['rm_id'].'</td>
											<td>'.$data['nama'].'</td>
											<td>'.$data['jenis_kelamin'].'</td>
											<td style="text-align:center">'.$hasil.'</td>									
											<td>'.$data['alamat_skr'].'</td>
											<td>Admisi</td>
											<td style="text-align:center">
												<a href="bersalindetail/daftar/'.$data['ri_id'].'/'.$data['visit_id'].'"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Pemeriksaan"></i></a>
											</td>										
										</tr>
									';
								}
							?>
							
						</tbody>
					</table>
				</div>
			</div>  
	    </div>

        <div class="tab-pane" id="kamar">       
        	<div class="portlet-body" style="margin: 0px 10px 0px 10px">
				<table class="table table-striped table-bordered table-hover tabelinformasi tableDT" id="tabelSearchPengirim">
					<thead>
						<tr class="info">
							<th width="20">No.</th>
							<th>Kamar</th>
							<th>Kelas</th>
							<th>Jumlah Bed</th>
							<th>Terpakai</th>
							<th>Tersedia</th>
							<th width="10%" style="text-align:center;">Pilih</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Melati</td>
							<td>Kelas I</td>
							<td>2</td>
							<td>0</td>
							<td>2</td>
							<td style="text-align:center;">
								<a href="#detkamar" data-toggle="modal">
								<i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="View"></i></a>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Mawar</td>
							<td>Kelas III</td>
							<td>2</td>
							<td>1</td>
							<td>1</td>
							<td style="text-align:center;">
								<a href="#detkamar" data-toggle="modal">
								<i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="View"></i></a>
							</td>
						</tr>
					</tbody>
				</table>												
			</div>

			<div class="modal fade" id="detkamar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Ini Nama Kamar</h3>
				   			</div>
							<div class="modal-body">

								<div class="portlet-body" style="margin: 0px 10px 0px 10px">
									<table class="table table-striped table-bordered table-hover table-responsive">
										<thead>
											<tr class="info">
												<th width="20">No.</th>
												<th> Nomor Bed</th>
												<th> Status</th>
												<th> Pasien</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>BED 1</td>
												<td>Terpakai</td>
												<td>Krishna</td>	
											</tr>
											<tr>
												<td>2</td>
												<td>BED 2</td>
												<td>Terpakai</td>
												<td>Jems</td>	
											</tr>
										</tbody>
									</table>
								</div>

								<!-- <div class="informasi">
									<form class="form-horizontal" role="form">
										<div class="form-group">
											<h4>BED 1</h4>
											<div class="form-group">
												<label class="control-label col-md-3">Status </label>
												<div class="col-md-4">
													<input style="border:0px;background-color:transparent;font-weight:bold" id="status" name="status" value="Terpakai" disabled />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3">Pasien </label>
												<div class="col-md-4">
													<input style="border:0px;background-color:transparent;font-weight:bold" id="alias" name="pasien" value="Ny. Krisna" disabled />
												</div>
											</div>
										</div>

										<div class="form-group">
											<h4>BED 2</h4>
											<div class="form-group">
												<label class="control-label col-md-3">Status </label>
												<div class="col-md-4">
													<input style="border:0px;background-color:transparent;font-weight:bold" id="status" name="status" value="Terpakai" disabled />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3">Pasien </label>
												<div class="col-md-4">
													<input style="border:0px;background-color:transparent;font-weight:bold" id="alias" name="pasien" value="Ny. Jems" disabled />
												</div>
											</div>
										</div>
									</form>
			        			</div> -->
			       			</div>
			        		<br>
			        		<div class="modal-footer">
			 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
						    </div>
					</div>
				</div>
			</div>
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
				<br><br>
				<div class="form-group" >
					<div class="portlet-body" style="margin: 10px 50px 0px 40px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabelinventoriunit">
							<thead>
								<tr class="info">
									<th width="20">No.</th>
									<th> Nama Obat </th>
									<th> No Batch </th>
									<th> Harga Jual </th>
									<th> Merek </th>
									<th> Stok</th>
									<th> Satuan </th>
									<th width="200"> Tanggal Kadaluarsa </th>
									<th width="100"> Action </th>								
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
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="font-size:99%;">
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
									<input type="text" style="cursor:pointer;" class="form-control" id="waktureturbersalin" data-date-format="dd/mm/yyyy H:i" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i");?>">
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
	       	<div class="dropdown" id="btnBawahInventoriBarang">
	            <div id="titleInformasi">Inventori</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <div id="infoInventoriBarang">
				
				<div class="form-group" >
					<div class="portlet-body" style="margin: 30px 50px 20px 40px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="tblinventorigudangunit">
							<thead>
								<tr class="info" >
									<th width="20">No.</th>
									<th > Nama Barang </th>
									<th > Merek </th>
									<th > Harga </th>
									<th > Stok </th>
									<th > Satuan </th>
									<th > Tahun Pengadaan</th>
									<th > Sumber Dana</th>
									<th width="100"> Action </th>

								</tr>
							</thead>
							<tbody id="tbodyinventoribarang">
								<?php 
									if (isset($inventoribarang)) {
										if (!empty($inventoribarang)) {
											$i = 1;
											foreach ($inventoribarang as $value) {
												echo '<tr>
														<td>'.($i++).'</td>
														<td>'.$value['nama'].'</td>
														<td>'.$value['nama_merk'].'</td>
														<td>'.$value['harga'].'</td>
														<td>'.$value['stok'].'</td>
														<td>'.$value['satuan'].'</td>
														<td>'.$value['tahun_pengadaan'].'</td>
														<td>'.$value['sumber_dana'].'</td>
														<td style="text-align:center">
															<input type="hidden" class="barang_detail_inout" value="'.$value['barang_detail_id'].'">
															<a href="#inoutbar" data-toggle="modal" class="edBarang" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
															<a href="#edInvenBerBar" data-toggle="modal" class="detailinvenbarang"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
														</td>
													</tr>';
											}
										}
									}
								?>
									
							</tbody>
						</table>
					</div>
					<div class="pull-right" >
						<button class="btn btn-info " style="margin-right:50px">PRINT</button> 
					</div>
					<br><br>
	        	</div>
	        </div>
			<div class="modal fade" id="inoutbar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<form class="form-horizontal" role="form" style="margin-left:30px;" id="forminoutbarang">
						<div class="modal-content" >
							<div class="modal-header">
		        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        				<h3 class="modal-title" id="myModalLabel">IN OUT</h3>
		        			</div>
		        			<div class="modal-body">
			        			<div class="form-group">
			        				<label class="control-label col-md-3" >Tanggal </label>
									<div class="col-md-6" >
						         		<div class="input-icon">
											<i class="fa fa-calendar"></i>
											<input type="text" style="cursor:pointer;" id="tanggalinout" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy H:i" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i");?>">
									</div>
								</div>
										
								</div>
								<div class="form-group">
									<label class="control-label col-md-3" >In / Out </label>
									<div class="col-md-6">
						         		<select class="form-control select" name="io" id="io">
											<option value="IN" selected>IN</option>
											<option value="OUT">OUT</option>					
										</select>
									</div>
								</div>
								<div class="form-group">
			        				<label class="control-label col-md-3" >Jumlah in/out</label>
									<div class="col-md-6" >
						         		<input type="text" class="form-control" id="jmlInOut" name="jmlInOut" placeholder="Jumlah">
									</div>
								</div>
								<div class="form-group">
			        				<label class="control-label col-md-3" >Sisa Stok </label>
									<div class="col-md-6" >
						         		<input type="text" class="form-control" id="sisaInOut" name="sisaInOut" placeholder="Sisa Stok" readonly>
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
		        				<input type="hidden" id="id_barang_inoutprocess">
		 			       		<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
		 			       		<button type="submit" class="btn btn-success">Simpan</button>
					      	</div>
						</div>
					</form>
				</div>
			</div>
			<div class="modal fade" id="edInvenBerBar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
											<th> Waktu </th>
											<th> IN / OUT </th>
											<th> Jumlah </th>
											<th> Keterangan </th>
										</tr>
									</thead>
									<tbody id="tbodydetailbrginventori">
										<tr>
											<td colspan="4" style="text-align:center">Tidak ada detail in-out</td>
										</tr>
											
									</tbody>
								</table>
							</form>
							
	        			</div>
	        			<div class="modal-footer">
	 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				      	</div>
					</div>
				</div>
			</div>
			<br>

			<div class="dropdown" id="btnBawahPermintaanBarang" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Permintaan Logistik</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
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
								<button class="btn btn-warning" type="reset" id="batalpermintaanfarmasi">RESET</button>
								<button class="btn btn-success" type="submit">SIMPAN</button>
							</div>
						</div>
					</div>	
				</form>
			</div>	    
			<br>
	    </div>
	    

        <div class="tab-pane" id="laporan"> 
	        <div class="informasi" id="sensusharian">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Regiser Harian</div>
        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
        		
	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
				
	        			<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
	        			<div class="input-group col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;background-color:white;" class="form-control isian" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 pull-right">
								<button class="btn btn-info ">Simpan ke Excel(.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>  

        	<div class="informasi" id="sensusharian">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Sensus Harian</div>
        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
        		
	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
				
	        			<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
	        			<div class="input-group col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;background-color:white;" class="form-control isian" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 pull-right">
								<button class="btn btn-info ">Simpan ke Excel(.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>  

			<div class="informasi" id="sensusharian">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Sensus Bulanan</div>
        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
        		
	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
				
	        			<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
	        			<div class="input-group col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;background-color:white;" class="form-control isian" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 pull-right">
								<button class="btn btn-info ">Simpan ke Excel(.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>
       
	        <br>
        </div>

        <div class="tab-pane" id="master">        
        </div>

        <div class="tab-pane" id="tagihan"> 
        	<form method="POST" id="search_submit">
		       	<div class="search">
					<label class="control-label col-md-3" style="margin-top:5px;">
						<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
					</label>
					<div class="col-md-4">		
						<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
			        </div>
			        <button type="submit" class="btn btn-danger">Cari</button>&nbsp;&nbsp;&nbsp;
			        <a href="<?php echo base_url() ?>bersalin/tambahtagihan" data-toggle="modal" class="btn btn-warning"> Tambah Invoice Baru</a>
				</div>	
			</form>
			<br>
			<hr class="garis">

			<div class="portlet box red">
				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
						<thead>
							<tr class="info">
								<th style="text-align:center;width:20px;">No.</th>
								<th>Unit</th>
								<th>Nomor Invoice</th>
								<th>Nomor Visit</th>
								<th>Nomor RM</th>
								<th>Nama Pasien</th>
								<th>Alamat</th>
								<th>Cara Bayar</th>
								<th style="text-align:center;width:25px;">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Bersalin</td>
								<td>1212121</td>
								<td>32323</td>	
								<td>123123</td>									
								<td>Selena</td>
								<td>Rumahnya</td>
								<td>Ansuransi</td>
								<td style="text-align:center">
									<a href="<?php echo base_url() ?>bersalin/tagihannonbpjs" ><i class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Tambah Tagihan"></i></a>
								</td>										
							</tr>
							<tr>
								<td>2</td>
								<td>Bersalin</td>
								<td>1212121</td>
								<td>32323</td>	
								<td>123123</td>									
								<td>Jems</td>
								<td>Rumahnya</td>
								<td>BPJS</td>
								<td style="text-align:center">
									<a href="<?php echo base_url() ?>bersalin/tagihanbpjs" ><i class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Tambah Tagihan"></i></a>
								</td>										
							</tr>
						</tbody>
					</table>
				</div>			
			</div> 

        </div>
        

        <div class="tab-pane" id="dipulangkan">
        	<div class="dropdown" id="">
		 	  	<div id="titleInformasi" >List Pasien Yang Belum Pulang </div>
		    </div>

		    <div class="portlet-body" style="margin: 0px 10px 0px 10px">
				<table class="table table-striped table-bordered table-hover tableDT" id="listygblmpulang">
					<thead>
						<tr class="info">
							<th width="20">No.</th>
							<th>Kamar</th>
							<th>Bed</th>
							<th>Nomor Visit</th>
							<th>Nomor RM</th>
							<th>Nama Pasien</th>
							<th>Alamat</th>
							<th width="50">Action</th>
						</tr>
					</thead>
					<tbody id="tbody_resep">
						<tr>
							<td width="20">No.</td>
							<td>Melati </td>
							<td>2F</td>
							<td style="text-align:right">1212</td>
							<td style="text-align:right">3123</td>
							<td>Bajigur</td>
							<td>Rumahnya</td>
							<td style="text-align:center">
								<a href="#">
								<i class="glyphicon glyphicon-log-out" data-toggle="tooltip" data-placement="top" title="Pulangkan"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
        </div>
    </div>

</div>

<script type="text/javascript">
	$(document).ready(function(){

		$('#search_submit').submit(function(e){
			var data = {};
			data['search'] = $('#search_bersalin').val();
			var admisi = 'Admisi';

			e.preventDefault();
			$.ajax({
				type:'POST',
				data:data,
				url:'<?php echo base_url(); ?>bersalin/homebersalin/search_pasien',
				success:function(data){
					console.log(data);
					var t = $('.tableDTUtama').DataTable();

					t.clear().draw();

					for(var i=0; i<data.length; i++){
						var rm = data[i]['rm_id'],
							nama = data[i]['nama'],
							jk = data[i]['jenis_kelamin'],
							tgl = data[i]['tanggal_lahir'],
							alamat = data[i]['alamat_skr'];
						var last = '<a href="<?php echo base_url() ?>bersalin/bersalindetail/daftar/'+data[i]['ri_id']+'/'+data[i]['visit_id']+'" ><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Pemeriksaan"></i></a>';
						t.row.add([
							i+1,
							rm,
							nama,
							jk,
							tgl,
							alamat,
							admisi,
							last,
							i
						]).draw();
					}
				}
			});
		});

	});
</script>