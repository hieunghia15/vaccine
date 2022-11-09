<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Đăng ký tiêm chủng</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('medino/assets/css/animate-3.7.0.css') }}">
    <link rel="stylesheet" href="{{ asset('medino/assets/css/font-awesome-4.7.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('medino/assets/css/bootstrap-4.1.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('medino/assets/css/owl-carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('medino/assets/css/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('medino/assets/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('medino/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
</head>

<body>
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="text-center text-danger" style="font-weight: bold">Hãy tiêm chủng đầy đủ và đúng thời
                            gian để bảo vệ bản thân và
                            cộng đồng trước các biến chủng Covid-19 mới</h6>
                    </div>
                </div>
            </div>
        </div>
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        {{-- <a href="index.html"><img src="medino/assets/images/logo/logo.png" alt="" title="" /></a> --}}
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="{{ route('guest.index') }}">Trang chủ</a></li>
                            <li><a href="{{route('citizen.registration.register-person')}}">Đăng ký tiêm</a></li>
                            <li class="menu-has-children"><a href="{{ route('guest.vaccine') }}">Vắc xin</a>                     
                            </li>   
                            <li class="menu-has-children"><a href="">Quy trình</a>
                                <ul>
                                    <li><a href="{{ route('guest.vaccination-process') }}">Tiêm chủng</a></li>
                                    <li><a href="{{ route('guest.registration-process') }}">Đăng ký tiêm chủng</a></li>                              
                                </ul>
                            </li>                   
                            @if (Auth::check())
                            <li class="menu-has-children"><a href="">{{ Auth::user()->fullname }}</a>
                                <ul>
                                    <li><a href="{{ route('citizen.user.user-account') }}">Thông tin cá nhân</a></li>
                                    <li><a href="{{ route('citizen.user.certificate') }}">Chứng nhận tiêm chủng</a></li>
                                    <li><a href="{{ route('citizen.user.vaccine-passport') }}">Hộ chiếu vắc xin</a></li>
                                    <li><a href="{{ route('citizen.user.registration-status') }}">Trạng thái đăng ký</a>
                                    </li>
                                    <li><a href="{{ route('citizen.user.user-change-password') }}">Đổi mật khẩu</a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                              this.closest('form').submit();">Đăng
                                                xuất</a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li class="menu-active"><a href="{{ route('login') }}">Đăng nhập</a></li>
                            <li class="menu-active"><a href="{{ route('register') }}">Đăng ký</a></li>
                            @endif
                        </ul>
                    </nav>
                    <!-- #nav-menu-container -->
                </div>
            </div>
        </div>
    </header>

    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Đăng ký tiêm chủng</h1>
                </div>
            </div>
        </div>
    </section>
    <form action="{{ route('citizen.registration.store-register-person') }}" method="POST">
        @csrf
        <!-- Banner Area End -->
        <div class="container p-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-5 p-4 bg-white shadow-sm">
                        <h3>Đăng ký tiêm chủng cho công dân</h3>
                        <div id="stepper1" class="bs-stepper linear">
                            <div class="bs-stepper-header" role="tablist">
                                <div class="step active" data-target="#test-l-1">
                                    <button type="button" class="step-trigger" role="tab" id="stepper1trigger1"
                                        aria-controls="test-l-1" aria-selected="true">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label">Thông tin cá nhân</span>
                                    </button>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-2">
                                    <button type="button" class="step-trigger" role="tab" id="stepper1trigger2"
                                        aria-controls="test-l-2" aria-selected="false" disabled="disabled">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">Tiền sử bệnh</span>
                                    </button>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-3">
                                    <button type="button" class="step-trigger" role="tab" id="stepper1trigger3"
                                        aria-controls="test-l-3" aria-selected="false" disabled="disabled">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label">Phiếu đồng ý tiêm chủng</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bs-stepper-content">
                                <div id="test-l-1" role="tabpanel" class="bs-stepper-pane active dstepper-block"
                                    aria-labelledby="stepper1trigger1">
                                    <div class="card-body">
                                        <div class="container py4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Đăng ký tiêm mũi thứ <span
                                                            class="text-danger">*</span></label>
                                                    <br>
                                                    <select
                                                        class="custom-select col-md-3 @error('vaccination') is-invalid @enderror"
                                                        name="vaccination">
                                                        @if ($next_dose != null)
                                                            <option value="">- Chọn mũi tiêm -</option>
                                                            <option value="next" selected>Mũi tiêm tiếp theo</option>
                                                        @else
                                                            <option value="">- Chọn mũi tiêm -</option>
                                                            <option value="first" selected>Mũi tiêm thứ nhất</option>
                                                        @endif
                                                    </select>
                                                    @error('vaccination')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <br>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h6>1. Thông tin công dân đăng ký</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label>Họ tên <span class="text-danger">*</span>:</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $users->fullname }}" disabled>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Ngày tháng năm sinh <span
                                                                    class="text-danger">*</span>:</label>
                                                            <input type="date" class="form-control"
                                                                value="{{ $users->day_of_birth }}" disabled>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Giới tính <span
                                                                    class="text-danger">*</span>:</label>
                                                            <select class="custom-select" name="gender" disabled>
                                                                <option value="{{ $users->gender }}">Nam</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label>Số điện thoại <span
                                                                    class="text-danger">*</span>:</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $users->phone }}" disabled>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Email <span class="text-danger">*</span>:</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $users->email }}" disabled>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Số CMDN/CCCD/Hộ chiếu <span
                                                                    class="text-danger">*</span>:</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $users->identification }}" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label>Số thẻ BHYT:</label>
                                                            <input type="text"
                                                                class="form-control @error('health_insurance_number') is-invalid @enderror"
                                                                value="{{ old('health_insurance_number') }}"
                                                                name="health_insurance_number">
                                                            @error('health_insurance_number')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Nhóm ưu tiên <span
                                                                    class="text-danger">*</span>:</label>
                                                            <select
                                                                class="custom-select @error('priority_group_id') is-invalid @enderror"
                                                                name="priority_group_id" id="priority_group">
                                                                <option value="">Chọn nhóm ưu tiên</option>
                                                                @foreach ($priorities as $priority)
                                                                    <option value="{{ $priority->id }}">
                                                                        {{ $priority->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('priority_group_id')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Dân tộc <span class="text-danger">*</span>:</label>
                                                            <select class="custom-select" disabled>
                                                                <option value="{{ $users->ethnic->id }}">
                                                                    {{ $users->ethnic->name }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label>Quốc tịch <span
                                                                    class="text-danger">*</span>:</label>
                                                            <select class="custom-select" disabled>
                                                                <option value="{{ $users->nationality->id }}">
                                                                    {{ $users->nationality->name }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Nghề nghiệp <span
                                                                    class="text-danger">*</span>:</label>
                                                            <input type="text"
                                                                class="form-control @error('job') is-invalid @enderror"
                                                                value="{{ old('job') }}" name="job"
                                                                id="job">
                                                            @error('job')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Địa chỉ hiện tại <span
                                                                    class="text-danger">*</span>:</label>
                                                            <input type="text"
                                                                class="form-control @error('address') is-invalid @enderror"
                                                                value="{{ old('address') }}" name="address"
                                                                id="address">
                                                            @error('address')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label>Tỉnh/Thành Phố <span
                                                                    class="text-danger">*</span>:</label>
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
                                                            <label>Quận/Huyện <span
                                                                    class="text-danger">*</span>:</label>
                                                            <select class="custom-select" id="district-dropdown">
                                                                <option value="">Chọn quận/huyện</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Phường/Xã <span
                                                                    class="text-danger">*</span>:</label>
                                                            <select
                                                                class="custom-select @error('ward_id') is-invalid @enderror"
                                                                id="ward-dropdown" name="ward_id">
                                                                <option value="">Chọn phường/xã</option>
                                                            </select>
                                                            @error('ward_id')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label>Họ và tên người giám hộ <span
                                                                    class="text-danger"></span>:</label>
                                                            <input type="text"
                                                                class="form-control @error('guardian') is-invalid @enderror"
                                                                value="{{ old('guardian') }}" name="guardian">
                                                            @error('guardian')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Mối quan hệ <span
                                                                    class="text-danger"></span>:</label>
                                                            <select
                                                                class="custom-select @error('relation_id') is-invalid @enderror"
                                                                name="relation_id">
                                                                <option value="">Chọn mối quan hệ</option>
                                                                @foreach ($relations as $relation)
                                                                    <option value="{{ $relation->id }}">
                                                                        {{ $relation->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('relation')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Số điện thoại người giám hộ <span
                                                                    class="text-danger"></span>:</label>
                                                            <input type="text"
                                                                class="form-control @error('guardian_phone_number') is-invalid @enderror"
                                                                value="{{ old('guardian_phone_number') }}"
                                                                name="guardian_phone_number">
                                                            @error('guardian_phone_number')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h6>2. Thông tin đăng ký tiêm chủng</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label>Ngày tiêm dự kiến <span
                                                                    class="text-danger">*</span>:</label>
                                                            <input type="date"
                                                                class="form-control @error('preferred_date') is-invalid @enderror"
                                                                value="{{ old('preferred_date') }}"
                                                                name="preferred_date" id="preferred_date">
                                                            @error('preferred_date')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Buổi tiêm mong muốn (dự kiến) <span
                                                                    class="text-danger">*</span>:</label>
                                                            <select
                                                                class="custom-select @error('session') is-invalid @enderror"
                                                                name="session" id="session">
                                                                <option value="">Chọn buổi tiêm</option>
                                                                <option value="Sáng">Sáng</option>
                                                                <option value="Chiều">Chiều</option>
                                                                <option value="Cả ngày">Cả ngày</option>
                                                            </select>
                                                            @error('session')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    @if ($certificates != null)
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h6>3. Lịch sử mũi tiêm mới nhất</h6>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label>Tên vắc xin <span
                                                                        class="text-danger">*</span>:</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $vaccine_name }}" name=""
                                                                    disabled>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Thời gian tiêm<span
                                                                        class="text-danger">*</span>:</label>
                                                                <input type="datetime" class="form-control"
                                                                    value="{{ $certificates->created_at }}"
                                                                    name="" disabled>
                                                                    <input type="hidden" name="certificate_id" value="{{$certificates->id}}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label>Phản ứng sau tiêm<span
                                                                        class="text-danger">*</span>:</label>
                                                                @if ($reaction_statuses!=null)
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $current_status }}" name=""
                                                                        disabled>
                                                                @else
                                                                    <input type="text" class="form-control"
                                                                        value="" name="" disabled>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @else
                                                    @endif
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <h6 class="sfbold text-danger">Lưu ý:</h6>
                                                            <ul class="text-danger">
                                                                <li>
                                                                    - Việc đăng ký thông tin hoàn toàn bảo mật và
                                                                    phục
                                                                    vụ cho
                                                                    chiến
                                                                    dịch tiêm chủng Vắc xin COVID - 19
                                                                </li>
                                                                <li>
                                                                    - Xin vui lòng kiểm tra kỹ các thông tin bắt
                                                                    buộc(VD: Thông tin cá nhân, nghề nghiệp,địa chỉ hiện tại...)
                                                                </li>
                                                                <li>
                                                                    - Bằng việc nhấn nút "Xác nhận", bạn hoàn toàn
                                                                    hiểu
                                                                    và đồng
                                                                    ý
                                                                    chịu trách nhiệm với các thông tin đã cung cấp.
                                                                </li>
                                                                <li>
                                                                    - Nếu bạn dưới 18 tuổi, vui lòng nhập số điện
                                                                    thoại
                                                                    của người giám hộ để đăng ký tiêm
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-left:42%">
                                        <a href="{{ route('guest.index') }}"
                                            class="btn btn-outline-danger text-center">Huỷ
                                            bỏ</a>
                                        <button class="btn btn-primary text-center" type="button"
                                            onclick="stepper1.next()">Tiếp
                                            tục</button>
                                    </div>
                                </div>
                                <div id="test-l-2" role="tabpanel" class="bs-stepper-pane"
                                    aria-labelledby="stepper1trigger2">
                                    <div class="card-body">
                                        <div class="container py4">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h6>Tiền sử bệnh</h6>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="col-md-8">Tiền sử</th>
                                                                        <th class="col-md-1">Có</th>
                                                                        <th class="col-md-1">Không</th>
                                                                        <th class="col-md-1">Không rõ</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="col-md-9">1. Tiền sử phản vệ từ
                                                                            độ 2
                                                                            trở lên</th>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="anaphylaxis"
                                                                                value="Có"></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="anaphylaxis"
                                                                                value="Không" checked></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="anaphylaxis"
                                                                                value="Không rõ"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-md-9">2. Tiền sử bị COVID-19
                                                                            trong
                                                                            vòng 6 tháng</th>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="covid_19"
                                                                                value="Có">
                                                                        </td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="covid_19"
                                                                                value="Không" checked></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="covid_19"
                                                                                value="Không rõ"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-md-9">3. Tiền sử tiêm vắc
                                                                            xin
                                                                            khác
                                                                            trong 14 ngày qua</th>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio"
                                                                                name="other_vaccination"
                                                                                value="Có"></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio"
                                                                                name="other_vaccination"
                                                                                value="Không" checked>
                                                                        </td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio"
                                                                                name="other_vaccination"
                                                                                value="Không rõ"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-md-9">4. Tiền sử suy giảm
                                                                            miễn
                                                                            dịch, ung thư giai đoạn cuối, cắt lách,
                                                                        </th>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio"
                                                                                name="immunosuppression"
                                                                                value="Có"></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio"
                                                                                name="immunosuppression"
                                                                                value="Không" checked>
                                                                        </td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio"
                                                                                name="immunosuppression"
                                                                                value="Không rõ"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-md-9">5. Đang dùng thuốc ức
                                                                            chế
                                                                            miễn dịch, corticoid liều ca (tương
                                                                            đương
                                                                            hoặc hơn
                                                                            2mg prednisolon/kg/ngày trong ít nhất 7
                                                                            ngày) hoặc
                                                                            điều trị hóa trị, xạ trị</th>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio"
                                                                                name="immunosuppressant"
                                                                                value="Có"></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio"
                                                                                name="immunosuppressant"
                                                                                value="Không" checked>
                                                                        </td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio"
                                                                                name="immunosuppressant"
                                                                                value="Không rõ"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-md-9">6. Bệnh cấp tính</th>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="acute_illness"
                                                                                value="Có"></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="acute_illness"
                                                                                value="Không" checked></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="acute_illness"
                                                                                value="Không rõ"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-md-9">7. Tiền sử bệnh mạn
                                                                            tính,
                                                                            đang tiến triển</th>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="chronic"
                                                                                value="Có">
                                                                        </td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="chronic"
                                                                                value="Không" checked></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="chronic"
                                                                                value="Không rõ"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-md-9">8. Tiền sử bệnh mạn
                                                                            tính
                                                                            đã
                                                                            điều trị ổn</th>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="chronic_illness"
                                                                                value="Có"></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="chronic_illness"
                                                                                value="Không" checked>
                                                                        </td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="chronic_illness"
                                                                                value="Không rõ"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-md-9">9. Đang mang thai, phụ
                                                                            nữ
                                                                            đang nuôi con bằng sữa mẹ</th>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="pregnant"
                                                                                value="Có">
                                                                        </td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="pregnant"
                                                                                value="Không" checked></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="pregnant"
                                                                                value="Không rõ"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-md-9">10. Độ tuổi: ≥65 tuổi
                                                                        </th>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="over_age"
                                                                                value="Có"></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="over_age"
                                                                                value="Không" checked></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="over_age"
                                                                                value="Không rõ"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-md-9">11. Tiền sử rối loạn
                                                                            đông
                                                                            máu/cầm máu hoặc đang dùng thuốc chống
                                                                            đông
                                                                        </th>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="coagulation"
                                                                                value="Có"></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="coagulation"
                                                                                value="Không" checked></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="coagulation"
                                                                                value="Không rõ"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="col-md-9">12. Tiền sử dị ứng với
                                                                            các
                                                                            dị nguyên khác</th>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="allergy"
                                                                                value="Có">
                                                                        </td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="allergy"
                                                                                value="Không" checked></td>
                                                                        <td> <input class="form-check-input"
                                                                                type="radio" name="allergy"
                                                                                value="Không rõ"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-left:42%">
                                        <button class="btn btn-outline-danger" type="button"
                                            onclick="stepper1.previous()">Quay
                                            lại</button>
                                        <button class="btn btn-primary" type="button" onclick="stepper1.next()">Tiếp
                                            tục</button>
                                    </div>
                                </div>
                                <div id="test-l-3" role="tabpanel" class="bs-stepper-pane text-center"
                                    aria-labelledby="stepper1trigger3">
                                    <div class="card-body">
                                        <div class="container py4">
                                            <div class="row">
                                                <div class="col-12 aos-init aos-animate" data-aos="fade-up"
                                                    data-aos-delay="200">
                                                    <center>
                                                        <h4>Phiếu đồng ý tiêm chủng</h4>
                                                    </center>
                                                    <ul class="list-unstyled">
                                                        <li class="mb-3" style="line-height: 25pt;">
                                                            <div class="d-flex flex-row " style="align-items:center;">
                                                                <img alt="" class="mr-3"
                                                                    src="../../medino/assets/images/shield.svg"
                                                                    style="width:25px; height:50px;">
                                                                <p class="text-left">1. Tiêm chủng vắc xin là biện
                                                                    pháp
                                                                    phòng chống dịch
                                                                    hiệu quả, tuy nhiên vắc xin phòng COVID-19 có
                                                                    thể
                                                                    không
                                                                    phòng được bệnh hoàn
                                                                    toàn. Người được tiêm chủng vắc xin phòng
                                                                    COVID-19
                                                                    có thể
                                                                    phòng được bệnh
                                                                    hoặc giảm mức độ nặng nếu mắc bệnh. Tuy nhiên,
                                                                    sau
                                                                    khi tiêm
                                                                    chủng vẫn phải
                                                                    tiếp tục thực hiện nghiêm các biện pháp phòng
                                                                    chống
                                                                    dịch
                                                                    theo quy định.</p>
                                                            </div>
                                                        </li>
                                                        <li class="mb-3" style="line-height: 25pt;">
                                                            <div class="d-flex flex-row" style="align-items:center;">
                                                                <img alt="" class="mr-3"
                                                                    src="../../medino/assets/images/vaccine2.svg"
                                                                    style="width:25px; height:50px;">
                                                                <p class="text-left">2. Tiêm chủng vắc xin phòng
                                                                    COVID-19 có thể gây ra
                                                                    một
                                                                    số biểu hiện tại chỗ tiêm hoặc toàn thân như
                                                                    sưng,
                                                                    đau chỗ
                                                                    tiêm, nhức đầu,
                                                                    buồn nôn, sốt, đau cơ…hoặc tai biến nặng sau
                                                                    tiêm
                                                                    chủng.
                                                                    Tiêm vắc xin mũi 2
                                                                    do Pfizer sản xuất ở người đã tiêm mũi 1 bằng
                                                                    vắc
                                                                    xin
                                                                    AstraZeneca có thể
                                                                    tăng khả năng xảy ra phản ứng thông thường sau
                                                                    tiêm
                                                                    chủng.
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="mb-3" style="line-height: 25pt;">
                                                            <div class="d-flex flex-row" style="align-items:center;">
                                                                <img alt="" class="mr-3"
                                                                    src="../../medino/assets/images/hospital.svg"
                                                                    style="width:25px; height:50px;">
                                                                <p class="text-left">3. Khi có triệu chứng bất
                                                                    thường
                                                                    về
                                                                    sức khỏe, người
                                                                    được tiêm chủng cần đến ngay cơ sở y tế gần nhất
                                                                    để
                                                                    được tư
                                                                    vấn, thăm khám
                                                                    và điều trị kịp thời. </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <label>Sau khi đã đọc các thông tin nêu trên, tôi đã hiểu về
                                                                các
                                                                nguy cơ và:</label>
                                                            <input
                                                                class="form-control @error('status') is-invalid @enderror"
                                                                type="checkbox" name="status" value="1"
                                                                checked>
                                                            <p>Đồng ý tiêm chủng</p>
                                                            @error('status')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-3"></div>
                                                    </div>

                                                    <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-danger mt-5" type="button"
                                        onclick="stepper1.previous()">Quay
                                        lại</button>
                                    <button type="submit" class="btn btn-primary mt-5">Xác nhận</button>
                                </div>
                            </div>
                        </div>
                    </div>
    </form>
    </div>
    </div>
    </div>

    <footer class="footer-area section-padding" style="padding: 50px 0 20px">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">Trang chủ</h3>
                            <ul>
                                <li class="mb-2"><a href="#">ĐĂNG KÝ TIÊM</a></li>
                                <li class="mb-2"><a href="#">TRA CỨU TÌNH TRẠNG TIÊM CHỦNG</a></li>
                                <li class="mb-2"><a href="#">TRA CỨU TÌNH TRẠNG ĐĂNG KÝ TIÊM</a></li>
                                <li class="mb-2"><a href="#">VẮC XIN</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6">
                        <div class="single-widge-home">
                            <h3 class="mb-2">
                                "Toàn bộ người dân đang sinh sống và làm việc tại Việt Nam hãy đi tiêm vắc xin phòng
                                COVID-19.
                                Tiêm chủng không chỉ là quyền lợi, trách nhiệm của mỗi cá nhân mà còn là trách nhiệm đối
                                với
                                cộng đồng", <p class="text-warning"> Thứ trưởng Nguyễn Trường Sơn kêu gọi</p>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <span>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> | Chung Hieu Nghia
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Javascript -->
    <script src="{{ asset('medino/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('medino/assets/js/vendor/bootstrap-4.1.3.min.js') }}"></script>
    <script src="{{ asset('medino/assets/js/vendor/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('medino/assets/js/vendor/superfish.min.js') }}"></script>
    <script src="{{ asset('medino/assets/js/main.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script>
        var stepper1
        var stepper2
        var stepper3
        var stepper4
        var stepperForm

        document.addEventListener('DOMContentLoaded', function() {
            stepper1 = new Stepper(document.querySelector('#stepper1'))
            stepper2 = new Stepper(document.querySelector('#stepper2'), {
                linear: false
            })
            stepper3 = new Stepper(document.querySelector('#stepper3'), {
                linear: false,
                animation: true
            })
            stepper4 = new Stepper(document.querySelector('#stepper4'))

            var stepperFormEl = document.querySelector('#stepperForm')
            stepperForm = new Stepper(stepperFormEl, {
                animation: true
            })

            var btnNextList = [].slice.call(document.querySelectorAll('.btn-next-form'))
            var stepperPanList = [].slice.call(stepperFormEl.querySelectorAll('.bs-stepper-pane'))
            var inputMailForm = document.getElementById('inputMailForm')
            var inputPasswordForm = document.getElementById('inputPasswordForm')
            var form = stepperFormEl.querySelector('.bs-stepper-content form')

            btnNextList.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    stepperForm.next()
                })
            })

            stepperFormEl.addEventListener('show.bs-stepper', function(event) {
                form.classList.remove('was-validated')
                var nextStep = event.detail.indexStep
                var currentStep = nextStep

                if (currentStep > 0) {
                    currentStep--
                }

                var stepperPan = stepperPanList[currentStep]

                if ((stepperPan.getAttribute('id') === 'test-form-1' && !inputMailForm.value.length) ||
                    (stepperPan.getAttribute('id') === 'test-form-2' && !inputPasswordForm.value.length)) {
                    event.preventDefault()
                    form.classList.add('was-validated')
                }
            })
        })
    </script>

    <!-- Address -->

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
