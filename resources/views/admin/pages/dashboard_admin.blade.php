<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">


    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>GameTrade | Dashboard</title>

    <!-- vendor css -->
    <link href="{{ asset('../lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/typicons.font/typicons.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ asset('../css/azia.css') }}">

</head>

<body>


    {{-- Navigation bar --}}

    @include('admin.components.nav_admin')

    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                <div class="az-dashboard-one-title">
                    <div>
                        <h2 class="az-dashboard-title">Hi, welcome back!</h2>
                        <p class="az-dashboard-text">Your GameTrade dashboard.</p>
                    </div>

                </div><!-- az-dashboard-one-title -->



                <div class="row row-sm mg-b-20">
                    <div class="col-lg-7 ht-lg-100p">
                        <div class="card card-dashboard-one">
                            <div class="card-header">
                                <div>
                                    <h6 class="card-title">Sale Performance Summary</h6>
                                    <p class="card-text">August</p>
                                </div>
                                <div class="btn-group">
                                    <button class="btn">August</button>
                                </div>
                            </div><!-- card-header -->
                            <div class="card-body">
                                <div class="card-body-top">
                                    <div>
                                        <label class="mg-b-0">Total Transactions</label>
                                        <h2>78</h2>
                                    </div>
                                    <div>
                                        <label class="mg-b-0">Sold</label>
                                        <h2>45</h2>
                                    </div>
                                    <div>
                                        <label class="mg-b-0">Traded</label>
                                        <h2>42</h2>
                                    </div>
                                    <div>
                                        <label class="mg-b-0">Auctioned</label>
                                        <h2>3</h2>
                                    </div>
                                    <div>
                                        <label class="mg-b-0">Total Revenue</label>
                                        <h2>₱16,869</h2>
                                    </div>
                                </div><!-- card-body-top -->
                                <div class="flot-chart-wrapper">
                                    <div id="flotChart" class="flot-chart"></div>
                                </div><!-- flot-chart-wrapper -->
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-lg-5 mg-t-20 mg-lg-t-0">
                        <div class="row row-sm">
                            <div class="col-sm-6">
                                <div class="card card-dashboard-two">
                                    <div class="card-header">
                                        <h6>45 <i class="icon ion-md-trending-up tx-success"></i> <small>18.02%</small>
                                        </h6>
                                        <p>Account/Item Sold</p>
                                    </div><!-- card-header -->
                                    <div class="card-body">
                                        <div class="chart-wrapper">
                                            <div id="flotChart1" class="flot-chart"></div>
                                        </div><!-- chart-wrapper -->
                                    </div><!-- card-body -->
                                </div><!-- card -->
                            </div><!-- col -->
                            <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                                <div class="card card-dashboard-two">
                                    <div class="card-header">
                                        <h6>90 <i class="icon ion-md-trending-down tx-danger"></i> <small>0.86%</small>
                                        </h6>
                                        <p>Account/Item Traded</p>
                                    </div><!-- card-header -->
                                    <div class="card-body">
                                        <div class="chart-wrapper">
                                            <div id="flotChart2" class="flot-chart"></div>
                                        </div><!-- chart-wrapper -->
                                    </div><!-- card-body -->
                                </div><!-- card -->
                            </div><!-- col -->
                            <div class="col-sm-12 mg-t-20">
                                <div class="card card-dashboard-three">
                                    <div class="card-header">
                                        <p>All Transactions</p>
                                        <h6>16,869 <small class="tx-success"><i class="icon ion-md-arrow-up"></i>
                                                2.87%</small></h6>
                                        <small>The total number of successful transactions for the current
                                            month.</small>
                                    </div><!-- card-header -->
                                    <div class="card-body">
                                        <div class="chart"><canvas id="chartBar5"></canvas></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row -->
                    </div><!--col -->
                </div><!-- row -->




            </div><!-- az-content-body -->
        </div>
    </div><!-- az-content -->


    {{-- footer --}}
    @include('admin.layouts.footer_admin')
    @include('admin.components.js_inc_admin')



    <script>
        $(function() {
            'use strict'

            var plot = $.plot('#flotChart', [{
                data: flotSampleData3,
                color: '#007bff',
                lines: {
                    fillColor: {
                        colors: [{
                            opacity: 0
                        }, {
                            opacity: 0.2
                        }]
                    }
                }
            }, {
                data: flotSampleData4,
                color: '#560bd0',
                lines: {
                    fillColor: {
                        colors: [{
                            opacity: 0
                        }, {
                            opacity: 0.2
                        }]
                    }
                }
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 8
                },
                yaxis: {
                    show: true,
                    min: 0,
                    max: 100,
                    ticks: [
                        [0, ''],
                        [20, '20K'],
                        [40, '40K'],
                        [60, '60K'],
                        [80, '80K']
                    ],
                    tickColor: '#eee'
                },
                xaxis: {
                    show: true,
                    color: '#fff',
                    ticks: [
                        [25, 'OCT 21'],
                        [75, 'OCT 22'],
                        [100, 'OCT 23'],
                        [125, 'OCT 24']
                    ],
                }
            });

            $.plot('#flotChart1', [{
                data: dashData2,
                color: '#00cccc'
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.2
                            }]
                        }
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 0
                },
                yaxis: {
                    show: false,
                    min: 0,
                    max: 35
                },
                xaxis: {
                    show: false,
                    max: 50
                }
            });

            $.plot('#flotChart2', [{
                data: dashData2,
                color: '#007bff'
            }], {
                series: {
                    shadowSize: 0,
                    bars: {
                        show: true,
                        lineWidth: 0,
                        fill: 1,
                        barWidth: .5
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 0
                },
                yaxis: {
                    show: false,
                    min: 0,
                    max: 35
                },
                xaxis: {
                    show: false,
                    max: 20
                }
            });


            //-------------------------------------------------------------//


            // Line chart
            $('.peity-line').peity('line');

            // Bar charts
            $('.peity-bar').peity('bar');

            // Bar charts
            $('.peity-donut').peity('donut');

            var ctx5 = document.getElementById('chartBar5').getContext('2d');
            new Chart(ctx5, {
                type: 'bar',
                data: {
                    labels: [0, 1, 2, 3, 4, 5, 6, 7],
                    datasets: [{
                        data: [2, 4, 10, 20, 45, 40, 35, 18],
                        backgroundColor: '#560bd0'
                    }, {
                        data: [3, 6, 15, 35, 50, 45, 35, 25],
                        backgroundColor: '#cad0e8'
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        enabled: false
                    },
                    legend: {
                        display: false,
                        labels: {
                            display: false
                        }
                    },
                    scales: {
                        yAxes: [{
                            display: false,
                            ticks: {
                                beginAtZero: true,
                                fontSize: 11,
                                max: 80
                            }
                        }],
                        xAxes: [{
                            barPercentage: 0.6,
                            gridLines: {
                                color: 'rgba(0,0,0,0.08)'
                            },
                            ticks: {
                                beginAtZero: true,
                                fontSize: 11,
                                display: false
                            }
                        }]
                    }
                }
            });





        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            activateNavItem('dashboard');
        });
    </script>
    </script>
</body>

</html>
