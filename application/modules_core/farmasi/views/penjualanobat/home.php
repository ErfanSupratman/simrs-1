
<div class="title">
	PENJUALAN OBAT
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>farmasi/homepenjualanobat">Penjualan Obat</a>
	
		</li>
	
</div>
<div class="modal fade" id="modObatRacikan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
							        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							        				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
							        			</div>
							        			<div class="modal-body">
							        				<form class="form-horizontal" role="form">
												        	<div class="form-group">
												        		<div class="col-md-5" style="font-weight:bold">Nama Obat</div>
												        		<div class="col-md-6">
												        			<select class="form-control select" name="selectObatRacikan" id="selectObatRacikan" >
																						<option value="0" selected>Pilih</option>
																						
																						<option value="1" >Racik 1</option>
																						<option value="2">Racik 2</option>
																						<option value="3" >Racik 3</option>
																						<option value="4" >Racik 4</option>
																	</select>
												        		</div>
												        	</div>
												        	<div class="form-group">
												        		<div class="col-md-5" style="font-weight:bold">Satuan</div>
												        		<div class="col-md-6" >
												        			<select class="form-control select" name="selectSatObatRacikan" id="selectSatObatRacikan" >
																		<option value="0" selected>Pilih</option>
																		<option value="Kapsul" >Kapsul</option>
																		<option value="Bungkus">Bungkus</option>
																		<option value="Pot"  >Pot</option>
																	</select>
												        		</div>
												        	</div>

												        	<div class="form-group">
												        		<div class="col-md-5" style="font-weight:bold">Jumlah</div>
												        		<div class="col-md-6" >
												        			<input type="text" class="form-control" id="jmRacik" name="jmRacik" placeholder="Jumlah"/>	
												        		</div>
												        	</div>

															<hr class="garis" style="border: solid 2px #50BFF9; border-radius: 5px; margin-left:10px;">
												        	<br>

												        	<div class="form-group">
												        		<div class="col-md-5" >
												        			<input type="text" class="form-control" id="komposisiRacik" name="komposisiRacik" placeholder="Search komposisi" style="margin-left:50px" />	
												        		</div>
												        	</div>
												        	<div class="form-group">
												        	<div style="overflow:scroll;overflow-x:hidden; height: 250px;">
												        		<div class="portlet-body" style="margin: 0px 0px 0px 60px">
																	<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
																		
																		<tbody>
																			<tr>
																				<td>
																				<p id="nmObatRacik" style="font-weight:bold;font-size:15pt;margin-bottom:-10px;">Panadol</p>
																				<p style="margin-bottom:-10px;font-size:12pt;">
																				<label id="tglRacikan" >13 Mei 2012 -&nbsp;</label>
																				<label id="satRacikan" style="font-style:italic">Tablet</label></p>
																				<p style="margin-bottom:-10px;"><label style="font-size:12pt;">Stok :</label>
																				<label id="stokObatRacik" style="font-size:12pt;">20</label></p><p>
																				<label style="font-size:12pt;">Harga :</label>
																				<label id="hrgaObatRacik" style="font-size:12pt;color:green;margin-bottom:-10px;">200000</label></p>
																				<div class="pull-right" style="margin-top:-40px;margin-bottom:5px;"><a href="#" class="addNewKomposisi" style="background:blue;color:white;padding-top:10px;padding-bottom:10px"><i class="fa fa-plus" style="text-align:center;width:40px"></i></a></div>
																				</td><!-- 
																				<td width="10%"><a href="#" class ="addNewKomposisi"><i class="glyphicon glyphicon-check"></i></a></td> -->
																			</tr>
																			<tr>
																				<td>
																				<p id="nmObatRacik" style="font-weight:bold;font-size:15pt;margin-bottom:-10px;">Panadol</p>
																				<p style="margin-bottom:-10px;font-size:12pt;">
																				<label id="tglRacikan" >13 Mei 2012 -&nbsp;</label>
																				<label id="satRacikan" style="font-style:italic">Tablet</label></p>
																				<p style="margin-bottom:-10px;"><label style="font-size:12pt;">Stok :</label>
																				<label id="stokObatRacik" style="font-size:12pt;">20</label></p><p>
																				<label style="font-size:12pt">Harga :</label>
																				<label id="hrgaObatRacik" style="font-size:12pt;color:green;margin-bottom:-10px;">200000</label></p>
																				<div class="pull-right" style="margin-top:-40px;margin-bottom:5px;"><a href="#" class="addNewKomposisi" style="background:blue;color:white;padding-top:10px;padding-bottom:10px"><i class="fa fa-plus" style="text-align:center;width:40px"></i></a></div>
																				</td><!-- 
																				<td width="10%"><a href="#" class ="addNewKomposisi"><i class="glyphicon glyphicon-check"></i></a></td> -->
																			</tr>
																			<tr>
																				<td>
																				<p id="nmObatRacik" style="font-weight:bold;font-size:15pt;margin-bottom:-10px;">Panadol</p>
																				<p style="margin-bottom:-10px;font-size:12pt;">
																				<label id="tglRacikan" >13 Mei 2012 -&nbsp;</label>
																				<label id="satRacikan" style="font-style:italic">Tablet</label></p>
																				<p style="margin-bottom:-10px;"><label style="font-size:12pt;">Stok :</label>
																				<label id="stokObatRacik" style="font-size:12pt;">20</label></p><p>
																				<label style="font-size:12pt;">Harga :</label>
																				<label id="hrgaObatRacik" style="font-size:12pt;color:green;margin-bottom:-10px;">200000</label></p>
																				<div class="pull-right" style="margin-top:-40px;margin-bottom:5px;"><a href="#" class="addNewKomposisi" style="background:blue;color:white;padding-top:10px;padding-bottom:10px"><i class="fa fa-plus" style="text-align:center;width:40px"></i></a></div>
																				</td><!-- 
																				<td width="10%"><a href="#" class ="addNewKomposisi"><i class="glyphicon glyphicon-check"></i></a></td> -->
																			</tr>
																			<tr>
																				<td>
																				<p id="nmObatRacik" style="font-weight:bold;font-size:15pt;margin-bottom:-10px;">Panadol</p>
																				<p style="margin-bottom:-10px;font-size:12pt;">
																				<label id="tglRacikan" >13 Mei 2012 -&nbsp;</label>
																				<label id="satRacikan" style="font-style:italic">Tablet</label></p>
																				<p style="margin-bottom:-10px;"><label style="font-size:12pt;">Stok :</label>
																				<label id="stokObatRacik" style="font-size:12pt;">20</label></p><p>
																				<label style="font-size:12pt">Harga :</label>
																				<label id="hrgaObatRacik" style="font-size:12pt;color:green;margin-bottom:-10px;">200000</label></p>
																				<div class="pull-right" style="margin-top:-40px;margin-bottom:5px;"><a href="#" class="addNewKomposisi" style="background:blue;color:white;padding-top:10px;padding-bottom:10px"><i class="fa fa-plus" style="text-align:center;width:40px"></i></a></div>
																				</td><!-- 
																				<td width="10%"><a href="#" class ="addNewKomposisi"><i class="glyphicon glyphicon-check"></i></a></td> -->
																			</tr>

																		</tbody>
																	</table>												
																</div>
															</div>
												        	</div>

												       		<div class="form-group">

																<div class="portlet-body" style="margin: 0px 20px 0px 15px">
																	
																	<table class="table table-striped table-bordered table-hover table-responsive" id="tblObatRacikan">
																		<thead>
																			<tr class="info" >
																				<th  style="text-align:left"> Nama Obat </th>
																				<th  style="text-align:left" width="20%"> Quantity </th>
																				<th  style="text-align:left" width="20%"> Action </th>
																				
																			</tr>
																		</thead>
																		<tbody id="addInputKom">
																				
																		</tbody>
																	</table>
																
																<a href="#" class="tmbahObat"  id="tmbhObatRacikan"><button class="btn btn-success" style="margin-top : 10px;">Tambah Obat</button></a>
																
																</div>
												        	</div>
															
												        	<div class="form-group">
												        		<div class="col-md-12">
												        			<span style="font-size:12pt;color:red;">Total Obat Berhasil ditambahkan: 1</span>	
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


 <div class="modal fade" id="modObatNonRacikan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
							        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							        				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
							        			</div>
							        			<div class="modal-body">

								        			<form class="form-horizontal" role="form">
												        	
												        	<div class="form-group">
												        		<div class="col-md-5" >
												        			<input type="text" class="form-control" id="komposisiNonRacik" name="komposisiNonRacik" placeholder="Search Nama Obat" style="margin-left:50px;" />	
												        		</div>
												        	</div>

												        	<div class="form-group">

												        	<div style="overflow:scroll;overflow-x:hidden; height: 250px;">
												        		<div class="portlet-body" style="margin: 0px 10px 0px 60px">
																	<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
																		
																		<tbody>
																			<tr>
																				<td>
																				<p id="nmObatNonRacik" style="font-weight:bold;font-size:15pt;margin-bottom:-10px;">Panadol</p>
																				<p style="margin-bottom:-10px;font-size:12pt;">
																				<label id="tglRacikan" >13 Mei 2012 -&nbsp;</label>
																				<label id="satRacikan" style="font-style:italic">Tablet</label></p>
																				<p style="margin-bottom:-10px;"><label style="font-size:12pt;">Stok :</label>
																				<label id="stokObatRacik" style="font-size:12pt;">20</label></p><p>
																				<label style="font-size:12pt;">Harga :</label>
																				<label id="hrgaObatNonRacik" style="font-size:12pt;color:green;margin-bottom:-10px;">200000</label></p>
																				<div class="pull-right" style="margin-top:-40px;margin-bottom:5px;"><a href="#" class="addNewKomposisiNon" style="background:blue;color:white;padding-top:10px;padding-bottom:10px"><i class="fa fa-plus" style="text-align:center;width:40px"></i></a></div>
																				</td><!-- 
																				<td width="10%"><a href="#" class ="addNewKomposisi"><i class="glyphicon glyphicon-check"></i></a></td> -->
																			</tr>
																			<tr>
																				<td>
																				<p id="nmObatNonRacik" style="font-weight:bold;font-size:15pt;margin-bottom:-10px;">Panadol</p>
																				<p style="margin-bottom:-10px;font-size:12pt;">
																				<label id="tglRacikan" >13 Mei 2012 -&nbsp;</label>
																				<label id="satRacikan" style="font-style:italic">Tablet</label></p>
																				<p style="margin-bottom:-10px;"><label style="font-size:12pt;">Stok :</label></p>
																				<label id="stokObatRacik" style="font-size:12pt;">20</label><p>
																				<label style="font-size:12pt;">Harga :</label>
																				<label id="hrgaObatNonRacik" style="font-size:12pt;color:green;margin-bottom:-10px;">200000</label></p>
																				<div class="pull-right" style="margin-top:-40px;margin-bottom:5px;"><a href="#" class="addNewKomposisiNon" style="background:blue;color:white;padding-top:10px;padding-bottom:10px"><i class="fa fa-plus" style="text-align:center;width:40px"></i></a></div>
																				</td><!-- 
																				<td width="10%"><a href="#" class ="addNewKomposisi"><i class="glyphicon glyphicon-check"></i></a></td> -->
																			</tr>

																		</tbody>
																	</table>												
																</div>
																</div>
												        	</div>

												        	<div class="form-group">

																<div class="portlet-body" style="margin: 0px 20px 0px 15px">
																	
																	<table class="table table-striped table-bordered table-hover table-responsive" id="tblObatRacikan">
																		<thead>
																			<tr class="info" >
																				<th  style="text-align:left"> Nama Obat </th>
																				<th  style="text-align:left" width="20%"> Quantity </th>
																				<th  style="text-align:left" width="20%"> Action </th>
																				
																			</tr>
																		</thead>
																		<tbody id="addInputKom2">
																				
																		</tbody>
																	</table>
																
																
																</div>
												        	</div>

												        	<div class="form-group">
												        		<div class="col-md-5">
												        			<a href="#" class="tmbahObat"  id="tmbhObatNonRacikan"><button class="btn btn-success" style="margin-top : 10px;">Tambah Obat</button></a>
																  	
												        		</div>

												        	</div>
												        	<div class="form-group">
												        		<div class="col-md-12">
												        			<span style="font-size:12pt;color:red;">Total Obat Berhasil ditambahkan: 1</span>	
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
<div class="modal fade" id="modKasirObat" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
							        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							        				<h3 class="modal-title" id="myModalLabel">Pilih Kasir</h3>
							        			</div>
							        			<div class="modal-body">

								        			<div class="form-group">
														<div class="form-group">	
															<div class="col-md-3" style="margin-left:35px;">
																<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
															</div>
															<div class="col-md-2">
																<button type="button" class="btn btn-info">Cari</button>
															</div>
															<br><br>	
														</div>		
														<div style="margin-left:20px; margin-right:20px;"><hr></div>
														<div class="portlet-body" style="margin: 0px 10px 0px 10px">
															<table class="table table-striped table-bordered table-hover tabelinformasi" style="width:90%;">
																<thead>
																	<tr class="info">
																		<td>Nama Kasir</td>
																		<td width="10%">Pilih</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Jems</td>
																		<td style="text-align:center"><a href="#" class ="addNewObatNon"><i class="glyphicon glyphicon-check"></i></a></td>
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

<div class="modal fade" id="modApoteker" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
							        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							        				<h3 class="modal-title" id="myModalLabel">Pilih Apoteker</h3>
							        			</div>
							        			<div class="modal-body">

								        			<div class="form-group">
														<div class="form-group">	
															<div class="col-md-3" style="margin-left:35px;">
																<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
															</div>
															<div class="col-md-2">
																<button type="button" class="btn btn-info">Cari</button>
															</div>
															<br><br>	
														</div>		
														<div style="margin-left:20px; margin-right:20px;"><hr></div>
														<div class="portlet-body" style="margin: 0px 0px 0px 40px">
															<table class="table table-striped table-bordered table-hover tabelinformasi" style="width:90%;">
																<thead>
																	<tr class="info">
																		<td>Nama Apoteker</td>
																		<td width="10%">Pilih</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Jems</td>
																		<td style="text-align:center"><a href="#" class ="addNewObatNon"><i class="glyphicon glyphicon-check"></i></a></td>
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
					        <div class="modal fade" id="obatNon" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
							        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							        				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
							        			</div>
							        			<div class="modal-body">

								        			<div class="form-group">
														<div class="form-group">	
															<div class="col-md-3" style="margin-left:35px;">
																<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
															</div>
															<div class="col-md-2">
																<button type="button" class="btn btn-info">Cari</button>
															</div>
															<br><br>	
														</div>		
														<div style="margin-left:20px; margin-right:20px;"><hr></div>
														<div class="portlet-body" style="margin: 0px 10px 0px 10px">
															<table class="table table-striped table-bordered table-hover tabelinformasi" style="width:90%;">
																<thead>
																	<tr class="info">
																		<td>Nama Obat</td>
																		<td>Tgl Kadaluarsa</td>
																		<td>Satuan</td>
																		<td>Stok</td>
																		<td>Harga</td>
																		<td width="10%">Pilih</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Jems</td>
																		<td>101010</td>
																		<td>Tab</td>
																		<td>10</td>
																		<td>20000</td>
																		<td style="text-align:center"><a href="#" class ="addNewObatNon"><i class="glyphicon glyphicon-check"></i></a></td>
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
 <div class="modal fade" id="komposisi" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
							        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							        				<h3 class="modal-title" id="myModalLabel">Pilih Obat</h3>
							        			</div>
							        			<div class="modal-body">

								        			<div class="form-group">
														<div class="form-group">	
															<div class="col-md-3" style="margin-left:35px;">
																<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama petugas"/>
															</div>
															<div class="col-md-2">
																<button type="button" class="btn btn-info">Cari</button>
															</div>
															<br><br>	
														</div>		
														<div style="margin-left:20px; margin-right:20px;"><hr></div>
														<div class="portlet-body" style="margin: 0px 10px 0px 10px">
															<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
																<thead>
																	<tr class="warning">
																		<td>Nama Obat</td>
																		<td>Tgl Kadaluarsa</td>
																		<td>Satuan</td>
																		<td>Stok</td>
																		<td>Harga</td>
																		<td width="10%">Pilih</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Jems</td>
																		<td>101010</td>
																		<td>Tab</td>
																		<td>10</td>
																		<td>20000</td>
																		<td style="text-align:center"><a href="#" class ="addNewKomposisi"><i class="glyphicon glyphicon-check"></i></a></td>
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

 
<div class="navigation" style="margin-left: 10px;" >
	<div class="row">
		<div class="col-md-12">
			<div class="row invoice-tab">
								
			 	<div class="col-md-3" style="background: #A7FFAE;margin-left:15px;min-height: 480px; border-radius:5px;" >
			 				<div style="padding-top:10px"></div>
					 			<!-- <div style="overflow:scroll;overflow-x:hidden; height: 460px;">
				         -->
					 			<div class="dropdown" style="margin-left:0px;width:98.5%;">
						            <div id="titleInformasi">Informasi Resep</div>
						            <!-- <div id="btnBawahDataPasienObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> --> 
					            </div>
					            <br>
			            
					            <div class="informasi" id="infoDataPasienObat" style="margin-left:10px;">
							        	<form class="form-horizontal" role="form">
							        		<div class="form-group">
							        			<label class="col-md-5">Nama :</label>
							    			 	
							        			<label class="col-md-6" style="font-weight:bold;">Lena Soputri</label>
							    			 	
							    			 </div>
							    			 <div class="form-group">
							    			 	<label class="col-md-5">Umur :</label>
							    			 	
							        			<label class="col-md-6" style="font-weight:bold;">25</label>
							    			 	
							    			 </div>

							    			 <div class="form-group">
							    			 	<label class="col-md-5">Alamat :</label>
							    			 	
							        			<label class="col-md-6" style="font-weight:bold;">Jalan Godean</label>
							    			 	
							    			 	
							    			 </div>
							    			 <div class="form-group">
							    			 	<label class="col-md-5">Jenis Kelamin :</label>
							    			 	
							        			<label class="col-md-6" style="font-weight:bold;">Perempuan</label>
							    			 	
							    			 </div>
							    			 <div class="form-group">
							    			 	<label class="col-md-5">No. Nota :</label>
							    			 	
							        			<label class="col-md-6" style="font-weight:bold;">112001</label>
							    			 	
							    			 </div>
							    			 <div class="form-group">
							    			 	<label class="col-md-5">ID Resep :</label>
							    			 	
							        			<label class="col-md-6" style="font-weight:bold;">112001</label>
							    			 	
							    			 </div>
							    			 <div class="form-group">
							    			 	<label class="col-md-5">Tgl. Transaksi :</label>
							    			 	
							        			<label class="col-md-6" style="font-weight:bold;">10 Mei 2012</label>
							    			 	
							    			 </div>
							    			 <div class="form-group">
							    			 	<label class="col-md-5">Dokter :</label>
							    			 	
							        			<label class="col-md-6" style="font-weight:bold;">Kalvin Khrisna</label>
							    			 	
							    			 </div>
							    			 <div class="form-group">
							    			 	
							    			 	<label class="col-md-5">Apoteker :</label>
							    			 	<div class="col-md-6">
														<input type="text" class="form-control" id="apoteker" name="apoteker" placeholder="Apoteker" data-toggle="modal" data-target="#modApoteker">	
								        		</div>
							    			 </div>
							    			 <div class="form-group">
							    			 
							    			 	<label class="col-md-5">Kasir :</label>
							    			 	
							        			<label class="col-md-6" style="font-weight:bold;">Kalvin Khrisna</label>
							    			 	
							    			 </div>
							    			 
							        	</form>
							    </div>
					<!-- 		    </div>
 -->
			 			<!-- Batas -->
			 			
			 	</div>
			 	<div class="col-md-8" style=" background: #A7FFAE;min-height: 800px; margin-right: 50px;border-radius:5px;float:right">
			 			<div style="padding-top:10px"></div>
<!-- 						<div style="overflow:scroll;overflow-x:hidden; height: 460px;">
 -->					<!-- 
						<div class="dropdown" style="margin-left:0px;width:98.5%;">
				            <div id="titleInformasi" >TambahObat</div>
				            <div id="btnBawahTambahObat" class="btnBawah" ><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
			            </div>
			            <br>
			                <div class="informasi" id="infoTambahObat" style="margin-left:10px;">
			                	<button class="btn btn-success" data-toggle="modal" data-target="#modObatRacikan" >Obat Racikan</button>
			                	<button class="btn btn-success" data-toggle="modal" data-target="#modObatNonRacikan">Obat Non Racikan</button>
					        </div> -->

		<!-- 				<div class="dropdown" style="margin-left:0px;width:98.5%;">
				            <div id="titleInformasi" >Obat Racikan</div>
				            <div id="btnBawahObatRacikan" class="btnBawah" ><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
			            </div>
			            <br>
			                <div class="informasi" id="infoObatRacikan" style="margin-left:10px;">
					        	<form class="form-horizontal" role="form">
					        	<div class="form-group">
					        		<div class="col-md-2">Nama Obat</div>
					        		<div class="col-md-3">
					        			<select class="form-control select" name="selectObatRacikan" id="selectObatRacikan" >
															<option value="1" selected>Racik 1</option>
															<option value="2">Racik 2</option>
															<option value="3" >Racik 3</option>
															<option value="4" >Racik 4</option>
										</select>
					        		</div>
					        	</div>
					        	<div class="form-group">
					        		<div class="col-md-2">Satuan</div>
					        		<div class="col-md-3" >
					        			<select class="form-control select" name="selectSatObatRacikan" id="selectSatObatRacikan" >
															<option value="Kapsul" selected>Kapsul</option>
															<option value="Bungkus">Bungkus</option>
															<option value="Pot"  >Pot</option>
										</select>
					        		</div>
					        	</div>
					        	<div class="form-group">
					        		<div class="col-md-2" >Jumlah</div>
					        		<div class="col-md-3" >
					        			<input type="text" class="form-control" id="jmlObatRacikan" name="jmlObatRacikan" placeholder="Jml"/>	
					        		</div>
					        	</div>
					        	<div class="form-group">
					        		<div class="col-md-2" >Komposisi</div>
					        		<div class="col-md-3" >
					        			<input type="text" class="form-control" id="komposisiRacik" name="komposisiRacik" placeholder="Komposisi"  data-toggle="modal" data-target="#komposisi"/>	
					        		</div>

					        	</div>

					       		<div class="form-group">

									<div class="portlet-body" style="margin: 0px 20px 0px 15px">
										
										<table class="table table-striped table-bordered table-hover table-responsive" id="tblObatRacikan">
											<thead>
												<tr class="info" >
													<th  style="text-align:left"> Nama Obat </th>
													<th  style="text-align:left"> Quantity </th>
													
												</tr>
											</thead>
											<tbody id="addInputKom">
													
											</tbody>
										</table>
									
									<a href="#" class="tmbahObat"  id="tmbhObatRacikan"><i class="fa fa-plus" style="margin-top : 10px;">..Tambah Obat</i></a>
									
									</div>
					        	</div>
							
					        	</form>
					        </div>
 --><!-- 
							<div class="dropdown" style="margin-left:0px;width:98.5%;">
					            <div id="titleInformasi">Obat Non-Racikan</div>
					            <div id="btnBawahObatNonRacikan" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
				            </div>
				            <br>

				            <div class="informasi" id="infoObatNonRacikan" style="margin-left:10px;">
					        	<form class="form-horizontal" role="form">
					        	<div class="form-group">
						        	<div class="col-md-2" style="margin-left:0px">Nama Obat</div>
						        	<div class="col-md-3" >
						        			<input type="text" class="form-control" id="nmObatNonRacikan" name="nmObatNonRacikan" placeholder="Nama Obat" data-toggle="modal" data-target="#obatNon">	
						        	</div>
					        	</div>

					        	<div class="form-group">
						        	<div class="col-md-2">Jumlah</div>
						        	<div class="col-md-3">
						        			<input type="text" class="form-control" id="nmObatNonRacikan" name="nmObatNonRacikan" placeholder="Jumlah">	
						        	</div>

					        	</div>
					        	<div class="form-group">
					        		<div class="col-md-2">
					        				<a href="#" class="tmbahObat" id="tmbhObatNonRacikan"><i class="fa fa-plus" style="margin-top : 10px;">..Tambah Obat</i></a>
					        	
					        		</div>
					        	</div>
								</form>
					        </div> -->
<!-- 					    </div>
 -->
			 			<!-- Batas -->
			 			<!-- <div style="padding-top:5px"></div>
			 			<div class="dropdown" style="margin-left:0px;width:98.5%;">
				            <div id="titleInformasi">Informasi Pasien</div>
				            <div id="btnBawahDataPasienObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
			            </div>
			            <br>
			            
			            <div class="informasi" id="infoDataPasienObat" style="margin-left:10px;">
					        	<form class="form-horizontal" role="form">
					        		<div class="form-group">
					    			 	<div class="col-md-2">Nama</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="namaPas" name="namaPas" placeholder="Nama Pasien" disabled>	
						        		</div>
					    			 	<div class="col-md-2">Umur</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="umurPas" name="umurPas" placeholder="Umur" disabled>	
						        		</div>
					    			 </div>

					    			 <div class="form-group">
					    			 	<div class="col-md-2">Alamat</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="alPas" name="alPas" placeholder="Alamat Pasien" disabled>	
						        		</div>
					    			 	<div class="col-md-2">Jenis Kelamin</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="jkPas" name="jkPas" placeholder="Jenis Kelamin" disabled>	
						        		</div>
					    			 </div>
					    			 
					        	</form>
					    </div>
 -->

			 			<div class="dropdown" style="margin-left:0px;width:98.5%;">
				            <div id="titleInformasi">Transaksi Penjualan Obat</div>
				            <div id="btnBawahDataObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 				            	
			            </div>
			            <br>
			            
			            <div class="informasi" id="infoDataObat" style="margin-left:10px;">
					        		
			            		<div class="form-group">
					    				<div class="col-md-6">
					    				<button class="btn btn-success" data-toggle="modal" data-target="#modObatRacikan" >Obat Racikan</button>
					                	<button class="btn btn-success" data-toggle="modal" data-target="#modObatNonRacikan">Obat Non Racikan</button>	
					    				</div>
					    		</div>
					    		<form class="form-horizontal" role="form" >
					    			<div class="form-group">
					    				<div class="col-md-6">
					    				</div>
					    			</div>
					        		<hr class="garis" style="border: solid 2px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:50px;">
							        <br>

					        		<div class="form-group">
					    			 	<div class="portlet-body" style="margin: 0px 50px 0px 20px">
													<table class="table table-striped table-bordered table-hover tabelinformasi" style="width:100%;">
														<thead>
															<tr class="warning">
																<td width="20%">Tipe Obat</td>
																<td >Obat</td>
																<td width="10%">Jumlah</td>
																<td width="10%">Satuan</td>
																<td width="10%">Harga</td>
																<td width="10%">Embalase</td>
																<td width="10%">JF</td>
																<td width="10%">Biaya Tambahan</td>
																<td width="10%">Total</td>
																<td width="10%">Action</td>
															</tr>
														</thead>
														<tbody id="addTabObat"><!-- 
															<tr>
																<td>Obat Racik 1</td>
																<td style="text-align:center">A,B,C</td>
																<td style="text-align:center">20</td>
																<td style="text-align:center">KG</td>
																<td style="text-align:center">10000</td>
																<td style="text-align:center">3000</td>
																<td style="text-align:center">12</td>
																<td style="text-align:center"><a href="#" class="editableform editable-click tmbhnBy" data-type="text" data-pk="1" data-original-title="Jumlah Tambahan" id="byTambah">0</a></td>
																<td style="text-align:center">30000</td>
																<td width="10%">Remove</td>
															</tr> -->
															
														</tbody>
													</table>												
												</div>
					    			 </div>
					    			 <div class="form-group">
										<div class="col-md-2 pull-right">
											<label class="control-label pull-right" style="font-size:3em;">0</label>
										</div>
										<div class="col-md-2 pull-right" style="width:150px; margin-top:5px;">
											Sub Total : 
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-2 pull-right" style="width:140px;">
											<input type="text" class="form-control" id="potonganObat" name="potonganObat" placeholder="Potongan" />
										</div>
										<div class="col-md-2 pull-right" style="width:100px;">
						         			<select class="form-control select" name="jenispotonganJualObat" id="selectpotongan" >
												<option value="%" selected>%</option>
												<option value="rp">Rp. </option>
											</select>
										</div>
										<div class="col-md-2 pull-right" style="width:150px; margin-top:5px;">
											Potongan : 
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-2 pull-right">
											<input type="text" class="form-control" id="ppnObat" name="ppnObat" placeholder="PPN" />
										</div>
										<div class="col-md-2 pull-right" style="width:150px; margin-top:5px;">
											PPN (%) : 
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-2 pull-right">
											<label class="control-label pull-right" style="font-size:3em;color:red;">0</label>
										</div>
										<div class="col-md-2 pull-right" style="width:150px; margin-top:5px;">
											Grand Total : 
										</div>
									</div>


									<div class="form-group">
										<div class="pull-right" style="margin-bottom:10px;margin-right:18px;">
											<button class="btn btn-success">Cetak</button>
											<button class="btn btn-warning">Bayar</button>
										</div>
									</div>
					        	</form>
			 			</div>
			 	</div>
		 	</div>
		</div>
	 </div>
</div>
											