<div class="container">
    <div class="row my-md-5 pt-md-3 my-4 pt-2 pb-lg-4 justify-content-center">
        <div class="rounded bg-primary bg-gradient p-lg-5 p-4">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title-dark text-white mb-4">Butuhkan Jasa Kalibrasi yang Berkualitas?</h4>
                    <p class="text-white-50 para-800 mx-auto">Ingin melakukan kalibrasi alat dengan standar terbaik?
                        <span class="text-light fw-bold">Jasa Kalibrasi</span> kami siap membantu mewujudkannya.
                        Dengan pengalaman, fasilitas lengkap, serta komitmen pada mutu, kami siap mendukung kepatuhan
                        regulasi dan kelancaran operasional Anda.
                    </p>
                    <div class="mt-4">
                        @auth
                            <a href="javascript:void(0)" id="btnPermintaan" class="btn btn-success mt-2 me-2"><i
                                    class="uil uil-file-plus-alt"></i>
                                Ajukan Permintaan Kalibrasi</a>
                        @endauth
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-success mt-2 me-2"><i
                                    class="uil uil-file-plus-alt"></i>
                                Ajukan Permintaan Kalibrasi</a>
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

@include('user.permintaan.createKali')
@include('user.identity-modal')

@push('scripts')
    @auth
        <script>
            const btnPermintaan = document.getElementById('btnPermintaan');
            if (btnPermintaan) {
                btnPermintaan.addEventListener('click', function() {
                    @if (Auth::user()->isProfileComplete())
                        // kalau profil lengkap → buka modal permintaan
                        var kalibrasiModal = new bootstrap.Modal(document.getElementById('kalibrasiModal'));
                        kalibrasiModal.show();
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
