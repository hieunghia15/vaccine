@extends('admin.layout-admin', [
    'title' => __($title ?? 'Tài khoản'),
])
@section('main')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tài khoản</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Tài khoản</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="../../adminLTE/dist/img/avatardefault.png" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $users->fullname }}</h3>

                            <p class="text-muted text-center">Nhân viên quản lý tiêm chủng</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Dân tộc</b> <a class="float-right">{{ $users->ethnic->name }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Quốc tịch</b> <a class="float-right">{{ $users->nationality->name }}</a>
                                </li>
                            </ul>
                            <a href="{{ route('admin.account.edit', $users->id) }}" class="btn btn-primary btn-block"><b>Cập
                                    nhật tài khoản</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Thông tin
                                        tài khoản</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="settings">

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Họ và tên</label>
                                        <div class="col-sm-10">
                                            <p style="margin-top: 1%">{{ $users->fullname }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Giới tính</label>
                                        <div class="col-sm-10">
                                            <p style="margin-top: 1%">{{ $users->gender }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Ngày sinh</label>
                                        <div class="col-sm-10">
                                            <p style="margin-top: 1%">{{ $birthday }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Số điện thoại</label>
                                        <div class="col-sm-10">
                                            <p style="margin-top: 1%">{{ $users->phone }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">
                                            Số CCCD/Hộ chiếu:</label>
                                        <div class="col-sm-10">
                                            <p style="margin-top: 1%">{{ $users->identification }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">
                                            Email:</label>
                                        <div class="col-sm-10">
                                            <p style="margin-top: 1%">{{ $users->email }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">
                                            Địa chỉ:</label>
                                        <div class="col-sm-10">
                                            @if ($users->ward_id != null)
                                                <p style="margin-top: 1%">
                                                    @if (!$users->address)
                                                        {{ $users->ward->name }},
                                                        {{ $users->ward->district->name }},
                                                        {{ $users->ward->district->province->type }}
                                                        {{ $users->ward->district->province->name }}
                                                    @else
                                                        {{ $users->address }},
                                                        {{ $users->ward->name }},
                                                        {{ $users->ward->district->name }},
                                                        {{ $users->ward->district->province->type }}
                                                        {{ $users->ward->district->province->name }}
                                                    @endif
                                                </p>
                                            @else
                                                <p style="margin-top: 1%">{{ $users->address }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
