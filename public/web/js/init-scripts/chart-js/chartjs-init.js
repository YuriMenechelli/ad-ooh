( function ( $ ) {
    "use strict";

    //Horas Expostas - Gráfico
    var ctx = document.getElementById( "horasExpostas-chart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "Semana 01", "Semana 02", "Semana 03", "Semana 04", "Semana 05", "Semana 06", "Semana 07", "Semana 08", "Semana 09" ],
            type: 'line',
            defaultFontFamily: 'Comfortaa',
            datasets: [ {
                data: [ 1200, 1300, 1450, 1220, 1320, 1050, 1070, 1600, 1830 ],
                label: "Expense",
                backgroundColor: 'rgba(255,0,88,.15)',
                borderColor: 'rgba(255,0,88,.5)',
                borderWidth: 3.5,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(255,0,88,.5)',
                    }, ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Comfortaa',
                bodyFontFamily: 'Comfortaa',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                position: 'top',
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Comfortaa',
                },


            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Semana'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Horas'
                    }
                        } ]
            },
            title: {
                display: false,
            }
        }
    } );


    //KM Rodado - Gráfico
    var ctx = document.getElementById( "kmRodado-chart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "Semana 01", "Semana 02", "Semana 03", "Semana 04", "Semana 05", "Semana 06", "Semana 07", "Semana 08", "Semana 09" ],
            type: 'line',
            defaultFontFamily: 'Comfortaa',
            datasets: [ {
                data: [ 120, 130, 145, 122, 132, 105, 107, 160, 183 ],
                label: "Expense",
                backgroundColor: 'rgba(255,0,88,.15)',
                borderColor: 'rgba(255,0,88,.5)',
                borderWidth: 3.5,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(255,0,88,.5)',
                    }, ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Comfortaa',
                bodyFontFamily: 'Comfortaa',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                position: 'top',
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Comfortaa',
                },


            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Semana'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Horas'
                    }
                        } ]
            },
            title: {
                display: false,
            }
        }
    } );

    //Impacto Estimado - Gráfico
    var ctx = document.getElementById( "impacto-chart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "Semana 01", "Semana 02", "Semana 03", "Semana 04", "Semana 05", "Semana 06", "Semana 07", "Semana 08", "Semana 09" ],
            type: 'line',
            defaultFontFamily: 'Comfortaa',
            datasets: [ {
                data: [ 120, 130, 145, 122, 132, 105, 107, 160, 183 ],
                label: "Expense",
                backgroundColor: 'rgba(255,0,88,.15)',
                borderColor: 'rgba(255,0,88,.5)',
                borderWidth: 3.5,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(255,0,88,.5)',
                    }, ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Comfortaa',
                bodyFontFamily: 'Comfortaa',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                position: 'top',
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Comfortaa',
                },


            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Semana'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Horas'
                    }
                        } ]
            },
            title: {
                display: false,
            }
        }
    } );

    //Impressão por Horário - Gráfico
    var ctx = document.getElementById( "imp-chart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'doughnut',
        data: {
            datasets: [ {
                data: [ 10, 20, 30, 40 ],
                backgroundColor: [
                                    "rgba(255, 0, 88,0.8)",
                                    "rgba(255, 0, 88,0.6)",
                                    "rgba(255, 0, 88,0.4)",
                                    "rgba(255, 0, 88,0.2)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(255, 0, 88,1)",
                                    "rgba(255, 0, 88,1)",
                                    "rgba(255, 0, 88,1)",
                                    "rgba(255, 0, 88,1)"
                                ]

                            } ],
            labels: [
                            "01h - 06h",
                            "07h - 12h",
                            "13h - 18h",
                            "19h - 00h"
                        ]
        },
        options: {
            responsive: true
        }
    } );

    //Interesse por Região chart
    var ctx = document.getElementById( "interesse-chart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'polarArea',
        data: {
            datasets: [ {
                data: [ 15, 18, 9, 6, 19 ],
                backgroundColor: [
                                "rgba(255, 0, 88,1)",
                                "rgba(255, 0, 88,0.8)",
                                "rgba(255, 0, 88,0.6)",
                                "rgba(255, 0, 88,0.4)",
                                "rgba(255, 0, 88,0.2)"
                                ]

                            } ],
            labels: [
                            "Centro",
                            "Norte",
                            "Oeste",
                            "Sul",
                            "Leste"
                        ]
        },
        options: {
            responsive: true
        }
    } );

    //radar chart
    var ctx = document.getElementById( "classe-chart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'radar',
        data: {
            labels: [  "Centro", "Norte", "Oeste", "Sul", "Leste"],
            datasets: [
                {
                    label: "Classe",
                    data: [ 65, 59, 66, 45, 56],
                    borderColor: "rgba(255, 0, 88, 0.6)",
                    borderWidth: "1",
                    backgroundColor: "rgba(255, 0, 88, 0.4)"
                            }

                        ]
        },
        options: {
            legend: {
                position: 'top'
            },
            scale: {
                ticks: {
                    beginAtZero: true
                }
            }
        }
    } );






    //line chart
    var ctx = document.getElementById( "lineChart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "January", "February", "March", "April", "May", "June", "July" ],
            datasets: [
                {
                    label: "My First dataset",
                    borderColor: "rgba(0,0,0,.09)",
                    borderWidth: "1",
                    backgroundColor: "rgba(0,0,0,.07)",
                    data: [ 22, 44, 67, 43, 76, 45, 12 ]
                            },
                {
                    label: "My Second dataset",
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "1",
                    backgroundColor: "rgba(0, 123, 255, 0.5)",
                    pointHighlightStroke: "rgba(26,179,148,1)",
                    data: [ 16, 32, 18, 26, 42, 33, 44 ]
                            }
                        ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }

        }
    } );


    //bar chart
    var ctx = document.getElementById( "barChart" );
    //    ctx.height = 200;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ "January", "February", "March", "April", "May", "June", "July" ],
            datasets: [
                {
                    label: "My First dataset",
                    data: [ 65, 59, 80, 81, 56, 55, 40 ],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            },
                {
                    label: "My Second dataset",
                    data: [ 28, 48, 40, 19, 86, 27, 90 ],
                    borderColor: "rgba(0,0,0,0.09)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0,0,0,0.07)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    //radar chart
    var ctx = document.getElementById( "radarChart" );
    ctx.height = 160;
    var myChart = new Chart( ctx, {
        type: 'radar',
        data: {
            labels: [ [ "Eating", "Dinner" ], [ "Drinking", "Water" ], "Sleeping", [ "Designing", "Graphics" ], "Coding", "Cycling", "Running" ],
            datasets: [
                {
                    label: "My First dataset",
                    data: [ 65, 59, 66, 45, 56, 55, 40 ],
                    borderColor: "rgba(0, 123, 255, 0.6)",
                    borderWidth: "1",
                    backgroundColor: "rgba(0, 123, 255, 0.4)"
                            },
                {
                    label: "My Second dataset",
                    data: [ 28, 12, 40, 19, 63, 27, 87 ],
                    borderColor: "rgba(0, 123, 255, 0.7",
                    borderWidth: "1",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            legend: {
                position: 'top'
            },
            scale: {
                ticks: {
                    beginAtZero: true
                }
            }
        }
    } );


    //pie chart
    var ctx = document.getElementById( "pieChart" );
    ctx.height = 300;
    var myChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ 45, 25, 20, 10 ],
                backgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0,0,0,0.07)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0,0,0,0.07)"
                                ]

                            } ],
            labels: [
                            "green",
                            "green",
                            "green"
                        ]
        },
        options: {
            responsive: true
        }
    } );

    //doughut chart
    var ctx = document.getElementById( "doughutChart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'doughnut',
        data: {
            datasets: [ {
                data: [ 45, 25, 20, 10 ],
                backgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0,0,0,0.07)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0, 123, 255,0.5)",
                                    "rgba(0,0,0,0.07)"
                                ]

                            } ],
            labels: [
                            "green",
                            "green",
                            "green",
                            "green"
                        ]
        },
        options: {
            responsive: true
        }
    } );

    //polar chart
    var ctx = document.getElementById( "polarChart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'polarArea',
        data: {
            datasets: [ {
                data: [ 15, 18, 9, 6, 19 ],
                backgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.8)",
                                    "rgba(0, 123, 255,0.7)",
                                    "rgba(0,0,0,0.2)",
                                    "rgba(0, 123, 255,0.5)"
                                ]

                            } ],
            labels: [
                            "green",
                            "green",
                            "green",
                            "green"
                        ]
        },
        options: {
            responsive: true
        }
    } );

    // single bar chart
    var ctx = document.getElementById( "singelBarChart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ "Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat" ],
            datasets: [
                {
                    label: "My First dataset",
                    data: [ 40, 55, 75, 81, 56, 55, 40 ],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );




} )( jQuery );
