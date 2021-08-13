@extends('layout')

@push('content')

    <!--Page Title-->
    <section class="page-title" style="background-image: url({{url('assets/images/background/8.jpg')}});">
        <div class="auto-container">
            <div class="title-outer">
                <h1>{{ $page_title }}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>{{ $page_title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="small-container">
            <div class="sec-title text-center">
                <span class="sub-title">Contact Now</span>
                <h2>Write us a Message !</h2>
                <span class="divider"></span>
            </div>

            <!-- Contact box -->
            <div class="contact-box">
                <div class="row">
                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <span class="icon flaticon-worldwide"></span>
                            <h4><strong>Address</strong></h4>
                        </div>
                    </div>

                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <span class="icon flaticon-phone"></span>
                            <h4><strong>Phone</strong></h4>
                            <p><a href="#">(+234) 90 6798 7780</a></p>
                        </div>
                    </div>

                    <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <span class="icon flaticon-email"></span>
                            <h4><strong>Email</strong></h4>
                            <p><a href="mailto:support@example.com">support@medical.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form box -->
            <div class="form-box">
                <div class="contact-form">
                    <form action="#" method="post" id="email-form">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <div class="response"></div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="username" class="username" placeholder="Full Name *">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="email" placeholder="Email Address *">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="username" class="username" placeholder="Your Phone">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <textarea name="contact_message" class="message" placeholder="Massage"></textarea>
                                </div>

                            </div>

                            <div class="form-group col-lg-12 text-center pt-3">
                                <button class="theme-btn btn-style-one" type="button" id="submit" name="submit-form"><span class="btn-title">Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->

@endpush