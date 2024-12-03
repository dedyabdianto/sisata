@extends('layouts.frontend.master')
@section('content')

<main id="content" class="site-main">
   <!-- Inner Banner html start-->
   <section class="inner-banner-wrap">
      <div class="inner-baner-container" style="background-image: url({{ asset ('pariwisata/assets/images/merauke.jpg') }});">
         <div class="container">
            <div class="inner-banner-content">
               <h1 class="inner-title">Informasi Terbaru</h1>
               <div class="entry-meta">
                  <span class="byline">
                     <a href="#">{{$informasi->user->name}}</a>
                  </span>
                  <span class="posted-on">
                     <a href="#">{{\Carbon\Carbon::parse($informasi->updated_at)->locale('id')->translatedFormat('j F Y')}}</a>
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
                     <img src="{{ Storage::url ($informasi->gambar) }}" alt="">
                  </figure>
                  <article class="single-content-wrap">
                     <h3>{{$informasi->judul}}</h3>
                     <p style="text-align: justify;">{{$informasi->isi}}</p>
                    
                 
                    
                  <!-- blog post item html end -->
               </div>
               
               <div class="col-lg-4 secondary">
                  <div class="sidebar">
                     <aside class="widget author_widget">
                        <h3 class="widget-title">ABOUT AUTHOR</h3>
                        <div class="widget-content text-center"> 
                           <div class="profile"> 
                              <figure class="avatar"> 
                                 <a href="#"> 
                                    <img src="assets/images/img21.jpg" alt=""> 
                                 </a> 
                              </figure> 
                              <div class="text-content"> 
                                 <div class="name-title"> 
                                    <h3> 
                                       <a href="https://demo.bosathemes.com/bosa/photography/james-watson/">James Watson</a>
                                    </h3> 
                                 </div> 
                                 <p>Accumsan? Aliquet nobis doloremque, aliqua? Inceptos voluptatem, duis tempore optio quae animi viverra distinctio cumque vivamus, earum congue, anim velit</p> 
                              </div> 
                              <div class="socialgroup"> 
                                 <ul> 
                                    <li> <a target="_blank" href="#"> <i class="fab fa-facebook"></i> </a> </li> 
                                    <li> <a target="_blank" href="#"> <i class="fab fa-google"></i> </a> </li> 
                                    <li> <a target="_blank" href="#"> <i class="fab fa-twitter"></i> </a> </li> 
                                    <li> <a target="_blank" href="#"> <i class="fab fa-instagram"></i> </a> </li> 
                                    <li> <a target="_blank" href="#"> <i class="fab fa-pinterest"></i> </a> </li> 
                                 </ul> 
                              </div> 
                           </div> 
                        </div>
                     </aside>
                     
                     <aside class="widget widget_latest_post widget-post-thumb">
                        <h3 class="widget-title">Recent Post</h3>
                        <ul>
                           <li>
                              <figure class="post-thumb">
                                 <a href="#"><img src="assets/images/img17.jpg" alt=""></a>
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
                                 <a href="#"><img src="assets/images/img18.jpg" alt=""></a>
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
                                 <a href="#"><img src="assets/images/img19.jpg" alt=""></a>
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
                                 <a href="#"><img src="assets/images/img34.jpg" alt=""></a>
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
                                 <a href="#"><img src="assets/images/img35.jpg" alt=""></a>
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