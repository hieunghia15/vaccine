<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">Admin</span>
                <div class="dropdown-divider"></div>
                <a href="{{ route('admin.account.account') }}" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> Tài khoản
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('admin.account.update',Auth()->user()->id) }}" class="dropdown-item">
                    <i class="fas fa-cog mr-2"></i> Cập nhật tài khoản
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('admin.account.change-password') }}" class="dropdown-item">
                    <i class="fas fa-key mr-2"></i> Đổi mật khẩu
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item dropdown-footer" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
      this.closest('form').submit();"><i
                            class="fas fa-sign-out-alt"></i> Đăng
                        xuất</a>
                </form>
            </div>
        </li>
    </ul>
</nav>
