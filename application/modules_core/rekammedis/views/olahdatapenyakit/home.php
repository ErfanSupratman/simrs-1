
<div class="title">
	REKAM MEDIS OLAH DATA DIAGNOSA
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>olahdatapenyakit/home">Rekam Medis Olah Data Diagnosa</a>
			
		</li>
	
</div>
<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	   	<li class="active"><a href="#list" data-toggle="tab">Master ICD-X</a></li>
	    <li><a href="#ina" data-toggle="tab">Master INA-CBG's</a></li>
	    <li><a href="#icd" data-toggle="tab">Master ICD-9CM</a></li>
	    <li><a href="#logistik" data-toggle="tab">Logistik</a></li>

	</ul>

	<div id="my-tab-content" class="tab-content">
		<div class="modal fade" id="tambahICDx" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:100px">
							<div class="modal-dialog">
								<div class="modal-content" style="width:500px">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Tambah ICD-X</h3>
				        			</div>
				        			<div class="modal-body">
				        			
				        			<form class="form-horizontal" role="form">
						            	<div class="informasi" id="info1">

											<div class="form-group">
												<label class="control-label col-md-4">Kode ICD-X</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="kodeicdx" name="kodeicd_x" />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Diagnosa</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="diagnosaicd" name="diagnosaicd" />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Diagnosa Lokal</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="diagnosaicdlok" name="diagnosaicdlok" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">DTD</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="dtd" name="dtd" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Sebab Penyakit</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="sbb" name="sbb" />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Group </label>
												<div class="col-md-4">
													<select class="form-control select " name="grupicd" id="grupicd" >
														<option  selected>Pilih</option>
														<option value="gr1">Group1</option>
														<option value="gr2"  >Group2</option>
														
													</select>												
												</div>
											</div>

																			
										</div>		
					            	 		
			     					</form>
										
				        			</div>
				        			<div class="modal-footer">
				 			       		<button type="button" class="btn btn-success" >Tambah</button>
				 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
				 			       		
							      	</div>
								</div>
							</div>
		</div>

		<div class="modal fade" id="edICDX" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:100px">
							<div class="modal-dialog">
								<div class="modal-content" style="width:500px">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Edit ICD-X</h3>
				        			</div>
				        			<div class="modal-body">
				        			
				        			<form class="form-horizontal" role="form">
						            	<div class="informasi" id="info1">

											<div class="form-group">
												<label class="control-label col-md-4">Kode ICD-X</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="edkodeicdx" name="edkodeicd_x" />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Diagnosa</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="eddiagnosaicd" name="eddiagnosaicd" />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Diagnosa Lokal</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="eddiagnosaicdlok" name="eddiagnosaicdlok" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">DTD</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="eddtd" name="eddtd" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Sebab Penyakit</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="edsbb" name="edsbb" />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Group </label>
												<div class="col-md-4">
													<select class="form-control select " name="edgrupicd" id="edgrupicd" >
														<option  selected>Pilih</option>
														<option value="gr1">Group1</option>
														<option value="gr2"  >Group2</option>
														
													</select>												
												</div>
											</div>

																			
										</div>		
					            	 		
			     					</form>
										
				        			</div>
				        			<div class="modal-footer">
				 			       		<button type="button" class="btn btn-success" >Ubah</button>
				 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
				 			       		
							      	</div>
								</div>
							</div>
		</div>


		<div class="modal fade" id="tambahINACBG" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:100px">
							<div class="modal-dialog">
								<div class="modal-content" style="width:500px">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Tambah INA-CBG</h3>
				        			</div>
				        			<div class="modal-body">
				        			
				        			<form class="form-horizontal" role="form">
						            	<div class="informasi" id="info1">

											<div class="form-group">
												<label class="control-label col-md-4">Kode INA-CBG</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="kodeinacbg" name="kodeinacbg" />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Deskripsi</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="deskripsiinacbg" name="deskripsiinacbg" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Tarif Kelas I</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="kelasI" name="kelasI" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Tarif Kelas II</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="kelasII" name="kelasII" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Tarif Kelas III</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="kelasIII" name="kelasIII" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Tarif Kelas Utama</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="kelasUtama" name="kelasUtama" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Tarif Kelas VIP</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="kelasVIP" name="kelasVIP" />
												</div>
											</div>

																			
										</div>		
					            	 		
			     					</form>
										
				        			</div>
				        			<div class="modal-footer">
				 			       		<button type="button" class="btn btn-success" >Tambah</button>
				 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
				 			       		
							      	</div>
								</div>
							</div>
		</div>

		<div class="modal fade" id="edINA" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:100px">
							<div class="modal-dialog">
								<div class="modal-content" style="width:500px">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Edit INA-CBG</h3>
				        			</div>
				        			<div class="modal-body">
				        			
				        			<form class="form-horizontal" role="form">
						            	<div class="informasi" id="info1">

											<div class="form-group">
												<label class="control-label col-md-4">Kode INA-CBG</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="edkodeinacbg" name="edkodeinacbg" />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Deskripsi</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="eddeskripsiinacbg" name="deskripsiinacbg" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Tarif Kelas I</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="edkelasI" name="edkelasI" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Tarif Kelas II</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="edkelasII" name="edkelasII" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Tarif Kelas III</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="edkelasIII" name="edkelasIII" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Tarif Kelas Utama</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="edkelasUtama" name="edkelasUtama" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Tarif Kelas VIP</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="edkelasVIP" name="edkelasVIP" />
												</div>
											</div>

																			
										</div>		
					            	 		
			     					</form>
										
				        			</div>
				        			<div class="modal-footer">
				 			       		<button type="button" class="btn btn-success" >Ubah</button>
				 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
				 			       		
							      	</div>
								</div>
							</div>
		</div>
	
		<div class="modal fade" id="tambahICDCM" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:100px">
							<div class="modal-dialog">
								<div class="modal-content" style="width:500px">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Tambah ICD-9CM</h3>
				        			</div>
				        			<div class="modal-body">
				        			
				        			<form class="form-horizontal" role="form">
						            	<div class="informasi" id="info1">

											<div class="form-group">
												<label class="control-label col-md-4">Kode ICD-9CM</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="kodeinacbg" name="kodeinacbg" />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Kode Induk</label>
												<div class="col-md-6">
													<input type="text" class="typeahead form-control" autocomplete="off" spellcheck="false" id="kodeinduk" name="kodeinduk" />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Prosedur</label>
												<div class="col-md-6">
													<textarea class="form-control" id="pros" name="pros"></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Keterangan</label>
												<div class="col-md-6">
													<textarea class="form-control" id="eks" name="eks"></textarea>
												</div>
											</div>

																			
										</div>		
					            	 		
			     					</form>
										
				        			</div>
				        			<div class="modal-footer">
				 			       		<button type="button" class="btn btn-success" >Tambah</button>
				 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
				 			       		
							      	</div>
								</div>
							</div>
		</div>
	
		<div class="modal fade" id="edCM" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:100px">
							<div class="modal-dialog">
								<div class="modal-content" style="width:500px">
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Edit ICD-9CM</h3>
				        			</div>
				        			<div class="modal-body">
				        			
				        			<form class="form-horizontal" role="form">
						            	<div class="informasi" id="info1">

											<div class="form-group">
												<label class="control-label col-md-4">Kode IC-9CM</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="edkodeinacbg" name="edkodeinacbg" />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Prosedur</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="edpros" name="edpros" />
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-4">Keterangan</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="edeks" name="edeks" />
												</div>
											</div>

																			
										</div>		
					            	 		
			     					</form>
										
				        			</div>
				        			<div class="modal-footer">
				 			       		<button type="button" class="btn btn-success" >Ubah</button>
				 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
				 			       		
							      	</div>
								</div>
							</div>
		</div>

		<div class="modal fade" id="importexelicdx" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<form class="form-horizontal" role="form" method="POST" id="">
				<div class="modal-dialog">
					<div class="modal-content">
						<form class="form-horizontal" role="form">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Import Data ICD-X</h3>
				   			</div>
							<div class="modal-body">
								<div class="alert alert-warning">
									<h4>Perhatian</h4>
									<label>1. Halaman ini berguna untuk melakukan penambahan data ICD-X secara massal </label><br>
									<label>2. Gunakan template yang sudah disediakan oleh sistem </label><br>
									<label>3. Jangan merubah tata letak dalam template yang diisi </label><br>
									<label>4. Proses tidak dapat dibatalkan </label><br>
									<a href="" class="btn btn-info">Download Template Disini</a>
								</div>

								<div class="form-group">
									<div class="col-md-9" style="padding:5px;margin-left:30px">

										<input type="file" class="form-input" name="userfile" placeholder="Pilih File" value required>
									</div>
								</div>

		       				</div>
			        		<br>
			        		<div class="modal-footer">
			        			<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
			 			     	<button type="submit" class="btn btn-success">Simpan</button>
						    </div>
						</form>
					</div>
				</div>
			</form>
		</div>

		<div class="modal fade" id="importexelinacbg" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<form class="form-horizontal" role="form" method="POST" id="">
				<div class="modal-dialog">
					<div class="modal-content">
						<form class="form-horizontal" role="form">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Import Data INA-CBG's</h3>
				   			</div>
							<div class="modal-body">
								<div class="alert alert-warning">
									<h4>Perhatian</h4>
									<label>1. Halaman ini berguna untuk melakukan penambahan data INA-CBG's secara massal </label><br>
									<label>2. Gunakan template yang sudah disediakan oleh sistem </label><br>
									<label>3. Jangan merubah tata letak dalam template yang diisi </label><br>
									<label>4. Proses tidak dapat dibatalkan </label><br>
									<a href="" class="btn btn-info">Download Template Disini</a>
								</div>

								<div class="form-group">
									<div class="col-md-9" style="padding:5px;margin-left:30px">

										<input type="file" class="form-input" name="userfile" placeholder="Pilih File" value required>
									</div>
								</div>

		       				</div>
			        		<br>
			        		<div class="modal-footer">
			        			<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
			 			     	<button type="submit" class="btn btn-success">Simpan</button>
						    </div>
						</form>
					</div>
				</div>
			</form>
		</div>

		<div class="modal fade" id="importexelicdcm9" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<form class="form-horizontal" role="form" method="POST" id="">
				<div class="modal-dialog">
					<div class="modal-content">
						<form class="form-horizontal" role="form">
							<div class="modal-header">
				   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				   				<h3 class="modal-title" id="myModalLabel">Import Data ICD-9CM</h3>
				   			</div>
							<div class="modal-body">
								<div class="alert alert-warning">
									<h4>Perhatian</h4>
									<label>1. Halaman ini berguna untuk melakukan penambahan data ICD-9CM secara massal </label><br>
									<label>2. Gunakan template yang sudah disediakan oleh sistem </label><br>
									<label>3. Jangan merubah tata letak dalam template yang diisi </label><br>
									<label>4. Proses tidak dapat dibatalkan </label><br>
									<a href="" class="btn btn-info">Download Template Disini</a>
								</div>

								<div class="form-group">
									<div class="col-md-9" style="padding:5px;margin-left:30px">

										<input type="file" class="form-input" name="userfile" placeholder="Pilih File" value required>
									</div>
								</div>

		       				</div>
			        		<br>
			        		<div class="modal-footer">
			        			<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
			 			     	<button type="submit" class="btn btn-success">Simpan</button>
						    </div>
						</form>
					</div>
				</div>
			</form>
		</div>
	
	
		<div class="tab-pane active" id="list">
			<div class="informasi" style="margin-right:60px">
		       	<form class="form-horizontal" method="POST" id="search_submit">
			       	<div class="search">
						<label class="control-label col-md-3">
							<i class="fa fa-search">&nbsp;&nbsp;</i>Kode ICD-X <span class="required" style="color : red">* </span>
						</label>
						<div class="col-md-4">		
							<input type="text" class="form-control" placeholder="Masukkan Kode ICD-X" autofocus>
				        </div>
				        <button type="submit" class="btn btn-danger">Cari</button>&nbsp;
				        <a href="#importexelicdx" data-toggle="modal" class="btn btn-info">Import Masal</a>

					</div>	
				</form>
			</div>

			<hr class="garis">
			<div class="tabelinformasi">

				<a href="#tambahICDx" data-toggle="modal" class="tmbhTndkan" style="margin-left:5px"><i class="fa fa-plus" >&nbsp;Tambah ICD-X</i></a>
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
							<thead>
								<tr class="info">
									<th style="text-align:center;width:20px;">No</th>
									<th>ICD-X</th>
									<th>Diagnosa</th>
									<th>Diagnosa(Local)</th>
									<th>DTD</th>
									<th>Sebab Penyakit</th>
									<th>Group</th>
									<th width="90">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Arbet</td>
									<td>P</td>
									<td>122</td>
									<td>Arbet</td>
									<td>P</td>
									<td>1212121</td>
									<td style="text-align:center"><a href="#edICDX" data-toggle="modal"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<a href="#" ><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>							
								</td>
																		
								</tr>
							</tbody>
						</table>
					</div>			
				</div>
			</div>  
			
	    </div>

        <div class="tab-pane" id="ina">
	     	<div class="informasi" style="margin-right:60px">
		       	<form class="form-horizontal" method="POST" id="search_submit">
			       	<div class="search">
						<label class="control-label col-md-3">
							<i class="fa fa-search">&nbsp;&nbsp;</i>Kode INA-CBG's <span class="required" style="color : red">* </span>
						</label>
						<div class="col-md-4">		
							<input type="text" class="form-control" placeholder="Masukkan Kode INA-CBG's" autofocus>
				        </div>
				        <button type="submit" class="btn btn-danger">Cari</button>&nbsp;
				        <a href="#importexelinacbg" data-toggle="modal" class="btn btn-info">Import Masal</a>
					</div>	
				</form>
			</div>
			<hr class="garis">
			<div class="tabelinformasi">

				<a href="#tambahINACBG" data-toggle="modal" class="tmbhTndkan" style="margin-left:5px"><i class="fa fa-plus" >&nbsp;Tambah INA-CBG</i></a>
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
							<thead>
								<tr class="info">
									<th style="text-align:center;width:20px;">No</th>
									<th>Kode</th>
									<th>Deskripsi</th>
									<th>Tarif Kelas I</th>
									<th>Tarif Kelas II</th>
									<th>Tarif Kelas III</th>
									<th>Tarif Kelas Utama</th>
									<th>Tarif Kelas VIP</th>
									<th width="90">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>122</td>
									<td>Arbet</td>
									<td>P</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td style="text-align:center"><a href="#edINA" data-toggle="modal"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<a href="#" ><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>							
									</td>
																		
								</tr>
							</tbody>
						</table>
					</div>			
				</div>
			</div>
        </div>

        <div class="tab-pane" id="icd">   
        	<div class="informasi" style="margin-right:60px">
		       	<form class="form-horizontal" method="POST" id="search_submit">
			       	<div class="search">
						<label class="control-label col-md-3">
							<i class="fa fa-search">&nbsp;&nbsp;</i>Kode ICD-9CM <span class="required" style="color : red">* </span>
						</label>
						<div class="col-md-4">		
							<input type="text" class="form-control" placeholder="Masukkan Kode ICD-9CM" autofocus>
				        </div>
				        <button type="submit" class="btn btn-danger">Cari</button>&nbsp;
				        <a href="#importexelicdcm9" data-toggle="modal" class="btn btn-info">Import Masal</a>
					</div>	
				</form>
			</div>
			
			<hr class="garis">
			<div class="tabelinformasi">

				<a href="#tambahICDCM" data-toggle="modal" class="tmbhTndkan" style="margin-left:5px"><i class="fa fa-plus" >&nbsp;Tambah ICD-9CM</i></a>
				<div class="portlet box red">
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDTUtama">
							<thead>
								<tr class="info">
									<th style="text-align:center;width:20px;">No</th>
									<th>Kode ICD-9CM</th>
									<th>Prosedur</th>
									<th>Keterangan</th>
									<th width="90">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>122</td>
									<td>Arbet</td>
									<td>P</td>
									<td>Arbet</td>
									<td style="text-align:center"><a href="#edCM" data-toggle="modal"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
										<a href="#" ><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>							
									</td>
																		
								</tr>
							</tbody>
						</table>
					</div>			
				</div>
			</div>
        </div>

        <div class="tab-pane" id="logistik">
	       	<div class="dropdown" id="bwinlogistik">
	            <div id="titleInformasi">Inventori</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-up" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div id="ibwinlogistik" class="tutupBiru">
				<div class="form-group" >
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover table-responsive tableDT">
							<thead>
								<tr class="info">
									<th width="20">No.</th>
									<th> Nama Barang </th>
									<th> Group </th>
									<th> Merek </th>
									<th> Harga </th>
									<th> Stok</th>
									<th> Satuan </th>
									<th width="120"> Action </th>								
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="text-align:center">1</td>
									<td>A</td>
									<td>a</td>
									<td>a</td>									
									<td style="text-align:right">200</td>
									<td style="text-align:right">12</td>
									<td>A</td>
									<td style="text-align:center"><a href="#inoutbar" data-toggle="modal" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
											<a href="#edInvenBerBar" data-toggle="modal" class="edObat"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
										</td>										
								</tr>
								<tr>
									<td style="text-align:center">2</td>
									<td>A</td>
									<td>a</td>
									<td>a</td>									
									<td style="text-align:right">200</td>
									<td style="text-align:right">12</td>
									<td>A</td>
									<td style="text-align:center"><a href="#inoutbar" data-toggle="modal" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="IN-OUT"></i></a>
											<a href="#edInvenBerBar" data-toggle="modal" class="edObat"><i class="glyphicon glyphicon-search" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>							
										</td>											
								</tr>
							</tbody>
						</table>
					</div>
					<button class="btn btn-info" style="margin:-100px 0px 0px 10px;">Simpan ke Excel(.xls)</button> 
					
	        	</div>
	        	<br>
	        </div>

			<div class="modal fade" id="inoutbar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content" >
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">IN OUT</h3>
	        			</div>
	        			<div class="modal-body">
		        			<form class="form-horizontal informasi" role="form">
    	
			        			<div class="form-group">
			        					<label class="control-label col-md-3" >Tanggal 
										</label>
										<div class="col-md-4" >
						         			<div class="input-icon">
												<i class="fa fa-calendar"></i>
												<input type="text" style="cursor:pointer;" data-date-autoclose="true" class="form-control calder" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
											</div>
						         		</div>
										
								</div>
								<div class="form-group">
										<label class="control-label col-md-3" >In / Out 
										</label>
										<div class="col-md-4">
						         		<select class="form-control select" name="ioberbar" id="ioberbar">
												<option value="IN" selected>IN</option>
												<option value="OUT">OUT</option>					
										</select>
										</div>

								</div>
								<div class="form-group">
			        					<label class="control-label col-md-3" >Jumlah 
										</label>
										<div class="col-md-4" >
						         		<input type="text" class="form-control" name="jmlInOutBerBar" placeholder="Jumlah">
										</div>
										
								</div>
								<div class="form-group">
			        					<label class="control-label col-md-3" >Sisa Stok 
										</label>
										<div class="col-md-4" >
						         		<input type="text" class="form-control" name="sisaInOutBerBar" placeholder="Sisa Stok">
										</div>
										
								</div>
								<div class="form-group">
			        					<label class="control-label col-md-3" >Keterangan 
										</label>
										<div class="col-md-6" >
											<textarea class="form-control" placeholder="Keterangan"></textarea>
										</div>
			
								</div>
							</form>
								
		        		</div>
	        			<div class="modal-footer">
	        				<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				      		<button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
				      	</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="edInvenBerBar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content" >
						<div class="modal-header">
	        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	        				<h3 class="modal-title" id="myModalLabel">Riwayat</h3>
	        			</div>
	        			<div class="modal-body">
	        			<form class="form-horizontal" role="form">
			            	<table class="table table-striped table-bordered table-hover table-responsive" id="tblInven">
								<thead>
									<tr class="info" >
										<th  style="text-align:left" width="10%"> Waktu </th>
										<th  style="text-align:left"> IN / OUT </th>
										<th  style="text-align:left"> Jumlah </th>
										<th  style="text-align:left"> Stok Akhir </th>
										<th  style="text-align:left"> Jenis </th>
										<th  style="text-align:left">  Keterangan </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
										
								</tbody>
							</table>

		        			
							</form>
							
	        			</div>
	        			<div class="modal-footer">
	 			       		<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				      	</div>
					</div>
				</div>
			</div>
			
			<div class="dropdown" id="bwpermintaanlogistik" style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Permintaan Logistik</div>
	            <div class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <div id="ibwpermintaanlogistik" class="tutupBiru">
            	<form class="form-horizontal" role="form">
            		<br>
            		<div class="informasi">
	        			<div class="form-group">
	        				<div class="col-md-2">
	        					<label class="control-label">Nomor Permintaan</label>
	        				</div>
	        				<div class="col-md-3">
	        					<input type="text" class="form-control" name="noPermLogBers" id="noPermFarmBers" placeholder="Nomor Permintaan"/>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-2">
	        					<label class="control-label">Tanggal Permintaan</label>
	        				</div>
	        				<div class="col-md-2">
	        					<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" class="form-control" data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
								</div>
							</div>
	        			</div>

	        			<div class="form-group">
							<div class="col-md-2">
	        					<label class="control-label">Keterangan</label>
	        				</div>
	        				<div class="col-md-3">
	        					<textarea class="form-control" id="ketObatLogBers" name="ketObatFarBers"></textarea>	
							</div>
	        			</div>
        			</div>
        			
					<a href="#modalMintaLogBers" data-toggle="modal"><i class="fa fa-plus" style="margin-left :10px; font-size:11pt;">&nbsp;Tambah Barang</i></a>
					<div class="clearfix"></div>
					
					<div class="portlet box red">
						<div class="portlet-body" style="margin: 10px 10px 10px 10px">
						
							<table class="table table-striped table-bordered table-hover table-responsive" id="tabApo">
								<thead>
									<tr class="info" >
										<th width="20"> No. </th>
										<th> Nama Barang </th>
										<th> Satuan </th>
										<th> Merek </th>
										<th> Stok Unit </th>
										<th width="200"> Jumlah Diminta </th>
										<th width="80"> Action </th>			
									</tr>
								</thead>
								
								<tbody id="addinputMintaLog">
										<!-- <tr>
											<td colspan="6" style="text-align:center" id="dataKosong">DATA KOSONG</td>												
										</tr> -->
								</tbody>
							</table>
						</div>
						<br>
						<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
						<div style="margin-left:1100px">
							<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
								<button class="btn btn-warning">RESET</button> &nbsp;
								<button class="btn btn-success">SIMPAN</button> 
							</span>
						</div>
						<br>
					</div>
				</form>
				
				<div class="modal fade" id="modalMintaLogBers" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
		        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		        				<h3 class="modal-title" id="myModalLabel">Pilih Barang</h3>
		        			</div>
		        			<div class="modal-body">

			        			<div class="form-group">
									<div class="form-group">	
										<div class="col-md-5" style="margin-left:10px;">
											<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
										</div>
										<div class="col-md-2">
											<button type="button" class="btn btn-info">Cari</button>
										</div>
										<br><br>	
									</div>		
									<div style="margin-left:10px; margin-right:10px;"><hr></div>
									<div class="portlet-body" style="margin: 0px 20px 0px 15px">
										<table class="table table-striped table-bordered table-hover" id="tabelSearchDiagnosa">
											<thead>
												<tr class="info">
													<th>Nama Barang</th>
													<th>Satuan</th>
													<th>Merek</th>
													<th>Tgl Kadaluarsa</th>
													<th width="10%">Pilih</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Paramex</td>
													<td>Paramex</td>
													<td>Paramex</td>
													<td>Paramex</td>
													<td style="text-align:center"><a href="#" class="addNewLog"><i class="glyphicon glyphicon-check"></i></a></td>
												</tr>
												<tr>
													<td>Panadol</td>
													<td>Paramex</td>
													<td>Paramex</td>
													<td>Paramex</td>
													<td style="text-align:center"><a href="#" class="addNewLog"><i class="glyphicon glyphicon-check"></i></a></td>
												</tr>

											</tbody>
										</table>												
									</div>
								</div>
		        			</div>
		        			<div class="modal-footer">
		 			       		<button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
					      	</div>
						</div>
					</div>
				</div>
				<br>
			</div>	
			<br>    
	    </div>
        
    </div>

</div>

			
<script type="text/javascript">
	$(document).ready(function(){
		$("#bwpermintaanlogistik").click(function(){
			$("#ibwpermintaanlogistik").slideToggle();
			
		});
		$("#bwinlogistik").click(function(){
			$("#ibwinlogistik").slideToggle();
			
		});
	});
</script>