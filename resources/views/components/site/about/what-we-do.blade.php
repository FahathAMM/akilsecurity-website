<div class="what-we-do">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="what-we-do-image">
                    <div class="what-we-do-img-1">
                        <figure class="image-anime reveal">
                            <img src="{{ asset(what_we_do_images()['image_1']) }}" alt="">
                        </figure>
                    </div>

                    <div class="what-we-do-img-2">
                        <figure class="image-anime reveal">
                            <img src="{{ asset(what_we_do_images()['image_2']) }}" alt="">
                        </figure>
                    </div>

                    <div class="company-experience-box what-we-do-circle">
                        <h2>
                            <span class="counter">
                                {{ what_we_do_experience()['years'] }}
                            </span>+
                        </h2>
                        <p>{{ what_we_do_experience()['text'] }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">
                            {{ what_we_do_section_title() }}
                        </h3>

                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            {{ what_we_do_title()[0] }}
                            <span>{{ what_we_do_title()[1] }}</span>
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            {{ what_we_do_description() }}
                        </p>
                    </div>

                    <div class="what-we-do-body wow fadeInUp" data-wow-delay="0.6s">
                        <ul>
                            @foreach (what_we_do_points() as $point)
                                <li>{{ $point }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="what-we-list wow fadeInUp" data-wow-delay="0.8s">
                        @foreach (what_we_do_items() as $item)
                            <div class="what-we-item">
                                <div class="icon-box">
                                    <img src="{{ asset($item['icon']) }}" alt="">
                                </div>
                                <div class="what-we-item-content">
                                    <h3>{{ $item['title'] }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
