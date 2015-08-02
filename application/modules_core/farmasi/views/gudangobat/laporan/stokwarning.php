<?php

$sekarang = str_replace('-', "_", date('d-m-Y'));
$title = 'Laporan_StokWarning_'.$nama_dept.'_'.$sekarang;
$dept = str_replace('_', " ", $nama_dept);

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Kartu Stok</title>

   <style>
    	.grup-pertanyaan {
			text-align: center;
			border: solid 1px #000;
		}
		table td {
			border-bottom: solid 0.5px #000;
			font-size: 12pt;
			vertical-align:middle;
			line-height:40px;
			width: 300px;
		}
		.keterangan_pertanyaan {
			font-size: 8pt;
		}
		table .nama_matkul{
			text-transform:capitalize;
		}
		table {
			width: 100%;
		}
		table .header {
			background-color: yellow;			
			border-top: solid 0.5px #000;			
			border-left: solid 0.5px #000;			
			border-right: solid 0.5px #000;			
			border-bottom: solid 0.2px #000;
			font-weight: bold;
			vertical-align:middle;
			line-height:40px;
		}
		table .body {
			border-top: solid 0.5px #000;			
			border-left: solid 0.5px #000;			
			border-right: solid 0.5px #000;			
			border-bottom: solid 0.2px #000;			
		}
		.center {
			text-align:center;
		}
		.right {
			text-align:right;			
		}
		.italic {
			font-style:italic;
		}
    </style>

</head>

<body>
	<table>
		<tr>
			<td colspan="24" style="text-align:center;border-bottom:none;"><strong>LAPORAN STOK WARNING</strong></td>
		</tr>
		<tr>
			<td colspan="24" style="text-align:center;border-bottom:none;"><strong> <?php echo $dept ?> RS BAHAYANGKARA PALANGKARAYA</strong></td>
		</tr>
	</table>

	<br/>
	<strong>Stok warning di </strong> <?php echo $dept ?>
	<strong> per tanggal </strong> <?php echo $waktu ?>
	
	<br/>
	<br/>

	<div class="hasil_kelas">
		<table class="table" id="hasil-evaluasi-dosen">
			<thead>
				<tr class="header">
					<th style="text-align:center;width:300px">No</th>
					<th style="text-align:center;width:300px">Nama Obat</th>
					<th style="text-align:center;width:300px" colspan="2">Jenis</th>
					<th style="text-align:center;width:300px" colspan="2">Merek</th>
					<th style="text-align:center;width:300px" colspan="2">Penyedia</th>
					<th style="text-align:center;width:300px" colspan="2">Generik</th>
					<th style="text-align:center;width:300px" colspan="2">Harga Dasar</th>
					<th style="text-align:center;width:300px" colspan="2">HPS</th>
					<th style="text-align:center;width:300px" colspan="2">Margin</th>
					<th style="text-align:center;width:300px" colspan="2">Harga Jual</th>
					<th style="text-align:center;width:300px" colspan="2">Stok Minimal</th>
					<th style="text-align:center;width:300px" colspan="2">Stok Total</th>
					<th style="text-align:center;width:300px" colspan="2">Satuan</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
					if (empty($hasil)) {
					  	echo '<tr class="body"><td colspan="16" style="text-align:center;>tidak ada<td></tr>';
					  	die();
					}  
					$i = 0;
					foreach ($hasil as $value) {
						echo '<tr class="body">'.
									'<td style="text-align:center;width:300px">'.(++$i).'</td>'.
									'<td style="text-align:center;width:300px">'.$value['nama'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['jenis_obat'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.($value['nama_merk']).'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['nama_penyedia'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.($value['is_generik']).'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['harga_dasar'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['hps'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.($value['margin']).'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.($value['harga_jual']).'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.($value['stok_minimal']).'</td>'.
									'<td style="text-align:center;width:300px;color:white;background-color:red;font-weight:bold;" colspan="2">'.($value['jlh']).'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.($value['satuan']).'</td>'.
								'</tr>';
					}
				?>	
			</tbody>
		</table>
	</div>
</body>
</html>