<?php

$sekarang = str_replace('-', "_", date('d-m-Y'));
$title = 'Laporan_Obat_Kadaluarsa_'.$nama_dept.'_'.$sekarang;

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
			<td colspan="20" style="text-align:center;border-bottom:none;"><strong>LAPORAN OBAT</strong></td>
		</tr>
		<tr>
			<td colspan="20" style="text-align:center;border-bottom:none;"><strong> <?php echo $nama_dept ?> RS BAHAYANGKARA PALANGKARAYA</strong></td>
		</tr>
	</table>

	<br/>
	<strong>Daftar obat yang </strong> <?php echo $filter ?>
	<strong> Per tanggal</strong> <?php echo date('d F Y H:i:s') ?>
	<br/>
	<br/>

	<div class="hasil_kelas">
		<table class="table" id="hasil-evaluasi-dosen">
			<thead>
				<tr class="header">
					<th style="text-align:center;width:300px">Nama Obat</th>
					<th style="text-align:center;width:300px">Nomor Batch</th>
					<th style="text-align:center;width:300px" colspan="2">Harga Dasar</th>
					<th style="text-align:center;width:300px" colspan="2">HPS</th>
					<th style="text-align:center;width:300px" colspan="2">Margin</th>
					<th style="text-align:center;width:300px" colspan="2">Harga Jual</th>
					<th style="text-align:center;width:300px" colspan="2">Merek</th>
					<th style="text-align:center;width:300px" colspan="2">Stok</th>
					<th style="text-align:center;width:300px" colspan="2">Satuan</th>
					<th style="text-align:center;width:300px" colspan="2">Tahun</th>
					<th style="text-align:center;width:300px" colspan="2">Tanggal Kadaluarsa</th>
				</tr>
			</thead>
			<tbody>
				<?php  
					foreach ($result as $value) {
						$dateTime = DateTime::createFromFormat('Y-m-d',$value['tgl_kadaluarsa']);
						$newDateString = $dateTime->format('d F Y');
						echo '<tr class="body">'.
									'<td style="text-align:center;width:300px">'.$value['nama'].'</td>'.
									'<td style="text-align:center;width:300px">'.$value['no_batch'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['harga_dasar'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['hps'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['margin'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['harga_jual'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['nama_merk'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['total_stok'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['satuan'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['tahun_pengadaan'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$newDateString.'</td>'.
								'</tr>';
					}
				?>	
			</tbody>
		</table>
	</div>
</body>
</html>