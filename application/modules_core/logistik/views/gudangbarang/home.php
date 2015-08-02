
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
							<input type="hidden" id="barang_id_edit">
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
						<div class="col-md-2"></div>
						<label class="control-label col-md-2" >Penyedia </label>
						<div class="col-md-2">
		         			<input type="text" class="form-control" id="pedBarang" style="cursor:pointer"  placeholder="Penyedia Barang" data-toggle="modal" data-target="#mdPenyedia" readonly="" />
		         			<input type="hidden" class="idpenyediabarang">	
						</div>
					</div>

					<div class="form-group">			
	            		<label class="control-label col-md-2" >Merek </label>
						<div class="col-md-2">	         		
							<input type="text" class="form-control" style="cursor:pointer" readonly="" id="namaMerk" name="namaMerk" placeholder="Merek" data-toggle="modal" data-target="#mdMerk"/>
							<input type="hidden" class="idmerkbarang">	
							<!-- data-toggle="modal" data-target="#mdMerk" -->
						</div>
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

					<div class="form-group" style="margin-top:40px;">
						<div class="col-md-8"></div>
						<div class="col-md-3"> 
							<input type="hidden" id="idobat_edit">
							<button class="btn btn-danger" id="btnBatalBrg" style="margin-left:35px;">BATAL</button>				 
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
						
							<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabelbarangutama">
								<thead>
									<tr class="info" >
										<th > No</th>
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
								<tbody id="tbodybarangutama">
									<?php  
										if (isset($allbarang)) {
											if (!empty($allbarang)) {
												$i = 0;
												foreach ($allbarang as $value) {
													echo '<tr>
															<td>'.(++$i).'</td>
															<td>'.$value['nama'].'</td>
															<td>'.$value['satuan'].'</td>
															<td>'.$value['nama_merk'].'</td>									
															<td>'.$value['group_id'].'</td>
															<td>'.$value['stok_minimal'].'</td>
															<td>'.$value['jlh'].'</td>
															<td>'.$value['harga'].'</td>
															<td style="text-align:center"><a href="#" class="edBarang" id="edMasBarang"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
															<a href="#" class="kartustok"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak"></i></a>
															<input type="hidden" class="satuan_id_edit" value="'.$value['satuan_id'].'">
															<input type="hidden" class="merk_id_edit" value="'.$value['merk'].'">
															<input type="hidden" class="barang_id_edit" value="'.$value['barang_id'].'">
															<input type="hidden" class="penyedia_id_edit" value="'.$value['penyedia_id'].'">
															<input type="hidden" class="is_hiddenid_edit" value="'.$value['is_hidden'].'">
															<input type="hidden" class="nama_penyedia_edit" value="'.$value['nama_penyedia'].'">
															<input type="hidden" class="brg_id_edit" value="'.$value['barang_id'].'">
															</td>
														</tr>';
												}
											}
										}
									?>
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
											<button type="submit" class="btn btn-info">Cari</button>
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
		        				<form class="form-horizontal" method="post" id="searchmerkbarang">
									<div class="form-group">	
										<div class="col-md-4" style="margin-left:35px;">
											<input type="text" class="form-control" name="katakunci" id="katakuncimerkbarang" placeholder="Nama Obat"/>
										</div>
										<div class="col-md-2">
											<button type="submit" class="btn btn-info">Cari</button>
										</div>
										<br><br>	
									</div>		
								</form>
								<div style="margin-left:20px; margin-right:20px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 10px 0px 40px">
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
										<thead>
											<tr class="info">
												<td>Nama Merk</td>
												<td width="10%">Pilih</td>
											</tr>
										</thead>
										<tbody id="tbodymerkbarang">
											<tr>
												<td style="text-align:center" class="kosong" colspan="2">Cari merk barang</td>
											</tr>
										</tbody>
									</table>												
								</div>
								<form method="post" id="tambahmerkbarangbaru">
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
			<div class="modal fade" id="mdPenyedia" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Penyedia</h3>
	        			</div>
	        			<div class="modal-body">
		        			<div class="form-group">
		        				<form class="form-horizontal" role="form" method="post" id="searchpenyediabarang">
									<div class="form-group">	
										<div class="col-md-4" style="margin-left:35px;">
											<input type="text" class="form-control" name="katakunci" id="katakuncipenyediabarang" placeholder="Nama Obat"/>
										</div>
										<div class="col-md-2">
											<button type="submit" class="btn btn-info">Cari</button>
										</div>
										<br><br>	
									</div>
								</form>		
								<div style="margin-left:20px; margin-right:20px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 10px 0px 40px">
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
										<thead>
											<tr class="info">
												<td>Nama Merk</td>
												<td width="10%">Pilih</td>
											</tr>
										</thead>
										<tbody id="tbodypenyediabarang">
											<tr>
												<td style="text-align:center;" class="kosong" colspan="2">Cari Penyedi barang</td>
											</tr>
										</tbody>
									</table>												
								</div>
								<form method="post" id="tambahpenyediabaru">
									<div style="margin-left:20px; margin-right:20px;"><hr></div>
									<div class="form-group">	
										<div class="col-md-4" style="margin-left:35px;">
											<input type="text" class="form-control" name="newpenyedia" id="newpenyedia" placeholder="Tambah Baru"/>
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
            	<form class="form-horizontal informasi" role="form" method="post" id="formtambahdetailbarang">
					<div class="form-group">			
	            		<label class="control-label col-md-2" >Nama Barang </label>
						<div class="col-md-2">	         		
							<input type="text" style="cursor:pointer" class="form-control" id="namabarangdetail" name="namabarangdetail" placeholder="Nama Barang" data-toggle="modal" data-target="#nmDetBarang" readonly="" />
							<input type="hidden" id="idbarang_det" >
						</div>
						<div class="col-md-2"></div>
						<label class="control-label col-md-2" >Tahun Pengadaan</label>
						<div class="col-md-2">
							<select class="form-control select" name="selectTahBarang" id="selectTahBarang">
								<?php  
									$currentDate = new DateTime();
									$y = $currentDate->format('Y');
									for ($i=-2; $i < 0; $i++) { 
										$e = $y - $i;
										echo '<option value="'.$e.'">'.$e.'</option>';
									}
									echo '<option value="'.$y.'" selected>'.$y.'</option>';
									for ($i=1; $i <= 5; $i++) { 
										$e = $y - $i;
										echo '<option value="'.$e.'">'.$e.'</option>';
									}
								?>
							</select>
						</div>
					</div>

					<div class="form-group">			
	            		<label class="control-label col-md-2" >Satuan Barang </label>
						<div class="col-md-2">
		         			<input type="text" class="form-control" id="satBarangDet" placeholder="Satuan Barang" disabled />	
						</div>
						<div class="col-md-2"></div>
						<label class="control-label col-md-2">Sumber Dana </label>
						<div class="col-md-2">
							<select class="form-control select" name="selectSumDanaBarang" id="selectSumDanaBarang">
								<option value="" selected>Pilih</option>
								<option value="Mandiri">Mandiri</option>
								<option value="APBN">APBN</option>
								<option value="Hibah" >Hibah</option>
								<option value="BPJS" >BPJS</option>
							</select>
						</div>
					</div>

					<div class="form-group">			
	            		<label class="control-label col-md-2" >Merek </label>
						<div class="col-md-2">
		         			<input type="text" class="form-control" id="merkBarangDet" placeholder="Merek Barang" disabled />	
						</div>
						<div class="col-md-2"></div>
						<label class="control-label col-md-2" >Jumlah</label>
						<div class="col-md-2">
		         			<input type="text" class="form-control numberrequired" id="jmlDetBarang" placeholder="Jumlah"  />	
						</div>
					</div>
					<div class="form-group" style="margin-top:30px;">
						<div class="col-md-8"></div>
						<div class="col-md-4"> 
							<input type="hidden" id="idobat_detail_edit">
							<button class="btn btn-danger" id="btnBatalDetBrg" style="margin-left:35px;">BATAL</button>				 
							<button class="btn btn-danger" style="margin-left:10px" id="btnResetDetBrg">RESET</button>
							<button type="submit" class="btn btn-success" style="margin-left:10px" id="smpanDetBrg">SIMPAN</button>
							<button type="submit" class="btn btn-success" style="margin-left:10px" id="ubahDetBrg">UBAH</button>
						</div>
					</div>

				</form>
				<div class="tabelinformasi">
					<br>
					<hr class="garis">
					<div class="portlet box red">
						<div class="portlet-body" style="margin: 10px 20px 10px 20px">
						
							<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabeldetailbarang">
								<thead>
									<tr class="info" >
										<th > Tahun Pengadaan </th>
										<th > Sumber Dana </th>
										<th > Stok </th>
										<th width="10%"> Action </th>
									</tr>
								</thead>
								<tbody id="tbodydetailbarang">
									
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
							
							<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tblinventorigudangbarang">
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
																<a href="#inout" data-toggle="modal" class="edBarang" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
																<a href="#edInvenGdg" data-toggle="modal" class="detailinvenbarang"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
															</td>
														</tr>';
												}
											}
										}
									?>
										
								</tbody>
							</table>
							<br>
							<br><br><br>
						</div>

						<div class="modal fade" id="inout" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
            	<form class="form-horizontal" role="form" method="post" id="submirencanapengadaan">
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
									<input type="text" style="cursor:pointer;" id="tgladaanbarang" class="form-control calder" readonly data-date-format="dd/mm/yyyy H:i" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i");?>">
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
										<th > Nama Barang </th>
										<th > Penyedia </th>
										<th width="10%"> Quantity </th>
										<th > Satuan </th>
										<th > Harga </th>
										<th > Total </th>
										<th width="8%"> Action </th>
									</tr>
								</thead>
								<tbody  id="addinputAdaBarang">
									<tr class="kosong">
										<td style="text-align:center" colspan="7">Tambah Obat</td>			
									</tr>
								</tbody>
							</table>
						</div>
						<div class="form-group" style="margin-top:30px;">
							<div class="col-md-10"></div>
							<div class="col-md-2"> 				 
								<button type="reset" class="btn btn-danger" type="submit">RESET</button>
								<button type="submit" class="btn btn-success" type="submit">SIMPAN</button>
							</div>
						</div>
						<br>
					</div>						
				</form>
				<div class="modal fade" id="modalAdaan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
		        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        				<h3 class="modal-title" id="myModalLabel">Pilih Barang</h3>
		        			</div>
		        			<div class="modal-body">

			        			<div class="form-group">
			        				<form class="form-horizontal" role="form" method="post" id="searchbarangpengadaan">
										<div class="form-group">	
											<div class="col-md-5" style="margin-left:15px;">
												<input type="text" class="form-control" name="katakunci" id="katakuncibrgpengadaan" placeholder="Nama Obat"/>
											</div>
											<div class="col-md-2">
												<button type="submit" class="btn btn-info">Cari</button>
											</div>
											<br><br>	
										</div>	
									</form>	
									<div style="margin-left:10px; margin-right:10px;"><hr></div>
									<div class="portlet-body" style="margin: 0px 15px 0px 15px">
										<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa">
											<thead>
												<tr class="info">
													<th>Nama Barang</th>
													<th>Merek</th>
													<th>Penyedia</th>
													<th width="10%">Pilih</th>
												</tr>
											</thead>
											<tbody id="tbodycaribarangpengadaan">
												<tr>
													<td style="text-align:center" colspan="4">Cari Data Barang</td>
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

			<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Riwayat Pengadaan</div>
	            <div id="btnBawahRiwaAdaGudang" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>
			<div id="infoRiwaAdaGudang">
        			<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					
						<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="tabelriwayatpengadaan">
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
							<tbody id="tbodyriwayatpengadaan">
								<?php  
									if(isset($riwayatpengadaan)){
										if (!empty($riwayatpengadaan)) {											
											$i = 1;
											foreach ($riwayatpengadaan as $value) {
												$tgl = DateTime::createFromFormat('Y-m-d H:i:s', $value['tanggal']);
												echo '<tr>
														<td>'.($i++).'</td>
														<td>'.$value['no_pengadaan'].'</td>
														<td>'.$tgl->format('d F Y H:i:s').'</td>
														<td>'.$value['nama_petugas'].'</td>
														<td>'.$value['keterangan'].'</td>
														<td>'.$value['status'].'</td>
														<td style="text-align:center">
															<input type="hidden" class="rencana_id_riwayat" value="'.$value['barang_rencana_id'].'">
															<a href="#" class="viewdetailrencana" data-toggle="modal" data-target="#viewriwadaan"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Detail">
															</i></a>	
														</td>
													</tr>';
											}
										}
									}
								?>
							</tbody>
						</table>
					</div>
				
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
										<div class="col-md-3 nama"><span id="nomorpengadaanriwayat"></span></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-4 goright">Petugas Input:</label>
										<div class="col-md-5"><span id="petugaspengadaanriwayat"></span></div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-5 goright">Tanggal Rencana Pengadaan:</label>
										<div class="col-md-5">
											<span id="tanggalpengadaanriwayat"></span>
										</div>
									</div>
								</div>							
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-4 goright">Status:</label>
										<div class="col-md-5"><span id="statuspengadaanriwayat"></span></div>
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
								<tbody id="detailriwayatpengadaan">
									<tr><td colspan="6" style="text-align:center">Tidak ada detail</td></tr>
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
							<th> Keterangan</th>
							<th> Status</th>
							<th width="10%"> Action </th>
							
						</tr>
					</thead>
					<tbody id="tbodypengadaanobat">
						<?php  
							if (isset($pengadaan_obat)) {
								$i = 0;
								foreach ($pengadaan_obat as $value) {
									$tgl = DateTime::createFromFormat('Y-m-d H:i:s', $value['tanggal']);
									echo '<tr>
											<td>'.(++$i).'</td>
											<td style="text-align:right">'.$value['no_pengadaan'].'</td>
											<td style="text-align:center">'.$tgl->format('d F Y H:i:s').'</td>
											<td>'.$value['nama_petugas'].'</td>
											<td>'.$value['keterangan'].'</td>
											<td>'.$value['status'].'</td>
											<td style="text-align:center">
												<input type="hidden" class="obat_rencana_id" value="'.$value['obat_rencana_id'].'">
												<a href="#" class="view_detail_adaan" data-toggle="modal" data-target="#viewadaango"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Detail">
												</i></a>	
											</td>
										</tr>';
								}
							}
						?>
							
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
									<div class="col-md-5 nama">	<span id="nomor_obat_rencana"></span> </div>
								</div>
								<div class="form-group col-md-10">
									<label class="control-label1 col-md-4 goright">Tanggal Tindakan&nbsp;:</label>
									<div class="col-md-8">	<span id="tanggal_rencana"></span> </div>
								</div>
								<div class="form-group col-md-10">
									<label class="control-label1 col-md-4 goright">Petugas Input &nbsp;:</label>
									<div class="col-md-5">	<span id="petugas_rencana"></span> </div>
								</div>
									
		        				<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven">
									<thead>
										<tr class="info" >
											<th width="3%"> No </th>
											<th> Nama Obat </th>
											<th> Penyedia </th>
											<th> Quantity </th>
											<th> Satuan </th>
											<th> HPS </th>
											<th> T0tal </th>
										</tr>
									</thead>
									<tbody  id="tbody_detailpengadaan">
										
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

		<div class="modal fade" id="penyediapenerimaan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Pilih Penyedia</h3>
        			</div>
        			<div class="modal-body">

	        			<div class="form-group">
	        				<form class="form-horizontal" role="form" method="post" id="caripenyediapenerimaan">
								<div class="form-group">	
									<div class="col-md-5" style="margin-left:15px;">
										<input type="text" class="form-control" name="katakunci" id="katakuncipenyediapenerimaan" placeholder="Nama penyedia"/>
									</div>
									<div class="col-md-2">
										<button type="submit" class="btn btn-info">Cari</button>
									</div>
									<br><br>	
								</div>		
							</form>
							<div style="margin-left:10px; margin-right:10px;"><hr></div>
							<div class="portlet-body" style="margin: 0px 15px 0px 15px">
								<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
									<thead>
										<tr class="info">
											<th>Nama Penyedia</th>
											<th width="10%">Pilih</th>
										</tr>
									</thead>
									<tbody id="tbodypenyediapenerimaan">
										<tr>
											<td style="text-align:center;" class="kosong" colspan="2">Cari Penyedi barang</td>
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
		<div class="modal fade" id="modalTerima" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
        			</div>
        			<div class="modal-body">

	        			<div class="form-group">
	        				<form class="form-horizontal" role="form" method="post" id="caribarangpenerimaan">
								<div class="form-group">	
									<div class="col-md-5" style="margin-left:15px;">
										<input type="text" class="form-control" name="katakunci" id="katakuncibarangpenerimaan" placeholder="Nama barang"/>
									</div>
									<div class="col-md-2">
										<button type="submit" class="btn btn-info">Cari</button>
									</div>
									<br><br>	
								</div>
							</form>		
							<div style="margin-left:10px; margin-right:10px;"><hr></div>
							<div class="portlet-body" style="margin: 0px 15px 0px 15px">
								<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa">
									<thead>
										<tr class="info">
											<th>Nama barang</th>
											<th>Satuan</th>
											<th>Merk barang</th>
											<th width="10%">Pilih</th>
										</tr>
									</thead>
									<tbody id="tbodybarangpenerimaan">
										<tr>
											<td style="text-align:center;" class="kosong" colspan="4">Cari Barang</td>
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
            	<form class="form-horizontal" role="form" method="post" id="submitpenerimaanbarang">
	        		<div class="informasi">	
						<div class="form-group">			
		            		<label class="control-label col-md-2">Nomor Penerimaan </label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="nmrTerimaBrg" name="nmrTerimaBrg" placeholder="Nomor Penerimaan"/>
							</div>
							<div class="col-md-1"></div>
							<label class="control-label col-md-2">Sumber Dana </label>
							<div class="col-md-3" style="float:left" >
								<select class="form-control select" name="sumDanaBarangTerima" id="sumDanaBarangTerima">
									<option value="" selected>Pilih</option>
									<option value="Mandiri">Mandiri</option>
									<option value="APBN">APBN</option>
									<option value="Hibah" >Hibah</option>
									<option value="BPJS" >BPJS</option>
								</select>
							</div>
						</div>

						<div class="form-group">			
		            		<label class="control-label col-md-2">Tanggal Penerimaan </label>
							<div class="col-md-3">
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" id="tglTerimaBarang" class="form-control calder" readonly data-date-format="dd/mm/yyyy H:i" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i");?>">
								</div>
							</div>
							<div class="col-md-1"></div>
							<label class="control-label col-md-2">Penyedia </label>
							<div class="col-md-3" style="float:left" >
								<input type="text" class="form-control" id="penyediaTerimaBrg" name="penyediaObatTerimaBrg" placeholder="Penyedia" data-toggle="modal" data-target="#penyediapenerimaan"/>
								<input type="hidden" id="id_penyediaTerimaBrg">
							</div>
						</div>

						<div class="form-group">			
							<label class="control-label col-md-2">Keterangan </label>
							<div class="col-md-3" style="float:left" >
								<textarea class="form-control" id="keteranganpenerimaan" name="ketObat"></textarea>
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
										<th width="10%"> Quantity </th>
										<th width="10%"> Diskon (%)</th>
										<th > Harga </th>
										<th > Total </th>
										<th width="20">Action</th>
									</tr>
								</thead>
								<tbody id="addinputterima">
									<tr class="kosong"><td colspan="7" style="text-align:center">tambah penerimaan barang</td></tr>
								</tbody>
							</table>

							<div class="form-group">
								<div class="col-md-2 pull-right" style="width:240px;">
									<label class="control-label pull-right" style="font-size:1.8em;margin-top:-10px;"><span id="subtotalterima"></span></label>
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
										<option value="persen" selected>%</option>
										<option value="nominal">Rp. </option>
									</select>
								</div>
								<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
									Potongan : 
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-1 pull-right" style="font-size:18pt; width:140px;"> <span id="ppntotal">0</span> </label>
								<div class="col-md-2 pull-right" style="width:100px;">
									<input type="text" class="form-control" id="ppn" name="ppn" placeholder="PPN" />
								</div>
								<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
									PPN (%) : 
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-2 pull-right" style="width:240px;">
									<label class="control-label pull-right" style="font-size:2em;color:red;"><span id="grandtotal"></span></label>
								</div>
								<div class="col-md-2 pull-right" style="width:150px; margin-top:15px; text-align:right;">
									Grand Total : 
								</div>
							</div>


							<div class="form-group">
								<div class="pull-right" style="margin-bottom:10px;margin-right:18px;">
									<button class="btn btn-warning" type="reset">Reset</button>
									<button class="btn btn-success" type="submit">Cetak</button>
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
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabelriwayatpenerimaanbarang">
							<thead>
								<tr class="info" >
									<th style="text-align:center; width:30px;">No.</th>
									<th> Nama Barang </th>
									<th> Satuan </th>
									<th width="10%"> Quantity </th>
									<th width="10%"> Diskon</th>
									<th> Harga </th>
									<th> Total </th>

								</tr>
							</thead>
							<tbody>
								<?php  
									if (isset($riwayatpenerimaan)) {
										if (!empty($riwayatpenerimaan)) {
											$i = 0;
											foreach ($riwayatpenerimaan as $value) {
												echo '<tr>
													<td>'.($i++).'</td>
													<td>'.$value['nama'].'</td>
													<td>'.$value['satuan'].'</td>
													<td>'.$value['jumlah'].'</td>
													<td>'.$value['diskon'].'</td>
													<td>'.$value['harga'].'</td>
													<td>'.$value['total'].'</td>								
												</tr>';
											}
										}
									}
								?>
							</tbody>
						</table>
					</div>
				</form>	
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
						<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="tabelpersetujuanpermintaan">
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
							<tbody id="tbodypersetujuanpermintaan">
								<?php  
									if (isset($permintaanbarang)) {
										if (!empty($permintaanbarang)) {
											$i=1;
											foreach ($permintaanbarang as $value) {
												$tgl = DateTime::createFromFormat('Y-m-d H:i:s', $value['tanggal_request']);
												echo '<tr>
														<td style="text-align:center">'.($i++).'</td>
														<td>'.$value['tanggal_request'].'</td>
														<td>'.$value['nama_dept'].'</td>
														<td>'.$value['nama_petugas'].'</td>
														<td>'.$value['keterangan_request'].'</td>
														<td style="text-align:center">
															<input type="hidden" class="detail_persetujuan_id" value="'.$value['barang_permintaan_id'].'">
															<input type="hidden" class="dept_id_persetujuan" value="'.$value['dept_id'].'">
															<a href="#" class="cekdetailpersetujuan" data-toggle="modal" data-target="#cek"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Cek">
															</i></a>	
														</td>						
													</tr>';
											}
										}
									}
								?>
							</tbody>
						</table>
					</div>

					<div class="modal fade" id="cek" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-400px">
						<form role="form" class="form-horizontal" method="post" id="submitpersetujuan">
							<div class="modal-dialog" >
								<div class="modal-content" style="width:1000px;">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Detail Persetujuan Permintaan</h3>
				        			</div>
				        			<div class="modal-body">
					        			<div class="form-group">
											<div style="margin-left:20px; margin-right:20px;"><hr></div>
											<div class="portlet-body" style="margin: 0px 50px 0px 30px">
												<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:100%;">
													<thead>
														<tr class="info">
															<th>Nama Obat</th>
															<th>Satuan</th>
															<th>Merek</th>
															<th>Stok Unit</th>
															<th>Stok Gudang</th>
															<th>Diminta</th>
															<th>Diberikan</th>
															<th>Harga Jual</th>
														</tr>
													</thead>
													<tbody id="tbodydetailpersetujuan">
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
				        				<input type="hidden" id="detail_persetujuan_idconfirm">
				        				<input type="hidden" id="dept_id_detail_persetujuan">
				 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
				 			       		<button type="submit" class="btn btn-success">Simpan</button>
							      	</div>
								</div>
							</div>
						</form>
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
								<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="tabelriwayatpersetujuan">
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
									<tbody id="tbodyriwayatpersetujuan">
										<?php  
											if (isset($riwayatpermintaanbarang)) {
												if (!empty($riwayatpermintaanbarang)) {
													$i=1;
													foreach ($riwayatpermintaanbarang as $value) {
														$tgl = DateTime::createFromFormat('Y-m-d H:i:s', $value['tanggal_respond']);
														echo '<tr>
																<td style="text-align:center">'.($i++).'</td>
																<td>'.$value['tanggal_respond'].'</td>
																<td>'.$value['nama_dept'].'</td>
																<td>'.$value['nama_petugas'].'</td>
																<td>'.$value['keterangan_request'].'</td>
																<td style="text-align:center">
																	<input type="hidden" class="detail_persetujuan_id" value="'.$value['barang_permintaan_id'].'">
																	<a href="#" class="cekdetailpersetujuan" data-toggle="modal" data-target="#riwpersetujuanper"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Cek">
																	</i></a>	
																</td>						
															</tr>';
													}
												}
											}
										?>
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
												<th>Nama Obat</th>
												<th>Satuan</th>
												<th>Merek</th>
												<th>Stok Gudang</th>
												<th>Diminta</th>
												<th style="width:100px;">Diberikan</th>
												<th style="width:100px;">Harga</th>
											</tr>
										</thead>
										<tbody id="tbodydetailriwayatpersetujuan">
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
            	<form class="form-horizontal" role="form" style="margin-left:20px;margin-right:40px;"id="filteropnamebyname">
            		
            		<div class="form-group" id="rowfix2">
	            		<div class='row offer-pg-cont'>
							<div class='offer-pg'>
		            			<div class="round-button portfolio-item" style="margin-left: 5px;">
		            				<div class="round-button-tes round-button-circle round-button-active"  style="cursor:pointer"><a class="round-button" >A</a>
		            				</div>
		            			</div>
		            			<?php for ($i='B'; $i < 'Z' ; $i++) { 
									echo '<div class="round-button round-margin portfolio-item">';
			            				echo '<div class="round-button-tes round-button-circle" style="cursor:pointer"><a class="round-button" >'.$i.'</a>';
			            				echo '</div>';
			            			echo '</div>';
								}?>	
						    </div>

	            		</div>
            		</div>
            		<div class="form-group">
            			
            			<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by</label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="namabarangopname" name="namaObatOpname" placeholder="Nama Barang">						            			
            			</div>
            			<div class="col-md-2">
							<button type="submit" class="btn btn-warning">FILTER</button>
						</div>
            		</div>
            		<hr class="garis" style="margin-left:-10px">
            		<br>
            		<div class="form-group">
            			<label class="control-label col-md-2">Input Tanggal Opname</label>
            			<div class="col-md-2">
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="tanggalasuan" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
            		</div>
				<br>

					<div class="portlet box red" >
						<div class="portlet-title">
							<!-- <label class="control-label col-md-3" style="font-size: 16pt; margin-left:-50px;">Daftar Obat</label> -->
						</div>
						<div class="portlet-body" style="margin: 0px -10px 0px -60px">
							
							<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabelopnamebarang">
								<thead>
									<tr class="info" >
										<th width="3%"> No</th>
										<th> Opname Terakhir </th>
										<th> Nama Obat </th>
										<th> Merek </th>
										<th> Sumber Dana </th>
										<th> Stok Komputer </th>
										<th> Stok Fisik </th>
										<th> Harga </th>
										<th> Selisih </th>
										<th> Jumlah </th>
										<th> Opname </th>
									</tr>
								</thead>
								<tbody id="tbody_opname">
									
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

				
											