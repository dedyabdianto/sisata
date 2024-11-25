@extends('layouts.frontend.master')
@section('content')
<main id="content" class="site-main">
            <section class="home-slider-section">
               <div class="home-slider">
                  <div class="home-banner-items">
                     <div class="banner-inner-wrap" style="background-image: url({{ asset ('pariwisata/assets/images/merauke.jpg') }});"></div>
                        <div class="banner-content-wrap">
                           <div class="container">
                              <div class="banner-content text-center">
                                 <h2 class="banner-title">DINAS PARIWISATA PROVINSI PAPUA SELATAN</h2>
                                 <p>"Maju Negeriku: Keindahan Papua Selatan yang Tak Tersentuh"</p>
                                 <a href="about.html" class="button-primary">Tentang Kami</a>
                              </div>
                           </div>
                        </div>
                     <div class="overlay"></div>
                  </div>
                  <div class="home-banner-items">
                     <div class="banner-inner-wrap" style="background-image: url({{ asset ('pariwisata/assets/images/Tugu.jpg') }});"></div>
                        <div class="banner-content-wrap">
                           <div class="container">
                              <div class="banner-content text-center">
                                 <h2 class="banner-title">IZAKOD BEKAI IZAKOD KAI</h2>
                                 <p>"SATU HATI SATU TUJUAN"</p>
                                 <a href="#" class="button-primary">CONTINUE READING</a>
                              </div>
                           </div>
                        </div>
                     <div class="overlay"></div>
                  </div>
               </div>
            </section>
            <!-- slider html start -->
            <!-- Home search field html start -->
            <div class="trip-search-section shape-search-section">
               <div class="slider-shape"></div>
               <div class="container">
                  <div class="trip-search-inner white-bg d-flex">
                     <div class="input-group">
                        <label> Tujuan Wisata </label>
                        <input type="text" name="s" placeholder="Enter Destination">
                     </div>
                     <div class="input-group">
                        <label> Nomor Paket </label>
                        <input type="text" name="s" placeholder="No.of People">
                     </div>
                     <div class="input-group width-col-3">
                        <label> Check-in Date </label>
                        <i class="far fa-calendar"></i>
                        <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                     </div>
                     <div class="input-group width-col-3">
                        <label> Check-out Date </label>
                        <i class="far fa-calendar"></i>
                        <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                     </div>
                     <div class="input-group width-col-3">
                        <label class="screen-reader-text"> Search </label>
                        <input type="submit" name="travel-search" value="SEARCH NOW">
                     </div>
                  </div>
               </div>
            </div>
            <!-- search search field html end -->
            <section class="destination-section">
               <div class="container">
                  <div class="section-heading">
                     <div class="row align-items-end">
                        <div class="col-lg-7">
                           <h5 class="dash-style">WISATA POPULER</h5>
                           <h2>TUJUAN WISATA UTAMA</h2>
                        </div>
                        <div class="col-lg-5">
                           <div class="section-disc">
                            Terletak di ujung timur Indonesia, Merauke memiliki berbagai destinasi wisata yang menakjubkan dan menawarkan pengalaman unik bagi para pengunjung. Berikut adalah beberapa kata-kata mengenai wisata utama di Merauke:
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="destination-inner destination-three-column">
                     <div class="row">
                        <div class="col-lg-7">
                           <div class="row">
                              <div class="col-sm-8">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="{{ asset ('pariwisata/assets/images/0km1.jpeg') }}" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">SOTA</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">NOL KM INDONESIA TIMUR (PERBATASAN RI-PNG)</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 4">
                                          <span style="width: 53%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-8">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="{{ asset ('pariwisata/assets/images/tamanwasur.jpg') }}" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">WASUR</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">TAMAN NASIONAL WASUR (BOMI SAI)</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 100%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <div class="row">
                              <div class="col-md-6 col-xl-12">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="{{ asset ('pariwisata/assets/images/1000musamus.jpg') }}" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">SALOR</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">WISATA ALAM SERIBU MUSAMUS</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 100%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-xl-12">
                                 <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                       <img src="{{ asset ('pariwisata/assets/images/tablem.jpg') }}" alt="">
                                    </figure>
                                    <div class="meta-cat bg-meta-cat">
                                       <a href="#">JAGEBOB</a>
                                    </div>
                                    <div class="desti-content">
                                       <h3>
                                          <a href="#">TABLEM COUNTRY</a>
                                       </h3>
                                       <div class="rating-start" title="Rated 5 out of 4">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="btn-wrap text-center">
                        <a href="destination.html" class="button-primary">LEBIH BANYAK -></a>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Home packages section html start -->
            <section class="package-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">JELAJAHI WISATA PAPUA SELATAN</h5>
                           <h2>BERITA TERBARU</h2>
                           <p>Temukan keajaiban alam dan keanekaragaman satwa liar yang luar biasa di jantung Papua. Berjalan-jalanlah di alam liar dan saksikan keindahan flora dan fauna endemik yang hanya bisa Anda temukan di sini.

                              Nikmati Petualangan Tak Terlupakan di Ujung Timur Indonesia dengan Paket Trip Wisata Merauke!</p>
                        </div>
                     </div>
                  </div>
                  <div class="package-inner">
                     <div class="row">
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="{{ asset ('pariwisata/assets/images/lampusatu1.jpg') }}" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>Rp100k</span> / per orang
                                 </h6>
                              </div>
                              <div class="package-content-wrap">

                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          1H/1M
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 5
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          Lampu Satu
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">Pemandangan Matahari Terbenam di Ufuk Timur Indonesia</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(25 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div>
                                    <p>Rasakan ketenangan dan keindahan pantai pasir putih dengan air laut yang jernih. Nikmati matahari terbenam yang memukau dan nikmati momen relaksasi yang sempurna di pesisir selatan Papua.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="{{ asset ('pariwisata/assets/images/habe.jpg') }}" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>Rp500k </span> / per orang
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          3H/2M
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 8
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          Pulau Habe
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">Rasakan keindahan alam pulau habe yang unik dan menarik</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(17 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 100%"></span>
                                       </div>
                                    </div>
                                    <p>Pulau eksotis yang menawarkan pengalaman snorkeling yang tak terlupakan dengan pemandangan bawah laut yang mempesona. Jangan lewatkan kesempatan untuk mengabadikan momen indah Anda di surga tropis ini.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                    <img src="{{ asset ('pariwisata/assets/images/onggaya.jpg') }}" alt="">
                                 </a>
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span>Rp200k </span> / per orang
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          2D/1M
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: 6
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          Pantai Onggaya
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">Liburan dan menikmati keindahan pantai onggaya</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(22 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 80%"></span>
                                       </div>
                                    </div>
                                    <p>Nikmati waktu santai di tepi pantai sambil menikmati minuman segar dan hidangan lezat khas daerah. Suasana tenang dan alami Pantai Merauke akan membawa Anda menjauh dari overthingking kehidupan sehari-hari.</p>
                                    <div class="btn-wrap">
                                       <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="btn-wrap text-center">
                        <a href="tour-packages.html" class="button-primary">Lihat Semua Berita</a>
                     </div>
                  </div>
               </div>
            </section>
            <!-- packages html end -->
            <!-- Home callback section html start -->
            <section class="callback-section">
               <div class="container">
                  <div class="row no-gutters align-items-center">
                     <div class="col-lg-5">
                        <div class="callback-img" style="background-image: url({{ asset ('pariwisata/assets/images/tamanwasur.jpg') }});">
                           <div class="video-button">
                              <a id="video-container" data-video-id="IUN664s7N-c">
                                 <i class="fas fa-play"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-7">
                        <div class="callback-inner">
                           <div class="section-heading section-heading-white">
                              <h5 class="dash-style">UJUNG TIMUR INDONESIA</h5>
                              <h2>MENIKMATI. JELAJAHI. BERPETUALANG.</h2>
                              <p>
                                 "Rasakan serunya petualangan di Merauke – destinasi wisata menakjubkan yang menunggu untuk Anda jelajahi!".</p>
                           </div>
                           <div class="callback-counter-wrap">
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="{{ asset ('pariwisata/assets/images/icon1.png') }}" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">100</span>
                                    </span>
                                    <span class="counter-text">
                                       Kepuasan Pelanggan
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="{{ asset ('pariwisata/assets/images/icon2.png') }}" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">5</span>
                                    </span>
                                    <span class="counter-text">
                                       Penghargaan
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="{{ asset ('pariwisata/assets/images/icon3.png') }}" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">15</span>
                                    </span>
                                    <span class="counter-text">
                                       Sponsor
                                    </span>
                                 </div>
                              </div>
                              <div class="counter-item">
                                 <div class="counter-icon">
                                   <img src="{{ asset ('pariwisata/assets/images/icon4.png') }}" alt="">
                                 </div>
                                 <div class="counter-content">
                                    <span class="counter-no">
                                       <span class="counter">10</span>
                                    </span>
                                    <span class="counter-text">
                                       Tujuan Wisata
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="support-area">
                              <div class="support-icon">
                                 <img src="assets/images/icon5.png" alt="">
                              </div>
                              <div class="support-content">
                                 <h4>Layanan Telepon Darurat (112)</h4>
                                 <h3>
                                    <a href="#">Telepon: +62-812-4056-7890</a>
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- callback html end -->
            <!-- Home activity section html start -->
            <section class="activity-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">AKTIVITAS WISATA</h5>
                           <h2>PETUALANGAN & MENJELAJAHI</h2>
                           <p>Jelajahi keajaiban Merauke – destinasi petualangan eksotis yang penuh pesona alam dan budaya menakjubkan, siap menyambut Anda</p>
                        </div>
                     </div>
                  </div>
                  <div class="activity-inner row">
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="{{ asset ('pariwisata/assets/images/icon6.png') }}" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Petualangan</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="{{ asset ('pariwisata/assets/images/icon10.png') }}" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Lintas Alam</a>
                              </h4>
                              <p>12 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="{{ asset ('pariwisata/assets/images/icon9.png') }}" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Api Unggun</a>
                              </h4>
                              <p>7 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="{{ asset ('pariwisata/assets/images/icon8.png') }}" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Off Road</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="{{ asset ('pariwisata/assets/images/icon7.png') }}" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Camping</a>
                              </h4>
                              <p>13 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="{{ asset ('pariwisata/assets/images/icon11.png') }}" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Menjelajahi</a>
                              </h4>
                              <p>25 Destination</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- activity html end -->
            <!-- Home special section html start -->
            <section class="special-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">PENAWARAN & DISKON PERJALANAN</h5>
                           <h2>PENAWARAN PERJALANAN SPESIAL</h2>
                           <p>Jangan lewatkan diskon besar dan penawaran eksklusif untuk petualangan tak terlupakan di Merauke – pesan sekarang dan nikmati keindahan alam yang menakjubkan.</p>
                        </div>
                     </div>
                  </div>
                  <div class="special-inner">
                     <div class="row">
                        <div class="col-md-6 col-lg-4">
                           <div class="special-item">
                              <figure class="special-img">
                                 <img style="height: 400px;width: 400px;" src="{{ asset ('pariwisata/assets/images/kapsul.jpeg') }}" alt="">
                              </figure>
                              <div class="badge-dis">
                                 <span>
                                    <strong>20%</strong>
                                    off
                                 </span>
                              </div>
                              <div class="special-content">
                                 <div class="meta-cat">
                                    <a href="#">KAPSUL WAKTU</a>
                                 </div>
                                 <h3>
                                    <a href="#">Temukan sejarah dan makna cerita di Kapsul Waktu Merauke</a>
                                 </h3>
                                 <div class="package-price">
                                    Harga:
                                    <del>Rp200k</del>
                                    <ins>Rp160k</ins>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="special-item">
                              <figure class="special-img">
                                 <img style="height: 400px;width: 400px;" src="{{ asset ('pariwisata/assets/images/lotus.jpg') }}" alt="">
                              </figure>
                              <div class="badge-dis">
                                 <span>
                                    <strong>15%</strong>
                                    off
                                 </span>
                              </div>
                              <div class="special-content">
                                 <div class="meta-cat">
                                    <a href="#">LOTUS GARDEN</a>
                                 </div>
                                 <h3>
                                    <a href="#">Temukan pesona Lotus Garden di Merauke – keindahan teratai yang memukau</a>
                                 </h3>
                                 <div class="package-price">
                                    Harga:
                                    <del>Rp300k</del>
                                    <ins>Rp255k</ins>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="special-item">
                              <figure class="special-img">
                                 <img style="height: 400px;width: 400px;" src="{{ asset ('pariwisata/assets/images/biras.jpg') }}" alt="">
                              </figure>
                              <div class="badge-dis">
                                 <span>
                                    <strong>10%</strong>
                                    off
                                 </span>
                              </div>
                              <div class="special-content">
                                 <div class="meta-cat">
                                    <a href="#">BIRAS</a>
                                 </div>
                                 <h3>
                                    <a href="#">Terpesona dengan Kolam Biras di Merauke</a>
                                 </h3>
                                 <div class="package-price">
                                    Harga:
                                    <del>Rp150k</del>
                                    <ins>Rp135k</ins>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- special html end -->
            <!-- Home special section html start -->
            <section class="best-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-5">
                        <div class="section-heading">
                           <h5 class="dash-style">GALERI WISATA KAMI</h5>
                           <h2>FOTO TERBAIK YANG DIBAGIKAN WISATAWAN</h2>
                           <p>
                              Saksikan keindahan Merauke melalui galeri foto terbaik dari para wisatawan – temukan inspirasi petualangan Anda berikutnya.</p>
                        </div>
                        <figure class="gallery-img">
                           <img src="{{ asset ('pariwisata/assets/images/biras.jpg') }}" alt="">
                        </figure>
                     </div>
                     <div class="col-lg-7">
                        <div class="row">
                           <div class="col-sm-6">
                              <figure class="gallery-img">
                                 <img src="{{ asset ('pariwisata/assets/images/0km2.jpg') }}" alt="">
                              </figure>
                           </div>
                           <div class="col-sm-6">
                              <figure class="gallery-img">
                                 <img src="{{ asset ('pariwisata/assets/images/maro.jpg') }}" alt="">
                              </figure>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <figure class="gallery-img">
                                 <img src="{{ asset ('pariwisata/assets/images/tablem2.jpg') }}" alt="">
                              </figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- best html end -->
            <!-- Home client section html start -->
            <div class="client-section">
               <div class="container">
                  <div class="client-wrap client-slider secondary-bg">
                     <div class="client-item">
                        <figure>
                           <img style="height: 100px;width: 100px;" src="{{ asset ('pariwisata/assets/images/kemenkraf.png') }}" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img style="height: 100px;width: 100px;" src="{{ asset ('pariwisata/assets/images/eiger.png') }}" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img style="height: 100px;width: 100px;" src="{{ asset ('pariwisata/assets/images/wonderful.png') }}" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img style="height: 100px;width: 100px;" src="{{ asset ('pariwisata/assets/images/aqua.png') }}" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img style="height: 100px;width: 100px;" src="{{ asset ('pariwisata/assets/images/dinas.png') }}" alt="">
                        </figure>
                     </div>
                     <div class="client-item">
                        <figure>
                           <img src="{{ asset ('pariwisata/assets/images/logo2.png') }}" alt="">
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
            <!-- client html end -->
            <!-- Home subscribe section html start -->
            <section class="subscribe-section" style="background-image: url({{ asset ('pariwisata/assets/images/anasai.jpg') }});">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="section-heading section-heading-white">
                           <h5 class="dash-style">TAWARAN PAKET LIBURAN</h5>
                           <h2>SPESIAL LIBURAN DISKON 25% !</h2>
                           <h4>Daftar sekarang untuk menerima penawaran spesial menarik dan informasi tentang paket wisata terbaik, pembaruan dan diskon!!</h4>
                           <div class="newsletter-form">
                              <form>
                                 <input type="email" name="s" placeholder="Alamat Email Kamu">
                                 <input type="submit" name="signup" value="Daftar Sekarang!">
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- subscribe html end -->
            <!-- Home blog section html start -->
            <section class="blog-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">DARI BLOG KAMI</h5>
                           <h2>POSTINGAN TERBARU KAMI</h2>
                           <p>Postingan mengenai wisata-wisata terbaru yang ada di merauke</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="{{ asset ('pariwisata/assets/images/mandira.jpg') }}" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Taman Mandira</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Merauke</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">12 Juni 2024</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="{{ asset ('pariwisata/assets/images/1000musamus.jpg') }}" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">Wisata 1000 Musamus</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Merauke</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">12 Juni 2024</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="{{ asset ('pariwisata/assets/images/0km1.jpeg') }}" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">0KM Merauke-Sabang</a>
                              </h3>
                              <div class="entry-meta">
                                 <span class="byline">
                                    <a href="#">Merauke</a>
                                 </span>
                                 <span class="posted-on">
                                    <a href="#">12 Juni 2024</a>
                                 </span>
                                 <span class="comments-link">
                                    <a href="#">No Comments</a>
                                 </span>
                              </div>
                           </div>
                        </article>
                     </div>
                  </div>
               </div>
            </section>
             <!-- blog html end -->
             <!-- Home testimonial section html start -->
            <div class="testimonial-section" style="background-image: url({{ asset ('pariwisata/assets/images/img23.jpg') }});">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-10 offset-lg-1">
                        <div class="testimonial-inner testimonial-slider">
                           <div class="testimonial-item text-center">
                              <figure class="testimonial-img">
                                 <img src="{{ asset ('pariwisata/assets/images/kepaladinas.png') }}" alt="">
                              </figure>
                              <div class="testimonial-content">
                                 <p>"surga petualangan di ujung papua"</p>
                                 <cite>
                                    BENHUR RENTANDATU, SE
                                    <span class="company">Kepala Dinas Pariwisata</span>
                                 </cite>
                              </div>
                           </div>
                           <div class="testimonial-item text-center">
                              <figure class="testimonial-img">
                                 <img src="{{ asset ('pariwisata/assets/images/img21.jpg') }}" alt="">
                              </figure>
                              <div class="testimonial-content">
                                 <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri! "</p>
                                 <cite>
                                    William Housten
                                    <span class="company">Travel Agent</span>
                                 </cite>
                              </div>
                           </div>
                           <div class="testimonial-item text-center">
                              <figure class="testimonial-img">
                                 <img src="{{ asset ('pariwisata/assets/images/img22.jpg') }}" alt="">
                              </figure>
                              <div class="testimonial-content">
                                 <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri! "</p>
                                 <cite>
                                    Alison Wright
                                    <span class="company">Travel Guide</span>
                                 </cite>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- testimonial html end -->
            <!-- Home contact details section html start -->
            <section class="contact-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="contact-img" style="background-image: url({{ asset ('pariwisata/assets/images/onggaya.jpg') }});">
                        </div>
                     </div>
                     <div class="col-lg-8">
                        <div class="contact-details-wrap">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="{{ asset ('pariwisata/assets/images/icon12.png') }}" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          <a href="#">support@gmail.com</a>
                                       </li>
                                       <li>
                                          <a href="#">info@domain.com</a>
                                       </li>
                                       <li>
                                          <a href="#">name@company.com</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="{{ asset ('pariwisata/assets/images/icon13.png') }}" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          <a href="#">+132 (599) 254 669</a>
                                       </li>
                                       <li>
                                          <a href="#">+123 (669) 255 587</a>
                                       </li>
                                       <li>
                                          <a href="#">+01 (977) 2599 12</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="contact-details">
                                    <div class="contact-icon">
                                       <img src="{{ asset ('pariwisata/assets/images/icon14.png') }}" alt="">
                                    </div>
                                    <ul>
                                       <li>
                                          3146 Koontz, California
                                       </li>
                                       <li>
                                          Quze.24 Second floor
                                       </li>
                                       <li>
                                          36 Street, Melbourne
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="contact-btn-wrap">
                           <h3>Ayo Bergabung Dalam Wisata Merauke</h3>
                           <a href="#" class="button-primary">LEARN MORE</a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </main>
@stop