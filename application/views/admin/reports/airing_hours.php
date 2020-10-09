
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
	<?php	getMsg('msgCadastro'); ?>
	<div class="box">
		<div class="box-header with-border">

			<div class="row margin-bottom-20">
				<div class="col-md-12 text-right">
					<a href="<?= base_url('admin/reports/modulo') ?>" title="Novo" class="btn btn-success"><i class="fa fa-plus-square"></i> Novo</a>
				</div>
			</div> <br>

			<table class="table table-hover table_list_data">
				<thead>
				<tr>
					<th class="text-center">Datas</th>
					<th class="text-center">Valores</th>
					<th class="text-center">Campanha</th>
					<th class="text-right">OPÇÕES</th>
				</tr>
				</thead>

				<tbody>
				<?php foreach ($airing as $air):?>
					<tr>
						<td class="text-center"><?= $air->Data?></td>
						<td class="text-center"><?= $air->Valores?></td>
						<td class="text-center"><?= $air->Clientes?></td>
						<td class="text-right">
							<a href="<?/*= base_url('admin/reports_admin/campaigns_module/'. $cp->id_campaign )*/?>" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
							<a href="<?/*= base_url('admin/reports_admin/campaigns_del/'. $cp->id_campaign )*/?>" title="Apagar" class="btn btn-danger btn_apagar_registro"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</section>
