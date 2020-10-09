	<main class="splashBackground container-fluid py-3">
		<section class="sectionBackground container-fluid py-2">
			<div class="card-header pt-3 px-3 pb-1">
				<h2>Campanha</h2>
				<h1>McDonalds</h1>
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
								<th scope="col">Área</th>
								<th scope="col">Data início</th>
								<th scope="col">Data Final</th>
								<th scope="col">Dias</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td scope="row"></td>
								<td scope="row">Bonificada</td>
								<td scope="row">Área de Circulação</td>
								<td scope="row">São Paulo</td>
								<td scope="row">18/09/2020</td>
								<td scope="row">27/09/2020</td>
								<td scope="row">10</td>
							</tr>
						</tbody>
					</table>
				 </div>
			 </div>
			<div class="row">
				<div class="col-sm-4 py-3">
					<h4 class="text-left">Mapa de Impacto</h4>
					<div class="card p-1">
						<img class="img-fluid rounded m-1" src="<?= base_url('public/web/reports/images/campanhas/202009/mcdonalds_202009_map.png')?>" alt="Imagem do mapa referente a entrega da campanha em questão.">
					</div>
				</div>
				<div class="col-sm-8 py-3">
					<h4 class="text-left">Impacto Estimado</h4>
					<canvas class="card p-3" id="impactoEstimado"></canvas>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 py-3">
					<h4 class="text-left">Tempo de Veiculação</h4>
					<div class="card p-3">
					  <canvas id="tempoVeiculacao"></canvas>
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
								<td>18/09/2020</td>
								<td>7.488</td>
								<td>64.3750</td>
								<!-- <td>682.500</td> -->
								<td>13,20</td>
							</tr>
							<!-- Linha -->
							<tr>
								<td>19/09/2020</td>
								<td>11.232</td>
								<td>75.390</td>
								<!-- <td>682.500</td> -->
								<td>19,80</td>
							</tr>
							<!-- Linha -->
							<tr>
								<td>20/09/2020</td>
								<td>9.984</td>
								<td>106.2210</td>
								<!-- <td>682.500</td> -->
								<td>17,60</td>
							</tr>
							<!-- Linha -->
							<tr>
								<td>21/09/2020</td>
								<td>13.104</td>
								<td>140.517</td>
								<!-- <td>682.500</td> -->
								<td>23,10</td>
							</tr>
							<!-- Linha -->
							<tr>
								<td>22/09/2020</td>
								<td>14.976</td>
								<td>121.549</td>
								<!-- <td>682.500</td> -->
								<td>26,40</td>
							</tr>
							<!-- Linha -->
							<tr>
								<td>23/09/2020</td>
								<td>16.224</td>
								<td>139.331</td>
								<!-- <td>682.500</td> -->
								<td>28,60</td>
							</tr>
							<!-- Linha -->
							<tr>
								<td>24/09/2020</td>
								<td>15.600</td>
								<td>109.221</td>
								<!-- <td>682.500</td> -->
								<td>27,50</td>
							</tr>
							<!-- Linha -->
							<tr>
								<td>25/09/2020</td>
								<td>14.352</td>
								<td>95.577</td>
								<!-- <td>682.500</td> -->
								<td>25,30</td>
							</tr>
							<!-- Linha -->
							<tr>
								<td>26/09/2020</td>
								<td>11.232</td>
								<td>91.176</td>
								<!-- <td>682.500</td> -->
								<td>19,80</td>
							</tr>
							<!-- Linha -->
							<tr>
								<td>27/09/2020</td>
								<td>10.608</td>
								<td>59.270</td>
								<!-- <td>682.500</td> -->
								<td>18,70</td>
							</tr>

						</tbody>
						<tfoot class="thead-color">
							<tr>
								<th scope="col">10 Dias</th>
								<th scope="col">124.800</th>
								<th scope="col">1.002.627</th>
								<!-- <th scope="col">750.000</th> -->
								<th scope="col">220 Horas</th>
							</tr>
						</tfoot>
					</table>
				</div>
 ''			</div>
			<div class="text-center">
				<h4 class="text-left">Check</h4>
					<div class="row">
						<div class="col-1">
							<img class="img-fluid rounded m-1" src="<?= base_url('public/web/reports/images/campanhas/202009/mcdonalds_202009_01.jpg')?>" alt="Imagem de check referente a entrega da campanha em questão.">
						</div>
						<div class="col-1">
							<img class="img-fluid rounded m-1" src="<?= base_url('public/web/reports/images/campanhas/202009/mcdonalds_202009_02.jpg')?>" alt="Imagem de check referente a entrega da campanha em questão.">
						</div>
						<div class="col-1">
							<img class="img-fluid rounded m-1" src="<?= base_url('public/web/reports/images/campanhas/202009/mcdonalds_202009_03.jpg')?>" alt="Imagem de check referente a entrega da campanha em questão.">
						</div>
						<div class="col-1">
							<img class="img-fluid rounded m-1" src="<?= base_url('public/web/reports/images/campanhas/202009/mcdonalds_202009_04.jpg')?>" alt="Imagem de check referente a entrega da campanha em questão.">
						</div>
						<div class="col-1">
							<img class="img-fluid rounded m-1" src="<?= base_url('public/web/reports/images/campanhas/202009/mcdonalds_202009_05.jpg')?>" alt="Imagem de check referente a entrega da campanha em questão.">
						</div>
						<div class="col-1">
							<img class="img-fluid rounded m-1" src="<?= base_url('public/web/reports/images/campanhas/202009/mcdonalds_202009_06.jpg')?>" alt="Imagem de check referente a entrega da campanha em questão.">
						</div>
						<div class="col-1">
							<img class="img-fluid rounded m-1" src="<?= base_url('public/web/reports/images/campanhas/202009/mcdonalds_202009_07.jpg')?>" alt="Imagem de check referente a entrega da campanha em questão.">
						</div>
						<div class="col-1">
							<img class="img-fluid rounded m-1" src="<?= base_url('public/web/reports/images/campanhas/202009/mcdonalds_202009_08.jpg')?>" alt="Imagem de check referente a entrega da campanha em questão.">
						</div>
						<div class="col-1">
							<img class="img-fluid rounded m-1" src="<?= base_url('public/web/reports/images/campanhas/202009/mcdonalds_202009_09.jpg')?>" alt="Imagem de check referente a entrega da campanha em questão.">
						</div>
						<div class="col-1">
							<img class="img-fluid rounded m-1" src="<?= base_url('public/web/reports/images/campanhas/202009/mcdonalds_202009_10.jpg')?>" alt="Imagem de check referente a entrega da campanha em questão.">
						</div>
					</div>
				<h3 class="my-5">Acelere sua mídia ooh conosco e saia na frente dos concorrentes!</h3>
			</div>
		</section>
	</main>
	<footer>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <form class="container form-inline">
	<a href="https://ad-ooh.com/mcdonaldscheckin.mp4" class="btn btn-sm btn-outline-secondary" type="button">Vídeo Check</a>
  </form>
</nav>
	</footer>

	<!-- Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?= base_url('public/web/reports/js/mdb.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('public/web/reports/js/graphs.js')?>"></script>
