@extends('layouts.app', [
    'title' => 'Toll Beli',
    'desc' => 'Kami menyediakan jasa Toll Manufacturing dengan sistem beli produk.',
])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title pb-2">
                    <h3 class="title mt-3 mb-3">Daftar Produk</h3>
                    <p class="text-muted para-desc mb-0 mx-auto">Kami menyediakan berbagai layanan untuk mendukung
                        kebutuhan Anda dengan kualitas terbaik.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <div class="container mt-50">
        <div class="row justify-content-center">
            <div class="col-12 filters-group-wrap">
                <div class="filters-group">
                    <ul class="container-filter list-inline mb-0 filter-options text-center">
                        <li class="list-inline-item categories-name border text-dark rounded active" data-group="all">All
                        </li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="branding">Branding
                        </li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="designing">
                            Designing</li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="photography">
                            Photography</li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="development">
                            Development</li>
                    </ul>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div id="grid" class="row mt-4 pt-2">
            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["branding"]' style="cursor: pointer">
                <a data-bs-toggle="modal" data-bs-target="#productModal">
                    <div class="border-0 work-container work-primary work-classic">
                        <div class="card-body p-0">
                            <img src="{{ asset('images/product/amikacin-sulfate.jpg') }}"
                                class="img-fluid rounded work-image" alt="">
                            <div class="content pt-3">
                                <h5 class="mb-1">Iphone mockup</h5>
                                <h6 class="text-muted tag mb-0">Branding</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["designing"]'>
                <div class="border-0 work-container work-primary work-classic">
                    <div class="card-body p-0">
                        <a href="portfolio-detail-one.html"><img src="{{ asset('images/product/Aminophylline.jpg') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="content pt-3">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-dark title">Mockup
                                    Collection</a></h5>
                            <h6 class="text-muted tag mb-0">Mockup</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["photography"]'>
                <div class="border-0 work-container work-primary work-classic">
                    <div class="card-body p-0">
                        <a href="portfolio-detail-one.html"><img src="{{ asset('images/product/Cefotaxime-Sodium.jpg') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="content pt-3">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-dark title">Abstract
                                    images</a></h5>
                            <h6 class="text-muted tag mb-0">Abstract</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["development"]'>
                <div class="border-0 work-container work-primary work-classic">
                    <div class="card-body p-0">
                        <a href="portfolio-detail-one.html"><img
                                src="{{ asset('images/product/Cefpirome-Sulfate si.jpg') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="content pt-3">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-dark title">Yellow bg with
                                    Books</a></h5>
                            <h6 class="text-muted tag mb-0">Books</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                <div class="border-0 work-container work-primary work-classic">
                    <div class="card-body p-0">
                        <a href="portfolio-detail-one.html"><img
                                src="{{ asset('images/product/Ceftazidime-Pentahydrate.jpg') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="content pt-3">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-dark title">Company
                                    V-card</a></h5>
                            <h6 class="text-muted tag mb-0">V-card</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                <div class="border-0 work-container work-primary work-classic">
                    <div class="card-body p-0">
                        <a href="portfolio-detail-one.html"><img src="{{ asset('images/product/Citicoline-Sodium.jpg') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="content pt-3">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-dark title">Mockup box with
                                    paints</a></h5>
                            <h6 class="text-muted tag mb-0">Photography</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["designing"]'>
                <div class="border-0 work-container work-primary work-classic">
                    <div class="card-body p-0">
                        <a href="portfolio-detail-one.html"><img
                                src="{{ asset('images/product/esomeprazole-sodium.jpg') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="content pt-3">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-dark title">Coffee cup</a>
                            </h5>
                            <h6 class="text-muted tag mb-0">Cups</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["development"]'>
                <div class="border-0 work-container work-primary work-classic">
                    <div class="card-body p-0">
                        <a href="portfolio-detail-one.html"><img
                                src="{{ asset('images/product/ketorolac-trometamol-inj.jpg') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="content pt-3">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-dark title">Pen and
                                    article</a></h5>
                            <h6 class="text-muted tag mb-0">Article</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["photography"]'>
                <div class="border-0 work-container work-primary work-classic">
                    <div class="card-body p-0">
                        <a href="portfolio-detail-one.html"><img
                                src="{{ asset('images/product/ketorolac-trometamol.jpg') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="content pt-3">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-dark title">White mockup
                                    box</a></h5>
                            <h6 class="text-muted tag mb-0">Color</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["photography"]'>
                <div class="border-0 work-container work-primary work-classic">
                    <div class="card-body p-0">
                        <a href="portfolio-detail-one.html"><img
                                src="{{ asset('images/product/methylprednisolon-sodium.jpg') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="content pt-3">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-dark title">Logo
                                    Vectors</a></h5>
                            <h6 class="text-muted tag mb-0">Logos</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                <div class="border-0 work-container work-primary work-classic">
                    <div class="card-body p-0">
                        <a href="portfolio-detail-one.html"><img
                                src="{{ asset('images/product/Omeprazole-Sodium.jpg') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="content pt-3">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-dark title">Black and
                                    white T-shirt</a></h5>
                            <h6 class="text-muted tag mb-0">Clothes</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                <div class="border-0 work-container work-primary work-classic">
                    <div class="card-body p-0">
                        <a href="portfolio-detail-one.html"><img src="{{ asset('images/product/pantoprazole.jpg') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="content pt-3">
                            <h5 class="mb-1"><a href="portfolio-detail-one.html" class="text-dark title">Yellow bg with
                                    cellphone</a></h5>
                            <h6 class="text-muted tag mb-0">Cellphone</h6>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <!-- PAGINATION START -->
        <div class="row">
            <div class="col-12 mt-4 pt-2">
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
                </ul>
            </div><!--end col-->
        </div><!--end row-->
        <!-- PAGINATION END -->
    </div><!--end container-->

    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded shadow border-0">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title" id="productModalLabel"></h5>
                    <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i
                            class="uil uil-times fs-4 text-dark"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="" class="img-fluid rounded" id="productImage" alt="">
                        </div>
                        <div class="col-lg-8">
                            <span>Nama</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- CTA Start -->
    @include('layanan.partials.cta')
    <!-- CTA End -->

    <!-- Testimonial Start -->
    @include('layanan.partials.client')
    <!-- Testimonial End -->

    <!-- Sertifikat Start -->
    @include('layanan.partials.sertifikat')
    <!-- Sertifikat End -->

    <script src="{{ asset('js/product.js') }}"></script>
@endsection
