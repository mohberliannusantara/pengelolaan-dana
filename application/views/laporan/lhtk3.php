<?php
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
				<td>: <?php echo $this->session->nama_sekolah; ?></td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td>: <?php echo $this->session->alamat; ?></td>
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
				<center> <h4>LAPORAN </h4> </center>
				<tr>
					<th>Tanggal</th>
					<th>No. Bukti</th>
					<th>Uraian</th>
					<th>Pemasukkan(Debit)</th>
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
			</thead>
			
			<tbody>
				<?php foreach ($pengeluaran as $key => $value) { ?>
				<tr>
					<td><?php echo $value->tanggal; ?></td>
					<td><?php echo $this->session->npsn."/".($key+1)."/K/".$nama."/".date("M",strtotime($value->tanggal))."/".$tahun?></td>
				<?php if ($value->status == 'keluar') { ?>
					<td><?php echo $value->nama_kegiatan ?></td>
					<td>0</td>
					<td><?php echo "Rp. ".$value->jumlah; $saldo-= $value->jumlah; $keluar+=$value->jumlah; ?></td>
				<?php }else{ ?>

				<?php } ?>
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