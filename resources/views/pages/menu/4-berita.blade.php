@extends('layouts.frontend.master')
@section('content')
<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image:url({{ asset('pariwisata/assets/images/merauke.jpg') }});">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">BERITA TERBARU</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="archive-section blog-archive">
               <div class="archive-inner">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8 primary right-sidebar">
                           <!-- blog post item html start -->
                           <div class="grid row">

                              @foreach ($informasi as $item)
                              <div class="grid-item col-md-6">
                                 <article class="post">
                                    <figure class="feature-image">
                                       <a href="#">
                                          <img src="{{ Storage::url ($item->gambar) }}" alt="">
                                       </a>
                                    </figure>
                                    <div class="entry-content">
                                       <h3>
                                          <a href="#">{{$item->judul}}</a>
                                       </h3>
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
                                       <p>{{$item->isi}}</p>
                                       <a href="informasiterbaru" class="button-text">CONTINUE READING..</a>
                                    </div>
                                 </article>
                              </div>
                              @endforeach

                           </div>
                           <!-- blog post item html end -->
                           <!-- pagination html start-->
                           <div class="post-navigation-wrap">
                              <nav>
                                <ul class="pagination">
                                  <li>
                                    <a href="#">
                                      <i class="fas fa-arrow-left"></i>
                                    </a>
                                  </li>
                                  <li class="active"><a href="#">1</a></li>
                                  <li><a href="#">..</a></li>
                                  <li><a href="#">5</a></li>
                                  <li>
                                    <a href="#">
                                      <i class="fas fa-arrow-right"></i>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                           </div>
                           <!-- pagination html start-->
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
                                             <a href="informasiterbaru">{{$item->judul}}</a>
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