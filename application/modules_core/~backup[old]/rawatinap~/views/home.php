
<div class="title">
	RAWAT INAP
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>rawatinap/homerawatinap">Poliklinik Rawat Inap</a>
		</li>
	
</div>
<div class="navigation" style="margin-left: 10px" >
 <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
    <li class="active"><a href="#list" data-toggle="tab">List Pasien Rawat Inap</a></li>
    <li><a href="#kamar" data-toggle="tab">Data Kamar</a></li>
    <li><a href="#farmasi" data-toggle="tab">Farmasi dan Logistik</a></li>
    <li><a href="#laporan" data-toggle="tab">Laporan</a></li>
    <li><a href="#master" data-toggle="tab">Master</a></li>
</ul>

<div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="list">
            	<div class="search">

				<label class="control-label col-md-3">Nama Pasien / Rekam Medik <span class="required" style="color : red">
							* </span>
				</label>
				<div class="col-md-4">		
						<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
		        </div>
		        <button type="submit" class="btn btn-danger">Cari</button>
				</div>	
		

				<!-- END FORM-->
			
		<!-- END search pasien STATES-->


		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<br>
		<br>
		<hr class="garis">
		<br>
		<div class="portlet box red">
			<div class="portlet-title">
				<label class="control-label col-md-3">Daftar Rekam Medik
				</label>
			</div>
			<div class="portlet-body" style="margin: 0px 10px 0px 10px">

				<table class="table table-striped table-bordered table-hover">
				<thead>
				<tr class="info">
					<th>
						 Nama Lengkap
					</th>
					<th>
						 Jenis Kelamin
					</th>
					<th>
						 Tanggal Lahir
					</th>
					<th>
						 Alamat Tinggal
					</th>
					<th>
						 Identitas
					</th>
					<th>
						Tindakan
					</th>
				</tr>
				</thead>
				<tbody>
				<tr>
				<td>Arya</td>

				<td>Laki</td>
				<td>30 Mei 1994</td>										

				<td>Bali</td>

				<td>KTP</td>
						<td style="text-align:center">
							<a href="<?php echo base_url() ?>rawatinap/rawatinapdetail" ><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah tindakan"></i></a>
						</td>										
					</tr>
					<tr>
				<td>jems</td>

				<td>Laki</td>
				<td>30 Mei 1994</td>										

				<td>NTT</td>

				<td>KTP</td>
						<td style="text-align:center">
							
							<a href="<?php echo base_url() ?>rawatinap/rawatinapdetail" ><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah tindakan"></i></a>
							
						</td>										
					</tr>
				</tbody>
				</table>
			</div>
			
		</div>
		
      
        </div>
        <div class="tab-pane" id="kamar">        
        </div>
        <div class="tab-pane" id="farmasi">        
        </div>
        <div class="tab-pane" id="laporan">        
        </div>
        <div class="tab-pane" id="master">        
        </div>
    </div>

</div>

				<!-- BEGIN FORM--><!-- 
				<form action="#" class="form-horizontal" id="searchPasien">
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">#Rekam Medik / Nama Pasien <span class="required">
							* </span>
							</label>
							<div class="col-md-4">
								<input type="text" id="searchPasienValue" name="pasien_id" class="form-control" placeholder="Masukkan Nomor RM atau Nama Lengkap Pasien"/>
							</div>
								<button type="submit" id="tombolCari" class="btn green submit">Submit</button>
								<button type="button" class="btn red">Clear Pencarian</button>
						</div>
					</div>
					 -->
											