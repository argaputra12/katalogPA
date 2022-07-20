    <header class="shadow">
        <nav class="navbar navbar-expand-lg navigation gray-bg" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/d3logo.png" alt="home" class="img-fluid">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        @auth
                        <li class="nav-item active">
                            <a class="nav-link" href="/home">Beranda</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/katalog">Katalog</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/daftarHKI">Daftar HKI</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/about">Tentang Kami</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/dashboard">admin</a>
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
