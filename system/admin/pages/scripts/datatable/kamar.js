var Kamar = function () {

    var initPickers = function () {
        //init date pickers
        $('.date-picker').datepicker({
            rtl: Metronic.isRTL(),
            autoclose: true
        });
    }

    var operasi = function() {
		jQuery('.search-submit').click(function() {
			var timeout;
			var RM = jQuery('.cari-no-antrian').val();
			
			clearTimeout(timeout);
			jQuery('#cover-search').show();
			timeout = setTimeout(function() {
				jQuery('#table_antrianOperasi tbody tr').remove();
				jQuery('#cover-search').hide();
				jQuery('#table_antrianOperasi tbody:first').append(
					'<tr>'+
						'<td class="info-no-antrian">'+RM+'</td>'+
						'<td class="info-rm-id">2014110051</td>'+
						'<td class="info-tgl-masuk">26/11/2014</td>'+
						'<td class="info-tgl-keluar">26/11/2014</td>'+
						'<td class="info-status">Sukses</td>'+
						'<td>'+
							'<div class="actions">'+
								'<a class="btn blue" href="'+CI_ROOT+'operasi/details/antrian/'+RM+'"><i class="fa fa-search"></i></a>'+
							'</div>'+
						'</td>'+
					'</tr>'
				);				
			}, 500);		                
			return false;
		});
    }
    
	var cancelCari = function() {
		jQuery('.filter-cancel').click(function() {
			var timeout;
			jQuery('.cari-no-antrian').val('');
			jQuery('.cari-rm-pasien').val('');
			jQuery('.cari-nama-pasien').val('');
			jQuery('.cari-tgl-masuk').val('');
			jQuery('.cari-tgl-keluar').val('');
			jQuery('.status').val('');			
						
			clearTimeout(timeout);
			jQuery('#cover-search').show();
			timeout = setTimeout(function() {
				jQuery('#table_antrianOperasi tbody tr').remove();
				jQuery('#cover-search').hide();
				jQuery('#table_antrianOperasi tbody:first').append(
					'<tr>'+
						'<td class="info-no-antrian">1349</td>'+
						'<td class="info-rm-id">2014110051</td>'+
						'<td class="info-tgl-masuk">26/11/2014</td>'+
						'<td class="info-tgl-keluar">26/11/2014</td>'+
						'<td class="info-status">Sukses</td>'+
						'<td>'+
							'<div class="actions">'+
								'<a class="btn blue" href="'+CI_ROOT+'operasi/details/antrian/1349"><i class="fa fa-search"></i></a>'+
							'</div>'+
						'</td>'+
					'</tr>'+
					'<tr>'+
						'<td class="info-no-antrian">1350</td>'+
						'<td class="info-rm-id">2014110011</td>'+
						'<td class="info-tgl-masuk">26/11/2014</td>'+
						'<td class="info-tgl-keluar">26/11/2014</td>'+
						'<td class="info-status">Sukses</td>'+
						'<td>'+
							'<div class="actions">'+
								'<a class="btn blue" href="'+CI_ROOT+'operasi/details/antrian/1350"><i class="fa fa-search"></i></a>'+
							'</div>'+
						'</td>'+
					'</tr>'					
				);				
			}, 500);			
			return false;
		});		
	}
	
	return {

        //main function to initiate the module
        operasi: function () {
            initPickers();
			operasi();
			cancelCari();
        }
        
        

    };

}();

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
	}, 300); 		
	
	return false;
}