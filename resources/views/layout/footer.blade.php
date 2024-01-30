<!--==============================Footer Area==============================-->
@php
    $contact = App\Models\Contact::first();
    $recent_post = App\Models\News::orderBy('id', 'desc')
        ->take(2)
        ->get();
@endphp
<footer class="footer-wrapper footer-layout2" data-bg-src="{{ asset('assets/img/bg/footer_bg_2.png') }}">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xxl-3 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="index.html"><img src="{{ asset('assets/img/putih.png') }}" alt="Insurax"></a>
                            </div>
                            <p class="about-text">Berkomitmen untuk menyediakan produk herbal solutif terbaik dan terus
                                meningkatkan kualitasnya demi menyampaikan setiap kebaikan alam kepada masyarakat.</p>
                            <div class="th-social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $contact->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Company</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('/about') }}">About</a>
                                </li>
                                <li>
                                    <a href="{{ url('/products') }}">Product</a>
                                </li>
                                <li>
                                    <a href="{{ url('/news') }}">News</a>
                                </li>
                                <li>
                                    <a href="{{ url('/contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Information</h3>
                        <div class="th-widget-contact">
                            <div class="info-wrap">
                                <p class="info-wrap_text">
                                    {{ $contact->lokasi }}
                                </p>
                            </div>
                            <div class="info-wrap">
                                <a href="https://wa.me/{{ $contact->nomor_support }}" class="info-wrap_link">
                                    {{ $contact->nomor_support }}
                                </a>
                                <p class="info-wrap_text">{{ $contact->email_support }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="recent-post-wrap">
                            @foreach ($recent_post as $data)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ url('news/' . $data->slug) }}"><img src="{{ asset('uploads/' . $data->gambar_1) }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            {{ $data->created_at->format('Y-m-d') }}
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit"
                                                href="{{ url('news/' . $data->slug) }}">{{ Illuminate\Support\Str::limit($data->judul, 20) }}</a>
                                        </h4>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap bg-title">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p class="copyright-text text-center pb-md-0 pb-4"><i class="fal fa-copyright"></i> 2023 All
                        Rights Reserved By <a href="#">Insurax.</a></p>
                </div>
                <div class="col-auto">
                    <div class="footer-links">
                        <ul>
                            <li><a href="contact.html">Privacy </a></li>
                            <li><a href="contact.html">Terms & Condition</a></li>
                            <li><a href="about.html">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
