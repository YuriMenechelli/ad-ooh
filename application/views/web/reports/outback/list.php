<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Ad-ooh</title>
	<meta name="description" content="Página inicial da ad-ooh, uma startup brasileira expecializada em mídia externa. Pode interessar: Renda extra, motoristas de aplicativo, uber, 99 taxi, Cabify, agências de publicidade e anúnciantes.">
	<!-- Header -->
	<?php include_once ('header.php'); ?>
</head>
<body>
<main class="splashBackground container-fluid py-3">
	<section class="sectionBackground container-fluid py-2">
		<div class="card-header pt-3 px-3 pb-1">
			<h2>Campanha</h2>
			<h1>Outback</h1>
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
						<td scope="row">Itaim / Pinheiros / Vila Olímpia / FariaLima</td>
						<td scope="row">22/10/2020</td>
						<td scope="row">28/10/2020</td>
						<td scope="row">7</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 py-3">
				<h4 class="text-left">Mapa de Impacto</h4>
				<div class="card p-1">
					<img class="img-fluid rounded m-1" src="assets/images/campanhas/202009/mcdonalds_202009_map.png" alt="Imagem do mapa referente a entrega da campanha em questão.">
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
						<td>22/10/2020</td>
						<td>7.488</td>
						<td>64.3750</td>
						<!-- <td>682.500</td> -->
						<td>13,20</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>23/10/2020</td>
						<td>11.232</td>
						<td>75.390</td>
						<!-- <td>682.500</td> -->
						<td>19,80</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>24/10/2020</td>
						<td>9.984</td>
						<td>106.2210</td>
						<!-- <td>682.500</td> -->
						<td>17,60</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>25/10/2020</td>
						<td>13.104</td>
						<td>140.517</td>
						<!-- <td>682.500</td> -->
						<td>23,10</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>26/10/2020</td>
						<td>14.976</td>
						<td>121.549</td>
						<!-- <td>682.500</td> -->
						<td>26,40</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>27/10/2020</td>
						<td>16.224</td>
						<td>139.331</td>
						<!-- <td>682.500</td> -->
						<td>28,60</td>
					</tr>
					<!-- Linha -->
					<tr>
						<td>28/10/2020</td>
						<td>15.600</td>
						<td>109.221</td>
						<!-- <td>682.500</td> -->
						<td>27,50</td>
					</tr>
					</tbody>
					<tfoot class="thead-color">
					<tr>
						<th scope="col">7 Dias</th>
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
					<img class="img-fluid rounded m-1" src="assets/images/campanhas/202010/outback_202010_01.jpg" alt="Imagem de check referente a entrega da campanha em questão.">
				</div>
			</div>
			<h3 class="my-5">Acelere sua mídia externa conosco e saia na frente dos concorrentes!</h3>
		</div>
	</section>
</main>
<footer>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
		<form class="container form-inline">
			<a href="https://ad-ooh.com/outback_202010.mp4" class="btn btn-sm btn-outline-secondary" type="button">Vídeo Check</a>
		</form>
	</nav>
</footer>

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/mdb.min.js"></script>

<!-- Gráficos -->
<script>
	//line
	var ctxL = document.getElementById("tempoVeiculacao").getContext('2d');
	var myLineChart = new Chart(ctxL, {
		type: 'line',
		data: {
			labels: ["22/10/2020", "23/10/2020", "24/10/2020", "25/10/2020", "26/10/2020", "27/10/2020", "28/10/2020"],
			datasets: [{
				label: "Horas de Veículação",
				data: [13.20, 19.80, 17.60, 23.10, 26.40, 28.60, 27.50],
				backgroundColor: ['rgba(255, 0, 88, .25)'],
				borderColor: ['rgba(255, 0, 88, 1)'],
				borderWidth: 1
			},{
				label: "",
				data: [1, 1, 1, 1, 1, 1, 1,],
				backgroundColor: ['rgba(255, 0, 88, 0)'],
				borderColor: ['rgba(255, 0, 88, 0)'],
				borderWidth: 1
			},{
				label: "",
				data: [23, 23, 23, 23, 23, 23, 23,],
				backgroundColor: ['rgba(255, 0, 88, 0)'],
				borderColor: ['rgba(255, 0, 88, 0)'],
				borderWidth: 1
			}]
		},
		options: {
			responsive: true,
		}
	});
	//Impacto Estimado
	var ctxL = document.getElementById("impactoEstimado").getContext('2d');
	var myLineChart = new Chart(ctxL, {
		type: 'line',
		data: {
			labels: ["18/09/2020", "19/09/2020", "20/09/2020", "21/09/2020", "22/09/2020", "23/09/2020", "24/09/2020", "25/09/2020", "26/09/2020", "27/09/2020"],
			datasets: [{
				label: "Impactos Estimados",
				data: [64.375, 75.390, 106.221, 140.517, 121.549, 139.331, 109.221],
				backgroundColor: ['rgba(255, 0, 88, .25)'],
				borderColor: ['rgba(255, 0, 88, 1)'],
				borderWidth: 1
			}
				// ,
				// {
				// 	label: "Celulares Ativos na Área (Powered by The Future Media)",
				// 	data: [682.500, 787.500, 945.000, 997.500, 525.000, 630.000, 682.500],
				// 	backgroundColor: ['rgba(50, 95, 140,0.1)'],
				// 	borderColor: ['rgba(50, 95, 140, 1)'],
				// 	borderWidth: 1
				// }
			]
		},
		options: {
			responsive: true
		}
	});

	//bar Alcance por Hora
	var ctxL = document.getElementById("alcancePorHora").getContext('2d');
	var myLineChart = new Chart(ctxL, {
		type: 'line',
		data: {
			labels: ["0h", "1h", "2h", "3h", "4h", "5h", "6h", "7h", "8h", "9h", "10h", "11h", "12h", "13h", "14h", "15h", "16h", "17h", "18h", "19h", "20h", "21h", "22h", "23h"],
			datasets: [{
				label: '17/09/2020',
				data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,6,7,8,8,7,3,0,0,0,0],
				backgroundColor: 'rgba(255, 0, 88, .1)',
				borderColor: 'rgba(255,0,88,.8)',
				borderWidth: 1
			},{
				label: '18/09/2020',
				data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,4,4,4,4,3,0,0,0,0,0],
				backgroundColor: 'rgba(255, 0, 88, .1)',
				borderColor: 'rgba(255,0,88,.8)',
				borderWidth: 1
			},{
				label: '19/09/2020',
				data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,3,3,3,3,2,0,0,0,0,0],
				backgroundColor: 'rgba(255, 0, 88, .1)',
				borderColor: 'rgba(255,0,88,.8)',
				borderWidth: 1
			},{
				label: '22/09/2020',
				data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,12,14,14,12,0,0,0,0,0,0],
				backgroundColor: 'rgba(255, 0, 88, .1)',
				borderColor: 'rgba(255,0,88,.8)',
				borderWidth: 1
			},{
				label: '23/09/2020',
				data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,6,10,14,16,16,12,5,0,0,0,0,0],
				backgroundColor: 'rgba(255, 0, 88, .1)',
				borderColor: 'rgba(255,0,88,.8)',
				borderWidth: 1
			},{
				label: '24/09/2020',
				data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,7,12,16,16,16,15,3,0,0,0,0,0],
				backgroundColor: 'rgba(255, 0, 88, .1)',
				borderColor: 'rgba(255,0,88,.8)',
				borderWidth: 1
			},{
				label: '25/09/2020',
				data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
				backgroundColor: 'rgba(255, 0, 88, .1)',
				borderColor: 'rgba(255,0,88,.8)',
				borderWidth: 1
			}]
		},
		options: {
			legend: false,

			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>

</body>
</html>
