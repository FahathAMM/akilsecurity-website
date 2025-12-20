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
                        <h1 class="wow fadeInUp" data-cursor="-opaque">{{ $service['title'] }}</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services.index') }}">services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $service['title'] }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">

                        <!-- Page Category List Start -->
                        <div class="page-catagery-list wow fadeInUp">
                            <h3>services category</h3>
                            <ul>
                                {{-- @foreach ($service['categories'] as $category)
                                    <li><a href="#">{{ $category }}</a></li>
                                @endforeach  --}}

                                @foreach ($servicesList as $category)
                                    <li><a href="{{ route('services.show', ['service' => $category['link']]) }}">
                                            {{ $category['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Page Category List End -->

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
                            @if (!empty($service['sidebar_cta']['logo']))
                                <div class="sidebar-cta-logo">
                                    <img src="{{ asset($service['sidebar_cta']['logo']) }}" alt="">
                                </div>
                            @endif
                            <div class="sidebar-cta-content">
                                <p>{{ $service['sidebar_cta']['text'] }}</p>
                            </div>
                            <div class="sidebar-cta-contact">
                                <div class="icon-box">
                                    <img src="{{ asset('site/images/icon-phone.svg') }}" alt="">
                                </div>
                                <div class="sidebar-cta-contact-content">
                                    <h3><a
                                            href="tel:{{ $service['sidebar_cta']['phone'] }}">{{ $service['sidebar_cta']['phone'] }}</a>
                                    </h3>
                                    <p>{{ $service['sidebar_cta']['phone_text'] }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar CTA Box End -->

                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">

                        <!-- Page Single Slider Start -->
                        <div class="page-single-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($service['slider_images'] as $image)
                                        <div class="swiper-slide">
                                            <figure class="image-anime" data-cursor-text="Drag">
                                                <img src="{{ asset($image) }}" alt="">
                                            </figure>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="page-single-pagination"></div>
                            </div>
                        </div>
                        <!-- Page Single Slider End -->

                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            @foreach ($service['service_description']['paragraphs'] as $paragraph)
                                <p class="wow fadeInUp">{{ $paragraph }}</p>
                            @endforeach

                            <!-- Service Why Choose Box Start -->
                            <div class="service-why-choose-box">
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">
                                    {{ $service['service_description']['why_choose']['title'] }}</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s">
                                    {{ $service['service_description']['why_choose']['description'] }}</p>

                                <div class="our-benefit-body service-why-choose-list">
                                    @foreach ($service['service_description']['why_choose']['items'] as $i => $item)
                                        <div class="benefit-body-item wow fadeInUp"
                                            @if ($i > 0) data-wow-delay="{{ $i * 0.2 }}s" @endif>
                                            <div class="icon-box">
                                                <img src="{{ asset($service['service_description']['why_choose']['icons'][$i]) }}"
                                                    alt="">
                                            </div>
                                            <div class="benefit-body-item-content">
                                                <h3>{{ $item }}</h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <p class="wow fadeInUp" data-wow-delay="0.8s">It provides comprehensive protection against
                                    malware, ransomware, and other threats, with real-time monitoring and proactive defense
                                    to safeguard all your connected devices and ensure business continuity.</p>
                            </div>
                            <!-- Service Why Choose Box End -->

                            <!-- Service Entry Feature Box Start -->
                            <div class="service-entry-feature-box">
                                <h2 class="wow fadeInUp">{{ $service['service_description']['features']['title'] }}</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    {{ $service['service_description']['features']['description'] }}</p>

                                <div class="service-feature-list">
                                    @foreach ($service['service_description']['features']['items'] as $i => $feature)
                                        <div class="service-feature-item wow fadeInUp"
                                            @if ($i > 0) data-wow-delay="{{ $i * 0.2 }}s" @endif>
                                            <div class="service-feature-box">
                                                <div class="icon-box">
                                                    <img src="{{ asset($feature['icon']) }}" alt="">
                                                </div>
                                                <div class="service-feature-title">
                                                    <h3>{{ $feature['title'] }}</h3>
                                                </div>
                                            </div>
                                            <div class="service-feature-content">
                                                <p>{{ $feature['description'] }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="service-entry-image-list">
                                    <div class="service-entry-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset($service['service_description']['features']['images']['main']) }}"
                                                alt="">
                                        </figure>
                                    </div>

                                    <div class="service-entry-list-content wow fadeInUp" data-wow-delay="0.6s">
                                        <p>
                                            {{ $service['service_description']['features']['images']['desc'] }}
                                        </p>
                                        <ul>
                                            @foreach ($service['service_description']['features']['images']['list'] as $li)
                                                <li>{{ $li }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Entry Feature Box End -->
                        </div>
                        <!-- Service Entry End -->

                        <!-- Page Single FAQs Start -->
                        <div class="page-single-faqs">
                            <div class="section-title">
                                <h2 class="wow fadeInUp" data-cursor="-opaque">Frequently <span>asked questions</span></h2>
                            </div>

                            <div class="faq-accordion" id="faqaccordion">
                                @foreach ($service['faqs'] as $i => $faq)
                                    <div class="accordion-item wow fadeInUp"
                                        @if ($i > 0) data-wow-delay="{{ $i * 0.2 }}s" @endif>
                                        <h2 class="accordion-header" id="heading{{ $i + 1 }}">
                                            <button
                                                class="accordion-button @if (!empty($faq['active'])) @else collapsed @endif"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $i + 1 }}"
                                                aria-expanded="{{ !empty($faq['active']) ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $i + 1 }}">
                                                {{ $faq['question'] }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $i + 1 }}"
                                            class="accordion-collapse collapse @if (!empty($faq['active'])) show @endif"
                                            aria-labelledby="heading{{ $i + 1 }}" data-bs-parent="#faqaccordion">
                                            <div class="accordion-body">
                                                <p>{{ $faq['answer'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Page Single FAQs End -->

                    </div>
                    <!-- Service Single Content End -->
                </div>
            </div>
        </div>
    </div>


    <!-- Page Service Single End -->

@endsection
