
<div class="title">
	PENJUALAN OBAT
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="#">Penjualan Obat</a>
	
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
								<option value="" selected>Pilih</option>
								<option value="Racik 1" >Racik 1</option>
								<option value="Racik 2" >Racik 2</option>
								<option value="Racik 3" >Racik 3</option>
								<option value="Racik 4" >Racik 4</option>
							</select>
		        		</div>
		        	</div>
		        	<div class="form-group">
		        		<div class="col-md-5" style="font-weight:bold">Satuan</div>
		        		<div class="col-md-6" >
		        			<select class="form-control select" name="selectSatObatRacikan" id="selectSatObatRacikan" >
								<option value="" selected>Pilih</option>
								<option value="Kapsul" >Kapsul</option>
								<option value="Bungkus">Bungkus</option>
								<option value="Pot"  >Pot</option>
							</select>
		        		</div>
		        	</div>

		        	<div class="form-group">
		        		<div class="col-md-5" style="font-weight:bold">Jumlah</div>
		        		<div class="col-md-6" >
		        			<input type="number" class="form-control" id="jmRacik" name="jmRacik" value="0"/>	
		        		</div>
		        	</div>

					<hr class="garis" style="border: solid 2px #50BFF9; border-radius: 5px; margin-left:10px;">
		        	<br>
		        </form>
		        <form class="form-horizontal" role="form" id="cariobatracik" method="post">
		        	<div class="form-group">
		        		<div class="col-md-5" >
		        			<input type="text" class="form-control" id="komposisiRacik" name="komposisiRacik" placeholder="Search komposisi" style="margin-left:50px" autofocus="" />	
		        		</div>
		        	</div>
		        </form>
		        <form class="form-horizontal" role="form">
		        	<div class="form-group">
		        	<div style="overflow:scroll;overflow-x:hidden; max-height: 250px;">
		        		<div class="portlet-body" style="margin: 0px 0px 0px 60px">
							<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
								
								<tbody id="tbodyobatracik">
									<!-- <tr>
										<td>
											Cari Komposisi
										</td>
									</tr> -->
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
							<button class="btn btn-success" style="margin-top : 10px;" id="tmbhObatRacik">Tambah Obat</button>
						</div>
		        	</div>
					
		        	<div class="form-group">
		        		<div class="col-md-12">
		        			<span style="font-size:12pt;color:red;" id="ket_total_obat">Total Obat Berhasil ditambahkan: 0</span>	
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
    			<form class="form-horizontal" role="form" id="formnonracik" method="post">
			        <div class="form-group">
		        		<div class="col-md-5" >
		        			<input type="text" class="form-control" id="komposisiNonRacik" name="komposisiNonRacik" placeholder="Search Nama Obat" style="margin-left:50px;" autofocus="" />	
		        		</div>
		        	</div>
		        	<div class="form-group">
			        	<div style="overflow:scroll;overflow-x:hidden; max-height: 250px;">
			        		<div class="portlet-body" style="margin: 0px 10px 0px 60px">
								<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchDiagnosa" style="width:90%;">
									<tbody id="tbodyobatnonracik">
										<?php  echo "<td><center>Cari Komposisi</center></td>"; ?>
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
		        			<button id="tmbhObatNonRacik" class="btn btn-success" type="button" style="margin-top : 10px;">Tambah Obat</button>
		        		</div>
		        	</div>
		        	<div class="form-group">
		        		<div class="col-md-12">
		        			<span style="font-size:12pt;color:red;" id="ket_total_nonracik">Total Obat Berhasil ditambahkan: 0</span>	
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
    				<form class="form-horizontal" role="form" method="post" id="cariapoteker">
						<div class="form-group">	
							<div class="col-md-3" style="margin-left:35px;">
								<input type="text" class="form-control" name="katakunci" id="katakunciapoteker" placeholder="Nama petugas"/>
							</div>
							<div class="col-md-2">
								<button type="submit" class="btn btn-info">Cari</button>
							</div>
							<br><br>	
						</div>		
					</form>
					<div style="margin-left:20px; margin-right:20px;"><hr></div>
					<div class="portlet-body" style="margin: 0px 0px 0px 40px">
						<table class="table table-striped table-bordered table-hover tabelinformasi" style="width:90%;">
							<thead>
								<tr class="info">
									<td>Nama Apoteker</td>
									<td width="10%">Pilih</td>
								</tr>
							</thead>
							<tbody id="tbodyapoteker">
								<tr>
									<td style="text-align:center" colspan="2">Cari Apoteker</td>
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
	<form class="form-horizontal" role="form" id="submitpenjualanobat" method="post">
		<div class="row">
			<div class="col-md-12">
				<div class="row invoice-tab">
				 	<div class="col-md-3" style="background: #A7FFAE;margin-left:15px;min-height: 480px; border-radius:5px; width:390px" >
		 				<div style="padding-top:10px"></div>
			 			<div class="dropdown" style="margin-left:0px;width:100%;">
				            <div id="titleInformasi">Informasi Resep</div>
				        </div>
			            <br>
			            <div class="informasi" id="infoDataPasienObat" style="margin-left:10px;">
			        		<div class="form-group">
			        			<input type="hidden" id="re_visit_id" value="<?php echo $inforesep['visit_id'] ?>">
			        			<input type="hidden" id="re_resep_id" value="<?php echo $inforesep['resep_id'] ?>">
			        			<input type="hidden" id="re_kasir_id" value="<?php echo $kasir['petugas_id'] ?>">
			        			<input type="hidden" id="re_dokter_id" value="<?php echo $inforesep['petugas_id'] ?>">
			        			<label class="col-md-5">Nama :</label>
			        			<label class="col-md-6" style="font-weight:bold;"><?php echo $inforesep['nama'] ?></label>
			    			 </div>
			    			 <div class="form-group">
			    			 	<label class="col-md-5">Umur :</label>
			        			<label class="col-md-6" style="font-weight:bold;">25</label>
			    			 </div>
			    			 <div class="form-group">
			    			 	<label class="col-md-5">Alamat :</label>
			        			<label class="col-md-6" style="font-weight:bold;"><?php echo $inforesep['alamat_skr'] ?></label>
			    			 </div>
			    			 <div class="form-group">
			    			 	<label class="col-md-5">Jenis Kelamin :</label>
			        			<label class="col-md-6" style="font-weight:bold;"><?php echo $inforesep['jenis_kelamin'] ?></label>
			    			 </div>
			    			 <div class="form-group">
			    			 	<label class="col-md-5">Cara Bayar :</label>
			        			<label class="col-md-6" id="re_cara_bayar" style="font-weight:bold;"><?php echo (empty($inforesep['bayar_ri']) ? $inforesep['bayar_rj'] : $inforesep['bayar_ri']) ?></label>
			    			 </div>
			    			 <div class="form-group">
			    			 	<label class="col-md-5">ID Resep :</label>
			        			<label class="col-md-6" style="font-weight:bold;"><?php echo($inforesep['resep_id']) ?></label>
			    			 </div>
			    			 <div class="form-group">
			    			 	<label class="col-md-5">Tgl. Resep :</label>
			        			<label class="col-md-6" style="font-weight:bold;"><?php echo(DateTime::createFromFormat('Y-m-d',$inforesep['tanggal'])->format('d F Y')) ?></label>
			    			 </div>
			    			 <div class="form-group">
			    			 	<label class="col-md-5">Dokter :</label>
			        			<label class="col-md-6" style="font-weight:bold;"><?php echo $inforesep['nama_petugas']; ?></label>
			    			 </div>
			    			 <div class="form-group">
			    			 	<label class="col-md-5">Apoteker :</label>
			    			 	<div class="col-md-6">
									<input type="text" style="cursor:pointer" class="form-control" id="apoteker" name="apoteker" placeholder="Apoteker" data-toggle="modal" data-target="#modApoteker" readonly="">	
									<input type="hidden" id="re_id_apoteker">
				        		</div>
			    			 </div>
			    			 <div class="form-group">
			    			 	<label class="col-md-5">Kasir :</label>
			        			<label class="col-md-6" style="font-weight:bold;"><?php echo($kasir['nama_petugas']) ?></label>
			    			 </div>
			    			 <div class="form-group">
			    			 	<label class="col-md-5">Resep :</label>
			        			<label class="col-md-10" style="font-weight:bold;"><?php echo $inforesep['resep']; ?></label>
			    			 </div>
				    	</div>
				 	</div>
				 	<div class="col-md-8" style=" background: #A7FFAE;min-height: 800px; margin-right: 30px;border-radius:5px;float:right">
				 		<div style="padding-top:10px"></div>

			 			<div class="dropdown" style="margin-left:0px;">
				            <div id="titleInformasi">Transaksi Penjualan Obat</div>
				            <div id="btnBawahDataObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 				            	
			            </div>
			            <br>
				            
			            <div class="informasi" id="infoDataObat" style="margin-left:10px;">
		            		<div class="form-group">
			    				<div class="col-md-6">
			    				<button class="btn btn-success" type="button" data-toggle="modal" data-target="#modObatRacikan" >Obat Racikan</button>
			                	<button class="btn btn-success" type="button" data-toggle="modal" data-target="#modObatNonRacikan">Obat Non Racikan</button>	
			    				</div>
				    		</div>
						    		
			    			<div class="form-group">
			    				<div class="col-md-6">
			    				</div>
			    			</div>
			        		<hr class="garis" style="border: solid 2px #50BFF9; border-radius: 5px; margin-left:0px; margin-right:5px;">
			        		<div class="form-group">
			    			 	<div class="portlet-body" style="margin: 0px 20px 0px 15px">
									<table id="tablesubmitbeliobat" class="table table-striped table-bordered table-hover tableDTUtamaScroll">
										<thead>
											<tr class="info">
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
										<tbody id="addTabObat">														
											
										</tbody>
									</table>												
								</div>
			    			 </div>
			    			<div class="form-group">
								<div class="col-md-2 pull-right">
									<label class="control-label pull-right" style="font-size:1.8em;margin-top:-10px;"><span id="subtotalobat">0</span></label>
								</div>
								<div class="col-md-4 pull-right" style="width:150px; margin-top:5px;margin-right:90px; text-align:right;">
									Sub Total(Rp.) : 
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-2 pull-right" style="width:140px;">
									<input type="number" class="form-control" id="potongan" maxlength="3" name="potongan" value="0" />
								</div>
								<div class="col-md-2 pull-right" style="width:100px;">
						 			<select class="form-control select" name="jenispotongan" id="selectpotongan" >
										<option value="persen" selected>%</option>
										<option value="nomilal">Rp. </option>
									</select>
								</div>
								<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
									Potongan : 
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-1 pull-right" style="font-size:18pt; width:140px;"><span id="hasilppn">0</span></label>
								<div class="col-md-2 pull-right" style="width:100px;">
									<input type="number" class="form-control" id="ppn" maxlength="3" name="ppn" value="0" />
								</div>
								<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
									PPN (%) : 
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-2 pull-right" style="width:240px;">
									<label class="control-label pull-right" style="font-size:2em;color:red;"><span id="hasilgrandtotal">0</span></label>
								</div>
								<div class="col-md-2 pull-right" style="width:150px; margin-top:15px; text-align:right;">
									Grand Total : 
								</div>
							</div>

							<div class="form-group">
								<div class="pull-right" style="margin-bottom:10px;margin-right:18px;">
									<button class="btn btn-success">Cetak</button>
									<button class="btn btn-warning">Bayar</button>
								</div>
							</div>
				 		</div>
				 	</div>
			 	</div>
			</div>
		 </div>
	</form>
</div>
											