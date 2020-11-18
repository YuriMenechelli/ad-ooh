<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('public/web/imgs/icons/ad-ooh_logo_pin_20200522.ico') ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145578930-4"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-145578930-4');
	</script>
	<title><?=$title?></title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- Estilo -->
	<link rel="stylesheet" href="<?= base_url('public/web/partner/css/master.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/web/partner/css/color.css')?>">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet">

	<!-- FontAwesome -->
	<script src="https://kit.fontawesome.com/b38b06be8b.js" crossorigin="anonymous"></script>

</head>
<body class="bg-light">

<div class="content-wrapper">
	<?php
	if (isset($view)){
		$this->load->view($view);
	}
	?>
</div>
<!-- Bootstrap -->
<script src="<?= base_url('public/web/js/jquery.min.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
	  rel="stylesheet" />
<!-- JS -->
<script>
	$("#ano").datepicker({
		format: "yyyy",
		viewMode: "years",
		minViewMode: "years"
	});

	function sendData() {
		var term = $('#term');
		if (term.is(':checked')) return true

		alert('Por favor, aceite os termos de checagem de antecedentes!');
		return false;
	}

	$('form').on('submit', sendData);

</script>
</body>
</html>
