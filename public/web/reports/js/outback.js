//line
var ctxL = document.getElementById('tempoVeiculacaoOutback').getContext('2d');
var myLineChart = new Chart(ctxL, {
	type: 'line',
	data: {
		labels: ["22/10/2020", "23/10/2020", "24/10/2020", "25/10/2020", "26/10/2020", "27/10/2020", "28/10/2020"],
		datasets: [{
			label: "Horas de Veículação",
			data: [16.59, 17.66, 12.84, 11.24, 14.98, 16.05, 17.66],
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
var ctxL = document.getElementById("impactoEstimadoOutback").getContext('2d');
var myLineChart = new Chart(ctxL, {
	type: 'line',
	data: {
		labels: ["22/10/2020", "23/10/2020", "24/10/2020", "25/10/2020", "26/10/2020", "27/10/2020", "28/10/2020"],
		datasets: [{
			label: "Impactos Estimados",
			data: [28.724, 27.143, 22.670, 28.814, 24.448, 30.239, 36.397],
			backgroundColor: ['rgba(255, 0, 88, .25)'],
			borderColor: ['rgba(255, 0, 88, 1)'],
			borderWidth: 1
		}]
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
