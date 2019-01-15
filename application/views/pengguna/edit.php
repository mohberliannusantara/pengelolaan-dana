<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title ">Ubah Data Sekolah</h4>
            <p class="card-category">mengubah informasi data tentang sekolah</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('setting/editSekolah/'.$this->uri->segment(2)) ?>" method="post" enctype="multipart/form-data">

              <?php
              $id_jenis_sekolah=0;
              $id_status_sekolah=0;
              if ($sekolah->nama_jenis_sekolah == 'SD') {
                $id_jenis_sekolah=1;
              }else{
                $id_jenis_sekolah=2;
              }

              if($sekolah->nama_status_sekolah == "Negeri"){
                $id_status_sekolah=1;
              }else{
                $id_status_sekolah=2;
              }
              ?>

              <div class="form-group">
                <label for="npsp">NPSN</label>
                <input type="text" class="form-control" name="npsn" value="<?php echo $sekolah->npsn ?>" required readonly>
                <div class="invalid-feedback">Masukkan nomor npsn.</div>
              </div>

              <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah</label>
                <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $sekolah->nama_sekolah ?>" required>
                <div class="invalid-feedback">Masukkan nama_sekolah.</div>
              </div>

              <div class="form-group">
                <label for="kepala_sekolah">Kepala Sekolah</label>
                <input type="text" class="form-control" name="kepala_sekolah" value="<?php echo $sekolah->kepala_sekolah ?>" required>
                <div class="invalid-feedback">Masukkan kepala_sekolah.</div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="id_jenis_sekolah">Jenjang </label>
                    <select class="form-control" name="id_jenis_sekolah">
                      <option selected hidden value="<?php echo $id_jenis_sekolah ?>"><?php echo $sekolah->nama_jenis_sekolah ?></option>
                      <option value="1">SD</option>
                      <option value="2">SMP</option>
                    </select>
                    <div class="invalid-feedback">Masukkan lokasi atau alamat.</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama_status_sekolah">Status</label>
                    <select class="form-control" name="id_status_sekolah">
                      <option selected hidden value="<?php echo $id_status_sekolah ?>"><?php echo $sekolah->nama_status_sekolah ?></option>
                      <option value="1">Negeri</option>
                      <option value="2">Swasta</option>
                    </select>
                    <div class="invalid-feedback">Masukkan Status Sekolah</div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control number" name="alamat" rows="3" required><?php echo $sekolah->alamat ?></textarea>
                <div class="invalid-feedback">Isi Alamat Sekolah</div>
              </div>

              <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <!-- <input min="1000" class="form-control number" name="harga" value="<?php echo $sekolah->nama_status_sekolah ?>" required > -->

                <select class="form-control" name="kecamatan">
                  <option selected hidden value="<?php echo $sekolah->kecamatan ?>"><?php echo $sekolah->kecamatan ?></option>
                  <option value="Batu">Batu</option>
                  <option value="Bumiaji">Bumiaji</option>
                  <option value="Junrejo">Junrejo</option>
                </select>
                <div class="invalid-feedback">Masukkan Status Sekolah</div>
              </div>

              <div class="form-group">
                <label for="nama_pengguna">Nama Pengguna</label>
                <input type="text" class="form-control" name="nama_pengguna" value="<?php echo $pengguna->nama_pengguna ?>" required>
                <div class="invalid-feedback">Masukkan nama_pengguna.</div>
              </div>

              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $pengguna->username ?>" required>
                <div class="invalid-feedback">Masukkan username</div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $pengguna->email ?>" required>
                <div class="invalid-feedback">Masukkan email</div>
              </div>

              <div class="form-group">
                <input class="btn btn-warning" type="submit" value="Simpan">
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
