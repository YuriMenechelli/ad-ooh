//line
var ctxL = document.getElementById("tempoVeiculacaoMc").getContext('2d');
var myLineChart = new Chart(ctxL, {
	type: 'line',
	data: {
		labels: ["18/09/2020", "19/09/2020", "20/09/2020", "21/09/2020", "22/09/2020", "23/09/2020", "24/09/2020", "25/09/2020", "26/09/2020", "27/09/2020"],
		datasets: [{
			label: "Horas de Veículação",
			data: [13.20, 19.80, 17.60, 23.10, 26.40, 28.60, 27.50, 25.30, 19.80, 18.70],
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
var ctxL = document.getElementById("impactoEstimadoMc").getContext('2d');
var myLineChart = new Chart(ctxL, {
	type: 'line',
	data: {
		labels: ["18/09/2020", "19/09/2020", "20/09/2020", "21/09/2020", "22/09/2020", "23/09/2020", "24/09/2020", "25/09/2020", "26/09/2020", "27/09/2020"],
		datasets: [{
			label: "Impactos Estimados",
			data: [64.375, 75.390, 106.221, 140.517, 121.549, 139.331, 109.221, 95.577, 91.176, 59.270],
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
