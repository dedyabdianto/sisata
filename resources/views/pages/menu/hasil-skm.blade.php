@extends('layouts.frontend.master')
@section('content')
<main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url({{ asset ('pariwisata/assets/images/merauke.jpg') }})";>
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">HASIL SKM</h1>
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
                           <div _ngcontent-err-c50="" class="content"><p align="center"><span><span><span><b><span lang="EN-ID"><span>INDEKS KEPUASAN MASYARAKAT (IKM)</span></span></b></span></span></span></p>

                              <p align="center"><span><span><span><b><span lang="EN-ID"><span>DINAS PARIWISATA</span></span></b></span></span></span></p>
                              
                              <p align="center"><span><span><span><b><span lang="EN-ID"><span>PROVINSI PAPUA SELATAN</span></span></b></span></span></span></p>
                              
                              <p align="center"><span><span><span><b><span lang="EN-ID"><span>TAHUN 2024</span></span></b></span></span></span></p>
                              
                              <table width="100%">
                                 <tbody>
                                    <tr>
                                       <td>
                                       <div>
                                       <p align="center">&nbsp;</p>
                              
                                       <p align="center"><b><span lang="EN-ID"><span>NILAI IKM</span></span></b></p>
                                       </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              
                              <table width="100%">
                                 <tbody>
                                    <tr>
                                       <td>
                                       <div>
                                       <h1 align="center"><span>88.01</span></h1>
                                       </div>
                              
                                       <p><strong>&nbsp;Kategori Baik (B)</strong></p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              
                              <table width="100%">
                                 <tbody>
                                    <tr>
                                       <td>
                                       <div>
                                       <p><span lang="EN-ID"><span>NAMA LAYANAN : INFORMASI KEPARIWISATAAN</span></span></p>
                                       </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              
                              <p align="center">&nbsp;</p>
                              
                              <p align="center"><span><span><span><b><span lang="EN-ID"><span>TERIMA KASIH ATAS PENILAIAN YANG TELAH ANDA BERIKAN </span></span></b></span></span></span></p>
                              
                              <p align="center"><span><span><span><b><span lang="EN-ID"><span>MASUKAN ANDA SANGAT BERMANFAAT UNTUK KEMAJUAN UNIT KAMI AGAR TERUS MEMPERBAIKI </span></span></b></span></span></span></p>
                              
                              <p align="center"><span><span><span><b><span lang="EN-ID"><span>DAN MENINGKATKAN KUALITAS PELAYANAN BAGI MASYARAKAT</span></span></b></span></span></span></p></div>

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