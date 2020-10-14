	<section class="content-header">
		<h2>
			<?=  '<span class="label label-default"><i class="fa fa-home"></i>'.' ' .$title.'</span>'?>
		</h2>
		<ol class="breadcrumb">
			<li class="active"><a href="<?= base_url('admin/home_admin')?>"><i class="fa fa-home"></i> <?= $breadcrumb_title ?></a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-lg-3 col-xs-6" title="Cadastro de usuários">
				<div class="small-box bg-yellow-gradient">
					<div class="inner">
						<h3><?= $t_users?></h3>

						<p>Registros de usuários</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios-person"></i>
					</div>
					<a href="<?= base_url('admin/users_admin')?>" class="small-box-footer">
						Visualizar usúarios
						<i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div>

			<div class="col-lg-3 col-xs-6" title="Cadastro de campanhas">
				<div class="small-box bg-blue-gradient">
					<div class="inner">
						<h3><?= $t_cp?></h3>

						<p>Registros de campanhas</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios-cart"></i>
					</div>
					<a href="" class="small-box-footer">Visualizar campanhas <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-xs-6" title="Cadastro de Impactos estimados">
				<div class="small-box bg-green-gradient">
					<div class="inner">
						<h3><?= $t_est?></h3>

						<p>Registros de Impactos estimados</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios-speedometer"></i>
					</div>
					<a href="" class="small-box-footer">Visualizar Impactos estimados <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-3 col-xs-6" title="Cadastro de cargos">
				<div class="small-box bg-fuchsia-active">
					<div class="inner">
						<h3><?= $t_air?></h3>

						<p>Registros de tempo de veiculação</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios-clock"></i>
					</div>
					<a href="" class="small-box-footer">Visualizar tempo de veiculação <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-xs-6" title="Cadastro de usuários">
				<div class="small-box bg-aqua-gradient">
					<div class="inner">
						<h3><?= $t_costumer?></h3>
						<p>Registros de clientes</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios-people"></i>
					</div>
					<a href="<?= base_url('admin/costumers_admin')?>" class="small-box-footer">
						Visualizar clientes
						<i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="text-center"><i class="fa fa-user"></i> Usuários</h3>
					</div>
					<div class="box-body">
						<table class="table table-striped table_list_data">
							<thead>
							<tr>
								<th>NOME/SOBRENOME</th>
								<th>E-MAIL</th>
								<th class="text-center">STATUS</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($users as $user):?>
								<tr>
									<td><?= $user->first_name.' '.$user->last_name?></td>
									<td><?= $user->email?></td>
									<td class="text-center"><?= ($user->active == 1 ? '<span class="label label-success">Ativo</span>':'<span class="label label-danger">Inativo</span>')?></td>
								</tr>
							<?php endforeach;?>
							</tbody>
						</table>
					</div>
					<div class="box-footer text-right">
						<a href="<?= base_url('admin/users_admin')?>" class="label label-primary small-box-footer">Mais informações <i class="fa fa-info-circle"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="text-center"><i class="fa fa-users"></i> Clientes</h3>
					</div>
					<div class="box-body">
						<table class="table table-striped table_list_data">
							<thead>
							<tr>
								<th></th>
								<th class="text-center">NOME FANTASIA</th>
								<th class="text-center">STATUS</th>
								<th class="text-right">ACÕES</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($costumers as $co): ?>
								<tr>
									<td><?= $co->id_costumers?></td>
									<td class="text-center"><?= $co->costumer_name?></td>
									<td class="text-center"><?= ($co->active == 1 ? '<span class="label label-success">Ativo</span>':'<span class="label label-danger">Inativo</span>')?></td>
									<td class="text-right">
										<button title="Alterar estatus do cliente" class="btn btn-instagram btn-alterar-status-cliente" data-toggle="modal" data-id-cliente="<?= $co->id_costumers?>"><i class="fa fa-edit"></i> Alterar status</button>
									</td>
								</tr>
							<?php endforeach;?>
							</tbody>
						</table>
					</div>
					<div class="box-footer text-right">
						<a href="<?= base_url('admin/costumers_admin')?>" class="label label-primary  small-box-footer">Mais informações <i class="fa fa-info-circle"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="text-center"><i class="fa fa-shopping-cart"></i> Campanhas</h3>
					</div>
					<div class="box-body">
						<table class="table table-striped table_list_data">
							<thead>
							<tr>
								<th>ID</th>
								<th class="text-center">CLIENTE</th>
								<th class="text-center">TIPO</th>
								<th class="text-center">MODELO</th>
								<th class="text-center">ÁREA</th>
								<th class="text-center">DATA ÍNICIAL</th>
								<th class="text-center">DATA FINAL</th>
								<th class="text-right">CHECKS</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($campaigns as $cp):	?>
								<tr>
									<td><?= $cp->id_campaign?></td>
									<td><?= $cp->costumer_name?></td>
									<td><?= $cp->type?></td>
									<td><?= $cp->model?></td>
									<td><?= $cp->nome?></td>
									<td class="text-center"><?= formatDateView($cp->dt_begin)?></td>
									<td class="text-center"><?= formatDateView($cp->dt_end)?></td>
									<td class="text-right">
										<button title="Checks" class="btn btn-success btn-checks" data-toggle="modal" data-id-campaign="<?= $cp->id_campaign?>"><i class="fa fa-check"></i> Realizar Check</button>
									</td>
								</tr>
							<?php endforeach;?>
							</tbody>
						</table>
					</div>
					<div class="box-footer text-right">
						<a href="<?= base_url('admin/reports_admin/campaigns') ?>" class="label label-primary  small-box-footer">Mais informações <i class="fa fa-info-circle"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="text-center"><i class="fa fa-database"></i> Impactos Estimados</h3>
					</div>
					<div class="box-body">
						<table class="table table-striped table_list_data">
							<thead>
							<tr>
								<th></th>
								<th class="text-center">Datas</th>
								<th class="text-center">Valores</th>
								<th class="text-center">Campanha</th>
							</tr>
							</thead>
							<tbody>
							<?php $order=0;
							foreach ($estimated as $est):
								$order++;
								?>
								<tr>
									<td><?= $order?></td>
									<td class="text-center"><?= $est->Data?></td>
									<td class="text-center"><?= $est->Valores?></td>
									<td class="text-center"><?= $est->Clientes?></td>
								</tr>
							<?php endforeach;?>
							</tbody>
						</table>
					</div>
					<div class="box-footer text-right">
						<a href="<?= base_url('admin/reports_admin/estimated_impact')?>" class="label label-primary  small-box-footer">Mais informações <i class="fa fa-info-circle"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="text-center"><i class="fa fa-battery"></i> Tempo de veiculação</h3>
					</div>
					<div class="box-body">
						<table class="table table-striped table_list_data">
							<thead>
								<tr>
									<th></th>
									<th class="text-center">DATAS</th>
									<th class="text-center">VALORES</th>
									<th class="text-center">CAMPANHA</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($airing as $air): ?>
								<tr>
									<td><?= $air->id?></td>
									<td class="text-center"><?= $air->Data?></td>
									<td class="text-center"><?= $air->Valores?></td>
									<td class="text-center"><?= $air->Clientes?></td>
								</tr>
							<?php endforeach;?>
							</tbody>
						</table>
					</div>
					<div class="box-footer text-right">
						<a href="<?= base_url('admin/reports_admin/airing_hours')?>" class="label label-primary  small-box-footer">Mais informações <i class="fa fa-info-circle"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal_dinamico"></div><!-- /.modal -->

	<div class="modal_dinamico_checks"></div><!-- /.modal -->
