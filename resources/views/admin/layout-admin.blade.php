<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head', ['title' => __($title ?? 'Tiêm chủng vắc xin Covid-19')])
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.layouts.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('main')
        </div>
        <!-- /.content-wrapper -->
        @include('admin.layouts.scripts')
        <!-- Footer -->
        @include('admin.layouts.footer')
        <!-- /.footer -->
    </div>
    <!-- ./wrapper -->
</body>

</html>