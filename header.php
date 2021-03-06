<?php 
	include "../config/connect.php";
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Aplikasi Arsip Surat</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?=base_url()?>/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?=base_url()?>/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?=base_url()?>/assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?=base_url()?>/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="<?=base_url()?>/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?=base_url()?>/assets/css/ace-rtl.min.css" />
		<script src="<?=base_url()?>/assets/js/ace-extra.min.js"></script>

		<!-- Bootstrap CSS -->
<!-- Bootstrap DataTables CSS -->
<!-- Jquery -->
<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- Jquery DataTables -->
<script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap dataTables Javascript -->
<script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

<!-- Panggil Fungsi -->
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
	$('.table-paginate').dataTable();
 } );
</script>
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.php" class="navbar-brand">
						<small style="font: 10px;">
							<img src="<?=base_url()?>/LOGO_KPU_RI.PNG" width="25px" height="25px">
							KPU Kota Tidore Kepulauan
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<i class="fa fa-user"></i>
								<span class="user-info">
									<small>Welcome,</small>
									Admin KPU Tikep
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?=base_url()?>/auth/logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">

			<div id="sidebar" class="sidebar responsive ace-save-state">

				<ul class="nav nav-list">
					<li class="active">
						<a href="<?=base_url()?>/index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Menu Utama </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Tambah Data </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?=base_url()?>/surat_keluar/tambah.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Surat Keluar
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?=base_url()?>/surat_masuk/tambah.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Surat Masuk
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?=base_url()?>/user/tambah.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Admin & User
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Tables </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?=base_url()?>/surat_keluar/data.php" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
									Surat Keluar
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=keputusan'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Keputusan
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=surat_perintah'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Surat Perintah
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=surat_tugas'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Surat Tugas
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=nota_dinas'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Nota Dinas
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=lembar_disposisi'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Lembar Diposisi
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=surat_dinas'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Surat Dinas
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=surat_undangan'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Surat Undangan
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=kesepahaman'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Nota Kesepahaman
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=surat_perjanjian'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Surat Perjanjian
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=surat_kuasa'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Surat Kuasa
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=berita_acara'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Berita Acara
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=surat_keterangan'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Surat Keterangan
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=surat_pengantar'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Surat Pengantar
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=pengumuman'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Pengumuman
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=surat_panggilan'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Surat Panggilan
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=rekomendasi'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Rekomendasi
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=surat_peringatan'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Surat Peringatan
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=surat_pernyataan'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Surat Pernyataan
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=laporan'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Laporan
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=telaahan'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Telaahan
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat=risalah_rapat'; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Risalah Rapat
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="<?=base_url()?>/surat_keluar/data.php<?php echo '?jenis_surat= '; ?>">
											<i class="menu-icon fa fa-caret-right"></i>
											Semua Surat
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>

							<li class="">
								<a href="<?=base_url()?>/surat_masuk/data.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Surat Masuk
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?=base_url()?>/user/data.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Admin & User
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
