<div class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <div class="row">
            <div class="col-md-12">
              <h4 class="card-title">Pengelolaan Dana</h4>
              <p class="card-category">menampilkan daftar sekolah dimana admin dapat melihat peng dana di setiap sekolah</p>
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
                  <th class="th-sm">Kecamatan
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
                    <td><?php echo $value->kecamatan ?></td>
                    <td>
                      <a href="<?php echo base_url('admin/dana/manage/') . $value->id_sekolah ?>" rel="tooltip" title="Lihat" class="btn btn-sm btn-primary">
                        <i class="material-icons">forward</i>
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
                  <th>Kecamatan
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
