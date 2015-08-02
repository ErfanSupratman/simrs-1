<div class="title">
	BERSALIN - INVOICE PASIEN NON BPJS
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>bersalin/homebersalin">Nama Pasien Bersalin</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>bersalin/tagihannonbpjs">Invoice</a>
	</li>
</div>

<div class="backregis">
	<div id="my-tab-content" class="tab-content">
			
		<div class="informasi">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label1 col-md-4 nama">Nomor Invoice</label>
						<div class="col-md-3 nama">: 0001 </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label1 col-md-4">Visit ID</label>
						<div class="col-md-5">:	20202 </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label1 col-md-4">Kelas Perawatan</label>
						<div class="col-md-5">: Kelas 1</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label1 col-md-4">Tanggal Bayar</label>
						<div class="col-md-5">: 12 Mei 2012</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label1 col-md-4">Tanggal Kunjungan</label>
						<div class="col-md-5">: 20 Mei 2012</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label1 col-md-4">Nomor Rekam Medis</label>
						<div class="col-md-5">: 123123</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label1 col-md-4">Cara Bayar</label>
						<div class="col-md-5">: Asuransi</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label1 col-md-4">Nama Pasien</label>
						<div class="col-md-5">: Bejoe</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label1 col-md-4">Nama Asuransi</label>
						<div class="col-md-5">: Allianz</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label1 col-md-4">Alamat</label>
						<div class="col-md-5">: Rumahnya</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label1 col-md-4">Nama Perusahaan</label>
						<div class="col-md-5">: Apalah</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label1 col-md-4">Jenis Kunjungan</label>
						<div class="col-md-5">: Biasa</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label1 col-md-4">Nomor Ansuransi </label>
						<div class="col-md-5">: 1203129312</div>
					</div>
				</div>
			</div>
		</div>

		<hr class="garis">

		<form class="form-horizontal" role="form">
			<div id="tagihadmisi">
				<div id="titleInformasi" style="margin-bottom:-30px;">Tagihan Admisi</div>
				<div style="border: solid 3px #50BFF9;border-top-width:30px;margin:0px 10px 0px 10px;padding:20px" role="form">
					
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr class="info">
									<th width="20">No.</th>
									<th>Admisi Tertagih</th>
									<th>Waktu </th>
									<th>Tarif</th>
									
								</tr>
							</thead>
							<tbody id="tbody_resep">
								<tr>
									<td width="20">No.</td>
									<td>Coeg</td>
									<td style="text-align:center">12 Mei 1201</td>
									<td style="text-align:right">1000011</td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div><br>
			
			<div id="tagihankamar">
				<div id="titleInformasi" style="margin-bottom:-30px;">Tagihan Kamar</div>
				<div style="border: solid 3px #50BFF9;border-top-width:30px;margin:0px 10px 0px 10px;padding:20px" role="form">

					<a href="#modalttkamar" data-toggle="modal" style="margin-left:20px;font-size:12pt"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Tagihan Kamar">&nbsp;Tambah Tagihan Kamar</i></a>
					<div class="clearfix"></div>
					
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover" id="tbtagihankamar">
							<thead>
								<tr class="info">
									<th width="20">No.</th>
									<th>Kamar Tertagih</th>
									<th>Waktu Masuk </th>
									<th>Waktu Keluar</th>
									<th>Lama</th>
									<th>Tarif</th>
									<th width="100">On Faktur</th>
									<th>Total</th>
									<th width="50">Delete</th>
								</tr>
							</thead>
							<tbody id="tbody_ttkamar">
								<tr>
									<td>1</td>
									<td>007</td>
									<td style="text-align:center;">12 Desember 2012 - 12:12</td>
									<td style="text-align:center;">12 Desember 2014 - 13:13</td>
									<td>2 tahun</td>
									<td style="text-align:right;">1000</td>
									<td style="text-align:right;">299</td>
									<td style="text-align:right;">1000</td>
									<td style="text-align:center">
										<a href="#">
										<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div><br>

			<div id="tagihanakomodasi">
				<div id="titleInformasi" style="margin-bottom:-30px;">Tagihan Akomodasi</div>
				<div style="border: solid 3px #50BFF9;border-top-width:30px;margin:0px 10px 0px 10px;padding:20px" role="form">

					<a href="#modalttakomodasi" data-toggle="modal" style="margin-left:20px;font-size:12pt"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Tagihan Akomodasi">&nbsp;Tambah Tagihan Akomodasi</i></a>
					<div class="clearfix"></div>
					
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover" id="tbtagihanakomodasi">
							<thead>
								<tr class="info">
									<th width="20">No.</th>
									<th>Akomodasi Tertagih</th>
									<th>Unit</th>
									<th>Jumlah</th>
									<th>Tarif</th>
									<th width="100">On Faktur</th>
									<th>Total</th>
									<th width="50">Delete</th>
								</tr>
							</thead>
							<tbody id="tbody_ttakomodasi">
								<tr>
									<td>1</td>
									<td>123</td>
									<td>asd</td>
									<td style="text-align:right;">123</td>
									<td style="text-align:right;">123</td>
									<td style="text-align:right;"><input type="text" class="form-control input-sm" style="width:80px" name="onfakturakomodasi"></td>
									<td style="text-align:right;">123</td>
									<td style="text-align:center">
										<a href="#">
										<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div><br>

			<div id="tagihantindakanperawatan">
				<div id="titleInformasi" style="margin-bottom:-30px;">Tagihan Tindakan Perawatan</div>
				<div style="border: solid 3px #50BFF9;border-top-width:30px;margin:0px 10px 0px 10px;padding:20px" role="form">

					<a href="#modalttperawatan" data-toggle="modal" style="margin-left:20px;font-size:12pt"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Tagihan Tindakan Perawatan">&nbsp;Tambah Tagihan Tidakan Perawatan</i></a>
					<div class="clearfix"></div>
					
					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover" id="tbtagihanperawatan">
							<thead>
								<tr class="info">
									<th width="20">No.</th>
									<th>Perawatan Tertagih</th>
									<th>Unit</th>
									<th>Waktu</th>
									<th>Tarif</th>
									<th width="100">On Faktur</th>
									<th>Total</th>
									<th width="50">Delete</th>
								</tr>
							</thead>
							<tbody id="tbody_ttperawatan">
								<tr>
									<td>1</td>
									<td>asd</td>
									<td>asd</td>
									<td style="text-align:center;">12 Desember 2012 - 12:12</td>
									<td style="text-align:right;">312</td>
									<td style="text-align:right;">212</td>
									<td style="text-align:right;">121</td>
									<td style="text-align:center">
										<a href="#">
										<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div><br>

			<div id="tambahtindakanpenunjang">
				<div id="titleInformasi" style="margin-bottom:-30px;">Tagihan Tindakan Penunjang</div>
				<div style="border: solid 3px #50BFF9;border-top-width:30px;margin:0px 10px 0px 10px;padding:20px" role="form">

					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover" id="tbtagihanpenunjang">
							<thead>
								<tr class="info">
									<th width="20">No.</th>
									<th>Penunjang Tertagih</th>
									<th>Unit</th>
									<th>Waktu</th>
									<th>Tarif</th>
									<th width="100">On Faktur</th>
									<th>Total</th>
									
								</tr>
							</thead>
							<tbody id="tbody_ttpenunjang">
								<tr>
									<td>1</td>
									<td>asdasd</td>
									<td>asdasd</td>
									<td>12 Mei 2012 - 12:12</td>
									<td style="text-align:right;">123</td>
									<td style="text-align:right;">122</td>
									<td style="text-align:right;">212</td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div><br>

			<div id="tambahtagihantindakanoperasi">
				<div id="titleInformasi" style="margin-bottom:-30px;">Tagihan Tindakan Operasi</div>
				<div style="border: solid 3px #50BFF9;border-top-width:30px;margin:0px 10px 0px 10px;padding:20px" role="form">

					<div class="portlet-body" style="margin: 0px 10px 0px 10px">
						<table class="table table-striped table-bordered table-hover" id="tbtagihanoperasi">
							<thead>
								<tr class="info">
									<th width="20">No.</th>
									<th>Operasi Tertagih</th>
									<th>Lingkup Operasi</th>
									<th>Waktu</th>
									<th>Tarif</th>
									<th width="100">On Faktur</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody id="tbody_ttoperasi">
								<tr>
									<td>1</td>
									<td>asdasd</td>
									<td>asdasd</td>
									<td style="text-align:center;">12 Mei 2912 - 12:12</td>
									<td style="text-align:right;">123</td>
									<td style="text-align:right;">321</td>
									<td style="text-align:right;">123213</td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div><br>

			<div style="margin-right:40px;">
				<div class="form-group">
					<div class="col-md-2 pull-right">
						<label class="control-label pull-right" style="font-size:1.8em;margin-top:-10px;">1.000.000</label>
					</div>
					<div class="col-md-4 pull-right" style="width:150px; margin-top:5px; text-align:right;">
						Total Tagihan (Rp.) : 
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-2 pull-right">
						<label class="control-label pull-right" style="font-size:1.8em;margin-top:-10px;">1.000.000</label>
					</div>
					<div class="col-md-4 pull-right" style="width:150px; margin-top:5px; text-align:right;">
						Deposit (Rp.) : 
					</div>
				</div>


				<div class="form-group">
					<div class="col-md-2 pull-right">
						<label class="control-label pull-right" style="font-size:1.8em;margin-top:-10px;">1.000.000</label>
					</div>
					<div class="col-md-4 pull-right" style="width:150px; margin-top:5px; text-align:right;">
						Kekurangan (Rp.) : 
					</div>
				</div>
			</div>

			<div class="pull-right" style="margin-right:40px;">
				<br>
				<a href="<?php echo base_url() ?>kasirtindakan/tambahinvoice" class="btn btn-warning">KEMBALI</a>
				<button type="reset" class="btn btn-danger">BATAL</button>
   				<!-- <button type="submit" class="btn btn-success">SIMPAN</button> -->
   				<button type="submit" class="btn btn-info">BAYAR</button>
			</div>
			<br><br>
		</form>

		<div class="modal fade" id="modalttkamar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<form class="form-horizontal" role="form" method="POST" id="submitTindakan">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
			   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			   				<h3 class="modal-title" id="myModalLabel">Tambah Tagihan Kamar</h3>
			   			</div>
						<div class="modal-body">
							<div class="informasi">
				   										
			        			<div class="form-group">
									<label class="control-label col-md-4">Kamar Tertagih</label>
									<div class="col-md-5">
										<input type="text"  class="typeahead form-control" autocomplete="off" spellcheck="false" id="kamartertagih" name="kamartertagih" placeholder="Kamar Tertagih"  > 
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4">Waktu Masuk</label>
									<div class="col-md-5">	
										<div class="input-icon">
											<i class="fa fa-calendar"></i>
											<input type="text" style="cursor:pointer;background-color:white" class="form-control" readonly data-date-format="dd/mm/yyyy - hh:ii" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y - H:i");?>">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4">Waktu Keluar</label>
									<div class="col-md-5">	
										<div class="input-icon">
											<i class="fa fa-calendar"></i>
											<input type="text" style="cursor:pointer;background-color:white" class="form-control" readonly data-date-format="dd/mm/yyyy - hh:ii" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y - H:i");?>">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4">Lama</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" id="lama" name="lama" placeholder="Lama" readonly> 
									</div>
			        			</div>

			        			<div class="form-group">
									<label class="control-label col-md-4">Tarif</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" id="tarifttkamar" name="tarifttkamar" placeholder="Tarif" > 
									</div>
			        			</div>
			        			
			        			<div class="form-group">
									<label class="control-label col-md-4">On Faktur</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" id="onfakturrrkamar" name="onfakturrrkamar" placeholder="On Faktur" >
									</div>
			        			</div>

			        			<div class="form-group">
									<label class="control-label col-md-4">Total</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" id="total" name="total" placeholder="Total" readonly >
									</div>
			        			</div>

								<div class="form-group">
									<label class="control-label col-md-4">Paramedis</label>
									<div class="col-md-5">	
										<input type="text" class="typeahead form-control" name="paramedis" id="paramedis" placeholder="Search Paramedis" autocomplete="off" spellcheck="false">		
									</div>
			        			</div>
			        			
		        			</div>
	       				</div>
		        		<br>
		        		<div class="modal-footer">
		        			<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
		 			     	<button type="submit" class="btn btn-success">Simpan</button>
					    </div>
					</div>
				</div>
			</form>
		</div>

		<div class="modal fade" id="modalttakomodasi" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<form class="form-horizontal" role="form" method="POST" id="submitTindakan">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
			   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			   				<h3 class="modal-title" id="myModalLabel">Tambah Tagihan Akomodasi</h3>
			   			</div>
						<div class="modal-body">
							<div class="informasi">
				   										
			        			<div class="form-group">
									<label class="control-label col-md-4">Akomodasi Tertagih</label>
									<div class="col-md-5">
										<input type="text"  class="typeahead form-control" autocomplete="off" spellcheck="false" id="akomodasitertagih" name="akomodasitertagih" placeholder="Kamar Tertagih"  > 
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4">Unit</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" id="unitakomodasi" name="unitakomodasi" placeholder="Unit"> 
									</div>
			        			</div>

			        			<div class="form-group">
									<label class="control-label col-md-4">Jumlah</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" id="jumlahkamar" name="jumlahkamar" placeholder="Jumlah" > 
									</div>
			        			</div>

			        			<div class="form-group">
									<label class="control-label col-md-4">Tarif</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" id="tarifakomodasi" name="tarifakomodasi" placeholder="Tarif" > 
									</div>
			        			</div>
			        			
			        			<div class="form-group">
									<label class="control-label col-md-4">On Faktur</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" id="onfakturakomodasi" name="onfakturakomodasi" placeholder="On Faktur" >
									</div>
			        			</div>

			        			<div class="form-group">
									<label class="control-label col-md-4">Total</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" id="totalakomodasi" name="totalakomodasi" placeholder="Total" readonly >
									</div>
			        			</div>

								<div class="form-group">
									<label class="control-label col-md-4">Paramedis</label>
									<div class="col-md-5">	
										<input type="text" class="typeahead form-control" name="paramedis" id="paramedis" placeholder="Search Paramedis" autocomplete="off" spellcheck="false">		
									</div>
			        			</div>
			        			
		        			</div>
	       				</div>
		        		<br>
		        		<div class="modal-footer">
		        			<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
		 			     	<button type="submit" class="btn btn-success">Simpan</button>
					    </div>
					</div>
				</div>
			</form>
		</div>

		<div class="modal fade" id="modalttperawatan" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<form class="form-horizontal" role="form" method="POST" id="submitTindakan">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
			   				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			   				<h3 class="modal-title" id="myModalLabel">Tambah Tagihan Tindakan Perawatan</h3>
			   			</div>
						<div class="modal-body">
							<div class="informasi">
				   										
			        			<div class="form-group">
									<label class="control-label col-md-4">Perawatan Tertagih</label>
									<div class="col-md-5">
										<input type="text"  class="typeahead form-control" autocomplete="off" spellcheck="false" id="perawatantertagih" name="perawatantertagih" placeholder="Perawatan Tertagih"  > 
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4">Unit</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" id="unitperawatan" name="unitperawatan" placeholder="Unit"  > 
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4">Waktu</label>
									<div class="col-md-5">	
										<div class="input-icon">
											<i class="fa fa-calendar"></i>
											<input type="text" style="cursor:pointer;background-color:white" class="form-control" readonly data-date-format="dd/mm/yyyy - hh:ii" data-provide="datetimepicker" placeholder="<?php echo date("d/m/Y - H:i");?>">
										</div>
									</div>
								</div>

			        			<div class="form-group">
									<label class="control-label col-md-4">Tarif</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" id="tariftperawatan" name="tariftperawatan" placeholder="Tarif" > 
									</div>
			        			</div>
			        			
			        			<div class="form-group">
									<label class="control-label col-md-4">On Faktur</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" id="onfakturperawatan" name="onfakturperawatan" placeholder="On Faktur" >
									</div>
			        			</div>

			        			<div class="form-group">
									<label class="control-label col-md-4">Total</label>
									<div class="col-md-5">	
										<input type="text" class="form-control" id="totalperawatan" name="totalperawatan" placeholder="Total" readonly >
									</div>
			        			</div>

								<div class="form-group">
									<label class="control-label col-md-4">Paramedis</label>
									<div class="col-md-5">	
										<input type="text" class="typeahead form-control" name="paramedis" id="paramedis" placeholder="Search Paramedis" autocomplete="off" spellcheck="false">		
									</div>
			        			</div>
			        			
		        			</div>
	       				</div>
		        		<br>
		        		<div class="modal-footer">
		        			<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
		 			     	<button type="submit" class="btn btn-success">Simpan</button>
					    </div>
					</div>
				</div>
			</form>
		</div>
		<br><br><br>	
	</div>
</div>

