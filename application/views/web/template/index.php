<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js" lang="pt-br">
<!--<![endif]-->

<head>
	<title><?=$title?></title>
	<meta name="description" content="ad-ooh">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- ICO-->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('public/web/imgs/icons/ad-ooh_logo_pin_20200522.ico') ?>">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" href="<?= base_url('public/web/dist/font-awesome/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/web/dist/themify-icons/css/themify-icons.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/web/dist/flag-icon-css/css/flag-icon.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/web/dist/selectFX/css/cs-skin-elastic.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/web/dist/jqvmap/dist/jqvmap.min.css')?>">

	<!-- Estilo -->
	<link rel="stylesheet" href="<?= base_url('public/web/css/master.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/web/css/institucional.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/web/css/color.css')?>">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet" type="text/css">

	<!-- FontAwesome -->
	<script src="https://kit.fontawesome.com/b38b06be8b.js" crossorigin="anonymous"></script>

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145578930-4"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-145578930-4');
	</script>

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '2364952650463706');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2364952650463706&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->
</head>
<body class="index-page sidebar-collapse">
<!--	Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-dash_partner">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<a class="navbar-brand" href="<?= base_url()?>"><img style="height: 30px;" src="<?= base_url('public/web/imgs/logos/ad-ooh_logo_white.png')?>" alt="ad-ooh logo branco"></a>
		<!-- Hamburguer Btn-->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link active" href="<?= base_url()?>">Home <span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="<?= base_url('motoristas')?>">Seja um Parceiro</a>
				<a class="nav-item nav-link" href="#contact">Contato</a>
				<a class="nav-item nav-link" href="<?= base_url('admin/login_admin')?>">Login</a>
			</div>
		</div> <!-- /.navbar-collapse -->
	</div><!-- /.container-->
</nav>
<!-- Header -->
<div class="content-wrapper">
	<?php
	if (isset($view)){
		$this->load->view($view);
	}
	?>
</div>
<!--/Header-->
<footer class="footer footer-default">
	<div class="container">
		<nav class="float-left">
			<ul>
				<li>
					<a href="<?= base_url()?>">
						<img style="height: 30px;" src="<?= base_url('public/web/imgs/logos/ad-ooh_logo_color.png')?>" alt="">
					</a>
				</li>
			</ul>
		</nav>
		<div class="copyright float-right">
			&copy;
			ad-ooh
			<script>
				document.write(new Date().getFullYear())
			</script>
		</div>
	</div>
</footer>

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" />
<!-- scripts -->
<script src="<?= base_url('public/web/dist/jquery/dist/jquery.min.js')?>"></script>
<script src="<?= base_url('public/web/dist/popper.js/dist/umd/popper.min.js')?>"></script>
<script src="<?= base_url('public/web/dist/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('public/web/js/main.js')?>"></script>

<script src="<?= base_url('public/web/dist/chart.js/dist/Chart.bundle.min.js')?>"></script>
<script src="<?= base_url('public/web/js/dashboard.js')?>"></script>
<script src="<?= base_url('public/web/js/widgets.js')?>"></script>
<script src="<?= base_url('public/web/dist/jqvmap/dist/jquery.vmap.min.js')?>"></script>
<script src="<?= base_url('public/web/dist/jqvmap/examples/js/jquery.vmap.sampledata.js')?>"></script>
<script src="<?= base_url('public/web/dist/jqvmap/dist/maps/jquery.vmap.world.js')?>"></script>
<script>
	(function($) {
		"use strict";

		jQuery('#vmap').vectorMap({
			map: 'world_en',
			backgroundColor: null,
			color: '#ffffff',
			hoverOpacity: 0.7,
			selectedColor: '#1de9b6',
			enableZoom: true,
			showTooltip: true,
			values: sample_data,
			scaleColors: ['#1de9b6', '#03a9f5'],
			normalizeFunction: 'polynomial'
		});
	})(jQuery);
</script>

<!-- Gmaps -->
<script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoLD_9T-esRyVIc0jkKJ5RQmRO2K-f6WY"></script>
<script src="<?= base_url('public/web/dist/gmaps/gmaps.min.js')?>"></script>
<script src="<?= base_url('public/web/js/init-scripts/gmap/gmap.init.js')?>"></script>

<!--  Chart js -->
<script src="<?= base_url('public/web/dist/chart.js/dist/Chart.bundle.min.js')?>"></script>
<script src="<?= base_url('public/web/js/init-scripts/chart-js/chartjs-init.js')?>"></script>
</body>
</html>
