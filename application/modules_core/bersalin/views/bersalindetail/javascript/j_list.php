<?php  
	/*
	* dafuq lah ini :-(
	*/
?>

<script type="text/javascript">
	$(document).ready(function() {
		var visit_id = $('#v_id').val();
		localStorage.setItem("visit_id", visit_id);
		var test = localStorage.getItem("visit_id");
		var tindakan_id = $('#namaTindakan').find('option:selected').val();
		console.log(test);

		$.ajax({
			type:'POST',
			url :'<?php echo base_url()?>icu/icudetail/get_ruang/'+test,
			success:function(data){
				console.log(data);
				var nama_ruang = data[0]['nama_kamar'],
					no_bed = data[0]['nama_bed'];
				$('#namaruang').val(nama_ruang);
				$('#nomorbed').val(no_bed);
			},
			error:function(data){

			}
		});

		$.ajax({
			type: "POST",
			data : tindakan_id,
			url: "<?php echo base_url()?>bersalin/bersalindetail/get_tindakan/" + tindakan_id,
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

		$('#namaTindakan').change(function() {
			var tindakan_id = $('#namaTindakan').find('option:selected').val();
			$.ajax({
				type: "POST",
				data : tindakan_id,
				url: "<?php echo base_url()?>bersalin/bersalindetail/get_tindakan/" + tindakan_id,
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

		$('#submitTindakan').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};

			item[number]['tindakan_id'] = $('#namaTindakan').find('option:selected').val();
			item[number]['visit_id'] = localStorage.getItem("visit_id");//$('#visit_id').val();
			item[number]['js'] = $('#js').val();
			item[number]['jp'] = $('#jp').val();
			item[number]['bakhp'] = $('#bakhp').val();
			item[number]['on_faktur'] = $('#onfaktur').val();
			item[number]['paramedis'] = $('#paramedis').val();
			item[number]['kat_id'] = $('#kategori').find('option:selected').val();

			/*console.log(visit_id);
			return false;*/
			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/save_tindakan",
				success: function (data) {
					console.log(data);

					//$('#namaTindakan').find('option:selected').val();
					$('#visit_id').val('');
					$('#js').val('');
					$('#jp').val('');
					$('#bakhp').val('');
					$('#onfaktur').val('');
					$('#paramedis').val('');
					//$('#kategori').find('option:selected').val();
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
					alert('gagal');
					
				}
			});
			$('#tambahTindakan').modal('hide');
		});

		$('#submitresepbersalin').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};

			item[number]['dokter'] = $('#resepdokter').val();
			item[number]['visit_id'] = localStorage.getItem('visit_id');
			item[number]['resep'] = $('#deskripsiResep').val();

			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/save_visit_resep",
				success: function (data) {
					//console.log(data);

					$('#resepdokter').val('');
					$('#resep').val('');
						jQuery('#tabelresepbersalin tbody:first').append(
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

				},
				error: function (data) {
					alert('gagal');
					
				}
			});
		});

		/*hapus resep*/
		jQuery("#tabelresepbersalin").on('click','tr td a.hapus-resep',function(e){
			e.preventDefault();
	   		var d = confirm('apakah akan dihapus?');
	   		if ( d == true ) {
		 		var id = jQuery(this).closest('tr').find('td.resep_id').text();
			    //console.log(id);//return false;

			    jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url()?>bersalin/bersalindetail/delete_resep/"+id,
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

				if(document.getElementById('tabelresepbersalin').getElementsByTagName("tr").length == 2) {
				    jQuery('#tabelresepbersalin tbody:first').append(
							'<tr>'+
								'<td colspan="7" style="text-align:center"><strong>Tidak ada resep yang diberikan</strong></td>'+
							'</tr>'
				    );	        	
		        }				
		        return false;   		
		    }
	   		return false;
	   	});
		
		/*ambil dari pop-up*/
		$("#tabelKonsultan").on('click', 'tr td a.inputpetugas', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.namapetugas').text();
			var id = jQuery(this).closest('tr').find('td.idpetugas').text();
			$("#konsultan").val(nama);
			$('#id_petugas').val(id);
			$('#searchKonsultan').modal('hide');
		})

		/*input konsultasi gizi*/
		$('#konsultasigizi').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};

		    item[number]['visit_id'] = localStorage.getItem("visit_id");
		    item[number]['konsultan'] = $('#id_petugas').val();
		    item[number]['kajian_gizi'] = $('#kajianGizi').val();
		    item[number]['anamnesa_diet'] = $('#anamnesaDiet').val();
		    item[number]['data_lab'] = $('#dataLabPasien').val();
		    item[number]['kajian_diet'] = $('#kajianDiet').val();
		    item[number]['detail_menu'] = $('#detailMenu').val();

		    $.ajax({
		    	type: "POST",
				data : item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/save_gizi",
				success: function (data) {
					/*console.log(data);
					alert('berhasil ditambahkan');*/
					$('#konsultan').val('');
					$('#kajianGizi').val('');
					$('#anamnesaDiet').val('');
					$('#dataLabPasien').val('');
					$('#kajianDiet').val('');
					$('#detailMenu').val('');

					/*if(document.getElementById('tabelgizibersalin').getElementsByTagName("tr").length == 2) {
					    jQuery('#tabelgizibersalin tbody:first').remove();
		        	}	*/	
					jQuery('#tabelgizibersalin tbody:first').append(
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
		jQuery("#tabelgizibersalin").on('click','tr td a.hapus-gizi',function(e){
			e.preventDefault();
	   		var d = confirm('apakah akan dihapus?');
	   		if ( d == true ) {
		 		var id = jQuery(this).closest('tr').find('td.gizi_id').text();
			    //console.log(id);//return false;

			    jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url()?>bersalin/bersalindetail/delete_gizi/"+id,
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

		/*input overview*/
		$('#simpanOver').on('click',function(e) {
			e.preventDefault();
			/*alert('ak');
			return false;*/
			var item = {};
		    var number = 1;
		    item[number] = {};
			//item[number]['tanggal'] = $('#inputdate').val();
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
			item[number]['id_pemeriksa'] = $('#dokter').val();
			item[number]['visit_id'] = $('#v_id').val();
			//item[number]['perawat'] = $('#perawat').find('option:selected').val();

			save_overview(item);
			return false;
		});

		function save_overview (item) {
			/*alert(item[1]['jenis']);
			return false;*/
			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/save_overview",
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
					 	jQuery('#tableOverview tbody:first').append(
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
		}
		/*akhir simpan overview*/

		/*order kamar operasi*/
		$("#tabelDokterOperasi").on('click', 'tr td a.inputpetugasoperasi', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.namapetugasoperasi').text();
			var id = jQuery(this).closest('tr').find('td.idpetugasoperasi').text();
			$("#dokteroperasi").val(nama);
			$('#id_dokteroperasi').val(id);
			$('#searchDokterOperasi').modal('hide');
		})

		$('#orderoperasi').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};

			item[number]['pengirim'] = $('#id_dokteroperasi').val();
			item[number]['dept_id'] = '18'; //departemen id bersalin = 18
			item[number]['dept_tujuan'] = '19'; //departemen id kamar operasi = 19
			item[number]['visit_id'] = localStorage.getItem('visit_id');
			item[number]['alasan'] = $('#alasanoperasi').val();
			item[number]['jenis_operasi'] = $('#jnsOperasi').val();
			item[number]['lingkup_operasi'] = $('#lkpOprasi').find('option:selected').val();
			item[number]['waktu_mulai'] = $('#tanggal_mulai').val();
			//console.log(item);return false;
			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/order_kamar_operasi",
				success: function (data) {					
					console.log(data);

				},
				error: function (data) {
					console.log("error");
					console.log(data);
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
					url: "<?php echo base_url()?>bersalin/bersalindetail/delete_order/"+id,
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

		/*akhir order kamar operasi*/
		

		//------------------ DAFTAR PERMINTAAN MAKAN --------------------//
		var isTableNull = 0;

		$('#daftar_makan').click(function(){
			$.ajax({
				type:'POST',
				url :'<?php echo base_url()?>bersalin/bersalindetail/get_permintaan_makan/'+visit_id,
				success:function(data){
					console.log(data);
					$('#tbody_tbl_permintaan').empty();
					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							$('#tbody_tbl_permintaan').append(
								'<tr>'+
									'<td>'+data[i]['waktu_permintaan']+'</td>'+
									'<td>'+$('#namaruang').val()+'</td>'+
									'<td>'+$('#nomorbed').val()+'</td>'+
									'<td>'+data[i]['nama_paket']+'</td>'+
									'<td>'+data[i]['menu_paket']+'</td>'+
									'<td>'+data[i]['diet_penyakit']+'</td>'+
									'<td>'+data[i]['keterangan']+'</td>'+
									'<td>'+data[i]['kelas']+'</td>'+							
									'<td style="text-align:center">'+
										'<a href="#hapus"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>'+
									'</td>'+
								'</tr>'
							);
						}
					}else{
						isTableNull = 1;
						$('#tbody_tbl_permintaan').append(
							'<tr>'+
								'<td colspan="9" style="text-align:center;">Data Kosong</td>'+
							'</tr>'
						);
					}
				}
			});
		});

		$('#searchpaket').click(function(){
			$('#t_body_paket').empty();

			$.ajax({
				type:'POST',
				url :'<?php echo base_url()?>bersalin/bersalindetail/get_paket_makan/',
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
					url:"<?php echo base_url()?>bersalin/bersalindetail/search_paket_makan/"+p_item,
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
					url :'<?php echo base_url()?>bersalin/bersalindetail/get_paket_makan/',
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
			item_makan['waktu_permintaan'] = $('#permintaanmakan').val();
			item_makan['visit_id'] = localStorage.getItem('visit_id');
			item_makan['paket_id'] = $('#id_paket').val();
			item_makan['keterangan'] = $('#ket_makan').val();

			console.log(item_makan);
			e.preventDefault();

			$.ajax({
				type:"POST",
				data:item_makan,
				url:'<?php echo base_url()?>bersalin/bersalindetail/add_permintaan_makan',
				success:function(data){
					if(isTableNull == 1){
						$('#tbody_tbl_permintaan').empty();
					}

					$('#ket_makan').val('');
					$('#searchpaket').val('');
					$('#id_paket').val('');

					console.log(data);
					$('#tbody_tbl_permintaan').append(
						'<tr>'+
							'<td>'+data[0]['waktu_permintaan']+'</td>'+
							'<td>'+$('#namaruang').val()+'</td>'+
							'<td>'+$('#nomorbed').val()+'</td>'+
							'<td>'+data[0]['nama_paket']+'</td>'+
							'<td>'+data[0]['menu_paket']+'</td>'+
							'<td>'+data[0]['diet_penyakit']+'</td>'+
							'<td>'+$('#ket_makan').val()+'</td>'+
							'<td>'+data[0]['kelas']+'</td>'+							
							'<td style="text-align:center">'+
								'<a href="#hapus"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>'+
							'</td>'+
						'</tr>'
					);
				},
				error:function(data){
					console	.log('gagal');
					console.log(data);
				}
			});
		});

	});


	function getPaket(id, nama){
		$("#searchPaketMakanan").modal('hide');
		$("#id_paket").val(id);
		$("#searchpaket").val(nama);
		$("#katakuncipaket").val("");
	}

</script>