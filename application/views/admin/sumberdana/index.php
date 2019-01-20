<div class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-warning">
          <div class="row">
            <div class="col-md-9">
              <h4 class="card-title">Sumber Dana</h4>
              <p class="card-category">menampilkan sumber dana sekolah </p>
            </div>
            <div class="col-md-3">
              <a href="<?php echo base_url('admin/sumberdana/create/') ?>" rel="tooltip" title="Tambah" class="btn btn-primary">
                <i class="material-icons">add</i>
              </a>
              <a href="<?php echo base_url('admin/sumberdana/export/') ?>" rel="tooltip" title="Cetak Laporan" class="btn btn-primary">
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
                  <th class="th-sm">Nama Sekolah
                  </th>
                  <th class="th-sm">Saldo Awal
                  </th>
                  <th class="th-sm">Saldo Bank
                  </th>
                  <!-- <th class="th-sm">Bunga Bank
                  </th> -->
                  <th class="th-sm">Saldo Kas Tunai
                  </th>
                  <th class="th-sm">Jumlah
                  </th>
                   <th class="th-sm">Aksi
                  </th>                
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sumberdana as $key => $value): ?>
                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $value->nama_sekolah ?></td>
                    <td><?php echo $value->saldo_awal ?></td>
                    <td><?php echo $value->saldo_bank ?></td>
                    <td><?php echo $value->saldo_kas_tunai ?></td>
                    <td><?php echo $value->jumlah ?></td>
                    <td>
                      <a href="#" onclick="openModal(<?php echo $value->id_sekolah; ?>)" rel="tooltip" title="Lihat" class="btn btn-sm btn-success">
                        <i class="material-icons">zoom_out_map</i>
                      </a>
                      <a href="<?php echo base_url('admin/sumberdana/edit/') . $value->id_sekolah ?>" rel="tooltip" title="Ubah" class="btn btn-sm btn-warning">
                        <i class="material-icons">edit</i>
                      </a>
                      <a href="<?php echo base_url('admin/sumberdana/delete/') . $value->id_sumber_dana ?>" rel="tooltip" title="Delete" class="btn btn-sm btn-danger">
                        <i class="material-icons">delete</i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot class="text-primary">
                <tr>
                  <th>No
                  </th>
                  <th>Nama Sekolah
                  </th>
                  <th>Saldo Awal
                  </th>
                  <th>Saldo Bank
                  </th>
                  <th>Saldo Kas Tunai
                  </th>
                  <th>Jumlah
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
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Informasi Sumber Dana Sekolah</h5>
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
    url:"<?php echo base_url('admin/sumberdana/get/'); ?>"+id,
    method: 'post',
    data:null
  }).done(function(data) {
    $('#modal-content').html(data);
    $('#exampleModalCenter').modal('show');
  });
}
</script>
