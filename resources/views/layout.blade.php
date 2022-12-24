<!DOCTYPE html>
<html>

<head>
    @include('partials.head')
</head>

<body class="nav-fixed">
    <!-- Navbar -->
    @include('templates.navbar')

    <div id="layoutSidenav">
        <!-- Sidebar -->
        @include('templates.sidebar')

        <!-- Page Content-->
        @yield('content')
    </div>

    <!-- JavaScript -->
    @include('partials.js')
</body>

</html>