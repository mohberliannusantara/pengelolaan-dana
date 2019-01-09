<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Data Sekolah.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>

<tr>

 <th>No</th>
<th>NPSN</th>
 <th>Nama Sekolah</th>

 <th>Jenjang Pendidikan</th>
  <th>Status Sekolah</th>
   <th>Alamat</th>
   
 </tr>

</thead>

<tbody>

<?php foreach ($sekolah as $key => $value): ?>
	

<tr>

 <td><?php echo $key+1 ?></td>
 <td><?php echo $value->npsn ?></td>
 <td><?php echo $value->nama_sekolah ?></td>
 <td><?php echo $value->nama_jenis_sekolah ?></td>
  <td><?php echo $value->nama_status_sekolah ?></td>
	<td><?php echo $value->alamat; ?> , <?php echo $value->kecamatan; ?></td>

 </tr>
 <?php endforeach ?>

</tbody>

</table>