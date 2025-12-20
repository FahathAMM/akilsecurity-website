@extends('layout.app-site')
@section('title', 'About Us')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">Our services</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">services</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Services Start -->
    <x-site.service.service-list />
    <!-- Page Services End -->

    <!-- Why Choose Us Section Start -->
    <x-site.about.what-we-do />
    <!-- Why Choose Us Section End -->

    <!-- Our Testimonials Section Start -->
    <x-site.about.our-team />
    <!-- Our Testimonials Section End -->

    <!-- What We Do Section Start -->
    <x-site.about.what-we-do />
    <!-- What We Do Section End -->

    <!-- Our Faqs Section Start -->
    <x-site.about.faq />
    <!-- Our Faqs Section End -->

@endsection
