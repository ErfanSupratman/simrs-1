
<div class="title">
	PENJUALAN OBAT
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>farmasi/homepenjualanobat">PENJUALAN OBAT</a>
	
		</li>
	
</div>
<div class="navigation" style="margin-left: 10px;" >
	<div class="row">
		<div class="col-md-12">
			<div class="row invoice-tab">
			 	<div class="col-md-3" id="rowfix" style="background: #50BFF9;margin-left:15px;min-height: 450px; border-radius:5px;position:fixed;" >
			 			<div style="padding-top:10px"></div>
						<div style="overflow:scroll;overflow-x:hidden; height: 430px;">
				        
						<div class="dropdown" style="margin-left:0px;width:98.5%;background: white;">
				            <div id="titleInformasi" style=" color:#50BFF9">Obat Racikan</div>
				            <div id="btnBawahObatRacikan" class="btnBawah" style="color:#50BFF9"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
			            </div>
			            <br>
			                <div class="informasi" id="infoObatRacikan" style="margin-left:0px;">
					        	<form class="form-horizontal" role="form">
					        	<div class="form-group">
					        		<div class="col-md-5" style="margin-left:0px">Nama Obat</div>
					        		<div class="col-md-6">
					        			<select class="form-control select" name="selectObatRacikan" id="selectObatRacikan" >
															<option value="1" selected>Racik 1</option>
															<option value="2">Racik 2</option>
															<option value="3" >Racik 3</option>
															<option value="4" >Racik 4</option>
										</select>
					        		</div>
					        	</div>
					        	<div class="form-group">
					        		<div class="col-md-5" style="margin-left:0px">Satuan</div>
					        		<div class="col-md-6" >
					        			<select class="form-control select" name="selectSatObatRacikan" id="selectSatObatRacikan" >
															<option value="Kapsul" selected>Kapsul</option>
															<option value="Bungkus">Bungkus</option>
															<option value="Pot"  >Pot</option>
										</select>
					        		</div>
					        	</div>
					        	<div class="form-group">
					        		<div class="col-md-5" style="margin-left:0px">Jumlah</div>
					        		<div class="col-md-4" >
					        			<input type="text" class="form-control" id="jmlObatRacikan" name="jmlObatRacikan" placeholder="Jml"/>	
					        		</div>
					        	</div>
					        	<div class="form-group">
					        		<div class="col-md-5" style="margin-left:0px">Komposisi</div>
					        		<div class="col-md-6" >
					        			<input type="text" class="form-control" id="komposisiRacik" name="komposisiRacik" placeholder="Komposisi"  data-toggle="modal" data-target="#komposisi"/>	
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


									<div class="portlet-body" style="margin: 0px 10px 0px 0px">
										
										<table class="table table-striped table-bordered table-hover table-responsive" id="tblObatRacikan">
											<thead>
												<tr class="info" >
													<th  style="text-align:left"> Nama Obat </th>
													<th  style="text-align:left"> Quantity </th>
													
												</tr>
											</thead>
											<tbody >
													<tr><td>A</td><td>10</td></tr>
													<tr><td>B</td><td>10</td></tr>
													<tr><td>X</td><td>10</td></tr>
											</tbody>
										</table>
									
									<a href="#" class="tmbahObat"  id="tmbhObatRacikan"><i class="fa fa-plus" style="margin-top : 10px; color:white;">..Tambah Obat</i></a>
									
									</div>
					        	
							
					        	</form>
					        </div>

							<div class="dropdown" style="margin-left:0px;width:98.5%;background: white;">
					            <div id="titleInformasi" style=" color:#50BFF9">Obat Non-Racikan</div>
					            <div id="btnBawahObatNonRacikan" class="btnBawah" style="color:#50BFF9"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
				            </div>
				            <br>

				            <div class="informasi" id="infoObatNonRacikan" style="margin-left:0px;">
					        	<form class="form-horizontal" role="form">
					        	<div class="form-group">
						        	<div class="col-md-5" style="margin-left:0px">Nama Obat</div>
						        	<div class="col-md-6" >
						        			<input type="text" class="form-control" id="nmObatNonRacikan" name="nmObatNonRacikan" placeholder="Nama Obat" data-toggle="modal" data-target="#obatNon">	
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
					        	<div class="form-group">
						        	<div class="col-md-5" style="margin-left:0px">Jumlah</div>
						        	<div class="col-md-6">
						        			<input type="text" class="form-control" id="nmObatNonRacikan" name="nmObatNonRacikan" placeholder="Nama Obat">	
						        	</div>

					        	</div>
					        	<div class="form-group">
					        		<div class="col-md-6" style="margin-left:0px">
					        				<a href="#" class="tmbahObat" id="tmbhObatNonRacikan"><i class="fa fa-plus" style="margin-top : 10px; color:white;">..Tambah Obat</i></a>
					        	
					        		</div>
					        	</div>
								</form>
					        </div>
					    </div>
			 	</div>
			 	<div class="col-md-8" style=" background: #A7FFAE;min-height: 800px; margin-right: 50px;border-radius:5px;float:right">
			 			<div style="padding-top:5px"></div>
			 			<div class="dropdown" style="margin-left:0px;width:98.5%;">
				            <div id="titleInformasi">Data Obat</div>
				            <div id="btnBawahDataObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
			            </div>
			            <br>
			            
			            <div class="informasi" id="infoDataObat" style="margin-left:10px;">
					        	<form class="form-horizontal" role="form">
					    			 <div class="form-group">
					    			 	<div class="col-md-2">No Nota</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="noNota" name="noNota" placeholder="Nomor Nota" disabled>	
						        		</div>
					    			 	<div class="col-md-2">Apoteker</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="apoteker" name="apoteker" placeholder="Apoteker" data-toggle="modal" data-target="#modApoteker">	
						        		</div>
					    			 </div>

					    			 <div class="form-group">
					    			 	<div class="col-md-2">ID Resep</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="idResep" name="idResep" placeholder="ID Resep" disabled>	
						        		</div>
					    			 	<div class="col-md-2">Dokter</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="dokterObat" name="dokterObat" placeholder="Dokter" disabled>	
						        		</div>
					    			 </div>

					    			 <div class="form-group">
					    			 	<div class="col-md-2">Tgl Transaksi</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="tglTransaksiObt" name="tglTransaksiObt" placeholder="Tanggal Transaksi" disabled>	
						        		</div>
					    			 	<div class="col-md-2">Kasir</div>
					    			 	<div class="col-md-2" style="margin-left:-40px;">
												<input type="text" class="form-control" id="kasirObat" name="kasirObat" placeholder="Kasir" data-toggle="modal" data-target="#modKasirObat">	
						        		</div>
					    			 </div>	

					    			 <hr class="garis" style="border: solid 2px #50BFF9; border-radius: 5px; margin-left:0px;">		
					    			 <br>
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
			 	</div>
		 	</div>
		</div>
	 </div>
</div>
											