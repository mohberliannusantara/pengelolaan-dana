<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Detail Profil</h4>
            <p class="card-category">menampilkan informasi detail tentang pengguna</p>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama Sekolah</label>
                    <input type="text" class="form-control" value="<?php echo $this->session->nama_sekolah ?>" disabled>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tingkat</label>
                    <input type="text" class="form-control" value="<?php echo $this->session->nama_jenis_sekolah ?>" disabled>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Status</label>
                    <input type="email" class="form-control" value="<?php echo $this->session->nama_status_sekolah ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email</label>
                    <input type="text" class="form-control" value="<?php echo $this->session->email ?>" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">NPSN</label>
                    <input type="text" class="form-control" value="<?php echo $this->session->npsn ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Kepala Sekolah</label>
                    <input type="text" class="form-control" value="<?php echo $this->session->kepala_sekolah ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Alamat</label>
                    <input type="text" class="form-control" value="<?php echo $this->session->alamat ?>" disabled>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Kecamatan</label>
                    <input type="text" class="form-control" value="<?php echo $this->session->kecamatan ?>" disabled>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Kota</label>
                    <input type="text" class="form-control" value="Batu" disabled>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="img" src="<?php echo base_url('assets/img/faces/marc.jpg') ?>" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">admin / <?php echo $this->session->nama_sekolah ?></h6>
            <h4 class="card-title"><?php echo $this->session->nama_pengguna ?></h4>
            <p class="card-description">
              "Ing Ngarso Sung Tulodo, Ing Madyo Mangun Karso, Tut Wuri Handayani" - Ki Hajar Dewantara
            </p>
            <a href="#hello" class="btn btn-primary btn-round">Hello</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>