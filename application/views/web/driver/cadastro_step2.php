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
					<h4 class="align-self-end">2/4</h4>
				</div>
				<form name="meu_form" method="POST" enctype="multipart/form-data" action="/salvar.php">
					<div class="form-content">
						<h5>Veículo</h5>
						<div class="form-group row">
							<div class="col-md-6">
								<label for="veiculo">Veículo:</label>
								<input type="text" class="form-control" id="veiculo" placeholder="Digite seu veiculo" required="required" name="veiculo" />
							</div>
							<div class="col-md-6">
								<label for="marca">Marca:</label>
								<input type="text" class="form-control" id="marca" placeholder="Digite a modelo" required="required" name="marca" />
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-4">
								<label for="placa">Cidade do Veículo:</label>
								<input type="text" class="form-control" id="veiculo_cidade" placeholder="Digite a cidade do veículo"
									   required="required" name="veiculo_cidade" />
							</div>
							<div class="col-md-4">
								<label for="placa">Placa:</label>
								<input type="text" class="form-control" id="placa" placeholder="Digite sua placa"
									   required="required" name="placa" />
							</div>
							<div class="col-md-4">
								<label for="ano">Ano:</label>
								<input type="text" class="form-control" id="ano" placeholder="Digite o ano" required="required"
									   name="ano" />
							</div>
						</div>
						<div class="form-group row">
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
