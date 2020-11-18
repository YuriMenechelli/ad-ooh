<img src="<?= base_url('public/web/imgs/logos/hd0933.gif')?>" class="videoBG">
<div class="container-fluid">
	<div class="container form-padding">
		<div class="text-center">
			<a href="index.html">
				<img class="img-fluid" src="<?= base_url('public/web/imgs/logos/ad-ooh_logo_white.png') ?>" alt="">
			</a>
		</div>
		<div class="form-box">
			<div>
				<div class="form-header d-flex justify-content-between">
					<h4 class="d-flex align-self-start">Cadastro de Motorista Ad-ooh</h4>
					<h4 class="align-self-end">3/4</h4>
				</div>
				<form name="meu_form" method="POST" enctype="multipart/form-data" action="">
					<div class="form-content">
						<h5>Documentação</h5>
						<div class="form-group row py-2">
							<div class="col-md-6">
								<label for="foto_perfil">Adicione uma foto de perfil.</label>
								<input type="file" accept="image/*" name="foto_perfil" class="form-control-file" id="foto_perfil">
							</div>
							<div class="col-md-6">
								<small>
									<ul>
										<li>1. A imagem deve mostrar o rosto todo e a parte de cima dos ombros;</li>
										<li>2. Não use óculos escuros e chapéu;</li>
										<li>3. Fotografe em local bem iluminado.</li>
									</ul>
								</small>
							</div>
						</div>
						<div class="dropdown-divider py-2"></div>
						<div class="form-group row">
							<div class="col-md-6">
								<label for="foto_cnh">Imagem da Carteira Nacional de Habilitação com EAR - CNH</label>
								<input type="file" accept="image/*" name="foto_cnh" class="form-control-file" id="foto_cnh">
							</div>
							<div class="col-md-6">
								<small>
									<ul>
										<li><strong>Lembre-se, é preciso que o documento:</strong></li>
										<li>1. Seja como na imagem ao lado;</li>
										<li>2. Esteja aberto;</li>
										<li>3. Tenha todos os campos visíveis;</li>
										<li>4. Tenha a observação Exerce Atividade Remunerada (EAR).</li>
										<br>
										<li>Caso não tenha, consulte o Detran local e resolva no mesmo dia.</li>
										<li>Obs: a Permissão para Dirigir não é válida.</li>
									</ul>
								</small>
							</div>
						</div>
						<div class="dropdown-divider py-2"></div>
						<div class="form-group row">
							<div class="col-md-6">
								<label for="foto_comprovante_residencia">Imagem do comprovante de residência</label>
								<input name="foto_comprovante_residencia" accept="image/*" type="file" class="form-control-file" id="foto_comprovante_residencia">
							</div>
							<div class="col-md-6">
								<small>
									<ul>
										<li>Verifique se todos os detalhes estão legíveis;</li>
										<li>Um comprovante de no máximo 90 dias;</li>
										<br>
										<li>Ex: Conta luz, conta de água, conta de gás, conta de internet, conta de celular, fatura de cartão, etc.</li>
									</ul>
								</small>
							</div>
						</div>

						<div class="dropdown-divider py-2"></div>
						<div class="form-group row">
							<div class="col-md-6">
								<label for="foto_crlv">Imagem do Certificado de Registro e Licenciamento de Veículo - CRLV</label>
								<input name="foto_crlv" accept="image/*" type="file" class="form-control-file" id="foto_crlv">
							</div>
							<div class="col-md-6">
								<small>
									<ul>
										<li><strong>Lembre-se, é preciso que: </strong></li>
										<li>1. A foto mostre o documento inteiro, como na imagem abaixo;</li>
										<li>2. Todos os campos estejam legíveis.</li>
									</ul>
								</small>
							</div>
						</div>
					</div>
					<div class="form-footer d-flex justify-content-end">
						<button type="submit" class="btn btn-send">Avançar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
