@extends('citizen.layout-user', [
    'title' => __($title ?? 'Đổi mật khẩu'),
])
@section('main')
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Đổi mật khẩu</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    <div class="container p-4">
        <div class="row">
           
            <!-- Main content -->
            <!-- left column -->
            <div class="col-md-2"></div>

            <div class="col-md-8">
                <!-- jquery validation -->
             @if (session('status'))
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    </div>
                @endif   
                <div class="card card-primary">
                    <div class="card-header bg-info">
                        <h3 class="card-title text-white">Đổi mật khẩu</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST"
                    action="{{ route('citizen.user.user-change-password') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-6 control-label">Mật khẩu hiện
                                    tại</label>
                                <div class="col-md-8">
                                    <input id="current-password" type="password" class="form-control"
                                        name="current-password" required>
                                    <br>
                                    <input id="toggleBtn" type="button" onclick="currentPassword()" value="Hiện mật khẩu"
                                        class="btn btn-outline-primary btn-sm">
                                    @if ($errors->has('current-password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('current-password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-6 control-label">Mật khẩu mới</label>
                                <div class="col-md-8">
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
                                <label for="new-password-confirm" class="col-md-6 control-label">Xác nhận mật
                                    khẩu</label>
                                <div class="col-md-8">
                                    <input id="new-password-confirm" type="password" class="form-control"
                                        name="new-password_confirmation" required>
                                    <br>
                                    <input id="new-password-confirm-btn" type="button" onclick="newPasswordConfirm()"
                                        value="Hiện mật khẩu" class="btn btn-outline-primary btn-sm">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-6">
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
            <div class="col-md-2"></div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <script>
        function currentPassword() {
            var upass = document.getElementById('current-password');
            var toggleBtn = document.getElementById('toggleBtn');
            if (upass.type == "password") {
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
            if (upass.type == "password") {
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
            if (upass.type == "password") {
                upass.type = "text";
                toggleBtn.value = "Ẩn mật khẩu";
            } else {
                upass.type = "password";
                toggleBtn.value = "Hiện mật khẩu";
            }
        }
    </script>
@endsection
