<?php
header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
// $waktu=$bulan."_".$tahun;
$file_name = "$nama (K3)_$periode.xls";
header("Content-Disposition: attachment; filename=\"".$file_name."\"");
header("Pragma: no-cache");
header("Expires: 0");
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
		<h3><th colspan="6">Bulan : <?php echo $periode.' '.$tahun ?></h3></th>
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
				<td><?php echo $this->session->npsn."/".($key+1)."/D/".$nama."/".$bulan."/".$tahun?></td>
				<td><?php echo $value->nama_pemasukkan ?></td>
				<?php $jumlah = $value->saldo_awal+$value->saldo_bank+$value->saldo_kas_tunai-($value->saldo_bank*$value->bunga_bank) ?>
				<td><?php echo "Rp. ".$jumlah; $saldo+=$jumlah ?></td>
				<td><?php echo "Rp. ".$saldo ?></td>
			</tr>
		
		
			
		<?php }  ?>
		<tr>
				<td colspan="4" align="center">Total Jumlah Pemasukan Bulan <?php echo $bulan.' '.$tahun ?> </td>
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
				<td><?php echo $this->session->npsn."/".($key+1)."/K/".$nama."/".$bulan."/".$tahun?></td>
				<td><?php echo $value->nama_pengeluaran ?></td>
				<td><?php echo "Rp. ".$value->jumlah; $saldo-= $value->jumlah; ?></td>
				<td><?php echo "Rp. ".$saldo ?></td>
			</tr>
		<?php }  ?>
		<tr>
				<td colspan="4" align="center">Total Jumlah Pengeluaran Bulan <?php echo $bulan.' '.$tahun ?> </td>
				<th><?php echo "Rp. ".$saldo ?></th>
			</tr>
		</tbody>
	</table>
	<!-- thead> -->
		<font face="Lucida Sans Unicode" size="11">
		<table border="0" width="100%">
			<tr>Pada hari ini <?php echo $hari ?> Tanggal <?php echo $akhir; ?> Buku Kas Umum ditutup </tr>
			<tr>dengan keadaan/posisi buku sebagai berikut :</tr>
			<tr>Saldo Buku Kas Umum</tr>
			<tr>Terdiri dari :</tr>
		</table>
		</font>
	<!-- </thead> -->
		<table border="0" width="100%">
			<tr>
				<td>Saldo Bank</td>
				<td>Rp. </td>
				<td>...</td>
			</tr>
			<tr>
				<td>Bunga Bank</td>
				<td>Rp. </td>
				<td>...</td>
			</tr>
			<tr>
				<td>Saldo Kas Tunai</td>
				<td>Rp. </td>
				<td>...</td>
			</tr>
				<tr>
				<td>Jumlah</td>
				<td>Rp. </td>
				<td>...</td>
			</tr>
			<tr>
				
			</tr>
			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td colspan="3">Batu, <?php echo $akhir; ?></td>
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
</body>
</html>