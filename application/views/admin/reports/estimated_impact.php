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
					<th class="text-center">1° Dia</th>
					<th class="text-center">2° Dia</th>
					<th class="text-center">3° Dia</th>
					<th class="text-center">4° Dia</th>
					<th class="text-center">5° Dia</th>
					<th class="text-center">6° Dia</th>
					<th class="text-center">7° Dia</th>
					<th class="text-center">8° Dia</th>
					<th class="text-center">9° Dia</th>
					<th class="text-center">10° Dia</th>
					<th class="text-right">OPÇÕES</th>
				</tr>
				</thead>

				<tbody>

				</tbody>
			</table>
		</div>
	</div>
</section>
