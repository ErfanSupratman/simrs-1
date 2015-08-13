<?php

?>

								
<script type="text/javascript">
		$(document).ready(function(){

			$('#modal-kamar').click(function(){
				$('#pilkamar').modal('hide');
			});

			$('#close-kamar').click(function(){
				$('#pilkamar').modal('hide');
			});

			$("#datepicker-reg").datepicker();

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

			$("#kelas_kamar").attr('disabled',true);

			// $("#kamar").change(function(){
			// 	var nama = this.value;

			// 	if(nama == "")
			// 		$("#kelas_kamar").attr('disabled',true);
			// 	else{
			// 		$("#kelas_kamar").attr('disabled',false);
			// 		$.ajax({
			// 			type:'POST',
			// 			dataType: "html",
			// 			url :'<?php echo base_url()?>pasien/rawatinap/select_kelas_kamar/'+nama,
			// 			success:function(hasil){
			// 				$("#kelas_kamar").html(hasil);
			// 			}
			// 		});	
			// 	}
			// });
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
								 				'<a href="#daftarkan" data-toggle="modal" data-original-title="Tambah Pemeriksaan" onclick="visit('+rm_id+',&quot;'+name+'&quot;)" >'+
								 				'<i class="fa fa-plus"></i></a>'+
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

			var now = new Date();
			var nowFormat = now.getDate()+"-"+now.getMonth()+"-"+now.getFullYear();
			$("#inputdate").val(nowFormat);

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
						$('#daftarkan').modal('show');
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
					},
					error:function (data){
						
					}

				});

				e.preventDefault();
			});
		
			var itemModal = {};
			$('#submitDaftarkan').submit(function(e){
				e.preventDefault();
				itemModal['tanggal_visit']= $('#inputdate').val();
				itemModal['rm_id'] = $('#modal_no_rm').val();
				itemModal['kelas_pelayanan'] = $('#kelas_pelayanan').val();
				itemModal['cara_bayar'] = $('#carabayar').val();
				itemModal['nama_asuransi'] = $('#namaAsuransi').val();
				itemModal['no_asuransi'] = $('#nomorAsuransi').val();
				itemModal['nama_perusahaan'] = $('#namaPerusahaan').val();
				itemModal['cara_masuk'] = $('#caramasuk').val();
				itemModal['detail_masuk'] = $('#detailmasuk').val();
				itemModal['tipe_kunjungan'] = "RAWAT INAP";
				itemModal['petugas_registrasi'] = "User Login";
				itemModal['dept_id'] = $('#deptTujuan').val();
				itemModal['kamar_id'] = $('#kamar_id').val();
				itemModal['bed_id'] = $('#bed_id').val();
				itemModal['is_pasien_lama'] = $('#adminitrasi').val();
				console.log(itemModal);
				
				$.ajax({
					type:"POST",
					url:"<?php echo base_url()?>pasien/rawatinap/add_visit_ri",
					data: itemModal,
					success:function(data){
						alert('Data berhasil ditambahkan');
						window.location = '<?php echo base_url()?>pasien/rawatinap';	
					},
					error:function(data){
						alert('Data gagal ditambahkan');	
						console.log(data);
					}
				});
			});
		
		$('#kamar').click(function(){
			var dept = $('#deptTujuan').val();
			var dataKamar = '';

			$('#tbody_kamar').empty();
			$.ajax({
				type:"POST",
				url:"<?php echo base_url() ?>pasien/rawatinap/get_kamar/"+dept,
				success:function(data){
					var kamarSkr = '',
						kamarBaru = '';				
					console.log(data);

					for(var i = 0; i<data.length;i++){
						var nama_kamar = data[i]['nama_kamar'];
						var kamar_id = data[i]['kamar_id'];
						var kelas_kamar = data[i]['kelas_kamar'];
						var jumlah = data[i]['jumlah'];
						var terpakai = data[i]['terpakai'];
						var nama_bed = data[i]['nama_bed'];
						var bed_id = data[i]['bed_id'];
						var is_dipakai = data[i]['is_dipakai'];

						kamarSkr = kamar_id;

						if(kamarSkr!=kamarBaru){
							if(i!=0){
								dataKamar+='<tr><td colspan="5"></td></tr>';
							}

							dataKamar+='<tr>'+
									'<td>'+nama_kamar+'</td>'+
									'<td>'+kelas_kamar+'</td>'+
									'<td>'+jumlah+'</td>'+
									'<td>'+terpakai+'</td>'+
									'<td></td>'+
								'</tr>';

							dataKamar+='<tr>'+
									'<td><input type="hidden" value="'+bed_id+'"></td>'+
									'<td></td>'+
									'<td></td>'+
									'<td>'+nama_bed+'</td>';
							if(is_dipakai==0){
								dataKamar+='<td style="text-align:center;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"  style="cursor:pointer;" onClick="pilih_bed('+kamar_id+','+bed_id+',&quot;'+nama_bed+'&quot;)"></i></td>'+
								'</tr>';
							}else{
								dataKamar+='<td></td></tr>';
							}
						}else{
							dataKamar+='<tr>'+
								'<td><input type="hidden" value="'+bed_id+'"></td>'+
								'<td></td>'+
								'<td></td>'+
								'<td>'+nama_bed+'</td>';
							
							if(is_dipakai==0){
								dataKamar+='<td style="text-align:center;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"  style="cursor:pointer;" onClick="pilih_bed('+kamar_id+','+bed_id+',&quot;'+nama_bed+'&quot;)"></i></td>'+
								'</tr>';
							}else{
								dataKamar+='<td></td></tr>';
							}
						}
						kamarBaru = kamarSkr;
					}
					$('#tbody_kamar').append(dataKamar);

				}
			});
		});

	
		var r_item = {};
		$('#submit_rujukan').submit(function(e){
			r_item['visit_id'] = $('#modalrujuk_visit').val();
			r_item['waktu_masuk'] = $('#modalrujuk_tgl').val();
			r_item['cara_bayar'] = $('#carabayarruj').val();
			r_item['nama_asuransi'] = $('.modalrujuk_nasur').val();
			r_item['no_asuransi'] = $('#modalrujuk_noasur').val();
			r_item['nama_perusahaan'] = $('.modalrujuk_nperus').val();
			r_item['kelas_pelayanan'] = $('#kelasBpjs').val();

			e.preventDefault();
			$.ajax({
				type:'POST',
				data:r_item,
				url:'<?php echo base_url() ?>pasien/rawatinap/add_rujuk_inap',
				success:function(data){
					alert('Data Berhasil Ditambahkan');
					console.log(data);
					$('#daftarkanrujukan').modal('hide');
				},error:function(data){
					console.log(data);
					alert('Data Gagal Ditambahkan');
				}
			});
		});

		

		});
		function visit(rm_id,nama){
			$('#modal_no_rm').val(rm_id);
			$('#modal_nama').val(nama);
		}

		function pilih_bed(kamar_id, bed_id, nama_bed){
			$('#kamar_id').val(kamar_id);
			$('#bed_id').val(bed_id);
			$('#kamar').val(nama_bed);
			$('#pilkamar').modal('hide');
		}

		function rujuk(nama, rm, visit_id){
			alert(visit_id);
			$('#modalrujuk_visit').val(visit_id);
			$('#modalrujuk_rm').val(rm);
			$('#modalrujuk_nama').val(nama);
		}

</script>
