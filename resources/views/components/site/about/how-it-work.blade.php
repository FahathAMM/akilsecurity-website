<div class="how-it-work">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="how-it-work-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">
                            {{ how_it_work_section_title() }}
                        </h3>

                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            {{ how_it_work_title()[0] }}
                            <span>{{ how_it_work_title()[1] }}</span>
                        </h2>
                    </div>

                    <div class="work-step-list">
                        @foreach (how_it_work_steps() as $index => $step)
                            <div class="work-step-item wow fadeInUp" data-wow-delay="{{ 0.4 + $index * 0.2 }}s">
                                <div class="work-step-no">
                                    <h3>{{ $step['step'] }}</h3>
                                </div>
                                <div class="work-step-content">
                                    <h3>{{ $step['title'] }}</h3>
                                    <p>{{ $step['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="how-it-work-image">
                    <div class="how-it-work-img-1">
                        <figure class="image-anime">
                            <img src="{{ asset(how_it_work_images()['image_1']) }}" alt="">
                        </figure>
                    </div>

                    <div class="how-it-work-img-2">
                        <figure class="image-anime">
                            <img src="{{ asset(how_it_work_images()['image_2']) }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
