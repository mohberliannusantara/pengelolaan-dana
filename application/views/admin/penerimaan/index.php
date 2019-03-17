<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <div class="row">
              <div class="col-md-9">
            <h4 class="card-title">Daftar Penerimaan Sekolah</h4>
            <p class="card-category">menampilkan informasi tentang daftar rancangan penerimaan sekolah K1</p>
          </div>
          <div class="col-md-3">
              <a href="<?php echo base_url('admin/penerimaan/create/') ?>" rel="tooltip" title="Tambah" class="btn btn-primary">
                <i class="material-icons">add</i>
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
                    <th class="th-sm">Uraian Penerimaan
                    </th>
                    <th class="th-sm">Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($penerimaan as $key => $value): ?>
                    <tr>
                      <td width="5%"><?php echo $key+1 ?></td>
                      <td width="60%"><?php echo $value->uraian ?></td>
                      <td width="35%">
                        <center>
                          <a href="<?php echo base_url('admin/penerimaan/edit/') . $value->id_jenis_penerimaan ?>" rel="tooltip" title="Lihat" class="btn btn-sm btn-primary">
                            <i class="material-icons">forward</i>
                          </a>
                          <a href="<?php echo base_url('admin/penerimaan/delete/') . $value->id_jenis_penerimaan ?>" rel="tooltip" title="Lihat" class="btn btn-sm btn-primary">
                            <i class="material-icons">forward</i>
                          </a>
                        </center>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot class="text-primary">
                  <tr>
                    <th>No
                    </th>
                    <th>Uraian Penerimaan
                    </th>
                    <th>Aksi
                    </th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    .</div>
  </div>

  <!-- modal view -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Informasi Sekolah</h5>
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
      url:"<?php echo base_url('admin/sekolah/get/'); ?>"+id,
      method: 'post',
      data:null
    }).done(function(data) {
      $('#modal-content').html(data);
      $('#exampleModalCenter').modal('show');
    });
  }
  </script>
