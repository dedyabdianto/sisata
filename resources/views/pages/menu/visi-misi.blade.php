@extends('layouts.frontend.master')
@section('content')
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url({{ asset ('pariwisata/assets/images/Tugu.jpg') }});">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">VISI & MISI</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <!-- about section html start -->
            <section class="about-section about-page-section">
               
               <!-- visi-misi -->
               <div class="faq-page-container">
            <div class="row">
               <div class="col-lg-5">
                  <div class="faq-testimonial">
                     <figure class="faq-image">
                        <img src="{{ asset ('pariwisata/assets/images/merauke.jpg') }}" alt="">
                     </figure>
                     <div class="testimonial-content">
                        <span class="quote-icon">
                           <i class="fas fa-quote-left"></i>
                        </span>
                        <p>Struktur Organisasi dan Birokrasi Pariwisata Provinsi Papua Selatan</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="faq-content-wrap pl-20">
                     <div class="section-heading">
                        <h5 class="dash-style">Dinas Pariwisata Provinsi Papua Selatan</h5>
                        <h2>Visi & Misi</h2>
                        <p style="font-size: medium;">{{$profil->visi}}</p>
                        <p></p>
                        <p style="font-size: medium;"> Selanjutnya, Misi dari Kampung Kamnosari sebagai berikut :</p>
                     </div>
                     <div class="accordion" id="accordionTwo">
                        <div class="card">
                           <div class="card-header" id="headingOne">
                              <h4 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Manajemen Pariwisata Provinsi Papua Selatan
                                 </button>
                              </h4>
                           </div>
                           <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionTwo">
                              <div class="card-body">
                                 Meningkatkan manajemen pemerintahan yang demokrasi, dinamis, terbuka dan akuntabel
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingTwo">
                              <h4 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Infrastruktur Pariwisata Provinsi Papua Selatan
                                 </button>
                              </h4>
                           </div>
                           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionTwo">
                              <div class="card-body">
                                 Pembangunan infrastruktur kampung yang terencana dan memadai
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingThree">
                              <h4 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Pengembangan Sektor Pertanian Pariwisata Provinsi Papua Selatan
                                 </button>
                              </h4>
                           </div>
                           <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionTwo">
                              <div class="card-body">
                                 Pengembangan sektor pertanian melalui mekanisasi, intensifikasi, ekstensifikasi, rehabilitasi, dan diversifikasi pertanian
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingFour">
                              <h4 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Peningkatan UMKM Pariwisata Provinsi Papua Selatan
                                 </button>
                              </h4>
                           </div>
                           <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionTwo">
                              <div class="card-body">
                                 Meningkatkan ekonomi masyarakat melalui UMKM berbasis masyarakat
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header" id="headingFive">
                              <h4 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Pendidikan Parenting Pariwisata Provinsi Papua Selatan
                                 </button>
                              </h4>
                           </div>
                           <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionTwo">
                              <div class="card-body">
                                 Meningkatkan kualitas masyarakat melalui pendidikan parenting
                              </div>
                           </div>
                        </div>
                     </div>      
                  </div>
               </div>
            </div>
         </div>
               <!-- client section html start -->
               
               <!-- client html end -->
               <!-- callback section html start -->
               
               <!-- callback html end -->
            </section>
            <!-- about html end -->
         </main>
         
@stop