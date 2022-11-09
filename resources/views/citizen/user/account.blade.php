@extends('citizen.layout-user', [
    'title' => __($title ?? 'Thông tin cá nhân'),
])
@section('main')
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Thông tin cá nhân</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    <div class="container">
        <div class="row">
            <!-- Main content -->
            <section class="content p-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        @if (isset($certificates))
                                            {{ $qrcode }}
                                        @else  
                                       {{$qrcode_null}}
                                        @endif
                                    </div>
                                    <p class="text-muted text-center">Mã xác nhận tiêm chủng</p>
                                    <h3 class="profile-username text-center">{{ $users->fullname }}</h3>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b class="text-primary">Dân tộc</b> <a
                                                class="float-right">{{ $users->ethnic->name }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b class="text-primary">Quốc tịch</b> <a
                                                class="float-right">{{ $users->nationality->name }}</a>
                                        </li>
                                    </ul>
                                    <a href="{{ route('citizen.user.edit-account', $users->id) }}"
                                        class="btn btn-primary btn-block">Cập nhật thông tin</a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header bg-primary p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <b class="text-white">Thông tin cá nhân</b>
                                        </li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="settings">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-4 col-form-label">Họ và tên</label>
                                                <div class="col-sm-8">
                                                    <p style="margin-top: 1%">{{ $users->fullname }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-4 col-form-label">Giới tính</label>
                                                <div class="col-sm-8">
                                                    <p style="margin-top: 1%">{{ $users->gender }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName4" class="col-sm-4 col-form-label">Ngày sinh</label>
                                                <div class="col-sm-8">
                                                    <p style="margin-top: 1%">{{ $birthday }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience" class="col-sm-4 col-form-label">Số điện
                                                    thoại</label>
                                                <div class="col-sm-8">
                                                    <p style="margin-top: 1%">{{ $users->phone }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-4 col-form-label">
                                                    Số CCCD/Hộ chiếu:</label>
                                                <div class="col-sm-8">
                                                    <p style="margin-top: 1%">{{ $users->identification }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-4 col-form-label">
                                                    Email:</label>
                                                <div class="col-sm-8">
                                                    <p style="margin-top: 1%">{{ $users->email }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-4 col-form-label">
                                                    Địa chỉ:</label>
                                                <div class="col-sm-8">
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
        </div>
    </div>
@endsection
