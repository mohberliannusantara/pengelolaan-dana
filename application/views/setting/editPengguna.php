<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Tambah Akun Sekolah</h4>
            <p class="card-category">menambahkan akun untuk sekolah</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('setting/editPengguna/') ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $sekolah->username ?>" required autofocus>
                <div class="invalid-feedback">Masukkan Username</div>
              </div>

              <div class="form-group">
                <label for="nama_pengguna">Nama Pengguna</label>
                <input type="text" class="form-control" name="nama_pengguna" value="<?php echo $sekolah->nama_pengguna ?>" required>
                <div class="invalid-feedback">Masukkan nama_pengguna.</div>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $sekolah->email ?>" required>
                <div class="invalid-feedback">Masukkan email</div>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $sekolah->username ?>" required>
                <div class="invalid-feedback">Masukkan password</div>
              </div>
                <div class="form-group">
                  <input class="btn btn-info" type="submit" value="Simpan">
                </div>
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
