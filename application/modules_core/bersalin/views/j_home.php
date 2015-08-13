<script type="text/javascript">
	$(document).ready(function () {

		/*farmasi bersalin*/
		$('#submitfilterfarmasiunit').submit(function (e) {
			e.preventDefault();
			var filter = {};
			filter['filterby'] = $('#filterInv').find('option:selected').val();
			filter['valfilter'] = $('#filterby').val();
			submit_filter(filter);
		})

		$('#expired').on('click', function (e) {
			e.preventDefault();
			var filter = {};
			filter['expired'] = '0';
			submit_filter(filter)
		})

		$('#expired3').on('click', function (e) {
			e.preventDefault();
			var filter = {};
			filter['expired'] = '3';
			submit_filter(filter)
		})

		$('#expired6').on('click', function (e) {
			e.preventDefault();
			var filter = {};
			filter['expired'] = '6';
			submit_filter(filter);
		})

		$('#formobatfarmasibersalin').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['katakunci'] = $('#katakuncifarmasibersalin').val();
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
									'<td>'+data[i]['stok_gudang']+'</td>'+
									'<td>'+format_date(data[i]['tgl_kadaluarsa'])+'</td>'+
									'<td style="text-align:center"><a href="#" class="addNewMintaFar"><i class="glyphicon glyphicon-check"></i></a></td>'+
									'<td style="display:none">'+data[i]['stok_unit']+'</td>'+
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

	        $('#addinputMintaFar').find('tr td.dataKosong').closest('tr').remove();
			$('#addinputMintaFar').append(
				'<tr><td style="display:none">'+cols[0]+'</td>'+
				'<td style="display:none">'+cols[2]+'</td>'+
				'<td>'+cols[3]+'</td>'+
				'<td>'+format_date(cols[1])+'</td>'+
				'<td>'+cols[4]+'</td>'+
				'<td>'+cols[5]+'</td>'+
				'<td>'+cols[9]+'</td>'+
				'<td>'+cols[6]+'</td>'+
				'<td><input type="number" class="form-control" style="width:90px" placeholder="0"></td>'+
				'<td style="text-align:center"><a href="#" class="removeRow"><i class="glyphicon glyphicon-remove"></i></a></td></tr>'
			)
		})

		$('#permintaanfarmasibersalin').submit(function (e) {
			e.preventDefault();
			$('#addinputMintaFar').find('tr td.dataKosong').closest('tr').remove();
			var item = {};
			item['no_permintaan'] = $('#noPermFarmBers').val();
			item['tanggal_request'] = $('#tglpermintaanfarmasi').val();
			item['keterangan_request'] = $('#ketObatFarBers').val();

			//jlh = 10, obat_id = 1, obat_detail_id = 0
			var data = [];
		    $('#addinputMintaFar').find('tr').each(function (rowIndex, r) {
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
				$('#addinputMintaFar').append('<tr><td colspan="8" style="text-align:center" class="dataKosong">DATA KOSONG</td></tr>');
				alert('isi detail cuk');
				return false;
			}

		    item['data'] = data;
		    var a = confirm('yakin disimpan ?');
		    if (a == true) {
			    $.ajax({
					type: "POST",
					data: item,
					url: '<?php echo base_url()?>bersalin/homebersalin/submit_permintaan_bersalin',
					success: function (data) {
						//console.log(data);
						if (data['error'] == 'n'){
							$('#addinputMintaFar').empty();
							$('#noPermFarmBers').val('');
							$('#ketObatFarBers').val('');
						}
						alert(data['message']);
					},
					error: function (data) {
						console.log(data);
					}
				})
			};
		})

		$('#batalpermintaanfarmasi').on('click',function (e) {
			e.preventDefault();
			$('#addinputMintaFar').empty();
			$('#addinputMintaFar').append('<tr><td colspan="6" style="text-align:center" class="dataKosong">DATA KOSONG</td></tr>');
		})

		//retur obat (ya ke gudang lah)
		$('#formsearchobatretur').submit(function (e) {
			e.preventDefault();
			var item ={};
			item['katakunci'] = $('#katakuncireturbersalin').val();

			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url()?>bersalin/homebersalin/get_obat_retur',
				success: function (data) {
					//console.log(data);
					$('#tbodyreturbersalin').empty();
					if (data.length > 0) {
						for (var i = 0; i < data.length; i++) {
							$('#tbodyreturbersalin').append(
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
						$('#tbodyreturbersalin').append('<tr><td style="text-align:center" colspan="6">Data tidak ditemukan</td></tr>');
					} 
				},
				error: function (data) {
					console.log(data);
				}
			})
		})
		
		$('#tbodyreturbersalin').on('click', 'tr td a.addNewReturFar', function (e) {
			e.preventDefault();
			var cols = [];
	        $(this).closest('tr').find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });

	        $('#addinputRetFar').find('tr td.dataKosong').closest('tr').remove();
			$('#addinputRetFar').append(
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

		$('#formsubmitreturbersalin').submit(function (e) {
			e.preventDefault();
			$('#addinputRetFar').find('tr td.dataKosong').closest('tr').remove();
			var item = {};
			item['no_returdept'] = $('#noRetFarBers').val();
			item['waktu'] = $('#waktureturbersalin').val();
			item['keterangan'] = $('#ketObatRetFarBers').val();

			//jlh = 8, obat_id = 1, obat_detail_id = 0
			var data = [];
		    $('#addinputRetFar').find('tr').each(function (rowIndex, r) {
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
				 $('#addinputRetFar').append('<tr><td colspan="7" style="text-align:center" class="dataKosong">DATA KOSONG</td></tr>');
				alert('isi detail cuk');
				return false;
			}

		    item['data'] = data;
		    var a = confirm('yakin diproses ?');
		    if (a == true) {
			    $.ajax({
					type: "POST",
					data: item,
					url: '<?php echo base_url()?>bersalin/homebersalin/submit_retur_bersalin',
					success: function (data) {
						console.log(data);
						if (data['error'] == 'n'){
							$('#addinputRetFar').empty();
							$('#noRetFarBers').val('');
							$('#ketObatRetFarBers').val('');
						}
						alert(data['message']);
					},
					error: function (data) {
						console.log(data);
					}
				})
			};
		})

		$('#batalreturfarmasi').on('click',function (e) {
			e.preventDefault();
			$('#addinputRetFar').empty();
			$('#addinputRetFar').append('<tr><td colspan="6" style="text-align:center" class="dataKosong">DATA KOSONG</td></tr>');
		})

		$('#tbodyinventoriunit').on('click','tr td a.inoutobat', function (e) {
			e.preventDefault();
			var obat_dept_id = $(this).closest('tr').find('td .barangobat_dept_id').val();
			var jlh = $(this).closest('tr').find('td').eq(5).text();

			$('#inout_obat_dept_id').val(obat_dept_id);
			$('#sisaInOutBer').val(jlh);

			$('#jmlInOutBer').on('change', function (e) {
				e.preventDefault();

				var is_in = $('#iober').find('option:selected').val();
				var jmlInOut = $('#jmlInOutBer').val();
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
				$('#sisaInOutBer').val(hasil);			
			})

			$('#iober').on('change', function () {
				var jumlah = Number($('#jmlInOutBer').val());
				var sisa = Number(jlh);//Number($('#sisaInOut').val());

				var isout = $('#iober').find('option:selected').val();
				if (isout === 'IN') {
					$('#sisaInOutBer').val(jumlah + sisa);
				} else{
					$('#sisaInOutBer').val(sisa - jumlah);
				};
			})
		})

		$('#submitinoutunit').submit(function (e) {
			e.preventDefault();

			var item = {};
			item['obat_dept_id'] = $('#inout_obat_dept_id').val();
			item['jumlah'] = $('#jmlInOutBer').val();
			item['sisa'] = $('#sisaInOutBer').val();
			item['is_out'] = $('#iober').find('option:selected').val();
			item['tanggal'] = $('#tglInOut').val();
		    item['keterangan'] = $('#keteranganIO').text();

		    if (item['jumlah'] != "") {
			    $.ajax({
			    	type: "POST",
			    	data: item,
			    	url: "<?php echo base_url()?>bersalin/homebersalin/input_in_out",
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
				$('#jmlInOutBer').focus();
			};		
		})

		$("#tbodyinventoriunit").on('click', 'tr td a.printobat', function (e) {
			var obat_dept_id = $(this).closest('tr').find('td .barangobat_dept_id').val();

			 $.ajax({
		    	type: "POST",
		    	url: "<?php echo base_url()?>farmasi/homegudangobat/get_detail_obat_bydeptid/" + obat_dept_id, //benar
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
								'<td style="text-align:center">'+format_date(data[i]['tanggal'])+'</td>'+
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
		
		/*farmasi bersalin*/

		/*logistik beralin*/
		$('#tbodyinventoribarang').on('click', 'tr td a.edBarang', function (e) {
			e.preventDefault();
			$('#id_barang_inoutprocess').val($(this).closest('tr').find('td .barang_detail_inout').val());
			var jlh = $(this).closest('tr').find('td').eq(4).text();

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
	
		$('#forminoutbarang').submit(function (e) {
			e.preventDefault();

			var item = {};
			item['barang_detail_id'] = $('#id_barang_inoutprocess').val();
			item['jumlah'] = $('#jmlInOut').val();
			item['sisa'] = $('#sisaInOut').val();
			item['is_out'] = $('#io').find('option:selected').val();
		    item['tanggal'] = $('#tanggalinout').val();;
		    item['keterangan'] = $('#keteranganIO').text();
		    //console.log(item);return false;
		    if (item['jumlah'] != "") {
			    $.ajax({
			    	type: "POST",
			    	data: item,
			    	url: "<?php echo base_url()?>bersalin/homebersalin/input_in_outbarang",
			    	success: function (data) {
			    		if (data == "true") {
			    			alert('data berhasil disimpan');
			    			$('#inoutbar').modal('hide');	
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

		$("#tbodyinventoribarang").on('click', 'tr td a.detailinvenbarang', function (e) {
			var id = $(this).closest('tr').find('td .barang_detail_inout').val();

			 $.ajax({
		    	type: "POST",
		    	url: "<?php echo base_url()?>bersalin/homebersalin/get_detail_inventori/" + id,
		    	success: function (data) {
		    		console.log(data);
		    		$('#tbodydetailbrginventori').empty();
		    		for(var i = 0; i < data.length ; i++){
		    			$('#tbodydetailbrginventori').append(
							'<tr>'+
								'<td>'+format_date(data[i]['tanggal'])+'</td>'+
								'<td>'+data[i]['is_out']+'</td>'+
								'<td>'+data[i]['jumlah']+'</td>'+
								'<td>'+data[i]['keterangan']+'</td>'+
							'</tr>'
		    			)
		    		}
		    	},
		    	error: function (data) {
		    		alert('gagal');
		    	}
		    })
		})
		
		$('#formmintabarang').submit(function (e) {
			e.preventDefault();
			var item ={};
			item['katakunci'] = $('#katakuncimintabarang').val();
			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url()?>bersalin/homebersalin/get_barang_gudang',
				success: function (data) {
					console.log(data);//return false;
					$('#tbodybarangpermintaan').empty();
					if (data.length > 0) {
						for (var i = 0; i < data.length; i++) {
							$('#tbodybarangpermintaan').append(
								'<tr>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td>'+data[i]['satuan']+'</td>'+
									'<td>'+data[i]['nama_merk']+'</td>'+
									'<td>'+data[i]['tahun_pengadaan']+'</td>'+
									'<td>'+data[i]['stok_gudang']+'</td>'+
									'<td style="text-align:center"><a href="#" class="addnewpermintaanbarang"><i class="glyphicon glyphicon-check"></i></a></td>'+
									'<td style="display:none">'+data[i]['barang_stok_id']+'</td>'+
									'<td style="display:none">'+data[i]['barang_id']+'</td>'+
									'<td style="display:none">'+data[i]['stok_unit']+'</td>'+
								'</tr>'
							)
						};
					}else{
						$('#tbodybarangpermintaan').append('<tr><td style="text-align:center" colspan="6">Data tidak ditemukan</td></tr>');
					} 
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#tbodybarangpermintaan').on('click', 'tr td a.addnewpermintaanbarang',function (e) {
			e.preventDefault();
			var cols = [];
	        $(this).closest('tr').find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });

	        $('#addinputmintabarang').find('tr td.dataKosong').closest('tr').remove();
			$('#addinputmintabarang').append(
				'<tr><td>'+cols[0]+'</td>'+//nama
				'<td>'+cols[1]+'</td>'+  //satuan
				'<td>'+cols[2]+'</td>'+ //merk
				'<td>'+cols[3]+'</td>'+ //tahun pengadaan
				'<td>'+cols[8]+'</td>'+ //stok unit
				'<td>'+cols[4]+'</td>'+ //stok gudang
				'<td><input type="number" class="form-control" style="width:90px" placeholder="0"></td>'+ //jumlah minta
				'<td style="text-align:center"><a href="#" class="removeRow"><i class="glyphicon glyphicon-remove"></i></a></td>'+
				'<td style="display:none">'+cols[6]+'</td>'+ //barang_stok_id
				'<td style="display:none">'+cols[7]+'</td></tr>' //barang_id
			)
		})

		$('#permintaanbarangunit').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['no_permintaanbarang'] = $('#nomorpermintaanbarang').val();
			item['tanggal_request'] = $('#tglpermintaanbarang').val();
			item['keterangan_request'] = $('#keteranganpermintaanbarang').val();

			var data = [];
			$('#addinputmintabarang').find('tr td.dataKosong').closest('tr').remove();
		    $('#addinputmintabarang').find('tr').each(function (rowIndex, r) {
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
				$('#addinputmintabarang').append('<tr><td colspan="8" style="text-align:center" class="dataKosong">DATA KOSONG</td></tr>');
				alert('isi detail cuk');
				return false;
			}

		    item['data'] = data;

		    $.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url()?>bersalin/homebersalin/submit_permintaan_barangunit',
				success: function (data) {
					console.log(data);
					if (data['error'] == 'n'){
						$('#addinputmintabarang').empty();
						$('#addinputmintabarang').append('<tr><td colspan="8" style="text-align:center" class="dataKosong">DATA KOSONG</td></tr>');
						$('#nomorpermintaanbarang').val('');
						$('#keteranganpermintaanbarang').val('');
					}
					alert(data['message']);
				},
				error: function (data) {
					console.log(data);
				}
			})
		})
		/*logistik bersalin*/

		/*pindah pasien*/
		$('#submitpindahkan').submit(function (e) {
			e.preventDefault();
			pindah_pasien('bersalin/homebersalin');
		})
		/*akhir pindah pasien*/

		/*data kamar*/
		$('#tabelkamarunit tbody').on('click', 'tr td a.viewdetailkamar',function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .kamar_id_detail').val();
			var nama = $(this).closest('tr').find('td').eq(1).text();
			$('.titlekamar').text(nama);
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>bersalin/homebersalin/get_detail_kamar/" +id,
				success: function (data) {
					console.log(data);
					if (data.length > 0) {
						$('#tabeldetailkamar tbody').empty();
						for (var i = 0; i < data.length; i++) {
							$('#tabeldetailkamar tbody').append(
								'<tr>'+
									'<td>'+(Number(i+1))+'</td>'+
									'<td>'+data[i]['nama_bed']+'</td>'+
									'<td>'+data[i]['status']+'</td>'+
									'<td>'+data[i]['nama_pasien']+'</td>'+
								'</tr>'
							);
						};
					};
				},
				error: function (data) {
					console.log(data);
				}
			})
		})
		/*akhir data kamar*/

		/*master*/
		var tbl = $('#tabelJpPoliinap').DataTable( {
			"bFilter": false,
	        "bLengthChange": false,
			"bSortable":true,
			"bInfo":false,
	        "footerCallback": function ( row, data, start, end, display ) {
	            var api = this.api(), data;
	 
	            // Remove the formatting to get integer data for summation
	            var intVal = function ( i ) {
	                return typeof i === 'string' ?
	                    i.replace(/[\$,]/g, '')*1 :
	                    typeof i === 'number' ?
	                        i : 0;
	            };
	 
	            // Total over all pages
	            total = api
	                .column( 8 )
	                .data()
	                .reduce( function (a, b) {
	                    return intVal(a) + intVal(b);
	                } );
	 
	            // Update footer
	            $('#totaljaspel').html(
	                total
	            );
	        }
	    } );
		$('.btnsavejp').hide();
		var jp_asli;
	    $('#tabelJpPoliinap tbody').on('click', 'tr td a.btneditjp', function (e) {
	    	e.preventDefault();
	    	$(this).closest('tr').find('td a.btnsavejp').show();
	    	$(this).hide();
	    	jp_asli = Number($(this).closest('tr').find('td').eq(6).text());
	    	var a = $(this).closest('tr').find('td .feepelayanan').text();
	    	$(this).closest('tr').find('td .feepelayanan').replaceWith(
				'<input type="number" style="width:80px;" class="form-control editfeepelayanan" value="'+a+'">'
			);

			$("#tabelJpPoliinap tbody").on('change','tr td .editfeepelayanan',function(e){
				var ubah = $(this).val();
				var harga = $(this).closest('tr').find('td').eq(6).text();
				var hasil = Number(ubah) + Number(jp_asli);
				$(this).closest('tr').find('td').eq(8).html(hasil);
				/*$.fn.;*/
				var baru = new $.fn.dataTable.Api('#tabelJpPoliinap');
				
			})
	    })

	    $('#tabelJpPoliinap tbody').on('click', 'tr td a.btnsavejp', function (e) {
	    	e.preventDefault();
	    	var a = $(this).closest('tr').find('td .editfeepelayanan').val();
	    	$(this).closest('tr').find('td .editfeepelayanan').replaceWith(
				'<span class="feepelayanan">'+a+'</span>'
			);
			$(this).closest('tr').find('td a.btneditjp').show();
	    	$(this).hide();
	    })
		/*master akhir*/
	})

	function submit_filter (filter) {
		$.ajax({
			type: "POST",
			data: filter,
			url: "<?php echo base_url()?>bersalin/homebersalin/submit_filter_farmasi",
			success:function (data) {
				console.log(data);
				$('#tbodyinventoriunit').empty();
				var t = $('#tabelinventoriunit').DataTable();

				t.clear().draw();
				for (var i =  0; i < data.length; i++) {
					var last = '<a href="#" class="inoutobat" data-toggle="modal" data-target="#inout"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
								'<a href="#edInvenBer" data-toggle="modal" class="printobat"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Riwayat"></i></a>'+
								'<input type="hidden" class="barangmerk_id" value="'+data[i]['merk_id']+'">'+
								'<input type="hidden" class="barangjenis_obat_id" value="'+data[i]['jenis_obat_id']+'">'+
								'<input type="hidden" class="barangsatuan_id" value="'+data[i]['satuan_id']+'">'+
								'<input type="hidden" class="barangobat_dept_id" value="'+data[i]['obat_dept_id']+'">';
					var tgl_kadaluarsa = format_date(data[i]['tgl_kadaluarsa']);
					t.row.add([
						(Number(i+1)),
						data[i]['nama'],
						data[i]['no_batch'],
						data[i]['harga_jual'],
						data[i]['nama_merk'],
						data[i]['total_stok'],
						data[i]['satuan'],								
						tgl_kadaluarsa,
						last
					]).draw();
				}

				t.on( 'order.dt search.dt', function () {
			        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
			            cell.innerHTML = i+1;
			        } );
			    } ).draw();

				$('[data-toggle="tooltip"]').tooltip();
					
			},
			error:function (data) {
				console.log(data);
			}
		})
	}

</script>