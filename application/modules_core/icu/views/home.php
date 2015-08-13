
<div class="title">
	ICU
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>icu/homeicu">Pasien ICU</a>
	 	
		</li>
</div>

<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#list" data-toggle="tab">List Pasien ICU</a></li>
	    <li><a href="#tagihan" data-toggle="tab">Tagihan</a></li>
	    <li><a href="#kamar" data-toggle="tab">Data Kamar</a></li>
	    <li><a href="#inacbg" data-toggle="tab">Input INA-CBG's</a></li>
	    <li><a href="#dipulangkan" data-toggle="tab">Pasien Dipulangkan</a></li>
	    <li><a href="#farmasi" data-toggle="tab">Farmasi</a></li>
	    <li><a href="#logistik" data-toggle="tab">Logistik</a></li>
	    <li><a href="#laporan" data-toggle="tab">Laporan</a></li>
	    <li><a href="#master" data-toggle="tab">Master</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">
	<div class="modal fade" id="pindahkan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<form id="submitpindahkan" method="POST" class="form-horizontal" role="form">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Pindah Pasien</h3>
        			</div>	
        			<div class="modal-body">
        				<div class="form-group">
							<label class="control-label col-md-3" >Tanggal Periksa </label>
							<div class="col-md-3">	
								<input date-date-format="dd/mm/yyyy H:i:s" value="<?php echo date("d/m/Y H:i:s");?>" type="text" class="form-control" name="date" id="inputdate" placeholder="Date Now" disabled/>
							</div>				
						</div>	
						
						<div class="form-group">
							<label class="control-label col-md-3">No. Rekam Medis</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="modal_no_rm" name="noRm" placeholder="No Rekam Medis" disabled>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Nama Pasien</label>
							<div class="col-md-7">
								<input type="text" id="modal_nama" class="form-control" name="nama" placeholder="Nama Pasien" disabled>
							</div>
						</div>
													
						<div class="form-group">
							<label class="control-label col-md-3">Cara Bayar</label>
							<div class="col-md-5">
								<select class="form-control select" name="carabayar" id="carabayar">
									<option value="" selected>--Pilih Cara Bayar--</option>
									<option value="Umum">Umum</option>
									<option value="BPJS" id="op-bpjs">BPJS</option>
									<option value="Jamkesmas" >Jamkesmas</option>
									<option value="Asuransi" id="op-asuransi">Asuransi</option>
									<option value="Kontrak" id="op-kontrak">Kontrak</option>
									<option value="Gratis" >Gratis</option>
									<option value="Lain-laun">Lain-lain</option>
								</select>												
							</div>
						</div>
						
						<div class="form-group" id="asuransi">
							<label class="control-label col-md-3">Nama Asuransi</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="namaAsuransi" name="namaAsuransi" placeholder="Nama Asuransi">
							</div>
						</div>
								
						<div class="form-group" id="kontrak">
							<label class="control-label col-md-3">Nama Perusahaan</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="namaPerusahaan" name="namaPerusahaan" placeholder="Nama Perusahaan">
							</div>
						</div>

						<div class="form-group" id="kelas">
							<label class="control-label col-md-3">Kelas Pelayanan </label>
							<div class="col-md-5">
								<select class="form-control select" name="kelasBpjs" id="kelas_pelayanan">
									<option value="" selected>--Pilih Kelas--</option>
									<option value="III">III</option>
									<option value="II">II</option>
									<option value="I"  >I</option>
									<option value="Utama" >Utama</option>
									<option value="VIP">VIP</option>
								</select>												
							</div>
						</div>
						
						<div class="form-group" id="noAsuransi">
							<label class="control-label col-md-3">Nomor Asuransi</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="nomorAsuransi" name="nomorAsuransi" placeholder="Nomor Asuransi">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Cara Masuk</label>
							<div class="col-md-5">
								<select class="form-control select" name="caramasuk" id="caramasuk">
									<option value="" selected>--Pilih Cara Masuk--</option>
									<option value="Datang sendiri">Datang sendiri</option>
									<option value="Puskesmas"  >Puskesmas</option>
									<option value="Rujuk RS lain" >Rujuk RS lain</option>
									<option value="Instansi" >Instansi</option>
									<option value="Kasus Polisi" >Kasus Polisi</option>
									<option value="Rujukan Dokter" >Rujukan Dokter</option>
									<option value="Lain-laun">Lain-lain</option>
								</select>												
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Detail Cara Masuk</label>
							<div class="col-md-7">
								<textarea class="form-control" name="detailMasuk" id="detailmasuk" placeholder="Detail cara masuk .."></textarea> 
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Departemen Tujuan</label>
							<div class="col-md-6">
								<select class="form-control select" id="deptTujuan">
									<option value="" selected>--Pilih Departement--</option>
									<?php foreach( $departemen as $dep ) { ?>
										<option value="<?php echo $dep['dept_id']; ?>" >
											<?php echo $dep['nama_dept']; ?>
										</option>
										<?php } ?>
								</select>												
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Pilih Kamar & Kelas Kamar</label>
							<div class="col-md-4">
								<input type="hidden" id="kamar_id" name="kamar_id">
								<input type="hidden" id="bed_id" name="bed_id">
								<input type="text" class="form-control" id="textkamar" placeholder="Search Kamar" data-toggle="modal" data-target="#pilkamar" readonly="" style="cursor:pointer">
							</div>
						</div>				

						<div class="form-group">
							<label class="control-label col-md-3">Adminitrasi</label>
							<div class="col-md-5">
								<select class="form-control select" name="caramasuk" id="adminitrasi">
									<option value="" selected>Pilih Adminitrasi</option>
									<option value="1">Pasien Lama</option><!-- tarif 3000 -->
									<option value="0">Pasien Baru</option><!-- tarif 5000 -->
									<option value="NULL" >Pasien Lanjutan</option>
								</select>												
							</div>
						</div>
      				</div>
      				<div class="modal-footer">
      					<input type="hidden" id="visit_id_pindah">
      					<input type="hidden" id="ri_id_pindah">
      					<input type="hidden" id="bed_id_lama">
 			       		<button type="submit" class="btn btn-success">Simpan</button>
			      	</div>
        		</div>
        	</div>
        </form>
   	</div>

    <div class="modal fade" id="pilkamar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-300px">
    	<div class="modal-dialog">
    		<div class="modal-content" style="width:900px">
    			<div class="modal-header">
    				<button type="button" class="close" id="close-kamar" data-dismiss="modal" aria-hidden="true">X</button>
    				<h3 class="modal-title" id="myModalLabel">Pilih Kamar</h3>
    			</div>	
    			<div class="modal-body">

    				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchPengirim">
							<thead>
								<tr class="success">
									<td>Kamar</td>
									<td>Kelas</td>
									<td>Jumlah Bed</td>
									<td>Terpakai</td>
									<td width="10%" style="text-align:center;">Pilih</td>
								</tr>
							</thead>
							<tbody id="tbody_kamar">
								
							</tbody>
						</table>												
					</div>
        			
  				</div>
  				<br>
  				<div class="modal-footer">
		       		<button type="button" id="modal-kamar" data-dismiss="modal" class="btn btn-warning">Cancel</button>	
		       	</div>
    		</div>
    	</div>        	
    </div>


	    <div class="tab-pane active" id="list">
	       <form class="form-horizontal" method="POST" id="search_submit">
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
			<hr class="garis">

			<div class="portlet box red">
				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
						<thead>
							<tr class="info">
								<th width="20">No.</th>
								<th> Nomor RM </th>
								<th> Nama Lengkap </th>
								<th> Jenis Kelamin </th>
								<th> Tanggal Lahir </th>
								<th> Alamat Tinggal </th>
								<th> Unit Pengirim </th>
								<th width="80"> Periksa</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i = 0;
								foreach ($pasien_icu as $data) {
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
												<input type="hidden" class="ri_id" value="'.$data['ri_id'].'">
												<input type="hidden" class="b_id" value="'.$data['bed_id'].'">
												<input type="hidden" class="v_id" value="'.$data['visit_id'].'">
												<a href="#" data-toggle="modal" class="pindahpasien" data-target="#pindahkan"><i class="fa fa-external-link" data-toggle="tooltip" data-placement="top" title="Pindah"></i></a>
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

        	<div class="dropdown">
	            <div id="titleInformasi">Data Kamar</div>
	        </div>

        	<div class="portlet-body" style="margin: 10px 10px 0px 10px">
				<table class="table table-striped table-bordered table-hover tableDT" id="tabelSearchPengirim">
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
							<td align="center">1</td>
							<td>Melati</td>
							<td>Kelas I</td>
							<td align="right">2</td>
							<td align="right">0</td>
							<td align="right">2</td>
							<td style="text-align:center;">
								<a href="#detkamar" data-toggle="modal">
								<i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="View"></i></a>
							</td>
						</tr>
						<tr>
							<td align="center">2</td>
							<td>Mawar</td>
							<td>Kelas III</td>
							<td align="right">2</td>
							<td align="right">1</td>
							<td align="right">1</td>
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
												<td align="center">1</td>
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
			       			</div>
			        		<br>
			        		<div class="modal-footer">
			 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
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
								<option value="" selected>Pilih</option>
								<option value="jenis">Jenis Obat</option>
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
										<th> Stok Gudang </th>
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
	    
	    <div class="tab-pane" id="laporan" style="margin-left:40px"> 

	        <div id="registerharian" style="width:100%">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Register Harian</div>
        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
        		
	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
				
	        			<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
	        			<div class="col-md-2" >
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

        	<div id="sensusharian" style="width:100%">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Sensus Harian</div>
        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
        		
	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
				
	        			<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
	        			<div class="col-md-2" >
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

			<div id="sensusbulanan">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Sensus Bulanan</div>
        		<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
        		
	        		<div class="form-group" style="margin-top:20px;margin-left:10px;">
				
	        			<label class="control-label col-md-2" style="width:120px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter by
						</label>
	        			<div class="col-md-2">
	        				<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;background-color:white;" class="form-control" name="startb" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
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
	        <br>
       
	        <br>
        </div>

        <div class="tab-pane" id="master"> 
	    	<div class="dropdown" id="">
	            <div id="titleInformasi">Jasa Pelayanan</div>
	        </div>
            <br>
            <div id="">
	            <div class="form-horizontal">
		            <div class="informasi">
			            <div class="form-group">
							<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Periode </label>
							<div class="col-md-3" style="margin-left:-15px">
								<div class="input-daterange input-group" id="datepicker">
								    <input type="text" style="cursor:pointer;background-color:white;" class="form-control" name="start" data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
								    <span class="input-group-addon">to</span>
								    <input type="text" style="cursor:pointer;background-color:white;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" />
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
							<label class="control-label col-md-2"><i class="glyphicon glyphicon-filter"></i>&nbsp;Paramedis</label>
							<div class="input-group col-md-2">
								<input type="text" class="form-control" style="cursor:pointer;background-color:white;" readonly id="nmpegawai" placeholder="Search Pegawai" data-toggle="modal" data-target="#searchPegawai">
							</div>

						</div>
					</div>
					<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
					<div style="margin-left:1190px">
						<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
							<button class="btn btn-warning">FILTER</button> 
						</span>
					</div>
					<br>

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
						       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
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
								<th>Tindakan</th>
								<th>Cara Bayar</th>
								<th>Paramedis</th>
								<th>Jumlah Tindakan</th>
								<th>Jasa Pelayanan</th>
								<th width="100">Fee Pelayanan</th>
								<th>Total Fee Pelayanan</th>
								<th width="80">Action</th>
							</tr>
						</thead>
						<tbody id="tbody_resep">
							<tr>
								<td style="text-align:center">1</td>
								<td style="text-align:center">12 Mei 1201</td>
								<td>Tindakan</td>
								<td>Cara Bayar</td>
								<td>Paramedis</td>
								<td style="text-align:right">1000</td>
								<td style="text-align:right">213</td>
								<td><input type="text" class="input-sm form-control jp" value="200" style="text-align:right" readonly></td>
								<td style="text-align:right">123</td>
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
	    </div>

        <div class="tab-pane" id="tagihan"> 
        	<form class="form-horizontal" method="POST" id="search_submit">
		       	<div class="search">
					<label class="control-label col-md-3">
						<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
					</label>
					<div class="col-md-4">		
						<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
			        </div>
			        <button type="submit" class="btn btn-danger">Cari</button>&nbsp;&nbsp;&nbsp;
			        <a href="<?php echo base_url() ?>icu/tambahtagihan" data-toggle="modal" class="btn btn-warning"> Tambah Invoice Baru</a>
				</div>	
			</form>
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
								<td align="center">1</td>
								<td>Bersalin</td>
								<td>1212121</td>
								<td>32323</td>	
								<td>123123</td>									
								<td>Selena</td>
								<td>Rumahnya</td>
								<td>Ansuransi</td>
								<td style="text-align:center">
									<a href="<?php echo base_url() ?>icu/tagihannonbpjs" ><i class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Tambah Tagihan"></i></a>
								</td>										
							</tr>
							<tr>
								<td align="center">2</td>
								<td>Bersalin</td>
								<td>1212121</td>
								<td>32323</td>	
								<td>123123</td>									
								<td>Jems</td>
								<td>Rumahnya</td>
								<td>BPJS</td>
								<td style="text-align:center">
									<a href="<?php echo base_url() ?>icu/tagihanbpjs" ><i class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Tambah Tagihan"></i></a>
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

		    <div class="portlet-body" style="margin: 10px 10px 0px 10px">
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

		<div class="tab-pane" id="inacbg">

			<div class="dropdown" id="btnBawahInventori" >
	            <div id="titleInformasi">Tabel INA-CBG's</div>
	        </div>
			<div class="portlet-body" style="margin: 10px 10px 0px 10px">
				<table class="table table-striped table-bordered table-hover tableDT" id="tableinacbgbpjs">
					<thead>
						<tr class="info">
							<th width="20">No.</th>
							<th>Nomor RM</th>
							<th>Nama Pasien</th>
							<th>Nomor BPJS</th>
							<th>Kelas BPJS</th>
							<th>Kelas Perawatan</th>
							<th width="80">Action</th>
						</tr>
					</thead>
					<tbody id="tbody_resep">
						<tr>
							<td width="20">No.</td>
							<td style="text-align:right">123</td>
							<td>Bejo</td>
							<td style="text-align:right">123123</td>
							<td>kelas 1</td>
							<td>Kelas 1</td>
							<td style="text-align:center">
								<a href="#editinacbgs" data-toggle="modal">
								<i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<br><br>
		</div>	   

		<div class="modal fade" id="editinacbgs" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<form class="form-horizontal" role="form" method="POST" id="">
				<div class="modal-dialog" style="width:930px;">
					<div class="modal-content">
						<form class="form-horizontal" role="form">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Edit Input INA-CBG's</h3>
				   			</div>
							<div class="modal-body">
								<table border="0" width="100%" class="tbladdinacbg">
									<tr>
										<td width="20">1.</td>
										<td width="30%">Kode Rumah Sakit</td>
										<td colspan="3"> <input type="text" class="form-control input-sm" name="koders" placeholder="Kode Rumah Sakit" style="width:190px;"> </td>
									</tr>
									<tr>
										<td width="20">2.</td>
										<td width="30%">Kelas Rumah Sakit</td>
										<td colspan="3"> <div class="input-group col-md-3">
												<select class="form-control input-sm" name="kelasrs" id="kelasrs">
													<option value="" selected>Pilih</option>
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
													<option value="D">D</option>							
												</select>
											</div>	
										</td>
									</tr>
									<tr>
										<td width="20">3.</td>
										<td width="30%">Nomor Rekam Medis</td>
										<td colspan="3"> <input type="text" class="form-control input-sm" name="nomorrm" placeholder="Nomor RM" style="width:190px;" readonly> </td>
									</tr>
									<tr>
										<td width="20">4.</td>
										<td width="30%">Kelas Perawatan</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="kelasperawatan" placeholder="III/II/I/Utama/VIP" style="width:190px;" readonly>  </td>
									</tr>
									<tr>
										<td width="20">5.</td>
										<td width="30%">Biaya Perawatan</td>
										<td colspan="3"> 
											<div class="input-group col-md-3">
												<span class="input-group-addon" id="basic-addon1">Rp.</span>
												<input type="text" class="form-control input-sm" name="biayaperawatan" readonly>
											</div>
										</td>
									</tr>
									<tr>
										<td width="20">6.</td>
										<td width="30%">Jenis Perawatan</td>
										<td colspan="3"> <input type="text" class="form-control input-sm" name="jenisperawatan" style="width:190px;" readonly> </td>
									</tr>
									<tr>
										<td width="20">7.</td>
										<td width="30%">Tanggal Masuk</td>
										<td colspan="3"> <input type="text" class="form-control input-sm" name="tanggalmasuk" style="width:190px;" readonly> </td>
									</tr>
									<tr>
										<td width="20">8.</td>
										<td width="30%">Tanggal Keluar</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="tanggalkeluar" style="width:190px;" readonly> </td>
									</tr>
									<tr>
										<td width="20">9.</td>
										<td width="30%">Lama Rawat</td>
										<td colspan="3">
											<div class="input-group col-md-3">
												<input type="text" class="form-control input-sm" name="lamarawat" readonly>
												<span class="input-group-addon" id="basic-addon1" style="width:70px;">hari</span>
											</div>
										</td>
									</tr>
									<tr>
										<td width="20">10.</td>
										<td width="30%">Tanggal Lahir</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="tgllahir" style="width:190px;" readonly> </td>
									</tr>
									<tr>
										<td width="20">11.</td>
										<td width="30%">Umur Tahun</td>
										<td colspan="3">
											<div class="input-group col-md-3">
												<input type="text" class="form-control input-sm" name="umurtahun" readonly>
												<span class="input-group-addon" id="basic-addon1" style="width:70px;">tahun</span>
											</div>
										</td>
									</tr>
									<tr>
										<td width="20">12.</td>
										<td width="30%">Umur Hari</td>
										<td colspan="3"> 
											<div class="input-group col-md-3">
												<input type="text" class="form-control input-sm" name="umurhari" readonly>
												<span class="input-group-addon" id="basic-addon1" style="width:70px;">hari</span>
											</div>
										</td>
									</tr>
									<tr>
										<td width="20">13.</td>
										<td width="30%">Jenis Kelamin </td>
										<td colspan="3"> <input type="text" class="form-control input-sm" name="jk" style="width:190px;" readonly> </td>
									</tr>
									<tr>
										<td width="20">14.</td>
										<td width="30%">Cara Pulang</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="carapulang" style="width:190px;" readonly>  </td>
									</tr>
									<tr>
										<td width="20">15.</td>
										<td width="30%">Berat Lahir</td>
										<td colspan="3"> <div class="input-group col-md-3">
												<input type="text" class="form-control input-sm" name="beratlahir">
												<span class="input-group-addon" id="basic-addon1" style="width:70px;">gram</span>
											</div>
										</td>
									</tr>
									<tr>
										<td width="20">16.</td>
										<td width="30%">Diagnosa Utama</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="diagnosautama" style="width:190px;" readonly></td>
									</tr>
									<tr>
										<td width="20">17.</td>
										<td width="30%">Diagnosa Sekunder</td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 1" data-toggle="modal" data-target="#searchDiagnosa" name="dns1" style="width:190px;"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 11" data-toggle="modal" data-target="#searchDiagnosa" name="dns11" style="width:190px;"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 21" data-toggle="modal" data-target="#searchDiagnosa" name="dns21" style="width:190px;"></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 2" data-toggle="modal" data-target="#searchDiagnosa" name="dns2" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 12" data-toggle="modal" data-target="#searchDiagnosa" name="dns12" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 22" data-toggle="modal" data-target="#searchDiagnosa" name="dns22" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 3" data-toggle="modal" data-target="#searchDiagnosa" name="dns3" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 13" data-toggle="modal" data-target="#searchDiagnosa" name="dns13" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 23" data-toggle="modal" data-target="#searchDiagnosa" name="dns23" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 4" data-toggle="modal" data-target="#searchDiagnosa" name="dns4" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 14" data-toggle="modal" data-target="#searchDiagnosa" name="dns14" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 24" data-toggle="modal" data-target="#searchDiagnosa" name="dns24" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 5" data-toggle="modal" data-target="#searchDiagnosa" name="dns1" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 15" data-toggle="modal" data-target="#searchDiagnosa" name="dns15" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 25" data-toggle="modal" data-target="#searchDiagnosa" name="dns25" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 6" data-toggle="modal" data-target="#searchDiagnosa" name="dns6" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 16" data-toggle="modal" data-target="#searchDiagnosa" name="dns16" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 26" data-toggle="modal" data-target="#searchDiagnosa" name="dns26" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 7" data-toggle="modal" data-target="#searchDiagnosa" name="dns7" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 17" data-toggle="modal" data-target="#searchDiagnosa" name="dns17" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 27" data-toggle="modal" data-target="#searchDiagnosa" name="dns27" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 8" data-toggle="modal" data-target="#searchDiagnosa" name="dns8" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 18" data-toggle="modal" data-target="#searchDiagnosa" name="dns18" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 28" data-toggle="modal" data-target="#searchDiagnosa" name="dns28" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 9" data-toggle="modal" data-target="#searchDiagnosa" name="dns9" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 19" data-toggle="modal" data-target="#searchDiagnosa" name="dns19" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 29" data-toggle="modal" data-target="#searchDiagnosa" name="dns29" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 10" data-toggle="modal" data-target="#searchDiagnosa" name="dns10" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Diagnosa Sekunder 20" data-toggle="modal" data-target="#searchDiagnosa" name="dns20" style="width:190px;" ></td>
										<td></td>
									</tr>
									<tr>
										<td colspan="5">&nbsp;</td>
									</tr>
									<tr>
										<td width="20">18.</td>
										<td width="30%">Prosedur/Tindakan ICD-9-CM</td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 1" data-toggle="modal" data-target="#searchICD9" name="dns1" style="width:190px;"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 11" data-toggle="modal" data-target="#searchICD9" name="dns11" style="width:190px;"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 21" data-toggle="modal" data-target="#searchICD9" name="dns21" style="width:190px;"></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 2" data-toggle="modal" data-target="#searchICD9" name="dns2" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 12" data-toggle="modal" data-target="#searchICD9" name="dns12" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 22" data-toggle="modal" data-target="#searchICD9" name="dns22" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 3" data-toggle="modal" data-target="#searchICD9" name="dns3" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 13" data-toggle="modal" data-target="#searchICD9" name="dns13" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 23" data-toggle="modal" data-target="#searchICD9" name="dns23" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 4" data-toggle="modal" data-target="#searchICD9" name="dns4" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 14" data-toggle="modal" data-target="#searchICD9" name="dns14" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 24" data-toggle="modal" data-target="#searchICD9" name="dns24" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 5" data-toggle="modal" data-target="#searchICD9" name="dns1" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 15" data-toggle="modal" data-target="#searchICD9" name="dns15" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 25" data-toggle="modal" data-target="#searchICD9" name="dns25" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 6" data-toggle="modal" data-target="#searchICD9" name="dns6" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 16" data-toggle="modal" data-target="#searchICD9" name="dns16" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 26" data-toggle="modal" data-target="#searchICD9" name="dns26" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 7" data-toggle="modal" data-target="#searchICD9" name="dns7" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 17" data-toggle="modal" data-target="#searchICD9" name="dns17" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 27" data-toggle="modal" data-target="#searchICD9" name="dns27" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 8" data-toggle="modal" data-target="#searchICD9" name="dns8" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 18" data-toggle="modal" data-target="#searchICD9" name="dns18" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 28" data-toggle="modal" data-target="#searchICD9" name="dns28" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 9" data-toggle="modal" data-target="#searchICD9" name="dns9" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 19" data-toggle="modal" data-target="#searchICD9" name="dns19" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 29" data-toggle="modal" data-target="#searchICD9" name="dns29" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%"></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 10" data-toggle="modal" data-target="#searchICD9" name="dns10" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 20" data-toggle="modal" data-target="#searchICD9" name="dns20" style="width:190px;" ></td>
										<td><input type="text" class="form-control input-sm" placeholder="Prosedur/tindakan 30" data-toggle="modal" data-target="#searchICD9" name="dns30" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20">19.</td>
										<td width="30%">Record ID/No. Urut dalam file tersebut</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="urutfile" style="width:190px;"></td>
									</tr>
									<tr>
										<td width="20">20.</td>
										<td width="30%">Kode CBG</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="kodecbg" style="width:190px;" readonly></td>
									</tr>
									<tr>
										<td width="20">21.</td>
										<td width="30%">Tarif CBG</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="tarifcbg" style="width:190px;" readonly></td>
									</tr>
									<tr>
										<td width="20">22.</td>
										<td width="30%">Deskripsi CBG</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="deskripsicbg" style="width:190px;" readonly></td>
									</tr>
									<tr>
										<td width="20">23.</td>
										<td width="30%">ALOS</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="alos" value="0" style="width:130px;" readonly></td>
									</tr>
									<tr>
										<td width="20">24.</td>
										<td width="30%">Nama Pasien</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="namapasien" style="width:190px;" readonly></td>
									</tr>
									<tr>
										<td width="20">25.</td>
										<td width="30%">Dokter Penanggung Jawab</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="dokterpj" placeholder="Search Dokter" data-toggle="modal" data-target="#searchDokter" style="width:190px;" ></td>
									</tr>
									<tr>
										<td width="20">26.</td>
										<td width="30%">Nomor SKP</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="noskp" style="width:190px;"></td>
									</tr>
									<tr>
										<td width="20"></td>
										<td width="30%">Nomor Kartu Peserta</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="nokartupeserta" style="width:190px;"></td>
									</tr>
									<tr>
										<td width="20">27.</td>
										<td width="30%">Surat Rujukan</td>
										<td colspan="3">
											<div class="input-group col-md-3">
												<select class="form-control input-sm" name="suratrujukan" id="suratrujukan">
													<option value="" selected>Pilih</option>
													<option value="ada">Ada</option>
													<option value="tanpa surat rujukan">Tanpa Surat Rujukan</option>
																			
												</select>
											</div>		
										</td>
									</tr>
									<tr>
										<td width="20">28.</td>
										<td width="30%">BHP (jika ada)</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="bhp" style="width:190px;"></td>
									</tr>
									<tr>
										<td width="20">29.</td>
										<td width="30%">Harga BHP</td>
										<td colspan="3">
											<div class="input-group col-md-3">
												<span class="input-group-addon" id="basic-addon1">Rp.</span>
												<input type="text" class="form-control input-sm" name="hargabhp">
											</div>
										</td>
									</tr>
									<tr>
										<td width="20">30.</td>
										<td width="30%">Severiti level 3</td>
										<td colspan="3">
											<div class="input-group col-md-3">
												<select class="form-control input-sm" name="severitilv3" id="severitilv3">
													<option value="" selected>Pilih</option>
													<option value="ada">Ada</option>
													<option value="tidak ada">Tidak Ada</option>
																			
												</select>
											</div>	
										</td>
									</tr>
									<tr>
										<td width="20">31.</td>
										<td width="30%">Tipe Tarif sesuai Rumah Sakit</td>
										<td colspan="3"><input type="text" class="form-control input-sm" name="tarifsesuairs" style="width:190px;"></td>
									</tr>

								</table>
		       				</div>
			        		<br>
			        		<div class="modal-footer">
			        			<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
			 			     	<button type="submit" class="btn btn-success" id="">Simpan</button>
						    </div>
						</form>
					</div>
				</div>
			</form>
		</div> 

		<div class="modal fade" id="searchDokter" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
	    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	    				<h3 class="modal-title" id="myModalLabel">Pilih Dokter</h3>
	    			</div>
	    			<div class="modal-body">
						<div class="form-group">	
							<div class="col-md-5">
								<input type="text" class="form-control" name="keyworddokter" id="keyworddokter" placeholder="Nama dokter"/>
							</div>
							<div class="col-md-2">
								<button type="button" class="btn btn-info">Cari</button>
							</div>	
						</div>	
						<br>	
						<div style="margin-left:5px; margin-right:5px;"><hr></div>
						<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover" id="tabelsearchdokter">
								<thead>
									<tr class="info">
										<th>Nama Dokter</th>
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
				       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
			      	</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="searchICD9" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
	    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	    				<h3 class="modal-title" id="myModalLabel">Pilih Tindakan</h3>
	    			</div>
	    			<div class="modal-body">
						<div class="form-group">	
							<div class="col-md-5">
								<input type="text" class="form-control" name="keyworddiagnosa" id="keyworddiagnosa" placeholder="Pilih Diagnosa"/>
							</div>
							<div class="col-md-2">
								<button type="button" class="btn btn-info">Cari</button>
							</div>	
						</div>	
						<br>	
						<div style="margin-left:5px; margin-right:5px;"><hr></div>
						<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover" id="tabelsearchdiagnosa">
								<thead>
									<tr class="info">
										<th width="20">No.</th>
										<th>Tindakan</th>
										<th>ICD-9-CM</th>
										<th width="10%">Pilih</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Suntik</td>
										<td>Eksklusi</td>
										<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
									</tr>
								</tbody>
							</table>												
						</div>
	    			</div>
	    			<div class="modal-footer">
				       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
			      	</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="searchDiagnosa" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
	    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	    				<h3 class="modal-title" id="myModalLabel">Pilih Diagnosa</h3>
	    			</div>
	    			<div class="modal-body">
						<div class="form-group">	
							<div class="col-md-5">
								<input type="text" class="form-control" name="keyworddiagnosa" id="keyworddiagnosa" placeholder="Pilih Diagnosa"/>
							</div>
							<div class="col-md-2">
								<button type="button" class="btn btn-info">Cari</button>
							</div>	
						</div>	
						<br>	
						<div style="margin-left:5px; margin-right:5px;"><hr></div>
						<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover" id="tabelsearchdiagnosa">
								<thead>
									<tr class="info">
										<th width="30%;">Kode Diagnosa</th>
										<th>Keterangan</th>
										<th width="10%">Pilih</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>99999</td>
										<td>Diagnosa Lain-lain</td>
										<td style="text-align:center; cursor:pointer;"><a href="#"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>
									</tr>
								</tbody>
							</table>												
						</div>
	    			</div>
	    			<div class="modal-footer">
				       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
			      	</div>
				</div>
			</div>
		</div>     
	    </div>
	</div>   

</div>
				
<script type="text/javascript">
	$(document).ready( function(){
		$('.addNewMintaFar').on('click',function(){
			tambahPermintaanFarmasi('#addinputMintaFar','.addNewMintaFar');
		});

		$('.addNewRetFar').on('click',function(){
			tambahReturFarmasi('#addinputRetFar','.addNewRetFar');
		});

		$('.addNewLog').on('click',function(){
			tambahPermintaanLogistik('#addinputMintaLog','.addNewLog');
		});

		$("#bwinvent").click(function(){
			$("#ibwinvent").slideToggle();
		});

		$("#bwpermintaanfarmasi").click(function(){
			$("#ibwpermintaanfarmasi").slideToggle();
		});

		$("#bwreturfarmasi").click(function(){
			$("#ibwreturfarmasi").slideToggle();
		});

		$("#bwinlogistik").click(function(){
			$("#ibwinlogistik").slideToggle();
		});

		$("#bwpermintaanlogistik").click(function(){
			$("#ibwpermintaanlogistik").slideToggle();
		});

	});

</script>