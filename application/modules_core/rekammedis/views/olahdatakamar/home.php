
<div class="title">
	REKAM MEDIS OLAH DATA KAMAR
	<!-- <div class="pull-right" style="font-size:20px;margin-top:10px;border-radius: 5px;background:white">

		INPATIENT : 
		<label id="inpatient" name="inpatient" style="color:green">524</label> --
		OUTPATIENT :
		<label id="outpatient" name="outpatient" style="color:blue">1000</label> --
		EMERGENCY :
		<label id="emergency" name="emergency" style="color:red">524</label>
	</div> -->
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>olahdatakamar/home">Rekam Medis Olah Data Kamar</a>
			
		</li>
	
</div>
<div class="navigation" style="background: #A7FFAE; min-height:800px;border-radius:5px; margin-left: 10px;margin-right: 10px;" >
 			<div style="padding-top:10px"></div>
						
			<div class="dropdown" style="margin-left:10px;width:98.5%;">
	            <div id="titleInformasi" style=" color:white">Data Kamar Harian</div>
	            <div id="btnBawahDataKaryawan" class="btnBawah" style="color:white"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
			</div>
			<div class="informasi">
			<form class="form-horizontal" role="form">
	        		<div class="form-group">
	        			<label class="control-label col-md-1"> Tanggal</label>
	        			<div class="col-md-3">
							<div class="input-daterange input-group" id="datepicker">
							    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
							</div>
						</div>
	        		</div>
	        		<div class="form-group">
	        			<label class="control-label col-md-1">Unit</label>
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
	        <br>
	        </div>
			<hr class="garis"><br>
            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama display" cellspacing="0" width="100%">
							<thead>
								<tr class="info">
									<th >No</th>
									<th >Unit</th>
									<th >Nama Kamar</th>
									<th >Jumlah Bed</th>
									<th >Tersedia</th>
									<th >Terisi</th>

																		
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

			<div class="dropdown" style="margin-left:10px;width:98.5%;">
	            <div id="titleInformasi" style=" color:white">Data Kamar Bulanan</div>
	            <div id="btnBawahDataKaryawan" class="btnBawah" style="color:white"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
			</div>
			<div class="informasi">
			<form class="form-horizontal" role="form">
	        		<div class="form-group">
	        			<label class="control-label col-md-2"> Bulan / Tahun</label>
	        			<div class="col-md-2">
	        					<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1"  data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
	        			</div>
	        		</div>
	        		<div class="form-group">
	        			<label class="control-label col-md-2">Unit</label>
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
	        <br>
	        </div>
			<hr class="garis"><br>
            <div class="tabelinformasi">
		       	<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama display" cellspacing="0" width="100%">
							<thead>
								<tr class="info">
									<th >No</th>
									<th >Unit</th>
									<th >Nama Kamar</th>
									<th >Jumlah Bed</th>
									<th >Tersedia</th>
									<th >Terisi</th>

																		
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
</div>
			