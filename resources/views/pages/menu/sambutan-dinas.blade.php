@extends('layouts.frontend.master')
@section('content')
<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url({{ asset ('pariwisata/assets/images/merauke.jpg') }})";>
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">SAMBUTAN KEPALA DINAS</h1>
                        <div class="entry-meta">
                           <span class="byline">
                              <a href="#">Demoteam</a>
                           </span>
                           <span class="posted-on">
                              <a href="#">August 17, 2021</a>
                           </span>
                           <span class="comments-link">
                              <a href="#">No Comments</a>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="single-post-section">
               <div class="single-post-inner">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8 primary right-sidebar">
                           <!-- single blog post html start -->
                           <figure class="feature-image">
                              <img src="{{ asset ('pariwisata/assets/images/kepaladinas.png') }}" alt="">
                           </figure>
                           <article class="single-content-wrap">
                              
                              <p style="font-size: larger;">{{$profil->sambutan}}</p>
                              <blockquote>
                                 <p>Sagittis perferendis? Leo nobis irure egestas excepturi ipsam nascetur elementum, montes. Torquent, soluta, ac nihil.</p>
                              </blockquote>
                           </article>
                           <div class="meta-wrap">
                              <div class="tag-links">
                                 <a href="#">Destination</a>,
                                 <a href="#">hiking</a>,
                                 <a href="#">Travel Dairies</a>,
                                 <a href="#">Travelling</a>,
                                 <a href="#">Trekking</a>
                              </div>
                           </div>
                         
                           
      
                           <!-- blog post item html end -->
                        </div>
                        <div class="col-lg-4 secondary">
                           <div class="sidebar">
                              
                              <aside class="widget widget_latest_post widget-post-thumb">
                                 <h3 class="widget-title">Recent Post</h3>
                                 <ul>
                                    <li>
                                       <figure class="post-thumb">
                                          <a href="#"><img src="{{ asset ('pariwisata/assets/images/img17.jpg') }}" alt=""></a>
                                       </figure>
                                       <div class="post-content">
                                          <h5>
                                             <a href="#">Someday I’m going to be free and travel</a>
                                          </h5>
                                          <div class="entry-meta">
                                             <span class="posted-on">
                                                <a href="#">August 17, 2021</a>
                                             </span>
                                             <span class="comments-link">
                                                <a href="#">No Comments</a>
                                             </span>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <figure class="post-thumb">
                                          <a href="#"><img src="{{ asset ('pariwisata/assets/images/img18.jpg') }}" alt=""></a>
                                       </figure>
                                       <div class="post-content">
                                          <h5>
                                             <a href="#">Enjoying the beauty of the great nature</a>
                                          </h5>
                                          <div class="entry-meta">
                                             <span class="posted-on">
                                                <a href="#">August 17, 2021</a>
                                             </span>
                                             <span class="comments-link">
                                                <a href="#">No Comments</a>
                                             </span>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <figure class="post-thumb">
                                          <a href="#"><img src="{{ asset ('pariwisata/assets/images/img19.jpg') }}" alt=""></a>
                                       </figure>
                                       <div class="post-content">
                                          <h5>
                                             <a href="#">Let’s start adventure with best tripo guides</a>
                                          </h5>
                                          <div class="entry-meta">
                                             <span class="posted-on">
                                                <a href="#">August 17, 2021</a>
                                             </span>
                                             <span class="comments-link">
                                                <a href="#">No Comments</a>
                                             </span>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <figure class="post-thumb">
                                          <a href="#"><img src="{{ asset ('pariwisata/assets/images/img34.jpg') }}" alt=""></a>
                                       </figure>
                                       <div class="post-content">
                                          <h5>
                                             <a href="#">Journeys are best measured in new friends</a>
                                          </h5>
                                          <div class="entry-meta">
                                             <span class="posted-on">
                                                <a href="#">August 17, 2021</a>
                                             </span>
                                             <span class="comments-link">
                                                <a href="#">No Comments</a>
                                             </span>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <figure class="post-thumb">
                                          <a href="#"><img src="{{ asset ('pariwisata/assets/images/img35.jpg') }}" alt=""></a>
                                       </figure>
                                       <div class="post-content">
                                          <h5>
                                             <a href="#">Take only memories, leave only footprints</a>
                                          </h5>
                                          <div class="entry-meta">
                                             <span class="posted-on">
                                                <a href="#">August 17, 2021</a>
                                             </span>
                                             <span class="comments-link">
                                                <a href="#">No Comments</a>
                                             </span>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </aside>
                              <aside class="widget widget_social">
                                 <h3 class="widget-title">Social share</h3>
                                 <div class="social-icon-wrap">
                                    <div class="social-icon social-facebook">
                                       <a href="#">
                                          <i class="fab fa-facebook-f"></i>
                                          <span>Facebook</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-pinterest">
                                       <a href="#">
                                          <i class="fab fa-pinterest"></i>
                                          <span>Pinterest</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-whatsapp">
                                       <a href="#">
                                          <i class="fab fa-whatsapp"></i>
                                          <span>WhatsApp</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-linkedin">
                                       <a href="#">
                                          <i class="fab fa-linkedin"></i>
                                          <span>Linkedin</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-twitter">
                                       <a href="#">
                                          <i class="fab fa-twitter"></i>
                                          <span>Twitter</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-google">
                                       <a href="#">
                                          <i class="fab fa-google-plus-g"></i>
                                          <span>Google</span>
                                       </a>
                                    </div>
                                 </div>
                              </aside>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
         @stop