<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Tambah Data Jenis Kegiatan Sekolah</h4>
            <p class="card-category">menambahkan jenis kegiatan sekolah</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('admin/kegiatan/edit/')  ?>" method="post" enctype="multipart/form-data">

             <div class="form-group">
                <label for="saldo_awal">Jenis Kegiatan</label>
                <input type="text" min="0" class="form-control" name="nama_jenis_kegiatan" value="<?php echo $kegiatan->nama_jenis_kegiatan ?>" required>
                <div class="invalid-feedback">Jenis Kegiatan</div>
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
