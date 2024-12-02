@extends('layouts.frontend.master')
@section('content')
    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container"
                style="background-image: url({{ asset('pariwisata/assets/images/merauke.jpg') }})";>
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">MAKLUMAT PELAYANAN</h1>
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
                                                <p align="center" class="CxSpFirst"><b><span lang="IN">PEMERINTAH
                                                            PROVINSI PAPUA SELATAN</span></b></p>

                                                <p align="center" class="CxSpMiddle"><b><span lang="IN">DINAS
                                                            PARIWISATA</span></b></p>

                                                <p align="center" class="CxSpMiddle">{{ $home->alamat }}</p>

                                                <p align="center"><span><span>Telp: {{ $home->tlp }}</span></span></p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <p align="center">&nbsp;</p>

                            <p align="center"><span><span><span lang="IN">MAKLUMAT PELAYANAN</span></span></span></p>

                            <p align="center"><span><span><span lang="IN">Dengan ini menyatakan sanggup untuk
                                            melaksanakan pelayanan sesuai dengan Standar Pelayanan, memberikan pelayanan
                                            sesuai dengan kewajiban dan akan melakukan perbaikan secara terus – menerus,
                                            serta bersedia untuk menerima sanksi dan/atau memberikan kompensasi apabila
                                            pelayanan yang diberikan tidak sesuai standar</span></span></span></p>

                            <p><span><span><span><span> </span></span></span></span></p>

                            <table width="100%">
                                <tbody>
                                    @foreach ($profil as $item)
                                        <tr>
                                            <td>
                                                <div>
                                                    <p align="center">&nbsp;</p>

                                                    <p align="center"><span><span>Kepala Dinas Pariwisata</span></span></p>

                                                    <p align="center"><span><span>&nbsp;Provinsi Papua Selatan</span></span>
                                                    </p>

                                                    <p align="center">&nbsp;</p>

                                                    <p align="center">
                                                        <span><span><b><u>{{ $item->nama_kadis }}</u></b></span></span>
                                                    </p>

                                                    <p align="center">
                                                        <span><span><b>{{ $item->pangkat_golongan->pangkat_golongan }}</b></span></span>
                                                    </p>

                                                    <p align="center"><span><span>NIP. {{ $item->nip }}</span></span></p>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
                                                    <a href="informasiterbaru"><img
                                                            src="{{ url(Storage::url($item->gambar)) }}" alt=""></a>
                                                </figure>
                                                <div class="post-content">
                                                    <h5>
                                                        <a href="informasiterbaru">{{ $item->judul }}</a>
                                                    </h5>
                                                    <div class="entry-meta">
                                                        <span class="posted-on">
                                                            {{ \Carbon\Carbon::parse($item->updated_at)->locale('id')->format('j F Y') }}
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
                                            <a href="{{ $home->link_fb }}">
                                                <i class="fab fa-facebook-f"></i>
                                                <span>Facebook</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-pinterest">
                                            <a href="{{ $home->link_yt }}">
                                                <i class="fab fa-youtube"></i>
                                                <span>Youtube</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-whatsapp">
                                            <a href="{{ $home->link_wa }}">
                                                <i class="fab fa-whatsapp"></i>
                                                <span>WhatsApp</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-linkedin">
                                            <a href="{{ $home->link_linkedin }}">
                                                <i class="fab fa-linkedin"></i>
                                                <span>Linkedin</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-twitter">
                                            <a href="{{ $home->link_twt }}">
                                                <i class="fab fa-twitter"></i>
                                                <span>Twitter</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-google">
                                            <a href="{{ $home->link_ig }}">
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
