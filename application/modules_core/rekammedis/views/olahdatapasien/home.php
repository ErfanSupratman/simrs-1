
<div class="title">
	REKAM MEDIS OLAH DATA PASIEN
	<div class="pull-right" style="font-size:20px;margin-top:10px;border-radius: 5px;background:white">

		INPATIENT : 
		<label id="inpatient" name="inpatient" style="color:green">524</label> --
		OUTPATIENT :
		<label id="outpatient" name="outpatient" style="color:blue">1000</label> --
		EMERGENCY :
		<label id="emergency" name="emergency" style="color:red">524</label>
	</div>
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>olahdatapasien/home">Rekam Medis Olah Data Pasien</a>
			
		</li>
	
</div>
<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	   	<li class="active"><a href="#list" data-toggle="tab">Master Pasien</a></li>
	    <li><a href="#iso" data-toggle="tab">ISO Rekam Medik</a></li>
	    <li><a href="#jalan" data-toggle="tab">Pasien Rawat Jalan</a></li>
	    <li><a href="#inap" data-toggle="tab">Pasien Rawat Inap</a></li>
	    <li><a href="#logistik" data-toggle="tab">Logistik</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">
	<div class="modal fade" id="detailRiwaJalan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-700px">
		<div class="modal-dialog">
			<div class="modal-content" style="width:1300px">
				<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    				<h3 class="modal-title" id="myModalLabel">Detail</h3>
    			</div>
    			<div class="modal-body">
    			
    			<div class="dropdown" id="rwp1">
	            	<div id="titleInformasi">Riwayat Klinik</div>
	            	<div class="btnBawah" id="btnBawahRiwayat"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	            </div>
	            <div class="portlet-body" id="tblrwp1" style="margin: 0px 40px 0px 40px">
	            	
					<div class="form-group informasi">
						<label class="control-label col-md-2" style="margin-left:30px;margin-top:5px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter By : 
						</label>
											
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
					<table class="table table-striped table-bordered tableDT table-hover table-responsive" id="tab_detail_klinik_rj">
						<thead>
							<tr class="info" style="text_align: center;">
								<th style="width:10px;">No.</th>
								<th>Tanggal</th>
								<th>Unit</th>
								<th>Anamnesa</th>
								<th>Dokter Pemeriksa</th>
								<th style="width:20px;">Action</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>												
				</div>
				
	            <br>	

	            <div class="dropdown" id="rwp2">
	            	<div id="titleInformasi">Riwayat</div>
	            	<div class="btnBawah" id="btnBawahRiwayat"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	            </div>
	            <div class="portlet-body" id="tblrwp2" style="margin: 0px 40px 0px 40px">
	            	
					<div class="form-group informasi">
						<label class="control-label col-md-2" style="margin-left:30px;margin-top:5px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter By : 
						</label>
											
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
					<table class="table table-striped table-bordered tableDT table-hover table-responsive" id="tab_detail_igd_rj">
						<thead>
							<tr class="info" style="text_align: center;">
								<th style="width:10px;">No.</th>
								<th>Tanggal</th>
								<th>Anamnesa</th>
								<th>Dokter Jaga</th>
								<th>Perawat Jaga</th>
								<th style="width:20px;">Action</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>												
				</div>
				
				<br>

				<div class="dropdown" id="rwp3">
	            	<div id="titleInformasi">Riwayat Perawatan</div>
	            	<div class="btnBawah" id="btnBawahRiwayat"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	            </div>
	            <div class="portlet-body" id="tblrwp3" style="margin: 0px 40px 0px 40px">
	            	
	            	

					<div class="form-group informasi">
						<label class="control-label col-md-2" style="margin-left:30px;margin-top:5px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter By : 
						</label>
											
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

					<table class="table table-striped tableDT table-bordered table-hover table-responsive" id="tab_detail_rawat_rj">
						<thead>
							<tr class="info" style="text_align: center;">
								<th style="width:10px;">No.</th>
								<th>Tanggal</th>
								<th>Unit</th>
								<th>Dokter Visit</th>
								<th>Diagnosa Utama</th>
								<th>Diagnosa Sekunder</th>
								<th>Perkembangan Penyakit</th>
								<th style="width:20px;">Action</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>												
				</div>
				
				<br>
    			</div>
    			<div class="modal-footer">
			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
			       		
		      	</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="detailRiwaInap" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-700px">
		<div class="modal-dialog">
			<div class="modal-content" style="width:1300px">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					<h3 class="modal-title" id="myModalLabel">Detail</h3>
				</div>
				<div class="modal-body">
				
				<div class="dropdown" id="rwp1">
	            	<div id="titleInformasi">Riwayat Klinik</div>
	            	<div class="btnBawah" id="btnBawahRiwayat"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	            </div>
	            <div class="portlet-body" id="tblrwp1" style="margin: 0px 40px 0px 40px">
	            	
					<div class="form-group informasi">
						<label class="control-label col-md-2" style="margin-left:30px;margin-top:5px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter By : 
						</label>
											
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
					<table class="table table-striped table-bordered tableDT table-hover table-responsive">
						<thead>
							<tr class="info" style="text_align: center;">
								<th style="width:10px;">No.</th>
								<th>Tanggal</th>
								<th>Waktu</th>
								<th>Unit</th>
								<th>Anamnesa</th>
								<th>Dokter Pemeriksa</th>
								<th style="width:20px;">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>12 Januari 2012 </td>
								<td>12:12</td>
								<td>Poli Umum</td>
								<td>Ini isinya panjang</td>
								<td>Jems Naban</td>
								<td style="text-align:center;"><a href="#riwkklininap" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
							</tr>
						</tbody>
					</table>												
				</div>
				
	            <br>	

	            <div class="dropdown" id="rwp2">
	            	<div id="titleInformasi">Riwayat</div>
	            	<div class="btnBawah" id="btnBawahRiwayat"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	            </div>
	            <div class="portlet-body" id="tblrwp2" style="margin: 0px 40px 0px 40px">
	            	
					<div class="form-group informasi">
						<label class="control-label col-md-2" style="margin-left:30px;margin-top:5px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter By : 
						</label>
											
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
					<table class="table table-striped table-bordered tableDT table-hover table-responsive">
						<thead>
							<tr class="info" style="text_align: center;">
								<th style="width:10px;">No.</th>
								<th>Tanggal</th>
								<th>Waktu</th>
								<th>Anamnesa</th>
								<th>Dokter Jaga</th>
								<th>Perawat Jaga</th>
								<th style="width:20px;">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>12 Desember 2012 </td>
								<td>12:12</td>
								<td>Bebas</td>
								<td>Bebas</td>
								<td>Bebas</td>
								<td style="text-align:center;"><a href="#riwigdinap" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
							</tr>
						</tbody>
					</table>												
				</div>
				
				<br>

				<div class="dropdown" id="rwp3">
	            	<div id="titleInformasi">Riwayat Perawatan</div>
	            	<div class="btnBawah" id="btnBawahRiwayat"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
	            </div>
	            <div class="portlet-body" id="tblrwp3" style="margin: 0px 40px 0px 40px">
	            	
	            	

					<div class="form-group informasi">
						<label class="control-label col-md-2" style="margin-left:30px;margin-top:5px"><i class="glyphicon glyphicon-filter"></i>&nbsp;Filter By : 
						</label>
											
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

					<table class="table table-striped tableDT table-bordered table-hover table-responsive">
						<thead>
							<tr class="info" style="text_align: center;">
								<th style="width:10px;">No.</th>
								<th>Tanggal</th>
								<th>Waktu</th>
								<th>Dokter Visit</th>
								<th>Diagnosa Utama</th>
								<th>Diagnosa Sekunder</th>
								<th>Perkembangan Penyakit</th>
								<th style="width:20px;">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>12 Desember 2012</td>
								<td>12:12</td>
								<td>Jems</td>
								<td>Bebas</td>
								<td>Bebas</td>
								<td>Bebas</td>
								<td style="text-align:center;"><a href="#riwperawataninap" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></td>
							</tr>
						</tbody>
					</table>												
				</div>
				
				<br>
				</div>
				<div class="modal-footer">
			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
			       		
		      	</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="riwperawatanjalan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<form class="form-horizontal" role="form" method="POST" id="riwkondok">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
		   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		   				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Perawatan</h3>
		   			</div>
					<div class="modal-body" style="padding-left:80px;">

		   				<div class="form-group">
							<label class="control-label col-md-4">Waktu Tindakan</label>
							<div class="col-md-5">	
								<input type="text" class="form-control" id="in_waktutindakan" readonly />
							</div>
	        			</div>	

	        			<div class="form-group">
							<label class="control-label col-md-4">Dokter Visit</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="in_dokter" name="dokterv" placeholder="Dokter" readonly></textarea>
							</div>
						</div>

	        			<div class="form-group">
							<label class="control-label col-md-4">Anamnesa</label>
							<div class="col-md-7">
								<textarea class="form-control" id="in_anamnesa" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" >Diagnosa Utama</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="in_kode_utama" placeholder="Kode" readonly>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="in_diag_utama" placeholder="Keterangan" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" >Diagnosa Sekunder</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="in_kode_sek1" placeholder="Kode" readonly>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="in_sek1" placeholder="Keterangan" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" ></label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="in_kode_se2" placeholder="Kode" readonly>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="in_sek2" placeholder="Keterangan" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" ></label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="in_kode_sek3" placeholder="Kode" readonly>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="in_sek3" placeholder="Keterangan" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" ></label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="in_kode_sek4" placeholder="Kode" readonly>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" id="in_sek4" placeholder="Keterangan" readonly>
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-md-4">Perkembangan Penyakit</label>
							<div class="col-md-7">
								<textarea class="form-control" id="in_perkembangan" name="perkembangan" placeholder="Perkembangan Penyakit" readonly></textarea>
							</div>
						</div>

						<fieldset class="fsStyle">
							<legend>
				                Tanda Vital
							</legend>
							<div class="form-group">
								<label class="control-label col-md-4" >Tekanan Darah</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="in_tekanandarah" name="takanandarah" placeholder="Tekanan Darah" readonly>
								</div>
								<label class="control-label col-md-2">mmHg</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Temperatur</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="in_temperatur" name="temperatur" placeholder="Temperatur" readonly>
								</div>
								<label class="control-label col-md-2">&deg;C</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Nadi</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="in_nadi" name="nadi" placeholder="Nadi" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Pernapasan</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="in_pernapasan" name="pernapasan" placeholder="Pernapasan" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Berat Badan</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="in_berat" name="berat" placeholder="Berat Badan" readonly>
								</div>
								<label class="control-label col-md-2">Kg</label>
							</div>
				  		</fieldset>

		        	</div>
	        		
	        		<div class="modal-footer">
	        			<input type="hidden" id="visit_id" value="<?php echo $this->session->userdata('visit_id'); ?>">
	 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
				    </div>
				</div>
			</div>
		</form>
	</div>

	<div class="modal fade" id="riwigdjalan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<form class="form-horizontal" role="form" method="POST" id="riwkondok">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
		   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		   				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Penanganan IGD</h3>
		   			</div>
					<div class="modal-body" style="padding-left:80px;">

		   				<div class="form-group">
							<label class="control-label col-md-4">Waktu Tindakan</label>
							<div class="col-md-5">	
								<input type="text" class="form-control" readonly id="i_watkuttindakan" />
							</div>
	        			</div>	
	        			<div class="form-group">
							<label class="control-label col-md-4">Anamnesa</label>
							<div class="col-md-7">
								<textarea class="form-control" id="i_anamnesa" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
							</div>
						</div>

						<fieldset class="fsStyle">
							<legend>
				                Tanda Vital
							</legend>
							<div class="form-group">
								<label class="control-label col-md-4" >Tekanan Darah</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="i_tekanandarah" name="takanandarah" placeholder="Tekanan Darah" readonly>
								</div>
								<label class="control-label col-md-2">mmHg</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Temperatur</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="i_temperatur" name="temperatur" placeholder="Temperatur" readonly>
								</div>
								<label class="control-label col-md-2">&deg;C</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Nadi</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="i_nadi" name="nadi" placeholder="Nadi" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Pernapasan</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="i_pernapasan" name="pernapasan" placeholder="Pernapasan" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Berat Badan</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="i_berat" name="berat" placeholder="Berat Badan" readonly>
								</div>
								<label class="control-label col-md-2">Kg</label>
							</div>
				  		</fieldset>

				  		<fieldset class="fsStyle">
							<legend>
				                Pemeriksaan Fisik
							</legend>
							<div class="form-group">
								<label class="control-label col-md-4" >Kepala & Leher</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="i_kepalaleher" name="kepalaleher" placeholder="Kepala & Leher" readonly>
								</div>
								
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Thorax & ABD</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="i_thorax" name="thorax" placeholder="Thorax & ABD" readonly>
								</div>
								
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Extremitas</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="i_extremitas" name="Extremitas" placeholder="Extremitas" readonly>
								</div>
								
							</div>
							
				  		</fieldset>

				  		<fieldset class="fsStyle">
							<legend>
				                Diagnosa & Terapi
							</legend>
							<div class="form-group">
								<label class="control-label col-md-4" >Dokter Jaga</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="i_dokter" placeholder="Search Dokter" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Perawat Jaga</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="i_perawat" placeholder="Search Dokter" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Diagnosa Utama</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="i_kode_utama" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="i_diag_utama" placeholder="Keterangan" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Diagnosa Sekunder</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="i_kode_sek1" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="i_sek1" placeholder="Keterangan" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="i_kode_sek2" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="i_sek2" placeholder="Keterangan" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="i_kode_sek3" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="i_sek3" placeholder="Keterangan" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="i_kode_sek4" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="i_sek4" placeholder="Keterangan" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Detail Diagnosa</label>
								<div class="col-md-7">
									<textarea class="form-control" id="i_detailDiagnosa" name="detailDiagnosa" placeholder="Detail Diagnosa" readonly></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Terapi</label>
								<div class="col-md-7">
									<textarea class="form-control" id="i_terapi" name="terapi" placeholder="Terapi" readonly></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Alergi</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="i_alergi" name="alergi" placeholder="Alergi" readonly>
								</div>
							</div>
				  		</fieldset>
		        	</div>
	        		
	        		<div class="modal-footer">
	        			<input type="hidden" id="visit_id" value="<?php echo $this->session->userdata('visit_id'); ?>">
	 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
				    </div>
				</div>
			</div>
		</form>
	</div>

	<div class="modal fade" id="riwkklinjalan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<form class="form-horizontal" role="form" method="POST" id="riwkondok">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
		   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		   				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Klinik</h3>
		   			</div>
					<div class="modal-body" style="padding-left:80px;">

		   				<div class="form-group">
							<label class="control-label col-md-4">Waktu Tindakan</label>
							<div class="col-md-5">	
								<input type="text" class="form-control" id="j_waktutindakan" readonly />
							</div>
	        			</div>	
	        			<div class="form-group">
							<label class="control-label col-md-4">Anamnesa</label>
							<div class="col-md-7">
								<textarea class="form-control" id="j_anamnesa" name="anamnesa" readonly></textarea>
							</div>
						</div>

						<fieldset class="fsStyle">
							<legend>
				                Tanda Vital
							</legend>
							<div class="form-group">
								<label class="control-label col-md-4" >Tekanan Darah</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="j_tekanandarah" name="takanandarah" placeholder="Tekanan Darah" readonly>
								</div>
								<label class="control-label col-md-2">mmHg</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Temperatur</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="j_temperatur" name="temperatur" placeholder="Temperatur" readonly>
								</div>
								<label class="control-label col-md-2">&deg;C</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Nadi</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="j_nadi" name="nadi" placeholder="Nadi" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Pernapasan</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="j_pernapasan" name="pernapasan" placeholder="Pernapasan" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Berat Badan</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="j_berat" name="berat" placeholder="Berat Badan" readonly>
								</div>
								<label class="control-label col-md-2">Kg</label>
							</div>
				  		</fieldset>

				  		<fieldset class="fsStyle">
							<legend>
				                Diagnosa & Terapi
							</legend>
							<div class="form-group">
								<label class="control-label col-md-4" >Dokter Pemeriksa</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="j_dokter" placeholder="Search Dokter" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Diagnosa Utama</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="j_kode_utama" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="j_diag_utama" placeholder="Diagnosa" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Diagnosa Sekunder</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="j_kode_sek1" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="j_sek1" placeholder="Diagnosa" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="j_kode_sek2" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="j_sek2" placeholder="Diagnosa" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="j_kode_sek3" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="j_sek3" placeholder="Diagnosa" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="j_kode_sek4" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" id="j_sek4" placeholder="Diagnosa" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Detail Diagnosa</label>
								<div class="col-md-7">
									<textarea class="form-control" id="j_detailDiagnosa" name="detailDiagnosa" placeholder="Detail Diagnosa" readonly></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Terapi</label>
								<div class="col-md-7">
									<textarea class="form-control" id="j_terapi" name="terapi" placeholder="Terapi" readonly></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Alergi</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="j_alergi" name="alergi" placeholder="Alergi" readonly>
								</div>
							</div>
				  		</fieldset>
		        	</div>
	        		
	        		<div class="modal-footer">
	        			
	 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
				    </div>
				</div>
			</div>
		</form>
	</div>

	<div class="modal fade" id="riwperawataninap" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<form class="form-horizontal" role="form" method="POST" id="riwkondok">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
		   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		   				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Perawatan</h3>
		   			</div>
					<div class="modal-body" style="padding-left:80px;">

		   				<div class="form-group">
							<label class="control-label col-md-4">Waktu Tindakan</label>
							<div class="col-md-5">	
								<input type="text" class="form-control" readonly placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
							</div>
	        			</div>	

	        			<div class="form-group">
							<label class="control-label col-md-4">Dokter Visit</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="dokterv" name="dokterv" placeholder="Dokter" readonly></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4">Petugas</label>
							<div class="col-md-7">
								<input type="text" class="form-control" id="petugas" name="petugas" placeholder="Petugas" readonly></textarea>
							</div>
						</div>

	        			<div class="form-group">
							<label class="control-label col-md-4">Anamnesa</label>
							<div class="col-md-7">
								<textarea class="form-control" id="anamnesa" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" >Diagnosa Utama</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="kode_utama" placeholder="Kode" readonly>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" placeholder="Keterangan" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" >Diagnosa Sekunder</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="kode_sek1" placeholder="Kode" readonly>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" placeholder="Keterangan" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" ></label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="kode_se2" placeholder="Kode" readonly>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" placeholder="Keterangan" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" ></label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="kode_sek3" placeholder="Kode" readonly>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" placeholder="Keterangan" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" ></label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="kode_sek4" placeholder="Kode" readonly>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" placeholder="Keterangan" readonly>
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-md-4">Perbangan Penyakit</label>
							<div class="col-md-7">
								<textarea class="form-control" id="perkembangan" name="perkembangan" placeholder="Perkembangan Penyakit" readonly></textarea>
							</div>
						</div>

						<fieldset class="fsStyle">
							<legend>
				                Tanda Vital
							</legend>
							<div class="form-group">
								<label class="control-label col-md-4" >Tekanan Darah</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="tekanandarah" name="takanandarah" placeholder="Tekanan Darah" readonly>
								</div>
								<label class="control-label col-md-2">mmHg</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Temperatur</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="temperatur" name="temperatur" placeholder="Temperatur" readonly>
								</div>
								<label class="control-label col-md-2">&deg;C</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Nadi</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="nadi" name="nadi" placeholder="Nadi" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Pernapasan</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="pernapasan" name="pernapasan" placeholder="Pernapasan" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Berat Badan</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="berat" name="berat" placeholder="Berat Badan" readonly>
								</div>
								<label class="control-label col-md-2">Kg</label>
							</div>
				  		</fieldset>

		        	</div>
	        		
	        		<div class="modal-footer">
	        			<input type="hidden" id="visit_id" value="<?php echo $this->session->userdata('visit_id'); ?>">
	 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
				    </div>
				</div>
			</div>
		</form>
	</div>

	<div class="modal fade" id="riwigdinap" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<form class="form-horizontal" role="form" method="POST" id="riwkondok">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
		   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		   				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Penanganan IGD</h3>
		   			</div>
					<div class="modal-body" style="padding-left:80px;">

		   				<div class="form-group">
							<label class="control-label col-md-4">Waktu Tindakan</label>
							<div class="col-md-5">	
								<input type="text" class="form-control" readonly placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
							</div>
	        			</div>	
	        			<div class="form-group">
							<label class="control-label col-md-4">Anamnesa</label>
							<div class="col-md-7">
								<textarea class="form-control" id="anamnesa" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
							</div>
						</div>

						<fieldset class="fsStyle">
							<legend>
				                Tanda Vital
							</legend>
							<div class="form-group">
								<label class="control-label col-md-4" >Tekanan Darah</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="tekanandarah" name="takanandarah" placeholder="Tekanan Darah" readonly>
								</div>
								<label class="control-label col-md-2">mmHg</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Temperatur</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="temperatur" name="temperatur" placeholder="Temperatur" readonly>
								</div>
								<label class="control-label col-md-2">&deg;C</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Nadi</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="nadi" name="nadi" placeholder="Nadi" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Pernapasan</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="pernapasan" name="pernapasan" placeholder="Pernapasan" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Berat Badan</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="berat" name="berat" placeholder="Berat Badan" readonly>
								</div>
								<label class="control-label col-md-2">Kg</label>
							</div>
				  		</fieldset>

				  		<fieldset class="fsStyle">
							<legend>
				                Pemeriksaan Fisik
							</legend>
							<div class="form-group">
								<label class="control-label col-md-4" >Kepala & Leher</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="kepalaleher" name="kepalaleher" placeholder="Kepala & Leher" readonly>
								</div>
								
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Thorax & ABD</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="thorax" name="thorax" placeholder="Thorax & ABD" readonly>
								</div>
								
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Extremitas</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="Extremitas" name="Extremitas" placeholder="Extremitas" readonly>
								</div>
								
							</div>
							
				  		</fieldset>

				  		<fieldset class="fsStyle">
							<legend>
				                Diagnosa & Terapi
							</legend>
							<div class="form-group">
								<label class="control-label col-md-4" >Dokter Jaga</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="dokter" placeholder="Search Dokter" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Perawat Jaga</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="dokter" placeholder="Search Dokter" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Diagnosa Utama</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="kode_utama" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Keterangan" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Diagnosa Sekunder</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="kode_sek1" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Keterangan" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="kode_sek2" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Keterangan" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="kode_sek3" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Keterangan" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="kode_sek4" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Keterangan" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Detail Diagnosa</label>
								<div class="col-md-7">
									<textarea class="form-control" id="detailDiagnosa" name="detailDiagnosa" placeholder="Detail Diagnosa" readonly></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Terapi</label>
								<div class="col-md-7">
									<textarea class="form-control" id="terapi" name="terapi" placeholder="Terapi" readonly></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Alergi</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="alergi" name="alergi" placeholder="Alergi" readonly>
								</div>
							</div>
				  		</fieldset>
		        	</div>
	        		
	        		<div class="modal-footer">
	        			<input type="hidden" id="visit_id" value="<?php echo $this->session->userdata('visit_id'); ?>">
	 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
				    </div>
				</div>
			</div>
		</form>
	</div>

	<div class="modal fade" id="riwkklininap" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<form class="form-horizontal" role="form" method="POST" id="riwkondok">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
		   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		   				<h3 class="modal-title" id="myModalLabel">Detail Riwayat Klinik</h3>
		   			</div>
					<div class="modal-body" style="padding-left:80px;">

		   				<div class="form-group">
							<label class="control-label col-md-4">Waktu Tindakan</label>
							<div class="col-md-5">	
								<input type="text" class="form-control" readonly placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
							</div>
	        			</div>	
	        			<div class="form-group">
							<label class="control-label col-md-4">Anamnesa</label>
							<div class="col-md-7">
								<textarea class="form-control" id="anamnesa" name="anamnesa" placeholder="Anamnesa" readonly></textarea>
							</div>
						</div>

						<fieldset class="fsStyle">
							<legend>
				                Tanda Vital
							</legend>
							<div class="form-group">
								<label class="control-label col-md-4" >Tekanan Darah</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="tekanandarah" name="takanandarah" placeholder="Tekanan Darah" readonly>
								</div>
								<label class="control-label col-md-2">mmHg</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Temperatur</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="temperatur" name="temperatur" placeholder="Temperatur" readonly>
								</div>
								<label class="control-label col-md-2">&deg;C</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Nadi</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="nadi" name="nadi" placeholder="Nadi" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4">Pernapasan</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="pernapasan" name="pernapasan" placeholder="Pernapasan" readonly>
								</div>
								<label class="control-label col-md-2">x/menit</label>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Berat Badan</label>
								<div class="col-md-5">
									<input type="text" class="form-control" id="berat" name="berat" placeholder="Berat Badan" readonly>
								</div>
								<label class="control-label col-md-2">Kg</label>
							</div>
				  		</fieldset>

				  		<fieldset class="fsStyle">
							<legend>
				                Diagnosa & Terapi
							</legend>
							<div class="form-group">
								<label class="control-label col-md-4" >Dokter Pemeriksa</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="dokter" placeholder="Search Dokter" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Diagnosa Utama</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="kode_utama" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Diagnosa" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Diagnosa Sekunder</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="kode_sek1" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Diagnosa" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="kode_sek2" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Diagnosa" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="kode_sek3" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Diagnosa" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" ></label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="kode_sek4" placeholder="Kode" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Diagnosa" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Detail Diagnosa</label>
								<div class="col-md-7">
									<textarea class="form-control" id="detailDiagnosa" name="detailDiagnosa" placeholder="Detail Diagnosa" readonly></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Terapi</label>
								<div class="col-md-7">
									<textarea class="form-control" id="terapi" name="terapi" placeholder="Terapi" readonly></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" >Alergi</label>
								<div class="col-md-7">
									<input type="text" class="form-control" id="alergi" name="alergi" placeholder="Alergi" readonly>
								</div>
							</div>
				  		</fieldset>
		        	</div>
	        		
	        		<div class="modal-footer">
	        			
	 			     	<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				    </div>
				</div>
			</div>
		</form>
	</div>
	
	<div class="modal fade" id="detailPA" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-700px">
		<form class="form-horizontal" role="form" id="formeditpasien" method="post">
			<div class="modal-dialog">
				<div class="modal-content" style="width:1300px">
					<div class="modal-header">
	    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	    				<h3 class="modal-title" id="myModalLabel">Detail</h3>
	    			</div>
	    			<div class="modal-body">
		            	<div class="informasi" id="info1">
							<div class="form-group">
								<label class="control-label col-md-3" >Jenis Identitas Pasien <span class="required">* </span></label>
								<div class="col-md-4">
									<select class="form-control select detPA" name="jenis_id" id="newJenisID" required disabled>
										<option value="">Pilih</option>
										<option value="KK">KK</option>
										<option value="KTP">KTP</option>
										<option value="SIM">SIM</option>
										<option value="KARTU PELAJAR">Kartu Pelajar</option>
										<option value="PASPOR">Paspor</option>
										<option value="LAIN-LAIN">Lainnya</option>
									</select>
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control detPA" id="newNomorID" name="nomor_id" placeholder="Nomor identitas" required disabled />
								</div>
							</div>	

							<div class="form-group">
								<label class="control-label col-md-3">No Rekam Medis Lama</label>
								<div class="col-md-6">
									<input type="text" class="form-control detPA" id="new_rm_id" name="rm_lama" placeholder="No Rekam Medik Lama (bila tidak diisi, sistem otomatis membuatkan" disabled />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Nama Lengkap <span class="required">* </span></label>
								<div class="col-md-6">
									<input type="text" class="form-control detPA" id="newNamaLengkap" name="nama_lengkap" placeholder="Nama lengkap pasien" required disabled />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Alias <span class="required">* </span></label>
								<div class="col-md-4">
									<select class="form-control select detPA" name="alias" id="newAlias" required disabled>
										<option value="" selected>Jenis Alias</option>
										<option value="Tu">Tuan</option>
										<option value="Ny"  >Nyonya</option>
										<option value="Nona" >Nona</option>
										<option value="Bpk" >Bapak</option>
										<option value="Anak"  >Anak</option>
										<option value="LAIN-LAIN" >Lainnya</option>
									</select>												
								</div>
							</div>

							<div class="form-group">
								<div class="form-inline">
									<label class="control-label col-md-3">Jenis Kelamin <span class="required">* </span></label>
									<div class="col-md-4">
										<div class="radio-list ">
											<label>
												<input type="radio" style="margin-bottom:15px" name="jk" id="newJenisKelamin" class="detPA" value="L" data-title="Pria" required checked disabled /><span style="margin-left:10px">Pria</span> 
											</label>
											<label style="margin-left: 10px">
												<input type="radio" style="margin-bottom:15px" name="jk" id="newJenisKelamin2" class="detPA" value="P" data-title="Wanita" required disabled /><span style="margin-left:10px">Wanita </span>
											</label>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Golongan Darah <span class="required">* </span></label>
								<div class="col-md-4">
									<select class="form-control select detPA" name="gol_darah" id="newGol" required disabled>
										<option value="" selected>TIDAK DIKETAHUI</option>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="AB">AB</option>
										<option value="O">O</option>
									</select>												
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Agama <span class="required">* </span></label>
								<div class="col-md-4">
									<select class="form-control select detPA" name="agama" id="newAgama" disabled>
										<option value="TIDAK DIKETAHUI" selected>TIDAK DIKETAHUI</option>
										<option value="ISLAM">Islam</option>
										<option value="KATHOLIK">Katholik</option>
										<option value="KRISTEN">Kristen</option>
										<option value="HINDU">Hindu</option>
										<option value="BUDHA">Budha</option>
										<option value="KONG HU CHU">Kong Hu Chu</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Tempat, tanggal lahir <span class="required">* </span></label>
								<div class="col-md-2">
									<input type="text" class="form-control detPA" id="newTempatLahir" name="tempat_lahir" placeholder="Tempat Lahir" disabled />
								</div>
								<div class="col-md-2">		
									<div class="input-icon">
										<i class="fa fa-calendar"></i>
										<input class="form-control detPA input-medium" id="newTglLahir" maxlength="12"
											type="text" style="cursor:pointer;" value="" data-date-format="dd/mm/yyyy" name="tgl_lahir" data-provide="datepicker" disabled placeholder="<?php echo date("d/m/Y");?>" readonly required/>
									</div>
								</div>										
							</div>		

							<div class="form-group">
								<label class="control-label col-md-3">Umur<span class="required">* </span></label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="newUmur" name="umur" placeholder="Umur" disabled />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Status Kawin<span class="required">* </span></label>
								<div class="col-md-4">
									<select class="form-control select detPA" id="newStatusKawin" name="status_kawin" required disabled>
										<option value="BELUM KAWIN" selected>BELUM KAWIN</option>
										<option value="KAWIN">KAWIN</option>
										<option value="JANDA / DUDA">JANDA / DUDA</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">Pendidikan Terakhir <span class="required">* </span></label>
								<div class="col-md-4">
									<select class="form-control select detPA" id="newJenjangPendidikan" name="pendidikan" disabled required>
										<option value="TIDAK DIKETAHUI" selected>TIDAK DIKETAHUI</option>
										<option value="TIDAK ADA">TIDAK ADA</option>
										<option value="SD">SD</option>
										<option value="SMP">SMP</option>
										<option value="SMA">SMA</option>
										<option value="SMK">SMK</option>
										<option value="MADRASAH">Madrasah</option>
										<option value="S1">S1</option>
										<option value="S2">S2</option>
										<option value="S3">S3</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">Pekerjaan <span class="required">* </span></label>
								<div class="col-md-4">
									<input type="text" class="form-control detPA" id="newPekerjaan" name="pekerjaan" disabled placeholder="Pekerjaan Pasien" required/>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">Nomor Telepon <span class="required">* </span></label>
								<div class="col-md-4">
									<input type="text" class="form-control detPA" id="nomorPasien" name="nomor_pasien" disabled placeholder="Nomor Yang bisa dihubungi"/>
								</div>						
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">Alamat Sekarang <span class="required">* </span></label>
								<div class="col-md-6">
									<input type="text" class="form-control detPA" id="newAlamat" name="alamat" disabled placeholder="alamat lengkap pasien"/>
								</div>						
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Wilayah <span class="required"> * </span></label>
								<div class="col-md-2">
									<select class="form-control select detPA" id="skrProvinsi" name="provinsi_skr" required disabled>
											<option value="">Pilih Provinsi</option>
											<?php foreach( $provinsi as $prov ) { ?>
											<option value="<?php echo $prov['prov_id']; ?>" >
												<?php echo $prov['nama_prov']; ?>
											</option>
										<?php } ?>
									</select>
								</div>
								<div class="col-md-2">
									<select class="form-control select detPA" 
										id="skrKabupaten" name="kabupaten_skr" required disabled>
											<option value="">Pilih Kabupaten</option>
											
									</select>
								</div>												
								<div class="col-md-2">
									<select class="form-control select detPA" id="skrKecamatan" disabled name="kecamatan_skr" required>
							            <option value="" selected>Pilih Kecamatan</option>
									</select>
								</div>
								<div class="col-md-2">
									<select class="form-control select detPA" name="kelurahan_skr" disabled id="skrKelurahan" required>
							            <option value="" selected>Pilih Kelurahan</option>
							        </select>
								</div>						 
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">Alamat KTP</label>
								<div class="col-md-6">
									<input type="text" class="form-control detPA" id="newAlamatKTP" disabled name="alamat_ktp" placeholder="alamat lengkap pasien (Sesuai KTP)"/>
								</div>						
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">Wilayah KTP<span class="required">
								</span>
								</label>
								<div class="col-md-2">
									<select class="form-control select detPA" 
										id="newProvinsi" name="provinsi" disabled>
											<option value="">Pilih Provinsi</option>
											<?php foreach( $provinsi as $prov ) { ?>
											<option value="<?php echo $prov['prov_id']; ?>" >
												<?php echo $prov['nama_prov']; ?>
											</option>
										<?php } ?>
									</select>
								</div>

								<div class="col-md-2">
									<select class="form-control select detPA" 
										id="newKabupaten" name="kabupaten" disabled>
											<option value="">Pilih Kabupaten</option>
											
									</select>
								</div>	

								<div class="col-md-2">
									<select class="form-control select detPA" 
										id="newKecamatan" name="kecamatan" disabled>
							            <option value="" selected>Pilih Kecamatan</option>
							           
									</select>
								</div>

								<div class="col-md-2">
									<select class="form-control select detPA" name="kelurahan" id="newKelurahan" required disabled>
							            <option value="" selected disabled>Pilih Kelurahan</option>
							        </select>
								</div>
							</div>	

							<div class="form-group">
								<label class="control-label col-md-3" >Alergi
								</label>
								<div class="col-md-7">			
									<textarea class="form-control detPA" rows="5" id="newALergi" name="alergi" disabled></textarea>
									<br>
							 	</div>																			
							</div>									
						</div>	
						<div class="informasi" id="info2">
							<div class="form-group">
								<label class="control-label col-md-3">Nama Wali</label>
								<div class="col-md-4">
									<input type="text" class="form-control detPA" id="newWali" name="namawali" placeholder="Nama Wali" disabled />
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3" >Hubungan Wali dengan Pasien</label>
								<div class="col-md-4">
									<select class="form-control select detPA" name="newHubungan" id="newHubungan" disabled>
										<option value="">Hubungan Wali</option>
										<option value="Ayah">Ayah</option>
										<option value="Ibu">Ibu</option>
										<option value="Anak">Anak</option>
										<option value="Suami">Suami</option>
										<option value="Istri">Istri</option>
										<option value="LAIN-LAIN">Lainnya</option>
									</select>
								</div>
							</div>	
							
							<div class="form-group">
								<label class="control-label col-md-3">Alamat Wali</label>
								<div class="col-md-4">
									<input type="text" class="form-control detPA" id="newAlamatWali" name="alamatwali" disabled placeholder="Alamat Wali"/>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">Nomor Telepon Wali</label>
								<div class="col-md-4">
									<input type="text" class="form-control detPA" id="no_telp_wali" name="nomorteleponwali" disabled placeholder="Nomor Telepon Wali"/>
								</div>
							</div>	
							
							<div class="form-group">
								<label class="control-label col-md-3">Pekerjaan Wali</label>
								<div class="col-md-4">
									<input type="text" class="form-control detPA" id="newJobWali" name="pekerjaanwali" disabled placeholder="Pekerjaan Wali"/>
								</div>
							</div>
					        <br>
					    </div>  			
	    			</div>
	    			<div class="modal-footer">
			       		<button type="button" class="btn btn-success edPA" >Ubah</button>
			       		<button type="submit" class="btn btn-success smpPA" id="simpanpasienactive">Simpan</button>
			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
			      	</div>
				</div>
			</div>
		</form>
	</div>
	<div class="modal fade" id="detailPAMen" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-700px">
		<div class="modal-dialog">
			<div class="modal-content" style="width:1300px">
				<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    				<h3 class="modal-title" id="myModalLabel">Detail</h3>
    			</div>
    			<div class="modal-body">
    			
    			<form class="form-horizontal" role="form">
	            	<div class="informasi" id="info1">
						<div class="form-group">
							<label class="control-label col-md-3" >Jenis Identitas Pasien <span class="required">* </span></label>
							<div class="col-md-4">
								<input type="text" class="form-control select detPA" name="mjenis_id" id="newJenisID" required disabled>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control detPA" id="mnewNomorID" name="nomor_id" placeholder="Nomor identitas" required disabled />
							</div>
						</div>	

						<div class="form-group">
							<label class="control-label col-md-3">No Rekam Medis Lama</label>
							<div class="col-md-6">
								<input type="text" class="form-control detPA" id="mnew_rm_id" name="rm_lama" placeholder="No Rekam Medik Lama (bila tidak diisi, sistem otomatis membuatkan" disabled />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Nama Lengkap <span class="required">* </span></label>
							<div class="col-md-6">
								<input type="text" class="form-control detPA" id="mnewNamaLengkap" name="nama_lengkap" placeholder="Nama lengkap pasien" required disabled />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Alias <span class="required">* </span></label>
							<div class="col-md-4">
								<input type="text" class="form-control select detPA" name="alias" id="mnewAlias" required disabled>
							</div>
						</div>

						<div class="form-group">
							<div class="form-inline">
								<label class="control-label col-md-3">Jenis Kelamin <span class="required">* </span></label>
								<div class="col-md-4">
									<input type="text" class="form-control select detPA" name="alias" id="mnewjk" required disabled>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Golongan Darah <span class="required">* </span></label>
							<div class="col-md-4">
								<input type="text" class="form-control select detPA" name="gol_darah" id="mnewGol" required disabled>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Agama <span class="required">* </span></label>
							<div class="col-md-4">
								<input type="text" class="form-control select detPA" name="agama" id="mnewAgama" disabled>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Tempat, tanggal lahir <span class="required">* </span></label>
							<div class="col-md-2">
								<input type="text" class="form-control detPA" id="mnewTempatLahir" name="tempat_lahir" placeholder="Tempat Lahir" disabled />
							</div>
							<div class="col-md-2">		
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input class="form-control detPA input-medium" id="mtgllahir" maxlength="12"
										type="text" style="cursor:pointer;" value="" data-date-format="dd/mm/yyyy" name="tgl_lahir" data-provide="datepicker" disabled placeholder="<?php echo date("d/m/Y");?>" readonly required/>
								</div>
							</div>										
						</div>		

						<div class="form-group">
							<label class="control-label col-md-3">Umur<span class="required">* </span></label>
							<div class="col-md-2">
								<input type="text" class="form-control" id="mnewUmur" name="umur" placeholder="Umur" disabled />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Status Kawin<span class="required">* </span></label>
							<div class="col-md-4">
								<input type="text" class="form-control select detPA" id="mnewStatusKawin" name="status_kawin" required disabled>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Pendidikan Terakhir <span class="required">* </span></label>
							<div class="col-md-4">
								<input type="text" class="form-control select detPA" id="mnewJenjangPendidikan" name="pendidikan" disabled required>									
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Pekerjaan <span class="required">* </span></label>
							<div class="col-md-4">
								<input type="text" class="form-control detPA" id="mnewPekerjaan" name="pekerjaan" disabled placeholder="Pekerjaan Pasien" required/>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Nomor Telepon <span class="required">* </span></label>
							<div class="col-md-4">
								<input type="text" class="form-control detPA" id="mnomorPasien" name="nomor_pasien" disabled placeholder="Nomor Yang bisa dihubungi"/>
							</div>						
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Alamat Sekarang <span class="required">* </span></label>
							<div class="col-md-6">
								<input type="text" class="form-control detPA" id="mnewAlamat" name="alamat" disabled placeholder="alamat lengkap pasien"/>
							</div>						
						</div>

						<div class="form-group">
							<label class="control-label col-md-3">Wilayah <span class="required"> * </span></label>
							<div class="col-md-2">
								<input type="text" class="form-control select detPA" id="mskrProvinsi" name="provinsi_skr" required disabled>									
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control select detPA" id="mskrKabupaten" name="kabupaten_skr" required disabled>
							</div>												
							<div class="col-md-2">
								<input type="text" class="form-control select detPA" id="mskrKecamatan" disabled name="kecamatan_skr" required>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control select detPA" name="kelurahan_skr" disabled id="mskrKelurahan" required>
							</div>						 
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Alamat KTP</label>
							<div class="col-md-6">
								<input type="text" class="form-control detPA" id="mnewAlamatKTP" disabled name="alamat_ktp" placeholder="alamat lengkap pasien (Sesuai KTP)"/>
							</div>						
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Wilayah KTP<span class="required">
							</span>
							</label>
							<div class="col-md-2">
								<input type="text" class="form-control select detPA" id="mnewProvinsi" name="provinsi" disabled>
							</div>

							<div class="col-md-2">
								<input type="text" class="form-control select detPA" id="mnewKabupaten" name="kabupaten" disabled>
							</div>	

							<div class="col-md-2">
								<input type="text" class="form-control select detPA" id="mnewKecamatan" name="kecamatan" disabled>
							</div>

							<div class="col-md-2">
								<input type="text" class="form-control select detPA" name="kelurahan" id="mnewKelurahan" required disabled>
							</div>
						</div>	

						<div class="form-group">
							<label class="control-label col-md-3" >Alergi
							</label>
							<div class="col-md-7">			
								<textarea class="form-control detPA" rows="5" id="mnewALergi" name="alergi" disabled></textarea>
								<br>
						 	</div>																			
						</div>									
					</div>	
					<div class="informasi" id="info2">
						<div class="form-group">
							<label class="control-label col-md-3">Nama Wali</label>
							<div class="col-md-4">
								<input type="text" class="form-control detPA" id="mnewWali" name="namawali" placeholder="Nama Wali" disabled />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3" >Hubungan Wali dengan Pasien</label>
							<div class="col-md-4">
								<input type="text" class="form-control select detPA" name="mnewHubungan" id="mnewHubungan" disabled>
							</div>
						</div>	
						
						<div class="form-group">
							<label class="control-label col-md-3">Alamat Wali</label>
							<div class="col-md-4">
								<input type="text" class="form-control detPA" id="mnewAlamatWali" name="alamatwali" disabled placeholder="Alamat Wali"/>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3">Nomor Telepon Wali</label>
							<div class="col-md-4">
								<input type="text" class="form-control detPA" id="mno_telp_wali" name="nomorteleponwali" disabled placeholder="Nomor Telepon Wali"/>
							</div>
						</div>	
						
						<div class="form-group">
							<label class="control-label col-md-3">Pekerjaan Wali</label>
							<div class="col-md-4">
								<input type="text" class="form-control detPA" id="mnewJobWali" name="pekerjaanwali" disabled placeholder="Pekerjaan Wali"/>
							</div>
						</div>
				        <br>
				    </div>  	
            	 		
					</form>
					
    			</div>
    			<div class="modal-footer">
			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
			       		
		      	</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="ubahactive" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
		<div class="modal-dialog" style="width:800px">

    		<form class="form-horizontal" role="form" id="inactive_pasien" method="post">
				<div class="modal-content">
					<div class="modal-header">
	    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	    				<h3 class="modal-title" id="myModalLabel">Status</h3>
	    			</div>
	    			<div class="modal-body">
		            	<div class="informasi" id="info1">
							<div class="form-group">
								<label class="control-label col-md-3" >Status </label>
								<div class="col-md-5">
									<select class="form-control select detPA" name="statusMen" id="statusMen" required>
										<option value="" selected="">Pilih</option>
										<option value="inactive">Inactive</option>
										<option value="meninggal">Meninggal</option>
									</select>
								</div>
								
							</div>	
							<div id="statu">
							<div class="form-group">
								<label class="control-label col-md-3">Tanggal Meninggal</label>
								<div class="col-md-5">
									<input type="text" class="form-control detPA" id="tglMati" name="tglMati" date-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date('d/m/Y') ?>" />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Sebab Kematian</label>
								<div class="col-md-5">
									<textarea class="form-control" id="sbabMati" name="sbabMati"></textarea>
								</div>
							</div>
							</div>

							
					    </div>  	
	            	 		
						
						
	    			</div>
	    			<div class="modal-footer">
	    				<input type="hidden" id="rm_id_active">
			       		<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
			       		<button type="submit" class="btn btn-success" >Simpan</button>
			      	</div>
				</div>
			</form>
		</div>
	</div>
	<div class="modal fade" id="ubahinactive" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
		<div class="modal-dialog" style="width:800px">

    		<form class="form-horizontal" role="form" id="active_pasien" method="post">
				<div class="modal-content">
					<div class="modal-header">
	    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	    				<h3 class="modal-title" id="myModalLabel">Status</h3>
	    			</div>
	    			<div class="modal-body">
		            	<div class="informasi" id="info1">
							<div class="form-group">
								<label class="control-label col-md-3" >Status </label>
								<div class="col-md-5">
									<select class="form-control select detPA" name="statusMen" id="m_statusMen" required>
										<option value="" selected="">Pilih</option>
										<option value="active">Active</option>
										<option value="meninggal">Meninggal</option>
									</select>
								</div>
								
							</div>	
							<div id="statu">
							<div class="form-group">
								<label class="control-label col-md-3">Tanggal Meninggal</label>
								<div class="col-md-5">
									<input type="text" class="form-control detPA" id="m_tglMati" name="tglMati" date-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date('d/m/Y') ?>" />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Sebab Kematian</label>
								<div class="col-md-5">
									<textarea class="form-control" id="m_sbabMati" name="sbabMati"></textarea>
								</div>
							</div>
							</div>

							
					    </div>  	
	            	 		
						
						
	    			</div>
	    			<div class="modal-footer">
	    				<input type="hidden" id="rm_id_inactive">
			       		<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
			       		<button type="submit" class="btn btn-success" >Simpan</button>
			      	</div>
				</div>
			</form>
		</div>
	</div>

		<div class="tab-pane active" id="list">
			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Pasien Active</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi" style="margin-right:60px">
		       	<form method="POST" id="search_submitactive">
			       	<div class="search">
						<label class="control-label col-md-4">
							<i class="fa fa-search">&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
						</label>
						<div class="col-md-4">		
							<input type="text" id="activekey" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
				        </div>
				        <button type="submit" class="btn btn-danger">Cari</button>
					</div>	
				</form>
			</div>
			<br>
			<hr class="garis"><br>
			<div class="tabelinformasi">
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabelutamapasienactive">
							<thead>
								<tr class="info">
									<th style="width:3%;">No.</th>
									<th style="text-align:center;width:20px;">No. Rekam Medis</th>
									<th>Nama Lengkap</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Kunjungan Terakhir</th>
									<th>Status</th>
									<th style="text-align:center:width:25px;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php  
									//echo json_encode($all_pasienactive);die;
									if (isset($all_pasienactive) && !empty($all_pasienactive)) {
										$i = 0;
										foreach ($all_pasienactive as $value) {
											$tgl_lahir = date_create($value['tanggal_lahir']);
											$waktuvisit = date_create($value['tanggal_visit']);
											echo '<tr>
													<td>'.(++$i).'</td>
													<td>'.$value['rm_id'].'</td>
													<td>'.$value['nama'].'</td>
													<td>'.$value['jenis_kelamin'].'</td>
													<td>'.$tgl_lahir->format('d F Y').'</td>
													<td>'.$waktuvisit->format('d F Y H:i:s').'</td>
													<td>Active</td>
													<td style="text-align:center">
														<a href="#detailPA" data-toggle="modal" class="viewdetailpasienactive"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>
														<a href="#ubahactive" data-toggle="modal" class="changestatuspasienactive"><i class="glyphicon glyphicon-tasks" data-toggle="tooltip" data-placement="top" title="Ubah Status"></i></a>
														<a href="#" class="deletepasienactive"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
													</td>										
												</tr>';
										}
									}
								?>
								
							</tbody>
						</table>
					</div>			
				</div>
			</div>  
			
			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Pasien InActive</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
           <div class="informasi" style="margin-right:60px">
		       	<form method="POST" id="search_submitinactive">
			       	<div class="search">
						<label class="control-label col-md-4">
							<i class="fa fa-search">&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
						</label>
						<div class="col-md-4">		
							<input type="text" id="inactivekey" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
				        </div>
				        <button type="submit" class="btn btn-danger">Cari</button>
					</div>	
				</form>
			</div>

				<br>
				<hr class="garis"><br>
			<div class="tabelinformasi">
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabelutamapasieninactive">
							<thead>
								<tr class="info">
									<th style="width:3%">No.</th>
									<th style="text-align:center;width:20px;">No. Rekam Medis</th>
									<th>Nama Lengkap</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Kunjungan Terakhir</th>
									<th>Status</th>
									<th style="text-align:center:width:25px;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php  
									//echo json_encode($all_pasienactive);die;
									if (isset($all_pasieninactive) && !empty($all_pasieninactive)) {
										$i = 0;
										foreach ($all_pasieninactive as $value) {
											$tgl_lahir = date_create($value['tanggal_lahir']);
											$waktuvisit = date_create($value['tanggal_visit']);
											echo '<tr>
													<td>'.(++$i).'</td>
													<td>'.$value['rm_id'].'</td>
													<td>'.$value['nama'].'</td>
													<td>'.$value['jenis_kelamin'].'</td>
													<td>'.$tgl_lahir->format('d F Y').'</td>
													<td>'.$waktuvisit->format('d F Y H:i:s').'</td>
													<td>inActive</td>
													<td style="text-align:center">
														<a href="#detailPA" data-toggle="modal" class="viewdetailpasienactive"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>
														<a href="#ubahinactive" data-toggle="modal" class="changestatuspasienactive"><i class="glyphicon glyphicon-tasks" data-toggle="tooltip" data-placement="top" title="Ubah Status"></i></a>
														<a href="#" class="deletepasienactive"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
													</td>										
												</tr>';
										}
									}
								?>
							</tbody>
						</table>
					</div>			
				</div>  
			</div>
			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Pasien Meninggal</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi" style="margin-right:60px">
		       	<form method="POST" id="search_submitdied">
			       	<div class="search">
						<label class="control-label col-md-4">
							<i class="fa fa-search">&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
						</label>
						<div class="col-md-4">		
							<input type="text" id="diedkey" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
				        </div>
				        <button type="submit" class="btn btn-danger">Cari</button>
					</div>	
				</form>
			</div>
				<br>
				<hr class="garis"><br>
			<div class="tabelinformasi">
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama" id="tabelutamapasienmeninggal">
							<thead>
								<tr class="info">
									<th style="width:3%">No.</th>
									<th style="text-align:center;width:20px;">No. Rekam Medis</th>
									<th>Nama Lengkap</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Tanggal meninggal</th>
									<th>Status</th>
									<th style="text-align:center:width:25px;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php  
									//echo json_encode($all_pasienactive);die;
									if (isset($all_pasienmeninggal) && !empty($all_pasienmeninggal)) {
										$i = 0;
										foreach ($all_pasienmeninggal as $value) {
											$tgl_lahir = date_create($value['tanggal_lahir']);
											$waktuvisit = date_create($value['tgl_meninggal']);
											echo '<tr>
													<td>'.(++$i).'</td>
													<td>'.$value['rm_id'].'</td>
													<td>'.$value['nama'].'</td>
													<td>'.$value['jenis_kelamin'].'</td>
													<td>'.$tgl_lahir->format('d F Y').'</td>
													<td>'.$waktuvisit->format('d F Y H:i:s').'</td>
													<td>meninggal</td>
													<td style="text-align:center">
														<a href="#detailPAMen" data-toggle="modal" class="viewdetailpasienactive"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>
														<a href="#" class="deletepasienactive"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
													</td>										
												</tr>';
										}
									}
								?>
							</tbody>
						</table>
					</div>			
				</div>  
			</div>
	    </div>

        <div class="tab-pane" id="iso">
        	<div class="informasi">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
	        			<label class="control-label col-md-2"> Tanggal</label>
	        			<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" />
							</div>
						</div>
	        		</div>
	        		<div class="form-group">
	        			<label class="control-label col-md-2">Nomor Rekam Medis</label>
	        			<div class="col-md-3">
	        				<input type="text" class="form-control" id="nmrRMISO" name="nmrRMISO">
	        			</div>
	        			<div class="col-md-5">
	        			</div><!-- 
	        			<div class="pull-right" style="margin-right:20px">
		        			<div class="col-md-3">
		        			</div>
	        			</div> -->
	        		</div>
		        </form> 
	        </div>
	        <br>
			<hr class="garis"><br>
			<div class="tabelinformasi">
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
							<thead>
								<tr class="info">
									<th style="text-align:center;width:20px;">No.</th>
									<th>Waktu Masuk</th>
									<th>No Rekam Medis</th>
									<th>Nama Pasien</th>
									<th>Waktu Bayar</th>
									<th>Cara Bayar</th>
									<th>Pasien Baru/Lama</th>
									<th>Diagnosa</th>
									<th>Unit Masuk</th>
									<th>Unit Keluar</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>122</td>
									<td>Arbet</td>
									<td>P</td>
									<td>1212121</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
															
								</tr>
							</tbody>
						</table>
					</div>
					<button class="btn btn-info" style="margin:-100px 0px 0px 10px;">Simpan ke Excel(.xls)</button> 
		        						
				</div>  
			</div>      
        </div>

        <div class="tab-pane" id="jalan">   
            <div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">List Pasien Rawat Jalan</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="allpasienrj">
							<thead>
								<tr class="info">
									<th style="text-align:center;width:20px;">No.</th>
									<th>No Rekam Medis</th>
									<th>Nama Pasien</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Alamat</th>
									<th>Unit</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php  
									//echo json_encode($all_pasienactive);die;
									if (isset($all_pasienrj) && !empty($all_pasienrj)) {
										$i = 0;
										foreach ($all_pasienrj as $value) {
											$tgl_lahir = date_create($value['tanggal_lahir']);
											echo '<tr>
													<td>'.(++$i).'</td>
													<td>'.$value['rm_id'].'</td>
													<td>'.$value['nama'].'</td>
													<td>'.$value['jenis_kelamin'].'</td>
													<td>'.$tgl_lahir->format('d F Y').'</td>
													<td>'.$value['alamat_skr'].'</td>
													<td>'.$value['nama_dept'].'</td>
													<td style="text-align:center"><a href="#detailRiwaJalan" class="viewdetailpasienrj" data-toggle="modal"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Detail"></i></a></td>										
												</tr>';
										}
									}
								?>
							</tbody>
						</table>
					</div>			
				</div>  
			</div>

			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Rekap Kunjungan Rawat Jalan</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
	        			<label class="control-label col-md-1"> Tanggal</label>
	        			<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start" readonly="" id="startrekap_rj"  data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date('d/m/Y', strtotime('-30 days'));?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" id="endrekap_rj" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" value="<?php echo date("d/m/Y");?>" />
							</div>
						</div>
						<div class="col-md-3"><a href="#" class="btn btn-danger btn-small" id="fak">filter</a></div>
	        		</div>
		        </form> 
	        </div>
	        <br>
			<hr class="garis"><br>
            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					<!-- <span id="panLeft" class="panner glyphicon glyphicon-arrow-left" data-scroll-modifier='-1'></span>

					<span id="panRight" class="panner glyphicon glyphicon-arrow-right" data-scroll-modifier='1'></span>
					<div id="pannerku" style="overflow-x:hidden"> -->
						<table class="table  table-striped table-bordered table-hover table-responsive tableDTUtamaScroll" id="tabelutamarekap_rj">
						<!-- Sebelumnya pakai tableDTUtamaScroll -->
							<thead>
								<tr class="info">
									<th>Tanggal</th>
									<?php foreach ($allpoli as $value) {
										echo '<th>'.$value['nama_dept'].'</th>';
									} ?>
								</tr>
							</thead>
							<tbody>
								<?php  
									foreach ($rekap_rj as $value) {
										$waktu_masuk = date_create($value['waktu_masuk']);
										echo '<tr><td>'.date_format($waktu_masuk, 'd F Y').'</td>';
										$tgl = $value['tgl'];
										foreach ($tgl as $key) {
											echo '<td>'.$key['jlh'].'</td>';
										}
										echo '</tr>';
									}
								?>
								</tr>
							</tbody>
						</table>
						<!-- </div> -->
					</div>

					<button class="btn btn-info" style="margin:-100px 0px 0px 10px;">Simpan ke Excel(.xls)</button> 			
				</div>  
			</div>

			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Rekap Poli Rawat Jalan Per Kecamatan</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
	        			<label class="control-label col-md-2"> Bulan /Tahun</label>
	        			<div class="col-md-2">
	        					<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
	        			</div>
	        		</div>
		        </form> 
	        </div>
	        <br>
			<hr class="garis"><br>
            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
							<thead>
								<tr class="info">
									<th>Poliklinik</th>
									<th>L</th>
									<th>P</th>
									<th>Kecamatan A</th>
									<th>Kecamatan B</th>
									<th>Kecamatan C</th>
									<th>Kecamatan D</th>
									<th>Total</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>122</td>
									<td>Arbet</td>
									<td>P</td>
									<td>1212121</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
															
								</tr>
							</tbody>
						</table>
					</div>		

					<button class="btn btn-info" style="margin:-100px 0px 0px 10px;">Simpan ke Excel(.xls)</button> 	
				</div>  
			</div>

			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Rekap Poli Rawat Jalan Per Cara Bayar</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
	        			<label class="control-label col-md-2"> Bulan / Tahun</label>
	        			<div class="col-md-2">
	        				<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
							
						</div>
	        		</div>
		        </form> 
	        </div>
	        <br>
			<hr class="garis"><br>
            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
							<thead>
								<tr class="info">
									<th>Poliklinik</th>
									<th>L</th>
									<th>P</th>
									<th>Umum</th>
									<th>BPJS</th>
									<th>Jamkesmas</th>
									<th>Asuransi</th>
									<th>Kontrak</th>
									<th>Gratis</th>
									<th>Lain-lain</th>
									<th>Total</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>122</td>
									<td>Arbet</td>
									<td>P</td>
									<td>1212121</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
															
								</tr>
							</tbody>
						</table>
					</div>	

					<button class="btn btn-info" style="margin:-100px 0px 0px 10px;">Simpan ke Excel(.xls)</button> 		
				</div>  
			</div>


			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Rekap Sensus Rawat Jalan</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
	        			<label class="control-label col-md-2"> Bulan /Tahun</label>
	        			<div class="col-md-2">
	        					<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
	        			</div>
	        		</div>
	        		<div class="form-group">
	        			<label class="control-label col-md-1"></label>
	        			<div class="col-md-3">
	        			</div>
	        			<div class="col-md-5">
	        			</div>
	        			<!-- <div class="pull-right" style="margin-right:20px">
		        			<div class="col-md-3">
		        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
		        			</div>
	        			</div> -->
	        		</div>
		        </form> 
	        </div>
	        <br>
			<hr class="garis"><br>
            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtamaScroll display" cellspacing="0" width="100%">
							<thead>
								<tr class="info">
									<th rowspan="2">Bulan</th>
									<th colspan="2">Pasien Baru</th>
									<th colspan="2">Pasien Lama</th>
									<th colspan="7">Cara Masuk</th>
									<th colspan="22">Unit Rawat Jalan</th>
									<th rowspan="2">Total</th>
									
								</tr>
								<tr class="info">
									
									<th>L</th>
									<th>P</th>
									<th>L</th>
									<th>P</th>
									<th>Umum</th>
									<th>BPJS</th>
									<th>Jamkesmas</th>
									<th>Asuransi</th>
									<th>Kontak</th>
									<th>Gratis</th>
									<th>DLL</th>
									<th>Umum</th>
									<th>THT</th>
									<th>Kulit Kelamin</th>
									<th>Kandungan</th>
									<th>KIA</th>
									<th>Mata</th>
									<th>Anak</th>
									<th>Dalam</th>
									<th>Bedah</th>
									<th>Gigi dan Mulut</th>
									<th>Bedah Tulang</th>
									<th>PPT</th>
									<th>Tumbuh Kembang</th>
									<th>Laktasi</th>
									<th>Paru</th>
									<th>Kardiologi</th>
									<th>Saraf</th>
									<th>Orthopedi</th>
									<th>Psikiatri</th>
									<th>Urologi</th>
									<th>Obstetri dan Generologi</th>
									<th>Gizi</th>
								</tr>
							</thead>
							<tbody >
								<tr>
									<td>12 Juli</td>
									<td>2</td>
									<td>3</td>
									<td>14</td>
									<td>2</td>
									<td>30</td>
									<td>20</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>43</td>
									<td>30</td>
									<td>20</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>43</td>
									<td>30</td>
									<td>20</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>43</td>
									<td>23</td>
									<td>43</td>
									<td>43</td>
															
								</tr>
							</tbody>
						</table>
					</div>		

					<button class="btn btn-info" style="margin:-100px 0px 0px 10px;">Simpan ke Excel(.xls)</button> 	
				</div>  
			</div>

			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Rekap Status Pulang Rawat Jalan</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
	        			<label class="control-label col-md-2"> Tanggal</label>
	        			<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
							</div>
						</div>
	        		</div>
	        		<div class="form-group">
	        			<label class="control-label col-md-2">Unit Rawat Jalan</label>
	        			<div class="col-md-3">
	        				<select class="form-control">
	        					<option selected>Pilih</option>
	        					<option value="anak">Anak</option>
	        					<option value="umum">Umum</option>
	        					<option value="etc">etc</option>
	        				</select>
	        			</div>
	        			<div class="col-md-5">
	        				<button class="btn btn-danger">CARI</button>
	        			</div>
	        			<!-- <div class="pull-right" style="margin-right:20px">
		        			<div class="col-md-3">
		        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
		        			</div>
	        			</div> -->
	        		</div>
		        </form> 
	        </div>
	        <br>
			<hr class="garis"><br>
            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama display" cellspacing="0" width="100%">
							<thead>
								<tr class="info">
									<th >Tanggal</th>
									<th >Belum Pulang</th>
									<th >Pulang</th>
									<th >Rujuk IGD</th>
									<th >Rujuk Poli</th>
									<th >Rujuk Ranap</th>
									<th >Pasien Dipulangkan</th>
									<th >Pasien Pindah Poli Lain</th>
									<th >APS</th>
									<th >Rujuk Rumah Sakit Lain</th>
									<th >Pasien Meninggal</th>

																		
								</tr>
								
							</thead>
							<tbody >
								<tr>
									
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>43</td>
									<td>30</td>
									<td>20</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>10</td>
									<td>23</td>
															
								</tr>
							</tbody>
						</table>
					</div>		

					<button class="btn btn-info" style="margin:-100px 0px 0px 10px;">Simpan ke Excel(.xls)</button> 	
				</div>  
			</div>
        </div>

        <div class="tab-pane" id="inap">        
        	<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">List Pasien Rawat Inap</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>

            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDT" id="allpasienri">
							<thead>
								<tr class="info">
									<th style="text-align:center;width:20px;">No.</th>
									<th>No Rekam Medis</th>
									<th>Nama Pasien</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Alamat</th>
									<th>Unit</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php  
									//echo json_encode($all_pasienactive);die;
									if (isset($all_pasienri) && !empty($all_pasienri)) {
										$i = 0;
										foreach ($all_pasienri as $value) {
											$tgl_lahir = date_create($value['tanggal_lahir']);
											echo '<tr>
													<td>'.(++$i).'</td>
													<td>'.$value['rm_id'].'</td>
													<td>'.$value['nama'].'</td>
													<td>'.$value['jenis_kelamin'].'</td>
													<td>'.$tgl_lahir->format('d F Y').'</td>
													<td>'.$value['alamat_skr'].'</td>
													<td>'.$value['nama_dept'].'</td>
													<td style="text-align:center"><a href="#detailRiwaJalan" class="viewdetailpasienrj" data-toggle="modal"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Detail"></i></a></td>										
												</tr>';
										}
									}
								?>
							</tbody>
						</table>

					</div>			
				</div>  
			</div>

			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Rekap Kunjungan Rawat Inap</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
	        			<label class="control-label col-md-1"> Tanggal</label>
	        			<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
							    <span class="input-group-addon">to</span>
							    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" />
							</div>
						</div>
	        		</div>
	        		<div class="form-group">
	        			<label class="control-label col-md-1"></label>
	        			<div class="col-md-3">
	        			</div>
	        			<div class="col-md-5">
	        			</div>
	        			<!-- <div class="pull-right" style="margin-right:20px">
		        			<div class="col-md-3">
		        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
		        			</div>
	        			</div> -->
	        		</div>
		        </form> 
	        </div>
	        <br>
			<hr class="garis"><br>
            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
							<thead>
								<tr class="info">
									<th>Tanggal</th>
									<th>Bersalin</th>
									<th>ICU</th>
									<th>NICU</th>
									<th>Rawat Dewasa</th>
									<th>Rawat Anak</th>
									<th>Penyakit Dalam</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>122</td>
									<td>Arbet</td>
									<td>P</td>
									<td>1212121</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
															
								</tr>
							</tbody>
						</table>
					</div>			

					<button class="btn btn-info" style="margin:-100px 0px 0px 10px;">Simpan ke Excel(.xls)</button> 
				</div>  
			</div>

			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Rekap Ruangan Unit Rawat Inap Per Kecamatan</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
	        			<label class="control-label col-md-2"> Bulan /Tahun</label>
	        			<div class="col-md-2">
	        					<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
	        			</div>
	        		</div>
	        		<div class="form-group">
	        			<label class="control-label col-md-1"></label>
	        			<div class="col-md-3">
	        			</div>
	        			<div class="col-md-5">
	        			</div>
	        			<!-- <div class="pull-right" style="margin-right:20px">
		        			<div class="col-md-3">
		        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
		        			</div>
	        			</div> -->
	        		</div>
		        </form> 
	        </div>
	        <br>
			<hr class="garis"><br>
            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
							<thead>
								<tr class="info">
									<th>Ruangan</th>
									<th>L</th>
									<th>P</th>
									<th>Kecamatan A</th>
									<th>Kecamatan A</th>
									<th>Kecamatan A</th>
									<th>Kecamatan A</th>
									<th>Total</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>122</td>
									<td>Arbet</td>
									<td>P</td>
									<td>1212121</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
															
								</tr>
							</tbody>
						</table>
					</div>			

					<button class="btn btn-info" style="margin:-100px 0px 0px 10px;">Simpan ke Excel(.xls)</button> 
				</div>  
			</div>
			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Rekap Ruangan Unit Rawat Inap Per Cara Bayar</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
	        			<label class="control-label col-md-2"> Bulan /Tahun</label>
	        			<div class="col-md-2">
	        					<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
	        			</div>
	        		</div>
	        		<div class="form-group">
	        			<label class="control-label col-md-1"></label>
	        			<div class="col-md-3">
	        			</div>
	        			<div class="col-md-5">
	        			</div>
	        			<!-- <div class="pull-right" style="margin-right:20px">
		        			<div class="col-md-3">
		        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
		        			</div>
	        			</div> -->
	        		</div>
		        </form> 
	        </div>
	        <br>
			<hr class="garis"><br>
            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
							<thead>
								<tr class="info">
									<th>Ruangan</th>
									<th>L</th>
									<th>P</th>
									<th>Umum</th>
									<th>BPJS</th>
									<th>Jamkesmas</th>
									<th>Asuransi</th>
									<th>Kontrak</th>
									<th>Gratis</th>
									<th>Lain-lain</th>
									<th>Total</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>122</td>
									<td>Arbet</td>
									<td>P</td>
									<td>1212121</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
									<td>Selasa</td>
															
								</tr>
							</tbody>
						</table>
					</div>			

					<button class="btn btn-info" style="margin:-100px 0px 0px 10px;">Simpan ke Excel(.xls)</button> 
				</div>  
			</div>

			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Rekap Sensus Rawat Inap</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
	        			<label class="control-label col-md-2"> Bulan /Tahun</label>
	        			<div class="col-md-2">
	        					<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
	        			</div>
	        		</div>
	        		<div class="form-group">
	        			<label class="control-label col-md-1"></label>
	        			<div class="col-md-3">
	        			</div>
	        			<div class="col-md-5">
	        			</div>
	        			<!-- <div class="pull-right" style="margin-right:20px">
		        			<div class="col-md-3">
		        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
		        			</div>
	        			</div> -->
	        		</div>
		        </form> 
	        </div>
	        <br>
			<hr class="garis"><br>
            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtamaScroll">
							<thead>
								<tr class="info">
									<th rowspan="2">Bulan</th>
									<th colspan="2">Pasien Baru</th>
									<th colspan="2">Pasien Lama</th>
									<th colspan="22">Unit Pengirim</th>
									<th colspan="6">Unit Rawat Inap</th>
									<th rowspan="2">Total</th>
									
								</tr>
								<tr class="info">
									
									<th>L</th>
									<th>P</th>
									<th>L</th>
									<th>P</th>
									<th>Umum</th>
									<th>THT</th>
									<th>Kulit Kelamin</th>
									<th>Kandungan</th>
									<th>KIA</th>
									<th>Mata</th>
									<th>Anak</th>
									<th>Dalam</th>
									<th>Bedah</th>
									<th>Gigi dan Mulut</th>
									<th>Bedah Tulang</th>
									<th>PPT</th>
									<th>Tumbuh Kembang</th>
									<th>Laktasi</th>
									<th>Paru</th>
									<th>Kardiologi</th>
									<th>Saraf</th>
									<th>Orthopedi</th>
									<th>Psikiatri</th>
									<th>Urologi</th>
									<th>Obstetri dan Generologi</th>
									<th>Gizi</th>
									<th>Bersalin</th>
									<th>ICU</th>
									<th>NICU</th>
									<th>Rawat Dewasa</th>
									<th>Rawat Anak</th>
									<th>Penyakit Dalam</th>
								</tr>
							</thead>
							<tbody >
								<tr>
									<td>12 Juli</td>
									<td>2</td>
									<td>3</td>
									<td>14</td>
									<td>2</td>
									<td>30</td>
									<td>20</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>43</td>
									<td>30</td>
									<td>20</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>43</td>
									<td>30</td>
									<td>20</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>10</td>
									<td>43</td>
									<td>43</td>
									<td>23</td>
									<td>43</td>
									<td>43</td>
															
								</tr>
							</tbody>
						</table>
					</div>		

					<button class="btn btn-info" style="margin:-100px 0px 0px 10px;">Simpan ke Excel(.xls)</button> 	
				</div>  
			</div>

			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Rekap Status Pulang Rawat Inap</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
	        	<form class="form-horizontal" role="form">
	        		<div class="form-group">
	        			<label class="control-label col-md-2"> Tanggal</label>
	        			<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
							</div>
						</div>
	        		</div>
	        		<div class="form-group">
	        			<label class="control-label col-md-2">Unit Rawat Inap</label>
	        			<div class="col-md-3">
	        				<select class="form-control">
	        					<option selected>Pilih</option>
	        					<option value="anak">Anak</option>
	        					<option value="umum">Umum</option>
	        					<option value="etc">etc</option>
	        				</select>
	        			</div>
	        			<div class="col-md-5">
	        				<button class="btn btn-danger">CARI</button>
	        			</div>
	        			<!-- <div class="pull-right" style="margin-right:20px">
		        			<div class="col-md-3">
		        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
		        			</div>
	        			</div> -->
	        		</div>
		        </form> 
	        </div>
	        <br>
			<hr class="garis"><br>
            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama display" cellspacing="0" width="100%">
							<thead>
								<tr class="info">
									<th >Tanggal</th>
									<th >Belum Pulang</th>
									<th >Pulang</th>
									<th >Pindah</th>
									<th >Rujuk RS Lain</th>
									<th >Meninggal</th>

																		
								</tr>
								
							</thead>
							<tbody >
								<tr>
									
									<td>20</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
									<td>10</td>
									<td>23</td>
															
								</tr>
							</tbody>
						</table>
					</div>		

					<button class="btn btn-info" style="margin:-100px 0px 0px 10px;">Simpan ke Excel(.xls)</button> 	
				</div>  
			</div>

			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Pasien Dipulangkan</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama display" cellspacing="0" width="100%">
							<thead>
								<tr class="info">
									<th >No</th>
									<th >Nama Pasien</th>
									<th >Unit</th>
									<th >Kamar</th>

																		
								</tr>
								
							</thead>
							<tbody >
								<tr>
									
									<td>20</td>
									<td>10</td>
									<td>23</td>
									<td>43</td>
															
								</tr>
							</tbody>
						</table>
					</div>			
				</div>  
			</div>
        </div>

         <div class="tab-pane" id="logistik">
	       	<div class="dropdown" id="bwinlogistik">
	            <div id="titleInformasi">Inventori</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div id="ibwinlogistik" class="tutupBiru">
				<div class="form-group" >
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
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
									<td style="text-align:center">1</td>
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
									<td style="text-align:center">2</td>
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
					<button class="btn btn-info" style="margin:-100px 0px 0px 10px;">Simpan ke Excel(.xls)</button> 
					
	        	</div>
	        	<br>
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
	        				<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
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
	 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
				      	</div>
					</div>
				</div>
			</div>
			
			<div class="dropdown" id="bwpermintaanlogistik" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Permintaan Logistik</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <div id="ibwpermintaanlogistik" class="tutupBiru">
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
        			
					<a href="#modalMintaLogBers" data-toggle="modal"><i class="fa fa-plus" style="margin-left :10px; font-size:11pt;">&nbsp;Tambah Barang</i></a>
					<div class="clearfix"></div>
					
					<div class="portlet box red">
						<div class="portlet-body" style="margin: 10px 10px 10px 10px">
						
							<table class="table table-striped table-bordered table-hover table-responsive" id="tabApo">
								<thead>
									<tr class="info" >
										<th width="20"> No. </th>
										<th> Nama Barang </th>
										<th> Satuan </th>
										<th> Merek </th>
										<th> Stok Unit </th>
										<th width="200"> Jumlah Diminta </th>
										<th width="80"> Action </th>			
									</tr>
								</thead>
								
								<tbody id="addinputMintaLog">
										<!-- <tr>
											<td colspan="6" style="text-align:center" id="dataKosong">DATA KOSONG</td>												
										</tr> -->
								</tbody>
							</table>
						</div>
						<br>
						<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
						<div style="margin-left:1100px">
							<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
								<button class="btn btn-warning">RESET</button> &nbsp;
								<button class="btn btn-success">SIMPAN</button> 
							</span>
						</div>
						<br>
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
										<table class="table table-striped table-bordered table-hover" id="tabelSearchDiagnosa">
											<thead>
												<tr class="info">
													<th>Nama Barang</th>
													<th>Satuan</th>
													<th>Merek</th>
													<th>Tgl Kadaluarsa</th>
													<th width="10%">Pilih</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Paramex</td>
													<td>Paramex</td>
													<td>Paramex</td>
													<td>Paramex</td>
													<td style="text-align:center"><a href="#" class="addNewLog"><i class="glyphicon glyphicon-check"></i></a></td>
												</tr>
												<tr>
													<td>Panadol</td>
													<td>Paramex</td>
													<td>Paramex</td>
													<td>Paramex</td>
													<td style="text-align:center"><a href="#" class="addNewLog"><i class="glyphicon glyphicon-check"></i></a></td>
												</tr>

											</tbody>
										</table>												
									</div>
								</div>
		        			</div>
		        			<div class="modal-footer">
		 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
					      	</div>
						</div>
					</div>
				</div>
				<br>
			</div>	
			<br>    
	    </div>


    </div>

</div>

<script type="text/javascript">
	$(document).ready( function(){

		$(".smpPA").hide();
		
		$(".edPA").click(function(){
			$(".smpPA").show();
			$(".edPA").hide();
			$(".detPA").prop('disabled',false);
			
		});

		$(".smpPA").click(function(){
			$(".edPA").show();
			$(".smpPA").hide();
			$(".detPA").prop('disabled',true);
			
		});
		$("#bwpermintaanlogistik").click(function(){
			$("#ibwpermintaanlogistik").slideToggle();
			
		});
		$("#bwinlogistik").click(function(){
			$("#ibwinlogistik").slideToggle();
			
		});
		
	});
</script>