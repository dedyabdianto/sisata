<header id="masthead" class="site-header header-primary">
    <!-- header html start -->
    <div class="top-header">
       <div class="container">
          <div class="row">
             <div class="col-lg-8 d-none d-lg-block">
                <div class="header-contact-info">
                   <ul>
                      <li>
                         <a href="#"><i class="fas fa-phone-alt"></i>{{$home->tlp}}</a>
                      </li>
                      <li>
                         <a href="mailto:info@Travel.com"><i class="fas fa-envelope"></i>{{$home->email}}</a>
                      </li>
                      <li>
                         <i class="fas fa-map-marker-alt"></i>{{$home->alamat}}
                      </li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                <div class="header-social social-links">
                   <ul>
                      <li><a href="{{$home->link_fb}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                      <li><a href="{{$home->link_twt}}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="{{$home->link_ig}}"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                      <li><a href="{{$home->link_wa}}"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                   </ul>
                </div>
                <div class="header-search-icon">
                   <button class="search-icon">
                      <i class="fas fa-search"></i>
                   </button>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="bottom-header">
       <div class="container d-flex justify-content-between align-items-center">
          <div class="site-identity">
             <h1 class="site-title">
                <a href="/">
                   <img style="height: 100px;width: 100px;margin-right: 50px;" class="white-logo" src="{{ asset ('pariwisata/assets/images/logo-papsel2.png') }}" alt="logo">
                   <img style="height: 60px;width: 60px;margin-right: 50px;" class="black-logo" src="{{ asset ('pariwisata/assets/images/logo-papsel2.png') }}" alt="logo">
                </a>
             </h1>
          </div>
          <div class="main-navigation d-none d-lg-block">
             <nav id="navigation" class="navigation">
                <ul>
                   <li class="menu-item-has-children">
                      <a href="/">Beranda</a>
                      <ul>
                         <li><a href="profilinstansi">Profil Instansi</a></li>
                         <li><a href="profilpimpinan">Profil Pimpinan</a></li>
                         <li><a href="visimisi">Visi Misi</a></li>
                         <li><a href="standarpelayanan">Standar Pelayanan</a></li>
                         <li><a href="sambutandinas">Sambutan Kepala Dinas</a></li>
                         <li><a href="/menu-informasi">Informasi Terbaru</a></li>
                         <li><a href="pengumuman">Pengumuman</a></li>
                         <li><a href="polingstatistik">Poling dan Statistik Pengunjung</a></li>
                   
                      </ul>
                   </li>
                   <li class="menu-item-has-children">
                      <a href="#">Informasi</a>
                      <ul>
                         <li><a href="berita">Berita</a></li>
                         <li><a href="events">Events</a></li>
                         <li><a href="desawisata">Desa Wisata</a></li>
                         <li><a href="dayatarikwisata">Daya Tarik Wisata</a></li>
                         <li><a href="industripariwisata">Industri Pariwisata</a></li>
                         <li><a href="datakunjungan">Data Kunjungan Wisatawan</a></li>
                         <li><a href="perjanjiankerja">Perjanjian Kerja Sama</a></li>
                         <li><a href="agenda">Agenda</a></li>
                         <li><a href="datasakip">Data Sakip</a></li>
                         <li><a href="lra">Laporan Realisasi Anggaran (LRA)</a></li>
                      </ul>
                   </li>
                   <li class="menu-item-has-children">
                      <a href="#">Media</a>
                      <ul>
                         <li><a href="foto">Foto</a></li>
                         <li><a href="video">Video</a></li>
                         <li><a href="download">Download Data</a></li>
                      </ul>
                   </li>
                   <li class="menu-item-has-children">
                      <a href="#">Kepatuhan Layanan Publik</a>
                      <ul>
                         <li><a href="profilpenyelenggara">Profil Penyelenggara</a></li>
                         <li><a href="maklumatpelayanan">Maklumat Pelayanan</a></li>
                         <li><a href="mottopelayanan">Motto Pelayanan</a></li>
                         <li><a href="hasilskm">Hasil SKM</a></li>
                         <li><a href="strukturorganisasi">Struktur Organisasi</a></li>
                         <li><a href="alurpermohonaninformasi">Alur Permohonan Informasi</a></li>
                         <li><a href="ppid">PPID</a></li>
                      
                      </ul>
                   </li>
                   
                </ul>
             </nav>
          </div>
          <div class="header-btn">
             <a href="/admin/dashboard" class="button-primary">Dashboard</a>
          </div>
       </div>
    </div>
    <div class="mobile-menu-container"></div>
 </header>