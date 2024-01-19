@extends('layout.main')

@section('title', 'Nashir | Blog')

@section('content')

    <!--============================== Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcrumb-bg.png" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
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
                            <img src="assets/img/blog/blog-s-1-3.jpg" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <i class="fa-light fa-calendar-days"></i>12 June, 2023
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
                            <blockquote>
                                <p>Proin dictum accumsan ante, vel cursus nulla congue quis. Aliquam a nisi pretium,
                                    facilisis arcu quis, placerat massa. Praesent ac odio quis massa commodo iaculis et at
                                    turpis. </p>
                                <cite>Dianne Russell</cite>
                            </blockquote>
                            <div class="row gy-30">
                                <div class="col-sm-6">
                                    <div class="thumb"><img src="assets/img/blog/blog-details-1.jpg" alt="img"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="thumb"><img src="assets/img/blog/blog-details-2.jpg" alt="img"></div>
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
                        <div class="widget widget_tag_cloud   ">
                            <h3 class="widget_title">Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">Insurance</a>
                                <a href="blog.html">Consulting</a>
                                <a href="blog.html">Covarage</a>
                                <a href="blog.html">Family Insurance</a>
                                <a href="blog.html">Health Insurance</a>
                                <a href="blog.html">Policy</a>
                                <a href="blog.html">Strategy</a>
                                <a href="blog.html">Solutions</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
