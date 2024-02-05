<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @php
        $logo = App\Models\Logo::first();
    @endphp
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PT Niaga Wasilah Al Khair</title>
    <meta name="description" content="PT Niaga Wasilah Al Khair">
    <meta name="keywords" content="PT Niaga Wasilah Al Khair">
    <meta name="robots" content="PT Niaga Wasilah Al Khair">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" href="{{ asset('uploads/' . $logo->logo_title) }}" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('uploads/' . $logo->logo_title) }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================Google Fonts============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <!--==============================All CSS File============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>


    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->



    <!--********************************Code Start From Here******************************** -->




    <!--==============================Preloader==============================-->
    <div class="preloader ">
        <button class="th-btn style2 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <!--==============================Mobile Menu============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ url('/') }}"><img src="{{ asset('uploads/' . $logo->logo) }}" alt="Nashir"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
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

    <!--==============================Header Area==============================-->
    <header class="th-header header-layout8">
        <div class="header-top">
            <div class="container">
                <div class="row gx-0 justify-content-center justify-content-md-between align-items-center">
                    <div class="col-auto">
                        <div class="top-left">
                            <p class="header-notice">Welcome to PT Niaga Wasilah AlKhair</p>
                        </div>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="top-right">
                            <div class="row gx-0 align-items-center justify-content-between">
                                <div class="col-auto">
                                    <div class="header-links">
                                        <ul>
                                            <li class="d-none d-lg-inline-block"><i class="fal fa-phone"></i><a
                                                    href="https://wa.me/{{ $contact->nomor_support }}"
                                                    target="_blank">{{ $contact->nomor_support }}</a></li>
                                            <li class="d-none d-xxl-inline-block"><i
                                                    class="fal fa-location-dot"></i>{{ $contact->lokasi }}</li>
                                            <li><i class="fal fa-envelope"></i><a
                                                    href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=support@mynashir.com"
                                                    target="_blank">{{ $contact->email_support }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container">
                    <div class="row gx-0 justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('uploads/' . $logo->logo) }}"
                                        alt="Nashir"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="menu-area">
                                <div class="row gx-0 align-items-center justify-content-between">
                                    <div class="col-auto">
                                        <nav class="main-menu d-none d-lg-inline-block">
                                            <ul>
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
                                        </nav>
                                        <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i
                                                class="far fa-bars"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==============================Hero Area==============================-->
    <div class="hero-8">
        <div class="th-hero-wrapper hero-slider-8 th-carousel" id="heroSlide8" data-slide-show="1"
            data-md-slide-show="1" data-fade="true" data-dots="false" id="hero">

            @foreach ($sliders as $data)
                <div class="th-hero-slide">
                    <div class="th-hero-bg" data-bg-src="{{ asset('assets/new_img/hero_bg_1.jpg') }}">
                        <img src="{{ url('assets/img/update1/hero/hero_overlay_8.png') }}" alt="Hero Image">
                    </div>
                    <div class="hero-8-thumb" data-ani="slideinleft" data-ani-delay="0.05s"
                        data-mask-src="{{ asset('assets/new_img/home3-mask.png') }}">
                        <img src="{{ asset('uploads/' . $data->gambar) }}" alt="img">
                    </div>
                    <div class="container">
                        <div class="hero-style8">
                            <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.5s">{{ $data->judul }}</span>
                            <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.3s">
                                {{ $data->sub_judul }}</h1>
                            <p class="hero-text" data-ani="slideinup" data-ani-delay="0.1s">{{ $data->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="icon-box">
            <button data-slick-prev="#heroSlide8" class="slick-arrow default"><i
                    class="far fa-arrow-left"></i></button>
            <button data-slick-next="#heroSlide8" class="slick-arrow default"><i
                    class="far fa-arrow-right"></i></button>
        </div>
    </div>
    <!--======== / Hero Section ========-->
    <!--==============================About Area==============================-->
    <div class="space overflow-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xxl-7 col-lg-6 mb-lg-0 mb-40">
                    <div class="about-thumb4">
                        <div class="img1">
                            <img class="tilt-active" src="{{ asset('assets/new_img/about_2-1.jpg') }}"
                                alt="About">
                        </div>
                        <div class="img2">
                            <img class="tilt-active" src="{{ asset('assets/new_img/about_2-2.jpg') }}"
                                alt="About">
                            <a href="https://www.youtube.com/watch?v=2ka0niUCAWA" class="play-btn popup-video"><i
                                    class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                        <div class="about4-dot shape-mockup jump" data-bottom="-38px" data-left="-36px"><img
                                src="assets/img/shape/dots.png" alt="img"></div>
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-6">
                    <div class="title-area mb-30">
                        <span class="sub-title">
                            Tentang Nashir
                        </span>
                        <h2 class="sec-title">PT Niaga Wasilah AlKhair</h2>
                    </div>
                    <p class="mt-n1 mb-30">PT Niaga Wasilah Al Khair (Nashir) merupakan perusahaan digital marketing
                        terkemuka yang berfokus pada pendistribusian bahan herbal tradisional. Perusahaan ini telah
                        mengambil banyak peran dalam meningkatkan kepercayaan masyarakat terkait manfaat bahan herbal.
                    </p>
                    <div class="row gx-30 align-items-center">
                        <div class="col-sm-auto mb-sm-0 mb-4">
                            <div class="thumb"><img src="{{ asset('assets/new_img/about_2-3.jpg') }}"
                                    alt="img"></div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="checklist">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i> Tim Profesional Terbaik</li>
                                    <li><i class="fa fa-check-circle"></i> Produk Berkualitas</li>
                                    <li><i class="fa fa-check-circle"></i> Pelayanan Prima</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="skill-feature mt-30">
                    </div>
                    <div class="btn-group mt-50">
                        <a href="{{ url('about') }}" class="th-btn">Read More<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Brand Area ==============================-->
    <section class="brand-sec1" data-bg-src="{{ asset('assets/new_img/brand-bg1.png') }}">
        <div class="title-area text-center mb-30">
            <span class="sub-title">Produk Kami</span>
            <h2 class="sec-title text-white">Solusi alami untuk kesehatan optimal</h2>
        </div>
        <div class="container">
            <div class="row th-carousel" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3"
                data-sm-slide-show="3" data-xs-slide-show="2">
                @foreach ($categories as $data)
                    <div class="col-auto">
                        <div class="brand-box">
                            <a href="{{ url('category/' . $data->id) }}"><img
                                    src="{{ asset('uploads/' . $data->gambar) }}" alt="Brand Logo"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--==============================Feature Area==============================-->
    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="wcu-thumb2">
                        <div class="shape-mockup spin d-none d-xl-block" data-left="-125px" data-top="-63px">
                            <img src="{{ asset('assets/img/shape/wcu-thumb-2-shape.png') }}" alt="shape">
                        </div>
                        <img class="tilt-active" src="{{ asset('assets/new_img/about_2-4.jpg') }}" alt="image">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="title-area mb-30">
                        <h2 class="sec-title">Perdagangan Menjadi Perantara Kebaikan</h2>
                    </div>
                    <p class="mt-n2 mb-30">PT Niaga Wasilah Alkhair (Nashir) selalu mengedepankan produk berkualitas
                        tinggi, teruji laboratorium berstandar, dan memberikan kepuasan konsumen. Menjadikan setiap
                        produk Nashir pilihan utama bagi masyarakat dalam mengatasi setiap masalah kesehatan yang
                        dihadapi.</p>
                </div>
            </div>
        </div>
    </div>

    <!--==============================Cta Area==============================-->
    <div class="container">
        <div class="cta-sec5 text-lg-start text-center" data-bg-src="{{ asset('assets/new_img/cta_bg_4.png') }}">
            <div class="row gy-5 justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-auto order-lg-2">
                    <a href="https://wa.me/{{ $contact->nomor_support }}" target="_blank" class="cta-icon play-btn"><img src="{{ asset('assets/img/icon/cta-icon-1.svg') }}" alt="img"></a>
                </div>
                <div class="col-lg-auto order-lg-1">
                    <div class="cta-info-wrap">
                        <h3 class="mb-10 fw-semibold">
                            <a class="text-white" href="https://wa.me/{{ $contact->nomor_support }}" target="_blank">Admin Nashir</a>
                        </h3>
                        <h5 class="mb-0 fw-medium">
                            <p class="text-white">{{ $contact->email_support }}</p>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-auto order-lg-3">
                    <div class="btn-group justify-content-center">
                        <a href="{{ url('/contact') }}" class="th-btn style3">Contact With Us<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================Video Area==============================-->
    <div class="video-sec3 " data-bg-src="{{ asset('assets/new_img/home_bg-2.jpg') }}" data-overlay="title"
        data-opacity="8">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="title-area mb-0 text-lg-start text-center">
                        <span class="sub-title style3">Cerita panjang</span>
                        <h2 class="sec-title style2 text-white">Perjuangan berat adalah penerjemah mimpi menjadi
                            kenyataan.</h2>
                    </div>
                </div>
                <div class="col-lg-3 align-self-center text-lg-end text-center mt-lg-0 mt-5">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/8cGn25Jc5Y8?si=ozKMNM6pfNTYaeN9"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!--============================== News Area ==============================-->
    <section class="space" id="blog-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Blog & News</span>
                <h2 class="sec-title">Blog & Berita Terbaru</h2>
            </div>
            <div class="row slider-shadow th-carousel" id="Newslide1" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                @foreach ($late_post as $data)
                    <div class="col-md-6 col-xl-4">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{ asset('uploads/' . $data->gambar_1) }}" alt="blog image">
                            </div>
                            <div class="blog-card_content">
                                <div class="blog-meta">
                                    <i class="fal fa-calendar-alt"></i> {{ $data->created_at->format('Y-m-d') }}
                                </div>
                                <h3 style="display: block;
                                max-width: 400px;
                                overflow: hidden;
                                white-space: nowrap;
                                text-overflow: ellipsis;"
                                    class="blog-title border-bottom box-title"><a
                                        href="{{ url('news/' . $data->slug) }}">{{ $data->judul }}</a></h3>
                                <a href="{{ url('news/' . $data->slug) }}" class="half-line-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--==============================Footer Area==============================-->
    @include('layout.footer')

    <!--********************************Code End  Here******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!--==============================All Js File============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- tilt image -->
    <script src="{{ asset('assets/js/tilt.min.js') }}"></script>
    <!-- Circle Progress -->
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
