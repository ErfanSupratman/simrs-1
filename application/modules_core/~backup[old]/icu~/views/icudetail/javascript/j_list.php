<script type="text/javascript">
	$(document).ready(function() {
		//ambil visit id dari session
		var v_id = '<?php echo($this->session->userdata("visit_id")) ?>';
		/*tindakan icu*/
		var tindakan_id = $('#namaTindakan').find('option:selected').val();

		$.ajax({
			type: "POST",
			data : tindakan_id,
			url: "<?php echo base_url()?>icu/icudetail/get_tindakan/" + tindakan_id,
			success: function (data) {
				$('#js').val(data['js']);
				$('#jp').val(data['jp']);
				$('#bakhp').val(data['bakhp']);
				//console.log(data);
			},
			error: function (data) {
				//alert('gagal');
			}
		});
		$('#namaTindakan').change(function() {
			var tindakan_id = $('#namaTindakan').find('option:selected').val();
			$.ajax({
				type: "POST",
				data : tindakan_id,
				url: "<?php echo base_url()?>icu/icudetail/get_tindakan/" + tindakan_id,
				success: function (data) {
					$('#js').val(data['js']);
					$('#jp').val(data['jp']);
					$('#bakhp').val(data['bakhp']);
					//console.log(data);
				},
				error: function (data) {
					alert('gagal');
					
				}
			});
		})

		$('#submitTindakanIcu').submit(function (e) {
			e.preventDefault();
			alert('asu');
			var item = {};
		    var number = 1;
		    item[number] = {};

			item[number]['tindakan_id'] = $('#namaTindakan').find('option:selected').val();
			item[number]['visit_id'] = v_id; //ambil dari session aja 
			item[number]['js'] = $('#js').val();
			item[number]['jp'] = $('#jp').val();
			item[number]['bakhp'] = $('#bakhp').val();
			item[number]['on_faktur'] = $('#onfaktur').val();
			item[number]['paramedis'] = $('#paramedis').val();
			item[number]['kat_id'] = $('#kategori').find('option:selected').val();
			item[number]['uraian'] = $('#uraiantindakan').val();
			var str = $('#waktutindakanicu').val();
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
			item[number]['waktu_tindakan'] = tanggal;

			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>icu/icudetail/save_tindakan",
				success: function (data) {

					$('#js').val('');
					$('#jp').val('');
					$('#bakhp').val('');
					$('#onfaktur').val('');
					$('#paramedis').val('');
					
						jQuery('#tableCare tbody:first').append(
							"<tr>"+
							"<td>"+data['waktu_tindakan']+"</td>"+
							"<td>"+data['js']+"</td>"+
							"<td>"+data['jp']+"</td>"+
							"<td>"+data['bakhp']+"</td>"+
							"<td>"+data['on_faktur']+"</td>"+
							"<td>"+data['nama_petugas']+"</td>"+
							"<td>"+data['nama_tindakan']+"</td>"+
							"<td>"+data['keterangan']+"</td>"+
							"</tr>"
						);

				},
				error: function (data) {
					//alert('gagal');
					
				}
			});
			$('#tambahTindakan').modal('hide');
		});

		/*akhir tindakan icu*/

		/*overview ICU*/
		$('#dokter').click(function (e) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>icu/icudetail/get_all_petugas",
				success: function (data) {
					//console.log(data);
					$('#tabelSearchDokter tbody').empty();
					for (var i = 0; i < data.length; i++) {
						$('#tabelSearchDokter tbody').append(
							'<tr>'+
								'<td class="namadokteroverview">'+data[i]['nama_petugas']+'</td>'+
								'<td style="display:none" class="iddokteroverview">'+data[i]['petugas_id']+'</td>'+
								'<td style="text-align:center;cursor:pointer;" ><a href="#" class="inputpetugasoverview"><i class="glyphicon glyphicon-check"></i></a></td>'+
							'</tr>'
						)
					};
				}
			})
		})

		$("#tabelSearchDokter").on('click', 'tr td a.inputpetugasoverview', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.namadokteroverview').text();
			var id = jQuery(this).closest('tr').find('td.iddokteroverview').text();
			$("#dokter").val(nama);
			$('#iddokter').val(id);
			$('#searchDokter').modal('hide');
		})

		$('#formOverviewIcu').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};
		    var str = $('#inputdate').val();
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
		    item[number]['tanggal'] = tanggal;
			//item[number]['jenis'] = $('#jenisPelayanan').val();
			item[number]['anamnesa'] = $('#anamnesa').val();
			item[number]['temperatur'] = $('#temperatur').val();
			item[number]['tensi'] = $('#tensi').val();
			item[number]['diagnosa_utama'] = $('#kode_utama').val();
			item[number]['diagnosa_sekunder'] = $('#kode_sekunder').val();
			item[number]['keterangan'] = $('#keterangan').val();
			item[number]['detail_diagnosa'] = $('#detailDiagnosa').val();
			item[number]['terapi'] = $('#terapi').val();
			item[number]['alergi'] = $('#alergi').val();
			item[number]['id_pemeriksa'] = $('#iddokter').val();
			item[number]['visit_id'] = '<?php echo($this->session->userdata("visit_id")) ?>';
			//console.log(item);return false;

			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>icu/icudetail/save_overview",
				success: function (data) {
					$('#anamnesa').val('');
					$('#temperatur').val('');
					$('#tensi').val('');
					$('#kode_utama').val('');
					$('#kode_sekunder').val('');
					$('#keterangan').val('');
					$('#detailDiagnosa').val('');
					$('#terapi').val('');
					$('#alergi').val('');
					$('#dokter').val('');
					//console.log(data);
					 	jQuery('#tabelOverview tbody:first').append(
							"<tr>"+
							"<td>"+data['tanggal']+"</td>"+
							"<td>Jenis Pelayanan</td>"+
							"<td>"+data['anamnesa']+"</td>"+
							"<td>"+data['temperatur']+"</td>"+
							"<td>"+data['tensi']+"</td>"+
							"<td>"+data['diagnosa_utama']+"</td>"+
							"<td>"+data['diagnosa_sekunder']+"</td>"+
							"<td>"+data['detail_diagnosa']+"</td>"+
							"<td>"+data['terapi']+"</td>"+
							"<td>"+data['id_pemeriksa']+"</td>"+
							"<td>"+data['keterangan']+"</td>"+
							"</tr>"
						);	
					
					alert('berhasil ditambahkan');
				},
				error: function (data) {
					alert(data);
				}
			});

			return false;
		})
		/*akhir overview ICU*/

		/*resep icu*/
		$('#dokterresep').click(function (e) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>icu/icudetail/get_all_petugas",
				success: function (data) {
					//console.log(data);
					$('#tabelDokterResep tbody').empty();
					for (var i = 0; i < data.length; i++) {
						$('#tabelDokterResep tbody').append(
							'<tr>'+
								'<td class="namadokterresep">'+data[i]['nama_petugas']+'</td>'+
								'<td style="display:none" class="iddokterresep">'+data[i]['petugas_id']+'</td>'+
								'<td style="text-align:center;cursor:pointer;" ><a href="#" class="inputpetugasresep"><i class="glyphicon glyphicon-check"></i></a></td>'+
							'</tr>'
						)
					};
				}
			})
		})

		$("#tabelDokterResep").on('click', 'tr td a.inputpetugasresep', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.namadokterresep').text();
			var id = jQuery(this).closest('tr').find('td.iddokterresep').text();
			$("#dokterresep").val(nama);
			$('#dokterresep_id').val(id);
			$('#resepDokter').modal('hide');
		})

		$('#formResepIcu').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};
		    var str = $('#tglResep').val();
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
		    item[number]['tanggal'] = tanggal;
			item[number]['resep'] = $('#deskripsiResep').val();
			item[number]['dokter'] = $('#dokterresep_id').val();
			item[number]['visit_id'] = '<?php echo($this->session->userdata("visit_id")) ?>';

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>icu/icudetail/save_visit_resep",
				success: function (data) {
					//console.log(data);
					$('#deskripsiResep').val('');
					jQuery('#tabelresepicu tbody:first').append(
							"<tr>"+
							"<td>"+data['nama_petugas']+"</td>"+
							"<td>"+data['tanggal']+"</td>"+
							"<td>"+data['resep']+"</td>"+
							"<td>status ambil</td>"+
							"<td>status bayar</td>"+
							'<td style="text-align:center"><a href="#" class="hapus-resep"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a></td>'+
							'<td class="resep_id" style="display:none" >'+data['resep_id']+'</td>'+
							"</tr>"
						);

					alert('data berhasil ditambahkan');
				}
			})
		})

		$("#tabelresepicu").on('click','tr td a.hapus-resep',function(e){
			e.preventDefault();
	   		var d = confirm('apakah akan dihapus?');
	   		if ( d == true ) {
		 		var id = jQuery(this).closest('tr').find('td.resep_id').text();
			    //console.log(id);//return false;

			    jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url()?>icu/icudetail/delete_resep/"+id,
					data: id,
					success: function(data)
					{  
					  //berhasil kembalikan hasil 
					  //alert("yeee");       
					},
					error: function (data)
					{  
					  //gagal
					  console.log('pait');
					}
				});						

		        jQuery(this).closest('tr').fadeOut(function(){
			        jQuery(this).remove();		  	          
		        });

				if(document.getElementById('tabelresepicu').getElementsByTagName("tr").length == 2) {
				    jQuery('#tabelresepicu tbody:first').append(
							'<tr>'+
								'<td colspan="7" style="text-align:center"><strong>Tidak ada resep yang diberikan</strong></td>'+
							'</tr>'
				    );	        	
		        }				
		        return false;   		
		    }
	   		return false;
	   	});
		/*akhir resep icu*/
		
		/*order kamar operasi*/
		$('#dokterorder').click(function (e) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>icu/icudetail/get_all_petugas",
				success: function (data) {
					//console.log(data);
					$('#tabelDokterOperasi tbody').empty();
					for (var i = 0; i < data.length; i++) {
						$('#tabelDokterOperasi tbody').append(
							'<tr>'+
								'<td class="namadokteroperasi">'+data[i]['nama_petugas']+'</td>'+
								'<td style="display:none" class="id_dokteroperasi">'+data[i]['petugas_id']+'</td>'+
								'<td style="text-align:center;cursor:pointer;" ><a href="#" class="inputpetugasoperasi"><i class="glyphicon glyphicon-check"></i></a></td>'+
							'</tr>'
						)
					};
				}
			})
		})

		$("#tabelDokterOperasi").on('click', 'tr td a.inputpetugasoperasi', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.namadokteroperasi').text();
			var id = jQuery(this).closest('tr').find('td.id_dokteroperasi').text();
			$("#dokterorder").val(nama);
			$('#iddokterorder').val(id);
			$('#searchDokterOperasi').modal('hide');
		})

		$('#orderoperasi').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};

			item[number]['pengirim'] = $('#iddokterorder').val();
			item[number]['dept_id'] = '18'; //departemen id icu = 18
			item[number]['dept_tujuan'] = '20'; //departemen id kamar operasi = 20
			item[number]['visit_id'] = '<?php echo($this->session->userdata("visit_id")) ?>';
			item[number]['alasan'] = $('#alasanoperasi').val();
			item[number]['jenis_operasi'] = $('#jnsOperasi').val();
			item[number]['lingkup_operasi'] = $('#lkpOprasi').find('option:selected').val();

			var str = $('#tglOrder').val().substring(0,10);
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];
		    var waktu = $('#tglOrder').val().substring(10);

		    var tanggal = thn + '-' + bln + '-' + tgl + ' ' +waktu;
			item[number]['waktu_mulai'] = tanggal;
			//console.log(item);return false;

			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>icu/icudetail/order_kamar_operasi",
				success: function (data) {					
					//console.log(data);
					//$('#id_dokteroperasi').val('');
					$('#alasanoperasi').val('');
					$('#jnsOperasi').val('');

					if (document.getElementById('tabelorderoperasi').getElementsByTagName("tr").length == 2) {
						$('#t_body_order tr.toremove').remove();
					};

					jQuery('#tabelorderoperasi tbody:first').append(
							"<tr>"+
							"<td>"+data['waktu_mulai']+"</td>"+
							"<td>"+data['nama_petugas']+"</td>"+
							"<td>"+data['nama_dept']+"</td>"+
							"<td>"+data['alasan']+"</td>"+
							'<td style="text-align:center"><a href="#" class="hapus-order">'+
							'<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>'+
							'</td>'+
							'<td class="order_operasi_id" style="display:none;">'+data['order_operasi_id']+'</td>'+
							"</tr>"
						);	

				},
				error: function (data) {
					/*console.log("error");
					console.log(data);*/
				}
			});

		})

		//delete order
		jQuery("#tabelorderoperasi").on('click','tr td a.hapus-order',function(e){
			e.preventDefault();
	   		var d = confirm('apakah akan dihapus?');
	   		if ( d == true ) {
		 		var id = jQuery(this).closest('tr').find('td.order_operasi_id').text();
			    //console.log(id);//return false;

			    jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url()?>icu/icudetail/delete_order/"+id,
					data: id,
					success: function(data)
					{  
					  //berhasil kembalikan hasil 
					  //alert("yeee");       
					},
					error: function (data)
					{  
					  //gagal
					  console.log('pait');
					}
				});

				jQuery(this).closest('tr').fadeOut(function(){
			        jQuery(this).remove();		  	          
		        });						

				if(document.getElementById('tabelorderoperasi').getElementsByTagName("tr").length == 2) {
				    jQuery('#tabelorderoperasi tbody:first').append(
							'<tr>'+
								'<td colspan="5" class="toremove" style="text-align:center"><strong>Tidak ada order</strong></td>'+
							'</tr>'
				    );	        	
		        }				
		        return false;   		
		    }
	   		return false;
	   	});

		/*akhir order kamar operasi*/

		/*konsultasi gizi icu*/
		$('#doktergizi').click(function (e) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>icu/icudetail/get_all_petugas",
				success: function (data) {
					//console.log(data);
					$('#tabelDokterGizi tbody').empty();
					for (var i = 0; i < data.length; i++) {
						$('#tabelDokterGizi tbody').append(
							'<tr>'+
								'<td class="namadoktergizi">'+data[i]['nama_petugas']+'</td>'+
								'<td style="display:none" class="id_doktergizi">'+data[i]['petugas_id']+'</td>'+
								'<td style="text-align:center;cursor:pointer;" ><a href="#" class="inputpetugasgizi"><i class="glyphicon glyphicon-check"></i></a></td>'+
							'</tr>'
						)
					};
				}
			})
		})

		$("#tabelDokterGizi").on('click', 'tr td a.inputpetugasgizi', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.namadoktergizi').text();
			var id = jQuery(this).closest('tr').find('td.id_doktergizi').text();
			$("#doktergizi").val(nama);
			$('#iddoktergizi').val(id);
			$('#searchKonsultan').modal('hide');
		})


		$('#konsultasigizi').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};

		    item[number]['visit_id'] = '<?php echo($this->session->userdata("visit_id")) ?>';
		    item[number]['konsultan'] = $('#iddoktergizi').val();
		    item[number]['kajian_gizi'] = $('#kajianGizi').val();
		    item[number]['anamnesa_diet'] = $('#anamnesaDiet').val();
		    item[number]['data_lab'] = $('#dataLabPasien').val();
		    item[number]['kajian_diet'] = $('#kajianDiet').val();
		    item[number]['detail_menu'] = $('#detailMenu').val();
		    var str = $('#tanggalordergizi').val();
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
		    item[number]['tanggal'] = tanggal;

		    $.ajax({
		    	type: "POST",
				data : item,
				url: "<?php echo base_url()?>icu/icudetail/save_gizi",
				success: function (data) {
					/*console.log(data);
					alert('berhasil ditambahkan');*/
					$('#doktergizi').val('');
					$('#kajianGizi').val('');
					$('#anamnesaDiet').val('');
					$('#dataLabPasien').val('');
					$('#kajianDiet').val('');
					$('#detailMenu').val('');

					/*if(document.getElementById('tabelgizibersalin').getElementsByTagName("tr").length == 2) {
					    jQuery('#tabelgizibersalin tbody:first').remove();
		        	}	*/	
					jQuery('#tabelgiziicu tbody:first').append(
						"<tr>"+
						"<td>"+data['nama_petugas']+"</td>"+
						"<td>"+data['tanggal']+"</td>"+
						"<td>"+data['kajian_gizi']+"</td>"+
						"<td>"+data['anamnesa_diet']+"</td>"+
						"<td>"+data['data_lab']+"</td>"+
						"<td>"+data['kajian_diet']+"</td>"+
						"<td>"+data['detail_menu']+"</td>"+
						"<td style='text-align:center'>"+
						'<a href="#" class="hapus-gizi"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>'+
						'<a href="#" class="print-gizi"><i class="glyphicon glyphicon-print"  data-toggle="tooltip" data-placement="top" title="Print"></i></a>'+
						"</td>"+
						'<td class="gizi_id" style="display:none" >'+data['gizi_id']+'</td>'+
						"</tr>"
					);
				},
				error: function (data) {
					alert(data);
				}
		    });
		})

		/*delete gizi*/
		jQuery("#tabelgiziicu").on('click','tr td a.hapus-gizi',function(e){
			e.preventDefault();
	   		var d = confirm('apakah akan dihapus?');
	   		if ( d == true ) {
		 		var id = jQuery(this).closest('tr').find('td.gizi_id').text();
			    //console.log(id);//return false;

			    jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url()?>icu/icudetail/delete_gizi/"+id,
					data: id,
					success: function(data)
					{  
					  //berhasil kembalikan hasil 
					  //alert("yeee");       
					},
					error: function (data)
					{  
					  //gagal
					  console.log('pait');
					}
				});						

		        jQuery(this).closest('tr').fadeOut(function(){
			        jQuery(this).remove();		  	          
		        });

				/*if(document.getElementById('tabelgizibersalin').getElementsByTagName("tr").length == 2) {
				    jQuery('#tabelgizibersalin tbody:first').append(
							'<tr>'+
								'<td colspan="8" style="text-align:center"><strong>Tidak ada gizi yang diberikan</strong></td>'+
							'</tr>'
				    );	        	
		        }	*/			
		        return false;   		
		    }
	   		return false;
	   	});
		/*akhir konsultasi gizi icu*/

		/*permintaan makan*/
		var isTableNull;

		var rm_id = '<?php echo($this->session->userdata("rm_id")) ?>';
		var visit_id = '<?php echo($this->session->userdata("visit_id")) ?>';
		$.ajax({
			type:'POST',
			url :'<?php echo base_url()?>icu/icudetail/get_ruang/'+visit_id,
			success:function(data){
				//console.log(data);
				var nama_ruang = data[0]['nama_kamar'],
					no_bed = data[0]['nama_bed'];
				$('#namaruang').val(nama_ruang);
				$('#nomorbed').val(no_bed);
				$("#tbody_tbl_permintaan").find("tr").each(function() { //get all rows in table
				    $(this).find('td.nama_kamar').text(nama_ruang); 
				    $(this).find('td.no_bed').text(no_bed);
				});
			},
			error:function(data){

			}
		});
		$('#searchpaket').click(function(){

			$('#t_body_paket').empty();

			$.ajax({
				type:'POST',
				url :'<?php echo base_url()?>icu/icudetail/get_paket_makan/',
				success:function(data){
					console.log(data);
					
					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							var nama_paket = data[i]['nama_paket'],
								paket_id = data[i]['paket_id'];

							$("#t_body_paket").append(
								'<tr>'+
									'<td>'+nama_paket+'</td>'+
									'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getPaket(&quot;'+paket_id+'&quot; , &quot;'+nama_paket+'&quot;)"></i></td>'+
								'</tr>'
							);
						}
					}else{
						$('#t_body_paket').empty();
						$('#t_body_paket').append(
							'<tr>'+
					 			'<td colspan="2"><center>Data Paket Tidak Ditemukan</center></td>'+
					 		'</tr>'
						);
					}
				},
				error:function(data){
					$('#t_body_paket').empty();

						$('#t_body_paket').append(
							'<tr>'+
					 			'<td colspan="2"><center>Error</center></td>'+
					 		'</tr>'
						);
				}
			});
		});

		$("#katakuncipaket").keyup(function(event){
			var p_item = $('#katakuncipaket').val();

			event.preventDefault();

			if(p_item!=""){
				$.ajax({
					type:"POST",
					url:"<?php echo base_url()?>icu/icudetail/search_paket_makan/"+p_item,
					success:function(data){
						console.log(data);
						$('#t_body_paket').empty();
	 					if(data.length>0){
							for(var i = 0; i<data.length; i++){
								var nama_paket = data[i]['nama_paket'],
									paket_id = data[i]['paket_id'];

								$("#t_body_paket").append(
									'<tr>'+
										'<td>'+nama_paket+'</td>'+
										'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getPaket(&quot;'+paket_id+'&quot; , &quot;'+nama_paket+'&quot;)"></i></td>'+
									'</tr>'
								);
							}
						}else{
							$('#t_body_paket').empty();
							$('#t_body_paket').append(
								'<tr>'+
						 			'<td colspan="2"><center>Data Paket Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
						}
					},
					error:function(data){

					}
				});
			}else{
				$.ajax({
					type:'POST',
					url :'<?php echo base_url()?>icu/icudetail/get_paket_makan/',
					success:function(data){
						console.log(data);
						$('#t_body_paket').empty();
						if(data.length>0){
							for(var i = 0; i<data.length; i++){
								var nama_paket = data[i]['nama_paket'],
									paket_id = data[i]['paket_id'];

								$("#t_body_paket").append(
									'<tr>'+
										'<td>'+nama_paket+'</td>'+
										'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getPaket(&quot;'+paket_id+'&quot; , &quot;'+nama_paket+'&quot;)"></i></td>'+
									'</tr>'
								);
							}
						}else{
							$('#t_body_paket').empty();
							$('#t_body_paket').append(
								'<tr>'+
						 			'<td colspan="2"><center>Data Paket Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
						}
					},
					error:function(data){
						$('#t_body_paket').empty();

							$('#t_body_paket').append(
								'<tr>'+
						 			'<td colspan="2"><center>Error</center></td>'+
						 		'</tr>'
							);
					}
				});
			}

		});
		
		//submit_permintaanmakan
		var item_makan = {};
		$("#submit_permintaanmakan").submit(function(e){
			e.preventDefault();
			//item_makan['waktu_permintaan'] = $('#permintaanmakan').val();
			item_makan['visit_id'] = '<?php echo($this->session->userdata("visit_id")) ?>';
			item_makan['paket_id'] = $('#id_paket').val();
			item_makan['keterangan'] = $('#keteranganmakan').val();

			var str = $('#permintaanmakan').val();
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
		    item_makan['waktu_permintaan'] = tanggal;

			//console.log(item_makan);
			//return false;

			$.ajax({
				type:"POST",
				data:item_makan,
				url:'<?php echo base_url()?>icu/icudetail/add_permintaan_makan',
				success:function(data){
					if(isTableNull == 0){
						$('#tbody_tbl_permintaan').empty();
					}

					$('#keteranganmakan').val('');
					$('#id_paket').val('');
					$('#searchpaket').val('');

					//console.log(data);return false;
					$('#tbody_tbl_permintaan').append(
						'<tr>'+
							'<td>'+data[0]['waktu_permintaan']+'</td>'+
							'<td>'+$('#namaruang').val()+'</td>'+
							'<td>'+$('#nomorbed').val()+'</td>'+
							'<td>'+data[0]['nama_paket']+'</td>'+
							'<td>'+data[0]['menu_paket']+'</td>'+
							'<td>'+data[0]['keterangan']+'</td>'+
							'<td>'+data[0]['kelas']+'</td>'+							
							'<td style="text-align:center">'+
								'<a href="#" class="deletemakan"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>'+
							'</td>'+
							'<td class="makan_id" style="display:none">'+data[0]['id']+'</>'+
						'</tr>'
					);
					isTableNull = 1;
				},
				error:function(data){
					console	.log('gagal');
					console.log(data);
				}
			});
		});

		jQuery("#tabelDaftarMakan").on('click','tr td a.deletemakan',function(e){
			e.preventDefault();
	   		var d = confirm('apakah akan dihapus?');
	   		if ( d == true ) {
		 		var id = jQuery(this).closest('tr').find('td.makan_id').text();
			    //console.log(id);//return false;

			    //alert('bisa');return false;
			    jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url()?>icu/icudetail/delete_permintaan_makan/"+id,
					data: id,
					success: function(data)
					{  
					  //berhasil kembalikan hasil 
					  //alert("yeee");       
					},
					error: function (data)
					{  
					  //gagal
					  console.log('pait');
					}
				});						

		        jQuery(this).closest('tr').fadeOut(function(){
			        jQuery(this).remove();		  	          
		        });

				/*if(document.getElementById('tabelgizibersalin').getElementsByTagName("tr").length == 2) {
				    jQuery('#tabelgizibersalin tbody:first').append(
							'<tr>'+
								'<td colspan="8" style="text-align:center"><strong>Tidak ada gizi yang diberikan</strong></td>'+
							'</tr>'
				    );	        	
		        }	*/			
		        return false;   		
		    }
	   		return false;
	   	});
	
		/*akhir permintaan makan*/

		/*riwayat penyakit*/
		$('#tabel_riwayat').on('click', 'tr td a.rm_detail', function (e) {
			var v_id = $(this).closest('tr').find('td.visit_riwayat').text();

			//overview
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>icu/icudetail/get_overview_riwayat/"+v_id,
				success: function (result) {
					//console.log(result)
					var data = result[0];
					var time = data['tanggal_visit'];

					if (result.length > 0) {
						$('.riwayat-tanggal').val(data['tanggal_visit']);
						$('.riwayat-departemen').text((data['overview_id'] != null ? data['nama_dept'] : ""));
						$('.riwayat-dokter').text(data['nama_petugas']);
						$('.riwayat-anamnesa').text(data['anamnesa']);
						$('.riwayat-diagnosa').text(data['diagnosa_utama']);

						$('#t_body_history_therapy').empty();
						for (var i = result.length - 1; i >= 0; i--) {
							var tanggal = (result[i]['tanggal'] == null) ? "-": result[i]['tanggal'];
							var dokter = (result[i]['nama_petugas'] == null) ? "-": result[i]['nama_petugas'];
							var terapi = (result[i]['terapi'] == null) ? "-": result[i]['terapi'];
							$('#t_body_history_therapy').append(
								'<tr>'+
									'<td>'+tanggal+'</td>'+
									'<td>'+dokter+'</td>'+
									'<td>'+terapi+'</td>'+
								'</tr>'
							)
							
						};
					};

				},
				error: function (data) {
					// body...
				}
			})
			//therapy
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>icu/icudetail/get_therapy_riwayat/"+v_id,
				success: function (data) {
					
				},
				error: function (data) {
					// body...
				}
			})
			//resep
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>icu/icudetail/get_resep_riwayat/"+v_id,
				success: function (data) {
					if (data.length > 0) {
						$('#t_body_history_resep').empty();
						for (var i = data.length - 1; i >= 0; i--) {
							var tanggal = (data[i]['tanggal'] == null) ? "-": data[i]['tanggal'];
							var resep_id = (data[i]['resep_id'] == null) ? "-": data[i]['resep_id'];
							var resep = (data[i]['resep'] == null) ? "-": data[i]['resep'];
							$('#t_body_history_resep').append(
								'<tr>'+
									'<td>'+resep_id+'</td>'+
									'<td>'+tanggal+'</td>'+
									'<td>'+resep+'</td>'+
								'</tr>'
							)
							
						};
					}else{
						$('#t_body_history_resep').append(
							'<tr>'+
								'<td colspan="3" style="text-align:center">tidak ada resep</td>'+
							'</tr>'
						)
					}
				},
				error: function (data) {
					// body...
				}
			})
			//penunjang
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>icu/icudetail/get_penunjang_riwayat/"+v_id,
				success: function (data) {
					// body...
				},
				error: function (data) {
					// body...
				}
			})
		})
		
		/*akhir riwayat*/

	});


	function getPaket(id, nama){
		$("#searchPaketMakanan").modal('hide');
		$("#id_paket").val(id);
		$("#searchpaket").val(nama);
		$("#katakuncipaket").val("");
	}

</script>