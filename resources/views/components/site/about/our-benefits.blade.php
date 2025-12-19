<div class="our-benefits">
    <div class="container-fluid">
        <div class="row no-gutters">

            <div class="col-lg-6">
                <div class="our-benefit-image">
                    <div class="benefit-img-1">
                        <figure class="image-anime">
                            <img src="{{ asset(benefits_images()['image_1']) }}" alt="">
                        </figure>
                    </div>

                    <div class="benefit-img-2">
                        <figure class="image-anime">
                            <img src="{{ asset(benefits_images()['image_2']) }}" alt="">
                        </figure>
                    </div>

                    <div class="contact-us-circle">
                        <a href="{{ benefits_footer_button()['link'] }}">
                            <img src="{{ asset(benefits_images()['circle_image']) }}" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="our-benefit-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ benefits_section_title() }}</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">{{ benefits_title() }}</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">{{ benefits_description() }}</p>
                    </div>

                    <div class="our-benefit-body wow fadeInUp" data-wow-delay="0.6s">
                        @foreach (benefits_body_items() as $item)
                            <div class="benefit-body-item">
                                <div class="icon-box">
                                    <img src="{{ asset($item['icon']) }}" alt="">
                                </div>
                                <div class="benefit-body-item-content">
                                    <h3>{{ $item['title'] }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="our-benefit-footer wow fadeInUp" data-wow-delay="0.8s">
                        <div class="benefit-footer-list">
                            <ul>
                                @foreach (benefits_footer_list() as $list_item)
                                    <li>{{ $list_item }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="benefit-footer-btn">
                            <a href="{{ benefits_footer_button()['link'] }}" class="btn-default">
                                {{ benefits_footer_button()['label'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
