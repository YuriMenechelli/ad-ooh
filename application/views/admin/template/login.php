<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
	<link rel="shortcut icon" type="image/x-icon" href="https://ad-ooh.com/ad-ooh_logo_pin_20200522.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145578930-4"></script>
	<script src="<?= base_url('public/web/js/login.js')?>"></script>
	<title>ad-ooh - login</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- Estilo -->
	<link rel="stylesheet" href="<?= base_url('public/web/css/color.css')?>">
	<link rel="stylesheet" href="<?= base_url('public/web/css/master.css')?>">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet">

	<!-- FontAwesome -->
	<script src="https://kit.fontawesome.com/b38b06be8b.js" crossorigin="anonymous"></script>
</head>
<body>
<img src="<?= base_url('public/web/imgs/logos/herobg2.png')?>" class="videoBG">
<div class="container-fluid">
	<div class="container form-padding">
		<div class="text-center">
			<a href="<?= base_url()?>">
				<img class="img-fluid" src="<?= base_url('public/web/imgs/logos/ad-ooh_logo_white.png')?>" alt="">
			</a>
		</div>
		<div class="form-box">
			<div class="form-shadow">
				<div class="form-header">
					<h3 class="text-center">Administração Ad-ooh</h3>
				</div>
				<form name="meu_form" method="POST" enctype="multipart/form-data" action="">
					<div class="form-content">
						<?php
						echo validation_errors('<div class="alert alert-danger" role="alert">','</div>');
						echo getMsg('msgLogin');
						?>
						<div class="form-group row">
							<div class="col-md-12">
								<label for="email">Usuário:</label>
								<input type="email" class="form-control" id="email" placeholder="Digite o seu e-mail" name="email" />
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<label for="nome">Senha:</label>
								<input type="password" class="form-control" id="pass" required="required" placeholder="Digite sua senha" name="pass" />
								<!--<small class="d-flex justify-content-end form-link"> <a href="/enviaremail.html">Esqueceu sua senha?</a></small>-->
							</div>
						</div>

					</div>
					<div class="form-footer d-flex justify-content-end">
						<a href="<?= base_url()?>" type="button" class="btn btn-cancel mr-2">Cancelar</a>
						<button type="submit" class="btn btn-send">Entrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
