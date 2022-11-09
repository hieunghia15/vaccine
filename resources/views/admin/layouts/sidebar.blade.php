<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="{{ asset('adminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">VACCINE COVID-19</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-header">THỐNG KÊ</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                           Quận Huyện
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.statisticals.district-ninh-kieu')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ninh Kiều</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.statisticals.district-o-mon')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ô Môn</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.statisticals.district-binh-thuy')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bình Thuỷ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.statisticals.district-cai-rang')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cái Răng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.statisticals.district-thot-not')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thốt Nốt</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.statisticals.district-vinh-thanh')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vĩnh Thạnh</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.statisticals.district-co-do')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cờ Đỏ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.statisticals.district-phong-dien')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Phong Điền</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.statisticals.district-thoi-lai')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thới Lai</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">QUẢN LÝ TIÊM CHỦNG</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-search"></i>
                        <p>
                            Tra cứu tiêm chủng
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.injections.search-vaccination-status') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trạng thái tiêm chủng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.injections.search-registration') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tình trạng đăng ký tiêm</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.injections.create-vaccination-info') }}" class="nav-link">
                        <i class="nav-icon fas fa-pen-square"></i>
                        <p>
                            Nhập thông tin tiêm
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.injections.make-certificate') }}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Lập giấy xác nhận
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list-ul"></i>
                        <p>
                            Đơn đăng ký tiêm
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.injections.registration-confirmed') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đã duyệt</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.injections.registration-unconfirmed') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Chưa duyệt</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @can('vaccines.*')
                <li class="nav-header">QUẢN LÝ VẮC XIN</li>
                <li class="nav-item">
                    <a href="{{ route('admin.vaccines.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-shield-virus"></i>
                        <p>
                            Vắc xin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.vaccine-types.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-syringe"></i>
                        <p>
                            Loại vắc xin
                        </p>
                    </a>
                </li>
                @endcan
                @can('sites.*')
                <li class="nav-header">QUẢN LÝ DANH MỤC</li>
                <li class="nav-item">
                    <a href="{{ route('admin.vaccination-sites.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-map-marker-alt"></i>
                        <p>Địa điểm tiêm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.priority-groups.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Nhóm ưu tiên</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.manufactures.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-industry"></i>
                        <p>Hãng sản xuất</p>
                    </a>
                </li>
                @endcan
                @can('posts.*')
                <li class="nav-header">QUẢN LÝ BÀI VIẾT</li>
                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>Danh mục bài viết</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.posts.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Bài viết</p>
                    </a>
                </li>
                @endcan  @can('assign.*')
                <li class="nav-header">QUẢN TRỊ HỆ THỐNG</li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Danh sách người dùng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.permissions.role') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-tag"></i>
                        <p>Vai trò</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.permissions.permission') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>Quyền hạn</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.permissions.role-permission') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Cấp quyền</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.permissions.user-role') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Cấp vai trò</p>
                    </a>
                </li>
                @endcan
                <li class="nav-item menu-open" style="padding: 1rem 0 1rem 0">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
