@extends('admin.layout-admin', [
    'title' => __($title ?? 'Lập giấy xác nhận tiêm chủng'),
])
@section('main')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Lập giấy xác nhận tiêm chủng</li>
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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Lập giấy xác nhận tiêm chủng</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="p-3" method="POST" action="{{ route('admin.injections.store-certificate') }}">
                            @csrf
                            <!-- FullName -->
                            <div class="form-row">
                                <!-- Phone -->
                                <div class="form-group col-6">
                                    <label for="phone">Số điện thoại <span class="text-danger">*</span>:</label>
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ old('phone') }}"  title="Số điện thoại phải đúng định dạng">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                <!-- Identification -->
                                <div class="form-group col-6">
                                    <label for="identification">Số CCCD/CMND/Hộ chiếu <span
                                            class="text-danger">*</span>:</label>
                                    <input id="identification" type="text" class="form-control @error('identification') is-invalid @enderror" name="identification"
                                        value="{{ old('identification') }}" >
                                        @error('identification')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="vaccination_number">Số mũi vắc xin <span
                                            class="text-danger">*</span>:</label>
                                    <select class="custom-select mdb-select  @error('vaccination_number_id') is-invalid @enderror" name="vaccination_number_id">
                                        <option value="">Chọn mũi vắc xin</option>
                                        @foreach ($vaccinationNumbers as $vaccinationNumber)
                                            <option value="{{$vaccinationNumber->id}}">{{$vaccinationNumber->description}}</option>
                                        @endforeach
                                    </select>
                                    @error('vaccination_number_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group col-6">
                                    <label for="vaccination_time">Thời gian tiêm <span class="text-danger">*</span>:</label>
                                    <input id="vaccination_time" type="datetime-local" class="form-control @error('vaccination_time') is-invalid @enderror"
                                        name="vaccination_time" value="{{ old('vaccination_time') }}" >
                                        @error('vaccination_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="vaccination_type">Loại vắc xin <span class="text-danger">*</span>:</label>
                                    <select class="custom-select mdb-select @error('vaccine_id') is-invalid @enderror" name="vaccine_id" >
                                        <option value="">Chọn loại vắc xin</option>
                                        @foreach ($vaccines as $vaccine)
                                            <option value="{{ $vaccine->id }}">{{ $vaccine->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('vaccine_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group col-6">
                                    <label for="lot_number">Số lô <span class="text-danger"></span>:</label>
                                    <input id="lot_number" type="text" class="form-control" name="lot_number"
                                        value="{{ old('lot_number') }}" >
                                </div>
                            </div>
                            <div class="form-row">
                                <!--Location-->
                                <div class="form-group col-md-3">
                                    <label>Tỉnh/Thành Phố <span class="text-danger">*</span>:</label>
                                    <select class="custom-select" id="province-dropdown">
                                        <option value="">Chọn tỉnh/thành phố</option>
                                        @foreach (\App\Models\Province::all() as $province)
                                            <option value="{{ $province->id }}">
                                                {{ $province->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Quận/Huyện <span class="text-danger">*</span>:</label>
                                    <select class="custom-select" id="district-dropdown">
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Phường/Xã <span class="text-danger">*</span>:</label>
                                    <select class="custom-select @error('ward_id') is-invalid @enderror" id="ward-dropdown"
                                        name="ward_id">
                                    </select>
                                    @error('ward_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Địa điểm tiêm<span class="text-danger">*</span>:</label>
                                    <select class="custom-select @error('vaccination_site_id') is-invalid @enderror" id="location-dropdown" name="vaccination_site_id">
                                    </select>
                                    @error('vaccination_site_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-info">
                                    Nhập lại
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Tạo
                                </button>
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

            $('#ward-dropdown').on('change', function() {
                var ward_id = this.value;
                $("#location-dropdown").html('');
                $.ajax({
                    url: "{{ route('locations.get-site') }}",
                    type: "POST",
                    data: {
                        ward_id: ward_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#location-dropdown').html(
                            '<option value="">Chọn địa điểm tiêm</option>');
                        $.each(result.vaccination_sites, function(key, value) {
                            $("#location-dropdown").append('<option value="' + value
                                .id +
                                '">' + value.location + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
