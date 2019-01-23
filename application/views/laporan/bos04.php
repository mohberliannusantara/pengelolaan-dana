<?php
header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
$nama=$this->session->nama_sekolah;
$file_name = "$nama (BOS-04) $periode $tahun.xls";
header("Content-Disposition: attachment; filename=\"".$file_name."\"");
header("Pragma: no-cache");
header("Expires: 0");
$jumlahA=0;
$jumlahB=0;
?>
<table border="1" width="100%">
	<thead>
		<center>
		<h3>LAPORAN PENGGUNAAN DANA BOS PERIODE <?php echo "$periode"; ?></h3>
		</center>
		<h4>A. Laporan Pengeluaran</h4>
		
		<tr>
			<th>No</th>
			<th colspan="2">Jenis Pengeluaran</th>
			<th>Tanggal/Bulan</th>
			<th>Jumlah (Rp)</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($triwulan as $key => $value):
		if ($value->id_jenis_pengeluaran == 2) { ?>
		<tr>
			<td><center><?php echo $key+1 ?></center></td>
			<td colspan="2"><?php echo $value->nama_pengeluaran ?></td>
			<td><?php echo $value->tanggal ?></td>
			<td><?php echo $value->jumlah; $jumlahA=$jumlahA+$value->jumlah; ?></td>
		</tr>
		<?php }
		endforeach; ?>
	</tbody>
	<tr>
		<th colspan="4">TOTAL</th>
		<th>Rp. <?php echo $jumlahA; ?></th>
	</tr>
</table>
<table border="1" width="100%">
	<thead>
		<h4>B. Laporan Pembelian Barang / Jasa</h4>
	</thead>
	<tbody>
		<tr>
			<th>No</th>
			<th>Barang/Jasa Yang Dibeli</th>
			<th>Tanggal/Bulan</th>
			<th>Nama Toko/Penyedia Jasa</th>
			<th>Jumlah (Rp)</th>
		</tr>
		<?php foreach ($triwulan as $key => $value):
		if ($value->id_jenis_pengeluaran == 1) { ?>
		<tr>
			<td><center><?php echo $key+1 ?></center></td>
			<td><?php echo $value->nama_pengeluaran ?></td>
			<td><?php echo $value->tanggal ?></td>
			<td><?php echo $value->nama_toko ?></td>
			<td><?php echo $value->jumlah; $jumlahB=$jumlahB+$value->jumlah; ?></td>
		</tr>
		<?php }
		endforeach; ?>
	</tbody>
	<tr>
		<th colspan="4">TOTAL</th>
		<th>Rp. <?php echo $jumlahB; ?></th>
	</tr>
</table>