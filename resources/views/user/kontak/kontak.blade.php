@extends('layouts.app', [
    'title' => 'Kontak',
    'desc' => '',
])

@section('bg', '807A0366.jpg')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2 wow animate__ animate__fadeInUp animated" data-wow-delay=".1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h3 class="title mb-4">Hubungi Kami</h3>
                    <p class="text-muted para-desc mb-0 mx-auto">Kami dengan senang hati akan membantu anda dalam setiap
                        proses pembuatan produk anda,
                        Silakan hubungi kami melalui kontak di bawah ini untuk informasi lebih lanjut, kerja sama, atau
                        konsultasi produk. Mari wujudkan produk dengan brand professional anda.
                </div>
            </div>
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories category-primary text-center rounded border-0 wow animate__ animate__fadeInUp animated h-100"
                    data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="card-body">
                        <img src="{{ asset('/images/illustrator/factory.png') }}" class="avatar avatar-small mb-3"
                            alt="">
                        <h5><a href="javascript:void(0)" class="title text-dark">Alamat Pabrik</a></h5>
                        <div class="text-muted mb-0 mt-3">
                            <span>PT. Phapros, Tbk.</span> <br>
                            <span>Jl. Simongan No.131, Semarang 50148</span> <br>
                            <span>Phone: (024) 762 5484</span><br>
                            <span>Fax : (024) 760 5133</span>
                        </div>
                    </div>
                </div>
            </div><!--end col-->


            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories category-primary text-center rounded border-0 wow animate__ animate__fadeInUp animated h-100"
                    data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="card-body">
                        <img src="{{ asset('/images/illustrator/office-building.png') }}" class="avatar avatar-small mb-3"
                            alt="">
                        <h5><a href="javascript:void(0)" class="title text-dark">Alamat Kantor</a></h5>
                        <div class="text-muted mb-0 mt-3">
                            <span>Menara Rajawali Lantai 17</span> <br>
                            <span>Jl. Dr. Ide Anak Agung Gde Agung, Mega Kuningan, Jakarta Selatan, 12950</span> <br>
                            <span>Phone: (62-21) 576 2709</span><br>
                            <span>Fax : (62-21) 576 3910</span>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories category-primary text-center rounded border-0 wow animate__ animate__fadeInUp animated h-100"
                    data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <div class="card-body">
                        <img src="{{ asset('/images/illustrator/customer-service.png') }}" class="avatar avatar-small mb-3"
                            alt="">
                        <h5><a href="javascript:void(0)" class="title text-dark">Info Toll Manufacturing</a></h5>
                        <div class="text-muted mb-0 mt-3">
                            <span>Email :</span> <br>
                            <span>sales.toti@phapros.co.id</span> <br>
                            <span>salestoti.ph@gmail.com</span><br>
                            <span>municka@phapros.co.id</span><br>
                            <span>Phone :</span>
                            <span>085640536364</span>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <div class="container mt-50">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-5 col-12 mt-4 pt-2">
                <div class="wow animate__ animate__fadeInUp animated" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <img src="{{ asset('/images/illustrator/customer.svg') }}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-6 col-md-7 col-12 mt-4 pt-2">
                <div class="card rounded shadow border-0 ms-lg-4 wow animate__ animate__fadeInUp animated"
                    data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="card-body p-4">
                        <form action="{{ route('kontak.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Perusahaan</label>
                                        <div class="form-icon position-relative">
                                            <input type="text"
                                                class="form-control @error('company') is-invalid @enderror" name="company"
                                                placeholder="Nama Perusahaan" value="{{ old('company') }}">

                                            @error('company')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Contact Person</label>
                                        <div class="form-icon position-relative">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" placeholder="Contact Person" value="{{ old('name') }}">

                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Alamat</label>
                                        <div class="form-icon position-relative">
                                            <textarea rows="2" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Alamat"
                                                value="{{ old('address') }}"></textarea>

                                            @error('address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email Anda</label>
                                        <div class="form-icon position-relative">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" placeholder="Email Anda" value="{{ old('email') }}">

                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Telephone / HP / Whatsapp</label>
                                        <div class="form-icon position-relative">
                                            <input type="text"
                                                class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                placeholder="Telephone / HP / Whatsapp" value="{{ old('phone') }}">

                                            @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Pesan Untuk Kami</label>
                                        <div class="form-icon position-relative">
                                            <textarea rows="4" class="form-control @error('message') is-invalid @enderror" name="message"
                                                placeholder="Pesan Untuk Kami" value="{{ old('message') }}"></textarea>

                                            @error('message')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" db
                                                id="privacyPolicy">
                                            <label class="form-check-label" for="privacyPolicy">Please confirm that you
                                                agree to our <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#privacyPolicyModal" class="text-primary">Privacy
                                                    Policy</a></label>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="btn btn-primary"
                                        value="Kirim" disabled>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" data-bs-backdrop="static" id="privacyPolicyModal" tabindex="-1" role="dialog"
        aria-labelledby="privacyPolicyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="privacyPolicyModalLabel">Kebijakan Privasi PT Phapros Tbk</h5>
                    <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="uil uil-times fs-4 text-dark"></i></button>
                </div>
                <div class="modal-body" style="text-align: justify;">
                    <div class="container">
                        <div class="card">
                            @include('user.privacy-policy')
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                        aria-label="Close">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-50">
        <div class="row">
            <div class="map map-height-three rounded map-gray border-0">
                <iframe
                    src="https://maps.google.com/maps?q=Jl.+Simongan+No.131%2C+Bongsari%2C+Kec.+Semarang+Barat%2C+Kota+Semarang%2C+Jawa+Tengah+50148&t=&z=16&ie=UTF8&iwloc=&output=embed"
                    style="border:0" class="rounded w-100" allowfullscreen></iframe>
            </div>
        </div><!--end col-->
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const privacyPolicyCheckbox = document.getElementById('privacyPolicy');
            const submitButton = document.getElementById('submit');

            privacyPolicyCheckbox.addEventListener('change', function() {
                submitButton.disabled = !this.checked;
            });
        });

        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1000
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Oops... Terjadi Masalah',
                text: '{{ session('error') }}'
            });
        @endif
    </script>
@endpush
