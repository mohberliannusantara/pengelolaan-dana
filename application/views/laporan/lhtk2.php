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
	<table class="table">
		<thead>
			<center>
				<h3>RENCANA KEGIATAN DAN ANGGARAN SEKOLAH (RKAS)</h3>
				<h3>TAHUN <?php echo $periode ?></h3>
			</center>
		</thead>
		<tbody>
			<tr>
				<td>Nama Sekolah</td>
				<td>:</td>
				<td><?php echo $this->session->nama_sekolah; ?></td>
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
		</tbody>
	</table>

	<table border="1" width="100%">
		<thead>
			<tr>
				<th>Nomor</th>
				<th>Jenis Kegiatan</th>
				<th>Kegiatan</th>
				<th>Uraian</th>
				<th>Jumlah (Rp)</th>
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

									<!-- <td>
										<table>

										</table>
									</td> -->
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







	<table border="1" width="100%">
		<thead>
			<center>
				<h3>RENCANA KEGIATAN DAN ANGGARAN SEKOLAH (RKAS)</h3>
				<h3>TAHUN <?php echo $periode ?></h3>
			</center>

			<h5>Nama Sekolah			: <?php echo $this->session->nama_sekolah; ?></h5>
			<h5>Desa / Kecamatan	: <?php echo $this->session->kecamatan ?></h5>
			<h5>Kabupaten / Kota	: Kota Batu</h5>
			<h5>Provinsi					: Jawa Timur</h5>
			<h5>Triwulan					: I-IV</h5>
			<h5>Sumber Dana				: BOS REGULER</h5>
			<h5> </h5>
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
					<tr>

					</tr>
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
</body>
</html>
