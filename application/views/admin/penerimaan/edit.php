<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Daftar Penerimaan Sekolah</h4>
            <p class="card-category">menampilkan informasi tentang daftar rancangan penerimaan sekolah K1</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('admin/penerimaan/edit/')  ?>" method="post" enctype="multipart/form-data">

             <div class="form-group">
                <label for="saldo_awal">Uraian</label>
                <input type="text" min="0" class="form-control" name="nama_jenis_penerimaan" value="<?php echo $penerimaan['uraian'] ?>" required>
                <div class="invalid-feedback">Uraian</div>
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
