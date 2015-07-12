<div class="title">NICU</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>nicu/homenicu">NICU</a>
	</li>
</div>
<div class="navigation" style="margin-left: 10px" >
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#list" data-toggle="tab">List Pasien Bersalin</a></li>
	    <li><a href="#kamar" data-toggle="tab">Data Kamar</a></li>
	    <li><a href="#farmasi" data-toggle="tab">Farmasi dan Logistik</a></li>
	    <li><a href="#laporan" data-toggle="tab">Laporan</a></li>
	    <li><a href="#master" data-toggle="tab">Master</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">
    	<div class="tab-pane active" id="list">
        	<form method="post" id="search_pasien">
            	<div class="search">
					<label class="control-label col-md-3">Nama Pasien / Rekam Medik <span class="required" style="color : red">* </span></label>
					<div class="col-md-4">		
							<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
			        </div>
			        <button type="submit" class="btn btn-danger">Cari</button>
				</div>
			</form>	<!-- END FORM-->			
			<!-- END search pasien STATES-->
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<br>
		<br>
		<hr class="garis">
		<br>
		<label class=" col-md-1" style="margin-right:-60px; padding-top:7px;">Filter :</label>
		<div class="col-md-3" style="margin-right:-20px; margin-top:2px">
			<div class="input-daterange input-group" id="datepicker">
			    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
			    <span class="input-group-addon">to</span>
			    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" />
			</div>
		</div>
		<br><br>
		<div class="portlet box red">
			<div class="portlet-title">
				<label class="control-label col-md-3">Daftar Rekam Medik</label>
			</div>
			<div class="portlet-body" style="margin: 0px 10px 0px 10px">
				<table class="table table-striped table-bordered table-hover table-responsive">
					<thead>
						<tr class="info">
							<th> Nomor Rekam Medis </th>
							<th> Nama Lengkap </th>
							<th> Jenis Kelamin </th>
							<th> Tanggal Lahir </th>
							<th> Alamat Tinggal </th>
							<th> Identitas </th>
							<th> Periksa</th>
						</tr>
					</thead>
					<tbody id="t_body">

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
