<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ !empty($page_title) ? $page_title ."-" : ""  }}  {{ env("APP_NAME") }} </title>
        <!-- Stylesheets -->
        <link href="{{url('assets/libs/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{url('assets/libs/css/style.css')}}" rel="stylesheet">
        <link href="{{url('assets/libs/css/responsive.css')}}" rel="stylesheet">

        <!--Color Themes-->
        <link id="theme-color-file" href="{{url('assets/libs/css/color-themes/default-theme.css')}}" rel="stylesheet">

        <!--Color Switcher Mockup-->
        <link href="{{url('assets/libs/css/color-switcher-design.css')}}" rel="stylesheet">

        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

    </head>
    <body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header header-style-one">

            <!-- Header top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="top-left">
                            <ul class="contact-list clearfix">
                                <li><i class="flaticon-back-in-time"></i>Mon - Sat 8.00 - 18.00. Sunday CLOSED</li>
                            </ul>
                        </div>
                        <div class="top-right">
                            <ul class="social-icon-one">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->

            <!-- Header Lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <!-- Main box -->
                    <div class="main-box">
                        <div class="logo-box">
                            <div class="logo"><a href="{{url('/')}}"><img src="{{url('assets/images/logo.png')}}" alt="" title=""></a></div>
                        </div>

                        <!--Nav Box-->
                        <div class="nav-outer">
                            <nav class="nav main-menu">
                                <ul class="navigation" id="navbar">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('about')}}">About Developer</a></li>
                                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                                </ul>
                            </nav>
                            <!-- Main Menu End-->

                            <div class="outer-box">
                                <button class="search-btn"><span class="fa fa-search"></span></button>
                                <a href="{{url('auth/login')}}"  class="theme-btn btn-style-one"><span class="btn-title">Staff Login</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">

                    <div class="main-box">
                        <div class="logo-box">
                            <div class="logo"><a href="{{url('/')}}"><img src="images/logo.png" alt="" title=""></a></div>
                        </div>

                        <!--Keep This Empty / Menu will come through Javascript-->
                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Header -->
            <div class="mobile-header">
                <div class="logo"><a href="{{url('/')}}"><img src="{{url('assets/images/logo.png')}}" alt="" title=""></a></div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">

                    <div class="outer-box">
                        <!-- Search Btn -->
                        <div class="search-box">
                            <button class="search-btn mobile-search-btn"><i class="flaticon-magnifying-glass"></i></button>
                        </div>

                        <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="fa fa-bars"></span></a>
                    </div>
                </div>
            </div>

            <!-- Mobile Nav -->
            <div id="nav-mobile"></div>

            <!-- Header Search -->
            <div class="search-popup">
                <span class="search-back-drop"></span>
                <button class="close-search"><span class="fa fa-times"></span></button>

                <div class="search-inner">
                    <form method="post" action="blog-showcase.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Search..." required="">
                            <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Header Search -->

        </header>
        <!--End Main Header -->

        @stack('content')

    <!-- Main Footer -->
        <footer class="main-footer">
            <!--Widgets Section-->
            <div class="widgets-section" style="background-image: url({{url('assets/images/background/7.jpg')}});">
                <div class="auto-container">
                    <div class="row">
                        <!--Big Column-->
                        <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <!--Footer Column-->
                                <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget about-widget">
                                        <div class="logo">
                                            <a href="{{url('/')}}"><img src="{{url('assets/images/logo-2.png')}}" alt="" /></a>
                                        </div>
                                        <ul class="social-icon-three">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget">
                                        <h2 class="widget-title">Our Link</h2>
                                        <ul class="user-links">
                                            <li><a href="{{url('auth/login')}}">Staff Login</a></li>
                                            <li><a href="{{url('contact')}}">Contact Us</a></li>
                                            <li><a href="{{url('about')}}">About Developer</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Big Column-->
                        <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">

                                <!--Footer Column-->
                                <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                                    <!--Footer Column-->
                                    <div class="footer-widget contact-widget">
                                        <h2 class="widget-title">Contact Us</h2>
                                        <!--Footer Column-->
                                        <div class="widget-content">
                                            <ul class="contact-list">


                                                <li>
                                                    <span class="icon flaticon-email"></span>
                                                    <div class="text">Do you have a Question?<br>
                                                        <a href="mailto:info@gmail.com"><strong>info@gmail.com</strong></a></div>
                                                </li>

                                                <li>
                                                    <span class="icon flaticon-back-in-time"></span>
                                                    <div class="text">Mon - Sat 8.00 - 18.00<br>
                                                        <strong>Sunday CLOSED</strong></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <!-- Scroll To Top -->
                <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="copyright-text">
                            <p>Copyright © 2020 <a href="{{url('/')}}">{{ env('APP_NAME') }}</a> All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Main Footer -->

    </div>


    <script src="{{url('assets/libs/js/jquery.js')}}"></script>
    <script src="{{url('assets/libs/js/popper.min.js')}}"></script>
    <script src="{{url('assets/libs/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/libs/js/jquery.fancybox.js')}}"></script>
    <script src="{{url('assets/libs/js/jquery.modal.min.js')}}"></script>
    <script src="{{url('assets/libs/js/mmenu.polyfills.js')}}"></script>
    <script src="{{url('assets/libs/js/mmenu.js')}}"></script>
    <script src="{{url('assets/libs/js/appear.js')}}"></script>
    <script src="{{url('assets/libs/js/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{url('assets/libs/js/owl.js')}}"></script>
    <script src="{{url('assets/libs/js/wow.js')}}"></script>
    <script src="{{url('assets/libs/js/script.js')}}"></script>
    <!-- Color Setting -->
    <script src="{{url('assets/libs/js/color-settings.js')}}"></script>
    </body>
</html>
