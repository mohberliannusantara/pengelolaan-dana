<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-body dropdown show">
            <h4 class="card-title">BOS-04</h4>
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#BOS-04">Cek Laporan</a>
            <p class="card-category">Laporan Penggunaan Dana BOS</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <center>
                <span class="text-info">berisi data tentang penggunaan dana BOS disetiap sekolah</span>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-body">
            <h4 class="card-title">BOS-K1</h4>
            <a href="pengguna/create" class="btn btn-warning">Unduh</a>
            <p class="card-category">Rencana Anggaran Pendapatan & Belanja</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <center>
                <span class="text-warning">berisi data tentang rencana anggaran pendapatan & belanja disetiap sekolah</span>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-body">
            <h4 class="card-title">BOS-K2</h4>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#BOS-K2">Unduh</a>
            <p class="card-category">Rencana Kegiatan & Anggaran</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <center>
                <span class="text-danger">berisi data tentang rencana kegiatan beserta anggaran disetiap sekolah</span>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-body">
            <h4 class="card-title">BOS-K3</h4>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#BOS-k3">Cek Laporan</a>
            <p class="card-category">Buku Kas Umum</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <center>
                <span class="text-danger">berisi data tentang rekap kas secara umum disetiap sekolah</span>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-body">
            <h4 class="card-title">BOS-K7</h4>
            <a href="pengguna/create" class="btn btn-success">Unduh</a>
            <p class="card-category">Realisasi Penggunaan Dana Tiap Jenis Anggaran</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <center>
                <span class="text-success">berisi data tentang realisasi penggunaan dana BOS disetiap sekolah</span>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-body">
            <h4 class="card-title">BOS-K7a</h4>
            <a href="pengguna/create" class="btn btn-info">Unduh</a>
            <p class="card-category">Rekapitulasi Realisasi Penggunaan Dana BOS</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <center>
                <span class="text-info">berisi data tentang rekap realisasi penggunaan dana BOS disetiap sekolah</span>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-body">
            <h4 class="card-title">BOS-K7b</h4>
            <a href="pengguna/create" class="btn btn-info">Unduh</a>
            <p class="card-category">Laporan Penggunaan Dana BOS</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <center>
                <span class="text-info">berisi data tentang penggunaan dana BOS disetiap sekolah</span>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-body">
            <h4 class="card-title">BOS-K7c</h4>
            <a href="pengguna/create" class="btn btn-warning">Unduh</a>
            <p class="card-category">Laporan Penggunaan Dana BOS</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <center>
                <span class="text-warning">berisi data tentang penggunaan dana BOS disetiap sekolah</span>
              </center>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-body">
            <h4 class="card-title">BOS-04</h4>
            <a href="pengguna/create" class="btn btn-danger">Unduh</a>
            <p class="card-category">Laporan Penggunaan Dana BOS</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <center>
                <span class="text-danger">berisi data tentang penggunaan dana BOS disetiap sekolah</span>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 04-->
<div class="modal fade" id="BOS-04" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Mengunduh Laporan Form BOS-04</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'Laporan/exportBos04/'.$this->session->id_sekolah ?>" method='post' target="_blank">
          <div class="form-group">
            <label for="" class="label">Tahun: </label>
            <input type="number" name="tahun" class="form-control" min="2017" value="2017" autofocus required>
          </div>
          <div class="form-group">
            <label for="triwulan">Laporan Triwulan yang Ingin Di Cek: </label>
            <select class="form-control" name="triwulan" required>
              <option disabled selected hidden>Pilih Triwulan</option>
              <option value="1/1">Triwulan 1</option>
              <option value="1/4">Triwulan 2</option>
              <option value="1/7">Triwulan 3</option>
              <option value="1/10">Triwulan 4</option>
              <option value="semua">Semua Triwulan</option>
            </select>
            <div class="invalid-feedback">Masukkan Triwulan yang ingin di Cek</div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" name='action' value="lihat" class="btn btn-primary">Lihat</button>
          <button type="submit" name='action' value="unduh" class="btn btn-primary">Unduh</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal BOS-k2 -->
<div class="modal fade" id="BOS-K2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Mengunduh Laporan Form BOS-K2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'Laporan/exportBosK2/'.$this->session->id_sekolah ?>" method='post'>
          <div class="form-group">
<<<<<<< HEAD
            <label for="" class="label text-dan">Tahun : </label>
            <br>
            <!-- <input type="month" name="tahun" class="form-control" autofocus required> -->
            <input type="number" name="tahun" min="2017" max="2100" class="form-control" value="2017" autofocus required>
=======
            <label for="" class="label">Tahun: </label>
            <input type="number" name="tahun" class="form-control" min="2017" value="2017" autofocus required>
>>>>>>> 76fe0a724c5c3e257a32702b92dc17ad418c38a1
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" name='action' value="lihat" class="btn btn-primary">Lihat</button>
          <button type="submit" name='action' value="unduh" class="btn btn-primary">Unduh</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal k3-->
<div class="modal fade" id="BOS-k3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Melihat Laporan Form BOS-K3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'Laporan/exportk3/'.$this->session->id_sekolah ?>" method='post' target="_blank">
          <div class="form-group">
            <label for="" class="label">Tahun: </label>
            <input type="number" name="tahun" class="form-control" min="2017" value="2017" autofocus required>
          </div>
          <div class="form-group">
            <label for="triwulan">Laporan Triwulan yang Ingin Di Lihat: </label>
            <select class="form-control" name="triwulan" required>
              <option disabled selected hidden>Pilih Triwulan</option>
              <option value="1/1">Triwulan 1</option>
              <option value="1/4">Triwulan 2</option>
              <option value="1/7">Triwulan 3</option>
              <option value="1/10">Triwulan 4</option>
              <option value="semua">Semua Triwulan</option>
            </select>
            <div class="invalid-feedback">Masukkan Triwulan yang ingin di Lihat</div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" name='action' value="lihat" class="btn btn-primary">Lihat</button>
          <button type="submit" name='action' value="unduh" class="btn btn-primary">Unduh</button>
        </div>
      </form>
    </div>
  </div>
</div>
