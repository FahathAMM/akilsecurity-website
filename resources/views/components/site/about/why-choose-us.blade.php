<div class="why-choose-us">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="why-choose-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset(why_choose_us_image()) }}" alt="">
                    </figure>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="why-choose-content">
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">
                            {{ why_choose_us_section_title() }}
                        </h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            {{ why_choose_us_title() }}
                        </h2>
                    </div>

                    <div class="why-choose-list">
                        @foreach (why_choose_us_items() as $index => $item)
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="{{ 0.4 + $index * 0.2 }}s">
                                <div class="icon-box">
                                    <img src="{{ asset($item['icon']) }}" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>{{ $item['title'] }}</h3>
                                    <p>{{ $item['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="why-choose-counter-list">
                    @foreach (why_choose_us_counters() as $counter)
                        <div class="why-choose-counter-item">
                            <div class="icon-box">
                                <img src="{{ asset($counter['icon']) }}" alt="">
                            </div>
                            <div class="why-choose-counter-content">
                                <h3>
                                    <span class="counter">{{ $counter['value'] }}</span>{{ $counter['suffix'] }}
                                </h3>
                                <p>{{ $counter['label'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
