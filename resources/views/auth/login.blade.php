@extends('layouts.guest', ['title' => 'Login'])
@section('content')
    <!--begin::Login-->
    <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden h-100">
            <!--begin: Aside Container-->
            <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-23">
                <!--begin::Logo-->
                <a href="{{ route('login') }}" class="text-center pt-2">
                    <img src="{{ asset('images/logo/logoPH.png') }}" class="max-h-75px" alt="" />
                </a>
                <!--end::Logo-->
                <!--begin::Aside body-->
                <div class="d-flex flex-column-fluid flex-column flex-center">
                    <!--begin::Signin-->
                    <div class="login-form login-signin py-11">
                        <!--begin::Form-->
                        <form method="POST" action="{{ route('login') }}" class="form" novalidate="novalidate"
                            id="kt_login_signin_form">
                            @csrf
                            <!--begin::Title-->
                            <div class="text-center pb-8">
                                <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Masuk</h2>
                                <p class="text-muted font-weight-bold">Masukkan username and password anda</p>
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark" for="username"
                                    :value="__('Username')">Username</label>
                                <input class="form-control" type="text" id="username" type="text" name="username"
                                    :value="old('username')" required autofocus autocomplete="off" placeholder="Username" />
                                @error('username')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5" for="password"
                                        :value="__('Password')">Password</label>
                                    <a href="javascript:;" class="text-primary font-size-h7 text-hover-primary pt-5"
                                        id="kt_login_forgot">Lupa Password ?</a>
                                </div>
                                <div class="input-group">
                                    <input class="form-control" id="password" type="password" name="password" required
                                        autocomplete="current-password" autocomplete="off" placeholder="Password" />
                                    <div class="input-group-append" style="border: 1px solid #77b4fa; border-radius: 5px">
                                        <span id="togglePassword" onclick="togglePassword()" class="input-group-text"
                                            style="cursor:pointer;">
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
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!--end::Form group-->
                            <!--begin::Action-->
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

                            <div class="text-center pt-2">
                                <button type="submit" id="kt_login_signin_submit"
                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-3">Masuk</button>
                                <button type="button" class="btn btn-info font-weight-bolder font-size-h6 px-8 py-4 my-3"
                                    onclick="window.location.href='/'">Tamu</button>
                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                    <!--begin::Forgot-->
                    <div class="login-form login-forgot pt-11">
                        <!--begin::Form untuk Lupa Kata Sandi-->
                        <form class="form" method="POST" action="{{ route('password.email') }}"
                            id="kt_login_forgot_form">
                            @csrf
                            <!--begin::Title-->
                            <div class="text-center pb-8">
                                <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Lupa Password?</h2>
                                <span class="text-muted font-weight-bold font-size-sm">Silakan masukkan alamat email
                                    Anda.</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email" name="email"
                                    autocomplete="off" required id="email" />
                                @error('email')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap flex-center">
                                <div class="mb-0">
                                    <div id="recaptcha-forgot"></div>
                                    @error('g-recaptcha-response')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                                <button type="submit" id="kt_login_forgot_submit"
                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-3">Kirim</button>
                                <button type="button" id="kt_login_forgot_cancel"
                                    class="btn btn-light-danger font-weight-bolder font-size-h6 px-8 py-4 my-3">Batal</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Forgot-->
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
            <!--begin::Title-->
            {{-- <div class="d-flex flex-column justify-content-center text-center pt-lg-40 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
                <h3 class="display4 font-weight-bolder my-7 text-dark" style="color: #986923;">Amazing Wireframes</h3>
                <p class="font-weight-bolder font-size-h2-md font-size-lg text-dark opacity-70">User Experience &amp;
                    Interface Design, Product Strategy
                    <br />Web Application SaaS Solutions
                </p>
            </div> --}}
            <!--end::Title-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
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
@endsection
