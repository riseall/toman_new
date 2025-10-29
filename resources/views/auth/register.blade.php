@extends('layouts.guest', ['title' => 'Login'])
@section('content')
    <!--begin::Login-->
    <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden h-100">
            <!--begin: Aside Container-->
            <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-23">
                <!--begin::Logo-->
                <a href="{{ route('register') }}" class="text-center pt-2">
                    <img src="{{ asset('images/logo/logoPH.png') }}" class="max-h-75px" alt="" />
                </a>
                <!--end::Logo-->
                <!--begin::Aside body-->
                <div class="d-flex flex-column-fluid flex-column flex-center">
                    <!--begin::Signup-->
                    <div class="login-form login-signin pt-11">
                        <div class="text-center pb-8">
                            <h2 class="font-weight-bolder text-primary font-size-h2 font-size-h1-lg">Register - Toman</h2>
                            <p class="text-muted font-weight-bold">Silahkan lengkapi identitas anda untuk membuat akun</p>
                        </div>
                        <!--begin::Form-->
                        <form method="POST" action="{{ route('register') }}" class="form" novalidate="novalidate"
                            id="kt_login_signup_form">
                            @csrf

                            <div class="form-group">
                                <label for="first_name" class="font-size-h7 font-weight-bolder text-dark">Nama Depan</label>
                                <input type="text" name="first_name" id="first_name" class="form-control"
                                    placeholder="Nama Depan" required>
                                @error('first_name')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="font-size-h7 font-weight-bolder text-dark">Nama
                                    Belakang</label>
                                <input type="text" name="last_name" id="last_name" class="form-control"
                                    placeholder="Nama Belakang" required>
                                @error('last_name')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="username" class="font-size-h7 font-weight-bolder text-dark">Username</label>
                                <input type="text" name="username" id="username" class="form-control"
                                    placeholder="Username" required>
                                @error('username')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="font-size-h7 font-weight-bolder text-dark">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                    required>
                                @error('email')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="font-size-h7 font-weight-bolder text-dark">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Password" required>
                                    <div class="input-group-append" style="border: 1px solid #77b4fa; border-radius: 5px">
                                        <span id="togglePassword" onclick="togglePassword('password', 'eyeIcon')"
                                            class="input-group-text" style="cursor:pointer;">
                                            <span id="eyeIcon" class="mdi mdi-eye"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Progress bar kekuatan password -->
                                <div class="progress mt-2" style="height: 8px;">
                                    <div id="passwordStrengthBar" class="progress-bar" role="progressbar" style="width: 0;">
                                    </div>
                                </div>
                                <small id="passwordStrengthText" class="form-text text-muted">Kekuatan password: -</small>

                                <!-- Daftar aturan -->
                                <ul id="password-requirements" class="list-unstyled small mt-2 mb-0">
                                    <li id="min-length" class="text-danger">Minimal 8 karakter</li>
                                    <li id="letters" class="text-danger">Mengandung huruf</li>
                                    <li id="mixed" class="text-danger">Huruf besar dan kecil</li>
                                    <li id="numbers" class="text-danger">Mengandung angka</li>
                                    <li id="symbols" class="text-danger">Mengandung simbol (!@#$...)</li>
                                </ul>
                                @error('password')
                                    <div class="invalid-feedback d-block" id="password-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation"
                                    class="font-size-h7 font-weight-bolder text-dark">Konfirmasi Password</label>
                                <div class="input-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control" placeholder="Konfirmasi Password" required>
                                    <div class="input-group-append" style="border: 1px solid #77b4fa; border-radius: 5px">
                                        <span id="togglePasswordConfirm"
                                            onclick="togglePassword('password_confirmation', 'eyeIconConfirm')"
                                            class="input-group-text" style="cursor:pointer;">
                                            <span id="eyeIconConfirm" class="mdi mdi-eye"></span>
                                        </span>
                                    </div>
                                </div>
                                @error('password-confirmation')
                                    <div class="invalid-feedback d-block" id="password-feedback">{{ $message }}</div>
                                @enderror
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

                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-2">
                                <div class="my-3 mr-2">
                                    <span class="text-muted font-weight-bold mr-2">Sudah punya akun?</span>
                                    <a href="{{ route('login') }}" id="kt_login_signup"
                                        class="text-primary font-weight-bolder">Login</a>
                                </div>
                                <button type="submit"
                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 ml-3">Register</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
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
            style="background-image: url(images/bg/phapros.jpg); background-size: cover; filter: brightness(0.5);">
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
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
    <script>
        window.recaptchaSiteKey = "{{ config('services.recaptcha.site_key') }}";
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
    <style>
        .fade-out {
            opacity: 0;
            transition: opacity 0.3s ease-out;
        }
    </style>
@endsection

@push('scripts')
    <script src="{{ asset('js/validasi-password.js') }}"></script>
@endpush
