@extends('admin.layout-admin',[
'title' => __($title ?? 'Đổi mật khẩu')
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
                <h1>Đổi mật khẩu</h1>
            </div>
            <div class="col-sm-5" style="margin-left: 4%">
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
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Đổi mật khẩu</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST"
                    action="{{ route('admin.account.change-password') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 control-label">Mật khẩu hiện tại</label>
                                <div class="col-md-4">
                                    <input id="current-password" type="password" class="form-control"
                                        name="current-password" required>
                                    <br>
                                    <input id="toggleBtn" type="button" onclick="currentPassword()"
                                        value="Hiện mật khẩu" class="btn btn-outline-primary btn-sm">
                                    @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 control-label">Mật khẩu mới</label>
                                <div class="col-md-4">
                                    <input id="new-password" type="password" class="form-control" name="new-password"
                                        required>
                                    <br>
                                    <input id="new-password-btn" type="button" onclick="newPassword()"
                                        value="Hiện mật khẩu" class="btn btn-outline-primary btn-sm">
                                    @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="new-password-confirm" class="col-md-4 control-label">Xác nhận mật
                                    khẩu</label>
                                <div class="col-md-4">
                                    <input id="new-password-confirm" type="password" class="form-control"
                                        name="new-password_confirmation" required>
                                    <br>
                                    <input id="new-password-confirm-btn" type="button" onclick="newPasswordConfirm()"
                                        value="Hiện mật khẩu" class="btn btn-outline-primary btn-sm">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Đổi mật khẩu
                                    </button>
                                </div>
                            </div>
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
<script>
    function currentPassword() {
        var upass = document.getElementById('current-password');
        var toggleBtn = document.getElementById('toggleBtn');
        if(upass.type == "password"){
            upass.type = "text";
            toggleBtn.value = "Ẩn mật khẩu";
        } else {
            upass.type = "password";
            toggleBtn.value = "Hiện mật khẩu";
        }
    }

    function newPassword() {
        var upass = document.getElementById('new-password');
        var toggleBtn = document.getElementById('new-password-btn');
        if(upass.type == "password"){
            upass.type = "text";
            toggleBtn.value = "Ẩn mật khẩu";
        } else {
            upass.type = "password";
            toggleBtn.value = "Hiện mật khẩu";
        }
    }

    function newPasswordConfirm() {
        var upass = document.getElementById('new-password-confirm');
        var toggleBtn = document.getElementById('new-password-confirm-btn');
        if(upass.type == "password"){
            upass.type = "text";
            toggleBtn.value = "Ẩn mật khẩu";
        } else {
            upass.type = "password";
            toggleBtn.value = "Hiện mật khẩu";
        }
    }
</script>
@endsection