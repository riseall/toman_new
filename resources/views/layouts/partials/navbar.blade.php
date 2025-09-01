    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo d-flex align-items-center" href="{{ route('home') }}">
                <span class="logo-light-mode">
                    <img src="{{ asset('images/logo/logoPH.png') }}" class="l-dark" height="40" alt="">
                    <img src="{{ asset('images/logo/logoPHwht.png') }}" class="l-light" height="40" alt="">
                </span>
                <div>
                    <img src="{{ asset('images/logo/logoPHwht.png') }}" height="40" class="logo-dark-mode"
                        alt="">
                </div>
            </a>

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <!--Login button Start-->
            <ul class="buy-button list-inline mb-0">
                <li class="list-inline-item mb-0 pe-1">
                    <div class="dropdown">
                        <a type="button" class="dropdown-toggle p-sm-1 show" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                            <i class="uil uil-search text-white title-dark btn-icon-light fs-5 align-middle"></i>
                            <i class="uil uil-search text-dark btn-icon-dark fs-5 align-middle"></i>
                            {{-- <i class="uil uil-search text-dark fs-5 align-middle"></i> --}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 p-0"
                            style="width: 300px; position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 40px);"
                            data-popper-placement="bottom-end">
                            <div class="search-bar">
                                <div id="itemSearch" class="menu-search mb-0">
                                    <form role="search" method="get" id="searchItemform" class="searchform">
                                        <input type="text" class="form-control border rounded" name="s"
                                            id="searchItem" placeholder="Search...">
                                        <input type="submit" id="searchItemsubmit" value="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @guest
                    <li class="list-inline-item mb-0 ps-1">
                        <a onclick="window.location.href='{{ route('login') }}'" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <div class="login-btn-primary"><span class="btn btn-pills btn-outline-primary">Masuk</span>
                            </div>
                            <div class="login-btn-light"><span class="btn btn-pills btn-outline btn-light">Masuk</span>
                            </div>
                        </a>
                    </li>
                @endguest
                @auth
                    <li class="list-inline-item mb-0 ps-1">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle p-sm-1 show text-uppercase fs-7 fw-bold"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="text-white title-dark btn-icon-light cursor-pointer">
                                    {{ Auth::user()->first_name }} {{-- Auth::user()->last_name --}}
                                    <i class="uil uil-angle-down ms-1 fs-5 dropdown-arrow"></i>
                                </span>
                                <span class="text-dark btn-icon-dark cursor-pointer">
                                    {{ Auth::user()->first_name }} {{-- Auth::user()->last_name --}}
                                    <i class="uil uil-angle-down ms-1 fs-5 dropdown-arrow"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end bg-white shadow rounded border-0 mt-4 fs-7">
                                <li>
                                    <a href="#" class="dropdown-item">Profil</a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endauth

            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light">
                    <li><a href="{{ route('home') }}" class="sub-menu-item">Beranda</a></li>

                    <li class="has-submenu parent-menu-item">
                        <a href="javascript:void(0)">Layanan</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="{{ route('toll_murni') }}" class="sub-menu-item">Toll Murni</a></li>
                            <li><a href="{{ route('toll_beli') }}" class="sub-menu-item">Toll Beli</a></li>
                            <li><a href="{{ route('kalibrasi') }}" class="sub-menu-item">Kalibrasi dan lain-lain</a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="{{ route('portofolio.index') }}" class="sub-menu-item">Portofolio</a></li>

                    @auth
                        <li><a href="{{ route('permintaan.index') }}" class="sub-menu-item">Permintaan</a></li>
                        <li><a href="#" class="sub-menu-item">Monitoring</a></li>
                    @endauth

                    <li><a href="{{ route('kontak.index') }}" class="sub-menu-item">Kontak</a></li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->

    <script>
        document.querySelectorAll('.dropdown').forEach(drop => {
            drop.addEventListener('show.bs.dropdown', function() {
                this.querySelector('.dropdown-arrow').classList.add('rotate-180');
            });
            drop.addEventListener('hide.bs.dropdown', function() {
                this.querySelector('.dropdown-arrow').classList.remove('rotate-180');
            });
        });
    </script>
