
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
	    <li><a href="#resep" data-toggle="tab">Jasa Resep</a></li>
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
	        				<form role="form" class="form-horizontal" method="post" id="cariobatdetail">
								<div class="form-group">
									<div class="col-md-4" style="margin-left:20px;">
										<input type="text" class="form-control" name="katakunci" id="katakunciobatapum" placeholder="Nama obat"/>
									</div>
									<div class="col-md-2">
										<button type="submit" class="btn btn-info">Cari</button>
									</div>
									<br><br>	
								</div>		
							</form>
							<div style="margin-left:20px; margin-right:20px;"><hr></div>
							<div class="portlet-body" style="margin: 0px 10px 0px 10px">
								<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
									<thead>
										<tr class="warning">
											<td>Nama Obat</td>
											<td width="10%">Pilih</td>
										</tr>
									</thead>
									<tbody id="tbodycariobat">
										<tr>
											<td style="text-align:center; cursor:pointer;" colspan="2">Cari data obat</td>
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

        <div class="tab-pane active" id="mo">
			<div class="dropdown" id="btnBawahMasObat" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Tambah Obat</div>
	            <div id="btnBawahMasObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoMasObat">
	        	<form class="form-horizontal" role="form" id="ubahstokminimal" method="post">
					<div class="form-group">
	            		<label class="control-label col-md-2">Nama Obat </label>
	            		<div class="col-md-2">
							<input type="text" class="form-control" id="nmObatApoUmum" name="nmObatApoUmum" placeholder="Nama Obat" disabled="" />
							<input type="hidden" id="edit_obat_id">
						</div>
						<div class="col-md-2">
						</div>
						<label class="control-label col-md-2" >Harga Dasar </label>
						<div class="col-md-2">
							<input type="number" class="form-control" id="hgDasarObatApoUmum" name="hgDasarObatApoUmum" placeholder="Harga Dasar" disabled="" />
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Satuan Obat </label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectSatObatApoUmum" id="selectSatObatApoUmum" disabled="">
								<option value="" selected>Pilih</option>
								<?php if (!empty($satuan_obat)) {
		         					foreach ($satuan_obat as $value) {
		         						echo '<option value="'.$value['satuan_id'].'">'.$value['satuan'].'</option>';	
		         					}
		         				} ?>
							</select>
						</div>
						<div class="col-md-2">
						</div>
						<label class="control-label col-md-2" >HPS </label>
						<div class="col-md-2">
							<input type="number" class="form-control" id="hpsApoUmum" name="hpsApoUmum" placeholder="HPS" disabled="" />
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Jenis Obat </label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectJnsObatApoUmum" id="selectJnsObatApoUmum" disabled="">
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
							<div class="input-group">
							<input type="number" maxlength="3" class="form-control" id="marginApoUmum" name="marginApoUmum" placeholder="margin" disabled=""  />
							<span class="input-group-addon">%</span>
							</div>
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Merek </label>
						<div class="col-md-2">	         		
							<input type="text" class="form-control" id="nmMerkApoUmum" name="nmMerkApoUmum" placeholder="Merek" data-toggle="modal" data-target="#mdMerk" disabled="" />
						</div>
						<div class="col-md-2">
						</div>
						<label class="control-label col-md-2" >Harga Jual </label>
						<div class="col-md-2">
							<input type="text" class="form-control" id="hargaJualApoUmum" name="hargaJualApoUmum" placeholder="Harga Jual" disabled="" />
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Stok Min </label>
						<div class="col-md-2">	         		
							<input type="number" class="form-control" id="stokMinApoUmum" name="stokMinApoUmum" placeholder="Stok Minimal" />
						</div>
						<div class="col-md-2">
						</div>

						<label class="control-label col-md-2" > Generik </label>
						<div class="col-md-2">
		         			<select class="form-control select" name="selectGenerikApoUmum" id="selectGenerikApoUmum" disabled="">
								<option value="" selected>Pilih</option>
								<option value="generik" >Generik</option>
								<option value="non-generik">Non-generik</option>
							</select>
						</div>		
					</div>

					<div class="form-group">
						<label class="control-label col-md-2" >Penyedia </label>
						<div class="col-md-2">
		         			<input type="text" class="form-control" id="pedObatDetApoUmum"  placeholder="Penyedia Obat"  disabled="" />	
						</div>
						<div class="col-md-2">
						</div>
						<div class="form-inline">
							<div class="radio-list">
								<div class="col-md-2" > 
									<input type="radio"  name="hd" value="1" data-title="Hide"  checked disabled /><div style="float:right;margin-top:6px;margin-right:123px">Hide</div> 
								</div>
								<div class="col-md-3">	         		
									<input type="radio"  name="hd"  value="0" data-title="Unhide"  disabled /><div style="float:right;margin-top:6px;margin-right:213px">Unhide</div>
								</div>	
							</div>
						</div>
					</div>

					<div class="form-group" style="margin-top:50px;">
						<div class="col-md-8"></div>
						<div class="col-md-1">
							<button class="btn btn-danger" type="button" id="btnbatalobat" style="margin-left:35px;">BATAL</button>
						</div>
						<div class="col-md-3"> 				 
							<button class="btn btn-warning" type="reset" style="margin-left:10px" id="resetobat">RESET</button>
							<button class="btn btn-success" style="margin-left:10px" type="button" id="smpanObat">SIMPAN</button>
							<button class="btn btn-success" style="margin-left:10px" type="submit" id="ubahobat">UBAH</button>
						</div>
					</div>
				</form>
						
					<br>
					<hr class="garis" style="margin-left:-60px;">
					<br>

					<div class="form-group">
						<form class="form-horizontal" role="form" method="post" id="filter_obat">
		            		<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by</label>
							<div class="col-md-2" style="margin-left:-130px">	         		
								<input type="text" class="form-control" id="nmObatBwhApoUmum" name="nmObatBwhApoUmum" placeholder="Nama Obat" />
							</div>
							<div class="col-md-2" style="margin-left:-15px">
								<select class="form-control select" name="selectSatObatApoUmum" id="selectSatObatApoUmumfilter" style="width:100px">
									<option value="" selected>Pilih</option>
									<?php if (!empty($satuan_obat)) {
			         					foreach ($satuan_obat as $value) {
			         						echo '<option value="'.$value['satuan_id'].'">'.$value['satuan'].'</option>';	
			         					}
			         				} ?>
								</select>
							</div>
							<div class="col-md-2" style="margin-left:-100px">
								<select class="form-control select" name="selectGenObatApoUmum" id="selectGenObatApoUmum">
									<option value="" selected>Pilih</option>
									<option value="generik">Generik</option>
									<option value="non-generik">Non Generik</option>
								</select>
							</div>
							<div class="col-md-2" style="margin-left:-10px">
								<button type="submit" class="btn btn-warning">Filter</button>
							</div>

							<div class="col-md-2" style="margin-left:-140px">
								<button type="button" class="btn btn-danger" id="filter_stok">Stok Warning</button>
							</div>
						</form>
					</div>
					<div class="portlet box red" style="margin-left:-50px; margin-right:20px; margin-bottom:40px;">
						<div class="portlet-title">
						</div>
						<div class="portlet-body" style="margin: 0px 10px 0px 10px">
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
								<tbody>
									
								</tbody>
							</table>
						</div>
					</div>
					<div class="form-group">
						<div class="pull-right" style="margin-right:40px;">
						</div>
					</div>				
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
							<input type="text" class="form-control" id="nmDetObatApoUmum" name="nmDetObatApoUmum" placeholder="Nama Obat" data-toggle="modal" data-target="#nmDetObat" readonly="" style="cursor:pointer" />
							<input type="hidden" id="selected_obat_id">
							<input type="hidden" id="selected_obat_detail_id">
							<input type="hidden" id="selected_obat_dept_id">
						</div>
						<div class="col-md-1">
						</div>
						<label class="control-label col-md-2" >Tahun Pengadaan
						</label>
						<div class="col-md-2">
							<select class="form-control select" name="selectTahObatApoUmum" id="selectTahObatApoUmum" disabled="">
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
		         			<input type="text" class="form-control" id="satObatDetApoUmum" placeholder="Satuan Obat" disabled />	
						</div>
						<div class="col-md-1">
						</div>
						<label class="control-label col-md-2" >Sumber Dana </label>
						<div class="col-md-2">
							<select class="form-control select" name="selectSumDanaObatApoUmum" id="selectSumDanaObatApoUmum" disabled="">
								<option value="" selected>Pilih</option>
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
		         			<input type="text" class="form-control" id="merkObatDetApoUmum" placeholder="Merek Obat" disabled />	
						</div>
						<div class="col-md-1">
						</div>

						<label class="control-label col-md-2" >Jumlah
						</label>
						<div class="col-md-2" >
		         		<input type="text" class="form-control" id="jmlDetObatApoUmum" placeholder="Jumlah" disabled="" />	
						</div>
					</div>

					<div class="form-group">
	            		<label class="control-label col-md-2" >Tanggal Kadaluarsa </label>
						<div class="col-md-3">
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" id="tglkadalarsafak" class="form-control calder" disabled="" sdata-date-format="dd/mm/yyyy" data-provide="datepicker">
							</div>
						</div>
						<div class="col-md-1">
						</div>
						<label class="control-label col-md-2" >No Batch 
						</label>
						<div class="col-md-2">
		         			<input type="text" class="form-control" id="noBatchDetObatApoUmum" disabled="" placeholder="No Batch"  />	
						</div>
					</div>

					<div class="form-group" style="margin-top:30px;">
						<!-- <div class="col-md-8"></div>
						<div class="col-md-1">
							<button class="btn btn-danger" id="btnBatalDetObat" style="margin-left:35px;">BATAL</button>
						</div>
						<div class="col-md-3"> 				 
							<button class="btn btn-warning" style="margin-left:10px" id="resetDetObat">RESET</button>
							<button class="btn btn-success" style="margin-left:10px" id="simpanDetObat">SIMPAN</button>
							<button type="submit" class="btn btn-success" style="margin-left:10px" id="editDetObat">UBAH</button>
						</div> -->
					</div>

					<br>
					<hr class="garis" style="margin-left:-60px;">
					<br>
					
					
					<div class="portlet box red" style="margin-left:-50px; margin-right:20px; margin-bottom:40px;">
						<div class="portlet-title">
						</div>
						<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						
							<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="tabeldetailobat">
								<thead>
									<tr class="info" >
										<th  style="text-align:left"> No. </th>
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
							<label class="control-label col-md-1" style="width:100px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter</label>
							<div class="col-md-2">
								<select class="form-control select" name="filterInv" id="filterInv">
									<option value="" selected="selected">Pilih</option>
									<option value="Nama">Nama Obat</option>
									<option value="Jenis">Jenis Obat</option>
									<option value="Merek">Merek</option>
									<option value="Sumber">Sumber Dana</option>
									<option value="Penyedia">Penyedia</option>	
								</select>	
							</div>
							<div class="col-md-2" style="margin-left:-10px;">
								<input type="text" class="form-control" id="filterBy" name="filterBy" placeholder="filter"/>
							</div>
						
							<div class="col-md-1">
								<select class="form-control select" name="filterSat" id="filterSat" style="margin-left:-15px;width:120px">
									<option value="" selected="selected">Pilih</option>
									<?php if (!empty($satuan_obat)) {
			         					foreach ($satuan_obat as $value) {
			         						echo '<option value="'.$value['satuan_id'].'">'.$value['satuan'].'</option>';	
			         					}
			         				} ?>			
								</select>
							</div>
							<div class="col-md-1" >
								<select class="form-control select" name="filterGen" id="filterGen" style="margin-left:13px; width:150px">
									<option value="" selected="selected">Pilih</option>;
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

				<div class="portlet box red" style="margin-left:-40px; margin-right:20px; ">
					<div class="portlet-title">
					</div>
					<!-- kasih pagination -->
					<div class="portlet-body" style="margin: 0px 10px 0px -10px">
						
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
							<tbody>									
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
												<tr>
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
								<button class="btn btn-warning" type="submit">RESET</button>
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
            	<form class="form-horizontal" role="form" id="formsubmitpermintaan" method="post">
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
								<input type="text" style="cursor:pointer;" id="tanggal_permintaan" class="form-control" data-date-format="dd/mm/yyyy H:i" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i");?>">
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
											<th  style="text-align:left"> Nama Obat </th>
											<th  style="text-align:left"> Tanggal Kadaluarsa </th>
											<th  style="text-align:left"> Satuan </th>
											<th  style="text-align:left"> Merek </th>
											<th  style="text-align:left"> Stok Unit </th>
											<th  style="text-align:left"> Stok Gudang </th>
											<th  style="text-align:left"> Jumlah Diminta </th>
											<th  style="text-align:left"> Action </th>			
										</tr>
									</thead>
									<tbody  id="addinputMintaApoUm" class="addKosong apo">
											
									</tbody>
								</table>

								<div class="form-group pull-right" style="margin-right:0px;">
									<button type="reset" class="btn btn-success" id="resetpermintaan">RESET</button>
									<button type="submit" class="btn btn-success">SIMPAN</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>	    
			<br>
			<div class="modal fade" id="modalMintaApoUm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" style="width:900px;">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
	        			</div>
	        			<div class="modal-body">
		        			<div class="form-group">
		        				<form class="form-horizontal" method="post" role="form" id="formsearchpermintaan">
									<div class="form-group">	
										<div class="col-md-5" style="margin-left:15px;">
											<input type="text" class="form-control" name="katakunci" id="katakuncipermintaan" placeholder="Nama Obat"/>
										</div>
										<div class="col-md-2">
											<button type="submit" class="btn btn-info">Cari</button>
										</div>
										<br><br>	
									</div>		
								</form>
								<div style="margin-left:20px; margin-right:20px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 10px 0px 10px">
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:98%;font-size:99%">
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

        <div class="tab-pane" id="returbarang"> 
        	<div class="dropdown" id="btnBawahRetDepartemen" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Retur Obat Gudang</div>
	            <div id="btnBawahRetDepartemen" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>

           <div class="informasi" id="infoRetDepartemen">
            	<form class="form-horizontal" role="form" id="returobatkegudang" method="post">
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
								<input type="text" style="cursor:pointer;" class="form-control" id="waktureturunit" data-date-format="dd/mm/yyyy H:i" data-provide="datepicker" value="<?php echo date("d/m/Y H:i");?>">
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
										<th  style="text-align:left"> Nama Obat </th>
										<th  style="text-align:left"> Tanggal kadaluarsa </th>
										<th  style="text-align:left"> Satuan </th>
										<th  style="text-align:left"> Merek </th>
										<th  style="text-align:left"> Stok Sisa </th>
										<th  style="text-align:left"> Jumlah Diretur </th>
										<th  style="text-align:left"> Action </th>			
									</tr>
								</thead>
								<tbody id="addinputRetApoUm" class="returObat addKosong">
										
								</tbody>
							</table>

							<div class="form-group pull-right" style="margin-right:0px;">
								<button type="reset" class="btn btn-warning" id="batalreturunit">RESET</button>
								<button type="submit" class="btn btn-success">SIMPAN</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal fade" id="modalRetApoUm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" style="width:900px;">
					<div class="modal-content">
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
	        			</div>
	        			<div class="modal-body">

		        			<div class="form-group">
		        				<form method="post" role="form" class="form-horizontal" id="formsearchobatretur">
									<div class="form-group">	
										<div class="col-md-3" style="margin-left:35px;">
											<input type="text" class="form-control" name="katakunci" id="katakunciretur" placeholder="Nama obat"/>
										</div>
										<div class="col-md-2">
											<button type="submit" class="btn btn-info">Cari</button>
										</div>
										<br><br>	
									</div>		
								</form>
								<div style="margin-left:20px; margin-right:20px;"><hr></div>
								<div class="portlet-body" style="margin: 0px 10px 0px 10px">
									<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:99%;">
										<thead>
											<tr class="warning">
												<td>Nama Obat</td>
												<td>Satuan</td>
												<td>Merek</td>
												<td>Stok Unit</td>
												<td>Tgl Kadaluarsa</td>
												<td width="10%">Pilih</td>
											</tr>
										</thead>
										<tbody id="tbodyreturunit">
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
		
		<div class="tab-pane" id="opname">
			<div class="dropdown" id="btnBawahStokOpname" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Stok Opname</div>
	            <div id="btnBawahStokOpname" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="informasi" id="infoStokOpname">
            	<form class="form-horizontal" role="form" style="margin-left:20px;margin-right:40px;" id="submit_filter_opname" method="POST">
            		<div class="form-group" id="rowfix2">
	            		<div class='row offer-pg-cont'>
							<div class='offer-pg'>
		            			<div class="round-button portfolio-item" style="margin-left: 5px;">
		            				<div class="round-button-tes round-button-circle round-button-active" style="cursor:pointer"><a class="round-button" >A</a>
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
							<input type="text" class="form-control" id="filterOpname" name="namaObatOpnameApoUmum" placeholder="Nama Obat">						            			
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
								<input type="text" style="cursor:pointer;" id="tanggalacuan" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
            			</div>
            		</div>
				<br>

					<div class="portlet box red" >
						<div class="portlet-title">
						</div>
						<div class="portlet-body" style="margin: 0px -10px 0px -60px">
							
							<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tblInven1">
								<thead>
									<tr class="info" >
										
										<th  style="text-align:left" width="3%"> No. </th>
										<th  style="text-align:left"> Opname Terakhir </th>
										<th  style="text-align:left"> Nama Obat </th>
										<th  style="text-align:left"> Merek </th>
										<th  style="text-align:left"> Tanggal Kadaluarsa </th>
										<th  style="text-align:left"> Stok Barang </th>
										<th  style="text-align:left"> Stok Fisik </th>
										<th  style="text-align:left"> Harga </th>
										<th  style="text-align:left"> Selisih </th>
										<th  style="text-align:left"> Jumlah </th>
										<th  style="text-align:left" width="10%"> Opname </th>

									</tr>
								</thead>
								<tbody>
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
													<a href="#" class="edIvenBatal" id="status"><i class="glyphicon glyphicon-floppy-remove" data-toggle="tooltip" data-placement="top" title="Batal"></i></a>
													<a href="#" class="edIven" id="status"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Ubah"></i></a>
													<a href="#" class="editInvenBut"><i class="glyphicon glyphicon-floppy-save" data-toggle="tooltip" data-placement="top" title="Simpan"></i></a>
													<input type="hidden" class="obat_dept_id" value="'.$value['obat_process'].'">
													<input type="hidden" class="obat_opname_id" value="'.$value['obat_opname_id'].'">
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

		<div class="tab-pane" id="resep">
			<div class="dropdown" id="">
	            <div id="titleInformasi">Perhitungan Resep</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
	            <form class="form-horizontal" role="form" id="submitfilterhitungresep" method="post">
				    <div class="form-group">
						<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Periode Penjualan :</label>
						<div class="col-md-3" style="margin-left:-15px">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" id="jasa_start" name="start" data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" id="jasa_end" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" />
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2"> <i class="glyphicon glyphicon-filter"></i>&nbsp;Cara Bayar</label>
						<div class="input-group col-md-2">
							<select class="form-control select" name="carabayar" id="carabayar">
								<option value="" selected>Pilih</option>
								<option value="BPJS">BPJS</option>	
								<option value="Ansuransi">Ansuransi</option>		
								<option value="Gratis">Gratis</option>	
								<option value="Tunjangan">Tunjangan</option>					
							</select>
						</div>	
					</div>

					<div class="form-group">
						<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp; Unit </label>
						<div class="input-group col-md-2">
							<input type="text" class="form-control" autocomplete="off" spellcheck="false" name="unit" id="unit" placeholder="Search unit">
							<input type="hidden" id="unit_id">
						</div>	
					</div>

			    	<div class="form-group">
						<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp; Nama Paramedis </label>
						<div class="input-group col-md-2">
							<input type="text"  class="form-control" autocomplete="off" spellcheck="false" placeholder="Search Paramedis" data-toggle="modal" data-target="#searchParamedis" id="paramedis">
							<input type="hidden" id="paramedis_id">
						</div>

						<div class="pull-right" >
							<div class="col-md-3" style="margin-right:20px">
		        				<button class="btn btn-warning" type="reset">Reset</button>
		        			</div>
		        			<div class="col-md-3">
		        				<button class="btn btn-success" type="submit">Filter</button>
		        			</div>
	        			</div>
					</div>
				</form>
		    </div>
		    <hr class="garis">
			<div class="portlet-body" style="margin: 0px 10px 0px 10px">
				<table class="table table-striped table-bordered table-hover tableDTUtama" id="tblPerhitunganResep">
					<thead>
						<tr class="info">
							<th width="20">No.</th>
							<th>Tanggal Penjualan</th>
							<th>Unit</th>
							<th>Cara Bayar</th>
							<th>No. Resep</th>
							<th>Nama Pasien</th>
							<th>Dokter</th>
							<th>Manajemen</th>
							<th>Fee Dokter</th>
							<th>Remunisasi</th>
							<th>Farmasi</th>
						</tr>
					</thead>
					<tbody id="tbody_resep">
						<?php  
							if (isset($jasa_resep)) {
								$i = 0;
								foreach ($jasa_resep as $value) {

									echo '<tr>
											<td width="20">'.(++$i).'</td>
											<td>'.DateTime::createFromFormat('Y-m-d H:i:s',$value['waktu_penjualan'])->format('d F Y H:i:s').'</td>
											<td>'.$value['dept_resep'].'</td>
											<td>'.$value['cara_bayar'].'</td>
											<td>'.$value['resep_id'].'</td>
											<td>'.$value['nama'].'</td>
											<td>'.$value['nama_petugas'].'</td>
											<td>'.$value['management'].'</td>
											<td>'.$value['jasadokter'].'</td>
											<td>'.$value['remunisasi'].'</td>
											<td>'.$value['apotek'].'</td>
										</tr>';
								}
							}
						?>
					</tbody>
				</table>
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
							<select class="form-control select" name="filterInv" id="filterInvleft">
								<option selected>Pilih</option>
								<option value="Jenis Obat">Jenis Obat</option>
								<option value="Merek">Merek</option>
								<option value="Tahun Pengadaan">Tahun Pengadaan</option>
								<option value="Penyedia">Penyedia</option>					
							</select>	
						</div>
						<div class="col-md-2" style="margin-left:-15px; width:200px;" >
							<input type="text" class="form-control" id="filterbyleft" name="valfilter" placeholder="Value"/>
						</div>
					
						<div class="col-md-1">
							<select class="form-control select" name="filterSat" id="indicator" style="margin-left:-15px;width:80px">
								<option selected>Pilih</option>
								<option value="and" >And</option>
								<option value="or">Or</option>
							</select>
						</div>
						<div class="col-md-2" style="margin-left:-20px; width:200px;">
							<select class="form-control select" name="filterInv" id="filterInvright">
								<option selected>Pilih</option>
								<option value="Jenis Obat">Jenis Obat</option>
								<option value="Merek">Merek</option>
								<option value="Tahun Pengadaan">Tahun Pengadaan</option>
								<option value="Penyedia">Penyedia</option>					
							</select>	
						</div>
						<div class="col-md-2" style="margin-left:-15px; width:200px;">
							<input type="text" class="form-control" id="filterbyright" name="valfilter" placeholder="Value"/>
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
								<button class="btn btn-info " style="margin-left:10px">SIMPAN KE EXCELL (.xls)</button> 
							</div>
					</div>
				</form>
			</div>

			<div class="informasi" id="ibblprg">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Penulisan Resep Generik</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form" method="post" action="<?php echo base_url()?>farmasi/homeapotikumum/print_laporan_resep_generik">
	        		
	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
				
	        			<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>

						<div class="col-md-3">
							<select class="form-control select" name="filr" id="filr">
								<option selected>Pilih</option>
								<option value="and" >Pasien Rawat Inap</option>
								<option value="or">Pasien Rawat Jalan</option>
							</select>
						</div>
	        			<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
							    <input type="hidden" name="dept_id" value="<?php echo($my_dept_id) ?>">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-3 pull-right">
								<button class="btn btn-info" type="submit">SIMPAN KE EXCELL (.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>

            <div class="informasi" id="ibblok">
            	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Obat Kadaluarsa</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form" method="post" action="<?php echo base_url()?>farmasi/homeapotikumum/print_laporan_kadaluarsa">
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
									<input type="hidden" name="dept_id" value="<?php echo($my_dept_id) ?>">
								</div>	
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-3 pull-right" >
								<button class="btn btn-info ">SIMPAN KE EXCELL (.xls)</button> 
							</div>
						</div>
					</div>
					
	        	</form>
	        </div>

	        <div class="informasi" id="ibblrp">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Retur Pasien</div>
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
							<div class="col-md-3 pull-right">
								<button class="btn btn-info ">SIMPAN KE EXCELL (.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
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
							    <input type="hidden" name="dept_id" value="<?php echo($my_dept_id) ?>">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-3 pull-right">
								<button class="btn btn-info ">SIMPAN KE EXCELL (.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>

            <div class="informasi" id="ibblrpj">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Penjualan Obat</div>
	        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form" method="post" action="<?php echo base_url()?>farmasi/homeapotikumum/print_laporan_penjualan">
	        		

	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
				
	        			<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
	        			<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly value="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
							    <input type="hidden" name="dept_id" value="<?php echo($my_dept_id) ?>">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-3 pull-right">
								<button class="btn btn-info ">SIMPAN KE EXCELL (.xls)</button> 
							</div>
						</div>
					</div>
	        	</form>
	        </div>


	        <div class="informasi" id="ibblsw">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Stok Warning</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form" role="form" method="post" action="<?php echo base_url()?>farmasi/homeapotikumum/print_laporan_stokwarning">
	        		

	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
						<div class="form-group">
							
							<div class="col-md-2" style="margin-left:110px;">
								<input type="hidden" name="dept_id" value="<?php echo($my_dept_id) ?>">
								<button class="btn btn-info ">SIMPAN KE EXCELL (.xls)</button> 
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
								<div class="col-md-2" style="margin-left:110px;">
									<input type="hidden" name="dept_id" value="<?php echo($my_dept_id) ?>">
									<button class="btn btn-info ">SIMPAN KE EXCELL (.xls)</button> 
								</div>
							</div>
						</div>
	        		</form>
	        </div>


	        <br>
        </div>

</div>

				 
											