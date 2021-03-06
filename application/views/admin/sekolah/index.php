<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="row">
          <div class="card card-pricing card-raised">
          <div class="card-body">
            <h6 class="card-category">Tambah Data</h6>
            <a href="<?php echo base_url('admin/sekolah/create') ?>">
              <div class="card-icon icon-rose">
                <i class="material-icons">add</i>
              </div>
            </a>
            <h3 class="card-title">Sekolah</h3>
            <p class="card-description">
              Tambahkan data sekolah kedalam daftar
            </p>
            <a href="<?php echo base_url('admin/sekolah/create') ?>" class="btn btn-rose btn-round">Tambah</a>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="card card-pricing card-raised">
          <div class="card-body">
            <h6 class="card-category">Cetak Data</h6>
            <a href="<?php echo base_url('admin/sekolah/export') ?>">
              <div class="card-icon icon-success">
                <i class="material-icons">print</i>
              </div>
            </a>
            <h3 class="card-title">Cetak</h3>
            <p class="card-description">
              mencetak / mengunduh data sekolah
            </p>
            <a href="<?php echo base_url('admin/sekolah/export') ?>" class="btn btn-success btn-round">Cetak</a>
          </div>
        </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">school</i>
            </div>
            <h4 class="card-title">Daftar Jenis Sekolah</h4>
          </div>
          <div class="card-body">
            <div class="material-datatables">
              <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="text-primary">
                  <tr>
                    <th class="th-sm">No
                    </th>
                    <th class="th-sm">NPSN
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
                      <td><?php echo $value->npsn ?></td>
                      <td><?php echo $value->nama_sekolah ?></td>
                      <td><?php echo $value->nama_jenis_sekolah ?></td>
                      <td><?php echo $value->nama_status_sekolah ?></td>
                      <td>
                        <a href="#" onclick="openModal(<?php echo $value->id_sekolah; ?>)" rel="tooltip" title="Lihat" class="btn btn-sm btn-success">
                          <i class="material-icons">zoom_out_map</i>
                        </a>
                        <a href="<?php echo base_url('admin/sekolah/edit/') . $value->id_sekolah ?>" rel="tooltip" title="Ubah" class="btn btn-sm btn-warning">
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
                    <th>NPSN
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
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Hapus</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="hidden" id="id_barang" value="">
          <p>Apakah Anda yakin untuk menghapus barang ini..?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button id="deleteButton" onclick="deleteBarang()" type="submit" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Extracomptable</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <div class="modal-body" id="modal-content">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-round" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function openModal(id) {
  $.ajax({
    url:"<?php echo base_url('admin/barang/get/'); ?>"+id,
    method: 'post',
    data:null
  }).done(function(data) {
    $('#modal-content').html(data);
    $('#exampleModalCenter').modal('show');
  });
}

function deleteModal(id) {
  $('#id_barang').val(id);
}

function deleteBarang(){
  var id = $('#id_barang').val();
  $.ajax({
    url:"<?php echo base_url('admin/barang/delete/'); ?>"+id,
    method: 'post',
    data:null
  }).done(function(data) {
    location.reload();
  });
}

</script>
