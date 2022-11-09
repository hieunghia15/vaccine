@extends('admin.layout-admin', [
    'title' => __($title ?? 'Tiêm chủng vắc xin COVID-19'),
])
@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tiêm chủng vắc xin COVID-19</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Tiêm chủng vắc xin COVID-19</li>
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
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1">
                            <i class="nav-icon fas fa-syringe"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Số mũi đã tiêm</span>
                            <span class="info-box-number">
                                {{ $sum_dose }}
                                <small>mũi</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shield-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Số mũi đã tiêm hôm qua</span>
                            <span class="info-box-number">{{ $yesterday_dose }}
                                <small>mũi</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-shield"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Tỷ lệ tiêm/dân số</span>
                            <span class="info-box-number">{{ $percent_city }}%</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Số người tiêm (≥ 2 mũi)</span>
                            <span class="info-box-number">{{ $sum_two_dose }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
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
                            <canvas id="lineChart" height="100px"></canvas>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Số liệu tiêm chủng từng quận/huyện
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChart" height="100px"></canvas>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- Table -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                               <i class="fa fa-percent"></i>
                                Tỉ lệ tiêm theo quận/huyện</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="col-md-2 text-center">Quận/huyện</th>
                                        <th class="col-md-7 text-center">Tỉ lệ tiêm chủng</th>
                                        <th class="col-md-1 text-center">%</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{ $districts[0]->name }}</td>
                                        <td class="text-center">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-success"
                                                    style="width: {{ $percent0 }}%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center"><span class="badge bg-success">{{ $percent0 }}%</span>
                                        </td>
                                      
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ $districts[1]->name }}</td>
                                        <td class="text-center">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-success"
                                                    style="width: {{ $percent1 }}%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center"><span class="badge bg-success">{{ $percent1 }}%</span>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ $districts[2]->name }}</td>
                                        <td class="text-center">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-success"
                                                    style="width: {{ $percent2 }}%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center"><span class="badge bg-success">{{ $percent2 }}%</span>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ $districts[3]->name }}</td>
                                        <td class="text-center">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-success"
                                                    style="width: {{ $percent3 }}%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center"><span
                                                class="badge bg-success">{{ $percent3 }}%</span></td>
                                       
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ $districts[4]->name }}</td>
                                        <td class="text-center">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-success"
                                                    style="width: {{ $percent4 }}%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center"><span
                                                class="badge bg-success">{{ $percent4 }}%</span></td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ $districts[5]->name }}</td>
                                        <td class="text-center">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-success"
                                                    style="width: {{ $percent5 }}%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center"><span
                                                class="badge bg-success">{{ $percent5 }}%</span></td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ $districts[6]->name }}</td>
                                        <td class="text-center">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-success"
                                                    style="width: {{ $percent6 }}%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center"><span
                                                class="badge bg-success">{{ $percent6 }}%</span></td>
                                       
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ $districts[7]->name }}</td>
                                        <td class="text-center">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-success"
                                                    style="width: {{ $percent7 }}%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center"><span
                                                class="badge bg-success">{{ $percent7 }}%</span></td>
                                      
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ $districts[8]->name }}</td>
                                        <td class="text-center">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-success"
                                                    style="width: {{ $percent8 }}%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center"><span
                                                class="badge bg-success">{{ $percent8 }}%</span></td>
                                       
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!--/.table -->
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
        var districts = {{ Js::from($district_bar) }};
        var district0 = {{ Js::from($district0) }};
        var district1 = {{ Js::from($district1) }};
        var district2 = {{ Js::from($district2) }};
        var district3 = {{ Js::from($district3) }};
        var district4 = {{ Js::from($district4) }};
        var district5 = {{ Js::from($district5) }};
        var district6 = {{ Js::from($district6) }};
        var district7 = {{ Js::from($district7) }};
        var district8 = {{ Js::from($district8) }};

        var xtc = document.getElementById("barChart").getContext('2d');
        var myChart = new Chart(xtc, {
            type: 'bar',
            data: {
                labels: [
                    districts[0].name, districts[1].name, districts[2].name,
                    districts[3].name, districts[4].name, districts[5].name,
                    districts[6].name, districts[7].name, districts[8].name
                ],
                datasets: [{
                    label: 'Mũi tiêm',
                    data: [
                        district0,
                        district1,
                        district2,
                        district3,
                        district4,
                        district5,
                        district6,
                        district7,
                        district8,
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
