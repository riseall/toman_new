@extends('admin.layouts.app', [
    'title' => 'Home',
])
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <div>
            {{-- <h6 class="text-muted mb-1">Welcome back, Cristina!</h6> --}}
            <h5 class="mb-0">Dashboard</h5>
        </div>

        <div class="mb-0 position-relative">
            <select class="form-select form-control" id="dailychart">
                <option selected="">This Month</option>
                <option value="aug">August</option>
                <option value="jul">July</option>
                <option value="jun">June</option>
            </select>
        </div>
    </div>

    <div class="row row-cols-xl-5 row-cols-md-2 row-cols-1">
        <div class="col mt-4">
            <a href="#!"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-user-circle fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Visitor</h6>
                        <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="4589">2100</span>
                        </p>
                    </div>
                </div>

                <span class="text-danger"><i class="uil uil-chart-down"></i> 0.5%</span>
            </a>
        </div><!--end col-->

        <div class="col mt-4">
            <a href="#!"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-usd-circle fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Revenue</h6>
                        <p class="fs-5 text-dark fw-bold mb-0">$<span class="counter-value" data-target="48575">35214</span>
                        </p>
                    </div>
                </div>

                <span class="text-success"><i class="uil uil-arrow-growth"></i> 3.84%</span>
            </a>
        </div><!--end col-->

        <div class="col mt-4">
            <a href="#!"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-shopping-bag fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Orders</h6>
                        <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="4800">3402</span>
                        </p>
                    </div>
                </div>

                <span class="text-success"><i class="uil uil-arrow-growth"></i> 1.46%</span>
            </a>
        </div><!--end col-->

        <div class="col mt-4">
            <a href="#!"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-store fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Items</h6>
                        <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="145">23</span></p>
                    </div>
                </div>

                <span class="text-muted"><i class="uil uil-analysis"></i> 0.0%</span>
            </a>
        </div><!--end col-->

        <div class="col mt-4">
            <a href="#!"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-users-alt fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Users</h6>
                        <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="9">1.5</span>M</p>
                    </div>
                </div>

                <span class="text-danger"><i class="uil uil-chart-down"></i> 0.5%</span>
            </a>
        </div><!--end col-->
    </div><!--end row-->

    {{-- <div class="row">
        <div class="col-xl-8 col-lg-7 mt-4">
            <div class="card shadow border-0 p-4 pb-0 rounded">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-0 fw-bold">Sales Analytics</h6>

                    <div class="mb-0 position-relative">
                        <select class="form-select form-control" id="yearchart">
                            <option selected>2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                        </select>
                    </div>
                </div>
                <div id="dashboard" class="apex-chart"></div>
            </div>
        </div><!--end col-->

        <div class="col-xl-4 col-lg-5 mt-4 rounded">
            <div class="card shadow border-0">
                <div class="p-4 border-bottom">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-0 fw-bold">Upcoming Activity</h6>

                        <a href="#!" class="text-primary">See More <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div>

                <div class="p-4" data-simplebar style="height: 365px;">
                    <a href="javascript:void(0)"
                        class="features feature-primary key-feature d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-circle me-3">
                                <i class="ti ti-users"></i>
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0 text-dark">Meeting with Developers</h6>
                                <small class="text-muted">Today 6:00pm</small>
                            </div>
                        </div>

                        <i class="ti ti-arrow-up text-warning"></i>
                    </a>

                    <a href="javascript:void(0)"
                        class="features feature-success key-feature d-flex align-items-center justify-content-between mt-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-circle me-3">
                                <i class="ti ti-gift"></i>
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0 text-dark">Cally's Birthday</h6>
                                <small class="text-muted">Tomorrow 10:00am</small>
                            </div>
                        </div>

                        <i class="ti ti-arrow-down text-success"></i>
                    </a>

                    <a href="javascript:void(0)"
                        class="features feature-primary key-feature d-flex align-items-center justify-content-between mt-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-circle me-3">
                                <i class="ti ti-users"></i>
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0 text-dark">Meeting with C.E.O</h6>
                                <small class="text-muted">Today 6:00pm</small>
                            </div>
                        </div>

                        <i class="ti ti-arrow-down text-success"></i>
                    </a>

                    <a href="javascript:void(0)"
                        class="features feature-danger key-feature d-flex align-items-center justify-content-between mt-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-circle me-3">
                                <i class="ti ti-video-plus"></i>
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0 text-dark">Movie Night</h6>
                                <small class="text-muted">Today 6:00pm</small>
                            </div>
                        </div>

                        <i class="ti ti-arrow-down text-success"></i>
                    </a>

                    <a href="javascript:void(0)"
                        class="features feature-primary key-feature d-flex align-items-center justify-content-between mt-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-circle me-3">
                                <i class="ti ti-users"></i>
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0 text-dark">Meeting with HR</h6>
                                <small class="text-muted">Today 6:00pm</small>
                            </div>
                        </div>

                        <i class="ti ti-arrow-down text-success"></i>
                    </a>

                    <a href="javascript:void(0)"
                        class="features feature-success key-feature d-flex align-items-center justify-content-between mt-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-circle me-3">
                                <i class="ti ti-gift"></i>
                            </div>
                            <div class="flex-1">
                                <h6 class="mb-0 text-dark">Carlo's Birthday</h6>
                                <small class="text-muted">Today 6:00pm</small>
                            </div>
                        </div>

                        <i class="ti ti-arrow-down text-success"></i>
                    </a>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row--> --}}
@endsection
