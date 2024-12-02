@extends('layouts.frontend.master')
@section('content')
<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url({{ asset ('pariwisata/assets/images/merauke.jpg') }})";>
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">PROFIL PENYELENGGARA</h1>
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
                              <h3>Cupiditate hic provident, repudiandae delectus debitis hac alias curabitur, sequi minim sapien scelerisque dolorem id.</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius ligula non tellus euismod fermentum. Nulla quis enim ut est dapibus luctus quis quis enim. Ut bibendum ultricies nisl ut aliquam. Ut in arcu id nunc elementum ultricies eu eget lacus nam at neque lorem.</p>
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
                                    @foreach ($informasi as $item)
                                    <li>
                                       <figure class="post-thumb">
                                          <a href="informasiterbaru"><img src="{{ url(Storage::url($item->gambar)) }}" alt=""></a>
                                       </figure>
                                       <div class="post-content">
                                          <h5>
                                             <a href="informasiterbaru">{{$item->isi}}</a>
                                          </h5>
                                          <div class="entry-meta">
                                             <span class="posted-on">
                                                <a href="#">August 17, 2021</a>
                                             </span>
                                             
                                          </div>
                                       </div>
                                    </li>
                                    @endforeach
                                 </ul>
                              </aside>
                              <aside class="widget widget_social">
                                 <h3 class="widget-title">Social share</h3>
                                 <div class="social-icon-wrap">
                                    <div class="social-icon social-facebook">
                                       <a href="{{$home->link_fb}}">
                                          <i class="fab fa-facebook-f"></i>
                                          <span>Facebook</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-pinterest">
                                       <a href="{{$home->link_yt}}">
                                          <i class="fab fa-youtube"></i>
                                          <span>Youtube</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-whatsapp">
                                       <a href="{{$home->link_wa}}">
                                          <i class="fab fa-whatsapp"></i>
                                          <span>WhatsApp</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-linkedin">
                                       <a href="{{$home->link_linkedin}}">
                                          <i class="fab fa-linkedin"></i>
                                          <span>Linkedin</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-twitter">
                                       <a href="{{$home->link_twt}}">
                                          <i class="fab fa-twitter"></i>
                                          <span>Twitter</span>
                                       </a>
                                    </div>
                                    <div class="social-icon social-google">
                                       <a href="{{$home->link_ig}}">
                                          <i class="fab fa-instagram"></i>
                                          <span>Instagram</span>
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