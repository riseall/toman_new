<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Toman - {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Toll Manufakturing Pt. Phapros.tbk">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo/toman.png') }}">
    <!-- Css -->
    <link href="{{ asset('libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('libs/@mdi/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
    {{-- <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('libs/@iconscout/css/line.css') }}" type="text/css" rel="stylesheet">
    <!-- Style Css-->
    <link href="{{ asset('css/style-dash.css') }}" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">

</head>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<div class="page-wrapper toggled">
    <!-- sidebar-wrapper -->
    @include('admin.layouts.partials.sidebar')
    <!-- sidebar-wrapper  -->

    <!-- Start Page Content -->
    <main class="page-content bg-light">
        <!-- Top Header -->
        @include('admin.layouts.partials.top_header')
        <!-- Top Header -->

        <div class="container-fluid">
            <div class="layout-specing">
                @yield('content')
            </div>
        </div><!--end container-->

        <!-- Footer Start -->
        @include('admin.layouts.partials.footer')
        <!-- End -->
    </main>
    <!--End page-content" -->
</div>
<!-- page-wrapper -->

<!-- javascript -->
<!-- JAVASCRIPT -->
<script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
{{-- <script src="assets/libs/apexcharts/apexcharts.min.js"></script> --}}
<!-- Main Js -->
<script src="{{ asset('js/plugins.init.js') }}"></script>
<script src="{{ asset('js/app-dash.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/sweetalert.js') }}"></script>
<script src="{{ asset('js/apexcharts.js') }}"></script>
<!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
<link rel="stylesheet" href="{{ asset('plugin/dataTables/css/dataTables.bootstrap5.min.css') }}">
<script src="{{ asset('plugin/dataTables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugin/dataTables/js/dataTables.bootstrap5.min.js') }}"></script>
<x-session-timeout />
@stack('scripts')
</body>

</html>
