@extends('layouts.app')
@section('title', 'Inventaris Sekolah')
@section('content')

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
            <div class="header-content">
                <h1 class="header-title">Aplikasi Monitoring</h1>
                <h1 class="header-title">Inventaris Sekolah</h1>
                <h6 class="header-mono" >SIKC 3B | Politeknik Negeri Banjarmasin</h6>
            </div>
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Inventaris Sekolah</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="assets/imgs/avatar.png" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">Teknik Elektro</h5>
                        <div class="brand-subtitle">D4 Sistem Informasi Kota Cerdas</div>
                    </li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            @foreach ($profils as $profil)
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Profil {{ $profil->nama }}</h3>
                <span class="line mb-5"></span>
                <ul class="info list-unstyled">
                    <li><span>Nama</span>: {{ $profil->nama }}</li>
                    <li><span>NIM</span>: {{ $profil->nim }}</li>
                    <li><span>Tanggal Lahir</span>: {{ $profil->tgl_lahir }}</li>
                    <li><span>Email</span>: {{ $profil->email }}</li>
                    <li><span>No.HP</span>: {{ $profil->no_hp }}</li>
                    <li><span>GitHub</span>: {{ $profil->github }}</li>
                    <li><span>Alamat</span>: {{ $profil->alamat }}</li>
                </ul>
            </div>
            @endforeach           
            </div>
        </div>
        <section class="section" id="resume">
            <div class="container">
                <h2 class="mb-5"><span class="text-danger">Inventaris</span> Sekolah</h2>
            <div class="container-fluid">
                <div id="about" class="row about-section">
                @foreach ($barangs as $barang)
                <div class="col-lg-4 about-card">
                    <h3 class="font-weight-light">Barang {{ $barang->nama_barang }}</h3>
                    <span class="line mb-5"></span>
                    <ul class="info list-unstyled">
                        <li><span>Nama</span>: {{ $barang->nama_barang }}</li>
                        <li><span>NIM</span>: {{ $barang->id_kategori }}</li>
                        <li><span>Tanggal Lahir</span>: {{ $barang->spesifikasi }}</li>
                        <li><span>Email</span>: {{ $barang->kondisi }}</li>
                        <li><span>No.HP</span>: {{ $barang->tanggal_pengadaan }}</li>
                        <li><span>GitHub</span>: {{ $barang->jumlah }}</li>
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="container-fluid">
                <div id="about" class="row about-section">
                @foreach ($kategoriBarangs as $kategori)
                <div class="col-lg-4 about-card">
                    <h3 class="font-weight-light">Kategori Barang {{ $kategori->nama_kategori }}</h3>
                    <span class="line mb-5"></span>
                    <ul class="info list-unstyled">
                        <li><span>Nama Kategori</span>: {{ $kategori->nama_kategori }}</li>
                        <li><span>Deskripsi</span>: {{ $kategori->deskripsi }}</li>
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="container-fluid">
                <div id="about" class="row about-section">
                @foreach ($sekolahs as $sekolah)
                <div class="col-lg-4 about-card">
                    <h3 class="font-weight-light">Sekolah {{ $sekolah->nama_sekolah }}</h3>
                    <span class="line mb-5"></span>
                    <ul class="info list-unstyled">
                        <li><span>Nama Sekolah</span>: {{ $sekolah->nama_sekolah }}</li>
                        <li><span>Alamat</span>: {{ $sekolah->alamat }}</li>
                        <li><span>Telepon</span>: {{ $sekolah->telepon }}</li>
                        <li><span>Email</span>: {{ $sekolah->email }}</li>
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="container-fluid">
                <div id="about" class="row about-section">
                @foreach ($stoks as $stok)
                <div class="col-lg-4 about-card">
                    <h3 class="font-weight-light">Stok {{ $stok->id_sekolah }}</h3>
                    <span class="line mb-5"></span>
                    <ul class="info list-unstyled">
                        <li><span>Sekolah</span>: {{ $stok->id_sekolah }}</li>
                        <li><span>Barang</span>: {{ $stok->id_barang }}</li>
                        <li><span>Jumlah Stok</span>: {{ $stok->jumlah_stok }}</li>
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="container-fluid">
                <div id="about" class="row about-section">
                @foreach ($transaksis as $transaksi)
                <div class="col-lg-4 about-card">
                    <h3 class="font-weight-light">Transaksi {{ $transaksi->id_sekolah }}</h3>
                    <span class="line mb-5"></span>
                    <ul class="info list-unstyled">
                        <li><span>Sekolah</span>: {{ $transaksi->id_sekolah }}</li>
                        <li><span>Barang</span>: {{ $transaksi->id_barang }}</li>
                        <li><span>Tanggal Transaksi</span>: {{ $transaksi->tanggal_transaksi }}</li>
                        <li><span>Jumlah</span>: {{ $transaksi->jumlah }}</li>
                        <li><span>Jenis Transaksi</span>: {{ $transaksi->jenis_transaksi }}</li>
                        <li><span>Keterangan</span>: {{ $transaksi->keterangan }}</li>
                    </ul>
                </div>
                @endforeach
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>           
            <footer class="footer py-3">
                <div class="container text-center">
                    <p class="small mb-0 text-light">
                        &copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">DevCRUD</span></a> 
                    </p>
                </div>
            </footer>
            </div>
            @endsection

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>
    
    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="assets/js/johndoe.js"></script>

</body>
</html