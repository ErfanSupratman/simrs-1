<script type="text/javascript">
	$(document).ready(function (e) {
		$('input[type=number]').on('change',function () {
			var n = $(this).val();
			if (n < 0) {$(this).val('0')};
		})
		$(".numberrequired").keydown(function (e) {
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

		/**/
		var t = $('.tableDTUtama').DataTable();
		t.on( 'order.dt search.dt', function () {
	        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
	            cell.innerHTML = i+1;
	        } );
	    } ).draw();

	    var ta = $('.tableDT').DataTable();
		ta.on( 'order.dt search.dt', function () {
	        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
	            cell.innerHTML = i+1;
	        } );
	    } ).draw();

	    /*pindah pasien unit*/
	    $('#tabelutamapasienunit').on('click', 'tr td a.pindahpasien', function (e) {
			e.preventDefault();
			var rm_id = $(this).closest('tr').find('td').eq(1).text();
			var nama = $(this).closest('tr').find('td').eq(2).text();
			var v_id = $(this).closest('tr').find('td .v_id').val();
			var ri_id = $(this).closest('tr').find('td .ri_id').val();
			var b_id = $(this).closest('tr').find('td .b_id').val();

			$('#modal_no_rm').val(rm_id);
			$('#modal_nama').val(nama);
			$('#visit_id_pindah').val(v_id);
			$('#ri_id_pindah').val(ri_id);
			$('#bed_id_lama').val(b_id);
		})

		$('#textkamar').prop('disabled',true);	
		$('#deptTujuan').on('change', function (e) {
			var id = $(this).val();
			if (id == '') {$('#textkamar').prop('disabled',true);return false};
			$('#textkamar').prop('disabled',false);
		})

		$('#textkamar').click(function(){
			var dept = $('#deptTujuan').val();
			var dataKamar = '';

			$('#tbody_kamar').empty();
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
								dataKamar+='<td style="text-align:center;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"  style="cursor:pointer;" onClick="pilih_bed_unit('+kamar_id+','+bed_id+',&quot;'+nama_bed+'&quot;)"></i></td>'+
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
								dataKamar+='<td style="text-align:center;"><i class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top" title="Pilih"  style="cursor:pointer;" onClick="pilih_bed_unit('+kamar_id+','+bed_id+',&quot;'+nama_bed+'&quot;)"></i></td>'+
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

	    /**/

	})

	function pindah_pasien (controller_link) {
		var itemModal = {};
		itemModal['tanggal_pindah']= $('#inputdate').val();
		itemModal['visit_id'] = $('#visit_id_pindah').val();
		itemModal['ri_id'] = $('#ri_id_pindah').val();
		itemModal['kelas_pelayanan'] = $('#kelas_pelayanan').val();
		itemModal['cara_bayar'] = $('#carabayar').val();
		itemModal['nama_asuransi'] = $('#namaAsuransi').val();
		itemModal['no_asuransi'] = $('#nomorAsuransi').val();
		itemModal['nama_perusahaan'] = $('#namaPerusahaan').val();
		itemModal['cara_masuk'] = $('#caramasuk').val();
		itemModal['detail_masuk'] = $('#detailmasuk').val();
		itemModal['tipe_kunjungan'] = "RAWAT INAP";
		//itemModal['petugas_registrasi'] = "User Login";
		itemModal['dept_id_tujuan'] = $('#deptTujuan').val();
		itemModal['kamar_id_baru'] = $('#kamar_id').val();
		itemModal['bed_id_baru'] = $('#bed_id').val();
		itemModal['bed_id_lama'] = $('#bed_id_lama').val();
		//itemModal['is_pasien_lama'] = $('#adminitrasi').val();

		console.log(itemModal);
		$.ajax({
			type: "POST",
			data: itemModal,
			url: '<?php echo base_url()?>'+controller_link+'/pindah_proses',
			success: function (data) {
				console.log(data);
				$('#pindahkan').modal('hide');
				window.location.href = '<?php echo base_url() ?>' + controller_link;
			},
			error: function (data) {
				console.log(data);
			}
		})
	}

	function pilih_bed_unit(kamar_id, bed_id, nama_bed){
		$('#kamar_id').val(kamar_id);
		$('#bed_id').val(bed_id);
		$('#textkamar').val(nama_bed);
		$('#pilkamar').modal('hide');
	}

	function format_date (date) {
		var sp = date.split('-');
		var tgl = sp[2];
		var thn = sp[0];
		var temp = sp[1];
		var bln = "";
		switch(temp){
			case '01' : bln = "January" ;break;
			case '02' : bln = "February" ;break;
			case '03' : bln = "March" ;break;
			case '04' : bln = "April" ;break;
			case '05' : bln = "May" ;break;
			case '06' : bln = "June" ;break;
			case '07' : bln = "July" ;break;
			case '08' : bln = "August" ;break;
			case '09' : bln = "September" ;break;
			case '10' : bln = "October" ;break;
			case '11' : bln = "November" ;break;
			case '12' : bln = "December" ;break;
		}

		var waktu = "";
		if(tgl.length > 2){
			var a = tgl.split(' ');
			waktu = a[0] + " " + bln + " "+ thn + " " + a[1];
		}else{
			waktu = tgl + " " + bln + " "+ thn;
		}
		return waktu;
	}

	function format_date4 (date) {
		var sp = date.split('-');
		var tgl = sp[2];
		var thn = sp[0];
		var temp = sp[1];
		var bln = "";
		switch(temp){
			case '01' : bln = "January" ;break;
			case '02' : bln = "February" ;break;
			case '03' : bln = "March" ;break;
			case '04' : bln = "April" ;break;
			case '05' : bln = "May" ;break;
			case '06' : bln = "June" ;break;
			case '07' : bln = "July" ;break;
			case '08' : bln = "August" ;break;
			case '09' : bln = "September" ;break;
			case '10' : bln = "October" ;break;
			case '11' : bln = "November" ;break;
			case '12' : bln = "December" ;break;
		}

		var waktu = "";
		if(tgl.length > 2){
			var a = tgl.split(' ');
			waktu = a[0] + " " + bln + " "+ thn;
		}else{
			waktu = tgl + " " + bln + " "+ thn;
		}
		return waktu;
	}

	function format_date2 (date) {
		var sp = date.split(' ');
		var tgl = sp[0];
		var thn = sp[2];
		var temp = sp[1];
		
		var bln = "";
		switch(temp){
			case 'January' : bln = "01" ;break;
			case 'February' : bln = "02" ;break;
			case 'March' : bln = "03" ;break;
			case 'April' : bln = "04" ;break;
			case 'May' : bln = "05" ;break;
			case 'June' : bln = "06" ;break;
			case 'July' : bln = "07" ;break;
			case 'August' : bln = "08" ;break;
			case 'September' : bln = "09" ;break;
			case 'October' : bln = "10" ;break;
			case 'November' : bln = "11" ;break;
			case 'December' : bln = "12" ;break;
		}

		var waktu = tgl + "/" + bln + "/"+ thn;
		if (thn.length > 4) {
			var w = thn.split(' ');
			waktu = waktu + ' ' + w[1];
		}
		return waktu;
	}

	function format_date3(date){
		var res = date.split("/");
	    var bln = res[1];
		var tgl = res[0];
	    var thn = res[2];
	    var waktu = "";
	    if (thn.length > 4) {
	    	var a = thn.split(' ');
	    	waktu = a[0] + '-' + bln + '-' + tgl + ' '+  a[1];
	    }else{
	    	waktu = thn + '-' + bln + '-' + tgl;
	    }
	    
	    return waktu;
	}
</script>

<!-- END JAVASCRIPTS -->