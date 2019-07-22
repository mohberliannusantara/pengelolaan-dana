<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png') ?>">
  <title>
    Pengelolaan Dana Bos | Dinas Pendidikan Kota Batu
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, Pengguna-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url('') ?>assets/css/material-dashboard.min.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('') ?>assets/demo/demo.css" rel="stylesheet" />
  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s),
    dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body class="">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white" data-image="<?php echo base_url('assets/img/sidebar-3.jpg'); ?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <img src="<?php echo base_url('assets/img/favicon.png') ?>" alt="" style="width:100%;">
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          <?php echo $this->session->nama_sekolah ?>
        </a>
      </div>
    <!-- <div class="logo">
      <a href="#" class="simple-text logo-normal">

      </a>
    </div> -->
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item <?php echo ($this->uri->segment(2) == 'beranda') ? 'active':''; ?>">
          <a class="nav-link" href="<?php echo site_url('admin/beranda') ?>">
            <i class="material-icons">dashboard</i>
            <p>Beranda</p>
          </a>
        </li>
        <li class="nav-item <?php echo ($this->uri->segment(2) == 'dana') ? 'active':''; ?> ">
          <a class="nav-link" href="<?php echo site_url('admin/dana')?>">
            <i class="material-icons">content_paste</i>
            <p>Laporan Dana</p>
          </a>
        </li>
        <li class="nav-item <?php echo ($this->uri->segment(2) == 'jenisSumberDana') ? 'active':''; ?> ">
          <a class="nav-link" href="<?php echo site_url('admin/jenisSumberDana')?>">
            <i class="material-icons">money</i>
            <p>Jenis Sumber Dana</p>
          </a>
        </li>
        <li class="nav-item <?php echo ($this->uri->segment(2) == 'kegiatan') ? 'active':''; ?> ">
          <a class="nav-link" href="<?php echo site_url('admin/kegiatan')?>">
            <i class="material-icons">directions_run</i>
            <p>Kegiatan Sekolah</p>
          </a>
        </li>
        <li class="nav-item <?php echo ($this->uri->segment(2) == 'sekolah') ? 'active':''; ?> ">
          <a class="nav-link" href="<?php echo site_url('admin/sekolah')?>">
            <i class="material-icons">school</i>
            <p>Sekolah</p>
          </a>
        </li>
        <li class="nav-item <?php echo ($this->uri->segment(2) == 'pengguna') ? 'active':''; ?> ">
          <a class="nav-link" href="<?php echo site_url('admin/pengguna')?>">
            <i class="material-icons">person</i>
            <p>Pengguna</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="#pablo"><?php echo $page ?></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#pablo">
                <i class="material-icons">dashboard</i>
                <p class="d-lg-none d-md-block">
                  Stats
                </p>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">
                  Some Actions
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo base_url('autentikasi/logout')?>">Keluar</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
