
<div class="title" id="top">
	APOTEK UMUM
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>farmasi/homeapotikumum">Apotik Umum</a>
	</li>
</div>

<div class="navigation" style="margin-left: 10px" >
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#mo" data-toggle="tab">Master Detail Obat</a></li>
	    <li><a href="#inventori" data-toggle="tab">Inventori</a></li>
	    <li><a href="#permintaan" data-toggle="tab">Permintaan Obat</a></li>
	    <li><a href="#returbarang" data-toggle="tab">Retur Obat Gudang</a></li>
	    <li><a href="#opname" data-toggle="tab">Stok Opname</a></li>
	    <li><a href="#laporan" data-toggle="tab">Laporan</a></li>
	</ul>


	<div id="my-tab-content" class="tab-content">
        
<!-- abadi  -->
		<div class="modal fade" id="nmDetObat" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
									<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama obat"/>
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
											<td>No.</td>
											<td>Nama Obat</td>
											<td width="10%">Pilih</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Paramex</td>
											<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Panadol</td>
											<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
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
        <div class="tab-pane active" id="mo">
			<div class="dropdown" id="btnBawahMasObat" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Tambah Obat</div>
	            <div id="btnBawahMasObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoMasObat">
	        	<form class="form-horizontal" role="form">
            		<div class="modal fade" id="mdMerk" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Pilih Merk</h3>
			        			</div>
			        			<div class="modal-body">
				        			<div class="form-group">
										<div class="form-group">	
											<div class="col-md-3" style="margin-left:35px;">
												<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama Obat"/>
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
														<td>No.</td>
														<td>Nama Merk</td>
														<td width="10%">Pilih</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Paramex</td>
														<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
													</tr>
													<tr>

														<td>2</td>
														<td>Panadol</td>
														<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
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
						
					<div class="form-group">
	            		<label class="control-label col-md-2">Nama Obat </label>
	            		<div class="col-md-2">
							<input type="text" class="form-control" id="nmObatApoUmum" name="nmObatApoUmum" placeholder="Nama Obat" readonly />
						</div>
						<div class="col-md-2">
						</div>
						<label class="control-label col-md-2" >Harga Dasar </label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="hgDasarObatApoUmum" name="hgDasarObatApoUmum" placeholder="Harga Dasar" readonly />
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Satuan Obat </label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectSatObatApoUmum" id="selectSatObatApoUmum" readonly>
								<option selected>Pilih</option>
								<option value="GR" >Gram</option>
								<option value="KG">Kilogram</option>
								<option value="Ons"  >Ons</option>
								<option value="ALL" >All</option>
							</select>
						</div>
						<div class="col-md-2">
						</div>
						<label class="control-label col-md-2" >HPS </label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="hpsApoUmum" name="hpsApoUmum" placeholder="HPS" readonly />
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Jenis Obat </label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectJnsObatApoUmum" id="selectJnsObatApoUmum" readonly>
								<option selected>Pilih</option>
								<option value="1">Blm tau</option>
								<option value="2">Blm tau</option>
								<option value="3"  >Blm tau</option>
								<option value="ALL" >Blm tau</option>
							</select>
						</div>
						<div class="col-md-2">
						</div>
						<label class="control-label col-md-2" >Margin </label>
						<div class="col-md-2">
							<div class="input-group">
							<input type="text" class="form-control" id="marginApoUmum" name="marginApoUmum" placeholder="margin" readonly  />
							<span class="input-group-addon">%</span>
							</div>
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Merek </label>
						<div class="col-md-2">	         		
							<input type="text" class="form-control" id="nmMerkApoUmum" name="nmMerkApoUmum" placeholder="Merek" data-toggle="modal" data-target="#mdMerk" readonly />
						</div>
						<div class="col-md-2">
						</div>
						<label class="control-label col-md-2" >Harga Jual </label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="hargaJualApoUmum" name="hargaJualApoUmum" placeholder="Harga Jual" readonly />
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Stok Min </label>
						<div class="col-md-2">	         		
							<input type="text" class="form-control" id="stokMinApoUmum" name="stokMinApoUmum" placeholder="Stok Minimal" />
						</div>
						<div class="col-md-2">
						</div>

						<label class="control-label col-md-2" > Generik </label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectGenerikApoUmum" id="selectGenerikApoUmum" readonly>
								<option selected>Pilih</option>
								<option value="generik" >Generik</option>
								<option value="non-generik">Non-generik</option>
							</select>
						</div>		
					</div>

					<div class="form-group">
						<label class="control-label col-md-2" >Penyedia </label>
						<div class="col-md-2">
		         			<input type="text" class="form-control" id="pedObatDetApoUmum"  placeholder="Penyedia Obat"  readonly />	
						</div>
						<div class="col-md-2">
						</div>
						<div class="form-inline">
							<div class="radio-list">
								<div class="col-md-2" > 
									<input type="radio"  name="hd" value="Hide" data-title="Hide"  checked disabled /><div style="float:right;margin-top:6px;margin-right:123px">Hide</div> 
								</div>
								<div class="col-md-3">	         		
									<input type="radio"  name="hd"  value="Unhide" data-title="Unhide"  disabled /><div style="float:right;margin-top:6px;margin-right:213px">Unhide</div>
								</div>	
							</div>
						</div>
					</div>

					<div class="form-group" style="margin-top:50px;">
						<div class="col-md-8"></div>
						<div class="col-md-1">
							<button class="btn btn-danger" id="btnBatalObat" style="margin-left:35px;">BATAL</button>
						</div>
						<div class="col-md-3"> 				 
							<button class="btn btn-warning" style="margin-left:10px">RESET</button>
							<button class="btn btn-success" style="margin-left:10px" id="smpanObat">SIMPAN</button>
							<button class="btn btn-success" style="margin-left:10px" id="ubahObat">UBAH</button>
						</div>
					</div>
						
					<br>
					<hr class="garis" style="margin-left:-60px;">
					<br>

					<div class="form-group">
	            		<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by</label>
						<div class="col-md-2" style="margin-left:-130px">	         		
							<input type="text" class="form-control" id="nmObatBwhApoUmum" name="nmObatBwhApoUmum" placeholder="Nama Obat" />
						</div>
						<div class="col-md-2" style="margin-left:-15px">
							<select class="form-control select" name="selectSatObatApoUmum" id="selectSatObatApoUmum" style="width:100px">
								<option selected>Pilih</option>
								<option value="GR">Gram</option>
								<option value="KG">Kilogram</option>
								<option value="Ons">Ons</option>
								<option value="ALL">All</option>
							</select>
						</div>
						<div class="col-md-2" style="margin-left:-100px">
							<select class="form-control select" name="selectGenObatApoUmum" id="selectGenObatApoUmum">
								<option selected>Pilih</option>
								<option value="Gen" selected>Generik</option>
								<option value="NG">Non Generik</option>
							</select>
						</div>
						<div class="col-md-2" style="margin-left:-10px">
							<button type="submit" class="btn btn-warning">Filter</button>
						</div>

						<div class="col-md-2" style="margin-left:-140px">
							<button type="submit" class="btn btn-danger">Stok Warning</button>
						</div>
					</div>
					<div class="portlet box red" style="margin-left:-50px; margin-right:20px; margin-bottom:40px;">
						<div class="portlet-title">
						</div>
						<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover table-responsive">
								<thead>
									<tr class="info" >
										<th  style="text-align:left"> No. </th>
										<th  style="text-align:left"> Kode </th>
										<th  style="text-align:left"> Nama Obat </th>
										<th  style="text-align:left"> Jenis </th>
										<th  style="text-align:left"> Merek </th>
										<th  style="text-align:left"> Generik </th>
										<th  style="text-align:left"> Harga Dasar </th>
										<th  style="text-align:left"> HPS </th>
										<th  style="text-align:left"> Margin </th>
										<th  style="text-align:left"> Harga Jual </th>
										<th  style="text-align:left"> Stok Min </th>
										<th  style="text-align:left"> Stok Total </th>
										<th  style="text-align:left"> Satuan </th>
										<th  style="text-align:left"> Action </th>
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
										<td></td>									
										<td></td>
										<td></td>
										<td></td>
										<td></td>									
										<td></td>									
										<td></td>								
										<td><a href="#top" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<a href="#"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak Kartu Stok"></i></a></td>							
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="form-group">
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
					</div>

				</form>

				
            </div>

			<div class="dropdown" id="btnBawahPeriksa" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Tambah Detail Obat</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infohasilperiksa">
            	<form class="form-horizontal" role="form">
					<div class="form-group">
	            		<label class="control-label col-md-2" >Nama Obat </label>
						<div class="col-md-3" >	         		
							<input type="text" class="form-control" id="nmDetObatApoUmum" name="nmDetObatApoUmum" placeholder="Nama Obat" data-toggle="modal" data-target="#nmDetObat" />
						</div>
						<div class="col-md-1">
						</div>
						<label class="control-label col-md-2" >Tahun Pengadaan
						</label>
						<div class="col-md-2">
							<select class="form-control select" name="selectTahObatApoUmum" id="selectTahObatApoUmum">
								<option selected>Pilih</option>
								<option value="1">H-5 tahun</option>
								<option value="2">H+2 tahun</option>
								<option value="ALL" >All</option>
							</select>
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Satuan Obat </label>
						<div class="col-md-3" >
		         			<input type="text" class="form-control" id="satObatDetApoUmum" placeholder="Satuan Obat" disabled />	
						</div>
						<div class="col-md-1">
						</div>
						<label class="control-label col-md-2" >Sumber Dana </label>
						<div class="col-md-2">
							<select class="form-control select" name="selectSumDanaObatApoUmum" id="selectSumDanaObatApoUmum">
								<option selected>Pilih</option>
								
								<option value="1" >Pribadi</option>
								<option value="2">Bank</option>
								<option value="ALL" >All</option>
							</select>
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Merek </label>
						<div class="col-md-3">
		         			<input type="text" class="form-control" id="merkObatDetApoUmum" placeholder="Merek Obat" disabled />	
						</div>
						<div class="col-md-1">
						</div>

						<label class="control-label col-md-2" >Jumlah
						</label>
						<div class="col-md-2" >
		         		<input type="text" class="form-control" id="jmlDetObatApoUmum" placeholder="Jumlah"  />	
						</div>
						<!-- <label class="control-label col-md-2" >Penyedia </label>
						<div class="col-md-2">
		         			<input type="text" class="form-control" id="pedObatDet"  placeholder="Penyedia Obat"  />	
						</div> -->
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Tanggal Kadaluarsa </label>
						<div class="col-md-3">
		         			<!-- <input type="text" class="form-control" data-provide="datepicker" name="tglKadDetObat" placeholder="Tanggal Kadaluarsa"> -->
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
						<div class="col-md-1">
						</div>
						<label class="control-label col-md-2" >No Batch 
						</label>
						<div class="col-md-2">
		         			<input type="text" class="form-control" id="noBatchDetObatApoUmum" placeholder="No Batch"  />	
						</div>
					</div>

					<div class="form-group" style="margin-top:30px;">
						<div class="col-md-8"></div>
						<div class="col-md-1">
							<button class="btn btn-danger" id="btnBatalDetObat" style="margin-left:35px;">BATAL</button>
						</div>
						<div class="col-md-3"> 				 
							<button class="btn btn-warning" style="margin-left:10px">RESET</button>
							<button class="btn btn-success" style="margin-left:10px" id="smpanDetObat">SIMPAN</button>
							<button class="btn btn-success" style="margin-left:10px" id="ubahDetObat">UBAH</button>
						</div>
					</div>

					<br>
					<hr class="garis" style="margin-left:-60px;">
					<br>
					
					
					<div class="portlet box red" style="margin-left:-50px; margin-right:20px; margin-bottom:40px;">
						<div class="portlet-title">
						</div>
						<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						
							<table class="table table-striped table-bordered table-hover table-responsive tableDT">
								<thead>
									<tr class="info" >
										<th  style="text-align:left"> No. </th>
										<th  style="text-align:left"> Tgl Kadaluarsa </th>
										<th  style="text-align:left"> No Batch </th>
										<th  style="text-align:left"> Tahun </th>
										<th  style="text-align:left"> Sumber Dana </th>
										<th  style="text-align:left"> Penyedia </th>
										<th  style="text-align:left"> Stok </th>
										<th  style="text-align:center;"> Action </th>
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
										<td></td>						
										<td style="text-align:center"><a href="#nmDetObat" class="edObat" id="edDetObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<!-- <a href="#inout" data-toggle="modal" data-original-title="In Out Data Pasien"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="In Out">
											
										</i></a> --></td>							
									</tr>
								</tbody>
							</table>
						</div>
					</div>

				</form>
	        </div>		
        </div>

        <div class="tab-pane" id="inventori">
        	<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Inventori</div>
	            <div id="btnBawahInventoriGudang" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoInventoriGudang">
	        	<form class="form-horizontal" role="form">
            	
		        	<div class="form-group">
							<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
							</label>
							<div class="col-md-2">
								<select class="form-control select" name="filterInv" id="filterInv">
									<option selected>Pilih</option>
									<option value="Nama Obat">Nama Obat</option>
									<option value="Jenis Obat">Jenis Obat</option>
									<option value="Merek">Merek</option>
									<option value="Sumber Dana">Sumber Dana</option>
									<option value="Penyedia">Penyedia</option>					
								</select>	
							</div>
							<div class="col-md-2" style="margin-left:-15px;">
								<input type="text" class="form-control" id="filterby" name="valInObat" placeholder="Value"/>
							</div>
						
							<div class="col-md-1">
								<select class="form-control select" name="filterSat" id="filterSat" style="margin-left:-15px;width:120px">
										<option selected>Pilih</option>
										<option value="GR">Gram</option>
										<option value="KG">Kilogram</option>
										<option value="Ons">Ons</option>
										<option value="ALL">All</option>			
								</select>
							</div>
							<div class="col-md-2" >
								<select class="form-control select" name="filterGen" id="filterGen" style="margin-left:13px; width:150px">
										<option selected>Pilih</option>
										<option value="Generik" >Generik</option>
										<option value="Non Generik">Non Generik</option>					
								</select>
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
			
				<hr class="garis" style="margin-left:-65px">
				<br>

				<div class="portlet box red" style="margin-left:-40px; margin-right:20px; ">
					<div class="portlet-title">
					</div>
					<!-- kasih pagination -->
					<div class="portlet-body" style="margin: 0px 10px 0px -10px">
						
						<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven">
							<thead>
								<tr class="info" >
									<th  style="text-align:left"> No. </th>
									<th  style="text-align:left" width="10%"> Nama Obat </th>
									<th  style="text-align:left"> No Batch </th>
									<th  style="text-align:left"> Harga Dasar </th>
									<th  style="text-align:left"> HPS </th>
									<th  style="text-align:left"> Margin </th>
									<th  style="text-align:left"> Harga Jual </th>
									<th  style="text-align:left"> Merek </th>
									<th  style="text-align:left"> Stok </th>
									<th  style="text-align:left"> Satuan </th>
									<th  style="text-align:left"> Tahun </th>
									<th  style="text-align:left"> Tanggal Kadaluarsa </th>
									<th  style="text-align:center"> Action </th>

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
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td style="text-align:center"><a href="#inout" data-toggle="modal" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
										<a href="#edInvenGdg" data-toggle="modal" class="edObat"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
									</td>
								</tr>
									
							</tbody>
						</table>
						<br>
						<br><br>

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
								         		<input type="text" class="form-control" data-provide="datepicker" name="tglInOutApoUmum" placeholder="Tanggal In Out">
												</div>
												
										</div>
										<div class="form-group">
												<label class="control-label col-md-3" >In / Out 
												</label>
												<div class="col-md-4">
								         		<select class="form-control select" name="ioApoUmum" id="ioApoUmum">
														<option selected>Pilih</option>
														<option value="IN" >IN</option>
														<option value="OUT">OUT</option>					
												</select>
												</div>

										</div>
										<div class="form-group">
					        					<label class="control-label col-md-3" >Jumlah 
												</label>
												<div class="col-md-4" >
								         		<input type="text" class="form-control" name="jmlInOutApoUmum" placeholder="Jumlah">
												</div>
												
										</div>
										<div class="form-group">
					        					<label class="control-label col-md-3" >Sisa Stok 
												</label>
												<div class="col-md-4" >
								         		<input type="text" class="form-control" name="sisaInOutApoUmum" placeholder="Sisa Stok">
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
					<div class="modal fade" id="edInvenGdg" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:200px">
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
						
					</div>
					
				</div>
				<div class="pull-right" style="margin-right:40px;margin-top:-80px;">
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
			</div>
				
        </div>

        <div class="tab-pane" id="adaan">
        	<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Tambah Pengadaan</div>
	            <div id="btnBawahAdaan" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoAdaan">
            	<form class="form-horizontal" role="form">
						<div class="form-group">			
		            		<label class="control-label col-md-2" >Nomor 
							</label>
							<div class="col-md-3">
							<input type="text" class="form-control" id="nmrAdaan" name="nmrAdaan" placeholder="Nomor Adaan"/>
							</div>
							<div class="col-md-1">
							</div>
							<label class="control-label col-md-2" >Tanggal Pengadaan 
							</label>
							<div class="col-md-2">
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
								</div>
							</div>
						</div>

						<div class="form-group">

							<label class="control-label col-md-2">Petugas Input 
							</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="ptgasInput" name="ptgasInput" placeholder="Petugas"  data-toggle="modal" data-target="#ptgas"/>			
		            		</div>
		            		<div class="col-md-1"></div>
							<label class="control-label col-md-2" >Keterangan 
							</label>
							<div class="col-md-3" >
								<textarea class="form-control" id="ketAdaan" name="ketAdaan"></textarea>
							</div>
						</div>
						
						<br>
						<hr class="garis" style="margin-left:-50px;">
						<br>

						<a href="#modalAdaan" data-toggle="modal"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Obat Pengadaan" style="margin-left : -30px">&nbsp;Tambah Pengadaan</i></a>
						<div class="clearfix"></div>

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
						<div class="portlet-body" style="margin: 0px 10px 0px -50px">
						
							<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven">
								<thead>
									<tr class="info" >
										<th  style="text-align:left" width="10%"> Nama Obat </th>
										<th  style="text-align:left"> Penyedia </th>
										<th  style="text-align:left"> Quantity </th>
										<th  style="text-align:left"> Satuan </th>
										<th  style="text-align:left"> HPS </th>
										<th  style="text-align:left"> Total </th>
										
									</tr>
								</thead>
								<tbody id="addinput">
										<tr>
											<!-- <td>Shabu-Shabu</td>
											<td>UKDW</td>
											<td>1</td>
											<td>Shabu-Shabu</td>
											<td>UKDW</td>
											<td>1</td> -->
																		
										</tr>
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
						
							
				</form>
			</div>

			<br>
			<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Riwayat Pengadaan</div>
	            <div id="btnBawahRiwaAda" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoRiwaAda">
				<form class="form-horizontal" role="form">
        			
					<div class="form-group">			
						<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by</label>
	       				<div class="col-md-3" style="margin-left:-110px">
							<input type="text" class="form-control" id="nmrAdaanRiwa" name="nmrAdaanRiwa" placeholder="Nomor Adaan Riwayat"/>
						</div>
						
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>

						<div class="col-md-2" style="margin-left:-10px">
							<button type="submit" class="btn btn-warning">Filter</button>
						</div>

					</div>
					<hr class="garis" style="margin-left:-50px;">
					<br>
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
					<div class="portlet-body" style="margin: 0px 10px 0px -50px">
					
						<table class="table table-striped table-bordered table-hover table-responsive">
							<thead>
								<tr class="info" >
									<th  style="text-align:left" width="15%"> Nomor Pengadaan </th>
									<th  style="text-align:left"> Tanggal Pengadaan </th>
									<th  style="text-align:left"> Petugas Input </th>
									<th  style="text-align:left"> Keterangan </th>
									<th  style="text-align:left"> Status </th>
									
								</tr>
							</thead>
							<tbody >
									<tr>
										<td>121212</td>
										<td>20 Maret 2012</td>
										<td>Jayadi</td>
										<td>Gatau</td>
										<td>Ready</td>
									</tr>
							</tbody>
						</table>
					</div>
					<br><br>
				</form>

            </div>
		</div>

		<div class="modal fade" id="modalAdaan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
											<td width="10%">Pilih</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Parame</td>
											<td style="text-align:center"><a href="#" class ="addNew"><i class="glyphicon glyphicon-check"></i></a></td>
										</tr>
										<tr>
											<td>Panadol</td>
											<td style="text-align:center"><a href="#" class ="addNew"><i class="glyphicon glyphicon-check"></i></a></td>
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

		<div class="modal fade" id="ptgas" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Pilih Petugas</h3>
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

        <div class="tab-pane" id="penerimaan"> 
			<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Penerimaan Obat</div>
	            <div id="btnBawahTerimaObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoTerimaObat">
            	<form class="form-horizontal" role="form">
        			
					<div class="form-group">			
	            		<label class="control-label col-md-2" style="margin-top: 5px">Nomor Penerimaan 
						</label>
						<div class="col-md-3">
							<input type="text" class="form-control" id="nmrTerima" name="nmrTerima" placeholder="Nomor Penerimaan"/>
						</div>
						<div class="col-md-1"></div>
						<label class="control-label col-md-2" style="margin-top: 5px;">Jenis Dana 
						</label>
						<div class="col-md-3" style="float:left" >
							<input type="text" class="form-control" id="jnsDana" name="jnsDana" placeholder="Jenis Dana"/>
						</div>
					</div>

					<div class="form-group">			
	            		<label class="control-label col-md-2" style="margin-top: 5px">Tanggal Penerimaan 
						</label>
						<div class="col-md-3">
							<input type="text" class="form-control" data-provide="datepicker" name="tglTerima" placeholder="Tanggal Penerimaan">
						</div>
						<div class="col-md-1"></div>
						<label class="control-label col-md-2" style="margin-top: 5px;">Penyedia 
						</label>
						<div class="col-md-3" style="float:left" >
							<input type="text" class="form-control" id="penyediaObatTerima" name="penyediaObatTerima" placeholder="Penyedia"/>
						</div>
					</div>

					<div class="form-group">			
	            		<label class="control-label col-md-2" style="margin-top: 5px">Petugas Input 
						</label>
						<div class="col-md-3">
							<input type="text" class="form-control" id="ptgasInputObat" name="ptgasInputObat" placeholder="Petugas"  data-toggle="modal" data-target="#ptgas"/>
						</div>
						<div class="col-md-1"></div>
						<label class="control-label col-md-2" style="margin-top: 5px;">Keterangan 
						</label>
						<div class="col-md-3" style="float:left" >
							<textarea class="form-control" id="ketObat" name="ketObat"></textarea>
						</div>
						
					</div>

					<a href="#modalTerima" data-toggle="modal"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Obat Penerimaan" style="margin-left : -30px">&nbsp;Tambah Penerimaan</i></a>
						<div class="clearfix"></div>

					<div class="portlet-body" style="margin: 30px 10px 0px -50px">
							
						<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven">
							<thead>
								<tr class="info" >
									<th  style="text-align:left"> Nama Obat </th>
									<th  style="text-align:left"> Satuan </th>
									<th  style="text-align:left"> Batch </th>
									<th  style="text-align:left"> Tgl Kadaluarsa </th>
									<th  style="text-align:left"> Quantity </th>
									<th style="text-align:left"> Diskon</th>
									<th  style="text-align:left"> Harga </th>
									<th  style="text-align:left"> Total </th>
									
								</tr>
							</thead>
							<tbody id="addinputterima">
									<!-- <tr>
																	
									</tr> -->
							</tbody>
						</table>

						<div class="form-group">
							<div class="col-md-2 pull-right">
								<label class="control-label pull-right" style="font-size:3em;">0</label>
							</div>
							<div class="col-md-2 pull-right" style="width:150px; margin-top:5px;">
								Sub Total : 
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 pull-right" style="width:140px;">
								<input type="text" class="form-control" id="potongan" name="potongan" placeholder="Potongan" />
							</div>
							<div class="col-md-2 pull-right" style="width:100px;">
			         			<select class="form-control select" name="jenispotongan" id="selectpotongan" >
									<option selected>Pilih</option>
									<option value="%">%</option>
									<option value="rp">Rp. </option>
								</select>
							</div>
							<div class="col-md-2 pull-right" style="width:150px; margin-top:5px;">
								Potongan : 
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 pull-right">
								<input type="text" class="form-control" id="ppn" name="ppn" placeholder="PPN" />
							</div>
							<div class="col-md-2 pull-right" style="width:150px; margin-top:5px;">
								PPN (%) : 
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 pull-right">
								<label class="control-label pull-right" style="font-size:3em;color:red;">0</label>
							</div>
							<div class="col-md-2 pull-right" style="width:150px; margin-top:5px;">
								Grand Total : 
							</div>
						</div>


						<div class="form-group">
							<div class="pull-right" style="margin-bottom:10px;margin-right:18px;">
								<button class="btn btn-warning">Reset</button>
								<button class="btn btn-success">Cetak</button>
							</div>
						</div>
					</div>

				</form>
					
			</div> 

			<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Riwayat Penerimaan</div>
	            <div id="btnBawahRiwTerimaObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoRiwTerimaObat">

	            <form class="form-horizontal" role="form">
	            	<div class="form-group">
						<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by</label>
						<div class="col-md-2" >
							<div class="input-icon" style="margin-left:-50px;">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
		   				<div class="col-md-2" style="margin-left:-10px">
							<input type="text" class="form-control" id="penyedia" name="penyedia" placeholder="Penyedia"/>
						</div>
						
						<div class="col-md-2" style="margin-left:-10px">
							<input type="text" class="form-control" id="jenisdana" name="jenisdana" placeholder="Jenis Dana"/>
						</div>

						<div class="col-md-2" style="margin-left:-10px">
							<button type="submit" class="btn btn-warning">Filter</button>
						</div>
					</div>

					<hr class="garis" style="margin-left:-50px;">

					<div class="portlet-body" style="margin: 20px 10px 0px -50px">
							
							<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven">
								<thead>
									<tr class="info" >
										<th  style="text-align:left"> Nama Obat </th>
										<th  style="text-align:left"> Satuan </th>
										<th  style="text-align:left"> Batch </th>
										<th  style="text-align:left"> Tgl Kadaluarsa </th>
										<th  style="text-align:left"> Quantity </th>
										<th style="text-align:left"> Diskon</th>
										<th  style="text-align:left"> Harga </th>
										<th  style="text-align:left"> Total </th>
										
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
											<td></td>
											<td></td>								
										</tr>
								</tbody>
							</table>
						
					</div>
				</form>	
			</div> 
        </div>

<!-- arya -->
<div class="modal fade" id="modalTerima" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
											<td width="10%">Pilih</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Parame</td>
											<td style="text-align:center"><a href="#" class ="addNewTerima"><i class="glyphicon glyphicon-check"></i></a></td>
										</tr>
										<tr>
											<td>Panadol</td>
											<td style="text-align:center"><a href="#" class ="addNewTerima"><i class="glyphicon glyphicon-check"></i></a></td>
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

        <div class="tab-pane" id="permintaan">    
			<div class="dropdown" id="btnBawahMintaObat" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Permintaan Obat</div>
	            <div id="btnBawahMintaObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>

            <div class="informasi" id="infoMintaObat">
            	<form class="form-horizontal" role="form">
            			<div class="form-group">
            				<div class="col-md-2">
            					<label class="control-label">Nomor Permintaan</label>
            				</div>
            				<div class="col-md-2">
            					<input type="text" class="form-control" name="noPermApoUm" id="noPermApoUm" placeholder="Nomor Permintaan"/>
							</div>
							<div class="col-md-2">
            					<label class="control-label">Keterangan</label>
            				</div>
            				<div class="col-md-2">
            					
								<textarea class="form-control" id="ketObatApoUm" name="ketObatApoUm"></textarea>	
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
							
            			</div>
						<a href="#modalMintaApoUm" data-toggle="modal"><i class="fa fa-plus" style="margin-left : -10px">&nbsp;Tambah Obat</i></a>
						<div class="clearfix"></div>
						
						<div class="portlet box red">
							<div class="portlet-body" style="margin: 0px 40px 60px -20px">
							
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
									
									<tbody  id="addinputMintaApoUm" class="addKosong apo">
											<!-- <tr>
												<td colspan="6" style="text-align:center" id="dataKosong">DATA KOSONG</td>												
											</tr> -->
									</tbody>
								</table>

								<div class="form-group pull-right" style="margin-right:0px;">
									<button class="btn btn-success">SIMPAN</button>
								</div>
							</div>
						</div>
						<div class="modal fade" id="modalMintaApoUm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
														<td>Stok Gudang</td>
														<td>Tgl Kadaluarsa</td>
														<td width="10%">Pilih</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Paramex</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td>10</td>
														<td>Paramex</td>
														<td style="text-align:center"><a href="#" class ="addNewApoUm"><i class="glyphicon glyphicon-check"></i></a></td>
													</tr>
													<tr>
														<td>Panadol</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td>10</td>
														<td>Paramex</td>														
														<td style="text-align:center"><a href="#" class ="addNewApoUm"><i class="glyphicon glyphicon-check"></i></a></td>
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
			<div class="modal fade" id="cek" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:100%">
						<div class="modal-dialog">
							<div class="modal-content" style="width:120%">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">SHABU-SHABU</h3>
			        			</div>
			        			<div class="modal-body">
				        			<div class="form-group">
										<div style="margin-left:20px; margin-right:20px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 50px 0px 0px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:100%;">
												<thead>
													<tr class="warning">
														<td width="20%">Nama Obat</td>
														<td >Satuan</td>
														<td width="10%">Merek</td>
														<td width="10%">Stok Unit</td>
														<td width="10%">Stok Gudang</td>
														<td width="10%">Diminta</td>
														<td width="10%">Diberikan</td>
														<td width="10%">Harga Jual</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Obat 1</td>
														<td style="text-align:center">Kilogram</td>
														<td style="text-align:center">Yamaha</td>
														<td style="text-align:center"><!-- <label class="checkbox-inline"><input type="checkbox" style="margin-top:-8px;"></label> -->20</td>
														<td style="text-align:center">10</td>
														<td style="text-align:center">30</td>
														<td style="text-align:center"><a href="#" class="editableform editable-click app" data-type="text" data-pk="1" data-original-title="Jumlah Diapprove" id="app">0</a></td>
														<td style="text-align:center">30000</td>
														
													</tr>
													
												</tbody>
											</table>												
										</div>
									</div>
			        			</div>
			        			<div class="modal-footer">
			 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
			 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
						      	</div>
							</div>
						</div>
			</div>
			<!-- <div class="dropdown" id="btnBawahRiwMintaObat" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Riwayat Persetujuan Permintaan</div>
	            <div id="btnBawahRiwMintaObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            

            <div class="informasi" id="infoRiwMintaObat">
            	<form class="form-horizontal" role="form">
            	
		        	<div class="form-group">
						<label class="control-label col-md-2" style="margin-right:-50px;"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter By : 
						</label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="dept" name="dept" placeholder="Department"/>
						</div>
						
						<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
							</div>
						</div>

						<div class="col-md-2" style="margin-left:-10px">
							<button type="submit" class="btn btn-warning">Filter</button>
						</div>
					</div>
					
					<hr class="garis" style="margin-left:-50px;">

	           		<div class="portlet box red">
						
						<br>
						<div class="portlet-body" style="margin: 0px 10px 0px -50px">
						
							<table class="table table-striped table-bordered table-hover table-responsive">
								<thead>
									<tr class="info" >
										<th  style="text-align:left"> Waktu Persetujuan</th>
										<th  style="text-align:left"> Departemen </th>
										<th  style="text-align:left"> Petugas Input </th>
										<th  style="text-align:left"> Keterangan </th>
										<th  style="text-align:left"> Action </th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>12 Desember 2012</td>
										<td>Kandungan</td>
										<td>Bersalin</td>
										<td>Arya</td>
										<td style="text-align:center">
											<a href="#detailApp"  data-toggle="modal" data-target="#cekDet"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Detail">
											</i></a>	
										</td>						
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</form>
            </div> -->
        </div>

        <div class="tab-pane" id="returbarang"> 
        	<div class="dropdown" id="btnBawahRetDepartemen" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Retur Obat Gudang</div>
	            <div id="btnBawahRetDepartemen" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>

           <div class="informasi" id="infoRetDepartemen">
            	<form class="form-horizontal" role="form">
            			<div class="form-group">
            				<div class="col-md-2">
            					<label class="control-label">Nomor Retur</label>
            				</div>
            				<div class="col-md-2">
            					<input type="text" class="form-control" name="noRetApoUm" id="noRetApoUm" placeholder="Nomor Retur"/>
							</div>
							<div class="col-md-2">
            					<label class="control-label">Keterangan</label>
            				</div>
            				<div class="col-md-2">
            					
								<textarea class="form-control" id="ketObatRetApoUm" name="ketObatRetApoUm"></textarea>	
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
            			</div>
						<a href="#modalRetApoUm" data-toggle="modal"><i class="fa fa-plus" style="margin-left : -10px">&nbsp;Tambah Obat</i></a>
						<div class="clearfix"></div>
						
						<div class="portlet box red">
							<div class="portlet-body" style="margin: 0px 40px 60px -20px">
							
								<table class="table table-striped table-bordered table-hover table-responsive" id="tabRetur">
									<thead>
										<tr class="info" >
											<th  style="text-align:left"> No. </th>
											<th  style="text-align:left"> Nama Obat </th>
											<th  style="text-align:left"> Satuan </th>
											<th  style="text-align:left"> Merek </th>
											<th  style="text-align:left"> Stok Sisa </th>
											<th  style="text-align:left"> Jumlah Diretur </th>
											<th  style="text-align:left"> Action </th>			
										</tr>
									</thead>
									
									<tbody  id="addinputRetApoUm" class="returObat">
											<!-- <tr>
												<td colspan="6" style="text-align:center" id="dataKosong">DATA KOSONG</td>												
											</tr> -->
									</tbody>
								</table>

								<div class="form-group pull-right" style="margin-right:0px;">
									<button class="btn btn-success">SIMPAN</button>
								</div>
							</div>
						</div>
						
						<div class="modal fade" id="modalRetApoUm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
															<td style="text-align:center"><a href="#" class ="addNewRetApoUm"><i class="glyphicon glyphicon-check"></i></a></td>
														</tr>
														<tr>
															<td>Panadol</td>
															<td>Paramex</td>
															<td>Paramex</td>
															<td>Paramex</td>
															<td style="text-align:center"><a href="#" class ="addNewRetApoUm"><i class="glyphicon glyphicon-check"></i></a></td>
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
		
		<div class="tab-pane" id="opname">
			<div class="dropdown" id="btnBawahStokOpname" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Stok Opname</div>
	            <div id="btnBawahStokOpname" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoStokOpname">
            	<form class="form-horizontal" role="form" style="margin-left:20px;margin-right:40px;">
            		
            		<div class="form-group" id="rowfix2">
	            		<div class='row offer-pg-cont'>
							<div class='offer-pg'>
		            			<div class="round-button portfolio-item" style="margin-left: 5px;">
		            				<div class="round-button-tes round-button-circle round-button-active"><a href="#" class="round-button">A</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">B</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">C</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">D</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">E</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">F</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">G</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">H</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">I</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">J</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">K</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">L</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">M</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">N</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">O</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">P</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">Q</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">R</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">S</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">T</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">U</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">V</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">W</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">X</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">Y</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"><a href="#" class="round-button">Z</a>
		            				</div>
		            			</div>
						    </div>

	            		</div>
            		</div>
            		<div class="form-group">
            			
            			<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="namaObatOpnameApoUmum" placeholder="Nama Obat">						            			
            			</div>
            			<div class="col-md-2">
							<button class="btn btn-warning">FILTER</button>
						</div>
            		</div>
            		<hr class="garis" style="margin-left:-10px">
            		<br>
            		<div class="form-group">
            			<label class="control-label col-md-2">Input Tanggal Opname</label>
            			<div class="col-md-2">
							<input type="text" class="form-control" data-provide="datepicker" name="tglInfoTerObatApoUmum" placeholder="Tanggal Opname">						            			
            			</div>
            		</div>
				<br>

					<div class="portlet box red" >
						<div class="portlet-title">
						</div>
						<div class="portlet-body" style="margin: 0px -10px 0px -60px">
							
							<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven1">
								<thead>
									<tr class="info" >
										
										<th  style="text-align:left"> No. </th>
										<th  style="text-align:left"> Opname Terakhir </th>
										<th  style="text-align:left"> Nama Obat </th>
										<th  style="text-align:left"> Merek </th>
										<th  style="text-align:left"> Harga </th>
										<th  style="text-align:left"> Stok Barang </th>
										<th  style="text-align:left"> Stok Fisik </th>
										<th  style="text-align:left"> Selisih </th>
										<th  style="text-align:left"> Jumlah </th>
										<th  style="text-align:left" width="10%"> Opname </th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>1</td>
										<td>2</td>
										<td>3</td>
										<td>4</td>
										<td>5</td>
										<td><a href="#" data-type="text" data-pk="1" data-original-title="Edit" class="editInven" style="color:black;cursor:default;">Coba</a></td>
										<td>6</td>
										<td>7</td>
										<td><a href="#" class="edIven" id="status">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="#" id="editInvenBut">Simpan</a>
										</td>
									</tr>
										
								</tbody>
							</table>
							<div class="pull-right">
								<!-- <button type="submit" class="btn btn-success">Simpan</button>	 -->
							</div>
							<br>
							<br>
							<br>
						</div>
					</div>

						
            	</form>

            </div>
		</div>

	<div class="tab-pane" id="laporan">    
		
            <div class="informasi" id="ibblo">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Obat</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
	        
	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
						<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
						<div class="col-md-2" style="width:200px">
							<select class="form-control select" name="filterInv" id="filterInv">
								<option selected>Pilih</option>
								<option value="Jenis Obat">Jenis Obat</option>
								<option value="Merek">Merek</option>
								<option value="Tahun Pengadaan">Tahun Pengadaan</option>
								<option value="Penyedia">Penyedia</option>					
							</select>	
						</div>
						<div class="col-md-2" style="margin-left:-15px; width:200px;" >
							<input type="text" class="form-control" id="filterby" name="valfilter" placeholder="Value"/>
						</div>
					
						<div class="col-md-1">
							<select class="form-control select" name="filterSat" id="filterSat" style="margin-left:-15px;width:80px">
									<option selected>Pilih</option>
									<option value="and" >And</option>
									<option value="or">Or</option>
							</select>
						</div>
						<div class="col-md-2" style="margin-left:-20px; width:200px;">
							<select class="form-control select" name="filterInv" id="filterInv">
								<option selected>Pilih</option>
								<option value="Jenis Obat">Jenis Obat</option>
								<option value="Merek">Merek</option>
								<option value="Tahun Pengadaan">Tahun Pengadaan</option>
								<option value="Penyedia">Penyedia</option>					
							</select>	
						</div>
						<div class="col-md-2" style="margin-left:-15px; width:200px;">
							<input type="text" class="form-control" id="filterby" name="valfilter" placeholder="Value"/>
						</div>
						</div>		

					<div class="form-group">
						<div class="form-inline">
							<div class="radio-list">
								<div class="col-md-3" style="margin-left:120px;"> 
									<input type="radio"  name="hd" value="generik" checked /><div style="float:right;margin-top:6px;margin-right:200px">Generik</div> 
								</div>
								<div class="col-md-4" style="width:200px; margin-left:-150px ;">	         		
									<input type="radio"  name="hd"  value="non generik"/><div style="float:right;margin-top:6px;margin-right:50px">Non-generik</div>
								</div>	
								<div class="col-md-4" style="width:200px; margin-left:-10px ;">	         		
									<input type="radio"  name="hd"  value="semua"/><div style="float:right;margin-top:6px;margin-right:80px">Semua</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="form-group">
							<div class="col-md-2 pull-right" >
								<button class="btn btn-info " style="margin-left:10px">PRINT LAPORAN</button> 
							</div>
					</div>
				</form>
			</div>



            

             <div class="informasi" id="ibblok">
            	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Obat Kadaluarsa</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
	        		

	        		<div class="form-group" style="margin-top:20px;">
						<div class="form-inline">
							<div class="radio-list">
								<div class="col-md-3" style="margin-left:120px;"> 
									<input type="radio"  name="hd" value="expired" checked /><div style="float:right;margin-top:6px;margin-right:200px">Expired</div> 
								</div>
								<div class="col-md-4" style="width:200px; margin-left:-150px ;">	         		
									<input type="radio"  name="hd"  value="expired 3 bulan"/><div style="float:right;margin-top:6px;margin-right:20px">Expired 3 Bulan</div>
								</div>	
								<div class="col-md-4" style="width:200px; margin-left:-10px ;">	         		
									<input type="radio"  name="hd"  value="expired 6 bulan"/><div style="float:right;margin-top:6px;margin-right:20px">Expired 6 Bulan</div>
								</div>	
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 pull-right" >
								<button class="btn btn-info ">PRINT LAPORAN</button> 
							</div>
						</div>
					</div>
					
	        	</form>
	        </div>

            <div class="informasi" id="ibblrso">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Riwayat Stok Opname</div>
	        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
	        		

	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
				
	        			<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
	        			<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 pull-right">
								<button class="btn btn-info ">PRINT LAPORAN</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>

            <div class="informasi" id="ibblrpj">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Penjualan Obat</div>
	        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
	        		

	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
				
	        			<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
	        			<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 pull-right">
								<button class="btn btn-info ">PRINT LAPORAN</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>


	        <div class="informasi" id="ibblsw">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Stok Warning</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
	        		

	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
						<div class="form-group">
							
							<div class="col-md-2" style="margin-left:110px;">
								<button class="btn btn-info ">PRINT LAPORAN</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>

     
            <div class="informasi" id="ibblosot">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Stok Obat Terakhir</div>
	        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
		        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
							<div class="form-group">
								<div class="col-md-2" style="margin-left:110px;">
									<button class="btn btn-info ">PRINT LAPORAN</button> 
								</div>
							</div>
						</div>
	        		</form>
	        	
	        </div>
	        <br>
        </div>

</div>

				 
											