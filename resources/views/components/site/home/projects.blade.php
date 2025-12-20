<div class="our-projects">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp">{{ projects_section_title() }}</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                        {{ projects_title()[0] }} <span>{{ projects_title()[1] }}</span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="our-projeect-box">
                    <div class="projects-list wow fadeInUp" data-wow-delay="0.4s">
                        @foreach (projects_items() as $project)
                            <div class="project-item {{ $project['active'] ? 'active' : '' }}">
                                <div class="project-image">
                                    <a href="{{ $project['link'] }}" data-cursor-text="View">
                                        <figure class="image-anime">
                                            <img src="{{ asset($project['image']) }}" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="project-content">
                                    <p><a href="{{ $project['link'] }}">{{ $project['category'] }}</a></p>
                                    <h3><a href="{{ $project['link'] }}">{{ $project['title'] }}</a></h3>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.6s">
                        <p>{{ projects_footer_text() }} <a href="{{ projects_footer_link() }}">all project</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
