<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Tambah Data Detail Kegiatan</h4>
            <p class="card-category">menambahkan informasi detail tentang kegiatan sekolah</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('detail_kegiatan/create/') . $id ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nama_kegiatan">Nama Kegiatan</label>
                <input type="text" class="form-control" name="nama_kegiatan" value="" required>
                <div class="invalid-feedback">Masukkan nama kegiatan.</div>
              </div>
              <div class="form-group">
                <label for="jumlah">Kebutuhan Dana</label>
                <input type="number" class="form-control" name="jumlah" value="" required>
                <div class="invalid-feedback">Masukkan jemlah dana kegiatan.</div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="tanggal">Tanggal Kegiatan</label>
                    <input type="date" class="form-control" name="tanggal" value="" required>
                    <div class="invalid-feedback">Masukkan tanggal kegiatan.</div>
                  </div>
                </div>
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
