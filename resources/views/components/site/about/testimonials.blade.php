<div class="our-testimonials">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="section-title">
                    <h3 class="wow fadeInUp">{{ testimonials_section_title() }}</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                        {{ testimonials_title()[0] }}
                        <span>{{ testimonials_title()[1] }}</span>
                    </h2>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="testimonial-box parallaxie">

                    <!-- Video Button -->
                    <div class="testimonial-video-button">
                        <a href="{{ testimonials_video()['url'] }}" class="popup-video" data-cursor-text="Play">
                            <i class="fa-solid fa-play"></i>
                        </a>
                        <h3>{{ testimonials_video()['label'] }}</h3>
                    </div>

                    <!-- Slider -->
                    <div class="testimonial-slider-box">
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">
                                    @foreach (testimonials_slides() as $slide)
                                        <div class="swiper-slide">
                                            <div class="testimonial-item">
                                                <div class="testimonial-header">
                                                    {{-- <div class="testimonial-company-logo">
                                                        <img src="{{ asset($slide['company_logo']) }}" alt="">
                                                    </div> --}}
                                                    <div class="testimonial-quote">
                                                        <img src="{{ asset($slide['quote_icon']) }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-content">
                                                    @foreach ($slide['content'] as $paragraph)
                                                        <p>{{ $paragraph }}</p>
                                                    @endforeach
                                                </div>
                                                <div class="testimonial-body">
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="{{ asset($slide['author']['image']) }}"
                                                                alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="author-content">
                                                        <h3>{{ $slide['author']['name'] }}</h3>
                                                        <p>{{ $slide['author']['role'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="testimonial-btn">
                                    <div class="testimonial-button-prev"></div>
                                    <div class="testimonial-button-next"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Info -->
                        <div class="testimonial-contact-info">
                            <div class="testimonial-contact-box">
                                <div class="icon-box">
                                    <img src="{{ asset('site/images/icon-phone.svg') }}" alt="">
                                </div>
                                <div class="testimonial-contact-content">
                                    <p>If you have any questions or need help contact with team.
                                        <span><a href="tel:{{ testimonials_contact()['phone'] }}">
                                                {{ testimonials_contact()['phone'] }}
                                            </a></span>
                                    </p>
                                </div>
                            </div>

                            <div class="testimonial-contact-btn">
                                <a href="{{ route(testimonials_contact()['contact_page']) }}"
                                    class="btn-default">contact us</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
