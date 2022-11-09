@extends('admin.layout-admin', [
    'title' => __($title ?? 'Nhập thông tin tiêm chủng'),
])
@section('main')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nhập thông tin tiêm chủng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Nhập thông tin tiêm chủng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nhập thông tin</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('admin.injections.store-vaccination-info') }}" novalidate>
                            @csrf
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Họ và tên <span class="text-danger">*</span>:</label>
                                        <input type="text" class="form-control @error('fullname') is-invalid @enderror" value="{{ old('fullname') }}" name="fullname">
                                        @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Số điện thoại <span class="text-danger">*</span>:</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Ngày tháng năm sinh <span class="text-danger">*</span>:</label>
                                        <input type="date" class="form-control @error('day_of_birth') is-invalid @enderror" value="{{ old('day_of_birth') }}" name="day_of_birth">
                                        @error('day_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Giới tính <span class="text-danger">*</span>:</label>
                                        <select id="gender" name="gender" class="custom-select @error('gender') is-invalid @enderror">
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Email:</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Số CCCD/Hộ chiếu <span
                                                class="text-danger">*</span>:</label>
                                        <input type="text" class="form-control @error('identification') is-invalid @enderror" value="{{ old('identification') }}" name="identification">
                                        @error('identification')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Dân tộc <span class="text-danger">*</span>:</label>
                                        <select id="ethnic_id" name="ethnic_id" class="custom-select @error('ethnic_id') is-invalid @enderror">
                                            @foreach ( App\Models\Ethnic::all() as $ethnics)
                                            <option value="{{$ethnics->id}}">{{$ethnics->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('ethnic_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Quốc tịch <span class="text-danger">*</span>:</label>
                                        <select id="nationality_id" name="nationality_id" class="custom-select @error('nationality_id') is-invalid @enderror">
                                            @foreach ( App\Models\Nationality::all() as $nationalities)
                                            <option value="{{$nationalities->id}}">{{$nationalities->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('nationality_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Thôn/Xóm/Số nhà:</label>
                                        <input type="text" class="form-control" id="address" value="{{old('address')}}"
                                            name="address">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Tỉnh/Thành phố <span class="text-danger">*</span>:</label>
                                        <select class="custom-select" id="province-dropdown">
                                            <option value="">Chọn tỉnh/thành phố</option>
                                            @foreach (\App\Models\Province::all() as $province)
                                                <option value="{{ $province->id }}">
                                                    {{ $province->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Quận/Huyện <span class="text-danger">*</span>:</label>
                                        <select class="custom-select" id="district-dropdown">
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Phường/Xã <span class="text-danger">*</span>:</label>
                                        <select class="custom-select @error('ward_id') is-invalid @enderror" id="ward-dropdown" name="ward_id">
                                        </select>
                                        @error('ward_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="reset" class="btn btn-info">Nhập lại</button>
                                <button type="submit" class="btn btn-primary">Tạo</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#province-dropdown').on('change', function() {
                var province_id = this.value;
                $("#district-dropdown").html('');
                $.ajax({
                    url: "{{ route('locations.get-district') }}",
                    type: "POST",
                    data: {
                        province_id: province_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#district-dropdown').html(
                            '<option value="">Chọn quận/huyện</option>');
                        $.each(result.districts, function(key, value) {
                            $("#district-dropdown").append('<option value="' + value
                                .id +
                                '">' + value.name + '</option>');
                        });
                        $('#ward-dropdown').html(
                            '<option value="">Chọn phường xã </option>');
                    }
                });
            });

            $('#district-dropdown').on('change', function() {
                var district_id = this.value;
                $("#ward-dropdown").html('');
                $.ajax({
                    url: "{{ route('locations.get-ward') }}",
                    type: "POST",
                    data: {
                        district_id: district_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#ward-dropdown').html('<option value="">Chọn phường/xã</option>');
                        $.each(result.wards, function(key, value) {
                            $("#ward-dropdown").append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
