<script type="text/javascript">
	$(document).ready(function () {
		$('#ubahBarang').hide();
		$('#btnBatalBrg').hide();

		$('#smpanBarang').on('click', function (e) {
			e.preventDefault();
			var item = {};
			item['nama'] = $('#nmBarang').val();
			item['merk'] = $('#namaMerk').val();
			item['satuan_id'] = $('#selectSatBarang').find('option:selected').val();
			item['stok_minimal'] = $('#stokmin').val();
			item['group_id'] = $('#selectGrpBarang').find('option:selected').val();
			item['harga'] = $('#hgDasarBarang').val();
			item['is_hidden'] = $('input:radio[name=hd]:checked').val();

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>logistik/homegudangbarang/add_barang",
				success: function (data) {
					alert(data['message']);
					if (data['error'] == 'y') {
						$('#nmBarang').focus();
						return false;
					}
					resetbarang();
				},
				error: function (data) {
					console.log(data);
				}
			})
		})

		$('#ubahBarang').on('click', function (e) {
			e.preventDefault();
			
		})

		$('#formcaridetailbarang').submit(function (e) {
			e.preventDefault;
			var katakunci = $('#katakuncibarangdetail').val();

			$.ajax({
				type: "POST",
				data: item,
				url: "<?php echo base_url()?>logistik/homegudangbarang/search_barang/" + katakunci,
				success: function (data) {
					if (data.length > 0) {
						$('#tbodybarangdetail').empty();
						for (var i = 0; i < data.length; i++) {
							$('$tbodybarangdetail').append(
								'<tr>'+
									'<td>'+data[i]['nama']+'</td>'+
									'<td style="text-align:center">'+
									'<input type="hidden" class="idbarang" value="'+data[i]['barang_id']+'">'
									'<a href="#" class="cekobat"><i class="glyphicon glyphicon-check"></i></a></td>'+
								'</tr>'
							)
						};
					}
				},
				error: function (data) {
					console.log(data);
				}
			})
		})
	})

	function resetbarang () {
		$('#nmBarang').val('');
		$('#namaMerk').val('');
		$("#selectSatBarang option[value='']").attr("selected", "selected");
		$('#stokmin').val('');
		$("#selectGrpBarang option[value='']").attr("selected", "selected");
		$('#hgDasarBarang').val('');
		$('input:radio[name=hd][value="0"').prop("checked", true);
	}
	
</script>