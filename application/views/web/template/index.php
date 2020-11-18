<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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

	<!-- Estilo -->
	<link rel="stylesheet" href="<?= base_url('public/web/css/master.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/web/css/color.css')?>">
	<!--<link rel="stylesheet" href="<?/*= base_url('public/web/css/institucional.css')*/?>">-->

	<!-- Estilo Reports-->
	<link href="<?= base_url('public/web/reports/css/color.css')?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('public/web/reports/css/master.css')?>" rel="stylesheet" type="text/css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet" type="text/css">
	<!-- FontAwesome -->
	<script src="https://kit.fontawesome.com/b38b06be8b.js" crossorigin="anonymous"></script>

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">


	<link href="http://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">

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
<div>
	<?php
	if (isset($view)){
		$this->load->view($view);
	}
	?>
</div>
<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
<!-- scripts -->
<script src="<?= base_url('public/web/js/jquery.min.js')?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('public/admin/dist/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('public/web/js/jquery.mask.min.js')?>"></script>
<script src="<?= base_url('public/web/js/main.js')?>"></script>
<!-- SlimScroll -->
<script src="<?= base_url('public/admin/dist/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js"></script>
<!--Freeco Script-->
<script src="<?= base_url('public/web/reports/js/freeco.js')?>"></script>
<!--OutBack Script-->
<script src="<?= base_url('public/web/reports/js/outback.js')?>"></script>
<!--Mc Donald's Script-->
<script src="<?= base_url('public/web/reports/js/mcdonalds.js')?>"></script>
</body>
</html>
