<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Tambah Data Pengeluaran</h4>
            <p class="card-category">menambahkan informasi data tentang pengeluaran</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('pengeluaran/create/') ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="nama_pengeluaran">Nama Pengeluaran</label>
                <input type="text" class="form-control" name="nama_pengeluaran" value="" required autofocus>
                <div class="invalid-feedback">Masukkan nama pengeluaran.</div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="jenis_pengeluaran">Jenis Pengeluaran</label>
                    <select class="custom-select" name="jenis_pengeluaran" required>
                      <option selected value="">Pilih Jenis Pengeluaran</option>
                      <?php foreach ($jenis_pengeluaran as $row): ?>
                        <option value="<?php echo $row->id_jenis_pengeluaran ?>">
                          <?php echo $row->nama_jenis_pengeluaran; ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">Pilih Jenis Pengeluaran</div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="jumlah">Harga</label>
                <input min="1000" class="form-control number" name="jumlah" value="<?php echo set_value('jumlah') ?>" required >
                <div class="invalid-feedback">Masukkan Harga kendaraan.</div>
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
