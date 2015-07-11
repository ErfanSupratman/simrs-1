var Kasir = function () {

    var initPickers = function () {
        //init date pickers
        $('.date-picker').datepicker({
            rtl: Metronic.isRTL(),
            autoclose: true
        });
    }

    var cariResep = function() {
    	console.log('syalallala');

		jQuery('.search-submit').click(function() {
			// console.log(jQuery('#jenis_tebusan').val());
			if (jQuery('#jenis_tebusan').val() == 'resep_rawat_jalan')
			{
				var item = {};
				var num = 1;
				item[num] = {};
				item[num]['jenis'] = 'RJ';
				item[num]['resep_id'] = jQuery('.cari-id-resep').val();
				item[num]['rm_id'] = jQuery('.cari-rm-pasien').val();
				item[num]['pasien_nama'] = jQuery('.cari-nama-pasien').val();
				item[num]['resep_waktu'] = jQuery('.cari-tgl-resep').val();

                console.log(JSON.stringify(item[num])); 

			    jQuery.ajax({
			        type: "POST",
			        url: "kasir/pencarian_resep",
			        data: item,
			        success: function(data)
			        {
			        	console.log(data);

						jQuery('#table_resep_hasil tbody tr').remove();

						if (data.length > 0) {

				            for (index = 0; index < data.length; ++index) {

				            	if (data[index]['rm_id'] != null && data[index]['rm_id'] != '' ) 
				            	{

					            	id = data[index]['resep_id'];
					                rm_id = data[index]['rm_id'];
					                nama = data[index]['nama_lengkap'];
					                kunjungan = data[index]['dep_nama'];
					                resep = nl2br(data[index]['resep_dokter']);
					                tipe = data[index]['visit_tipe'];
					                dokterResep = data[index]['nama_dokter'];
					                nomorPasien = data[index]['nomor_pasien'];
					                alamatPasien = data[index]['alamat_tinggal'];
					                caraBayar = data[index]['pay_metode_bayar'];
					                resep_status = data[index]['resep_status_ambil'];
					                waktu = data[index]['tanggal_lahir'];

					                if (data[index]['operasi']) {
										kunjungan = kunjungan + " (" + data[index]['operasi']  + ")";			                	
					                } 

					                console.log(waktu);
					                if (waktu != null) {
										res = waktu.split(" "); 
										pretanggal = res[0].split("-");
										tanggal_lahir = pretanggal[2] + " - " + pretanggal[1] + " - " + pretanggal[0] ;
					                } else {
					                	tanggal_lahir = '00-00-0000';
					                }

					                waktu2 = data[index]['resep_tanggal'];
									res = waktu2.split(" "); 
									pretanggal = res[0].split("-");
									tanggal_resep = pretanggal[2] + " - " + pretanggal[1] + " - " + pretanggal[0] ;


										jQuery('#table_resep_hasil tbody:first').append(
											'<tr>'+
											'<input type="hidden" class="info-resep-dokter" value="'+dokterResep+'">'+
											'<input type="hidden" class="info-resep-tanggal-lahir" value="'+tanggal_lahir+'">'+
											'<input type="hidden" class="info-resep-nomor-telepon" value="'+nomorPasien+'">'+
											'<input type="hidden" class="info-resep-alamat-rumah" value="'+alamatPasien+'">'+
											'<input type="hidden" class="info-resep-cara-bayar" value="'+caraBayar+'">'+
											'<td class="info-resep-id">'+id+'</td>'+
											'<td class="info-resep-rm-id">'+rm_id+'</td>'+
											'<td class="info-resep-pasien">'+nama+'</td>'+
											'<td class="info-resep-kunjungan">'+kunjungan+'</td>'+
											'<td class="info-resep-tipe">'+tipe+'</td>'+
											'<td class="info-resep-tanggal">'+tanggal_resep+'</td>'+
											'<td class="info-resep-keterangan">'+resep+'</td>'+
											'<td class="info-resep-status">'+resep_status+'</td>'+
											'<td>'+
												'<div class="actions">'+
													'<a href="#" class="btn green" onclick="appendInfoResep(this)">'+
														'<i class="fa fa-check"></i>'+
													'</a>'+
												 '</div>'+
											'</td>'+
											'</tr>'			
										);					                
					            } //end of for	


				            	}


						} else {
							console.log('pencarian tidak ditemukan');
						}

		        	
			        },
			        error: function (data)
			        {  
			        	console.log(data);
			        }
			    });
			}
			return false;
		});
       
    }
    
	var cancelCari = function() {
		jQuery('.filter-cancel').click(function() {
			if (jQuery('#jenis_tebusan').val() == 'resep_rawat_jalan')
			{
				jQuery('#table_resep_hasil tbody tr').remove()
				jQuery('.cari-id-resep').val('');
				jQuery('.cari-rm-pasien').val('');
				jQuery('.cari-nama-pasien').val('');
				jQuery('.cari-tgl-resep').val('');
			}
			return false;
		});		
	}
	
	return {

        //main function to initiate the module
        pencarian: function () {
            initPickers();
			cariResep();
			cancelCari();
        }
        
        

    };

}();

function nl2br (str, is_xhtml) {   
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';    
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
}

function appendInfoResep(params)
{
	var thisContainer = jQuery(params).closest('tr');

	var idResep = thisContainer.find('.info-resep-id').text();
	var pasienResep = thisContainer.find('.info-resep-pasien').text();
	var tanggalResep = thisContainer.find('.info-resep-tanggal').text();
	var dokterResep = thisContainer.find('.info-resep-dokter').val();

	var rekamMedis = thisContainer.find('.info-resep-rm-id').text();
	var namaPasien = thisContainer.find('.info-resep-pasien').text();

	var tanggalLahir = thisContainer.find('.info-resep-tanggal-lahir').val();
	var nomorPasien = thisContainer.find('.info-resep-nomor-telepon').val();
	var alamatPasien = thisContainer.find('.info-resep-alamat-rumah').val();

	var caraBayar = thisContainer.find('.info-resep-cara-bayar').val();
	var tujuanKunjungan = thisContainer.find('.info-resep-kunjungan').text();
	var tipeKunjungan = thisContainer.find('.info-resep-tipe').text();
	var isiResep =  thisContainer.find('.info-resep-keterangan').text()

	var timeout;
	clearTimeout(timeout);
	timeout = setTimeout(function() {
		thisContainer.closest('.wrapper-pencarian-resep').hide();
		jQuery('.wrapper-informasi-resep').show();
		jQuery('.form-apotik').show();
		jQuery('.choose-resep-id').text(idResep);
		jQuery('.choose-dokter-resep').text(dokterResep);
		jQuery('.choose-tanggal-resep').text(tanggalResep);
		jQuery('.choose-rekam-medis').text(rekamMedis);
		jQuery('.choose-nama-pasien').text(namaPasien);
		jQuery('.choose-tanggal-lahir').text(tanggalLahir);
		jQuery('.choose-nomor-pasien').text(nomorPasien);
		jQuery('.choose-alamat-pasien').text(alamatPasien);
		jQuery('.choose-cara-bayar').text(caraBayar);
		jQuery('.choose-tujuan-kunjungan').text(tujuanKunjungan);
		jQuery('.choose-tipe-kunjungan').text(tipeKunjungan);
		jQuery('.choose-isi-resep').text(isiResep);
	}, 300);

	//if info-resep-status = 'PROSES', cari tampilkan resep yang sudah ada 		
	if (thisContainer.find('.info-resep-status').text() == 'PROSES') {
		//query and append
				      jQuery.ajax({
				        type: "POST",
				        url: CI_ROOT+"apotik/kasir/get_transaksi_resep",
				        data: {
				        	'resep_id' : thisContainer.find('.info-resep-id').text()
				        },
				        success: function(data)
				        {
				        	console.log(data);

				        $('#invoiceBill tbody tr').remove();

			            for (index = 0; index < data.length; ++index) {

			                $('#tipe_tambahan').val(data[index]['tipe_tambahan']);
			                $('#qty_tambahan').val(data[index]['qty_tambahan']);
			                $('#total_tambahan').text(data[index]['total_tambahan']);
			                $('#bakhp-tambahan').val(data[index]['bakhp_tambahan']);
			                $('.amounts').find('span.bakhptambahan').text(data[index]['bakhp_tambahan']);


			            	id = data[index]['obat_id'];
			                nama = data[index]['obat_nama'];
			                satuan = data[index]['obat_satuan'];
			                jumlah = data[index]['obat_qty_beli'];
			                hjual = data[index]['obat_harga'];
			                stok = data[index]['obat_qty'];
			                subtotal = data[index]['obat_subtotal'];


			                $('#choose-transaksi-id').val(data[index]['trans_apotik_id']);

								$('#invoiceBill tbody:first').append(
								'<tr>'+
								'<input type="hidden" class="buy-item-obat-id" value="'+id+'"></input>'+			
								'<input type="hidden" class="buy-item-obat-nama" value="'+nama+'"></input>'+
								'<input type="hidden" class="buy-item-obat-satuan" value="'+satuan+'"></input>'+
								'<input type="hidden" class="buy-item-obat-jumlah" value="'+jumlah+'"></input>'+			
								'<input type="hidden" class="buy-item-obat-hjual" value="'+hjual+'"></input>'+
								'<input type="hidden" class="buy-item-obat-stok" value="'+stok+'"></input>'+							
								'<td>#'+id+'</td>'+
								'<td>'+nama+'</td>'+
								'<td class="hidden-480 qty-item">'+
								'<a href="#" class="qty" data-type="text" data-pk="'+jumlah+'" data-original-title="Jumlah Pembelian Obat">'+jumlah+'</a></td>'+
								'<td>'+
									'<span class="satuan">'+satuan+'</span>'+
								'</td>'+
								'<td class="hidden-480">'+
									'<span class="price each" value="'+hjual+'">'+hjual+'</span>'+
								'</td>'+					
								'<td>'+
									'<span class="price subtotal" value="'+subtotal+'">'+subtotal+'</span>'+
								'</td>'+
								'<td>'+
									'<div class="actions">'+
										'<a href="#" class="btn red">'+
											'<i class="fa fa-minus"></i>'+
										'</a>'+
									 '</div>'+
								'</td>'+
								'</tr>');
								
								jQuery('.price').autoNumeric('init', {aSign:'Rp', pSign:'p', aSep:'.', aDec:',' });
								jQuery('.qty-item').find('input').autoNumeric('init');



					        }	

							FormEditableApotik.init();
							updateGrandTotal();			

				        },
				        error: function (data)
				        {  
				           console.log(data);
				        }
			        }); 

	}
	else {
        $('#choose-transaksi-id').val('');
	}

	
	return false;
}