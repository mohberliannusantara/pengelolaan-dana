<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Akun Pengguna Sekolah.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>

<tr>

 <th>No</th>

 <th>Nama Sekolah</th>

 <th>Username</th>
  <th>Password</th>
   <th>Email</th>
   
 </tr>

</thead>

<tbody>

<?php foreach ($pengguna as $key => $value): ?>
	

<tr>

 <td><?php echo $key+1 ?></td>
 <td><?php echo $value->nama_sekolah ?></td>
 <td><?php echo $value->username ?></td>
 <td><?php echo $value->username ?></td>
 <td><?php echo $value->email ?></td>

 </tr>
 <?php endforeach ?>

</tbody>

</table>