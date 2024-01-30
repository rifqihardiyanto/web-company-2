@extends('layout.main')

@section('title', 'PT Niaga Wasilah Al Khair')

@section('content')

    <!--==============================Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/new_img/bg_page.jpg') }}" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Berita Nashir</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('') }}">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================Blog Area==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    @foreach ($news as $data)
                        <div class="th-blog blog-single has-post-thumbnail">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{ asset('uploads/' . $data->gambar_1) }}" alt="Blog Image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <i class="fa-light fa-calendar-days"></i> {{ $data->created_at->format('Y-m-d') }}
                                </div>
                                <h2 class="blog-title"><a href="{{ url('news/' . $data->slug) }}">{{ $data->judul }}</a>
                                </h2>
                                <a href="{{ url('news/' . $data->slug) }}" class="th-btn">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach


                    {{-- {{ $news->links() }} --}}

                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_nav_menu  ">
                            <h3 class="widget_title">Kategori</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    @foreach ($categorynews as $data)
                                        <li><a href="{{ url('news/' . $data->slug) }}">{{ $data->kategori }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Berita Terbaru</h3>
                            <div class="recent-post-wrap">
                                @foreach ($late_post as $data)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="{{ url('news/' . $data->slug) }}"><img src="{{ asset('uploads/' . $data->gambar_1) }}"
                                                    alt="Blog Image"></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit" href="{{ url('news/' . $data->slug) }}">{{ $data->judul }}</a></h4>

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
