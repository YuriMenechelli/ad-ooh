<section class="content-header">
	<h2>
		<?=  '<span class="label label-default"><i class="fa fa-users"></i>'.' '.$title.'</span>'?>
	</h2>
	<ol class="breadcrumb">
		<li><a href="<?= base_url('admin/home_admin') ?>"><i class="fa fa-th-list"></i> Menu Principal</a></li>
		<li class="active"><?= $title ?></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<!-- Default box -->
	<?php	getMsg('msgCadastro'); ?>
	<div class="box">
		<div class="box-header with-border">

			<div class="row margin-bottom-20">
				<div class="col-md-12 text-right">
					<a href="<?= base_url('admin/users_admin/users_module') ?>" title="Novo" class="btn btn-success"><i class="fa fa-plus-square"></i> Novo</a>
				</div>
			</div> <br>

			<table class="table table-hover table_list_data">
				<thead>
				<tr>
					<th>NOME/SOBRENOME</th>
					<th>E-MAIL</th>
					<th class="text-center">STATUS</th>
					<th class="text-right">OPÇÕES</th>
				</tr>
				</thead>

				<tbody>
				<?php foreach ($users as $user):?>
					<tr>
						<td><?= $user->first_name.' '.$user->last_name?></td>
						<td><?= $user->email?></td>
						<td class="text-center"><?= ($user->active == 1 ? '<span class="label label-success">Ativo</span>':'<span class="label label-danger">Inativo</span>')?></td>
						<td class="text-right">
							<a href="<?= base_url('admin/users_admin/users_module/'. $user->id )?>" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
							<a href="<?= base_url('admin/users_admin/del/'. $user->id )?>" title="Apagar" class="btn btn-danger btn_apagar_registro"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- /.box -->
</section>

