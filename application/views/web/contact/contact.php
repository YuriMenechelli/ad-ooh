<img src="<?= base_url('public/web/imgs/logos/herobg2.png')?>" class="videoBG">
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
					<h4 class="d-flex align-self-start">Entre em contato</h4>
					<h4 class="align-self-end"></h4>
				</div>
				<form method="POST" enctype="multipart/form-data" accept-charset="utf-8" action="<?= base_url('contact/module')?>">
					<div class="form-content">
						<?php
						errosValidation();
						getMsg('msgCadastro');
						?>
						<h5>Faça seu orçamento com a gente!</h5>
						<div class="form-group row">
							<div class="col-md-12">
								<label for="nome">Nome:</label>
								<input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required="required" name="nome"
								/>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<label for="email">E-mail:</label>
								<input type="email" class="form-control" id="email" placeholder="Digite seu e-mail"
									   required="required" name="email" />
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<label for="phone">Telefone:</label>
								<input type="text" class="form-control input_telefone" placeholder="Digite seu telefone"
									   required="required" name="phone"/>
							</div>
						</div>
						<!--<div class="form-group row">
							<div class="col-md-12">
								<input type="text" class="form-control" placeholder="Assunto:" required="required" name="subject"
								/>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<textarea type="text" class="form-control" id="msg" placeholder="Digite sua mensagem" required="required" name="msg"
								/></textarea>
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
