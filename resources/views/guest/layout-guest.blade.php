<!DOCTYPE html>
<html lang="en">

<head>
    @include('guest.layouts.head', ['title' => __($title ?? 'Tiêm chủng vắc xin Covid-19')])

</head>

<body>

    <!-- Header Area Starts -->
    @include('guest.layouts.header')
    <!-- Header Area End -->

    <!--Main-->
    @yield('main')
    <!--Main End-->

    <!-- Footer Area Starts -->
    @include('guest.layouts.footer')
    <!-- Footer Area End -->

    <!-- Javascript -->
    @include('guest.layouts.scripts')

</body>

</html>