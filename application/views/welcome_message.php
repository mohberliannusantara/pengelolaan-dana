<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/img/logo.png">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.png') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
    Pengelolaan Dana | Dinas Pendidikan Kota Batu
  </title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- CSS Files -->
	<link href="<?php echo base_url() ?>assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url() ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="offline-doc">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
		<div class="container-fluid">
			<div class="navbar-wrapper">
				<a class="navbar-brand" href="#pablo">DINAS PENDIDIKAN</a>
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
						<a class="nav-link" href="http://disdik.batukota.go.id/disdik/" target="_blank">
							Tentang Dinas Pendidikan
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->
	<div class="page-header clear-filter">
		<div class="page-header-image" style="background-image: url('<?php echo base_url('assets/img/background.jpg') ?>');"></div>
		<div class="content-center">
			<div class="col-md-10 ml-auto mr-auto">
				<div class="brand">
					<h1 class="title">Pengelolaan Dana</h1>
					<h3 class="description">Memantau pengelolaan dana dengan lebih mudah dan cepat</h3>
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalCenter">
						Kelola Dana
					</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Silahkan Masuk</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url().'autentikasi/login'?>" method='post'>
					<div class="form-group">
						<label for="" class="label">Username</label>
						<input type="text" name="username" class="form-control" id="recipient-name" autofocus required>
					</div>
					<div class="form-group">
						<label for="" class="label">Password</label>
						<input type="password" name="password" class="form-control" id="recipient-name" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Masuk</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="container-fluid">
			<nav class="float-left">
				<ul>
					<li>
						<a href="https://creative-tim.com/presentation">
							About Us
						</a>
					</li>
					<li>
						<a href="https://github.com/mohberliannusantara/pengelolaan-dana">
							Licenses
						</a>
					</li>
				</ul>
			</nav>
			<div class="copyright float-right">
				&copy;
				<script>
				document.write(new Date().getFullYear())
				</script>, made with <i class="material-icons">favorite</i> by
				<a href="https://github.com/mohberliannusantara/pengelolaan-dana" target="_blank">Creative Tim</a> for a better web.
			</div>
		</div>
	</footer>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url() ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/js/core/popper.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
	<!--  Google Maps Plugin    -->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
	<!-- Chartist JS -->
	<script src="<?php echo base_url() ?>assets/js/plugins/chartist.min.js"></script>
	<!--  Notifications Plugin    -->
	<script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-notify.js"></script>
	<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="<?php echo base_url() ?>assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url() ?>assets/demo/demo.js"></script>
</body>

</html>
