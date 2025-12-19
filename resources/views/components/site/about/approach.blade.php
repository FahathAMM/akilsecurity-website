<div class="our-approach parallaxie">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp">{{ our_approach_section_title() }}</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                        {{ our_approach_title()[0] }}
                        <span>{{ our_approach_title()[1] }}</span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row align-items-center no-gutters">
            <div class="col-lg-5">
                <div class="our-approach-content">
                    @foreach (our_approach_items() as $index => $item)
                        <div class="mission-vision-item wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                            <div class="icon-box">
                                <img src="{{ asset($item['icon']) }}" alt="">
                            </div>
                            <div class="mission-vision-content">
                                <h3>{{ $item['title'] }}</h3>
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-7">
                <div class="our-approach-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset(our_approach_image()) }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
