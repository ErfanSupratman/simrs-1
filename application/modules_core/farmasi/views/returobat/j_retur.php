<script type="text/javascript">
	$(document).ready(function () {
		$('#search_submit').submit(function (e) {
			e.preventDefault();
			var item = {};
			item['key'] = $('#kuncisubmit').val();

			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url()?>farmasi/homereturobat/search_retur',
				success: function (data) {
					console.log(data);
					var t = $('#tabelreturpasienutama').DataTable();
					t.clear().draw();
					for (var i = 0; i < data.length; i++) {
						var last = '<center><a href="tambahretur/tambah/'+data[i]['no_nota']+'"><i class="fa fa-plus" data-toggle="tooltip" data-placement="top" title="Tambah Retur"></i></a></center>'
						t.row.add([
							Number(i) + 1,
							data[i]['dept_asal'],
							data[i]['no_nota'],
							data[i]['rm_id'],
							data[i]['nama'],
							data[i]['jenis_kelamin'],
							'umur',
							last,
							'fa'
						]).draw();		
					};
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#tabelRetur tbody').on('click', 'tr td a.addnewReturobat',function (e) {
			e.preventDefault();
			var dethis = $(this).closest('tr');
			var nama = dethis.find('td').eq(0).text();
			var satuan = dethis.find('td').eq(2).text();
			var jlh = dethis.find('td').eq(1).text();
			var harga = dethis.find('td').eq(4).text();
			var stok_id = dethis.find('td').eq(3).text();
			var apd_id = dethis.find('td').eq(5).text();
			var newrow = '<tr><td>'+nama+'</td>'+
							'<td>'+jlh+'</td>'+
							'<td><input type="number" class="form-control qtyreturobat" value="0"></td>'+
							'<td>'+satuan+'</td>'+
							'<td style="text-align:right">'+harga+'</td>'+
							'<td style="text-align:right">0</td>'+
							'<td style="display:none">'+stok_id+'</td>'+
							'<td style="display:none">'+apd_id+'</td>'+
							'<td><a href="#" class="removeRow"><i class="glyphicon glyphicon-remove"></i></a></td></tr>';
			$('#addretur').append(newrow);

			
		})

		$('#addretur').on('change', 'tr td .qtyreturobat', function () {
			var a = Number($(this).val());
			if (a > Number($(this).closest('tr').find('td').eq(1).text())) {alert('jumlah tidak valid');return false;}

			var harga = $(this).closest('tr').find('td').eq(4).text();
			var jlh = $(this).val();
			$(this).closest('tr').find('td').eq(5).text(Number(harga) * Number(jlh));

			var data = hitung_total();
		})

		$("#submitreturpasien").submit(function (e) {
			e.preventDefault();
			var a = confirm('yakin disimpan?, proses ini tidak dapat diubah');
			if (a == false) {return false;};
			
			var item = {};
			item['data'] = hitung_total();
			item['no_nota'] = $('#nomor_nota').text();
			item['total_retur'] = $('#totalreturpasien').text();
			//console.log(item);return false;
			$.ajax({
				type: "POST",
				data: item,
				url: '<?php echo base_url()?>farmasi/tambahretur/submit_retur_pasien',
				success: function (data) {
					console.log(data);
					alert(data);
					window.location = '<?php echo base_url()?>farmasi/homereturobat';
				},
				error: function (data) {
					console.log(data);
				}
			})
		})
		
	})

	function hitung_total () {
		var data = [];
		var jlh = 0;
	    $('#addretur').find('tr').each(function (rowIndex, r) {
	        var cols = [];
	        $(this).find('td').each(function (colIndex, c) {
	            cols.push(c.textContent);
	        });
	        $(this).find('td input[type=number]').each(function (colIndex, c) {
	            cols.push(c.value);
	        });
	        jlh += Number(cols[5]);
	        data.push(cols);
	    });

	    $('#totalreturpasien').text(jlh);
	    return data;
	}
</script>