
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
    <li><a href="#pengadaan" data-toggle="tab">Pengadaan Gudang Obat</a></li>
    <li><a href="#penerimaan" data-toggle="tab">Penerimaan Barang</a></li>
    <li><a href="#permintaan" data-toggle="tab">Persetujuan Permintaan</a></li>
    <li><a href="#opname" data-toggle="tab">Stok Opname</a></li>
</ul>


<div id="my-tab-content" class="tab-content">

        <div class="tab-pane active" id="mo">
			<div class="dropdown" id="btnBawahMasObat" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Tambah Barang</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div id="infoMasObat">
	        	<form class="form-horizontal informasi" role="form">				
					<div class="form-group">			
	            		<label class="control-label col-md-2" >Nama Barang 
						</label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="nmBarang" name="nmBarang" placeholder="Nama Barang" />
						</div>
						<div class="col-md-2"></div>
						<label class="control-label col-md-2" >Harga Barang 
						</label>
						<div class="col-md-2">
							<input type="text" class="form-control numberrequired" id="hgDasarBarang" name="hgDasarBarang" placeholder="Harga Dasar"/>
						</div>
					</div>

					<div class="form-group">			
	            		<label class="control-label col-md-2" >Satuan Barang 
						</label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectSatBarang" id="selectSatBarang" >
								<option value="" selected>Pilih</option>
								<?php if (!empty($satuan_obat)) {
		         					foreach ($satuan_obat as $value) {
		         						echo '<option value="'.$value['satuan_id'].'">'.$value['satuan'].'</option>';	
		         					}
		         				} ?>
							</select>
						</div>
						<div class="col-md-2"></div>
						<label class="control-label col-md-2" >Stok Min 
						</label>
						<div class="col-md-2">
							<input type="text" class="form-control numberrequired" id="stokmin" name="stokmin" placeholder="Stok Minimal" />
						</div>
					</div>

					<div class="form-group">			
	            		<label class="control-label col-md-2" >Group 
						</label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectGrpBarang" id="selectGrpBarang" >
		         				<option value="" selected>Pilih</option>
								<option value="1">Grup A</option>
								<option value="2">Grup B</option>
								<option value="3">Grup C</option>
								<option value="4">Grup D</option>
							</select>
						</div>
						<!-- <div class="col-md-2"></div>
						<label class="control-label col-md-2" >Harga 
						</label>
						<div class="col-md-2">
							<input type="text" class="form-control numberrequired" id="hargaBrg" name="hargaBrg" placeholder="Harga Barang" />
						</div> -->
						<div class="col-md-2"></div>
						<div class="form-inline">
							<div class="radio-list">
								<div class="col-md-2" > 
									<input type="radio"  name="hd" value="1" data-title="Hide"  /><div style="float:right;margin-top:6px;margin-right:123px">Hide</div> 
								</div>
								<div class="col-md-3">	         		
									<input type="radio"  name="hd"  value="0" data-title="Unhide" checked /><div style="float:right;margin-top:6px;margin-right:213px">Unhide</div>
								</div>	
							</div>
						</div>
					</div>

					<div class="form-group">			
	            		<label class="control-label col-md-2" >Merek 
						</label>
						<div class="col-md-2">	         		
							<input type="text" class="form-control" id="namaMerk" name="namaMerk" placeholder="Merek" />
							<!-- data-toggle="modal" data-target="#mdMerk" -->
						</div>
					</div>

					<div class="form-group" style="margin-top:40px;">
						<div class="col-md-6"></div>
						<div class="col-md-2">
							<button class="btn btn-danger" id="btnBatalBrg" style="margin-left:35px;">BATAL</button>
						</div>
						<div class="col-md-3"> 				 
							<button class="btn btn-danger" id="rstBarang" style="margin-left:10px">RESET</button>
							<button type="submit" class="btn btn-success" id="smpanBarang" style="margin-left:10px">SIMPAN</button>
							<button type="submit" class="btn btn-success" id="ubahBarang" style="margin-left:10px">UBAH</button>
						</div>
					</div>
				</form>
				<div class="tabelinformasi">
					<br><hr class="garis"><br>
					<div class="form-group informasi">
	            		<label class="control-label col-md-2" style="margin-top:5px;"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by</label>
						<div class="col-md-2">	         		
							<input type="text" class="form-control" id="nmObatBwh" name="nmObatBwh" placeholder="Nama Barang"/>
						</div>
						<div class="col-md-2">
							<select class="form-control select" name="selectSatObat" id="selectSatObat">
								<option selected>Satuan</option>
								<option value="GR">Gram</option>
								<option value="KG">Kilogram</option>
								<option value="Ons">Ons</option>
								<option value="ALL">All</option>
							</select>
						</div>
						
						<div class="col-md-1" >
							<button type="submit" class="btn btn-warning">Filter</button>
						</div>

						<div class="col-md-2" >
							<button type="submit" class="btn btn-danger">Stok Warning</button>
						</div>
					</div>
					<br>
					<div class="portlet box red">
						<div class="portlet-body" style="margin: 40px 20px 30px 20px">
						
							<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
								<thead>
									<tr class="info" >
										<th > Nama Barang </th>
										<th > Satuan </th>
										<th > Merek </th>
										<th > Group </th>
										<th > Stok Min </th>
										<th > Stok Total </th>
										<th > Harga </th>
										<th  style="text-align:center" width="100px"> Action </th>
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
										<td style="text-align:center"><a href="#" class="edBarang" id="edMasBarang"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<a href="#" class="edBarang"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak"></i></a></td>							
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
            </div>

            <!-- modals here -->
			<div class="modal fade" id="nmDetBarang" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Barang</h3>
	        			</div>
	        			<div class="modal-body">
		        			<div class="form-group">
		        				<form class="form-horizontal" role="form" method="post" id="formcaridetailbarang">
									<div class="form-group">	
										<div class="col-md-5" style="margin-left:15px;">
											<input type="text" class="form-control" name="katakunci" id="katakuncibarangdetail" placeholder="Nama barang"/>
										</div>
										<div class="col-md-2">
											<button type="button" class="btn btn-info">Cari</button>
										</div>
										<br><br>	
									</div>
								</form>		
								<div style="margin-left:10px; margin-right:10px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 15px 0px 15px">
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" >
										<thead>
											<tr class="info">
												<th>Nama Barang</th>
												<th width="10%">Pilih</th>
											</tr>
										</thead>
										<tbody id="tbodybarangdetail">
											<tr>
												<td style="text-align:center" class="kosong" colspan="2">Cari Data Barang</td>
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
            <div class="modal fade" id="mdMerk" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Merek</h3>
	        			</div>
	        			<div class="modal-body">
		        			<div class="form-group">
								<div class="form-group">	
									<div class="col-md-4" style="margin-left:35px;">
										<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama Obat"/>
									</div>
									<div class="col-md-2">
										<button type="button" class="btn btn-info">Cari</button>
									</div>
									<br><br>	
								</div>		
								<div style="margin-left:20px; margin-right:20px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 10px 0px 40px">
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
										<thead>
											<tr class="info">
												<td>Nama Merk</td>
												<td width="10%">Pilih</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Paramex</td>
												<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
											</tr>
											<tr>
												<td>Panadol</td>
												<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
											</tr>

										</tbody>
									</table>												
								</div>
								<form method="post" id="tambahmerbarangbaru">
									<div style="margin-left:20px; margin-right:20px;"><hr></div>
									<div class="form-group">	
										<div class="col-md-4" style="margin-left:35px;">
											<input type="text" class="form-control" name="newbarangmerk" id="newbarangmerk" placeholder="Tambah Baru"/>
										</div>
										<div class="col-md-2">
											<button type="submit" class="btn btn-success" style="width:150px;">Tambah Baru</button>
										</div>
										<br>	
									</div>
								</form>	
							</div>
	        			</div>
	        			<div class="modal-footer">
	 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				      	</div>
					</div>
				</div>
			</div>
			<!-- end modals -->

			<div class="dropdown" id="btnBawahDetObat1" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Tambah Detail Barang</div>
	            <div id="btnBawahDetBarang1" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div id="infoDetObat1">
            	<form class="form-horizontal informasi" role="form">
					<div class="form-group">			
	            		<label class="control-label col-md-2" >Nama Barang 
						</label>
						<div class="col-md-2">	         		
						<input type="text" class="form-control" id="nmDetBarang" name="nmDetBarang" placeholder="Nama Barang" data-toggle="modal" data-target="#nmDetBarang" />
						</div>
						<div class="col-md-2"></div>
						<label class="control-label col-md-2" >Tahun Pengadaan
						</label>
						<div class="col-md-2">
							<select class="form-control select" name="selectTahBarang" id="selectTahBarang">
								<option value="1" selected>H-5tahun</option>
								<option value="2">H+2tahun</option>
								<option value="ALL" >All</option>
							</select>
						</div>
					</div>

					<div class="form-group">			
	            		<label class="control-label col-md-2" >Satuan Barang 
						</label>
						<div class="col-md-2">
		         		<input type="text" class="form-control" id="satBarangDet" placeholder="Satuan Barang" disabled />	
						</div>
						<div class="col-md-2"></div>
						<label class="control-label col-md-2">Sumber Dana 
						</label>
						<div class="col-md-2">
							<select class="form-control select" name="selectSumDanaBarang" id="selectSumDanaBarang">
								<option value="1" selected>Pribadi</option>
								<option value="2">Bank</option>
								<option value="ALL" >All</option>
							</select>
						</div>
					</div>

					<div class="form-group">			
	            		<label class="control-label col-md-2" >Merek 
						</label>
						<div class="col-md-2">
		         		<input type="text" class="form-control" id="merkBarangDet" placeholder="Merek Barang" disabled />	
						</div>
						<div class="col-md-2"></div>
						<label class="control-label col-md-2" >Penyedia 
						</label>
						<div class="col-md-2">
		         		<input type="text" class="form-control" id="pedBarangDet"  placeholder="Penyedia Barang" disabled />	
						</div>
					</div>

					<div class="form-group">			
	            		<label class="control-label col-md-2" >Jumlah
						</label>
						<div class="col-md-2">
		         		<input type="text" class="form-control" id="jmlDetBarang" placeholder="Jumlah"  />	
						</div>
					</div>

					<div class="form-group" style="margin-top:30px;">
						<div class="col-md-8"></div>
						<div class="col-md-1">
							<button class="btn btn-danger" id="btnBatalDetObat" style="margin-left:35px;">BATAL</button>
						</div>
						<div class="col-md-3"> 				 
							<button class="btn btn-danger" style="margin-left:10px">RESET</button>
							<button class="btn btn-success" style="margin-left:10px" id="smpanDetObat">SIMPAN</button>
							<button class="btn btn-success" style="margin-left:10px" id="ubahDetObat">UBAH</button>
						</div>
					</div>

				</form>
				<div class="tabelinformasi">
					<br>
					<hr class="garis">
					<div class="portlet box red">
						<div class="portlet-body" style="margin: 10px 20px 10px 20px">
						
							<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
								<thead>
									<tr class="info" >
										<th > Tahun Pengadaan </th>
										<th > Sumber Dana </th>
										<th > Penyedia </th>
										<th > Stok </th>
										<th width="10%"> Action </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>						
										<td style="text-align:center"><a href="#" class="edLogBarang" id="edDetLogBarang"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<!-- <a href="#inout" data-toggle="modal" data-original-title="In Out Data Pasien"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="In Out">
											
										</i></a> --></td>							
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
	        </div>		
        </div>

        <div class="tab-pane" id="inventori">    
        	<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Inventori</div>
	        </div>
            <br>

            <div id="infoInventoriGudangBarang">
	        	<form class="form-horizontal informasi" role="form">
        	
	        		<div class="form-group">
						<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
						<div class="col-md-2">
							<select class="form-control select" name="filterInv" id="filterInvGdgBarang">
								<option value="Nama Barang" selected>Nama Barang</option>
								<option value="Group Barang">Group Barang</option>
								<option value="Sumber Dana">Sumber Dana</option>
								<option value="Penyedia">Penyedia</option>					
							</select>
						</div>
						<div class="col-md-2" >
							<input type="text" class="form-control" data-provide="datetimepicker" id="invBarang" name="valInBarang" placeholder="Value"/>
						</div>
						
						<div class="col-md-2" >
							<select class="form-control select" name="filterSatGdg" id="filterSatGdg">
									<option value="" selected>Satuan</option>
									<option value="KG" >KG</option>
									<option value="Gram">Gram</option>					
							</select>
						</div>

						<div class="col-md-1" >
							<button class="btn btn-warning">FILTER</button> 
						</div>
					</div>
				</form>

				<div class="tabelinformasi">

					<hr class="garis">

					<div class="portlet box red" >
						<div class="portlet-title">
							<!-- <label class="control-label col-md-3" >Daftar Barang</label> -->
						</div>
						<div class="portlet-body" style="margin: 20px 20px 10px 20px">
							
							<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tblInven">
								<thead>
									<tr class="info" >
										<th width="20">No.</th>
										<th > Nama Barang </th>
										<th > Merek </th>
										<th > Harga </th>
										<th > Stok </th>
										<th > Satuan </th>
										<th > Tahun Pengadaan</th>
										<th width="100"> Action </th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td style="text-align:center"><a href="#inout" data-toggle="modal" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
											<a href="#edInvenGdg" data-toggle="modal" class="edObat"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
										</td>
									</tr>
										
								</tbody>
							</table>

							<br>
							<br><br><br>
						</div>

						<div class="modal fade" id="inout" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content" >
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">IN OUT</h3>
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
												<label class="control-label col-md-3" >In / Out 
												</label>
												<div class="col-md-4">
								         		<select class="form-control select" name="io" id="io">
														<option value="IN" selected>IN</option>
														<option value="OUT">OUT</option>					
												</select>
												</div>

										</div>
										<div class="form-group">
					        					<label class="control-label col-md-3" >Sisa Stok 
												</label>
												<div class="col-md-4" >
								         		<input type="text" class="form-control" name="sisaInOut" placeholder="Sisa Stok" readonly>
												</div>
												
										</div>
										<div class="form-group">
					        					<label class="control-label col-md-3" >Jumlah in/out
												</label>
												<div class="col-md-4" >
								         		<input type="text" class="form-control" name="jmlInOut" placeholder="Jumlah">
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
				 			       		<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
							      	</div>
								</div>
							</div>
						</div>
						
						<div class="modal fade" id="edInvenGdg" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
														<th width="10%"> Waktu </th>
														<th> IN / OUT </th>
														<th> Jumlah </th>
														<th> Stok Akhir </th>
														<th>  Keterangan </th>
													</tr>
												</thead>
												<tbody>
													<tr>
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
				 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
							      	</div>
								</div>
							</div>
						</div>
						
					</div>
						
				</div>
			</div>
        </div>

        <div class="tab-pane" id="adaan">
        	<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Tambah Perencanaan Pengadaan</div>
	            <div id="btnBawahAdaanGudang" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div id="infoAdaanGudang">
            	<form class="form-horizontal" role="form">
            		<div class="informasi">
						<div class="form-group">			
		            		<label class="control-label col-md-2">Nomor 
							</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="nmrAdaanGudang" name="nmrAdaanGudang" placeholder="Nomor Perencanaan Pengadaan"/>
							</div>
							<div class="col-md-1"></div>
							<label class="control-label col-md-2">Tanggal Pengadaan 
							</label>
							<div class="col-md-2">
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
								</div>	
							</div>
						</div>

						<div class="form-group">			
	            			<label class="control-label col-md-2">Keterangan 
							</label>
							<div class="col-md-3" style="float:left" >
								<textarea class="form-control" id="ketAdaan" name="ketAdaanGudang"></textarea>
							</div>
						</div>
					</div>
											
					<br>
					<hr class="garis" style="margin-left:10px;">
					
					<div class="tableinformasi">
						<br>
						<a href="#modalAdaan" data-toggle="modal"  style="margin-left:20px;font-size:11pt;"	><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Obat Pengadaan">&nbsp;Tambah Pengadaan</i></a>
						<div class="clearfix"></div>

						<div class="portlet-body" style="margin: 10px 20px 0px 20px">
						
							<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven">
								<thead>
									<tr class="info" >
										<th  width="10%"> Nama Barang </th>
										<th > Penyedia </th>
										<th > Quantity </th>
										<th > Satuan </th>
										<th > Harga </th>
										<th > Total </th>
										
									</tr>
								</thead>
								<tbody  id="addinputAdaBarang">
										<tr>
														
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
						<br>
					</div>
						
					<div class="modal fade" id="modalAdaan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">Pilih Barang</h3>
			        			</div>
			        			<div class="modal-body">

				        			<div class="form-group">
										<div class="form-group">	
											<div class="col-md-5" style="margin-left:15px;">
												<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
											</div>
											<div class="col-md-2">
												<button type="button" class="btn btn-info">Cari</button>
											</div>
											<br><br>	
										</div>		
										<div style="margin-left:10px; margin-right:10px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 15px 0px 15px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa">
												<thead>
													<tr class="info">
														<th>Nama Barang</th>
														<th width="10%">Pilih</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Paramex</td>
														<td style="text-align:center"><a href="#" class ="addNewAdaBarang"><i class="glyphicon glyphicon-check"></i></a></td>
													</tr>
													<tr>
														<td>Panadol</td>
														<td style="text-align:center"><a href="#" class ="addNewAdaBarang"><i class="glyphicon glyphicon-check"></i></a></td>
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

			<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Riwayat Pengadaan</div>
	            <div id="btnBawahRiwaAdaGudang" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>
			<div id="infoRiwaAdaGudang">
				<form class="form-horizontal" role="form">
        			<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					
						<table class="table table-striped table-bordered table-hover table-responsive tableDT">
							<thead>
								<tr class="info" >
									<th width="20">No.</th>
									<th > Nomor Pengadaan </th>
									<th > Tanggal Pengadaan </th>
									<th > Petugas Input </th>
									<th > Keterangan </th>
									<th > Status </th>
									<th width="10%"> Action </th>
									
								</tr>
							</thead>
							<tbody >
									<tr>
										<td>1.</td>
										<td>121212</td>
										<td>20 Maret 2012</td>
										<td>Jayadi</td>
										<td>Gatau</td>
										<td>Ready</td>
										<td style="text-align:center">
											<a href="#" data-toggle="modal" data-target="#viewriwadaan"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Detail">
											</i></a>	
										</td>
																	
									</tr>
							</tbody>
						</table>
					</div>
				</form>
            </div>

            <div class="modal fade" id="viewriwadaan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-600px">
				<div class="modal-dialog">
					<div class="modal-content" style="width:1200px">
						<div class="modal-header">
		    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		    				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Perencanaan Pengadaan </h3>
		    			</div>
		    			<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-5 nama goright">Nomor Pengadaan:</label>
										<div class="col-md-3 nama">	0001 </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-5 goright">Tanggal Rencana Pengadaan:</label>
										<div class="col-md-5">
											12 Desember 2012
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-4 goright">Petugas Input:</label>
										<div class="col-md-5">Khisna</div>
									</div>
								</div>
							</div>

							<div class="row">							
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-5 goright">Keterangan:</label>
										<div class="col-md-5">Bebas</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-4 goright">Status:</label>
										<div class="col-md-5">Ready</div>
									</div>
								</div>
							</div>
							<hr/>
							<table class="table table-striped table-bordered table-hover" id="tabelHasilPenunjang">
								<thead>
									<tr class="info" >
										<th> Nama Barang </th>
										<th> Penyedia </th>
										<th> Quantity </th>
										<th> Satuan </th>
										<th> Harga </th>
										<th> Total </th>
										
									</tr>
								</thead>
								<tbody id="addinput">
										<tr>
											<td>Shabu-Shabu</td>
											<td>UKDW</td>
											<td>1</td>
											<td>Shabu-Shabu</td>
											<td>UKDW</td>
											<td>1</td>					
										</tr>
								</tbody>
							</table>
						</div>
		    			<div class="modal-footer">
					       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				      	</div>
					</div>
				</div>
			</div>	
		</div>

		<div class="tab-pane" id="pengadaan">
			<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Pengadaan Gudang Obat</div>
	        </div>
            <br>

            <div class="portlet-body" style="margin: 0px 10px 0px 10px">
					
				<table class="table table-striped table-bordered table-hover table-responsive tableDT">
					<thead>
						<tr class="info" >
							<th width="20">No.</th>
							<th>Nomor Pengadaan</th>
							<th > Tanggal Pengadaan </th>
							<th > Petugas Input </th>
							<th> Status</th>
							<th width="10%"> Action </th>
							
						</tr>
					</thead>
					<tbody >
							<tr>
								<td>1.</td>
								<td style="text-align:right">1231</td>
								<td style="text-align:center">20 Maret 2012</td>
								<td>Jayadi</td>
								<td>Selesai</td>
								<td style="text-align:center">
									<a href="#" data-toggle="modal" data-target="#viewadaango"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Detail">
									</i></a>	
								</td>
							</tr>
					</tbody>
				</table>
			</div>

			<div class="modal fade" id="viewadaango" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content" >
						<form class="form-horizontal" role="form">
							<div class="modal-header">
		        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        				<h3 class="modal-title" id="myModalLabel">Detail Pengadaan Gudang Barang</h3>
		        			</div>
		        			<div class="modal-body">
		        				<div class="form-group col-md-10">
									<label class="control-label1 col-md-4 nama goright">No. Pengadaan &nbsp;:</label>
									<div class="col-md-5 nama">	0001 </div>
								</div>
								<div class="form-group col-md-10">
									<label class="control-label1 col-md-4 goright">Tanggal Tindakan&nbsp;:</label>
									<div class="col-md-8">	12 Desember 2012 </div>
								</div>
								<div class="form-group col-md-10">
									<label class="control-label1 col-md-4 goright">Petugas Input &nbsp;:</label>
									<div class="col-md-5">	0001 </div>
								</div>
									
		        				<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven">
									<thead>
										<tr class="info" >
											<th> Nama Obat </th>
											<th> Penyedia </th>
											<th> Quantity </th>
											<th> Satuan </th>
											<th> HPS </th>
											<th> T0tal </th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>bodrex</td>
											<td>kalbe</td>
											<td style="text-align:right">12</td>
											<td>kapsul</td>
											<td style="text-align:right">10000</td>
											<td style="text-align:right">120000</td>
										</tr>
									</tbody>
								</table>   			
							</div>
		        			<div class="modal-footer">
		 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Tunda</button>
		 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Proses</button>
					      	</div>
					    </form>
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
								<div class="col-md-5" style="margin-left:15px;">
									<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-info">Cari</button>
								</div>
								<br><br>	
							</div>		
							<div style="margin-left:10px; margin-right:10px;"><hr></div>
							<div class="portlet-body" style="margin: 0px 15px 0px 15px">
								<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
									<thead>
										<tr class="info">
											<th>Nama Petugas</th>
											<th width="10%">Pilih</th>
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
			<div class="dropdown" style="margin-left:10px;width:98.5%" id="btnBawahTerimaObat">
	            <div id="titleInformasi">Penerimaan Barang</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div id="infoTerimaObat">
            	<form class="form-horizontal" role="form">
	        		<div class="informasi">	
						<div class="form-group">			
		            		<label class="control-label col-md-2">Nomor Penerimaan 
							</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="nmrTerimaBrg" name="nmrTerimaBrg" placeholder="Nomor Penerimaan"/>
							</div>
							<div class="col-md-1"></div>
							<label class="control-label col-md-2">Jenis Dana 
							</label>
							<div class="col-md-3" style="float:left" >
								<input type="text" class="form-control" id="jnsDanaBrg" name="jnsDanaBrg" placeholder="Jenis Dana"/>
							</div>
						</div>

						<div class="form-group">			
		            		<label class="control-label col-md-2">Tanggal Penerimaan 
							</label>
							<div class="col-md-3">
								<input type="text" class="form-control" data-provide="datepicker" name="tglTerimaBrg" placeholder="Tanggal Penerimaan">
							</div>
							<div class="col-md-1"></div>
							<label class="control-label col-md-2">Penyedia 
							</label>
							<div class="col-md-3" style="float:left" >
								<input type="text" class="form-control" id="penyediaObatTerimaBrg" name="penyediaObatTerimaBrg" placeholder="Penyedia"/>
							</div>
						</div>

						<div class="form-group">			
		            		
							<label class="control-label col-md-2">Keterangan 
							</label>
							<div class="col-md-3" style="float:left" >
								<textarea class="form-control" id="ketObat" name="ketObat"></textarea>
							</div>
							
						</div>
					</div>	
					<div class="tabelinformasi">	
						<a href="#modalTerima" data-toggle="modal" style="margin-left:20px;"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Obat Penerimaan">&nbsp;Tambah Penerimaan</i></a>
							<div class="clearfix"></div>

						<div class="portlet-body" style="margin: 10px 10px 0px 10px">
								
							<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven">
								<thead>
									<tr class="info" >
										<th > Nama Barang </th>
										<th > Satuan </th>
										<th > Batch </th>
										<th > Quantity </th>
										<th > Diskon</th>
										<th > Harga </th>
										<th > Total </th>
										<th width="20">Action</th>
										
									</tr>
								</thead>
								<tbody id="addinputterima">
										<!-- <tr>
																		
										</tr> -->
								</tbody>
							</table>

							<div class="form-group">
								<div class="col-md-2 pull-right" style="width:240px;">
									<label class="control-label pull-right" style="font-size:1.8em;margin-top:-10px;">1.000.000</label>
								</div>
								<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
									Sub Total(Rp.) : 
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-2 pull-right" style="width:140px;">
									<input type="text" class="form-control" id="potongan" name="potongan" placeholder="Potongan" />
								</div>
								<div class="col-md-2 pull-right" style="width:100px;">
				         			<select class="form-control select" name="jenispotongan" id="selectpotongan" >
										<option value="%" selected>%</option>
										<option value="rp">Rp. </option>
									</select>
								</div>
								<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
									Potongan : 
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-1 pull-right" style="font-size:18pt; width:140px;"> 20000 </label>
								<div class="col-md-2 pull-right" style="width:100px;">
									<input type="text" class="form-control" id="ppn" name="ppn" placeholder="PPN" />
								</div>
								<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
									PPN (%) : 
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-2 pull-right" style="width:240px;">
									<label class="control-label pull-right" style="font-size:2em;color:red;">10.000.000</label>
								</div>
								<div class="col-md-2 pull-right" style="width:150px; margin-top:15px; text-align:right;">
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
					</div>
				</form>
					
			</div> 

			<div class="dropdown" style="margin-left:10px;width:98.5%" id="btnBawahRiwTerimaObat">
	            <div id="titleInformasi">Riwayat Penerimaan</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div id="infoRiwTerimaObat">

	            <form class="form-horizontal" role="form">
	            	<div class="form-group informasi">
						<label class="control-label col-md-2" style="margin-left:70px;"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter By :</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" data-date-autoclose="true" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
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

					<hr class="garis" style="margin-left:10px;">

					<br>

					<div class="portlet-body" style="margin: 20px 10px 0px 15px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tblInven">
							<thead>
								<tr class="info" >
									<th style="text-align:center; width:30px;">No.</th>
									<th> Nama Barang </th>
									<th> Satuan </th>
									<th> Batch </th>
									<th> Quantity </th>
									<th> Diskon</th>
									<th> Harga </th>
									<th> Total </th>

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
								<div class="col-md-5" style="margin-left:15px;">
									<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-info">Cari</button>
								</div>
								<br><br>	
							</div>		
							<div style="margin-left:10px; margin-right:10px;"><hr></div>
							<div class="portlet-body" style="margin: 0px 15px 0px 15px">
								<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa">
									<thead>
										<tr class="info">
											<th>Nama Obat</th>
											<th width="10%">Pilih</th>
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
	            <div id="titleInformasi">Persetujuan Permintaan</div>
	            <div id="btnBawahMintaObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <div class="tabelinformasi" id="infoMintaObat">
            	
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 25px 10px 0px 10px">
					
						<table class="table table-striped table-bordered table-hover table-responsive tableDT">
							<thead>
								<tr class="info" >
									<th width="20">No.</th>
									<th > Waktu </th>
									<th > Departemen </th>
									<th > Petugas Input </th>
									<th > Keterangan </th>
									<th width="30"> Action </th>			
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="text-align:center">1</td>
									<td>S012234</td>
									<td>Shabu-Shabu</td>
									<td>Bersalin</td>
									<td>Arya</td>
									<td style="text-align:center">
										<a href="#" data-toggle="modal" data-target="#cek"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Cek">
										</i></a>	
									</td>						
								</tr>
							</tbody>
						</table>
					</div>

					<div class="modal fade" id="cek" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-400px">
						<div class="modal-dialog" >
							<div class="modal-content" style="width:1000px;">
								<div class="modal-header">
			        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			        				<h3 class="modal-title" id="myModalLabel">SHABU-SHABU</h3>
			        			</div>
			        			<div class="modal-body">
				        			<div class="form-group">
										<div style="margin-left:20px; margin-right:20px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 50px 0px 30px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:100%;">
												<thead>
													<tr class="info">
														<th>Nama Obat</th>
														<th >Satuan</th>
														<th>Merek</th>
														<th>Stok Unit</th>
														<th>Stok Gudang</th>
														<th>Diminta</th>
														<th>Diberikan</th>
														<th>Harga Jual</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Obat 1</td>
														<td style="text-align:left">Kilogram</td>
														<td style="text-align:left">Yamaha</td>
														<td style="text-align:right">20</td>
														<td style="text-align:right">10</td>
														<td style="text-align:right">30</td>
														<td style="text-align:right;width:100px;"><input type="text" class="form-control" name="qty1"></td>
														<td style="text-align:right">30000</td>
														
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
				</div>
			</div>	    
			<br>

			<div class="dropdown" id="btnBawahRiwMintaObat" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Riwayat Persetujuan Permintaan</div>
	            <div id="btnBawahRiwMintaObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>	
            <div id="infoRiwMintaObat">
            	<form class="form-horizontal" role="form">
            		
		       		<div class="portlet box red">
						<br>
						<div class="tabelinformasi">	
							<div class="portlet-body" style="margin: 10px 10px 0px 10px">
								<table class="table table-striped table-bordered table-hover table-responsive tableDT">
									<thead>
										<tr class="info" >

											<th  style="width:20px;"> No.</th>
											<th > Waktu Persetujuan</th>
											<th > Departemen </th>
											<th > Petugas Input </th>
											<th > Keterangan </th>
											<th width="30"> Action </th>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="text-align:center">1</td>
											<td>12 Desember 2012</td>
											<td>Kandungan</td>
											<td>Bersalin</td>
											<td>Arya</td>
											<td style="text-align:center">
												<a href="#"  data-toggle="modal" data-target="#riwpersetujuanper"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Detail">
												</i></a>	
											</td>						
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="modal fade" id="riwpersetujuanper" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-200px">
						<div class="modal-dialog">
							<div class="modal-content" style="width:800px">
								<div class="modal-header">
				    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				    				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Persetujuan Permintaan </h3>
				    			</div>
				    			<div class="modal-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label1 col-md-5 goright">Waktu Persetujuan:</label>
												<div class="col-md-5">
													12 Desember 2012
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label1 col-md-4 goright">Departemen:</label>
												<div class="col-md-5">Khisna</div>
											</div>
										</div>
									</div>

									<div class="row">							
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label1 col-md-5 goright">Petugas Input:</label>
												<div class="col-md-5">Bebas</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label1 col-md-4 goright">Keterangan:</label>
												<div class="col-md-5">Ready</div>
											</div>
										</div>
									</div>
									<hr/>
									<table class="table table-striped table-bordered table-hover" id="tabelHasilPenunjang">
										<thead>
											<tr class="info">
												<th width="20">No.</th>
												<th>Nama Obat</th>
												<th >Satuan</th>
												<th>Merek</th>
												<th>Stok Unit</th>
												<th>Stok Gudang</th>
												<th>Diminta</th>
												<th style="width:100px;">Diberikan</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td style="text-align:left">Kilogram</td>
												<td style="text-align:left">Yamaha</td>
												<td style="text-align:right">20</td>
												<td style="text-align:right">10</td>
												<td style="text-align:right">30</td>
												<td style="text-align:right;">12</td>
												<td style="text-align:right;">20</td>
												
											</tr>
											
										</tbody>
									</table>
								</div>
				    			<div class="modal-footer">
							       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
						      	</div>
							</div>
						</div>
					</div>
				</form>
            </div>
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
							<input type="text" class="form-control" name="namaObatOpname" placeholder="Nama Obat">						            			
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
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
            		</div>
				<br>

					<div class="portlet box red" >
						<div class="portlet-title">
							<!-- <label class="control-label col-md-3" style="font-size: 16pt; margin-left:-50px;">Daftar Obat</label> -->
						</div>
						<div class="portlet-body" style="margin: 0px -10px 0px -60px">
							
							<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven1">
								<thead>
									<tr class="info" >
										<th> Opname Terakhir </th>
										<th> Nama Obat </th>
										<th> Merek </th>
										<th> Harga </th>
										<th> Stok Komputer </th>
										<th> Stok Fisik </th>
										<th> Selisih </th>
										<th> Jumlah </th>
										<th> Opname </th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>2</td>
										<td>3</td>
										<td>4</td>
										<td>6</td>
										<td><a href="#" data-type="text" data-pk="1" data-original-title="Edit" class="editInven" style="color:black;cursor:default;">Coba</a></td>
										<td>7</td>
										<td>8</td>
										<td><a href="#" class="edIven" id="status"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
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

	</div>

</div>

				
											