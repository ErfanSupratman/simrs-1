<script type="text/javascript">
	$(document).ready(function () {
		$('#tabelutamapasienactive tbody').on('click', 'tr td a.viewdetailpasienactive',function (e) {
			e.preventDefault();
			var rm_id = $(this).closest('tr').find('td').eq(1).text();
			//$(':input','#formeditpasien').not(':button').attr('disabled','disabled');

			$.ajax({
				type: "POST",
				url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_detail_pasien/'+rm_id,
				success: function (data) {
					console.log(data);
					fill_patient_info(data);
				},
				error: function (data) {
					console.log(data);

				}
			})
		})

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

		$('#formeditpasien').submit(function (e) {
			e.preventDefault();
			var a = confirm('yakin mengubah data?');
			if (a == false) {$('#detailPA').modal('hide');return false;};
			var item = {};
			item['rm_lama']=$('#new_rm_id').val();
			item['nama']=$('#newNamaLengkap').val();
			item['alias']=$('#newAlias').val();
			item['tempat_lahir']=$('#newTempatLahir').val();
			item['tanggal_lahir']= format_date3($('#newTglLahir').val());
			item['jenis_kelamin'] = $("input[name=jk]:checked").val();
			item['gol_darah']=$('#newGol').val();
			item['pekerjaan']=$('#newPekerjaan').val();
			item['jenis_id']=$('#newJenisID').val();
			item['no_id']=$('#newNomorID').val();
			item['pendidikan']=$('#newJenjangPendidikan').val();
			item['agama'] = $('#newAgama').val();
			item['status_kawin'] = $('#newStatusKawin').val();
			item['alamat_skr'] = $('#newAlamat').val();
			item['prov_id_skr'] = $('#skrProvinsi').find('option:selected').val();
			item['kab_id_skr']=$('#skrKabupaten').find('option:selected').val();
			item['kec_id_skr']=$('#skrKecamatan').find('option:selected').val();
			item['kel_id_skr']=$('#skrKelurahan').find('option:selected').val();
			item['alamat_ktp']=$('#newAlamatKTP').val();
			item['prov_id']=$('#newProvinsi').find('option:selected').val();
			item['kab_id']=$('#newKabupaten').find('option:selected').val();
			item['kec_id']=$('#newKecamatan').find('option:selected').val();
			item['kel_id']=$('#newKelurahan').find('option:selected').val();
			item['no_telp']=$('#nomorPasien').val();
			item['nama_wali']=$('#newWali').val();
			item['hubungan_wali']=$('#newHubungan').val();
			item['alamat_wali']=$('#newAlamatWali').val();
			item['no_telp_wali']=$('#no_telp_wali').val();
			item['pekerjaan_wali']=$('#newJobWali').val();
			item['alergi']=$('#newALergi').val();
			//console.log(item);return false;
			$.ajax({
				type:"POST",
				url:"<?php echo base_url()?>rekammedis/homeolahdatapasien/edit_pasien",
				data: item,
				success:function(data){
					console.log(data);
					alert('berhasil diubah');
					$('#detailPA').modal('hide');
				},
				error: function (data) {
					console.log(data);
				}
			});	

		})
		
		$('#tabelutamapasienactive tbody').on('click', 'tr td a.changestatuspasienactive',function (e) {
			var rm_id = $(this).closest('tr').find('td').eq(1).text();
			$('#rm_id_active').val(rm_id);
		})
		$('#inactive_pasien').submit(function (e) {
			//e.preventDefault();
			var item = {};
			item['status_pasien'] = $('#statusMen').find('option:selected').val();
			item['tgl_meninggal'] = $('#tlgMati').val();
			item['sebab'] = $('#sbaMati').val();
			item['rm_id'] = $('#rm_id_active').val();
			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/inactive_pasien',
				success: function (data) {
					alert('sukses');
					console.log(data);
				},
				error: function (data) {
					console.log(data);
					hasil = '0';
				}
			})
		})

		$('#tabelutamapasienactive tbody').on('click', 'tr td a.deletepasienactive',function (e) {
			e.preventDefault();
			var rm_id = $(this).closest('tr').find('td').eq(1).text();
			var a = confirm('hapus pasien ?');
			if (a == false) {return false;};
			delete_patient(rm_id);
			var table = $('#tabelutamapasienactive').DataTable();
			table.row($(this).parents('tr') ).remove().draw();
			table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
	            cell.innerHTML = i+1;
	        } );
		})

		//inactive
		$('#tabelutamapasieninactive tbody').on('click', 'tr td a.viewdetailpasienactive',function (e) {
			e.preventDefault();
			var rm_id = $(this).closest('tr').find('td').eq(1).text();
			//$(':input','#formeditpasien').not(':button').attr('disabled','disabled');

			$.ajax({
				type: "POST",
				url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_detail_pasien/'+rm_id,
				success: function (data) {
					console.log(data);
					fill_patient_info(data);
				},
				error: function (data) {
					console.log(data);

				}
			})
		})

		$('#tabelutamapasieninactive tbody').on('click', 'tr td a.changestatuspasienactive',function (e) {
			var rm_id = $(this).closest('tr').find('td').eq(1).text();
			$('#rm_id_inactive').val(rm_id);
		})

		$('#inactive_pasien').submit(function (e) {
			//e.preventDefault();
			var item = {};
			item['status_pasien'] = $('#m_statusMen').find('option:selected').val();
			item['tgl_meninggal'] = $('#m_tlgMati').val();
			item['sebab'] = $('#m_sbaMati').val();
			item['rm_id'] = $('#rm_id_inactive').val();
			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/inactive_pasien',
				success: function (data) {
					alert('sukses');
					console.log(data);
				},
				error: function (data) {
					console.log(data);
					hasil = '0';
				}
			})
		})

		$('#tabelutamapasieninactive tbody').on('click', 'tr td a.deletepasienactive',function (e) {
			e.preventDefault();
			var rm_id = $(this).closest('tr').find('td').eq(1).text();
			var a = confirm('hapus pasien ?');
			if (a == false) {return false;};
			delete_patient(rm_id);
			var table = $('#tabelutamapasieninactive').DataTable();
			table.row($(this).parents('tr') ).remove().draw();
			table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
	            cell.innerHTML = i+1;
	        } );
		})

		$('#tabelutamapasienmeninggal tbody').on('click', 'tr td a.deletepasienactive',function (e) {
			e.preventDefault();
			var rm_id = $(this).closest('tr').find('td').eq(1).text();
			var a = confirm('hapus pasien ?');
			if (a == false) {return false;};
			delete_patient(rm_id);
			var table = $('#tabelutamapasienmeninggal').DataTable();
			table.row($(this).parents('tr') ).remove().draw();
			table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
	            cell.innerHTML = i+1;
	        } );
		})

		$('#tabelutamapasienmeninggal tbody').on('click', 'tr td a.viewdetailpasienactive',function (e) {
			e.preventDefault();
			var rm_id = $(this).closest('tr').find('td').eq(1).text();

			$.ajax({
				type: "POST",
				url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_detail_pasienmeninggal/'+rm_id,
				success: function (data) {
					console.log(data);
					$("#mnewJenisID").val(data['jenis_id']);
					$('#mnewNomorID').val(data['no_id']);
					$('#mnew_rm_id').val(data['rm_id']);
					$('#mnewNamaLengkap').val(data['nama']);
					$("#mnewAlias").val(data['alias']);
					$("#mnewjk").val(data['jenis_kelamin']);
					$("#mnewGol").val(data['gol_darah']);
					$("#mnewAgama").val(data['agama']);
					$('#mnewTempatLahir').val(data['tempat_lahir']);
					$('#mtgllahir').val(format_date(data['tanggal_lahir']));
					$("#mnewStatusKawin").val(data['status_perkawinan']);
					$("#mnewJenjangPendidikan").val(data['pendidikan']);
					$('#mnewPekerjaan').val(data['pekerjaan']);
					$('#mnomorPasien').val(data['no_telp']);
					$('#mnewAlamat').val(data['alamat_skr']);
					$('#mnewAlamatKTP').val(data['alamat_ktp']);
					$('#mnewALergi').val(data['alergi']);
					$('#mnewWali').val(data['nama_wali']);
					$("#mnewHubungan").val(data['hubungan_wali']);
					$('#mnewAlamatWali').val(data['alamat_wali']);
					$('#mno_telp_wali').val(data['no_telp_wali']);
					$('#mnewJobWali').val(data['pekerjaan_wali']);
					get_umur(data['tanggal_lahir'], '#mnewUmur');
					$("#mskrProvinsi").val(data['prov_skr']);
					$('#mskrKabupaten').val(data['kab_skr']);
					$('#mskrKecamatan').val(data['kec_skr']);
					$('#mskrKelurahan').val(data['kel_skr']);
					$("#mnewProvinsi").val(data['prov']);
					$('#mnewKabupaten').val(data['kab']);
					$('#mnewKecamatan').val(data['kec']);
					$('#mnewKelurahan').val(data['kel']);

				},
				error: function (data) {
					console.log(data);

				}
			})
		})
		/*search di sini*/
		$('#search_submitactive').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['katakunci'] = $('#activekey').val();
			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/submit_search_active',
				success: function (data) {
					console.log(data);
					var table = $('#tabelutamapasienactive').DataTable();
					table.clear().draw();
					for (var i = 0; i < data.length; i++) {
						var last = '<center>'+
										'<a href="#detailPA" data-toggle="modal" class="viewdetailpasienactive"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>'+
										'<a href="#ubah" data-toggle="modal" class="changestatuspasienactive"><i class="glyphicon glyphicon-tasks" data-toggle="tooltip" data-placement="top" title="Ubah Status"></i></a>'+
										'<a href="#" class="deletepasienactive"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>'+
									'</center>'
						table.row.add([
							(Number(i+1)),
							data[i]['rm_id'],
							data[i]['nama'],
							data[i]['jenis_kelamin'],
							format_date(data[i]['tanggal_lahir']),
							format_date(data[i]['tanggal_visit']),
							'Active',
							last,
							''
						]).draw();
					};
					table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
			            cell.innerHTML = i+1;
			        } );
				},
				error: function (data) {
					console.log(data);
					hasil = '0';
				}
			})
		})

		$('#search_submitinactive').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['katakunci'] = $('#inactivekey').val();
			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/submit_search_inactive',
				success: function (data) {
					console.log(data);
					var table = $('#tabelutamapasieninactive').DataTable();
					table.clear().draw();
					for (var i = 0; i < data.length; i++) {
						var last = '<center>'+
										'<a href="#detailPA" data-toggle="modal" class="viewdetailpasienactive"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>'+
										'<a href="#ubah" data-toggle="modal" class="changestatuspasienactive"><i class="glyphicon glyphicon-tasks" data-toggle="tooltip" data-placement="top" title="Ubah Status"></i></a>'+
										'<a href="#" class="deletepasienactive"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>'+
									'</center>'
						table.row.add([
							(Number(i+1)),
							data[i]['rm_id'],
							data[i]['nama'],
							data[i]['jenis_kelamin'],
							format_date(data[i]['tanggal_lahir']),
							format_date(data[i]['tanggal_visit']),
							'inActive',
							last,
							''
						]).draw();
					};
					table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
			            cell.innerHTML = i+1;
			        } );
				},
				error: function (data) {
					console.log(data);
					hasil = '0';
				}
			})
		})

		$('#search_submitdied').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['katakunci'] = $('#diedkey').val();
			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/submit_search_died',
				success: function (data) {
					console.log(data);
					var table = $('#tabelutamapasienmeninggal').DataTable();
					table.clear().draw();
					for (var i = 0; i < data.length; i++) {
						var last = '<center>'+
										'<a href="#detailPA" data-toggle="modal" class="viewdetailpasienactive"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="Detail"></i></a>'+
										'<a href="#" class="deletepasienactive"><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>'+
									'</center>'
						table.row.add([
							(Number(i+1)),
							data[i]['rm_id'],
							data[i]['nama'],
							data[i]['jenis_kelamin'],
							format_date(data[i]['tanggal_lahir']),
							format_date(data[i]['tgl_meninggal']),
							'Meninggal',
							last,
							''
						]).draw();
					};
					table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
			            cell.innerHTML = i+1;
			        } );
				},
				error: function (data) {
					console.log(data);
					hasil = '0';
				}
			})
		})

		/*akhir search*/

		/*pasien rj*/
		$('#allpasienrj tbody').on('click', 'tr td a.viewdetailpasienrj', function (e) {
			e.preventDefault();
			var rm_id = $(this).closest('tr').find('td').eq(1).text();			

			get_riwayat_klinik(rm_id);
			get_riwayat_igd(rm_id);
			get_riwayat_ri(rm_id);

			$('#tab_detail_klinik_rj tbody').on('click', 'tr td a.view_det_klinik_rj',function (e) {
				e.preventDefault();
				var id = $(this).closest('tr').find('td .det_id').val();
				$.ajax({
					type: "POST",
					url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_detail_riwayatklinik/' + id,
					success: function (data) {
						det_riwayat_klinik(data);
					},
					error: function (data) {
						console.log(data);
					}
				})
			})

			$('#tab_detail_igd_rj tbody').on('click', 'tr td a.view_det_igd_rj',function (e) {
				e.preventDefault();
				var id = $(this).closest('tr').find('td .det_id').val();
				$.ajax({
					type: "POST",
					url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_detail_riwayatigd/' + id,
					success: function (data) {
						det_riwayat_igd(data);
					},
					error: function (data) {
						console.log(data);
					}
				})
			})

			$('#tab_detail_rawat_rj tbody').on('click', 'tr td a.view_det_rawat_rj',function (e) {
				e.preventDefault();
				var id = $(this).closest('tr').find('td .det_id').val();
				$.ajax({
					type: "POST",
					url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_detail_riwayatperawatan/' + id,
					success: function (data) {
						det_riwayat_perawatan(data);
					},
					error: function (data) {
						console.log(data);
					}
				})
			})
		})

		//rekap
		$('#fak').on('click', function (e) {
			e.preventDefault();
			var item = {};
			item['start'] = format_date3($('#startrekap_rj').val());
			item['end'] = format_date3($('#endrekap_rj').val());
			//console.log(item);return false;
			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/filter_rekap_rj',
				success: function (data) {
					console.log(data);//return false;
					var t = $('#tabelutamarekap_rj').DataTable();
					t.clear().draw();
					for (var i = 0; i < data.length; i++) {
						var waktu = format_date4(data[i]['waktu_masuk']);
						//for (var j = 0; j < data['tgl'].length; j++) {
							t.row.add([
								waktu,
								'','','',''
							]).draw();
						//};
					};
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		/*akhir pasien rj*/

		/*pasien ri*/
		$('#allpasienri tbody').on('click', 'tr td a.viewdetailpasienrj', function (e) {
			e.preventDefault();
			var rm_id = $(this).closest('tr').find('td').eq(1).text();			

			get_riwayat_klinik(rm_id);
			get_riwayat_igd(rm_id);
			get_riwayat_ri(rm_id);

			$('#tab_detail_klinik_rj tbody').on('click', 'tr td a.view_det_klinik_rj',function (e) {
				e.preventDefault();
				var id = $(this).closest('tr').find('td .det_id').val();
				$.ajax({
					type: "POST",
					url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_detail_riwayatklinik/' + id,
					success: function (data) {
						det_riwayat_klinik(data);
					},
					error: function (data) {
						console.log(data);
					}
				})
			})

			$('#tab_detail_igd_rj tbody').on('click', 'tr td a.view_det_igd_rj',function (e) {
				e.preventDefault();
				var id = $(this).closest('tr').find('td .det_id').val();
				$.ajax({
					type: "POST",
					url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_detail_riwayatigd/' + id,
					success: function (data) {
						det_riwayat_igd(data);
					},
					error: function (data) {
						console.log(data);
					}
				})
			})

			$('#tab_detail_rawat_rj tbody').on('click', 'tr td a.view_det_rawat_rj',function (e) {
				e.preventDefault();
				var id = $(this).closest('tr').find('td .det_id').val();
				$.ajax({
					type: "POST",
					url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_detail_riwayatperawatan/' + id,
					success: function (data) {
						det_riwayat_perawatan(data);
					},
					error: function (data) {
						console.log(data);
					}
				})
			})
		})
		/*akhir pasien ri*/
	})

	function get_riwayat_klinik (rm_id) {
		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_riwayat_klinik/' + rm_id,
			success: function (data) {
				console.log(data);
				var t= $('#tab_detail_klinik_rj').DataTable();
				t.clear().draw();
				for (var i = 0; i < data.length; i++) {
					var last= '<center><a href="#riwkklinjalan" class="view_det_klinik_rj" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></center>'+
								'<input type="hidden" class="det_id" value="'+data[i]['id']+'">'
					t.row.add([
						Number(i+1),
						format_date(data[i]['tanggal_visit']),
						data[i]['nama_dept'],
						'-',
						data[i]['nama_petugas'],
						last,
						''
					]).draw();
				};
			},
			error: function (data) {
				console.log(data);
				hasil = '0';
			}
		})
	}

	function get_riwayat_igd (rm_id) {
		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_riwayat_igd/' + rm_id,
			success: function (data) {				
				console.log(data);
				var t= $('#tab_detail_igd_rj').DataTable();
				t.clear().draw();
				for (var i = 0; i < data.length; i++) {
					var last= '<center><a href="#riwigdjalan" class="view_det_igd_rj" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></center>'+
								'<input type="hidden" class="det_id" value="'+data[i]['id']+'">'
					t.row.add([
						Number(i+1),
						format_date(data[i]['tanggal_visit']),
						data[i]['nama_dept'],
						data[i]['anamnesa'],
						data[i]['r_dokter'],
						data[i]['rperawat'],
						last,
						''
					]).draw();
				};
			},
			error: function (data) {
				console.log(data);
				hasil = '0';
			}
		})
	}

	function get_riwayat_ri (rm_id) {
		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_riwayat_ri/' + rm_id,
			success: function (data) {
				console.log(data);
				var t= $('#tab_detail_rawat_rj').DataTable();
				t.clear().draw();
				for (var i = 0; i < data.length; i++) {
					var last= '<center><a href="#riwperawatanjalan" class="view_det_rawat_rj" data-toggle="modal"><i class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Lihat detail"></i></a></center>'+
								'<input type="hidden" class="det_id" value="'+data[i]['kunjungan_dok_id']+'">'
					t.row.add([
						Number(i+1),
						format_date(data[i]['tanggal_visit']),
						data[i]['nama_dept'],
						data[i]['nama_petugas'],
						data[i]['diag_utama'],
						data[i]['diag_sek'],
						data[i]['perkembangan_penyakit'],
						last,
						''
					]).draw();
				};
			},
			error: function (data) {
				console.log(data);
				hasil = '0';
			}
		})
	}

	function det_riwayat_klinik (data) {
		$(':input', '#riwkondok').not(':button').val(''); //reset
		$('#j_waktutindakan').val(format_date(data['waktu']));
		$('#j_anamnesa').val(data['anamnesa']);
		$('#j_tekanandarah').val(data['tekanan_darah']);
		$('#j_nadi').val(data['nadi']);
		$('#j_pernapasan').val(data['pernapasan']);
		$('#j_temperatur').val(data['temperatur']);
		$('#j_berat').val(data['berat_badan']);
		$('#j_dokter').val(data['nama_petugas']);
		$('#j_kode_utama').val(data['diagnosa1']);
		$('#j_diag_utama').val(data['diagnosa_utama']);
		$('#j_kode_sek1').val(data['diagnosa2']);
		$('#j_sek1').val(data['diagnosa_1']);
		$('#j_kode_sek2').val(data['diagnosa3']);
		$('#j_sek2').val(data['diagnosa_2']);
		$('#j_kode_sek3').val(data['diagnosa4']);
		$('#j_sek3').val(data['diagnosa_3']);
		$('#j_kode_sek4').val(data['diagnosa5']);
		$('#j_sek4').val(data['diagnosa_4']);
		$('#j_detailDiagnosa').val(data['detail_diagnosa']);
		$('#j_terapi').val(data['terapi']);
		$('#j_alergi').val(data['alergi']);
	}

	function det_riwayat_igd (data) {
		$(':input', '#riwkondok').not(':button').val(''); //reset
		$('#i_waktutindakan').val(format_date(data['waktu']));
		$('#i_anamnesa').val(data['anamnesa']);
		$('#i_tekanandarah').val(data['tekanan_darah']);
		$('#i_nadi').val(data['nadi']);
		$('#i_pernapasan').val(data['pernapasan']);
		$('#i_temperatur').val(data['temperatur']);
		$('#i_berat').val(data['berat_badan']);
		$('#i_dokter').val(data['dokter']);
		$('#i_perawat').val(data['perawat']);
		$('#i_kode_utama').val(data['diagnosa1']);
		$('#i_diag_utama').val(data['diagnosa_utama']);
		$('#i_kode_sek1').val(data['diagnosa2']);
		$('#i_sek1').val(data['diagnosa_1']);
		$('#i_kode_sek2').val(data['diagnosa3']);
		$('#i_sek2').val(data['diagnosa_2']);
		$('#i_kode_sek3').val(data['diagnosa4']);
		$('#i_sek3').val(data['diagnosa_3']);
		$('#i_kode_sek4').val(data['diagnosa5']);
		$('#i_sek4').val(data['diagnosa_4']);
		$('#i_detailDiagnosa').val(data['detail_diagnosa']);
		$('#i_terapi').val(data['terapi']);
		//$('#i_alergi').val(data['alergi']);
		$('#i_kepalaleher').val(data['kepala_leher']);
		$('#i_thorax').val(data['thorax_abd']);
		$('#i_extremitas').val(data['extrimitas']);
	}

	function det_riwayat_perawatan (data) {
		$(':input', '#riwkondok').not(':button').val(''); //reset
		$('#in_waktutindakan').val(format_date(data['waktu_visit']));
		$('#in_anamnesa').val(data['anamnesa']);
		$('#in_tekanandarah').val(data['tekanan_darah']);
		$('#in_nadi').val(data['nadi']);
		$('#in_pernapasan').val(data['pernafasan']);
		$('#in_temperatur').val(data['temperatur']);
		$('#in_berat').val(data['berat_badan']);
		$('#in_dokter').val(data['dokter']);
		$('#in_perawat').val(data['perawat']);
		$('#in_kode_utama').val(data['diagnosa_utama']);
		$('#in_diag_utama').val(data['diagnosa_u']);
		$('#in_kode_sek1').val(data['sekunder1']);
		$('#in_sek1').val(data['diagnosa_1']);
		$('#in_kode_sek2').val(data['sekunder2']);
		$('#in_sek2').val(data['diagnosa_2']);
		$('#in_kode_sek3').val(data['sekunder3']);
		$('#in_sek3').val(data['diagnosa_3']);
		$('#in_kode_sek4').val(data['sekunder4']);
		$('#in_sek4').val(data['diagnosa_4']);
		$('#in_perkembangan').val(data['perkembangan_penyakit']);		
	}

	function delete_patient (rm_id) {
		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/delete_pasien/' + rm_id,
			success: function (data) {
				alert('sukses');
				console.log(data);
			},
			error: function (data) {
				console.log(data);
				hasil = '0';
			}
		})
	}

	function fill_patient_info (data) {
		$("#newJenisID option[value='"+data['jenis_id']+"']").attr("selected", "selected");
		$('#newNomorID').val(data['no_id']);
		$('#new_rm_id').val(data['rm_id']);
		$('#newNamaLengkap').val(data['nama']);
		$("#newAlias option[value='"+data['alias']+"']").attr("selected", "selected");
		$('input:radio[name=jk][value='+data['jenis_kelamin']+']').prop("checked", true);
		$("#newGol option[value='"+data['gol_darah']+"']").attr("selected", "selected");
		$("#newAgama option[value='"+data['agama']+"']").attr("selected", "selected");
		$('#newTempatLahir').val(data['tempat_lahir']);
		$("#newStatusKawin option[value='"+data['status_perkawinan']+"']").attr("selected", "selected");
		$("#newJenjangPendidikan option[value='"+data['pendidikan']+"']").attr("selected", "selected");
		$('#newPekerjaan').val(data['pekerjaan']);
		$('#nomorPasien').val(data['no_telp']);
		$('#newAlamat').val(data['alamat_skr']);
		$('#newAlamatKTP').val(data['alamat_ktp']);
		$('#newALergi').val(data['alergi']);
		$('#newWali').val(data['nama_wali']);
		$("#newHubungan option[value='"+data['hubungan_wali']+"']").attr("selected", "selected");
		$('#newAlamatWali').val(data['alamat_wali']);
		$('#no_telp_wali').val(data['no_telp_wali']);
		$('#newJobWali').val(data['pekerjaan_wali']);
		get_umur(data['tanggal_lahir'],'#newUmur');
		$("#skrProvinsi option[value='"+data['prov_id_skr']+"']").attr("selected", "selected");
		get_kab(data['prov_id_skr'], data['kab_id_skr'],"#skrKabupaten");
		get_kec(data['kab_id_skr'], data['kec_id_skr'],"#skrKecamatan");
		get_kel(data['kec_id_skr'], data['kel_id_skr'],"#skrKelurahan");
		$("#newProvinsi option[value='"+data['prov_id']+"']").attr("selected", "selected");
		get_kab(data['prov_id'], data['kab_id'],"#newKabupaten");
		get_kec(data['kab_id'], data['kec_id'],"#newKecamatan");
		get_kel(data['kec_id'], data['kel_id'],"#newKelurahan");

		var res = data['tanggal_lahir'].split("-");
	    var bln = res[1];
		var tgl = res[2];
	    var thn = res[0];
	    $('#newTglLahir').val(tgl + '/' + bln + '/' +thn);
	}

	function get_umur (tgl, id) {
		var hasil;
		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_umur/'+tgl, 
			success: function (data) {
				$(id).val(data['umur']);
			},
			error: function (data) {
				console.log(data);
				hasil = '0';
			}
		})
	}


	function get_kab (prov, kab, id) {
		var hasil;
		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_kab/'+prov, 
			success: function (data) {
				$(id).empty();
				if (data.length == 0) {$(id).append("<option value=''>Pilih kabupaten </option>")};
				for (var i = 0; i < data.length; i++) {
					$(id).append("<option value='"+data[i]['kab_id']+"'>"+data[i]['nama_kab']+" </option>");
				};

				$(id + " option[value='"+kab+"']").attr("selected", "selected");
			},
			error: function (data) {
				console.log(data);
				hasil = '0';
			}
		})
	}

	function get_kec (kab, kec, id) {
		var hasil;
		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_kec/'+kab, 
			success: function (data) {
				$(id).empty();
				if (data.length == 0) {$(id).append("<option value=''>Pilih kecamatan </option>")};
				for (var i = 0; i < data.length; i++) {
					$(id).append("<option value='"+data[i]['kec_id']+"'>"+data[i]['nama_kec']+" </option>");
				};
				$(id + " option[value='"+kec+"']").attr("selected", "selected");
			},
			error: function (data) {
				console.log(data);
				hasil = '0';
			}
		})
	}

	function get_kel (kec, kel, id) {
		var hasil;
		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>rekammedis/homeolahdatapasien/get_kel/'+kec, 
			success: function (data) {
				$(id).empty();
				if (data.length == 0) {$(id).append("<option value=''>Pilih kelurahan </option>")};
				for (var i = 0; i < data.length; i++) {
					$(id).append("<option value='"+data[i]['kel_id']+"'>"+data[i]['nama_kel']+" </option>");
				};
				$(id + " option[value='"+kel+"']").attr("selected", "selected");
			},
			error: function (data) {
				console.log(data);
				hasil = '0';
			}
		})
	}

</script>