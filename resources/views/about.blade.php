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


@endpush