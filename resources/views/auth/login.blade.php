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

    <!--Login Section-->
    <section class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-6 col-md-6 offset-md-3 col-sm-12">
                    <!-- Login Form -->
                    <div class="login-form">
                        <h2>{{$page_title}}</h2>

                        @include('flash')
                        <!--Login Form-->
                        <form method="post" action="{{route('login.store')}}">
                            @csrf
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" name="email" placeholder="Email Address" required>
                            </div>

                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>

                            <div class="form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">LOGIN</span></button>
                            </div>

                        </form>
                    </div>
                    <!--End Login Form -->
                </div>

            </div>
        </div>
    </section>
    <!--End Login Section-->

@endpush
