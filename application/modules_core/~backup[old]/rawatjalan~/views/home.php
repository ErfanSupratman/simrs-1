
<div class="title">
	POLIKLINIK UMUM
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>rawatjalan/homerawatjalan">Poliklinik Umum</a>
		</li>
</div>

<div class="navigation" style="margin-left: 10px" >
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
		<li class="active"><a href="#list" data-toggle="tab">List Pasien Poliklinik</a></li>
 		<li><a href="#farmasi" data-toggle="tab">Farmasi</a></li>
		<li><a href="#logistik" data-toggle="tab">Logistik</a></li>
	    <li><a href="#laporan" data-toggle="tab">Laporan</a></li>
	    <li><a href="#master" data-toggle="tab">Master</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">
	   	<div class="tab-pane active" id="list">
		   	<form method="POST" id="search_submit">
		       	<div class="search">
					<label class="control-label col-md-3">Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
					</label>
					<div class="col-md-4">		
						<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
			        </div>
			        <button type="submit" class="btn btn-danger">Cari</button>
				</div>	
			</form>
			<br>
			<hr class="garis"><br>
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
							<tr>
								<td colspan='7'><center>Cari Data Pasien</center></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>  
	    </div>
  
	    <div class="tab-pane" id="farmasi">
	       	<div class="dropdown">
	       		<div id="titleInformasi">Inventori</div>
	       		<div class="btnBawah" id="btnBawahInventori"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
          	<br>
            <div class="tabelinformasi" id="infoInventori">
				<div class="portlet-body" style="margin: 0px 50px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive">
						<thead>
							<tr class="info">
								<th> ID Obat </th>
								<th> Tanggal Kadaluarsa </th>
								<th> No Batch </th>
								<th> Stok </th>
								<th> Stok Minimal </th>
								<th> Harga Jual </th>
								<th> Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>S121334</td>
								<td>24 April 2014</td>
								<td>3</td>
								<td>100</td>									
								<td>120</td>
								<td>14000</td>
								<td style="text-align:center">200000</td>										
							</tr>
							<tr>
								<td>S121334</td>
								<td>24 April 2014</td>
								<td>3</td>
								<td>100</td>									
								<td>120</td>
								<td>14000</td>
								<td style="text-align:center">200000</td>											
							</tr>
						</tbody>
					</table>
				</div>
				<br>
	        </div>
			
			<div class="dropdown">
	        	<div id="titleInformasi">Permintaan Obat</div>
	            <div class="btnBawah" id="btnBawahPermintaan"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>
	        <div class="informasi" id="infoPermintaan">
				<form class="form-horizontal" role="form">
	           		<div class="form-group">
						<label class="control-label col-md-3">Tanggal Request</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Petugas</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="ptgas" name="ptgas" placeholder="Petugas"  data-toggle="modal" data-target="#petugas"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Keterangan Request</label>
						<div class="col-md-4">
						<textarea class="form-control" id="ketRequest" name="ketRequest" placeholder="Keterangan"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Tanggal Respon</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Petugas Respond</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="ptgas" name="ptgasRespond" placeholder="Petugas Respond" data-toggle="modal" data-target="#petugas"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3" ></label>
						<div class="col-md-7">			
							<a href="#tambahPermintaan" style="color:white">
							<button type="submit" class="btn btn-success">Tambah</button></a>		
					 	</div>							
					</div>				
				</form>
	        </div>
	           	
	        <!-- Retur Belum -->
	        <div class="dropdown">
	        	<div id="titleInformasi">Retur Obat</div>
	        	<div class="btnBawah" id="btnBawahRetur"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>
	        <div class="tabelinformasi" id="infoRetur">
	          	<div class="portlet-body" style="margin: 0px 50px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive">
						<thead>
							<tr class="info">
								<th> ID Obat </th>
								<th> Tanggal Kadaluarsa </th>
								<th> No Batch </th>
								<th> Stok Kadaluarsa</th>
								<th> Stok Diretur </th>
								<th> Stok Sisa </th>
								<th> Harga Jual </th>
								<th> Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>S121334</td>
								<td>24 April 2014</td>
								<td>3</td>
								<td>100</td>									
								<td><a href="#" class="editableform editable-click" data-type="text" data-pk="1" data-original-title="Jumlah Diretur" id="retur">1</a></td>									
								<td>1</td>
								<td>14000</td>
								<td style="text-align:center"><button type="submit" class="btn btn-success">Retur</button></td>										
							</tr>
						</tbody>
					</table>
				</div>
	        </div>    
	        <br>   	
	    </div>
	    
	    <div class="tab-pane" id="logistik">
	        <div class="dropdown">
	        	<div id="titleInformasi">Inventori</div>
	        	<div class="btnBawah" id="btnBawahInventoriBarang"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>
	        <div class="tabelinformasi" id="infoInventoriBarang">
				<div class="portlet-body" style="margin: 0px 50px 0px 10px">
					<table class="table table-striped table-bordered table-hover table-responsive">
						<thead>
							<tr class="info">
								<th> ID Obat </th>
								<th> Tanggal Kadaluarsa </th>
								<th> No Batch </th>
								<th> Stok </th>
								<th> Stok Minimal </th>
								<th> Harga Jual </th>
								<th> Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>S121334</td>
								<td>24 April 2014</td>
								<td>3</td>
								<td>100</td>									
								<td>120</td>
								<td>14000</td>
								<td style="text-align:center">200000</td>										
							</tr>
							<tr>
								<td>S121334</td>
								<td>24 April 2014</td>
								<td>3</td>
								<td>100</td>									
								<td>120</td>
								<td>14000</td>
								<td style="text-align:center">200000</td>											
							</tr>
						</tbody>
					</table>
					<br>
				</div>
		    </div>

			<div class="dropdown">
	        	<div id="titleInformasi">Permintaan Barang</div>
	        	<div class="btnBawah" id="btnBawahPermintaanBarang"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	        </div>
	        <br>
	        <div class="informasi" id="infoPermintaanBarang">
				<form class="form-horizontal" role="form">
	           		<div class="form-group">
						<label class="control-label col-md-3">Tanggal Request</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Petugas</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="ptgas" name="ptgas" placeholder="Petugas"  data-toggle="modal" data-target="#petugas"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Keterangan Request</label>
						<div class="col-md-4">
						<textarea class="form-control" id="ketRequest" name="ketRequest" placeholder="Keterangan"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Tanggal Respon</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control isian calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Petugas Respond</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="ptgas" name="ptgasRespond" placeholder="Petugas Respond" data-toggle="modal" data-target="#petugas"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3" ></label>
						<div class="col-md-7">			
							<a href="#tambahPermintaan" style="color:white">
							<button type="submit" class="btn btn-success">Tambah</button></a>		
					 	</div>							
					</div>	
	           	</form>
	        </div>
	    </div>

	    <div class="tab-pane" id="laporan">        
	    </div>
	    
	    <div class="tab-pane" id="master">        
	    </div>

	    <div class="modal fade" id="petugas" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        		<h3 class="modal-title" id="myModalLabel">Pilih Petugas</h3>
		        	</div>
		        	<div class="modal-body">
			        	<div class="form-group">
							<div class="form-group">	
								<div class="col-md-5">
									<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-info">Cari</button><br>
								</div>	
							</div>		
							<br>	
							<div style="margin-left:5px; margin-right:5px;"><br><hr></div>
							<div class="portlet-body" style="margin: 0px 10px 0px 10px">
								<table class="table table-striped table-bordered table-hover" id="tabelSearchPetugas">
									<thead>
										<tr class="warning">
											<td>Nama Petugas</td>
											<td width="10%">Pilih</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Jems</td>
											<td style="text-align:center"><i class="glyphicon glyphicon-check"></i></td>
										</tr>
										<tr>
											<td>Putu</td>
											<td style="text-align:center"><i class="glyphicon glyphicon-check"></i></td>
										</tr>
									</tbody>
								</table>												
							</div>
						</div>
		        	</div>
		        	<div class="modal-footer">
		 				<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>

<script type="text/javascript">

	$(document).ready(function(){
		var lastSearch = null;
		if(lastSearch==null){
			$("#tgl_start").attr('disabled', true);
			$("#tgl_end").attr('disabled', true);
		}

		$("#search_submit").submit(function(event){
			var search = $("input:first").val();
			lastSearch = search;			
			$("#tgl_start").attr('disabled', false);
			$("#tgl_end").attr('disabled', false);	

			if(search!=""){
				$.ajax({
					type:'POST',
					url :'<?php echo base_url()?>rawatjalan/homerawatjalan/search_pasien/'+search,
					success:function(data){
						// $("#t_body").html(hasil);

						console.log(data);
						
						if(data.length>0){
							$('#t_body').empty();
							for(var i = 0; i<data.length;i++){
								var rm_id = data[i]['rm_id'],
									name = data[i]['nama'],									
									jk = data[i]['jenis_kelamin'],
									tgl_lahir = data[i]['tanggal_lahir'],
									alamat = data[i]['alamat_skr'],
									id = data[i]['jenis_id'],
									visit_id = data[i]['visit_id'];;

								var remove = tgl_lahir.split("-");
								var bulan;
								switch(remove[1]){
									case "01": bulan="Januari";break;
									case "02": bulan="Februari";break;
									case "03": bulan="Maret";break;
									case "04": bulan="April";break;
									case "05": bulan="Mei";break;
									case "06": bulan="Juni";break;
									case "07": bulan="Juli";break;
									case "08": bulan="Agustus";break;
									case "09": bulan="September";break;
									case "10": bulan="Oktober";break;
									case "11": bulan="November";break;
									case "12": bulan="Desember";break;
								}
								var tgl = remove[2]+" "+bulan+" "+remove[0];

								$('#t_body').append(
									'<tr>'+
							 			'<td>'+rm_id+'</td>'+
							 			'<td>'+name+'</td>'+
							 			'<td>'+jk+'</td>'+
							 			'<td>'+tgl+'</td>'+
							 			'<td>'+alamat+'</td>'+
							 			'<td>'+id+'</td>'+

							 			'<td style="text-align:center">'+
							 				'<a href="<?php echo base_url() ?>rawatjalan/daftarpasien/periksa/'+rm_id+'/'+visit_id+'" onclick="visit(&quot;'+rm_id+'&quot; , &quot;'+visit_id+'&quot;)"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Pemeriksaan"></i></a>'+
										'</td>'+
							 		'</tr>'
									);
							}
						}else{
							$('#t_body').empty();

							$('#t_body').append(
									'<tr>'+
							 			'<td colspan="7"><center>Data Pasien Tidak Ditemukan</center></td>'+
							 		'</tr>'
								);
						}

					},
					error:function (data){
						$('#t_body').empty();

						$('#t_body').append(
							'<tr>'+
					 			'<td colspan="7"><center>Error</center></td>'+
					 		'</tr>'
						);
					}

				});
			}

			event.preventDefault();
		});	

		var item_start = {};
		$("#tgl_start").change(function(event){
			item_start['search'] = lastSearch;
			item_start['start'] = $('#tgl_start').val();
			item_start['end'] = $('#tgl_end').val();

			console.log(item_start);
			$.ajax({
				type:'POST',
				data:item_start,
				url :'<?php echo base_url()?>icu/homeicu/filter_pasien/',
				success:function(data){
					// $("#t_body").html(hasil);

					console.log(data);
					
					if(data.length>0){
						$('#t_body').empty();
						for(var i = 0; i<data.length;i++){
							var rm_id = data[i]['rm_id'],
								name = data[i]['nama'],									
								jk = data[i]['jenis_kelamin'],
								tgl_lahir = data[i]['tanggal_lahir'],
								alamat = data[i]['alamat_skr'],
								id = data[i]['jenis_id'],
								visit_id = data[i]['visit_id'];;

							var remove = tgl_lahir.split("-");
							var bulan;
							switch(remove[1]){
								case "01": bulan="Januari";break;
								case "02": bulan="Februari";break;
								case "03": bulan="Maret";break;
								case "04": bulan="April";break;
								case "05": bulan="Mei";break;
								case "06": bulan="Juni";break;
								case "07": bulan="Juli";break;
								case "08": bulan="Agustus";break;
								case "09": bulan="September";break;
								case "10": bulan="Oktober";break;
								case "11": bulan="November";break;
								case "12": bulan="Desember";break;
							}
							var tgl = remove[2]+" "+bulan+" "+remove[0];

							$('#t_body').append(
								'<tr>'+
						 			'<td>'+rm_id+'</td>'+
						 			'<td>'+name+'</td>'+
						 			'<td>'+jk+'</td>'+
						 			'<td>'+tgl+'</td>'+
						 			'<td>'+alamat+'</td>'+
						 			'<td>'+id+'</td>'+

						 			'<td style="text-align:center">'+
						 				'<a href="<?php echo base_url() ?>rawatjalan/daftarpasien/periksa/'+rm_id+'/'+visit_id+'" onclick="visit(&quot;'+rm_id+'&quot; , &quot;'+visit_id+'&quot;)"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Pemeriksaan"></i></a>'+
									'</td>'+
						 		'</tr>'
								);
						}
					}else{
						$('#t_body').empty();

						$('#t_body').append(
								'<tr>'+
						 			'<td colspan="7"><center>Data Pasien Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
					}

				},
				error:function (data){
					$('#t_body').empty();

					$('#t_body').append(
						'<tr>'+
				 			'<td colspan="7"><center>Error</center></td>'+
				 		'</tr>'
					);
				}

			});

			event.preventDefault();
		});

		$("#tgl_end").change(function(event){
			item_start['search'] = lastSearch;
			item_start['start'] = $('#tgl_start').val();
			item_start['end'] = $('#tgl_end').val();

			console.log(item_start);
			$.ajax({
				type:'POST',
				data:item_start,
				url :'<?php echo base_url()?>icu/homeicu/filter_pasien/',
				success:function(data){
					// $("#t_body").html(hasil);

					console.log(data);
					
					if(data.length>0){
						$('#t_body').empty();
						for(var i = 0; i<data.length;i++){
							var rm_id = data[i]['rm_id'],
								name = data[i]['nama'],									
								jk = data[i]['jenis_kelamin'],
								tgl_lahir = data[i]['tanggal_lahir'],
								alamat = data[i]['alamat_skr'],
								id = data[i]['jenis_id'],
								visit_id = data[i]['visit_id'];

							var remove = tgl_lahir.split("-");
							var bulan;
							switch(remove[1]){
								case "01": bulan="Januari";break;
								case "02": bulan="Februari";break;
								case "03": bulan="Maret";break;
								case "04": bulan="April";break;
								case "05": bulan="Mei";break;
								case "06": bulan="Juni";break;
								case "07": bulan="Juli";break;
								case "08": bulan="Agustus";break;
								case "09": bulan="September";break;
								case "10": bulan="Oktober";break;
								case "11": bulan="November";break;
								case "12": bulan="Desember";break;
							}
							var tgl = remove[2]+" "+bulan+" "+remove[0];

							$('#t_body').append(
								'<tr>'+
						 			'<td>'+visit_id	+'</td>'+
						 			'<td>'+name+'</td>'+
						 			'<td>'+jk+'</td>'+
						 			'<td>'+tgl+'</td>'+
						 			'<td>'+alamat+'</td>'+
						 			'<td>'+id+'</td>'+

						 			'<td style="text-align:center">'+
						 				'<a href="<?php echo base_url() ?>rawatjalan/daftarpasien/periksa/'+rm_id+'/'+visit_id+'" onclick="visit(&quot;'+rm_id+'&quot; , &quot;'+visit_id+'&quot;)"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Pemeriksaan"></i></a>'+
									'</td>'+
						 		'</tr>'
								);
						}
					}else{
						$('#t_body').empty();

						$('#t_body').append(
								'<tr>'+
						 			'<td colspan="7"><center>Data Pasien Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
					}

				},
				error:function (data){
					$('#t_body').empty();

					$('#t_body').append(
						'<tr>'+
				 			'<td colspan="7"><center>Error</center></td>'+
				 		'</tr>'
					);
				}
			});
			event.preventDefault();
		});
	});

	function visit(rm_id, visit_id){
		localStorage.setItem('rm_id', rm_id);
		localStorage.setItem('visit_id', visit_id);
		alert(localStorage.getItem('visit_id'));
	}

	//'<a href="<?php echo base_url() ?>rawatjalan/daftarpasien" onclick="visit(&quot;'+rm_id+'&quot; , &quot;'+visit_id+'&quot;)" ><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Pemeriksaan"></i></a>'+
</script>