<!--	Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-dash_partner">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<a class="navbar-brand" href="<?= base_url()?>"><img style="height: 30px;" src="<?= base_url('public/web/imgs/logos/ad-ooh_logo_white.png')?>" alt="ad-ooh logo branco"></a>
		<!-- Hamburguer Btn-->
		<button class="navbar-toggler"
				type="button" data-toggle="collapse"
				data-target="#navbarNav" aria-controls="navbarNav"
				aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="navbar-collapse navbar-nav ml-auto justify-content-end" id="navbarNav">
			<li class="navbar-nav dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Login
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="<?= base_url('driver_login')?>">Motoristas</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?= base_url('admin/login_admin')?>">Administração</a>
				</div>
			</li>
			<a class="nav-item nav-link active" href="<?= base_url()?>">Home <span class="sr-only">(current)</span></a>
			<a class="nav-item nav-link" href="<?= base_url('motoristas')?>">Seja um Parceiro</a>
			<a  class="nav-item nav-link" href="<?= base_url('contact')?>">
				Contato
			</a>
		</div>
		<!-- /.navbar-collapse -->
	</div><!-- /.container-->
</nav>
<!-- Header -->
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url(<?= base_url('public/web/imgs/logos/herobg.gif')?>);">
	<div class="container-fluid">
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
						<a href="https://www.cadastroad-ooh.com/<?/*= base_url('motoristas')*/?>"><button class="btn btn-primary btn-raised">Cadastre-se</button></a>
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
					<a href="<?= base_url('contact')?>">
						<button class="btn btn-primary btn-raised">
							Escreva uma mensagem
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Header-->
<footer class="footer footer-default">
	<div class="container-fluid">
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
