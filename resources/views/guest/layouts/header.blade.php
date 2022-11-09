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
                    <a href="index.html"><img src="medino/assets/images/logo/logo.png" /></a>
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
                                <li><a href="{{ route('citizen.user.list-reaction-status') }}">Phản ứng sau tiêm</a>
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
