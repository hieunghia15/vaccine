@extends('admin.layout-admin', [
    'title' => __($title ?? 'Thêm vắc xin'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1" style="margin-right: -5%">
                    <a href="{{ route('admin.vaccines.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="col-sm-6">
                    <h1>Thêm vắc xin</h1>
                </div>
                <div class="col-sm-5" style="margin-left: 4%">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm vắc xin</li>
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
                            <h3 class="card-title" style="margin-top:0.25rem">Nhập thông tin vắc xin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-4">
                            <form method="POST" action="{{ route('admin.vaccines.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="role">Tên vắc xin<span class="text-danger">*</span>:</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tên vắc xin"
                                                name="name" value="{{ old('name') }}">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="role">Hãng sản xuất<span class="text-danger">*</span>:</label>
                                            <select class="custom-select @error('manufacture_id') is-invalid @enderror" name="manufacture_id">
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
                                            <label for="role">Loại vắc xin<span class="text-danger">*</span>:</label>
                                            <select class="custom-select @error('vaccine_type_id') is-invalid @enderror" name="vaccine_type_id">
                                                @foreach ($vaccine_types as $key => $vaccine_type)
                                                    <option value="{{ $vaccine_type->id }}" class="form-control">
                                                        {{ $vaccine_type->name }}</option>
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
                                            <label for="role">Độ tuổi áp dụng<span class="text-danger">*</span>:</label>
                                            <input type="text" class="form-control @error('applicable_age') is-invalid @enderror" placeholder="Nhập độ tuổi áp dụng"
                                                name="applicable_age" value="{{ old('applicable_age') }}">
                                                @error('applicable_age')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="role">Hiệu quả<span class="text-danger">*</span>:</label>
                                            <input type="text" class="form-control @error('effection') is-invalid @enderror" placeholder="Nhập hiệu quả"
                                                name="effection" value="{{ old('effection') }}">
                                                @error('effection')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="role">Liều tiêm<span class="text-danger">*</span>:</label>
                                            <input type="text" class="form-control @error('injection_dose') is-invalid @enderror" placeholder="Nhập liều tiêm"
                                                name="injection_dose" value="{{ old('injection_dose') }}">
                                                @error('injection_dose')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="role">Thời gian giữa các mũi tiêm<span
                                                    class="text-danger">*</span>:</label>
                                            <input type="text" class="form-control @error('injection_time') is-invalid @enderror"
                                                placeholder="Nhập thời gian giữa các mũi tiêm" name="injection_time"
                                                value="{{ old('injection_time') }}">
                                                @error('injection_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="reset" class="btn btn-info" data-dismiss="modal">Nhập lại</button>
                                <button type="submit" class="btn btn-primary">Thêm</button>
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
