@extends('layouts.app', [
    'title' => 'Toll Beli',
    'desc' => '',
])

@section('bg', '807A0631.jpg')

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
            <div class="d-flex flex-wrap">
                @foreach ($product as $prod)
                    <div class="col-lg-3 col-md-6 col-6 spacing picture-item" style="cursor: pointer" {{-- data-groups='["branding"]' --}}>
                        <a data-bs-toggle="modal" data-bs-target="#productModal" data-batch="{{ $prod->prod_bets_size }}"
                            data-exp="{{ $prod->prod_exp_yr }}" data-pcg="{{ $prod->prod_package }}"
                            style="max-width: 250px;">
                            <div
                                class="card border-0 work-container work-primary work-grid position-relative d-block overflow-hidden rounded">
                                <div class="card-body p-0">
                                    <div class="ratio ratio-4x3">
                                        <img src="{{ asset('images/product/' . $prod->prod_img) }}"
                                            class="img-fluid object-fit-fill" alt="{{ $prod->prod_name }}" loading="lazy">
                                    </div>
                                    <div class="content p-3">
                                        <h5 class="mb-1 text-primary title" style="font-size: calc(0.5rem + 0.5vw)">
                                            {{ $prod->prod_name }}</h5>
                                        <h6 class="text-muted mb-0" style="font-size: calc(0.4rem + 0.5vw)">
                                            {{ $prod->prod_package }}</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!--end col-->
                @endforeach
            </div><!--end row-->
        </div><!--end row-->

        <!-- PAGINATION START -->
        <div class="row">
            <div class="col-12 mt-4 pt-2">
                <div class="pagination justify-content-center mb-0">
                    {{ $product->links('vendor.pagination.custom') }}
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <!-- PAGINATION END -->
    </div><!--end container-->

    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded shadow border-0">
                <div class="modal-header border-bottom">
                    <h5 class="m-0">Detail Produk</h5>
                    <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i
                            class="uil uil-times fs-4 text-dark"></i></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <img src="" class="img-fluid rounded" id="productImage" alt="" loading="lazy">
                        </div>
                        <div class="col-lg-6 mt-3 mt-lg-0">
                            <h5 class="modal-title text-primary mb-2" id="productModalLabel"></h5>
                            <strong>Kemasan: </strong>
                            <p id="package"></p>
                            <strong>Bets Size: </strong>
                            <p id="betsSize"></p>
                            <strong>ED Produk: </strong>
                            <p id="expYear"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <script src="{{ asset('js/product.js') }}"></script>
@endsection
