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
<table width="100%">
	<thead>
		<center>
			<h3>RENCANA KEGIATAN DAN ANGGARAN SEKOLAH (RKAS)</h3>
			<h3>TAHUN <?php echo $periode ?></h3>
			<h3> </h3>
		</center>
	</thead>
	<tbody>
		<tr>
			<td>Nama Sekolah</td>
			<td>:</td>
			<td><?php echo $nama ?></td>
		</tr>
		<tr>
			<td>Desa / Kecamatan</td>
			<td>:</td>
			<td><?php echo $this->session->kecamatan ?></td>
		</tr>
		<tr>
			<td>Kabupaten / Kota</td>
			<td>:</td>
			<td>Kota Batu</td>
		</tr>
		<tr>
			<td>Provinsi</td>
			<td>:</td>
			<td>Jawa Timur</td>
		</tr>
		<tr>
			<td>Triwulan</td>
			<td>:</td>
			<td>I-IV</td>
		</tr>
		<tr>
			<td>Sumber Dana</td>
			<td>:</td>
			<td>BOS REGULER</td>
		</tr>
		<tr>
			<td> </td>
			<td> </td>
			<td> </td>
		</tr>
	</tbody>
</table>

<table border="1" width="100%">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Jenis Kegiatan</th>
			<th>
				<table border="1" width="100%">
					<tr>
						<th>Kegiatan</th>
						<th>Uraian</th>
						<th>Jumlah (Rp)</th>
					</tr>
				</table>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($jenis_kegiatan as $key_jenis_kegiatan => $value_jenis_kegiatan): ?>
			<tr>
				<td><?php echo $key_jenis_kegiatan+1 ?></td>
				<td><?php echo $value_jenis_kegiatan->nama_jenis_kegiatan ?></td>
				<td>
					<table border="1" width="100%">
						<?php foreach ($kegiatan as $key_kegiatan => $value_kegiatan): ?>
							<tr>
								<td><?php echo $value_kegiatan->nama_kegiatan ?></td>
								<td><?php echo $value_kegiatan->nama_kegiatan ?></td>
								<td><?php echo $value_kegiatan->nama_kegiatan ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</td>
				<!-- </td>
				<td></td>
				<td></td> -->
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
