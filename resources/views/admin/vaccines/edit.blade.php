@extends('admin.layout-admin', [
    'title' => __($title ?? 'Cập nhật vắc xin'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1" style="margin-right: -5%">
                    <a href="{{ route('admin.vaccines.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="col-sm-6">
                    <h1>Cập nhật vắc xin</h1>
                </div>
                <div class="col-sm-5" style="margin-left: 4%">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Cập nhật vắc xin</li>
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
                        <div class="card-header bg-primary">
                            <h3 class="card-title" style="margin-top:0.25rem">Cập nhật thông tin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-4">
                            <form method="POST" action="{{ route('admin.vaccines.update', $vaccines->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="role">Tên vắc xin</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tên vắc xin"
                                                name="name" value="{{ $vaccines->name }}">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="role">Hãng sản xuất</label>
                                            <select class="custom-select @error('manufacture_id') is-invalid @enderror" name="manufacture_id">
                                                <option value="{{ $vaccines->manufacture->id }}" class="form-control">
                                                    {{ $vaccines->manufacture->name }}</option>
                                                @foreach ($manufactures as $key => $manufacture)
                                                    <option value="{{ $manufacture->id }}" class="form-control">
                                                        {{ $manufacture->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('manufacture_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="role">Loại vắc xin</label>
                                            <select class="custom-select @error('vaccine_type_id') is-invalid @enderror" name="vaccine_type_id">
                                                <option value="{{ $vaccines->vaccineType->id }}" class="form-control">
                                                    {{ $vaccines->vaccineType->name }}</option>
                                                @foreach ($vaccine_types as $key => $vaccineType)
                                                    <option value="{{ $vaccineType->id }}" class="form-control">
                                                        {{ $vaccineType->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('vaccine_type_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="role">Độ tuổi áp dụng</label>
                                            <input type="text" class="form-control @error('applicable_age') is-invalid @enderror" placeholder="Nhập độ tuổi áp dụng"
                                                name="applicable_age" value="{{ $vaccines->applicable_age }}">
                                                @error('applicable_age')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="role">Hiệu quả</label>
                                            <input type="text" class="form-control @error('effection') is-invalid @enderror" placeholder="Nhập hiệu quả"
                                                name="effection" value="{{ $vaccines->effection }}">
                                                @error('effection')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="role">Liều tiêm</label>
                                            <input type="text" class="form-control @error('injection_dose') is-invalid @enderror" placeholder="Nhập liều tiêm"
                                                name="injection_dose" value="{{ $vaccines->injection_dose }}">
                                                @error('injection_dose')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="role">Thời gian giữa các mũi tiêm</label>
                                            <input type="text" class="form-control @error('injection_time') is-invalid @enderror"
                                                placeholder="Nhập thời gian giữa các mũi tiêm" name="injection_time"
                                                value="{{ $vaccines->injection_time }}">
                                                @error('injection_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                                <!-- /.card-body -->
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
