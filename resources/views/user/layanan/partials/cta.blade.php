<div class="container">
    <div class="row my-md-5 pt-md-3 my-4 pt-2 pb-lg-4 justify-content-center">
        <div class="rounded bg-primary bg-gradient p-lg-5 p-4">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title-dark text-white mb-4">Anda Tertarik? Ajukan Permintaan!</h4>
                    <p class="text-white-50 para-800 mx-auto">Ingin memproduksi produk dengan standar terbaik?
                        <span class="text-light fw-bold">Toll Manufacturing</span> kami siap membantu mewujudkannya.
                        Daftarkan produk Anda sekarang dan mulailah perjalanan menuju produksi yang lebih efisien dan
                        profesional.
                    </p>
                    <div class="mt-4">
                        @auth
                            <a href="javascript:void(0)" id="btnPermintaan" class="btn btn-success mt-2 me-2"><i
                                    class="uil uil-file-plus-alt"></i>
                                Ajukan Permintaan</a>
                        @endauth
                        @guest
                            <a href="{{ route('register') }}" class="btn btn-success mt-2 me-2"><i
                                    class="uil uil-file-plus-alt"></i>
                                Ajukan Permintaan</a>
                        @endguest
                        <a href="{{ route('kontak.index') }}" class="btn btn-outline-info mt-2 me-2"><i
                                class="uil uil-phone"></i>
                            Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div>
</div>

@include('user.permintaan.create')
@include('user.identity-modal')

@push('scripts')
    @auth
        <script>
            const btnPermintaan = document.getElementById('btnPermintaan');
            if (btnPermintaan) {
                btnPermintaan.addEventListener('click', function() {
                    @if (Auth::user()->isProfileComplete())
                        // kalau profil lengkap → buka modal permintaan
                        var permintaanModal = new bootstrap.Modal(document.getElementById('permintaanForm'));
                        permintaanModal.show();
                    @else
                        // kalau belum lengkap → buka modal identitas
                        var identityModal = new bootstrap.Modal(document.getElementById('identityModal'));
                        identityModal.show();
                    @endif
                });
            }
        </script>
    @endauth
@endpush
