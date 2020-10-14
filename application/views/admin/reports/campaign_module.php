<section class="content-header">
	<h2>
		<?=  '<span class="label label-default">'.$title.'</span>'?>
	</h2>
	<ol class="breadcrumb">
		<li><a href="<?= base_url('admin/home_admin') ?>"><i class="fa fa-th-list"></i> Principal</a></li>
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
	<form action="<?= base_url('admin/reports_admin/campaigns_core') ?>" method="post" accept-charset="utf-8" class="form-horizontal">
		<?php
		errosValidation();
		getMsg('msgCadastro');

		/*if ($cidades) {
			var_dump($cidades[5094]);
		}*/
		?>
		<div class="box">
			<div class="box-header">
				<div class="box-body">
					<div class="col-lg-4">
						<label for="name">Clientes: </label>
						<select name="costumer_id" class="form-control">
							<option></option>
							<?php foreach ( $costumer as $co ) { ?>
								<?php if ( $dados ) { ?>
									<option value="<?= $co->id_costumers ?>"<?= ($co->id_costumers == $dados->costumer_id ? 'selected=""' : '') ?>><?= $co->costumer_name?></option>
								<?php }else { ?>
									<option value="<?= $co->id_costumers?>"><?= $co->costumer_name ?></option>
								<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="col-lg-4">
						<label for="name">Tipo:</label>
						<input type="text" name="type" class="form-control" value="<?= ( $dados != NULL ? $dados->type : set_value('type'))?>"><br>
					</div>
					<div class="col-lg-4">
						<label for="name">Modelo:</label>
						<input type="text" name="model" class="form-control" value="<?= ( $dados != NULL ? $dados->model : set_value('model'))?>"><br>
					</div>
					<div class="col-lg-4">
						<label for="name">Área: </label>
						<select name="area_id" class="form-control">
							<option></option>
							<?php foreach ( $cidades as $c ) { ?>
								<?php if ( $dados ) { ?>
									<option value="<?= $c->id_cidades ?>"<?= ($c->id_cidades == $dados->area_id ? 'selected=""' : '') ?>><?= $c->nome?></option>
								<?php }else { ?>
									<option value="<?= $c->id_cidades?>"><?= $c->nome ?></option>
								<?php } ?>
							<?php } ?>
						</select>
					</div>
					<div class="col-lg-4">
						<label for="dt_ini">Data ínicio:</label>
						<input type="date" name="dt_begin" class="form-control" value="<?= ( $dados != NULL ? $dados->dt_begin : set_value('dt_begin'))?>"><br>
					</div>
					<div class="col-lg-4">
						<label for="dt_fim">Data Final:</label>
						<input type="date" name="dt_end" class="form-control" value="<?= ( $dados != NULL ? $dados->dt_end : set_value('dt_end'))?>"><br>
					</div>
					<div class="form-group">
						<div class="col-sm-10" >
							<?php if ($photos){ ?>
								<?php foreach ($photos as $pic){ ?>
									<div class="col-sm-3 img_photo_check">
										<img src="<?= base_url('uploads/'.$pic->photos_check) ?>" alt="">
										<input type="hidden" value="<?= $pic->photos_check ?>" name="photos_checks[]">
										<a href="#" class="btn btn-danger btn-apagar-checks"><i class="glyphicon glyphicon-trash"></i> Apagar Foto</a>
									</div>
								<?php } // FIM do FOREACH?>
							<?php } // FIM do IF?>
						</div>
					</div>
				</div>
			</div>

			<?php if( $dados ) { ?>
				<input type="hidden" name="id_campaign" value="<?= $dados->id_campaign ?>">
			<?php } ?>
			<div class="box-footer">
				<div class="box-tools" align="right">
					<a href="<?= base_url('admin/reports_admin/campaigns') ?>" title="Voltar" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Voltar</a>
					<button type="submit" title="Salvar" class="btn btn-primary"><i class="fa fa-save"></i> Salvar</button>
				</div>
			</div>
		</div>
	</form>
</section>
