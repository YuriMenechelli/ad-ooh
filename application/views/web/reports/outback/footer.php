<footer>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
		<form class="container form-inline">
			<a href="<?= base_url('video_check')?>" class="btn btn-sm btn-outline-secondary" type="button">Vídeo Check</a>
		</form>
	</nav>
</footer>

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="<?= base_url('public/web/reports/outback/js/mdb.min.js')?>"></script>
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

