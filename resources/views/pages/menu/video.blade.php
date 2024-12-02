@extends('layouts.frontend.master')
@section('content')
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url({{ asset ('pariwisata/assets/images/merauke.jpg') }});">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Video</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <!-- gallery section html start -->
            <div class="gallery-section">
               <div class="container">
                  <div class="gallery-outer-wrap">
                     <div class="gallery-inner-wrap gallery-container grid">

                        <div class="single-gallery grid-item">
                           <figure class="gallery-img">
                              <img src="{{ asset ('pariwisata/assets/images/0km2.jpg') }}" alt="">
                              <div class="gallery-title">
                                 <h3>
                                    <a href="{{ asset ('pariwisata/assets/images/0km2.jpg') }}" data-lightbox="lightbox-set">
                                       OKM INDONESIA
                                    </a>
                                 </h3>
                              </div>
                           </figure>
                        </div>
                        
                        <div class="single-gallery grid-item">
                           <figure class="gallery-img">
                              <img src="{{ asset ('pariwisata/assets/images/0km1.jpeg') }}" alt="">
                              <div class="gallery-title">
                                 <h3>
                                    <a href="{{ asset ('pariwisata/assets/images/0km1.jpeg') }}" data-lightbox="lightbox-set">
                                       SOTA
                                    </a>
                                 </h3>
                              </div>
                           </figure>
                        </div>
                        <div class="single-gallery grid-item">
                           <figure class="gallery-img">
                              <img src="{{ asset ('pariwisata/assets/images/biras.jpg') }}" alt="">
                              <div class="gallery-title">
                                 <h3>
                                    <a href="{{ asset ('pariwisata/assets/images/biras.jpg') }}" data-lightbox="lightbox-set">
                                       BIRAS
                                    </a>
                                 </h3>
                              </div>
                           </figure>
                        </div>
                        <div class="single-gallery grid-item">
                           <figure class="gallery-img">
                              <img src="{{ asset ('pariwisata/assets/images/habe.jpg') }}" alt="">
                              <div class="gallery-title">
                                 <h3>
                                    <a href="{{ asset ('pariwisata/assets/images/habe.jpg') }}" data-lightbox="lightbox-set">
                                       PULAU HABE
                                    </a>
                                 </h3>
                              </div>
                           </figure>
                        </div>
                        <div class="single-gallery grid-item">
                           <figure class="gallery-img">
                              <img src="{{ asset ('pariwisata/assets/images/maro.jpg') }}" alt="">
                              <div class="gallery-title">
                                 <h3>
                                    <a href="{{ asset ('pariwisata/assets/images/maro.jpg') }}" data-lightbox="lightbox-set">
                                       MARO
                                    </a>
                                 </h3>
                              </div>
                           </figure>
                        </div>
                        <div class="single-gallery grid-item">
                           <figure class="gallery-img">
                              <img src="{{ asset ('pariwisata/assets/images/lotus.jpg') }}" alt="">
                              <div class="gallery-title">
                                 <h3>
                                    <a href="{{ asset ('pariwisata/assets/images/lotus.jpg') }}" data-lightbox="lightbox-set">
                                       LOTUS GARDEN
                                    </a>
                                 </h3>
                              </div>
                           </figure>
                        </div>
                        <div class="single-gallery grid-item">
                           <figure class="gallery-img">
                              <img src="{{ asset ('pariwisata/assets/images/rawabiru.jpeg') }}" alt="">
                              <div class="gallery-title">
                                 <h3>
                                    <a href="{{ asset ('pariwisata/assets/images/rawabiru.jpeg') }}" data-lightbox="lightbox-set">
                                       RAWA BIRU
                                    </a>
                                 </h3>
                              </div>
                           </figure>
                        </div>
                        <div class="single-gallery grid-item">
                           <figure class="gallery-img">
                              <img src="{{ asset ('pariwisata/assets/images/tablem2.jpg') }}" alt="">
                              <div class="gallery-title">
                                 <h3>
                                    <a href="{{ asset ('pariwisata/assets/images/tablem2.jpg') }}" data-lightbox="lightbox-set">
                                       TABLEM COUNTRY
                                    </a>
                                 </h3>
                              </div>
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- gallery section html end -->
            <div class="bg-color-callback">
               <div class="container">
                  <div class="row align-items-center justify-content-between">
                     <div class="col-lg-9 col-md-8">
                        <div class="callback-content">
                           <h2>LET'S JOIN US FOR MORE UPDATE & INFO !!</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. orem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4">
                        <div class="button-wrap">
                           <a href="#" class="button-primary">LEARN MORE</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
       
@stop