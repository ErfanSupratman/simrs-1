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

		$("#katakunci").keyup(function(event){
			var p_item = $('#katakunci').val();

			event.preventDefault();

			if(p_item!=""){
				$.ajax({
					type:"POST",
					url:"<?php echo base_url()?>farmasi/homegudangobat/search_merk/"+p_item,
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
			var katakunci = $('#katakunciobat').val();

			$.ajax({
				type: 'POST',
				url: "<?php echo base_url()?>farmasi/homegudangobat/search_obat/" + katakunci,
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
			var katakunci = $('#katakuncipenyedia').val();

			$.ajax({
				type: 'POST',
				url: "<?php echo base_url()?>farmasi/homegudangobat/search_penyedia/" + katakunci,
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
					if (data.length > 0) {
						for (var i = data.length - 1; i >= 0; i--) {
							var a = format_date(data[i]['tgl_kadaluarsa']);
							$('#t_body_detail_obat').append(
								'<tr>'+
									'<td class="new_tgl_kadaluarsa">'+a+'</td>'+
									'<td class="new_nobatch">'+data[i]['no_batch']+'</td>'+
									'<td class="new_thn">'+data[i]['tahun_pengadaan']+'</td>'+									
									'<td class="new_sumber">'+data[i]['sumber_dana']+'</td>'+
									'<td class="new_detail_id" style="display:none">'+data[i]['obat_detail_id']+'</td>'+
									'<td class="new_dept_id" style="display:none">'+data[i]['obat_dept_id']+'</td>'+
									'<td class="new_stok">'+data[i]['total_stok']+'</td>'+					
									'<td><a href="#" class="edObatDetail" id="edDetObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
									'</td>'+							
								'</tr>'
							)
						};
					}else{
						$('#t_body_detail_obat').append(
							'<tr>'+
								'<td style="text-align:center" colspan="7">Belum ada detail</td>'+
							'<tr>'
						)
					}
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
			$("#noBatchDetObat").prop('disabled', true);
			$("#jmlDetObat").prop('disabled', true);
			$("#pedObatDet").prop('disabled', true);
			$("#selectSumDanaObat").prop('disabled', true);
			var detail_id = $(this).closest('tr').find('td.new_detail_id').text();
			var obat_dept_id = $(this).closest('tr').find('td.new_dept_id').text();
			var jumlah = $(this).closest('tr').find('td.new_stok').text();
			var nobatch = $(this).closest('tr').find('td.new_nobatch').text();
			var sumber = $(this).closest('tr').find('td.new_sumber').text();
			var thn = $(this).closest('tr').find('td.new_thn').text();
			var tgl = $(this).closest('tr').find('td.new_tgl_kadaluarsa').text();
			// var res = tgl.split("-");
		 //    var bln = res[1];
			// var tgl = res[2];
		 //    var thn = res[0];

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
					} 
				},
				error:  function (data) {
					alert('paitttt, gagal');
				}
			})
		})

		//edit obat
		$('#btnSimpanEdit').hide();
		$("#tabelobat").on('click', 'tr td a.edObat', function (e) {
			e.preventDefault();
			$('#nmObat').focus();
			var hidden_id = $(this).closest('tr').find('td.hidden_id').attr('data-edit');
			var nama_obat = $(this).closest('tr').find('td.nama_obat').attr('data-edit');
			var obat_id = $(this).closest('tr').find('td.obat_id').attr('data-edit');
			var jenis_obat = $(this).closest('tr').find('td.jenis_obat').attr('data-edit');
			var nama_merk = $(this).closest('tr').find('td.nama_merk').attr('data-edit');
			var is_generik = $(this).closest('tr').find('td.is_generik').attr('data-edit');
			var harga_dasar = $(this).closest('tr').find('td.harga_dasar').attr('data-edit');
			var new_hps = $(this).closest('tr').find('td.new_hps').attr('data-edit');
			var new_margin = $(this).closest('tr').find('td.new_margin').attr('data-edit');
			var new_h_jual = $(this).closest('tr').find('td.new_h_jual').attr('data-edit');
			var new_stok_min = $(this).closest('tr').find('td.new_stok_min').attr('data-edit');
			var new_jlh = $(this).closest('tr').find('td.new_jlh').attr('data-edit');
			var new_satuan = $(this).closest('tr').find('td.new_satuan').attr('data-edit');
			var new_merk_id = $(this).closest('tr').find('td.new_merk_id').attr('data-edit');
			var new_satuan_id = $(this).closest('tr').find('td.new_satuan_id').attr('data-edit');
			var new_jenis_id = $(this).closest('tr').find('td.new_jenis_id').attr('data-edit');
			var penyedia_id = $(this).closest('tr').find('td.penyedia_id').attr('data-edit');
			var penyedia = $(this).closest('tr').find('td.nama_penyedia').attr('data-edit');
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
					$('#t_body_obat').empty();
					if (data.length > 0) {
						var st;
						for (var i = 0; i < data.length; i++) {
							var st;
							if (Number(data[i]['stok_minimal']) >= Number(data[i]['jlh'])) {
								st =  'style="background-color:red;"';
								//alert(st);
							}else{
								st = "";
							}
							$('#t_body_obat').append(
								'<tr>'+
									'<td style="display:none" class="hidden_id" data-edit="'+data[i]['is_hidden']+'">'+data[i]['is_hidden']+'</td>'+
									'<td style="display:none" class="obat_id"  data-edit="'+data[i]['obat_id']+'">'+data[i]['obat_id']+'</td>'+
									'<td>'+(i+1)+'</td>'+
									'<td class="nama_obat" data-edit="'+data[i]['nama']+'">'+data[i]['nama']+'</td>'+								
									'<td class="jenis_obat" data-edit="'+data[i]['jenis_obat']+'">'+data[i]['jenis_obat']+'</td>'+
									'<td class="nama_merk" data-edit="'+data[i]['nama_merk']+'">'+data[i]['nama_merk']+'</td>'+
									'<td class="nama_penyedia" data-edit="'+data[i]['nama_penyedia']+'">'+data[i]['nama_penyedia']+'</td>'+
									'<td style="display:none" class="penyedia_id" data-edit="'+data[i]['penyedia_id']+'">'+data[i]['penyedia_id']+'</td>'+
									'<td class="is_generik" data-edit="'+data[i]['is_generik']+'">'+data[i]['is_generik']+'</td>'+
									'<td class="harga_dasar" data-edit="'+data[i]['harga_dasar']+'">'+data[i]['harga_dasar']+'</td>'+									
									'<td class="new_hps" data-edit="'+data[i]['hps']+'">'+data[i]['hps']+'</td>'+
									'<td class="new_margin" data-edit="'+data[i]['margin']+'">'+data[i]['margin']+'</td>'+
									'<td class="new_h_jual" data-edit="'+data[i]['harga_jual']+'">'+data[i]['harga_jual']+'</td>'+
									'<td class="new_stok_min" data-edit="'+data[i]['stok_minimal']+'">'+data[i]['stok_minimal']+'</td>'+									
									'<td '+
										st	 
									+'class="new_jlh" data-edit="'+data[i]['jlh']+'">'+data[i]['jlh']+'</td>'+									
									'<td class="new_satuan" data-edit="'+data[i]['satuan']+'">'+data[i]['satuan']+'</td>'+								
									'<td><a href="#" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
									'<a href="<?php echo base_url()?>farmasi/homegudangobat/print_kartustok/'+data[i]['obat_id']+'" class="printObat"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak"></i></a></td>'+
									'<td style="display:none" class="new_merk_id" data-edit="'+data[i]['merk_id']+'">'+data[i]['merk_id']+'</td>'+
									'<td style="display:none" class="new_jenis_id" data-edit="'+data[i]['jenis_obat_id']+'">'+data[i]['jenis_obat_id']+'</td>'+
									'<td style="display:none" class="new_satuan_id" data-edit="'+data[i]['satuan_id']+'">'+data[i]['satuan_id']+'</td>'+	
								'</tr>'
							);
						};
					}else{
						$('#t_body_obat').append(
							'<tr>'+
								'<td colspan="14" style="text-align:center">tidak ada data ditemukan</td>'+
							'</tr>'
							);
					}
				},
				error: function (data) {
					alert('gagal');
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
			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homegudangobat/filter_obat",
				success: function (data) {
					// console.log(data);return false;
					$('#t_body_obat').empty();
					if (data.length > 0) {
						for (var i = 0; i < data.length; i++) {
							var st;
							if (Number(data[i]['stok_minimal']) >= Number(data[i]['jlh'])) {
								st =  'style="background-color:red;"';
								//alert(st);
							}else{
								st = "";
							}
							$('#t_body_obat').append(
								'<tr>'+
									'<td style="display:none" class="hidden_id" data-edit="'+data[i]['is_hidden']+'">'+data[i]['is_hidden']+'</td>'+
									'<td style="display:none" class="obat_id"  data-edit="'+data[i]['obat_id']+'">'+data[i]['obat_id']+'</td>'+
									'<td>'+(i+1)+'</td>'+
									'<td class="nama_obat" data-edit="'+data[i]['nama']+'">'+data[i]['nama']+'</td>'+								
									'<td class="jenis_obat" data-edit="'+data[i]['jenis_obat']+'">'+data[i]['jenis_obat']+'</td>'+
									'<td class="nama_merk" data-edit="'+data[i]['nama_merk']+'">'+data[i]['nama_merk']+'</td>'+
									'<td class="nama_penyedia" data-edit="'+data[i]['nama_penyedia']+'">'+data[i]['nama_penyedia']+'</td>'+
									'<td style="display:none" class="penyedia_id" data-edit="'+data[i]['penyedia_id']+'">'+data[i]['penyedia_id']+'</td>'+
									'<td class="is_generik" data-edit="'+data[i]['is_generik']+'">'+data[i]['is_generik']+'</td>'+
									'<td class="harga_dasar" data-edit="'+data[i]['harga_dasar']+'">'+data[i]['harga_dasar']+'</td>'+									
									'<td class="new_hps" data-edit="'+data[i]['hps']+'">'+data[i]['hps']+'</td>'+
									'<td class="new_margin" data-edit="'+data[i]['margin']+'">'+data[i]['margin']+'</td>'+
									'<td class="new_h_jual" data-edit="'+data[i]['harga_jual']+'">'+data[i]['harga_jual']+'</td>'+
									'<td class="new_stok_min" data-edit="'+data[i]['stok_minimal']+'">'+data[i]['stok_minimal']+'</td>'+									
									'<td '+
										st	 
									+'class="new_jlh" data-edit="'+data[i]['jlh']+'">'+data[i]['jlh']+'</td>'+									
									'<td class="new_satuan" data-edit="'+data[i]['satuan']+'">'+data[i]['satuan']+'</td>'+								
									'<td><a href="#" class="edObat" id="edMasObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
									'<a href="<?php echo base_url()?>farmasi/homegudangobat/print_kartustok/'+data[i]['obat_id']+'" class="printObat"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak Kartu Stok"></i></a></td>'+
									'<td style="display:none" class="new_merk_id" data-edit="'+data[i]['merk_id']+'">'+data[i]['merk_id']+'</td>'+
									'<td style="display:none" class="new_jenis_id" data-edit="'+data[i]['jenis_obat_id']+'">'+data[i]['jenis_obat_id']+'</td>'+
									'<td style="display:none" class="new_satuan_id" data-edit="'+data[i]['satuan_id']+'">'+data[i]['satuan_id']+'</td>'+	
								'</tr>'
							);
						};
					}else{
						$('#t_body_obat').append(
							'<tr>'+
								'<td colspan="14" style="text-align:center">tidak ada data ditemukan</td>'+
							'</tr>'
							);
					}
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

		$("#tblInven").on('click', 'tr td a.inoutobat', function (e) {
			var obat_dept_id = $(this).closest('tr').find('td.obat_dept_id_inventori').attr('data-edit');
			var jlh = $(this).closest('tr').find('td.total_stok_inventori').attr('data-edit');

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
				

		$('#form_in_out').submit(function (e) {
			e.preventDefault();

			var item = {};
			item['obat_dept_id'] = $('#inout_obat_dept_id').val();
			item['jumlah'] = $('#jmlInOut').val();
			item['sisa'] = $('#sisaInOut').val();
			item['is_out'] = $('#io').find('option:selected').val();
			var str = $('#tglInOut').val();
			if (str == '') {
				str = "<?php echo date('d/m/Y') ?>";
			}
			var res = str.split("/");
		    var bln = res[1];
			var tgl = res[0];
		    var thn = res[2];

		    var tanggal = thn + '-' + bln + '-' + tgl;
		    item['tanggal'] = tanggal;
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
		$("a.editInvenBut").hide();
		$('.editInven').click(function (e) {
			e.preventDefault();
		})

		$("#tblInven1").on('click','tr td a.edIven',function(e){
			e.preventDefault();
			var inven = $(this).closest('td').prevAll('td:has(a.editInven)').children('td a.editInven');
			inven.addClass("editableform editable-click");
			inven.editable();
			inven.css("color","blue");
			inven.css("cursor","pointer");
			$(this).closest('tr').find('td a.edIven').hide();
			$(this).closest('tr').find('td a.editInvenBut').show();
			//document.getElementById("status").innerHTML = "Batal";

		});
						
		$("#tblInven1").on('click','tr td a.editInvenBut', function(e){
			e.preventDefault();
			$(".editInven").removeClass("editableform editable-click");
			$(".editInven").removeClass("editable");
			$(".editInven").css("color","black");
			$(".editInven").css("cursor","default");
			$(this).closest('tr').find('td a.edIven').show();
			$(this).closest('tr').find('td a.editInvenBut').hide();
			//document.getElementById("status").innerHTML = "Edit";

			var stok = $(this).closest('tr').find('td a.editInven').text();
			var d = confirm('proses disimpan ?');
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
				item['obat_dept_id'] = $(this).closest('tr').find('td.obat_dept_id').text();
				item['obat_opname_id'] = $(this).closest('tr').find('td.obat_opname_id').text();
				item['harga_jual'] = $(this).closest('tr').find('td.h_jual').text();

				$.ajax({
					type: "POST",
					data: item,
					url: "<?php echo base_url()?>farmasi/homegudangobat/opname_process",
					success: function (data) {
						console.log(data);
						alert(data['message']);
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
			var p_item = $('#katakuncipetugaspenerimaan').val();
			
			event.preventDefault();

			if(p_item!=""){
				$.ajax({
					type:"POST",
					url:"<?php echo base_url()?>farmasi/homegudangobat/get_petugas/"+p_item,
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

		$('#penyediapenerimaan').keyup(function(event){
			var p_item = $('#penyediapenerimaan').val();
			
			event.preventDefault();

			if(p_item!=""){
				$.ajax({
					type:"POST",
					url:"<?php echo base_url()?>farmasi/homegudangobat/search_penyedia/"+p_item,
					success:function(data){
						$('#tbody_petugaspenerimaan').empty();

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
			 			'<td colspan="2"><center>Cari Data Petugas</center></td>'+
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
					url:"<?php echo base_url()?>farmasi/homegudangobat/get_obat_bypenyedia",
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
							'<td class="editasu"><a href="#" class="adaanQtyTer editableform editable-click editbatch" data-type="text" data-pk="1" data-original-title="Edit Quantity">1</a></td>'+
							'<td><a href="#" class="adaanQtyTer editableform editable-click edittglkadaluarsa" data-type="text" data-pk="1" data-original-title="Edit Quantity">1</a></td>'+
							'<td><a href="#" class="adaanQtyTer editableform editable-click editjumlah" data-type="text" data-pk="1" data-original-title="Edit Quantity">1</a></td>'+
							'<td><a href="#" class="adaanQtyTer editableform editable-click editdiskon" data-type="text" data-pk="1" data-original-title="Edit Quantity" id="adaanQtyid'+i+'">0</a></td>'+
							'<td class="hargadasar">'+harga_dasar+'</td>'+
							'<td class="totalrow">'+harga_dasar+'</td>'+
							'<td style="text-align:center;width:5%;"><a href="#" class="removeRow" ><i class="glyphicon glyphicon-remove"></i></a></td>'+
							'<td style="display:none">'+obat_id+'</td></tr>'

			$(newtabel).appendTo(addDivTerima);
			$(".adaanQtyTer").editable(); 
			var data = hitung_penerimaan();
			var jumlah = 0;
			for (var i = data.length - 1; i >= 0; i--) {
				jumlah += Number(data[i][7]);
			};

			/*var before = '';
			$('#t_body_inputterima').on('focus', 'tr td.hargadasar', function () {
				before = $(this).text();				
			}).on('blur paste','tr td.hargadasar', function() { 
			  	if (before != $(this).html()) { $(this).trigger('change'); }
			  	//alert('fa');
			  	return false;
			});*/

			var jenispotongan = $('#selectpotongan').find('option:selected').val();
			var potongan =  Number($('#potongan').val());
			var ppn =  Number($('#ppn').val());
			var grandtotal = 0;
			if (jenispotongan === 'persen') {
				grandtotal = (jumlah - ((jumlah * (potongan / 100))))
			} else{
				grandtotal = (jumlah - potongan)
			};

			grandtotal += (grandtotal * ppn / 100);

			$('#grandtotal').text(grandtotal);
			$('#subtotalterima').text(jumlah);
			return false;
		});
		
		//kalo hapus row
		$('#t_body_inputterima').on('click', 'tr td a.removeRow', function (e) {
			e.preventDefault();
			$(this).closest('tr').remove();

			var data = hitung_penerimaan();
			var jumlah = 0;
			for (var i = data.length - 1; i >= 0; i--) {
				jumlah += Number(data[i][7]);
			};
			//alert(jumlah);return false;

			var jenispotongan = $('#selectpotongan').find('option:selected').val();
			var potongan =  Number($('#potongan').val());
			var ppn =  Number($('#ppn').val());
			var grandtotal = 0;
			if (jenispotongan === 'persen') {
				grandtotal = (jumlah - ((jumlah * (potongan / 100))))
			} else{
				grandtotal = (jumlah - potongan)
			};

			grandtotal += (grandtotal * ppn / 100);

			$('#grandtotal').text(grandtotal);
			$('#subtotalterima').text(jumlah);
		})

		//hitung grand total
		$('#selectpotongan').on('change', function (e) {
			e.preventDefault();
			hitung_grandtotal();			
		})

		$('#potongan').on('change', function (e) {
			e.preventDefault();
			hitung_grandtotal();			
		})

		$('#ppn').on('change', function (e) {
			e.preventDefault();
			hitung_grandtotal();			
		})
		
		$('#formpenerimaanobat').submit(function (e) {
			e.preventDefault();

			var item = {};
			item['nomor_penerimaan'] = $('#nmrTerima').val();
			item['penyedia_id'] = $('#id_penyediaObatTerima').val();
			item['sumber_dana'] = $('#sumdanapenerimaan').val();
			//item['petugas_input'] = $('#id_petugasInputTerima').val();
			item['keterangan'] = $('#ketObatTerima').val();
			item['tanggal'] = format_date3($('#tglTerimaObat').val());
			item['tanggal_faktur'] = format_date3($('#tglFakturObat').val());
			

			//loop dari tabel
			var data = hitung_penerimaan();

			var send = {};
		    for (var i = data.length - 1; i >= 0; i--) {
		    	var myData = {};
		    	myData['obat_id'] = data[i][8];
		    	myData['no_batch'] = data[i][2];
		    	myData['tgl_kadaluarsa'] = item['tanggal']; //ubah lagi ntar
		    	myData['jumlah'] = data[i][4];
		    	myData['diskon'] = data[i][5];
		    	myData['harga_beli'] = data[i][6];
		    	myData['total'] = data[i][7];

		    	send[i] = myData;
		    };

		    item['data'] = send;
		    item['jenispotongan'] = $('#selectpotongan').find('option:selected').val();
			item['potongan'] =  Number($('#potongan').val());
			item['ppn'] =  Number($('#ppn').val());
			item['grandtotal'] = $('#grandtotal').val();
			item['subtotal'] = $('#subtotalterima').val();

		    $.ajax({
		    	type: 'POST',
		    	data: item,
		    	url: "<?php echo base_url()?>farmasi/homegudangobat/add_penerimaan",
		    	success: function (data) {
		    		//console.log(data['message']); return false;
		    		alert(data['message']);
		    		if (data['error'] === 'n') {
		    			reset_penerimaan();
		    		} 
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
		$('#t_body_permintaan').on('click','tr td a.lihatdetailminta', function (e) {
			e.preventDefault();

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
			//e.preventDefault();
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

			    $.ajax({
			    	type: "POST",
			    	data: item,
			    	url: "<?php echo base_url()?>farmasi/homegudangobat/submit_persetujuan_permintaan",
			    	success:  function (data) {
			    		alert('sukses');
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
	        		//console.log(data);
	        		$('#t_body_detailriwayatpermintaan').empty();
	        		if (data.length > 0) {
	        			//$('#obat_permintaan_id_confirm').val(id);
	        			for (var i = data.length - 1; i >= 0; i--) {
	        				$('#t_body_detailriwayatpermintaan').append(
	        					'<tr>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td style="text-align:left">'+data[i]['satuan']+'</td>'+
									'<td style="text-align:left">'+data[i]['nama_merk']+'</td>'+
									'<td style="text-align:right">-</td>'+
									'<td style="text-align:right">'+data[i]['total']+'</td>'+
									'<td style="text-align:right">'+data[i]['jumlah_request']+'</td>'+
									'<td style="text-align:right">'+data[i]['jumlah_approved']+'</td>'+
									'<td style="text-align:right">'+data[i]['harga_jual']+'</td>'+
									'<td style="display:none">'+data[i]['obat_detail_id']+'</td>'+
								'</tr>'
	        				)
	        			};
	        		} else{
	        			$('#t_body_detailriwayatpermintaan').append(
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
		$('#tbody_obat_dept').on('click','tr td a.cekdetailreturdept', function (e) {
			e.preventDefault();
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
			var katakunci = $('#katakuncipenyediaretdis').val();

			$.ajax({
				type: 'POST',
				url: "<?php echo base_url()?>farmasi/homegudangobat/search_penyedia/" + katakunci,
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
							'<td><a href="#" class="returQty editableform editable-click" data-type="text" data-pk="1" data-original-title="Edit Quantity">1</a></td>'+
							'<td>'+cols[2]+'</td>'+
							'<td>'+cols[3]+'</td>'+
							'<td>'+cols[4]+'</td>'+
							'<td>'+cols[5]+'</td>'+
							'<td style="text-align:center;"><a href="#" class="removeRow" ><i class="glyphicon glyphicon-remove"></i></a></td>'+
						'</tr>'
			$(str).appendTo(addDiv1);
			$(".returQty").editable(); 
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
		        data.push(cols);
		    });
		    var item = {};
		    item['no_retur'] = $('#nmrReturDis').val();
		    item['penyedia_id'] = $('.id_penyediaRetDis').val();
		    item['keterangan'] = $('#ketReturDis').val();
		    item['data'] = data;

		    $.ajax({
		    	type: "POST",
		    	data: item,
		    	url: "<?php echo base_url()?>farmasi/homegudangobat/submitreturdistributor",
		    	success: function (data) {
		    		if(data['error'] == 'n')
		    			$('#tbodyinputreturdistributor').empty();
		    		alert(data['message']);
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
								'<td>'+data[i]['total_stok']+'</td>'+
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
			var elny = $('#katakuncidistlaporan').val();

			if (elny !='') {
				$.ajax({
					type: 'POST',
					url: "<?php echo base_url()?>farmasi/homegudangobat/search_penyedia/" + elny,
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

	function hitung_grandtotal () {
		var data = hitung_penerimaan();
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

		grandtotal += (grandtotal * ppn / 100);

		$('#grandtotal').text(grandtotal);
	}

	function hitung_penerimaan () {
		var data = [];
	    $('#t_body_inputterima').find('tr').each(function (rowIndex, r) {
	        var cols = [];
	        $(this).find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });
	        data.push(cols);
	    });
	    return data;
	}

	function getPenyediaPenerimaan(id, nama){
		$("#searchpenyediapenerimaan").modal('hide');
		$("#id_penyediaObatTerima").val(id);
		$("#penyediaObatTerima").val(nama);
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

	function format_date (date) {
		var sp = date.split('-');
		var tgl = sp[2];
		var thn = sp[0];
		var temp = sp[1];
		var bln = "";
		switch(temp){
			case '01' : bln = "Januari" ;break;
			case '02' : bln = "Februari" ;break;
			case '03' : bln = "Maret" ;break;
			case '04' : bln = "April" ;break;
			case '05' : bln = "Mei" ;break;
			case '06' : bln = "Juni" ;break;
			case '07' : bln = "Juli" ;break;
			case '08' : bln = "Agustus" ;break;
			case '09' : bln = "September" ;break;
			case '10' : bln = "Oktober" ;break;
			case '11' : bln = "November" ;break;
			case '12' : bln = "Desember" ;break;
		}

		var waktu = tgl + " " + bln + " "+ thn;
		return waktu;
	}

	function format_date2 (date) {
		var sp = date.split(' ');
		var tgl = sp[0];
		var thn = sp[2];
		var temp = sp[1];
		var bln = "";
		switch(temp){
			case 'Januari' : bln = "01" ;break;
			case 'Februari' : bln = "02" ;break;
			case 'Maret' : bln = "03" ;break;
			case 'April' : bln = "04" ;break;
			case 'Mei' : bln = "05" ;break;
			case 'Juni' : bln = "06" ;break;
			case 'Juli' : bln = "07" ;break;
			case 'Agustus' : bln = "08" ;break;
			case 'September' : bln = "09" ;break;
			case 'Oktober' : bln = "10" ;break;
			case 'November' : bln = "11" ;break;
			case 'Desember' : bln = "12" ;break;
		}

		var waktu = tgl + "/" + bln + "/"+ thn;
		return waktu;
	}

	function format_date3(date){
		var res = date.split("/");
	    var bln = res[1];
		var tgl = res[0];
	    var thn = res[2];

	    var tanggal = thn + '-' + bln + '-' + tgl;
	    return tanggal;
	}

	function submit_filter (filter) {
		$.ajax({
			type: "POST",
			data: filter,
			url: "<?php echo base_url()?>farmasi/homegudangobat/filter_obat_inventori",
			success: function (data) {
				console.log(data);
				$('#t_body_inventory').empty();
					if (data.length > 0) {
						for (var i = data.length - 1; i >= 0; i--) {
							$('#t_body_inventory').append(
								'<tr>'+
									'<td style="display:none" class="obat_dept_id_inventori" data-edit="'+data[i]['obat_dept_id']+'">'+data[i]['obat_dept_id']+'</td>'+
									'<td class="nama_inventori" data-edit="'+data[i]['nama']+'">'+data[i]['nama']+'</td>'+
									'<td class="no_batch_inventori"  data-edit="'+data[i]['no_batch']+'">'+data[i]['no_batch']+'</td>'+
									'<td class="harga_dasar_inventori" data-edit="'+data[i]['harga_dasar']+'">'+data[i]['harga_dasar']+'</td>'+
									'<td class="hps_inventori" data-edit="'+data[i]['hps']+'">'+data[i]['hps']+'</td>'+
									'<td class="margin_inventori" data-edit="'+data[i]['margin']+'">'+data[i]['margin']+'</td>'+
									'<td class="h_jual_inventori" data-edit="'+data[i]['harga_jual']+'">'+data[i]['harga_jual']+'</td>'+
									'<td class="nama_merk_inventori" data-edit="'+data[i]['nama_merk']+'">'+data[i]['nama_merk']+'</td>'+
									'<td class="total_stok_inventori"  data-edit="'+data[i]['total_stok']+'">'+data[i]['total_stok']+'</td>'+
									'<td class="satuan_inventori" data-edit="'+data[i]['satuan']+'">'+data[i]['satuan']+'</td>'+								
									'<td class="tahun_pengadaan_inventori" data-edit="'+data[i]['tahun_pengadaan']+'">'+data[i]['tahun_pengadaan']+'</td>'+								
									'<td class="tgl_kadaluarsa_inventori" data-edit="'+data[i]['tgl_kadaluarsa']+'">'+data[i]['tgl_kadaluarsa']+'</td>'+
									'<td><a href="#" class="inoutobat" data-toggle="modal" data-target="#inout"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
									'<a href="#edInvenGdg" data-toggle="modal" class="printobat"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a></td>'+
									'<td style="display:none" class="merk_id_inventori" data-edit="'+data[i]['merk_id']+'">'+data[i]['merk_id']+'</td>'+
									'<td style="display:none" class="jenis_id_inventori" data-edit="'+data[i]['jenis_obat_id']+'">'+data[i]['jenis_obat_id']+'</td>'+
									'<td style="display:none" class="satuan_id_inventori" data-edit="'+data[i]['satuan_id']+'">'+data[i]['satuan_id']+'</td>'+	
								'</tr>'
							);
						}
					}else{
						$('#t_body_inventory').append(
								'<tr><td colspan="12" style="text-align:center">data tidak ditemukan</td></tr>'
							);
					}

			},
			error: function (data) {
				console.log(data);
			}
		})
	}

</script>