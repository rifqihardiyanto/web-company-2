@extends('layout.main')

@section('title', 'PT Niaga Wasilah Al Khair')

@section('content')

    <!--============================== Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/new_img/bg_page.jpg') }}" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================Blog Area==============================-->
    <section class="th-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single">
                        <div class="blog-img">
                            <img src="{{ asset('uploads/' . $news->gambar_1) }}" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <i class="fa-light fa-calendar-days"></i> {{ $news->created_at->format('Y-m-d') }}
                            </div>
                            <h2 class="blog-title">Family first with our insurance coverage</h2>
                            <p>Proin dictum accumsan ante, vel cursus nulla congue quis. Aliquam a nisi pretium, facilisis
                                arcu quis, placerat massa. Praesent ac odio quis massa commodo iaculis et at turpis. Aliquam
                                ligula urna, lacinia eget egestas in, egestas nec ex. Donec finibus nulla in odio aliquet
                                lacinia. Aenean vel tortor malesuada, elementum urna sit amet, pharetra elit. Nullam sed leo
                                nec est eleifend accumsan. Donec rhoncus sem diam, eget euismod sapien tempor eu. Nunc
                                venenatis justo id finibus condimentum.
                            </p>
                            <p>Quisque vel auctor ex, et ullamcorper orci. Cras consequat consequat tincidunt. Sed placerat
                                faucibus velit imperdiet ultricies. Etiam lobortis enim quis justo viverra, sed sagittis
                                diam semper. Etiam rutrum volutpat tellus, non viverra justo vulputate vitae. Nunc quis
                                libero a nisi elementum condimentum dapibus vel nisi. Ut varius vestibulum mauris, ac
                                viverra velit scelerisque eget. </p>
                            <div class="row gy-30">
                                <div class="col-sm-6">
                                    <div class="thumb"><img src="{{ asset('uploads/' . $news->gambar_2) }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="thumb"><img src="{{ asset('uploads/' . $news->gambar_3) }}" alt="img">
                                    </div>
                                </div>
                            </div>
                            <h3 class="h4 mt-30">Coverage that cares for your family.</h3>
                            <p class="mb-0">Vivamus sit amet efficitur mauris. Ut vehicula venenatis arcu id venenatis.
                                Nam ac rutrum risus, nec vulputate arcu. Donec suscipit tellus eu lorem bibendum, eu maximus
                                orci feugiat. Donec pulvinar vulputate finibus. Praesent tempor risus et gravida molestie.
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                                Lorem ipsum dolor sit amet</p>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget  ">
                            <h3 class="widget_title">Berita Terbaru</h3>
                            <div class="recent-post-wrap">
                                @foreach ($late_post as $data)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="blog-details.html"><img src="{{ asset('uploads/' . $data->gambar_1) }}"
                                                    alt="Blog Image"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="recent-post-meta">
                                                <a href="blog.html"><i class="fal fa-calendar-alt"></i> {{ $data->created_at->format('Y-m-d') }}</a>
                                            </div>
                                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">{{ $data->judul }}</a></h4>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
