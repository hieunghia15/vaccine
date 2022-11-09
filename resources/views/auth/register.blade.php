<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title ?? '' }} Đăng ký</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('stisla/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('stisla/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('stisla/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('stisla/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/assets/css/components.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('stisla/assets/css/custom.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <h4>HỆ THỐNG QUẢN LÝ TIÊM CHỦNG VẮC XIN COVID-19</h4>
                        </div>
                        <div class="card card-primary" style="border:2px solid #6777ef">
                            <div class="card-header">
                                <h4>ĐĂNG KÝ TÀI KHOẢN</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <!-- FullName -->
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="fullname">Họ tên <span class="text-danger">*</span>:</label>
                                                <input id="fullname" type="text"
                                                    class="form-control @error('fullname') is-invalid @enderror @error('fullname') is-invalid @enderror"
                                                    name="fullname" value="{{ old('fullname') }}" autofocus>
                                                @error('fullname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <!-- Phone -->
                                            <div class="form-group col-6">
                                                <label for="phone">Số điện thoại <span
                                                        class="text-danger">*</span>:</label>
                                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                    value="{{ old('phone') }}"
                                                    title="Số điện thoại phải đúng định dạng">
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Password -->
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="password" class="d-block">Mật khẩu <span
                                                        class="text-danger">*</span>:</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror pwstrength"
                                                    data-indicator="pwindicator" value="{{old('password')}}" name="password"
                                                    autocomplete="new-password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <div id="pwindicator" class="pwindicator">
                                                    <div class="bar"></div>
                                                    <div class="label"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="password2" class="d-block">Xác nhận mật khẩu <span
                                                        class="text-danger">*</span>:</label>
                                                <input id="password2" type="password" class="form-control"
                                                    name="password_confirmation" {{old('password_confirmation')}}>
                                            </div>
                                        </div>
                                        <!-- Birthday -->
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="birthday">Ngày tháng năm sinh <span
                                                        class="text-danger">*</span>:</label>
                                                <input id="birthday" type="date" class="form-control @error('day_of_birth') is-invalid @enderror"
                                                    name="day_of_birth" value="{{ old('day_of_birth') }}">
                                                    @error('day_of_birth')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <!-- Gender -->
                                            <div class="form-group col-6">
                                                <label for="gender">Giới tính <span
                                                        class="text-danger">*</span>:</label>
                                                <select id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror">
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
                                        </div>
                                        <!-- Email -->
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="email">Email:</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <!-- Identification -->
                                            <div class="form-group col-6">
                                                <label for="identification">Số CCCD/Hộ chiếu <span
                                                        class="text-danger">*</span>:</label>
                                                <input id="identification" type="text" class="form-control @error('identification') is-invalid @enderror"
                                                    name="identification" value="{{ old('identification') }}">
                                                    @error('identification')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Ethnic -->
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="ethnic">Dân tộc<span
                                                        class="text-danger">*</span>:</label>
                                                <select id="ethnic_id" name="ethnic_id" class="form-control @error('ethnic_id') is-invalid @enderror">
                                                    @foreach (App\Models\Ethnic::all() as $ethnics)
                                                        <option value="{{ $ethnics->id }}">{{ $ethnics->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                 @error('ethnic_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <!-- Nationality -->
                                            <div class="form-group col-6">
                                                <label for="identification">Quốc tịch<span
                                                        class="text-danger">*</span>:</label>
                                                <select id="nationality_id" name="nationality_id"
                                                    class="form-control @error('nationality_id') is-invalid @enderror">
                                                    @foreach (App\Models\Nationality::all() as $nationalities)
                                                        <option value="{{ $nationalities->id }}">
                                                            {{ $nationalities->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('nationality_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <!-- Address -->
                                        {{-- @include('location.index') --}}
                                        <div class="tab-pane" id="address">
                                            <div class="row gy-4">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="province">Tỉnh/Thành Phố <span
                                                                class="text-danger">*</span>:</label>
                                                        <select class="form-control" id="province-dropdown">
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
                                                        <label for="district">Quận/Huyện <span
                                                                class="text-danger">*</span>:</label>
                                                        <select class="form-control" id="district-dropdown">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="ward">Phường/Xã <span
                                                                class="text-danger">*</span>:</label>
                                                        <select class="form-control @error('ward_id') is-invalid @enderror" id="ward-dropdown"
                                                            name="ward_id">
                                                        </select>
                                                        @error('ward_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">Thôn/Xóm/Số nhà:</label>
                                                        <input id="address" type="text" class="form-control"
                                                            name="address">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .tab-pane -->
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="agree" class="custom-control-input"
                                                    id="agree">
                                                <a href="{{ route('login') }}"
                                                    class="underline text-sm text-gray-600 hover:text-gray-900">Bạn đã
                                                    có tài khoản? Đăng nhập ngay</a>
                                            </div>
                                        </div>
                                        <div class="form-group" style="width:25%; margin-left:38%">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                Đăng ký
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="simple-footer">
                                Copyright &copy; 2022 Chung Hieu Nghia
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('stisla/assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/popper.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('stisla/assets/modules/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/chart.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('stisla/assets/js/page/index.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('stisla/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('stisla/assets/js/custom.js') }}"></script>

    <!-- Address -->
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

</body>

</html>
