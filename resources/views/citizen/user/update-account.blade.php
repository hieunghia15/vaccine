@extends('citizen.layout-user', [
    'title' => __($title ?? 'Cập nhật thông tin cá nhân'),
])
@section('main')
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Cập nhật thông tin cá nhân</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    <div class="container p-4">
        <div class="row">
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header bg-info">
                        <h3 class="card-title text-white">Thay đổi thông tin</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form id="updateAccountUser" {{ route('citizen.user.update-account', $users->id) }} method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Họ và tên <span class="text-danger">*</span>:</label>
                                    <input type="text" class="form-control" value="{{ $users->fullname }}" name="fullname"
                                        id="fullname">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Số điện thoại <span class="text-danger">*</span>:</label>
                                    <input type="text" class="form-control" disabled="true" value="{{ $users->phone }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Ngày tháng năm sinh <span class="text-danger">*</span>:</label>
                                    <input type="date" class="form-control"
                                    value="{{ $users->day_of_birth }}" name="day_of_birth">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Giới tính <span class="text-danger">*</span>:</label>
                                    @if ($users->gender == 'Nam')
                                    <select class="custom-select" name="gender" id="gender">
                                        <option value="Nam" selected>Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                @elseif ($users->gender == 'Nữ')
                                    <select class="custom-select" name="gender" id="gender">
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ" selected>Nữ</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                @else
                                    <select class="custom-select" name="gender" id="gender">
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác" selected>Khác</option>
                                    </select>
                                @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Email:</label>
                                    <input type="email" class="form-control" value="{{ $users->email }}" name="email" id="email">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Số CCCD/Hộ chiếu <span class="text-danger">*</span>:</label>
                                    <input type="text" class="form-control" value="{{ $users->identification }}" name="identification"
                                        id="identification">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Dân tộc <span class="text-danger">*</span>:</label>
                                    @if ($users->ethnic->id!=null)
                                            <select class="custom-select" name="ethnic_id" id="ethnic">
                                                <option value="">-Chọn dân tộc-</option>
                                                <option value="{{$users->ethnic->id}}" selected>{{$users->ethnic->name}}</option>
                                                @foreach ( $ethnic_user as $ethnic)                                                                                                
                                                <option value="{{$ethnic->id}}">{{$ethnic->name}}</option>
                                                @endforeach                                          
                                            </select>
                                        @else
                                            <select class="custom-select" name="ethnic_id" id="ethnic">
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
                                    <select class="custom-select" name="nationality_id" id="nationality">
                                        <option value="">-Chọn quốc tịch-</option>
                                        <option value="{{$users->nationality->id}}" selected>{{$users->nationality->name}}</option>
                                        @foreach ( $nationality_user as $nationality)                                                                                                
                                        <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                                        @endforeach                                          
                                    </select>
                                @else
                                    <select class="custom-select" name="nationality_id" id="nationality">
                                        <option value="" selected>-Chọn quốc tịch-</option>
                                        @foreach ($nationalies as $nationality)                                                                                               
                                        <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                                        @endforeach
                                    </select>
                                @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Thôn/Xóm/Số nhà:</label>
                                    <input type="text" class="form-control" id="address" value="{{$users->address}}" name="address"
                                        id="address">
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
                            <button type="reset" class="btn btn-info">Nhập lại</button>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
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
