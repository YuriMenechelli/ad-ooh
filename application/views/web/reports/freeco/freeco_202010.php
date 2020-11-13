<main class="splashBackground container-fluid py-3">
	<section class="sectionBackground container-fluid py-2">
		<div class="card-header pt-3 px-3 pb-1">
			<h2>Campanha</h2>
			<h1>Freeco</h1>
		</div>
		<div class="text-center py-3">
			<h4 class="text-left">Dados da Campanha</h4>
			<div class="table-responsive rounded">
				<table class="table table-striped table-sm table-hover">
					<thead class="thead-color">
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Tipo</th>
						<th scope="col">Modelo</th>
						<th scope="col">Objetivo</th>
						<th scope="col">Área</th>
						<th scope="col">Data início</th>
						<th scope="col">Data Final</th>
						<th scope="col">Dias</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td scope="row">1</td>
						<td scope="row">Bonificada</td>
						<td scope="row">Área de Circulação</td>
						<td scope="row">Awareness</td>
						<td scope="row">Vila Mariana / Jardim Paulista </td>
						<td scope="row">22/10/2020</td>
						<td scope="row">30/10/2020</td>
						<td scope="row">9</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 py-3">
				<h4 class="text-left">Mapa de Impacto</h4>
				<div class="card p-1">
					<img class="img-fluid rounded m-1" src="<?= base_url('public/web/imgs/campanhas/freeco/202010_1/freeco_202010_map.jpeg') ?>" alt="Vila Mariana">
					<!--<div id="mapSlider" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
							</div>
						</div>
					</div>-->
				</div>
			</div>
			<div class="col-sm-8 py-3">
				<h4 class="text-left">Impacto Estimado</h4>
				<canvas class="card p-3" id="impactoEstimadoFreeco"></canvas>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 py-3">
				<h4 class="text-left">Tempo de Veiculação</h4>
				<div class="card p-3">
					<canvas id="tempoVeiculacaoFreeco"></canvas>
				</div>
			</div>
			<!-- <div class="col-sm-6 py-3">
				<h4 class="text-left">Alcance por hora</h4>
				<canvas class="card p-3" id="alcancePorHora"></canvas>
			</div> -->
		</div>
		<div class="text-center">
			<h4 class="text-left">Resultados da Campanha</h4>
			<div class="table-responsive rounded">
				<table class="table table-striped table-sm table-hover">
					<thead class="thead-color">
					<tr>
						<th scope="col">Data</th>
						<th scope="col">Inserções</th>
						<th scope="col">Impacto Estimado</th>
						<!-- <th scope="col">Celulares Ativos/Dia</th> -->
						<th scope="col">Tempo de Veículação (em horas)</th>
					</tr>
					</thead>
					<tbody>
					<!-- Linha -->
					<tr>
						<td>22/10/2020</td>
						<td>4.081</td>
						<td>21.010</td>
						<!-- <td>682.500</td> -->
						<td>17,00</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>23/10/2020</td>
						<td>3.754</td>
						<td>24.650</td>
						<!-- <td>682.500</td> -->
						<td>15,64</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>24/10/2020</td>
						<td>3.101</td>
						<td>29.844</td>
						<!-- <td>682.500</td> -->
						<td>12,92</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>25/10/2020</td>
						<td>2.448</td>
						<td>15.541</td>
						<!-- <td>682.500</td> -->
						<td>10,20</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>26/10/2020</td>
						<td>3.591</td>
						<td>20.965</td>
						<!-- <td>682.500</td> -->
						<td>14,96</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>27/10/2020</td>
						<td>3.917</td>
						<td>32.559</td>
						<!-- <td>682.500</td> -->
						<td>16,32</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>28/10/2020</td>
						<td>4.081</td>
						<td>21.051</td>
						<!-- <td>682.500</td> -->
						<td>17,00</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>29/10/2020</td>
						<td>3.754</td>
						<td>31.257</td>
						<!-- <td>682.500</td> -->
						<td>15,64</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>30/10/2020</td>
						<td>3.917</td>
						<td>29.373</td>
						<!-- <td>682.500</td> -->
						<td>16,32</td>
					</tr>
					</tbody>
					<tfoot class="thead-color">
					<tr>
						<th scope="col">9 Dias</th>
						<th scope="col">32.645</th>
						<th scope="col">226.250</th>
						<!-- <th scope="col">750.000</th> -->
						<th scope="col">136 Horas</th>
					</tr>
					</tfoot>
				</table>
			</div>
		</div>
		<div class="row">
		<div class="col-sm-12 py-3">
			<h4 class="text-left">Check</h4>
		</div>
				<div class="col-md-1">
					<img class="img-fluid rounded m-1" src="<?= base_url('public/web/imgs/campanhas/freeco/202010_1/freeco_1.jpeg') ?>" alt="Imagem de check referente a entrega da campanha em questão.">
				</div>
				<div class="col-md-1">
					<img class="img-fluid rounded m-1" src="<?= base_url('public/web/imgs/campanhas/freeco/202010_1/freeco_2.jpeg') ?>" alt="Imagem de check referente a entrega da campanha em questão.">
				</div>
				<div class="col-md-1">
					<img class="img-fluid rounded m-1" src="<?= base_url('public/web/imgs/campanhas/freeco/202010_1/freeco_3.jpeg') ?>" alt="Imagem de check referente a entrega da campanha em questão.">
				</div>
				<div class="col-md-1">
					<img class="img-fluid rounded m-1" src="<?= base_url('public/web/imgs/campanhas/freeco/202010_1/freeco_4.jpeg') ?>" alt="Imagem de check referente a entrega da campanha em questão.">
				</div>
				<div class="col-md-1">
					<img class="img-fluid rounded m-1" src="<?= base_url('public/web/imgs/campanhas/freeco/202010_1/freeco_5.jpeg') ?>" alt="Imagem de check referente a entrega da campanha em questão.">
				</div>
		</div>
			<div class="row">
				<div class="col-sm-12 py-3">
					<h4 class="text-left">Video Check</h4>
				</div>
				<div class="col-md-1">
					<video class="img-fluid rounded m-1" controls>
						<source src="<?= base_url('public/web/videos/freeco/202010_1/freeco_202010_01.mp4'); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
					</video>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<small>clique duas vezes no video para expandir.</small>
				</div>
			</div>
		<div class="row">
			<div class="col-sm-12 py-3">
				<h3 class="text-center">Acelere sua mídia ooh conosco e saia na frente!</h3>
			</div>
		</div>
		</div>
	</section>
</main>
