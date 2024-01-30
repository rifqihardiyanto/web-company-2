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
    <section class="space">
        <div class="container">
            <div class="error-img">
                <img src="{{ asset('assets/img/theme-img/error.svg') }}" alt="404 image">
            </div>
            <div class="error-content">
                <h2 class="error-title h3">Oops! Page Not Found!</h2>
                <p class="error-text">The page you are looking for does not exist. It might have been moved or deleted.</p>
                <a href="{{ url('/') }}" class="th-btn">Back To Home <i class="far fa-arrow-right"></i></a>
            </div>
        </div>
    </section>    

@endsection
