<div class="modal-body">
  <h5>Jenis Sumber Dana</h5>
  <p><?php echo $sumberdana->nama_jenis_sumber_dana; ?></p>
  <hr>
  <h5>Saldo Awal</h5>
  <p><?php echo $sumberdana->saldo_awal; ?></p>
  <hr>
  <h5>Saldo Bank</h5>
  <p><?php echo $sumberdana->saldo_bank; ?></p>
  <hr>
  <h5>Bunga Bank</h5>
  <p><?php echo $sumberdana->bunga_bank; ?></p>
  <hr>
  <h5>Saldo Kas Tunai</h5>
  <p><?php echo $sumberdana->saldo_kas_tunai; ?></p>
  <hr>
  <h5>Tanggal Submit</h5>
  <p><?php echo date('d-m-Y',strtotime($sumberdana->tanggal)) ?></p>
</div>
