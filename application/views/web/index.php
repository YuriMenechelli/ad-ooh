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
	<title>ad-ooh</title>
	<meta name="description" content="ad-ooh">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- ICO-->
	<link rel="shortcut icon" type="image/x-icon" href="https://ad-ooh.com/ad-ooh_logo_pin_20200522.ico">

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
				<a class="nav-item nav-link" href="motorista.html">Seja um Parceiro</a>
				<a class="nav-item nav-link" href="#contact">Contato</a>
				<a class="nav-item nav-link" href="<?= base_url('admin/login_admin')?>">Login</a>
			</div>
		</div> <!-- /.navbar-collapse -->
	</div><!-- /.container-->
</nav>
<!-- Header -->
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url(<?= base_url('public/web/imgs/logos/herobg.gif')?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto">
				<div class="brand">
					<img src="<?= base_url('public/web/imgs/logos/ad-ooh_logo_white.png')?>" alt="">
					<h3>INOVAÇÃO - MÍDIA - MOVIMENTO</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="about" class="main main-raised">
	<div class="container">
		<div class="section text-center">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto">
					<h2 class="title">Anuncie em qualquer lugar a qualquer hora!</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="section-tabs">
		<div class="container">
			<div class="section text-center">
				<div class="features">
					<div class="row">
						<div class="col-md-4">
							<div class="info">
								<div class="icon icon-info">
									<i class="material-icons">track_changes</i>
								</div>
								<h4 class="info-title">Impacto</h4>
								<p>Sua marca sempre em movimento, exibida 24h pelas ruas, acompanhando o infinito deslocamento urbano.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="info">
								<div class="icon icon-success">
									<i class="material-icons">store_mall_directory</i>
								</div>
								<h4 class="info-title">Inovação</h4>
								<p>Conecta o anunciante com o seu consumidor no lugar certo na hora certa.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="info">
								<div class="icon icon-danger">
									<i class="material-icons">map</i>
								</div>
								<h4 class="info-title">Alcance</h4>
								<p>Um modelo novo de anúncio que utiliza o engajamento das ruas.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="section text-center">
			<div class="feature">
				<div class="row">
					<div id="trade" class="col-md-12">
						<h2 class="title">Cobertura</h2>
						<h3 class="my-5 textMainColor">Já estamos em todas as capitais do Brasil.</h3>
						<!-- <h5 class="description">Vendemos o compromisso de levar conteÃºdo de qualidade Ã s pessoas durante o seu dia. Nossas telas interativas possibilitam uma infinidade de aÃ§Ãµes de marketing, dessa forma conseguimos entregar formatos diferentes de publicidade aos nossos clientes. No decorrer do dia, a AD-OOH pode estar presente em diversos momentos no deslocamento de milhares de pessoas pelas cidades.</h5> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-tabs">
		<div class="container">
			<div class="section text-center">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title">Seja um motorista parceiro</h2>
						<h5 class="description">Saiba como ganhar dinheiro junto com a ad-ooh.</h5>
						<a href="https://www.cadastroad-ooh.com/"><button class="btn btn-primary btn-raised">Cadastre-se</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="contact" class="container">
		<div class="section text-center">
			<div class="row">
				<div class="col-md-12">
					<h2 class="title">Contato</h2>
					<h5 class="description">Whatsapp: +55 11 992337015</h5>
					<a href="mailto: cadastro@ad-ooh.com">
						<button class="btn btn-primary btn-raised">
							Escreva uma mensagem
						</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
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
