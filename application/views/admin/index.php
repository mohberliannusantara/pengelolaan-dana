<div class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title ">Halaman Beranda</h4>
            <p class="card-category">Informasi Instansi Akun</p>
          </div>

          <div class="card-body">
              Nama Pengguna: <?php echo $nama_pengguna; ?> <br>
              Email: <?php echo $email; ?> <br>
              Nama Instansi: <?php echo $nama_sekolah; ?> <br>

          </div>
          
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#<?php echo $this->session->username; ?>">
              <?php if ($this->session->gambar): ?>
                <img class="img" src="<?php echo base_url('assets/uploads/admin/' . $this->session->gambar) ?>" />
                <?php ; else : ?>
                  <img class="img" src="<?php echo base_url(); ?>assets/img/faces/marc.jpg" />
                <?php endif; ?>
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category text-gray"><?php echo $this->session->level; ?> / <?php echo $this->session->rayon; ?></h6>
              <h4 class="card-title"><?php echo $this->session->username; ?></h4>
              <p class="card-description">
                Being honest may not get you a lot of friends but it’ll always get you the right ones..
              </p>
              <?php if ($this->session->id_level != 1 ) : ?>
                <a href="#Hello" class="btn btn-warning btn-round">Hello</a>
              <?php endif;?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Hapus</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" id="id_admin" value="">
            <p>Apakah Anda yakin untuk menghapus pengguna ini..?</p>
          </div>
        </div>
        <div class="modal-footer">
          <button id="deleteButton" onclick="deletePengguna()" type="submit" class="btn btn-danger">Hapus</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Info Pengguna</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-content">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  })
  </script>
