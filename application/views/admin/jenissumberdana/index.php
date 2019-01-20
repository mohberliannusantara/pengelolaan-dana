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
              <a href="<?php echo base_url('admin/jenissumberdana/create/') ?>" rel="tooltip" title="Tambah" class="btn btn-primary">
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
                  <th class="th-sm">Nama Jenis Sumber Dana
                  </th>
                   <th class="th-sm">Aksi
                  </th>                
                </tr>
              </thead>
              <tbody>
                <?php foreach ($jenissumberdana as $key => $value): ?>
                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $value->nama_jenis_sumber_dana ?></td>
                    <td>
                      <a href="<?php echo base_url('admin/jenissumberdana/edit/') . $value->id_jenis_sumber_dana ?>" rel="tooltip" title="Ubah" class="btn btn-sm btn-warning">
                        <i class="material-icons">edit</i>
                      </a>
                      <a href="<?php echo base_url('admin/jenissumberdana/delete/') . $value->id_jenis_sumber_dana ?>" rel="tooltip" title="Delete" class="btn btn-sm btn-danger">
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
                  <th>Nama Jenis Sumber Dana
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