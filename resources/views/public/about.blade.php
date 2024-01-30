@extends('layout.main')

@section('title', 'PT Niaga Wasilah Al Khair')

@section('content')

    <!--==============================Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/new_img/bg_page.jpg') }}" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Tentang Kami</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================Servce Area==============================-->
    <section class="service-sec space-bottom space">
        <div class="container">
            <div class="row justify-content-center service-slider2 th-carousel" data-slide-show="3" data-lg-slide-show="3"
                data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                <div class="col-lg-4 col-md-6">
                    <div class="service-grid style4">
                        <div class="service-bg-shape">
                            <img src="assets/img/shape/service-box-shape2.png" alt="img">
                        </div>
                        <div class="service-box_icon">
                            <div class="global-icon">
                                <img src="assets/img/icon/service_icon_about_1.svg" alt="Icon">
                            </div>
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-title h5"><a href="service-details.html">Trusted Company</a></h3>
                            <p class="service-grid_text">Facilisis arcu. Mauris mi orci, pulvinar ac finibus</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-grid style4">
                        <div class="service-bg-shape">
                            <img src="assets/img/shape/service-box-shape2.png" alt="img">
                        </div>
                        <div class="service-box_icon">
                            <div class="global-icon">
                                <img src="assets/img/icon/service_icon_about_2.svg" alt="Icon">
                            </div>
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-title h5"><a href="service-details.html">Refund Guarantee</a></h3>
                            <p class="service-grid_text">Dedicated Facilisis arcu. Mauris mi orci, pulvinar aca</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-grid style4">
                        <div class="service-bg-shape">
                            <img src="assets/img/shape/service-box-shape2.png" alt="img">
                        </div>
                        <div class="service-box_icon">
                            <div class="global-icon">
                                <img src="assets/img/icon/service_icon_about_3.svg" alt="Icon">
                            </div>
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-title h5"><a href="service-details.html">Non-Policy Fee</a></h3>
                            <p class="service-grid_text">Support Facilisis arcu. Mauris mi pulvinar venen</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-grid style4">
                        <div class="service-bg-shape">
                            <img src="assets/img/shape/service-box-shape2.png" alt="img">
                        </div>
                        <div class="service-box_icon">
                            <div class="global-icon">
                                <img src="assets/img/icon/service_icon_about_3.svg" alt="Icon">
                            </div>
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-title h5"><a href="service-details.html">Non-Policy Fee</a></h3>
                            <p class="service-grid_text">Support Facilisis arcu. Mauris mi pulvinar venen</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-grid style4">
                        <div class="service-bg-shape">
                            <img src="assets/img/shape/service-box-shape2.png" alt="img">
                        </div>
                        <div class="service-box_icon">
                            <div class="global-icon">
                                <img src="assets/img/icon/service_icon_about_3.svg" alt="Icon">
                            </div>
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-title h5"><a href="service-details.html">Non-Policy Fee</a></h3>
                            <p class="service-grid_text">Support Facilisis arcu. Mauris mi pulvinar venen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================Feature Area-2==============================-->
    <div class="feature-area-2 overflow-hidden">
        <div class=" position-relative">
            <div class="img-half img-left feature-thumb-2">
                <img src="{{ asset('uploads/' . $about->gambar_1) }}" alt="img">
                <div class="shape-mockup jump z-index-3 d-sm-block d-none" data-right="0" data-bottom="0"><img src="{{ asset('uploads/' . $about->gambar_2) }}" alt="img"></div>
            </div>
            <div class="container">
                <div class="row justify-content-lg-end">
                    <div class="col-xl-5 col-lg-6">
                        <div class="title-area space-bottom mb-0 ms-xl-0 ms-lg-4 ms-0 text-center text-lg-start">
                            <span class="sub-title">Get to know Us</span>
                            <h2 class="sec-title" style="margin-bottom: 10px">{{ $about->judul }}</h2>
                            <p class="mt-30 mb-40">{!! $about->deskripsi !!}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================Visi==============================-->
    <div class="video-sec3 " data-bg-src="{{ asset('assets/new_img/bg_about_visi.jpg') }}" data-overlay="title" data-opacity="8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area mb-0 text-lg-start text-center">
                        <span class="sub-title style3">Visi PT Niaga Wasilah AlKhair</span>
                        <h2 class="sec-title style2 text-white">"Mengamalkan sebaik baik manusia yang bermanfaat untuk
                            orang lain dengan menjual produk yang berkualitas berbahan herbal untuk masyarakat dan
                            lingkungan yang baik."</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Team Area ==============================-->
    <section class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Team</span>
                <h2 class="sec-title">Experience Team Members</h2>
            </div>
            <div class="row gy-30">
                <!-- Single Item -->
                @foreach ($managements as $data)
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-card">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="{{ asset('uploads/' . $data->gambar) }}" alt="Team">
                            </div>
                            <div class="team-social-activate">
                                <a class="team-social-activate_btn">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="team-social">
                                    <a target="_blank" href="mailto:{{ $data->email }}"><i class="fas fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a href="team-details.html">{{ $data->nama }}</a></h3>
                            <span class="team-desig">{{ $data->jabatan }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
