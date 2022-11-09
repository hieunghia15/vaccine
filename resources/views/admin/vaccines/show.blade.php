@extends('admin.layout-admin', [
    'title' => __($title ?? $vaccines->name),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1" style="margin-right: -5%">
                    <a href="{{ route('admin.vaccines.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="col-sm-6">
                    <h1>Chi tiết vắc xin</h1>
                </div>
                <div class="col-sm-5" style="margin-left: 4%">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Chi tiết vắc xin</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title" style="margin-top:0.25rem">{{$vaccines->name}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-4">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="form-check-label card-title" for="exampleCheck1">Độ tuổi áp dụng: {{$vaccines->applicable_age}}</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-check-label card-title" for="exampleCheck1">Hiệu quả: {{$vaccines->effection}}</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="form-check-label card-title" for="exampleCheck1">Liều tiêm: {{$vaccines->injection_dose}}</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-check-label card-title" for="exampleCheck1">Thời gian giữa các
                                                mũi tiêm: {{$vaccines->injection_time}}</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="form-check-label card-title" for="exampleCheck1">Hãng sản xuất:
                                                {{$vaccines->manufacture->name}}
                                            </label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-check-label card-title" for="exampleCheck1">Loại vắc xin: {{$vaccines->vaccineType->name}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
