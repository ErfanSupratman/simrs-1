<script type="text/javascript">
	$(document).ready(function () {
		/*---------------------------------baru----------------------------*/
		/*overview klinis*/
		var diagnosa = 0;
		$('.d1').click(function(){diagnosa = 1;});
		$('.d2').click(function(){diagnosa = 2;});
		$('.d3').click(function(){diagnosa = 3;});
		$('.d4').click(function(){diagnosa = 4;});
		$('.d5').click(function(){diagnosa = 5;});
		$('.d1igd').click(function(){diagnosa = 6;});
		$('.d2igd').click(function(){diagnosa = 7;});
		$('.d3igd').click(function(){diagnosa = 8;});
		$('.d4igd').click(function(){diagnosa = 9;});
		$('.d5igd').click(function(){diagnosa = 10;});
		$('.fisik1').click(function(){diagnosa = 11;});
		$('.ov').click(function(){diagnosa = 12;});
		$('.ov1').click(function(){diagnosa = 13;});
		$('.ov2').click(function(){diagnosa = 14;});
		$('.ov3').click(function(){diagnosa = 15;});
		$('.ov4').click(function(){diagnosa = 16;});
		$('.resume1').click(function(){diagnosa = 17;});
		$('.resume2').click(function(){diagnosa = 18;});
		$('.resume3').click(function(){diagnosa = 19;});
		$('.reseme4').click(function(){diagnosa = 20;});
		$('.resume5').click(function(){diagnosa = 21;});
		$('.resume6').click(function(){diagnosa = 22;});
		$('#search_diagnosa').submit(function(e){
			e.preventDefault();
			var key = $('#katakunci_diag').val();

			$.ajax({
				type:'POST',
				url:'<?php echo base_url() ?>bersalin/bersalindetail/search_diagnosa/'+key,
				success:function(data){
					$('#tbody_diagnosa').empty();

					if(data.length>0){
						for(var i = 0; i<data.length;i++){
							$('#tbody_diagnosa').append(
								'<tr>'+
									'<td>'+data[i]['diagnosis_id']+'</td>'+
									'<td max-width="60%" style="word-wrap:break-word">'+data[i]['diagnosis_nama']+'</td>'+
									'<td style="text-align:center; cursor:pointer;"><a onclick="get_diagnosa(&quot;'+data[i]['diagnosis_id']+'&quot;, &quot;'+data[i]['diagnosis_nama']+'&quot;, &quot;'+diagnosa+'&quot;)"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"></i></a></td>'+
								'</tr>'
							);
						}
					}else{
						$('#tbody_diagnosa').append(
							'<tr><td colspan="3" style="text-align:center;">Data Diagnosa Tidak Ditemukan</td></tr>'
						);
					}
				}, error:function(data){
					console.log(data);
					alert('gagal');
				}
			});
		});

		$("#submitOverKlinis").submit(function(e){
			e.preventDefault();
			
			var item = {};
		    var number = 1;
		    item[number] = {};
			item[number]['waktu'] = $('#inputdate').val();
			item[number]['visit_id'] = $('#v_id').val();
			item[number]['rj_id'] = $('#r_id').val();
			item[number]['tekanan_darah'] = $("#tekanandarahOver").val();
			item[number]['anamnesa'] = $('#anamnesaOver').val();
			item[number]['temperatur'] = $('#tempOver').val();
			item[number]['nadi'] = $('#nadiOver').val();
			item[number]['pernapasan'] = $('#pernapasanOver').val();
			item[number]['berat_badan'] = $('#beratOver').val();
			item[number]['dokter'] = $('#id_dokterOver').val();
			item[number]['diagnosa1'] = $('#k_utama_over').val();
			item[number]['diagnosa2'] = $('#k_sek_over').val();
			item[number]['diagnosa3'] = $('#k_sek_over2').val();
			item[number]['diagnosa4'] = $('#k_sek_over3').val();
			item[number]['diagnosa5'] = $('#k_sek_over4').val();
			item[number]['detail_diagnosa'] = $('#detail_over').val();
			item[number]['terapi'] = $('#terapi_over').val();
			item[number]['alergi'] = $('#alergi_over').val();
			if(item[number]['dokter'] == ''){
				alert('isi data dengan benar');$('#nama_dOver').focus();return false;
			}
			console.log(item);
			save_overview(item);

			return false;
		});

		var d_click = 0;

		$('#nama_dOver').click(function(){d_click = 1;});
		$('#dokteroverigd').click(function(){d_click = 2;});
		$('#dokterperiksafisik').click(function(){d_click = 3;});		
		$('#dokteroverperawatan').click(function(){d_click = 4;});
		$('#dokterpenolongbersalin').click(function(){d_click = 5;});
		$('#resep_namadokter').click(function(){d_click = 6;});
		$('#namadokter_o').click(function(){d_click = 7;});
		$('#konsul_dokter').click(function(){d_click = 8;});
		$('#namadokter_resume1').click(function(){d_click = 9;});
		$('#namadokter_resume2').click(function(){d_click = 10;});

		$('#inputDokter').keyup(function(event){
			var item = {};
			item['katakunci'] = $('#inputDokter').val();
			event.preventDefault();

			$.ajax({
				type:'POST',
				data: item,
				url:"<?php echo base_url()?>bersalin/bersalindetail/search_dokter",
				success:function(data){
					console.log(data);
					$('#tbody_dokter').empty();
 					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							var nama = data[i]['nama_petugas'],
								id = data[i]['petugas_id'];

							$("#tbody_dokter").append(
								'<tr>'+
									'<td>'+nama+'</td>'+
									'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getDokter(&quot;'+id+'&quot; , &quot;'+nama+'&quot;, &quot;'+d_click+'&quot;)"></i></td>'+
								'</tr>'
							);
						}
					}else{
						$('#tbody_dokter').empty();
						$('#tbody_dokter').append(
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

		$('#tbody_overview').on('click', 'tr td a.viewdetailoverviewklinis', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .overviewid_detail').val();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>bersalin/bersalindetail/get_detail_overview_klinis/" + id,
				success: function (data) {
					console.log(data);
					$('#waktutindakanklinis').val(data['waktu']);
					$('#anamnesaklinis').val(data['anamnesa']);
					$('#tekanandarahklinis').val(data['tekanan_darah']);
					$('#temperaturklinis').val(data['temperatur']);
					$('#nadiklinis').val(data['nadi']);
					$('#pernapasanklinis').val(data['pernapasan']);
					$('#beratklinis').val(data['berat_badan']);
					$('#dokterklinis').val(data['nama_petugas']);
					$('#kode_utamaklinis').val(data['diag_u']);
					$('#diagutamaklinis').val(data['diagnosa_utama']);
					$('#sekunderklinis1_1').val(data['diagnosa_1']);
					$('#sekunderklinis2_2').val(data['diagnosa_2']);
					$('#sekunderklinis3_3').val(data['diagnosa_3']);
					$('#sekunderklinis4_4').val(data['diagnosa_4']);
					$('#sekunderklinis1').val(data['diag_1']);
					$('#sekunderklinis2').val(data['diag_2']);
					$('#sekunderklinis3').val(data['diag_3']);
					$('#sekunderklinis4').val(data['diag_4']);
					$('#detailDiagnosaklinis').val(data['detail_diagnosa']);
					$('#terapiklinis').val(data['terapi']);
					$('#alergiklinis').val(data['alergi']);

				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		/*akhir overview klinis*/

		/*overview IGD*/
		var p_click = 0;

		$('#perawatoverigd').click(function(){p_click = 1;});
		$('#perawatasuhan1').click(function(){p_click = 2;});
		$('#perawatasuhan2').click(function(){p_click = 3;});

		$('#katakunciperawat').keyup(function(event){
			var p_item = $('#katakunciperawat').val();
			event.preventDefault();

			$.ajax({
				type:'POST',
				url:"<?php echo base_url()?>bersalin/bersalindetail/search_perawat/"+p_item,
				success:function(data){
					console.log(data);
					$('#tbody_perawat').empty();
 					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							var nama = data[i]['nama_petugas'],
								id = data[i]['petugas_id'];

							$("#tbody_perawat").append(
								'<tr>'+
									'<td>'+nama+'</td>'+
									'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getPerawat(&quot;'+id+'&quot; , &quot;'+nama+'&quot;, &quot;'+p_click+'&quot;)"></i></td>'+
								'</tr>'
							);
						}
					}else{
						$('#tbody_perawat').empty();
						$('#tbody_perawat').append(
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
		$('#submitOverIGD').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};
			item[number]['waktu'] = format_date3($('#waktuoverigd').val());
			item[number]['visit_id'] = $('#v_id_igd').val();
			item[number]['sub_visit'] = $('#r_id_igd').val();
			item[number]['tekanan_darah'] = $("#tekanandarahoverigd").val();
			item[number]['anamnesa'] = $('#anamnesaoverigd').val();
			item[number]['temperatur'] = $('#temperaturoverigd').val();
			item[number]['nadi'] = $('#nadioverigd').val();
			item[number]['pernapasan'] = $('#pernapasanoverigd').val();
			item[number]['berat_badan'] = $('#beratoverigd').val();
			item[number]['dokter'] = $('#id_dokter_jaga').val();
			item[number]['perawat'] = $('#id_perawat_jaga').val();
			item[number]['kepala_leher'] = $('#kepalaoverigd').val();
			item[number]['thorax_abd'] = $('#thoraxoverigd').val();
			item[number]['extrimitas'] = $('#exoverigd').val();
			item[number]['diagnosa1'] = $('#kode_utamaoverigd').val();
			item[number]['diagnosa2'] = $('#kode_sek1overigd').val();
			item[number]['diagnosa3'] = $('#kode_sek2overigd').val();
			item[number]['diagnosa4'] = $('#kode_sek3overigd').val();
			item[number]['diagnosa5'] = $('#kode_sek4overigd').val();
			item[number]['detail_diagnosa'] = $('#detailDiagnosaoverigd').val();
			item[number]['terapi'] = $('#terapioverigd').val();
			if(item[number]['dokter'] == ''){
				alert('isi data dengan benar');$('#dokteroverigd').focus();return false;
			}

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/submit_overview_igd",
				success: function (data) {
					alert('data Berhasil disimpan');
					var jml = $('#jml_overigd').val();
					var no = parseInt(jml)+1;
					$('#inputdate').val("<?php echo date('d/m/Y H:i') ?>");
					$(':input','#submitOverKlinis')
					  .not(':button, :submit, :reset, :hidden')
					  .val('');
					
					var last = '<a href="#riwayatpenangananigd" class="viewdetailoverviewigd" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>'+
							'<input type="hidden" class="overviewigdid_detail" value="'+data['id']+'">'
					var dok = ($('#dokteroverigd').val() == '' ? '-' : $('#dokteroverigd').val());
					var per = ($('#perawatoverigd').val() == ''? '-' : $('#perawatoverigd').val());
					var t = $('#tableoverviewigd').DataTable();
					t.row.add([
						no,
						data['waktu'],
						data['anamnesa'],
						dok,
						per,
						last,
						"fa"						
					]).draw();
					
					$('#jml_overigd').val(no);
				alert("Data Berhasil Disimpan");
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#tbody_overviewigd').on('click', 'tr td a.viewdetailoverviewigd', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .overviewigdid_detail').val();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>bersalin/bersalindetail/get_detail_overview_igd/" + id,
				success: function (data) {
					//console.log(data);
					$('#waktutindakanigd').val(data['waktu']);
					$('#anamnesaigd').val(data['anamnesa']);
					$('#tekanandarahigd').val(data['tekanan_darah']);
					$('#temperaturigd').val(data['temperatur']);
					$('#nadiigd').val(data['nadi']);
					$('#pernapasanigd').val(data['pernapasan']);
					$('#beratigd').val(data['berat_badan']);
					$('#dokterigd').val(data['nama_petugas']);
					$('#kode_utamaigd').val(data['diag_u']);
					$('#diagutamaigd').val(data['diagnosa_utama']);
					$('#igd1igd').val(data['diagnosa_1']);
					$('#igd2igd').val(data['diagnosa_2']);
					$('#igd3igd').val(data['diagnosa_3']);
					$('#igd4igd').val(data['diagnosa_4']);
					$('#kode_sek1igd').val(data['diag_1']);
					$('#kode_sek2igd').val(data['diag_2']);
					$('#kode_sek3igd').val(data['diag_3']);
					$('#kode_sek4igd').val(data['diag_4']);
					$('#detailDiagnosaigd').val(data['detail_diagnosa']);
					$('#kepalaleherigd').val(data['kepala_leher']);
					$('#thoraxigd').val(data['thorax_abd']);
					$('#extremitasigd').val(data['extrimitas']);
					$('#terapiigd').val(data['terapi']);

				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		/*overview igd*/
		$('#submitoverviewibuhamil').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};
			item[number]['perkiraan_lahir'] = format_date3($('#perkiraanlahir').val());
			item[number]['visit_id'] = $('#v_idhamil').val();
			item[number]['sub_visit'] = $('#ri_idhamil').val();
			item[number]['umur_haid'] = $("#pertamahaid").val();
			item[number]['lama_haid'] = $('#lamahaid').val();
			item[number]['siklus_haid'] = $('#siklushaid').val();
			item[number]['hpht'] = $('#hpht').val();
			item[number]['perkawinan'] = $('#perkawinan').val();
			item[number]['umur_pernikahan'] = $('#umurpernikahan').val();
			item[number]['ikut_kb'] = $('#kb').find('option:selected').val();
			item[number]['metode'] = $('#metoda').find('option:selected').val();
			item[number]['lingkar_lg_atas'] = $('#lingkarLengan').val();
			item[number]['tinggi_badan'] = $('#tinggibadan').val();
			item[number]['hamil_ke'] = $('#hamilke').val();
			item[number]['jml_persalinan'] = $('#jml_persalinan').val();
			item[number]['riw_alergi'] = $('#riw_alergi').val();
			item[number]['jml_gugur'] = $('#jml_gugur').val();
			item[number]['jml_hidup'] = $('#jml_hidup').val();
			item[number]['jml_mati'] = $('#jml_mati').val();
			item[number]['jml_prematur'] = $('#jml_prematur').val();
			item[number]['jarak_akhir'] = ($('#jarak_akhir').val() + " " + $('#ketjarak').find('option:selected').val());
			item[number]['imun_akhir'] = ($('#imun_akhir').val() + " " + $('#ket_imun').find('option:selected').val());
			item[number]['penolong_akhir'] = $('#penolong_akhir').val();
			item[number]['obstetrik'] = $('#riwobstetrik').val();
			item[number]['penyakit_operasi'] = $('#penyakitoperasi').val();
			if(item[number]['perkiraan_lahir'] == ''){
				alert('isi data dengan benar');$('#perkiraanlahir').focus();return false;
			}
			if ($('#metoda').find('option:selected').val() == '') {
				alert('isi data dengan benar');$('#metoda').focus();return false;
			};
			//console.log(item);return false;
			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url() ?>bersalin/bersalindetail/submit_visit_hamil',
				success: function (data) {
					console.log(data);
					$(':input','#submitoverviewibuhamil')
					  .not(':button, :submit, :reset, :hidden')
					  .val('');

					var jml = $('#jml_overhamil').val();
					var no = parseInt(jml)+1;

					var t = $('#tabeloverhamil').DataTable();
					var last = '<center><a href="#detibuhamil" class="viewdetailoverviewhamil" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>'+
								'<input type="hidden" class="overviewighamil_detail" value="'+data['id']+'">'+
								'<a href="#tambahpemeriksaanfisikibu" class="tambahperiksafisikibu" data-toggle="modal"><i class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Tambah Pemeriksaan Fisik Ibu"></i></a>'+
								'<a href="#riwpfi" class="riwpfisikibu" data-toggle="modal"><i class="glyphicon glyphicon-th-list" data-toggle="tooltip" data-placement="top" title="Riwayat Pemeriksaan Fisik Ibu"></i></a></center>'
					var tgl = format_date(data['perkiraan_lahir']);
					t.row.add([
						no,
						tgl,
						data['hamil_ke'],
						last,
						"fa"						
					]).draw();
					
					$('#jml_overhamil').val(no);
					alert("Data Berhasil Disimpan");
				},
				error:function (data) {
					console.log(data);
					alert('gagal')
				}
			})

		})

		$('#tabeloverhamil').on('click', 'tr td a.viewdetailoverviewhamil', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .overviewighamil_detail').val();
			$.ajax({
				type: "POST",
				url: '<?php echo base_url() ?>bersalin/bersalindetail/get_detail_overview_hamil/' + id,
				success: function (data) {
					//console.log(data);
					$('#perkiraanlahirrev').val(data['perkiraan_lahir']);
					$("#pertamahaidrev").val(data['umur_haid']);
					$('#lamahaidrev').val(data['lama_haid']);
					$('#siklushaidrev').val(data['siklus_haid']);
					$('#hphtrev').val(data['hpht']);
					$('#perkawinanrev').val(data['perkawinan']);
					$('#umurpernikahanrev').val(data['umur_pernikahan']);
					$('#kbrev').val(data['ikut_kb']);
					$('#metodarev').val(data['metoda']);
					$('#lingkarLenganrev').val(data['lingkar_lg_atas']);
					$('#tinggirev').val(data['tinggi_badan']);
					$('#hamilkerev').val(data['hamil_ke']);
					$('#jmlpersalinanrev').val(data['jml_persalinan']);
					$('#alergirev').val(data['riw_alergi']);
					$('#gugurrev').val(data['jml_gugur']);
					$('#hiduprev').val(data['jml_hidup']);
					$('#matirev').val(data['jml_mati']);
					$('#prematurrev').val(data['jml_prematur']);
					$('#jarakrev').val(data['jarak_akhir']);
					$('#jarakimunrev').val(data['imun_akhir']);
					$('#penolongrev').val(data['penolong_akhir']);
					$('#obstetrikrev').val(data['obstetrik']);
					$('#penyakitrev').val(data['penyakit_operasi']);
				},
				error:function (data) {
					console.log(data);
				}
			})

		})

		$('#tabeloverhamil').on('click', 'tr td a.tambahperiksafisikibu', function (e) {
			var id = $(this).closest('tr').find('td .overviewighamil_detail').val();
			$('#id_periksaibuhamil').val(id);
		})

		$('#formperiksafisikibu').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['ri_id_overview'] = $('#id_periksaibuhamil').val();
			item['rencana_terapi'] = $('#rencanaterapi').val();
			item['keadaan_umum'] = $('#keadaan_umum').val();
			item['pemeriksaan_luar'] = $('#pemeriksaan_luar').val();
			item['pemeriksaan_dalam'] = $('#pemeriksaan_dalam').val();
			item['dokter_periksa'] = $('#iddokterfisikibu').val();
			item['diagnosa_kerja'] = $('#kode_utamafisikibu').val();
			item['tensi'] = $('#tensifisikibu').val();
			item['nadi'] = $('#nadifisikibu').val();
			item['pernafasan'] = $('#pernafasanfisikibu').val();
			item['suhu'] = $('#suhufisikibu').val();
			
			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url() ?>bersalin/bersalindetail/submit_fisik_hamil',
				success: function (data) {
					alert(data['message']);
					if (data['error'] == 'n') {
						$('#tambahpemeriksaanfisikibu').modal('hide');	
					};
				},
				error: function (data) {
					//console.log(data);
				}
			})

		})

		$('#tabeloverhamil').on('click', 'tr td a.riwpfisikibu', function (e) {
			var id = $(this).closest('tr').find('td .overviewighamil_detail').val();
			
			$.ajax({
				type: "POST",
				url: '<?php echo base_url() ?>bersalin/bersalindetail/get_fisik_ibu/' + id,
				success: function (data) {
					//console.log(data);
					$('#riwayatpemeriksaanfisikibu tbody').empty();
					var j = 0;
					for (var i = 0; i < data.length; i++) {
						$('#riwayatpemeriksaanfisikibu tbody').append(
							'<tr>'+
								'<td>'+(Number(++j))+'</td>'+
								'<td>'+format_date(data[i]['tanggal_periksa'])+'</td>'+
								'<td>'+data[i]['nama_petugas']+'</td>'+
								'<td>'+data[i]['diagnosa_kerja'] + " - "+ data[i]['diagnosis_nama']+'</td>'+
								'<td style="text-align:center">'+
									'<a href="#pemfisikibu" class="detailpemfisikibu" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="detail"></i></a>'+
									'<input type="hidden" class="detail_fisikibu" value="'+data[i]['prime_id']+'">'+
								'</td>'+					
							'</tr>'
						)
					};
						
				},
				error: function (data) {
					
				}
			})
		})

		$('#riwayatpemeriksaanfisikibu tbody').on('click', 'tr td a.detailpemfisikibu', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .detail_fisikibu').val();

			$.ajax({
				type: "POST",
				url: '<?php echo base_url() ?>bersalin/bersalindetail/get_detail_fisik_ibu/' + id,
				success: function (data) {
					//console.log(data);
					$('#rencanaterapi').val(data['rencana_terapi']);
					$('#keadaandet').val(data['keadaan_umum']);
					$('#pemeriksaanluardet').val(data['pemeriksaan_luar']);
					$('#periksadalamdet').val(data['pemeriksaan_dalam']);
					$('#dokterperiksadet').val(data['nama_petugas']);
					$('#kode_utamadet').val(data['diagnosa_kerja']);
					$('#namadiagdet').val(data['diagnosis_nama']);
					$('#tensidet').val(data['tensi']);
					$('#nadidet').val(data['nadi']);
					$('#pernafasandet').val(data['pernafasan']);
					$('#suhudet').val(data['suhu']);
				},
				error: function (data) {
					
				}
			})
		})
		/*overview ibu hamil*/

		/*overview perawatan*/
		$('#submitoverviewperawatan').submit(function (e) {
			e.preventDefault();
			var item = {};
			item[1] = {};
			item[1]['visit_id'] = $('#v_id_perawatan').val();
			item[1]['sub_visit'] = $('#ri_id_perawatan').val();
			item[1]['waktu_visit'] = format_date3($('#waktukunjungandokter').val());
			item[1]['dokter_visit'] = $('#id_dokteroverperawatan').val();
			item[1]['anamnesa'] = $('#anamnesaoverperawatan').val();
			item[1]['diagnosa_utama'] = $('#kode_utamaoverperawatan').val();
			item[1]['sekunder1'] = $('#kode_sek1overperawatan').val();
			item[1]['sekunder2'] = $('#kode_sek2overperawatan').val();
			item[1]['sekunder3'] = $('#kode_sek3overperawatan').val();
			item[1]['sekunder4'] = $('#kode_sek4overperawatan').val();
			item[1]['perkembangan_penyakit'] = $('#perkembanganoverperawatan').val();
			item[1]['tekanan_darah'] = $('#tekanandarahoverperawatan').val();
			item[1]['temperatur'] = $('#temperaturoverperawatan').val();
			item[1]['nadi'] = $('#nadioverperawatan').val();
			item[1]['pernafasan'] = $('#pernapasanoverperawatan').val();
			item[1]['berat_badan'] = $('#beratoverperawatan').val();

			if(item[1]['dokter_visit'] == ''){
				alert('isi data dengan benar');$('#dokteroverperawatan').focus();return false;
			}
			if(item[1]['diagnosa_utama'] == ''){
				alert('isi data dengan benar');$('#kode_utamaoverperawatan').focus();return false;
			}

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/submitoverviewperawatan",
				success: function (data) {
					console.log(data);
					var jml = $('#jml_overkunjungan').val();
					var no = parseInt(jml)+1;					
					var last = '<center><a href="#riwperawatan" class="viewdetailriwperawatan" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>'+
							'<input type="hidden" class="id_detailriwperawatan" value="'+data['kunjungan_dok_id']+'"></center>'					

					var t = $('#tableoverviewperawatan').DataTable();
					var dok =  $('#dokteroverperawatan').val();
					var diag_utama = $('#diagutamaoverperawatan').val();
					var waktu = format_date(data['waktu_visit']);
					t.row.add([no,waktu,dok,diag_utama,'Bersalin',last]).draw();

					$('#waktukunjungandokter').val("<?php echo date('d/m/Y H:i') ?>");
					$(':input','#submitOverKlinis')
					  .not(':button, :submit, :reset, :hidden')
					  .val('');

					$('#jml_overkunjungan').val(no);
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#tableoverviewperawatan tbody').on('click', 'tr td a.viewdetailriwperawatan', function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .id_detailriwperawatan').val();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>bersalin/bersalindetail/get_detail_over_perawatan/" + id,
				success: function (data) {
					console.log(data);
					$(':input','#riwperawatan')
					  .not(':button, :submit, :reset, :hidden')
					  .val('');
					$('#waktutindakanrawat').val(format_date(data['waktu_visit']));
					$('#dokterrawat').val(data['dokter']);
					$('#anamnesarawat').val(data['anamnesa']);
					$('#kode_utamarawat').val(data['diag_u']);
					$('#diagnosautamarawat').val(data['diagnosa_utama']);
					$('#kode_sek1rawat').val(data['diag_1']);
					$('#sek1rawat').val(data['diagnosa_1']);
					$('#kode_sek2rawat').val(data['diag_2']);
					$('#sek2rawat').val(data['diagnosa_2']);
					$('#kode_sek3rawat').val(data['diag_3']);
					$('#sek3rawat').val(data['diagnosa_3']);
					$('#kode_sek4rawat').val(data['diag_4']);
					$('#sek4rawat').val(data['diagnosa_4']);
					$('#perkembanganrawat').val(data['perkembangan_penyakit']);
					$('#tekanandarahrawat').val(data['tekanan_darah']);
					$('#temperaturrawat').val(data['temperatur']);
					$('#nadirawat').val(data['nadi']);
					$('#pernapasanrawat').val(data['pernafasan']);
					$('#beratrawat').val(data['berat_badan']);
				},
				error: function (data) {
					console.log(data);
				}

			})
		})

		//asuhan keperawatan
		$('#submitasuhankeperawatan').submit(function (e) {
			e.preventDefault();
			var item = {};
			item[0] = {};
			item[0]['visit_id'] = $('#v_id_asuhan').val();
			item[0]['sub_visit'] = $('#ri_id_asuhan').val();
			item[0]['waktu_tindakan'] = format_date3($('#waktuasuhan').val());
			item[0]['perawat1'] = $('#idperawatasuh1').val();
			item[0]['perawat2'] = $('#idperawatasuh2').val();
			item[0]['perjalanan_penyakit'] = $('#perjalananpenyakitasuhan').val();
			item[0]['pemberian_obat'] = $('#pemberianobatasuhan').val();
			item[0]['diet'] = $('#dietasuhan').val();
			if(item[0]['perawat1'] == ''){
				alert('isi data dengan benar');$('#perawatasuhan1').focus();return false;
			}

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/submit_asuhan",
				success: function (data) {
					console.log(data);
					var jml = $('#jml_overasuhan').val();
					var no = parseInt(jml)+1;					
					var last = '<center><a href="#riwperawatan" class="viewdetailriwperawatan" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>'+
							'<input type="hidden" class="id_detailriwperawatan" value="'+data['asuhan_id']+'"></center>'					

					var t = $('#tabelasuhan').DataTable();
					var p1 =  $('#perawatasuhan1').val();
					var p2 =  $('#perawatasuhan2').val();
					var waktu = format_date(data['waktu_tindakan']);
					t.row.add([no,waktu,p1,p2,'Bersalin',"tambah"]).draw();

					$('#waktuasuhan').val("<?php echo date('d/m/Y H:i') ?>");
					$(':input','#submitasuhankeperawatan')
					  .not(':button, :submit, :reset, :hidden')
					  .val('');

					$('#jml_overasuhan').val(no);
				},
				error: function (data) {
					console.log(data);
				}
			})
		})
		/*akhir overview perawatan*/

		/*--------------*/
		/*visit bersalin*/	
		$('#komp').hide();
		$('#pilJnsKegiatan').on('change', function (e) {
			e.preventDefault();
			var a = $('#pilJnsKegiatan').find('option:selected').val();
			if (a == 'komplikasi') {
				$('#komp').show();
			}else{
				$('#komp').hide();
			}
		});

		$('#submitkegiatanbersalin').submit(function (e) {
			e.preventDefault();

			var item = {};
		    item['visit_id'] = $('#v_id_bersalin').val();
		    item['sub_visit'] = $('#ri_id_bersalin').val();

			var jenis = $('#pilJnsKegiatan').find('option:selected').val();
			if (jenis == 'komplikasi') {
				item['jenis_kegiatan'] = $('#pilkomplikasi').find('option:selected').val();
			}else{
				item['jenis_kegiatan'] = jenis;
			}

			item['rujukan_dari'] = $('#rujukanbresalin').find('option:selected').val();
			if ($('#statusRujukan').find('option:selected').val() == "Ya") {
				item['dirujuk_ke'] = $('#tujuanRujuk').find('option:selected').val();
				if(item['dirujuk_ke'] == '') {$('#tujuanRujuk').focus(); alert('isi data dengan benar');return false;}
			}else{
				item['dirujuk_ke'] = "-";
			}
			item['dokter'] = $('#id_dokterpenolongbersalin').val();
			item['asisten'] = $('#id_penolongbersalin').val();
			item['keterangan'] = $('#ketKegiatan').val();
			item['waktu'] = format_date3($('#tgl_pelaksanaanbersalin').val());
			item['status'] = $('#statusbersalin').val();

			//console.log(item);
			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/submit_kegiatan_bersalin",
				success: function (data) {					
					console.log(data);
					if (data['error'] == 'n') {
						var d = data['data'];
						var last = '<center><a href="#" class="hapuskegiatanbersalin"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a></center>';
						var jml = $('#jml_kegbersalin').val();
						var no = parseInt(jml)+1;

						var t = $('#tabelhistorybersalin').DataTable();
						var last = '<center><a href="#" class="hapuskegiatanbersalin"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a></center>'+
								'<input type="hidden" class="bersalin_id" value="'+data['bersalin_id']+'">'
						var dokter = $('#dokterpenolongbersalin').val();
						var asisten = $('#penolongbersalin').val();
						var waktu = format_date(d['waktu'])
						t.row.add([no,d['jenis_kegiatan'],d['rujukan_dari'],d['status'],d['dirujuk_ke'],dokter,asisten,waktu,last,"fa"]).draw();
						
						$('#jml_kegbersalin').val(no);
						alert("Data Berhasil Disimpan");
						$('#ketKegiatan').val('');
						$('#id_dokterpenolongbersalin').val('');
						$('#id_penolongbersalin').val('');
						$('#dokterpenolongbersalin').val('');
						$('#penolongbersalin').val('');
						$('#tgl_pelaksanaanbersalin').val("<?php echo date('d/m/Y H:i:s') ?>");
					}else{
						alert(data['data']);
					}
					
				},
				error: function (data) {
					console.log(data);
				}
			})
		})
		$('#formcariasisten').submit(function (e) {
			e.preventDefault();
			var p = $('#keyasisten').val();
			$.ajax({
				type:'POST',
				url:"<?php echo base_url()?>bersalin/bersalindetail/search_asisten/"+p,
				success:function(data){
					console.log(data);
					$('#tbodyasisten').empty();
 					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							var nama = data[i]['nama_petugas'],
								id = data[i]['petugas_id'];

							$("#tbodyasisten").append(
								'<tr>'+
									'<td>'+nama+'</td>'+
									'<td style="text-align:center">'+
										'<a class="inputasistenbersalin"><i class="glyphicon glyphicon-check" style="cursor:pointer;"></i></a>'+
										'<input type="hidden" class="idasist" value="'+id+'">'+
									'</td>'+
								'</tr>'
							);
						}
					}else{
						$('#tbodyasisten').empty();
						$('#tbodyasisten').append(
							'<tr>'+
					 			'<td colspan="2"><center>Data Tidak Ditemukan</center></td>'+
					 		'</tr>'
						);
					}
				},
				error:function(data){

				}
			});
		})
		$('#tbodyasisten').on('click', 'tr td a.inputasistenbersalin', function (e) {
			e.preventDefault();
			$('#penolongbersalin').val($(this).closest('tr').find('td').eq(0).text());
			$('#id_penolongbersalin').val($(this).closest('tr').find('td .idasist').val());
			$('#searchAsisten').modal('hide');
		})

		$('#tabelhistorybersalin').on('click','tr td a.hapuskegiatanbersalin',function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .bersalin_id').val();
			var visit_id = $('#v_id_bersalin').val();
		    var ri_id = $('#ri_id_bersalin').val();
			var a = confirm('yakin dihapus ?');
			if (a == true) {
				var table = $('#tabelhistorybersalin').DataTable();
				table.row( $(this).parents('tr') ).remove().draw();
				$.ajax({
					type: "POST",
					url: "<?php echo base_url()?>bersalin/bersalindetail/hapus_kegiatan_bersalin/"+id,// +"/"+visit_id+"/"+ri_id,
					success: function (d) {
						table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
				            cell.innerHTML = i+1;
				        } );
						alert('Berhasil dihapus');
					},
					error: function (data) {
						alert('terjadi kesalahan, gagal');
					}
				})
			};
		})

		/*akhir visit bersalin*/

		/*visit resep*/
		$('#submitresep').submit(function (e) {
			e.preventDefault();
			var item = {};
		    var number = 1;
		    item[number] = {};

		    item[number]['tanggal'] = $('#resep_date').val();
			item[number]['dokter'] = $('#resep_id_dokter').val();
			item[number]['visit_id'] = $('#v_id_resep').val();
			item[number]['resep'] = $('#resep_deskripsi').val();
			item[number]['sub_visit'] = $('#r_id_resep').val();
			//console.log(item);return false;
			if (item[number]['dokter'] == '') {
				alert('pilih dokter'); $('#resep_namadokter').focus();return false;
			};
			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/save_visit_resep",
				success: function (data) {
					console.log(data);
					var jml = $('#jml_resep').val();
					var no = parseInt(jml)+1;
					var t = $('#tableResep').DataTable();
					var date = format_date(data['tanggal']);

					t.row.add([
						no,
						data['nama_petugas'],
						date,
						data['resep'],
						"BELUM",
						"BELUM",
						'<center><a style="cursor:pointer;" class="hapusresep"><input type="hidden" class="getid" value="'+data['resep_id']+'"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a></center>',
						no
					]).draw();

					$('#jml_resep').val(no);
					$('#resep_namadokter').val('');
					$('#resep_id_dokter').val('');
					$('#resep_deskripsi').val('');
					$('#resep_date').val("<?php echo date('d/m/Y'); ?>");

					alert('Data Berhasil Ditambahkan');
				},
				error: function (data) {
					alert('gagal');
					console.log(data);
				}
			});
		});

		$('#tableResep').on('click','.hapusresep',function(){
			var id = $(this).children('.getid').val();
			var tr = $(this).parent().parent();
			var igd_id = $('#igd_id').val();
			var t = $('#tableResep').DataTable();
			t.row( $(this).parents('tr') ).remove().draw();
			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>bersalin/bersalindetail/hapus_resep/"+id+"/"+igd_id,
				success:function(data){
					console.log(data);
					
					var no;
					$('#jml_resep').val(Number($('#jml_resep').val()) - 1);
					t.on( 'order.dt search.dt', function () {
			        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
			            cell.innerHTML = i+1;
			        } );
			    } ).draw();
				},
				error:function(data){
					console.log(data);
				}	
			});
		});
		/*akhir visit resep*/

		/*order operasi*/
		var item_order = {};
		item_order[1] = {};
		$('#submit_order_operasi').submit(function(e){
			e.preventDefault();
			if($('#iddokter_o').val() == '') {alert('pilih dokter');$('#namadokter_o').focus();return false};
			if($('#operasi_jenis').find('option:selected').val() == '') {alert('pilih jenis operasi');return false};
			item_order[1]['visit_id'] = $('#v_id_operasi').val();
			item_order[1]['sub_visit'] = $('#r_id_operasi').val();
			//item_order[1]['dept_id'] = $('#dept_id').val();
			item_order[1]['dept_tujuan'] = "KAMAR OPERASI"; 
			item_order[1]['pengirim'] = $('#iddokter_o').val();
			item_order[1]['alasan'] = $('#operasi_detail').val();
			item_order[1]['jenis_operasi'] = $('#operasi_jenis').find('option:selected').val();
			item_order[1]['waktu_mulai'] = $('#operasi_date').val();
			//console.log(item_order);return false;
			$.ajax({
				type: "POST",
				data: item_order,
				url: "<?php echo base_url()?>bersalin/bersalindetail/save_order_operasi",
				success: function(data){
					console.log(data);
					var i = $('#jml_data_order').val();
					var no = parseInt(i)+1;
					var t = $('#tableOpeasi').DataTable();

					t.row.add([
						no,
						data['waktu_mulai'],
						data['nama_petugas'],
						'Kamar Operasi',
						data['alasan'],
						'<center><i class="glyphicon glyphicon-trash hapusorder" data-toggle="tooltip" data-placement="top" title="Hapus" style="cursor:pointer;"><input type="hidden" class="getid" value="'+data['order_operasi_id']+'"></i></center>',
						no

					]).draw();

					$('#jml_data_order').val(no);

					$(':input','#submit_order_operasi')
					  .not(':button, :submit, :reset, :hidden')
					  .val('');
					$('#operasi_date').val("<?php echo date('d/m/Y H:i:s') ?>");

					alert('Data Berhasil Ditambahkan');

				},
				error: function(data){
					console.log(data);
					alert('gagal');
				}

			});
		});

		$(document).on('click','.hapusorder',function(){
			var id = $(this).children('.getid').val();
			var tr = $(this).parent().parent();
			//var ri_id = $('#r_id_operasi').val();
			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>bersalin/bersalindetail/hapus_order/"+id,//+"/"+ri_id
				success:function(data){
					console.log(data);					
					var no = 0;
					var t = $('#tableOpeasi').DataTable();

					/*t.clear().draw();
					for(var i = 0; i< data.length; i++){
						no++;
						t.row.add([
							no,
							data[i]['waktu_mulai'],
							data[i]['nama_petugas'],
							'Kamar Operasi',
							data[i]['alasan'],
							'<i class="glyphicon glyphicon-trash hapusorder" data-toggle="tooltip" data-placement="top" title="Hapus" style="cursor:pointer;"><input type="hidden" class="getid" value="'+data[i]['order_operasi_id']+'"></i>',
							no

						]).draw();
					}
*/
					$('#jml_data_order').val(Number($('#jml_data_order').val()) - 1);
				},
				error:function(data){
					console.log(data);
				}	
			});
		});
		/*akhir order operasi*/

		/*visit gizi*/
		var g_item = {};
		g_item[1] = {};
		$('#submit_gizi').submit(function(e){
			e.preventDefault();
			if ($('#konsul_idDokter').val() == '') {alert('pilih dokter');$('#konsul_dokter').focus();return false;};
			g_item[1]['tanggal'] = $('#konsul_date').val();
			g_item[1]['visit_id'] = $('#v_id_gizi').val();
			g_item[1]['sub_visit'] = $('#r_id_gizi').val();
			g_item[1]['konsultan'] = $('#konsul_idDokter').val();
			g_item[1]['kajian_gizi'] = $('#konsul_kajiangizi').val();
			g_item[1]['anamnesa_diet'] = $('#konsul_anemdiet').val();
			g_item[1]['kajian_diet'] = $('#konsul_kajiandiet').val();
			g_item[1]['detail_menu'] =  $('#konsul_detail').val();
			var konsultan = $('#konsul_dokter').val();

			$.ajax({
				type:'POST',
				data:g_item,
				url:'<?php echo base_url(); ?>bersalin/bersalindetail/save_gizi',
				success:function(data){
					console.log(data);
					var t = $('#tableKonsultasi').DataTable();

					var jml = parseInt($('#jml_gizi').val());
					var no = jml+1;

					alert("data Berhasil Ditambahkan ");

					var action = '<center><a style="cursor:pointer;" class="hapusgizi"><input type="hidden" class="getid" value="'+data['gizi_id']+'"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>';
						action += '<a href="#print"><i class="glyphicon glyphicon-print"  data-toggle="tooltip" data-placement="top" title="Print"></i></a></center>';
					
					t.row.add([
						no,
						format_date(data['tanggal']),
						konsultan,
						data['kajian_gizi'],
						data['anamnesa_diet'],
						data['kajian_diet'],
						data['detail_menu'],
						action,
						no
					]).draw();

					$('#jml_gizi').val(no);

					$(':input','#submit_gizi')
					  .not(':button, :submit, :reset, :hidden')
					  .val('');
					$('#konsul_date').val("<?php echo date('d/m/Y H:i') ?>");

				},error:function(data){
					console.log(data);
				}
			});

		});

		$(document).on('click','.hapusgizi',function(){
			var id = $(this).children('.getid').val();
			var tr = $(this).parent().parent();
			//var igd_id = $('#igd_id').val();

			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>bersalin/bersalindetail/hapus_gizi/"+id,//+"/"+igd_id,
				success:function(data){
					console.log(data);
					var t = $('#tableKonsultasi').DataTable();
					/*t.clear().draw();

					for(var i = 0; i<data.length; i++){
						var no = i+1;
						var action = '<a style="cursor:pointer;" class="hapusgizi"><input type="hidden" class="getid" value="'+data[i]['gizi_id']+'"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a>';
							action += '<a href="#print"><i class="glyphicon glyphicon-print"  data-toggle="tooltip" data-placement="top" title="Print"></i></a>';
						
						t.row.add([
							no,
							changeDate(data[i]['tanggal']),
							data[i]['nama_petugas'],
							data[i]['kajian_gizi'],
							data[i]['anamnesa_diet'],
							data[i]['kajian_diet'],
							data[i]['detail_menu'],
							action,
							no
						]).draw();

					}
*/
					$('#jml_gizi').val(Number($('#jml_gizi').val()) - 1);
				},
				error:function(data){
					console.log(data);
				}	
			});
		});
		/*akhir visit gizi*/

		/*permintaan makan*/
		$('#tipediet').on('change',function () {
			var tipe = $(this).find('option:selected').val();

			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>bersalin/bersalindetail/get_paket_makan/"+tipe,
				success: function (data) {
					$('#paketmakan').empty();
					$('#paketmakan').append('<option value="" selected>Pilih</option>');
					for (var i = 0; i < data.length; i++) {
						$('#paketmakan').append('<option value="'+data[i]['id']+'">'+data[i]['nama_paket']+'</option>')
					};
					console.log(data);
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#edittipediet').on('change',function () {
			var tipe = $(this).find('option:selected').val();

			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>bersalin/bersalindetail/get_paket_makan/"+tipe,
				success: function (data) {
					$('#paketmakanedit').empty();

					$('#paketmakanedit').append('<option value="" selected>Pilih</option>');
					for (var i = 0; i < data.length; i++) {
						$('#paketmakanedit').append('<option value="'+data[i]['id']+'">'+data[i]['nama_paket']+'</option>')
					};
					console.log(data);
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#sumbitpermintaanmakan').submit(function (e) {
			e.preventDefault();
			var tipe = $('#tipediet').find('option:selected').val();
			var paket = $('#paketmakan').find('option:selected').val();
			if (tipe == '') {alert('pilih tipe diet');$('#tipediet').focus();return false;};
			if (paket == '') {alert('pilih paket makan');$('#paketmakan').focus();return false;};

			var namatipe = $('#tipediet').find('option:selected').text();
			var namapaket = $('#paketmakan').find('option:selected').text();
			//console.log(namatipe + namapaket); return false;
			var item = {};
			item[0] = {};
			item[0]['waktu_permintaan'] = $('#tanggalmakan').val();
			item[0]['visit_id'] = $('.visit_id_makan').val();
			item[0]['sub_visit'] = $('.ri_id_makan').val();
			item[0]['kamar_id'] = $('.kamar_id_makan').val();
			item[0]['bed_id'] = $('.bed_id_makan').val();
			item[0]['tipe_diet'] = $('#tipediet').find('option:selected').val();
			item[0]['paket_makan'] = $('#paketmakan').find('option:selected').val();
			item[0]['keterangan'] = $('#keteranganmakan').val();
			
			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/submit_permintaan_makan",
				success: function (data) {
					var t = $('#tabelriwayatmakan').DataTable();
					var jml = parseInt($('#jml_makan').val());
					var no = jml+1;

					var last = '<center><a href="#editpaketmakan" data-toggle="modal" class="editmakan"><i class="glyphicon glyphicon-edit"  data-toggle="tooltip" data-placement="top" title="Edit"></i></a>'+
								'<a href="#" class="hapusmakan"><i class="glyphicon glyphicon-trash"  data-toggle="tooltip" data-placement="top" title="Hapus"></i></a></center>'+
								'<input type="hidden" class="makan_id" value="'+data['makan_id']+'">'
					t.row.add([
							no,
							'<center>'+format_date(data['waktu_permintaan'])+'</center>',
							namatipe,
							namapaket,
							data['keterangan'],
							'Belum Dikirim',
							last,
							'faf'
						]).draw();
					t.on('order.dt search.dt', function () {
				        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
				            cell.innerHTML = i+1;
				        } );
				    }).draw();
					$('#keteranganmakan').val('');
					$("#tipediet option[value='']").attr("selected", "selected");
					$("#paketmakan option[value='']").attr("selected", "selected");
					$('#tanggalmakan').val('<?php echo date("d/m/Y H:i:s") ?>')
					$('#jml_makan').val(no);
					$('[data-toggle="tooltip"]').tooltip();
					console.log(data);
				},
				error: function (data) {
					console.log(data);
				}
			})
		})
	
		var this_makan;
		$('#tabelriwayatmakan tbody').on('click', 'tr td a.editmakan',function (e) {
			e.preventDefault();
			this_makan = $(this).closest('tr');
			$('#edit_makan_id').val(this_makan.find('td .makan_id').val());
			var a = this_makan.find('td').eq(1).text();
			var b = this_makan.find('td').eq(2).text();
			var c = this_makan.find('td').eq(3).text();
			$('#editwaktumakan').val(format_date2(a));
			$('#editketeranganmakan').val(this_makan.find('td').eq(4).text());
		})

		$('#submit_edit_makan').submit(function (e) {
			e.preventDefault();

			var id = $('#edit_makan_id').val();

			var namatipe = $('#edittipediet').find('option:selected').text();
			var namapaket = $('#paketmakanedit').find('option:selected').text();
			if ($('#edittipediet').find('option:selected').val() == '') {alert('pilih tipe diet');$('#edittipediet').focus();return false;};
			if ($('#paketmakanedit').find('option:selected').val() == '') {alert('pilih paket makan');$('#paketmakanedit').focus();return false;};
			var item = {};
			item[0] = {};
			item[0]['waktu_permintaan'] = $('#editwaktumakan').val();
			item[0]['tipe_diet'] = $('#edittipediet').find('option:selected').val();
			item[0]['paket_makan'] = $('#paketmakanedit').find('option:selected').val();
			item[0]['keterangan'] = $('#editketeranganmakan').val();

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/edit_permintaan_makan/" + id,
				success: function (data) {
					this_makan.find('td').eq(1).text(format_date(data['waktu_permintaan']));
					this_makan.find('td').eq(2).text(namatipe);
					this_makan.find('td').eq(3).text(namapaket);
					this_makan.find('td').eq(4).text(data['keterangan']);
					$('#editpaketmakan').modal('hide');
					console.log(data);
				},
				error: function (data) {
					console.log(data);
				}
			})
		})
	
		var this_makan_delete;
		$('#tabelriwayatmakan tbody').on('click', 'tr td a.hapusmakan',function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('td .makan_id').val();
			this_makan_delete = $(this);
			$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>bersalin/bersalindetail/hapus_permintaan_makan/" + id,
				success: function (data) {
					console.log(data);
					var t = $('#tabelriwayatmakan').DataTable();
					t.row(this_makan_delete.parents('tr')).remove().draw();
				},
				error: function (data) {
					console.log(data);
				}
			})
		})
		/*akhir permintaan makan*/

		/*riwayat penyakit*/

		/*akhir riwayat penyakit*/

		/*resume pulang*/
		$('#submit_sebab').submit(function(e){
			e.preventDefault();
			var data = {};
			data['search'] = $('#sebab_katakunci').val();

			$.ajax({
				type:'POST',
				data:data,
				url:"<?php echo base_url()?>igd/igddetail/search_sebab", //sama di igd
				success:function(data){
					console.log(data);
					$('#tbody_sebab').empty();
 					if(data.length>0){
						for(var i = 0; i<data.length; i++){
							var nama = data[i]['sebab_penyakit'],
								kode = data[i]['kode_sebab'],
								id = data[i]['sebab_id'];

							$("#tbody_sebab").append(
								'<tr>'+
									'<td>'+kode+'</td>'+
									'<td>'+nama+'</td>'+
									'<td style="text-align:center"><i class="glyphicon glyphicon-check" style="cursor:pointer;" onclick="getSebab(&quot;'+id+'&quot; , &quot;'+nama+'&quot;)"></i></td>'+
								'</tr>'
							);
						}
					}else{
						$('#tbody_sebab').empty();
						$('#tbody_sebab').append(
							'<tr>'+
					 			'<td colspan="3"><center>Data Sebab Tidak Ditemukan</center></td>'+
					 		'</tr>'
						);
					}
				}
			});
		});

		$('#submitresume').submit(function(e){
			e.preventDefault();
			var item = {};
			item[1] = {};

			item[1]['ri_id'] = $('#ri_id_resume').val();
			item[1]['visit_id'] = $('#v_id_resume').val();
			item[1]['waktu_keluar'] = $('#res_date').val();
			item[1]['alasan_keluar'] = $('#alasanKeluarPasien').val();
			item[1]['detail_alasan_pulang'] = $('#alasanPulang').val();
			var rs = $('#rumasakitlain').val();
			item[1]['diagnosa_akhir'] = $('#kode_utama_masuk').val();
			item[1]['diagnosa_utama'] = $('#res_kode_utama').val();
			item[1]['sekunder1'] = $('#res_kode_sek1').val();
			item[1]['sekunder2'] = $('#res_kode_sek1').val();
			item[1]['sekunder3'] = $('#res_kode_sek1').val();
			item[1]['sekunder4'] = $('#res_kode_sek1').val();
			
			if ($('#alasanKeluarPasien').val() == 'Pasien Meninggal') {
				item[1]['detail_kematian'] = $('#res_dmeninggal').val();
				item[1]['keterangan_kematian'] = $('#res_ketmeninggal').val();
				if($('#res_datemeninggal').val()!="")
					item[1]['waktu_kematian'] = $('#res_datemeninggal').val();
			};
			if (rs != '') {item[1]['alasan_keluar'] = "dirujur ke " + rs};
			
			item[1]['sebab'] = $('#res_idsebab').val();

			item[1]['is_kasus_baru'] = $('input[name="res_jk"]:checked', '#submitresume').val();	
			var bed_id = $('.bed_id').val();
			//console.log(item);return false;
			$.ajax({
				type:"POST",
				data:item,
				url:'<?php echo base_url();?>bersalin/bersalindetail/save_resume/' + bed_id,
				success:function(data){
					alert('Data Berhasil Ditambahkan');
					console.log(data);
					window.location.href = '<?php echo base_url();?>bersalin/homebersalin';
				},
				error:function (data) {
					console.log(data);
				}
			})
		});
		/*akhir resume pulang*/

		/*tindakan*/
		$('#tindak_paramedis').focus(function(){
			var $input = $('#tindak_paramedis');
			
			$.ajax({
				type:'POST',
				url:'<?php echo base_url();?>bersalin/bersalindetail/get_dokter',
				success:function(data){
					var autodata = [];
					var iddata = [];

					for(var i = 0; i<data.length; i++){
						autodata.push(data[i]['nama_petugas']);
						iddata.push(data[i]['petugas_id']);
					}
					console.log(autodata);

					$input.typeahead({source:autodata, 
			            autoSelect: true}); 

					$input.change(function() {
					    var current = $input.typeahead("getActive");
					    var index = autodata.indexOf(current);

					    $('#tindak_id_paramedis').val(iddata[index]);
					    
					    if (current) {
					        // Some item from your model is active!
					        if (current.name == $input.val()) {
					            // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
					        } else {
					            // This means it is only a partial match, you can either add a new item 
					            // or take the active if you don't want new items
					        }
					    } else {
					        // Nothing is active so it is a new value (or maybe empty value)
					    }
					});
				}
			});
		});

		$('#tindak_nama_tindakan').focus(function(){
			var $input = $('#tindak_nama_tindakan');
			
			$.ajax({
				type:'POST',
				url:'<?php echo base_url();?>igd/igddetail/get_master_tindakan',//sama di igd :D
				success:function(data){
					var autodata = [];
					var iddata = [];

					for(var i = 0; i<data.length; i++){
						autodata.push(data[i]['nama_tindakan']);
						iddata.push(data[i]['tindakan_id']);
					}
					console.log(autodata);

					$input.typeahead({source:autodata, 
			            autoSelect: true}); 

					$input.change(function() {
					    var current = $input.typeahead("getActive");
					    var index = autodata.indexOf(current);

					    $('#tindak_id_tindakan').val(iddata[index]);
					    if(iddata[index]!=''){
							$.ajax({
								type: "POST",
								data : iddata[index],
								url: "<?php echo base_url()?>bersalin/bersalindetail/get_tindakan/" + iddata[index],
								success: function (data) {
									var total = parseInt(data['js'])+parseInt(data['jp'])+parseInt(data['bakhp']);

									$('#tindak_js').val(data['js']);
									$('#tindak_jp').val(data['jp']);
									$('#tindak_bakhp').val(data['bakhp']);
									$('#tindak_tarif').val(total);
									$('#tindak_jumlah').val(total);

									console.log(data);
								},
								error: function (data) {
									alert('gagal');
								}
							});
						}else{
							$('#tindak_js').val('');
							$('#tindak_jp').val('');
							$('#tindak_bakhp').val('');
						}
					    if (current) {
					        // Some item from your model is active!
					        if (current.name == $input.val()) {
					            // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
					        } else {
					            // This means it is only a partial match, you can either add a new item 
					            // or take the active if you don't want new items
					        }
					    } else {
					        // Nothing is active so it is a new value (or maybe empty value)
					    }
					});
				}
			});
		});

		$('#tindak_nama_tindakan').change(function() {
			var tindakan_id = $('#tindak_id_tindakan').val();

			if(tindakan_id!=''){
				$.ajax({
					type: "POST",
					data : tindakan_id,
					url: "<?php echo base_url()?>bersalin/bersalindetail/get_tindakan/" + tindakan_id,
					success: function (data) {
						var total = parseInt(data['js'])+parseInt(data['jp'])+parseInt(data['bakhp']);

						$('#tindak_js').val(data['js']);
						$('#tindak_jp').val(data['jp']);
						$('#tindak_bakhp').val(data['bakhp']);
						$('#tindak_tarif').val(total);
						$('#tindak_jumlah').val(total);

						console.log(data);
					},
					error: function (data) {
						alert('gagal');
						
					}
				});
			}else{
				$('#tindak_js').val('');
				$('#tindak_jp').val('');
				$('#tindak_bakhp').val('');
			}
		});

		$('#tindak_jumlah').focus(function(){
			var onfaktur = $('#tindak_onfaktur').val();
			var tarif = $('#tindak_tarif').val();
			if (onfaktur == '') {onfaktur = '0'};
			var jumlah = parseInt(onfaktur)+parseInt(tarif);
			$(this).val(jumlah);
		});

		$('#tindak_onfaktur').on('change', function () {
			var onfaktur = $('#tindak_onfaktur').val();
			var tarif = $('#tindak_tarif').val();
			var jumlah = parseInt(onfaktur)+parseInt(tarif);
			$('#tindak_jumlah').val(jumlah);
		})

		$('#submitTindakanPerawatan').submit(function (e) {
			e.preventDefault();
			if ($('#tindak_nama_tindakan').val() == '') {alert('pilih tindakan');$('#tindak_nama_tindakan').focus();return false;};
			if ($('#tindak_paramedis').val() == '') {alert('pilih dokter');$('#tindak_paramedis').focus();return false;};

			var item = {};
		    var number = 1;
		    item[number] = {};

		    item[number]['waktu_tindakan'] = $('#tindak_date').val();
			item[number]['tindakan_id'] = $('#tindak_id_tindakan').val();
			item[number]['visit_id'] = $('.v_id_tindakan').val();
			item[number]['sub_visit'] = $('.ri_id_tindakan').val();
			item[number]['js'] = $('#tindak_js').val();
			item[number]['jp'] = $('#tindak_jp').val();
			item[number]['bakhp'] = $('#tindak_bakhp').val();
			item[number]['on_faktur'] = $('#tindak_onfaktur').val();
			item[number]['paramedis'] = $('#tindak_id_paramedis').val();
			item[number]['tarif'] = $('#tindak_tarif').val();
			item[number]['jumlah'] = $('#tindak_jumlah').val();
			//item[number]['dept_id'] = $('#dept_id').val();
			//console.log(item);return false;
			$.ajax({
				type: "POST",
				data : item,
				url: "<?php echo base_url()?>bersalin/bersalindetail/save_tindakan",
				success: function (data) {
					console.log(data);
					var t = $('#tableCareRawat').DataTable();

					$(':input','#submitTindakanPerawatan')
					  .not(':button, :submit, :reset, :hidden')
					  .val('');
					$('#tindak_date').val("<?php echo date('d/m/Y H:i:s') ?>");

					alert('Data Berhasil Ditambahkan');
				
					var no = $('#jml_tindak_rawat').val();

					var i = parseInt(no)+1;
					t.row.add([
						i,
						data['waktu_tindakan'],
						data['nama_tindakan'],
						data['j_sarana'],
						data['j_pelayanan'],
						data['bakhp_this'],
						data['on_faktur'],
						data['nama_petugas'],
						data['jumlah'],
						"<center><a class='hapusTindakan' style='cursor:pointer;'><input type='hidden' class='getid' value='"+data['care_id']+"''><i class='glyphicon glyphicon-trash'></i></a></center>",
						i
					]).draw();
					$('#jml_tindak_rawat').val(i);
					$('#tambahTindakanok').modal('hide');
				},
				error: function (data) {
					console.log(data);
					alert('gagal');
					
				}
			});
			$('#tambahTindakan').modal('hide');
		});
		var care;
		$(document).on('click','.hapusTindakan',function(){
			var id = $(this).children('.getid').val();
			var tr = $(this).parent().parent();
			var v_id = $('#igd_id').val();
			care = $(this);
			//var dep = $('#dept_id').val();

			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>bersalin/bersalindetail/hapus_tindakan/"+id+"/"+v_id,//+"/"+dep,
				success:function(data){
					console.log(data);

					var t = $('#tableCareRawat').DataTable();
					$('#jml_tindak_rawat').val(Number($('#jml_tindak_rawat').val()) - 1);
					t.row(care.parents('tr')).remove().draw();
					t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
			            cell.innerHTML = i+1;
			        } );
				},
				error:function(data){
					console.log(data);
				}	
			});
		});

		/*akhir tindakan*/
	})

	function get_diagnosa(id, nama, diagnosa){
		//alert(diagnosa);
		switch(diagnosa){
			case '1': $('#k_utama_over').val(id);$('#dnama1').val(nama);break;
			case '2': $('#k_sek_over').val(id);$('#dnama2').val(nama);break;
			case '3': $('#k_sek_over2').val(id);$('#dnama3').val(nama);break;
			case '4': $('#k_sek_over3').val(id);$('#dnama4').val(nama);break;
			case '5': $('#k_sek_over4').val(id);$('#dnama5').val(nama);break;
			case '6': $('#kode_utamaoverigd').val(id);$('#diagutamaoverigd').val(nama);break;
			case '7': $('#kode_sek1overigd').val(id);$('#sek1overigd').val(nama);break;
			case '8': $('#kode_sek2overigd').val(id);$('#sek2overigd').val(nama);break;
			case '9': $('#kode_sek3overigd').val(id);$('#sek3overigd').val(nama);break;
			case '10': $('#kode_sek4overigd').val(id);$('#sek4overigd').val(nama);break;
			case '11': $('#kode_utamafisikibu').val(id);$('#namadiagfisikibu').val(nama);break;
			case '12': $('#kode_utamaoverperawatan').val(id);$('#diagutamaoverperawatan').val(nama);break;
			case '13': $('#kode_sek1overperawatan').val(id);$('#diagsek1overperawatan').val(nama);break;
			case '14': $('#kode_sek2overperawatan').val(id);$('#diagsek2overperawatan').val(nama);break;
			case '15': $('#kode_sek3overperawatan').val(id);$('#diagsek3overperawatan').val(nama);break;
			case '16': $('#kode_sek4overperawatan').val(id);$('#diagsek4overperawatan').val(nama);break;
			case '17': $('#res_kode_utama').val(id);$('#res_diag_utama').val(nama);break;
			case '18': $('#res_kode_sek1').val(id);$('#res_sek1').val(nama);break;
			case '19': $('#res_kode_sek2').val(id);$('#res_sek2').val(nama);break;
			case '20': $('#res_kode_sek3').val(id);$('#res_sek3').val(nama);break;
			case '21': $('#res_kode_sek4').val(id);$('#res_sek4').val(nama);break;
			case '22': $('#kode_utama_masuk').val(id);$('#res_utama_masuk').val(nama);break;
		}

		$('#tbody_diagnosa').empty();
		$('#tbody_diagnosa').append('<tr><td colspan="3" style="text-align:center;">Cari Data Diagnosa</td></tr>');
		$('#katakunci_diag').val("");
		$('#searchDiagnosa').modal('hide');
	}

	function getDokter(id, nama, dokter){
		switch(dokter){
			case '1': $('#id_dokterOver').val(id);$('#nama_dOver').val(nama);break;
			case '2': $('#id_dokter_jaga').val(id);$('#dokteroverigd').val(nama);break;
			case '3': $('#iddokterfisikibu').val(id);$('#dokterperiksafisik').val(nama);break;
			case '4': $('#id_dokteroverperawatan').val(id);$('#dokteroverperawatan').val(nama);break;
			case '5': $('#id_dokterpenolongbersalin').val(id);$('#dokterpenolongbersalin').val(nama);break;
			case '6': $('#resep_id_dokter').val(id);$('#resep_namadokter').val(nama);break;
			case '7': $('#iddokter_o').val(id);$('#namadokter_o').val(nama);break;
			case '8': $('#konsul_idDokter').val(id);$('#konsul_dokter').val(nama);break;
			case '9': $('#iddokter_resume1').val(id);$('#namadokter_resume1').val(nama);break;
			case '10': $('#iddokter_resume2').val(id);$('#namadokter_resume2').val(nama);break;
		}		

		$("#searchDokter").modal('hide');
		$("#inputDokter").val("");
		$('#tbody_dokter').empty();
		$('#tbody_dokter').append('<tr><td colspan="2" style="text-align:center;">Cari dokter</td></tr>');
	}

	function getPerawat(id, nama, perawat){
		switch(perawat){
			case '1': $('#id_perawat_jaga').val(id);$('#perawatoverigd').val(nama);break;
			case '2': $('#idperawatasuh1').val(id);$('#perawatasuhan1').val(nama);break;
			case '3': $('#idperawatasuh2').val(id);$('#perawatasuhan2').val(nama);break;
		}		

		$("#searchPerawat").modal('hide');
		$("#katakunciperawat").val("");
		$('#tbody_perawat').empty();
		$('#tbody_perawat').append('<tr><td colspan="2" style="text-align:center;">Cari perawat</td></tr>');
	}

	function getPaket(id, nama){
		$("#searchPaketMakanan").modal('hide');
		$("#id_paket").val(id);
		$("#searchpaket").val(nama);
		$("#katakuncipaket").val("");
	}

	function save_overview (item) {
		var petugas = $('#nama_dOver').val();

		$.ajax({
			type: "POST",
			data : item,
			url: "<?php echo base_url()?>bersalin/bersalindetail/save_overview",
			success: function (data) {				
				$('#inputdate').val("<?php echo date('d/m/Y H:i') ?>");
				$(':input','#submitOverKlinis')
				  .not(':button, :submit, :reset, :hidden')
				  .val('');

				console.log(data);
				var jml = $('#jml_over').val();
				var no = parseInt(jml)+1;

				var t = $('#tabelhistoryoverklinis').DataTable();
				var last = '<a href="#riwayatoverviewklinis" class="viewdetailoverviewklinis" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a>'+
						'<input type="hidden" class="overviewid_detail" value="'+data['id']+'">'

				t.row.add([
					no,
					'Bersalin',
					data['anamnesa'],
					petugas,
					last,
					"fa"						
				]).draw();
				
				$('#jml_over').val(no);
				alert("Data Berhasil Disimpan");
			},
			error: function (data) {
				console.log(data);
				alert(data);
			}
		});

		return false;
	}

	function detailOver(id){
		var dsek1,
			dsek2,
			dsek3,
			dsek4;
		$.ajax({
			type:'POST',
			url:'<?php echo base_url(); ?>bersalin/bersalindetail/get_detail_over/'+id,
			success:function(data){
				console.log(data);
				$(':input','#riwkondok')
				  .not(':button, :submit, :reset, :hidden')
				  .val('');
				$('#detail_waktu').val(data['waktu']);
				$('#detail_anamnesa').val(data['anamnesa']);
				$('#detail_tekanan').val(data['tekanan_darah']);
				$('#detail_temperatur').val(data['temperatur']);
				$('#detail_nadi').val(data['nadi']);
				$('#detail_pernapasan').val(data['pernapasan']);
				$('#detail_berat').val(data['berat_badan']);
				$('#detail_dokter').val(data['nama_petugas']);
				$('#detail_kutama').val(data['diag_u']);
				$('#detail_ksek1').val(data['diag_1']);
				$('#detail_ksek2').val(data['diag_2']);
				$('#detail_ksek3').val(data['diag_3']);
				$('#detail_ksek4').val(data['diag_4']);
				$('#detail_dutama').val(data['diagnosa_nama']);
				$('#detail_detail').val(data['detail_diagnosa']);
				$('#detail_terapi').val(data['terapi']);
				$('#detail_alergi').val(data['alergi']);
				$('#detail_dsek1').val(data['diagnosa_1']);
				$('#detail_dsek2').val(data['diagnosa_2']);
				$('#detail_dsek3').val(data['diagnosa_3']);
				$('#detail_dsek4').val(data['diagnosa_4']);
			}
		});
	}

	function detailOverIgd(id){
		var dsek1,
			dsek2,
			dsek3,
			dsek4;
		$.ajax({
				type: "POST",
				url: "<?php echo base_url()?>bersalin/bersalindetail/get_detail_overview_igd/" + id,
				success: function (data) {
					//console.log(data);
					$(':input','#riwayatpenangananigd')
					  .not(':button, :submit, :reset, :hidden')
					  .val('');
					$('#waktutindakanigd').val(data['waktu']);
					$('#anamnesaigd').val(data['anamnesa']);
					$('#tekanandarahigd').val(data['tekanan_darah']);
					$('#temperaturigd').val(data['temperatur']);
					$('#nadiigd').val(data['nadi']);
					$('#pernapasanigd').val(data['pernapasan']);
					$('#beratigd').val(data['berat_badan']);
					$('#dokterigd').val(data['nama_petugas']);
					$('#kode_utamaigd').val(data['diag_u']);
					$('#diagutamaigd').val(data['diagnosa_utama']);
					$('#igd1igd').val(data['diagnosa_1']);
					$('#igd2igd').val(data['diagnosa_2']);
					$('#igd3igd').val(data['diagnosa_3']);
					$('#igd4igd').val(data['diagnosa_4']);
					$('#kode_sek1igd').val(data['diag_1']);
					$('#kode_sek2igd').val(data['diag_2']);
					$('#kode_sek3igd').val(data['diag_3']);
					$('#kode_sek4igd').val(data['diag_4']);
					$('#detailDiagnosaigd').val(data['detail_diagnosa']);
					$('#kepalaleherigd').val(data['kepala_leher']);
					$('#thoraxigd').val(data['thorax_abd']);
					$('#extremitasigd').val(data['extrimitas']);
					$('#terapiigd').val(data['terapi']);

				},
				error: function (data) {
					console.log(data);
				}
			})
	}

	function detailOverPerawatan (id) {
		$.ajax({
			type: "POST",
			url: "<?php echo base_url()?>bersalin/bersalindetail/get_detail_over_perawatan/" + id,
			success: function (data) {
				console.log(data);
				$(':input','#riwperawatan')
					  .not(':button, :submit, :reset, :hidden')
					  .val('');
				$('#waktutindakanrawat').val(format_date(data['waktu_visit']));
				$('#dokterrawat').val(data['dokter']);
				$('#anamnesarawat').val(data['anamnesa']);
				$('#kode_utamarawat').val(data['diag_u']);
				$('#diagnosautamarawat').val(data['diagnosa_utama']);
				$('#kode_sek1rawat').val(data['diag_1']);
				$('#sek1rawat').val(data['diagnosa_1']);
				$('#kode_sek2rawat').val(data['diag_2']);
				$('#sek2rawat').val(data['diagnosa_2']);
				$('#kode_sek3rawat').val(data['diag_3']);
				$('#sek3rawat').val(data['diagnosa_3']);
				$('#kode_sek4rawat').val(data['diag_4']);
				$('#sek4rawat').val(data['diagnosa_4']);
				$('#perkembanganrawat').val(data['perkembangan_penyakit']);
				$('#tekanandarahrawat').val(data['tekanan_darah']);
				$('#temperaturrawat').val(data['temperatur']);
				$('#nadirawat').val(data['nadi']);
				$('#pernapasanrawat').val(data['pernafasan']);
				$('#beratrawat').val(data['berat_badan']);
			},
			error: function (data) {
				console.log(data);
			}

		})
	}

	function getSebab(id, nama){
		$('#res_sebab').val(nama);
		$('#res_idsebab').val(id);

		$("#searchGolongan").modal('hide');
		$("#sebab_katakunci").val("");
		$('#tbody_sebab').empty();
		$('#tbody_sebab').append('<tr><td colspan="3" style="text-align:center;">Cari Data</td></tr>');
	}

</script>
