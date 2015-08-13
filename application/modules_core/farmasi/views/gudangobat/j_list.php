<script type="text/javascript">
	$(document).ready(function() {
		//harus angka
		$(".numberrequired").keydown(function (e) {
		    // Allow: backspace, delete, tab, escape, enter and .
		    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		        // Allow: Ctrl+A
		        (e.keyCode == 65 && e.ctrlKey === true) || 
		        // Allow: home, end, left, right
		        (e.keyCode >= 35 && e.keyCode <= 39)) {
		        // let it happen, don't do anything
		        return;
		    }
		    // Ensure that it is a number and stop the keypress
		    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		        e.preventDefault();
		    }
		});

		$('.edObat').click(function (e) {
			e.preventDefault();
		})

		/* harga jual otomatis */
		$('#hps').on('change', function (e) {
			e.preventDefault();
			var a = Number($('#hps').val());
			var nilai = (a + (a * Number($('#marginobat').val()) / 100));
			$('#hargaJual').val(nilai);
		})

		$('#marginobat').on('change', function (e) {
			e.preventDefault();
			var a = Number($('#hps').val());
			var nilai = (a + (a * Number($('#marginobat').val()) / 100));
			$('#hargaJual').val(nilai);
		})
		/*akhir harga jual*/

		$("#lookmerk").submit(function(event){
			var item = {};
			item['p_item'] = $('#katakunci').val();

			event.preventDefault();

			if($('#katakunci').val()!=""){
				$.ajax({
					type:"POST",
					data: item,
					url:"<?php echo base_url()?>farmasi/homegudangobat/search_merk",
					success:function(data){
						console.log(data);
						$('#t_body_merk').empty();
	 					if(data.length>0){
							for(var i = 0; i<data.length; i++){
								var nama_merk = data[i]['nama_merk'],
									merk_id = data[i]['merk_id'];

								$("#t_body_merk").append(
									'<tr>'+
										'<td class="nama_merk">'+nama_merk+'</td>'+
										'<td class="merk_id" style="display:none">'+merk_id+'</td>'+
										'<td style="text-align:center"><a href="" class="inputmerk"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i></a></td>'+
									'</tr>'
								);
							}
						}else{
							$('#t_body_merk').empty();
							$('#t_body_merk').append(
								'<tr>'+
						 			'<td colspan="2"><center>Data Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
						}
					},
					error:function(data){
						$('#t_body_merk').empty();
					}
				});
			}else{

			}

		});

		$('#tambahmerkbaru').submit(function (e) {
			e.preventDefault();
			var item = {}
			item['newmerk'] = $('#newmerk').val();
			if ($('#newmerk').val() == '') {alert('isi nama merek');return false;};
			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homegudangobat/addnewmerk",
				success:function (data) {
					if (data['error'] == 'n') {
						$('#t_body_merk').find('tr td.kosong').remove();
						$("#t_body_merk").append(
							'<tr>'+
								'<td class="nama_merk">'+item['newmerk']+'</td>'+
								'<td class="merk_id" style="display:none">'+data['id']+'</td>'+
								'<td style="text-align:center"><a href="" class="inputmerk"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i></a></td>'+
							'</tr>'
						);
					}
					alert(data['message']);
				},
				error: function (data) {
					
				}
			})
		})

		$('#tambahpenyediabaru').submit(function (e) {
			e.preventDefault();
			var item = {}
			item['newpenyedia'] = $('#newpenyedia').val();
			if ($('#newpenyedia').val() == '') {alert('isi nama penyedia');return false;};
			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homegudangobat/addnewpenyedia",
				success:function (data) {
					if (data['error'] == 'n') {
						$('#t_body_penyedia').find('tr td.kosong').remove();
						$("#t_body_penyedia").append(
							'<tr>'+
								'<td class="nama_penyedia">'+item['newpenyedia']+'</td>'+
								'<td class="penyedia_id" style="display:none">'+data['id']+'</td>'+
								'<td style="text-align:center"><a href="" class="inputpenyedia"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i></a></td>'+
							'</tr>'
						);
					}
					alert(data['message']);
				},
				error: function (data) {
					
				}
			})
		})

		$("#tabelSearchMerk").on('click', 'tr td a.inputmerk', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.nama_merk').text();
			var id = jQuery(this).closest('tr').find('td.merk_id').text();
			$('#selected_nama_merk').val(nama);
			$('#selected_merk_id').val(id);

			$('#nmMerk').modal('hide');
		})


		/*master obat*/
		$('#smpanObat').click(function(e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    
			item['nama'] = $('#nmObat').val();
			item['harga_dasar'] = $('#hgDasarObat').val();
			item['merk_id'] = $('#selected_merk_id').val();
			item['jenis_obat_id'] = $('#selectJnsObat').find('option:selected').val();
			item['satuan_id'] = $('#selectSatObat').find('option:selected').val();
			item['hps'] = $('#hps').val();
			item['margin'] = $('#marginobat').val();
			item['harga_jual'] = $('#hargaJual').val();
			item['is_hidden'] = $('input:radio[name=is_hidden]:checked').val();
			item['is_generik'] = $('#selectGenerik').find('option:selected').val();
			item['stok_min'] = $('#stokMin').val();
			item['merk'] = $('#selected_nama_merk').val();
			item['penyedia_id'] = $('#id_penyedia').val();
			item['penyedia'] = $('#pedObatDet').val();

			//console.log(item); return false;
			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homegudangobat/add_obat",
				success: function (data) {
					alert(data['message']);
					if (data['error'] == 'n') {
						reset_obat();
					} 
					$('#nmObat').focus();
				},
				error: function (data) {
					$('#nmObat').focus();
				}
			})
		})

		function reset_obat () {
			$('#nmObat').val('');
			$('#hgDasarObat').val('');
			$('#selected_merk_id').val('');
			$('#selected_nama_merk').val('');
			$('#hps').val('');
			$('#marginobat').val('');
			$('#hargaJual').val('');
			$('#stokMin').val('');
			$('#pedObatDet').val('');
		}

		/*akhir master obat*/

		/*detail obat*/
		$('#formsearchobat').submit(function (e) {
			e.preventDefault();
			var item ={};
			item['katakunci'] = $('#katakunciobat').val();

			$.ajax({
				type: 'POST',
				data: item,
				url: "<?php echo base_url()?>farmasi/homegudangobat/search_obat",
				success: function (data) {
					console.log(data);
						$('#t_body_cari_obat').empty();
	 					if(data.length>0){
							for(var i = 0; i<data.length; i++){
								var nama = data[i]['nama'],
									obat_id = data[i]['obat_id'],
									nama_satuan = data[i]['satuan'],
									satuan_id = data[i]['satuan_id'],
									merk = data[i]['nama_merk'],
									merk_id = data[i]['merk_id'];

								$("#t_body_cari_obat").append(
									'<tr>'+
										'<td class="nama_obat">'+nama+'</td>'+
										'<td class="obat_id" style="display:none">'+obat_id+'</td>'+
										'<td class="satuan_obat" style="display:none">'+nama_satuan+'</td>'+
										'<td class="satuan_obat_id" style="display:none">'+satuan_id+'</td>'+
										'<td class="merk_obat" style="display:none">'+merk+'</td>'+
										'<td class="merk_obat_id" style="display:none">'+merk_id+'</td>'+
										'<td style="text-align:center"><a href="" class="inputobatdet"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i></a></td>'+
									'</tr>'
								);
							}
						}else{
							$('#t_body_cari_obat').empty();
							$('#t_body_cari_obat').append(
								'<tr>'+
						 			'<td colspan="2"><center>Data Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
						}

				}
			})
		})

		$('#formsearchpenyedia').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['p_item'] = $('#katakuncipenyedia').val();

			$.ajax({
				type: 'POST',
				data: item,
				url: "<?php echo base_url()?>farmasi/homegudangobat/search_penyedia",
				success: function (data) {
					console.log(data);
						$('#t_body_penyedia').empty();
	 					if(data.length>0){
							for(var i = 0; i<data.length; i++){
								var nama = data[i]['nama_penyedia'],
									penyedia_id = data[i]['penyedia_id'];

								$("#t_body_penyedia").append(
									'<tr>'+
										'<td class="nama_penyedia">'+nama+'</td>'+
										'<td class="penyedia_id" style="display:none">'+penyedia_id+'</td>'+
										'<td style="text-align:center"><a href="" class="inputpenyedia"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i></a></td>'+
									'</tr>'
								);
							}
						}else{
							$('#t_body_penyedia').empty();
							$('#t_body_penyedia').append(
								'<tr>'+
						 			'<td colspan="2"><center>Data Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
						}
				}
			})
		})

		
		$("#tabelSearchPenyedia").on('click', 'tr td a.inputpenyedia', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.nama_penyedia').text();
			var id = jQuery(this).closest('tr').find('td.penyedia_id').text();
			$('#pedObatDet').val(nama);
			$('#id_penyedia').val(id);

			$('#searchPenyedia').modal('hide');
		})

		$("#tabelSearchObatDet").on('click', 'tr td a.inputobatdet', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.nama_obat').text();
			var id = jQuery(this).closest('tr').find('td.obat_id').text();
			var satuan = jQuery(this).closest('tr').find('td.satuan_obat').text();
			var satuan_id = jQuery(this).closest('tr').find('td.satuan_obat_id').text();
			var merk = jQuery(this).closest('tr').find('td.merk_obat').text();
			var merk_id = jQuery(this).closest('tr').find('td.merk_obat_id').text();
			$('#nmDetObat').val(nama);
			$('#selected_obat_id').val(id);
			$('#satObatDet').val(satuan);
			$('#satuan_id').val(satuan_id);
			$('#merkObatDet').val(merk);
			$('#merk_id').val(merk_id);

			$('#searchDetObat').modal('hide');

			$.ajax({
				type: "POST",
				url: '<?php echo base_url() ?>farmasi/homegudangobat/tampil_detail/'+id,
				success: function (data) {
					console.log(data);
					$('#t_body_detail_obat').empty();
					var t = $('#tabeldetailobat').DataTable();

					t.clear().draw();
					
					
						for (var i = data.length - 1; i >= 0; i--) {
							var a = format_date(data[i]['tgl_kadaluarsa']);
							var b = '<center><a href="#" class="edObatDetail" id="edDetObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
									'<input type="hidden" class="new_detail_id" value="'+data[i]['obat_detail_id']+'">'+
									'<input type="hidden" class="new_dept_id" value="'+data[i]['obat_dept_id']+'"></center>'
							t.row.add([
								a,
								data[i]['no_batch'],
								data[i]['tahun_pengadaan'],									
								data[i]['sumber_dana'],									
								data[i]['total_stok'],					
								b
							]).draw();
						};
					
				},
				error: function (data) {
					alert('gagal');
				}
			})
			//tampil_detail(nama);
			return false;
		})
	
		$("#tabeldetailobat").on('click', 'tr td a.edObatDetail', function (e) {
			e.preventDefault();
			$('#nmDetObat').focus();
			$("#btnBatalDetObat").show();
			$('#editDetObat').show();
			$('#simpanDetObat').hide();
			$('#resetDetObat').hide();
			$("#noBatchDetObat").prop('disabled', true);
			$("#jmlDetObat").prop('disabled', true);
			$("#pedObatDet").prop('disabled', true);
			$("#selectSumDanaObat").prop('disabled', true);
			var detail_id = $(this).closest('tr').find('td .new_detail_id').val();
			var obat_dept_id = $(this).closest('tr').find('td .new_dept_id').val();
			var jumlah = $(this).closest('tr').find('td').eq(4).text();
			var nobatch = $(this).closest('tr').find('td').eq(1).text();
			var sumber = $(this).closest('tr').find('td').eq(3).text();
			var thn = $(this).closest('tr').find('td').eq(2).text();
			var tgl = $(this).closest('tr').find('td').eq(0).text();
		    var tanggal = format_date2(tgl);

			$('#noBatchDetObat').val(nobatch);
			$("#selectTahObat option[value='"+thn+"']").attr("selected", "selected");
			$("#selectSumDanaObat option[value='"+sumber+"']").attr("selected", "selected");			
			$('#jmlDetObat').val(jumlah);
			$('#tglKadaluarsaDet').val(tanggal);
			$('#selected_obat_detail_id').val(detail_id);
			$('#selected_obat_dept_id').val(obat_dept_id);

		})

		$('#btnBatalDetObat').click(function (e) {
			e.preventDefault();
			$("#btnBatalDetObat").hide();
			$('#editDetObat').hide();
			$('#simpanDetObat').show();
			$('#resetDetObat').show();
			reset_detail();					  						  			
		})

		$('#resetDetObat').click(function (e) {
			e.preventDefault();
			$("#btnBatalDetObat").hide();
			$('#editDetObat').hide();
			$('#simpanDetObat').show();
			reset_detail();					
		})

		function reset_detail () {
			$("#noBatchDetObat").prop('disabled', false);
			$("#jmlDetObat").prop('disabled', false);
			$("#pedObatDet").prop('disabled', false);
			$("#selectSumDanaObat").prop('disabled', false);

			$('#noBatchDetObat').val('');			
			$('#jmlDetObat').val('');
			$('#tglKadaluarsaDet').val('<?php echo date("d/m/Y") ?>');

			var year  = '<?php echo date('Y') ?>';
			$("#selectSumDanaObat option[value='Mandiri']").attr("selected", "selected");
			$("#selectTahObat option[value='"+year+"']").attr("selected", "selected");
		}

		//detail obat
		$('#simpanDetObat').click(function (e) {
			e.preventDefault();

			var item = {};
			item['nama'] = $('#nmDetObat').val();
			item['penyedia'] = $('#pedObatDet').val();
			item['obat_id'] = $('#selected_obat_id').val(); 
			item['no_batch'] = $('#noBatchDetObat').val();
			item['tahun_pengadaan'] = $('#selectTahObat').find('option:selected').val(); 
			item['sumber_dana'] = $('#selectSumDanaObat').find('option:selected').val(); 
			item['penyedia_id'] = $('#id_penyedia').val();
			item['total_stok'] = $('#jmlDetObat').val();

			var str = $('#tglKadaluarsaDet').val();
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
		    item['tgl_kadaluarsa'] = tanggal;

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homegudangobat/add_detail_obat",
				success: function (data) {
					console.log(data);
					alert(data['message']);
					if (data['error'] === 'n') { //kalau error 'y' inputan tidak direset
						$('#noBatchDetObat').val('');
						$('#id_penyedia').val('');
						$('#jmlDetObat').val('');
					} 
					$('#tglKadaluarsaDet').focus();
				},
				error:function (data) {
					alert(data['message']);
				}
			})	
		})

		//edit detail obat
		$('#editDetObat').click(function (e) {
			e.preventDefault();
			var item = {};
			item['nama'] = $('#nmDetObat').val();
			item['obat_id'] = $('#selected_obat_id').val();
			item['tahun_pengadaan'] = $('#selectTahObat').find('option:selected').val();
			item['obat_detail_id']  = $('#selected_obat_detail_id').val();
			var tgl = $('#tglKadaluarsaDet').val();
			var res = tgl.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
		    item['tgl_kadaluarsa'] = tanggal;

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homegudangobat/edit_detail_obat",
				success: function (data) {
					alert(data['message']);
					if (data['error'] === 'n') {
						reset_detail();
						$("#btnBatalDetObat").hide();
						$('#editDetObat').hide();
						$('#simpanDetObat').show();
						$('#resetDetObat').show();
					} 
				},
				error:  function (data) {
					alert('paitttt, gagal');
					console.log(data);
				}
			})
		})

		//edit obat
		$('#btnSimpanEdit').hide();
		$("#tabelobat").on('click', 'tr td a.edObat', function (e) {
			e.preventDefault();
			$('#nmObat').focus();
			var hidden_id = $(this).closest('tr').find('td .newhidden_id').val();
			var nama_obat = $(this).closest('tr').find('td').eq(1).text();
			var obat_id = $(this).closest('tr').find('td .newobat_id').val();
			var jenis_obat = $(this).closest('tr').find('td').eq(2).text();
			var nama_merk = $(this).closest('tr').find('td').eq(3).text();
			var is_generik = $(this).closest('tr').find('td').eq(5).text();
			var harga_dasar = $(this).closest('tr').find('td').eq(6).text();
			var new_hps = $(this).closest('tr').find('td').eq(7).text();
			var new_margin = $(this).closest('tr').find('td').eq(8).text();
			var new_h_jual = $(this).closest('tr').find('td').eq(9).text();
			var new_stok_min = $(this).closest('tr').find('td').eq(10).text();
			var new_jlh = $(this).closest('tr').find('td').eq(11).text();
			var new_satuan = $(this).closest('tr').find('td').eq(12).text();
			var new_merk_id = $(this).closest('tr').find('td .new_merk_id').val();
			var new_satuan_id = $(this).closest('tr').find('td .new_satuan_id').val();
			var new_jenis_id = $(this).closest('tr').find('td .new_jenis_id').val();
			var penyedia_id = $(this).closest('tr').find('td .newpenyedia_id').val();
			var penyedia = $(this).closest('tr').find('td').eq(4).text();
			$('#nmObat').val(nama_obat);
			$('#edit_obat_id').val(obat_id);
			$('#hgDasarObat').val(harga_dasar);
			$('#selected_nama_merk').val(nama_merk);
			$('#selected_merk_id').val(new_merk_id);
			$("#selectSatObat option[value='"+new_satuan_id+"']").attr("selected", "selected");
			$("#selectJnsObat option[value='"+new_jenis_id+"']").attr("selected", "selected");
			$("#selectGenerik option[value='"+is_generik+"']").attr("selected", "selected");
			$('#hps').val(new_hps);
			$('#marginobat').val(new_margin);
			$('#hargaJual').val(new_h_jual);
			$('input:radio[name=is_hidden][value='+hidden_id+']').prop("checked", true);
			$('#stokMin').val(new_stok_min);
			$('#id_penyedia').val(penyedia_id);
			$('#pedObatDet').val(penyedia);

			//sembunyikan
			$("#btnBatalObat").show();
			$('#btnSimpanEdit').show();
			$('#smpanObat').hide();
			$('#resetObat').hide();
		})
		//edit obat

		$('#btnSimpanEdit').click(function(e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    
			item['nama'] = $('#nmObat').val();
			item['obat_id'] = $('#edit_obat_id').val();
			item['harga_dasar'] = $('#hgDasarObat').val();
			item['merk_id'] = $('#selected_merk_id').val();
			item['jenis_obat_id'] = $('#selectJnsObat').find('option:selected').val();
			item['satuan_id'] = $('#selectSatObat').find('option:selected').val();
			item['hps'] = $('#hps').val();
			item['margin'] = $('#marginobat').val();
			item['harga_jual'] = $('#hargaJual').val();
			item['is_hidden'] = $('input:radio[name=is_hidden]:checked').val();
			item['is_generik'] = $('#selectGenerik').find('option:selected').val();
			item['stok_min'] = $('#stokMin').val();
			item['merk'] = $('#selected_nama_merk').val();
			item['merk_id'] = $('#selected_merk_id').val();
			item['penyedia_id'] = $('#id_penyedia').val();

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homegudangobat/edit_obat",
				success: function (data) {
					alert(data['message']);
					$('#nmObat').focus();
					if (data['error'] == 'n') {
						reset_obat();

						//sembunyikan
						$("#btnBatalObat").hide();
						$('#btnSimpanEdit').hide();
						$('#smpanObat').show();
						$('#resetObat').show();
					} 
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#filter_stok').click(function (e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>farmasi/homegudangobat/filter_stok",
				success: function (data) {
					console.log(data);
					$('#t_body_obat').empty();
					
						var t = $('#tabelobat').DataTable();

						t.clear().draw();
						var st;
						for (var i = 0; i < data.length; i++) {
							var st;
							if (Number(data[i]['stok_minimal']) >= Number(data[i]['jlh'])) {
								st =  'style="background-color:red;"';
								
							}else{
								st = "";
							}
							var akhir = '<center><a href="#" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
									'<a href="<?php echo base_url()?>farmasi/homegudangobat/print_kartustok/'+data[i]['obat_id']+'/21" class="printObat"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak"></i></a></center>'+
									'<input type="hidden" class="new_merk_id" value="'+data[i]['merk_id']+'">'+
									'<input type="hidden" class="new_jenis_id" value="'+data[i]['jenis_obat_id']+'">'+
									'<input type="hidden" class="new_satuan_id" value="'+data[i]['satuan_id']+'">'+
									'<input type="hidden" class="newhidden_id" value="'+data[i]['is_hidden']+'">'+
									'<input type="hidden" class="newobat_id"  value="'+data[i]['obat_id']+'">'+
									'<input type="hidden" class="newpenyedia_id"  value="'+data[i]['penyedia_id']+'">'	
							
							t.row.add([
									(i+1),
									data[i]['nama'],								
									data[i]['jenis_obat'],
									data[i]['nama_merk'],
									data[i]['nama_penyedia'],
									data[i]['is_generik'],
									data[i]['harga_dasar'],							
									data[i]['hps'],
									data[i]['margin'],
									data[i]['harga_jual'],
									data[i]['stok_minimal'],									
									data[i]['jlh'],								
									data[i]['satuan'],							
									akhir
							]).draw();
						};

						t.on( 'order.dt search.dt', function () {
					        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
					            cell.innerHTML = i+1;
					        } );
					    } ).draw();
					
				},
				error: function (data) {
					alert('gagal');
					console.log(data);
				}
			})
		})

		$('#filter_obat').click(function (e) {
			e.preventDefault();
			var item = {};
			item['nama'] = $('#nmObatBwh').val();
			item['satuan_id'] = $('#selectSatObatBwh').find('option:selected').val();
			item['is_generik'] = $('#selectGenObatBwh').find('option:selected').val();
			//console.log(item);return false;
			$
			jQuery.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homegudangobat/filter_obat",
				success: function (data) {
					console.log(data);
					$('#t_body_obat').empty();
					
						var t = $('#tabelobat').DataTable();

						t.clear().draw();
						var st;
						for (var i = 0; i < data.length; i++) {
							var st;
							if (Number(data[i]['stok_minimal']) >= Number(data[i]['jlh'])) {
								st =  'style="background-color:red;"';
								
							}else{
								st = "";
							}
							var akhir = '<a href="#" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
									'<a href="<?php echo base_url()?>farmasi/homegudangobat/print_kartustok/'+data[i]['obat_id']+'/21" class="printObat"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak"></i></a>'+
									'<input type="hidden" class="new_merk_id" value="'+data[i]['merk_id']+'">'+
									'<input type="hidden" class="new_jenis_id" value="'+data[i]['jenis_obat_id']+'">'+
									'<input type="hidden" class="new_satuan_id" value="'+data[i]['satuan_id']+'">'+
									'<input type="hidden" class="newhidden_id" value="'+data[i]['is_hidden']+'">'+
									'<input type="hidden" class="newobat_id"  value="'+data[i]['obat_id']+'">'+	
									'<input type="hidden" class="newpenyedia_id"  value="'+data[i]['penyedia_id']+'">'
							
							t.row.add([
									(i+1),
									data[i]['nama'],								
									data[i]['jenis_obat'],
									data[i]['nama_merk'],
									data[i]['nama_penyedia'],
									data[i]['is_generik'],
									data[i]['harga_dasar'],							
									data[i]['hps'],
									data[i]['margin'],
									data[i]['harga_jual'],
									data[i]['stok_minimal'],									
									data[i]['jlh'],								
									data[i]['satuan'],							
									akhir
							]).draw();
						};

						t.on( 'order.dt search.dt', function () {
					        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
					            cell.innerHTML = i+1;
					        } );
					    } ).draw();
				},
				error: function (data) {
					alert('gagal');
				}
			})
		})

		
		/*akhir detail obat*/

		/*inventori*/
		$("#filterInv option[value='Nama Obat']").attr("selected", "selected");
		$('#invNamaObat').show();$('#invJenisObat').hide();$('#invMerekObat').hide();$('#invSumberObat').hide();$('#invPenyediaObat').hide();
		$('#filterInv').on('change', function (e) {
			e.preventDefault();
			var selected = $('#filterInv').val();
			switch(selected){
				case 'Nama' : $('#invNamaObat').show();$('#invJenisObat').hide();$('#invMerekObat').hide();$('#invSumberObat').hide();$('#invPenyediaObat').hide();break;
				case 'Jenis' : $('#invNamaObat').hide();$('#invJenisObat').show();$('#invMerekObat').hide();$('#invSumberObat').hide();$('#invPenyediaObat').hide();break;
				case 'Merek' : $('#invNamaObat').hide();$('#invJenisObat').hide();$('#invMerekObat').show();$('#invSumberObat').hide();$('#invPenyediaObat').hide();break;
				case 'Sumber' : $('#invNamaObat').hide();$('#invJenisObat').hide();$('#invMerekObat').hide();$('#invSumberObat').show();$('#invPenyediaObat').hide();break;
				case 'Penyedia' : $('#invNamaObat').hide();$('#invJenisObat').hide();$('#invMerekObat').hide();$('#invSumberObat').hide();$('#invPenyediaObat').show();break;
			}
		})

		$('#expired').click(function (e) {
			e.preventDefault();
			var item = get_items();
			item[1]['filter'] = '0';
			submit_filter(item);
		})

		$('#expiredtiga').click(function (e) {
			e.preventDefault();
			var item = get_items();
			item[1]['filter'] = '3';
			submit_filter(item);
		})
		$('#expiredenam').click(function (e) {
			e.preventDefault();
			var item = get_items();
			item[1]['filter'] = '6';
			submit_filter(item);
		})

		$('#filter_inventori').click(function (e) {
			e.preventDefault();
			// alert('bisa');return false;
			var item = get_items();
			item[1]['filter'] = '';
			submit_filter(item);
		})

		var io_row;
		$("#tabelinventoriutama").on('click', 'tr td a.inoutobat', function (e) {
			var obat_dept_id = $(this).closest('tr').find('td .obat_dept_id_inventori').val();
			var jlh = $(this).closest('tr').find('td').eq(8).text();
			io_row = $(this);
			$('#inout_obat_dept_id').val(obat_dept_id);
			$('#sisaInOut').val(jlh);

			$('#jmlInOut').on('change', function (e) {
				e.preventDefault();

				var is_in = $('#io').find('option:selected').val();
				var jmlInOut = $('#jmlInOut').val();
				var sisa = jlh;//$('#sisaInOut').val();
				var hasil ="";
				if (is_in == 'IN') {
					hasil = Number(jmlInOut) + Number(sisa);
				}else{			
					hasil = Number(sisa) - Number(jmlInOut);
				}

				if (jmlInOut == '') {
					hasil = Number(sisa);
				}
				$('#sisaInOut').val(hasil);			
			})

			$('#io').on('change', function () {
				var jumlah = Number($('#jmlInOut').val());
				var sisa = Number(jlh);//Number($('#sisaInOut').val());

				var isout = $('#io').find('option:selected').val();
				if (isout === 'IN') {
					$('#sisaInOut').val(jumlah + sisa);
				} else{
					$('#sisaInOut').val(sisa - jumlah);
				};
			})
		})

		$("#tabelinventoriutama").on('click', 'tr td a.printobat', function (e) {
			var obat_dept_id = $(this).closest('tr').find('td  .obat_dept_id_inventori').val();

			 $.ajax({
		    	type: "POST",
		    	url: "<?php echo base_url()?>farmasi/homegudangobat/get_detail_obat_bydeptid/" + obat_dept_id,
		    	success: function (data) {
		    		//console.log(data);
		    		$('#tbodydetailobatinventori').empty();
		    		for(var i = 0; i < data.length ; i++){
		    			var a = "";
		    			var jlh = "";
		    			if(data[i]['masuk'] == 0) {a = "OUT"} else a = "IN";
		    			if(data[i]['masuk'] == 0)  {jlh = data[i]['keluar']} else jlh = data[i]['masuk'];
		    			$('#tbodydetailobatinventori').append(
							'<tr>'+
								'<td>'+format_date(data[i]['tanggal'])+'</td>'+
								'<td>'+a+'</td>'+
								'<td>'+jlh+'</td>'+
								'<td>'+data[i]['total_stok']+'</td>'+
							'</tr>'
		    			)
		    		}
		    	},
		    	error: function (data) {
		    		alert('gagal');
		    	}
		    })
		})
				

		$('#form_in_out').submit(function (e) {
			e.preventDefault();

			var item = {};
			item['obat_dept_id'] = $('#inout_obat_dept_id').val();
			item['jumlah'] = $('#jmlInOut').val();
			item['sisa'] = $('#sisaInOut').val();
			item['is_out'] = $('#io').find('option:selected').val();
			var str = $('#tglInOut').val();
			if (str == '') {
				str = "<?php echo date('d/m/Y H:i:s') ?>";
			}
		    item['tanggal'] = str;
		    item['keterangan'] = $('#keteranganIO').text();

		    if (item['jumlah'] != "") {
			    $.ajax({
			    	type: "POST",
			    	data: item,
			    	url: "<?php echo base_url()?>farmasi/homegudangobat/input_in_out",
			    	success: function (data) {
			    		if (data == "true") {
			    			alert('data berhasil disimpan');
			    			$('#inout').modal('hide');
			    			$('#keteranganIO').val(''); $('#jmlInOut').val('');
			    			io_row.closest('tr').find('td').eq(8).text(item['sisa']);
			    		} else{
			    			alert('gagal, terdapat kesalahan');
			    		};
			    		
			    	},
			    	error: function (data) {
			    		alert('gagal');
			    	}
			    })
			} else{
				alert('isi data dengan benar');
				$('#jmlInOut').focus();
			};			
		})



		/*akhir inventori*/


		/*pindaahan dari javascript di base/operator/javascript.php*/		

		$('#btnBatalObat').click(function (e) {
			e.preventDefault();
			$("#btnBatalObat").hide();
			$('#btnSimpanEdit').hide();
			$('#smpanObat').show();
			$('#resetObat').show();

			$(':input','#forminputobat')
			  .not(':button, :submit, :reset, :hidden')
			  .val('');
			$("#selectSatObat option[value='"+1+"']").attr("selected", "selected");
			$("#selectJnsObat option[value='"+1+"']").attr("selected", "selected");						  						  
			$("#selectGenerik option[value='"+1+"']").attr("selected", "selected");
		})

		$('#resetObat').click(function (e) {
			e.preventDefault();
			$("#btnBatalObat").hide();
			$('#btnSimpanEdit').hide();
			$('#smpanObat').show();

			$(':input','#forminputobat')
			  .not(':button, :submit, :reset, :hidden')
			  .val('');
			$("#selectSatObat option[value='"+1+"']").attr("selected", "selected");
			$("#selectJnsObat option[value='"+1+"']").attr("selected", "selected");
			$("#selectGenerik option[value='"+1+"']").attr("selected", "selected");
		})

		$('#editDetObat').hide();
		/**/


		/*opname*/
		$("a.editInventoriBut").hide();
		$('a.edIventoriBatal').hide();
		$('.editInventori').click(function (e) {
			e.preventDefault();
		})
		var asli = '';
		$("#tblInven1").on('click','tr td a.edIventori',function(e){
			e.preventDefault();
			var a = $(this).closest('tr').find('td .stokfisikopname').text();
			var b = $(this).closest('tr').find('td').eq(5).text();
			asli = a;			
			$(this).closest('tr').find('td .stokfisikopname').replaceWith(
					'<input type="number" style="width:80px;" class="form-control editstokfisikopname" value="'+a+'">'
				);

			$(this).hide();
			$(this).closest('tr').find('td a.editInventoriBut').show();
			$(this).closest('tr').find('td a.edIventoriBatal').show();
			
			$("#tblInven1").on('change','tr td .editstokfisikopname',function(e){
				var ubah = $(this).val();
				var harga = $(this).closest('tr').find('td').eq(7).text();
				var selisih = Number(ubah) - Number(b);
				$(this).closest('tr').find('td').eq(8).html(selisih);
				$(this).closest('tr').find('td').eq(9).html(Number(harga) * selisih);
			})
		});

		$("#tblInven1").on('click','tr td a.edIventoriBatal', function(e){
			e.preventDefault();
			var b = $(this).closest('tr').find('td').eq(5).text();
			$(this).closest('tr').find('td').eq(5).html(b);
			$(this).closest('tr').find('td .editstokfisikopname').replaceWith(
				'<span class="stokfisikopname">'+asli+'</span>'
			);
			var harga = $(this).closest('tr').find('td').eq(7).text();
			var selisih = Number(asli) - Number(b);
			$(this).closest('tr').find('td').eq(8).html(selisih);
			$(this).closest('tr').find('td').eq(9).html(Number(harga) * selisih);
			$(this).closest('tr').find('td a.edIventori').show();		
			$(this).closest('tr').find('td a.editInventoriBut').hide();
			$(this).closest('tr').find('td a.edIventoriBatal').hide();
		})
	
		$("#tblInven1").on('click','tr td a.editInventoriBut', function(e){
			e.preventDefault();

			var a = $(this).closest('tr').find('td .editstokfisikopname').val();
			$(this).closest('tr').find('td .editstokfisikopname').replaceWith(
					'<span class="stokfisikopname">'+a+'</span>'
				);
			$(this).closest('tr').find('td a.edIventori').show();
			$(this).closest('tr').find('td a.editInventoriBut').hide();
			$(this).closest('tr').find('td a.edIventoriBatal').hide();
			//document.getElementById("status").innerHTML = "Edit";

			var stok = $(this).closest('tr').find('td .stokfisikopname').text();
			var str = $('#tanggalacuan').val();
			if(str == ''){
				alert('pilih tanggal acuan');
				 $('#tanggalacuan').focus();
				return false;
			}
			var mess = 'anda akan mengopname dengan tanggal acuan '+str+', yakin proses ini disimpan ?';
			var d = confirm(mess);
			if (d == true) {
				var item = {};
				var str = $('#tanggalacuan').val();
				var res = str.split("/");
			    var bln = res[1];
				var tgl = res[0];
			    var thn = res[2];

			    var tanggal = thn + '-' + bln + '-' + tgl;
				item['tanggal_acuan'] = tanggal;
				item['stok'] = stok;
				item['obat_dept_id'] = $(this).closest('tr').find('td .obat_dept_id').val();
				item['obat_opname_id'] = $(this).closest('tr').find('td .obat_opname_id').val();
				item['harga_jual'] = $(this).closest('tr').find('td').eq(7).text();
				var dethis = $(this).closest('tr').find('td').eq(8);
				var jlh = $(this).closest('tr').find('td').eq(9);
				var sistem = $(this).closest('tr').find('td').eq(5);
				console.log(item);
				$.ajax({
					type: "POST",
					data: item,
					url: "<?php echo base_url()?>farmasi/homegudangobat/opname_process",
					success: function (data) {
						console.log(data);
						alert(data['message']);
						dethis.text('0');sistem.text(stok);jlh.text('0');
					}
				})
			} else{
				alert('data tidak berubah')
			};
		});

		/*akhir opname*/

		/* penerimaan obat mulai di sini*/
		$('#formsearchpenyediapenerimaan').submit(function (e) {
			e.preventDefault();
		})
		$('#katakuncipetugaspenerimaan').keyup(function(event){
			var item = {};
			item['p_item'] = $('#katakuncipetugaspenerimaan').val();
			
			event.preventDefault();

			if(p_item!=""){
				$.ajax({
					type:"POST",
					data: item,
					url:"<?php echo base_url()?>farmasi/homegudangobat/get_petugas",
					success:function(data){
						$('#tbody_petugaspenerimaan').empty();

	 					if(data.length>0){
							for(var i = 0; i<data.length; i++){
								var nama = data[i]['nama_petugas'],
									id = data[i]['petugas_id'];

								$("#tbody_petugaspenerimaan").append(
									'<tr>'+
										'<td>'+nama+'</td>'+
										'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getPetugasPenerimaan(&quot;'+id+'&quot; , &quot;'+nama+'&quot;)"></i></td>'+
									'</tr>'
								);
							}
						}else{
							$('#tbody_petugaspenerimaan').empty();
							$('#tbody_petugaspenerimaan').append(
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
				$('#tbody_petugaspenerimaan').empty();
				$('#tbody_petugaspenerimaan').append(
					'<tr>'+
			 			'<td colspan="2"><center>Cari Data Petugas</center></td>'+
			 		'</tr>'
				);
			}
		});

		$('#formsearchpenyediapenerimaan').submit(function(event){
			var item = {};
			item['p_item'] = $('#penyediapenerimaan').val();
			
			event.preventDefault();

			if($('#penyediapenerimaan').val()!=""){
				$.ajax({
					type:"POST",
					data: item,
					url:"<?php echo base_url()?>farmasi/homegudangobat/search_penyedia",
					success:function(data){
						$('#tbody_penyediapenerimaan').empty();

	 					if(data.length>0){
							for(var i = 0; i<data.length; i++){
								var nama = data[i]['nama_penyedia'],
									id = data[i]['penyedia_id'];

								$("#tbody_penyediapenerimaan").append(
									'<tr>'+
										'<td>'+nama+'</td>'+
										'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getPenyediaPenerimaan(&quot;'+id+'&quot; , &quot;'+nama+'&quot;)"></i></td>'+
									'</tr>'
								);
							}
						}else{
							$('#tbody_penyediapenerimaan').empty();
							$('#tbody_penyediapenerimaan').append(
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
				$('#tbody_penyediapenerimaan').empty();
				$('#tbody_penyediapenerimaan').append(
					'<tr>'+
			 			'<td colspan="2"><center>Cari Data</center></td>'+
			 		'</tr>'
				);
			}
		});

		$('#katakuncipenerimaan').keyup(function(event){
			var p_item = $('#katakuncipenerimaan').val();
			var id_penyedia = $('#id_penyediaObatTerima').val();
			if (id_penyedia == '') {
				alert('pilih penyedia / distributor');
				$("#searchpenyediapenerimaan").modal('hide');
				$('#penyediapenerimaan').focus();
				return false;
			}

			var item = {};
			item['katakunci'] = p_item;
			item['penyedia_id'] = id_penyedia;

			event.preventDefault();

			if(p_item!=""){
				$.ajax({
					type:"POST",
					data: item,
					url:"<?php echo base_url()?>farmasi/homegudangobat/get_obat_penyedia",
					success:function(data){
						//console.log(data);
						$('#t_body_obatpenerimaan').empty();

	 					if(data.length>0){
							for(var i = 0; i<data.length; i++){
								var nama = data[i]['nama'],
									obat_id = data[i]['obat_id']
									harga_dasar = data[i]['harga_dasar']
									satuan = data[i]['satuan'];

								$("#t_body_obatpenerimaan").append(
									'<tr>'+
										'<td style="display:none;">'+obat_id+'</td>'+
										'<td>'+nama+'</td>'+
										'<td>'+harga_dasar+'</td>'+
										'<td>'+satuan+'</td>'+
										'<td style="text-align:center"><a href="#" class="addNewObatTerima"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i></a></td>'+
									'</tr>'
								);
							}
						}else{
							$('#t_body_obatpenerimaan').empty();
							$('#t_body_obatpenerimaan').append(
								'<tr>'+
						 			'<td colspan="4"><center>Data Paket Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
						}
					},
					error:function(data){

					}
				});
			}else{
				$('#t_body_obatpenerimaan').empty();
				$('#t_body_obatpenerimaan').append(
					'<tr>'+
			 			'<td colspan="4"><center>Cari Data Obat</center></td>'+
			 		'</tr>'
				);
			}
		});

		var addDivTerima = $('#t_body_inputterima');
		
		$('#t_body_obatpenerimaan').on('click','tr td a.addNewObatTerima', function(e) {
			//hitung harga dlu
			e.preventDefault();

			var cols = [];
	        $(this).closest('tr').find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });

			var obat_id = cols[0];
			var harga_dasar = cols[2];
			var satuan = cols[3];
			var nama_obat = cols[1];

			var newtabel = '<tr><td>'+nama_obat+'</td>'+
							'<td>'+satuan+'</td>'+
							'<td><input type="text" style="width:150px;" class="numberrequired form-control"></td>'+
							'<td><input type="text" style="cursor:pointer;" class="form-control calder" data-date-autoclose="true" data-provide="datepicker" data-date-format="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>" required readonly=""></td>'+
							'<td style="width:100px;"><input type="number" class="form-control numberrequired qtypenerimaaninput"></td>'+
							'<td style="width:90px;"><input type="number" maxlength="3" class="numberrequired form-control diskpenerimaaninput"></td>'+
							'<td class="hargadasarterima">'+harga_dasar+'</td>'+
							'<td class="totalrowterima">0</td>'+
							'<td style="text-align:center;width:5%;"><a href="#" class="removeRow" ><i class="glyphicon glyphicon-remove"></i></a></td>'+
							'<td style="display:none">'+obat_id+'</td></tr>'

			$(newtabel).appendTo(addDivTerima);
			$(".adaanQtyTer").editable(); 
			var data = hitung_penerimaan();
			console.log(data);
			return false;
		});

		$('#t_body_inputterima').on('change', 'tr td .qtypenerimaaninput', function (e) {
			var a = $(this).closest('tr').find('td .diskpenerimaaninput').val();
			var c = $(this).closest('tr').find('td.hargadasarterima').text();
			var b = $(this).val();
			var total = Number(c) * Number(b);
			var hasilakhir =  total - (total * Number(a) / 100);
			$(this).closest('tr').find('td.totalrowterima').html(hasilakhir);
			var data = hitung_penerimaan();
			console.log(data);
		})

		$('#t_body_inputterima').on('change', 'tr td .diskpenerimaaninput', function (e) {
			var a = $(this).closest('tr').find('td .qtypenerimaaninput').val();
			var c = $(this).closest('tr').find('td.hargadasarterima').text();
			var b = $(this).val();
			var total = Number(c) * Number(a);
			var hasilakhir =  total - (total * Number(b) / 100);
			$(this).closest('tr').find('td.totalrowterima').html(hasilakhir);
			var data = hitung_penerimaan();
		})
		
		//kalo hapus row
		$('#t_body_inputterima').on('click', 'tr td a.removeRow', function (e) {
			e.preventDefault();
			$(this).closest('tr').remove();

			var data = hitung_penerimaan();
		})

		//hitung grand total
		$('#selectpotongan').on('change', function (e) {
			e.preventDefault();
			var data = hitung_penerimaan();			
		})

		$('#potongan').on('change', function (e) {
			e.preventDefault();
			var data = hitung_penerimaan();			
		})

		$('#ppn').on('change', function (e) {
			e.preventDefault();
			var data = hitung_penerimaan();			
		})
		
		$('#formpenerimaanobat').submit(function (e) {
			e.preventDefault();

			var item = {};
			item['nomor_penerimaan'] = $('#nmrTerima').val();
			item['penyedia_id'] = $('#id_penyediaObatTerima').val();
			item['sumber_dana'] = $('#sumdanapenerimaan').val();
			item['keterangan'] = $('#ketObatTerima').val();
			item['tanggal'] = format_date3($('#tglTerimaObat').val());
			item['tanggal_faktur'] = format_date3($('#tglFakturObat').val());
			

			//loop dari tabel
			var data = hitung_penerimaan();

			//
			var send = {};
		    for (var i = data.length - 1; i >= 0; i--) {
		    	var myData = {};
		    	myData['obat_id'] = data[i][9];
		    	myData['no_batch'] = data[i][10];
		    	myData['tgl_kadaluarsa'] = format_date3(data[i][11]); //ubah lagi ntar
		    	myData['jumlah'] = data[i][12];
		    	myData['diskon'] = data[i][13];
		    	myData['harga_beli'] = data[i][6];
		    	myData['total'] = data[i][7];

		    	send[i] = myData;
		    };

		    item['data'] = send;
		    item['jenispotongan'] = $('#selectpotongan').find('option:selected').val();
			item['potongan'] =  Number($('#potongan').val());
			item['ppn'] =  Number($('#ppn').val());
			item['grandtotal'] = $('#grandtotal').text();
			item['subtotal'] = $('#subtotalterima').text();

			//console.log(item);return false;
			
		    $.ajax({
		    	type: 'POST',
		    	data: item,
		    	url: "<?php echo base_url()?>farmasi/homegudangobat/add_penerimaan",
		    	success: function (data) {
		    		//console.log(data['message']); return false;
		    		/*alert(data['message']);
		    		if (data['error'] === 'n') {
		    			reset_penerimaan();
		    		} */
					var t = $('#tblriwayatterima').DataTable();
					t.clear().draw();
					for (var i = 0; i < data.length; i++) {
						t.row.add([
							Number(i+1),
							data[i]['nama'],
							data[i]['satuan'],
							data[i]['no_batch'],
							format_date(data[i]['tgl_kadaluarsa']),
							data[i]['jumlah'],
							data[i]['diskon'],
							data[i]['diskon'],
							data[i]['harga_beli'],
							data[i]['total']
						]).draw();
					};
					
					alert('berhasil disimpan');
					reset_penerimaan();
		    	},
		    	error: function (data) {
		    		
		    	}
		    })
		})

		$('#resetpenerimaan').click(function (e) {
			e.preventDefault();
			reset_penerimaan();
		})
		/*akhir penerimaan obat*/

		/*permintaan obat*/
		var this_minta;
		$('#t_body_permintaan').on('click','tr td a.lihatdetailminta', function (e) {
			e.preventDefault();
			this_minta = $(this);

	        var id = $(this).closest('tr').find('td .idpermintaanobat').val();
	        var dept_id = $(this).closest('tr').find('td .iddeptpermintaanobat').val();
	        $.ajax({
	        	type: "POST",
	        	url: "<?php echo base_url()?>farmasi/homegudangobat/get_detail_persetujuan/"+ id,
	        	success: function (data) {
	        		//console.log(data);
	        		$('#t_body_detail_permintaan').empty();
	        		if (data.length > 0) {
	        			$('#obat_permintaan_id_confirm').val(id);
	        			$('#deptobat_permintaan_id_confirm').val(dept_id);
	        			for (var i = data.length - 1; i >= 0; i--) {
	        				$('#t_body_detail_permintaan').append(
	        					'<tr>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td style="text-align:left">'+data[i]['satuan']+'</td>'+
									'<td style="text-align:left">'+data[i]['nama_merk']+'</td>'+
									'<td style="text-align:center">'+format_date(data[i]['tgl_kadaluarsa'])+'</td>'+
									'<td style="text-align:right">'+data[i]['total']+'</td>'+
									'<td style="text-align:right">'+data[i]['jumlah_request']+'</td>'+
									'<td style="text-align:right"><a href="#" class="editableform editable-click app" data-type="text" data-pk="1" data-original-title="Jumlah Diapprove" id="app">0</a></td>'+
									'<td style="text-align:right">'+data[i]['harga_jual']+'</td>'+
									'<td style="display:none">'+data[i]['obat_detail_id']+'</td>'+
									'<td style="display:none">'+data[i]['tgl_kadaluarsa']+'</td>'+
									'<td style="display:none">'+data[i]['obat_id']+'</td>'+
									'<td style="display:none">'+data[i]['stok_minimal']+'</td>'+
								'</tr>'
	        				)
	        			};
	        			//dieditable lagi -_-
	        			$(".app").editable();
	        		} else{
	        			$('#t_body_detail_permintaan').append(
	    					'<tr><td style="text-align:center" colspan="8">Tidak ada detail</td></tr>'
	    				)	
	        		};
	        	},
	        	error: function (data) {
	        		alert('error');
	        	}
	        })
		})

		$('#batalterima').click(function (e) {
			e.preventDefault();
			$('#t_body_detail_permintaan .app').text('0');
		})

		$('#formdetailpermintaan').submit(function (e) {
			e.preventDefault();
			var data = [];
		    $('#t_body_detail_permintaan').find('tr').each(function (rowIndex, r) {
		        var cols = [];
		        $(this).find('td').each(function (colIndex, c) {
		            cols.push(c.textContent);
		        });
		        data.push(cols);
		    });
		    if (data.length == 0) {
		    	alert('tidak ada detail');
		    	return false;
		    }

			var a = confirm('data akan diproses?');
			if (a == true) {
				var obat_permintaan_id = $('#obat_permintaan_id_confirm').val();

			    var item = {}
			    item['permintaan_id'] = $('#obat_permintaan_id_confirm').val();
			    item['dept_id'] = $('#deptobat_permintaan_id_confirm').val();
			    item['approve'] = data;

			    //console.log(data);return false;
			    $.ajax({
			    	type: "POST",
			    	data: item,
			    	url: "<?php echo base_url()?>farmasi/homegudangobat/submit_persetujuan_permintaan",
			    	success:  function (data) {
			    		alert('sukses');
			    		var table = $('#tabelpermintaangudang').DataTable();
						table.row(this_minta.parents('tr') ).remove().draw();
						table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
				            cell.innerHTML = i+1;
				        } );

				        var jml = $('#jlhpersetujuan').val();
						var no = parseInt(jml)+1;
						var t = $('#tabelutamariwayatpersetujuan').DataTable();
						var last = '<center><input type="hidden" class="idriwayatpermintaan" value="'+data['permintaan_id']+'">'+
								'<a href="#" class="detailriwayatpermintaan" data-toggle="modal" data-target="#riwpersetujuanper">'+
									'<i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="detail"></i>'+
								'</a></center>';
						t.row.add([
							no,
							data['waktu'],
							data['departement'],
							data['petugas'],
							"",
							last,
							no
						]).draw();

						$('#jlhpersetujuan').val(no);
			    		console.log(data);
			    	},
			    	error: function (data) {

			    	}
			    })
			}
			$('#cek').modal('hide');
		})

		$('#t_body_riwayatpermintaan').on('click','tr td a.detailriwayatpermintaan', function (e) {
			e.preventDefault();
	        var id = $(this).closest('tr').find('td .idriwayatpermintaan').val();
	        var cols = [];
	        $(this).closest('tr').find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });

		    $('#waktupersetujuan').text(cols[1]);
		    $('#departemenpersetujuan').text(cols[2]);
		    $('#petugasresponpersetujuan').text(cols[3]);
		    $('#keteranganriwayatpersetujuan').text(cols[4]);

	        $.ajax({
	        	type: "POST",
	        	url: "<?php echo base_url()?>farmasi/homegudangobat/get_detail_persetujuan/"+ id,
	        	success: function (data) {
	        		console.log(data);
	        		$('#t_body_detailriwayatminta').empty();
	        		if (data.length > 0) {
	        			//$('#obat_permintaan_id_confirm').val(id);
	        			for (var i = data.length - 1; i >= 0; i--) {
	        				$('#t_body_detailriwayatminta').append(
	        					'<tr>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td style="text-align:left">'+data[i]['satuan']+'</td>'+
									'<td style="text-align:left">'+data[i]['nama_merk']+'</td>'+
									'<td style="text-align:right">'+data[i]['total']+'</td>'+
									'<td style="text-align:right">'+data[i]['jumlah_request']+'</td>'+
									'<td style="text-align:right">'+data[i]['jumlah_approved']+'</td>'+
									'<td style="text-align:right">'+data[i]['harga_jual']+'</td>'+
									'<td style="display:none">'+data[i]['obat_detail_id']+'</td>'+
								'</tr>'
	        				)
	        			};
	        		} else{
	        			$('#t_body_detailriwayatminta').append(
	    					'<tr><td style="text-align:center" colspan="8">Tidak ada detail</td></tr>'
	    				)	
	        		};
	        	},
	        	error: function (data) {
	        		alert('error');
	        	}
	        })
		})

		/*akhir permintaan obat*/

		/*retur obat departemen*/
		var this_returdept;
		$('#tbody_obat_dept').on('click','tr td a.cekdetailreturdept', function (e) {
			e.preventDefault();
			this_returdept = $(this);
			var id = $(this).closest('tr').find('td .idreturdept').val();
			var id_deptasal = $(this).closest('tr').find('td .iddeptreturobat').val();

			var cols = [];
	        $(this).closest('tr').find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });
	        $('#detnamadept').text(cols[2]);

			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>farmasi/homegudangobat/get_detail_returdepartment/"+ id,
				success:  function (data) {
					//console.log(data);
					$('#tbody_detailreturdept').empty();
					$('#id_returdepartemen').val(id);
					$('#id_departementasalretur').val(id_deptasal);
					if (data.length > 0) {
						for (var i = data.length - 1; i >= 0; i--) {
							$('#tbody_detailreturdept').append(
								'<tr>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td>'+data[i]['nama_merk']+'</td>'+
									'<td>'+format_date(data[i]['tgl_kadaluarsa'])+'</td>'+
									'<td>'+data[i]['jumlah']+'</td>'+
									'<td>'+data[i]['satuan']+'</td>'+
									'<td style="display:none">'+data[i]['obat_detail_id']+'</td>'+
									'<td style="display:none">'+data[i]['tgl_kadaluarsa']+'</td>'+
								'</tr>'
							)
						};
					} else{
						$('#tbody_detailreturdept').append(
	    					'<tr><td style="text-align:center" colspan="5">Tidak ada detail</td></tr>'
	    				)
					};
				},
				error: function (data) {
					
				}
			})
		})

		$('#formterimaretur').submit(function (e) {
			e.preventDefault();
			var data = [];
		    
		    $('#tbody_detailreturdept').find('tr').each(function (rowIndex, r) {
		        var cols = [];
		        $(this).find('td').each(function (colIndex, c) {
		            cols.push(c.textContent);
		        });
		        data.push(cols);
		    });
		    if (data.length == 0) {
		    	alert('tidak ada detail');
		    	return false;
		    }
		    
			var a = confirm('data akan diproses?');
			if (a == true) {
				var obat_retur_id = $('#id_returdepartemen').val();
				var retur_dept_id = $('#id_departementasalretur').val();
				var item = {};
				item['obat_retur_id'] = obat_retur_id;
				item['retur_dept_id'] = retur_dept_id;
				item['approve'] = data;
				$.ajax({
					type: "POST",
					data: item,
					url: "<?php echo base_url()?>farmasi/homegudangobat/confirmreturdept",
					success: function (data) {
						console.log(data);
						alert('data berhasil disimpan');
						var table = $('#tabelreturdepartemen').DataTable();
						table.row(this_returdept.parents('tr') ).remove().draw();
						table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
				            cell.innerHTML = i+1;
				        } );

						var t = $('#tabelriwayatreturdept').DataTable();
						t.clear().draw();
			    		for (var i = 0; i < data.length; i++) {
			    			var last = '<center><input type="hidden" class="idriwayatreturdept" value="'+data[i]['retur_dept_id']+'">'+
										'<a href="#" class="detailriwayatdept" data-toggle="modal" data-target="#riwretdept"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>'+
										'<a href="#" class="cetak" id="cetak"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Print"></i></a></center>'
			    			t.row.add([
			    				'<center>'+(Number(i+1))+'</center>',
			    				format_date(data[i]['waktu']),
			    				data[i]['nama_dept'],
			    				data[i]['nama_petugas'],
			    				data[i]['keterangan'],
			    				last,
			    				''
			    			]).draw();
			    		};
					},
					error: function (data) {
						console.log(data);
					}
				})

				$('#returObatDis').modal('hide');
			}
		})

		//riwayat
		$('#t_body_riwayatreturdept').on('click', 'tr td a.detailriwayatdept', function (e) {
			e.preventDefault();
			var cols = [];
	        $(this).closest('tr').find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });

	        $('#wakturiwayatreturdept').text(cols[1]);
	        $('#deptriwayatreturdept').text(cols[2]);
	        $('#petugasriwayatreturdept').text(cols[3]);
	        $('#ketriwayatreturdept').text(cols[4]);

	        var id =  $(this).closest('tr').find('td .idriwayatreturdept').val();

	        $.ajax({
	        	type: "POST",
	        	url: "<?php echo base_url()?>farmasi/homegudangobat/get_detail_riwayat_returdepartemen/"+ id,
	        	success: function (data) {
	        		console.log(data);
	        		if (data.length > 0) {
	        			$('#t_body_detailriwayatreturdept').empty();
	        			for(var i = 0 ; i < data.length; i++){
	        				$('#t_body_detailriwayatreturdept').append(
		        				'<tr>'+
									'<td>'+(Number(i) + 1)+'</td>'+
									'<td style="text-align:left">'+data[i]['nama']+'</td>'+
									'<td style="text-align:center">'+format_date(data[i]['tgl_kadaluarsa'])+'</td>'+
									'<td style="text-align:right">'+data[i]['jumlah']+'</td>'+
									'<td style="text-align:left">'+data[i]['satuan']+'</td>'+
								'</tr>'
		        			)
	        			}
	        		} 
        				
	        	},
	        	error: function (data) {
	        		
	        	}
	        })
		})

		/*akhir retur obat departemen*/

		
		/*retur obat distributor*/
		$('#searchpenyediareturdist').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['p_item'] = $('#katakuncipenyediaretdis').val();

			$.ajax({
				type: 'POST',
				data: item,
				url: "<?php echo base_url()?>farmasi/homegudangobat/search_penyedia",
				success: function (data) {
					//console.log(data);
						$('#t_body_penyediareturdist').empty();
	 					if(data.length>0){
							for(var i = 0; i<data.length; i++){
								var nama = data[i]['nama_penyedia'],
									penyedia_id = data[i]['penyedia_id'];

								$("#t_body_penyediareturdist").append(
									'<tr>'+
										'<td class="nama_penyediareturdist">'+nama+'</td>'+
										'<td class="penyedia_idreturdist" style="display:none">'+penyedia_id+'</td>'+
										'<td style="text-align:center"><a href="" class="inputpenyediareturdist"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i></a></td>'+
									'</tr>'
								);
							}
						}else{
							$('#t_body_penyediareturdist').empty();
							$('#t_body_penyediareturdist').append(
								'<tr>'+
						 			'<td colspan="2"><center>Data Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
						}
				}
			})
		})

		$("#t_body_penyediareturdist").on('click', 'tr td a.inputpenyediareturdist', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.nama_penyediareturdist').text();
			var id = jQuery(this).closest('tr').find('td.penyedia_idreturdist').text();
			$('#penyediaRetDis').val(nama);
			$('.id_penyediaRetDis').val(id);

			$('#penyediareturdistributor').modal('hide');
		})

		$('#searchobatreturdistributor').submit(function (e) {
			e.preventDefault();
			var iddist = $('.id_penyediaRetDis').val();
			if(iddist == ''){
				alert('pilih distributor / penyedia terlebih dahulu');
				$('#modalRetDis').modal('hide');
				$('#penyediaRetDis').focus();
				return false;
			}
			
			var item = {};
			item['katakunci'] = $('#katakunciobatreturdistributor').val();
			item['penyedia_id'] = iddist;

			if(item['katakunci']!=""){
				$.ajax({
					type:"POST",
					data: item,
					url:"<?php echo base_url()?>farmasi/homegudangobat/get_obat_bypenyedia",
					success:function(data){
						console.log(data);
						$('#t_body_addreturdistributor').empty();

	 					if(data.length>0){
							for(var i = 0; i<data.length; i++){
								var nama = data[i]['nama'],
									obat_detail_id = data[i]['obat_detail_id']
									tgl_kadaluarsa = data[i]['tgl_kadaluarsa']
									total = data[i]['total_stok']
									merk_obat = data[i]['nama_merk']
									satuan = data[i]['satuan'];


								$("#t_body_addreturdistributor").append(
									'<tr>'+
										'<td style="display:none;">'+obat_detail_id+'</td>'+
										'<td>'+nama+'</td>'+
										'<td>'+satuan+'</td>'+
										'<td>'+merk_obat+'</td>'+
										'<td>'+total+'</td>'+
										'<td>'+format_date(tgl_kadaluarsa)+'</td>'+
										'<td style="text-align:center"><a href="#" class="addNewReturdistributor"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i></a></td>'+
									'</tr>'
								);
							}
						}else{
							$('#t_body_addreturdistributor').empty();
							$('#t_body_addreturdistributor').append(
								'<tr>'+
						 			'<td colspan="6"><center>Data Paket Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
						}
					},
					error:function(data){
						console.log(data);
					}
				});
			}else{
				$('#t_body_addreturdistributor').empty();
				$('#t_body_addreturdistributor').append(
					'<tr>'+
			 			'<td colspan="6"><center>Cari Data Obat</center></td>'+
			 		'</tr>'
				);
			}
		})

		var addDiv1 = $('#tbodyinputreturdistributor');
		$('#t_body_addreturdistributor').on('click', 'tr td a.addNewReturdistributor', function (e) {
			e.preventDefault();
			var cols = [];
	        $(this).closest('tr').find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });

			var str = '<tr>'+
							'<td style="display:none;">'+cols[0]+'</td>'+
							'<td>'+cols[1]+'</td>'+
							'<td><input type="number" style="width:100px;" class="form-control qtyreturdistributor"></td>'+
							'<td>'+cols[2]+'</td>'+
							'<td>'+cols[3]+'</td>'+
							'<td class="stoksisareturdist">'+cols[4]+'</td>'+
							'<td>'+cols[5]+'</td>'+
							'<td style="text-align:center;">'+
								'<a href="#" class="removeRow" ><i class="glyphicon glyphicon-remove"></i></a>'+
								'<input type="hidden" class="stokasli" value="'+cols[4]+'"'+
							'</td>'+
						'</tr>'
			$(str).appendTo(addDiv1);
			$(".returQty").editable(); 
		})

		var num;
		$('#tbodyinputreturdistributor').on('change', 'tr td .qtyreturdistributor', function (e) {
			var qty = $(this).val();
			var sisa = $(this).closest('tr').find('td.stoksisareturdist').text();
			num = $(this).closest('tr').find('td .stokasli').val();
			var jlh = Number(num) - Number(qty);
			$(this).closest('tr').find('td.stoksisareturdist').html(jlh);
			if (qty == '') {$(this).closest('tr').find('td.stoksisareturdist').html(num)};
		})

		$('#formsubmitreturdistributor').submit(function (e) {
			e.preventDefault();
			var a = confirm('akan diproses ?');
			if (a == false) {
				return false;
			} 
			var data = [];
	    	$('#tbodyinputreturdistributor').find('tr').each(function (rowIndex, r) {
		        var cols = [];
		        $(this).find('td').each(function (colIndex, c) {
		            cols.push(c.textContent);
		        });
		        $(this).find('td input[type=number]').each(function (colIndex, c) {
		            cols.push(c.value);
		        });
		        data.push(cols);
		    });
		    var item = {};
		    item['no_retur'] = $('#nmrReturDis').val();
		    item['penyedia_id'] = $('.id_penyediaRetDis').val();
		    item['keterangan'] = $('#ketReturDis').val();
		    item['data'] = data;
		    //.log(item);return false;
		    $.ajax({
		    	type: "POST",
		    	data: item,
		    	url: "<?php echo base_url()?>farmasi/homegudangobat/submitreturdistributor",
		    	success: function (data) {
		    		/*if(data['error'] == 'n')*/
		    		var t = $('#tabelriwayatreturdistributor').DataTable();
		    		t.clear().draw();
		    		for (var i = 0; i < data.length; i++) {
		    			var last = '<center><input type="hidden" class="idriwayatreturdist" value="'+data[i]['retur_distributor_id']+'">'+
									'<a href="#" class="detailriwayatdist" data-toggle="modal" data-target="#riwretdist"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>'+
									'<a href="#" class="cetak" id="cetak"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Print"></i></a></center>'
		    			t.row.add([
		    				'<center>'+(Number(i+1))+'</center>',
		    				data[i]['no_retur'],
		    				data[i]['nama_penyedia'],
		    				data[i]['nama_petugas'],
		    				format_date(data[i]['waktu']),
		    				data[i]['keterangan'],
		    				last,
		    				''
		    			]).draw();
		    		};
		    		
		    		$('#tbodyinputreturdistributor').empty();
		    		alert('berhasil diretur');
		    	},
		    	error: function (data) {
		    		
		    	}
		    })

		})

		$('#batalreturdis').click(function (e) {
			e.preventDefault();
			 $('#tbodyinputreturdistributor').empty();
		})

		$('#tbodyriwayatreturdistributor').on('click', 'tr td a.detailriwayatdist', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .idriwayatreturdist').val();
			var cols = [];
	        $(this).closest('tr').find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });
	        //console.log(cols);
	        //alert(id);return false;

	        $('#tanggalreturdistributor').text(cols[5]);
	        $('#penyediariwayatreturdist').text(cols[3]);
	        $('#nomorreturdistributor').text(cols[1]);
	        $('#petugasinputreturdistributor').text(cols[4]);
	        $('#ketreturdistributor').text(cols[6]);

			$.ajax({
				type: 'POST',
				url: "<?php echo base_url()?>farmasi/homegudangobat/getdetailreturdistributor/"+id,
				success: function (data) {
					console.log(data);
					if (data.length > 0) {
						$('#tbodydetailreturdistributor').empty();
						for(var i = 0 ; i < data.length ; i++){
							$('#tbodydetailreturdistributor').append(
								'<tr><td>'+(Number(i+1))+'</td>'+
								'<td>'+data[i]['nama']+'</td>'+
								'<td>'+data[i]['jumlah']+'</td>'+
								'<td>'+data[i]['satuan']+'</td>'+
								'<td>'+data[i]['nama_merk']+'</td>'+
								'<td>'+data[i]['sisa']+'</td>'+
								'<td>'+format_date(data[i]['tgl_kadaluarsa'])+'</td>'+
								'<tr>'
							)
						}
					} 
				},
				error:function (data) {
					
				}

			})
		})
		/*akhir retur obat distributor*/

		/*laporan*/
		$('#caridistributorlaporanobat').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['p_item'] = $('#katakuncidistlaporan').val();

			if ($('#katakuncidistlaporan').val() !='') {
				$.ajax({
					type: 'POST',
					url: "<?php echo base_url()?>farmasi/homegudangobat/search_penyedia",
					success: function (data) {
						//console.log(data);
							$('#tbodypenyediareturlaporan').empty();
		 					if(data.length>0){
		 						$('#tbodypenyediareturlaporan').append(
									'<tr>'+
							 			'<td class="namapenyediareturlaporan">Semua Distributor</td>'+
							 			'<td class="idpenyediareturlaporan" style="display:none">-1</td>'+
							 			'<td style="text-align:center"><a href="" class="inputpenyediareturlaporan"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i></a></td>'+
							 		'</tr>'
								);
								for(var i = 0; i<data.length; i++){
									var nama = data[i]['nama_penyedia'],
										penyedia_id = data[i]['penyedia_id'];

									$("#tbodypenyediareturlaporan").append(
										'<tr>'+
											'<td class="namapenyediareturlaporan">'+nama+'</td>'+
											'<td class="idpenyediareturlaporan" style="display:none">'+penyedia_id+'</td>'+
											'<td style="text-align:center"><a href="" class="inputpenyediareturlaporan"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i></a></td>'+
										'</tr>'
									);
								}
							}else{
								$('#tbodypenyediareturlaporan').empty();
								$('#tbodypenyediareturlaporan').append(
									'<tr>'+
							 			'<td class="namapenyediareturlaporan">Semua Distributor</td>'+
							 			'<td class="idpenyediareturlaporan" style="display:none">-1</td>'+
							 			'<td style="text-align:center"><a href="" class="inputpenyediareturlaporan"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i></a></td>'+
							 		'</tr>'
								);
							}
					}
				})
			} 
		})

		$('#tbodypenyediareturlaporan').on('click', 'tr td a.inputpenyediareturlaporan', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td.idpenyediareturlaporan').text();
			var nama = $(this).closest('tr').find('td.namapenyediareturlaporan').text();
			$('#namadistributorlaporan').val(nama);
			$('.iddistributorlaporan').val(id);
			$('#distributorlaporan').modal('hide');
		})

		$('#namadistributorlaporan').on('change', function (e) {
			var isi = $('#namadistributorlaporan').val();
			if(isi == ''){
				$('.iddistributorlaporan').val('');
			}
		})
		/*akhir laporan*/


	});


	function hitung_penerimaan () {
		var data = [];
	    $('#t_body_inputterima').find('tr').each(function (rowIndex, r) {
	        var cols = [];
	        $(this).find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });
	        $(this).find('td input[type=text]').each(function (colIndex, c) {
	            cols.push(c.value);
	        });
	        $(this).find('td input[type=number]').each(function (colIndex, c) {
	            cols.push(c.value);
	        });
	        data.push(cols);
	    });

	    var jumlah = 0;
		for (var i = data.length - 1; i >= 0; i--) {
			jumlah += Number(data[i][7]);
		};

		var jenispotongan = $('#selectpotongan').find('option:selected').val();
		var potongan =  Number($('#potongan').val());
		var ppn =  Number($('#ppn').val());
		var grandtotal = 0;
		if (jenispotongan === 'persen') {
			grandtotal = (jumlah - ((jumlah * (potongan / 100))))
		} else{
			grandtotal = (jumlah - potongan)
		};
		var hasilppn = (grandtotal * ppn / 100);
		grandtotal += Math.ceil(hasilppn);

		$('#hasilppn').text(Math.ceil(hasilppn));
		$('#grandtotal').text(Math.ceil(grandtotal));
		$('#subtotalterima').text(jumlah);

	    return data;
	}

	function getPenyediaPenerimaan(id, nama){
		$("#searchpenyediapenerimaan").modal('hide');
		$("#id_penyediaObatTerima").val(id);
		$("#penyediaObatTerima").val(nama);
		$('#modalnamapenyedia').text(nama)
		$("#penyediapenerimaan").val("");
		$('#tbody_penyediapenerimaan').empty();
		$('#tbody_penyediapenerimaan').append(
			'<tr>'+
	 			'<td colspan="2"><center>Cari Data Penyedia</center></td>'+
	 		'</tr>'
		);
	}

	function getPetugasPenerimaan(id, nama){
		$("#ptgaspenerimaan").modal('hide');
		$("#id_petugasInputTerima").val(id);
		$("#ptgasInputObat").val(nama);
		$("#katakuncipetugaspenerimaan").val("");
		$('#tbody_petugaspenerimaan').empty();
		$('#tbody_petugaspenerimaan').append(
			'<tr>'+
	 			'<td colspan="2"><center>Cari Data Petugas</center></td>'+
	 		'</tr>'
		);
	}

	function reset_penerimaan () {
		$('#t_body_inputterima').empty();
		$(':input','#formpenerimaanobat')
		  .not(':button, :submit, :reset, :hidden')
		  .val('');
		$('#tglTerimaObat').val('<?php echo date("d/m/Y") ?>');
		$('#tglFakturObat').val('<?php echo date("d/m/Y") ?>');
		$("#sumdanapenerimaan option[value='Mandiri']").attr("selected", "selected");
		$("#selectpotongan option[value='persen']").attr("selected", "selected");
		$('#grandtotal').text('0');
		$('#hasilppn').text('0');
		$('#subtotalterima').text('0');
	}

	function get_items () {
		var item = {};
		item[1] = {};
		item[1]['nama'] = $('#invNamaObat').val();
		item[1]['jenis'] = $('#invJenisObat').val();
		item[1]['merk'] = $('#invMerekObat').val();
		item[1]['sumber'] = $('#invSumberObat').val();
		item[1]['penyedia'] = $('#invPenyediaObat').val();
		item[1]['satuan'] = $('#filterSat').find('option:selected').val(); 
		item[1]['is_generik'] = $('#filterGen').find('option:selected').val(); 
		return item;
	}

	function submit_filter (filter) {
		$.ajax({
			type: "POST",
			data: filter,
			url: "<?php echo base_url()?>farmasi/homegudangobat/filter_obat_inventori",
			success: function (data) {
				console.log(data);
				$('#t_body_inventory').empty();

				var t = $('#tabelinventoriutama').DataTable();

				t.clear().draw();
				for (var i = 0; i < data.length; i++) {
					
					var tgl = format_date(data[i]['tgl_kadaluarsa']);
					var tambah = '<center><a href="#" class="inoutobat" data-toggle="modal" data-target="#inout"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
							'<a href="#edInvenGdg" data-toggle="modal" class="printobat"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a></center>'+
							'<input type="hidden" class="merk_id_inventori" value="'+data[i]['merk_id']+'">'+
							'<input type="hidden" class="jenis_id_inventori" value="'+data[i]['jenis_obat_id']+'">'+
							'<input type="hidden" class="satuan_id_inventori" value="'+data[i]['satuan_id']+'">'+
							'<input type="hidden" class="obat_dept_id_inventori" value="'+data[i]['obat_dept_id']+'">'
					t.row.add([
						(i+1),
						data[i]['nama'],
						data[i]['no_batch'],
						data[i]['harga_dasar'],
						data[i]['hps'],
						data[i]['margin'],
						data[i]['harga_jual'],
						data[i]['nama_merk'],
						data[i]['total_stok'],
						data[i]['satuan'],							
						data[i]['tahun_pengadaan'],							
						tgl,
						tambah
					]).draw();
				}

				t.on( 'order.dt search.dt', function () {
			        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
			            cell.innerHTML = i+1;
			        } );
			    } ).draw();
			

			},
			error: function (data) {
				console.log(data);
			}
		})
	}

</script>
