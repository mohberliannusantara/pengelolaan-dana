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
            <form action="<?php base_url('sekolah/create/') ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="npsp">NPSN</label>
                <input type="number" class="form-control" name="npsn" value="" required autofocus>
                <div class="invalid-feedback">Masukkan nomor npsn.</div>
              </div>

              <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah</label>
                <input type="text" class="form-control" name="nama_sekolah" value="" required>
                <div class="invalid-feedback">Masukkan nama_sekolah.</div>
              </div>

              <div class="form-group">
                <label for="id_jenis_sekolah">Jenis Sekolah: </label>
                <select class="form-control" name="id_jenis_sekolah">
                  <option disabled selected hidden>Pilih Jenjang Sekolah</option>
                  <option value="1">SD</option>
                  <option value="2">SMP</option>
                </select>
                <div class="invalid-feedback">Masukkan lokasi atau alamat.</div>
              </div>

              <div class="form-group">
                <label for="nama_status_sekolah">Status Sekolah</label>
                <!-- <input min="1000" class="form-control number" name="harga" value="<?php echo $sekolah->nama_status_sekolah ?>" required > -->

                <select class="form-control" name="id_status_sekolah">
                  <option disabled selected hidden>Pilih Status Sekolah</option>
                  <option value="1">Negeri</option>
                  <option value="2">Swasta</option>
                </select>
                <div class="invalid-feedback">Masukkan Status Sekolah</div>
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control number" name="alamat" rows="3" required></textarea>
                <div class="invalid-feedback">Isi Alamat Sekolah</div>
              </div>

              <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <!-- <input min="1000" class="form-control number" name="harga" value="<?php echo $sekolah->nama_status_sekolah ?>" required > -->

                <select class="form-control" name="kecamatan">
                  <option disabled selected hidden>Pilih Kecamatan</option>
                  <option value="Batu">Batu</option>
                  <option value="Bumiaji">Bumiaji</option>
                  <option value="Junrejo">Junrejo</option>
                </select>
                <div class="invalid-feedback">Masukkan Status Sekolah</div>
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
