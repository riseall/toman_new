<footer class="footer footer-light border-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-py-60">
                    <div class="row">
                        <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                            <a class="logo-footer">
                                <img src="{{ asset('images/logo/logoPH.png') }}" height="45" alt="">
                            </a>
                            <div class="mt-4">
                                <span>PT. Phapros, Tbk.</span> <br>
                                <span>Jl. Simongan No.131, Semarang 50148</span> <br>
                                <span>Telepon : (024) 762 5484</span><br>
                                <span>Email : sales.toti@phapros.co.id</span>
                            </div>
                            <ul class="list-unstyled social-icon social mb-0 mt-4">
                                <li class="list-inline-item mb-0"><a href="https://www.facebook.com/ptphapros"
                                        target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle"
                                            title="facebook"></i></a></li>
                                <li class="list-inline-item mb-0"><a href="https://www.instagram.com/phapros.id"
                                        target="_blank" class="rounded"><i class="uil uil-instagram align-middle"
                                            title="instagram"></i></a></li>
                                <li class="list-inline-item mb-0"><a href="https://www.youtube.com/@tomanphapros9324"
                                        target="_blank" class="rounded"><i class="uil uil-youtube align-middle"
                                            title="instagram"></i></a></li>
                                <li class="list-inline-item mb-0"><a href="https://twitter.com/PTPhapros"
                                        target="_blank" class="rounded"><i class="uil uil-twitter align-middle"
                                            title="twitter"></i></a></li>
                            </ul><!--end icon-->
                        </div><!--end col-->

                        <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Navigasi</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="{{ route('home') }}" class="text-foot"><i
                                            class="uil uil-angle-right-b me-1"></i> Beranda</a></li>
                                <li><a href="{{ route('toll_murni') }}" class="text-foot"><i
                                            class="uil uil-angle-right-b me-1"></i> Layanan</a></li>
                                <li><a href="{{ route('portofolio.index') }}" class="text-foot"><i
                                            class="uil uil-angle-right-b me-1"></i> Portofolio</a></li>
                                <li><a href="{{ route('alur.index') }}" class="text-foot"><i
                                            class="uil uil-angle-right-b me-1"></i> Alur
                                        Maklon</a></li>
                                @auth
                                    <li><a href="{{ route('permintaan.index') }}" class="text-foot"><i
                                                class="uil uil-angle-right-b me-1"></i> Permintaan</a></li>
                                @endauth
                                <li><a href="{{ route('kontak.index') }}" class="text-foot"><i
                                            class="uil uil-angle-right-b me-1"></i> Kontak</a></li>
                            </ul>
                        </div><!--end col-->


                        <div class="col-lg-6 col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Sertifikat dan Penghargaan</h5>
                            <div class="mt-4 d-flex flex-wrap gap-3">
                                <img class="sertif" src="{{ asset('images/cert/logo_bpom.png') }}" alt="Badan Pom">
                                <img class="sertif" src="{{ asset('images/cert/logo_k3.png') }}" alt="SMK3">
                                <img class="sertif" src="{{ asset('images/cert/logo_proper.png') }}" alt="Proper">
                                <img class="sertif" src="{{ asset('images/cert/logo_lloyd.png') }}"
                                    alt="Lloyd's Register">
                                <img class="sertif" src="{{ asset('images/cert/logo_KAN.png') }}" alt="KAN">
                                <img class="sertif" src="{{ asset('images/cert/logo_halal.png') }}" alt="Halal">
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="footer-py-30 bg-footer text-white-50 border-top">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="text-sm-center">
                    <p class="mb-0">Copyright &copy; 2025 <strong>PT. Phapros, Tbk.</strong> - All rights reserved.
                    </p>
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
