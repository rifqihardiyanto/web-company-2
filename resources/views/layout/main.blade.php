<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="author" content="Insurax">
    <meta name="description" content="Insurax - Insurance Company HTML Template">
    <meta name="keywords" content="Insurax - Insurance Company HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
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



    <!--********************************
   Code Start From Here
 ******************************** -->




    <!--==============================Preloader==============================-->
    <div class="preloader ">
        <button class="th-btn style2 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <!--==============================Sidemenu============================== -->
    <div class="sidemenu-wrapper d-none d-lg-block ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget ">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="index.html"><img src="assets/img/logo.svg" alt="Insurax"></a>
                    </div>
                    <p class="about-text">There are several insurance solutions available to address specific needs and
                        risks that individuals or businesses may face. Best solution is here.</p>
                    <div class="th-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.behance.com/"><i class="fab fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Information</h3>
                <div class="th-widget-contact">
                    <div class="info-wrap">
                        <p class="info-wrap_text">
                            3891 Ranchview Dr. Richardson, California 62639
                        </p>
                    </div>
                    <div class="info-wrap">
                        <p class="info-wrap_text">
                            Mon-Fri : 09.00 am-05.00 pm
                        </p>
                    </div>
                    <div class="info-wrap">
                        <a href="tel:1145656865" class="info-wrap_link">
                            +11 (456) 568 65
                        </a>
                        <a href="mailto:info@insurax.com" class="info-wrap_link">info@insurax.com</a>
                    </div>
                </div>
            </div>
            <div class="widget widget_nav_menu  ">
                <h3 class="widget_title">Company</h3>
                <div class="menu-all-pages-container">
                    <ul class="menu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="service.html">Last Services</a></li>
                        <li><a href="portfolio.html">Photos Gallery</a></li>
                        <li><a href="blog.html">Blog Standard</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!--==============================Mobile Menu============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logo.svg" alt="Insurax"></a>
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
    <header class="th-header header-layout1">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.html"><img src="{{ asset('assets/img/logo.svg') }}" alt="Insurax"></a>
                            </div>
                        </div>
                        <div class="col-auto me-xxl-auto">
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
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <div class="header-info">
                                    <div class="header-info_icon">
                                        <i class="fas fa-phone-plus"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="header-info_label">Need Help? Talk with Us</span>
                                        <p class="header-info_link"><a href="tel:+1539873657">+111 (458 586 558)</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    
    @yield('content')

    <!--==============================Newsletter Area==============================-->

    <!--==============================Footer Area==============================-->
    <footer class="footer-wrapper footer-layout2" data-bg-src="{{ asset('assets/img/bg/footer_bg_2.png') }}">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xxl-3 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="index.html"><img src="{{ asset('assets/img/logo.svg') }}" alt="Insurax"></a>
                                </div>
                                <p class="about-text">Berkomitmen untuk menyediakan produk herbal solutif terbaik dan terus meningkatkan kualitasnya demi menyampaikan setiap kebaikan alam kepada masyarakat.</p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.behance.com/"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Company</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="service.html">Last Services</a></li>
                                    <li><a href="portfolio.html">Photos Gallery</a></li>
                                    <li><a href="blog.html">Blog Standard</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
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
                                        3891 Ranchview Dr. Richardson, California 62639
                                    </p>
                                </div>
                                <div class="info-wrap">
                                    <p class="info-wrap_text">
                                        Mon-Fri : 09.00 am-05.00 pm
                                    </p>
                                </div>
                                <div class="info-wrap">
                                    <a href="tel:1145656865" class="info-wrap_link">
                                        +11 (456) 568 65
                                    </a>
                                    <a href="mailto:info@insurax.com" class="info-wrap_link">info@insurax.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.png"
                                                alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html">21 March, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Be
                                                prepared for anything With our insurance.</a></h4>

                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.png"
                                                alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html">22 June, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Trust
                                                us to protect what you love most.</a></h4>
                                    </div>
                                </div>
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

    <!--********************************
   Code End  Here
 ******************************** -->



    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!--==============================
    All Js File
============================== -->
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
