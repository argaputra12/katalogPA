    <header class="shadow">
        <nav class="navbar navbar-expand-lg navigation gray-bg" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/d3logo.png" alt="home" class="img-fluid" style="height: 50px;">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarmain" style="padding: 0;">
                    <ul class="navbar-nav ml-auto">
                        @auth
                        <li class="nav-item active">
                            <a class="nav-link" href="/home">Beranda</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/katalog">Katalog</a>
                        @if (auth()->user() && auth()->user()->role_id == 4)
                        <li class="nav-item"><a class="nav-link" href="/pembimbing">Daftar Pengusul HKI</a>
                        </li>
                        @endif
                        @if (auth()->user() && auth()->user()->role_id == 1)
                        <li class="nav-item"><a class="nav-link" href="/daftarHKI">Daftar HKI</a>
                        </li>
                        @endif
                        @if (auth()->user() && auth()->user()->role_id == 2)
                        <li class="nav-item"><a class="nav-link" href="/pembimbing/hki">HKI Mahasiswa</a>
                        </li>
                        @endif
                        @if (auth()->user() && auth()->user()->role_id == 3)
                        <li class="nav-item"><a class="nav-link" href="/pembimbing/hki">HKI Mahasiswa</a>
                        </li>
                        @endif
                        <li class="nav-item"><a class="nav-link" href="/about">Tentang Kami</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a>
                        </li>
                        @else
                        <li class="nav-item active">
                            <a class="nav-link" href="/home">Beranda</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/katalog">Katalog</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/login">Daftar HKI</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/about">Tentang Kami</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                        @endauth


                        {{-- <li class="nav-item"><a class="nav-link" href="/login">Login</a></li> --}}

                    </ul>
                </div>
            </div>
        </nav>
    </header>
