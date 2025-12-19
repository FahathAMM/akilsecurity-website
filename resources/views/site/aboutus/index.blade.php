@extends('layout.app-site')
@section('title', 'About Us')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">About us</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Us Section Start -->
    <x-site.about.about-us />
    <!-- About Us Section End -->

    <!-- Our Approach Section Start -->
    <x-site.about.approach />
    <!-- Our Approach Section End -->

    <!-- What We Do Section Start -->

    <x-site.about.what-we-do />
    <!-- What We Do Section End -->

    <!-- Why Choose Us Section Start -->
    <x-site.about.why-choose-us />
    <!-- Why Choose Us Section End -->

    <!-- How It Work Section Start -->
    <x-site.about.how-it-work />
    <!-- How It Work Section End -->

    <!-- Our Team Section Start -->
    <x-site.about.our-team />
    <!-- Our Team Section End -->

    <!-- Our Testimonials Section Start -->
    <x-site.about.testimonials />
    <!-- Our Testimonials Section End -->

    <!-- Our Benefit Section Start -->
    <x-site.about.our-benefits />
    <!-- Our Benefit Section End -->

    <!-- Our Faqs Section Start -->
    <x-site.about.faq />
    <!-- Our Faqs Section End -->

@endsection
