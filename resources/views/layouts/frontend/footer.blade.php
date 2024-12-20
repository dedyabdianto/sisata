<footer id="colophon" class="site-footer footer-primary">
    <div class="top-footer">
       <div class="container">
          <div class="row">
             <div class="col-lg-3 col-md-6">
                <aside class="widget widget_text">
                   <h3 class="widget-title">
                      About Travel
                   </h3>
                   <div class="textwidget widget-text">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                   </div>
                   <div class="award-img">
                      <a href="#"><img style="height: 85px;width: 85px;" src="{{ asset ('pariwisata/assets/images/wonderful.png') }}" alt=""></a>
                      <a href="#"><img style="height: 85px;width: 85px;" src="{{ asset ('pariwisata/assets/images/kemenkraf.png') }}" alt=""></a>
                   </div>
                </aside>
             </div>
             <div class="col-lg-3 col-md-6">
                <aside class="widget widget_text">
                   <h3 class="widget-title">CONTACT INFORMATION</h3>
                   <div class="textwidget widget-text">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      <ul>
                         <li>
                            <a>
                               <i class="fas fa-phone-alt"></i>
                               {{$home->tlp}}
                            </a>
                         </li>
                         <li>
                            <a>
                               <i class="fas fa-envelope"></i>
                               {{$home->email}}
                            </a>
                         </li>
                         <li>
                            <a href="{{$home->link_wa}}">
                               <i class="fab fa-whatsapp"></i>
                            WhatsApp
                            </a>
                         </li>
                         <li>
                            <a href="{{$home->link_fb}}">
                               <i class="fab fa-facebook-f"></i>
                            Facebook
                            </a>
                         </li>
                         <li>
                            <a href="{{$home->link_ig}}">
                               <i class="fab fa-instagram"></i>
                            Instagram
                            </a>
                         </li>
                         <li>
                            <a href="{{$home->link_twt}}">
                               <i class="fab fa-twitter"></i>
                            Twitter
                            </a>
                         </li>
                      </ul>
                   </div>
                </aside>
             </div>
             <div class="col-lg-3 col-md-6">
                <aside class="widget widget_recent_post">
                   <h3 class="widget-title">Latest Post</h3>
                   <ul>
                      <li>
                         <h5>
                            <a href="#">Life is a beautiful journey not a destination</a>
                         </h5>
                         <div class="entry-meta">
                            <span class="post-on">
                               <a href="#">August 17, 2021</a>
                            </span>
                            <span class="comments-link">
                               <a href="#">No Comments</a>
                            </span>
                         </div>
                      </li>
                      <li>
                         <h5>
                            <a href="#">Take only memories, leave only footprints</a>
                         </h5>
                         <div class="entry-meta">
                            <span class="post-on">
                               <a href="#">August 17, 2021</a>
                            </span>
                            <span class="comments-link">
                               <a href="#">No Comments</a>
                            </span>
                         </div>
                      </li>
                   </ul>
                </aside>
             </div>
             <div class="col-lg-3 col-md-6">
                <aside class="widget widget_newslatter">
                   <h3 class="widget-title">SUBSCRIBE US</h3>
                   <div class="widget-text">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                   </div>
                   <form class="newslatter-form">
                      <input type="email" name="s" placeholder="Your Email..">
                      <input type="submit" name="s" value="SUBSCRIBE NOW">
                   </form>
                </aside>
             </div>
          </div>
       </div>
    </div>
    <div class="buttom-footer">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-md-5">
                <div class="footer-menu">
                   <ul>
                      <li>
                         <a href="#">Privacy Policy</a>
                      </li>
                      <li>
                         <a href="#">Term & Condition</a>
                      </li>
                      <li>
                         <a href="#">FAQ</a>
                      </li>
                   </ul>
                </div>
             </div>
             <div class="col-md-2 text-center">
                <div class="footer-logo">
                   <a href="#"><img style="height: 70px;width: 70px;" src="{{ asset ('pariwisata/assets/images/logo-papsel2.png') }}" alt=""></a>
                </div>
             </div>
             <div class="col-md-5">
                <div class="copy-right text-right">Copyright © 2024 Pariwisata Papua Selatan. All rights reserveds</div>
             </div>
          </div>
       </div>
    </div>
 </footer>