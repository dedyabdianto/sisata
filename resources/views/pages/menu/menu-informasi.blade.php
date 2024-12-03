@extends('layouts.frontend.master')
@section('content')
    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container"
                style="background-image:url({{ asset('pariwisata/assets/images/merauke.jpg') }});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">BERITA</h1>
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

                                @foreach ($data as $item)
                                @if($item->kategori_informasi->nama_kategori == strtoupper('berita'))
                                    <div class="grid-item col-md-6">
                                        <article class="post">
                                            <figure class="feature-image">
                                                <a href="{{route('informasiterbaru', $item->id)}}">
                                                    <img src="{{ Storage::url($item->gambar) }}" alt="">
                                                </a>
                                            </figure>
                                            <div class="entry-content">
                                                <h3>
                                                    <a href="{{route('informasiterbaru', $item->id)}}">{{ $item->judul }}</a>
                                                </h3>
                                                <div class="entry-meta">
                                                    <span class="byline">
                                                        <a href="#">{{$item->user->name}}</a>
                                                    </span>
                                                    <span class="posted-on">
                                                        <a href="#">{{\Carbon\Carbon::parse($item->updated_at)->locale('id')->format('j F Y')}}</a>
                                                    </span>
                                                </div>
                                                <p style="text-align: justify"> {{ Str::limit($item->isi, 100) }}
                                                    @if (strlen($item->isi) > 100)
                                                        <span class="more-text" style="display:none;">{{ substr($item->content, 100) }}</span>
                                                        <a href="{{route('informasiterbaru', $item->id)}}" class="read-more">Selengkapnya</a>
                                                    @endif</p>
                                                
                                            </div>
                                        </article>
                                    </div>
                                    @endif
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
                        @include('layouts.frontend.sidebar-pengumuman')
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
