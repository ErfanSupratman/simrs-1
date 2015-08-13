
<div class="title">
	INSTALASI GAWAT DARURAT
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>igd/homeigd">IGD</a>

	</li>
	
</div>
<div class="navigation" style="margin-left: 10px" >
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#list" data-toggle="tab">List Pasien IGD</a></li>
	    <li><a href="#farmasi" data-toggle="tab">Farmasi</a></li>
		<li><a href="#logistik" data-toggle="tab">Logistik</a></li>
	    <li><a href="#laporan" data-toggle="tab">Laporan</a></li>
	    <li><a href="#master" data-toggle="tab">Master</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="list">
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
			<br>
			<hr class="garis"><br>
			
			<div class="portlet box red">
				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
						<thead>
							<tr class="info">
								<th style="text-align:center;width:20px;">No.</th>
								<th>Nama Lengkap</th>
								<th>Jenis Kelamin</th>
								<th>Tanggal Lahir</th>
								<th>Alamat Tinggal</th>
								<th>Unit Pengirim</th>
								<th style="text-align:center;width:25px;">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td>Arya</td>
								<td>Laki</td>
								<td>30 Mei 1994</td>										
								<td>Bali</td>
								<td>KTP</td>
								<td style="text-align:center">
									<a href="<?php echo base_url() ?>igd/igddetail" ><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Pemeriksaan"></i></a>
								</td>										
							</tr>
							<tr>
								<td>2.</td>
								<td>jems</td>
								<td>Laki</td>
								<td>30 Mei 1994</td>										
								<td>NTT</td>
								<td>KTP</td>
								<td style="text-align:center">
									<a href="<?php echo base_url() ?>igd/igddetail" ><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Pemeriksaan"></i></a>		
								</td>										
							</tr>
						</tbody>
					</table>
				</div>			
			</div> 
        </div>

        <div class="tab-pane" id="farmasi">

        	<div class="dropdown" id="btnBawahInventori" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Inventori</div>
	            <div id="btnBawahInventori" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>

            <div class="informasi" id="infoInventori">
				<form class="form-horizontal" role="form">
	            	<div class="form-group">
		            	<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
						<div class="col-md-2" style="width:200px">
									<select class="form-control select" name="filterInv" id="filterInv">
										<option value="Jenis Obat" selected>Jenis Obat</option>
										<option value="Merek">Merek</option>
										<option value="Nama Obat">Nama Obat</option>
															
							</select>	
						</div>
						<div class="col-md-2" style="margin-left:-15px; width:200px;" >
									<input type="text" class="form-control" id="filterby" name="valfilter" placeholder="Value"/>
						</div>

								<div class="col-md-1" >
									<button class="btn btn-danger">EXPIRED</button> 
								</div>
								<div class="col-md-1" >
									<button class="btn btn-warning">EX 3 BULAN</button>
								</div>
								<div class="col-md-1" style="margin-left: 20px;">
									<button class="btn btn-warning">EX 6 BULAN</button>
								</div>
					</div>

					<div class="form-group" >
						<div class="portlet-body" style="margin: 50px 50px 0px 10px">
							<table class="table table-striped table-bordered table-hover table-responsive">
								<thead>
									<tr class="info">
										<th> Nama Obat </th>
										<th> No Batch </th>
										<th> Harga Jual </th>
										<th> Merek </th>
										<th> Stok</th>
										<th> Satuan </th>
										<th> Tanggal Kadaluarsa </th>
										<th> Action </th>								
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>A</td>
										<td>A</td>
										<td>a</td>
										<td>a</td>									
										<td>A</td>
										<td>A</td>
										<td>A</td>
										<td><a href="#inout" data-toggle="modal" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
												<a href="#edInvenBer" data-toggle="modal" class="edObat"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
											</td>										
									</tr>
									<tr>
										<td>A</td>
										<td>A</td>
										<td>a</td>
										<td>a</td>									
										<td>A</td>
										<td>A</td>
										<td>A</td>
										<td><a href="#inout" data-toggle="modal" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
												<a href="#edInvenBer" data-toggle="modal" class="edObat"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
											</td>											
									</tr>
								</tbody>
							</table>
						</div>
					<br>
		        	</div>

					<div class="form-group">
						<div class="pull-right" >
							<button class="btn btn-info " style="margin-right:50px">PRINT</button> 
						</div>
					</div>
	        	</form>
	        </div>

			<div class="modal fade" id="inout" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:200px">
				<div class="modal-dialog">
					<div class="modal-content" >
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">IN OUT</h3>
	        			</div>
	        			<div class="modal-body">
	        			<form class="form-horizontal" role="form">
	
		        			<div class="form-group">
		        					<label class="control-label col-md-3" >Tanggal 
									</label>
									<div class="col-md-6" >
					         		<input type="text" class="form-control" data-provide="datepicker" name="tglInOutBers" placeholder="Tanggal In Out">
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
		        					<label class="control-label col-md-3" >Jumlah 
									</label>
									<div class="col-md-4" >
					         		<input type="text" class="form-control" name="jmlInOutBer" placeholder="Jumlah">
									</div>
									
							</div>
							<div class="form-group">
		        					<label class="control-label col-md-3" >Sisa Stok 
									</label>
									<div class="col-md-4" >
					         		<input type="text" class="form-control" name="sisaInOutBer" placeholder="Sisa Stok">
									</div>
									
							</div>
							<div class="form-group">
		        					<label class="control-label col-md-3" >Keterangan 
									</label>
									<div class="col-md-6" >
										<textarea class="form-control" placeholder="Keterangan"></textarea>
									</div>
		
							</div>
							</form>
							
	        			</div>
	        			<div class="modal-footer">
	 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
				      	</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="edInvenBer" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:200px">
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
											<th  style="text-align:left" width="10%"> Waktu </th>
											<th  style="text-align:left"> IN / OUT </th>
											<th  style="text-align:left"> Jumlah </th>
											<th  style="text-align:left"> Stok Akhir </th>
											<th  style="text-align:left"> Jenis </th>
											<th  style="text-align:left">  Keterangan </th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
											
									</tbody>
								</table>

			        			
								</form>
								
		        			</div>
		        			<div class="modal-footer">
		 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
					      	</div>
						</div>
					</div>
			</div>

			<div class="dropdown" id="btnBawahMintaObat" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Permintaan Farmasi</div>
	            <div id="btnBawahMintaObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>

            <div class="informasi" id="infoMintaObat">
            	<form class="form-horizontal" role="form">
        			<div class="form-group">
        				<div class="col-md-2">
        					<label class="control-label">Nomor Permintaan</label>
        				</div>
        				<div class="col-md-2">
        					<input type="text" class="form-control" name="noPermFarmBers" id="noPermFarmBers" placeholder="Nomor Permintaan"/>
						</div>
						<div class="col-md-2">
        					<label class="control-label">Petugas Input</label>
        				</div>
        				<div class="col-md-2">
        					<input type="text" class="form-control" id="ptgasInputFarBers" name="ptgasInputFarBers" placeholder="Petugas"  data-toggle="modal" data-target="#ptgas"/>
        				</div>
        			</div>

        			<div class="form-group">
        				<div class="col-md-2">
        					<label class="control-label">Tanggal Permintaan</label>
        				</div>
        				<div class="col-md-2">
        					<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
						<div class="col-md-2">
        					<label class="control-label">Keterangan</label>
        				</div>
        				<div class="col-md-2">
        					
							<textarea class="form-control" id="ketObatFarBers" name="ketObatFarBers"></textarea>	
						</div>
        			</div>
					<a href="#modalMintaFarBers" data-toggle="modal"><i class="fa fa-plus" style="margin-left : -10px">&nbsp;Tambah Obat</i></a>
					<div class="clearfix"></div>
					
					<div class="portlet box red">
						<div class="portlet-body" style="margin: 25px 40px 0px -20px">
						
							<table class="table table-striped table-bordered table-hover table-responsive" id="tabApo">
								<thead>
									<tr class="info" >
										<th  style="text-align:left"> No. </th>
										<th  style="text-align:left"> Nama Obat </th>
										<th  style="text-align:left"> Satuan </th>
										<th  style="text-align:left"> Merek </th>
										<th  style="text-align:left"> Stok Unit </th>
										<th  style="text-align:left"> Jumlah Diminta </th>
										<th  style="text-align:left"> Action </th>			
									</tr>
								</thead>
								
								<tbody  id="addinputMintaFar" class="addKosong">
										<!-- <tr>
											<td colspan="6" style="text-align:center" id="dataKosong">DATA KOSONG</td>												
										</tr> -->
								</tbody>
							</table>
						</div>
					</div>
					
					<div class="modal fade" id="modalMintaFarBers" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
			        			</div>
			        			<div class="modal-body">

				        			<div class="form-group">
										<div class="form-group">	
											<div class="col-md-3" style="margin-left:35px;">
												<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>
											<br><br>	
										</div>		
										<div style="margin-left:20px; margin-right:20px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 10px 0px 10px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
												<thead>
													<tr class="warning">
														<td>Nama Obat</td>
														<td>Satuan</td>
														<td>Merek</td>
														<td>Tgl Kadaluarsa</td>
														<td width="10%">Pilih</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Paramex</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td style="text-align:center"><a href="#" class ="addNewMintaFar"><i class="glyphicon glyphicon-check"></i></a></td>
													</tr>
													<tr>
														<td>Panadol</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td style="text-align:center"><a href="#" class ="addNewMintaFar"><i class="glyphicon glyphicon-check"></i></a></td>
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

				</form>
			</div>	    
			<br>
	           	
	       	<div class="dropdown" id="btnBawahRetDepartemen" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Retur Farmasi</div>
	            <div id="btnBawahRetFarmasi" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>

           	<div class="informasi" id="infoRetDepartemen">
            	<form class="form-horizontal" role="form">
            			<div class="form-group">
            				<div class="col-md-2">
            					<label class="control-label">Nomor Retur</label>
            				</div>
            				<div class="col-md-2">
            					<input type="text" class="form-control" name="noRetFarBers" id="noRetFarBers" placeholder="Nomor Retur"/>
							</div>
							<div class="col-md-2">
            					<label class="control-label">Petugas Input</label>
            				</div>
            				<div class="col-md-2">
            					<input type="text" class="form-control" id="ptgasInputRetFarBers" name="ptgasInputRetFarBers" placeholder="Petugas"  data-toggle="modal" data-target="#ptgas"/>
            				</div>
            			</div>

            			<div class="form-group">
            				<div class="col-md-2">
            					<label class="control-label">Tanggal Permintaan</label>
            				</div>
            				<div class="col-md-2">
            					<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" class="form-control" data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
								</div>
							</div>
							<div class="col-md-2">
            					<label class="control-label">Keterangan</label>
            				</div>
            				<div class="col-md-2">
            					
								<textarea class="form-control" id="ketObatRetFarBers" name="ketObatRetFarBers"></textarea>	
							</div>
            			</div>
						<a href="#modalRetFarBers" data-toggle="modal"><i class="fa fa-plus" style="margin-left : -10px">&nbsp;Tambah Obat</i></a>
						<div class="clearfix"></div>
						
						<div class="portlet box red">
							<div class="portlet-body" style="margin: 25px 40px 0px -20px">
							
								<table class="table table-striped table-bordered table-hover table-responsive" id="tabRetur">
									<thead>
										<tr class="info" >
											<th  style="text-align:left"> No. </th>
											<th  style="text-align:left"> Nama Obat </th>
											<th  style="text-align:left"> Satuan </th>
											<th  style="text-align:left"> Merek </th>
											<th  style="text-align:left"> Stok Unit </th>
											<th  style="text-align:left"> Jumlah Diminta </th>
											<th  style="text-align:left"> Action </th>			
										</tr>
									</thead>
									
									<tbody  id="addinputRetFar" class="addKosong">
											<!-- <tr>
												<td colspan="6" style="text-align:center" id="dataKosong">DATA KOSONG</td>												
											</tr> -->
									</tbody>
								</table>
							</div>
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
											<div class="form-group">	
												<div class="col-md-3" style="margin-left:35px;">
													<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
												</div>
												<div class="col-md-2">
													<button type="button" class="btn btn-info">Cari</button>
												</div>
												<br><br>	
											</div>		
											<div style="margin-left:20px; margin-right:20px;"><hr></div>
											<div class="portlet-body" style="margin: 0px 10px 0px 10px">
												<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
													<thead>
														<tr class="warning">
															<td>Nama Obat</td>
															<td>Satuan</td>
															<td>Merek</td>
															<td>Tgl Kadaluarsa</td>
															<td width="10%">Pilih</td>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Paramex</td>
															<td>Paramex</td>
															<td>Paramex</td>
															<td>Paramex</td>
															<td style="text-align:center"><a href="#" class ="addNewRetFar"><i class="glyphicon glyphicon-check"></i></a></td>
														</tr>
														<tr>
															<td>Panadol</td>
															<td>Paramex</td>
															<td>Paramex</td>
															<td>Paramex</td>
															<td style="text-align:center"><a href="#" class ="addNewRetFar"><i class="glyphicon glyphicon-check"></i></a></td>
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
				</form>
			</div>	
			<br>
	    </div>

        <div class="tab-pane" id="logistik">
	       	<div class="dropdown" id="btnBawahInventoriBarang" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Inventori</div>
	            <div id="btnBawahInventoriBarang" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>

            <div class="informasi" id="infoInventoriBarang">
				<form class="form-horizontal" role="form">
            	
	            	<div class="form-group">
		            	<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
						<div class="col-md-2" style="width:200px">
									<select class="form-control select" name="filterInv" id="filterInv">
										<option value="Jenis Obat" selected>Group</option>
										<option value="Merek">Merek</option>
										<option value="Nama Obat">Nama Barang</option>
															
							</select>	
						</div>
						<div class="col-md-2" style="margin-left:-15px; width:200px;" >
									<input type="text" class="form-control" id="filterby" name="valfilter" placeholder="Value"/>
						</div>
					</div>

					<div class="form-group" >
						<div class="portlet-body" style="margin: 50px 50px 0px 10px">
							<table class="table table-striped table-bordered table-hover table-responsive">
								<thead>
									<tr class="info">
										<th> Nama Barang </th>
										<th> Group </th>
										<th> Merek </th>
										<th> Harga </th>
										
										<th> Stok</th>
										<th> Satuan </th>
										<th> Action </th>								
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>A</td>
										<td>a</td>
										<td>a</td>									
										<td>A</td>
										<td>A</td>
										<td>A</td>
										<td><a href="#inoutbar" data-toggle="modal" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
												<a href="#edInvenBerBar" data-toggle="modal" class="edObat"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
											</td>										
									</tr>
									<tr>
										<td>A</td>
										<td>A</td>
										<td>a</td>
										<td>a</td>									
										<td>A</td>
										<td>A</td>
										<td><a href="#inoutbar" data-toggle="modal" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
												<a href="#edInvenBerBar" data-toggle="modal" class="edObat"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
											</td>											
									</tr>
								</tbody>
							</table>
						</div>
						<br>
		        	</div>

					<div class="form-group">
						<div class="pull-right" >
							<button class="btn btn-info " style="margin-right:50px">PRINT</button> 
						</div>
					</div>
	        	</form>
	        </div>

			<div class="modal fade" id="inoutbar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:200px">
					<div class="modal-dialog">
						<div class="modal-content" >
							<div class="modal-header">
		        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        				<h3 class="modal-title" id="myModalLabel">IN OUT</h3>
		        			</div>
		        			<div class="modal-body">
		        			<form class="form-horizontal" role="form">
    	
			        			<div class="form-group">
			        					<label class="control-label col-md-3" >Tanggal 
										</label>
										<div class="col-md-6" >
						         		<input type="text" class="form-control" data-provide="datepicker" name="tglInOutBersBar" placeholder="Tanggal In Out">
										</div>
										
								</div>
								<div class="form-group">
										<label class="control-label col-md-3" >In / Out 
										</label>
										<div class="col-md-4">
						         		<select class="form-control select" name="ioberbar" id="ioberbar">
												<option value="IN" selected>IN</option>
												<option value="OUT">OUT</option>					
										</select>
										</div>

								</div>
								<div class="form-group">
			        					<label class="control-label col-md-3" >Jumlah 
										</label>
										<div class="col-md-4" >
						         		<input type="text" class="form-control" name="jmlInOutBerBar" placeholder="Jumlah">
										</div>
										
								</div>
								<div class="form-group">
			        					<label class="control-label col-md-3" >Sisa Stok 
										</label>
										<div class="col-md-4" >
						         		<input type="text" class="form-control" name="sisaInOutBerBar" placeholder="Sisa Stok">
										</div>
										
								</div>
								<div class="form-group">
			        					<label class="control-label col-md-3" >Keterangan 
										</label>
										<div class="col-md-6" >
											<textarea class="form-control" placeholder="Keterangan"></textarea>
										</div>
			
								</div>
								</form>
								
		        			</div>
		        			<div class="modal-footer">
		 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
					      	</div>
						</div>
					</div>
			</div>
			<div class="modal fade" id="edInvenBerBar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:200px">
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
											<th  style="text-align:left" width="10%"> Waktu </th>
											<th  style="text-align:left"> IN / OUT </th>
											<th  style="text-align:left"> Jumlah </th>
											<th  style="text-align:left"> Stok Akhir </th>
											<th  style="text-align:left"> Jenis </th>
											<th  style="text-align:left">  Keterangan </th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
											
									</tbody>
								</table>

			        			
								</form>
								
		        			</div>
		        			<div class="modal-footer">
		 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
					      	</div>
						</div>
					</div>
			</div>

			<div class="dropdown" id="btnBawahMintaObat" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Permintaan Logistik</div>
	            <div id="btnBawahPermintaanBarang" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>

            <div class="informasi" id="infoPermintaanBarang">
            	<form class="form-horizontal" role="form">
        			<div class="form-group">
        				<div class="col-md-2">
        					<label class="control-label">Nomor Permintaan</label>
        				</div>
        				<div class="col-md-2">
        					<input type="text" class="form-control" name="noPermLogBers" id="noPermFarmBers" placeholder="Nomor Permintaan"/>
						</div>
						<div class="col-md-2">
        					<label class="control-label">Petugas Input</label>
        				</div>
        				<div class="col-md-2">
        					<input type="text" class="form-control" id="ptgasInputLogBers" name="ptgasInputLogBers" placeholder="Petugas"  data-toggle="modal" data-target="#ptgas"/>
        				</div>
        			</div>

        			<div class="form-group">
        				<div class="col-md-2">
        					<label class="control-label">Tanggal Permintaan</label>
        				</div>
        				<div class="col-md-2">
        					<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
						<div class="col-md-2">
        					<label class="control-label">Keterangan</label>
        				</div>
        				<div class="col-md-2">
        					
							<textarea class="form-control" id="ketObatLogBers" name="ketObatFarBers"></textarea>	
						</div>
        			</div>
					<a href="#modalMintaLogBers" data-toggle="modal"><i class="fa fa-plus" style="margin-left : -10px">&nbsp;Tambah Obat</i></a>
					<div class="clearfix"></div>
					
					<div class="portlet box red">
						<div class="portlet-body" style="margin: 25px 40px 0px -20px">
						
							<table class="table table-striped table-bordered table-hover table-responsive" id="tabApo">
								<thead>
									<tr class="info" >
										<th  style="text-align:left"> No. </th>
										<th  style="text-align:left"> Nama Barang </th>
										<th  style="text-align:left"> Satuan </th>
										<th  style="text-align:left"> Merek </th>
										<th  style="text-align:left"> Stok Unit </th>
										<th  style="text-align:left"> Jumlah Diminta </th>
										<th  style="text-align:left"> Action </th>			
									</tr>
								</thead>
								
								<tbody  id="addinputMintaLog" class="addKosong">
										<!-- <tr>
											<td colspan="6" style="text-align:center" id="dataKosong">DATA KOSONG</td>												
										</tr> -->
								</tbody>
							</table>
						</div>
					</div>
					
					<div class="modal fade" id="modalMintaLogBers" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Pilih Barang</h3>
			        			</div>
			        			<div class="modal-body">

				        			<div class="form-group">
										<div class="form-group">	
											<div class="col-md-3" style="margin-left:35px;">
												<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>
											<br><br>	
										</div>		
										<div style="margin-left:20px; margin-right:20px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 10px 0px 10px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
												<thead>
													<tr class="warning">
														<td>Nama Barang</td>
														<td>Satuan</td>
														<td>Merek</td>
														<td>Tgl Kadaluarsa</td>
														<td width="10%">Pilih</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Paramex</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td style="text-align:center"><a href="#" class ="addNewLog"><i class="glyphicon glyphicon-check"></i></a></td>
													</tr>
													<tr>
														<td>Panadol</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td style="text-align:center"><a href="#" class ="addNewLog"><i class="glyphicon glyphicon-check"></i></a></td>
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
				</form>
			</div>	    
			<br>
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
											<td style="text-align:center"><i class="glyphicon glyphicon-check"></i></td>
										</tr>
										<tr>
											<td>Putu</td>
											<td style="text-align:center"><i class="glyphicon glyphicon-check"></i></td>
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

											