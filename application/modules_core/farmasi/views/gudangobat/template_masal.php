<?php
$title = 'Template Impor Masal Obat';

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
	<table class="table" id="hasil-evaluasi-dosen" border="1">
		<thead>
			<tr class="header">
				<th style="text-align:center;width:300px">Nama Obat</th>
				<th style="text-align:center;width:300px">Satuan Obat</th>
				<th style="text-align:center;width:300px">Jenis Obat</th>
				<th style="text-align:center;width:300px">Merek Obat</th>
				<th style="text-align:center;width:300px">Stok Min</th>				
				<th style="text-align:center;width:300px">Penyedia</th>
				<th style="text-align:center;width:300px">Harga Dasar</th>
				<th style="text-align:center;width:300px">HPS</th>
				<th style="text-align:center;width:300px">Margin</th>
				<th style="text-align:center;width:300px">Generik</th>
				<th style="text-align:center;width:300px">Hide</th>
			</tr>
		</thead>
		<tbody>
		<tr class="body">
		    <td style="text-align:center;width:300px"></td>
		    <td style="text-align:center;width:300px"></td>
		    <td style="text-align:center;width:300px"></td>
		    <td style="text-align:center;width:300px"></td>
		    <td style="text-align:center;width:300px"></td>
		    <td style="text-align:center;width:300px"></td>
		    <td style="text-align:center;width:300px"></td>
		    <td style="text-align:center;width:300px"></td>
		    <td style="text-align:center;width:300px"></td>
		    <td style="text-align:center;width:300px"></td>
		    <td style="text-align:center;width:300px"></td>
		</tr>	
		</tbody>
	</table>
</body>
</html>
