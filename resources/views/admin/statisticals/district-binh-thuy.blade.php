@extends('admin.layout-admin', [
    'title' => __($title ?? 'Thống kê quận Bình Thuỷ'),
])
@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thống kê quận Bình Thuỷ</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Thống kê quận Bình Thuỷ</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3> {{ $sum_dose }}</h3>
                            <p>Số mũi đã tiêm</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-syringe"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $percent_city }}<sup style="font-size: 20px">%</sup></h3>
                            <p>Tỷ lệ tiêm/dân số quận huyện</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $yesterday_dose }}</h3>
                            <p>Số mũi đã tiêm hôm qua</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $sum_two_dose }}</h3>
                            <p>Số người tiêm (≥ 2 mũi)</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Dữ liệu tiêm theo ngày
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="lineChart"
                                    style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Số liệu tiêm chủng quận Bình Thuỷ
                            </h3>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="chart-responsive">
                                        <canvas id="barChart"
                                            style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript">
        var label_line = {{ Js::from($label_line) }};
        var data_line = {{ Js::from($data_line) }};
        var ctx = document.getElementById("lineChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: label_line,
                datasets: [{
                    label: 'Mũi tiêm',
                    data: data_line,
                    borderWidth: 2,
                    backgroundColor: '#6777ef',
                    borderColor: '#6777ef',
                    borderWidth: 2.5,
                    pointBackgroundColor: '#ffffff',
                    pointRadius: 4
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            drawBorder: false,
                            color: '#f2f2f2',
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: 4000
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            display: true
                        },
                        gridLines: {
                            display: true
                        }
                    }]
                },
            }
        });
    </script>

    <script type="text/javascript">
        var ward_label = {{ Js::from($ward_bar) }};
        var ward0 = {{ Js::from($ward0) }};
        var ward1 = {{ Js::from($ward1) }};
        var ward2 = {{ Js::from($ward2) }};
        var ward3 = {{ Js::from($ward3) }};
        var ward4 = {{ Js::from($ward4) }};
        var ward5 = {{ Js::from($ward5) }};
        var ward6 = {{ Js::from($ward6) }};
        var ward7 = {{ Js::from($ward7) }};
        var xtc = document.getElementById("barChart").getContext('2d');
        var myChart = new Chart(xtc, {
            type: 'bar',
            data: {
                labels: [
                    ward_label[0].name, ward_label[1].name, ward_label[2].name,
                    ward_label[3].name, ward_label[4].name, ward_label[5].name,
                    ward_label[6].name, ward_label[7].name
                ],
                datasets: [{
                    label: 'Mũi tiêm',
                    data: [
                        ward0,
                        ward1,
                        ward2,
                        ward3,
                        ward4,
                        ward5,
                        ward6,
                        ward7,                       
                    ],
                    borderWidth: 1,
                    backgroundColor: '#6777ef',
                    borderColor: '#6777ef',
                    borderWidth: 1,
                    pointBackgroundColor: '#ffffff',
                    pointRadius: 4
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            drawBorder: false,
                            color: '#f2f2f2',
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: 4000
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            display: true
                        },
                        gridLines: {
                            display: true
                        }
                    }]
                },
            }
        });
    </script>

@endsection
