@extends('layouts.app', [
    'title' => 'Portofolio',
    'desc' => '',
])

@section('bg', '807A0440.jpg')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title pb-2">
                    <h3 class="title mt-3 mb-3">Pencapaian TOTI - Ease Your Business</h3>
                    <p class="text-muted para-desc mb-0 mx-auto"></p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <div class="container mt-50">
        <div class="row">
            <!-- WORK START -->
            <div class="col-lg-5 col-md-6">
                <div class="port-images sticky-sidebar">
                    <img loading="lazy" src="{{ asset('images/bg/beranda.jpg') }}" class="img-fluid mx-auto d-block rounded"
                        alt="img">
                    {{-- <img loading="lazy" src="{{ asset('images/bg/beranda.jpg') }}" class="img-fluid mx-auto d-block rounded mt-4"
                            alt="img"> --}}
                    {{-- <img loading="lazy" src="{{ asset('images/bg/beranda.jpg') }}" class="img-fluid mx-auto d-block rounded mt-4"
                            alt="img"> --}}
                </div>
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="sticky-bar">
                    <div class="row ms-lg-4">
                        <div class="col-lg-12">
                            <div class="work-details">
                                <h4 class="title mb-3 border-bottom pb-3">Project Name :</h4>
                                <p class="text-muted">PT Phapros Tbk telah berhasil menghadirkan pendampingan trial
                                    kepada pelanggan secara transparan dan fleksibel, baik secara langsung maupun
                                    melalui live streaming, hingga proses produksi selesai sesuai keinginan pelanggan
                                </p>
                                {{-- <p class="text-muted mb-0">Suscipit totam atque dignissimos porro, exercitationem,
                                        neque
                                        alias ea aliquid quibusdam voluptates impedit maxime aut asperiores consequatur
                                        iste. Corporis fuga ducimus dignissimos.</p> --}}
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end col-->
        </div><!--end row-->

        {{-- <div class="row">
            <!-- PAGINATION START -->
            <div class="col-12 mt-4 pt-2">
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a>
                    </li>
                </ul>
            </div><!--end col-->
            <!-- PAGINATION END -->
        </div><!--end row--> --}}
    </div><!--end container-->
    <div class="container mt-50">
        <div class="row">
            <!-- WORK START -->
            <div class="col-lg-5 col-md-6">
                <div class="port-images sticky-sidebar">
                    <img loading="lazy" src="{{ asset('images/bg/phapros-obat.jpg') }}"
                        class="img-fluid mx-auto d-block rounded" alt="img">
                    {{-- <img loading="lazy" src="{{ asset('images/bg/beranda.jpg') }}" class="img-fluid mx-auto d-block rounded mt-4"
                            alt="img"> --}}
                    {{-- <img loading="lazy" src="{{ asset('images/bg/beranda.jpg') }}" class="img-fluid mx-auto d-block rounded mt-4"
                            alt="img"> --}}
                </div>
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="sticky-bar">
                    <div class="row ms-lg-4">
                        <div class="col-lg-12">
                            <div class="work-details">
                                <h4 class="title mb-3 border-bottom pb-3">Project Name :</h4>
                                <p class="text-muted">Lebih dari 25 pelanggan dari berbagai sektor, mulai dari industri
                                    farmasi, instansi pemerintah, rumah sakit, hingga universitas mengandalkan PT Phapros
                                    Tbk sebagai partner kalibrasi dan pengujian berstandar tinggi
                                </p>
                                {{-- <p class="text-muted mb-0">Suscipit totam atque dignissimos porro, exercitationem,
                                        neque
                                        alias ea aliquid quibusdam voluptates impedit maxime aut asperiores consequatur
                                        iste. Corporis fuga ducimus dignissimos.</p> --}}
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container-fluid">
        <div id="grid" class="row mt-4 shuffle"
            style="position: relative; overflow: hidden; height: 551.688px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1);">
            <div class="col-lg-3 col-md-6 col-12 spacing picture-item shuffle-item shuffle-item--visible"
                data-groups="[&quot;branding&quot;]"
                style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <div
                    class="card border-0 work-container work-primary work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="{{ asset('images/bg/807A0440.jpg') }}" class="lightbox d-inline-block tobii-zoom"
                            title="">
                            <img loading="lazy" src="{{ asset('images/bg/807A0440.jpg') }}" class="img-fluid"
                                alt="work-image">
                            <div class="tobii-zoom__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <path d="M21 16v5h-5"></path>
                                    <path d="M8 21H3v-5"></path>
                                    <path d="M16 3h5v5"></path>
                                    <path d="M3 8V3h5"></path>
                                </svg></div>
                        </a>
                        <div class="content p-3">
                            <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Iphone
                                    mockup</a></h5>
                            <h6 class="text-muted tag mb-0">Branding</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item shuffle-item shuffle-item--visible"
                data-groups="[&quot;designing&quot;]"
                style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(313px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <div
                    class="card border-0 work-container work-primary work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="{{ asset('images/bg/807A0366.jpg') }}" class="lightbox d-inline-block tobii-zoom"
                            title="">
                            <img loading="lazy" src="{{ asset('images/bg/807A0366.jpg') }}" class="img-fluid"
                                alt="work-image">
                            <div class="tobii-zoom__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <path d="M21 16v5h-5"></path>
                                    <path d="M8 21H3v-5"></path>
                                    <path d="M16 3h5v5"></path>
                                    <path d="M3 8V3h5"></path>
                                </svg></div>
                        </a>
                        <div class="content p-3">
                            <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Mockup
                                    Collection</a></h5>
                            <h6 class="text-muted tag mb-0">Mockup</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item shuffle-item shuffle-item--visible"
                data-groups="[&quot;photography&quot;]"
                style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(627px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <div
                    class="card border-0 work-container work-primary work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="{{ asset('images/bg/807A0482.jpg') }}" class="lightbox d-inline-block tobii-zoom"
                            title="">
                            <img loading="lazy" src="{{ asset('images/bg/807A0482.jpg') }}" class="img-fluid"
                                alt="work-image">
                            <div class="tobii-zoom__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <path d="M21 16v5h-5"></path>
                                    <path d="M8 21H3v-5"></path>
                                    <path d="M16 3h5v5"></path>
                                    <path d="M3 8V3h5"></path>
                                </svg></div>
                        </a>
                        <div class="content p-3">
                            <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Abstract
                                    images</a></h5>
                            <h6 class="text-muted tag mb-0">Abstract</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item shuffle-item shuffle-item--visible"
                data-groups="[&quot;development&quot;]"
                style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(940px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <div
                    class="card border-0 work-container work-primary work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="{{ asset('images/bg/807A0494.jpg') }}" class="lightbox d-inline-block tobii-zoom"
                            title="">
                            <img loading="lazy" src="{{ asset('images/bg/807A0494.jpg') }}" class="img-fluid"
                                alt="work-image">
                            <div class="tobii-zoom__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <path d="M21 16v5h-5"></path>
                                    <path d="M8 21H3v-5"></path>
                                    <path d="M16 3h5v5"></path>
                                    <path d="M3 8V3h5"></path>
                                </svg></div>
                        </a>
                        <div class="content p-3">
                            <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Yellow
                                    bg with Books</a></h5>
                            <h6 class="text-muted tag mb-0">Books</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item shuffle-item shuffle-item--visible"
                data-groups="[&quot;branding&quot;]"
                style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(0px, 276px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <div
                    class="card border-0 work-container work-primary work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="{{ asset('images/bg/807A0645.jpg') }}" class="lightbox d-inline-block tobii-zoom"
                            title="">
                            <img loading="lazy" src="{{ asset('images/bg/807A0645.jpg') }}" class="img-fluid"
                                alt="work-image">
                            <div class="tobii-zoom__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <path d="M21 16v5h-5"></path>
                                    <path d="M8 21H3v-5"></path>
                                    <path d="M16 3h5v5"></path>
                                    <path d="M3 8V3h5"></path>
                                </svg></div>
                        </a>
                        <div class="content p-3">
                            <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Company
                                    V-card</a></h5>
                            <h6 class="text-muted tag mb-0">V-card</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item shuffle-item shuffle-item--visible"
                data-groups="[&quot;branding&quot;]"
                style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(313px, 276px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <div
                    class="card border-0 work-container work-primary work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="{{ asset('images/bg/807A0535.jpg') }}" class="lightbox d-inline-block tobii-zoom"
                            title="">
                            <img loading="lazy" src="{{ asset('images/bg/807A0535.jpg') }}" class="img-fluid"
                                alt="work-image">
                            <div class="tobii-zoom__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <path d="M21 16v5h-5"></path>
                                    <path d="M8 21H3v-5"></path>
                                    <path d="M16 3h5v5"></path>
                                    <path d="M3 8V3h5"></path>
                                </svg></div>
                        </a>
                        <div class="content p-3">
                            <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Mockup
                                    box with paints</a></h5>
                            <h6 class="text-muted tag mb-0">Photography</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item shuffle-item shuffle-item--visible"
                data-groups="[&quot;designing&quot;]"
                style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(627px, 276px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <div
                    class="card border-0 work-container work-primary work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="{{ asset('images/bg/807A0539.jpg') }}" class="lightbox d-inline-block tobii-zoom"
                            title="">
                            <img loading="lazy" src="{{ asset('images/bg/807A0539.jpg') }}" class="img-fluid"
                                alt="work-image">
                            <div class="tobii-zoom__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <path d="M21 16v5h-5"></path>
                                    <path d="M8 21H3v-5"></path>
                                    <path d="M16 3h5v5"></path>
                                    <path d="M3 8V3h5"></path>
                                </svg></div>
                        </a>
                        <div class="content p-3">
                            <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Coffee
                                    cup</a></h5>
                            <h6 class="text-muted tag mb-0">Cups</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item shuffle-item shuffle-item--visible"
                data-groups="[&quot;development&quot;]"
                style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(940px, 276px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                <div
                    class="card border-0 work-container work-primary work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="{{ asset('images/bg/807A0494.jpg') }}" class="lightbox d-inline-block tobii-zoom"
                            title="">
                            <img loading="lazy" src="{{ asset('images/bg/807A0494.jpg') }}" class="img-fluid"
                                alt="work-image">
                            <div class="tobii-zoom__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <path d="M21 16v5h-5"></path>
                                    <path d="M8 21H3v-5"></path>
                                    <path d="M16 3h5v5"></path>
                                    <path d="M3 8V3h5"></path>
                                </svg></div>
                        </a>
                        <div class="content p-3">
                            <h5 class="mb-0"><a href="portfolio-detail-one.html" class="text-dark title">Pen
                                    and article</a></h5>
                            <h6 class="text-muted tag mb-0">Article</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
@endsection
