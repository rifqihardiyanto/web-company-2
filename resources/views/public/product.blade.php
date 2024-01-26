@extends('layout.main')

@section('title', 'PT Niaga Wasilah Al Khair')

@section('content')

    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/new_img/bg_page.jpg') }}" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Portfolio Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Portfolio Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Project Area
    ==============================-->
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-img">
                        <img src="{{ asset('uploads/' . $product->gambar_1) }}" alt="Project Image">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-img d-lg-block d-none">
                        <img src="{{ asset('uploads/' . $product->gambar_2) }}" alt="Project Image">
                    </div>
                </div>
                <div class="col-xl-10">
                    <ul class="project-details-wrap">
                        <li>
                            <h6>Produk:</h6>
                            <p>{{ $product->nama_produk }}</p>
                        </li>
                        <li>
                            <h6>Kategori:</h6>
                            <p>{{ $product->category->nama_kategori }}</p>
                        </li>
                            <li>
                                <h6>Konsultasi:</h6>
                                <a href=""><p>08764927427 </p></a>
                            </li>
                    </ul>
                </div>
            </div>
            <div class="page-single mt-30">
                <div class="page-content">
                    <h2 class="page-title h3 mb-20">{{ $product->nama_produk }}</h2>
                    <p>{{ $product->deskripsi_1 }}</p>

                    <div class="row gy-30">
                        <div class="col-sm-4">
                            <div class="page-img">
                                <img src="{{ asset('uploads/' . $product->gambar_3) }}" alt="Project Image">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="page-img">
                                <img src="{{ asset('uploads/' . $product->gambar_4) }}" alt="Project Image">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="page-img">
                                <img src="{{ asset('uploads/' . $product->gambar_5) }}" alt="Project Image">
                            </div>
                        </div>
                    </div>
                    <p class="mt-40">{{ $product->deskripsi_2 }}</p>
                </div>
            </div>

        </div>
    </section>

@endsection
