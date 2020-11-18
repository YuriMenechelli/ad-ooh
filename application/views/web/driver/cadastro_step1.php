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
					<h4 class="d-flex align-self-start">Cadastro de Motorista Ad-ooh</h4>
					<h4 class="align-self-end">1/4</h4>
				</div>
				<form name="meu_form" method="POST" enctype="multipart/form-data" action="">
					<div class="form-content">
						<h5>Usuário</h5>
						<div class="form-group row">
							<div class="col-md-4">
								<label for="nome">Nome completo:</label>
								<input type="text" class="form-control" id="nome" required="required" placeholder="Digite seu nome completo" name="nome" />
							</div>
							<div class="col-md-4">
								<label for="email">E-mail:</label>
								<input type="email" class="form-control" id="email" placeholder="Digite o seu e-mail" required="required"
									   name="email" />
							</div>
							<div class="col-md-4">
								<label for="celular">Celular:</label>
								<input type="tel" class="input_telefone form-control" id="celular" placeholder="(00) 00000 0000" required="required"
									   name="celular" />
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6">
								<label for="rg">RG:</label>
								<input type="text" class="form-control" id="rg" placeholder="000.000.000-0" required="required" name="rg" />
							</div>
							<div class="col-md-6">
								<label for="cnh">CNH:</label>
								<input type="text" class="form-control" id="cnh" placeholder="000.000.000-0" required="required" name="cnh" />
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6">
								<label for="cidade">Residente de:</label>
								<input type="text" class="form-control" id="cidade" placeholder="Digite a cidade onde mora" required="required" name="cidade" />
							</div>
							<div class="col-md-6">
								<label for="data_nascimento">Data de Nascimento:</label>
								<div class="row">
									<div class="col-md-4">
										<input type="number" class="form-control" id="day" maxlength="2" placeholder="DD" required="required" />
									</div>
									<div class="col-md-4">
										<input type="number" class="form-control" id="month" maxlength="2" placeholder="MM" required="required" />
									</div>
									<div class="col-md-4">
										<input type="number" class="form-control" id="year" maxlength="4" placeholder="AAAA" required="required" />
									</div>
								</div>
								<input type="hidden" class="form-control" id="data_nascimento" name="data_nascimento" />
							</div>
						</div>
					</div>
					<div class="form-footer d-flex justify-content-end">
						<a href="<?= base_url('cadastro/passo_2')?>" type="submit" class="btn btn-send">Avançar</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
