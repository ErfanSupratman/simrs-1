
<div class="title">
	POLIKLINIK LABORATORIUM
</div>
<div class="bar">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>laboratorium/homelab">Poliklinik Laboratorium</a>
	</li>
</div>

<div class="navigation" style="margin-left: 10px" >
 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
	    <li class="active"><a href="#list" data-toggle="tab">List Pasien Laboratorium</a></li>
	    <li><a href="#hasil" data-toggle="tab">Hasil Pemeriksaan Lab</a></li>
	   	<li><a href="#farmasi" data-toggle="tab">Farmasi</a></li>
	    <li><a href="#logistik" data-toggle="tab">Logistik</a></li>
	    <li><a href="#laporan" data-toggle="tab">Laporan</a></li>
	    <li><a href="#master" data-toggle="tab">Master</a></li>
	</ul>

	<div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="list">
           	<div class="search">
				<label class="control-label col-md-3">Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
				</label>
				<div class="col-md-4">		
					<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
		        </div>
		        <button type="submit" class="btn btn-danger">Cari</button>
			</div>	
			<br>
			<hr class="garis"><br>
			<br>
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
				<div class="portlet-body" style="margin: 10px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info">
								<th> No Rekam Medis</th>
								<th> Nama</th>
								<th>Jenis Kelamin</th>
								<th>Keterangan</th>
								<th>Tanggal</th>
								<th>Periksa</th>
							</tr>
						</thead>	
						<tbody>
							<tr>
								<td>TEST</td>
								<td>TEST</td>
								<td>TEST</td>										
								<td>TEST</td>
								<td>TEST cok</td>
								<td style="text-align:center"><a href="#tambahPeri" data-toggle="modal" ><i class="fa fa-plus"></i></a></td>										
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="tambahHasil" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-600px">
			<div class="modal-dialog">
        		<div class="modal-content" style="width:1200px">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Tambah Hasil Pemeriksaan</h3>
        			</div>	
        	    
				    <div class="dropdown">
			            <div id="titleInformasi">Identitas Pasien</div>
			            <div class="btnBawah" id="btnBawahhasil"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
			        </div>
			        <form class="form-horizontal" role="form">
			        	<br>
				        <div class="informasi" id="infohasillab">
				        	<div class="form-group">
								<label class="control-label col-md-3">No. Rekam Medis</label>
								<div class="col-md-4">
									<input type="text" class="form-control" name="noRm" placeholder="No Rekam Medis" disabled>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Nama Pasien</label>
								<div class="col-md-4">
									<input type="text" class="form-control" name="nama" placeholder="Nama Pasien" disabled>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Alamat</label>
								<div class="col-md-5">
									<input type="text" class="form-control" name="alamat" placeholder="Alamat" disabled>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Jenis Kelamin</label>
								<div class="col-md-2">
									<input type="text" class="form-control" name="jk" placeholder="Jenis Kelamin" disabled>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Tanggal Lahir</label>
								<div class="col-md-3">
									<input type="text" class="form-control" name="ttl" placeholder="Tanggal Lahir" disabled>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Umur</label>
								<div class="col-md-4">
									<input type="text" class="form-control" name="umur" placeholder="Umur" disabled>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Pengirim</label>
								<div class="col-md-4">
									<input type="text" class="form-control" name="pengirim" placeholder="Pengirim" disabled>
								</div>
							</div>
							<br>						
			            </div>
			        </form>

			        <div class="dropdown">
			            <div id="titleInformasi">Hasil Periksa</div>
			            <div class="btnBawah" id="btnBawahPeriksa"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 
			        </div>
			        <form class="form-horizontal" role="form">
			        	<div class="informasi" id="infohasilperiksa" >
			        		<div class="form-group">
								<label class="control-label col-md-3">Lab ID</label>
								<div class="col-md-2">
									<input type="text" class="form-control" name="labid" placeholder="Lab ID">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">Penunjang</label>
								<div class="col-md-2">
									<select class="form-control select" name="penunjang" id="penunjang">
										<option value="" selected>--Pilih Penunjang--</option>
										<option value="Penunjang 1">Penunjang 1</option>
										<option value="Penunjang 2">Penunjang 2</option>
									</select>
								</div>
							</div>
				
							<div class="form-group">
								<label class="control-label col-md-3">Pemeriksa</label>
								<div class="col-md-3">
									<select class="form-control select" name="pilihpemeriksa" id="pilihperiksa">
										<option value="" selected>--Pilih Pemeriksa--</option>
										<option value="Jems">Jems</option>
										<option value="Lena">Lena</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">Status</label>
								<div class="col-md-3">
									<select class="form-control select" name="pilihpemeriksa" id="pilihperiksa">
										<option value="" selected>Belum Selesai</option>
										<option value="Jems">Selesai Sebagian</option>
										<option value="Lena">Selesai</option>
									</select>
								</div>
							</div>
						</div>	
						<hr class="garis" style="margin-left:30px; margin-right:30px;">										
						<div class="tabelinformasi">	
							<div class="portlet-body" style="margin: 20px 30px 10px 10px">
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr class="info">
											<th width="10px">Nomor</th>
											<th>Jenis Pemeriksaan</th>
											<th>Hasil</th>
											<th>Nilai Normal</th>
											<th>On Faktur</th>
											<th>Keterangan</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="text-align:center">1</td>
											<td>Hemoglobin</td>
											<td>
												<input type="text" class="form-control" name="inputPeriksa" placeholder="Hasil">											
											</td>										
											<td>
												<input type="text" class="form-control" name="inputNormal" placeholder="Nilai Normal">
											</td>
											<td>
												<input type="text" class="form-control" name="inputOnfaktur" placeholder="ONFAKTUR">
											</td>
											<td>
												<input type="text" class="form-control" name="inputKeterangan" placeholder="Keterangan">
											</td>									
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<center><button type="submbit" class="btn btn-success"> SIMPAN </button></center>
						<br><br>	
				    </form>
			   	</div>
			</div>
		</div>

		<div class="modal fade" id="tambahPeri" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-600px">
        	<div class="modal-dialog">
        		<div class="modal-content" style="width:1200px">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        				<h3 class="modal-title" id="myModalLabel">Tambah Jenis Pemeriksaan</h3>
        			</div>	
        			<div class="modal-body">
        				<div class="navigation" style="margin-left: 10px" >
						 	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
							    <li class="active"><a href="#hematologi" data-toggle="tab">Hematologi</a></li>
							    <li><a href="#hemlain" data-toggle="tab">Hematologi Lainnya</a></li>
							    <li><a href="#hemostasis" data-toggle="tab">Hemostasis</a></li>
							    <li><a href="#kimia" data-toggle="tab">Kimia Darah</a></li>
							    <li><a href="#imun" data-toggle="tab">Immunoserologi</a></li>
							    <li><a href="#tumor" data-toggle="tab">Penanda Tumor</a></li>
							    <li><a href="#hormon" data-toggle="tab">Hormon</a></li>
							    <li><a href="#urine" data-toggle="tab">Urine</a></li>
							    <li><a href="#urinlain" data-toggle="tab">Tes Urine Lainnya</a></li>
							    <li><a href="#narkoba" data-toggle="tab">Narkoba</a></li>
							    <li><a href="#feses" data-toggle="tab">Analisa Feses</a></li>
							    <li><a href="#tubuhlain" data-toggle="tab">Analisa Cairan Tubuh Lainnya</a></li>
							    <li><a href="#mikro" data-toggle="tab">Mikrobiologi</a></li>
							    <li><a href="#pato" data-toggle="tab">Pemeriksaan Patologi Anatomi</a></li>
							</ul>
						
							<div id="my-tab-content" class="tab-content" >
						        <div class="tab-pane active" id="hematologi" style="height: 200px">
						        	<table class="table table-striped table-bordered table-hover">
										<tr >
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Hemoglobin">Hemoglobin</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Leukosit">Leukosit</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="LED">LED</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Hitung Jenis Leukosit">Hitung Jenis Leukosit</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="DLO">DLO</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Trombosit">Trombosit</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Eritrosit">Eritrosit</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Retikulosit">Retikulosit</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Hematokrit">Hematokrit</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Masa Pendarahan">Masa Pendarahan</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Masa Pembekuan">Masa Pembekuan</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Retraksi Bekuan">Retraksi Bekuan</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="MCV">MCV</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="MCH">MCH</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Golongan Darah">Golongan Darah</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Gambaran Darah Tepi">Gambaran Darah Tepi</label>
											</td>
										</tr>
									</table>
							        <br><br>
							    </div>
							    
							    <div class="tab-pane" id="urine">
							        <table class="table table-striped table-bordered table-hover">
										<tr >
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Makroskopis">Makroskopis</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Protein">Protein</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Reduksi">Reduksi</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Sedimen">Urobilin</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Urobilinogen">Urobilinogen</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Bilirubin">Bilirubin</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Keton">Keton</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="HCG">HCG</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Protein Esbach">Protein Esbach</label>
											</td>							
										</tr>
									</table>
							        <br><br>
							    </div>
							    
							    <div class="tab-pane" id="hemlain">
							        <table class="table table-striped table-bordered table-hover">
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Asam Folat">Asam Folat</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Eletroforesa Hb">Elektroforesa Hb</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Ferritin">Ferritin</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="G-6PD">G-6PD</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Hapusan Darah Malaria">Hapusan Darah Malaria</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="HbF">HbF</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Morfologi Darah Tepi">Morfologi Darah Tepi</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Pewarnaan Sumsum Tulang">Pewarnaan Sumsum Tulang</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Serum Iron">Serum Iron(Fe)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Tes Coombs">Tes Coombs Direct/Indirect</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="TIBC">TIBC</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Transferrin">Transferrin</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Vitamin B12">Vitamin B12</label>
											</td>
										</tr>	
									</table>
								</div>
							    
							    <div class="tab-pane" id="hemostasis">
							        <table class="table table-striped table-bordered table-hover">
							        	<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="APTT">Activate Partial Protrombin Time (APTT)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="ADP">Agregasi Trombosit</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="D-Dimer">D-Dimer</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Faktor IX">Faktor IX</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Faktor VIII">Faktor VIII</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Fibrinogen">Fibrinogen</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="INR">INR</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="CT">Masa Pembekuan/CT</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="BT">Masa Pendarahan/BT</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Paket Hemostasis">Paket Hemostasis (PT,APTT,INR)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="PT">Protombin Time(PT)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="TT">Thrombin Time(TT)</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="aPTT">aPTT</label>
											</td>
										</tr>
									</table>
								</div>

							    <div class="tab-pane" id="kimia">
							        <table class="table table-striped table-bordered table-hover">
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Glukosa Darah 2 jam PP">Glukosa Darah 2 jam PP</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Glukosa Darah Puasa">Glukosa Darah Puasa</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Glukosa Darah Sewaktu">Glukosa Darah Sewaktu</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="HbA1C">HbA1C</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Tes Toleransi Glukosa">Tes Toleransi Glukosa</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Albumin">Albumin</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Alkaline Fosfatase">Alkaline Fosfatase</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Bilirubin Direct">Bilirubin Direct</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Bilirubin Indirect">Bilirubin Indirect</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Bilirubin Total">Bilirubin Total</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Gamma GT">Gamma GT</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Globulin">Globulin</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kolinesterase">Kolinesterase</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Protein Total">Protein Total</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="SGOT/AST">SGOT/AST</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="SGPT/ALT">SGPT/ALT</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Asam Urat">Asam Urat</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="BUN">BUN</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Creatinin">Creatinin</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Creatinin Clearance">Creatinin Clearance</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Ureum">Ureum</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kolesterol HDL">Kolesterol HDL</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kolesterol LDL">Kolesterol LDL</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kolesterol Total">Kolesterol Total</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Trigliserida">Trigliserida</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="CK">CK</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="CKMB">CKMB</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="h-FABP">h-FABP</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="LDH">LDH</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Troponin-I">Troponin-I</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Troponin-T">Troponin-T</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Hs-CRP">Hs-CRP</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kalium Darah">Kalium Darah</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kalsium Darah">Kalsium Darah</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Klorida Darah">Klorida Darah</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Magnesium Darah">Magnesium Darah</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Natrium Darah">Natrium Darah</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Paket Elektrolit">Paket Elektrolit(Na, K, CL)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Analisa Gas Darah">Analisa Gas Darah</label>
											</td>
										</tr>
									</table>
								</div>

							    <div class="tab-pane" id="imun">
							        <table class="table table-striped table-bordered table-hover">
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="ANA">ANA</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Anti ds-DNA">Anti ds-DNA</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Anti HAV Rapid">Anti HAV Rapid</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Anti HBc Rapid">Anti HBc Rapid</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Anti HBe Rapid">Anti HBe Rapid</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Anti HBs Rapid">Anti HBs Rapid</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Anti HCV Rapid">Anti HCV Rapid</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Anti HIV">Anti HIV</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="CD 4">CD 4</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Anti M.Tbc Rapid">Anti M.Tbc Rapid</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="ASTO/ASO(Kuantitatif)">ASTO/ASO(Kuantitatif)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="ASTO/ASO(Kualitatif)">ASTO/ASO(Kualitatif)</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="CRP(kualitatif)">CRP(kualitatif)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="CRP(kuantitatif)">CRP(kuantitatif)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Dengue Blot Rapid (IGM dan IGG)">Dengue Blot Rapid (IGM dan IGG)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Dengue NS1 Antigen">Dengue NS1 Antigen</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="HBeAg Rapid">HBeAg Rapid</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="HBsAg Rapid">HBsAg Rapid</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="HBsAg Kuantitatif">HBsAg Kuantitatif</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Anti HBs Kuantitatif">Anti HBs Kuantitatif</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Malaria Antigen Rapid">Malaria Antigen Rapid</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Paket Torch">Paket Torch</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Rheumatoid Factor">Rheumatoid Factor</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="TPHA">TPHA</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="VDRL">VDRL</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Widal">Widal</label>
											</td>
											
										</tr>
									</table>
								</div>

					        	<div class="tab-pane" id="tumor">
							        <table class="table table-striped table-bordered table-hover">
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="AFP">AFP</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Ca 15-3">Ca 15-3</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Ca 19-9">Ca 19-9</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Ca-125">Ca-125</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="CEA">CEA</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="PSA Total">PSA Total</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Free PSA">Free PSA</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="NSE">NSE</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Ca-72 4">Ca-72 4</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="CYFRA 21.1">CYFRA 21.1</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="SCC">SCC</label>
											</td>
										</tr>
									</table>
								</div>

						        <div class="tab-pane" id="hormon">
							        <table class="table table-striped table-bordered table-hover">
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="AFP">AFP</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Ca 15-3">Ca 15-3</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Beta HCG Kuantitatif">Beta HCG Kuantitatif</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Estradiol">Estradiol</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Free T-3">Free T-3</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Free T4">Free T4</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="FSH">FSH</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="LH">LH</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Progesteron">Progesteron</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Prolaktin">Prolaktin</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="T3">T3</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="T4">T4</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Testosteron">Testosteron</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="TSH-s">TSH-s</label>
											</td>
										</tr>
									</table>
								</div>

						        <div class="tab-pane" id="urinlain">
							        <table class="table table-striped table-bordered table-hover">
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Asam Urat Urin">Asam Urat Urin</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Creatinin Urin">Creatinin Urin</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Glukosa Urin">Glukosa Urin</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Mikroalbumin Urin">Mikroalbumin Urin</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Protein Bence-Jones">Protein Bence-Jones</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Protein Esbach">Protein Esbach</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Protein Kuantitatif">Protein Kuantitatif</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Protein Urin">Protein Urin</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="HCG">Tes Kehamilan (HCG)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Ureum Urin">Ureum Urin</label>
											</td>
										</tr>
									</table>
								</div>

						        <div class="tab-pane" id="narkoba">
							        <table class="table table-striped table-bordered table-hover">
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Amfetamin">Amfetamin</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Benzodiazepin">Benzodiazepin</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Morfin">Morfin</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="THC">THC</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Paket Tes Narkoba">Paket Tes Narkoba</label>
											</td>
										</tr>
									</table>
								</div>

						        <div class="tab-pane" id="feses">
							        <table class="table table-striped table-bordered table-hover">
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Feses Lengkap">Feses Lengkap (Feses Rutin + Darah Samar)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Feses Rutin">Feses Rutin</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Tes Darah Samar">Tes Darah Samar (FOB)</label>
											</td>
										</tr>
									</table>
								</div>

						        <div class="tab-pane" id="tubuhlain">
							        <table class="table table-striped table-bordered table-hover">
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="CSF">Analisa Cairan Otak (CSF)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Analisis Cairan Pleura">Analisis Cairan Pleura</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Analisis Sperma">Analisis Sperma</label>
											</td>
										</tr>
									</table>
								</div>

						        <div class="tab-pane" id="mikro">
							        <table class="table table-striped table-bordered table-hover">
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Pewarnaan BTA">Pewarnaan BTA</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kultur BTA">Kultur BTA</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kultur Cairan Tubuh">Kultur Cairan Tubuh</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kultur Darah">Kultur Darah</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kultur Feses">Kultur Feses</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kultur Gall">Kultur Gall</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kultur Mikroorganisme">Kultur Mikroorganisme</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kultur Pus">Kultur Pus</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kultur Sekret">Kultur Sekret</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kultur Sputum">Kultur Sputum</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kultur SS(Salmonella/Shigela)">Kultur SS(Salmonella/Shigela)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Kultur Urin">Kultur Urin</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Pewarnaan GO">Pewarnaan GO</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Pewarnaan Gram">Pewarnaan Gram</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Pewarnaan Jamur">Pewarnaan Jamur</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Pewarnaan Negatif">Pewarnaan Negatif</label>
											</td>
										</tr>
									</table>
								</div>

						        <div class="tab-pane" id="pato">
							        <table class="table table-striped table-bordered table-hover">
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Biopsi Jaringan Kecil">Biopsi Jaringan Kecil</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Biopsi Jaringan Sedang">Biopsi Jaringan Sedang</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Biopsi Jaringan Besar">Biopsi Jaringan Besar</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Biopsi Khusus(Hati, Ginjal, Sumsum Tulang)">Biopsi Khusus(Hati, Ginjal, Sumsum Tulang)</label>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="VC Jaringan Beku(Potong Beku)">VC Jaringan Beku(Potong Beku)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="FNAB Deep(Toraks,Abdomen,tulang)">FNAB Deep(Toraks,Abdomen,tulang)</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="FNAB Dengan Tindakan">FNAB Dengan Tindakan</label>
											</td>
											<td>
												<label class="checkbox-inline"><input type="checkbox" value="Pap Smear">Pap Smear</label>
											</td>
										</tr>
									</table>
								</div>
					    	</div>
        				</div>
        			</div>	
      				<div class="modal-footer">
 			       		<button type="button" class="btn btn-success" data-dismiss="modal">Tambah</button>
			      	</div>
        		</div>        	
        	</div>
        </div>

        <div class="tab-pane" id="hasil">
       		<div class="search">
				<label class="control-label col-md-3">Nama Pasien / Rekam Medis <span class="required" style="color : red">* </span>
				</label>
				<div class="col-md-4">		
					<input type="text" class="form-control" placeholder="Masukkan Nama atau Nomor RM Pasien" autofocus>
		        </div>
		       	<button type="submit" class="btn btn-danger">Cari</button>
			</div>	
			<br>
			<hr class="garis">
			<br><br>
		   	<div class="portlet-title">
				<label class=" col-md-1" style="margin-right:-60px; padding-top:7px;">Filter :</label>
				<div class="col-md-3" style="margin-right:-20px; margin-top:2px">
					<div class="input-daterange input-group" id="datepicker">
					    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="start"  data-date-format="dd/mm/yyyy" data-provide="datepicker" readonly placeholder="<?php echo date("d/m/Y");?>" />
					    <span class="input-group-addon">to</span>
					    <input type="text" style="cursor:pointer;" class="input-sm form-control" name="end" readonly data-date-format="dd/mm/yyyy" data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>" />
					</div>
				</div>
				
			</div><br><br>
			<div class="portlet-body" style="margin: 10px 10px 0px 10px">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr class="info">
							<th>Tanggal</th>
							<th>No Rm</th>
							<th>Nama</th>
							<th>Pengirim</th>
							<th>Unit Pengirim</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>TEST</td>
							<td>TEST</td>
							<td>TEST</td>										
							<td>TEST</td>
							<td>TEST</td>
							<td>TEST</td>
							<td style="text-align:center">
								<a href="#tambahHasil" data-toggle="modal" ><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Pemeriksaan"></i></a>
								<a href="#view" data-toggle="modal" ><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="Lihat Detail"></i></a>
							</td>										
						</tr>
					</tbody>
				</table>
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
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
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
						<textarea class="form-control" id="ketRequest" name="ketRequest"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Tanggal Respond</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
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
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
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
						<textarea class="form-control" id="ketRequest" name="ketRequest"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Tanggal Respond</label>
						<div class="col-md-2" >
							<div class="input-icon">
								<i class="fa fa-calendar"></i>
								<input type="text" style="cursor:pointer;" class="form-control" readonly data-provide="datepicker" placeholder="<?php echo date("d/m/Y");?>">
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
    </div>

</div>
											