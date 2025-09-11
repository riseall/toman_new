<div class="top-header">
    <div class="header-bar d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <a href="#" class="logo-icon me-3">
                {{-- <img src="assets/images/logo-icon.png" height="30" class="small" alt=""> --}}
                <span class="big">
                    <img src="{{ asset('images/logo/logoPH.png') }}" height="40" class="logo-light-mode" alt="">
                    <img src="{{ asset('images/logo/logoPHwht.png') }}" height="40" class="logo-dark-mode"
                        alt="">
                </span>
            </a>
            <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                <i class="uil uil-bars"></i>
            </a>
            <div class="search-bar p-0 d-none d-md-block ms-2">
                <div id="search" class="menu-search mb-0">
                    <form role="search" method="get" id="searchform" class="searchform">
                        <div>
                            <input type="text" class="form-control border rounded" name="s" id="s"
                                placeholder="Search Keywords...">
                            <input type="submit" id="searchsubmit" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <ul class="list-unstyled mb-0">
            <li class="list-inline-item mb-0 ms-1">
                <div class="dropdown dropdown-primary">
                    <span class="dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <a href="javascript:void(0)" class="ms-2">
                            <span class="text-muted">Halo, <strong>{{ Auth::user()->first_name }}</strong></span>
                            <i class="uil uil-angle-down ms-1 fs-5 dropdown-arrow"></i>
                        </a>
                    </span>
                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3"
                        style="min-width: 200px;">
                        <a class="dropdown-item text-dark" href="{{ route('home') }}"><span
                                class="mb-0 d-inline-block me-1"><i
                                    class="mdi mdi-home-variant-outline fs-5"></i></span>
                            Landing Page</a>
                        <div class="dropdown-item border-top"></div>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="dropdown-item"><span class="mb-0 d-inline-block me-1"><i
                                        class="mdi mdi-logout fs-5"></i></span>
                                Logout</a></button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
