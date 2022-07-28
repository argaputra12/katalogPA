<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text">D3 Sistem Informasi</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    @if (auth()->user() && auth()->user()->role_id == 1)
    <li class="nav-item">
        <a class="nav-link" href="/daftarHKI">
            Daftar HKI
        </a>
    </li>
    @elseif(auth()->user() && auth()->user()->role_id == 2)
    <li class="nav-item ">
        <a class="nav-link " href="/">
            Home
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " href="/dashboard/prediksi">
            Prediksi
        </a>
    </li>

    <li class="nav-item ">
        <a class="nav-link " href="/dashboard/laporan">
            Laporan
        </a>
    </li>
    @elseif(auth()->user() && auth()->user()->role_id == 3)
    <li class="nav-item ">
        <a class="nav-link " href="/dashboard/laporan">
            lalala
        </a>
    </li>
    @elseif(auth()->user() && auth()->user()->role_id == 4)
    <li class="nav-item">
        <a class="nav-link icofont-table" href="/pembimbing">
            Daftar Pengusul HKI
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link icofont-table" href="/admin/katalog">
            Katalog
        </a>
    </li>
    @endif
    {{-- login --}}
    <li class="nav-item">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="nav-link bg-primary br-0">
                Logout <i data-feather="log-out"></i></button>
        </form>
    </li>


</ul>
