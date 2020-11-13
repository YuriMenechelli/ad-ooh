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

			<!--<div class="row margin-bottom-20">
				<div class="col-md-12 text-right">
					<a href="<?/*= base_url() */?>" title="Novo" class="btn btn-success"><i class="fa fa-plus-square"></i> Novo</a>
				</div>
			</div> <br>-->

			<table class="table table-hover table_list_data adicionar">
				<thead>
				<tr>
					<th>ID</th>
					<th>NOME COMPLETO</th>
					<th>TELEFONE</th>
					<th>E-MAIL</th>
					<th class="text-center">DATA DO CONTATO</th>
				</tr>
				</thead>

				<tbody>
				<?php foreach ($contact as $c):?>
					<tr>
						<td><?= $c->id_contact?></td>
						<td><?= $c->name?></td>
						<td><?= $c->phone?></td>
						<td><?= $c->email?></td>
						<td class="text-center"><?= date('d/m/Y \á\s H:i:s',strtotime($c->dt_inc)) ?></td><?/*= date('d/m/Y H:i:s',strtotime($c->dt_inc)) */?>
					</tr>
				<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- /.box -->
</section>


