
<div class="title">
	NICU - DAFTAR KELAHIRAN BARU
</div>
<div class="bar" id="rowfix" style="position:fixed; z-index:10; width:98.5%">
	<li style="list-style: none">
		<i class="fa fa-home"></i>
		<a href="<?php echo base_url() ?>dashboard/operator">Dashboard</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>nicu/homenicu">Pasien NICU</a>
		<i class="fa fa-angle-right"></i>
		<a href="<?php echo base_url() ?>nicu/daftarkelhiran">Daftar Kelahiran Baru</a>
 	</li>
</div>

<div class="backregis" style="margin-left: 10px; margin-top:55px;" >
	<div id="my-tab-content" class="tab-content">
		<div class="dropdown">
			<div id="titleInformasi">Informasi Kelahiran</div>
			<input type="hidden" id="deptTujuan" value="<?php echo $mydept_id ?>">
		</div>
		<div class="modal fade" id="pilkamar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-300px">
	    	<div class="modal-dialog">
	    		<div class="modal-content" style="width:900px">
	    			<div class="modal-header">
	    				<button type="button" class="close" id="close-kamar" data-dismiss="modal" aria-hidden="true">X</button>
	    				<h3 class="modal-title" id="myModalLabel">Pilih Kamar</h3>
	    			</div>	
	    			<div class="modal-body">

	    				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
							<table class="table table-striped table-bordered table-hover tabelinformasi" id="tabelSearchPengirim">
								<thead>
									<tr class="success">
										<td>Kamar</td>
										<td>Kelas</td>
										<td>Jumlah Bed</td>
										<td>Terpakai</td>
										<td width="10%" style="text-align:center;">Pilih</td>
									</tr>
								</thead>
								<tbody id="tbody_kamar_nicu">
									
								</tbody>
							</table>												
						</div>
	        			
	  				</div>
	  				<br>
	  				<div class="modal-footer">
			       		<button type="button" id="modal-kamar" data-dismiss="modal" class="btn btn-warning">Cancel</button>	
			       	</div>
	    		</div>
	    	</div>        	
	    </div>

		<div id="info">
            <br>
            <div id="infoKelahiran">
            	<form class="form-horizontal" role="form" method="post" action="<?php echo base_url() ?>nicu/daftarkelahiran/daftar">
	            	<div class="informasi">
	            		<div class="form-group">
	            			<label class="control-label col-md-2">Rujukan</label>
	            			<div class="col-md-3">
	            				<select class="form-control select" name="caramasuk" id="caramasuk">
									<option value="non" selected>Non Rujukan</option>
									<option value="Puskesmas"  >Puskesmas</option>
									<option value="Rujuk RS lain" >Rujuk RS lain</option>
									<option value="Instansi" >Instansi</option>
									<option value="Rujukan Dokter" >Rujukan Dokter</option>
									<option value="Lain-lain">Lain-lain</option>
								</select>
	            			</div>
	            		</div>
		            	<div class="form-group">
							<label class="control-label col-md-2" >Waktu Kelahiran
							</label>
							<div class="col-md-3">
								<div class="input-icon">
									<i class="fa fa-calendar"></i>
									<input type="text" style="cursor:pointer;" name="tglKelahiran" id="res_date" class="form-control calder" readonly data-date-format="dd/mm/yyyy hh:ii:ss" data-provide="datetimepicker" value="<?php echo date("d/m/Y H:i:s");?>">
								</div>
							</div>
							<div class="col-md-1"></div>
							<label class="control-label col-md-2" >Nama Ibu
							</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="namaibu" name="namaibu" autocomplete="off" spellcheck="false">
								<input type="hidden" id="idibu" name="idibu" value="">
							</div>					
						</div>

						<div class="form-group" >
							<label class="control-label col-md-2" >Status Kelahiran
							</label>
							<div class="col-md-3">	
								<select class="form-control select" name="statuslahir" id="statuslahir">
									<option value="Hidup" selected>Hidup</option>
									<option value="Mati">Mati</option>
								</select>
							</div>
							<div class="col-md-1"></div>
							<label class="control-label col-md-2" >Visit Id IBU
							</label>
							<div class="col-md-3">
								<input type="text"  class="form-control" id="visit_id_ibu" name="visit_id_ibu" value="" placeholder="visit id">
							</div>					
						</div>

						<div class="form-group" id="formLahir">
							<label class="control-label col-md-2" id="srtLahir">No Surat Kelahiran</label>
							<div class="col-md-3">			
								<input type="text" class="form-control" name="surat" id="surat" placeholder="surat kelahiran">
							</div>
							<div class="col-md-1"></div>							
							<label class="control-label col-md-2" >Kecamatan
							</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="kecamatan" name="kecamatan" value="" placeholder="alamat">
								<input type="hidden" id="kecamatan_id" name="kecamatan_id" value="">
							</div>							
						</div>

						<div class="form-group">
							<label class="control-label col-md-2" >Diagnosa</label>
							<div class="col-md-1">
								<input type="text" class="form-control" id="kodediagnosa" name="kodediagnosa" placeholder="Kode" data-toggle="modal" data-target="#searchDiagnosa" readonly="" style="cursor:pointer">
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" id="namadiagnosa" placeholder="Keterangan" data-toggle="modal" data-target="#searchDiagnosa" readonly="" style="cursor:pointer">
							</div>
							<div class="col-md-1"></div>							
							<label class="control-label col-md-2" >Kabupaten
							</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="kabupaten" name="kabupaten" value="" placeholder="alamat">
								<input type="hidden" id="kabutapten_id" name="kabupaten_id" value="">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2" >Nama</label>
							<div class="col-md-3">			
								<input type="text" class="form-control" id="nama" name ="namabayi" placeholder="Nama">
							</div>
							<div class="col-md-1"></div>							
							<label class="control-label col-md-2" >Kelurahan
							</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="kelurahan" name="kelurahan" value="" placeholder="alamat">
								<input type="hidden" id="kelurahan_id" name="kelurahan_id" value="">
							</div>							
						</div>

						<div class="form-group">
							<label class="control-label col-md-2" >Paritas</label>
							<div class="col-md-3">			
								<input type="text" class="form-control" name="paritas" id="paritas">
							</div>
							<div class="col-md-1"></div>							
							<label class="control-label col-md-2" >Nomor Telpon
							</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="telp" name="telp" value="" placeholder="alamat">
							</div>							
						</div>

						<div class="form-group">
							<div class="form-inline">
								<label class="control-label col-md-2">Jenis Kelamin</label>
								<div class="col-md-3">
									<div class="radio-list">
										<label>
											<input type="radio" style="margin-left: 0px" name="jk" id="newJenisKelamin" value="L" data-title="Pria" checked="" /><span style="margin-left:5px">L</span> 
										</label >
										<label style="margin-left: 10px">
											<input type="radio" style="margin-left: 10px" name="jk" id="newJenisKelamin2" value="P" data-title="Wanita"/><span style="margin-left:5px">P</span> 
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-1"></div>
							<label class="control-label col-md-2" >Alamat
							</label>
							<div class="col-md-3">
								<input type="text" class="form-control" id="alamat_ibu" name="alamat_ibu" value="" placeholder="alamat">
							</div>		
						</div>

						<div class="form-group">
							<label class="control-label col-md-2" >Berat / panjang Badan
							</label>
							<div class="col-md-1">		
								<input type="number" class="form-control" name="beratBadan" id="beratBadan" placeholder="Gr."> 
							</div>		
							<div class="col-md-1">		
								<input type="number" class="form-control" name="pjgBadan" id="pjgBadan" placeholder="cm">
							</div>
							<div class="col-md-2"></div>							
						</div>

						<div class="form-group">
							<label class="control-label col-md-2" >Penolong
							</label>
							<div class="col-md-3">			
								<input type="text" class="form-control" name="penolong" id="penolong" placeholder="penolong">
							</div>
							<div class="col-md-1"></div>							
							<label class="control-label col-md-2" >Pilih Bed
							</label>
							<div class="col-md-3">
								<input type="text" class="form-control" readonly="" style="cursor:pointer" id="textkamarnicu" name="textkamar" data-toggle="modal" data-target="#pilkamar" value="" placeholder="pilih bed">
								<input type="hidden" name="bed_id" id="bed_id_nicu">
								<input type="hidden" name="kamar_id" id="kamar_id_nicu">
							</div>						
						</div>

						<div class="form-group">
							<label class="control-label col-md-2" >Asisten
							</label>
							<div class="col-md-3">			
								<input type="text" class="form-control" name="asisten" id="asisten" placeholder="asisten">
							</div>
							<div class="col-md-1"></div>	
							<label class="control-label col-md-2" >Tipe Perawatan
							</label>
							<div class="col-md-3">
								<select class="form-control select" name="tiperawat" id="tiperawat">
									<option value="pisah" selected>RAWAT PISAH</option>
									<option value="bersama">RAWAT BERSAMA</option>
								</select>
							</div>								
						</div>

						<div class="form-group">
							<div class="form-inline">
								<label class="control-label col-md-2" >Status
								</label>
								<div class="col-md-3">		
									<label class="checkbox-inline"><input type="checkbox" name="anus" value="Anus">Anus</label>
									<label class="checkbox-inline"><input type="checkbox" name="cacat" value="Cacat">Cacat</label>
								</div>							
							</div>
						</div>
					</div>

					<br>
					<hr style="margin-bottom:-17px; margin-left:10px; margin-right:10px">
					<div style="margin-left:1100px">
						<span style="background-color:#A7FFAE; padding:0px 10px 0px 10px;">
							<button type="reset" class="btn btn-warning">RESET</button> &nbsp;
							<button type="submit" class="btn btn-success">SIMPAN</button> 
						</span>
					</div>
					<br><br>
				</form>
            </div>
		</div>
	</div>	
</div>

<div class="modal fade" id="searchDiagnosa" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				<h3 class="modal-title" id="myModalLabel">Pilih Diagnosa</h3>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" method="post" id="search_diagnosa">
					<div class="form-group">	
						<div class="col-md-5">
							<input type="text" class="form-control" name="katakunci" id="katakunci_diag" placeholder="Kata kunci"/>
						</div>
						<div class="col-md-2">
							<button type="submit" class="btn btn-info">Cari</button>
						</div>	
					</div>	
				</form>
				<br>	
				<div style="margin-left:5px; margin-right:5px;"><hr></div>
				<div class="portlet-body" style="margin: 0px 10px 0px 10px">
					<table class="table table-striped table-bordered table-hover" id="tabelSearchDiagnosa">
						<thead>
							<tr class="info">
								<th width="30%;">Kode Diagnosa</th>
								<th>Keterangan</th>
								<th width="10%">Pilih</th>
							</tr>
						</thead>
						<tbody id="tbody_diagnosa">
							<tr>
								<td style="text-align:center;" colspan="3">Cari Diagnosa</td>
							</tr>
						</tbody>
					</table>												
				</div>
			</div>
			<div class="modal-footer">
		       		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
	      	</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function (e) {
		$('#search_diagnosa').submit(function(e){
			e.preventDefault();
			var key = $('#katakunci_diag').val();

			$.ajax({
				type:'POST',
				url:'<?php echo base_url() ?>bersalin/bersalindetail/search_diagnosa/'+key,
				success:function(data){
					$('#tbody_diagnosa').empty();

					if(data.length>0){
						for(var i = 0; i<data.length;i++){
							$('#tbody_diagnosa').append(
								'<tr>'+
									'<td>'+data[i]['diagnosis_id']+'</td>'+
									'<td max-width="60%" style="word-wrap:break-word">'+data[i]['diagnosis_nama']+'</td>'+
									'<td style="text-align:center; cursor:pointer;"><a onclick="get_diagnosa(&quot;'+data[i]['diagnosis_id']+'&quot;, &quot;'+data[i]['diagnosis_nama']+'&quot;)"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>'+
								'</tr>'
							);
						}
					}else{
						$('#tbody_diagnosa').append(
							'<tr><td colspan="3" style="text-align:center;">Data Diagnosa Tidak Ditemukan</td></tr>'
						);
					}
				}, error:function(data){
					console.log(data);
					alert('gagal');
				}
			});
		});
	})

function get_diagnosa (id,nama) {
	$('#kodediagnosa').val(id);$('#namadiagnosa').val(nama);
	$('#tbody_diagnosa').empty();
	$('#tbody_diagnosa').append('<tr><td colspan="3" style="text-align:center;">Cari Data Diagnosa</td></tr>');
	$('#katakunci_diag').val("");
	$('#searchDiagnosa').modal('hide');
}
</script>