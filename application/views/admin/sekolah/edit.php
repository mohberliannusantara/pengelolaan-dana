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
            <form action="<?php base_url('admin/sekolah/edit/'.$this->uri->segment(2)) ?>" method="post" enctype="multipart/form-data">

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

              <div class="row">
                <div class="col-md-8">
                  <div class="form-group bmd-form-group">
                    <label for="nama_sekolah" class="bmd-label-floating">Nama Sekolah</label>
                    <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $sekolah->nama_sekolah ?>" required autofocus>
                    <div class="invalid-feedback">Masukkan nama_sekolah.</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group bmd-form-group">
                    <label for="npsp" class="bmd-label-floating">NPSN</label>
                    <input type="number" class="form-control" name="npsn" value="<?php echo $sekolah->npsn ?>" required>
                    <div class="invalid-feedback">Masukkan nomor npsn.</div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <select class="custom-select" name="id_jenis_sekolah" required>
                      <option selected hidden value="<?php echo $id_jenis_sekolah ?>"><?php echo $sekolah->nama_jenis_sekolah ?></option>
                      <option value="1">SD</option>
                      <option value="2">SMP</option>
                    </select>
                    <div class="invalid-feedback">Masukkan lokasi atau alamat.</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <select class="custom-select" name="id_status_sekolah">
                      <option selected hidden value="<?php echo $id_status_sekolah ?>"><?php echo $sekolah->nama_status_sekolah ?></option>
                      <option value="1">Negeri</option>
                      <option value="2">Swasta</option>
                    </select>
                    <div class="invalid-feedback">Masukkan Status Sekolah</div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <select class="custom-select" name="kecamatan">
                      <option selected hidden value="<?php echo $sekolah->kecamatan ?>"><?php echo $sekolah->kecamatan ?></option>
                      <option value="Batu">Batu</option>
                      <option value="Bumiaji">Bumiaji</option>
                      <option value="Junrejo">Junrejo</option>
                    </select>
                    <div class="invalid-feedback">Masukkan Status Sekolah</div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-9">
                  <div class="form-group bmd-form-group">
                    <label for="kepala_sekolah" class="bmd-label-floating">Kepala Sekolah</label>
                    <input type="text" class="form-control" name="kepala_sekolah" value="<?php echo $sekolah->kepala_sekolah ?>" required>
                    <div class="invalid-feedback">Masukkan kepala_sekolah.</div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control number" name="alamat" rows="3" required><?php echo $sekolah->alamat ?></textarea>
                <div class="invalid-feedback">Isi Alamat Sekolah</div>
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
