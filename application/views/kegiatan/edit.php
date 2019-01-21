<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">Ubah Data Kegiatan</h4>
            <p class="card-category">menambahkan informasi data tentang kegiatan sekolah</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('kegiatan/edit/'.$this->uri->segment(3)) .'/'. $id ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nama_kegiatan">Nama Kegiatan</label>
                <input type="text" class="form-control" name="nama_kegiatan" value="<?php echo $kegiatan->nama_kegiatan ?>" required>
                <div class="invalid-feedback">Masukkan nama kegiatan.</div>
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
