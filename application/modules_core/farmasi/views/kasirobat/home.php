
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

 
<div class="navigation" style="background: #A7FFAE; min-height:800px;border-radius:5px; margin-left: 10px;margin-right: 10px;" >
		<div style="padding-top:10px"></div>
						
		<div class="dropdown" style="margin-left:10px;width:98.5%;">
            <div id="titleInformasi" style=" color:white">Pencarian Resep Penjualan Obat</div>
            <div id="btnBawahDataKaryawan" class="btnBawah" style="color:white"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
		</div>
		
		<br>
		<div class="informasi" id="infoDataKaryawan" style="margin-left:50px;margin-right:30px;">
			<form class="form-horizontal" role="form">
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
				        		<td><input type="text" class="form-control" data-provide="datepicker" id="tglKasir" name="tglKasir" placeholder="contoh: 21/06/93"/>
								</td></td>
				        		<td style="text-align:center;"><button id="cariResep" class="btn btn-info search-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
				        		<a href="#" id="reset-pencarian" class="btn btn-warning filter-cancel"><i class="fa fa-times"></i> Reset</a></td>
				        	</tr>
				        	
				        </tbody>
				    </table>

				</div>
						<hr class="garis">
						<br>

				<div class="form-group">
					<table class="table table-striped table-bordered " cellspacing="0" style="margin-left:0px;" width="99.9%">
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
				        	<tr>
				        		<td>Coba</td>
				        		<td>Coba</td>
				        		<td>Coba</td>
				        		<td>Coba</td>
				        		<td>Coba</td>
				        		<td>Coba</td>
				        		<td>Coba</td>
				        		<td>Coba</td>
				        		<td style="text-align:center;"><div class="actions"><a href="<?php echo base_url();?>farmasi/homepenjualanobat" class="btn btn-success"><i class="fa fa-check"></i></a></div></td>
				        	</tr>
				        	
				        </tbody>
				    </table>
					
				</div>
			</form>
		</div>


</div>

							