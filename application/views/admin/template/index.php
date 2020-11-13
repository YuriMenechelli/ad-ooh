<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<!-- ICO-->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('public/web/imgs/icons/ad-ooh_logo_pin_20200522.ico') ?>">
	<!-- Master -->
	<link rel="stylesheet" href="<?= base_url('public/admin/css/master.css') ?>">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="<?= base_url('public/admin/dist/bootstrap/css/bootstrap.min.css') ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('public/admin/dist/font-awesome/css/font-awesome.min.css') ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?= base_url('public/admin/dist/Ionicons/css/ionicons.min.css') ?>">
	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url('public/admin/css/color.css')?>" type="text/css">
	<link rel="stylesheet" href="<?= base_url('public/admin/css/AdminLTE.min.css')?>" type="text/css">

	<link rel="stylesheet" href="<?= base_url('public/admin/css/skin-blue.min.css') ?>">
	<!-- plugin Data-Table -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/admin/dist/data-tables/datatables.css') ?>">
	<!-- plugin Uploads -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/admin/dist/jquery-uploadfile/css/uploadfile.css') ?>">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet" type="text/css">
	<title><?=$title?></title>
	<meta name="description" content="Página inicial da ad-ooh, uma startup brasileira expecializada em mídia externa. Pode interessar: Renda extra, motoristas de aplicativo, uber, 99 taxi, Cabify, agências de publicidade e anúnciantes.">
	<!-- Header -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<header class="main-header">
		<!-- Logo -->
		<a href="<?= base_url('admin')?>" class="logo" style="background-color: rgb(204,13,74,1);">
			<img style="height: 30px;" src="<?= base_url('public/web/imgs/logos/ad-ooh_logo_white.png')?>" alt="ad-ooh logo branco">
		</a>
		<nav class="navbar navbar-static-top" style="background-color: rgb(255,0,88,1)"> <!--style="background-color: rgb(255,0,88,0.75)"-->
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="hidden-xs "><i class="fa fa-lock" aria-hidden="true"></i> Logout</span>
						</a>
						<ul class="dropdown-menu">
							<li class="user-header" style="background-color: rgb(255,0,88,1)">
								<h3 class="user_config"><?= $session->nome?></h3>
							</li>
							<li class="user-header" style="background-color: rgb(255,0,88,1)"><img style="height: 30px;" src="<?= base_url('public/web/imgs/logos/ad-ooh_logo_white.png')?>" alt="ad-ooh logo branco"></li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div style="padding-left: 95px">
									<a href="<?= base_url('admin/login_admin/sair') ?>" class="btn btn-danger btn-flat"><i class="fa fa-power-off" aria-hidden="true"></i> Sair</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<aside class="main-sidebar">
		<section class="sidebar">
			<!-- form de busca -->
			<form action="#" method="get" class="sidebar-form">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Buscar...">
					<span class="input-group-btn">
                		<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              		</span>
				</div>
			</form>
			<!-- /.search form -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">BARRA DE NAVEGAÇÃO</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-address-card"></i> <span>Cadastro</span>
						<span class="pull-right-container">
             				<i class="fa fa-angle-left pull-right"></i>
            			</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('admin/users_admin')?>"><i class="fa fa-circle text-red"></i> Usuários</a></li>
						<li><a href="<?= base_url('admin/costumers_admin')?>"><i class="fa fa-circle text-blue"></i> Clientes</a></li>
						<li><a href="<?= base_url('admin/reports_admin/campaigns')?>"><i class="fa fa-circle text-yellow"></i> Campanhas</a></li>
						<li><a href="<?= base_url('admin/reports_admin/estimated_impact')?>"><i class="fa fa-circle text-green"></i> Impacto Estimado</a></li>
						<li><a href="<?= base_url('admin/reports_admin/airing_hours')?>"><i class="fa fa-circle text-aqua"></i> Tempo de Veiculação</a></li>
					</ul>
				</li>
				<li class="header">SITE AD-OOH</li>
				<li><a href="<?= base_url('admin/contact_admin')?>"><i class="fa fa-circle text-purple"></i> Contatos recentes</a></li>
				<li class="header">SISTEMA</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-wrench"></i> <span>Configurações</span>
						<span class="pull-right-container">
             				<i class="fa fa-angle-left pull-right"></i>
            			</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('admin/config_admin')?>"><i class="fa fa-circle text-red"></i> <span>Sobre</span></a></li>
					</ul>
				</li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<?php
		if (isset($view)){
			$this->load->view($view);
		}
		?>
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Versão</b> 1.0.2
		</div>
		<a href="<?= base_url()?>" target="_blank"><img style="height: 30px;" src="<?= base_url('public/web/imgs/logos/ad-ooh_logo_color.png')?>" alt="ad-ooh logo branco"></a>
		<strong>Copyright &copy; 2020.</strong> All rights reserved.
	</footer>
	<div class="control-sidebar-bg"></div>
</div>

<!-- Bootstrap -->
	<script src="<?= base_url('public/admin/js/jquery.min.js') ?>"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?= base_url('public/admin/dist/bootstrap/js/bootstrap.min.js') ?>"></script>
	<!-- SlimScroll -->
	<script src="<?= base_url('public/admin/dist/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
	<!-- FastClick -->
	<script src="<?= base_url('public/admin/dist/fastclick/lib/fastclick.js') ?>"></script>
	<!-- plugin Data-Table -->
	<script type="text/javascript" charset="utf8" src="<?= base_url('public/admin/dist/data-tables/datatables.js') ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('public/admin/js/adminlte.min.js') ?>"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url('public/admin/js/demo.js') ?>"></script>
	<!-- JS Principal do site -->
	<script src="<?= base_url('public/admin/js/admin_main.js') ?>"></script>
	<!--JQuery Mask-->
	<script src="<?= base_url('public/admin/dist/jquery-mask/js/jquery.mask.min.js') ?>"></script>
	<!--JQuery UploadFile-->
	<script src="<?= base_url('public/admin/dist/jquery-uploadfile/js/jquery.uploadfile.min.js') ?>"></script>
</body>
</html>
