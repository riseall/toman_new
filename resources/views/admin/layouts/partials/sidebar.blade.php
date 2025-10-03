<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('images/logo/logoPHwht.png') }}" height="40" class="logo-light-mode" alt="">
                <img src="{{ asset('images/logo/logoPH.png') }}" height="40" class="logo-dark-mode" alt="">
                <span class="sidebar-colored">
                    <img src="{{ asset('images/logo/logoPHwht.png') }}" height="40" alt="">
                </span>
            </a>
        </div>

        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('admin.dashboard') }}"><i class="uil uil-estate me-2"></i>Dashboard</a>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="mdi mdi-database-outline me-2"></i>Master Data</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('user.index') }}">User</a></li>
                        <li><a href="{{ route('company.index') }}">Company</a></li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="mdi mdi-microscope me-2"></i>Layanan</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('fasilitas.index') }}">Fasilitas Produksi</a></li>
                        <li><a href="{{ route('product.index') }}">Produk</a></li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="mdi mdi-flask-plus me-2"></i>Permintaan</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('companies.index') }}">Toll In</a></li>
                        <li><a href="{{ route('kalibrasi.index') }}">Kalibrasi</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{ route('pesan.index') }}"><i class="mdi mdi-message-text-outline me-2"></i>Pesan</a>
            </li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
</nav>
