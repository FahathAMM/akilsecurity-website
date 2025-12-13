<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Us Image Start -->
                <div class="about-us-image">
                    <!-- About Image Box Start -->
                    <div class="about-image-box about-img-1">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('site/images/about-image-1.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- About Image Box End -->

                    <!-- About Image Box Start -->
                    <div class="about-image-box">
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('site/images/about-image-2.jpg') }}" alt="">
                            </figure>
                        </div>

                        <div class="about-img-3">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('site/images/about-image-3.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- About Image Box Start -->

                    <!-- Get Free Security Circle Start -->
                    <div class="get-free-security-circle">
                        <a href="contact.html">
                            {{-- <img src="{{ asset('site/images/get-free-security-circle.svg') }}" alt=""> --}}
                            <img src="{{ asset('site/images/about/logo_circle.png') }}" alt="">
                        </a>
                    </div>
                    <!-- Get Free Security Circle End -->
                </div>
                <!-- About Us Image End -->
            </div>

            <div class="col-lg-6">
                <!-- About Us Content Start -->
                <div class="about-us-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ about_main_title() }}</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            {{ about_title()[0] }}
                            <span> {{ about_title()[1] }}</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            We provide reliable, cutting-edge IOT & alarm security
                            solutions to protect your digital assets, ensuring safety and peace of mind.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Us Body Start -->
                    <div class="about-us-body wow fadeInUp" data-wow-delay="0.6s">
                        <!-- About Us Body Image Start -->
                        <div class="about-us-body-img">
                            <figure class="image-anime">
                                <img src="{{ asset('site/images/about-body-img.png') }}" alt="">
                            </figure>
                        </div>
                        <!-- About Us Body Image End -->

                        <!-- About Us Body Content Start -->
                        <div class="about-us-body-content">
                            <h3>24/7 support assistance</h3>
                            <p>{{ about_support_description() }}</p>
                        </div>
                        <!-- About Us Body Content End -->
                    </div>
                    <!-- About Us Body End -->

                    <!-- About Us Footer Start -->
                    <div class="about-us-footer wow fadeInUp" data-wow-delay="0.8s">
                        <!-- About Footer List Start -->
                        <div class="about-footer-list">
                            <ul>
                                @foreach (about_points() as $point)
                                    <li>{{ $point }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- About Footer List End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <!-- About Content Button Start -->
                            <div class="about-contact-btn">
                                <div class="icon-box">
                                    <img src="{{ asset('site/images/icon-phone.svg') }}" alt="">
                                </div>

                                <div class="about-footer-btn-content">
                                    <h3><a href="tel:+91123456789">+91 123 456 789</a></h3>
                                </div>
                            </div>
                            <!-- About Content Button End -->

                            <!-- About Footer Button Start -->
                            <div class="about-footer-btn">
                                <a href="contact.html" class="btn-default">contact us</a>
                            </div>
                            <!-- About Footer Button End -->
                        </div>
                        <!-- About Footer Content End -->
                    </div>
                    <!-- About Us Footer End -->
                </div>
                <!-- About Us Content End -->
            </div>
        </div>
    </div>
</div>
