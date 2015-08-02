<script type="text/javascript">
	$(document).ready(function () {
		$('#filter_obat').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['nama'] = $('#nmObatBwhApoUmum').val();
			item['satuan_id'] = $('#selectSatObatApoUmumfilter').find('option:selected').val();
			item['is_generik'] = $('#selectGenObatApoUmum').find('option:selected').val();
			//console.log(item);return false;
			$
			jQuery.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homeapotikumum/filter_obat",
				success: function (data) {
					console.log(data); //return false;
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
									'<a href="<?php echo base_url()?>farmasi/homegudangobat/print_kartustok/'+data[i]['obat_id']+'/25" class="printObat"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak"></i></a>'+
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
				},
				error: function (data) {
					alert('gagal');
				}
			})
		})

		$('#filter_stok').click(function (e) {
			e.preventDefault();
			var item = {};
			item['dept_id'] = '25';
			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homeapotikumum/filter_stok",
				success: function (data) {
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
									'<a href="<?php echo base_url()?>farmasi/homegudangobat/print_kartustok/'+data[i]['obat_id']+'/25" class="printObat"><i class="glyphicon glyphicon-print" data-toggle="tooltip" data-placement="top" title="Cetak"></i></a>'+
									'<input type="hidden" class="new_merk_id" value="'+data[i]['merk_id']+'">'+
									'<input type="hidden" class="new_jenis_id" value="'+data[i]['jenis_obat_id']+'">'
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
					
				},
				error: function (data) {
					alert('gagal');
				}
			})
		})

		$('#btnbatalobat').hide();
		$('#ubahobat').hide();

		$("#tabelobat").on('click', 'tr td a.edObat', function (e) {
			e.preventDefault();
			$('#stokMinApoUmum').focus();
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
			$('#nmObatApoUmum').val(nama_obat);
			$('#edit_obat_id').val(obat_id);
			$('#hgDasarObatApoUmum').val(harga_dasar);
			$('#nmMerkApoUmum').val(nama_merk);
			$("#selectSatObatApoUmum option[value='"+new_satuan_id+"']").attr("selected", "selected");
			$("#selectJnsObatApoUmum option[value='"+new_jenis_id+"']").attr("selected", "selected");
			$("#selectGenerikApoUmum option[value='"+is_generik+"']").attr("selected", "selected");
			$('#hpsApoUmum').val(new_hps);
			$('#marginApoUmum').val(new_margin);
			$('#hargaJualApoUmum').val(new_h_jual);
			$('input:radio[name=hd][value='+hidden_id+']').prop("checked", true);
			$('#stokMinApoUmum').val(new_stok_min);
			$('#pedObatDetApoUmum').val(penyedia);

			//sembunyikan
			$("#btnbatalobat").show();
			$('#ubahobat').show();
			$('#smpanObat').hide();
			$('#resetobat').hide();
		})

		
		$('#btnbatalobat').on('click', function (e) {
			e.preventDefault();
			$('#resetobat').show();
			$('#smpanObat').show();
			$("#btnbatalobat").hide();
			$('#ubahobat').hide();
		})

		$('#ubahstokminimal').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['obat_id'] = $('#edit_obat_id').val();
			item['stok_minimal'] = $('#stokMinApoUmum').val();
			var a = confirm('yakin mengubah data ?');
			if (a == true) {
				$.ajax({
					type: "POST",
					data: item,
					url: "<?php echo base_url()?>farmasi/homeapotikumum/edit_obat",
					success: function (data) {
						console.log(data);
						alert('data berhasil diubah')
					},
					error: function (data) {
						console.log(data);	
					}
				})
			};
			
		})

		/*detail obat*/
		$('#editDetObat').hide();
		$('#cariobatdetail').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['katakunci'] = $('#katakunciobatapum').val();

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homeapotikumum/search_obat",
				success: function (data) {
					console.log(data);
					$('#tbodycariobat').empty();
	 					if(data.length>0){
	 						for(var i = 0; i<data.length; i++){
		 						var nama = data[i]['nama'],
										obat_id = data[i]['obat_id'],
										nama_satuan = data[i]['satuan'],
										satuan_id = data[i]['satuan_id'],
										merk = data[i]['nama_merk'],
										merk_id = data[i]['merk_id'];

									$("#tbodycariobat").append(
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
							};
						}else{
							$('#tbodycariobat').empty();
							$('#tbodycariobat').append(
								'<tr>'+
						 			'<td colspan="2"><center>Data Tidak Ditemukan</center></td>'+
						 		'</tr>'
							);
						}
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$("#tbodycariobat").on('click', 'tr td a.inputobatdet', function (e) {
			e.preventDefault();
			var nama = jQuery(this).closest('tr').find('td.nama_obat').text();
			var id = jQuery(this).closest('tr').find('td.obat_id').text();
			var satuan = jQuery(this).closest('tr').find('td.satuan_obat').text();
			var satuan_id = jQuery(this).closest('tr').find('td.satuan_obat_id').text();
			var merk = jQuery(this).closest('tr').find('td.merk_obat').text();
			var merk_id = jQuery(this).closest('tr').find('td.merk_obat_id').text();
			$('#nmDetObatApoUmum').val(nama);
			$('#selected_obat_id').val(id);
			$('#satObatDetApoUmum').val(satuan);
			$('#merkObatDetApoUmum').val(merk);

			$('#nmDetObat').modal('hide');

			$.ajax({
				type: "POST",
				url: '<?php echo base_url() ?>farmasi/homeapotikumum/tampil_detail/'+id,
				success: function (data) {
					console.log(data);
					$('#t_body_detail_obat').empty();
					var t = $('#tabeldetailobat').DataTable();

					t.clear().draw();
					
					
						for (var i = 0; i < data.length; i++) {
							var a = format_date(data[i]['tgl_kadaluarsa']);
							var b = '<a href="#" class="edObatDetail" id="edDetObat"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
									'<input type="hidden" class="new_detail_id" value="'+data[i]['obat_detail_id']+'">'+
									'<input type="hidden" class="new_dept_id" value="'+data[i]['obat_dept_id']+'">'
							t.row.add([
								(i+1),
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
			var jumlah = $(this).closest('tr').find('td').eq(5).text();
			var nobatch = $(this).closest('tr').find('td').eq(2).text();
			var sumber = $(this).closest('tr').find('td').eq(4).text();
			var thn = $(this).closest('tr').find('td').eq(3).text();
			var tgl = $(this).closest('tr').find('td').eq(1).text();
		    var tanggal = format_date2(tgl);

			$('#noBatchDetObatApoUmum').val(nobatch);
			$("#selectTahObatApoUmum option[value='"+thn+"']").attr("selected", "selected");
			$("#selectSumDanaObatApoUmum option[value='"+sumber+"']").attr("selected", "selected");			
			$('#jmlDetObatApoUmum').val(jumlah);
			$('#tglkadalarsafak').val(tanggal);
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
			$("#noBatchDetObatApoUmum").prop('disabled', false);
			$("#jmlDetObatApoUmum").prop('disabled', false);
			$("#selectSumDanaObatApoUmum").prop('disabled', false);

			$('#noBatchDetObatApoUmum').val('');			
			$('#jmlDetObatApoUmum').val('');
			$('#tglkadalarsafak').val('<?php echo date("d/m/Y") ?>');

			var year  = '<?php echo date('Y') ?>';
			$("#selectSumDanaObatApoUmum option[value='Mandiri']").attr("selected", "selected");
			$("#selectTahObatApoUmum option[value='"+year+"']").attr("selected", "selected");
		}
		//simpan detail baru (belum cuks)
		/*akhir detail obat*/

		/*inventori*/
		$('#filterInv').on('change', function (e) {
			var isi = $(this).val();
			switch(isi){
				case 'Nama': $('#filterBy').val(''); $('#filterBy').attr('placeholder', 'Nama Obat');break;
				case 'Jenis': $('#filterBy').val('');$('#filterBy').attr('placeholder', 'Jenis Obat');break;
				case 'Sumber': $('#filterBy').val('');$('#filterBy').attr('placeholder', 'Sumber Dana');break;
				case 'Penyedia': $('#filterBy').val('');$('#filterBy').attr('placeholder', 'Penyedia Obat');break;
				case 'Merek': $('#filterBy').val('');$('#filterBy').attr('placeholder', 'Merek Obat');break;
				case '': $('#filterBy').val('');$('#filterBy').attr('placeholder', 'filter');break;
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

		$("#tabelinventoriutama").on('click', 'tr td a.inoutobat', function (e) {
			var obat_dept_id = $(this).closest('tr').find('td .obat_dept_id_inventori').val();
			var jlh = $(this).closest('tr').find('td').eq(8).text();

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
		    		console.log(data);
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
			    	url: "<?php echo base_url()?>farmasi/homegudangobat/input_in_out", //ke gudang obat aja, sama
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

		/*permintaan*/
		$('#formsearchpermintaan').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['katakunci'] = $('#katakuncipermintaan').val();
			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url()?>bersalin/homebersalin/get_obat_gudang', 
				success: function (data) {
					//console.log(data);
					$('#tbodyobatpermintaanfarmasi').empty();
					if (data.length > 0) {
						for (var i = 0; i < data.length; i++) {
							$('#tbodyobatpermintaanfarmasi').append(
								'<tr>'+
									'<td style="display:none">'+data[i]['obat_detail_id']+'</td>'+
									'<td style="display:none">'+data[i]['tgl_kadaluarsa']+'</td>'+
									'<td style="display:none">'+data[i]['obat_id']+'</td>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td>'+data[i]['satuan']+'</td>'+
									'<td>'+data[i]['nama_merk']+'</td>'+
									'<td>'+data[i]['total_stok']+'</td>'+
									'<td>'+format_date(data[i]['tgl_kadaluarsa'])+'</td>'+
									'<td style="text-align:center"><a href="#" class="addNewMintaFar"><i class="glyphicon glyphicon-check"></i></a></td>'+
								'</tr>'
							)
						};
					}else{
						$('#tbodyobatpermintaanfarmasi').append('<tr><td style="text-align:center" colspan="6">Data tidak ditemukan</td></tr>');
					} 
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#tbodyobatpermintaanfarmasi').on('click','tr td a.addNewMintaFar', function (e) {
			e.preventDefault();

			var cols = [];
	        $(this).closest('tr').find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });

	        $('#addinputMintaApoUm').find('tr td.dataKosong').closest('tr').remove();
			$('#addinputMintaApoUm').append(
				'<tr><td style="display:none">'+cols[0]+'</td>'+
				'<td style="display:none">'+cols[2]+'</td>'+
				'<td>'+format_date(cols[1])+'</td>'+
				'<td>'+cols[3]+'</td>'+
				'<td>'+cols[4]+'</td>'+
				'<td>0</td>'+
				'<td><input type="number" class="form-control" style="width:90px" placeholder="0"></td>'+
				'<td style="text-align:center"><a href="#" class="removeRow"><i class="glyphicon glyphicon-remove"></i></a></td></tr>'
			)
		})

		$('#formsubmitpermintaan').submit(function (e) {
			e.preventDefault();
			$('#addinputMintaApoUm').find('tr td.dataKosong').closest('tr').remove();
			var item = {};
			item['no_permintaan'] = $('#noPermApoUm').val();
			item['tanggal_request'] = $('#tanggal_permintaan').val();
			item['keterangan_request'] = $('#ketObatApoUm').val();

			//jlh = 8, obat_id = 1, obat_detail_id = 0
			var data = [];
		    $('#addinputMintaApoUm').find('tr').each(function (rowIndex, r) {
		        var cols = [];
		        $(this).find('td').each(function (colIndex, c) {
		            cols.push(c.textContent);
		        });
		        $(this).find('td input[type=number]').each(function (colIndex, c) {
		            cols.push(c.value);
		        });
		        data.push(cols);
		    });
			if(data.length == 0){
				$('#addinputMintaApoUm').append('<tr><td colspan="6" style="text-align:center" class="dataKosong">DATA KOSONG</td></tr>');
				alert('isi detail cuk');
				return false;
			}

		    item['data'] = data;
		    //console.log(data);return false;
		    var d = confirm('yakin disimpan ?');
		    if (d == true) {
			    $.ajax({
					type: "POST",
					data: item,
					url: '<?php echo base_url()?>farmasi/homeapotikumum/submit_permintaan',
					success: function (data) {
						//console.log(data);
						if (data['error'] == 'n'){
							$('#addinputMintaApoUm').empty();
							$('#noPermApoUm').val('');
							$('#ketObatApoUm').val('');
						}
						alert(data['message']);
					},
					error: function (data) {
						console.log(data);
					}
				})
			};	
		})

		$('#resetpermintaan').on('click',function (e) {
			e.preventDefault();$('#addinputMintaApoUm').empty();
			$('#addinputMintaApoUm').append('<tr><td colspan="6" style="text-align:center" class="dataKosong">DATA KOSONG</td></tr>');
		})
		/*akhir permintaan*/

		/*retur*/
		$('#formsearchobatretur').submit(function (e) {
			e.preventDefault();
			var item ={};
			item['katakunci'] = $('#katakunciretur').val();

			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url()?>farmasi/homeapotikumum/get_obat_retur',
				success: function (data) {
					//console.log(data);
					$('#tbodyreturunit').empty();
					if (data.length > 0) {
						for (var i = 0; i < data.length; i++) {
							$('#tbodyreturunit').append(
								'<tr>'+
									'<td style="display:none">'+data[i]['obat_detail_id']+'</td>'+
									'<td style="display:none">'+data[i]['tgl_kadaluarsa']+'</td>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td>'+data[i]['satuan']+'</td>'+
									'<td>'+data[i]['nama_merk']+'</td>'+
									'<td>'+data[i]['total_stok']+'</td>'+
									'<td>'+format_date(data[i]['tgl_kadaluarsa'])+'</td>'+
									'<td style="text-align:center"><a href="#" class="addNewReturFar"><i class="glyphicon glyphicon-check"></i></a></td>'+
								'</tr>'
							)
						};
					}else{
						$('#tbodyreturunit').append('<tr><td style="text-align:center" colspan="6">Data tidak ditemukan</td></tr>');
					} 
				},
				error: function (data) {
					console.log(data);
				}
			})
		})
		
		$('#tbodyreturunit').on('click', 'tr td a.addNewReturFar', function (e) {
			e.preventDefault();
			var cols = [];
	        $(this).closest('tr').find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });

	        $('#addinputRetApoUm').find('tr td.dataKosong').closest('tr').remove();
			$('#addinputRetApoUm').append(
				'<tr><td style="display:none">'+cols[0]+'</td>'+//obat detail id
				'<td>'+cols[2]+'</td>'+  //nama
				'<td>'+format_date(cols[1])+'</td>'+ //tanggal kadaluarsa
				'<td>'+cols[3]+'</td>'+ //satuan
				'<td>'+cols[4]+'</td>'+ //merk
				'<td>'+cols[5]+'</td>'+ //stok unit
				'<td><input type="number" class="form-control" style="width:90px" placeholder="0"></td>'+ //jumlah retur
				'<td style="text-align:center"><a href="#" class="removeRow"><i class="glyphicon glyphicon-remove"></i></a></td></tr>'
			)
		})

		$('#batalreturunit').on('click',function (e) {
			e.preventDefault();$('#addinputRetApoUm').empty();
			$('#addinputRetApoUm').append('<tr><td colspan="7" style="text-align:center" class="dataKosong">DATA KOSONG</td></tr>');
		})

		$('#returobatkegudang').submit(function (e) {
			e.preventDefault();
			$('#addinputRetApoUm').find('tr td.dataKosong').closest('tr').remove();
			var item = {};
			item['no_returdept'] = $('#noRetApoUm').val();
			item['waktu'] = $('#waktureturunit').val();
			item['keterangan'] = $('#ketObatRetApoUm').val();

			//jlh = 8, obat_id = 1, obat_detail_id = 0
			var data = [];
		    $('#addinputRetApoUm').find('tr').each(function (rowIndex, r) {
		        var cols = [];
		        $(this).find('td').each(function (colIndex, c) {
		            cols.push(c.textContent);
		        });
		        $(this).find('td input[type=number]').each(function (colIndex, c) {
		            cols.push(c.value);
		        });
		        data.push(cols);
		    });
			if(data.length == 0){
				$('#addinputRetApoUm').append('<tr><td colspan="7" style="text-align:center" class="dataKosong">DATA KOSONG</td></tr>');
				alert('isi detail cuk');
				return false;
			}

		    item['data'] = data;
		    var a = confirm('yakin diproses ?');
		    if (a == true) {
			    $.ajax({
					type: "POST",
					data: item,
					url: '<?php echo base_url()?>farmasi/homeapotikumum/submit_returobat',
					success: function (data) {
						console.log(data);
						if (data['error'] == 'n'){
							$('#addinputRetApoUm').empty();
							$('#noRetApoUm').val('');
							$('#ketObatRetApoUm').val('');
						}
						alert(data['message']);
					},
					error: function (data) {
						console.log(data);
					}
				})
			};
		})
		/*akhir retur*/

		/*opname*/
		$('.round-button-tes').on('click',function (e) {
			e.preventDefault();
			var alpha = $(this).text();

			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>farmasi/homeapotikumum/get_alpha_obat_opname/"+alpha,
				success:function(data){
					append_to_opname(data);
				},
				error:function (data) {
					console.log(data);
				}
			})
		})

		$('#submit_filter_opname').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['kunci'] = $('#filterOpname').val();

			$.ajax({
				type:"POST",
				data: item,
				url:'<?php echo base_url()?>farmasi/homeapotikumum/get_opname_by_name',
				success:function(data){
					append_to_opname(data);
				},
				error:function (data) {
					console.log(data);
				}
			})
		})

		$("a.editInvenBut").hide();
		$('a.edIvenBatal').hide();
		$('.editInven').click(function (e) {
			e.preventDefault();
		})
		var asli = '';
		$("#tblInven1").on('click','tr td a.edIven',function(e){
			e.preventDefault();
			var a = $(this).closest('tr').find('td .stokfisikopname').text();
			var b = $(this).closest('tr').find('td').eq(5).text();
			asli = a;			
			$(this).closest('tr').find('td .stokfisikopname').replaceWith(
					'<input type="text" style="width:80px;" class="form-control editstokfisikopname" value="'+a+'">'
				);

			$(this).closest('tr').find('td a.edIven').hide();
			$(this).closest('tr').find('td a.editInvenBut').show();
			$(this).closest('tr').find('td a.edIvenBatal').show();

			$("#tblInven1").on('change','tr td .editstokfisikopname',function(e){
				var ubah = $(this).val();
				var harga = $(this).closest('tr').find('td').eq(7).text();
				var selisih = Number(ubah) - Number(b);
				$(this).closest('tr').find('td').eq(8).html(selisih);
				$(this).closest('tr').find('td').eq(9).html(Number(harga) * selisih);
			})
		});

		$("#tblInven1").on('click','tr td a.edIvenBatal', function(e){
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
			$(this).closest('tr').find('td a.edIven').show();		
			$(this).closest('tr').find('td a.editInvenBut').hide();
			$(this).closest('tr').find('td a.edIvenBatal').hide();
		})
						
		$("#tblInven1").on('click','tr td a.editInvenBut', function(e){
			e.preventDefault();

			var a = $(this).closest('tr').find('td .editstokfisikopname').val();
			$(this).closest('tr').find('td .editstokfisikopname').replaceWith(
					'<span class="stokfisikopname">'+a+'</span>'
				);
			$(this).closest('tr').find('td a.edIven').show();
			$(this).closest('tr').find('td a.editInvenBut').hide();
			$(this).closest('tr').find('td a.edIvenBatal').hide();

			var stok = $(this).closest('tr').find('td .stokfisikopname').text();
			var str = $('#tanggalacuan').val();
			if(str == ''){
				alert('pilih tanggal acuan');
				 $('#tanggalacuan').focus();
				return false;
			}

			//return false
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
				item['obat_dept_id'] = $(this).closest('tr').find('td .obat_dept_id').val();
				item['obat_opname_id'] = $(this).closest('tr').find('td .obat_opname_id').val();
				item['harga_jual'] = $(this).closest('tr').find('td').eq(7).text();
				console.log(item);
				$.ajax({
					type: "POST",
					data: item,
					url: "<?php echo base_url()?>farmasi/homeapotikumum/opname_process",
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

		/*jasa resep*/

		/*akhir jasa resep*/
	})

	function get_items () {
		var item = {};
		item[1] = {};
		item[1]['filterBy'] = $('#filterBy').val();
		item[1]['filterInv'] = $('#filterInv').find('option:selected').val(); 
		item[1]['satuan'] = $('#filterSat').find('option:selected').val(); 
		item[1]['is_generik'] = $('#filterGen').find('option:selected').val(); 
		return item;
	}

	function submit_filter (filter) {
		$.ajax({
			type: "POST",
			data: filter,
			url: "<?php echo base_url()?>farmasi/homeapotikumum/filter_obat_inventori",
			success: function (data) {
				console.log(data);
				$('#t_body_inventory').empty();

				var t = $('#tabelinventoriutama').DataTable();

				t.clear().draw();
				for (var i = 0; i < data.length; i++) {
					
					var tgl = format_date(data[i]['tgl_kadaluarsa']);
					var tambah = '<a href="#" class="inoutobat" data-toggle="modal" data-target="#inout"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
							'<a href="#edInvenGdg" data-toggle="modal" class="printobat"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>'+
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
			

			},
			error: function (data) {
				console.log(data);
			}
		})
	}

	function append_to_opname (data) {
		var t = $('#tblInven1').DataTable();

		t.clear().draw();
			for(var i = 0; i<data.length; i++){
				if(data[i]['tgl_opname'] == null){
					data[i]['tgl_opname'] = data[i]['tanggal'];
				}

				if (data[i]['stok_fisik'] == null) {
					data[i]['stok_fisik'] = data[i]['total_stok'];
				}
				var tglopname = format_date(data[i]["tgl_opname"]);
				var tglKadaluarsa = format_date(data[i]["tgl_kadaluarsa"]);
				var last = '<a href="#" class="edIvenBatal" id="status"><i class="glyphicon glyphicon-floppy-remove" data-toggle="tooltip" data-placement="top" title="Batal"></i></a>'+
						'<a href="#" class="edIven" id="status"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Ubah"></i></a>'+
						'<a href="#" class="editInvenBut"><i class="glyphicon glyphicon-floppy-save" data-toggle="tooltip" data-placement="top" title="Simpan"></i></a>'+
						'<input type="hidden" class="obat_dept_id" value="'+data[i]['obat_process']+'">'+
						'<input type="hidden" class="obat_opname_id" value="'+data[i]['obat_opname_id']+'">';
				var a = '<span class="stokfisikopname">'+data[i]['stok_fisik']+'</span>'
				t.row.add([
					(Number(i)+1),
					tglopname,
					data[i]['nama'],
					data[i]['nama_merk'],
					tglKadaluarsa,
					data[i]['total_stok'],
					a,
					data[i]['harga_jual'],
					(data[i]['stok_fisik'] - data[i]['total_stok']),
					((data[i]['stok_fisik'] - data[i]['total_stok']) * data[i]['harga_jual']),
					last
				]).draw();
			}
			$("a.editInvenBut").hide();
			$('a.edIvenBatal').hide();
	}
</script>