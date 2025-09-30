<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    @php
        use Illuminate\Support\Str;
        $seoTitle = isset($title) ? 'Toman - ' . $title : config('seo.title');
        $seoDescription = $metaDescription ?? config('seo.description');
        $seoKeywords = $metaKeywords ?? config('seo.keywords');
        $rawImage = $metaImage ?? config('seo.image');
        $seoImage = Str::startsWith($rawImage, ['http://', 'https://']) ? $rawImage : asset($rawImage);
        $seoUrl = $metaUrl ?? url()->current();
        $seoType = $metaType ?? 'website';
        $seoNoindex = $metaNoindex ?? false;
        $siteName = config('seo.site_name') ?? config('app.name');
    @endphp

    <title>{{ $seoTitle }}</title>
    <meta name="description" content="{{ $seoDescription }}">
    <meta name="keywords" content="{{ $seoKeywords }}">
    <link rel="canonical" href="{{ $seoUrl }}">
    @if ($seoNoindex)
        <meta name="robots" content="noindex, nofollow">
    @endif

    <!-- Open Graph -->
    <meta property="og:locale" content="{{ app()->getLocale() }}">
    <meta property="og:type" content="{{ $seoType }}">
    <meta property="og:title" content="{{ $seoTitle }}">
    <meta property="og:description" content="{{ $seoDescription }}">
    <meta property="og:url" content="{{ $seoUrl }}">
    <meta property="og:image" content="{{ $seoImage }}">
    <meta property="og:site_name" content="{{ $siteName }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seoTitle }}">
    <meta name="twitter:description" content="{{ $seoDescription }}">
    <meta name="twitter:image" content="{{ $seoImage }}">

    <!-- JSON-LD structured data (WebSite) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "{{ $siteName }}",
      "url": "{{ url('/') }}",
      "description": "{{ $seoDescription }}"
    }
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    @include('layouts.partials.hero')

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

    @include('user.kontak.whatsapp')

    <!-- javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
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
    <x-session-timeout />
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    @stack('scripts')
</body>

</html>
