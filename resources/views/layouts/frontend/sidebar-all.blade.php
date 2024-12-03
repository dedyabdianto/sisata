<div class="col-lg-4 secondary">
    <div class="sidebar">

        <aside class="widget widget_latest_post widget-post-thumb">
            <h3 class="widget-title">Semua Postingan Terbaru</h3>
            <ul>
                @foreach ($data as $item)
                        <li>
                            <figure class="post-thumb">
                                <a href="informasiterbaru"><img src="{{ url(Storage::url($item->gambar)) }}"
                                        alt=""></a>
                            </figure>
                            <div class="post-content">
                                <h5>
                                    <a href="{{ route('informasiterbaru', $item->id) }}">{{ $item->judul }}</a>
                                </h5>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <a href="#">{{\Carbon\Carbon::parse($item->updated_at)->locale('id')->format('j F Y')}}</a>
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
