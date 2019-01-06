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
                <label for="npsp">NPSP</label>
                <input type="text" class="form-control" name="npsp" value="<?php echo $sekolah->npsp ?>" required autofocus>
                <div class="invalid-feedback">Masukkan nomor npsp.</div>
              </div>

              <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah</label>
                <input type="text" class="form-control number" name="nama_sekolah" value="<?php echo $sekolah->nama_sekolah ?>" required>
                <div class="invalid-feedback">Masukkan nama_sekolah.</div>
              </div>

              <div class="form-group">
                <label for="lokasi"></label>
                <input type="text" class="form-control" name="lokasi" value="<?php echo $sekolah->lokasi ?>" required>
                <div class="invalid-feedback">Masukkan lokasi atau alamat.</div>
              </div>

              <div class="form-group">
                <label for="harga">Harga</label>
                <input min="1000" class="form-control number" name="harga" value="<?php echo $sekolah->harga ?>" required >
                <div class="invalid-feedback">Masukkan Harga properti.</div>
              </div>

              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control number" name="keterangan" rows="3" required><?php echo $sekolah->keterangan ?></textarea>
                <div class="invalid-feedback">Isi keterangan properti</div>
              </div>

              <div class="form-group">
                  <label for="gambar">Foto Properti</label>
                  <br>
                  <?php if( $sekolah->gambar ) : ?>
                    <img style="width: 100px;height: 100%" src="<?php echo base_url('assets/uploads/properti/').$sekolah->gambar?>">
                    <?php ; else : ?>
                      <img src="https://via.placeholder.com/350x250" alt="" style="width:25%;">
                    <?php endif; ?>
                </div>

                <label class="file">
                  <input type="file" class="form-control-file" name="gambar">
                  <span class="file-custom"></span>
                </label>
                <div class="form-group">
                  <input class="btn btn-danger" type="submit" value="Pindah">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
