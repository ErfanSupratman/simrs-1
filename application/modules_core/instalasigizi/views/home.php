<div class="title">
	INSTALASI GIZI
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>instalasigizi/home">Instalasi Gizi</a>
	</li>
</div>

<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#master" data-toggle="tab">Master Paket Makan</a></li>
	    <li><a href="#referensi" data-toggle="tab">Master Referensi Gizi</a></li>
	    <li><a href="#list" data-toggle="tab">List Permintaan Makan</a></li>

	</ul>

	<div id="my-tab-content" class="tab-content">
		<div class="modal fade" id="detailPaket" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content" >
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Detail</h3>
				        			</div>
				        			<div class="modal-body">
				        			
				        			 <form class="form-horizontal" role="form">
						            	 	<div class="form-group">
						            	 		<label class="control-label col-md-3">Nama Paket</label>
									     		<div class="col-md-5">
									     			<input type="text" class="form-control" placeholder="Nama Paket" id="namaPaket" name="namaPaket" readonly>	
									     		</div>
					            	 		</div>
					            	 		<div class="form-group">
						            	 		<label class="control-label col-md-3">Kelas</label>
									     		<div class="col-md-5">
									     			<input type="text" class="form-control" id="klsPaket" name="klsPaket"  placeholder="Kelas" readonly>
									     			
									     		</div>
					            	 		</div>
					            	 		<div class="form-group">
						            	 		<label class="control-label col-md-3">Tipe Diet</label>
									     		<div class="col-md-5">
									     			<input type="text" class="form-control" id="TipeDiet" name="tipeDiet" placeholder="Tipe Diet" readonly>
									     		</div>
					            	 		</div>

						        			<div class="form-group">
												<label class="control-label col-md-3">Harga Total</label>
												<div class="col-md-5">
													<input type="text" class="form-control" id="hrgPkt" name="hrgPkt" placeholder="Harga Total" readonly>
									     		</div>
											</div>
						        			<div class="form-group">
												<label class="control-label col-md-3">Menu</label>
												<div class="col-md-5">	
													<textarea name="menuPaket" class="form-control" readonly></textarea>
												</div>
						        			</div>
						        			
						        			<div class="form-group">
												<label class="control-label col-md-3">Jenis</label>
												<div class="col-md-5">	
													<input type="text" class="form-control" id="jnsPaket" name="jnsPaket" placeholder="Jenis" readonly >
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
        
        <div class="modal fade" id="edPaket" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content" >
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Edit Paket</h3>
				        			</div>
				        			<div class="modal-body">
				        			
				        			 <form class="form-horizontal" role="form">
						            	 	<div class="form-group">
						            	 		<label class="control-label col-md-3">Nama Paket</label>
									     		<div class="col-md-5">
									     			<input type="text" class="form-control" placeholder="Nama Paket" id="namaPaket" name="namaPaket">	
									     		</div>
					            	 		</div>
					            	 		<div class="form-group">
						            	 		<label class="control-label col-md-3">Kelas</label>
									     		<div class="col-md-5">
									     			<input type="text" class="form-control" id="klsPaket" name="klsPaket"  placeholder="Kelas">
									     			
									     		</div>
					            	 		</div>
					            	 		<div class="form-group">
						            	 		<label class="control-label col-md-3">Tipe Diet</label>
									     		<div class="col-md-5">
									     			<input type="text" class="form-control" id="TipeDiet" name="tipeDiet" placeholder="Tipe Diet">
									     		</div>
					            	 		</div>

						        			<div class="form-group">
												<label class="control-label col-md-3">Harga Total</label>
												<div class="col-md-5">
													<input type="text" class="form-control" id="hrgPkt" name="hrgPkt" placeholder="Harga Total" >
									     		</div>
											</div>
						        			<div class="form-group">
												<label class="control-label col-md-3">Menu</label>
												<div class="col-md-5">	
													<textarea name="menuPaket" class="form-control"></textarea>
												</div>
						        			</div>
						        			<div class="form-group">
												<label class="control-label col-md-3">Jenis</label>
												<div class="col-md-5">	
													<input type="text" class="form-control" id="jnsPaket" name="jnsPaket" placeholder="Jenis"  >
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

		<div class="modal fade" id="edList" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content" >
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">List</h3>
				        			</div>
				        			<div class="modal-body">
				        			
				        			 <form class="form-horizontal" role="form">
						            	 	<div class="form-group">
						            	 		<label class="control-label col-md-3">Ruang</label>
									     		<div class="col-md-5">
									     			<input type="text" class="form-control" placeholder="Ruangan" id="rganList" name="rganList">	
									     		</div>
					            	 		</div>
					            	 		<div class="form-group">
						            	 		<label class="control-label col-md-3">Kamar</label>
									     		<div class="col-md-5">
									     			<input type="text" class="form-control" id="kmrList" name="kmrList"  placeholder="Kamar">
									     			
									     		</div>
					            	 		</div>
					            	 		<div class="form-group">
						            	 		<label class="control-label col-md-3">Nama Pasien</label>
									     		<div class="col-md-5">
									     			<input type="text" class="form-control" id="nmPasienList" name="nmPasienList" placeholder="Nama Pasien">
									     		</div>
					            	 		</div>

						        			<div class="form-group">
												<label class="control-label col-md-3">Nama Paket</label>
												<div class="col-md-5">
													<input type="text" class="form-control" id="nmPktList" name="nmPktList" placeholder="Nama Paket" >
									     		</div>
											</div>
						        			<div class="form-group">
												<label class="control-label col-md-3">Kelas</label>
												<div class="col-md-5">	
													<input type="text" class="form-control" id="klsPaketList" name="klsPaketList" placeholder="Kelas"  >
												</div>
											</div>	
						        			<div class="form-group">
												<label class="control-label col-md-3">Tipe Diet</label>
												<div class="col-md-5">	
													<input type="text" class="form-control" id="tpDietList" name="tpDietList" placeholder="Tipe Diet"  >
												</div>
											</div>						        			
						        			<div class="form-group">
												<label class="control-label col-md-3">Status</label>
												<div class="col-md-5">	
													<input type="text" class="form-control" id="stsList" name="stsList" placeholder="Status"  >
												</div>
											</div>						        			
						        			<div class="form-group">
												<label class="control-label col-md-3">Keterangan</label>
												<div class="col-md-5">
													<textarea class="form-control" name="ketList"></textarea>
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

		<div class="modal fade" id="edGizi" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content" >
									<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				        				<h3 class="modal-title" id="myModalLabel">Edit Gizi</h3>
				        			</div>
				        			<div class="modal-body">
				        			
				        			<form class="form-horizontal" role="form">
					            		<div class="form-group">
					            			<label class="control-label col-md-3">Jenis Makanan</label>
					            			<div class="col-md-5">
					            				<input type="text" class="form-control" id="jnsRG" name="jnsRG" placeholder="Jenis Makanan">
					            			</div>
					            		</div>
					            		<div class="form-group">
					            			<label class="control-label col-md-3">Takaran Saji</label>
					            			<div class="col-md-4">
					            				<div class="input-group">
					            				<input type="text" class="form-control" id="tkrnSaji" name="tkrnSaji" placeholder="Takaran Saji">
					            				<span class="input-group-addon">gram</span>
					            				</div>
					            			</div>
					            		</div>
					            		<div class="form-group">
					            			<label class="control-label col-md-3">Kalori</label>
					            			<div class="col-md-4">
					            				<div class="input-group">
					            				<input type="text" class="form-control" id="kkalRG" name="kkalRG" placeholder="Kalori">
					            				<span class="input-group-addon">kkal&nbsp;</span>
					            				</div>
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
        
        <div class="tab-pane active" id="master">
        	<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Tambah Paket Makan</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br>
            <div class="informasi">
            	<form class="form-horizontal" role="form">
            		<div class="form-group">
            			<label class="control-label col-md-3">Nama Paket</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="nmPaketIG" name="nmPaketIG" placeholder="Nama Paket">
            			</div>
            		</div>
            		<div class="form-group">
            			<label class="control-label col-md-3">Kelas</label>
            			<div class="col-md-3">
            				<select class="form-control select" name="kelasIG" id="kelasIG">
										<option selected>Pilih</option>
										<option value="VIP">VIP</option>
										<option value="Kelas I">Kelas I</option>
										<option value="Kelas II">Kelas II</option>
										<option value="Kelas III">Kelas III</option>
															
							</select>	
						</div>
            		</div>
            		<div class="form-group">
            			<label class="control-label col-md-3">Tipe Diet Penyakit</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="tpDietIG" name="tpDietIG" placeholder="Tipe Diet">
            			</div>
            		</div>
            		<div class="form-group">
            			<label class="control-label col-md-3">Harga Total</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="hrgTotIG" name="hrgTotIG" placeholder="Harga Total">
            			</div>
            		</div>
            		<div class="form-group">
            			<div class="col-md-3"></div>
            			<div class="col-md-3">
            				<button type="reset" class="btn btn-warning">RESET</button>
            				<button type="submit" class="btn btn-success">TAMBAH</button>
            			</div>
            		</div>

        	 		<br>
					<hr class="garis" style="margin-left:-60px;">
					<br>	
            		<div class="form-group">
					        <div class="portlet-body" style="margin: 0px 40px 0px 10px">
					            <table class="table table-striped table-bordered table-hover">
									<thead>
										<tr class="info">
											<th style="width:10px;">No.</th>
											<th style="text-align:left;">Menu</th>
											<th style="text-align:left;">Jenis</th>
											<th style="text-align:left;">Harga</th>
											<th width="100">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>A</td>
											<td>XX</td>
											<td>200 mg</td>
											<td style="text-align:center;"><a href="#" class="removeRow"><i class="glyphicon glyphicon-remove"></i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
					</div>
					<div class="form-group">
						<div class="pull-right" style="margin-right:40px">
							<button class="btn btn-danger">BATAL</button>
							<button class="btn btn-success">SIMPAN</button>
						</div>

					</div>


            	</form>
            </div>

   			<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Daftar Paket Makan</div>
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
										<th style="width:10%;">No.</th>
										<th width="50px;">Nama Paket</th>
										<th style="width:12%;">Kelas</th>
										<th style="width:10%;">Tipe Diet</th>
										<th  width="50px;">Harga Total</th>
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
											<a href="#detailPaket" data-toggle="modal"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>
											<a href="#edPaket" data-toggle="modal"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
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
        <div class="tab-pane" id="referensi">
        	<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Tambah Referensi Gizi</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br> 
            <div class="informasi">
            	<form class="form-horizontal" role="form">
            		<div class="form-group">
            			<label class="control-label col-md-3">Jenis Makanan</label>
            			<div class="col-md-3">
            				<input type="text" class="form-control" id="jnsRG" name="jnsRG" placeholder="Jenis Makanan">
            			</div>
            		</div>
            		<div class="form-group">
            			<label class="control-label col-md-3">Takaran Saji</label>
            			<div class="col-md-2">
            				<div class="input-group">
            				<input type="text" class="form-control" id="tkrnSaji" name="tkrnSaji" placeholder="Takaran Saji">
            				<span class="input-group-addon">gram</span>
            				</div>
            			</div>
            		</div>
            		<div class="form-group">
            			<label class="control-label col-md-3">Kalori</label>
            			<div class="col-md-2">
            				<div class="input-group">
            				<input type="text" class="form-control" id="kkalRG" name="kkalRG" placeholder="Kalori">
            				<span class="input-group-addon">kkal&nbsp;</span>
            				</div>
            			</div>
            		</div>
            		<div class="form-group">
            			<label class="control-label col-md-3"></label>
            			<div class="col-md-5">
            				<button class="btn btn-danger">BATAL</button>
            				<button class="btn btn-success">SIMPAN</button>
            			</div>
            			
            		</div>

	        	</form>
	        </div>

	        <div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">Daftar Referensi Gizi</div>
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
										<th style="width:10%;">No.</th>
										<th width="50px;">Jenis Makanan</th>
										<th style="width:12%;">Takaran Saji</th>
										<th style="width:10%;">Kalori</th>
										<th style="width:20%;">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Jems</td>
										<td>30</td>
										<td>121212121</td>
										<td style="text-align:center">
											<a href="#edGizi" data-toggle="modal"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
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

        <div class="tab-pane" id="list">
        	<div class="dropdown"  style="margin-left:10px;width:98.5%">
	            <div id="titleInformasi">List Permintaan Makan</div>
	            <div  class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
            </div>
            <br> 
            <div class="informasi">
            	<form class="form-horizontal" role="form">
            		<div class="form-group">
            			<label class="control-label col-md-2">Tanggal Permintaan Makan</label>
            			<div class="col-md-2">
            				<input type="text" class="form-control" data-provide="datepicker" id="TglListMkn" name="TglListMkn">
            			</div>
            			<label class="control-label col-md-1">Unit</label>
            			<div class="col-md-3">
			         		<select class="form-control select" name="dprtmnMakan" id="dprtmnMakan">
									<option selected>Pilih</option>
									<option value="Poli">Poli</option>					
							</select>
            			</div>
            		</div>
            		<div class="form-group">
					    <div class="portlet-body" style="margin: 0px 40px 0px 10px">
				            <table class="table table-striped table-bordered table-hover tableDT">
								<thead>
									<tr class="info">
										<th style="width:10%;">No.</th>
										<th >Kamar</th>
										<th >Bed</th>
										<th >Nama Pasien</th>
										<th >Nama Paket</th>
										<th >Kelas</th>
										<th >Tipe Diet Penyakit</th>
										<th >Keterangan</th>
										<th >Status</th>
										<th style="width:20%;">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Melati</td>
										<td>36-B</td>
										<td>Kalvin</td>
										<td>Maria Mawar</td>
										<td>VIP</td>
										<td>Sixpack</td>
										<td>Perlu obat Patah Hati</td>
										<td>Sudah Dikirim</td>
										<td style="text-align:center">
											<a href="#edList" data-toggle="modal"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>		
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