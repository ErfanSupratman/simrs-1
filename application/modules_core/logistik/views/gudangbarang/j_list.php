<script type="text/javascript">
	$(document).ready(function () {
		/*master barang*/
		$('#ubahBarang').hide();
		$('#btnBatalBrg').hide();

		$('#tambahmerkbarangbaru').submit(function (e) {
			e.preventDefault();
			var item = {}
			item['newmerk'] = $('#newbarangmerk').val();
			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>logistik/homegudangbarang/addnewmerk",
				success:function (data) {
					if (data['error'] == 'n') {
						$('#tbodymerkbarang').find('tr td.kosong').remove();
						$("#tbodymerkbarang").append(
							'<tr>'+
								'<td>'+item['newmerk']+'</td>'+
								'<td style="text-align:center">'+
								'<input type="hidden" class="idmerkbrg" value="'+data['id']+'">'+
								'<a href="#" class="cekmerk"><i class="glyphicon glyphicon-check"></i></a></td>'+
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
			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>logistik/homegudangbarang/addnewpenyedia",
				success:function (data) {
					if (data['error'] == 'n') {
						$('#tbodypenyediabarang').find('tr td.kosong').remove();
						$("#tbodypenyediabarang").append(
							'<tr>'+
								'<td>'+item['newpenyedia']+'</td>'+
								'<td style="text-align:center">'+
								'<input type="hidden" class="idpenyedia" value="'+data['id']+'">'+
								'<a href="#" class="cekpenyedia"><i class="glyphicon glyphicon-check"></i></a></td>'+
							'</tr>'
						);
					}
					alert(data['message']);
				},
				error: function (data) {
					
				}
			})
		})
		$('#searchmerkbarang').submit(function (e) {
			e.preventDefault();
			var katakunci = $('#katakuncimerkbarang').val();
			//return false;
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>logistik/homegudangbarang/search_merkbarang/" + katakunci,
				success: function (data) {
					console.log(data);
					if (data.length > 0) {
						$('#tbodymerkbarang').empty();
						for (var i = 0; i < data.length; i++) {
							$('#tbodymerkbarang').append(
								'<tr>'+
									'<td>'+data[i]['nama_merk']+'</td>'+
									'<td style="text-align:center">'+
									'<input type="hidden" class="idmerkbrg" value="'+data[i]['merk_id']+'">'+
									'<a href="#" class="cekmerk"><i class="glyphicon glyphicon-check"></i></a></td>'+
								'</tr>'
							)
						};
					}
				},
				error: function (data) {
					console.log(data);
				}
			})
		})
		$('#searchpenyediabarang').submit(function (e) {
			e.preventDefault();
			var katakunci = $('#katakuncipenyediabarang').val();
			//return false;
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>logistik/homegudangbarang/search_penyediabarang/" + katakunci,
				success: function (data) {
					console.log(data);
					if (data.length > 0) {
						$('#tbodypenyediabarang').empty();
						for (var i = 0; i < data.length; i++) {
							$('#tbodypenyediabarang').append(
								'<tr>'+
									'<td>'+data[i]['nama_penyedia']+'</td>'+
									'<td style="text-align:center">'+
									'<input type="hidden" class="idpenyedia" value="'+data[i]['penyedia_id']+'">'+
									'<a href="#" class="cekpenyedia"><i class="glyphicon glyphicon-check"></i></a></td>'+
								'</tr>'
							)
						};
					}
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#tbodymerkbarang').on('click', 'tr td a.cekmerk', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .idmerkbrg').val();
			var nama = $(this).closest('tr').find('td').eq(0).text();
			$('.idmerkbarang').val(id);
			$('#namaMerk').val(nama);
			$('#mdMerk').modal('hide');
		})
		$('#tbodypenyediabarang').on('click', 'tr td a.cekpenyedia', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .idpenyedia').val();
			var nama = $(this).closest('tr').find('td').eq(0).text();
			$('.idpenyediabarang').val(id);
			$('#pedBarang').val(nama);
			$('#mdPenyedia').modal('hide');
		})

		$('#smpanBarang').on('click', function (e) {
			e.preventDefault();
			var item = {};
			item['nama'] = $('#nmBarang').val();
			item['merk'] = $('.idmerkbarang').val();
			item['satuan_id'] = $('#selectSatBarang').find('option:selected').val();
			item['stok_minimal'] = $('#stokmin').val();
			item['group_id'] = $('#selectGrpBarang').find('option:selected').val();
			item['harga'] = $('#hgDasarBarang').val();
			item['penyedia_id'] = $('.idpenyediabarang').val();
			item['is_hidden'] = $('input:radio[name=hd]:checked').val();

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>logistik/homegudangbarang/add_barang",
				success: function (data) {
					alert(data['message']);
					if (data['error'] == 'y') {
						$('#nmBarang').focus();
						return false;
					}
					resetbarang();
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#tbodybarangutama').on('click', 'tr td a.edBarang', function (e) {
			e.preventDefault();
			$('#ubahBarang').show();
			$('#btnBatalBrg').show();
			$('#rstBarang').hide();
			$('#smpanBarang').hide();
			$('#nmBarang').val($(this).closest('tr').find('td').eq(1).text());
			$('#hgDasarBarang').val($(this).closest('tr').find('td').eq(7).text());
			$('#stokmin').val($(this).closest('tr').find('td').eq(5).text());
			var hidden_id = $(this).closest('tr').find('td .is_hiddenid_edit').val();
			var satuan = $(this).closest('tr').find('td .satuan_id_edit').val();
			var grup = $(this).closest('tr').find('td').eq(4).text();
			$('input:radio[name=hd][value='+hidden_id+']').prop("checked", true);
			$("#selectSatBarang option[value='"+satuan+"']").attr("selected", "selected");
			$("#selectGrpBarang option[value='"+grup+"']").attr("selected", "selected");
			$('#pedBarang').val($(this).closest('tr').find('td .nama_penyedia_edit').val());
			$('.idpenyediabarang').val($(this).closest('tr').find('td .penyedia_id_edit').val());
			$('#namaMerk').val($(this).closest('tr').find('td').eq(3).text());
			$('.idmerkbarang').val($(this).closest('tr').find('td .merk_id_edit').val());
			$('#barang_id_edit').val($(this).closest('tr').find('td .brg_id_edit').val());
		})

		$('#ubahBarang').on('click', function (e) {
			e.preventDefault();
			//apa yg mau diubah?
			var item = {};
			item['nama'] = $('#nmBarang').val();
			var barang_id = $('#barang_id_edit').val()
			item['merk'] = $('.idmerkbarang').val();
			item['satuan_id'] = $('#selectSatBarang').find('option:selected').val();
			item['stok_minimal'] = $('#stokmin').val();
			item['group_id'] = $('#selectGrpBarang').find('option:selected').val();
			item['harga'] = $('#hgDasarBarang').val();
			item['penyedia_id'] = $('.idpenyediabarang').val();
			item['is_hidden'] = $('input:radio[name=hd]:checked').val();

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>logistik/homegudangbarang/edit_barang/" + barang_id,
				success: function (data) {
					alert(data['message']);
					if (data['error'] == 'y') {
						$('#nmBarang').focus();
						return false;
					}
					resetbarang();
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#rstBarang').on('click',function (e) {
			e.preventDefault();
			resetbarang();
		})

		$('#btnBatalBrg').on('click', function (e) {
			e.preventDefault();
			resetbarang();
			$('#ubahBarang').hide();
			$('#btnBatalBrg').hide();
			$('#rstBarang').show();
			$('#smpanBarang').show();
		})

		//detail
		$('#ubahDetBrg').hide();
		$('#btnBatalDetBrg').hide();
		$('#formcaridetailbarang').submit(function (e) {
			e.preventDefault();
			var katakunci = $('#katakuncibarangdetail').val();
			//return false;
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>logistik/homegudangbarang/search_barang/" + katakunci,
				success: function (data) {
					console.log(data);
					if (data.length > 0) {
						$('#tbodybarangdetail').empty();
						for (var i = 0; i < data.length; i++) {
							$('#tbodybarangdetail').append(
								'<tr>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td style="display:none">'+data[i]['satuan']+'</td>'+
									'<td style="display:none">'+data[i]['nama_merk']+'</td>'+
									'<td style="text-align:center">'+
									'<input type="hidden" class="idbarang" value="'+data[i]['barang_id']+'">'+
									'<a href="#" class="cekdetbarang"><i class="glyphicon glyphicon-check"></i></a></td>'+
								'</tr>'
							)
						};
					}
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#tbodybarangdetail').on('click', 'tr td a.cekdetbarang', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .idbarang').val();
			var nama = $(this).closest('tr').find('td').eq(0).text();
			$('#idbarang_det').val(id);
			$('#namabarangdetail').val(nama);
			$('#satBarangDet').val($(this).closest('tr').find('td').eq(1).text());
			$('#merkBarangDet').val($(this).closest('tr').find('td').eq(2).text());
			$('#nmDetBarang').modal('hide');

			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>logistik/homegudangbarang/searchdetailbarang/" + id,
				success: function (data) {
					console.log(data);
					$('#tbodydetailbarang').empty();
					var t = $('#tabeldetailbarang').DataTable();
					t.clear().draw();
					
						for (var i = 0; i < data.length; i++) {
							var asu = '<input type="hidden" class="barang_detail_id" value="'+data[i]['barang_detail_id']+'">'+
									'<a href="#" class="edLogBarang" id="edDetLogBarang"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'
							t.row.add([
								data[i]['tahun_pengadaan'],
								data[i]['sumber_dana'],									
								data[i]['stok'],
								asu
							]).draw();
						
						};
					
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#smpanDetBrg').on('click', function (e) {
			e.preventDefault();
			var item = {};
			item['barang_id'] = $('#idbarang_det').val();
			item['tahun_pengadaan'] = $('#selectTahBarang').find('option:selected').val();
			item['sumber_dana'] = $("#selectSumDanaBarang").find('option:selected').val();
			item['stok'] = $('#jmlDetBarang').val();

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>logistik/homegudangbarang/add_detail_barang",
				success: function (data) {
					console.log(data);
					if (data['error'] == 'n') {
						resetbarangdetail();
					}
					alert(data['message']);
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#tbodydetailbarang').on('click', 'tr td a.edLogBarang', function (e) {
			e.preventDefault();
			$('#ubahDetBrg').show();
			$('#btnBatalDetBrg').show();
			$('#btnResetDetBrg').hide();
			$('#smpanDetBrg').hide();

			$('#idobat_detail_edit').val($(this).closest('tr').find('td .barang_detail_id').val());
			var tahun = $(this).closest('tr').find('td').eq(0).text();
			var sumber = $(this).closest('tr').find('td').eq(1).text();
			$("#selectTahBarang option[value='"+tahun+"']").attr("selected", "selected");
			$("#selectSumDanaBarang option[value='"+sumber+"']").attr("selected", "selected");
			$('#jmlDetBarang').val($(this).closest('tr').find('td').eq(2).text());
			$('#jmlDetBarang').prop('disabled', true);
		})

		$('#btnBatalDetBrg').on('click', function (w) {
			w.preventDefault();
			resetbarangdetail();
			$('#btnResetDetBrg').show();
			$('#smpanDetBrg').show();
			$('#ubahDetBrg').hide();
			$('#btnBatalDetBrg').hide();
		})

		$('#btnResetDetBrg').on('click', function (e) {
			e.preventDefault();
			resetbarangdetail();
			$('#namabarangdetail').val('');
			$('#satBarangDet').val('');
			$('#merkBarangDet').val('');
			$('#tbodydetailbarang').empty('');
			$('#tbodydetailbarang').append('<tr><td style="text-align:center" colspan="4">Belum ada detail, silahkan tambah detail</td></tr>');
		})

		$('#ubahDetBrg').on('click', function (e) {
			e.preventDefault();
			//apa yg mau diubah?
			var item = {};
			var barang_detail_id = $('#idobat_detail_edit').val();
			item['barang_id'] = $('#idbarang_det').val();
			item['tahun_pengadaan'] = $('#selectTahBarang').find('option:selected').val();
			item['sumber_dana'] = $("#selectSumDanaBarang").find('option:selected').val();
			item['stok'] = $('#jmlDetBarang').val();

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>logistik/homegudangbarang/edit_detail_barang/" + barang_detail_id,
				success: function (data) {
					console.log(data);
					if (data['error'] == 'n') {
						resetbarangdetail();
					}
					alert(data['message']);
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		/*akhir master barang*/

		/*inventori barang*/
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
			    	url: "<?php echo base_url()?>logistik/homegudangbarang/input_in_out",
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

		$("#tbodyinventoribarang").on('click', 'tr td a.detailinvenbarang', function (e) {
			var id = $(this).closest('tr').find('td .barang_detail_inout').val();

			 $.ajax({
		    	type: "POST",
		    	url: "<?php echo base_url()?>logistik/homegudangbarang/get_detail_inventori/" + id,
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
		/*akhir inventori*/

		/*pengadaan*/
		$('#searchbarangpengadaan').submit(function (e) {
			e.preventDefault();
			var katakunci = $('#katakuncibrgpengadaan').val();
			//return false;
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>logistik/homegudangbarang/search_barang/" + katakunci,
				success: function (data) {
					console.log(data);
					if (data.length > 0) {
						$('#tbodycaribarangpengadaan').empty();
						for (var i = 0; i < data.length; i++) {
							$('#tbodycaribarangpengadaan').append(
								'<tr>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td>'+data[i]['nama_merk']+'</td>'+
									'<td>'+data[i]['nama_penyedia']+'</td>'+
									'<td style="display:none">'+data[i]['harga']+'</td>'+
									'<td style="display:none">'+data[i]['penyedia_id']+'</td>'+
									'<td style="text-align:center">'+
									'<input type="hidden" class="idbrgpengadaan" value="'+data[i]['barang_id']+'">'+
									'<a href="#" class ="addNewAdabarang"><i class="glyphicon glyphicon-check"></i></a></td>'+
								'</tr>'
							)
						};
					}
				},
				error: function (data) {
					console.log(data);
				}
			}) 
		})

		$('#tbodycaribarangpengadaan').on('click', 'tr td a.addNewAdabarang', function (e) {
			e.preventDefault();
			var nama = $(this).closest('tr').find('td').eq(0).text();
			var penyedia = $(this).closest('tr').find('td').eq(1).text();
			var satuan = $(this).closest('tr').find('td').eq(2).text();
			var harga = $(this).closest('tr').find('td').eq(3).text();
			var penyedia_id = $(this).closest('tr').find('td').eq(4).text();
			var barang_id = $(this).closest('tr').find('td .idbrgpengadaan').val();

			$('#addinputAdaBarang').find('tr.kosong').remove();
			var newtabel = '<tr><td>'+nama+'</td>'+
							'<td>'+penyedia+'</td>'+
							'<td><input type="text" class="numberrequired form-control qtypengadaan"></td>'+
							'<td>'+satuan+'</td>'+
							'<td>'+harga+'</td>'+
							'<td>0</td>'+
							'<td style="text-align:center;width:5%;"><a href="#" class="removeRow" ><i class="glyphicon glyphicon-remove"></i></a></td>'+
							'<td style="display:none">'+barang_id+'</td><td style="display:none">'+penyedia_id+'</td></tr>';
			$('#addinputAdaBarang').append(newtabel);
		})

		$('#addinputAdaBarang').on('change', 'tr td .qtypengadaan', function (e) {
			e.preventDefault();
			var qty = $(this).val();
			var harga = $(this).closest('tr').find('td').eq(4).text();
			$(this).closest('tr').find('td').eq(5).text(Number(qty) * Number(harga));
		})

		$('#submirencanapengadaan').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['no_pengadaan'] = $('#nmrAdaanGudang').val();
			item['tanggal']=$('#tgladaanbarang').val();
			item['keterangan']=$('#ketAdaan').val();

			var data = [];
		    $('#addinputAdaBarang').find('tr').each(function (rowIndex, r) {
		        var cols = [];
		        $(this).find('td').each(function (colIndex, c) {
		            cols.push(c.textContent);
		        });
		        $(this).find('td input[type=text]').each(function (colIndex, c) {
		            cols.push(c.value);
		        });
		        data.push(cols);
		    });

			item['data'] = data;
			if (data.length == 0) {
		    	alert('tidak ada detail');
		    	return false;
		    }

		    var a = confirm('data akan diproses?');
			if (a == true) {
				$.ajax({
			    	type: "POST",
			    	data: item,
			    	url: "<?php echo base_url()?>logistik/homegudangbarang/submit_rencana_pengadaan",
			    	success:  function (data) {
			    		console.log(data);
			    	},
			    	error: function (data) {

			    	}
			    })
			}
		})

		/*inventori*/

		/*rencana pengadaan*/
		$('#tbodyriwayatpengadaan').on('click', 'tr td .viewdetailrencana', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .rencana_id_riwayat').val();
			$('#nomorpengadaanriwayat').html($(this).closest('tr').find('td').eq(1).text());
			$('#tanggalpengadaanriwayat').html($(this).closest('tr').find('td').eq(2).text());
			$('#petugaspengadaanriwayat').html($(this).closest('tr').find('td').eq(3).text());
			$('#statuspengadaanriwayat').html($(this).closest('tr').find('td').eq(5).text());

			$.ajax({
		    	type: "POST",
		    	url: "<?php echo base_url()?>logistik/homegudangbarang/get_detail_riwayatpengadaan/" + id,
		    	success:  function (data) {
		    		console.log(data);
		    		if (data.length > 0) {
		    			$('#detailriwayatpengadaan').empty();
		    			for (var i = 0; i < data.length; i++) {
		    				$('#detailriwayatpengadaan').append(
			    				'<tr><td>'+data[i]['nama']+'</td>'+
			    				'<td>'+data[i]['nama_penyedia']+'</td>'+
			    				'<td>'+data[i]['jumlah']+'</td>'+
			    				'<td>'+data[i]['satuan']+'</td>'+
			    				'<td>'+data[i]['harga']+'</td>'+
			    				'<td>'+data[i]['total']+'</td>'+
			    				'</tr>'
			    			)	
		    			};
		    		};
		    	},
		    	error: function (data) {

		    	}
		    })
		})
		/*akhir rencana pengadaan*/

		/*penerimaan barang*/
		$('#penyediapenerimaan').submit(function (e) {
			e.preventDefault();
			var katakunci = $('#katakuncipenyediapenerimaan').val();
			//return false;
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>logistik/homegudangbarang/search_penyediabarang/" + katakunci,
				success: function (data) {
					console.log(data);
					if (data.length > 0) {
						$('#tbodypenyediapenerimaan').empty();
						for (var i = 0; i < data.length; i++) {
							$('#tbodypenyediapenerimaan').append(
								'<tr>'+
									'<td>'+data[i]['nama_penyedia']+'</td>'+
									'<td style="text-align:center">'+
									'<input type="hidden" class="idpenyedia" value="'+data[i]['penyedia_id']+'">'+
									'<a href="#" class="cekpenyedia"><i class="glyphicon glyphicon-check"></i></a></td>'+
								'</tr>'
							)
						};
					}
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#tbodypenyediapenerimaan').on('click', 'tr td a.cekpenyedia', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .idpenyedia').val();
			var nama = $(this).closest('tr').find('td').eq(0).text();
			$('#id_penyediaTerimaBrg').val(id);
			$('#penyediaTerimaBrg').val(nama);
			$('#penyediapenerimaan').modal('hide');
		})

		$('#caribarangpenerimaan').submit(function (e) {
			e.preventDefault();
			var katakunci = $('#katakuncibarangpenerimaan').val();
			var penyedia_id = $('#id_penyediaTerimaBrg').val();
			if (penyedia_id == '') {alert('pilih penyedia/distributor terlebih dahulu');return false};
			
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>logistik/homegudangbarang/search_barangbypenyedia/" + katakunci+"/"+penyedia_id,
				success: function (data) {
					console.log(data);
					$('#tbodybarangpenerimaan').empty();
					if (data.length > 0) {
						for (var i = 0; i < data.length; i++) {
							$('#tbodybarangpenerimaan').append(
								'<tr>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td>'+data[i]['satuan']+'</td>'+
									'<td>'+data[i]['nama_merk']+'</td>'+
									'<td style="display:none">'+data[i]['harga']+'</td>'+
									'<td style="display:none">'+data[i]['penyedia_id']+'</td>'+
									'<td style="display:none">'+data[i]['tahun_pengadaan']+'</td>'+
									'<td style="text-align:center">'+
									'<input type="hidden" class="idbrgpenerimaan" value="'+data[i]['brg_id']+'">'+
									'<a href="#" class ="addNewAdabarangterima"><i class="glyphicon glyphicon-check"></i></a></td>'+
								'</tr>'
							)
						};
					}
				},
				error: function (data) {
					console.log(data);
				}
			}) 
		})

		$('#tbodybarangpenerimaan').on('click', 'tr td a.addNewAdabarangterima', function (e) {
			e.preventDefault();
			var nama = $(this).closest('tr').find('td').eq(0).text();
			var satuan = $(this).closest('tr').find('td').eq(1).text();
			var harga = $(this).closest('tr').find('td').eq(3).text();
			var penyedia_id = $(this).closest('tr').find('td').eq(4).text();
			var tahun = $(this).closest('tr').find('td').eq(5).text();
			var barang_id = $(this).closest('tr').find('td .idbrgpenerimaan').val();

			$('#addinputterima').find('tr.kosong').remove();
			var newtabel = '<tr><td>'+nama+'</td>'+
							'<td>'+satuan+'</td>'+
							'<td><input type="text" class="numberrequired form-control qtypenerimaan"></td>'+
							'<td><input type="text" class="numberrequired form-control diskonpenerimaan"></td>'+
							'<td>'+harga+'</td>'+
							'<td>0</td>'+
							'<td style="text-align:center;width:5%;"><a href="#" class="removeRow" ><i class="glyphicon glyphicon-remove"></i></a></td>'+
							'<td style="display:none">'+barang_id+'</td><td style="display:none">'+tahun+'</td></tr>';
			$('#addinputterima').append(newtabel);
			hitung_penerimaan();
		})

		$('#addinputterima').on('change', 'tr td .qtypenerimaan', function (e) {
			var a = $(this).closest('tr').find('td .diskonpenerimaan').val();
			var c = $(this).closest('tr').find('td').eq(4).text();
			var b = $(this).val();
			var total = Number(c) * Number(b);
			var hasilakhir =  total - (total * Number(a) / 100);
			$(this).closest('tr').find('td').eq(5).html(hasilakhir);
			hitung_penerimaan();
		})

		$('#addinputterima').on('change', 'tr td .diskonpenerimaan', function (e) {
			var a = $(this).closest('tr').find('td .qtypenerimaan').val();
			var c = $(this).closest('tr').find('td').eq(4).text();
			var b = $(this).val();
			var total = Number(c) * Number(a);
			var hasilakhir =  total - (total * Number(b) / 100);
			$(this).closest('tr').find('td').eq(5).html(hasilakhir);
			hitung_penerimaan();
		})
		
		//kalo hapus row
		$('#addinputterima').on('click', 'tr td a.removeRow', function (e) {
			e.preventDefault();
			$(this).closest('tr').remove();

			hitung_penerimaan();
		})

		$('#selectpotongan').on('change', function (e) {
			e.preventDefault();
			hitung_penerimaan();			
		})

		$('#potongan').on('change', function (e) {
			e.preventDefault();
			hitung_penerimaan();			
		})

		$('#ppn').on('change', function (e) {
			e.preventDefault();
			hitung_penerimaan();			
		})

		$('#submitpenerimaanbarang').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['nomor_penerimaan'] = $('#nmrTerimaBrg').val();
			item['penyedia_id'] = $('#id_penyediaTerimaBrg').val();
			item['jenis_dana'] = $('#sumDanaBarangTerima').find('option:selected').val();
			item['keterangan'] = $('#keteranganpenerimaan').val();
			item['tanggal'] = $('#tglTerimaBarang').val();
			//item['tanggal_faktur'] = format_date3($('#tglFakturObat').val());

			//loop dari tabel
			$('#addinputterima').find('tr.kosong').remove();
			var data = hitung_penerimaan();
			if (data.length == 0) {
				alert('isi detail coeg');
				$('#addinputterima').append('<tr class="kosong"><td colspan="7" style="text-align:center">tambah penerimaan barang</td></tr>');
				return false;
			};

		    item['data'] = data;
		    item['jenispotongan'] = $('#selectpotongan').find('option:selected').val();
			item['potongan'] =  Number($('#potongan').val());
			item['ppn'] =  Number($('#ppn').val());
			item['grandtotal'] = $('#grandtotal').text();
			item['subtotal'] = $('#subtotalterima').text();

			//console.log(item);return false;
			
		    $.ajax({
		    	type: 'POST',
		    	data: item,
		    	url: "<?php echo base_url()?>logistik/homegudangbarang/add_penerimaan",
		    	success: function (data) {
		    		//console.log(data['message']); return false;
		    		alert(data['message']);
		    		if (data['error'] === 'n') {
		    			//reset_penerimaan();
		    		} 
		    	},
		    	error: function (data) {
		    		
		    	}
		    })
		})

		/*akhir penerimaan barang*/

		/*persetujuan permintaan*/
		$('#tbodypersetujuanpermintaan').on('click', 'tr td .cekdetailpersetujuan', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .detail_persetujuan_id').val(); //barang_permintaan_id
			$("#detail_persetujuan_idconfirm").val(id);
			$('#dept_id_detail_persetujuan').val($(this).closest('tr').find('td .dept_id_persetujuan').val());
			$.ajax({
		    	type: 'POST',
		    	url: "<?php echo base_url()?>logistik/homegudangbarang/get_detailpersetujuan/" + id,
		    	success: function (data) {
		    		console.log(data);
		    		if (data.length > 0) {
		    			$('#tbodydetailpersetujuan').empty();
		    			for (var i = 0; i < data.length; i++) {
		    				$('#tbodydetailpersetujuan').append(
		    					'<tr>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td style="text-align:left">'+data[i]['satuan']+'</td>'+
									'<td style="text-align:left">'+data[i]['nama_merk']+'</td>'+
									'<td style="text-align:right">-</td>'+
									'<td style="text-align:right">'+data[i]['stok']+'</td>'+
									'<td style="text-align:right">'+data[i]['jumlah_request']+'</td>'+
									'<td style="text-align:right;width:100px;"><input type="text" class="form-control" name="qty1"></td>'+
									'<td style="text-align:right">'+data[i]['harga']+'</td>'+
									'<td style="display:none">'+data[i]['barang_stok_id']+'</td>'+
									'<td style="display:none">'+data[i]['barang_detail_id']+'</td>'+
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

		$('#submitpersetujuan').submit(function (e) {
			e.preventDefault();
			
			var data = [];
			$('#tbodydetailpersetujuan').find('tr').each(function (rowIndex, r) {
		       var cols = []; 
		       $(this).find('td').each(function (colIndex, c) {
		            cols.push(c.textContent);
		        });
		        $(this).find('td input[type=text]').each(function (colIndex, c) {
		            cols.push(c.value);
		        });
		        data.push(cols);
		    });

		    var item ={};
		    item['data'] = data;
		    item['id'] = $('#detail_persetujuan_idconfirm').val(); //barang_permintaan_id
		    item['dept_id_peminta'] = $('#dept_id_detail_persetujuan').val();

		    $.ajax({
		    	type: 'POST',
		    	data: item,
		    	url: "<?php echo base_url()?>logistik/homegudangbarang/submit_persetujuanpermintaan",
		    	success: function (data) {
		    		console.log(data);
		    		alert(data['message']);
		    	},
		    	error: function (data) {
		    		console.log(data);
		    	}
		    })
		    $('#cek').modal('hide');
		})

		$('#tbodyriwayatpersetujuan').on('click', 'tr td .cekdetailpersetujuan', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .detail_persetujuan_id').val();
			$('#detail_persetujuan_idconfirm').val(id);

			$.ajax({
		    	type: 'POST',
		    	url: "<?php echo base_url()?>logistik/homegudangbarang/get_detailpersetujuan/" + id,
		    	success: function (data) {
		    		console.log(data);
		    		if (data.length > 0) {
		    			$('#tbodydetailriwayatpersetujuan').empty();
		    			for (var i = 0; i < data.length; i++) {
		    				$('#tbodydetailriwayatpersetujuan').append(
		    					'<tr>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td style="text-align:left">'+data[i]['satuan']+'</td>'+
									'<td style="text-align:left">'+data[i]['nama_merk']+'</td>'+
									'<td style="text-align:right">'+data[i]['stok']+'</td>'+
									'<td style="text-align:right">'+data[i]['jumlah_request']+'</td>'+
									'<td style="text-align:right;width:100px;">'+data[i]['jumlah_approved']+'</td>'+
									'<td style="text-align:right">'+data[i]['harga']+'</td>'+
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
		
		/*akhir persetujuan permintaan*/

		/*opname barang*/
		$('.round-button-tes').on('click', function (e) {
			e.preventDefault();
			var cari = $(this).text();

			$.ajax({
				type: "POST",
				url: "<?php echo base_url() ?>logistik/homegudangbarang/search_barang_opnamealpha/" + cari,
				success: function (data) {
					console.log(data);
					filter_opname(data);
				},
				error: function (data) {
					// body...
				}
			})
		})

		$('#filteropnamebyname').submit(function (e) {
			e.preventDefault();
			var cari = $('#namabarangopname').val();

			$.ajax({
				type: "POST",
				url: "<?php echo base_url() ?>logistik/homegudangbarang/search_barang_opnamebyname/" + cari,
				success: function (data) {
					console.log(data);
					filter_opname(data);
				},
				error: function (data) {
					// body...
				}
			})
		})

		$("a.editInvenBut").hide();
		$('a.edIvenBatal').hide();
		$('.editInven').click(function (e) {
			e.preventDefault();
		})
		var asli = '';
		$("#tabelopnamebarang").on('click','tr td a.edIven',function(e){
			e.preventDefault();
			var a = $(this).closest('tr').find('td .stokfisikopname').text();
			var b = $(this).closest('tr').find('td.stoksistemopname').text();
			asli = a;			
			$(this).closest('tr').find('td .stokfisikopname').replaceWith(
					'<input type="text" style="width:80px;" class="form-control editstokfisikopname" value="'+a+'">'
				);

			$(this).closest('tr').find('td a.edIven').hide();
			$(this).closest('tr').find('td a.editInvenBut').show();
			$(this).closest('tr').find('td a.edIvenBatal').show();

			$("#tabelopnamebarang").on('change','tr td .editstokfisikopname',function(e){
				var ubah = $(this).val();
				var harga = $(this).closest('tr').find('td').eq(7).text();
				var selisih = Number(ubah) - Number(b);
				$(this).closest('tr').find('td').eq(8).html(selisih);
				$(this).closest('tr').find('td').eq(9).html(Number(harga) * selisih);
			})
		});

		$("#tabelopnamebarang").on('click','tr td a.edIvenBatal', function(e){
			e.preventDefault();
			var b = $(this).closest('tr').find('td.stoksistemopname').text();
			$(this).closest('tr').find('td.stoksistemopname').html(b);
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
				
		$("#tabelopnamebarang").on('click','tr td a.editInvenBut', function(e){
			e.preventDefault();

			var a = $(this).closest('tr').find('td .editstokfisikopname').val();
			$(this).closest('tr').find('td .editstokfisikopname').replaceWith(
					'<span class="stokfisikopname">'+a+'</span>'
				);
			$(this).closest('tr').find('td a.edIven').show();
			$(this).closest('tr').find('td a.editInvenBut').hide();
			$(this).closest('tr').find('td a.edIvenBatal').hide();

			var stok = $(this).closest('tr').find('td .stokfisikopname').text();
			var tanggal = $('#tanggalasuan').val();
			if (tanggal == '') {
				alert('pilih tanggal acuan');
				$('#tanggalasuan').focus();
				return false;
			};

			var d = confirm('proses disimpan ?');
			if (d == true) {
				var item = {};
				item['tgl_acuan'] = tanggal;
				item['stok'] = stok;
				item['barang_detail_id'] = $(this).closest('tr').find('td .barang_detail_id').val();
				item['harga_jual'] = $(this).closest('tr').find('td').eq(7).text();
				//console.log(item); return false;
				$.ajax({
					type: "POST",
					data: item,
					url: "<?php echo base_url()?>logistik/homegudangbarang/opname_process",
					success: function (data) {
						console.log(data);
						alert(data['message']);
					}
				})
			} else{
				alert('data tidak berubah')
			};
		});
		/*akhir opname barang*/

		/*pengadaan gudang obat*/
		$('#tbodypengadaanobat').on('click', 'tr td a.view_detail_adaan', function (e) {
			e.preventDefault();
			var cols = [];
	        $(this).closest('tr').find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });
	        var pengadaan_id = $(this).closest('tr').find('td .obat_rencana_id').val();

			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>farmasi/homegudangobat/get_detail_rencana/" + pengadaan_id,
				success: function (data) {
					$('#nomor_obat_rencana').text(cols[1]);
					$('#tanggal_rencana').text(cols[2]);
					$('#petugas_rencana').text(cols[3]);
					/*$('#keterangan_rencana').text(cols[4]);
					$('#status_rencana').text(cols[5]);*/

					$('#tbody_detailpengadaan').empty();
					if (data.length > 0) {
						for (var i = 0; i < data.length; i++) {
							$('#tbody_detailpengadaan').append(
								'<tr>'+
									'<td>'+(Number(i)+1)+'</td>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td>'+data[i]['nama_penyedia']+'</td>'+
									'<td>'+data[i]['jumlah']+'</td>'+
									'<td>'+data[i]['satuan']+'</td>'+
									'<td>'+data[i]['hps']+'</td>'+
									'<td>'+data[i]['total']+'</td>'+
								'</tr>'
							);
						};
					} else{
						$('#tbody_detailpengadaan').append(
							'<tr>'+
								'<td colspan="7" style="text-align:center"> Tidak ada detail</td>'+
							'</tr>'
						);
					};
				},
				error: function (data) {
					
				}
			})
		})
		/*akhir pengadaan gudangobat*/
	})

	function filter_opname (data) {
		$('#tbody_opname').empty();
		
			var t = $('#tabelopnamebarang').DataTable();

			t.clear().draw();
			for(var i = 0; i<data.length; i++){
				if (data[i]['stok_fisik'] == null) {
					data[i]['stok_fisik'] = data[i]['stok'];
				}
				var tanggal = (data[i]['tgl_opname'] == null ? data[i]['tanggal_stok'] : data[i]['tgl_opname']);
				var tgl = format_date(tanggal);
				var span = '<span class="stokfisikopname">'+data[i]['stok_fisik']+'</span>'
				var asu = '<a href="#" class="edIvenBatal" id="status"><i class="glyphicon glyphicon-floppy-remove" data-toggle="tooltip" data-placement="top" title="Batal"></i></a>'+
						'<a href="#" class="edIven" id="status"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Ubah"></i></a>'+
						'<a href="#" class="editInvenBut"><i class="glyphicon glyphicon-floppy-save" data-toggle="tooltip" data-placement="top" title="Simpan"></i></a>'+
						'<input type="hidden" class="barang_detail_id" value="'+data[i]['barang_process']+'">'
				t.row.add([
					(Number(i) + 1),
				 	tgl,
					data[i]['nama'],
					data[i]['nama_merk'],
					data[i]['sumber_dana'],
					data[i]['stok'], 
					span,
					data[i]['harga_jual'],
					(data[i]['stok_fisik'] - data[i]['stok']),
					((data[i]['stok_fisik'] - data[i]['stok']) * data[i]['harga_jual']),
					asu,
				
				]).draw();
			}
			$("a.editInvenBut").hide();
			$('a.edIvenBatal').hide();
		
	}

	function hitung_penerimaan () {
		var data = [];
	    $('#addinputterima').find('tr').each(function (rowIndex, r) {
	        var cols = [];
	        $(this).find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });
	       	$(this).find('td input[type=text]').each(function (colIndex, c) {
	            cols.push(c.value);
	        });
	        data.push(cols);
	    });

	    var jumlah = 0;
		for (var i = data.length - 1; i >= 0; i--) {
			jumlah += Number(data[i][5]);
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

		if (ppn!='')
			$('#ppntotal').text((Number(grandtotal) * Number(ppn) / 100));
		else
			$('#ppntotal').text('0');
		grandtotal += (grandtotal * ppn / 100);

		$('#grandtotal').text(grandtotal);
		$('#subtotalterima').text(jumlah);

	    return data;
	}

	function resetbarang () {
		$('#nmBarang').val('');
		$('#namaMerk').val('');
		$("#selectSatBarang option[value='']").attr("selected", "selected");
		$('#stokmin').val('');
		$("#selectGrpBarang option[value='']").attr("selected", "selected");
		$('#hgDasarBarang').val('');
		$('input:radio[name=hd][value="0"]').prop("checked", true);
	}
	function resetbarangdetail () {
		$("#selectSumDanaBarang option[value='']").attr("selected", "selected");
		$("#selectTahBarang option[value='<?php echo date('Y') ?>']").attr("selected", "selected");
		$('#jmlDetBarang').val('');
		$('#idobat_detail_edit').val('');
	}
</script>