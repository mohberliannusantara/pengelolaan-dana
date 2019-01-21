<div class="modal-body">
  <?php if ($kegiatan): ?>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead class="text-primary">
        <tr>
          <th class="th-sm">No
          </th>
          <th class="th-sm">Nama Sekolah
          </th>
          <th class="th-sm">Jumlah
          </th>
          <th class="th-sm">Tanggal
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($kegiatan as $key => $value): ?>
          <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $value->nama_detail_kegiatan ?></td>
            <td>Rp. <?php echo $value->jumlah ?></td>
            <td><?php echo $value->tanggal ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <center>
      <p>Data tidak dapat ditampilakan</p>
    </center>
  <?php endif; ?>
</div>
