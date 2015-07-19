<?php  
	/*
	* dafuq lah ini :-(
	*/
?>

<script type="text/javascript">
	$(document).ready(function() {
		$("#search_bersalin").submit(function(event){
			event.preventDefault();
			var search = $("input:first").val();
			if(search!=""){
				$.ajax({
					type:'POST',
					url :'<?php echo base_url()?>bersalin/homebersalin/search_pasien/'+search,
					success:function(data){
						// $("#t_body").html(hasil);
						console.log(data);
						
						if(data.length>0){
							$('#t_body').empty();
							for(var i = 0; i<data.length;i++){
								var rm_id = data[i]['rm_id'],
									name = data[i]['nama'],									
									jk = data[i]['jenis_kelamin'],
									tgl_lahir = data[i]['tanggal_lahir'],
									alamat = data[i]['alamat_skr'],
									id = data[i]['jenis_id'],
									visit_id = data[i]['visit_id'];;

								var remove = tgl_lahir.split("-");
								var bulan;
								switch(remove[1]){
									case "01": bulan="Januari";break;
									case "02": bulan="Februari";break;
									case "03": bulan="Maret";break;
									case "04": bulan="April";break;
									case "05": bulan="Mei";break;
									case "06": bulan="Juni";break;
									case "07": bulan="Juli";break;
									case "08": bulan="Agustus";break;
									case "09": bulan="September";break;
									case "10": bulan="Oktober";break;
									case "11": bulan="November";break;
									case "12": bulan="Desember";break;
								}
								var tgl = remove[2]+" "+bulan+" "+remove[0];

								$('#t_body').append(
									'<tr>'+
							 			'<td>'+rm_id+'</td>'+
							 			'<td>'+name+'</td>'+
							 			'<td>'+jk+'</td>'+
							 			'<td>'+tgl+'</td>'+
							 			'<td>'+alamat+'</td>'+
							 			'<td>'+id+'</td>'+

							 			'<td style="text-align:center">'+
							 				'<a href="<?php echo base_url() ?>bersalin/bersalindetail/daftar/'+rm_id+'/'+visit_id+'"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Pemeriksaan"></i></a>'+
										'</td>'+
							 		'</tr>'
									);
							}
						}else{
							$('#t_body').empty();

							$('#t_body').append(
									'<tr>'+
							 			'<td colspan="7"><center>Data Pasien Tidak Ditemukan</center></td>'+
							 		'</tr>'
								);
						}

					},
					error:function (data){
						$('#t_body').empty();

						$('#t_body').append(
							'<tr>'+
					 			'<td colspan="7"><center>Error</center></td>'+
					 		'</tr>'
						);
					}

				});
			}

			event.preventDefault();
		});
		
		var visit_id = $('#v_id').val();
		localStorage.setItem("visit_id", visit_id);
		//var test = localStorage.getItem("visit_id");
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
				//alert('gagal');
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
			item[number]['uraian'] = $('#uraiantindakan').val();
			//waktu tindakan
			var str = $('#inputwaktutindakan').val();
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
		    item[number]['waktu_tindakan'] = tanggal;
		    console.log(item);
			/*console.log(visit_id);
			return false;*/
			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/save_tindakan",
				success: function (data) {
					console.log(data);

					//$('#namaTindakan').find('option:selected').val();
					//$('#visit_id').val('');
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
					//alert('gagal');
					
				}
			});
			$('#tambahTindakan').modal('hide');
		});

		/*resep bersalin mulai dari sini*/
		$("#tabelDokterResep").on('click', 'tr td a.inputpetugasresep', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.namapetugasresep').text();
			var id = jQuery(this).closest('tr').find('td.idpetugasresep').text();
			$("#namadokterresep").val(nama);
			$('#iddokterresep').val(id);
			$('#resepDokter').modal('hide');
		})

		$('#submitresepbersalin').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};

			item[number]['dokter'] = $('#iddokterresep').val();
			item[number]['visit_id'] = localStorage.getItem('visit_id');
			item[number]['resep'] = $('#deskripsiResep').val();
			var str = $('#tglResep').val();
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
			item[number]['tanggal'] = tanggal;

			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/save_visit_resep",
				success: function (data) {
					console.log(data);

					$('#namadokterresep').val('');
					$('#iddokterresep').val('');
					$('#deskripsiResep').val('');
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
					//alert('gagal');
					
				}
			});
		});

		
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
		
		// ambil dari pop-up
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
		/*akhir konsultasi gizi*/

		/*input overview*/
		$('#dokter').click(function (e) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>bersalin/bersalindetail/get_all_petugas",
				success: function (data) {
					console.log(data);
					$('#tabelSearchDokterOverview tbody').empty();
					for (var i = 0; i < data.length; i++) {
						$('#tabelSearchDokterOverview tbody').append(
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

		$("#tabelSearchDokterOverview").on('click', 'tr td a.inputpetugasoverview', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.namadokteroverview').text();
			var id = jQuery(this).closest('tr').find('td.iddokteroverview').text();
			$("#dokter").val(nama);
			$('#iddokter').val(id);
			$('#searchDokterOverview').modal('hide');
		})
		$('#simpanOver').on('click',function(e) {
			e.preventDefault();
			/*alert('ak');
			return false;*/
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
			item[number]['dept_id'] = '19'; //departemen id bersalin = 19
			item[number]['dept_tujuan'] = '20'; //departemen id kamar operasi = 20
			item[number]['visit_id'] = localStorage.getItem('visit_id');
			item[number]['alasan'] = $('#alasanoperasi').val();
			item[number]['jenis_operasi'] = $('#jnsOperasi').val();
			item[number]['lingkup_operasi'] = $('#lkpOprasi').find('option:selected').val();

			var str = $('#tanggal_mulai').val();
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
			item[number]['waktu_mulai'] = tanggal;
			//console.log(item);return false;
			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/order_kamar_operasi",
				success: function (data) {					
					console.log(data);
					$('#id_dokteroperasi').val('');
					$('#alasanoperasi').val('');
					$('#jnsOperasi').val('');

					if (document.getElementById('tabelorderoperasi').getElementsByTagName("tr").length == 2) {
						$('#t_body_order').empty();
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

				if(document.getElementById('tabelorderoperasi').getElementsByTagName("tr").length == 2) {
				    jQuery('#tabelorderoperasi tbody:first').append(
							'<tr>'+
								'<td colspan="6" style="text-align:center"><strong>Tidak ada order</strong></td>'+
							'</tr>'
				    );	        	
		        }				
		        return false;   		
		    }
	   		return false;
	   	});

		/*akhir order kamar operasi*/

		/*pemeriksaan penunjang di sini*/
		$("#tabelSearchPengirim").on('click', 'tr td a.inputpetugaspenunjang', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.namapetugaspenunjang').text();
			var id = jQuery(this).closest('tr').find('td.idpetugaspenunjang').text();
			$("#pengirim").val(nama);
			$('#id_pengirim').val(id);
			$('#searchPengirim').modal('hide');
		})

		$('#submitpenunjang').submit(function(e){
			e.preventDefault();
			//alert('aku mah apa atuh?');
			
			//belum selesai boss
			$('#tambahPeri').modal('hide');
		});


		/*akhir pemeriksaan penunjang*/

		/*permintaan makan*/
		var isTableNull;

		var rm_id = localStorage.getItem('rm_id');
		var visit_id = localStorage.getItem('visit_id');
		$.ajax({
			type:'POST',
			url :'<?php echo base_url()?>bersalin/bersalindetail/get_ruang/'+visit_id,
			success:function(data){
				console.log(data);
				var nama_ruang = data[0]['nama_kamar'],
					no_bed = data[0]['nama_bed'];
				$('#namaruangbersalin').val(nama_ruang);
				$('#nomorbedbersalin').val(no_bed);
			},
			error:function(data){

			}
		});		

		$('#permintaanmakan').click(function(){
			$.ajax({
				type:'POST',
				url :'<?php echo base_url()?>bersalin/bersalindetail/get_permintaan_awal/'+visit_id,
				success:function(data){
					console.log(data);
					$('#tbody_tbl_permintaan').empty();
					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							$('#tbody_tbl_permintaan').append(
								'<tr>'+
									'<td>'+data[i]['waktu_permintaan']+'</td>'+
									'<td>'+$('#namaruangbersalin').val()+'</td>'+
									'<td>'+$('#nomorbedbersalin').val()+'</td>'+
									'<td>'+data[i]['nama_paket']+'</td>'+
									'<td>'+data[i]['menu_paket']+'</td>'+
									'<td>'+data[i]['keterangan']+'</td>'+
									'<td>'+data[i]['kelas']+'</td>'+							
									'<td style="text-align:center">'+
									'<a href="#" class="deletemakan"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>'+
									'</td>'+
									'<td class="makan_id" style="display:none">'+data[0]['id']+'</>'+
								'</tr>'
							);
						}
					}else{
						isTableNull = 0;
						$('#tbody_tbl_permintaan').append(
							'<tr>'+
								'<td colspan="9" style="text-align:center;">Data Kosong</td>'+
							'</tr>'
						);
					}
				}
			});
		});

		$('#searchmakanbersalin').click(function(){

			$('#t_body_paket').empty();

			$.ajax({
				type:'POST',
				url :'<?php echo base_url()?>bersalin/bersalindetail/get_paket_makan',
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
					//console.log(data);return false;
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
			item_makan['visit_id'] = localStorage.getItem('visit_id');
			item_makan['paket_id'] = $('#id_paket').val();
			item_makan['keterangan'] = $('#keteranganmakan').val();

			var str = $('#tanggalpermintaanmakan').val();
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
		    item_makan['waktu_permintaan'] = tanggal;

			console.log(item_makan);
			

			$.ajax({
				type:"POST",
				data:item_makan,
				url:'<?php echo base_url()?>bersalin/bersalindetail/add_permintaan_makan',
				success:function(data){
					if(isTableNull == 0){
						$('#tbody_tbl_permintaan').empty();
					}

					$('#keteranganmakan').val('');
					$('#searchmakanbersalin').val('');
					$('#id_paket').val('');

					console.log(data);
					$('#tbody_tbl_permintaan').append(
						'<tr>'+
							'<td>'+data[0]['waktu_permintaan']+'</td>'+
							'<td>'+$('#namaruangbersalin').val()+'</td>'+
							'<td>'+$('#nomorbedbersalin').val()+'</td>'+
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

		jQuery("#tabeldaftarmakan").on('click','tr td a.deletemakan',function(e){
			e.preventDefault();
	   		var d = confirm('apakah akan dihapus?');
	   		if ( d == true ) {
		 		var id = jQuery(this).closest('tr').find('td.makan_id').text();
			    //console.log(id);//return false;

			    //alert('bisa');return false;
			    jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url()?>bersalin/bersalindetail/delete_permintaan_makan/"+id,
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


		/*visit kegiatan bersalin*/
		$('#catatan').click(function (e) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>bersalin/bersalindetail/get_all_petugas",
				success: function (data) {
					//console.log(data);
					$('#t_body_dokterbersalin').empty();
					for (var i = 0; i < data.length ; i++) {
						$('#t_body_dokterbersalin').append(
							'<tr>'+
								'<td class="namapetugasbersalin">'+data[i]['nama_petugas']+'</td>'+
								'<td style="text-align:center"><a href="" class="inputdokterbersalin"><i class="glyphicon glyphicon-check"></i></a></td>'+
								'<td style="display:none;" class="idpetugasbersalin">'+data[i]['petugas_id']+'</td>'+
							'</tr>'
						)
					};
				}
			})
		})

		$('#t_body_dokterbersalin').on('click','tr td a.inputdokterbersalin', function (e) {
			e.preventDefault();
			var id = jQuery(this).closest('tr').find('td.idpetugasbersalin').text();
			var nama = jQuery(this).closest('tr').find('td.namapetugasbersalin').text();
			$('#namadokterbersalin').val(nama);
			$('#iddokterbersalin').val(id);
			$('#searchDokterpeminta').modal('hide');
		})

		$('#submitVisitBersalin').submit(function (e) {
			e.preventDefault();
			
			var item = {};
		    var number = 1;
		    item[number] = {};

		    item[number]['visit_id'] = localStorage.getItem('visit_id');
			item[number]['jenis_kegiatan'] = $('#pilJnsKegiatan').find('option:selected').val();
			item[number]['kegiatan'] = $('#pilKegiatan').find('option:selected').val();
			if ($('#statusRujukan').find('option:selected').val() == "Ya") {
				item[number]['dirujuk_ke'] = $('#tujuanRujukan').find('option:selected').val();
				item[number]['rujukan_dari'] = $('#rujukan').find('option:selected').val();
			}else{
				item[number]['dirujuk_ke'] = "-";
				item[number]['rujukan_dari'] = "-";
			}
			item[number]['dokter'] = $('#iddokterbersalin').val();
			item[number]['keterangan'] = $('#ketKegiatan').val();
			var str = $('#tanggalpelaksanaanbersalin').val();
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
			item[number]['waktu'] = tanggal;
			
			//console.log(item);return false;
			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/submit_kegiatan_bersalin",
				success: function (data) {					
					//console.log(data);
					$('#iddokterbersalin').val('');
					$('#namadokterbersalin').val('');
					$('#ketKegiatan').val('');
					alert('data berhasil disimpan');
				},
				error: function (data) {
					//console.log(data);
				}
			})

		})
		/*akhir visit kegiatan bersalin*/

		/*daftar kelahiran baru*/
		$('#submitKelahiran').submit(function (e) {
			e.preventDefault();
			
			var str = $('#tglKelahiran').val();
			
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;

			var item = {};
		    var number = 1;
		    item[number] = {};

		    item[number]['waktu_kelahiran'] = tanggal;
		    var status = '1';
		    if ($('#statusLahir').find('option:selected').val() == 'Tidak') {status = '0'};

		    item[number]['nama_bayi'] = $('#namabayi').val();
		    item[number]['berat'] = $('#beratBadan').val();
		    item[number]['panjang'] = $('#pjgBadan').val();
		    item[number]['jenis_kelamin'] = $("input[name='jk']:checked").val();
		    item[number]['is_hidup'] = status;

		    alert(item[number]['jenis_kelamin']);
		})

		/*akhir daftar kelahiran baru*/


		/*riwayat penyakit*/
		$('#tabel_riwayat').on('click', 'tr td a.rm_detail', function (e) {
			var v_id = $(this).closest('tr').find('td.visit_riwayat').text();

			//overview
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>bersalin/bersalindetail/get_overview_riwayat/"+v_id,
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
				url: "<?php echo base_url()?>bersalin/bersalindetail/get_therapy_riwayat/"+v_id,
				success: function (data) {
					
				},
				error: function (data) {
					// body...
				}
			})
			//resep
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>bersalin/bersalindetail/get_resep_riwayat/"+v_id,
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
				url: "<?php echo base_url()?>bersalin/bersalindetail/get_penunjang_riwayat/"+v_id,
				success: function (data) {
					// body...
				},
				error: function (data) {
					// body...
				}
			})
		})
		
		/*akhir riwayat*/

		/*pindah kamar*/


		/*akhir pindah kamar*/

		/*resume pulang*/
		$('#formresume').submit(function (e) {
			e.preventDefault();

			var item={};
			item[1]={};

			var alasan = $('#alasanKeluarPasien').find('option:selected').val();
			item[1]['detail_alasan_pulang'] = "";
			switch(alasan){
				case "Pasien Dipulangkan": item[1]['detail_alasan_pulang'] = $('#alasanPulang').val();break;
				case "Pasien Dipindahkan": item[1]['detail_alasan_pulang'] = $('#alasanPindah').val();break;
				case "Rujuk Rumah Sakit Lain": item[1]['detail_alasan_pulang'] = "Dirujuk Ke RS "+$('#isianRSRujuk').val();break;
				case "Atas Permintaan Sendiri": item[1]['detail_alasan_pulang'] = $('#alasanPulang').val();break;
				case "Pasien Meninggal": {
						item[1]['detail_alasan_pulang'] = $('#detPasDie').find('option:selected').val();
						var str = $('#waktumeninggal').val();
						var res = str.split("/");
					    var bln = res[1];
						var tgl = res[0];
					    var thn = res[2];

					    var tanggal = thn + '-' + bln + '-' + tgl;
					    item[1]['waktu_kematian'] = tanggal;
					    item[1]['keterangan_kematian'] = $('#ketMati').val();
						break;
					}	
			}
			item[1]['alasan_keluar'] = alasan;
			var str = $('#tglKeluarRS').val();
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
		    item[1]['waktu_keluar'] = tanggal;
		    item[1]['visit_id'] = $('#v_id').val();
		    item[1]['waktumasuk'] = $('#tglMasukRS').val();

			item[1]['biaya_per_hari'] = $('#biaya_per_hari').val();
			item[1]['old_kamar_id'] = $('#old_kamar_id').val();
			item[1]['old_bed_id'] = $('#old_bed_id').val();		    
			item[1]['inap_id'] = $('#inap_id').val();
			//console.log(item);return false;

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/checkout_process",
				success: function (data) {
					console.log(data);
				},
				error: function (data) {
					console.log(data);
				}
			})

		})
		/*akhir resume pulang*/


		
	});

	function getPaket(id, nama){
		$("#searchPaketMakanan").modal('hide');
		$("#id_paket").val(id);
		$("#searchmakanbersalin").val(nama);
		$("#katakuncipaket").val("");
	}

</script>