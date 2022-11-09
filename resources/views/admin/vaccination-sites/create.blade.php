@extends('admin.layout-admin', [
    'title' => __($title ?? 'Thêm địa điểm tiêm chủng'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1" style="margin-right: -5%">
                    <a href="{{ route('admin.vaccination-sites.index') }}" class="btn btn-icon"><i
                            class="fas fa-arrow-left"></i></a>
                </div>
                <div class="col-sm-6">
                    <h1>Thêm địa điểm tiêm chủng</h1>
                </div>
                <div class="col-sm-5" style="margin-left: 4%">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm địa điểm tiêm chủng</li>
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
                            <h3 class="card-title" style="margin-top:0.25rem">Nhập tên địa điểm tiêm chủng</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-4">
                            <form method="POST" action="{{ route('admin.vaccination-sites.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="tab-pane" id="address">
                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <label for="address">Tên địa điểm<span class="text-danger">*</span>:</label>
                                            <input type="text" name="location"
                                                class="form-control @error('location') is-invalid @enderror"
                                                placeholder="Nhập tên địa điểm tiêm">
                                                @error('location')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="province">Tỉnh/Thành Phố<span
                                                        class="text-danger">*</span>:</label>
                                                <select class="custom-select" id="province-dropdown">
                                                    <option value="">Chọn tỉnh/thành phố</option>
                                                    @foreach (App\Models\Province::all() as $province)
                                                        <option value="{{ $province->id }}">
                                                            {{ $province->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="district">Quận/Huyện<span class="text-danger">*</span>:</label>
                                                <select class="custom-select" id="district-dropdown">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ward">Phường/Xã<span class="text-danger">*</span>:</label>
                                                <select class="custom-select @error('ward_id') is-invalid @enderror"
                                                    id="ward-dropdown" name="ward_id">
                                                </select>
                                                @error('ward_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
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
