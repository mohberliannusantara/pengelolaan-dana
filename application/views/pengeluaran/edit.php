<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Edit Data Pengeluaran</h4>
            <p class="card-category"></p>
          </div>
          <div class="card-body">
            <?php foreach ($pengeluaran as $key): ?>
              
            
            <form action="<?php base_url('pengeluaran/edit/'.$this->uri->segment(2)) ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nama_pengeluaran">Nama Pengeluaran</label>
                <input type="text" class="form-control" name="nama_pengeluaran" value="<?php echo $key->nama_pengeluaran ?>" required autofocus>
                <div class="invalid-feedback">Masukkan nama pengeluaran.</div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="jenis_pengeluaran">Jenis Pengeluaran</label>
                    <select class="custom-select form-control" name="jenis_pengeluaran" required onchange="if (this.selectedIndex==1){ document.getElementById('toko').style.display = 'inline' }else { document.getElementById('toko').style.display = 'none' };">
                      <option selected hidden value="<?php echo $key->id_jenis_pengeluaran ?>"><?php echo $key->nama_jenis_pengeluaran ?></option>
                      <?php foreach ($jenis_pengeluaran as $row): ?>
                        <option value="<?php echo $row->id_jenis_pengeluaran ?>">
                          <?php echo $row->nama_jenis_pengeluaran; ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                    <span id="toko" style="display:none;">
                      <label>Nama Toko</label>
                      <input type="text" name="toko" value="<?php echo $key->nama_toko ?>" class="form-control">
                      </span>
                    <div class="invalid-feedback">Pilih Jenis Pengeluaran</div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="jumlah">Harga</label>
                <input min="1000" class="form-control number" name="jumlah" value="<?php echo $key->jumlah ?>" required >
                <div class="invalid-feedback">Masukkan Harga kendaraan.</div>
              </div>
              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" value="<?php echo $key->tanggal ?>" required >
                <div class="invalid-feedback">Masukkan Tanggal.</div>
              </div>
              <div class="form-group">
                <label for="gambar">Bukti Transaksi</label>
              </div>
              <label class="file">
                <input type="file" class="form-control-file" name="gambar">
                <span class="file-custom"></span>
              </label>

              <div class="form-group">
                <input class="btn btn-info" type="submit" value="Simpan">
              </div>
              <?php endforeach ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
