@extends('layouts.app', ['title' => 'Home'])
@section('content')
    <!-- Layanan Start -->
    <div class="w-full">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title pb-2">
                        <h3 class="title mt-3 mb-3">Layanan Kami</h3>
                        <p class="text-muted para-desc mb-0 mx-auto">Kami menyediakan berbagai layanan untuk mendukung
                            kebutuhan Anda dengan kualitas terbaik.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 col-12 mt-5 pt-4">
                    <a href="{{ route('toll_murni') }}" class="text-dark">
                        <div class="features feature-primary text-center h-100">
                            <div class="image position-relative d-inline-block">
                                <img loading="lazy" src="{{ asset('images/logo/TMurni.png') }}" alt="Toll Murni"
                                    width="75">
                            </div>

                            <div class="content mt-4">
                                <div class="card shadow h-100">
                                    <div class="card-body">
                                        <h5>Toll Murni</h5>
                                        <p class="text-muted mb-0">
                                            Jasa pembuatan sediaan farmasi oleh PT Phapros Tbk dimana pelanggan
                                            akan menyediakan material sendiri dan PT Phapros Tbk hanya bertanggung jawab
                                            atas
                                            proses
                                            produksi hingga menjadi produk jadi sesuai dengan spesifikasi yang diinginkan
                                            pelanggan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 pt-4">
                    <a href="{{ route('toll_beli') }}" class="text-dark">
                        <div class="features feature-primary text-center h-100">
                            <div class="image position-relative d-inline-block">
                                <img loading="lazy" src="{{ asset('images/logo/TBeli.png') }}" alt="Toll Beli"
                                    width="75">
                            </div>

                            <div class="content mt-4">
                                <div class="card shadow h-100">
                                    <div class="card-body">
                                        <h5>Toll Beli</h5>
                                        <p class="text-muted mb-0">
                                            Jasa pembuatan sediaan farmasi oleh PT Phapros Tbk dimana kami
                                            menyediakan sebagian atau seluruh material sesuai spesifikasi pelanggan.
                                            Pelanggan
                                            dapat
                                            memilih cakupan layanan yang dibutuhkan, mulai dari pengadaan material, proses
                                            produksi,
                                            hingga pembelian produk jadi serta dossier produk.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 pt-4">
                    <a href="{{ route('kalibrasi') }}" class="text-dark">
                        <div class="features feature-primary text-center h-100">
                            <div class="image position-relative d-inline-block">
                                <img loading="lazy" src="{{ asset('images/logo/Kalibrasi1.png') }}" alt="Kalibrasi"
                                    width="75">
                            </div>

                            <div class="content mt-4">
                                <div class="card shadow h-100">
                                    <div class="card-body">
                                        <h5>Kalibrasi dan lain-lain</h5>
                                        <p class="text-muted mb-0">Sejak 2014, PT Phapros Tbk telah menjadi mitra andal bagi
                                            lebih
                                            dari
                                            25 pelanggan dari berbagai sektor, mulai dari industri farmasi, instansi
                                            pemerintah,
                                            rumah
                                            sakit, hingga universitas dalam memenuhi kebutuhan kalibrasi dan pengujian
                                            berkualitas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <!-- Profil Start -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                            <div
                                class="card work-container work-primary work-modern overflow-hidden rounded border-0 shadow-md">
                                <div class="card-body p-0">
                                    <img loading="lazy" src="{{ asset('images/bg/phapros-obat.jpg') }}" class="img-fluid"
                                        alt="work-image">
                                    <div class="overlay-work"></div>
                                    <div class="content">
                                        {{-- <a href="javascript:void(0)" class="title text-white d-block fw-bold">Web
                                        Development</a>
                                    <small class="text-white-50">IT & Software</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-6 col-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                    <div
                                        class="card work-container work-primary work-modern overflow-hidden rounded border-0 shadow-md">
                                        <div class="card-body p-0">
                                            <img loading="lazy" src="{{ asset('images/bg/lab_phapros.jpg') }}"
                                                class="img-fluid" alt="work-image">
                                            <div class="overlay-work"></div>
                                            <div class="content">
                                                {{-- <a href="javascript:void(0)" class="title text-white d-block fw-bold">Michanical
                                                Engineer</a>
                                            <small class="text-white-50">Engineering</small> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                    <div
                                        class="card work-container work-primary work-modern overflow-hidden rounded border-0 shadow-md">
                                        <div class="card-body p-0">
                                            <img loading="lazy" src="{{ asset('images/bg/beranda.jpg') }}" class="img-fluid"
                                                alt="work-image">
                                            <div class="overlay-work"></div>
                                            <div class="content">
                                                {{-- <a href="javascript:void(0)" class="title text-white d-block fw-bold">Chartered
                                                Accountant</a>
                                            <small class="text-white-50">C.A.</small> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                    <div class="ms-lg-4">
                        <div class="section-title mb-4">
                            <h4 class="title">Mengapa Anda memilih Phapros ?</h4>
                        </div>
                        <div class="mb-4 pb-2 text-justify">
                            <p class="text-muted para-desc">Sejak didirikan lebih dari tujuh dasawarsa yang lalu,
                                tepatnya pada
                                21 Juni 1954, PT Phapros Tbk yang semula merupakan bagian dari pengembangan usaha Oei Tiong
                                Ham
                                Corcern dengan nama NV Pharmaceutical Processing Industries sejak awal menumbuhkan budaya
                                perusahaan yang berbasis pada profesionalisme dan berorientasi pada kualitas.</p>
                            <p class="text-muted para-desc mb-0">Komitmen yang tinggi pada standar kualitas serta
                                lingkungan
                                dibuktikan dengan terus mengikuti perubahan standar mutu melalui implementasi dari Cara
                                Pembuatan Obat yang Baik/CPOB terkini (current Good Manufacturing Practices), Pembuatan Obat
                                Tradisional yang Baik terkini (current Herbal Good Manufacturing Practices), serta
                                persyaratan
                                penyaluran alat kesehatan dan Cara Pembuatan Alat Kesehatan yang Baik (CPAKB), Persyaratan
                                Standar Akuntansi Keuangan (PSAK) serta system Manajemen Mutu terintegrasi yang meliputi :
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled text-muted">
                                    <li class="mb-0"><span class="text-primary h4 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>ISO 9001</li>
                                    <li class="mb-0"><span class="text-primary h4 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>ISO 14001</li>
                                    <li class="mb-0"><span class="text-primary h4 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>OHSAS 18001</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled text-muted">
                                    <li class="mb-0"><span class="text-primary h4 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>ISO/IEC 17025</li>
                                    <li class="mb-0"><span class="text-primary h4 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>Manajemen Risiko.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div><!--end container-->

        <!-- Cta start -->
        <div class="container-fluid mt-100 mt-60 px-md-3 px-0">
            <div class="rounded-md rounded-md-0 shadow-md position-relative overflow-hidden jarallax" data-jarallax
                data-speed="0.5" style="background: url('{{ asset('images/bg/ampul.jpg') }}') top;">
                <div class="bg-overlay bg-gradient-overlay"></div>
                <div class="container my-5">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <h4 class="title title-dark text-white mb-4">Kualitas Tak Terbantahkan. Produksi Sesuai
                                    Standar.
                                </h4>
                                <p class="text-white-50 para-dark mx-auto mb-4">Jaminan kualitas adalah prioritas
                                    kami. Dengan sertifikasi BPOM, Halal, dan ISO, kami memastikan setiap produk yang kami
                                    hasilkan memenuhi standar tertinggi dan siap bersaing di pasar. Kami mengelola seluruh
                                    proses dengan presisi, dari bahan baku hingga produk akhir.</p>
                                <a href="{{ route('kontak.index') }}" class="btn btn-pills btn-info">
                                    <i class="uil uil-phone"></i> Hubungi Kami
                                </a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
            <!--end slide-->
        </div><!--end container-->
        <!-- Cta End -->

        <!-- FAQ Start -->
        @include('user.faq')

        <!-- Modal Identity Start -->
        @include('user.identity-modal')
    </div>
@endsection

@push('scripts')
    @if (session('show_identity_modal'))
        <script>
            var identityModal = new bootstrap.Modal(document.getElementById('identityModal'));
            identityModal.show();
        </script>
    @endif
@endpush
