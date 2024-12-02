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
                     <img src="{{ asset ('pariwisata/assets/images/merauke.jpg') }}" alt="">
                  </figure>
                  <article class="single-content-wrap">
                     <h3>Cupiditate hic provident, repudiandae delectus debitis hac alias curabitur, sequi minim sapien scelerisque dolorem id.</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius ligula non tellus euismod fermentum. Nulla quis enim ut est dapibus luctus quis quis enim. Ut bibendum ultricies nisl ut aliquam. Ut in arcu id nunc elementum ultricies eu eget lacus nam at neque lorem.</p>
                     <blockquote>
                        <p>Sagittis perferendis? Leo nobis irure egestas excepturi ipsam nascetur elementum, montes. Torquent, soluta, ac nihil.</p>
                     </blockquote>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius ligula non tellus euismod fermentum. Nulla quis enim ut est dapibus luctus quis quis enim. Ut bibendum ultricies nisl ut aliquam. Ut in arcu id nunc elementum ultricies eu eget lacus nam at neque lorem.</p>
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
                  <div class="post-socail-wrap">
                     <div class="social-icon-wrap">
                        <div class="social-icon social-facebook">
                           <a href="#">
                              <i class="fab fa-facebook-f"></i>
                              <span>Facebook</span>
                           </a>
                        </div>
                        <div class="social-icon social-google">
                           <a href="#">
                              <i class="fab fa-google-plus-g"></i>
                              <span>Google</span>
                           </a>
                        </div>
                        <div class="social-icon social-pinterest">
                           <a href="#">
                              <i class="fab fa-pinterest"></i>
                              <span>Pinterest</span>
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
                     </div>
                  </div>
                  <div class="author-wrap">
                     <div class="author-thumb">
                        <img src="assets/images/user-img.png" alt="">
                     </div>
                     <div class="author-content">
                        <h3 class="author-name">Demoteam</h3>
                        <p>Anim eligendi error magnis. Pretium fugiat cubilia ullamcorper adipisci, lobortis repellendus sit culpa maiores!</p>
                        <a href="#" class="button-text">VIEW ALL POSTS > </a>
                     </div>
                  </div>
                  <!-- post comment html -->
                  <div class="comment-area">
                     <h2 class="comment-title">3 Comments</h2>
                     <div class="comment-area-inner">
                        <ol>
                           <li>
                              <figure class="comment-thumb">
                                 <img src="assets/images/img20.jpg" alt="">
                              </figure>
                              <div class="comment-content">
                                 <div class="comment-header">
                                    <h5 class="author-name">Tom Sawyer</h5>
                                    <span class="post-on">Jana 10 2020</span>
                                 </div>
                                 <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                 <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                              </div>
                           </li>
                           <li>
                              <ol>
                                 <li>
                                    <figure class="comment-thumb">
                                       <img src="assets/images/img21.jpg" alt="">
                                    </figure>
                                    <div class="comment-content">
                                       <div class="comment-header">
                                          <h5 class="author-name">John Doe</h5>
                                          <span class="post-on">Jana 10 2020</span>
                                       </div>
                                       <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                       <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                    </div>
                                 </li>
                              </ol>
                           </li>
                        </ol>
                        <ol>
                           <li>
                              <figure class="comment-thumb">
                                 <img src="assets/images/img22.jpg" alt="">
                              </figure>
                              <div class="comment-content">
                                 <div class="comment-header">
                                    <h5 class="author-name">Jaan Smith</h5>
                                    <span class="post-on">Jana 10 2020</span>
                                 </div>
                                 <p>Officia amet posuere voluptates, mollit montes eaque accusamus laboriosam quisque cupidatat dolor pariatur, pariatur auctor.</p>
                                 <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                              </div>
                           </li>
                        </ol>
                     </div>
                     <div class="comment-form-wrap">
                        <h2 class="comment-title">Leave a Reply</h2>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form class="comment-form">
                           <p class="full-width">
                              <label>Comment</label>
                              <textarea rows="9"></textarea>
                           </p>
                           <p>
                              <label>Name *</label>
                              <input type="text" name="name">
                           </p>
                           <p>
                              <label>Email *</label>
                              <input type="email" name="email">
                           </p>
                           <p>
                              <label>Website</label>
                              <input type="text" name="web">
                           </p>
                           <p class="full-width">
                              <input type="submit" name="submit" value="Post comment">
                           </p>
                        </form>
                     </div>
                     <!-- post navigation html -->
                     <div class="post-navigation">
                        <div class="nav-prev">
                           <a href="#">
                              <span class="nav-label">Previous Reading</span>
                              <span class="nav-title">Deleniti illum culpa sodales cubilia.</span>
                           </a>
                        </div>
                        <div class="nav-next">
                           <a href="#">
                              <span class="nav-label">Next Reading</span>
                              <span class="nav-title">Deleniti illum culpa sodales cubilia.</span>
                           </a>
                        </div>
                     </div>
                  </div>
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