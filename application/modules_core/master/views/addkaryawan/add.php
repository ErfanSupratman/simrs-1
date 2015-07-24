
<div class="title">
	TAMBAH KARYAWAN
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>master/homedatakaryawan">Tambah Karyawan</a>
			<div class="pull-right" style="margin-top:-7px;margin-right:7px;">
				<a href="http://localhost/SIMRS_ARYA/master/homedatakaryawan" class="btn btn-danger pull-right">Kembali</a>		

			</div>
		</li>
		
		
	
</div>

 
<div class="navigation" style="background: #A7FFAE; min-height:800px;border-radius:5px; margin-left: 10px;margin-right: 10px;" >
		<div style="padding-top:10px"></div>
						
		<div class="dropdown" style="margin-left:10px;width:98.5%;">
				            <div id="titleInformasi" style=" color:white">Informasi Umum</div>
				            <div id="btnBawahInfoKaryawan" class="btnBawah" style="color:white"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
		</div>
		
		<br>
		<div class="informasi" id="infoInfoKaryawan" style="margin-left:40px;">
			<form class="form-horizontal" role="form">
					<div class="form-group">
										<div class="col-md-2">NIP</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="nipPegawai" name="nipPegawai" placeholder="NIP">	
						        		</div>
					</div>
					<div class="form-group">
										<div class="col-md-2">Nama</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="namaPegawai" name="namaPegawai" placeholder="Nama Pegawai" >	
						        		</div>
					</div>
					<!-- Select to -->
					<div class="form-group">
					    			 	<div class="col-md-2">Jabatan</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="umurPas" name="umurPas" placeholder="Umur" disabled>	
						        		</div>
					</div>
					<div class="form-group">
					    			 	<div class="col-md-2">Departemen</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="umurPas" name="umurPas" placeholder="Umur" disabled>	
						        		</div>
					</div>

					<div class="form-group">
					    			 	<div class="col-md-2">Spesialis</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="umurPas" name="umurPas" placeholder="Umur" disabled>	
						        		</div>
					</div>
				
			</form>

		</div>

		<div class="dropdown" style="margin-left:10px;width:98.5%;">
				            <div id="titleInformasi" style=" color:white">Informasi Akun</div>
				            <div id="btnBawahInfoAkunKaryawan" class="btnBawah" style="color:white"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
		</div>
		
		<br>
		<div class="informasi" id="infoInfoAkunKaryawan" style="margin-left:40px;">
			<form class="form-horizontal" role="form">
			</form>
		</div>
</div>

							