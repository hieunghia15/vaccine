@extends('admin.layout-admin', [
    'title' => __($title ?? 'Chi tiết đơn đăng ký'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1" style="margin-right: -5%">
                    <a href="{{ route('admin.injections.registration-unconfirmed') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="col-sm-6">
                    <h1>Chi tiết đơn đăng ký</h1>
                </div>
                <div class="col-sm-5" style="margin-left: 5%">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Chi tiết đơn đăng ký</li>
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
                            <h3 class="card-title" style="margin-top:0.25rem">Chi tiết đơn đăng ký tiêm chủng</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Đăng ký tiêm mũi thứ <span class="text-danger">*</span></label>
                                    <br>
                                    @if ($vaccine_registration->vaccination == 'first')
                                        <input type="text" class="form-control col-md-4" value="Mũi tiêm mới nhất"
                                            disabled>
                                    @else
                                        <input type="text" class="form-control col-md-4" value="Mũi tiêm tiếp theo"
                                            disabled>
                                    @endif
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6>1. Thông tin cá nhân công dân</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Họ tên <span class="text-danger">*</span>:</label>
                                            <input type="text" class="form-control text-left"
                                                value="{{ $vaccine_registration->user->fullname }}" disabled>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Ngày tháng năm sinh <span class="text-danger">*</span>:</label>
                                            <input type="date" class="form-control"
                                                value="
                                                {{ $vaccine_registration->user->day_of_birth }}
                                                "
                                                disabled>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Giới tính <span class="text-danger">*</span>:</label>
                                            <input type="text" class="form-control text-left"
                                                value="{{ $vaccine_registration->user->gender }}" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Số điện thoại <span class="text-danger">*</span>:</label>
                                            <input type="text" class="form-control text-left"
                                                value="{{ $vaccine_registration->user->phone }}"
                                                disabled>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Email <span class="text-danger">*</span>:</label>
                                            <input type="text" class="form-control text-left"
                                                value="{{ $vaccine_registration->user->email }}"
                                                disabled>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Số CMDN/CCCD/Hộ chiếu <span class="text-danger">*</span>:</label>
                                            <input type="text" class="form-control text-left"
                                                value="{{ $vaccine_registration->user->identification }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Số thẻ BHYT:</label>
                                            <input type="text"
                                                class="form-control @error('health_insurance_number') is-invalid @enderror"
                                                value="{{ $vaccine_registration->info->health_insurance_number }}"
                                                name="health_insurance_number" disabled>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Nhóm ưu tiên <span class="text-danger">*</span>:</label>
                                            <select class="custom-select @error('priority_group_id') is-invalid @enderror"
                                                name="priority_group_id" id="priority_group">
                                                <option>{{ $vaccine_registration->info->priorityGroup->name }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Dân tộc <span class="text-danger">*</span>:</label>
                                            <select class="custom-select">
                                                <option>
                                                    {{ $vaccine_registration->user->ethnic->name }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Quốc tịch <span class="text-danger">*</span>:</label>
                                            <select class="custom-select">
                                                <option>
                                                    {{ $vaccine_registration->user->nationality->name }}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Nghề nghiệp <span class="text-danger">*</span>:</label>
                                            <input type="text" class="form-control @error('job') is-invalid @enderror"
                                                value="{{ $vaccine_registration->info->job }}" name="job"
                                                id="job" disabled>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Địa chỉ hiện tại <span class="text-danger">*</span>:</label>
                                            <input type="text"
                                                class="form-control @error('address') is-invalid @enderror"
                                                value="{{ $vaccine_registration->info->address }}" name="address"
                                                id="address" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Tỉnh/Thành Phố <span class="text-danger">*</span>:</label>
                                            <select class="custom-select" id="province-dropdown">
                                                <option>
                                                    {{ $vaccine_registration->info->ward->district->province->name }}
                                                </option>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Quận/Huyện <span class="text-danger">*</span>:</label>
                                            <select class="custom-select" id="district-dropdown">
                                                <option value="">
                                                    {{ $vaccine_registration->info->ward->district->name }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Phường/Xã <span class="text-danger">*</span>:</label>
                                            <select class="custom-select @error('ward_id') is-invalid @enderror"
                                                id="ward-dropdown" name="ward_id">
                                                <option value=""> {{ $vaccine_registration->info->ward->name }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Họ và tên người giám hộ <span class="text-danger"></span>:</label>
                                            <input type="text"
                                                class="form-control @error('guardian') is-invalid @enderror"
                                                value="{{ $vaccine_registration->info->guardian }}" name="guardian">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Mối quan hệ <span class="text-danger"></span>:</label>
                                            <select class="custom-select @error('relation_id') is-invalid @enderror"
                                                name="relation_id">
                                                @if (isset($vaccine_registration->info->relation->name))
                                                    <option value="">
                                                        {{ $vaccine_registration->info->relation->name }}</option>
                                                @else
                                                    <option value=""></option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Số điện thoại người giám hộ <span class="text-danger"></span>:</label>
                                            <input type="text"
                                                class="form-control @error('guardian_phone_number') is-invalid @enderror"
                                                value="{{ $vaccine_registration->info->guardian_phone_number }}"
                                                name="guardian_phone_number">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6>2. Thông tin đăng ký tiêm chủng</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Ngày tiêm dự kiến <span class="text-danger">*</span>:</label>
                                            <input type="date"
                                                class="form-control @error('preferred_date') is-invalid @enderror"
                                                value="{{ $vaccine_registration->info->preferred_date }}"
                                                name="preferred_date" id="preferred_date" disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Buổi tiêm mong muốn (dự kiến) <span
                                                    class="text-danger">*</span>:</label>
                                            <select class="custom-select @error('session') is-invalid @enderror"
                                                name="session" id="session">
                                                <option value="">{{ $vaccine_registration->info->session }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
