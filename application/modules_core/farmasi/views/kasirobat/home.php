
<div class="title">
	PENJUALAN OBAT
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>farmasi/homekasirobat">Kasir Obat</a>
			
		</li>
		
</div>

 
<div class="navigation" style="margin-left: 10px;" >
	<div style="padding-top:10px"></div>
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#tebus" data-toggle="tab">Tebus Resep</a></li>
	    <li><a href="#bayar" data-toggle="tab">Bayar Resep</a></li>
	</ul>
	
	<div id="my-tab-content" class="tab-content">
		<div class="tab-pane active" id="tebus">					
			<div class="dropdown" style="margin-left:10px;width:98.5%;">
	            <div id="titleInformasi" style=" color:white">Pencarian Resep Penjualan Obat</div>
	            <div id="btnBawahDataKaryawan" class="btnBawah" style="color:white"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
			</div>
			
			<br>
			<div class="informasi" id="infoDataKaryawan" style="margin-left:50px;margin-right:30px;">
				<form class="form-horizontal" role="form" method="post" id="submitcariresep">
					<div class="form-group">
						<table id="example" class="table table-striped table-bordered " cellspacing="0" style="margin-left:0px;" width="99.9%">
					        <thead >
					            <tr class="info">
					                <th>Resep#</th>
					                <th>No RM</th>
					                <th>Nama Pasien</th>
					                <th>Tanggal Resep</th> 
					                <th>Action</th>        
					            </tr>
					        </thead>
					 
					        <tbody>
					        	<tr>
					        		<td><input type="text" class="form-control" id="resepKasir" name="resepKasir" placeholder="contoh: 1349"/>
									</td>
					        		<td><input type="text" class="form-control" id="noRMKasir" name="noRMKasir" placeholder="contoh: 2010032302"/>
									</td></td>
					        		<td><input type="text" class="form-control" id="namaPsKasir" name="namaPsKasir" placeholder="contoh: Arya Beth"/>
									</td></td>
					        		<td><input type="text" id="tglKasir" style="cursor:pointer;" class="form-control calder" data-provide="datepicker" data-date-format="dd/mm/yyyy" name="tglKadaluarsaDet" placeholder="contoh : 08/03/2015">
									</td></td>
					        		<td style="text-align:center;"><button id="cariResep" type="submit" class="btn btn-info search-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
					        		<button class="btn btn-warning filter-cancel" type="reset"><i class="fa fa-times"></i> Reset</button></td>
					        	</tr>
					        </tbody>
					    </table>
					</div>
				</form>
				<hr class="garis">
				<br>
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<table class="table table-striped table-bordered tableDTUtamaScroll" id="tabelsearchresep" cellspacing="0" style="margin-left:0px;max-width:100%;font-size:99%;">
					        <thead >
					            <tr class="info">
					                <th>Resep#</th>
					                <th>No RM</th>
					                <th>Nama Pasien</th>
					                <th>Kunjungan</th>
					                <th>Tipe</th>
					                <th>Tanggal Resep</th> 
					                <th>Resep</th> 
					                <th>Status</th> 
					                <th>Action</th>        
					            </tr>
					        </thead>
					 
					        <tbody>				        	
					        </tbody>
					    </table>
						
					</div>
				</form>
			</div>
		</div>
		<div class="tab-pane" id="bayar">					
			<div class="dropdown" style="margin-left:10px;width:98.5%;">
	            <div id="titleInformasi" style=" color:white">Pembayaran Resep Penjualan Obat</div>
	            <div id="btnBawahDataKaryawan" class="btnBawah" style="color:white"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
			</div>
			
			<br>
			<div class="informasi" id="infoDataKaryawan" style="margin-left:50px;margin-right:30px;">
				<form class="form-horizontal" role="form" method="post" id="submitcariresepbayar">
					<div class="form-group">
						<table id="example" class="table table-striped table-bordered " cellspacing="0" style="margin-left:0px;" width="99.9%">
					        <thead >
					            <tr class="info">
					                <th>Resep#</th>
					                <th>No RM</th>
					                <th>Nama Pasien</th>
					                <th>Tanggal Resep</th> 
					                <th>Action</th>        
					            </tr>
					        </thead>
					 
					        <tbody>
					        	<tr>
					        		<td><input type="text" class="form-control" id="resepKasirbayar" name="resepKasir" placeholder="contoh: 1349"/>
									</td>
					        		<td><input type="text" class="form-control" id="noRMKasirbayar" name="noRMKasir" placeholder="contoh: 2010032302"/>
									</td></td>
					        		<td><input type="text" class="form-control" id="namaPsKasirbayar" name="namaPsKasir" placeholder="contoh: Arya Beth"/>
									</td></td>
					        		<td><input type="text" id="tglKasirbayar" style="cursor:pointer;" class="form-control calder" data-provide="datepicker" data-date-format="dd/mm/yyyy" name="tglKadaluarsaDet" placeholder="contoh : 08/03/2015">
									</td></td>
					        		<td style="text-align:center;"><button id="cariResepbayar" type="submit" class="btn btn-info search-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
					        		<button class="btn btn-warning filter-cancel" type="reset"><i class="fa fa-times"></i> Reset</button></td>
					        	</tr>
					        </tbody>
					    </table>
					</div>
				</form>
				<hr class="garis">
				<br>
				<form class="form-horizontal" role="form">
					<div class="form-group" style="overflow-x:scroll">
						<table class="table table-striped table-bordered tableDTUtama" id="tabelsearchresepbayar" cellspacing="0" style="margin-left:0px;min-width:100%;font-size:99%;overflow-x:scroll">
					        <thead >
					            <tr class="info">
					                <th>Resep#</th>
					                <th>No RM</th>
					                <th>Nama Pasien</th>
					                <th>Kunjungan</th>
					                <th>Tipe</th>
					                <th>Tanggal Resep</th> 
					                <th>Resep</th> 
					                <th>Status</th> 
					                <th>Action</th>        
					            </tr>
					        </thead>
					 
					        <tbody>				        	
					        </tbody>
					    </table>
						
					</div>
				</form>
			</div>
		</div>
	</div>

</div>

							