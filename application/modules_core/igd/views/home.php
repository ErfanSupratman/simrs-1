
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
					<label class="control-label col-md-3" style="margin-top:5px;">
						<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
					</label>
					<div class="col-md-4">		
						<input type="text" id="searchpasien" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
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
								<th>Nomor Rekam Medis</th>
								<th>Nama Lengkap</th>
								<th>Jenis Kelamin</th>
								<th>Tanggal Lahir</th>
								<th>Alamat Tinggal</th>
								<th>Unit Pengirim</th>
								<th style="text-align:center;width:25px;">Action</th>
							</tr>
						</thead>
						<tbody>

							<?php
								$i = 0;
								foreach ($pasien_igd as $data) {
									$i++;
									$tgl = strtotime($data['tanggal_lahir']);
									$hasil = date('d F Y', $tgl); 

									echo ' 
										<tr>
											<td>'.$i.'</td>
											<td>'.$data['rm_id'].'</td>
											<td>'.$data['nama'].'</td>
											<td>'.$data['jenis_kelamin'].'</td>
											<td>'.$hasil.'</td>									
											<td>'.$data['alamat_skr'].'</td>
											<td>Admisi</td>
											<td>
												<a href=" '.base_url().'igd/igddetail/periksa/'.$data['igd_id'].'/'.$data['visit_id'].'" ><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Pemeriksaan"></i></a>
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

        <div class="tab-pane" id="farmasi">

        	<div class="dropdown" id="btnBawahInventori" >
	            <div id="titleInformasi">Inventori</div>
	            <div id="btnBawahInventori" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div id="infoInventori">
				<form class="form-horizontal informasi" role="form">
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
				</form>
				<div class="form-group" >
					<div class="portlet-body" style="margin: 50px 50px 0px 40px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
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
							<tbody>
								<tr>
									<td>1</td>
									<td>A</td>
									<td style="text-align:right">12</td>
									<td style="text-align:right">120120</td>
									<td>a</td>									
									<td style="text-align:right">2</td>
									<td style="text-align:right">12</td>
									<td style="text-align:center">12 Mei 1201</td>
									<td style="text-align:center"><a href="#inout" data-toggle="modal" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
											<a href="#edInvenBer" data-toggle="modal" class="edObat"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
										</td>										
								</tr>
								<tr>
									<td>2</td>
									<td>A</td>
									<td style="text-align:right">12</td>
									<td style="text-align:right">120120</td>
									<td>a</td>									
									<td style="text-align:right">2</td>
									<td style="text-align:right">12</td>
									<td style="text-align:center">12 Mei 1201</td>
									<td style="text-align:center"><a href="#inout" data-toggle="modal" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
											<a href="#edInvenBer" data-toggle="modal" class="edObat"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
										</td>													
								</tr>
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
				<div class="modal-dialog">
					<div class="modal-content" >
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">IN OUT</h3>
	        			</div>
	        			<div class="modal-body">
	        			<form class="form-horizontal informasi" role="form">
	
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
	        				<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
	 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
				      	</div>
					</div>
				</div>
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
            	<form class="form-horizontal" role="form">
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
									<input type="text" style="cursor:pointer;" class="form-control" data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
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
										<th width="20"> No. </th>
										<th> Nama Obat </th>
										<th> Satuan </th>
										<th> Merek </th>
										<th> Stok Unit </th>
										<th> Jumlah Diminta </th>
										<th width="80"> Action </th>			
									</tr>
								</thead>
								<tbody  id="addinputMintaFar" class="addKosong">
									<!-- <tr>
										<td colspan="6" style="text-align:center" id="dataKosong">DATA KOSONG</td>												
									</tr> -->
								</tbody>
							</table>
						</div>
						<div class="form-group" style="margin-top:30px;">
							<div class="col-md-10"></div>
							<div class="col-md-2"> 				 
								<button class="btn btn-danger" type="submit">RESET</button>
								<button class="btn btn-success" type="submit">SIMPAN</button>
							</div>
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
											<div class="col-md-5" style="margin-left:20px;">
												<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama Obat"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>
											<br><br>	
										</div>		
										<div style="margin-right:10px;margin-left:10px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 20px 0px 15px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa">
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
												<tbody>
													<tr>
														<td>Paramex</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td>100</td>
														<td>Paramex</td>
														<td style="text-align:center"><a href="#" class ="addNewMintaFar"><i class="glyphicon glyphicon-check"></i></a></td>
													</tr>
													<tr>
														<td>Panadol</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td>100</td>
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
	           	
	       	<div class="dropdown" id="btnBawahRetDepartemen">
	            <div id="titleInformasi">Retur Farmasi</div>
	            <div id="btnBawahRetFarmasi" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
           	<div id="infoRetDepartemen">
            	<form class="form-horizontal" role="form">
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
            					<label class="control-label">Tanggal Permintaan</label>
            				</div>
            				<div class="col-md-2">
            					<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" class="form-control" data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
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
										<th width="20"> No. </th>
										<th > Nama Obat </th>
										<th > Satuan </th>
										<th > Merek </th>
										<th > Stok Unit </th>
										<th > Jumlah Diminta </th>
										<th width="80"> Action </th>			
									</tr>
								</thead>
								
								<tbody  id="addinputRetFar" class="addKosong">
										<!-- <tr>
											<td colspan="6" style="text-align:center" id="dataKosong">DATA KOSONG</td>												
										</tr> -->
								</tbody>
							</table>
						</div>
						<div class="form-group" style="margin-top:30px;">
							<div class="col-md-10"></div>
							<div class="col-md-2"> 				 
								<button class="btn btn-danger" type="submit">RESET</button>
								<button class="btn btn-success" type="submit">SIMPAN</button>
							</div>
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
											<div class="col-md-5" style="margin-left:20px;">
												<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>
											<br><br>	
										</div>		
										<div style="margin-left:10px; margin-right:10px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 20px 0px 15px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa">
												<thead>
													<tr class="info">
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
	       	<div class="dropdown" id="btnBawahInventoriBarang">
	            <div id="titleInformasi">Inventori</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <div id="infoInventoriBarang">
				
				<div class="form-group" >
					<div class="portlet-body" style="margin: 30px 50px 20px 40px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDT">
							<thead>
								<tr class="info">
									<th width="20">No.</th>
									<th> Nama Barang </th>
									<th> Group </th>
									<th> Merek </th>
									<th> Harga </th>
									<th> Stok</th>
									<th> Satuan </th>
									<th width="120"> Action </th>								
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>A</td>
									<td>a</td>
									<td>a</td>									
									<td style="text-align:right">200</td>
									<td style="text-align:right">12</td>
									<td>A</td>
									<td style="text-align:center"><a href="#inoutbar" data-toggle="modal" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
											<a href="#edInvenBerBar" data-toggle="modal" class="edObat"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
										</td>										
								</tr>
								<tr>
									<td>2</td>
									<td>A</td>
									<td>a</td>
									<td>a</td>									
									<td style="text-align:right">200</td>
									<td style="text-align:right">12</td>
									<td>A</td>
									<td style="text-align:center"><a href="#inoutbar" data-toggle="modal" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
											<a href="#edInvenBerBar" data-toggle="modal" class="edObat"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
										</td>											
								</tr>
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
						<div class="modal-content" >
							<div class="modal-header">
		        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        				<h3 class="modal-title" id="myModalLabel">IN OUT</h3>
		        			</div>
		        			<div class="modal-body">
			        			<form class="form-horizontal informasi" role="form">
	    	
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
		        				<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
					      		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
					      	</div>
						</div>
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
		 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
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
            	<form class="form-horizontal" role="form">
            		<br>
            		<div class="informasi">
	        			<div class="form-group">
	        				<div class="col-md-2">
	        					<label class="control-label">Nomor Permintaan</label>
	        				</div>
	        				<div class="col-md-3">
	        					<input type="text" class="form-control" name="noPermLogBers" id="noPermFarmBers" placeholder="Nomor Permintaan"/>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-2">
	        					<label class="control-label">Tanggal Permintaan</label>
	        				</div>
	        				<div class="col-md-2">
	        					<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" class="form-control" data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
								</div>
							</div>
	        			</div>

	        			<div class="form-group">
							<div class="col-md-2">
	        					<label class="control-label">Keterangan</label>
	        				</div>
	        				<div class="col-md-3">
	        					<textarea class="form-control" id="ketObatLogBers" name="ketObatFarBers"></textarea>	
							</div>
	        			</div>
        			</div>
        			
					<a href="#modalMintaLogBers" data-toggle="modal"><i class="fa fa-plus" style="margin-left : 40px; font-size:11pt;">&nbsp;Tambah Obat</i></a>
					<div class="clearfix"></div>
					
					<div class="portlet box red">
						<div class="portlet-body" style="margin: 15px 40px 0px 40px">
						
							<table class="table table-striped table-bordered table-hover table-responsive" id="tabApo">
								<thead>
									<tr class="info" >
										<th width="20"> No. </th>
										<th> Nama Barang </th>
										<th> Satuan </th>
										<th> Merek </th>
										<th> Stok Unit </th>
										<th> Jumlah Diminta </th>
										<th width="80"> Action </th>			
									</tr>
								</thead>
								
								<tbody  id="addinputMintaLog" class="addKosong">
										<!-- <tr>
											<td colspan="6" style="text-align:center" id="dataKosong">DATA KOSONG</td>												
										</tr> -->
								</tbody>
							</table>
						</div>
						<div class="form-group" style="margin-top:30px;">
							<div class="col-md-10"></div>
							<div class="col-md-2"> 				 
								<button class="btn btn-danger" type="submit">RESET</button>
								<button class="btn btn-success" type="submit">SIMPAN</button>
							</div>
						</div>
					</div>
				</form>
				
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
										<div class="col-md-5" style="margin-left:10px;">
											<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
										</div>
										<div class="col-md-2">
											<button type="button" class="btn btn-info">Cari</button>
										</div>
										<br><br>	
									</div>		
									<div style="margin-left:10px; margin-right:10px;"><hr></div>
									<div class="portlet-body" style="margin: 0px 20px 0px 15px">
										<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa">
											<thead>
												<tr class="info">
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
			</div>	    
			<br>
	    </div>

        <div class="tab-pane" id="laporan">    
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
							<div class="col-md-2 pull-right" style="margin-right:30px">
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
							<div class="col-md-2 pull-right"  style="margin-right:30px">
								<button class="btn btn-info ">Simpan ke Excel(.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>

	        <div class="informasi" id="sensusharian">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Sensus Tahunan</div>
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
							<div class="col-md-2 pull-right" style="margin-right:30px">
								<button class="btn btn-info ">Simpan ke Excel(.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>  
	        <br>    
        </div>

        <div class="tab-pane" id="master">      
        	<div class="dropdown" id="">
	            <div id="titleInformasi">Jasa Pelayanan Semua Poli & Rawat Inap</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div id="">
	            <div class="informasi">
		            <div class="form-group">
						<label class="control-label col-md-1" style="margin-top:5px;">Nama Unit </label>
						<div class="input-group col-md-1">
							<input type="text" class="form-control" name="unit" placeholder="Unit yg login" readonly>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-1" style="margin-top:5px;">Paramedis</label>
						<div class="input-group col-md-2">
							<input type="text" class="form-control" style="cursor:pointer;" readonly id="nmpegawai" placeholder="Search Pegawai" data-toggle="modal" data-target="#searchPegawai">
						</div>
					</div>
				</div>

				<div class="modal fade" id="searchPegawai" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
			    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			    				<h3 class="modal-title" id="myModalLabel">Pilih Pegawai</h3>
			    			</div>
			    			<div class="modal-body">
								<div class="form-group">	
									<div class="col-md-5">
										<input type="text" class="form-control" name="kwpegawai" id="kwpegawai" placeholder="Nama Pegawai"/>
									</div>
									<div class="col-md-2">
										<button type="button" class="btn btn-info">Cari</button>
									</div>	
									<div class="col-md-2">
										<button type="button" class="btn btn-success">Tampilkan Semua Pegawai</button>
									</div>	
								</div>	
								<br>	
								<div style="margin-left:5px; margin-right:5px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 10px 0px 10px">
									<table class="table table-striped table-bordered table-hover" id="tabelpegawai">
										<thead>
											<tr class="info">
												<th>Nama Pegawai</th>
												<th width="10%">Pilih</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Jems</td>
												<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
											</tr>
											<tr>
												<td>Putu</td>
												<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
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

		    	<div class="portlet-body" style="margin: 10px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover tableDTUtama" id="tabelJpPoliinap">
						<thead>
							<tr class="info">
								<th width="20">No.</th>
								<th>Tanggal</th>
								<th>Kegiatan</th>
								<th>Paramedis</th>
								<th>Jumlah Kegiatan</th>
								<th width="100">Jasa Pelayanan</th>
								<th>Total Jasa Pelayanan</th>
								<th width="80">Action</th>
							</tr>
						</thead>
						<tbody id="tbody_resep">
							<tr>
								<td style="text-align:center">1</td>
								<td style="text-align:center">12 Mei 1201</td>
								<td>Kegiatan</td>
								<td>Paramedis</td>
								<td style="text-align:right">1000</td>
								<td><input type="text" class="input-sm form-control jp" value="200" style="text-align:right" readonly></td>
								<td style="text-align:right">10000</td>
								<td style="text-align:center">
									<a href="#" id="btneditjp"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
									<a href="#" id="btnsavejp"><i class="glyphicon glyphicon-ok" data-toggle="tooltip" data-placement="top" title="Simpan"></i></a>
									
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="form-group">
					<div class="col-md-2 pull-right">
						<label class="control-label pull-right" style="font-size:2em;">1.000.000</label>
					</div>
					<div class="col-md-4 pull-right" style="font-size:1.5em; margin-top:5px; text-align:right;">
						Total Jasa Pelayanan (Rp.) : 
					</div>
				</div>
				<br><br>
			</div>
        	
        	<div class="dropdown" id="">
	            <div id="titleInformasi">Jasa Pelayanan Kamar Operasi</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div id="">
            	<div class="portlet-body" style="margin: 10px 10px 0px 10px;">
					<table class="table table-striped table-bordered table-hover tableDTScroll" id="">
						<thead>
							<tr class="info">
								<th width="20">No.</th>
								<th>Tanggal</th>
								<th>Tindakan</th>
								<th>Nama Pasien</th>
								<th>JP</th>
								<th>Dokter Operator</th>
								<th width="100">Jasa Dokter Operator</th>
								<th>Dokter Anastesi</th>
								<th width="100">Jasa Dokter Anastesi</th>
								<th>Dokter Anak</th>
								<th width="100">Jasa Dokter Anak</th>
								<th width="100">Jasa Asisten</th>
								<th>JS</th>
								<th>BAKHP</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="tbody_resep">
							<tr>
								<td style="text-align:center">1</td>
								<td style="text-align:center">12 Mei 1201</td>
								<td>Operasi</td>
								<td>Klaudius Jemly Naban Abadi </td>
								<td style="text-align:right">1000</td>
								<td>Putu Widyana Santika</td>
								<td><input type="text" name="jasadokteroperator" style="text-align:right" id="jasadokteroperator" class="input-sm form-control jasa" value="100"></td>
								<td>I Made Arya Beta Widyatmika</td>
								<td><input type="text" name="jasadokteranastesi" style="text-align:right" id="jasadokteranastesi" class="input-sm form-control jasa" value="100"></td>
								<td>Siapa aja alah</td>
								<td><input type="text" name="jasadokteranak" style="text-align:right" id="jasadokteranak" class="input-sm form-control jasa" value="100"></td>
								<td><input type="text" name="jasaasisten" style="text-align:right" id="jasaasisten" class="input-sm form-control jasa" value="100"></td>
								<td style="text-align:right">2000</td>
								<td style="text-align:right">12000</td>
								<td style="text-align:center">
									<a href="#" id="btneditko"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
									<a href="#" id="btnsaveko"><i class="glyphicon glyphicon-ok" data-toggle="tooltip" data-placement="top" title="Simpan"></i></a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
            </div>

            <div class="dropdown" id="">
	            <div id="titleInformasi">Perhitungan Resep</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div id="">
            	<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover tableDT" id="tblPerhitunganResep">
						<thead>
							<tr class="info">
								<th width="20">No.</th>
								<th>No. Resep</th>
								<th>Nama Pasien</th>
								<th>Dokter</th>
								<th>Manajement</th>
								<th>Fee Dokter</th>
								<th>Kemunisasi</th>
								<th>Farmasi</th>
							</tr>
						</thead>
						<tbody id="tbody_resep">
							<tr>
								<td width="20">No.</td>
								<td>12121</td>
								<td>Joe</td>
								<td>Dr. Bejoe</td>
								<td>2000</td>
								<td>1000</td>
								<td>2400</td>
								<td>500</td>
								
							</tr>
						</tbody>
					</table>
				</div>
			</div>

        </div>

        <br><br>
    </div>

</div>

<script type="text/javascript">
	$(document).ready(function(){

		$('#search_submit').submit(function(e){
			e.preventDefault();
			var item = {};
			item['search'] = $('#searchpasien').val();

			$.ajax({
				type:'POST',
				data:item,
				url:'<?php echo base_url(); ?>igd/homeigd/search_pasien',
				success:function(data){
					console.log(data);
					var t = $('.tableDTUtama').DataTable();

					t.clear().draw();

					for(var i=0; i<data.length; i++){
						var rm = data[i]['rm_id'],
							nama = data[i]['nama'],
							jk = data[i]['jenis_kelamin'],
							tgl = data[i]['tanggal_lahir'],
							alamat = data[i]['alamat_skr'],
							v_id = data[i]['visit_id'],
							igd_id = data[i]['igd_id'],
							admisi;

							if(data[i]['unit_asal'] == null )
								admisi = 'Admisi';
							else	
								admisi = data[i]['unit_asal'];

						t.row.add([
							i+1,
							rm,
							nama,
							jk,
							changeDate(tgl),
							alamat,
							admisi,
							'<a href="<?php echo base_url();?>igd/igddetail/periksa/'+igd_id+'/'+v_id+'" ><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Pemeriksaan"></i></a>',
							i
						]).draw();
					}
				}
			});
		});
		
		$('#searchpasien').keyup(function(){
			var item = $(this).val();

			if(item == ""){
				$.ajax({
				type:'POST',
				url:'<?php echo base_url(); ?>igd/homeigd/search_antrian',
				success:function(data){
					console.log(data);
					var t = $('.tableDTUtama').DataTable();

					t.clear().draw();

					for(var i=0; i<data.length; i++){
						var rm = data[i]['rm_id'],
							nama = data[i]['nama'],
							jk = data[i]['jenis_kelamin'],
							tgl = data[i]['tanggal_lahir'],
							alamat = data[i]['alamat_skr'],
							v_id = data[i]['visit_id'],
							igd_id = data[i]['igd_id'],
							admisi;

							if(data[i]['unit_asal'] == null )
								admisi = 'Admisi';
							else	
								admisi = data[i]['unit_asal'];

						t.row.add([
							i+1,
							rm,
							nama,
							jk,
							changeDate(tgl),
							alamat,
							admisi,
							'<a href="<?php echo base_url();?>igd/igddetail/periksa/'+igd_id+'/'+v_id+'" ><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Pemeriksaan"></i></a>',
							i
						]).draw();
					}
				}
			});
			}
		});
	});

	function changeDate(tgl_lahir){
		var remove = tgl_lahir.split("-");
		var bulan;
		switch(remove[1]){
			case "01": bulan="Januari";break;
			case "02": bulan="Februari";break;
			case "03": bulan="Maret";break;
			case "04": bulan="April";break;
			case "05": bulan="May";break;
			case "06": bulan="Juni";break;
			case "07": bulan="Juli";break;
			case "08": bulan="Agustus";break;
			case "09": bulan="September";break;
			case "10": bulan="Oktober";break;
			case "11": bulan="November";break;
			case "12": bulan="Desember";break;
		}
		var tgl = remove[2]+" "+bulan+" "+remove[0];

		return tgl;
	}
</script>