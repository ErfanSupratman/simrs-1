<?php

?>

<script type="text/javascript">
	$(document).ready(function(){
		var type = $('#typeregis').val();

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

		var item = {};
		$('#submit_form').submit(function(e){

			item['rm_lama']=$('#new_rm_id').val();
			item['nama']=$('#newNamaLengkap').val();
			item['alias']=$('#newAlias').val();
			item['tempat_lahir']=$('#newTempatLahir').val();
			item['tanggal_lahir']=$('#datepicker-reg').val();
			item['jenis_kelamin'] = $("input[name=jk]:checked").val();

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
				url:"<?php echo base_url()?>pasien/pendaftaran/add_pasien",
				data: item,
				success:function(data){
					//$('#submitquery').attr("data-target","#tambahPemeriksaan"); 

					if(type=="rawatjalan"){
						$('#daftarkanrawatjalan').modal('show');
						$('#modal_no_rm').val(data['rm_id']);
						$('#modal_nama').val(data['nama']);
					}else{
						$('#daftarkanrawatinap').modal('show');
						$('#ri_modal_no_rm').val(data['rm_id']);
						$('#ri_modal_nama').val(data['nama']);
					}

					alert('Data berhasil ditambahkan');

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
					alert('error');
				}

			});

			e.preventDefault();
		});
		
		$('#submitPemeriksaan').submit(function(e){
			var itemModal = {};
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
			if($('#pasienLama').val()!="")
				itemModal['is_pasien_lama'] = $('#pasienLama').val();
			else
				itemModal['is_pasien_lama'] = $('#pasienBaru').val();

			if($('#jenisKasusLama').val()!="")
				itemModal['is_kasus_baru'] = $('#jenisKasusLama').val();
			else
				itemModal['is_kasus_baru'] = $('#jenisKasusBaru').val();

			if($('#knjunganLama').val()!="")
				itemModal['is_kunjungan_baru'] = $('#knjunganLama').val();
			else
				itemModal['is_kunjungan_baru'] = $('#knjunganBaru').val();
			itemModal['tipe_kunjungan'] = "RAWAT JALAN";
			itemModal['petugas_registrasi'] = "User Login";

			e.preventDefault();
			console.log(itemModal);

			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>pasien/pendaftaran/add_visit_rj",
				data: itemModal,
				success:function(data){
					alert('Data berhasil ditambahkan');	
					window.location = '<?php echo base_url()?>pasien/daftarpasien';
				},
				error:function(data){
					console.log(data);
				}					
			});
		});

		
		$('#submitDaftarkan').submit(function(e){
			var itemModal = {};
			e.preventDefault();
			itemModal['tanggal_visit']= $('#ri_inputdate').val();
			itemModal['rm_id'] = $('#ri_modal_no_rm').val();
			itemModal['ri_kelas_pelayanan'] = $('#kelas_pelayanan').val();
			itemModal['cara_bayar'] = $('#carabayar2').val();
			itemModal['nama_asuransi'] = $('#ri_namaAsuransi').val();
			itemModal['no_asuransi'] = $('#ri_nomorAsuransi').val();
			itemModal['nama_perusahaan'] = $('#ri_namaPerusahaan').val();
			itemModal['cara_masuk'] = $('#ri_caramasuk').val();
			itemModal['detail_masuk'] = $('#ri_detailmasuk').val();
			itemModal['tipe_kunjungan'] = "RAWAT INAP";
			itemModal['petugas_registrasi'] = "User Login";

			itemModal['nama_kamar'] = $('#kamar').val();
			itemModal['kelas_kamar'] = $('#kelas_kamar').val();

			
			console.log(itemModal);
			
			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>pasien/pendaftaran/add_visit_ri",
				data: itemModal,
				success:function(data){
					alert('Data berhasil ditambahkan');	
					window.location = '<?php echo base_url()?>pasien/rawatinap';	
					
				},
				error:function(data){

				}
			});

		});

		$("#ri_kontrak").hide();
		$("#ri_kelas").hide();
		$("#ri_asuransi").hide();
		$("#ri_noAsuransi").hide();
	
		$("#carabayar2").change(function(){
			if (document.getElementById('carabayar2').value=="BPJS") {
				$("#ri_asuransi").hide();
				$("#ri_kontrak").hide();
				$("#ri_kelas").show();
				$("#ri_noAsuransi").show();
			}
			else if (document.getElementById('carabayar2').value=="Asuransi") {
				$("#ri_kontrak").hide();
				$("#ri_kelas").hide();
				$("#ri_asuransi").show();
				$("#ri_noAsuransi").show();
			}
			else if (document.getElementById('carabayar2').value=="Kontrak") {
				$("#ri_asuransi").hide();
				$("#ri_kelas").hide();
				$("#ri_kontrak").show();
				$("#ri_noAsuransi").hide();
			}
			else if(document.getElementById('carabayar2').value=="Jamkesmas"){
				$("#ri_kontrak").hide();
				$("#ri_kelas").hide();
				$("#ri_asuransi").hide();
				$("#ri_noAsuransi").show();	
			}
			else{
				$("#ri_noAsuransi").hide();
				$("#ri_asuransi").hide();
				$("#ri_kontrak").hide();
				$("#ri_kelas").hide();
			}
		});
	});

	function visit(rm_id,nama){
		$('#modal_no_rm').val(rm_id);
		$('#modal_nama').val(nama);
	}

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
</script><!-- data-target="#tambahPemeriksaan" -->