@extends('layouts.home', ['title' => 'Home'])
@section('content')
    <!-- Layanan Start -->
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
                <div class="features feature-primary text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('images/logo/TMurni.png') }}" alt="Toll Murni" width="75">
                    </div>

                    <div class="content mt-4">
                        <h5>Toll Murni</h5>
                        <p class="text-muted mb-0">Menawarkan Jasa Toll Manufacturing dengan sistem Toll Murni.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-5 pt-4">
                <div class="features feature-primary text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('images/logo/TBeli.png') }}" alt="Toll Beli" width="75">
                    </div>

                    <div class="content mt-4">
                        <h5>Toll Beli</h5>
                        <p class="text-muted mb-0">Menyediakan jasa Toll Manufacturing dengan sistem beli produk.
                        </p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 col-12 mt-5 pt-4">
                <div class="features feature-primary text-center">
                    <div class="image position-relative d-inline-block">
                        <img src="{{ asset('images/logo/Kalibrasi.png') }}" alt="Kalibrasi" width="75">
                    </div>

                    <div class="content mt-4">
                        <h5>Kalibrasi dan lain-lain</h5>
                        <p class="text-muted mb-0">Menawarkan Jasa Kalibrasi untuk alat-alat pengukuran di
                            perusahaan Anda.</p>
                    </div>
                </div>
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
                                <img src="{{ asset('images/bg/phapros-obat.jpg') }}" class="img-fluid" alt="work-image">
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
                                        <img src="{{ asset('images/bg/lab_phapros.jpg') }}" class="img-fluid"
                                            alt="work-image">
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
                                        <img src="{{ asset('images/bg/beranda.jpg') }}" class="img-fluid" alt="work-image">
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
                        <p class="text-muted para-desc">Sejak didirikan lebih dari enam dasawarsa yang lalu,
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
            data-speed="0.5" style="background: url('/images/bg/ampul.jpg') top;">
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
                            <a href="#!" class="btn btn-pills btn-primary">
                                <i class="uil uil-outgoing-call"></i> Hubungi Tim Ahli Kami
                            </a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div>
        <!--end slide-->
    </div><!--end container-->
    <!-- Cta End -->

    {{-- <!-- Product Start -->
    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title me-lg-5">
                    <h4 class="title mb-4">Expert advisory tailored <br> for maximum returns</h4>
                    <p class="text-muted">This prevents repetitive patterns from impairing the overall visual impression
                        and facilitates the comparison of different typefaces. Furthermore, it is advantageous when the
                        dummy text is relatively realistic.</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions for
                            Tomorrow</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Create your own skin to match your
                            brand</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced
                            Marketing Agency</li>
                    </ul>
                    <a href="" class="btn btn-primary">Learn More <i
                            class="mdi mdi-arrow-right align-middle"></i></a>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 order-1 order-md-2">
                <div class="about-right">
                    <div class="position-relative shadow p-2 rounded bg-white-color img-one">
                        <img src="{{ asset('images/bg/phapros-obat.jpg') }}" class="img-fluid rounded" alt="work-image">
                    </div>

                    <div class="img-two shadow rounded-3 overflow-hidden p-2 bg-white-color">
                        <img src="{{ asset('images/bg/phapros-obat.jpg') }}" class="img-fluid rounded-3"
                            alt="work-image">
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- Alat Start -->
    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="about-left">
                    <div class="position-relative shadow p-2 rounded bg-white-color img-one">
                        <img src="{{ asset('images/bg/phapros-obat.jpg') }}" class="img-fluid rounded" alt="work-image">
                    </div>

                    <div class="img-two shadow rounded-3 overflow-hidden p-2 bg-white-color">
                        <img src="{{ asset('images/bg/phapros-obat.jpg') }}" class="img-fluid rounded-3"
                            alt="work-image">
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-4">Ready to apply? <br> Here's what you need</h4>
                    <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great
                        importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the
                        distribution of letters visual impact.</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions for
                            Tomorrow</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Create your own skin to match your
                            brand</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i
                                    class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced
                            Marketing Agency</li>
                    </ul>

                    <a href="" class="btn btn-primary">Learn More <i
                            class="mdi mdi-arrow-right align-middle"></i></a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container--> --}}

    <!-- FAQ Start -->
    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 order-md-2 order-3">
                <div class="saas-feature-shape-right position-relative">
                    <img src="{{ asset('images/illustrator/faq.svg') }}" class="img-fluid mover mx-auto d-block "
                        alt="work-image">
                </div>
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0 order-md-1 order-2">
                <div class="me-lg-5">
                    <div class="section-title mb-4 pb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="title mb-4">Frequently Asked Questions</h4>
                        <p class="text-muted para-desc mb-0">Kami telah merangkum beberapa pertanyaan yang sering
                            diajukan
                            mengenai Toll Manufacturing dan bidang terkait.</p>
                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item rounded shadow wow animate__animated animate__fadeInUp"
                            data-wow-delay=".3s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-0 bg-light" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    How does it work ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse border-0 collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted">
                                    There are many variations of passages of Lorem Ipsum available, but the majority
                                    have
                                    suffered alteration in some form.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded shadow mt-3 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".5s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button border-0 bg-light collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Do I need a designer to use Landrick ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse border-0 collapse"
                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted">
                                    There are many variations of passages of Lorem Ipsum available, but the majority
                                    have
                                    suffered alteration in some form.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded shadow mt-3 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".7s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button border-0 bg-light collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    What do I need to do to start selling ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse border-0 collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted">
                                    There are many variations of passages of Lorem Ipsum available, but the majority
                                    have
                                    suffered alteration in some form.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded shadow mt-3 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".9s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button border-0 bg-light collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    What happens when I receive an order ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse border-0 collapse"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted">
                                    There are many variations of passages of Lorem Ipsum available, but the majority
                                    have
                                    suffered alteration in some form.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
@endsection
