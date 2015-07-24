<div class="title">
	KASIR TINDAKAN
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>kasirtindakan/homekasirtindakan">Kasir Tindakan</a>
	</li>
</div>

<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#pasien" data-toggle="tab">Pasien Biasa</a></li>
	    <li><a href="#aps" data-toggle="tab">Pasien APS</a></li>
	    <li><a href="#bpjs" data-toggle="tab">Pasien BPJS</a></li>
	</ul>
	<div id="my-tab-content" class="tab-content">
		
		<div class="tab-pane active" id="pasien">
			<form method="POST" id="search_submit">
		       	<div class="search">
					<label class="control-label col-md-3">
						<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
					</label>
					<div class="col-md-4">		
						<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
			        </div>
			        <button type="submit" class="btn btn-danger">Cari</button>
				</div>	
			</form>
			<br>
			<hr class="garis"><br>

			<div class="portlet box red">
				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive">
						<thead>
							<tr class="info">
								<th style="text-align:center;width:20px;">No.</th>
								<th>Unit</th>
								<th>No RM</th>
								<th>No Visit</th>
								<th>Nama Pasien</th>
								<th>Jenis Kelamin</th>
								<th>Status</th>
								<th style="text-align:center:width:25px;">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Bersalin</td>
								<td>1212121</td>
								<td>32323</td>										
								<td>Selena</td>
								<td>P</td>
								<td>Belum Dibayar</td>
								<td style="text-align:center">
									<a href="<?php echo base_url() ?>kasirtindakan/detailpasienbiasa" ><i class="glyphicon glyphicon-ok" data-toggle="tooltip" data-placement="top" title="Proses"></i></a>
								</td>										
							</tr>
						</tbody>
					</table>
				</div>			
			</div> 
    	</div>
    	
    	<div class="tab-pane" id="aps">
    		<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Detail Pasien APS</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
            	<form class="form-horizontal" role="form">
            		<div class="form-group">
            			<label class="control-label col-md-2">No Nota</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="nmrNotaKasirAPS" name="nmrNotaKasirAPS" placeholder="Nomor Nota">	
            			</div>
            			<div class="col-md-1"></div>
            			<label class="control-label col-md-2">Cara Bayar</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="crBayarNotaKasirAPS" name="crBayarNotaKasirAPS" placeholder="Cara Bayar">	
            			</div>
            		</div>
            		<div class="form-group">
            			<label class="control-label col-md-2">Tanggal</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="tglNotaKasirAPS" name="tglNotaKasirAPS" data-provide="datepicker">	
            			</div>
            			<div class="col-md-1"></div>
            			<label class="control-label col-md-2">Nama Asuransi</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="nmAsuransiNotaKasirAPS" name="nmAsuransiNotaKasirAPS" placeholder="Nama Asuransi">	
            			</div>
            		</div>
            		<div class="form-group">
            			<label class="control-label col-md-2">No RM</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="nmrRMNotaKasirAPS" name="nmrRMNotaKasirAPS" placeholder="Nomor RM">	
            			</div>
            			<div class="col-md-1"></div>
            			<label class="control-label col-md-2">No Asuransi</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="noAsuNotaKasirAPS" name="noAsuNotaKasirAPS" placeholder="Nomor Asuransi">	
            			</div>
            		</div>
            		<div class="form-group">
            			<label class="control-label col-md-2">Nama Pasien</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="nmPasienNotaKasirAPS" name="nmPasienNotaKasirAPS" placeholder="Nama Pasien" readonly>	
            			</div>
            			<div class="col-md-1"></div>
            			<label class="control-label col-md-2">Nama Perusahaan</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="nmPrusahaanNotaKasirAPS" name="nmPrusahaanNotaKasirAPS" placeholder="Nama Perusahaan">	
            			</div>
            		</div>
            		<div class="form-group">
            			<label class="control-label col-md-2">Alamat Pasien</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="almPasienNotaKasirAPS" name="almPasienNotaKasirAPS" placeholder="Alamat Pasien" readonly>	
            			</div>
            			<div class="col-md-1"></div>
            			<label class="control-label col-md-2">Deposit</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="depoNotaKasirAPS" name="depoNotaKasirAPS" placeholder="Deposit">	
            			</div>
            		</div>
            		<div class="form-group">
            			<label class="control-label col-md-2">Kelas Perawatan</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="klsPasienNotaKasirAPS" name="klsPasienNotaKasirAPS" placeholder="Kelas Perawatan">	
            			</div>
            			<div class="col-md-1"></div>
            			<label class="control-label col-md-2"></label>
            			<div class="col-md-3">
            				<button class="btn btn-warning">RESET</button>
            				<a href="<?php echo base_url() ?>kasirtindakan/detailpasienaps" style="color:white" class="btn btn-success">
            				PROSES</a>
            			</div>
            		</div>
            	</form>
            </div>
    	</div>

    	<div class="tab-pane" id="bpjs">
    		<form method="POST" id="search_submit_bpjs">
		       	<div class="search">
					<label class="control-label col-md-3">
						<i class="fa fa-search">&nbsp;&nbsp;</i>Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
					</label>
					<div class="col-md-4">		
						<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien BPJS" autofocus>
			        </div>
			        <button type="submit" class="btn btn-danger">Cari</button>
				</div>	
			</form>
			<br>
			<hr class="garis"><br>

			<div class="portlet box red">
				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive">
						<thead>
							<tr class="info">
								<th style="text-align:center;width:20px;">No.</th>
								<th>Unit</th>
								<th>No RM</th>
								<th>No Visit</th>
								<th>Nama Pasien</th>
								<th>Jenis Kelamin</th>
								<th>Status</th>
								<th style="text-align:center:width:25px;">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Laboratorium</td>
								<td>1212121</td>
								<td>32323</td>										
								<td>Alex</td>
								<td>L</td>
								<td>Sudah Dibayar</td>
								<td style="text-align:center">
									<a href="<?php echo base_url() ?>kasirtindakan/detailpasienbpjs" ><i class="glyphicon glyphicon-ok" data-toggle="tooltip" data-placement="top" title="Proses"></i></a>
								</td>										
							</tr>
						</tbody>
					</table>
				</div>			
			</div>
    	</div>    
    </div>
</div>

