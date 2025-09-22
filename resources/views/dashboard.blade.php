@extends('admin.layouts.app', [
    'title' => 'Home',
])
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <div>
            {{-- <h6 class="text-muted mb-1">Welcome back, Cristina!</h6> --}}
            <h5 class="mb-0">Dashboard</h5>
        </div>
    </div>

    <div class="row row-cols-xl-5 row-cols-md-2 row-cols-1">
        <div class="col mt-4">
            <a href="{{ route('user.index') }}"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-users-alt fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Users</h6>
                        <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value"
                                data-target="{{ $totalUser }}">0</span></p>
                    </div>
                </div>
            </a>
        </div><!--end col-->

        <div class="col mt-4">
            <a href="{{ route('company.index') }}"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <span class="mdi mdi-domain fs-4"></span>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Company</h6>
                        <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value"
                                data-target="{{ $totalCompany }}">0</span>
                        </p>
                    </div>
                </div>
            </a>
        </div><!--end col-->

        <div class="col mt-4">
            <a href="{{ route('companies.index') }}"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <span class="mdi mdi-flask-plus fs-4"></span>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Toll In</h6>
                        <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value"
                                data-target="{{ $totalTollIn }}">0</span>
                        </p>
                    </div>
                </div>
            </a>
        </div><!--end col-->

        <div class="col mt-4">
            <a href="{{ route('kalibrasi.index') }}"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <span class="mdi mdi-scale fs-4"></span>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Kalibrasi</h6>
                        <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value"
                                data-target="{{ $totalKalibrasi }}">0</span>
                        </p>
                    </div>
                </div>
            </a>
        </div><!--end col-->

        <div class="col mt-4">
            <a href="{{ route('pesan.index') }}"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <span class="mdi mdi-message-bulleted fs-4"></span>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Pesan</h6>
                        <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value"
                                data-target="{{ $totalPesan }}">0</span></p>
                    </div>
                </div>
            </a>
        </div><!--end col-->
    </div><!--end row-->
@endsection
