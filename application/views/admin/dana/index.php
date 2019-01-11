<div class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-warning">
          <div class="row">
            <div class="col-md-9">
              <h4 class="card-title">Daftar Sekolah</h4>
              <p class="card-category">menampilkan daftar sekolah yang ada</p>
            </div>
            <div class="col-md-3">
              <a href="<?php echo base_url('admin/sekolah/create/') ?>" rel="tooltip" title="Tambah" class="btn btn-primary">
                <i class="material-icons">add</i>
              </a>
              <a href="<?php echo base_url('admin/sekolah/export/') ?>" rel="tooltip" title="Cetak Laporan" class="btn btn-primary">
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
                      <a href="#" onclick="openModal(<?php echo $value->id_sekolah; ?>)" rel="tooltip" title="Kelola" class="btn btn-sm btn-info">
                        <i class="material-icons">zoom_out_map</i>
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
      </div>
    </div>
  </div>
</div>