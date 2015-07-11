var DaftarKamar = function () {

    var cariKamar = function () {
		jQuery('.search-result-title').hide();	
		jQuery('.search-result-content').hide();	
    
		var item = {};
	    var number = 1;
	    item[number] = {}



    	var kamar = document.getElementById('unitKamar');
		var selectedKamarValue = document.getElementById('unitKamar').options[kamar.selectedIndex].value;
		var selectedKamarText = document.getElementById('unitKamar').options[kamar.selectedIndex].text;		
		if(selectedKamarText == '(Pilih Unit Kamar)')
		{
			jQuery('span.unit').text('Cari semua kamar');
		    item[number]['departemen_id'] = '';
		}
		else
		{
			jQuery('span.unit').text(selectedKamarText);					
		    item[number]['departemen_id'] = selectedKamarValue;
		}

    	var kelas = document.getElementById('kelasKamar');
		var selectedKelasValue = document.getElementById('kelasKamar').options[kelas.selectedIndex].value;
		var selectedKelasText = document.getElementById('kelasKamar').options[kelas.selectedIndex].text;		
	
		if(selectedKelasText == 'SEMUA KELAS')
		{
			jQuery('span.kelas').text(' di semua kelas');		
		    item[number]['kamar_kelas'] = '';
		}
		else
		{
			jQuery('span.kelas').text('Kelas '+selectedKelasText);			
		    item[number]['kamar_kelas'] = selectedKelasValue;
		}

		console.log(item[number]);
		// return false;
		
		var timeout;
		clearTimeout(timeout);
		jQuery('#cover-search').show();
		timeout = setTimeout(function() {
			jQuery('#cover-search').hide();
			jQuery('.search-result-title').show();	

			jQuery('.search-result-content div.row').remove();

			if (item[number]['departemen_id'] != '') {
				jQuery.ajax({
					type: "POST",
					url: CI_ROOT+"kamar/daftar/get_kamar",
					data: item,
					success: function(data)
					{	
						console.log(data)

						var index;
						var kamar_baru = '';
						var kamar_lama = '';
						var daftarKamar = '';
						var sisa = 0;
						var urutan = 1;
						for (index = 0; index < data.length; ++index) 
						{
							nama_kamar = data[index]['kamar_nama'];
							nama_bed  = data[index]['bed_nama'];
							kelas = data[index]['kamar_kelas'];
							kapasitas = data[index]['kamar_bed'];
							terisi = data[index]['kamar_terpakai'];
							nama_lengkap = data[index]['nama_lengkap'];
							tanggal = data[index]['tgl_masuk'];
							dokter = data[index]['user_full_name'];
							kamar_baru = nama_kamar

							if (nama_lengkap == null ) {
								nama_lengkap = '-';
							}
							if (dokter == null ) {
								dokter = '-';
							}
							if (tanggal == null ) {
								tanggal = '-';
							} else {
								pisah = tanggal.split(" ");
								pisah_tanggal = pisah[0].split("-");
								tanggal = pisah_tanggal[2] + '/' + pisah_tanggal[1] + '/' + pisah_tanggal[0] + " " + pisah[1];
							}

							if (kamar_lama != kamar_baru) 
							{

								if (index != 0) {
										console.log('ganti nama');
										daftarKamar += '</div></div>'+
												'</div>'+						            
									        '</li>';						        						        
								}

								if ( ( ( sisa % 4 ) == 0 ) && ( index != 0 )  ) {
										console.log('tutup baris');
									    daftarKamar += '</ul>'+
									'</div>';									
								}

								if ( ( index == 0 ) || ( ( sisa % 4 ) == 0 ) ) {
									console.log('row baru');
									daftarKamar += '<div class="row">'+
									    '<ul>';								   
								}
										 urutan = 1;
										 console.log('kotak baru');
									     daftarKamar += '<li>'+
									            '<div class="box">'+
													'<div class="room-info">'+
														'<h4><strong>'+nama_kamar+'</strong><br>'+kelas+'</h4>'+
														'<div class="availability">'+
														'<p class="available">'+
															'Kapasitas : '+kapasitas+' bed'+
														'</p>'+
														'<p class="full">'+
															'Terisi : '+terisi+' bed'+
														'</p>'+
														'</div>'+							
													'</div>'+
									            '</div>'+

												'<div class="container-child" style="display:none;">'+
													'<div class="bed"><div class="content">'+
														'<div class="row"><div class="col-md-12">'+
															'<h3>'+nama_kamar+'</h3>'+
															'<hr/>'+
														'</div></div>'+											
														'<div class="row"><div class="col-md-12">'+
															'<div class="col-md-1">'+
																'<strong>No#</strong>'+
															'</div>'+
															'<div class="col-md-3">'+
																'<strong>Nama Bed</strong>'+
															'</div>'+
															'<div class="col-md-3">'+
																'<strong>Nama Pasien</strong>'+
															'</div>'+
															'<div class="col-md-3">'+
																'<strong>Nama Dokter</strong>'+
															'</div>	'+
															'<div class="col-md-2">'+
																'<strong>Tanggal Masuk</strong>'+
															'</div>'+
														'</div></div>'+
														'<div class="row"><div class="col-md-12">'+
															'<div class="col-md-1">'+
																urutan+
															'</div>'+
															'<div class="col-md-3">'+
																nama_bed+
															'</div>'+
															'<div class="col-md-3">'+
																nama_lengkap+
															'</div>'+
															'<div class="col-md-3">'+
																dokter+
															'</div>	'+
															'<div class="col-md-2">'+
																tanggal+
															'</div>'+
														'</div></div>';
									sisa = sisa + 1;

							} 
							else 
							{
								urutan = urutan + 1;
								console.log('detail ke-2 dan seterusnya');
								daftarKamar += '<div class="row"><div class="col-md-12">'+
												'<div class="col-md-1">'+
												urutan+
											'</div>'+
											'<div class="col-md-3">'+
												nama_bed+
											'</div>'+
											'<div class="col-md-3">'+
												nama_lengkap+
											'</div>'+
											'<div class="col-md-3">'+
												dokter+
											'</div>	'+
											'<div class="col-md-2">'+
												tanggal+
											'</div>'+
										'</div></div>';
							}

							kamar_lama = kamar_baru;

							if ( (index + 1) == data.length ) {
									console.log('tutup loop');
									daftarKamar += '</div></div>'+
												'</div>'+						            
									        '</li>'+
									    '</ul>'+
									'</div>';																
							}
						}

						jQuery('.search-result-content').append(daftarKamar);

						jQuery('.search-result-content').append(
									'<div class="row">'+
									    '<ul>'+   
									    '</ul>'+
									'</div>'						
						);

						DaftarKamar.summary();	
					},
					error: function (data)
					{  
						//gagal
						console.log(data);
					}
			   });
			}

			jQuery('.search-result-content').show();


			jQuery('.search-result-content').show();	
		}, 1000);		
		
	}
	
	var summaryKamar = function() {
		jQuery(".search-result-content .box").on('click',function () {
			var thisLI = jQuery(this).closest('li');
			if(thisLI.hasClass('active'))
			{
				thisLI.closest('.row').next('.row').animate({
					'marginTop': '0px'
				}, 1000).removeClass('active');
				
				thisLI.find(".content").animate({
			        height: "0"
			    }, 1000);

			    var timeout;
				clearTimeout(timeout);
				timeout = setTimeout(function() {
					jQuery('.container-child').hide();				
				}, 1000);			    
				thisLI.removeClass('active');
			}
			else
			{
				jQuery('.search-result-content').find('li').removeClass('active');
				thisLI.addClass('active');
			    jQuery('.container-child').hide();
			    jQuery('.active').css('margin-top','0'); // removes margintop from previous click
			    
			    thisLI.closest('.row').next('.row').animate({
			    	marginTop: '350px',
			    	height: '330px',
			    }, 1000).addClass('active'); // moves row downwards and add class active

			    thisLI.find(".container-child").show();
			
			    thisLI.find(".content").animate({
			        height: "330px"
			    }, 1000);
			}		
			return false;		
		});		
	}
	
	return {
        //main function to initiate the module
        cariKamar: function()
        {
	      cariKamar();	      
        },
        summary: function () {
            summaryKamar();
        }
    };
}(jQuery);
