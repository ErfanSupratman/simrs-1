
<div class="title">
	DATA KARYAWAN
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>master/homedatakaryawan">Data Karyawan</a>
			<div class="pull-right" style="margin-top:-7px;margin-right:7px;">
				<a href="http://localhost/SIMRS_ARYA/master/addkaryawan" class="btn btn-success pull-right">Tambah</a>
				<div class="btn-group pull-right">
						<button type="button" class="btn grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
						DOKTER&nbsp;<i class="fa fa-angle-down"></i>
						</button>								
					<ul class="dropdown-menu pull-right" role="menu">
						<li>
							<a href="#">SEMUA JABATAN </a>
						</li>
						<li>
							<a href="#">DOKTER </a>
						</li>
						<li>
							<a href="#">ASISTEN DOKTER </a>
						</li>
						<li>
							<a href="#">PERAWAT </a>
						</li>
						<li>
							<a href="#">LABORAT </a>
						</li>
						<li>
							<a href="#">APOTEKER </a>
						</li>
						<li>
							<a href="#">PETUGAS ADMINISTRASI </a>
						</li>
					</ul>
				</div>		

			</div>
		</li>
		
		
	
</div>

 
<div class="navigation" style="background: #A7FFAE; min-height:800px;border-radius:5px; margin-left: 10px;margin-right: 10px;" >
		<div style="padding-top:10px"></div>
						
		<div class="dropdown" style="margin-left:10px;width:98.5%;">
            <div id="titleInformasi" style=" color:white">Data Karyawan</div>
            <div id="btnBawahDataKaryawan" class="btnBawah" style="color:white"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
		</div>
		
		<br>
		<div class="tabelinformasi" id="infoDataKaryawan" style="margin-left:50px;margin-right:30px;">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<table id="example" class="table table-striped table-bordered tableDT" cellspacing="0" style="margin-left:0px;" width="99.9%">
				        <thead >
				            <tr class="info">
				                <th>Nama Lengkap</th>
				                <th>Jabatan</th>
				                <th>Departemen</th>
				                <th>Username</th> 
				                <th>Action</th>        
				            </tr>
				        </thead>
				 
				        <tfoot>
				            <tr>
				               <th>Nama Lengkap</th>
				                <th>Jabatan</th>
				                <th>Departemen</th>
				                <th>Username</th>  
				                <th>Action</th>    
				            </tr>
				        </tfoot>
				 
				        <tbody>
				        	<tr>
				        		<td>Arya Beth</td>
				        		<td>Cleaning Service</td>
				        		<td>Hura-hura</td>
				        		<td>arbeth69</td>
				        		<td></td>
				        	</tr>
				        	<tr>
				        		<td>Klaudius Jemly</td>
				        		<td>Cleaning Service</td>
				        		<td>Hura-hura</td>
				        		<td>febenathania69</td>
				        		<td></td>
				        	</tr>
				        	<tr>
				        		<td>Kalvin Khrisna</td>
				        		<td>Dokter</td>
				        		<td>Penyakit Jiwa</td>
				        		<td>krisnaadikjems</td>
				        		<td></td>
				        	</tr>
				        	<tr>
				        		<td>Widnyana S.</td>
				        		<td>Manager</td>
				        		<td>Kerohaniawan</td>
				        		<td>widnyanaSantixk</td>
				        		<td></td>
				        	</tr>
				        </tbody>
				    </table>

				</div>
			</form>
		</div>
</div>

							