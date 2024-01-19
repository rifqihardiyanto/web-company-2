@extends('layout.main')

@section('title', 'Nashir | Product')

@section('content')

    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcrumb-bg.png" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Product</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Product</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================Project Area==============================-->
    <section class="space">
        <div class="container">
            <div class="text-center">
                <div class="portfolio-filter-btn filter-menu filter-menu-active mb-30">
                    <button data-filter="*" class="tab-btn active" type="button">All</button>
                    <button data-filter=".cat1" class="tab-btn" type="button">Family Insurance</button>
                    <button data-filter=".cat2" class="tab-btn" type="button">Business Insurance</button>
                    <button data-filter=".cat3" class="tab-btn" type="button">Life Insurance</button>
                    <button data-filter=".cat4" class="tab-btn" type="button">Health Insurance</button>
                </div>
            </div>
            <div class="row gy-4 filter-active">
                <div class="col-md-6 col-lg-4 cat1 filter-item">
                    <div class="project-card style-2">
                        <div class="project-img">
                            <img src="assets/img/project/portfolio_4_1.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <a href="assets/img/project/portfolio_4_1.png" class="icon-btn popup-image" tabindex="-1"><i
                                    class="fa-light fa-arrow-up-right"></i></a>
                            <h4 class="project-title"><a href="project-details.html">Secure Family's Financial</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 cat2 filter-item">
                    <div class="project-card style-2">
                        <div class="project-img">
                            <img src="assets/img/project/portfolio_4_2.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <a href="assets/img/project/portfolio_4_2.png" class="icon-btn popup-image" tabindex="-1"><i
                                    class="fa-light fa-arrow-up-right"></i></a>
                            <h4 class="project-title"><a href="project-details.html">Business Insure For future Secure</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 cat1 filter-item">
                    <div class="project-card style-2">
                        <div class="project-img">
                            <img src="assets/img/project/portfolio_4_3.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <a href="assets/img/project/portfolio_4_3.png" class="icon-btn popup-image" tabindex="-1"><i
                                    class="fa-light fa-arrow-up-right"></i></a>
                            <h4 class="project-title"><a href="project-details.html">Family First With Our Insurance</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 cat4 filter-item">
                    <div class="project-card style-2">
                        <div class="project-img">
                            <img src="assets/img/project/portfolio_4_4.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <a href="assets/img/project/portfolio_4_4.png" class="icon-btn popup-image" tabindex="-1"><i
                                    class="fa-light fa-arrow-up-right"></i></a>
                            <h4 class="project-title"><a href="project-details.html">Protection for Your Health</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 cat3 filter-item">
                    <div class="project-card style-2">
                        <div class="project-img">
                            <img src="assets/img/project/portfolio_4_5.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <a href="assets/img/project/portfolio_4_5.png" class="icon-btn popup-image" tabindex="-1"><i
                                    class="fa-light fa-arrow-up-right"></i></a>
                            <h4 class="project-title"><a href="project-details.html">Protect Your Legacy with life</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 cat1 cat3 filter-item">
                    <div class="project-card style-2">
                        <div class="project-img">
                            <img src="assets/img/project/portfolio_4_6.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <a href="assets/img/project/portfolio_4_6.png" class="icon-btn popup-image" tabindex="-1"><i
                                    class="fa-light fa-arrow-up-right"></i></a>
                            <h4 class="project-title"><a href="project-details.html">Coverage That Cares Family</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 cat3 cat4 filter-item">
                    <div class="project-card style-2">
                        <div class="project-img">
                            <img src="assets/img/project/portfolio_4_7.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <a href="assets/img/project/portfolio_4_7.png" class="icon-btn popup-image" tabindex="-1"><i
                                    class="fa-light fa-arrow-up-right"></i></a>
                            <h4 class="project-title"><a href="project-details.html">Protect Your Loved Ones</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 cat2 filter-item">
                    <div class="project-card style-2">
                        <div class="project-img">
                            <img src="assets/img/project/portfolio_4_8.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <a href="assets/img/project/portfolio_4_8.png" class="icon-btn popup-image" tabindex="-1"><i
                                    class="fa-light fa-arrow-up-right"></i></a>
                            <h4 class="project-title"><a href="project-details.html">Insurance For Business</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 cat4 filter-item">
                    <div class="project-card style-2">
                        <div class="project-img">
                            <img src="assets/img/project/portfolio_4_9.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <a href="assets/img/project/portfolio_4_9.png" class="icon-btn popup-image" tabindex="-1"><i
                                    class="fa-light fa-arrow-up-right"></i></a>
                            <h4 class="project-title"><a href="project-details.html">We Cover Your Health & Wealth</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
