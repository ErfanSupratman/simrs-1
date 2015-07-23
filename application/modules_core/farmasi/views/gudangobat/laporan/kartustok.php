<?php

$string = preg_replace('/\s+/', '_', $nama);
$sekarang = str_replace('-', "_", date('d-m-Y'));
$title = 'Kartu_Stok_'.$nama_dept.'_'.$string.'_'.$sekarang;

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
			<td colspan="10" style="text-align:center;border-bottom:none;"><strong>KARTU STOK</strong></td>
		</tr>
		<tr>
			<td colspan="10" style="text-align:center;border-bottom:none;"><strong> <?php echo $nama_dept ?> RS BAHAYANGKARA PALANGKARAYA</strong></td>
		</tr>
	</table>

	<br/>
	<strong>Nama Obat : </strong> <?php echo $nama ?>
	<br/>
	<strong>Satuan :</strong> <?php echo $satuan ?>
	<br/>
	<br/>

	<!-- Hasil Evaluasi Kelas -->
	<div class="hasil_kelas">
		<table class="table" id="hasil-evaluasi-dosen">
			<thead>
				<tr class="header">
					<th style="text-align:center;width:300px">Tanggal Kadaluarsa</th>
					<th style="text-align:center;width:300px">Tanggal</th>
					<th style="text-align:center;width:300px" colspan="2">Masuk</th>
					<th style="text-align:center;width:300px" colspan="2">Keluar</th>
					<th style="text-align:center;width:300px" colspan="2">Total</th>
					<th style="text-align:center;width:300px" colspan="2">Keterangan</th>
				</tr>
			</thead>
			<tbody>
		<?php $tot = count($obat); ?>
		<?php for ($i=0; $i < $tot  ; $i++) : 
			$dateTime = DateTime::createFromFormat('Y-m-d',$obat[$i]['tgl_kadaluarsa']);
			$newDateString = $dateTime->format('d F Y');

			$dateTime2 = DateTime::createFromFormat('Y-m-d H:i:s',$obat[$i]['tanggal']);
			$newDateString2 = $dateTime2->format('d/m/Y H:i:s');
		?>
			<tr class="body">
				<td style="text-align:center;width:350px"> <?php echo $newDateString?></td>
			    <td style="text-align:center;width:350px"> <?php echo $newDateString2?></td>
			    <td style="text-align:center;width:300px" colspan="2"> <?php echo $obat[$i]['masuk'] ?></td>
			    <td style="text-align:center;width:300px" colspan="2"> <?php echo $obat[$i]['keluar'] ?></td>
			    <td style="text-align:center;width:300px" colspan="2"> <?php echo $obat[$i]['total_stok'] ?></td>
			    <td style="text-align:center;width:350px" colspan="2"> <?php echo $obat[$i]['keterangan'] ?></td>
			</tr>	
		<?php endfor; ?>		
		</tbody>
		</table>
	</div>
</body>
</html>