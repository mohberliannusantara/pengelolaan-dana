<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Data Sekolah.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>
<tr>
	<th colspan="6">DAFTAR SEKOLAH TERDAFTAR</th>
</tr>
<tr>
	<th colspan="6">DINAS PENDIDIKAN KOTA BATU</th>
</tr>
<tr>

 <th>No</th>
<th>NPSN</th>
 <th>Nama Sekolah</th>
<th>Kepala Sekolah</th>
 <th>Jenjang Pendidikan</th>
  <th>Status Sekolah</th>
   <th>Alamat</th>
   
 </tr>

</thead>

<tbody>

<?php foreach ($sekolah as $key => $value): ?>
	

<tr>

 <td><center><?php echo $key+1 ?></center></td>
 <td><center><?php echo $value->npsn ?></center></td>
 <td><?php echo $value->nama_sekolah ?></td>
 <td><?php echo $value->kepala_sekolah ?></td>
 <td><center><?php echo $value->nama_jenis_sekolah ?></center></td>
  <td><center><?php echo $value->nama_status_sekolah ?></center></td>
	<td><?php echo $value->alamat; ?> , <?php echo $value->kecamatan; ?></td>

 </tr>
 <?php endforeach ?>

</tbody>

</table>