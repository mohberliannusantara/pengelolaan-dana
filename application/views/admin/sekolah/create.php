<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Tambah Data Sekolah</h4>
            <p class="card-category">menambahkan informasi data tentang sekolah</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('admin/sekolah/create/') ?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group bmd-form-group">
                    <label for="nama_sekolah" class="bmd-label-floating">Nama Sekolah</label>
                    <input type="text" class="form-control" name="nama_sekolah" value="" required autofocus>
                    <div class="invalid-feedback">Masukkan nama_sekolah.</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group bmd-form-group">
                    <label for="npsp" class="bmd-label-floating">NPSN</label>
                    <input type="number" class="form-control" name="npsn" value="" required>
                    <div class="invalid-feedback">Masukkan nomor npsn.</div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <select class="custom-select" name="id_jenis_sekolah" required>
                      <option disabled selected hidden>Pilih Jenjang Sekolah</option>
                      <option value="1">SD</option>
                      <option value="2">SMP</option>
                    </select>
                    <div class="invalid-feedback">Masukkan lokasi atau alamat.</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <select class="custom-select" name="id_status_sekolah">
                      <option disabled selected hidden>Pilih Status Sekolah</option>
                      <option value="1">Negeri</option>
                      <option value="2">Swasta</option>
                    </select>
                    <div class="invalid-feedback">Masukkan Status Sekolah</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <select class="custom-select" name="kecamatan">
                      <option disabled selected hidden>Pilih Kecamatan</option>
                      <option value="Batu">Batu</option>
                      <option value="Bumiaji">Bumiaji</option>
                      <option value="Junrejo">Junrejo</option>
                    </select>
                    <div class="invalid-feedback">Masukkan Status Sekolah</div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-9">
                  <div class="form-group bmd-form-group">
                    <label for="kepala_sekolah" class="bmd-label-floating">Kepala Sekolah</label>
                    <input type="text" class="form-control" name="kepala_sekolah" value="" required>
                    <div class="invalid-feedback">Masukkan kepala_sekolah.</div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control number" name="alamat" rows="3" required></textarea>
                <div class="invalid-feedback">Isi Alamat Sekolah</div>
              </div>
              <div class="form-group">
                <input class="btn btn-info" type="submit" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
