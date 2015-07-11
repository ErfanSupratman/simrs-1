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

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homegudangobat/add_obat",
				success: function (data) {
					alert(data['message']);
					$('#nmObat').val('');
					$('#hgDasarObat').val('');
					$('#selected_merk_id').val('');
					$('#selected_nama_merk').val('');
					$('#hps').val('');
					$('#marginobat').val('');
					$('#hargaJual').val('');
					$('#stokMin').val('');
					$('#pedObatDet').val('');
					$('#nmObat').focus();
				},
				error: function (data) {
					$('#nmObat').focus();
				}
			})
		})

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
							$('#t_body_detail_obat').append(
								'<tr>'+
									'<td class="new_tgl_kadaluarsa">'+data[i]['tgl_kadaluarsa']+'</td>'+
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
			var res = tgl.split("-");
		    var bln = res[1];
			var tgl = res[2];
		    var thn = res[0];

		    var tanggal = tgl + '/' + bln + '/' + thn;

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
			$("#noBatchDetObat").prop('disabled', false);
			$("#jmlDetObat").prop('disabled', false);
			$("#pedObatDet").prop('disabled', false);
			$("#selectSumDanaObat").prop('disabled', false);
			$(':input','#formdetailobat')
			  .not(':button, :submit, :reset, :hidden')
			  .val('');
				var year  = '<?php echo date('Y') ?>';
				$("#selectSumDanaObat option[value='Mandiri']").attr("selected", "selected");
				$("#selectTahObat option[value='"+year+"']").attr("selected", "selected");						  						  			
		})
		$('#resetDetObat').click(function (e) {
			e.preventDefault();
			$("#noBatchDetObat").prop('disabled', false);
			$("#jmlDetObat").prop('disabled', false);
			$("#pedObatDet").prop('disabled', false);
			$("#selectSumDanaObat").prop('disabled', false);
			$(':input','#formdetailobat')
			  .not(':button, :submit, :reset, :hidden')
			  .val('');
				var year  = '<?php echo date('Y') ?>';
				$("#selectSumDanaObat option[value='Mandiri']").attr("selected", "selected");
				$("#selectTahObat option[value='"+year+"']").attr("selected", "selected");						  						  
						
		})

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
					alert('data berhasil diubah');
					console.log(data);
				},
				error:  function (data) {
					alert('paitttt, gagal');
				}
			})
		})

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
					alert('data berhasil disimpan');
					$('#noBatchDetObat').val('');
					$('#id_penyedia').val('');
					$('#jmlDetObat').val('');
				},
				error:function (data) {
					alert(data['message']);
				}
			})	
		})

		//kurang edit obat



		//edit obat
		$("#tabelobat").on('click', 'tr td a.edObat', function (e) {
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
			// console.log(item);return false;

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homegudangobat/edit_obat",
				success: function (data) {
					alert(data['message']);
					$('#nmObat').focus();
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
						for (var i = data.length - 1; i >= 0; i--) {
							var st;
							if (Number(data[i]['stok_minimal']) >= Number(data[i]['jlh'])) {
								st =  'style="background-color:red;"';
								alert(st);
							}else{
								st = "";
							}
							$('#t_body_obat').append(
								'<tr>'+
									'<td style="display:none" class="hidden_id" data-edit="'+data[i]['is_hidden']+'">'+data[i]['is_hidden']+'</td>'+
									'<td class="obat_id"  data-edit="'+data[i]['obat_id']+'">'+data[i]['obat_id']+'</td>'+
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
									'<a href="#" class="edObat"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak"></i></a></td>'+
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
						for (var i = data.length - 1; i >= 0; i--) {
							var st;
							if (Number(data[i]['stok_minimal']) >= Number(data[i]['jlh'])) {
								st =  'style="background-color:red;"';
								alert(st);
							}else{
								st = "";
							}
							$('#t_body_obat').append(
								'<tr>'+
									'<td style="display:none" class="hidden_id" data-edit="'+data[i]['is_hidden']+'">'+data[i]['is_hidden']+'</td>'+
									'<td class="obat_id"  data-edit="'+data[i]['obat_id']+'">'+data[i]['obat_id']+'</td>'+
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
									'<a href="#" class="edObat"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak"></i></a></td>'+
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
		})

		$('#jmlInOut').on('change', function (e) {
			e.preventDefault();


			var is_in = $('#io').find('option:selected').val();
			var jmlInOut = $('#jmlInOut').val();
			var sisa = $('#sisaInOut').val();
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

		    $.ajax({
		    	type: "POST",
		    	data: item,
		    	url: "<?php echo base_url()?>farmasi/homegudangobat/input_in_out",
		    	success: function (data) {
		    		alert('data berhasil disimpan');
		    	},
		    	error: function (data) {
		    		alert('gagal');
		    	}
		    })

			$('#inout').modal('hide');
		})

		/*akhir inventori*/


		/*pindaahan dari javascript di base/operator/javascript.php*/
					$('#btnSimpanEdit').hide();
					$(".edObat").click(function(e){
						e.preventDefault();
						$("#btnBatalObat").show();
						$('#btnSimpanEdit').show();
						$('#smpanObat').hide();
					});

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
						$(':input','#forminputobat')
						  .not(':button, :submit, :reset, :hidden')
						  .val('');
						$("#selectSatObat option[value='"+1+"']").attr("selected", "selected");
						$("#selectJnsObat option[value='"+1+"']").attr("selected", "selected");
						$("#selectGenerik option[value='"+1+"']").attr("selected", "selected");
					})

					$('#resetObat').click(function (e) {
						e.preventDefault();
						$(':input','#forminputobat')
						  .not(':button, :submit, :reset, :hidden')
						  .val('');
						$("#selectSatObat option[value='"+1+"']").attr("selected", "selected");
						$("#selectJnsObat option[value='"+1+"']").attr("selected", "selected");
						$("#selectGenerik option[value='"+1+"']").attr("selected", "selected");
					})

					$('#editDetObat').hide();
		/**/

	});

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
				//console.log(data);
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
									'<a href="#" class="printobat"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak"></i></a></td>'+
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