<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title ">Edit Data Sumber Dana Sekolah</h4>
            <p class="card-category">menambahkan informasi data Sumber sekolah</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('admin/jenissumberdana/edit/') ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="id_sekolah">Jenis Sumber Dana</label>
                <br>
                <input type="text" class="form-control" name="nama_jenis_sumber_dana" value="<?php echo $jenissumberdana->nama_jenis_sumber_dana ?>" required autofocus>
                <div class="invalid-feedback">Nama Jenis Sumber Dana</div>
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
