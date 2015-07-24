
<div class="title">
	PROSES KASIR TINDAKAN
</div>
<div class="bar">
		<li style="list-style: none">
			<i class="fa fa-home"></i>
			<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>kasirtindakan/homekasirtindakan">Kasir Tindakan</a>
			<i class="fa fa-angle-right"></i>
			<a href="<?php echo base_url() ?>kasirtindakan/detailpasienbiasa">Proses Kasir Tindakan</a>
	
		</li>
	
</div>
<div class="modal fade" id="tambahTindakanKasir" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    				<h3 class="modal-title" id="myModalLabel">Pilih Tindakan</h3>
    			</div>
    			<div class="modal-body">

        			<div class="form-group">
						<div class="form-group">	
							<div class="col-md-3" style="margin-left:35px;">
								<input type="text" class="form-control" name="katakunci" id="katakunci" placeholder="Nama tindakan"/>
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
										<td>Nama Tindakan</td>
										<td width="10%">Pilih</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Parame</td>
										<td style="text-align:center"><a href="#" class ="addNewTindakan"><i class="glyphicon glyphicon-check"></i></a></td>
									</tr>
									<tr>
										<td>Panadol</td>
										<td style="text-align:center"><a href="#" class ="addNewTindakan"><i class="glyphicon glyphicon-check"></i></a></td>
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

<div class="navigation" style="background: #A7FFAE; min-height:800px;border-radius:5px; margin-left: 10px;margin-right: 10px;" >
		<div style="padding-top:10px"></div>
					 		
		<div class="dropdown" style="margin-left:10px;width:98.5%;">
        <div id="titleInformasi">Informasi Pasien</div>
	    </div>
	    <br>

    	<div class="informasi" id="infoDataPasienObat" style="margin-left:50px;">
        	<form class="form-horizontal" role="form">
        		<div class="form-group">
        			<label class="control-label col-md-2">No Nota</label>
        			<label class="col-md-3" id="nmrNotaKasir" name="nmrNotaKasir" style="font-weight:bold">
        			12121212	
        			</label>
        			<div class="col-md-1"></div>
        			<label class="control-label col-md-2">Cara Bayar</label>
        			<label class="col-md-3" id="crBayarNotaKasir" name="crBayarNotaKasir" style="font-weight:bold">
        			Nyicil
        			</label>
        		</div>
        		<div class="form-group">
        			<label class="control-label col-md-2">Tanggal</label>
        			<label class="col-md-3" id="tglNotaKasir" name="tglNotaKasir" data-provide="datepicker" style="font-weight:bold">
        			21 Juli 2015
        			</label>
        			<div class="col-md-1"></div>
        			<label class="control-label col-md-2">Nama Asuransi</label>
        			<label class="col-md-3" id="nmAsuransiNotaKasir" name="nmAsuransiNotaKasir" style="font-weight:bold">
        			Prudential
        			</label>
        		</div>
        		<div class="form-group">
        			<label class="control-label col-md-2">No RM</label>
        			<label class="col-md-3" id="nmrRMNotaKasir" name="nmrRMNotaKasir" style="font-weight:bold">
					12010210	
					</label>
        			<div class="col-md-1"></div>
        			<label class="control-label col-md-2">No Asuransi</label>
        			<label class="col-md-3" id="noAsuNotaKasir" name="noAsuNotaKasir" style="font-weight:bold">
        			99912012
        			</label>
        		</div>
        		<div class="form-group">
        			<label class="control-label col-md-2">Nama Pasien</label>
        			<label class="col-md-3" id="nmPasienNotaKasir" name="nmPasienNotaKasir" style="font-weight:bold">
        			Irma
        			</label>
        			<div class="col-md-1"></div>
        			<label class="control-label col-md-2">Nama Perusahaan</label>
        			<label class="col-md-3" style="font-weight:bold" id="nmPrusahaanNotaKasir" name="nmPrusahaanNotaKasir">
        			IBM
        			</label>
        		</div>
        		<div class="form-group">
        			<label class="control-label col-md-2">Alamat Pasien</label>
        			<label class="col-md-3" style="font-weight:bold" id="almPasienNotaKasir" name="almPasienNotaKasir">
        			Jalan Bali
        			</label>
        			<div class="col-md-1"></div>
        			<label class="control-label col-md-2">Deposit</label>
        			<label class="col-md-3" style="font-weight:bold" id="depoNotaKasir" name="depoNotaKasir">
        			Depo
        			</label>
        		</div>
        		<div class="form-group">
        			<label class="control-label col-md-2">Kelas Perawatan</label>
        			<label class="col-md-3" style="font-weight:bold" id="klsPasienNotaKasir" name="klsPasienNotaKasir" >
        			VIP
        			</label>
        			
        		</div>
        	</form>
    	</div>

		<div class="dropdown" style="margin-left:10px;width:98.5%;">
		<div id="titleInformasi">Transaksi Kasir</div>
		<div id="btnBawahDataObat" class="btnBawah"><i class="glyphicon glyphicon-chevron-down" style="margin-right: 5px"></i></div> 				            	
		</div>
		<br>

		<div class="informasi" id="infoDataObat" style="margin-left:50px;">
			<form class="form-horizontal" role="form">
            	
			<div class="form-group">
				<div class="col-md-6"><a data-toggle="modal" href="#tambahTindakanKasir" style="color:white">
					<button type="submit" class="btn btn-success" style="margin-bottom:20px;">Tambah Tindakan</button></a>
				</div>        
			</div>


			<div class="portlet-body" style="margin: 0px 30px 0px 0px">
					
				<table class="table table-striped table-bordered table-hover table-responsive" >
					<thead>
						<tr class="info" >
							<th  style="text-align:left"> No </th>
							<th  style="text-align:left"> Nama Tindakan </th>
							<th  style="text-align:left"> Waktu Tindakan </th>
							<th  style="text-align:left"> Tarif </th>
							<th  style="text-align:left"> On Faktur </th>
							<th  style="text-align:left"> Total </th>
							<th></th>									
						</tr>
					</thead>
					<tbody id="addinputTindakan">
							<tr>
								<td>1</td>
								<td>Potong Bebek</td>
								<td>23 Agustus 1997</td>
								<td>10000</td>
								<td>1000</td>
								<td>1</td>
								<td><a href="#" class="removeRow"><i class="glyphicon glyphicon-remove"></i></a></td>
							</tr>
							<!-- <tr>
															
							</tr> -->
					</tbody>
				</table>

				<div class="form-group">
					<div class="col-md-2 pull-right" style="width:240px;">
						<label class="control-label pull-right" style="font-size:1.8em;margin-top:-10px;">1.000.000</label>
					</div>
					<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
						Sub Total(Rp.) : 
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2 pull-right" style="width:140px;">
						<input type="text" class="form-control" id="potongan" name="potongan" placeholder="Potongan" />
					</div>
					<div class="col-md-2 pull-right" style="width:100px;">
	         			<select class="form-control select" name="jenispotongan" id="selectpotongan" >
							<option value="%" selected>%</option>
							<option value="rp">Rp. </option>
						</select>
					</div>
					<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
						Potongan : 
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2 pull-right" style="width:240px;">
						<input type="text" class="form-control" id="depositKasir" name="depositKasir" placeholder="Deposit" />
					</div>
					<div class="col-md-2 pull-right" style="width:150px; margin-top:5px; text-align:right;">
						Deposit (Rp.) : 
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2 pull-right" style="width:240px;">
						<label class="control-label pull-right" style="font-size:2em;color:red;">10.000.000</label>
					</div>
					<div class="col-md-2 pull-right" style="width:150px; margin-top:15px; text-align:right;">
						Grand Total : 
					</div>
				</div>

				<div class="form-group">
					<div class="pull-right" style="margin-bottom:10px;margin-right:18px;">
						<button class="btn btn-warning">Batal</button>
						<button class="btn btn-info">Proses</button>
					</div>
				</div>
			</div>
			
		</form>	
		</div>

			 	
</div>
											
<script type="text/javascript">
	$(document).ready( function(){
			$('.addNewTindakan').on('click',function(e){
				e.preventDefault();
				tambahTabelKasir('#addinputTindakan','.addNewTindakan');
			});
	});

</script>