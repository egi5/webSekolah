<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin Web SMK YP 17 Kota Blitar</div>
        </a>

        <!-- Divider -->
        {{-- <hr class="sidebar-divider my-0"> --}}

        <!-- Nav Item - Dashboard -->
        {{-- <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li> --}}

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading" style="font-size:1em; padding-bottom:5pt;">
            Content
        </div>
        <br>
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="/artikel">
                <i class="fas fa-newspaper"></i>
                <span>Kegiatan</span></a>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="/adminPengumuman">
                <i class="fas fa-bullhorn"></i>
                <span>Pengumuman</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-folder"></i>
                <span>Profil Jurusan</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Jurusan:</h6>
                    <a class="collapse-item" href="/profileTKR">Teknik Kendaraan Ringan</a>
                    <a class="collapse-item" href="/profileTBSM">Teknik Bisnis Sepeda Motor</a>
                    <a class="collapse-item" href="/profileTKJ">Teknik Komputer Jaringan</a>
                    <a class="collapse-item" href="/profileTE">Teknik Elektro</a>
                    <a class="collapse-item" href="/profileDKV">Desain Komunikasi Visual</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        {{-- <hr class="sidebar-divider"> --}}

        <!-- Heading -->
        {{-- <div class="sidebar-heading">
            Menu
        </div> --}}

        <!-- Nav Item - Tentang-->
        <li class="nav-item">
            <a class="nav-link" href="/adminTentang">
                <i class="fas fa-info-circle"></i>
                <span>Tentang</span>
            </a>
        </li>
{{-- 
        <li class="nav-item">
            <a class="nav-link" href="/adminJurusan">
                <i class="fas fa-fw fa-table"></i>
                <span>Jurusan</span>
            </a>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link" href="/adminPendaftaran">
                <i class="fas fa-fw fa-table"></i>
                <span>Info Pendaftaran</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">