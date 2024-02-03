@extends('layout.main')

@section('title', 'PT Niaga Wasilah Al Khair')

@section('content')

    <!--==============================Breadcumb============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/new_img/bg_page.jpg') }}" data-overlay="black"
        data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Tentang Kami</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('') }}">Home</a></li>
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
                            <img src="{{ asset('assets/img/shape/service-box-shape2.png') }}" alt="img">
                        </div>
                        <div class="service-box_icon">
                            <div class="global-icon">
                                <img src="{{ asset('assets/new_img/i_care/5.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-title h5">INTEGRITY</h3>
                            <p class="service-grid_text">Success without integrity is FAILURE</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-grid style4">
                        <div class="service-bg-shape">
                            <img src="{{ asset('assets/img/shape/service-box-shape2.png') }}" alt="img">
                        </div>
                        <div class="service-box_icon">
                            <div class="global-icon">
                                <img src="{{ asset('assets/new_img/i_care/2.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-title h5">COMPASSION</h3>
                            <p class="service-grid_text">If you want others to be happy, practice compassion.If you want to be happy, practice compassion.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-grid style4">
                        <div class="service-bg-shape">
                            <img src="{{ asset('assets/img/shape/service-box-shape2.png') }}" alt="img">
                        </div>
                        <div class="service-box_icon">
                            <div class="global-icon">
                                <img src="{{ asset('assets/new_img/i_care/3.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-title h5">ATITTUDE</h3>
                            <p class="service-grid_text">The most important thing you'll ever wear is your atittude</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-grid style4">
                        <div class="service-bg-shape">
                            <img src="{{ asset('assets/img/shape/service-box-shape2.png') }}" alt="img">
                        </div>
                        <div class="service-box_icon">
                            <div class="global-icon">
                                <img src="{{ asset('assets/new_img/i_care/1.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-title h5">RELIGIOUS</h3>
                            <p class="service-grid_text">Religion is the impotence of the human mind to deal with occurrences it cannot understand</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-grid style4">
                        <div class="service-bg-shape">
                            <img src="{{ asset('assets/img/shape/service-box-shape2.png') }}" alt="img">
                        </div>
                        <div class="service-box_icon">
                            <div class="global-icon">
                                <img src="{{ asset('assets/new_img/i_care/4.png') }}" alt="Icon">
                            </div>
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-title h5">EXCELLENCE</h3>
                            <p class="service-grid_text">Excellence is doing ordinary things extraordinarily well</p>
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
                <div class="shape-mockup jump z-index-3 d-sm-block d-none" data-right="0" data-bottom="0"><img
                        src="{{ asset('uploads/' . $about->gambar_2) }}" alt="img"></div>
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
    <div class="video-sec3 " data-bg-src="{{ asset('assets/new_img/bg_about_visi.jpg') }}" data-overlay="title"
        data-opacity="8">
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
                <h2 class="sec-title">Experienced Team Professionals</h2>
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
                            </div>
                            <div class="team-content">
                                <h3 class="team-title"><a>{{ $data->nama }}</a></h3>
                                <span class="team-desig">{{ $data->jabatan }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
