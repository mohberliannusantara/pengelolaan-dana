<?php
header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
$nama = $namasekolah->nama_sekolah;
$file_name = "$nama (K3) $bulanAwal - $bulanAkhir $tahun.xls";
header("Content-Disposition: attachment; filename=\"".$file_name."\"");
header("Pragma: no-cache");
header("Expires: 0");
$masuk = 0;
$keluar = 0;
$saldo = 0;
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
					<h3><th colspan="6">Bulan : <?php echo $bulanAwal.' - '.$bulanAkhir.' '.$tahun ?></h3></th>
					</center>
				</tr>
			</thead>
			<font face="Lucida Sans Unicode" size="11">
			<tr>
				<td>Nama Sekolah </td>
				<td>: <?php echo $namasekolah->nama_sekolah; ?></td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td>: <?php echo $namasekolah->alamat; ?></td>
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
			<thead>
				<center> <h4>LAPORAN PEMASUKKAN </h4></center>
				<tr>
					<th>Tanggal</th>
					<th>No. Bukti</th>
					<th>Uraian</th>
					<th>Pemasukkan(Debit)</th>
					<th>Saldo</th>
				</tr>
				<tr>
					<th>1</th>
					<th>2</th>
					<th>3</th>
					<th>4</th>
					<th>5</th>
				</tr>
			</thead>
			
			<tbody>
				<?php foreach ($pemasukkan as $key => $value) { ?>
				<tr>
					<td><?php echo $value->tanggal; ?></td>
					<td><?php echo $namasekolah->npsn."/".($key+1)."/D/".$nama."/".date("M",strtotime($value->tanggal))."/".$tahun?></td>
					<td><?php echo $value->nama_pemasukkan ?></td>
					<?php $jumlah = $value->saldo_awal+$value->saldo_bank+$value->saldo_kas_tunai-($value->saldo_bank*$value->bunga_bank) ?>
					<td><?php echo "Rp. ".$jumlah; $saldo+=$jumlah; $masuk=$saldo; ?></td>
					<td><?php echo "Rp. ".$saldo ?></td>
				</tr>
				
				
				
				<?php }  ?>
				<tr>
					<td colspan="4" align="center">Total Jumlah Pemasukan Bulan <?php echo $bulanAwal.' - '.$bulanAkhir.' '.$tahun ?> </td>
					<th><?php echo "Rp. ".$saldo ?></th>
				</tr>
			</tbody>
		</table>
		<table border="1" width="100%">
			<thead>
				<center> <h4>LAPORAN PENGELUARAN </h4> </center>
				<tr>
					<th>Tanggal</th>
					<th>No. Bukti</th>
					<th>Uraian</th>
					<th>Pengeluaran(Kredit)</th>
					<th>Saldo</th>
				</tr>
				<tr>
					<th>1</th>
					<th>2</th>
					<th>3</th>
					<th>4</th>
					<th>5</th>
				</tr>
			</thead>
			
			<tbody>
				<?php foreach ($pengeluaran as $key => $value) { ?>
				<tr>
					<td><?php echo $value->tanggal; ?></td>
					<td><?php echo $namasekolah->npsn."/".($key+1)."/K/".$nama."/".date("M",strtotime($value->tanggal))."/".$tahun?></td>
					<td><?php echo $value->nama_pengeluaran ?></td>
					<td><?php echo "Rp. ".$value->jumlah; $saldo-= $value->jumlah; $keluar+=$value->jumlah; ?></td>
					<td><?php echo "Rp. ".$saldo ?></td>
				</tr>
				<?php }  ?>
				<tr>
					<td colspan="4" align="center">Jumlah Pemasukkan </td>
					<th><?php echo "Rp. ".$masuk ?></th>
				</tr>
				<tr>
					<td colspan="4" align="center">Jumlah Pengeluaran </td>
					<th><?php echo "Rp. ".$keluar ?></th>
				</tr>
				<tr>
					<td colspan="4" align="center">Sisa Saldo <?php echo $bulanAwal.' - '.$bulanAkhir.' '.$tahun ?> </td>
					<th><?php echo "Rp. ".$saldo ?></th>
				</tr>
			</tbody>
		</table>
</body>
</html>