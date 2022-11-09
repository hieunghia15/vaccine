@extends('admin.layout-admin', [
    'title' => __($title ?? 'Thêm hãng sản xuất'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1" style="margin-right: -5%">
                    <a href="{{ route('admin.manufactures.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="col-sm-6">
                    <h1>Thêm hãng sản xuất</h1>
                </div>
                <div class="col-sm-5" style="margin-left: 4%">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm hãng sản xuất</li>
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
                        <div class="card-header">
                            <h3 class="card-title" style="margin-top:0.25rem">Nhập tên hãng sản xuất vắc xin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-4">
                            <form method="POST" action="{{ route('admin.manufactures.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="role">Tên hãng sản xuất<span class="text-danger">*</span>:</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tên hãng sản xuất"
                                                name="name" value="{{old('name')}}">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="role">Quốc gia<span class="text-danger">*</span>:</label>
                                            <select name="nation_id" class="custom-select @error('nation_id') is-invalid @enderror">
                                                <option value="">-Chọn quốc gia-</option>
                                                @foreach ($nations as $key => $value)
                                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('nation_id')
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
