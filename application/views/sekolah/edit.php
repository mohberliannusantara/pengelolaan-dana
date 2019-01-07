<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title ">Ubah Data Sekolah</h4>
            <p class="card-category">mengubah informasi data tentang sekolah</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('sekolah/update') ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="npsp">NPSN</label>
                <input type="text" class="form-control" name="npsn" value="<?php echo $sekolah->npsn ?>" required autofocus>
                <div class="invalid-feedback">Masukkan nomor npsn.</div>
              </div>

              <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah</label>
                <input type="text" class="form-control number" name="nama_sekolah" value="<?php echo $sekolah->nama_sekolah ?>" required>
                <div class="invalid-feedback">Masukkan nama_sekolah.</div>
              </div>

              <div class="form-group">
                <label for="nama_jenis_sekolah">Jenis Sekolah</label>
                <input type="" class="form-control" name="lokasi" value="<?php echo $sekolah->nama_jenis_sekolah ?>" required>
                <div class="invalid-feedback">Masukkan lokasi atau alamat.</div>
              </div>

              <div class="dropdown">
              <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <?php echo $sekolah->nama_jenis_sekolah ?>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" value="SD">Sekolah Dasar</a>
                <a class="dropdown-item" value="SMP">Sekolah Menengah Pertama</a>
              </div>
            </div>

              <div class="form-group">
                <label for="nama_status_sekolah">Status Sekolah</label>
                <input min="1000" class="form-control number" name="harga" value="<?php echo $sekolah->nama_status_sekolah ?>" required >
                <div class="invalid-feedback">Masukkan Status Sekolah</div>
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control number" name="alamat" rows="3" required><?php echo $sekolah->alamat ?></textarea>
                <div class="invalid-feedback">Isi Alamat Sekolah</div>
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
