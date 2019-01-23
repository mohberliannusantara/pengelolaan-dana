<div class="modal-body">
  <?php if ($detail_kegiatan): ?>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead class="text-primary">
        <tr>
          <th class="th-sm">No
          </th>
          <th class="th-sm">Nama Sekolah
          </th>
          <th class="th-sm">Tangal
          </th>
          <th class="th-sm">Jumlah
          </th>
          <th class="th-sm">Aksi
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($detail_kegiatan as $key => $value): ?>
          <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $value->nama_detail_kegiatan ?></td>
            <td><?php echo date("d-m-Y", strtotime($value->tanggal)); ?></td>
            <td class="text-warning">Rp. <?php echo $value->jumlah ?></td>
            <td>
              <a href="<?php echo base_url('detail_kegiatan/edit/') . $value->id_detail_kegiatan; ?>" rel="tooltip" title="Ubah" class="btn btn-sm btn-warning">
                <i class="material-icons">edit</i>
              </a>
              <a href="<?php echo base_url('detail_kegiatan/delete/') . $value->id_detail_kegiatan; ?>" rel="tooltip" title="Hapus" class="btn btn-sm btn-danger">
                <i class="material-icons">delete</i>
              </a>
            </td>
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
