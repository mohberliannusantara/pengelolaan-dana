<div class="content">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-product">
            <div class="card-header card-header-image" data-header-animation="true">
              <a href="#pablo">
                <img class="img" src="../assets/img/laporan.jpg">
              </a>
            </div>
            <div class="card-body">
              <div class="card-actions text-center">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Kelola">
                  <a href="<?php echo base_url('barang') ?>">
                    <i class="material-icons">art_track</i>
                  </a>
                </button>
              </div>
              <h4 class="card-title">
                <a href="#pablo">Laporan Dana</a>
              </h4>
              <div class="card-description">
                Pengelolaan data informasi tentang Laporan Dana Bos
              </div>
            </div>
            <div class="card-footer">
              <div class="price">
                <!-- <h4>$899/night</h4> -->
              </div>
              <div class="stats">
                <p class="card-category">
                  <a href="<?php echo base_url('barang') ?>">Lihat Detail</a>
                  <i class="material-icons">keyboard_arrow_right</i>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-product">
            <div class="card-header card-header-image" data-header-animation="true">
              <a href="#pablo">
                <img class="img" src="../assets/img/sekolah.jpg">
              </a>
            </div>
            <div class="card-body">
              <div class="card-actions text-center">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Kelola">
                  <a href="<?php echo base_url('kendaraan') ?>">
                    <i class="material-icons">art_track</i>
                  </a>
                </button>
              </div>
              <h4 class="card-title">
                <a href="#pablo">Sekolah</a>
              </h4>
              <div class="card-description">
                Pengelolaan data informasi tentang daftar sekolah
              </div>
            </div>
            <div class="card-footer">
              <div class="price">
                <!-- <h4>$899/night</h4> -->
              </div>
              <div class="stats">
                <p class="card-category">
                  <a href="<?php echo base_url('kendaraan') ?>">Lihat Detail</a>
                  <i class="material-icons">keyboard_arrow_right</i>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-product">
            <div class="card-header card-header-image" data-header-animation="true">
              <a href="#pablo">
                <img class="img" src="../assets/img/pengguna.jpg">
              </a>
            </div>
            <div class="card-body">
              <div class="card-actions text-center">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Kelola">
                  <a href="<?php echo base_url('properti') ?>">
                    <i class="material-icons">art_track</i>
                  </a>
                </button>
              </div>
              <h4 class="card-title">
                <a href="#pablo">Properti</a>
              </h4>
              <div class="card-description">
                Pengelolaan data informasi tentang akses pengguna
              </div>
            </div>
            <div class="card-footer">
              <div class="price">
                <!-- <h4>$899/night</h4> -->
              </div>
              <div class="stats">
                <p class="card-category">
                  <a href="<?php echo base_url('properti') ?>">Lihat Detail</a>
                  <i class="material-icons">keyboard_arrow_right</i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">school</i>
              </div>
              <p class="card-category">SD NEGERI</p>
              <h3 class="card-title"><?php echo $sdnegeri ?></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">zoom_out_map</i>
                <a href="<?php echo base_url('barang') ?>" class="text-secondary">Lihat Detail..</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">school</i>
              </div>
              <p class="card-category">SD SWASTA</p>
              <h3 class="card-title"><?php echo $sdswasta ?></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">zoom_out_map</i>
                <a href="<?php echo base_url('kendaraan') ?>" class="text-secondary">Lihat Detail..</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">school</i>
              </div>
              <p class="card-category">SMP NEGERI</p>
              <h3 class="card-title"><?php echo $smpnegeri ?></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">zoom_out_map</i>
                <a href="<?php echo base_url('properti') ?>" class="text-secondary">Lihat Detail..</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">school</i>
              </div>
              <p class="card-category">SMP SWASTA</p>
              <h3 class="card-title"><?php echo $smpswasta ?></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">zoom_out_map</i>
                <a href="<?php echo base_url('properti') ?>" class="text-secondary">Lihat Detail..</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="card ">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons"></i>
              </div>
              <h4 class="card-title">Data Sekolah</h4>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12">
                  <div class="table-responsive table-sales">
                    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead class="text-primary">
                        <tr>
                          <th class="th-sm">#
                          </th>
                          <th class="th-sm">NPSN
                          </th>
                          <th class="th-sm">Nama Sekolah
                          </th>
                          <th class="th-sm">Jenis Sekolah
                          </th>
                          <th class="th-sm">Status Sekolah
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
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                      <tfoot class="text-primary">
                        <tr>
                          <th>#
                          </th>
                          <th>NPSN
                          </th>
                          <th>Nama Sekolah
                          </th>
                          <th>Jenis Sekolah
                          </th>
                          <th>Status Sekolah
                          </th>
                        </tr>
                      </tfoot>
                    </table>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#<?php echo $this->session->username; ?>">
              <?php if ($this->session->gambar): ?>
                <img class="img" src="<?php echo base_url('assets/uploads/' . $this->session->gambar) ?>" />
                <?php ; else : ?>
                  <img class="img" src="<?php echo base_url(); ?>assets/img/faces/marc.jpg" />
                <?php endif; ?>
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category text-gray"><?php echo $this->session->level; ?> / <?php echo $this->session->rayon; ?></h6>
              <h4 class="card-title"><?php echo $this->session->username; ?></h4>
              <p class="card-description">
                Life would not be better because a chance, life will always be better because of the courage to take action at every chance.
              </p>
              <a href="<?php echo base_url('pengguna')?>" class="btn btn-warning btn-round">Lihat</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
