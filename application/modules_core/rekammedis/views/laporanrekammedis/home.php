
<div class="title">
	LAPORAN REKAM MEDIS 
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
			<a href="<?php echo base_url() ?>laporanrekammedis/home">Laporan Rekam Medis</a>
			
		</li>
	
</div>
<div class="navigation" style="background: #A7FFAE; min-height:800px;border-radius:5px; margin-left: 10px;margin-right: 10px;" >
 			<div style="padding-top:10px"></div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">10 Besar Penyakit</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
				        <div class="form-group">
		        			<label class="control-label col-md-2">Unit</label>
		        			<div class="col-md-2">
		        				<select class="form-control">
		        					<option selected>Pilih</option>
		        					<option value="anak">Anak</option>
		        					<option value="umum">Umum</option>
		        					<option value="etc">etc</option>
		        				</select>
		        			</div>
		        		</div>
		        		<div class="form-group">
		        			<label class="control-label col-md-2"> Bulan / Tahun</label>
		        			<div class="col-md-2">
								<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
							</div>
							
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		
		        		</div>
	        		</div>
				</form>
			</div>			
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Sensus Harian Poliklinik</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
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
		        			<label class="control-label col-md-2">Unit</label>
		        			<div class="col-md-2">
		        				<select class="form-control">
		        					<option selected>Pilih</option>
		        					<option value="anak">Anak</option>
		        					<option value="umum">Umum</option>
		        					<option value="etc">etc</option>
		        				</select>
		        			</div>
		        			<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
		        		
	        		</div>
				</form>
			</div>

			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Sensus Harian IGD</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
				        <div class="form-group">
		        			<label class="control-label col-md-2"> Tanggal</label>
		        			<div class="col-md-3">
								<div class="input-daterange input-group" id="datepicker">
								    <input type="text" style="cursor:pointer;" class="form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
								    <span class="input-group-addon">to</span>
								    <input type="text" style="cursor:pointer;" class="form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" />
								</div>
							</div>

		        			<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
		        		
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Sensus Bulanan Poliklinik</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
				        
		        		<div  class="form-group">
		        			<label class="control-label col-md-2">Unit</label>
		        			<div class="col-md-2">
		        				<select class="form-control">
		        					<option selected>Pilih</option>
		        					<option value="anak">Anak</option>
		        					<option value="umum">Umum</option>
		        					<option value="etc">etc</option>
		        				</select>
		        			</div>
		        			
		        		</div>
		        		<div class="form-group">
		        			<label class="control-label col-md-2"> Bulan / Tahun</label>
							<div class="col-md-2">
								<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
							</div>
							
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Sensus Bulanan IGD</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
				        
		        		<div class="form-group">
		        			<label class="control-label col-md-2"> Bulan / Tahun</label>
		        			<div class="col-md-2">
								<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
							</div>
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Sensus Tahunan Poli</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
			        	<div class="form-group">
							<label class="control-label col-md-2">Tahun</label>
							<div class="col-md-1">
								<input type="text" data-date-format="yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="2" data-provide="datepicker" readonly placeholder="<?php echo date("Y");?>" />
							</div>
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
		        	</div>
	        		
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Sensus Tahunan IGD</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >

		        		<div class="form-group">
		        			
							<label class="control-label col-md-2">Tahun</label>
							<div class="col-md-1">
								<input type="text" data-date-format="yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="2" data-provide="datepicker" readonly placeholder="<?php echo date("Y");?>" />
							</div>
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Rekapitulasi Pasien Rawat Inap per Kecamatan</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
				        <div class="form-group">
		        			<label class="control-label col-md-2">Unit</label>
		        			<div class="col-md-2">
		        				<select class="form-control">
		        					<option selected>Pilih</option>
		        					<option value="anak">Anak</option>
		        					<option value="umum">Umum</option>
		        					<option value="etc">etc</option>
		        				</select>
		        			</div>
		        			
		        		</div>
		        		<div class="form-group">
		        			<label class="control-label col-md-2"> Bulan / Tahun</label>
		        			<div class="col-md-2">
								<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
							</div>
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Sensus Bulanan Pasien Rawat Inap</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
				        
		        		<div class="form-group">
		        			<label class="control-label col-md-2">Unit</label>
		        			<div class="col-md-2">
		        				<select class="form-control">
		        					<option selected>Pilih</option>
		        					<option value="anak">Anak</option>
		        					<option value="umum">Umum</option>
		        					<option value="etc">etc</option>
		        				</select>
		        			</div>
		        			
		        		</div>
		        		<div class="form-group">
		        			<label class="control-label col-md-2"> Bulan / Tahun</label>
		        			<div class="col-md-2">
								<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
							</div>
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Bulanan Pasien Rawat Inap</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
				        
		        		<div class="form-group">
		        			<label class="control-label col-md-2">Unit</label>
		        			<div class="col-md-2">
		        				<select class="form-control">
		        					<option selected>Pilih</option>
		        					<option value="anak">Anak</option>
		        					<option value="umum">Umum</option>
		        					<option value="etc">etc</option>
		        				</select>
		        			</div>
		        			
		        		</div>
		        		<div class="form-group">
		        			<label class="control-label col-md-2"> Bulan / Tahun</label>
		        			<div class="col-md-2">
								<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
							</div>
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>

		        		</div>
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Jenis Penyakit</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
				        
		        		<div class="form-group">
		        			<label class="control-label col-md-2">Unit</label>
		        			<div class="col-md-2">
		        				<select class="form-control">
		        					<option selected>Pilih</option>
		        					<option value="anak">Anak</option>
		        					<option value="umum">Umum</option>
		        					<option value="etc">etc</option>
		        				</select>
		        			</div>
		        			
		        		</div>
		        		<div class="form-group">
		        			<label class="control-label col-md-2"> Bulan / Tahun</label>
		        			<div class="col-md-2">
								<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
							</div>
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Sensus Harian Pasien Rawat Inap</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
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
		        			<label class="control-label col-md-2">Unit</label>
		        			<div class="col-md-2">
		        				<select class="form-control">
		        					<option selected>Pilih</option>
		        					<option value="anak">Anak</option>
		        					<option value="umum">Umum</option>
		        					<option value="etc">etc</option>
		        				</select>
		        			</div>
		        			<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
		        		
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Kegiatan Kebidanan</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
				        
		        		<div class="form-group">
		        			
							<label class="control-label col-md-2">Tahun</label>
							<div class="col-md-1">
								<input type="text" data-date-format="yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="2" data-provide="datepicker" readonly placeholder="<?php echo date("Y");?>" />
							</div>
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Kegiatan Perinatologi</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
				        
		        		<div class="form-group">
		        			
							<label class="control-label col-md-2">Tahun</label>
							<div class="col-md-1">
								<input type="text" data-date-format="yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="2" data-provide="datepicker" readonly placeholder="<?php echo date("Y");?>" />
							</div>
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Buku Register Pasien Rawat Inap</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
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
		        			<label class="control-label col-md-2">Unit</label>
		        			<div class="col-md-2">
		        				<select class="form-control">
		        					<option selected>Pilih</option>
		        					<option value="anak">Anak</option>
		        					<option value="umum">Umum</option>
		        					<option value="etc">etc</option>
		        				</select>
		        			</div>
		        			<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
		        		
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Ketenagaan</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
				        
		        		<div class="form-group">
		        			<label class="control-label col-md-2"> Bulan / Tahun</label>
		        			<div class="col-md-2">
								<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
							</div>
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Radiologi</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
				       
		        		<div class="form-group">
		        			<label class="control-label col-md-2"> Bulan / Tahun</label>
		        			<div class="col-md-2">
								<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
							</div>
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
	        		</div>
				</form>
			</div>
			<div class="informasi" style="margin-left:30px;">
	        	<div id="titleInformasi" style="margin-bottom:-30px;">Laporan Laboratorium</div>
	        	<form class="form-horizontal laporan" style="border: solid 3px #50BFF9;border-top-width:30px;margin-right:40px;" role="form">
			        <div class="tabelinformasi" >
				        
		        		<div class="form-group">
		        			<label class="control-label col-md-2"> Bulan / Tahun</label>
		        			<div class="col-md-2">
								<input type="text" data-date-format="mm/yyyy" style="cursor:pointer;" class="form-control" name="start" id="monthonly" data-date-min-view-mode="1" data-provide="datepicker" readonly placeholder="<?php echo date("m/Y");?>" />
							</div>
							<div class="pull-right" style="margin-right:20px">
			        			<div class="col-md-3">
			        				<button class="btn btn-info">Simpan ke Excel(.xls)</button>
			        			</div>
		        			</div>
		        		</div>
	        		</div>
				</form>
			</div>
	        <br>
</div>
			