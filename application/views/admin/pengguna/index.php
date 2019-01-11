<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-warning">
            <div class="row">
              <div class="col-md-10">
                <h4 class="card-title">Daftar Pengguna</h4>
                <p class="card-category">menampilkan daftar pengguna yang ada</p>
              </div>
              <div class="col-md-2">
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
                    <th class="th-sm">Kelapa Sekolah
                    </th>
                    <th class="th-sm">Nama Sekolah
                    </th>
                    <th class="th-sm">Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pengguna as $key => $value): ?>
                    <tr>
                      <td><?php echo $key+1 ?></td>
                      <td><?php echo $value->kepala_sekolah ?></td>
                      <td><?php echo $value->nama_sekolah ?></td>
                      <td>
                        <a href="#" onclick="openModal(<?php echo $value->id_pengguna; ?>)" rel="tooltip" title="Lihat" class="btn btn-sm btn-success">
                          <i class="material-icons">zoom_out_map</i>
                        </a>
                        <a href="<?php echo base_url('admin/pengguna/edit/') . $value->id_pengguna ?>" rel="tooltip" title="Ubah" class="btn btn-sm btn-warning">
                          <i class="material-icons">edit</i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot class="text-primary">
                  <tr>
                    <th class="th-sm">No
                    </th>
                    <th class="th-sm">Kelapa Sekolah
                    </th>
                    <th class="th-sm">Nama Sekolah
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
      <div class="col-md-4">
        <div class="row">
          <div class="card card-profile">
            <div class="card-avatar">
              <a href="#pablo">
                <img class="img" src="<?php echo base_url('assets/img/faces/marc.jpg') ?>" />
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category text-gray">Kepala Sekolah <?php echo $this->session->nama_sekolah ?></h6>
              <h4 class="card-title"><?php echo $this->session->kepala_sekolah ?></h4>
              <p class="card-description">
                "Ing Ngarso Sung Tulodo, Ing Madyo Mangun Karso, Tut Wuri Handayani" - Ki Hajar Dewantara
              </p>
              <a href="#hello" class="btn btn-primary btn-round">Hello</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="card card-profile">
            <div class="card-body">
              <h3>Tambah sekolah</h3>
              <a href="<?php echo base_url('admin/pengguna/create/') ?>" rel="tooltip" title="Tambah" class="btn btn-info">
                <i class="material-icons">add</i> Tambah
              </a>
              <h3> </h3>
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
