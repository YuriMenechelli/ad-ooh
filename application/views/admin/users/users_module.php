<section class="content-header">
	<h2>
		<span class="label label-default"><?= $title ?> de Usuários</span>
	</h2>
	<ol class="breadcrumb">
		<li><a href="<?= base_url('admin/home_admin') ?>"><i class="fa fa-th-list"></i> Menu Principal</a></li>
		<?php
		if (isset($nav)){

			echo '<li><a href="'.base_url($nav['link']) .'" title="'.$nav['titulo'].'"><i class="fa fa-book"></i>'. $nav['titulo'] .'</a></li>';

		}
		?>
		<li class="active"><?= $title ?></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<!-- Default box -->
	<form action="<?= base_url('admin/users_admin/core') ?>" method="post" accept-charset="utf-8" class="form-horizontal">
		<?php
		errosValidation();
		getMsg('msgCadastro');
		/*var_dump();*/
		?>
		<div class="box">
			<div class="box-header">
				<div class="box-body">
					<div class="col-lg-4">
						<label for="name">Apelido:</label>
						<input type="text" name="nome" class="form-control" value="<?= ( $dados != NULL ? $dados->username : set_value('nome')) ?>"><br>
					</div>
					<div class="col-lg-4">
						<label for="name">Nome:</label>
						<input type="text" name="primeiro_nome" class="form-control" value="<?= ( $dados != NULL ? $dados->first_name : set_value('primeiro_nome')) ?>"><br>
					</div>
					<div class="col-lg-4">
						<label for="name">Sobrenome:</label>
						<input type="text" name="ultimo_nome" class="form-control" value="<?= ( $dados != NULL ? $dados->last_name : set_value('ultimo_nome')) ?>"><br>
					</div>
					<div class="col-lg-4">
						<label for="name">E-mail:</label>
						<input type="email" name="email"  class="form-control" value="<?= ( $dados != NULL ? $dados->email :  set_value('email')) ?>"><br>
					</div>
					<div class="col-lg-4">
						<label for="name">Senha:</label>
						<input type="password" name="senha" class="form-control"><br>
					</div>
					<div class="col-lg-4">
						<label for="name">Ativo: </label>
						<select name="ativo" class="form-control">
							<?php if( $dados ) { ?>
								<option value="0" <?= ($dados->active == 0 ? 'selected=""' : '') ?>>Não</option>
								<option value="1" <?= ($dados->active == 1 ? 'selected=""' : '') ?>>Sim</option>
							<?php } else { ?>
								<option value="0">Não</option>
								<option value="1" selected="">Sim</option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>
			<?php if( $dados ) { ?>
				<input type="hidden" name="id_user" value="<?= $dados->id ?>">
			<?php } ?>
			<div class="box-footer">
				<div class="box-tools" align="right">
					<a href="<?= base_url('admin/users_admin') ?>" title="Voltar" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
					<button type="submit" title="Salvar" class="btn btn-primary"><i class="fa fa-save"></i> Salvar</button>
				</div>
			</div>
		</div>
	</form>
</section>
