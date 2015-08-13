<script type="text/javascript">
	$(document).ready(function () {
		$('#statuslahir').on('change', function (e) {
			var a = $(this).val();
			if (a == 'Hidup') {$('#srtLahir').text('No Surat Kelahiran');$('#surat').attr('placeholder','surat kelahiran');return false;};
			$('#srtLahir').text('No Surat Kematian');$('#surat').attr('placeholder','surat kematian');return false;
		})

		$('#namaibu').focus(function(){
			var $input = $('#namaibu');
			
			$.ajax({
				type:'POST',
				url:'<?php echo base_url();?>nicu/daftarkelahiran/get_patient_on_bed',
				success:function(data){
					//console.log(data);
					var nama = [];var kabupaten = [];
					var visit = [];var kelurahan = [];
					var kecamatan = [];var telpon = [];
					var idkab = [];var alamat = [];
					var idkec = [];var idkel = [];
					var alamat = [];

					for(var i = 0; i<data.length; i++){
						nama.push(data[i]['nama']);
						visit.push(data[i]['visit_id']);
						idkab.push(data[i]['kab_id_skr']);
						idkec.push(data[i]['kec_id_skr']);
						idkel.push(data[i]['kel_id_skr']);
						kabupaten.push(data[i]['nama_kab']);
						kecamatan.push(data[i]['nama_kec']);
						kelurahan.push(data[i]['nama_kel']);
						telpon.push(data[i]['no_telp']);
						alamat.push(data[i]['alamat_skr']);
					}
					console.log(nama);

					$input.typeahead({source:nama, 
			            autoSelect: true}); 

					$input.change(function() {
					    var current = $input.typeahead("getActive");
					    var index = nama.indexOf(current);

					    $('#visit_id_ibu').val(visit[index]);
					    $('#telp').val(telpon[index]);
					    $('#kelurahan').val(kelurahan[index]);
					    $('#kelurahan_id').val(idkel[index]);
					    $('#kabupaten').val(kabupaten[index]);
					    $('#kabupaten_id').val(idkab[index]);
					    $('#kecamatan').val(kecamatan[index]);
					    $('#kecamatan_id').val(idkec[index]);
					    $('#alamat_ibu').val(alamat[index]);
					    
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
				},
				error: function (data) {
					console.log(data);
				}
			});
		});

		$('#textkamarnicu').click(function(){
			var dept = $('#deptTujuan').val();
			var dataKamar = '';

			$('#tbody_kamar_nicu').empty();
			$.ajax({
				type:"POST",
				url:"<?php echo base_url() ?>pasien/rawatinap/get_kamar/"+dept, //ambil dari admisi
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
								dataKamar+='<td style="text-align:center;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"  style="cursor:pointer;" onClick="pilih_bed_nicu('+kamar_id+','+bed_id+',&quot;'+nama_bed+'&quot;)"></i></td>'+
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
								dataKamar+='<td style="text-align:center;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"  style="cursor:pointer;" onClick="pilih_bed_nicu('+kamar_id+','+bed_id+',&quot;'+nama_bed+'&quot;)"></i></td>'+
								'</tr>';
							}else{
								dataKamar+='<td></td></tr>';
							}
						}
						kamarBaru = kamarSkr;
					}
					$('#tbody_kamar_nicu').append(dataKamar);

				}
			});
		});

		$('#search_submit').submit(function(e){
			var data = {};
			data['search'] = $('#search_value').val();
			var admisi = 'Admisi';

			e.preventDefault();
			$.ajax({
				type:'POST',
				data:data,
				url:'<?php echo base_url(); ?>nicu/homenicu/search_pasien',
				success:function(data){
					console.log(data);
					var t = $('#tabelutamapasienunit').DataTable();

					t.clear().draw();

					for(var i=0; i<data.length; i++){
						var rm = data[i]['rm_id'],
							nama = data[i]['nama'],
							jk = data[i]['jenis_kelamin'],
							tgl = data[i]['tanggal_lahir'],
							alamat = data[i]['alamat_skr'];
							asal = data[i]['dept_asal'];
						var last = '<center><a href="#" class="pindahpasien" data-toggle="modal" data-target="#pindahkan"><i class="fa fa-external-link" data-toggle="tooltip" data-placement="top" title="Pindah"></i></a>'+
									'<a href="<?php echo base_url() ?>nicu/nicudetail/daftar/'+data[i]['ri_id']+'/'+data[i]['visit_id']+'" ><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Pemeriksaan"></i></a></center>'+
									'<input type="hidden" class="ri_id" value="'+data[i]['ri_id']+'"><input type="hidden" class="v_id" value="'+data[i]['visit_id']+'">'+
									'<input type="hidden" class="b_id" value="'+data[i]['bed_id']+'">';
						t.row.add([
							i+1,
							rm,
							nama,
							jk,
							format_date(tgl),
							alamat,
							asal,
							last,
							i
						]).draw();
					}
					t.on( 'order.dt search.dt', function () {
				        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
				            cell.innerHTML = i+1;
				        } );
				    } ).draw();
					$('[data-toggle="tooltip"]').tooltip();
				},
				error:function (data) {
					console.log(data);
				}
			});
		});

	})

	function pilih_bed_nicu(kamar_id, bed_id, nama_bed){
		$('#kamar_id_nicu').val(kamar_id);
		$('#bed_id_nicu').val(bed_id);
		$('#textkamarnicu').val(nama_bed);
		$('#pilkamar').modal('hide');
	}
</script>