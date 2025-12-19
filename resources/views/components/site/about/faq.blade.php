<div class="our-faqs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ faq_section_title() }}</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            {{ faq_title()[0] }}
                            <span>{{ faq_title()[1] }}</span>
                        </h2>
                    </div>

                    <div class="faq-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset(faq_image()) }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="faq-accordion" id="accordion">
                    @foreach (faq_items() as $index => $item)
                        <div class="accordion-item wow fadeInUp" data-wow-delay="{{ $index * 0.2 }}s">
                            <h2 class="accordion-header" id="heading{{ $index + 1 }}">
                                <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $index + 1 }}"
                                    aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $index + 1 }}">
                                    {{ $item['question'] }}
                                </button>
                            </h2>
                            <div id="collapse{{ $index + 1 }}"
                                class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                aria-labelledby="heading{{ $index + 1 }}" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>{{ $item['answer'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
