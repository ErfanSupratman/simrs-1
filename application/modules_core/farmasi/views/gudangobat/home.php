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
			       						<form method="post" id="lookmerk">
											<div class="form-group">	
												<div class="col-md-6">
													<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Cari Merk"/>
												</div>
												<div class="col-md-2">
													<button type="submit" class="btn btn-info">Cari</button>
												</div>
												<br><br>	
											</div>		
										</form>
										<div style="margin-left:20px; margin-right:20px;"><hr></div>
										<div class="portlet-body" style="margin: 0px 10px 0px 10px">
											<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchMerk" style="width:98%;">
												<thead>
													<tr class="warning">
														<td>Nama Merk</td>
														<td width="10%">Pilih</td>
													</tr>
												</thead>
												<tbody id="t_body_merk">
											 		<tr>
											 			<td colspan="2" class="kosong" style="text-align:center">Cari Merek</td>
											 		</tr>
												</tbody>
											</table>												
										</div>
									</div>
		        				</div>
		        				<form class="form-horizontal" role='form' method="post" id="tambahmerkbaru">
			        				<div style="margin-left:20px; margin-right:20px;"><hr></div>
									<div class="form-group">	
										<div class="col-md-4" style="margin-left:25px;">
											<input type="text" class="form-control" name="newmerk" id="newmerk" placeholder="Tambah Baru"/>
										</div>
										<div class="col-md-2">
											<button type="submit" class="btn btn-success" style="width:150px;">Tambah Baru</button>
										</div>
										<br>	
									</div>
									<br>
								</form>	
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
							<input type="number" class="form-control numberrequired" id="hgDasarObat" name="hgDasarObat" placeholder="Harga Dasar" required/>
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Satuan Obat </label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectSatObat" id="selectSatObat" >
		         				<option value="" selected>Pilih</option>
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
							<input type="number" class="form-control numberrequired" id="hps" name="hps" placeholder="HPS" required />
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Jenis Obat </label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectJnsObat" id="selectJnsObat" >
		         				<option value="" selected>Pilih</option>
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
						<div class="col-md-2">
							<div class="input-group" style="float:left;">
								<input type="number" class="form-control numberrequired" maxlength="3" id="marginobat" name="marginobat" placeholder="margin" required/>
								<span class="input-group-addon" id="basic-addon1">%</span>
							</div>
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Merek </label>
						<div class="col-md-2">	         		
							<input type="text" class="form-control" id="selected_nama_merk" name="selected_nama_merk" placeholder="Merek" data-toggle="modal" data-target="#nmMerk" readonly="" style="cursor:pointer" />
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
							<input type="number" class="form-control numberrequired" id="stokMin" name="stokMin" placeholder="Stok Minimal" required/>
						</div>
						<div class="col-md-2">
						</div>

						<label class="control-label col-md-2" > Generik </label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectGenerik" id="selectGenerik" >
								<option value="generik" selected>Generik</option>
								<option value="non-generik">Non-generik</option>
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
						<div class="col-md-8"><a class="btn btn-danger" id="btnimport" style="margin-left:35px;" data-toggle="modal" data-target="#importmasal">import</a></div>
						<div class="col-md-1">
							<button class="btn btn-danger" id="btnBatalObat" style="margin-left:35px;">BATAL</button>
						</div>
						<div class="col-md-3"> 				 
							<button class="btn btn-warning" style="margin-left:10px" id="resetObat">RESET</button>
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
						<div class="col-md-2" style="margin-left:-15px;margin-right:10px;" >
							<select class="form-control select" name="selectSatObatBwh" id="selectSatObatBwh">
									<option value="" selected="">Semua Satuan</option>';
									<?php if (!empty($satuan_obat)) {
			         					foreach ($satuan_obat as $value) {
			         						echo '<option value="'.$value['satuan_id'].'">'.$value['satuan'].'</option>';	
			         					}
			         				} ?>
							</select>
						</div>
						<div class="col-md-2" style="margin-left:-10px">
							<select class="form-control select" name="selectGenObatBwh" id="selectGenObatBwh">
								<option value="" selected>generik/non-generik</option>
								<option value="generik">Generik</option>
								<option value="non-generik">Non Generik</option>
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
							<!-- <label class="control-label col-md-3" style="font-size: 16pt">Daftar Obat</label> -->
						</div>
						<br>
						<div class="portlet-body" style="margin: 30px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabelobat">
								<thead>
									<tr class="info" >
										<th  style="text-align:left" width="3%"> No. </th>
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
									
								</tbody>
							</table>
						</div>
					</div>
            </div>
            <div class="modal fade" id="searchDetObat" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
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
											<tr><td colspan="2" style="text-align:center">Cari obat</td></tr>
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
										<div class="col-md-6">
											<input type="text" class="form-control" name="katakuncipenyedia" id="katakuncipenyedia" placeholder="Nama Penyedia"/>
										</div>
										<div class="col-md-2">
											<button type="submit" id="btncaripenyedia" class="btn btn-info">Cari</button>
										</div>
										<br>	
									</div>
								</form>	
								<br>	
								<div style="margin-left:20px; margin-right:20px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 10px 0px 10px">
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchPenyedia" style="width:98%;">
										<thead>
											<tr class="warning">
												<td>Nama Penyedia</td>
												<td width="10%">Pilih</td>
											</tr>
										</thead>
										<tbody id="t_body_penyedia">
											<tr>
												<td style="text-align:center" class="kosong" colspan="2">Cari Penyedia</td>
											</tr>
										</tbody>
									</table>												
								</div>
							</div> 
							<form class="form-horizontal" method="post" role="form" id="tambahpenyediabaru"> 
								<div style="margin-left:20px; margin-right:20px;"><hr></div>
								<div class="form-group">	
									<div class="col-md-4" style="margin-left:25px;">
										<input type="text" class="form-control" name="newpenyedia" id="newpenyedia" placeholder="Tambah Baru"/>
									</div>
									<div class="col-md-2">
										<button type="submit" class="btn btn-success" style="width:150px;">Tambah Baru</button>
									</div>
									<br>	
								</div>
								<br>
							</form>
	        			</div>
	        			<div class="modal-footer">
	 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
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
		         		<input type="number" class="form-control" id="jmlDetObat" placeholder="Jumlah"  />	
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Tanggal Kadaluarsa </label>
						<div class="col-md-3">
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" id="tglKadaluarsaDet" style="cursor:pointer;" class="form-control calder" data-provide="datepicker" data-date-format="dd/mm/yyyy" name="tglKadaluarsaDet" value="<?php echo date('d/m/Y'); ?>" required readonly="">
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
						<div class="col-md-8"><button class="btn btn-danger" data-toggle="modal" data-target="#importmasaldetail" type="button" style="margin-left:35px;">IMPORT</button></div>
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
							<!-- <label class="control-label col-md-3" style="font-size: 16pt">Daftar Obat</label> -->
						</div>
						<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						
							<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="tabeldetailobat">
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
									<option value="" selected="selected">Satuan</option>;
									<?php if (!empty($satuan_obat)) {
			         					foreach ($satuan_obat as $value) {
			         						echo '<option value="'.$value['satuan_id'].'">'.$value['satuan'].'</option>';	
			         					}
			         				} ?>			
								</select>
							</div>
							<div class="col-md-1" >
								<select class="form-control select" name="filterGen" id="filterGen" style="margin-left:13px; width:150px">
									<option value="" selected="selected">Generik/non</option>;
									<option value="1">Generik</option>
									<option value="0">Non Generik</option>					
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
						<!-- <label class="control-label col-md-3" style="font-size: 16pt">Daftar Obat</label> -->
					</div>
					<div class="portlet-body" style="margin: 20px 10px 0px -10px">
						
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabelinventoriutama">
							<thead>
								<tr class="info" >
									<th  style="text-align:left" width="3%"> No. </th>
									<th  style="text-align:left"> Nama Obat </th>
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
									         			<input type="text" id="tglInOut" style="cursor:pointer;" class="form-control calder" data-provide="datetimepicker" data-date-format="dd/mm/yyyy H:i:s" readonly="" value="<?php echo date('d/m/Y H:i:s'); ?>">
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
													<th  style="text-align:left"> Waktu </th>
													<th  style="text-align:left"> IN / OUT </th>
													<th  style="text-align:left"> Jumlah </th>
													<th  style="text-align:left"> Stok Akhir </th>
												</tr>
											</thead>
											<tbody id="tbodydetailobatinventori">
													
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
	            <div id="titleInformasi">Tambah Perencanaan Pengadaan</div>
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
									<input type="text" style="cursor:pointer;" id="tglAdaan" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
								</div>
							</div>
						</div>

						<div class="form-group">

							<!-- <label class="control-label col-md-2">Petugas Input </label>
							<div class="col-md-3">
								<input type="hidden" id="pidAdaan">
								<input type="text" class="form-control" id="petugasAdaan" name="ptgasInput" placeholder="Petugas"  data-toggle="modal" data-target="#ptgas"/>
		            		</div>
		            		<div class="col-md-1"></div> -->
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
										<th  style="text-align:left"> Nama Obat </th>
										<th  style="text-align:left"> Penyedia </th>
										<th  style="text-align:left" width="10%"> Quantity </th>
										<th  style="text-align:left"> Satuan </th>
										<th  style="text-align:left"> HPS </th>
										<th  style="text-align:left"> Total </th>
										<th  style="text-align:left" width="8%"> Action </th>
									</tr>
								</thead>
								<tbody  id="tbody_addpengadaan">
									
								</tbody>
							</table>
						</div>

						<div class="form-group" style="margin-top:30px;">
							<div class="col-md-10"></div>
							<div class="col-md-2"> 				 
								<button class="btn btn-danger" type="reset" id="resetaddpengadaan">RESET</button>
								<button class="btn btn-success" type="submit">SIMPAN</button>
							</div>
						</div>
				</form>
			</div>

			<br>
			<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Riwayat Perencanaan Pengadaan</div>
	            <div id="btnBawahRiwaAda" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoRiwaAda">
				<form class="form-horizontal" role="form">
					<!-- <div class="form-group">			
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
					<hr class="garis" style="margin-left:-50px;"> -->
					<br>
					<div class="portlet-body" style="margin: 0px 10px 0px -50px">
						<?php echo "<input type='hidden' id='jml_pengadaan' value='".count($riwayat_pengadaan)."'>"; ?>
						<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="tabelriwayatpengadaan">
							<thead>
								<tr class="info" >
									<th  style="text-align:left" width="5%"> Nomor </th>
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
									$i = 1;
									foreach ($riwayat_pengadaan as $value) {
										$tgl = strtotime($value['tanggal']);
										$date = date('d F Y', $tgl); 
										echo '<tr>'.
											'<td>'.($i++).'</td>'.
											'<td class="nomor_pengadaan">'.$value['no_pengadaan'].'</td>'.
											'<td>'.$date.'</td>'.
											'<td>'.$value['nama_petugas'].'</td>'.
											'<td>'.$value['keterangan'].'</td>'.
											'<td>'.$value['status'].'</td>'.
											'<td style="text-align:center;"><a href="#" class="view_detail_adaan" data-toggle="modal" data-target="#detailpengadaan">'.
												'<i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>
												<input type="hidden" class="pengadaan_id" value="'.$value['obat_rencana_id'].'">
												</td>'.
										'</tr>';			
									}
								}
								?>
							</tbody>
						</table>
						<div class="modal fade" id="detailpengadaan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog" style="width:1200px">
								<div class="modal-content">
									<div class="modal-header">
					    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					    				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Perencanaan Pengadaan </h3>
					    			</div>
					    			<div class="modal-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label1 col-md-5 nama goright">Nomor Pengadaan:</label>
													<div class="col-md-3 nama">	<span id="nomor_obat_rencana"></span> </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label1 col-md-5 goright">Tanggal Rencana Pengadaan:</label>
													<div class="col-md-5">
														<span id="tanggal_rencana"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label1 col-md-4 goright">Petugas Input:</label>
													<div class="col-md-5"><span id="petugas_rencana"></span></div>
												</div>
											</div>
										</div>

										<div class="row">							
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label1 col-md-5 goright">Keterangan:</label>
													<div class="col-md-5"><span id="keterangan_rencana"></span></div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label1 col-md-4 goright">Status:</label>
													<div class="col-md-5"><span id="status_rencana"></span></div>
												</div>
											</div>
										</div>
										<hr/>
										<table class="table table-striped table-bordered table-hover">
											<thead>
												<tr class="info" >
													<th  style="text-align:left"> Nama Obat </th>
													<th  style="text-align:left"> Penyedia </th>
													<th  style="text-align:left"> Quantity </th>
													<th  style="text-align:left"> Satuan </th>
													<th  style="text-align:left"> HPS </th>
													<th  style="text-align:left"> Total </th>
													
												</tr>
											</thead>
											<tbody id="tbody_detailpengadaan">
														
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
					<br><br>
				</form>
            </div>
		</div>

<!-- modals here -->
		<div class="modal fade" id="modalAdaan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" style="width: 800px">
				<div class="modal-content" >
					<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
        			</div>
        			<div class="modal-body">

	        			<div class="form-group">
	        				<form method="post" id="caripengadaanobat">
								<div class="form-group">	
									<div class="col-md-5" style="margin-left:15x;">
										<input type="text" class="form-control" name="katakunci" id="katakuncipengadaan" placeholder="Nama Obat"/>
									</div>
									<div class="col-md-2">
										<button type="submit" class="btn btn-info">Cari</button>
									</div>
									<br><br>	
								</div>
							</form>		
							<div style="margin-left:20px; margin-right:20px;"><hr></div>
							<div class="portlet-body" style="margin: 0px 10px 0px 10px">
								<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:98%;font-size: 98.5%;">
									<thead>
										<tr class="warning">
											<td>Nama Obat</td>
											<td>Merk Obat</td>
											<td>Satuan Obat</td>
											<td width="10%">Pilih</td>
										</tr>
									</thead>
									<tbody id="tbody_pengadaan">
										<tr>
											<td colspan="4"><center>Cari Data Obat</center></td>
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
		<div class="modal fade" id="ptgaspenerimaan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
									<input type="text" class="form-control" name="katakunci" id="katakuncipetugaspenerimaan" placeholder="Nama petugas"/>
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
									<tbody id="tbody_petugaspenerimaan">
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
		<div class="modal fade" id="ptgasretur" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

		<div class="modal fade" id="searchpenyediapenerimaan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Pilih Penyedia</h3>
        			</div>
        			<div class="modal-body">

	        			<div class="form-group">
	        				<form method="post" id="formsearchpenyediapenerimaan" role="form">
								<div class="form-group">	
									<div class="col-md-6" >
										<input type="text" class="form-control" name="katakuncipenyedia" id="penyediapenerimaan" placeholder="Nama Penyedia"/>
									</div>
									<div class="col-md-2">
										<button type="submit" id="btncaripenyedia" class="btn btn-info">Cari</button>
									</div>
									<br>	
								</div>
							</form>		
							<div style="margin-left:20px; margin-right:20px;"><hr></div>
							<div class="portlet-body" style="margin: 0px 10px 0px 10px">
								<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchPenyedia" style="width:98%;">
									<thead>
										<tr class="warning">
											<td>Nama Penyedia</td>
											<td width="10%">Pilih</td>
										</tr>
									</thead>
									<tbody id="tbody_penyediapenerimaan" class="addKosong">
										
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
<!-- modals here -->

        <div class="tab-pane" id="penerimaan"> 
			<div class="dropdown" style="margin-left:10px;width:98.5%" id="btnBawahTerimaObat">
	            <div id="titleInformasi">Penerimaan Obat</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div id="infoTerimaObat">
            	<form class="form-horizontal" role="form" method="post" id="formpenerimaanobat">
	        		<div class="informasi">	
						<div class="form-group">			
		            		<label class="control-label col-md-2">Nomor Penerimaan </label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="nmrTerima" name="nmrTerima" placeholder="Nomor Penerimaan"/>
							</div>
							<div class="col-md-1"></div>
							<label class="control-label col-md-2">Sumber Dana </label>
							<div class="col-md-3" style="float:left" >
								<select class="form-control select" name="sumdanapenerimaan" id="sumdanapenerimaan">
								<option value="Mandiri" selected>Mandiri</option>
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
									<input type="text" style="cursor:pointer;" id="tglTerimaObat" name="tglTerimaObat" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
								</div>
							</div>
							<div class="col-md-1"></div>
							<label class="control-label col-md-2">Penyedia </label>
							<div class="col-md-3" style="float:left" >
								<input type="text" style="cursor:pointer;" class="form-control" id="penyediaObatTerima" name="penyediaObatTerima" placeholder="Penyedia" data-toggle="modal" data-target="#searchpenyediapenerimaan" readonly="" />
								<input type="hidden" id="id_penyediaObatTerima">
							</div>
						</div>

						<div class="form-group">			
		            		<label class="control-label col-md-2" >Tanggal Faktur </label>
							<div class="col-md-3">
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" id="tglFakturObat" name="tglFakturObat" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
								</div>
							</div>
							<div class="col-md-1"></div>
							<label class="control-label col-md-2" >Keterangan 
							</label>
							<div class="col-md-3" style="float:left" >
								<textarea class="form-control" id="ketObatTerima" name="ketObat"></textarea>
							</div>
							
						</div>
					</div>	
					
					<div class="tabelinformasi">
						<a href="#modalTerima" data-toggle="modal"  style="margin-left:20px;"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Obat Penerimaan">&nbsp;Tambah Penerimaan</i></a>
						<div class="clearfix"></div>

						<div class="portlet-body" style="margin: 10px 10px 0px 10px">
								
							<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven">
								<thead>
									<tr class="info" >
										<th  style="text-align:left"> Nama Obat </th>
										<th  style="text-align:left"> Satuan </th>
										<th  style="text-align:left"> Batch </th>
										<th  style="text-align:left"> Tgl Kadaluarsa </th>
										<th  style="text-align:left width:100px;"> Quantity </th>
										<th style="text-align:left; width:50px;"> Diskon</th>
										<th  style="text-align:left"> Harga </th>
										<th  style="text-align:left"> Total </th>
										<th  style="text-align:left"> Action </th>
									</tr>
								</thead>
								<tbody id="t_body_inputterima">
										
								</tbody>
							</table>
							<div class="form-group">
								<div class="col-md-2 pull-right">
									<label class="control-label pull-right" style="font-size:1.8em;margin-top:-10px;"><span id="subtotalterima">0</span></label>
								</div>
								<div class="col-md-4 pull-right" style="width:150px; margin-top:5px;margin-right:90px; text-align:right;">
									Sub Total(Rp.) : 
								</div>
							</div>
							<!-- <div class="form-group">
								<div class="col-md-2 pull-right">
									<label class="control-label pull-right" style="font-size:1.8em;margin-top:-10px;"><span id="subtotalterima">0</span></label>
								</div>
								<div class="col-md-1 pull-right" style="width:80px;"></div>
								<div class="col-md-3 pull-right" style="width:170px; margin-top:5px;">
									Sub Total(Rp.) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
								</div>
							</div> -->

							<div class="form-group">
								<div class="col-md-2 pull-right" style="width:140px;">
									<input type="number" class="form-control" id="potongan" name="potongan" value="0" />
								</div>
								<div class="col-md-2 pull-right" style="width:100px;">
						 			<select class="form-control select" name="jenispotongan" id="selectpotongan" >
										<option value="persen" selected>%</option>
										<option value="nomilal">Rp. </option>
									</select>
								</div>
								<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
									Potongan : 
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-1 pull-right" style="font-size:18pt; width:140px;"><span id="hasilppn">0</span></label>
								<div class="col-md-2 pull-right" style="width:100px;">
									<input type="number" class="form-control" id="ppn" maxlength="3" name="ppn" value="0" />
								</div>
								<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
									PPN (%) : 
								</div>
							</div>
							<!-- <div class="form-group">
								<div class="col-md-3 pull-right" style="width:120px;margin-left:-20px;">
									<div class="input-group" style="float:left;">	
										<input type="text" class="form-control numberrequired" maxlength="3" id="ppn" name="ppn" placeholder="0"/>
										<span class="input-group-addon" id="basic-addon1">%</span>
									</div>
								</div>
								<div class="col-md-1 pull-right" style="width:10px;margin-left:-23px;font-size:20pt;margin-right:10px;">/ &nbsp;</div>
								<div class="col-md-1 pull-right" style="width:120px;">
									<input type="text" class="form-control numberrequired" id="potongan" name="potongan" placeholder="0"/>
								</div>
								<div class="col-md-2 pull-right" style="width:100px; margin-right:-20px;">
				         			<select class="form-control select" name="jenispotongan" id="selectpotongan" >
										<option value="persen" selected>%</option>
										<option value="nominal">Rp. </option>
									</select>
								</div>
								<div class="col-md-3 pull-right" style="width:180px; margin-top:5px;">
									Potongan / PPN &nbsp;&nbsp; : 
								</div>
							</div> -->
							<div class="form-group">
								<div class="col-md-2 pull-right" style="width:240px;">
									<label class="control-label pull-right" style="font-size:2em;color:red;"><span id="grandtotal">0</span></label>
								</div>
								<div class="col-md-2 pull-right" style="width:150px; margin-top:15px; text-align:right;">
									Grand Total : 
								</div>
							</div>
							<!-- <div class="form-group">
								<div class="col-md-2 pull-right">
									<label class="control-label pull-right" style="font-size:1.8em;color:red;margin-top:-10px;"><span id="grandtotal">0</span></label>
								</div>
								<div class="col-md-1 pull-right" style="width:80px;"></div>
								<div class="col-md-3 pull-right" style="width:170px; margin-top:5px;">
									Grand Total (Rp.) &nbsp;: 
								</div>
							</div> -->


							<div class="form-group">
								<div class="pull-right" style="margin-bottom:10px;margin-right:18px;">
									<button type="button" class="btn btn-warning" id="resetpenerimaan">Reset</button>
									<button type="submit" class="btn btn-success">Cetak</button>
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
	            	<!-- <div class="form-group informasi">
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

					<hr class="garis" style="margin-left:10px;">-->

					<!-- <div class="pull-right" style="margin-right:40px;">
						<ul class="pagination">
							<li class="disabled"><a href="#"><i class="fa fa-angle-left" style="height:5px;"></i></a></li>
							<li class="paginate-button active"><a href="#">1</a></li>
							<li class="paginate-button"><a href="#">2</a></li>
							<li class="paginate-button"><a href="#">3</a></li>
							<li class="paginate-button"><a href="#">4</a></li>
							<li class="paginate-button"><a href="#">5</a></li>
							<li><a href="#"><i class="fa fa-angle-right" style="height:5px;"></i></a></li>
						</ul>
					</div> -->
					<br>

					<div class="portlet-body" style="margin: 20px 10px 0px 15px">
							<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="tblriwayatterima">
								<thead>
									<tr class="info" >
										<th style="text-align:center; width:30px;">No.</th>
										<th style="text-align:left"> Nama Obat </th>
										<th style="text-align:left"> Satuan </th>
										<th style="text-align:left"> Batch </th>
										<th style="text-align:left"> Tgl Kadaluarsa </th>
										<th style="text-align:left"> Quantity </th>
										<th style="text-align:left"> Diskon</th>
										<th style="text-align:left"> Harga </th>
										<th style="text-align:left"> Total </th>
									</tr>
								</thead>
								<tbody>
									<?php  
										if (isset($riwayat_penerimaan)) {
											if (!empty($riwayat_penerimaan)) {
												$i=1;
												foreach ($riwayat_penerimaan as $value) {
													$dateTime = DateTime::createFromFormat('Y-m-d',$value['tgl_kadaluarsa']);
													echo '<tr>'.
														'<td>'.($i++).'</td>'.
														'<td>'.$value['nama'].'</td>'.
														'<td>'.$value['satuan'].'</td>'.
														'<td>'.$value['no_batch'].'</td>'.
														'<td>'.$dateTime->format('d F Y').'</td>'.
														'<td>'.$value['jumlah'].'</td>'.
														'<td>'.$value['diskon'].'</td>'.
														'<td>'.$value['harga_beli'].'</td>'.
														'<td>'.$value['total'].'</td>'.								
													'</tr>';
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

        <div class="modal fade" id="modalTerima" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" style="width: 900px;">
				<div class="modal-content">
					<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Pilih Obat   - <small><span class="modal-title" id="modalnamapenyedia"></span></small></h3>
        			</div>
        			<div class="modal-body">

	        			<div class="form-group">
							<div class="form-group">	
								<div class="col-md-6">
									<input type="text" class="form-control" name="katakuncipenerimaan" id="katakuncipenerimaan" placeholder="Nama Obat"/>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-info">Cari</button>
								</div>
								<br><br>	
							</div>		
							<div style="margin-left:20px; margin-right:20px;"><hr></div>
							<div class="portlet-body" style="margin: 0px 10px 0px 10px">
								<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:98%;">
									<thead>
										<tr class="warning">
											<td>Nama Obat</td>
											<td>Harga dasar</td>
											<td>Satuan</td>
											<td width="10%">Pilih</td>
										</tr>
									</thead>
									<tbody id="t_body_obatpenerimaan">
										<tr>
											<td style="text-align:center" colspan="4">cari data obat</td>
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
            	<!-- <div class="pull-right" style="margin-right:40px;">
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
				<br> -->
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 25px 10px 0px 10px">
					
						<table class="table table-striped table-bordered table-hover table-responsive tableDT" cellspacing="0" id="tabelpermintaangudang">
							<thead>
								<tr class="info" >
									<th style="text-align:center;width:30px;">No.</th>
									<th  style="text-align:left"> Waktu </th>
									<th  style="text-align:left"> Departemen </th>
									<th  style="text-align:left"> Petugas Input </th>
									<th  style="text-align:left"> Keterangan </th>
									<th  style="text-align:left;width:30px;"> Action </th>			
								</tr>
							</thead>
							<tbody id="t_body_permintaan">
								<?php  
									if (isset($persetujuan)) {
										if (!empty($persetujuan)) {
											$i=0;
											foreach ($persetujuan as $value) {
												echo '<tr>'.
													'<td style="text-align:center">'.(++$i).'</td>'.
													'<td>'.$value['tanggal_request'].'</td>'.
													'<td>'.$value['nama_dept'].'</td>'.
													'<td>'.$value['nama_petugas'].'</td>'.
													'<td>'.$value['keterangan_request'].'</td>'.
													'<td style="text-align:center">
														<input type="hidden" class="idpermintaanobat" value="'.$value['obat_permintaan_id'].'">
														<input type="hidden" class="iddeptpermintaanobat" value="'.$value['dept_id'].'">
														<a href="#" class="lihatdetailminta" data-toggle="modal" data-target="#cek">
															<i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Cek"></i>
														</a>
													</td>'.								
												'</tr>';
											}
										}
									}
								?>
							</tbody>
						</table>
					</div>

					<div class="modal fade" id="cek" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<form role="form" class="form-horizontal" method="post" id="formdetailpermintaan">
							<div class="modal-dialog"  style="width:1000px;">
								<div class="modal-content">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Detail Permintaan</h3>
				        			</div>
				        			<div class="modal-body">
					        			<div class="form-group">
											<div style="margin-left:20px; margin-right:20px;"><hr></div>
											<div class="portlet-body" style="margin: 0px 50px 0px 30px">
												<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:100%;">
													<thead>
														<tr class="warning">
															<th>Nama Obat</th>
															<th>Satuan</th>
															<th>Merek</th>
															<th>Tanggal Kadaluarsa</th>
															<th>Stok Gudang</th>
															<th>Diminta</th>
															<th>Diberikan</th>
															<th>Harga Jual</th>
														</tr>
													</thead>
													<tbody id="t_body_detail_permintaan">
														<tr>
															<td>Obat 1</td>
															<td style="text-align:left">Kilogram</td>
															<td style="text-align:left">Yamaha</td>
															<td style="text-align:right">20</td>
															<td style="text-align:right">10</td>
															<td style="text-align:right">30</td>
															<td style="text-align:right"><a href="#" class="editableform editable-click app" data-type="text" data-pk="1" data-original-title="Jumlah Diapprove" id="app">0</a></td>
															<td style="text-align:right">30000</td>
														</tr>
													</tbody>
												</table>												
											</div>
										</div>
				        			</div>
				        			<div class="modal-footer">
				 			       		<button type="button" class="btn btn-warning" data-dismiss="modal" id="batalterima">Batal</button>
				 			       		<input type="hidden" id="obat_permintaan_id_confirm">
				 			       		<input type="hidden" id="deptobat_permintaan_id_confirm">
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
            		
		        	<div class="form-group informasi">
						<label class="control-label col-md-2" style="margin-left:70px;"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter By : 
						</label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="dept" name="dept" placeholder="Department"/>
						</div>
						
						<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start" data-date-autoclose="true"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" data-date-autoclose="true" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
							</div>
						</div>

						<div class="col-md-2" style="margin-left:0px">
							<button type="submit" class="btn btn-warning">Filter</button>
						</div>
					</div>
					
					<hr class="garis" style="margin-left:15x;">
					<br><br>

	           		<div class="portlet box red">
						<br>
						<div class="tabelinformasi">	
							<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<input type="hidden" id="jlhpersetujuan" value="<?php echo count($riwayat_persetujuan) ?>">
								<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabelutamariwayatpersetujuan">
									<thead>
										<tr class="info" >
											<th  style="text-align:center; width:30px;"> No.</th>
											<th  style="text-align:left"> Waktu Persetujuan</th>
											<th  style="text-align:left"> Departemen </th>
											<th  style="text-align:left"> Petugas Input </th>
											<th  style="text-align:left"> Keterangan </th>
											<th  style="text-align:left; width:30px;"> Action </th>
											
										</tr>
									</thead>
									<tbody id="t_body_riwayatpermintaan">
										<?php  
											if (isset($riwayat_persetujuan)) {
												if (!empty($riwayat_persetujuan)) {
													$i=1;
													foreach ($riwayat_persetujuan as $value) {
														$tgl = DateTime::createFromFormat('Y-m-d H:i:s',$value['tanggal_request']);
														echo '<tr>'.
															'<td style="text-align:center">'.($i++).'</td>'.
															'<td>'.$tgl->format('d F Y H:i:s').'</td>'.
															'<td>'.$value['nama_dept'].'</td>'.
															'<td>'.$value['nama_petugas'].'</td>'.
															'<td>'.$value['keterangan_request'].'</td>'.
															'<td style="text-align:center">
																<input type="hidden" class="idriwayatpermintaan" value="'.$value['obat_permintaan_id'].'">
																<a href="#" class="detailriwayatpermintaan" data-toggle="modal" data-target="#riwpersetujuanper">
																	<i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="detail"></i>
																</a>
															</td>'.								
														'</tr>';
													}
												}
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="modal fade" id="riwpersetujuanper" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" style="width:900px">
							<div class="modal-content">
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
													<span id="waktupersetujuan"></span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label1 col-md-4 goright">Departemen:</label>
												<div class="col-md-5"><span id="departemenpersetujuan"></span></div>
											</div>
										</div>
									</div>

									<div class="row">							
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label1 col-md-5 goright">Petugas Input:</label>
												<div class="col-md-5"><span id="petugasresponpersetujuan"></span></div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label1 col-md-4 goright">Keterangan:</label>
												<div class="col-md-5"><span id="keteranganriwayatpersetujuan"></span></div>
											</div>
										</div>
									</div>
									<hr/>
									<table class="table table-striped table-bordered table-hover" id="tabelHasilPenunjang">
										<thead>
											<tr class="warning">
												<th>Nama Obat</th>
												<th >Satuan</th>
												<th>Merek</th>
												<th>Stok Gudang</th>
												<th>Diminta</th>
												<th>Diberikan</th>
												<th>Harga Jual</th>
											</tr>
										</thead>
										<tbody id="t_body_detailriwayatminta">
											
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

        <div class="tab-pane" id="returbarang"> 
        	<div class="dropdown" id="btnBawahRetDepartemen" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Retur Dari Departemen</div>
	            <div id="btnBawahRetDepartemen" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <div class="tabelinformasi" id="infoRetDepartemen">
            	<!-- <div class="pull-right" style="margin-right:40px;">
					<ul class="pagination">
						<li class="disabled"><a href="#"><i class="fa fa-angle-left" style="height:5px;"></i></a></li>
						<li class="paginate-button active"><a href="#">1</a></li>
						<li class="paginate-button"><a href="#">2</a></li>
						<li class="paginate-button"><a href="#">3</a></li>
						<li class="paginate-button"><a href="#">4</a></li>
						<li class="paginate-button"><a href="#">5</a></li>
						<li><a href="#"><i class="fa fa-angle-right" style="height:5px;"></i></a></li>
					</ul>
				</div> -->
				<br>
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 25px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="tabelreturdepartemen">
							<thead>
								<tr class="info" >
									<th style="width:30px"> No.</th>
									<th  style="text-align:left"> Waktu </th>
									<th  style="text-align:left"> Departemen </th>
									<th  style="text-align:left"> Petugas Input </th>
									<th  style="text-align:left"> Keterangan </th>
									<th  style="text-align:left;width:30px;"> Action </th>
								</tr>
							</thead>
							<tbody id="tbody_obat_dept">
								<?php  
									if (isset($returdept)) {
										if (!empty($returdept)) {
											$i=0;
											foreach ($returdept as $value) {
												echo '<tr>'.
													'<td>'.(++$i).'</td>'.
													'<td>'.$value['waktu'].'</td>'.
													'<td>'.$value['nama_dept'].'</td>'.
													'<td>'.$value['nama_petugas'].'</td>'.
													'<td>'.$value['keterangan'].'</td>'.
													'<td style="text-align:center">'.
														'<input type="hidden" class="idreturdept" value="'.$value['retur_dept_id'].'">'.
														'<input type="hidden" class="iddeptreturobat" value="'.$value['dept_id'].'">'.
														'<a href="#tambahApp" class="cekdetailreturdept" data-toggle="modal" data-target="#returObatDis"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Cek">'.
														'</i></a>'.	
													'</td>'.						
												'</tr>';
											}
										}
									}
								?>	
							</tbody>
						</table>
					</div>
					<div class="modal fade" id="returObatDis" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:100%">
						<form class="form-horizontal" role="form" method="post" id="formterimaretur">
							<div class="modal-dialog"  style="width:900px">
								<div class="modal-content">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Retur Obat dari Departemen <span id="detnamadept"></span></h3>
				        			</div>
				        			<div class="modal-body">
					        			<div class="form-group">
											<div style="margin-left:20px; margin-right:20px;"><hr></div>
											<div class="portlet-body" style="margin: 0px 30px 0px 15px">
												<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelaryacopasckckck" style="width:100%;">
													<thead>
														<tr class="warning">
															<td width="20%">Nama Obat</td>
															<td width="10%">Merek</td>
															<td width="10%">Tgl Kadaluarsa</td>
															<td width="10%">Quantity</td>
															<td width="10%">Satuan</td>
														</tr>
													</thead>
													<tbody id="tbody_detailreturdept">
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
				 			       		<input type="hidden" id="id_returdepartemen">
				 			       		<input type="hidden" id="id_departementasalretur">
				 			       		<button type="submit" class="btn btn-success">Terima</button>
							      	</div>
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>
            <br>

            <div class="dropdown" id="btnBawahRiwRetDepartemen" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Riwayat Retur Dari Departemen</div>
	            <div id="btnBawahRiwRetDepartemen" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div id="infoRiwRetDepartemen">
	            <form class="form-horizontal" role="form">
		        	<!-- <div class="form-group informasi">
						<label class="control-label col-md-2" style="margin-left:70px;"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter By : 
						</label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="dept" name="dept" placeholder="Department"/>
						</div>
						
						<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start" data-date-autoclose="true"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" data-date-autoclose="true" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
							</div>
						</div>
						<div class="col-md-2" style="margin-left:0px">
							<button type="submit" class="btn btn-warning">Filter</button>
						</div>
					</div>

					<hr class="garis" style="margin-left:15x;"> -->
					<!-- 
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
					</div> -->
					<br>

					<div class="portlet box red">
						<br>
						<div class="tabelinformasi">
		            		<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							
								<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="tabelriwayatreturdept">
									<thead>
										<tr class="info" >
											<th style="text-align:center;width:20px;">No.</th>
											<th  style="text-align:left"> Waktu </th>
											<th  style="text-align:left"> Departemen </th>
											<th  style="text-align:left"> Petugas Input </th>
											<th  style="text-align:left"> Keterangan </th>
											<th  style="text-align:center;width:100px;"> Action </th>
										</tr>
									</thead>
									<tbody id="t_body_riwayatreturdept">
										<?php  
											if (isset($riwayat_retur)) {
												if (!empty($riwayat_retur)) {
													$i=0;
													foreach ($riwayat_retur as $value) {
														$tgl = DateTime::createFromFormat('Y-m-d H:i:s',$value['tanggal_confirm']);
														echo '<tr>'.
															'<td style="text-align:center">'.(++$i).'</td>'.
															'<td>'.$tgl->format('d F Y H:i:s').'</td>'.
															'<td>'.$value['nama_dept'].'</td>'.
															'<td>'.$value['nama_petugas'].'</td>'.
															'<td>'.$value['keterangan'].'</td>'.
															'<td style="text-align:center">
																<input type="hidden" class="idriwayatreturdept" value="'.$value['retur_dept_id'].'">
																<a href="#" class="detailriwayatdept" data-toggle="modal" data-target="#riwretdept"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>
																<a href="#" class="cetak" id="cetak"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Print"></i></a>
															</td>'.								
														'</tr>';
													}
												}
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
	            	</div>
	            </form>
	            <br>
            </div>
            <div class="modal fade" id="riwretdept" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" style="width:800px">
					<div class="modal-content">
						<div class="modal-header">
		    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		    				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Retur dari Departemen </h3>
		    			</div>
		    			<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-5 goright">Waktu :</label>
										<div class="col-md-6">
											<span id="wakturiwayatreturdept"></span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-4 goright">Departemen:</label>
										<div class="col-md-5"><span id="deptriwayatreturdept"></span></div>
									</div>
								</div>
							</div>

							<div class="row">							
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-5 goright">Petugas Input:</label>
										<div class="col-md-5"><span id="petugasriwayatreturdept"></span></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-4 goright">Keterangan:</label>
										<div class="col-md-5"><span id="ketriwayatreturdept"></span></div>
									</div>
								</div>
							</div>
							<hr/>
							<table class="table table-striped table-bordered table-hover" id="tabelHasilPenunjang">
								<thead>
									<tr class="info">
										<th style="width:20px;">No.</th>
										<th>Nama Obat</th>
										<th>Tanggal Kadaluarsa</th>
										<th>Quantity</th>
										<th>Satuan</th>
									</tr>
								</thead>
								<tbody id="t_body_detailriwayatreturdept">
									<tr>
										<td style="text-align:center" colspan="5">Tidak ada detail</td>
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

			<div class="dropdown" id="btnBawahRetDistributor" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Retur Ke Distributor</div>
	            <div id="btnBawahRetDistributor" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div> 
            <div class="informasi" id="infoRetDistributor">
            	<form class="form-horizontal" role="form" method="post" id="formsubmitreturdistributor">
					<div class="form-group">	
						<label class="control-label col-md-2">Tanggal Retur 
						</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" data-date-autoclose="true" class="form-control calder" readonly="" data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" style="cursor:pointer">
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
							<input type="text" style="cursor:pointer" class="form-control" id="penyediaRetDis" name="penyediaRetDis" data-toggle="modal" data-target="#penyediareturdistributor" placeholder="Penyedia" readonly="">
							<input type="hidden" class="id_penyediaRetDis">
						</div>	
	            		<div class="col-md-1"></div>
	            		<label class="control-label col-md-2" >Keterangan </label>
						<div class="col-md-3" style="float:left" >
							<textarea class="form-control" id="ketReturDis" name="ketReturDis"></textarea>
						</div>
						
					</div>
					<hr class="garis" style="margin-left:-60px">
					<br>

					<a href="#modalRetDis" id="adddetailreturdist" data-toggle="modal"><i class="fa fa-plus" style="margin-left : -10px">&nbsp;Tambah Obat</i></a>
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
									<th  style="text-align:center"> Action </th>
								</tr>
							</thead>
							<tbody  id="tbodyinputreturdistributor">
							</tbody>
						</table>
						
						<div class="form-group" style="margin-top:30px;">
							<div class="col-md-2 pull-right"> 				 
								<button class="btn btn-warning" type="button" id="batalreturdis">RESET</button>
								<button class="btn btn-success" type="submit">SIMPAN</button>
							</div>
						</div>
					</div>
				</form>
            </div>
            <br>
			<div class="modal fade" id="modalRetDis" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" style="width:800px;">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
	        			</div>
	        			<div class="modal-body">

		        			<div class="form-group">
		        				<form class="form-horizontal" role="form" method="post" id="searchobatreturdistributor">
									<div class="form-group">	
										<div class="col-md-3" style="margin-left:35px;">
											<input type="text" class="form-control" name="katakunci" id="katakunciobatreturdistributor" placeholder="Nama Obat"/>
										</div>
										<div class="col-md-2">
											<button type="submit" class="btn btn-info">Cari</button>
										</div>
										<br><br>	
									</div>
								</form>
								<div style="margin-left:20px; margin-right:20px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 10px 0px 10px">
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:98%; font-size: 98%;">
										<thead>
											<tr class="warning">
												<td>Nama Obat</td>
												<td>Satuan</td>
												<td>Merk</td>
												<td>total</td>
												<td>Tgl Kadaluarsa</td>
												<td width="10%">Pilih</td>
											</tr>
										</thead>
										<tbody id="t_body_addreturdistributor">
											<tr>
												<td style="text-align:center" colspan="6">Cari data obat</td>
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
			<div class="modal fade" id="penyediareturdistributor" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Penyedia</h3>
	        			</div>
	        			<div class="modal-body">

		        			<div class="form-group">
		        				<form class="form-horizontal" role="form" method="post" id="searchpenyediareturdist">
									<div class="form-group">	
										<div class="col-md-4" style="margin-left:35px;">
											<input type="text" class="form-control" name="katakunci" id="katakuncipenyediaretdis" placeholder="Nama penyedia"/>
										</div>
										<div class="col-md-2">
											<button type="submit" class="btn btn-info">Cari</button>
										</div>
										<br><br>	
									</div>	
								</form>
								<div style="margin-left:20px; margin-right:20px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 10px 0px 10px">
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:98%; font-size:98%;">
										<thead>
											<tr class="info">
												<td>Nama Penyedia</td>
												<td width="10%">Pilih</td>
											</tr>
										</thead>
										<tbody id="t_body_penyediareturdist">
											<tr>
												<td style="text-align:center" colspan="2">Cari data Penyedia</td>
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
            <div class="dropdown" id="btnBawahRiwRetDistributor" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Riwayat Retur Ke Distributor</div>
	            <div id="btnBawahRiwRetDistributor" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div id="infoRiwRetDistributor">
	            <form class="form-horizontal" role="form">
		        	<!-- <div class="form-group informasi">
						<label class="control-label col-md-2" style="margin-left:70px;"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter By : 
						</label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="dist" name="dist" placeholder="Distributor"/>
						</div>
						
						<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start" data-date-autoclose="true"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" data-date-autoclose="true" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
							</div>
						</div>
						<div class="col-md-2" style="margin-left:0px">
							<button type="submit" class="btn btn-warning">Filter</button>
						</div>
					</div>

					<hr class="garis" style="margin-left:15x;"> -->
					
					<!-- <div class="pull-right" style="margin-right:40px;">
						<ul class="pagination">
							<li class="disabled"><a href="#"><i class="fa fa-angle-left" style="height:5px;"></i></a></li>
							<li class="paginate-button active"><a href="#">1</a></li>
							<li class="paginate-button"><a href="#">2</a></li>
							<li class="paginate-button"><a href="#">3</a></li>
							<li class="paginate-button"><a href="#">4</a></li>
							<li class="paginate-button"><a href="#">5</a></li>
							<li><a href="#"><i class="fa fa-angle-right" style="height:5px;"></i></a></li>
						</ul>
					</div> -->
					<br>

					<div class="portlet box red">
						<br>
						<div class="tabelinformasi">
		            		<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							
								<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="tabelriwayatreturdistributor">
									<thead>
										<tr class="info" >
											<th style="text-align:center; width:20px;">No. </th>
											<th  style="text-align:left"> No. Retur </th>
											<th  style="text-align:left"> Distributor </th>
											<th  style="text-align:left"> Petugas Input </th>
											<th  style="text-align:left"> Waktu Retur </th>
											<th  style="text-align:left"> Keterangan </th>
											<th  style="text-align:center; width:100px;"> Action </th>
										</tr>
									</thead>
									<tbody id="tbodyriwayatreturdistributor">
										<?php  
											if (isset($riwayat_returdistributor)) {
												if (!empty($riwayat_returdistributor)) {
													$i=1;
													foreach ($riwayat_returdistributor as $value) {
														$tgl = DateTime::createFromFormat('Y-m-d H:i:s',$value['waktu']);
														echo '<tr>'.
															'<td style="text-align:center">'.($i++).'</td>'.
															'<td>'.$value['no_retur'].'</td>'.
															'<td>'.$value['nama_penyedia'].'</td>'.
															'<td>'.$value['nama_petugas'].'</td>'.
															'<td>'.$tgl->format('d F Y H:i:s').'</td>'.
															'<td>'.$value['keterangan'].'</td>'.
															'<td style="text-align:center">
																<input type="hidden" class="idriwayatreturdist" value="'.$value['retur_distributor_id'].'">
																<a href="#" class="detailriwayatdist" data-toggle="modal" data-target="#riwretdist"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>
																<a href="#" class="cetak" id="cetak"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Print"></i></a>
															</td>'.								
														'</tr>';
													}
												}
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
	            	</div>
	            </form>
	            <br>
            </div>
            <div class="modal fade" id="riwretdist" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" style="width:800px">
					<div class="modal-content" >
						<div class="modal-header">
		    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		    				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Retur ke Distributor </h3>
		    			</div>
		    			<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-5 goright">Tanggal Retur :</label>
										<div class="col-md-5">
											<span id="tanggalreturdistributor"></span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-6 goright">Distributor :</label>
										<div class="col-md-5"><span id="penyediariwayatreturdist"></span></div>
									</div>
								</div>
							</div>

							<div class="row">							
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-5 goright">Nomor Retur :</label>
										<div class="col-md-5"><span id="nomorreturdistributor"></span></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-5 goright">Petugas Input :</label>
										<div class="col-md-6"><span id="petugasinputreturdistributor"></span></div>
									</div>
								</div>
							</div>

							<div class="row">							
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label1 col-md-5 goright">Keterangan :</label>
										<div class="col-md-5"><span id="ketreturdistributor"></span></div>
									</div>
								</div>
							</div>
							<hr/>
							<table class="table table-striped table-bordered table-hover" id="tabelHasilPenunjang">
								<thead>
									<tr class="info" >
										<th  style="text-align:center"> No.</th>
										<th  style="text-align:center"> Nama Obat </th>
										<th  style="text-align:center"> Quantity </th>
										<th  style="text-align:center"> Satuan </th>
										<th  style="text-align:center"> Merek </th>
										<th  style="text-align:center"> Stok Sisa </th>
										<th  style="text-align:center"> Tgl Kadaluarsa </th>
									</tr>
								</thead>
								<tbody id="tbodydetailreturdistributor">
									<tr>
										<td style="text-align:center" colspan="7">Tidak ada data</td>
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
            <br>
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
		            			<?php for ($i='B'; $i < 'Z' ; $i++) { 
									echo '<div class="round-button round-margin portfolio-item">';
			            				echo '<div class="round-button-tes round-button-circle" onClick="getObatAlphabet(&quot;'.$i.'&quot;)" style="cursor:pointer"><a class="round-button" >'.$i.'</a>';
			            				echo '</div>';
			            			echo '</div>';
								}?>						            		
		            		</div>
	            		</div>
            		</div>
            		<div class="form-group">
            			<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by</label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="filterOpname" name="namaObatOpname" placeholder="Nama Obat">						            			
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
								<input type="text" style="cursor:pointer;" id="tanggalacuan" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>">
							</div>
						</div>
            		</div>
				<br>

					<div class="portlet box red" >
						<div class="portlet-title">
							<!-- <label class="control-label col-md-3" style="font-size: 16pt; margin-left:-50px;">Daftar Obat</label> -->
						</div>
						<div class="portlet-body" style="margin: 0px -10px 0px -60px">
							
							<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tblInven1">
								<thead>
									<tr class="info" >
										<th  style="text-align:left" width="3%"> No </th>
										<th  style="text-align:left"> Opname Terakhir </th>
										<th  style="text-align:left"> Nama Obat </th>
										<th  style="text-align:left"> Merek </th>
										<th  style="text-align:left"> Tanggal Kadaluarsa </th>
										<th  style="text-align:left"> Stok di Sistem </th>
										<th  style="text-align:left"> Stok Fisik </th>
										<th  style="text-align:left"> Harga </th>
										<th  style="text-align:left"> Selisih </th>
										<th  style="text-align:left"> Jumlah </th>
										<th  style="text-align:left" width="10%"> Opname </th>

									</tr>
								</thead>
								<tbody id="tbody_opname">
									<?php
									if (isset($opname)) {
										$i = 0;
										foreach ($opname as $value) {
											if(empty($value['tgl_opname'])){
												$value['tgl_opname'] = $value['tanggal'];
											}
											if (empty($value['stok_fisik'])) {
												$value['stok_fisik'] = $value['total_stok'];
											}
											$tgl = strtotime($value['tgl_opname']);
											$date = date('d F Y', $tgl); 
											$tgl2 = strtotime($value['tgl_kadaluarsa']);
											$date2 = date('d F Y', $tgl2);
											echo '<tr>'.
												'<td>'.(++$i).'</td>'.
												'<td>'.$date.'</td>'.
												'<td>'.$value['nama'].'</td>'.
												'<td>'.$value['nama_merk'].'</td>'.
												'<td>'.$date2.'</td>'.
												'<td>'.$value['total_stok'].'</td>'.
												'<td><span class="stokfisikopname">'.$value['stok_fisik'].'</span></td>'.
												'<td>'.$value['harga_jual'].'</td>'.
												'<td>'.($value['stok_fisik'] - $value['total_stok']).'</td>'.
												'<td>'.(($value['stok_fisik'] - $value['total_stok']) * $value['harga_jual']).'</td>'.
												'<td style="text-align: center">
													<a href="#" class="edIventoriBatal" id="status"><i class="glyphicon glyphicon-floppy-remove" data-toggle="tooltip" data-placement="top" title="Batal"></i></a>
													<a href="#" class="edIventori" id="status"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Ubah"></i></a>
													<a href="#" class="editInventoriBut"><i class="glyphicon glyphicon-floppy-save" data-toggle="tooltip" data-placement="top" title="Simpan"></i></a>
													<input type="hidden" class="obat_dept_id" value="'.$value['obat_process'].'">
													<input type="hidden" class="obat_opname_id" value="'.$value['obat_opname_id'].'">
													<input type="hidden" class="obat_fisik_asli" value="'.$value['obat_opname_id'].'">
												</td>'.
											'</tr>';	
												
										}
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
            <div class="informasi" id="ibblo">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Obat</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form" method="post" action="<?php echo base_url()?>farmasi/homegudangobat/print_laporan_obat">
	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
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
						<div class="col-md-3 pull-right" >
							<button class="btn btn-info" type="submit" style="margin-left:10px">SIMPAN KE EXCEL (.xls)</button> 
						</div>
					</div>
				</form>
			</div>

            <div class="informasi" id="ibblok">
            	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Obat Kadaluarsa</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form" method="post" action="<?php echo base_url()?>farmasi/homegudangobat/print_laporan_kadaluarsa">
	        		<div class="form-group" style="margin-top:20px;">
						<div class="form-inline">
							<div class="radio-list">
								<div class="col-md-3" style="margin-left:120px;"> 
									<input type="radio"  name="hd" value="0" checked /><div style="float:right;margin-top:6px;margin-right:200px">Expired</div> 
								</div>
								<div class="col-md-4" style="width:200px; margin-left:-150px ;">	         		
									<input type="radio"  name="hd"  value="3"/><div style="float:right;margin-top:6px;margin-right:20px">Expired 3 Bulan</div>
								</div>	
								<div class="col-md-4" style="width:200px; margin-left:-10px ;">	         		
									<input type="radio"  name="hd"  value="6"/><div style="float:right;margin-top:6px;margin-right:20px">Expired 6 Bulan</div>
								</div>	
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-3 pull-right" >
								<button class="btn btn-info" type="submit">SIMPAN KE EXCEL (.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>

            <div class="informasi" id="ibblrpp">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Riwayat Persetujuan Permintaan</div>
	        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form" method="post" action="<?php echo base_url()?>farmasi/homegudangobat/print_laporan_permintaan">
	        		<?php echo '<script>'.validation_errors().'</script>'; ?>
	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
						<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
		        		<div class="col-md-3" style="margin-left:-20px;">
							<select class="form-control select" name="filterlaporandeptpermintaan">
								<option value="" selected>Semua Departemen</option>
								<?php  
									foreach ($all_dept as $value) {
										echo '<option value="'.$value['dept_id'].'">'.$value['nama_dept'].'</option>';
									}
								?>					
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
							<div class="col-md-3 pull-right" >
								<button class="btn btn-info ">SIMPAN KE EXCEL (.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>

            <div class="informasi" id="bblrrdp">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Riwayat Retur Departemen</div>
	        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form" method="post" action="<?php echo base_url()?>farmasi/homegudangobat/print_laporan_returdept">
	        		

	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
						<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
		        		<div class="col-md-3" style="margin-left:-20px;">
							<select class="form-control select" name="filterInv">
								<option value="" selected>Semua Departemen</option>
								<?php  
									foreach ($all_dept as $value) {
										echo '<option value="'.$value['dept_id'].'">'.$value['nama_dept'].'</option>';
									}
								?>					
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
							<div class="col-md-3 pull-right" >
								<button class="btn btn-info ">SIMPAN KE EXCEL (.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>

            <div class="informasi" id="iblrrds">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Riwayat Retur Distributor</div>
	        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form" method="post" action="<?php echo base_url()?>farmasi/homegudangobat/print_laporan_returdist">
	        		

	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
				
	        			<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>

						<div class="input-group" style="width: 300px; float:left;">	
						  	<input type="text" class="form-control" name="namadistributorlaporan" id="namadistributorlaporan" placeholder="Semua Distrobutor" data-toggle="modal" data-target="#distributorlaporan" readonly="" style="cursor: pointer">
						  	<input type="hidden" name="iddistributorlaporan" class="iddistributorlaporan" value="-1">
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
							<div class="col-md-3 pull-right" >
								<button class="btn btn-info ">SIMPAN KE EXCEL (.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>
	        	<div class="modal fade" id="distributorlaporan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
		        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        				<h3 class="modal-title" id="myModalLabel">Pilih Distributor</h3>
		        			</div>
		        			<div class="modal-body">
			        			<div class="form-group">
			        				<form method="post" class="form-horizontal" role='form' id="caridistributorlaporanobat" style="padding: 0px 10x;">
										<div class="form-group" >
											<div class="col-md-5">
												<input type="text" class="form-control" name="katakunci" id="katakuncidistlaporan" placeholder="Nama distributor"/>
											</div>
											<div class="col-md-2">
												<button type="submit" class="btn btn-info">Cari</button>
											</div>
											<br><br>	
										</div>
									</form>		
									<div style="margin-left:10px; margin-right:10px;"><hr></div>
									<div class="portlet-body" style="padding: 0px 10px;">
										<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="margin: 0px;" width="90%">
											<thead>
												<tr class="info">
													<th>Nama Distributor</th>
													<th width="10%">Pilih</th>
												</tr>
											</thead>
											<tbody id="tbodypenyediareturlaporan">
												<?php  
													echo '<tr>'.
											 			'<td class="namapenyediareturlaporan">Semua Distributor</td>'.
											 			'<td class="idpenyediareturlaporan" style="display:none">-1</td>'.
											 			'<td style="text-align:center"><a href="" class="inputpenyediareturlaporan"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i></a></td>'.
											 		'</tr>';
												?>
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

            <div class="informasi" id="ibblrso">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Riwayat Stok Opname</div>
	        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form" method="post" action="<?php echo base_url()?>farmasi/homegudangobat/print_laporan_stokopname">
	        		

	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
				
	        			<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
	        			<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
							    <input type="hidden" name="dept_id" value="21">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-3 pull-right">
								<button class="btn btn-info ">SIMPAN KE EXCEL (.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>

	        <div class="informasi" id="ibblsw">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Stok Warning</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form" method="post" action="<?php echo base_url()?>farmasi/homeapotikumum/print_laporan_stokwarning">
	        		

	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
						<div class="form-group">
							
							<div class="col-md-3" style="margin-left:110px;">
								<input type="hidden" name="dept_id" value="21">
								<button class="btn btn-info ">SIMPAN KE EXCEL (.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>

     
            <div class="informasi" id="ibblosot">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Stok Obat Terakhir</div>
	        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form" method="post" action="<?php echo base_url()?>farmasi/homeapotikumum/print_laporan_last_stok">
		        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
							<div class="form-group">
								<div class="col-md-3" style="margin-left:110px;">
									<input type="hidden" name="dept_id" value="21">
									<button class="btn btn-info ">SIMPAN KE EXCEL (.xls)</button> 
								</div>
							</div>
						</div>
	        		</form>
	        	
	        </div>
	        <br>
        </div>
	
	</div>

	<div class="modal fade" id="importmasal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
    			</div>
    			<div class="modal-body">
        			<div class="form-group">
        				<form method="POST" action="<?php echo base_url(); ?>farmasi/homegudangobat/import_masal" enctype="multipart/form-data">
							<div class="form-body">

								<div class="alert alert-info">
									Perhatian : <br>
									1. Halaman ini berguna untuk melakukan stok opname secara massal <br>
									2. Gunakan template yang sudah disediakan oleh sistem <br>
									3. Untuk obat-obat yang tidak dilakukan stok opname --> tidak perlu diisi <br>
									4. Jangan merubah tata letak dalam template yang diisi <br>					
									5. Stok otomatis tersesuaikan sejak tanggal stok opname yang dipilih <br>
									6. Isikan jumlah stok yang sebenarnya pada tanggal tersebut <br>
									7. Proses tidak dapat dibatalkan <br>
									8. Download template <a href="<?php echo base_url()?>farmasi/homegudangobat/download_template">Disini</a>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Nama Aktifitas  <span class="required">* </span></label>
											<div class="col-md-9">
												<input type="file" name="userfile" 
													class="form-control"
													value="Pilih File" required>
											</div>
										</div>
									</div>
								</div>					
							</div>
								<!--/row-->
								<div class="form-actions">
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">Proses Import</button>
											</div>
										</div>
									</div>
									<div class="col-md-6">
									</div>
								</div>
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

	<div class="modal fade" id="importmasaldetail" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
    			</div>
    			<div class="modal-body">
        			<div class="form-group">
        				<form method="POST" action="<?php echo base_url(); ?>farmasi/homegudangobat/import_masal_detail" enctype="multipart/form-data">
							<div class="form-body">

								<div class="alert alert-info">
									Perhatian : <br>
									1. Halaman ini berguna untuk melakukan stok opname secara massal <br>
									2. Gunakan template yang sudah disediakan oleh sistem <br>
									3. Untuk obat-obat yang tidak dilakukan stok opname --> tidak perlu diisi <br>
									4. Jangan merubah tata letak dalam template yang diisi <br>					
									5. Stok otomatis tersesuaikan sejak tanggal stok opname yang dipilih <br>
									6. Isikan jumlah stok yang sebenarnya pada tanggal tersebut <br>
									7. Proses tidak dapat dibatalkan <br>
									8. Download template <a href="<?php echo base_url()?>farmasi/homegudangobat/download_template_detail">Disini</a>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Nama Aktifitas  <span class="required">* </span></label>
											<div class="col-md-9">
												<input type="file" name="userfile" 
													class="form-control"
													value="Pilih File" required>
											</div>
										</div>
									</div>
								</div>					
							</div>
								<!--/row-->
								<div class="form-actions">
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">Proses Import</button>
											</div>
										</div>
									</div>
									<div class="col-md-6">
									</div>
								</div>
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

</div>

<script type="text/javascript">
	//Perencanaan Pengadaan Here
		$('#caripengadaanobat').submit(function(event){
			var item = {};
			item['p_item'] = $('#katakuncipengadaan').val();
			
			event.preventDefault();

			if($('#katakuncipengadaan').val()!=""){
				$.ajax({
					type:"POST",
					data: item,
					url:"<?php echo base_url()?>farmasi/homegudangobat/get_obat",
					success:function(data){
						//console.log(data);
						$('#tbody_pengadaan').empty();

	 					if(data.length>0){
							for(var i = 0; i<data.length; i++){
								var nama = data[i]['nama'],
									obat_id = data[i]['obat_id']
									merk = data[i]['nama_merk']
									satuan = data[i]['satuan'];

								$("#tbody_pengadaan").append(
									'<tr>'+
										'<td style="display:none">'+obat_id+'</td>'+
										'<td>'+nama+'</td>'+
										'<td>'+merk+'</td>'+
										'<td>'+satuan+'</td>'+
										'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getObat(&quot;'+obat_id+'&quot;,&quot;'+nama+'&quot;)"></i></td>'+
									'</tr>'
								);
							}
						}else{
							$('#tbody_pengadaan').empty();
							$('#tbody_pengadaan').append(
								'<tr>'+
						 			'<td colspan="4"><center>Data Paket Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
						}
					},
					error:function(data){
						console.log(data);
					}
				});
			}else{
				$('#tbody_pengadaan').empty();
				$('#tbody_pengadaan').append(
					'<tr>'+
			 			'<td colspan="4"><center>Cari Data Obat</center></td>'+
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
			//item_pengadaan['petugas_input'] = $('#pidAdaan').val();
			item_pengadaan['keterangan'] = $('#ketAdaan').val();

			//loop dari tabel
			var data = [];
		    $('#tbody_addpengadaan').find('tr').each(function (rowIndex, r) {
		        var cols = [];
		        $(this).find('td').each(function (colIndex, c) {
		            cols.push(c.textContent);
		        });
		        data.push(cols);
		    });

		    var d = [];
		    $('#tbody_addpengadaan').find('tr').each(function (rowIndex, r) {
		        var cols = [];
		        $(this).find('td>input[type="number"]').each(function (colIndex, c) {
		            cols.push(c.value);
		        });
		        d.push(cols);
		    });

		    var item = {};
		    for (var i = data.length - 1; i >= 0; i--) {
		    	var myData = {};
		    	myData['obat_id'] = data[i][7];
		    	myData['penyedia_id'] = data[i][8];
		    	myData['jumlah'] = d[i][0];
		    	myData['hps'] = data[i][4];
		    	myData['total'] = (Number(d[i][0]) * Number(data[i][4]));

		    	item[i] = myData;
		    };

		    //console.log(item);return false;

		    item_pengadaan['pengadaan'] = item;
		    //console.log(item_pengadaan);
		    if (item_pengadaan['pengadaan'][0] == null) {
		    	alert('tambah detail pengadaan pada tabel');
		    	return false;	
		    } 


			event.preventDefault();
			$.ajax({
				type:"POST",
				data:item_pengadaan,
				url:"<?php echo base_url()?>farmasi/homegudangobat/add_pengadaan",
				success:function(data){

					alert(data['message']);

					if (data['error'] == 'y') {
						$('#nmrAdaan').focus();
						return false;
					}
				
					var jml = $('#jml_pengadaan').val();
					var no = parseInt(jml)+1;
					var t = $('#tabelriwayatpengadaan').DataTable();
					var last = '<center><a href="#" class="view_detail_adaan" data-toggle="modal" data-target="#detailpengadaan">'+
								'<i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Detail"></i></a></center>'+
								'<input type="hidden" class="pengadaan_id" value="'+data['hasil']['pengadaan_id']+'">'
					t.row.add([
						no,
						data['hasil']['no_pengadaan'],
						data['hasil']['tanggal'],
						data['hasil']['nama_petugas'],
						data['hasil']['keterangan'],
						data['hasil']['status'],
						last,
						"daf"
						]).draw();
					$('#jml_pengadaan').val(no);

					$('#tbody_addpengadaan').empty();
					$('#nmrAdaan').val('');
					$('#ketAdaan').val('');
				},error:function(data){
					console.log(data);
					alert('no');
				}
			});

		});
		//tampil detail pengadaan
		$('#tbody_riwayat').on('click', 'tr td a.view_detail_adaan', function (e) {
			e.preventDefault();
			var cols = [];
	        $(this).closest('tr').find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });
	        var pengadaan_id = $(this).closest('tr').find('td .pengadaan_id').val();

			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>farmasi/homegudangobat/get_detail_rencana/" + pengadaan_id,
				success: function (data) {
					$('#nomor_obat_rencana').text(cols[1]);
					$('#tanggal_rencana').text(cols[2]);
					$('#petugas_rencana').text(cols[3]);
					$('#keterangan_rencana').text(cols[4]);
					$('#status_rencana').text(cols[5]);

					$('#tbody_detailpengadaan').empty();
					if (data.length > 0) {
						for (var i = data.length - 1; i >= 0; i--) {
							$('#tbody_detailpengadaan').append(
								'<tr>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td>'+data[i]['nama_penyedia']+'</td>'+
									'<td>'+data[i]['jumlah']+'</td>'+
									'<td>'+data[i]['satuan']+'</td>'+
									'<td>'+data[i]['hps']+'</td>'+
									'<td>'+data[i]['total']+'</td>'+
								'</tr>'
							);
						};
					} else{
						$('#tbody_detailpengadaan').append(
							'<tr>'+
								'<td colspan="6" style="text-align:center"> Tidak ada detail</td>'+
							'</tr>'
						);
					};
				},
				error: function (data) {
					
				}
			})
		})

		$('#resetaddpengadaan').on('click', function (e) {
			e.preventDefault();
			$('#tbody_addpengadaan').empty();
			$('#nmrAdaan').val('');
		})
	
	//End of perencanaan pengadaan

	//Stock Opname Here
	$(document).ready(function(){
		$("a.editInventoriBut").hide();
		$('a.edIventoriBatal').hide();

		$('#submit_filter_opname').submit(function(event){
			var item = {};
			item['kunci'] = $('#filterOpname').val();
			event.preventDefault();
			// alert('ok');
			// return false;
			$.ajax({
				type:'POST',
				data: item,
				url:'<?php echo base_url()?>farmasi/homegudangobat/get_opname_by_name',
				success:function(data){
					$('#tbody_opname').empty();
					var t = $('#tblInven1').DataTable();

					t.clear().draw();
						for(var i = 0; i<data.length; i++){
							if(data[i]['tgl_opname'] == null){
								data[i]['tgl_opname'] = data[i]['tanggal'];
							}

							if (data[i]['stok_fisik'] == null) {
								data[i]['stok_fisik'] = data[i]['total_stok'];
							}
							var tglopname = format_date(data[i]["tgl_opname"]);
							var tglKadaluarsa = format_date(data[i]["tgl_kadaluarsa"]);
							var last = '<center><a href="#" class="edIventoriBatal" id="status"><i class="glyphicon glyphicon-floppy-remove" data-toggle="tooltip" data-placement="top" title="Batal"></i></a>'+
									'<a href="#" class="edIventori" id="status"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Ubah"></i></a>'+
									'<a href="#" class="editInventoriBut"><i class="glyphicon glyphicon-floppy-save" data-toggle="tooltip" data-placement="top" title="Simpan"></i></a></center>'+
									'<input type="hidden" class="obat_dept_id" value="'+data[i]['obat_process']+'">'+
									'<input type="hidden" class="obat_opname_id" value="'+data[i]['obat_opname_id']+'">';
							var a = '<span class="stokfisikopname">'+data[i]['stok_fisik']+'</span>'
							t.row.add([
								(Number(i)+1),
								tglopname,
								data[i]['nama'],
								data[i]['nama_merk'],
								tglKadaluarsa,
								data[i]['total_stok'],
								a,
								data[i]['harga_jual'],
								(data[i]['stok_fisik'] - data[i]['total_stok']),
								((data[i]['stok_fisik'] - data[i]['total_stok']) * data[i]['harga_jual']),
								last
							]).draw();
						}
						t.on( 'order.dt search.dt', function () {
					        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
					            cell.innerHTML = i+1;
					        } );
					    } ).draw();
						$("a.editInventoriBut").hide();
						$('a.edIventoriBatal').hide();
					
				}
			});
		});
		//end of stock opname
	});

	//function stock opname
	function getObatAlphabet(alpha){
		
		$.ajax({
			type:"POST",
			url:"<?php echo base_url()?>farmasi/homegudangobat/get_alpha_obat_opname/"+alpha,
			success:function(data){
			$('#tbody_opname').empty();
				var t = $('#tblInven1').DataTable();

				t.clear().draw();
				for(var i = 0; i<data.length; i++){
					if(data[i]['tgl_opname'] == null){
						data[i]['tgl_opname'] = data[i]['tanggal'];
					}

					if (data[i]['stok_fisik'] == null) {
						data[i]['stok_fisik'] = data[i]['total_stok'];
					}
					var tglopname = format_date(data[i]["tgl_opname"]);
					var tglKadaluarsa = format_date(data[i]["tgl_kadaluarsa"]);
					var last = '<center><a href="#" class="edIventoriBatal" id="status"><i class="glyphicon glyphicon-floppy-remove" data-toggle="tooltip" data-placement="top" title="Batal"></i></a>'+
							'<a href="#" class="edIventori" id="status"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Ubah"></i></a>'+
							'<a href="#" class="editInventoriBut"><i class="glyphicon glyphicon-floppy-save" data-toggle="tooltip" data-placement="top" title="Simpan"></i></a></center>'+
							'<input type="hidden" class="obat_dept_id" value="'+data[i]['obat_process']+'">'+
							'<input type="hidden" class="obat_opname_id" value="'+data[i]['obat_opname_id']+'">';
					var a = '<span class="stokfisikopname">'+data[i]['stok_fisik']+'</span>'
					t.row.add([
						(Number(i)+1),
						tglopname,
						data[i]['nama'],
						data[i]['nama_merk'],
						tglKadaluarsa,
						data[i]['total_stok'],
						a,
						data[i]['harga_jual'],
						(data[i]['stok_fisik'] - data[i]['total_stok']),
						((data[i]['stok_fisik'] - data[i]['total_stok']) * data[i]['harga_jual']),
						last
					]).draw();
				}
				$("a.editInventoriBut").hide();
				$('a.edIventoriBatal').hide();
					
			}
		});
	}

	function getObat(id, nama){
		//<a href="#" class="returQty editableform editable-click" data-type="text" data-pk="1" data-original-title="Edit Quantity">1</a>
		$.ajax({
			type:"POST",
			url:"<?php echo base_url()?>farmasi/homegudangobat/get_obat_detail_pengadaan/"+id,
			success:function(data){
				$('#katakuncipengadaan').val('');
				$('#katakuncipengadaan').focus();
				$('#tbody_addpengadaan').append(
					'<tr>'+
						'<td>'+data[0]['nama']+'</td>'+
						'<td>'+data[0]['nama_penyedia']+'</td>'+
						'<td><input type="number" class="qtypengadaan form-control numberrequired"></td>'+
						'<td>'+data[0]['satuan']+'</td>'+
						'<td class="hpspengadaan">'+data[0]['hps']+'</td>'+
						'<td class="totalpengadaan">0</td>'+
						'<td style="text-align:center;"><a href="#" class="removeRow" ><i class="glyphicon glyphicon-remove"></i></a></td>'+
						'<td style="display:none;">'+data[0]['obat_id']+'</td>'+
						'<td style="display:none;">'+data[0]['penyedia_id']+'</td>'+
					'</tr>'
				);
				$(".returQty").editable();
			}
		});

		$('#tbody_addpengadaan').on('change', 'tr td .qtypengadaan', function (e) {
			var val = $(this).val();
			var a = $(this).closest('tr').find('td.hpspengadaan').text();
			$(this).closest('tr').find('td.totalpengadaan').html((Number(val) * Number(a)));
		})
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

											