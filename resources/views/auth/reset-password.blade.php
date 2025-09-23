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
                                    <input class="form-control " type="password" name="password" placeholder="Password Baru"
                                        required />
                                    @error('password')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input class="form-control " type="password" name="password_confirmation"
                                        placeholder="Konfirmasi Password" required />
                                </div>

                                <div class="form-group d-flex flex-wrap flex-center">
                                    <div class="mb-0">
                                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}">
                                        </div>
                                    </div>
                                    @error('g-recaptcha-response')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
@endsection
