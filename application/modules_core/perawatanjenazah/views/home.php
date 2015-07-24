<div class="title">
	PERAWATAN JENAZAH
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>perawatanjenazah/home">Perawatan Jenazah</a>
	</li>
</div>

<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#master" data-toggle="tab">Tindakan Perawatan Jenazah</a></li>
	    <li><a href="#riwayat" data-toggle="tab">Riwayat Tindakan Perawatan Jenazah</a></li>

	</ul>

	<div id="my-tab-content" class="tab-content">
		<div class="modal fade" id="edPJ" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content" >
					<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Edit</h3>
        			</div>
        			<div class="modal-body">
        			 <form class="form-horizontal" role="form">

	            	 	<div class="form-group">
	            	 		<label class="control-label col-md-3">Nama</label>
				     		<div class="col-md-5">
				     			<input type="text" class="form-control" placeholder="Nama" id="namaPJ" name="namaPJ">	
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Umur</label>
				     		<div class="col-md-4">
				     			<div class="input-group">
				     			<input type="text" class="form-control" id="umurPJ" name="umurPJ"  placeholder="Umur">
				     			<span class="input-group-addon">tahun</span>
				     			</div>
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Jenis Kelamin</label>
				     		<div class="form-inline">
								<div class="radio-list">
									<div class="col-md-1" > 
										<input type="radio"  name="laki2PJ" value="laki2PJ" data-title="L"  checked />L 
									</div>
									<div class="col-md-1" >	         		
										<input type="radio"  name="wanita2PJ"  value="wanita2PJ" data-title="P" />P
									</div>	
								</div>
							</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Nama Penanggung Jawab</label>
				     		<div class="col-md-5">
				     			<input type="text" class="form-control" id="nmaPJPJ" name="nmaPJPJ" placeholder="Nama Penanggung Jawab">
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Nomor Telepon</label>
				     		<div class="col-md-5">
				     			<input type="text" class="form-control" id="nmrMediko" name="nmrMediko" placeholder="Nomor Telepon">
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Sebab Kematian</label>
				     		<div class="col-md-5">
				     			<textarea class="form-control" id="sbbKmtianPJ" name="sbbKmtianPJ"></textarea>
				     		</div>
            	 		</div>

	 					<div class="form-group">
							<label class="control-label col-md-3">Waktu Tindakan</label>
							<div class="col-md-5">	
								<input type="text" style="cursor:pointer;" class="form-control" data-provide="datetimepicker" data-date-format="dd/mm/yyyy hh:ii:ss" placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
							</div>
	        			</div>							
	        			<div class="form-group">
							<label class="control-label col-md-3">Tindakan</label>
							<div class="col-md-5">
								<input type="text" class="typeahead form-control" autocomplete="off" spellcheck="false" placeholder="Cari Tindakan">											
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
								<input type="text" class="form-control" id="onfakturMediko" name="onfakturMediko" placeholder="On Faktur" >
							</div>
	        			</div>

	        			<div class="form-group">
							<label class="control-label col-md-3">Jumlah</label>
							<div class="col-md-5">	
								<input type="text" class="form-control" id="jumlahMediko" name="jumlahMediko" placeholder="Jumlah" >
							</div>
	        			</div>

						<div class="form-group">
							<label class="control-label col-md-3">Paramedis</label>
							<div class="col-md-5">	
								<input type="text" class="form-control" id="paramedisMediko" name="paramedisMediko" placeholder="Paramedis" >
							</div>
	        			</div>
            	 		

			     </form>
        		
						
        			</div>
        			<div class="modal-footer">
 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
 			       		
			      	</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="detailPJ" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
				     			<input type="text" class="form-control" placeholder="Nama" id="namaPJ" name="namaPJ" readonly>	
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Umur</label>
				     		<div class="col-md-4">
				     			<div class="input-group">
				     			<input type="text" class="form-control" id="umurPJ" name="umurPJ"  placeholder="Umur" readonly>
				     			<span class="input-group-addon">tahun</span>
				     			</div>
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Jenis Kelamin</label>
				     		<div class="form-inline">
								<div class="radio-list">
									<div class="col-md-1" > 
										<input type="radio"  name="laki2PJ" value="laki2PJ" data-title="L"  checked readonly />L 
									</div>
									<div class="col-md-1" >	         		
										<input type="radio"  name="wanita2PJ"  value="wanita2PJ" data-title="P" readonly />P
									</div>	
								</div>
							</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Nama Penanggung Jawab</label>
				     		<div class="col-md-5">
				     			<input type="text" class="form-control" id="nmaPJPJ" name="nmaPJPJ" placeholder="Nama Penanggung Jawab" readonly>
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Nomor Telepon</label>
				     		<div class="col-md-5">
				     			<input type="text" class="form-control" id="nmrMediko" name="nmrMediko" placeholder="Nomor Telepon" readonly>
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Sebab Kematian</label>
				     		<div class="col-md-5">
				     			<textarea class="form-control" id="sbbKmtianPJ" name="sbbKmtianPJ" readonly></textarea>
				     		</div>
            	 		</div>

	 					<div class="form-group">
							<label class="control-label col-md-3">Waktu Tindakan</label>
							<div class="col-md-5">	
								<input type="text" style="cursor:pointer;" class="form-control"  readonly data-provide="datetimepicker" data-date-format="dd/mm/yyyy hh:ii:ss" placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
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
								<input type="text" class="form-control" id="paramedisMediko" name="paramedisMediko" placeholder="Paramedis" readonly>
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

        <div class="tab-pane active" id="master">
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
				     			<input type="text" class="form-control" placeholder="Nama" id="namaPJ" name="namaPJ">	
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Umur</label>
				     		<div class="col-md-2">
				     			<div class="input-group">
				     			<input type="text" class="form-control" id="umurPJ" name="umurPJ"  placeholder="Umur">
				     			<span class="input-group-addon">tahun</span>
				     			</div>
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Jenis Kelamin</label>
				     		<div class="form-inline">
								<div class="radio-list">
									<div class="col-md-1" > 
										<input type="radio"  name="laki2PJ" value="laki2PJ" data-title="L"  checked />L 
									</div>
									<div class="col-md-1" style="margin-left:-70px">	         		
										<input type="radio"  name="wanita2PJ"  value="wanita2PJ" data-title="P" />P
									</div>	
								</div>
							</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Nama Penanggung Jawab</label>
				     		<div class="col-md-3">
				     			<input type="text" class="form-control" id="nmaPJPJ" name="nmaPJPJ" placeholder="Nama Penanggung Jawab">
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Nomor Telepon</label>
				     		<div class="col-md-3">
				     			<input type="text" class="form-control" id="nmrMediko" name="nmrMediko" placeholder="Nomor Telepon">
				     		</div>
            	 		</div>
            	 		<div class="form-group">
	            	 		<label class="control-label col-md-3">Sebab Kematian</label>
				     		<div class="col-md-3">
				     			<textarea class="form-control" id="sbbKmtianPJ" name="sbbKmtianPJ"></textarea>
				     		</div>
            	 		</div>

	 					<div class="form-group">
							<label class="control-label col-md-3">Waktu Tindakan</label>
							<div class="col-md-3">	
								<input type="text" style="cursor:pointer;" class="form-control"  readonly data-provide="datetimepicker" data-date-format="dd/mm/yyyy hh:ii:ss" placeholder="<?php echo date("d/m/Y H:i:s");?>"/>
							</div>
	        			</div>							
	        			<div class="form-group">
							<label class="control-label col-md-3">Tindakan</label>
							<div class="col-md-3">
								<input type="text" class="typeahead form-control" autocomplete="off" spellcheck="false" placeholder="Cari Tindakan">											
							</div>
						</div>
	        			<div class="form-group">
							<label class="control-label col-md-3">Tarif</label>
							<div class="col-md-3">	
								<input type="text" class="form-control" id="tarifMediko" name="tarifMediko" placeholder="Tarif" readonly > 
							</div>
	        			</div>
	        			
	        			<div class="form-group">
							<label class="control-label col-md-3">On Faktur</label>
							<div class="col-md-3">	
								<input type="text" class="form-control" id="onfakturMediko" name="onfakturMediko" placeholder="On Faktur" >
							</div>
	        			</div>

	        			<div class="form-group">
							<label class="control-label col-md-3">Jumlah</label>
							<div class="col-md-3">	
								<input type="text" class="form-control" id="jumlahMediko" name="jumlahMediko" placeholder="Jumlah" >
							</div>
	        			</div>

						<div class="form-group">
							<label class="control-label col-md-3">Paramedis</label>
							<div class="col-md-3">	
								<input type="text" class="form-control" id="paramedisMediko" name="paramedisMediko" placeholder="Paramedis" >
							</div>
	        			</div>
            	 		
            	 		<div class="form-group">
            	 			<div class="col-md-3">
            	 				
            	 			</div>
            	 			<div class="col-md-3">
            	 				<button class="btn btn-success">SIMPAN</button>
            	 			</div>
            	 		</div>

			     </form>

            </div>
        </div>
        <div class="tab-pane" id="riwayat">
        		<div class="dropdown"  style="margin-left:10px;width:98.5%">
		            <div id="titleInformasi">Riwayat Tindakan Perawatan Jenazah</div>
		            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
	            </div>
            	<br>
            	<div class="informasi">
            		 <form class="form-horizontal" role="form">
	       
            	 		 <div class="form-group">
					        <div class="portlet-body" style="margin: 0px 40px 0px 10px">
					            <table class="table table-striped table-bordered table-hover tableDT">
									<thead>
										<tr class="info">
											<th style="width:10px;">No.</th>
											<th>Nama</th>
											<th>Umur</th>
											<th>Jenis Kelamin</th>
											<th>Penanggung Jawab</th>
											<th>Telepon</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Jems</td>
											<td>30</td>
											<td>L</td>
											<td>Kalvin Khrisna</td>
											<td>0910201290</td>
											<td style="text-align:center">
												<a href="#detailPJ" data-toggle="modal"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>
												<a href="#edPJ" data-toggle="modal"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
												<a href="#"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>							
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