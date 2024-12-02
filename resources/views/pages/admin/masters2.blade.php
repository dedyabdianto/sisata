<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title ?? 'PARIWISATA PAPUA SELATAN' }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/pariwisata/admin/assets2/img/logo-umkm.png" rel="icon">
    <link href="/pariwisata/admin/assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/pariwisata/admin/assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/pariwisata/admin/assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/pariwisata/admin/assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/pariwisata/admin/assets2/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/pariwisata/admin/assets2/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/pariwisata/admin/assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
    {{-- <link href="/pariwisata/admin/assets2/vendor/simple-datatables/style.css" rel="stylesheet"> --}}
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="/pariwisata/admin/assets2/css/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img style="width: 40px; height: 80px; " src="{{ asset('pariwisata/assets/images/logo-papsel2.png') }}"
                    alt="">
                <span class="d-none d-lg-block">Pariwisata Provinsi Papua Selatan</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        {{-- <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar --> --}}

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{Storage::url(Auth::user()->foto)}}" alt="Profile"
                            class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{Auth::user()->name}}</h6>
                            <span>{{Auth::user()->role}}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a href="#" class="dropdown-item d-flex align-items-center"
                                onclick="event.preventDefault(); document.getElementById('post-form').submit();">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span></a>

                            <form id="post-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                @csrf
                                <!-- Tambahkan input hidden jika diperlukan -->
                                <input type="hidden" name="key" value="value">
                            </form>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a wire:navigate class="nav-link {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }} collapsed"
                    href="/admin/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Master</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/admin/kategori-informasi" @if (Route::currentRouteNamed('kategori-informasi')) class="active" @endif>
                            <i class="bi bi-circle"></i><span>Kategori Informasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/kategori-wisata" @if (Route::currentRouteNamed('kategori-wisata')) class="active" @endif>
                            <i class="bi bi-circle"></i><span>Kategori Wisata</span>
                        </a>
                    </li>

                    <li>
                        <a href="/kategori-file" @if (Route::currentRouteNamed('kategori-file')) class="active" @endif>
                            <i class="bi bi-circle"></i><span>Kategori File</span>
                        </a>
                    </li>

                    <li>
                        <a href="/admin/jabatan" @if (Route::currentRouteNamed('jabatan')) class="active" @endif>
                            <i class="bi bi-circle"></i><span>Kategori Jabatan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/pagol" @if (Route::currentRouteNamed('pagol')) class="active" @endif>
                            <i class="bi bi-circle"></i><span>Kategori Pangkat Golongan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/user" @if (Route::currentRouteNamed('user')) class="active" @endif>
                            <i class="bi bi-circle"></i><span>Kelola User</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item" class="active">
                <a class="nav-link {{ Request::is('pejabat') ? 'active' : '' }}" href="{{ url('/admin/pejabat') }}">
                    <i class="bi bi-boxes"></i>
                    <span>Kelola Data Pejabat</span>
                </a>
            </li>
            <li class="nav-item" class="active">
                <a class="nav-link {{ Request::is('informasi') ? 'active' : '' }}" href="{{ url('/admin/informasi') }}">
                    <i class="bi bi-boxes"></i>
                    <span>Kelola Informasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('profil*') ? 'active' : '' }}" href="/admin/profil">
                    <i class="bi bi-boxes"></i>
                    <span>Kelola Profil Dinas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('wisata*') ? 'active' : '' }}" href="/admin/wisata">
                    <i class="bi bi-receipt-cutoff"></i>
                    <span>Kelola Wisata</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('file*') ? 'active' : '' }}" href="/file">
                    <i class="bi bi-receipt-cutoff"></i>
                    <span>Kelola File</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('galeri*') ? 'active' : '' }}" href="/admin/galeri">
                    <i class="bi bi-receipt-cutoff"></i>
                    <span>Kelola Galeri</span>
                </a>
            </li>
            <li class="nav-item">
                <a wire:navigate class="nav-link {{ Request::is('wisata*') ? 'active' : '' }}" href="/admin/settings">
                    <i class="bi bi-gear"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{ $title ?? 'Dashboard' }}</h1>
            <nav>
                <ol class="breadcrumb">
                    @if (url()->current() == route('dashboard'))
                        <li class="breadcrumb-item"><a wire:navigate href="/dashboard">Dashboard</a></li>
                    @else
                        <li class="breadcrumb-item"><a wire:navigate href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">{{ $title ?? 'Dashboard' }}</li>
                    @endif
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Dinas Pariwisata Provinsi Papua Selatan</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/pariwisata/admin/assets2/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/pariwisata/admin/assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/pariwisata/admin/assets2/vendor/chart.js/chart.umd.js"></script>
    <script src="/pariwisata/admin/assets2/vendor/echarts/echarts.min.js"></script>
    <script src="/pariwisata/admin/assets2/vendor/quill/quill.js"></script>
    {{-- <script src="/pariwisata/admin/assets2/vendor/simple-datatables/simple-datatables.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="/pariwisata/admin/assets2/vendor/tinymce/tinymce.min.js"></script>
    <script src="/pariwisata/admin/assets2/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/pariwisata/admin/assets2/js/main.js"></script>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'Oke',
                    confirmButtonColor: "#008000"
                });
            });
        </script>
    @elseif(session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Error!',
                    text: '{{ session('error') }}',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: "#911911"
                });
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Error!',
                    html: '{!! implode('<br>', $errors->all()) !!}',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: "#911911"
                });
            });
        </script>
    @endif


    @stack('js')

</body>

</html>
