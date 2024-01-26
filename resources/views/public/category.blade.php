@extends('layout.main')

@section('title', 'PT Niaga Wasilah Al Khair')

@section('content')

    <!--==============================Breadcumb============================== -->
    @php
        $categories = App\Models\Category::all();
    @endphp
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/new_img/bg_page.jpg') }}" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Product</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li><a href="{{ url('products') }}">Semua Produk</a></li>
                    @foreach ($categories as $data)
                    <li><a href="{{ url('category/' . $data->id) }}" class="tab-btn">{{ $data->nama_kategori }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--==============================Project Area==============================-->
    <section class="space">
        <div class="container">
            <div class="row gy-4 filter-active">
                @foreach ($product as $data)
                <div class="col-md-6 col-lg-4 cat1 filter-item">
                    <div class="project-card style-2">
                        <div class="project-img">
                            <img src="{{ asset('uploads/' . $data->gambar_3) }}" alt="project image">
                        </div>
                        <div class="project-content">
                            <a href="{{ url('product/' . $data->id) }}" class="icon-btn popup-image" tabindex="-1"><i class="fa-light fa-arrow-up-right"></i></a>
                            <h4 class="project-title"><a href="{{ url('product/' . $data->id) }}">{{ $data->nama_produk }}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
