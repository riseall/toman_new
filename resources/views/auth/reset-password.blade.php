@extends('layouts.guest', ['title' => 'Reset Password'])
@section('content')
    <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden h-100">
            <!--begin: Aside Container-->
            <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13">
                <!--begin::Logo-->
                <a href="{{ route('login') }}" class="text-center pt-2">
                    <img src="{{ asset('images/logo/logoPH.png') }}" class="max-h-75px" alt="" />
                </a>
                <!--end::Logo-->
                <!--begin::Aside body-->
                <div class="d-flex flex-column-fluid flex-column flex-center">
                    <div class="login login-2 d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
                        <div class="d-flex flex-column-fluid flex-column flex-center py-9 px-7">
                            <form method="POST" action="{{ route('password.update') }}" class="w-100"
                                id="kt_reset_password_form">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="text-center pb-8">
                                    <h2 class="font-weight-bolder text-dark">Reset Kata Sandi</h2>
                                    <span class="text-muted">Masukkan email dan password baru</span>
                                </div>

                                <div class="form-group">
                                    <input class="form-control " type="email" name="email"
                                        value="{{ old('email', $email) }}" placeholder="Email" required />
                                    @error('email')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control" type="password" name="password" id="password"
                                            placeholder="Password Baru" required />
                                        <div class="input-group-append"
                                            style="border: 1px solid #77b4fa; border-radius: 5px">
                                            <span id="togglePassword" onclick="togglePassword('password', 'eyeIcon')"
                                                class="input-group-text" style="cursor:pointer;">
                                                <span id="eyeIcon" class="mdi mdi-eye"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Progress bar kekuatan password -->
                                    <div class="progress mt-2" style="height: 8px;">
                                        <div id="passwordStrengthBar" class="progress-bar" role="progressbar"
                                            style="width: 0;">
                                        </div>
                                    </div>
                                    <small id="passwordStrengthText" class="form-text text-muted">Kekuatan password:
                                        -</small>

                                    <!-- Daftar aturan -->
                                    <ul id="password-requirements" class="list-unstyled small mt-2 mb-0">
                                        <li id="min-length" class="text-danger">Minimal 8 karakter</li>
                                        <li id="letters" class="text-danger">Mengandung huruf</li>
                                        <li id="mixed" class="text-danger">Huruf besar dan kecil</li>
                                        <li id="numbers" class="text-danger">Mengandung angka</li>
                                        <li id="symbols" class="text-danger">Mengandung simbol (!@#$...)</li>
                                    </ul>
                                    @error('password')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control " type="password" name="password_confirmation"
                                            placeholder="Konfirmasi Password" id="password_confirmation" required />
                                        <div class="input-group-append"
                                            style="border: 1px solid #77b4fa; border-radius: 5px">
                                            <span id="togglePasswordConfirm"
                                                onclick="togglePassword('password_confirmation', 'eyeIconConfirm')"
                                                class="input-group-text" style="cursor:pointer;">
                                                <span id="eyeIconConfirm" class="mdi mdi-eye"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group d-flex flex-wrap flex-center">
                                    <div class="mb-0">
                                        <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}">
                                        </div>
                                        @error('g-recaptcha-response')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="button" id="btn_reset_password"
                                        class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Reset
                                        Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end::Aside body-->
                <!--begin: Aside footer for desktop-->
                <!--end: Aside footer for desktop-->
            </div>
            <!--end: Aside Container-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0"
            style="background-image: url({{ asset('images/bg/phapros.jpg') }}); background-size: cover; filter: brightness(0.5);">
        </div>
        <!--end::Content-->
    </div>

    <script>
        function togglePassword(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const eyeIcon = document.getElementById(iconId);
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.className = "mdi mdi-eye-off";
            } else {
                passwordInput.type = "password";
                eyeIcon.className = "mdi mdi-eye";
            }
        }
    </script>
    @if (session('password_reset'))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: {!! json_encode(session('password_reset_message')) !!},
                icon: 'success',
                allowOutsideClick: false
            });
        </script>
    @endif
@endsection

@push('scripts')
    <script src="{{ asset('js/validasi-password.js') }}"></script>
@endpush
