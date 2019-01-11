<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title ">Ubah Data Pengguna</h4>
            <p class="card-category">mengubah informasi data milik pengguna</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('admin/pengguna/edit/'.$this->uri->segment(2)) ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $pengguna->username ?>" required>
                <div class="invalid-feedback">Masukkan Username.</div>
              </div>

               <div class="form-group">
                <label for="nama_pengguna">Nama Pengguna</label>
                <input type="text" class="form-control" name="nama_pengguna" value="<?php echo $pengguna->nama_pengguna ?>" required autofocus>
                <div class="invalid-feedback">Masukkan nama pengguna.</div>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $pengguna->email ?>" required>
                <div class="invalid-feedback">Masukkan email.</div>
              </div>

                <div class="form-group">
                  <input class="btn btn-warning" type="submit" value="Simpan">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
