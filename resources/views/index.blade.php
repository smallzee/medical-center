@extends('layout')

@push('content')

    <!-- Bnner Section One -->
    <section class="banner-section-one">
        <div class="banner-carousel owl-carousel owl-theme default-arrows dark">
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url({{url('assets/images/main-slider/1.jpg')}});">
                <div class="auto-container">
                    <div class="content-outer">
                        <div class="content-box">
                            <span class="title">Welcome to our Medical Care Center</span>
                            <h2>We take care our <br>patients health</h2>

                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">About Us</span></a>
                                <a href="#" class="theme-btn btn-style-two"><span class="btn-title">Our Services</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url({{url('assets/images/main-slider/2.jpg')}});">
                <div class="auto-container">
                    <div class="content-outer">
                        <div class="content-box">
                            <span class="title">Welcome to our Medical Care Center</span>
                            <h2>We take care our <br>patients health</h2>
                            <div class="text">I realized that becoming a doctor, I can only help a small community. <br>But by becoming a doctor, I can help my whole country. </div>
                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">About Us</span></a>
                                <a href="#" class="theme-btn btn-style-two"><span class="btn-title">Our Services</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bnner Section One -->

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">OUR MEDICAL</span>
                            <h2>We're setting Standards in Research what's more, Clinical Care.</h2>
                            <span class="divider"></span>
                            <p>We provide the most full medical services, so every person could have the pportunity o receive qualitative medical help.</p>
                            <p> Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and bore advanced restorative dentistry. We are among the most qualified implant providers in the AUS with over 30 years of uality training and experience.</p>
                        </div>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one"><span class="btn-title">More About</span></a>
                        </div>
                    </div>
                </div>

                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="video-link">
                            <a href="https://www.youtube.com/watch?v=4UvS3k8D4rs" class="play-btn lightbox-image" data-fancybox="images"><span class="flaticon-play-button-1"></span></a>
                        </div>
                        <figure class="image-1"><img src="{{url('assets/images/resource/image-1.png')}}" alt=""></figure>
                        <figure class="image-2"><img src="{{url('assets/images/resource/image-2.png')}}" alt=""></figure>
                        <figure class="image-3">
                            <span class="hex"></span>
                            <img src="{{url('assets/images/resource/image-3.png')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

@endpush