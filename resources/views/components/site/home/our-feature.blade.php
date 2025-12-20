<div class="cta-box-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-box">
                    <div class="cta-box-content">
                        <div class="section-title dark-section">
                            <h2 class="wow fadeInUp" data-cursor="-opaque">{{ cta_title() }}</h2>
                        </div>

                        <div class="cta-contact-info">
                            @foreach (cta_contacts() as $contact)
                                <div class="cta-contact-item">
                                    <div class="icon-box">
                                        <img src="{{ asset($contact['icon']) }}" alt="">
                                    </div>
                                    <div class="cta-contact-content">
                                        <h3>{{ $contact['title'] }}</h3>
                                        <p><a href="{{ $contact['link'] }}">{{ $contact['value'] }}</a></p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="cta-box-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset(cta_image()) }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
