<div class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Daftar Sekolah</h4>
          <p class="card-category">menampilkan daftar sekolah yang ada</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead class="text-primary">
                <tr>
                  <th class="th-sm">No
                  </th>
                  <th class="th-sm">NPSP
                  </th>
                  <th class="th-sm">Nama Sekolah
                  </th>
                  <th class="th-sm">Jenis Sekolah
                  </th>
                  <th class="th-sm">Status Sekolah
                  </th>
                  <th class="th-sm">Aksi
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sekolah as $key => $value): ?>
                <tr>
                  <td><?php echo $key+1 ?></td>
                  <td><?php echo $value->npsp ?></td>
                  <td><?php echo $value->nama_sekolah ?></td>
                  <td><?php echo $value->jenis_sekolah ?></td>
                  <td><?php echo $value->status_sekolah ?></td>
                  <td>
                    <a href="#" onclick="openModal(<?php echo $value->id_sekolah; ?>)" rel="tooltip" title="Lihat" class="btn btn-sm btn-success">
                      <i class="material-icons">zoom_out_map</i>
                    </a>
                    <a href="<?php echo base_url('sekolah/edit/') . $value->id_sekolah ?>" rel="tooltip" title="Ubah" class="btn btn-sm btn-warning">
                      <i class="material-icons">edit</i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
              </tbody>
              <tfoot class="text-primary">
                <tr>
                  <th>No
                  </th>
                  <th>NPSP
                  </th>
                  <th>Nama Sekolah
                  </th>
                  <th>Jenis Sekolah
                  </th>
                  <th>Status Sekolah
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
    url:"<?php echo base_url('sekolah/get/'); ?>"+id,
    method: 'post',
    data:null
  }).done(function(data) {
    $('#modal-content').html(data);
    $('#exampleModalCenter').modal('show');
  });
}
</script>
