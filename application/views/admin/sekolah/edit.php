<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title ">Ubah Data Sekolah</h4>
            <p class="card-category">mengubah informasi data tentang sekolah</p>
          </div>
          <div class="card-body">
            <form action="<?php base_url('sekolah/edit/'.$this->uri->segment(2)) ?>" method="post" enctype="multipart/form-data">

              <?php
                $id_jenis_sekolah=0;
                $id_status_sekolah=0; 
                if ($sekolah->nama_jenis_sekolah == 'SD') {
                  $id_jenis_sekolah=1;
                }else{
                  $id_jenis_sekolah=2;
                }

                if($sekolah->nama_status_sekolah == "Negeri"){
                  $id_status_sekolah=1;
                }else{
                  $id_status_sekolah=2;
                }
              ?>

              <div class="form-group">
                <label for="npsp">NPSN</label>
                <input type="number" class="form-control" name="npsn" value="<?php echo $sekolah->npsn ?>" required autofocus>
                <div class="invalid-feedback">Masukkan nomor npsn.</div>
              </div>

              <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah</label>
                <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $sekolah->nama_sekolah ?>" required>
                <div class="invalid-feedback">Masukkan nama_sekolah.</div>
              </div>

              <div class="form-group">
                <label for="id_jenis_sekolah">Jenis Sekolah: </label>
                <select class="form-control" name="id_jenis_sekolah">
                  <option selected hidden value="<?php echo $id_jenis_sekolah ?>"><?php echo $sekolah->nama_jenis_sekolah ?></option>
                  <option value="1">SD</option>
                  <option value="2">SMP</option>
                </select>
                <div class="invalid-feedback">Masukkan lokasi atau alamat.</div>
              </div>

              <div class="form-group">
                <label for="nama_status_sekolah">Status Sekolah</label>
                <!-- <input min="1000" class="form-control number" name="harga" value="<?php echo $sekolah->nama_status_sekolah ?>" required > -->

                <select class="form-control" name="id_status_sekolah">
                  <option selected hidden value="<?php echo $id_status_sekolah ?>"><?php echo $sekolah->nama_status_sekolah ?></option>
                  <option value="1">Negeri</option>
                  <option value="2">Swasta</option>
                </select>
                <div class="invalid-feedback">Masukkan Status Sekolah</div>
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control number" name="alamat" rows="3" required><?php echo $sekolah->alamat ?></textarea>
                <div class="invalid-feedback">Isi Alamat Sekolah</div>
              </div>

              <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <!-- <input min="1000" class="form-control number" name="harga" value="<?php echo $sekolah->nama_status_sekolah ?>" required > -->

                <select class="form-control" name="kecamatan">
                  <option selected hidden value="<?php echo $sekolah->kecamatan ?>"><?php echo $sekolah->kecamatan ?></option>
                  <option value="Batu">Batu</option>
                  <option value="Bumiaji">Bumiaji</option>
                  <option value="Junrejo">Junrejo</option>
                </select>
                <div class="invalid-feedback">Masukkan Status Sekolah</div>
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
