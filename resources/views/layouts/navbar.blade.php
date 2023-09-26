<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="menuHome/images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-host">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ ($title==="home") ? 'active' :'' }}"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item {{ ($title==="artikel") ? 'active' :'' }}"><a class="nav-link" href="/kegiatan">Kegiatan</a></li>
                    <li class="nav-item {{ ($title==="pengumuman") ? 'active' :'' }}"><a class="nav-link" href="/pengumuman">Pengumuman</a></li>
                    <li class="nav-item dropdown {{ ($title==="tkr"|| $title==="tkj" || $title==="tbsm"|| $title==="elektro"|| $title==="multimedia") ? 'active' :'' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Jurusan </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="/tkr">Teknik Kendaraan Ringan </a>
                            <a class="dropdown-item" href="/tbsm">Teknik Bisnis Sepeda Motor </a>
                            <a class="dropdown-item" href="/tkj">Teknik Komputer Jaringan </a>
                            <a class="dropdown-item" href="/elektro">Teknik Elektro </a>
                            <a class="dropdown-item" href="/multimedia">Multimedia </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ ($title==="pengajar"|| $title==="about") ? 'active' :'' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Tentang </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="/pengajar">Profil Guru</a>
                            <a class="dropdown-item" href="/about">Profil Sekolah</a>
                        </div>
                    </li>
                    <li class="nav-item {{ ($title==="Pendaftaran Siswa Baru") ? 'active' :'' }}"><a class="nav-link" href="/pendaftaran">Informasi Pendaftaran</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->