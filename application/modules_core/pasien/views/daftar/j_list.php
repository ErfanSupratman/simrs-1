<?php

?>

<script type="text/javascript">
	$(document).ready(function(){
		$('#asuransi_rujuk').hide();
		$('#kontrak_rujuk').hide();
		$('#kelasP_rujuk').hide();
		$('#noAsuransi_rujuk').hide();

		$('#carabayar_rujuk').change(function(){
			var val = $(this).val();

			if(val == 'Umum'){
				$('#asuransi_rujuk').hide();
				$('#kontrak_rujuk').hide();
				$('#kelasP_rujuk').hide();
				$('#noAsuransi_rujuk').hide();
			}
			else if(val == 'BPJS'){
				$('#asuransi_rujuk').hide();
				$('#kontrak_rujuk').hide();
				$('#kelasP_rujuk').show();
				$('#noAsuransi_rujuk').show();
			}
			else if(val == 'Asuransi'){
				$('#asuransi_rujuk').show();
				$('#kontrak_rujuk').hide();
				$('#kelasP_rujuk').hide();
				$('#noAsuransi_rujuk').show();
			}
			else if(val == 'Jamkesmas'){
				$('#asuransi_rujuk').hide();
				$('#kontrak_rujuk').hide();
				$('#kelasP_rujuk').hide();
				$('#noAsuransi_rujuk').show();
			}
			else if(val == 'Kontrak'){
				$('#asuransi_rujuk').hide();
				$('#kontrak_rujuk').show();
				$('#kelasP_rujuk').hide();
				$('#noAsuransi_rujuk').show();
			}
			else if(val == 'Gratis'){
				$('#asuransi_rujuk').hide();
				$('#kontrak_rujuk').hide();
				$('#kelasP_rujuk').hide();
				$('#noAsuransi_rujuk').show();
			}
			else if(val == 'Lain'){
				$('#asuransi_rujuk').hide();
				$('#kontrak_rujuk').hide();
				$('#kelasP_rujuk').hide();
				$('#noAsuransi_rujuk').hide();
			}
		});

		$("#datepicker-reg").change(function(){
			var today = new Date();
			var text = document.getElementById("datepicker-reg").value;
			var from = text.split("/");
			var born = new Date(from[2], from[1] - 1, from[0]);
			$("#newUmur").val(getAge(born));
		});

		function getAge(date) {
		  var now = new Date();
		  var today = new Date(now.getYear(),now.getMonth(),now.getDate());

		  var yearNow = now.getYear();
		  var monthNow = now.getMonth();
		  var dateNow = now.getDate();

		  var dob = date;

		  var yearDob = dob.getYear();
		  var monthDob = dob.getMonth();
		  var dateDob = dob.getDate();
		  var age = {};
		  var ageString = "";
		  var yearString = "";
		  var monthString = "";
		  var dayString = "";


		  yearAge = yearNow - yearDob;

		  if (monthNow >= monthDob)
		    var monthAge = monthNow - monthDob;
		  else {
		    yearAge--;
		    var monthAge = 12 + monthNow -monthDob;
		  }

		  if (dateNow >= dateDob)
		    var dateAge = dateNow - dateDob;
		  else {
		    monthAge--;
		    var dateAge = 31 + dateNow - dateDob;

		    if (monthAge < 0) {
		      monthAge = 11;
		      yearAge--;
		    }
		  }

		  age = {
		      years: yearAge,
		      months: monthAge,
		      days: dateAge
		      };

			  if ( (age.years > 0) && (age.months > 0) && (age.days > 0) )
			    ageString = age.years +" Tahun  " + age.months + " Bulan  " + age.days + " Hari. ";
			  else if ( (age.years == 0) && (age.months == 0) && (age.days > 0) )
			    ageString =  age.days + " Hari.";
			  else if ( (age.years > 0) && (age.months == 0) && (age.days == 0) )
			    ageString = age.years + " Tahun.";
			  else if ( (age.years > 0) && (age.months > 0) && (age.days == 0) )
			    ageString = age.years+" Tahun " + age.months +" Bulan.";
			  else if ( (age.years == 0) && (age.months > 0) && (age.days > 0) )
			    ageString = age.months + " Bulan " + age.days + " Hari.";
			  else if ( (age.years > 0) && (age.months == 0) && (age.days > 0) )
			    ageString = age.years + " Tahun " + age.days + "Hari.";
			  else if ( (age.years == 0) && (age.months > 0) && (age.days == 0) )
			    ageString = age.months + " Bulan.";
			  else ageString = "Belum lahir";

			  return ageString;
		}



		$("#nomorPasien").keydown(function (e) {
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

		$("#no_telp_wali").keydown(function (e) {
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

		$("#newKabupaten").attr('disabled',true);
		$("#newKecamatan").attr('disabled',true);	
		$("#newKelurahan").attr('disabled',true);

		$("#newProvinsi").change(function(){
			var provinsi = this.value;
			if(provinsi == "")
				$("#newKabupaten").attr('disabled',true);
			else{
				$("#newKabupaten").attr('disabled',false);
				$.ajax({
					type:'POST',
					dataType : "html",
					url :'<?php echo base_url()?>pasien/daftarpasien/selectProvinsi/'+provinsi,
					success:function(hasil){
						$("#newKabupaten").html(hasil);
					} 
				});
			}	
		});

		$("#newKabupaten").change(function(){
			var kabupaten = this.value;
			
			if(kabupaten == "")
				$("#newKecamatan").attr('disabled',true);
			else{
				$("#newKecamatan").attr('disabled',false);
				$.ajax({
					type:'POST',
					dataType : "html",
					url :'<?php echo base_url()?>pasien/daftarpasien/selectKabupaten/'+kabupaten,
					success:function(hasil){
						$("#newKecamatan").html(hasil);
					} 
				});
			}	
		});

		$("#newKecamatan").change(function(){
			var kecamatan = this.value;
			
			if(kecamatan == "")
				$("#newKelurahan").attr('disabled',true);
			else{
				$("#newKelurahan").attr('disabled',false);
				$.ajax({
					type:'POST',
					dataType : "html",
					url :'<?php echo base_url()?>pasien/daftarpasien/selectKecamatan/'+kecamatan,
					success:function(hasil){
						$("#newKelurahan").html(hasil);
					} 
				});
			}	
		});


		$("#skrKabupaten").attr('disabled',true);
		$("#skrKecamatan").attr('disabled',true);	
		$("#skrKelurahan").attr('disabled',true);

		$("#skrProvinsi").change(function(){
			var provinsi = this.value;
			if(provinsi == "")
				$("#skrKabupaten").attr('disabled',true);
			else{
				$("#skrKabupaten").attr('disabled',false);
				$.ajax({
					type:'POST',
					dataType : "html",
					url :'<?php echo base_url()?>pasien/daftarpasien/selectProvinsi/'+provinsi,
					success:function(hasil){
						$("#skrKabupaten").html(hasil);
					} 
				});
			}	
		});

		$("#skrKabupaten").change(function(){
			var kabupaten = this.value;
			
			if(kabupaten == "")
				$("#skrKecamatan").attr('disabled',true);
			else{
				$("#skrKecamatan").attr('disabled',false);
				$.ajax({
					type:'POST',
					dataType : "html",
					url :'<?php echo base_url()?>pasien/daftarpasien/selectKabupaten/'+kabupaten,
					success:function(hasil){
						$("#skrKecamatan").html(hasil);
					} 
				});
			}	
		});

		$("#skrKecamatan").change(function(){
			var kecamatan = this.value;
			
			if(kecamatan == "")
				$("#skrKelurahan").attr('disabled',true);
			else{
				$("#skrKelurahan").attr('disabled',false);
				$.ajax({
					type:'POST',
					dataType : "html",
					url :'<?php echo base_url()?>pasien/daftarpasien/selectKecamatan/'+kecamatan,
					success:function(hasil){
						$("#skrKelurahan").html(hasil);
					} 
				});
			}	
		});

		//search

		$("#search_submit").submit(function(event){
			var search = $("input:first").val();
			var data = {} ;
			data['search'] = search;

			if(search!=""){
				$.ajax({
					type:'POST',
					data:data,
					url :'<?php echo base_url()?>pasien/daftarpasien/search_pasien',
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
									id = data[i]['jenis_id'];

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
										'<td>'+(i+1)+'</td>'+
							 			'<td>'+rm_id+'</td>'+
							 			'<td>'+name+'</td>'+
							 			'<td>'+jk+'</td>'+
							 			'<td>'+tgl+'</td>'+
							 			'<td>'+alamat+'</td>'+
							 			'<td>'+id+'</td>'+

							 			'<td style="text-align:center">'+
							 				'<a href="#tambahPemeriksaan" data-toggle="modal" data-original-title="Tambah Pemeriksaan" onclick="visit('+rm_id+',&quot;'+name+'&quot;)" >'+
							 				'<i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title data-original-title="Tambah Pemeriksaan"></i></a>'+
										'</td>'+
							 		'</tr>'
									);
							}
						}else{
							$('#t_body').empty();

							$('#t_body').append(
									'<tr>'+
							 			'<td colspan="8"><center>Data Pasien Tidak Ditemukan</center></td>'+
							 		'</tr>'
								);
						}

					},
					error:function (data){
						$('#t_body').empty();

						$('#t_body').append(
							'<tr>'+
					 			'<td colspan="7"><center>Data Pasien Tidak Ditemukan</center></td>'+
					 		'</tr>'
						);
					}

				});
			}

			event.preventDefault();
		});	

		var item = {};
		$('#submit_form').submit(function(e){

			item['rm_lama']=$('#new_rm_id').val();
			item['nama']=$('#newNamaLengkap').val();
			item['alias']=$('#newAlias').val();
			item['tempat_lahir']=$('#newTempatLahir').val();
			item['tanggal_lahir']=$('#datepicker-reg').val();

			if($('#newJenisKelamin').val()=="")
				item['jenis_kelamin']=$('#newJenisKelamin').val();
			else
				item['jenis_kelamin']=$('#newJenisKelamin2').val();

			item['gol_darah']=$('#newGol').val();
			item['pekerjaan']=$('#newPekerjaan').val();
			item['jenis_id']=$('#newJenisID').val();
			item['no_id']=$('#newNomorID').val();
			item['pendidikan']=$('#newJenjangPendidikan').val();
			item['agama'] = $('#newAgama').val();
			item['status_kawin'] = $('#newStatusKawin').val();
			item['alamat_skr'] = $('#newAlamat').val();
			item['prov_id_skr'] = $('#skrProvinsi').val();
			item['kab_id_skr']=$('#skrKabupaten').val();
			item['kec_id_skr']=$('#skrKecamatan').val();
			item['kel_id_skr']=$('#skrKelurahan').val();
			item['alamat_ktp']=$('#newAlamatKTP').val();
			item['prov_id']=$('#newProvinsi').val();
			item['kab_id']=$('#newKabupaten').val();
			item['kec_id']=$('#newKecamatan').val();
			item['kel_id']=$('#newKelurahan').val();
			item['no_telp']=$('#nomorPasien').val();
			item['nama_wali']=$('#newWali').val();
			item['hubungan_wali']=$('#newHubungan').val();
			item['alamat_wali']=$('#newAlamatWali').val();
			item['no_telp_wali']=$('#no_telp_wali').val();
			item['pekerjaan_wali']=$('#newJobWali').val();
			item['alergi']=$('#newALergi').val();

			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>pasien/daftarpasien/add_pasien",
				data: item,
				success:function(data){
					//$('#submitquery').attr("data-target","#tambahPemeriksaan"); 

					$('#tambahPemeriksaan').modal('show');
					$('#modal_no_rm').val(data['rm_id']);
					$('#modal_nama').val(data['nama']);

					$('#new_rm_id').val("");
					$('#newNamaLengkap').val("");
					$('#newJobWali').val("");
					$('#newGol').val("TIDAK DIKETAHUI");
					$('#newPekerjaan').val("");
					$('#newJenisID').val("");
					$('#newNomorID').val("");
					$('#newJenjangPendidikan').val("");
					$('#newAgama').val("");
					$('#newStatusKawin').val("");
					$('#newAlamat').val("");
					$('#skrProvinsi').val("");
					$('#skrKabupaten').val("");
					$('#skrKecamatan').val("");
					$('#skrKelurahan').val("");
					$('#newAlamatKTP').val("");
					$('#newProvinsi').val("");
					$('#newKabupaten').val("");
					$('#newKecamatan').val("");
					$('#newKelurahan').val("");
					$('#nomorPasien').val("");
					$('#newWali').val("");
					$('#newHubungan').val("");
					$('#newAlamatWali').val("");
					$('#no_telp_wali').val("");
					$('#newALergi').val("");
					$('#newAlias').val("Jenis Alias");
					$('#newTempatLahir').val("");
					$('#datepicker-reg').val("");
					$('#newJenisKelamin').attr('checked',false);
					$('#newJenisKelamin2').attr('checked',false);
				},
				error:function (data){
					
				}

			});

			e.preventDefault();
		});


		
		var itemModal = {};
		$('#submitPemeriksaan').submit(function(e){
			itemModal['tanggal_visit']= $('#inputdate').val();
			itemModal['rm_id'] = $('#modal_no_rm').val();
			itemModal['dept_id'] = $('#poli').val();
			itemModal['kelas_pelayanan'] = $('#kelas_pelayanan').val();
			itemModal['cara_bayar'] = $('#carabayar').val();
			itemModal['nama_asuransi'] = $('#namaAsuransi').val();
			itemModal['no_asuransi'] = $('#nomorAsuransi').val();
			itemModal['nama_perusahaan'] = $('#namaPerusahaan').val();
			itemModal['cara_masuk'] = $('#caramasuk').val();
			itemModal['detail_masuk'] = $('#detailmasuk').val();
			// if($('#pasienLama').val()!="")
			// 	itemModal['is_pasien_lama'] = $('#pasienLama').val();
			// else
			// 	itemModal['is_pasien_lama'] = $('#pasienBaru').val();
			itemModal['is_pasien_lama'] = $('#adminitrasi').val();
			// if($('#jenisKasusLama').val()!="")
			// 	itemModal['is_kasus_baru'] = $('#jenisKasusLama').val();
			// else
			// 	itemModal['is_kasus_baru'] = $('#jenisKasusBaru').val();

			// if($('#knjunganLama').val()!="")
			// 	itemModal['is_kunjungan_baru'] = $('#knjunganLama').val();
			// else
			// 	itemModal['is_kunjungan_baru'] = $('#knjunganBaru').val();
			itemModal['tipe_kunjungan'] = "RAWAT JALAN";
			itemModal['petugas_registrasi'] = "User Login";

			e.preventDefault();

			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>pasien/daftarpasien/add_visit_rj",
				data: itemModal,
				success:function(data){
					console.log(data);
					alert('Data berhasil ditambahkan');	
					window.location = '<?php echo base_url()?>pasien/daftarpasien';
					// $('#tambahPemeriksaan').modal('hide');
					// $('#poli').val("");
					// $('#kelas_pelayanan').val("");
					// $('#carabayar').val("");
					// $('#carabayar').val("");
					// $('#namaAsuansi').val("");
					// $('#nomorAsuransi').val("");
					// $('#namaPerusahaan').val("");
					// $('#caramasuk').val("");
					// $("#detailmasuk").val("");

					// $("#pasienLama").attr('checked', false);
					// $('#pasienBaru').attr('checked', false);
					// $('#jenisKasusLama').attr('checked', false);
					// $('#jenisKasusBaru').attr('checked', false);
					// $('#knjunganLama').attr('checked', false);
					// $('#knjunganBaru').attr('checked', false);
				},
				error:function(data){
					console.log(data);
				}					
			});
		});
	
		$('#submit_tindakrujuk').submit(function(e){
			e.preventDefault();
			var item = {};
			item[1] = {};

			item[1]['visit_id'] = $('#visit_rujuk').val();
			item[1]['unit_asal'] = $('#idasal_rujuk').val();
			item[1]['unit_tujuan'] = $('#poli_rujuk').val();
			item[1]['cara_bayar'] = $('#carabayar_rujuk').val();
			item[1]['nama_asuransi'] = $('#namaAsuransi_rujuk').val();
			item[1]['nama_perusahaan'] = $('#perusahaan_rujuk').val();
			item[1]['kelas_pelayanan'] = $('#kelas_rujuk').val();
			item[1]['no_asuransi'] = $('#nomorAsuransi_rujuk').val();

			$.ajax({
				type:'POST',
				data:item,
				url:'<?php echo base_url(); ?>pasien/daftarpasien/submit_tindakrujuk',
				success:function(data){
					console.log(data);
					
					$('#tbody_rujuk_rj').empty();

					if(data.length > 0){
						for(var i=0; i<data.length;i++){
							var tanggal = changeDate(data[i]['tanggal_lahir']);

							$('#tbody_rujuk_rj').append(
							'<tr>'+
								'<td>'+(i+1)+'</td>'+
								'<td>'+data[i]['rm_id']+'</td>'+
								'<td>'+data[i]['nama']+'</td>'+
								'<td>'+data[i]['nama_asal']+'</td>'+
								'<td>'+data[i]['nama_rujuk']+'</td>'+
								'<td>'+data[i]['nama_petugas']+'</td>'+
								'<td>'+tanggal+'</td>'+
								'<td>'+data[i]['alamat_skr']+'</td>'+
								'<td>'+data[i]['jenis_kelamin']+'</td>'+
								'<td>'+data[i]['tanggal_visit']+'</td>'+
								'<td style="text-align:center">'+
									'<a href="#view" data-toggle="modal" data-original-title="View" onClick="visitRujuk(&quot;'+data[i]['rj_id']+'&quot;)">'+
									'<i class="glyphicon glyphicon-edit"data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
									'<a href="#" data-toggle="modal" data-original-title="Delete" onClick="batalRujuk(&quot;'+data[i]['visit_id']+'&quot;)>'+
									'<i class="glyphicon glyphicon-trash"data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>'+
								'</td>'+
							'</tr>'
							);
						}
					}else{
						$('#tbody_rujuk_rj').append('<tr><td colspan="11" style="text-align:center">Tidak Terdapat Pasien RUjukan</td></tr>');
					}
				},error:function(data){
					console.log(data);
					alert('error');
				}
			});
		});

		$('#search_rujuk').submit(function(e){
			e.preventDefault();
			var item = {};

			item['search'] = $('#text_rujuk').val();

			$.ajax({
				type:'POST',
				data:item,
				url:'<?php echo base_url(); ?>pasien/daftarpasien/get_search_rujukan',
				success:function(data){
					console.log(data);
				
					$('#tbody_rujuk_rj').empty();

					if(data.length > 0){
						for(var i=0; i<data.length;i++){
							var tanggal = changeDate(data[i]['tanggal_lahir']);

							$('#tbody_rujuk_rj').append(
							'<tr>'+
								'<td>'+(i+1)+'</td>'+
								'<td>'+data[i]['rm_id']+'</td>'+
								'<td>'+data[i]['nama']+'</td>'+
								'<td>'+data[i]['nama_asal']+'</td>'+
								'<td>'+data[i]['nama_rujuk']+'</td>'+
								'<td>'+data[i]['nama_petugas']+'</td>'+
								'<td>'+tanggal+'</td>'+
								'<td>'+data[i]['alamat_skr']+'</td>'+
								'<td>'+data[i]['jenis_kelamin']+'</td>'+
								'<td>'+data[i]['tanggal_visit']+'</td>'+
								'<td style="text-align:center">'+
									'<a href="#view" data-toggle="modal" data-original-title="View" onClick="visitRujuk(&quot;'+data[i]['rj_id']+'&quot;)">'+
									'<i class="glyphicon glyphicon-edit"data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
									'<a href="#" data-toggle="modal" data-original-title="Delete" onClick="batalRujuk(&quot;'+data[i]['visit_id']+'&quot;)">'+
									'<i class="glyphicon glyphicon-trash"data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>'+
								'</td>'+
							'</tr>'
							);
						}
					}else{
						$('#tbody_rujuk_rj').append('<tr><td colspan="11" style="text-align:center">Data Pasien Tidak Ditemukan</td></tr>');
					}
				}
			});

		});

		$('#text_rujuk').keyup(function(e){
			e.preventDefault();

			if($(this).val() == ""){
				$.ajax({
					type:'POST',
					url:'<?php echo base_url(); ?>pasien/daftarpasien/get_pasien_rujuk',
					success:function(data){
						console.log(data);
					
						$('#tbody_rujuk_rj').empty();

						if(data.length > 0){
							for(var i=0; i<data.length;i++){
								var tanggal = changeDate(data[i]['tanggal_lahir']);

								$('#tbody_rujuk_rj').append(
								'<tr>'+
									'<td>'+(i+1)+'</td>'+
									'<td>'+data[i]['rm_id']+'</td>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td>'+data[i]['nama_asal']+'</td>'+
									'<td>'+data[i]['nama_rujuk']+'</td>'+
									'<td>'+data[i]['nama_petugas']+'</td>'+
									'<td>'+tanggal+'</td>'+
									'<td>'+data[i]['alamat_skr']+'</td>'+
									'<td>'+data[i]['jenis_kelamin']+'</td>'+
									'<td>'+data[i]['tanggal_visit']+'</td>'+
									'<td style="text-align:center">'+
										'<a href="#view" data-toggle="modal" data-original-title="View" onClick="visitRujuk(&quot;'+data[i]['rj_id']+'&quot;)">'+
										'<i class="glyphicon glyphicon-edit"data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
										'<a href="#" data-toggle="modal" data-original-title="Delete" onClick="batalRujuk(&quot;'+data[i]['visit_id']+'&quot;)">'+
										'<i class="glyphicon glyphicon-trash"data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>'+
									'</td>'+
								'</tr>'
								);
							}
						}else{
							$('#tbody_rujuk_rj').append('<tr><td colspan="11" style="text-align:center">Tidak Terdapat Pasien RUjukan</td></tr>');
						}
					}
				});
			}
		});
	});

	function visit(rm_id,nama){
		$('#modal_no_rm').val(rm_id);
		$('#modal_nama').val(nama);
	}

	function visitRujuk(rj_id){

		$.ajax({
			type:'POST',
			url:'<?php echo base_url(); ?>pasien/daftarpasien/get_pasien_rujukan/'+rj_id,
			success:function(data){
				console.log(data);

				var remove = data[0]['tanggal_lahir'].split("-");
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

				$('#date_rujuk').val(data[0]['waktu_keluar']);
				$('#rm_rujuk').val(data[0]['rm_id']);
				$('#nama_rujuk').val(data[0]['nama']);
				$('#asal_rujuk').val(data[0]['nama_asal']);
				$('#idasal_rujuk').val(data[0]['unit_tujuan']);
				$('#dokter_rujuk').val(data[0]['nama_petugas']);
				$('#poli_rujuk').val(data[0]['unit_rujukan']);
				$('#carabayar_rujuk').val(data[0]['cara_bayar']);
				$('#namaAsuransi_rujuk').val(data[0]['nama_asuransi']);
				$('#perusahaan_rujuk').val(data[0]['nama_perusahaan']);
				$('#kelas_rujuk').val(data[0]['kelas_pelayanan']);
				$('#nomorAsuransi_rujuk').val(data[0]['no_asuransi']);
				$('#visit_rujuk').val(data[0]['visit_id']);

				var val = data[0]['cara_bayar'];

				if(val == 'Umum'){
					$('#asuransi_rujuk').hide();
					$('#kontrak_rujuk').hide();
					$('#kelasP_rujuk').hide();
					$('#noAsuransi_rujuk').hide();
				}
				else if(val == 'BPJS'){
					$('#asuransi_rujuk').hide();
					$('#kontrak_rujuk').hide();
					$('#kelasP_rujuk').show();
					$('#noAsuransi_rujuk').show();
				}
				else if(val == 'Asuransi'){
					$('#asuransi_rujuk').show();
					$('#kontrak_rujuk').hide();
					$('#kelasP_rujuk').hide();
					$('#noAsuransi_rujuk').show();
				}
				else if(val == 'Jamkesmas'){
					$('#asuransi_rujuk').hide();
					$('#kontrak_rujuk').hide();
					$('#kelasP_rujuk').hide();
					$('#noAsuransi_rujuk').show();
				}
				else if(val == 'Kontrak'){
					$('#asuransi_rujuk').hide();
					$('#kontrak_rujuk').show();
					$('#kelasP_rujuk').hide();
					$('#noAsuransi_rujuk').show();
				}
				else if(val == 'Gratis'){
					$('#asuransi_rujuk').hide();
					$('#kontrak_rujuk').hide();
					$('#kelasP_rujuk').hide();
					$('#noAsuransi_rujuk').show();
				}
				else if(val == 'Lain'){
					$('#asuransi_rujuk').hide();
					$('#kontrak_rujuk').hide();
					$('#kelasP_rujuk').hide();
					$('#noAsuransi_rujuk').hide();
				}
			}
		});
	}

	function batalRujuk(v_id){
		$.ajax({
			type:'POST',
			url:'<?php echo base_url(); ?>pasien/daftarpasien/batal_rujuk/'+v_id,
			success:function(data){
				console.log(data);
				$('#tbody_rujuk_rj').empty();

				if(data.length > 0){
					for(var i=0; i<data.length;i++){
						var tanggal = changeDate(data[i]['tanggal_lahir']);

						$('#tbody_rujuk_rj').append(
						'<tr>'+
							'<td>'+(i+1)+'</td>'+
							'<td>'+data[i]['rm_id']+'</td>'+
							'<td>'+data[i]['nama']+'</td>'+
							'<td>'+data[i]['nama_asal']+'</td>'+
							'<td>'+data[i]['nama_rujuk']+'</td>'+
							'<td>'+data[i]['nama_petugas']+'</td>'+
							'<td>'+tanggal+'</td>'+
							'<td>'+data[i]['alamat_skr']+'</td>'+
							'<td>'+data[i]['jenis_kelamin']+'</td>'+
							'<td>'+data[i]['tanggal_visit']+'</td>'+
							'<td style="text-align:center">'+
								'<a href="#view" data-toggle="modal" data-original-title="View" onClick="visitRujuk(&quot;'+data[i]['rj_id']+'&quot;)">'+
								'<i class="glyphicon glyphicon-edit"data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
								'<a href="#" data-toggle="modal" data-original-title="Delete" onClick="batalRujuk(&quot;'+data[i]['visit_id']+'&quot;)">'+
								'<i class="glyphicon glyphicon-trash"data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>'+
							'</td>'+
						'</tr>'
						);
					}
				}else{
					$('#tbody_rujuk_rj').append('<tr><td colspan="11" style="text-align:center">Tidak Terdapat Pasien RUjukan</td></tr>');
				}
			}
		});
	}

	function changeDate(insert){
		var remove = insert.split("-");
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

		return tgl;
	}
</script><!-- data-target="#tambahPemeriksaan" -->