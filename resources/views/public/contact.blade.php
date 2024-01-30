@extends('layout.main')

@section('title', 'PT Niaga Wasilah Al Khair')

@section('content')

    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/new_img/bg_page.jpg') }}" data-overlay="black" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Contact Area
    ==============================-->
    <div class="space-top">
        <div class="container">
            <div class="row gy-20">
                <div class="col-xl-4">
                    <div class="contact-info-wrap">
                        <h3 class="mb-30">Get In Touch</h3>
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <i class="far fa-phone-volume"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="contact-info_title h6">Phone</h4>
                                <span class="contact-info_text">
                                    <a href="https://wa.me/{{ $contact->nomor_support }}" target="_blank">{{ $contact->nomor_support }}</a>
                                    <a href="https://wa.me/{{ $contact->nomor_konsultasi }}" target="_blank">{{ $contact->nomor_konsultasi }}</a>
                                </span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="contact-info_title h6">Write Email</h4>
                                <span class="contact-info_text">
                                    {{ $contact->email_support }}
                                </span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <i class="far fa-location-dot"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="contact-info_title h6">Location</h4>
                                <span class="contact-info_text">
                                    {{ $contact->lokasi }}
                                </span>
                            </div>
                        </div>
                        <h6 class="social-info_title">Follow Us</h6>
                        <div class="th-social style-white">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $contact->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <form action="mail.php" method="POST" class="contact-form3 ajax-contact h-100">
                        <h2 class="form-title h3 mb-30">Write a Massage</h2>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control style-white" name="name" id="name"
                                    placeholder="Full name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control style-white" name="email" id="email"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control style-white" name="number" id="number"
                                    placeholder="Phone Number">
                            </div>
                            <div class="form-group col-md-6">
                                <select name="subject" id="subject" class="form-select style-white">
                                    <option value="" disabled selected hidden>Subject</option>
                                    <option value="Web Development">Family Insurance</option>
                                    <option value="Brand Marketing">Health Insurance</option>
                                    <option value="UI/UX Designing">Life Insurance</option>
                                    <option value="Digital Marketing">Vehicle Insurance</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control style-white"
                                    placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn">Submit Now <i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map-sec">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.901373224165!2d109.92018097577784!3d-7.364951372476552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa1979e4a7a5f%3A0x7c75602f6f9cf748!2sPT%20Niaga%20Wasilah%20Al%20Khair!5e0!3m2!1sid!2sid!4v1705632675048!5m2!1sid!2sid"
            allowfullscreen="" loading="lazy"></iframe>
    </div>

@endsection
