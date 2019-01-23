<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Tambah Data Sumber Dana Sekolah</h4>
            <p class="card-category">menambahkan informasi data Sumber sekolah</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('sumberdana/create/') ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="id_sekolah">Nama Sekolah</label>
                <input type="text" class="form-control" name="id_sekolah" value="<?php echo $sumberdana->nama_sekolah ?>" required readonly>
                <div class="invalid-feedback">Nama Sekolah</div>
              </div>

              <div class="form-group">
                <label for="nama_pemasukan">Nama Pemasukan</label>
                <input type="text" class="form-control" name="nama_pemasukan" value="<?php echo $sumberdana->nama_pemasukan ?>" required>
                <div class="invalid-feedback">Nama Pemasukan</div>
              </div>

             <div class="form-group">
                <label for="saldo_awal">Saldo Awal (Rp)</label>
                <input type="number" min="0" class="form-control" name="saldo_awal" value="<?php echo $sumberdana->saldo_awal ?>" required>
                <div class="invalid-feedback">Saldo Awal</div>
              </div>

             <div class="form-group">
                <label for="saldo_bank">Saldo Bank (Rp)</label>
                <input type="number" min="0" class="form-control" name="saldo_bank" value="<?php echo $sumberdana->saldo_bank ?>" required>
                <div class="invalid-feedback">Saldo Bank</div>
              </div>

                           <div class="form-group">
                <label for="bunga_bank">Bunga Bank (%)</label>
                <input type="number" min="0" class="form-control" name="bunga_bank" value="<?php echo $sumberdana->bunga_bank ?>" required>
                <div class="invalid-feedback">Bunga Bank</div>
              </div>

              <div class="form-group">
                <label for="saldo_kas_tunai">Saldo Kas Tunai (Rp)</label>
                <input type="number" min="0" class="form-control" name="saldo_kas_tunai" value="<?php echo $sumberdana->saldo_kas_tunai ?>" required>
                <div class="invalid-feedback">Saldo Kas Tunai</div>
              </div>

              <div class="form-group">
                <label for="id_jenis_sumber_dana">Jenis Sumber Dana Sekolah: </label>
                <select class="form-control" name="id_jenis_sumber_dana">
                  <option selected hidden value="<?php echo $sumberdana->id_jenis_sumber_dana ?>"><?php echo $sumberdana->nama_jenis_sumber_dana ?></option>
                   <?php foreach ($jenisdana as $key): ?>
                    <option value="<?php echo $key->id_jenis_sumber_dana ?>"><?php echo $key->nama_jenis_sumber_dana ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Masukkan jenis sumber dana</div>
              </div>

              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" value="<?php echo $sumberdana->tanggal ?>" required>
                <div class="invalid-feedback">Tanggal</div>
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
