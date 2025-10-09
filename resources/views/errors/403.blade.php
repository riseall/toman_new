<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <title>Toman - Error</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Toll Manufakturing Pt. Phapros.tbk">
    <meta name="keywords" content="Jasa toll manufacturing [obat, tablet, kapsul], Manufaktur toll, Phapros, Pabrik toll">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo/toman.png') }}">

    <!-- Css -->
    <!-- Icons Css -->
    <link href="{{ asset('css/bootstrap.css') }}" id="bootstrap-style" class="theme-opt" rel="stylesheet"
        type="text/css">
    <!-- Style Css-->
    <link href="{{ asset('css/style.css') }}" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">
</head>

<body onload="setTimeout(function(){ window.location.href = '{{ route('home') }}'; }, 2000);">
    <!-- ERROR PAGE -->
    <section class="bg-home d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 text-center">
                    <img src="{{ asset('images/illustrator/404.png') }}" class="img-fluid" alt="">
                    {{-- <div class="text-uppercase mt-4 display-3">Oh ! no</div>
                    <div class="text-capitalize text-dark mb-4 error-page">Page Not Found</div> --}}
                    {{-- <p class="text-muted para-desc mx-auto">Start working with <span
                            class="text-primary fw-bold">Landrick</span> that can provide everything you need to
                        generate awareness, drive traffic, connect.</p> --}}
                </div><!--end col-->
            </div><!--end row-->

            {{-- <div class="row">
                <div class="col-md-12 text-center">
                    <a href="{{ route('home') }}" class="btn btn-primary mt-4">Go To Home</a>
                </div><!--end col-->
            </div><!--end row--> --}}
        </div><!--end container-->
    </section><!--end section-->
    <!-- ERROR PAGE -->
</body>

</html>
