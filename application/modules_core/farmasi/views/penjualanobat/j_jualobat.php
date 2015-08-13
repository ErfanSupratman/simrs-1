<script type="text/javascript">
	$(document).ready(function () {
		$('#cariapoteker').submit(function(event){
			var item ={};
			item['katakunci'] = $('#katakunciapoteker').val();
			event.preventDefault();

			$.ajax({
				type:'POST',
				data: item,
				url:"<?php echo base_url()?>farmasi/homepenjualanobat/search_apoteker",
				success:function(data){
					console.log(data);
					$('#tbodyapoteker').empty();
 					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							var nama = data[i]['nama_petugas'],
								id = data[i]['petugas_id'];

							$("#tbodyapoteker").append(
								'<tr>'+
									'<td>'+nama+'</td>'+
									'<td style="text-align:center">'+
										'<a href="#" class="inputapoteker"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i><a>'+
										'<input type="hidden" class="selectedapoteker" value="'+id+'">'+
									'</td>'+
								'</tr>'
							);
						}
					}else{
						$('#tbodyapoteker').empty();
						$('#tbodyapoteker').append(
							'<tr>'+
					 			'<td colspan="2"><center>Data Tidak Ditemukan</center></td>'+
					 		'</tr>'
						);
					}
				},
				error:function(data){

				}
			});
		});

		$('#tbodyapoteker').on('click', 'tr td a.inputapoteker', function (e) {
			e.preventDefault();
			$('#apoteker').val($(this).closest('tr').find('td').eq(0).text());
			$('#re_id_apoteker').val($(this).closest('tr').find('td .selectedapoteker').val());
			$('#modApoteker').modal('hide');
		})

		/*racikan*/
		$('#cariobatracik').submit(function (e) {
			e.preventDefault();
		})

		$('#komposisiRacik').keyup(function (e) {
			e.preventDefault();
			var item = {};
			item['katakunci'] = $(this).val();

			append_totable (item, '#tbodyobatracik');
		})

		$('#tbodyobatracik').on('click', 'tr td a.addNewKomposisi', function (e) {
			e.preventDefault();
			var nama = $(this).closest('tr').find('td p.nmObatRacik').text()
			var obat_dept_id = $(this).closest('tr').find('td .obat_dept_id_jual').val();
			var harga_jual = $(this).closest('tr').find('td .hrgaObatRacik').text();
			var newrow = '<tr>'+
							'<td>'+nama+'</td>'+
							'<td width="20%"><a href="#" class="editableform editable-click qtyracik" data-type="text" data-pk="1" data-original-title="Jumlah">1</a></td>'+
							'<td style="display:none" class="obat_dept_id_select">'+obat_dept_id+'</td>'+
							'<td style="display:none" class="harga_select">'+harga_jual+'</td>'+
							'<td width="20%"><a href="#" class="removeRow"><i class="glyphicon glyphicon-remove"></i></a></td>'+
						'</tr>';
			$('#addInputKom').append(newrow);
			$('.qtyracik').editable({
				success: function(response, newValue) {
					var dethis = $(this);
				}		
			});
		})

		var total_obat = 0;
		var data = [];
		$('#tmbhObatRacik').on('click', function (e) {
			e.preventDefault();
		    var jenis = $('#selectObatRacikan').find('option:selected').val();
		    var satuan = $('#selectSatObatRacikan').find('option:selected').val();
		    var jlh = $('#jmRacik').val();
		    if(jenis == '') {alert('pilih jenis');$('#selectObatRacikan').focus();return false;}
		    if(jlh == '0') {alert('jumlah harus lebih dari 0');$('#jmRacik').focus();return false;}
		    if(satuan == '') {alert('pilih satuan');$('#selectSatObatRacikan').focus();return false;}
		    if($('#addInputKom').children().length == 0){
				alert('tambah obat terlebih dahulu');$('#komposisiRacik').focus();return false;
			}
			var obat = '';
			var id_s = '';
			var jlh_s = '';
			var harga_s = 0;
			var jlh_each = '';
		    $('#addInputKom').find('tr').each(function (rowIndex, r) {
		        var cols = [];
		        $(this).find('td').each(function (colIndex, c) {
		            cols.push(c.textContent);
		        });
		        obat += cols[0] + "<br>";
		        id_s += cols[2] + ',';
		        jlh_s += cols[1]+ ',';		       
		        jlh_each += cols[3]+ ',';
		        harga_s += (Number(cols[3]) * Number(cols[1]));
		        data.push(cols);
		    });
		    
		    var t = $('#tablesubmitbeliobat').DataTable();
		    var sp = '<span style="word-wrap: break-word;min-width: 160px;max-width: 160px;white-space:normal;">'+obat+'</span>'
		    var last = '<center><a href="#" class="removeRow2"><i class="glyphicon glyphicon-remove"></i></a></center>'+
		    			'<input type="hidden" class="idasu" value="'+id_s+'">'+
		    			'<input type="hidden" class="jlhasu" value="'+jlh_s+'">'+
		    			'<input type="hidden" class="jlhsemua" value="'+(data.length)+'">'+
		    			'<input type="hidden" class="jlhasuasu" value="'+jlh_each+'">'+
		    			'<input type="hidden" class="satuanasu" value="'+satuan+'">'
		    t.row.add([
			    	jenis,
			    	sp,
			    	'<a href="#" class="editableform editable-click jmlracik" data-type="text" data-pk="1" data-original-title="Jumlah">'+jlh+'</a>',
			    	satuan,
			    	harga_s,
			    	'<a href="#" class="editableform editable-click embalaseracik" data-type="text" data-pk="1" data-original-title="Jumlah">0</a>',
			    	'<a href="#" class="editableform editable-click jfracik" data-type="text" data-pk="1" data-original-title="Jumlah">0</a>',
			    	'<a href="#" class="editableform editable-click b_tambahanracik" data-type="text" data-pk="1" data-original-title="Jumlah">0</a>',
			    	harga_s,
			    	last,
			    	"da"
		    	]).draw();
		   $('.removeRow2').on('click',function (e) {
		    	e.preventDefault();
		    	t.row( $(this).parents('tr') )
			        .remove()
			        .draw();
			    hitung_grand_total();
		    })

		   //hitung
		   hitung_grand_total();
		    $('.jmlracik').editable({
		    	success: function (response, newValue) {
		    		var dethis = $(this);
		    		jmlracik(dethis,newValue);
		    	}
		    });
		    $('.embalaseracik').editable({
				success: function(response, newValue) {
					var dethis = $(this);
					embalaseracik(dethis,newValue);
				}		
			});
		    $('.jfracik').editable({
		    	success:function (response, newValue) {
		    		var dethis = $(this);
		    		jfracik(dethis,newValue);
		    	}
		    });
		    $('.b_tambahanracik').editable({
		    	success:function (response, newValue) {
		    		var dethis = $(this);
		    		b_tambahanracik(dethis,newValue);
		    	}
		    });
		    $('#modObatRacikan').modal('hide');
		})

		/*akhir racikan*/

		/*non-racikan*/
		$('.jmlnonracik').editable({
			success:function (response, newValue) {
				var dethis = $(this);
				jmlnonracik(dethis,newValue);
			}
		});
	    $('.embalasenonracik').editable({
	    	success:function (response, newValue) {
	    		var dethis = $(this);
				embalasenonracik(dethis,newValue);
			}
	    });
	    $('.jfnonracik').editable({
	    	success:function (response, newValue) {
	    		var dethis = $(this);
				jfnonracik(dethis,newValue);
			}
	    });
	    $('.b_tambahannonracik').editable({
	    	success:function (response, newValue) {
	    		var dethis = $(this);
				b_tambahannonracik(dethis,newValue);
			}
	    });		    
		$('#formnonracik').submit(function (e) {
			e.preventDefault();
		})

		$('#komposisiNonRacik').keyup(function (e) {
			e.preventDefault();
			var item = {};
			item['katakunci'] = $(this).val();

			append_totable (item, '#tbodyobatnonracik');
		})

		$('#tbodyobatnonracik').on('click', 'tr td a.addNewKomposisi', function (e) {
			e.preventDefault();
			var nama = $(this).closest('tr').find('td p.nmObatRacik').text()
			var obat_dept_id = $(this).closest('tr').find('td .obat_dept_id_jual').val();
			var satuan = $(this).closest('tr').find('td .satRacikan').text();
			var harga_jual = $(this).closest('tr').find('td .hrgaObatRacik').text();
			var satuan_id = $(this).closest('tr').find('td .sat_id').val();
			var newrow = '<tr>'+
							'<td>'+nama+'</td>'+
							'<td width="20%"><a href="#" class="editableform editable-click qtyracik" data-type="text" data-pk="1" data-original-title="Jumlah">1</a></td>'+
							'<td style="display:none" class="obat_dept_id_select">'+obat_dept_id+'</td>'+
							'<td style="display:none" class="obat_dept_id_select">'+satuan+'</td>'+
							'<td style="display:none" class="obat_dept_id_select">'+harga_jual+'</td>'+
							'<td style="display:none" class="obat_dept_id_select">'+satuan_id+'</td>'+
							'<td width="20%"><a href="#" class="removeRow"><i class="glyphicon glyphicon-remove"></i></a></td>'+
						'</tr>';
			$('#addInputKom2').append(newrow);
			$('#addInputKom2 .qtyracik').editable({
				success: function(response, newValue) {
					var dethis = $(this);
				}		
			});
		})

		var non = [];
		$('#tmbhObatNonRacik').on('click',function (e) {
			e.preventDefault();
			if($('#addInputKom2').children().length == 0){
				alert('tambah obat terlebih dahulu');$('#komposisiNonRacik').focus();return false;
			}
			var t = $('#tablesubmitbeliobat').DataTable();
			$('#addInputKom2').find('tr').each(function (rowIndex, r) {
		        var col = [];
		        $(this).find('td').each(function (colIndex, c) {
		            col.push(c.textContent);
		        });
		        non.push(col);
		        var sp = '<span style="word-wrap: break-word;min-width: 160px;max-width: 160px;white-space:normal;">'+col[0]+'</span>'
			    var last = '<center><a href="#" class="removeRow2"><i class="glyphicon glyphicon-remove"></i></a></center>'+
			    			'<input type="hidden" class="idasu" value="'+col[2]+'">'+
			    			'<input type="hidden" class="jlhasu" value="'+col[1]+'">'+
			    			'<input type="hidden" class="jlhsemua" value="'+col[1]+'">'+
			    			'<input type="hidden" class="harga_sat" value="'+col[4]+'">'+
			    			'<input type="hidden" class="sat" value="'+col[5]+'">'
			    var h_jual = Number(col[1] * Number(col[4]));
			    t.row.add([
				    	'Non-Racikan',
				    	sp,
				    	'<a href="#" class="editableform editable-click jmlnonracik" data-type="text" data-pk="1" data-original-title="Jumlah">'+col[1]+'</a>',
				    	col[3],
				    	col[4],
				    	'<a href="#" class="editableform editable-click embalasenonracik" data-type="text" data-pk="1" data-original-title="Jumlah">0</a>',
				    	'<a href="#" class="editableform editable-click jfnonracik" data-type="text" data-pk="1" data-original-title="Jumlah">0</a>',
				    	'<a href="#" class="editableform editable-click b_tambahannonracik" data-type="text" data-pk="1" data-original-title="Jumlah">0</a>',
				    	h_jual,
				    	last,
				    	"da"
			    	]).draw();
			    $('.removeRow2').on('click',function (e) {
			    	e.preventDefault();
			    	t.row( $(this).parents('tr') )
				        .remove()
				        .draw();
				    hitung_grand_total();
			    })
		    });
			
			//hitung
			hitung_grand_total();
			$('.jmlnonracik').editable({
				success:function (response, newValue) {
					var dethis = $(this);
					jmlnonracik(dethis,newValue);
				}
			});
		    $('.embalasenonracik').editable({
		    	success:function (response, newValue) {
		    		var dethis = $(this);
					embalasenonracik(dethis,newValue);
				}
		    });
		    $('.jfnonracik').editable({
		    	success:function (response, newValue) {
		    		var dethis = $(this);
					jfnonracik(dethis,newValue);
				}
		    });
		    $('.b_tambahannonracik').editable({
		    	success:function (response, newValue) {
		    		var dethis = $(this);
					b_tambahannonracik(dethis,newValue);
				}
		    });		    
		   	$('#modObatNonRacikan').modal('hide');
		})

		$('#ppn').on('change', function (e) {
			hitung_grand_total();
		})

		$('#selectpotongan').on('change',function (e) {
			hitung_grand_total();
		})

		$('#potongan').on('change',function (e) {
			hitung_grand_total();
		})

		$('#submitpenjualanobat').submit(function (e) {
			e.preventDefault();
			if ($("#tablesubmitbeliobat").dataTable().fnSettings().aoData.length == 0){
                alert("Masukkan data obat");return false;
            }
            if ($('#re_id_apoteker').val() == '') {alert("pilih apoteker");$('#apoteker').focus();return false;};
			var item = {};
			hitung_diskon();
			item['visit_id'] = $('#re_visit_id').val();
			item['resep_id'] = $('#re_resep_id').val();
			item['kasir_id'] = $('#re_kasir_id').val();
			item['dokter_id'] = $('#re_dokter_id').val();
			item['cara_bayar'] = $('#re_cara_bayar').text();
			item['apoteker_id'] = $('#re_id_apoteker').val();
			item['subtotal'] = $('#subtotalobat').text();
			item['diskon'] = $('#potongan').val();
			item['ppn'] = $('#ppn').val();
			item['jenis_diskon'] = $('#selectpotongan').find('option:selected').val();
			item['grand_total'] = $('#hasilgrandtotal').text();
			
			var data = [];
			$('#tablesubmitbeliobat tbody').find('tr').each(function (rowIndex, r) {
				var cols = [];
	            $(this).find('td').each(function (colIndex, c) {
			        cols.push(c.textContent);
			    });
			    $(this).find('td input[type=hidden]').each(function (colIndex, c) {
			        cols.push(c.value);
			    });
			    data.push(cols);
	        });
	        item['data'] = data;
			//console.log(item);return false;
			var a = confirm('yakin disimpan? transaksi masih dapat diubah');
			if (a == false) {return false};
			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>farmasi/homepenjualanobat/submit_penjualan_obat",
				success: function (data) {
					alert('data berhasil disimpan');
					window.location = '<?php echo base_url() ?>farmasi/homekasirobat';
				},
				error: function (data) {
					console.log(data);
				}
			})
		})
		/*akhir non-racikan*/

	})

	function append_totable (item, tableName) {
		if (item['katakunci'] != '') {
			$.ajax({
				type:'POST',
				data: item,
				url:"<?php echo base_url()?>farmasi/homepenjualanobat/search_obat",
				success:function(data){
					console.log(data);
					$(tableName).empty();
 					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							$(tableName).append(
								'<tr>'+
									'<td>'+
										'<p class="nmObatRacik" style="font-weight:bold;font-size:15pt;margin-bottom:-10px;">'+data[i]['nama']+'</p>'+
										'<p style="margin-bottom:-10px;font-size:12pt;">'+
										'<label class="tglRacikan" >'+format_date(data[i]['tgl_kadaluarsa'])+' -&nbsp;</label>'+
										'<label class="satRacikan" style="font-style:italic">'+data[i]['satuan']+'</label></p>'+
										'<p style="margin-bottom:-10px;"><label style="font-size:12pt;">Stok :</label>'+
										'<label class="stokObatRacik" style="font-size:12pt;">'+data[i]['total_stok']+'</label></p><p>'+
										'<label style="font-size:12pt;">Harga :</label>'+
										'<label class="hrgaObatRacik" style="font-size:12pt;color:green;margin-bottom:-10px;">'+data[i]['harga_jual']+'</label></p>'+
										'<div class="pull-right" style="margin-top:-40px;margin-bottom:5px;">'+
											'<a href="#" class="addNewKomposisi" style="background:blue;color:white;padding-top:10px;padding-bottom:10px">'+
												'<i class="fa fa-plus" style="text-align:center;width:40px"></i></a>'+
										'</div>'+
										'<input type="hidden" class="obat_dept_id_jual" value="'+data[i]['obat_dept_id']+'">'+
										'<input type="hidden" class="sat_id" value="'+data[i]['satuan_id']+'">'+
									'</td>'+
								'</tr>'
							);
						}
					}else{
						$(tableName).empty();
						$(tableName).append(
							'<tr>'+
					 			'<td><center>Data Tidak Ditemukan</center></td>'+
					 		'</tr>'
						);
					}
				},
				error:function(data){
					console.log(data);
				}
			});
		}else{
			$(tableName).empty();
			$(tableName).append(
				'<tr>'+
		 			'<td><center>Cari Komposisi</center></td>'+
		 		'</tr>'
			);
		}
	}

	function hitung_grand_total () {
		if ($("#tablesubmitbeliobat").dataTable().fnSettings().aoData.length == 0){
            $('#hasilppn').text('0');$('#subtotalobat').text('0');
			$('#hasilgrandtotal').text('0');;return false;
        }
		var subtotal = 0;
		var data = [];
		$('#tablesubmitbeliobat tbody').find('tr').each(function (rowIndex, r) {
			var cols = [];
            $(this).find('td').each(function (colIndex, c) {
		        cols.push(c.textContent);
		    });
		    data.push(cols);
            subtotal += Number(cols[8]);
        });
		/*var potonganby = $('#selectpotongan').find('option:selected').val();
		var potongan = $('#potongan').val();*/
		var ppn = $('#ppn').val();

		$('#subtotalobat').text(subtotal);
		var diskon = hitung_diskon();
		var temp = Number(subtotal) - Number(diskon);
		var ppn_hasil = Number(ppn) * (Number(temp) / 100);
		var grandtotal = temp + ppn_hasil;

		$('#hasilppn').text(ppn_hasil);
		$('#hasilgrandtotal').text(grandtotal);
		return grandtotal;
	}

	function hitung_diskon () {
		var potonganby = $('#selectpotongan').find('option:selected').val();
		var potongan = $('#potongan').val();
		var subtotal = $('#subtotalobat').text();
		var temp = 0;
		if (potonganby == 'persen') {
			temp = (Number(subtotal) * Number(potongan)/100);
		}else{
			temp = Number(potongan);
		}
		return temp;
	}

	//hitung manual
	function embalasenonracik (dethis,newValue) {
		var embalase = newValue;
		var jf = dethis.closest('tr').find('td .jfnonracik').text();
		var harga = dethis.closest('tr').find('td').eq(4).text();
		var jmlracik = dethis.closest('tr').find('td .jmlnonracik').text();
		var tambah = dethis.closest('tr').find('td .b_tambahannonracik').text();

		var hasil_akhir = (Number(jmlracik) * Number(harga)) + Number(embalase) + Number(jf) + Number(tambah);
		dethis.closest('tr').find('td').eq(8).text(hasil_akhir);
		hitung_grand_total();
	}

	function jmlnonracik (dethis,newValue) {
		var jmlracik = newValue;
		var jf = dethis.closest('tr').find('td .jfnonracik').text();
		var harga = dethis.closest('tr').find('td').eq(4).text();
		var embalase = dethis.closest('tr').find('td .embalasenonracik').text();
		var tambah = dethis.closest('tr').find('td .b_tambahannonracik').text();

		var hasil_akhir = (Number(jmlracik) * Number(harga)) + Number(embalase) + Number(jf) + Number(tambah);
		dethis.closest('tr').find('td').eq(8).text(hasil_akhir);
		hitung_grand_total();
	}

	function jfnonracik (dethis,newValue) {
		var jf = newValue;
		var embalase = dethis.closest('tr').find('td .embalasenonracik').text();
		var harga = dethis.closest('tr').find('td').eq(4).text();
		var jmlracik = dethis.closest('tr').find('td .jmlnonracik').text();
		var tambah = dethis.closest('tr').find('td .b_tambahannonracik').text();

		var hasil_akhir = (Number(jmlracik) * Number(harga)) + Number(embalase) + Number(jf) + Number(tambah);
		dethis.closest('tr').find('td').eq(8).text(hasil_akhir);
		hitung_grand_total();
	}

	function b_tambahannonracik (dethis,newValue) {
		var tambah = newValue;
		var jf = dethis.closest('tr').find('td .jfnonracik').text();
		var harga = dethis.closest('tr').find('td').eq(4).text();
		var jmlracik = dethis.closest('tr').find('td .jmlnonracik').text();
		var embalase = dethis.closest('tr').find('td .embalasenonracik').text();

		var hasil_akhir = (Number(jmlracik) * Number(harga)) + Number(embalase) + Number(jf) + Number(tambah);
		dethis.closest('tr').find('td').eq(8).text(hasil_akhir);
		hitung_grand_total();
	}

	//racik
	function embalaseracik (dethis,newValue) {
		var jlh = dethis.closest('tr').find('td .jlhsemua').val();
		var embalase = (Number(jlh) * Number(newValue));
		var harga = dethis.closest('tr').find('td').eq(4).text();
		var jf = dethis.closest('tr').find('td .jfracik').text();
		var jmlracik = dethis.closest('tr').find('td .jmlracik').text();
		var tambah = dethis.closest('tr').find('td .b_tambahanracik').text();

		var hasil_akhir = (Number(jf) * Number(jmlracik))+ Number(harga) + Number(embalase) + Number(tambah);
		dethis.closest('tr').find('td').eq(8).text(hasil_akhir);
		hitung_grand_total();
	}

	function jmlracik (dethis,newValue) {
		var jlh = dethis.closest('tr').find('td .jlhsemua').val();
		var harga = dethis.closest('tr').find('td').eq(4).text();
		var emb = dethis.closest('tr').find('td .embalaseracik').text();
		var embalase = (Number(jlh) * Number(emb));
		var tambah = dethis.closest('tr').find('td .b_tambahanracik').text();
		var jf = dethis.closest('tr').find('td .jfracik').text();
		var hasil_akhir = (Number(jf) * Number(newValue)) + Number(harga) + Number(embalase) + Number(tambah);
		dethis.closest('tr').find('td').eq(8).text(hasil_akhir);
		hitung_grand_total();
	}

	function jfracik (dethis,newValue) {
		var jmlracik = dethis.closest('tr').find('td .jmlracik').text();
		var jf = (Number(jmlracik) * Number(newValue));
		var harga = dethis.closest('tr').find('td').eq(4).text();
		var embalase = dethis.closest('tr').find('td .embalaseracik').text();
		var jlh = dethis.closest('tr').find('td .jlhsemua').val();
		var tambah = dethis.closest('tr').find('td .b_tambahanracik').text();

		var hasil_akhir = Number(jf) + Number(harga) + (Number(embalase) * Number(jlh))+ Number(tambah);
		dethis.closest('tr').find('td').eq(8).text(hasil_akhir);
		hitung_grand_total();
	}

	function b_tambahanracik (dethis,newValue) {
		var jmlracik = dethis.closest('tr').find('td .jmlracik').text();
		var jf = dethis.closest('tr').find('td .jfracik').text();
		var harga = dethis.closest('tr').find('td').eq(4).text();
		var embalase = dethis.closest('tr').find('td .embalaseracik').text();
		var jlh = dethis.closest('tr').find('td .jlhsemua').val();

		var hasil_akhir = (Number(jmlracik) * Number(jf)) + Number(harga) + (Number(embalase) * Number(jlh))+ Number(newValue);
		dethis.closest('tr').find('td').eq(8).text(hasil_akhir);
		hitung_grand_total();
	}

</script>