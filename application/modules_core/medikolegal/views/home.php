<div class="title">
	MEDIKO LEGAL
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>medikolegal/home">Mediko Legal</a>
	</li>
</div>

<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#legal" data-toggle="tab">Tindakan Mediko Legal</a></li>
	    <li><a href="#riwayat" data-toggle="tab">Riwayat Tindakan Mediko Legal</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="legal">
        	<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Tambah Tindakan</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
            	 <form class="form-horizontal" role="form">
	            	 	<div class="form-group">
	            	 		<label class="control-label col-md-3">Nama</label>
				     		<div class="col-md-3">
				     			<input type="text" class="form-control" placeholder="Nama" id="namaMediko" name="namaMediko">	
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Umur</label>
				     		<div class="col-md-2">
				     			<div class="input-group">
				     			<input type="text" class="form-control" id="umurMediko" name="umurMediko"  placeholder="Umur">
				     			<span class="input-group-addon">tahun</span>
				     			</div>
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Jenis Kelamin</label>
				     		<div class="form-inline">
								<div class="radio-list">
									<div class="col-md-1" > 
										<input type="radio"  name="laki2" value="laki2" data-title="L"  checked />L 
									</div>
									<div class="col-md-1" style="margin-left:-70px">	         		
										<input type="radio"  name="wanita2"  value="wanita2" data-title="P" />P
									</div>	
								</div>
							</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Nomor Telepon</label>
				     		<div class="col-md-3">
				     			<input type="text" class="form-control" id="nmrMediko" name="nmrMediko" placeholder="Nomor Telepon">
				     		</div>
            	 		</div>

	 					<div class="form-group">
							<label class="control-label col-md-3">Waktu Tindakan</label>
							<div class="col-md-4">	
								<input type="text" style="cursor:pointer;" class="form-control"  readonly data-provide="datetimepicker" data-date-format="dd/mm/yyyy hh:ii:ss" placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
							</div>
	        			</div>							
	        			<div class="form-group">
							<label class="control-label col-md-3">Tindakan</label>
							<div class="col-md-4">
								<input type="text" class="typeahead form-control" autocomplete="off" spellcheck="false" placeholder="Cari Tindakan">											
							</div>
						</div>
	        			<div class="form-group">
							<label class="control-label col-md-3">Tarif</label>
							<div class="col-md-4">	
								<input type="text" class="form-control" id="tarifMediko" name="tarifMediko" placeholder="Tarif" readonly > 
							</div>
	        			</div>
	        			
	        			<div class="form-group">
							<label class="control-label col-md-3">On Faktur</label>
							<div class="col-md-4">	
								<input type="text" class="form-control" id="onfakturMediko" name="onfakturMediko" placeholder="On Faktur" >
							</div>
	        			</div>

	        			<div class="form-group">
							<label class="control-label col-md-3">Jumlah</label>
							<div class="col-md-4">	
								<input type="text" class="form-control" id="jumlahMediko" name="jumlahMediko" placeholder="Jumlah" >
							</div>
	        			</div>

						<div class="form-group">
							<label class="control-label col-md-3">Paramedis</label>
							<div class="col-md-4">	
								<input type="text" class="form-control" id="paramedisMediko" name="paramedisMediko" placeholder="Paramedis" >
							</div>
	        			</div>
            	 		
            	 		<div class="form-group">
            	 			<div class="col-md-3">
            	 				
            	 			</div>
            	 			<div class="col-md-3">
            	 				<button class="btn btn-success">TAMBAH</button>
            	 			</div>
            	 		</div>
            	 

			     </form>

            </div>

           
        </div>
        <div class="tab-pane" id="riwayat">
        	<div class="dropdown" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Riwayat Tindakan Mediko Legal</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="modal fade" id="detailMediko" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content" >
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Detail</h3>
				        			</div>
				        			<div class="modal-body">
				        			
				        			 <form class="form-horizontal" role="form">
						            	 	<div class="form-group">
						            	 		<label class="control-label col-md-3">Nama</label>
									     		<div class="col-md-5">
									     			<input type="text" class="form-control" placeholder="Nama" id="namaMediko" name="namaMediko" readonly>	
									     		</div>
					            	 		</div>
					            	 		<div class="form-group">
						            	 		<label class="control-label col-md-3">Umur</label>
									     		<div class="col-md-4">
									     			<div class="input-group">
									     			<input type="text" class="form-control" id="umurMediko" name="umurMediko"  placeholder="Umur" readonly>
									     			<span class="input-group-addon">tahun</span>
									     			</div>
									     		</div>
					            	 		</div>
					            	 		<div class="form-group">
						            	 		<label class="control-label col-md-3">Jenis Kelamin</label>
									     		<div class="form-inline">
													<div class="radio-list">
														<div class="col-md-1" > 
															<input type="radio"  name="laki2" value="laki2" data-title="L"  checked readonly />L 
														</div>
														<div class="col-md-1" >	         		
															<input type="radio"  name="wanita2"  value="wanita2" data-title="P" readonly />P
														</div>	
													</div>
												</div>
					            	 		</div>
					            	 		<div class="form-group">
						            	 		<label class="control-label col-md-3">Nomor Telepon</label>
									     		<div class="col-md-5">
									     			<input type="text" class="form-control" id="nmrMediko" name="nmrMediko" placeholder="Nomor Telepon" readonly>
									     		</div>
					            	 		</div>

						 					<div class="form-group">
												<label class="control-label col-md-3">Waktu Tindakan</label>
												<div class="col-md-5">	
													<input type="text" style="cursor:pointer;" class="form-control"  readonly data-provide="datetimepicker" data-date-format="dd/mm/yyyy hh:ii:ss" placeholder="<?php echo date("d/m/Y H:i:s");?>" readonly/>
												</div>
						        			</div>							
						        			<div class="form-group">
												<label class="control-label col-md-3">Tindakan</label>
												<div class="col-md-5">
													<input type="text" class="typeahead form-control" autocomplete="off" spellcheck="false" placeholder="Cari Tindakan" readonly>											
												</div>
											</div>
						        			<div class="form-group">
												<label class="control-label col-md-3">Tarif</label>
												<div class="col-md-5">	
													<input type="text" class="form-control" id="tarifMediko" name="tarifMediko" placeholder="Tarif" readonly > 
												</div>
						        			</div>
						        			
						        			<div class="form-group">
												<label class="control-label col-md-3">On Faktur</label>
												<div class="col-md-5">	
													<input type="text" class="form-control" id="onfakturMediko" name="onfakturMediko" placeholder="On Faktur" readonly >
												</div>
						        			</div>

						        			<div class="form-group">
												<label class="control-label col-md-3">Jumlah</label>
												<div class="col-md-5">	
													<input type="text" class="form-control" id="jumlahMediko" name="jumlahMediko" placeholder="Jumlah" readonly>
												</div>
						        			</div>

											<div class="form-group">
												<label class="control-label col-md-3">Paramedis</label>
												<div class="col-md-5">	
													<input type="text" class="form-control" id="paramedisMediko" name="paramedisMediko" placeholder="Paramedis" readonly >
												</div>
						        			</div>
					            	 		
			     						</form>
										
				        			</div>
				        			<div class="modal-footer">
				 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				 			       		
							      	</div>
								</div>
							</div>
						</div>
            <div class="informasi">
            	<form class="form-horizontal" role="form">
	        		<div class="form-group">
					    <div class="portlet-body" style="margin: 0px 40px 0px 10px">
				            <table class="table table-striped table-bordered table-hover tableDT">
								<thead>
									<tr class="info">
										<th style="width:10%;">No.</th>
										<th width="50px;">Nama</th>
										<th style="width:12%;">Umur</th>
										<th style="width:10%;">Jenis Kelamin</th>
										<th  width="50px;">No Telepon</th>
										<th style="width:20%;">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Jems</td>
										<td>30</td>
										<td>L</td>
										<td>121212121</td>
										<td style="text-align:center">
											<a href="#detailMediko" data-toggle="modal"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>							
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

	        	</form>
	        </div>
        </div>
    </div>
</div>