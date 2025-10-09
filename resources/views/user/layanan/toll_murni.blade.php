@extends('layouts.app', [
    'title' => 'Toll Murni',
    'desc' => '',
])

@section('bg', '807A0631.jpg')

@section('content')
    <!--Fasilitas Produksi start-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title pb-2">
                    <h3 class="title mt-3 mb-3">Fasilitas Produksi</h3>
                    <p class="text-muted para-desc mb-0 mx-auto">Kami menyediakan berbagai layanan untuk mendukung
                        kebutuhan Anda dengan kualitas terbaik.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="mt-4 d-flex flex-wrap gap-3 justify-content-center">
                @foreach ($fasilitas as $item)
                    <div class="col-lg-4 col-md-5 col-sm-10 col-11">
                        <div class="job-box job-primary candidate-list card rounded border-0 shadow h-100">
                            <div class="card-body d-flex align-items-center">
                                <div class="content w-100">
                                    <div class="row align-items-center">
                                        @php
                                            $icons = [
                                                'Tablet Non Betalactam' => 'tablet.png',
                                                'Tablet Betalactam' => 'tablet_betalactam.png',
                                                'Capsule' => 'capsule.png',
                                                'Bottle' => 'bottle.png',
                                                'Serbuk Injeksi Non Betalactam' => 'injeksi_non_betalactam.png',
                                                'Serbuk Injeksi Betalactam' => 'injeksi_betalactam.png',
                                                'Serbuk Penicilin' => 'penicilin.png',
                                                'Vial' => 'penicilin.png',
                                                'Salep Non Betalactam' => 'salep_non_betalactam.png',
                                            ];
                                        @endphp
                                        <div class="col-lg-3 col-md-5 col-sm-3 col-3 text-center">
                                            <img src="{{ asset('images/unit/' . ($icons[$item->unit] ?? 'toman2.png')) }}"
                                                class="avatar avatar-small client-image rounded" alt="{{ $item->unit }}"
                                                loading="lazy">
                                        </div>
                                        <div class="col-lg-9 col-md-7 col-sm-9 col-9 p-0">
                                            <span class="text-dark h6 d-block m-0" style="font-size: calc(0.6rem + 0.5vw)">
                                                {{ $item->dosage_form }}
                                            </span>
                                            <p class="text-muted mb-0" style="font-size: calc(0.6rem + 0.5vw)">
                                                {{ $item->unit }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                @endforeach
            </div>
        </div><!--end row-->
    </div>

    <!-- CTA Start -->
    @include('user.layanan.partials.cta')
    <!-- CTA End -->

    <!-- Testimonial Start -->
    @include('user.layanan.partials.client')
    <!-- Testimonial End -->

    <!-- Sertifikat Start -->
    @include('user.layanan.partials.sertifikat')
    <!-- Sertifikat End -->

    <script src="{{ asset('js/image.js') }}"></script>
@endsection
