<div class="our-feature">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="our-feature-images">
                    <div class="feature-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset(feature_images()['feature_1']) }}" alt="">
                        </figure>
                    </div>

                    <div class="company-experience-info">
                        <div class="feature-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset(feature_images()['feature_2']) }}" alt="">
                            </figure>
                        </div>

                        <div class="company-experience-box">
                            <div class="company-experience-content">
                                <h2><span class="counter">{{ feature_experience()['years'] }}</span>+</h2>
                                <p>{{ feature_experience()['description'] }}</p>
                            </div>

                            <div class="our-client-images company-client-images">
                                @foreach (feature_clients()['images'] as $client)
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset($client) }}" alt="">
                                        </figure>
                                    </div>
                                @endforeach
                                <div class="client-image client-counter">
                                    <h3><span
                                            class="counter">{{ feature_clients()['counter']['number'] }}</span>{{ feature_clients()['counter']['suffix'] }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="our-feature-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ feature_section_title() }}</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            {{ feature_title()[0] }} <span>{{ feature_title()[1] }}</span>
                        </h2>
                    </div>

                    <div class="ferature-list">
                        @foreach (feature_list() as $index => $f)
                            <div class="ferature-list-item wow fadeInUp" data-wow-delay="{{ ($index + 1) * 0.2 }}s">
                                <div class="icon-box">
                                    <img src="{{ asset($f['icon']) }}" alt="">
                                </div>
                                <div class="ferature-list-content">
                                    <h3>{{ $f['title'] }}</h3>
                                    <p>{{ $f['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
