<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">Tambah Data RKAS</h4>
            <p class="card-category">menambahkan informasi detail tentang RKAS</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('rencanapenerimaank1/editSub/'.$this->uri->segment(2)) ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="Uraian">Uraian</label>
                <input type="text" class="form-control" name="uraian" value="<?php echo $penerimaan->uraian ?>" required autofocus>
                <div class="invalid-feedback">Masukkan nama uraian.</div>
              </div>
              <div class="form-group">
                <label for="jumlah">Kebutuhan Dana</label>
                <input type="number" class="form-control" name="jumlah" value="<?php echo $penerimaan->jumlah ?>" required>
                <div class="invalid-feedback">Masukkan jemlah dana RKAS.</div>
              </div>
<!--               <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="tanggal">Tangal Kegiatan</label>
                    <input type="date" class="form-control" name="tanggal" value="<?php echo $kegiatan->tanggal ?>" required>
                    <div class="invalid-feedback">Masukkan tanggal kegiatan.</div>
                  </div>
                </div>
              </div> -->
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
