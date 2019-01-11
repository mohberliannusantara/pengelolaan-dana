<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <div class="row">
              <div class="col-md-9">
                <h4 class="card-title">Daftar Pengguna</h4>
                <p class="card-category">menampilkan daftar pengguna yang ada</p>
              </div>
              <div class="col-md-3">
                <a href="<?php echo base_url('admin/pengguna/create')?>" rel="tooltip" title="Tambah" class="btn btn-primary">
                <i class="material-icons">add</i>
                </a>
                <a href="<?php echo base_url('admin/pengguna/export/') ?>" rel="tooltip" title="Cetak Laporan" class="btn btn-primary">
                  <i class="material-icons">print</i>
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="text-primary">
                  <tr>
                    <th class="th-sm">No
                    </th>
                    <th class="th-sm">Nama Pengguna
                    </th>
                    <th class="th-sm">Username
                    </th>
                    <th class="th-sm">Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pengguna as $key => $value): ?>
                    <tr>
                      <td><?php echo $key+1 ?></td>
                      <td><?php echo $value->nama_pengguna ?></td>
                      <td><?php echo $value->username ?></td>
                      <td>
                        <a href="#" onclick="openModal(<?php echo $value->id_pengguna; ?>)" rel="tooltip" title="Lihat" class="btn btn-sm btn-success">
                          <i class="material-icons">zoom_out_map</i>
                        </a>
                        <a href="<?php echo base_url('admin/pengguna/edit/') . $value->id_pengguna ?>" rel="tooltip" title="Ubah Informasi" class="btn btn-sm btn-warning">
                          <i class="material-icons">edit</i>
                        </a>
                        <a href="<?php echo base_url('admin/pengguna/resetPass/') . $value->username ?>" rel="tooltip" title="Reset Password" class="btn btn-sm btn-danger" onclick="return confirm('Ingin mereset password? Password akan di set sama dengan username akun')">
                          <i class="material-icons">warning</i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot class="text-primary">
                  <tr>
                    <th class="th-sm">No
                    </th>
                    <th class="th-sm">Nama Pengguna
                    </th>
                    <th class="th-sm">Username
                    </th>
                    <th class="th-sm">Aksi
                    </th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Informasi Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-content">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function openModal(id) {
  $.ajax({
    url:"<?php echo base_url('admin/pengguna/get/'); ?>"+id,
    method: 'post',
    data:null
  }).done(function(data) {
    $('#modal-content').html(data);
    $('#exampleModalCenter').modal('show');
  });
}
</script>
