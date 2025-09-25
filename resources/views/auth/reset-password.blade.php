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
                                        <input class="form-control " type="password" name="password" id="password"
                                            placeholder="Password Baru" required />
                                        <div class="input-group-append"
                                            style="border: 1px solid #77b4fa; border-radius: 5px">
                                            <span id="togglePassword" onclick="togglePassword('password', 'eyeIcon')"
                                                class="input-group-text" style="cursor:pointer;">
                                                <!-- icon mata -->
                                                <svg id="eyeIcon" width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-eye-fill" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
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
                                            <span id="togglePassword"
                                                onclick="togglePassword('password_confirmation', 'eyeIconConfirm')"
                                                class="input-group-text" style="cursor:pointer;">
                                                <!-- icon mata -->
                                                <svg id="eyeIconConfirm" width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-eye-fill" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg>
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
                                    <button type="submit"
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
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.outerHTML = `<svg id="eyeIcon" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
            </svg>`;
            } else {
                passwordInput.type = 'password';
                eyeIcon.outerHTML = `<svg id="eyeIcon" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
            </svg>`;
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
