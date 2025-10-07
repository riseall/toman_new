<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Toman - {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Toll Manufakturing Pt. Phapros.tbk">
    <meta name="keywords" content="Jasa toll manufacturing [obat, tablet, kapsul], Manufaktur toll, Phapros, Pabrik toll">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo/toman.png') }}">

    <!-- Css -->
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/login-2.css') }}" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css">
    <link href="{{ asset('libs/@mdi/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Style Css-->
    <link href="{{ asset('css/style.bundle.css') }}" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        {{-- begin::content --}}
        @yield('content')
        {{-- end::content --}}
    </div>
    <!--end::Main-->
    <x-session-timeout />
</body>
<!--end::Body-->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/sweetalert.js') }}"></script>
<script src="{{ asset('js/login-general.js') }}"></script>
<script src="{{ asset('js/reset-password.js') }}"></script>
@stack('scripts')

</html>
