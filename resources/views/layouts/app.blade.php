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
    <link href="{{ asset('libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/animate.css/animate.css') }}" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.css') }}" id="bootstrap-style" class="theme-opt" rel="stylesheet"
        type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('libs/@mdi/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('libs/@iconscout/css/line.css') }}" type="text/css" rel="stylesheet">
    <!-- Style Css-->
    <link href="{{ asset('css/style.css') }}" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">

</head>

<body>
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

    {{-- <span class="modern-app-round top-50 start-50 translate-middle"></span> --}}

    <!-- Navbar Start -->
    @include('layouts.partials.navbar')
    <!-- Navbar End -->

    @include('layouts.partials.hero_2')

    <!-- Start -->
    <section class="section">
        @yield('content')
    </section><!--end section-->
    <!-- End -->

    <!-- Footer Start -->
    @include('layouts.partials.footer')
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
            class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('libs/tiny-slider/tiny-slider.js') }}"></script>
    <!-- Lightbox -->
    <script src="{{ asset('libs/shufflejs/shuffle.min.js') }}"></script>
    <script src="{{ asset('libs/tobii/js/tobii.min.js') }}"></script>
    <!-- Parallax -->
    <script src="{{ asset('libs/jarallax/jarallax.min.js') }} "></script>
    <!-- Main Js -->
    <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('js/plugins.init.js') }}"></script>
    <!--Note: All init (custom) js like tiny slider, counter, countdown, lightbox, gallery, swiper slider etc.-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    <link rel="stylesheet" href="{{ asset('plugin/dataTables/css/dataTables.bootstrap5.min.css') }}">
    <script src="{{ asset('plugin/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugin/dataTables/js/dataTables.bootstrap5.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
