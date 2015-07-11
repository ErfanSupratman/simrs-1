<div class="title" id="top">
	GUDANG OBAT
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>farmasi/homegudangobat">GUDANG OBAT</a>
	</li>
</div>
<div class="navigation" style="margin-left: 10px" >
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#mo" data-toggle="tab">Master Obat</a></li>
	    <li><a href="#inventori" data-toggle="tab">Inventori</a></li>
	    <li><a href="#adaan" data-toggle="tab">Perencanan Pengadaan</a></li>
	    <li><a href="#penerimaan" data-toggle="tab">Penerimaan Obat</a></li>
	    <li><a href="#permintaan" data-toggle="tab">Persetujuan Permintaan</a></li>
	    <li><a href="#returbarang" data-toggle="tab">Retur Obat</a></li>
	    <li><a href="#opname" data-toggle="tab">Stok Opname</a></li>
	    <li><a href="#laporan" data-toggle="tab">Laporan</a></li>
	</ul>


	<div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="mo">
			<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Tambah Obat</div>
	            <div id="btnBawahMasObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoMasObat">
            		<div class="modal fade" id="nmMerk" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Pilih Merk</h3>
				   			</div>
				   			<div class="modal-body" >
				       			<div class="form-group">
									<div class="form-group">	
										<div class="col-md-6" style="margin-left:25px;">
											<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Cari Merk"/>
										</div>
										<div class="col-md-2">
											<button type="button" class="btn btn-info">Cari</button>
										</div>
										<br><br>	
										</div>		
											<div style="margin-left:20px; margin-right:20px;"><hr></div>
												<div class="portlet-body" style="margin: 0px 10px 0px 10px">
													<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchMerk" style="width:90%;">
														<thead>
															<tr class="warning">
																<td>Nama Merk</td>
																<td width="10%">Pilih</td>
															</tr>
														</thead>
														<tbody id="t_body_merk">
													 	<!-- pake js yak -->
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
				<form class="form-horizontal" role="form" method="post" id="forminputobat">			
					<div class="form-group">
	            		<label class="control-label col-md-2">Nama Obat </label>
	            		<div class="col-md-2">
							<input type="text" class="form-control" id="nmObat" name="nmObat" placeholder="Nama Obat" />
							<input type="hidden" id="edit_obat_id">
						</div>
						<div class="col-md-2">
						</div>
						<label class="control-label col-md-2" >Harga Dasar </label>
						<div class="col-md-2">
							<input type="text" class="form-control numberrequired" id="hgDasarObat" name="hgDasarObat" placeholder="Harga Dasar" required/>
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Satuan Obat </label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectSatObat" id="selectSatObat" >
								<?php if (!empty($satuan_obat)) {
		         					foreach ($satuan_obat as $value) {
		         						echo '<option value="'.$value['satuan_id'].'">'.$value['satuan'].'</option>';	
		         					}
		         				} ?>
							</select>
						</div>
						<div class="col-md-2"></div>
						<label class="control-label col-md-2" >HPS </label>
						<div class="col-md-2">
							<input type="text" class="form-control numberrequired" id="hps" name="hps" placeholder="HPS" required />
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Jenis Obat </label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectJnsObat" id="selectJnsObat" >
								<?php if (!empty($jenis_obat)) {
		         					foreach ($jenis_obat as $value) {
		         						echo '<option value="'.$value['jenis_obat_id'].'">'.$value['jenis_obat'].'</option>';	
		         					}
		         				} ?>
							</select>
						</div>
						<div class="col-md-2">
						</div>
						<label class="control-label col-md-2" >Margin </label>
						<div class="col-md-1">
							<input type="text" class="form-control numberrequired" id="marginobat" name="marginobat" placeholder="margin" required/>
						</div>
						<div class="col-md-1">
							<span style="font-size:13pt; margin-left:-20px;">%</span>
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Merek </label>
						<div class="col-md-2">	         		
							<input type="text" class="form-control" id="selected_nama_merk" name="selected_nama_merk" placeholder="Merek" data-toggle="modal" data-target="#nmMerk" readonly="" />
							<input type="hidden" id="selected_merk_id">
						</div>
						<div class="col-md-2">
						</div>
						<label class="control-label col-md-2" >Harga Jual </label>
						<div class="col-md-2">
							<input type="text" class="form-control numberrequired" id="hargaJual" name="hargaJual" placeholder="Harga Jual" required readonly="" />
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Stok Min </label>
						<div class="col-md-2">	         		
							<input type="text" class="form-control numberrequired" id="stokMin" name="stokMin" placeholder="Stok Minimal" required/>
						</div>
						<div class="col-md-2">
						</div>

						<label class="control-label col-md-2" > Generik </label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectGenerik" id="selectGenerik" >
								<option value="1" selected>Generik</option>
								<option value="0">Non-generik</option>
							</select>
						</div>		
					</div>

					<div class="form-group">
						<label class="control-label col-md-2" >Penyedia </label>
						<div class="col-md-2">
		         			<input type="text" class="form-control" id="pedObatDet"  placeholder="Penyedia Obat" data-toggle="modal" data-target="#searchPenyedia" required readonly="" style="cursor:pointer" />	
			         		<input type="hidden" id="id_penyedia">	
						</div>
						<div class="col-md-2">
						</div>
						<div class="form-inline">
							<div class="radio-list">
									<div class="col-md-2" > 
										<input type="radio"  name="is_hidden" value="1" data-title="1"   /><div style="float:right;margin-top:6px;margin-right:123px">Hide</div> 
									</div>
									<div class="col-md-3">	         		
										<input type="radio"  name="is_hidden"  value="0" data-title="0" checked /><div style="float:right;margin-top:6px;margin-right:213px">Unhide</div>
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
							<button type="submit" class="btn btn-success" style="margin-left:10px" id="btnSimpanEdit">UBAH</button>
						</div>
					</div>
				</form>		
					<br>
					<hr class="garis" style="margin-left:-60px;">
					<br>

					<div class="form-group">
	            		<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter</label>
						<div class="col-md-2" style="margin-left:-130px">	         		
							<input type="text" class="form-control" id="nmObatBwh" name="nmObatBwh" placeholder="Nama Obat"/>
						</div>
						<div class="col-md-2" style="margin-left:-15px">
							<select class="form-control select" name="selectSatObatBwh" id="selectSatObatBwh" style="width:100px">
									<?php if (!empty($satuan_obat)) {
			         					foreach ($satuan_obat as $value) {
			         						echo '<option value="'.$value['satuan_id'].'">'.$value['satuan'].'</option>';	
			         					}
			         				} ?>
							</select>
						</div>
						<div class="col-md-2" style="margin-left:-100px">
							<select class="form-control select" name="selectGenObatBwh" id="selectGenObatBwh">
								<option value="1" selected>Generik</option>
								<option value="0">Non Generik</option>
							</select>
						</div>
						<div class="col-md-2" style="margin-left:-10px">
							<button type="submit" class="btn btn-warning" id="filter_obat">Filter</button>
						</div>

						<div class="col-md-2" style="margin-left:-140px">
							<button type="submit" class="btn btn-danger" id="filter_stok">Stok Warning</button>
						</div>
					</div>

					<div class="portlet box red" style="margin-left:-50px; margin-right:20px; margin-bottom:40px;">
						<div class="portlet-title">
							<label class="control-label col-md-3" style="font-size: 16pt">Daftar Obat</label>
						</div>
						<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover table-responsive" id="tabelobat">
								<thead>
									<tr class="info" >
										<th  style="text-align:left"> Kode </th>
										<th  style="text-align:left"> Nama Obat </th>
										<th  style="text-align:left"> Jenis </th>
										<th  style="text-align:left"> Merek </th>
										<th  style="text-align:left"> Penyedia </th>
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
								<tbody id="t_body_obat">
									<?php  
										if (!empty($obat)) {
											foreach ($obat as $value) {
												echo '<tr>'.
													'<td style="display:none" class="hidden_id" data-edit="'.$value['is_hidden'].'">'.$value['is_hidden'].'</td>'.
													'<td class="obat_id"  data-edit="'.$value['obat_id'].'">'.$value['obat_id'].'</td>'.
													'<td class="nama_obat" data-edit="'.$value['nama'].'">'.$value['nama'].'</td>'.								
													'<td class="jenis_obat" data-edit="'.$value['jenis_obat'].'">'.$value['jenis_obat'].'</td>'.
													'<td class="nama_merk" data-edit="'.$value['nama_merk'].'">'.$value['nama_merk'].'</td>'.
													'<td class="nama_penyedia" data-edit="'.$value['nama_penyedia'].'">'.$value['nama_penyedia'].'</td>'.
													'<td style="display:none" class="penyedia_id" data-edit="'.$value['penyedia_id'].'">'.$value['penyedia_id'].'</td>'.
													'<td class="is_generik" data-edit="'.$value['is_generik'].'">'.$value['is_generik'].'</td>'.
													'<td class="harga_dasar" data-edit="'.$value['harga_dasar'].'">'.$value['harga_dasar'].'</td>'.									
													'<td class="new_hps" data-edit="'.$value['hps'].'">'.$value['hps'].'</td>'.
													'<td class="new_margin" data-edit="'.$value['margin'].'">'.$value['margin'].'</td>'.
													'<td class="new_h_jual" data-edit="'.$value['harga_jual'].'">'.$value['harga_jual'].'</td>'.
													'<td class="new_stok_min" data-edit="'.$value['stok_minimal'].'">'.$value['stok_minimal'].'</td>'.									
													'<td ';
															if ($value['stok_minimal'] >= $value['jlh']) {
																echo('style="background-color:red;"');
															} 
													echo 'class="new_jlh" data-edit="'.$value['jlh'].'">'.$value['jlh'].'</td>'.									
													'<td class="new_satuan" data-edit="'.$value['satuan'].'">'.$value['satuan'].'</td>'.								
													'<td><a href="#" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'.
													'<a href="#" class="edObat"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak"></i></a></td>'.
													'<td style="display:none" class="new_merk_id" data-edit="'.$value['merk_id'].'">'.$value['merk_id'].'</td>'.
													'<td style="display:none" class="new_jenis_id" data-edit="'.$value['jenis_obat_id'].'">'.$value['jenis_obat_id'].'</td>'.
													'<td style="display:none" class="new_satuan_id" data-edit="'.$value['satuan_id'].'">'.$value['satuan_id'].'</td>'.	
												'</tr>';
											}
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				

					<div class="modal fade" id="searchDetObat" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Pilih Obat pengadaan</h3>
				        			</div>
				        			<div class="modal-body">

					        			<div class="form-group">
					        				<form method="post" id="formsearchobat" role="form">
												<div class="form-group">	
													<div class="col-md-6" style="margin-left:20px;">
														<input type="text" class="form-control" name="katakunciobat" id="katakunciobat" placeholder="Nama Obat"/>
													</div>
													<div class="col-md-2">
														<button type="submit" id="btncariobat" class="btn btn-info">Cari</button>
													</div>
													<br>	
												</div>
											</form>		
											<div style="margin-left:20px; margin-right:20px;"><hr></div>
											<div class="portlet-body" style="margin: 0px 10px 0px 10px">
												<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchObatDet" style="width:90%;">
													<thead>
														<tr class="warning">
															<td>Nama Obat</td>
															<td width="10%">Pilih</td>
														</tr>
													</thead>
													<tbody id="t_body_cari_obat">
														
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
					<div class="modal fade" id="searchPenyedia" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Pilih Penyedia</h3>
				        			</div>
				        			<div class="modal-body">

					        			<div class="form-group">
					        				<form method="post" id="formsearchpenyedia" role="form">
												<div class="form-group">	
													<div class="col-md-6" style="margin-left:20px;">
														<input type="text" class="form-control" name="katakuncipenyedia" id="katakuncipenyedia" placeholder="Nama Penyedia"/>
													</div>
													<div class="col-md-2">
														<button type="submit" id="btncaripenyedia" class="btn btn-info">Cari</button>
													</div>
													<br>	
												</div>
											</form>		
											<div style="margin-left:20px; margin-right:20px;"><hr></div>
											<div class="portlet-body" style="margin: 0px 10px 0px 10px">
												<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchPenyedia" style="width:90%;">
													<thead>
														<tr class="warning">
															<td>Nama Penyedia</td>
															<td width="10%">Pilih</td>
														</tr>
													</thead>
													<tbody id="t_body_penyedia">
														
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
	            <div id="titleInformasi">Tambah Detail Obat</div>
	            <div id="btnBawahDetObat1" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoDetObat1">
            	<form class="form-horizontal" role="form" method="post" id="formdetailobat">
					<div class="form-group">
	            		<label class="control-label col-md-2" >Nama Obat </label>
						<div class="col-md-3" >	         		
							<input type="text" class="form-control numberrequired" id="nmDetObat" name="nmDetObat" placeholder="Nama Obat" data-toggle="modal" data-target="#searchDetObat" required readonly="" style="cursor:pointer" />
							<input type="hidden" id="selected_obat_id">
							<input type="hidden" id="selected_obat_detail_id">
							<input type="hidden" id="selected_obat_dept_id">
						</div>
						<div class="col-md-1"></div>
						<label class="control-label col-md-2" >Tahun Pengadaan</label>
						<div class="col-md-2">
							<select class="form-control select" name="selectTahObat" id="selectTahObat">
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
	            		<label class="control-label col-md-2" >Satuan Obat </label>
						<div class="col-md-3" >
		         			<input type="text" class="form-control" id="satObatDet" placeholder="Satuan Obat" disabled />
						</div>
						<div class="col-md-1">
						</div>
						<label class="control-label col-md-2" >Sumber Dana </label>
						<div class="col-md-2">
							<select class="form-control select" name="selectSumDanaObat" id="selectSumDanaObat">
								<option value="Mandiri" selected>Mandiri</option>
								<option value="APBN">APBN</option>
								<option value="Hibah" >Hibah</option>
								<option value="BPJS" >BPJS</option>
							</select>
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Merek </label>
						<div class="col-md-3">
		         			<input type="text" class="form-control" id="merkObatDet" placeholder="Merek Obat" disabled />
		         			<input type="hidden" id="merk_id">		
						</div>
						<div class="col-md-1">
						</div>

						<label class="control-label col-md-2" >Jumlah
						</label>
						<div class="col-md-2" >
		         		<input type="text" class="form-control" id="jmlDetObat" placeholder="Jumlah"  />	
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Tanggal Kadaluarsa </label>
						<div class="col-md-3">
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" id="tglKadaluarsaDet" style="cursor:pointer;" class="form-control calder" data-provide="datepicker" data-date-format="dd/mm/yyyy" name="tglKadaluarsaDet" placeholder="Tanggal Kadalauarsa" required readonly="">
							</div>
						</div>
						<div class="col-md-1">
						</div>
						<label class="control-label col-md-2" >No Batch 
						</label>
						<div class="col-md-2">
		         			<input type="text" class="form-control" id="noBatchDetObat" placeholder="No Batch"  />	
						</div>
					</div>

					<div class="form-group" style="margin-top:30px;">
						<div class="col-md-8"></div>
						<div class="col-md-1">
							<button class="btn btn-danger" id="btnBatalDetObat" style="margin-left:35px;">BATAL</button>
						</div>
						<div class="col-md-3"> 				 
							<button class="btn btn-warning" style="margin-left:10px" id="resetDetObat">RESET</button>
							<button class="btn btn-success" style="margin-left:10px" id="simpanDetObat">SIMPAN</button>
							<button type="submit" class="btn btn-success" style="margin-left:10px" id="editDetObat">UBAH</button>
						</div>
					</div>
				</form>

					<br>
					<hr class="garis" style="margin-left:-60px;">
					<br>

					<div class="portlet box red" style="margin-left:-50px; margin-right:20px; margin-bottom:40px;">
						<div class="portlet-title">
							<label class="control-label col-md-3" style="font-size: 16pt">Daftar Obat</label>
						</div>
						<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						
							<table class="table table-striped table-bordered table-hover table-responsive" id="tabeldetailobat">
								<thead>
									<tr class="info" >
										<th  style="text-align:left"> Tgl Kadaluarsa </th>
										<th  style="text-align:left"> No Batch </th>
										<th  style="text-align:left"> Tahun </th>
										<th  style="text-align:left"> Sumber Dana </th>
										<th  style="text-align:left"> Stok </th>
										<th  style="text-align:center;"> Action </th>
									</tr>
								</thead>
								<tbody id="t_body_detail_obat">
									
								</tbody>
							</table>
						</div>
					</div>
				
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
							<label class="control-label col-md-1" style="width:100px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter</label>
							<div class="col-md-2">
								<select class="form-control select" name="filterInv" id="filterInv">
									<option value="Nama" selected>Nama Obat</option>
									<option value="Jenis">Jenis Obat</option>
									<option value="Merek">Merek</option>
									<option value="Sumber">Sumber Dana</option>
									<option value="Penyedia">Penyedia</option>	
								</select>	
							</div>
							<div class="col-md-2" style="margin-left:-10px;">
								<input type="text" class="form-control" id="invNamaObat" name="invNamaObat" placeholder="Nama Obat"/>
								<input type="text" class="form-control" id="invJenisObat" name="invJenisObat" placeholder="Jenis Obat"/>
								<input type="text" class="form-control" id="invMerekObat" name="invMerekObat" placeholder="Merek Obat"/>
								<input type="text" class="form-control" id="invSumberObat" name="invSumberObat" placeholder="Sumber Dana"/>
								<input type="text" class="form-control" id="invPenyediaObat" name="invPenyediaObat" placeholder="Penyedia"/>
							</div>
						
							<div class="col-md-1">
								<select class="form-control select" name="filterSat" id="filterSat" style="margin-left:-15px;width:120px">
										<?php if (!empty($satuan_obat)) {
				         					foreach ($satuan_obat as $value) {
				         						echo '<option value="'.$value['satuan_id'].'">'.$value['satuan'].'</option>';	
				         					}
				         				} ?>			
								</select>
							</div>
							<div class="col-md-1" >
								<select class="form-control select" name="filterGen" id="filterGen" style="margin-left:13px; width:150px">
										<option value="Generik" selected>Generik</option>
										<option value="Non Generik">Non Generik</option>					
								</select>
							</div>
							<div class="col-md-1" style="padding-left: 80px;">
								<button class="btn btn-danger" id="filter_inventori">FILTER</button> 
							</div>
							<div class="col-md-1" style="padding-left: 60px;">
								<button class="btn btn-danger" id="expired">EXPIRED</button> 
							</div>
							<div class="col-md-1" style="padding-left: 55px;">
								<button class="btn btn-warning" id="expiredtiga">EX. 3 BLN</button>
							</div>
							<div class="col-md-1" style="margin-left: 30px;">
								<button class="btn btn-warning" id="expiredenam">EX. 6 BLN</button>
							</div>
	
					</div>		
				</form>
			
				<hr class="garis" style="margin-left:-65px">
				<br>

				<div class="portlet box red" style="margin-left:-40px; margin-right:20px; margin-bottom:40px;">
					<div class="portlet-title">
						<label class="control-label col-md-3" style="font-size: 16pt">Daftar Obat</label>
					</div>
					<div class="portlet-body" style="margin: 0px 10px 0px -10px">
						
						<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven">
							<thead>
								<tr class="info" >
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
							<tbody id="t_body_inventory">
								<?php  
									/*if (!empty($inventori)) {
										foreach ($inventori as $value) {
											echo '<tr>'.
													'<td class="hidden_id" data-edit="'.$value['nama'].'">'.$value['nama'].'</td>'.
													'<td class="obat_id"  data-edit="'.$value['no_batch'].'">'.$value['no_batch'].'</td>'.
													'<td class="harga_dasar" data-edit="'.$value['harga_dasar'].'">'.$value['harga_dasar'].'</td>'.
													'<td class="new_hps" data-edit="'.$value['hps'].'">'.$value['hps'].'</td>'.
													'<td class="new_margin" data-edit="'.$value['margin'].'">'.$value['margin'].'</td>'.
													'<td class="new_h_jual" data-edit="'.$value['harga_jual'].'">'.$value['harga_jual'].'</td>'.
													'<td class="nama_merk" data-edit="'.$value['nama_merk'].'">'.$value['nama_merk'].'</td>'.
													'<td class="obat_id"  data-edit="'.$value['total_stok'].'">'.$value['total_stok'].'</td>'.
													'<td class="new_satuan" data-edit="'.$value['satuan'].'">'.$value['satuan'].'</td>'.								
													'<td class="nama_obat" data-edit="'.$value['tahun_pengadaan'].'">'.$value['tahun_pengadaan'].'</td>'.								
													'<td class="jenis_obat" data-edit="'.$value['tgl_kadaluarsa'].'">'.$value['tgl_kadaluarsa'].'</td>'.
													'<td><a href="#" class="inoutobat" data-toggle="modal" data-target="#inout"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>'.
													'<a href="#" class="printobat"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak"></i></a></td>'.
													'<td style="display:none" class="new_merk_id" data-edit="'.$value['merk_id'].'">'.$value['merk_id'].'</td>'.
													'<td style="display:none" class="new_jenis_id" data-edit="'.$value['jenis_obat_id'].'">'.$value['jenis_obat_id'].'</td>'.
													'<td style="display:none" class="new_satuan_id" data-edit="'.$value['satuan_id'].'">'.$value['satuan_id'].'</td>'.	
												'</tr>';			
										}
									}*/
								?>									
							</tbody>
						</table>
						<br>
						<br><br>

					<div class="modal fade" id="inout" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:200px">
							<div class="modal-dialog">
							<form class="form-horizontal" role="form" method="post" id="form_in_out">
								<div class="modal-content" >
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">IN OUT</h3>
				        			</div>
				        			<div class="modal-body">
					        			<div class="form-group">
					        					<label class="control-label col-md-3" >Tanggal </label>
												<div class="col-md-6" >
								         			<input type="text" id="tglInOut" style="cursor:pointer;" class="form-control calder" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="" value="<?php echo date('d/m/Y'); ?>">
												</div>
												
										</div>
										<div class="form-group">
												<label class="control-label col-md-3" >In / Out </label>
												<div class="col-md-4">
								         		<select class="form-control select" name="io" id="io">
														<option value="IN" selected>IN</option>
														<option value="OUT">OUT</option>					
												</select>
												</div>

										</div>
										<div class="form-group">
					        					<label class="control-label col-md-3" >Jumlah </label>
												<div class="col-md-4" >
								         		<input type="text" class="form-control numberrequired" name="jmlInOut" id="jmlInOut" placeholder="Jumlah">
												</div>
												
										</div>
										<div class="form-group">
					        					<label class="control-label col-md-3" >Sisa Stok </label>
												<div class="col-md-4" >
								         		<input type="text" class="form-control" name="sisaInOut" id="sisaInOut" readonly="">
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
				 			       		<button type="submit" class="btn btn-success" >Simpan</button>
				 			       		<input type="hidden" id="inout_obat_dept_id">
							      	</div>
								</div>
							</form>	
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
			</div>
        </div>

        <div class="tab-pane" id="adaan">
        	<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Tambah Pengadaan</div>
	            <div id="btnBawahAdaan" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoAdaan">
            	<form class="form-horizontal" role="form" id="submitTambahPengadaan">
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
									<input type="text" style="cursor:pointer;" id="tglAdaan" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
								</div>
							</div>
						</div>

						<div class="form-group">

							<label class="control-label col-md-2">Petugas Input 
							</label>
							<div class="col-md-3">
								<input type="hidden" id="pidAdaan">
								<input type="text" class="form-control" id="petugasAdaan" name="ptgasInput" placeholder="Petugas"  data-toggle="modal" data-target="#ptgas"/>
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
								<tbody  id="tbody_addpengadaan">
									<!-- <tr> -->
										<!-- <td>Shabu-Shabu</td>
										<td>UKDW</td>
										<td>1</td>
										<td>Shabu-Shabu</td>
										<td>UKDW</td>
										<td>1</td> -->
																	
									<!-- </tr> -->
							</tbody>
							</table>
						</div>

						<div class="form-group" style="margin-top:30px;">
							<div class="col-md-10"></div>
							<div class="col-md-2"> 				 
								<button class="btn btn-danger" type="reset">RESET</button>
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
					<div class="portlet-body" style="margin: 0px 10px 0px -50px">
					
						<table class="table table-striped table-bordered table-hover table-responsive">
							<thead>
								<tr class="info" >
									<th  style="text-align:left" width="15%"> Nomor Pengadaan </th>
									<th  style="text-align:left"> Tanggal Pengadaan </th>
									<th  style="text-align:left"> Petugas Input </th>
									<th  style="text-align:left"> Keterangan </th>
									<th  style="text-align:left"> Status </th>
									<th  style="text-align:left"> Action </th>
								</tr>
							</thead>
							
							<tbody id="tbody_riwayat">
								<?php
								if (!empty($riwayat_pengadaan)) {
									foreach ($riwayat_pengadaan as $value) {
										$tgl = strtotime($value['tanggal']);
										$date = date('d F Y', $tgl); 
										echo '<tr>'.
											'<td>'.$value['no_pengadaan'].'</td>'.
											'<td>'.$date.'</td>'.
											'<td>'.$value['nama_petugas'].'</td>'.
											'<td>'.$value['keterangan'].'</td>'.
											'<td>'.$value['status'].'</td>'.
											'<td><a href="#"><i class="fa fa-edit"></i></a></td>'.
										'</tr>';			
									}
								}else{
									echo '<tr>
										<td colspan=6 style="text-align:center;">Belum ada Riwayat Pengadaan</td>
									</tr>';
								}
								?>
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
									<input type="text" class="form-control" name="katakunci" id="katakuncipengadaan" placeholder="Nama Obat"/>
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
									<tbody id="tbody_pengadaan">
										<tr>
											<td colspan="2"><center>Cari Data Obat</center></td>
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
									<input type="text" class="form-control" name="katakunci" id="katakuncipetugas" placeholder="Nama petugas"/>
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
									<tbody id="tbody_petugas">
										<tr>
											<td colspan="2"><center>Cari Data Petugas</center></td>
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
								<input type="text" class="form-control" id="subtotal" name="subtotal" placeholder="Sub Total" readonly />
							</div>
							<div class="col-md-2 pull-right" style="width:150px; margin-top:5px;">
								Sub Total : 
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 pull-right" style="width:140px;">
								<input type="text" class="form-control" id="potongan" name="potongan" placeholder="Potongan" />
							</div>
							<div class="col-md-1 pull-right" style="width:100px; margin-right:-20px;">
			         			<select class="form-control select" name="jenispotongan" id="selectpotongan" >
									<option value="%" selected>%</option>
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
								<input type="text" class="form-control" id="grandTotal" name="grandTotal" placeholder="Total" readonly />
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
        				<h3 class="modal-title" id="myModalLabel">Pilih Obat pengadaan1</h3>
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
	            <div id="titleInformasi">Persetujuan Permintaan</div>
	            <div id="btnBawahMintaObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>

            <div class="informasi" id="infoMintaObat">
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 25px 10px 0px -55px">
					
						<table class="table table-striped table-bordered table-hover table-responsive">
							<thead>
								<tr class="info" >
									<th  style="text-align:left"> Waktu </th>
									<th  style="text-align:left"> Departemen </th>
									<th  style="text-align:left"> Petugas Input </th>
									<th  style="text-align:left"> Keterangan </th>
									<th  style="text-align:left"> Action </th>			
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>S012234</td>
									<td>Shabu-Shabu</td>
									<td>Bersalin</td>
									<td>Arya</td>
									<td style="text-align:center">
										<a href="#tambahApp" data-toggle="modal" data-target="#cek"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Cek">
										</i></a>	
									</td>						
								</tr>
							</tbody>
						</table>
					</div>

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
				</div>
			</div>	    
			<br>

			<div class="dropdown" id="btnBawahRiwMintaObat" style="margin-left:10px;width:98.5%">
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
            </div>
        </div>

        <div class="tab-pane" id="returbarang"> 
        	<div class="dropdown" id="btnBawahRetDepartemen" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Retur Dari Departemen</div>
	            <div id="btnBawahRetDepartemen" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>

            <div class="informasi" id="infoRetDepartemen">
            	<div class="portlet box red">
					<div class="portlet-body" style="margin: 30px 14px 30px -50px">
						<table class="table table-striped table-bordered table-hover table-responsive">
							<thead>
								<tr class="info" >
									<th  style="text-align:left"> Waktu </th>
									<th  style="text-align:left"> Departemen </th>
									<th  style="text-align:left"> Petugas Input </th>
									<th  style="text-align:left"> Keterangan </th>
									<th  style="text-align:left"> Action </th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>S012234</td>
									<td>Shabu-Shabu</td>
									<td>Bersalin</td>
									<td>Arya</td>
									<td style="text-align:center">
										<a href="#tambahApp" data-toggle="modal" data-target="#returObatDis"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Cek">
										</i></a>	
									</td>						
								</tr>
							</tbody>
						</table>
					</div>
					<div class="modal fade" id="returObatDis" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:100%">
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
																<td width="10%">Merek</td>
																<td width="10%">Tgl Kadaluarsa</td>
																<td width="10%">Quantity</td>
																<td width="10%">Satuan</td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td >Obat</td>
																<td >Yamaha</td>
																<td >10 Jan</td>
																<td >30</td>
																<td >Kilogram</td>
															</tr>
															
														</tbody>
													</table>												
												</div>
											</div>
					        			</div>
					        			<div class="modal-footer">
					 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Tunda</button>
					 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Terima</button>
								      	</div>
									</div>
								</div>
					</div>
				</div>
            </div>

            <div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Riwayat Retur Dari Departemen</div>
	            <div id="btnBawahRiwRetDepartemen" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>

            <div class="informasi" id="infoRiwRetDepartemen">
	            <form class="form-horizontal" role="form">
	            	<div class="form-group" style="margin-top:25px;">			
						<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by</label>
	       				<div class="col-md-2" style="margin-left:-110px">
							<input type="text" class="form-control" id="fildept" name="fildept" placeholder="Department"/>
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
				
					<div class="form-group">
	            		<div class="portlet-body" style="margin: 30px 30px 20px -30px">
						
							<table class="table table-striped table-bordered table-hover table-responsive">
								<thead>
									<tr class="info" >
										<th  style="text-align:left"> Waktu </th>
										<th  style="text-align:left"> Departemen </th>
										<th  style="text-align:left"> Petugas Input </th>
										<th  style="text-align:left"> Keterangan </th>
										<th  style="text-align:center"> Action </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>S012234</td>
										<td>Shabu-Shabu</td>
										<td>Bersalin</td>
										<td>Arya</td>
										<td style="text-align:center">
											<a href="#" class="deltl" id="deltl"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>
											<a href="#" class="cetak" id="cetak"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Print"></i></a>
										</td>							
									</tr>
								</tbody>
							</table>
						</div>
	            	</div>
	            </form>
            </div>

			<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Retur Ke Distributor</div>
	            <div id="btnBawahRetDistributor" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoRetDistributor">
            	<form class="form-horizontal" role="form">
					<div class="form-group">	
						<label class="control-label col-md-2">Tanggal Retur 
						</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
	            		<div class="col-md-2"></div>
	            		<label class="control-label col-md-2">Nomor Retur 
						</label>
						<div class="col-md-3">
							<input type="text" class="form-control" id="nmrReturDis" name="nmrReturDis" placeholder="Nomor Retur"/>
						</div>
						<div class="col-md-1"></div>
					</div>

					<div class="form-group">	
						<label class="control-label col-md-2">Penyedia 
						</label>
						<div class="col-md-3">
							<input type="text" class="form-control" name="penyediaRetDis" placeholder="Penyedia">
						</div>	
	            		<div class="col-md-1"></div>
	            		<label class="control-label col-md-2">Petugas Input 
						</label>
						<div class="col-md-3">
							<input type="text" style="cursor:pointer;" class="form-control" id="ptgasInput" name="ptgasInput" placeholder="Petugas"  data-toggle="modal" data-target="#ptgas"/>
						</div>
						
					</div>
						
					<div class="form-group">	
						<label class="control-label col-md-2" >Keterangan 
						</label>
						<div class="col-md-3" style="float:left" >
							<textarea class="form-control" id="ketReturDis" name="ketReturDis"></textarea>
						</div>	
					</div>

					<hr class="garis" style="margin-left:-60px">
					<br>

					<a href="#modalRetDis" data-toggle="modal"><i class="fa fa-plus" style="margin-left : -10px">&nbsp;Tambah Obat</i></a>
					<div class="clearfix"></div>
						
					<div class="portlet-body" style="margin: 10px 14px 30px -50px">
						
						<table class="table table-striped table-bordered table-hover table-responsive" id="tblReturDis">
							<thead>
								<tr class="info" >
									<th  style="text-align:left"> Nama Obat </th>
									<th  style="text-align:left"> Quantity </th>
									<th  style="text-align:left"> Satuan </th>
									<th  style="text-align:left"> Merek </th>
									<th  style="text-align:left"> Stok Sisa </th>
									<th  style="text-align:left"> Tgl Kadaluarsa </th>
									
								</tr>
							</thead>
							<tbody  id="addinputReturDis">
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
						
						<div class="form-group" style="margin-top:30px;">
							<div class="col-md-2 pull-right"> 				 
								<button class="btn btn-danger" type="submit">BATAL</button>
								<button class="btn btn-success" type="submit">SIMPAN</button>
							</div>
						</div>
					</div>
					
					<div class="modal fade" id="modalRetDis" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
														<td style="text-align:center"><a href="#" class ="addNew1"><i class="glyphicon glyphicon-check"></i></a></td>
													</tr>
													<tr>
														<td>Panadol</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td>Paramex</td>
														<td style="text-align:center"><a href="#" class ="addNew1"><i class="glyphicon glyphicon-check"></i></a></td>
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
	            <div id="titleInformasi">Riwayat Retur Ke Distributor</div>
	            <div id="btnBawahRiwRetDistributor" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoRiwRetDistributor">
	            <form class="form-horizontal" role="form">
					<div class="form-group">
						<div class="form-group">			
							<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by</label>
		       				<div class="col-md-2" style="margin-left:-110px">
								<input type="text" class="form-control" id="fildist" name="fildist" placeholder="Distributor"/>
							</div>
							
							<div class="col-md-3" >
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

						<hr class="garis" style="margin-left:-45px; margin-right:25px;">
				
						<div class="portlet-body" style="margin: 25px 30px 30px -30px">
							
							<table class="table table-striped table-bordered table-hover table-responsive" >
								<thead>
									<tr class="info" >
										<th  style="text-align:left" width="10%"> Nama Obat </th>
										<th  style="text-align:left"> Quantity </th>
										<th  style="text-align:left"> Satuan </th>
										<th  style="text-align:left"> Merek </th>
										<th  style="text-align:left"> Stok Sisa </th>
										<th  style="text-align:left"> Tgl Kadaluarsa </th>
										<th  style="text-align:left"> Action </th>
										
									</tr>
								</thead>
								<tbody>
										<tr>
											<td>Shabu-Shabu</td>
											<td>UKDW</td>
											<td>1</td>
											<td>Shabu-Shabu</td>
											<td>UKDW</td>
											<td>1</td>
											<td style="text-align:center">
												<a href="#" class="deltl" id="deltl"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>
												<a href="#" class="cetak" id="cetak"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Print"></i></a>
											</td>				
										</tr>
								</tbody>
							</table>
							
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
            	<form id="submit_filter_opname" method="POST" class="form-horizontal" role="form" style="margin-left:20px;margin-right:40px;" >
            		
            		<div class="form-group" id="rowfix2">
	            		<div class='row offer-pg-cont'>
							<div class='offer-pg'>
		            			<div class="round-button portfolio-item" style="margin-left: 5px;">
		            				<div class="round-button-tes round-button-circle round-button-active" onClick="getObatAlphabet('a')" style="cursor:pointer"><a class="round-button" >A</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('b')" style="cursor:pointer"><a class="round-button" >B</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('c')" style="cursor:pointer"><a class="round-button">C</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('d')" style="cursor:pointer"><a class="round-button">D</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('e')" style="cursor:pointer"><a class="round-button">E</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('f')" style="cursor:pointer"><a class="round-button">F</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('g')" style="cursor:pointer"><a class="round-button">G</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('h')" style="cursor:pointer"><a class="round-button">H</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('i')" style="cursor:pointer"><a  class="round-button">I</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('j')" style="cursor:pointer"><a class="round-button">J</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('k')" style="cursor:pointer"><a class="round-button">K</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('l')" style="cursor:pointer"><a class="round-button">L</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('m')" style="cursor:pointer"><a class="round-button">M</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('n')" style="cursor:pointer"><a class="round-button">N</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('o')" style="cursor:pointer"><a class="round-button">O</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('p')" style="cursor:pointer"><a class="round-button">P</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('q')" style="cursor:pointer"><a class="round-button">Q</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('r')" style="cursor:pointer"><a class="round-button">R</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('s')" style="cursor:pointer"><a class="round-button">S</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('t')" style="cursor:pointer"><a class="round-button">T</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('u')" style="cursor:pointer"><a class="round-button">U</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('v')" style="cursor:pointer"><a class="round-button">V</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('w')" style="cursor:pointer"><a class="round-button">W</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('x')" style="cursor:pointer"><a class="round-button">X</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle" onClick="getObatAlphabet('y')" style="cursor:pointer"><a class="round-button">Y</a>
		            				</div>
		            			</div>
		            			<div class="round-button round-margin portfolio-item">
		            				<div class="round-button-tes round-button-circle"onClick="getObatAlphabet('z')" style="cursor:pointer"><a class="round-button">Z</a>
		            				</div>
		            			</div>
						            		
		            		</div>
	            		</div>
            		</div>
            		<div class="form-group">
            			
            			<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by</label>
						<div class="col-md-2">
							<input type="text" class="form-control" name="namaObatOpname" placeholder="Nama Obat" id="filterOpname">
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
							<input type="text" class="form-control" data-provide="datepicker" name="tglInfoTerObat" placeholder="Tanggal Opname">						            			
            			</div>
            		</div>
				<br>

					<div class="portlet box red" >
						<div class="portlet-title">
							<label class="control-label col-md-3" style="font-size: 16pt; margin-left:-50px;">Daftar Obat</label>
						</div>
						<div class="portlet-body" style="margin: 0px -10px 0px -60px">
							
							<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven1">
								<thead>
									<tr class="info" >
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
								<tbody id="tbody_opname">
									<?php
									if (!empty($opname)) {
										foreach ($opname as $value) {
											$tgl = strtotime($value['tgl_opname']);
											$date = date('d F Y', $tgl); 
											$jumlah = $value['harga']*$value['selisih'];
											echo '<tr>'.
												'<td>'.$date.'</td>'.
												'<td>'.$value['nama'].'</td>'.
												'<td>'.$value['nama_merk'].'</td>'.
												'<td>'.$value['harga'].'</td>'.
												'<td>'.$value['stok_obat'].'</td>'.
												'<td><a href="#" data-type="text" data-pk="1" data-original-title="Edit" class="editInven" style="color:black;cursor:default;">'.$value['stok_fisik'].'</a></td>'.
												'<td>'.$value['selisih'].'</td>'.
												'<td>'.$jumlah.'</td>'.
												'<td>
													<a href="#" class="edIven"><div id="status">Edit</div></a>
												</td>'.
											'</tr>';			
										}
									}else{
										echo '<tr>
											<td colspan=9 style="text-align:center;">Tidak Ada Obat Opname</td>
										</tr>';
									}
									?>
										
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
			<div class="dropdown" id="bblo" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Laporan Obat</div>
	            <div id="bblo" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>  
        	
            <div class="informasi" id="ibblo">
	        	<form class="form-horizontal" role="form">
            	
	        		<div class="form-group">
						<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
						<div class="col-md-2" style="width:200px">
							<select class="form-control select" name="filterInv" id="filterInv">
								<option value="Jenis Obat" selected>Jenis Obat</option>
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
									<option value="and" selected>And</option>
									<option value="or">Or</option>
							</select>
						</div>
						<div class="col-md-2" style="margin-left:-20px; width:200px;">
							<select class="form-control select" name="filterInv" id="filterInv">
								<option value="Jenis Obat" selected>Jenis Obat</option>
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
						<div class="col-md-2 pull-right" style="margin-right:265px;">
							<button class="btn btn-info ">PRINT LAPORAN</button> 
						</div>
					</div>
				</form>
			</div>

        	<div class="dropdown" id="bblok" style="margin-left:10px;width:98.5%; margin-top:40px;">
	            <div id="titleInformasi">Laporan Obat Kadaluarsa</div>
	            <div id="bblok" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="ibblok">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
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
							<div class="col-md-2 pull-right" style="margin-right:275px;">
								<button class="btn btn-info ">PRINT LAPORAN</button> 
							</div>
						</div>
					</div>
					
	        	</form>
	        </div>
            <div class="dropdown" id="bblsw" style="margin-left:10px;width:98.5%; margin-top:40px;">
	            <div id="titleInformasi">Laporan Stok Warning</div>
	            <div id="bblsw" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="ibblsw">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
						<div class="col-md-2" style="margin-left:110px;">
							<button class="btn btn-info ">PRINT LAPORAN</button> 
						</div>
					</div>
	        	</form>
	        </div>

            <div class="dropdown" id="bblosot" style="margin-left:10px;width:98.5%; margin-top:40px;">
	            <div id="titleInformasi">Laporan Obat Stok Obat Terakhir</div>
	            <div id="bblosot" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="ibblosot">
	        	<form class="form-horizontal" role="form">
	        		<form class="form-horizontal" role="form">
	        		<div class="form-group">
						<div class="col-md-2" style="margin-left:110px;">
							<button class="btn btn-info ">PRINT LAPORAN</button> 
						</div>
					</div>
	        	</form>
	        	</form>
	        </div>

            <div class="dropdown" id="bblrpp" style="margin-left:10px;width:98.5%; margin-top:40px;">
	            <div id="titleInformasi">Laporan Riwayat Persetujuan Permintaan</div>
	            <div id="bblrpp" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="ibblrpp">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
		        		<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
		        		<div class="col-md-3" style="margin-left:-20px;">
							<select class="form-control select" name="filterInv" id="filterInv">
								<option value="" selected>Semua Departemen</option>
								<option value="">Departemen kandungan</option>
								<option value="">Departemen mata</option>
								<option value="">Departemen anak</option>					
							</select>	
						</div>

						<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 pull-right" style="margin-right:265px;">
								<button class="btn btn-info ">PRINT LAPORAN</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>

            <div class="dropdown" id="bblrrdp" style="margin-left:10px;width:98.5%; margin-top:40px;">
	            <div id="titleInformasi">Laporan Riwayat Retur Departement</div>
	            <div id="bblrrdp" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="bblrrdp">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
		        		<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
		        		<div class="col-md-3" style="margin-left:-20px;">
							<select class="form-control select" name="filterInv" id="filterInv">
								<option value="" selected>Semua Departemen</option>
								<option value="">Departemen kandungan</option>
								<option value="">Departemen mata</option>
								<option value="">Departemen anak</option>					
							</select>	
						</div>

						<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 pull-right" style="margin-right:265px;">
								<button class="btn btn-info ">PRINT LAPORAN</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>
        	
        	<div class="dropdown" id="bblrrds" style="margin-left:10px;width:98.5%; margin-top:40px;">
	            <div id="titleInformasi">Laporan Riwayat Retur Distributor</div>
	            <div id="bblrrds" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="iblrrds">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">

	        			<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>

						<div class="input-group" style="width: 300px; float:left;">	
						  	<input type="text" class="form-control" placeholder="Semua Distrobutor">
							<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-search" style="margin-right: 5px"></i></span>
						</div>

	        			<div class="col-md-3" style="float:left;">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 pull-right" style="margin-right:265px;">
								<button class="btn btn-info ">PRINT LAPORAN</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>

            <div class="dropdown" id="bblrso" style="margin-left:10px;width:98.5%; margin-top:40px;">
	            <div id="titleInformasi">Laporan Riwayat Stok Opname</div>
	            <div id="bblrso" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="ibblrso">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">

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
							<div class="col-md-2 pull-right" style="margin-right:265px;">
								<button class="btn btn-info ">PRINT LAPORAN</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>
        </div>

	
	</div>

</div>

<script type="text/javascript">
	//Perencanaan Pengadaan Here
	$('#katakuncipengadaan').keyup(function(event){
			var p_item = $('#katakuncipengadaan').val();
			
			event.preventDefault();

			if(p_item!=""){
				$.ajax({
					type:"POST",
					url:"<?php echo base_url()?>farmasi/homegudangobat/get_obat/"+p_item,
					success:function(data){
						console.log(data);
						$('#tbody_pengadaan').empty();

	 					if(data.length>0){
							for(var i = 0; i<data.length; i++){
								var nama = data[i]['nama'],
									obat_id = data[i]['obat_id'];

								$("#tbody_pengadaan").append(
									'<tr>'+
										'<td>'+nama+'</td>'+
										'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getObat(&quot;'+obat_id+'&quot; , &quot;'+nama+'&quot;)"></i></td>'+
									'</tr>'
								);
							}
						}else{
							$('#tbody_pengadaan').empty();
							$('#tbody_pengadaan').append(
								'<tr>'+
						 			'<td colspan="2"><center>Data Paket Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
						}
					},
					error:function(data){

					}
				});
			}else{
				$('#tbody_pengadaan').empty();
				$('#tbody_pengadaan').append(
					'<tr>'+
			 			'<td colspan="2"><center>Cari Data Obat</center></td>'+
			 		'</tr>'
				);
			}
		});
		
		
		$('#katakuncipetugas').keyup(function(event){
			var p_item = $('#katakuncipetugas').val();
			
			event.preventDefault();

			if(p_item!=""){
				$.ajax({
					type:"POST",
					url:"<?php echo base_url()?>farmasi/homegudangobat/get_petugas/"+p_item,
					success:function(data){
						$('#tbody_petugas').empty();

	 					if(data.length>0){
							for(var i = 0; i<data.length; i++){
								var nama = data[i]['nama_petugas'],
									id = data[i]['petugas_id'];

								$("#tbody_petugas").append(
									'<tr>'+
										'<td>'+nama+'</td>'+
										'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getPetugas(&quot;'+id+'&quot; , &quot;'+nama+'&quot;)"></i></td>'+
									'</tr>'
								);
							}
						}else{
							$('#tbody_petugas').empty();
							$('#tbody_petugas').append(
								'<tr>'+
						 			'<td colspan="2"><center>Data Paket Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
						}
					},
					error:function(data){

					}
				});
			}else{
				$('#tbody_petugas').empty();
				$('#tbody_petugas').append(
					'<tr>'+
			 			'<td colspan="2"><center>Cari Data Petugas</center></td>'+
			 		'</tr>'
				);
			}
		});

		var item_pengadaan = {};
		// item_pengadaan[1] = {};
		$('#submitTambahPengadaan').submit(function(event){

			item_pengadaan['no_pengadaan'] = $('#nmrAdaan').val();
			item_pengadaan['tanggal'] = $('#tglAdaan').val();
			item_pengadaan['petugas_input'] = $('#pidAdaan').val();
			item_pengadaan['keterangan'] = $('#ketAdaan').val();

			event.preventDefault();
			$.ajax({
				type:"POST",
				data:item_pengadaan,
				url:"<?php echo base_url()?>farmasi/homegudangobat/add_pengadaan",
				success:function(data){
					console.log(item_pengadaan);
					console.log(data);
					alert('ok');
					$('#tbody_riwayat').append(
						'<tr>'+
							'<td>'+data['no_pengadaan']+'</td>'+
							'<td>'+data['tanggal']+'</td>'+
							'<td>'+data['nama_petugas']+'</td>'+
							'<td>'+data['keterangan']+'</td>'+
							'<td>'+data['status']+'</td>'+
							'<td><a href="#"><i class="fa fa-edit"></i></a></td>'+
						'</tr>'
					);
				},error:function(){
					alert('no');
				}
			});

		});
	//End of perencanaan pengadaan

	//Stock Opname Here
	$(document).ready(function(){
		$('#submit_filter_opname').submit(function(event){
			var item = $('#filterOpname').val();

			event.preventDefault();
			// alert('ok');
			// return false;
			$.ajax({
				type:'POST',
				url:'<?php echo base_url()?>farmasi/homegudangobat/get_opname_by_name/'+item,
				success:function(data){
					$('#tbody_opname').empty();
					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							$('#tbody_opname').append(
							 '<tr>'+
								'<td>'+data[i]['tgl_opname']+'</td>'+
								'<td>'+data[i]['nama']+'</td>'+
								'<td>'+data[i]['nama_merk']+'</td>'+
								'<td>'+data[i]['harga']+'</td>'+
								'<td>'+data[i]['stok_obat']+'</td>'+
								'<td><a href="#" data-type="text" data-pk="1" data-original-title="Edit" class="editInven" style="color:black;cursor:default;">'+data[i]['stok_fisik']+'</a></td>'+
								'<td>'+data[i]['selisih']+'</td>'+
								'<td>'+(data[i]['harga']*data[i]['selisih'])+'</td>'+
								'<td><a href="#" class="edIven"><div id="status">Edit</div></a></td>'+
							'</tr>'
							);
						}
					}else{
						$('#tbody_opname').append(
							'<tr>'+
								'<td colspan="9" style="text-align:center;">Data Tidak Ditemukan</td>'+
							'</tr>'
						);
					}
				}
			});
		});
		//end of stock opname
	});

	//function stock opname
	function getObatAlphabet(alpha){
		// alert(alpha);
		// return false;
		$.ajax({
			type:"POST",
			url:"<?php echo base_url()?>farmasi/homegudangobat/get_alpha_obat_opname/"+alpha,
			success:function(data){
				$('#tbody_opname').empty();
				if(data.length>0){
					for(var i = 0; i<data.length; i++){
						$('#tbody_opname').append(
						 '<tr>'+
							'<td>'+data[i]['tgl_opname']+'</td>'+
							'<td>'+data[i]['nama']+'</td>'+
							'<td>'+data[i]['nama_merk']+'</td>'+
							'<td>'+data[i]['harga']+'</td>'+
							'<td>'+data[i]['stok_obat']+'</td>'+
							'<td><a href="#" data-type="text" data-pk="1" data-original-title="Edit" class="editInven" style="color:black;cursor:default;">'+data[i]['stok_fisik']+'</a></td>'+
							'<td>'+data[i]['selisih']+'</td>'+
							'<td>'+(data[i]['harga']*data[i]['selisih'])+'</td>'+
							'<td><a href="#" class="edIven"><div id="status">Edit</div></a></td>'+
						'</tr>'
						);
					}
				}else{
					$('#tbody_opname').append(
						'<tr>'+
							'<td colspan="9" style="text-align:center;">Data Tidak Ditemukan</td>'+
						'</tr>'
					);
				}
			}
		});
	}

	function getObat(id, nama){
		$.ajax({
			type:"POST",
			url:"<?php echo base_url()?>farmasi/homegudangobat/get_obat_detail_pengadaan/"+id,
			success:function(data){
				console.log(data);
				$('#modalAdaan').modal('hide');
				$('#katakuncipengadaan').val('');
				$('#tbody_pengadaan').empty();
				$('#tbody_addpengadaan').append(
					'<tr>'+
						'<td>'+data[0]['nama']+'</td>'+
						'<td>'+data[0]['nama_penyedia']+'</td>'+
						'<td></td>'+
						'<td>'+data[0]['satuan']+'</td>'+
						'<td>'+data[0]['hps']+'</td>'+
						'<td>1</td>'+
					'</tr>'
				);
					// item_pengadaan[number]['obat_id'] = data[0]['obat_id'];
					// item_pengadaan[number]['penyedia_id'] = data[0]['penyedia_id'];
					// item_pengadaan[number]['jumlah'] = 5;//jumlah inputan nanti
					// item_pengadaan[number]['hps'] = data[0]['hps'];
					// item_pengadaan[number]['total'] = 10;//total nanti di hitung melalui jumlah

					// console.log(item_pengadaan);
					// number++;
					// console.log(number);
			}
		});
	}

	function getPetugas(id, nama){
		$("#ptgas").modal('hide');
		$("#pidAdaan").val(id);
		$("#petugasAdaan").val(nama);
		$("#katakuncipetugas").val("");
		$('#tbody_petugas').empty();
		$('#tbody_petugas').append(
			'<tr>'+
	 			'<td colspan="2"><center>Cari Data Petugas</center></td>'+
	 		'</tr>'
		);
	}
</script>

											