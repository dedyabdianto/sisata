@extends('layouts.frontend.master')
@section('content')
<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url({{ asset ('pariwisata/assets/images/merauke.jpg') }})";>
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">DESA WISATA</h1>
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
                           <table width="10%">
                              <tbody>
                                 <tr>
                                    <td>
                                    <div>
                                    <h3 text-align="center" class="CxSpFirst"><b><span lang="IN">Desa wisata di Papua Selatan merupakan surga tersembunyi yang menyajikan keindahan alam yang autentik serta budaya lokal yang kaya. Di desa-desa ini, pengunjung dapat menikmati lanskap yang memukau, mulai dari hutan tropis, savana yang luas, hingga pantai-pantai yang masih alami. Setiap desa memiliki daya tariknya sendiri, seperti seni ukir khas Papua, kerajinan tangan tradisional, hingga ritual adat yang sakral. Pengalaman ini tidak hanya memberikan hiburan, tetapi juga mengedukasi wisatawan tentang kearifan lokal yang diwariskan secara turun-temurun.</span></b></h3> <br>
                           
                                    <h2 text-align="center" class="CxSpMiddle"><b><span lang="IN">Keramahan masyarakat setempat menjadi daya tarik utama, memberikan kesan hangat bagi setiap pengunjung yang datang. Wisatawan juga dapat mencicipi kuliner tradisional berbahan alami, seperti sagu, ikan bakar, dan hidangan khas lainnya yang diolah dengan cara tradisional. Dengan perpaduan alam yang memikat dan tradisi yang terjaga, desa wisata di Papua Selatan tidak hanya menjadi tempat pelarian dari hiruk-pikuk kota, tetapi juga destinasi yang memperkaya jiwa dan memperkenalkan kebudayaan Papua kepada dunia.</span></b></h2>
                           
                                    <h2 text-align="center" class="CxSpMiddle"> <b><span lang="IN">Di Kecamatan Petang terdapat beberapa desa wisata, yaitu :</span></b></h2>
                           
                                    
                                    </div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>

                     <br>

                         
                           
      
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