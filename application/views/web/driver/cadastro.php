<img src="<?= base_url('public/web/imgs/logos/hd0933.gif')?>" class="videoBG">
<div class="container-fluid">
	<div class="container form-padding">
		<div class="text-center">
			<a href="<?= base_url()?>">
				<img class="img-fluid" src="<?= base_url('public/web/imgs/logos/ad-ooh_logo_white.png') ?>" alt="">
			</a>
		</div>
		<div class="form-box">
			<div>
				<div class="form-header d-flex justify-content-between">
					<h4 class="d-flex align-self-start">Faça seu primeiro cadastro</h4>
					<h4 class="align-self-end"></h4>
				</div>
				<form name="meu_form" method="POST" enctype="multipart/form-data" action="">
					<div class="form-content">
						<h5>Primeiro cadastro</h5>
						<div class="form-group row">
							<div class="col-md-6">
								<label for="nome">Nome:</label>
								<input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required="required" name="nome"
								/>
							</div>
							<div class="col-md-6">
								<label for="sobrenome">Sobrenome:</label>
								<input type="text" class="form-control" id="sobrenome" placeholder="Digite seu sobrenome" required="required" name="sobrenome" />
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6">
								<label for="phone">Telefone:</label>
								<input type="text" class="phone form-control" id="phone" placeholder="Digite seu telefone"
									   required="required" name="phone" onkeypress="return somenteNumeros(event)" />
							</div>
							<div class="col-md-6">
								<label for="email">E-mail:</label>
								<input type="email" class="form-control" id="email" placeholder="Digite seu e-mail"
									   required="required" name="email" />
							</div>
						</div>
						<!--<div class="form-group row">
							<div class="col-md-6">
								<label for="insulfilm">Local do Insulfilm:</label>
								<select name="insulfilm" id="insulfilm" class="form-control">
									<option>Nenhum</option>
									<option>Traseiro</option>
									<option>Laterais</option>
									<option>Traseiro e laterais</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="tipo_insulfilm">Tipo do Insulfilm:</label>
								<select name="tipo_insulfilm" id="tipo_insulfilm" class="form-control">
									<option>Nenhum</option>
									<option>G5</option>
									<option>G20</option>
									<option>G30</option>
									<option>G50</option>
									<option>G70</option>
								</select>
							</div>
						</div>-->
					</div>
					<div class="form-footer d-flex justify-content-end">
						<input type="hidden" name="id_user" value="">
						<button type="submit" class="btn btn-send">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
