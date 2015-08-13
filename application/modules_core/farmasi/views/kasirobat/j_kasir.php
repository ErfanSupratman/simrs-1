<script type="text/javascript">
	$(document).ready(function () {
		$('#submitcariresep').submit(function (e) {
			e.preventDefault();
			var item = {};
			item[0] = {}
			item[0]['resep_id'] = $('#resepKasir').val();
			item[0]['rm_id'] =  $('#noRMKasir').val();
			item[0]['nama_pasien'] = $('#namaPsKasir').val();
			item[0]['tanggal_resep'] = $('#tglKasir').val();
			if (item[0]['tanggal_resep'] != '') {item[0]['tanggal_resep'] = format_date3(item[0]['tanggal_resep'])};

			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url(); ?>farmasi/homekasirobat/search_resep',
				success: function (data) {
					console.log(data);
					var t = $('#tabelsearchresep').DataTable();
					t.clear().draw();
					for (var i = 0; i < data.length; i++) {
						var rs = '<div style="max-width:30%;word-wrap:break-all">'+data[i]['resep']+'</div>'
						var last = '<center><div class="actions"><a href="<?php echo base_url();?>farmasi/homepenjualanobat/prosesresep/'+data[i]['resep_id']+'" class="btn btn-success"><i class="fa fa-check"></i></a></div></center>'
						t.row.add([
							data[i]['resep_id'],
							data[i]['rm_id'],
							data[i]['nama'],
							data[i]['nama_dept'],
							data[i]['tipe_kunjungan'],
							format_date(data[i]['tanggal']),
							rs,
							data[i]['status_ambil'],
							last,
							i
							]).draw();
					};
					
				},
				error: function (data) {
					console.log(data);
				}
			})
		});

		$('#submitcariresepbayar').submit(function (e) {
			e.preventDefault();
			var item = {};
			item[0] = {}
			item[0]['resep_id'] = $('#resepKasirbayar').val();
			item[0]['rm_id'] =  $('#noRMKasirbayar').val();
			item[0]['nama_pasien'] = $('#namaPsKasirbayar').val();
			item[0]['tanggal_resep'] = $('#tglKasirbayar').val();
			if (item[0]['tanggal_resep'] != '') {item[0]['tanggal_resep'] = format_date3(item[0]['tanggal_resep'])};

			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url(); ?>farmasi/homekasirobat/search_resep_bayar',
				success: function (data) {
					console.log(data);
					var t = $('#tabelsearchresepbayar').DataTable();
					t.clear().draw();
					for (var i = 0; i < data.length; i++) {
						var rs = '<div style="max-width:30%;word-wrap:break-all">'+data[i]['resep']+'</div>'
						var last = '<center><div class="actions"><a href="<?php echo base_url();?>farmasi/homepenjualanobat/bayar_resep/'+data[i]['resep_id']+'" class="btn btn-success"><i class="fa fa-check"></i></a></div></center>'
						t.row.add([
							data[i]['resep_id'],
							data[i]['rm_id'],
							data[i]['nama'],
							data[i]['nama_dept'],
							data[i]['tipe_kunjungan'],
							format_date(data[i]['tanggal']),
							rs,
							data[i]['status_ambil'],
							last,
							i
							]).draw();
					};
					
				},
				error: function (data) {
					console.log(data);
				}
			})
		});
	})
</script>