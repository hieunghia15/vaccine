@extends('citizen.layout-user', [
    'title' => __($title ?? 'Trạng thái đăng ký tiêm chủng'),
])
@section('main')
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Trạng thái đăng ký tiêm chủng</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    <div class="container p-4">
        <div class="row">
            <!-- Main content -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="card-title text-white" style="margin-top:0.25rem">Kết quả</h3>
                    </div>
                    <!-- /.card-header -->
                    @if ($registrations != null)
                        <div class="card-body table-responsive p-4">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Số điện thoại</th>
                                        <th>Số CCCD/Hộ chiếu</th>
                                        <th>Ngày đăng ký</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registrations as $key => $value)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $users->fullname }}</td>
                                            <td>{{ Carbon\Carbon::parse($users->day_of_birth)->format('d-m-Y') }}</td>
                                            <td>{{ $users->phone }}</td>
                                            <td>{{ $users->identification }}</td>
                                            <td>{{ Carbon\Carbon::parse($value->created_at)->format('d-m-Y') }}</td>
                                            <td>
                                                @if ($value->status == '1')
                                                    <span class="badge badge-success">Đã duyệt</span>
                                                @elseif($value->status == '0')
                                                    <span class="badge badge-warning">Chưa duyệt</span>                                  
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    @else
                        <div style="font-size: 50px; font-weight:400;">
                            <center>
                                <h3>Chưa đăng ký tiêm chủng</h3>
                            </center>
                        </div>
                    @endif
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <!-- /.content -->
        </div>
    </div>
@endsection
