@extends('admin.layout-admin',[
'title' => __($title ?? 'Kết quả trạng thái đăng ký tiêm chủng')
])
@section('main')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-1" style="margin-right: -5%">
                <a href="{{ URL::previous() }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="col-sm-6">
                <h1>Kết quả trạng thái đăng ký tiêm chủng</h1>
            </div>
            <div class="col-sm-5" style="margin-left: 4%">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Kết quả trạng thái đăng ký tiêm chủng</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success">
                        <h3 class="card-title" style="margin-top:0.25rem">Kết quả</h3>
                    </div>
                    <!-- /.card-header -->
                    @if(session()->get('results'))
                    <div class="card-body table-responsive p-4">                    
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ tên</th>
                                    <th>Ngày sinh</th>
                                    <th>Số điện thoại</th>
                                    <th>Ngày đăng ký</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (session()->get('results') as $key => $result)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $result->user->fullname }}</td>                                
                                    <td> {{ Carbon\Carbon::parse($result->user->day_of_birth)->format('d-m-Y') }}</td>
                                    <td>{{ $result->user->phone }}</td>
                                    <td>{{ Carbon\Carbon::parse($result->created_at)->format('d-m-Y') }}</td>
                                    <td>
                                        @if (isset($result->status))
                                        <span class="badge badge-success">{{$result->status}}</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>                                           
                    </div>
                    @else
                    <h5>Chưa đăng ký tiêm chủng</h5>
                    @endif
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection