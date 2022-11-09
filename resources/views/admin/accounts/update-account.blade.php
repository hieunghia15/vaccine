@extends('admin.layout-admin', [
    'title' => __($title ?? 'Cập nhật tài khoản'),
])
@section('main')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1" style="margin-right: -5%">
                    <a href="{{ URL::previous() }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="col-sm-6">
                    <h1>Cập nhật tài khoản</h1>
                </div>
                <div class="col-sm-5" style="margin-left: 4%">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Cập nhật tài khoản</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
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
                            <h3 class="card-title">Thay đổi thông tin</h3>
                        </div>                     
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif                                            
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.account.update', $users->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Họ và tên <span class="text-danger">*</span>:</label>
                                        <input type="text" class="form-control" value="{{ $users->fullname }}"
                                            name="fullname">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Số điện thoại <span class="text-danger">*</span>:</label>
                                        <input type="text" class="form-control" disabled="true"
                                            value="{{ $users->phone }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Ngày tháng năm sinh <span class="text-danger">*</span>:</label>
                                        <input type="date" class="form-control" value="{{ $users->day_of_birth }}"
                                            name="day_of_birth">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Giới tính <span class="text-danger">*</span>:</label>
                                        @if ($users->gender == 'Nam')
                                            <select class="custom-select" name="gender">
                                                <option value="Nam" selected>Nam</option>
                                                <option value="Nữ">Nữ</option>
                                                <option value="Khác">Khác</option>
                                            </select>
                                        @elseif ($users->gender == 'Nữ')
                                            <select class="custom-select" name="gender">
                                                <option value="Nam">Nam</option>
                                                <option value="Nữ" selected>Nữ</option>
                                                <option value="Khác">Khác</option>
                                            </select>
                                        @else
                                            <select class="custom-select" name="gender">
                                                <option value="Nam">Nam</option>
                                                <option value="Nữ">Nữ</option>
                                                <option value="Khác" selected>Khác</option>
                                            </select>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Email:</label>
                                        <input type="text" class="form-control" value="{{ $users->email }}"
                                            name="email">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Số CCCD/Hộ chiếu <span
                                                class="text-danger">*</span>:</label>
                                        <input type="text" class="form-control" value="{{ $users->identification }}"
                                            name="identification">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Dân tộc <span class="text-danger">*</span>:</label>
                                        @if ($users->ethnic->id!=null)
                                            <select class="custom-select" name="ethnic_id">
                                                <option value="">-Chọn dân tộc-</option>
                                                <option value="{{$users->ethnic->id}}" selected>{{$users->ethnic->name}}</option>
                                                @foreach ( $ethnic_user as $ethnic)                                                                                                
                                                <option value="{{$ethnic->id}}">{{$ethnic->name}}</option>
                                                @endforeach                                          
                                            </select>
                                        @else
                                            <select class="custom-select" name="ethnic_id">
                                                <option value="" selected>-Chọn dân tộc-</option>
                                                @foreach ($ethnics as $ethnic)                                                                                               
                                                <option value="{{$ethnic->id}}">{{$ethnic->name}}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Quốc tịch <span class="text-danger">*</span>:</label>
                                        @if ($users->nationality->id!=null)
                                        <select class="custom-select" name="nationality_id">
                                            <option value="">-Chọn quốc tịch-</option>
                                            <option value="{{$users->nationality->id}}" selected>{{$users->nationality->name}}</option>
                                            @foreach ( $nationality_user as $nationality)                                                                                                
                                            <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                                            @endforeach                                          
                                        </select>
                                    @else
                                        <select class="custom-select" name="nationality_id">
                                            <option value="" selected>-Chọn quốc tịch-</option>
                                            @foreach ($nationalies as $nationality)                                                                                               
                                            <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Thôn/Xóm/Số nhà:</label>
                                        <input type="text" class="form-control" id="address" value="{{$users->address}}"
                                            name="address">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Tỉnh/Thành phố <span class="text-danger">*</span>:</label>
                                        @if ($users->ward_id != null)
                                        <select class="custom-select" id="province-dropdown">
                                            <option value="">-Chọn tỉnh/thành phố-</option>
                                            <option selected="selected" value="{{$users->ward->district->province->id}}">{{$users->ward->district->province->name}}</option>
                                            @foreach ($province_user as $province)
                                                <option value="{{ $province->id }}">
                                                    {{ $province->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @else
                                        <select class="custom-select" id="province-dropdown">
                                          <option value="">-Chọn tỉnh/thành phố-</option>
                                          @foreach ($provinces as $province)
                                              <option value="{{ $province->id }}">
                                                  {{ $province->name }}
                                              </option>
                                          @endforeach
                                      </select>
                                      @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Quận/Huyện <span class="text-danger">*</span>:</label>
                                        @if ($users->ward_id != null)
                                        <select class="custom-select" id="district-dropdown">
                                            <option value="  {{ $users->ward->district->id }}">
                                                {{ $users->ward->district->name }}
                                            </option>
                                        </select>
                                    @else
                                        <select class="custom-select" id="district-dropdown">
                                        </select>
                                    @endif
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Phường/Xã <span class="text-danger">*</span>:</label>
                                        @if ($users->ward_id != null)
                                        <select class="custom-select" id="ward-dropdown" name="ward_id">
                                            <option value="  {{ $users->ward->id }}">
                                                {{ $users->ward->name }}
                                            </option>
                                        </select>
                                    @else
                                        <select class="custom-select" id="ward-dropdown" name="ward_id">
                                        </select>
                                    @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
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
                            '<option value="">-Chọn quận/huyện-</option>');
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
                        $('#ward-dropdown').html('<option value="">-Chọn phường/xã-</option>');
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
