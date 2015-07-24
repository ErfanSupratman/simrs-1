<script type="text/javascript">
	$(document).ready(function () {
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

			//event.preventDefault();
		});

		/*farmasi bersalin*/
		$('#formobatfarmasibersalin').submit(function (e) {
			e.preventDefault();
			var katakunci = $('#katakuncifarmasibersalin').val();
			$.ajax({
				type: "POST",
				url: '<?php echo base_url()?>bersalin/homebersalin/get_obat_gudang/'+katakunci,
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

	        $('#addinputMintaFar').find('tr td.dataKosong').closest('tr').remove();
			$('#addinputMintaFar').append(
				'<tr><td style="display:none">'+cols[0]+'</td>'+
				'<td style="display:none">'+cols[2]+'</td>'+
				'<td>'+format_date(cols[1])+'</td>'+
				'<td>'+cols[3]+'</td>'+
				'<td>'+cols[4]+'</td>'+
				'<td>0</td>'+
				'<td><input type="text" class="form-control" style="width:90px" placeholder="0"></td>'+
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

			//jlh = 8, obat_id = 1, obat_detail_id = 0
			var data = [];
		    $('#addinputMintaFar').find('tr').each(function (rowIndex, r) {
		        var cols = [];
		        $(this).find('td').each(function (colIndex, c) {
		            cols.push(c.textContent);
		        });
		        $(this).find('td input[type=text]').each(function (colIndex, c) {
		            cols.push(c.value);
		        });
		        data.push(cols);
		    });
			if(data.length == 0){
				 $('#addinputMintaFar').append('<tr><td colspan="6" style="text-align:center" class="dataKosong">DATA KOSONG</td></tr>');
				alert('isi detail cuk');
				return false;
			}

		    item['data'] = data;

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
		})

		//retur obat (ya ke gudang lah)
		$('#formsearchobatretur').submit(function (e) {
			e.preventDefault();
			var katakunci = $('#katakuncireturbersalin').val();

			$.ajax({
				type: "POST",
				url: '<?php echo base_url()?>bersalin/homebersalin/get_obat_retur/'+katakunci,
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
				'<td><input type="text" class="form-control" style="width:90px" placeholder="0"></td>'+ //jumlah retur
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
		        $(this).find('td input[type=text]').each(function (colIndex, c) {
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

		    $.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url()?>bersalin/homebersalin/submit_retur_bersalin',
				success: function (data) {
					//console.log(data);
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
		})
		

		/*farmasi bersalin*/

	})

</script>