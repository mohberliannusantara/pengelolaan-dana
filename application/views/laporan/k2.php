<?php
header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
$nama = $this->session->nama_sekolah;
$file_name = "$nama (Formulir BOS-K2) Tahun $periode.xls";
header("Content-Disposition: attachment; filename=$file_name");
header("Pragma: no-cache");
header("Expires: 0");
$jumlahA=0;
$jumlahB=0;
?>
<table border="1" width="100%">
	<thead>
		<center>
			<h3>RENCANA KEGIATAN DAN ANGGARAN SEKOLAH (RKAS)</h3>
			<h3>TAHUN <?php echo $periode ?></h3>
		</center>

		<h5>Nama Sekolah			: <?php echo $nama ?></h5>
		<h5>Desa / Kecamatan	: <?php echo $this->session->kecamatan ?></h5>
		<h5>Kabupaten / Kota	: Kota Batu</h5>
		<h5>Provinsi					: Jawa Timur</h5>
		<h5>Triwulan					: I-IV</h5>
		<h5>Sumber Dana				: BOS REGULER</h5>

		<tr>
			<th>No Urut</th>
			<th>No Kode</th>
			<th>Uraian</th>
			<th>Jumlah (Rp)</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($jenis_kegiatan as $key_jenis_kegiatan => $value_jenis_kegiatan): ?>
			<tr>
				<td><?php echo $key_jenis_kegiatan+1 ?></td>
				<?php foreach ($kegiatan as $key_kegiatan => $value_jenis_kegiatan): ?>
					<td><?php echo $key_kegiatan+1 ?></td>
					<td><?php echo $value->nama_jenis_kegiatan ?></td>

				<?php endforeach; ?>

				<!-- <td><?php echo $key+1 ?></td>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $key+1 ?></td> -->
			</tr>
		<?php endforeach; ?>
	</tbody>
	<tr>
		<th colspan="4">TOTAL</th>
		<th>Rp. <?php echo $jumlahA; ?></th>
	</tr>
</table>
