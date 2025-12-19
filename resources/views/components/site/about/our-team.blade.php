<div class="our-team">
    <div class="container">

        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title dark-section">
                    <h3 class="wow fadeInUp">{{ our_team_section_title() }}</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                        {{ our_team_title() }}
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach (our_team_members() as $index => $member)
                <div class="col-lg-3 col-md-6">
                    <div class="team-item wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                        <div class="team-image">
                            <a href="{{ $member['link'] }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset($member['image']) }}" alt="">
                                </figure>
                            </a>

                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="{{ $member['socials']['twitter'] }}"><i
                                                class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="{{ $member['socials']['facebook'] }}"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $member['socials']['instagram'] }}"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="team-content">
                            <h3><a href="{{ $member['link'] }}">{{ $member['name'] }}</a></h3>
                            <p>{{ $member['role'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
