@extends('layout.main')

@section('title', 'Nashir | Blog')

@section('content')

    <!--==============================Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcrumb-bg.png" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog Grid</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Blog Grid</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================Blog Area==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-3.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>Annette Black</a>
                                <a href="blog.html"><i class="fa-light fa-calendar-days"></i>21 Jul, 2023</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comments"></i>Comments(03)</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Family first with our insurance coverage</a>
                            </h2>
                            <p class="blog-text">Cras consequat consequat tincidunt. Sed placerat faucibus velit imperdiet
                                ultricies. Etiam lobortis enim quis justo viverra, sed sagittis diam semper. Etiam rutrum
                                volutpat tellus, non viverra justo vulputate vitae. Nunc quis libero a nisi elementum
                                condimentum dapibus vel nisi.</p>
                            <a href="blog-details.html" class="th-btn">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-3.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>Annette Black</a>
                                <a href="blog.html"><i class="fa-light fa-calendar-days"></i>21 Jul, 2023</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comments"></i>Comments(03)</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Family first with our insurance coverage</a>
                            </h2>
                            <p class="blog-text">Cras consequat consequat tincidunt. Sed placerat faucibus velit imperdiet
                                ultricies. Etiam lobortis enim quis justo viverra, sed sagittis diam semper. Etiam rutrum
                                volutpat tellus, non viverra justo vulputate vitae. Nunc quis libero a nisi elementum
                                condimentum dapibus vel nisi.</p>
                            <a href="blog-details.html" class="th-btn">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-3.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>Annette Black</a>
                                <a href="blog.html"><i class="fa-light fa-calendar-days"></i>21 Jul, 2023</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comments"></i>Comments(03)</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Family first with our insurance coverage</a>
                            </h2>
                            <p class="blog-text">Cras consequat consequat tincidunt. Sed placerat faucibus velit imperdiet
                                ultricies. Etiam lobortis enim quis justo viverra, sed sagittis diam semper. Etiam rutrum
                                volutpat tellus, non viverra justo vulputate vitae. Nunc quis libero a nisi elementum
                                condimentum dapibus vel nisi.</p>
                            <a href="blog-details.html" class="th-btn">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="th-pagination ">
                        <ul>
                            <li><a href="blog.html"><i class="fas fa-angles-left"></i></a></li>
                            <li><a href="blog.html">01</a></li>
                            <li><a href="blog.html">02</a></li>
                            <li><a href="blog.html">03</a></li>
                            <li><a href="blog.html">04</a></li>
                            <li><a href="blog.html"><i class="fas fa-angles-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_nav_menu  ">
                            <h3 class="widget_title">All Services</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="service-details.html">Insurance Strategy</a><span>(08)</span></li>
                                    <li><a href="service-details.html">Insurance Consulting</a> <span>(12)</span></li>
                                    <li><a href="service-details.html">Financial Planiing</a><span>(15)</span></li>
                                    <li><a href="service-details.html">Business Insurance</a><span>(21)</span></li>
                                    <li><a href="service-details.html">Family Insurance</a><span>(14)</span></li>
                                    <li><a href="service-details.html">Health Insurance</a><span>(05)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Post</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.png"
                                                alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fal fa-calendar-alt"></i> 21 June, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Secure
                                                your life's moments with us</a></h4>

                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.png"
                                                alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"> <i class="fal fa-calendar-alt"></i>22 June, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit"
                                                href="blog-details.html">Delivering solutions that Result unique
                                                situation.</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.png"
                                                alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"> <i class="fal fa-calendar-alt"></i>12 Jul, 2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">When
                                                asked for solutions, We provide best Insurance</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
