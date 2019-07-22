<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Tambah Data Jenis Sumber Dana Sekolah</h4>
            <p class="card-category">menambahkan Jenis Sumber sekolah</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('admin/jenissumberdana/create/') ?>" method="post" enctype="multipart/form-data">

             <div class="form-group">
                <label for="saldo_awal">Jenis Sumber Dana</label>
                <br>
                <input type="text" min="0" class="form-control" name="nama_jenis_sumber_dana" required autofocus>
                <div class="invalid-feedback">Jenis Sumber Dana</div>
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
