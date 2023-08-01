<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.header-style')
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    @include('page.header')
    @include('page.hero')

    <main id="main">

        @yield('content')

    </main><!-- End #main -->

    @include('layout.footer')

    @include('layout.footer-script')

</body>

</html>
