<!-- <div class="content">
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
              <a href="<?php echo base_url('sekolah/create/') ?>" rel="tooltip" title="Tambah" class="btn btn-primary">
                <i class="material-icons">add</i>
              </a>
              <a href="<?php echo base_url('Cetak/printPdf/').$this->uri->segment(1) ?>" rel="tooltip" title="Cetak Laporan" class="btn btn-primary">
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
</script> -->

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">content_copy</i>
            </div>
            <p class="card-category">Used Space</p>
            <h3 class="card-title">49/50
              <small>GB</small>
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-danger">warning</i>
              <a href="#pablo">Get More Space...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">store</i>
            </div>
            <p class="card-category">Revenue</p>
            <h3 class="card-title">$34,245</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">date_range</i> Last 24 Hours
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-danger card-header-icon">
            <div class="card-icon">
              <i class="material-icons">info_outline</i>
            </div>
            <p class="card-category">Fixed Issues</p>
            <h3 class="card-title">75</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">local_offer</i> Tracked from Github
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <i class="fa fa-twitter"></i>
            </div>
            <p class="card-category">Followers</p>
            <h3 class="card-title">+245</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">update</i> Just Updated
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-success">
            <div class="ct-chart" id="dailySalesChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Daily Sales</h4>
            <p class="card-category">
              <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> updated 4 minutes ago
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-warning">
            <div class="ct-chart" id="websiteViewsChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Email Subscriptions</h4>
            <p class="card-category">Last Campaign Performance</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> campaign sent 2 days ago
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-danger">
            <div class="ct-chart" id="completedTasksChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Completed Tasks</h4>
            <p class="card-category">Last Campaign Performance</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> campaign sent 2 days ago
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
