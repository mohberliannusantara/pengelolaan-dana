<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Setting Data Sekolah</h4>
            <p class="card-category">mengubah informasi data sekolah</p>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <a href="<?php echo base_url('setting/editSekolah/') . $this->session->id_sekolah ?>">Ubah Data Sekolah</a>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Setting Akun</h4>
            <p class="card-category">mengubah akun</p>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <a href="<?php echo base_url('setting/editPengguna/') . $this->session->id_pengguna?>">Ubah Data Pengguna</a>
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