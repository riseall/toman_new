<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/toman.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Toman') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Memberi kelas untuk semua field spesifik agar mudah di-handle JS */
        .specific-fields {
            display: none;
            /* Sembunyikan semua secara default */
            border: 1px solid #ddd;
            padding: 1.5rem;
            margin-top: 1rem;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .req-label::after {
            content: '*';
            color: red;
            font-size: .9em;
            font-weight: normal;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Toman') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script>
        // Script untuk menangani perubahan pada option select pilihan Permintaan Toll
        document.addEventListener('DOMContentLoaded', function() {

            // mengambil elemen yang diperlukan dari DOM
            const reqNameSelect = document.getElementById('req_name');
            const dynamicContainer = document.getElementById('dynamic-form');
            const specificField = document.querySelectorAll('.form-specific');
            // Persyaratan khusus parental
            const parentalSpecific = document.getElementById('parental-specific');
            // Karakteristik kemasan primer
            const primerTabKapSpecific = document.getElementById('primer-tablet-kapsul');
            const primerLainSpecific = document.getElementById('primer-lainnya');
            // Karakteristik Kemasan Sekunder
            const sekunderParental = document.getElementById('skndr-parental');
            const sekunderLain = document.getElementById('skndr-lainnya');
            // Privacy Policy
            const privacyPolicy = document.getElementById('privacy-policy');
            const submit = document.getElementById('submit');

            submit.disabled = !privacyPolicy.checked;

            privacyPolicy.addEventListener('change', function() {
                submit.disabled = !this.checked;
            });

            function clearFormInputs() {
                const input = dynamicContainer.querySelectorAll('input');
                input.forEach(item => {
                    if (item.type === 'checkbox' || item.type === 'radio') {
                        item.checked = false;
                    } else {
                        item.value = '';
                    }
                });
            }

            // console.log(specificField);
            // Menambahkan 'event listener' yang akan berjalan setiap kali pilihan di dropdown berubah
            reqNameSelect.addEventListener('change', function() {

                // Mengambil nilai (value) dari option yang dipilih
                const selectedValue = this.value;

                clearFormInputs();

                // mereset tampilan jika pengguna mengganti pilihan
                specificField.forEach(group => {
                    group.style.display = 'none';
                });
                parentalSpecific.style.display = 'none';
                primerTabKapSpecific.style.display = 'none';
                primerLainSpecific.style.display = 'none';
                sekunderParental.style.display = 'none';
                sekunderLain.style.display = 'none';

                // Cek apakah pengguna sudah memilih jenis permintaan
                if (selectedValue) {
                    // Jika sudah, tampilkan kontainer utama untuk field umum dan spesifik
                    dynamicContainer.style.display = 'block';

                    // Buat ID target berdasarkan nilai yang dipilih
                    const targetFieldId = 'form-' + selectedValue.toLowerCase();
                    const targetGroup = document.getElementById(targetFieldId);

                    // Jika elemen dengan ID tersebut ditemukan, tampilkan
                    if (targetGroup) {
                        targetGroup.style.display = 'block';
                    }

                    // Jika pilihan Parental
                    if (selectedValue === 'Parental') {
                        parentalSpecific.style.display = 'block';
                    }

                    // Kemasaan Primer
                    if (selectedValue === 'Tablet' || selectedValue === 'Kapsul') {
                        primerTabKapSpecific.style.display = 'block';
                    } else {
                        primerLainSpecific.style.display = 'block';
                    }

                    // Kemasan Sekunder
                    if (selectedValue === 'Parental') {
                        sekunderParental.style.display = 'block';
                    } else {
                        sekunderLain.style.display = 'block';
                    }

                } else {
                    // Jika pengguna memilih "Pilih Jenis Permintaan" (value=""), sembunyikan kontainer
                    dynamicContainer.style.display = 'none';
                }
            })
        });
    </script>
</body>

</html>
