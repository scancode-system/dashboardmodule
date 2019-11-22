<div class="row">
	@foreach($widgets as $widget)
	@include($widget->view)
	@endforeach
</div>

@push('scripts')
{{ Html::script('modules/dashboard/coreui/node_modules/chart.js/dist/Chart.min.js') }}
{{ Html::script('modules/dashboard/coreui/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js') }}

<script>
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})

	Chart.defaults.global.pointHitDetectionRadius = 1;
	Chart.defaults.global.tooltips.enabled = false;
	Chart.defaults.global.tooltips.mode = 'index';
	Chart.defaults.global.tooltips.position = 'nearest';
	Chart.defaults.global.tooltips.custom = CustomTooltips;
	Chart.defaults.global.tooltips.intersect = false;




	var cardChart1 = new Chart($('#card-chart1'), {
		type: 'line',
		data: {
			labels: ['9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'],
			datasets: [{
				label: 'Total Vendas Hora',
				backgroundColor: getStyle('--primary'),
				borderColor: 'rgba(255,255,255,.55)',
				data: [3265.43, 5932.43, 3284.43, 1284.43, 4351.67, 5655.65, 9043.45, 0, 5532.54, 200]
			}]
		},
		options: {
			tooltips: {
				callbacks: {
					label: function(tooltipItem, data) {
						var label = data.datasets[tooltipItem.datasetIndex].label || '';

						if (label) {
							label += ': ';
						}
						label += 'R$ '+tooltipItem.yLabel.toLocaleString('pt-BR');
						return label;
					}
				}
			},
			maintainAspectRatio: false,
			legend: {
				display: false
			},
			scales: {
				xAxes: [{
					gridLines: {
						color: 'transparent',
						zeroLineColor: 'transparent'
					},
					ticks: {
						fontSize: 2,
						fontColor: 'transparent'
					}
				}],
				yAxes: [{
					display: false,
					ticks: {
						display: false,
						min: 0,
						max: 10000
					}
				}]
			},
			elements: {
				line: {
					borderWidth: 1
				},
				point: {
					radius: 4,
					hitRadius: 10,
					hoverRadius: 4
				}
			}
		}
	});


	var cardChart2 = new Chart($('#card-chart2'), {
		type: 'line',
		data: {
			labels: ['9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'],
			datasets: [{
				label: 'Total Pedidos Hora',
				backgroundColor: getStyle('--info'),
				borderColor: 'rgba(255,255,255,.55)',
				data: [3, 5, 9, 23, 45, 12, 2, 43, 23, 43]
			}]
		},
		options: {
			maintainAspectRatio: false,
			legend: {
				display: false
			},
			scales: {
				xAxes: [{
					gridLines: {
						color: 'transparent',
						zeroLineColor: 'transparent'
					},
					ticks: {
						fontSize: 2,
						fontColor: 'transparent'
					}
				}],
				yAxes: [{
					display: false,
					ticks: {
						display: false,
						min: 0,
						max: 50
					}
				}]
			},
			elements: {
				line: {
					tension: 0.00001,
					borderWidth: 1
				},
				point: {
					radius: 4,
					hitRadius: 10,
					hoverRadius: 4
				}
			}
		}
	});


	var cardChart3 = new Chart($('#card-chart3'), {
		type: 'line',
		data: {
			labels: ['9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'],
			datasets: [{
				label: 'Ticket Médio Hora',
				backgroundColor: 'rgba(255,255,255,.2)',
				borderColor: 'rgba(255,255,255,.55)',
				data: [165.43, 532.43, 384.43, 684.43, 451.67, 900, 343.45, 0, 232.54, 40]
			}]
		},
		options: {
			tooltips: {
				callbacks: {
					label: function(tooltipItem, data) {
						var label = data.datasets[tooltipItem.datasetIndex].label || '';

						if (label) {
							label += ': ';
						}
						label += 'R$ '+tooltipItem.yLabel.toLocaleString('pt-BR');
						return label;
					}
				}
			},
			maintainAspectRatio: false,
			legend: {
				display: false
			},
			scales: {
				xAxes: [{
					display: false
				}],
				yAxes: [{
					display: false,
					min: 0,
					max: 1000
				}]
			},
			elements: {
				line: {
					borderWidth: 2
				},
				point: {
					radius: 4,
					//hitRadius: 10,
					//hoverRadius: 4
				}
			}
		}
	});

	var cardChart4 = new Chart($('#card-chart4'), {
		type: 'bar',
		data: {
			labels: ['Cadeira DXRacer F-Series (Azul)', 'Cadeira DXRacer S-Series (Black)', 'Cadeira DXRacer F-Series (Vermelho)', 'Cadeira DXRacer T-Series (Branco)', 'Cadeira DXRacer M-Series (Preto)', 'Cadeira DXRacer T-Series (Rosa)', 'Cadeira DXRacer V-Series (Azul)', 'Cadeira DXRacer V-Series (Cinzal)', 'Cadeira DXRacer V-Series (Dourado)', 'Cadeira DXRacer K-Series (Azul)'],
			datasets: [{
				label: '',
				backgroundColor: 'rgba(255,255,255,.2)',
				borderColor: 'rgba(255,255,255,.55)',
				data: [27, 25, 21, 17, 15, 13, 9, 9, 7, 5, 5, 4, 4, 4, 2, 2]
			}]
		},
		options: {
			tooltips: {
				callbacks: {
					label: function(tooltipItem, data) {
						return tooltipItem.yLabel+' unidades vendidas';
					}
				}
			},
			maintainAspectRatio: false,
			legend: {
				display: false
			},
			scales: {
				xAxes: [{
					display: false,
					barPercentage: 0.6
				}],
				yAxes: [{
					display: false
				}]
			}
		}
	});


	var doughnutChart = new Chart($('#canvas-3'), {
		type: 'doughnut',
		data: {
			labels: ['Pratos', 'Copos', 'Talheres', 'Vasilhas', 'Porcelana', 'Bajour'],
			datasets: [{
				data: [300, 50, 100, 43, 54, 87],
				backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#63c2de', '#4dbd74', '#c8ced3'],
				hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#63c2de', '#c8ced3']
			}]
		},
		options: {
			responsive: true,
		}
	}); 

	Chart.defaults.global.tooltips.callbacks.labelColor = function (tooltipItem, chart) {
		return {
			backgroundColor: chart.data.datasets[tooltipItem.datasetIndex].borderColor
		};
}; // eslint-disable-next-line no-unused-vars

var mainChart = new Chart($('#main-chart'), {
	type: 'line',
	data: {
		labels: ['9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'],
		datasets: [{
			label: '20/02/2020',
			backgroundColor: 'transparent',
			borderColor: getStyle('--info'),
			pointHoverBackgroundColor: '#fff',
			borderWidth: 2,
			data: [3265.43, 5932.43, 3284.43, 1284.43, 4351.67, 5655.65, 9043.45, 0, 5532.54, 200]
		}, {
			label: '21/02/2020',
			backgroundColor: 'transparent',
			borderColor: getStyle('--success'),
			pointHoverBackgroundColor: '#fff',
			borderWidth: 2,
			data: [5465.43, 6532.43, 2184.43, 6584.43, 9871.67, 5455.65, 3443.45, 0, 3232.54, 540]
		}, {
			label: '22/02/2020',
			backgroundColor: 'transparent',
			borderColor: getStyle('--secondary'),
			pointHoverBackgroundColor: '#fff',
			borderWidth: 1,
			data: [3265.43, 2332.43, 1284.43, 6584.43, 3251.67, 5455.65, 43, 4332, 552.54, 1200]
		}, {
			label: '23/02/2020',
			backgroundColor: 'transparent',
			borderColor: getStyle('--warning'),
			pointHoverBackgroundColor: '#fff',
			borderWidth: 1,
			data: [3265.43, 5432.43, 4384.43, 684.43, 3351.67, 5885.65, 900, 2332, 5562.54, 1500]
		},{
			label: 'Media',
			backgroundColor: 'transparent',
			borderColor: getStyle('--danger'),
			pointHoverBackgroundColor: '#fff',
			borderWidth: 1,
			borderDash: [8, 5],
			data: [3000, 3000, 3000, 3000, 3000, 3000, 3000, 3000, 3000, 3000]
		}]
	},
	options: {
		tooltips: {
			callbacks: {
				label: function(tooltipItem, data) {
					var label = data.datasets[tooltipItem.datasetIndex].label || '';

					if (label) {
						label += ': ';
					}
					label += 'R$ '+tooltipItem.yLabel.toLocaleString('pt-BR');
					return label;
				},
				title: function(tooltipItem, data) {
					console.log(tooltipItem);
					console.log(data);
					return 'Horário - '+tooltipItem[0].xLabel;
				}
			}
		},
		maintainAspectRatio: false,
		legend: {
			display: false
		},
		scales: {
			xAxes: [{
				gridLines: {
					drawOnChartArea: false
				}
			}],
			yAxes: [{
				ticks: {
					beginAtZero: true,
					maxTicksLimit: 5,
					stepSize: Math.ceil(250 / 5),

				}
			}]
		},
		elements: {
			line: {
				tension: 0.00001,
			},
			point: {
				radius: 0,
				hitRadius: 10,
				hoverRadius: 4,
				hoverBorderWidth: 3
			}
		}
	}
});


</script>
@endpush