<?php

$sekarang = str_replace('-', "_", date('d-m-Y'));
$title = 'Laporan_Retur_Dari_'.$nama_dept.'_'.$sekarang;
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
			<td colspan="16" style="text-align:center;border-bottom:none;"><strong>LAPORAN RETUR OBAT</strong></td>
		</tr>
		<tr>
			<td colspan="16" style="text-align:center;border-bottom:none;"><strong> <?php echo $dept ?> RS BAHAYANGKARA PALANGKARAYA</strong></td>
		</tr>
	</table>

	<br/>
	<strong>Retur obat dari </strong> <?php echo $dept ?>
	<strong> dari </strong> <?php echo $awal ?>
	<strong> sampai </strong> <?php echo $akhir ?>
	<br/>
	<br/>

	<div class="hasil_kelas">
		<table class="table" id="hasil-evaluasi-dosen" border="1">
			<thead>
				<tr class="header">
					<th style="text-align:center;width:300px">Nama Departemen</th>
					<th style="text-align:center;width:300px">Waktu Retur</th>
					<th style="text-align:center;width:300px" colspan="2">Petugas Request</th>
					<th style="text-align:center;width:300px" colspan="2">Tanggal Respond</th>
					<th style="text-align:center;width:300px" colspan="2">Petugas Respond</th>
					<th style="text-align:center;width:300px" colspan="2">Nama Obat</th>
					<th style="text-align:center;width:300px" colspan="2">Tanggal Kadaluarsa</th>
					<th style="text-align:center;width:300px" colspan="2">Jumlah Retur</th>
					<th style="text-align:center;width:300px" colspan="2">Status</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if (empty($hasil)) {
					  	echo '<tr class="body"><td colspan="16" style="text-align:center;>tidak ada<td></tr>';
					  	die();
					} 
					$dept_nama = "" ;
					foreach ($hasil as $value) {
						echo '<tr class="body">'.
									'<td style="text-align:center;width:300px">'.($value['nama_dept'] = $dept_nama ? "-" : $value['nama_dept']).'</td>'.
									'<td style="text-align:center;width:300px">'.$value['waktu'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['ptgs_input'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.($value['tanggal_confirm'] = null ? "-": $value['tanggal_confirm']).'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.($value['ptgs_confirm'] = null ? "-" : $value['ptgs_confirm']).'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['nama'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['tgl_kadaluarsa'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['jumlah'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.($value['is_responded'] = 0 ? "Belum direspon" : "Sudah direspon").'</td>'.
								'</tr>';
						$dept_nama = $value['nama_dept'];
					}
				?>	
			</tbody>
		</table>
	</div>
</body>
</html>