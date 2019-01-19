<?php
header("Content-type: application/octet-stream");
$nama=$namasekolah->nama_sekolah;
header("Content-Disposition: attachment; filename=Data BOS-04 $nama Periode $periode.xls");
header("Pragma: no-cache");
header("Expires: 0");
$jumlahA=0;
$jumlahB=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="0" width="100%">
		<thead>
		<center>
		<th colspan="6"><h3>BUKU KAS UMUM</h3></th>
		</center>
		<tr>
		<center>
		<h3><th colspan="6">Bulan : $bulan $tahun</h3></th>
		</center>
		</tr>
		</thead>
		<font face="Lucida Sans Unicode" size="11">
			<tr>
				<td>Nama Sekolah </td>
				<td>: ....</td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td>: ....</td>
			</tr>
			<tr>
				<td>Kota </td>
				<td>: Batu</td>
			</tr>
			<tr>
				<td>Propinsi </td>
				<td>: Jawa Timur</td>
			</tr>
		</font>
	</table>
	<table border="1" width="100%">
		<tr>
			<th>Tanggal</th>
			<th>No. Bukti</th>
			<th>Uraian</th>
			<th>Penerimaan(Debit)</th>
			<th>Pengeluaran(Kredit)</th>
			<th>Saldo</th>
		</tr>
		<tr>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
		</tr>
		<tbody>
			<tr>
				<td>tanggal</td>
				<td>bukti</td>
				<td>uraian</td>
				<td>penerimaan</td>
				<td>pengeluaran</td>
				<td>saldo</td>
			</tr>
		</tbody>
	</table>
	<thead>
		<font face="Lucida Sans Unicode" size="11">
			
		<table border="0" width="100%">
			<tr>
				
			</tr>
			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td colspan="3">Batu, ......................................... (tgl akhir bulan)</td>
			</tr>
			<tr>
				<td></td>
				<td>Mengetahui</td>
				<td></td>
				<td>Dibuat Oleh,</td>
			</tr>
			<tr>
				<td></td>
				<td>Kepala Sekolah</td>
				<td></td>
				<td>Bendahara</td>
			</tr>
		</table>
	</thead>
</body>
</html>