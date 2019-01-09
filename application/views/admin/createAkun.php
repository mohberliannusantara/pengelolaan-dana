<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Tambah Akun Sekolah</h4>
            <p class="card-category">menambahkan akun untuk sekolah</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('HomeAdmin/create/') ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" value="" required autofocus>
                <div class="invalid-feedback">Masukkan Username</div>
              </div>

              <div class="form-group">
                <label for="nama_pengguna">Nama Pengguna</label>
                <input type="text" class="form-control" name="nama_pengguna" value="" required>
                <div class="invalid-feedback">Masukkan nama_pengguna.</div>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="" required>
                <div class="invalid-feedback">Masukkan email</div>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" value="" required>
                <div class="invalid-feedback">Masukkan password</div>
              </div>

              <div class="form-group">
                <label for="id_jenis_sekolah">Asal Sekolah: </label>
                <select class="form-control" name="id_sekolah">
                  <option selected hidden value="">Pilih</option>
                    <?php foreach ($sekolah as $key): ?>
                    <option value="<?php echo $key->id_sekolah ?>"><?php echo $key->nama_sekolah ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Masukkan Asal Sekolah.</div>
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
