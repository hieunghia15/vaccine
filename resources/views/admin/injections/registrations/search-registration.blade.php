@extends('admin.layout-admin',[
'title' => __($title ?? 'Tra cứu trạng thái đăng ký tiêm chủng')
])
@section('main')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Tra cứu trạng thái đăng ký tiêm chủng</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@if (session('warning'))
<div class="alert alert-warning card" role="alert">
    {{ session('warning') }}
</div>
@endif
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <h3 class="card-title" style="margin-top:0.25rem">Tra cứu trạng thái đăng ký tiêm chủng</h3>
                    </div>
                    <!-- /.card-header -->
                <form method="POST" action="{{ route('admin.injections.searching-registration') }}" novalidate>
                    @csrf
                    <div class="card-body p-4">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Số CCCD/Hộ chiếu <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('identification') is-invalid @enderror" value="{{ old('identification') }}" name="identification" placeholder="Nhập số CCCD/Hộ chiếu">
                                @error('identification')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Số điện thoại <span class="text-danger">*</span></label>
                                <input type="text" class="form-control  @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone" placeholder="Nhập số điện thoại">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                    </div>                 
                        <div class="form-group" style="width:10%; margin-left:45%">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Tra cứu</button>
                        </div>                 
                    <!-- /.card-body -->
                </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection