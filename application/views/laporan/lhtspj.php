<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>K7</title>
</head>
<body>
	<table border="0" width="100%" align="left">
		<thead>
			<tr colspan="4">
				<center><h3>PERNYATAAN TANGGUNG JAWAB</h3></center>
			</tr>
		</thead>
		
		<font face="Lucida Sans Unicode" size="11">
			<tr>
				<td colspan="4">Yang Bertanda Tangan dibawah ini :</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="2">Nama</td>
				<td colspan="2">: <?php echo $kepala_sekolah ?></td>

			</tr>
			<tr>
				<td colspan="2">Jabatan</td>
				<td colspan="2">: Kepala <?php echo $nama; ?></td>
				
			</tr>
			<tr>
				<td colspan="2">Alamat</td>
				<td colspan="2">: <?php echo $alamat ?></td>
			
			</tr>
			<tr></tr>
			<tr>
				<td colspan="4">Dengan ini menyatakan bahwa : </td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="4">1. Belanja Bantuan Operasional Sekolah (BOS) telah digunakan dalam rangka mendukung operasional sekolah dan tidak untuk keperluan pribadi. </td>
			</tr>
			<tr>
				<td colspan="4">2. Penggunaan Belanja Bantuan Operasional (BOS) adalah sebagai berikut : </td>
			</tr>
			<tr></tr>
		</font>
	</table>

	<table border="1" width="100%">
		<tr>
			<td>No</td>
			<td>Waktu</td>
			<td>Penerimaan (Rp) </td>
			<td>Penggunaan (Rp) </td>
		</tr>

		<tr>
			<td>1</td>
			<td>triwulan I</td>
			<td> <?php echo $msktriwulan1 ?> </td>
			<td> <?php echo $klrtriwulan1 ?> </td>
		</tr>

		<tr>
			<td>2</td>
			<td>triwulan II</td>
			<td> <?php echo $msktriwulan2 ?> </td>
			<td> <?php echo $klrtriwulan2 ?> </td>
		</tr>

		<tr>
			<td>3</td>
			<td>triwulan I</td>
			<td> <?php echo $msktriwulan3 ?> </td>
			<td> <?php echo $klrtriwulan3 ?> </td>
		</tr>

		<tr>
			<td>4</td>
			<td>triwulan IV</td>
			<td> <?php echo $msktriwulan4 ?> </td>
			<td> <?php echo $klrtriwulan4 ?> </td>
		</tr>

		<tr>
			<td colspan="2">Jumlah</td>
			<td><?php echo $sumMasuk; ?></td>
			<td><?php echo $sumKeluar; ?></td>
		</tr>
	</table>
	
	<table border="0" width="100%">
		<tr></tr>
		<tr>
			<td colspan="4">3. Apabila kemudian hari pernyataan ini tidak sesuai dengan yang sebenarnya, saya bersedia dikenakan sanksi administrasi dan/ atau dituntut ganti tugi dan/ atau tuntutan lainnya sesuai dengan ketentuan peraturan perundang-undangan yang berlaku. </td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="4">Dengan surat pernyataan ini dibuat dengan sebenarnya dan bermaterai cukup untuk dipergunakan sebagaimana mestinya. </td>
		</tr>
	</table>
</body>
</html>