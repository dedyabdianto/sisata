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
                        <p style="font-size: medium;"> Selanjutnya, Misi dari Pariwisata Provinsi Papua Sealatan sebagai berikut :</p>
                     </div>
                     @foreach (json_decode($profil->misi) as $item)
                     <div class="accordion" id="accordionTwo">
                        <div class="card">
                           <div class="card-header" id="headingOne">
                              <h4 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{$item}}
                                 </button>
                              </h4>
                           </div>
                        </div>
                     </div>      
                     @endforeach
                    
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