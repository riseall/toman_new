@extends('layouts.app', [
    'title' => 'Alur Maklon',
    'desc' => '',
])

@section('bg', '807A0535.jpg')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title pb-2">
                    <h3 class="title mt-3 mb-3">Mau punya produk brand sendiri tapi bingung mulai darimana ? </h3>
                    <p class="text-muted para-desc mb-0 mx-auto">
                        Tenang, kami siap bantu dari awal sampai produk siap jual!
                        Berikut adalah alur maklon yang mudah, cepat, dan tanpa ribet!
                    </p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <div class="container mt-50">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                <div class="card border-0 work-container work-primary work-classic h-100">
                    <div class="card-body p-0">
                        <a href="javascript:void(0)"><img src="{{ asset('images/bg/807A6421.JPG') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="card content">
                            <div class="card-body px-3">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark title">1. Konsultasi
                                        Awal – Wujudkan Ide Menjadi Nyata</a>
                                </h5>
                                <h6 class="text-muted tag mb-0">Punya ide produk tapi bingung mulai dari mana?
                                    Langkah pertama adalah ngobrol santai dulu dengan tim kami.
                                    Kami akan bantu kamu memilih jenis produk, konsep, sampai strategi brand yang tepat.
                                    <br>
                                    “Saya mau buat sabun herbal yang aman untuk kulit sensitif, bisa?”
                                    Bisa banget!
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["designing"]'>
                <div class="card border-0 work-container work-primary work-classic h-100">
                    <div class="card-body p-0">
                        <a href="javascript:void(0)"><img src="{{ asset('images/bg/807A6765.JPG') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="card content">
                            <div class="card-body px-3">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark title">2. Tanda Tangan
                                        NDA – Ide Kamu Aman 100%</a></h5>
                                <h6 class="text-muted tag mb-0">Kami tahu ide itu mahal harganya.
                                    Makanya, sebelum masuk tahap serius, kita tandatangani perjanjian rahasia (NDA) agar
                                    kamu
                                    merasa aman dan nyaman.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["photography"]'>
                <div class="card border-0 work-container work-primary work-classic h-100">
                    <div class="card-body p-0">
                        <a href="javascript:void(0)"><img src="{{ asset('images/bg/807A0341.JPG') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="card content">
                            <div class="card-body px-3">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark title">3. Pembuatan
                                        Sampel – Uji Dulu Sebelum Produksi</a></h5>
                                <h6 class="text-muted tag mb-0">Tim R&D kami akan meracik sampel sesuai permintaanmu.
                                    Kamu bisa coba, uji, bahkan minta revisi sampai benar-benar puas. <br>
                                    Hasilnya? Produk yang unik, berkualitas, dan sesuai dengan visi kamu!
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["development"]'>
                <div class="card border-0 work-container work-primary work-classic h-100">
                    <div class="card-body p-0">
                        <a href="javascript:void(0)"><img src="{{ asset('images/bg/807A0482.JPG') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="card content">
                            <div class="card-body px-3">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark title">4. Desain Kemasan
                                        – Bikin Produk Kamu Tampil Memikat</a></h5>
                                <h6 class="text-muted tag mb-0">Desain kemasan adalah wajah pertama yang dilihat pelanggan.
                                    Tim desain kami siap bantu kamu membuat kemasan yang menarik, elegan, dan jualan banget!
                                    <br> Logo? Nama brand? Tenang, semua bisa dibantu.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                <div class="card border-0 work-container work-primary work-classic h-100">
                    <div class="card-body p-0">
                        <a href="javascript:void(0)"><img src="{{ asset('images/bg/807A6759.JPG') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="card content">
                            <div class="card-body px-3">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark title">5. Legalitas
                                        Lengkap – Aman & Siap Masuk Pasar</a></h5>
                                <h6 class="text-muted tag mb-0">Kami akan bantu urus semua izin yang diperlukan:
                                    <ul class="mb-0">
                                        <li>BPOM – agar produkmu legal dan dipercaya</li>
                                        <li>Halal MUI – untuk menjangkau pasar muslim</li>
                                        <li>Sertifikat merek – supaya brand kamu nggak ditiru</li>
                                    </ul>
                                    Aman, cepat, dan nggak perlu ribet!
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["branding"]'>
                <div class="card border-0 work-container work-primary work-classic h-100">
                    <div class="card-body p-0">
                        <a href="javascript:void(0)"><img src="{{ asset('images/bg/807A0749.JPG') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="card content">
                            <div class="card-body px-3">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark title">6. Purchase Order
                                        – Siap Produksi!</a></h5>
                                <h6 class="text-muted tag mb-0">Setelah semua siap, kamu tinggal tentukan jumlah produksi
                                    dan bayar DP. Kami punya MOQ yang fleksibel, cocok untuk kamu yang baru mulai maupun
                                    yang ingin scaling up.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["designing"]'>
                <div class="card border-0 work-container work-primary work-classic h-100">
                    <div class="card-body p-0">
                        <a href="javascript:void(0)"><img src="{{ asset('images/bg/807A0645.JPG') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="card content">
                            <div class="card-body px-3">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark title">7. Produksi
                                        Massal – Cepat & Berkualitas</a>
                                </h5>
                                <h6 class="text-muted tag mb-0">Proses produksi dilakukan dengan standar tinggi dan
                                    pengawasan ketat. Dari bahan baku sampai hasil akhir, kami pastikan semuanya bersih,
                                    aman, dan konsisten.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["development"]'>
                <div class="card border-0 work-container work-primary work-classic h-100">
                    <div class="card-body p-0">
                        <a href="javascript:void(0)"><img src="{{ asset('images/bg/807A0626.JPG') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="card content">
                            <div class="card-body px-3">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark title">8. Pengemasan
                                        Akhir – Siap Tampil di Rak Toko</a></h5>
                                <h6 class="text-muted tag mb-0">Produk kamu akan dikemas secara profesional dengan kemasan
                                    premium. Label, barcode, sampai dus pengiriman – semua kami siapkan.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 spacing picture-item" data-groups='["photography"]'>
                <div class="card border-0 work-container work-primary work-classic h-100">
                    <div class="card-body p-0">
                        <a href="javascript:void(0)"><img src="{{ asset('images/bg/807A0812.JPG') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="card content">
                            <div class="card-body px-3">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark title">9. Pelunasan &
                                        Pengiriman – Produk Siap Jual!</a></h5>
                                <h6 class="text-muted tag mb-0">Setelah pelunasan, produk akan kami kirim langsung ke
                                    tempat kamu. Kamu bisa langsung mulai jualan secara online, di marketplace, atau buka
                                    reseller!
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="d-lg-none d-block col-md-6 col-12 spacing picture-item" data-groups='["photography"]'>
                <div class="card border-0 work-container work-primary work-classic h-100">
                    <div class="card-body p-0">
                        <a href="javascript:void(0)"><img src="{{ asset('images/bg/807A6750.JPG') }}"
                                class="img-fluid rounded work-image" alt=""></a>
                        <div class="card content">
                            <div class="card-body px-3">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark title">10. After
                                        Sales – Kami Temani Bisnismu Tumbuh</a></h5>
                                <h6 class="text-muted tag mb-0">Kami nggak cuma bantu produksi, tapi juga bantu kamu
                                    berkembang:
                                    <ul>
                                        <li>Edukasi pemasaran</li>
                                        <li>Bantuan repeat order</li>
                                        <li>Saran pengembangan produk lanjutan</li>
                                    </ul>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="bg-primary rounded shadow py-5 d-lg-block d-none mt-3"
                style="background: url({{ asset('images/bg/807A6750.JPG') }}); background-size: cover; background-position: center;">
                <div class="container">
                    <div class="bg-overlay opacity-7 rounded"></div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <h4 class="title text-white title-dark mb-4">10. After
                                    Sales – Kami Temani Bisnismu Tumbuh</h4>
                                <p class="text-white-50 para-desc mb-0 mx-auto">Kami nggak cuma bantu produksi, tapi juga
                                    bantu kamu
                                    berkembang: <br> <strong> Edukasi pemasaran, Bantuan repeat order, Saran pengembangan
                                        produk
                                        lanjutan.</strong>
                                </p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div><!--end div-->
        </div><!--end row-->
    </div><!--end container-->
    @include('user.layanan.partials.cta')
@endsection
