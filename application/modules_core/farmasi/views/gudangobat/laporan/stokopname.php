<?php

$sekarang = str_replace('-', "_", date('d-m-Y'));
$title = 'Laporan_Stok_Opname'.$nama_dept.'_'.$sekarang;

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
			<td colspan="13" style="text-align:center;border-bottom:none;"><strong>LAPORAN RETUR OBAT KE</strong></td>
		</tr>
		<tr>
			<td colspan="13" style="text-align:center;border-bottom:none;"><strong> <?php echo $nama_dept ?> RS BAHAYANGKARA PALANGKARAYA</strong></td>
		</tr>
	</table>

	<br/>
	<strong>Stok Opname di </strong> <?php echo $nama_dept ?>
	<strong> dari </strong> <?php echo $awal ?>
	<strong> sampai </strong> <?php echo $akhir ?>
	<br/>
	<br/>

	<div class="hasil_kelas">
		<table class="table" id="hasil-evaluasi-dosen">
			<thead>
				<tr class="header">
					<th style="text-align:center;width:300px">Nama Obat</th>
					<th style="text-align:center;width:300px">Tanggal Kadaluarsa</th>
					<th style="text-align:center;width:300px">Tanggal Opname</th>
					<th style="text-align:center;width:300px">Tanggal Acuan</th>
					<th style="text-align:center;width:300px" colspan="2">Stok Sistem</th>
					<th style="text-align:center;width:300px" colspan="2">Stok Fisik</th>
					<th style="text-align:center;width:300px" colspan="2">Selisih</th>
					<th style="text-align:center;width:300px" colspan="2">Harga</th>
					<th style="text-align:center;width:300px" colspan="2">Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if (empty($hasil)) {
					  	echo '<tr class="body"><td colspan="16" style="text-align:center;>tidak ada<td></tr>';
					  	die();
					} 
					$obat_nama = "" ;
					$tgl = "";
					foreach ($hasil as $value) {
						$selisih = (intval($value['stok_obat']) - intval($value['stok_fisik']));
						echo '<tr class="body">'.
									'<td style="text-align:center;width:300px">'.($value['nama'] = $obat_nama ? "-" : $value['nama']).'</td>'.
									'<td style="text-align:center;width:300px">'.($value['tgl_kadaluarsa'] = $tgl ? "-" : $value['tgl_kadaluarsa']).'</td>'.
									'<td style="text-align:center;width:300px">'.$value['tgl_opname'].'</td>'.
									'<td style="text-align:center;width:300px">'.$value['tgl_acuan'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['stok_obat'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['stok_fisik'].'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$selisih.'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.($selisih * $value['harga']).'</td>'.
									'<td style="text-align:center;width:300px" colspan="2">'.$value['keterangan'].'</td>'.
								'</tr>';
						$obat_nama = $value['nama'];
						$tgl = $value['tgl_kadaluarsa'];
					}
				?>	
			</tbody>
		</table>
	</div>
</body>
</html>